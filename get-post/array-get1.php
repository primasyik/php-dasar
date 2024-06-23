<?php

$siswa = [
    [
        "nis" => "0471502027",
        "nama" => "Jack",
        "email" => "jack@mail.com",
        "jurusan" => "Rekayasa Perangkat Lunak",
    ],
    [
        "nis" => "0471502020",
        "nama" => "Jim",
        "email" => "jim@mail.com",
        "jurusan" => "Akuntansi Keuangan Lembaga",
    ],
];

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Data Siswa</h1>
    <!-- 
        * menampilkan data array kolom nama
        * menggunakan foreach
        * menggunakan bullet list
        * link akan mengirim data ke halaman array-get2.php
        * menggunakan method request GET
        * method REQUEST berbeda dengan variabel $_GET
    -->
    <ul>
        <?php foreach($siswa as $swa) : ?>
            <li>
                <!-- link mengarah ke file array-get2.php -->
                <!-- mengirim key dan value dari array -->
                <a href="array-get2.php?
                        nis=<?= $swa["nis"];?>&
                        nama=<?= $swa["nama"];?>&
                        email=<?= $swa["email"];?>&
                        jurusan=<?= $swa["jurusan"];?>&
                        ">
                    <!-- menampilkan data siswa key nama -->
                    <?php echo $swa['nama']?>
                </a>
            </li>
        <?php endforeach ; ?>
    </ul>
</body>
</html>