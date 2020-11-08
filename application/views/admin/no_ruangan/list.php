<!-- kerjone ega -->
<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->load->view("_partials/head.php") ?>
</head>

<body id="page-top" style="font-family: 'Roboto', sans-serif; background-color: #DEE1E2;">

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

                <!-- DataTables -->
                <div class="card mb-3">
                    <div class="card-header">
                        <a class="btn btn-primary btn-sm text-white" data-toggle="modal" data-target="#addRuangan"><i
								class="fas fa-plus"></i> Tambah Baru</a>
					</div>
                    <div class="card-body">

                        <div class="table-responsive">
                            <table class="tabletable table-bordered table-sm table-hover" id="dataTable" width="100%"
                                cellspacing="0">
                                <thead>
                                    <tr>
									<th>id</th>
										<th>Nama Ruanangan</th>
										<th>Level</th>
										<th>Nomor Ruangan</th>
										<th>Status Ruangan</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($nomor as $r): ?>
                                    <tr>
									<td>
									<?php echo $r->id_ruangan  ?>
									</td>
									<td>
									<?php echo $r->nama  ?>
									</td>
									<td>
                                            <?php echo $r->nama_ruangan ?>
										</td>
                                        <td width="150">NO.
                                            <?php echo $r->nomor_ruangan ?>
										</td>
										<td width="150">
                                            <?php echo $r->status_ruangan ?>
                                        </td>
                                        <td width="300" style="text-align: center;">
                                            <a class="btn btn-outline-primary btn-sm" data-toggle="modal"
                                                data-target="#editRuangan<?=$r->id_nomor_ruangan?>"><i class="fas fa-edit"></i>Edit</a>
                                            <a class="btn btn-outline-danger btn-sm"
                                                href="<?php echo site_url('admin/no_ruangan/delete/'.$r->id_nomor_ruangan) ?>"
                                                onclick="return confirm('Yakin Data Ini Akan Dihapus');"
                                                style="color: red"><i class="fas fa-trash"></i>
                                                Hapus</a>
                                        </td>
                                    </tr>
                                    <?php endforeach; ?>

                                </tbody>
							</table>
                        </div>
                    </div>
                </div>


                <!-- to do -->

            </div>
            <!-- /.container-fluid -->

            <!-- Sticky Footer -->
            <?php $this->load->view("admin/no_ruangan/_partials/add.php") ?>
            <?php $this->load->view("admin/no_ruangan/_partials/edit.php") ?>
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
