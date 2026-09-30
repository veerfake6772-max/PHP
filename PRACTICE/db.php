<?php


$servername ="localhost";
$username="root";
$pass="";
$dbname="k2_php";

$conn=new mysqli($servername,$username,$pass,$dbname);

if(!$conn){
    echo "Not Connected";
}

?>