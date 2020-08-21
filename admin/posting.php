<?php
session_start();
include 'proses/koneksi.php';

if (!isset($_SESSION['level'])) {
    //the session does not exist, redirect
    header('location: login.php');
}
?>
<?php include 'head.php';?>

<!DOCTYPE html>
<html lang="en">

<head>

</head>


<body>
    <?php
function tambah($koneksi)
{
    if (isset($_POST['input_postingan'])) {
        $id_user = $_SESSION['id_user'];
        $id = uniqid();
        $judul = $_POST['judul_postingan'];
        $konten = $_POST['konten'];
        $tanggal = $_POST['tanggal_postingan'];
        $foto = $_FILES['gambar']['name'];

        if (move_uploaded_file($_FILES['gambar']['tmp_name'], "upload/postingan/" . $_FILES['gambar']['name'])) {
            echo "Gambar berhasil diupload";
        } else {
            echo "Gambar gagal diupload";
        }
        $query_input = mysqli_query($koneksi, "INSERT INTO postingan VALUES('$id', '$judul', '$konten', '$tanggal', '$foto', '$id_user')");

        if ($query_input) {
            echo '<script>alert("berhasil upload")
                        window.location.href="posting.php";
                        </script>';
        } else {
            echo '<script>alert("gagal upload")
                        window.location.href="posting.php"; </script>';
        }
    }

    ?>
    <div class="container-scroller">
        <?php include 'header.php'?>
        <div class="container-fluid page-body-wrapper">
            <?php include 'sidebar.php'?>

            <div class="main-panel">
                <div class="content-wrapper">
                    <div class="row">

                        <div class="col-md-12 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Buat Postingan</h4>
                                    <form class="" action="" method="POST" enctype="multipart/form-data">
                                        <div class="form-row">
                                            <div class="form-group col-md-12">
                                                <label for="inputEmail4">Judul Kontent</label>
                                                <input type="text" name="judul_postingan" class="form-control"
                                                    id="inputEmail4" placeholder="Masukkan Nama">
                                            </div>
                                            <div class="form-group col-md-12">
                                                <label for="inputZip">Tanggal Release</label>
                                                <input type="date" name="tanggal_postingan" class="form-control"
                                                    id="inputZip">
                                            </div>
                                            <div class=" col-md-12 form-group">
                                                <label for="gambar" title="upload pasfoto 4x3">Upload Gambar</label><br>
                                                <input id="gambar" type="file" class="form-control" name="gambar">
                                            </div>
                                            <div class=" col-md-12 my-4 form-group">
                                                <label>Masukkan konten</label>
                                                <textarea id="summernote" name="konten"></textarea>
                                            </div>
                                            <div>
                                                <button type="submit" name="input_postingan"
                                                    class="btn btn-primary">Buat Postingan</button>
                                            </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <?php
}

function tampil_data($koneksi)
{
    $sql = 'SELECT * FROM postingan';
    $query = mysqli_query($koneksi, $sql);?>
                        <div class="col-md-12 grid-margin stretch-card card py-4">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Tabel Biodata</h4>
                                    <div class="table-responsive">
                                        <table id="table_id" class="table dt-center table-striped table-bordered data">
                                            <thead class="dt-center">
                                                <tr class="">
                                                    <th class="th-sm">No
                                                    </th>
                                                    <th class="th-sm">Gamabr
                                                    </th>
                                                    <th class="th-sm">Judul Konten
                                                    </th>
                                                    <th class="th-sm">Tanggal Release
                                                    </th>
                                                    <th>Posted By</th>
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
                                                    <td><img src="upload/postingan/<?php echo $data['foto']; ?>">
                                                    <td>
                                                    <td><?php echo $data['judul']; ?></td>
                                                    <td><?php echo $data['konten']; ?></td>
                                                    <td><?php echo $data['tgl_release']; ?></td>
                                                    <td><?php echo $data['id_user']; ?></td>

                                                    <a href="" type="button" class="btn btn-outline-primary">Lihat</a>
                                                    <a href="biodata.php?aksi=update&id=<?php echo $data['id_biodata']; ?>&nama_lengkap=<?php echo $data['nama']; ?>&nohp=<?php echo $data['no_hp']; ?>&alamat=<?php echo $data['alamat']; ?>&tempat_lahir=<?php echo $data['tempat_lahir']; ?>&tanggal_lahir=<?php echo $data['tanggal_lahir']; ?>&jenis_kelamin=<?php echo $data['jenis_kelamin']; ?>&foto=<?php echo $data['foto']; ?> "
                                                        type="button" class="btn btn-outline-primary">Edit</a>
                                                    <a href="biodata.php?aksi=delete&id=<?php echo $data['id_biodata']; ?>"
                                                        type="button" class="btn btn-outline-primary">Hapus</a>
                                                    </td>
                                                </tr>
                                                <?php
++$no;
    }?>
                                                <!-- end -->
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php }?>


                    </div>
                </div>
            </div>
        </div>
    </div>

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


    <?php include 'footer.php'?>
    <?php include 'script.php'?>

    <script>
    $(document).ready(function() {
        $('#summernote').summernote();
    });
    </script>


</body>

</html>