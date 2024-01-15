  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-info elevation-4 fixed">
    <!-- Brand Logo -->
    <a href="<?= base_url('pegawai')?>" class="brand-link">
      <?php 
      $header = $this->db->get("data_profil"); 
      $headerr = $header->result(); 
      foreach ($headerr as $prf){ ?>
    
      <img src="<?php echo base_url() ?>assets/gambar/<?php echo $prf->logo ?>" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8"><?php } ?>
      <span class="brand-text font-weight-light">PT. POS INDONESIA</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <!-- <div class="image">
          <img src="<?php echo base_url() ?>assets/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="<?= base_url('pengaturan_pegawai')?>" class="d-block">Pegawai</a>
        </div> -->
      </div>

      <!-- SidebarSearch Form -->
      <!-- <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div> -->

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="<?= base_url('dashboard_cp')?>" class="nav-link <?=$this->uri->segment(1) == 'dashboard_cp' ? 'active' : '' ?>">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-header">DATA</li>
          <li class="nav-item">
            <a href="<?= base_url('inventory')?>" class="nav-link <?= ($this->uri->segment(1) == 'inventory' || ($this->uri->segment(1) == 'Inventory' && $this->uri->segment(2) == 'getRecords')) ? 'active' : '' ?>">
            <!-- <a href="<?= base_url('inventory')?>" class="nav-link <?=$this->uri->segment(1) == 'inventory' ? 'active' : '' ?>">
            <a href="/Inventory/getRecords" class="nav-link <?= $this->uri->segment(1) == 'Inventory' && $this->uri->segment(2) == 'getRecords' ? 'active' : '' ?>"> -->
              <i class="nav-icon fas fa-users"></i>
              <p>
                Meterai
              </p>
            </a>
          <!-- </a> -->
          </li>
          <!-- <li class="nav-item">
            <a href="<?= base_url('surat')?>" class="nav-link <?=$this->uri->segment(1) == 'surat' ? 'active' : '' ?>">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Surat
              </p>
            </a>
          </li> -->
          <!-- <li class="nav-item">
            <a href="<?= base_url('surat')?>" class="nav-link <?=$this->uri->segment(1) == 'admin_kelahiran' || $this->uri->segment(1) == 'admin_kematian' || $this->uri->segment(1) == 'admin_keterangan' || $this->uri->segment(1) == 'admin_jejaka_duda' || $this->uri->segment(1) == 'admin_perawan_janda' || $this->uri->segment(1) == 'admin_pindah_kelurahan' || $this->uri->segment(1) == 'admin_pindah_kecamatan' || $this->uri->segment(1) == 'admin_pindah_kabupaten' ? 'active' : '' ?>">
              <i class="nav-icon fas fa-envelope"></i>
              <p>
                Surat
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?= base_url('admin_kelahiran')?>" class="nav-link <?=$this->uri->segment(1) == 'admin_kelahiran' ? 'active' : '' ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Kelahiran</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url('admin_kematian')?>" class="nav-link <?=$this->uri->segment(1) == 'admin_kematian' ? 'active' : '' ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Kematian</p>
                </a>
              </li> -->
               <!-- <li class="nav-item">
                <a href="pages/charts/uplot.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>KTP</p>
                </a>
              </li> -->
               <!-- <li class="nav-item">
                <a href="<?= base_url('admin_keterangan')?>" class="nav-link <?=$this->uri->segment(1) == 'admin_keterangan' ? 'active' : '' ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Keterangan</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url('admin_jejaka_duda')?>" class="nav-link <?=$this->uri->segment(1) == 'admin_jejaka_duda' ? 'active' : '' ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Jejaka/Duda</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url('admin_perawan_janda')?>" class="nav-link <?=$this->uri->segment(1) == 'admin_perawan_janda' ? 'active' : '' ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Perawan/Janda</p>
                </a>
              </li>
               <li class="nav-item">
                <a href="<?= base_url('admin_pindah_kelurahan')?>" class="nav-link <?=$this->uri->segment(1) == 'admin_pindah_kelurahan' ? 'active' : '' ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Pindah Kelurahan</p>
                </a>
              </li>
               <li class="nav-item">
                <a href="<?= base_url('admin_pindah_kecamatan')?>" class="nav-link <?=$this->uri->segment(1) == 'admin_pindah_kecamatan' ? 'active' : '' ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Pindah Kecamatan</p>
                </a>
              </li>
               <li class="nav-item">
                <a href="<?= base_url('admin_pindah_kabupaten')?>" class="nav-link <?=$this->uri->segment(1) == 'admin_pindah_kabupaten' ? 'active' : '' ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Pindah Kabupaten</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="<?= base_url('apbd')?>" class="nav-link <?=$this->uri->segment(1) == 'apbd' ? 'active' : '' ?>">
              <i class="nav-icon fas fa-dollar-sign"></i>
              <p>
                APBD
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= base_url('aset')?>" class="nav-link <?=$this->uri->segment(1) == 'aset' ? 'active' : '' ?>">
              <i class="nav-icon fas fa-chair"></i>
              <p>
                Aset
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= base_url('pengaturan_pegawai')?>" class="nav-link <?=$this->uri->segment(1) == 'pengaturan_pegawai' ? 'active' : '' ?>">
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
          </li> -->
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>