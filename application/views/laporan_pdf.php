<html>

<head>
    <meta name="viewport" content="width=device-width,initial-scale=1.0" />
    <style type="text/css">
    body {
        font-family: "Lucida Sans Unicode", "Lucida Grande", "Segoe Ui";
    }

    /* Table */
    table {
        margin: auto;
        font-family: "Lucida Sans Unicode", "Lucida Grande", "Segoe Ui";
        font-size: 12px;

    }

    .demo-table {
        border-collapse: collapse;
        font-size: 12px;
    }

    .demo-table th,
    .demo-table td {
        border-bottom: 1px solid #e1edff;
        border-left: 1px solid #e1edff;
        padding: 5px 10px;
    }

    .demo-table th,
    .demo-table td:last-child {
        border-right: 1px solid #e1edff;
    }

    .demo-table td:first-child {
        border-top: 1px solid #e1edff;
    }

    .demo-table td:last-child {
        border-bottom: 0;
    }

    caption {
        caption-side: top;
        margin-bottom: 10px;
    }

    /* Table Header */
    .demo-table thead th {
        background-color: #508abb;
        color: #FFFFFF;
        border-color: #6ea1cc !important;
        text-transform: uppercase;
    }

    /* Table Body */



    </style>
</head>

<body>
<?php if($pacient!= null){ ?>
	<center><h2>Data Pasien Rumah Sakit Ibnu Sina</h2></center>
    <table class="demo-table responsive">
        <thead>
            <tr>
                <th>Nama Pasien</th>
				<th>Nomor KTP</th>
				<th>Tanggal Lahir</th>
				<th>Usia</th>
				<th>Jenis Kelamin</th>
				<th>Alamat</th>
				<th>No Telp.</th>
				<th>Agama</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($pacient as $pacient): ?>
            <tr>
                <td>
                    <?php echo $pacient->nama_pasien ?>
                </td>
                <td>
                    <?php echo $pacient->no_KTP ?>
                </td>
				<td><?php $d = new DateTime($pacient->tgl_lahir_pasien);
					echo $d->format("d/m/Y");?>
				</td>
	            <td>
                    <?php
						$birthday = $pacient->tgl_lahir_pasien;
						$biday = new DateTime($birthday);
						$today = new DateTime();
						$diff = $today->diff($biday);
						echo  $diff->y ." Tahun"
					?>
                </td>
                <td>
                    <?php echo $pacient->jenis_kelamin ?>
                </td>
                <td>
                    <?php echo $pacient->alamat_pasien ?>
				</td>
				<td>
                    <?php echo $pacient->no_telp_pasien ?>
				</td>
				<td>
                    <?php echo $pacient->agama_pasien ?>
				</td>
            </tr>
			<?php endforeach; ?>
			<?php }else{ ?>
                <p>Maaf data yang anda cari tidak ada</p>
                <?php } ?>
    </table>
</body>

</html>
