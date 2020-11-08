<?php $no=0; foreach($masuk as $r): $no++; ?>
<div class="modal" id="addDiagnosa<?=$r->nomor_rekam_medis?>">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h5 class="modal-title">Tambah Diagnosa</h5>
                <button type="button" class="close" data-dismiss="modal">×</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">

                <form action="<?php echo site_url('rekam_medis/diagnosa/add') ?>" method="post"
					enctype="multipart/form-data">

					<input type="hidden" name="id_pasien_masuk" value="<?php echo $r->id_pasien_masuk?>">
					<input type="hidden" name="bulan_buat" value="<?php $bln=date("m"); echo $bln; ?>" />
                    <div class="form-group">
                        <label for="nama_penyakit">Penyakit</label>
                        <input class="form-control <?php echo form_error('nama_penyakit') ? 'is-invalid':'' ?>"
                            type="text" name="nama_penyakit" placeholder="nama_penyakit..." required />
                        <div class="invalid-feedback">
                            <?php echo form_error('nama_penyakit') ?>
                        </div>
					</div>
					<div class="form-group">
                        <label for="tindakan">tindakan</label>
                        <input class="form-control <?php echo form_error('tindakan') ? 'is-invalid':'' ?>"
                            type="text" name="tindakan" placeholder="tindakan..." required/>
                        <div class="invalid-feedback">
                            <?php echo form_error('tindakan') ?>
                        </div>
					</div>
					<div class="form-group">
                        <label for="nama_obat">Nama obat</label>
                        <input class="form-control <?php echo form_error('nama_obat') ? 'is-invalid':'' ?>"
                            type="text" name="nama_obat" placeholder="nama_obat..." required/>
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
