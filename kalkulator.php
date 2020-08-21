<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>
    <div class="container">
        <div class="row my-5 py-5">
        <!-- input nilai -->
            <div class="col-md-6 border border-info py-5">
                <form class="form-inline" action="" method="POST">
                        <div class="form-group mb-2 col-sm-12">
                            <label for="" class="sr-only">Nilai 1</label>
                            <input type="number" class="form-control" placeholder="isi angka" name="nilai_satu" value="">
                        </div>
                        <div class="form-group mb-2 col-sm-12">
                            <label for="" class="sr-only">Nilai 2</label>
                            <input type="number" class="form-control" placeholder="isi angka" name="nilai_dua">
                        </div>
                        <div class="col-sm-12">
                            <button type="submit" class="btn btn-outline-warning mb-2" name="tambah">+</button>
                            <button type="submit" class="btn btn-outline-primary mb-2" name="kurang">-</button>
                            <button type="submit" class="btn btn-outline-danger mb-2" name="kali">X</button>
                            <button type="submit" class="btn btn-outline-info mb-2" name="bagi">/</button>
                        </div>
                    
            </div>
                <?php

                    if(isset($_POST['tambah'])){
                        $nilai_1=$_POST['nilai_satu'];
                        $nilai_2=$_POST['nilai_dua'];
                        $tambah=$nilai_1+$nilai_2;
                    }else if(isset($_POST['kurang'])){
                        $nilai_1=$_POST['nilai_satu'];
                        $nilai_2=$_POST['nilai_dua'];
                        $kurang=$nilai_1-$nilai_2;
                    }else if(isset($_POST['kali'])){
                        $nilai_1=$_POST['nilai_satu'];
                        $nilai_2=$_POST['nilai_dua'];
                        $kali=$nilai_1*$nilai_2;
                    }else if(isset($_POST['bagi'])){
                        $nilai_1=$_POST['nilai_satu'];
                        $nilai_2=$_POST['nilai_dua'];
                        $bagi=$nilai_1/$nilai_2;
                    }
                ?>
                <div class="col-md-6 border border-info py-5">
                    <!-- output nilai -->
                    <div class="d-print-none alert alert-dark" id="hasil" role="alert">
                        <?php 
                            echo "".!empty($tambah)?$tambah:'';
                            echo "".!empty($kurang)?$kurang:'';
                            echo "".!empty($kali)?$kali:'';
                            echo "".!empty($bagi)?$bagi:'';
                            ?>
                    </div>
                    <button class="btn btn-dark" onclick="clearBox('hasil')">Reset</button>
                </div>
            </form>
        </div>
    </div>
    <script src="js/bootstrap.js"></script>
</body>
</html>