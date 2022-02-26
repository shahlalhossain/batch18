<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title> PHP | Loop </title>

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
                Loop in PHP
            </div>
            <div class="card-body text-center">


            <?php

            // for ($x = 0; $x <= 10; $x++) {
            //     echo "The number is: " . $x;
            //     echo "<br>";
            // }
            
            // $colors = array("red", "green", "blue", "yellow");
            // $colors = ["red", "green", "blue", "yellow"];


            // $cars[0] = "Volvo";
            // $cars[1] = "BMW";
            // $cars[2] = "Toyota";

            // $countries = [
            //     "country1" => "Bangladesh",
            //     "country2" => "Japan",
            //     "country3" => "German",
            //     "country4" => "Rusia",
            // ];

            // var_dump($countries);

            $age = [
                "Peter" => 35,
                "Ben" =>37,
                "Joe" => 43
            ];
            echo "Peter is " . $age['Peter'] . " years old.";
            echo "<br>";
            print_r($age);


            // foreach ($colors as $item) {
            //     echo ucwords($item);
            //     echo "<br>";
            // }

            ?>

            </div>
        </div>
    </div>
    

</body>
</html>