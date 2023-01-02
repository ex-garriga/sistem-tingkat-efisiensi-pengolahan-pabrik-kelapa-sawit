-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 04 Mar 2022 pada 16.15
-- Versi server: 10.4.22-MariaDB
-- Versi PHP: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `multi-user`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `aplikasi`
--

CREATE TABLE `aplikasi` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama_owner` varchar(100) DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `tlp` varchar(50) DEFAULT NULL,
  `title` varchar(20) DEFAULT NULL,
  `nama_aplikasi` varchar(100) DEFAULT NULL,
  `logo` varchar(100) DEFAULT NULL,
  `copy_right` varchar(50) DEFAULT NULL,
  `versi` varchar(20) DEFAULT NULL,
  `tahun` year(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `aplikasi`
--

INSERT INTO `aplikasi` (`id`, `nama_owner`, `alamat`, `tlp`, `title`, `nama_aplikasi`, `logo`, `copy_right`, `versi`, `tahun`) VALUES
(1, 'Gariga', 'Aceh Singkil, Aceh, Indonesia', '081370572389', 'DMU Perusahaan', 'DMU Perusahaan', 'AdminLTELogo1.png', 'Copy Right &copy;', NULL, 2022);

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_dmu`
--

CREATE TABLE `data_dmu` (
  `id_dmu` int(100) NOT NULL,
  `nama_dmu` varchar(100) NOT NULL,
  `jenis_pabrik` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `data_dmu`
--

INSERT INTO `data_dmu` (`id_dmu`, `nama_dmu`, `jenis_pabrik`, `alamat`) VALUES
(4, 'PT. PERKEBUNAN LEMBAH BHAKTI I', 'HORIZONTAL', 'Telaga Bakti, Singkil Utara'),
(5, 'PT. PERKEBUNAN LEMBAH BHAKTI II', 'OBLIGE', 'Mukti Jaya, Singkohor'),
(6, 'PT. SINGKIL SEJAHTERA MAKMUR', 'HORIZONTAL', 'Silatong, Simpang Kanan'),
(7, 'PT. DELIMA MAKMUR', 'KONVENSIONAL', 'Telaga Bakti, Singkil Utara'),
(8, 'PT. RUNDING PUTRA PERSADA', 'VERTIKAL', 'Serasah, Simpang Kanan'),
(9, 'PT. SOCFINDO', 'COUNTINIOUS', 'Lae Butar, Gunung Meriah'),
(10, 'PT. NAFASINDO', 'KONVENSIONAL', 'Butar, Kuta Baharu'),
(11, 'PT. ENSEM LESTARI', 'COUNTINIOUS', 'Kuta Tinggi, Simpang Kanan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_variabel`
--

CREATE TABLE `data_variabel` (
  `id` int(100) NOT NULL,
  `kode_variabel` varchar(100) NOT NULL,
  `tipe_variabel` varchar(100) NOT NULL,
  `nama_variabel` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `data_variabel`
--

INSERT INTO `data_variabel` (`id`, `kode_variabel`, `tipe_variabel`, `nama_variabel`) VALUES
(2, 'V1', 'OUTPUT', 'PRODUKSI CPO'),
(3, 'V2', 'OUTPUT', 'PRODUKSI KERNEL'),
(4, 'U1', 'INPUT', 'JUMLAH KARYAWAN'),
(5, 'U2', 'INPUT', 'KAPASITAS PRODUKSI'),
(6, 'U3', 'INPUT', 'TBS MASUK');

-- --------------------------------------------------------

--
-- Struktur dari tabel `hasil`
--

CREATE TABLE `hasil` (
  `id_hasil` int(11) NOT NULL,
  `nama_dmu` varchar(100) NOT NULL,
  `efisiensi` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `hasil`
--

INSERT INTO `hasil` (`id_hasil`, `nama_dmu`, `efisiensi`, `status`) VALUES
(2, 'PT. PERKEBUNAN LEMBAH BHAKTI I', '0.8934275\n', 'BELUM EFISIEN'),
(3, 'PT. PERKEBUNAN LEMBAH BHAKTI II', '0.8411532\n', 'BELUM EFISIEN'),
(4, 'PT. SINGKIL SEJAHTERA MAKMUR', '0.8734707\n', 'BELUM EFISIEN'),
(5, 'PT. DELIMA MAKMUR', '1.0000000\n', 'SUDAH EFISIEN'),
(6, 'PT. RUNDING PUTRA PERSADA', '1.0000000', 'SUDAH EFISIEN'),
(7, 'PT. SOCFINDO', '1.0000000', 'SUDAH EFISIEN'),
(8, 'PT. NAFASINDO', '0.8775411', 'BELUM EFISIEN'),
(9, 'PT. ENSEM LESTARI', '0.7923516', 'BELUM EFISIEN');

-- --------------------------------------------------------

--
-- Struktur dari tabel `nilai`
--

CREATE TABLE `nilai` (
  `id_nilai` int(100) NOT NULL,
  `nama_dmu` varchar(100) NOT NULL,
  `jumlah_karyawan` int(100) NOT NULL,
  `shiff_kerja` int(100) NOT NULL,
  `kapasitas_produksi` varchar(100) NOT NULL,
  `tbs_masuk` varchar(100) NOT NULL,
  `produksi_cpo` varchar(100) NOT NULL,
  `produksi_karnel` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `nilai`
--

INSERT INTO `nilai` (`id_nilai`, `nama_dmu`, `jumlah_karyawan`, `shiff_kerja`, `kapasitas_produksi`, `tbs_masuk`, `produksi_cpo`, `produksi_karnel`) VALUES
(1, 'PLB 1', 52, 2, '45', '241.744', '44.769', '9.317'),
(2, 'PLB II', 32, 2, '45', '195.411', '35.044', '8.523'),
(3, 'SMM', 46, 2, '30', '163.928', '29.106', '6.942'),
(4, 'DM', 47, 2, '30', '216.293', '41.679', '10.220'),
(5, 'RPP', 43, 2, '45', '168.126', '34.370', '13.395'),
(6, 'SOCFINDO', 54, 2, '23', '94.940', '21.317', '3.737'),
(7, 'NAFASINDO', 47, 2, '30', '117.467', '23.110', '4.128'),
(8, 'ENSEM', 34, 2, '30', '94.436', '16.445', '3.659');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_akses_menu`
--

CREATE TABLE `tbl_akses_menu` (
  `id` int(11) NOT NULL,
  `id_level` int(11) NOT NULL,
  `id_menu` int(11) NOT NULL,
  `view_level` enum('Y','N') DEFAULT 'N'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_akses_menu`
--

INSERT INTO `tbl_akses_menu` (`id`, `id_level`, `id_menu`, `view_level`) VALUES
(1, 1, 1, 'Y'),
(2, 1, 2, 'Y'),
(43, 4, 1, 'Y'),
(44, 4, 2, 'N'),
(64, 1, 52, 'Y'),
(65, 4, 52, 'N'),
(67, 1, 52, 'Y'),
(68, 4, 52, 'N'),
(70, 1, 52, 'Y'),
(71, 4, 52, 'N'),
(73, 1, 52, 'Y'),
(74, 4, 52, 'N'),
(76, 1, 56, 'Y'),
(77, 4, 56, 'Y'),
(79, 1, 57, 'Y'),
(80, 4, 57, 'Y'),
(82, 1, 58, 'Y'),
(83, 4, 58, 'Y'),
(85, 1, 59, 'Y'),
(86, 4, 59, 'Y');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_akses_submenu`
--

CREATE TABLE `tbl_akses_submenu` (
  `id` int(11) UNSIGNED NOT NULL,
  `id_level` int(11) NOT NULL,
  `id_submenu` int(11) NOT NULL,
  `view_level` enum('Y','N') DEFAULT 'N',
  `add_level` enum('Y','N') DEFAULT 'N',
  `edit_level` enum('Y','N') DEFAULT 'N',
  `delete_level` enum('Y','N') DEFAULT 'N',
  `print_level` enum('Y','N') DEFAULT 'N',
  `upload_level` enum('Y','N') DEFAULT 'N'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_akses_submenu`
--

INSERT INTO `tbl_akses_submenu` (`id`, `id_level`, `id_submenu`, `view_level`, `add_level`, `edit_level`, `delete_level`, `print_level`, `upload_level`) VALUES
(2, 1, 2, 'Y', 'Y', 'Y', 'Y', 'Y', 'Y'),
(4, 1, 1, 'Y', 'Y', 'Y', 'Y', 'Y', 'Y'),
(6, 1, 7, 'Y', 'Y', 'Y', 'Y', 'Y', 'Y'),
(7, 1, 8, 'Y', 'Y', 'Y', 'Y', 'Y', 'Y'),
(9, 1, 10, 'Y', 'Y', 'Y', 'Y', 'Y', 'Y'),
(13, 1, 14, 'Y', 'Y', 'Y', 'Y', 'Y', 'Y'),
(26, 1, 15, 'Y', 'Y', 'Y', 'Y', 'Y', 'Y'),
(30, 1, 17, 'Y', 'Y', 'Y', 'Y', 'Y', 'Y'),
(32, 1, 18, 'Y', 'Y', 'Y', 'Y', 'Y', 'Y'),
(34, 1, 19, 'Y', 'Y', 'Y', 'Y', 'Y', 'Y'),
(36, 1, 20, 'Y', 'Y', 'Y', 'Y', 'Y', 'Y'),
(59, 4, 1, 'N', 'N', 'N', 'N', 'N', 'N'),
(60, 4, 2, 'N', 'N', 'N', 'N', 'N', 'N'),
(61, 4, 7, 'N', 'N', 'N', 'N', 'N', 'N'),
(62, 4, 8, 'N', 'N', 'N', 'N', 'N', 'N'),
(63, 4, 10, 'N', 'N', 'N', 'N', 'N', 'N'),
(64, 4, 15, 'N', 'N', 'N', 'N', 'N', 'N'),
(65, 4, 17, 'N', 'N', 'N', 'N', 'N', 'N'),
(66, 4, 18, 'N', 'N', 'N', 'N', 'N', 'N'),
(67, 4, 19, 'N', 'N', 'N', 'N', 'N', 'N'),
(68, 4, 20, 'N', 'N', 'N', 'N', 'N', 'N'),
(82, 1, 23, 'Y', 'N', 'N', 'N', 'N', 'N'),
(83, 4, 23, 'Y', 'Y', 'Y', 'Y', 'Y', 'Y'),
(85, 1, 24, 'Y', 'N', 'N', 'N', 'N', 'N'),
(86, 4, 24, 'Y', 'Y', 'Y', 'Y', 'Y', 'Y'),
(88, 1, 25, 'Y', 'N', 'N', 'N', 'N', 'N'),
(89, 4, 25, 'Y', 'Y', 'Y', 'Y', 'Y', 'Y');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_menu`
--

CREATE TABLE `tbl_menu` (
  `id_menu` int(11) NOT NULL,
  `nama_menu` varchar(50) DEFAULT NULL,
  `link` varchar(100) DEFAULT NULL,
  `icon` varchar(50) DEFAULT NULL,
  `urutan` bigint(11) DEFAULT NULL,
  `is_active` enum('Y','N') DEFAULT 'Y',
  `parent` enum('Y') DEFAULT 'Y'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_menu`
--

INSERT INTO `tbl_menu` (`id_menu`, `nama_menu`, `link`, `icon`, `urutan`, `is_active`, `parent`) VALUES
(1, 'Dashboard', 'dashboard', 'fas fa-tachometer-alt', 1, 'Y', 'Y'),
(2, 'System', '#', 'fas fa-cogs', 2, 'Y', 'Y'),
(56, 'Data Master', '#', 'fas fa-book', 3, 'Y', 'Y'),
(57, 'Analisis DEA', 'analisa', 'fas fa-tasks', 4, 'Y', 'Y'),
(58, 'Hasil Analisa', 'hasil', 'fas fa-calculator', 5, 'Y', 'Y'),
(59, 'Laporan', 'nilai/word', 'fas fa-fax', 6, 'Y', 'Y');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_submenu`
--

CREATE TABLE `tbl_submenu` (
  `id_submenu` int(11) UNSIGNED NOT NULL,
  `nama_submenu` varchar(50) DEFAULT NULL,
  `link` varchar(100) DEFAULT NULL,
  `icon` varchar(50) DEFAULT NULL,
  `id_menu` int(11) DEFAULT NULL,
  `is_active` enum('Y','N') DEFAULT 'Y'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_submenu`
--

INSERT INTO `tbl_submenu` (`id_submenu`, `nama_submenu`, `link`, `icon`, `id_menu`, `is_active`) VALUES
(1, 'Menu', 'menu', 'far fa-circle', 2, 'Y'),
(2, 'SubMenu', 'submenu', 'far fa-circle', 2, 'Y'),
(7, 'Aplikasi', 'aplikasi', 'far fa-circle', 2, 'Y'),
(8, 'User', 'user', 'far fa-circle', 2, 'Y'),
(10, 'User Level', 'userlevel', 'far fa-circle', 2, 'Y'),
(15, 'Barang', 'barang', 'far fa-circle', 32, 'Y'),
(17, 'Kategori', 'kategori', 'far fa-circle', 32, 'Y'),
(18, 'Satuan', 'satuan', 'far fa-circle', 32, 'Y'),
(19, 'Pembelian', 'pembelian', 'far fa-circle', 41, 'Y'),
(20, 'Penjualan', 'penjualan', 'far fa-circle', 41, 'Y'),
(23, 'Data Variabel', 'data_variabel', 'fas fa-minus', 56, 'Y'),
(24, 'Data DMU', 'data_dmu', 'fas fa-minus', 56, 'Y'),
(25, 'Nilai', 'nilai', 'fas fa-minus', 56, 'Y');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id_user` int(11) UNSIGNED NOT NULL,
  `username` varchar(20) DEFAULT NULL,
  `full_name` varchar(50) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `id_level` int(11) DEFAULT NULL,
  `image` varchar(500) DEFAULT NULL,
  `is_active` enum('Y','N') DEFAULT 'Y'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_user`
--

INSERT INTO `tbl_user` (`id_user`, `username`, `full_name`, `password`, `id_level`, `image`, `is_active`) VALUES
(1, 'admin', 'Administrator', '$2y$05$3oQlxl8wMGd8VecO4nFXre3SjeHWqFN79oMy/.pdEj5Q89xopj4oi', 1, 'admin1.jpg', 'Y'),
(10, 'ariga', 'MUZAFFAR RIGAYATSYAH', '$2y$05$Z1gBN9NXp8GSfs/8G1RX/uQs4HfKvI.C1epQCnMZSYLFNtUEGaqCS', 4, 'ariga.jpeg', 'Y');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_userlevel`
--

CREATE TABLE `tbl_userlevel` (
  `id_level` int(11) UNSIGNED NOT NULL,
  `nama_level` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_userlevel`
--

INSERT INTO `tbl_userlevel` (`id_level`, `nama_level`) VALUES
(1, 'admin'),
(4, 'administrator');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `aplikasi`
--
ALTER TABLE `aplikasi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `data_dmu`
--
ALTER TABLE `data_dmu`
  ADD PRIMARY KEY (`id_dmu`);

--
-- Indeks untuk tabel `data_variabel`
--
ALTER TABLE `data_variabel`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `hasil`
--
ALTER TABLE `hasil`
  ADD PRIMARY KEY (`id_hasil`);

--
-- Indeks untuk tabel `nilai`
--
ALTER TABLE `nilai`
  ADD PRIMARY KEY (`id_nilai`);

--
-- Indeks untuk tabel `tbl_akses_menu`
--
ALTER TABLE `tbl_akses_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_akses_submenu`
--
ALTER TABLE `tbl_akses_submenu`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_menu`
--
ALTER TABLE `tbl_menu`
  ADD PRIMARY KEY (`id_menu`);

--
-- Indeks untuk tabel `tbl_submenu`
--
ALTER TABLE `tbl_submenu`
  ADD PRIMARY KEY (`id_submenu`);

--
-- Indeks untuk tabel `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indeks untuk tabel `tbl_userlevel`
--
ALTER TABLE `tbl_userlevel`
  ADD PRIMARY KEY (`id_level`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `aplikasi`
--
ALTER TABLE `aplikasi`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `data_dmu`
--
ALTER TABLE `data_dmu`
  MODIFY `id_dmu` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `data_variabel`
--
ALTER TABLE `data_variabel`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `hasil`
--
ALTER TABLE `hasil`
  MODIFY `id_hasil` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `nilai`
--
ALTER TABLE `nilai`
  MODIFY `id_nilai` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `tbl_akses_menu`
--
ALTER TABLE `tbl_akses_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=88;

--
-- AUTO_INCREMENT untuk tabel `tbl_akses_submenu`
--
ALTER TABLE `tbl_akses_submenu`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=91;

--
-- AUTO_INCREMENT untuk tabel `tbl_menu`
--
ALTER TABLE `tbl_menu`
  MODIFY `id_menu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT untuk tabel `tbl_submenu`
--
ALTER TABLE `tbl_submenu`
  MODIFY `id_submenu` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT untuk tabel `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id_user` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `tbl_userlevel`
--
ALTER TABLE `tbl_userlevel`
  MODIFY `id_level` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
