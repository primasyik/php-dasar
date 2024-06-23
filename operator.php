<?php
// 5 Operator String
// =======================
echo "Operator String";
echo "<br>";
echo "============================"; 
echo "<br>";

$hasil = "Belajar"."PHP";
echo $hasil;  // BelajarPHP   
echo "<br>";
$a = "SMK";
$b = " Cinta";
$c = " Kasih";
$d = " Tzu Chi";
$hasil = $a.$b.$c.$d;
echo $hasil;  
echo "<br>";
$hasil = 10 . " Jari tangan";
echo $hasil;  // 10 Jari tangan
echo "<br>";
$hasil = true . " adalah data boolean";
echo $hasil;  // 1 adalah data boolean
echo "<br>";
echo "<br>";


// 4 Operator Logika
// =======================
echo "Operator Logika";
echo "<br>";
echo "============================"; 
echo "<br>";

$hasil = (true and false);
var_dump($hasil); echo "<br/>";    // bool(false)
$hasil = (true or false);
var_dump($hasil); echo "<br/>";    // bool(true)
$hasil = (true xor false);
var_dump($hasil); echo "<br/>";    // bool(true)
$hasil = false;
var_dump(!$hasil); echo "<br/>";   // bool(true)
$hasil = (false or true && false);
var_dump($hasil); echo "<br/>";    // bool(false)
$hasil = ('smk cktc' and true);
var_dump($hasil); echo "<br/>";    // bool(true)
$hasil = ('000' or false);
var_dump($hasil);                  // bool(true)
echo "<br>";
echo "<br>";


// 3 Operator perbandingan
// ========================
echo "Operator Perbandingan";
echo "<br>";
echo "============================"; 
echo "<br>";

var_dump(12 < 14);   echo "<br />";  // bool(true)
var_dump(14 < 14);   echo "<br />";  // bool(false)
var_dump(14 <= 14);  echo "<br />";  // bool(true)
var_dump(10 <> 14);  echo "<br />";  // bool(true)
var_dump(15 == 10);  echo "<br />";  // bool(false)
var_dump(10 === 10); echo "<br />";  // bool(true)
var_dump(150 == 1.5e2);              // bool(true)
echo "<br>";
echo "<br>";



// 2  Operator Increment dan Decrement
// ==========================================
echo "Operator Increment dan Decrement";
echo "<br>";
echo "============================"; 
echo "<br>";

$a = 5;
echo ++$a;    // 6 
echo $a;      // 6 
echo "<br>";

$b = 5;
echo $b++;    // 5 
echo $b;      // 6
echo "<br>";

$aa = 5;  
echo --$aa;    // 4
echo $aa;      // 4
echo "<br>";

$bb = 5;
echo $bb--;    // 5
echo $bb;      // 4

echo "<br>";
echo "<br>";


// Operator Aritmatika
// ==========================================
echo "Operator Aritmatika"; echo "<br>";
echo "============================"; echo "<br>";

$hasil1 = +11;
$hasil2 = -3;   
$hasil3 = 3 + 5;   
$hasil4 = 8 - 4.5;   
$hasil5 = 2 * 5;  
$hasil6 = 3 + 8 / 5 - 3;   
$hasil7 = 10 % 4;
$hasil8 = 2 ** 4;   

var_dump($hasil1); echo "<br>"; // int(11)
var_dump($hasil2); echo "<br>"; // int(-3)
var_dump($hasil3); echo "<br>"; // int(8)   
var_dump($hasil4); echo "<br>"; // float(3.5)
var_dump($hasil5); echo "<br>"; // int(10)   
var_dump($hasil6); echo "<br>"; // float(1.6)
var_dump($hasil7); echo "<br>"; // int(2)
var_dump($hasil8);              // int(16)
echo "<br>";





?>