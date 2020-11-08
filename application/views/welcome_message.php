<!DOCTYPE html>
<html lang="en">
<?php $this->load->view("_partials/head.php") ?>

<body style="font-family: 'Roboto', sans-serif; background-color: #F5FFFA;">
    <!-- Image and text -->
    <div id="page-top"></div>
    <nav class="navbar navbar-dark bg-dark text-white">
        <a class="navbar-brand" href="<?php echo base_url('/') ?>">
            <img src="assets/images/logo/hospital-32.png" width="30" height="30" class="d-inline-block align-top"
                alt="">
            Rekam Medis
        </a>
        <ul class="navbar-nav mr-auto"></ul>
        <a href="<?= site_url('login') ?>" class="btn btn-danger text-white m-1 btn-sm"><i class="fas fa-sign-in-alt"></i> Login</a>
		<a href="<?= site_url('login/register') ?>" class="btn btn-danger text-white m-1 btn-sm"><i class="fas fa-user-plus"></i> Register</a>
    </nav>
    <!-- load carousel -->
    <?php $this->load->view("_partials/carousel.php") ?>

    <div class="jumbotron" style="margin: 5px; background-color:#F5F5F5;">
        <h1><b>Rumah Sakit Ibnu Sina</b></h1>
        <p>Rumah Sakit Ibnu Sina merupakan Rumah Sakit Umum milik swasta yang terletak di wilayah Bojonegoro. RSIS
            Bojonegoro memiliki visi terwujudnya Rumah Sakit Yang Terdepan, Bermutu, Manusiawi dan Menjangkau semua
            Lapisan Masyarakat serta misi Melaksanakan Pelayanan Kesehatan yang Prima dan Efektif serta membangun SDM
            yang Profesional dan Berintergritas tinggi dalam memberikan Pelayanan Kesehatan.</p>
        <div class="row mt-5">
            <div class="col-sm-4">
                <h3>Alamat</h3>
                <p>07, Jl. Lisman, Mlaten, Campurejo, Kec. Bojonegoro, Kabupaten Bojonegoro, Jawa Timur</p>
                <a href="tel:085880633630"><button type="button" class="btn btn-outline-info" data-toggle="tooltip"
                        title="085880633630">LIHAT NO. TELP
                    </button></a>
                <a href="mailto:triard78@gmail.com" target="_blank">
                    <button type="button" class="btn btn-outline-info" data-toggle="tooltip"
                        title="triard78@gmail.com">LIHAT EMAIL</button>
                </a>
                <a href="https://www.google.com/maps/dir/?api=1&destination=-7.15246660,111.90154520" target="_blank"
                    rel="noopener noreferrer">
                    <button type="button" class="btn btn-outline-info mt-1">PETUNJUK LOKASI</button>
                </a>
            </div>
            <div class="col-sm-8">
                <?php $this->load->view("_partials/map.php")  ?>
            </div>
        </div>

    </div>

    <footer class="bg-dark text-white p-3" style="font-size: 20px;">
        <div class="copyright text-center my-auto">
            <span>Copyright © <?php echo SITE_NAME ." ". Date('Y') ?></span>
        </div>
    </footer>



    <?php $this->load->view("_partials/scrolltop.php") ?>
    <?php $this->load->view("_partials/modal.php") ?>
    <?php $this->load->view("_partials/js.php") ?>
    <script>
    $(document).ready(function() {
        $('[data-toggle="tooltip"]').tooltip();
    });
    </script>
</body>

</html>
