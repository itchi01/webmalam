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
        $i=1;
        for ($i=0; $i <5 ; $i++) { 
            echo "*";
        }
    ?>
    <hr>
    <?php
        // contoh 1
        for ($i = 1; $i <=10; $i++) {
            echo "$i";
        }
        echo "<br> <br>";

        // contoh 2 
        for ($i = 1; ; $i++) {
            if ($i > 10) {
                break;
            }
            echo "$i";
        }
        echo "<br> <br>";

        // contoh 3 
        $i = 1;
        for (; ; ) {
            if ($i > 10) {
                break;
            }
            echo "$i";
            $i++;
        } echo "<br><br>";

        // contoh 4 
        for ($i = 1; $i <= 10; print "$i", $i++);
        echo "<br> <br>";

    ?>
    <hr>
    <?php
        // menampilkan angka 
        $a=1;

        for ($a=1; $a <= 5; $a++){
        echo "$a";
    }
    echo "<br><br>";

        // menampilkan string 
        $nama = 1;
        for ($nama = 1; $nama < 5; $nama++) {
            echo "U and Only U <br><br>";
        }
    ?>
    <hr>
    <?php
        // menampilkan jumlah nilai yang sama sebanyak jumlah arrray 
        $hewan=array(
            'ayam',
            'kambing',
            'kucing',
            'sapi'
        );
        foreach ($hewan as $key => $data) {
            echo "" .$hewan[2];
        }
        echo "<br> <br>"
    ?>
    <?php
        // menampilkan jumlah angka yang dipilih dengan array sebanyak jumlah array 
        $angka=array(
            1,
            2,
            3,
            4
        );
        foreach ($angka as $key => $data) {
            echo "" .$angka[2]*$angka[3];
        }
    ?>
</body>
</html>