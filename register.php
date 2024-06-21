<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post" name="register" enctype="multipart/form-data" >
        <input type="text" name="username" placeholder="Username"><br><br>
        <input type="password" name="password" placeholder="password"><br><br>
        <input type="email" name="email" palceholder="you@domain.com"><br><br>
        <input type="submit" name="register" val="register" >
    </form>
    <div>
        Already have an account <a href="login.php">login</a>
    </div>
    <?php
    if(isset($_POST['register']))
    {
        $username=$_POST['username'];
        $password=$_POST['password'];
        $email=$_POST['email'];

        if(!empty($username) && !empty($password) && !empty($email)){

            $sql="INSERT INTO users(username,password,email) values('$username','$password','$email')";
            require("connection.php");
            //excuting the query
            $qry=mysqli_query($conn,$sql) or die("mysqli_error($conn)");
            if($qry){
                echo "$username registered successfully";
            }
        }
        else{
            echo "all fields are required";
        }


    }


?>
    
</body>
</html>