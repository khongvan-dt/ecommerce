<?php
class User {
    private $conn;
    private $table_name = "users";

    public $user_id;
    public $username;
    public $firstname;
    public $middlename;
    public $lastname;
    public $email;
    public $password;
    public $role;
    public $row_delete;
    public $img;
    public $countLogin;
    public $lockedTime;
    public $status;
    public $created_at;
    public $updated_at;

    public function __construct($db) {
        $this->conn = $db;
    }

    // Lấy tất cả
    public function read() {
        $query = "SELECT * FROM " . $this->table_name . " WHERE row_delete = 0";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt;
    }

    // Lấy theo Id
    public function readOne() {
        $query = "SELECT * FROM " . $this->table_name . " WHERE row_delete = 0 AND user_id = :user_id";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(":user_id", $this->user_id);
        $stmt->execute();
        return $stmt;
    }

    // Kiểm tra sự tồn tại của email
    public function emailExists() {
        $query = "SELECT user_id FROM " . $this->table_name . " WHERE email = :email AND row_delete = 0 LIMIT 1";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(":email", $this->email);
        $stmt->execute();
        return $stmt->rowCount() > 0;
    }

    // Tạo người dùng
    public function create() {
        $query = "INSERT INTO " . $this->table_name . "
            SET username = :username, firstname = :firstname, middlename = :middlename, lastname = :lastname, 
                email = :email, password = :password, role = :role, img = :img, 
                created_at = :created_at, updated_at = :updated_at, row_delete = :row_delete";
        
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(":username", $this->username);
        $stmt->bindParam(":firstname", $this->firstname);
        $stmt->bindParam(":middlename", $this->middlename);
        $stmt->bindParam(":lastname", $this->lastname);
        $stmt->bindParam(":email", $this->email);
        $stmt->bindParam(":password", $this->password);
        $stmt->bindParam(":role", $this->role);
        $stmt->bindParam(":img", $this->img);
        $stmt->bindParam(":created_at", $this->created_at);
        $stmt->bindParam(":updated_at", $this->updated_at);
        $stmt->bindParam(":row_delete", $this->row_delete);

        return $stmt->execute();
    }

    // Cập nhật thông tin
    public function update() {
        $query = "UPDATE " . $this->table_name . "
            SET username = :username, firstname = :firstname, middlename = :middlename, lastname = :lastname, 
                email = :email, role = :role, img = :img, 
                updated_at = :updated_at" . 
                (!empty($this->password) ? ", password = :password" : "") . 
            " WHERE user_id = :user_id";
        
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(":username", $this->username);
        $stmt->bindParam(":firstname", $this->firstname);
        $stmt->bindParam(":middlename", $this->middlename);
        $stmt->bindParam(":lastname", $this->lastname);
        $stmt->bindParam(":email", $this->email);
        $stmt->bindParam(":role", $this->role);
        $stmt->bindParam(":img", $this->img);
        $stmt->bindParam(":updated_at", $this->updated_at);
        $stmt->bindParam(":user_id", $this->user_id);

        if (!empty($this->password)) {
            $stmt->bindParam(":password", password_hash($this->password, PASSWORD_DEFAULT));
        }

        return $stmt->execute();
    }

    // Xóa 
    public function delete() {
        $query = "UPDATE " . $this->table_name . "
            SET row_delete = 1
            WHERE user_id = :user_id";

        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(":user_id", $this->user_id);

        return $stmt->execute();
    }
}
?>
