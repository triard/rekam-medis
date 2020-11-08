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
                    </div>
                    <div class="card-body">

                        <div class="table-responsive">
                            <table class="tabletable table-bordered table-sm table-hover" id="dataTable" width="100%"
                                cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>Nama</th>
                                        <th>Ruangan</th>
                                        <th>No rekam medis</th>
                                        <th>Tanggal Masuk</th>
                                        <th>Keterangan</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($masuk as $r): ?>
										<?php if($r->status_pulang != "Dipulangkan" AND $r->status_pulang != "Pulang Paksa"){  ?>                                    
									<tr>
                                        <td>
                                            <?php echo $r->nama_user?>
                                        </td>
                                        <td width="150">NO.
                                            <?php echo $r->nomor_ruangan?>(<?php echo $r->nama_ruangan?>)
                                        </td>
                                        <td width="150">
                                            <?php echo $r->nomor_rekam_medis?>
                                        </td>
                                        <td width="150">
                                            <?php echo $r->tanggal_masuk?>
                                        </td>
                                        <td width="150">
                                            <?php echo $r->keterangan_pasien?>
                                        </td>
                                        <td width="200" style="text-align: center;">
                                            <a class="btn btn-outline-primary btn-sm" data-toggle="modal"
                                                data-target="#addDiagnosa<?=$r->nomor_rekam_medis?>"><i
                                                    class="fas fa-plus"></i>Input diagnosa</a>
										</td>
                                    </tr>
									<?php } ?>
                                    <?php endforeach; ?>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>


                <!-- to do -->

            </div>
            <!-- /.container-fluid -->
			<?php $this->load->view("admin/diagnosa/_partials/add.php") ?>
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
