-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 31, 2020 at 02:05 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `account_management`
--

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `id` int(11) NOT NULL,
  `company_name` varchar(225) DEFAULT NULL,
  `postal_code` varchar(225) DEFAULT NULL,
  `subscription_plan` varchar(225) DEFAULT NULL,
  `created` datetime DEFAULT current_timestamp(),
  `modified` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `company_name`, `postal_code`, `subscription_plan`, `created`, `modified`) VALUES
(16, 'Binary', '454001', 'Plan 2', '2020-10-31 13:52:39', '2020-10-31 13:52:39'),
(17, 'Testing', '452001', 'Plan 3', '2020-10-31 13:52:54', '2020-10-31 13:52:54'),
(18, 'Company 4', '452001', 'Plan 3', '2020-10-31 13:53:08', '2020-10-31 13:53:08'),
(19, 'Test Company', '452001', 'Plan 2', '2020-10-31 13:53:44', '2020-10-31 13:53:44'),
(20, 'Management', '12345', 'Plan 1', '2020-10-31 13:53:58', '2020-10-31 13:53:58');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `username` varchar(128) DEFAULT NULL,
  `password` varchar(128) DEFAULT NULL,
  `email` varchar(128) DEFAULT NULL,
  `role` varchar(64) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `role`, `created`, `modified`, `status`) VALUES
(1, 'admin_admin', 'c6f2cdf73d8bd1d62336b6540dbc57e1234ad8ee', 'admin1@gmail.com', 'admin', '2020-10-30 12:12:24', '2020-10-30 13:17:38', 1),
(3, 'admin_admin1', 'c6f2cdf73d8bd1d62336b6540dbc57e1234ad8ee', 'admin@admin.com', 'admin', '2020-10-31 12:24:31', '2020-10-31 12:24:31', 1),
(4, 'admin_admin12', 'c6f2cdf73d8bd1d62336b6540dbc57e1234ad8ee', 'sidra.shahid16@gmail.com', 'admin', '2020-10-31 12:27:18', '2020-10-31 12:27:18', 1),
(5, 'admin123', 'c6f2cdf73d8bd1d62336b6540dbc57e1234ad8ee', 'admin@test.com', 'admin', '2020-10-31 13:42:05', '2020-10-31 13:42:05', 1),
(6, 'test_user', 'c6f2cdf73d8bd1d62336b6540dbc57e1234ad8ee', 'testuser@gmail.com', 'admin', '2020-10-31 14:03:13', '2020-10-31 14:03:13', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
