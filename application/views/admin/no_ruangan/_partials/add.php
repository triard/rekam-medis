<!-- The Modal -->
<div class="modal" id="addRuangan">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h5 class="modal-title">Tambah Ruangan</h5>
                <button type="button" class="close" data-dismiss="modal">×</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">

                <form action="<?php echo site_url('admin/no_ruangan/add') ?>" method="post"
                    enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="id_ruangan">Nama Ruangan*</label>
                        <select name="id_ruangan" class="custom-select" required>
                            <option selected>Nama Ruangan</option>
                            <?php foreach ($ruangan as $r): ?>
								<option value="<?php echo  $r->id_ruangan?>"><?php echo  $r->nama_ruangan?></option>
                            <?php endforeach; ?>
                        </select>
                        <div class="invalid-feedback">
                            <?php echo form_error('id_ruangan') ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="nomor_ruangan">Nomor Ruangan*</label>
                        <input class="form-control <?php echo form_error('nomor_ruangan') ? 'is-invalid':'' ?>"
                            type="text" name="nomor_ruangan" placeholder="Nomor Ruangan..." required maxlength="2"/>
                        <div class="invalid-feedback">
                            <?php echo form_error('nomor_ruangan') ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label  for="status_ruangan">Status Ruangan*</label><br>
                        <input type="radio" name="status_ruangan" value="Kosong" required> Kosong<br>
                        <input type="radio" name="status_ruangan" value="Diisi" required> Diisi<br>
                        <div class="invalid-feedback">
                            <?php echo form_error('status_ruangan') ?>
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
