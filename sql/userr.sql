-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 09, 2019 lúc 05:51 PM
-- Phiên bản máy phục vụ: 10.4.6-MariaDB
-- Phiên bản PHP: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `userr`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `baiviet`
--

CREATE TABLE `baiviet` (
  `ma_bviet` int(10) UNSIGNED NOT NULL,
  `tieude` longtext DEFAULT NULL,
  `noidung` longtext DEFAULT NULL,
  `anh` longblob DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `baiviet`
--

INSERT INTO `baiviet` (`ma_bviet`, `tieude`, `noidung`, `anh`) VALUES
(4, '', 'n?i dung ??u tiên', 0xc491617361),
(5, '', 'dsadsad', 0xc491617361),
(6, '', 'test anh', 0x736c69646530322e6a7067);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bai_viet`
--

CREATE TABLE `bai_viet` (
  `mabv` int(11) NOT NULL,
  `tieude` varchar(1000) DEFAULT NULL,
  `noidung` mediumtext DEFAULT NULL,
  `anh` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `bai_viet`
--

INSERT INTO `bai_viet` (`mabv`, `tieude`, `noidung`, `anh`) VALUES
(1, '', '?ây là bài vi?t ??u tiên ', 'slide02.jpg'),
(2, 'tieu dr', '', ''),
(3, 'tieu de 3\r\n', 'day la noi dung bai viet thu 3', 'img4.jpg'),
(4, 'Day la bai viet thu 4', 'Day la noi dung bai viet thu 4', 'img3.jpg'),
(5, 'T?ng b?ng ngày h?i ??nh h??ng cho tân sinh viên Vi?n ?ào t?o qu?c t? NIIE khóa 2019', 'NTTU - N?m trong khuôn kh? các s? ki?n chào ?ón sinh viên khóa m?i, trong hai ngày 07 và 08/10 v?a qua Vi?n ?ào t?o qu?c t? Tr??ng ?H Nguy?n T?t Thành (NIIE) ?ã t? ch?c ngày h?i ??nh h??ng cho tân sinh viên v?i nhi?u ho?t ??ng h?p d?n và thi?t th?c  Phát bu?i t?i bu?i l?, ??i di?n Ban giám hi?u nhà tr??ng, TS. Nguy?n Tu?n Anh – Vi?n tr??ng vi?n NIIE ?ã g?i l?i chúc m?ng ??n các b?n tân sinh viên, nh?ng thành viên m?i c?a ??i gia ?ình ?H Nguy?n T?t Thành nói chung và Vi?n ?ào t?o Qu?c t? NIIE nói riêng. ??ng th?i chia s? v? nh?ng ?i?u ki?n h?c t?p c?ng nh? nh?ng thách th?c mà các b?n có th? g?p ph?i trên su?t ch?ng ???ng s?p t?i', 'img4.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `Ho` varchar(50) NOT NULL,
  `Ten` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Pass` varchar(50) NOT NULL,
  `Admin` int(2) NOT NULL,
  `Code` int(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`Ho`, `Ten`, `Email`, `Pass`, `Admin`, `Code`) VALUES
('nguyen', 'hanh', 'hanh@gmail.com', 'hanhhanh', 1, NULL),
('nguyen', 'dat', 'dat@gmail.com', 'datdat', 1, NULL),
('nguyen', 'ha', 'ha@gmail.com', 'haha', 0, NULL),
('nguyen', 'tienanh', 'tienanh@gmail.com', 'tientien', 0, NULL),
('bui', 'trang', 'trang@gmail.com', 'trangtrang', 0, NULL),
('duong', 'thuytien', 'thuytien@gmail.com', 'tientien', 0, NULL),
('duong', 'quyen', 'quyen@gmail.com', 'quyenquyen', 0, NULL),
('nguyen', 'hoa', 'hoa@gmail.com', '123123', 0, NULL),
('nguyen', 'son', 'son@gmail.com', 'sonson', 0, NULL),
('nghiem', 'thuy', 'thuy@gmail.com', 'thuythuy', 0, NULL),
('nguyen', 'quangtu', 'tu081099@gmail.com', 'Iloveyou123', 0, NULL),
('dang', 'linh trang', 'trang@gmail.com', '19081999', 1, NULL),
('trau', 'hieu', 'hieu@gmail.com', 'hieuhieu', 1, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `username` varchar(50) DEFAULT NULL,
  `pword` varchar(1000) DEFAULT NULL,
  `name` varchar(100) DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`username`, `pword`, `name`, `age`, `email`) VALUES
('user1', '123', 'dat', 20, 'null'),
('user2', '123', 'hanh', 20, 'null'),
('user3', '123', 'ha', 20, 'null'),
('user4', '123', 'trang', 20, 'null');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `baiviet`
--
ALTER TABLE `baiviet`
  ADD PRIMARY KEY (`ma_bviet`);

--
-- Chỉ mục cho bảng `bai_viet`
--
ALTER TABLE `bai_viet`
  ADD PRIMARY KEY (`mabv`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `baiviet`
--
ALTER TABLE `baiviet`
  MODIFY `ma_bviet` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `bai_viet`
--
ALTER TABLE `bai_viet`
  MODIFY `mabv` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
