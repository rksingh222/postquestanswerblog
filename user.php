<?php

include(ROOT_PATH . "db.php");
include(ROOT_PATH . "validateuser.php");

$errors = array();
$errorclass = "";
if(isset($_POST['signup'])){
    $errors = validateUser($_POST);
    if(!(empty($errors))){
        $errorclass = "error";
    }
    //dd($errors);
    //header('location:' . BASE_URL . '/adminloginpage.php' );*/
}
