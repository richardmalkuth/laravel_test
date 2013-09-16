-- phpMyAdmin SQL Dump
-- version 3.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 16, 2013 at 05:39 PM
-- Server version: 5.5.25a
-- PHP Version: 5.4.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `laravel_test`
--

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2013_09_14_092903_create_posts_table', 1),
('2013_09_16_052906_create_users_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE IF NOT EXISTS `posts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `author` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `body` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=13 ;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `author`, `title`, `body`, `created_at`, `updated_at`) VALUES
(2, 'Test 1 Author', 'Test 1 Title', 'Test 1 Body', '2013-09-14 08:38:55', '2013-09-14 09:19:28'),
(3, 'Test 2 Author', 'Test 2 Title', 'Test 3 Title', '2013-09-14 09:20:49', '2013-09-14 09:20:49'),
(5, 'Test 3 Author', 'Test 3 Title', 'Test 3 Body', '2013-09-15 04:59:34', '2013-09-15 05:01:28'),
(6, 'Author 4', 'Title 4', 'Body 4', '2013-09-16 04:30:52', '2013-09-16 04:30:52'),
(7, 'Author 5', 'Title 5', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum, quis, facilis, quos dicta voluptate aspernatur molestiae facere quisquam qui ex dolorum commodi aliquam veniam iusto voluptas asperiores veritatis reiciendis earum!\r\n', '2013-09-16 04:32:42', '2013-09-16 04:32:42'),
(8, 'Author 6', 'Author 7', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum, quis, facilis, quos dicta voluptate aspernatur molestiae', '2013-09-16 04:48:39', '2013-09-16 04:48:39'),
(9, 'qwe2', 'qwe2', 'qwe2', '2013-09-16 05:49:15', '2013-09-16 06:35:21'),
(10, 'asd', 'asd', 'asd', '2013-09-16 05:59:58', '2013-09-16 05:59:58'),
(11, 'zxc', 'zxc', 'zxc', '2013-09-16 06:00:16', '2013-09-16 06:00:16'),
(12, 'rty2', 'rty2', 'rty2', '2013-09-16 06:01:18', '2013-09-16 06:49:23');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `created_at`, `updated_at`) VALUES
(1, 'Administrator', 'admin@test.com', '$2y$08$1VHNV23zduJCseQ8UOD.tObEnXcrNAl50ZKz02soxn9x5R75cEB1S', '2013-09-15 22:09:14', '2013-09-15 22:09:14');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
