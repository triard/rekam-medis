<!DOCTYPE html>
<html>

<head>
    <?php $this->load->view("_partials/head.php") ?>
</head>

<body style="font-family: 'Roboto', sans-serif; background-color: #DEE1E2;">


    <div class="d-flex justify-content-center">
        <div class="container m-4 pb-5">
            <div class="d-flex mt-5 justify-content-center">

                <div class="col-sm-9">
                    <div class="alert alert-secondaryr">
                        <?php
					// Cek apakah terdapat session nama message
					if ($this->session->flashdata('message')) { // Jika ada
						echo $this->session->flashdata('message'); // Tampilkan pesannya
					}
					?>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-6">
                                    <img src="<?php echo base_url(); ?>assets/images/logo/hospital-512.png" alt="logo"
                                        style="width: 55%; display: block; margin-left: auto; margin-right: auto; margin-top: 100px;">
                                </div>
                                <div class="col-sm-6">
                                    <div class="">
                                        <h1>
                                            <center><b>Reset Password</b></center>
                                        </h1>
                                        <hr>
                                        <h5>Hello <span><?php echo $nama; ?></span>, Silakan isi password baru anda.
                                        </h5>
                                        <?php echo form_open('lupa_password/reset_password/token/'.$token); ?>
                                        <div class="form-group">
                                            <label for="password">Password Baru</label>
                                            <input type="password" class="form-control" name="password"
                                                value="<?php echo set_value('password'); ?>"
                                                placeholder="masukkan password baru" required />
                                            <p> <?php echo form_error('password'); ?> </p>
                                        </div>
                                        <div class="form-group">
                                            <label for="password">Konfirmasi Password</label>
                                            <input type="password" class="form-control" name="passconf"
                                                value="<?php echo set_value('passconf'); ?>"
                                                placeholder="konfirmasi password baru" required />
                                            <p> <?php echo form_error('passconf'); ?> </p>
                                        </div>
                                        <p>
                                            <input class="btn btn-success" type="submit" name="btnSubmit"
                                                value="Reset" />
                                        </p>
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
