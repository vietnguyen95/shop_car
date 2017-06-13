-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 12, 2017 at 03:01 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shop_car`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(255) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` int(1) NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`, `status`, `slug`) VALUES
(1, 'Điện Thoại ', 1, 'dien-thoai'),
(2, 'Laptop', 1, 'laptop'),
(3, 'Máy tính bảng', 1, 'may-tinh-bang'),
(28, 'quần áo', 1, 'quan-ao');

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE `city` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `parent_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`id`, `name`, `parent_id`) VALUES
(1, 'Nghệ An', 0),
(2, 'Đắk Lắk', 0),
(3, 'Hà Tĩnh', 0),
(4, 'Bình Dương', 0),
(5, 'Quảng Ninh', 0),
(6, 'Quảng ngãi', 0),
(7, 'An Giang', 0),
(8, 'Khánh Hòa', 0),
(9, 'Bình Định', 0),
(10, 'Gia Lai', 0),
(11, 'Phú Yên', 0),
(12, 'Thanh Hóa', 0),
(13, 'Đồng Tháp', 0),
(14, 'Quảng Bình', 0),
(15, 'Vĩnh Phúc', 0),
(16, 'Ninh Bình', 0),
(17, 'Lào Cai', 0),
(18, 'Bà Rịa - Vũng Tàu', 0),
(19, 'Bạc Liêu', 0),
(20, 'Đồng Nai', 0),
(21, 'Tiền Giang', 0),
(22, 'Bình Thuận', 0),
(23, 'Quảng Nam', 0),
(24, 'Tây Ninh', 0),
(25, 'Bắc Ninh', 0),
(26, 'Long An', 0),
(27, 'Lâm Đồng', 0),
(28, 'Hà Giang', 0),
(29, 'Bắc Giang', 0),
(30, 'Nam Định', 0),
(31, 'Kiên Giang', 0),
(32, 'Bình Phước', 0),
(33, 'Quảng Trị', 0),
(34, 'Ninh Thuận', 0),
(35, 'Hải Dương', 0),
(36, 'Vĩnh Long', 0),
(37, 'Bến Tre', 0),
(38, 'Thừa Thiên - Huế', 0),
(39, 'Phú Thọ', 0),
(40, 'Kon Tum', 0),
(41, 'Thái Bình', 0),
(42, 'Hà Nam', 0),
(43, 'Hậu Giang', 0),
(44, 'Thái Nguyên', 0),
(45, 'Sóc Trăng', 0),
(46, 'Hòa Bình', 0),
(47, 'Cà Mau', 0),
(48, 'Bắc Kạn', 0),
(49, 'Hưng Yên', 0),
(50, 'Lạng Sơn', 0),
(51, 'Cao Bằng', 0),
(52, 'Đà Nẵng', 0),
(53, 'Quận Thanh Khê', 52),
(58, 'Quận Cẩm Lệ', 52),
(59, 'Quận Hải Châu', 52),
(60, 'Huyện Hòa Vang', 52),
(61, 'Huyện Đảo Hoàng Sa', 52),
(63, 'Quận Liên Chiểu', 52),
(64, 'Quận Ngũ Hành Sơn', 52),
(65, 'Quận Sơn Trà', 52),
(66, 'Huyện Bắc Trà My', 23),
(67, 'Huyện Đại Lộc', 23),
(68, 'Huyện Điện Bàn', 23),
(69, 'Huyện Đông Giang', 23),
(70, 'Huyện Duy Xuyên', 23),
(71, 'Huyện Hiệp Đức', 23),
(72, 'TP. Hội An', 23),
(73, 'Huyện Nam Giang', 23),
(74, 'Huyện Nam Trà My', 23),
(75, 'Huyện Nông Sơn', 23),
(76, 'Huyện Núi Thành', 23),
(77, 'Huyện Phú Ninh', 23),
(78, 'Huyện Phước Sơn', 23),
(79, 'Huyện Quế Sơn', 23),
(80, 'TP. Tam Kỳ', 23),
(81, 'Huyện Tây Giang', 23),
(82, 'Huyện Thăng Bình', 23),
(83, 'Huyện Tiên Phước', 23),
(84, 'TP. Hồ Chí Minh', 0),
(85, 'Quận 1', 84),
(86, 'Quận 2', 84),
(87, 'Quận 3', 84),
(88, 'Quận 4', 84),
(89, 'Quận 5', 84),
(90, 'Quận 6', 84),
(91, 'Quận 7', 84),
(92, 'Quận 8', 84),
(93, 'Quận 9', 84),
(94, 'Quận 10', 84),
(95, 'Quận 11', 84),
(96, 'Quận 12', 84),
(97, 'Quận Thủ Đức', 84),
(98, 'Quận Gò Vấp', 84),
(99, 'Quận Tân Bình', 84),
(100, 'Quận Bình Tân', 84),
(101, 'Huyện Hóc Môn', 84),
(102, 'Quận Tân Phú', 84),
(103, 'Huyện Củ Chi', 84),
(104, 'Huyện Nhà Bè', 84),
(105, 'Huyện Bình Chánh', 84),
(106, 'Quận Bình Thạnh', 84),
(107, 'Quận Phú Nhuận', 84),
(108, 'Huyện Cần Giờ', 84),
(109, 'Hà Nội', 0),
(110, 'Quận Đống Đa', 109),
(111, 'Quận Ba Đình', 109),
(112, 'Quận Cầu Giấy', 109),
(113, 'Quận Hai Bà Trưng', 109),
(114, 'Quận Hoàng Kiếm', 109),
(115, 'Quận Hoàng Mai', 109),
(116, 'Quận Long Biên', 109),
(117, 'Quận Tây Hồ', 109),
(118, 'Quận Thanh Xuân', 109),
(119, 'Huyện Đông Anh', 109),
(120, 'Huyện Gia Lâm', 109),
(121, 'Huyện Sóc Sơn', 109),
(122, 'Huyện Thanh Trì', 109),
(123, 'Huyện Ba Vì', 109),
(124, 'Huyện Chương Mỹ', 109),
(125, 'Huyện Đan Phượng', 109),
(126, 'Quận Hà Đông', 109),
(127, 'Huyện Hoài Đức', 109),
(128, 'Huyện Mê Linh', 109),
(129, 'Huyện Mỹ Đức', 109),
(130, 'Huyện Phú Xuyên', 109),
(131, 'Huyện Phúc Thọ', 109),
(132, 'Huyện Quốc Oai', 109),
(133, 'Thị Xã Sơn Tây', 109),
(134, 'Huyện Thạch Thất', 109),
(135, 'Huyện Thanh Oai', 109),
(136, 'Huyện Thường Tín', 109),
(137, 'Huyện Ứng Hòa', 109),
(138, 'Quận Nam Từ Liêm', 109),
(139, 'Quận Bắc Từ Liêm', 109),
(140, 'Hải Phòng', 0),
(141, 'Sở GD&ĐT', 140),
(142, 'Quận Hải An', 140),
(143, 'Huyện An Dương', 140),
(144, 'Quận Hồng Bàng', 140),
(145, 'Quận Đồ Sơn', 140),
(146, 'Huyện Tiên Lãng', 140),
(147, 'Quận Lê Chân', 140),
(148, 'Huyện An Lão', 140),
(149, 'Huyện Vĩnh Bảo', 140),
(150, 'Quận Ngô Quyền', 140),
(151, 'Huyện Kiến Thụy', 140),
(152, 'Huyện Cát Hải', 140),
(153, 'Quận Kiến An', 140),
(154, ' Huyện Thủy Nguyên', 140),
(155, 'Huyện Bạch Long Vĩ', 140),
(156, 'Quận Dương Kinh', 140),
(157, 'Sở GD&ĐT', 28),
(158, 'Huyện Yên Minh', 28),
(159, 'Huyện Hoàng Su Phì', 28),
(160, 'Thị xã Hà Giang', 28),
(161, 'Huyện Quản Bạ', 28),
(162, 'Huyện Xín Mần', 28),
(163, 'Huyện Đồng Văn', 28),
(164, 'Huyện Vị Xuyên', 28),
(165, 'Huyện Bắc Quang', 28),
(166, 'Huyện Mèo Vạc', 28),
(167, 'Huyện Bắc Mê', 28),
(168, 'Huyện Quang Bình', 28),
(169, 'Huyện Trà Lĩnh', 51),
(170, 'Huyện Thạch An', 51),
(171, 'Thị xã Cao Bằng', 51),
(172, ' Huyện Trùng Khánh', 51),
(173, 'Huyện Hạ Lang', 51),
(174, 'Huyện Bảo Lạc', 51),
(175, 'Huyện Nguyên Bình', 51),
(176, 'Huyện Bảo Lâm', 51),
(177, 'Huyện Thông Nông', 51),
(178, 'Huyện Hoà An', 51),
(179, 'Huyện Phục Hoà', 51),
(180, 'Huyện Hà Quảng', 51),
(181, 'Huyện Quảng Uyên', 51),
(182, 'Lai Châu', 0),
(190, 'Huyện Bảo Thắng', 17),
(191, 'Huyện Bắc Hà', 17),
(192, 'Thành phố Lào Cai', 17),
(193, 'Huyện Sa Pa', 17),
(194, 'Huyện Mường Khương', 17),
(195, 'Huyện Xi Ma Cai', 17),
(196, 'Huyện Văn Bàn', 17),
(197, 'Huyện Bát Xát', 17),
(198, 'Huyện Bảo Yên', 17),
(199, 'Tuyên Quang', 0),
(206, 'Huyện Văn Lãng', 50),
(207, 'Huyện Lộc Bình', 50),
(208, 'Thành phố Lạng Sơn', 50),
(209, 'Huyện Bắc Sơn', 50),
(210, 'Huyện Chi Lăng', 50),
(211, 'Huyện Tràng Định', 50),
(212, 'Huyện Văn Quan', 50),
(213, 'Huyện Đình Lập', 50),
(214, ' Huyện Bình Gia', 50),
(215, 'Huyện Cao Lộc', 50),
(216, 'Huyện Hữu Lũng', 50),
(217, 'Huyện Bạch Thông', 48),
(218, 'Huyện Ba Bể', 48),
(219, 'Thị xã Bắc Kạn', 48),
(220, 'Huyện Na Rì', 48),
(221, 'Huyện Chợ Mới', 48),
(222, 'Huyện Chợ Đồn', 48),
(223, 'Huyện Ngân Sơn', 48),
(224, 'Huyện Pác Nặm', 48),
(225, 'Huyện Phú Lương', 44),
(226, 'Huyện Phú Bình', 44),
(227, 'TP.Thái Nguyên', 44),
(228, 'Huyện Võ Nhai', 44),
(229, 'Huyện Phổ Yên', 44),
(230, 'Thị xã Sông Công', 44),
(231, 'Huyện Đại Từ', 44),
(232, 'Huyện Định Hoá', 44),
(233, 'Huyện Đồng Hỷ', 44),
(234, 'Yên Bái', 0),
(244, 'Sơn La', 0),
(256, 'Huyện Hạ Hoà', 39),
(257, 'Huyện Lâm Thao', 39),
(258, 'TP. Việt Trì', 39),
(259, 'Huyện Cẩm Khê', 39),
(260, 'Huyện Tam Nông', 39),
(261, 'Thị xã Phú Thọ', 39),
(262, 'Huyện Yên Lập', 39),
(263, 'Huyện Thanh Thủy', 39),
(264, 'Huyện Đoan Hùng', 39),
(265, 'Huyện Thanh Sơn', 39),
(266, 'Huyện Tân Sơn', 39),
(267, 'Huyện Thanh Ba', 39),
(268, 'Huyện Phù Ninh', 39),
(269, 'Huyện Vĩnh Tường', 15),
(270, 'Thị xã Phúc Yên', 15),
(271, 'Thành phố Vĩnh Yên', 15),
(272, 'Huyện Yên Lạc', 15),
(273, 'Huyện Tam Đảo', 15),
(274, 'Huyện Tam Dương', 15),
(275, ' Huyện Bình Xuyên', 15),
(276, ' Huyện Lập Thạch', 15),
(277, 'Huyện Bình Liêu', 5),
(278, 'Huyện Đông Triều', 5),
(279, 'TP. Hạ Long', 5),
(280, 'Huyện Đầm Hà', 5),
(281, 'Huyện Yên Hưng', 5),
(282, 'Thị xã Cẩm Phả', 5),
(283, 'Huyện Hải Hà', 5),
(284, 'Huyện Hoành Bồ', 5),
(285, 'Thị xã Uông Bí', 5),
(286, 'Huyện Tiên Yên', 5),
(287, 'Huyện Vân Đồn', 5),
(288, 'Thị xã Móng Cái', 5),
(289, 'Huyện Ba Chẽ', 5),
(290, 'Huyện Cô Tô', 5),
(291, 'Huyện Sơn Động', 29),
(292, 'Huyện Lạng Giang', 29),
(293, 'TP. Bắc Giang', 29),
(294, 'Huyện Lục Nam', 29),
(295, 'Huyện Việt Yên', 29),
(296, 'Huyện Yên Thế', 29),
(297, 'Huyện Tân Yên', 29),
(298, 'Huyện Yên Dũng', 29),
(299, 'Huyện Lục Ngạn', 29),
(300, 'Huyện Hiệp Hoà', 29),
(301, 'Huyện Quế Võ', 25),
(302, 'Huyện Thuận Thành', 25),
(303, 'TP. Bắc Ninh', 25),
(304, 'Huyện Tiên Du', 25),
(305, 'Huyện Gia Bình', 25),
(306, 'Huyện Yên Phong', 25),
(307, 'Huyện Từ Sơn', 25),
(308, 'Huyện Lương Tài', 25),
(309, 'Huyện Gia Lộc', 35),
(310, 'Huyện Thanh Hà', 35),
(311, 'TP. Hải Dương', 35),
(312, 'Huyện Tứ Kỳ', 35),
(313, 'Huyện Kim Thành', 35),
(314, 'Huyện Chí Linh', 35),
(315, 'Huyện Thanh Miện', 35),
(316, 'Huyện Bình Giang', 35),
(317, ' Huyện Nam Sách', 35),
(318, 'Huyện Ninh Giang', 35),
(319, 'Huyện Kinh Môn', 35),
(320, 'Huyện Cẩm Giàng', 35),
(321, 'Huyện Khoái Châu', 49),
(322, 'Huyện Mỹ Hào', 49),
(323, 'Thị xã Hưng Yên', 49),
(324, 'Huyện Yên Mỹ', 49),
(325, 'Huyện Văn Lâm', 49),
(326, 'Huyện Kim Động', 49),
(327, 'Huyện Tiên Lữ', 49),
(328, 'Huyện Văn Giang', 49),
(329, 'Huyện Ân Thi', 49),
(330, 'Huyện Phù Cừ', 49),
(331, 'Huyện Tân Lạc', 46),
(332, 'Huyện Kim Bôi', 46),
(333, 'TP. Hoà Bình', 46),
(334, 'Huyện Lạc Sơn', 46),
(335, 'Huyện Lạc Thuỷ', 46),
(336, 'Huyện Đà Bắc', 46),
(337, 'Huyện Kỳ Sơn', 46),
(338, 'Huyện Yên Thuỷ', 46),
(339, 'Huyện Mai Châu', 46),
(340, 'Huyện Lương Sơn', 46),
(341, 'Huyện Cao Phong', 46),
(342, 'Huyện Kim Bảng', 42),
(343, 'Huyện Bình Lục', 42),
(344, 'TP. Phủ Lý', 42),
(345, 'Huyện Lý Nhân', 42),
(346, 'Huyện Duy Tiên', 42),
(347, 'Huỵện Thanh Liêm', 42),
(348, 'Huyện Giao Thủy', 30),
(349, 'Huyện Trực Ninh', 30),
(350, 'TP. Nam Định', 30),
(351, 'Huyện ý Yên', 30),
(352, 'Huyện Nghĩa Hưng', 30),
(353, 'Huyện Mỹ Lộc', 30),
(354, 'Huyện Vụ Bản', 30),
(355, 'Huyện Hải Hậu', 30),
(356, 'Huyện Xuân Trường', 30),
(357, 'Huyện Nam Trực', 30),
(358, 'Huyện Hưng Hà', 41),
(359, 'Huyện Kiến Xương', 41),
(360, 'TP. Thái Bình', 41),
(361, 'Huyện Đông Hưng', 41),
(362, 'Huyện Tiền Hải', 41),
(363, 'Huyện Quỳnh Phụ', 41),
(364, 'Huyện Vũ Thư', 41),
(365, 'Huyện Thái Thụy', 41),
(366, 'Huyện Nho Quan', 16),
(367, 'Huyện Yên Mô', 16),
(368, 'TP. Ninh Bình', 16),
(369, 'Huyện Gia Viễn', 16),
(370, ' Huyện Kim Sơn', 16),
(371, 'Thị xã Tam Điệp', 16),
(372, 'Huyện Hoa Lư', 16),
(373, 'Huyện Yên Khánh', 16),
(374, 'Huyện Như Thanh', 12),
(375, 'Huyện Đông Sơn', 12),
(376, 'TP.Thanh Hoá', 12),
(377, 'Huyện Lang Chánh', 12),
(378, 'Huyện Hà Trung', 12),
(379, 'Thị xã Bỉm Sơn', 12),
(380, 'Huyện Ngọc Lặc', 12),
(381, 'Huyện Hoằng Hoá', 12),
(382, 'Thị xã Sầm Sơn', 12),
(383, 'Huyện Thạch Thành', 12),
(384, 'Huyện Nga Sơn', 12),
(385, 'Huyện Quan Hoá', 12),
(386, 'Huyện Cẩm Thủy', 12),
(387, 'Huyện Hậu Lộc', 12),
(388, 'Huyện Quan Sơn', 12),
(389, 'Huyện Thọ Xuân', 12),
(390, 'Huyện Quảng Xương', 12),
(391, 'Huyện Mường Lát', 12),
(392, 'Huyện Vĩnh Lộc', 12),
(393, 'Huyện Tĩnh Gia', 12),
(394, 'Huyện Bá Thước', 12),
(395, 'Huyện Thiệu Hoá', 12),
(396, 'Huyện Yên Định', 12),
(397, 'Huyện Thường Xuân', 12),
(398, 'Huyện Triệu Sơn', 12),
(399, 'Huyện Như Xuân', 12),
(400, 'Huyện Nông Cống', 12),
(401, 'Huyện Kỳ Sơn', 1),
(402, 'Huyện Đô Lương', 1),
(403, 'Thành phố Vinh', 1),
(404, 'Huyện Tương Dương', 1),
(405, 'Huyện Thanh Chương', 1),
(406, 'Thị xã Cửa Lò', 1),
(407, 'Huyện Con Cuông', 1),
(408, 'Huyện Nghi Lộc', 1),
(409, 'Huyện Quỳ Châu', 1),
(410, 'Huyện Tân Kỳ', 1),
(411, 'Huyện Nam Đàn', 1),
(412, 'Huyện Quỳ Hợp', 1),
(413, 'Huyện Yên Thành', 1),
(414, 'Huyện Hưng Nguyên', 1),
(415, 'Huyện Nghĩa Đàn', 1),
(416, 'Huyện Diễn Châu', 1),
(417, 'Huyện Quỳnh Lưu', 1),
(418, 'Huyện Anh Sơn', 1),
(419, 'Huyện Đức Thọ', 3),
(420, 'Huyện Thạch Hà', 3),
(421, 'TP. Hà Tĩnh', 3),
(422, 'Huyện Nghi Xuân', 3),
(423, 'Huyện Cẩm Xuyên', 3),
(424, 'Thị xã Hồng Lĩnh', 3),
(425, 'Huyện Can Lộc', 3),
(426, 'Huyện Kỳ Anh', 3),
(427, 'Huyện Hương Sơn', 3),
(428, 'Huyện Hương Khê', 3),
(429, 'Huyện Vũ Quang', 3),
(430, 'Huyện Lộc Hà', 3),
(431, 'Huyện Minh Hoá', 14),
(432, 'Huyện Quảng Ninh', 14),
(433, 'TP. Đồng Hới', 14),
(434, 'Huyện Quảng Trạch', 14),
(435, 'Huyện Lệ Thuỷ', 14),
(436, 'Huyện Tuyên Hoá', 14),
(437, 'Huyện Bố Trạch', 14),
(438, 'Huyện Gio Linh', 33),
(439, 'Huyện Hướng Hoá', 33),
(440, 'Thị xã Đông Hà', 33),
(441, ' Huyện Cam Lộ', 33),
(442, 'Huyện Đăk Rông', 33),
(443, 'Thị xã Quảng Trị', 33),
(444, 'Huyện Triệu Phong', 33),
(445, 'Huyện đảo Cồn cỏ', 33),
(446, 'Huyện Vĩnh Linh', 33),
(447, 'Huyện Hải Lăng', 33),
(448, 'Huyện Hương Trà', 38),
(449, 'Huyện Nam Đông', 38),
(450, 'TP. Huế', 38),
(451, 'Huyện A Lưới', 38),
(452, 'Huyện Phong Điền', 38),
(453, ' Huyện Hương Thuỷ', 38),
(454, 'Huyện Quảng Điền', 38),
(455, 'Huyện Phú Lộc', 38),
(456, 'Huyện Sơn Tịnh', 6),
(457, 'Huyện Mộ Đức', 6),
(458, 'TP.Quảng Ngãi', 6),
(459, 'Huyện Sơn Hà', 6),
(460, 'Huyện Đức Phổ', 6),
(461, 'Huyện Lý Sơn', 6),
(462, ' Huyện Tư Nghĩa', 6),
(463, 'Huyện Ba Tơ', 6),
(464, 'Huyện Bình Sơn', 6),
(465, 'Huyện Nghĩa Hành', 6),
(466, 'Huyện Sơn Tây', 6),
(467, 'Huyện Trà Bồng', 6),
(468, 'Huyện Minh Long', 6),
(469, 'Huyện Tây Trà', 6),
(470, 'Huyện Ngọc Hồi', 40),
(471, 'Huyện Kon Plong', 40),
(472, 'Thị xã KonTum', 40),
(473, 'Huyện Đăk Tô', 40),
(474, 'Huyện Đăk Hà', 40),
(475, 'Huyện Đăk Glei', 40),
(476, 'Huyện Sa Thầy', 40),
(477, 'Huyện Kon Rộy', 40),
(478, 'Huyện Tu Mơ Rông', 40),
(479, 'Huyện Hoài Nhơn', 9),
(480, 'Huyện Tây Sơn', 9),
(481, 'TP.Quy Nhơn', 9),
(482, 'Huyện Phù Mỹ', 9),
(483, 'Huyện Vân Canh', 9),
(484, ' Huyện An Lão', 9),
(485, 'Huyện Phù Cát', 9),
(486, 'Huyện An Nhơn', 9),
(487, 'Huyện Hoài Ân', 9),
(488, 'Huyện Vĩnh Thạnh', 9),
(489, 'Huyện Tuy Phước', 9),
(490, 'Thị xã An Khê', 10),
(491, 'Huyện Krông Pa', 10),
(492, 'TP.Pleiku', 10),
(493, 'Huyện Kông Chro', 10),
(495, 'Huyện Chư Păh', 10),
(496, 'Huyện Đức Cơ', 10),
(497, 'Huyện Đăk Đoa', 10),
(498, 'Huyện Mang Yang', 10),
(499, 'Huyện Chưprông', 10),
(500, 'Huyện Ia Pa', 10),
(501, 'Huyện Kbang', 10),
(502, 'Huyện Chư Sê', 10),
(503, 'Huyện Đăk Pơ', 10),
(504, 'Huyện Ayunpa', 10),
(505, 'Huyện Phú Thiện', 10),
(506, 'Huyện Ia Grai', 10),
(507, 'Huyện Sông Cầu', 11),
(508, 'Huyện Sông Hinh', 11),
(509, 'Thị xã Tuy Hoà', 11),
(510, ' Huyện Tuy An', 11),
(511, 'Huyện Đông Hoà', 11),
(512, 'Huyện Đồng Xuân', 11),
(513, 'Huyện Sơn Hoà', 11),
(514, 'Huyện Phú Hoà', 11),
(515, 'Huyện Tây Hoà', 11),
(516, ' Huyện Ea Súp', 2),
(517, 'Huyện Krông Ana', 2),
(518, 'TP.Buôn Ma Thuột', 2),
(519, 'Huyện Cư M gar', 2),
(520, 'Huyện Krông Bông', 2),
(521, 'Huyện Ea H Leo', 2),
(522, 'Huyện Krông Pắc', 2),
(523, 'Huyện Lăk', 2),
(524, 'Huyện Krông Buk', 2),
(525, 'Huyện Ea Kar', 2),
(526, 'Huyện Buôn Đôn', 2),
(527, 'Huyện Krông Năng', 2),
(528, 'Huyện MĐrăk', 2),
(529, 'Huyện Cư Kuin', 2),
(530, 'Huyện Ninh Hoà', 8),
(531, 'Thị xã Cam Ranh', 8),
(532, 'Tp. Nha Trang', 8),
(533, 'Huyện Diên Khánh', 8),
(534, 'Huyện Khánh Sơn', 8),
(535, 'Huyện Vạn Ninh', 8),
(536, 'Huyện Khánh Vĩnh', 8),
(537, 'Huyện Trường Sa', 8),
(538, 'Huyện Cam Lâm', 8),
(540, 'Huyện Đạ Tẻh', 27),
(541, 'TP. Đà Lạt', 27),
(542, 'Huyện Đơn Dương', 27),
(543, 'Huyện Cát Tiên', 27),
(544, 'Thị xã. Bảo Lộc', 27),
(545, 'Huyện Lạc Dương', 27),
(546, 'Huyện Lâm Hà', 27),
(547, 'Huyện Đức Trọng', 27),
(548, 'Huyện Đạ Huoai', 27),
(549, 'Huyện Bảo Lâm', 27),
(550, 'Huyện Đam Rông', 27),
(551, 'Huyện Chơn Thành', 32),
(552, ' Huyện Bù Đốp', 32),
(553, 'Thị xã Đồng Xoài', 32),
(554, 'Huyện Bình Long', 32),
(555, 'Huyện Phước Long', 32),
(556, 'Huyện Đồng Phú', 32),
(557, ' Huyện Lộc Ninh', 32),
(558, ' Huyện Bù Đăng', 32),
(559, 'Huyện Tân Uyên', 4),
(560, 'Huyện Phú Giáo', 4),
(561, 'Thị xã Thủ Dầu Một', 4),
(562, 'Huyện Thuận An', 4),
(563, 'Huyện Dầu Tiếng', 4),
(564, 'Huyện Bến Cát', 4),
(565, 'Huyện Dĩ An', 4),
(566, 'Huyện Ninh Sơn', 34),
(567, 'Huyện Ninh Phước', 34),
(568, 'TP.Phan Rang -Tháp Chàm', 34),
(569, 'Huyện Ninh Hải', 34),
(570, 'Huyện Bác ái', 34),
(571, 'Huyện Thuận Bắc', 34),
(572, 'Huyện Dương Minh Châu', 24),
(573, 'Huyện Bến Cầu', 24),
(574, 'Thị xã Tây Ninh', 24),
(575, 'Huyện Châu Thành', 24),
(576, 'Huyện Gò Dầu', 24),
(577, 'Huyện Tân Biên', 24),
(578, ' Huyện Hoà Thành', 24),
(579, ' Huyện Trảng Bàng', 24),
(580, 'Huyện Tân Châu', 24),
(581, 'Huyện Hàm Thuận Bắc', 24),
(582, 'Huyện Tánh Linh', 24),
(583, 'TP. Phan Thiết', 24),
(584, 'Huyện Hàm Thuận Nam', 24),
(585, 'Huyện đảo Phú Quý', 24),
(586, 'Huyện Tuy Phong', 24),
(587, 'Huyện Hàm Tân', 24),
(588, 'Thị xã LaGi', 24),
(589, 'Huyện Bắc Bình', 24),
(590, 'Huyện Đức Linh', 24),
(591, 'Huyện Định Quán', 20),
(592, 'Huyện Long Thành', 20),
(593, 'TP. Biên Hoà', 20),
(594, ' Huyện Thống Nhất', 20),
(595, 'Huyện Nhơn Trạch', 20),
(596, 'Huyện Vĩnh Cửu', 20),
(597, 'Thị xã Long Khánh', 20),
(598, 'Huyện Trảng Bom', 20),
(599, 'Huyện Tân Phú', 20),
(600, 'Huyện Xuân Lộc', 20),
(601, 'Huyện Cẩm Mỹ', 20),
(602, 'Huyện Thạnh Hoá', 26),
(603, 'Huyện Châu Thành', 26),
(604, 'Thị xã Tân An', 26),
(605, 'Huyện Đức Huệ', 26),
(606, 'Huyện Tân Trụ', 26),
(607, 'Huyện Vĩnh Hưng', 26),
(608, 'Huyện Đức Hoà', 26),
(609, 'Huyện Cần Đước', 26),
(610, 'Huyện Mộc Hoá', 26),
(611, 'Huyện Thủ Thừa', 26),
(612, 'Huyện Tân Hưng', 26),
(613, 'Huyện Hồng Ngự', 13),
(614, 'Huyện Lấp Vò', 13),
(615, 'TP.Cao Lãnh', 13),
(616, 'Huyện Tam Nông', 13),
(617, 'Huyện Tháp Mười', 13),
(618, 'Thị xã Sa Đéc', 13),
(619, 'Huyện Thanh Bình', 13),
(620, 'Huyện Lai Vung', 13),
(621, 'Huyện Tân Hồng', 13),
(622, 'Huyện Cao Lãnh', 13),
(623, 'Huyện Châu Thành', 13),
(624, 'Huyện Tân Châu', 7),
(625, 'Huyện Châu Phú', 7),
(626, 'TP.Long Xuyên', 7),
(627, 'Huyện Phú Tân', 7),
(628, ' Huyện Chợ Mới', 7),
(629, 'Huyện Tịnh Biên', 7),
(630, 'Huyện Châu Thành', 7),
(631, 'Huyện An Phú', 7),
(632, 'Huyện Tri Tôn', 7),
(633, 'Huyện Thoại Sơn', 7),
(634, 'Huyện Xuyên Mộc', 18),
(635, 'Huyện Tân Thành', 18),
(636, 'TP. Vũng Tàu', 18),
(637, 'Huyện Long Điền', 18),
(638, 'Huyện Châu Đức', 18),
(639, 'Thị xã Bà Rịa', 18),
(640, 'Huyện Côn Đảo', 18),
(641, 'Huyện Đất Đỏ', 18),
(642, 'Huyện Cai Lậy', 21),
(643, 'Huyện Gò Công Đông', 21),
(644, 'TP. Mỹ Tho', 21),
(645, 'Huyện Châu Thành', 21),
(646, ' Huyện Tân Phước', 21),
(647, 'Thị xã Gò Công', 21),
(648, 'Huyện Chợ Gạo', 21),
(649, 'Huyện Tân Phú Đông', 21),
(650, 'Huyện Cái Bè', 21),
(651, 'Huyện Gò Công Tây', 21),
(652, 'Cần Thơ', 0),
(653, 'Huyện Tân Hiệp', 31),
(654, 'Huyện An Minh', 31),
(655, 'TP. Rạch Giá', 31),
(656, 'Huyện Châu Thành', 31),
(657, 'Huyện Vĩnh Thuận', 31),
(658, 'Thị xã Hà Tiên', 31),
(659, 'Huyện Giồng Riềng', 31),
(660, 'Huyện Phú Quốc', 31),
(661, 'Huyện Kiên Lương', 31),
(662, 'Huyện Gò Quao', 31),
(663, 'Huyện Kiên Hải', 31),
(664, 'Huyện Hòn Đất', 31),
(665, 'Huyện An Biên', 31),
(666, ' Huyện U minh Thượng', 31),
(671, 'Huyện Vĩnh Thạnh', 21),
(675, 'Trà Vinh', 0),
(676, 'Huyện Chợ Lách', 37),
(677, 'Huyện Bình Đại', 37),
(678, 'Thị xã Bến Tre', 37),
(679, 'Huyện Mỏ Cày', 37),
(680, 'Huyện Ba Tri', 37),
(681, 'Huyện Châu Thành', 37),
(682, 'Huyện Giồng Trôm', 37),
(683, 'Huyện Thạnh Phú', 37),
(684, 'Huyện Mang Thít', 36),
(685, 'Huyện Trà Ôn', 36),
(686, 'Thị xã Vĩnh Long', 36),
(687, 'Huyện Bình Minh', 36),
(688, 'Huyện Vũng Liêm', 36),
(689, 'Huyện Long Hồ', 36),
(690, 'Huyện Tam Bình', 36),
(691, 'Huyện Bình Tân', 36),
(700, 'Huyện Mỹ Xuyên', 45),
(701, 'Huyện Cù Lao Dung', 45),
(702, 'TP.Sóc Trăng', 45),
(703, 'Huyện Thạnh Trị', 45),
(704, 'Huyện Ngã Năm', 45),
(705, 'Huyện Kế Sách', 45),
(706, 'Huyện Long Phú', 45),
(707, 'Huyện Châu Thành', 45),
(708, 'Huyện Mỹ Tú', 45),
(709, 'Huyện Vĩnh Châu', 45),
(710, 'Huyện Hồng Dân', 19),
(711, ' Huyện Đông Hải', 19),
(712, 'Thị xã Bạc Liêu', 19),
(713, 'Huyện Giá Rai', 19),
(714, 'Huyện Hoà Bình', 19),
(715, ' Huyện Vĩnh Lợi', 19),
(716, 'Huyện Phước Long', 19),
(718, 'Huyện Năm Căn', 47),
(719, 'TP. Cà Mau', 47),
(720, 'Huyện Cái Nước', 47),
(721, 'Huyện Phú Tân', 47),
(722, 'Huyện Thới Bình', 47),
(723, 'Huyện Đầm Dơi', 47),
(724, 'Huyện U Minh', 47),
(725, 'Huyện Ngọc Hiển', 47),
(726, 'Điện Biên', 0),
(736, 'Huyện Long Mỹ', 43),
(737, 'Huyện Châu Thành A', 43),
(738, 'Thị xã Vị Thanh', 43),
(739, 'Huyện Phụng Hiệp', 43),
(740, 'Thị xã Ngã Bảy', 43),
(741, 'Huyện Vị Thuỷ', 43),
(742, 'Huyện Châu Thành', 43),
(763, 'Huyện Phong Thổ', 182),
(764, ' Huyện Than Uyên', 182),
(765, 'Thị xã Lai Châu', 182),
(766, 'Huyện Sìn Hồ', 182),
(767, 'Huyện Tân Uyên', 182),
(768, 'Huyện Tam Đường', 182),
(769, 'Huyện Mường Tè', 182),
(770, 'Huyện Chiêm Hoá', 199),
(771, ' Huyện Sơn Dương', 199),
(772, 'Thị xã Tuyên Quang', 199),
(773, 'Huyện Hàm Yên', 199),
(774, 'Huyện Na Hang', 199),
(775, 'Huyện Yên Sơn', 199),
(776, 'Huyện Yên Bình', 234),
(777, 'Huyện Trạm Tấu', 234),
(778, 'TP. Yên Bái', 234),
(779, 'Huyện Mù Cang Chải', 234),
(780, 'Huyện Lục Yên', 234),
(781, 'Huyện Văn Yên', 234),
(782, 'Huyện Trấn Yên', 234),
(783, 'Huyện Thuận Châu', 244),
(784, 'Huyện Yên Châu', 244),
(785, 'Thị xã Sơn La', 244),
(786, 'Huyện Bắc Yên', 244),
(787, 'Huyện Sông Mã', 244),
(788, 'Huyện Quỳnh Nhai', 244),
(789, 'Huyện Phù Yên', 244),
(790, 'Huyện Mộc Châu', 244),
(791, 'Huyện Mường La', 244),
(792, 'Huyện Mai Sơn', 244),
(793, 'Huyện Sốp Cộp', 244),
(794, 'Quận Cái Răng', 652),
(795, 'Huyện Cờ Đỏ', 652),
(796, 'Quận Ninh Kiều', 652),
(797, 'Quận Ô Môn', 652),
(798, 'Huyện Vĩnh Thạnh', 652),
(799, 'Quận Bình Thuỷ', 652),
(800, 'Huyện Phong Điền', 652),
(801, 'Huỵện Thốt Nốt', 652),
(802, 'Huyện Cầu Kè', 675),
(803, 'Huyện Trà Cú', 675),
(804, 'Thị xã Trà Vinh', 675),
(805, 'Huyện Tiểu Cần', 675),
(806, 'Huyện Cầu Ngang', 675),
(807, 'Huyện Càng Long', 675),
(808, 'Huyện Châu Thành', 675),
(809, 'Huyện Duyên Hải', 675),
(810, 'Huyện Điện Biên', 726),
(811, 'Huyện Tủa Chùa', 726),
(812, 'TP. Điện Biên Phủ', 726),
(813, 'Huyện Tuần Giáo', 726),
(814, 'Huyện Điện Biên Đông', 726),
(815, 'Thị xã Mường Lay', 726),
(816, 'Huyện Mường Chà', 726),
(817, 'Huyện Mường Nhé', 726),
(818, 'Huyện Mường Ảng', 726);

