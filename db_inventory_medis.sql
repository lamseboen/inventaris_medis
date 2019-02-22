-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 16, 2017 at 03:00 PM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_web`
--

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `kode` varchar(10) NOT NULL,
  `category_id` varchar(10) NOT NULL,
  `idsup` varchar(10) DEFAULT NULL,
  `namabarang` varchar(50) NOT NULL,
  `stok` int(11) NOT NULL,
  `hrgjual` int(11) DEFAULT NULL,
  `hrgbeli` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`kode`, `category_id`, `idsup`, `namabarang`, `stok`, `hrgjual`, `hrgbeli`) VALUES
('br-0001', 'cat-002', 'sup-0002', 'coba', 176, 1000, 2000),
('br-0002', 'cat-002', 'sup-0001', 'asekk', 361, 1111111, 7000),
('br-0003', 'cat-001', 'sup-0001', 'coba3', 69, 12435, 4525),
('br-0004', 'cat-001', 'sup-0002', 'asdasd', 125, 2147483647, 465788);

-- --------------------------------------------------------

--
-- Table structure for table `barangkeluar`
--

CREATE TABLE `barangkeluar` (
  `kodekeluar` varchar(10) NOT NULL,
  `nik` varchar(10) DEFAULT NULL,
  `tglkeluar` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `barangkeluar`
--

INSERT INTO `barangkeluar` (`kodekeluar`, `nik`, `tglkeluar`) VALUES
('trk-0001', 'id-0003', '2017-11-03'),
('trk-0002', 'id-0001', '2017-11-03'),
('trk-0003', 'id-0001', '2017-11-26'),
('trk-0004', 'id-0001', '2017-11-26'),
('trk-0005', 'id-0001', '2017-11-27'),
('trk-0006', 'id-0001', '2017-11-27'),
('trk-0007', 'id-0001', '2017-11-27'),
('trk-0008', 'id-0001', '2017-12-06'),
('trk-0009', 'id-0001', '2017-12-06'),
('trm-0003', 'id-0003', '2017-11-29');

-- --------------------------------------------------------

--
-- Table structure for table `barangmasuk`
--

CREATE TABLE `barangmasuk` (
  `kodemasuk` varchar(10) NOT NULL,
  `nik` varchar(10) NOT NULL,
  `tglmasuk` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `barangmasuk`
--

INSERT INTO `barangmasuk` (`kodemasuk`, `nik`, `tglmasuk`) VALUES
('trm-0001', 'id-0001', '2017-12-04'),
('trm-0002', 'id-0003', '2017-12-06'),
('trm-0003', 'id-0001', '2017-12-06'),
('trm-0004', 'id-0001', '2017-12-06');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `category_id` varchar(10) NOT NULL,
  `explanation` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`category_id`, `explanation`) VALUES
('cat-001', 'obat luar'),
('cat-002', 'obat dalam'),
('cat-003', 'obat salep'),
('cat-004', 'obat obat apa gitu');

-- --------------------------------------------------------

--
-- Table structure for table `detbarangkeluar`
--

CREATE TABLE `detbarangkeluar` (
  `kodebk` int(11) NOT NULL,
  `kodekeluar` varchar(10) NOT NULL,
  `kode` varchar(10) NOT NULL,
  `qtykeluar` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `detbarangkeluar`
--

INSERT INTO `detbarangkeluar` (`kodebk`, `kodekeluar`, `kode`, `qtykeluar`) VALUES
(1, 'trk-0008', 'br-0001', 2),
(2, 'trk-0009', 'br-0001', 2),
(3, 'trk-0009', 'br-0002', 3),
(4, 'trk-0009', 'br-0003', 4),
(5, 'trk-0009', 'br-0004', 30);

--
-- Triggers `detbarangkeluar`
--
DELIMITER $$
CREATE TRIGGER `tgKurangiStok` AFTER INSERT ON `detbarangkeluar` FOR EACH ROW UPDATE barang SET stok = stok - new.qtykeluar WHERE kode = NEW.kode
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `detbarangmasuk`
--

CREATE TABLE `detbarangmasuk` (
  `kodebm` int(11) NOT NULL,
  `kodemasuk` varchar(10) NOT NULL,
  `kode` varchar(10) NOT NULL,
  `qtymasuk` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `detbarangmasuk`
--

INSERT INTO `detbarangmasuk` (`kodebm`, `kodemasuk`, `kode`, `qtymasuk`) VALUES
(6, 'trm-0001', 'br-0001', 20),
(7, 'trm-0001', 'br-0002', 12),
(8, 'trm-0001', 'br-0003', 20),
(9, 'trm-0001', 'br-0004', 12),
(10, 'trm-0002', 'br-0004', 20),
(11, 'trm-0002', 'br-0003', 20),
(12, 'trm-0002', 'br-0002', 20),
(13, 'trm-0002', 'br-0001', 20),
(14, 'trm-0003', 'br-0001', 1),
(15, 'trm-0004', 'br-0001', 2),
(16, 'trm-0004', 'br-0001', 3),
(17, 'trm-0004', 'br-0001', 4);

--
-- Triggers `detbarangmasuk`
--
DELIMITER $$
CREATE TRIGGER `tgbarangmasuk` AFTER INSERT ON `detbarangmasuk` FOR EACH ROW UPDATE barang SET stok = stok + new.qtymasuk WHERE kode = NEW.kode
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

CREATE TABLE `supplier` (
  `idsup` varchar(10) NOT NULL,
  `namasup` varchar(100) NOT NULL,
  `notelp` varchar(20) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `category_id` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `supplier`
--

INSERT INTO `supplier` (`idsup`, `namasup`, `notelp`, `alamat`, `category_id`) VALUES
('sup-0001', 'surya kencana ahayt', '0210989239', ' jalan sukarno mantap    ', 'cat-002'),
('sup-0002', 'abadi cipta mandiri', '056522709', 'jalan citra agus liow    ', 'cat-002'),
('sup-0003', 'asdasd', '2134', ' dimana saja', 'cat-004'),
('sup-0004', 'cobha', '123', 'ahay', 'cat-001'),
('sup-0005', 'percobaan', '01923098123', 'asdhasfdijashdfas ', 'cat-002');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `nik` varchar(10) NOT NULL,
  `username` varchar(50) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `job` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`nik`, `username`, `nama`, `password`, `job`) VALUES
('id-0001', 'lamse_boen', 'stephen lambok', 'lambok', 'admin'),
('id-0002', 'admin', 'admin', 'admin', 'admin'),
('id-0003', 'jacko', 'michael jackson', 'michael', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`kode`),
  ADD KEY `fk_categoriess` (`category_id`),
  ADD KEY `fk_supplier` (`idsup`);

--
-- Indexes for table `barangkeluar`
--
ALTER TABLE `barangkeluar`
  ADD PRIMARY KEY (`kodekeluar`),
  ADD KEY `fk_user` (`nik`);

--
-- Indexes for table `barangmasuk`
--
ALTER TABLE `barangmasuk`
  ADD PRIMARY KEY (`kodemasuk`),
  ADD KEY `fk_userr` (`nik`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `detbarangkeluar`
--
ALTER TABLE `detbarangkeluar`
  ADD PRIMARY KEY (`kodebk`),
  ADD KEY `fk_kodekeluar` (`kodekeluar`),
  ADD KEY `fk_barang` (`kode`);

--
-- Indexes for table `detbarangmasuk`
--
ALTER TABLE `detbarangmasuk`
  ADD PRIMARY KEY (`kodebm`),
  ADD KEY `fk_kodemasuk` (`kodemasuk`),
  ADD KEY `fk_barangg` (`kode`);

--
-- Indexes for table `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`idsup`),
  ADD KEY `fk_categories` (`category_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`nik`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `detbarangkeluar`
--
ALTER TABLE `detbarangkeluar`
  MODIFY `kodebk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `detbarangmasuk`
--
ALTER TABLE `detbarangmasuk`
  MODIFY `kodebm` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `barang`
--
ALTER TABLE `barang`
  ADD CONSTRAINT `fk_categoriess` FOREIGN KEY (`category_id`) REFERENCES `categories` (`category_id`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_supplier` FOREIGN KEY (`idsup`) REFERENCES `supplier` (`idsup`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `barangkeluar`
--
ALTER TABLE `barangkeluar`
  ADD CONSTRAINT `fk_user` FOREIGN KEY (`nik`) REFERENCES `user` (`nik`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `barangmasuk`
--
ALTER TABLE `barangmasuk`
  ADD CONSTRAINT `fk_userr` FOREIGN KEY (`nik`) REFERENCES `user` (`nik`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `detbarangkeluar`
--
ALTER TABLE `detbarangkeluar`
  ADD CONSTRAINT `fk_barang` FOREIGN KEY (`kode`) REFERENCES `barang` (`kode`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_kodekeluar` FOREIGN KEY (`kodekeluar`) REFERENCES `barangkeluar` (`kodekeluar`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `detbarangmasuk`
--
ALTER TABLE `detbarangmasuk`
  ADD CONSTRAINT `fk_barangg` FOREIGN KEY (`kode`) REFERENCES `barang` (`kode`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_kodemasuk` FOREIGN KEY (`kodemasuk`) REFERENCES `barangmasuk` (`kodemasuk`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `supplier`
--
ALTER TABLE `supplier`
  ADD CONSTRAINT `fk_categories` FOREIGN KEY (`category_id`) REFERENCES `categories` (`category_id`) ON DELETE NO ACTION ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
