<?php

function validateUser($post){
    $errors = array();
    if(empty($post['firstname'])){
        $errors['firstname'] = "please enter firstname";
    }
    if(empty($post['lastname'])){
        $errors['lastname'] = "please enter lastname";
    }
    if(empty($post['email'])){
        $errors['email'] = "please enter email";
    }
    if(empty($post['password'])){
        $errors['password'] = "please enter password";
    }

    $existingEmail = selectOne('registration',['email'=> $post['email']]);

    if($existingEmail && !(empty($existingEmail)){
        $errors['email'] = "email already exists";
    }
    return $errors;
}