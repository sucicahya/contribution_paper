  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-info elevation-4 fixed">
    <!-- Brand Logo -->
    <a href="<?= base_url('admin')?>" class="brand-link">
      <?php 
      $header = $this->db->get("data_profil"); 
      $headerr = $header->result(); 
      foreach ($headerr as $prf){ ?>
    
      <img src="<?php echo base_url() ?>assets/gambar/<?php echo $prf->logo ?>" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8"><?php } ?>
      <span class="brand-text font-weight-light">ADMIN</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
       <!--  <div class="image">
          <img src="<?php echo base_url() ?>assets/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="<?= base_url('pengaturan_admin')?>" class="d-block">Admin</a>
        </div> -->
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="<?= base_url('admin')?>" class="nav-link <?=$this->uri->segment(1) == 'admin' ? 'active' : '' ?>">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-header">DATA</li>
          <li class="nav-item">
            <a href="<?= base_url('profil')?>" class="nav-link <?=$this->uri->segment(1) == 'profil' ? 'active' : '' ?>">
              <i class="nav-icon fas fa-university"></i>
              <p>
                Profil
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= base_url('struktur')?>" class="nav-link <?=$this->uri->segment(1) == 'struktur' ? 'active' : '' ?>">
              <i class="nav-icon fas fa-list"></i>
              <p>
                Struktur Organisasi
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= base_url('pengumuman')?>" class="nav-link <?=$this->uri->segment(1) == 'pengumuman' ? 'active' : '' ?>">
              <i class="nav-icon fas fa-sign"></i>
              <p>
                Pengumuman
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= base_url('pengaduan')?>" class="nav-link <?=$this->uri->segment(1) == 'pengaduan' ? 'active' : '' ?>">
              <i class="nav-icon fas fa-newspaper"></i>
              <p>
                Pengaduan
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= base_url('pengguna')?>" class="nav-link <?=$this->uri->segment(1) == 'pengguna' ? 'active' : '' ?>">
              <i class="nav-icon fas fa-user"></i>
              <p>
                Kelola User
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= base_url('pengaturan_admin')?>" class="nav-link <?=$this->uri->segment(1) == 'pengaturan_admin' ? 'active' : '' ?>">
              <i class="nav-icon fas fa-lock"></i>
              <p>
                Pengaturan
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="<?php echo site_url('login/logout') ?>" class="nav-link">
              <i class="nav-icon fas fa-arrow-circle-right"></i>
              <p>
                Keluar
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>