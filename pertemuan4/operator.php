<?php
$a = 10;
$b = 5;

// aritmatika
$hasilTambah = $a + $b;
$hasilKurang = $a - $b;
$hasilKali = $a * $b;
$hasilBagi = $a / $b;
$sisaBagi = $a % $b;
$pangkat = $a ** $b;


echo "";
echo "<h2> Aritmatika </h2>";
echo "Hasil Tambah = {$hasilTambah} <br>";
echo "Hasil Kurang = {$hasilKurang} <br>";
echo "Hasil Kali   = {$hasilKali} <br>";
echo "Hasil Bagi   = {$hasilBagi} <br>";
echo "Sisa Bagi    = {$sisaBagi} <br>";
echo "Pangkat      = {$pangkat} ";
echo "<hr>";

// pembanding
$hasilSama = $a == $b;
$hasilTidakSama = $a != $b;
$hasilLebihKecil = $a < $b;
$hasilLebihBesar = $a > $b;
$hasilLebihKecilSama = $a <= $b;
$hasilLebihBesarSama = $a >= $b;

echo "";
echo "<h2> Pembanding </h2>";
echo "Hasil Sama             = {$hasilSama} <br>";
echo "Hasil Tidak Sama       = {$hasilTidakSama} <br>";
echo "Hasil Lebih Kecil      = {$hasilLebihKecil} <br>";
echo "Hasil Lebih Besar      = {$hasilLebihBesar} <br>";
echo "Hasil Lebih Kecil Sama = {$hasilLebihKecilSama} <br>";
echo "Hasil Lebih Besar Sama = {$hasilLebihBesarSama} <br>";
echo "<hr>";

// logika
$hasilAnd = $a && $b;
$hasilOr = $a || $b;
$hasilNotA = !$a;
$hasilNotB = !$b;

echo "";
echo "<h2> Logika </h2>";
echo "Hasil And   = {$hasilAnd} <br>";
echo "Hasil Or    = {$hasilOr} <br>";
echo "Hasil Not A = {$hasilNotA} <br>";
echo "Hasil Not B = {$hasilNotB} ";
echo "<hr>";

// penugasan

echo "";
echo "<h2> Penugasan </h2>";
echo "Hasil Penjumlahan $a dan $b adalah " . ($a += $b) . " <br>";
echo "Hasil Pengurangan $a dan $b adalah " . ($a -= $b) . "<br>";
echo "Hasil Perkalian $a dan $b adalah " . ($a *= $b) . "<br>";
echo "Hasil Pembagian $a dan $b adalah " . ($a /= $b) . "<br>";
echo "Hasil Sisa Bagi $a dan $b adalah " . ($a %= $b) . "<br>";
echo "<hr>";

// operator identik
$a = 10;
$hasilIdentik = $a === $b;
$hasilTidakIdentik = $a !== $b;

echo "";
echo "<h2> Identik </h2>";
echo "Hasil identik dari $a dan $b adalah $hasilIdentik <br>";
echo "Hasil tidak identik $a dan $b adalah $hasilTidakIdentik <br>";
echo "<hr>";

// soal cerita
$kursi = 45;
$kursiA = 28;
$kursiB = 17;
$persenKursiKosong = ($kursiB/$kursi)*100;

echo "Persen jumlah kursi yang masih kosong adalah " . number_format($persenKursiKosong, 2) . "% <br>";

?>