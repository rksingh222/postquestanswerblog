<?php

include(ROOT_PATH . "db.php");
include(ROOT_PATH . "validateuser.php");

$errors = array();
$errorclass = "";
$firstname = "";
$lastname = "";
$email = "";
$password = "";

if(isset($_POST['login'])){
    unset($_POST['login']);
    $errors = validateUser($_POST);
    if(!(empty($errors))){
        $email = $_POST['email'];
        $password = $_POST['password'];
        $errorclass = "error";
    }
    else{
        $user = selectOne("registration", $_POST);
        if(!$user){
            $errors['emailandpasswordinvalid'] = "visible";
        }else{
            $_SESSION['reg_id'] = $user['reg_id'];
            $_SESSION['username'] = $user['username'];
            $_SESSION['password'] = $user['password'];
            $_SESSION['message'] = 'You are now logged in';
            $_SESSION['type'] = 'success';
            header('location:' . BASE_URL . '/home.php' );
        }
    }
}
if(isset($_POST['signupfrormlogin'])){
    unset($_POST['signupfrormlogin']);
    header('location:' . BASE_URL . '/adminsignuppage.php' );
}
if(isset($_POST['loginfromsignup'])){
    unset($_POST['loginfromsignup']);
    header('location:' . BASE_URL . '/index.php' );
}

if(isset($_POST['signup'])){
    unset($_POST['signup']);
    $errors = validateUser($_POST);

    if(!(empty($errors))){
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $errorclass = "error";
    }else{
        $userid = insertQuery("registration", $_POST);
        header('location:' . BASE_URL . '/index.php');
    }
    //dd($errors);
    
}
