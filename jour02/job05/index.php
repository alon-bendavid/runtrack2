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

    $n = 1000;
    for ($i = 2; $i <= $n; $i++) {
        for ($j = 2; $j <= $n; $i++) {
            if ($i % $j == 0) {
                break;
            }
        }

        if ($i == $j) {
            echo "<br/>" . $i;
        }
    }

    ?>

</body>