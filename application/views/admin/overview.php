<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->load->view("_partials/head.php") ?>
</head>

<body id="page-top">

    <?php $this->load->view("_partials/navbar.php") ?>

    <div id="wrapper">

        <?php $this->load->view("_partials/sidebar.php") ?>

        <div id="content-wrapper">

            <div class="container-fluid">

                <?php if ($this->session->flashdata('message')): ?>
                <div class="alert alert-success" role="alert">
                    <?php echo $this->session->flashdata('message'); ?>
                </div>
                <?php endif; ?>

                <!-- Icon Cards-->
                <div class="row">
                    <div class="col-xl-3 col-sm-6 mb-3">
                        <div class="card text-white bg-primary o-hidden h-100">
                            <div class="card-body">
                                <div class="card-body-icon">
                                    <i class="fas fa-procedures"></i>
                                </div>
                                <div class="mr-5">
                                    <h5><?php echo $pasien ?> Pasien</h5>
                                </div>
                            </div>
                            <a class="card-footer text-white clearfix small z-1"
                                href="<?php echo site_url('admin/pasien/list') ?>">
                                <span class="float-left">View Details</span>
                                <span class="float-right">
                                    <i class="fas fa-angle-right"></i>
                                </span>
                            </a>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 mb-3">
                        <div class="card text-white bg-danger o-hidden h-100">
                            <div class="card-body">
                                <div class="card-body-icon">
                                    <i class="far fa-arrow-alt-circle-right"></i>
                                </div>
                                <div class="mr-5">
                                    <h5><?php echo $masuk ?> Pasien Masuk</h5>
                                </div>
                            </div>
                            <a class="card-footer text-white clearfix small z-1"
                                href="<?php echo  base_url('admin/pasien_masuk/list')?>">
                                <span class="float-left">View Details</span>
                                <span class="float-right">
                                    <i class="fas fa-angle-right"></i>
                                </span>
                            </a>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 mb-3">
                        <div class="card text-white bg-success o-hidden h-100">
                            <div class="card-body">
                                <div class="card-body-icon">
                                    <i class="far fa-arrow-alt-circle-left"></i>
                                </div>
                                <div class="mr-5">
                                    <h5><?php echo $keluar ?> Pasien Keluar</h5>
                                </div>
                            </div>
                            <a class="card-footer text-white clearfix small z-1"
                                href="<?php echo  base_url('admin/pasien_keluar/list')?>">
                                <span class="float-left">View Details</span>
                                <span class="float-right">
                                    <i class="fas fa-angle-right"></i>
                                </span>
                            </a>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 mb-3">
                        <div class="card text-white bg-secondary o-hidden h-100">
                            <div class="card-body">
                                <div class="card-body-icon">
                                    <i class="fas fa-diagnoses"></i>
                                </div>
                                <div class="mr-5">
                                    <h5><?php echo $diagnosa ?> Diagnosa</h5>
                                </div>
                            </div>
                            <a class="card-footer text-white clearfix small z-1"
                                href="<?php echo  base_url('admin/diagnosa/list')?>">
                                <span class="float-left">View Details</span>
                                <span class="float-right">
                                    <i class="fas fa-angle-right"></i>
                                </span>
                            </a>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 mb-3">
                        <div class="card text-white bg-warning o-hidden h-100">
                            <div class="card-body">
                                <div class="card-body-icon">
                                    <i class="fas fa-bed"></i>
                                </div>
                                <div class="mr-5">
                                    <h5><?php echo $ruangan ?> Ruangan</h5>
                                </div>
                            </div>
                            <a class="card-footer text-white clearfix small z-1"
                                href="<?php echo  base_url('admin/ruangan/list')?>">
                                <span class="float-left">View Details</span>
                                <span class="float-right">
                                    <i class="fas fa-angle-right"></i>
                                </span>
                            </a>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 mb-3">
                        <div class="card text-white bg-info o-hidden h-100">
                            <div class="card-body">
                                <div class="card-body-icon">
                                    <i class="fas fa-fw fa-users"></i>
                                </div>
                                <div class="mr-5">
                                    <h5><?php echo $user ?> User</h5>
                                </div>
                            </div>
                            <a class="card-footer text-white clearfix small z-1"
                                href="<?php echo  base_url('admin/user/list')?>">
                                <span class="float-left">View Details</span>
                                <span class="float-right">
                                    <i class="fas fa-angle-right"></i>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="float-right m-2">
                    <div class="table-responsive">
                        <table class="tabletable table-bordered table-sm table-hover" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Level</th>
                                    <th>Jumlah Bed</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($hitung as $r): ?>
                                <tr>
                                    <td width=100><?php echo $r->level ?></td>
                                    <td width="50"><?php echo $r->jumlah_bed?></td>
                                </tr>
                                <?php endforeach; ?>

                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="card mb-0">
                    <div class="card-header">
                        <i class="fas fa-chart-pie"></i>
                        Jenis Kelamin Pasien
                    </div>
                    <div class="card-body">
                        <?php if(!empty($data_kl)){  ?>
                        <?php foreach ($data_kl as $r){ ?>
                        <?php 
						$t[] = $r->jk;
            			$j[] = (float) $r->jml_jk;	
						?>
                        <canvas id="datapasienkl" width="100%" height="30"></canvas>
                        <?php } 
						}else{?>
                        <div class="float-right"><canvas id="bb" width="440" height="280"></canvas></div>
                        <?php } ?>

                    </div>
                </div>
				<div class="card-group m-3">
                    <div class="card">
                        <div class="card-header">
                            <div class="float-left"> <i class="fas fa-chart-line"></i>Pasien Masuk</div>
                        </div>
                        <div class="card-body text-center mt-5">
						<?php if(!empty($coba)){  ?>
                        <?php foreach ($coba as $r){ ?>
                        <?php 
						$tgl[] = $r->tanggal;
            			$jml[] = (float) $r->jumlah;	
						?>
                        <div class=""><canvas id="myAreaChart1" width="400" height="100"></canvas></div>
                        <?php } 
						}else{?>
                        <div class=""><canvas id="bb" width="400" height="100"></canvas></div>
                        <?php } ?>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <div class=""> <i class="fas fa-chart-line"></i>Pasien Keluar</div>
                        </div>
                        <div class="card-body text-center mt-5">
                        <?php if(!empty($out)){  ?>
                        <?php foreach ($out as $r){ ?>
                        <?php 
						$m[] = $r->tanggal;
            			$s[] = (float) $r->jumlah;	
						?>
                        <div class=""><canvas id="myAreaChart2" width="400" height="100"></canvas></div>
                        <?php }
						}else{ ?>
                        <div class=""><canvas id="aa" width="400" height="100"></canvas></div>
                        <?php } ?>
                        </div>
                    </div>
                </div>
                <div class="card-group m-3">
                    <div class="card">
                        <div class="card-header">
                            <div class="float-left"> <i class="fas fa-chart-pie"></i>Kondisi Keluar</div>
                        </div>
                        <div class="card-body text-center">
                            <?php if(!empty($kondisi_keluar)){  ?>
                            <?php foreach ($kondisi_keluar as $r){ ?>
                            <?php 
						$kl[] = $r->kk;
            			$jml_kl[] = (float) $r->jml_kkeluar;	
						?>
                            <canvas id="getDataKK" width="100%" height="30"></canvas>
                            <?php } 
						}else{?>
                            <div class="float-left"><canvas id="bb" width="100%" height="30"></canvas></div>
                            <?php } ?>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <div class="float-left"> <i class="fas fa-chart-pie"></i>Status Pulang</div>
                        </div>
                        <div class="card-body text-center">
                            <?php if(!empty($status_pulang)){  ?>
                            <?php foreach ($status_pulang as $r){ ?>
                            <?php 
						$sp[] = $r->sp;
            			$jml_sp[] = (float) $r->jml_sp;	
						?>
                            <canvas id="statuspulang" width="100%" height="30"></canvas>
                            <?php } 
						}else{?>
                            <div class="float-left"><canvas id="bb" width="100%" height="280"></canvas></div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>

            <!-- /.container-fluid -->

            <!-- Sticky Footer -->
            <?php $this->load->view("_partials/footer.php") ?>

        </div>
        <!-- /.content-wrapper -->

    </div>
    <!-- /#wrapper -->


    <?php $this->load->view("_partials/scrolltop.php") ?>
    <?php $this->load->view("_partials/modal.php") ?>
    <?php $this->load->view("_partials/js.php") ?>
    <script>
    Chart.defaults.global.defaultFontFamily =
        '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
    Chart.defaults.global.defaultFontColor = '#292b2c';

    // Pie Chart Example
    var ctx = document.getElementById("datapasienkl");
    var myPieChart = new Chart(ctx, {
        type: 'pie',
        data: {
            labels: <?php echo json_encode($t);?>,
            datasets: [{
                data: <?php echo json_encode($j);?>,
                backgroundColor: ['#007bff', '#dc3545'],
            }],
        },
    });
    </script>
    <script>
    // Set new default font family and font color to mimic Bootstrap's default styling
    Chart.defaults.global.defaultFontFamily =
        '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
    Chart.defaults.global.defaultFontColor = '#292b2c';

    // Area Chart Example
    var ctx = document.getElementById("myAreaChart1");
    var myLineChart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: <?php echo json_encode($tgl);?>,
            datasets: [{
                label: "Pasien",
                lineTension: 0.3,
                backgroundColor: "rgba(2,117,216,0.2)",
                borderColor: "rgba(2,117,216,1)",
                pointRadius: 5,
                pointBackgroundColor: "rgba(2,117,216,1)",
                pointBorderColor: "rgba(255,255,255,0.8)",
                pointHoverRadius: 5,
                pointHoverBackgroundColor: "rgba(2,117,216,1)",
                pointHitRadius: 50,
                pointBorderWidth: 2,
                data: <?php echo json_encode($jml);?>,
            }],
        },
        options: {
            scales: {
                xAxes: [{
                    time: {
                        unit: 'date'
                    },
                    gridLines: {
                        display: false
                    },
                    ticks: {
                        maxTicksLimit: 7
                    }
                }],
                yAxes: [{
                    ticks: {
                        min: 0,
                        max: 40,
                        maxTicksLimit: 5
                    },
                    gridLines: {
                        color: "rgba(0, 0, 0, .125)",
                    }
                }],
            },
            legend: {
                display: false
            }
        }
    });
    </script>
    <script>
    // Set new default font family and font color to mimic Bootstrap's default styling
    Chart.defaults.global.defaultFontFamily =
        '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
    Chart.defaults.global.defaultFontColor = '#292b2c';

    // Area Chart Example
    var ctx = document.getElementById("myAreaChart2");
    var myLineChart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: <?php echo json_encode($m);?>,
            datasets: [{
                label: "Pasien",
                lineTension: 0.3,
                backgroundColor: "rgba(2,117,216,0.2)",
                borderColor: "rgba(2,117,216,1)",
                pointRadius: 5,
                pointBackgroundColor: "rgba(2,117,216,1)",
                pointBorderColor: "rgba(255,255,255,0.8)",
                pointHoverRadius: 5,
                pointHoverBackgroundColor: "rgba(2,117,216,1)",
                pointHitRadius: 50,
                pointBorderWidth: 2,
                data: <?php echo json_encode($s);?>,
            }],
        },
        options: {
            scales: {
                xAxes: [{
                    time: {
                        unit: 'date'
                    },
                    gridLines: {
                        display: false
                    },
                    ticks: {
                        maxTicksLimit: 7
                    }
                }],
                yAxes: [{
                    ticks: {
                        min: 0,
                        max: 40,
                        maxTicksLimit: 5
                    },
                    gridLines: {
                        color: "rgba(0, 0, 0, .125)",
                    }
                }],
            },
            legend: {
                display: false
            }
        }
    });
    </script>
    <script>
    Chart.defaults.global.defaultFontFamily =
        '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
    Chart.defaults.global.defaultFontColor = '#292b2c';

    // Pie Chart Example
    var ctx = document.getElementById("getDataKK");
    var myPieChart = new Chart(ctx, {
        type: 'pie',
        data: {
            labels: <?php echo json_encode($kl);?>,
            datasets: [{
                data: <?php echo json_encode($jml_kl);?>,
                backgroundColor: ['#008000', '#FFFF00', '#dc3545'],
            }],
        },
    });
    </script>
    <script>
    Chart.defaults.global.defaultFontFamily =
        '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
    Chart.defaults.global.defaultFontColor = '#292b2c';

    // Pie Chart Example
    var ctx = document.getElementById("statuspulang");
    var myPieChart = new Chart(ctx, {
        type: 'pie',
        data: {
            labels: <?php echo json_encode($sp);?>,
            datasets: [{
                data: <?php echo json_encode($jml_sp);?>,
                backgroundColor: ['#008000', '#dc3545'],
            }],
        },
    });
    </script>
</body>

</html>
