<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table,
        th,
        td {
            border: 1px solid black;
        }
    </style>
</head>

<body>
    <?php
    //define text 
    // for ($i = 0; isset($str[$i]); $i++) 
    $str = "Les choses que l'on possède finissent par nous posséder";



    for ($i = -1; isset($str[$i]); $i--) {
        echo $str[$i] . "</br>";
    }


    ?>




</body>

</html>