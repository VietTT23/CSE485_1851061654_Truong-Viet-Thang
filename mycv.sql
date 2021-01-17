-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th1 17, 2021 lúc 02:31 PM
-- Phiên bản máy phục vụ: 10.4.14-MariaDB
-- Phiên bản PHP: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `mycv`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admin_account`
--

CREATE TABLE `admin_account` (
  `id` int(11) NOT NULL,
  `username` varchar(250) COLLATE utf8_unicode_nopad_ci NOT NULL,
  `email` varchar(250) COLLATE utf8_unicode_nopad_ci NOT NULL,
  `pass` varchar(50) COLLATE utf8_unicode_nopad_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_nopad_ci;

--
-- Đang đổ dữ liệu cho bảng `admin_account`
--

INSERT INTO `admin_account` (`id`, `username`, `email`, `pass`) VALUES
(1, 'anh Thắng', 'vuivethang2311@gmail.com', '123456');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `brofile`
--

CREATE TABLE `brofile` (
  `id` int(11) NOT NULL,
  `name` varchar(250) COLLATE utf8_unicode_nopad_ci NOT NULL,
  `email` varchar(250) COLLATE utf8_unicode_nopad_ci NOT NULL,
  `phone` varchar(250) COLLATE utf8_unicode_nopad_ci NOT NULL,
  `dob` varchar(250) COLLATE utf8_unicode_nopad_ci NOT NULL,
  `nationality` varchar(250) COLLATE utf8_unicode_nopad_ci NOT NULL,
  `address` varchar(250) COLLATE utf8_unicode_nopad_ci NOT NULL,
  `objective` text COLLATE utf8_unicode_nopad_ci NOT NULL,
  `icando` text COLLATE utf8_unicode_nopad_ci NOT NULL,
  `avartar` varchar(250) COLLATE utf8_unicode_nopad_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_nopad_ci;

--
-- Đang đổ dữ liệu cho bảng `brofile`
--

INSERT INTO `brofile` (`id`, `name`, `email`, `phone`, `dob`, `nationality`, `address`, `objective`, `icando`, `avartar`) VALUES
(1, 'Truong Viet Thang', 'vuivethang2311@gmail.com', '0983604718', '23/11/2000', 'Viet Nam', 'Ha Dong, Ha Noi', 'Tìm kiếm cơ hội để làm việc và nâng cao trình độ của bản thân, tập trung sử dụng các kỹ năng cá nhân của mình để xây dựng một phần mềm, một trang web tốt . Tôi hy vọng sẽ phát triển được thêm các kỹ năng về thiết kế, kiến ​​thức về Web và lập trình.', 'Hiện tại tôi đang theo học tại trường ĐH Thủy lợi và có một chút kinh nghiệm trong thiết kế và phát triển website, cố gắng thiết kế website đẹp mắt và gọn gàng. Tôi thích tạo ra những sản phẩm tuyệt vời cho khách hàng của mình.', 'IMG_7002.JPG');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(250) COLLATE utf8_unicode_nopad_ci NOT NULL,
  `email` varchar(250) COLLATE utf8_unicode_nopad_ci NOT NULL,
  `phone` varchar(12) COLLATE utf8_unicode_nopad_ci NOT NULL,
  `message` text COLLATE utf8_unicode_nopad_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_nopad_ci;

--
-- Đang đổ dữ liệu cho bảng `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `phone`, `message`) VALUES
(12, 'Vũ Minh Hiếu', 'hieuvu2k@gmail.com', '0912345678', 'Xin chào! Chúng tôi đang cần tuyển lập trình viên, nếu bạn có hứng thú, hãy liên lạc lại với tôi qua email này. Cảm ơn!				 							');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `education_and_experience`
--

