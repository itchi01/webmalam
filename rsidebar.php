<div class="col-sm-3 mx-0 px-0 ">
    <div class="ml-4 bg-light">
        <a href="#">
            <h5 class="">Latest Articles</h5>
        </a>
    </div>
    <div class="articles">
        <?php
        include 'admin/proses/koneksi.php';

        $sql = "SELECT * FROM postingan ORDER BY id_postingan DESC LIMIT 4";
        $query = mysqli_query($koneksi, $sql);
        $no = 1;

        while ($data = mysqli_fetch_assoc($query)) {
            $no++;
        ?>

            <div class="mx-3 my-4 item">
                <div id="artikel" class="article-dual-column">
                    <div class="intro mb-0">
                        <p class="text-left"><span class="by">by </span> <?php echo $data['creator'] ?><span class="date">
                                <?php echo $data['tgl_release'] ?> </span></p>
                    </div>
                </div>
                <a href="#"><img class="img-fluid" src="admin/upload/postingan/<?php echo $data['foto'] ?>"></a>
                <h6 class="mt-2 bg-light">
                    <?php echo $data['judul'] ?>
                </h6>
                <?php echo $data['konten'] ?><a href="#" class="action"> read full news <i class="fa fa-arrow-circle-right"></i>
                </a>
            </div>

        <?php }
        ?>
    </div>
</div>