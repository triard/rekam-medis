<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->load->view("_partials/head.php") ?>
</head>

<body id="page-top">
    <nav class="navbar navbar-dark bg-dark text-white">
        <a class="navbar-brand" href="<?php echo base_url('/') ?>">
            <img src="../assets/images/logo/hospital-32.png" width="30" height="30" class="d-inline-block align-top"
                alt="">
            Rekam Medis
        </a>
        <ul class="navbar-nav mr-auto"></ul>
        <a href="<?= site_url('login') ?>" class="btn btn-danger text-white m-1 btn-sm"><i
                class="fas fa-sign-in-alt"></i> Login</a>
    </nav>
    <div class="container">
        <?php if ($this->session->flashdata('success')): ?>
        <div class="alert alert-success" role="alert">
            <?php echo $this->session->flashdata('success'); ?>
        </div>
        <?php endif; ?>

        <div class="card mb-4 mt-3">
            <div class="card-header">
                <center>
                    <h3>Pendaftaran Akun Pasien</h3>
                </center>
            </div>
            <div class="card-body">

                <form action="<?php echo site_url('login/register') ?>" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="bulan_buat" value="<?php $bln=date("m"); echo $bln; ?>" />
                    <input type="hidden" name="status" value="unverification" />
                    <input type="hidden" name="role" value="pasien" />
                    <input type="hidden" name="is_active" value="offline" />
                    <div class="form-row">
                        <div class="input-group col-md-7 mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Nama Lengkap</span>
                            </div>
                            <input class=" form-control <?php echo form_error('nama_user') ? 'is-invalid':'' ?>"
                                type="text" name="nama_user" placeholder="Nama Lengkap..." required />
                            <div class="invalid-feedback">
                                <?php echo form_error('nama_user') ?>
                            </div>
                        </div>
                        <div class="input-group col-md-5 mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Username</span>
                            </div>
                            <input class=" form-control <?php echo form_error('username') ? 'is-invalid':'' ?>"
                                type="text" name="username" placeholder="Username..." required />
                            <div class="invalid-feedback">
                                <?php echo form_error('username') ?>
                            </div>
                        </div>
                        <div class="input-group col-md-6 mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Email</span>
                            </div>
                            <input class="form-control <?php echo form_error('email') ? 'is-invalid':'' ?>" type="email"
                                name="email" placeholder="Email..." required />
                            <div class="invalid-feedback">
                                <?php echo form_error('email') ?>
                            </div>
                        </div>
                        <div class="input-group col-md-6 mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Password</span>
                            </div>
                            <input class="form-control <?php echo form_error('password') ? 'is-invalid':'' ?>"
                                type="password" name="password" placeholder="Password..." required minlength="5" />
                            <div class="invalid-feedback">
                                <?php echo form_error('password') ?>
                            </div>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="input-group col-md-4 mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Tanggal Lahir</span>
                            </div>
                            <input class="form-control <?php echo form_error('tgl_lahir') ? 'is-invalid':'' ?>"
                                type="date" name="tgl_lahir" placeholder="Tanggal Lahir..." required />
                            <div class="invalid-feedback">
                                <?php echo form_error('tgl_lahir') ?>
                            </div>
                        </div>
                        <div class="input-group col-md-5 mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Tempat Lahir</span>
                            </div>
                            <input class="form-control <?php echo form_error('tempat_lahir') ? 'is-invalid':'' ?>"
                                type="text" name="tempat_lahir" placeholder="Tempat Lahir..." required />
                            <div class="invalid-feedback">
                                <?php echo form_error('tempat_lahir') ?>
                            </div>
                        </div>
                        <div class="input-group col-md-3 mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Agama</span>
                            </div>
                            <form>
                                <select name="agama" class="custom-select" required>
                                    <option selected>Agama</option>
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
                        <div class="input-group col-md-4 mb-3 input-group-sm">
                            <div class="input-group-prepend input-group-sm">
                                <span class="input-group-text">jenis Kelamin</span>
                                <div class="input-group-text bg-transparent input-group-sm">
                                    <span class="input-group-text ml bg-transparent" style=" border: 0;">
                                        <input type="radio" name="jk_user" value="LAKI-LAKI" required>
                                        &nbsp;
                                        Laki-Laki
                                    </span>
                                    <span class="input-group-text ml bg-transparent" style=" border: 0;">
                                        <input type="radio" name="jk_user" value="PEREMPUAN" required>&nbsp;
                                        Perempuan</span>
                                </div>

                            </div>

                        </div>
                        <div class="input-group col-md-8 mb-3 input-group-sm">
                            <div class="input-group-prepend">
                                <span class="input-group-text">No Telp</span>
                            </div>
                            <input class="form-control <?php echo form_error('no_telp') ? 'is-invalid':'' ?>"
                                type="text" name="no_telp" placeholder="No Telp...." required />
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
                                name="no_ktp" placeholder="No KTP..." required />
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
                                    <?php echo form_error('image') ? 'is-invalid':'' ?> type="file" name="image"
                                    required />
                                <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                            </div>
                            <div class="invalid-feedback">
                                <?php echo form_error('image') ?>
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="input-group col-md-8 mb-3">
                        </div>
                        <div class="input-group col-md-4 mb-3">
			
                            <img src="" id="gambar_nodin" width="300"
								alt="Preview Gambar" />
								
                        </div>
                    </div>
                    <div class="input-group  mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Alamat</span>
                        </div>
                        <textarea class="form-control <?php echo form_error('alamat') ? 'is-invalid':'' ?>"
                            name="alamat" placeholder="Alamat Lengkap..." required></textarea>
                        <div class="invalid-feedback">
                            <?php echo form_error('alamat') ?>
                        </div>
                    </div>

                    <button class="btn btn-success" type="submit" name="btn"><i class="fas fa-user-plus"></i>
                        Register</button>
                </form>

            </div>

            <div class="card-footer small text-muted">
                * harus di isi
            </div>


        </div>
        <!-- /.container-fluid -->

        <!-- Sticky Footer -->


    </div>
    <!-- /.content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <footer class="bg-dark text-white p-3" style="font-size: 20px;">
        <div class="copyright text-center my-auto">
            <span>Copyright © <?php echo SITE_NAME ." ". Date('Y') ?></span>
        </div>
    </footer>
    <?php $this->load->view("_partials/scrolltop.php") ?>
    <?php $this->load->view("_partials/modal.php") ?>
    <?php $this->load->view("_partials/js.php") ?>
    <script>
    function bacaGambar(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function(e) {
                $('#gambar_nodin').attr('src', e.target.result);
            }

            reader.readAsDataURL(input.files[0]);
        }
    }
    $("#inputGroupFile01").change(function() {
        bacaGambar(this);
    });
    </script>
</body>

</html>
