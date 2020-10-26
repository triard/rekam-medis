<!-- Sidebar -->
<ul class="sidebar navbar-nav">
    <li class="nav-item <?php echo $this->uri->segment(2) == '' ? 'active': '' ?>">
        <a class="nav-link" href="<?php echo site_url('rekam_medis/overview') ?>">
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
            <a class="dropdown-item" href="<?php echo site_url('rekam_medis/pasien/add') ?>">Pasien Baru</a>
            <a class="dropdown-item" href="<?php echo site_url('rekam_medis/pasien/list') ?>">List Pasien</a>
        </div>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="<?php echo  base_url('rekam_medis/pasien_masuk/list')?>">
		<i class="far fa-arrow-alt-circle-right"></i>
            <span>Pasien Masuk</span></a>
	</li>
	<li class="nav-item">
        <a class="nav-link" href="<?php echo  base_url('rekam_medis/pasien_keluar/list')?>">
		<i class="far fa-arrow-alt-circle-left"></i>
            <span>Pasien Keluar</span></a>
	</li>
	<li class="nav-item">
        <a class="nav-link" href="<?php echo  base_url('rekam_medis/diagnosa/list')?>">
		<i class="fas fa-diagnoses"></i>
            <span>Diagnosa Pasien</span></a>
    </li>
</ul>
