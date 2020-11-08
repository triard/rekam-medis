<?php $no=0; foreach($masuk as $r): $no++; ?>
<div class="modal" id="addKeluar<?=$r->id_pasien_masuk?>">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h5 class="modal-title">Tambah Pasien_keluar</h5>
                <button type="button" class="close" data-dismiss="modal">×</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <form action="<?php echo site_url('admin/pasien_keluar/add') ?>" method="post"
                    enctype="multipart/form-data">
					<input type="text" name="id_pasien_masuk" value="<?php echo $r->id_pasien_masuk?>">
					<input type="text" name="bulan_buat" value="<?php $bln=date("m"); echo $bln; ?>" />
                    <div class="form-group">
                        <label for="kondisi_keluar">kondisi_keluar*</label><br>
                        <div class="custom-control custom-radio">
                            <input type="radio" name="kondisi_keluar" value="Sehat" required> Sehat<br>
							<input type="radio" name="kondisi_keluar" value="Belum Sehat" required> Belum Sehat<br>
							<input type="radio" name="kondisi_keluar" value="Meninggal" required> Meninggal<br>
                        </div>
                        <div class="invalid-feedback">
                            <?php echo form_error('kondisi_keluar') ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="status_pulang">status_pulang*</label><br>
                        <div class="custom-control custom-radio">
                            <input type="radio" name="status_pulang" value="Dipulangkan" required> Dipulangkan<br>
                            <input type="radio" name="status_pulang" value="Pulang Paksa" required> Pulang Paksa<br>
                        </div>
                        <div class="invalid-feedback">
                            <?php echo form_error('status_pulang') ?>
                        </div>
                    </div>
            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
                <input class="btn btn-success" type="submit" name="btn" value="Simpan Data" />
                </form>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>

            </div>

        </div>
    </div>
</div>
<?php endforeach; ?>
