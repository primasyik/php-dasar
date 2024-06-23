<?php

// array
// variabel yang dapat menyimpan banyak nilai
// pasangan antara key / index dan value

// Array Numerik
// key / index menggunakan angka
// array dimulai dari 0
// 1 membuat dan menampilkan seluruh data array
echo "Membuat dan menampilkan data array" . '<br>';
echo "=========================== . <br>";
// cara lama key 0         1        2       3         4
$buah = array('Mangga', 'Jeruk', 'Apel', 'Pisang', 'Anggur', 'Sirsak');
// cara baru
$benda = ['Meja', 'Kursi', 'lemari'];

var_dump($buah);
echo "<br>";
var_dump($benda);
echo "<br>";


// 2 mengambil salah satu data aray
$benda = ['Meja', 'Kursi', 'lemari'];
echo "<br>";
echo "Mengambil salah satu data array" . '<br>';
echo "======================= . <br>";
echo "isi buah ke-0 " . $buah[0] . "<br>";
echo "isi buah ke-1 " . $buah[1] . "<br>";
echo "isi buah ke-2 " . $buah[2] . "<br>";
echo "isi buah ke-3 " . $buah[3] . "<br>";
echo "isi buah ke-4 " . $buah[4] . "<br>";
echo "isi buah ke-5 " . $buah[5] . "<br>";
echo "<br>";

// 3 mengganti salah satu data array
$buah = array('Mangga', 'Jeruk', 'Apel', 'Pisang', 'Anggur');
echo "<br>";
echo "Mengganti isi salah satu data array <br>";
echo "=========================";
$buah[4] = "Durian";
echo "<br>";
var_dump($buah);
echo "<br>";


// 4 cek apakah ada data aray di index ke-, menggunakan isset
echo "<br>";
echo "Cek apakah ada data aray di index ke-2 menggunakan isset";
echo "<br>";
echo "========================= <br>";
echo "Data buah index ke-2 <br>";
var_dump(isset($buah[2]));
echo "<br>";


// 5 menambahkan element array di bagian akhir
$buah = array('Mangga', 'Jeruk', 'Apel', 'Pisang', 'Anggur');
echo "<br>";
echo "Menambahkan elemen array di bagian akhir";
echo "<br>";
echo "================================= <br>";
$buah[] = "Rambutan";
var_dump($buah);
echo "<br>";


// 6 menampilkan panjang array
$buah = array('Mangga', 'Jeruk', 'Apel', 'Pisang', 'Anggur');
echo "<br>";
echo "Menampilkan panjang/jumlah array menggunakan count";
echo "<br>";
echo "========================== <br>";
echo "Jumlah data array buah : " . count($buah);
echo "<br>";

// 7 menambahkan elemen array di bagian belakang
$buah = array('Mangga', 'Jeruk', 'Apel', 'Pisang', 'Anggur');
echo "<br>";
echo "Menampilkan panjang/jumlah array";
echo "<br>";
echo "========================== <br>";
array_push($buah, "Jambu");
echo "Penambahan data menggunakan array_push <br>";
var_dump($buah);
echo "<br>";


// 8 menghapus elemen array pada bagian belakang
$buah = array('Mangga', 'Jeruk', 'Apel', 'Pisang', 'Anggur');
echo "<br>";
echo "Menghapus data terakhir array";
echo "<br>";
echo "========================== <br>";
array_pop($buah);
echo "Menghapus data menggunakan array_pop <br>";
var_dump($buah);
echo "<br>";


// 9 menambahkan elemen array di awal
$buah = array('Mangga', 'Jeruk', 'Apel', 'Pisang', 'Anggur');
echo "<br>";
echo "Menambahkan data awal array";
echo "<br>";
echo "========================== <br>";
array_unshift($buah, 'Melon');
echo "Menambahkan data menggunakan array_unshift <br>";
var_dump($buah);
echo "<br>";

// 10 menghapus elemen array di bagian awal
$buah = array('Mangga', 'Jeruk', 'Apel', 'Pisang', 'Anggur');
echo "<br>";
echo "Menghapus data awal array";
echo "<br>";
echo "========================== <br>";
array_shift($buah);
echo "Menghapus data menggunakan array_shift <br>";
var_dump($buah);
echo "<br>";

