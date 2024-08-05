-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 05 Agu 2024 pada 10.05
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbprofile`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `artikel`
--

CREATE TABLE `artikel` (
  `id_artikel` int(11) NOT NULL,
  `id_admin` int(11) NOT NULL,
  `judul_artikel` varchar(100) NOT NULL,
  `isi_artikel` text NOT NULL,
  `tanggal_artikel` date NOT NULL,
  `gambar_artikel` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `artikel`
--

INSERT INTO `artikel` (`id_artikel`, `id_admin`, `judul_artikel`, `isi_artikel`, `tanggal_artikel`, `gambar_artikel`, `slug`) VALUES
(16, 10, 'Suhatri Bur: Sosok Pemimpin Visioner yang Dicintai Masyarakat Padang Pariaman', '<p>Padang Pariaman, Harian Indonesia. id-&nbsp;</p><p>Nama Suhatri Bur kini menjadi simbol kepemimpinan yang visioner dan penuh dedikasi di Kabupaten Padang Pariaman.&nbsp;</p><p>Sebagai Bupati, Suhatri Bur telah berhasil membawa berbagai perubahan positif yang dirasakan langsung oleh masyarakat setempat.&nbsp;</p><p>Ketokohan Suhatri Bur tidak hanya diakui oleh para pejabat pemerintahan, tetapi juga mendapatkan tempat istimewa di hati masyarakat Padang Pariaman.&nbsp;</p><p>Sejak awal masa jabatannya, Suhatri Bur menunjukkan komitmen yang kuat untuk membangun daerahnya. Berbagai program pembangunan infrastruktur, pendidikan, kesehatan, dan ekonomi dijalankan dengan sukses di bawah kepemimpinannya.&nbsp;</p><p>Salah satu pencapaian terbesar Suhatri Bur adalah perbaikan jalan-jalan utama di Padang Pariaman, yang sebelumnya sering dikeluhkan oleh masyarakat karena kondisinya yang rusak parah.&nbsp;</p><p>Selain itu, peningkatan fasilitas kesehatan dan pendidikan juga menjadi prioritas utama, sehingga akses masyarakat terhadap layanan dasar semakin baik.&nbsp;</p><p>Di bidang ekonomi, Suhatri Bur mendorong pengembangan usaha mikro, kecil, dan menengah (UMKM) sebagai tulang punggung perekonomian daerah.&nbsp;</p><p>Berbagai pelatihan dan bantuan modal diberikan kepada para pelaku UMKM, sehingga mereka mampu berkembang dan menciptakan lapangan kerja baru.&nbsp;</p><p>Hal ini berdampak positif pada penurunan angka pengangguran dan peningkatan kesejahteraan masyarakat. Masyarakat Padang Pariaman memuji gaya kepemimpinan Suhatri Bur yang merakyat dan terbuka terhadap aspirasi warganya.&nbsp;</p><p>Suhatri Bur sering turun langsung ke lapangan, mendengarkan keluhan dan masukan dari masyarakat, serta mencari solusi terbaik bagi permasalahan yang dihadapi.&nbsp;</p><p>Sikap rendah hati dan kepedulian yang tulus membuatnya semakin dicintai oleh masyarakat. Tidak hanya itu, Suhatri Bur juga dikenal sebagai sosok yang menjunjung tinggi nilai-nilai budaya dan adat istiadat Minangkabau.&nbsp;</p><p>Ia aktif dalam berbagai kegiatan kebudayaan dan selalu berusaha melestarikan tradisi yang ada. Hal ini membuatnya dihormati tidak hanya sebagai pemimpin, tetapi juga sebagai tokoh adat yang bijaksana.&nbsp;</p><p>Ketokohan Suhatri Bur di mata masyarakat Padang Pariaman adalah bukti nyata bahwa seorang pemimpin yang visioner, bekerja keras, dan peduli terhadap rakyatnya dapat membawa perubahan yang signifikan.&nbsp;</p><p>Dengan berbagai prestasi dan dedikasi yang ditunjukkannya, Suhatri Bur layak menjadi panutan bagi para pemimpin daerah lainnya di Indonesia.&nbsp;</p><p>Sebagai penutup, masa depan Padang Pariaman di bawah kepemimpinan Suhatri Bur terlihat cerah dan penuh harapan.&nbsp;</p><p>Masyarakat berharap agar Suhatri Bur terus melanjutkan kinerjanya yang gemilang dan membawa Kabupaten Padang Pariaman menuju kemajuan yang lebih besar.</p>', '2024-08-03', 'PKP_1177.JPG', 'suhatri-bur-sosok-pemimpin-visioner-yang-dicintai-masyarakat-padang-pariaman'),
(17, 10, 'Lorem Ipsum', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.&nbsp;</p><p>Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.&nbsp;</p><p>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.&nbsp;</p><p>It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.&nbsp;</p><p>Why do we use it? It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.&nbsp;</p><p>The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English.&nbsp;</p><p>Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy.&nbsp;</p><p>Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>', '2024-08-04', 'PKP_9258.JPG', 'lorem-ipsum'),
(18, 10, 'Lorem Ipsum', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.&nbsp;</p><p>Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.&nbsp;</p><p>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.&nbsp;</p><p>It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.&nbsp;</p><p>Why do we use it? It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.&nbsp;</p><p>The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English.&nbsp;</p><p>Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy.&nbsp;</p><p>Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>', '2024-08-04', 'PKP_9343.JPG', 'lorem-ipsum'),
(19, 10, 'Lorem Ipsum', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.&nbsp;</p><p>Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.&nbsp;</p><p>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.&nbsp;</p><p>It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.&nbsp;</p><p>Why do we use it? It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.&nbsp;</p><p>The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English.&nbsp;</p><p>Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy.&nbsp;</p><p>Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>', '2024-08-04', 'PKP_9453.JPG', 'lorem-ipsum');

-- --------------------------------------------------------

--
-- Struktur dari tabel `dokumentasi`
--

CREATE TABLE `dokumentasi` (
  `id_foto` int(11) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `dokumentasi`
--

INSERT INTO `dokumentasi` (`id_foto`, `foto`, `keterangan`) VALUES
(26, 'PKP_9683.jpg', 'Foto 1'),
(27, 'PKP_9484.jpg', 'Foto 2'),
(28, 'PKP_9388.jpg', 'Foto 3'),
(29, 'PKP_9356.jpg', 'Foto 4'),
(30, 'PKP_2322.jpg', 'Foto 5'),
(31, 'PKP_2127.jpg', 'Foto 6'),
(32, 'PKP_1257.jpg', 'Foto 7'),
(33, 'PKP_1177.jpg', 'Foto 8'),
(34, 'PKP_1134.jpg', 'Foto 9'),
(35, 'PKP_1031.jpg', 'Foto 10'),
(36, 'PKP_0934.jpg', 'Foto 11'),
(37, 'PKP_0820.jpg', 'Foto 12'),
(38, 'PKP_0667.jpg', 'Foto 13');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_admin`, `username`, `password`, `nama_lengkap`, `foto`) VALUES
(10, 'admin', '$2y$10$LCycRSwglfIa19gcTGCY7uD.OYJ71HXa..Tq6r2M4CpSPXF9wRLJG', 'admin', '20230321_132225-transformed.png');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`id_artikel`);

--
-- Indeks untuk tabel `dokumentasi`
--
ALTER TABLE `dokumentasi`
  ADD PRIMARY KEY (`id_foto`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_admin`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `artikel`
--
ALTER TABLE `artikel`
  MODIFY `id_artikel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT untuk tabel `dokumentasi`
--
ALTER TABLE `dokumentasi`
  MODIFY `id_foto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
