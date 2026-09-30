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

    Full Name:
    <input type="text" name="name"></input>
    <br>
    Phone:
    <input type="text" name="phone" value=""></input>
    <br>
    Brand:
    <select name="brand" id="">
        <option value="Toyota">Toyota</option>
        <option value="Ford">Ford</option>
        <option value="Tesla">Tesla</option>
    </select>
    <br>

    <button type="submit">Submit</button>

    </form>
        <script src="" async defer></script>
    </body>
</html>

<?php

if($_SERVER["REQUEST_METHOD"]==="POST"){
    $name = $_POST["name"];
    $phone = $_POST["phone"];
    $brand=$_POST["brand"];

    echo "Hello, $name. Your Phone number is $phone and your preferred car brand is $brand";
}


?>