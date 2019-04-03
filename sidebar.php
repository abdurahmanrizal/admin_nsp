<?php
  // session_start();
  $level_user = $_SESSION['level_user'];
?>
<!-- Sidebar -->
<ul class="sidebar navbar-nav">
      <li class="nav-item">
          <br>
          <h6 class="text-light text-center">MENU</h6>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="#" id="<?php echo "home";?>">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Beranda</span>
        </a>
      </li>
      <!-- cetak nilai -->
      <li class="nav-item active">
      <a class="nav-link" href="#" id="<?php echo "nilai"; ?>">
          <i class="far fa-file-alt"></i>
          <span>Penilaian</span>
        </a>
      </li>
      <!-- list data -->
      <li class="nav-item">
        <a class="nav-link" href="#" id="<?php echo "batalion";?>">
          <i class="fas fa-database"></i>
          <span>Batalion</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="#" id="<?php echo "pujian"; ?>">
          <i class="fas fa-book"></i>
          <span>Pujian</span></a>
      </li>
      <?php
        if($level_user == 3){?>
          <!-- <li class="nav-item">
            <a class="nav-link" href="#" id="<?php echo "pelanggaran";?>">
              <i class="fas fa-book"></i>
              <span>Pelanggaran</span>
            </a>
          </li> -->
        <?php } ?>
      <!-- list pelanggaran -->
      <li class="nav-item">
        <a class="nav-link" href="#" id="<?php echo "pelanggaran";?>">
          <i class="fas fa-book"></i>
          <span>Pelanggaran</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#" id="<?php echo "halaman_history";?>">
          <i class="fas fa-history"></i>
          <span>History Penilaian</span>
        </a>
      </li>
      <?php
        if($level_user == 0){?>
             <!-- NANTI HANYA BISA DI AKSES OLEH SUPER ADMIN  -->
          <li class="nav-item dropdown">
            <a class="nav-link" href="#" id="<?php echo "manajemen_taruna";?>">
              <i class="fas fa-users"></i>
              <span>Manajemen Taruna</span>
            </a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link" href="#" id="<?php echo "manajemen_user";?>">
              <i class="fas fa-users"></i>
              <span>Manajemen User</span>
            </a>
          </li>
        <?php }
      ?>
     
      <li class="nav-item dropdown">
        <a class="nav-link" href="#" id="<?php echo "ganti_password";?>">
          <i class="fas fa-users-cog"></i>
          <span>Ganti Password</span>
        </a>
      </li>
      <!-- sidebar logout atau keluar -->
      <li class="nav-item">
        <a class="nav-link logout" href="halaman/logout.php">
          <i class="fas fa-sign-out-alt"></i>
          <span>Logout</span>
        </a>
      </li>

</ul>
