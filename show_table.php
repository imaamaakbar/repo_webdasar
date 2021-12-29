<?php 
    require 'functions.php';
    auth();
    $query = "SELECT * FROM surat_masuk";
    $surat_masuk = show($query);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div align="center">
            <h2>Daftar Surat Masuk</h2>
            <br>
            <table border="1" cellspacing="0" cellpadding="10">
                <tr>
                    <th>No.</th>
                    <th>Nomor Surat</th>
                    <th>Judul Surat</th>
                    <th>Jenis Surat</th>
                    <th>Tanggal Masuk</th>
                </tr>
                <?php $nomor = 1?>
                <?php foreach ($surat_masuk as $sm ):?>
                <tr>
                    <td><?=$nomor;?></td>
                    <td><?=$sm['nomor_surat'];?></td>
                    <td><?=$sm['judul_surat'];?></td>
                    <td><?=$sm['jenis_surat'];?></td>
                    <td><?=$sm['tanggal_masuk'];?></td>
                        
                    <?php $nomor = $nomor+1;
                    if($nomor == 11){
                        break;
                    }
                    ?>

                </tr>
                <?php endforeach; ?>
            </table>
    </div>
</body>
</html>
