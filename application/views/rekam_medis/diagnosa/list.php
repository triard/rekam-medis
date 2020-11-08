<!-- kerjone ega -->
<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->load->view("_partials/head.php") ?>
</head>

<body id="page-top" style="font-family: 'Roboto', sans-serif; background-color: #DEE1E2;">

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

                <!-- DataTables -->
                <div class="card mb-3">
                    <div class="card-body">
                        <div class="card-header">
                            <a class="btn btn-primary btn-sm"
                                href="<?php echo site_url('rekam_medis/diagnosa/list_masuk') ?>"><i
                                    class="fas fa-plus"></i> Tambah Diagnosa</a>
									<div class="float-lg-right">
                                <button type="button" class="btn btn-primary btn-sm" data-toggle="modal"
                                    data-target="#myModal">
                                    Cetak Laporan
                                </button>
								<?php $this->load->view("rekam_medis/diagnosa/_partials/_modal.php") ?>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class="tabletable table-bordered table-sm table-hover" id="dataTable" width="100%"
                                cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>pasien</th>
                                        <th>Nomor Rekdis</th>
                                        <th>Penyakit</th>
                                        <th>Tindakan</th>
                                        <th>Obat</th>
                                        <th>aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($diagnosa as $r): ?>
                                    <tr>
                                        <td width="150">
                                            <?php echo $r->nama_user ?>
                                        </td>
                                        <td width="150">NO.
                                            <?php echo $r->nomor_rekam_medis ?>
                                        </td>
                                        <td width="150">
                                            <?php echo $r->nama_penyakit ?>
                                        </td>
                                        <td>
                                            <?php echo $r->tindakan ?>
                                        </td>
                                        <td width="150">
                                            <?php echo $r->nama_obat ?>
                                        </td>
                                        <td width="150" style="text-align: center;">
                                            <a class="btn btn-outline-primary btn-sm" data-toggle="modal"
                                                data-target="#editDiagnosa<?=$r->id_diagnosa?>"><i
                                                    class="fas fa-edit"></i>Edit</a>
                                            <a class="btn btn-outline-danger btn-sm"
                                                href="<?php echo site_url('rekam_medis/diagnosa/delete/'.$r->id_diagnosa) ?>"
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
            <?php $this->load->view("rekam_medis/diagnosa/_partials/edit.php") ?>
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
