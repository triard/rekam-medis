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

                 <form action="<?php echo site_url('admin/ruangan/add') ?>" method="post" enctype="multipart/form-data">
                     <div class="form-group">
                         <label for="nama_ruangan">Nama Ruangan*</label>
                         <input class="form-control <?php echo form_error('nama_ruangan') ? 'is-invalid':'' ?>" type="text"
                             name="nama_ruangan" placeholder="Nama Ruangan..." required/>
                         <div class="invalid-feedback">
                             <?php echo form_error('nama_ruangan') ?>
                         </div>
                     </div>
					 <div class="form-group">
                        <label for="id_kelas">Level*</label>
                        <select name="id_kelas" class="custom-select" required>
							<option selected>Level</option>
                            <?php foreach ($level as $rn): ?>
                            <option value="<?php echo  $rn->id?>">
                                <?php echo $rn->nama ?>
                            </option>
                            <?php endforeach; ?>
                        </select>
                        <div class="invalid-feedback">
                            <?php echo form_error('id_kelas') ?>
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
