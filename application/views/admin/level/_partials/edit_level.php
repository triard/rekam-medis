				<!-- The Modal -->
				<?php $no=0; foreach($level as $r): $no++; ?>
                <div id="editlevel<?=$r->id?>" class="modal" >
                    <div class="modal-dialog">
                        <div class="modal-content">

                            <!-- Modal Header -->
                            <div class="modal-header">
                                <h5 class="modal-title">Edit level Ruangan</h5>
                                <button type="button" class="close" data-dismiss="modal">×</button>
                            </div>

                            <!-- Modal body -->
                            <div class="modal-body">

                                <form action="<?php echo site_url('admin/level/edit') ?>" method="post"
									enctype="multipart/form-data">
									<input type="hidden" name="id" value="<?php echo $r->id?>" />
                                    <div class="form-group">
                                        <label for="nama">level*</label>
                                        <input
                                            class="form-control <?php echo form_error('nama') ? 'is-invalid':'' ?>"
                                            type="text" name="nama" placeholder="level..."
                                            value="<?php echo $r->nama ?>" required/>
                                        <div class="invalid-feedback">
                                            <?php echo form_error('nama') ?>
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
