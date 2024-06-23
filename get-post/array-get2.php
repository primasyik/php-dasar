<?php

// cek apakah tidak ada data di $_GET
if(!isset($_GET["nama"]) ||
    !isset($_GET["nis"]) ||
    !isset($_GET["email"]) ||
    !isset($_GET["jurusan"])
){
    // redirect, mengarahkan ke file yang dituju
    header("Location: array-get1.php");
    // mengakhiri program berikutnya
    exit;
} 


// menangkap data yang sudah dikirim dari file array-get1.php
// berupa data array yang dikirim menggunakan method REQUEST
// ditangkap dengan variabel $_GET
echo "Nama " . $_GET["nama"];
echo '<br>';
echo "Nis " . $_GET["nis"];
echo '<br>';
echo "Email " . $_GET["email"];
echo '<br>';
echo "Jurusan " . $_GET["jurusan"];
echo '<br>';

// mengantisipasi user masuk ke array-get2.php melalui url
// karena akan terjadi error, Undefined Array Key
// hal ini terjadi karena data belum ada/dibuat tapi akan ditampilkan
// buat kondisi jika data belum ada/ditentukan, maka arahkan kehalaman lain




?>