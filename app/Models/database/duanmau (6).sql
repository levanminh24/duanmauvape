-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: localhost:3306
-- Thời gian đã tạo: Th5 30, 2024 lúc 07:49 AM
-- Phiên bản máy phục vụ: 8.0.30
-- Phiên bản PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `duanmau`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bill`
--

CREATE TABLE `bill` (
  `id` int NOT NULL,
  `iduser` int DEFAULT '0',
  `bill_name` varchar(255) NOT NULL,
  `bill_address` varchar(255) NOT NULL,
  `bill_tel` varchar(50) NOT NULL,
  `bill_email` varchar(255) NOT NULL,
  `bill_pttt` tinyint NOT NULL DEFAULT '1' COMMENT '1.Thanh toán trực tiếp\r\n2. Chuyển khoản\r\n3. Thanh toán online',
  `ngaydathang` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `total` int NOT NULL DEFAULT '0',
  `bill_status` tinyint(1) NOT NULL DEFAULT '0' COMMENT '0. chờ xác nhận\r\n1. đang lấy hàng\r\n2. đang giao hàng\r\n3. giao hàng thành công\r\n4. huỷ'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Đang đổ dữ liệu cho bảng `bill`
--

INSERT INTO `bill` (`id`, `iduser`, `bill_name`, `bill_address`, `bill_tel`, `bill_email`, `bill_pttt`, `ngaydathang`, `total`, `bill_status`) VALUES
(126, 12, 'Nguyễn Văn Hưng', 'hà nội', '009098775', 'Hung@gamil.com', 1, '2024-05-30 04:53:45', 1999, 3),
(127, 14, 'hoanglan', 'hà nội', '09876574', 'hoanglan@gmail.com', 1, '2024-05-30 04:56:41', 1999, 3),
(133, 13, 'minh123', 'Đông Xuân', '0336345032', 'minh123@gmail.com', 1, '2024-05-30 06:44:32', 2018, 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `binhluan`
--

CREATE TABLE `binhluan` (
  `id` int NOT NULL,
  `noidung` varchar(255) NOT NULL,
  `iduser` int NOT NULL,
  `idpro` int NOT NULL,
  `ngaybinhluan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Đang đổ dữ liệu cho bảng `binhluan`
--

