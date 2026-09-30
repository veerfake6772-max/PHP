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
    <form method="GET">

     Email:
    <input type="text" name="email">
    <br>
    Password:
    <input type="text" name="pass">
    <br>
    Subscribed?
    <input type="checkbox" name="subscribe" id="" value="yes">
    <br>
    <button type="submit">Submit</button>
    </form>
   
    <script src="" async defer></script>
</body>

</html>


<?php

if ($_SERVER["REQUEST_METHOD"] === "GET") {
    $email = $_GET["email"];
    $subscribed = isset($_GET["subscribe"]) ? "Subscribed" : "not Subscribed";

    echo "Your email is $email and you are $subscribed to newsletter";
}

?>