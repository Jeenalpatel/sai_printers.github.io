-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 08, 2020 at 02:21 PM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project2020`
--

-- --------------------------------------------------------

--
-- Table structure for table `about_content`
--

CREATE TABLE `about_content` (
  `id` int(11) NOT NULL,
  `image` varchar(500) NOT NULL,
  `content` varchar(500) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `about_content`
--

INSERT INTO `about_content` (`id`, `image`, `content`, `created_at`) VALUES
(1, '1583745394ban3.jpg', 'We\'re So Much More Than What We Print. Sai printers is shop for printing Visting card, invitation card, banner, biil book, strickers, letterhead, envelopes. We\'re not just enthusiastic printers of business forms and sales and marketing materials, we\'re dedicated graphic arts professionals who seek to use our creative skills to improve the results of your printed documents and sales and marketing materials.', '2020-03-09 09:16:34');

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(10, 'jinal', 'jinapatel245@gmail.com', NULL, '$2y$10$wIanwlhjVpG9xefdNUe3v.7jhjudQys0uzYpwAK31cq2PXenDvVXi', 'WBH8SdyLoriCUL0QBaU6UeSKpym8VezyZl65iD2SJXFEasNchV48OnxWmbEB', '2020-05-04 06:08:24', '2020-05-05 22:36:34'),
(11, 'dhruvi', 'saiprinters1020@gmail.com', NULL, '$2y$10$NKutD2TSr4bc7Njr3Yp/yuOiCod1.QWmx1z1YX/abVRA07X0g.vca', 'j9U68LXRm8M2K00Ay2xBmYyuazSvzt8ytxezxYtqWYfdxs0ViLUV0bvluXCo', '2020-05-04 23:03:24', '2020-05-07 22:59:29');

-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

CREATE TABLE `banner` (
  `id` int(11) NOT NULL,
  `image` varchar(500) DEFAULT NULL,
  `title` varchar(300) NOT NULL,
  `info` varchar(500) NOT NULL,
  `active` enum('active','inactive') NOT NULL DEFAULT 'active',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `banner`
--

INSERT INTO `banner` (`id`, `image`, `title`, `info`, `active`, `created_at`) VALUES
(1, '1583437479images1.jpg', 'Sai Printers', 'Better responce,Best service,the Promice of perfection.Better responce,Best service,Promice of perfection.Better responce,Best service,Promice of perfection.', 'active', '2020-03-05 19:44:40'),
(2, '1583437500img3.jpg', 'visiting card', 'all type of visiting card printing here', 'active', '2020-03-05 19:45:01'),
(3, '15834375707.jpg', 'invitation card', 'all type of invitation  printing here', 'active', '2020-03-05 19:46:10'),
(4, '158343901810.jpg', 'Bill Book', 'all type of business bill book printing here', 'active', '2020-03-05 20:10:18'),
(5, '1584770414ban6.jpg', 'later pad', 'all type of later pade printing here', 'active', '2020-03-21 06:00:15');

-- --------------------------------------------------------

--
-- Table structure for table `banner_client_detail`
--

CREATE TABLE `banner_client_detail` (
  `id` int(11) NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(90) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `banner_client_detail`
--

INSERT INTO `banner_client_detail` (`id`, `user_id`, `title`) VALUES
(1, 2, 'mklklk;'),
(2, 2, 'mklklk;'),
(3, 2, 'kkklk'),
(4, 2, 'jijjoj'),
(5, 2, 'mkkk'),
(6, 2, 'klmkljlkj'),
(7, 2, 'kkllkl'),
(8, 2, 'llk');

-- --------------------------------------------------------

--
-- Table structure for table `banner_price_list`
--

CREATE TABLE `banner_price_list` (
  `id` int(11) NOT NULL,
  `quality_id` int(11) NOT NULL,
  `quantity_id` int(11) NOT NULL,
  `price_per_banner` decimal(11,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `banner_price_list`
--

INSERT INTO `banner_price_list` (`id`, `quality_id`, `quantity_id`, `price_per_banner`) VALUES
(1, 1, 1, '15.00'),
(2, 1, 2, '15.00'),
(3, 1, 3, '15.00'),
(4, 1, 4, '15.00'),
(5, 1, 5, '15.00'),
(6, 1, 6, '15.00'),
(7, 1, 7, '15.00'),
(8, 1, 8, '15.00'),
(9, 1, 9, '15.00'),
(10, 1, 10, '15.00'),
(11, 2, 11, '25.00'),
(12, 2, 12, '25.00'),
(13, 2, 13, '25.00'),
(14, 2, 14, '25.00'),
(15, 2, 15, '25.00'),
(16, 2, 16, '25.00'),
(17, 2, 17, '25.00'),
(18, 2, 18, '25.00'),
(19, 2, 19, '25.00'),
(20, 2, 20, '25.00'),
(21, 3, 21, '25.00'),
(22, 3, 22, '25.00'),
(23, 3, 23, '25.00'),
(24, 3, 24, '25.00'),
(25, 3, 25, '25.00'),
(26, 3, 26, '25.00'),
(27, 3, 27, '25.00'),
(28, 3, 28, '25.00'),
(29, 3, 29, '25.00'),
(30, 3, 30, '25.00'),
(31, 4, 31, '40.00'),
(32, 4, 32, '40.00'),
(33, 4, 33, '40.00'),
(34, 4, 34, '40.00'),
(35, 4, 35, '40.00'),
(36, 4, 36, '40.00'),
(37, 4, 37, '40.00'),
(38, 4, 38, '40.00'),
(39, 4, 39, '40.00'),
(40, 4, 40, '40.00');

-- --------------------------------------------------------

--
-- Table structure for table `banner_quality`
--

CREATE TABLE `banner_quality` (
  `id` int(11) NOT NULL,
  `quality` varchar(56) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `banner_quality`
--

INSERT INTO `banner_quality` (`id`, `quality`) VALUES
(1, 'FLEX BANNER'),
(2, 'STAR BANNER'),
(3, 'VINAIL BANNER'),
(4, 'BRACKLIGHT');

-- --------------------------------------------------------

--
-- Table structure for table `banner_quantity`
--

CREATE TABLE `banner_quantity` (
  `id` int(11) NOT NULL,
  `quality_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `banner_quantity`
--

INSERT INTO `banner_quantity` (`id`, `quality_id`, `quantity`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 1, 3),
(4, 1, 4),
(5, 1, 5),
(6, 1, 6),
(7, 1, 7),
(8, 1, 8),
(9, 1, 9),
(10, 1, 10),
(11, 2, 1),
(12, 2, 2),
(13, 2, 3),
(14, 2, 4),
(15, 2, 5),
(16, 2, 6),
(17, 2, 7),
(18, 2, 8),
(19, 2, 9),
(20, 2, 10),
(21, 3, 1),
(22, 3, 2),
(23, 3, 3),
(24, 3, 4),
(25, 3, 5),
(26, 3, 6),
(27, 3, 7),
(28, 3, 8),
(29, 3, 9),
(30, 3, 10),
(31, 4, 1),
(32, 4, 2),
(33, 4, 3),
(34, 4, 4),
(35, 4, 5),
(36, 4, 6),
(37, 4, 7),
(38, 4, 8),
(39, 4, 9),
(40, 4, 10);

-- --------------------------------------------------------

