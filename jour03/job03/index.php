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
    $str = "“I'm sorry Dave I'm afraid I can't do that”.";

    for ($i = 0; isset($str[$i]); $i++) {
        if ($str[$i] === "a" or $str[$i] === "e" or $str[$i] === "i" or $str[$i] === "I" or $str[$i] === "o" or $str[$i] === "u" or $str[$i] === "y") {
            echo $str[$i];
        }
    }


    ?>


</body>

</html>