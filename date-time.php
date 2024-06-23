<?php

// menampilkan hari sekarang
echo "menampilkan hari sekarang <br>";
echo "========================= <br>";
echo 'date("l") <br>';

echo "sekarang hari " . 
date("l");
echo "<br>";

// menampilkan tanggal sekarang
echo "<br>";
echo "menampilkan tanggal sekarang <br>";
echo "========================= <br>";
echo 'date("d") <br>';

echo "sekarang tanggal " . 
date("d");
echo "<br>";


// menampilkan bulan sekarang
echo "<br>";
echo "menampilkan bulan sekarang <br>";
echo "========================= <br>";
echo 'date("M") <br>';

echo "sekarang bulan " . 
date("M"); // M Jul, m kecil 07
echo "<br>";

// menampilkan hari, tanggal, bulan, tahun 
echo "<br>";
echo "menampilkan hari, tanggal, bulan, tahun sekarang <br>";
echo "========================= <br>";
echo 'date("l, d-m-y") <br>';

echo "sekarang hari, tanggal, bulan, tahun " . 
date("l, d-m-y"); 
echo "<br>";


// menampilkan waktu 
echo "<br>";
echo "menampilkan waktu <br>";
echo "========================= <br>";
echo 'time() <br>';
echo time();
echo "<br>";

// UNIX timestamp / EPOCH TIME
// detik yang sudah berlalu sejak 1 januari 1970


// menghitung hari dari hari sekarang
echo "<br>";
echo 'date("l", time()) <br>';
echo 'date("l", time()+1menit/detik*1jam/menit*1hari/jam*berapa-hari) <br>';
echo 'date("l", time()+60*60*24*2) <br>';
echo date("l", time()+60*60*24*1);
echo "<br>";

// mktime
// asalnya dari maketime
// waktu yang kita buat sendiri
// mktime(0,0,0,0,0,0)
// terdapat 6 parameter
// urutannya tidak boleh ketuker
// jam, menit, detik, bulan, tanggal, tahun

// menampilkan detik yang sudah berlalu sejak hari ulang tahun kita
echo "<br>";
echo "menampilkan detik yang sudah berlalu sejak hari ulang tahun kita <br>";
echo "========================= <br>";
echo mktime(0,0,0,24,2,1983);
echo "<br>";

// menampilkan hari ulang tahun kita
echo "<br>";
echo "menampilkan hari ulang tahun kita menggunakan mktime <br>";
echo "========================= <br>";
echo date("l", mktime(0,0,0,2,24,1983));
echo "<br>";


// strtotime
// menampilkan detik yang sudah berlalu menggunakan format tanggal string
echo "<br>";
echo "menggunakan strtotime <br>";
echo "========================= <br>";
echo date("l", strtotime("24 feb 1983"));
echo "<br>";


?>