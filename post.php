<?php

include(ROOT_PATH . "db.php");
include(ROOT_PATH . "validatepost.php");

$errors = array();
$errorclass = "";
$question = "";
$answer = "";
$option1 = "";
$option2 = "";
$option3 = "";
$option4 = "";
$success = "";

if(isset($_POST['postquestion'])){
    unset($_POST['postquestion']);
    $errors = validatePost($_POST);
    if(!(empty($errors))){
        $question = $_POST['question'];
        $answer = $_POST['answer'];
        $option1 = $_POST['option1'];
        $option2 = $_POST['option2'];
        $option3 = $_POST['option3'];
        $option4 = $_POST['option4'];
        $errorclass = "error";
    }
    else{
        $_POST['reg_id']=$_SESSION['reg_id'];
        $postid = insertQuery("postquestion", $_POST);
        $success = "visible";
    }
}