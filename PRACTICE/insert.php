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

        Name:
        <input type="text" name="name" id="">
        <br>
        Age:
        <input type="text" name="age">
        <br>
        Salary:
        <input type="text" name="sal" id="">
        <br>
        <button type="submit">Submit</button>
    </form>

    <script src="" async defer></script>
</body>

</html>

<?php
include("db.php");

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = $_POST["name"];
    $age = $_POST["age"];
    $sal = $_POST["sal"];
    
}
$sql = $conn->prepare("insert into emp(name,age,sal) values(?,?,?)");
$sql->bind_param('sid', $name, $age, $sal);
if ($sql->execute()) {
    echo "Inserted Successfully";
}


?>