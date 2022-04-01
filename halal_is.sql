-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 01, 2022 at 05:48 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `halal_is`
--

-- --------------------------------------------------------

--
-- Table structure for table `answer_list`
--

CREATE TABLE `answer_list` (
  `id` int(11) NOT NULL,
  `name` varchar(31) DEFAULT NULL,
  `categories` varchar(31) DEFAULT NULL,
  `cp_state_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `answer_list`
--

INSERT INTO `answer_list` (`id`, `name`, `categories`, `cp_state_id`) VALUES
(1, '10', 'Ingredient', 2),
(2, '1110', 'Ingredient', 3),
(3, '1111', 'Ingredient', 1),
(4, '1100', 'Ingredient', 2),
(5, '1101', 'Ingredient', 3),
(6, '0111', 'Ingredient', 3),
(7, '0110', 'Ingredient', 2),
(8, '0100', 'Ingredient', 1),
(9, '01010', 'Ingredient', 1),
(10, '010111', 'Ingredient', 3),
(11, '010110', 'Ingredient', 2),
(12, '001', 'Ingredient', 3),
(13, '0001', 'Ingredient', 2),
(14, '00000', 'Ingredient', 3),
(15, '000011', 'Ingredient', 3),
(16, '0000100', 'Ingredient', 2),
(17, '0000101', 'Ingredient', 3),
(18, '11', 'Storage', 4),
(19, '10', 'Storage', 2),
(20, '01', 'Storage', 1),
(21, '001', 'Storage', 1),
(22, '0001', 'Storage', 2),
(23, '00000', 'Storage', 1),
(24, '000011', 'Storage', 5),
(25, '000010', 'Storage', 2),
(26, '1', 'Distribution', 2),
(27, '01', 'Distribution', 2),
(28, '001', 'Distribution', 1),
(29, '0000', 'Distribution', 6),
(30, '00011', 'Distribution', 2),
(31, '00010', 'Distribution', 7),
(32, '1', 'Display', 2),
(33, '01', 'Display', 2),
(34, '001', 'Display', 8),
(35, '0001', 'Display', 2),
(36, '0000', 'Display', 8),
(37, '0', 'Cutting', 1),
(38, '10', 'Cutting', 9),
(39, '111', 'Cutting', 10),
(40, '1100', 'Cutting', 11),
(41, '11010', 'Cutting', 12),
(42, '110110', 'Cutting', 2),
(43, '110111', 'Cutting', 1);

-- --------------------------------------------------------

--
-- Table structure for table `answer_list_assesment`
--

CREATE TABLE `answer_list_assesment` (
  `id` int(11) NOT NULL,
  `name` varchar(31) DEFAULT NULL,
  `categories` varchar(31) DEFAULT NULL,
  `grade` varchar(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `answer_list_assesment`
--

INSERT INTO `answer_list_assesment` (`id`, `name`, `categories`, `grade`) VALUES
(1, '00100', 'Assesment1', 'C'),
(2, '00101', 'Assesment1', 'B'),
(3, '00110', 'Assesment1', 'B'),
(4, '00111', 'Assesment1', 'B'),
(5, '01100', 'Assesment1', 'B'),
(6, '01101', 'Assesment1', 'B'),
(7, '01110', 'Assesment1', 'B'),
(8, '01111', 'Assesment1', 'B'),
(9, '10100', 'Assesment1', 'B'),
(10, '10101', 'Assesment1', 'B'),
(11, '10110', 'Assesment1', 'B'),
(12, '10111', 'Assesment1', 'A'),
(13, '11100', 'Assesment1', 'B'),
(14, '11101', 'Assesment1', 'A'),
(15, '11110', 'Assesment1', 'A'),
(16, '11111', 'Assesment1', 'A'),
(17, '000000', 'Assesment1', 'C'),
(18, '000001', 'Assesment1', 'C'),
(19, '000010', 'Assesment1', 'C'),
(20, '000011', 'Assesment1', 'B'),
(21, '000100', 'Assesment1', 'C'),
(22, '000101', 'Assesment1', 'B'),
(23, '000110', 'Assesment1', 'B'),
(24, '000111', 'Assesment1', 'B'),
(25, '010000', 'Assesment1', 'C'),
(26, '010001', 'Assesment1', 'B'),
(27, '010010', 'Assesment1', 'B'),
(28, '010011', 'Assesment1', 'B'),
(29, '010100', 'Assesment1', 'B'),
(30, '010101', 'Assesment1', 'B'),
(31, '010110', 'Assesment1', 'B'),
(32, '010111', 'Assesment1', 'B'),
(33, '100000', 'Assesment1', 'C'),
(34, '100001', 'Assesment1', 'B'),
(35, '100010', 'Assesment1', 'B'),
(36, '100011', 'Assesment1', 'B'),
(37, '100100', 'Assesment1', 'B'),
(38, '100101', 'Assesment1', 'B'),
(39, '100110', 'Assesment1', 'B'),
(40, '100111', 'Assesment1', 'B'),
(41, '110000', 'Assesment1', 'B'),
(42, '110001', 'Assesment1', 'B'),
(43, '110010', 'Assesment1', 'B'),
(44, '110011', 'Assesment1', 'B'),
(45, '110100', 'Assesment1', 'B'),
(46, '110101', 'Assesment1', 'B'),
(47, '110110', 'Assesment1', 'B'),
(48, '110111', 'Assesment1', 'A'),
(49, '00011', 'Assesment2', 'B'),
(50, '00111', 'Assesment2', 'B'),
(51, '01011', 'Assesment2', 'B'),
(52, '01111', 'Assesment2', 'A'),
(53, '10011', 'Assesment2', 'B'),
(54, '10111', 'Assesment2', 'A'),
(55, '11011', 'Assesment2', 'A'),
(56, '11111', 'Assesment2', 'A'),
(57, '000100', 'Assesment2', 'C'),
(58, '001100', 'Assesment2', 'B'),
(59, '010100', 'Assesment2', 'B'),
(60, '011100', 'Assesment2', 'B'),
(61, '100100', 'Assesment2', 'B'),
(62, '101100', 'Assesment2', 'B'),
(63, '110100', 'Assesment2', 'B'),
(64, '111100', 'Assesment2', 'A'),
(65, '000101', 'Assesment2', 'B'),
(66, '001101', 'Assesment2', 'B'),
(67, '010101', 'Assesment2', 'B'),
(68, '011101', 'Assesment2', 'B'),
(69, '100101', 'Assesment2', 'B'),
(70, '101101', 'Assesment2', 'B'),
(71, '110101', 'Assesment2', 'B'),
(72, '111101', 'Assesment2', 'A'),
(73, '000011', 'Assesment2', 'B'),
(74, '001011', 'Assesment2', 'B'),
(75, '010011', 'Assesment2', 'B'),
(76, '011011', 'Assesment2', 'B'),
(77, '100011', 'Assesment2', 'B'),
(78, '101011', 'Assesment2', 'B'),
(79, '110011', 'Assesment2', 'B'),
(80, '111011', 'Assesment2', 'A'),
(81, '0000100', 'Assesment2', 'C'),
(82, '0010100', 'Assesment2', 'B'),
(83, '0100100', 'Assesment2', 'B'),
(84, '0110100', 'Assesment2', 'B'),
(85, '1000100', 'Assesment2', 'B'),
(86, '1010100', 'Assesment2', 'B'),
(87, '1100100', 'Assesment2', 'B'),
(88, '1110100', 'Assesment2', 'B'),
(89, '0000101', 'Assesment2', 'C'),
(90, '0010101', 'Assesment2', 'B'),
(91, '0100101', 'Assesment2', 'B'),
(92, '0110101', 'Assesment2', 'B'),
(93, '1000101', 'Assesment2', 'B'),
(94, '1010101', 'Assesment2', 'B'),
(95, '1100101', 'Assesment2', 'B'),
(96, '1110101', 'Assesment2', 'A'),
(97, '000001', 'Assesment2', 'C'),
(98, '001001', 'Assesment2', 'B'),
(99, '010001', 'Assesment2', 'B'),
(100, '011001', 'Assesment2', 'B'),
(101, '100001', 'Assesment2', 'B'),
(102, '101001', 'Assesment2', 'B'),
(103, '110001', 'Assesment2', 'B'),
(104, '111001', 'Assesment2', 'A'),
(105, '0000000', 'Assesment2', 'C'),
(106, '0010000', 'Assesment2', 'C'),
(107, '0100000', 'Assesment2', 'C'),
(108, '0110000', 'Assesment2', 'B'),
(109, '1000000', 'Assesment2', 'C'),
(110, '1010000', 'Assesment2', 'B'),
(111, '1100000', 'Assesment2', 'B'),
(112, '1110000', 'Assesment2', 'B'),
(113, '0000001', 'Assesment2', 'C'),
(114, '0010001', 'Assesment2', 'B'),
(115, '0100001', 'Assesment2', 'B'),
(116, '0110001', 'Assesment2', 'B'),
(117, '1000001', 'Assesment2', 'B'),
(118, '1010001', 'Assesment2', 'B'),
(119, '1100001', 'Assesment2', 'B'),
(120, '1110001', 'Assesment2', 'B'),
(121, '1010', 'Assesment3', 'B'),
(122, '1011', 'Assesment3', 'A'),
(123, '1110', 'Assesment3', 'A'),
(124, '1111', 'Assesment3', 'A'),
(125, '10000', 'Assesment3', 'B'),
(126, '10001', 'Assesment3', 'B'),
(127, '11000', 'Assesment3', 'B'),
(128, '11001', 'Assesment3', 'B'),
(129, '10010', 'Assesment3', 'B'),
(130, '10011', 'Assesment3', 'B'),
(131, '11010', 'Assesment3', 'B'),
(132, '11011', 'Assesment3', 'A'),
(133, '00010', 'Assesment3', 'B'),
(134, '00011', 'Assesment3', 'B'),
(135, '00110', 'Assesment3', 'B'),
(136, '00111', 'Assesment3', 'B'),
(137, '000000', 'Assesment3', 'C'),
(138, '000001', 'Assesment3', 'B'),
(139, '001000', 'Assesment3', 'B'),
(140, '001001', 'Assesment3', 'B'),
(141, '000010', 'Assesment3', 'C'),
(142, '000011', 'Assesment3', 'B'),
(143, '001010', 'Assesment3', 'B'),
(144, '001011', 'Assesment3', 'B'),
(145, '01010', 'Assesment3', 'B'),
(146, '01011', 'Assesment3', 'B'),
(147, '01110', 'Assesment3', 'B'),
(148, '01111', 'Assesment3', 'A'),
(149, '010000', 'Assesment3', 'C'),
(150, '010001', 'Assesment3', 'B'),
(151, '011000', 'Assesment3', 'B'),
(152, '011001', 'Assesment3', 'B'),
(153, '010010', 'Assesment3', 'B'),
(154, '010011', 'Assesment3', 'B'),
(155, '011010', 'Assesment3', 'B'),
(156, '011011', 'Assesment3', 'A'),
(157, '000', 'Assesment4', 'C'),
(158, '001', 'Assesment4', 'B'),
(159, '010', 'Assesment4', 'B'),
(160, '011', 'Assesment4', 'B'),
(161, '100', 'Assesment4', 'B'),
(162, '101', 'Assesment4', 'B'),
(163, '110', 'Assesment4', 'B'),
(164, '111', 'Assesment4', 'A'),
(165, '1000', 'Assesment5', 'B'),
(166, '1010', 'Assesment5', 'B'),
(167, '1100', 'Assesment5', 'B'),
(168, '1110', 'Assesment5', 'A'),
(169, '01000', 'Assesment5', 'C'),
(170, '01010', 'Assesment5', 'B'),
(171, '01100', 'Assesment5', 'B'),
(172, '01110', 'Assesment5', 'A'),
(173, '00000', 'Assesment5', 'C'),
(174, '00010', 'Assesment5', 'B'),
(175, '00100', 'Assesment5', 'B'),
(176, '00110', 'Assesment5', 'B'),
(177, '100100', 'Assesment5', 'C'),
(178, '101100', 'Assesment5', 'B'),
(179, '110100', 'Assesment5', 'B'),
(180, '111100', 'Assesment5', 'B'),
(181, '0100100', 'Assesment5', 'C'),
(182, '0101100', 'Assesment5', 'B'),
(183, '0110100', 'Assesment5', 'B'),
(184, '0111100', 'Assesment5', 'B'),
(185, '0000100', 'Assesment5', 'C'),
(186, '0001100', 'Assesment5', 'C'),
(187, '0010100', 'Assesment5', 'C'),
(188, '0011100', 'Assesment5', 'B'),
(189, '100101', 'Assesment5', 'B'),
(190, '101101', 'Assesment5', 'B'),
(191, '110101', 'Assesment5', 'B'),
(192, '111101', 'Assesment5', 'A'),
(193, '0100101', 'Assesment5', 'B'),
(194, '0101101', 'Assesment5', 'B'),
(195, '0110101', 'Assesment5', 'B'),
(196, '0111101', 'Assesment5', 'B'),
(197, '0000101', 'Assesment5', 'C'),
(198, '0001101', 'Assesment5', 'B'),
(199, '0010101', 'Assesment5', 'B'),
(200, '0011101', 'Assesment5', 'B'),
(201, '100110', 'Assesment5', 'B'),
(202, '101110', 'Assesment5', 'B'),
(203, '110110', 'Assesment5', 'B'),
(204, '111110', 'Assesment5', 'A'),
(205, '0100110', 'Assesment5', 'B'),
(206, '0101110', 'Assesment5', 'B'),
(207, '0110110', 'Assesment5', 'B'),
(208, '0111110', 'Assesment5', 'B'),
(209, '0000110', 'Assesment5', 'C'),
(210, '0001110', 'Assesment5', 'B'),
(211, '0010110', 'Assesment5', 'B'),
(212, '0011110', 'Assesment5', 'B'),
(213, '100111', 'Assesment5', 'B'),
(214, '101111', 'Assesment5', 'A'),
(215, '110111', 'Assesment5', 'A'),
(216, '111111', 'Assesment5', 'A'),
(217, '0100111', 'Assesment5', 'B'),
(218, '0101111', 'Assesment5', 'B'),
(219, '0110111', 'Assesment5', 'B'),
(220, '0111111', 'Assesment5', 'A'),
(221, '0000111', 'Assesment5', 'B'),
(222, '0001111', 'Assesment5', 'B'),
(223, '0010111', 'Assesment5', 'B'),
(224, '0011111', 'Assesment5', 'A'),
(225, '11', 'Assesment6', 'A'),
(226, '100', 'Assesment6', 'B'),
(227, '101', 'Assesment6', 'A'),
(228, '001', 'Assesment6', 'B'),
(229, '0000', 'Assesment6', 'C'),
(230, '0001', 'Assesment6', 'B'),
(231, '011', 'Assesment6', 'A'),
(232, '0100', 'Assesment6', 'B'),
(233, '0101', 'Assesment6', 'B'),
(234, '0', 'Assesment7', 'A'),
(235, '10', 'Assesment7', 'C'),
(236, '11', 'Assesment7', 'A'),
(237, '1', 'Assesment8', 'A'),
(238, '00', 'Assesment8', 'C'),
(239, '01', 'Assesment8', 'B'),
(240, '1', 'Assesment9', 'A'),
(241, '00', 'Assesment9', 'C'),
(242, '01', 'Assesment9', 'B'),
(243, '1', 'Assesment10', 'A'),
(244, '0', 'Assesment10', 'C');

-- --------------------------------------------------------

--
-- Table structure for table `assesment`
--

CREATE TABLE `assesment` (
  `id` int(11) NOT NULL,
  `name` varchar(127) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `company` varchar(127) DEFAULT NULL,
  `assesment1` int(11) DEFAULT NULL,
  `assesment2` int(11) DEFAULT NULL,
  `assesment3` int(11) DEFAULT NULL,
  `assesment4` int(11) DEFAULT NULL,
  `assesment5` int(11) DEFAULT NULL,
  `assesment6` int(11) DEFAULT NULL,
  `assesment7` int(11) DEFAULT NULL,
  `assesment8` int(11) DEFAULT NULL,
  `assesment9` int(11) DEFAULT NULL,
  `assesment10` int(11) DEFAULT NULL,
  `assesment_date` date DEFAULT NULL,
  `final_result` varchar(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `assesment`
--

INSERT INTO `assesment` (`id`, `name`, `user_id`, `company`, `assesment1`, `assesment2`, `assesment3`, `assesment4`, `assesment5`, `assesment6`, `assesment7`, `assesment8`, `assesment9`, `assesment10`, `assesment_date`, `final_result`) VALUES
(1, 'marcokeegan631', 2, 'pizza mar', 16, 56, 124, 164, 216, 225, 236, 237, 240, 243, '2022-03-31', 'A'),
(2, 'marcokeegan632', 2, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-03-31', NULL),
(3, 'marcokeegan633', 2, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-04-01', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `cp_state`
--

CREATE TABLE `cp_state` (
  `id` int(11) NOT NULL,
  `name` varchar(31) DEFAULT NULL,
  `notes` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cp_state`
--

INSERT INTO `cp_state` (`id`, `name`, `notes`) VALUES
(1, 'Tidak Dapat', 'Tidak Boleh Digunakan'),
(2, 'Non Titik Kritis', 'Tidak beresiko'),
(3, 'Titik Kritis', 'Perlu dilakukan pengkajian lebih lanjut pada Prosedur Penerapan Status Bahan'),
(4, 'Titik Kritis', 'Tutup tempat-tempat terbuka untuk mencegah kontaminasi dan melarang karyawan untuk membawa makanan ke ruang produksi'),
(5, 'Titik Kritis', 'Pisahkan secara fisik dan administrasi antara bahan untuk produk yang disertifikasi halal dan yang tidak'),
(6, 'Titik Kritis', 'Gunakan wadah yang dapat mencegah terjadinya kontaminasi silang'),
(7, 'Titik Kritis', 'Gunakan kemasan yang dapat mencegah terjadinya kontaminasi silang'),
(8, 'Titik Kritis', 'Pisahkan pemajangan secara nyata'),
(9, 'Titik Kritis', 'Berikan pembinaan terhadap penyembelih'),
(10, 'Titik Kritis', 'Gunakan teknik stunning dengan peralatan tertentu yang tidak menyebabkan hewan mati sebelum disembelih dan harus dilakukan pemeriksaan secara rutin terhadap'),
(11, 'Titik Kritis', 'Kontrol pisau yang digunakan dan periksa ketajamannya setiap saat'),
(12, 'Titik Kritis', 'Tetapkan tenggang waktu tertentu yang menjamin hewan dapat sudah benar-benar mati dan darah keluar dengan tuntas sebelum diproses lebih lanjut (perendaman air panas dan pengulitan)');

-- --------------------------------------------------------

--
-- Table structure for table `cutting`
--

CREATE TABLE `cutting` (
  `id` int(11) NOT NULL,
  `name` varchar(63) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `answer_id` int(11) DEFAULT NULL,
  `cut_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `display`
--

CREATE TABLE `display` (
  `id` int(11) NOT NULL,
  `name` varchar(63) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `menu_id` int(11) NOT NULL,
  `answer_id` int(11) DEFAULT NULL,
  `display_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `distribution`
--

CREATE TABLE `distribution` (
  `id` int(11) NOT NULL,
  `name` varchar(63) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `answer_id` int(11) DEFAULT NULL,
  `distribution_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ingredient`
--

CREATE TABLE `ingredient` (
  `id` int(11) NOT NULL,
  `name` varchar(127) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `answer_id` int(11) DEFAULT NULL,
  `answer_id_store` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id` int(11) NOT NULL,
  `name` varchar(63) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `menu_ingredient`
--

CREATE TABLE `menu_ingredient` (
  `menu_id` int(11) NOT NULL,
  `ingredient_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `question_list`
--

CREATE TABLE `question_list` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `categories` varchar(31) DEFAULT NULL,
  `next_question_1` int(11) DEFAULT NULL,
  `next_question_0` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `question_list`
--

INSERT INTO `question_list` (`id`, `name`, `categories`, `next_question_1`, `next_question_0`) VALUES
(1, 'Apakah bahan yang digunakan tergolong bahan nabati?', 'Ingredient', 2, 6),
(2, 'Apakah bahan nabati yang digunakan mengalami pengolahan?', 'Ingredient', 3, 0),
(3, 'Apakah bahan nabati yang tidak mengalami pengolahan melewati tahapan kultivasi mikrobial?', 'Ingredient', 4, 5),
(4, 'Apakah bahan nabati yang melewati tahapan kultivasi mikrobial melewati tahapan fermentasi Khamr?', 'Ingredient', 0, 0),
(5, 'Apakah bahan nabati yang tidak melewati tahapan kultivasi mikrobial tercampur dengan bahan tambahan?', 'Ingredient', 0, 0),
(6, 'Apakah bahan yang digunakan tergolong bahan hewani?', 'Ingredient', 7, 12),
(7, 'Apakah bahan hewani yang digunakan adalah susu/telur/ikan?', 'Ingredient', 8, 9),
(8, 'Apakah susu/telur/ikan tersebut mengalami pengolahan?', 'Ingredient', 0, 0),
(9, 'Apakah daging dan hasil samping berasal dari hewan yang halal?', 'Ingredient', 10, 0),
(10, 'Apakah Hewan disembelih sesuai dengan Syari\'at Islam dan memiliki SH MUI atau lembaga yang diakui LPPOM', 'Ingredient', 11, 0),
(11, 'Apakah Hewan yang disemebelih ada pengolahan lanjutan?', 'Ingredient', 0, 0),
(12, 'Apakah bahan yang digunakan tergolong bahan mikrobial?', 'Ingredient', 0, 13),
(13, 'Apakah bahan yang digunakan tergolong bahan tambang?', 'Ingredient', 0, 14),
(14, 'Apakah bahan yang digunakan tergolong bahan sintetik?', 'Ingredient', 15, 0),
(15, 'Apakah bahan sintetik yang digunakan bersifat organik?', 'Ingredient', 0, 16),
(16, 'Apakah bahan sintetik tidak organik yang digunakan mengandung bahan penolong?', 'Ingredient', 0, 0),
(17, 'Apakah semua produk disertifikasi halal?', 'Storage', 18, 19),
(18, 'Apakah ada peluang terkontaminasi bahan-bahan haram/najis', 'Storage', 0, 0),
(19, 'Apakah produk sejenis non sertifikasi menggunakan merk yang sama?', 'Storage', 0, 20),
(20, 'Apakah bahan untuk produk non sertifikasi mengandung babi atau hasil sampingnya?', 'Storage', 0, 21),
(21, 'Apakah lini produksi, penyimpanan bahan dan produk untuk produk disertifikasi dengan non sertifikasi terpisah?', 'Storage', 0, 22),
(22, 'Apakah prosedur sanitasi yang dilakukan dapat menghilangkan lemak, bau, warna dan rasa?', 'Storage', 18, 0),
(23, 'Apakah semua produk yang didistribusikan bersertifikat Halal?', 'Distribution', 0, 24),
(24, 'Apakah alat distribusi berbeda?', 'Distribution', 0, 25),
(25, 'Apakah produk non sertifikasi halal mengandung babi dan hasil sampingnya?', 'Distribution', 0, 26),
(26, 'Ada kemasan?', 'Distribution', 27, 0),
(27, 'Apakah kemasan dapat mencegah kontaminasi silang?', 'Distribution', 0, 0),
(28, 'Apakah semua produk yang dipajang bersertifikat Halal?', 'Display', 0, 29),
(29, 'Apakah pemajangan terpisah secara nyata?', 'Display', 0, 30),
(30, 'Apakah produk non sertifikasi halal mengandung babi?', 'Display', 0, 31),
(31, 'Apakah pemajangan dilakukan dengan menggunakan kemasan?', 'Display', 0, 0),
(32, 'Apakah penyembelih beragama Islam?', 'Cutting', 33, 0),
(33, 'Apakah penyembelih memahami dan menjalankan proses penyembelihan sesuai Syari\'at Islam?', 'Cutting', 34, 0),
(34, 'Apakah dilakukan pemingsanan ?', 'Cutting', 0, 35),
(35, 'Apakah pisau yang digunakan tajam?', 'Cutting', 36, 0),
(36, 'Apakah hewan mati sempurna dan darahnya keluar sempurna?', 'Cutting', 37, 0),
(37, 'Apakah darah/ bangkai dimanfaatkan?', 'Cutting', 0, 0),
(38, 'Apakah auditor halal internal merupakan pemilik atau karyawan tetap?', 'Assesment1', 39, 39),
(39, 'Apakah auditor tersebut beragama Islam?', 'Assesment1', 40, 40),
(40, 'Apakah auditor mampu menjelaskan dengan baik titik kritis bahan dan proses yang digunakan di perusahaan?', 'Assesment1', 42, 41),
(41, 'Apakah auditor cukup dalam menjelaskan titik kritis bahan dan proses?', 'Assesment1', 42, 42),
(42, 'Apakah auditor tersebut memiliki kewenangan untuk melakukan tindakan yang diperlukan untuk melaksanakan Sistem Jaminan Halal (SJH) sesuai dengan aturan yang ditetapkan LPPOM MUI?', 'Assesment1', 43, 43),
(43, 'Apakah legalitas auditor tersebut diperkuat dengan SK Perusahaan?', 'Assesment1', 0, 0),
(44, 'Apakah perusahaan telah memiliki manual SJH yang telah disetujui LPPOM MUI?', 'Assesment2', 45, 45),
(45, 'Apakah perusahaan memiliki referensi daftar produk yang disertifikasi halal sebagai salah satu acuan teknis penggunaan bahan dan proses produksi?', 'Assesment2', 46, 46),
(46, 'Apakah perusahaan telah memiliki daftar bahan terhadap produsen, pemasok, SH, dll yang telah disetujui internal auditor dan diketahui oleh LPPOM-MUI?', 'Assesment2', 47, 47),
(47, 'Apakah perusahaan memiliki resep/formula baku produk secara tertulis dengan rapi?', 'Assesment2', 49, 48),
(48, 'Apakah perusahaan memiliki resep/formula baku produk secara tertulis namun belum rapi?', 'Assesment2', 49, 49),
(49, 'Apakah perusahaan telah memiliki dan tepat dalam menetapkan titik kritis bahan dan proses beserta tindakan pencegahannya?', 'Assesment2', 0, 50),
(50, 'Apakah perusahaan telah memiliki namun belum tepat dalam menetapkan titik kritis bahan dan proses beserta tindakan pencegahannya?', 'Assesment2', 0, 0),
(51, 'Apakah pembelian bahan dicatat dalam buku catatan yang menjelaskan nama bahan, merk bahan, jumlah bahan serta tanggal pembeliannya?', 'Assesment3', 53, 52),
(52, 'Apakah pembelian bahan dicatat tetapi tidak lengkap?', 'Assesment3', 53, 53),
(53, 'Apakah perubahan terhadap bahan atau formula atau resep produksi selalu tercatat?', 'Assesment3', 54, 54),
(54, 'Apakah setiap penerimaan bahan dan stok dicatat?', 'Assesment3', 56, 55),
(55, 'Apakah ada catatan pada penerimaan bahan namun tidak lengkap?', 'Assesment3', 56, 56),
(56, 'Apakah catatan-catatan tersebut disimpan selama minimal tiga bulan terakhir?', 'Assesment3', 0, 0),
(57, 'Apakah penyimpanan bahan produksi disimpan secara khusus sehingga mencegah terjadinya kontaminasi silang dengan bahan yang tidak digunakan / disertifikasi halal / non produksi?', 'Assesment4', 58, 58),
(58, 'Apakah peralatan disimpan secara khusus di tempat yang bersih?', 'Assesment4', 59, 59),
(59, 'Apakah penyimpanan produk disimpan secara khusus sehingga mencegah terjadinya produk terkontaminasi dengan najis (kotoran) atau produk yang diragukan kehalalannya?', 'Assesment4', 0, 0),
(60, 'Apakah bahan produksi yang digunakan menggunakan bahan produksi sesuai dengan daftar bahan yang telah diketahui LPPOM MUI?', 'Assesment5', 62, 61),
(61, 'Apakah bahan produksi yang digunakan menggunakan bahan produksi tidak sesuai dengan daftar bahan namun dapat dipastikan tidak mempengaruhi status halal produk?', 'Assesment5', 62, 62),
(62, 'Apakah formula dan resep yang digunakan sesuai dengan daftar bahan dan produk yang dihasilkan?', 'Assesment5', 63, 63),
(63, 'Apakah fasilitas dan proses produksi bebas dari najis?', 'Assesment5', 64, 64),
(64, 'Apakah perusahaan melakukan maklon?', 'Assesment5', 65, 0),
(65, 'Apakah dapat dipastikan bahan yang digunakan tidak mempengaruhi status halal produk yang disertifikasi?', 'Assesment5', 66, 66),
(66, 'Apakah bahan yang digunakan pada fasilitas produksi tempat makon dapat dipastikan tidak mempengaruhi status halal produk yang disertifikasi?', 'Assesment5', 0, 0),
(68, 'Apakah kemasan produk telah menggunakan label/logo halal MUI?', 'Assesment6', 70, 69),
(69, 'Aemasan produk telah menggunakan label/logo halal biasa (NON MUI)?', 'Assesment6', 70, 70),
(70, 'Ada bukti produk halal perusahaan terdistribusi/terdisplay dengan baik yaitu tidak memungkinkan terkontaminasi silang dengan produk lain yang diragukan kehalalannya?', 'Assesment6', 0, 71),
(71, 'Aendistribusian/display produk memungkinan terjadinya kontaminasi silang dengan produk lain namun kecil kemungkinan dapat mempengaruhi status halal produk?', 'Assesment6', 0, 0),
(72, 'Apakah ada perubahan bahan?', 'Assesment7', 73, 0),
(73, 'Apakah ada bukti komunikasi eksternal (laporan) antara auditor dan LPPOM MUI?', 'Assesment7', 0, 0),
(74, 'Apakah pemilik/penanggungjawab (AHI) telah mengikuti penyuluhan/pelatihan Halal dan mensosialisasikan kepada karyawan?', 'Assesment8', 0, 75),
(75, 'Apakah pemilik/penanggungjawab belum mengajarkan pengetahuan dan keterampilannya kepada karyawan yang lain meskipun telah mengikuti penyuluhan/pelatihan Halal?', 'Assesment8', 0, 0),
(76, 'Apakah manajemen halal secara rutin melakukan audit internal implementasi SJH sekurangnya 2 (dua) kali dalam setahun dan melaporkan hasilnya ke LPPOM MUI?', 'Assesment9', 0, 77),
(77, 'Apakah manajemen halal baru dapat melakukan audit internal kurang dari waktu yang ditentukan namun selalu melaporkan hasil audit internal ke LPPOM MUI?', 'Assesment9', 0, 0),
(78, 'Apakah dilakukan kaji ulang manajemen minimal setahun sekali yang dihadiri manajemen puncak dan tim manajemen halal?', 'Assesment10', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `id` int(11) NOT NULL,
  `name` varchar(31) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`id`, `name`) VALUES
(1, 'Admin'),
(2, 'Rumah Potong Hewan'),
(3, 'Distributor'),
(4, 'Pengolah'),
(5, 'Auditor');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(127) DEFAULT NULL,
  `email` varchar(127) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `role_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `role_id`) VALUES
(1, 'Moya', 'Amhpouu@gmail.com', '25f3475bad1f6f41afdcf32bb8a58392', 1),
(2, 'Marco Keegan ', 'marcokeegan63@gmail.com', '3c443e52f0aaf0d2cf822f6162cfc55f', 5),
(3, 'Marco', 'marcoeegan254@gmail.com', '3c443e52f0aaf0d2cf822f6162cfc55f', 4);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `answer_list`
--
ALTER TABLE `answer_list`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cp_state_id` (`cp_state_id`);

--
-- Indexes for table `answer_list_assesment`
--
ALTER TABLE `answer_list_assesment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `assesment`
--
ALTER TABLE `assesment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `assesment1` (`assesment1`),
  ADD KEY `assesment2` (`assesment2`),
  ADD KEY `assesment3` (`assesment3`),
  ADD KEY `assesment4` (`assesment4`),
  ADD KEY `assesment5` (`assesment5`),
  ADD KEY `assesment6` (`assesment6`),
  ADD KEY `assesment7` (`assesment7`),
  ADD KEY `assesment8` (`assesment8`),
  ADD KEY `assesment9` (`assesment9`),
  ADD KEY `assesment10` (`assesment10`);

--
-- Indexes for table `cp_state`
--
ALTER TABLE `cp_state`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cutting`
--
ALTER TABLE `cutting`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `answer_id` (`answer_id`);

--
-- Indexes for table `display`
--
ALTER TABLE `display`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `menu_id` (`menu_id`),
  ADD KEY `answer_id` (`answer_id`);

--
-- Indexes for table `distribution`
--
ALTER TABLE `distribution`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `answer_id` (`answer_id`);

--
-- Indexes for table `ingredient`
--
ALTER TABLE `ingredient`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `answer_id` (`answer_id`),
  ADD KEY `answer_id_store` (`answer_id_store`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `menu_ingredient`
--
ALTER TABLE `menu_ingredient`
  ADD PRIMARY KEY (`menu_id`,`ingredient_id`),
  ADD KEY `ingredient_id` (`ingredient_id`);

--
-- Indexes for table `question_list`
--
ALTER TABLE `question_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `role_id` (`role_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `answer_list`
--
ALTER TABLE `answer_list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `answer_list_assesment`
--
ALTER TABLE `answer_list_assesment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=245;

--
-- AUTO_INCREMENT for table `assesment`
--
ALTER TABLE `assesment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `cutting`
--
ALTER TABLE `cutting`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `display`
--
ALTER TABLE `display`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `distribution`
--
ALTER TABLE `distribution`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ingredient`
--
ALTER TABLE `ingredient`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `question_list`
--
ALTER TABLE `question_list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `answer_list`
--
ALTER TABLE `answer_list`
  ADD CONSTRAINT `answer_list_ibfk_1` FOREIGN KEY (`cp_state_id`) REFERENCES `cp_state` (`id`);

--
-- Constraints for table `assesment`
--
ALTER TABLE `assesment`
  ADD CONSTRAINT `assesment_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `assesment_ibfk_10` FOREIGN KEY (`assesment9`) REFERENCES `answer_list_assesment` (`id`),
  ADD CONSTRAINT `assesment_ibfk_11` FOREIGN KEY (`assesment10`) REFERENCES `answer_list_assesment` (`id`),
  ADD CONSTRAINT `assesment_ibfk_2` FOREIGN KEY (`assesment1`) REFERENCES `answer_list_assesment` (`id`),
  ADD CONSTRAINT `assesment_ibfk_3` FOREIGN KEY (`assesment2`) REFERENCES `answer_list_assesment` (`id`),
  ADD CONSTRAINT `assesment_ibfk_4` FOREIGN KEY (`assesment3`) REFERENCES `answer_list_assesment` (`id`),
  ADD CONSTRAINT `assesment_ibfk_5` FOREIGN KEY (`assesment4`) REFERENCES `answer_list_assesment` (`id`),
  ADD CONSTRAINT `assesment_ibfk_6` FOREIGN KEY (`assesment5`) REFERENCES `answer_list_assesment` (`id`),
  ADD CONSTRAINT `assesment_ibfk_7` FOREIGN KEY (`assesment6`) REFERENCES `answer_list_assesment` (`id`),
  ADD CONSTRAINT `assesment_ibfk_8` FOREIGN KEY (`assesment7`) REFERENCES `answer_list_assesment` (`id`),
  ADD CONSTRAINT `assesment_ibfk_9` FOREIGN KEY (`assesment8`) REFERENCES `answer_list_assesment` (`id`);

--
-- Constraints for table `cutting`
--
ALTER TABLE `cutting`
  ADD CONSTRAINT `cutting_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `cutting_ibfk_2` FOREIGN KEY (`answer_id`) REFERENCES `answer_list` (`id`);

--
-- Constraints for table `display`
--
ALTER TABLE `display`
  ADD CONSTRAINT `display_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `display_ibfk_2` FOREIGN KEY (`menu_id`) REFERENCES `menu` (`id`),
  ADD CONSTRAINT `display_ibfk_3` FOREIGN KEY (`answer_id`) REFERENCES `answer_list` (`id`);

--
-- Constraints for table `distribution`
--
ALTER TABLE `distribution`
  ADD CONSTRAINT `distribution_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `distribution_ibfk_2` FOREIGN KEY (`answer_id`) REFERENCES `answer_list` (`id`);

--
-- Constraints for table `ingredient`
--
ALTER TABLE `ingredient`
  ADD CONSTRAINT `ingredient_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `ingredient_ibfk_2` FOREIGN KEY (`answer_id`) REFERENCES `answer_list` (`id`),
  ADD CONSTRAINT `ingredient_ibfk_3` FOREIGN KEY (`answer_id_store`) REFERENCES `answer_list` (`id`);

--
-- Constraints for table `menu`
--
ALTER TABLE `menu`
  ADD CONSTRAINT `menu_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `menu_ingredient`
--
ALTER TABLE `menu_ingredient`
  ADD CONSTRAINT `menu_ingredient_ibfk_1` FOREIGN KEY (`menu_id`) REFERENCES `menu` (`id`),
  ADD CONSTRAINT `menu_ingredient_ibfk_2` FOREIGN KEY (`ingredient_id`) REFERENCES `ingredient` (`id`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`role_id`) REFERENCES `role` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
