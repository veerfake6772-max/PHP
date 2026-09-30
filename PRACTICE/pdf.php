<?php

// include "db.php";
// require "vendor/autoload.php";
// $result = $conn->query("select * from user");
// $pdf = new TCPDF();
// $pdf->AddPage();
// $pdf->setFont('times', 'B', '12');
// $html = '<table border="1" cellpadding="5">
// <tr>
// <td>ID</td>
// <td>Name</td>
// <td>Email</td>
// <td>Password</td>
// </tr>
// ';
// while ($row = $result->fetch_assoc()) {
//     $html .= '
//     <tr>
// <td>' . $row['id'] . '</td>
// <td>' . $row["name"] . '</td>
// <td>' . $row["email"] . '</td>
// <td>' . $row["password"] . '</td>
// </tr>
// ';
// }

// $html .= '</table>';
// $pdf->writeHTML($html, true, false, true, false, '');
// $pdf->Output('k2_emp.pdf', 'D');



include "db.php";
require "vendor/autoload.php";

$result = $conn-> query("select * from user");
$pdf = new TCPDF();
$pdf -> addPage();
$pdf -> setFont("times","B",12);
$html='<table cellpadding="10" border="2" style="background-color:blue;">
<tr>
<td>ID</td>
<td>Name</td>
<td>Email</td>
<td>Password</td>
</tr>
';
while($row =$result-> fetch_assoc()){
    $html.='
    <tr>
    <td>'.$row['id'].'</td>
    <td>'.$row['name'].'</td>
    <td>'.$row['email'].'</td>
    <td>'.$row['password'].'</td>
    </tr>
    ';

}
$html.='
</table>';

$pdf->writeHTML($html,true,false,true,false,"");
$pdf -> Output('user.pdf','D')

?>