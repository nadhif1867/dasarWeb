<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=2">
        <title></title>
    </head>
    <body>
        <?php
            $Dosen = [
                'nama' => 'Elok Nur Hamdana',
                'domisili' => 'Malang',
                'jenis_kelamin' => 'Perempuan'
            ];

            
            echo "Nama : {$Dosen ['nama']} <br>";
            echo "Domisili : {$Dosen ['domisili']} <br>";
            echo "Jenis Kelamin : {$Dosen ['jenis_kelamin']}";

        ?>

            
        <br><br><br>
        
        <table border="1" height="100%" width="40%" cellpadding="2" cellspacing="0">
            <tr>
                <td colspan="2" align="center">INFORMASI DOSEN</td>
            </tr>
            <tr>
                <td>Nama</td>
                <td><?php echo $Dosen ['nama']?></td>
            </tr>
            <tr>
                <td>Domisili</td>
                <td><?php echo $Dosen ['domisili']?></td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td><?php echo $Dosen ['jenis_kelamin']?></td>
            </tr>
        </table>
    </body>
</html>