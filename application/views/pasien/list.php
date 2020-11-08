<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->load->view("/_partials/head.php") ?>
</head>

<body>

    <?php $this->load->view("pasien/_partials/navbar.php") ?>

    <center>
        <h2>Data Pasien Masuk Rumah Sakit Ibnu Sina</h2>
    </center>


    <div class="container m-5">
        <a type="button"  class="btn btn-primary mb-3 btn-sm text-white" data-toggle="modal"
            data-target="#addPasien<?=$this->session->userdata('user_logged')->user_id;?>"><i
                class="fas fa-plus"></i> Booking Kamar rawan inap</a>
        <?php if($masuk!= null){ ?>
        <table class="tabletable table-bordered table-sm table-hover" id="dataTable" width="100%" cellspacing="0">
            <thead class="thead-dark">
                <tr>
                    <th>Nama</th>
                    <th>Ruangan</th>
                    <th>No rekam medis</th>
                    <th>Tanggal Masuk</th>
                    <th>Keterangan</th>
                    <th>Konfirmasi</th>
                    <th>Status</th>

                    <th>aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($masuk as $r): ?>
                <tr>
                    <td><?php echo $r->nama_user ?></td>
                    <td><?php echo $r->nomor_ruangan?> (<?php echo $r->nama_ruangan?>)
                    </td>
                    <td><?php echo $r->nomor_rekam_medis?></td>
                    <td>
                        <?php $d = new DateTime($r->tanggal_masuk);
                                            echo $d->format("d/m/Y");?>
                    </td>
                    <td><?php echo $r->keterangan_pasien?></td>
                    <?php if($r->status_ruangan == 'Kosong'){ ?>
                    <td>
                        <a href="<?php echo site_url('pasien/overview/set_booking/'.$r->id_nomor_ruangan) ?>"
                            class="btn btn-warning btn-sm">Booking</a>
                    </td>
                    <?php }else if($r->status_ruangan == 'Booking'){ ?>
                    <td>
                        <a href="<?php echo site_url('pasien/overview/set_kosong/'.$r->id_nomor_ruangan) ?>"
                            class="btn btn-warning btn-sm">Batalkan</a>
                    </td>
                    <?php }else if($r->status_ruangan == 'Booked'){ ?>
                    <td>
                        <a href="" class="btn btn-warning btn-sm">Booked</a>
                    </td>
                    <?php }else if($r->status_ruangan == 'Diisi'){ ?>
                    <td>
                        <button class="btn btn-success btn-sm" disabled="disabled">Berhasil</button>
                    </td>
                    <?php } ?>
                    <?php if($r->status_ruangan == 'Kosong'){ ?>
                    <td>
                        <p>Belum Konfimasi</p>
                    </td>
                    <?php }else if($r->status_ruangan == 'Booking'){ ?>
                    <td>
                        <p>Booking</p>
                    </td>
                    <?php }else{ ?>
                    <td>
                        <p>di konfirmasi admin</p>
                    </td>
                    <?php } ?>
                    <td style="text-align: center;">
                        <?php if($r->status_pulang != NULL){ ?>
                        <p>
                            <center>no action</center>
                        </p>
                        <?php }else if($r->status_ruangan == "Diisi"){ ?>
                        <p>
                            <center>no action</center>
                        </p>
                        <?php }else if($r->status_ruangan == "Booking"){ ?>
                        <p>
                            <center>no action</center>
                        </p>
                        <?php }else if($r->status_ruangan == "Booked"){ ?>
                        <p>
                            <a class="btn btn-info btn-sm text-white" data-toggle="modal"
                                data-target="#viewPasien<?=$r->id_pasien_masuk?>"><i class="fas fa-info-circle"></i></a>
                        </p>
                        <?php }else if($r->status_ruangan == "Kosong"){?>
                        <a class="btn btn-outline-primary btn-sm text-primary" data-toggle="modal"
                            data-target="#editPasien<?=$r->id_pasien_masuk?>"><i class="fas fa-pen-nib"></i>
                        </a>
                        <a class="btn btn-outline-danger btn-sm"
                            href="<?php echo site_url('pasien/overview/delete/'.$r->id_pasien_masuk) ?>"
							onclick="return confirm('Yakin Data Ini Akan Dihapus');" style="color: red">
							<i class="fas fa-trash-alt"></i>
                        </a>
                    </td>
                    <?php } ?>
                    <?php endforeach; ?>
                    <?php }else{ ?>
                    <p>Maaf data yang anda cari tidak ada</p>
                    <?php } ?>
                </tr>
            <tbody>
        </table>
    </div>
    <?php $this->load->view("pasien/registrasi.php") ?>
    <?php $this->load->view("pasien/detail.php") ?>
    <?php $this->load->view("pasien/editRegistrasi.php") ?>
    <?php $this->load->view("_partials/js.php") ?>
</body>

</html>
