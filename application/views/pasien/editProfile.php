<!DOCTYPE html>
<html lang="en">
<head>
<?php $this->load->view("pasien/_partials/head.php") ?>
</head>
<body>
<?php $this->load->view("pasien/_partials/navbar.php") ?>
<div class="card mt-5">
    <div class="modal-dialog modal-dialog-centered modal-lg mt-5">
        <div class="modal-content">
            <div class="modal-header bg-success">
                <h5 class="modal-title text-white" id="exampleModalLongTitle">Data Diri <?php echo $pasien->nama_user ?></h5>
            </div>
            <div class="modal-body">
                <form action="<?php echo site_url('pasien/overview/edit/'.$pasien->user_id)?>" method="post"
                    enctype="multipart/form-data">
                    <input type="hidden" name="user_id" value="<?php echo $pasien->user_id?>" />
                    <input type="hidden" name="is_active" value="<?php echo $pasien->is_active?>" />
                    <input type="hidden" name="password" value="<?php echo $pasien->password?>" />
                    <input type="hidden" name="bulan_buat" value="<?php $pasien->bulan_buat ?>" />
                    <input type="hidden" name="status" value="<?php echo $pasien->status ?>" />
                    <input type="hidden" name="role" value="<?php echo $pasien->role ?>" />
                    <div class="form-row">
                        <div class="input-group col-md-7 mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Nama Lengkap</span>
                            </div>
                            <input class=" form-control <?php echo form_error('nama_user') ? 'is-invalid':'' ?>"
                                type="text" name="nama_user" placeholder="Nama Lengkap..."
                                value="<?php echo $pasien->nama_user?>" required />
                            <div class="invalid-feedback">
                                <?php echo form_error('nama_user') ?>
                            </div>
                        </div>
                        <div class="input-group col-md-5 mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Username</span>
                            </div>
                            <input class=" form-control <?php echo form_error('username') ? 'is-invalid':'' ?>"
                                type="text" name="username" placeholder="Username..."
                                value="<?php echo $pasien->username?>" required />
                            <div class="invalid-feedback">
                                <?php echo form_error('username') ?>
                            </div>
                        </div>
                        <div class="input-group col-md-6 mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Email</span>
                            </div>
                            <input class="form-control <?php echo form_error('email') ? 'is-invalid':'' ?>" type="email"
                                name="email" placeholder="Email..." value="<?php echo $pasien->email?>" required />
                            <div class="invalid-feedback">
                                <?php echo form_error('email') ?>
                            </div>
                        </div>
                        <div class="input-group col-md-6 mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Tgl Lahir</span>
                            </div>
                            <input class="form-control <?php echo form_error('tgl_lahir') ? 'is-invalid':'' ?>"
                                type="date" name="tgl_lahir" placeholder="Tanggal Lahir..."
                                value="<?php echo $pasien->tgl_lahir?>" required />
                            <div class="invalid-feedback">
                                <?php echo form_error('tgl_lahir') ?>
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="input-group col-md-6 mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Tempat Lhr</span>
                            </div>
                            <input class="form-control <?php echo form_error('tempat_lahir') ? 'is-invalid':'' ?>"
                                type="text" name="tempat_lahir" placeholder="Tempat Lahir..."
                                value="<?php echo $pasien->tempat_lahir?>" required />
                            <div class="invalid-feedback">
                                <?php echo form_error('tempat_lahir') ?>
                            </div>
                        </div>
                        <div class="input-group col-md-6 mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Agama</span>
                            </div>
                            <form>
                                <select name="agama" class="custom-select" required>
                                    <option value="<?php echo $pasien->agama ?>" selected><?php echo $pasien->agama ?>
                                    </option>
                                    <option value="ISLAM">ISLAM</option>
                                    <option value="PROTESTAN">PROTESTAN</option>
                                    <option value="KATOLIK">KATOLIK</option>
                                    <option value="BUDDHA">BUDDHA</option>
                                    <option value="HINDU">HINDU</option>
                                    <option value="KHONGHUCU">KHONGHUCU</option>
                                </select>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="input-group col-md-6 mb-3 input-group-sm">
                            <div class="input-group-prepend input-group-sm">
                                <span class="input-group-text">jenis Kelamin</span>
                                <div class="input-group-text bg-transparent input-group-sm">
                                    <span class="input-group-text ml bg-transparent" style=" border: 0;">
                                        <input type="radio" name="jk_user" value="LAKI-LAKI"
                                            <?php if($pasien->jk_user=='LAKI-LAKI') echo'checked'?> required>
                                        &nbsp;
                                        Laki-Laki
                                    </span>
                                    <span class="input-group-text ml bg-transparent" style=" border: 0;">
                                        <input type="radio" name="jk_user" value="PEREMPUAN"
                                            <?php if($pasien->jk_user=='PEREMPUAN') echo'checked'?> required>&nbsp;
                                        Perempuan</span>
                                </div>
                            </div>
                        </div>
                        <div class="input-group col-md-6 mb-3 input-group-sm">
                            <div class="input-group-prepend">
                                <span class="input-group-text">No Telp</span>
                            </div>
                            <input class="form-control <?php echo form_error('no_telp') ? 'is-invalid':'' ?>"
                                type="text" name="no_telp" placeholder="No Telp...."
                                value="<?php echo $pasien->no_telp ?>" required />
                            <div class="invalid-feedback">
                                <?php echo form_error('no_telp') ?>
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="input-group col-md-6 mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">No KTP</span>
                            </div>
                            <input class="form-control <?php echo form_error('no_ktp') ? 'is-invalid':'' ?>" type="text"
                                name="no_ktp" placeholder="No KTP..." value="<?php echo $pasien->no_ktp ?>" required />
                            <div class="invalid-feedback">
                                <?php echo form_error('no_ktp') ?>
                            </div>
                        </div>
                        <div class="input-group col-md-6 mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Foto KTP</span>
                            </div>
                            <div class="custom-file">
                                <input class="custom-file-input" id="inputGroupFile01"
                                    <?php echo form_error('image') ? 'is-invalid':'' ?> type="file" name="image"/>
									<input type="hidden" name="old_image" value="<?php echo $pasien->image ?>"/>
                                <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                            </div>
                            <div class="invalid-feedback">
                                <?php echo form_error('image') ?>
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="input-group col-md-6 mb-3">
                        </div>
                        <div class="input-group col-md-4 mb-3">
                            <img src="<?php echo base_url('assets/images/pasien/'.$pasien->image) ?>" id="gambar_nodin"
                                width="300" alt="Preview Gambar" />
                        </div>

                    </div>
                    <div class="input-group  mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Alamat</span>
                        </div>
                        <textarea class="form-control <?php echo form_error('alamat') ? 'is-invalid':'' ?>"
                            name="alamat" placeholder="Alamat Lengkap..." required><?= $pasien->alamat?></textarea>
                        <div class="invalid-feedback">
                            <?php echo form_error('alamat') ?>
                        </div>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="submit" name="btn" class="btn btn-success btn-sm"><i class="fas fa-save"></i> Simpan Data</button>
                </form>
            </div>
        </div>
    </div>
</div>	
<?php $this->load->view("pasien/_partials/js.php") ?>
</body>
</html>

