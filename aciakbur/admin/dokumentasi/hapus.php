<?php
include '../koneksi.php';

$id_foto = $_GET['id_foto'];

$hapus = mysqli_query($koneksi, "DELETE FROM dokumentasi WHERE id_foto='$id_foto'");

if($hapus){
	echo "<script>
			alert ('data berhasil dihapus');
			window.location.href='../?page=dokumentasi/index';
			</script>";
}else {
	echo "<script>
			alert ('data gagal dihapus');
			window.location.href='../?page=dokumentasi/index';
			</script>";
}
?>