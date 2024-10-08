<?php
require_once '../Models/User.php';
class AuthService {
    private $db;

    public function __construct($db) {
        $this->db = $db;
    }

    public function register($data) {
        $user = new User($this->db);
        $user->username = $data['username'];
        $user->firstname = $data['firstname'] ?? null; 
        $user->middlename = $data['middlename'] ?? null; 
        $user->lastname = $data['lastname'] ?? null; 
        $user->email = $data['email'];
        $user->password = password_hash($data['password'], PASSWORD_DEFAULT); 
        $user->created_at = date('Y-m-d H:i:s');
        $user->updated_at = date('Y-m-d H:i:s');
        $user->role = 0;  
        $user->row_delete = 0; 
        $user->countLogin = 0; 
        $user->img = $data['img'] ?? null; 
    
        if (!$user->create()) {
            error_log('Failed to create user: ' . var_export($data, true));
            return false; 
        }
        return true; 
    }
    

    public function login($email, $password) {
        $user = new User($this->db);
        $stmt = $this->checkUserByEmail($email);
        
        if ($stmt->rowCount() > 0) {
            $userData = $stmt->fetch(PDO::FETCH_ASSOC);
            
            if ($this->checkLockAccount($userData)) {
                return "Tài khoản của bạn đã bị khóa. Vui lòng thử lại sau.";
            }

            if (password_verify($password, $userData['password'])) {
                $user->user_id = $userData['user_id'];
                $user->countLogin = 0; 
                $user->update(); 
                return $userData;
            } else {
                $this->increaseLoginFail($userData['user_id']); 
                return "Sai email hoặc mật khẩu.";
            }
        } else {
            return "Tài khoản không tồn tại.";
        }
    }

    public function lockAccount($id) {
        $user = new User($this->db);
        $user->user_id = $id; 
        $user->lockedTime = date('Y-m-d H:i:s');
        $user->status = 0; 
        return $user->update(); 
    }

    public function checkLockAccount($userData) {
        if ($userData['status'] == 0 && isset($userData['lockedTime'])) {
            $lockedTime = strtotime($userData['lockedTime']);
            $currentTime = time();
            
            if (($currentTime - $lockedTime) > 600) {
                $this->unlockAccount($userData['user_id']);
                return false; 
            }
            return true; 
        }
        return false; 
    }

    // Mở khóa tài khoản
    private function unlockAccount($id) {
        $user = new User($this->db);
        $user->user_id = $id; 
        $user->status = 1; 
        $user->lockedTime = null; 
        return $user->update(); 
    }

    public function checkUserByEmail($email) {
        $query = "SELECT * FROM users WHERE email = :email AND row_delete = 0";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(":email", $email);
        $stmt->execute();
        return $stmt; 
    }

    private function increaseLoginFail($id) {
        $user = new User($this->db);
        $user->user_id = $id; 

        $stmt = $user->readOne(); 
        $userData = $stmt->fetch(PDO::FETCH_ASSOC);
        
        $countLoginFail = $userData['countLogin'] + 1; 
        if ($countLoginFail >= 5) {
            $this->lockAccount($id);
        } else {
            $query = "UPDATE users SET countLogin = :countLogin WHERE user_id = :user_id"; 
            $stmt = $this->db->prepare($query);
            $stmt->bindParam(":countLogin", $countLoginFail);
            $stmt->bindParam(":user_id", $id); 
            $stmt->execute();
        }
    }
}
?>
