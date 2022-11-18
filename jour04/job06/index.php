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

    <form action="" method="get">

        Number: <input type="text" id="Number" name="Number">

        <button type="submit">Submit</button>
    </form>



    <?php
    if ($_GET["Number"] % 2 == 0) {
        echo "Nombre pair";
    } else {
        echo  "Nombre impair.";
    }


    ?>




</body>

</html>