INSERT INTO `binhluan` (`id`, `noidung`, `iduser`, `idpro`, `ngaybinhluan`) VALUES
(1, 'hghcsxcdsvrhyh', 13, 12, '2024-05-15'),
(2, 'hghcsxcdsvrhyh', 13, 12, '2024-05-15'),
(14, 'ngon bổ rẻ', 10, 7, '2024-05-16'),
(15, 'ngon bổ rẻ', 13, 11, '2024-05-17'),
(16, 'cc', 11, 13, '2024-05-23');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cart`
--

CREATE TABLE `cart` (
  `id` int NOT NULL,
  `iduser` int NOT NULL,
  `idpro` int NOT NULL,
  `img` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `price` int NOT NULL,
  `soluong` int NOT NULL,
  `ngaydathang` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `thanhtien` int NOT NULL,
  `idbill` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Đang đổ dữ liệu cho bảng `cart`
--

INSERT INTO `cart` (`id`, `iduser`, `idpro`, `img`, `name`, `price`, `soluong`, `ngaydathang`, `thanhtien`, `idbill`) VALUES
(124, 14, 8, 'Aspire Gotek X5.webp', 'ASPIRE ASPIRE GOTEK X POD KIT_P3', 90, 2, NULL, 180, 105),
(126, 14, 7, 'Aspire Gotek X7.jpg', 'ASPIRE ASPIRE GOTEK X POD KIT_P4', 1999, 1, NULL, 1999, 105),
(127, 14, 8, 'Aspire Gotek X5.webp', 'ASPIRE ASPIRE GOTEK X POD KIT_P3', 90, 2, NULL, 180, 106),
(128, 14, 5, 'Aegis Boost Pro2.jpg', 'GEEKVAPE AEGIS BOOST PRO 2 KIT_p2', 1999, 1, NULL, 1999, 106),
(129, 14, 7, 'Aspire Gotek X7.jpg', 'ASPIRE ASPIRE GOTEK X POD KIT_P4', 1999, 1, NULL, 1999, 106),
(130, 14, 8, 'Aspire Gotek X5.webp', 'ASPIRE ASPIRE GOTEK X POD KIT_P3', 90, 2, NULL, 180, 107),
(131, 14, 5, 'Aegis Boost Pro2.jpg', 'GEEKVAPE AEGIS BOOST PRO 2 KIT_p2', 1999, 1, NULL, 1999, 107),
(132, 14, 7, 'Aspire Gotek X7.jpg', 'ASPIRE ASPIRE GOTEK X POD KIT_P4', 1999, 1, NULL, 1999, 107),
(133, 14, 8, 'Aspire Gotek X5.webp', 'ASPIRE ASPIRE GOTEK X POD KIT_P3', 90, 2, NULL, 180, 108),
(134, 14, 5, 'Aegis Boost Pro2.jpg', 'GEEKVAPE AEGIS BOOST PRO 2 KIT_p2', 1999, 1, NULL, 1999, 108),
(135, 14, 7, 'Aspire Gotek X7.jpg', 'ASPIRE ASPIRE GOTEK X POD KIT_P4', 1999, 1, NULL, 1999, 108),
(136, 14, 8, 'Aspire Gotek X5.webp', 'ASPIRE ASPIRE GOTEK X POD KIT_P3', 90, 2, NULL, 180, 109),
(137, 14, 5, 'Aegis Boost Pro2.jpg', 'GEEKVAPE AEGIS BOOST PRO 2 KIT_p2', 1999, 1, NULL, 1999, 109),
(138, 14, 7, 'Aspire Gotek X7.jpg', 'ASPIRE ASPIRE GOTEK X POD KIT_P4', 1999, 1, NULL, 1999, 109),
(139, 11, 6, 'Aegis Boost Pro1.pg.webp', 'GEEKVAPE AEGIS BOOST PRO 2 KIT_p1', 1999, 1, NULL, 1999, 110),
(140, 11, 9, 'Aspire Gotek X3.jpg', 'ASPIRE ASPIRE GOTEK X POD KIT_P2', 1999, 1, NULL, 1999, 110),
(141, 11, 13, 'vape1.jpg', 'VAPORESSO XROS 3 VAPE KIT_A1', 90, 1, NULL, 90, 111),
(142, 11, 10, 'Aspire Gotek X6.jpg', 'ASPIRE ASPIRE GOTEK X POD KIT P1', 1999, 1, NULL, 1999, 112),
(143, 10, 12, 'vape3.jpg', 'VAPORESSO XROS 3 VAPE KIT_a3', 18, 1, NULL, 18, 113),
(144, 10, 11, 'vape2.jpg', 'VAPORESSO XROS 3 VAPE KIT_A2', 90, 2, NULL, 180, 113),
(145, 10, 13, 'vape1.jpg', 'VAPORESSO XROS 3 VAPE KIT_A1', 90, 1, NULL, 90, 114),
(146, 10, 9, 'Aspire Gotek X3.jpg', 'ASPIRE ASPIRE GOTEK X POD KIT_P2', 1999, 1, NULL, 1999, 115),
(147, 11, 13, 'vape1.jpg', 'VAPORESSO XROS 3 VAPE KIT_A1', 90, 1, NULL, 90, 116),
(148, 11, 9, 'Aspire Gotek X3.jpg', 'ASPIRE ASPIRE GOTEK X POD KIT_P2', 1999, 1, NULL, 1999, 116),
(149, 11, 12, 'vape3.jpg', 'VAPORESSO XROS 3 VAPE KIT_a3', 18, 1, NULL, 18, 117),
(150, 11, 6, 'Aegis Boost Pro1.pg.webp', 'GEEKVAPE AEGIS BOOST PRO 2 KIT_p1', 1999, 1, NULL, 1999, 118),
(151, 11, 9, 'Aspire Gotek X3.jpg', 'ASPIRE ASPIRE GOTEK X POD KIT_P2', 1999, 1, NULL, 1999, 119),
(152, 11, 6, 'Aegis Boost Pro1.pg.webp', 'GEEKVAPE AEGIS BOOST PRO 2 KIT_p1', 1999, 1, NULL, 1999, 120),
(153, 11, 10, 'Aspire Gotek X6.jpg', 'ASPIRE ASPIRE GOTEK X POD KIT P1', 1999, 1, NULL, 1999, 121),
(154, 11, 12, 'vape3.jpg', 'VAPORESSO XROS 3 VAPE KIT_a3', 18, 1, NULL, 18, 122),
(155, 11, 7, 'Aspire Gotek X7.jpg', 'ASPIRE ASPIRE GOTEK X POD KIT_P4', 1999, 1, NULL, 1999, 123),
(160, 12, 9, 'Aspire Gotek X3.jpg', 'ASPIRE ASPIRE GOTEK X POD KIT_P2', 1999, 1, NULL, 1999, 126),
(161, 14, 7, 'Aspire Gotek X7.jpg', 'ASPIRE ASPIRE GOTEK X POD KIT_P4', 1999, 1, NULL, 1999, 127),
(162, 14, 5, 'Aegis Boost Pro2.jpg', 'GEEKVAPE AEGIS BOOST PRO 2 KIT_p2', 1999, 1, NULL, 1999, 128),
(163, 14, 4, 'Aegis Boost Pro3.jpg', 'GEEKVAPE AEGIS BOOST PRO 2 KIT_p3', 1999, 4, NULL, 7997, 130),
(164, 13, 9, 'Aspire Gotek X3.jpg', 'ASPIRE ASPIRE GOTEK X POD KIT_P2', 1999, 1, NULL, 1999, 131),
(165, 13, 5, 'Aegis Boost Pro2.jpg', 'GEEKVAPE AEGIS BOOST PRO 2 KIT_p2', 1999, 1, NULL, 1999, 131),
(166, 13, 9, 'Aspire Gotek X3.jpg', 'ASPIRE ASPIRE GOTEK X POD KIT_P2', 1999, 3, NULL, 5998, 132),
(167, 13, 12, 'vape3.jpg', 'VAPORESSO XROS 3 VAPE KIT_a3', 18, 1, NULL, 18, 133),
(168, 13, 9, 'Aspire Gotek X3.jpg', 'ASPIRE ASPIRE GOTEK X POD KIT_P2', 1999, 1, NULL, 1999, 133);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danhmuc`
--

