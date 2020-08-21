<?php
include 'koneksi.php';
session_start();

if (isset($_POST['regis'])) {
    $id = uniqid();
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $nohp = $_POST['nohp'];
    $name = $_POST['nama'];
    $ps = !empty($_POST['persetujuan']) ? $_POST['persetujuan'] : '';
    $level = 'author';

    $_SESSION['nama'] = $name;
    $_SESSION['email'] = $email;

    $query_input = mysqli_query($koneksi, "insert INTO user VALUES(md5('$id'),'$username','$email',md5('$password'),'$nohp','$name','$ps','$level')");

    if ($query_input) {
        echo '<script>alert("data berhasil diinput")
            window.location.href="../login.php";
            </script>';
    } else {
        echo '<script>alert("data gagal diinput")
            window.location.href="../register.php";
            </script>';
    }
}
