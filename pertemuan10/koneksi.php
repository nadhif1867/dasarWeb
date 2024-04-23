<?php
    // koneksi ke dtabasae
    $koneksi = mysqli_connect("localhost", "root", "", "prakwebdb");

    // periksa koneksi
    if (mysqli_connect_errno()){
        die("Koneksi database gagal: " . mysqli_connect_error());
    }
?>