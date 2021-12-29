<?php 
    require 'functions.php';
    auth();
    if (isset($_POST['submit'])) {
        if(insert($_POST)){
        header('Location: show_data.php');
        }
    }
?>
<html>

<head>
    <title>Tambah Data</title>
</head>

<body>
    <div align ="center">
        <h1>Tambah Data</h1>
        <br>
        
        <form action="" method="POST">
            <table>
                <tr>
                    <td>Nomor Surat</td>
                    <td><input type="text" name="nomor_surat" required> <br></td>
                </tr>
                <tr>
                    <td>Judul Surat</td>
                    <td><input type="text" name="judul_surat" required> <br></td>
                </tr>
                <tr>
                    <td>Jenis Surat</td>
                    <td><input type="text" name="jenis_surat" required> <br></td>
                </tr>
                <tr>
                    <td>Tanggal Masuk</td>
                    <td><input type="date" name="tanggal_masuk" required> <br></td>
                </tr>
                <tr>
                    <td>Pengirim</td>
                    <td><input type="text" name="pengirim" required> <br></td>
                </tr>
                <tr>
                    <td>Penerima</td>
                    <td><input type="text" name="penerima" required> <br></td>
                </tr>
                <tr>
                    <td>Keterangan</td>
                    <td><input type="text" name="keterangan" required> <br></td>
                </tr>
                <tr>
                    <td>    </td>
                    <td><button type="submit" name="submit">Tambah Data</button></td>
                </tr>
            </table>
        </form>
    </div>
</body>

</html>