<?php
if (!isset($_SESSION)) {

    session_start();
}
include 'proses/koneksi.php';
?>
<nav class="bgdark sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item nav-profile">
            <div class="nav-link">
                <div class="user-wrapper">
                    <div class="profile-image">
                        <img src="images/faces/face1.jpg" alt="profile image">
                    </div>
                    <div class="text-wrapper">
                        <p class="profile-name text-twitter">
                            <?php echo $_SESSION['nama']; ?>
                            *
                        </p>
                        <div>
                            <small class="designation text-muted"><?php echo $_SESSION['level'] ?></small>
                            <span class="status-indicator online"></span>
                        </div>
                    </div>
                </div>
                <?php if ($_SESSION['level'] == 'author') { ?>
                    <a href="posting.php" class="btn btn-success btn-block">New Postingan
                        <i class="mdi mdi-plus"></i>
                    </a>
        <li class="nav-item">
            <a class="nav-link" href="biodata.php">
                <i class="menu-icon mdi mdi-backup-restore"></i>
                <span class="menu-title">My Biodata</span>
            </a>
        </li>
    <?php } ?>
    <li class="nav-item">
        <a class="nav-link" href="index.php">
            <i class="menu-icon mdi mdi-television"></i>
            <span class="menu-title">Dashboard</span>
        </a>
    </li>

    <?php if ($_SESSION['level'] == 'admin') { ?>
        <li class="nav-item">
            <a class="nav-link" href="posting.php">
                <i class="menu-icon mdi mdi-content-copy"></i>
                <span class="menu-title">Postingan</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                <i class="menu-icon mdi mdi-content-copy"></i>
                <span class="menu-title">Data Master</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item">
                        <a class="nav-link" href="kategori.php">Kategori</a>
                    </li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="data_user.php">
                <i class="menu-icon mdi mdi-backup-restore"></i>
                <span class="menu-title">Data User</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="biodata_user.php">
                <i class="menu-icon mdi mdi-backup-restore"></i>
                <span class="menu-title">Data Biodata User</span>
            </a>
        </li>
    <?php } else if ($_SESSION['level'] == 'operator') { ?>
        <li class="nav-item">
            <a class="nav-link" href="posting.php">
                <i class="menu-icon mdi mdi-content-copy"></i>
                <span class="menu-title">Postingan</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                <i class="menu-icon mdi mdi-content-copy"></i>
                <span class="menu-title">Data Master</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item">
                        <a class="nav-link" href="kategori.php">Kategori</a>
                    </li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="biodata_user.php">
                <i class="menu-icon mdi mdi-backup-restore"></i>
                <span class="menu-title">Data Biodata User</span>
            </a>
        </li>
        <!-- <li class="nav-item">
        <a class="nav-link" href="basic-table.php">
          <i class="menu-icon mdi mdi-table"></i>
          <span class="menu-title">Tables</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="font-awesome.php">
          <i class="menu-icon mdi mdi-sticker"></i>
          <span class="menu-title">Icons</span>
        </a>
      </li> -->
    <?php } else if ($_SESSION['level'] == 'author') { ?>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                <i class="menu-icon mdi mdi-content-copy"></i>
                <span class="menu-title">Author Features</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact Admin</a>
                    </li>
                </ul>
            </div>
        </li>
    <?php } ?>
    </ul>
</nav>