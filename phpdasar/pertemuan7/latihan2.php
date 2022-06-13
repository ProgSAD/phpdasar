<?php
// cek apakah tidak ada data di $_GET
if (
    !isset($_GET["nama"]) ||
    !isset($_GET["nama"]) ||
    !isset($_GET["nama"]) ||
    !isset($_GET["nama"]) ||
    !isset($_GET["nama"]) ) {
    // redirect
    header("Location: latihan1.php");
    exit;
}

?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <title>DETAIL MAHASISWA</title>
</head>
<body>
    <ul>
        <li>
            <img src="img/<?= $_GET["gambar"]; ?>">
        </li>
        <li><?= $_GET["nama"]; ?></li>
        <li><?= $_GET["nim"]; ?></li>
        <li><?= $_GET["jurusan"]; ?></li>
        <li><?= $_GET["email"]; ?></li>
    </ul>

    <p>
        <a href="latihan1.php">Kembali ke DARTAR SANTRI</a>
    </p>
</body>
</html>