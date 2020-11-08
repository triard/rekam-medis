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
                        <a class="btn btn-primary btn-sm"
                            href="<?php echo site_url('admin/pasien_masuk/list_pas') ?>"><i class="fas fa-plus"></i>
                            Tambah Pasien Masuk Baru</a>
                        <div class="float-lg-right">
                            <button type="button" class="btn btn-primary btn-sm" data-toggle="modal"
                                data-target="#myModal">
                                Cetak Laporan
                            </button>
                            <?php $this->load->view("admin/_modal.php") ?>
                        </div>
                    </div>

                    <div class="card-body">

                        <div class="table-responsive">
                            <table class="tabletable table-bordered table-sm table-hover" id="dataTable" width="100%"
                                cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>Nama</th>
                                        <th>KTP</th>
                                        <th>Tanggal Lahir</th>
                                        <th>nomor rekam medis</th>
                                        <th>nomor (ruangan)(kelas)</th>
                                        <th>tanggal masuk</th>
                                        <th>tanggal keluar</th>
                                        <th>keterangan pasien</th>
                                        <th>penyakit</th>
                                        <th>tindakan</th>
                                        <th>obat</th>
                                        <th>kondisi keluar</th>
                                        <th>status pulang</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($all as $r): ?>
                                    <tr>
                                        <td><?php echo $r->nama_user ?></td>
                                        <td><?php echo $r->no_ktp ?></td>
                                        <td><?php echo $r->tgl_lahir?>
                                        </td>
                                        <td><?php echo $r->nomor_rekam_medis?></td>
                                        <td><?php echo $r->nomor_ruangan?>
                                            (<?php echo $r->nama_ruangan?>)(<?php echo $r->nama ?>)</td>
                                        <td>
                                            <?php $d = new DateTime($r->tanggal_masuk);
                                            echo $d->format("d/m/Y");?>
                                        </td>
                                        <td>
                                            <?php $d = new DateTime($r->tanggal_keluar);
                                            echo $d->format("d/m/Y");?>
                                        </td>
                                        <td><?php echo $r->keterangan_pasien?></td>
                                        <td><?php echo $r->nama_penyakit?></td>
                                        <td><?php echo $r->tindakan?></td>
                                        <td><?php echo $r->nama_obat?></td>
                                        <td><?php echo $r->kondisi_keluar?></td>
                                        <td><?php echo $r->status_pulang?></td>
                                    </tr>
                                    <?php endforeach; ?>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

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
