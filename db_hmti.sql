-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 17, 2019 at 11:31 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_hmti`
--

-- --------------------------------------------------------

--
-- Table structure for table `berita_acara`
--

CREATE TABLE `berita_acara` (
  `id` int(11) NOT NULL,
  `nama_acara` varchar(128) NOT NULL,
  `arsip` varchar(128) NOT NULL,
  `tanggal_acara` date NOT NULL,
  `keterangan` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id` int(11) NOT NULL,
  `nama_menu` varchar(128) NOT NULL,
  `icon` varchar(128) NOT NULL,
  `link` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id`, `nama_menu`, `icon`, `link`) VALUES
(1, 'Profil', 'fas fa-fw fa-user', 'user'),
(2, 'Surat Keluar', 'far fa-fw fa-circle', 'surat_keluar'),
(3, 'Surat masuk', 'far fa-fw fa-circle', 'surat_masuk'),
(4, 'Uang Keluar', 'far fa-fw fa-circle', 'uang_keluar'),
(5, 'Uang masuk', 'far fa-fw fa-circle', 'uang_masuk'),
(7, 'Berita acara', 'far fa-fw fa-circle', 'berita_acara'),
(8, 'Logout', 'fas fa-fw fa-sign-out-alt', 'auth/logout');

-- --------------------------------------------------------

--
-- Table structure for table `surat_keluar`
--

CREATE TABLE `surat_keluar` (
  `id` int(11) NOT NULL,
  `no_surat` varchar(128) NOT NULL,
  `tujuan` varchar(128) NOT NULL,
  `perihal` varchar(128) NOT NULL,
  `arsip` varchar(128) NOT NULL,
  `tanggal_dikirim` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `surat_keluar`
--

INSERT INTO `surat_keluar` (`id`, `no_surat`, `tujuan`, `perihal`, `arsip`, `tanggal_dikirim`) VALUES
(19, '01/HMTI/III/2019', 'Dekan FT Universitas Maritim Raja Ali Haji', 'Permohon Surat Keputusan (SK)', '', '2019-04-20'),
(20, '02/PANPEL/IV/2019', 'Kantor Polisi', 'Peminjaman Transportasi (BUS)', '', '2019-04-17');

-- --------------------------------------------------------

--
-- Table structure for table `surat_masuk`
--

CREATE TABLE `surat_masuk` (
  `id` int(11) NOT NULL,
  `pengirim` varchar(128) NOT NULL,
  `perihal` varchar(128) NOT NULL,
  `arsip` varchar(128) NOT NULL,
  `tanggal_masuk` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `surat_masuk`
--

INSERT INTO `surat_masuk` (`id`, `pengirim`, `perihal`, `arsip`, `tanggal_masuk`) VALUES
(2, 'Himpunan Mahasiswa Pendidikan Bahasa', 'Undangan Turnament Volly', '', '2019-04-16');

-- --------------------------------------------------------

--
-- Table structure for table `uang_keluar`
--

CREATE TABLE `uang_keluar` (
  `id` int(11) NOT NULL,
  `total` varchar(128) NOT NULL,
  `kebutuhan` varchar(128) NOT NULL,
  `arsip` varchar(128) NOT NULL,
  `tanggal_keluar` date NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `uang_masuk`
--

CREATE TABLE `uang_masuk` (
  `id` int(11) NOT NULL,
  `total` varchar(128) NOT NULL,
  `tanggal_masuk` date NOT NULL,
  `arsip` varchar(128) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `password` varchar(255) NOT NULL,
  `gambar` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `password`, `gambar`) VALUES
(1, 'ezy', '$2y$10$UQUNHVYn./oPE9YJCE.xQOjnyaJdyw3gcEbeRQnJCPHzHNKJveeE2', 'default.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `berita_acara`
--
ALTER TABLE `berita_acara`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `surat_keluar`
--
ALTER TABLE `surat_keluar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `surat_masuk`
--
ALTER TABLE `surat_masuk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `uang_keluar`
--
ALTER TABLE `uang_keluar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `uang_masuk`
--
ALTER TABLE `uang_masuk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `berita_acara`
--
ALTER TABLE `berita_acara`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `surat_keluar`
--
ALTER TABLE `surat_keluar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `surat_masuk`
--
ALTER TABLE `surat_masuk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `uang_keluar`
--
ALTER TABLE `uang_keluar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `uang_masuk`
--
ALTER TABLE `uang_masuk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
