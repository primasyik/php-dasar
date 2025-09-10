<?php

// function
// block kode program yang akan berjalan saat di panggil
// keyword function, nama function kurung()
// memanggil nama function diikuti dengan kurung
// disebut juga method
// lokasi function pada php sangat fleksibel
// bisa dipanggil berulang-ulang
// built in function, fungsi yang sudah disediakan, contoh var_dump(), isset(), empty(), die()
// user defined function, fungsi yang kita buat sendiri

echo "function sederhana <br>";
echo "================== <br>";
// membuat function
function sekolah(){
    echo "SMK";
}
// menjalankan function
echo "Menjalankan function sekolah() : <br>";
sekolah();
echo "<br>";

echo "Menjalankan function menggunakan fungsi if : <br>";

$nama = "budi"; // isi nama

if ($nama) {
    function sapa($namaOrang) {
        echo "Hai $namaOrang<br>";
    }
}

sapa($nama);


// function argument
// dapat mengirim informasi ke function yang ingin kita panggil
// menggunakan argument/parameter, pembuatannya seperti variabel
// berada di dalam tanda kurung
// argument bisa lebih dari satu
// jika kode funtion tidak dipanggil/dijalankan maka tidak bisa digunakan
echo "<br>";
echo "function argument/parameter <br>";
echo "============================ <br>";
function sayHai($sapa){
    echo "Sapa " . $sapa . "<br>" ;
}
sayHai("Hai");
sayHai("Selamat pagi");


// function argument default value
// menentukan nilai default argument
// tidak disarankan menyimpan default argument value di parameter yang pertama
echo "<br>";
echo "function default argument/parameter <br>";
echo "================== <br>";

function salam($nama, $nama_belakang ="default"){
    echo "Hai $nama $nama_belakang <br>";
}

salam("Jack");
salam("James", "Jasberger");

// parameter type declaration
// argument php type datanya dinamis
// ada kelemehan bila ingin mengisi tipe data tertentu
// ada fitur pengecekan tipe data di argument value
// secara default php akan melakukan percobaan konversi tipe data secara otomatis
// misal jika kita ingin menggunakan tipe data int, tapi kita mengirim string maka php akan otomatis mengkonversi string menjadi int

echo "<br>";
echo "function default argument/parameter <br>";
echo "================== <br>";
function tambah(int $nilai1, int $nilai2){
    $total = $nilai1 + $nilai2;
    echo "Hasil dari Nilai1 + Nilai 2 = " . $total . "<br>";
}

tambah(100,100);
tambah("100","100");
tambah(true,true);
// tambah([],[]);

echo "<br>";

// variabel-length argumen list
// dapat menerima banyak value/nilai
// otomatis membuat argumen menjadi array
// namun kita tidak perlu manual mengirim array ke functionnya
// hanya bisa dilakukan di argument posisi akhir
// menggunakan titik tiga kali sebelum nama argumentnya ...$values

echo "function banyak nilai/array <br>";
echo "================== <br>";
echo "<br>";

function dataArray(...$data)
{
    var_dump($data);
}

echo "function banyak nilai/array <br>";
echo "================== <br>";
echo "menambahkan banyak data menggunakan function argument array <br>";
function tambahData(...$nilai){
    $total = 0;
    foreach($nilai as $n){
        $total += $n;
    }
    echo "Total " . implode(" + ", $nilai) . " = $total" . "<br>";
}

tambahData(1, 2, 3, 4);
echo "<br>";

// function return value
// secara default, function tidak menghasilkan value apapun
// kita bisa membuat sebuah function mengembalikan nilai
// menggunakan kata kunci return lalu diikuti dengan data yang ingin dihasilkan
// hanya bisa mengembalikan satu nilai

// function dengan return
function sum1(int $first, int $second){
    return $first + $second;
}
// function tanpa return
function sum2(int $first, int $second){
    echo $first + $second;
}

// hasil function return
$total_a = sum1(10,10);
echo "Total function return " . $total_a;
echo "<br>";
$total_ab = $total_a * 2;
echo "Total function * 2 = " . $total_ab;
echo "<br>";
// hasil function tanpa return
echo "Total function echo ";
$total_b = sum2(10,10);
echo "<br>";
$total_ba = $total_b * 2;
echo "Total function tanpa return " .$total_ba;
echo "<br>";

// function return value elseif
echo "<br>";
echo "function return elseif <br>";
echo "================== <br>";
function grade(int $nilai){
    if($nilai >= 80){
        return "A";
    } elseif($nilai >=70){
        return "B";
    }elseif($nilai >=60){
        return "C";
    }elseif($nilai >=50){
        return "D";
    }elseif($nilai >=40){
        return "E";
    }
    echo "Dibawah standar ";
}

$nilaiJack = grade(90);
echo "Nilai Jack $nilaiJack <br>";
// noted buat jika kondisi nilai lebih dari 100 maka tidak terdefinisi


// return type declaration
// sama seperti argument, return value bisa dideklarasikan tipe datanya
// untuk mempermudah mengetahui tipe data
// menjaga agar tidak salah dalam mengembalikan tipe data
// untuk mendeklarasikan tipe data kembalian function setelah (), dikuti dengan tipe data kembaliannya
echo "<br>";
echo "function return type declaration <br>";
echo "================== <br>";
function sum3(int $first, int $second): int{
    return $first + $second;
}
echo "function sum3 : " ;
echo sum3(10,10);
echo "<br>";

