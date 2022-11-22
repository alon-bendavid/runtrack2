<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>styls</title>
    <link rel="stylesheet" type="style1" href="css\style1.css">

</head>

<body>
    <main>
        <form action="" method="get">

            <!-- <input type="text" id="name" name="name">
            <input type="text" id="last-name" name="last-name"> -->
            <select name="styls" id="">
                <label for="">Choose A Style</label>
                <option value="style1">style1</option>
                <option value="style2">style2</option>
                <option value="style3">style3</option>



            </select>
            <button type="submit">Cahnge Style</button>

        </form>
        <?php
        if ($_GET['style2'] == true) {
            echo "style 2";
        }

        ?>


    </main>
</body>

</html>