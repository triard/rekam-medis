<?php $logged_user = $this->session->userdata('user_logged');?>
<nav class="topnav navbar navbar-expand-lg navbar-dark bg-success fixed-top">
    <div class="container">
        <a class="navbar-brand" href="<?php echo base_url('pasien/overview') ?>"><img
                src="<?php echo base_url('assets/images/logo/hospital-32.png') ?>" width="30" height="30"
                class="d-inline-block align-top" alt="">
            <strong>Rekam-Medis</strong></a>
        <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarColor02"
            aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="navbar-collapse collapse" id="navbarColor02">
            <ul class="navbar-nav mr-auto d-flex align-items-center">
                <li class="nav-item">
							<a class="btn btn-success btn-sm m-1"
                        href="<?php echo site_url('pasien/overview/get_pasien') ?>"><i class="fas fa-bed"></i> Rawat Inap</a>
                </li>
                <li class="nav-item">
                    <a class="btn btn-success btn-sm m-1"
                        href="<?php echo site_url('pasien/overview/edit/'.$logged_user->user_id) ?>"><i class="fas fa-id-card-alt"></i> Profile</a>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto d-flex align-items-center">
                <li class="nav-item">
                    <span class="nav-link" href="#">
                        <?php
				$logged_user = $this->session->userdata('user_logged');
				$id = $logged_user->user_id;
				?>
                        <a class="btn btn-block btn-danger mb-1 btn-sm" href="<?= site_url('login/logout/'.$id) ?>"><i
                                class="fas fa-sign-out-alt"></i>
                            Logout</a>
                    </span>
                </li>
            </ul>
        </div>
    </div>
</nav>