// variabel function
// kemampuan memanggil sebuah function dari value yang terdapat di sebuah variabel
// panggil $namaVariabel()
// menggunakan argument $namaVariabel(argument);
echo "<br>";
echo "function return type declaration <br>";
echo "================== <br>";

function var1(){
    echo "Function tanpa variabel 1 <br>";
}
function var2(){
    echo "Function tanpa variabel 2 <br>";
}

var1();
var2();

echo "<br>";
echo "Variabel function <br>";
echo "================== <br>";
echo "membuat variabel function <br>";
function var3(){
    echo "Function disimpan variabel 3 <br>";
}
function var4(){
    echo "Function disimpan variabel 4 <br>";
}

$memanggilfunction = "var3";
$memanggilfunction();
$memanggilfunction = "var4";
$memanggilfunction();

echo "<br>";
echo "Variabel function <br>";
function namaTeman(string $nama, $filter){
    $namaLengkap = $filter($nama);
    echo "Hello strtoupper/strtolower $namaLengkap <br>";
}

namaTeman("James", "strtoupper");
namaTeman("Jack", "strtolower");

echo "<br>";
echo "Variabel function return <br>";

function namaMargaTeman(string $nama): string
{
    return "function variabel : $nama ";
}

namaTeman("Jhon", "namaMargaTeman");

// anonymous function
// function tanpa nama, closure
// digunakan sebagi argument atau sebagai value di variabel
// dapat mengirim function sebagai argument di function lainnya
echo "<br>";
echo "Anonymous function <br>";
echo "================== <br>";
$sapa = function(string $name)
{
    echo "Hello $name <br>";
}; // jangan lupa titik koma karena variabel
$sapa('World');
$sapa('PHP');

// anonymous function sebagai argument
echo "<br>";
echo "Anonymous function argument <br>";
echo "================== <br>";

function sayGoodBye(string $name, $filter){
    $finalName = $filter($name);
    echo "Good bye $finalName <br>";
}

sayGoodBye("Jhon", function(string $name): string {
    return strtoupper($name);
});

echo "<br>";
echo "Variabel Anonymous function argument <br>";
$filterFunction = function(string $name): string{
    return strtoupper($name);
};

sayGoodBye("James", $filterFunction);

// mengakses variabel di luar closure
// secara default anonymous function tidak bisa mengakses variabel yang terdapat diluar function
// jika ingin menggunakannya, maka perlu explicit menyebutkannya menggunakan kata kunci use lalu diikuti variabel yang ingin kita gunakan
echo "<br>";
echo "Mengakses variabel diluar closure <br>";
echo "================== <br>";
echo "Menggunakan keyword use <br>";
$firstName = "James";
$lastName = "Jasberger";

$sayHello = function() use ($firstName, $lastName){
    echo "Hello $firstName $lastName <br>";
};
$sayHello();

// arrow function
// arrow function mirip anonymous function
// variable diluar closure secara otomatis bisa digunakan
// tidak perlu keyword use
// menggunakan keyword fn
// untuk membuat function sederhana
echo "<br>";
echo "Arrow function <br>";
echo "================== <br>";
$firstName = "James";
$lastName = "Jasberger";
$sayHello = fn() => "Hello $firstName $lastName <br>";
echo $sayHello();

// callback function
// mekanisme sebuah function memanggil function lainnya sesuai yang diberikan di argument
// hal ini sebenarnya sudah kita lakukan di materi variabel function dan anonymous function 
// namun di php ada cara lain untuk implementasi callback yaitu mengguankan tipe data callable
// dan untuk memanggil callback function tersebut kita bisa menggunakan function call_user_func(callable, arguments)
echo "<br>";
echo "Callback function <br>";
echo "================== <br>";
function sayHello(string $name, callable $filter){
    $finalName = call_user_func($filter, $name);
    echo "Hello $finalName <br>";
}
sayHello("Jack", function($name){ return strtoupper($name);});
sayHello("Jhon", fn($name) => strtolower($name));
sayHello("Jim", "strtoupper");
sayHello("Jane", "strtolower");


// recursive function
// kemampuan function memanggil function dirinya sendiri
// kadang memang banyak problem yang lebih mudah diseleaikan menggunakan recursive function seperti kasus factorial

// recursive function
echo "<br>";
echo "recursive function <br>";
echo "================== <br>";

// factorial loop
echo "Factorial loop <br>";
function factorialLoop(int $value){
    $total = 1;
    for ($i = 1; $i <= $value; $i++){
        $total *= $i;
    }
    return $total;
}
var_dump(factorialLoop(5));
var_dump(1 * 2 * 3 * 4 * 5);

// factorial recursive
echo "<br>";
echo "factorial recursive <br>";
function factorialRecursive(int $value): int{
    if($value == 1){
        return 1;
    }else{
        return $value * factorialRecursive($value-1);
    }
}

var_dump(factorialRecursive(5));

// problem recursive
// jika recursive terlalu dalam maka ada kemungkinan terjadi memory overflow
// ketika memanggil function akan disimpan didalam stack, dan terjadi tumpukan stack yang menyebabkan error memory
// function loop(int $value){
//     if($value == 0){
//         echo "end Loop <br>"; 
//     }else{
//         echo "loop $value <br>";
//         loop($value - 1);
//     }
// }
// loop(300000);




?>
