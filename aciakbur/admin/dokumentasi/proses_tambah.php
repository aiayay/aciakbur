<?php
include '../koneksi.php';

$keterangan = $_POST['keterangan'];

//ambil data file
$namafile = $_FILES['foto']['name'];
$namaSementara = $_FILES['foto']['tmp_name'];
//pindahkan file

$terupload = move_uploaded_file($namaSementara, '../assets/images/dokumentasi/' . $namafile);

$tambah = mysqli_query($koneksi, "INSERT INTO dokumentasi (foto,keterangan) 
VALUES ('$namafile','$keterangan')");

if ($tambah){
    echo "<script>
    alert ('data berhasil ditambahkan')
    window.location.href='../?page=dokumentasi/index'
    </script>";
   }   else {
        echo "<script>
        alert ('data gagal ditambahkan')
        window.location.href='../?page=dokumentasi/index'
        </script>";
    }

?>