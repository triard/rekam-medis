 <!-- The Modal -->
 <div class="modal" id="addlevel">
     <div class="modal-dialog">
         <div class="modal-content">

             <!-- Modal Header -->
             <div class="modal-header">
                 <h5 class="modal-title">Tambah Level Ruangan</h5>
                 <button type="button" class="close" data-dismiss="modal">×</button>
             </div>

             <!-- Modal body -->
             <div class="modal-body">

                 <form action="<?php echo site_url('admin/level/add') ?>" method="post" enctype="multipart/form-data">
                     <div class="form-group">
                         <label for="nama">level*</label>
                         <input class="form-control <?php echo form_error('nama') ? 'is-invalid':'' ?>" type="text"
                             name="nama" placeholder="level..."/>
                         <div class="invalid-feedback">
                             <?php echo form_error('nama') ?>
                         </div>
                     </div>

             </div>
             <div class="modal-footer">
                 <input class="btn btn-success" type="submit" name="btn" value="Simpan Data" />
                 </form>
                 <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
             </div>

         </div>
     </div>
 </div>
