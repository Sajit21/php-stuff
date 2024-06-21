<?php

define("UNAME","root");
define("UPASS","");
define("HOST","localhost:3306");
define("DB","Students");
$conn=mysqli_connect(HOST,UNAME,UPASS,DB) or die("unable to connect to database") ;
// if($conn->connect_error){
// }
// else{
//     echo "connected to database";
// }



?>