<div class="col-sm-3 mx-0 px-0 ">
    <div class="ml-4 bg-light">
        <a href="#">
            <h5 class="">Latest Articles</h5>
        </a>
    </div>
    <div class="articles">
        <?php
include 'admin/proses/koneksi.php';

$sql = "SELECT * FROM postingan";
$query = mysqli_query($koneksi, $sql);

while ($data = mysqli_fetch_assoc($query)) {
    if ($data == 3) {
        break;
    }?>

        <div class="mx-3 my-4 item">
            <a href="#"><img class="img-fluid" src="admin/upload/postingan/<?php echo $data['foto'] ?>"></a>
            <h6 class="mt-2">
                <?php echo $data['judul'] ?>
            </h6>
            <?php echo $data['konten'] ?><a href="#" class="action"> read full news <i
                    class="fa fa-arrow-circle-right"></i>
            </a>
        </div>

        <?php }
?>
    </div>
</div>