-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 17, 2018 at 12:45 PM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_wms`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_user` varchar(25) NOT NULL,
  `admin_pass` varchar(50) NOT NULL,
  `admin_nama` varchar(30) NOT NULL,
  `admin_alamat` varchar(250) NOT NULL,
  `admin_email` varchar(100) NOT NULL,
  `admin_telepon` varchar(15) NOT NULL,
  `admin_ip` varchar(12) NOT NULL,
  `admin_online` int(10) NOT NULL,
  `admin_level_kode` int(3) NOT NULL,
  `admin_status` varchar(100) NOT NULL,
  `admin_created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `admin_updated` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_user`, `admin_pass`, `admin_nama`, `admin_alamat`, `admin_email`, `admin_telepon`, `admin_ip`, `admin_online`, `admin_level_kode`, `admin_status`, `admin_created`, `admin_updated`) VALUES
('admin', '21232f297a57a5a743894a0e4a801fc3', 'Administrator', 'Bandung, Indonesia', 'admin@gmail.com', '081234567889', '', 0, 1, 'A', '2018-07-26 22:19:14', '2018-08-17 17:12:43'),
('admincustomer', 'c8b255ad7751fab78bfc16f74a59914f', 'Admin Customer', 'Bnadung', '', '08123456789', '', 0, 3, 'A', '2018-08-17 16:54:59', '2018-08-17 17:12:44'),
('adminsupplier', 'c57ea6ce2293f5a3a0c13a716ef96060', 'Admin Supplier', 'Bandung', '', '08123456789', '', 0, 2, 'A', '2018-08-17 16:54:28', '2018-08-17 16:54:28');

-- --------------------------------------------------------

--
-- Table structure for table `admin_level`
--

