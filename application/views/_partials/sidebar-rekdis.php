<!-- Sidebar -->
<ul class="sidebar navbar-nav">
    <li class="nav-item <?php echo $this->uri->segment(2) == '' ? 'active': '' ?>">
        <a class="nav-link" href="<?php echo site_url('rekam_medis') ?>">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Overview</span>
        </a>
    </li>
    <li class="nav-item dropdown <?php echo $this->uri->segment(2) == 'products' ? 'active': '' ?>">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
            aria-expanded="false">
            <i class="fas fa-fw fa-users"></i>
            <span>Pasien</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
            <a class="dropdown-item" href="<?php echo site_url('rekam_medis/pasien/add') ?>">Pasien Baru</a>
            <a class="dropdown-item" href="<?php echo site_url('rekam_medis/pasien') ?>">Daftar Pasien</a>
        </div>
    </li>
    <!-- <li class="nav-item">
        <a class="nav-link" href="<?php echo  base_url('admin/user/list')?>">
            <i class="fas fa-fw fa-users"></i>
            <span>Users</span></a>
    </li> -->
</ul>
