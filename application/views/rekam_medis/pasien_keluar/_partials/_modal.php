                        <!-- The Modal -->
                        <div class="modal fade" id="myModal">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">

                                    <!-- Modal Header -->
                                    <div class="modal-header">
                                        <h4 class="modal-title">Cetak Laporan</h4>
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    </div>

                                    <!-- Modal body -->
                                    <div class="modal-body">
                                        <div class="float-lg-right m-4">
                                            <a class="btn btn-primary btn-sm m-1"
                                                href="<?php echo site_url('rekam_medis/pasien_keluar/laporan_pdfAll') ?>">Cetak Semua
                                                Data</a>
                                        </div>
                                        <div class="float-lg-right m-1">
                                            <form class="navbar-form navbar-left" role="search"
                                                action="<?php echo site_url('rekam_medis/pasien_keluar/laporan_pdf');?>"
                                                method="post">
                                                <div class="form-group">
                                                    <label>Bulan :</label>
                                                    <select name="bulan" class="form-control form-control-sm" required>
                                                        <option value="">None</option>
                                                        <option value="1">Januari</option>
                                                        <option value="2">Februari</option>
                                                        <option value="3">Maret</option>
                                                        <option value="4">April</option>
                                                        <option value="5">Mei</option>
                                                        <option value="6">Juni</option>
                                                        <option value="7">Juli</option>
                                                        <option value="8">Agustus</option>
                                                        <option value="9">September</option>
                                                        <option value="10">Oktober</option>
                                                        <option value="11">November</option>
                                                        <option value="12">Desember</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label for="tahun">Tahun</label>
                                                    <input
                                                        class="form-control form-control-sm <?php echo form_error('tahun') ? 'is-invalid':'' ?>"
                                                        type="text" name="tahun" placeholder="tahun" required />
                                                </div>
                                                <button type="submit" class="btn btn-primary btn-sm"><i
                                                        class="glyphicon glyphicon-search"></i>
                                                    Cetak Data Perbulan</button>
                                            </form>
                                        </div>
                                        <div class="float-lg-right m-1">
                                            <form class="navbar-form navbar-left" role="search"
                                                action="<?php echo site_url('rekam_medis/pasien_keluar/laporan_pdf1');?>"
                                                method="post">
                                                <div class="form-group">
                                                    <label for="tahun">Tanggal</label>
                                                    <input
                                                        class="form-control form-control-sm <?php echo form_error('tahun') ? 'is-invalid':'' ?>"
                                                        type="date" name="tanggal" placeholder="tanggal" required />
                                                </div>
                                                <button type="submit" class="btn btn-primary btn-sm">
                                                    Cetak Data Pertanggal</button>
                                            </form>
                                        </div>
                                        <div class="float-lg-right m-1">
                                            <form class="navbar-form navbar-left" role="search"
                                                action="<?php echo site_url('rekam_medis/pasien_keluar/laporan_pdf2');?>"
                                                method="post">
                                                <div class="form-group">
                                                    <label for="tahun">Tahun</label>
                                                    <input
                                                        class="form-control form-control-sm <?php echo form_error('tahun') ? 'is-invalid':'' ?>"
                                                        type="text" name="tahun" placeholder="tahun" maxlength="4"
                                                        minlength="4" required />
                                                </div>
                                                <button type="submit" class="btn btn-primary btn-sm">
                                                    Cetak Data PerTahun</button>
                                            </form>
                                        </div>
                                    </div>

                                    <!-- Modal footer -->
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-dismiss="modal">Close</button>
                                    </div>

                                </div>
                            </div>
                        </div>
