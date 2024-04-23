<!DOCTYPE html>
<html>
    <head>
        <title>html_aman</title>
    </head>
    <body>
        <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST"){
                $input = $_POST['input'];
                $input = htmlspecialchars($input, ENT_QUOTES, 'UTF-8');

                echo "Nama: ". $input ."<br>";

                $email = $_POST["email"];
                if (filter_var($email, FILTER_VALIDATE_EMAIL)){
                    echo "Nama: ". $email;
                } else {
                    echo "error";
                }
            }
        ?>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
        <label for="input">Masukkan Input:</label>
        <input type="text" id="input" name="input" required><br><br>

        <label for="email">Masukkan Email:</label>
        <input type="text" name="email" id="email" required><br><br>

        <input type="submit" name="submit" value="Submit">
    </form>
    </body>
</html>