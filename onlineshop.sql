-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 09, 2023 at 07:49 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `onlineshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('admin', '$2y$10$S/rkfvHUnYJO0xPwm3uOYOmUAPdSy5dP4n.Qs1y5Eoy9DLya5TU2u');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `namaLengkap` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `kota` varchar(255) NOT NULL,
  `contact` varchar(15) NOT NULL,
  `paypalID` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`username`, `password`, `namaLengkap`, `email`, `dob`, `gender`, `alamat`, `kota`, `contact`, `paypalID`) VALUES
('imam', '$2y$10$xanObR3uC3LyMoL.y0PUOOlpXUyP0x9jO/bP4NYc65C3AvvrzrvKa', 'Imam Maskuri', 'imam@gmail.com', '2023-12-10', 'male', 'imam12', 'imam', '08927654321', '1209723'),
('mahen', '$2y$10$yRBZMglGyIFjaCukh3S/fem8Gj7n/iXkmzuyXWoxCVXK4.788ROcC', 'Mahendra Wisnu', 'mahendra@gmail.com', '2023-03-10', 'male', 'Tanggulangin', 'Sidoarjoh', '0877655433210', '0826012340'),
('rijal', '$2y$10$cVXX2b1KXWO1orHy6Njdye3K9LBZZpiq1RUilSmY60kAeXToq/En6', 'Rayhan Rizal', 'rijal@yahoo.com', '2023-10-01', 'female', 'Waru', 'Sidoarjo', '098876654', '123400223'),
('zaim', '$2y$10$2Nx02kBdKyRMic8U/AvUI.CrQdIP4iOa0Sb15tEtM9KJ6qGWaBk/K', 'Syarifuz Zaim', 'zaim@gmail.com', '2023-10-02', 'female', 'Dukun', 'Gresik', '089965543', '09113122');

-- --------------------------------------------------------

--
-- Table structure for table `guestbook`
--

CREATE TABLE `guestbook` (
  `idGuest` varchar(255) NOT NULL,
  `namaGuest` varchar(255) NOT NULL,
  `emailGuest` varchar(255) NOT NULL,
  `pesanGuest` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `guestbook`
--

INSERT INTO `guestbook` (`idGuest`, `namaGuest`, `emailGuest`, `pesanGuest`) VALUES
('GUEST-1696671293', 'Imam Maskuri', 'imam@gmail.com', '<p>masjasdajhdeioqjKKL;AKDS</p><ol><li>ewwer</li><li>ewrwe</li></ol>');

-- --------------------------------------------------------

--
-- Table structure for table `keranjang`
--

CREATE TABLE `keranjang` (
  `idKeranjang` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `idProduk` varchar(255) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `harga` int(11) NOT NULL,
  `status` enum('Belum Dibayar','Dibayar','Dibatalkan') NOT NULL,
  `idTransaksi` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `keranjang`
--

INSERT INTO `keranjang` (`idKeranjang`, `username`, `idProduk`, `jumlah`, `harga`, `status`, `idTransaksi`) VALUES
(71, 'zaim', 'PRD-1696503432', 2, 46000, 'Dibayar', 'TRS-1696718062'),
(72, 'zaim', 'PRD-1696569821', 1, 7000, 'Dibayar', 'TRS-1696718062'),
(73, 'zaim', 'PRD-1696681976', 1, 40000, 'Dibayar', 'TRS-1696718062'),
(74, 'zaim', 'PRD-1696681976', 1, 40000, 'Dibayar', 'TRS-1696718266'),
(75, 'zaim', 'PRD-1696569821', 1, 7000, 'Dibayar', 'TRS-1696718266'),
(76, 'zaim', 'PRD-1696585133', 1, 325000, 'Dibatalkan', 'TRS-1696718291'),
(77, 'zaim', 'PRD-1696681976', 1, 40000, 'Dibatalkan', 'TRS-1696718291'),
(78, 'zaim', 'PRD-1696681878', 1, 200000, 'Dibatalkan', 'TRS-1696718291'),
(81, 'zaim', 'PRD-1696569821', 2, 14000, 'Dibayar', 'TRS-1696718340'),
(82, 'zaim', 'PRD-1696681976', 1, 40000, 'Dibayar', 'TRS-1696718340'),
(84, 'imam', 'PRD-1696503432', 1, 23000, 'Dibatalkan', 'TRS-1696719037'),
(85, 'imam', 'PRD-1696569821', 1, 7000, 'Dibatalkan', 'TRS-1696719037'),
(86, 'imam', 'PRD-1696585133', 1, 325000, 'Dibayar', 'TRS-1696719056'),
(87, 'imam', 'PRD-1696681976', 1, 40000, 'Dibayar', 'TRS-1696719056'),
(94, 'imam', 'PRD-1696569821', 1, 7000, 'Dibayar', 'TRS-1696737247'),
(95, 'imam', 'PRD-1696585133', 1, 325000, 'Dibayar', 'TRS-1696737247'),
(96, 'mahen', 'PRD-1696503432', 1, 23000, 'Dibayar', 'TRS-1696738146'),
(97, 'mahen', 'PRD-1696569821', 2, 14000, 'Dibayar', 'TRS-1696738146'),
(98, 'mahen', 'PRD-1696585133', 1, 325000, 'Dibayar', 'TRS-1696738146'),
(99, 'mahen', 'PRD-1696503432', 2, 46000, 'Dibatalkan', 'TRS-1696738173'),
(100, 'mahen', 'PRD-1696681976', 1, 40000, 'Dibatalkan', 'TRS-1696738173'),
(103, 'mahen', 'PRD-1696569821', 2, 14000, 'Dibayar', 'TRS-1696738252'),
(104, 'mahen', 'PRD-1696503432', 1, 23000, 'Dibayar', 'TRS-1696738252'),
(105, 'mahen', 'PRD-1696681976', 1, 40000, 'Dibayar', 'TRS-1696738252'),
(106, 'imam', 'PRD-1696751145', 1, 425000, 'Belum Dibayar', ''),
(109, 'zaim', 'PRD-1696503432', 2, 46000, 'Dibayar', 'TRS-1696752653'),
(110, 'zaim', 'PRD-1696569821', 1, 7000, 'Dibayar', 'TRS-1696752653'),
(111, 'zaim', 'PRD-1696681976', 1, 40000, 'Dibayar', 'TRS-1696752653'),
(112, 'zaim', 'PRD-1696751145', 1, 425000, 'Dibayar', 'TRS-1696752677'),
(113, 'zaim', 'PRD-1696681878', 1, 200000, 'Dibayar', 'TRS-1696752677'),
(114, 'zaim', 'PRD-1696585133', 1, 325000, 'Dibayar', 'TRS-1696752677'),
(115, 'zaim', 'PRD-1696569821', 1, 7000, 'Dibatalkan', 'TRS-1696752705'),
(116, 'zaim', 'PRD-1696681976', 2, 80000, 'Dibatalkan', 'TRS-1696752705'),
(117, 'zaim', 'PRD-1696503432', 1, 23000, 'Dibatalkan', 'TRS-1696752705');

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `idProduk` varchar(255) NOT NULL,
  `namaProduk` varchar(255) NOT NULL,
  `kategoriProduk` varchar(255) NOT NULL,
  `hargaProduk` int(11) NOT NULL,
  `stokProduk` int(11) NOT NULL,
  `gambarProduk` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`idProduk`, `namaProduk`, `kategoriProduk`, `hargaProduk`, `stokProduk`, `gambarProduk`) VALUES
('PRD-1696503432', 'Ponstan 5000', 'Obat dan Suplemen', 23000, 15, '65215147d427f.jpg'),
('PRD-1696569821', 'Ibuprofen', 'Obat dan Suplemen', 7000, 39, '65225dc07e1e9.jpg'),
('PRD-1696585133', 'Oximeter', 'Alat Pemantau Kesehatan', 325000, 5, '65215243b441e.jpg'),
('PRD-1696681878', 'Weifeng Tekken', 'Alat Bantu Jalan', 200000, 10, '65214f964da7b.jpg'),
('PRD-1696681976', 'Stetoskop', 'Peralatan Medis', 40000, 77, '65214ff8837ba.jpg'),
('PRD-1696751145', 'Beurer MG15', 'Alat Terapi dan Rehabilitasi', 425000, 13, '65225e290296f.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `idTransaksi` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `tanggalTransaksi` date NOT NULL,
  `caraBayar` enum('Prepaid','Postpaid') NOT NULL,
  `bank` varchar(255) NOT NULL,
  `statusTransaksi` enum('Pending','Accepted','Rejected','Cancelled') NOT NULL,
  `totalHarga` int(11) NOT NULL,
  `statusPengiriman` enum('Pending','Dalam Perjalanan','Terkirim','Dibatalkan') NOT NULL,
  `feedBack` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`idTransaksi`, `username`, `tanggalTransaksi`, `caraBayar`, `bank`, `statusTransaksi`, `totalHarga`, `statusPengiriman`, `feedBack`) VALUES
('TRS-1696718266', 'zaim', '2023-10-08', '', 'Bayar Ditempat', 'Accepted', 47000, 'Terkirim', ''),
('TRS-1696718291', 'zaim', '2023-10-08', 'Postpaid', 'BCA', 'Cancelled', 565000, 'Dibatalkan', ''),
('TRS-1696718340', 'zaim', '2023-10-08', 'Postpaid', 'BCA', 'Rejected', 54000, 'Dibatalkan', ''),
('TRS-1696719037', 'imam', '2023-10-08', '', 'Bayar Ditempat', 'Cancelled', 30000, 'Dibatalkan', ''),
('TRS-1696719056', 'imam', '2023-10-08', 'Postpaid', 'BNI', 'Accepted', 365000, 'Terkirim', 'Bagus Luarbiasa'),
('TRS-1696737247', 'imam', '2023-10-08', 'Postpaid', 'Mandiri', 'Rejected', 332000, 'Dibatalkan', ''),
('TRS-1696738146', 'mahen', '2023-10-08', 'Prepaid', 'BCA', 'Rejected', 362000, 'Dibatalkan', ''),
('TRS-1696738173', 'mahen', '2023-10-08', 'Postpaid', 'BNI', 'Cancelled', 86000, 'Dibatalkan', ''),
('TRS-1696738252', 'mahen', '2023-10-08', '', 'Bayar Ditempat', 'Accepted', 77000, 'Terkirim', 'Sangat luar biasa'),
('TRS-1696752653', 'zaim', '2023-10-08', '', 'Bayar Ditempat', 'Rejected', 93000, 'Dibatalkan', ''),
('TRS-1696752677', 'zaim', '2023-10-08', 'Prepaid', 'BCA', 'Accepted', 950000, 'Terkirim', 'Waw'),
('TRS-1696752705', 'zaim', '2023-10-08', 'Postpaid', 'BRI', 'Cancelled', 110000, 'Dibatalkan', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `guestbook`
--
ALTER TABLE `guestbook`
  ADD PRIMARY KEY (`idGuest`);

--
-- Indexes for table `keranjang`
--
ALTER TABLE `keranjang`
  ADD PRIMARY KEY (`idKeranjang`),
  ADD KEY `username` (`username`,`idProduk`),
  ADD KEY `idProduk` (`idProduk`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`idProduk`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`idTransaksi`),
  ADD KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `keranjang`
--
ALTER TABLE `keranjang`
  MODIFY `idKeranjang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=118;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `keranjang`
--
ALTER TABLE `keranjang`
  ADD CONSTRAINT `keranjang_ibfk_1` FOREIGN KEY (`username`) REFERENCES `customer` (`username`),
  ADD CONSTRAINT `keranjang_ibfk_2` FOREIGN KEY (`idProduk`) REFERENCES `produk` (`idProduk`);

--
-- Constraints for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `transaksi_ibfk_1` FOREIGN KEY (`username`) REFERENCES `customer` (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
