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

    for ($x = 0; $x - 1 < 100; $x++) {
        //conditionts to meet for diffrent type of echo
        if ($x <= 20) {
            echo  "<i>$x</i></br>";
        } elseif ($x > 25 && $x <= 50 and $x != 42) {
            echo "<u>$x </u></br> ";
        } elseif ($x === 42) {
            echo "La Plateforme</br>";
        } else {
            echo " $x</br>";
        }
    }

    ?>

</body>

</html>