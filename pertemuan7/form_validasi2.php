<!DOCTYPE html>
<html>
    <head>
        <title>Form Input dengan validasi</title>
        <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    </head>
    <body>
        <h1>Form Input dengan Validasi</h1>
        <form id="myForm" method="post" action="proses_validasi.php">
            <label for="nama">Nama:</label>
            <input type="text" id="nama" name="nama">
            <br>
            <label for="email">Email:</label>
            <input type="text" id="email" name="email">
            <br>
            <input type="submit" value="Submit">
        </form>
        <script>
            $(document).ready(function(){
                $("myForm").submit(function(event){
                    var nama = $("#nama").val();
                    var email = $("#email").val();
                    var valid = true;

                    if (nama === ""){
                        $("#nama-error").text("Nama harus diisi.");
                        valid = false;
                    } else {
                        $("#name-error").text("");
                    }

                    if (email === ""){
                        $("#email-error").text("Email harus diisi.");
                        valid = false;
                    } else {
                        $("#email-error").text("");
                    }

                    if (!valid){
                        (event.preventDefault());
                    }

                    // Mengumpulkan data form
                    var formData = $("#myForm") .serialize();

                    // kirim data ke server PHP
                    $.ajax({
                        url : "proses_validasi.php",
                        type : "POST",
                        data :formData,
                        success :function (response) {
                            // Tampilkan hasil dari server di div "hasil"
                            $("#hasil").html(response);
                        }
                    })
                });
            });
        </script>
    </body>
</html>