<?php
session_start();
ob_start(); 
require_once '../Controllers/AuthController.php';
require_once '../../config/Database.php';

$database = new Database();
$db = $database->getConnection();  

$authController = new AuthController($db);

if (isset($_POST['action'])){
    switch ($_POST['action']) {
        case 'login':
            $authController->handleLogin();
            break;
            
        case'register':
            $authController->handleRegister();
            break;
            
        default:
            echo "Action not found!";
            break;
    }
}else{
    header('Location: ../views/register.php');
}
?>
