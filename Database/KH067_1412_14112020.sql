-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 14, 2020 at 02:12 PM
-- Server version: 8.0.22-0ubuntu0.20.04.2
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `phone_store`
--
CREATE DATABASE IF NOT EXISTS `phone_store` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `phone_store`;

-- --------------------------------------------------------

--
-- Table structure for table `anhsanpham`
--

CREATE TABLE `anhsanpham` (
  `id` int NOT NULL,
  `url` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `sanpham_id` bigint UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Dumping data for table `anhsanpham`
--

INSERT INTO `anhsanpham` (`id`, `url`, `sanpham_id`) VALUES
(114, 'public/uploads/products/2020/11/86839_Logo-3.png', 59),
(115, 'public/uploads/products/2020/11/11884_Logo-3.png', 59),
(116, 'public/uploads/products/2020/11/12422_Logo-3.png', 59),
(117, 'public/uploads/products/2020/11/75337_Logo-3.png', 59),
(118, 'public/uploads/products/2020/11/57129_Logo-3.png', 59),
(134, 'public/uploads/products/2020/11/80410_Logo-3.png', 30),
(135, 'public/uploads/products/2020/11/36644_Logo-3.png', 30),
(136, 'public/uploads/products/2020/11/6867_Logo-3.png', 30),
(137, 'public/uploads/products/2020/11/49839_Logo-3.png', 30),
(138, 'public/uploads/products/2020/11/4898_Logo-3.png', 30);

-- --------------------------------------------------------

--
-- Table structure for table `baiviet`
--

CREATE TABLE `baiviet` (
  `id` bigint UNSIGNED NOT NULL,
  `tieude` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `doantrich` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `hinhanh` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `noidung` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `danhmuc_id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `baiviet`
--

INSERT INTO `baiviet` (`id`, `tieude`, `doantrich`, `hinhanh`, `noidung`, `danhmuc_id`, `user_id`, `created_at`, `updated_at`) VALUES
(6, 'Laptop technical details', 'Doan Trich', '/public/uploads/blog/22592_download.jpeg', 'Noi Dung', 1, 11, '2020-10-22 12:01:40', NULL),
(7, 'Dairy: A free Sketch UI kit for minimal apps minimal apps minimal apps minimal apps minimal apps minimal apps minimal apps minimal apps', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ultrices ipsum non mattis pharetra. Integer laoreet non felis sit amet pharetra. Integer mollis eget felis non finibus. Nullam nib', 'public/uploads/products/2017/06/blog1-2-580x366.jpg', 'Theo chuyên gia phân tích Ming-Chi Kuo, Apple hiện đang tập trung phát triển dòng sản phẩm iPhone cho năm tới, dự kiến sẽ có tên gọi là iPhone 13. Giống như iPhone 12 vừa ra mắt cách đây chưa đầy một tháng, ông cho rằng iPhone 13 cũng sẽ có 4 model với kích thước khác nhau, nhưng đi kèm một số cải tiến lớn về công nghệ camera.\r\n\r\nCụ thể, Kuo cho biết camera góc siêu rộng trên iPhone 13 Pro và iPhone 13 Pro Max sẽ được nâng cấp đáng kể lên khẩu độ f/1.8, sử dụng ống kính 6P và có khả năng lấy nét tự động. Tất cả các mẫu iPhone 12 hiện tại đều chỉ được trang bị camera góc siêu rộng f/2.4, ống kính 5P với tiêu cực cố định.\r\n\r\nKuo hy vọng rằng trong tương lai, tất cả các mẫu iPhone 2022 (tạm gọi là iPhone 14 series) sẽ có camera góc siêu rộng được cải tiến với khẩu độ f/1.8, ống kính 6P và tự động lấy nét. Theo ông, Largan nhiều khả năng sẽ trở thành nhà cung cấp motor camera chính cho cảm biến góc rộng trên iPhone mới, chiếm khoảng 70% đơn đặt hàng VCM của iPhone 13.', 1, 11, '2020-10-22 12:01:46', NULL),
(8, 'Best care and support at Our Stores', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ultrices ipsum non mattis pharetra. Integer laoreet non felis sit amet pharetra. Integer mollis eget felis non finibus. Nullam nib', 'public/uploads/products/2017/03/blog4-2-580x366.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ultrices ipsum non mattis pharetra. Integer laoreet non felis sit amet pharetra. Integer mollis eget felis non finibus. Nullam nib', 4, 11, '2020-10-22 12:01:51', NULL),
(9, 'The best products at your fingertips', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus sagittis semper tortor. Quisque non felis elementum augue ullamcorper laoreet. Nam porta leo ut felis suscipit, vel semper l', 'public/uploads/products/2017/06/blog6-2.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus sagittis semper tortor. Quisque non felis elementum augue ullamcorper laoreet. Nam porta leo ut felis suscipit, vel semper l', 4, 11, '2020-10-22 12:01:56', NULL),
(10, 'Free set of smartphone clay mockups', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ultrices ipsum non mattis pharetra. Integer laoreet non felis sit amet pharetra. Integer mollis eget felis non finibus. Nullam nib', 'public/uploads/products/2017/06/blog3-2-580x366.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ultrices ipsum non mattis pharetra. Integer laoreet non felis sit amet pharetra. Integer mollis eget felis non finibus. Nullam nib', 4, 11, '2020-10-22 12:02:01', NULL),
(16, 'Ra Mat Iphone 12', 'Ra Mat Iphone 12', 'public/uploads/blog/443_iphone_12_pro_max_3.jpg', 'Ra Mat Iphone 12\r\nRa Mat Iphone 12\r\nRa Mat Iphone 12', 1, 11, '2020-10-23 08:45:25', NULL),
(17, 'Demo', 'Demo doan trich ', 'public/uploads/blog/34356_icon.png', 'Demo noi dung', 1, 11, '2020-10-31 17:22:37', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `chitietdonhang`
--

CREATE TABLE `chitietdonhang` (
  `id` bigint UNSIGNED NOT NULL,
  `soluongmua` int NOT NULL,
  `sale` smallint NOT NULL,
  `sanpham_id` bigint UNSIGNED NOT NULL,
  `donhang_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `chitietdonhang`
--

INSERT INTO `chitietdonhang` (`id`, `soluongmua`, `sale`, `sanpham_id`, `donhang_id`, `created_at`, `updated_at`) VALUES
(10, 1, 30, 57, 19, NULL, NULL),
(11, 1, 0, 41, 20, NULL, NULL),
(12, 3, 0, 58, 32, NULL, NULL),
(13, 1, 0, 58, 33, NULL, NULL),
(14, 1, 0, 58, 34, NULL, NULL),
(15, 4, 0, 58, 35, NULL, NULL),
(16, 3, 0, 58, 36, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `danhgia_sanpham`
--

CREATE TABLE `danhgia_sanpham` (
  `id` bigint UNSIGNED NOT NULL,
  `noidung` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `danhgia` smallint NOT NULL,
  `sanpham_id` bigint UNSIGNED NOT NULL,
  `khachhang_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `danhgia_sanpham`
--

INSERT INTO `danhgia_sanpham` (`id`, `noidung`, `danhgia`, `sanpham_id`, `khachhang_id`, `created_at`, `updated_at`) VALUES
(1, 'product very good', 5, 50, 6, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `danhmuc`
--

CREATE TABLE `danhmuc` (
  `id` bigint UNSIGNED NOT NULL,
  `tendanhmuc` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `mota` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `danhmuc`
--

INSERT INTO `danhmuc` (`id`, `tendanhmuc`, `mota`, `created_at`, `updated_at`) VALUES
(8, 'Cell Phones, Xiaomi', 'Cell Phones, Xiaomi ... desc', '2020-06-23 10:56:59', NULL),
(9, 'Cell Phones, OnePlus', 'Cell Phones, OnePlus ... desc', '2020-06-23 10:57:13', NULL),
(10, 'Computer Hardware, Daydream View', 'Computer Hardware, Daydream View ....', '2020-06-23 10:57:36', NULL),
(11, 'Acoustics, Computer Hardware', 'Acoustics, Computer Hardware ....', '2020-06-23 10:58:09', NULL),
(12, 'Apple, Smart Watches', 'Apple, Smart Watches ... desc', '2020-06-23 10:58:24', NULL),
(13, 'Computer Hardware, Keyboards', 'Computer Hardware, Keyboards ... desc', '2020-06-23 10:58:39', NULL),
(14, 'Smart Watches, Sony', 'Smart Watches, Sony ... desc', '2020-06-23 10:58:49', NULL),
(15, 'Cell Phones, Motorola', 'Cell Phones, Motorola... desc', '2020-06-23 10:59:07', NULL),
(16, 'Cell Phones, IPhone', 'Cell Phones, IPhone ...', '2020-06-23 10:59:28', NULL),
(17, 'Apple iPads Mini, Tablets', 'Apple iPads Mini, Tablets ...', '2020-06-23 10:59:39', NULL),
(18, 'Dell Laptop, Laptops', 'Dell Laptop, Laptops ...', '2020-06-23 10:59:47', NULL),
(19, 'Cell Phones, Meizu', 'Cell Phones, Meizu ...', '2020-06-23 10:59:56', NULL),
(20, 'Computer Hardware, Mice', 'Computer Hardware, Mice ...', '2020-06-23 11:00:06', NULL),
(21, 'Asus, Laptops', 'Asus, Laptops ...', '2020-06-23 11:00:14', NULL),
(22, 'Samsung, Smart Watches', 'Samsung, Smart Watches ...', '2020-06-23 11:00:23', NULL),
(23, 'Iphone New', 'IPhone New', '2020-10-21 18:27:40', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `danhmuc_blog`
--

CREATE TABLE `danhmuc_blog` (
  `id` bigint UNSIGNED NOT NULL,
  `tendanhmuc` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `mota` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hinhanh` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `danhmuc_blog`
--

INSERT INTO `danhmuc_blog` (`id`, `tendanhmuc`, `mota`, `hinhanh`, `created_at`, `updated_at`) VALUES
(1, 'News', 'xxxxx', NULL, NULL, NULL),
(4, 'Business', 'Business ... ', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `donhang`
--

CREATE TABLE `donhang` (
  `id` bigint UNSIGNED NOT NULL,
  `tongtien` int NOT NULL,
  `trangthai` tinyint(1) NOT NULL,
  `khachhang_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `donhang`
--

INSERT INTO `donhang` (`id`, `tongtien`, `trangthai`, `khachhang_id`) VALUES
(19, 1000000, 1, 9),
(20, 70000, 0, 10),
(32, 120000, 0, 17),
(33, 40000, 0, 17),
(34, 40000, 0, 17),
(35, 160000, 0, 17),
(36, 120000, 1, 6);

-- --------------------------------------------------------

--
-- Table structure for table `khachhang`
--

CREATE TABLE `khachhang` (
  `id` bigint UNSIGNED NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'example@example.com',
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'employee-avatar.png',
  `hoten` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'default name',
  `phone` varchar(13) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0123456789',
  `diachi` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'default_address',
  `note` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `khachhang`
--

INSERT INTO `khachhang` (`id`, `email`, `password`, `avatar`, `hoten`, `phone`, `diachi`, `note`) VALUES
(6, 'nguyenvana@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'public/uploads/customer/employee-avatar.png', 'Nguyễn Văn A', '123456', 'HN', ''),
(9, 'nguyenvanb@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'public/uploads/customer/employee-avatar.png', 'Nguyen Van B', '09543543523', 'Ha Noi', ''),
(10, 'taihoaapxuong4@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'public/uploads/customer/employee-avatar.png', 'Khách Hàng', '0943432', '4324324', ''),
(17, 'khachhang@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'public/uploads/customer/employee-avatar.png', 'Nguyễn Văn C', '123', 'HN', ''),
(18, 'nguyenvanc@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'public/uploads/customer/employee-avatar.png', 'Khách Hàng', '094234324', 'số 3 nhà A thành phố C', ''),
(19, 'nguyenvand@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'public/uploads/customer/employee-avatar.png', 'Nguyễn Văn D', '09432432', '', ''),
(21, 'convitcon@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'public/uploads/customer/employee-avatar.png', 'Con Vịt', '123456', '', ''),
(22, 'congacon@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'public/uploads/customer/employee-avatar.png', 'Con Gà', '123', '', ''),
(23, 'conchocon@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'public/uploads/customer/50799_Logo-3.png', 'Con Chó', '0123456789', 'Ha Noi', ''),
(25, 'conmeocon@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'public/uploads/customer/23894_Logo-3.png', 'Meow Meow', '0123456789', 'HN', ''),
(26, 'conrongcon@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'public/uploads/customer/19266_Logo-3.png', 'Dragon', '0123456789', 'HN', ''),
(27, 'conchuotcon@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'public/uploads/customer/employee-avatar.png', 'Mouse', '0123456789', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `lienhe`
--

CREATE TABLE `lienhe` (
  `id` int NOT NULL,
  `hoten` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `phone` varchar(13) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `chude` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `noidung` text CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `trangthai` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Dumping data for table `lienhe`
--

INSERT INTO `lienhe` (`id`, `hoten`, `email`, `phone`, `chude`, `noidung`, `created_at`, `trangthai`) VALUES
(6, 'xx', 'xxx', '09435433', 'xxx', 'xxxx', '2020-06-14 16:34:18', 1),
(7, 'khach hang x', 'admin@gmail.com', '0943243', 'xx', 'xx', '2020-07-03 22:33:31', 0),
(9, 'a', 'a', 'a', 'a', 'a', '2020-10-23 01:46:34', 0),
(10, 'a', 'a', 'a', 'a', 'a', '2020-10-23 02:16:23', 0),
(11, 'a', 'a', 'a', 'a', 'a', '2020-10-23 02:17:24', 0),
(12, 'a', 'a', 'a', 'a', 'a', '2020-10-23 02:17:58', 0),
(13, 'a', 'a', 'a', 'a', 'a', '2020-10-23 02:18:20', 0),
(14, 'a', 'a', 'a', 'a', 'a', '2020-10-23 02:19:55', 0),
(16, 'a', 'a', 'a', 'a', 'a', '2020-10-23 02:21:09', 1),
(17, 'a', 'a', 'a', 'a', 'a', '2020-10-23 02:21:35', 0),
(18, 'a', 'a', 'a', 'a', 'a', '2020-10-23 02:22:12', 0),
(19, 'a', 'a', 'a', 'a', 'a', '2020-10-23 02:23:20', 0),
(20, 'a', 'a', 'a', 'a', 'a', '2020-10-23 02:23:24', 0),
(21, 'a', 'a', 'a', 'a', 'a', '2020-10-23 02:23:35', 0),
(22, 'a', 'a', 'a', 'a', 'a', '2020-10-23 02:24:04', 0),
(23, 'test', 'test@test.com', '123456', 'qwer', 'qwer', '2020-10-26 14:12:17', 1),
(24, 'aa', 'email@email.com', '123456', '123', '123', '2020-11-01 00:18:57', 1),
(25, 'Demo', 'demo@gmail.com', '123456', 'Demo', 'ádasdasd', '2020-11-13 15:57:08', 0);

-- --------------------------------------------------------

--
-- Table structure for table `sanpham`
--

CREATE TABLE `sanpham` (
  `id` bigint UNSIGNED NOT NULL,
  `tensanpham` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mota` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `hinhanh` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `soluong` int NOT NULL,
  `giaban` int NOT NULL,
  `danhgia` smallint NOT NULL,
  `sale` int NOT NULL,
  `danhmuc_id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  `luotmua` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sanpham`
--

INSERT INTO `sanpham` (`id`, `tensanpham`, `mota`, `hinhanh`, `soluong`, `giaban`, `danhgia`, `sale`, `danhmuc_id`, `user_id`, `created_at`, `updated_at`, `luotmua`) VALUES
(30, 'Xiaomi Mi Mix 2', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris tristique nibh ac ligula dapibus, quis ornare felis malesuada. Cras in feugiat diam. Donec euismod purus lorem, vel euismod sem', 'public/uploads/products/2020/10/6-540x540.jpg', 100, 550000, 5, 0, 8, 11, '2020-10-13 22:04:08', '2020-11-10 06:29:37', 0),
(31, 'OnePlus 5T', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris tristique nibh ac ligula dapibus, quis ornare felis malesuada. Cras in feugiat diam. Donec euismod purus lorem, vel euismod sem', 'public/uploads/products/2020/10/5-540x540.jpg', 100, 120000, 5, 0, 8, 1, '2020-06-23 11:06:21', '2020-11-10 06:29:43', 0),
(33, 'Google Daydream VR', 'Maecenas iaculis mauris lacus, nec bibendum tellus maximus non. Proin eget dictum eros, sed viverra diam. Praesent eu rhoncus eros. In hac habitasse platea dictumst. Curabitur sagittis tristi', 'public/uploads/products/2020/10/7-3.jpg', 100, 400000, 5, 0, 10, 1, '2020-06-23 11:08:37', '2020-11-10 06:29:51', 0),
(34, 'JBL Pulse 3', 'Suspendisse feugiat metus eget vestibulum aliquam. Vestibulum fringilla vitae orci at egestas. Phasellus molestie ex eget diam accumsan luctus. Sed dapibus metus at aliquam luctus. Mauris tur', 'public/uploads/products/2020/10/15.jpg', 100, 40000, 5, 0, 11, 1, '2020-06-23 11:10:13', '2020-11-10 06:29:56', 0),
(35, 'JBL Pulse 3', 'Suspendisse feugiat metus eget vestibulum aliquam. Vestibulum fringilla vitae orci at egestas. Phasellus molestie ex eget diam accumsan luctus. Sed dapibus metus at aliquam luctus. Mauris tur', 'public/uploads/products/2020/10/15.jpg', 100, 40000, 5, 0, 11, 1, '2020-06-23 11:10:25', '2020-11-10 06:30:00', 0),
(36, 'Misfit Shine 2', 'Vivamus sit amet mauris imperdiet, efficitur libero in, mollis magna. Quisque lacinia volutpat tortor, nec ultrices velit pulvinar sit amet. Nulla eleifend leo ut risus elementum scelerisque ', 'public/uploads/products/2020/10/10.jpg', 100, 40000, 5, 0, 12, 1, '2020-06-23 11:12:16', '2020-11-10 06:30:06', 0),
(37, 'Misfit Shine 2', 'Vivamus sit amet mauris imperdiet, efficitur libero in, mollis magna. Quisque lacinia volutpat tortor, nec ultrices velit pulvinar sit amet. Nulla eleifend leo ut risus elementum scelerisque ', 'public/uploads/products/2020/10/10.jpg', 100, 40000, 5, 0, 12, 1, '2020-06-23 11:12:32', '2020-11-10 06:30:45', 0),
(39, 'Sony Watch Series F', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris tristique nibh ac ligula dapibus, quis ornare felis malesuada. Cras in feugiat diam. Donec euismod purus lorem, vel euismod sem', 'public/uploads/products/2017/09/23-3.jpg', 100, 675000, 5, 20, 14, 1, '2020-06-23 11:27:33', '2020-11-10 06:30:49', 0),
(40, 'Nokia 6 Dual Sim Tempered Blue', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris tristique nibh ac ligula dapibus, quis ornare felis malesuada. Cras in feugiat diam. Donec euismod purus lorem, vel euismod sem', 'public/uploads/products/2017/09/34-2.jpg', 120, 90000, 5, 10, 15, 1, '2020-06-23 11:27:33', '2020-11-10 06:30:52', 0),
(41, 'Polaroid Cube+', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris tristique nibh ac ligula dapibus, quis ornare felis malesuada. Cras in feugiat diam. Donec euismod purus lorem, vel euismod sem', 'public/uploads/products/2015/05/9-3.jpg', 120, 70000, 5, 0, 17, 1, '2020-06-23 11:27:33', '2020-11-10 06:30:58', 100),
(42, 'Apple iPhone 5S 32GB GM', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris tristique nibh ac ligula dapibus, quis ornare felis malesuada. Cras in feugiat diam. Donec euismod purus lorem, vel euismod sem', 'public/uploads/products/2017/09/11-2.jpg', 80, 700000, 5, 20, 16, 1, '2020-06-23 11:27:33', '2020-11-10 06:31:01', 0),
(44, 'Apple iPhone 6', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris tristique nibh ac ligula dapibus, quis ornare felis malesuada. Cras in feugiat diam. Donec euismod purus lorem, vel euismod sem', 'public/uploads/products/2017/09/20-3.jpg', 20, 400000, 2, 10, 16, 1, '2020-06-23 11:27:33', '2020-11-10 06:31:04', 100),
(48, 'Bluetooth Keyboard', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris tristique nibh ac ligula dapibus, quis ornare felis malesuada. Cras in feugiat diam. Donec euismod purus lorem, vel euismod sem', 'public/uploads/products/2017/09/34-2.jpg', 100, 40000, 5, 0, 11, 1, '2020-06-23 11:29:06', '2020-11-10 06:31:11', 0),
(49, 'Sony Watch Series F', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris tristique nibh ac ligula dapibus, quis ornare felis malesuada.pharetra at. Integer elit nulla, aliquet eget nisi lobortis, vari', 'public/uploads/products/2017/09/23-3.jpg', 100, 675000, 5, 20, 14, 1, '2020-06-23 11:29:06', '2020-11-10 06:30:40', 0),
(50, 'Nokia 6 Dual Sim Tempered Blue', ' Cras in feugiat diam. Donec euismod purus lorem, vel euismod sem pharetra at. Integer elit nulla, aliquet eget nisi lobortis, varius accumsan dui. Quisque semper dolor nibh, ac aliquet quam ', 'public/uploads/products/2017/09/34-2.jpg', 120, 90000, 5, 10, 15, 1, '2020-06-23 11:29:06', '2020-11-10 06:30:36', 0),
(52, 'Apple iPhone 5S 32GB GM', ' quis ornare felis malesuada. Cras in feugiat diam. Donec euismod purus lorem, vel euismod sem pharetra at. Integer elit nulla, aliquet eget nisi lobortis, varius accumsan dui. Quisque semper', 'public/uploads/products/2017/09/11-2.jpg', 80, 700000, 5, 20, 16, 1, '2020-06-23 11:29:06', '2020-11-10 06:30:32', 0),
(55, 'Meizu M6 Note Blue', 'Lorem ipsum dolor sit amet,  vel euismod sem pharetra at. Integer elit nulla, aliquet eget nisi lobortis, varius accumsan dui. Quisque semper dolor nibh, ac aliquet quam vehicula a. Aenean id', 'public/uploads/products/2017/09/1-3.jpg', 25, 200000, 3, 40, 19, 1, '2020-06-23 11:29:06', '2020-11-10 06:30:27', 1),
(56, 'Apple Magic Mouse', 'Cras in feugiat diam. Donec euismod purus lorem, vel euismod sem pharetra at. Integer elit nulla, aliquet eget nisi lobortis, varius accumsan dui. Quisque semper dolor nibh, ac aliquet quam v', 'public/uploads/products/2017/09/35-2.jpg', 20, 200000, 5, 40, 13, 1, '2020-06-23 11:29:06', '2020-11-10 06:30:24', 1),
(57, 'Asus Zenbook', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.  vel euismod sem pharetra at. Integer elit nulla, aliquet eget nisi lobortis, varius accumsan dui. Quisque semper dolor nibh, ac aliqu', 'public/uploads/products//2017/09/2-3.jpg', 40, 1000000, 5, 30, 21, 1, '2020-06-23 11:29:06', '2020-11-10 06:30:20', 0),
(58, 'Samsung Gear Blue', 'Samsung Gear Blue Samsung Gear Blue Samsung Gear Blue', 'public/uploads/products/2017/05/4.jpg', 100, 40000, 5, 0, 22, 1, '2020-06-23 11:30:31', '2020-11-17 06:30:16', 0),
(59, 'IPhone 12', 'IPhone 12 mo ta IPhone 12 mo ta IPhone 12 mo ta IPhone 12 mo ta IPhone 12 mo ta IPhone 12 mo ta\r\n\r\nIPhone 12 mo ta\r\nIPhone 12 mo ta\r\nIPhone 12 mo ta\r\nIPhone 12 mo taIPhone 12 mo taIPhone 12 mo taIPhone 12 mo ta\r\n\r\n\r\nIPhone 12 mo ta\r\nIPhone 12 mo ta\r\nIPhone 12 mo ta', 'public/uploads/products/2020/10/21487_iphone125_800x450(1).jpg', 100, 30000000, 5, 5, 23, 11, '2020-10-23 06:16:19', '2020-11-10 06:30:12', 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` datetime,
  `password` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT NULL,
  `avatar` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `avatar`) VALUES
(11, 'admin', 'admin@gmail.com', '2020-10-23 07:38:25', 'e10adc3949ba59abbe56e057f20f883e', NULL, '2020-10-23 07:46:47', '2020-10-23 07:46:52', '/public/uploads/profile/avatar-default.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `anhsanpham`
--
ALTER TABLE `anhsanpham`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sanpham_id` (`sanpham_id`);

--
-- Indexes for table `baiviet`
--
ALTER TABLE `baiviet`
  ADD PRIMARY KEY (`id`),
  ADD KEY `baiviet_danhmuc_id_foreign` (`danhmuc_id`),
  ADD KEY `baiviet_user_id_foreign` (`user_id`);

--
-- Indexes for table `chitietdonhang`
--
ALTER TABLE `chitietdonhang`
  ADD PRIMARY KEY (`id`),
  ADD KEY `chitietdonhang_sanpham_id_foreign` (`sanpham_id`),
  ADD KEY `chitietdonhang_donhang_id_foreign` (`donhang_id`);

--
-- Indexes for table `danhgia_sanpham`
--
ALTER TABLE `danhgia_sanpham`
  ADD PRIMARY KEY (`id`),
  ADD KEY `danhgia_sanpham_sanpham_id_foreign` (`sanpham_id`),
  ADD KEY `danhgia_sanpham_khachhang_id_foreign` (`khachhang_id`);

--
-- Indexes for table `danhmuc`
--
ALTER TABLE `danhmuc`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `danhmuc_blog`
--
ALTER TABLE `danhmuc_blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `donhang`
--
ALTER TABLE `donhang`
  ADD PRIMARY KEY (`id`),
  ADD KEY `donhang_khachhang_id_foreign` (`khachhang_id`);

--
-- Indexes for table `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lienhe`
--
ALTER TABLE `lienhe`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sanpham_danhmuc_id_foreign` (`danhmuc_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `anhsanpham`
--
ALTER TABLE `anhsanpham`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=139;

--
-- AUTO_INCREMENT for table `baiviet`
--
ALTER TABLE `baiviet`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `chitietdonhang`
--
ALTER TABLE `chitietdonhang`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `danhgia_sanpham`
--
ALTER TABLE `danhgia_sanpham`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `danhmuc`
--
ALTER TABLE `danhmuc`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `danhmuc_blog`
--
ALTER TABLE `danhmuc_blog`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `donhang`
--
ALTER TABLE `donhang`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `khachhang`
--
ALTER TABLE `khachhang`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `lienhe`
--
ALTER TABLE `lienhe`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `anhsanpham`
--
ALTER TABLE `anhsanpham`
  ADD CONSTRAINT `anhsanpham_ibfk_1` FOREIGN KEY (`sanpham_id`) REFERENCES `sanpham` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `baiviet`
--
ALTER TABLE `baiviet`
  ADD CONSTRAINT `baiviet_ibfk_1` FOREIGN KEY (`danhmuc_id`) REFERENCES `danhmuc_blog` (`id`),
  ADD CONSTRAINT `baiviet_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `chitietdonhang`
--
ALTER TABLE `chitietdonhang`
  ADD CONSTRAINT `chitietdonhang_donhang_id_foreign` FOREIGN KEY (`donhang_id`) REFERENCES `donhang` (`id`),
  ADD CONSTRAINT `chitietdonhang_sanpham_id_foreign` FOREIGN KEY (`sanpham_id`) REFERENCES `sanpham` (`id`);

--
-- Constraints for table `danhgia_sanpham`
--
ALTER TABLE `danhgia_sanpham`
  ADD CONSTRAINT `danhgia_sanpham_khachhang_id_foreign` FOREIGN KEY (`khachhang_id`) REFERENCES `khachhang` (`id`),
  ADD CONSTRAINT `danhgia_sanpham_sanpham_id_foreign` FOREIGN KEY (`sanpham_id`) REFERENCES `sanpham` (`id`);

--
-- Constraints for table `donhang`
--
ALTER TABLE `donhang`
  ADD CONSTRAINT `donhang_khachhang_id_foreign` FOREIGN KEY (`khachhang_id`) REFERENCES `khachhang` (`id`);

--
-- Constraints for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `sanpham_danhmuc_id_foreign` FOREIGN KEY (`danhmuc_id`) REFERENCES `danhmuc` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
