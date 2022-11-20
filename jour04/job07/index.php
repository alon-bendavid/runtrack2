<!-- #number of bricks for height and floor
bricks = int(input("type number of bricks "))

#space outside of the pyrmide
space = bricks

#space inside pyrmide
midspace = 0

#pyrmide structure

for x in range(bricks):
    if x != bricks:
        
        print(space*" "  + "/" + midspace*" " + "\ " )
    midspace += 2
    space -= 1
    x += 1
    if x == bricks:
        print(space*" "  + "/"+ midspace*"_"+ "\ " ) -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <main>
        <!-- form two boxes to recive height and witdth -->
        <form action="" method="get">

            height: <input type="text" id="height" name="height">
            width: <input type="text" id="width" name="width">
            <button type="submit">Submit</button>
        </form>



        <pre>
<!-- check input and echo structure based of input -->
<?php

$height = $_GET["height"];
$width = $_GET["width"];
//structure of the roof 
for ($row = 0; $row < $height; $row++) {
    for ($line = $row; $line < $width; $line++) {

        echo " ";
    }


    echo  "/";
    for ($j = 0; $j < $row; $j++) {
        echo  "_";
    }
    for ($h = 0; $h < $row; $h++) {
        echo  "_";
    }
    echo "\</br>";
}
//structure of the house body
for ($Rbody = 0; $Rbody < $row; $Rbody++) {

    for ($Lbody = 0; $Lbody < $width / 2; $Lbody++) //loop to create the space till structure
    {
        echo " ";
    }

    echo "|";
    for ($Lbody = 0; $Lbody < $width; $Lbody++) //loop to create the middle space 
    {
        echo " ";
    }
    echo "|</br>";
}
for ($g = 0; $g < $width / 2; $g++) {

    echo " ";
}
for ($g = 0; $g < $width + 2; $g++) {

    echo "_";
}
// for ($floor = 0; $floor < $width * 2; $floor++) {
//     echo "_";
// }

// for ($x = 0; $x <= $width; $x++) {

//     echo  "_";
// }





?>
</pre>

    </main>
</body>

</html>