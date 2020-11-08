<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->load->view("pasien/_partials/head.php") ?>
</head>

<body>
    <?php $this->load->view("pasien/_partials/navbar.php") ?>
    <header>
        <div class="jumbotron jumbotron-lg jumbotron-fluid bg-success position-relative mb-0 pb-5">
            <div class="container-fluid text-white h-100">
                <div class="d-lg-flex align-items-center justify-content-between text-center pl-lg-5">
                    <div class="col">
                        <?php if ($this->session->flashdata('message')): ?>
                        <div class="alert alert-success" role="alert">
                            <?php echo $this->session->flashdata('message'); ?>
                        </div>
                        <?php endif; ?>
                        <h4 class="display-4">KEPUASAN ANDA PRIORITAS KAMI</h4>
                        <h4 class="font-weight-light"><b><strong>Rumah Sakit Ibnu Sina Bojonegoro</strong></b></h4>
                        <h6>Hallo <?php echo $this->session->userdata('user_logged')->nama_user; ?>, Semoga kesehatan
                            anda terjaga</h6>
                        <?php if($this->session->userdata('user_logged')->status == "unverification"){ ?>
                        <h6 class="bg-danger">Akun anda perlu di verifikasi oleh admin, anda harus logout kemudian login
                            kembali untuk mengecek pembaruan status akun anda.</h6>
                        <?php }else { ?>
                        <h6 class="bg-danger">Akun Anda Telah Diverifikasi oleh admin</h6>
                        <?php } ?>
                    </div>
                    <div
                        class="col align-self-bottom align-items-right text-right h-max-380 position-relative z-index-1">
                        <img src="<?php echo base_url('assets/images/carousel/c-1.jpg') ?>" class="rounded img-fluid">
                    </div>
                </div>
            </div>
            <br><br><br><br><br>
        </div>
        <svg style="-webkit-transform:rotate(-180deg); -moz-transform:rotate(-180deg); -o-transform:rotate(-180deg); transform:rotate(-180deg); margin-top: -1px;"
            version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
            x="0px" y="0px" viewBox="0 0 1440 126" xml:space="preserve">
            <path class="bg-success"
                d="M685.6,38.8C418.7-11.1,170.2,9.9,0,30v96h1440V30C1252.7,52.2,1010,99.4,685.6,38.8z"></path>
        </svg>
    </header>
    <?php $this->load->view("pasien/_partials/js.php") ?>
</body>

</html>
