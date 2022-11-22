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
    //define text 
    // for ($i = 0; isset($str[$i]); $i++) 
    $str = "Certaines choses changent, et d'autres ne changeront jamais";


    $newTable = "";
    for ($i = 1; isset($str[$i]); $i++) {

        $newTable .= $str[$i];
    }
    $newTable .= $str[0];
    echo ($newTable);


    ?>




</body>

</html>