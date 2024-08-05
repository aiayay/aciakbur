<?php
include '../koneksi.php';

$id_admin = $_GET['id_admin'];

$hapus = mysqli_query($koneksi, "DELETE FROM user WHERE id_admin='$id_admin'");

if($hapus){
	echo "<script>
			alert ('data berhasil dihapus');
			window.location.href='../?page=user/index';
			</script>";
}else {
	echo "<script>
			alert ('data gagal dihapus');
			window.location.href='../?page=user/index';
			</script>";
}
?>