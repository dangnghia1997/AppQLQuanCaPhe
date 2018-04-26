-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 26, 2018 at 05:02 AM
-- Server version: 5.7.19
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `quan_ly_quan_ca_phe`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

DROP TABLE IF EXISTS `account`;
CREATE TABLE IF NOT EXISTS `account` (
  `username` varchar(30) NOT NULL,
  `password` varchar(255) NOT NULL,
  `ten_dang_nhap` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `phan_quyen` tinyint(1) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Accounts';

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`username`, `password`, `ten_dang_nhap`, `phan_quyen`) VALUES
('admin', '123456', 'ADMIN', 1),
('nv01', 'nv01', 'Nhân viên 01', 0);

-- --------------------------------------------------------

--
-- Table structure for table `ban`
--

DROP TABLE IF EXISTS `ban`;
CREATE TABLE IF NOT EXISTS `ban` (
  `ma_ban` int(11) NOT NULL AUTO_INCREMENT,
  `ten_ban` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `trang_thai` tinyint(1) NOT NULL DEFAULT '0',
  `ma_lau` varchar(3) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`ma_ban`)
) ENGINE=InnoDB AUTO_INCREMENT=79 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='Bàn';

--
-- Dumping data for table `ban`
--

INSERT INTO `ban` (`ma_ban`, `ten_ban`, `trang_thai`, `ma_lau`) VALUES
(49, 'Bàn 1', 0, '1'),
(50, 'Bàn 2', 0, '1'),
(51, 'Bàn 3', 0, '1'),
(52, 'Bàn 4', 0, '1'),
(53, 'Bàn 5', 0, '1'),
(54, 'Bàn 6', 0, '1'),
(55, 'Bàn 7', 0, '1'),
(56, 'Bàn 8', 0, '1'),
(57, 'Bàn 9', 0, '1'),
(58, 'Bàn 10', 0, '1'),
(59, 'Bàn 11', 0, '2'),
(60, 'Bàn 12', 0, '2'),
(61, 'Bàn 13', 0, '2'),
(62, 'Bàn 14', 0, '2'),
(63, 'Bàn 15', 0, '2'),
(64, 'Bàn 16', 0, '2'),
(65, 'Bàn 17', 0, '2'),
(66, 'Bàn 18', 0, '2'),
(67, 'Bàn 19', 0, '2'),
(68, 'Bàn 20', 0, '2'),
(69, 'Bàn 21', 0, '3'),
(70, 'Bàn 22', 0, '3'),
(71, 'Bàn 23', 0, '3'),
(72, 'Bàn 24', 0, '3'),
(73, 'Bàn 25', 0, '3'),
(74, 'Bàn 26', 0, '3'),
(75, 'Bàn 27', 0, '3'),
(76, 'Bàn 28', 0, '3'),
(77, 'Bàn 29', 0, '3'),
(78, 'Bàn 30', 0, '3');

-- --------------------------------------------------------

--
-- Table structure for table `chi_tiet_hoa_don`
--

DROP TABLE IF EXISTS `chi_tiet_hoa_don`;
CREATE TABLE IF NOT EXISTS `chi_tiet_hoa_don` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `ma_hoa_don` int(7) NOT NULL,
  `ma_san_pham` int(6) NOT NULL,
  `so_luong` int(11) NOT NULL,
  `thanh_tien` double NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='Chi tiết hóa đơn';

-- --------------------------------------------------------

--
-- Table structure for table `hoa_don`
--

