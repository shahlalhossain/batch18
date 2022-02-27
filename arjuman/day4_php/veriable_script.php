<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

<!-- <?php
  
  
  
  $x = 5; // global scope 
 
        function myTest($x){
            echo "<p>Variable x inside function is: $x</p>";
            } 

        myTest($x);
            echo "<p>Variable x outside function is: $x</p>";
 ?> -->



<?php

$A =5;
$B =5;
$C =6;
$D =6;

if (($A==$B)&&($C==$D)){
    echo "true";
}else{
    echo "false";
}
?>
<br>
<?php

$hasLaptop = 1;
$x = ($hasLaptop ==1)? "yes" : "no" ;
    echo $x;

?>

</body>
</html>