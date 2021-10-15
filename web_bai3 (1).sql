-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 01, 2021 lúc 02:11 PM
-- Phiên bản máy phục vụ: 10.4.19-MariaDB
-- Phiên bản PHP: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `web_bai3`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admin`
--

CREATE TABLE `admin` (
  `ad_id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `created_on` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `admin`
--

INSERT INTO `admin` (`ad_id`, `username`, `password`, `fullname`, `created_on`) VALUES
(1, 'hung', 'e10adc3949ba59abbe56e057f20f883e', 'phanthanhhung', '2021-06-07');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `employee`
--

CREATE TABLE `employee` (
  `nv_id` int(50) NOT NULL,
  `nv_image` varchar(50) NOT NULL,
  `nv_fullname` varchar(50) NOT NULL,
  `nv_age` int(50) NOT NULL,
  `nv_numberphone` int(50) NOT NULL,
  `nv_address` varchar(50) NOT NULL,
  `nv_position` int(50) NOT NULL,
  `nv_salary` int(50) NOT NULL,
  `nv_level` varchar(50) NOT NULL,
  `nv_email` varchar(50) NOT NULL,
  `nv_cccd` int(50) NOT NULL,
  `nv_rate` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `employee`
--

INSERT INTO `employee` (`nv_id`, `nv_image`, `nv_fullname`, `nv_age`, `nv_numberphone`, `nv_address`, `nv_position`, `nv_salary`, `nv_level`, `nv_email`, `nv_cccd`, `nv_rate`) VALUES
(1000, '1622884387_staff3.jpg', 'Phan Thành Hưng', 22, 9688888, 'Ninh Bình', 2001, 35000000, 'Cao Đẳng', 'pth@gmail.com', 12345773, 5),
(1001, '1622885220_staff4.jpg', 'Phạm Tuấn Minh', 21, 96888888, 'Cao Bằng', 2002, 25000000, 'Đại học', 'pm@gmail.com', 12345774, 4.6),
(1004, '1622969959_1622884456_staff22.jpg', 'Phạm Khánh Ngân', 19, 96777777, 'Hà Nội', 2004, 15000000, 'Đại học', 'pkn@gmail.com', 12345777, 4),
(1005, '1622969964_1622889513_captain.jpg', 'Steve Rogers', 22, 96888886, 'Mỹ Tho', 2005, 30000000, 'Đại học', 'ct@gmail.com', 12345888, 4.8),
(1013, '1622971228_Untitled.png', 'Nguyễn Phương Ly', 19, 96888886, 'Hà Nội', 2002, 10000000, 'Cao Đẳng', 'ppl@gmail.com', 12345772, 4.4);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `position`
--

CREATE TABLE `position` (
  `pos_id` int(50) NOT NULL,
  `pos_name` varchar(50) NOT NULL,
  `pos_sl` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `position`
--

INSERT INTO `position` (`pos_id`, `pos_name`, `pos_sl`) VALUES
(2001, 'Quản Lý', 1),
(2002, 'Phục vụ', 5),
(2004, 'Pha chế', 4),
(2005, 'Bảo vệ', 2);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`ad_id`);

--
-- Chỉ mục cho bảng `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`nv_id`);

--
-- Chỉ mục cho bảng `position`
--
ALTER TABLE `position`
  ADD PRIMARY KEY (`pos_id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `admin`
--
ALTER TABLE `admin`
  MODIFY `ad_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `employee`
--
ALTER TABLE `employee`
  MODIFY `nv_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1028;

--
-- AUTO_INCREMENT cho bảng `position`
--
ALTER TABLE `position`
  MODIFY `pos_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2009;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