DROP TABLE IF EXISTS `hoa_don`;
CREATE TABLE IF NOT EXISTS `hoa_don` (
  `ma_hoa_don` int(7) NOT NULL AUTO_INCREMENT,
  `ngay` date NOT NULL,
  `ma_ban` varchar(3) COLLATE utf8_unicode_ci NOT NULL,
  `trang_thai` tinyint(1) NOT NULL DEFAULT '0',
  `tong_tien` double NOT NULL,
  PRIMARY KEY (`ma_hoa_don`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='Hóa đơn';

-- --------------------------------------------------------

--
-- Table structure for table `lau`
--

DROP TABLE IF EXISTS `lau`;
CREATE TABLE IF NOT EXISTS `lau` (
  `ma_lau` int(11) NOT NULL AUTO_INCREMENT,
  `ten_lau` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`ma_lau`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lau`
--

INSERT INTO `lau` (`ma_lau`, `ten_lau`) VALUES
(1, 'Trệt'),
(2, 'Lầu 1'),
(3, 'Lầu 2');

-- --------------------------------------------------------

--
-- Table structure for table `loai_san_pham`
--

DROP TABLE IF EXISTS `loai_san_pham`;
CREATE TABLE IF NOT EXISTS `loai_san_pham` (
  `ma_loai` int(6) NOT NULL AUTO_INCREMENT,
  `ten_loai` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`ma_loai`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci COMMENT='Loại sản phẩm';

--
-- Dumping data for table `loai_san_pham`
--

INSERT INTO `loai_san_pham` (`ma_loai`, `ten_loai`) VALUES
(1, 'Trà'),
(2, 'Cà phê'),
(3, 'Cà phê máy'),
(4, 'Đá xay'),
(5, 'Bánh ngọt'),
(6, 'Thức uống khác');

-- --------------------------------------------------------

--
-- Table structure for table `san_pham`
--

DROP TABLE IF EXISTS `san_pham`;
CREATE TABLE IF NOT EXISTS `san_pham` (
  `ma_san_pham` int(6) NOT NULL AUTO_INCREMENT,
  `ten_san_pham` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `ma_loai` int(6) NOT NULL,
  `don_gia` float NOT NULL,
  `hinh` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`ma_san_pham`)
) ENGINE=InnoDB AUTO_INCREMENT=50 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='Sản phẩm';

--
-- Dumping data for table `san_pham`
--

INSERT INTO `san_pham` (`ma_san_pham`, `ten_san_pham`, `ma_loai`, `don_gia`, `hinh`) VALUES
(1, 'Trà Sen Vàng', 1, 39000, 'tra_sen_vang.png'),
(2, 'Trà Thanh Đào', 1, 39000, 'tra_thanh_dao.jpg'),
(3, 'Trà Thạch Đào', 1, 39000, 'tra_dao_sua.jpg'),
(4, 'Trà Earl Grey', 1, 39000, 'tra_earl_grey.jpg'),
(5, 'Trà Nhân Sâm', 1, 39000, 'tra_nhan_sam.jpg'),
(6, 'Trà Chanh Vàng', 1, 39000, 'tra_chanh_vang.png'),
(7, 'Trà oolong sữa', 1, 39000, 'tra_oolong_sua.jpg'),
(8, 'Trà Xanh', 1, 20000, 'tra_xanh.jpg'),
(9, 'Trà Đen', 1, 20000, 'tra_den.jpg'),
(10, 'Trà Bắc', 1, 20000, 'tra_bac.jpg'),
(11, 'Phin sữa đá', 2, 29000, 'phin_sua_da.jpg'),
(12, 'Phin đen đá', 2, 29000, 'phin_den_da.jpg'),
(13, 'Bạc xĩu đá', 2, 29000, 'bac_xiu_da.jpg'),
(14, 'Cà phê sữa tươi', 2, 29000, 'ca_phe_sua_tuoi.jpg'),
(16, 'Espresso', 3, 29000, 'espresso.jpg'),
(17, 'Latte', 3, 39000, 'latte.jpg'),
(18, 'cappuccino', 3, 39000, 'capuccino.jpg'),
(19, 'Mocha', 3, 45000, 'mocha.jpg'),
(20, 'Americano', 3, 29000, 'americano.jpg'),
(21, 'Macchiato', 3, 45000, 'macchiato.jpg'),
(22, 'Matcha đá xay', 4, 49000, 'matcha_da_xay.jpg'),
(23, 'Xoài dừa đá xay', 4, 40000, 'xoai_dua_da_xay.jpg'),
(24, 'Dâu nha đam đá xay', 4, 40000, 'dau_nha_dam_da_xay.jpg'),
(25, 'Tắc bạc hà đá xay', 4, 40000, 'tac_bac_ha_da_xay.jpg'),
(26, 'Việt quất đá xay', 4, 40000, 'viet_quat_da_xay.jpg'),
(27, 'CINNAMON CHOCOLATE đá xay', 4, 45000, 'cinnamon_chocolate_da_xay.jpg'),
(28, 'Cookie Oreo đá xay', 4, 45000, 'cookie_oreo_da_xay.jpg'),
(29, 'Mocha Oreo Frappuccino', 4, 49000, 'mocha_oreo_frappuccino_da_xay.jpg'),
(30, 'Caramel Coffee đá xay', 4, 49000, 'caramel_coffee_da_xay.JPG'),
(31, 'Tắc xí muội đá xay', 4, 40000, 'tac-xi-muoi-da_xay.jpg'),
(32, 'Tiramisu', 5, 29000, 'banh_tiramisu.jpg'),
(33, 'Mousse xoài', 5, 25000, 'banh_mousse_xoai.jpg'),
(34, 'Mousse trà xanh', 5, 25000, 'banh_mousse_tra_xanh.jpg'),
(35, 'Mousse dâu tây', 5, 25000, 'banh_mousse_dau_tay.jpg'),
(36, 'Mousse việt quất', 5, 25000, 'banh_mousse_viet_quat.jpg'),
(37, 'Mousse cam', 5, 25000, 'banh_mousse_cam.jpg'),
(38, 'Mousse chanh dây', 5, 25000, 'banh_mousse_chanh_day.jpg'),
(39, 'Phô mai cà phê', 5, 29000, 'banh_pho_mai_ca_phe.jpg'),
(40, 'Coconut Chilli Mojito', 6, 35000, 'coconut_chilli_mojito.jpg'),
(41, 'Mojito việt quất', 6, 30000, 'viet_quat_mojito.jpg'),
(42, 'Mojito xoài', 6, 30000, 'mojito_xoai.jpg'),
(43, 'Kiwi Mint Mojito', 6, 35000, 'kiwi_mint_mojito.jpg'),
(44, 'Mojito chanh dây', 6, 30000, 'mojito_chanh_day.jpg'),
(45, 'Mojito nho đen', 6, 30000, 'mojito_nho_den.jpg'),
(46, 'Mojito táo bạc hà', 6, 35000, 'mojito_tao_bac_ha.jpg'),
(47, 'Mojito cherry', 6, 35000, 'mojito_cherry.jpg'),
(48, 'Mojito kiwi', 6, 35000, 'mojito_kiwi.jpg'),
(49, 'Mojito dưa hấu', 6, 35000, 'mojito_dua_hau.jpg');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
