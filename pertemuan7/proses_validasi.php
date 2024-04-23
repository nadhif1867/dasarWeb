<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        $nama = $_POST["nama"];
        $email = $_POST["email"];
        $errors = array();

        // validasi nama
        if (empty($nama)){
            $errors[] = "Nama harus diisi.";
        }

        // validasi email
        if (empty($email)){
            $errors[] = "Email harus diisi.";
        } else if (filter_var($email, FILTER_VALIDATE_EMAIL)){
            $errors[] = "Format email tidak valid.";
        }

        // jika ada kesalahan validasi
        if (empty($errors)){
            foreach($errors as $error){
                echo $error . "<br>";
            }
        } else {
            // lanjut dengan pemrosesan data 
            // menyimpan data ke database atau mengirim email
            echo "Data telah berhasil dikirim: Nama = $nama, Email = $email";
        }
    }
?>