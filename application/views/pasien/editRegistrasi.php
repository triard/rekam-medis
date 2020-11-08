				<!-- The Modal -->
				<?php if($masuk!= null){ ?>
				<?php $no=0; foreach($masuk as $r): $no++; ?>
				<div id="editPasien<?=$r->id_pasien_masuk?>" class="modal">
				    <div class="modal-dialog">
				        <div class="modal-content">

				            <!-- Modal Header -->
				            <div class="modal-header">
				                <h5 class="modal-title">Edit Pasien Masuk</h5>
				                <button type="button" class="close" data-dismiss="modal">×</button>
				            </div>

				            <!-- Modal body -->
				            <div class="modal-body">

				                <form action="<?php echo site_url('pasien/overview/edit_regis/'.$r->nomor_ruangan)?>"
				                    method="post" enctype="multipart/form-data">
				                    <input type="hidden" name="id_pasien_masuk" value="<?php echo $r->id_pasien_masuk?>" />
				                    <input type="hidden" name="id_pasien" value="<?php echo $r->user_id?>" />
									<input type="hidden" name="nomor_rekam_medis" value="<?php echo $r->nomor_rekam_medis?>" />
									<input type="hidden" name="bulan_buat" value="<?php echo $r->bulan_buat ?>" />
				                    <div class="form-group">
				                        <label for="id_nomor_ruangan">Ruangan*</label>
				                        <select name="id_nomor_ruangan" class="custom-select" required>
				                            <option value="<?php echo $r->id_nomor_ruangan ?>" selected>NO.
				                                <?php echo $r->nomor_ruangan ?> <?php echo $r->nama_ruangan?>
				                            </option>
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
				                        <label for="keterangan_pasien">Keterangan*</label>
				                        <textarea
				                            class="form-control <?php echo form_error('keterangan_pasien') ? 'is-invalid':'' ?>"
				                            name="keterangan_pasien" placeholder="Keterangan..." required><?php echo $r->keterangan_pasien ?></textarea>
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
				<?php endforeach; 
				}?>
