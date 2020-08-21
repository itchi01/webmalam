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
    $nama="budi";
    $uang=60000;
    $aqua=3000;
    $mie=2500;
    $saus=5000;

    $uang_keluar=(($aqua*2)+($mie*3)+($saus*1));
    echo "uang yang dikeluarkan budi untuk belanja adalah $uang_keluar <br>";
    
    $kembalian=(($uang)-($uang_keluar));
    echo "uang kembalian budi setelah benlanja adalah $kembalian";

    ?>
    
</body>
</html>