--
-- Table structure for table `bb_client_detail`
--

CREATE TABLE `bb_client_detail` (
  `id` int(11) NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(67) NOT NULL,
  `gstno` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bb_client_detail`
--

INSERT INTO `bb_client_detail` (`id`, `user_id`, `title`, `gstno`) VALUES
(1, 2, 'k', '12'),
(2, 2, 'aaa', '1213'),
(3, 2, 'aaa', '1213132'),
(4, 2, 'jkjk', '262'),
(5, 2, 'visiting card', '123456'),
(6, 2, 'jkjkjlj', '236236232'),
(7, 2, 'jkjkjlj', '236236232'),
(8, 2, 'mklklo', '65656565'),
(9, 2, 'jkkjkj', '54545'),
(10, 2, 'jkjkjkj', '22323'),
(11, 2, 'ksoaslak', '56565656'),
(12, 2, 'mkmm', '262632'),
(13, 2, 'mkmm', '262632'),
(14, 2, 'mlllk', '22132'),
(15, 2, 'jkjkjk', '12345'),
(16, 2, 'ksjakjk', '2512151'),
(17, 2, 'mmmm', '2232'),
(18, 2, 'klklk', '111631'),
(19, 2, 'kjkjj', '22565'),
(20, 2, 'jkjkjkj``', '5656565'),
(21, 2, 'kklk', '56565656'),
(22, 2, 'jkjkj', '123456'),
(23, 2, 'jjkjkj', '123456'),
(24, 2, 'kjkjk', '21211'),
(25, 6, 'kljlkjj', '265656565'),
(26, 2, 'kjkljj', '132132121'),
(27, 2, 'jkljkjl', '565656');

-- --------------------------------------------------------

--
-- Table structure for table `billbook_price_list`
--

CREATE TABLE `billbook_price_list` (
  `id` int(11) NOT NULL,
  `size_id` int(11) NOT NULL,
  `quantity_id` int(11) NOT NULL,
  `price_per_book` decimal(11,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `billbook_price_list`
--

INSERT INTO `billbook_price_list` (`id`, `size_id`, `quantity_id`, `price_per_book`) VALUES
(1, 1, 2, '320.00'),
(4, 1, 1, '320.00'),
(5, 1, 3, '320.00'),
(6, 1, 4, '320.00'),
(7, 1, 5, '320.00'),
(8, 1, 6, '320.00'),
(9, 1, 7, '320.00'),
(10, 1, 8, '320.00'),
(11, 2, 9, '160.00'),
(12, 2, 10, '160.00'),
(13, 2, 11, '160.00'),
(14, 2, 13, '160.00'),
(15, 2, 14, '160.00');

-- --------------------------------------------------------

--
-- Table structure for table `billbook_quantity`
--

CREATE TABLE `billbook_quantity` (
  `id` int(11) NOT NULL,
  `size_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `billbook_quantity`
--

INSERT INTO `billbook_quantity` (`id`, `size_id`, `quantity`) VALUES
(1, 1, 10),
(2, 1, 20),
(3, 1, 30),
(4, 1, 40),
(5, 1, 50),
(6, 1, 60),
(7, 1, 70),
(8, 1, 80),
(9, 2, 20),
(10, 2, 40),
(11, 2, 60),
(12, 2, 80),
(13, 2, 100),
(14, 2, 120),
(15, 1, 1000);

-- --------------------------------------------------------

--
-- Table structure for table `billbook_size`
--

CREATE TABLE `billbook_size` (
  `id` int(11) NOT NULL,
  `size` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `billbook_size`
--

INSERT INTO `billbook_size` (`id`, `size`) VALUES
(1, '1/4'),
(2, '1/8');

-- --------------------------------------------------------

--
-- Table structure for table `b_image`
--

CREATE TABLE `b_image` (
  `id` int(11) NOT NULL,
  `a_image` varchar(500) DEFAULT NULL,
  `s_image` varchar(500) DEFAULT NULL,
  `w_image` varchar(500) DEFAULT NULL,
  `c_image` varchar(500) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `b_image`
--

INSERT INTO `b_image` (`id`, `a_image`, `s_image`, `w_image`, `c_image`, `created_at`) VALUES
(1, '1585826821ban1.jpg', '1584184491ban6.jpg', '15836636597.jpg', '1584184439img3.jpg', '2020-04-02 11:27:02');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `cate_id` int(11) NOT NULL,
  `subcate_id` int(11) NOT NULL,
  `image` varchar(700) NOT NULL,
  `b_image` varchar(500) DEFAULT NULL,
  `price` decimal(11,2) NOT NULL,
  `active` enum('active','inactive') NOT NULL DEFAULT 'active',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `cate_id`, `subcate_id`, `image`, `b_image`, `price`, `active`, `created_at`) VALUES
(27, 1, 2, '1588912418A One Jawellers-1F.jpg', '1588912419A One Jawellers-1B.jpg', '1.07', 'active', '2020-05-08 04:33:39'),
(28, 2, 7, '15889127965.jpg', NULL, '90.00', 'active', '2020-05-08 04:39:57'),
(29, 4, 8, '158891303010.jpg', NULL, '90.00', 'active', '2020-05-08 04:43:50'),
(30, 6, 9, '1588913092gopinath textile.jpg', NULL, '234.00', 'active', '2020-05-08 04:44:52'),
(31, 7, 12, '1588913306Dharti Solar.jpg', NULL, '234.00', 'active', '2020-05-08 04:48:26'),
(32, 8, 13, '1588913337Jigar.jpg', NULL, '234.00', 'active', '2020-05-08 04:48:57');

-- --------------------------------------------------------

--
-- Table structure for table `cate_name`
--

CREATE TABLE `cate_name` (
  `id` int(11) NOT NULL,
  `name` varchar(500) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cate_name`
--

INSERT INTO `cate_name` (`id`, `name`, `created_at`) VALUES
(1, 'visiting card', '2020-02-15 09:21:45'),
(2, 'Banner', '2020-02-15 09:21:51'),
(4, 'Bill Book', '2020-02-15 09:22:08'),
(6, 'envelops', '2020-03-05 18:57:59'),
(7, 'Handbill', '2020-04-14 05:44:32'),
(8, 'laterpad', '2020-04-14 12:00:15');

-- --------------------------------------------------------

--
-- Table structure for table `client_review`
--

CREATE TABLE `client_review` (
  `id` int(11) NOT NULL,
  `image` varchar(500) NOT NULL,
  `name` varchar(50) NOT NULL,
  `review` varchar(500) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `active` enum('active','inactive') NOT NULL DEFAULT 'active'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `client_review`
--

INSERT INTO `client_review` (`id`, `image`, `name`, `review`, `created_at`, `active`) VALUES
(1, '1585830768show_price_list.jpg', 'jinal', 'jinal patel jinal patel', '2020-04-12 07:05:45', 'active'),
(2, '1585836679show_price_list.jpg', 'anjali', 'anjalin patel anjali patel', '2020-04-02 14:23:53', 'active'),
(3, '1586668471about_second.jfif', 'Arya patel', 'hello there i am jinal and your website have best user interface and i have a amazing experince with your website and your service is one of the bestr service in the printing market.', '2020-04-12 05:14:32', 'active'),
(4, '1586675215show_price_list.jpg', 'Harsh shah', 'jsksakak ndksndkas skdmskdnsa dkasdnsan disndas dosdnjs dkd kdnas dks dnsdkndn kdjwk owdw mdkwdm kdm kmw kdmwkd mdmwkdwdwkdm kwmdkwmkmwdkmwdk wkdmwkmdkwmdw kdmwkdmwdmwkdm kdmwkd wkd wd', '2020-04-12 07:06:56', 'active'),
(5, '1588828492book_guide_hero_books.png', 'jinal patel', 'jlksjd ksjdkls woiejiwond ioejiw iodjewind ijde dijiejd irje feofj ffejfoe dcmqjwk fwkfb ef wejol wfoewn wqfowqn', '2020-05-07 05:14:53', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `contactus_detail`
--

CREATE TABLE `contactus_detail` (
  `id` int(11) NOT NULL,
  `f_name` varchar(56) DEFAULT NULL,
  `email` varchar(67) NOT NULL,
  `phone_no` varchar(13) NOT NULL,
  `msg` varchar(700) NOT NULL,
  `noti_read` enum('false','true') NOT NULL DEFAULT 'false',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contactus_detail`
--

INSERT INTO `contactus_detail` (`id`, `f_name`, `email`, `phone_no`, `msg`, `noti_read`, `created_at`) VALUES
(1, 'jinal', 'jinalparsiya2000@gmail.com', '2213122323232', 'jnknkn', 'true', '2020-05-06 12:46:27'),
(2, 'jinal', 'jinalparsiya2000@gmail.com', '2213122323232', 'jnknkn', 'false', '2020-05-06 12:35:35'),
(3, NULL, 'jinalparsiya2000@gmail.com', 'skalskal', 'jikjaksjakjska', 'false', '2020-05-06 12:35:35'),
(4, NULL, 'jinalparsiya2000@gmail.com', '232323232', 'klklklkl', 'false', '2020-05-06 12:35:35'),
(5, 'jinal', 'jinalparsiya2000@gmail.com', '2213122323232', 'kjajakjakajk', 'false', '2020-05-06 12:35:35'),
(6, 'kkjkjkj', 'jinalparsiya2000@gmail.com', '123456', 'jnjjkn', 'false', '2020-05-06 12:35:35'),
(7, 'klklkl', 'jinalparsiya2000@gmail.com', '12345', 'klakslkslaks', 'false', '2020-05-06 12:35:35'),
(8, 'jinal', 'kjkjkjk@gmail.com', '123456789', 'jasksjakjskajs', 'false', '2020-05-06 12:35:35'),
(9, 'jinal', 'jinalparsiya2000@gmail.com', '12345678', 'jksjdkjdsjkd', 'false', '2020-05-06 12:35:35'),
(10, 'jinal', 'jinalparsiya2000@gmail.com', '12345', 'jasja', 'false', '2020-05-06 12:35:35'),
(11, 'jinal', 'jinalparsiya2000@gmail.com', '12345678965', 'jkaskasjajs', 'false', '2020-05-06 12:35:35'),
(12, 'jinal', 'jinalparsiya2000@gmail.com', '9724850875', 'jiannanaKAN', 'false', '2020-05-06 12:35:35'),
(13, 'jinal', 'jinalparsiya2000@gmail.com', '9724850875', 'jiannanaKAN', 'false', '2020-05-06 12:35:35'),
(14, 'jinal', 'jinalparsiya2000@gmail.com', '9724850875', 'jiannanaKAN', 'false', '2020-05-06 12:35:35'),
(15, 'jinal', 'jinalparsiya2000@gmail.com', '9724850875', 'jiannanaKAN', 'false', '2020-05-06 12:35:35'),
(16, 'jinal', 'jinalparsiya2000@gmail.com', '9724850875', 'skjksjkjsk', 'false', '2020-05-06 12:35:35'),
(17, 'jinal', 'jinalparsiya2000@gmail.com', '9724850875', 'skjksjkjsk', 'false', '2020-05-06 12:35:35'),
(18, 'jinal', 'jinalparsiya2000@gmail.com', '9724850875', 'skjksjkjsk', 'false', '2020-05-06 12:35:35'),
(19, 'jinal', 'jinalparsiya2000@gmail.com', '9724850875', 'skjksjkjsk', 'false', '2020-05-06 12:35:35'),
(20, 'anjali', 'jinapatel245@gmail.com', '9898484521', 'hello how are you', 'false', '2020-05-06 12:35:35'),
(21, 'jinal', 'jinapatel245@gmail.com', '9852369856', 'how you can deliver your product to us', 'false', '2020-05-06 12:35:35'),
(22, 'anjali kantawala', 'jinapatel245@gmail.com', '9874563211', 'i want to know how you deliver the product to us', 'false', '2020-05-06 12:35:35'),
(23, 'anjali', 'jinalparsiya2000@gmail.com', '7896541230', 'jakajkajkjaka', 'false', '2020-05-06 12:35:35'),
(24, 'jinal', 'jinalparsiya2000@gmail.com', '9724850875', 'jskjk kskd wooeop mdksmd', 'false', '2020-05-06 12:35:35'),
(25, 'jinal', 'jinalparsiya2000@gmail.com', '9724850875', 'jskjk kskd wooeop mdksmd', 'false', '2020-05-06 12:35:35'),
(26, 'jinalpatel', 'jinalparsiya2000@gmail.com', '7412589632', 'hello sir jinalakahhsbsdhsdjdsdvshhdv', 'false', '2020-05-06 12:35:35'),
(27, 'parv bhatt', 'jinalparsiya2000@gmail.com', '9785463215', 'hello sit jkjskdsjdudjsdnsndsdsbcbsbcshch', 'false', '2020-05-06 12:35:35'),
(28, 'parv bhatt', 'jinalparsiya2000@gmail.com', '9785463215', 'hello sit jkjskdsjdudjsdnsndsdsbcbsbcshch', 'false', '2020-05-06 12:35:35'),
(29, 'prav bhatt', 'jinalparsiya2000@gmail.com', '9874563214', 'sjiksjdjsd ushdsdshd shdsuhd dnjsad abda', 'false', '2020-05-06 12:35:35'),
(30, 'stuti', 'jinalparsiya2000@gmail.com', '9874563210', 'jskj sjksjdks sjdksjdks njndjas andjada djnda djad adjabd a', 'false', '2020-05-06 12:35:35'),
(31, 'jinal', 'jinalparsiya2000@gmail.com', '987456321', 'samksaksmkajskajs', 'false', '2020-05-06 12:35:35'),
(32, 'jinal', 'jinapatel245@gmail.com', '741258963', 'akakkl skajskas ajsaksj aoskas kska', 'false', '2020-05-06 12:35:35'),
(33, 'jinal', 'jinalparsiya2000@gmail.com', '7412589632', 'kokkokokok', 'false', '2020-05-06 12:35:35');

-- --------------------------------------------------------

--
-- Table structure for table `envelop_client_detail`
--

CREATE TABLE `envelop_client_detail` (
  `id` int(11) NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(67) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `envelop_client_detail`
--

INSERT INTO `envelop_client_detail` (`id`, `user_id`, `name`) VALUES
(1, 2, 'qaaaa'),
(2, 2, 'qaaaa'),
(3, 2, 'aaaa'),
(4, 2, 'aaaa'),
(5, 2, 'jinal'),
(6, 2, 'klklklkllk'),
(7, 2, 'kjkjkjk'),
(8, 2, 'klklkk'),
(9, 2, 'klklklk'),
(10, 2, 'lllkl'),
(11, 2, 'klmkll');

-- --------------------------------------------------------

--
-- Table structure for table `envelop_price_list`
--

CREATE TABLE `envelop_price_list` (
  `id` int(11) NOT NULL,
  `quality_id` int(11) NOT NULL,
  `quantity_id` int(11) NOT NULL,
  `price_per_envelop` decimal(11,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `envelop_price_list`
--

INSERT INTO `envelop_price_list` (`id`, `quality_id`, `quantity_id`, `price_per_envelop`) VALUES
(1, 1, 2, '2.00'),
(3, 1, 3, '2.00'),
(4, 1, 4, '2.00'),
(5, 1, 5, '2.00'),
(6, 1, 1, '2.00'),
(7, 2, 6, '1.75'),
(8, 2, 7, '1.75'),
(9, 2, 8, '1.75'),
(10, 2, 9, '1.75'),
(11, 2, 10, '1.75');

-- --------------------------------------------------------

--
-- Table structure for table `envelop_quality`
--

CREATE TABLE `envelop_quality` (
  `id` int(11) NOT NULL,
  `quality` varchar(56) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `envelop_quality`
--

INSERT INTO `envelop_quality` (`id`, `quality`) VALUES
(1, '90 GSM ART'),
(2, '100 GSM');

-- --------------------------------------------------------

--
-- Table structure for table `envelop_quantity`
--

CREATE TABLE `envelop_quantity` (
  `id` int(11) NOT NULL,
  `quality_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `envelop_quantity`
--

INSERT INTO `envelop_quantity` (`id`, `quality_id`, `quantity`) VALUES
(1, 1, 1000),
(2, 1, 2000),
(3, 1, 3000),
(4, 1, 4000),
(5, 1, 5000),
(6, 2, 1000),
(7, 2, 2000),
(8, 2, 3000),
(9, 2, 4000),
(10, 2, 5000);

-- --------------------------------------------------------

--
-- Table structure for table `handbill_client_detail`
--

CREATE TABLE `handbill_client_detail` (
  `id` int(11) NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(67) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `handbill_client_detail`
--

INSERT INTO `handbill_client_detail` (`id`, `user_id`, `title`) VALUES
(1, 2, 'jkjkjk'),
(2, 2, 'jkjkjk'),
(3, 2, 'kklkl'),
(4, 2, 'kklkl');

-- --------------------------------------------------------

--
-- Table structure for table `handbill_price_list`
--

CREATE TABLE `handbill_price_list` (
  `id` int(11) NOT NULL,
  `size_id` int(11) NOT NULL,
  `quantity_id` int(11) NOT NULL,
  `side_id` int(11) NOT NULL,
  `price_per_handbill` decimal(11,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `handbill_price_list`
--

INSERT INTO `handbill_price_list` (`id`, `size_id`, `quantity_id`, `side_id`, `price_per_handbill`) VALUES
(1, 1, 1, 1, '1.25'),
(2, 1, 1, 2, '1.50'),
(3, 1, 3, 3, '1.10'),
(4, 1, 3, 4, '1.25'),
(5, 1, 4, 5, '1.10'),
(6, 1, 4, 6, '1.25'),
(7, 2, 5, 7, '0.60'),
(8, 2, 5, 8, '0.70'),
(10, 2, 7, 10, '0.50'),
(11, 2, 7, 9, '0.60');

-- --------------------------------------------------------

--
-- Table structure for table `handbill_quantity`
--

CREATE TABLE `handbill_quantity` (
  `id` int(11) NOT NULL,
  `size_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `handbill_quantity`
--

INSERT INTO `handbill_quantity` (`id`, `size_id`, `quantity`) VALUES
(1, 1, 4000),
(3, 1, 8000),
(4, 1, 12000),
(5, 2, 8000),
(7, 2, 16000);

-- --------------------------------------------------------

--
-- Table structure for table `handbill_side`
--

CREATE TABLE `handbill_side` (
  `id` int(11) NOT NULL,
  `size_id` int(11) NOT NULL,
  `quantity_id` int(11) NOT NULL,
  `side` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `handbill_side`
--

INSERT INTO `handbill_side` (`id`, `size_id`, `quantity_id`, `side`) VALUES
(1, 1, 1, 'one'),
(2, 1, 1, 'two'),
(3, 1, 3, 'one'),
(4, 1, 3, 'two'),
(5, 1, 4, 'one'),
(6, 1, 4, 'two'),
(7, 2, 5, 'one'),
(8, 2, 5, 'two'),
(9, 2, 7, 'two'),
(10, 2, 7, 'one');

-- --------------------------------------------------------

--
-- Table structure for table `handbill_size`
--

CREATE TABLE `handbill_size` (
  `id` int(11) NOT NULL,
  `size` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `handbill_size`
--

INSERT INTO `handbill_size` (`id`, `size`) VALUES
(1, '1/4'),
(2, '1/8');

-- --------------------------------------------------------

--
-- Table structure for table `laterpad_client_detail`
--

CREATE TABLE `laterpad_client_detail` (
  `id` int(11) NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `laterpad_client_detail`
--

INSERT INTO `laterpad_client_detail` (`id`, `user_id`, `title`) VALUES
(1, 2, 'kklklk'),
(2, 2, 'kklklk'),
(3, 2, 'nkjkjkj');

-- --------------------------------------------------------

--
-- Table structure for table `laterpad_price_list`
--

CREATE TABLE `laterpad_price_list` (
  `id` int(11) NOT NULL,
  `size_id` int(11) NOT NULL,
  `quantity_id` int(11) NOT NULL,
  `price_per_laterpad` decimal(11,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `laterpad_price_list`
--

INSERT INTO `laterpad_price_list` (`id`, `size_id`, `quantity_id`, `price_per_laterpad`) VALUES
(1, 1, 1, '180.00'),
(2, 1, 2, '170.00'),
(3, 1, 3, '150.00'),
(4, 2, 4, '115.00'),
(5, 2, 5, '110.00'),
(6, 3, 6, '200.00'),
(7, 3, 7, '180.00'),
(8, 3, 8, '160.00');

-- --------------------------------------------------------

--
-- Table structure for table `laterpad_quantity`
--

CREATE TABLE `laterpad_quantity` (
  `id` int(11) NOT NULL,
  `size_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `laterpad_quantity`
--

INSERT INTO `laterpad_quantity` (`id`, `size_id`, `quantity`) VALUES
(1, 1, 10),
(2, 1, 20),
(3, 1, 40),
(4, 2, 20),
(5, 2, 40),
(6, 3, 5),
(7, 3, 10),
(8, 3, 25);

-- --------------------------------------------------------

--
-- Table structure for table `laterpad_size`
--

CREATE TABLE `laterpad_size` (
  `id` int(11) NOT NULL,
  `size` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `laterpad_size`
--

INSERT INTO `laterpad_size` (`id`, `size`) VALUES
(1, '1/4'),
(2, '1/8'),
(3, '1/5');

-- --------------------------------------------------------

--
-- Table structure for table `logo`
--

CREATE TABLE `logo` (
  `id` int(10) NOT NULL,
  `image` varchar(500) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `logo`
--

INSERT INTO `logo` (`id`, `image`, `created_at`) VALUES
(1, '1584942707logo_blue.svg', '2020-03-23 05:51:48');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('admin@gmail.com', '$2y$10$8x/VzwgI/ye01MCd8Oet.u1aV4QY0qACOlD3OvSI3Jb3kflmOP74W', '2020-05-04 05:57:44');

-- --------------------------------------------------------

--
-- Table structure for table `payinfo`
--

CREATE TABLE `payinfo` (
  `id` int(10) NOT NULL,
  `uid` bigint(20) UNSIGNED NOT NULL,
  `status` text,
  `key` text,
  `hash` text,
  `txnid` text,
  `amount` text,
  `firstname` text,
  `lastname` text,
  `email` text,
  `contact` text,
  `productinfo` text,
  `surl` text,
  `furl` text,
  `service_provider` text,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payinfo`
--

INSERT INTO `payinfo` (`id`, `uid`, `status`, `key`, `hash`, `txnid`, `amount`, `firstname`, `lastname`, `email`, `contact`, `productinfo`, `surl`, `furl`, `service_provider`, `created_at`) VALUES
(1, 2, 'success', 'gtKFFx', '80764de9682ff1e339699da27c5b0be0a7c5e7bd49b036253d588d3691182037da9cf2beccae2da061eb991350a991996663587907d23362ef810e56a753cf04', '00f282fb80bf6b725ab8', '22550.00', NULL, NULL, 'jinalparsiya2000@gmail.com', NULL, NULL, 'http://localhost/laravel/projects/society_new/payment_view_sucess', 'http://localhost/laravel/projects/society_new/payment_view_failure', 'PayuMoney', '2020-04-19 16:01:57');

-- --------------------------------------------------------

--
-- Table structure for table `portfolio`
--

CREATE TABLE `portfolio` (
  `id` int(11) NOT NULL,
  `cate_id` int(11) NOT NULL,
  `subcate_id` int(11) NOT NULL,
  `image` varchar(700) NOT NULL,
  `price` text NOT NULL,
  `active` enum('active','inactive') NOT NULL DEFAULT 'active',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `portfolio`
--

INSERT INTO `portfolio` (`id`, `cate_id`, `subcate_id`, `image`, `price`, `active`, `created_at`) VALUES
(1, 1, 1, '158343443922513.jpg', '234', 'active', '2020-03-05 18:53:59'),
(2, 4, 8, '15834345663.jpg', '90', 'active', '2020-03-05 18:56:06'),
(3, 6, 9, '15834347411.jpg', '90', 'active', '2020-03-05 18:59:02'),
(4, 1, 1, '15834348192.jpg', '200', 'active', '2020-03-05 19:00:19'),
(5, 1, 2, '158343493918.jpg', '234', 'active', '2020-03-05 19:02:20'),
(6, 2, 11, '1583435043certificate1.jpg', '123', 'active', '2020-03-05 19:04:04');

-- --------------------------------------------------------

--
-- Table structure for table `quality`
--

CREATE TABLE `quality` (
  `id` int(11) NOT NULL,
  `q_name` varchar(56) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `quality`
--

INSERT INTO `quality` (`id`, `q_name`) VALUES
(1, 'TARABEL visiting card'),
(2, 'N-T visiting card'),
(3, 'MATTE visiting card'),
(4, 'MATTE_DUI_CUT visiting card'),
(5, 'MATTE 2S\'D UV visiting card');

-- --------------------------------------------------------

--
-- Table structure for table `quantity1`
--

CREATE TABLE `quantity1` (
  `id` int(11) NOT NULL,
  `quality_id` int(11) NOT NULL,
  `q_value` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `quantity1`
--

INSERT INTO `quantity1` (`id`, `quality_id`, `q_value`) VALUES
(1, 1, 800),
(2, 1, 1000),
(3, 1, 1500),
(4, 1, 2000),
(5, 1, 3000),
(6, 2, 800),
(7, 2, 1000),
(8, 2, 1500),
(9, 2, 2000),
(10, 2, 3000),
(11, 3, 800),
(12, 3, 1000),
(13, 3, 1500),
(14, 3, 2000),
(15, 3, 3000),
(16, 4, 800),
(18, 4, 1500),
(19, 4, 2000),
(20, 4, 3000),
(21, 5, 800),
(22, 5, 1000),
(23, 5, 1500),
(24, 5, 2000),
(25, 5, 3000),
(26, 4, 1000),
(27, 1, 10);

-- --------------------------------------------------------

--
-- Table structure for table `subcate_name`
--

CREATE TABLE `subcate_name` (
  `id` int(11) NOT NULL,
  `cate_id` int(11) NOT NULL,
  `sub_name` varchar(90) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subcate_name`
--

INSERT INTO `subcate_name` (`id`, `cate_id`, `sub_name`, `created_at`) VALUES
(1, 1, 'mate visiting card', '2020-02-15 09:24:22'),
(2, 1, 'rounded visiting card', '2020-02-15 09:24:39'),
(3, 2, 'black banner', '2020-02-15 09:24:53'),
(5, 1, 'corner visitingcard', '2020-02-18 07:59:47'),
(6, 1, 'visitttttttt4', '2020-02-20 09:45:33'),
(7, 2, 'bannerrrrrrr', '2020-02-20 09:45:33'),
(8, 4, 'layout_1', '2020-03-05 18:55:39'),
(9, 6, 'designer', '2020-03-05 18:58:23'),
(10, 2, 'menu_card', '2020-03-05 19:00:45'),
(11, 2, 'certificate', '2020-03-05 19:03:17'),
(12, 7, 'abc', '2020-04-14 05:45:36'),
(13, 8, '123', '2020-04-14 12:00:29');

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
  `mo_no` varchar(12) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `mo_no`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'jinal', 'jinalparsiya2000@gmial.com', NULL, '$2y$10$1BcOz9HcWSpTFSmzxl5sauAmmHXui.aMNpkRCddWnfjlOrwKyvr9q', '', NULL, '2019-12-24 01:33:05', '2019-12-24 01:33:05'),
(2, 'jinal', 'jinalparsiya2000@gmail.com', NULL, '$2y$10$7DmXPPjDJX/kh/3vfO/1ju/W1ggViIJj5pWgqeOFj9bilodXKISKy', '', '16utLeSd5TNWX6Sx4FTBcpYpxrTh87SRNYaDV357tV9vT9wP7X0P42ByUZmb', '2019-12-27 02:15:22', '2020-05-06 07:25:16'),
(3, 'user', 'user@gmail.com', NULL, '$2y$10$kY/U33SdloMhi0p3zqbAWerWwkIX2XDpU.w95i4xvJayKkFsoLRZS', '', NULL, '2020-03-13 22:37:52', '2020-03-13 22:37:52'),
(4, 'jeenal', 'jeenal@gmail.com', NULL, '$2y$10$qLh83nsgySd3jWlSJWLqtuvXrSHQtSRKHgjXQ6wc5Yout9XTvyy/C', '', NULL, '2020-03-13 22:42:53', '2020-03-13 22:42:53'),
(5, 'jinal', 'jinal@gmail.com', NULL, '$2y$10$WV3zHLYW7Fu2fABLrWbll.moW3IjDyk0zdA.ZkKJTBn79QUL799fG', '', NULL, '2020-03-18 09:10:43', '2020-03-18 09:10:43'),
(6, 'admin', 'admin@gmail.com', NULL, '$2y$10$VlaQ3WivIeKfrf33zsi/OunAscRPGnKFG.db/pe37gpEVdbVcHnzK', '1234567897', NULL, '2020-05-02 22:50:39', '2020-05-02 22:50:39'),
(7, 'anjali', 'anjali@gmail.com', NULL, '$2y$10$Nkzyf6jHkxXJxTDDhYqOdOWkabVz4QFcw9EN385GvaUlC5guvv73.', '7412589632', NULL, '2020-05-02 23:22:11', '2020-05-02 23:22:11'),
(8, 'anjali', 'anjaljjjjji@gmail.com', NULL, '$2y$10$69Tc1GAZ7v2kxvZEuyLRueMupr5CKfOpLWNLPOPcMJp5ZofUBWDAq', '7418529632', NULL, '2020-05-02 23:23:23', '2020-05-02 23:23:23');

-- --------------------------------------------------------

--
-- Table structure for table `vcard_price_list`
--

CREATE TABLE `vcard_price_list` (
  `id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `quality` int(11) NOT NULL,
  `side` int(11) NOT NULL,
  `price_per_card` decimal(11,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vcard_price_list`
--

INSERT INTO `vcard_price_list` (`id`, `quantity`, `quality`, `side`, `price_per_card`) VALUES
(1, 1, 1, 1, '0.50'),
(2, 1, 1, 2, '0.65'),
(3, 2, 1, 3, '0.35'),
(4, 2, 1, 4, '0.50'),
(5, 3, 1, 5, '0.50'),
(6, 3, 1, 6, '0.70'),
(7, 4, 1, 7, '0.35'),
(8, 4, 1, 8, '0.50'),
(9, 5, 1, 9, '0.35'),
(10, 5, 1, 10, '0.50'),
(11, 6, 2, 11, '0.80'),
(12, 6, 2, 12, '1.04'),
(13, 7, 2, 13, '0.60'),
(14, 7, 2, 14, '0.80'),
(15, 8, 2, 15, '0.90'),
(16, 8, 2, 16, '1.10'),
(17, 9, 2, 17, '0.60'),
(18, 9, 2, 18, '0.80'),
(19, 10, 2, 19, '0.60'),
(20, 10, 2, 20, '0.80'),
(21, 11, 3, 21, '0.80'),
(22, 12, 3, 22, '0.60'),
(23, 13, 3, 23, '0.90'),
(24, 14, 3, 24, '0.60'),
(25, 15, 3, 25, '0.60'),
(26, 16, 4, 26, '1.80'),
(27, 26, 4, 27, '1.40'),
(28, 18, 4, 28, '1.90'),
(29, 19, 4, 29, '1.40'),
(30, 20, 4, 30, '1.40'),
(31, 21, 5, 31, '1.30'),
(32, 22, 5, 32, '1.00'),
(33, 23, 5, 33, '1.35'),
(34, 24, 5, 34, '1.00'),
(35, 25, 5, 35, '1.00');

-- --------------------------------------------------------

--
-- Table structure for table `vcard_side`
--

CREATE TABLE `vcard_side` (
  `id` int(11) NOT NULL,
  `quality_id` int(11) NOT NULL,
  `quantity_id` int(11) NOT NULL,
  `side` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vcard_side`
--

INSERT INTO `vcard_side` (`id`, `quality_id`, `quantity_id`, `side`) VALUES
(1, 1, 1, 'one'),
(2, 1, 1, 'two'),
(3, 1, 2, 'one'),
(4, 1, 2, 'two'),
(5, 1, 3, 'one'),
(6, 1, 3, 'two'),
(7, 1, 4, 'one'),
(8, 1, 4, 'two'),
(9, 1, 5, 'one'),
(10, 1, 5, 'two'),
(11, 2, 6, 'one'),
(12, 2, 6, 'two'),
(13, 2, 7, 'one'),
(14, 2, 7, 'two'),
(15, 2, 8, 'one'),
(16, 2, 8, 'two'),
(17, 2, 9, 'one'),
(18, 2, 9, 'two'),
(19, 2, 10, 'one'),
(20, 2, 10, 'two'),
(21, 3, 11, 'one'),
(22, 3, 12, 'one'),
(23, 3, 13, 'one'),
(24, 3, 14, 'one'),
(25, 3, 15, 'one'),
(26, 4, 16, 'two'),
(27, 4, 26, 'two'),
(28, 4, 18, 'two'),
(29, 4, 19, 'two'),
(30, 4, 20, 'two'),
(31, 5, 21, 'two'),
(32, 5, 22, 'two'),
(33, 5, 23, 'two'),
(34, 5, 24, 'two'),
(35, 5, 25, 'two');

-- --------------------------------------------------------

--
-- Table structure for table `vc_client_detail`
--

CREATE TABLE `vc_client_detail` (
  `id` int(11) NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `f_title` varchar(67) NOT NULL,
  `s_title` varchar(67) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vc_client_detail`
--

INSERT INTO `vc_client_detail` (`id`, `user_id`, `f_title`, `s_title`) VALUES
(1, 2, 'hhkh', 'kjljm'),
(2, 2, 'hhkh', 'kjljm'),
(3, 2, 'hhkh', 'kjljm'),
(4, 2, 'bjhj', 'fgh'),
(5, 2, 'hhkh', 'kjljm'),
(6, 2, 'hhkh', 'fgh'),
(7, 2, 'jjkjkjk', 'hjhjhh'),
(8, 2, 'jkkjkj', 'jkkj'),
(9, 2, 'klklklk', '113131'),
(10, 2, 'kmkjkj', 'jkjkjk'),
(11, 2, 'jkjkj', 'jkjkj'),
(12, 2, 'jkjkkj', '45454545'),
(13, 2, 'lll;k', '2626321'),
(14, 2, 'klklkl', 'klklklk'),
(15, 2, 'kjkjjkj', 'lklklk'),
(16, 2, 'jknjknkjn', 'nknkn'),
(17, 2, 'mkmlkkl', 'mkjlkj');

-- --------------------------------------------------------

--
-- Table structure for table `works`
--

CREATE TABLE `works` (
  `id` int(45) NOT NULL,
  `image` varchar(500) DEFAULT NULL,
  `title` varchar(67) DEFAULT NULL,
  `active` enum('active','inactive') NOT NULL DEFAULT 'active',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `works`
--

INSERT INTO `works` (`id`, `image`, `title`, `active`, `created_at`) VALUES
(1, '1579329057img4v.jpg', 'visiting card', 'active', '2020-01-18 06:30:58'),
(2, '1579329076img6.jpg', 'banner', 'active', '2020-01-18 06:31:16'),
(3, '15793291103.jpg', 'bill book', 'active', '2020-01-18 06:31:50'),
(4, '1579330317certificate1.jpg', 'menu', 'inactive', '2020-04-14 12:01:09'),
(5, '157933034618.jpg', 'vis', 'active', '2020-01-18 06:52:26'),
(6, '15793304243.jpg', 'banner', 'active', '2020-01-18 06:53:44'),
(7, '158345191112.jpg', 'later pad', 'active', '2020-03-05 23:45:12');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about_content`
--
ALTER TABLE `about_content`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banner_client_detail`
--
ALTER TABLE `banner_client_detail`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `banner_price_list`
--
ALTER TABLE `banner_price_list`
  ADD PRIMARY KEY (`id`),
  ADD KEY `quality_id` (`quality_id`),
  ADD KEY `quantity_id` (`quantity_id`);

--
-- Indexes for table `banner_quality`
--
ALTER TABLE `banner_quality`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banner_quantity`
--
ALTER TABLE `banner_quantity`
  ADD PRIMARY KEY (`id`),
  ADD KEY `quality_id` (`quality_id`);

--
-- Indexes for table `bb_client_detail`
--
ALTER TABLE `bb_client_detail`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `billbook_price_list`
--
ALTER TABLE `billbook_price_list`
  ADD PRIMARY KEY (`id`),
  ADD KEY `size_id` (`size_id`),
  ADD KEY `quantity_id` (`quantity_id`);

--
-- Indexes for table `billbook_quantity`
--
ALTER TABLE `billbook_quantity`
  ADD PRIMARY KEY (`id`),
  ADD KEY `size_id` (`size_id`);

--
-- Indexes for table `billbook_size`
--
ALTER TABLE `billbook_size`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `b_image`
--
ALTER TABLE `b_image`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cate_id` (`cate_id`),
  ADD KEY `subcate_id` (`subcate_id`);

--
-- Indexes for table `cate_name`
--
ALTER TABLE `cate_name`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `client_review`
--
ALTER TABLE `client_review`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contactus_detail`
--
ALTER TABLE `contactus_detail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `envelop_client_detail`
--
ALTER TABLE `envelop_client_detail`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `envelop_price_list`
--
ALTER TABLE `envelop_price_list`
  ADD PRIMARY KEY (`id`),
  ADD KEY `quality_id` (`quality_id`),
  ADD KEY `quantity_id` (`quantity_id`);

--
-- Indexes for table `envelop_quality`
--
ALTER TABLE `envelop_quality`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `envelop_quantity`
--
ALTER TABLE `envelop_quantity`
  ADD PRIMARY KEY (`id`),
  ADD KEY `quality_id` (`quality_id`);

--
-- Indexes for table `handbill_client_detail`
--
ALTER TABLE `handbill_client_detail`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `handbill_price_list`
--
ALTER TABLE `handbill_price_list`
  ADD PRIMARY KEY (`id`),
  ADD KEY `quantity_id` (`quantity_id`),
  ADD KEY `side_id` (`side_id`),
  ADD KEY `size_id` (`size_id`);

--
-- Indexes for table `handbill_quantity`
--
ALTER TABLE `handbill_quantity`
  ADD PRIMARY KEY (`id`),
  ADD KEY `size_id` (`size_id`);

--
-- Indexes for table `handbill_side`
--
ALTER TABLE `handbill_side`
  ADD PRIMARY KEY (`id`),
  ADD KEY `size_id` (`size_id`),
  ADD KEY `quantity_id` (`quantity_id`);

--
-- Indexes for table `handbill_size`
--
ALTER TABLE `handbill_size`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `laterpad_client_detail`
--
ALTER TABLE `laterpad_client_detail`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `laterpad_price_list`
--
ALTER TABLE `laterpad_price_list`
  ADD PRIMARY KEY (`id`),
  ADD KEY `quantity_id` (`quantity_id`),
  ADD KEY `size_id` (`size_id`);

--
-- Indexes for table `laterpad_quantity`
--
ALTER TABLE `laterpad_quantity`
  ADD PRIMARY KEY (`id`),
  ADD KEY `size_id` (`size_id`);

--
-- Indexes for table `laterpad_size`
--
ALTER TABLE `laterpad_size`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `logo`
--
ALTER TABLE `logo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payinfo`
--
ALTER TABLE `payinfo`
  ADD PRIMARY KEY (`id`),
  ADD KEY `uid` (`uid`);

--
-- Indexes for table `portfolio`
--
ALTER TABLE `portfolio`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cate_id` (`cate_id`),
  ADD KEY `subcate_id` (`subcate_id`);

--
-- Indexes for table `quality`
--
ALTER TABLE `quality`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `quantity1`
--
ALTER TABLE `quantity1`
  ADD PRIMARY KEY (`id`),
  ADD KEY `quality_id` (`quality_id`);

--
-- Indexes for table `subcate_name`
--
ALTER TABLE `subcate_name`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cate_id` (`cate_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vcard_price_list`
--
ALTER TABLE `vcard_price_list`
  ADD PRIMARY KEY (`id`),
  ADD KEY `quality` (`quality`),
  ADD KEY `vcard_price_list_ibfk_3` (`side`),
  ADD KEY `vcard_price_list_ibfk_4` (`quantity`);

--
-- Indexes for table `vcard_side`
--
ALTER TABLE `vcard_side`
  ADD PRIMARY KEY (`id`),
  ADD KEY `quality_id` (`quality_id`),
  ADD KEY `quantity_id` (`quantity_id`);

--
-- Indexes for table `vc_client_detail`
--
ALTER TABLE `vc_client_detail`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `works`
--
ALTER TABLE `works`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about_content`
--
ALTER TABLE `about_content`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `banner`
--
ALTER TABLE `banner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `banner_client_detail`
--
ALTER TABLE `banner_client_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `banner_price_list`
--
ALTER TABLE `banner_price_list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `banner_quality`
--
ALTER TABLE `banner_quality`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `banner_quantity`
--
ALTER TABLE `banner_quantity`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `bb_client_detail`
--
ALTER TABLE `bb_client_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `billbook_price_list`
--
ALTER TABLE `billbook_price_list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `billbook_quantity`
--
ALTER TABLE `billbook_quantity`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `billbook_size`
--
ALTER TABLE `billbook_size`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `b_image`
--
ALTER TABLE `b_image`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `cate_name`
--
ALTER TABLE `cate_name`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `client_review`
--
ALTER TABLE `client_review`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `contactus_detail`
--
ALTER TABLE `contactus_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `envelop_client_detail`
--
ALTER TABLE `envelop_client_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `envelop_price_list`
--
ALTER TABLE `envelop_price_list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `envelop_quality`
--
ALTER TABLE `envelop_quality`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `envelop_quantity`
--
ALTER TABLE `envelop_quantity`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `handbill_client_detail`
--
ALTER TABLE `handbill_client_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `handbill_price_list`
--
ALTER TABLE `handbill_price_list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `handbill_quantity`
--
ALTER TABLE `handbill_quantity`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `handbill_side`
--
ALTER TABLE `handbill_side`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `handbill_size`
--
ALTER TABLE `handbill_size`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `laterpad_client_detail`
--
ALTER TABLE `laterpad_client_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `laterpad_price_list`
--
ALTER TABLE `laterpad_price_list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `laterpad_quantity`
--
ALTER TABLE `laterpad_quantity`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `laterpad_size`
--
ALTER TABLE `laterpad_size`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `logo`
--
ALTER TABLE `logo`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `payinfo`
--
ALTER TABLE `payinfo`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `portfolio`
--
ALTER TABLE `portfolio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `quality`
--
ALTER TABLE `quality`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `quantity1`
--
ALTER TABLE `quantity1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `subcate_name`
--
ALTER TABLE `subcate_name`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `vcard_price_list`
--
ALTER TABLE `vcard_price_list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `vcard_side`
--
ALTER TABLE `vcard_side`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `vc_client_detail`
--
ALTER TABLE `vc_client_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `works`
--
ALTER TABLE `works`
  MODIFY `id` int(45) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `banner_client_detail`
--
ALTER TABLE `banner_client_detail`
  ADD CONSTRAINT `banner_client_detail_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `banner_price_list`
--
ALTER TABLE `banner_price_list`
  ADD CONSTRAINT `banner_price_list_ibfk_1` FOREIGN KEY (`quality_id`) REFERENCES `banner_quality` (`id`),
  ADD CONSTRAINT `banner_price_list_ibfk_2` FOREIGN KEY (`quantity_id`) REFERENCES `banner_quantity` (`id`);

--
-- Constraints for table `banner_quantity`
--
ALTER TABLE `banner_quantity`
  ADD CONSTRAINT `banner_quantity_ibfk_1` FOREIGN KEY (`quality_id`) REFERENCES `banner_quality` (`id`);

--
-- Constraints for table `bb_client_detail`
--
ALTER TABLE `bb_client_detail`
  ADD CONSTRAINT `bb_client_detail_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `billbook_price_list`
--
ALTER TABLE `billbook_price_list`
  ADD CONSTRAINT `billbook_price_list_ibfk_1` FOREIGN KEY (`size_id`) REFERENCES `billbook_size` (`id`),
  ADD CONSTRAINT `billbook_price_list_ibfk_2` FOREIGN KEY (`quantity_id`) REFERENCES `billbook_quantity` (`id`);

--
-- Constraints for table `billbook_quantity`
--
ALTER TABLE `billbook_quantity`
  ADD CONSTRAINT `billbook_quantity_ibfk_1` FOREIGN KEY (`size_id`) REFERENCES `billbook_size` (`id`);

--
-- Constraints for table `category`
--
ALTER TABLE `category`
  ADD CONSTRAINT `category_ibfk_1` FOREIGN KEY (`subcate_id`) REFERENCES `subcate_name` (`id`);

--
-- Constraints for table `envelop_client_detail`
--
ALTER TABLE `envelop_client_detail`
  ADD CONSTRAINT `envelop_client_detail_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `envelop_price_list`
--
ALTER TABLE `envelop_price_list`
  ADD CONSTRAINT `envelop_price_list_ibfk_1` FOREIGN KEY (`quality_id`) REFERENCES `envelop_quality` (`id`),
  ADD CONSTRAINT `envelop_price_list_ibfk_2` FOREIGN KEY (`quantity_id`) REFERENCES `envelop_quantity` (`id`);

--
-- Constraints for table `envelop_quantity`
--
ALTER TABLE `envelop_quantity`
  ADD CONSTRAINT `envelop_quantity_ibfk_1` FOREIGN KEY (`quality_id`) REFERENCES `envelop_quality` (`id`);

--
-- Constraints for table `handbill_client_detail`
--
ALTER TABLE `handbill_client_detail`
  ADD CONSTRAINT `handbill_client_detail_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `handbill_price_list`
--
ALTER TABLE `handbill_price_list`
  ADD CONSTRAINT `handbill_price_list_ibfk_1` FOREIGN KEY (`quantity_id`) REFERENCES `handbill_quantity` (`id`),
  ADD CONSTRAINT `handbill_price_list_ibfk_2` FOREIGN KEY (`side_id`) REFERENCES `handbill_side` (`id`),
  ADD CONSTRAINT `handbill_price_list_ibfk_3` FOREIGN KEY (`size_id`) REFERENCES `handbill_size` (`id`);

--
-- Constraints for table `handbill_quantity`
--
ALTER TABLE `handbill_quantity`
  ADD CONSTRAINT `handbill_quantity_ibfk_1` FOREIGN KEY (`size_id`) REFERENCES `handbill_size` (`id`);

--
-- Constraints for table `handbill_side`
--
ALTER TABLE `handbill_side`
  ADD CONSTRAINT `handbill_side_ibfk_1` FOREIGN KEY (`size_id`) REFERENCES `handbill_size` (`id`),
  ADD CONSTRAINT `handbill_side_ibfk_2` FOREIGN KEY (`quantity_id`) REFERENCES `handbill_quantity` (`id`);

--
-- Constraints for table `laterpad_client_detail`
--
ALTER TABLE `laterpad_client_detail`
  ADD CONSTRAINT `laterpad_client_detail_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `laterpad_price_list`
--
ALTER TABLE `laterpad_price_list`
  ADD CONSTRAINT `laterpad_price_list_ibfk_1` FOREIGN KEY (`quantity_id`) REFERENCES `laterpad_quantity` (`id`),
  ADD CONSTRAINT `laterpad_price_list_ibfk_2` FOREIGN KEY (`size_id`) REFERENCES `laterpad_size` (`id`);

--
-- Constraints for table `laterpad_quantity`
--
ALTER TABLE `laterpad_quantity`
  ADD CONSTRAINT `laterpad_quantity_ibfk_1` FOREIGN KEY (`size_id`) REFERENCES `laterpad_size` (`id`);

--
-- Constraints for table `payinfo`
--
ALTER TABLE `payinfo`
  ADD CONSTRAINT `payinfo_ibfk_1` FOREIGN KEY (`uid`) REFERENCES `users` (`id`);

--
-- Constraints for table `portfolio`
--
ALTER TABLE `portfolio`
  ADD CONSTRAINT `portfolio_ibfk_1` FOREIGN KEY (`cate_id`) REFERENCES `cate_name` (`id`),
  ADD CONSTRAINT `portfolio_ibfk_2` FOREIGN KEY (`subcate_id`) REFERENCES `subcate_name` (`id`);

--
-- Constraints for table `quantity1`
--
ALTER TABLE `quantity1`
  ADD CONSTRAINT `quantity1_ibfk_1` FOREIGN KEY (`quality_id`) REFERENCES `quality` (`id`);

--
-- Constraints for table `subcate_name`
--
ALTER TABLE `subcate_name`
  ADD CONSTRAINT `subcate_name_ibfk_1` FOREIGN KEY (`cate_id`) REFERENCES `cate_name` (`id`);

--
-- Constraints for table `vcard_price_list`
--
ALTER TABLE `vcard_price_list`
  ADD CONSTRAINT `vcard_price_list_ibfk_1` FOREIGN KEY (`quality`) REFERENCES `quality` (`id`),
  ADD CONSTRAINT `vcard_price_list_ibfk_3` FOREIGN KEY (`side`) REFERENCES `vcard_side` (`id`),
  ADD CONSTRAINT `vcard_price_list_ibfk_4` FOREIGN KEY (`quantity`) REFERENCES `quantity1` (`id`);

--
-- Constraints for table `vcard_side`
--
ALTER TABLE `vcard_side`
  ADD CONSTRAINT `vcard_side_ibfk_1` FOREIGN KEY (`quality_id`) REFERENCES `quality` (`id`),
  ADD CONSTRAINT `vcard_side_ibfk_2` FOREIGN KEY (`quantity_id`) REFERENCES `quantity1` (`id`);

--
-- Constraints for table `vc_client_detail`
--
ALTER TABLE `vc_client_detail`
  ADD CONSTRAINT `vc_client_detail_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
