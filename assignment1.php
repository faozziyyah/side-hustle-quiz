<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <!-- range function that takes two arguments and returns an array -->
    <?php
        $number = range(0,5);
        print_r ($number);
    ?>    

    <br> <br>

    <!-- sum function of an array -->
    <?php
        $a = array(10,20,30);
        echo array_sum($a);
    ?>

</body>
</html>