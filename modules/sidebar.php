<?Php if(@$_SESSION['level']=="Admin"){ ?>
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
      <img src="<?php echo $base_url;?>includes/logo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-pink">MUA ERNA'S</span>
    </a>
    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?php echo $base_url;?>includes/cat.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"><?Php echo $_SESSION['username'];?></a>
        </div>
      </div>


      <!-- Sidebar Menu -->
      <nav class="mt-2">

        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
               <li class="nav-item has-treeview">
            <a href="index.php?pages=home" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                
              </p>
            </a>
            
          <li class="nav-item has-treeview">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-fw fa-cog"></i>
                <p>
                  Data Master
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="index.php?pages=pegawai" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Pegawai</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="index.php?pages=pelanggan" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Pelanggan</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="index.php?pages=akun" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Akun</p>
                </a>
              </li>
               <li class="nav-item">
                <a href="index.php?pages=menu" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Menu MUA</p>
                </a>
              </li>
            </ul>
          </li>
           	<!-- Transaksi NavBar -->
              <li class="nav-item has-treeview">
              <a href="index.php" class="nav-link">
                <i class="nav-icon fas fa-fw fa-wrench"></i>
                <p>
                  Transaksi
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
               <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="index.php?pages=pemasukan" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Pemasukan</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="index.php?pages=pengeluaran" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Pengeluaran</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="index.php?pages=beban" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Beban</p>
                </a>
              </li>
               <li class="nav-item">
                <a href="index.php?pages=prive" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Prive</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="index.php?pages=modal" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Modal</p>
                </a>
              </li>
            </ul>
          </li>
          	<!-- Perekapan  NavBar -->
              <li class="nav-item has-treeview">
              <a href="index.php" class="nav-link">
                <i class="nav-icon fas fa-book"></i>
                <p>
                  Perekapan
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="index.php?pages=jurnalumum" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Jurnal Umum</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="index.php?pages=bukubesar" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Buku Besar</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="index.php?pages=neracasaldo" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Neraca Saldo</p>
                </a>
              </li>
            </ul>
          </li>
          	<!-- Laporan -->
              <li class="nav-item has-treeview">
              <a href="index.php" class="nav-link">
                <i class="nav-icon fas fa-copy "></i>
                <p>
                  Laporan
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="index.php?pages=labarugi" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Laba Rugi</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="index.php?pages=neraca" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Neraca</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="index.php?pages=perubahanmodal" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Perubahan Modal</p>
                </a>
              </li>
            </ul>
          </li>
          	<!-- User -->
              <li class="nav-item has-treeview">
              <a href="index.php?pages=managemen-user" class="nav-link">
                <i class="nav-icon fas fa-user"></i>
                <p>
                  Management User
                  
                </p>
              </a>
            </li>
            <li class="nav-item has-treeview">
                <a href="index.php?pages=logout" class="nav-link" style="cursor:pointer;" onclick="if(confirm('Apakah anda yakin keluar dari sistem ?')){window.location.href='logout.php'}">
                <i class="nav-icon fas fa-door-open"></i>
                <p>
                  Logout 
                </p>
              </a>
            </li>
          </li>
        </ul>
      </nav>
    </div>
    <?Php } else if (@$_SESSION['level']=="Akuntan"){?>
      <a href="#" class="brand-link">
      <img src="<?php echo $base_url;?>includes/logo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-pink">MUA ERNA'S</span>
    </a>
    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?php echo $base_url;?>includes/cat.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"><?Php echo $_SESSION['username'];?></a>
        </div>
      </div>


      <!-- Sidebar Menu -->
      <nav class="mt-2">

        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
               <li class="nav-item has-treeview">
            <a href="index.php?pages=home" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                
              </p>
            </a>
           	<!-- Transaksi NavBar -->
              <li class="nav-item has-treeview">
              <a href="index.php" class="nav-link">
                <i class="nav-icon fas fa-fw fa-wrench"></i>
                <p>
                  Transaksi
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
               <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="index.php?pages=pemasukan" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Pemasukan</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="index.php?pages=pengeluaran" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Pengeluaran</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="index.php?pages=beban" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Beban</p>
                </a>
              </li>
               <li class="nav-item">
                <a href="index.php?pages=prive" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Prive</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="index.php?pages=modal" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Modal</p>
                </a>
              </li>
            </ul>
          </li>
          	<!-- Perekapan  NavBar -->
              <li class="nav-item has-treeview">
              <a href="index.php" class="nav-link">
                <i class="nav-icon fas fa-book"></i>
                <p>
                  Perekapan
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="index.php?pages=jurnalumum" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Jurnal Umum</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="index.php?pages=bukubesar" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Buku Besar</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="index.php?pages=neracasaldo" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Neraca Saldo</p>
                </a>
              </li>
            </ul>
          </li>
          	<!-- Laporan -->
              <li class="nav-item has-treeview">
              <a href="index.php" class="nav-link">
                <i class="nav-icon fas fa-copy "></i>
                <p>
                  Laporan
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="index.php?pages=labarugi" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Laba Rugi</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="index.php?pages=neraca" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Neraca</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="index.php?pages=perubahanmodal" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Perubahan Modal</p>
                </a>
              </li>
            </ul>
          </li>
            <li class="nav-item has-treeview">
                <a href="index.php?pages=logout" class="nav-link" style="cursor:pointer;" onclick="if(confirm('Apakah anda yakin keluar dari sistem ?')){window.location.href='logout.php'}">
                <i class="nav-icon fas fa-door-open"></i>
                <p>
                  Logout 
                </p>
              </a>
            </li>
          </li>
        </ul>
      </nav>
    </div>
      <?Php } else if (@$_SESSION['level']=="Manager"){?>
        <a href="#" class="brand-link">
      <img src="<?php echo $base_url;?>includes/logo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-pink">MUA ERNA'S</span>
    </a>
    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?php echo $base_url;?>includes/cat.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"><?Php echo $_SESSION['username'];?></a>
        </div>
      </div>


      <!-- Sidebar Menu -->
      <nav class="mt-2">

        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
               <li class="nav-item has-treeview">
            <a href="index.php?pages=home" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                
              </p>
            </a>
          	<!-- Perekapan  NavBar -->
              <li class="nav-item has-treeview">
              <a href="index.php" class="nav-link">
                <i class="nav-icon fas fa-book"></i>
                <p>
                  Perekapan
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="index.php?pages=jurnalumum" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Jurnal Umum</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="index.php?pages=bukubesar" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Buku Besar</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="index.php?pages=neracasaldo" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Neraca Saldo</p>
                </a>
              </li>
            </ul>
          </li>
          	<!-- Laporan -->
              <li class="nav-item has-treeview">
              <a href="index.php" class="nav-link">
                <i class="nav-icon fas fa-copy "></i>
                <p>
                  Laporan
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="index.php?pages=labarugi" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Laba Rugi</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="index.php?pages=neraca" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Neraca</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="index.php?pages=perubahanmodal" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Perubahan Modal</p>
                </a>
              </li>
            </ul>
          </li>
            <li class="nav-item has-treeview">
                <a href="index.php?pages=logout" class="nav-link" style="cursor:pointer;" onclick="if(confirm('Apakah anda yakin keluar dari sistem ?')){window.location.href='logout.php'}">
                <i class="nav-icon fas fa-door-open"></i>
                <p>
                  Logout 
                </p>
              </a>
            </li>
          </li>
        </ul>
      </nav>
    </div>
      <?php }?>