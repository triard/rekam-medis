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

                <!-- DataTables -->
                <div class="card mb-3">
                    <div class="card-header">
                        <a class="btn btn-primary btn-sm"  href="<?php echo site_url('admin/user/add') ?>"><i class="fas fa-plus"></i> Tambah Baru</a>
                    </div>
                    <div class="card-body">

                        <div class="table-responsive">
                            <table class="tabletable table-bordered table-sm table-hover" id="dataTable" width="100%"
                                cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>Nama</th>
                                        <th>Level</th>
                                        <th>login terakhir</th>
                                        <th>status</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($users as $user): ?>
                                    <tr>
                                        <td width="150">
                                            <?php echo $user->nama_user ?>
                                        </td>
                                        <td>
                                            <?php echo $user->role ?>
                                        </td>
                                        <td>
                                            <?php echo $user->last_login ?>
                                        </td>
                                        <td>
                                            <?php echo $user->is_active ?>
                                        </td>
                                        <td width="300" style="text-align: center;">
                                            <a href="<?php echo site_url('admin/user/detail/'.$user->user_id) ?>"
                                                class="btn btn-outline-info btn-sm"><i class="fas fa-eye"></i>
                                                Detail</a>
                                            <a href="<?php echo site_url('admin/user/edit/'.$user->user_id) ?>"
                                                class="btn btn-outline-primary btn-sm"><i class="fas fa-edit"></i>
                                                Edit</a>
                                            <a class="btn btn-outline-danger btn-sm"
                                                href="<?php echo site_url('admin/user/delete/'.$user->user_id) ?>"
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
