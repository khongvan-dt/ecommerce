<?php

class UserService {
    private $db;

    public function __construct($db) {
        $this->db = $db;
    }

    private function saveImage($imageFile) {
        if ($imageFile['error'] !== UPLOAD_ERR_OK) {
            return false; 
        }

        $targetDir = "Storage/ImageAvatar/"; 
        $fileName = basename($imageFile['name']);
        $targetFilePath = $targetDir . $fileName;

        if (file_exists($targetFilePath)) {
            return false; 
        }

        if (move_uploaded_file($imageFile['tmp_name'], $targetFilePath)) {
            return $targetFilePath; 
        } else {
            return false; 
        }
    }

  // Check if the email already exists in the database
  public function emailExists($email) {
    // Assume $this->db is a PDO instance
    $stmt = $this->db->prepare("SELECT COUNT(*) FROM users WHERE email = :email");
    $stmt->bindParam(':email', $email);
    $stmt->execute();
    return $stmt->fetchColumn() > 0; // Returns true if email exists
}

// Create a new user in the database
public function createUser($data) {
    $stmt = $this->db->prepare("INSERT INTO users (username, firstname, middlename, lastname, email, password, role, img) VALUES (:username, :firstname, :middlename, :lastname, :email, :password, :role, :img)");
    $stmt->bindParam(':username', $data['username']);
    $stmt->bindParam(':firstname', $data['firstname']);
    $stmt->bindParam(':middlename', $data['middlename']);
    $stmt->bindParam(':lastname', $data['lastname']);
    $stmt->bindParam(':email', $data['email']);
    $stmt->bindParam(':password', $data['password']);
    $stmt->bindParam(':role', $data['role']);
    $stmt->bindParam(':img', $data['img']);
    
    return $stmt->execute(); 
}

    public function updateUser($data) {
        $user = new User($this->db);
        $user->user_id = $data['user_id'];
        $user->firstname = $data['firstname'];
        $user->middlename = $data['middlename'];
        $user->lastname = $data['lastname'];
        $user->email = $data['email'];
        $user->role = $data['role'];

        if (isset($data['imageFile']) && $data['imageFile']['error'] !== UPLOAD_ERR_NO_FILE) {
            $imagePath = $this->saveImage($data['imageFile']);
            if ($imagePath !== false) {
                $user->img = $imagePath; 
            }
        }

        if (!empty($data['password'])) {
            $user->password = password_hash($data['password'], PASSWORD_DEFAULT);
        }

        $user->updated_at = date('Y-m-d H:i:s');
        return $user->update() ? true : "Lỗi khi cập nhật người dùng.";
    }

    // Xóa người dùng (soft delete)
    public function deleteUser($user_id) {
        $user = new User($this->db);
        $user->user_id = $user_id;
        return $user->delete() ? true : "Lỗi khi xóa người dùng.";
    }
}
?>
