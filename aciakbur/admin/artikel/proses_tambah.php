<?php
session_start();
include '../koneksi.php';

// $id_kategori = $_POST['id_kategori'];
$id_admin = $_SESSION['id_admin'];
$judul_artikel = $_POST ['judul_artikel'];
$isi_artikel = $_POST ['isi_artikel'];
$date = date('Y-m-d');

$slug2=preg_replace("/\s/","-",$judul_artikel);
$slug1=strtolower($slug2);
$slug = preg_replace("/[^a-zA-Z0-9 -]/","",$slug1);

$isi_artikel = mysqli_real_escape_string($koneksi, $isi_artikel);

// $slug = str_replace('+','-', urlencode($nama_produk));

//ambil data file
$namafile = $_FILES['gambar_artikel']['name'];
$namaSementara = $_FILES['gambar_artikel']['tmp_name'];
//pindahkan file

$terupload = move_uploaded_file($namaSementara, '../assets/images/artikel/' . $namafile);

$tambah = mysqli_query($koneksi, "INSERT INTO artikel (id_admin,judul_artikel,isi_artikel,tanggal_artikel,gambar_artikel,slug) 
VALUES ('$id_admin','$judul_artikel','$isi_artikel','$date','$namafile','$slug')");

if ($tambah){
    echo "<script>
    alert ('data berhasil ditambahkan')
    window.location.href='../?page=artikel/index'
    </script>";
   }   else {
        echo "<script>
        alert ('data gagal ditambahkan')
        window.location.href='../?page=artikel/index'
        </script>";
    }

?>