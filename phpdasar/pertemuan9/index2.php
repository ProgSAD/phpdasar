<?php 
// koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "phpdasar");

// ambil data dari tabel santri / query data santri
$result = mysqli_query($conn, "SELECT * FROM santri");

// ambil data (fetch) santri dari object result
// mysqli_fetch_row() // mengembalikan arayy numerik
// mysqli_fetch_assoc() // mengembalikan arayy assosiative
// mysqli_fetch_array() // mengembalikan dua di atas
// mysqli_fetch_object()

// while ( $san = mysqli_fetch_assoc($result) ) {
// var_dump($san) ;
// }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Halaman Admin</title>
</head>
<body>

    <h1>Daftar Santri</h1>

    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No.</th>
            <th>Aksi</th>
            <th>Gambar</th>
            <th>NIS</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Jurusan</th>
        </tr>
        
        <?php $i = 1; ?>
        <?php while ($row = mysqli_fetch_assoc($result)) : ?>
        <tr>
            <td><?= $i; ?></td>
            <td>
                <a href="">ubah</a>
                <a href="">hapus</a>
            </td>
            <td>
                <img src="img/<?= $row["gambar"]; ?>" width="50">
            </td>
            <td><?= $row["nis"]; ?></td>
            <td><?= $row["nama"]; ?></td>
            <td><?= $row["email"]; ?></td>
            <td><?= $row["jurusan"]; ?></td>
        </tr>
        <?php $i++; ?>
        <?php endwhile; ?>
    </table>
</body>
</html>