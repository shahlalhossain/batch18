<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

<?php 
 
// for ($x = 0; $x <= 10; $x++) { 
//       echo "The number is:". $x ;
//       echo "<br>";
    
//     } 
 
 
 
$colors = array(
        "red",
        "green",
        "blue color", 
        "yellow"
    );  
 
foreach ($colors as $value) {   
    echo ucwords($value); 
    echo "<br>";
} 


$counteries =[
    "country1"=> "bangladesh",
    "country2"=> "india",
    "country3"=> "japan",
    "country4"=> "italy",
    "country5"=> "pakstan",
];
var_dump($counteries);
?> 

</body>
</html>