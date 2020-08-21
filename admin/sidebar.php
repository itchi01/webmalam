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
                        <p class="profile-name">
                            <??>
                        </p>
                        <div>
                            <small class="designation text-muted"><?php echo $_SESSION['nama']; ?></small>
                            <span class="status-indicator online"></span>
                        </div>
                    </div>
                </div>
                <?php if ($_SESSION['level'] == 'author') {?>
                <a href="posting.php" class="btn btn-success btn-block">New Postingan
                    <i class="mdi mdi-plus"></i>
                </a>
                <?php }?>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="index.php">
                <i class="menu-icon mdi mdi-television"></i>
                <span class="menu-title">Dashboard</span>
            </a>
        </li>
        <?php if ($_SESSION['level'] == 'admin') {?>
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
            <a class="nav-link" href="biodata.php">
                <i class="menu-icon mdi mdi-backup-restore"></i>
                <span class="menu-title">Data Biodata</span>
            </a>
        </li>
        <?php } else if ($_SESSION['level'] == 'operator') {?>
        <li class="nav-item">
            <a class="nav-link" href="posting.php">
                <i class="menu-icon mdi mdi-chart-line"></i>
                <span class="menu-title">Charts</span>
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
        <?php } else if ($_SESSION['level'] == 'author') {?>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
                <i class="menu-icon mdi mdi-restart"></i>
                <span class="menu-title">User Pages</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="auth">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item">
                        <a class="nav-link" href="blank-page.php"> Blank Page </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="login.php"> Login </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="register.php"> Register </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="error-404.php"> 404 </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="error-500.php"> 500 </a>
                    </li>
                </ul>
            </div>
        </li>
        <?php }?>
    </ul>
</nav>