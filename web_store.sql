-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th9 07, 2023 lúc 10:41 AM
-- Phiên bản máy phục vụ: 10.4.28-MariaDB
-- Phiên bản PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `web_store`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admin`
--

CREATE TABLE `admin` (
  `name` varchar(11) NOT NULL,
  `pass` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `admin`
--

INSERT INTO `admin` (`name`, `pass`) VALUES
('quyen', '123456');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `lichsumuahang`
--

CREATE TABLE `lichsumuahang` (
  `soluong` varchar(255) NOT NULL,
  `tongtien` mediumtext NOT NULL,
  `idls` int(255) NOT NULL,
  `tenkh` varchar(255) NOT NULL,
  `diachi` varchar(255) NOT NULL,
  `phone` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `lichsumuahang`
--

INSERT INTO `lichsumuahang` (`soluong`, `tongtien`, `idls`, `tenkh`, `diachi`, `phone`) VALUES
('2', '4000', 1, 'Quyen', 'Huế', 862203342),
('2 ', '4000', 6, 'Sang', 'Huế', 862203342),
('2 ', '4000', 7, 'Sang', 'Huế', 862203342),
('2 ', '4000', 8, 'Sang', 'Huế', 862203342);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

CREATE TABLE `sanpham` (
  `idsp` int(255) NOT NULL,
  `tensp` varchar(255) NOT NULL,
  `gia` varchar(2000) NOT NULL,
  `anh` varchar(255) NOT NULL,
  `loaisp` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`idsp`, `tensp`, `gia`, `anh`, `loaisp`) VALUES
(1, 'Áo đen', '2000', 'anh1.jpg', 'ao'),
(2, 'Áo Trắng ', '2000', 'anh2.jpg', 'ao'),
(3, 'Áo sơ mi Xanh', '3000', 'aosomixanh.jpg', 'ao'),
(4, 'Áo thun đen', '400', 'aothunden.jpg', 'ao'),
(5, 'Áo khoác đen', '3000', 'khoacden.jpg', 'ao'),
(6, 'Áo thun xanh đen', '4000', 'aothunxanhden.jpg', 'ao'),
(7, 'Áo sơ mi sọc', '2000', 'somisoc.jpg', 'ao'),
(8, 'Áo Blazer', '6000', 'blaze.jpg', 'ao'),
(9, 'Quần Jean xám', '2000', 'jeanxam.jpg', 'quan'),
(10, 'Quần Jean Xanh', '3000', 'jeanxanh.jpg', 'quan'),
(11, 'Quần kaki vàng', '1500', 'quanbe.png', 'quan'),
(12, 'Quần kaki đen', '2000', 'quanduiden.jpg', 'quan'),
(13, 'Tất đen', '50', 'tatden.jpg', 'phukien'),
(14, 'Tất trắng', '50', 'tatrang.jpg', 'phukien'),
(15, 'Túi thời trang', '300', 'tui.jpg', 'phukien'),
(16, 'Thắt lưng cài', '500', 'nit1.jpg', 'phukien'),
(17, 'Thắt lưng rút', '500', 'nit2.jpg', 'phukien'),
(18, 'Mũ sọc đen', '100', 'mu1.jpg', 'phukien'),
(19, 'Mũ sọc trắng', '200', 'mu2.jpg', 'phukien'),
(20, 'Ví da', '250', 'vi.jpg', 'phukien'),
(21, 'Sơ mi nam', '2000', 'somi.jpg', 'ao'),
(23, 'Áo Polo', '3000', 'mode.png', 'ao');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanphamquan`
--

CREATE TABLE `sanphamquan` (
  `idsp` int(255) NOT NULL,
  `tensp` varchar(255) NOT NULL,
  `gia` int(255) NOT NULL,
  `anh` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `sanphamquan`
--

INSERT INTO `sanphamquan` (`idsp`, `tensp`, `gia`, `anh`) VALUES
(1, 'Quần Jean xám', 2000, 'jeanxam.jpg'),
(2, 'Quần Jean Xanh', 3000, 'jeanxanh.jpg'),
(3, 'Quần kaki vàng', 1500, 'quanbe.jpg'),
(4, 'Quần kaki đen', 2000, 'quanduiden.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `idkh` int(255) NOT NULL,
  `name` varchar(11) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`idkh`, `name`, `pass`, `phone`) VALUES
(1, 'Quyen', '123456', '0862203342'),
(2, 'Sang', '123456', '877047598'),
(6, 'Binh', '123456', '01223441313');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `lichsumuahang`
--
ALTER TABLE `lichsumuahang`
  ADD PRIMARY KEY (`idls`);

--
-- Chỉ mục cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`idsp`);

--
-- Chỉ mục cho bảng `sanphamquan`
--
ALTER TABLE `sanphamquan`
  ADD PRIMARY KEY (`idsp`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`idkh`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `lichsumuahang`
--
ALTER TABLE `lichsumuahang`
  MODIFY `idls` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `idsp` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT cho bảng `sanphamquan`
--
ALTER TABLE `sanphamquan`
  MODIFY `idsp` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `idkh` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
