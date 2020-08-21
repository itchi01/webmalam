<?php
session_start();
include 'koneksi.php';
if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = md5($_POST['password']);

    $query = mysqli_query($koneksi, "SELECT * FROM user WHERE username='$username' AND password='$password' ");
    $cek = mysqli_num_rows($query);
    $data = mysqli_fetch_assoc($query);

    if ($cek > 0) {
        if ($data['level'] == 'admin') {
            $_SESSION['username'] = $data['username'];
            $_SESSION['id_user'] = $data['id_user'];
            $_SESSION['level'] = $data['level'];
            $_SESSION['email'] = $data['email'];
            $_SESSION['nama'] = $data['nama'];

            echo "<script>alert('Selamat Datang Admin')
                window.location.href='../index.php';        
            </script>";
        } else if ($data['level'] == 'author') {
            $_SESSION['username'] = $data['username'];
            $_SESSION['level'] = $data['level'];
            $_SESSION['id_user'] = $data['id_user'];
            $_SESSION['email'] = $data['email'];
            $_SESSION['nama'] = $data['nama'];

            echo "<script>alert('Selamat Datang author')
                window.location.href='../index.php';        
            </script>";
        } else if ($data['level'] == 'operator') {
            $_SESSION['username'] = $data['username'];
            $_SESSION['level'] = $data['level'];
            $_SESSION['id_user'] = $data['id_user'];
            $_SESSION['email'] = $data['email'];
            $_SESSION['nama'] = $data['nama'];

            echo "<script>alert('Selamat Datang operator')
                window.location.href='../index.php';        
            </script>";
        } else {
            header("location:../login.php?pesan=gagal");
        }
    } else {
        header("location:../login.php");
    }
}
