-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 30, 2022 at 04:47 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hogwarts`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `ad_id` int(5) NOT NULL,
  `ad_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`ad_id`, `ad_name`) VALUES
(1, 'admin'),
(2, 'thường');

-- --------------------------------------------------------

--
-- Table structure for table `category_new`
--

CREATE TABLE `category_new` (
  `id` int(5) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `category_new`
--

INSERT INTO `category_new` (`id`, `name`) VALUES
(1, 'Tin nóng về COVID-19\r\n\r\n'),
(2, 'Bệnh thường gặp'),
(3, 'Gia đình & giới tính'),
(4, 'Làm đẹp'),
(5, 'Dinh dưỡng');

-- --------------------------------------------------------

--
-- Table structure for table `partner`
--

CREATE TABLE `partner` (
  `id` int(5) NOT NULL,
  `partner_background` char(50) COLLATE utf8_unicode_ci NOT NULL,
  `partner_img` char(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `partner`
--

INSERT INTO `partner` (`id`, `partner_background`, `partner_img`) VALUES
(1, 'home_brand_image_1.jpg', 'home_brand_logo_1.jpg'),
(2, 'home_brand_image_2.jpg', 'home_brand_logo_2.jpg'),
(3, 'home_brand_image_3.jpg', 'home_brand_logo_3.jpg'),
(4, 'home_brand_image_4.jpg', 'home_brand_logo_4.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(5) NOT NULL,
  `img` char(50) COLLATE utf8_unicode_ci NOT NULL,
  `prd_name` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `price` int(10) NOT NULL,
  `price_old` int(10) NOT NULL,
  `quantity` int(10) NOT NULL,
  `description` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `sold` int(10) NOT NULL,
  `category_id` int(5) NOT NULL,
  `hot` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `img`, `prd_name`, `price`, `price_old`, `quantity`, `description`, `sold`, `category_id`, `hot`) VALUES
(16, 'fd8f5d3618960cc47a3e39f7b5e8d868.jpg', 'Giày Nam 2021, Giày Thể Thao Nam Tăng Chiều Cao 5cm - Phong Cách Trẻ Trung', 249000, 450000, 234432, '', 12131, 5, 1),
(19, '874b5025135909af30375365e4dbe13c.jpg', '[Mã ELSAMHOT giảm 5% đơn 3TR] Điện Thoại Samsung Galaxy Z Fold3 5G 256GB', 3900000, 120000, 123, '114242', 123, 5, 1),
(20, 'home_category_image_3.jpg', 'Lót chuột led rgb, pad chuột cỡ lớn 50 mẫu full box 90x40 80x30 ♥️ FREESHIP ♥️ siêu dày, bền chống nước', 70000, 120000, 99999, '- Lót Chuột LED khổ Lớn\r\n- Mặt Vải Nhung Mềm Mượt\r\n- PAD bọc viền Dày có LED quanh Viền\r\n- Lót chuột rgb 13 Chế độ và 7 màu\r\n- Đáy Bằng Cao Su Chống Trơn Trượt', 133566, 5, 1),
(21, 'spm2.jpg', 'Điện thoại Xiaomi Redmi Note 11 (4GB/128GB) - Hàng chính hãng', 39000000, 13133, 13311, '', 13143, 5, 0),
(22, 'spm2.jpg', 'COMBO Nước Đông Trùng Hạ Thảo Hector Collagen và Hector Sâm', 988000, 1030000, 2342, 'Đông trùng hạ thảo cải thiện vấn đề liệt dương, di tinh, giúp tăng cường sinh lý. Hỗ trợ giảm thoái hóa, đau nhức xương khớp. Tác dụng giảm ho hen, ho có đờm. Đông trùng hạ thảo kháng khuẩn, ngăn ngừa các loại virus viêm gan B, Lao, AIDS xâm nhập vào cơ thể.', 1334, 10, 1),
(23, 'sp4.jpg', 'COMBO Nước Đông Trùng Hạ Thảo Hector Collagen và Hector Sâm', 39000000, 12313, 2342, 'Đông trùng hạ thảo cải thiện vấn đề liệt dương, di tinh, giúp tăng cường sinh lý. Hỗ trợ giảm thoái hóa, đau nhức xương khớp. Tác dụng giảm ho hen, ho có đờm. Đông trùng hạ thảo kháng khuẩn, ngăn ngừa các loại virus viêm gan B, Lao, AIDS xâm nhập vào cơ thể.', 423345, 5, 0),
(24, 'spm1.jpg', 'Giày Nam 2021, Giày Thể Thao Nam Tăng Chiều Cao 5cm - Phong Cách Trẻ Trung', 39000000, 1314, 41224, 'Đông trùng hạ thảo cải thiện vấn đề liệt dương, di tinh, giúp tăng cường sinh lý. Hỗ trợ giảm thoái hóa, đau nhức xương khớp. Tác dụng giảm ho hen, ho có đờm. Đông trùng hạ thảo kháng khuẩn, ngăn ngừa các loại virus viêm gan B, Lao, AIDS xâm nhập vào cơ thể.', 23412, 20, 0),
(25, 'spm3.jpg', 'Điện thoại iPhone X 64GB Quốc Tế mới 99% Hàng Chính Hãng', 342423, 342424, 23423, 'Đông trùng hạ thảo cải thiện vấn đề liệt dương, di tinh, giúp tăng cường sinh lý. Hỗ trợ giảm thoái hóa, đau nhức xương khớp. Tác dụng giảm ho hen, ho có đờm. Đông trùng hạ thảo kháng khuẩn, ngăn ngừa các loại virus viêm gan B, Lao, AIDS xâm nhập vào cơ thể.', 24343, 16, 0),
(28, 'spm1.jpg', 'Điện thoại iPhone X 64GB Quốc Tế mới 99% Hàng Chính Hãng', 39000000, 133345, 4445, '', 2343245, 20, 1),
(33, '874b5025135909af30375365e4dbe13c.jpg', 'Điện thoại iPhone X 64GB Quốc Tế mới 99% Hàng Chính Hãng', 39000000, 23000000, 123, '123', 3334, 5, 1);

-- --------------------------------------------------------

--
-- Table structure for table `product_category`
--

CREATE TABLE `product_category` (
  `category_id` int(10) NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `parent_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `product_category`
--

INSERT INTO `product_category` (`category_id`, `name`, `parent_id`) VALUES
(1, 'Thực phẩm chức năng', 0),
(2, 'Chăm sóc sức khỏe', 0),
(3, 'Chăm sóc cá nhân', 0),
(4, 'Chăm sóc sắc đẹp', 0),
(5, 'Nhóm hô hấp', 1),
(6, 'Nhóm thần kinh', 1),
(7, 'Nhóm tiêu hóa', 1),
(8, 'Giảm cân', 1),
(9, 'Dược mỹ phẩm', 2),
(10, 'Thực phẩm dinh dưỡng', 2),
(11, 'Kế hoạch gia đình', 2),
(12, 'Khẩu trang', 2),
(13, 'Chăm sóc em bé', 3),
(14, 'Vệ sinh phụ nữ', 3),
(15, 'Chăm sóc nam giới', 3),
(16, 'Sản phẩm phòng tắm', 3),
(17, 'Chăm sóc mặt', 4),
(18, 'Sản phẩm chống nắng', 4),
(19, 'Dụng cụ trang điểm', 4),
(20, 'Mỹ phẩm', 4);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(5) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` int(10) NOT NULL,
  `addres` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ad_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `password`, `addres`, `ad_id`) VALUES
(6, 'lil manh', 'manh123@gmail.com', 123, '1/2/3 Nguyễn Văn Thuận', 2),
(9, 'Nguyễn Văn Thuận', 'thuan123@gmail.com', 1234, '12/44/55', 1),
(13, 'Nguyễn Lil Chi', 'lilchi@gmail.com', 1234, '13/9/511', 2),
(14, 'Nguyễn Quang Minh', 'minh@gmail.com', 123, '13/9/511', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`ad_id`);

--
-- Indexes for table `category_new`
--
ALTER TABLE `category_new`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `partner`
--
ALTER TABLE `partner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_category`
--
ALTER TABLE `product_category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ad_id` (`ad_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `ad_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `category_new`
--
ALTER TABLE `category_new`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `partner`
--
ALTER TABLE `partner`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `product_category`
--
ALTER TABLE `product_category`
  MODIFY `category_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`ad_id`) REFERENCES `admin` (`ad_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
