<?php
// 1
$nilaiNumerik = 92;

if ($nilaiNumerik >= 90 && $nilaiNumerik <= 100){
    echo "Nilai huruf : A ";
} elseif ($nilaiNumerik >= 80 && $nilaiNumerik < 90){
    echo "Nilai huruf : B";
} elseif ($nilaiNumerik >= 70 && $nilaiNumerik < 80){
    echo "Nilai huruf : C";
} elseif ($nilaiNumerik < 70){
    echo "Nilai huruf : D";
}

// 2
$jarakSaatIni = 0;
$jarakTarget = 500;
$peningkatanHarian = 30;
$hari = 0;

while ($jarakSaatIni < $jarakTarget){
    $jarakSaatIni += $peningkatanHarian;
    $hari++;
}
echo "<br>";
echo "<hr>";
echo "<br>";
echo "Atlet tersebut memerlukan $hari hari untuk mencapai jarak 500 kilometer.";

// 3
$jumlahLahan = 10;
$tanamanPerlahan = 5;
$buahPerTanaman = 10;
$jumlahBuah = 0;

for ($i = 1; $i <= $jumlahLahan; $i++){
    $jumlahBuah += ($tanamanPerlahan * $buahPerTanaman);
}

echo "<br>";
echo "<hr>";
echo "<br>";
echo "Jumlah buah yang akan dipanen adalah $jumlahBuah";

// 4
$skorUjian = [85, 92, 78, 96, 88];
$totalSkor = 0;

foreach ($skorUjian as $skor){
    $totalSkor += $skor;
}

echo "<br>";
echo "<hr>";
echo "<br>";
echo "Total skor ujian adalah: $totalSkor";

// 5
$nilaiSiswa = [85, 92, 58, 64, 90, 55, 88, 79, 70, 96];

echo "<br>";
echo "<hr>";
echo "<br>";
foreach ($nilaiSiswa as $nilai){
    if ($nilai < 60){
        echo "Nilai: $nilai (Tidak lulus) <br>";
        continue;
    }

    echo "Nilai: $nilai (lulus) <br>";
}

// 6
echo "<br>";
echo "<hr>";
echo "<br>";
$nilaiUjian = [85, 92, 78, 64, 90, 75, 88, 79, 70, 96];
rsort($nilaiUjian);
$ujian = array_slice($nilaiUjian, 2, -2);
$panjangNilai = count($ujian);
$totalNilai = array_sum($ujian);
$rataNilai = $totalNilai / $panjangNilai;
echo "Jumlah total nilai siswa adalah $totalNilai dan rata-rata $rataNilai";

// 7
echo "<br>";
echo "<hr>";
echo "<br>";
$harga = 120000;
$persen = 0.2;
$diskon = ($harga * $persen);
$hargaDiskon = ($harga - $diskon);

if ($harga > 100000){
    echo "Harga = Rp. {$hargaDiskon}";
} else {
    echo "Harga = Rp. {$harga}";
}

// 8
echo "<br>";
echo "<hr>";
echo "<br>";
$skor = 600;
$hasil = ($skor > 500)?"Iya":"Tidak"; 

echo "Total skor pemain adalah: $skor <br>";
echo "Apakah pemain mendapatkan hadiah tambahan? $hasil";

?>