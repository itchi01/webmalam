<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<hr>Tugas<br><br>
    <?php
        // looping genap 
        $genap=1;

        for($genap=2; $genap <=20; $genap+=2){
            echo "$genap ";
        }
        echo "<br><br>";
    ?>
    <?php
        // looping ganjil 
        $ganjil=1;

        for($genap=1; $ganjil <=20; $ganjil+=2){
            echo "$ganjil ";
        }
        echo "<br><br>";
    ?>
    <?php
        // looping kali 2 
        $kali2=1;

        for($kali2=2; $kali2 <=64; $kali2*=2){
            echo "$kali2 ";
        }
        echo "<br><br>";
    ?>
    <?php
        // looping tambah 3 
        $tambah3=1;

        for($tambah3=3; $tambah3 <=20; $tambah3+=3){
            echo "$tambah3 ";
        }
        echo "<br><br>";
    ?>
    <?php
        // looping kelipatan 
        $lipat=1;
        $i1="1";

        for($lipat=4; $lipat <=254; $lipat*=2){
            echo $lipat -$i1 ;
            echo " ";
        }
        echo "<br><br>";
    ?>
</body>
</html>