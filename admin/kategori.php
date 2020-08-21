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
    if (isset($_POST['input_kategori'])) {
      $id = uniqid();
      $kategori = $_POST['nama_kategori'];

      if (!empty($kategori)) {
        $query_input = "INSERT INTO kategori VALUES('$id','$kategori')";
        $simpan = mysqli_query($koneksi, $query_input);

        if (isset($_GET['aksi'])) {
          if ($simpan && $_GET['aksi'] == 'create') {
            header('location:kategori.php');
          }
        }
      } else {
        echo '<script>alert("data gagal disimpan")</script>';
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
                    <h4 class="card-title">Buat Kategori</h4>
                    <form class="forms-sample ml-5 py-2" action="" method="POST">
                      <div class="row">
                        <div class="form-group w-25">
                          <label for="exampleInputName1">Nama Kategori</label>
                          <input type="text" class="form-control border-top-0 border-left-0 border-right-0 border-dark" id="exampleInputName1" name="nama_kategori" value="" placeholder="Masukkan Nama Kategori">
                        </div>
                      </div>
                      <button type="submit" name="input_kategori" class="btn btn-success mr-2">Buat</button>
                      <button class="btn btn-light">Cancel</button>
                    </form>
                  </div>
                </div>
              </div>

            <?php
          }

          function tampil_data($koneksi)
          {
            $sql = 'SELECT * FROM kategori';
            $query = mysqli_query($koneksi, $sql); ?>
              <div class="col-md-12 grid-margin stretch-card card py-4">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Tabel Kategori</h4>
                    <div class="table-responsive">
                      <table id="table_id" class="table dt-center table-striped table-bordered data">
                        <thead class="dt-center">
                          <tr class="">
                            <th class="th-sm">No
                            </th>
                            <th class="th-sm">Nama Kategori
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
                              <td><?php echo $data['kategori']; ?></td>
                              <td>
                                <a href="" type="button" class="btn btn-outline-primary">Lihat</a>
                                <a href="kategori.php?aksi=update&id=<?php echo $data['id_kategori']; ?>&nama_kategori=<?php echo $data['kategori']; ?>" type="button" class="btn btn-outline-primary">Edit</a>
                                <a href="kategori.php?aksi=delete&id=<?php echo $data['id_kategori']; ?>" type="button" class="btn btn-outline-primary">Hapus</a>
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
              if (isset($_POST['ubah_kategori'])) {
                $id = $_POST['id_kategori'];
                $nama = $_POST['nama_kategori'];
                if (!empty($nama)) {
                  $query_update = mysqli_query($koneksi, "UPDATE kategori SET kategori = '$nama' WHERE id_kategori = '$id'");
                  if ($query_update && isset($_GET['aksi'])) {
                    if ($_GET['aksi'] == 'update') {
                      echo '<script>alert("data berhasil di update")
                        window.location.href="kategori.php"
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

                <nav class="nav"><a href="kategori.php" class="btn-lg"><i class=" fa fa-times" aria-hidden="true"></i></a></nav>
                <div class="col-md-12 grid-margin stretch-card">
                  <div class="card">
                    <div class="card-body">
                      <h4 class="card-title">Edit Kategori</h4>
                      <form class="forms-sample ml-5 py-2" action="" method="POST">
                        <input type="hidden" name="id_kategori" value="<?php echo $_GET['id']; ?>">
                        <div class="row">
                          <div class="form-group w-25">
                            <label for="exampleInputName1">Nama Kategori</label>
                            <input type="text" class="form-control border-top-0 border-left-0 border-right-0 border-dark" id="exampleInputName1" name="nama_kategori" value="<?php echo $_GET['nama_kategori']; ?>" placeholder="Masukkan Nama Kategori">
                          </div>
                        </div>
                        <button type="submit" name="ubah_kategori" class="btn btn-success mr-2">Simpan</button>
                        <button class="btn btn-light">Cancel</button>

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

        $query_hapus = mysqli_query($koneksi, "DELETE FROM kategori WHERE id_kategori='$id'");
        if ($query_hapus) {
          if ($_GET['aksi'] == 'delete') {
            echo '<script>alert("Data Berhasil Dihapus")
                        window.location.href="kategori.php";
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

</body>

</html>