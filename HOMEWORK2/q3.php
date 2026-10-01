<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
    </head>
    <body>
        <form method="POST">

        Name:
        <input type="text" name="name" id="">
        <br>
        Email:
        <input type="text" name="email">
        <br>
        Password: 
        <input type="text" name="pass" id="">
        <br>
        Confirm Password: 
        <input type="text" name="cpass" id="">
        <br>
        Job Title: 
        <input type="text" name="job" id="">
        <br>
        <button type="submit">Submit</button>
        
        </form>
        <script src="" async defer></script>
    </body>
</html>


<?php

if($_SERVER["REQUEST_METHOD"]==="POST"){
$name =$_POST["name"];
$email = $_POST["email"];
$pass =$_POST["pass"];
$cpass = $_POST["cpass"];
$job=$_POST['job'];
}

if(empty($name)){
 echo "<script> alert('Name id Required')</script>";
}
if ($pass != $cpass) {
    echo "<script> alert('Password mismatch')</script>";
}
if (!filter_var($email,FILTER_VALIDATE_EMAIL)) {
  echo "<script> alert('Format Mismatch')</script>";
}

?>