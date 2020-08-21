<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
<?php
        $a=4;
        $b=5;

        echo "$a==$b:".($a==$b);
        echo "<br>$a != $b :".($a != $b);
        echo "<br>$a > $b :".($a > $b);
        echo "<br>$a < $b :".($a < $b);
        echo "<br>($a == $b) && ($a > $b) :".(($a != $b) && ($a > $b));
        echo "<br>($a == $b) || ($a > $b) :".(($a != $b) || ($a > $b));

    ?>

</body>
</html>