<?php

// variabel superglobal $_GET
// bersifat array associative
// sudah disediakan oleh php
// bisa digunakan di file manapun

// cek variabel $_GET 
echo 'cek variabel $_GET <br>';
echo '===================== <br>';

Var_dump($_GET);

// mengisi data ke variabel $_GET secara langsung
echo '<br>';
echo 'mengisi data ke $_GET secara langsung<br>';
echo '===================== <br>';
// $_GET['nama'] = "Jack";
// $_GET['email'] = "jack@mail.com";
// Var_dump($_GET);
echo '<br>';

// mengisi data ke variabel $_GET lewat url
// berisi nilai yang ditulis ke dalam query string
// Query string, karakter tambahan di belakang URL atau di belakang penulisan alamat dari situs
// gunakan tanda tanya untuk mengirim data lewat url
// diikuti nama key dan diisi value
// penulisannya = url : get.php?nama=jack 
echo '<br>';
echo 'mengisi data ke $_GET lewat url<br>';
echo '=========================== <br>';
echo "penulisan url : get.php?nama=jack <br>";
echo "penulisan url dua data menggunakan & : get.php?nama=jack& <br>";
Var_dump($_GET);
echo '<br>';






?>