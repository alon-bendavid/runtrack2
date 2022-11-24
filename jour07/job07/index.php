<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="get">
        type a text:<input type="text" name="text">
        <button type="submit">Submit Selct</button>
        <select name="mode" id="">
            <option value="a">gras</option>
            <option value="b">cesar</option>
            <option value="c">plateforme</option>

        </select>

    </form>


    <?php
    function gras($str)
    {

        $capital = ['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z'];
        // var_dump($capital);
        // mark every word that start with a capital letter in BOLD letters.
        for ($i = 0; isset($str[$i]); $i++) {
            for ($j = 0; $capital; $j++) {
                if ($str[$i] == $j) {
                    echo $i;
                }
            }
            //     if ($str[$i] == $str[0] || $str[$i + 1] == " " || $str[$i - 1] == " ") {

            //         echo "<b>" . $str[$i] . "</b>";
            //     } else {
            //         echo $str[$i];
            //     }
            // }
        }
    }



    if ($_GET['mode'] === "a") {
        gras($_GET['text']);
    } elseif ($_GET['mode'] === "b") {
        echo "its b";
    } elseif ($_GET['mode'] === "c") {
        echo "its c";
    }




    ?>

</body>

</html>