<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $sql="SELECT * FROM users ORDER BY id DESC";
    include("../connection.php");
    $qry=mysqli_query($conn,$sql) or die(mysqli_error($conn));
    //for displaying all users
    if($qry){
        while($row=mysqli_fetch_array($qry)){
            echo $row["id"]." ";
            echo $row["username"]." ";
            echo $row["password"]." ";
            echo $row["email"]." ";
            echo $row["role"]." ";
            echo $row["status"]." ";
            echo $row["created_at"]." ";
            echo $row["updated_at"]." ";
            echo "<br>";











        }
    }




?>

    
</body>
</html>