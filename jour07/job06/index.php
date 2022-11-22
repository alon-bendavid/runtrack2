<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <pre>

<?php
function leetSpeak($str)
{

    for ($i = 0; isset($str[$i]); $i++) {
        // if ($str[$i] === "a") {
        //     // echo $str[$i];
        //     $str[$i] = 4;
        // }
        switch ($str[$i]) {
            case "a":
            case "A":
                $str[$i] = 4;
                break;
            case "b":
            case "B":
                $str[$i] = 8;
                break;
            case "e":
            case "E":
                $str[$i] = 3;
                break;
            case "g":
            case "G":
                $str[$i] = 6;
                break;
            case "l":
            case "L":
                $str[$i] = 1;
                break;
            case "s":
            case "S":
                $str[$i] = 5;
                break;
            case "t":
            case "T":
                $str[$i] = 7;
                break;
        }
    }
    // echo $str;
    return $str;
}
echo  leetSpeak("streets Are Tiny ");


?>
</pre>
</body>

</html>