<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- <style>
        form {
            display: flex;
            flex-direction: column;
            width: 55%;
            height: 9rem;
            align-items: center;
            background-color: grey;
            justify-content: space-around;
            border-radius: 15px;


        }

        body {
            display: flex;

            flex-direction: column;
            align-items: center;
            padding: 10%;
        }
    </style> -->
</head>


<body>
    <?php
    $count = 0;
    //count the number of boxes
    foreach ($_POST as $x) {

        $count++;
    }
    echo $count;
    var_dump($_POST)

    ?>

    <form action="" method="post">

        <input type="text" id="name" name="name">
        <input type="text" id="age" name="age">
        <button type="submit">Send -></button>
    </form>


</body>

</html>