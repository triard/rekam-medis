<?php $no=0; foreach($diagnosa as $r): $no++; ?>
<div id="editDiagnosa<?=$r->id_diagnosa?>" class="modal">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h5 class="modal-title">Edit Diagnosa</h5>
                <button type="button" class="close" data-dismiss="modal">×</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">

                <form action="<?php echo site_url('rekam_medis/diagnosa/edit') ?>" method="post"
                    enctype="multipart/form-data">
					<input type="hidden" name="id_diagnosa" value="<?php echo $r->id_diagnosa?>" />
					<input type="hidden" name="id_pasien_masuk" value="<?php echo $r->id_pasien_masuk?>" />
					<div class="form-group">
                        <label for="nama_penyakit">Penyakit</label>
                        <input class="form-control <?php echo form_error('nama_penyakit') ? 'is-invalid':'' ?>"
                            type="text" name="nama_penyakit" placeholder="penyakit..."
                            value="<?php echo $r->nama_penyakit ?>" required/>
                        <div class="invalid-feedback">
                            <?php echo form_error('nama_penyakit') ?>
                        </div>
                    </div>

					<div class="form-group">
                        <label for="tindakan">tindakan</label>
                        <input class="form-control <?php echo form_error('tindakan') ? 'is-invalid':'' ?>"
                            type="text" name="tindakan" placeholder="tindakan..."
                            value="<?php echo $r->tindakan ?>" required/>
                        <div class="invalid-feedback">
                            <?php echo form_error('tindakan') ?>
                        </div>
					</div>
					<div class="form-group">
                        <label for="nama_obat">Obat</label>
                        <input class="form-control <?php echo form_error('nama_obat') ? 'is-invalid':'' ?>"
                            type="text" name="nama_obat" placeholder="obat..."
                            value="<?php echo $r->nama_obat ?>" required/>
                        <div class="invalid-feedback">
                            <?php echo form_error('nama_obat') ?>
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
