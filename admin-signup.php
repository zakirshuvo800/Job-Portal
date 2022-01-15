<?php

mysqli_connect('localhost', 'root', '', 'job');

if(isset($_POST['submit'])){
    if(!empty($_POST['email']) && ($_POST['password'])){
        $email=$_POST['email'];
        $password=$_POST['password'];

        $conn = mysqli_connect("localhost","root","","job");
        $query= "INSERT INTO admin(email, password) VALUES ('$email','$password')";

        if(mysqli_query($conn, $query)){
            echo "Your data have been saved successfully";
        }else{
            echo"Something is wrong with query";
        }
    }else{
        echo "Please fill all information";
    }
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="css/new.css">
    <title>Document</title>
</head>
<body>
<div class="s_left"><p>Admin signup</p></div>

<hr>
<form action="" method="post">
    <input type="text" name="email" placeholder="Type email ..."><br><br>
    <input type="password" name="password" placeholder="Type password ..."><br><br>
    <button type="submit" name="submit" class="btn-submit">Signup</button>
    <br>
    <br>
    <div class="back"><a style="color: white; padding: 0px 14px;" href="index.php">Back</a>
    </div>
</form>
</body>
</html>