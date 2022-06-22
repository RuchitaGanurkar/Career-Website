-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 29, 2022 at 11:57 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `login_register`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `created_at` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `created_at`) VALUES
(0, 'admin', '$2y$10$PLgBL66v494PM95Yafi1NOkc8JKqDgpN32bkS/ggk7llxvhQgCGwa', '2022-05-15'),
(0, 'Ruchi@gmail.com', '$2y$10$pAvFrbbQrDrLGMsQHrpi/uJZCrnSRaK5RXxfrlZvEWEukP5EHscOW', '2022-05-15'),
(0, 'Priya@gmail.com', '$2y$10$HE4KPzJ5p77U9nH7wA0ZZeA7ocJTb2ho0WJAadUDcJmc20oR7RVSm', '2022-05-15'),
(0, 'Vaish@gmail.com', '$2y$10$B.O5G1OV/uX/UF1tZM85vO4taZnFOtGZw6A6mFCjfDVx7CpmHl4ha', '2022-05-15'),
(0, 'ruchita', '$2y$10$XtGbZmM0COffSejOogGip.0AEfxWDhVneZKDAeaw8JgW9wTcPJhk6', '2022-05-29');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
