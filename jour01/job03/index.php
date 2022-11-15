<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- <link rel="stylesheet" href="css\style.css"> -->
</head>

<body>
    <?php
    $bool = true;
    $int = 5;
    $str = "string";
    $float = 3.6;

    ?>
    <table>
        <tr>
            <!-- <th><?php echo $type ?></th> -->
            <th> type</th>
            <th> name</th>
            <th>value</th>
        </tr>


        <tr>
            <td>boolean</td>
            <td>bool</td>
            <td><?php echo $bool ?></td>

        </tr>

        <tr>
            <td>integer</td>
            <td>int</td>
            <td><?php echo $int ?></td>
        </tr>

        <tr>
            <td>str</td>
            <td>string</td>
            <td><?php echo $str ?></td>
        </tr>
        <tr>
            <td>float</td>
            <td>float</td>
            <td><?php echo $float ?></td>
        </tr>


    </table>



</body>

</html>