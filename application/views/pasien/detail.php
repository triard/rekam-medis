				<!-- The Modal -->
				<?php $no=0; foreach($masuk as $r): $no++; ?>
				<div id="viewPasien<?=$r->id_pasien_masuk?>" class="modal fade">
				    <div class="modal-dialog modal-sm">
				        <div class="modal-content">
				            <!-- Modal Header -->
				            <div class="modal-header">
				                <h5 class="modal-title"></h5>
				                <button type="button" class="close" data-dismiss="modal">×</button>
				            </div>

				            <!-- Modal body -->
				            <div class="modal-body">
								<center>
								<div class="card text-white bg-success mb-3" style="max-width: 18rem;">
				                    <div class="card-header">Data Pesan Rawat Inap</div>
				                    <div class="card-body">
				                        <h5 class="card-title"><?php echo $r->nomor_rekam_medis ?></h5>
				                        <p class="card-text">
										<?php echo $r->nama_user?> <br>
										<?php echo $r->nomor_ruangan?> (<?php echo $r->nama_ruangan?>|<?php echo $r->nama?>)
										</p>
				                    </div>
				                </div>
								</center>
				                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
				            </div>

				        </div>
				    </div>
				</div>
				<?php endforeach; ?>
