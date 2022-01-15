-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th1 15, 2022 lúc 08:34 AM
-- Phiên bản máy phục vụ: 10.4.22-MariaDB
-- Phiên bản PHP: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `hahalolo`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admin`
--

CREATE TABLE `admin` (
  `name` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pass` varchar(256) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_user` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status_user` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_post` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_email` varchar(60) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_admin` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `admin`
--

INSERT INTO `admin` (`name`, `pass`, `id_user`, `status_user`, `id_post`, `user_email`, `id_admin`) VALUES
('Hoang Long', '1234B', 'A2', 'Go', 'A11', 'hoanglong100601@gmail.com', 'B2'),
('Minh Tinh', '1234C', 'A3', 'Eat', 'A12', 'trinhminhtinh2907@gmail.com', 'B3'),
('Tien Nam', '1234A', 'A1', 'Food', 'A10', 'namtien.2610@gmail.com', 'B1');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `post`
--

CREATE TABLE `post` (
  `id_post` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_user` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img_post` varchar(256) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `text_post` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status_post` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `post`
--

INSERT INTO `post` (`id_post`, `id_user`, `img_post`, `text_post`, `status_post`) VALUES
('A10', 'A1', 'Du lịch', 'Lang thang đất nước', 'Đã đăng bài'),
('A11', 'A2', 'Bảng thống kê Covid-19 ', 'Dân trí', 'Đã đăng bài'),
('A12', 'A3', 'Kênh 14', 'Nội dung Spider-Man: No Way Home', 'Đã đăng bài');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id_user` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_name` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_pass` varchar(256) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_avatar` varchar(256) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_img` varchar(256) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_email` varchar(60) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_phone` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status_user` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verification_link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id_user`, `user_name`, `user_pass`, `user_avatar`, `user_img`, `user_email`, `user_phone`, `status_user`, `email_verification_link`, `email_verified_at`) VALUES
('A1', 'Tien Nam', '123456A', '12A', 'A1', 'namtien.2610@gmail.com', '0869809004', 'Food', '', NULL),
('A2', 'Hoang Long', '123456B', '12B', 'A2', 'hoanglong100601@gmail.com', '0965591294', 'Go', '', NULL),
('A3', 'Minh Tinh', '123456C', '12C', 'A3', 'trinhminhtinh2907@gmail.com', '0366100901', 'Eat', '', NULL);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`name`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_post` (`id_post`);

--
-- Chỉ mục cho bảng `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id_post`),
  ADD KEY `a1` (`id_user`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `admin`
--
ALTER TABLE `admin`
  ADD CONSTRAINT `admin_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`),
  ADD CONSTRAINT `admin_ibfk_2` FOREIGN KEY (`id_post`) REFERENCES `post` (`id_post`);

--
-- Các ràng buộc cho bảng `post`
--
ALTER TABLE `post`
  ADD CONSTRAINT `a1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
