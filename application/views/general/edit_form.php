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

				<!-- Card  -->
				<div class="card mb-3">
					<div class="card-header">

					<?php $logged_user = $this->session->userdata('user_logged');?>
						<a class="btn btn-warning btn-sm text-white"  href="<?php echo site_url('admin/overview/detail/'.$logged_user->user_id) ?>"><i class="fas fa-arrow-left"></i>
							Back</a>
					</div>
					<div class="card-body">

						<form action="" method="post" enctype="multipart/form-data">
						<!-- Note: atribut action dikosongkan, artinya action-nya akan diproses 
							oleh controller tempat vuew ini digunakan. Yakni index.php/admin/products/edit/ID --->
							<input type="hidden" name="user_id" value="<?php echo $users->user_id?>" />
							<input type="hidden" name="is_active" value="<?php echo $users->is_active?>" />
							<input type="hidden" name="password" value="<?php echo $users->password?>" />
							<div class="form-group">
							<label for="nama_user">Nama Lengkap*</label>
                                <input class="form-control <?php echo form_error('nama_user') ? 'is-invalid':'' ?>"
                                    type="text" name="nama_user" placeholder="Nama Lengkap..." value="<?php echo $users->nama_user?>" required/>
                                <div class="invalid-feedback">
                                    <?php echo form_error('nama_user') ?>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="username">Username*</label>
                                <input class="form-control <?php echo form_error('username') ? 'is-invalid':'' ?>"
                                    type="text" name="username" placeholder="Username..." value="<?php echo $users->username?>" required/>
                                <div class="invalid-feedback">
                                    <?php echo form_error('username') ?>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="email">Email*</label>
                                <input class="form-control <?php echo form_error('email') ? 'is-invalid':'' ?>"
                                    type="email" name="email" placeholder="Email..." value="<?php echo $users->email?>" required/>
                                <div class="invalid-feedback">
                                    <?php echo form_error('email') ?>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="role">Role*</label><br>
                                <div class="custom-control custom-radio">
                                    <input type="radio"  name="role" value="admin" <?php if($users->role=='admin')echo'checked'?> required> Admin<br>
                                    <input type="radio" name="role" value="rekam_medis" <?php if($users->role=='rekam_medis')echo'checked'?> required> Rekam Medis<br>
                                </div>
                                <div class="invalid-feedback">
                                    <?php echo form_error('role') ?>
                                </div>
                            </div>

							<div class="form-group">
                                <label for="tgl_lahir">Tanggal Lahir*</label>
                                <input class="form-control <?php echo form_error('tgl_lahir') ? 'is-invalid':'' ?>"
                                    type="date" name="tgl_lahir" placeholder="Tanggal Lahir..." value="<?php echo $users->tgl_lahir?>" required/>
                                <div class="invalid-feedback">
                                    <?php echo form_error('tgl_lahir') ?>
                                </div>
                            </div>

							<div class="form-group">
                                <label for="tempat_lahir">Tempat Lahir*</label>
                                <input class="form-control <?php echo form_error('tempat_lahir') ? 'is-invalid':'' ?>"
                                    type="text" name="tempat_lahir" placeholder="Tempat Lahir..." value="<?php echo $users->tempat_lahir?>" required/>
                                <div class="invalid-feedback">
                                    <?php echo form_error('tempat_lahir') ?>
                                </div>
                            </div>

							<div class="form-group">
                                <label for="jk_user">Jenis Kelamin*</label><br>
                                <div class="custom-control custom-radio">
                                    <input type="radio"  name="jk_user" value="LAKI-LAKI" <?php if($users->jk_user=='LAKI-LAKI') echo'checked'?> required> Laki-laki<br>
                                    <input type="radio" name="jk_user" value="PEREMPUAN" <?php if($users->jk_user=='PEREMPUAN') echo'checked'?> required> Perempuan<br>
                                </div>
                                <div class="invalid-feedback">
                                    <?php echo form_error('jk_user') ?>
                                </div>
							</div>
							
							<div class="form-group">
                                <label for="no_ktp">No KTP*</label>
                                <input class="form-control <?php echo form_error('no_ktp') ? 'is-invalid':'' ?>"
                                    type="text" name="no_ktp" placeholder="No KTP..." value="<?php echo $users->no_ktp?>" minlength="16" maxlength="16" required/>
                                <div class="invalid-feedback">
                                    <?php echo form_error('no_ktp') ?>
                                </div>
							</div>
							
							<div class="form-group">
                                <label for="no_telp">No Telp.*</label>
                                <input class="form-control <?php echo form_error('no_telp') ? 'is-invalid':'' ?>"
                                    type="text" name="no_telp" placeholder="No Telp...." value="<?php echo $users->no_telp?>" minlength="11" maxlength="12" required/>
                                <div class="invalid-feedback">
                                    <?php echo form_error('no_telp') ?>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="alamat">Alamat*</label>
                                <textarea class="form-control <?php echo form_error('alamat') ? 'is-invalid':'' ?>"
                                    name="alamat" placeholder="Alamat Lengkap..." required><?= $users->alamat?></textarea>
                                <div class="invalid-feedback">
                                    <?php echo form_error('alamat') ?>
                                </div>
							</div>


							<div class="form-group">
								<label for="name">Photo</label><br>
								<img class="img-thumbnail" src="<?php echo base_url('assets/images/user/'.$users->image) ?>" width="50%"  alt="<?php $users->username ?>" />
								<input class="form-control-file <?php echo form_error('image') ? 'is-invalid':'' ?>"
								 type="file" name="image" required/>
								<input type="hidden" name="old_image" value="<?php echo $users->image ?>" />
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
