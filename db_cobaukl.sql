-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 28, 2019 at 01:38 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_cobaukl`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_barang`
--

CREATE TABLE `data_barang` (
  `id_barang` int(11) NOT NULL,
  `nama_barang` varchar(255) NOT NULL,
  `jenis_barang` int(11) NOT NULL,
  `lemari` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_barang`
--

INSERT INTO `data_barang` (`id_barang`, `nama_barang`, `jenis_barang`, `lemari`) VALUES
(1, 'Pensila', 1, 1),
(2, 'Penghapus', 1, 2),
(3, 'Kabel VGA', 2, 1),
(5, 'Bolpoint', 1, 3);

-- --------------------------------------------------------

--
-- Table structure for table `data_pinjaman`
--

CREATE TABLE `data_pinjaman` (
  `id_pinjaman` int(11) NOT NULL,
  `id_barang` int(11) NOT NULL,
  `id_peminjam` int(11) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  `tgl_pinjam` datetime DEFAULT CURRENT_TIMESTAMP,
  `tgl_kembali` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_pinjaman`
--

INSERT INTO `data_pinjaman` (`id_pinjaman`, `id_barang`, `id_peminjam`, `status`, `tgl_pinjam`, `tgl_kembali`) VALUES
(2, 3, 4, 1, '2019-04-27 11:08:26', '2019-04-27 11:08:26'),
(3, 2, 4, 2, '2019-04-27 11:30:40', '2019-04-27 11:30:25'),
(4, 1, NULL, 1, '2019-04-27 15:58:48', '2019-04-02 00:00:00'),
(5, 3, 1, 1, '2019-04-27 16:04:59', '2019-04-02 00:00:00'),
(6, 2, 4, 2, '2019-04-27 16:07:07', '2019-04-01 00:00:00'),
(7, 3, 4, 1, '2019-04-27 16:08:20', '2019-04-29 00:00:00'),
(8, 3, 1, 1, '2019-04-28 09:50:32', '2019-04-30 00:00:00'),
(9, 2, 1, 1, '2019-04-28 09:59:03', '2019-04-30 00:00:00'),
(10, 3, 4, 2, '2019-04-28 09:59:44', '2019-04-30 00:00:00'),
(11, 3, 1, 2, '2019-04-28 16:51:39', '2019-04-29 00:00:00'),
(13, 5, 1, 2, '2019-04-28 17:54:46', '2019-02-02 00:00:00'),
(14, 3, 1, 1, '2019-04-28 17:55:51', '2019-11-01 00:00:00'),
(15, 3, 1, 2, '2019-04-28 17:57:06', '2019-04-30 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `jenis_barang`
--

CREATE TABLE `jenis_barang` (
  `id_jenis_barang` int(11) NOT NULL,
  `nama_jenis` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jenis_barang`
--

INSERT INTO `jenis_barang` (`id_jenis_barang`, `nama_jenis`) VALUES
(1, 'ALAT TULIS'),
(2, 'PERANGKAT KERAS'),
(4, 'SOFTWARE');

-- --------------------------------------------------------

--
-- Table structure for table `lemari`
--

CREATE TABLE `lemari` (
  `id_lemari` int(11) NOT NULL,
  `no_lemari` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lemari`
--

INSERT INTO `lemari` (`id_lemari`, `no_lemari`) VALUES
(1, 1),
(2, 2),
(3, 3);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama_user` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `level` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama_user`, `username`, `password`, `level`) VALUES
(1, 'faisal affan', 'faisal', '12345', 0),
(2, 'risma', 'risma', 'risma', 2),
(3, 'rismay', 'rismay', '112233', 0),
(4, 'risma ayu', 'rismaads', 'risma', 0),
(5, 'Fadlurrohman S.M', 'Fadluri', '332211', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_barang`
--
ALTER TABLE `data_barang`
  ADD PRIMARY KEY (`id_barang`),
  ADD KEY `id_jenis_barang` (`jenis_barang`),
  ADD KEY `id_lemari` (`lemari`);

--
-- Indexes for table `data_pinjaman`
--
ALTER TABLE `data_pinjaman`
  ADD PRIMARY KEY (`id_pinjaman`),
  ADD KEY `id_barang` (`id_barang`) USING BTREE,
  ADD KEY `id_peminjam` (`id_peminjam`);

--
-- Indexes for table `jenis_barang`
--
ALTER TABLE `jenis_barang`
  ADD PRIMARY KEY (`id_jenis_barang`);

--
-- Indexes for table `lemari`
--
ALTER TABLE `lemari`
  ADD PRIMARY KEY (`id_lemari`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_barang`
--
ALTER TABLE `data_barang`
  MODIFY `id_barang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `data_pinjaman`
--
ALTER TABLE `data_pinjaman`
  MODIFY `id_pinjaman` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `jenis_barang`
--
ALTER TABLE `jenis_barang`
  MODIFY `id_jenis_barang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `lemari`
--
ALTER TABLE `lemari`
  MODIFY `id_lemari` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `data_barang`
--
ALTER TABLE `data_barang`
  ADD CONSTRAINT `data_barang_ibfk_1` FOREIGN KEY (`lemari`) REFERENCES `lemari` (`id_lemari`),
  ADD CONSTRAINT `data_barang_ibfk_2` FOREIGN KEY (`jenis_barang`) REFERENCES `jenis_barang` (`id_jenis_barang`);

--
-- Constraints for table `data_pinjaman`
--
ALTER TABLE `data_pinjaman`
  ADD CONSTRAINT `data_pinjaman_ibfk_1` FOREIGN KEY (`id_barang`) REFERENCES `data_barang` (`id_barang`),
  ADD CONSTRAINT `data_pinjaman_ibfk_2` FOREIGN KEY (`id_peminjam`) REFERENCES `user` (`id_user`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
