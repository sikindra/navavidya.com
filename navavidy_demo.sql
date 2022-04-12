-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 12, 2022 at 12:55 PM
-- Server version: 5.7.37
-- PHP Version: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `navavidy_demo`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `state` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pin` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `password`, `phone`, `address`, `city`, `country`, `state`, `pin`, `image`, `status`, `created_at`, `updated_at`) VALUES
(1, 'sikindra', 'sikindra@gmail.com', '$2y$10$GykGgtZZhDIoOoCAlEfF.ef1s2KnG17qM67gasr8nfGoJdWOAKri.', '8109895993', 'madhepur', 'madhubani', 'India', 'Bihar', '847408', 'admin.png', 'A', '2022-01-22 07:40:55', '2022-03-03 03:23:47');

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `id` int(11) NOT NULL,
  `type` varchar(5) NOT NULL COMMENT 'L-logo,S1=>slider1, S2=>slider2 ,S3=>slider3',
  `img_name` varchar(100) NOT NULL,
  `status` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `banners`
--

INSERT INTO `banners` (`id`, `type`, `img_name`, `status`) VALUES
(1, 'L', 'coding45.jpg', 'I'),
(2, 'L', 'codingd45.jpg', 'I'),
(3, 'L', 'coding47.jpg', 'I'),
(4, 'L', 'coding410.jpg', 'I'),
(5, 'L', 'up44.jpg', 'I'),
(6, 'L', 'up45.jpg', 'I'),
(7, 'L', 'up45.jpg', 'I'),
(8, 'L', 'up46.jpg', 'I'),
(9, 'S1', 'Navavidya_1.png', 'I'),
(10, 'L', 'coding2.jpg', 'I'),
(11, 'S1', 'Navavidya_1.png', 'I'),
(12, 'S1', 'Navavidya_1.png', 'I'),
(13, 'S2', 'Navavidya_2.png', 'I'),
(14, 'S3', 'Navavidya_3.png', 'I'),
(15, 'L', 'logonew.png', 'I'),
(16, 'S1', 'navavidya_1.png', 'I'),
(17, 'S2', 'navavidya_2.png', 'I'),
(18, 'S3', 'navavidya_11.png', 'I'),
(19, 'L', 'logo.png', 'I'),
(20, 'S1', 'navavidya_1.png', 'I'),
(21, 'S2', 'navavidya_2.png', 'I'),
(22, 'S3', 'navavidya_11.png', 'I'),
(23, 'L', 'logonew.png', 'I'),
(24, 'S1', 'navavidya_11.png', 'I'),
(25, 'S1', 'abw2.png', 'I'),
(26, 'L', 'logo1 (1).png', 'A'),
(27, 's1', 'navavidya_12.png', 'A'),
(28, 's2', 'navavidya_21.png', 'A'),
(29, 's3', 'navavidya_13 (1).png', 'A');

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `book_id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `publisher` varchar(100) NOT NULL,
  `level` varchar(10) NOT NULL,
  `image` varchar(50) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`book_id`, `title`, `publisher`, `level`, `image`, `updated_at`, `created_at`) VALUES
(1, 'Vedic Mathematics', 'Notion Press', '5', 'phpThumb_generated_thumbnail_(1)22.jpg', '2022-02-03 06:49:07', '2022-02-03 06:49:34'),
(2, 'Abacus', 'Nava Vision', '8', 'a1.png', '2022-02-03 06:49:07', '2022-02-03 06:49:34'),
(3, 'Quick Math', '24/7 Publisher', '3', '1.jpg', '2022-02-03 06:49:07', '2022-02-03 06:49:34');

-- --------------------------------------------------------

--
-- Table structure for table `book_levels`
--

CREATE TABLE `book_levels` (
  `bk_evel_id` int(11) NOT NULL,
  `book_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `price` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `book_des` varchar(1000) NOT NULL,
  `status` int(1) NOT NULL DEFAULT '1',
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `book_levels`
--

INSERT INTO `book_levels` (`bk_evel_id`, `book_id`, `name`, `price`, `image`, `book_des`, `status`, `updated_at`, `created_at`) VALUES
(4, 1, 'Level - 4 of 5 serie', '10', 'phpThumb_generated_thumbnail_(1)23.jpg', 'https://notionpress.com/read/vedic-mathematics-for-students-1320132', 1, '2022-02-03 06:33:51', '2022-02-03 12:04:24'),
(3, 1, 'Level - 3 of 5 series', '250', 'phpThumb_generated_thumbnail_(2)10.jpg', 'https://notionpress.com/read/vedic-mathematics-for-students-1319827', 1, '2022-02-03 06:33:51', '2022-02-03 12:04:24'),
(2, 1, 'Level - 2 of 5 series', '250', 'phpThumb_generated_thumbnail_(3)5.jpg', 'https://notionpress.com/read/vedic-mathematics-for-students-1319826', 1, '2022-02-03 06:33:51', '2022-02-03 12:04:24'),
(1, 1, 'Level - 1 of 5 series', '250', 'phpThumb_generated_thumbnail_(4)1.jpg', 'https://notionpress.com/read/vedic-mathematics-for-students', 1, '2022-02-03 06:33:51', '2022-02-03 12:04:24'),
(5, 1, 'Level - 5 of 5 series', '300', 'phpThumb_generated_thumbnail1.jpg', 'https://notionpress.com/read/vedic-mathematics-for-students-1320133', 1, '2022-02-03 06:33:51', '2022-02-03 12:04:24'),
(6, 2, 'Level - 1 of 8 series', '250', 'Abacus-Level-1-of-8-series1-325x500.jpg', 'https://bluerosepublishers.com/product/abacus-leve...', 1, '2022-02-03 06:33:51', '2022-02-03 12:04:24'),
(7, 2, 'Level - 2 of 8 series', '200', 'Abacus-Level-2-of-8-series1-325x500.jpg', 'https://bluerosepublishers.com/product/abacus-level-2-of-8-series/', 1, '2022-02-03 06:33:51', '2022-02-03 12:04:24'),
(8, 2, 'Level - 3 of 8 series', '200', 'Abacus-Level-3-of-8-series1-325x500.jpg', 'https://bluerosepublishers.com/product/abacus-level-3-of-8-series/', 1, '2022-02-03 06:33:51', '2022-02-03 12:04:24'),
(9, 2, 'Level - 4 of 8 series', '250', 'a4.png', '', 0, '2022-02-03 06:33:51', '2022-02-03 12:04:24'),
(10, 2, 'Level - 5 of 8 series', '250', 'a5.png', '', 0, '2022-02-03 06:33:51', '2022-02-03 12:04:24'),
(11, 2, 'Level - 6 of 8 series', '250', 'a6.png', '', 0, '2022-02-03 06:33:51', '2022-02-03 12:04:24'),
(12, 2, 'Level - 7 of 8 series', '250', 'a7.png', '', 0, '2022-02-03 06:33:51', '2022-02-03 12:04:24'),
(13, 2, 'Level - 8 of 8 series', '250', 'a8 (1).png', 'ujh', 0, '2022-02-03 06:33:51', '2022-02-03 12:04:24'),
(14, 3, 'Level - 1 of 3 series', '225', 'Front-Cover-9.jpg', 'https://shop.24by7publishing.com/product/quick-maths-basic-level-1-of-6-series-by-nava-vision-workbook/', 1, '2022-02-03 06:33:51', '2022-02-03 12:04:24'),
(15, 3, 'Level - 2 of 3 series', '250', 'Front-Cover-10.jpg', 'https://shop.24by7publishing.com/product/quick-maths-basic-level-2-of-6-series-by-nava-vision-non-fiction/', 1, '2022-02-03 06:33:51', '2022-02-03 12:04:24'),
(16, 3, 'Level - 3 of 3 series', '280', 'Front-Cover-12-416x572.jpg', 'https://shop.24by7publishing.com/product/quick-maths-intermediate-level-3-of-6-series-by-nava-vision-workbook/', 1, '2022-02-03 06:33:51', '2022-02-03 12:04:24');

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `user_type` enum('Reg','Not_Reg') NOT NULL,
  `qty` int(11) NOT NULL,
  `book_id` int(11) NOT NULL,
  `product_book_id` int(11) NOT NULL,
  `added_on` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `names` varchar(50) NOT NULL,
  `stud_level` varchar(255) NOT NULL,
  `sub_names` text NOT NULL,
  `description` text NOT NULL,
  `image` varchar(50) NOT NULL,
  `type_id` int(11) NOT NULL,
  `status` char(1) NOT NULL,
  `subject_desc` varchar(255) NOT NULL,
  `subject_names` text NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `names`, `stud_level`, `sub_names`, `description`, `image`, `type_id`, `status`, `subject_desc`, `subject_names`, `updated_at`, `created_at`) VALUES
(1, 'Academics', '10', 'Science , Maths,English', '<p><span style=\"color: rgb(33, 37, 41); font-family: system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, &quot;Noto Sans&quot;, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;; text-align: center; background-color: rgb(250, 248, 255);\">This is&nbsp;</span><span style=\"padding: 0px; margin: 0px; font-weight: bolder; color: rgb(33, 37, 41); font-family: system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, &quot;Noto Sans&quot;, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;; text-align: center; background-color: rgb(250, 248, 255);\">after school program</span><span style=\"color: rgb(33, 37, 41); font-family: system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, &quot;Noto Sans&quot;, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;; text-align: center; background-color: rgb(250, 248, 255);\">&nbsp;which enhances the child understanding the subject/concept in depth with help of innovatively designed&nbsp;</span><font color=\"#085294\" style=\"padding: 0px; margin: 0px; font-family: system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, &quot;Noto Sans&quot;, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;; text-align: center;\">worksheets and supported by classroom video</font><span style=\"color: rgb(33, 37, 41); font-family: system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, &quot;Noto Sans&quot;, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;; text-align: center; background-color: rgb(250, 248, 255);\">.</span><br></p>', 'english.png', 1, 'A', 'Science , Maths,English', 'Science , Maths, English', '2022-03-15 02:38:47', '2022-02-01 08:28:14'),
(2, 'Non-Academics', '10', 'Vedic Mathematics,Abacus,Quick Math and 9 more', '<p><span style=\"color: rgb(33, 37, 41); font-family: system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, &quot;Noto Sans&quot;, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;; text-align: center; background-color: rgb(250, 248, 255);\">This is after school program which enhances the child understanding the subject/concept&nbsp; in depth</span><span style=\"padding: 0px; margin: 0px; color: rgb(33, 37, 41); font-family: system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, &quot;Noto Sans&quot;, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;; text-align: center;\">&nbsp;<font color=\"#085294\" style=\"padding: 0px; margin: 0px;\">with help of innovatively designed worksheets and supported by classroom video</font></span><br></p>', 'softaculous.png', 1, 'A', '<div class=\"content-section-heading text-center\" style=\"padding: 0px; margin: 0px; color: rgb(33, 37, 41); font-family: system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, &quot;Noto Sans&quot;, sans-serif, &quot;App', 'Vedic Mathematics,Abacus,Quick Math and 9 more', '2022-02-04 03:01:06', '2022-02-01 08:28:14');

-- --------------------------------------------------------

--
-- Table structure for table `chapters`
--

CREATE TABLE `chapters` (
  `chapter_id` int(11) NOT NULL,
  `level_id` int(11) NOT NULL,
  `chapter_num` int(11) NOT NULL,
  `chapter_name` varchar(200) NOT NULL,
  `sub_topic` int(11) NOT NULL,
  `pdf_file` varchar(250) DEFAULT NULL,
  `video_link` varchar(500) DEFAULT NULL,
  `demo_status` int(11) NOT NULL DEFAULT '0',
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `chapters`
--

INSERT INTO `chapters` (`chapter_id`, `level_id`, `chapter_num`, `chapter_name`, `sub_topic`, `pdf_file`, `video_link`, `demo_status`, `updated_at`, `created_at`) VALUES
(1, 3, 1, 'INTRODUCTION', 1, '', '', 0, '2022-02-07 08:58:51', '2022-02-07 08:59:16'),
(2, 3, 2, 'REPRESENTING 1 TO 30 ON ABACUS', 1, '', '', 0, '2022-02-07 08:58:51', '2022-02-07 08:59:16'),
(3, 3, 3, ' ADD AND SUBTRACT USING MAGICAL FINGERS', 1, '', '', 0, '2022-02-07 08:58:51', '2022-02-07 08:59:16'),
(4, 3, 4, 'ADDITION AND SUBTRACTION ON ABACUS', 1, '', '', 0, '2022-02-07 08:58:51', '2022-02-07 08:59:16'),
(6, 3, 6, 'REPRESENTATION', 1, '', '', 0, '2022-02-07 08:58:51', '2022-02-07 08:59:16'),
(7, 4, 1, 'ADDITION OF SINGLE DIGIT WITH 2- AND 3-DIGIT NUMBERS', 1, '', '', 0, '2022-02-07 08:58:51', '2022-02-07 08:59:16'),
(8, 4, 2, 'SUBTRACTION OF SINGLE DIGIT NUMBERS FROM 2- AND 3-DIGIT NUMBERS', 1, '', '', 0, '2022-02-07 08:58:51', '2022-02-07 08:59:16'),
(9, 4, 3, 'ADDITION ', 1, '', '', 0, '2022-02-07 08:58:51', '2022-02-07 08:59:16'),
(10, 4, 4, 'SUBTRACTION', 1, '', '', 0, '2022-02-07 08:58:51', '2022-02-07 08:59:16'),
(11, 4, 5, ' ADDITION AND SUBTRACTION', 1, '', '', 0, '2022-02-07 08:58:51', '2022-02-07 08:59:16'),
(12, 5, 1, 'ADDITION OF 3-DIGIT NUMBERS', 1, '', '', 0, '2022-02-07 08:58:51', '2022-02-07 08:59:16'),
(13, 5, 2, 'SUBTRACTION OF 3-DIGIT NUMBERS', 1, '', '', 0, '2022-02-07 08:58:51', '2022-02-07 08:59:16'),
(14, 5, 3, ' ADDITION AND SUBTRACTION OF 1,2, & 3 DIGIT NUMBERS', 1, '', '', 0, '2022-02-07 08:58:51', '2022-02-07 08:59:16'),
(15, 5, 4, 'MULTIPLICATION', 1, '', '', 0, '2022-02-07 08:58:51', '2022-02-07 08:59:16'),
(16, 6, 1, 'ADDITION OF 3-DIGIT NUMBERS', 1, '', '', 0, '2022-02-07 08:58:51', '2022-02-07 08:59:16'),
(17, 6, 2, 'ADDITION AND SUBTRACTION OF 3-DIGIT NUMBERS ', 1, '', '', 0, '2022-02-07 08:58:51', '2022-02-07 08:59:16'),
(18, 6, 3, ' MULTIPLICATION', 1, '', '', 0, '2022-02-07 08:58:51', '2022-02-07 08:59:16'),
(19, 6, 4, 'MULTIPLICATION OF ONE DIGIT WITH 3- DIGIT NUMBERS', 0, 'Abacus_syllabus_(1)30.pdf', 'https://navavision.com/video/CHAPTER%202_ONE%20TO%2010%20ON%20ABACUS.mp4', 0, '2022-02-07 08:58:51', '2022-02-07 08:59:16'),
(20, 6, 5, 'DIVISION', 1, '', '', 0, '2022-02-07 08:58:51', '2022-02-07 08:59:16'),
(21, 7, 1, 'ADDITION OF 4-DIGIT NUMBERS', 1, '', '', 0, '2022-02-07 08:58:51', '2022-02-07 08:59:16'),
(22, 7, 2, ' ADDING AND SUBTRACTING ALL COMBINATIONS ', 0, '', '', 0, '2022-02-07 08:58:51', '2022-02-07 08:59:16'),
(23, 7, 3, 'MULTIPLICATION OF SINGLE DIGIT NUMBER WITH 4- DIGIT NUMBER', 0, '', '', 0, '2022-02-07 08:58:51', '2022-02-07 08:59:16'),
(24, 7, 4, ': MULTIPLICATION OF 2 - DIGIT NUMBER WITH 2 - DIGIT NUMBER', 0, 'Abacus_syllabus_(1)33.pdf', 'https://navavision.com/video/CHAPTER%202_ONE%20TO%2010%20ON%20ABACUS.mp4', 0, '2022-02-07 08:58:51', '2022-02-07 08:59:16'),
(25, 8, 1, 'MULTIPLICATION', 1, '', '', 0, '2022-02-07 08:58:51', '2022-02-07 08:59:16'),
(26, 8, 2, 'DECIMAL ADDITIO', 0, 'Abacus_syllabus_(1)36.pdf', 'https://navavision.com/video/CHAPTER%202_ONE%20TO%2010%20ON%20ABACUS.mp4', 0, '2022-02-07 08:58:51', '2022-02-07 08:59:16'),
(27, 8, 3, 'DECIMAL SUBTRACTION ', 0, 'Abacus_syllabus_(1)37.pdf', 'https://navavision.com/video/CHAPTER%202_ONE%20TO%2010%20ON%20ABACUS.mp4', 0, '2022-02-07 08:58:51', '2022-02-07 08:59:16'),
(28, 8, 4, ' DIVISION OF TRIPLE DIGIT WITH SINGLE DIGIT DIVISOR', 0, 'Abacus_syllabus_(1)38.pdf', 'https://navavision.com/video/CHAPTER%202_ONE%20TO%2010%20ON%20ABACUS.mp4', 0, '2022-02-07 08:58:51', '2022-02-07 08:59:16'),
(29, 9, 1, 'DECIMAL MULTIPLICATION', 0, 'Abacus_syllabus_(1)39.pdf', 'https://navavision.com/video/CHAPTER%202_ONE%20TO%2010%20ON%20ABACUS.mp4', 0, '2022-02-07 08:58:51', '2022-02-07 08:59:16'),
(30, 9, 2, 'DIVISION OF TRIPLE DIGIT WITH DOUBLE DIGIT', 0, 'Abacus_syllabus_(1)40.pdf', 'https://navavision.com/video/CHAPTER%202_ONE%20TO%2010%20ON%20ABACUS.mp4', 0, '2022-02-07 08:58:51', '2022-02-07 08:59:16'),
(31, 9, 3, ' DIVISION OF TRIPLE DIGIT WITH TRIPLE DIGIT', 0, 'Abacus_syllabus_(1)41.pdf', 'https://navavision.com/video/CHAPTER%202_ONE%20TO%2010%20ON%20ABACUS.mp4', 0, '2022-02-07 08:58:51', '2022-02-07 08:59:16'),
(32, 9, 4, 'DECIMAL DIVISION', 0, 'Abacus_syllabus_(1)42.pdf', 'https://navavision.com/video/CHAPTER%202_ONE%20TO%2010%20ON%20ABACUS.mp4', 0, '2022-02-07 08:58:51', '2022-02-07 08:59:16'),
(33, 10, 1, 'PERCENTAGE', 1, '', '', 0, '2022-02-07 08:58:51', '2022-02-07 08:59:16'),
(34, 10, 2, 'PRIME FACTORISATION, HIGHEST COMMON FACTOR & LEAST COMMON MULTIPLE', 1, '', '', 0, '2022-02-07 08:58:51', '2022-02-07 08:59:16'),
(35, 10, 3, ' SQUARES', 1, '', '', 0, '2022-02-07 08:58:51', '2022-02-07 08:59:16'),
(36, 10, 4, ': SQUARE ROOTS', 1, '', '', 0, '2022-02-07 08:58:51', '2022-02-07 08:59:16'),
(37, 10, 5, 'CUBES', 1, '', '', 0, '2022-02-07 08:58:51', '2022-02-07 08:59:16'),
(38, 10, 6, 'CUBE ROOTS ', 1, '', '', 0, '2022-02-07 08:58:51', '2022-02-07 08:59:16'),
(39, 52, 1, 'INTRODUCTION TO VEDIC MATHEMATICS', 1, '', '', 0, '2022-02-07 08:58:51', '2022-02-07 08:59:16'),
(40, 52, 2, 'INTRODUCTION TO NUMBERS', 1, '', '', 0, '2022-02-07 08:58:51', '2022-02-07 08:59:16'),
(41, 52, 3, 'LEARN TABLES IN SIMPLE WAY', 1, '', '', 0, '2022-02-07 08:58:51', '2022-02-07 08:59:16'),
(42, 52, 4, 'INTERESTING CONCEPTS OF VEDIC MATHEMATICS', 1, '', '', 0, '2022-02-07 08:58:51', '2022-02-07 08:59:16'),
(43, 52, 5, 'DIVISIBILITY RULES', 1, '', '', 0, '2022-02-07 08:58:51', '2022-02-07 08:59:16'),
(44, 52, 6, 'ADDITION', 1, '', '', 0, '2022-02-07 08:58:51', '2022-02-07 08:59:16'),
(45, 52, 7, 'SUBTRACTION', 1, '', '', 0, '2022-02-07 08:58:51', '2022-02-07 08:59:16'),
(46, 52, 8, 'MULTILPICATION', 1, '', '', 0, '2022-02-07 08:58:51', '2022-02-07 08:59:16'),
(47, 52, 9, 'DIVISION', 1, '', '', 0, '2022-02-07 08:58:51', '2022-02-07 08:59:16'),
(48, 53, 1, 'MULTIPLICATION', 1, '', '', 0, '2022-02-07 08:58:51', '2022-02-07 08:59:16'),
(49, 53, 2, 'MULTIPLICATION WITH SERIES', 1, '', '', 0, '2022-02-07 08:58:51', '2022-02-07 08:59:16'),
(50, 53, 3, 'DIVISION', 1, '', '', 0, '2022-02-07 08:58:51', '2022-02-07 08:59:16'),
(51, 53, 5, 'FRACTIONS', 1, '', '', 0, '2022-02-07 08:58:51', '2022-02-07 08:59:16'),
(52, 53, 6, 'DECIMALS', 1, '', '', 0, '2022-02-07 08:58:51', '2022-02-07 08:59:16'),
(53, 54, 1, 'SQUARES', 1, '', '', 0, '2022-02-07 08:58:51', '2022-02-07 08:59:16'),
(54, 54, 2, 'SQUARE ROOTS', 1, '', '', 0, '2022-02-07 08:58:51', '2022-02-07 08:59:16'),
(55, 54, 3, 'MULTIPLICATION TRICKS', 1, '', '', 0, '2022-02-07 08:58:51', '2022-02-07 08:59:16'),
(56, 54, 4, 'CUBES', 1, '', '', 0, '2022-02-07 08:58:51', '2022-02-07 08:59:16'),
(57, 54, 5, 'CUBE ROOTS', 1, '', '', 0, '2022-02-07 08:58:51', '2022-02-07 08:59:16'),
(58, 54, 6, 'RATIO AND PROPORTION', 0, '', '', 0, '2022-02-07 08:58:51', '2022-02-07 08:59:16'),
(59, 54, 7, 'PERCENTAGE', 1, '', '', 0, '2022-02-07 08:58:51', '2022-02-07 08:59:16'),
(60, 55, 1, 'EXPONENTS', 1, '', '', 0, '2022-02-07 08:58:51', '2022-02-07 08:59:16'),
(61, 55, 2, 'SIMPLE INTEREST AND COMPOUND INTEREST', 1, '', '', 0, '2022-02-07 08:58:51', '2022-02-07 08:59:16'),
(62, 55, 3, 'SPEED DISTANCE AND TIME', 0, 'Syllabus_of_Vedic_Mathematics_6_Level_(2)39.pdf', 'https://navavision.com/video/CHAPTER%202_ONE%20TO%2010%20ON%20ABACUS.mp4', 0, '2022-02-07 08:58:51', '2022-02-07 08:59:16'),
(63, 55, 4, 'ALGEBRAIC EXPRESSIONS', 1, '', '', 0, '2022-02-07 08:58:51', '2022-02-07 08:59:16'),
(64, 55, 5, 'SIMPLE EQUATIONS', 1, '', '', 0, '2022-02-07 08:58:51', '2022-02-07 08:59:16'),
(65, 55, 6, 'FACTORIZATION', 1, '', '', 0, '2022-02-07 08:58:51', '2022-02-07 08:59:16'),
(66, 56, 1, 'SOLVING SIMPLE EQUATIONS', 1, '', '', 0, '2022-02-07 08:58:51', '2022-02-07 08:59:16'),
(67, 3, 5, 'ADD AND SUB USING SMALL AND BIG FRIENDS', 0, 'Ch5_both_samll_big.pdf', 'https://navavidya.com/QRvideos/abacus/level_1/Chapter_5/CHAPTER%205_ADDITION%20AND%20SUBTRACTION%20USING%20Small%20friends%20and%20big%20friends.mp4', 0, '2022-02-07 08:58:51', '2022-02-07 08:59:16');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(11) NOT NULL,
  `location` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `address1` varchar(255) NOT NULL,
  `address2` varchar(255) NOT NULL,
  `city` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL,
  `pincode` varchar(6) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `alt_phone` varchar(30) NOT NULL,
  `email_id` varchar(250) NOT NULL,
  `alt_email` varchar(100) NOT NULL,
  `status` char(1) NOT NULL DEFAULT 'A',
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `location`, `name`, `address1`, `address2`, `city`, `state`, `pincode`, `phone`, `alt_phone`, `email_id`, `alt_email`, `status`, `updated_at`, `created_at`) VALUES
(1, 'BANGALORE', 'Venkatesh S Bijapur', 'Nava Vision, 159/4, 2nd Floor,  Sumathi Vitals Nilaya, Vignana Nagar Main road, Next to church,', 'Above tasty bite bakery, Vignana Nagar,', 'Bangalore ', 'Karanataka', '560043', '07676319577', '080 454232323', 'navavision2000@gmail.com', 'venkatesh@navakosh.com', 'A', '2022-02-05 11:23:03', '2022-02-05 11:23:21'),
(2, 'MUMBAI', 'Mrs Bharthi  Trivedi ', 'Nava Vision, 1st Floor, grade Apartment', 'Siddhartha Nagar, 01 Road,  Majiwada service Road, Majiwada,', 'Thane (West),', 'Maharashtra ', '400601', '+91 9769069480', '9902611993  ', '', '', 'A', '2022-02-05 11:23:03', '2022-02-05 11:23:21'),
(3, 'JAIPUR ADDRESS', ' Mr. Ashok', 'Nava Vision, B-125, Modi Nagar', 'Opp Diamond Tower, Ajmer Road', 'Jaipur ', 'Rajasthan', '302019', '9902611993', '7878057312', '', '', 'A', '2022-02-05 11:23:03', '2022-02-05 11:23:21');

-- --------------------------------------------------------

--
-- Table structure for table `contact_uses`
--

CREATE TABLE `contact_uses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contact_uses`
--

INSERT INTO `contact_uses` (`id`, `name`, `email`, `phone`, `message`, `created_at`, `updated_at`) VALUES
(1, 'sikindra dgf', 'sikindra@gmail.com', '08109895993', '3qersfdxv4warsfxweasfd', '2022-02-15 23:43:37', '2022-02-15 23:43:37');

-- --------------------------------------------------------

--
-- Table structure for table `coupons`
--

CREATE TABLE `coupons` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` enum('Value','Per') COLLATE utf8mb4_unicode_ci NOT NULL,
  `min_order_amt` int(11) NOT NULL,
  `is_one_time` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `coupons`
--

INSERT INTO `coupons` (`id`, `title`, `code`, `value`, `type`, `min_order_amt`, `is_one_time`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Jan Coupon', 'Jan2021', '140', 'Value', 2500, 0, 1, '2021-01-19 23:13:32', '2021-01-29 19:42:55'),
(4, 'New Coupon', 'New', '20', 'Value', 200, 1, 1, '2021-02-04 21:02:37', '2021-02-04 21:02:48');

-- --------------------------------------------------------

--
-- Table structure for table `coursecarts`
--

CREATE TABLE `coursecarts` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `user_type` enum('Reg','Not_Reg') NOT NULL,
  `level` varchar(200) NOT NULL,
  `course_id` int(11) NOT NULL,
  `product_level_id` int(11) NOT NULL,
  `added_on` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `course_id` int(11) NOT NULL,
  `course_name` varchar(50) NOT NULL,
  `course_type` char(1) NOT NULL DEFAULT 'L' COMMENT 'l=>level,C->class',
  `levels` int(11) NOT NULL,
  `description` longtext NOT NULL,
  `image` varchar(100) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `sub_cat_id` int(11) NOT NULL,
  `type_id` int(11) NOT NULL,
  `sample_video` varchar(200) NOT NULL DEFAULT '0',
  `sample_pdf` varchar(223) DEFAULT NULL,
  `status` char(1) NOT NULL DEFAULT 'A',
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`course_id`, `course_name`, `course_type`, `levels`, `description`, `image`, `cat_id`, `sub_cat_id`, `type_id`, `sample_video`, `sample_pdf`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Class 1', 'C', 3, '<p>Science, Math & English</p>', 'one.jpg', 1, 1, 1, 'www', '', 'A', '2021-02-05 11:02:29', '2022-02-07 06:21:36'),
(2, 'Class 2', 'C', 3, '<p>Science, Math & English</p>', 'two.png', 1, 1, 1, 'www', '', 'A', '2021-02-05 11:02:40', '2022-02-07 06:21:36'),
(3, 'Class 3', 'C', 3, '<p>Science, Math & English</p>', 'three.jpg', 1, 1, 1, 'www', '', 'A', '2021-02-05 11:02:48', '2022-02-07 06:21:36'),
(4, 'Class 4', 'C', 3, '<p>Science, Math & English</p>', 'four.png', 1, 1, 1, 'www', '', 'A', '2021-02-05 11:02:56', '2022-02-07 06:21:36'),
(5, 'Class 5', 'C', 3, '<p>Science, Math & English</p>', 'five.jpg', 1, 2, 1, 'www', '', 'A', '2021-02-05 11:03:45', '2022-02-07 06:21:36'),
(6, 'Class 6', 'C', 3, '<p>Science, Math & English</p>', 'six.png', 1, 2, 1, 'www', '', 'A', '2021-02-05 11:04:15', '2022-02-07 06:21:36'),
(7, 'Class 7', 'C', 3, '<p>Science, Math & English</p>', 'seven.jpg', 1, 2, 1, 'www', '', 'A', '2021-02-05 11:04:57', '2022-02-07 06:21:36'),
(8, 'Class 8', 'C', 3, '<p>Science, Math & English</p>', 'eight.jpg', 1, 2, 1, 'www', '', 'A', '2021-02-05 11:06:44', '2022-02-07 06:21:36'),
(9, 'Class 9', 'C', 3, '<p>Science, Math & English</p>', '9th.png', 1, 3, 1, 'www', '', 'A', '2021-02-05 11:09:13', '2022-02-07 06:21:36'),
(10, 'Class 10', 'C', 6, '<p>Science, Math, English, Hindi, Social</p>', '10th.jpg', 1, 3, 1, 'www', '', 'A', '2021-02-05 11:44:30', '2022-02-07 06:21:36'),
(20, 'Electrical & Electronics Club', 'L', 4, '<p><span style=\"color: rgb(122, 122, 122); font-family: Poppins, sans-serif; text-align: center; background-color: rgb(247, 247, 247);\">The main purpose of introducing E &amp; E Club in education, it provides&nbsp;</span><span style=\"font-weight: bolder; color: rgb(122, 122, 122); font-family: Poppins, sans-serif; text-align: center; background-color: rgb(247, 247, 247);\">complex-problem solving skills</span><span style=\"color: rgb(122, 122, 122); font-family: Poppins, sans-serif; text-align: center; background-color: rgb(247, 247, 247);\">&nbsp;and a&nbsp;</span><span style=\"font-weight: bolder; color: rgb(122, 122, 122); font-family: Poppins, sans-serif; text-align: center; background-color: rgb(247, 247, 247);\">methodical</span><br></p>', '11.jpg', 2, 5, 1, 'www', '', 'A', '2021-02-05 13:01:29', '2022-02-07 06:21:36'),
(23, 'Unplug Coding', 'L', 2, '<h5 style=\"font-family: Poppins, sans-serif; color: rgb(89, 87, 205); text-align: center; background-color: rgb(247, 247, 247);\"><span style=\"color: rgb(122, 122, 122); font-size: 1rem;\">Unplug Coding is a unique program designed with creative teaching of conceptual topics of Computer Programming&nbsp;</span><span style=\"color: rgb(122, 122, 122); font-size: 1rem; font-weight: bolder;\">without using Computer</span><br></h5><div><span style=\"font-weight: bolder;\"><br></span></div>', '22.png', 2, 6, 1, 'www', '', 'A', '2021-02-05 13:05:29', '2022-02-07 06:21:36'),
(14, 'Python', 'C', 1, '<p>Python</p>', 'technical4.png', 2, 7, 1, 'www', '', 'A', '2021-02-05 13:12:57', '2022-02-07 06:21:36'),
(11, 'Abacus', 'L', 8, '<p><span style=\"color: rgb(122, 122, 122); font-family: Poppins, sans-serif; text-align: center; background-color: rgb(247, 247, 247);\">The main objective of this course is to teach students easy methods of performing </span><span style=\"font-weight: bolder; color: rgb(122, 122, 122); font-family: Poppins, sans-serif; text-align: center; background-color: rgb(247, 247, 247);\">Mathematical Calculations</span><span style=\"color: rgb(122, 122, 122); font-family: Poppins, sans-serif; text-align: center; background-color: rgb(247, 247, 247);\"> using Abacus. Nava Vision helps</span><br></p>', 'WhatsApp_Image_2021-03-15_at_3_19_45_PM.jpeg', 2, 4, 1, 'www', 'https://image.freepik.com/free-vector/coming-soon-with-megaphone-design_1017-26689.jpg', 'A', '2021-03-15 15:20:35', '2022-02-07 06:21:36'),
(12, 'English Club', 'L', 8, '<h5 style=\"font-family: Poppins, sans-serif; color: rgb(89, 87, 205); text-align: center; background-color: rgb(247, 247, 247);\"><span style=\"color: rgb(122, 122, 122); font-size: 16px;\">Nava Vision has come up with its unique concept of English Club.It Improves Children’s </span><span style=\"font-weight: bolder; color: rgb(122, 122, 122); font-size: 16px;\">Reading, Writing, Listening and Speaking Skills</span><span style=\"color: rgb(122, 122, 122); font-size: 16px;\">.</span><br></h5>', 'WhatsApp_Image_2021-03-16_at_3_09_34_PM.jpeg', 2, 4, 1, 'www', '', 'A', '2021-03-23 12:12:21', '2022-02-07 06:21:36'),
(17, 'Quick Maths', 'L', 6, '<p><span style=\"color: rgb(122, 122, 122); font-family: Poppins, sans-serif; text-align: center; background-color: rgb(247, 247, 247);\">The main objective of this course is to introduce students to the field of mathematics, stimulate their </span><span style=\"font-weight: bolder; color: rgb(122, 122, 122); font-family: Poppins, sans-serif; text-align: center; background-color: rgb(247, 247, 247);\">interests in Mathematics</span><span style=\"color: rgb(122, 122, 122); font-family: Poppins, sans-serif; text-align: center; background-color: rgb(247, 247, 247);\">.</span><br></p>', 'WhatsApp_Image_2021-03-20_at_1_31_48_PM.jpeg', 2, 4, 1, 'www', '', 'A', '2021-03-23 12:12:56', '2022-02-07 06:21:36'),
(18, 'Vedic Mathematics', 'L', 6, '<p><span style=\"color: rgb(122, 122, 122); font-family: Poppins, sans-serif; text-align: center; background-color: rgb(247, 247, 247);\">Nava Vision helps students to learn Mathematics in an easy way by using Vedic Mathematics </span><span style=\"font-weight: bolder; color: rgb(122, 122, 122); font-family: Poppins, sans-serif; text-align: center; background-color: rgb(247, 247, 247);\">Sutras and Upa Sutras</span><span style=\"color: rgb(122, 122, 122); font-family: Poppins, sans-serif; text-align: center; background-color: rgb(247, 247, 247);\">. Nava Vision makes the</span><br></p>', 'WhatsApp_Image_2021-03-15_at_4_48_52_PM.jpeg', 2, 4, 1, 'www', '', 'A', '2021-03-23 12:13:23', '2022-02-07 06:21:36'),
(19, 'Science Club', 'L', 4, '<p><span style=\"color: rgb(122, 122, 122); font-family: Poppins, sans-serif; text-align: center; background-color: rgb(247, 247, 247);\">The main objective of this course is to develop a general interest in students to the&nbsp;</span><span style=\"font-weight: bolder; color: rgb(122, 122, 122); font-family: Poppins, sans-serif; text-align: center; background-color: rgb(247, 247, 247);\">field of science</span><span style=\"color: rgb(122, 122, 122); font-family: Poppins, sans-serif; text-align: center; background-color: rgb(247, 247, 247);\">, to keep the students in touch with the.</span><br></p>', '1.jpg', 2, 4, 1, 'www', '', 'A', '2021-02-05 12:59:32', '2022-02-07 06:21:36'),
(21, 'Robotics Club', 'L', 4, '<p><span style=\"color: rgb(122, 122, 122); font-family: Poppins, sans-serif; text-align: center; background-color: rgb(247, 247, 247);\">The main objective of this course is to introduce students to the </span><span style=\"font-weight: bolder; color: rgb(122, 122, 122); font-family: Poppins, sans-serif; text-align: center; background-color: rgb(247, 247, 247);\">field of Robotics</span><span style=\"color: rgb(122, 122, 122); font-family: Poppins, sans-serif; text-align: center; background-color: rgb(247, 247, 247);\">, stimulate their </span><span style=\"font-weight: bolder; color: rgb(122, 122, 122); font-family: Poppins, sans-serif; text-align: center; background-color: rgb(247, 247, 247);\">interests in science and engineering</span><br></p>', 'WhatsApp_Image_2021-03-16_at_5_30_38_PM.jpeg', 2, 5, 1, 'www', '', 'A', '2021-03-23 12:14:59', '2022-02-07 06:21:36'),
(22, 'Drone', 'L', 1, '<p>Drone</p>', '21.png', 2, 5, 1, 'www', '', 'A', '2021-02-05 13:03:43', '2022-02-07 06:21:36'),
(24, 'Python Coding', 'L', 2, '<h5 style=\"font-family: Poppins, sans-serif; color: rgb(89, 87, 205); text-align: center; background-color: rgb(247, 247, 247);\"><span style=\"color: rgb(122, 122, 122); font-size: 1rem;\">Python is relatively simple, so it\'s easy to learn, since it requires a&nbsp;</span><span style=\"color: rgb(122, 122, 122); font-size: 1rem; font-weight: bolder;\">unique syntax</span><span style=\"color: rgb(122, 122, 122); font-size: 1rem;\">&nbsp;that&nbsp;</span><span style=\"color: rgb(122, 122, 122); font-size: 1rem; font-weight: bolder;\">focuses on readability</span><span style=\"color: rgb(122, 122, 122); font-size: 1rem;\">. Developers can read and translate Python</span><br></h5>', '12.jpg', 2, 6, 1, 'www', '', 'A', '2021-02-05 13:06:19', '2022-02-07 06:21:36'),
(27, 'Artificial Intellegence', 'L', 1, '<p>Artificial Intelligence (AI) is the branch of computer sciences that emphasizes the development of intelligence machines<br></p>', '220.png', 2, 6, 1, 'www', '', 'A', '2021-02-15 16:40:36', '2022-02-07 06:21:36'),
(28, 'Cyber Literacy', 'L', 1, '<p>Cyber literacy</p>', '129.png', 2, 6, 1, 'www', '', 'A', '2021-02-16 16:59:58', '2022-02-07 06:21:36');

-- --------------------------------------------------------

--
-- Table structure for table `course_details`
--

CREATE TABLE `course_details` (
  `id` int(11) NOT NULL,
  `orders_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `products_attr_id` int(11) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `course_levels`
--

CREATE TABLE `course_levels` (
  `level_id` int(11) NOT NULL,
  `course_id` int(11) NOT NULL,
  `level` varchar(50) NOT NULL,
  `price` varchar(20) NOT NULL,
  `text_link` varchar(200) NOT NULL,
  `work_book_link` varchar(200) DEFAULT NULL,
  `description` longtext NOT NULL,
  `Syllabus` text NOT NULL,
  `level_syllabus_file_name` varchar(200) NOT NULL DEFAULT '0',
  `level_syllabus_file_type` varchar(50) NOT NULL DEFAULT '0',
  `level_img_file_name` varchar(50) NOT NULL,
  `sample_video_file_name` varchar(50) NOT NULL,
  `sample_video_file_type` varchar(50) NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `type_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course_levels`
--

INSERT INTO `course_levels` (`level_id`, `course_id`, `level`, `price`, `text_link`, `work_book_link`, `description`, `Syllabus`, `level_syllabus_file_name`, `level_syllabus_file_type`, `level_img_file_name`, `sample_video_file_name`, `sample_video_file_type`, `created_at`, `updated_at`, `type_id`) VALUES
(2, 11, '2', '2500', 'aaa', 'bbb', 'In Abacus Level-2 of 8 series, the review of important topics present in Level-1 of 8 Series Book is given and then discusses the higher level of basic arithmetic calculations like 2- and 3-digit Addition &amp; Subtraction using Abacus representations.', '<p>Chapter 1: ADDITION OF SINGLE DIGIT WITH 2- AND 3-DIGIT NUMBERS</p><p>Chapter 2: SUBTRACTION OF SINGLE DIGIT NUMBERS FROM 2- AND 3-DIGIT\nNUMBERS</p><p>Chapter 3: ADDITION</p><p>Chapter 4: SUBTRACTION</p><p>Chapter 5: ADDITION AND SUBTRACTION </p><p><span style=\"font-size: 1rem; font-weight: bolder; color: rgb(0, 67, 187); font-family: Poppins, sans-serif;\">Age Group:</span><span style=\"font-size: 1rem; color: rgb(0, 67, 187); font-family: Poppins, sans-serif;\">&nbsp;This level can be prescribed for the students who completed Level-1 of Abacus or to kids aged 5 and above.</span>&nbsp;<br></p>', '', '', 'dd28.png', 'https://navavision.com/video/CHAPTER%202_ONE%20TO%', '', '2021-02-09 06:14:49', '2022-02-05 09:32:54', 1),
(1, 11, '1', '2500', 'aaa', 'bbb', '<p><i style=\"padding: 0px; margin: 0px; color: rgb(122, 122, 122); font-family: Poppins, sans-serif;\">In Abacus Level-1 of 8 series, the basics concepts of counting numbers and being discussed and then proceeds to Abacus introduction, using Magical fingers and performing basic arithmetic calculations like addition and subtraction, representing multiples of numbers on abacus, performing addition and subtraction using Abacus methodology.</i><br></p>', '<p style=\"padding: 0px; margin-right: 0px; margin-left: 0px; color: rgb(33, 37, 41); font-family: system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, &quot;Noto Sans&quot;, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;;\">Chapter 1: INTRODUCTION</p><p style=\"padding: 0px; margin-right: 0px; margin-left: 0px; color: rgb(33, 37, 41); font-family: system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, &quot;Noto Sans&quot;, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;;\">Chapter 2: REPRESENTING 1 TO 30 ON ABACUS</p><p style=\"padding: 0px; margin-right: 0px; margin-left: 0px; color: rgb(33, 37, 41); font-family: system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, &quot;Noto Sans&quot;, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;;\">Chapter 3: ADDITION AND SUBTRACTION USING MAGICAL FINGERS</p><p style=\"padding: 0px; margin-right: 0px; margin-left: 0px; color: rgb(33, 37, 41); font-family: system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, &quot;Noto Sans&quot;, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;;\">Chapter 4: ADDITION AND SUBTRACTION ON ABACUS</p><p style=\"padding: 0px; margin-right: 0px; margin-left: 0px; color: rgb(33, 37, 41); font-family: system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, &quot;Noto Sans&quot;, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;;\">Chapter 5: ADDITION AND SUBTRACTION USING BOTH SMALL AND BIG FRIENDS</p><p style=\"padding: 0px; margin-right: 0px; margin-left: 0px; color: rgb(33, 37, 41); font-family: system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, &quot;Noto Sans&quot;, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;;\">&nbsp;Chapter 6: REPRESENTATION</p>', '', '', 'dd115.png', 'https://navavidya.com/QRvideos/abacus/level_1/Chap', '', '2021-03-31 07:00:10', '2022-02-05 09:32:54', 1),
(3, 11, '3', '3000', 'aaa', 'bbb', '<p><span style=\"font-family: Helvetica;\">In Abacus Level-3 of 8 series, the review of important topics present in Level-2 of 8 Series Book is given and then discusses the higher level of arithmetic calculations like 1-, 2- and 3-digit Addition &amp; Subtraction and introduction to Multiplication, performing multiplication of single digit multiplicand with single digit multiplier using Abacus representations.</span><br></p>', '<p>Chapter 1: ADDITION OF 3-DIGIT NUMBERS</p><p>Chapter 2: SUBTRACTION OF 3-DIGIT NUMBERS</p><p>Chapter 3: ADDITION AND SUBTRACTION OF 1,2, &amp; 3 DIGIT NUMBERS</p><p>Chapter 4: MULTIPLICATION</p><p><span style=\"font-size: 1rem; font-weight: bolder; color: rgb(0, 67, 187); font-family: Poppins, sans-serif;\">Age Group:</span><span style=\"font-size: 1rem; color: rgb(0, 67, 187); font-family: Poppins, sans-serif;\">&nbsp;This level can be prescribed for the students who completed Level-2 of Abacus or to kids aged 6 and above.</span>&nbsp;<br></p>', '', '', 'dd16.png', 'https://navavision.com/video/CHAPTER%202_ONE%20TO%', '', '2021-02-09 06:16:04', '2022-02-05 09:32:54', 1),
(5, 11, '4', '3000', 'aaa', 'bbb', '<p>In Abacus Level-4 of 8 series, the review of important topics present in Level-3 of 8 Series Book is given and then discusses the higher level of arithmetic calculations like 3-digit Addition &amp; Subtraction, Multiplication of 2, 3-digit numbers with single digit numbers, division of 1-digit divisor with 2-digit dividend using Abacus representations.<br></p>', '<p>Chapter 1: ADDITION OF 3-DIGIT NUMBERS</p><p>Chapter 2: ADDITION AND SUBTRACTION OF 3-DIGIT NUMBERS</p><p>Chapter 3: MULTIPLICATION\r\n</p><p>Chapter 4: MULTIPLICATION OF ONE DIGIT WITH 3- DIGIT NUMBERS</p><p>Chapter 5: DIVISION</p><p><span style=\"font-size: 1rem; font-weight: bolder; color: rgb(0, 67, 187); font-family: Poppins, sans-serif;\">Age Group:</span><span style=\"font-size: 1rem; color: rgb(0, 67, 187); font-family: Poppins, sans-serif;\">&nbsp;This level can be prescribed for the students who completed Level-3 of Abacus or to kids aged 7 and above.</span>&nbsp;<br></p>', '', '', 'dd29.png', 'https://navavision.com/video/CHAPTER%202_ONE%20TO%', '', '2021-02-09 06:17:17', '2022-02-05 09:32:54', 1),
(6, 11, '5', '3500', 'aaa', 'bbb', '<p><span style=\"font-family: Helvetica;\">In Abacus Level-5 of 8 series, the review of important topics present in Level-4 of 8 Series Book is given and then discusses the higher level of arithmetic calculations like 4-digit Addition, Addition &amp; Subtraction between combination of 1, 2, 3-digit numbers, Multiplication of 4-digit numbers with single digit numbers and Multiplication of 2-digit numbers with 2-digit numbers using Abacus representations.</span><br></p>', '<p>Chapter 1: ADDITION OF 4-DIGIT NUMBERS</p><p>Chapter 2: ADDING AND SUBTRACTING ALL COMBINATIONS</p><p>Chapter 3: MULTIPLICATION OF SINGLE DIGIT NUMBER WITH 4- DIGIT\r\nNUMBER</p><p>Chapter 4: MULTIPLICATION OF 2 - DIGIT NUMBER WITH 2 - DIGIT NUMBER</p><p><span style=\"font-size: 1rem; font-weight: bolder; color: rgb(0, 67, 187); font-family: Poppins, sans-serif;\">Age Group:</span><span style=\"font-size: 1rem; color: rgb(0, 67, 187); font-family: Poppins, sans-serif;\">&nbsp;This level can be prescribed for the students who completed Level-4 of Abacus or to kids aged 8 and above.</span>&nbsp;<br></p>', '', '', 'dd17.png', 'https://navavision.com/video/CHAPTER%202_ONE%20TO%', '', '2021-02-09 06:18:25', '2022-02-05 09:32:54', 1),
(7, 11, '6', '3500', 'aaa', 'bbb', '<p><span style=\"font-family: Helvetica;\">in Abacus Level-6 of 8 series, the review of important topics present in Level-5 of 8 Series Book is given and then discusses the higher level of arithmetic calculations like Multiplication of 2-digit numbers with single digit, 2-digit and 3-digit numbers; addition and subtraction of numbers in decimal format; Division of 3-digit numbers with single digit numbers using Abacus representations.</span><br></p>', '<p>Chapter 1: MULTIPLICATION&nbsp;</p><p><span style=\"font-size: 1rem;\">&nbsp;2: DECIMAL ADDITION\r\nChapter </span></p><p><span style=\"font-size: 1rem;\">3: DECIMAL SUBTRACTION\r\nChapter</span></p><p><span style=\"font-size: 1rem;\"> 4: DIVISION OF TRIPLE DIGIT WITH SINGLE DIGIT DIVISOR</span></p><p><span style=\"font-weight: bolder; color: rgb(0, 67, 187); font-family: Poppins, sans-serif;\">Age Group:</span><span style=\"color: rgb(0, 67, 187); font-family: Poppins, sans-serif;\">&nbsp;This level can be prescribed for the students who completed Level-5 of Abacus or to kids aged 9 and above.</span><span style=\"font-size: 1rem;\"><br></span></p>', '', '', 'dd18.png', 'https://navavision.com/video/CHAPTER%202_ONE%20TO%', '', '2021-02-09 06:20:21', '2022-02-05 09:32:54', 1),
(8, 11, '7', '4000', 'aaa', 'bbb', '<p><span style=\"font-family: Helvetica;\">In Abacus Level-7 of 8 series, the review of important topics present in Level-6 of 8 Series Book is given and then discusses the higher level of arithmetic calculations like Decimal Multiplication; Division of 3-digit numbers with 2-digit and 3-digit numbers; Division in numbers with decimal format using Abacus representations.</span><br></p>', '<p>Chapter 1: DECIMAL MULTIPLICATION\r\nChapter&nbsp; </p><p>2: DIVISION OF TRIPLE DIGIT WITH DOUBLE DIGIT\r\nChapter</p><p> 3: DIVISION OF TRIPLE DIGIT WITH TRIPLE DIGIT\r\nChapter</p><p> 4: DECIMAL DIVISION</p><p><span style=\"font-weight: bolder; color: rgb(0, 67, 187); font-family: Poppins, sans-serif;\">Age Group:</span><span style=\"color: rgb(0, 67, 187); font-family: Poppins, sans-serif;\">&nbsp;This level can be prescribed for the students who completed Level-6 of Abacus or to kids aged 10 and above.</span><br></p>', '', '', 'dd19.png', 'https://navavision.com/video/CHAPTER%202_ONE%20TO%', '', '2021-02-09 06:21:18', '2022-02-05 09:32:54', 1),
(9, 11, '8', '4000', 'aaa', 'bbb', '<p>The final level Abacus Level-8 of 8 series discusses the review of important topics present in Level-7 of 8 Series Book is given and then discusses the higher level of arithmetic calculations like finding Percentages of 1,2,3-Digit numbers; Ratio Percentage; LCM; HCF; Squares for 2,3-Digit numbers; Square roots for 3,4,5,6-Digit numbers; Cubes for 2,3-Digit numbers; Cube roots for 3,4,5,6-Digit numbers using Abacus representations.<br></p>', '<p>Chapter 1: PERCENTAGE</p><p>Chapter 2: PRIME FACTORISATION, HIGHEST COMMON FACTOR &amp;\r\nLEAST COMMON MULTIPLE</p><p>Chapter 3: SQUARES</p><p>Chapter 4: SQUARE ROOTS</p><p>Chapter 5: CUBES</p><p>Chapter 6: CUBE ROOTS</p><p><span style=\"font-size: 1rem; font-weight: bolder; color: rgb(0, 67, 187); font-family: Poppins, sans-serif;\">Age Group:</span><span style=\"font-size: 1rem; color: rgb(0, 67, 187); font-family: Poppins, sans-serif;\">&nbsp;This level can be prescribed for the students who completed Level-7 of Abacus or to kids aged 11 and above.</span>&nbsp;<br></p>', '', '', 'dd210.png', 'https://navavision.com/video/CHAPTER%202_ONE%20TO%', '', '2021-02-09 06:23:12', '2022-02-05 09:32:54', 1),
(11, 1, 'Grammer', '2000', 'aaa', 'bbb', '<p>In grammer level 1 you will learn noun,&nbsp; &nbsp; &nbsp; common and proper nouns,&nbsp; &nbsp; &nbsp; gender, pronoun, preposition, conjunction, adjectives, tenses, the article,&nbsp; subject and predicate,&nbsp; verb,&nbsp; adverb,&nbsp; numbers.<br></p>', '<p class=\"MsoNoSpacing\" style=\"margin-left: 0.5in; line-height: 150%;\"><!--[if !supportLists]--><span style=\"line-height: 150%;\">1.<span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; line-height: normal;\">      </span></span><!--[endif]--><span style=\"line-height: 150%;\">TOPIC:\r\nNOUN <o:p></o:p></span></p><p class=\"MsoNoSpacing\" style=\"margin-left: 0.5in; line-height: 150%;\"><!--[if !supportLists]--><span style=\"line-height: 150%;\">2.<span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; line-height: normal;\">      </span></span><!--[endif]--><span style=\"line-height: 150%;\">COMMON\r\nAND PROPER NOUNS<o:p></o:p></span></p><p class=\"MsoNoSpacing\" style=\"margin-left: 0.5in; line-height: 150%;\"><!--[if !supportLists]--><span style=\"line-height: 150%;\">3.<span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; line-height: normal;\">      </span></span><!--[endif]--><span style=\"line-height: 150%;\">GENDER:<o:p></o:p></span></p><p class=\"MsoNoSpacing\" style=\"margin-left: 0.5in; line-height: 150%;\"><!--[if !supportLists]--><span style=\"line-height: 150%;\">4.<span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; line-height: normal;\">      </span></span><!--[endif]--><span style=\"line-height: 150%;\">PRONOUN\r\n<o:p></o:p></span></p><p class=\"MsoNoSpacing\" style=\"margin-left: 0.5in; line-height: 150%;\"><!--[if !supportLists]--><span style=\"line-height: 150%;\">5.<span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; line-height: normal;\">      </span></span><!--[endif]--><span style=\"line-height: 150%;\">PREPOSITION<o:p></o:p></span></p><p class=\"MsoNoSpacing\" style=\"margin-left: 0.5in; line-height: 150%;\"><!--[if !supportLists]--><span style=\"line-height: 150%;\">6.<span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; line-height: normal;\">      </span></span><!--[endif]--><span style=\"line-height: 150%;\">CONJUNCTION<o:p></o:p></span></p><p class=\"MsoNoSpacing\" style=\"margin-left: 0.5in; line-height: 150%;\"><!--[if !supportLists]--><span style=\"line-height: 150%;\">7.<span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; line-height: normal;\">      </span></span><!--[endif]--><span style=\"line-height: 150%;\">ADJECTIVES:<o:p></o:p></span></p><p class=\"MsoNoSpacing\" style=\"margin-left: 0.5in; line-height: 150%;\"><!--[if !supportLists]--><span style=\"line-height: 150%;\">8.<span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; line-height: normal;\">      </span></span><!--[endif]--><span style=\"line-height: 150%;\">TENSES<o:p></o:p></span></p><p class=\"MsoNoSpacing\" style=\"margin-left: 0.5in; line-height: 150%;\"><!--[if !supportLists]--><span style=\"line-height: 150%;\">9.<span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; line-height: normal;\">      </span></span><!--[endif]--><span style=\"line-height: 150%;\">THE\r\nARTICLE<o:p></o:p></span></p><p class=\"MsoNoSpacing\" style=\"margin-left: 0.5in; line-height: 150%;\"><!--[if !supportLists]--><span style=\"line-height: 150%;\">10.<span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; line-height: normal;\">  </span></span><!--[endif]--><span style=\"line-height: 150%;\">SUBJECT\r\nAND PREDICATE<o:p></o:p></span></p><p class=\"MsoNoSpacing\" style=\"margin-left: 0.5in; line-height: 150%;\"><!--[if !supportLists]--><span style=\"line-height: 150%;\">11.<span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; line-height: normal;\">  </span></span><!--[endif]--><span style=\"line-height: 150%;\">VERB<o:p></o:p></span></p><p class=\"MsoNoSpacing\" style=\"margin-left: 0.5in; line-height: 150%;\"><!--[if !supportLists]--><span style=\"line-height: 150%;\">12.<span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; line-height: normal;\">  </span></span><!--[endif]--><span style=\"line-height: 150%;\">ADVERB<o:p></o:p></span></p><p>\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n</p><p class=\"MsoNoSpacing\" style=\"margin-left: 0.5in; line-height: 150%;\"><!--[if !supportLists]--><span style=\"line-height: 150%;\">13.<span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; line-height: normal;\">  </span></span><!--[endif]--><span style=\"line-height: 150%;\">NUMBERS<font face=\"Book Antiqua, serif\"><span style=\"font-size: 12pt;\"><o:p></o:p></span></font></span></p>', '', '', 'g122.png', 'https://navavision.com/video/CHAPTER%202_ONE%20TO%', '', '2021-02-09 10:22:24', '2022-02-05 09:32:54', 1),
(12, 1, 'English', '2000', 'aaa', 'bbb', '<p><span style=\"color: rgb(33, 37, 41); font-family: system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, &quot;Noto Sans&quot;, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;;\">In english level 1 you will learn a happy child three little pigs,&nbsp; after a bath the bubble the straw and the shoe,&nbsp; one little kitten laalu and peelu,&nbsp; once I saw a little bird mittu and the yellow mango,&nbsp; merry go round circle,&nbsp; if I were an apple our tree,&nbsp; a kite sundari,&nbsp; a little turtle the tiger and the mosquito,&nbsp; clouns anandi’s rainbow,&nbsp; flying man the tailor and his friend.</span><br></p>', '<p class=\"MsoNoSpacing\" style=\"padding: 0px; margin-right: 0px; margin-left: 0px; color: rgb(33, 37, 41); font-family: system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, &quot;Noto Sans&quot;, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;;\">&nbsp;1.&nbsp; A HAPPY CHILD&nbsp;<span style=\"padding: 0px; margin: 0px; font-size: 1rem;\">THREE LITTLE PIGS</span></p><p class=\"MsoNoSpacing\" style=\"padding: 0px; margin-right: 0px; margin-left: 0px; color: rgb(33, 37, 41); font-family: system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, &quot;Noto Sans&quot;, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;;\">&nbsp;2.&nbsp; AFTER A BATH&nbsp;THE BUBBLE THE STRAW AND THE SHOE</p><p class=\"MsoNoSpacing\" style=\"padding: 0px; margin-right: 0px; margin-left: 0px; color: rgb(33, 37, 41); font-family: system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, &quot;Noto Sans&quot;, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;;\">&nbsp;3.&nbsp; ONE LITTLE KITTEN&nbsp;LAALU AND PEELU</p><p class=\"MsoNoSpacing\" style=\"padding: 0px; margin-right: 0px; margin-left: 0px; color: rgb(33, 37, 41); font-family: system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, &quot;Noto Sans&quot;, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;;\">&nbsp;4.&nbsp; ONCE I SAW A LITTLE BIRD&nbsp;MITTU AND THE YELLOW MANGO</p><p class=\"MsoNoSpacing\" style=\"padding: 0px; margin-right: 0px; margin-left: 0px; color: rgb(33, 37, 41); font-family: system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, &quot;Noto Sans&quot;, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;;\">&nbsp;5.&nbsp; MERRY GO ROUND&nbsp;CIRCLE</p><p class=\"MsoNoSpacing\" style=\"padding: 0px; margin-right: 0px; margin-left: 0px; color: rgb(33, 37, 41); font-family: system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, &quot;Noto Sans&quot;, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;;\">&nbsp;6.&nbsp; IF I WERE AN APPLE&nbsp;OUR TREE</p><p class=\"MsoNoSpacing\" style=\"padding: 0px; margin-right: 0px; margin-left: 0px; color: rgb(33, 37, 41); font-family: system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, &quot;Noto Sans&quot;, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;;\">&nbsp;7.&nbsp; A KITE&nbsp;SUNDARI</p><p class=\"MsoNoSpacing\" style=\"padding: 0px; margin-right: 0px; margin-left: 0px; color: rgb(33, 37, 41); font-family: system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, &quot;Noto Sans&quot;, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;;\">&nbsp;8.&nbsp; A LITTLE TURTLE&nbsp;THE TIGER AND THE MOSQUITO&nbsp; 9.&nbsp;&nbsp;<span style=\"padding: 0px; margin: 0px; font-size: 1rem;\">CLOUNS&nbsp;ANANDI’S RAINBOW&nbsp;</span></p><p class=\"MsoNoSpacing\" style=\"padding: 0px; margin-right: 0px; margin-left: 0px; color: rgb(33, 37, 41); font-family: system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, &quot;Noto Sans&quot;, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;;\">&nbsp;10.&nbsp; FLYING MAN&nbsp;THE TAILOR AND HIS FRIEND</p>', '', '', '17.png', 'https://navavision.com/video/CHAPTER%202_ONE%20TO%', '', '2021-02-09 10:19:15', '2022-02-05 09:32:54', 1),
(33, 5, 'Math', '2000', 'aaa', 'bbb', '<p>In math level 5 you will learn basic operations of numbers, large numbers,<span style=\"white-space:pre\">	</span>measurements, fractions,<span style=\"white-space:pre\">	</span>decimals,<span style=\"white-space:pre\">	</span>roman numbers, integers,<span style=\"white-space:pre\">	</span>time, rounding off numbers, percentage, multiples and factors, geometry, area and volume, volume.</p><div><br></div>', '<p>1<span style=\"white-space:pre\">	</span>BASIC OPERATIONS OF NUMBERS</p><p>2<span style=\"white-space:pre\">	</span>LARGE NUMBERS</p><p>3<span style=\"white-space:pre\">	</span>MEASUREMENTS</p><p>4<span style=\"white-space:pre\">	</span>FRACTIONS</p><p>5<span style=\"white-space:pre\">	</span>DECIMALS</p><p>6<span style=\"white-space:pre\">	</span>ROMAN NUMBERS</p><p>7<span style=\"white-space:pre\">	</span>INTEGERS</p><p>8<span style=\"white-space:pre\">	</span>TIME</p><p>9<span style=\"white-space:pre\">	</span>ROUNDING OFF NUMBERS</p><p>10<span style=\"white-space:pre\">	</span>PERCENTAGE</p><p>11<span style=\"white-space:pre\">	</span>MULTIPLES AND FACTORS</p><p>12<span style=\"white-space:pre\">	</span>GEOMETRY</p><p>13<span style=\"white-space:pre\">	</span>AREA AND VOLUME</p><p>14<span style=\"white-space:pre\">	</span>VOLUME</p>', '', '', '117.png', 'https://navavision.com/video/CHAPTER%202_ONE%20TO%', '', '2021-02-10 04:36:28', '2022-02-05 09:32:54', 1),
(34, 6, 'Grammer', '2000', 'aaa', 'bbb', '<p>In Grammer level 6 you will learn Knowing numbers, whole numbers, playing with numbers, basic geometrical ideas, understanding elementary shapes, integers, fractions, decimals, data handling, mensuration, algebra, ratio an proportion, symmetry, practival geometry.</p>', '<p>1<span style=\"white-space:pre\">	</span>KNOWING NUMBERS</p><p>2<span style=\"white-space:pre\">	</span>WHOLE NUMBERS</p><p>3<span style=\"white-space:pre\">	</span>PLAYING WITH NUMBERS</p><p>4<span style=\"white-space:pre\">	</span>BASIC GEOMETRICAL IDEAS</p><p>5<span style=\"white-space:pre\">	</span>UNDERSTANDING ELEMENTARY SHAPES</p><p>6<span style=\"white-space:pre\">	</span>INTEGERS</p><p>7<span style=\"white-space:pre\">	</span>FRACTIONS</p><p>8<span style=\"white-space:pre\">	</span>DECIMALS</p><p>9<span style=\"white-space:pre\">	</span>DATA HANDLING</p><p>10<span style=\"white-space:pre\">	</span>MENSURATION</p><p>11<span style=\"white-space:pre\">	</span>ALGEBRA</p><p>12<span style=\"white-space:pre\">	</span>RATIO AN PROPORTION</p><p>13<span style=\"white-space:pre\">	</span>SYMMETRY</p><p>14<span style=\"white-space:pre\">	</span>PRACTIVAL GEOMETRY</p>', '', '', 'g127.png', 'https://navavision.com/video/CHAPTER%202_ONE%20TO%', '', '2021-02-10 04:40:12', '2022-02-05 09:32:54', 1),
(35, 6, 'English', '2000', 'aaa', 'bbb', '<p>In English level 6 you will learn&nbsp;Who did patrick’s homework?, how the dog found himself a new master!, taro’s reward, an indian-american woman in space, a different kind of school, who I am, fair play, a game of chance, desert animals, the banyan tree, a house,&nbsp; a home (poem), the kite (poem), the quarrel (poem), beauty (poem), where do all the teachers go (poem), the wonderful words (poem), vocation (poem), what if (poem).</p>', '<p>CHAPTER 1 – WHO DID PATRICK’S HOMEWORK?</p><p>CHAPTER 2 – HOW THE DOG FOUND HIMSELF A NEW MASTER!</p><p>CHAPTER 3 – TARO’S REWARD</p><p>CHAPTER 4 – AN INDIAN-AMERICAN WOMAN IN SPACE</p><p>CHAPTER 5 – A DIFFERENT KIND OF SCHOOL</p><p>CHAPTER 6 – WHO I AM</p><p>CHAPTER 7 – FAIR PLAY</p><p>CHAPTER 8 – A GAME OF CHANCE</p><p>CHAPTER 9 – DESERT ANIMALS</p><p>CHAPTER 10 – THE BANYAN TREE</p><p>CHAPTER 11 – A HOUSE, A HOME (POEM)</p><p>CHAPTER 12 – THE KITE (POEM)</p><p>CHAPTER 13 – THE QUARREL (POEM)</p><p>CHAPTER 14 – BEAUTY (POEM)</p><p>CHAPTER 15 – WHERE DO ALL THE TEACHERS GO (POEM)</p><p>CHAPTER 16 – THE WONDERFUL WORDS (POEM)</p><p>CHAPTER 17 – VOCATION (POEM)</p><p>CHAPTER 18 – WHAT IF (POEM)</p>', '', '', '118.png', 'https://navavision.com/video/CHAPTER%202_ONE%20TO%', '', '2021-02-10 04:45:17', '2022-02-05 09:32:54', 1),
(36, 6, 'Science', '2000', 'aaa', 'bbb', '<p>In Science level 6 you will learn&nbsp;<span style=\"font-size: 1rem; color: rgb(33, 37, 41); font-family: system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, &quot;Noto Sans&quot;, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;;\">Food variety, food materials and sources, plant parts and animal products as food, what do animals eat, what do different food items contain, what do various nutrients do for our body, balanced diet, deficiency diseases, objects around us, properties of materials, methods of separation, changes around us</span><span style=\"font-size: 1rem;\">&nbsp;</span><span style=\"font-size: 1rem; color: rgb(33, 37, 41); font-family: system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, &quot;Noto Sans&quot;, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;;\">can all changes always be reversed , could there be other ways to bring change, getting to known plants, herbs, shrubs and trees, parts of a plants.</span></p>', '<p style=\"padding: 0px; margin-right: 0px; margin-left: 0px; color: rgb(33, 37, 41); font-family: system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, &quot;Noto Sans&quot;, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;;\">1&nbsp; &nbsp;FOOD</p><p style=\"padding: 0px; margin-right: 0px; margin-left: 0px; color: rgb(33, 37, 41); font-family: system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, &quot;Noto Sans&quot;, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;;\">&nbsp;2&nbsp; &nbsp;COMPONDS OF FOOD</p><p style=\"padding: 0px; margin-right: 0px; margin-left: 0px; color: rgb(33, 37, 41); font-family: system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, &quot;Noto Sans&quot;, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;;\">&nbsp;3&nbsp; &nbsp;SORTING MATERIALS INTO GROUPS</p><p style=\"padding: 0px; margin-right: 0px; margin-left: 0px; color: rgb(33, 37, 41); font-family: system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, &quot;Noto Sans&quot;, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;;\">&nbsp;4&nbsp; &nbsp;SEPARATION OF SUBSTANCES</p><p style=\"padding: 0px; margin-right: 0px; margin-left: 0px; color: rgb(33, 37, 41); font-family: system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, &quot;Noto Sans&quot;, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;;\">&nbsp;5&nbsp; &nbsp;CHANGES AROUND US</p><p style=\"padding: 0px; margin-right: 0px; margin-left: 0px; color: rgb(33, 37, 41); font-family: system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, &quot;Noto Sans&quot;, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;;\">&nbsp;6&nbsp; &nbsp;GETTING TO KNOWN PLANTS</p><p style=\"padding: 0px; margin-right: 0px; margin-left: 0px; color: rgb(33, 37, 41); font-family: system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, &quot;Noto Sans&quot;, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;;\">&nbsp;7&nbsp; &nbsp;BODY MOVEMENTS</p><p style=\"padding: 0px; margin-right: 0px; margin-left: 0px; color: rgb(33, 37, 41); font-family: system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, &quot;Noto Sans&quot;, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;;\">&nbsp;8&nbsp; &nbsp;THE LIVING ORGANISMS AND THEIR SURROUNDING</p><p style=\"padding: 0px; margin-right: 0px; margin-left: 0px; color: rgb(33, 37, 41); font-family: system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, &quot;Noto Sans&quot;, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;;\">&nbsp;9&nbsp; &nbsp;MOTION AND MEASUREMENTS OF DISTANCES&nbsp;</p><p style=\"padding: 0px; margin-right: 0px; margin-left: 0px; color: rgb(33, 37, 41); font-family: system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, &quot;Noto Sans&quot;, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;;\">&nbsp;10&nbsp; &nbsp;LIGHT</p><p style=\"padding: 0px; margin-right: 0px; margin-left: 0px; color: rgb(33, 37, 41); font-family: system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, &quot;Noto Sans&quot;, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;;\">&nbsp;11&nbsp; &nbsp;SHADOW AND REFLECTIONS</p><p style=\"padding: 0px; margin-right: 0px; margin-left: 0px; color: rgb(33, 37, 41); font-family: system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, &quot;Noto Sans&quot;, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;;\">&nbsp;12&nbsp; &nbsp;ELECTRICITY AND CIRCUITS</p><p style=\"padding: 0px; margin-right: 0px; margin-left: 0px; color: rgb(33, 37, 41); font-family: system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, &quot;Noto Sans&quot;, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;;\">&nbsp;13&nbsp; &nbsp;FUN WITH MAGNETS</p><p style=\"padding: 0px; margin-right: 0px; margin-left: 0px; color: rgb(33, 37, 41); font-family: system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, &quot;Noto Sans&quot;, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;;\">&nbsp;14&nbsp; &nbsp;WATER</p><p style=\"padding: 0px; margin-right: 0px; margin-left: 0px; color: rgb(33, 37, 41); font-family: system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, &quot;Noto Sans&quot;, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;;\">&nbsp;15&nbsp; AIR AROUND US</p><p style=\"padding: 0px; margin-right: 0px; margin-left: 0px; color: rgb(33, 37, 41); font-family: system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, &quot;Noto Sans&quot;, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;;\">&nbsp;16&nbsp; &nbsp;GARBAGE IN AND GARBAGE OUT</p><p style=\"padding: 0px; margin-right: 0px; margin-left: 0px; color: rgb(33, 37, 41); font-family: system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, &quot;Noto Sans&quot;, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;;\">&nbsp;17&nbsp; &nbsp;FIBER AND FABRIC.</p>', '', '', '211.png', 'https://navavision.com/video/CHAPTER%202_ONE%20TO%', '', '2021-02-10 05:06:36', '2022-02-05 09:32:54', 1),
(13, 1, 'Science', '2000', 'aaa', 'bbbb', '<p>In science level 1 you will learn - introduction, parts of body, our sense organs, food, water and shelter, my family, caring elders, festivals&nbsp; and celebrations, worship places, - different means of transport, types of vehicals, road safety, first aid, plants around us, types and uses of plants, animals kingdom, domestic and wild animals, our helpers, important places, services in neighbourhood, sun, moon, earth and stars, seasons, good habits, safety habits.<br></p>', '<p><span style=\"line-height: 115%;\">LESSON 1</span><span style=\"line-height: 115%;\">: I\r\nAND MY BODY</span></p><p><span style=\"line-height: 115%;\"><span style=\"line-height: 115%;\">LESSON 2</span><span style=\"line-height: 115%;\">:\r\nOUR NEEDS</span></span></p><p><span style=\"line-height: 115%;\"><span style=\"line-height: 115%;\"><span style=\"line-height: 115%;\">LESSON 3</span><span style=\"line-height: 115%;\">:\r\nMY FAMILY AND OUR CELEBRATIONS</span></span></span></p><p><span style=\"line-height: 115%;\"><span style=\"line-height: 115%;\"><span style=\"line-height: 115%;\"><span style=\"line-height: 115%;\">LESSON 4</span><span style=\"line-height: 115%;\">:\r\nMEANS OF TRANPORT AND ROAD SAFETY</span></span></span></span></p><p><span style=\"line-height: 115%;\"><span style=\"line-height: 115%;\"><span style=\"line-height: 115%;\"><span style=\"line-height: 115%;\"><span style=\"line-height: 115%;\">LESSON 5</span><span style=\"line-height: 115%;\">:\r\nPLANTS AND ANIMALS US</span></span></span></span></span></p><p><span style=\"line-height: 115%;\"><span style=\"line-height: 115%;\"><span style=\"line-height: 115%;\"><span style=\"line-height: 115%;\"><span style=\"line-height: 115%;\"><span style=\"line-height: 115%;\">LESSON 6</span><span style=\"line-height: 115%;\">:\r\nMY NEIGHBORHOOD</span></span></span></span></span></span></p><p><span style=\"line-height: 115%;\"><span style=\"line-height: 115%;\"><span style=\"line-height: 115%;\"><span style=\"line-height: 115%;\"><span style=\"line-height: 115%;\"><span style=\"line-height: 115%;\"><span style=\"line-height: 115%;\">LESSON 7</span><span style=\"line-height: 115%;\">:\r\nTHE EARTH AND THE SKY</span></span></span></span></span></span></span></p><p><span style=\"line-height: 115%;\"><span style=\"line-height: 115%;\"><span style=\"line-height: 115%;\"><span style=\"line-height: 115%;\"><span style=\"line-height: 115%;\"><span style=\"line-height: 115%;\"><span style=\"line-height: 115%;\"><span style=\"line-height: 115%;\">LESSON 8</span><span style=\"line-height: 115%;\">:\r\nGOOD HABITS</span></span></span></span></span></span></span></span><br></p>', '', '', 'g122.png', 'https://navavision.com/video/CHAPTER%202_ONE%20TO%', '', '2021-02-09 10:15:17', '2022-02-05 09:32:54', 1),
(38, 7, 'Grammer', '2000', 'aaa', 'bbb', '<p>In grammer level 7 you will learn kinds of noun, uses of articles, pronouns and possessive adjectives , adjactives, agreement of verb and subject ,preposition: correct use of propositon ,verb: correct use of verb ,tenses ,active and pasive voice ,direct and indirect speech ,the sentences: jumbled words, degrees of comparisions, modals, integrated exercise.<br></p>', '<p>1.&nbsp; &nbsp;NOUN: KINDS OF NOUN</p><p>2.&nbsp; &nbsp;ARTICLES: USES OF ARTICLES</p><p>3.&nbsp; &nbsp;PRONOUNS AND POSSESSIVE ADJECTIVES&nbsp;</p><p>4.&nbsp; &nbsp;ADJACTIVES</p><p>5.&nbsp; &nbsp;AGREEMENT OF VERB AND SUBJECT</p><p>6.&nbsp; &nbsp;PREPOSITION: CORRECT USE OF PROPOSITON</p><p>7.&nbsp; &nbsp;VERB: CORRECT USE OF VERB</p><p>8.&nbsp; &nbsp;TENSES</p><p>9.&nbsp; &nbsp;ACTIVE AND PASIVE VOICE</p><p>10.&nbsp; &nbsp;DIRECT AND INDIRECT SPEECH</p><p>11.&nbsp; &nbsp;THE SENTENCES: JUMBLED WORDS</p><p>12.&nbsp; &nbsp;DEGREES OF COMPARISIONS</p><p>13.&nbsp; &nbsp;MODALS</p><p>14:&nbsp; &nbsp;INTEGRATED EXERCISE</p>', '', '', 'g128.png', 'https://navavision.com/video/CHAPTER%202_ONE%20TO%', '', '2021-02-10 05:12:45', '2022-02-05 09:32:54', 1),
(37, 6, 'Math', '2000', 'aaa', 'bbb', '<p>Knowing numbers, whole numbersplaying with numbers,basic geometrical ideas, understanding elementary shapes, integers, fractions, decimals, data handling, mensuration,algebra, ratio an proportion, symmetry, practival geometry.<br></p>', '<p>1<span style=\"white-space:pre\">	</span>KNOWING NUMBERS</p><p>2<span style=\"white-space:pre\">	</span>WHOLE NUMBERS</p><p>3<span style=\"white-space:pre\">	</span>PLAYING WITH NUMBERS</p><p>4<span style=\"white-space:pre\">	</span>BASIC GEOMETRICAL IDEAS</p><p>5<span style=\"white-space:pre\">	</span>UNDERSTANDING ELEMENTARY SHAPES</p><p>6<span style=\"white-space:pre\">	</span>INTEGERS</p><p>7<span style=\"white-space:pre\">	</span>FRACTIONS</p><p>8<span style=\"white-space:pre\">	</span>DECIMALS</p><p>9<span style=\"white-space:pre\">	</span>DATA HANDLING</p><p>10<span style=\"white-space:pre\">	</span>MENSURATION</p><p>11<span style=\"white-space:pre\">	</span>ALGEBRA</p><p>12<span style=\"white-space:pre\">	</span>RATIO AN PROPORTION</p><p>13<span style=\"white-space:pre\">	</span>SYMMETRY</p><p>14<span style=\"white-space:pre\">	</span>PRACTIVAL GEOMETRY</p>', '', '', '210.png', 'https://navavision.com/video/CHAPTER%202_ONE%20TO%', '', '2021-02-10 05:04:23', '2022-02-05 09:32:54', 1),
(39, 7, 'English', '2000', 'aaa', 'bbb', '<p>In english level 7 you will learn three questions &amp; the squirrel, a gift of chappals &amp; the rebel,&nbsp; gopal and the hilsa fish &amp; the shed, the ashes that made trees bloom &amp; chivvy, quality &amp; trees, expert detectives &amp; mystery of the talking fan, the invention of vita-wonk &amp; dad and the cat and the tree, fire – friend and foe &amp; meadow surprises, a bicycle in good repair &amp; garden snake, the story of cricket.<br></p>', '<p>CHAPTER 1:&nbsp; THREE QUESTIONS &amp; THE SQUIRREL</p><p>CHAPTER 2:&nbsp; A GIFT OF CHAPPALS &amp; THE REBEL</p><p>CHAPTER 3:&nbsp; GOPAL AND THE HILSA FISH &amp; THE SHED</p><p>CHAPTER 4: THE ASHES THAT MADE TREES BLOOM &amp; CHIVVY</p><p>CHAPTER 5: QUALITY &amp; TREES</p><p>CHAPTER 6: EXPERT DETECTIVES &amp; MYSTERY OF THE TALKING FAN</p><p>CHAPTER 7: THE INVENTION OF VITA-WONK &amp; DAD AND THE CAT AND THE TREE</p><p>CHAPTER 8: FIRE – FRIEND AND FOE &amp; MEADOW SURPRISES</p><p>CHAPTER 9: A BICYCLE IN GOOD REPAIR &amp; GARDEN SNAKE</p><p>CHAPTER 10: THE STORY OF CRICKET</p>', '', '', '119.png', 'https://navavision.com/video/CHAPTER%202_ONE%20TO%', '', '2021-02-10 05:16:01', '2022-02-05 09:32:54', 1),
(40, 7, 'Science', '2000', 'aaa', 'bbb', '<p>In science level 7 you will learn nutrition in plants, nutrition in animals, fibre to fabric, heat, acids, bases and salts, physical and chemical changes, weather, climate and adaptions of animals to climate , winds, storms and cyclones, soil, respiration in organisms, transporation in animals and plants , reproduction in plants, motion and time, electric current and its effects, light, forests: our lifeline, waste water story.<br></p>', '<p>LESSON 1: NUTRITION IN PLANTS</p><p>LESSON 2: NUTRITION IN ANIMALS</p><p>LESSON 3: FIBRE TO FABRIC</p><p>LESSON 4: HEAT</p><p>LESSON 5: ACIDS, BASES AND SALTS</p><p>LESSON 6: PHYSICAL AND CHEMICAL CHANGES</p><p>LESSON 7: WEATHER, CLIMATE AND ADAPTIONS OF ANIMALS TO CLIMATE&nbsp;</p><p>LESSON 8: WINDS, STORMS AND CYCLONES</p><p>LESSON 9: SOIL</p><p>LESSON 10: RESPIRATION IN ORGANISMS</p><p>LESSON 11: TRANSPORATION IN ANIMALS AND PLANTS&nbsp;</p><p>LESSON 12: REPRODUCTION IN PLANTS</p><p>LESSON 13: MOTION AND TIME</p><p>LESSON 14: ELECTRIC CURRENT AND ITS EFFECTS</p><p>LESSON 15: LIGHT</p><p>LESSON 16: FORESTS: OUR LIFELINE</p><p>LESSON 17: WASTE WATER STORY</p>', '', '', '212.png', 'https://navavision.com/video/CHAPTER%202_ONE%20TO%', '', '2021-02-10 05:19:06', '2022-02-05 09:32:54', 1),
(14, 1, 'Math', '2000', 'aaa', 'bbb', '<p>In math level 1 you will learn&nbsp; &nbsp;number sense,&nbsp; &nbsp;place value,&nbsp; &nbsp;addition,&nbsp; &nbsp;subtraction,&nbsp; &nbsp;measurements,&nbsp; &nbsp;number sense,&nbsp; &nbsp;tables<br></p>', '<p>1.&nbsp; &nbsp;NUMBER\r\nSENSE</p><p>2.&nbsp; &nbsp;PLACE\r\nVALUE</p><p>3.&nbsp; &nbsp;ADDITION</p><p>4.&nbsp; &nbsp;SUBTRACTION</p><p>5.&nbsp; &nbsp;MEASUREMENTS</p><p>6.&nbsp; &nbsp;NUMBER SENSE</p><p>7.&nbsp; &nbsp;<span style=\"line-height: 115%;\">TABLES</span><span style=\"font-size: 12pt; font-family: &quot;Book Antiqua&quot;, serif;\"><br></span></p>', '', '', '18.png', 'https://navavision.com/video/CHAPTER%202_ONE%20TO%', '', '2021-02-09 10:26:19', '2022-02-05 09:32:54', 1),
(18, 2, 'Grammer', '2000', 'aaa', 'bbb', '<p>In grammer level 2 you will learn&nbsp; noun,&nbsp; common and proper nouns, gender,&nbsp; pronoun,&nbsp; preposition,&nbsp; conjunction, adjectives,&nbsp; tenses,&nbsp; the article,&nbsp; subject and predicate,&nbsp; verb,&nbsp; adverb,&nbsp; numbers.<br></p>', '<p class=\"MsoNormal\"><span style=\"line-height: 115%;\">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;</span><span style=\"font-size: 1rem; line-height: 150%;\">1.<span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; line-height: normal;\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span><span style=\"font-size: 1rem; line-height: 150%;\">TOPIC:\r\nNOUN</span></p><p class=\"MsoNoSpacing\" style=\"margin-left: 0.5in; line-height: 150%;\"><!--[if !supportLists]--><span style=\"line-height: 150%;\">2.<span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; line-height: normal;\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span><!--[endif]--><span style=\"line-height: 150%;\">COMMON\r\nAND PROPER NOUNS<o:p></o:p></span></p><p class=\"MsoNoSpacing\" style=\"margin-left: 0.5in; line-height: 150%;\"><!--[if !supportLists]--><span style=\"line-height: 150%;\">3.<span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; line-height: normal;\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span><!--[endif]--><span style=\"line-height: 150%;\">GENDER:<o:p></o:p></span></p><p class=\"MsoNoSpacing\" style=\"margin-left: 0.5in; line-height: 150%;\"><!--[if !supportLists]--><span style=\"line-height: 150%;\">4.<span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; line-height: normal;\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span><!--[endif]--><span style=\"line-height: 150%;\">PRONOUN\r\n<o:p></o:p></span></p><p class=\"MsoNoSpacing\" style=\"margin-left: 0.5in; line-height: 150%;\"><!--[if !supportLists]--><span style=\"line-height: 150%;\">5.<span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; line-height: normal;\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span><!--[endif]--><span style=\"line-height: 150%;\">PREPOSITION<o:p></o:p></span></p><p class=\"MsoNoSpacing\" style=\"margin-left: 0.5in; line-height: 150%;\"><!--[if !supportLists]--><span style=\"line-height: 150%;\">6.<span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; line-height: normal;\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span><!--[endif]--><span style=\"line-height: 150%;\">CONJUNCTION<o:p></o:p></span></p><p class=\"MsoNoSpacing\" style=\"margin-left: 0.5in; line-height: 150%;\"><!--[if !supportLists]--><span style=\"line-height: 150%;\">7.<span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; line-height: normal;\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span><!--[endif]--><span style=\"line-height: 150%;\">ADJECTIVES:<o:p></o:p></span></p><p class=\"MsoNoSpacing\" style=\"margin-left: 0.5in; line-height: 150%;\"><!--[if !supportLists]--><span style=\"line-height: 150%;\">8.<span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; line-height: normal;\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span><!--[endif]--><span style=\"line-height: 150%;\">TENSES<o:p></o:p></span></p><p class=\"MsoNoSpacing\" style=\"margin-left: 0.5in; line-height: 150%;\"><!--[if !supportLists]--><span style=\"line-height: 150%;\">9.<span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; line-height: normal;\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span><!--[endif]--><span style=\"line-height: 150%;\">THE\r\nARTICLE<o:p></o:p></span></p><p class=\"MsoNoSpacing\" style=\"margin-left: 0.5in; line-height: 150%;\"><!--[if !supportLists]--><span style=\"line-height: 150%;\">10.<span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; line-height: normal;\">&nbsp; </span></span><!--[endif]--><span style=\"line-height: 150%;\">SUBJECT\r\nAND PREDICATE<o:p></o:p></span></p><p class=\"MsoNoSpacing\" style=\"margin-left: 0.5in; line-height: 150%;\"><!--[if !supportLists]--><span style=\"line-height: 150%;\">11.<span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; line-height: normal;\">&nbsp; </span></span><!--[endif]--><span style=\"line-height: 150%;\">VERB<o:p></o:p></span></p><p class=\"MsoNoSpacing\" style=\"margin-left: 0.5in; line-height: 150%;\"><!--[if !supportLists]--><span style=\"line-height: 150%;\">12.<span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; line-height: normal;\">&nbsp; </span></span><!--[endif]--><span style=\"line-height: 150%;\">ADVERB<o:p></o:p></span></p><p>\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n</p><p class=\"MsoNoSpacing\" style=\"margin-left: 0.5in; line-height: 150%;\"><!--[if !supportLists]--><span style=\"line-height: 150%;\">13.<span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; line-height: normal;\">&nbsp; </span></span><!--[endif]--><span style=\"line-height: 150%;\">NUMBERS<font face=\"Book Antiqua, serif\"><span style=\"font-size: 12pt;\"><o:p></o:p></span></font></span></p>', '', '', 'g123.png', 'https://navavision.com/video/CHAPTER%202_ONE%20TO%', '', '2021-02-09 10:30:22', '2022-02-05 09:32:54', 1);
INSERT INTO `course_levels` (`level_id`, `course_id`, `level`, `price`, `text_link`, `work_book_link`, `description`, `Syllabus`, `level_syllabus_file_name`, `level_syllabus_file_type`, `level_img_file_name`, `sample_video_file_name`, `sample_video_file_type`, `created_at`, `updated_at`, `type_id`) VALUES
(19, 2, 'English', '2000', 'aaa', 'bbb', '<p><span style=\"color: rgb(33, 37, 41); font-family: system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, &quot;Noto Sans&quot;, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;;\">In english level 2 you will learn first day at school haldi’s adventure,&nbsp; I am lucky. I want, a smile the wind and the sun, a smile the wind and the sun, zoo manners funny bunny, mr. Nobody curlylocks and the three bears, on my blackboard I can draw&nbsp; make it shorter, I am the music man the mumbai musicians, granny granny please comb my hair the magic porridge pot, strange talk the grasshopper and the ant.</span><br></p>', '<p class=\"MsoNoSpacing\" style=\"padding: 0px; margin-right: 0px; margin-left: 0px;\"><span style=\"font-family: Arial;\">UNIT 1:&nbsp; &nbsp; FIRST DAY AT SCHOOL&nbsp;HALDI’S ADVENTURE</span></p><p class=\"MsoNoSpacing\" style=\"padding: 0px; margin-right: 0px; margin-left: 0px;\"><span style=\"font-family: Arial;\">UNIT 2</span><span style=\"font-family: Arial; font-size: 1rem;\">:</span><span style=\"font-family: Arial; font-size: 1rem;\">&nbsp; &nbsp;I AM LUCKY.&nbsp;I WANT</span></p><p class=\"MsoNoSpacing\" style=\"padding: 0px; margin-right: 0px; margin-left: 0px;\"><span style=\"font-family: Arial;\">UNIT 3</span><span style=\"font-family: Arial; font-size: 1rem;\">:</span><span style=\"font-family: Arial; font-size: 1rem;\">&nbsp;&nbsp;A SMILE&nbsp;THE WIND AND THE SUN</span></p><p class=\"MsoNoSpacing\" style=\"padding: 0px; margin-right: 0px; margin-left: 0px;\"><span style=\"font-family: Arial;\">UNIT 4</span><span style=\"font-family: Arial; font-size: 1rem;\">:</span><span style=\"font-family: Arial; font-size: 1rem;\">&nbsp;&nbsp;A SMILE&nbsp;THE WIND AND THE SUN</span></p><p class=\"MsoNoSpacing\" style=\"padding: 0px; margin-right: 0px; margin-left: 0px;\"><span style=\"font-family: Arial;\">UNIT 5</span><span style=\"font-family: Arial; font-size: 1rem;\">:</span><span style=\"font-family: Arial; font-size: 1rem;\">&nbsp; &nbsp;ZOO MANNERS&nbsp;FUNNY BUNNY</span></p><p class=\"MsoNoSpacing\" style=\"padding: 0px; margin-right: 0px; margin-left: 0px;\"><span style=\"font-family: Arial;\">UNIT 6</span><span style=\"font-family: Arial; font-size: 1rem;\">:</span><span style=\"font-family: Arial; font-size: 1rem;\">&nbsp; &nbsp;&nbsp;NOBODY&nbsp;CURLYLOCKS AND THE THREE BEARS</span></p><p class=\"MsoNoSpacing\" style=\"padding: 0px; margin-right: 0px; margin-left: 0px;\"><span style=\"font-family: Arial;\">UNIT 7</span><span style=\"font-family: Arial; font-size: 1rem;\">:</span><span style=\"font-family: Arial; font-size: 1rem;\">&nbsp; &nbsp;ON MY BLACKBOARD I CAN DRAW&nbsp;MAKE IT SHORTER</span></p><p class=\"MsoNoSpacing\" style=\"padding: 0px; margin-right: 0px; margin-left: 0px;\"><span style=\"font-family: Arial;\">UNIT 8</span><span style=\"font-family: Arial; font-size: 1rem;\">:</span><span style=\"font-family: Arial; font-size: 1rem;\">&nbsp; &nbsp;I AM THE MUSIC MAN&nbsp;THE MUMBAI MUSICIANS&nbsp;</span></p><p class=\"MsoNoSpacing\" style=\"padding: 0px; margin-right: 0px; margin-left: 0px;\"><span style=\"font-family: Arial;\">UNIT 9</span><span style=\"font-family: Arial; font-size: 1rem;\">:</span><span style=\"font-family: Arial; font-size: 1rem;\">&nbsp; &nbsp;&nbsp;GRANNY GRANNY PLEASE COMB MY HAIR&nbsp;THE MAGIC PORRIDGE POT</span></p><p class=\"MsoNoSpacing\" style=\"padding: 0px; margin-right: 0px; margin-left: 0px;\"><o:p style=\"padding: 0px; margin: 0px;\"></o:p></p><p class=\"MsoNoSpacing\" style=\"padding: 0px; margin-right: 0px; margin-left: 0px;\"><o:p style=\"padding: 0px; margin: 0px;\"></o:p></p><p class=\"MsoNoSpacing\" style=\"padding: 0px; margin-right: 0px; margin-left: 0px;\">UNIT 10<span style=\"font-family: Arial; font-size: 1rem;\">:</span><span style=\"font-size: 1rem;\">&nbsp; &nbsp;STRANGE TALK&nbsp;THE GRASSHOPPER AND THE ANT</span></p>', '', '', '110.png', 'https://navavision.com/video/CHAPTER%202_ONE%20TO%', '', '2021-02-09 10:38:29', '2022-02-05 09:32:54', 1),
(20, 2, 'Science', '2000', 'aaa', 'bbb', '<p>In science level 2 you will learn about sources of water, storage of water, clean and dirty water, changing of water forms, water cycle, sources of food, varities of food, good eating habits, types of clothes, clothes in different season, formation of rocks, types of rocks, types of houses, kutcha and pucca houses, different land forms, directions, shadows, - day and night, am, pm.<br></p>', '<p><span style=\"line-height: 115%; font-family: Arial;\">LESSON 1</span><span style=\"line-height: 115%; font-family: Arial;\">:\r\nWATER</span></p><p><span style=\"line-height: 115%;\"><span style=\"line-height: 115%; font-family: Arial;\">LESSON 2</span><span style=\"line-height: 115%; font-family: Arial;\">:\r\nFORMS OF WATER</span></span></p><p><span style=\"line-height: 115%;\"><span style=\"line-height: 115%;\"><span style=\"line-height: 115%; font-family: Arial;\">LESSON 3</span><span style=\"line-height: 115%; font-family: Arial;\">:\r\nOUR FOOD</span></span></span></p><p><span style=\"line-height: 115%;\"><span style=\"line-height: 115%;\"><span style=\"line-height: 115%;\"><span style=\"line-height: 115%; font-family: Arial;\">LESSON 4</span><span style=\"line-height: 115%; font-family: Arial;\">:\r\nCLOTHES</span></span></span></span></p><p><span style=\"line-height: 115%;\"><span style=\"line-height: 115%;\"><span style=\"line-height: 115%;\"><span style=\"line-height: 115%;\"><span style=\"line-height: 115%; font-family: Arial;\">LESSON 5</span><span style=\"line-height: 115%; font-family: Arial;\">:\r\nROCKS</span></span></span></span></span></p><p><span style=\"line-height: 115%;\"><span style=\"line-height: 115%;\"><span style=\"line-height: 115%;\"><span style=\"line-height: 115%;\"><span style=\"line-height: 115%;\"><span style=\"line-height: 115%; font-family: Arial;\">LESSON 6</span><span style=\"line-height: 115%; font-family: Arial;\">:\r\nHOUSES</span></span></span></span></span></span></p><p><span style=\"line-height: 115%;\"><span style=\"line-height: 115%;\"><span style=\"line-height: 115%;\"><span style=\"line-height: 115%;\"><span style=\"line-height: 115%;\"><span style=\"line-height: 115%;\"><span style=\"line-height: 115%; font-family: Arial;\">LESSON 7</span><span style=\"line-height: 115%; font-family: Arial;\">:\r\nLAND FORMS</span></span></span></span></span></span></span></p><p><span style=\"line-height: 115%;\"><span style=\"line-height: 115%;\"><span style=\"line-height: 115%;\"><span style=\"line-height: 115%;\"><span style=\"line-height: 115%;\"><span style=\"line-height: 115%;\"><span style=\"line-height: 115%;\"><span style=\"line-height: 115%; font-family: Arial;\">LESSON 8</span><span style=\"line-height: 115%; font-family: Arial;\">:\r\nSUN LIGHT AND SHADOW</span></span></span></span></span></span></span></span></p><p><span style=\"line-height: 115%;\"><span style=\"line-height: 115%;\"><span style=\"line-height: 115%;\"><span style=\"line-height: 115%;\"><span style=\"line-height: 115%;\"><span style=\"line-height: 115%;\"><span style=\"line-height: 115%;\"><span style=\"line-height: 115%;\"><span style=\"line-height: 115%; font-family: Arial;\">LESSON9</span><span style=\"line-height: 115%; font-family: Arial;\">:\r\nTIME</span></span></span></span></span></span></span></span></span><br></p>', '', '', '27.png', 'https://navavision.com/video/CHAPTER%202_ONE%20TO%', '', '2021-02-09 10:45:53', '2022-02-05 09:32:54', 1),
(21, 2, 'Math', '2000', 'aaa', 'bbb', '<p>In math level 2 you will learn number sense, place value, addition, subtraction, multiplication, division, fractions, patterns, measurements.<br></p>', '<p><span style=\"font-family: Arial;\">1&nbsp; &nbsp;NUMBER\r\nSENSE</span></p><p><span style=\"font-family: Arial;\">2&nbsp; &nbsp;PLACE\r\nVALUE</span></p><p><span style=\"font-family: Arial;\">3&nbsp; &nbsp;ADDITION</span></p><p><span style=\"line-height: 115%; font-family: Arial;\">4&nbsp; &nbsp;SUBTRACTION</span></p><p><span style=\"line-height: 115%;\"><span style=\"font-family: Arial;\">5&nbsp; &nbsp;</span><span style=\"line-height: 115%; font-family: Arial;\">MULTIPLICATION</span></span></p><p><span style=\"line-height: 115%;\"><span style=\"line-height: 115%;\"><span style=\"font-family: Arial;\">6&nbsp; &nbsp;</span><span style=\"line-height: 115%; font-family: Arial;\">DIVISION</span></span></span></p><p><span style=\"line-height: 115%;\"><span style=\"line-height: 115%;\"><span style=\"line-height: 115%;\"><span style=\"font-family: Arial;\">7&nbsp; &nbsp;</span><span style=\"line-height: 115%; font-family: Arial;\">FRACTIONS</span></span></span></span></p><p><span style=\"line-height: 115%;\"><span style=\"line-height: 115%;\"><span style=\"line-height: 115%;\"><span style=\"line-height: 115%;\"><span style=\"font-family: Arial;\">8&nbsp;&nbsp;</span><span style=\"line-height: 115%; font-family: Arial;\">PATTERNS</span></span></span></span></span></p><p><span style=\"line-height: 115%;\"><span style=\"line-height: 115%;\"><span style=\"line-height: 115%;\"><span style=\"line-height: 115%;\"><span style=\"line-height: 115%;\"><span style=\"font-family: Arial;\">9&nbsp; &nbsp;</span><span style=\"line-height: 115%; font-family: Arial;\">MEASUREMENTS.</span></span></span></span></span></span><span style=\"font-family: &quot;Book Antiqua&quot;, serif; font-size: 12pt;\"><br></span></p>', '', '', '111.png', 'https://navavision.com/video/CHAPTER%202_ONE%20TO%', '', '2021-02-09 10:50:47', '2022-02-05 09:32:54', 1),
(22, 3, 'Grammer', '2000', 'aaa', 'bbb', '<p>In grammer level 3 you will learn&nbsp; sentence and punctuation, subject and predicate, the noun, pronoun, indefinite, pronouns, preposition, conjunction, adverb, adverb of manner,&nbsp; adverb of time,&nbsp; adjectives,&nbsp; adjective of quality,&nbsp; adjective of quantity,&nbsp; tenses and their uses,&nbsp; affixes,&nbsp; verb,&nbsp; antonyms: opposite words,&nbsp; synonyms: similar meanings<br></p>', '<p class=\"MsoNoSpacing\" style=\"margin-left: 0.5in; line-height: 150%;\"><!--[if !supportLists]--><span style=\"line-height: 150%;\"><span style=\"font-family: Arial;\">1.</span><span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; line-height: normal; font-family: Arial;\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span><!--[endif]--><span style=\"line-height: 150%;\">SENTENCE\r\nAND PUNCTUATION<o:p></o:p></span></p><p class=\"MsoNoSpacing\" style=\"margin-left: 0.5in; line-height: 150%;\"><!--[if !supportLists]--><span style=\"line-height: 150%;\">2.<span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; line-height: normal;\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span><!--[endif]--><span style=\"line-height: 150%;\">SUBJECT\r\nAND PREDICATE<o:p></o:p></span></p><p class=\"MsoNoSpacing\" style=\"margin-left: 0.5in; line-height: 150%;\"><!--[if !supportLists]--><span style=\"line-height: 150%;\">3.<span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; line-height: normal;\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span><!--[endif]--><span style=\"line-height: 150%;\">THE\r\nNOUN<o:p></o:p></span></p><p class=\"MsoNoSpacing\" style=\"margin-left: 0.5in; line-height: 150%;\"><!--[if !supportLists]--><span style=\"line-height: 150%;\">4.<span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; line-height: normal;\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span><!--[endif]--><span style=\"line-height: 150%;\">PRONOUN<o:p></o:p></span></p><p class=\"MsoNoSpacing\" style=\"margin-left: 0.5in; line-height: 150%;\"><!--[if !supportLists]--><span style=\"line-height: 150%;\">5.<span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; line-height: normal;\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span><!--[endif]--><span style=\"line-height: 150%;\">INDEFINITE\r\nPRONOUNS<o:p></o:p></span></p><p class=\"MsoNoSpacing\" style=\"margin-left: 0.5in; line-height: 150%;\"><!--[if !supportLists]--><span style=\"line-height: 150%;\">6.<span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; line-height: normal;\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span><!--[endif]--><span style=\"line-height: 150%;\">PREPOSITION<o:p></o:p></span></p><p class=\"MsoNoSpacing\" style=\"margin-left: 0.5in; line-height: 150%;\"><!--[if !supportLists]--><span style=\"line-height: 150%;\">7.<span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; line-height: normal;\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span><!--[endif]--><span style=\"line-height: 150%;\">CONJUNCTION<o:p></o:p></span></p><p class=\"MsoNoSpacing\" style=\"margin-left: 0.5in; line-height: 150%;\"><!--[if !supportLists]--><span style=\"line-height: 150%;\">8.<span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; line-height: normal;\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span><!--[endif]--><span style=\"line-height: 150%;\">ADVERB<o:p></o:p></span></p><p class=\"MsoNoSpacing\" style=\"margin-left: 0.5in; line-height: 150%;\"><!--[if !supportLists]--><span style=\"line-height: 150%;\">9.<span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; line-height: normal;\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span><!--[endif]--><span style=\"line-height: 150%;\">ADVERB\r\nOF MANNER: <o:p></o:p></span></p><p class=\"MsoNoSpacing\" style=\"margin-left: 0.5in; line-height: 150%;\"><!--[if !supportLists]--><span style=\"line-height: 150%;\">10.<span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; line-height: normal;\">&nbsp; </span></span><!--[endif]--><span style=\"line-height: 150%;\">ADVERB\r\nOF TIME<o:p></o:p></span></p><p class=\"MsoNoSpacing\" style=\"margin-left: 0.5in; line-height: 150%;\"><!--[if !supportLists]--><span style=\"line-height: 150%;\">11.<span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; line-height: normal;\">&nbsp; </span></span><!--[endif]--><span style=\"line-height: 150%;\">ADJECTIVES<o:p></o:p></span></p><p class=\"MsoNoSpacing\" style=\"margin-left: 0.5in; line-height: 150%;\"><!--[if !supportLists]--><span style=\"line-height: 150%;\">12.<span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; line-height: normal;\">&nbsp; </span></span><!--[endif]--><span style=\"line-height: 150%;\">ADJECTIVE\r\nOF QUALITY<o:p></o:p></span></p><p class=\"MsoNoSpacing\" style=\"margin-left: 0.5in; line-height: 150%;\"><!--[if !supportLists]--><span style=\"line-height: 150%;\">13.<span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; line-height: normal;\">&nbsp; </span></span><!--[endif]--><span style=\"line-height: 150%;\">ADJECTIVE\r\nOF QUANTITY<o:p></o:p></span></p><p class=\"MsoNoSpacing\" style=\"margin-left: 0.5in; line-height: 150%;\"><!--[if !supportLists]--><span style=\"line-height: 150%;\">14.<span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; line-height: normal;\">&nbsp; </span></span><!--[endif]--><span style=\"line-height: 150%;\">TENSES\r\nAND THEIR USES<o:p></o:p></span></p><p class=\"MsoNoSpacing\" style=\"margin-left: 0.5in; line-height: 150%;\"><!--[if !supportLists]--><span style=\"line-height: 150%;\">15.<span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; line-height: normal;\">&nbsp; </span></span><!--[endif]--><span style=\"line-height: 150%;\">AFFIXES<o:p></o:p></span></p><p class=\"MsoNoSpacing\" style=\"margin-left: 0.5in; line-height: 150%;\"><!--[if !supportLists]--><span style=\"line-height: 150%;\">16.<span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; line-height: normal;\">&nbsp; </span></span><!--[endif]--><span style=\"line-height: 150%;\">VERB<o:p></o:p></span></p><p class=\"MsoNoSpacing\" style=\"margin-left: 0.5in; line-height: 150%;\"><!--[if !supportLists]--><span style=\"line-height: 150%;\">17.<span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; line-height: normal;\">&nbsp; </span></span><!--[endif]--><span style=\"line-height: 150%;\">ANTONYMS:\r\nOPPOSITE WORDS<o:p></o:p></span></p><p>\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n</p><p class=\"MsoNoSpacing\" style=\"margin-left: 0.5in; line-height: 150%;\"><!--[if !supportLists]--><span style=\"line-height: 150%;\">18.<span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; line-height: normal;\">&nbsp; </span></span><!--[endif]--><span style=\"line-height: 150%;\">SYNONYMS:\r\nSIMILAR MEANINGS<font face=\"Book Antiqua, serif\"><span style=\"font-size: 12pt;\"><o:p></o:p></span></font></span></p>', '', '', 'g124.png', 'https://navavision.com/video/CHAPTER%202_ONE%20TO%', '', '2021-02-09 10:55:50', '2022-02-05 09:32:54', 1),
(23, 3, 'English', '2000', 'aaa', 'bbb', '<p><span style=\"color: rgb(33, 37, 41); font-family: system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, &quot;Noto Sans&quot;, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;;\">In english level 3 you will&nbsp; learn&nbsp; good morning, bird talk, little by little, sea song, the balloon man, trains, puppy and I, what’s in the mailbox,don’t tell,how creatures move.</span><br></p>', '<p>UNIT 1: POEM: GOOD MORNING</p><p>UNIT 2: POEM: BIRD TALK</p><p>UNIT 3: POEM: LITTLE BY LITTLE</p><p>UNIT 4: POEM: SEA SONG</p><p>UNIT 5: POEM: THE BALLOON MAN</p><p>UNIT 6: POEM: TRAINS</p><p>UNIT 7: POEM: PUPPY AND I</p><p>UNIT 8: POEM: WHAT’S IN THE MAILBOX</p><p>UNIT 9: POEM: DON’T TELL</p><p>UNIT 10: POEM: HOW CREATURES MOVE</p>', '', '', '113.png', 'https://navavision.com/video/CHAPTER%202_ONE%20TO%', '', '2021-02-09 11:08:43', '2022-02-05 09:32:54', 0),
(24, 3, 'Science', '2000', 'aaa', 'bbb', '<p>In science level 3 you will learn locomotion of animals, habitat, uses of animals types of plants, parts of the plants, types of leaves, parts of leaves, flowers sources of water, uses of water, storage of water self hygine,&nbsp; clean homes, clean neighbourhood habitat, characteristics of birds,&nbsp; beaks and wings, types of insects types of occupations, indoor games, outdoor games post office, news papers, internet ,<br></p>', '<p><span style=\"line-height: 115%;\">LESSON 1</span><span style=\"line-height: 115%;\">:\r\nANIMALS</span></p><p><span style=\"line-height: 115%;\"><span style=\"line-height: 115%;\">LESSON 2</span><span style=\"line-height: 115%;\">:\r\nPLANTS IN THE SURROUNDINGS</span></span></p><p><span style=\"line-height: 115%;\"><span style=\"line-height: 115%;\"><span style=\"line-height: 115%;\">LESSON 3</span><span style=\"line-height: 115%;\">:\r\nWATER</span></span></span></p><p><span style=\"line-height: 115%;\"><span style=\"line-height: 115%;\"><span style=\"line-height: 115%;\"><span style=\"line-height: 115%;\">LESSON 4</span><span style=\"line-height: 115%;\">:\r\nCLEANLINESS, HEALTH AND HYGIENE</span></span></span></span></p><p><span style=\"line-height: 115%;\"><span style=\"line-height: 115%;\"><span style=\"line-height: 115%;\"><span style=\"line-height: 115%;\"><span style=\"line-height: 115%;\">LESSON 5</span><span style=\"line-height: 115%;\">:\r\nBIRDS AND INSECTS</span></span></span></span></span></p><p><span style=\"line-height: 115%;\"><span style=\"line-height: 115%;\"><span style=\"line-height: 115%;\"><span style=\"line-height: 115%;\"><span style=\"line-height: 115%;\"><span style=\"line-height: 115%;\">LESSON 6</span><span style=\"line-height: 115%;\">: OCCUPATIONS</span></span></span></span></span></span></p><p><span style=\"line-height: 115%;\"><span style=\"line-height: 115%;\"><span style=\"line-height: 115%;\"><span style=\"line-height: 115%;\"><span style=\"line-height: 115%;\"><span style=\"line-height: 115%;\"><span style=\"line-height: 115%;\">LESSON 7</span><span style=\"line-height: 115%;\">:\r\nGAMES WE PLAY</span></span></span></span></span></span></span></p><p><span style=\"line-height: 115%;\"><span style=\"line-height: 115%;\"><span style=\"line-height: 115%;\"><span style=\"line-height: 115%;\"><span style=\"line-height: 115%;\"><span style=\"line-height: 115%;\"><span style=\"line-height: 115%;\"><span style=\"line-height: 115%;\">LESSON 8</span><span style=\"line-height: 115%;\">:\r\nMEANS OF COMMUNICATION</span></span></span></span></span></span></span></span></p>', '', '', '28.png', 'https://navavision.com/video/CHAPTER%202_ONE%20TO%', '', '2021-02-09 11:15:12', '2022-02-05 09:32:54', 0),
(25, 3, 'Math', '2000', 'aaa', 'bbb', '<p>In math level 3 you will learn place value, addition, subtraction, multiplication, division, measurements, patterns, fractions, money, time.<br></p>', '<p>1&nbsp; &nbsp; ADDITION </p><p>2&nbsp; &nbsp;SUBTRACTION</p><p>3&nbsp; &nbsp;MULTIPLICATION</p><p>4&nbsp; &nbsp;DIVISION</p><p>5&nbsp; &nbsp;MEASUREMENTS</p><p>6&nbsp; &nbsp;PATTERNS&nbsp;</p><p>7&nbsp; FRACTIONS</p><p>8&nbsp; &nbsp;MONEY</p><p>9&nbsp; &nbsp;TIME.<br></p>', '', '', '114.png', 'https://navavision.com/video/CHAPTER%202_ONE%20TO%', '', '2021-02-09 11:19:42', '2022-02-05 09:32:54', 0),
(26, 4, 'Grammer', '2000', 'aaa', 'bbb', '<p>In Grammer level 4 you will learn the noun: kinds of nouns,&nbsp; &nbsp; &nbsp; singular and plural possessive nouns, pronoun:,&nbsp; &nbsp; &nbsp; interrogative pronouns, relative pronouns, preposition, adverbs, adjectives, conjunction,&nbsp; types of conjunction, tenses and their uses, direct and indirect speech,&nbsp; antonyms,&nbsp; synonyms,&nbsp; the article,&nbsp; sentence and punctuation, active and passive voice,&nbsp; affixes<br></p>', '<p class=\"MsoNoSpacing\" style=\"margin-left: 49.5pt; line-height: 150%;\"><!--[if !supportLists]--><span style=\"line-height: 150%;\">1.<span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; line-height: normal;\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span><!--[endif]--><span style=\"line-height: 150%;\">THE\r\nNOUN: KINDS OF NOUNS<o:p></o:p></span></p><p class=\"MsoNoSpacing\" style=\"margin-left: 49.5pt; line-height: 150%;\"><!--[if !supportLists]--><span style=\"line-height: 150%;\">2.<span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; line-height: normal;\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span><!--[endif]--><span style=\"line-height: 150%;\">SINGULAR\r\nAND PLURAL POSSESSIVE NOUNS:&nbsp; <o:p></o:p></span></p><p class=\"MsoNoSpacing\" style=\"margin-left: 49.5pt; line-height: 150%;\"><!--[if !supportLists]--><span style=\"line-height: 150%;\">3.<span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; line-height: normal;\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span><!--[endif]--><span style=\"line-height: 150%;\">PRONOUN:<o:p></o:p></span></p><p class=\"MsoNoSpacing\" style=\"margin-left: 49.5pt; line-height: 150%;\"><!--[if !supportLists]--><span style=\"line-height: 150%;\">4.<span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; line-height: normal;\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span><!--[endif]--><span style=\"line-height: 150%;\">INTERROGATIVE\r\nPRONOUNS, RELATIVE PRONOUNS, <o:p></o:p></span></p><p class=\"MsoNoSpacing\" style=\"margin-left: 49.5pt; line-height: 150%;\"><!--[if !supportLists]--><span style=\"line-height: 150%;\">5.<span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; line-height: normal;\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span><!--[endif]--><span style=\"line-height: 150%;\">PREPROSITION<o:p></o:p></span></p><p class=\"MsoNoSpacing\" style=\"margin-left: 49.5pt; line-height: 150%;\"><!--[if !supportLists]--><span style=\"line-height: 150%;\">6.<span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; line-height: normal;\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span><!--[endif]--><span style=\"line-height: 150%;\">ADVERBS<o:p></o:p></span></p><p class=\"MsoNoSpacing\" style=\"margin-left: 49.5pt; line-height: 150%;\"><!--[if !supportLists]--><span style=\"line-height: 150%;\">7.<span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; line-height: normal;\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span><!--[endif]--><span style=\"line-height: 150%;\">ADJECTIVES<o:p></o:p></span></p><p class=\"MsoNoSpacing\" style=\"margin-left: 49.5pt; line-height: 150%;\"><!--[if !supportLists]--><span style=\"line-height: 150%;\">8.<span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; line-height: normal;\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span><!--[endif]--><span style=\"line-height: 150%;\">CONJUNCTION:&nbsp; TYPES OF CONJUNCTION<o:p></o:p></span></p><p class=\"MsoNoSpacing\" style=\"margin-left: 49.5pt; line-height: 150%;\"><!--[if !supportLists]--><span style=\"line-height: 150%;\">9.<span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; line-height: normal;\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span><!--[endif]--><span style=\"line-height: 150%;\">TENSES\r\nAND THEIR USES:<o:p></o:p></span></p><p class=\"MsoNoSpacing\" style=\"margin-left: 49.5pt; line-height: 150%;\"><!--[if !supportLists]--><span style=\"line-height: 150%;\">10.<span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; line-height: normal;\">&nbsp; </span></span><!--[endif]--><span style=\"line-height: 150%;\">DIRECT\r\nAND INDIRECT SPEECH<o:p></o:p></span></p><p class=\"MsoNoSpacing\" style=\"margin-left: 49.5pt; line-height: 150%;\"><!--[if !supportLists]--><span style=\"line-height: 150%;\">11.<span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; line-height: normal;\">&nbsp; </span></span><!--[endif]--><span style=\"line-height: 150%;\">ANTONYMS<o:p></o:p></span></p><p class=\"MsoNoSpacing\" style=\"margin-left: 49.5pt; line-height: 150%;\"><!--[if !supportLists]--><span style=\"line-height: 150%;\">12.<span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; line-height: normal;\">&nbsp; </span></span><!--[endif]--><span style=\"line-height: 150%;\">SYNONYMS:<o:p></o:p></span></p><p class=\"MsoNoSpacing\" style=\"margin-left: 49.5pt; line-height: 150%;\"><!--[if !supportLists]--><span style=\"line-height: 150%;\">13.<span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; line-height: normal;\">&nbsp; </span></span><!--[endif]--><span style=\"line-height: 150%;\">THE\r\nARTICLE<o:p></o:p></span></p><p class=\"MsoNoSpacing\" style=\"margin-left: 49.5pt; line-height: 150%;\"><!--[if !supportLists]--><span style=\"line-height: 150%;\">14.<span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; line-height: normal;\">&nbsp; </span></span><!--[endif]--><span style=\"line-height: 150%;\">SENTENCE\r\nAND PUNCTUATION: <o:p></o:p></span></p><p class=\"MsoNoSpacing\" style=\"margin-left: 49.5pt; line-height: 150%;\"><!--[if !supportLists]--><span style=\"line-height: 150%;\">15.<span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; line-height: normal;\">&nbsp; </span></span><!--[endif]--><span style=\"line-height: 150%;\">ACTIVE\r\nAND PASSIVE VOICE<o:p></o:p></span></p><p>\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n</p><p class=\"MsoNoSpacing\" style=\"margin-left: 49.5pt; line-height: 150%;\"><!--[if !supportLists]--><span style=\"line-height: 150%;\">16.<span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; line-height: normal;\">&nbsp; </span></span><!--[endif]--><span style=\"line-height: 150%;\">AFFIXES<font face=\"Book Antiqua, serif\"><span style=\"font-size: 12pt;\"><o:p></o:p></span></font></span></p>', '', '', 'g125.png', 'https://navavision.com/video/CHAPTER%202_ONE%20TO%', '', '2021-02-09 11:27:44', '2022-02-05 09:32:54', 0),
(27, 4, 'English', '2000', 'aaa', 'bbb', '<br><p>In english level 4 you will learn ,Wake up!,Neha’s alarm clock, Noses,The little fir tree, Run!Nasruddin’s aim, Why?Alice in wonderland, Don’t be afraid of the dark,Helen keller, The donkey,I had a little pony, the milkman’s cow, Hiawatha,The scholar’s mother tongue, A watering rhyme,The givingtree, Books Going to buy a book,The naughty boy.</p>', '<p><span style=\"line-height: 115%;\">Unit 1:&nbsp; &nbsp;</span>Wake Up!,&nbsp;Neha’s Alarm Clock</p><p>UNIT 2:&nbsp; <span style=\"white-space:pre\">	</span>NOSES, THE LITTLE FIR TREE</p><p>UNIT 3:&nbsp; <span style=\"white-space:pre\">	</span>RUN!, NASRUDDIN’S AIM</p><p>UNIT 4:&nbsp; <span style=\"white-space:pre\">	</span>WHY?, ALICE IN WONDERLAND</p><p>UNIT 5:&nbsp; &nbsp; &nbsp;DON’T BE AFRAID OF THE DARK, HELEN KELLER</p><p>UNIT 6:&nbsp; <span style=\"white-space:pre\">	</span>THE DONKEY, I HAD A LITTLE PONY, THE MILKMAN’S COW</p><p>UNIT 7:&nbsp; <span style=\"white-space:pre\">	</span>HIAWATHA, THE SCHOLAR’S MOTHER TONGUE</p><p>UNIT 8:&nbsp; <span style=\"white-space:pre\">	</span>A WATERING RHYME, THE GIVING TREE</p><p>UNIT 9:&nbsp; <span style=\"white-space:pre\">	</span>BOOKS, GOING TO BUY A BOOK</p><p>UNIT 10:&nbsp; <span style=\"white-space:pre\">	</span>THE NAUGHTY BOY.</p>', '', '', '115.png', 'https://navavision.com/video/CHAPTER%202_ONE%20TO%', '', '2021-02-09 11:37:14', '2022-02-05 09:32:54', 0),
(28, 4, 'Science', '2000', 'aaa', 'bbb', '<p>In science level 4 you will learn adaptation of plants, adaptation in animals, plants and animals, unique characterastics and features of animals, - digestive system, circulatary system, respiratorty system, execetary system, - minirals, protiens, carbohydrates, fats, defeciency of nutrients, balanced diet, good eating habits, process of digestion, absorbtion, excretion, - our galaxy ,solar system,earth, revolution and rotation, different kinds of force, work, sorces of energy, states of matter, solutions, animals that give birth, animals that lay eggs, types of reproduction.<br></p>', '<p><span style=\"line-height: 115%;\">LESSON 1</span><span style=\"line-height: 115%;\">:\r\nPLANTS AND ANIMALS LIFE</span></p><p><span style=\"line-height: 115%;\"><span style=\"line-height: 115%;\">LESSON 2</span><span style=\"line-height: 115%;\">:\r\nHUMAN BODY</span></span></p><p><span style=\"line-height: 115%;\"><span style=\"line-height: 115%;\"><span style=\"line-height: 115%;\">LESSON 3</span><span style=\"line-height: 115%;\">:\r\nFOOD AND NUTRITION</span></span></span></p><p><span style=\"line-height: 115%;\"><span style=\"line-height: 115%;\"><span style=\"line-height: 115%;\"><span style=\"line-height: 115%;\">LESSON 4</span><span style=\"line-height: 115%;\">:\r\nDIGESTION</span></span></span></span></p><p><span style=\"line-height: 115%;\"><span style=\"line-height: 115%;\"><span style=\"line-height: 115%;\"><span style=\"line-height: 115%;\"><span style=\"line-height: 115%;\">LESSON 5</span><span style=\"line-height: 115%;\">:\r\nOUR UNIVERSE</span></span></span></span></span></p><p><span style=\"line-height: 115%;\"><span style=\"line-height: 115%;\"><span style=\"line-height: 115%;\"><span style=\"line-height: 115%;\"><span style=\"line-height: 115%;\"><span style=\"line-height: 115%;\">LESSON 6</span><span style=\"line-height: 115%;\">:\r\nFORCE WORK AND ENERGY</span></span></span></span></span></span></p><p><span style=\"line-height: 115%;\"><span style=\"line-height: 115%;\"><span style=\"line-height: 115%;\"><span style=\"line-height: 115%;\"><span style=\"line-height: 115%;\"><span style=\"line-height: 115%;\"><span style=\"line-height: 115%;\">LESSON 7</span><span style=\"line-height: 115%;\">:\r\nMATTER</span></span></span></span></span></span></span></p><p><span style=\"line-height: 115%;\"><span style=\"line-height: 115%;\"><span style=\"line-height: 115%;\"><span style=\"line-height: 115%;\"><span style=\"line-height: 115%;\"><span style=\"line-height: 115%;\"><span style=\"line-height: 115%;\"><span style=\"line-height: 115%;\">LESSON 8</span><span style=\"line-height: 115%;\">:\r\nREPRODUCTION IN ANIMALS</span></span></span></span></span></span></span></span></p><p><span style=\"line-height: 115%;\"><span style=\"line-height: 115%;\"><span style=\"line-height: 115%;\"><span style=\"line-height: 115%;\"><span style=\"line-height: 115%;\"><span style=\"line-height: 115%;\"><span style=\"line-height: 115%;\"><span style=\"line-height: 115%;\"><span style=\"line-height: 115%;\">LESSON 9</span><span style=\"line-height: 115%;\">:\r\nREPRODUCTION IN PLANTS</span></span></span></span></span></span></span></span></span></p>', '', '', '3.jpg', 'https://navavision.com/video/CHAPTER%202_ONE%20TO%', '', '2021-02-09 11:42:29', '2022-02-05 09:32:54', 0),
(29, 4, 'Math', '2000', 'aaa', 'bbb', '<p>In math level 4 you will learn basic operations of numbers, large numbers, measurements, fractions, decimals, roman numbers, integers, time, rounding off numbers, percentage, multiples and factors, geometry, area and volume, volume.<br></p>', '<p><span style=\"line-height: 115%;\">1&nbsp; &nbsp;BASIC\r\nOPERATIONS OF NUMBERS</span></p><p><span style=\"line-height: 115%;\">2&nbsp; &nbsp;<span style=\"line-height: 115%;\">LARGE\r\nNUMBERS</span></span></p><p><span style=\"line-height: 115%;\"><span style=\"line-height: 115%;\">3&nbsp; &nbsp;<span style=\"line-height: 115%;\">MEASUREMENTS</span></span></span></p><p><span style=\"line-height: 115%;\"><span style=\"line-height: 115%;\"><span style=\"line-height: 115%;\"><span style=\"line-height: 115%;\">4&nbsp; &nbsp;FRACTIONS</span></span></span></span></p><p><span style=\"line-height: 115%;\"><span style=\"line-height: 115%;\"><span style=\"line-height: 115%;\"><span style=\"line-height: 115%;\">5&nbsp; &nbsp;<span style=\"line-height: 115%;\">DECIMALS</span></span></span></span></span></p><p><span style=\"line-height: 115%;\"><span style=\"line-height: 115%;\"><span style=\"line-height: 115%;\"><span style=\"line-height: 115%;\"><span style=\"line-height: 115%;\">6&nbsp; &nbsp;<span style=\"line-height: 115%;\">ROMAN\r\nNUMBERS</span></span></span></span></span></span></p><p><span style=\"line-height: 115%;\"><span style=\"line-height: 115%;\"><span style=\"line-height: 115%;\"><span style=\"line-height: 115%;\"><span style=\"line-height: 115%;\"><span style=\"line-height: 115%;\">7&nbsp; &nbsp;<span style=\"line-height: 115%;\">INTEGERS&nbsp;</span></span></span></span></span></span></span></p><p><span style=\"line-height: 115%;\"><span style=\"line-height: 115%;\"><span style=\"line-height: 115%;\"><span style=\"line-height: 115%;\"><span style=\"line-height: 115%;\"><span style=\"line-height: 115%;\"><span style=\"line-height: 115%;\">8&nbsp; &nbsp;</span><span style=\"line-height: 115%;\">TIME&nbsp;</span></span></span></span></span></span></span></p><p><span style=\"line-height: 115%;\"><span style=\"line-height: 115%;\"><span style=\"line-height: 115%;\"><span style=\"line-height: 115%;\"><span style=\"line-height: 115%;\"><span style=\"line-height: 115%;\"><span style=\"line-height: 115%;\">9&nbsp; &nbsp;</span><span style=\"line-height: 115%;\">ROUNDING\r\nOFF NUMBERS&nbsp;</span></span></span></span></span></span></span></p><p><span style=\"line-height: 115%;\"><span style=\"line-height: 115%;\"><span style=\"line-height: 115%;\"><span style=\"line-height: 115%;\"><span style=\"line-height: 115%;\"><span style=\"line-height: 115%;\"><span style=\"line-height: 115%;\">10&nbsp; &nbsp;PERCENTAGE&nbsp;&nbsp;</span></span></span></span></span></span></span></p><p><span style=\"line-height: 115%;\"><span style=\"line-height: 115%;\"><span style=\"line-height: 115%;\"><span style=\"line-height: 115%;\"><span style=\"line-height: 115%;\"><span style=\"line-height: 115%;\"><span style=\"line-height: 115%;\">11&nbsp; &nbsp;</span><span style=\"line-height: 115%;\">MULTIPLES\r\nAND FACTORS&nbsp;</span></span></span></span></span></span></span></p><p><span style=\"line-height: 115%;\"><span style=\"line-height: 115%;\"><span style=\"line-height: 115%;\"><span style=\"line-height: 115%;\"><span style=\"line-height: 115%;\"><span style=\"line-height: 115%;\"><span style=\"line-height: 115%;\">12&nbsp; &nbsp;</span><span style=\"line-height: 115%;\">GEOMETRY&nbsp;&nbsp;</span></span></span></span></span></span></span></p><p><span style=\"line-height: 115%;\"><span style=\"line-height: 115%;\"><span style=\"line-height: 115%;\"><span style=\"line-height: 115%;\"><span style=\"line-height: 115%;\"><span style=\"line-height: 115%;\"><span style=\"line-height: 115%;\">13&nbsp; &nbsp;</span><span style=\"line-height: 115%;\">AREA\r\nAND VOLUME&nbsp;</span></span></span></span></span></span></span></p><p><span style=\"line-height: 115%;\"><span style=\"line-height: 115%;\"><span style=\"line-height: 115%;\"><span style=\"line-height: 115%;\"><span style=\"line-height: 115%;\"><span style=\"line-height: 115%;\"><span style=\"line-height: 115%;\">14&nbsp; &nbsp;</span><span style=\"line-height: 115%;\">VOLUME</span><br></span><br></span><br></span><br></span><br></span><br></span><br></p>', '', '', '29.png', 'https://navavision.com/video/CHAPTER%202_ONE%20TO%', '', '2021-02-09 11:47:58', '2022-02-05 09:32:54', 0),
(30, 5, 'Grammer', '2000', 'aaa', 'bbb', '<p>In Grammer level 5 you will learn The noun: kinds of nouns, numbers: singular and plural nouns, pronouns: types of pronouns, verb: types of verbs, genders, articles, affix: types, adverb: types of adverbs, adjectives, english tense: three forms of tenses, active and passive voice, preposition, conjunction: types of conjunction, interjection, punctuatuion, the sentence: jumbled sentence, framing questions, tense, the voice: active and pasive voice, subject-verb agreement, editing and omission<br></p>', '<p>1. THE NOUN: KINDS OF NOUNS</p><p>2. NUMBERS: SINGULAR AND PLURAL NOUNS</p><p>3. PRONOUNS: TYPES OF PRONOUNS</p><p>4. VERB: TYPES OF VERBS</p><p>5. GENDERS</p><p>6. ARTICLES</p><p>7. AFFIX: TYPES</p><p>8. ADVERB: TYPES OF ADVERBS</p><p>9. ADJECTIVES</p><p>10. ENGLISH TENSE: THREE FORMS OF TENSES</p><p>11. ACTIVE AND PASSIVE VOICE</p><p>12. PREPOSITION</p><p>13. CONJUNCTION: TYPES OF CONJUNCTION</p><p>14. INTERJECTION</p><p>15. PUNCTUATUION</p><p>16. THE SENTENCE: JUMBLED SENTENCE, FRAMING QUESTIONS</p><p>17. TENSE</p><p>18. THE VOICE: ACTIVE AND PASIVE VOICE</p><p>19. SUBJECT-VERB AGREEMENT</p><p>20. EDITING AND OMISSION</p>', '', '', 'g126.png', 'https://navavision.com/video/CHAPTER%202_ONE%20TO%', '', '2021-02-09 11:52:11', '2022-02-05 09:32:54', 0),
(31, 5, 'English', '2000', 'aaa', 'bbb', '<p>In english level 5 you willl learn ice-cream man,wonderful waste!,teamwork,flying together,my shadow,robinson crusoe discovers a footprint,crying,my elder brother,the lazy frog,&nbsp; rip van winkle,class discussion,the talkative barber,topsy-turvy land,gulliver’s travels,nobody’s friend,the little bully.<br></p>', '<p>UNIT 1:<span style=\"white-space:pre\">	</span>ICE-CREAM MAN,WONDERFUL WASTE!</p><p>UNIT 2:<span style=\"white-space:pre\">	</span>TEAMWORK,FLYING TOGETHER</p><p>UNIT 3:<span style=\"white-space:pre\">	</span>MY SHADOW,ROBINSON CRUSOE DISCOVERS A FOOTPRINT</p><p>UNIT 4:<span style=\"white-space:pre\">	</span>CRYING,MY ELDER BROTHER</p><p>UNIT 5:<span style=\"white-space:pre\">	</span>THE LAZY FROG,&nbsp; RIP VAN WINKLE</p><p>UNIT 6:<span style=\"white-space:pre\">	</span>CLASS DISCUSSION,THE TALKATIVE BARBER</p><p>UNIT 7:<span style=\"white-space:pre\">	</span>TOPSY-TURVY LAND,GULLIVER’S TRAVELS</p><p>UNIT 8:<span style=\"white-space:pre\">	</span>NOBODY’S FRIEND,THE LITTLE BULLY</p>', '', '', '116.png', 'https://navavision.com/video/CHAPTER%202_ONE%20TO%', '', '2021-02-09 11:56:29', '2022-02-05 09:32:54', 0),
(32, 5, 'Science', '2000', 'aaa', 'bbb', '<p>&nbsp;In science level 5 you will learn difference between the living and non living things. Sexual and asexual reproduction characteristics and feature, types of animals (hervivorus, carnivores and omnivores), circulatory system, excretory system, nervous syste, skeltal system, muscular system, types of food, when food gets spoiled, who produces food we eat, taste buds, sense organs in humans, sense organs in animals, pollution, aforestation and deforestation, soil erosion, layers of atmosphere , conservation of air and water, what is weather, seasons, how seasons are caused<span style=\"white-space:pre\">	</span>- types of rocks, conservation of fossil fuels, types of simple machine, states of matter, earth quake, floods, drought, preventions.<br></p>', '<p><span style=\"line-height: 115%;\">LESSON 1</span><span style=\"line-height: 115%;\">:\r\nLIVING AND NON-LIVING THINGS</span></p><p><span style=\"line-height: 115%;\"><span style=\"line-height: 115%;\">LESSON 2</span><span style=\"line-height: 115%;\">:\r\nREPRODUCTION INPLANTS</span></span></p><p><span style=\"line-height: 115%;\"><span style=\"line-height: 115%;\"><span style=\"line-height: 115%;\">LESSON 3</span><span style=\"line-height: 115%;\">:\r\nANIMALS</span></span></span></p><p><span style=\"line-height: 115%;\"><span style=\"line-height: 115%;\"><span style=\"line-height: 115%;\"><span style=\"line-height: 115%;\">LESSON 4</span><span style=\"line-height: 115%;\">:\r\nHUMAN BODY</span></span></span></span></p><p><span style=\"line-height: 115%;\"><span style=\"line-height: 115%;\"><span style=\"line-height: 115%;\"><span style=\"line-height: 115%;\"><span style=\"line-height: 115%;\">LESSON 5</span><span style=\"line-height: 115%;\">:\r\nFOOD</span></span></span></span></span></p><p><span style=\"line-height: 115%;\"><span style=\"line-height: 115%;\"><span style=\"line-height: 115%;\"><span style=\"line-height: 115%;\"><span style=\"line-height: 115%;\"><span style=\"line-height: 115%;\">LESSON 6</span><span style=\"line-height: 115%;\">:\r\nSENSE ORGANS</span></span></span></span></span></span></p><p><span style=\"line-height: 115%;\"><span style=\"line-height: 115%;\"><span style=\"line-height: 115%;\"><span style=\"line-height: 115%;\"><span style=\"line-height: 115%;\"><span style=\"line-height: 115%;\"><span style=\"line-height: 115%;\">LESSON 7</span><span style=\"line-height: 115%;\">:\r\nOUR ENVIRONMENT</span></span></span></span></span></span></span></p><p><span style=\"line-height: 115%;\"><span style=\"line-height: 115%;\"><span style=\"line-height: 115%;\"><span style=\"line-height: 115%;\"><span style=\"line-height: 115%;\"><span style=\"line-height: 115%;\"><span style=\"line-height: 115%;\"><span style=\"line-height: 115%;\">LESSON 8</span><span style=\"line-height: 115%;\">:\r\nAIR, WATER AND ATMOSPHERE</span></span></span></span></span></span></span></span></p><hr><p><span style=\"line-height: 115%;\"><span style=\"line-height: 115%;\"><span style=\"line-height: 115%;\"><span style=\"line-height: 115%;\"><span style=\"line-height: 115%;\"><span style=\"line-height: 115%;\"><span style=\"line-height: 115%;\"><span style=\"line-height: 115%;\"><span style=\"line-height: 115%;\">LESSON 9</span><span style=\"line-height: 115%;\">:\r\nWHEATHER AND CLIMATE</span></span></span></span></span></span></span></span></span></p><p><span style=\"line-height: 115%;\"><span style=\"line-height: 115%;\"><span style=\"line-height: 115%;\"><span style=\"line-height: 115%;\"><span style=\"line-height: 115%;\"><span style=\"line-height: 115%;\"><span style=\"line-height: 115%;\"><span style=\"line-height: 115%;\"><span style=\"line-height: 115%;\"><span style=\"line-height: 115%;\">LESSON 10 </span><span style=\"line-height: 115%;\">:\r\nROCK AND MINERALS</span></span></span></span></span></span></span></span></span></span></p><p><span style=\"line-height: 115%;\"><span style=\"line-height: 115%;\"><span style=\"line-height: 115%;\"><span style=\"line-height: 115%;\"><span style=\"line-height: 115%;\"><span style=\"line-height: 115%;\"><span style=\"line-height: 115%;\"><span style=\"line-height: 115%;\"><span style=\"line-height: 115%;\"><span style=\"line-height: 115%;\"><span style=\"line-height: 115%;\">LESSON 11 </span><span style=\"line-height: 115%;\">:\r\nSIMPLE MACHINES</span></span></span></span></span></span></span></span></span></span></span></p><p><span style=\"line-height: 115%;\"><span style=\"line-height: 115%;\"><span style=\"line-height: 115%;\"><span style=\"line-height: 115%;\"><span style=\"line-height: 115%;\"><span style=\"line-height: 115%;\"><span style=\"line-height: 115%;\"><span style=\"line-height: 115%;\"><span style=\"line-height: 115%;\"><span style=\"line-height: 115%;\"><span style=\"line-height: 115%;\"><span style=\"line-height: 115%;\">LESSON 12 </span><span style=\"line-height: 115%;\">:\r\nMATTER</span></span></span></span></span></span></span></span></span></span></span></span></p><p><span style=\"line-height: 115%;\"><span style=\"line-height: 115%;\"><span style=\"line-height: 115%;\"><span style=\"line-height: 115%;\"><span style=\"line-height: 115%;\"><span style=\"line-height: 115%;\"><span style=\"line-height: 115%;\"><span style=\"line-height: 115%;\"><span style=\"line-height: 115%;\"><span style=\"line-height: 115%;\"><span style=\"line-height: 115%;\"><span style=\"line-height: 115%;\"><span style=\"line-height: 115%;\">LESSON 13 </span><span style=\"line-height: 115%;\">:\r\nNATURAL CALAMITIES</span></span></span></span></span></span></span></span></span></span></span></span></span><br></p>', '', '', '13.jpg', 'https://navavision.com/video/CHAPTER%202_ONE%20TO%', '', '2021-02-09 12:02:33', '2022-02-05 09:32:54', 0),
(41, 7, 'Math', '2000', 'aaa', 'bbb', '<p>In math level 7 you will learn integers, fractions and decimals, data handling, simple equations, lines and angles, the triangle and its properties, congruence of triangle, compareing quantities, rational numbers , practical geometry, perimeter and area, algebric expression, exponents and power, symmetry, visualising solid shape.<br></p>', '<p>1<span style=\"white-space:pre\">	</span>INTEGERS</p><p>2<span style=\"white-space:pre\">	</span>FRACTIONS AND DECIMALS</p><p>3<span style=\"white-space:pre\">	</span>DATA HANDLING</p><p>4<span style=\"white-space:pre\">	</span>SIMPLE EQUATIONS</p><p>5<span style=\"white-space:pre\">	</span>LINES AND ANGLES</p><p>6<span style=\"white-space:pre\">	</span>THE TRIANGLE AND ITS PROPERTIES</p><p>7<span style=\"white-space:pre\">	</span>CONGRUENCE OF TRIANGLE</p><p>8<span style=\"white-space:pre\">	</span>COMPAREING QUANTITIES</p><p>9<span style=\"white-space:pre\">	</span>RATIONAL NUMBERS&nbsp;</p><p>10<span style=\"white-space:pre\">	</span>PRACTICAL GEOMETRY</p><p>11<span style=\"white-space:pre\">	</span>PERIMETER AND AREA</p><p>12<span style=\"white-space:pre\">	</span>ALGEBRIC EXPRESSION</p><p>13<span style=\"white-space:pre\">	</span>EXPONENTS AND POWER</p><p>14<span style=\"white-space:pre\">	</span>SYMMETRY</p><p>15<span style=\"white-space:pre\">	</span>VISUALISING SOLID SHAPE</p>', '', '', '213.png', 'https://navavision.com/video/CHAPTER%202_ONE%20TO%', '', '2021-02-10 05:22:59', '2022-02-05 09:32:54', 0);
INSERT INTO `course_levels` (`level_id`, `course_id`, `level`, `price`, `text_link`, `work_book_link`, `description`, `Syllabus`, `level_syllabus_file_name`, `level_syllabus_file_type`, `level_img_file_name`, `sample_video_file_name`, `sample_video_file_type`, `created_at`, `updated_at`, `type_id`) VALUES
(42, 8, 'English', '2000', 'aaa', 'bbb', '<p><span style=\"color: rgb(33, 37, 41); font-family: system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, &quot;Noto Sans&quot;, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;;\">In english level 8 you will learn the best christmas present in the world, the ant and the cricket, the tsunami, geography lesson, glimpses of the past, macavity: the mystery cat , bepin choudhury’s lapse of memory , the last bargain , the summit within , the school boy, this is jody’s fawn, the duck and the kangaroo, a visit to cambridge, when I set out for lyonnesse, a short monsoon diary, on the grasshopper and cricket, the great stone face- I.</span><br></p>', '<p style=\"padding: 0px; margin-right: 0px; margin-left: 0px; color: rgb(33, 37, 41); font-family: system-ui, -apple-system, \"Segoe UI\", Roboto, \"Helvetica Neue\", Arial, \"Noto Sans\", sans-serif, \"Apple Color Emoji\", \"Segoe UI Emoji\", \"Segoe UI Symbol\", \"Noto Color Emoji\";\">CHAPTER 1<span style=\"padding: 0px; margin: 0px; white-space: pre;\">	</span>THE BEST CHRISTMAS PRESENT IN THE WORLD</p><p style=\"padding: 0px; margin-right: 0px; margin-left: 0px; color: rgb(33, 37, 41); font-family: system-ui, -apple-system, \"Segoe UI\", Roboto, \"Helvetica Neue\", Arial, \"Noto Sans\", sans-serif, \"Apple Color Emoji\", \"Segoe UI Emoji\", \"Segoe UI Symbol\", \"Noto Color Emoji\";\">     POEM:<span style=\"padding: 0px; margin: 0px; white-space: pre;\">	</span>THE ANT AND THE CRICKET</p><p style=\"padding: 0px; margin-right: 0px; margin-left: 0px; color: rgb(33, 37, 41); font-family: system-ui, -apple-system, \"Segoe UI\", Roboto, \"Helvetica Neue\", Arial, \"Noto Sans\", sans-serif, \"Apple Color Emoji\", \"Segoe UI Emoji\", \"Segoe UI Symbol\", \"Noto Color Emoji\";\">CHAPTER 2:<span style=\"padding: 0px; margin: 0px; white-space: pre;\">	</span>THE TSUNAMI</p><p style=\"padding: 0px; margin-right: 0px; margin-left: 0px; color: rgb(33, 37, 41); font-family: system-ui, -apple-system, \"Segoe UI\", Roboto, \"Helvetica Neue\", Arial, \"Noto Sans\", sans-serif, \"Apple Color Emoji\", \"Segoe UI Emoji\", \"Segoe UI Symbol\", \"Noto Color Emoji\";\">     POEM:<span style=\"padding: 0px; margin: 0px; white-space: pre;\">	</span>GEOGRAPHY LESSON</p><p style=\"padding: 0px; margin-right: 0px; margin-left: 0px; color: rgb(33, 37, 41); font-family: system-ui, -apple-system, \"Segoe UI\", Roboto, \"Helvetica Neue\", Arial, \"Noto Sans\", sans-serif, \"Apple Color Emoji\", \"Segoe UI Emoji\", \"Segoe UI Symbol\", \"Noto Color Emoji\";\">CHAPTER 3:<span style=\"padding: 0px; margin: 0px; white-space: pre;\">	</span>GLIMPSES OF THE PAST</p><p style=\"padding: 0px; margin-right: 0px; margin-left: 0px; color: rgb(33, 37, 41); font-family: system-ui, -apple-system, \"Segoe UI\", Roboto, \"Helvetica Neue\", Arial, \"Noto Sans\", sans-serif, \"Apple Color Emoji\", \"Segoe UI Emoji\", \"Segoe UI Symbol\", \"Noto Color Emoji\";\">     POEM:<span style=\"padding: 0px; margin: 0px; white-space: pre;\">	</span>MACAVITY: THE MYSTERY CAT</p><p style=\"padding: 0px; margin-right: 0px; margin-left: 0px; color: rgb(33, 37, 41); font-family: system-ui, -apple-system, \"Segoe UI\", Roboto, \"Helvetica Neue\", Arial, \"Noto Sans\", sans-serif, \"Apple Color Emoji\", \"Segoe UI Emoji\", \"Segoe UI Symbol\", \"Noto Color Emoji\";\">CHAPTER 4: <span style=\"padding: 0px; margin: 0px; white-space: pre;\">	</span>BEPIN CHOUDHURY’S LAPSE OF MEMORY</p><p style=\"padding: 0px; margin-right: 0px; margin-left: 0px; color: rgb(33, 37, 41); font-family: system-ui, -apple-system, \"Segoe UI\", Roboto, \"Helvetica Neue\", Arial, \"Noto Sans\", sans-serif, \"Apple Color Emoji\", \"Segoe UI Emoji\", \"Segoe UI Symbol\", \"Noto Color Emoji\";\">     POEM:<span style=\"padding: 0px; margin: 0px; white-space: pre;\">	</span>THE LAST BARGAIN</p><p style=\"padding: 0px; margin-right: 0px; margin-left: 0px; color: rgb(33, 37, 41); font-family: system-ui, -apple-system, \"Segoe UI\", Roboto, \"Helvetica Neue\", Arial, \"Noto Sans\", sans-serif, \"Apple Color Emoji\", \"Segoe UI Emoji\", \"Segoe UI Symbol\", \"Noto Color Emoji\";\">CHAPTER 5:<span style=\"padding: 0px; margin: 0px; white-space: pre;\">	</span>THE SUMMIT WITHIN</p><p style=\"padding: 0px; margin-right: 0px; margin-left: 0px; color: rgb(33, 37, 41); font-family: system-ui, -apple-system, \"Segoe UI\", Roboto, \"Helvetica Neue\", Arial, \"Noto Sans\", sans-serif, \"Apple Color Emoji\", \"Segoe UI Emoji\", \"Segoe UI Symbol\", \"Noto Color Emoji\";\">    POEM: <span style=\"padding: 0px; margin: 0px; white-space: pre;\">	</span>THE SCHOOL BOY</p><p style=\"padding: 0px; margin-right: 0px; margin-left: 0px; color: rgb(33, 37, 41); font-family: system-ui, -apple-system, \"Segoe UI\", Roboto, \"Helvetica Neue\", Arial, \"Noto Sans\", sans-serif, \"Apple Color Emoji\", \"Segoe UI Emoji\", \"Segoe UI Symbol\", \"Noto Color Emoji\";\">CHAPTER 6: <span style=\"padding: 0px; margin: 0px; white-space: pre;\">	</span>THIS IS JODY’S FAWN</p><p style=\"padding: 0px; margin-right: 0px; margin-left: 0px; color: rgb(33, 37, 41); font-family: system-ui, -apple-system, \"Segoe UI\", Roboto, \"Helvetica Neue\", Arial, \"Noto Sans\", sans-serif, \"Apple Color Emoji\", \"Segoe UI Emoji\", \"Segoe UI Symbol\", \"Noto Color Emoji\";\">    POEM: <span style=\"padding: 0px; margin: 0px; white-space: pre;\">	</span>THE DUCK AND THE KANGAROO</p><p style=\"padding: 0px; margin-right: 0px; margin-left: 0px; color: rgb(33, 37, 41); font-family: system-ui, -apple-system, \"Segoe UI\", Roboto, \"Helvetica Neue\", Arial, \"Noto Sans\", sans-serif, \"Apple Color Emoji\", \"Segoe UI Emoji\", \"Segoe UI Symbol\", \"Noto Color Emoji\";\">CHAPTER 7: <span style=\"padding: 0px; margin: 0px; white-space: pre;\">	</span>A VISIT TO CAMBRIDGE</p><p style=\"padding: 0px; margin-right: 0px; margin-left: 0px; color: rgb(33, 37, 41); font-family: system-ui, -apple-system, \"Segoe UI\", Roboto, \"Helvetica Neue\", Arial, \"Noto Sans\", sans-serif, \"Apple Color Emoji\", \"Segoe UI Emoji\", \"Segoe UI Symbol\", \"Noto Color Emoji\";\">     POEM:<span style=\"padding: 0px; margin: 0px; white-space: pre;\">	</span>WHEN I SET OUT FOR LYONNESSE</p><p style=\"padding: 0px; margin-right: 0px; margin-left: 0px; color: rgb(33, 37, 41); font-family: system-ui, -apple-system, \"Segoe UI\", Roboto, \"Helvetica Neue\", Arial, \"Noto Sans\", sans-serif, \"Apple Color Emoji\", \"Segoe UI Emoji\", \"Segoe UI Symbol\", \"Noto Color Emoji\";\">CHAPTER 8:<span style=\"padding: 0px; margin: 0px; white-space: pre;\">	</span>A SHORT MONSOON DIARY</p><p style=\"padding: 0px; margin-right: 0px; margin-left: 0px; color: rgb(33, 37, 41); font-family: system-ui, -apple-system, \"Segoe UI\", Roboto, \"Helvetica Neue\", Arial, \"Noto Sans\", sans-serif, \"Apple Color Emoji\", \"Segoe UI Emoji\", \"Segoe UI Symbol\", \"Noto Color Emoji\";\">     POEM:<span style=\"padding: 0px; margin: 0px; white-space: pre;\">	</span>ON THE GRASSHOPPER AND CRICKET</p><p style=\"padding: 0px; margin-right: 0px; margin-left: 0px; color: rgb(33, 37, 41); font-family: system-ui, -apple-system, \"Segoe UI\", Roboto, \"Helvetica Neue\", Arial, \"Noto Sans\", sans-serif, \"Apple Color Emoji\", \"Segoe UI Emoji\", \"Segoe UI Symbol\", \"Noto Color Emoji\";\">CHAPTER 9:<span style=\"padding: 0px; margin: 0px; white-space: pre;\">	</span>THE GREAT STONE FACE- I</p><p style=\"padding: 0px; margin-right: 0px; margin-left: 0px; color: rgb(33, 37, 41); font-family: system-ui, -apple-system, \"Segoe UI\", Roboto, \"Helvetica Neue\", Arial, \"Noto Sans\", sans-serif, \"Apple Color Emoji\", \"Segoe UI Emoji\", \"Segoe UI Symbol\", \"Noto Color Emoji\";\">CHAPTER 10:<span style=\"padding: 0px; margin: 0px; white-space: pre;\">	</span>THE GREAT STONE FACE- II</p>', '', '', '121.png', 'https://navavision.com/video/CHAPTER%202_ONE%20TO%', '', '2021-02-10 05:48:19', '2022-02-05 09:32:54', 0),
(43, 8, 'Science', '2000', 'aaa', 'bbb', '<p>In scicence level 8 you will learn crop production and management, microorganisims: friend and feo, synthetic fibers and plastics, materials: metals and non-metals, coal and petroleum, combustion and flame, conservation of plants and animals, cell – structure and functions, reproduction in animals, reaching the age of adolescence, force and pressure, friction, sound, chemical effects of electric current, some natural phenomena, light, stars and the solar system, pollution of air and water.<br></p>', '<p>LESSON 1: CROP PRODUCTION AND MANAGEMENT</p><p>LESSON 2: MICROORGANISIMS: FRIEND AND FEO</p><p>LESSON 3: SYNTHETIC FIBERS AND PLASTICS</p><p>LESSON 4: MATERIALS: METALS AND NON-METALS</p><p>LESSON 5: COAL AND PETROLEUM</p><p>LESSON 6: COMBUSTION AND FLAME</p><p>LESSON 7: CONSERVATION OF PLANTS AND ANIMALS</p><p>LESSON 8: CELL – STRUCTURE AND FUNCTIONS</p><p>LESSON 9: REPRODUCTION IN ANIMALS</p><p>LESSON 10: REACHING THE AGE OF ADOLESCENCE</p><p>LESSON 11: FORCE AND PRESSURE</p><p>LESSON 12: FRICTION</p><p>LESSON 13: SOUND</p><p>LESSON 14: CHEMICAL EFFECTS OF ELECTRIC CURRENT</p><p>LESSON 15: SOME NATURAL PHENOMENA</p><p>LESSON 16: LIGHT</p><p>LESSON 17: STARS AND THE SOLAR SYSTEM</p><p>LESSON 18: POLLUTION OF AIR AND WATER</p>', '', '', '214.png', 'https://navavision.com/video/CHAPTER%202_ONE%20TO%', '', '2021-02-10 05:40:56', '2022-02-05 09:32:54', 0),
(44, 8, 'Math', '2000', 'aaa', 'bbb', '<p>In math level 8 you will learn rational number, linear equation, understanding quadrilaterls, practical geometry, data handling, squares and square roots, cube and cube roots, comparing quantities, algebraic expressions, visualising shapes, mensuration modified, powers, direct and indirect proportions, factorizaion, playing with numbers<br></p>', '<p>LESSON 1 <span style=\"white-space:pre\">	</span>RATIONAL NUMBER</p><p>LESSON 2<span style=\"white-space:pre\">	</span>LINEAR EQUATION</p><p>LESSON 3<span style=\"white-space:pre\">	</span>UNDERSTANDING QUADRILATERLS</p><p>LESSON 4<span style=\"white-space:pre\">	</span>PRACTICAL GEOMETRY</p><p>LESSON 5<span style=\"white-space:pre\">	</span>DATA HANDLING</p><p>LESSON 6<span style=\"white-space:pre\">	</span>SQUARES AND SQUARE ROOTS</p><p>LESSON 7 <span style=\"white-space:pre\">	</span>CUBE AND CUBE ROOTS</p><p>LESSON 8<span style=\"white-space:pre\">	</span>COMPARING QUANTITIES</p><p>LESSON 9<span style=\"white-space:pre\">	</span>ALGEBRAIC EXPRESSIONS</p><p>LESSON 10<span style=\"white-space:pre\">	</span>VISUALISING SHAPES</p><p>LESSON 11<span style=\"white-space:pre\">	</span>MENSURATION MODIFIED</p><p>LESSON 12<span style=\"white-space:pre\">	</span>POWERS</p><p>LESSON 13<span style=\"white-space:pre\">	</span>DIRECT AND INDIRECT PROPORTIONS</p><p>LESSON 14<span style=\"white-space:pre\">	</span>FACTORIZAION</p><p>LESSON 15<span style=\"white-space:pre\">	</span>PLAYING WITH NUMBERS</p>', '', '', '215.png', 'https://navavision.com/video/CHAPTER%202_ONE%20TO%', '', '2021-02-10 05:44:26', '2022-02-05 09:32:54', 0),
(45, 9, 'English', '2000', 'aaa', 'bbb', '<p>In english level 9 you will learn the fun they had, the sound of music, the little girl,a truly beautiful mind, the snake and the mirror, my childhood, packing, reach for the top, the bond of love, kathmandu, if I were you.<br></p>', '<p>CHAPTER:1<span style=\"white-space:pre\">	</span>THE FUN THEY HAD</p><p>CHAPTER:2<span style=\"white-space:pre\">	</span>THE SOUND OF MUSIC</p><p>CHAPTER:3<span style=\"white-space:pre\">	</span>THE LITTLE GIRL</p><p>CHAPTER:4<span style=\"white-space:pre\">	</span>A TRULY BEAUTIFUL MIND</p><p>CHAPTER:5<span style=\"white-space:pre\">	</span>THE SNAKE AND THE MIRROR</p><p>CHAPTER:6<span style=\"white-space:pre\">	</span>MY CHILDHOOD</p><p>CHAPTER:7<span style=\"white-space:pre\">	</span>PACKING</p><p>CHAPTER:8<span style=\"white-space:pre\">	</span>REACH FOR THE TOP</p><p>CHAPTER:9<span style=\"white-space:pre\">	</span>THE BOND OF LOVE</p><p>CHAPTER:10<span style=\"white-space:pre\">	</span>KATHMANDU</p><p>CHAPTER:11<span style=\"white-space:pre\">	</span>IF I WERE YOU</p>', '', '', '122.png', 'https://navavision.com/video/CHAPTER%202_ONE%20TO%', '', '2021-02-10 05:52:43', '2022-02-05 09:32:54', 0),
(46, 9, 'Science', '2000', 'aaa', 'bbb', '<p>In science level 9 you will learn  matter in our sorroundings, is matter around us pure?, atoms and molecules, structure of the atom, the fundamental unit of life, tissues, diversity in living organisms, motion, force and laws of motion, gravitation, work and energy, sound, why do we fall ill?, natural resources, improvement in food resources.<br></p>', '<p style=\"padding: 0px; margin-right: 0px; margin-left: 0px; color: rgb(33, 37, 41); font-family: system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, &quot;Noto Sans&quot;, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;;\">LESSON 1: MATTER IN OUR SURROUNDINGS</p><p style=\"padding: 0px; margin-right: 0px; margin-left: 0px; color: rgb(33, 37, 41); font-family: system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, &quot;Noto Sans&quot;, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;;\">LESSON 2: IS MATTER AROUND US PURE?</p><p style=\"padding: 0px; margin-right: 0px; margin-left: 0px; color: rgb(33, 37, 41); font-family: system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, &quot;Noto Sans&quot;, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;;\">LESSON 3: ATOMS AND MOLECULES</p><p style=\"padding: 0px; margin-right: 0px; margin-left: 0px; color: rgb(33, 37, 41); font-family: system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, &quot;Noto Sans&quot;, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;;\">LESSON 4: STRUCTURE OF THE ATOM</p><p style=\"padding: 0px; margin-right: 0px; margin-left: 0px; color: rgb(33, 37, 41); font-family: system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, &quot;Noto Sans&quot;, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;;\">LESSON 5: THE FUNDAMENTAL UNIT OF LIFE</p><p style=\"padding: 0px; margin-right: 0px; margin-left: 0px; color: rgb(33, 37, 41); font-family: system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, &quot;Noto Sans&quot;, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;;\">LESSON 6: TISSUES</p><p style=\"padding: 0px; margin-right: 0px; margin-left: 0px; color: rgb(33, 37, 41); font-family: system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, &quot;Noto Sans&quot;, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;;\">LESSON 7: DIVERSITY IN LIVING ORGANISMS</p><p style=\"padding: 0px; margin-right: 0px; margin-left: 0px; color: rgb(33, 37, 41); font-family: system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, &quot;Noto Sans&quot;, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;;\">LESSON 8: MOTION</p><p style=\"padding: 0px; margin-right: 0px; margin-left: 0px; color: rgb(33, 37, 41); font-family: system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, &quot;Noto Sans&quot;, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;;\">LESSON 9: FORCE AND LAWS OF MOTION</p><p style=\"padding: 0px; margin-right: 0px; margin-left: 0px; color: rgb(33, 37, 41); font-family: system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, &quot;Noto Sans&quot;, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;;\">LESSON 10: GRAVITATION</p><p style=\"padding: 0px; margin-right: 0px; margin-left: 0px; color: rgb(33, 37, 41); font-family: system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, &quot;Noto Sans&quot;, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;;\">LESSON 11: WORK AND ENERGY</p><p style=\"padding: 0px; margin-right: 0px; margin-left: 0px; color: rgb(33, 37, 41); font-family: system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, &quot;Noto Sans&quot;, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;;\">LESSON 12: SOUND</p><p style=\"padding: 0px; margin-right: 0px; margin-left: 0px; color: rgb(33, 37, 41); font-family: system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, &quot;Noto Sans&quot;, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;;\">LESSON 13: WHY DO WE FALL ILL?</p><p style=\"padding: 0px; margin-right: 0px; margin-left: 0px; color: rgb(33, 37, 41); font-family: system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, &quot;Noto Sans&quot;, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;;\">LESSON 14: NATURAL RESOURCES</p><p style=\"padding: 0px; margin-right: 0px; margin-left: 0px; color: rgb(33, 37, 41); font-family: system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, &quot;Noto Sans&quot;, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;;\">LESSON 15: IMPROVEMENT IN FOOD RESOURCES</p>', '', '', '9th1.png', 'https://navavision.com/video/CHAPTER%202_ONE%20TO%', '', '2021-04-08 05:16:19', '2022-02-05 09:32:54', 0),
(47, 9, 'Math', '2000', 'aaa', 'bbb', '<p>In math level 9 you will learn number system, polynomials, co-ordinate geometry, linear equation in two variables, introduction to euclid’s geometry, lines and angles,&nbsp; triangles, quadrilaterals, areas of paralleograms and triangles, circles, constructions, heron’s formula, surface areas and volumes, statistics, probability.<br></p>', '<p>LESSON 1 <span style=\"white-space:pre\">	</span>NUMBER SYSTEM</p><p>LESSON 2<span style=\"white-space:pre\">	</span>POLYNOMIALS</p><p>LESSON 3<span style=\"white-space:pre\">	</span>CO-ORDINATE GEOMETRY</p><p>LESSON 4<span style=\"white-space:pre\">	</span>LINEAR EQUATION IN TWO VARIABLES</p><p>LESSON 5<span style=\"white-space:pre\">	</span>INTRODUCTION TO EUCLID’S GEOMETRY</p><p>LESSON 6<span style=\"white-space:pre\">	</span>LINES AND ANGLES</p><p>LESSON 7 <span style=\"white-space:pre\">	</span>TRIANGLES</p><p>LESSON 8<span style=\"white-space:pre\">	</span>QUADRILATERALS</p><p>LESSON 9<span style=\"white-space:pre\">	</span>AREAS OF PARALLEOGRAMS AND TRIANGLES</p><p>LESSON 10<span style=\"white-space:pre\">	</span>CIRCLES</p><p>LESSON 11<span style=\"white-space:pre\">	</span>CONSTRUCTIONS</p><p>LESSON 12<span style=\"white-space:pre\">	</span>HERON’S FORMULA</p><p>LESSON 13<span style=\"white-space:pre\">	</span>SURFACE AREAS AND VOLUMES</p><p>LESSON 14<span style=\"white-space:pre\">	</span>STATISTICS</p><p>LESSON 15<span style=\"white-space:pre\">	</span>PROBABILITY</p>', '', '', '217.png', 'https://navavision.com/video/CHAPTER%202_ONE%20TO%', '', '2021-02-10 05:58:30', '2022-02-05 09:32:54', 0),
(48, 10, 'English', '2000', 'aaa', 'bbb', '<p>In english level 10 you will learn&nbsp; a letter to god, nelson mandela: long walk to freedom, two stories about flying, from the diary of anne frank, the hundred dresses –I, the hundred dresses –ii, glimpses of india , mijbil the otter, madam rides the bus, the sermon at benares, the proposal.<br></p>', '<p>CHAPTER:1<span style=\"white-space:pre\">	</span>1. A LETTER TO GOD</p><p>CHAPTER:2<span style=\"white-space:pre\">	</span>2. NELSON MANDELA: LONG WALK TO FREEDOM</p><p>CHAPTER:3<span style=\"white-space:pre\">	</span>3. TWO STORIES ABOUT FLYING</p><p>CHAPTER:4<span style=\"white-space:pre\">	</span>4. FROM THE DIARY OF ANNE FRANK</p><p>CHAPTER:5<span style=\"white-space:pre\">	</span>5. THE HUNDRED DRESSES –I</p><p>CHAPTER:6<span style=\"white-space:pre\">	</span>6. THE HUNDRED DRESSES –II</p><p>CHAPTER:7<span style=\"white-space:pre\">	</span>7. GLIMPSES OF INDIA&nbsp;</p><p>CHAPTER:8<span style=\"white-space:pre\">	</span>8.MIJBIL THE OTTER</p><p>CHAPTER:9<span style=\"white-space:pre\">	</span>9. MADAM RIDES THE BUS</p><p>CHAPTER:10<span style=\"white-space:pre\">	</span>10. THE SERMON AT BENARES</p><p>CHAPTER:11<span style=\"white-space:pre\">	</span>11. THE PROPOSAL</p>', '', '', '123.png', 'https://navavision.com/video/CHAPTER%202_ONE%20TO%', '', '2021-02-10 06:01:18', '2022-02-05 09:32:54', 0),
(49, 10, 'Science', '2000', 'aaa', 'bbb', '<p>In science level 10 you will learn&nbsp; chemical reactions and equations, acids bases and salts, metals and non-metals, carbon and its compounds, periodic classification of elements, life processes, control and co-ordination, how do organisms reproduce, heredity and evolution, light reflection and refraction, the human eye and colourfull world, electricity, magnetic effects of electric current, sources of energy, our envirounment, sustaintable management of natural resources.<br></p>', '<p>LESSON 1: CHEMICAL REACTIONS AND EQUATIONS</p><p>LESSON 2: ACIDS BASES AND SALTS</p><p>LESSON 3: METALS AND NON-METALS</p><p>LESSON 4: CARBON AND ITS COMPOUNDS</p><p>LESSON 5: PERIODIC CLASSIFICATION OF ELEMENTS</p><p>LESSON 6: LIFE PROCESSES</p><p>LESSON 7: CONTROL AND CO-ORDINATION</p><p>LESSON 8: HOW DO ORGANISMS REPRODUCE</p><p>LESSON 9: HEREDITY AND EVOLUTION</p><p>LESSON 10: LIGHT REFLECTION AND REFRACTION</p><p>LESSON 11: THE HUMAN EYE AND COLOURFULL WORLD</p><p>LESSON 12: ELECTRICITY</p><p>LESSON 13: MAGNETIC EFFECTS OF ELECTRIC CURRENT</p><p>LESSON 14: SOURCES OF ENERGY</p><p>LESSON 15: OUR ENVIROUNMENT</p><p>LESSON 16: SUSTAINTABLE MANAGEMENT OF NATURAL RESOURCES</p>', '', '', '218.png', 'https://navavision.com/video/CHAPTER%202_ONE%20TO%', '', '2021-02-10 06:04:27', '2022-02-05 09:32:54', 0),
(50, 10, 'Math', '2000', 'aaa', 'bbb', '<p>In math level 10 you will learn&nbsp; real numbers, polynomials, pair of linear equations in two variables, quadratic equations, arthemetic progressions, line (in two dimentions)<span style=\"white-space:pre\">	</span>, triangles, circles, introduction to trignometry, trignometric identities, heights and distances, areas related to circles, surface areas and volumes <span style=\"white-space:pre\">	</span>, statistics, probability.<br></p>', '<p>NUMBER SYSTEM<span style=\"white-space:pre\">	</span></p><p>&nbsp; &nbsp; &nbsp; &nbsp; LESSON 1: REAL NUMBERS</p><p>ALGEBRA <span style=\"white-space:pre\">	</span></p><p>&nbsp; &nbsp; &nbsp; &nbsp; LESSON 2: POLYNOMIALS</p><p><span style=\"white-space:pre\">	</span>LESSON 3: PAIR OF LINEAR EQUATIONS IN TWO VARIABLES</p><p><span style=\"white-space:pre\">	</span>LESSON 4: QUADRATIC EQUATIONS</p><p><span style=\"white-space:pre\">	</span>LESSON 5: ARTHEMETIC PROGRESSIONS</p><p>CO-ORDINATE GEOMETRY<span style=\"white-space:pre\">	</span></p><p>&nbsp; &nbsp; &nbsp; &nbsp;LESSON 6: LINE (IN TWO DIMENTIONS)</p><p>GEOMETRY<span style=\"white-space:pre\">	</span></p><p>&nbsp; &nbsp; &nbsp; &nbsp; LESSON 7: TRIANGLES</p><p><span style=\"white-space:pre\">	</span>LESSON 8: CIRCLES</p><p>TRIGNOMETRY<span style=\"white-space:pre\">	</span></p><p>&nbsp; &nbsp; &nbsp; &nbsp; LESSON 9: INTRODUCTION TO TRIGNOMETRY</p><p><span style=\"white-space:pre\">	</span>LESSON 10: TRIGNOMETRIC IDENTITIES</p><p><span style=\"white-space:pre\">	</span>LESSON 11: HEIGHTS AND DISTANCES</p><p>MENSURATION<span style=\"white-space:pre\">	</span></p><p>&nbsp; &nbsp; &nbsp; &nbsp; LESSON 12: AREAS RELATED TO CIRCLES</p><p><span style=\"white-space:pre\">	</span>LESSON 13: SURFACE AREAS AND VOLUMES&nbsp;</p><p>STATISTICS AND PROBABILITY<span style=\"white-space:pre\">	</span></p><p>&nbsp; &nbsp; &nbsp; &nbsp; LESSON 14: STATISTICS</p><p><span style=\"white-space:pre\">	</span>LESSON 15: PROBABILITY.</p>', '', '', '219.png', 'https://navavision.com/video/CHAPTER%202_ONE%20TO%', '', '2021-02-10 06:08:16', '2022-02-05 09:32:54', 0),
(51, 25, '1', '2000', 'aaa', 'bbb', '<p>In Artificial Intelligence you will learn &nbsp;Linear algebra, introduction to coordinate geometry, basics of coordinate geometry, planes, 2d planes, 3d planes, introduction to matrices, matrices notation,, types of matrices, operations on matrices,, python for data science: data structures, python for data science introduction, python for data science: functions, python for data science: numpy, python for data science: panda, plotting for exploratory data analysis, classification &amp; regression models: k-nearest neighbours, logistic regression, linear regression, decision trees, project 1: youtube recommendation systems, project 2: building amazon fashion discovery engine.<br></p>', '<p>Module 1&nbsp; &nbsp;Foundations of Machine Learning.</p><p>Module 2&nbsp; &nbsp;Programming for Machine Learning.</p><p>Module 3&nbsp; &nbsp;Data Analysis &amp; Visualisation.</p><p>Module 4&nbsp; &nbsp;Machine Learning Models.</p><p>Module 5&nbsp; &nbsp;Machine Learning Projects.</p><hr><p><br></p>', '', '', '124.png', 'https://navavision.com/video/CHAPTER%202_ONE%20TO%', '', '2021-02-15 10:58:27', '2022-02-05 09:32:54', 0),
(52, 18, 'Basic Level 1', '4000', 'aaa', 'bbb', '<p><span style=\"color: rgb(33, 37, 41); font-family: system-ui, -apple-system, \"Segoe UI\", Roboto, \"Helvetica Neue\", Arial, \"Noto Sans\", sans-serif, \"Apple Color Emoji\", \"Segoe UI Emoji\", \"Segoe UI Symbol\", \"Noto Color Emoji\";\">In Vedic Mathematics level 1 you will learn Introduction to ancient india, introduction to vedic mathematics, importance of vedic mathematics abacus and vedic mathematics sutras and upa-sutras, classification of numbers basic operators, grid table method, hand method, multiplication table trick for 7 and 8, multiplication table trick for 2-digit numbers4.1 introduction base, parama mitra, sum root / digital root , casting out 9’s, answer verification, addition, subtraction, multiplication, division, divisibility rules – 1, 2, 5 and 10, divisibility rules – 3, 6 and 9, divisibility rules – 4, 8, divisibility rules for prime numbers - 7,11,13,17 and 19, divisibility rules for composite numbers.</span><br></p>', '<p style=\"padding: 0px; margin-right: 0px; margin-left: 0px; color: rgb(33, 37, 41); font-family: system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, &quot;Noto Sans&quot;, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;;\">Chapter 1&nbsp; &nbsp;INTRODUCTION TO VEDIC MATHEMATICS.</p><p style=\"padding: 0px; margin-right: 0px; margin-left: 0px; color: rgb(33, 37, 41); font-family: system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, &quot;Noto Sans&quot;, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;;\">Chapter 2&nbsp; &nbsp;INTRODUCTION TO NUMBERS</p><p style=\"padding: 0px; margin-right: 0px; margin-left: 0px; color: rgb(33, 37, 41); font-family: system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, &quot;Noto Sans&quot;, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;;\">Chapter 3&nbsp; &nbsp;LEARN TABLES IN SIMPLE WAY</p><p style=\"padding: 0px; margin-right: 0px; margin-left: 0px; color: rgb(33, 37, 41); font-family: system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, &quot;Noto Sans&quot;, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;;\">Chapter 4&nbsp; &nbsp;INTERESTING CONCEPTS OF VEDIC MATHEMATICS</p><p style=\"padding: 0px; margin-right: 0px; margin-left: 0px; color: rgb(33, 37, 41); font-family: system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, &quot;Noto Sans&quot;, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;;\">Chapter 5&nbsp; &nbsp;DIVISIBILITY RULES</p><p style=\"padding: 0px; margin-right: 0px; margin-left: 0px; color: rgb(33, 37, 41); font-family: system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, &quot;Noto Sans&quot;, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;;\">Chapter 6&nbsp; &nbsp;ADDITION</p><p style=\"padding: 0px; margin-right: 0px; margin-left: 0px; color: rgb(33, 37, 41); font-family: system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, &quot;Noto Sans&quot;, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;;\">Chapter 7&nbsp;&nbsp;SUBTRACTION</p><p style=\"padding: 0px; margin-right: 0px; margin-left: 0px; color: rgb(33, 37, 41); font-family: system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, &quot;Noto Sans&quot;, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;;\">Chapter 8&nbsp;&nbsp;MULTILPICATION</p><p style=\"padding: 0px; margin-right: 0px; margin-left: 0px; color: rgb(33, 37, 41); font-family: system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, &quot;Noto Sans&quot;, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;;\">Chapter 9&nbsp;&nbsp;DIVISION</p>', '', '', 'p142.png', 'https://navavision.com/video/CHAPTER%202_ONE%20TO%', '', '2021-04-20 10:10:30', '2022-02-05 09:32:54', 1),
(53, 18, 'Basic Level 2', '4000', 'aaa', 'bbb', '<p>In Vedic Mathematics level 2 you will learn urdhva tiryabhyam sutra 2, 3, 4 and 5 - digits without carryover 2, 3, 4 and 5 - digits with carryover nikhilam sutra less than base (2,3,4 and 5 digits with and without carryover) greater than base (2,3,4 and 5 digits with and withoutcarryover) one less and other greater than base (2,3,4 and 5 digits) anurupyena sutra (2,3 and 4 digits) antyaordaske’pi sutra (2,3 digits) gunakasamuccaya samuccayagunaka sutra (2,3 digits).</p>', '<p><span style=\"color: rgb(33, 37, 41); font-family: system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, &quot;Noto Sans&quot;, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;;\">Chapter 1&nbsp; &nbsp;</span><span style=\"font-size: 1rem;\">MULTIPLICATION</span></p><p><span style=\"color: rgb(33, 37, 41); font-family: system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, &quot;Noto Sans&quot;, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;;\">Chapter 2&nbsp; &nbsp;</span><span style=\"font-size: 1rem;\">MULTIPLICATION WITH SERIES</span></p><p><span style=\"color: rgb(33, 37, 41); font-family: system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, &quot;Noto Sans&quot;, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;;\">Chapter 3&nbsp; &nbsp;</span><span style=\"font-size: 1rem;\">VINCULUM</span></p><p><span style=\"color: rgb(33, 37, 41); font-family: system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, &quot;Noto Sans&quot;, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;;\">Chapter 4&nbsp; &nbsp;</span><span style=\"font-size: 1rem;\">DIVISION</span></p><p><span style=\"color: rgb(33, 37, 41); font-family: system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, &quot;Noto Sans&quot;, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;;\">Chapter 5&nbsp; &nbsp;</span><span style=\"font-size: 1rem;\">FRACTIONS</span></p><p><span style=\"color: rgb(33, 37, 41); font-family: system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, &quot;Noto Sans&quot;, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;;\">Chapter 6&nbsp; &nbsp;</span>DECIMALS<br></p>', '', '', 'p3.png', 'https://navavision.com/video/CHAPTER%202_ONE%20TO%', '', '2021-02-15 11:30:11', '2022-02-05 09:32:54', 1),
(54, 18, 'Intermediate Level 1', '4500', 'aaa', 'bbb', '<p>In Vedic Mathematics intermediate level 1 you will learn introduction, properties of square numbers, ekadhikena purvena sutra, digit number ending with 5, digit number ending with 5, digit number ending with 9, digit number ending with 9, anurupyena sutra, digit number, digit number, digit number, decimal number, yavadunam tavadunikritya varga yojayet sutra, digit number when less than the base, digit number when greater than the base, digit number when less than the base, digit number when less than the base, near to sub base (3,4 digits), ekanyunena purvena sutra (2,3 digits), dvanda yoga (2,3,4,5 digits).</p>', '<p><span style=\"color: rgb(33, 37, 41); font-family: system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, &quot;Noto Sans&quot;, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;;\">Chapter 1&nbsp;&nbsp;</span><span style=\"font-size: 1rem;\">SQUARES</span><span style=\"color: rgb(33, 37, 41); font-family: system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, &quot;Noto Sans&quot;, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;; font-size: 1rem;\">&nbsp;</span></p><p><span style=\"color: rgb(33, 37, 41); font-family: system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, &quot;Noto Sans&quot;, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;;\">Chapter 2&nbsp;&nbsp;</span><span style=\"font-size: 1rem;\">SQUARE ROOTS</span></p><p><span style=\"color: rgb(33, 37, 41); font-family: system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, &quot;Noto Sans&quot;, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;;\">Chapter 3&nbsp; &nbsp;</span><span style=\"font-size: 1rem;\">MULTIPLICATION TRICKS</span></p><p><span style=\"color: rgb(33, 37, 41); font-family: system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, &quot;Noto Sans&quot;, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;;\">Chapter 4&nbsp; &nbsp;</span><span style=\"font-size: 1rem;\">CUBES</span></p><p><span style=\"color: rgb(33, 37, 41); font-family: system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, &quot;Noto Sans&quot;, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;;\">Chapter 5&nbsp; &nbsp;</span><span style=\"font-size: 1rem;\">CUBE ROOTS</span></p><p><span style=\"color: rgb(33, 37, 41); font-family: system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, &quot;Noto Sans&quot;, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;;\">Chapter 6&nbsp; &nbsp;</span><span style=\"font-size: 1rem;\">RATIO AND PROPORTION</span></p><p><span style=\"color: rgb(33, 37, 41); font-family: system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, &quot;Noto Sans&quot;, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;;\">Chapter 7&nbsp; &nbsp;</span><span style=\"font-size: 1rem;\">PERCENTAGE</span></p>', '', '', 'p2.png', 'https://navavision.com/video/CHAPTER%202_ONE%20TO%', '', '2021-02-15 11:34:44', '2022-02-05 09:32:54', 1),
(55, 18, 'Intermediate Level 2', '4500', 'aaa', 'bbb', '<p>In Vedic Mathematics intermediate level 2 you will learn introduction, finding last digit of any number to any power, finding last two digits of any number to any power, antyayoreva sutra, urdhva triyagbhyam sutra,, introduction, simple interest, compound interest, operations on algebraic expressions, addition, subtraction, multiplication.<br></p>', '<p><span style=\"color: rgb(33, 37, 41); font-family: system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, &quot;Noto Sans&quot;, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;;\">Chapter 1&nbsp; &nbsp;</span><span style=\"font-size: 1rem;\">EXPONENTS</span></p><p><span style=\"color: rgb(33, 37, 41); font-family: system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, &quot;Noto Sans&quot;, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;;\">Chapter 2&nbsp; &nbsp;</span><span style=\"font-size: 1rem;\">SIMPLE INTEREST AND COMPOUND INTEREST</span></p><p><span style=\"color: rgb(33, 37, 41); font-family: system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, &quot;Noto Sans&quot;, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;;\">Chapter 3&nbsp; &nbsp;</span><span style=\"font-size: 1rem;\">ALGEBRAIC EXPRESSIONS</span></p><p><span style=\"color: rgb(33, 37, 41); font-family: system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, &quot;Noto Sans&quot;, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;;\">Chapter 4&nbsp; &nbsp;</span><span style=\"font-size: 1rem;\">SIMPLE EQUATIONS</span></p><p><span style=\"color: rgb(33, 37, 41); font-family: system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, &quot;Noto Sans&quot;, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;;\">Chapter 5&nbsp; &nbsp;</span><span style=\"font-size: 1rem;\">FACTORIZATION</span></p><p><span style=\"color: rgb(33, 37, 41); font-family: system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, &quot;Noto Sans&quot;, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;;\">Chapter 6&nbsp; &nbsp;</span><span style=\"font-size: 1rem;\">SPEED DISTANCE AND TIME</span></p>', '', '', 'p31.png', 'https://navavision.com/video/CHAPTER%202_ONE%20TO%', '', '2021-02-15 11:40:16', '2022-02-05 09:32:54', 1),
(56, 18, 'Advanced Level 1', '5000', 'aaa', 'bbb', '<p>In vedic mathematics advanced level 1 you will learn introduction, types of simple equations, introduction to quadratic equations, types of quadratic equations, types of cubic equations, types of biquadratic equations, types of simultaneous equations, types of partial fractions, when denominator has no repeated terms, when the order of numerator and denominator are same.<br></p>', '<p><span style=\"color: rgb(33, 37, 41); font-family: system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, &quot;Noto Sans&quot;, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;;\">Chapter 1&nbsp; &nbsp;</span><span style=\"font-size: 1rem;\">SOLVING SIMPLE EQUATIONS</span></p><p><span style=\"color: rgb(33, 37, 41); font-family: system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, &quot;Noto Sans&quot;, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;;\">Chapter 2&nbsp; &nbsp;</span><span style=\"font-size: 1rem;\">SOLVING QUADRATIC EQUATIONS</span></p><p><span style=\"color: rgb(33, 37, 41); font-family: system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, &quot;Noto Sans&quot;, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;;\">Chapter 3&nbsp; &nbsp;</span><span style=\"font-size: 1rem;\">SOLVING CUBIC EQUATIONS</span></p><p><span style=\"color: rgb(33, 37, 41); font-family: system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, &quot;Noto Sans&quot;, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;;\">Chapter 4&nbsp; &nbsp;</span><span style=\"font-size: 1rem;\">BIQUADRACTIC EQUATIONS</span></p><p><span style=\"color: rgb(33, 37, 41); font-family: system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, &quot;Noto Sans&quot;, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;;\">Chapter 5&nbsp; &nbsp;</span><span style=\"font-size: 1rem;\">SOLVING SIMULTANEOUS EQUATIONS</span></p><p><span style=\"color: rgb(33, 37, 41); font-family: system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, &quot;Noto Sans&quot;, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;;\">Chapter 6&nbsp; &nbsp;</span><span style=\"font-size: 1rem;\">PARTIAL FRACTIONS</span><br></p>', '', '', 'p15.png', 'https://navavision.com/video/CHAPTER%202_ONE%20TO%', '', '2021-02-15 11:45:12', '2022-02-05 09:32:54', 1),
(57, 18, 'Advanced Level 2', '5000', 'aaa', 'bbb', '<p>In vedic mathematics advanced level 2 you will learn&nbsp; types of angles, sankalana vyavakalanabhyam sutra, missing angle in straight line, missing angle at a point, missing angle in a transversal, exterior angle of a triangle, area and perimeter of 2d shapestrigonometric functions, trigonometric ratios of standard angles, trick to remember trigonometric ratios, heights and distances, number sequence, number patterns, picture puzzles, competitive exams.<br></p>', '<p><span style=\"color: rgb(33, 37, 41); font-family: system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, &quot;Noto Sans&quot;, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;;\">Chapter 1&nbsp; &nbsp;</span><span style=\"font-size: 1rem;\">GEOMETRY</span></p><p><span style=\"color: rgb(33, 37, 41); font-family: system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, &quot;Noto Sans&quot;, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;;\">Chapter 2&nbsp; &nbsp;</span><span style=\"font-size: 1rem;\">TRIGONOMETRY</span></p><p><span style=\"color: rgb(33, 37, 41); font-family: system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, &quot;Noto Sans&quot;, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;;\">Chapter 3&nbsp; &nbsp;</span>LOGICAL REASONING&nbsp;<br></p>', '', '', 'p21.png', 'https://navavision.com/video/CHAPTER%202_ONE%20TO%', '', '2021-02-15 11:47:54', '2022-02-05 09:32:54', 1);
INSERT INTO `course_levels` (`level_id`, `course_id`, `level`, `price`, `text_link`, `work_book_link`, `description`, `Syllabus`, `level_syllabus_file_name`, `level_syllabus_file_type`, `level_img_file_name`, `sample_video_file_name`, `sample_video_file_type`, `created_at`, `updated_at`, `type_id`) VALUES
(58, 19, 'Foundation Level', '4000', 'aaa', 'bbb', '<p><span style=\"color: rgb(33, 37, 41); font-family: system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, &quot;Noto Sans&quot;, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;;\">In science club foundation level you will learn sink or float experiment,&nbsp; &nbsp;test of solubility,&nbsp; &nbsp;center of gravity,&nbsp; &nbsp;moving water,&nbsp; &nbsp;optical inversion,&nbsp; &nbsp;polarity of water,&nbsp; &nbsp;dancing fruit,&nbsp; lava lamp,&nbsp; &nbsp;a light match does not make shadow,&nbsp; dyed flowers, floating eggs,&nbsp; water melon pop,&nbsp; elephant toothpaste,&nbsp; bouncing eggs,&nbsp; non popping balloons,&nbsp; make it rain experiment.</span><br></p>', '<p style=\"padding: 0px; margin-right: 0px; margin-left: 0px; color: rgb(33, 37, 41); font-family: system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, &quot;Noto Sans&quot;, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;;\">1.&nbsp; &nbsp;SINK OR FLOAT EXPERIMENT</p><p style=\"padding: 0px; margin-right: 0px; margin-left: 0px; color: rgb(33, 37, 41); font-family: system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, &quot;Noto Sans&quot;, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;;\">&nbsp;2.&nbsp; &nbsp;TEST OF SOLUBILITY</p><p style=\"padding: 0px; margin-right: 0px; margin-left: 0px; color: rgb(33, 37, 41); font-family: system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, &quot;Noto Sans&quot;, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;;\">&nbsp;3.&nbsp; &nbsp;CENTER OF GRAVITY</p><p style=\"padding: 0px; margin-right: 0px; margin-left: 0px; color: rgb(33, 37, 41); font-family: system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, &quot;Noto Sans&quot;, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;;\">&nbsp;4.&nbsp; &nbsp;MOVING WATER</p><p style=\"padding: 0px; margin-right: 0px; margin-left: 0px; color: rgb(33, 37, 41); font-family: system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, &quot;Noto Sans&quot;, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;;\">&nbsp;5.&nbsp; &nbsp;OPTICAL INVERSION</p><p style=\"padding: 0px; margin-right: 0px; margin-left: 0px; color: rgb(33, 37, 41); font-family: system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, &quot;Noto Sans&quot;, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;;\">&nbsp;6.&nbsp; &nbsp;POLARITY OF WATER</p><p style=\"padding: 0px; margin-right: 0px; margin-left: 0px; color: rgb(33, 37, 41); font-family: system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, &quot;Noto Sans&quot;, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;;\">&nbsp;7.&nbsp; &nbsp;DANCING FRUIT</p><p style=\"padding: 0px; margin-right: 0px; margin-left: 0px; color: rgb(33, 37, 41); font-family: system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, &quot;Noto Sans&quot;, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;;\">&nbsp;8.&nbsp; &nbsp;LAVA LAMP</p><p style=\"padding: 0px; margin-right: 0px; margin-left: 0px; color: rgb(33, 37, 41); font-family: system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, &quot;Noto Sans&quot;, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;;\">&nbsp;9.&nbsp; &nbsp;A LIGHT MATCH DOES NOT MAKE SHADOW</p><p style=\"padding: 0px; margin-right: 0px; margin-left: 0px; color: rgb(33, 37, 41); font-family: system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, &quot;Noto Sans&quot;, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;;\">10.&nbsp; DYED FLOWERS</p><p style=\"padding: 0px; margin-right: 0px; margin-left: 0px; color: rgb(33, 37, 41); font-family: system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, &quot;Noto Sans&quot;, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;;\">11.&nbsp; FLOATING EGGS</p><p style=\"padding: 0px; margin-right: 0px; margin-left: 0px; color: rgb(33, 37, 41); font-family: system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, &quot;Noto Sans&quot;, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;;\">12.&nbsp; WATER MELON POP</p><p style=\"padding: 0px; margin-right: 0px; margin-left: 0px; color: rgb(33, 37, 41); font-family: system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, &quot;Noto Sans&quot;, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;;\">13.&nbsp; ELEPHANT TOOTHPASTE</p><p style=\"padding: 0px; margin-right: 0px; margin-left: 0px; color: rgb(33, 37, 41); font-family: system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, &quot;Noto Sans&quot;, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;;\">14.&nbsp; BOUNCING EGGS</p><p style=\"padding: 0px; margin-right: 0px; margin-left: 0px; color: rgb(33, 37, 41); font-family: system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, &quot;Noto Sans&quot;, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;;\">15.&nbsp; NON POPPING BALLOONS</p><p><span style=\"color: rgb(33, 37, 41); font-family: system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, &quot;Noto Sans&quot;, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;; font-size: 1rem;\">16.&nbsp; MAKE IT RAIN EXPERIMENT</span></p><p>ACTIVITY 1: MODEL BASED ON AIR PRESSURE {EMPTYING WATER BOTTLE]\r\n ACTIVITY 2: HYDRAULIC CRANE MODEL<br></p>', '', '', '17.jpg', 'https://navavision.com/video/CHAPTER%202_ONE%20TO%', '', '2021-02-15 11:57:31', '2022-02-05 09:32:54', 1),
(59, 19, 'Basic Level ', '4000', 'aaa', 'bbb', '<p>In science club basic level you will learn&nbsp; escaping water experiment,&nbsp; &nbsp;free gravity water,&nbsp; &nbsp;ideal gas law,&nbsp; &nbsp;electrolysis,&nbsp; diffusion by using hot and cold water,&nbsp; fruit battery experiment,&nbsp; &nbsp; generate static electricity,&nbsp; &nbsp;drinking candle,&nbsp; &nbsp;osmosis experiment using potatoes,&nbsp; &nbsp;self inflating balloons experiment,&nbsp; &nbsp;simple barometer,&nbsp; &nbsp;bending water due to charge carrying balloon.,&nbsp; &nbsp;n0n newtonian fluids,&nbsp; &nbsp;coke and mentos experiment,&nbsp; &nbsp;pin hole camera,&nbsp; &nbsp;water does not fall<br></p>', '<p>&nbsp; 1.&nbsp; &nbsp;ESCAPING WATER EXPERIMENT</p><p>&nbsp; 2.&nbsp; &nbsp;FREE GRAVITY WATER</p><p>&nbsp; 3.&nbsp; &nbsp;IDEAL GAS LAW</p><p>&nbsp; 4.&nbsp; &nbsp;ELECTROLYSIS</p><p>&nbsp; 5.&nbsp; &nbsp;DIFFUSION BY USING HOT AND COLD WATER</p><p>&nbsp; 6.&nbsp; &nbsp;FRUIT BATTERY EXPERIMENT</p><p>&nbsp; 7.&nbsp; &nbsp; GENERATE STATIC ELECTRICITY</p><p>&nbsp; 8.&nbsp; &nbsp;DRINKING CANDLE</p><p>&nbsp; 9.&nbsp; &nbsp;OSMOSIS EXPERIMENT USING POTATOES</p><p>&nbsp;10.&nbsp; &nbsp;SELF INFLATING BALLOONS EXPERIMENT</p><p>&nbsp;11.&nbsp; &nbsp;SIMPLE BAROMETER</p><p>&nbsp;12.&nbsp; &nbsp;BENDING WATER DUE TO CHARGE CARRYING BALLOON.</p><p>&nbsp;13.&nbsp; &nbsp;N0N NEWTONIAN FLUIDS</p><p>&nbsp;14.&nbsp; &nbsp;COKE AND MENTOS EXPERIMENT</p><p>&nbsp;15.&nbsp; &nbsp;PIN HOLE CAMERA</p><p>&nbsp;16.&nbsp; &nbsp;WATER DOES NOT FALL</p><p>ACTIVITY 1: GENERATOR WORKING MODEL\r\nACTIVITY 2: WHEEL RELAXATION MODEL<br></p>', '', '', '221.png', 'https://navavision.com/video/CHAPTER%202_ONE%20TO%', '', '2021-02-15 12:01:27', '2022-02-05 09:32:54', 1),
(60, 19, 'Intermediate Level ', '4000', 'aaa', 'bbb', '<p><span style=\"color: rgb(33, 37, 41); font-family: system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, &quot;Noto Sans&quot;, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;;\">In science club foundation level you will learn sink or float experiment,&nbsp; &nbsp;test of solubility,&nbsp; &nbsp;center of gravity,&nbsp; &nbsp;moving water,&nbsp; &nbsp;optical inversion,&nbsp; &nbsp;polarity of water,&nbsp; &nbsp;dancing fruit,&nbsp; lava lamp,&nbsp; &nbsp;a light match does not make shadow,&nbsp; dyed flowers, floating eggs,&nbsp; water melon pop,&nbsp; elephant toothpaste,&nbsp; bouncing eggs,&nbsp; non popping balloons,&nbsp; make it rain experiment.</span><br></p>', '<p style=\"padding: 0px; margin-right: 0px; margin-left: 0px; color: rgb(33, 37, 41); font-family: system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, &quot;Noto Sans&quot;, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;;\">&nbsp;1.&nbsp; &nbsp;UPRIGHT COIN EXPERIMENT&nbsp; &nbsp; &nbsp; &nbsp;<span style=\"padding: 0px; margin: 0px; font-size: 1rem;\">2.&nbsp; &nbsp;STRAW SPINNER EXPERIMENT</span></p><p style=\"padding: 0px; margin-right: 0px; margin-left: 0px; color: rgb(33, 37, 41); font-family: system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, &quot;Noto Sans&quot;, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;;\">&nbsp;3.&nbsp; &nbsp;BALOON ROCKET EXPERIMENT&nbsp; &nbsp; &nbsp; &nbsp;<span style=\"padding: 0px; margin: 0px; font-size: 1rem;\">4.&nbsp; &nbsp;CAUSE OF REFRACTION EXPERIMENT</span></p><p style=\"padding: 0px; margin-right: 0px; margin-left: 0px; color: rgb(33, 37, 41); font-family: system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, &quot;Noto Sans&quot;, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;;\">&nbsp;5.&nbsp; &nbsp;FIBER OPTICS EXPERIMENT&nbsp; &nbsp; &nbsp; &nbsp;<span style=\"padding: 0px; margin: 0px; font-size: 1rem;\">6.&nbsp; &nbsp;FORMATION OF RAINBOW EXPERIMENT</span></p><p style=\"padding: 0px; margin-right: 0px; margin-left: 0px; color: rgb(33, 37, 41); font-family: system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, &quot;Noto Sans&quot;, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;;\">&nbsp;7.&nbsp; &nbsp;STRAW WAVES EXPERIMENT&nbsp; &nbsp; &nbsp; &nbsp;<span style=\"padding: 0px; margin: 0px; font-size: 1rem;\">&nbsp;8.&nbsp; &nbsp;EXPANSION EXPERIMENT</span></p><p style=\"padding: 0px; margin-right: 0px; margin-left: 0px; color: rgb(33, 37, 41); font-family: system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, &quot;Noto Sans&quot;, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;;\">&nbsp;9.&nbsp; &nbsp;LEAK PROOF BAG EXPERIMENT&nbsp; &nbsp; &nbsp;&nbsp;<span style=\"padding: 0px; margin: 0px; font-size: 1rem;\">&nbsp;10.&nbsp; &nbsp;SEPERATE WATER INTO HYDROGEN AND OXYGEN</span></p><p style=\"padding: 0px; margin-right: 0px; margin-left: 0px; color: rgb(33, 37, 41); font-family: system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, &quot;Noto Sans&quot;, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;;\">&nbsp;11.&nbsp; &nbsp;CARBON SUGAR SNAKE EXPERIMENT&nbsp;&nbsp;<span style=\"padding: 0px; margin: 0px; font-size: 1rem;\">&nbsp; &nbsp; &nbsp;12.&nbsp; &nbsp;ELECTROMAGNETIC TRAIN DIY</span></p><p style=\"padding: 0px; margin-right: 0px; margin-left: 0px; color: rgb(33, 37, 41); font-family: system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, &quot;Noto Sans&quot;, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;;\">&nbsp;13.&nbsp; &nbsp;MULTI BOIL EXPERIMENT<span style=\"padding: 0px; margin: 0px; font-size: 1rem;\">&nbsp; &nbsp; &nbsp; &nbsp;14.&nbsp; &nbsp;EFFECTS OF HEAT EXPERIMENT</span></p><p style=\"padding: 0px; margin-right: 0px; margin-left: 0px; color: rgb(33, 37, 41); font-family: system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, &quot;Noto Sans&quot;, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;;\">&nbsp;15.&nbsp; &nbsp;SIMPLE CONDUCTION<span style=\"padding: 0px; margin: 0px; font-size: 1rem;\">&nbsp; &nbsp; &nbsp; &nbsp;16.&nbsp; &nbsp;BALLOON CAR EXPERIMENT</span></p><p style=\"padding: 0px; margin-right: 0px; margin-left: 0px; color: rgb(33, 37, 41); font-family: system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, &quot;Noto Sans&quot;, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;;\">ACTIVITY 1:&nbsp; &nbsp; 3D TOPOGRAPHIC MAP ACTIVE</p><p style=\"padding: 0px; margin-right: 0px; margin-left: 0px; color: rgb(33, 37, 41); font-family: system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, &quot;Noto Sans&quot;, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;;\">ACTIVITY 2:&nbsp; &nbsp; MODEL OF SOLAR SYSTEM</p>', '', '', '224.png', 'https://navavision.com/video/CHAPTER%202_ONE%20TO%', '', '2021-02-16 10:28:24', '2022-02-05 09:32:54', 1),
(61, 19, 'Advanced Level ', '4000', 'aaa', 'bbb', '<p>In science club advanced level&nbsp; you will learn&nbsp; pepper and surface tension experiment,&nbsp; &nbsp;ice floats experiment,&nbsp; &nbsp;water density experiment and ocean current,&nbsp; &nbsp;create a water filter,&nbsp; &nbsp;air takes up space experiment,&nbsp; &nbsp;coin battery experiment,&nbsp; &nbsp;make your own electromagnet experiment,&nbsp; &nbsp;benhams disk experiment,&nbsp; &nbsp;liquid nitrogen and balloon,&nbsp; &nbsp;create fog rings,&nbsp; &nbsp;how to keep fruit from growing brown,&nbsp; &nbsp;detect iron in food with tea,&nbsp; &nbsp;carbon dioxide given out during respiration,&nbsp; &nbsp;simple erosion experiment,&nbsp; &nbsp;analysis honey content,&nbsp; &nbsp;baking soda volcano.<br></p>', '<p>&nbsp;1.&nbsp; &nbsp;PEPPER AND SURFACE TENSION EXPERIMENT</p><p>&nbsp;2.&nbsp; &nbsp;ICE FLOATS EXPERIMENT</p><p>&nbsp;3.&nbsp; &nbsp;WATER DENSITY EXPERIMENT AND OCEAN CURRENT</p><p>&nbsp;4.&nbsp; &nbsp;CREATE A WATER FILTER</p><p>&nbsp;5.&nbsp; &nbsp;AIR TAKES UP SPACE EXPERIMENT</p><p>&nbsp;6.&nbsp; &nbsp;COIN BATTERY EXPERIMENT</p><p>&nbsp;7.&nbsp; &nbsp;MAKE YOUR OWN ELECTROMAGNET EXPERIMENT</p><p>&nbsp;8.&nbsp; &nbsp;BENHAMS DISK EXPERIMENT</p><p>&nbsp;9.&nbsp; &nbsp;LIQUID NITROGEN AND BALLOON</p><p>&nbsp;10.&nbsp; &nbsp;CREATE FOG RINGS</p><p>&nbsp;11.&nbsp; &nbsp;HOW TO KEEP FRUIT FROM GROWING BROWN</p><p>&nbsp;12.&nbsp; &nbsp;DETECT IRON IN FOOD WITH TEA</p><p>&nbsp;13.&nbsp; &nbsp;CARBON DIOXIDE GIVEN OUT DURING RESPIRATION</p><p>&nbsp;14.&nbsp; &nbsp;SIMPLE EROSION EXPERIMENT</p><p>&nbsp;15.&nbsp; &nbsp;ANALYSIS HONEY CONTENT</p><p>&nbsp;16.&nbsp; &nbsp;BAKING SODA VOLCANO</p><p>ACTIVITY 1:&nbsp; &nbsp; PREPARE VACUUM CLEANER TUBE MODEL</p><p>ACTIVITY 2:&nbsp; &nbsp; MODEL OF LABORATORY DISTILLER</p>', '', '', '225.png', 'https://navavision.com/video/CHAPTER%202_ONE%20TO%', '', '2021-02-16 10:32:38', '2022-02-05 09:32:54', 1),
(62, 17, 'Basic Level 1', '3000', 'aaa', 'bbb', '<p>In quick math club basic level 1 you will learn 2, 3, 4 digits, addition of 5, 2, 3, 4 digits, subtraction of 5, multiplication table tricks, using hand method, multiplying by 6, 7, 8, 9 and 10,multiplying by 9, using tricks,table of 7 to 11, table 12 to 19, divisibility rules, multiplication.<br></p>', '<p>1&nbsp; &nbsp; &nbsp;Addition</p><p>2&nbsp; &nbsp; &nbsp;Subtraction</p><p>3<span style=\"font-size: 1rem;\">&nbsp; &nbsp; &nbsp;</span><span style=\"font-size: 1rem;\">Multiplication table tricks</span></p><p>4<span style=\"font-size: 1rem;\">&nbsp; &nbsp; &nbsp;</span><span style=\"font-size: 1rem;\">Divisibility rules</span></p><p><span style=\"font-size: 1rem;\">5</span><span style=\"font-size: 1rem;\">&nbsp; &nbsp; &nbsp;</span><span style=\"font-size: 1rem;\">Multiplication</span></p><p><span style=\"font-size: 1rem;\">6&nbsp; &nbsp; &nbsp;</span><span style=\"font-size: 1rem;\">Multiplication by series</span></p>', '', '', '227.png', 'https://navavision.com/video/CHAPTER%202_ONE%20TO%', '', '2021-02-16 10:52:35', '2022-02-05 09:32:54', 1),
(63, 17, 'Basic Level 2', '3000', 'aaa', 'bbb', '<p><span style=\"color: rgb(33, 37, 41); font-family: system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, &quot;Noto Sans&quot;, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;;\">In quick math basic level 1 you will learn sum root / digital root, cast out nines (9’s), answer verification, addition, subtraction, multiplication, divisiondoubling, multiplication by 4, multiplication by 8, multiplication by 16, halving,division by 4, division by 8factors,total number of factors, sum of factors, product of factors.</span><br></p>', '<p style=\"padding: 0px; margin-right: 0px; margin-left: 0px; color: rgb(33, 37, 41); font-family: system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, &quot;Noto Sans&quot;, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;;\">1.&nbsp; &nbsp;SUM ROOT / DIGITAL ROOT</p><p style=\"padding: 0px; margin-right: 0px; margin-left: 0px; color: rgb(33, 37, 41); font-family: system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, &quot;Noto Sans&quot;, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;;\">2.&nbsp; &nbsp;DIVISION</p><p style=\"padding: 0px; margin-right: 0px; margin-left: 0px; color: rgb(33, 37, 41); font-family: system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, &quot;Noto Sans&quot;, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;;\">3.&nbsp; &nbsp;DOUBLING AND HALVING</p><p style=\"padding: 0px; margin-right: 0px; margin-left: 0px; color: rgb(33, 37, 41); font-family: system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, &quot;Noto Sans&quot;, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;;\">4.2&nbsp; &nbsp;FACTORS</p><p style=\"padding: 0px; margin-right: 0px; margin-left: 0px; color: rgb(33, 37, 41); font-family: system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, &quot;Noto Sans&quot;, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;;\">5.&nbsp; &nbsp;FRACTIONS</p><p style=\"padding: 0px; margin-right: 0px; margin-left: 0px; color: rgb(33, 37, 41); font-family: system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, &quot;Noto Sans&quot;, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;;\">6.&nbsp; &nbsp;DECIMALS</p>', '', '', '3.png', 'https://navavision.com/video/CHAPTER%202_ONE%20TO%', '', '2021-02-16 10:54:10', '2022-02-05 09:32:54', 1),
(64, 17, 'Intermediate Level 1', '3000', 'aaa', 'bbb', '<p>In quick math intermediate level 1 you will learn conversion, convert the fractions to decimals and decimals to fractions, convert the percentage to fractions and fractions to percentage, convert the percentage to decimals and decimals to percentage, x what percent on y, x what percent greater than y, x what percent lesser than y.<br></p>', '<p style=\"padding: 0px; margin-right: 0px; margin-left: 0px;\"><font color=\"#212529\" face=\"system-ui, -apple-system, Segoe UI, Roboto, Helvetica Neue, Arial, Noto Sans, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji\">1.&nbsp; &nbsp;PERCENTAGE</font></p><p style=\"padding: 0px; margin-right: 0px; margin-left: 0px;\"><font color=\"#212529\" face=\"system-ui, -apple-system, Segoe UI, Roboto, Helvetica Neue, Arial, Noto Sans, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji\">2.&nbsp; &nbsp;RATIO AND PROPORTIONS</font></p><p style=\"padding: 0px; margin-right: 0px; margin-left: 0px;\"><font color=\"#212529\" face=\"system-ui, -apple-system, Segoe UI, Roboto, Helvetica Neue, Arial, Noto Sans, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji\">3.&nbsp; &nbsp;POWER AND EXPONENTS</font></p><p style=\"padding: 0px; margin-right: 0px; margin-left: 0px;\"><font color=\"#212529\" face=\"system-ui, -apple-system, Segoe UI, Roboto, Helvetica Neue, Arial, Noto Sans, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji\">4&nbsp; &nbsp;SQUARE AND SQUARE ROOTS</font></p><p style=\"padding: 0px; margin-right: 0px; margin-left: 0px;\"><font color=\"#212529\" face=\"system-ui, -apple-system, Segoe UI, Roboto, Helvetica Neue, Arial, Noto Sans, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji\">5.&nbsp; &nbsp;CUBE AND CUBE ROOTS</font></p><p style=\"padding: 0px; margin-right: 0px; margin-left: 0px;\"><font color=\"#212529\" face=\"system-ui, -apple-system, Segoe UI, Roboto, Helvetica Neue, Arial, Noto Sans, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji\">6.&nbsp; &nbsp;SURDS</font></p><p style=\"padding: 0px; margin-right: 0px; margin-left: 0px;\"><font color=\"#212529\" face=\"system-ui, -apple-system, Segoe UI, Roboto, Helvetica Neue, Arial, Noto Sans, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji\">6.&nbsp; &nbsp;DECIMALS</font></p>', '', '', '31.png', 'https://navavision.com/video/CHAPTER%202_ONE%20TO%', '', '2021-02-16 10:59:06', '2022-02-05 09:32:54', 1),
(65, 17, 'Intermediate Level 2', '3000', 'aaa', 'bbb', '<p>In quick math intermediate level 2 you will learn vbodmas rule, sum of first ‘n’ natural numbers, sum of first ‘n’ even numbers, sum of first ‘n’ odd numbers, sum of squares of first ‘n’ natural numbers, sum of squares of first ‘n’ consecutive even numbers, sum of squares of first ‘n’ consecutive odd numbers, sum of cubes of first ‘n’ natural numbers, sum of cubes of first ‘n’ consecutive even numbers, sum of cubes of first ‘n’ consecutive odd numbers, decimal and binary system, convert decimal number to binary equivalent, convert binary number to decimal equivalent.<br></p>', '<p>1&nbsp; &nbsp;&nbsp;Number system</p><p>2&nbsp; &nbsp;&nbsp;Profit and Loss</p><p>3&nbsp; &nbsp;&nbsp;Simple Interest and Compound Interest&nbsp; &nbsp;</p><p>4&nbsp; &nbsp;&nbsp;Algebraic Expressions</p><p>5&nbsp; &nbsp;&nbsp;Factorisation</p><p>6&nbsp; &nbsp;&nbsp;Statistics</p><p> </p><p>\r\n</p>', '', '', '125.png', 'https://navavision.com/video/CHAPTER%202_ONE%20TO%', '', '2021-02-16 11:02:23', '2022-02-05 09:32:54', 1),
(66, 17, 'Advanced Level 1', '3000', 'aaa', 'bbb', '<p>In quick math advanced level 1 you will learn perimeter and area, square, rectangle, triangle, circle, parallelogram, rhombus, trapezium, volume and surface area, cube, cuboid, sphere, cone, frustum of cone,cylinderintroduction and its applicationspresent ages, before ‘k’ years, after ‘k’ years.Find t, s, d, when two distances are the same and speeds are different, miscellaneous cases, time, work and wages, more men less days and converse, more men more work and converse, more days more work and converse, working alternately.<br></p>', '<p>1&nbsp; &nbsp;&nbsp;Mensuration</p><p>2&nbsp; &nbsp;&nbsp;Pythagorean Theorem</p><p>3&nbsp; &nbsp;&nbsp;Problems on ages</p><p>4&nbsp; &nbsp;&nbsp;Problems on Trains</p><p>5&nbsp; &nbsp;&nbsp;Boats and streams\r\n</p><p>\r\n</p>', '', '', '126.png', 'https://navavision.com/video/CHAPTER%202_ONE%20TO%', '', '2021-02-16 11:06:15', '2022-02-05 09:32:54', 1),
(67, 17, 'Advanced Level 2', '3000', 'aaa', 'bbb', '<p>In quick math advanced level 2 you will learn individual capacity, both pipes are inlet pipes, both pipes are outlet pipes, one pipe is inlet pipe and other is outlet pipe, partial work, both pipes are inlet pipes, both pipes are outlet pipes, one pipe is inlet pipe and other is outlet pipe, efficiency, both pipes are inlet pipes.<br></p>', '<p>1&nbsp; &nbsp;&nbsp;Pipes and Cisterns</p><p>2&nbsp; &nbsp;&nbsp;Permutations and combinations</p><p>3&nbsp; &nbsp;&nbsp;Sets and Relations, Venn Diagrams</p><p>4&nbsp; &nbsp;&nbsp;Probability</p><p>5&nbsp; &nbsp;&nbsp;Trigonometry</p><p>6&nbsp; &nbsp;&nbsp;Series</p><p>\r\n</p>', '', '', '127.png', 'https://navavision.com/video/CHAPTER%202_ONE%20TO%', '', '2021-02-16 11:10:08', '2022-02-05 09:32:54', 1),
(68, 23, 'Scratch 1', '4000', 'aaa', 'bbb', '<p>In unplug coding scratch level 1 you will learn a few words about coding, why unplug- coding important, objective, how organised this book, foundations of computer, parts of the computer, input devices, output devices, history of internet, binary concept, binary to decimal conversion, decimal to binary conversion, assessment /code challenges/worksheet, algorithm concept, instructions, build a robot, missing instructions, error / bug, bug hunting, debugging, assessment /code challenges/worksheet, advantage of story pattern, story pattern (multiple examples), story pattern (multiple examples) with bug, pattern recognition (multiple examples), pattern recognition with bug, instructions.<br></p>', '<p>Module 1 to Module 10.</p>', '', '', '128.png', 'https://navavision.com/video/CHAPTER%202_ONE%20TO%', '', '2021-02-16 11:17:30', '2022-02-05 09:32:54', 1),
(69, 23, 'Scratch 2', '4000', 'aaa', 'bbb', '<p>In unplug coding scratch level 1 you will learn a few words about coding, why unplug- coding important, objective, how organised this book, foundations of computer, parts of the computer, input devices, output devices, history of internet, topology, concept of numbers, number system, binary concept, binary to decimal conversion, decimal to binary conversion, changing the number of sides, assessment /code challenges/ worksheet.<br></p>', '<p>Module 1 to Module 9</p>', '', '', '228.png', 'https://navavision.com/video/CHAPTER%202_ONE%20TO%', '', '2021-02-16 11:20:16', '2022-02-05 09:32:54', 1),
(70, 28, 'Script 1', '5000', 'aaa', 'bbb', '<p>In cyber literacy script level 1 introduction to cyber security, why cyber security to students?, what is hacking and ethical hacking?, communities of hackers, hackers and hacking methodology, hacking strategies,window command prompt-based tricks, amazing windows tricks, registry editor, secure file and folders, trace route, gathering basic information using whoislookup, discovering technologies used on the website, info gathering using search engines, info gathering using meta tags &amp; words, info gathering using blog and forums, how phishing works.<br></p>', '<p>1-Introduction&nbsp;</p><p>2- Window Hacking</p><p>3- Information\r\nGathering and\r\nScanning</p><p>4- Google Hacking</p><p>5- Network Hacking</p><p>6- About Attacks</p><p>7- Cybercrime and\r\nCyber law</p><p>8- Defensive\r\nMethods<span style=\"font-size: 1rem;\">&nbsp;</span></p>', '', '', '130.png', 'https://navavision.com/video/CHAPTER%202_ONE%20TO%', '', '2021-02-16 11:34:00', '2022-02-05 09:32:54', 1),
(71, 28, 'Script 2', '5000', 'aaa', 'bbb', '<p>In cyber literaly script level 2 you will learn basic overview of kali linux tools, the terminal &amp; linux commandsinfo gathering using scanning, info gathering using spiders, info gathering using web emil hacking andsecurity, how hackers make fake pages, how logger works, social engineering techniquesintroduction to social engineering, malte go basics, golismero, analysing the gathered info &amp; building anattack strategy, backdooring any file type (images, pdf\'s ...Etc), compiling &amp; changing trojan\'s icon, spoofing .<br></p>', '<p>1- Linux Basics</p><p>2- Information\r\nGathering &amp;\r\nScanning</p><p>3- Gaining Access -\r\nClient-Side Attacks -\r\nSocial Engineering</p><p>4- Website Hacking</p><p>5- Cyber Ethics &amp;\r\nCyber Laws</p>', '', '', '21.jpg', 'https://navavision.com/video/CHAPTER%202_ONE%20TO%', '', '2021-02-16 11:37:02', '2022-02-05 09:32:54', 1),
(72, 21, 'Foundation Level', '4000', 'aaa', 'bbb', '<p>In robotics foundation level you will learn introduction 1, basic components used 3, chassis 3, dc motor 3, switch 4, battery 4, fan using dc motor 5, exercises 7, multiple choice questions 8, famous scientist- archytas 9, wobblebot 10, exercises 11,multiple choice questions 12, famous scientist- leonardo da vinci 13, self-rotating robot 14, exercises 16, multiple choice questions 17, famous scientist- isaac asimov 18, robot propeller car 19, exercises 21, multiple choice questions 22, famous scientist- william grey walter.<br></p>', '<p>1&nbsp; &nbsp;Introduction</p><p>2&nbsp; &nbsp;Basic components used</p><p>3&nbsp; &nbsp;Fan using DC Motor</p><p>4&nbsp; &nbsp;Wobblebot</p><p>5&nbsp; &nbsp;Self-Rotating Robot</p><p>6&nbsp; &nbsp;Robot Propeller Car</p><p> </p>', '', '', '131.png', 'https://navavision.com/video/CHAPTER%202_ONE%20TO%', '', '2021-02-16 11:44:02', '2022-02-05 09:32:54', 1),
(73, 21, 'Basic Level ', '4000', 'aaa', 'bbb', '<p>In robotics basic level you will learn introduction 1, basic components used 3, chassis 3, dc motor 3, switch 4, battery 4, sensor 5,gear motor 5, resistor 6, transistor 6, breadboard 8, how to make an ir sensorexercises 11, multiple choice questions 12, famous scientist - jacques devaucanson 13, how ldr works? 14, exercises 16, multiple choice questions 17, famous scientist - victor scheinman 18, line follower robot 19, exercises 21, multiple choice questions 23, famous scientist - joseph f.Engelberger 24, light follower robot 25, exercises 27, multiple choice questions 29, famous scientist - george devol.<br></p>', '<p>1&nbsp; &nbsp;Introduction</p><p>2&nbsp; &nbsp;Basic components used</p><p>3&nbsp; &nbsp;How to make an IR Sensor</p><p>4&nbsp; &nbsp;How LDR works?</p><p>5&nbsp; &nbsp;Line Follower Robot</p><p>6&nbsp;&nbsp;Light Follower Robot</p>', '', '', '132.png', 'https://navavision.com/video/CHAPTER%202_ONE%20TO%', '', '2021-02-16 11:49:03', '2022-02-05 09:32:54', 1),
(74, 21, 'Intermediate Level ', '4000', 'aaa', 'bbb', '<p>In Robotics Intermediate level you will learn Introduction , basic components used , arduino , components in arduino board , l293d motor driver , ultrasonic sensor , servo motor,. Arduino uno blink ,exercises , multiple choice questions famous robot - sophia , interfacing dc motor with arduino uno , exercises , multiple choice questions , famous robot - kuri , obstacle avoidance robot , exercises , multiple choice questions , famous robot - aibo , edge detector robot.<br></p>', '<p>1. Introduction&nbsp;</p><p> 2. Basic components used</p><p>3. Arduino UNO Blink</p><p>4. Interfacing DC Motor with Arduino UNO</p><p>5.&nbsp;&nbsp;Obstacle Avoidance Robot</p><p>6.&nbsp;&nbsp;Edge Detector Robot</p>', '', '', '229.png', 'https://navavision.com/video/CHAPTER%202_ONE%20TO%', '', '2021-02-16 11:54:00', '2022-02-05 09:32:54', 1),
(75, 21, 'Advanced Level ', '4000', 'aaa', 'bbb', '<p>In Robotics Advanced level you will learn Introduction 1,basic components used 3, arduino nano 3, mpu6050 accelerometer 6, hc-05 bluetooth module 7, rf module 7, ht-12e encoder ic 9, ht-12e decoder ic 9, arduino nano blink 11, exercises 13,famous robot - pepper 15,arduino nano buzz 16, exercises 18, multiple choice questions 19, famous robot - actroid 20, gesture controlled robot 21, exercises 24, multiple choice questions 25, famous robot - atlas 26, mobile controlled robot 27, exercises 29,multiple choice questions 30, famous robot - asimo , multiple choice questions.<br></p>', '<p>1.&nbsp; INTRODUCTION&nbsp;</p><p>2. BASIC COMPONENTS USED</p><p>3. ARDUINO NANO BLINK</p><p>4 ARDUINO NANO BUZZ</p><p>5 GESTURE CONTROLLED ROBOT</p><p>6. MOBILE CONTROLLED ROBOT</p>', '', '', '31.jpg', 'https://navavision.com/video/CHAPTER%202_ONE%20TO%', '', '2021-02-16 11:57:37', '2022-02-05 09:32:54', 1),
(76, 12, '1', '5000', 'aaa', 'bbb', '<p>In this level, students learn the basic rules to be followed in the class room, to introduce themselves by giving their personal information, how to greet. Students learn the basic understanding of describing words, describing sizes like big small short long with physical descriptions. They learn different naming &amp; describing words, family concept – to understand belongingness.<br></p>', '<p><span style=\"color: rgb(122, 122, 122); font-family: Poppins, sans-serif;\">students in the classroom- important rules to follow || learn to ask – things around us || self introduction-giving personal information || how to greet-exchanging greetings || basic understanding of describing word || learning close –ended question/answer – animals || learning close –ended question/answer – fruits || describing sizes – big, small, short, long – physical description || naming &amp; describing words- a recap || family concept – understanding of belongingness.</span></p><p><span style=\"font-weight: bolder; color: rgb(0, 67, 187); font-family: Poppins, sans-serif;\">Age Group:</span><span style=\"color: rgb(0, 67, 187); font-family: Poppins, sans-serif;\">&nbsp;5+</span><br></p>', '', '', '133.png', 'https://navavision.com/video/CHAPTER%202_ONE%20TO%', '', '2021-02-20 08:30:36', '2022-02-05 09:32:54', 1),
(77, 12, '2', '5000', 'aaa', 'bbb', '<p>In this level, students are taught about effective use of the English Alphabet. Here, students are taught the difference between Alphabet, Letters, Vowels &amp; Consonants. Here, students learn naming words such as Nouns, describing words such as Adjectives, concept of capitalization, framing sentences, to be creative with words, and to write picture composition.<br></p>', '<p><span style=\"color: rgb(122, 122, 122); font-family: Poppins, sans-serif;\">alphabet letters, vowels &amp; consonants- introduction || vowels &amp; consonants – more practice || blends &amp; digraphs || naming words – nouns || instead of nouns – pronouns || describing words - adjectives || capitalisation || framing sentences || creative with words || learn to write picture composition || communication in english – amalgamation of the chapters learnt- verbal communication.</span></p><p><span style=\"font-weight: bolder; color: rgb(0, 67, 187); font-family: Poppins, sans-serif;\">Age Group:</span><span style=\"color: rgb(0, 67, 187); font-family: Poppins, sans-serif;\">&nbsp;6+</span><br></p>', '', '', '135.png', 'https://navavision.com/video/CHAPTER%202_ONE%20TO%', '', '2021-02-20 08:32:26', '2022-02-05 09:32:54', 1),
(78, 12, '3', '5000', 'aaa', 'bbb', '<p>In this level, students are taught the basics of English Grammar through Reading, Writing, Speaking and Listening. This level increases the communication skills of a student. Activity based teaching is undertaken to impart the above-mentioned skills.<br></p>', '<p><span style=\"color: rgb(122, 122, 122); font-family: Poppins, sans-serif;\">communication skill - listening/speaking || communication skill - essential grammar || communication skill - reading || communication skill – writing.</span></p><p><span style=\"font-weight: bolder; color: rgb(0, 67, 187); font-family: Poppins, sans-serif;\">Age Group:</span><span style=\"color: rgb(0, 67, 187); font-family: Poppins, sans-serif;\">&nbsp;7+</span><br></p>', '', '', '22.jpg', 'https://navavision.com/video/CHAPTER%202_ONE%20TO%', '', '2021-02-20 08:33:15', '2022-02-05 09:32:54', 1),
(79, 12, '4', '5000', 'aaa', 'bbb', '<p>In this level, students are taught about effective communication through various illustrations on Poetry writing, story writing etc. Here, students are taught interpretation of the poem using Freehand Method, to follow punctuation rules – full stop, comma, etc. They also learn action words - Verbs, recognize sounds such as vowel sound, learn to write different spellings by Dictation method, and are introduced to Formal Letter Writing.<br></p>', '<p><span style=\"font-family: Poppins, sans-serif; color: rgb(117, 31, 163); font-size: 20px; font-weight: bold;\">&nbsp;</span><span style=\"color: rgb(122, 122, 122); font-family: Poppins, sans-serif;\">communication skill - listening/speaking || communication skill - essential grammar || communication skill - reading || communication skill – writing.</span></p><p><span style=\"font-weight: bolder; color: rgb(0, 67, 187); font-family: Poppins, sans-serif;\">Age Group:</span><span style=\"color: rgb(0, 67, 187); font-family: Poppins, sans-serif;\">&nbsp;8+</span><br></p>', '', '', '136.png', 'https://navavision.com/video/CHAPTER%202_ONE%20TO%', '', '2021-02-20 08:34:02', '2022-02-05 09:32:54', 1),
(80, 12, '5', '5000', 'aaa', 'bbb', '<p>In this level, students are taught story telling – which is the introduction to the art of telling a story. Here, students learn different types of Nouns, Adjectives, Verb Tenses – Past Continuous &amp; Past Perfect, Adverbs, Subject-Verb Agreement and Prepositions. Students by following standard rules learn Punctuation Marks and are introduced to Paragraph Writing and Composition writing.<br></p>', '<p><span style=\"color: rgb(122, 122, 122); font-family: Poppins, sans-serif;\">communication skill - listening/speaking || communication skill - essential grammar || communication skill - reading || communication skill – writing.</span></p><p><span style=\"font-weight: bolder; color: rgb(0, 67, 187); font-family: Poppins, sans-serif;\">Age Group:</span><span style=\"color: rgb(0, 67, 187); font-family: Poppins, sans-serif;\">&nbsp;9+</span><br></p>', '', '', '137.png', 'https://navavision.com/video/CHAPTER%202_ONE%20TO%', '', '2021-02-20 08:34:40', '2022-02-05 09:32:54', 1),
(81, 12, '6', '5000', 'aaa', 'bbb', '<p>In this level, students are taught to Listen to English News to increase their Listening and Speaking skills. Students are given Vocabulary Practice, Acronyms on news and social media. Activity based Conversation practice is given to students on Theme based Topics. Students are taught on Basic Quantifiers, Basic Determiners, etc.<br></p>', '<p><span style=\"color: rgb(122, 122, 122); font-family: Poppins, sans-serif;\">Communication skill - listening/speaking || communication skill - essential grammar || communication skill - reading || writing and composition.</span></p><p><span style=\"font-weight: bolder; color: rgb(0, 67, 187); font-family: Poppins, sans-serif;\">Age Group:</span><span style=\"color: rgb(0, 67, 187); font-family: Poppins, sans-serif;\">10+</span><br></p>', '', '', '138.png', 'https://navavision.com/video/CHAPTER%202_ONE%20TO%', '', '2021-02-20 08:35:30', '2022-02-05 09:32:54', 1),
(82, 12, '7', '5000', 'aaa', 'bbb', '<p>In this level, students are introduced to Creative Writing. Students are taught some common expressions that are useful to converse on telephone or while addressing different people. Students are taught about Direct and Indirect speech, Idiomatic Expressions, Report Writing, etc.<br></p>', '<p class=\"animation animated fadeInUp\" data-animation=\"fadeInUp\" data-animation-delay=\"0.6s\" style=\"margin-bottom: 30px; color: rgb(122, 122, 122); animation-duration: 1s; animation-fill-mode: both; animation-name: fadeInUp; font-family: Poppins, sans-serif; animation-delay: 0.6s; opacity: 1;\">communication skill - listening/speaking || communication skill - essential grammar || communication skill - reading || communication skill – writing.</p><h6 style=\"font-family: Poppins, sans-serif; color: rgb(0, 67, 187);\"><span style=\"font-weight: bolder;\">Age Group:</span>&nbsp;11+</h6>', '', '', '139.png', 'https://navavision.com/video/CHAPTER%202_ONE%20TO%', '', '2021-02-20 08:35:59', '2022-02-05 09:32:54', 1),
(83, 12, '8', '5000', 'aaa', 'bbb', '<p>In this level, students are taught various Spoken English Skills like, tactics to start a conversation, for debate, and techniques to win a Group Discussion. Students are taught about Active Voice &amp; passive Voice, Direct &amp; Indirect Speech, Phrases, Sentence Structures – Simple, Compound &amp; Complex, etc.<br></p>', '<p class=\"animation animated fadeInUp\" data-animation=\"fadeInUp\" data-animation-delay=\"0.6s\" style=\"margin-bottom: 30px; color: rgb(122, 122, 122); animation-duration: 1s; animation-fill-mode: both; animation-name: fadeInUp; font-family: Poppins, sans-serif; animation-delay: 0.6s; opacity: 1;\">communication skill - listening/speaking || communication skill - essential grammar || communication skill - reading || communication skill – writing.</p><h6 style=\"font-family: Poppins, sans-serif; color: rgb(0, 67, 187);\"><span style=\"font-weight: bolder;\">Age Group:</span>&nbsp;12+</h6>', '', '', '140.png', 'https://navavision.com/video/CHAPTER%202_ONE%20TO%', '', '2021-02-20 08:36:26', '2022-02-05 09:32:54', 1),
(84, 27, '1', '5000', 'aaa', 'bbb', '<p>Foundations of Machine Learning<br></p>', '<p><span style=\"font-family: Poppins, sans-serif; color: rgb(117, 31, 163); font-size: 20px; font-weight: bold;\">&nbsp;</span><span style=\"color: rgb(122, 122, 122); font-family: Poppins, sans-serif;\">Linear Algebra || Introduction to Coordinate Geometry || Basics of Coordinate Geometry || Planes, 2D planes || 3D planes || Introduction to Matrices || Matrices Notation || Types of matrices || Operations on matrices</span><br></p>', '', '', '141.png', 'https://navavision.com/video/CHAPTER%202_ONE%20TO%', '', '2021-02-20 08:42:53', '2022-02-05 09:32:54', 1),
(85, 27, '2', '5000', 'aaa', 'bbb', '<p>Programming for Machine Learning &amp; Data Analysis and Visualisation<br></p>', '<p><span style=\"color: rgb(122, 122, 122); font-family: Poppins, sans-serif;\">Python for Data Science: Data Structures || Python for Data Science Introduction || Python for Data Science: Functions || Python for Data Science: NumPy || Python for Data Science: Pandas || Plotting for exploratory data analysis</span><br></p>', '', '', '142.png', 'https://navavision.com/video/CHAPTER%202_ONE%20TO%', '', '2021-02-20 08:43:29', '2022-02-05 09:32:54', 1),
(86, 27, '3', '5000', 'aaa', 'bbb', '<p>Machine Learning Models &amp; Machine Learning Projects<br></p>', '<p><span style=\"color: rgb(122, 122, 122); font-family: Poppins, sans-serif;\">Classification &amp; Regression Models: K-Nearest || Neighbours || Logistic Regression || Linear regression || Decision Trees || Project 1: YouTube Recommendation Systems || Project 2: Building Amazon Fashion Discovery Engine</span><br></p>', '', '', '230.png', 'https://navavision.com/video/CHAPTER%202_ONE%20TO%', '', '2021-02-20 08:44:03', '2022-02-05 09:32:54', 1),
(87, 24, '1', '5000', 'aaa', 'bbb', '<p>Python is relatively simple, so it\'s easy to learn since it requires a unique syntax that focuses on readability. Developers can read and translate Python code much easier than other languages. In turn, this reduces the cost of program maintenance and development because it allows teams to work collaboratively without significant language and experience barriers.<br></p>', '<p><span style=\"font-family: Poppins, sans-serif; color: rgb(117, 31, 163); font-size: 20px; font-weight: bold;\">&nbsp;</span><span style=\"color: rgb(122, 122, 122); font-family: Poppins, sans-serif;\">Fundamentals of Python || Comments || Working with Data || Lists || Lists and Looping || Control Statements || Python Classes || Finding and Fixing Problems.</span><br></p>', '', '', '232.png', 'https://navavision.com/video/CHAPTER%202_ONE%20TO%', '', '2021-02-20 08:47:35', '2022-02-05 09:32:54', 1),
(88, 24, '2', '5000', 'aaa', 'bbb', '<p>Python is relatively simple, so it\'s easy to learn since it requires a unique syntax that focuses on readability. Developers can read and translate Python code much easier than other languages. In turn, this reduces the cost of program maintenance and development because it allows teams to work collaboratively without significant language and experience barriers.<br></p>', '<p><span style=\"color: rgb(122, 122, 122); font-family: Poppins, sans-serif;\">Fundamentals of Python || Comments || Working with Data || Data Types Variables || Using String Variables || Lists || Common List Operations || Removing Items From a List || String as Lists || Python Classes || Finding and Fixing Bugs.</span><br></p>', '', '', '18.jpg', 'https://navavision.com/video/CHAPTER%202_ONE%20TO%', '', '2021-02-20 08:46:12', '2022-02-05 09:32:54', 1),
(89, 20, 'Foundation Level', '4000', 'aaa', 'bbb', '<p>In this level, at first students are taught the basic difference between Electrical and Electronics. Students are taught how to use the breadboard, what is a circuit diagram? How to read and do the connections based on the circuit diagram. They are introduced to basic electronic components such as Capacitors, Resistors, Transistors, LEDs, etc. Here simple experiments are taught, like Homopolar Motor, Electronic Gas tank, Touch Switch, Burglar Alarm etc.<br></p>', '<p class=\"animation animated fadeInUp\" data-animation=\"fadeInUp\" data-animation-delay=\"0.6s\" style=\"margin-bottom: 30px; color: rgb(122, 122, 122); animation-duration: 1s; animation-fill-mode: both; animation-name: fadeInUp; font-family: Poppins, sans-serif; animation-delay: 0.6s; opacity: 1;\">What is Electrical &amp; Electronics? || Introduction to basic components || What are ICs? || What is a breadboard? || What is a Circuit Diagram? || Testing an electric circuit || Electric Money || Homopolar Motor || Electronic Gas Tank || Electronic Raindrops || Blinking LED || Electricity from sound || Automatic Street Light || Electronic Cat || Electromagnetic Train || Burglar Alarm || Touch Switch || Water Level Indicator || Electroscope || Electronic Dice || Conductors &amp; Insulators || Electronic Alarm || Group Activities.</p><h6 style=\"font-family: Poppins, sans-serif; color: rgb(0, 67, 187);\"><span style=\"color: red;\">Note:&nbsp;</span>Two Group Activities in Foundation level to improve team-building skills of students.<br><span style=\"font-weight: bolder;\">Age Group:</span>&nbsp;11+</h6>', '', '', '110.jpg', 'https://navavision.com/video/CHAPTER%202_ONE%20TO%', '', '2021-02-20 08:50:22', '2022-02-05 09:32:54', 1);
INSERT INTO `course_levels` (`level_id`, `course_id`, `level`, `price`, `text_link`, `work_book_link`, `description`, `Syllabus`, `level_syllabus_file_name`, `level_syllabus_file_type`, `level_img_file_name`, `sample_video_file_name`, `sample_video_file_type`, `created_at`, `updated_at`, `type_id`) VALUES
(90, 20, 'Basic Level ', '4000', 'aaa', 'bbb', '<p>In this level, students are taught how Electricals and Electronics are related to each other. They are introduced to different types of electronic components such as Variable Resistors, Buzzers, Diodes, Multimeter, etc and the uses of these components. Here, the circuit diagram would be a little complex than the previous level. Some of the experiments in this level are, Electric Pencil Sharpener, Clap Switch, Current detector, fridge Door alarm etc.<br></p>', '<p class=\"animation animated fadeInUp\" data-animation=\"fadeInUp\" data-animation-delay=\"0.6s\" style=\"margin-bottom: 30px; color: rgb(122, 122, 122); animation-duration: 1s; animation-fill-mode: both; animation-name: fadeInUp; font-family: Poppins, sans-serif; animation-delay: 0.6s; opacity: 1;\"><span style=\"color: rgb(117, 31, 163); font-size: 20px; font-weight: bold;\">&nbsp;</span>What is the use of studying Electrical &amp; Electronics? || Introduction to basic components || What is a Circuit Diagram? || Testing an electric circuit || Electric Pencil Sharpener || Emergency Light || Current Detector || Clap Switch || Room Noise Detector || Fridge Door Alarm || Temperature Monitor || Bike Strobe Light || Touch ON Touch OFF Switch || Driving a Motor || Blinking 2 LED’s || Metal Detector || Electronic Letter Box || Dimmer Circuit || Mains Finder || Light Activated Siren || Group Activities.</p><h6 style=\"font-family: Poppins, sans-serif; color: rgb(0, 67, 187);\"><span style=\"color: red;\">Note:&nbsp;</span>Two Group Activities in Basic level to improve team-building skills of students.<br><span style=\"font-weight: bolder;\">Age Group:</span>&nbsp;12+</h6>', '', '', '234.png', 'https://navavision.com/video/CHAPTER%202_ONE%20TO%', '', '2021-02-20 08:50:49', '2022-02-05 09:32:54', 1),
(91, 20, 'Intermediate Level ', '4000', 'aaa', 'bbb', '<p>In this level, students are taught What is Electricity? Difference between Alternating Current (AC) and Direct Current (DC). Students are taught about the types of circuits (Series &amp; Parallel). They are introduced to different types of Timers, IC (Integrated Circuits), Sensors, etc. Some of the experiments in this level are, Toy Piano, Ticking Bomb, Marching LED, Touchless Door Bell, etc.<br></p>', '<p class=\"animation animated fadeInUp\" data-animation=\"fadeInUp\" data-animation-delay=\"0.6s\" style=\"margin-bottom: 30px; color: rgb(122, 122, 122); animation-duration: 1s; animation-fill-mode: both; animation-name: fadeInUp; font-family: Poppins, sans-serif; animation-delay: 0.6s; opacity: 1;\"><span style=\"color: rgb(117, 31, 163); font-size: 20px; font-weight: bold;\">&nbsp;</span>What is Electricity? || What are circuits? || Introduction to basic components used || LED Indicator Light || Police Light || Toy Piano || Ticking Bomb || Water Switch || Marching LED || Touchless Door Bell || Mobile Indicator || Smoke Detector || Christmas Light Circuit || Air flow Detector || Police Siren || Latch Switch || Crystal Tester || Flame Sensor || Traffic Light || Group Activities.</p><h6 style=\"font-family: Poppins, sans-serif; color: rgb(0, 67, 187);\"><span style=\"color: red;\">Note:&nbsp;</span>Two Group Activities in Intermediate level to improve team-building skills of students.<br><span style=\"font-weight: bolder;\">Age Group:</span>&nbsp;13+</h6>', '', '', '32.png', 'https://navavision.com/video/CHAPTER%202_ONE%20TO%', '', '2021-02-20 08:51:29', '2022-02-05 09:32:54', 1),
(92, 20, 'Advanced Level ', '4000', 'aaa', 'bbb', '<p>In this level, students are taught about the basic principles, working principles of the electronic components such as LED, LDR, Diodes, 555 Timer ICs, Sensors, etc. In this level students will be dealing with complex circuits to test different kind of outputs. Some of the experiments in this level are, Plant Moisture Monitoring circuit, Ding Dong sound generator circuit, LED Knight Rider circuit, Battery Charge Indicator circuit, etc.<br></p>', '<p class=\"animation animated fadeInUp\" data-animation=\"fadeInUp\" data-animation-delay=\"0.6s\" style=\"margin-bottom: 30px; color: rgb(122, 122, 122); animation-duration: 1s; animation-fill-mode: both; animation-name: fadeInUp; font-family: Poppins, sans-serif; animation-delay: 0.6s; opacity: 1;\">What is Electrical &amp; Electronics? || Introduction to basic components || Basic Principles and theories || Curtain Opener and Closer Circuit || Battery Charge Indicator || Security Alarm || Puff to OFF LED || Measuring Magnetic Field || Electronic Thermometer || LED Knight Rider Circuit || Speed Detection || Plant Moisture Monitoring System || IR Remote Sensor || LED Lamp Dimmer Circuit || FM Transmitter Circuit || 555 Timer IC Testing Circuit || Ding Dong Sound Generator || Up Down Fading LED || Light Activated Alarm || Group Activities.</p><h6 style=\"font-family: Poppins, sans-serif; color: rgb(0, 67, 187);\"><span style=\"color: red;\">Note:&nbsp;</span>Two Group Activities in Adavance level to improve team-building skills of students.<br><span style=\"font-weight: bolder;\">Age Group:</span>&nbsp;14+</h6>', '', '', '235.png', 'https://navavision.com/video/CHAPTER%202_ONE%20TO%', '', '2021-02-20 08:52:04', '2022-02-05 09:32:54', 1);

-- --------------------------------------------------------

--
-- Table structure for table `course_orders`
--

CREATE TABLE `course_orders` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` varchar(50) NOT NULL,
  `address1` varchar(500) NOT NULL,
  `city` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `pincode` varchar(25) NOT NULL,
  `coupon_code` varchar(50) DEFAULT NULL,
  `coupon_value` int(11) DEFAULT NULL,
  `order_status` int(11) NOT NULL,
  `payment_type` enum('COD','Gateway') NOT NULL,
  `payment_status` varchar(50) NOT NULL,
  `payment_id` varchar(50) DEFAULT NULL,
  `txn_id` varchar(110) DEFAULT NULL,
  `total_amt` int(11) NOT NULL,
  `track_details` text,
  `added_on` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `discounts`
--

CREATE TABLE `discounts` (
  `id` int(11) NOT NULL,
  `disc_title` varchar(100) NOT NULL,
  `course_lvl_ids` varchar(200) NOT NULL,
  `course_list_names` text NOT NULL,
  `amount` varchar(50) NOT NULL,
  `discount_type` varchar(5) NOT NULL,
  `status` char(1) NOT NULL DEFAULT 'A'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `discounts`
--

INSERT INTO `discounts` (`id`, `disc_title`, `course_lvl_ids`, `course_list_names`, `amount`, `discount_type`, `status`) VALUES
(1, 'Abacus Discount ', '3,4', 'Abacus( Level : 1 ),Abacus( Level : 2 )', '1000', 'A', 'A'),
(2, 'Vedic Maths Discount ', '52,53', 'Vedic Mathematics( Level : Basic Level 1 ),Vedic Mathematics( Level : Basic Level 2 )', '2000', 'A', 'A');

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `email` varchar(100) NOT NULL,
  `address1` varchar(200) NOT NULL,
  `address2` varchar(200) NOT NULL,
  `city` varchar(50) NOT NULL,
  `country` varchar(4) NOT NULL,
  `pincode` int(6) NOT NULL,
  `password` text NOT NULL,
  `status` char(1) NOT NULL DEFAULT 'A',
  `updated_at` datetime NOT NULL,
  `created_at` datetime NOT NULL,
  `login_status` int(11) NOT NULL DEFAULT '0',
  `state` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `first_name`, `last_name`, `phone`, `email`, `address1`, `address2`, `city`, `country`, `pincode`, `password`, `status`, `updated_at`, `created_at`, `login_status`, `state`) VALUES
(1, 'admin', 'admin', '3423434234', 'admin@gmail.com', 'asdsadsdf', 'asdsadasdsdf', 'sadasdsad', 'IN', 333333, '$2y$04$DrFpbMbcvS7OqVxOu1l4V.yu81af0SIRkbExgJSltyZYq0eXU8DTW', 'A', '2020-08-19 11:27:50', '2020-08-19 11:27:50', 1, 'KA'),
(2, 'superAdmin', 'admin', '8787675787', 'superadmin@gmail.com', 'dskfjsdkljf', 'jsdksdkjf,dsf', 'dsjkfljdskj', 'IN', 676567, '$2y$04$DrFpbMbcvS7OqVxOu1l4V.yu81af0SIRkbExgJSltyZYq0eXU8DTW', 'A', '2020-08-19 11:30:35', '2020-08-19 11:30:35', 1, 'KA'),
(3, 'sadaskdj', 'kljsdf', '7777777777', 'dkjjka@gmail.com', 'jkhjkdhkjash', 'hdjhfjkhd', 'jdkhkjdsh', 'IN', 999999, '$2y$04$zkJT50BeKVcQb9fzaqXynef0A2PedGjnnvMAvjlOjEa.2xGMYs4iO', 'A', '2020-08-23 07:06:28', '2020-08-23 07:06:28', 0, 'KA'),
(4, 'werwer', 'werew', '5645343434', 'sdfsdfsd@gmail.com', 'klgjklfj', 'klfkldg gkgldkwelas', 'fdfkdljgkdfgj', 'IN', 765625, '$2y$10$cDEw0Tm0NKR9SSeO06OzeuwvBWo8L19XLWOzWa3iW7QdjVc/.jLi.', 'A', '2022-02-02 08:54:07', '2020-10-28 12:55:43', 0, 'KA');

-- --------------------------------------------------------

--
-- Table structure for table `fchange_phones`
--

CREATE TABLE `fchange_phones` (
  `id` int(225) NOT NULL,
  `franchise_id` int(225) NOT NULL DEFAULT '0',
  `current_phone` varchar(225) NOT NULL,
  `new_phone` varchar(225) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fchange_phones`
--

INSERT INTO `fchange_phones` (`id`, `franchise_id`, `current_phone`, `new_phone`, `created_at`, `updated_at`) VALUES
(10, 1, '5434', '4545', '2021-01-15 09:43:26', '2022-02-03 09:44:29'),
(11, 2, '789456123', '321654987', '2021-01-15 09:45:34', '2022-02-03 09:44:29'),
(12, 3, '3432432423432', '333', '2021-01-15 09:51:45', '2022-02-03 09:44:29'),
(19, 0, '4545', '1234', '2021-05-18 10:38:24', '2022-02-03 09:44:29');

-- --------------------------------------------------------

--
-- Table structure for table `features`
--

CREATE TABLE `features` (
  `feature_id` int(11) NOT NULL,
  `row_order` int(11) NOT NULL DEFAULT '0',
  `heading` varchar(100) NOT NULL,
  `icon_tag` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `status` char(1) NOT NULL DEFAULT 'A',
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `features`
--

INSERT INTO `features` (`feature_id`, `row_order`, `heading`, `icon_tag`, `description`, `status`, `updated_at`, `created_at`) VALUES
(1, 4, 'Offline / Physical training', 'fa fa-user icon', 'Well-trained teacher will be provided who will come to school and conduct the program and their salary taken care by Nava Vision.', 'A', '2022-02-04 06:00:06', '2022-02-04 06:00:32'),
(4, 2, 'Pre Recorded Videos', 'fa fa-laptop icon', 'Nava Vision Provides pre recoded class room videos for Academics and Non-Academic Subjects.', 'A', '2022-02-04 06:00:06', '2022-02-04 06:00:32'),
(5, 6, 'Text Book and Work Books', 'fa fa-laptop icon', 'Nava Vision provide well-designed Text book/work books / work sheets for all the subjects.', 'A', '2022-02-04 06:00:06', '2022-02-04 06:00:32'),
(7, 1, 'QR code Base Learning:', 'fa fa-qrcode icon', 'Nava Vision will provide students with workbooks having QR code after every concept. Students can use Nava Vision Mobile App and access the classroom videos anytime by scanning the QR code.', 'A', '2022-02-04 06:00:06', '2022-02-04 06:00:32'),
(10, 3, 'Online Training', 'fa fa-tv icon', 'Nava Vision provides online training to the students. Nava Vision will also accommodate School Software', 'A', '2022-02-04 06:00:06', '2022-02-04 06:00:32'),
(16, 5, 'EMI Based Payments', 'fas fa-money-check-alt icon', 'Nava vision provides EMI based payments for all the courses.', 'A', '2022-02-04 06:00:06', '2022-02-04 06:00:32'),
(17, 7, 'Teacher Training Program', 'fa fa-user-plus icon', 'Nava Vision Teacher Training Program is a one-year certified diploma program with 3 semesters in Abacus, Vedic Mathematics, English', 'A', '2022-02-04 06:00:06', '2022-02-04 06:00:32'),
(18, 8, 'End to End Support System', 'fas fa-exchange-alt icon', 'Nava Vision Provides end to end support for all the student.', 'A', '2022-02-04 06:00:06', '2022-02-04 06:00:32');

-- --------------------------------------------------------

--
-- Table structure for table `franchises`
--

CREATE TABLE `franchises` (
  `id` int(11) NOT NULL,
  `user_type` char(1) NOT NULL DEFAULT 'F',
  `f_name` varchar(50) NOT NULL,
  `l_name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `city` varchar(50) NOT NULL,
  `password` text NOT NULL,
  `franchise_id` tinyint(4) NOT NULL DEFAULT '0',
  `date_created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `last_login` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `login_status` int(11) NOT NULL DEFAULT '0',
  `pincode` varchar(222) DEFAULT NULL,
  `state` varchar(222) DEFAULT NULL,
  `model` varchar(222) DEFAULT NULL,
  `district` varchar(222) DEFAULT NULL,
  `assembly_cons` varchar(222) DEFAULT NULL,
  `alternate_phone` varchar(222) DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `franchises`
--

INSERT INTO `franchises` (`id`, `user_type`, `f_name`, `l_name`, `email`, `phone`, `city`, `password`, `franchise_id`, `date_created`, `last_login`, `login_status`, `pincode`, `state`, `model`, `district`, `assembly_cons`, `alternate_phone`, `updated_at`, `created_at`) VALUES
(2, 'F', 'manali', 'kinange', 'manali.navavision@gmail.com', '321654987', 'banglore', '$2y$04$Bbqs51WXA0xuYwij72F07.txKB0gEY9S7aRpJIBd6d1gZJ4oreclm', 1, '2020-12-14 11:10:24', '2021-02-03 14:29:36', 1, '458656', 'karnataka', 'fofo', 'slkd', 'sldkjl', '948654854', '2022-02-03 09:16:11', '2022-02-03 07:38:58'),
(3, 'F', 'aaa', 'aaa', 'one@gmail.com', '6666555444', 'aaa', 'sdjfsdklnvsdnvlk', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, '458585', 'mumbai', 'foco', 'aaaa', 'aaaaaa', '9999999999', '2022-02-03 07:38:34', '2022-02-03 07:38:58');

-- --------------------------------------------------------

--
-- Table structure for table `joined_course`
--

CREATE TABLE `joined_course` (
  `join_id` int(11) NOT NULL,
  `course_id` int(11) NOT NULL,
  `level_id` int(11) NOT NULL,
  `date_joined` datetime NOT NULL,
  `student_id` int(11) NOT NULL,
  `executive` varchar(100) DEFAULT NULL,
  `total_amount` varchar(200) DEFAULT NULL,
  `coupon_code` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `live_rq_user`
--

CREATE TABLE `live_rq_user` (
  `request_id` int(11) NOT NULL,
  `kidname` varchar(100) NOT NULL,
  `parentName` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `subjects` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `country` varchar(50) NOT NULL,
  `pincode` int(6) NOT NULL,
  `status` char(1) NOT NULL DEFAULT 'A',
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `live_rq_user`
--

INSERT INTO `live_rq_user` (`request_id`, `kidname`, `parentName`, `email`, `phone`, `subjects`, `city`, `country`, `pincode`, `status`, `updated_at`, `created_at`) VALUES
(1, 'ishan S', 'Manali K', 'manu.malgasve@gmail.com', '8767676567', '1', 'banglore', 'IN', 560037, 'A', '2022-03-17 09:32:46', '2022-03-17 15:07:34'),
(2, 'ishan S', 'Manali k', 'jghjghjhg@gmail.com', '23442334243', '1', 'sdfsdf', 'IN', 444444, 'A', '2022-03-17 09:32:46', '2022-03-17 15:07:34'),
(3, 'ishan S', 'Manali k', 'sss@gmail.com', '23442334243', '1,2', 'sdfsdf', 'IN', 444444, 'A', '2022-03-17 09:32:46', '2022-03-17 15:07:34'),
(4, 'ishan S', 'Manali k', 'jghjghjahg@gmail.com', '23442334243', '8,9', 'sdfsdf', 'IN', 444444, 'A', '2022-03-17 09:32:46', '2022-03-17 15:07:34'),
(5, 'ishan S', 'Manali k', 'jghjghjsadahg@gmail.com', '23442334243', '8,9', 'sdfsdf', 'IN', 444444, 'A', '2022-03-17 09:32:46', '2022-03-17 15:07:34'),
(6, 'ishan S', 'Manali k', 'jghjghjasadasdahg@gmail.com', '23442334243', '8,9', 'sdfsdfASSA', 'IN', 444444, 'A', '2022-03-17 09:32:46', '2022-03-17 15:07:34'),
(7, 'ishan S', 'Manali k', 'manali.navavision@gmail.com', '07676319577', '2,3', 'dfkgk', 'IN', 560043, 'A', '2022-03-17 09:32:46', '2022-03-17 15:07:34'),
(8, 'deep', 'peed', 'abc@gmail.com', '9876543210', '61', 'Chennai', 'IN', 600018, 'A', '2022-03-17 09:32:46', '2022-03-17 15:07:34'),
(9, 'Parth Trivedi', 'Bharti Trivedi', 'bharti30512@gmail.com', '9769069480', '3', 'Thane', 'IN', 400607, 'A', '2022-03-17 09:32:46', '2022-03-17 15:07:34'),
(10, 'Parth Trivedi', 'Bharti Trivedi', 'bharti30512@gmail.com', '9769069480', '3', 'Thane', 'IN', 400607, 'A', '2022-03-17 09:32:46', '2022-03-17 15:07:34'),
(11, 'aishhwarya ', 'ravi ', 'aishjung124@gmail.com', '09068215326', '3,4,5,6,7,8,9,10', 'pith', 'IN', 262501, 'A', '2022-03-17 09:32:46', '2022-03-17 15:07:34'),
(12, 'ishan S', 'Manali k', 'manu.malgave28@gmail.com', '05555444444', '11,12', 'banglore', 'IN', 560043, 'A', '2022-03-17 09:32:46', '2022-03-17 15:07:34'),
(13, 'XYZ', 'ABC', 'j.aayushe@gmail.com', '9876789650', '39', 'banglore', 'IN', 560068, 'A', '2022-03-17 09:32:46', '2022-03-17 15:07:34'),
(14, 'Ranvijay Sharma', 'Vijayshree Vishwakarma', 'vshri29@gmail.com', '8209296142', '76', 'Jodhpur', 'IN', 342010, 'A', '2022-03-17 09:32:46', '2022-03-17 15:07:34'),
(15, 'Ranvijay Sharma', 'Vijayshree Vishwakarma', 'vshri29@gmail.com', '8209296142', '12', 'Jodhpur', 'IN', 342010, 'A', '2022-03-17 09:32:46', '2022-03-17 15:07:34'),
(16, 'ABC ', 'AayuShe ', 'ayushijalan10@gmail.com', '9973320222', '76', 'Banglore', 'IN', 834005, 'A', '2022-03-17 09:32:46', '2022-03-17 15:07:34'),
(17, 'Aarohi Sharma ', 'Kanak Sharma ', 'sharma.kanak447@gmail.com', '9334302606', '68', 'RANCHI', 'IN', 834001, 'A', '2022-03-17 09:32:46', '2022-03-17 15:07:34'),
(18, 'fvx', 'esfdvc ', 'sikindra@gmail.com', '08109895993', '22,23', 'tsgd', 'IN', 332262, 'A', '2022-03-17 09:32:46', '2022-03-17 15:07:34'),
(19, 'fcx', 'saxz', 'sikindranavavisioqn@gmail.com', '09784657854', '22,23', 'tsgd', 'IN', 332262, 'A', '2022-03-17 09:32:46', '2022-03-17 15:07:34'),
(20, 'ryhfdnv', 'wfsrvx', 'sikindrakumar@navavision.com', '8109895993', '22,23', 'wgrsvf', 'IN', 626265, 'A', '2022-03-17 09:32:46', '2022-03-17 15:07:34'),
(21, 'ryhfdnv', 'wfsrvx', 'sikindrakumar@navavision.com', '+918109895993', '22,23,24,25', 'wgrsvf', 'IN', 626265, 'A', '2022-03-17 09:33:53', '2022-03-17 15:07:34'),
(22, 'ryhfdnv', 'wfsrvx', 'sikindranavavision@gmail.com', '8109895993', '26,27,28', 'wgrsvf', 'IN', 626265, 'A', '2022-03-17 09:38:12', '2022-03-17 15:08:12');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(2, '2022_01_18_054751_create_admins_table', 1),
(3, '2014_10_12_000000_create_users_table', 2),
(4, '2014_10_12_200000_add_two_factor_columns_to_users_table', 2),
(5, '2022_01_22_080134_categories', 2),
(6, '2022_01_27_113351_create_sessions_table', 2),
(7, '2022_02_14_082228_create_contact_us_table', 3),
(11, '2022_02_16_045601_create_students_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `modes`
--

CREATE TABLE `modes` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(50) NOT NULL,
  `doc` int(11) NOT NULL,
  `video` int(11) NOT NULL,
  `demo_chk` int(11) NOT NULL DEFAULT '0',
  `status` char(1) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `modes`
--

INSERT INTO `modes` (`id`, `name`, `description`, `image`, `doc`, `video`, `demo_chk`, `status`, `updated_at`, `created_at`) VALUES
(1, 'Record Class', 'Nava Vision offers in-depth analytical exercises.Student can get a clear understand through our experimental illustrations', 'pre-recorded.jpg', 1, 1, 1, 'A', '2022-03-22 23:52:39', '2022-02-01 05:52:34'),
(2, 'Live Classes', 'Nava Vision offers virtual classroom.Live sessions allows teachers to create a virtual and interacive classroom sessions.', 'online.jpg', 1, 0, 0, 'A', '2022-02-01 02:34:05', '2022-02-01 05:52:34'),
(3, 'QR-code based Learning', 'Nava Vision offers workbooks having QR Code after every concept.With Nava Vision Mobile App and access the classroom videos anytime.', '1643865985.jpg', 0, 0, 1, 'i', '2022-02-04 01:51:02', '2022-02-01 05:52:34');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` varchar(50) NOT NULL,
  `address1` varchar(500) NOT NULL,
  `city` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `pincode` varchar(25) NOT NULL,
  `coupon_code` varchar(50) DEFAULT NULL,
  `coupon_value` int(11) DEFAULT NULL,
  `order_status` int(11) NOT NULL,
  `payment_type` enum('COD','Gateway') NOT NULL,
  `payment_status` varchar(50) NOT NULL,
  `payment_id` varchar(50) DEFAULT NULL,
  `txn_id` varchar(110) DEFAULT NULL,
  `total_amt` int(11) NOT NULL,
  `track_details` text,
  `added_on` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `orders_details`
--

CREATE TABLE `orders_details` (
  `id` int(11) NOT NULL,
  `orders_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `products_attr_id` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `qty` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `orders_status`
--

CREATE TABLE `orders_status` (
  `id` int(11) NOT NULL,
  `orders_status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders_status`
--

INSERT INTO `orders_status` (`id`, `orders_status`) VALUES
(1, 'Placed'),
(2, 'On The Way'),
(3, 'Delivered');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `schools`
--

CREATE TABLE `schools` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `state` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `zip` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_verify` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_frogot_password` int(11) DEFAULT NULL,
  `rand_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` varchar(2048) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `image` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `schools`
--

INSERT INTO `schools` (`id`, `name`, `last_name`, `email`, `phone`, `address1`, `address2`, `city`, `state`, `country`, `zip`, `email_verified_at`, `password`, `remember_token`, `is_verify`, `is_frogot_password`, `rand_id`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`, `image`) VALUES
(1, 'sikindra ray', 'dgf', 'sikindranavavision@gmail.com', '09784657854', 'df', 'sgfdvcx', 'tsgd', 'JK', 'India', '332262', NULL, 'eyJpdiI6ImJubzdmMDJVUEd2aHl2ZkJKcjE0TWc9PSIsInZhbHVlIjoib0RoTGN4Q0hCZ1BIZ3JoejdxREhqQW1GOEdvbFVHR2VEUmhmMEZQcVZrOD0iLCJtYWMiOiJkMWI3NGYxNjZlNjc2MDg1YzZhOTcxNGI1YTMwYTk2Zjc1ODJiZjNlYTc0OTk2NWZkNjg1YmNlYzM3OGY2ZDdiIiwidGFnIjoiIn0=', NULL, '1', 0, '', NULL, NULL, '2022-02-17 05:57:25', '2022-02-17 05:57:25', NULL),
(9, 'sikindra kumar', NULL, 'sikindar8109895993@gmail.com', '09784657854', 'df', NULL, 'tsgd', 'Jammu and Kashmir', NULL, '332262', NULL, 'eyJpdiI6IjNuYW4rNElaSkZFNnRlZCtqOFBQdFE9PSIsInZhbHVlIjoidWYwVk5CTVdqc01EMS9hRUFCaTZGdz09IiwibWFjIjoiMzE2NzcyYzkzNDlhMjU0MzI1N2U4MWM4N2IzNjRlNTcxMGE1NmM3NjBiYWFmMjZiZTQyNDg0NjY5MDJlOWIzZiIsInRhZyI6IiJ9', NULL, '1', 1, '520173', NULL, NULL, '2022-03-02 04:02:42', '2022-03-02 04:02:42', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `school_users`
--

CREATE TABLE `school_users` (
  `id` int(11) NOT NULL,
  `row_status` char(2) NOT NULL DEFAULT 'I' COMMENT 'R=>request,AR=>accet_rq,R=>rejected,CL=>craeted login,I=>Inactive',
  `school_name` varchar(100) NOT NULL,
  `pri_name` varchar(200) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `address` varchar(255) NOT NULL,
  `city` varchar(200) NOT NULL,
  `pincode` int(10) NOT NULL,
  `no_of_login` int(11) NOT NULL,
  `moe` varchar(255) NOT NULL,
  `categories` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('g2wCI5TSnJpP2LXQJY34Hj45xUUTVLUBVAiSuL8P', NULL, '46.101.63.152', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/74.0.3729.169 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoidEpqZ1FsYmxRNW0wdVFWaXNRTlZ4UEg0blBraUQwREJVTk5uNVR4dyI7czoxMjoiVVNFUl9URU1QX0lEIjtpOjMwMTgyNzc3ODtzOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1649433005),
('Pa1JXf3A0tBbfFk7h5zeObxOyzpZzh8LXg1JsdMf', NULL, '122.172.18.197', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/100.0.4896.75 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiWGtKMkdxU21jQWdaWmdLTzhhZmR6a0ppUFFDbks4WEtrRWJGaVR2ciI7czoxMjoiVVNFUl9URU1QX0lEIjtpOjM1MTczNDQ1MjtzOjk6Il9wcmV2aW91cyI7YToxOntzOjM6InVybCI7czozNDoiaHR0cHM6Ly9uYXZhdmlkeWEuY29tL3Rlc3QvZmVhdHVyZSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1649669576);

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `state` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `zip` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_verify` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_frogot_password` int(11) DEFAULT NULL,
  `rand_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` varchar(2048) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `name`, `last_name`, `email`, `phone`, `address1`, `address2`, `city`, `state`, `country`, `zip`, `image`, `email_verified_at`, `password`, `remember_token`, `is_verify`, `is_frogot_password`, `rand_id`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`) VALUES
(1, 'sikindra', 'dgf', 'sikindranavavision@gmail.com', '09784657854', 'df', 'sgfdvcx', 'tsgd', 'JK', 'India', '332262', 'android-chrome-512x512.png', NULL, 'eyJpdiI6Ik5LMW5NWnMwWU92VjhFMnJMOS9iR2c9PSIsInZhbHVlIjoiUGwvQXJCY05NTmNOaXNsUDFFekNaNHFKVGJyQXg4NU9rTkNmRGFIMlRBTT0iLCJtYWMiOiIyMjdjNWM4ODZkZjk2MTlhZjAzM2Y3YThiYTMzOWM3MzE3YjJhZGQzMjQ2MDJkZjBmYzU1MTYwODhmZmM4OGQ3IiwidGFnIjoiIn0=', NULL, '1', 0, '', NULL, NULL, '2022-02-17 05:57:25', '2022-02-17 05:57:25'),
(11, 'sikindrakumar', 'SDAZC', 'sikindar8109895993@gmail.com', '+918109895993', 'ergd', 'descqwdasxcz', 'wgrsvf', 'JH', 'India', '626265', NULL, NULL, 'eyJpdiI6IkprT0RTUFdiNFE0Y1h3WnRsVko4Snc9PSIsInZhbHVlIjoiRnNXc0w2TWVWZkFWS3NFRVpRa3hJQT09IiwibWFjIjoiOThiMzhjNjhlZTIwZjlhMzQxOGJkYmM4OGYxYjE0ZmNmYWQ3ZmM1OTg5MjM2ODRlNGVlN2FiMTYxZWRmNjhhNiIsInRhZyI6IiJ9', NULL, '1', NULL, '', NULL, NULL, '2022-03-23 23:49:47', '2022-03-23 23:49:47');

-- --------------------------------------------------------

--
-- Table structure for table `subcategories`
--

CREATE TABLE `subcategories` (
  `id` int(11) NOT NULL,
  `sub_cat_name` varchar(100) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `type_id` int(11) NOT NULL,
  `course_des` longtext NOT NULL,
  `class_desc` longtext NOT NULL,
  `status` char(1) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subcategories`
--

INSERT INTO `subcategories` (`id`, `sub_cat_name`, `cat_id`, `type_id`, `course_des`, `class_desc`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Primary Schools', 1, 1, 'Nava vision syllabus is designed in a simple manner that helps kids to learn easily using <font color=\"#0000ff\">QR Code based worksheet</font>s.Kids learn basic mathematical concepts like <font color=\"#9c0000\" style=\"\">Numbers, addition, subtraction, advanced arithmetical skills</font>, etc. Besides, they also get to read and learn about <font color=\"#9c0000\">poems, stories and grammar</font> in the English subject. In the EVS subject, kids learn about the<b> </b><font color=\"#9c0000\">physical world around them to observe and experiment</font><b> </b>with new things.', '1st -4th std', 'A', '2021-04-21 18:30:00', '2022-02-04 04:57:49'),
(2, 'Middle School', 1, 1, 'Nava vision syllabus is designed in a simple manner that helps kids to learn easily using QR Code based worksheets.kids will learn <font color=\"#9c0000\">advanced mathematical concepts</font>.besides, they also learn <font color=\"#9c0000\" style=\"\">poems, stories and grammar</font> in English subject. The science curriculum aims to help children develop basic scientific ideas and understanding about the <font color=\"#9c0000\">biological and physical aspects</font> of the world.', '5st -8th std', 'A', '2021-04-21 18:30:00', '2022-02-04 10:15:50'),
(3, 'Secondary School', 1, 1, '<p>Nava vision syllabus is designed in a simple manner that helps kids to learn easily using QR Code based worksheets.&nbsp; Kids will Begin with <font color=\"#9c0000\">Algebra&nbsp; and Geometry</font> and Wrap up with Calculus in mathematics, They also learn <font color=\"#9c0000\">poems,literature and grammar</font> in English subject.The science&nbsp; curriculum emphasizes the importance of starting with children’s <font color=\"#9c0000\">own ideas and learning through interactions with objects and materials</font>.<br></p>', '9th -10th std', 'A', '2021-04-21 18:30:00', '2022-02-04 10:15:50'),
(4, 'Non-Technical', 2, 1, '<p style=\"text-align: left;\"><span style=\"padding: 0px; margin: 0px; font-family: system-ui, -apple-system, \" segoe=\"\" ui\",=\"\" roboto,=\"\" \"helvetica=\"\" neue\",=\"\" arial,=\"\" \"noto=\"\" sans\",=\"\" sans-serif,=\"\" \"apple=\"\" color=\"\" emoji\",=\"\" \"segoe=\"\" ui=\"\" symbol\",=\"\" emoji\";=\"\" text-indent:=\"\" 48px;=\"\" color:=\"\" rgb(192,=\"\" 0,=\"\" 0);\"=\"\"><font color=\"#9c0000\">Abacus , Vedic maths ,Quick maths</font>&nbsp;</span><span style=\"color: rgb(33, 37, 41); font-family: system-ui, -apple-system, \" segoe=\"\" ui\",=\"\" roboto,=\"\" \"helvetica=\"\" neue\",=\"\" arial,=\"\" \"noto=\"\" sans\",=\"\" sans-serif,=\"\" \"apple=\"\" color=\"\" emoji\",=\"\" \"segoe=\"\" ui=\"\" symbol\",=\"\" emoji\";=\"\" text-indent:=\"\" 48px;\"=\"\">helps to improve&nbsp; children’s&nbsp; knowledge and understanding of maths&nbsp; and boost self-confidence.</span><span style=\"padding: 0px; margin: 0px; font-family: system-ui, -apple-system, \" segoe=\"\" ui\",=\"\" roboto,=\"\" \"helvetica=\"\" neue\",=\"\" arial,=\"\" \"noto=\"\" sans\",=\"\" sans-serif,=\"\" \"apple=\"\" color=\"\" emoji\",=\"\" \"segoe=\"\" ui=\"\" symbol\",=\"\" emoji\";=\"\" text-indent:=\"\" 48px;=\"\" color:=\"\" rgb(192,=\"\" 0,=\"\" 0);\"=\"\">&nbsp;<font color=\"#9c0000\">English club</font>&nbsp;</span><span style=\"color: rgb(33, 37, 41); font-family: system-ui, -apple-system, \" segoe=\"\" ui\",=\"\" roboto,=\"\" \"helvetica=\"\" neue\",=\"\" arial,=\"\" \"noto=\"\" sans\",=\"\" sans-serif,=\"\" \"apple=\"\" color=\"\" emoji\",=\"\" \"segoe=\"\" ui=\"\" symbol\",=\"\" emoji\";=\"\" text-indent:=\"\" 48px;\"=\"\">helps to practicing English in a relaxed, informal environment and to improve English skills.</span><span style=\"padding: 0px; margin: 0px; font-family: system-ui, -apple-system, \" segoe=\"\" ui\",=\"\" roboto,=\"\" \"helvetica=\"\" neue\",=\"\" arial,=\"\" \"noto=\"\" sans\",=\"\" sans-serif,=\"\" \"apple=\"\" color=\"\" emoji\",=\"\" \"segoe=\"\" ui=\"\" symbol\",=\"\" emoji\";=\"\" text-indent:=\"\" 48px;=\"\" color:=\"\" rgb(192,=\"\" 0,=\"\" 0);\"=\"\">&nbsp;<font color=\"#9c0000\">Science Club</font></span><span style=\"color: rgb(33, 37, 41); font-family: system-ui, -apple-system, \" segoe=\"\" ui\",=\"\" roboto,=\"\" \"helvetica=\"\" neue\",=\"\" arial,=\"\" \"noto=\"\" sans\",=\"\" sans-serif,=\"\" \"apple=\"\" color=\"\" emoji\",=\"\" \"segoe=\"\" ui=\"\" symbol\",=\"\" emoji\";=\"\" text-indent:=\"\" 48px;\"=\"\">&nbsp;helps to improve scientific attitude and provide opportunities for practice in scientific method.</span><span style=\"padding: 0px; margin: 0px; font-weight: bolder; color: rgb(33, 37, 41); font-family: system-ui, -apple-system, \" segoe=\"\" ui\",=\"\" roboto,=\"\" \"helvetica=\"\" neue\",=\"\" arial,=\"\" \"noto=\"\" sans\",=\"\" sans-serif,=\"\" \"apple=\"\" color=\"\" emoji\",=\"\" \"segoe=\"\" ui=\"\" symbol\",=\"\" emoji\";=\"\" font-size:=\"\" 1rem;=\"\" text-indent:=\"\" 36pt;\"=\"\">&nbsp;Navavidya&nbsp; courses</span><span style=\"padding: 0px; margin: 0px; color: rgb(33, 37, 41); font-family: system-ui, -apple-system, \" segoe=\"\" ui\",=\"\" roboto,=\"\" \"helvetica=\"\" neue\",=\"\" arial,=\"\" \"noto=\"\" sans\",=\"\" sans-serif,=\"\" \"apple=\"\" color=\"\" emoji\",=\"\" \"segoe=\"\" ui=\"\" symbol\",=\"\" emoji\";=\"\" font-size:=\"\" 1rem;=\"\" text-indent:=\"\" 36pt;\"=\"\">&nbsp; designed in a simple manner that helps kids to learn easily using </span><span style=\"padding: 0px; margin: 0px;\" segoe=\"\" ui\",=\"\" roboto,=\"\" \"helvetica=\"\" neue\",=\"\" arial,=\"\" \"noto=\"\" sans\",=\"\" sans-serif,=\"\" \"apple=\"\" color=\"\" emoji\",=\"\" \"segoe=\"\" ui=\"\" symbol\",=\"\" emoji\";=\"\" font-size:=\"\" 1rem;=\"\" text-indent:=\"\" 36pt;\"=\"\"><font color=\"#311873\">content pdf,worksheets &amp; classroom videos</font></span></p>', 'Abacus, Vedic Mathematics,Quick Math, English Club, Science Club', 'A', '2021-04-21 18:30:00', '2022-02-04 10:15:50'),
(5, 'Technical 1', 2, 1, '<div style=\"text-align: justify;\">The main objective of these courses are to introduce students to the field of Electrical&nbsp;&amp; Electronics,Robotics and drone to <font color=\"#9c0000\">stimulate their interests in science and engineering</font>.</div><div style=\"text-align: justify;\">Nava Vision helps to facilitate students skills and attitudes for <font color=\"#0000ff\">analysing and operation of Circuits, robots and programming</font>.By going through the process a students learn the working of different circuits,robot related to real word.<br></div><p></p>', 'Electrical and Electronics, Robotics And Drone', 'A', '2021-04-21 18:30:00', '2022-02-04 10:15:50'),
(6, 'Technical 2', 2, 1, '', 'Unplug Coding, Coding with Python, Artificial Intelligence', 'A', '2021-02-04 18:30:00', '2022-02-04 10:15:50'),
(7, 'Computer & Coding', 2, 1, 'Every student in every school should have the opportunity to learn computer science', 'Basics of Computer', 'A', '2021-04-21 18:30:00', '2022-02-04 10:15:50');

-- --------------------------------------------------------

--
-- Table structure for table `super_admins`
--

CREATE TABLE `super_admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `super_admins`
--

INSERT INTO `super_admins` (`id`, `name`, `email`, `password`, `image`, `created_at`, `updated_at`) VALUES
(1, 'sikindra', 'sikindra@gmail.com', '$2y$10$RCBscSABrGOBudpvc4SAguZsQ3NpJpKZuIGOK48JxORDHj0MM9UV.', 'admin.png', '2022-01-22 07:40:55', '2022-03-03 03:23:47');

-- --------------------------------------------------------

--
-- Table structure for table `syllebuses`
--

CREATE TABLE `syllebuses` (
  `syllbus_id` int(11) NOT NULL,
  `chapter_id` int(11) NOT NULL,
  `topic_id` varchar(11) NOT NULL,
  `topic_name` text NOT NULL,
  `pdf_file` varchar(200) NOT NULL,
  `video_link` varchar(200) NOT NULL,
  `decription` longtext,
  `sub_topic` int(11) NOT NULL,
  `status` char(1) NOT NULL DEFAULT 'A',
  `parent_id` int(11) DEFAULT NULL,
  `demo_status` int(11) NOT NULL DEFAULT '0',
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `syllebuses`
--

INSERT INTO `syllebuses` (`syllbus_id`, `chapter_id`, `topic_id`, `topic_name`, `pdf_file`, `video_link`, `decription`, `sub_topic`, `status`, `parent_id`, `demo_status`, `updated_at`, `created_at`) VALUES
(1, 1, '1.1', '<p><span style=\"color: rgb(33, 37, 41); white-space: nowrap; background-color: rgba(0, 0, 0, 0.075);\">Parts of abacus tool kit</span><br></p>', 'CH1_Introduction.pdf', 'https://navavidya.com/QRvideos/abacus/level_1/Chapter_1/CHAPTER%201_INTRODUCTION.mp4', '', 0, 'A', 0, 1, '2022-02-09 06:40:48', '2022-02-09 06:41:11'),
(2, 2, '2.1', '<p><span style=\"color: rgb(33, 37, 41); white-space: nowrap; background-color: rgba(0, 0, 0, 0.075);\">Representing 1 to 10 on abacus.</span></p>', 'Ch2_REPRESENTING_1_TO_101.pdf', 'https://navavidya.com/QRvideos/abacus/level_1/Chapter_2/CHAPTER%202_ONE%20TO%2010%20ON%20ABACUS.mp4', '', 0, 'A', 0, 1, '2022-02-09 06:40:48', '2022-02-09 06:41:11'),
(6, 3, '3.1', '<p><span style=\"color: rgb(33, 37, 41); white-space: nowrap; background-color: rgba(0, 0, 0, 0.075);\">Introduction to magical fingers, Add, Subtract</span><br></p>', 'Ch3_magical_fingers1.pdf', 'https://navavidya.com/QRvideos/abacus/level_1/Chapter_3/CHAPTER%203_ADDITION%20AND%20SUBTRACTION%20USING%20MAGICAL%20FINGERS.mp4', '', 0, 'A', 0, 0, '2022-02-09 06:40:48', '2022-02-09 06:41:11'),
(8, 4, '4.1', '<p><span style=\"color: rgb(33, 37, 41); white-space: nowrap; background-color: rgba(0, 0, 0, 0.075);\">Add, Sub using lower beads.</span><br></p>', 'Ch4_lower_beads.pdf', 'https://navavidya.com/QRvideos/abacus/level_1/Chapter_4/CHAPTER%204_ADDITION%20AND%20SUBTRACTION%20USING%20LOWER%20BEADS.mp4', '', 0, 'A', 0, 0, '2022-02-09 06:40:48', '2022-02-09 06:41:11'),
(10, 4, '4.2', '<p><span style=\"color: rgb(33, 37, 41); white-space: nowrap; background-color: rgba(0, 0, 0, 0.075);\">Addition and subtraction using small friends</span><br></p>', 'Ch4_Small_Friends.pdf', 'https://navavidya.com/QRvideos/abacus/level_1/Chapter_4/CHAPTER%204_ADDITION%20AND%20SUBTRACTION%20SMALL%20FRIENDS.mp4', '', 0, 'A', 0, 0, '2022-02-09 06:40:48', '2022-02-09 06:41:11'),
(11, 4, '4.3', '<p><span style=\"color: rgb(33, 37, 41); white-space: nowrap; background-color: rgba(0, 0, 0, 0.075);\">Addition and subtraction using big friends</span><br></p>', 'Ch4_big_friends.pdf', 'https://navavidya.com/QRvideos/abacus/level_1/Chapter_4/CHAPTER%204_ADDITION%20AND%20SUBTRACTION%20USING%20Big%20friends.mp4', '', 0, 'A', 0, 0, '2022-02-09 06:40:48', '2022-02-09 06:41:11'),
(12, 6, '6.1', '<p><span style=\"color: rgb(33, 37, 41); white-space: nowrap; background-color: rgba(0, 0, 0, 0.075);\">&nbsp;Representing multiplies of 10 up to 100</span><br></p>', 'Ch6_Representing_multiples_of_10_up_to_100.pdf', 'https://navavidya.com/QRvideos/abacus/level_1/Chapter_6/ch6(10-100).mp4', '', 0, 'A', 0, 0, '2022-02-09 06:40:48', '2022-02-09 06:41:11'),
(13, 6, '6.2', '<p><span style=\"color: rgb(33, 37, 41); white-space: nowrap; background-color: rgba(0, 0, 0, 0.075);\">Representing multiplies of 11 up to 99</span><br></p>', 'Ch6_REPRESENTING_11_TO_99_ON_ABACUS.pdf', 'https://navavidya.com/QRvideos/abacus/level_1/Chapter_6/ch6(11-99).mp4', '', 0, 'A', 0, 0, '2022-02-09 06:40:48', '2022-02-09 06:41:11'),
(14, 6, '6.3', '<p><span style=\"color: rgb(33, 37, 41); white-space: nowrap; background-color: rgba(0, 0, 0, 0.075);\">Representing multiplies of 100 up to 1000</span><br></p>', 'Ch6_Representing_multiples_of_100_up_to_1000.pdf', 'https://navavidya.com/QRvideos/abacus/level_1/Chapter_6/ch6(100-1000).mp4', '', 0, 'A', 0, 0, '2022-02-09 06:40:48', '2022-02-09 06:41:11'),
(15, 6, '6.4', '<p><span style=\"color: rgb(33, 37, 41); white-space: nowrap; background-color: rgba(0, 0, 0, 0.075);\">Representing multiplies of 1000 up to 10000</span><br></p>', 'Ch6_Representing_multiples_of_1000_up_to_10000.pdf', 'https://navavidya.com/QRvideos/abacus/level_1/Chapter_6/ch6(1000-10000).mp4', '', 0, 'A', 0, 0, '2022-02-09 06:40:48', '2022-02-09 06:41:11'),
(16, 7, '1.1', '<p><b>Introduction to</b>&nbsp;</p><p>a. fdh</p><p>b. j&nbsp; ksd</p><p>c. sfgs</p><p>d. dsfs</p>', 'Abacus_syllabus_(1)16.pdf', 'https://navavision.com/video/CHAPTER%202_ONE%20TO%2010%20ON%20ABACUS.mp4', '', 0, 'A', 0, 0, '2022-02-09 06:40:48', '2022-02-09 06:41:11'),
(17, 7, '1.2', 'Addition of single digit with 3-digit numbers', 'Syllabus_of_Vedic_Mathematics_6_Level_(1)1.pdf', 'https://navavision.com/video/CHAPTER%202_ONE%20TO%2010%20ON%20ABACUS.mp4', '', 0, 'A', 0, 0, '2022-02-09 06:40:48', '2022-02-09 06:41:11'),
(18, 8, '2.1', 'Subtraction of single digit from 2-digit numbers', 'Abacus_syllabus_(1)17.pdf', 'https://navavision.com/video/CHAPTER%202_ONE%20TO%2010%20ON%20ABACUS.mp4', '', 0, 'A', 0, 0, '2022-02-09 06:40:48', '2022-02-09 06:41:11'),
(19, 8, '2.2', 'Subtraction of single digit from 3-digit numbers', 'Abacus_syllabus_(1)18.pdf', 'https://navavision.com/video/CHAPTER%202_ONE%20TO%2010%20ON%20ABACUS.mp4', '', 0, 'A', 0, 0, '2022-02-09 06:40:48', '2022-02-09 06:41:11'),
(21, 10, '4.1', 'Subtraction of two-digit numbers', 'Abacus_syllabus_(1)20.pdf', 'https://navavision.com/video/CHAPTER%202_ONE%20TO%2010%20ON%20ABACUS.mp4', '', 0, 'A', 0, 0, '2022-02-09 06:40:48', '2022-02-09 06:41:11'),
(22, 11, '5.1', 'Addition and subtraction of 1 and 2-digit numbers ', 'Abacus_syllabus_(1)21.pdf', 'https://navavision.com/video/CHAPTER%202_ONE%20TO%2010%20ON%20ABACUS.mp4', '', 0, 'A', 0, 0, '2022-02-09 06:40:48', '2022-02-09 06:41:11'),
(23, 12, '1.1', 'Adding of 3-digit numbers', 'Abacus_syllabus_(1)22.pdf', 'https://navavision.com/video/CHAPTER%202_ONE%20TO%2010%20ON%20ABACUS.mp4', '', 0, 'A', 0, 0, '2022-02-09 06:40:48', '2022-02-09 06:41:11'),
(24, 13, '2.1', 'Subtracting 3-digit numbers', 'Abacus_syllabus_(1)23.pdf', 'https://navavision.com/video/CHAPTER%202_ONE%20TO%2010%20ON%20ABACUS.mp4', '', 0, 'A', 0, 0, '2022-02-09 06:40:48', '2022-02-09 06:41:11'),
(25, 14, '3.1', 'Adding and subtracting of 1, 2 & 3- digit numbers', 'Abacus_syllabus_(1)24.pdf', 'https://navavision.com/video/CHAPTER%202_ONE%20TO%2010%20ON%20ABACUS.mp4', '', 0, 'A', 0, 0, '2022-02-09 06:40:48', '2022-02-09 06:41:11'),
(26, 15, '4.1', ' Introduction to multiplication', 'Abacus_syllabus_(1)25.pdf', 'https://navavision.com/video/CHAPTER%202_ONE%20TO%2010%20ON%20ABACUS.mp4', '', 0, 'A', 0, 0, '2022-02-09 06:40:48', '2022-02-09 06:41:11'),
(27, 15, '4.2', 'Multiplication of single digit with single digit number', 'Abacus_syllabus_(1)26.pdf', 'https://navavision.com/video/CHAPTER%202_ONE%20TO%2010%20ON%20ABACUS.mp4', '', 0, 'A', 0, 0, '2022-02-09 06:40:48', '2022-02-09 06:41:11'),
(28, 16, '1.1', 'Adding 3-digit numbers', 'Abacus_syllabus_(1)27.pdf', 'https://navavision.com/video/CHAPTER%202_ONE%20TO%2010%20ON%20ABACUS.mp4', '', 0, 'A', 0, 0, '2022-02-09 06:40:48', '2022-02-09 06:41:11'),
(29, 17, '2.1', 'Adding and subtracting 3-digit numbers', 'Abacus_syllabus_(1)28.pdf', 'https://navavision.com/video/CHAPTER%202_ONE%20TO%2010%20ON%20ABACUS.mp4', '', 0, 'A', 0, 0, '2022-02-09 06:40:48', '2022-02-09 06:41:11'),
(30, 18, '3.1', 'Multiplication of two digit with single digit numbers', 'Abacus_syllabus_(1)29.pdf', 'https://navavision.com/video/CHAPTER%202_ONE%20TO%2010%20ON%20ABACUS.mp4', '', 0, 'A', 0, 0, '2022-02-09 06:40:48', '2022-02-09 06:41:11'),
(31, 20, '5.1', 'Division of single digit divisor with 2- digit dividend', 'Abacus_syllabus_(1)31.pdf', 'https://navavision.com/video/CHAPTER%202_ONE%20TO%2010%20ON%20ABACUS.mp4', '', 0, 'A', 0, 0, '2022-02-09 06:40:48', '2022-02-09 06:41:11'),
(32, 21, '1.1', 'Adding 4-digit numbers', 'Abacus_syllabus_(1)32.pdf', 'https://navavision.com/video/CHAPTER%202_ONE%20TO%2010%20ON%20ABACUS.mp4', '', 0, 'A', 0, 0, '2022-02-09 06:40:48', '2022-02-09 06:41:11'),
(33, 25, '1.1', 'Multiplication of two digit with triple digit', 'Abacus_syllabus_(1)34.pdf', 'https://navavision.com/video/CHAPTER%202_ONE%20TO%2010%20ON%20ABACUS.mp4', '', 0, 'A', 0, 0, '2022-02-09 06:40:48', '2022-02-09 06:41:11'),
(34, 25, '1.2', 'Multiplication of two digit with four digit', 'Abacus_syllabus_(1)35.pdf', 'https://navavision.com/video/CHAPTER%202_ONE%20TO%2010%20ON%20ABACUS.mp4', '', 0, 'A', 0, 0, '2022-02-09 06:40:48', '2022-02-09 06:41:11'),
(35, 33, '1.1', 'Percentage – 1, 2, 3 digits', 'Abacus_syllabus_(1)43.pdf', 'https://navavision.com/video/CHAPTER%202_ONE%20TO%2010%20ON%20ABACUS.mp4', '', 0, 'A', 0, 0, '2022-02-09 06:40:48', '2022-02-09 06:41:11'),
(36, 33, '1.2', ' Finding Percentage of a Number', 'Abacus_syllabus_(1)44.pdf', 'https://navavision.com/video/CHAPTER%202_ONE%20TO%2010%20ON%20ABACUS.mp4', '', 0, 'A', 0, 0, '2022-02-09 06:40:48', '2022-02-09 06:41:11'),
(37, 33, '1.3', 'Word Problems on Percentage', 'Abacus_syllabus_(1)45.pdf', 'https://navavision.com/video/CHAPTER%202_ONE%20TO%2010%20ON%20ABACUS.mp4', '', 0, 'A', 0, 0, '2022-02-09 06:40:48', '2022-02-09 06:41:11'),
(38, 34, '2.1', 'Prime Factorisation', 'Abacus_syllabus_(1)46.pdf', 'https://navavision.com/video/CHAPTER%202_ONE%20TO%2010%20ON%20ABACUS.mp4', '', 0, 'A', 0, 0, '2022-02-09 06:40:48', '2022-02-09 06:41:11'),
(39, 34, '2.2', 'Highest Common Factor (HCF)', 'Abacus_syllabus_(1)47.pdf', 'https://navavision.com/video/CHAPTER%202_ONE%20TO%2010%20ON%20ABACUS.mp4', '', 0, 'A', 0, 0, '2022-02-09 06:40:48', '2022-02-09 06:41:11'),
(40, 34, '2.3', 'Least Common Multiple (LCM)', 'Abacus_syllabus_(1)48.pdf', 'https://navavision.com/video/CHAPTER%202_ONE%20TO%2010%20ON%20ABACUS.mp4', '', 1, 'A', 0, 0, '2022-02-09 06:40:48', '2022-02-09 06:41:11'),
(41, 34, '2.3.1', 'Method – 1: Considering HCF', 'Abacus_syllabus_(1)49.pdf', 'https://navavision.com/video/CHAPTER%202_ONE%20TO%2010%20ON%20ABACUS.mp4', '', 0, 'A', 40, 0, '2022-02-09 06:40:48', '2022-02-09 06:41:11'),
(42, 34, '2.3.2', 'Method – 2: Considering Prime Factorisation', 'Abacus_syllabus_(1)50.pdf', 'https://navavision.com/video/CHAPTER%202_ONE%20TO%2010%20ON%20ABACUS.mp4', '', 0, 'A', 40, 0, '2022-02-09 06:40:48', '2022-02-09 06:41:11'),
(43, 35, '3.1', ' Method – 1: General Multiplication', 'Abacus_syllabus_(1)51.pdf', 'https://navavision.com/video/CHAPTER%202_ONE%20TO%2010%20ON%20ABACUS.mp4', '', 0, 'A', 0, 0, '2022-02-09 06:40:48', '2022-02-09 06:41:11'),
(44, 35, '3.2', 'Method – 2: Considering Formula', 'Abacus_syllabus_(1)52.pdf', 'https://navavision.com/video/CHAPTER%202_ONE%20TO%2010%20ON%20ABACUS.mp4', '', 0, 'A', 0, 0, '2022-02-09 06:40:48', '2022-02-09 06:41:11'),
(45, 36, '1.1', 'Normal Method', 'Abacus_syllabus_(1)53.pdf', 'https://navavision.com/video/CHAPTER%202_ONE%20TO%2010%20ON%20ABACUS.mp4', '', 0, 'A', 0, 0, '2022-02-09 06:40:48', '2022-02-09 06:41:11'),
(46, 36, '1.2', 'Abacus Method', 'Abacus_syllabus_(1)54.pdf', 'https://navavision.com/video/CHAPTER%202_ONE%20TO%2010%20ON%20ABACUS.mp4', '', 0, 'A', 0, 0, '2022-02-09 06:40:48', '2022-02-09 06:41:11'),
(47, 37, '5.1', 'Method – 1: General Multiplication', 'Abacus_syllabus_(1)55.pdf', 'https://navavision.com/video/CHAPTER%202_ONE%20TO%2010%20ON%20ABACUS.mp4', '', 0, 'A', 0, 0, '2022-02-09 06:40:48', '2022-02-09 06:41:11'),
(48, 37, '5.2', 'Method – 2: Considering Formula ', 'Abacus_syllabus_(1)56.pdf', 'https://navavision.com/video/CHAPTER%202_ONE%20TO%2010%20ON%20ABACUS.mp4', '', 0, 'A', 0, 0, '2022-02-09 06:40:48', '2022-02-09 06:41:11'),
(49, 38, '6.1', 'Normal Method', 'Abacus_syllabus_(1)57.pdf', 'https://navavision.com/video/CHAPTER%202_ONE%20TO%2010%20ON%20ABACUS.mp4', '', 0, 'A', 0, 0, '2022-02-09 06:40:48', '2022-02-09 06:41:11'),
(50, 38, '6.2', 'Abacus Method', 'Abacus_syllabus_(1)58.pdf', 'https://navavision.com/video/CHAPTER%202_ONE%20TO%2010%20ON%20ABACUS.mp4', '', 0, 'A', 0, 0, '2022-02-09 06:40:48', '2022-02-09 06:41:11'),
(55, 39, '1.2', '<p><span style=\"background-color: rgba(0, 0, 0, 0.075); color: rgb(33, 37, 41); white-space: nowrap; font-size: 1rem;\">Sutras and Upa-Sutras</span></p>', 'Chapter_1_1_5.pdf', 'https://navavidya.com/QRvideos/vedic_mathematics/level_1_chapters/Chapter_1/Chapter%201_sutras_part2.mp4', '', 0, 'A', 0, 0, '2022-02-09 06:40:48', '2022-02-09 06:41:11'),
(71, 42, '4.4.1', ' Casting Out 9’s', 'Abacus_syllabus_(1)78.pdf', 'https://navavision.com/video/CHAPTER%202_ONE%20TO%2010%20ON%20ABACUS.mp4', '', 0, 'A', 70, 0, '2022-02-09 06:40:48', '2022-02-09 06:41:11'),
(73, 42, '4.5.1 ', 'Addition ', 'Abacus_syllabus_(1)80.pdf', 'https://navavision.com/video/CHAPTER%202_ONE%20TO%2010%20ON%20ABACUS.mp4', '', 0, 'A', 72, 0, '2022-02-09 06:40:48', '2022-02-09 06:41:11'),
(74, 42, '4.5.2 ', 'Subtraction', 'Abacus_syllabus_(1)81.pdf', 'https://navavision.com/video/CHAPTER%202_ONE%20TO%2010%20ON%20ABACUS.mp4', '', 0, 'A', 72, 0, '2022-02-09 06:40:48', '2022-02-09 06:41:11'),
(75, 42, '4.5.3', ' Multiplication', 'Abacus_syllabus_(1)82.pdf', 'https://navavision.com/video/CHAPTER%202_ONE%20TO%2010%20ON%20ABACUS.mp4', '', 0, 'A', 72, 0, '2022-02-09 06:40:48', '2022-02-09 06:41:11'),
(76, 42, '4.5.4 ', 'Division', 'Abacus_syllabus_(1)83.pdf', 'https://navavision.com/video/CHAPTER%202_ONE%20TO%2010%20ON%20ABACUS.mp4', '', 0, 'A', 72, 0, '2022-02-09 06:40:48', '2022-02-09 06:41:11'),
(85, 44, '6.2.1 ', '2, 3 and 4 Digits with Carryover', 'Abacus_syllabus_(1)92.pdf', 'https://navavision.com/video/CHAPTER%202_ONE%20TO%2010%20ON%20ABACUS.mp4', '', 0, 'A', 84, 0, '2022-02-09 06:40:48', '2022-02-09 06:41:11'),
(87, 44, '6.3.1', ' 2, 3 and 4 Digits with Carryover Nikhilam Sutra (2, 3 and 4 Digits)', 'Abacus_syllabus_(1)94.pdf', 'https://navavision.com/video/CHAPTER%202_ONE%20TO%2010%20ON%20ABACUS.mp4', '', 0, 'A', 86, 0, '2022-02-09 06:40:48', '2022-02-09 06:41:11'),
(94, 46, '8.2.1', ' 2 - Digits with And Without Carryover', 'Syllabus_of_Vedic_Mathematics_6_Level_(1)4.pdf', 'https://navavision.com/video/CHAPTER%202_ONE%20TO%2010%20ON%20ABACUS.mp4', '', 0, 'A', 93, 0, '2022-02-09 06:40:48', '2022-02-09 06:41:11'),
(95, 46, '8.2.2 r', '3 - Digits with And Without Carryove', 'Syllabus_of_Vedic_Mathematics_6_Level_(1)5.pdf', 'https://navavision.com/video/CHAPTER%202_ONE%20TO%2010%20ON%20ABACUS.mp4', '', 0, 'A', 93, 0, '2022-02-09 06:40:48', '2022-02-09 06:41:11'),
(97, 46, '8.3.1 ', '2 - Digits with And Without Carryover', 'Syllabus_of_Vedic_Mathematics_6_Level_(1)7.pdf', 'https://navavision.com/video/CHAPTER%202_ONE%20TO%2010%20ON%20ABACUS.mp4', '', 0, 'A', 96, 0, '2022-02-09 06:40:48', '2022-02-09 06:41:11'),
(98, 46, '8.3.2 ', '3 - Digits with And Without Carryover', 'Syllabus_of_Vedic_Mathematics_6_Level_(1)8.pdf', 'https://navavision.com/video/CHAPTER%202_ONE%20TO%2010%20ON%20ABACUS.mp4', '', 0, 'A', 96, 0, '2022-02-09 06:40:48', '2022-02-09 06:41:11'),
(103, 46, '8.7.1 ', 'Multiplying With 9 (2, 3 Digits) ', 'Syllabus_of_Vedic_Mathematics_6_Level_(1)13.pdf', 'https://navavision.com/video/CHAPTER%202_ONE%20TO%2010%20ON%20ABACUS.mp4', '', 0, 'A', 102, 0, '2022-02-09 06:40:48', '2022-02-09 06:41:11'),
(104, 46, '8.7.2 ', 'Multiplying With 99 (2, 3 Digits)', 'Syllabus_of_Vedic_Mathematics_6_Level_(1)14.pdf', 'https://navavision.com/video/CHAPTER%202_ONE%20TO%2010%20ON%20ABACUS.mp4', '', 0, 'A', 102, 0, '2022-02-09 06:40:48', '2022-02-09 06:41:11'),
(105, 46, '8.7.3 ', 'Multiplying With 999 (2, 3 Digits)', 'Syllabus_of_Vedic_Mathematics_6_Level_(1)15.pdf', 'https://navavision.com/video/CHAPTER%202_ONE%20TO%2010%20ON%20ABACUS.mp4', '', 0, 'A', 102, 0, '2022-02-09 06:40:48', '2022-02-09 06:41:11'),
(110, 48, '1.1', 'Urdhva Tiryabhyam Sutra', 'Syllabus_of_Vedic_Mathematics_6_Level_(1)20.pdf', 'https://navavision.com/video/CHAPTER%202_ONE%20TO%2010%20ON%20ABACUS.mp4', '', 1, 'A', 0, 0, '2022-02-09 06:40:48', '2022-02-09 06:41:11'),
(111, 48, '1.1.1 ', '2, 3, 4 and 5 - Digits without Carryover', 'Syllabus_of_Vedic_Mathematics_6_Level_(1)21.pdf', 'https://navavision.com/video/CHAPTER%202_ONE%20TO%2010%20ON%20ABACUS.mp4', '', 0, 'A', 110, 0, '2022-02-09 06:40:48', '2022-02-09 06:41:11'),
(112, 48, '1.1.2 ', '2, 3, 4 and 5 - Digits with Carryover', 'Syllabus_of_Vedic_Mathematics_6_Level_(1)22.pdf', 'https://navavision.com/video/CHAPTER%202_ONE%20TO%2010%20ON%20ABACUS.mp4', '', 1, 'A', 110, 0, '2022-02-09 06:40:48', '2022-02-09 06:41:11'),
(113, 48, '1.2 ', 'Nikhilam Sutra', 'Syllabus_of_Vedic_Mathematics_6_Level_(1)23.pdf', 'https://navavision.com/video/CHAPTER%202_ONE%20TO%2010%20ON%20ABACUS.mp4', '', 1, 'A', 0, 0, '2022-02-09 06:40:48', '2022-02-09 06:41:11'),
(114, 48, '1.2.1', ' Less Than Base (2,3,4 and 5 Digits with And Without Carryover)', 'Syllabus_of_Vedic_Mathematics_6_Level_(1)24.pdf', 'https://navavision.com/video/CHAPTER%202_ONE%20TO%2010%20ON%20ABACUS.mp4', '', 0, 'A', 113, 0, '2022-02-09 06:40:48', '2022-02-09 06:41:11'),
(115, 48, '1.2.2', ' Greater Than Base (2,3,4 and 5 Digits with And Without Carryover)', 'Syllabus_of_Vedic_Mathematics_6_Level_(1)25.pdf', 'https://navavision.com/video/CHAPTER%202_ONE%20TO%2010%20ON%20ABACUS.mp4', '', 0, 'A', 113, 0, '2022-02-09 06:40:48', '2022-02-09 06:41:11'),
(116, 48, '1.2.3', ' One Less and Other Greater than Base (2,3,4 and 5 Digits)', 'Syllabus_of_Vedic_Mathematics_6_Level_(1)26.pdf', 'https://navavision.com/video/CHAPTER%202_ONE%20TO%2010%20ON%20ABACUS.mp4', '', 0, 'A', 113, 0, '2022-02-09 06:40:48', '2022-02-09 06:41:11'),
(117, 48, '1.3 ', 'Anurupyena Sutra (2,3 and 4 Digits)', 'Syllabus_of_Vedic_Mathematics_6_Level_(1)27.pdf', 'https://navavision.com/video/CHAPTER%202_ONE%20TO%2010%20ON%20ABACUS.mp4', '', 0, 'A', 0, 0, '2022-02-09 06:40:48', '2022-02-09 06:41:11'),
(118, 48, '1.4', ' Antyaordaske’pi Sutra (2,3 Digits)', 'Syllabus_of_Vedic_Mathematics_6_Level_(1)28.pdf', 'https://navavision.com/video/CHAPTER%202_ONE%20TO%2010%20ON%20ABACUS.mp4', '', 0, 'A', 0, 0, '2022-02-09 06:40:48', '2022-02-09 06:41:11'),
(119, 48, '1.5', ' Gunakasamuccaya Samuccayagunaka Sutra (2,3 Digits)', 'Syllabus_of_Vedic_Mathematics_6_Level_(1)29.pdf', 'https://navavision.com/video/CHAPTER%202_ONE%20TO%2010%20ON%20ABACUS.mp4', '', 0, 'A', 0, 0, '2022-02-09 06:40:48', '2022-02-09 06:41:11'),
(120, 49, '2.1 ', 'Multiplication with series of 1’s', 'Syllabus_of_Vedic_Mathematics_6_Level_(1)30.pdf', 'https://navavision.com/video/CHAPTER%202_ONE%20TO%2010%20ON%20ABACUS.mp4', '', 1, 'A', 0, 0, '2022-02-09 06:40:48', '2022-02-09 06:41:11'),
(121, 49, '2.1.1', ' Multiplying Numbers with Equal Number Of 1’s', 'Syllabus_of_Vedic_Mathematics_6_Level_(1)31.pdf', 'https://navavision.com/video/CHAPTER%202_ONE%20TO%2010%20ON%20ABACUS.mp4', '', 0, 'A', 120, 0, '2022-02-09 06:40:48', '2022-02-09 06:41:11'),
(122, 49, '2.1.2', ' Multiplying Numbers with Equal Series Of 1’s', 'Syllabus_of_Vedic_Mathematics_6_Level_(1)32.pdf', 'https://navavision.com/video/CHAPTER%202_ONE%20TO%2010%20ON%20ABACUS.mp4', '', 1, 'A', 120, 0, '2022-02-09 06:40:48', '2022-02-09 06:41:11'),
(123, 49, '2.1.2.1', ' Multiplying With 3 One’s', 'Syllabus_of_Vedic_Mathematics_6_Level_(1)33.pdf', 'https://navavision.com/video/CHAPTER%202_ONE%20TO%2010%20ON%20ABACUS.mp4', '', 0, 'A', 122, 0, '2022-02-09 06:40:48', '2022-02-09 06:41:11'),
(124, 49, '2.1.2.2 ', 'Multiplying With 4 One’s', 'Syllabus_of_Vedic_Mathematics_6_Level_(1)34.pdf', 'https://navavision.com/video/CHAPTER%202_ONE%20TO%2010%20ON%20ABACUS.mp4', '', 0, 'A', 122, 0, '2022-02-09 06:40:48', '2022-02-09 06:41:11'),
(125, 49, '2.2 ', 'Multiplication with series of 9’s', 'Syllabus_of_Vedic_Mathematics_6_Level_(1)35.pdf', 'https://navavision.com/video/CHAPTER%202_ONE%20TO%2010%20ON%20ABACUS.mp4', '', 1, 'A', 120, 0, '2022-02-09 06:40:48', '2022-02-09 06:41:11'),
(126, 49, '2.2.1', ' Multiplication of Numbers with Equal Number Of 9’s', 'Syllabus_of_Vedic_Mathematics_6_Level_(1)36.pdf', 'https://navavision.com/video/CHAPTER%202_ONE%20TO%2010%20ON%20ABACUS.mp4', '', 0, 'A', 125, 0, '2022-02-09 06:40:48', '2022-02-09 06:41:11'),
(127, 49, '2.2.2', ' Multiplication of Numbers with Higher Number Of 9’s', 'Syllabus_of_Vedic_Mathematics_6_Level_(1)37.pdf', 'https://navavision.com/video/CHAPTER%202_ONE%20TO%2010%20ON%20ABACUS.mp4', '', 0, 'A', 125, 0, '2022-02-09 06:40:48', '2022-02-09 06:41:11'),
(128, 49, '2.2.3', ' Multiplication of Numbers with Lower Number Of 9’s', 'Syllabus_of_Vedic_Mathematics_6_Level_(1)38.pdf', 'https://navavision.com/video/CHAPTER%202_ONE%20TO%2010%20ON%20ABACUS.mp4', '', 0, 'A', 125, 0, '2022-02-09 06:40:48', '2022-02-09 06:41:11'),
(129, 50, '4.1 ', 'Nikhilam Sutra (2,3 and 4 Digits)', 'Syllabus_of_Vedic_Mathematics_6_Level_(1)39.pdf', 'https://navavision.com/video/CHAPTER%202_ONE%20TO%2010%20ON%20ABACUS.mp4', '', 0, 'A', 0, 0, '2022-02-09 06:40:48', '2022-02-09 06:41:11'),
(130, 50, '4.2 ', 'Paravartya yojayet Sutra (2,3 and 4 Digits)', 'Syllabus_of_Vedic_Mathematics_6_Level_(1)40.pdf', 'https://navavision.com/video/CHAPTER%202_ONE%20TO%2010%20ON%20ABACUS.mp4', '', 0, 'A', 0, 0, '2022-02-09 06:40:48', '2022-02-09 06:41:11'),
(131, 50, '4.3 ', 'Anurupyena Sutra (2,3 and 4 Digits)', 'Syllabus_of_Vedic_Mathematics_6_Level_(1)41.pdf', 'https://navavision.com/video/CHAPTER%202_ONE%20TO%2010%20ON%20ABACUS.mp4', '', 0, 'A', 0, 0, '2022-02-09 06:40:48', '2022-02-09 06:41:11'),
(132, 50, '4.4 ', 'Dvajanka Sutra (1 Digit Flag)', 'Syllabus_of_Vedic_Mathematics_6_Level_(1)42.pdf', 'https://navavision.com/video/CHAPTER%202_ONE%20TO%2010%20ON%20ABACUS.mp4', '', 0, 'A', 0, 0, '2022-02-09 06:40:48', '2022-02-09 06:41:11'),
(133, 50, '4.5', ' Ekadhikena Purvena Sutra', 'Syllabus_of_Vedic_Mathematics_6_Level_(1)43.pdf', 'https://navavision.com/video/CHAPTER%202_ONE%20TO%2010%20ON%20ABACUS.mp4', '', 0, 'A', 0, 0, '2022-02-09 06:40:48', '2022-02-09 06:41:11'),
(134, 51, '5.1', ' Introduction', 'Syllabus_of_Vedic_Mathematics_6_Level_(1)44.pdf', 'https://navavision.com/video/CHAPTER%202_ONE%20TO%2010%20ON%20ABACUS.mp4', '', 0, 'A', 0, 0, '2022-02-09 06:40:48', '2022-02-09 06:41:11'),
(135, 51, '5.2 ', 'Types of Fractions', 'Syllabus_of_Vedic_Mathematics_6_Level_(1)45.pdf', 'https://navavision.com/video/CHAPTER%202_ONE%20TO%2010%20ON%20ABACUS.mp4', '', 0, 'A', 0, 0, '2022-02-09 06:40:48', '2022-02-09 06:41:11'),
(136, 51, '5.3', ' Convert Improper Fractions to Mixed Fractions', 'Syllabus_of_Vedic_Mathematics_6_Level_(1)46.pdf', 'https://navavision.com/video/CHAPTER%202_ONE%20TO%2010%20ON%20ABACUS.mp4', '', 0, 'A', 0, 0, '2022-02-09 06:40:48', '2022-02-09 06:41:11'),
(137, 51, '5.4', ' Convert Mixed Fractions to Improper Fractions', 'Syllabus_of_Vedic_Mathematics_6_Level_(1)47.pdf', 'https://navavision.com/video/CHAPTER%202_ONE%20TO%2010%20ON%20ABACUS.mp4', '', 0, 'A', 0, 0, '2022-02-09 06:40:48', '2022-02-09 06:41:11'),
(138, 51, '5.5', ' Finding HCF and LCM', 'Syllabus_of_Vedic_Mathematics_6_Level_(1)48.pdf', 'https://navavision.com/video/CHAPTER%202_ONE%20TO%2010%20ON%20ABACUS.mp4', '', 1, 'A', 0, 0, '2022-02-09 06:40:48', '2022-02-09 06:41:11'),
(139, 51, '5.5.1 ', 'Vilokanam Sutra', 'Syllabus_of_Vedic_Mathematics_6_Level_(1)49.pdf', 'https://navavision.com/video/CHAPTER%202_ONE%20TO%2010%20ON%20ABACUS.mp4', '', 0, 'A', 138, 0, '2022-02-09 06:40:48', '2022-02-09 06:41:11'),
(140, 51, '5.5.2 ', 'Anurupyena Sutra', 'Syllabus_of_Vedic_Mathematics_6_Level_(1)50.pdf', 'https://navavision.com/video/CHAPTER%202_ONE%20TO%2010%20ON%20ABACUS.mp4', '', 0, 'A', 138, 0, '2022-02-09 06:40:48', '2022-02-09 06:41:11'),
(141, 51, '5.6 ', 'Comparison of fractions', 'Syllabus_of_Vedic_Mathematics_6_Level_(1)51.pdf', 'https://navavision.com/video/CHAPTER%202_ONE%20TO%2010%20ON%20ABACUS.mp4', '', 0, 'A', 0, 0, '2022-02-09 06:40:48', '2022-02-09 06:41:11'),
(142, 51, '5.7 ', 'Operations on Fractions', 'Syllabus_of_Vedic_Mathematics_6_Level_(1)52.pdf', 'https://navavision.com/video/CHAPTER%202_ONE%20TO%2010%20ON%20ABACUS.mp4', '', 1, 'A', 0, 0, '2022-02-09 06:40:48', '2022-02-09 06:41:11'),
(143, 51, '5.7.1 ', 'Addition of fractions', 'Syllabus_of_Vedic_Mathematics_6_Level_(1)53.pdf', 'https://navavision.com/video/CHAPTER%202_ONE%20TO%2010%20ON%20ABACUS.mp4', '', 0, 'A', 142, 0, '2022-02-09 06:40:48', '2022-02-09 06:41:11'),
(144, 51, '5.7.2 ', 'Subtraction of fractions', 'Syllabus_of_Vedic_Mathematics_6_Level_(1)54.pdf', 'https://navavision.com/video/CHAPTER%202_ONE%20TO%2010%20ON%20ABACUS.mp4', '', 0, 'A', 142, 0, '2022-02-09 06:40:48', '2022-02-09 06:41:11'),
(145, 51, '5.7.3 ', 'Multiplication of fractions ', 'Syllabus_of_Vedic_Mathematics_6_Level_(1)55.pdf', 'https://navavision.com/video/CHAPTER%202_ONE%20TO%2010%20ON%20ABACUS.mp4', '', 0, 'A', 142, 0, '2022-02-09 06:40:48', '2022-02-09 06:41:11'),
(146, 51, '5.7.4', ' Division of fractions', 'Syllabus_of_Vedic_Mathematics_6_Level_(1)56.pdf', 'https://navavision.com/video/CHAPTER%202_ONE%20TO%2010%20ON%20ABACUS.mp4', '', 0, 'A', 142, 0, '2022-02-09 06:40:48', '2022-02-09 06:41:11'),
(147, 52, '6.1', ' Introduction', 'Syllabus_of_Vedic_Mathematics_6_Level_(1)57.pdf', 'https://navavision.com/video/CHAPTER%202_ONE%20TO%2010%20ON%20ABACUS.mp4', '', 0, 'A', 0, 0, '2022-02-09 06:40:48', '2022-02-09 06:41:11'),
(148, 52, '6.2 ', 'Place value of Decimals', 'Syllabus_of_Vedic_Mathematics_6_Level_(1)58.pdf', 'https://navavision.com/video/CHAPTER%202_ONE%20TO%2010%20ON%20ABACUS.mp4', '', 0, 'A', 0, 0, '2022-02-09 06:40:48', '2022-02-09 06:41:11'),
(149, 52, '6.3 ', 'Types of Decimals', 'Syllabus_of_Vedic_Mathematics_6_Level_(1)59.pdf', 'https://navavision.com/video/CHAPTER%202_ONE%20TO%2010%20ON%20ABACUS.mp4', '', 0, 'A', 0, 0, '2022-02-09 06:40:48', '2022-02-09 06:41:11'),
(150, 52, '6.4 ', 'Convert Decimals to fractions', 'Syllabus_of_Vedic_Mathematics_6_Level_(1)60.pdf', 'https://navavision.com/video/CHAPTER%202_ONE%20TO%2010%20ON%20ABACUS.mp4', '', 0, 'A', 0, 0, '2022-02-09 06:40:48', '2022-02-09 06:41:11'),
(151, 52, '6.5', ' Convert fractions to Decimals', 'Syllabus_of_Vedic_Mathematics_6_Level_(1)61.pdf', 'https://navavision.com/video/CHAPTER%202_ONE%20TO%2010%20ON%20ABACUS.mp4', '', 0, 'A', 0, 0, '2022-02-09 06:40:48', '2022-02-09 06:41:11'),
(152, 52, '6.6 ', 'Operations on Decimals', 'Syllabus_of_Vedic_Mathematics_6_Level_(1)62.pdf', 'https://navavision.com/video/CHAPTER%202_ONE%20TO%2010%20ON%20ABACUS.mp4', '', 1, 'A', 0, 0, '2022-02-09 06:40:48', '2022-02-09 06:41:11'),
(153, 52, '6.6.1 ', 'Addition of Decimals', 'Syllabus_of_Vedic_Mathematics_6_Level_(1)63.pdf', 'https://navavision.com/video/CHAPTER%202_ONE%20TO%2010%20ON%20ABACUS.mp4', '', 0, 'A', 152, 0, '2022-02-09 06:40:48', '2022-02-09 06:41:11'),
(154, 52, '6.6.2 ', 'Subtraction of Decimals', 'Syllabus_of_Vedic_Mathematics_6_Level_(1)64.pdf', 'https://navavision.com/video/CHAPTER%202_ONE%20TO%2010%20ON%20ABACUS.mp4', '', 0, 'A', 152, 0, '2022-02-09 06:40:48', '2022-02-09 06:41:11'),
(155, 52, '6.6.3 ', 'Multiplication of Decimals', 'Syllabus_of_Vedic_Mathematics_6_Level_(1)65.pdf', 'https://navavision.com/video/CHAPTER%202_ONE%20TO%2010%20ON%20ABACUS.mp4', '', 0, 'A', 152, 0, '2022-02-09 06:40:48', '2022-02-09 06:41:11'),
(156, 52, '6.6.4 ', 'Division of Decimals', 'Syllabus_of_Vedic_Mathematics_6_Level_(1)66.pdf', 'https://navavision.com/video/CHAPTER%202_ONE%20TO%2010%20ON%20ABACUS.mp4', '', 0, 'A', 152, 0, '2022-02-09 06:40:48', '2022-02-09 06:41:11'),
(157, 53, '1.1 ', 'Introduction', 'Syllabus_of_Vedic_Mathematics_6_Level_(1)67.pdf', 'https://navavision.com/video/CHAPTER%202_ONE%20TO%2010%20ON%20ABACUS.mp4', '', 0, 'A', 0, 0, '2022-02-09 06:40:48', '2022-02-09 06:41:11'),
(158, 53, '1.2', ' Properties of Square numbers', 'Syllabus_of_Vedic_Mathematics_6_Level_(1)68.pdf', 'https://navavision.com/video/CHAPTER%202_ONE%20TO%2010%20ON%20ABACUS.mp4', '', 0, 'A', 0, 0, '2022-02-09 06:40:48', '2022-02-09 06:41:11'),
(159, 53, '1.3 ', 'Ekadhikena Purvena Sutra', 'Syllabus_of_Vedic_Mathematics_6_Level_(1)69.pdf', 'https://navavision.com/video/CHAPTER%202_ONE%20TO%2010%20ON%20ABACUS.mp4', '', 1, 'A', 0, 0, '2022-02-09 06:40:48', '2022-02-09 06:41:11'),
(160, 53, '1.3.1 ', '2 – Digit number ending with 5', 'Syllabus_of_Vedic_Mathematics_6_Level_(1)70.pdf', 'https://navavision.com/video/CHAPTER%202_ONE%20TO%2010%20ON%20ABACUS.mp4', '', 0, 'A', 159, 0, '2022-02-09 06:40:48', '2022-02-09 06:41:11'),
(161, 53, '1.3.2 ', '3 – Digit number ending with 5', 'Syllabus_of_Vedic_Mathematics_6_Level_(1)71.pdf', 'https://navavision.com/video/CHAPTER%202_ONE%20TO%2010%20ON%20ABACUS.mp4', '', 0, 'A', 159, 0, '2022-02-09 06:40:48', '2022-02-09 06:41:11'),
(162, 53, '1.3.3 ', '2 – Digit number ending with 9', 'Syllabus_of_Vedic_Mathematics_6_Level_(1)72.pdf', 'https://navavision.com/video/CHAPTER%202_ONE%20TO%2010%20ON%20ABACUS.mp4', '', 0, 'A', 159, 0, '2022-02-09 06:40:48', '2022-02-09 06:41:11'),
(163, 53, '1.3.4 ', '3 – Digit number ending with 9', 'Syllabus_of_Vedic_Mathematics_6_Level_(1)73.pdf', 'https://navavision.com/video/CHAPTER%202_ONE%20TO%2010%20ON%20ABACUS.mp4', '', 0, 'A', 159, 0, '2022-02-09 06:40:48', '2022-02-09 06:41:11'),
(164, 53, '1.4 ', 'Anurupyena Sutra', 'Syllabus_of_Vedic_Mathematics_6_Level_(1)74.pdf', 'https://navavision.com/video/CHAPTER%202_ONE%20TO%2010%20ON%20ABACUS.mp4', '', 1, 'A', 0, 0, '2022-02-09 06:40:48', '2022-02-09 06:41:11'),
(165, 53, '1.4.1 ', '2 – Digit number', 'Syllabus_of_Vedic_Mathematics_6_Level_(1)75.pdf', 'https://navavision.com/video/CHAPTER%202_ONE%20TO%2010%20ON%20ABACUS.mp4', '', 0, 'A', 164, 0, '2022-02-09 06:40:48', '2022-02-09 06:41:11'),
(166, 53, '1.4.2 ', '3 – Digit number', 'Syllabus_of_Vedic_Mathematics_6_Level_(1)76.pdf', 'https://navavision.com/video/CHAPTER%202_ONE%20TO%2010%20ON%20ABACUS.mp4', '', 0, 'A', 164, 0, '2022-02-09 06:40:48', '2022-02-09 06:41:11'),
(167, 53, '1.4.3 ', '4 – Digit number', 'Syllabus_of_Vedic_Mathematics_6_Level_(1)77.pdf', 'https://navavision.com/video/CHAPTER%202_ONE%20TO%2010%20ON%20ABACUS.mp4', '', 0, 'A', 164, 0, '2022-02-09 06:40:48', '2022-02-09 06:41:11'),
(168, 53, '1.4.4 ', 'Decimal number', 'Syllabus_of_Vedic_Mathematics_6_Level_(1)78.pdf', 'https://navavision.com/video/CHAPTER%202_ONE%20TO%2010%20ON%20ABACUS.mp4', '', 0, 'A', 164, 0, '2022-02-09 06:40:48', '2022-02-09 06:41:11'),
(169, 53, '1.5 ', 'Yavadunam Tavadunikritya Varga Yojayet Sutra', 'Syllabus_of_Vedic_Mathematics_6_Level_(1)79.pdf', 'https://navavision.com/video/CHAPTER%202_ONE%20TO%2010%20ON%20ABACUS.mp4', '', 1, 'A', 0, 0, '2022-02-09 06:40:48', '2022-02-09 06:41:11'),
(170, 53, '1.5.1 ', '2 – Digit number when less than the base', 'Syllabus_of_Vedic_Mathematics_6_Level_(1)80.pdf', 'https://navavision.com/video/CHAPTER%202_ONE%20TO%2010%20ON%20ABACUS.mp4', '', 0, 'A', 169, 0, '2022-02-09 06:40:48', '2022-02-09 06:41:11'),
(171, 53, '1.5.2', ' 2 – Digit number when greater than the base', 'Syllabus_of_Vedic_Mathematics_6_Level_(1)81.pdf', 'https://navavision.com/video/CHAPTER%202_ONE%20TO%2010%20ON%20ABACUS.mp4', '', 0, 'A', 169, 0, '2022-02-09 06:40:48', '2022-02-09 06:41:11'),
(172, 53, '1.5.3', ' 3 – Digit number when less than the base', 'Syllabus_of_Vedic_Mathematics_6_Level_(1)82.pdf', 'https://navavision.com/video/CHAPTER%202_ONE%20TO%2010%20ON%20ABACUS.mp4', '', 0, 'A', 169, 0, '2022-02-09 06:40:48', '2022-02-09 06:41:11'),
(173, 53, '1.5.4 ', '3 – Digit number when less than the base', 'Syllabus_of_Vedic_Mathematics_6_Level_(1)83.pdf', 'https://navavision.com/video/CHAPTER%202_ONE%20TO%2010%20ON%20ABACUS.mp4', '', 0, 'A', 169, 0, '2022-02-09 06:40:48', '2022-02-09 06:41:11'),
(174, 53, '1.6 ', 'Near to sub base (3,4 digits)', 'Syllabus_of_Vedic_Mathematics_6_Level_(1)84.pdf', 'https://navavision.com/video/CHAPTER%202_ONE%20TO%2010%20ON%20ABACUS.mp4', '', 0, 'A', 0, 0, '2022-02-09 06:40:48', '2022-02-09 06:41:11'),
(175, 53, '1.7 ', 'Ekanyunena purvena Sutra (2,3 digits)', 'Syllabus_of_Vedic_Mathematics_6_Level_(1)85.pdf', 'https://navavision.com/video/CHAPTER%202_ONE%20TO%2010%20ON%20ABACUS.mp4', '', 0, 'A', 0, 0, '2022-02-09 06:40:48', '2022-02-09 06:41:11'),
(176, 53, '1.8 ', 'Dvanda Yoga (2,3,4,5 digits)', 'Syllabus_of_Vedic_Mathematics_6_Level_(1)86.pdf', 'https://navavision.com/video/CHAPTER%202_ONE%20TO%2010%20ON%20ABACUS.mp4', '', 0, 'A', 0, 0, '2022-02-09 06:40:48', '2022-02-09 06:41:11'),
(177, 54, '2.1 ', 'Introduction', 'Syllabus_of_Vedic_Mathematics_6_Level_(1)87.pdf', 'https://navavision.com/video/CHAPTER%202_ONE%20TO%2010%20ON%20ABACUS.mp4', '', 0, 'A', 0, 0, '2022-02-09 06:40:48', '2022-02-09 06:41:11'),
(178, 54, '2.2 ', 'vilokanam Sutra', 'Syllabus_of_Vedic_Mathematics_6_Level_(1)88.pdf', 'https://navavision.com/video/CHAPTER%202_ONE%20TO%2010%20ON%20ABACUS.mp4', '', 1, 'A', 0, 0, '2022-02-09 06:40:48', '2022-02-09 06:41:11'),
(179, 54, '2.2.1 ', '3 – Digit number', 'Syllabus_of_Vedic_Mathematics_6_Level_(1)89.pdf', 'https://navavision.com/video/CHAPTER%202_ONE%20TO%2010%20ON%20ABACUS.mp4', '', 0, 'A', 178, 0, '2022-02-09 06:40:48', '2022-02-09 06:41:11'),
(180, 54, '2.2.2 ', '4 – Digit number', 'Syllabus_of_Vedic_Mathematics_6_Level_(1)90.pdf', 'https://navavision.com/video/CHAPTER%202_ONE%20TO%2010%20ON%20ABACUS.mp4', '', 0, 'A', 178, 0, '2022-02-09 06:40:48', '2022-02-09 06:41:11'),
(181, 54, '2.2.3 ', '5 – Digit number', 'Syllabus_of_Vedic_Mathematics_6_Level_(1)91.pdf', 'https://navavision.com/video/CHAPTER%202_ONE%20TO%2010%20ON%20ABACUS.mp4', '', 0, 'A', 178, 0, '2022-02-09 06:40:48', '2022-02-09 06:41:11'),
(182, 54, '2.2.4', ' Decimal number', 'Syllabus_of_Vedic_Mathematics_6_Level_(1)92.pdf', 'https://navavision.com/video/CHAPTER%202_ONE%20TO%2010%20ON%20ABACUS.mp4', '', 0, 'A', 178, 0, '2022-02-09 06:40:48', '2022-02-09 06:41:11'),
(183, 54, '2.3 ', 'Dvanda Yoga', 'Syllabus_of_Vedic_Mathematics_6_Level_(1)93.pdf', 'https://navavision.com/video/CHAPTER%202_ONE%20TO%2010%20ON%20ABACUS.mp4', '', 1, 'A', 0, 0, '2022-02-09 06:40:48', '2022-02-09 06:41:11'),
(184, 54, '2.3.1 ', '3 – Digit number', 'Syllabus_of_Vedic_Mathematics_6_Level_(1)94.pdf', 'https://navavision.com/video/CHAPTER%202_ONE%20TO%2010%20ON%20ABACUS.mp4', '', 0, 'A', 183, 0, '2022-02-09 06:40:48', '2022-02-09 06:41:11'),
(185, 54, '2.3.2 ', '4 – Digit number', 'Syllabus_of_Vedic_Mathematics_6_Level_(1)95.pdf', 'https://navavision.com/video/CHAPTER%202_ONE%20TO%2010%20ON%20ABACUS.mp4', '', 0, 'A', 183, 0, '2022-02-09 06:40:48', '2022-02-09 06:41:11'),
(186, 54, '2.3.3', ' 5 – Digit number', 'Syllabus_of_Vedic_Mathematics_6_Level_(1)96.pdf', 'https://navavision.com/video/CHAPTER%202_ONE%20TO%2010%20ON%20ABACUS.mp4', '', 0, 'A', 183, 0, '2022-02-09 06:40:48', '2022-02-09 06:41:11'),
(187, 55, '3.1 ', 'Introduction', 'Syllabus_of_Vedic_Mathematics_6_Level_(1)97.pdf', 'https://navavision.com/video/CHAPTER%202_ONE%20TO%2010%20ON%20ABACUS.mp4', '', 0, 'A', 0, 0, '2022-02-09 06:40:48', '2022-02-09 06:41:11'),
(188, 55, '3.2', ' Multiplication of 2 numbers differ by 2 (2 Digits)', 'Syllabus_of_Vedic_Mathematics_6_Level_(1)98.pdf', 'https://navavision.com/video/CHAPTER%202_ONE%20TO%2010%20ON%20ABACUS.mp4', '', 0, 'A', 0, 0, '2022-02-09 06:40:48', '2022-02-09 06:41:11'),
(189, 55, '3.3', ' Multiplication of 2 numbers differ by 4 (2 Digits)', 'Syllabus_of_Vedic_Mathematics_6_Level_(1)99.pdf', 'https://navavision.com/video/CHAPTER%202_ONE%20TO%2010%20ON%20ABACUS.mp4', '', 0, 'A', 0, 0, '2022-02-09 06:40:48', '2022-02-09 06:41:11'),
(190, 55, '3.4 ', 'Multiplication of 2 numbers differ by 6 (2 Digits)', 'Syllabus_of_Vedic_Mathematics_6_Level_(2).pdf', 'https://navavision.com/video/CHAPTER%202_ONE%20TO%2010%20ON%20ABACUS.mp4', '', 0, 'A', 0, 0, '2022-02-09 06:40:48', '2022-02-09 06:41:11'),
(191, 56, '4.1 ', 'Introduction', 'Syllabus_of_Vedic_Mathematics_6_Level_(2)1.pdf', 'https://navavision.com/video/CHAPTER%202_ONE%20TO%2010%20ON%20ABACUS.mp4', '', 0, 'A', 0, 0, '2022-02-09 06:40:48', '2022-02-09 06:41:11'),
(192, 56, '4.2 ', 'Properties of Cube numbers', 'Syllabus_of_Vedic_Mathematics_6_Level_(2)2.pdf', 'https://navavision.com/video/CHAPTER%202_ONE%20TO%2010%20ON%20ABACUS.mp4', '', 0, 'A', 0, 0, '2022-02-09 06:40:48', '2022-02-09 06:41:11'),
(193, 56, '4.3', ' Yavadunam Tavadunikritya Varga Yojayet Sutra (2,3,4 digits)', 'Syllabus_of_Vedic_Mathematics_6_Level_(2)3.pdf', 'https://navavision.com/video/CHAPTER%202_ONE%20TO%2010%20ON%20ABACUS.mp4', '', 1, 'A', 0, 0, '2022-02-09 06:40:48', '2022-02-09 06:41:11'),
(194, 56, '4.3.1 ', '2 – Digit number when less than the base', 'Syllabus_of_Vedic_Mathematics_6_Level_(2)4.pdf', 'https://navavision.com/video/CHAPTER%202_ONE%20TO%2010%20ON%20ABACUS.mp4', '', 0, 'A', 193, 0, '2022-02-09 06:40:48', '2022-02-09 06:41:11'),
(195, 56, '4.3.2 ', '2 – Digit number when greater than the base', 'Syllabus_of_Vedic_Mathematics_6_Level_(2)5.pdf', 'https://navavision.com/video/CHAPTER%202_ONE%20TO%2010%20ON%20ABACUS.mp4', '', 0, 'A', 193, 0, '2022-02-09 06:40:48', '2022-02-09 06:41:11'),
(196, 56, '4.3.3', ' 3 – Digit number when greater than the base', 'Syllabus_of_Vedic_Mathematics_6_Level_(2)6.pdf', 'https://navavision.com/video/CHAPTER%202_ONE%20TO%2010%20ON%20ABACUS.mp4', '', 0, 'A', 193, 0, '2022-02-09 06:40:48', '2022-02-09 06:41:11'),
(197, 56, '4.3.4', ' 3 – Digit number when less than the base', 'Syllabus_of_Vedic_Mathematics_6_Level_(2)7.pdf', 'https://navavision.com/video/CHAPTER%202_ONE%20TO%2010%20ON%20ABACUS.mp4', '', 0, 'A', 193, 0, '2022-02-09 06:40:48', '2022-02-09 06:41:11'),
(198, 56, '4.4', ' Anurupyena Sutra', 'Syllabus_of_Vedic_Mathematics_6_Level_(2)8.pdf', 'https://navavision.com/video/CHAPTER%202_ONE%20TO%2010%20ON%20ABACUS.mp4', '', 1, 'A', 0, 0, '2022-02-09 06:40:48', '2022-02-09 06:41:11'),
(199, 56, '4.4.1 ', '2 – Digit number', 'Syllabus_of_Vedic_Mathematics_6_Level_(2)9.pdf', 'https://navavision.com/video/CHAPTER%202_ONE%20TO%2010%20ON%20ABACUS.mp4', '', 0, 'A', 198, 0, '2022-02-09 06:40:48', '2022-02-09 06:41:11'),
(200, 56, '4.4.2 ', '3 – Digit number', 'Syllabus_of_Vedic_Mathematics_6_Level_(2)10.pdf', 'https://navavision.com/video/CHAPTER%202_ONE%20TO%2010%20ON%20ABACUS.mp4', '', 0, 'A', 198, 0, '2022-02-09 06:40:48', '2022-02-09 06:41:11'),
(201, 56, '4.4.3 ', 'Decimal number', 'Syllabus_of_Vedic_Mathematics_6_Level_(2)11.pdf', 'https://navavision.com/video/CHAPTER%202_ONE%20TO%2010%20ON%20ABACUS.mp4', '', 0, 'A', 198, 0, '2022-02-09 06:40:48', '2022-02-09 06:41:11'),
(202, 57, '5.1 ', 'Vilokanam Sutra', 'Syllabus_of_Vedic_Mathematics_6_Level_(2)12.pdf', 'https://navavision.com/video/CHAPTER%202_ONE%20TO%2010%20ON%20ABACUS.mp4', '', 1, 'A', 0, 0, '2022-02-09 06:40:48', '2022-02-09 06:41:11'),
(203, 57, '5.1.1', ' 4 – Digit number', 'Syllabus_of_Vedic_Mathematics_6_Level_(2)13.pdf', 'https://navavision.com/video/CHAPTER%202_ONE%20TO%2010%20ON%20ABACUS.mp4', '', 0, 'A', 202, 0, '2022-02-09 06:40:48', '2022-02-09 06:41:11'),
(204, 57, '5.1.2 ', '5 – Digit number', 'Syllabus_of_Vedic_Mathematics_6_Level_(2)14.pdf', 'https://navavision.com/video/CHAPTER%202_ONE%20TO%2010%20ON%20ABACUS.mp4', '', 0, 'A', 202, 0, '2022-02-09 06:40:48', '2022-02-09 06:41:11'),
(205, 57, '5.1.3 ', '6 – Digit number', 'Syllabus_of_Vedic_Mathematics_6_Level_(2)15.pdf', 'https://navavision.com/video/CHAPTER%202_ONE%20TO%2010%20ON%20ABACUS.mp4', '', 0, 'A', 202, 0, '2022-02-09 06:40:48', '2022-02-09 06:41:11'),
(206, 57, '5.1.4 ', 'Decimal number', 'Syllabus_of_Vedic_Mathematics_6_Level_(2)16.pdf', 'https://navavision.com/video/CHAPTER%202_ONE%20TO%2010%20ON%20ABACUS.mp4', '', 0, 'A', 202, 0, '2022-02-09 06:40:48', '2022-02-09 06:41:11'),
(207, 58, '6.1 ', 'Introduction', 'Syllabus_of_Vedic_Mathematics_6_Level_(2)17.pdf', 'https://navavision.com/video/CHAPTER%202_ONE%20TO%2010%20ON%20ABACUS.mp4', '', 0, 'A', 0, 0, '2022-02-09 06:40:48', '2022-02-09 06:41:11'),
(208, 58, '6.1.1 ', 'Structure of Ratio and Proportion', 'Syllabus_of_Vedic_Mathematics_6_Level_(2)18.pdf', 'https://navavision.com/video/CHAPTER%202_ONE%20TO%2010%20ON%20ABACUS.mp4', '', 0, 'A', 0, 0, '2022-02-09 06:40:48', '2022-02-09 06:41:11'),
(209, 58, '6.2 ', 'Ratio', 'Syllabus_of_Vedic_Mathematics_6_Level_(2)19.pdf', 'https://navavision.com/video/CHAPTER%202_ONE%20TO%2010%20ON%20ABACUS.mp4', '', 1, 'A', 0, 0, '2022-02-09 06:40:48', '2022-02-09 06:41:11'),
(210, 58, '6.2.1 ', 'Vilokanam Sutra', 'Syllabus_of_Vedic_Mathematics_6_Level_(2)20.pdf', 'https://navavision.com/video/CHAPTER%202_ONE%20TO%2010%20ON%20ABACUS.mp4', '', 0, 'A', 209, 0, '2022-02-09 06:40:48', '2022-02-09 06:41:11'),
(211, 58, '6.3 ', 'Proportion', 'Syllabus_of_Vedic_Mathematics_6_Level_(2)21.pdf', 'https://navavision.com/video/CHAPTER%202_ONE%20TO%2010%20ON%20ABACUS.mp4', '', 1, 'A', 0, 0, '2022-02-09 06:40:48', '2022-02-09 06:41:11'),
(212, 58, '6.3.1 ', 'Madhyamadhyena Adyamantyena', 'Syllabus_of_Vedic_Mathematics_6_Level_(2)22.pdf', 'https://navavision.com/video/CHAPTER%202_ONE%20TO%2010%20ON%20ABACUS.mp4', '', 0, 'A', 211, 0, '2022-02-09 06:40:48', '2022-02-09 06:41:11'),
(213, 58, '6.4 ', 'Types of Proportions', 'Syllabus_of_Vedic_Mathematics_6_Level_(2)23.pdf', 'https://navavision.com/video/CHAPTER%202_ONE%20TO%2010%20ON%20ABACUS.mp4', '', 1, 'A', 0, 0, '2022-02-09 06:40:48', '2022-02-09 06:41:11'),
(214, 58, '6.4.1', ' Direct Proportion', 'Syllabus_of_Vedic_Mathematics_6_Level_(2)24.pdf', 'https://navavision.com/video/CHAPTER%202_ONE%20TO%2010%20ON%20ABACUS.mp4', '', 0, 'A', 213, 0, '2022-02-09 06:40:48', '2022-02-09 06:41:11'),
(215, 58, '6.4.2 ', 'Indirect Proportion', 'Syllabus_of_Vedic_Mathematics_6_Level_(2)25.pdf', 'https://navavision.com/video/CHAPTER%202_ONE%20TO%2010%20ON%20ABACUS.mp4', '', 0, 'A', 213, 0, '2022-02-09 06:40:48', '2022-02-09 06:41:11'),
(216, 59, '7.1 ', 'Introduction', 'Syllabus_of_Vedic_Mathematics_6_Level_(2)26.pdf', 'https://navavision.com/video/CHAPTER%202_ONE%20TO%2010%20ON%20ABACUS.mp4', '', 0, 'A', 0, 0, '2022-02-09 06:40:48', '2022-02-09 06:41:11'),
(217, 59, '7.2', 'Madhyamadhyena Adyamantyena ', 'Syllabus_of_Vedic_Mathematics_6_Level_(2)27.pdf', 'https://navavision.com/video/CHAPTER%202_ONE%20TO%2010%20ON%20ABACUS.mp4', '', 1, 'A', 0, 0, '2022-02-09 06:40:48', '2022-02-09 06:41:11'),
(218, 59, '7.2.1', ' Percentage value', 'Syllabus_of_Vedic_Mathematics_6_Level_(2)28.pdf', 'https://navavision.com/video/CHAPTER%202_ONE%20TO%2010%20ON%20ABACUS.mp4', '', 0, 'A', 217, 0, '2022-02-09 06:40:48', '2022-02-09 06:41:11'),
(219, 59, '7.2.2 ', 'Increase percentage ', 'Syllabus_of_Vedic_Mathematics_6_Level_(2)29.pdf', 'https://navavision.com/video/CHAPTER%202_ONE%20TO%2010%20ON%20ABACUS.mp4', '', 0, 'A', 217, 0, '2022-02-09 06:40:48', '2022-02-09 06:41:11'),
(220, 59, '7.2.3 ', 'Decrease percentage', 'Syllabus_of_Vedic_Mathematics_6_Level_(2)30.pdf', 'https://navavision.com/video/CHAPTER%202_ONE%20TO%2010%20ON%20ABACUS.mp4', '', 0, 'A', 217, 0, '2022-02-09 06:40:48', '2022-02-09 06:41:11'),
(221, 60, '6.7 ', 'Introduction', 'Syllabus_of_Vedic_Mathematics_6_Level_(2)31.pdf', 'https://navavision.com/video/CHAPTER%202_ONE%20TO%2010%20ON%20ABACUS.mp4', '', 0, 'A', 0, 0, '2022-02-09 06:40:48', '2022-02-09 06:41:11'),
(222, 60, '6.8', ' Finding last digit of any number to any power', 'Syllabus_of_Vedic_Mathematics_6_Level_(2)32.pdf', 'https://navavision.com/video/CHAPTER%202_ONE%20TO%2010%20ON%20ABACUS.mp4', '', 0, 'A', 0, 0, '2022-02-09 06:40:48', '2022-02-09 06:41:11'),
(223, 60, '6.9', ' Finding last two digits of any number to any power', 'Syllabus_of_Vedic_Mathematics_6_Level_(2)33.pdf', 'https://navavision.com/video/CHAPTER%202_ONE%20TO%2010%20ON%20ABACUS.mp4', '', 1, 'A', 0, 0, '2022-02-09 06:40:48', '2022-02-09 06:41:11'),
(224, 60, '6.9.1 ', 'Antyayoreva Sutra', 'Syllabus_of_Vedic_Mathematics_6_Level_(2)34.pdf', 'https://navavision.com/video/CHAPTER%202_ONE%20TO%2010%20ON%20ABACUS.mp4', '', 0, 'A', 223, 0, '2022-02-09 06:40:48', '2022-02-09 06:41:11'),
(225, 60, '6.9.2 ', 'Urdhva Triyagbhyam Sutra', 'Syllabus_of_Vedic_Mathematics_6_Level_(2)35.pdf', 'https://navavision.com/video/CHAPTER%202_ONE%20TO%2010%20ON%20ABACUS.mp4', '', 0, 'A', 223, 0, '2022-02-09 06:40:48', '2022-02-09 06:41:11'),
(226, 61, '2.1 ', 'Introduction', 'Syllabus_of_Vedic_Mathematics_6_Level_(2)36.pdf', 'https://navavision.com/video/CHAPTER%202_ONE%20TO%2010%20ON%20ABACUS.mp4', '', 0, 'A', 0, 0, '2022-02-09 06:40:48', '2022-02-09 06:41:11'),
(227, 61, '2.2', 'Simple interest', 'Syllabus_of_Vedic_Mathematics_6_Level_(2)37.pdf', 'https://navavision.com/video/CHAPTER%202_ONE%20TO%2010%20ON%20ABACUS.mp4', '', 0, 'A', 0, 0, '2022-02-09 06:40:48', '2022-02-09 06:41:11'),
(228, 61, '2.3 ', 'Compound interest', 'Syllabus_of_Vedic_Mathematics_6_Level_(2)38.pdf', 'https://navavision.com/video/CHAPTER%202_ONE%20TO%2010%20ON%20ABACUS.mp4', '', 0, 'A', 0, 0, '2022-02-09 06:40:48', '2022-02-09 06:41:11'),
(229, 63, '4.1 ', 'Introduction', 'Syllabus_of_Vedic_Mathematics_6_Level_(2)40.pdf', 'https://navavision.com/video/CHAPTER%202_ONE%20TO%2010%20ON%20ABACUS.mp4', '', 0, 'A', 0, 0, '2022-02-09 06:40:48', '2022-02-09 06:41:11'),
(230, 63, '4.2 ', 'Operations on Algebraic Expressions', 'Syllabus_of_Vedic_Mathematics_6_Level_(2)41.pdf', 'https://navavision.com/video/CHAPTER%202_ONE%20TO%2010%20ON%20ABACUS.mp4', '', 0, 'A', 0, 0, '2022-02-09 06:40:48', '2022-02-09 06:41:11'),
(231, 63, '4.2.1 ', 'Addition', 'Syllabus_of_Vedic_Mathematics_6_Level_(2)42.pdf', 'https://navavision.com/video/CHAPTER%202_ONE%20TO%2010%20ON%20ABACUS.mp4', '', 0, 'A', 0, 0, '2022-02-09 06:40:48', '2022-02-09 06:41:11'),
(232, 63, '4.2.2 ', 'Subtraction', 'Syllabus_of_Vedic_Mathematics_6_Level_(2)43.pdf', 'https://navavision.com/video/CHAPTER%202_ONE%20TO%2010%20ON%20ABACUS.mp4', '', 0, 'A', 0, 0, '2022-02-09 06:40:48', '2022-02-09 06:41:11'),
(233, 63, '4.2.3 ', 'Multiplication', 'Syllabus_of_Vedic_Mathematics_6_Level_(2)44.pdf', 'https://navavision.com/video/CHAPTER%202_ONE%20TO%2010%20ON%20ABACUS.mp4', '', 0, 'A', 0, 0, '2022-02-09 06:40:48', '2022-02-09 06:41:11'),
(234, 63, '4.2.4 ', 'Division', 'Syllabus_of_Vedic_Mathematics_6_Level_(2)45.pdf', 'https://navavision.com/video/CHAPTER%202_ONE%20TO%2010%20ON%20ABACUS.mp4', '', 0, 'A', 0, 0, '2022-02-09 06:40:48', '2022-02-09 06:41:11'),
(235, 64, '5.1 ', 'Introduction', 'Syllabus_of_Vedic_Mathematics_6_Level_(2)46.pdf', 'https://navavision.com/video/CHAPTER%202_ONE%20TO%2010%20ON%20ABACUS.mp4', '', 0, 'A', 0, 0, '2022-02-09 06:40:48', '2022-02-09 06:41:11'),
(236, 64, '5.2 ', 'Solving one stage equation by Vilokanam', 'Syllabus_of_Vedic_Mathematics_6_Level_(2)47.pdf', 'https://navavision.com/video/CHAPTER%202_ONE%20TO%2010%20ON%20ABACUS.mp4', '', 0, 'A', 0, 0, '2022-02-09 06:40:48', '2022-02-09 06:41:11'),
(237, 64, '5.3 ', 'Solving two step equations by Anurupyena', 'Syllabus_of_Vedic_Mathematics_6_Level_(2)48.pdf', 'https://navavision.com/video/CHAPTER%202_ONE%20TO%2010%20ON%20ABACUS.mp4', '', 0, 'A', 0, 0, '2022-02-09 06:40:48', '2022-02-09 06:41:11'),
(238, 64, '5.4', ' Solving three step equations by Anurupyena', 'Syllabus_of_Vedic_Mathematics_6_Level_(2)49.pdf', 'https://navavision.com/video/CHAPTER%202_ONE%20TO%2010%20ON%20ABACUS.mp4', '', 0, 'A', 0, 0, '2022-02-09 06:40:48', '2022-02-09 06:41:11'),
(239, 64, '5.5', ' Solving general equations having one variable by Paravartya Yojayet', 'Syllabus_of_Vedic_Mathematics_6_Level_(2)50.pdf', 'https://navavision.com/video/CHAPTER%202_ONE%20TO%2010%20ON%20ABACUS.mp4', '', 0, 'A', 0, 0, '2022-02-09 06:40:48', '2022-02-09 06:41:11'),
(240, 65, '6.1', ' Introduction', 'Syllabus_of_Vedic_Mathematics_6_Level_(2)51.pdf', 'https://navavision.com/video/CHAPTER%202_ONE%20TO%2010%20ON%20ABACUS.mp4', '', 0, 'A', 0, 0, '2022-02-09 06:40:48', '2022-02-09 06:41:11'),
(241, 65, '6.2', ' Anurupyena Sutra and Lopana sthapanabhyam Sutra', 'Syllabus_of_Vedic_Mathematics_6_Level_(2)52.pdf', 'https://navavision.com/video/CHAPTER%202_ONE%20TO%2010%20ON%20ABACUS.mp4', '', 0, 'A', 0, 0, '2022-02-09 06:40:48', '2022-02-09 06:41:11'),
(242, 65, '6.2.1 ', 'Simple Quadratic polynomials ', 'Syllabus_of_Vedic_Mathematics_6_Level_(2)53.pdf', 'https://navavision.com/video/CHAPTER%202_ONE%20TO%2010%20ON%20ABACUS.mp4', '', 0, 'A', 0, 0, '2022-02-09 06:40:48', '2022-02-09 06:41:11'),
(243, 65, '6.2.2 ', 'Simple Homogeneous Quadratic polynomials', 'Syllabus_of_Vedic_Mathematics_6_Level_(2)54.pdf', 'https://navavision.com/video/CHAPTER%202_ONE%20TO%2010%20ON%20ABACUS.mp4', '', 1, 'A', 0, 0, '2022-02-09 06:40:48', '2022-02-09 06:41:11'),
(244, 65, '6.2.2.1', ' Second degree Homogeneous Quadratic polynomials with two variables ', 'Syllabus_of_Vedic_Mathematics_6_Level_(2)55.pdf', 'https://navavision.com/video/CHAPTER%202_ONE%20TO%2010%20ON%20ABACUS.mp4', '', 0, 'A', 243, 0, '2022-02-09 06:40:48', '2022-02-09 06:41:11'),
(245, 65, '6.2.2.2  ', 'Second degree Homogeneous Quadratic polynomials with more than two variables', 'Syllabus_of_Vedic_Mathematics_6_Level_(2)56.pdf', 'https://navavision.com/video/CHAPTER%202_ONE%20TO%2010%20ON%20ABACUS.mp4', '', 0, 'A', 243, 0, '2022-02-09 06:40:48', '2022-02-09 06:41:11'),
(246, 65, '6.3 ', 'Quadratic Non-Homogeneous polynomial', 'Syllabus_of_Vedic_Mathematics_6_Level_(2)57.pdf', 'https://navavision.com/video/CHAPTER%202_ONE%20TO%2010%20ON%20ABACUS.mp4', '', 0, 'A', 0, 0, '2022-02-09 06:40:48', '2022-02-09 06:41:11'),
(247, 65, '6.4 ', 'HCF of Linear and Quadratic polynomials', 'Syllabus_of_Vedic_Mathematics_6_Level_(2)58.pdf', 'https://navavision.com/video/CHAPTER%202_ONE%20TO%2010%20ON%20ABACUS.mp4', '', 0, 'A', 243, 0, '2022-02-09 06:40:48', '2022-02-09 06:41:11'),
(269, 39, '1.1', '<p><span style=\"background-color: rgba(0, 0, 0, 0.075); color: rgb(33, 37, 41); white-space: nowrap; font-size: 1rem;\">Introduction to Ancient India.</span><br></p><p style=\"color: rgb(33, 37, 41); white-space: nowrap; background-color: rgba(0, 0, 0, 0.075);\"><span style=\"font-size: 1rem;\">Introduction to&nbsp;</span>Vedic Mathematics.</p><p style=\"color: rgb(33, 37, 41); white-space: nowrap; background-color: rgba(0, 0, 0, 0.075);\">Importance of Vedic Mathematics.</p><p style=\"color: rgb(33, 37, 41); white-space: nowrap; background-color: rgba(0, 0, 0, 0.075);\">And its Importance.</p>', 'Chapter_1.pdf', 'https://navavidya.com/QRvideos/vedic_mathematics/level_1_chapters/Chapter_1/chapter1_part1.mp4', '', 0, 'A', 0, 1, '2022-02-09 06:40:48', '2022-02-09 06:41:11'),
(270, 40, '2.1', '<p><span style=\"background-color: rgba(0, 0, 0, 0.075); color: rgb(33, 37, 41); white-space: nowrap; font-size: 1rem;\">Introduction.</span></p><p style=\"color: rgb(33, 37, 41); white-space: nowrap; background-color: rgba(0, 0, 0, 0.075);\">Classification of Numbers.</p><p style=\"color: rgb(33, 37, 41); white-space: nowrap; background-color: rgba(0, 0, 0, 0.075);\">Basic Operators</p>', 'Chapter_2.pdf', 'https://navavidya.com/QRvideos/vedic_mathematics/level_1_chapters/Chapter_2/Chapter%202.mp4', '', 0, 'A', 0, 0, '2022-02-09 06:40:48', '2022-02-09 06:41:11');
INSERT INTO `syllebuses` (`syllbus_id`, `chapter_id`, `topic_id`, `topic_name`, `pdf_file`, `video_link`, `decription`, `sub_topic`, `status`, `parent_id`, `demo_status`, `updated_at`, `created_at`) VALUES
(271, 41, '3.1', '<p><span style=\"background-color: rgba(0, 0, 0, 0.075); color: rgb(33, 37, 41); white-space: nowrap; font-size: 1rem;\">Grid Table Method</span></p><p style=\"color: rgb(33, 37, 41); white-space: nowrap; background-color: rgba(0, 0, 0, 0.075);\">Hand Method</p><p style=\"color: rgb(33, 37, 41); white-space: nowrap; background-color: rgba(0, 0, 0, 0.075);\">&nbsp;Multiplication Table Trick 7 &amp; 8</p><p style=\"color: rgb(33, 37, 41); white-space: nowrap; background-color: rgba(0, 0, 0, 0.075);\">Multiplication Table Trick For 2-Digit Numbers</p>', 'Chapter_31.pdf', 'https://navavidya.com/QRvideos/vedic_mathematics/level_1_chapters/Chapter_3/Chapter%203.mp4', '', 0, 'A', 0, 0, '2022-02-09 06:40:48', '2022-02-09 06:41:11'),
(273, 42, '4.1', '<p><span style=\"color: rgb(33, 37, 41); white-space: nowrap; background-color: rgba(0, 0, 0, 0.075);\">Introduction.</span></p><p style=\"color: rgb(33, 37, 41); white-space: nowrap; background-color: rgba(0, 0, 0, 0.075);\">Base<span style=\"font-size: 1rem;\">.</span></p><p style=\"color: rgb(33, 37, 41); white-space: nowrap; background-color: rgba(0, 0, 0, 0.075);\"><span style=\"font-size: 1rem;\">Parama Mitra.</span></p><p style=\"color: rgb(33, 37, 41); white-space: nowrap; background-color: rgba(0, 0, 0, 0.075);\">Sum Root / Digital Root.</p><p style=\"color: rgb(33, 37, 41); white-space: nowrap; background-color: rgba(0, 0, 0, 0.075);\">Answer Verification</p>', 'Chapter_4.pdf', 'https://navavidya.com/QRvideos/vedic_mathematics/level_1_chapters/Chapter_4/Chapter%204.mp4', '', 0, 'A', 0, 1, '2022-02-09 06:40:48', '2022-02-09 06:41:11'),
(274, 43, '5.1', '<p><span style=\"color: rgb(33, 37, 41); white-space: nowrap; background-color: rgba(0, 0, 0, 0.075);\">Introduction.</span></p><p style=\"color: rgb(33, 37, 41); white-space: nowrap; background-color: rgba(0, 0, 0, 0.075);\">Divisibility Rules – 1, 2, 5 and 10</p><p style=\"color: rgb(33, 37, 41); white-space: nowrap; background-color: rgba(0, 0, 0, 0.075);\">Divisibility Rules – 3, 6 and 9</p><p style=\"color: rgb(33, 37, 41); white-space: nowrap; background-color: rgba(0, 0, 0, 0.075);\">Divisibility Rules – 4, 8</p><p style=\"color: rgb(33, 37, 41); white-space: nowrap; background-color: rgba(0, 0, 0, 0.075);\">Divisibility Rules for Prime Numbers</p><p style=\"color: rgb(33, 37, 41); white-space: nowrap; background-color: rgba(0, 0, 0, 0.075);\">Divisibility Rules for Composite Numbers</p>', 'Chapter_5.pdf', 'https://navavidya.com/QRvideos/vedic_mathematics/level_1_chapters/Chapter_5/chapter%205.mp4', '', 0, 'A', 0, 0, '2022-02-09 06:40:48', '2022-02-09 06:41:11'),
(276, 44, '6.1', '<p><span style=\"color: rgb(33, 37, 41); white-space: nowrap; background-color: rgba(0, 0, 0, 0.075);\">Introduction</span></p><p style=\"color: rgb(33, 37, 41); white-space: nowrap; background-color: rgba(0, 0, 0, 0.075);\">2, 3 and 4 Digits with Carryover</p><p style=\"color: rgb(33, 37, 41); white-space: nowrap; background-color: rgba(0, 0, 0, 0.075);\">Ekadhikena Purvena Sutra</p><p style=\"color: rgb(33, 37, 41); white-space: nowrap; background-color: rgba(0, 0, 0, 0.075);\">2, 3 and 4 Digits with Carryover-</p><p style=\"color: rgb(33, 37, 41); white-space: nowrap; background-color: rgba(0, 0, 0, 0.075);\">-Nikhilam Sutra (2, 3 and 4 Digits)</p><p style=\"color: rgb(33, 37, 41); white-space: nowrap; background-color: rgba(0, 0, 0, 0.075);\">Vilokanam Sutra.</p>', 'Chapter_6.pdf', 'https://navavidya.com/QRvideos/vedic_mathematics/level_1_chapters/Chapter_6/chapter6.mp4', '', 0, 'A', 0, 0, '2022-02-09 06:40:48', '2022-02-09 06:41:11'),
(277, 45, '7.1', '<p><span style=\"color: rgb(33, 37, 41); white-space: nowrap; background-color: rgba(0, 0, 0, 0.075);\">Introduction</span></p><p style=\"color: rgb(33, 37, 41); white-space: nowrap; background-color: rgba(0, 0, 0, 0.075);\">Nikhilam Navatashcaramam Dashatah Sutra</p><p style=\"color: rgb(33, 37, 41); white-space: nowrap; background-color: rgba(0, 0, 0, 0.075);\">&nbsp;Ekadhikena Purvena Sutra and Param Mitra</p><p style=\"color: rgb(33, 37, 41); white-space: nowrap; background-color: rgba(0, 0, 0, 0.075);\">Ekanyunena Purvena and Param Mitra</p>', 'Chapter_7.pdf', 'https://navavidya.com/QRvideos/vedic_mathematics/level_1_chapters/Chapter_7/chapter7.mp4', '', 0, 'A', 0, 0, '2022-02-09 06:40:48', '2022-02-09 06:41:11'),
(279, 46, '8.1', '<p><span style=\"color: rgb(33, 37, 41); white-space: nowrap; background-color: rgba(0, 0, 0, 0.075);\">Introduction</span></p><p style=\"color: rgb(33, 37, 41); white-space: nowrap; background-color: rgba(0, 0, 0, 0.075);\">Multiplying With 11</p><p style=\"color: rgb(33, 37, 41); white-space: nowrap; background-color: rgba(0, 0, 0, 0.075);\">Multiplying With 12</p><p style=\"color: rgb(33, 37, 41); white-space: nowrap; background-color: rgba(0, 0, 0, 0.075);\">Multiplying With 5</p><p style=\"color: rgb(33, 37, 41); white-space: nowrap; background-color: rgba(0, 0, 0, 0.075);\">Multiplying With 25</p><p style=\"color: rgb(33, 37, 41); white-space: nowrap; background-color: rgba(0, 0, 0, 0.075);\">Multiplying With 125</p><p style=\"color: rgb(33, 37, 41); white-space: nowrap; background-color: rgba(0, 0, 0, 0.075);\">&nbsp;Multiplying With 9’s</p>', 'Chapter_8.pdf', 'https://navavidya.com/QRvideos/vedic_mathematics/level_1_chapters/Chapter_8/chapter%208.mp4', '', 0, 'A', 0, 0, '2022-02-09 06:40:48', '2022-02-09 06:41:11'),
(280, 47, '9.1', '<p><span style=\"color: rgb(33, 37, 41); white-space: nowrap; background-color: rgba(0, 0, 0, 0.075);\">Introduction</span></p><p style=\"color: rgb(33, 37, 41); white-space: nowrap; background-color: rgba(0, 0, 0, 0.075);\">Dividing Number By 5</p><p style=\"color: rgb(33, 37, 41); white-space: nowrap; background-color: rgba(0, 0, 0, 0.075);\">Dividing Number By 14</p><p style=\"color: rgb(33, 37, 41); white-space: nowrap; background-color: rgba(0, 0, 0, 0.075);\">Dividing Number By 16</p>', 'Chapter_9.pdf', 'https://navavidya.com/QRvideos/vedic_mathematics/level_1_chapters/Chapter_9/chapter9.mp4', '', 0, 'A', 0, 0, '2022-02-09 06:40:48', '2022-02-09 06:41:11'),
(281, 2, '2.2', '<p><span style=\"color: rgb(33, 37, 41); white-space: nowrap; background-color: rgba(0, 0, 0, 0.075);\">Representing 11 to 20 on abacus.</span><br></p>', 'Ch2_REPRESENTING_11_TO_20.pdf', 'https://navavidya.com/QRvideos/abacus/level_1/Chapter_2/Level%201_Ch%202_Representation%2011%20to%2020_Video%202.mp4', '', 0, 'A', 0, 0, '2022-02-09 06:40:48', '2022-02-09 06:41:11'),
(282, 2, '2.3', '<p><span style=\"color: rgb(33, 37, 41); white-space: nowrap; background-color: rgba(0, 0, 0, 0.075);\">Representing 21 to 30 on abacus.</span><br></p>', 'Ch2_REPRESENTING_21_TO_30.pdf', 'https://navavidya.com/QRvideos/abacus/level_1/Chapter_2/Level%201_Ch%202_Representation%2021%20to%2030_Video%203.mp4', '', 0, 'A', 0, 0, '2022-02-09 06:40:48', '2022-02-09 06:41:11');

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `person_name` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `status` char(1) NOT NULL DEFAULT 'A',
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`id`, `name`, `description`, `person_name`, `image`, `status`, `updated_at`, `created_at`) VALUES
(1, 'BTM franchisee', 'They have opened up their contacts to me and i have everything i need.I look forward to a long relationship with them.', 'Chaitra Devraj', 'chaitra3.jpg', 'A', '2022-03-15 23:22:15', '2022-02-04 06:39:53'),
(3, 'Vijaynagar franchisee', 'I truly appreciate this unique idea of building strong foundation in children at the right age becoming reality,Proud to be part of Nava Vision\'s innovative Journey !!', 'Murali Mohan ', 'murali1.jpg', 'A', '2022-02-04 06:39:33', '2022-02-04 06:39:53'),
(4, 'Principal LITTLE BLOOM EDUCATION SOCIETY (R.)', 'We are happy to associate with Nava Vision for setting up Vedic Mathematics center for our  students in our school premises.', 'M. Saraswathi', 't31.jpg', 'A', '2022-02-04 06:39:33', '2022-02-04 06:39:53'),
(5, 'Sarvagnanagar franchisee', 'To me it\'s a family who are always there with us in need. I am loving this journey of growing together. It has alot of potential and soon it is going to be a popular name across the country.', 'Anupam Kumar ', 'anupam1.png', 'A', '2022-02-04 06:39:33', '2022-02-04 06:39:53');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `user_type` char(1) NOT NULL DEFAULT 'S' COMMENT 'Student=>s,Admin=>A,Employee=>E,Visitors=>V',
  `image` varchar(255) NOT NULL,
  `school_name` longtext,
  `class` varchar(255) DEFAULT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `gender` char(1) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `email` varchar(100) NOT NULL,
  `address1` varchar(200) NOT NULL,
  `address2` varchar(200) NOT NULL,
  `city` varchar(50) NOT NULL,
  `state` varchar(50) NOT NULL,
  `country` varchar(4) NOT NULL,
  `pincode` int(6) NOT NULL,
  `password` text NOT NULL,
  `status` char(1) NOT NULL DEFAULT 'I',
  `date_created` datetime NOT NULL,
  `date_updated` datetime NOT NULL,
  `login_status` int(11) NOT NULL DEFAULT '0',
  `last_login` datetime DEFAULT NULL,
  `school_id` int(11) DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_type`, `image`, `school_name`, `class`, `first_name`, `last_name`, `gender`, `phone`, `email`, `address1`, `address2`, `city`, `state`, `country`, `pincode`, `password`, `status`, `date_created`, `date_updated`, `login_status`, `last_login`, `school_id`) VALUES
(1, 'A', '', NULL, NULL, 'admin', 'admin', '', '3423434234', 'admin@gmail.com', 'asdsadsdf', 'asdsadasdsdf', 'sadasdsad', 'KA', 'IN', 333333, 'RrdfJyUwa5', 'A', '2020-08-19 11:27:50', '2020-08-19 11:27:50', 1, NULL, 0),
(62, 'S', '', NULL, NULL, 'arshiya', 'M', '', '9611964453', 'arshiya.m15@gmail.com', 'hsr lyout', 'Sector 6', 'banglore', 'Karnataka', 'IN', 560102, '$2y$04$YVZQ8ZB2IF0F00AlsonGcOynotHyiVcGgVzysI6OJBOtqoddBiKV6', 'A', '2021-03-16 11:14:57', '2021-03-16 11:14:57', 1, '2021-03-16 11:18:00', 0),
(70, 'S', '', NULL, NULL, 'AYUSHE', 'JALAN', '', '7766912630', 'ayushijalan10@gmail.com', 'INDRANAGAR', 'SASA', 'BANGLURU', 'KA', 'IN', 560068, '$2y$04$LbcgFyPNRwSVCd52ESEZG.Zz0n5NHbNQLr.iBe2Cgh0PHKzdVDkGu', 'A', '2021-04-21 16:15:29', '2021-04-21 16:15:29', 1, '2021-05-12 21:06:36', 0),
(71, 'S', '', NULL, NULL, 'Aishwarya', 'jung', '', '9068215326', 'aishjung124@gmail.com', 'purani bazar kmou bus station ', 'near bank of broda ', 'pith', 'State', 'IN', 262501, '$2y$04$/xF3jTCSOoI.kMmiTaXeU.fMsLrt0wRJs4b7gTIDhCq9niviOfMvy', 'A', '2021-04-21 16:24:12', '2021-04-21 16:24:12', 1, '2021-04-22 14:03:45', 0),
(65, 'D', '', NULL, NULL, 'Demo', 'Demo', '', '9988775544', 'demo@navavidya.com', 'Demo', 'demo', 'banglore', 'Karnataka', 'IN', 560037, '$2y$04$jCMbK9XFUtOt81DZ5iaECOw1jwjFcpZA3p2iRNVPRce/94aFRAwCi', 'A', '2021-03-19 14:31:30', '2021-03-19 14:31:30', 1, '2021-05-05 10:04:45', 0),
(72, 'S', '', NULL, NULL, 'Rahul', 'Zachariah', '', '09035706652', 'marinaraj09@gmail.com', 'kalabhaireshwara Nilaya', 'near Kids global', 'Bangalore', 'KA', 'IN', 560037, '$2y$04$AvOAxp0mej2PZ8JVlq1o7e5Fut0svy71fjjWRznYW94dFIKzP3twe', 'A', '2021-04-21 16:35:18', '2021-04-21 16:35:18', 1, '2021-04-21 16:37:10', 0),
(73, 'S', '', NULL, NULL, 'ishan', 'kinange', '', '7676319577', 'manu.malgave28@gmail.com', 'mah', 'ma', 'banglore', 'KA', 'IN', 560043, '$2y$04$2x91ZR3KN4erYhJPgOTXNeiK6AznzSSvs.ObN.T890dt9mq5trcma', 'A', '2021-04-21 16:49:03', '2021-04-21 16:49:03', 0, NULL, 0),
(38, 'S', 'NV_logo.png', 'christs nnn', '', 'manali', 'kinange', 'f', '7676319577', 'manali.navavision@gmail.com', 'banglore', 'CV raman nagar', 'banglore', 'KA', 'IN', 560037, '$2y$04$IX31nyu43XZUgex0ORsB.O5sovWCEv.g8jl9U1pbiru7BwMNowOCm', 'A', '2021-03-02 10:47:11', '2021-03-02 10:47:11', 1, '2021-06-03 21:58:20', 0),
(67, 'S', '', NULL, NULL, 'Pavan', 'Kumar', '', '8639791139', 'obireddypavankumarreddy@gmail.com', 'Yelahanka', 'Bangalore', 'Bangalore', 'KA', 'IN', 560064, '$2y$04$SOw/zYdoV5Qs.uxZvGcA0OPFHZa9Vmn1DZcCfwRgZt3spsRk.Csre', 'A', '2021-04-01 22:55:00', '2021-04-01 22:55:00', 0, NULL, 0),
(68, 'S', '', NULL, NULL, 'Aradhya', 'Thakur', '', '7021972437', 'eliteswatithakur@gmail.com', 'A-1006, The Nest, Nandanvan Indstrl Rd, Near Asha Nagar', 'Mulund West , Mumbai 400080 Maharashtra', 'Mumbai', 'MH', 'IN', 400080, '$2y$04$piA/DBVY4K5ZlxT8PFrJuu.FokT0PTbj90ilftZQs71V0e3J9gitu', 'A', '2021-04-08 12:49:15', '2021-04-08 12:49:15', 1, '2021-04-08 12:50:12', 0),
(69, 'S', '', NULL, NULL, 'Parth', 'trivedi', '', '9769069480', 'bharti30512@gmail.com', 'Morning Glory', 'Everest World', 'Thane', 'MH', 'IN', 400607, '$2y$04$oJUSgHhVwV5aGiSVygWB8uViwmrWJg7SNKKOQW4nSBZ/beaVBb2xq', 'A', '2021-04-18 16:38:21', '2021-04-18 16:38:21', 1, '2021-04-21 12:13:42', 0),
(79, 'S', '', 'RBK School', '4', 'Priyansh', 'Litoria', 'm', '9920888372', 'pushkar_litoria@hotmail.com', 'D202, Shree Sai Sneha ABCD CHS Ltd', 'Ramdev Park Road Mira Road East', 'Thane', 'MH', 'IN', 401107, '$2y$04$hlvWQCn1PsAlGanV/yHALOcrRqtQiOlrL3C5RZavdyDc8wtt09Z22', 'A', '2021-05-24 14:58:05', '2021-05-24 14:58:05', 1, '2021-05-26 17:07:09', 0),
(78, 'S', '', NULL, NULL, 'testing', 'testing', '', '09945906284', 'pavan.navavision@gmail.com', 'nobody', 'nobody', 'bangalore', 'KA', 'IN', 560099, '$2y$04$lZTdVCR21SYAjsWVLtn3ruNevN3eN.hr6MNAButJz4gGbOixJBZwy', 'A', '2021-05-12 17:11:24', '2021-05-12 17:11:24', 1, '2021-05-20 10:14:58', 0),
(77, 'S', '', NULL, NULL, 'Swaraj', 'Patil', '', '9823503146', 'yogesh.patil4u@gmail.com', 'F-804, Nancy Lake Homes', 'opp-Bharati Vidyapeeth gate, pune-satara road, katraj', 'Pune', 'MH', 'IN', 411046, '$2y$04$/wykuR27O9wLEy6bxQsISufgPwBLoyLRoZhJdQDDCy6jIWTrg2Q7u', 'A', '2021-05-11 12:49:56', '2021-05-11 12:49:56', 1, '2021-05-11 12:55:07', 0),
(76, 'S', '', NULL, NULL, 'klsdkl', 'nfjnsdjk', '', '7676319577', 'manali.ditc@gmail.com', 'sad', 'asd', 'sad', 'KA', 'IN', 560094, '$2y$04$HvgvwUPyQe4OhCKmncNbue7CrCN.NqEtgSaAj6CwdSfmQlkXMQYbq', 'A', '2021-04-29 14:12:02', '2021-04-29 14:12:02', 1, '2021-04-29 14:51:30', 0),
(75, 'S', 'Yadu.jpg', 'PARADISE INTERNATIONAL SCHOOL BHERYA', '4', 'YADUNANDANSHETTY', 'SV', 'm', '9481814268', 'snvenkatesha@gmail.com', 'gurumatta street, ', 'new extension saligrama-571604', 'mysore', 'KA', 'IN', 571604, '$2y$04$mtdeIvNpmbv8jJugSspjkerwnGh/3eGfqnyaop.csBPTU9.wH0o9u', 'A', '2021-04-29 08:56:00', '2021-04-29 08:56:00', 1, '2021-04-29 16:57:56', 0),
(74, 'S', '', NULL, NULL, 'Praveen', 'Kumar', '', '9901959404', 'praveenprasadpillai@gmail.com', 'Building no 843 third floor', '10th crossroad , 16th main, btm2', 'Banglore', 'KA', 'IN', 560076, '$2y$04$ObVYWrllxcUgLFiCDJnQD.dVyz5RjaX.YFlpNY2eHFz/y8p8eUiI.', 'A', '2021-04-25 11:10:15', '2021-04-25 11:10:15', 1, '2021-04-25 11:28:20', 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` varchar(2048) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_type` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`, `user_type`) VALUES
(1, 'sikindra', 'sikindar8109895993@gmail.com', NULL, '$2y$10$0LLY7.6MxH6gcjwHwXq2TezOJIA0aDWLpsIOY/M.CgP3SZ0/88h7W', NULL, NULL, NULL, NULL, NULL, '2022-01-27 23:00:45', '2022-01-27 23:00:45', 'A'),
(2, 'vijay', 'admin1@admin.com', NULL, '$2y$10$psRBDSx.2wI7hs3PgrB6dO1hbBK5YzFJL3lejBrICfXOvvm4n2cPm', NULL, NULL, NULL, NULL, NULL, '2022-01-28 04:45:10', '2022-01-28 04:45:10', 'S'),
(3, 'sikindra dgf', 'sikindra@gmail.com', NULL, '$2y$10$IGUE4PkJsvV30IuQKmz2ue.Vc.0xXtuleDA40YUZB1WQVCbPjNV0e', NULL, NULL, NULL, NULL, NULL, '2022-02-11 03:18:50', '2022-02-11 03:18:50', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `workshops`
--

CREATE TABLE `workshops` (
  `id` int(50) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `batch` varchar(50) NOT NULL,
  `image` varchar(50) NOT NULL,
  `batch_from` date NOT NULL,
  `batch_to` date NOT NULL,
  `total_classes` varchar(50) NOT NULL,
  `course_days` varchar(50) NOT NULL,
  `course_time` varchar(50) NOT NULL,
  `amount` varchar(50) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `workshops`
--

INSERT INTO `workshops` (`id`, `subject`, `batch`, `image`, `batch_from`, `batch_to`, `total_classes`, `course_days`, `course_time`, `amount`, `updated_at`, `created_at`) VALUES
(1, 'Vedic Maths', 'Batch 1', 'WhatsApp_Image_2021-03-15_at_4_48_52_PM1.jpeg', '2021-05-17', '2021-05-21', '5', 'Monday - Friday', '3.00 PM to 4.00 PM', '199.00', '2022-02-04 05:19:40', '2022-02-04 05:20:03'),
(2, 'Vedic Maths 4th workshop', 'Batch 1', 'WhatsApp_Image_2021-03-15_at_4_48_52_PM1.jpeg', '2021-05-24', '2021-05-28', '5', 'Monday - Friday', '3.00 PM to 4.00 PM', '199.00', '2022-02-04 05:19:40', '2022-02-04 05:20:03');

-- --------------------------------------------------------

--
-- Table structure for table `workshop_payments`
--

CREATE TABLE `workshop_payments` (
  `id` int(11) NOT NULL,
  `order_id` varchar(20) NOT NULL,
  `workshop_id` int(10) NOT NULL,
  `amount` varchar(50) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `user_email` varchar(50) NOT NULL,
  `user_phone` varchar(20) NOT NULL,
  `status` varchar(50) NOT NULL,
  `date_created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `payment_date` varchar(50) NOT NULL,
  `razorpay_order_id` varchar(255) NOT NULL,
  `razorpay_payment_id` varchar(255) NOT NULL,
  `razorpay_signature` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `workshop_payments`
--

INSERT INTO `workshop_payments` (`id`, `order_id`, `workshop_id`, `amount`, `user_name`, `user_email`, `user_phone`, `status`, `date_created`, `payment_date`, `razorpay_order_id`, `razorpay_payment_id`, `razorpay_signature`) VALUES
(1, '893089142032', 1, '199.00', 'manali', 'manali.navavision@gmail.com', '7676319577', 'success', '2021-05-11 14:20:32', '2021-05-11 14:20:32', 'order_H9QR6qs984mMkl', 'pay_H9QRITs0pTK3fs', ''),
(2, '281648155440', 1, '199.00', 'Manali', 'manu.malgave28@gmail.com', '7676319577', ' ', '2021-05-11 15:54:40', '2021-05-11 15:54:40', '', '', ''),
(3, '306033104232', 2, '199.00', 'Ishan', 'manu.malgave28@gmail.com', '9538786188', ' ', '2021-05-19 10:42:32', '2021-05-19 10:42:32', '', '', ''),
(4, '594135134545', 2, '199.00', 'Ishan', 'manu.malgave28@gmail.com', '9538786188', ' ', '2021-05-19 13:45:45', '2021-05-19 13:45:45', '', '', ''),
(5, '314822154743', 2, '199.00', 'Manali', 'manu.malgave28@gmail.com', '9538786188', ' ', '2021-05-19 15:47:43', '2021-05-19 15:47:43', '', '', ''),
(6, '175351154808', 2, '199.00', 'Ishan', 'manu.malgave28@gmail.com', '9538786188', ' ', '2021-05-19 15:48:08', '2021-05-19 15:48:08', '', '', ''),
(7, '856747155237', 2, '199.00', 'Manali', 'manu.malgave28@gmail.com', '09538786188', ' ', '2021-05-19 15:52:37', '2021-05-19 15:52:37', '', '', ''),
(8, '220290054012', 2, '199.00', 'Manali', 'Manu.malgave28@gmail.com ', '7676319577', ' ', '2021-05-22 05:40:12', '2021-05-22 05:40:12', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`book_id`);

--
-- Indexes for table `book_levels`
--
ALTER TABLE `book_levels`
  ADD PRIMARY KEY (`bk_evel_id`);

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `chapters`
--
ALTER TABLE `chapters`
  ADD PRIMARY KEY (`chapter_id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_uses`
--
ALTER TABLE `contact_uses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `coupons`
--
ALTER TABLE `coupons`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `coursecarts`
--
ALTER TABLE `coursecarts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`course_id`);

--
-- Indexes for table `course_details`
--
ALTER TABLE `course_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `course_levels`
--
ALTER TABLE `course_levels`
  ADD PRIMARY KEY (`level_id`);

--
-- Indexes for table `course_orders`
--
ALTER TABLE `course_orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `discounts`
--
ALTER TABLE `discounts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fchange_phones`
--
ALTER TABLE `fchange_phones`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `features`
--
ALTER TABLE `features`
  ADD PRIMARY KEY (`feature_id`);

--
-- Indexes for table `franchises`
--
ALTER TABLE `franchises`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `joined_course`
--
ALTER TABLE `joined_course`
  ADD PRIMARY KEY (`join_id`);

--
-- Indexes for table `live_rq_user`
--
ALTER TABLE `live_rq_user`
  ADD PRIMARY KEY (`request_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `modes`
--
ALTER TABLE `modes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders_details`
--
ALTER TABLE `orders_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders_status`
--
ALTER TABLE `orders_status`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `schools`
--
ALTER TABLE `schools`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `students_email_unique` (`email`);

--
-- Indexes for table `school_users`
--
ALTER TABLE `school_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `students_email_unique` (`email`);

--
-- Indexes for table `subcategories`
--
ALTER TABLE `subcategories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `super_admins`
--
ALTER TABLE `super_admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `syllebuses`
--
ALTER TABLE `syllebuses`
  ADD PRIMARY KEY (`syllbus_id`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `workshops`
--
ALTER TABLE `workshops`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `workshop_payments`
--
ALTER TABLE `workshop_payments`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `book_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `book_levels`
--
ALTER TABLE `book_levels`
  MODIFY `bk_evel_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=150;

--
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `chapters`
--
ALTER TABLE `chapters`
  MODIFY `chapter_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `contact_uses`
--
ALTER TABLE `contact_uses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `coupons`
--
ALTER TABLE `coupons`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `coursecarts`
--
ALTER TABLE `coursecarts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `course_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `course_details`
--
ALTER TABLE `course_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `course_levels`
--
ALTER TABLE `course_levels`
  MODIFY `level_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=96;

--
-- AUTO_INCREMENT for table `course_orders`
--
ALTER TABLE `course_orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `discounts`
--
ALTER TABLE `discounts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `fchange_phones`
--
ALTER TABLE `fchange_phones`
  MODIFY `id` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `features`
--
ALTER TABLE `features`
  MODIFY `feature_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `franchises`
--
ALTER TABLE `franchises`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `joined_course`
--
ALTER TABLE `joined_course`
  MODIFY `join_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `live_rq_user`
--
ALTER TABLE `live_rq_user`
  MODIFY `request_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `modes`
--
ALTER TABLE `modes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `orders_details`
--
ALTER TABLE `orders_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `orders_status`
--
ALTER TABLE `orders_status`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `schools`
--
ALTER TABLE `schools`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `school_users`
--
ALTER TABLE `school_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `subcategories`
--
ALTER TABLE `subcategories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `super_admins`
--
ALTER TABLE `super_admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `syllebuses`
--
ALTER TABLE `syllebuses`
  MODIFY `syllbus_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=283;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `workshops`
--
ALTER TABLE `workshops`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `workshop_payments`
--
ALTER TABLE `workshop_payments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
