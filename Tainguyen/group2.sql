-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 01, 2025 at 10:26 AM
-- Server version: 8.0.30
-- PHP Version: 8.2.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `group2`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int NOT NULL,
  `cate_name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `cate_name`) VALUES
(1, 'Quần áo  nam'),
(2, 'Quần áo  nữ'),
(5, 'Giày nữ'),
(6, 'Giày nam');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int NOT NULL,
  `user_id` int NOT NULL,
  `product_id` int NOT NULL,
  `content` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `active_comment` tinyint NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `user_id`, `product_id`, `content`, `active_comment`, `created_at`) VALUES
(1, 6, 12, 'nfkafn', 1, '2024-12-04 10:16:12'),
(2, 5, 10, 'dâ', 1, '2024-12-06 06:12:50'),
(3, 5, 10, 'vdf', 1, '2024-12-06 06:14:12'),
(4, 5, 12, 'đ', 1, '2024-12-07 00:17:48'),
(5, 6, 12, 'dsaa', 1, '2024-12-07 01:30:24');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int NOT NULL,
  `user_id` int NOT NULL,
  `status` tinyint NOT NULL,
  `payment_method` varchar(60) COLLATE utf8mb4_general_ci NOT NULL,
  `total_price` decimal(10,0) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `status`, `payment_method`, `total_price`, `created_at`) VALUES
(26, 6, 5, 'cod', '2396', '2024-11-28 16:20:28'),
(27, 6, 3, 'cod', '1198', '2024-11-28 16:23:07'),
(31, 6, 5, 'cod', '5996', '2024-11-28 16:38:38'),
(32, 6, 1, 'cod', '2998', '2024-11-28 16:39:19'),
(33, 6, 1, 'cod', '2998', '2024-11-29 03:08:25'),
(34, 6, 1, 'cod', '2998', '2024-11-29 03:09:05'),
(35, 6, 1, 'cod', '7495', '2024-11-29 03:36:57'),
(36, 6, 1, 'cod', '8404', '2024-11-30 01:30:50'),
(37, 6, 1, 'cod', '16939', '2024-12-03 02:28:51'),
(38, 6, 2, 'cod', '2399', '2024-12-07 00:20:52'),
(39, 5, 5, 'cod', '539', '2024-12-07 00:47:59'),
(40, 6, 4, 'cod', '5037', '2024-12-07 01:25:01');

-- --------------------------------------------------------

--
-- Table structure for table `order_detail`
--

CREATE TABLE `order_detail` (
  `id` int NOT NULL,
  `order_id` int NOT NULL,
  `product_id` int NOT NULL,
  `price` int NOT NULL,
  `quantity` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `order_detail`
--

INSERT INTO `order_detail` (`id`, `order_id`, `product_id`, `price`, `quantity`) VALUES
(5, 27, 10, 599, 2),
(6, 31, 12, 1499, 4),
(7, 32, 12, 1499, 2),
(8, 33, 12, 1499, 2),
(9, 34, 12, 1499, 2),
(10, 35, 12, 1499, 5),
(11, 36, 8, 799, 3),
(12, 36, 1, 140, 2),
(13, 36, 3, 180, 1),
(14, 36, 6, 300, 2),
(15, 36, 12, 1499, 2),
(16, 36, 11, 450, 3),
(17, 36, 10, 599, 1),
(18, 37, 12, 1499, 11),
(19, 37, 11, 450, 1),
(20, 38, 12, 1499, 1),
(21, 38, 11, 450, 2),
(22, 39, 17, 89, 1),
(23, 39, 11, 450, 1),
(24, 40, 3, 180, 3),
(25, 40, 12, 1499, 3);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `price` decimal(10,0) NOT NULL,
  `quantity` int NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `content` text COLLATE utf8mb4_general_ci NOT NULL,
  `status` tinyint NOT NULL DEFAULT '1' COMMENT 'status:trạng thái kinh doanh. 1: đang kinh doanh ,0 là ngừng kinh doanh',
  `category_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `image`, `price`, `quantity`, `description`, `content`, `status`, `category_id`) VALUES
