				<!-- The Modal -->
				<?php $no=0; foreach($nomor as $r): $no++; ?>
				<div id="editRuangan<?=$r->id_nomor_ruangan?>" class="modal">
				    <div class="modal-dialog">
				        <div class="modal-content">

				            <!-- Modal Header -->
				            <div class="modal-header">
				                <h5 class="modal-title">Edit Ruangan</h5>
				                <button type="button" class="close" data-dismiss="modal">×</button>
				            </div>

				            <!-- Modal body -->
				            <div class="modal-body">

				                <form action="<?php echo site_url('admin/no_ruangan/edit') ?>" method="post"
				                    enctype="multipart/form-data">
				                    <input type="text" name="id_nomor_ruangan" value="<?php echo $r->id_nomor_ruangan?>" />
				                    <div class="form-group">
				                        <label for="id_ruangan">Nama Ruangan*</label>
				                        <select name="id_ruangan" class="custom-select" required>
				                            <option value="<?php echo $r->id_ruangan ?>"  selected><?php echo $r->nama_ruangan ?></option>
				                            <?php foreach ($ruangan as $rn): ?>
				                            <option value="<?php echo  $rn->id_ruangan?>"><?php echo  $rn->nama_ruangan?></option>
				                            <?php endforeach; ?>
				                        </select>
				                    </div>
				                    <div class="form-group">
				                        <label for="nomor_ruangan">Nomor Ruangan*</label>
				                        <input class="form-control <?php echo form_error('nama_ruangan') ? 'is-invalid':'' ?>"
				                            type="text" name="nomor_ruangan" placeholder="Nomor Ruangan..."
				                            value="<?php echo $r->nomor_ruangan ?>" required maxlength="2"/>
				                        <div class="invalid-feedback">
				                            <?php echo form_error('nomor_ruangan') ?>
				                        </div>
				                    </div>
				                    <div class="form-group">
				                        <label for="status_ruangan">Status Ruangan*</label><br>
				                        <input type="radio" name="status_ruangan" value="Kosong"
				                            <?php if($r->status_ruangan=='Kosong')echo'checked'?> required> Kosong<br>
				                        <input type="radio" name="status_ruangan" value="Diisi"
				                            <?php if($r->status_ruangan=='Diisi')echo'checked'?> required> Diisi<br>
				                        <div class="invalid-feedback">
				                            <?php echo form_error('nama_ruangan') ?>
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
