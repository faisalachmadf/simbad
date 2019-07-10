-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 23, 2019 at 02:15 PM
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
-- Table structure for table `provinsi`
--

CREATE TABLE `provinsi` (
  `id` int(11) NOT NULL,
  `kabkot` varchar(255) NOT NULL,
  `aturan` text NOT NULL,
  `id_katprov` int(11) NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `provinsi`
--

INSERT INTO `provinsi` (`id`, `kabkot`, `aturan`, `id_katprov`, `created_at`) VALUES
(1, 'Kab. Bekasi dengan Jakarta Timur', 'Permendagri Nomor', 1, '2019-06-23 00:00:00');

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
(2, 'a', '0cc175b9c0f1b6a831c399e269772661', 'Root A', 'Root Master', 'maulanacahya45@gmail.com', '08122229879', '', 'root', 1, '1970-01-01 07:00:01'),
(7, 'admin', '0cc175b9c0f1b6a831c399e269772661', 'Admin TU', 'Admin', 'birpemksm@gmail.com', '08000000000000', '', 'admin_tu', 1, '1970-01-01 07:00:01'),
(11, 'adminkaro', '827ccb0eea8a706c4c34a16891f84e7b', 'Kepala Biro Pemerintahan dan Kerja Sama', 'Kepala Biro Pemerintahan dan Kerja Sama', 'biropemksm@gmail.com', '08000000000000', '', 'karo', 1, '1970-01-01 07:00:01'),
(13, 'admintapem', '827ccb0eea8a706c4c34a16891f84e7b', 'Kepala Bagian Tata Pemerintahan', 'Kepala Bagian Tata Pemerintahan', 'biropemksm@gmail.com', '08000000000000', '', 'kabag', 1, '1970-01-01 07:00:01'),
(17, 'subagadpem', '827ccb0eea8a706c4c34a16891f84e7b', 'Subbagian Administrasi Pemerintahan', 'Subbagian Administrasi Pemerintahan', 'biropemksm@gmail.com', '08000000000000', '', 'kasubag', 1, '1970-01-01 07:00:01');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `katprov`
--
ALTER TABLE `katprov`
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
-- AUTO_INCREMENT for table `katprov`
--
ALTER TABLE `katprov`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `provinsi`
--
ALTER TABLE `provinsi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
