<?php
require_once '../Services/AuthService.php';

class AuthController
{
    private $authService;

    public function __construct($db)
    {
        $this->authService = new AuthService($db);
    }

    public function handleLogin()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $this->login();
        } else {
            $this->showLoginForm();
        }
    }

    public function showLoginForm($error = null)
    {
        include 'views/login.php';
    }

    public function login()
    {
        $email = $_POST['email'] ?? '';
        $password = $_POST['password'] ?? '';

        $result = $this->authService->login($email, $password);

        if (is_array(value: $result)) {
            $_SESSION['user'] = $result;
            $this->redirectUser($result['role']);
        } else {
            $this->showLoginForm(error: $result);
        }
    }


    private function redirectUser($role)
    {
        switch ($role) {
            case 0:
                header('Location: views/admin/index.php');
                break;
            case 1:
                header('Location: views/user/index.php');
                break;
            case 2:
                header('Location: views/components/admin/dashboard.php');
                break;
            default:
                header('Location: process.php?action=login');
                break;
        }
        exit();
    }

    public function handleRegister()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $this->register($_POST);
        } else {
            $this->showRegisterForm();
        }
    }

    public function showRegisterForm($error = null)
    {
        include '../../views/register.php';
    }


    public function register($data)
    {
        if (empty($data['username']) || empty($data['email']) || empty($data['password'])) {
            $this->showRegisterForm("Please fill in all required fields.");
            return;
        }

        if ($this->authService->checkUserByEmail($data['email'])) {
            $this->showRegisterForm("Email already exists.");
            return;
        }

        if (isset($data['imageFile'])) {
            $data['img'] = $this->uploadImage($data['imageFile']);
        } else {
            $data['img'] = null;
        }

        if ($this->authService->register($data)) {
            header('Location: views/admin/index.php');
            exit();
        } else {
            $this->showRegisterForm("Registration failed. Please try again.");
        }
    }




    private function uploadImage($imageFile)
    {
        if ($imageFile['error'] === UPLOAD_ERR_OK) {
            $targetDir = "uploads/";
            $targetFile = $targetDir . basename($imageFile['name']);


            if (move_uploaded_file($imageFile['tmp_name'], $targetFile)) {
                return $targetFile;
            } else {
                return null;
            }
        }
        return null;
    }


    public function logout()
    {
        unset($_SESSION['user']);
        session_destroy();
        header('Location: process.php?action=login');
        exit();
    }
}
