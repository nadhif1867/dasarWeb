<?php 
    // fungsi

    // function perkenalan(){
    //     echo "Assalamualaikum, ";
    //     echo "Perkenalkan, nama saya Nadhif <br/>";
    //     echo "Senang berkenalan dengan anda <br/>";
    // }

    // perkenalan();
    // perkenalan();

    // fungsi parameter

    // function perkenalan ($nama, $salam){
    //     echo $salam. ", ";
    //     echo "Perkenalkan, nama saya " .$nama. "<br/>";
    //     echo "Senang berkenalan dengan Anda<Br/>";
    // }

    // perkenalan("Hamdana", "Halo");

    // echo "<hr>";

    // $saya = "Nadhif";
    // $ucapanSalam = "Selamat pagi";

    // perkenalan($saya, $ucapanSalam);

    // parameter default

    // function perkenalan ($nama, $salam="Assalamualaikum"){
    //     echo $salam. ", ";
    //     echo "Perkenalkan, nama saya " .$nama. "<br/>";
    //     echo "Senang berkenalan dengan Anda<Br/>";
    // }

    // perkenalan("Hamdana", "Halo");

    // echo "<hr>";

    // $saya = "Nadhif";
    // $ucapanSalam = "Selamat pagi";

    // perkenalan($saya);

    // fungsi mengembalikan nilai

    // function hitungUmur($thn_lahir, $thn_sekarang){
    //     $umur = $thn_sekarang - $thn_lahir;
    //     return $umur;
    // }

    // echo "Umur saya adalah ". hitungUmur(2004, 2023). " tahun"

    //fungsi dalam fungsi

    function hitungUmur($thn_lahir, $thn_sekarang){
        $umur = $thn_sekarang - $thn_lahir;
        return $umur;
    }
    function perkenalan ($nama, $salam="Assalamualikum"){
        echo $salam. ", ";
        echo "Perkenalkan, nama saya " .$nama. "<br/>";
    
        echo "Umur saya adalah ". hitungUmur(2004, 2023). " tahun<br/>";
        echo "Senang berkenalan dengan Anda<br/>";
    }
    perkenalan("Nadhif");
?>