CREATE TABLE `danhmuc` (
  `id` int NOT NULL,
  `name` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Đang đổ dữ liệu cho bảng `danhmuc`
--

INSERT INTO `danhmuc` (`id`, `name`, `img`) VALUES
(22, 'Vape', 'vapedm.jpg'),
(23, 'Aegis Boost Pro', 'top-pod-tot-nhat.jpg'),
(25, 'Aspire Gotek X', 'review-pod.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

CREATE TABLE `sanpham` (
  `id` int NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` double(10,2) NOT NULL,
  `img` varchar(255) NOT NULL,
  `mota` varchar(255) NOT NULL,
  `luotxem` int DEFAULT '0',
  `iddm` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`id`, `name`, `price`, `img`, `mota`, `luotxem`, `iddm`) VALUES
(3, 'GEEKVAPE AEGIS BOOST PRO 2 KIT_P4', 1999.35, 'Aegis Boost Pro5.jpg', 'Sản phẩm phù hợp với hiện đại.', 20, 23),
(4, 'GEEKVAPE AEGIS BOOST PRO 2 KIT_p3', 1999.35, 'Aegis Boost Pro3.jpg', 'Sản phẩm phù hợp với hiện đại.', 3, 23),
(5, 'GEEKVAPE AEGIS BOOST PRO 2 KIT_p2', 1999.35, 'Aegis Boost Pro2.jpg', 'Sản phẩm phù hợp với hiện đại.', 6, 23),
(6, 'GEEKVAPE AEGIS BOOST PRO 2 KIT_p1', 1999.35, 'Aegis Boost Pro1.pg.webp', 'Sản phẩm phù hợp với hiện đại.', 50, 23),
(7, 'ASPIRE ASPIRE GOTEK X POD KIT_P4', 1999.35, 'Aspire Gotek X7.jpg', 'Sản phẩm phù hợp với hiện đại.', 22, 25),
(8, 'ASPIRE ASPIRE GOTEK X POD KIT_P3', 89.88, 'Aspire Gotek X5.webp', 'Sản phẩm phù hợp với hiện đại.', 18, 25),
(9, 'ASPIRE ASPIRE GOTEK X POD KIT_P2', 1999.35, 'Aspire Gotek X3.jpg', 'r', 32, 25),
(10, 'ASPIRE ASPIRE GOTEK X POD KIT P1', 1999.35, 'Aspire Gotek X6.jpg', 'Bộ dụng cụ Aspire Gotek X Pod Bộ dụng cụ Aspire Gotek X Vape xuất hiện dưới dạng thiết kế hộp diêm.', 11, 25),
(11, 'VAPORESSO XROS 3 VAPE KIT_A2', 89.88, 'vape2.jpg', 'Vaporesso đã tạo ra bộ vape Xros 3 thú vị của họ, cung cấp kiểu vaping RDTL hoặc MTL và sử dụng các vỏ Xros 2ML thay thế', 26, 22),
(12, 'VAPORESSO XROS 3 VAPE KIT_a3', 18.33, 'vape3.jpg', 'Vaporesso đã tạo ra bộ vape Xros 3 thú vị của họ, cung cấp kiểu vaping RDTL hoặc MTL và sử dụng các vỏ Xros 2ML thay thế.', 27, 22),
(13, 'VAPORESSO XROS 3 VAPE KIT_A1', 89.89, 'vape1.jpg', 'Vaporesso đã tạo ra bộ vape Xros 3 thú vị của họ, cung cấp kiểu vaping RDTL hoặc MTL và sử dụng các vỏ Xros 2ML thay thế.', 33, 22);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `taikhoan`
--

CREATE TABLE `taikhoan` (
  `id` int NOT NULL,
  `user` varchar(255) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) DEFAULT NULL,
  `tel` varchar(50) DEFAULT NULL,
  `role` tinyint NOT NULL DEFAULT '0' COMMENT '0. Người dùng\r\n1. admin'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Đang đổ dữ liệu cho bảng `taikhoan`
--

INSERT INTO `taikhoan` (`id`, `user`, `pass`, `email`, `address`, `tel`, `role`) VALUES
(1, 'le van minh', '123', 'minh@gmail.com', 'ha noi', '0336345048', 1),
(2, 'nguyen van b', '123', 'b123@gmail.com', 'ha noi', '124097', 1),
(10, 'admin', '33', 'le9675418@gmail.com', 'dongcham', '0123455', 1),
(11, 'Nguyễn Thị lên', 'minh2004', 'leen1234@gmail.com', 'Xuân Mai', '09876574', 0),
(12, 'Nguyễn Văn Hưng', 'hung123', 'Hung@gamil.com', 'hà nội', '009098775', 0),
(13, 'minh123', '2004', 'minh123@gmail.com', 'Đông Xuân', '0336345032', 0),
(14, 'hoanglan', 'hoanglan123', 'hoanglan@gmail.com', 'hà nội', '09876574', 0),
(15, 'Quốc Bảo', '123', 'Quocbao123@gmail.com', 'Đông Xuân Quốc Oai Hà Nội', '0986528796', 0);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `bill`
--
ALTER TABLE `bill`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`),
  ADD KEY `taikhoan` (`iduser`),
  ADD KEY `sanpham` (`idpro`),
  ADD KEY `lk_tb` (`idbill`);

--
-- Chỉ mục cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_fls` (`iddm`);

--
-- Chỉ mục cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `bill`
--
ALTER TABLE `bill`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=134;

--
-- AUTO_INCREMENT cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT cho bảng `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=169;

--
-- AUTO_INCREMENT cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `fk_fls` FOREIGN KEY (`iddm`) REFERENCES `danhmuc` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