// 11 memecah string menjadi array, array menjadi string
// explode
// mengubah suatu string menjadi array
echo "<br>";
echo "Memecah string menjadi data array";
echo "<br>";
echo "========================== <br>";
$string = "Apel, Melon, Semangka";
echo "Memecah string menjadi data array menggunakan explode <br>";
echo "String : Apel, Melon, Semangka <br>";
var_dump(explode(",", $string));
echo "<br>";

// implode
// mengubah suatu array menjadi sebuah text atau kalimat
echo "<br>";
echo "Memecah array menjadi data string";
echo "<br>";
echo "========================== <br>";
$arr = array('Hello','World','Beautiful','Day');
echo implode(" ",$arr)."<br>";
echo implode("+",$arr)."<br>";
echo implode("-",$arr)."<br>";
echo implode("X",$arr);
echo "<br>";


// 12 menghapus data awal array_shift
$buah = array('Mangga', 'Jeruk', 'Apel', 'Pisang', 'Anggur');
echo "<br>";
echo "Menghapus data awal array";
echo "<br>";
echo "========================== <br>";
array_shift($buah);
echo "Menghapus data menggunakan array_shift <br>";
var_dump($buah);
echo "<br>";

// 13 cek apakah ada elemen tertentu di dalam aray
$student = ["Jack", "James", "Jhon"];
echo "<br>";
echo "Cek apakah ada data tertentu didalam aray";
echo "<br>";
echo "==================================== <br>";
echo "Cek apakah ada data didalam array in_array <br>";

var_dump(in_array('Jack', $student)); // menghasilkan true
echo "<br>";

// 14 mencari data array melalui indexnya
echo "<br>";
echo "Mencari data array melalui indexnya";
echo "<br>";
echo "==================================== <br>";
echo "Mencari data array melalui indexnya array_search <br>";

var_dump($student); echo "<br>";
echo "index dari Jack " . array_search("Jack", $student);

echo "<br>";


// 15 menggabungkan 2 array
$buah = array('Mangga', 'Jeruk', 'Apel', 'Pisang', 'Anggur');
echo "<br>";
echo "Menggabungkan 2 buah array <br>";
echo "==================================== <br>";
echo "Menggabungkan 2 buah array menggunakan merge <br>";
echo "array 1 : ";
var_dump($buah);
echo "<br>";
echo "array 2 : ";
var_dump($student);
echo "<br>";
echo "array Gabungan 1 & 2 : ";
var_dump(array_merge($buah, $student));
echo "<br>";
echo "<br>";
echo "Menggabungkan 2 buah array menggunakan kurung kotak <br>";
var_dump([...$buah, ...$student]);
echo "<br>";


// 16 Sorting array
$buah = array('Mangga', 'Jeruk', 'Apel', 'Pisang', 'Anggur');
echo "<br>";
echo "Melakukan sorting/pengurutan array";
echo "<br>";
echo "==================================== <br>";
echo "Melakukan pengurutan array menggunakan sort() <br>";
sort($buah);
var_dump($buah);
echo "<br>";
echo "Melakukan pengurutan array menggunakan r sort() <br>";
rsort($buah);
var_dump($buah);
echo "<br>";

// 17 filter, map, reduce
echo "<br>";
echo "Melakukan filter";
echo "<br>";
echo "==================================== <br>";
echo "Melakukan filter menggunakan array_filter() <br>";
$numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$saring_data = array_filter($numbers, function($n){
    return $n % 2 === 0 ;
});
var_dump($saring_data);
echo "<br>";
echo "<br>";
echo "Melakukan filter menggunakan callback function <br>";
$function_callback = array_filter($numbers, fn($n) => $n % 2 === 0 );
var_dump($function_callback);
echo "<br>";

echo "<br>";
echo "Melakukan filter";
echo "<br>";
echo "==================================== <br>";
echo "Melakukan filter menggunakan array_map() <br>";
$squares = array_map(fn($n) => $n * $n, $numbers);
var_dump($squares);
echo "<br>";

echo "<br>";
echo "Melakukan filter";
echo "<br>";
echo "==================================== <br>";
echo "Melakukan filter menggunakan array_reduce() <br>";
echo "Melakuka array_reduce() : " . array_reduce($numbers, fn($carry, $item) => $carry + $item);
echo "<br>";

