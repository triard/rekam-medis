<?php $logged_user = $this->session->userdata('user_logged');?>
<nav class="navbar navbar-expand navbar-dark bg-success static-top">

    <a class="navbar-brand mr-1" href="<?php echo site_url('admin') ?>"><?php echo SITE_NAME ?></a>

    <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
        <i class="fas fa-bars"></i>
    </button>

    <!-- Navbar Search -->
    <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
   </form>

    <!-- Navbar -->
    <ul class="navbar-nav ml-auto ml-md-0">
        <li class="nav-item dropdown no-arrow mx-1">
            <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
                aria-expanded="false">
            </a>

        <li class="nav-item dropdown no-arrow">
            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
                aria-expanded="false">
                <i class="fas fa-user-circle fa-fw"></i>
				Hallo <?php echo $this->session->userdata('user_logged')->nama_user; ?>!
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
				<center>
				<img class="rounded-circle" src="<?php echo base_url('assets/images/user/'.$logged_user->image) ?>" alt="image" width="80px" height="80px">
				<p><span class="badge badge-pill badge-primary"><?php echo $logged_user->role ?></span></p>
				</center>
                <a class="dropdown-item" href="<?php echo site_url('admin/overview/detail/'.$logged_user->user_id) ?>">Profile</a>
                <a class="dropdown-item" href="<?php echo base_url('admin/overview/log_activitas') ?>">Activity Log</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="<?= site_url('admin/login/logout') ?>" data-toggle="modal" data-target="#logoutModal">Logout</a>
            </div>
        </li>
    </ul>

</nav>
