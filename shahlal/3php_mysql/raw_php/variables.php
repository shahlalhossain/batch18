<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title> PHP | Variables </title>

    <link rel="stylesheet" href="../bootstrap/bootstrap_librabry/css/bootstrap.min.css">

    <style>

    </style>
</head>
<body>
    <br>
    
    <!-- <h3 class="text-center">Variables in PHP</h3> -->

    <div class="container">
        <div class="card border-success mb-3">
            <div class="card-header text-center">
                Variables in PHP
            </div>
            <div class="card-body text-center">


            <?php

            $variable1 = 255;
            $variable2 = 255.00;
            $countryName = "Bangladesh";
            $date_of_birth = "2012-12-12";
            $color = "Black";
            $_array1 = [1,2,3,500,600,89,56];
            $variable3 = "255";
            $Variable3 = "500";
            $txt = "Hello world!";

            $x = 5;
            $y = 10.5;

            $txt = "Bangladesh";
            $txt = "Rajshahi";
            echo "I love " . $txt . ".";
            echo "<br>";

            echo $x + $y;
            echo "<br>";

            $x = 500;
            $y = 400;
            $sum = $x + $y;
            echo ($sum);
            

            ?>

            </div>
        </div>
    </div>
    

</body>
</html>