<!-- kerjone ely -->
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

                <!-- to do -->
                <div class="card mb-3">
                    <div class="card-header">
                        <a class="btn btn-warning btn-sm text-white"  href="<?php echo site_url('admin/pasien/list/') ?>"><i class="fas fa-arrow-left"></i> Kembali</a>
                    </div>
                    <div class="card-body">

                        <form action="<?php echo site_url('admin/pasien/add') ?>" method="post"
							enctype="multipart/form-data">
							<input type="hidden" name="bulan_buat" value="<?php $bln=date("m"); echo $bln; ?>" />
                            <div class="form-group">
                                <label for="nama_pasien">Nama Lengkap*</label>
                                <input class="form-control <?php echo form_error('nama_pasien') ? 'is-invalid':'' ?>"
                                    type="text" name="nama_pasien" placeholder="Nama Lengkap..." required/>
                                <div class="invalid-feedback">
                                    <?php echo form_error('nama_pasien') ?>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="no_KTP">Nomor KTP*</label>
                                <input class="form-control <?php echo form_error('no_KTP') ? 'is-invalid':'' ?>"
                                    type="text" name="no_KTP" placeholder="NOMOR KTP..." maxlength="16" minlength="16" required/>
                                <div class="invalid-feedback">
                                    <?php echo form_error('no_KTP') ?>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="tgl_lahir_pasien">Tanggal Lahir*</label>
                                <input class="form-control <?php echo form_error('tgl_lahir_pasien') ? 'is-invalid':'' ?>"
                                    type="date" name="tgl_lahir_pasien" placeholder="Tanggal Lahir..." required>
                                <div class="invalid-feedback">
                                    <?php echo form_error('tgl_lahir_pasien') ?>
                                </div>
                            </div>


                            <div class="form-group">
                                <label for="jenis_kelamin">Jenis Kelamin*</label><br>
                                <div class="custom-control custom-radio">
                                    <input type="radio"  name="jenis_kelamin" value="LAKI-LAKI" required> Laki-laki<br>
                                    <input type="radio" name="jenis_kelamin" value="PEREMPUAN" required> Perempuan<br>
                                </div>
                                <div class="invalid-feedback">
                                    <?php echo form_error('jenis_kelamin') ?>
                                </div>
							</div>

                            <div class="form-group">
                                <label for="alamat">Alamat *</label>
                                <input class="form-control <?php echo form_error('alamat_pasien') ? 'is-invalid':'' ?>"
                                    type="text" name="alamat_pasien" placeholder="Alamat..." required/>
                                <div class="invalid-feedback">
                                    <?php echo form_error('alamat') ?>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="no_telp_pasien">No Telp*</label>
                                <input class="form-control <?php echo form_error('no_telp_pasien') ? 'is-invalid':'' ?>"
                                    type="no_telp_pasien" name="no_telp_pasien" placeholder="Nomor Telepon..." required minlength="11" maxlength="12"/>
                                <div class="invalid-feedback">
                                    <?php echo form_error('no_telp_pasien') ?>
                                </div>
                            </div>
							<div class="form-group">
                                <label for="agama_pasien">Agama*</label>
                                <form>
                                    <select name="agama_pasien" class="custom-select" required>
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
                                <label for="image">Photo KTP*</label>
                                <input class="form-control-file <?php echo form_error('image') ? 'is-invalid':'' ?>"
                                    type="file" name="image" required/>
                                <div class="invalid-feedback">
                                    <?php echo form_error('image') ?>
                                </div>
                            </div>
								<input class="btn btn-success" type="submit" name="btn" value="Simpan Data" />
                            </div>

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
