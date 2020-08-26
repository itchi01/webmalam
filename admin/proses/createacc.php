<?php
include 'koneksi.php';

if (isset($_POST['create'])) {
    $id = uniqid();
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $nohp = $_POST['nohp'];
    $name = $_POST['nama'];
    $level = $_POST['level'];

    $_SESSION['nama'] = $name;
    $_SESSION['email'] = $email;

    $query_input = mysqli_query($koneksi, "insert INTO user VALUES(md5('$id'),'$username','$email',md5('$password'),'$nohp','$name','','$level')");

    if ($query_input) {
        echo '<script>alert("data berhasil diinput")
            window.location.href="../data_user.php";
            </script>';
    } else {
        echo '<script>alert("data gagal diinput")
        window.location.href="../data_user.php";
            </script>';
    }
}
