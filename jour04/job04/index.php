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

        <input type="text" id="name" name="name">
        <input type="text" id="last-name" name="last-name">
        <button type="submit">Send -></button>
    </form>



    <table>
        <th>Argument</th>
        <th>Valeur</th>
    </table>

    <?php

    foreach ($_POST as $x => $value) {

        echo "<table> <tr><td>$x</td><td> $value</td></tr></table>";
    }

    ?>



</body>

</html>