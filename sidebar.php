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
      <a class="nav-link" href="#" id="<?php echo "cetak"; ?>">
          <i class="far fa-file-alt"></i>
          <span>Penilaian</span>
        </a>
      </li>
      <!-- list data -->
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown"
          aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-database"></i>
          <span>Batalion</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
          <h6 class="dropdown-header">Pleton:</h6>
          <a class="dropdown-item" href="#" id="<?php echo "pleton_2_1_A";?>">Pleton 1A</a>
          <a class="dropdown-item" href="index.php?page=angkatan">Pleton 1B</a>
          <a class="dropdown-item" href="index.php?page=angkatan">Pleton 1C</a>
          <a class="dropdown-item" href="index.php?page=angkatan">Pleton 1D</a>
          <a class="dropdown-item" href="index.php?page=angkatan">Pleton 1E</a>
          <a class="dropdown-item" href="index.php?page=angkatan">Pleton 2A</a>
          <div class="dropdown-divider"></div>
        </div>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="#" id="<?php echo "pujian"; ?>">
          <i class="fas fa-book"></i>
          <span>Pujian</span></a>
      </li>

      <!-- list peringkat -->
      <li class="nav-item">
        <a class="nav-link" href="#" id="<?php echo "pelanggaran";?>">
          <i class="fas fa-book"></i>
          <span>Pelanggaran</span></a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link" href="#" id="<?php echo "ganti_password";?>">
          <i class="fas fa-users-cog"></i>
          <span>Ganti Password</span>
        </a>
      </li>
      <!-- list hapus -->
      <li class="nav-item">
        <a class="nav-link" href="index.php?page=trash">
          <i class="fas fa-trash"></i>
          <span>Trash</span></a>
      </li>
    </ul>