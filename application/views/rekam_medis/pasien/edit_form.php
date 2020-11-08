<!DOCTYPE html>
<html lang="en">

<head>
	<?php $this->load->view("_partials/head.php") ?>
</head>

<body id="page-top">

	<?php $this->load->view("_partials/navbar_rekdis.php") ?>
	<div id="wrapper">

		<?php $this->load->view("_partials/sidebar-rekdis.php") ?>

		<div id="content-wrapper">

			<div class="container-fluid">

				<?php $this->load->view("_partials/breadcrumb.php") ?>

				<?php if ($this->session->flashdata('success')): ?>
				<div class="alert alert-success" role="alert">
					<?php echo $this->session->flashdata('success'); ?>
				</div>
				<?php endif; ?>

				<!-- Card  -->
				<div class="card mb-3">
					<div class="card-header">

						<a class="btn btn-warning btn-sm text-white"  href="<?php echo site_url('rekam_medis/pasien/list/') ?>"><i class="fas fa-arrow-left"></i>
							Back</a>
					</div>
					<div class="card-body">

						<form action="<?php echo site_url('rekam_medis/pasien/edit/'.$pasien->user_id)?>" method="post" enctype="multipart/form-data">
						<!-- Note: atribut action dikosongkan, artinya action-nya akan diproses 
							oleh controller tempat vuew ini digunakan. Yakni index.php/admin/products/edit/ID --->
							<input type="hidden" name="user_id" value="<?php echo $pasien->user_id?>" />
							<input type="hidden" name="is_active" value="<?php echo $pasien->is_active?>" />
							<input type="hidden" name="password" value="<?php echo $pasien->password?>" />
							<input type="hidden" name="bulan_buat" value="<?php $pasien->bulan_buat ?>" />
							<input type="hidden" name="status" value="<?php echo $pasien->status ?>" />
							<input type="hidden" name="role" value="<?php echo $pasien->role ?>" />
							<div class="form-group">
							<label for="nama_user">Nama Lengkap*</label>
                                <input class="form-control <?php echo form_error('nama_user') ? 'is-invalid':'' ?>"
                                    type="text" name="nama_user" placeholder="Nama Lengkap..." value="<?php echo $pasien->nama_user?>" required/>
                                <div class="invalid-feedback">
                                    <?php echo form_error('nama_user') ?>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="username">Username*</label>
                                <input class="form-control <?php echo form_error('username') ? 'is-invalid':'' ?>"
                                    type="text" name="username" placeholder="Username..." value="<?php echo $pasien->username?>" required/>
                                <div class="invalid-feedback">
                                    <?php echo form_error('username') ?>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="email">Email*</label>
                                <input class="form-control <?php echo form_error('email') ? 'is-invalid':'' ?>"
                                    type="email" name="email" placeholder="Email..." value="<?php echo $pasien->email?>" required/>
                                <div class="invalid-feedback">
                                    <?php echo form_error('email') ?>
                                </div>
                            </div>

							<div class="form-group">
                                <label for="tgl_lahir">Tanggal Lahir*</label>
                                <input class="form-control <?php echo form_error('tgl_lahir') ? 'is-invalid':'' ?>"
                                    type="date" name="tgl_lahir" placeholder="Tanggal Lahir..." value="<?php echo $pasien->tgl_lahir?>" required/>
                                <div class="invalid-feedback">
                                    <?php echo form_error('tgl_lahir') ?>
                                </div>
                            </div>

							<div class="form-group">
                                <label for="tempat_lahir">Tempat Lahir*</label>
                                <input class="form-control <?php echo form_error('tempat_lahir') ? 'is-invalid':'' ?>"
                                    type="text" name="tempat_lahir" placeholder="Tempat Lahir..." value="<?php echo $pasien->tempat_lahir?>" required/>
                                <div class="invalid-feedback">
                                    <?php echo form_error('tempat_lahir') ?>
                                </div>
                            </div>

							<div class="form-group">
                                <label for="jk_user">Jenis Kelamin*</label><br>
                                <div class="custom-control custom-radio">
                                    <input type="radio"  name="jk_user" value="LAKI-LAKI" <?php if($pasien->jk_user=='LAKI-LAKI') echo'checked'?> required> Laki-laki<br>
                                    <input type="radio" name="jk_user" value="PEREMPUAN" <?php if($pasien->jk_user=='PEREMPUAN') echo'checked'?> required> Perempuan<br>
                                </div>
                                <div class="invalid-feedback">
                                    <?php echo form_error('jk_user') ?>
                                </div>
							</div>
							
							<div class="form-group">
                                <label for="no_ktp">No KTP*</label>
                                <input class="form-control <?php echo form_error('no_ktp') ? 'is-invalid':'' ?>"
                                    type="text" name="no_ktp" placeholder="No KTP..." value="<?php echo $pasien->no_ktp?>" required/>
                                <div class="invalid-feedback">
                                    <?php echo form_error('no_ktp') ?>
                                </div>
							</div>
							
							<div class="form-group">
                                <label for="no_telp">No Telp.*</label>
                                <input class="form-control <?php echo form_error('no_telp') ? 'is-invalid':'' ?>"
                                    type="text" name="no_telp" placeholder="No Telp...." value="<?php echo $pasien->no_telp?>" minlength="11" maxlength="12" required/>
                                <div class="invalid-feedback">
                                    <?php echo form_error('no_telp') ?>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="alamat">Alamat*</label>
                                <textarea class="form-control <?php echo form_error('alamat') ? 'is-invalid':'' ?>"
                                    name="alamat" placeholder="Alamat Lengkap..." required><?= $pasien->alamat?></textarea>
                                <div class="invalid-feedback">
                                    <?php echo form_error('alamat') ?>
                                </div>
							</div>

							<div class="form-group">
                                <label for="agama">Agama*</label>
                                <form>
                                    <select name="agama" class="custom-select">
                                        <option value="<?php echo $pasien->agama ?>" selected><?php echo $pasien->agama ?></option>
                                        <option value="ISLAM">ISLAM</option>
                                        <option value="PROTESTAN">PROTESTAN</option>
                                        <option value="KATOLIK">KATOLIK</option>
                                        <option value="BUDDHA">BUDDHA</option>
                                        <option value="HINDU">HINDU</option>
                                        <option value="KHONGHUCU">KHONGHUCU</option>
                                    </select>
							</div>

							<div class="form-group">
								<label for="name">Photo</label><br>
								<img class="img-thumbnail" src="<?php echo base_url('assets/images/user/'.$pasien->image) ?>" width="50%"  alt="<?php echo $pasien->username ?>" />
								<input class="form-control-file <?php echo form_error('image') ? 'is-invalid':'' ?>"
								 type="file" name="image" />
								<input type="hidden" name="old_image" value="<?php echo $pasien->image ?>"/>
								<div class="invalid-feedback">
									<?php echo form_error('image') ?>
								</div>
							</div>

							<input class="btn btn-success" type="submit" name="btn" value="Simpan Data" />
						</form>

					</div>

					<div class="card-footer small text-muted">
						* required fields
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
