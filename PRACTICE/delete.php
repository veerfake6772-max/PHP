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
        id:
        <input type="text" name="id" id="">
        <br>
    

        <button type="submit">Submit</button>
    </form>


</body>

</html>

<?php
include("db.php");

if($_SERVER["REQUEST_METHOD"]==="POST"){
$id=$_POST["id"];


}

$sql= $conn -> prepare("delete from emp where id=?");
$sql -> bind_param('i',$id);
if($sql ->execute()){
    echo "Deleted";
}


?>