(1, 'Bộ mặc nhà nữ', 'images/ao7.webp', '140', 1, 'Bộ mặc nhà nữ quần suông, áo cổ cách điệu với các điểm nhấn cuốn bèo gấu tạo sự mềm mại nữ tính. Bề mặt vải dệt mix các sợi màu tạo nên 1 bộ sản phẩm đẹp và mới lạ.', 'Bộ mặc nhà nữ quần suông, áo cổ cách điệu với các điểm nhấn cuốn bèo gấu tạo sự mềm mại nữ tính. Bề mặt vải dệt mix các sợi màu tạo nên 1 bộ sản phẩm đẹp và mới lạ.', 1, 2),
(3, 'Áo khoác lông vũ nữ', 'images/ao9.webp', '180', 1, 'Áo khoác lông vũ kéo khóa, có mũ siêu nhẹ, giữ ấm rất tốt. Phom dáng vừa vặn, gọn gàng, phù hợp nhiều lứa tuổi, nhiều phong cách.', 'Áo khoác lông vũ kéo khóa, có mũ siêu nhẹ, giữ ấm rất tốt. Phom dáng vừa vặn, gọn gàng, phù hợp nhiều lứa tuổi, nhiều phong cách.', 1, 2),
(4, 'Áo khoác nỉ ', 'images/aonam.webp', '450', 1, 'Áo khoác nỉ nam cổ cao, kéo khóa phía trước, được làm từ chất liệu nỉ cào bông. Chất liệu có khả năng giữ nhiệt, giữ ấm tốt.', ' Áo khoác nam nỉ là loại áo cơ bản được phái mạnh yêu thích khi mùa đông tới không chỉ bởi khả năng giữ ấm mà còn bởi tính thời trang và tiện dụng của nó.\r\nSự kết hợp của 2 thành phần sợi cotton và polyester giúp sản phẩm giữ phom, dáng tốt nhưng vẫn đảm bảo độ xốp và thoáng khí. Màu sắc bền đẹp và độ bền của sản phẩm cao.', 1, 1),
(5, 'Áo nỉ có mũ nam', 'images/ao1.webp', '150', 0, 'Áo nỉ nam có mũ, kéo khóa phía trước, được làm từ chất liệu nỉ cào bông. Chất liệu có khả năng giữ nhiệt, giữ ấm tốt.', ' Áo khoác nam nỉ là loại áo cơ bản được phái mạnh yêu thích khi mùa đông tới không chỉ bởi khả năng giữ ấm mà còn bởi tính thời trang và tiện dụng của nó.\r\nSự kết hợp của 2 thành phần sợi cotton và polyester giúp sản phẩm giữ phom, dáng tốt nhưng vẫn đảm bảo độ xốp và thoáng khí. Màu sắc bền đẹp và độ bền của sản phẩm cao.', 0, 1),
(6, 'áo sweater', 'images/ao2.webp', '300', 1, 'Áo được thiết kế vừa vặn, thoải mái, tiện lợi trong mọi hoạt động. Áo phù hợp để mặc thường ngày, dễ dàng phối layer tạo nhiếu set thời trang đa phong cách (lịch sự, ấn tượng, trẻ trung....)', 'Áo được thiết kế vừa vặn, thoải mái, tiện lợi trong mọi hoạt động. Áo phù hợp để mặc thường ngày, dễ dàng phối layer tạo nhiếu set thời trang đa phong cách (lịch sự, ấn tượng, trẻ trung....)', 1, 1),
(7, 'Quần nỉ nam', 'images/quan1.webp', '500', 1, 'Quần nỉ jogger với phần bo ống ở gấu quần, kiểu dáng khỏe khoắn và nam tính. Độ dày vừa phải đảm bảo sự thoải mái và tiện lợi trong mọi hoạt động.', 'Quần nỉ jogger với phần bo ống ở gấu quần, kiểu dáng khỏe khoắn và nam tính. Độ dày vừa phải đảm bảo sự thoải mái và tiện lợi trong mọi hoạt động.', 0, 1),
(8, 'Quần nỉ nam bo gấu', 'images/quan2.webp', '799', 1, 'Quần nỉ jogger với phần bo ống ở gấu quần, kiểu dáng khỏe khoắn và nam tính. Độ dày vừa phải đảm bảo sự thoải mái và tiện lợi trong mọi hoạt động.', 'Quần nỉ jogger với phần bo ống ở gấu quần, kiểu dáng khỏe khoắn và nam tính. Độ dày vừa phải đảm bảo sự thoải mái và tiện lợi trong mọi hoạt động.', 1, 1),
(9, 'Bộ pyjama nữ', 'images/ao3.webp', '599', 1, 'Bộ pijama nữ với chất liệu cotton spandex co dãn thoải mái khi mặc, đồ họa đa dạng tạo nhiều lựa chọn cho khách hàng.', 'Bộ pijama nữ với chất liệu cotton spandex co dãn thoải mái khi mặc, đồ họa đa dạng tạo nhiều lựa chọn cho khách hàng.', 1, 2),
(10, 'Áo nỉ nam in hình Avenger', 'images/ao4.webp', '599', 1, 'Áo nỉ nam phom regular được thiết kế vừa vặn, thoải mái, tiện lợi trong mọi hoạt động. ', 'Áo phù hợp để mặc thường ngày, dễ dàng phối layer tạo nhiếu set thời trang đa phong cách (lịch sự, ấn tượng, trẻ trung....)\r\nÁo in hình Avenge là sản phẩm của sự hợp tác giữa Canifa và Marvel - đơn vị sở hữu bản quyền Avenger. Hình in bền, đẹp, không nứt trong quá trình sử dụng.', 1, 1),
(11, 'Bộ quần áo active nam', 'images/ao5.webp', '450', 1, 'Bộ quần áo cộc tay dáng regular, thiết kế đơn giản, phù hợp với nhiều hoạt động thể thao ngoài trời và trong nhà.', 'Bộ quần áo cộc tay dáng regular, thiết kế đơn giản, phù hợp với nhiều hoạt động thể thao ngoài trời và trong nhà.', 1, 1),
(12, 'Bộ quần áo active nam (thu đông)', 'images/ao6.webp', '1499', 1, 'Bộ quần áo active nam', 'Bộ quần áo active nam', 1, 1),
(13, 'Áo khoác lông vũ nữ', 'images/ao8.webp', '80', 1, 'Mô tả\r\nÁo khoác lông vũ kéo khóa, có mũ siêu nhẹ, giữ ấm rất tốt. Phom dáng vừa vặn, gọn gàng, phù hợp nhiều lứa tuổi, nhiều phong cách.', 'Mô tả\r\nÁo khoác lông vũ kéo khóa, có mũ siêu nhẹ, giữ ấm rất tốt. Phom dáng vừa vặn, gọn gàng, phù hợp nhiều lứa tuổi, nhiều phong cách.', 1, 2),
(14, 'Áo khoác gió nữ dáng bomber chống thấm', 'images/ao10.webp', '68', 1, 'Áo khoác gió nữ dáng bomber với chi tiết lé phối đường viền khác màu và các chi tiết chạy chun ở gấu áo và cửa tay, tạo nên một sản phẩm phong cách sport nhưng vẫn rất dễ ứng dụng.', 'Áo khoác gió nữ dáng bomber với chi tiết lé phối đường viền khác màu và các chi tiết chạy chun ở gấu áo và cửa tay, tạo nên một sản phẩm phong cách sport nhưng vẫn rất dễ ứng dụng.', 1, 2),
(15, 'Áo khoác dạ nữ hai lớp cổ tròn dáng suông', 'images/ao11.webp', '69', 12, 'Áo dạ hai lớp dài tay, cổ tròn, cài cúc, dáng suông. Chất liệu dạ mịn mang lại cảm giác mềm mại, ấm áp, đứng dáng. Phù hợp với môi trường công sở, dạo phố.', 'Áo dạ hai lớp dài tay, cổ tròn, cài cúc, dáng suông. Chất liệu dạ mịn mang lại cảm giác mềm mại, ấm áp, đứng dáng. Phù hợp với môi trường công sở, dạo phố.', 1, 2),
(16, 'Áo cardigan nữ', 'images/ao12.webp', '45', 1, 'Áo cardigan nữ', 'Áo cardigan nữ', 1, 2),
(17, 'Áo khoác lông nữ', 'images/ao13.webp', '89', 1, 'Áo khoác lông nữ dáng relax, với chất liệu lông cao cấp mềm mịn tạo nên một outfit sang trọng và không thể thiếu trong các dịp lễ tết.', 'Áo khoác lông nữ dáng relax, với chất liệu lông cao cấp mềm mịn tạo nên một outfit sang trọng và không thể thiếu trong các dịp lễ tết.', 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `fullname` varchar(60) COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(199) COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(199) COLLATE utf8mb4_general_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `role` enum('admin','user') CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT 'user',
  `active` tinyint(1) NOT NULL DEFAULT '1',
  `address` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `update_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fullname`, `email`, `password`, `phone`, `role`, `active`, `address`, `created_at`, `update_at`) VALUES
