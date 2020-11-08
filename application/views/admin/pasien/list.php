<!-- kerjone ely -->
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

                <?php if ($this->session->flashdata('message')): ?>
                <div class="alert alert-success" role="alert">
                    <?php echo $this->session->flashdata('message'); ?>
                </div>
                <?php endif; ?>

                <!-- DataTables -->
                <div class="card mb-3">
                    <div class="card-header">
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
                            Cetak Laporan
                        </button>
                        <?php $this->load->view("admin/pasien/_modal.php") ?>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="tabletable table-bordered table-sm table-hover" id="dataTable" width="100%"
                                cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>Nama Pasien</th>
                                        <th>Nomor KTP</th>
                                        <th>Jenis Kelamin</th>
                                        <th>Status</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($pacient as $pacient): ?>
                                    <tr>
                                        <td width="150">
                                            <?php echo $pacient->nama_user ?>
                                        </td>
                                        <td>
                                            <?php echo $pacient->no_ktp ?>
                                        </td>
                                        <td>
                                            <?php echo $pacient->jk_user ?>
                                        </td>
                                        <td class="text-center">
                                            <?php if($pacient->status == "verification"){ ?>
                                            <a href="<?php echo site_url('admin/pasien/StatusUnver/'.$pacient->user_id)?>"
                                                class="btn btn-danger">unverification
                                            </a>
                                            <?php }else if($pacient->status == "unverification"){?>
                                            <a href="<?php echo site_url('admin/pasien/StatusVer/'.$pacient->user_id)?>"
                                                class="btn btn-primary">verification
                                            </a>

                                            <?php } ?>

                                        </td>
                                        <td width="300" style="text-align: center;">
                                            <a href="<?php echo site_url('admin/pasien/detail/'.$pacient->user_id) ?>"
                                                class="btn btn-outline-info btn-sm"><i class="fas fa-eye"></i>
                                                Detail</a>
                                            <a href="<?php echo site_url('admin/pasien/edit/'.$pacient->user_id) ?>"
                                                class="btn btn-outline-primary btn-sm"><i class="fas fa-edit"></i>
                                                Edit</a>
                                            <a class="btn btn-outline-danger btn-sm"
                                                href="<?php echo site_url('admin/pasien/delete/'.$pacient->user_id) ?>"
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
