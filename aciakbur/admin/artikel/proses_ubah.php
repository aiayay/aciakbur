<?php
include '../koneksi.php';

$id_artikel = $_POST['id_artikel'];
$judul_artikel = $_POST ['judul_artikel'];
$isi_artikel = $_POST ['isi_artikel'];
$date = date('Y-m-d');

$slug2=preg_replace("/\s/","-",$judul_artikel);
$slug1=strtolower($slug2);
$slug = preg_replace("/[^a-zA-Z0-9 -]/","",$slug1);

$isi_artikel = mysqli_real_escape_string($koneksi, $isi_artikel);

if($_FILES['gambar_artikel']['name']==''){
    // jika gambar kosong
    $namafile= $_POST['foto_lama'];
}else{
    // ambil data file
    $namafile = $_FILES['gambar_artikel']['name'];
    $namaSementara= $_FILES['gambar_artikel']['tmp_name'];

    $terupload = move_uploaded_file($namaSementara, '../assets/images/artikel/' . $namafile);
}

// //ambil data file
// $namafile = $_FILES['foto']['name'];
// $namaSementara = $_FILES['foto']['tmp_name'];
// //pindahkan file



$update = mysqli_query($koneksi, "UPDATE artikel SET judul_artikel='$judul_artikel', isi_artikel='$isi_artikel', gambar_artikel='$namafile', slug='$slug' WHERE id_artikel='$id_artikel'");

if ($update){
    echo "<script>
        alert ('data berhasil diubah')
        window.location.href='../?page=artikel/index'
        </script>";
   }   else {
        echo "<script>
        alert ('data gagal diubah')
        window.location.href='../?page=artikel/ubah'
        </script>";
    }

?>