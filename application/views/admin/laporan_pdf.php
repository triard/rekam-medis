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
<?php if($all!= null){ ?>	
    <center>
        <h2>Data Riwayat Pasien Rumah Sakit Ibnu Sina</h2>
    </center>
    <table class="demo-table responsive">
	<thead>
            <tr>
                <th>Nama</th>
                <th>KTP</th>
                <th>Tanggal Lahir</th>
                <th>nomor rekam medis</th>
                <th>nomor (ruangan)(kelas)</th>
                <th>tanggal masuk</th>
                <th>tanggal keluar</th>
                <th>keterangan pasien</th>
                <th>penyakit</th>
                <th>tindakan</th>
                <th>obat</th>
                <th>kondisi keluar</th>
                <th>status pulang</th>

            </tr>
        </thead>
        <tbody>
            <?php foreach ($all as $r): ?>
            <tr>
                <td><?php echo $r->nama_pasien ?></td>
                <td><?php echo $r->no_KTP ?></td>
                <td><?php echo $r->tgl_lahir_pasien?>
                </td>
				<td><?php echo $r->nomor_rekam_medis?></td>
				<td><?php echo $r->nomor_ruangan?>
				(<?php echo $r->nama_ruangan?>)(<?php echo $r->nama ?>)</td>
                <td>
                 <?php $d = new DateTime($r->tanggal_masuk);
                echo $d->format("d/m/Y");?>
                </td>
                <td>
                    <?php $d = new DateTime($r->tanggal_keluar);
                    echo $d->format("d/m/Y");?>
                </td>
                <td><?php echo $r->keterangan_pasien?></td>
                <td><?php echo $r->nama_penyakit?></td>
                <td><?php echo $r->tindakan?></td>
                <td><?php echo $r->nama_obat?></td>
                <td><?php echo $r->kondisi_keluar?></td>
                <td><?php echo $r->status_pulang?></td>
            </tr>
			<?php endforeach; ?>
			<?php }else{ ?>
				<p>Maaf data yang anda cari tidak ada</p>
			<?php } ?>
    </table>
</body>

</html>
