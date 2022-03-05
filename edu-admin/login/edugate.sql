-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 02, 2022 at 07:25 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `edugate`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `adminlogins`
--

CREATE TABLE `adminlogins` (
  `id` int(11) NOT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `timestamp` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `adminlogins`
--

INSERT INTO `adminlogins` (`id`, `username`, `password`, `timestamp`) VALUES
(1, 'admin', 'admin', '2022-02-24 11:33:34'),
(2, 'admin', 'admin', '2022-02-24 11:37:59'),
(3, 'admin', 'admin', '2022-02-24 11:38:48'),
(4, 'admin', 'guddu', '2022-02-25 12:44:55'),
(5, 'admin', 'admin', '2022-02-25 12:45:16'),
(6, 'admin', 'admin', '2022-02-26 04:43:15'),
(7, 'admin', 'admin', '2022-02-27 10:54:09'),
(8, 'admin', 'admin', '2022-02-27 09:14:24'),
(9, 'admin', 'admin', '2022-02-28 07:33:11'),
(10, 'admin', 'admin', '2022-03-01 09:45:06'),
(11, 'admin', 'ADMIN', '2022-03-01 06:18:18'),
(12, 'admin', 'admin', '2022-03-01 10:44:42'),
(13, 'admin', 'admin', '2022-03-01 11:13:49'),
(14, 'admin', 'admin', '2022-03-01 11:34:57'),
(15, 'admin', 'admin', '2022-03-02 09:31:30'),
(16, 'admin', 'admin', '2022-03-02 11:23:49'),
(17, 'admin', 'admin', '2022-03-02 11:47:50');

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(11) NOT NULL,
  `heading` text DEFAULT NULL,
  `image` varchar(100) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `details` text DEFAULT NULL,
  `status` text DEFAULT NULL,
  `showhome` int(11) DEFAULT NULL,
  `add_time` datetime DEFAULT NULL,
  `modify_time` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `heading`, `image`, `description`, `details`, `status`, `showhome`, `add_time`, `modify_time`) VALUES
