<!-- Sidebar -->
<ul class="sidebar navbar-nav">
    <li class="nav-item <?php echo $this->uri->segment(2) == '' ? 'active': '' ?>">
        <a class="nav-link" href="<?php echo site_url('admin') ?>">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Overview</span>
        </a>
    </li>
	<li class="nav-item dropdown <?php echo $this->uri->segment(2) == 'products' ? 'active': '' ?>">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
            aria-expanded="false">
			<i class="fas fa-procedures"></i>
            <span>Pasien</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
            <a class="dropdown-item" href="<?php echo site_url('admin/pasien/add') ?>">Pasien Baru</a>
            <a class="dropdown-item" href="<?php echo  base_url('admin/pasien/list')?>">List Pasien</a>
        </div>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="<?php echo  base_url('admin/user/list')?>">
            <i class="fas fa-fw fa-users"></i>
            <span>Users</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('admin/ruangan/list') ?>">
            <i class="fas fa-bed"></i>
            <span>Ruangan</span></a>
	</li>
	<li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('admin/no_ruangan/list') ?>">
		<i class="fa fa-list-ol" aria-hidden="true"></i>
            <span>Nomor Ruangan</span></a>
	</li>
	<li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('admin/level/list') ?>">
		<i class="fa fa-list-ol" aria-hidden="true"></i>
            <span>Level</span></a>
	</li>
	<li class="nav-item">
        <a class="nav-link" href="<?php echo  base_url('admin/pasien_masuk/list')?>">
		<i class="far fa-arrow-alt-circle-right"></i>
            <span>Pasien Masuk</span></a>
	</li>
	<li class="nav-item">
        <a class="nav-link" href="<?php echo  base_url('admin/pasien_keluar/list')?>">
		<i class="far fa-arrow-alt-circle-left"></i>
            <span>Pasien Keluar</span></a>
	</li>
	<li class="nav-item">
        <a class="nav-link" href="<?php echo  base_url('admin/diagnosa/list')?>">
		<i class="fas fa-diagnoses"></i>
            <span>Diagnosa Pasien</span></a>
	</li>
	<li class="nav-item">
        <a class="nav-link" href="<?php echo  base_url('admin/overview/allData')?>">
		<i class="fas fa-history"></i>
            <span>Riwayat Pasien</span></a>
	</li>
</ul>
