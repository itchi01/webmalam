<?php
session_start();
include 'head.php';
include 'proses/koneksi.php';

if (!isset($_SESSION['level'])) {
    //the session does not exist, redirect
    header('location: login.php');
}
?>



<!DOCTYPE html>
<html lang="en">

<head>

</head>

<body>

    <?php
    function tambah($koneksi)
    {
        if (isset($_POST['input_biodata'])) {
            $id = uniqid();
            $id_user = $_POST['id_user'];
            $nama = $_POST['nama_lengkap'];
            $nohp = $_POST['nohp'];
            $alamat = $_POST['alamat'];
            $tempat_lahir = $_POST['tempat_lahir'];
            $tanggal_lahir = $_POST['tanggal_lahir'];
            $jenis_kelamin = $_POST['jenis_kelamin'];

            $foto = $_FILES["gambar"]["name"];
            $format = explode(".", $foto);
            $fileExtension = end($format);
            $nama_sementara = $_FILES['gambar']['tmp_name'];
            $md5file = md5($foto) . "." . $fileExtension;
            $lokasi_upload = "upload/img/";
            $fungsi_upload = move_uploaded_file($nama_sementara, $lokasi_upload . $md5file);
            if ($fungsi_upload) {
                echo "";
            } else {
                echo '<script>alert("gambar gagal diupload")</script>';
            }

            $query_input = mysqli_query($koneksi, "INSERT INTO biodata VALUES('$id','$nama', '$nohp', '$tanggal_lahir', '$tempat_lahir', '$jenis_kelamin', '$alamat', '$md5file', '$id_user')");


            if ($query_input) {
                echo '<script>alert("data berhasil di input")
          window.location.href="biodata_user.php";
        </script>';
            } else {
                echo '<script>alert("data gagal di input")
          window.location.href="biodata_user.php";
        </script>';
            }
        } ?>


        <div class="container-scroller">
            <!-- partial:partials/_navbar.html -->
            <?php include 'header.php'; ?>
            <!-- partial -->
            <div class="container-fluid page-body-wrapper">
                <!-- partial:partials/_sidebar.html -->
                <?php include 'sidebar.php'; ?>
                <!-- partial -->
                <div class="main-panel">
                    <div class="content-wrapper">
                        <div class="row">
                            <div class="col-md-12 grid-margin stretch-card">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="text-center">FORM BIODATA USER</h4>
                                        <form class="" action="" method="POST" enctype="multipart/form-data">
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label>Pilih User</label>
                                                    <select class="form-control form-control-lg" id="exampleFormControlSelect1" name="id_user">
                                                        <option selected>Pilih User</option>
                                                        <?php
                                                        $show = mysqli_query($koneksi, "SELECT * FROM user");

                                                        while ($data = mysqli_fetch_assoc($show)) {
                                                        ?>

                                                            <option value="<?php echo $data['id_user'] ?>"><?php echo $data['username'] . "-" . $data['level']; ?></option>

                                                        <?php } ?>

                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label for="inputEmail4">Nama Lengkap</label>

                                                    <input type="text" value="<?php echo $data['nama'] ?>" name="nama_lengkap" class="form-control" id="inputEmail4" placeholder="Masukkan Nama">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="inputPassword4">No HP</label>
                                                    <input type="text" name="nohp" class="form-control" id="inputPassword4" placeholder="+62222xxxx">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="inputAddress">Alamat</label>
                                                <input type="text" name="alamat" class="form-control" id="inputAddress" placeholder="Jl. ">
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label for="inputCity">Tempat Lahir</label>
                                                    <input type="text" name="tempat_lahir" class="form-control" id="inputCity">
                                                </div>
                                                <div class="form-group col-md-3">
                                                    <label for="inputZip">Tanggal Lahir</label>
                                                    <input type="date" name="tanggal_lahir" class="form-control" id="inputZip">
                                                </div>
                                                <div class="form-group col-md-3">
                                                    <label for="exampleFormControlSelect2">Jenis Kelamin</label>
                                                    <select id="inputState" name="jenis_kelamin" class="form-control">
                                                        <option selected>Pilih</option>
                                                        <option>Laki-laki</option>
                                                        <option>Perempuan</option>
                                                    </select>
                                                </div>
                                                <div class="my-4 form-group">
                                                    <label for="gambar" title="upload pasfoto 4x3"><img src="https://upload.wikimedia.org/wikipedia/en/b/b1/Portrait_placeholder.png" width="100px" height="100px"></label><br>
                                                    <input id="gambar" type="file" class="form-control" name="gambar">
                                                </div>
                                            </div>
                                            <button type="submit" name="input_biodata" class="btn btn-primary">Simpan</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        <?php
                    }

                    function tampil_data($koneksi)
                    {

                        $sql = "SELECT * FROM biodata ";
                        $query = mysqli_query($koneksi, $sql); ?>
                            <div class="col-md-12 grid-margin stretch-card card py-4">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title">Tabel Biodata</h4>
                                        <div class="table-responsive">
                                            <table id="table_id" class=" table dt-center table-striped table-bordered data">
                                                <thead class="dt-center">
                                                    <tr class="">
                                                        <th class="th-sm">No
                                                        </th>
                                                        <th class="th-sm">Nama Lengkap
                                                        </th>
                                                        <th class="th-sm">No HP
                                                        </th>
                                                        <th class="th-sm">Alamat
                                                        </th>
                                                        <th class="th-sm">Tempat Lahir
                                                        </th>
                                                        <th class="th-sm">Tanggal Lahir
                                                        </th>
                                                        <th class="th-sm">Jenis Kelamint
                                                        </th>
                                                        <th class="th-sm">Foto
                                                        </th>
                                                        <th></th>
                                                    </tr>
                                                </thead>

                                                <tbody class="dt-center">
                                                    <!-- php table -->
                                                    <?php
                                                    $no = 1;
                                                    while ($data = mysqli_fetch_assoc($query)) {
                                                    ?>
                                                        <tr>
                                                            <td><?php echo $no; ?></td>
                                                            <td><?php echo $data['nama']; ?></td>
                                                            <td><?php echo $data['no_hp']; ?></td>
                                                            <td><?php echo $data['alamat']; ?></td>
                                                            <td><?php echo $data['tempat_lahir']; ?></td>
                                                            <td><?php echo $data['tanggal_lahir']; ?></td>
                                                            <td><?php echo $data['jenis_kelamin']; ?></td>
                                                            <td><img src="upload/img/<?php echo $data['foto']; ?>">
                                                            <td>
                                                                <a href="" type="button" class="btn btn-outline-primary">Lihat</a>
                                                                <a href="biodata_user.php?aksi=update&id=<?php echo $data['id_biodata']; ?>&nama_lengkap=<?php echo $data['nama']; ?>&nohp=<?php echo $data['no_hp']; ?>&alamat=<?php echo $data['alamat']; ?>&tempat_lahir=<?php echo $data['tempat_lahir']; ?>&tanggal_lahir=<?php echo $data['tanggal_lahir']; ?>&jenis_kelamin=<?php echo $data['jenis_kelamin']; ?> " type="button" class="btn btn-outline-primary">Edit</a>
                                                                <a href="biodata_user.php?aksi=delete&id=<?php echo $data['id_biodata']; ?>" type="button" class="btn btn-outline-primary delete-link">Hapus</a>
                                                            </td>
                                                        </tr>
                                                    <?php
                                                        ++$no;
                                                    } ?>
                                                    <!-- end -->
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <?php
                        }

                        // function ubah

                        function ubah($koneksi)
                        {
                            if (isset($_POST['ubah_biodata'])) {
                                $id_biodata = $_POST['id_biodata'];
                                $id = $_POST['id_biodata'];
                                $nama = $_POST['nama_lengkap'];
                                $nohp = $_POST['nohp'];
                                $alamat = $_POST['alamat'];
                                $tempat_lahir = $_POST['tempat_lahir'];
                                $tanggal_lahir = $_POST['tanggal_lahir'];
                                $jenis_kelamin = $_POST['jenis_kelamin'];
                                $foto_sementara = !empty($_FILES['gambar']['name']) ? $_FILES['gambar']['name'] : "";

                                if ($foto_sementara != null) {


                                    $foto = $foto_sementara;
                                    $format = explode(".", $foto);
                                    $fileExtension = end($format);
                                    $nama_sementara = $_FILES['gambar']['tmp_name'];
                                    $md5file = md5($foto) . "." . $fileExtension;
                                    $lokasi_upload = "upload/img/";
                                    $fungsi_upload = move_uploaded_file($nama_sementara, $lokasi_upload . $md5file);
                                    if ($fungsi_upload) {
                                        echo "";
                                    } else {
                                        echo '<script>alert("gagal upload")</script>';
                                    }
                                } else {
                                    $show = mysqli_query($koneksi, "SELECT * FROM biodata WHERE id_biodata='$id_biodata'");
                                    $data = mysqli_fetch_array($show);
                                    $md5file = $data['foto'];
                                }

                                if (!empty($nama)) {
                                    $query_update = mysqli_query($koneksi, "UPDATE biodata SET nama = '$nama', no_hp = '$nohp', tanggal_lahir = '$tanggal_lahir', tempat_lahir = '$tempat_lahir', jenis_kelamin = '$jenis_kelamin', alamat = '$alamat', foto = '$md5file' WHERE id_biodata = '$id'");

                                    if ($query_update && isset($_GET['aksi'])) {
                                        if ($_GET['aksi'] == 'update') {
                                            echo '<script>alert("data berhasil di update")
                        window.location.href="biodata_user.php"
                        </script>';
                                        }
                                    } else {
                                        echo '<script>alert("data gagal di update")
                        </script>';
                                    }
                                }
                            }

                            if (isset($_GET['id'])) {
                            ?>

                                <nav class="nav"><a href="biodata_user.php" class="btn-lg"><i class=" fa fa-times" aria-hidden="true"></i></a></nav>
                                <div class="col-md-12 grid-margin stretch-card">
                                    <div class="card">
                                        <div class="card-body">
                                            <form class="" action="" method="POST" enctype="multipart/form-data">
                                                <div class="form-row">
                                                    <input type="hidden" name="id_biodata" value="<?php echo $_GET['id']; ?>">
                                                    <div class="form-group col-md-6">
                                                        <label for="inputEmail4">Nama Lengkap</label>
                                                        <input type="text" value="<?php echo $_GET['nama_lengkap']; ?>" name="nama_lengkap" class="form-control" id="inputEmail4" placeholder="Masukkan Nama">
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label for="inputPassword4">No HP</label>
                                                        <input type="text" value="<?php echo $_GET['nohp']; ?>" name="nohp" class="form-control" id="inputPassword4" placeholder="+62222xxxx">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="inputAddress">Alamat</label>
                                                    <input type="text" value="<?php echo $_GET['alamat']; ?>" name="alamat" class="form-control" id="inputAddress" placeholder="Jl. ">
                                                </div>
                                                <div class="form-row">
                                                    <div class="form-group col-md-6">
                                                        <label for="inputCity">Tempat Lahir</label>
                                                        <input type="text" value="<?php echo $_GET['tempat_lahir']; ?>" name="tempat_lahir" class="form-control" id="inputCity">
                                                    </div>
                                                    <div class="form-group col-md-3">
                                                        <label for="inputZip">Tanggal Lahir</label>
                                                        <input type="date" value="<?php echo $_GET['tanggal_lahir']; ?>" name="tanggal_lahir" class="form-control" id="inputZip">
                                                    </div>
                                                    <div class="my-4 form-group">
                                                        <label for="gambar" title="upload pasfoto 4x3"><img src="https://upload.wikimedia.org/wikipedia/en/b/b1/Portrait_placeholder.png" width="100px" height="100px"></label><br>
                                                        <input id="gambar" type="file" class="form-control" value="<?php echo $_GET['foto']; ?>" name="gambar">
                                                    </div>
                                                    <div class="form-group col-md-3">
                                                        <label for="inputState">Jenis Kelamin</label>
                                                        <?php if (empty($data['jenis_kelamin'])) { ?>
                                                            <select id="inputState" name="jenis_kelamin" class="form-control">
                                                                <option value="laki-laki">Laki-laki</option>
                                                                <option value="perempuan">Perempuan</option>
                                                            </select>
                                                        <?php } else { ?>
                                                            <select class="form-control">
                                                                <option <?php echo ($data['jenis_kelamin'] == 'laki-laki') ? 'selected' : '' ?> value="laki-laki">laki-laki</option>
                                                                <option <?php echo ($data['jenis_kelamin'] == 'perempuan') ? 'selected' : '' ?> value="perempuan">perempuan</option>
                                                            </select>
                                                        <?php } ?>
                                                    </div>
                                                </div>
                                                <button type="submit" name="ubah_biodata" class="btn btn-primary">Simpan</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                        <?php
                            }
                        }
                        ?>

                        </div> <!-- content-wrapper ends -->
                    </div> <!-- partial:partials/_footer.html -->
                </div>
                <!-- partial -->
            </div>

            <!-- main-panel ends -->
        </div>

        <!-- page-body-wrapper ends -->
        </div>
        <!-- fungsi hapus -->
        <?php
        function hapus($koneksi)
        {
            if (isset($_GET['id']) && isset($_GET['aksi'])) {
                $id = $_GET['id'];

                $tampil = mysqli_query($koneksi, "SELECT foto from biodata WHERE id_biodata='$id'");
                $data = mysqli_fetch_array($tampil);
                unlink("upload/img/" . $data['foto']);

                $query_hapus = mysqli_query($koneksi, "DELETE FROM biodata WHERE id_biodata='$id'");
                if ($query_hapus) {
                    if ($_GET['aksi'] == 'delete') {
                        echo '<script>alert("Data Berhasil Dihapus")
                        window.location.href="biodata_user.php";
                      </script>';
                    }
                } else {
                    echo '<script>alert("Data gagal dihapus")</script>';
                }
            }
        }
        ?>

        <?php
        // proses aksi

        if (isset($_GET['aksi'])) {
            switch ($_GET['aksi']) {
                case 'create':
                    echo '';
                    tambah($koneksi);
                    break;
                case 'read':
                    tampil_data($koneksi);
                    break;
                case 'update':
                    ubah($koneksi);
                    tampil_data($koneksi);
                    break;
                case 'delete':
                    hapus($koneksi);
                    break;
                default:
                    echo '<h3> AKsi <i> ' . $_GET['aksi'] . '</i> tidak ada! </h3>';
                    tambah($koneksi);
                    tampil_data($koneksi);
            }
        } else {
            tambah($koneksi);
            tampil_data($koneksi);
        }
        ?>

        <?php
        include 'footer.php';
        include 'script.php';
        ?>
        <script>
            jQuery(document).ready(function($) {
                $('.delete-link').on('click', function() {
                    var getLink = $(this).attr('href');
                    swal({
                        title: "Are you sure?",
                        text: 'Hapus Data?',
                        type: "warning",
                        html: true,
                        confirmButtonColor: '#d9534f',

                        confirmButtonColor: "#DD6B55",
                        showCancelButton: true,
                    }, function() {
                        window.location.href = getLink
                    });
                    return false;
                });
            });
        </script>

</body>

</html>