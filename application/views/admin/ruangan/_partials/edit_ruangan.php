				<!-- The Modal -->
				<?php $no=0; foreach($ruangan as $r): $no++; ?>
				<div id="editRuangan<?=$r->id_ruangan?>" class="modal">
				    <div class="modal-dialog">
				        <div class="modal-content">

				            <!-- Modal Header -->
				            <div class="modal-header">
				                <h5 class="modal-title">Edit Ruangan</h5>
				                <button type="button" class="close" data-dismiss="modal">×</button>
				            </div>

				            <!-- Modal body -->
				            <div class="modal-body">

				                <form action="<?php echo site_url('admin/ruangan/edit') ?>" method="post"
				                    enctype="multipart/form-data">
				                    <input type="hidden" name="id_ruangan" value="<?php echo $r->id_ruangan?>" />
				                    <div class="form-group">
				                        <label for="nama_ruangan">Nama Ruangan*</label>
				                        <input class="form-control <?php echo form_error('nama_ruangan') ? 'is-invalid':'' ?>"
				                            type="text" name="nama_ruangan" placeholder="Nama Ruangan..."
				                            value="<?php echo $r->nama_ruangan ?>" required />
				                        <div class="invalid-feedback">
				                            <?php echo form_error('nama_ruangan') ?>
				                        </div>
				                    </div>
				                    <div class="form-group">
				                        <label for="id_kelas">Kelas*</label>
				                        <select name="id_kelas" class="custom-select" required>
				                            <option value="<?php echo $r->id_kelas ?>" selected>
				                                <?php echo $r->nama ?>
				                            <option selected>Level</option>
				                            <?php foreach ($level as $rn): ?>
				                            <option value="<?php echo  $rn->id?>">
				                                <?php echo $rn->nama ?>
				                            </option>
				                            <?php endforeach; ?>
				                        </select>
				                        <div class="invalid-feedback">
				                            <?php echo form_error('id_nomor_ruangan') ?>
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
