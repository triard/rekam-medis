<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->load->view("_partials/head.php") ?>
</head>

<body style="font-family: 'Roboto', sans-serif; background-color: #DEE1E2;">
<nav class="navbar navbar-dark bg-dark text-white">
        <a class="navbar-brand" href="<?php echo base_url('/') ?>">
            <img src="./assets/images/logo/hospital-32.png" width="30" height="30" class="d-inline-block align-top"
                alt="">
            Rekam Medis
        </a>
        <ul class="navbar-nav mr-auto"></ul>
        <a href="<?= site_url('login/register') ?>" class="btn btn-danger text-white m-1 btn-sm"><i class="fas fa-user-plus"></i> Register</a>
    </nav>
    <div class="d-flex justify-content-center">
        <div class="container m-4 pb-5">
            <div class="d-flex mt-5 justify-content-center">
                <div class="col-sm-9">
                    <?php if ($this->session->flashdata('message')): ?>
                    <div class="alert alert-danger" role="alert">
					<?php echo $this->session->flashdata('message'); ?>
                    </div>
                    <?php endif; ?>

                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-6">
                                    <img src="./assets/images/logo/hospital-512.png" alt="logo"
                                        style="width: 55%; display: block; margin-left: auto; margin-right: auto; margin-top: 100px;">
                                </div>
                                <div class="col-sm-6">
                                    <div class="">
                                        <h1>
											<center><b>REKAM-MEDIS</b></center>
											
                                        </h1>
                                        <hr>
                                        <p>Selamat Datang Kembali, silahkan login ke akun anda</p>
                                        <form action="<?= site_url('login') ?>" method="POST">
                                            <div class="form-group">
                                                <label for="email">Email</label>
                                                <input type="text" class="form-control" name="email"
                                                    placeholder="Pakai username juga bisa.." required />
                                            </div>
                                            <div class="form-group">
                                                <label for="password">Password</label>
                                                <input type="password" class="form-control" name="password"
                                                    placeholder="Password.." required />
                                            </div>
                                            <div class="form-group">
                                                <div class="d-flex justify-content-between">
                                                    <div class="custom-control custom-checkbox">
													<a href="<?= site_url('login/register') ?>">belum punya akun?</a>
                                                    </div>
                                                    <a href="<?= site_url('lupa_password') ?>">Lupa Password?</a>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <input type="submit" class="btn btn-success w-100" value="Login" />
                                            </div>

                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</body>

</html>
