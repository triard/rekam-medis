<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->load->view("_partials/head.php") ?>
</head>

<body id="page-top">

    <?php $this->load->view("_partials/navbar.php") ?>
    <div id="wrapper">

        <?php $this->load->view("_partials/sidebar.php") ?>

        <div id="content-wrapper">

            <div class="container-fluid">

                <?php $this->load->view("_partials/breadcrumb.php") ?>

                <?php if ($this->session->flashdata('success')): ?>
                <div class="alert alert-success" role="alert">
                    <?php echo $this->session->flashdata('success'); ?>
                </div>
                <?php endif; ?>

                <div class="card mb-3">
                    <div class="card-header">
                        <a class="btn btn-warning btn-sm text-white"  href="<?php echo site_url('admin/user/list/') ?>"><i class="fas fa-arrow-left"></i> Kembali</a>
                    </div>
                    <div class="card-body">

                        <form action="<?php echo site_url('admin/user/add') ?>" method="post"
							enctype="multipart/form-data">
							<input type="hidden" name="bulan_buat" value="<?php $bln=date("m"); echo $bln; ?>" />
							<input type="hidden" name="status" value="verification" />
                            <div class="form-group">
                                <label for="nama_user">Nama Lengkap*</label>
                                <input class="form-control <?php echo form_error('nama_user') ? 'is-invalid':'' ?>"
                                    type="text" name="nama_user" placeholder="Nama Lengkap..." required/>
                                <div class="invalid-feedback">
                                    <?php echo form_error('nama_user') ?>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="username">Username*</label>
                                <input class="form-control <?php echo form_error('username') ? 'is-invalid':'' ?>"
                                    type="text" name="username" placeholder="Username..." required/>
                                <div class="invalid-feedback">
                                    <?php echo form_error('username') ?>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="email">Email*</label>
                                <input class="form-control <?php echo form_error('email') ? 'is-invalid':'' ?>"
                                    type="email" name="email" placeholder="Email..." required/>
                                <div class="invalid-feedback">
                                    <?php echo form_error('email') ?>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="password">Password*</label>
                                <input class="form-control <?php echo form_error('password') ? 'is-invalid':'' ?>"
                                    type="password" name="password" placeholder="Password..." required minlength="5"/>
                                <div class="invalid-feedback">
                                    <?php echo form_error('password') ?>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="role">Role*</label><br>
                                <div class="custom-control custom-radio">
                                    <input type="radio"  name="role" value="admin" required> Admin<br>
                                    <input type="radio" name="role" value="rekam_medis" required> Rekam Medis<br>
                                </div>
                                <div class="invalid-feedback">
                                    <?php echo form_error('role') ?>
                                </div>
                            </div>

							<div class="form-group">
                                <label for="tgl_lahir">Tanggal Lahir*</label>
                                <input class="form-control <?php echo form_error('tgl_lahir') ? 'is-invalid':'' ?>"
                                    type="date" name="tgl_lahir" placeholder="Tanggal Lahir..." required/>
                                <div class="invalid-feedback">
                                    <?php echo form_error('tgl_lahir') ?>
                                </div>
                            </div>

							<div class="form-group">
                                <label for="tempat_lahir">Tempat Lahir*</label>
                                <input class="form-control <?php echo form_error('tempat_lahir') ? 'is-invalid':'' ?>"
                                    type="text" name="tempat_lahir" placeholder="Tempat Lahir..." required/>
                                <div class="invalid-feedback">
                                    <?php echo form_error('tempat_lahir') ?>
                                </div>
                            </div>

							<div class="form-group">
                                <label for="agama">Agama*</label>
                                <form>
                                    <select name="agama" class="custom-select" required>
                                        <option selected>Agama</option>
                                        <option value="ISLAM">ISLAM</option>
                                        <option value="PROTESTAN">PROTESTAN</option>
                                        <option value="KATOLIK">KATOLIK</option>
                                        <option value="BUDDHA">BUDDHA</option>
                                        <option value="HINDU">HINDU</option>
                                        <option value="KHONGHUCU">KHONGHUCU</option>
                                    </select>
								</div>

							<div class="form-group">
                                <label for="jk_user">Jenis Kelamin*</label><br>
                                <div class="custom-control custom-radio">
                                    <input type="radio"  name="jk_user" value="LAKI-LAKI" required> Laki-laki<br>
                                    <input type="radio" name="jk_user" value="PEREMPUAN" required> Perempuan<br>
                                </div>
                                <div class="invalid-feedback">
                                    <?php echo form_error('jk_user') ?>
                                </div>
							</div>
							
							<div class="form-group">
                                <label for="no_ktp">No KTP*</label>
                                <input class="form-control <?php echo form_error('no_ktp') ? 'is-invalid':'' ?>"
                                    type="text" name="no_ktp" placeholder="No KTP..." required/>
                                <div class="invalid-feedback">
                                    <?php echo form_error('no_ktp') ?>
                                </div>
							</div>
							
							<div class="form-group">
                                <label for="no_telp">No Telp.*</label>
                                <input class="form-control <?php echo form_error('no_telp') ? 'is-invalid':'' ?>"
                                    type="text" name="no_telp" placeholder="No Telp...." required/>
                                <div class="invalid-feedback">
                                    <?php echo form_error('no_telp') ?>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="alamat">Alamat*</label>
                                <textarea class="form-control <?php echo form_error('alamat') ? 'is-invalid':'' ?>"
                                    name="alamat" placeholder="Alamat Lengkap..." required></textarea>
                                <div class="invalid-feedback">
                                    <?php echo form_error('alamat') ?>
                                </div>
							</div>
							
							<input type="hidden" name="is_active" value="offline" />

							<div class="form-group">
                                <label for="image">Photo*</label>
                                <input class="form-control-file <?php echo form_error('image') ? 'is-invalid':'' ?>"
                                    type="file" name="image" required/>
                                <div class="invalid-feedback">
                                    <?php echo form_error('image') ?>
                                </div>
                            </div>

                            <input class="btn btn-success" type="submit" name="btn" value="Simpan Data" />
                        </form>

                    </div>

                    <div class="card-footer small text-muted">
                        * harus di isi
                    </div>


                </div>
                <!-- /.container-fluid -->

                <!-- Sticky Footer -->
                <?php $this->load->view("_partials/footer.php") ?>

            </div>
            <!-- /.content-wrapper -->

        </div>
        <!-- /#wrapper -->


        <?php $this->load->view("_partials/scrolltop.php") ?>
        <?php $this->load->view("_partials/modal.php") ?>
        <?php $this->load->view("_partials/js.php") ?>

</body>

</html>
