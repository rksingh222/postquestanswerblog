<?php

function validateUser($post){
    $errors = array();
    if(isset($post['firstname']) && empty($post['firstname'])){
        $errors['firstname'] = "please enter firstname";
    }
    if(isset($post['lastname']) && empty($post['lastname'])){
        $errors['lastname'] = "please enter lastname";
    }
    if(isset($post['email']) && empty($post['email'])){
        $errors['email'] = "please enter email";
    }
    if(isset($post['password']) && empty($post['password'])){
        $errors['password'] = "please enter password";
    }

    //$existingEmail = selectOne('registration',['email'=> $post['email']]);

    //if($existingEmail && !(empty($existingEmail))){
    //    $errors['email'] = "email already exists";
    //}
    return $errors;
}