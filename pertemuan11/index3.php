<?php
$bulan_sekarang = date('F'); 
$tanggal_hari_ini = (int)date('j');
$total_hari_bulan = (int)date('t');
$sisa_hari = $total_hari_bulan - $tanggal_hari_ini;
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tugas 3</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <h2>Informasi Bulan Ini</h2>
    <div class="box">
        <p>Bulan Sekarang: <b><?= $bulan_sekarang; ?></b></p>
        <p>Sisa hari di bulan ini: <b><?= $sisa_hari; ?> hari</b> lagi.</p>
    </div>

</body>
</html>