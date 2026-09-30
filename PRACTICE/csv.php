<?php
include 'db.php';
header('content-type:text/csv');
header('content-disposition:attachment;filename=user.csv');
$output=fopen("php://output",'w');
fputcsv($output,array("id","name","email","password"));
$result = $conn -> query("select * from user");
while($row = $result -> fetch_assoc()) {
    fputcsv($output,$row);
}

?>