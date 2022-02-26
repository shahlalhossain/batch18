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

            // $x = 5; // global scope

            // function myTest($x) {
            //     // using x inside this function will generate an error
            //     echo "<p>Variable x inside function is: $x</p>";
            // }


            // myTest($x);
            // echo "<p>Variable x outside function is: $x</p>";

            function myTest() {
                $x = 5; // local scope
                echo "<p>Variable x inside function is: $x</p>";
            }

            myTest();
            
            // using x outside the function will generate an error
            echo "<p>Variable x outside function is: $x</p>";

            ?>

            </div>
        </div>
    </div>
    

</body>
</html>