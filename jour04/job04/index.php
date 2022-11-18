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
            border: 0.5px solid black;
            width: 15rem;
        }
    </style>
</head>

<body>

    <form action="" method="post">

        Username: <input type="text" id="userName" name="userName">
        Password: <input type="text" id="Password" name="Password">
        <button type="submit">Send -></button>
    </form>



    <?php
    if ($_POST["userName"] == "John" && $_POST["Password"] == "Rambo") {
        echo "C’est pas ma guerre";
    } else {
        echo  "Votre pire cauchemar.";
    }


    ?>




</body>

</html>