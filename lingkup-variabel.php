<?php

// lingkup variabel / variable scope

// variabel lokal
// tidak bisa" digunakan didalam function
// hanya bisa digunakan dihalaman ini sendiri
echo "variabel lokal <br>";
echo "============= <br>";
$x = 10;
echo "variabel lokal : $x <br>";

echo "<br>";
echo "variabel lokal tidak bisa digunakan didlm function<br>";
echo "========================================== <br>";
echo "variabel lokal tidak dikenali/undefined <br>";
$x = 20;
function tampilx(){
    echo "memanggil variabel : " . $x . "<br>";
}
tampilx();
echo "variabel didalam function hanya berlaku didalam function itu sendiri <br>";

// variabel global
// menggunakan keyword global
// function dapat memanggil variabel diluar function
echo "<br>";
echo "variabel global<br>";
echo "========================================== <br>";
echo "function dapat memanggil variabel diluar function<br>";
echo "menggunakan keyword global<br>";
echo "menggunakan keyword global artinya mencari keluar function<br>";
$x = 30;
function tampil(){
    global $x;
    echo "memanggil variabel global : " . $x . "<br>";
}
tampil();


// variabel superglobal
// variabel yang dapat diakses dimanapun
// yang sudah dimiliki oleh php tinggal kita gunakan saja
// tipenya array associative
// $_GET        : menyimpan data request get
// $_POST       : menyimpan data request post
// $_REQUEST    : 
// $_SESSION    : 
// $_COOKIE     : 
// $_SERVER     : 
// $_ENV        : 

// Membahas $_SERVER
// tampilkan menggunakan var_dump
echo "<br>";
echo 'variabel $_SERVER <br>';
echo "========================================== <br>";
var_dump($_SERVER);
echo "<br>";

echo "<br>";
echo 'variabel $_SERVER cek hostnya <br>';
echo "========================================== <br>";
echo "server yang digunakan : " . $_SERVER["SERVER_NAME"];

?>