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
                                    <img src="./assets/images/logo/hospital-512.png" alt="logo"
                                        style="width: 55%; display: block; margin-left: auto; margin-right: auto; margin-top: 50px;">
                                </div>
                                <div class="col-sm-6">
                                    <div class="">
                                        <h1>
                                            <center><b>Lupa Password</b></center>

                                        </h1>
                                        <hr>
                                        <p>Untuk melakukan reset password, silakan masukkan alamat email anda. </p>
                                        <?php echo form_open('lupa_password');?>
                                        <div class="form-group">
                                            <label for="email">Email</label>
                                            <input type="text" class="form-control" name="email"
                                                value="<?php echo set_value('email'); ?>"
												placeholder="masukkan emailmu" required />
											<p> <?php echo form_error('email'); ?> </p>
                                        </div>
                                        <p>
                                            <input class="btn btn-success"  type="submit" name="btnSubmit" value="Submit" />
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
