<?php
    $conn = mysqli_connect("localhost", "root", "", "UAP");
    function insert($data){
        global $conn;
        $nomor_surat = $data['nomor_surat'];
        $judul_surat = $data['judul_surat'];
        $jenis_surat = $data['jenis_surat'];
        $tanggal_masuk = $data['tanggal_masuk'];
        $pengirim = $data['pengirim'];
        $penerima = $data['penerima'];
        $keterangan = $data['keterangan'];
        $query = "INSERT INTO surat_masuk VALUES ('', '$nomor_surat', '$judul_surat', '$jenis_surat','$tanggal_masuk','$pengirim','$penerima','$keterangan')";
        
        if(mysqli_query($conn,$query)){
            return true;
            echo "New Record create success";
        }
        else{
            return false;
            echo "Error: ".$query."<br>".mysqli_error($conn);
        }
    }


    function updatedata($data){
        global $conn;

        $id = $data['id'];
        $nomor_surat = $data['nomor_surat'];
        $judul_surat = $data['judul_surat'];
        $jenis_surat = $data['jenis_surat'];
        $tanggal_masuk = $data['tanggal_masuk'];
        $pengirim = $data['pengirim'];
        $penerima = $data['penerima'];
        $keterangan = $data['keterangan'];

        $sql ="UPDATE surat_masuk SET nomor_surat='$nomor_surat', judul_surat='$judul_surat',jenis_surat='$jenis_surat',tanggal_masuk='$tanggal_masuk', pengirim='$pengirim', penerima = '$penerima', keterangan = '$keterangan' WHERE id=$id ";
        
        mysqli_query($conn,$sql);
        if(mysqli_query($conn,$sql)){
            return true;
            echo " Record with $id success";
         }
        else{
            return false;
            echo "Error: ".$sql."<br>".mysqli_error($conn);
         }
    }

    function show($query){
        global $conn;
        $result = mysqli_query($conn,$query);
        $rows = [];
        while ($row = mysqli_fetch_assoc($result)){
            $rows[] = $row;
        }
        return $rows;
    }

    function check_login($data_login){
        $query = "SELECT * FROM accounts";
        $account= show($query);
        foreach ($account as $acc ){
            if($data_login['username'] == $acc['username'] && $data_login['password'] == $acc["password"]) {
                session_start();
                $_SESSION["username"] = $data_login['username'];
                $_SESSION["password"] = $data_login['password'];
                return true;
            }
        }    
    }
    function auth(){
        session_start();
        if(!isset($_SESSION["username"]) && !isset($_SESSION["password"] )) {
            header("Location: login.php");
        }
        

    }

    function logout(){
        session_start();
        unset($_SESSION['username']);
        unset($_SESSION['password']);
        session_destroy();
        header("Location: index.php");
    }
?>