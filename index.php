<?php 


// php dasar pertama
// tag php, komentar, variabel, konstanta, concatenate, tanda petik
// komentar berguna sebagai informasi kode program

// perbedaan anatar file index.php dengan file php lainnya, misalnya siswa.php
// php akan otomatis mencari file index.php, sedangkan file lainnya harus dipanggil di url
// belajar echo, berguna untuk .....
// echo "Nama Saya ?";
// echo "<br>";
// echo "Nama kelas ?";
// echo "<br>";
// echo "Nama Hobbi ?";
// echo "<br>";
// echo "Nama Jenis Kelamin ?";
// echo "<br>";
// echo "Nama Alamat ?";


// belajar variabel
// variabel adalah tempat menyimpan data
// penulisannya diawali dengan $ dilanjutkan nama karakter
// variabel tidak boleh angka
// menggunakan alfa numerik
// tidak boleh kata yang sudah didefinisikan (identifier) oleh php, misalnya $echo, $function
// tidak boleh spasi
// tidak boleh ada 2 variabel dalam satu file
// case sensitif
// contoh penulisan

// $siswa1 = "Prima";
// echo "Nama saya $siswa1";
// echo "<br>";

// // kamu buat variabel, lalu tampilkan sesuai contoh diatas
// $kelas1 = "XI RPL";
// echo "Nama kelas $kelas1";
// echo "<br>";

// $hobbi1 = "Main Game"; 
// $hobbi2 = "Tidur"; 
// echo "Nama Hobbi $hobbi1, $hobbi2";
// echo "<br>";

// echo "Nama Jenis Kelamin ?";
// echo "<br>";

// echo "Nama Alamat ?";


// penggunaan petik satu dan petik dua
// 'SMK' dan "SMK"
// tanda petik dua menyimpan/mengelola variabel, artinya variabel bisa di proses
// jika tanda petik satu mengkonversi variabel menjadi string

// $sekolah = 'SMK CKTC';
// $alamat = "Jl. Kamal";

// echo "Sekolah : $sekolah";
// echo "<br>";
// echo 'Alamat $alamat';

// variabel concatenate
// penggabungan variabel menggunakan tanda titik "."
// penggabungan string
$nama = "Jack";
$usia = 18;
$jenis_kelamin = "L";
$tinggi = "170";
$nilai = 90;

echo "Nama : " . $nama . "<br>";
echo "Usia : " . $usia . "<br>";
echo "Jenis Kelamin : " . $jenis_kelamin . "<br>";
echo "Tinggi : " . $tinggi . "<br>";
echo "Nilai : " . $nilai . "<br>";
echo "<br>";

// gettype gunanya untuk menampilkan tipe data dari variabel
echo gettype($nama) . "<br>";
echo gettype($usia) . "<br>";
echo gettype($jenis_kelamin) . "<br>";
echo gettype($tinggi) . "<br>";
echo gettype($nilai) . "<br>";
echo "<br>";

// menampilkan seluruh informasi dari variabel
var_dump($nama, $usia, $jenis_kelamin, $tinggi, $usia);
echo "<br>";

// cek variabel apa tipe datanya
// bool = boolean yaitu salah satu tipe data 
// tipe data string menyimpan karakter '1e@#', tidak bisa dijumlah
// tipe data integer 1 bisa dijumlah
echo "<br>";
var_dump(is_string($nama));
echo "<br>";
var_dump(is_int($usia));
echo "<br>";
var_dump(is_int($jenis_kelamin));
echo "<br>";
var_dump(is_int($tinggi));
echo "<br>";
var_dump(is_int($nilai));
echo "<br>";

// cek apakah variabel sudah dibuat
// ! tanda seru artinya 'tidak'
// bool = boolean tipe data yang menghasilkan true atau false
echo "<br>";
echo 'belajar isset' . '<br>';
echo '==============' . '<br>';
var_dump(isset($nama));
echo "<br>";
var_dump(!isset($nama));
echo "<br>";
var_dump(isset($alamat));
echo "<br>";
var_dump(!isset($alamat));
echo "<br>";
echo "<br>";

// variabel konstan
define('PI', 3.14);
echo PI;
defined('PI'); // true

?>