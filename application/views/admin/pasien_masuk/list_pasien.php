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
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($pacient as $p): ?>
                                    <tr>
                                        <td>
                                            <?php echo $p->nama_user ?>
                                        </td>
                                        <td>
                                            <?php echo $p->no_ktp ?>
                                        </td>
                                        <td>
                                            <?php echo $p->jk_user ?>
                                        </td>
                                        <td width="100" style="text-align: center;">
										<a class="btn btn-outline-primary btn-sm" data-toggle="modal"
                                                data-target="#addPasien<?=$p->user_id?>"><i class="fas fa-plus"></i>Tambahkan Pasien Masuk</a>
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
			<?php $this->load->view("admin/pasien_masuk/_partials/add.php") ?>
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
