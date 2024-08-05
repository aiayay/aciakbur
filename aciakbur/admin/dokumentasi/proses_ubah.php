<?php
include '../koneksi.php';

$id_foto = $_POST['id_foto'];
$keterangan = $_POST['keterangan'];

if($_FILES['foto']['name']==''){
    // jika gambar kosong
    $namafile= $_POST['foto_lama'];
}else{
    // ambil data file
    $namafile = $_FILES['foto']['name'];
    $namaSementara= $_FILES['foto']['tmp_name'];

    $terupload = move_uploaded_file($namaSementara, '../assets/images/dokumentasi/' . $namafile);
}

//ambil data file
// $namafile = $_FILES['foto']['name'];
// $namaSementara = $_FILES['foto']['tmp_name'];
//pindahkan file



$update = mysqli_query($koneksi, "UPDATE dokumentasi SET foto='$namafile', keterangan='$keterangan' WHERE id_foto='$id_foto'");

if ($update){
    echo "<script>
        alert ('data berhasil diubah')
        window.location.href='../?page=dokumentasi/index'
        </script>";
   }   else {
        echo "<script>
        alert ('data gagal diubah')
        window.location.href='../?page=dokumentasi/index'
        </script>";
    }

?>