(5, 'hoàng u', 'admin@gmail.com', '$2y$10$wX/0T2e3Tsk6bWZ42wzg1OSHKx2A.mQSJ0Zy/cYrrK2/XTLaSuIGC', '4257189173', 'admin', 1, 'vĩnh phúc 88', '2024-11-26 08:44:29', '2024-11-26 08:44:29'),
(6, 'Hoàng Văn doanh', 'doanhhv117@gmail.com', '$2y$10$UduO7AChORNwQVEDXKZTMONy6r231OZGAdrWtqnZUtccpyU3woc2W', '5654323451', 'user', 1, 'hải  phòng 2                            ', '2024-11-26 09:13:22', '2024-11-26 09:13:22');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_comments_user` (`user_id`),
  ADD KEY `fk_comment_product` (`product_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_orders_users` (`user_id`);

--
-- Indexes for table `order_detail`
--
ALTER TABLE `order_detail`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_detail_orders` (`order_id`),
  ADD KEY `fk_detail_product` (`product_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_product_category` (`category_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `order_detail`
--
ALTER TABLE `order_detail`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `fk_comment_product` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `fk_comments_user` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `fk_orders_users` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `order_detail`
--
ALTER TABLE `order_detail`
  ADD CONSTRAINT `fk_detail_orders` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `fk_detail_product` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `fk_product_category` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
