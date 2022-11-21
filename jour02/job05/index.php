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
    echo "2 </br>" . "3 </br>" . "5 </br>" . "9 </br>" . "11 </br>";

    for ($num = 2; $num <= 1000; $num++) {
        if ($num % 2 === 0 or $num % 3 === 0 or $num % 5 === 0 or $num % 7 === 0 or $num % 9 === 0 or $num % 11 === 0) {
            // echo $num . '</br>';
        } else {

            echo $num . " </br>";
        }
    }
    ?>

</body>