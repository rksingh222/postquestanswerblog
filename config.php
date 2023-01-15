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
reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP) AUTO_INCREMENT = 100";

if($conn->query($sql)){
}else{
    if($conn->errno == 1050)
    {
    }
    else{
        die("Connection Failed " . $conn->error .$conn->errno);
    }
    
}
