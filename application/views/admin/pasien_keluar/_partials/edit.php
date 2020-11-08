<?php $no=0; foreach($keluar as $r): $no++; ?>
<div id="editDiagnosa<?=$r->id_pasien_keluar?>" class="modal">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h5 class="modal-title">Edit Pasien Keluar</h5>
                <button type="button" class="close" data-dismiss="modal">×</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">

                <form action="<?php echo site_url('admin/pasien_keluar/edit') ?>" method="post"
                    enctype="multipart/form-data">
					<input type="hidden" name="id_pasien_keluar" value="<?php echo $r->id_pasien_keluar?>" />
					<input type="text" name="id_pasien_masuk" value="<?php echo $r->id_pasien_masuk?>" />
					<input type="text" name="bulan_buat" value="<?php $bln=date("m"); echo $bln; ?>" />
					<div class="form-group">
                        <label for="kondisi_keluar">kondisi_keluar*</label><br>
                        <div class="custom-control custom-radio">
                            <input type="radio" name="kondisi_keluar" value="Sehat" <?php if($r->kondisi_keluar=='Sehat') echo'checked'?>> Sehat<br>
							<input type="radio" name="kondisi_keluar" value="Belum Sehat" <?php if($r->kondisi_keluar=='Belum Sehat') echo'checked'?>> Belum Sehat<br>
							<input type="radio" name="kondisi_keluar" value="Meninggal" <?php if($r->kondisi_keluar=='Meninggal') echo'checked'?>> Meninggal<br>
                        </div>
                        <div class="invalid-feedback">
                            <?php echo form_error('kondisi_keluar') ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="status_pulang">status_pulang*</label><br>
                        <div class="custom-control custom-radio">
                            <input type="radio" name="status_pulang" value="Dipulangkan" <?php if($r->status_pulang=='Dipulangkan') echo'checked'?>> Dipulangkan<br>
                            <input type="radio" name="status_pulang" value="Pulang Paksa" <?php if($r->status_pulang=='Pulang Paksa') echo'checked'?>> Pulang Paksa<br>
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
