<html>
<head>
    <title></title>
</head>
<body>
    <?php
        $nim=7120115023;
        $nama="rais amin";
        $nilai=90.0;
        $status=FALSE;

        echo"NIM :".$nim."<br>";
        echo"Nama :".$nama."<br>";
        echo"Nilai :".$nilai."<br>";
        echo"$nilai <br>";
        printf("Nilai :%.2f <br>",$nilai);
        if($status){
            echo"Anda Masih Kuliah";
        }
        else{
            echo"Anda Sudah Tidak Kuliah";
        }
    ?>
    <hr>
    <!--konstant-->
    <?php
        define("nama", "rais amin");
        define("alamat", "banda aceh");
        define("no_hp", "08522222222");

        echo("Nama :".nama."Alamat :".alamat."no hp :".no_hp."");
    ?>

</body>
</html>