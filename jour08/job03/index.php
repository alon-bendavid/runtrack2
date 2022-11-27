<?php
session_start();
//start a session
// $_SESSION['users'] = array($_GET['submit']);
// $_SESSION['users'] = $_GET['PRENOM'];

//insert submited name into the session variable

// var_dump($_POST['users']);



// echo $_SESSION['users'];

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
    <!-- form to submit a name -->
    <form action="" method="$_GET">
        <input type="text" name="PRENOM" placeholder="PRENOM">
        <button type="submit" name="submit"> submit</button>
        <button type="submit" name="delete"> delete </button>

    </form>
    <?php
    //insert input value into a session array variable
    if (isset($_GET['submit'])) {
        $_SESSION['PRENOM'][] = $_GET['PRENOM'];
        // array_push($_SESSION['users'], $_GET['PRENOM']);
    }
    //deleting names from array
    // var_dump($_SESSION['PRENOM']);
    if (isset($_GET['delete'])) {
        unset($_SESSION['PRENOM']);
    }
    //printing them 
    // var_dump($_SESSION['PRENOM']);
    foreach ($_SESSION['PRENOM'] as $name) {
        echo $name . '<br>';
    }
    ?>


</body>

</html>