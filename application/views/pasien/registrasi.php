<div class="modal" id="addPasien<?=$this->session->userdata('user_logged')->user_id;?>">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h5 class="modal-title">Tambah Pasien Masuk</h5>

                <button type="button" class="close" data-dismiss="modal">×</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">

                <form action="<?php echo site_url('pasien/overview/add') ?>" method="post"
                    enctype="multipart/form-data">
					<input type="hidden" name="id_pasien" value="<?php echo $this->session->userdata('user_logged')->user_id?>">
					<input type="hidden" name="bulan_buat" value="<?php $bln=date("m"); echo $bln; ?>" />
					<input type="hidden" name="status_input" value="pas">
                    <div class="form-group">
                        <label for="id_nomor_ruangan">Ruangan*</label>
                        <select name="id_nomor_ruangan" class="custom-select" required>
							<option selected>Ruangan</option>
                            <?php foreach ($ruangan as $rn): ?>
                            <option value="<?php echo  $rn->id_nomor_ruangan?>">
                                <?php echo $rn->nama_ruangan ?> No.
                                <?php echo $rn->nomor_ruangan?>
                            </option>
                            <?php endforeach; ?>
                        </select>
                        <div class="invalid-feedback">
                            <?php echo form_error('id_nomor_ruangan') ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <?php $plus = $jumlah+1?>
                        <label for="nomor_rekam_medis">No Rekam Medis*</label>
                        <input class="form-control" type="text" name="nomor_rekam_medis"
                            value="<?php echo 'IB12345-'. $plus?>" required/>
                    </div>
                    <div class="form-group">
                        <label for="keterangan_pasien">Keterangan*</label>
                        <textarea class="form-control <?php echo form_error('keterangan_pasien') ? 'is-invalid':'' ?>"
                            name="keterangan_pasien" placeholder="Keterangan..." required></textarea>
                        <div class="invalid-feedback">
                            <?php echo form_error('keterangan_pasien') ?>
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

