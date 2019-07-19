-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 19, 2019 at 10:58 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ci_simbad`
--

-- --------------------------------------------------------

--
-- Table structure for table `kabkota`
--

CREATE TABLE `kabkota` (
  `id` int(11) NOT NULL,
  `katkabkot_id` int(11) NOT NULL,
  `batas` varchar(255) NOT NULL,
  `aturan` text NOT NULL,
  `file` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kabkota`
--

INSERT INTO `kabkota` (`id`, `katkabkot_id`, `batas`, `aturan`, `file`, `created_at`) VALUES
(26, 6, 'Kabupaten Bogor', 'asdasdasdasdasdasdasd', '___BPJS-Checking_APRIL_2019.pdf', '2019-07-18 16:31:13'),
(27, 6, 'Kota Sukabumi', 'asdsadasdasdasdasd', '___BPJS-Checking_APRIL_2019_(1).pdf', '2019-07-19 09:25:21'),
(28, 3, 'Kabupaten Indramayu', 'asdasdasd', '___BPJS-Checking_APRIL_20191.pdf', '2019-07-19 13:11:56');

-- --------------------------------------------------------

--
-- Table structure for table `katkabkot`
--

CREATE TABLE `katkabkot` (
  `id` int(11) NOT NULL,
  `kabkot` varchar(255) NOT NULL,
  `logo` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `edited_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `katkabkot`
--

INSERT INTO `katkabkot` (`id`, `kabkot`, `logo`, `created_at`, `edited_at`) VALUES
(3, 'Kabupaten Bogor', '1516067771-kabupaten-bogor.png', '2019-06-27 15:56:35', '2019-07-18 10:19:11'),
(4, 'Kabupaten Sukabumi', '1516068028-kabupaten-sukabumi.png', '2019-06-27 15:56:43', '2019-07-18 10:19:35'),
(6, 'Kabupaten Cianjur', '1516067812-kabupaten-cianjur.png', '2019-06-27 15:57:11', '2019-07-18 10:19:43'),
(7, 'Kabupaten Bandung', '1516067691-kabupaten-bandung.png', '2019-06-27 15:57:19', '2019-07-18 10:20:05'),
(8, 'Kabupaten Garut', '1516067859-kabupaten-garut.png', '2019-06-27 15:57:29', '2019-07-18 10:20:20'),
(9, 'Kabupaten Tasikmalaya', '1516068080-kabupaten-tasikmalaya.png', '2019-06-27 15:57:40', '2019-07-18 10:20:32'),
(10, 'Kabupaten Ciamis', '1516067793-kabupaten-ciamis.png', '2019-06-27 15:57:54', '2019-07-18 10:20:51'),
(11, 'Kabupaten Kuningan', '1516068273-kabupaten-kuningan.png', '2019-06-27 15:58:07', '2019-07-18 10:21:00'),
(12, 'Kabupaten Cirebon', '1516067840-kabupaten-cirebon.png', '2019-06-27 15:58:15', '2019-07-18 10:21:08'),
(13, 'Kabupaten Majalengka', '1516067955-kabupaten-majalengka.png', '2019-06-27 15:58:22', '2019-07-18 10:21:17'),
(14, 'Kabupaten Sumedang', '1516068057-kabupaten-sumedang.png', '2019-06-27 15:58:31', '2019-07-18 10:21:27'),
(15, 'Kabupaten Indramayu', '1516067878-kabupaten-indramayu.png', '2019-06-27 15:58:42', '2019-07-18 10:21:36'),
(16, 'Kabupaten Subang', '1516068008-kabupaten-subang.png', '2019-06-27 15:58:48', '2019-07-18 10:21:47'),
(17, 'Kabupaten Purwakarta', '1516067988-kabupaten-purwakarta.png', '2019-06-27 15:58:56', '2019-07-18 10:21:58'),
(18, 'Kabupaten Karawang', '1516067903-kabupaten-karawang.png', '2019-06-27 15:59:06', '2019-07-18 10:22:10'),
(19, 'Kabupaten Bekasi', '1516067749-kabupaten-bekasi.png', '2019-06-27 15:59:13', '2019-07-18 10:22:17'),
(20, 'Kabupaten Bandung Barat', '1516067725-kabupaten-bandung-barat.png', '2019-06-27 15:59:22', '2019-07-18 10:22:24'),
(21, 'Kabupaten Pangandaran', '1516067970-kabupaten-pangandaran.png', '2019-06-27 15:59:31', '2019-07-18 10:22:29'),
(22, 'Kota Bogor', '1516068156-kota-bogor.png', '2019-06-27 16:00:41', '2019-07-18 10:22:39'),
(23, 'Kota Sukabumi', '1516068226-kota-sukabumi.png', '2019-06-27 16:02:18', '2019-07-18 10:22:48'),
(24, 'Kota Bandung', '1516068096-kota-bandung.png', '2019-06-27 16:02:32', '2019-07-18 10:22:58'),
(25, 'Kota Cirebon', '1516068190-kota-cirebon.png', '2019-06-27 16:02:41', '2019-07-18 10:23:09'),
(26, 'Kota Bekasi', '1516068138-kota-bekasi.png', '2019-06-27 16:02:46', '2019-07-18 10:23:20'),
(27, 'Kota Depok', '1516068206-kota-depok.png', '2019-06-27 16:02:53', '2019-07-18 10:23:33'),
(28, 'Kota Cimahi', '1516068171-kota-cimahi.png', '2019-06-27 16:02:58', '2019-07-18 10:23:44'),
(29, 'Kota Tasikmalaya', '1516068249-kota-tasikmalaya.png', '2019-06-27 16:03:22', '2019-07-18 10:23:54'),
(30, 'Kota Banjar', '1516068111-kota-banjar.png', '2019-06-27 16:03:28', '2019-07-18 10:24:03');

-- --------------------------------------------------------

--
-- Table structure for table `katprov`
--

CREATE TABLE `katprov` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `katprov`
--

INSERT INTO `katprov` (`id`, `name`) VALUES
(1, 'PROV. JAWA BARAT - DKI JAKARTA'),
(2, 'PROV. JAWA BARAT - PROV. BANTEN'),
(3, 'PROV. JAWA BARAT - PROV. JAWA TENGAH');

-- --------------------------------------------------------

--
-- Table structure for table `permendagri`
--

CREATE TABLE `permendagri` (
  `id` int(11) NOT NULL,
  `nomor` varchar(255) NOT NULL,
  `tentang` text NOT NULL,
  `segmen` text NOT NULL,
  `file` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `edited_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `permendagri`
--

INSERT INTO `permendagri` (`id`, `nomor`, `tentang`, `segmen`, `file`, `created_at`, `edited_at`) VALUES
(5, 'Nomor 246 Tahun 2004 Tanggal  18 Oktober 2004 (Kepmendagri)', 'Batas Daerah Kabupaten Cirebon Provinsi Jawa Barat', '                  \r\n\r\n<div>1.<span xss=removed> </span>Kabupaten Cirebon-Kabupaten Brebes.</div><div>2.<span xss=removed> </span>Kabupaten Cirebon-Kabupaten Indramayu.</div><div>3.<span xss=removed> </span>Kabupaten Cirebon-Kabupaten Kuningan.</div><div>4.<span xss=removed> </span>Kabupaten Cirebon-Kabupaten Majalengka.</div><div><br></div>', '3FA4QC_payment_(3).pdf', '2019-07-11 12:54:17', '2019-07-18 10:02:43'),
(34, '102/12/Pemksm', 'asdasd', '             sadasdasd', '1_901_091_3007_(1).pdf', '2019-07-17 17:52:52', '2019-07-17 18:23:01'),
(35, 'Nomor 246 Tahun 2004 Tanggal 18 Oktober 2004', 'asdsadsa', ' dsadsadasdsadasdasdasd', '___BPJS-Checking_APRIL_20193.pdf', '2019-07-18 09:30:47', '0000-00-00 00:00:00'),
(36, 'sadasdasdasdsa', 'dasdasdsadasdasd', 'asdasdasdasdasdasdasdasd', '1_901_091_3001.pdf', '2019-07-18 09:31:38', '0000-00-00 00:00:00'),
(37, '123123123123', 'asdasdasdasd', 'asdasdasdasdasdasd', '2_11__Cakupan_Komplikasi_Kebidanan.pdf', '2019-07-18 09:31:48', '0000-00-00 00:00:00'),
(38, '3', 'asdsadsadasdas', 'dasdasdasdsadsadsadasdsa', '1_901_091_3007_(1)1.pdf', '2019-07-18 09:32:03', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `provinsi`
--

CREATE TABLE `provinsi` (
  `id` int(11) NOT NULL,
  `kabkot` varchar(255) NOT NULL,
  `aturan` text NOT NULL,
  `id_katprov` varchar(255) NOT NULL,
  `file` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `edited_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `provinsi`
--

INSERT INTO `provinsi` (`id`, `kabkot`, `aturan`, `id_katprov`, `file`, `created_at`, `edited_at`) VALUES
(22, 'Kab. Bandung dengan Kota Bandung', 'asdsadasdsadsadasdsad', 'Prov. Jawa Barat dengan Prov. DKI Jakarta', '___BPJS-Checking_APRIL_2019.pdf', '2019-06-27 15:05:59', '2019-07-18 11:05:09'),
(23, 'Kota Banjar dengan Kab. Madiun', 'asdsadasdasdasdasdasdasdasdasdasdasd', 'Prov. Jawa Barat dengan Prov. Banten', '1_901_091_3001.pdf', '2019-07-18 10:36:52', '2019-07-18 10:46:07'),
(24, 'Bandung', 'asdasdasdsadasdasd', 'Prov. Jawa Barat dengan Prov. Jawa Tengah', '___BPJS-Checking_APRIL_20191.pdf', '2019-07-19 10:15:37', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `jabatan` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `telepon` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `date_added` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `username`, `password`, `nama`, `jabatan`, `email`, `telepon`, `foto`, `role`, `status`, `date_added`) VALUES
(1, 'root', '63a9f0ea7bb98050796b649e85481845', 'Master Root', 'Root Master', 'maulanacahya45@gmail.com', '08122229879', '', 'root', 1, '1970-01-01 07:00:01'),
(7, 'admin', '0cc175b9c0f1b6a831c399e269772661', 'Admin TU', 'Admin', 'birpemksm@gmail.com', '08000000000000', '', 'admin_tu', 1, '1970-01-01 07:00:01'),
(11, 'adminkaro', '827ccb0eea8a706c4c34a16891f84e7b', 'Kepala Biro Pemerintahan dan Kerja Sama', 'Kepala Biro Pemerintahan dan Kerja Sama', 'biropemksm@gmail.com', '08000000000000', '', 'karo', 1, '1970-01-01 07:00:01'),
(13, 'admintapem', '827ccb0eea8a706c4c34a16891f84e7b', 'Kepala Bagian Tata Pemerintahan', 'Kepala Bagian Tata Pemerintahan', 'biropemksm@gmail.com', '08000000000000', '', 'kabag', 1, '1970-01-01 07:00:01'),
(17, 'subagadpem', '827ccb0eea8a706c4c34a16891f84e7b', 'Subbagian Administrasi Pemerintahan', 'Subbagian Administrasi Pemerintahan', 'biropemksm@gmail.com', '08000000000000', '', 'kasubag', 1, '1970-01-01 07:00:01');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kabkota`
--
ALTER TABLE `kabkota`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `katkabkot`
--
ALTER TABLE `katkabkot`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `katprov`
--
ALTER TABLE `katprov`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `permendagri`
--
ALTER TABLE `permendagri`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `provinsi`
--
ALTER TABLE `provinsi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`,`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kabkota`
--
ALTER TABLE `kabkota`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT for table `katkabkot`
--
ALTER TABLE `katkabkot`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT for table `katprov`
--
ALTER TABLE `katprov`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `permendagri`
--
ALTER TABLE `permendagri`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
--
-- AUTO_INCREMENT for table `provinsi`
--
ALTER TABLE `provinsi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
