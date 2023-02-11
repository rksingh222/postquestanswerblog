<?php
session_start();
require('config.php');

function dd($value)
{
    echo "<pre>", print_r($value, true), "</pre>";
    die();
}

function executeQuery($sql, $data){
    global $conn;
    $stmt = $conn->prepare($sql);
    $values = array_values($data);
    $types = str_repeat('s', count($values));
    $stmt->bind_param($types, ...$values);
    $stmt->execute();

    return $stmt;
}

function insertQuery($table, $data)
{
    global $conn;
    
    /* $data = [
        'firstname' => 'Rahul',
        'lastname' => 'Singh',
        'email' => 'hack@hack.com',
        'password' => 'hack'
    ]; */

    //$sql = "INSERT INTO $table (firstname,lastname,email, password) VALUES (";

    $i = 0;
    $sql = "INSERT INTO $table (";
    foreach($data as $key => $value){
        if($i === 0){
            $sql = $sql . $key;
        }
        else{
            $sql = $sql .",".$key;
        }
        $i++;
        
    }
    $i = 0;
    $sql = $sql . ") VALUES (" ;
    foreach ($data as $key => $value){
        if($i == 0){
            $sql = $sql . "?";
        }
        else{
            $sql = $sql . ",?";
        }
        $i++;
    }
    $sql = $sql . ")";
    //echo $sql;

    $stmt = executeQuery($sql, $data);
    $id = $stmt->insert_id;
    //echo $id;
}

function selectOne($table, $conditions)
{
    global $conn;
    $sql = "SELECT * FROM $table";

    $i = 0;
    foreach ($conditions as $key => $value) {
        if ($i == 0) {
            $sql = $sql . " WHERE $key=?";
        } else {
            $sql = $sql . " AND $key=?";
        }
        $i++;
    }

    $sql = $sql . " LIMIT 1";
      
    //echo $sql;

    $stmt = executeQuery($sql, $conditions);

    $records = $stmt->get_result()->fetch_assoc();
    return $records;
}

function selectAll($table, $conditions = [])
{

    global $conn;

    $sql = "SELECT * FROM $table";
    if (empty($conditions)) {
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $records = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
        return $records;
    } else {
        $i = 0;
        foreach ($conditions as $key => $value) {
            if ($i == 0) {
                $sql = $sql . " WHERE $key=?";
            } else {
                $sql = $sql . " AND $key=?";
            }
            $i++;
        }

        $stmt = executeQuery($sql, $conditions);

        $records = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
        return $records;
    }
}
