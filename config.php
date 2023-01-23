<?php 

$host = "127.0.0.1";
$username= "root";
$password= "Rahul22-2-85";
$dbname = "post";

$conn = new mysqli($host, $username, $password, $dbname);

if($conn->connect_error){
    die("connection failed" . $conn->connect_error);
}



$sql = "CREATE TABLE registration(reg_id INT NOT NULL AUTO_INCREMENT PRIMARY KEY, 
firstname VARCHAR(255) NOT NULL, lastname VARCHAR(255) NOT NULL,
email VARCHAR(255) NOT NULL, password VARCHAR(255), 
reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
FOREIGN KEY (reg_id) REFERENCES postquestion (reg_id) ON DELETE CASCADE ) AUTO_INCREMENT = 100";

/*
$sql = "CREATE TABLE registration(reg_id INT NOT NULL AUTO_INCREMENT PRIMARY KEY, 
firstname VARCHAR(255) NOT NULL, lastname VARCHAR(255) NOT NULL,
email VARCHAR(255) NOT NULL, password VARCHAR(255), 
reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP) AUTO_INCREMENT = 100";
*/

//Create table postquestion
$sql = "CREATE TABLE postquestion(question_id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
reg_id INT NOT NULL, question TEXT NOT NULL, answer TEXT NOT NULL, option1 VARCHAR(255) NOT NULL,
option2 VARCHAR(255) NOT NULL, option3 VARCHAR(255) NOT NULL, option4 VARCHAR(255) NOT NULL,
question_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,FOREIGN KEY (reg_id) REFERENCES registration (reg_id) ON DELETE CASCADE )";

if($conn->query($sql)){
}else{
    if($conn->errno == 1050)
    {
    }
    else{
        die("Connection Failed " . $conn->error .$conn->errno);
    }
    
}
