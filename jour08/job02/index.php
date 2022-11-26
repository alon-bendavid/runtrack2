<?php
session_start(); //start session
//delete count
if (isset($_POST['del'])) {
    $_COOKIE['login'] = 0;
}
//increase cockies count
setcookie('login', $_COOKIE['login'] += 1, time() + 48000);

echo $_COOKIE['login'];
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