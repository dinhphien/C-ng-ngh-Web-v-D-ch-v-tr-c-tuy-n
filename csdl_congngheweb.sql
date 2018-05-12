-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 12, 2018 at 06:53 AM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `csdl_congngheweb`
--

-- --------------------------------------------------------

--
-- Table structure for table `donhang`
--

CREATE TABLE `donhang` (
  `iddonhang` int(11) NOT NULL,
  `idkhachhang` int(11) NOT NULL,
  `thanhtien` double NOT NULL,
  `ngaylapdonhang` date NOT NULL,
  `hinhthucthanhtoan` varchar(20) NOT NULL,
  `trangthai` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `khachhang`
--

CREATE TABLE `khachhang` (
  `idkhachhang` int(11) NOT NULL,
  `idtaikhoan` int(11) DEFAULT NULL,
  `tenkhachhang` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `sodienthoai` varchar(15) DEFAULT NULL,
  `quequan` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `khachhang`
--

INSERT INTO `khachhang` (`idkhachhang`, `idtaikhoan`, `tenkhachhang`, `email`, `sodienthoai`, `quequan`) VALUES
(1, 21, 'nguyễn thị hằng ', 'van@gmail.com', '09876', 'hanoi'),
(2, 23, 'nguyễn thanh hải ', 'van@gmail.com', '09876', 'hanoi'),
(3, 29, 'nguyễn thanh hải ', 'van@gmail.com', '09876', 'hanoi'),
(4, 30, 'nguyễn ngọc hoàng ', 'hoang@gmail.com', '098765', 'nam định'),
(5, 32, 'hà thanh', 'hathanh@gmail.com', '098765', 'hai phong'),
(6, 39, 'ngọc cẩm ', 'ngoccam@gmail.com', '09876', 'hai dương'),
(7, 40, 'đinh văn sáng ', 'sang@gmail.com', '0986753967', 'hải dương'),
(8, 41, 'Mai Trung Kiên', 'kien@gmail.com', '0987654', 'Hà Nội'),
(14, NULL, 'yendinh', 'yen@gmail.com', '09987654', 'Hà Nội'),
(15, NULL, 'yendinh', 'phien@gmail.com', '098765', 'thai nguyen'),
(16, NULL, 'tuyen', 'tuyen@gmail.com', '098765', 'hai duong'),
(17, NULL, 'van', 'tuyen@gmail.com', '098765', 'hai duong'),
(18, NULL, 'thang', 'thang@gmail.com', '0938887', 'Hà Nội'),
(19, NULL, 'hieu', 'hieu@gmail.com', '0987654', 'nam dinh'),
(20, NULL, 'quang', 'quang@gmail.com', '09876543', 'Hà Nội');

-- --------------------------------------------------------

--
-- Table structure for table `nhanvien`
--

CREATE TABLE `nhanvien` (
  `idnhanvien` int(11) NOT NULL,
  `idtaikhoan` int(11) NOT NULL,
  `tennhanvien` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `sodienthoai` varchar(15) DEFAULT NULL,
  `quequan` varchar(255) DEFAULT NULL,
  `nhiemvu` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `sanpham`
--

CREATE TABLE `sanpham` (
  `idsanpham` int(11) NOT NULL,
  `tensanpham` varchar(40) DEFAULT NULL,
  `loaisanpham` varchar(40) DEFAULT NULL,
  `giasanpham` double DEFAULT NULL,
  `mausacsanpham` varchar(40) DEFAULT NULL,
  `sizesanpham` varchar(11) DEFAULT NULL,
  `soluongsanpham` int(40) DEFAULT NULL,
  `motasanpham` text,
  `urlanhsanpham` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sanpham`
--

INSERT INTO `sanpham` (`idsanpham`, `tensanpham`, `loaisanpham`, `giasanpham`, `mausacsanpham`, `sizesanpham`, `soluongsanpham`, `motasanpham`, `urlanhsanpham`) VALUES
(1, 'Áo Phông', 'Nam', 400000, 'Trắng', 'M', 10, 'Đây là dòng sản phẩm xuân hè cao cấp phù hợp với thanh niên ..........', 'img/product1.jpg'),
(2, 'Áo Phông', 'Nữ', 500000, 'Trắng', 'L', 40, 'Đây là dòng sản phẩm xuân hè cao cấp phù hợp với thanh niên ..........', 'img/product2.jpg'),
(3, 'Áo Sơ Mi', 'Nam', 740000, 'Đen', 'XL', 40, 'Đây là dòng sản phẩm xuân hè cao cấp phù hợp với thanh niên ..........', 'img/product1_2.jpg'),
(4, 'Áo Khoác', 'Nam', 740000, 'Đen', 'XXL', 40, 'Đây là dòng sản phẩm xuân hè cao cấp phù hợp với thanh niên ..........', 'img/product1_2.jpg'),
(5, 'Áo Vest', 'Nam', 400000, 'Trắng', 'M', 40, 'Đây là dòng sản phẩm xuân hè cao cấp phù hợp với thanh niên ..........', 'img/product1.jpg'),
(6, 'Quần Âu', 'Nam', 500000, 'Trắng', 'L', 40, 'Đây là dòng sản phẩm xuân hè cao cấp phù hợp với thanh niên ..........', 'img/product2.jpg'),
(7, 'Quần Jean', 'Nam', 740000, 'Đen', 'XL', 40, 'Đây là dòng sản phẩm xuân hè cao cấp phù hợp với thanh niên ..........', 'img/product1_2.jpg'),
(8, 'Quần Short', 'Nam', 740000, 'Đen', 'XXL', 40, 'Đây là dòng sản phẩm xuân hè cao cấp phù hợp với thanh niên ..........', 'img/product1_2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `sanphamdonhang`
--

CREATE TABLE `sanphamdonhang` (
  `iddonhang` int(11) NOT NULL,
  `idsanpham` int(11) NOT NULL,
  `soluong` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `sanphamgiohang`
--

CREATE TABLE `sanphamgiohang` (
  `idkhachhang` int(11) NOT NULL,
  `idsanpham` int(11) NOT NULL,
  `soluongsanphamgiohang` int(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sanphamgiohang`
--

INSERT INTO `sanphamgiohang` (`idkhachhang`, `idsanpham`, `soluongsanphamgiohang`) VALUES
(19, 1, 3);

-- --------------------------------------------------------

--
-- Table structure for table `taikhoan`
--

CREATE TABLE `taikhoan` (
  `idtaikhoan` int(11) NOT NULL,
  `tentaikhoan` varchar(255) DEFAULT NULL,
  `matkhau` varchar(255) DEFAULT NULL,
  `vaitro` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `taikhoan`
--

INSERT INTO `taikhoan` (`idtaikhoan`, `tentaikhoan`, `matkhau`, `vaitro`) VALUES
(1, 'phien', 'phien', 'admin'),
(19, 'vân', '1', 'user'),
(21, 'hằng', '2', 'user'),
(23, 'hải', '2', 'user'),
(29, 'hải anh', '2', 'user'),
(30, 'hoàng', '7', 'user'),
(32, 'thanh', '1234', 'user'),
(39, 'cẩm', '45', 'user'),
(40, 'sáng', '123456', 'user'),
(41, 'maikien', '1234', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`idkhachhang`),
  ADD UNIQUE KEY `idtaikhoan` (`idtaikhoan`);

--
-- Indexes for table `nhanvien`
--
ALTER TABLE `nhanvien`
  ADD PRIMARY KEY (`idnhanvien`),
  ADD KEY `idtaikhoan` (`idtaikhoan`);

--
-- Indexes for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`idsanpham`);

--
-- Indexes for table `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD PRIMARY KEY (`idtaikhoan`),
  ADD UNIQUE KEY `tentaikhoan` (`tentaikhoan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `khachhang`
--
ALTER TABLE `khachhang`
  MODIFY `idkhachhang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `idsanpham` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `taikhoan`
--
ALTER TABLE `taikhoan`
  MODIFY `idtaikhoan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `khachhang`
--
ALTER TABLE `khachhang`
  ADD CONSTRAINT `khachhang_ibfk_1` FOREIGN KEY (`idtaikhoan`) REFERENCES `taikhoan` (`idtaikhoan`);

--
-- Constraints for table `nhanvien`
--
ALTER TABLE `nhanvien`
  ADD CONSTRAINT `nhanvien_ibfk_1` FOREIGN KEY (`idtaikhoan`) REFERENCES `taikhoan` (`idtaikhoan`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