-- --------------------------------------------------------

--
-- Table structure for table `logo`
--

CREATE TABLE `logo` (
  `id` int(255) NOT NULL,
  `image` varchar(150) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `logo`
--

INSERT INTO `logo` (`id`, `image`) VALUES
(7, 'Vn-1488856534-png'),
(8, 'Vn-1488856548-png'),
(9, 'Vn-1488856557-png'),
(10, 'Vn-1488856566-png'),
(11, 'Vn-1488856583-png'),
(12, 'Vn-1488856591-png');

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `id` int(10) UNSIGNED NOT NULL,
  `status` tinyint(4) NOT NULL,
  `viewstatus` tinyint(4) NOT NULL,
  `fullname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `detailshopping` text COLLATE utf8_unicode_ci NOT NULL,
  `id_user` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`id`, `status`, `viewstatus`, `fullname`, `phone`, `address`, `detailshopping`, `id_user`, `created_at`) VALUES
(19, 0, 1, 'nguyễn văn việt', '123456789', 'đà nẵng', 'a:2:{i:4;a:5:{s:3:\"aid\";s:1:\"4\";s:8:\"asoluong\";i:1;s:6:\"aprice\";i:2000000;s:5:\"aname\";s:65:\"Asus ZenFone Max 32GB (Đen) - Hãng phân phối chính thức  \";s:5:\"aurlp\";s:24:\"/files/Vn-1488763232-jpg\";}i:5;a:5:{s:3:\"aid\";i:5;s:8:\"asoluong\";s:1:\"1\";s:6:\"aprice\";i:11400000;s:5:\"aname\";s:18:\"ASUS X441UA-WX055D\";s:5:\"aurlp\";s:24:\"/files/Vn-1488763544-jpg\";}}', 1, '2017-03-20 00:41:42'),
(20, 0, 1, 'nguyễn văn việt', '123456789', 'ddd', 'a:1:{i:7;a:5:{s:3:\"aid\";s:1:\"7\";s:8:\"asoluong\";i:2;s:6:\"aprice\";i:9000000;s:5:\"aname\";s:1:\"1\";s:5:\"aurlp\";s:24:\"/files/Vn-1488876281-jpg\";}}', 1, '2017-03-23 04:50:25'),
(21, 0, 1, 'nguyễn văn việt', '123456789', 'dsdsd', 'a:1:{i:7;a:5:{s:3:\"aid\";s:1:\"7\";s:8:\"asoluong\";s:1:\"2\";s:6:\"aprice\";i:9000000;s:5:\"aname\";s:1:\"1\";s:5:\"aurlp\";s:24:\"/files/Vn-1488876281-jpg\";}}', 1, '2017-04-03 00:49:01'),
(22, 0, 1, 'nguyễn văn việt', '123456789', 'bdjbvfjsd', 'a:1:{i:3;a:5:{s:3:\"aid\";i:3;s:8:\"asoluong\";s:1:\"2\";s:6:\"aprice\";i:4750000;s:5:\"aname\";s:39:\"Xiaomi Redmi Note 3 Pro 16GB ( Vàng ) \";s:5:\"aurlp\";s:24:\"/files/Vn-1488763094-jpg\";}}', 1, '2017-04-11 01:03:37');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(255) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` int(1) NOT NULL,
  `image` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `descriptions` text COLLATE utf8_unicode_ci NOT NULL,
  `id_category` int(50) NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `buys` int(255) NOT NULL,
  `discount` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='3';

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `slug`, `status`, `image`, `descriptions`, `id_category`, `content`, `price`, `buys`, `discount`) VALUES
(1, 'Giới thiệu sản phẩm Apple iPhone 7 Plus 32GB (Vàng hồng) - Hàng nhập khẩu', 'gioi-thieu-san-pham-apple-iphone-7-plus-32gb-vang-hong--hang-nhap-khau', 1, 'Vn-1488762958-jpg', 'Không còn jack cắm tai nghe truyền thống, thay vào đó tai tai nghe EarPod không dây hoặc kết nối thông quan đầu cắm Lightning. Dung lượng bộ nhớ được tăng đáng kể, bạn có thể sở hữu phiên bản lên đến 256GB. Ngoài những màu sắc quen thuộc, Apple đã giới thiệu đến người dùng phiên bản màu đen bóng (Jet Black) cực kỳ ấn tượng. Trọng lượng máy nhẹ hơn và màn hình sáng hơn cũng là một điểm đáng chú ý. Nhờ bỏ đi jack cắm tai nghe Apple đã có thể trang bị hệ thống loa kép với âm thanh stereo cực kỳ sống động. Apple đã loại bỏ nút Home vật lý thay bằng nút cảm ứng với công nghệ cảm ứng lực Force Touch độc đáo. Cuối cùng là pin “khủng” hơn, bộ xử lý mạnh hơn cũng như camera tốt hơn hỗ trợ quay video 4K. Mặc dù vẻ ngoài không có nhiều thay đổi nhưng hãng đã bổ sung khả năng chống nước biến chiếc iPhone 7 và 7s càng trở nên hoàn hảo hơn.', 1, 'Chức năng chống nước và chống bụi đạt tiêu chuẩn IP67\nMặc dù đi sau đến muộn, nhưng khả năng chống nước trên iPhone 7 là một sự nâng cấp hấp dẫn vốn chưa từng có trên các phiên bản trước đây. Apple cho biết rằng, đây là chức năng Water Resistant, chứ không phải Waterproof. Điều này đồng nghĩa với việc họ không khuyến cáo người dùng “lặn” quá lâu trong môi trường nước. Tất nhiên là mức Water Resistant vẫn cao hơn mức Water Splash. Với Water Resistant bạn hoàn toàn có thể sử dụng điện thoại dưới trời mưa, . Ngoài nước thì iPhone 7 có chống bụi, chuẩn chống bụi chống nước IP67.\n\n\n\nApple iPhone 7\n\n\nNút home vật lý được thay đổi thành nút home cảm ứng\nNút Home vật lý quen thuộc ngày nào giờ đây đã được thay bằng nút Home cảm ứng tích hợp cảm ứng lực mang lại trải nghiệm hoàn hảo hơn. Nút Home trên iPhone 7 hoạt động song song với Taptic Engine mới cho độ nhạy cao, phản hồi chính xác trong từng lực nhấn của người dùng. Nút home vẫn giữ nguyên chức năng cảm biến vân tay Tuoch ID, cũng như Apple Pay dùng để thanh toán một cách an toàn.', 7000000, 0, 10),
(3, 'Xiaomi Redmi Note 3 Pro 16GB ( Vàng ) ', 'xiaomi-redmi-note-3-pro-16gb--vang-', 1, 'Vn-1488763094-jpg', 'Là một hãng điện thoại mới thâm nhập vào thị trường Việt Nam trong thời gian gần đây, tuy nhiên với việc liên tiếp cho ra đời những smartphone hấp dẫn từ cấu hình, thiết kế cho đến giá bán, Xiaomi nhanh chóng tạo dựng được cho mình một thị phần không nhỏ. Xiaomi Redmi Note 3 Pro nếu nhìn về tổng thể, ngoại hình sản phẩm này có thiết kế tương tự như người tiền nhiệm. Máy được thiết kế trên chất liệu kim loại cùng cảm biến vân tay một chạm.', 1, 'Cùng với đó là thiết kế phù hợp ở mặt trước, viền màn hình tương đối mỏng cảm giác phần màn hình được tràn hẳn ra ngoài khá rộng với màn hình 5.5 inches. Sẽ không dễ gì để phân biệt giữa Redmi Note 3 và Xiaomi Redmi Note 3 Pro. Vì thế trong bài đánh giá này tôi sẽ không nói quà nhiều về mặt thiết kế của Xiaomi Redmi Note 3 Pro mà thay vào đó chúng ta sẽ đi sâu hơn về cấu hình và khả năng xử lý tác vụ của Redmi Note 3 Pro.', 5000000, 0, 5),
(4, 'Asus ZenFone Max 32GB (Đen) - Hãng phân phối chính thức  ', 'asus-zenfone-max-32gb-den--hang-phan-phoi-chinh-thuc', 1, 'Vn-1488763232-jpg', 'Asus Zenfone Max ZC550KL được xem là cú “hit” mạnh vào thị trường điện thoại khi được trang bị viên pin khủng lên đến 5000mAh và trở thành chiếc smartphone hiếm hoi có thể sử dụng như pin sạc dự phòng. Nét ấn tượng của điện thoại Asus Zenfone Max ZC550KL chưa ngừng lại khi máy sở hữu “thân hình” mảnh mai đầy gợi cảm, quý phải với khung viền giả kim cao cấp hứa hẹn sẽ là chiếc smartphone được mong đợi nhất trong trong nay', 1, 'Asus Zenfone Max ZC550KL được xem là cú “hit” mạnh vào thị trường điện thoại khi được trang bị viên pin khủng lên đến 5000mAh và trở thành chiếc smartphone hiếm hoi có thể sử dụng như pin sạc dự phòng. Nét ấn tượng của điện thoại Asus Zenfone Max ZC550KL chưa ngừng lại khi máy sở hữu “thân hình” mảnh mai đầy gợi cảm, quý phải với khung viền giả kim cao cấp hứa hẹn sẽ là chiếc smartphone được mong đợi nhất trong trong nay.\r\n\r\n\r\nThời gian chờ đến 38 ngày\r\nCó thể nói Asus đã khá nổ lực trong việc “nhồi nhét” một viên pin “khủng” vào trong một thân máy mỏng như Asus Zenfone Max ZC550KL. Với dung lượng lên đến 5000mAh, máy không chỉ có thể đạt thời gia chờ lên đến 38 ngày mà còn sử dụng như pin sạc dự phòng để sạc các thiết bị khác. Giờ đây, bạn có thể làm được nhiều việc hơn, xem phim lâu hơn và thoải mái tám chuyện cùng bạn bè mà không lo về thời lượng pin nữa.\r\n\r\n\r\nAsus-Zenfone-Max-ZC550KL\r\n\r\n\r\nCamera 13MP lấy nét Laser\r\nMặc dù được định vị trong phân khúc “bình dân” nhưng Asus Zenfone Max ZC550KL được trang bị camera chính 13MP với công nghệ tự động lấy nét bằng Laser. Nhờ đó, người dùng có thể chụp được những bức ảnh độ phân giải cao với tốc độ nhanh chóng đến không ngờ. Tính năng này còn giảm nhoè và tăng cường độ ổn định của hình ảnh, bên cạnh đó công nghệ chụp thiếu sáng sẽ giúp hình ảnh trở nên sáng rõ hơn trong những môi trường ánh sáng không mong muốn.', 2000000, 0, 0),
(5, 'ASUS X441UA-WX055D', 'asus-x441uawx055d', 1, 'Vn-1488763544-jpg', 'Hiệu năng mạnh mẽ cho games hay mọi tác vụ khác\r\n\r\nVới CPU Intel Core i5 hoặc i7 thế hệ thứ 6 (Skylake) cùng card đồ họa rời NVIDIA®GeForce® GTX™ graphics hỗ trợ Microsoft DirectX 12, ROG GL552 ra đời với mục đích chính là chinh phục games và có thể làm được mọi tác vụ khác.\r\n\r\nMáy cũng được trang bị một màn hình full HD chống lóa, có khả năng hiển thị tốt trong mọi điều kiện ánh sáng và tốt cho mắt.', 2, 'Đặc điểm chính:\r\nSKU	AS082ELAA1GOBZVNAMZ-2334574\r\nBộ vi xử lý	Intel Core i5\r\nCPU Speed	3-4Ghz\r\nKích thước màn hình	15.6\r\nGraphics Card	Intel\r\nGraphics Memory	4GB\r\nHard Drive Capacity	1TB\r\nInput/Output Ports	USB 3.0\r\nMẫu mã	XUÂN VINH COMPUTER-ASUS GL552VX-DM143D i5-6300HQ 8G 1TB GTX950_4GB\r\nProcessor Type	Not Specified\r\nKích thước sản phẩm (D x R x C cm)	35x25x3.5\r\nTrọng lượng (KG)	5\r\nSản xuất tại	Trung Quốc\r\nBộ nhớ hệ thống (MB)	8GB\r\nTouchpad	Yes\r\nThời gian bảo hành	2 năm\r\nLoại hình bảo hành	Bằng Hóa đơn mua hàng', 12000000, 0, 5),
(6, ' Laptop Xiaomi Mi Notebook Air 12.5inch 128GB ( Vàng ) ', 'laptop-xiaomi-mi-notebook-air-125inch-128gb--vang-', 1, 'Vn-1488763656-jpg', 'Xiaomi Mi Book Air là mẫu máy tính xách tay đầu tiên của Xiaomi vừa được ra mắt cách đây không lâu và nhận được sự quan tâm rất lớn từ cộng đồng công nghệ. Laptop Xiaomi Mibook Air có hai phiên bản với kích thươc màn hình cùng vi xử lý khác nhau, cả hai đều mỏng nhẹ và rất thời trang mặc dù thiết kế có phần hơi giống Macbook của Apple. Phiên bản 12.5 hiện nay đã được đưa về Việt Nam', 2, 'Thông tin cấu hình\r\n- Màn hình 12,5 inch, độ phân giải Full HD\r\n- Vi xử lý: Intel Core M3 (4M Cache, up to 2,2 GHz)\r\n- RAM: 4 GB\r\n- Ổ cứng SSD: 128 GB\r\n- Loa AKG, công nghệ âm thanh vòm Dolby\r\n- Pin dùng 11,5 giờ\r\n- USB Type-C\r\n- Hệ điều hành: Windows 10 Home\r\n\r\nMở hộp sản phẩm\r\n\r\nHộp đựng của Xiaomi MiBook Air được thiết kế khá đơn giản, mặt trước in hình sản phẩm, mặt sau đề cập tới thông tin cấu hình. Mở hộp laptop Xiaomi, chúng ta có 01 máy Xiaomi MiBook Air phiên bản 12,5 inch, một củ sạc thông thường có dòng sạc thấp nhất là 5V - 2A và cao nhất là 20V 2,25A, có đầu USB Type-C. Độ dài dây sạc của laptop Xiaomi là khoảng 1,5 mét. Điều này có nghĩa là khi cấp bách các bạn có thể cắm sạc dự phòng điện thoại vào để sử dụng tạm cũng không vấn đề gì.', 8000000, 0, 0),
(7, '1', '1', 1, 'Vn-1488876281-jpg', 'wwwwwwwwwwwwww', 2, 'ư', 10000000, 0, 10),
(8, 'Pha đánh cướp hay nhất vbb ', 'pha-danh-cuop-hay-nhat-vbb', 1, '', 'rrrr', 1, 'rrrrrr', 1, 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(255) NOT NULL,
  `username` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `fullname` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `status` bit(1) NOT NULL,
  `phone` int(15) NOT NULL,
  `address` varchar(250) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `fullname`, `status`, `phone`, `address`) VALUES
