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

				<!-- Card  -->
				<div class="card mb-3">
                    <div class="card-header">

                        <a class="btn btn-warning btn-sm text-white" href="<?php echo site_url('admin/pasien/list/') ?>"><i class="fas fa-arrow-left"></i>
                            Kembali</a>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="tabletable table-bordered table-sm table-hover" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th>Nama Lengkap</th>
                                        <td><?php echo $pasien->nama_pasien?></td>
									</tr>
									<tr>
                                        <th>No KTP</th>
                                        <td><?php echo $pasien->no_KTP?></td>
									</tr>
									<tr>
                                        <th>Tanggal Lahir</th>
                                        <td><?php echo $pasien->tgl_lahir_pasien?></td>
									</tr>
									<tr>
                                        <th>Jenis Kelamin</th>
                                        <td><?php echo $pasien->jenis_kelamin?></td>
									</tr>
									<tr>
                                        <th>Alamat</th>
                                        <td><?php echo $pasien->alamat_pasien?></td>
									</tr>
									<tr>
                                        <th>No Telp.</th>
                                        <td><?php echo $pasien->no_telp_pasien?></td>
									</tr>
									<tr>
                                        <th>Agama</th>
                                        <td><?php echo $pasien->agama_pasien?></td>
									</tr>
									<tr>
										<th>Usia</th>
										<td>
                                        <?php
											$birthday = $pasien->tgl_lahir_pasien;
											$biday = new DateTime($birthday);
											$today = new DateTime();
											$diff = $today->diff($biday);
											echo  $diff->y ." Tahun"
										?>
										</td>
                                    </tr>
									<tr>
                                        <th>Photo KTP</th>
                                        <td>
										<img class="img-thumbnail" src="<?php echo base_url('assets/images/pasien/'.$pasien->image) ?>" width="50%"  alt="<?php $pasien->nama_pasien ?>" />	
										</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
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
