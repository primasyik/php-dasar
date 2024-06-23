<?php

// Struktur Kendali : 
// Pengkondisian dan perulangan
// Pengkondisian, Jika Maka

$age = 25;

// if condition
echo "<br>";
echo "Fungsi if sederhana <br>";
echo "================== <br>"; 
// sama dengan 3 kali cek tipe data
echo "cek apakah usia anda 25 mengunakan === : <br>";
if($age === 25){
    echo "Usia anda 25th <br>";
}
// sama dengan 2 kali cek numeric
echo "cek apakah usia anda 25 mengunakan == : <br>";
if($age == '25'){
    echo "Usia anda 25th <br>";
}
// sama dengan 1 kali operator penugasan
echo '<br>';

// if condition - else
// jika maka
echo "Fungsi if else sederhana <br>";
echo "================== <br>"; 
echo "Jika usia lebih dari 25 maka sudah tua <br>";
echo "Jika usia kurang dari 25 maka masih muda <br>";
echo "Usia anda 25 <br>"; 
if($age > 25){
    echo "Anda sudah tua <br>";
}else{
    echo "Anda masih muda <br>";
}
echo '<br>';

// if condition1 and condition2
echo "Fungsi if AND sederhana <br>";
echo "================== <br>"; 
$gaji = 10_000_000;
echo "Gaji : " . number_format($gaji, 2, ',', '.') . "<br>";
echo "Usia : $age <br>" ;
if($age < 30 && $gaji > 5_000_000){
    echo "Anda masih muda dan kaya <br>";
}
echo '<br>';
// if condition1 or condition2
echo "Fungsi if OR sederhana <br>";
echo "================== <br>"; 
echo "Gaji : " . number_format($gaji, 2, ',', '.') . "<br>";
echo "Usia : $age <br>" ;
if($age < 30 || $gaji > 8_000_000){
    echo "Anda masih muda atau anda kaya <br>";
}
echo '<br>';

// if condition1 - elseif condition2 - else
echo "Fungsi if elseif sederhana <br>";
echo "================== <br>"; 
echo "Usia : $age <br>" ;
if($age < 22 ){
    echo "Muda <br>";
}elseif($age < 30){
    echo "Tidak Muda Tidak Tua <br>";
}elseif($age < 60){
    echo "Anda sudah tua tapi tidak terlalu tua <br>";
}else{
    echo "Tua <br>";
}

// if condition1 and condition2 - elseif condition1 and condition2 - else
echo "Fungsi if kondisi AND, elseif sederhana <br>";
echo "================== <br>"; 
echo "Gaji : " . number_format($gaji, 2, ',', '.') . "<br>";
echo "Usia : $age <br>" ;
if($age < 30 && $gaji >=8_000_000 ){
    echo "Anda Masih muda dan kaya <br>";
}elseif($age < 22 && $gaji < 5_000_000 ){
    echo "Anda Masih muda dan tidak kaya <br>";
}elseif($age > 60 && $gaji > 20_000_000 ){
    echo "Anda sudah tua dan kaya <br>";
}elseif($age < 60 && $gaji < 8_000_000 ){
    echo "Anda sudah tua dan tidak kaya <br>";
}


// ternary if
echo "<br>";
echo "Fungsi if Ternary 2 kondisi <br>";
echo "================== <br>"; 
$age = 20;
echo "Usia : $age <br>" ;
echo ($age > 30) ? "Anda sudah tua <br>" : "Anda Masih Muda<br>";
echo "<br>";

echo "Fungsi if ternary 3 kondisi <br>"; 
echo $age < 22 ? 'Muda' : ($age <= 30 ? 'Tidak muda tidak tua ' : 'Tua'); 
echo "<br>";


// switch case
echo "<br>";
echo "Fungsi if Switch <br>";
echo "================== <br>"; 
echo "Role fungsi switch <br>";
$role = "admin";
echo "Role $role <br>";

switch($role){
    case 'admin' : 
        echo 'Anda Admin <br>';
        break; // fungsi : menghentikan pengecekan jika terpenuhi
    case 'editor' : 
        echo 'Anda Admin <br>';
        break; // fungsi : menghentikan pengecekan jika terpenuhi
    default: // jika tidak ditemukan maka jalankan nilai default
        echo "Role tidak diketahui <br>";
}











echo '<br>';

// $x = 10;
// if($x < 20 ){
//     echo "Benar";
// }

// $x = 20;
// if($x > 20 ){
    //     echo "Benar";
    // }elseif($x == 20){
        //     echo"Bingo";
// }else{
//     echo "Salah";
// }


