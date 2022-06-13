<?php
// SUPERGLOBALS
// variabel global milik PHP
// merupakan Array Assosiative
// $_GET, $_POST, $_REQUEST. $_SESSION, $_COOKIE, $_SERVER, $_ENV

// // $_GET
// $_GET ["nama"] = "Kang Imad";
// $_GET ["nim"] = 203100079;
// var_dump($_GET);

$santri = [
    [
        "nama" => "Kang Imad",
        "NIM" => 203100079,
        "Jurusan" => "Sistem Informasi",
        "Email" => "imadtamvan@gmail.com",
        "Gambar" => "Kang Imad.png"
    ],
    [
        "nama" => "Kang Madud",
        "NIM" => 203100080,
        "Jurusan" => "Sistem Informasi",
        "Email" => "madudtamvan@gmail.com",
        "Gambar" => "Kang Madud.png"
    ],
    [
        "NIM" => 203100081,
        "nama" => "Kang Deen",
        "Jurusan" => "Sistem Informasi",
        "Email" => "deentamvan@gmail.com",
        "Gambar" => "Kang Deen.png"
    ]
];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>GET</title>
</head>

<body>
    <h1>DAFTAR SANTRI</h1>
    <ul>
        <?php foreach ($santri as $san) : ?>
            <li>
                <a href="latihan2.php?nama=<?= $san["nama"]; ?>&jurusan=<?= $san["Jurusan"]; ?>&nim=<?= $san["Jurusan"]; ?>&email=<?= $san["Email"]; ?>&gambar=<?= $san["Gambar"]; ?>">
                    <?= $san["nama"]; ?>
                </a>
            </li>
        <?php endforeach; ?>
    </ul>
</body>

</html>