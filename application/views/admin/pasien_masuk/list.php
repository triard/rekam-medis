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
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
                                Cetak Laporan
                            </button>
                            <?php $this->load->view("admin/pasien_masuk/_partials/_modal.php") ?>
                        </div>
                        <div class="card-body">

                            <div class="table-responsive">
                                <table class="tabletable table-bordered table-sm table-hover" id="dataTable"
                                    width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Nama</th>
                                            <th>Ruangan</th>
                                            <th>No rekam medis</th>
                                            <th>Tanggal Masuk</th>
                                            <th>Keterangan</th>
                                            <th>Konfirmasi</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($masuk as $r): ?>
                                        <tr>
                                            <td width=150><?php echo $r->nama_user ?></td>
                                            <td width="160"><?php echo $r->nomor_ruangan?>
                                                (<?php echo $r->nama_ruangan?>)
                                            </td>
                                            <td width="100"><?php echo $r->nomor_rekam_medis?></td>
                                            <td width="100">
                                                <?php $d = new DateTime($r->tanggal_masuk);
                                            echo $d->format("d/m/Y");?>
                                            </td>
                                            <td width="300"><?php echo $r->keterangan_pasien?></td>
                                            <td>
                                                <?php if ($r->status_pulang != NULL  ){ ?>
                                                <button class="btn btn-success btn-sm" title="Terkonfirmasi" disabled><i
                                                        class="icon-remove icon-white"> </i>
                                                    Terkonfirmasi</button>
                                                <?php }else if($r->status_ruangan == "Diisi"){ ?>
                                                <button class="btn btn-success btn-sm" title="Terkonfirmasi" disabled><i
                                                        class="icon-remove icon-white"> </i>
                                                    Terkonfirmasi</button>
                                                <?php }else if($r->status_ruangan == "Kosong" && $r->status_input == "pas"){ ?>
                                                <a href="" disabled class="btn btn-danger btn-sm" title="Konfirmasi"><i
                                                        class="icon-list icon-white"> </i>Menunggu Kon Pasien</a>
                                                <?php }else if($r->status_ruangan == "Booking" && $r->status_input == "pas"){ ?>
													<a href="<?php echo site_url('admin/pasien_masuk/konfirmasi_booked/'.$r->id_nomor_ruangan) ?>"
                                                    onclick="return confirm('Yakin Data Ini Akan Dikonfirmasi');"
                                                    class="btn btn-primary btn-sm" title="Konfirmasi"><i
                                                        class="icon-list icon-white"> </i> Konfirmasi booked</a>
                                                <?php }else if($r->status_ruangan == "Kosong" || $r->status_ruangan == "Booked"){ ?>
                                                <a href="<?php echo site_url('admin/pasien_masuk/konfirmasi/'.$r->id_nomor_ruangan) ?>"
                                                    onclick="return confirm('Yakin Data Ini Akan Dikonfirmasi');"
                                                    class="btn btn-danger btn-sm" title="Konfirmasi"><i
                                                        class="icon-list icon-white"> </i> Konfirmasi</a>
                                                <?php } ?>

                                            </td>
                                            <td width="150" style="text-align: center;">
                                                <?php if($r->status_pulang != NULL){ ?>
                                                <p>
                                                    <center>no action</center>
                                                </p>
                                                <?php }else if($r->status_ruangan == "Diisi"){ ?>
                                                <p>
                                                    <center>no action</center>
                                                </p>
                                                <?php }else if($r->status_ruangan == "Kosong"){?>
                                                <a class="btn btn-outline-primary btn-sm" data-toggle="modal"
                                                    data-target="#editPasien<?=$r->id_pasien_masuk?>"><i
                                                        class="fas fa-edit"></i></a>
                                                <a class="btn btn-outline-danger btn-sm"
                                                    href="<?php echo site_url('admin/pasien_masuk/delete/'.$r->id_pasien_masuk) ?>"
                                                    onclick="return confirm('Yakin Data Ini Akan Dihapus');"
                                                    style="color: red"><i class="fas fa-trash"></i>
                                                </a>
                                            </td>
                                            <?php } ?>
                                        </tr>
                                        <?php endforeach; ?>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.container-fluid -->
                <?php $this->load->view("admin/pasien_masuk/_partials/edit.php") ?>
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
