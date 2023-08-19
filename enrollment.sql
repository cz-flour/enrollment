-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 19, 2023 at 06:44 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `enrollment`
--

-- --------------------------------------------------------

--
-- Table structure for table `barangay`
--

CREATE TABLE `barangay` (
  `barangay_id` int(11) NOT NULL,
  `barangay_name` varchar(20) NOT NULL,
  `municipality_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `barangay`
--

INSERT INTO `barangay` (`barangay_id`, `barangay_name`, `municipality_id`) VALUES
(1, 'Badbad', 1),
(2, 'Badian', 1),
(3, 'Bagsa', 1),
(4, 'Bagumbayan', 1),
(5, 'Balogo', 1),
(6, 'Banao', 1),
(7, 'Bangiawon', 1),
(8, 'Bongoran', 1),
(9, 'Bogtong', 1),
(10, 'Busac', 1),
(11, 'Cadawag', 1),
(12, 'Cagmanaba', 1),
(13, 'Calaguimit', 1),
(14, 'Calpi', 1),
(15, 'Calzada', 1),
(16, 'Camagong', 1),
(17, 'Casinagan', 1),
(18, 'Centro Poblacion', 1),
(19, 'Coliat', 1),
(20, 'Del Rosario', 1),
(21, 'Gumabao', 1),
(22, 'Ilaor Norte', 1),
(23, 'Ilaor Sur', 1),
(24, 'Iraya Norte', 1),
(25, 'Iraya Sur', 1),
(26, 'Manga', 1),
(27, 'Maporong', 1),
(28, 'Maramba', 1),
(29, 'Maroponros', 1),
(30, 'Matambo', 1),
(31, 'Mayag', 1),
(32, 'Mayao', 1),
(33, 'Nagas', 1),
(34, 'San Pascual (Nale)', 1),
(35, 'Obaliw-Rinas', 1),
(36, 'Petoria', 1),
(37, 'Pistola', 1),
(38, 'Ramay', 1),
(39, 'Rizal', 1),
(40, 'Saban', 1),
(41, 'San Agustin', 1),
(42, 'San Antonio', 1),
(43, 'San Isidro', 1),
(44, 'San Jose', 1),
(45, 'San Juan', 1),
(46, 'San Miguel', 1),
(47, 'San Ramon', 1),
(48, 'San Vicente (Suca)', 1),
(49, 'Talisay', 1),
(50, 'Talongog', 1),
(51, 'Tapel', 1),
(52, 'Tobgon', 1),
(53, 'Tobog', 1),
(54, 'Tablon', 1),
(55, 'Bagumbayan', 2),
(56, 'Batang', 2),
(57, 'Bay', 2),
(58, 'Binatagan', 2),
(59, 'Calzada', 2),
(60, 'Catburawan', 2),
(61, 'Culliat', 2),
(62, 'Dunao', 2),
(63, 'Guilid', 2),
(64, 'Herrera', 2),
(78, 'Macalidong', 2),
(79, 'Malama', 2),
(80, 'Oma-Oma', 2),
(81, 'Palapas', 2),
(82, 'San Vicente', 2),
(83, 'Tambo', 2),
(84, 'Tandarora', 2),
(85, 'Tiongson', 2),
(86, 'Tomolin', 2),
(87, 'Tula-Tula Grande', 2),
(88, 'Tula-Tula Pequeño', 2),
(89, 'Tupas', 2),
(90, 'Basud', 3),
(91, 'Ubaliw', 3),
(92, 'Centro Occidental', 3),
(93, 'Centro Oriental', 3),
(94, 'Gabon', 3),
(95, 'Kinale', 3),
(96, 'Kinuartelan', 3),
(97, 'La Medalla', 3),
(98, 'Lanigay', 3),
(99, 'La Purisima', 3),
(100, 'Matacon', 3),
(101, 'Ponso', 3),
(102, 'Sugcad', 3);

-- --------------------------------------------------------

--
-- Table structure for table `municipality`
--

CREATE TABLE `municipality` (
  `municipality_id` int(11) NOT NULL,
  `municipality_name` varchar(30) NOT NULL,
  `province_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `municipality`
--

INSERT INTO `municipality` (`municipality_id`, `municipality_name`, `province_id`) VALUES
(1, 'Oas', 1),
(2, 'Ligao', 1),
(3, 'Polangui', 1),
(4, 'Libon', 1),
(5, 'Pioduran', 1),
(6, 'Guinobatan', 1);

-- --------------------------------------------------------

--
-- Table structure for table `province`
--

CREATE TABLE `province` (
  `province_id` int(11) NOT NULL,
  `province_name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `province`
--

INSERT INTO `province` (`province_id`, `province_name`) VALUES
(1, 'Albay'),
(2, 'Camarines Sur');

-- --------------------------------------------------------

--
-- Table structure for table `strand`
--

CREATE TABLE `strand` (
  `strand_id` int(11) NOT NULL,
  `strand_name` varchar(50) NOT NULL,
  `track_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `strand`
--

INSERT INTO `strand` (`strand_id`, `strand_name`, `track_id`) VALUES
(1, 'Automotive Servicing', 2),
(2, 'Electrical Installation and Maintenance', 2),
(3, 'Computer System Servicing', 2),
(4, 'General Academic Strand (GAS)', 1),
(5, 'Humanities and Social Sciences (HUMMS)', 1);

-- --------------------------------------------------------

--
-- Table structure for table `student_info`
--

CREATE TABLE `student_info` (
  `student_id` int(11) NOT NULL,
  `lrn` int(12) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `fname` varchar(30) NOT NULL,
  `mname` varchar(30) NOT NULL,
  `extension` varchar(5) NOT NULL,
  `birthdate` date NOT NULL,
  `age` int(2) NOT NULL,
  `height` int(5) NOT NULL,
  `weight` int(5) NOT NULL,
  `cstatus` varchar(30) NOT NULL,
  `nationality` varchar(50) NOT NULL,
  `place_birth` varchar(70) NOT NULL,
  `sex` varchar(6) NOT NULL,
  `religion` varchar(50) NOT NULL,
  `contact` int(11) NOT NULL,
  `province` int(11) NOT NULL,
  `municipality` int(11) NOT NULL,
  `brgy` int(11) NOT NULL,
  `purok` int(10) NOT NULL,
  `grlevel` int(2) NOT NULL,
  `track` int(11) NOT NULL,
  `strand` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `track`
--

CREATE TABLE `track` (
  `track_id` int(11) NOT NULL,
  `track_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `track`
--

INSERT INTO `track` (`track_id`, `track_name`) VALUES
(1, 'Academic'),
(2, 'TECH-VOC');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `email` varchar(30) NOT NULL,
  `pwd` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `email`, `pwd`) VALUES
(1, 'juan123@gmail.com', 'qwertyuio'),
(2, 'czarinaaicah@gmail.com', 'wew345'),
(3, 'user@email.com', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barangay`
--
ALTER TABLE `barangay`
  ADD PRIMARY KEY (`barangay_id`),
  ADD KEY `municipality_id` (`municipality_id`);

--
-- Indexes for table `municipality`
--
ALTER TABLE `municipality`
  ADD PRIMARY KEY (`municipality_id`),
  ADD KEY `province_id` (`province_id`);

--
-- Indexes for table `province`
--
ALTER TABLE `province`
  ADD PRIMARY KEY (`province_id`);

--
-- Indexes for table `strand`
--
ALTER TABLE `strand`
  ADD PRIMARY KEY (`strand_id`),
  ADD KEY `track_id` (`track_id`);

--
-- Indexes for table `student_info`
--
ALTER TABLE `student_info`
  ADD PRIMARY KEY (`student_id`),
  ADD KEY `strand` (`strand`),
  ADD KEY `track` (`track`),
  ADD KEY `municipality` (`municipality`),
  ADD KEY `province` (`province`),
  ADD KEY `brgy` (`brgy`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `track`
--
ALTER TABLE `track`
  ADD PRIMARY KEY (`track_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `barangay`
--
ALTER TABLE `barangay`
  MODIFY `barangay_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=103;

--
-- AUTO_INCREMENT for table `municipality`
--
ALTER TABLE `municipality`
  MODIFY `municipality_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `province`
--
ALTER TABLE `province`
  MODIFY `province_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `strand`
--
ALTER TABLE `strand`
  MODIFY `strand_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `student_info`
--
ALTER TABLE `student_info`
  MODIFY `student_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `track`
--
ALTER TABLE `track`
  MODIFY `track_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `barangay`
--
ALTER TABLE `barangay`
  ADD CONSTRAINT `barangay_ibfk_1` FOREIGN KEY (`municipality_id`) REFERENCES `municipality` (`municipality_id`);

--
-- Constraints for table `municipality`
--
ALTER TABLE `municipality`
  ADD CONSTRAINT `municipality_ibfk_1` FOREIGN KEY (`province_id`) REFERENCES `province` (`province_id`);

--
-- Constraints for table `strand`
--
ALTER TABLE `strand`
  ADD CONSTRAINT `strand_ibfk_1` FOREIGN KEY (`track_id`) REFERENCES `track` (`track_id`);

--
-- Constraints for table `student_info`
--
ALTER TABLE `student_info`
  ADD CONSTRAINT `student_info_ibfk_1` FOREIGN KEY (`strand`) REFERENCES `strand` (`strand_id`),
  ADD CONSTRAINT `student_info_ibfk_2` FOREIGN KEY (`track`) REFERENCES `track` (`track_id`),
  ADD CONSTRAINT `student_info_ibfk_3` FOREIGN KEY (`municipality`) REFERENCES `municipality` (`municipality_id`),
  ADD CONSTRAINT `student_info_ibfk_5` FOREIGN KEY (`province`) REFERENCES `province` (`province_id`),
  ADD CONSTRAINT `student_info_ibfk_6` FOREIGN KEY (`brgy`) REFERENCES `barangay` (`barangay_id`),
  ADD CONSTRAINT `student_info_ibfk_7` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
