<?php 
// ARRAY
// sebuah variabel yang dapat memiliki banyak nilai
// elemen pada array boleh beda tipe data
// pasangan antara key dan value
// key = index yg dimulai dari 0

// membuat array
// cara lama
$hari = array("Senin", "Selasa", "Rabu");
// cara baru
$bulan = ["Januari", "Februari", "Maret"];
$arr1 = [1, "teks", false];

// // Menampilkan array
// // var_dump() / print_r()
// var_dump($hari);
// echo "<br>";
// print_r($bulan);
// echo "<br>";
// // menampilkan satu elemen
// echo $arr1 [0];
// echo "<br>";
// echo $bulan [1];
// echo "<br>";
// echo $hari [2];

// Menambahkan elemen baru pada array
var_dump($hari);
$hari[] = "Kamis";
echo "<br>";
var_dump($hari);


?>