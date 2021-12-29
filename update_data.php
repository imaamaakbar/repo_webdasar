<?php 
    require 'functions.php';
    auth();
    
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $sql = "SELECT * FROM surat_masuk WHERE id =$id";
        $data = show($sql);
    }
    else{
        die("Tidak Ada");
    }
    if(isset($_POST['submit'])){
       if( updatedata($_POST)){
           header('Location : show_data.php');
           exit;
       }; 

    }
?>

<html>

<head>
    <title>Update Data</title>
</head>

<body>
    <div align ="center">
        <h1>Update Data</h1>
        <br>
        <form action="" method="POST">
            <input type="hidden" name="id" value="<?=$id?>"
            <table>
            <tr>
                    <td>Nomor Surat</td>
                    <td><input type="text" name="nomor_surat" value ="<?= $data[0]['nomor_surat']?>" > <br></td>
                </tr>
                <tr>
                    <td>Judul Surat</td>
                    <td><input type="text" name="judul_surat" value ="<?= $data[0]['judul_surat']?>"> <br></td>
                </tr>
                <tr>
                    <td>Jenis Surat</td>
                    <td><input type="text" name="jenis_surat" value ="<?= $data[0]['jenis_surat']?>"> <br></td>
                </tr>
                <tr>
                    <td>Tanggal Masuk</td>
                    <td><input type="date" name="tanggal_masuk" value ="<?= $data[0]['tanggal_masuk']?>"> <br></td>
                </tr>
                <tr>
                    <td>Pengirim</td>
                    <td><input type="text" name="pengirim" value ="<?= $data[0]['pengirim']?>"> <br></td>
                </tr>
                <tr>
                    <td>Penerima</td>
                    <td><input type="text" name="penerima" value ="<?= $data[0]['penerima']?>" > <br></td>
                </tr>
                <tr>
                    <td>Keterangan</td>
                    <td><input type="text" name="keterangan" value ="<?= $data[0]['keterangan']?>"> <br></td>
                </tr>
                <tr>
                    <td>    </td>
                    <td><button type="submit" name="submit">Update Data</button></td>
                </tr>
            </table>
        </form>
    </div>
</body>

</html>