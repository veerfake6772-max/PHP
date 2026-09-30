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
   
<?php
include("db.php");

$result = $conn -> query("select * from emp"); ?>
<table border="1" padding="10px">
    <tr>
        <th>Name</th>
        <th>Age</th>
        <th>Salary</th>
        <th>Id</th>
    </tr>

    <?php while ($row = $result -> fetch_assoc()) {
        ?>
        <tr>
            <td><?php echo $row['name'] ?> </td>
            <td><?php echo $row['age'] ?></td>
            <td><?php echo $row['sal'] ?></td>
            <td><?php echo $row['id'] ?></td>
        </tr>

    <?php } ?>
</table>



</body>

</html>
