-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 17, 2018 at 07:20 AM
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

-- --------------------------------------------------------

--
-- Table structure for table `tintuc`
--

CREATE TABLE `tintuc` (
  `idtintuc` int(11) NOT NULL,
  `tentintuc` text CHARACTER SET utf8 NOT NULL,
  `noidungtintuc` text CHARACTER SET utf8 NOT NULL,
  `urlanhtintuc` varchar(255) NOT NULL,
  `ngayviet` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tintuc`
--

INSERT INTO `tintuc` (`idtintuc`, `tentintuc`, `noidungtintuc`, `urlanhtintuc`, `ngayviet`) VALUES
(1, 'Gucci vừa ra mắt công cụ tuỳ biến sản phẩm “cộp mác” dấu ấn khách hàng', 'Mới đây, những tín đồ thời trang của thương hiệu Gucci đã thích thú khi có cơ hội được chỉnh sửa những thiết kế có sẵn theo ý thích của riêng mình.\r\n\r\nKể từ khi NTK Alessandro Michele trở thành giám đốc sáng tạo của Gucci thì bộ mặt của nhà mốt Pháp đã có sự chuyển biến rõ rệt. Với bộ óc sáng tạo và tài năng của mình, Alessandro đã biến chuyển thương hiệu Gucci trở thành “ông lớn” hàng đầu trên thị trường thời trang với hàng loạt những chiến dịch là tiền đề truyền cảm hứng những thương hiệu khác.\r\n\r\nMới đây, thương hiệu Gucci lại thu hút sự chú ý khi giới thiệu một dịch vụ độc quyền được mang tên DIY (Do It Yourself) ngay trên chính trang web và trong cửa hàng Wooser Street mới mở toạ lạc tại thành phố New York. Điều đặc biệt là chương trình này chỉ áp dụng với dòng sản phẩm túi tote Ophidia và những đôi sneaker ACE đặc trưng của hãng.', '../admin/images/newsimg1.jpg', '16/05/2018'),
(2, 'Màu xanh lá – sở thích hay chiến thuật thời trang của Meghan Markle?', 'Không phải ngẫu nhiên công nương tương lai của nước Anh lại chọn màu xanh lá trong nhiều dịp xuất hiện trước công chúng. Những chiếc áo, đầm, túi xách thanh lịch gam xanh giúp cô thể hiện phong cách và những thông điệp quan trọng.\r\n\r\nTrước khi công bố thông tin đính hôn với Hoàng tử Harry, Meghan Markle cũng đã là một cái tên quen thuộc trên màn ảnh và báo chí với vai trò là diễn viên. Khi đó, cô sở hữu một phong cách hoàn toàn khác, gợi cảm, nóng bỏng nhưng giờ đây, để chuẩn bị cho việc trở thành một thành viên của gia đình hoàng gia thì điều đó đã dần thay đổi.\r\n\r\nTuy nhiên, có một điều công nương tương lai vẫn giữ nguyên đó là tông màu xanh lá.', '../admin/images/newsimg2.jpg', '16/05/2018'),
(3, 'Bí quyết diện chân váy maxi đẹp suốt 365 ngày', 'Chân váy maxi với độ dài hoàn hảo và đầy tính linh hoạt mà phái đẹp nên sở hữu và thành thục cách kết hợp.\r\n\r\nChân váy maxi với độ dài thướt tha có thể dễ dàng kết hợp để tạo ra phong cách đa dạng mà còn giúp che được mọi nhược điểm về đôi chân đồng thời giúp “ăn gian” chiều cao của bạn. Đây là món đồ cực kỳ dễ tính với mọi dáng người.\r\n\r\nNhững gì bạn cần làm là tìm ra được thiết kế phù hợp, vừa vặn với dáng mình và biết cách kết hợp nó với phần còn lại của trang phục.                                                                                                                                                                                                                       Nếu bạn là người chơi mới, chân váy maxi đen là lựa chọn sáng suốt dành cho bất kì chủ nhân nào. Chân váy maxi đen vừa linh hoạt vừa thời thượng sẽ phù hợp với mọi dịp (văn phòng, các buổi tiệc) và càng tuyệt vời hơn với trang phục mùa hè. Bạn sẽ trông thật ấn tượng khi kết hợp chân váy với một chiếc áo sơmi, áo thun cùng với giày boots đen hay áo khoác blazer.', '../admin/images/newsimg3.jpg', '14/05/2018'),
(4, 'Sơn Tùng M-TP tham dự triển lãm BST Gucci Thu Đông 2018', 'Sơn Tùng M-TP là khách mời VIP duy nhất đến từ Việt Nam trong buổi triển lãm lần này của nhà mốt Alessandro Michele.\r\n\r\nSau khi xuất hiện trên ấn phẩm ELLE tháng 4 vừa qua cùng với BST Gucci Xuân Hè 2018, nam ca sĩ Sơn Tùng M-TP tiếp tục đồng hành cùng thương hiệu thời trang cao cấp này tại triển lãm BST Gucci Thu Đông 2018.\r\n\r\nVới phong cách thời trang ngày một ấn tượng cũng như thần thái chuyên nghiệp của một nghệ sĩ, Sơn Tùng M-TP lên đường sang Hong Kong để tham dự buổi triển lãm Bộ sưu tập Thu Đông 2018 của Gucci. Nam ca sĩ cũng chính là gương mặt VIP duy nhất đến từ Việt Nam xuất hiện trong sự kiện lần này của hãng.\r\n                                                                                                   Buổi triển lãm được diễn ra vào tối ngày 15/5/2018 với sự tham gia của nam ca sĩ Sơn Tùng M-TP, các nhà báo và bốn gương mặt trẻ là các influencer trong giới thời trang cũng như giải trí đến từ khắp nơi trong khu vực Châu Á.', '../admin/images/newsimg4.jpg', '17/05/2018'),
(5, 'Những thông tin mới nhất về các xu hướng và thương hiệu thời trang', 'Hãng đồng hồ và trang sức cao cấp Chopard vừa công bố từ tháng 7/ 2018, Chopard sẽ sử dụng 100% “Ethical Gold” (vàng rõ nguồn gốc) trong việc chế tác đồng hồ và đồ trang sức. “Ethical Gold” trở thành một cụm từ quý hơn vàng khi nâng cao tính bền vững, trách nhiệm với xã hội và môi trường của thương hiệu. Theo đó, Chopard sẽ sử dụng nguồn nguyên liệu vàng một cách có trách nhiệm. Hãng cam kết chỉ lấy vàng từ những nguồn khai thác đạt tiêu chuẩn quốc tế về an toàn môi trường và xã hội. Chopard chỉ sử dụng vàng từ hai nguồn: vàng từ các mỏ tham gia vào Hiệp hội Vàng Swiss Better Gold Association (SBGA), và vàng của RJC Chain of Custody. Để có nguồn nguyên liệu vàng cung cấp cho ngành chế tác, nhiều mỏ khai thác hoạt động không tuân thủ quy định môi trường hoặc không đảm bảo an toàn lao động. Chopard trở thành thương hiệu trang sức tiên phong minh bạch về nguyên liệu đầu vào, góp phần bảo vệ môi trường và phát triển bền vững. Còn đối với các thương hiệu thời trang lớn như Versace, Gucci, Maison Margiela, Michael Kors, cuộc cách mạng “thời trang có trách nhiệm” được hiện thực hóa bằng việc ngưng sử dụng lông thú. Thương hiệu thời trang Gucci sẽ tiếp tục góp phần bảo vệ động vật, đồng thời hãng hy vọng sẽ trở thành nguồn cảm hứng trong công cuộc đổi mới ngành thời trang cao cấp và nâng cao nhận thức của người tiêu dùng. Thương hiệu thời trang Versace sẽ chính thức ngưng trình làng và bày bán các sản phẩm lông thú bắt đầu từ năm 2019. NTK Donatella Versace chia sẻ niềm hy vọng về tương lai đổi mới của ngành thời trang khi rời bỏ những hành động phi nhân đạo với động vật và tìm kiếm những chất liệu phù hợp hơn. Gần đây nhất, vào đầu tháng 4, Giám đốc Sáng tạo John Galliano của thương hiệu thời trang Maison Margiela tuyên bố không sử dụng lông thú: “Ngày nay, chúng ta không chỉ đơn giản muốn một sản phẩm, chúng ta muốn nhiều hơn thế – đạo đức. Đây cũng là điều bảo vệ những giá trị mà chúng tôi hằng ngưỡng mộ”.', '../admin/images/newsimg5.jpg', '17/05/2018');

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
-- Indexes for table `tintuc`
--
ALTER TABLE `tintuc`
  ADD PRIMARY KEY (`idtintuc`);

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
