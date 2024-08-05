<?php
include '../koneksi.php';

$id_artikel = $_GET['id_artikel'];

$hapus = mysqli_query($koneksi, "DELETE FROM artikel WHERE id_artikel='$id_artikel'");

if($hapus){
	echo "<script>
			alert ('data berhasil dihapus');
			window.location.href='../?page=artikel/index';
			</script>";
}else {
	echo "<script>
			alert ('data gagal dihapus');
			window.location.href='../?page=artikel/index';
			</script>";
}
?>