(1, 'admin', 'e10adc3949ba59abbe56e057f20f883e', 'viet@gmail.com', 'nguyễn văn việt', b'1111111111111111111111111111111', 123456789, 'Thăng bình - Quảng nam'),
(2, 'vanviet', 'e10adc3949ba59abbe56e057f20f883e', 'nam@gmail.com', 'trần thị m', b'1111111111111111111111111111111', 987654321, 'Tam kì'),
(3, 'vanviet1', '25f9e794323b453885f5181f1b624d0b', '111111viet@gmail.com', '1111111111', b'1111111111111111111111111111111', 111111111, '111'),
(9, '33', '15de21c670ae7c3f6f3f1f37029303c9', 'ddd@gmail.com', 'cc', b'1111111111111111111111111111111', 2, '2'),
(10, 'eeeee', '670da91be64127c92faac35c8300e814', 'vohoangnamsssssssssscmg@gmail.com', 's', b'1111111111111111111111111111111', 1, '1'),
(11, 'admin333333', '182be0c5cdcd5072bb1864cdee4d3d6e', 'vi3333333et@gmail.com', '3', b'1111111111111111111111111111111', 1, '1'),
(12, 'd', '8277e0910d750195b448797616e091ad', 'ddddddd@gmail.com', 'd', b'1111111111111111111111111111111', 1, '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `logo`
--
ALTER TABLE `logo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_id_user_foreign` (`id_user`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT for table `city`
--
ALTER TABLE `city`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=819;
--
-- AUTO_INCREMENT for table `logo`
--
ALTER TABLE `logo`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
