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
        $nama="BUDI";
        $tugas=50;
        $uts=70;
        $uas=90;
        $hasil=(($tugas*0.3)+($uas*0.4)+($uts*0.3));
        
        echo("Nilai ");
        echo($nama);
        echo(" Adalah:");
        echo("<br>");
        if ($hasil>80)
        echo("Hasil : <b>A</b>");
        elseif ($hasil>=70)
        echo("Hasil : <b>B</b>");
        elseif ($hasil>=60)
        echo("Hasil : <b>C</b>");
        elseif ($hasil>=40)
        echo("Hasil : <b>D</b>");
        else
        echo("Hasil : <b>E</b>");
    ?>
    
</body>
</html>