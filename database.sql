-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 23, 2026 at 03:16 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `portfolio_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `message`, `created_at`) VALUES
(1, 'cleo', 'cleo@gmail.com', 'halooo', '2026-10-21 07:33:24'),
(12, 'cleo', 'cleo@gmail.com', 'hehehehe', '2026-10-21 07:39:19');

-- --------------------------------------------------------

--
-- Table structure for table `expertise_items`
--

CREATE TABLE `expertise_items` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `icon_class` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `expertise_items`
--

INSERT INTO `expertise_items` (`id`, `title`, `description`, `icon_class`) VALUES
(1, 'Data Analytics', 'Analyzing data to identify relevant patterns and meaningful insights.', 'bi bi-bar-chart'),
(2, 'Data Visualization', 'Presenting data through clear and effective visualizations.', 'bi bi-lightbulb'),
(3, 'ICT Analyst', 'Assessing technology needs to support efficient business processes.', 'bi bi-code-slash'),
(4, 'Problem Solving', 'Developing practical solutions through structured analysis.', 'bi bi-lightbulb-fill text-danger');

-- --------------------------------------------------------

--
-- Table structure for table `expertise_metrics`
--

CREATE TABLE `expertise_metrics` (
  `id` int(11) NOT NULL,
  `label` varchar(100) NOT NULL,
  `score` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `expertise_metrics`
--

INSERT INTO `expertise_metrics` (`id`, `label`, `score`) VALUES
(1, 'Data Analytics', 85),
(2, 'ICT', 78),
(3, 'Problem Solving', 90),
(4, 'Technology', 82);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `expertise_items`
--
ALTER TABLE `expertise_items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `expertise_metrics`
--
ALTER TABLE `expertise_metrics`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `expertise_items`
--
ALTER TABLE `expertise_items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `expertise_metrics`
--
ALTER TABLE `expertise_metrics`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
