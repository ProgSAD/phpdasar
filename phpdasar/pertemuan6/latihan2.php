<!-- <?php
        $mahasiswa = [
            ["Kang Imad", "203100079", "Sistem Informasi", "imadtamvan@gmail.com"],
            ["203100080", "Kang Madud", "Sistem Informasi", "madudtamvan@gmail.com"],
            ["Kang Deen", "203100081", "Sistem Informasi", "deentamvan@gmail.com"]
        ];
        ?> -->

<!-- ARRAY ASSOSIATIVE
definisinya sama seperti array numerik, kecuali key-nya adalah string yang kita buat sendiri -->
<?php
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
<head>
    <title>Daftar Santri</title>
    <style>
        .kotak {
            padding: 50px;
            width: 300px;
            height: 300px;
            text-align: center;
            /* line-height: 300px; */
            background-color: green;
            transition: 1s;
            float: left;
            margin: 3px;
        }

        .kotak:hover {
            transform: rotate(360deg);
            border-radius: 50%;
        }

        .clear {
            clear: both;
        }
        ul{
            list-style-type: none;
        }
    </style>
</head>

<body>

    <h1>Daftar Santri</h1>

    <?php foreach ($santri as $san) : ?>
        <div class="kotak">
        <ul>
            <li><img src="img/<?= $san["Gambar"];?>"></li>
            <li>Nama<?= "\t:\t", $san["nama"]; ?></li>
            <li>NIM<?= "\t:\t", $san["NIM"]; ?></li>
            <li>Jurusan<?= "\t:\t", $san["Jurusan"]; ?></li>
            <li>Email<?= "\t:\t", $san["Email"]; ?></li>
        </ul>
        </div>
    <?php endforeach; ?>


</body>

</html>