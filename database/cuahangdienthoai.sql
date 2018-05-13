-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 13, 2018 at 09:42 AM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cuahangdienthoai`
--

-- --------------------------------------------------------

--
-- Table structure for table `chitietdt`
--

CREATE TABLE `chitietdt` (
  `IDDT` int(11) NOT NULL,
  `TENDT` varchar(250) DEFAULT NULL,
  `MOTA` varchar(500) DEFAULT NULL,
  `GIANIEMYET` int(11) DEFAULT NULL,
  `GIAKM` int(11) DEFAULT NULL,
  `SOLUONG` int(11) DEFAULT NULL,
  `MADT` varchar(50) DEFAULT NULL,
  `HINHANH` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `chitietdt`
--

INSERT INTO `chitietdt` (`IDDT`, `TENDT`, `MOTA`, `GIANIEMYET`, `GIAKM`, `SOLUONG`, `MADT`, `HINHANH`) VALUES
(1, 'IPhone 4', 'iPhone 4S là thiết bị khá nhỏ gọn, camera chụp ảnh đẹp, cấu hình ổn định, sản phẩm lại có thương hiệu xứng đáng là lựa chọn tối ưu trong tầm giá dưới 5 triệu bạn không nên bỏ lỡ.\r\n\r\nLà bản sao iPhone 4\r\n\r\nMới nhìn sơ qua iPhone 4S có thiết kế tương tự người anh em iPhone 4, máy được làm bằng khung kim loại với 4 góc được bo tròn.', 2000000, 1500000, 10, 'IPHONE', 'imgDT/ip4.jpg'),
(2, 'IPhone 5', 'Thiết kế mới nguyên khối mỏng nhất trong các siêu phẩm của Apple\r\n\r\nNgay từ buổi lễ ra mắt, các nhà thiết kế của Apple đã khẳng định đây là chiếc điện thoại mỏng nhất mà họ từng làm, iPhone 5 sở hữu những thông số về kích thước thật đáng kinh ngạc, máy mỏng chỉ 7.6 mm và trọng lượng chưa tới 112g, nếu đem ra so sánh với các smartphone hiện nay thì iPhone 5 thực sự là một trong những chiếc điện thoại mỏng nhất, nhẹ nhất.', 3000000, 2800000, 50, 'IPHONE', 'imgDT/ip5.jpeg'),
(3, 'IPhone X', '\"iPhone X giá\" là cụm từ được rất nhiều người mong chờ muốn biết và tìm kiếm trên Google bởi đây là chiếc điện thoại mà Apple kỉ niệm 10 năm iPhone đầu tiên được bán ra.\r\nThiết kế đột phá\r\n\r\nNhư các bạn cũng đã biết thì đã 4 năm kể từ iPhone 6 và iPhone 6 Plus Apple vẫn chưa có thay đổi nào đáng kể trong thiết kế của mình.', 23000000, 20000000, 15, 'IPHONE', 'imgDT/ipx.png'),
(4, 'Samsung Galaxy J7', 'Samsung Galaxy J7 (2016) được cải tiến về mặt ngoại hình, bổ sung kết nối 4G cùng nhiều tiện ích hơn.\r\nThay đổi chất liệu gia công máy ở Galaxy J7 2016\r\n\r\nĐiều gì để bạn phân biệt giữa 2 Galaxy J7 và Galaxy J7 2016, chính là mặt lưng được tạo họa tiết xước phay ngang như kim loại khá bắt mắt.', 5000000, 4500000, 25, 'SAMSUNG', 'imgDT/j7.png'),
(5, 'Samsung Galaxy J7+', 'Samsung Galaxy J7+ là dòng smartphone tầm trung nhưng được trang bị camera kép có khả năng chụp ảnh xóa phông chân dung cùng thiết kế đẹp và hiệu năng mạnh mẽ.\r\nThiết kế cao cấp\r\n\r\nSamsung Galaxy J7+ tiếp tục được sử dụng thiết kế nguyên khối từ kim loại như các dòng cao cấp, mang lại vẻ đẹp sang trọng cũng như bền bỉ nhất.', 9000000, 7500000, 10, 'SAMSUNG', 'imgDT/j7p.png'),
(6, 'ASUS Zenfone Max Plus M1 - ZB570TL', 'Zenfone Max Plus M1 là chiếc smartphone theo xu thế màn hình viền mỏng đầu tiên của ASUS. Với ưu điểm thiết kế đẹp, pin lớn truyền thống dòng Zenfone Max, camera kép và mức giá tầm trung cực kì hấp dẫn và đáng sở hữu.\r\nThiết kế mới đẹp mắt\r\n\r\nASUS chọn dòng smartphone pin khủng của mình để ứng dụng xu hướng thiết kế viền mỏng đang trở thành trào lưu hiện nay. Dù vậy Zenfone Max Plus M1 cũng có kích thước mỏng và nhỏ gọn, màn hình 5.7 inch nhưng máy chỉ gọn gàng tương đương một chiếc smartphone 5', 4500000, 4350000, 50, 'ASUS', 'imgDT/as1.png'),
(7, 'Asus Zenfone 4 Max Pro ZC554KL', 'Asus ZenFone 4 Max Pro là sản phẩm có mức giá rẻ nhất được Asus giới thiệu trong sự kiện vào tháng 8 vừa rồi, ưu điểm lớn nhất của máy chính là viên pin dung lượng khủng cùng bộ đôi camera kép ấn tượng.\r\nThiết kế quen thuộc\r\n\r\nZenFone 4 Max Pro sở hữu thiết kế khá quen thuộc của Asus với các góc cạnh được bo tròn cho cảm giác thoải mái khi cầm nắm, đặc biệt không có cảm giác trơn trượt khi cầm tay và không sợ dính dấu vân tay.', 5600000, 5250000, 30, 'ASUS', 'imgDT/as2.jpg'),
(8, 'HTC U Ultra', 'HTC U Ultra đánh dấu sự trở lại của HTC với triết lý thiết kế mới, đẹp hơn - sang trọng - bóng bẩy hơn và đặc biệt gắn bó với người dùng hơn thông qua trợ lý ảo HTC Sense Companion.', 6700000, 6550000, 50, 'HTC', 'imgDT/htc1.png'),
(9, 'HTC 10 EVO', 'HTC 10 evo mang lại cho bạn trải nghiệm về thiết kế, những trang bị cao cấp của một chiếc flagship đến từ HTC nhưng với mức giá chưa tới một nửa.\r\nThiết kế của HTC 10\r\n\r\nĐúng như tên gọi HTC 10 evo thì thiết kế của máy khá giống với người tiền nhiệm HTC 10, khác biệt duy nhất nằm ở mặt lưng khi máy được làm phẳng chứ không vát cong như chiếc HTC 10.', 5600000, 5300000, 50, 'HTC', 'imgDT/htc2.png'),
(10, 'OPPO F7', 'Tiếp nối sự thành công của OPPO F5 thì OPPO tiếp tục tung ra OPPO F7 với điểm nhấn vẫn là camera selfie và thiết kế \"tai thỏ độc đáo\".\r\nThiết kế độc đáo\r\n\r\nOPPO F7 vẫn đi theo thiết kế \"tai thỏ\" mà Apple đã từng làm trên iPhone X.', 7500000, 7350000, 50, 'OPPO', 'imgDT/f7.png'),
(11, 'OPPO F5', 'Thiết kế màn hình tràn cạnh\r\n\r\nOPPO F5 là chiếc smartphone đầu tiên của OPPO theo xu hướng màn hình tràn cạnh cực đẹp với các cạnh viền cực mỏng. Toàn bộ phím điều hướng đều được đưa vào màn hình.', 5600000, 5450000, 20, 'OPPO', 'imgDT/f5.png'),
(12, 'NOKIA 7 PLUS', 'Nokia 7 Plus là chiếc smartphone đầu tiên đánh dấu bước đi đầu tiên của HMD vào thế giới màn hình tỉ lệ 18:9.\r\nThiết kế đẹp mắt\r\n\r\nNokia 7 Plus mang trong mình thiết kế mới mẻ nhưng vẫn có những thứ rất quen thuộc với người dùng đã quen với thương hiệu Nokia.', 5600000, 5300000, 50, 'NOKIA', 'imgDT/nokia7.png'),
(13, 'NOKIA 5', 'Nokia 5 là một điện thoại mới được trình làng đánh dấu sự trở lại ở sự kiện MWC 2017. Máy mang trong mình nhiều thay đổi cùng mức giá bán hấp dẫn.', 4500000, 4300000, 20, 'NOKIA', 'imgDT/nokia5.png'),
(14, 'PHILIPS S329\r\n', 'Philips S329 là một chiếc smartphone cấu hình tốt sở hữu mức giá bán phải chăng phù hợp với nhiều đối tượng người dùng khác nhau.\r\nThiết kế cơ bản\r\n\r\nDù là một sản phẩm giá rẻ nhưng Philips vẫn trang bị cho S329 một thiết kế nguyên khối, với lớp vỏ bên ngoài bằng nhựa, được hoàn thiện phay xước sang trọng.', 6700000, 6300000, 20, 'PHILIPS', 'imgDT/phi1.png'),
(15, 'PHILIPS S327', 'Màn hình rộng, pin lớn, chạy hệ điều hành Android 7 và cấu hình khá hội tụ trong một chiếc smartphone giá rẻ đáng mua cho người dùng phổ thông dùng để giải trí, làm việc.\r\nThiết kế cơ bản\r\n\r\nPhilips S327 sở hữu thiết kế cơ bản như các dòng smartphone giá rẻ hiện nay, vỏ nhựa, màn hình lớn nhưng kích thước khá nhỏ gọn và không quá dày. Máy cho cảm giác cầm nắm chắc tay, các góc cạnh bo cong nên sử dụng thoải mái.', 4650000, 4300000, 50, 'PHILIPS', 'imgDT/phi2.png'),
(16, 'SONY Xperia XZ2', 'Xperia XZ2 là chiếc flagship mới được Sony giới thiệu tại MWC 2018 với sự thay đổi lớn về thiết kế so với những người tiền nhiệm.\r\nLột xác về thiết kế\r\n\r\nVới Xperia XZ2, ngôn ngữ thiết kế \"Omni Balance\" trứ danh một thời của Sony đã đi vào dĩ vãng để nhường chỗ cho một thiết kế mới mẻ và đột phá hơn hẳn.', 18900000, 18550000, 50, 'SONY', 'imgDT/sony1.png'),
(17, 'Sony Xperia X', 'Sony vừa giới thiệu dòng sản phẩm X Serie mới của hãng trong năm 2016 tại triển lãm MWC. Xperia X là chiếc smartphone tầm trung mới với nhiều điểm nhấn đáng chú ý.', 9790000, 9570000, 50, 'SONY', 'imgDT/sony2.png'),
(18, 'VIVO V9', 'Vivo V9 là chiếc smartphone tầm trung cận cao cấp với điểm nhấn là máy có camera kép phía sau và camera selfie độ phân giải cao 24 MP.\r\nThiết kế theo xu thế\r\n\r\nCũng giống như ZenFone 5, OPPO R15 hay Huawei P20, chiếc smartphone này của Vivo cũng dõi theo xu hướng thiết kế notch (hay còn gọi là tai thỏ) như trên chiếc iPhone X của Apple.', 7620000, 7400000, 50, 'VIVO', 'imgDT/vivov9.png'),
(19, 'VIVO V7', 'Vivo V7 là một chiếc smartphone giá rẻ được trang bị màn hình tỉ lệ 18:9 đang trở thành trào lưu hiện nay cùng một cấu hình khá tốt cho các nhu cầu sử dụng hằng ngày.\r\nThiết kế đẹp mắt\r\n\r\nDù chỉ được hoàn thiện từ chất liệu nhựa thay vì kim loại như trên Vivo V7 Plus nhưng không vì thế mà máy mất đi vẻ sang trọng và tinh tế.', 6300000, 6150000, 30, 'VIVO', 'imgDT/vivov7.png'),
(20, 'Xiaomi Mi A1 64GB', 'Mi A1 được Xiaomi chính thức ra mắt tại Ấn Độ với vai trò là một dự án hợp tác Android One của Google. Hãy cùng mình trên tay nhanh chiếc máy chạy Android thuần cùng camera xóa phông ảo diệu mà giá chỉ hơn 5 triệu này nhé.', 5700000, 5450000, 50, 'XIAOMI', 'imgDT/xi10.png'),
(21, 'Xiaomi Redmi Note 5', 'Xiaomi Redmi Note 5 là thiết bị thứ ba trong phân khúc tầm trung - giá rẻ của Xiaomi sở hữu màn hình tỉ lệ mới 18:9.\r\nThiết kế quen thuộc\r\n\r\nXiaomi Redmi Note 5 sở hữu ngôn ngữ thiết kế khá quen thuộc với khung viền kim loại cùng hai dải nhựa hỗ trợ thu phát sóng tốt hơn.', 5800000, 5660000, 50, 'XIAOMI', 'imgDT/xi2.png');

-- --------------------------------------------------------

--
-- Table structure for table `dienthoai`
--

CREATE TABLE `dienthoai` (
  `MADT` varchar(50) NOT NULL,
  `TENDT` varchar(250) DEFAULT NULL,
  `GHICHU` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `dienthoai`
--

INSERT INTO `dienthoai` (`MADT`, `TENDT`, `GHICHU`) VALUES
('ASUS', 'ASUS', ''),
('HTC', 'HTC', ''),
('IPHONE', 'IPHONE', ''),
('NOKIA', 'NOKIA', ''),
('OPPO', 'OPPO', ''),
('PHILIPS', 'PHILIPS', ''),
('SAMSUNG', 'SAMSUNG', ''),
('SONY', 'SONY', ''),
('VIVO', 'VIVO', ''),
('XIAOMI', 'XIAO MI', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chitietdt`
--
ALTER TABLE `chitietdt`
  ADD PRIMARY KEY (`IDDT`),
  ADD KEY `MADT` (`MADT`);

--
-- Indexes for table `dienthoai`
--
ALTER TABLE `dienthoai`
  ADD PRIMARY KEY (`MADT`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chitietdt`
--
ALTER TABLE `chitietdt`
  MODIFY `IDDT` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `chitietdt`
--
ALTER TABLE `chitietdt`
  ADD CONSTRAINT `chitietdt_ibfk_1` FOREIGN KEY (`MADT`) REFERENCES `dienthoai` (`MADT`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
