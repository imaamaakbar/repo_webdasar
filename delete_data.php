<?php 
    require 'functions.php';
    auth();

    if(isset($_GET['id'])){
        $id =$_GET['id'];
        $sql="DELETE From surat_masuk where id=$id";
        $query = mysqli_query($conn,$sql);

        if($query){
            header("Location: show_data.php");
            
        }else{
            die("Gagal Hapus");
        }
    }
    else{
        die("Tidak ada data");
    }
?>