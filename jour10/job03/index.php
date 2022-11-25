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
    $request = $mysqli->query("SELECT prenom, nom, naissance  from etudiants where sexe = 'Femme'");
    //insert into n array
    // $fetched_table = $request->fetch_array();
    ?>
    <!-- create an html table with students data using php -->
    <table>
        <?php
        echo "<thead><tr>
        <th>prenom</th>
        <th>nom</th>
        <th>naissance</th>
     
         </tr></thead>";
        //loop tp extract data from table 
        while (($fetched_table = $request->fetch_array())  != null) {
            echo "<tr>" .
                "<td>" . $fetched_table['prenom'] . "</td>" .
                "<td>" . $fetched_table['nom'] . "</td>" .
                "<td>" . $fetched_table['naissance'] . "</td>" .

                "</tr>";
        }




        ?>

    </table>
</body>


</html>