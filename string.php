<?php
// buat file baru string.php

// string concatenate
// penggabungan string menggunakan concatenate tanda titik .

// string functions
$dataString = "   Hello World   "; 
// strlen gunanya untuk
echo "1 - " . strlen($dataString) . '<br>' ;
// trim gunanya untuk
echo "2 - " . trim($dataString) . '<br>' ;
// ltrim gunanya untuk
echo "3 - " . ltrim($dataString) . '<br>' ;
// rtrim gunanya untuk
echo "4 - " . rtrim($dataString) . '<br>' ;
// str_word_count gunanya untuk
echo "5 - " . str_word_count($dataString) . '<br>' ;
// strrev gunanya untuk
echo "6 - " . strrev($dataString) . '<br>' ;
// strtoupper gunanya untuk
echo "7 - " . strtoupper($dataString) . '<br>' ;
// strtolower gunanya untuk
echo "8 - " . strtolower($dataString) . '<br>' ;
// ucfirst gunanya untuk
echo "9 - " . ucfirst('hello') . '<br>' ;
// lcfirst gunanya untuk
echo "10 - " . lcfirst('HELLO') . '<br>' ;
// ucwords gunanya untuk
echo "11 - " . ucwords('hello world') . '<br>' ;
// strpos gunanya untuk
echo "12 - " . strpos($dataString, 'world') . '<br>' ;
// susbtr gunanya untuk
echo "13 - " . substr($dataString, 8, 3) . '<br>' ;
// str_replace gunanya untuk
echo "14 - " . str_replace('PHP', 'world', $dataString) . '<br>' ;
echo "<br>";

// multiline text and line breaks
echo "Belajar Multiline tex dan line breaks <br>";
echo "============================================ <br>";
$textPanjang = "
    Hello, nama saya <b>Jack</b>
    usia saya <b>17</b> th,
    saya siswa kelas XI.
";
echo $textPanjang . '<br>';
echo nl2br($textPanjang) . '<br>';
echo'<br>';

// Multiline text and reserve html tags
echo "1 " . $textPanjang . '<br>';
echo "2 " . nl2br($textPanjang) . '<br>';
echo "3 " . htmlentities($textPanjang) . '<br>';
echo "4 " . nl2br(htmlentities($textPanjang)) . '<br>';
echo "5 " . html_entity_decode(htmlentities($textPanjang)) . '<br>';
echo "6 " . htmlspecialchars($textPanjang) . '<br>';

?>