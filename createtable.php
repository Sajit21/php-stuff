<?php

include("connection.php");

$sql = "CREATE TABLE IF NOT EXISTS users (
    id INT PRIMARY KEY AUTO_INCREMENT,
    username VARCHAR(50) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL UNIQUE,
    role VARCHAR(6) DEFAULT 'user',
    status TINYINT(1) DEFAULT 0,
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP,
    updated_at DATETIME DEFAULT CURRENT_TIMESTAMP 
)";



// $qry=$conn->query($sql);
// if(!$qry)
// {
//     die()
// }

$qry=mysqli_query($conn,$sql) or die(mysqli_error($conn));
if($qry)
{
    echo "user table created successfully";
}


?>