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
    $str = "On n’est pas le meilleur quand on le croit mais quand on le sait. ";
    //define arryas
    $dic = array(
        array("consonnes", 'b', 'c', 'd', 'f', 'g', 'h', 'j', 'k', 'l', 'm', 'n', 'p', 'q', 'r', 's', 't', 'v', 'w', 'x', 'z', 'B', 'C', 'D', 'F', 'G', 'H', 'J', 'K', 'L', 'M', 'N', 'P', 'Q', 'R', 'S', 'T', 'V', 'W', 'X', 'Z'),
        array("voyelles", 'a', 'e', 'i', 'o', 'u', 'y', 'A', 'E', 'I', 'O', 'U', 'Y')
    );
    $consonnes = 0;
    $voyelles = 0;
    // loop to check every letter in str if matches to consonnes array
    foreach ($dic[0] as $x) {
        for ($i = 0; isset($str[$i]); $i++) {
            if ($str[$i] == $x) {
                $consonnes++;
            }
        }
    }
    // loop to check every letter in str if matches to voyelles array
    foreach ($dic[1] as $x) {
        for ($i = 0; isset($str[$i]); $i++) {
            if ($str[$i] == $x) {
                $voyelles++;
            }
        }
    }
    // echo $consonnes . '<br/>';
    // echo $voyelles;




    //create table to present the count
    ?>
    <table>
        <tr>
            <!-- <th><?php echo $type ?></th> -->
            <th> voyelles</th>
            <th>consonnes</th>

        </tr>


        <tr>
            <td><?php echo $voyelles;  ?></td>
            <td><?php echo $consonnes; ?></td>


        </tr>


    </table>


</body>

</html>