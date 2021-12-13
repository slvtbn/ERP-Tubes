-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 13, 2021 at 02:35 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mb_app`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_data_karyawan`
--

CREATE TABLE `tb_data_karyawan` (
  `id_karyawan` varchar(10) NOT NULL,
  `nama_karyawan` varchar(50) NOT NULL,
  `id_gender` varchar(5) NOT NULL,
  `tempat_lahir` varchar(50) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `telepon` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_data_karyawan`
--

INSERT INTO `tb_data_karyawan` (`id_karyawan`, `nama_karyawan`, `id_gender`, `tempat_lahir`, `tgl_lahir`, `telepon`, `email`, `alamat`) VALUES
('KR001', 'Silva Anjelina Tambunan', 'G02', 'Biak', '2021-12-06', '081344919861', 'silvaanjelina07@gmail.com', 'Biak Papua'),
('KR002', 'Bagas Prasetyo Nugroho', 'G01', 'Blitar', '2021-12-08', '081345678934', 'bagasjelek@gmail.com', 'Blitar, Jatim');

-- --------------------------------------------------------

--
-- Table structure for table `tb_gender`
--

CREATE TABLE `tb_gender` (
  `id_gender` varchar(5) NOT NULL,
  `nama` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_gender`
--

INSERT INTO `tb_gender` (`id_gender`, `nama`) VALUES
('G01', 'Laki-laki'),
('G02', 'Perempuan');

-- --------------------------------------------------------

--
-- Table structure for table `tb_harga_komponen`
--

CREATE TABLE `tb_harga_komponen` (
  `id_harga_komponen` int(11) NOT NULL,
  `id_product` varchar(10) NOT NULL,
  `id_komponen` varchar(10) NOT NULL,
  `jumlah` double NOT NULL,
  `harga` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_harga_komponen`
--

INSERT INTO `tb_harga_komponen` (`id_harga_komponen`, `id_product`, `id_komponen`, `jumlah`, `harga`) VALUES
(13, 'P001', 'K001', 0.1, 3500),
(14, 'P001', 'K003', 0.1, 3000),
(15, 'P001', 'K002', 0.1, 6000);

-- --------------------------------------------------------

--
-- Table structure for table `tb_komponen`
--

CREATE TABLE `tb_komponen` (
  `id_komponen` varchar(10) NOT NULL,
  `nama_komponen` varchar(50) NOT NULL,
  `id_satuan` int(11) NOT NULL,
  `harga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_komponen`
--

INSERT INTO `tb_komponen` (`id_komponen`, `nama_komponen`, `id_satuan`, `harga`) VALUES
('K001', 'Shea Butter', 1, 35000),
('K002', 'Pengemulsi Lilin', 1, 60000),
('K003', 'Aloevera Gel', 3, 30000),
('K004', 'Bubuk Kokoa', 1, 10000),
('K005', 'Bubuk Mika', 1, 100000);

-- --------------------------------------------------------

--
-- Table structure for table `tb_order`
--

CREATE TABLE `tb_order` (
  `id_order` varchar(10) NOT NULL,
  `nama_pemesan` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `telepon` varchar(15) NOT NULL,
  `id_product` varchar(10) NOT NULL,
  `jumlah_produk` int(11) NOT NULL,
  `tgl_order` date NOT NULL,
  `tgl_selesai` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_order`
--

INSERT INTO `tb_order` (`id_order`, `nama_pemesan`, `alamat`, `telepon`, `id_product`, `jumlah_produk`, `tgl_order`, `tgl_selesai`) VALUES
('O001', 'Silva Anjelina Tambunan', 'Biak Papua', '081344919861', 'P001', 2, '2021-12-04', '2021-12-06'),
('O002', 'Egi', 'Tabalong, Kalimantan', '081344919861', 'P001', 5, '2021-12-04', '2021-12-06'),
('O003', 'Wira Satya Nusantara', 'Mandow Dalam', '1234', 'P003', 3, '2021-12-08', '2021-12-10'),
('O004', 'Bagas', 'Blitar', '1234', 'P001', 2, '2021-12-08', '2021-12-10'),
('O005', 'Ridho', 'Samofa', '081344919861', 'P003', 3, '2021-12-09', '2021-12-12');

-- --------------------------------------------------------

--
-- Table structure for table `tb_product`
--

CREATE TABLE `tb_product` (
  `id_product` varchar(10) NOT NULL,
  `nama_product` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_product`
--

INSERT INTO `tb_product` (`id_product`, `nama_product`) VALUES
('P001', 'Lipstick'),
('P002', 'Loose Powder'),
('P003', 'Blush On ubah');

-- --------------------------------------------------------

--
-- Table structure for table `tb_production`
--

CREATE TABLE `tb_production` (
  `id_production` int(11) NOT NULL,
  `id_order` varchar(10) NOT NULL,
  `nama_pemesan` varchar(50) NOT NULL,
  `product` varchar(50) NOT NULL,
  `jlh_product` int(11) NOT NULL,
  `tgl_order` date NOT NULL,
  `tgl_selesai` date NOT NULL,
  `id_harga_komponen` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_satuan`
--

CREATE TABLE `tb_satuan` (
  `id_satuan` int(11) NOT NULL,
  `nama_satuan` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_satuan`
--

INSERT INTO `tb_satuan` (`id_satuan`, `nama_satuan`) VALUES
(1, 'gr'),
(2, 'liter'),
(3, 'ml'),
(4, 'mg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_data_karyawan`
--
ALTER TABLE `tb_data_karyawan`
  ADD PRIMARY KEY (`id_karyawan`),
  ADD KEY `id_gender` (`id_gender`);

--
-- Indexes for table `tb_gender`
--
ALTER TABLE `tb_gender`
  ADD PRIMARY KEY (`id_gender`);

--
-- Indexes for table `tb_harga_komponen`
--
ALTER TABLE `tb_harga_komponen`
  ADD PRIMARY KEY (`id_harga_komponen`),
  ADD KEY `id_product` (`id_product`),
  ADD KEY `id_product_2` (`id_product`),
  ADD KEY `id_komponen` (`id_komponen`);

--
-- Indexes for table `tb_komponen`
--
ALTER TABLE `tb_komponen`
  ADD PRIMARY KEY (`id_komponen`),
  ADD KEY `nama_komponen` (`nama_komponen`),
  ADD KEY `nama_komponen_2` (`nama_komponen`),
  ADD KEY `id_satuan` (`id_satuan`);

--
-- Indexes for table `tb_order`
--
ALTER TABLE `tb_order`
  ADD PRIMARY KEY (`id_order`),
  ADD KEY `id_product` (`id_product`);

--
-- Indexes for table `tb_product`
--
ALTER TABLE `tb_product`
  ADD PRIMARY KEY (`id_product`);

--
-- Indexes for table `tb_production`
--
ALTER TABLE `tb_production`
  ADD PRIMARY KEY (`id_production`),
  ADD KEY `id_order` (`id_order`),
  ADD KEY `id_harga_komponen` (`id_harga_komponen`);

--
-- Indexes for table `tb_satuan`
--
ALTER TABLE `tb_satuan`
  ADD PRIMARY KEY (`id_satuan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_harga_komponen`
--
ALTER TABLE `tb_harga_komponen`
  MODIFY `id_harga_komponen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `tb_production`
--
ALTER TABLE `tb_production`
  MODIFY `id_production` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_satuan`
--
ALTER TABLE `tb_satuan`
  MODIFY `id_satuan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_data_karyawan`
--
ALTER TABLE `tb_data_karyawan`
  ADD CONSTRAINT `tb_data_karyawan_ibfk_1` FOREIGN KEY (`id_gender`) REFERENCES `tb_gender` (`id_gender`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_harga_komponen`
--
ALTER TABLE `tb_harga_komponen`
  ADD CONSTRAINT `tb_harga_komponen_ibfk_1` FOREIGN KEY (`id_product`) REFERENCES `tb_product` (`id_product`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_harga_komponen_ibfk_2` FOREIGN KEY (`id_komponen`) REFERENCES `tb_komponen` (`id_komponen`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_komponen`
--
ALTER TABLE `tb_komponen`
  ADD CONSTRAINT `tb_komponen_ibfk_1` FOREIGN KEY (`id_satuan`) REFERENCES `tb_satuan` (`id_satuan`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_order`
--
ALTER TABLE `tb_order`
  ADD CONSTRAINT `tb_order_ibfk_1` FOREIGN KEY (`id_product`) REFERENCES `tb_product` (`id_product`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_production`
--
ALTER TABLE `tb_production`
  ADD CONSTRAINT `tb_production_ibfk_1` FOREIGN KEY (`id_order`) REFERENCES `tb_order` (`id_order`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_production_ibfk_2` FOREIGN KEY (`id_harga_komponen`) REFERENCES `tb_harga_komponen` (`id_harga_komponen`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
