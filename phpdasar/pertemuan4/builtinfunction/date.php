<?php 
// DATE
// Untuk menampilkan tanggal dengan format tertentu
    echo date("l, d M Y");

echo "<br><br>";

// TIME
// Unix Timestamp / EPOCH time
// Sejak yang sudah berlalu sejak 1 Januari 1970
    echo date("l, d M Y", time()-60*60*24*100);

echo "<br><br>";

// mktime
// membuat detik sendiri
// mktime(0,0,0,0,0,0)
// jam menit detik bulan tanggal tahun
    echo date("l", mktime(0,0,0,5,25,2001));

echo "<br><br>";

// strtotime
    echo date("l", strtotime("25 may 2001"));

?>