CREATE TABLE `education_and_experience` (
  `id` int(11) NOT NULL,
  `category` varchar(250) COLLATE utf8_unicode_nopad_ci NOT NULL,
  `degree` varchar(250) COLLATE utf8_unicode_nopad_ci NOT NULL,
  `name` varchar(250) COLLATE utf8_unicode_nopad_ci NOT NULL,
  `year` varchar(250) COLLATE utf8_unicode_nopad_ci NOT NULL,
  `description` text COLLATE utf8_unicode_nopad_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_nopad_ci;

--
-- Đang đổ dữ liệu cho bảng `education_and_experience`
--

INSERT INTO `education_and_experience` (`id`, `category`, `degree`, `name`, `year`, `description`) VALUES
(6, 'e', 'Tốt nghiệp THPT', 'Trường THPT Quang Trung Hà Đông, Hà Nội', '2015 - 2018', 'Tốt nghiệp loại giỏi'),
(8, 'e', 'Chuyên ngành Công nghệ thông tin', 'Đại học Thủy Lợi', '2018 - Hiện nay', 'Học lập trình và kinh doanh, kiến thức cơ bản về mạng.');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `home`
--

CREATE TABLE `home` (
  `id` int(11) NOT NULL,
  `title` varchar(250) COLLATE utf8_unicode_nopad_ci NOT NULL,
  `navname` varchar(250) COLLATE utf8_unicode_nopad_ci NOT NULL,
  `iam` varchar(250) COLLATE utf8_unicode_nopad_ci NOT NULL,
  `facebook` varchar(250) COLLATE utf8_unicode_nopad_ci NOT NULL,
  `instargram` varchar(250) COLLATE utf8_unicode_nopad_ci NOT NULL,
  `twitter` varchar(250) COLLATE utf8_unicode_nopad_ci NOT NULL,
  `github` varchar(250) COLLATE utf8_unicode_nopad_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_nopad_ci;

--
-- Đang đổ dữ liệu cho bảng `home`
--

INSERT INTO `home` (`id`, `title`, `navname`, `iam`, `facebook`, `instargram`, `twitter`, `github`) VALUES
(1, 'Xin chào! Tên tôi là', 'v.thang', 'aka Harry Coder', 'https://www.facebook.com/Vietthang21/', 'https://www.instagram.com/_chaoquay/', 'https://twitter.com/Vietthang23', 'https://github.com/VietTT23');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `interests`
--

CREATE TABLE `interests` (
  `id` int(11) NOT NULL,
  `title` varchar(250) COLLATE utf8_unicode_nopad_ci NOT NULL,
  `description` text COLLATE utf8_unicode_nopad_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_nopad_ci;

--
-- Đang đổ dữ liệu cho bảng `interests`
--

INSERT INTO `interests` (`id`, `title`, `description`) VALUES
(4, 'Code', 'Sau khi đọc xong cuốn sách \"300 bài code thiếu nhi\" và viết được dòng chữ \"Hello World!\", tôi bắt đầu có niềm đam mê với code'),
(5, 'Nghe nhạc', 'Âm nhạc giúp tôi thư giãn sau những giờ học tập và làm việc căng thẳng. Bài hát yêu thích của tôi là GUCCI GANG của LILPUMP'),
(6, 'Trò chơi điện tử', 'Tôi rất thích chơi game online, thể loại yêu thích là Moba, FPS và nhưng tựa game Sinh tồn.'),
(7, 'Xem phim', 'Tôi thích những bộ phim chủ đề thần thoại và phép thuật. Đặc biệt bộ phim yêu thích nhất của tôi là HarryPorter.'),
(8, 'Thể thao', 'Tôi cũng hay luyện tập thể thao để nâng cao sức khỏe, tôi thích chạy bộ, đá bóng và bơi lội');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `more_skills`
--

CREATE TABLE `more_skills` (
  `id` int(11) NOT NULL,
  `skill` varchar(250) COLLATE utf8_unicode_nopad_ci NOT NULL,
  `score` int(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_nopad_ci;

--
-- Đang đổ dữ liệu cho bảng `more_skills`
--

INSERT INTO `more_skills` (`id`, `skill`, `score`) VALUES
(11, 'Tự học', 90),
(12, 'Làm việc nhóm', 75),
(13, 'Giải quyết vấn đề', 70),
(14, 'Kĩ năng giao tiếp', 70),
(15, 'Ngoại ngữ', 50);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `skills`
--

CREATE TABLE `skills` (
  `id` int(11) NOT NULL,
  `skill` varchar(250) COLLATE utf8_unicode_nopad_ci NOT NULL,
  `score` int(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_nopad_ci;

--
-- Đang đổ dữ liệu cho bảng `skills`
--

INSERT INTO `skills` (`id`, `skill`, `score`) VALUES
(2, 'HTML5/CSS', 80),
(3, 'PHP/MySQL', 60),
(4, 'C++', 75),
(5, 'Boostrap', 60),
(6, 'JavaScript / jQuery', 50),
(7, 'C#', 80);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `admin_account`
--
ALTER TABLE `admin_account`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `brofile`
--
ALTER TABLE `brofile`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `education_and_experience`
--
ALTER TABLE `education_and_experience`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `home`
--
ALTER TABLE `home`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `interests`
--
ALTER TABLE `interests`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `more_skills`
--
ALTER TABLE `more_skills`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `skills`
--
ALTER TABLE `skills`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `admin_account`
--
ALTER TABLE `admin_account`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `brofile`
--
ALTER TABLE `brofile`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT cho bảng `education_and_experience`
--
ALTER TABLE `education_and_experience`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `home`
--
ALTER TABLE `home`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `interests`
--
ALTER TABLE `interests`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `more_skills`
--
ALTER TABLE `more_skills`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT cho bảng `skills`
--
ALTER TABLE `skills`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
