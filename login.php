<?php   
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Login</title>
</head>
<body>
<form method="POST" name="login" action="">
        <label for="user">Username </label> <br>
        <input type="text" name="user" value="<?php if(isset($_COOKIE['uname'])) echo $_COOKIE['uname'];?>"><br>
        <label for="password">Password </label> <br>
        <input type="password" name="password" value="<?php if(isset($_COOKIE['password'])) echo $_COOKIE['password'];?>"><br>
        <input type="checkbox" name="check" value="remember">
        <label for="">Remember Me</label> <br><br>
        <input type="submit" name="login" value="login">
</form>
<?php
//processing the form
//checking the form is submitted or not
if(isset($_POST['login'])){
    //capturig the forms data
    $uname=$_POST['user'];
    $upass=$_POST['password'];

    if($uname=="admin" AND $upass=="admin"){
        $_SESSION["date"] = date("Ymdhisa");
        $_SESSION["name"] = $uname;

        //if(isset($_POST["tick"])){
        if($rem=="rem"){
            setcookie("uname","$uname",time()+(10*24*60*60),"/");
            setcookie("upass","$uname",time()+(10*24*60*60),"/");
        }

        header("location:dashboard.php");


    }
    else{
        echo "Login failed";
    }
}
?>
</body>
</html>