CREATE TABLE `admin_level` (
  `admin_level_kode` int(3) NOT NULL,
  `admin_level_nama` varchar(30) NOT NULL,
  `admin_level_status` char(1) NOT NULL,
  `admin_level_created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `admin_level_updated` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_level`
--

INSERT INTO `admin_level` (`admin_level_kode`, `admin_level_nama`, `admin_level_status`, `admin_level_created`, `admin_level_updated`) VALUES
(1, 'Administrator', 'A', '2018-07-26 22:31:41', '2018-07-26 22:31:41'),
(2, 'Staff Supplier', 'A', '2018-07-26 22:31:41', '2018-08-17 16:45:27'),
(3, 'Staff Customer', 'A', '2018-08-17 16:45:45', '2018-08-17 16:45:45');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id_customer` int(11) NOT NULL,
  `nama_customer` varchar(100) NOT NULL,
  `alamat_customer` varchar(100) NOT NULL,
  `notelp_customer` varchar(12) NOT NULL,
  `customer_created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `customer_updated` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `identitas`
--

CREATE TABLE `identitas` (
  `identitas_id` int(3) NOT NULL,
  `identitas_website` varchar(250) NOT NULL,
  `identitas_deskripsi` text NOT NULL,
  `identitas_keyword` text NOT NULL,
  `identitas_alamat` varchar(250) NOT NULL,
  `identitas_notelp` char(20) NOT NULL,
  `identitas_fb` varchar(100) NOT NULL,
  `identitas_email` varchar(100) NOT NULL,
  `identitas_tw` varchar(100) NOT NULL,
  `identitas_gp` varchar(100) NOT NULL,
  `identitas_yb` varchar(100) NOT NULL,
  `identitas_favicon` varchar(250) NOT NULL,
  `identitas_author` varchar(100) NOT NULL,
  `identitas_created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `identitas_updated` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `identitas`
--

INSERT INTO `identitas` (`identitas_id`, `identitas_website`, `identitas_deskripsi`, `identitas_keyword`, `identitas_alamat`, `identitas_notelp`, `identitas_fb`, `identitas_email`, `identitas_tw`, `identitas_gp`, `identitas_yb`, `identitas_favicon`, `identitas_author`, `identitas_created`, `identitas_updated`) VALUES
(1, 'WMS', 'Warehouse Management System ', 'Warehouse Management System ', 'Bandung', '08123456789', 'https://www.facebook.com/wms', 'wms@gmail.com', 'https://twitter.com/wms', 'http://wms.com/', 'https://www.youtube.com/wms', '3691adaa4a69024b73dc5c1ddb3c43ea.png', 'WMS', '2018-07-26 22:19:42', '2018-07-27 01:22:18');

-- --------------------------------------------------------

--
-- Table structure for table `limitstock`
--

CREATE TABLE `limitstock` (
  `limitstock_id` int(11) NOT NULL,
  `stock` int(11) NOT NULL,
  `limitstock_created` datetime DEFAULT CURRENT_TIMESTAMP,
  `limitstock_updated` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `limitstock`
--

INSERT INTO `limitstock` (`limitstock_id`, `stock`, `limitstock_created`, `limitstock_updated`) VALUES
(1, 2, '2018-07-26 23:33:38', '2018-07-26 23:45:07');

-- --------------------------------------------------------

--
-- Table structure for table `master_barang`
--

CREATE TABLE `master_barang` (
  `id_barang` int(11) NOT NULL,
  `nama_barang` varchar(255) NOT NULL,
  `merek` varchar(255) NOT NULL,
  `stock` int(11) NOT NULL,
  `barang_created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `barang_updated` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `session_id` varchar(40) NOT NULL DEFAULT '0',
  `ip_address` varchar(16) NOT NULL DEFAULT '0',
  `user_agent` varchar(120) NOT NULL,
  `last_activity` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `user_data` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`session_id`, `ip_address`, `user_agent`, `last_activity`, `user_data`) VALUES
('262ed206690c8ffa8c0880853ab67ce2', '0.0.0.0', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/60.0.3112.101 Safari/537.36', 1504186814, ''),
('49e9e36170db732c7314cb317b3c899e', '0.0.0.0', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/60.0.3112.101 Safari/537.36', 1504187151, ''),
('4b6baa8cbc478d7e38395c0d7a3fc212', '0.0.0.0', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/60.0.3112.113 Safari/537.36', 1504186981, 'a:5:{s:9:\"user_data\";s:0:\"\";s:10:\"admin_nama\";s:13:\"Administrator\";s:10:\"admin_user\";s:5:\"admin\";s:11:\"admin_level\";s:1:\"1\";s:9:\"logged_in\";b:1;}'),
('648fe333a5f0d3d2515f2a2711e1751c', '0.0.0.0', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36', 1532611686, ''),
('8f90fd01811f1c4f981059b36f932233', '0.0.0.0', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/60.0.3112.113 Safari/537.36', 1504186981, ''),
('9f4279bb252307cbf1d9f5d87bf88a9c', '0.0.0.0', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/60.0.3112.101 Safari/537.36', 1504186691, ''),
('aa0a60fa0dba1e30487cce20443ba358', '0.0.0.0', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36', 1532679275, ''),
('aa8fa7618237d5f7cb131b5777a1e564', '0.0.0.0', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/60.0.3112.101 Safari/537.36', 1504187079, ''),
('e3deff5ffd5e90e5ba3deef2c0681ff4', '0.0.0.0', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/60.0.3112.113 Safari/537.36', 1504187005, 'a:2:{s:9:\"user_data\";s:0:\"\";s:10:\"admin_nama\";s:13:\"Administrator\";}'),
('f622232dd0c9c866affa9648415588ab', '0.0.0.0', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/60.0.3112.113 Safari/537.36', 1504187039, '');

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

CREATE TABLE `supplier` (
  `id_supplier` int(11) NOT NULL,
  `nama_supplier` varchar(100) NOT NULL,
  `alamat_supplier` varchar(100) NOT NULL,
  `notelp_supplier` varchar(12) NOT NULL,
  `supplier_created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `supplier_updated` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `transaksi_barang`
--

CREATE TABLE `transaksi_barang` (
  `id_transaksi` int(11) NOT NULL,
  `jumlah` int(11) DEFAULT NULL,
  `tanggal_transaksi` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `transaksi_updated` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status_pergerakan` char(1) NOT NULL COMMENT 'pergerakan barang masuk = 1 atau keluar = 2',
  `id_barang` int(11) NOT NULL,
  `admin_user` varchar(119) NOT NULL,
  `id_supplier` int(11) NOT NULL,
  `id_customer` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_user`),
  ADD KEY `admin_level_kode` (`admin_level_kode`);

--
-- Indexes for table `admin_level`
--
ALTER TABLE `admin_level`
  ADD PRIMARY KEY (`admin_level_kode`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id_customer`);

--
-- Indexes for table `identitas`
--
ALTER TABLE `identitas`
  ADD PRIMARY KEY (`identitas_id`);

--
-- Indexes for table `limitstock`
--
ALTER TABLE `limitstock`
  ADD PRIMARY KEY (`limitstock_id`);

--
-- Indexes for table `master_barang`
--
ALTER TABLE `master_barang`
  ADD PRIMARY KEY (`id_barang`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`session_id`),
  ADD KEY `last_activity_idx` (`last_activity`);

--
-- Indexes for table `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`id_supplier`);

--
-- Indexes for table `transaksi_barang`
--
ALTER TABLE `transaksi_barang`
  ADD PRIMARY KEY (`id_transaksi`),
  ADD UNIQUE KEY `Tgl_transaksi` (`tanggal_transaksi`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_level`
--
ALTER TABLE `admin_level`
  MODIFY `admin_level_kode` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id_customer` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `identitas`
--
ALTER TABLE `identitas`
  MODIFY `identitas_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `limitstock`
--
ALTER TABLE `limitstock`
  MODIFY `limitstock_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `master_barang`
--
ALTER TABLE `master_barang`
  MODIFY `id_barang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `supplier`
--
ALTER TABLE `supplier`
  MODIFY `id_supplier` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `transaksi_barang`
--
ALTER TABLE `transaksi_barang`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
