-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 07, 2020 at 04:49 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bps_oh`
--

-- --------------------------------------------------------

--
-- Table structure for table `jadwal`
--

CREATE TABLE `jadwal` (
  `id` int(11) NOT NULL,
  `NIP` varchar(18) NOT NULL,
  `TANGGAL` date NOT NULL,
  `SEKSI` varchar(255) NOT NULL,
  `KEGIATAN` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `kasi`
--

CREATE TABLE `kasi` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `NIP` varchar(20) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pegawai`
--

CREATE TABLE `pegawai` (
  `NAMA` varchar(255) NOT NULL,
  `NIP` varchar(18) NOT NULL,
  `Jabatan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pegawai`
--

INSERT INTO `pegawai` (`NAMA`, `NIP`, `Jabatan`) VALUES
('Bagus Sunggono, SE, M.M', '196307231990031002', 'Kepala BPS Kabupaten/Kota'),
('Suparto', '196404222007011004', 'Staf Subbagian Tata Usaha'),
('Oni Sanimanto, SE', '197110131998031001', 'Kepala Subbagian Tata Usaha'),
('Syamsuddin', '197211111994011001', 'Statistisi Penyelia KSK'),
('Agus Tonowijaya', '197308112009011001', 'Statistisi Pelaksana KSK'),
('Endro Tri Sustono, SE', '197308271994011001', 'Kepala Seksi Statistik Distribusi'),
('Budi Septiyono, S.Si', '197409271995121001', 'Kepala Seksi Statistik Produksi\r\n'),
('Roni Hartono, SST', '197705091999121001', 'Kepala Seksi Neraca Wilayah dan Analisis Stat'),
('Yenita Mirawanti, SST.,M.Si', '197806032000122002', 'Kepala Seksi Statistik Sosial'),
('Nur Rachmad Safari', '198101012007011002', 'Statistisi Pelaksanaan Lanjutan KSK'),
('Bambang Herwanto', '198204062006041018', 'Statistisi Pelaksana KSK'),
('Endro Dwi Budi Prasetyo', '198205262009011008', 'Statistisi Pelaksana Lanjutan KSK'),
('Heru Hardanto, S.Si, M.E', '198206022009021007', 'Staf Seksi Statistik Produksi'),
('Rony Hadiyanto, SST', '198304062008011008', 'Kepala Seksi Integrasi Pengolahan dan Diseminasi Stat'),
('Sri Yogorini, SST', '198412312008012007', 'Staf Seksi Statistik Distribusi'),
('Zaenal Arifin, S.Si', '198503252012121001', 'Staf Seksi Neraca Wilayah dan Analisis Stat\r\n'),
('Rahmadanie Sapta Irevanie, SST, M.Si', '198605102009022003', 'Staf Seksi Statistik Produksi'),
('Dicky Dita Firmansyah, S.ST, M.Ec.Dev', '198709122009121002', 'Staf Seksi Integrasi Pengolahan dan Diseminasi Stat'),
('Atmasari, S.Si.', '198802202011012002', 'Statistisi Pertama KSK'),
('Bambang Winarno, A.Md', '198909252012121003', 'Bendahara Pengeluaran Daerah Subbagian Tata Usaha'),
('Oktar Sander, SST', '199110212014121001', 'Staf Seksi Statistik Sosial');

-- --------------------------------------------------------

--
-- Table structure for table `seksi`
--

CREATE TABLE `seksi` (
  `id` int(11) NOT NULL,
  `seksi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `seksi`
--

INSERT INTO `seksi` (`id`, `seksi`) VALUES
(1, 'TU'),
(2, 'Pengolahan'),
(3, 'Produksi'),
(4, 'Sosial');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(20) NOT NULL,
  `level` enum('Kasi','Staf','','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `level`) VALUES
(1, 'kasi', '123456', 'Kasi'),
(2, 'staf', '123456', 'Staf');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jadwal`
--
ALTER TABLE `jadwal`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `kasi` (`SEKSI`),
  ADD KEY `NIP` (`NIP`);

--
-- Indexes for table `kasi`
--
ALTER TABLE `kasi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `NIP` (`NIP`);

--
-- Indexes for table `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`NIP`);

--
-- Indexes for table `seksi`
--
ALTER TABLE `seksi`
  ADD PRIMARY KEY (`seksi`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jadwal`
--
ALTER TABLE `jadwal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `seksi`
--
ALTER TABLE `seksi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `jadwal`
--
ALTER TABLE `jadwal`
  ADD CONSTRAINT `jadwal_ibfk_1` FOREIGN KEY (`SEKSI`) REFERENCES `seksi` (`seksi`),
  ADD CONSTRAINT `jadwal_ibfk_2` FOREIGN KEY (`NIP`) REFERENCES `pegawai` (`NIP`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
