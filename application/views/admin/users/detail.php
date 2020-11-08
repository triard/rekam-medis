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

                        <a class="btn btn-warning btn-sm text-white"
                            href="<?php echo site_url('admin/user/list/') ?>"><i class="fas fa-arrow-left"></i>
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

                                         <center>
										 <img class="img-thumbnail"
                                                src="<?php echo base_url('assets/images/user/'.$profile->image) ?>"
                                                width="50%" alt="<?php $profile->username ?>" />
										 </center>

                                    </tr>

                                    <tr>
										<th width="200">Nama Lengkap</th>
										<td width="50">:</td>
                                        <td><?php echo $profile->nama_user?></td>
                                    </tr>
                                    <tr>
										<th>Username</th>
										<td width="50">:</td>
                                        <td><?php echo $profile->username?></td>
                                    </tr>
                                    <tr>
										<th>Email</th>
										<td width="50">:</td>
                                        <td><?php echo $profile->email?></td>
                                    </tr>
                                    <tr>
										<th>Role</th>
										<td width="50">:</td>
                                        <td><?php echo $profile->role?></td>
                                    </tr>
                                    <tr>
                                        <th>Tanggal Lahir</th>
										<td width="50">:</td>
										<td><?php echo $profile->tgl_lahir?></td>
                                    </tr>
                                    <tr>

                                        <th>Tempat Lahir</th>
										<td width="50">:</td>
										<td><?php echo $profile->tempat_lahir?></td>
                                    </tr>
                                    <tr>
                                        <th>Jenis Kelamin</th>
										<td width="50">:</td>
										<td><?php echo $profile->jk_user?></td>
                                    </tr>
                                    <tr>
										<th>No KTP</th>
										<td width="50">:</td>
                                        <td><?php echo $profile->no_ktp?></td>
                                    </tr>
                                    <tr>
										<th>No Telp.</th>
										<td width="50">:</td>
                                        <td><?php echo $profile->no_telp?></td>
                                    </tr>
                                    <tr>
										<th>Alamat</th>
										<td width="50">:</td>
                                        <td><?php echo $profile->alamat?></td>
                                    </tr>
                                    <tr>
										<th>Agama</th>
										<td width="50">:</td>
                                        <td><?php echo $profile->agama?></td>
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