// Array Associative
// pasangan antara key dan value
// keynya bebas kita definisikan sendiri

echo "<br>";
echo "Associative Array <br>";
echo "====================== <br>";
// membuat associative array
echo "membuat associative array <br>";
$siswa = [
    'nama' => "Jack",
    'email' => "jack@mail.com",
    'usia' => 25,
    'hobi' => 'fotografi',
];


// mengambil elemen key array
echo 'data array $siswa[] hasilnya = ' . $siswa['nama'];

// menentukan elemen key array
echo "<br>";
echo "<br>";
echo "Menentukan elemen key array <br>";
echo "====================== <br>";
$siswa['nama'] = 'James'; 
echo "ubah isi array yang keynya, 'nama' jadi James : " . $siswa['nama'] . "<br>";
echo "<br>";

// Check array dengan spesifik key
echo "<br>";
echo "cek array dengan isset <br>";
echo "====================== <br>";
echo "Apakah key nama ada didalam array ? " ;
echo isset($siswa['nama']); // hasilnya 1 artinya true
echo "<br>";
echo "Apakah key alamat ada didalam array ? " ;
echo isset($siswa['alamat']); // hasilnya tidak ada artinya false
echo "<br>";

// tampilkan key dari array
echo "<br>";
echo "tampilkan key <br>";
echo "====================== <br>";
var_dump(array_keys($siswa));
echo "<br>";


// print nilai dari array
echo "<br>";
echo "tampilkan nilai <br>";
echo "====================== <br>";
var_dump(array_values($siswa));
echo "<br>";


// pengurutan/sorting di dalam array
echo "<br>";
echo "Pengurutan/sorting array <br>";
echo "====================== <br>";
echo "tampilkan urutan index terbesar <br>";
ksort($siswa);
echo "pengurutan data : " ;
var_dump($siswa);
echo "<br>";

echo "<br>";
echo "tampilkan urutan key terbesar <br>";
krsort($siswa);
echo "pengurutan data : " ;
var_dump($siswa);
echo "<br>";

echo "<br>";
echo "tampilkan urutan key assosiatif terbesar <br>";
asort($siswa);
echo "pengurutan data : " ;
var_dump($siswa);
echo "<br>";

echo "<br>";
echo "tampilkan urutan key assosiatif terbesar <br>";
arsort($siswa);
echo "pengurutan data : " ;
var_dump($siswa);
echo "<br>";

// array di dalam array / array multidimensi
$kegiatan = [
    [
        'title' => 'Item 1',
        'completed' => 'true',
    ],
    [
        'title' => 'Item 2',
        'completed' => 'false',
    ],
    [
        'title' => 'Item 3',
        'completed' => 'true',
    ],
];

// array multidimensional

echo "<br>";
echo "array multidimensi <br>";
echo "==================== <br>";
var_dump($kegiatan);


// tanpa foreach
echo "<br>";
echo "Pengulangan array tanpa foreach <br>";
echo "================== <br>";
$buah = ["Jeruk", "Apel", "Mangga"];
var_dump($buah);
echo "<br>";
for($i=0; $i < 3; $i++){
    echo "Nama buah : $buah[$i] <br>";
}
echo "<br>";
echo "Fungsi loop foreach <br>";
echo "================== <br>";
echo "pengulangan untuk tipe data array <br>";
echo "pengulangan untuk tipe data array menampilkan index dan nama file <br>";
foreach($buah as $i => $b){
    echo $i . ' ' . $b . '<br>';
}
echo '<br>';
echo "pengulangan untuk tipe data array menampilkan nama file <br>";
foreach($buah as $b){
    echo "Nama buah : " . $b . '<br>';
}


// pengulangan associative array
$anggota = [
    'nama' => "Jack",
    'email' => "jack@mail.com",
    'usia' => 19,
    'hobbies' => ['Game', 'Futsal']
];
echo "Fungsi loop foreach array <br>";
echo "================== <br>";
echo "pengulangan untuk tipe data array key dan value <br>";
echo "Profil : <br>";
foreach($anggota as $key => $value){
            echo $value . "<br>";
}
foreach($anggota as $key => $value){
        foreach($value as $v){
            echo $v . "<br>";
        }
}


?>