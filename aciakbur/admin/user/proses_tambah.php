<?php
include '../koneksi.php';

$username = $_POST['username'];
$password = $_POST ['password'];
$nama_lengkap = $_POST ['nama_lengkap'];


//ambil data file
$namafile = $_FILES['foto']['name'];
$namaSementara = $_FILES['foto']['tmp_name'];
//pindahkan file

$terupload = move_uploaded_file($namaSementara, '../assets/images/user/' . $namafile);

$password = password_hash($password, PASSWORD_DEFAULT);
$tambah = mysqli_query($koneksi, "INSERT INTO user (username, password, nama_lengkap, foto) 
VALUES ('$username', '$password', '$nama_lengkap', '$namafile')");

if ($tambah){
    echo "<script>
    alert ('data berhasil ditambahkan')
    window.location.href='../?page=user/index'
    </script>";
   }   else {
        echo "<script>
        alert ('data gagal ditambahkan')
        window.location.href='../?page=user/tambah'
        </script>";
    }

?>