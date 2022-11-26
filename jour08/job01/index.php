<?php
session_start(); //start session

if (isset($_POST['del'])) {
    // session_destroy();
    $_SESSION['nbv'] = 0;
}

$_SESSION['nbv'] += 1; //set session variable
echo "You visited this page " . $_SESSION['nbv'] . " times";
//Check if session is set, for some reason 'nbvisites' name doesnt work!
// if (isset($_SESSION['nbv'])) {
//     echo "You visited this page " . $_SESSION['nbv'] . " times";
// }


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <main>
        <form action="" method="post">
            <button type="submit" name="del">Reset</button>
        </form>
        <?php


        ?>


    </main>

</body>

</html>