-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 21, 2023 at 03:45 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `password`) VALUES
(43, 'nadir', 'nadirinab@inab.com', 'nadir'),
(44, 'adnane', 'adnane@gmail.com', 'adnane');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `nameCategory` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `nameCategory`) VALUES
(1, 'dev'),
(2, 'tech'),
(3, 'ai'),
(4, 'frontend'),
(5, 'backend');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `image` text NOT NULL,
  `category` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `category_id` int(11) NOT NULL,
  `admin_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `image`, `category`, `description`, `category_id`, `admin_id`) VALUES
(28, 'Ipsum laboris excep', '85305.jpg', '', ' <p>nvhhgb</p>', 4, 43),
(29, 'Officia voluptate el', '265693.png', '', ' <p>jnjnnjn</p>', 1, 43),
(30, 'Doloremque ipsum cu', '521718.jpg', '', ' <p>jnfvjnfjvjnjf</p>', 5, 43),
(31, 'Et eveniet illo tem', '587772.jpg', '', '<p>ncjbfj</p>', 1, 43),
(32, 'Est culpa iste totam', '595860.png', '', '<p>nnjjjj</p>', 3, 43),
(33, 'Ut enim accusamus re', '602575.png', '', '<p>nmbbbbkj</p>', 2, 43),
(34, 'Aspernatur amet nos', '710501.png', '', '<p>cjdfnjfbhbdcdujd</p>', 3, 44),
(35, 'Aut in vero ea amet', '712283.png', '', '<p>njnjnjjnjn</p>', 3, 44),
(36, 'Enim eveniet verita', '896915.jpg', '', '<p>jndjnjcnj</p>', 2, 44),
(37, 'Nulla incididunt et ', 'wallpaperflare.com_wallpaper (2).jpg', '', '<p>ncknfknjnj lol</p>', 2, 44),
(38, 'Veritatis omnis corr', 'wallpaperflare.com_wallpaper (3).jpg', '', '<p>jnvjfnnjvngnj</p>', 4, 44),
(39, 'Ipsa culpa doloribu', 'adnane.jpg', '', '<p>jbjdbvrj</p>', 2, 44),
(40, 'Qui qui ex saepe bea', 'wallpaperflare.com_wallpaper.jpg', '', '', 5, 44);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
