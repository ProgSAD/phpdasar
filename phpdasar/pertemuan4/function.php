<?php 
function salam($waktu = "datang", $nama = "Admin") {
    return "Selamat $waktu, $nama!";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Latihan Function</title>
</head>
<body>
    <h1><?= salam("malam", "Kang Resta"); ?></h1>
</body>
</html>