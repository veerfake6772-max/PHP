<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <!--<![endif]-->
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
        Username:
        <input type="text" name="username">
        <br>
        Password:
        <input type="text" name="pass" id="">
        <br>
        <input type="checkbox" name="agree" value="yes" id="">Agree for Terms and Conditions</input>
        <br>
        <button type="submit">Submit</button>

        </form>
        <script src="" async defer></script>
    </body>
</html>


<?php
if ($_SERVER["REQUEST_METHOD"]==="POST") {
    $username = $_POST['username'];
    $pass = $_POST['pass'];
    $agree= isset($_POST['agree']) ? "Agreed": "Not Agreed";

echo "Welcome, $username. You have $agree to the terms and
conditions.";
    }




?>