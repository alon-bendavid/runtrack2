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
    // decler number var

    for ($x = 1; $x - 1 < 100; $x++) {
        //conditionts to meet for diffrent type of echo
        if ($x % 3 == 0 && $x % 5 == 0) {
            echo "FizzBuzz</br>";
        } elseif ($x % 3 == 0) {
            echo  "Fizz</br>";
        } elseif ($x % 5 == 0) {
            echo "Buzz</br> ";
        } else {
            echo " $x</br>";
        }
    }

    ?>

</body>