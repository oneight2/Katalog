-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 24, 2019 at 07:41 AM
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
-- Database: `katalog`
--

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `id_kategori` int(5) NOT NULL,
  `kode_barang` varchar(7) NOT NULL,
  `nama_barang` varchar(60) NOT NULL,
  `harga` varchar(30) NOT NULL,
  `ukuran` varchar(15) NOT NULL,
  `stok` int(10) NOT NULL,
  `deskripsi` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`id_kategori`, `kode_barang`, `nama_barang`, `harga`, `ukuran`, `stok`, `deskripsi`) VALUES
(6, 'H01', 'Sweater Basic Maroon', '119000', 'M', 12, '<p>Sweater polos tanpa logo, terdapat tanda lambang x jaitan di lingkar leher, merupakan koleksi basic terbaru.</p>'),
(6, 'H12', 'Zipper Soft Blue', '159000', 'M, L, ', 22, '<p>Bahan: baby terry katun, bahan lembut, halus, dan lemes.<br>Tangan dan badan bagian bawah menggunakan karet terry katun, jaitan menggunakan metode zigzag benang 5. resleting besi silver.</p><p>Warna : BlueSky</p>'),
(6, 'H13', 'Jumper Basic Navy', '159000', 'M, L, ', 20, '<p>Hoodieku Jumper Basic adalah jaket pullover dengan tambahan kupluk (hoodie), produk ini merupakan koleksi basic Hoodieku.<br>Model Hoodie adalah unisex (Bisa untuk perempuan atau Laki-Laki)<br>Bahan: Cotton Fleece, tangan dan bawah menggunakan karet, dan tali putih.</p><p>Warna : Navy</p>'),
(6, 'H14', 'Knit Sweater Hitam', '189000', 'M', 11, '<p>Sweater rajut bahan tebal, tersedia dalam 4 warna bisa untuk laki-laki dan perempuan</p><p>Warna : Navy</p>'),
(6, 'H15', 'Zipper Basic Abu', '149000', 'M, L, ', 25, '<p>Hoodieku Zipper Basic adalah jaket resleting dengan tambahan kupluk (hoodie), produk ini merupakan koleksi basic Hoodieku. Unisex (Bisa untuk perempuan atau Laki-Laki)<br>Bahan: Cotton Fleece, tangan dan bawah menggunakan karet, resleting putih dan tali putih.</p>'),
(6, 'H16', 'Sweeter Basic HItam', '119000', 'S, M, L, ', 20, '<p>Sweater polos tanpa logo, terdapat tanda lambang x jaitan di lingkar leher, merupakan koleksi basic terbaru.</p>'),
(7, 'JK01', 'Jaket Kulit Garut', '250000', 'S, M, ', 10, '<p>Jaket terbuat dari kulit domba asli, dibuat dengan jaitan yang rapih. memiliki ketahanan barang bagus.</p><p>Warna : Hitam, Coklat, dan coklat tua</p>'),
(5, 'P10', 'Bomber Stars BGSR', '110000', 'S, M, L, XL, ', 10, '<p>Jaket Bomber pria, bahan parasit tidak tembus air. Memiliki saku dalam.</p><p>Warna : Hitam, Maroon, Navy</p>'),
(5, 'P11', 'Bomber DC Tosca', '120000', 'S, M, L, ', 20, '<p>Merk DC, bolak balik. Bahan luar parasut taslan anti air, Bahan dalam kain cutton flecee bisa meresap keringat</p><p>Warna : Tosca<br>&nbsp;</p>'),
(5, 'P12', 'Bomber Maroon BGSR', '120000', 'M, L, ', 10, '<p>Bahan luar parasut taslan anti air, kain cutton flecee bisa meresap keringat.</p><p>Warna : Maroon<br>&nbsp;</p>'),
(5, 'P13', 'Bomber Navy BGSR', '120000', 'M, L, ', 10, '<p>Bahan luar parasut taslan anti air, kain cutton flecee bisa meresap keringat.</p><p>Warna : Navy<br>&nbsp;</p>');

-- --------------------------------------------------------

--
-- Table structure for table `foto`
--

CREATE TABLE `foto` (
  `kode_barang` varchar(7) NOT NULL,
  `foto1` varchar(30) NOT NULL,
  `foto2` varchar(30) NOT NULL,
  `foto3` varchar(30) NOT NULL,
  `foto4` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `foto`
--

INSERT INTO `foto` (`kode_barang`, `foto1`, `foto2`, `foto3`, `foto4`) VALUES
('H01', 'sweaterredhdk001-595x793.jpg', 'sweaterredhdk002-595x793.jpg', 'sweaterredhdk003-595x793.jpg', 'sweaterredhdk004-595x793.jpg'),
('H12', 'z.jpg', 'zi.jpg', 'zip.jpg', 'zipp.jpg'),
('H13', 'jumpernavy002-595x793.jpg', 'jumpernavy003-595x793.jpg', 'jumpernavy004-595x793.jpg', 'jumpernavy005-595x793.jpg'),
('H14', 'New-Project-26-595x793.jpg', 'New-Project-27-595x793.jpg', 'New-Project-28-595x793.jpg', 'New-Project-30-595x793.jpg'),
('H15', 'Jumpermisty001-595x793.jpg', 'Jumpermisty002-595x793.jpg', 'Jumpermisty003-595x793.jpg', 'Jumpermisty004-595x793.jpg'),
('H16', 'swe.jpg', 'swe.jpg', 'sweaterred.jpg', 'sweaterredh.jpg'),
('P10', 'b1.jpg', 'b2.jpg', 'b3.png', 'b2.jpg'),
('P11', 'x.jpg', 'b2.jpg', 'x.jpg', 'x.jpg'),
('P12', 'b3.png', 'b3.png', 'b3.png', 'b3.png'),
('P13', 'b2.jpg', 'b2.jpg', 'b2.jpg', 'b2.jpg'),
('JK01', 'jk.jpg', 'jk1.jpg', 'jk3.png', 'jk4.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(15) NOT NULL,
  `kategori` varchar(30) NOT NULL,
  `status` enum('on','off') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `kategori`, `status`) VALUES
(5, 'Parasit', 'on'),
(6, 'Hoodie', 'on'),
(7, 'Jaket Kulit', 'on');

-- --------------------------------------------------------

--
-- Table structure for table `slide`
--

CREATE TABLE `slide` (
  `id_slide` int(15) NOT NULL,
  `judul_slide` varchar(30) NOT NULL,
  `keterangan` text NOT NULL,
  `gambar` text NOT NULL,
  `urutan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `slide`
--

INSERT INTO `slide` (`id_slide`, `judul_slide`, `keterangan`, `gambar`, `urutan`) VALUES
(4, 'slide1', 'close', '4.jpg', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`kode_barang`),
  ADD KEY `id_kategori` (`id_kategori`);

--
-- Indexes for table `foto`
--
ALTER TABLE `foto`
  ADD KEY `kode_barang` (`kode_barang`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `slide`
--
ALTER TABLE `slide`
  ADD PRIMARY KEY (`id_slide`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `slide`
--
ALTER TABLE `slide`
  MODIFY `id_slide` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `barang`
--
ALTER TABLE `barang`
  ADD CONSTRAINT `barang_ibfk_1` FOREIGN KEY (`id_kategori`) REFERENCES `kategori` (`id_kategori`);

--
-- Constraints for table `foto`
--
ALTER TABLE `foto`
  ADD CONSTRAINT `foto_ibfk_1` FOREIGN KEY (`kode_barang`) REFERENCES `barang` (`kode_barang`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
