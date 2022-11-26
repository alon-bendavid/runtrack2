<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>students table</title>
    <style>
        table,
        th,
        td {
            border: 1px solid black;
            width: 50vw;
        }
    </style>
</head>

<body>

    <?php
    //conect into phpmyadmin database
    $mysqli = new mysqli("localhost", "root", "", "jour09");
    //select students table 
    $request = $mysqli->query("SELECT * from salles");
    //insert into n array
    // $fetched_table = $request->fetch_array();
    ?>
    <!-- create an html table with students data using php -->
    <table>
        <?php
        echo "<thead><tr>
        <th>Nom</th>
        <th>Capacite</th>
        </tr></thead>";
        //loop tp extract data from table 
        while (($fetched_table = $request->fetch_array())  != 0) {
            echo "<tr>" . "<td>" . $fetched_table['nom'] .
                "</td>" . "<td>" . $fetched_table['capacite'] . "</td>" . "</tr>";
        }


        ?>

    </table>
</body>


</html>