-- phpMyAdmin SQL Dump
-- version 4.4.15.9
-- https://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 06, 2018 at 07:13 PM
-- Server version: 5.6.37
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `CT250Windsor`
--

-- --------------------------------------------------------

--
-- Table structure for table `About`
--

CREATE TABLE IF NOT EXISTS `About` (
  `AboutId` smallint(6) NOT NULL,
  `AboutName` varchar(145) COLLATE utf8_unicode_ci NOT NULL,
  `AboutHistory` varchar(245) COLLATE utf8_unicode_ci NOT NULL,
  `AboutOthers` varchar(155) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ImgAbout` varchar(300) COLLATE utf8_unicode_ci DEFAULT NULL,
  `EmployeeCode` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `Bill`
--

CREATE TABLE IF NOT EXISTS `Bill` (
  `BillId` int(11) NOT NULL,
  `BillCreate` datetime NOT NULL,
  `BillDetails` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  `BillStatus` int(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `Bill_Order`
--

CREATE TABLE IF NOT EXISTS `Bill_Order` (
  `BillId` int(11) NOT NULL,
  `OrderId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `Category`
--

CREATE TABLE IF NOT EXISTS `Category` (
  `CategoryId` int(11) NOT NULL,
  `CategoryName` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `CategoryDescription` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `Category`
--

INSERT INTO `Category` (`CategoryId`, `CategoryName`, `CategoryDescription`) VALUES
(1, 'Rượu Wisky', 'Nói chung , từ « whisky » có liên quan đến Whisky Scotch , có nghĩa là whisky của người Ecoss ( phần lớn sản phẩm ) , cũng như có thể nói người Ai Len');

-- --------------------------------------------------------

--
-- Table structure for table `Contact`
--

CREATE TABLE IF NOT EXISTS `Contact` (
  `ContactId` int(11) NOT NULL,
  `Subject` int(11) NOT NULL,
  `Names` varchar(145) COLLATE utf8_unicode_ci NOT NULL,
  `Date` date DEFAULT NULL,
  `Information` varchar(145) COLLATE utf8_unicode_ci NOT NULL,
  `Email` varchar(145) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Phone` int(10) unsigned NOT NULL,
  `Address` varchar(145) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `Country`
--

CREATE TABLE IF NOT EXISTS `Country` (
  `CountryId` int(12) NOT NULL,
  `CountryName` varchar(150) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `CountryDetails` varchar(150) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `Country`
--

INSERT INTO `Country` (`CountryId`, `CountryName`, `CountryDetails`) VALUES
(1, 'Mỹ', ''),
(2, 'Việt Nam', ''),
(3, 'Thái Lan', ''),
(4, 'Lào', ''),
(5, 'Campuchia', ''),
(6, 'Hàn Quốc', ''),
(7, 'Pháp', ''),
(8, 'Ai Cập', ''),
(9, 'Ý', ''),
(10, 'Bỉ', 'Bỉ là một quốc gia'),
(11, 'Nhật Bản', 'Một quốc gia nổi tiếng với nhiều loại rượu. Khi bạn uống rượu và ngắm hoa anh đào thật là tuyệt phải không?'),
(12, 'Thụy Sỉ', 'Những loại rượu tuyệt vời của Thụy Sĩ bạn sẽ phải ngất ngây'),
(13, 'Thụy Sỉ', 'Những loại rượu tuyệt vời của Thụy Sĩ bạn sẽ phải ngất ngây'),
(14, 'Úc', 'Một trong những quốc gia nổi tiếng với rượu trái cây'),
(15, 'Úc', 'Một trong những quốc gia nổi tiếng với rượu trái cây'),
(16, 'Úc', 'Một trong những quốc gia nổi tiếng với rượu trái cây'),
(17, 'Canada', 'Canada không mấy nổi tiếng về rượu'),
(18, 'Canada', 'Canada không mấy nổi tiếng về rượu'),
(19, 'Canada', 'Canada không mấy nổi tiếng về rượu');

-- --------------------------------------------------------

--
-- Table structure for table `Employee`
--

CREATE TABLE IF NOT EXISTS `Employee` (
  `EmployeeCode` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `EmployeePass` varchar(40) COLLATE utf8_unicode_ci DEFAULT NULL,
  `EmployeeName` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `EmployeeBirth` date NOT NULL,
  `EmployeeAddress` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `EmployeeEmail` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `EmployeeIC` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Role` smallint(6) DEFAULT '2'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `Employee`
--

INSERT INTO `Employee` (`EmployeeCode`, `EmployeePass`, `EmployeeName`, `EmployeeBirth`, `EmployeeAddress`, `EmployeeEmail`, `EmployeeIC`, `Role`) VALUES
('dangtuanhuy', '61fcd36c8292bdf65aab93287009f0f0', 'Đặng Tuấn Huy', '1997-01-02', '136B, Nguyễn Văn Cừ nối dài, Ninh Kiều, Cần Thơ', 'dangtuanhuyhachi@gmail.com', '321573023', 4);

-- --------------------------------------------------------

--
-- Table structure for table `Feedback`
--

CREATE TABLE IF NOT EXISTS `Feedback` (
  `FeedbackId` int(11) NOT NULL,
  `Username` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `FeedbackCreate` date DEFAULT NULL,
  `FeedbackAddress` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `FeedbackContent` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `Reply` tinyint(1) DEFAULT '0',
  `EmployeeCode` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ImgEmployee`
--

CREATE TABLE IF NOT EXISTS `ImgEmployee` (
  `ImgEmployeeId` tinyint(4) NOT NULL,
  `ImgEmployee` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `EmployeeCode` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ImgWine`
--

CREATE TABLE IF NOT EXISTS `ImgWine` (
  `ImgWineId` int(11) NOT NULL,
  `ImgWine` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `WineId` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `News`
--

CREATE TABLE IF NOT EXISTS `News` (
  `NewsId` smallint(6) NOT NULL,
  `NewsNames` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Title` varchar(145) COLLATE utf8_unicode_ci NOT NULL,
  `NewsContent` varchar(145) COLLATE utf8_unicode_ci NOT NULL,
  `Imgs` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `EmployeeCode` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `Order`
--

CREATE TABLE IF NOT EXISTS `Order` (
  `OrderId` int(11) NOT NULL,
  `OrderCreateDate` date NOT NULL,
  `OrderDeliverDate` date DEFAULT NULL,
  `OrderDeliverPlace` varchar(130) COLLATE utf8_unicode_ci DEFAULT NULL,
  `OrderStatus` int(11) NOT NULL,
  `Username` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `PaymentMethodId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `OrderWineDetails`
--

CREATE TABLE IF NOT EXISTS `OrderWineDetails` (
  `WineOrderId` int(11) NOT NULL,
  `OrderId` int(11) NOT NULL,
  `WineOrderQuantity` int(11) NOT NULL,
  `WineSoldPrice` decimal(12,2) unsigned NOT NULL,
  `WineOriginalPrice` decimal(12,2) unsigned NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `PaymentMethod`
--

CREATE TABLE IF NOT EXISTS `PaymentMethod` (
  `PaymentMethodId` int(11) NOT NULL,
  `PaymentMethodName` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `PaymentMethodDetails` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `Promotion`
--

CREATE TABLE IF NOT EXISTS `Promotion` (
  `PromotionId` int(11) NOT NULL,
  `PromotionName` varchar(155) COLLATE utf8_unicode_ci NOT NULL,
  `PromotionDiscount` int(11) NOT NULL,
  `PromotionContent` varchar(145) COLLATE utf8_unicode_ci DEFAULT NULL,
  `PromotionActive` date DEFAULT NULL,
  `PromotionClose` date DEFAULT NULL,
  `PromotionOpen` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `Promotion_Wine`
--

CREATE TABLE IF NOT EXISTS `Promotion_Wine` (
  `WineId` int(11) NOT NULL,
  `PromotionId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `Publisher`
--

CREATE TABLE IF NOT EXISTS `Publisher` (
  `PublisherId` int(11) NOT NULL,
  `PublisherName` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `PublisherDescription` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `Role`
--

CREATE TABLE IF NOT EXISTS `Role` (
  `RoleId` smallint(6) NOT NULL,
  `RoleName` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `RoleDetails` varchar(90) COLLATE utf8_unicode_ci DEFAULT NULL,
  `RoleActive` int(11) DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `Role`
--

INSERT INTO `Role` (`RoleId`, `RoleName`, `RoleDetails`, `RoleActive`) VALUES
(1, 'Người dùng', 'Người dùng được phép mua hàng', 1),
(2, 'Nhân viên', 'Kích hoạt đơn hàng', 1),
(3, 'Khách vãn lai', 'Chỉ được xem và tìm kiếm', 1),
(4, 'Quản trị hệ thống', 'Toàn quyền trên ứng dụng Windsor', 1);

-- --------------------------------------------------------

--
-- Table structure for table `Subject`
--

CREATE TABLE IF NOT EXISTS `Subject` (
  `SubjectId` int(11) NOT NULL,
  `SubjectNames` varchar(145) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `User`
--

CREATE TABLE IF NOT EXISTS `User` (
  `Username` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `Password` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `FullName` varchar(120) COLLATE utf8_unicode_ci NOT NULL,
  `Sex` int(11) NOT NULL DEFAULT '0',
  `Address` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `Phone` int(11) NOT NULL,
  `Email` varchar(90) COLLATE utf8_unicode_ci NOT NULL,
  `DateOfBirth` date DEFAULT NULL,
  `IC` varchar(40) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Active` varchar(40) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Status` int(11) NOT NULL DEFAULT '1',
  `Role` smallint(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `Wine`
--

CREATE TABLE IF NOT EXISTS `Wine` (
  `WineId` int(11) NOT NULL,
  `WineName` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `WineStrength` int(40) NOT NULL,
  `WinePrice` decimal(12,5) NOT NULL,
  `WineShortDetails` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `WineDetails` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `WineUpdateDate` date NOT NULL,
  `WineQuantity` int(11) DEFAULT NULL,
  `WineSold` int(10) NOT NULL DEFAULT '0',
  `CategoryId` int(11) DEFAULT NULL,
  `PublisherId` int(11) DEFAULT NULL,
  `CountryId` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `About`
--
ALTER TABLE `About`
  ADD PRIMARY KEY (`AboutId`),
  ADD KEY `EmployeeCode` (`EmployeeCode`);

--
-- Indexes for table `Bill`
--
ALTER TABLE `Bill`
  ADD PRIMARY KEY (`BillId`);

--
-- Indexes for table `Bill_Order`
--
ALTER TABLE `Bill_Order`
  ADD PRIMARY KEY (`BillId`,`OrderId`),
  ADD KEY `OrderId` (`OrderId`);

--
-- Indexes for table `Category`
--
ALTER TABLE `Category`
  ADD PRIMARY KEY (`CategoryId`);

--
-- Indexes for table `Contact`
--
ALTER TABLE `Contact`
  ADD PRIMARY KEY (`ContactId`),
  ADD KEY `Subject` (`Subject`);

--
-- Indexes for table `Country`
--
ALTER TABLE `Country`
  ADD PRIMARY KEY (`CountryId`);

--
-- Indexes for table `Employee`
--
ALTER TABLE `Employee`
  ADD PRIMARY KEY (`EmployeeCode`),
  ADD KEY `Role` (`Role`);

--
-- Indexes for table `Feedback`
--
ALTER TABLE `Feedback`
  ADD PRIMARY KEY (`FeedbackId`),
  ADD KEY `Username` (`Username`),
  ADD KEY `EmployeeCode` (`EmployeeCode`);

--
-- Indexes for table `ImgEmployee`
--
ALTER TABLE `ImgEmployee`
  ADD PRIMARY KEY (`ImgEmployeeId`),
  ADD KEY `EmployeeCode` (`EmployeeCode`);

--
-- Indexes for table `ImgWine`
--
ALTER TABLE `ImgWine`
  ADD PRIMARY KEY (`ImgWineId`),
  ADD KEY `WineId` (`WineId`);

--
-- Indexes for table `News`
--
ALTER TABLE `News`
  ADD PRIMARY KEY (`NewsId`),
  ADD KEY `EmployeeCode` (`EmployeeCode`);

--
-- Indexes for table `Order`
--
ALTER TABLE `Order`
  ADD PRIMARY KEY (`OrderId`),
  ADD KEY `Username` (`Username`),
  ADD KEY `PaymentMethodId` (`PaymentMethodId`);

--
-- Indexes for table `OrderWineDetails`
--
ALTER TABLE `OrderWineDetails`
  ADD PRIMARY KEY (`WineOrderId`,`OrderId`),
  ADD KEY `OrderId` (`OrderId`);

--
-- Indexes for table `PaymentMethod`
--
ALTER TABLE `PaymentMethod`
  ADD PRIMARY KEY (`PaymentMethodId`);

--
-- Indexes for table `Promotion`
--
ALTER TABLE `Promotion`
  ADD PRIMARY KEY (`PromotionId`);

--
-- Indexes for table `Promotion_Wine`
--
ALTER TABLE `Promotion_Wine`
  ADD PRIMARY KEY (`WineId`,`PromotionId`),
  ADD KEY `PromotionId` (`PromotionId`);

--
-- Indexes for table `Publisher`
--
ALTER TABLE `Publisher`
  ADD PRIMARY KEY (`PublisherId`);

--
-- Indexes for table `Role`
--
ALTER TABLE `Role`
  ADD PRIMARY KEY (`RoleId`);

--
-- Indexes for table `Subject`
--
ALTER TABLE `Subject`
  ADD PRIMARY KEY (`SubjectId`);

--
-- Indexes for table `User`
--
ALTER TABLE `User`
  ADD PRIMARY KEY (`Username`),
  ADD KEY `Role` (`Role`);

--
-- Indexes for table `Wine`
--
ALTER TABLE `Wine`
  ADD PRIMARY KEY (`WineId`),
  ADD KEY `CategoryId` (`CategoryId`),
  ADD KEY `PublisherId` (`PublisherId`),
  ADD KEY `CountryId` (`CountryId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `About`
--
ALTER TABLE `About`
  MODIFY `AboutId` smallint(6) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `Bill`
--
ALTER TABLE `Bill`
  MODIFY `BillId` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `Category`
--
ALTER TABLE `Category`
  MODIFY `CategoryId` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `Contact`
--
ALTER TABLE `Contact`
  MODIFY `ContactId` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `Country`
--
ALTER TABLE `Country`
  MODIFY `CountryId` int(12) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `Feedback`
--
ALTER TABLE `Feedback`
  MODIFY `FeedbackId` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `ImgWine`
--
ALTER TABLE `ImgWine`
  MODIFY `ImgWineId` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `News`
--
ALTER TABLE `News`
  MODIFY `NewsId` smallint(6) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `Order`
--
ALTER TABLE `Order`
  MODIFY `OrderId` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `PaymentMethod`
--
ALTER TABLE `PaymentMethod`
  MODIFY `PaymentMethodId` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `Promotion`
--
ALTER TABLE `Promotion`
  MODIFY `PromotionId` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `Publisher`
--
ALTER TABLE `Publisher`
  MODIFY `PublisherId` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `Role`
--
ALTER TABLE `Role`
  MODIFY `RoleId` smallint(6) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `Subject`
--
ALTER TABLE `Subject`
  MODIFY `SubjectId` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `Wine`
--
ALTER TABLE `Wine`
  MODIFY `WineId` int(11) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `About`
--
ALTER TABLE `About`
  ADD CONSTRAINT `about_ibfk_3` FOREIGN KEY (`EmployeeCode`) REFERENCES `Employee` (`EmployeeCode`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `Bill_Order`
--
ALTER TABLE `Bill_Order`
  ADD CONSTRAINT `bill_order_ibfk_1` FOREIGN KEY (`OrderId`) REFERENCES `Order` (`OrderId`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `bill_order_ibfk_2` FOREIGN KEY (`BillId`) REFERENCES `Bill` (`BillId`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `Contact`
--
ALTER TABLE `Contact`
  ADD CONSTRAINT `contact_ibfk_2` FOREIGN KEY (`Subject`) REFERENCES `Subject` (`SubjectId`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `Employee`
--
ALTER TABLE `Employee`
  ADD CONSTRAINT `employee_ibfk_2` FOREIGN KEY (`Role`) REFERENCES `Role` (`RoleId`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `Feedback`
--
ALTER TABLE `Feedback`
  ADD CONSTRAINT `feedback_ibfk_1` FOREIGN KEY (`Username`) REFERENCES `User` (`Username`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `feedback_ibfk_2` FOREIGN KEY (`EmployeeCode`) REFERENCES `Employee` (`EmployeeCode`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `ImgEmployee`
--
ALTER TABLE `ImgEmployee`
  ADD CONSTRAINT `imgemployee_ibfk_3` FOREIGN KEY (`EmployeeCode`) REFERENCES `Employee` (`EmployeeCode`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `ImgWine`
--
ALTER TABLE `ImgWine`
  ADD CONSTRAINT `imgwine_ibfk_2` FOREIGN KEY (`WineId`) REFERENCES `Wine` (`WineId`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `News`
--
ALTER TABLE `News`
  ADD CONSTRAINT `news_ibfk_2` FOREIGN KEY (`EmployeeCode`) REFERENCES `Employee` (`EmployeeCode`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `Order`
--
ALTER TABLE `Order`
  ADD CONSTRAINT `order_ibfk_3` FOREIGN KEY (`Username`) REFERENCES `User` (`Username`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `order_ibfk_4` FOREIGN KEY (`PaymentMethodId`) REFERENCES `PaymentMethod` (`PaymentMethodId`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `OrderWineDetails`
--
ALTER TABLE `OrderWineDetails`
  ADD CONSTRAINT `orderwinedetails_ibfk_3` FOREIGN KEY (`OrderId`) REFERENCES `Order` (`OrderId`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `orderwinedetails_ibfk_4` FOREIGN KEY (`WineOrderId`) REFERENCES `Wine` (`WineId`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `Promotion_Wine`
--
ALTER TABLE `Promotion_Wine`
  ADD CONSTRAINT `promotion_wine_ibfk_1` FOREIGN KEY (`WineId`) REFERENCES `Wine` (`WineId`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `promotion_wine_ibfk_2` FOREIGN KEY (`PromotionId`) REFERENCES `Promotion` (`PromotionId`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `User`
--
ALTER TABLE `User`
  ADD CONSTRAINT `user_ibfk_2` FOREIGN KEY (`Role`) REFERENCES `Role` (`RoleId`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `Wine`
--
ALTER TABLE `Wine`
  ADD CONSTRAINT `wine_ibfk_5` FOREIGN KEY (`CategoryId`) REFERENCES `Category` (`CategoryId`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `wine_ibfk_6` FOREIGN KEY (`PublisherId`) REFERENCES `Publisher` (`PublisherId`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `wine_ibfk_7` FOREIGN KEY (`CountryId`) REFERENCES `Country` (`CountryId`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
