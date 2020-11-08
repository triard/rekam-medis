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
                                href="<?php echo site_url('rekam_medis/pasien_keluar/list_masuk') ?>"><i
                                    class="fas fa-plus"></i> Tambah Pasien Keluar</a>
                            <div class="float-lg-right">
                                <button type="button" class="btn btn-primary" data-toggle="modal"
                                    data-target="#myModal">
                                    Cetak Laporan
                                </button>
                                <?php $this->load->view("rekam_medis/pasien_keluar/_partials/_modal.php") ?>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class="tabletable table-bordered table-sm table-hover" id="dataTable" width="100%"
                                cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>pasien</th>
                                        <th>rekam medis</th>
                                        <th>tanggal keluar</th>
                                        <th>kondisi</th>
                                        <th>status</th>
                                        <th>kondirmasi</th>
                                        <th>aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($keluar as $r): ?>
                                    <tr>
                                        <td width="150"><?php echo $r->nama_user ?></td>
                                        <td width="150"><?php echo $r->nomor_rekam_medis ?></td>
                                        <td width="100"><?php $d = new DateTime($r->tanggal_keluar);
                                            echo $d->format("d/m/Y");?></td>
                                        <td><?php echo $r->kondisi_keluar ?></td>
                                        <td width="150"><?php echo $r->status_pulang ?></td>
                                        <td>
                                            <?php if ($r->status_ruangan == "Diisi"){ ?>
                                            <center>
                                                <a href="<?php echo site_url('rekam_medis/pasien_keluar/konfirmasi/'.$r->id_nomor_ruangan) ?>"
                                                    onclick="return confirm('Yakin Data Ini Akan Dikonfirmasi');"
                                                    class="btn btn-danger btn-sm" title="Konfirmasi"><i
                                                        class="icon-list icon-white"> </i> Konfirmasi</a>
                                            </center>
                                            <?php }else if ($r->status_ruangan == "Kosong"){ ?>
                                            <center>
                                                <button class="btn btn-success btn-sm" title="Terkonfirmasi" disabled><i
                                                        class="icon-remove icon-white"> </i> Terkonfirmasi</button>
                                            </center>
                                            <?php } ?>
                                        </td>
                                        <?php if($r->status_ruangan == "Diisi"){ ?>
                                        <td width="150" style="text-align: center;">
                                            <a class="btn btn-outline-primary btn-sm" data-toggle="modal"
                                                data-target="#editDiagnosa<?=$r->id_pasien_keluar?>"><i
                                                    class="fas fa-edit"></i>Edit</a>
                                            <a class="btn btn-outline-danger btn-sm"
                                                href="<?php echo site_url('rekam_medis/pasien_keluar/delete/'.$r->id_pasien_keluar) ?>"
                                                onclick="return confirm('Yakin Data Ini Akan Dihapus');"
                                                style="color: red"><i class="fas fa-trash"></i>
                                                Hapus</a>
                                        </td>
                                        <?php }else{ ?>
                                        <td>
                                            <p>
                                                <center>no action</center>
                                            </p>
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
            <?php $this->load->view("rekam_medis/pasien_keluar/_partials/edit.php") ?>
            <?php $this->load->view("_partials/footer.php") ?>

        </div>
    </div>
    <?php $this->load->view("_partials/scrolltop.php") ?>
    <?php $this->load->view("_partials/modal.php") ?>
    <?php $this->load->view("_partials/js.php") ?>
</body>

</html>
