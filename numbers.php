<?php

// php dasar kedua
// topiknya numbers, operator aritmatika, operator penugasan, increment decrement, number checking function, konversi, fungsi numbers, format 
// deklarasi numbers
$nilai1 = 4;
$nilai2 = 2;
$nilai3 = 5.4; // decimal

// Operator Aritmatika
// pengertian operator aritmatika digunakan untuk perhitungan
// php 7 error karena tidak bisa digabungkan dengan string
echo "Operator Aritmatika" . '<br>';
echo "==================== <br>";
echo "Nilai 1 = $nilai1" . '<br>';
echo "Nilai 2 = $nilai2" . '<br>';
echo "Nilai 1 + Nilai 2 = " ;
echo $nilai1 + $nilai2 . '<br>';
echo "Nilai 1 - Nilai 2 = " ;
echo $nilai1 - $nilai2 . '<br>';
echo "Nilai 1 * Nilai 2 = " ;
echo $nilai1 * $nilai2 . '<br>';
echo "Nilai 1 / Nilai 2 = " ;
echo $nilai1 / $nilai2 . '<br>';
echo "Nilai 1 % Nilai 2 = " ;
echo $nilai1 % $nilai2 . '<br>';
echo '<br>';

// operator assignment / operator penugasan
// menggunakan karakter "="
// digunakan untuk memberi value/nilai suatu variabel
// dapat digunakan untuk operasi aritmatika
// $tas = "remote"; 
// echo "$tas" ;
// $tas = "Kunci"; 
// $tasnofal = $tas;

// gelas1 isi kopi
$gelas1 = "Kopi";
$gelas2 = "Susu";
// bagaimana supaya bisa switch/ubah gelas1 jadi Susu gelas 2 jadi kopi
// gelas baru
$gelasBaru;
echo "Gelas 1 : $gelas1 <br>"; // kopi 
echo "Gelas 2 : $gelas2 <br>"; // susu
// gelas1 tuang ke gelasbaru
$gelasBaru = $gelas1;
// gelas2 tuang ke gelas 1
$gelas1 = $gelas2;
// gelasbaru tuang ke gelas2
$gelas2 = $gelasBaru; 
echo "ubah menjadi <br>" ;
echo "Gelas 1 : $gelas1 <br>"; // susu
echo "Gelas 2 : $gelas2 <br>"; // kopi
echo "<br>";

// gelas2 isi susu











// contoh kasus
// gelas a isinya susu
// gelas b isinya kopi
// pindahkan isi gelas a jadi kopi
// pindahkan isi gelas b jadi susu
// pinjem gelas kosong baru c







echo "Operator Penugasan <br>";
echo "================== <br>";
$a = "susu";
$b = "kopi";
$c;
echo "gelas A = $a <br>";
echo "gelas B = $b <br>";
$c = $a;
$a = $b;
$b = $c;
echo "ubah menjadi <br>";
echo "Gelas A = $a <br>" ;
echo "Gelas B = $b <br>" ;
echo '<br>';



// increment
// penambahan satu
echo "Increment <br>";
echo "================== <br>"; 
$j = 4;
echo "Variabel j : " ; 
echo $j . '<br>';
echo "Nilai penambahan " . '$j++' . "<br>"; 
echo $j++ . '<br>';
echo "Nilai terbaru hasil penambahan " . '$j++' . "<br>"; 
echo $j . '<br>';
echo ++$j . '<br>';
echo '<br>';

// decrement
// pengurangan satu
echo "Decrement <br>";
echo "================== <br>"; 
$j = 4;
echo $j-- . '<br>';
echo $j . '<br>';
echo --$j . '<br>';


// number checking functions
// check tipe data variabel
echo "<br>";
echo "Cek Tipe Data variabel <br>";
echo "================== <br>"; 
echo "Cek Tipe Data is_integer, is_numeric, is_float <br>";
echo '<br>';
echo 'cek is_integer is_integer(5) : ';
var_dump(is_integer(5));
echo '<br>';
echo 'cek is_numeric is_numeric(9000) : ';
var_dump(is_numeric(9000));
echo '<br>';
echo 'cek is_float is_float(1.2) : ';
var_dump(is_float(1.2));
echo '<br>';

// konversi variabel
// merubah tipe data
echo "<br>";
echo "Cek Tipe Data variabel <br>";
echo "================== <br>"; 
echo "konversi tipe data dari float ke integer <br>";
echo '<br>';
$angka = '12.34';
$konv_angka1 = (float)$angka;
echo 'angka float 12.34 (float)$angka : ' . $konv_angka1 . '<br>';
$konv_angka2 = (int)$angka;
echo 'angka integer 12.34 (int)$angka : ' . $konv_angka2 . '<br>';
echo '<br>';

// fungsi numbers
echo "<br>";
echo "Fungsi numbers <br>";
echo "================== <br>"; 
echo '<br>';
echo "abs(-15) " . abs(-15) . '<br>'; // membuat nilai positif
echo "pow(2,3) " . pow(2,3) . '<br>'; // 
echo "sqrt(16) " . sqrt(16) . '<br>'; // 
echo "max(2,3) " . max(2,3) . '<br>'; // nilai maksimal
echo "min(2,3) " . min(2,3) . '<br>'; // nilai minimal
echo "round(2.4) " . round(2.4) . '<br>'; // pembulatan
echo "round(2.8) " . round(2.8) . '<br>'; // pembulatan
echo "floor(2.6) " . floor(2.6) . '<br>'; // 
echo "ceil(2.4) " . ceil(2.4) . '<br>'; // 

// format number
echo "<br>";
echo "Format Number <br>";
echo "================== <br>"; 
echo '<br>';
$number = 123456789.12345;
echo "number_format() " . number_format($number, 2, '.', ',') . '<br>';
echo "number_format() " . number_format($number, 4, ',', '.') . '<br>';

?>