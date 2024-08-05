<?php
include '../koneksi.php';
$username = $_POST['username'];
$password = $_POST['password'];

// Hindari SQL injection dengan menggunakan escaping
$username = mysqli_real_escape_string($koneksi, $username);

// Query untuk mengambil data user berdasarkan username
$user_query = "SELECT * FROM user WHERE username='$username'";
$user_result = mysqli_query($koneksi, $user_query);

// Cek apakah ada data yang sesuai
if (mysqli_num_rows($user_result) > 0) {
    $data = mysqli_fetch_array($user_result);
    
    // Verifikasi password yang di-hash
    if (password_verify($password, $data['password'])) {
        session_start();
        $_SESSION['id_admin'] = $data['id_admin'];
        $_SESSION['username'] = $data['username'];
        $_SESSION['nama_lengkap'] = $data['nama_lengkap'];
        $_SESSION['foto'] = $data['foto'];
        
        echo "<script>
        alert('login berhasil');
        window.location.href='../?page=artikel/index';
        </script>";
    } else {
        echo "<script>
        alert('username atau password salah');
        window.location.href='index.php';
        </script>";
    }
} else {
    echo "<script>
    alert('username atau password salah');
    window.location.href='index.php';
    </script>";
}

mysqli_close($koneksi);
?>
