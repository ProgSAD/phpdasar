<?php 
$mahasiswa = [
    ["Kang Imad", "203100079", "Sistem Informasi", "imadtamvan@gmail.com"],
    ["Kang Madud", "203100080", "Sistem Informasi", "madudtamvan@gmail.com"],
    ["Kang Deen", "203100081", "Sistem Informasi", "deentamvan@gmail.com"],

];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Daftar Mahasiswa</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>

    <?php foreach( $mahasiswa as $mhs) : ?>
        <ul>
            <li>Nama  : <?= $mhs[0]; ?></li>
            <li>NIM  : <?= $mhs[1]; ?></li>
            <li>Jurusan  :<?= $mhs[2]; ?></li>
            <li>Email  :<?= $mhs[3]; ?></li>
        </ul>
    <?php endforeach; ?>

</body>
</html>