(1, 'E-Learn 2022 - World Conference on Edugate Website', 'news-1.jpg', ' \r\n	Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed varius ultricies metus. Donec ac ex porta libero venenatis sodales. Sed efficitur eget risus sed molestie. Nulla blandit bibendum metus ut sagittis. Etiam quis semper justo. Sed tristique fa', '                   Dalmatian hello amazing the rmore flung as thanks a manta dealt to under emu some the and one baldbe dear sobbingly save and spitefully less.', 'publish', 1, '2022-02-27 10:37:08', '2022-03-02 11:59:20'),
(2, 'E-Learn 2022 - World Conference on Edugate Website', 'news-2.jpg', '   Dalmatian hello amazing the rmore flung as thanks a manta dealt to under emu some the and one baldbe dear sobbingly save and spitefully less.', '   Dalmatian hello amazing the rmore flung as thanks a manta dealt to under emu some the and one baldbe dear sobbingly save and spitefully less.', 'publish', 1, '2022-02-27 10:37:23', '2022-03-01 08:55:34'),
(3, 'Effective Researching Method', 'news-3.jpg', 'Aliquam at ante at elit efficitur tincidunt a quis neque. Donec ut pulvinar metus. Pellentesque lobortis volutpat eros sed sagittis. Nunc rutrum ex eu auctor tristique. Maecenas suscipit vestibulum nunc nec placerat. Phasellus blandit augue nunc, consequa', 'Dalmatian hello amazing the rmore flung as thanks a manta dealt to under emu some the and one baldbe dear sobbingly save and spitefully less.', 'publish', 1, '2022-02-27 04:09:01', '2022-03-01 10:34:58'),
(4, 'Photoghaphy Master edugate', 'news-4.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed varius ultricies metus. Donec ac ex porta libero venenatis sodales. Sed efficitur eget risus sed molestie. Nulla blandit bibendum metus ut sagittis. Etiam quis semper justo. Sed tristique facili', '    It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout...', 'publish', NULL, '2022-03-02 12:27:07', '2022-03-02 11:39:03'),
(5, 'Photoghaphy Master edugate', 'news-5.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed varius ultricies metus. Donec ac ex porta libero venenatis sodales. Sed efficitur eget risus sed molestie. Nulla blandit bibendum metus ut sagittis. Etiam quis semper justo. Sed tristique facili', '  Dalmatian hello amazing the rmore flung as thanks a manta dealt to under emu some the and one baldbe dear sobbingly save and spitefully less.', 'publish', NULL, '2022-03-02 10:08:35', '2022-03-02 10:10:32'),
(6, 'WORLD TRADING CENTER', 'recent-post-2.jpg', 'Dalmatian hello amazing the rmore flung as thanks a manta dealt to under emu some the and one baldbe dear sobbingly save and spitefully less. ', ' Dalmatian hello amazing the rmore flung as thanks a manta dealt to under emu some the and one baldbe dear sobbingly save and spitefully less.', 'publish', NULL, '2022-03-02 10:04:20', '2022-03-02 10:06:22'),
(7, 'COMPUTER SOLUTIONS', 'popular-3.jpg', 'Dalmatian hello amazing the rmore flung as thanks a manta dealt to under emu some the and one baldbe dear sobbingly save and spitefully less.Dalmatian hello amazing the rmore flung as thanks a manta dealt to under emu some the and one baldbe dear sobbingl', 'Dalmatian hello amazing the rmore flung as thanks a manta dealt to under emu some the and one baldbe dear sobbingly save and spitefully less.', 'publish', NULL, '2022-03-02 10:09:17', '0000-00-00 00:00:00'),
(8, 'PHOTOSHOP ', 'popular-4.jpg', 'Dalmatian hello amazing the rmore flung as thanks a manta dealt to under emu some the and one baldbe dear sobbingly save and spitefully less.Dalmatian hello amazing the rmore flung as thanks a manta dealt to under emu some the and one baldbe dear sobbingl', 'Dalmatian hello amazing the rmore flung as thanks a manta dealt to under emu some the and one baldbe dear sobbingly save and spitefully less.', 'publish', NULL, '2022-03-02 10:28:39', '0000-00-00 00:00:00'),
(9, 'Time is money', 'pictures-2.jpg', 'Dalmatian hello amazing the rmore flung as thanks a manta dealt to under emu some the and one baldbe dear sobbingly save and spitefully less.', 'Dalmatian hello amazing the rmore flung as thanks a manta dealt to under emu some the and one baldbe dear sobbingly save and spitefully less.', 'publish', NULL, '2022-03-02 10:30:34', '0000-00-00 00:00:00'),
(10, 'Best Typing Award', 'pictures-4.jpg', 'Dalmatian hello amazing the rmore flung as thanks a manta dealt to under emu some the and one baldbe dear sobbingly save and spitefully less.Dalmatian hello amazing the rmore flung as thanks a manta dealt to under emu some the and one baldbe dear sobbingl', 'Dalmatian hello amazing the rmore flung as thanks a manta dealt to under emu some the and one baldbe dear sobbingly save and spitefully less.', 'publish', NULL, '2022-03-02 10:31:15', '0000-00-00 00:00:00'),
(11, 'Math Questions', 'gallery-17.jpg', 'Dalmatian hello amazing the rmore flung as thanks a manta dealt to under emu some the and one baldbe dear sobbingly save and spitefully less.Dalmatian hello amazing the rmore flung as thanks a manta dealt to under emu some the and one baldbe dear sobbingl', 'Dalmatian hello amazing the rmore flung as thanks a manta dealt to under emu some the and one baldbe dear sobbingly save and spitefully less.', 'publish', NULL, '2022-03-02 10:31:53', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `id` int(11) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `image` varchar(100) NOT NULL,
  `name` text NOT NULL,
  `description` text NOT NULL,
  `duration` text NOT NULL,
  `popular` int(11) DEFAULT NULL,
  `showhome` text NOT NULL,
  `status` text NOT NULL,
  `add_time` datetime NOT NULL,
  `modify_time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`id`, `cat_id`, `image`, `name`, `description`, `duration`, `popular`, `showhome`, `status`, `add_time`, `modify_time`) VALUES
(1, 2, 'courses-1.jpg', 'Photoghaphy Master', '        It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout...', '4 months', 1, '1', 'publish', '2022-02-27 11:19:30', '2022-03-01 08:26:10'),
(2, 2, 'courses-2.jpg', 'Photoghaphy Master', '  It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout...', '2 month', 1, '1', 'publish', '2022-02-27 11:21:57', '2022-03-01 08:26:20'),
(3, 1, 'courses-3.jpg', 'Photoghaphy Master', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout...', '4 months', 1, '1', 'publish', '2022-02-27 02:10:57', '0000-00-00 00:00:00'),
(4, 1, 'courses-4.jpg', 'Photoghaphy Master', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout...', '4 months', 1, '1', 'publish', '2022-02-27 03:15:49', '0000-00-00 00:00:00'),
(5, 2, 'categories-1.jpg', 'Photoghaphy Master', ' It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout...', '4 months', 0, '0', 'publish', '2022-03-01 08:45:22', '2022-03-01 08:48:04'),
(6, 2, 'categories-4.jpg', 'Photoghaphy Master', ' It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout...', '4 months', 0, '0', 'publish', '2022-03-01 08:46:18', '2022-03-01 08:48:20');

-- --------------------------------------------------------

--
-- Table structure for table `course_category`
--

CREATE TABLE `course_category` (
  `id` int(11) NOT NULL,
  `name` text DEFAULT NULL,
  `image` varchar(100) DEFAULT NULL,
  `add_time` datetime DEFAULT NULL,
  `modify_time` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `enquiry`
--

CREATE TABLE `enquiry` (
  `id` int(11) NOT NULL,
  `name` text DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `course` text DEFAULT NULL,
  `mobile` bigint(20) DEFAULT NULL,
  `message` text DEFAULT NULL,
  `timestamp` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `enquiry`
--

INSERT INTO `enquiry` (`id`, `name`, `email`, `course`, `mobile`, `message`, `timestamp`) VALUES
(1, 'GUDDU KUMAR', 'sharmaguddu7510@gmail.com', 'web-designing', 9560190498, 'hii guddu', '2022-02-27 05:27:49'),
(2, 'ROHIT KUMARI', 'rohit@gmail.com', 'web-development', 123456789, 'hii rohit', '2022-02-27 05:30:18'),
(3, 'RAJEEV KUMAR', 'rajeevchoudhary067@gmail.com', 'web-designing', 9560987017, 'hii rajeev', '2022-02-27 05:33:54'),
(4, 'jatin kumar', 'jatin@gmail.com', 'web-designing', 123456789, 'hii edugate', '2022-03-02 09:56:36');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(11) NOT NULL,
  `image` varchar(100) DEFAULT NULL,
  `img_alt` varchar(100) DEFAULT NULL,
  `heading` text DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `showhome` text DEFAULT NULL,
  `status` text DEFAULT NULL,
  `add_time` datetime DEFAULT NULL,
  `modify_time` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `image`, `img_alt`, `heading`, `description`, `showhome`, `status`, `add_time`, `modify_time`) VALUES
(1, 'gallery-01.jpg', 'testimonial-image', 'Edugate', ' Photoghaphy Master', '0', 'not-publish', '2022-02-26 11:37:09', '2022-02-27 10:16:08'),
(2, 'gallery-02.jpg', 'gallery-img', 'Edugate', ' Photoghaphy Master', '0', 'not-publish', '2022-02-26 11:37:29', '2022-02-27 10:16:18'),
(3, 'gallery-20.jpg', 'gallery-img', 'Edugate', 'Photoghaphy Master', '0', 'publish', '2022-02-27 10:18:24', '0000-00-00 00:00:00'),
(4, 'gallery-13.jpg', 'gallery-img', 'GUDDU KUMAR', 'Software Developer', '0', 'publish', '2022-02-27 10:28:05', '0000-00-00 00:00:00'),
(5, 'gallery-17.jpg', 'gallery-img', 'ROHIT KUMARI', 'web developer', '0', 'publish', '2022-02-27 10:29:06', '0000-00-00 00:00:00'),
(6, 'gallery-11.jpg', 'gallery-img-clock', 'CLOCK', 'Photoghaphy Master', '0', 'publish', '2022-02-27 10:30:10', '0000-00-00 00:00:00'),
(7, 'gallery-25.jpg', 'gallery-img-man', 'GUDDU', 'For free. For everyone', '0', 'publish', '2022-02-27 10:31:03', '0000-00-00 00:00:00'),
(8, 'gallery-19.jpg', 'gallery-img-pencil', 'PENCILS', 'Software Developer', '0', 'publish', '2022-02-27 10:31:59', '0000-00-00 00:00:00'),
(9, 'gallery-14.jpg', 'gallery-img-hand', 'HAND', 'Photoghaphy Master', '0', 'publish', '2022-02-27 10:32:39', '0000-00-00 00:00:00'),
(10, 'gallery-23.jpg', 'gallery-img-book', 'BOOK', 'Photoghaphy Master', '0', 'publish', '2022-02-27 10:33:58', '0000-00-00 00:00:00'),
(11, 'gallery-15.jpg', 'gallery-img-child', 'JHON', 'Software Developer', '0', 'publish', '2022-02-27 10:34:36', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `sitesetting`
--

CREATE TABLE `sitesetting` (
  `id` int(11) NOT NULL,
  `logo` varchar(100) DEFAULT NULL,
  `logo_alt` varchar(100) DEFAULT NULL,
  `logo_update` datetime DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `email_alt` varchar(100) DEFAULT NULL,
  `email_update` datetime DEFAULT NULL,
  `mobile` bigint(20) DEFAULT NULL,
  `mobile_alt` varchar(100) DEFAULT NULL,
  `mobile_update` datetime DEFAULT NULL,
  `facebook` varchar(255) DEFAULT NULL,
  `facebook_alt` varchar(100) DEFAULT NULL,
  `facebook_update` datetime DEFAULT NULL,
  `twitter` varchar(255) DEFAULT NULL,
  `twitter_alt` varchar(100) DEFAULT NULL,
  `twitter_update` datetime DEFAULT NULL,
  `linkedin` varchar(255) DEFAULT NULL,
  `linkedin_alt` varchar(100) DEFAULT NULL,
  `linkedin_update` datetime DEFAULT NULL,
  `instagram` varchar(255) DEFAULT NULL,
  `instagram_alt` varchar(100) DEFAULT NULL,
  `instagram_update` datetime DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `address_link` varchar(255) DEFAULT NULL,
  `address_update` datetime DEFAULT NULL,
  `page_title` varchar(255) DEFAULT NULL,
  `page_title_update` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sitesetting`
--

INSERT INTO `sitesetting` (`id`, `logo`, `logo_alt`, `logo_update`, `email`, `email_alt`, `email_update`, `mobile`, `mobile_alt`, `mobile_update`, `facebook`, `facebook_alt`, `facebook_update`, `twitter`, `twitter_alt`, `twitter_update`, `linkedin`, `linkedin_alt`, `linkedin_update`, `instagram`, `instagram_alt`, `instagram_update`, `address`, `address_link`, `address_update`, `page_title`, `page_title_update`) VALUES
(1, 'logo-color-1.png', 'logo-img', '2022-02-27 12:46:26', 'sharmaguddu7510@gmail.com', 'email', '2022-02-27 11:51:21', 9560190498, 'mobile', '2022-02-27 01:00:40', 'facebbokprofile.com', 'facebook', '2022-02-27 01:08:47', 'twitter.profile.com', 'twitter', '2022-02-27 01:13:35', 'linkedin.profile.com', 'Linkedin', '2022-02-27 01:26:26', 'instagram.profile.com', 'instagram', '2022-02-27 01:25:03', '99 Barnard St - Suite 111<br> United States - GA 22222', 'google.map', '2022-02-27 12:52:04', 'Edugate', '2022-02-27 01:42:37');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `id` int(11) NOT NULL,
  `image` varchar(100) DEFAULT NULL,
  `paragraph` text DEFAULT NULL,
  `heading` text DEFAULT NULL,
  `button` text DEFAULT NULL,
  `url` varchar(100) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `add_time` datetime DEFAULT NULL,
  `modify_time` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id`, `image`, `paragraph`, `heading`, `button`, `url`, `description`, `add_time`, `modify_time`) VALUES
(1, 'background-slider-1.jpg', 'You only have to know one thing', 'You can learn anything', 'Start learning now !', 'index.php', '  Start learning now !', '2022-02-26 11:42:50', '2022-02-27 01:33:39'),
(2, 'bg-404.jpg', 'You only have to know one thing', 'You can learn anything', 'Start learning now !', 'index.php', 'Start learning now !', '2022-02-26 11:43:21', '0000-00-00 00:00:00'),
(3, 'banner-2.jpg', 'You only have to know one thing', 'You can learn anything', 'Start learning now !', 'index.php', 'Start learning now !', '2022-02-26 11:43:56', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `id` int(11) NOT NULL,
  `image` varchar(100) DEFAULT NULL,
  `name` text DEFAULT NULL,
  `designation` text DEFAULT NULL,
  `description` text DEFAULT NULL,
  `status` text DEFAULT NULL,
  `add_time` datetime DEFAULT NULL,
  `modify_time` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`id`, `image`, `name`, `designation`, `description`, `status`, `add_time`, `modify_time`) VALUES
(1, 'people-avatar-1.jpg', 'GUDDU KUMAR', 'Software Developer', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable.', 'publish', '2022-02-26 10:14:35', '2022-02-27 03:27:08'),
(2, 'people-avatar-5.jpg', 'ROHIT KUMARI', 'Software Developer', ' There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable.', 'publish', '2022-02-27 03:37:52', '2022-02-27 03:39:04'),
(3, 'people-avatar-2.jpg', 'RAJEEV KUMAR', 'Software Developer', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable.', 'publish', '2022-02-27 03:38:51', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `adminlogins`
--
ALTER TABLE `adminlogins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `course_category`
--
ALTER TABLE `course_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `enquiry`
--
ALTER TABLE `enquiry`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sitesetting`
--
ALTER TABLE `sitesetting`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `adminlogins`
--
ALTER TABLE `adminlogins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `course_category`
--
ALTER TABLE `course_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `enquiry`
--
ALTER TABLE `enquiry`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `sitesetting`
--
ALTER TABLE `sitesetting`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
