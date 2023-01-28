<?php

function validatePost($post){
    $errors = array();

    if(isset($post['question']) && empty($post['question'])){
        $errors['question'] = "please enter question";
    }
    if(isset($post['answer']) && empty($post['answer'])){
        $errors['answer'] = "please enter answer";
    }
    return $errors;
}