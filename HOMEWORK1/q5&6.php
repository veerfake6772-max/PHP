<?php

// $carmodels =["A-star","M4","Hector","CITY","POLO"];
// $car=["CITY","POLO"];

// for ($i=0; $i < count($carmodels) ; $i++) { 
//     echo $carmodels[$i] ."<br>";
// }



// $cars =["Suzuki"=> "100000","BMW"=>"200000","MG"=>"150000"];


// foreach ($cars as $car => $model) {
//     echo $car ."=> ".$model ."<br>";
// }

// array_push($carmodels,"CITY");
// print_r($carmodels);

// array_pop($carmodels);
// print_r($carmodels);

//  $result =  array_merge($carmodels,$car);
//     print_r($result);

// $result = array_slice($carmodels,0,3);
// print_r($result);

// $keys = array_keys($carmodels);
// print_r($keys);



$description1 = 'The Suzuki Swift is a compact and stylish car.';
// $description2 = "The BMW M4 is a powerful sports car.";


// echo $description1 ."<br>";
// echo $description1 ."<br>";

// $model="brezza";
// $price =25000;
// $modelprice = $model."=".$price;
// echo $modelprice;

// $pos = strpos($description1,"Swift");
// echo $pos

// $replace = str_replace("Swift","Brezza",$description1);
// echo $replace;

$size = strlen($description1);
echo $size."<br>";
$lower = strtolower($description1);
echo $lower."<br>";
$upper = strtoupper($description1);
echo $upper."<br>";
$sub = substr($description1,4,38);
echo $sub."<br>";

$short = trim($description1);
echo $short;

?>