<?php
$nama   ="Fadhel Sahila albab";
$nim    ="25/568222/SV/27396";
$prodi  ="TRPL";
$daerah ="Sleman";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Profil Saya</h1>
    <table>
        <tr>
            <th>Nama</th>
            <td><?= $nama?></td>
        </tr>
        <tr>
            <th>NIM</th>
            <td><?= $nim?></td>
        </tr>
        <tr>
            <th>Prodi</th>
            <td><?= $prodi?></td>
        </tr>
        <tr>
            <th>Daerah</th>
            <td><?= $daerah?></td>
        </tr>
    </table>
</body>
</html>
