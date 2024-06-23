<?php

// Perulangan
// for
// 1 inisialisasi, menentukan variabel/nilai awal pengulangan, biasanya 0
// kondisi terminasi, digunakan untuk menghentikan pengulangannya
// kondisi penambahan/pengulangan maju/mundur (increment/decrement) 
echo "Fungsi loop for <br>";
echo "================== <br>";
echo "1 inisialisasi, menentukan variabel/nilai awal pengulangan, biasanya 0 <br>";
echo "2 kondisi terminasi, digunakan untuk menghentikan pengulangannya <br>";
echo "3 kondisi penambahan/pengulangan maju/mundur (increment/decrement) <br>";
echo "<br>";
echo 'for($i=0; $i<5; $i++) <br>';
for($i=0; $i<5; $i++){
    echo "SMK CKTC <br>";
}


// while
// selama
// while(true){
//     echo "Selama kondisi benar maka script ini dijalankan terus menerus <br>";
// } 
// 1 inisialisasi, menentukan variabel/nilai awal pengulangan, biasanya 0
// 2 kondisi terminasi, selama kondisi bernilai true lakukan pengulangan, jika false hentikan pengulangan
// 3 kondisi penambahan/pengulangan maju/mundur (increment/decrement)
echo "<br>";
echo "Fungsi loop while <br>";
echo "================== <br>";
echo "1 inisialisasi, menentukan variabel/nilai awal pengulangan, biasanya 0 <br>";
echo "2 kondisi terminasi, digunakan untuk menghentikan pengulangannya <br>";
echo "3 kondisi penambahan/pengulangan maju/mundur (increment/decrement) <br>";
echo "<br>";
echo 'while($i<5){ echo "SMK CKTC <br>"; $i++; } <br>';

$i = 0;
while($i<5){
    echo "SMK CKTC <br>";
    $i++;
}

// do - while
// lakukan pengulangan, lalu lakukan kondisinya
// minimal satu kali perintah dijalankan walaupun kondisi bernilai false
// 1 inisialisasi, menentukan variabel/nilai awal pengulangan, biasanya 0
// 2 kondisi terminasi, selama kondisi bernilai true lakukan pengulangan, jika false hentikan pengulangan
// 3 kondisi penambahan/pengulangan maju/mundur (increment/decrement)
echo "<br>";
echo "Fungsi loop do While <br>";
echo "================== <br>";
echo "Minimal satu kali perintah dijalankan walaupun kondisi bernilai false";
echo "1 inisialisasi, menentukan variabel/nilai awal pengulangan, biasanya 0 <br>";
echo "2 kondisi terminasi, digunakan untuk menghentikan pengulangannya <br>";
echo "3 kondisi penambahan/pengulangan maju/mundur (increment/decrement) <br>";

$i = 6;
do{
    echo "SMK CKTC ! <br>";
    $i++;
}while($i<5);

// foreach
// pengulangan untuk tipe data array

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



// Struktur Kendali : Pengulangan
// for
// while
// do.. while
// foreach : pengulangan khusus array

// for
// inisialisasi, menentukan variabel/nilai awal pengulangan. Biasanya 0.
// kondisi terminasi, digunakan untuk menghentikan pengulangannya
// kondisi pengulangan maju/mundur (increment/decrement)

// for($i = 0; $i < 5; $i++){
//     echo "Hello World !!! <br>";
// }

// while, 
// inisialisasi, menentukan variabel/nilai awal pengulangan. Biasanya 0.
// kondisi terminasi, cek dulu kondisi terminasi, selama kondisi bernilai true, lakukan pengulangan, digunakan untuk menghentikan pengulangannya
// kondisi pengulangan maju/mundur (increment/decrement)

// $i = 0;
// while($i < 5){
//     echo "Hello World ! <br>";
//     $i++;
// }

// Do while, lakukan pengulangan, lalu lakukan kondisinya.
// inisialisasi, menentukan variabel/nilai awal pengulangan. Biasanya 0.
// kondisi terminasi, digunakan untuk menghentikan pengulangannya
// kondisi pengulangan maju/mundur (increment/decrement), jika kondisi pengulangan false, maka program akan berjalan sekali.

// $i = 0;
// do{
//     echo "Hello World !! <br>";
//     $i++;
// }while($i < 5);

// ternary
$hasil = (7 > 5) ? "Benar" : "Salah";
echo $hasil . "<br>"; // benar

$user = "guest";
$salam = ($user == "admin") ? "Welcome Admin!" : "Maaf, anda bukan Admin";
echo $salam; // Maaf, anda bukan Admin

echo "<br>";
// switch
$hari = 4;
    switch ($hari) {
        case 1 :
            echo "Hari Senin";
            break;
        case 2 :
            echo "Hari Selasa";
            break;
        case 3 :
            echo "Hari Rabu";
            break;
        case 4 :
            echo "Hari Kamis";
            break;
        case 5 :
            echo "Hari Jum'at";
            break;
        case 6 :
            echo "Hari Sabtu";
            break;
        case 7 :
            echo "Hari Minggu";
            break;
        default :
            echo "Nama hari cuma ada 7!";
            break;
    }
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Struktur Pengulangan</title>
    <style>
        .warna-baris{
            background-color:silver;
        }
    </style>
</head>
<body>
        <table border="1" cellpadding="10" cellspacing="0">
        <!-- gaya templating -->
        <!-- memisahkan sesuatu yang kita tampilkan pada php dengan tag php -->
        <!-- jika yang akan ditampilkan tag html, maka jangan didalam tag php -->
        <?php for($i=1; $i<=5; $i++) : ?>
            <!-- tag html terpisah dari php -->
            <!-- kondisi baris ganjil -->
            <!-- menggunakan mod -->
            <?php if($i % 2 == 1) : ?>
            <!-- tr berwarna silver -->
                <tr class="warna-baris">
            <?php else : ?>
                <!-- kondisi baris genap -->
                <tr>
            <?php endif;?>
                <?php for($j=1; $j<=5; $j++) : ?>
                    <td><?php echo "$i,$j"?></td>
                <?php endfor; ?>
            </tr>
        <?php endfor; ?>
        </table>
    
    
    
        <table border="1" cellpadding="10" cellspacing="0">
        <!-- mengulang baris -->
        <?php 
            for($ii=1; $ii<=3; $ii++){
                echo "<tr>";
                // mengulang kolom
                for($jj=1; $jj<=5; $jj++){
                    echo "<td>$ii,$jj</td>";
                }
                echo"</tr>";
            }
        ?>     
    </table>
</body>
</html>

?>