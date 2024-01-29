-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 29, 2024 at 07:38 AM
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
-- Database: `bioweb`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `adminID` varchar(255) DEFAULT '',
  `adminPassword` varchar(255) DEFAULT '',
  `adminName` varchar(255) DEFAULT '',
  `adminBOD` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `adminAddress` varchar(255) DEFAULT '',
  `adminContact` varchar(255) DEFAULT '',
  `adminEmail` varchar(255) DEFAULT '',
  `NOKContact` varchar(255) DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`adminID`, `adminPassword`, `adminName`, `adminBOD`, `adminAddress`, `adminContact`, `adminEmail`, `NOKContact`) VALUES
('testAdmin1', '123456', 'Kumareswren', '1996-06-05 00:00:00', 'Semenyih', '999', 'aaa@des.com', '111');

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `parentsname` varchar(255) NOT NULL,
  `studentssname` varchar(255) NOT NULL,
  `studentsage` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `contactnum` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `assessmentopt` varchar(255) NOT NULL,
  `paymentopt` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`id`, `parentsname`, `studentssname`, `studentsage`, `address`, `contactnum`, `email`, `date`, `time`, `assessmentopt`, `paymentopt`, `created_at`, `updated_at`) VALUES
(1, 'Marzuki', 'Adam', '24', 'No 28 Jalan 8/11', '0182250171', 'adam@gmail.com', '2024-01-24', '00:00:02', 'Assessment with Report', 'Online Banking', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE `attendance` (
  `attendanceID` int(10) UNSIGNED NOT NULL,
  `studentID` varchar(255) DEFAULT '',
  `lessonID` varchar(255) DEFAULT '',
  `Attend/Absent` tinyint(3) NOT NULL DEFAULT 0,
  `AttendanceDate` datetime NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `attendance_staff`
--

CREATE TABLE `attendance_staff` (
  `AttendID` int(10) UNSIGNED NOT NULL,
  `teacherID` varchar(255) DEFAULT '',
  `Attend/Absent` tinyint(3) NOT NULL DEFAULT 0,
  `AttendanceDate` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `Location` varchar(255) DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `booking_table`
--

CREATE TABLE `booking_table` (
  `ID` bigint(20) NOT NULL,
  `Parents_name` longtext CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `Student_name` longtext CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `Student_age` bigint(20) NOT NULL,
  `Address` longtext CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `Contact_number` int(25) NOT NULL,
  `Email` longtext CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `Date` date NOT NULL,
  `Time` time NOT NULL,
  `Assessment_type` longtext CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `Payment_type` longtext CHARACTER SET utf8 COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `client_info`
--

CREATE TABLE `client_info` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `client_first_name` varchar(255) NOT NULL,
  `client_last_name` varchar(255) NOT NULL,
  `client_gender` varchar(255) NOT NULL,
  `client_bod` varchar(255) NOT NULL,
  `client_email` varchar(255) NOT NULL,
  `client_password` varchar(255) NOT NULL,
  `client_phone_number` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `coheran`
--

CREATE TABLE `coheran` (
  `coheranID` int(10) UNSIGNED NOT NULL,
  `studentID` varchar(255) DEFAULT '',
  `term` int(10) NOT NULL DEFAULT 0,
  `weekNum` int(10) NOT NULL DEFAULT 0,
  `coheranDate` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `redScore` int(10) NOT NULL DEFAULT 0,
  `greenScore` int(10) NOT NULL DEFAULT 0,
  `blueScore` int(10) NOT NULL DEFAULT 0,
  `achieveScore` int(10) NOT NULL DEFAULT 0,
  `remark` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`id`, `name`, `email`, `subject`, `message`, `created_at`, `updated_at`) VALUES
(1, 'Adam Yussof', 'adam@gmail.com', 'Performance issue', 'i would like to report something.. and its pretty much uncool', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `courseID` int(10) UNSIGNED NOT NULL,
  `courseName` varchar(255) DEFAULT '',
  `Description` varchar(255) DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`courseID`, `courseName`, `Description`) VALUES
(1, '4M Program', 'Student improvement program'),
(2, 'MI (KSSR)', 'Primary school program'),
(3, 'MI (KSSM)', 'Secondary school program');

-- --------------------------------------------------------

--
-- Table structure for table `enrollment`
--

CREATE TABLE `enrollment` (
  `enrolID` int(10) UNSIGNED NOT NULL,
  `studentID` varchar(255) DEFAULT '',
  `term` int(10) NOT NULL DEFAULT 0,
  `enrolDate` datetime NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `enrollment`
--

INSERT INTO `enrollment` (`enrolID`, `studentID`, `term`, `enrolDate`) VALUES
(1, 'Adam-4MSRB5-0096', 2, '2023-05-01 00:00:00'),
(2, 'Adam-4MSRB5-0096', 3, '2023-06-21 00:00:00'),
(3, 'Adam-4MSRB5-0096', 4, '2023-08-10 00:00:00'),
(4, 'Hila-4MSGB1-0060', 2, '2023-05-18 00:00:00'),
(5, 'Hila-4MSGB1-0060', 3, '2023-06-14 00:00:00'),
(6, 'Hila-4MSGB1-0060', 4, '2023-08-13 00:00:00'),
(7, 'Rauf-4MSRB4-0090', 2, '2023-05-19 00:00:00'),
(8, 'Rauf-4MSRB4-0090', 3, '2023-06-22 00:00:00'),
(9, 'Rauf-4MSRB4-0090', 4, '2023-08-12 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `enrollment_level`
--

CREATE TABLE `enrollment_level` (
  `enrolLevelID` int(10) UNSIGNED NOT NULL,
  `enrolID` int(10) NOT NULL DEFAULT 0,
  `levelID` int(10) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `enrollment_level`
--

INSERT INTO `enrollment_level` (`enrolLevelID`, `enrolID`, `levelID`) VALUES
(1, 1, 1),
(2, 1, 7),
(3, 1, 13),
(4, 2, 2),
(5, 2, 8),
(6, 2, 14),
(7, 3, 3),
(8, 3, 9),
(9, 3, 15),
(10, 4, 1),
(11, 4, 7),
(12, 4, 13),
(13, 5, 2),
(14, 5, 8),
(15, 5, 14),
(16, 6, 3),
(17, 6, 9),
(18, 6, 15),
(19, 7, 1),
(20, 7, 7),
(21, 7, 13),
(22, 8, 2),
(23, 8, 8),
(24, 8, 15),
(25, 9, 4),
(26, 9, 10),
(27, 9, 16);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `lesson`
--

CREATE TABLE `lesson` (
  `LessonID` int(255) NOT NULL,
  `LevelID` varchar(255) NOT NULL,
  `LessonName` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `lesson`
--

INSERT INTO `lesson` (`LessonID`, `LevelID`, `LessonName`) VALUES
(1, '1', 'Konsep Mengenai Cetakan'),
(2, '1', 'Topik 1: Celik Huruf / Kenal Huruf'),
(3, '1', 'Topik 2: Fonem / Fonemik & Fonetik'),
(4, '1', 'Topik 3: Kata Tunggal dan Bentuk Kata Tunggal'),
(5, '1', 'Topik 4: Asas Membaca Petikan Mengikut Pola Gabungan'),
(6, '2', 'Topik 1: Digraf'),
(7, '2', 'Topik 2: Diftong'),
(8, '2', 'Topik 3: Vokal Berganding & Vokal Bergabung'),
(9, '2', 'Topik 4: Pola Gabungan Perkataan'),
(10, '2', 'Topik 5: Asas Membaca Petikan Mengikut Pola Gabungan'),
(11, '2', 'Topik 6: Tanda Baca'),
(12, '2', 'Topik 7: Susun ayat'),
(13, '2', 'Topik 8: Bina ayat'),
(14, '3', 'Topik 1: Kata Nama'),
(15, '3', 'Topik 2: Kata Ganti Nama'),
(16, '3', 'Topik 3: Kata Kerja'),
(17, '3', 'Topik 4: Kata Adjektif'),
(18, '3', 'Topik 5: Kata Penyambung Ayat'),
(19, '3', 'Topik 6: Kata Praklausa'),
(20, '3', 'Topik 7: Kata Prafrasa / pascafrasa'),
(21, '3', 'Topik 8: Kata pascakata'),
(22, '3', 'Topik 9: Penjodoh Bilangan'),
(23, '4', 'Topik 1: Imbuhan Awalan'),
(24, '4', 'Topik 2: Imbuhan Awalan Pinjaman'),
(25, '4', 'Topik 3: Imbuhan Akhiran'),
(26, '4', 'Topik 4: Imbuhan Pinjaman Akhiran'),
(27, '4', 'Topik 5: Imbuhan Apitan'),
(28, '4', 'Topik 6: Imbuhan Sisipan'),
(29, '4', 'Topik 7: Kata Ganda / Penggandaan'),
(30, '4', 'Topik 8: Kata Majmuk / Pemajmukkan'),
(31, '5', 'Topik 1: Jenis Perkataan'),
(38, '5', 'Topik 2: Peribahasa'),
(39, '5', 'Topik 3: Pengenalan Sintaksis'),
(40, '5', 'Topik 4: Jenis Ayat'),
(41, '5', 'Topik 5: Frasa'),
(42, '5', 'Topik 6: Susunan Ayat'),
(43, '5', 'Topik 7: Ayat Cakap Ajuk & Cakap Pindah'),
(44, '5', 'Topik 8: Ayat Sama Maksud'),
(45, '5', 'Topik 9: Binaan / Tulis Rumusan & Ulasan'),
(46, '6', 'Topik 1: Penanda Wacana'),
(47, '6', 'Topik 2: Bina Ayat'),
(48, '6', 'Topik 3: Pemahaman'),
(49, '6', 'Topik 4: Kesalahan Ejaan'),
(50, '6', 'Topik 5: Kesalahan Tatabahasa'),
(51, '6', 'Topik 6: Penulisan Berformat'),
(52, '6', 'Topik 7: Penulisan Tidak Berformat'),
(53, '7', 'Phonological Awareness'),
(54, '7', 'Concept About Print'),
(55, '7', 'Lesson 1: Sound / Symbol Relationship'),
(56, '7', 'Lesson 2'),
(57, '7', 'Lesson 3: CVC (Short Vowel Sounds)'),
(58, '7', 'Lesson 4: Syllabification and Spelling of Short/Long Vowels'),
(59, '7', 'Lesson 5'),
(60, '7', 'Lesson 6'),
(61, '7', 'Lesson 7'),
(62, '7', 'Lesson 8: Initial consonant blend'),
(63, '7', 'Lesson 9: \"Y\" as a vowel and a consonant'),
(64, '7', 'Lesson 10: Tricky words / Sight words'),
(65, '7', 'Lesson 11: Listening Comprehension'),
(66, '7', 'Lesson 12: Grammar, Punctuation and Spelling'),
(67, '8', 'Lesson 1: Doublets: Words with ff, ll, ss, zz'),
(68, '8', 'Lesson 2: End Consonants'),
(69, '8', 'Lesson 3'),
(70, '8', 'Lesson 4'),
(71, '8', 'Lesson 5'),
(72, '8', 'Lesson 6'),
(73, '8', 'Lesson 7'),
(74, '8', 'Lesson 8: Suffixes (Tails) 1'),
(75, '8', 'Lesson 9: Initial consonant blend'),
(76, '8', 'Lesson 10: ee, aa'),
(77, '8', 'Lesson 11: Tricky words / Sight words'),
(78, '8', 'Lesson 12: Magic e (a-e, i-e, o-e, u-e)'),
(79, '8', 'Lesson 13'),
(80, '8', 'Lesson 14'),
(81, '8', 'Lesson 15: ai ay'),
(82, '8', 'Lesson 16: igh, ie, y'),
(83, '8', 'Lesson 17: oa, ow, oe'),
(84, '8', 'Lesson 18: oo'),
(85, '8', 'Lesson 19: tch'),
(86, '8', 'Lesson 20: ar, or, ir, ur (two syllables)'),
(87, '8', 'Lesson 21: Sight / Tricky words'),
(88, '8', 'Lesson 22: Reading Comprehension'),
(89, '8', 'Lesson 23: Grammar, Punctuation and Spelling'),
(90, '9', 'Lesson 1: Triple Consonants'),
(91, '9', 'Lesson 2: Consonant blends (2 syllables)'),
(92, '9', 'Lesson 3: Vowel Teams (2 syllables)'),
(93, '9', 'Lesson 4: Open syllables (2 syllables)'),
(94, '9', 'Lesson 5: Magic e (2 syllables)'),
(95, '9', 'Lesson 6: -ed'),
(96, '9', 'Lesson 7: ui, ue, ew'),
(97, '9', 'Lesson 8: oi, oy'),
(98, '9', 'Lesson 9: ou, ow'),
(99, '9', 'Lesson 10: Sight / Tricky words'),
(100, '9', 'Lesson 11: ph/f'),
(101, '9', 'Lesson 12: dge/j'),
(102, '9', 'Lesson 13: Heads (Prefixes)'),
(103, '9', 'Lesson 14: Suffixes (Tails) 2'),
(104, '9', 'Lesson 15: Doubling (suffixing)'),
(105, '9', 'Lesson 16: Vowel -rr'),
(106, '9', 'Lesson 17: -le'),
(107, '9', 'Lesson 18: ear, air'),
(108, '9', 'Lesson 19: au, aw'),
(109, '9', 'Lesson 20: Sight / Tricky words'),
(110, '9', 'Lesson 21: Reading comprehension'),
(111, '9', 'Lesson 22: Fluency'),
(112, '9', 'Lesson 23: Grammar, Punctuation and Spelling'),
(113, '10', 'Lesson 1: wa, wor, war'),
(114, '10', 'Lesson 2: Doubling -ed'),
(115, '10', 'Lesson 3: Silent Letters'),
(116, '10', 'Lesson 4: are, ire, ure'),
(117, '10', 'Lesson 5: o, as, /u/'),
(118, '10', 'Lesson 6: ce, se'),
(119, '10', 'Lesson 7: soft c & g'),
(120, '10', 'Lesson 8: Suffixes (Tails) 3'),
(121, '10', 'Lesson 9: Compound words'),
(122, '10', 'Lesson 10: Sight / Trick words'),
(123, '10', 'Lesson 11: \"y\" changes to \"i\"'),
(124, '10', 'Lesson 12: Links'),
(125, '10', 'Lesson 13: -tion, -sion, -cian'),
(126, '10', 'Lesson 14: qua, squa'),
(127, '10', 'Lesson 15: Advance Plurals'),
(128, '10', 'Lesson 16: ou, as, /u/'),
(129, '10', 'Lesson 17: ough, augh'),
(130, '10', 'Lesson 18: Split vowels'),
(131, '10', 'Lesson 19: A sound homophones'),
(132, '10', 'Lesson 20: Sight / Tricky words'),
(133, '10', 'Lesson 21: Decoding'),
(134, '10', 'Lesson 22: Reading Comprehension'),
(135, '10', 'Lesson 23: Spelling'),
(136, '10', 'Lesson 24: Conventions & Grammers'),
(137, '11', 'Lesson 1: Sounds saying \"i\" (\"i\" sound homophones)'),
(138, '11', 'Lesson 2: Sounds saying \"o\" (\"o\" sound homophones)'),
(139, '11', 'Lesson 3: Sounds saying \"oo\" (\"u\" sound homophones)'),
(140, '11', 'Lesson 4: ie, ei'),
(141, '11', 'Lesson 5'),
(142, '11', 'Lesson 6: Soft \"c\" & \"g\" (3 syllables)'),
(143, '11', 'Lesson 7: Suffixes (Tails) 4'),
(144, '11', 'Lesson 8: Sight / Tricky words'),
(145, '11', 'Lesson 9: -al, -el'),
(146, '11', 'Lesson 10: Advance suffixing'),
(147, '11', 'Lesson 11'),
(148, '11', 'Lesson 12: Links (3 syllables)'),
(149, '11', 'Lesson 13: Suffixes (Tails) 5'),
(150, '11', 'Lesson 14: ch, as, k/sh'),
(151, '11', 'Lesson 15: ph (3 syllables)'),
(152, '11', 'Lesson 16'),
(153, '11', 'Lesson 17'),
(154, '11', 'Lesson 18: Sight / Tricky words'),
(155, '11', 'Lesson 19: Vocabulary'),
(156, '11', 'Lesson 20: Reading Comprehension'),
(157, '11', 'Lesson 21: Fluency'),
(158, '11', 'Lesson 22: Spelling'),
(159, '11', 'Lesson 23: Conventions and Grammer'),
(160, '11', 'Lesson 24: Composition'),
(161, '12', 'Lesson 1: Silent letters'),
(162, '12', 'Lesson 2: Suffix (Tails) 6'),
(163, '12', 'Lesson 3: ti, ci'),
(164, '12', 'Lesson 4: j choices'),
(165, '12', 'Lesson 5: eu'),
(166, '12', 'Lesson 6'),
(167, '12', 'Lesson 7: Assimilated prefixes'),
(168, '12', 'Lesson 8: Advanced prefixes'),
(169, '12', 'Lesson 9: Common misspelling'),
(170, '12', 'Lesson 10: Reading comprehension'),
(171, '12', 'Lesson 11: Fluency'),
(172, '12', 'Lesson 12: Spelling'),
(173, '12', 'Lesson 13: Conventions and Grammer'),
(174, '12', 'Lesson 14: Composition'),
(175, '13', 'Topic / Topik 1: Early Number Sense / Kepekaan asas nombor'),
(176, '13', 'Topic / Topik 1: Early Number Sense / Kepekaan asas nombor'),
(177, '13', 'Topic / Topik 2: Number, Place & Digit Value / Nombor, Nilai Tempat & Digit'),
(178, '13', 'Topic / Topik 3: Addition & Substraction / Tambah & Tolak'),
(179, '13', 'Topic / Topik 4: Number Sequencing / Turutan Nombor'),
(180, '13', 'Topic / Topik 5: Ascending & Descending Order Number / Susunan Nombor'),
(181, '13', 'Topic / Topik 6: Number Pattern / Pola Nombor'),
(182, '13', 'Topic / Topik 7: Round up Number / Bundarkan'),
(183, '14', 'Topic / Topik 1: Number, Place & Digit Value / Nombor, Nilai Tempat & Digit'),
(184, '14', 'Topic / Topik 2: Addition & Substraction / Tambah & Tolak'),
(185, '14', 'Topic / Topik 3: Number Sequencing / Turutan Nombor'),
(186, '14', 'Topic / Topik 4: Ascending & Descending Order Number / Susunan Nombor'),
(187, '14', 'Topic / Topik 5: Round up Number / Bundarkan'),
(188, '14', 'Topic / Topik 6: Multiplication / Darab'),
(189, '14', 'Topic / Topik 7: Division / Bahagi'),
(190, '14', 'Topic / Topik 8: Indices/Power and Roots / Kuasa dan Punca Kuasa'),
(191, '14', 'Topic / Topik 9: Mixed Operations / Operasi Bergabung'),
(192, '14', 'Topic / Topik 10: Time / Masa dan Waktu'),
(193, '15', 'Topic / Topik 1: Money / Wang'),
(194, '15', 'Topic / Topik 2: Fraction / Pecahan'),
(195, '15', 'Topic / Topik 3: Decimal / Perpuluhan'),
(196, '15', 'Topic / Topik 4: Percentage / Peratus'),
(197, '15', 'Topic / Topik 5: Fraction, Decimal and Percentage Conversion / Penukaran Pecahan, Perpuluhan & Peratus'),
(198, '16', 'Topic / Topik 1: Length Unit Conversion / Penukaran Unit Panjang'),
(199, '16', 'Topic / Topik 2: Weight Unit Conversion / Penukaran Unit Berat'),
(200, '16', 'Topic / Topik 3: Volume Unit Conversion / Penukaran Unit Isipadu'),
(201, '16', 'Topic / Topik 4: Statistics & Probability / Statistik & Kebarangkalian'),
(202, '16', 'Topic / Topik 5: Coordinates / Koordinat'),
(203, '16', 'Topic / Topic 6: Ratios & Proportions / Nisbah & Kadaran'),
(204, '16', 'Topic / Topik 7: Data Representation / Perwakilan Data'),
(205, '17', 'Topic / Topik 1: Relation and Algebra / Perkaitan dan Algebra'),
(206, '17', 'Topic / Topik 2: Shape & Space / Bentuk & Ruang'),
(207, '17', 'Topic / Topik 3: Perimeter'),
(208, '17', 'Topic / Topik 4: Calculation of Area of Objects / Pengiraan Luas Objek'),
(209, '18', 'Topic / Topik 1: Currency / Nilai Mata Wang'),
(210, '18', 'Topic / Topik 2: Problem Solving 1 / Penyelesaian Masalah 1'),
(211, '18', 'Topic / Topik 3: Problem Solving 2 / Penyelesaian Masalah 2'),
(212, '18', 'Topic / Topik 4: Problem Solving 3 / Penyelesaian Masalah 3');

-- --------------------------------------------------------

--
-- Table structure for table `lessonexam`
--

CREATE TABLE `lessonexam` (
  `LessonExamID` varchar(255) NOT NULL,
  `studentID` varchar(255) NOT NULL,
  `subjectID` varchar(255) NOT NULL,
  `LessonInvolve` varchar(255) NOT NULL,
  `score` float NOT NULL,
  `examDate` date NOT NULL,
  `semester` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `level`
--

CREATE TABLE `level` (
  `LevelID` int(11) NOT NULL,
  `SubjectID` varchar(255) NOT NULL,
  `LevelName` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `level`
--

INSERT INTO `level` (`LevelID`, `SubjectID`, `LevelName`) VALUES
(1, '1', 'Early Beginner'),
(2, '2', 'Beginner'),
(3, '3', 'Pre-Intermediate'),
(4, '4', 'Intermediate'),
(5, '5', 'Pre-Advance'),
(6, '6', 'Advance'),
(7, '7', 'Early Beginner'),
(8, '8', 'Beginner'),
(9, '9', 'Pre-Intermediate'),
(10, '10', 'Intermediate'),
(11, '11', 'Pre-Advance'),
(12, '12', 'Advance'),
(13, '13', 'Early Beginner'),
(14, '14', 'Beginner'),
(15, '15', 'Pre-Intermediate'),
(16, '16', 'Intermediate'),
(17, '17', 'Pre-Advance'),
(18, '18', 'Advance'),
(19, '19', 'Tahun 4'),
(20, '20', 'Tahun 5'),
(21, '21', 'Tahun 6'),
(22, '22', 'Tahun 4'),
(23, '23', 'Tahun 5'),
(24, '24', 'Tahun 6'),
(25, '25', 'Tahun 4'),
(26, '26', 'Tahun 5'),
(27, '27', 'Tahun 6'),
(28, '28', 'Tahun 4'),
(29, '29', 'Tahun 5'),
(30, '30', 'Tahun 6'),
(31, '31', 'Tahun 4'),
(32, '32', 'Tahun 5'),
(33, '33', 'Tahun 6'),
(34, '34', 'Tahun 4'),
(35, '35', 'Tahun 5'),
(36, '36', 'Tahun 6'),
(37, '37', 'Tahun 4'),
(38, '38', 'Tahun 5'),
(39, '39', 'Tahun 6'),
(40, '40', 'Form 1'),
(41, '41', 'Form 2'),
(42, '42', 'Form 3'),
(43, '43', 'Form 4'),
(44, '44', 'Form 5'),
(45, '45', 'Form 1'),
(46, '46', 'Form 2'),
(47, '47', 'Form 3'),
(48, '48', 'Form 4'),
(49, '49', 'Form 5'),
(50, '50', 'Form 1'),
(51, '51', 'Form 2'),
(52, '52', 'Form 3'),
(53, '53', 'Form 4'),
(54, '54', 'Form 5'),
(55, '55', 'Form 1'),
(56, '56', 'Form 2'),
(57, '57', 'Form 3'),
(58, '58', 'Form 4'),
(59, '59', 'Form 5'),
(60, '60', 'Form 1'),
(61, '61', 'Form 2'),
(62, '62', 'Form 3'),
(63, '63', 'Form 4'),
(64, '64', 'Form 5'),
(65, '65', 'Form 1'),
(66, '66', 'Form 2'),
(67, '67', 'Form 3'),
(68, '68', 'Form 4'),
(69, '69', 'Form 5'),
(70, '70', 'Form 1'),
(71, '71', 'Form 2'),
(72, '72', 'Form 3'),
(73, '73', 'Form 4'),
(74, '74', 'Form 5'),
(75, '75', 'Form 1'),
(76, '76', 'Form 2'),
(77, '77', 'Form 3'),
(78, '78', 'Form 4'),
(79, '79', 'Form 5');

-- --------------------------------------------------------

--
-- Table structure for table `levelexam`
--

CREATE TABLE `levelexam` (
  `LevelExamID` int(11) NOT NULL,
  `LevelID` varchar(255) NOT NULL,
  `studentID` varchar(255) NOT NULL,
  `semester` int(11) NOT NULL,
  `score` float NOT NULL,
  `examDate` date NOT NULL,
  `lessonInvolve` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(9, '2024_01_18_000502_add_role_to_users_table', 5),
(10, '2024_01_18_173045_roletable', 6),
(11, '2024_01_18_215741_add_roleid_to_users_table', 7),
(13, '2019_12_14_000001_create_personal_access_tokens_table', 8),
(14, '2023_12_07_233118_biowebclient', 8),
(15, '2024_01_14_182227_appointment', 8),
(16, '2024_01_14_233033_contactus', 8),
(17, '2024_01_21_151610_create_permission_tables', 8);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'App\\Models\\User', 11),
(3, 'App\\Models\\User', 12),
(3, 'App\\Models\\User', 13);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_reset_tokens`
--

INSERT INTO `password_reset_tokens` (`email`, `token`, `created_at`) VALUES
('adamyussof.marzuki@gmail.com', '$2y$12$uYGwfPbanNlKR6iWOeIPy.auxIrUsVRAyBT3u6gOfpp0hHLMoCUaK', '2024-01-16 09:20:40');

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `guard_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `guard_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'web', '2024-01-24 14:41:16', '2024-01-24 14:41:16'),
(2, 'teacher', 'web', '2024-01-24 14:41:16', '2024-01-24 14:41:16'),
(3, 'user', 'web', '2024-01-24 14:41:16', '2024-01-24 14:41:16');

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `StudentID` varchar(255) NOT NULL,
  `StudentPassword` varchar(255) NOT NULL,
  `StuName` varchar(255) NOT NULL,
  `StuDOB` date NOT NULL,
  `StuAddress` varchar(255) NOT NULL,
  `TeacherID` varchar(255) NOT NULL,
  `Branch` varchar(255) NOT NULL,
  `ParentName1` varchar(255) NOT NULL,
  `ParentContact1` varchar(255) NOT NULL,
  `ParentEmail1` varchar(255) NOT NULL,
  `ParentName2` varchar(255) NOT NULL,
  `ParentContact2` varchar(255) NOT NULL,
  `ParentEmail2` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `studentsubtopic`
--

CREATE TABLE `studentsubtopic` (
  `StudentProgressID` int(11) NOT NULL,
  `StudentID` varchar(255) NOT NULL,
  `TopicID` int(11) NOT NULL,
  `TeachDate` date NOT NULL,
  `LearnStatus` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `SubjectID` int(11) NOT NULL,
  `SubjectName` varchar(255) NOT NULL,
  `CourseID` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`SubjectID`, `SubjectName`, `CourseID`) VALUES
(1, 'Bahasa Malaysia', '1'),
(2, 'English', '1'),
(3, 'Mathematics', '1'),
(4, 'Bahasa Malaysia', '2'),
(5, 'English', '2'),
(6, 'Mathematics', '2'),
(7, 'Science', '2'),
(8, 'Pendidikan Islam', '2'),
(9, 'Pendidikan Moral', '2'),
(10, 'Pendidikan Seni', '2'),
(11, 'Bahasa Malaysia', '3'),
(12, 'English', '3'),
(13, 'Mathematics', '3'),
(14, 'Science', '3'),
(15, 'Sejarah', '3'),
(16, 'Geografi', '3'),
(17, 'Pendidikan Islam', '3'),
(18, 'Pendidikan Seni', '3');

-- --------------------------------------------------------

--
-- Table structure for table `subtopic`
--

CREATE TABLE `subtopic` (
  `topicID` int(11) NOT NULL,
  `LessonID` varchar(255) NOT NULL,
  `TopicName` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `subtopic`
--

INSERT INTO `subtopic` (`topicID`, `LessonID`, `TopicName`) VALUES
(1, '1', 'Kenal fungsi buku'),
(2, '1', 'Kenal fungsi buku'),
(3, '1', 'Kenal cara memegang buku dengan betul, kulit/muka depan buku, tajuk buku'),
(4, '1', 'Kenal mana gambar dan mana perkataan'),
(5, '1', 'boleh membaca dari kiri ke kanan, permulaan ayat dan penghujung cerita'),
(6, '1', 'kenal permulaan ayat  dan penghujung cerita'),
(7, '1', 'boleh bilangan ayat dalam satu muka surat'),
(8, '1', 'boleh membezakan perkataan, huruf dan ayat'),
(9, '2', 'Kenal huruf / susunan huruf'),
(10, '2', 'Kenal huruf besar'),
(11, '2', 'Kenal huruf kecil'),
(12, '2', 'Membezakan huruf besar dan huruf kecil'),
(13, '3', 'Mengenal dan membunyikan huruf Vokal (V) a, i, o, u,  e pepet, e taling,'),
(14, '3', 'Pembentukan tulisan huruf vokal menggunakan tangan (a, i, o, u,  e pepet, e taling)'),
(15, '3', 'Mengenal dan membunyikan huruf Konsonan (K) (Bb, Cc, Dd, Ff, Gg, Hh, Jj, Kk, Ll, Mm, Nn, Pp, Qq, Rr, Ss, Tt, Vv, Ww, Xx, Yy, Zz)'),
(16, '3', 'Pembentukan tulisan huruf konsonan menggunakan tangan (Bb, Cc, Dd, Ff, Gg, Hh, Jj, Kk, Ll, Mm, Nn, Pp, Qq, Rr, Ss, Tt, Vv, Ww, Xx, Yy, Zz)'),
(17, '3', 'Membezakan 8 bunyi huruf yang berbeza dengan Bahasa Inggeris'),
(18, '3', 'Dapat membunyikan huruf pertama dalam perkataan yang diberi'),
(19, '3', 'Dapat membunyikan huruf tengah dalam perkataan'),
(20, '3', 'Dapat membunyikan huruf akhir dalam perkataan'),
(21, '4', 'Menyebut dan mengeja kata tunggal  daripada satu suku kata'),
(22, '4', 'Menggabung, menyebut dan mengeja kata tunggal  daripada dua suku kata'),
(23, '4', 'Menggabung, menyebut dan mengeja kata tunggal daripada tiga suku kata'),
(24, '4', 'Menggabung, menyebut dan mengeja kata tunggal daripada empat suku kata dan selebihnya'),
(25, '5', 'Membaca petikan yang mempunyai gabungan pola perkataan daripada satu dan dua suku kata'),
(26, '5', 'Membaca petikan yang mempunyai gabungan pola perkataan daripada tiga, empat  dan selebinya suku kata'),
(27, '5', 'Membaca petikan pendek yang mempunyai semua pola gabungan'),
(28, '6', 'ng, ng+a, ng+i, ng+o, ng+u, ng+e pepet, ng+e taling'),
(29, '6', 'ny, ny+a, ny+i, ny+o, ny+u, ny+e pepet, ny+e taling'),
(30, '6', 'kh, kh+a, kh+i, kh+o, kh+u, kh+e pepet, kh+e taling'),
(31, '6', 'sy, sy+a, sy+i, sy+o, sy+u, sy+e pepet, sy+e taling'),
(32, '7', 'ai, au, oi'),
(33, '8', 'Vokal Berganding -ia, -uu, -ai, ua, io, ia'),
(34, '8', 'Vokal Bergabung -kr, st, bl, dr, br'),
(35, '9', 'ng, ny, kh, sy, ai, au, oi, -ia,-uu,-ai, ua,io, ia - kr, st, bl, dr, br'),
(36, '10', 'membaca petikan pendek yang mempunyai semua pola gabungan'),
(37, '11', 'Tanda noktah atau titik (.)'),
(38, '11', 'Tanda koma (,)'),
(39, '11', 'Tanda Soal (?)'),
(40, '11', 'Tanda sempang (-)'),
(41, '11', 'Tanda seru (!)'),
(42, '11', 'Mengenal Tanda titik bertindih (:)'),
(43, '11', 'Tanda koma bertitik (;)'),
(44, '11', '\"Tanda pengikat kata atau petikan (\"\"  \"\")\"'),
(45, '12', 'susun ayat  berdasarkan gambar'),
(46, '12', 'susun ayat berdasarkan perkataan yang diberikan'),
(47, '13', 'Bina ayat berdasarkan gambar'),
(48, '13', 'Bina ayat berdasarkan peta minda dan carta'),
(49, '13', 'Bina ayat berdasarkan perkataan yang diberikan'),
(50, '14', 'Kata Nama Am'),
(51, '14', 'Kata Nama Khas'),
(52, '15', 'Kata Ganti Nama Diri'),
(53, '15', 'Kata Ganti Nama Tunjuk'),
(54, '16', 'Kata Kerja Transitif'),
(55, '16', 'Kata Kerja Tak Transitif'),
(56, '17', 'Kata Adjektif Sifatan / keadaan'),
(57, '17', 'Kata Adjektif Warna'),
(58, '17', 'Kata Adjektif Ukuran'),
(59, '17', 'Kata Adjektif Bentuk'),
(60, '17', 'Kata Adjektif Waktu'),
(61, '17', 'Kata Adjektif Jarak'),
(62, '17', 'Kata Adjektif Cara'),
(63, '17', 'Kata Adjektif Perasaan'),
(64, '17', 'Kata Adjektif Pancaindera'),
(65, '18', 'Kata Hubungan Gabungan'),
(66, '18', 'Kata Hubungan Pancangan'),
(67, '19', 'Kata Seru'),
(68, '19', 'Kata Tanya'),
(69, '19', 'Kata Perintah'),
(70, '19', 'Kata Pembenar'),
(71, '19', 'Kata Pangkal Ayat'),
(72, '20', 'Kata Bantu'),
(73, '20', 'Kata Penguat'),
(74, '20', 'Kata Penegas'),
(75, '20', 'Kata Nafi'),
(76, '20', 'Kata Pemeri'),
(77, '20', 'Kata Sendi Nama'),
(78, '20', 'Kata Arah'),
(79, '20', 'Kata Bilangan'),
(80, '20', 'Kata Adverba'),
(81, '21', 'Kata Penekan'),
(82, '21', 'Kata Pembenda'),
(83, '22', 'Benda Bernyawa'),
(84, '22', 'Benda Tidak Bernyawa'),
(85, '22', 'Anggota Badan dan Ukuran'),
(86, '23', 'Awalan Kata Nama  PeN-'),
(87, '23', 'Awalan Kata Nama  PeR-'),
(88, '23', 'Awalan Kata Nama  ke-'),
(89, '23', 'Awalan Kata Kerja meN-'),
(90, '23', 'Awalan Kata Kerja beR-'),
(91, '23', 'Awalan Kata Kerja teR-'),
(92, '23', 'Awalan Kata Kerja di-'),
(93, '23', 'Awalan Kata Adjektif ter-'),
(94, '23', 'Awalan Kata Adjektif se-'),
(95, '24', 'Pinjaman Awalan Kata nama  juru-'),
(96, '24', 'Pinjaman Awalan daripada Sanskrit: maha-, tata-, pra-, swa-, tuna-, eka-, dwi-, tri-, panca-, pasca-'),
(97, '24', 'Pinjaman Awalan daripada Arab-Parsi: bi-'),
(98, '24', 'Pinjaman Awalan daripada Yunani-Latin-Inggeris: pro-, anti-, poli-, auto-, sub-, supra-'),
(99, '25', 'Akhiran Kata nama  -an'),
(100, '25', 'Akhiran Kata Kerja -kan'),
(101, '25', 'Akhiran Kata Kerja -i'),
(102, '26', 'Pinjaman Akhiran Sanskrit: -wan, -man, -wati, -nita'),
(103, '26', 'Pinjaman Akhiran Yunani-Latin-Inggeris: -ism, -ik, -si, -al, -is'),
(104, '27', 'Apitan  kata nama: pe-,,,,,,-an, pem- ,,,,,,,,-an, pen- ,,,,,,,,-an, peng- ,,,,,,,,-an, penge- ,,,,,,,,-an, per- ,,,,,,,,-an, pel- ,,,,,,,,-an, ke- ,,,,,,,,-an'),
(105, '27', 'Apitan Kata Kerja: me-,-kan, mem-,-kan, men-,-kan, meng-,-kan, menge-,-kan, ber-,-an, ber-,-kan, di-,-kan, me-,-i, mem-,-i, men-,-i, meng-,-i, menge-,-i, di-,-i, memper-,-kan, memper-,-i, ke-,-an, diper-,-kan, diper-,-i'),
(106, '27', 'Apitan Kata Adjektif: ke-,,,,,,,-an'),
(107, '28', 'Sisipan Kata Nama: el-, er-, em-'),
(108, '28', 'Sisipan Kata Adjektif: el-, er-, em-, im-'),
(109, '29', 'Penggandaan Penuh Tunggal'),
(110, '29', 'Penggandaan Separuh'),
(111, '29', 'Penggandaan Berentak Pengulangan vokal'),
(112, '29', 'Penggandaan Berentak Pengulangan konsonan'),
(113, '29', 'Penggandaan Berentak Pengulangan bebas'),
(114, '29', 'Penggandaan Penuh Kata Berimbuhan'),
(115, '29', 'Penggandaan Separa Kata Berimbuhan'),
(116, '30', 'Kata Majmuk bebas'),
(117, '30', 'Kata Majmuk Istilah Khusus'),
(118, '30', 'Kata Majmuk Kiasan/ Simpulan Bahasa'),
(119, '30', 'Kata Majmuk ( gandaan Kata Pertama)'),
(120, '30', 'Kata Majmuk Jamak'),
(121, '30', 'Kata Majmuk Berimbuhan'),
(122, '30', 'Kata Majmuk yang mantap'),
(123, '31', 'Sinonim'),
(124, '31', 'Antonim'),
(125, '31', 'Polisemi'),
(126, '31', 'Hiponim'),
(127, '32', 'Mengenal maksud dan kegunaan  Simpulan Bahasa'),
(128, '32', 'Mengenal maksud dan kegunaan  Perumpamaan'),
(129, '32', 'Mengenal maksud dan kegunaan  Bandingan'),
(130, '32', 'Mengenal maksud dan kegunaan  Pepatah'),
(131, '32', 'Mengenal maksud dan kegunaan  Bidalan'),
(132, '33', 'Pembahagian Subjek dan Predikat'),
(133, '33', 'Urutan Kata'),
(134, '33', 'Ragam Ayat'),
(135, '34', 'Ayat Tunggal'),
(136, '34', 'Ayat Penyata'),
(137, '34', 'Ayat Tanya'),
(138, '34', 'Ayat Perintah'),
(139, '34', 'Ayat Seruan'),
(140, '34', 'Ayat Majmuk'),
(141, '35', 'Frasa Nama'),
(142, '35', 'Frasa Kerja'),
(143, '35', 'Frasa Adjektif'),
(144, '35', 'Frasa Sendi Nama'),
(145, '35', 'Pola Ayat Dasar'),
(146, '36', 'Susunan Biasa'),
(147, '36', 'Susunan Songsang'),
(148, '37', 'Cakap Ajuk'),
(149, '37', 'Cakap Pindah'),
(150, '38', 'Teknik 3M'),
(151, '39', 'Tulis rumusan & ulasan berdasarkan  peta minda'),
(152, '39', 'Tulis rumusan & ulasan berdasarkan  isi penting'),
(153, '40', 'Penanda wacana sebagai perbandingan / perbezaan'),
(154, '40', 'Penanda wacana sebagai masa'),
(155, '40', 'Penanda wacana sebagai turutan'),
(156, '40', 'Penanda wacana sebagai rumusan / kesimpulanan'),
(157, '41', 'Bina 5 Ayat berdasarkan gambar, jadual, peti minda dan sebagainya'),
(158, '42', 'Baca petikan  dan jawap soalan'),
(159, '42', 'Menjawab soalan silang kata'),
(160, '43', 'Kesalahan huruf besar & huruf kecil'),
(161, '43', 'Kelainan vokal'),
(162, '43', 'Pinjaman bahasa Inggeris'),
(163, '43', 'Pinjaman bahasa Arab'),
(164, '43', 'Pinjaman bahasa Jawa'),
(165, '43', 'Bentuk bebas'),
(166, '43', 'Tanda sempang (-)'),
(167, '43', 'Dieja rapat atau tidak'),
(168, '43', 'Mengikut pola keselarasan  vokal'),
(169, '43', 'Kelainan konsonan'),
(170, '44', 'Kesalahan tatabahasa dari segi  golongan kata'),
(171, '44', 'Kesalahan tatabahasa dari segi  Frasa'),
(172, '44', 'Kesalahan tatabahasa dari segi  struktur kata'),
(173, '45', 'Surat Rasmi'),
(174, '45', 'Surat Tidak Rasmi'),
(175, '45', 'Dialog/Temu Ramah'),
(176, '45', 'Laporan'),
(177, '45', 'Berita'),
(178, '45', 'Catatan'),
(179, '45', 'Ucapan/Syarahan/Ceramah'),
(180, '46', 'Fakta'),
(181, '46', 'Keperihalan'),
(182, '46', 'Cerita'),
(183, '46', 'Peribahasa'),
(184, '46', 'Autobiografi/Biografi'),
(185, '46', 'Perbincangan/Perbahasan'),
(186, '47', 'Rhyming Recognition'),
(187, '47', 'Rhyming Production'),
(188, '47', 'Word Awareness'),
(189, '47', 'Syllable Awareness'),
(190, '47', 'Sound Identification'),
(191, '47', 'Sound Segmentation'),
(192, '47', 'Sound Blending'),
(193, '47', 'Deletion Task'),
(194, '48', 'Identify the front and back of the book'),
(195, '48', 'Point to the title of the book'),
(196, '48', 'Show teacher how to open the book and where to begin reading'),
(197, '48', 'Point to one letter'),
(198, '48', 'Point to one word'),
(199, '48', 'Point to the first letter in a sentence'),
(200, '48', 'Point to the last letter in a sentence'),
(201, '48', 'Show you what to do when you finish reading the last word on a page'),
(202, '49', 'Introducing Alphabets A-Z (Letter Name and Letter Sound)'),
(203, '49', 'Differentiating Phonic Sounds in the Alphabet between English and Bahasa Malaysia'),
(204, '49', 's, a, t, p'),
(205, '49', 'i, n, m, d'),
(206, '49', 'g, o, c, k'),
(207, '49', 'e, r, h, b'),
(208, '49', 'u, f, l, j'),
(209, '49', 'q, v, w, x, y, z'),
(210, '49', 'Vowels & Consonants'),
(211, '49', 'Isolate initial and final consonant sounds'),
(212, '49', 'Isolate initial and medial consonant sounds'),
(213, '50', 'b d discrimination'),
(214, '51', 'Read CVC words Example: cat, set, hit, rob, tub'),
(215, '51', 'cvc (with the vowel a)'),
(216, '51', 'cvc (with the vowel e)'),
(217, '51', 'cvc (with the vowel i)'),
(218, '51', 'cvc (with the vowel o)'),
(219, '51', 'cvc (with the vowel u)'),
(220, '51', 'cvc rhyming words Example: cab-lab, man-pan, gag-rag'),
(221, '52', 'Count and segment syllables in spoken words'),
(222, '52', 'Identify closed and open syllables'),
(223, '52', 'Distinguished long from short vowel sounds'),
(224, '52', 'Spell simple short vowel words. Short a, e, i, o, u. Example: ab, bed, drink, pod, nut. Spell simple long vowel words. Example: baby, be, pie, toe, rude'),
(225, '53', 'sh. Example: shin'),
(226, '54', 'ch. Example: chin'),
(227, '55', 'th. Example: thin, thong'),
(228, '55', 'Identify common consonant digraphs'),
(229, '55', 'th, f, v discrimination'),
(230, '56', 'CCVC Words with beginning consonant blends (1 syllable). Example: Crab'),
(231, '56', 'bl, cl, fl, gl, pl, sl'),
(232, '56', 'br, cr, dr, fr, gr, pr'),
(233, '56', 'sk, sm, sn, sp, st, sw'),
(234, '58', 'of, see, she, that, the, they, this, to, was, with'),
(235, '59', 'Able to make connections between a story and real life events'),
(236, '59', 'Able to answer questions about story'),
(237, '59', 'Recalls information about the story (e.g. plots, characters, beginning and ending)'),
(238, '59', 'Able to make predictions about story'),
(239, '59', 'Able to identify the correct sequence of stories'),
(240, '60', 'Introducing Punctuations'),
(241, '60', 'Understands that sentences begin with capital letters and end with punctuation'),
(242, '60', 'Identify a capital letter'),
(243, '60', 'Able to spell Sight/Tricky words'),
(244, '61', '-ff, -ll, -ss, -zz (rules)'),
(245, '62', 'Final consonant blends (three letters at the end of a word that make an unusual sound:'),
(246, '62', '-ing, -ong-, -ang. Example: going, lying, strong, barong, sprang, defang'),
(247, '62', '-ink, -unk, -ank. Example: wink, sink, skunk, flunk, bank, yank'),
(248, '62', '-ant, -ent, -end, -and. Example: want, plant, bent, tent, trend, amend, band, hand'),
(249, '62', '-ld, -lk, -lp, -lt. Example: cold, wild, elk, bulk, gulp, help, belt, bolt, halt'),
(250, '62', '-mp. Example: bump, damp, cramp'),
(251, '62', 'Read one syllable words ending in two consonant. Example: rack, twirl'),
(252, '63', 'c, k, ck discrimination'),
(253, '64', 'ar. Example: car'),
(254, '65', 'or. Example: horse'),
(255, '65', 'oor, ore. Example: door, floor, more, snore'),
(256, '66', 'er, ir, ur. Example: baker, bird, burn'),
(257, '67', 'CVC-CVC (two syllables)'),
(258, '67', 'Divide words into syllables. Example: napkin, basket, kitten'),
(259, '67', 'Spell simple short vowel words. Short a, e, i, o, u. Example: ab, bed, drink, pod, nut. Spell simple long vowel words. Example: baby, be, pie, toe, rude'),
(260, '68', 'Split words into body-tail (root-suffix)'),
(261, '68', 'Suffix Plurals -s, -es'),
(262, '68', '-ing. Example: helping, wanting'),
(263, '68', '-y (as /e/). Example: likely, lovely'),
(264, '51', 'Read CVC words Example: cat, set, hit, rob, tub'),
(265, '51', 'cvc (with the vowel a)'),
(266, '51', 'cvc (with the vowel e)'),
(267, '51', 'cvc (with the vowel i)'),
(268, '51', 'cvc (with the vowel o)'),
(269, '51', 'cvc (with the vowel u)'),
(270, '51', 'cvc rhyming words Example: cab-lab, man-pan, gag-rag'),
(271, '52', 'Count and segment syllables in spoken words'),
(272, '52', 'Identify closed and open syllables'),
(273, '52', 'Distinguished long from short vowel sounds'),
(274, '52', 'Spell simple short vowel words. Short a, e, i, o, u. Example: ab, bed, drink, pod, nut. Spell simple long vowel words. Example: baby, be, pie, toe, rude'),
(275, '53', 'sh. Example: shin'),
(276, '54', 'ch. Example: chin'),
(277, '55', 'th. Example: thin, thong'),
(278, '55', 'Identify common consonant digraphs'),
(279, '55', 'th, f, v discrimination'),
(280, '56', 'CCVC Words with beginning consonant blends (1 syllable). Example: Crab'),
(281, '56', 'bl, cl, fl, gl, pl, sl'),
(282, '56', 'br, cr, dr, fr, gr, pr'),
(283, '56', 'sk, sm, sn, sp, st, sw'),
(284, '57', '\"y\" makes three sounds - sometimes \"y\" says: yogurt \"y\", - sometimes \"y\" says: bunny \"e\", - sometimes \"y\" says: dry \"i\"'),
(285, '58', 'of, see, she, that, the, they, this, to, was, with'),
(286, '59', 'Able to make connections between a story and real life events'),
(287, '59', 'Able to answer questions about story'),
(288, '59', 'Recalls information about the story (e.g. plots, characters, beginning and ending)'),
(289, '59', 'Able to make predictions about story'),
(290, '59', 'Able to identify the correct sequence of stories'),
(291, '60', 'Introducing Punctuations'),
(292, '60', 'Understands that sentences begin with capital letters and end with punctuation'),
(293, '60', 'Identify a capital letter'),
(294, '60', 'Able to spell Sight/Tricky words'),
(295, '61', '-ff, -ll, -ss, -zz (rules)'),
(296, '62', 'Final consonant blends (three letters at the end of a word that make an unusual sound:'),
(297, '62', '-ing, -ong-, -ang. Example: going, lying, strong, barong, sprang, defang'),
(298, '62', '-ink, -unk, -ank. Example: wink, sink, skunk, flunk, bank, yank'),
(299, '62', '-ant, -ent, -end, -and. Example: want, plant, bent, tent, trend, amend, band, hand'),
(300, '62', '-ld, -lk, -lp, -lt. Example: cold, wild, elk, bulk, gulp, help, belt, bolt, halt'),
(301, '62', '-mp. Example: bump, damp, cramp'),
(302, '62', 'Read one syllable words ending in two consonant. Example: rack, twirl'),
(303, '63', 'c, k, ck discrimination'),
(304, '64', 'ar. Example: car'),
(305, '65', 'or. Example: horse'),
(306, '65', 'oor, ore. Example: door, floor, more, snore'),
(307, '66', 'er, ir, ur. Example: baker, bird, burn'),
(308, '67', 'CVC-CVC (two syllables)'),
(309, '67', 'Divide words into syllables. Example: napkin, basket, kitten'),
(310, '67', 'Spell simple short vowel words. Short a, e, i, o, u. Example: ab, bed, drink, pod, nut. Spell simple long vowel words. Example: baby, be, pie, toe, rude'),
(311, '68', 'Split words into body-tail (root-suffix)'),
(312, '68', 'Suffix Plurals -s, -es'),
(313, '68', '-ing. Example: helping, wanting'),
(314, '68', '-y (as /e/). Example: likely, lovely'),
(315, '68', '-er. Example: helper, catcher'),
(316, '69', 'CCVC Words with beginning consonant blends (1 syllable). Example: Crab'),
(317, '69', 'bl, cl, fl, gl, pl, sl'),
(318, '69', 'br, cr, dr, fr, gr, pr'),
(319, '69', 'sk, sm, sn, sp, st, sw'),
(320, '70', 'ee (as in tree)'),
(321, '71', 'all, are, for, have, her, more, one, said, went, you'),
(322, '72', 'Example: rake, wire, zone, pure'),
(323, '73', 'Soft c & soft g'),
(324, '73', 'ce'),
(325, '73', 'ge'),
(326, '74', 'wh qu. Example: whale, queen'),
(327, '75', 'Know that two vowels together make one sound'),
(328, '75', 'ai. Example: rain'),
(329, '75', 'ay. Example: play'),
(330, '76', 'igh (as in high)'),
(331, '76', 'ie (as in tie)'),
(332, '76', 'y (as in sky)'),
(333, '58', 'of, see, she, that, the, they, this, to, was, with'),
(334, '59', 'Able to make connections between a story and real life events'),
(335, '59', 'Able to answer questions about story'),
(336, '59', 'Recalls information about the story (e.g. plots, characters, beginning and ending)'),
(337, '59', 'Able to make predictions about story'),
(338, '59', 'Able to identify the correct sequence of stories'),
(339, '60', 'Introducing Punctuations'),
(340, '60', 'Understands that sentences begin with capital letters and end with punctuation'),
(341, '60', 'Identify a capital letter'),
(342, '60', 'Able to spell Sight/Tricky words'),
(343, '61', '-ff, -ll, -ss, -zz (rules)'),
(344, '62', 'Final consonant blends (three letters at the end of a word that make an unusual sound:'),
(345, '62', '-ing, -ong-, -ang. Example: going, lying, strong, barong, sprang, defang'),
(346, '62', '-ink, -unk, -ank. Example: wink, sink, skunk, flunk, bank, yank'),
(347, '62', '-ant, -ent, -end, -and. Example: want, plant, bent, tent, trend, amend, band, hand'),
(348, '62', '-ld, -lk, -lp, -lt. Example: cold, wild, elk, bulk, gulp, help, belt, bolt, halt'),
(349, '62', '-mp. Example: bump, damp, cramp'),
(350, '62', 'Read one syllable words ending in two consonant. Example: rack, twirl'),
(351, '63', 'c, k, ck discrimination'),
(352, '64', 'ar. Example: car'),
(353, '65', 'or. Example: horse'),
(354, '65', 'oor, ore. Example: door, floor, more, snore'),
(355, '66', 'er, ir, ur. Example: baker, bird, burn'),
(356, '67', 'CVC-CVC (two syllables)'),
(357, '67', 'Divide words into syllables. Example: napkin, basket, kitten'),
(358, '67', 'Spell simple short vowel words. Short a, e, i, o, u. Example: ab, bed, drink, pod, nut. Spell simple long vowel words. Example: baby, be, pie, toe, rude'),
(359, '68', 'Split words into body-tail (root-suffix)'),
(360, '68', 'Suffix Plurals -s, -es'),
(361, '68', '-ing. Example: helping, wanting'),
(362, '68', '-y (as /e/). Example: likely, lovely'),
(363, '68', '-er. Example: helper, catcher'),
(364, '69', 'CCVC Words with beginning consonant blends (1 syllable). Example: Crab'),
(365, '69', 'bl, cl, fl, gl, pl, sl'),
(366, '69', 'br, cr, dr, fr, gr, pr'),
(367, '69', 'sk, sm, sn, sp, st, sw'),
(368, '70', '(vowel teams that make the long \"e\" sound)'),
(369, '70', 'ee (as in tree)'),
(370, '70', 'ea (as in eat) -vowel teams that make the long \"e\" sound'),
(371, '70', 'ea (as in bread) - vowel teams that make the short \"a\" sound'),
(372, '71', 'all, are, for, have, her, more, one, said, went, you'),
(373, '72', 'Example: rake, wire, zone, pure'),
(374, '73', 'Soft c & soft g'),
(375, '73', 'ce'),
(376, '73', 'ge'),
(377, '74', 'wh qu. Example: whale, queen'),
(378, '75', 'Know that two vowels together make one sound'),
(379, '75', 'ai. Example: rain'),
(380, '75', 'ay. Example: play'),
(381, '76', 'igh (as in high)'),
(382, '76', 'ie (as in tie)'),
(383, '76', 'y (as in sky)'),
(384, '77', 'Example: coat, tow, toe'),
(385, '77', 'oa (as in coat)'),
(386, '77', 'ow (as in tow)'),
(387, '77', 'oe (as in toe)'),
(388, '78', 'oo (as in moon)'),
(389, '78', 'oo (as in wood)'),
(390, '79', 'tch -is spelled after a single short vowel. Example: match, fetch'),
(391, '80', 'Vowel -r (two syllables) spelling. Example: garden, morning, confirm, purple'),
(392, '81', 'too, some, here, girl, first, down, do, come, bird, before'),
(393, '71', 'all, are, for, have, her, more, one, said, went, you'),
(394, '72', 'Example: rake, wire, zone, pure'),
(395, '73', 'Soft c & soft g'),
(396, '73', 'ce'),
(397, '73', 'ge'),
(398, '74', 'wh qu. Example: whale, queen'),
(399, '75', 'Know that two vowels together make one sound'),
(400, '75', 'ai. Example: rain'),
(401, '75', 'ay. Example: play'),
(402, '76', 'igh (as in high)'),
(403, '76', 'ie (as in tie)'),
(404, '76', 'y (as in sky)'),
(405, '77', 'Example: coat, tow, toe'),
(406, '77', 'oa (as in coat)'),
(407, '77', 'ow (as in tow)'),
(408, '77', 'oe (as in toe)'),
(409, '78', 'oo (as in moon)'),
(410, '78', 'oo (as in wood)'),
(411, '79', 'tch -is spelled after a single short vowel. Example: match, fetch'),
(412, '80', 'Vowel -r (two syllables) spelling. Example: garden, morning, confirm, purple'),
(413, '81', 'too, some, here, girl, first, down, do, come, bird, before'),
(414, '82', 'Understanding context clues (hints found in sentences that reader can use to understand the meaning of words they don\'t understand)'),
(415, '82', 'Can make connections between background knowledge and text'),
(416, '82', 'Able to identify characters, setting and fact vs fiction.'),
(417, '82', 'Able to pick out the main idea'),
(418, '82', 'Able to read grade level connected text fluently (20-30 words per minute by middle of 1st grade; 60 words per minute by end of 1st grade)'),
(419, '83', 'Able to spell frequently used words. Example: Sight words'),
(420, '83', 'Able to spell 200 basic spelling words'),
(421, '83', 'Begins each sentence with capital letter and uses ending punctuations'),
(422, '83', 'Punctuation'),
(423, '83', 'Knows simple, commonly mispelled words (e.g. to/two/too)'),
(424, '83', 'Can distinguish between vowels and consonants'),
(425, '84', 'Blend triple consonant (ccc-vc). Example: scream, three, throw, split'),
(426, '85', 'Example: flaming, triple'),
(427, '86', 'Example: roadhouse, teaspoon, suitcase, cougar, courage'),
(428, '87', 'Example: equal, program, music'),
(429, '88', 'Example: wildlife, inhale, frostbite, invade'),
(430, '89', 'Understand words ending in -ed are in the past tense. Example: walked, loved, sprayed'),
(431, '89', '-ed has three sounds /t/d/id/'),
(432, '89', 'Words ending with -ed'),
(433, '89', 'Know when to spell ed, t, d'),
(434, '90', 'Example: Fruit, blue, blew'),
(435, '91', 'Example: coin, ploy, spoil, boy, voice, annoy'),
(436, '92', 'Example: mouse, town, house, crown, shout, powder, cow, out'),
(437, '93', 'could, only, their, there, want, where, what, which, who, your'),
(438, '94', 'Example: graph, elephant, photograph, dolphin'),
(439, '95', 'Example: bridge, dodge, judge, badge, porridge'),
(440, '96', 'un-, in-'),
(441, '96', 'ex-, ob-'),
(442, '96', 'ad-, ab-'),
(443, '96', 'de-, re-'),
(444, '96', 'pre-, per-'),
(445, '96', 'con-, com-'),
(446, '96', 'dis-, mis-'),
(447, '96', 'sub-, pro-'),
(448, '97', 'Split words into body-tail (suffix)'),
(449, '97', '-ly, -ty'),
(450, '97', '-ful, -ish'),
(451, '97', '-en, -et'),
(452, '98', 'Double the consonant when adding -ing. Example: stop-stopping, jog-jogging'),
(453, '98', 'Drop e when adding -ing. Example: hope-hoping, wire-wiring'),
(454, '99', 'A vowel makes a short sound before rr'),
(455, '100', 'Divide and read two syllable words ending in a consonant -le. Example: baffle, sniffle'),
(456, '100', '-al -el spelling. Example: animal, bridal, hazel, camel'),
(457, '101', 'ear (ear, fear, dear)'),
(458, '101', 'air (fair, pair, chair)'),
(459, '102', 'au (audio, pause)'),
(460, '102', 'aw (pawn, flaw)'),
(461, '103', 'ask, because, earth, little, once, our, people, saw, very, walked'),
(462, '104', 'Reads, paraphrases/retells a story in a sequence'),
(463, '104', 'Able to locate information to answer questions'),
(464, '104', 'Explains key elements of a story (e.g. main idea, main characters, plot)'),
(465, '104', 'Uses own experience to predict/justify what will happen in grade-level stories'),
(466, '104', '\"Answers \"\"what if\"\", \"\"how\"\" and \"\"why\"\" questions\"'),
(467, '104', 'Reads textual and functional material. ( Example: atlas, directions, recipe)'),
(468, '105', 'Reads grade level stories, poetry, or dramatic text silently and aloud with fluency'),
(469, '105', 'Reads spontaneously'),
(470, '105', 'Increases the number of sight/tricky words that are read accurately and quickly'),
(471, '106', 'Spells frequently used words correctly. Note: teacher monitor how easily student spells common or sight/tricky words correctly.'),
(472, '106', 'Capitalizes months, days of the week, proper nouns, locations, etc. correctly'),
(473, '106', 'Uses punctuation correctly (e.g. periods, question marks, exclamation points and quotation marks for dialogue)'),
(474, '106', 'Introduce Nouns, pronouns, and Verbs'),
(475, '107', 'a makes /o/ sound after w'),
(476, '107', 'ar makes /or/ sound after w'),
(477, '107', 'or makes /er/ sound after w'),
(478, '108', 'Doubling the consonant when adding -ed. Example: slip-slipped, sit-sitted, shop-shopped'),
(479, '108', 'Drop e when adding -ed. Example: love-loved, like-liked, bake-baked'),
(480, '109', 'Learn about silent letters'),
(481, '109', 'kn, wr'),
(482, '109', 'mb, gu'),
(483, '110', 'are (share, nightmare)'),
(484, '110', 'ire (hire, expire)'),
(485, '110', 'ure (capture, creature)'),
(486, '111', 'o makes the sound /u/ before v, n, th'),
(487, '112', 'Words ending in ce and se. Example: face, case'),
(488, '113', 'c followed by i, y, e has an /s/ sound (2 syllables). Example: excite, sincere, fancy'),
(489, '113', 'g followed by i, y, e has a /j/ sound (2 syllables). Example: ginger, gymnast, gentle'),
(490, '114', 'Split words into body-tail (suffix)'),
(491, '114', '-ment,  -est,  -some'),
(492, '114', '-less,  -ness'),
(493, '114', '-age'),
(494, '115', 'Join two words to make a compound word'),
(495, '115', 'Drop an l when joing all to another word'),
(496, '116', 'any, brother, does, every, know, many, money, month, other, write'),
(497, '117', 'y changes to i (suffixing) rule. Example: happy-happiness, battery-batteries'),
(498, '117', '-ies, -ied, -ier, -iest. Example: country-countries, carry-carried, noisy-noisier, crazy-craziest'),
(499, '118', 'An i that links two syllables makes the sound /e/'),
(500, '118', '-ion, -ior, -ium, -ious, -io. Example. section, senior, condominium, spacious, portfolio'),
(501, '119', 'ti and si making the sound /sh/'),
(502, '119', 'tion sion. Example: nation, television'),
(503, '119', 'a makes /o/ sound after qu'),
(504, '120', 'qua, squa. Example: quality, squad'),
(505, '121', 'Irregular plurals. Example: man-men, woman-women, child-children, foot-feet'),
(506, '121', '-f to -ves. Example: leaf to leaves'),
(507, '121', '-os -oes. Example: - os (radio-radios, patio-patios), -oes (potato-potatoes, echo-echoes, hero-heroes)'),
(508, '122', 'ou as /u/ . Example: couple, country, cousin, touch, southern'),
(509, '123', 'ough (bought, cough, rough, thought)'),
(510, '123', 'augh (laugh, caught, naughty)'),
(511, '124', 'Two vowels split to make separate sounds. Example: tri/umph, altru/istic, de/o/do/rant, ap/pre/ci/ate'),
(512, '121', 'Irregular plurals. Example: man-men, woman-women, child-children, foot-feet'),
(513, '121', '-f to -ves. Example: leaf to leaves'),
(514, '121', '-os -oes. Example: - os (radio-radios, patio-patios), -oes (potato-potatoes, echo-echoes, hero-heroes)'),
(515, '122', 'ou as /u/ . Example: couple, country, cousin, touch, southern'),
(516, '123', 'ough (bought, cough, rough, thought)'),
(517, '123', 'augh (laugh, caught, naughty)'),
(518, '124', 'Two vowels split to make separate sounds. Example: tri/umph, altru/istic, de/o/do/rant, ap/pre/ci/ate'),
(519, '125', 'Sounds saying A (Long \'a\' homophones) a-e, ai, ei,ea. Example: snake, paid, weight, break'),
(520, '126', 'again, birthday, brought, great, laugh, shoulder, straight, through, thought, young'),
(521, '127', '\"Recognizes more phonic patterns of decoding (e.g. magic \"e\" rule)\"'),
(522, '128', 'Predicts and justifies what will happen next in stories and draws conclusions'),
(523, '128', '\"Ask and answers \"\"why\"\" \"\"what if\"\" and \"\"how\"\" questions regarding reading material\"'),
(524, '129', 'Spells simple words correctly'),
(525, '129', 'Corrects most spelling independently'),
(526, '129', '\"Morphemic patterns (prefixex and suffixes such as \"mis-, -er, -ing\")\"'),
(527, '130', 'Uses commas in lists'),
(528, '130', 'Pluralizes irregular plurals (e.g. moose, teeth, feet, mice)'),
(529, '130', 'Identifying subject and predicate in a sentence'),
(530, '130', 'Identifies the verb(s) in a sentence'),
(531, '131', 'i-e, igh, y, ie'),
(532, '132', 'o-e, oa, ow, oe'),
(533, '133', 'u-e, oo, ew, ui, ue'),
(534, '134', 'Example: believe, ceiling'),
(535, '134', 'ee, ea, ie, ei, ey'),
(536, '135', 'ir ur (2 syllables)'),
(537, '136', 'c followed by i, y, e, has a /s/ sound (3 syllables)'),
(538, '136', 'g followed by i, y, e has a /j/sound (3 syllables)'),
(539, '137', 'Split words into body-tail (root-suffix)'),
(540, '137', '-ic ical'),
(541, '137', '-ily -ity'),
(542, '137', '-oon -ous'),
(543, '137', '-ture -sure'),
(544, '138', 'beautiful, believe, breath, clothes, friend, heart, piece, shoe, sure, water'),
(545, '139', '-al is used for adjectives. -el comes after m, n, u, r, v, w'),
(546, '140', 'Adding suffixes (3 syllables)'),
(547, '141', 'au (3 syllables)'),
(548, '142', 'An i that link two syllables makes the sound /e/'),
(549, '142', '-ia -iar -ian -ial'),
(550, '142', '-ion -ior -ious -ient -ience'),
(551, '143', 'Split words into body-tail (root-suffix)'),
(552, '143', '-ine'),
(553, '143', '-ant -ent'),
(554, '143', '-ite -ice'),
(555, '143', '-ive'),
(556, '143', '-able -ible'),
(557, '143', '-cy'),
(558, '144', 'The 3 sounds of ch'),
(559, '144', 'ch as /k/'),
(560, '144', 'ch as /sh/'),
(561, '145', 'Example: Alphabet, Elephant'),
(562, '146', 'que /k/'),
(563, '147', '-ly (suffix)'),
(564, '147', '-ly (multi syllables)'),
(565, '148', 'almost, always, beginning, busy, necessary, pretty, school, soldier, success, suggest'),
(566, '149', 'Understands prefixes, suffixes, and root words'),
(567, '149', 'Uses variety of synonyms and antonyms'),
(568, '150', 'Uses previously learned information to understand new material'),
(569, '126', 'again, birthday, brought, great, laugh, shoulder, straight, through, thought, young'),
(570, '128', 'Predicts and justifies what will happen next in stories and draws conclusions'),
(571, '128', 'Ask and answers \"why\" \"what if\" and \"how\" questions regarding reading material'),
(572, '129', 'Spells simple words correctly'),
(573, '129', 'Corrects most spelling independently'),
(574, '130', 'Uses commas in lists'),
(575, '130', 'Pluralizes irregular plurals (e.g. moose, teeth, feet, mice)'),
(576, '130', 'Identifying subject and predicate in a sentence'),
(577, '130', 'Identifies the verb(s) in a sentence'),
(578, '131', 'i-e, igh, y, ie'),
(579, '132', 'o-e, oa, ow, oe'),
(580, '133', 'u-e, oo, ew, ui, ue'),
(581, '134', 'Example: believe, ceiling'),
(582, '134', 'ee, ea, ie, ei, ey'),
(583, '135', 'ir ur (2 syllables)'),
(584, '136', 'c followed by i, y, e, has a /s/ sound (3 syllables)'),
(585, '136', 'g followed by i, y, e has a /j/sound (3 syllables)'),
(586, '137', 'Split words into body-tail (root-suffix)'),
(587, '137', '-ic ical'),
(588, '137', '-ily -ity'),
(589, '137', '-oon -ous'),
(590, '137', '-ture -sure'),
(591, '138', 'beautiful, believe, breath, clothes, friend, heart, piece, shoe, sure, water'),
(592, '139', '-al is used for adjectives. -el comes after m, n, u, r, v, w'),
(593, '140', 'Adding suffixes (3 syllables)'),
(594, '141', 'au (3 syllables)'),
(595, '142', 'An i that link two syllables makes the sound /e/'),
(596, '142', '-ia -iar -ian -ial'),
(597, '142', '-ion -ior -ious -ient -ience'),
(598, '143', 'Split words into body-tail (root-suffix)'),
(599, '143', '-ine'),
(600, '143', '-ant -ent'),
(601, '143', '-ite -ice'),
(602, '143', '-ive'),
(603, '143', '-able -ible'),
(604, '143', '-cy'),
(605, '144', 'The 3 sounds of ch'),
(606, '144', 'ch as /k/'),
(607, '144', 'ch as /sh/'),
(608, '145', 'Example: Alphabet, Elephant'),
(609, '146', 'que /k/'),
(610, '147', '-ly (suffix)'),
(611, '147', '-ly (multi syllables)'),
(612, '148', 'almost, always, beginning, busy, necessary, pretty, school, soldier, success, suggest'),
(613, '149', 'Understands prefixes, suffixes, and root words'),
(614, '149', 'Uses variety of synonyms and antonyms'),
(615, '150', 'Uses previously learned information to understand new material'),
(616, '126', 'again, birthday, brought, great, laugh, shoulder, straight, through, thought, young'),
(617, '128', 'Predicts and justifies what will happen next in stories and draws conclusions'),
(618, '128', 'Ask and answers \"why\" \"what if\" and \"how\" questions regarding reading material'),
(619, '129', 'Spells simple words correctly'),
(620, '129', 'Corrects most spelling independently'),
(621, '130', 'Uses commas in lists'),
(622, '130', 'Pluralizes irregular plurals (e.g. moose, teeth, feet, mice)'),
(623, '130', 'Identifying subject and predicate in a sentence'),
(624, '130', 'Identifies the verb(s) in a sentence'),
(625, '131', 'i-e, igh, y, ie'),
(626, '132', 'o-e, oa, ow, oe'),
(627, '133', 'u-e, oo, ew, ui, ue'),
(628, '134', 'Example: believe, ceiling'),
(629, '134', 'ee, ea, ie, ei, ey'),
(630, '135', 'ir ur (2 syllables)'),
(631, '136', 'c followed by i, y, e, has a /s/ sound (3 syllables)'),
(632, '136', 'g followed by i, y, e has a /j/sound (3 syllables)'),
(633, '137', 'Split words into body-tail (root-suffix)'),
(634, '137', '-ic ical'),
(635, '137', '-ily -ity'),
(636, '137', '-oon -ous'),
(637, '137', '-ture -sure'),
(638, '138', 'beautiful, believe, breath, clothes, friend, heart, piece, shoe, sure, water'),
(639, '139', '-al is used for adjectives. -el comes after m, n, u, r, v, w'),
(640, '140', 'Adding suffixes (3 syllables)'),
(641, '141', 'au (3 syllables)'),
(642, '142', 'An i that link two syllables makes the sound /e/'),
(643, '142', '-ia -iar -ian -ial'),
(644, '142', '-ion -ior -ious -ient -ience'),
(645, '143', 'Split words into body-tail (root-suffix)'),
(646, '143', '-ine'),
(647, '143', '-ant -ent'),
(648, '143', '-ite -ice'),
(649, '143', '-ive'),
(650, '143', '-able -ible'),
(651, '143', '-cy'),
(652, '144', 'The 3 sounds of ch'),
(653, '144', 'ch as /k/'),
(654, '144', 'ch as /sh/'),
(655, '145', 'Example: Alphabet, Elephant'),
(656, '146', 'que /k/'),
(657, '147', '-ly (suffix)'),
(658, '147', '-ly (multi syllables)'),
(659, '148', 'almost, always, beginning, busy, necessary, pretty, school, soldier, success, suggest'),
(660, '149', 'Understands prefixes, suffixes, and root words'),
(661, '149', 'Uses variety of synonyms and antonyms'),
(662, '150', 'Uses previously learned information to understand new material'),
(663, '126', 'again, birthday, brought, great, laugh, shoulder, straight, through, thought, young'),
(664, '127', 'Recognizes more phonic patterns of decoding (e.g. magic e rule)'),
(665, '128', 'Predicts and justifies what will happen next in stories and draws conclusions'),
(666, '128', 'Ask and answers \"why\" \"what if\" and \"how\" questions regarding reading material'),
(667, '129', 'Spells simple words correctly'),
(668, '129', 'Corrects most spelling independently'),
(669, '130', 'Uses commas in lists'),
(670, '130', 'Pluralizes irregular plurals (e.g. moose, teeth, feet, mice)'),
(671, '130', 'Identifying subject and predicate in a sentence'),
(672, '130', 'Identifies the verb(s) in a sentence'),
(673, '131', 'i-e, igh, y, ie'),
(674, '132', 'o-e, oa, ow, oe'),
(675, '133', 'u-e, oo, ew, ui, ue'),
(676, '134', 'Example: believe, ceiling'),
(677, '134', 'ee, ea, ie, ei, ey'),
(678, '135', 'ir ur (2 syllables)'),
(679, '136', 'c followed by i, y, e, has a /s/ sound (3 syllables)'),
(680, '136', 'g followed by i, y, e has a /j/sound (3 syllables)'),
(681, '137', 'Split words into body-tail (root-suffix)'),
(682, '137', '-ic ical'),
(683, '137', '-ily -ity'),
(684, '137', '-oon -ous'),
(685, '137', '-ture -sure'),
(686, '138', 'beautiful, believe, breath, clothes, friend, heart, piece, shoe, sure, water'),
(687, '139', '-al is used for adjectives. -el comes after m, n, u, r, v, w'),
(688, '140', 'Adding suffixes (3 syllables)'),
(689, '141', 'au (3 syllables)'),
(690, '142', 'An i that link two syllables makes the sound /e/'),
(691, '142', '-ia -iar -ian -ial'),
(692, '142', '-ion -ior -ious -ient -ience'),
(693, '143', 'Split words into body-tail (root-suffix)'),
(694, '143', '-ine'),
(695, '143', '-ant -ent'),
(696, '143', '-ite -ice'),
(697, '143', '-ive'),
(698, '143', '-able -ible'),
(699, '143', '-cy'),
(700, '144', 'The 3 sounds of ch'),
(701, '144', 'ch as /k/'),
(702, '144', 'ch as /sh/'),
(703, '145', 'Example: Alphabet, Elephant'),
(704, '146', 'que /k/'),
(705, '147', '-ly (suffix)'),
(706, '147', '-ly (multi syllables)'),
(707, '148', 'almost, always, beginning, busy, necessary, pretty, school, soldier, success, suggest'),
(708, '149', 'Understands prefixes, suffixes, and root words'),
(709, '149', 'Uses variety of synonyms and antonyms'),
(710, '150', 'Uses previously learned information to understand new material'),
(711, '126', 'again, birthday, brought, great, laugh, shoulder, straight, through, thought, young'),
(712, '127', 'Recognizes more phonic patterns of decoding (e.g. magic e rule)'),
(713, '128', 'Predicts and justifies what will happen next in stories and draws conclusions'),
(714, '128', 'Ask and answers \"why\" \"what if\" and \"how\" questions regarding reading material'),
(715, '129', 'Spells simple words correctly'),
(716, '129', 'Corrects most spelling independently'),
(717, '129', 'Morphemic patterns (prefixex and suffixes such as mis-, -er, -ing)'),
(718, '130', 'Uses commas in lists'),
(719, '130', 'Pluralizes irregular plurals (e.g. moose, teeth, feet, mice)'),
(720, '130', 'Identifying subject and predicate in a sentence'),
(721, '130', 'Identifies the verb(s) in a sentence'),
(722, '131', 'i-e, igh, y, ie'),
(723, '132', 'o-e, oa, ow, oe'),
(724, '133', 'u-e, oo, ew, ui, ue'),
(725, '134', 'Example: believe, ceiling'),
(726, '134', 'ee, ea, ie, ei, ey'),
(727, '135', 'ir ur (2 syllables)'),
(728, '136', 'c followed by i, y, e, has a /s/ sound (3 syllables)'),
(729, '136', 'g followed by i, y, e has a /j/sound (3 syllables)'),
(730, '137', 'Split words into body-tail (root-suffix)'),
(731, '137', '-ic ical'),
(732, '137', '-ily -ity'),
(733, '137', '-oon -ous'),
(734, '137', '-ture -sure'),
(735, '138', 'beautiful, believe, breath, clothes, friend, heart, piece, shoe, sure, water'),
(736, '139', '-al is used for adjectives. -el comes after m, n, u, r, v, w'),
(737, '140', 'Adding suffixes (3 syllables)'),
(738, '141', 'au (3 syllables)'),
(739, '142', 'An i that link two syllables makes the sound /e/'),
(740, '142', '-ia -iar -ian -ial'),
(741, '142', '-ion -ior -ious -ient -ience'),
(742, '143', 'Split words into body-tail (root-suffix)'),
(743, '143', '-ine'),
(744, '143', '-ant -ent'),
(745, '143', '-ite -ice'),
(746, '143', '-ive'),
(747, '143', '-able -ible'),
(748, '143', '-cy'),
(749, '144', 'The 3 sounds of ch'),
(750, '144', 'ch as /k/'),
(751, '144', 'ch as /sh/'),
(752, '145', 'Example: Alphabet, Elephant'),
(753, '146', 'que /k/'),
(754, '147', '-ly (suffix)'),
(755, '147', '-ly (multi syllables)'),
(756, '148', 'almost, always, beginning, busy, necessary, pretty, school, soldier, success, suggest'),
(757, '149', 'Understands prefixes, suffixes, and root words'),
(758, '149', 'Uses variety of synonyms and antonyms'),
(759, '150', 'Uses previously learned information to understand new material'),
(760, '126', 'again, birthday, brought, great, laugh, shoulder, straight, through, thought, young'),
(761, '127', 'Recognizes more phonic patterns of decoding (e.g. magic e rule)'),
(762, '128', 'Predicts and justifies what will happen next in stories and draws conclusions'),
(763, '128', 'Ask and answers \"why\" \"what if\" and \"how\" questions regarding reading material'),
(764, '129', 'Spells simple words correctly'),
(765, '129', 'Corrects most spelling independently'),
(766, '129', 'Morphemic patterns (prefixex and suffixes such as mis-, -er, -ing)'),
(767, '130', 'Uses commas in lists'),
(768, '130', 'Pluralizes irregular plurals (e.g. moose, teeth, feet, mice)'),
(769, '130', 'Identifying subject and predicate in a sentence'),
(770, '130', 'Identifies the verb(s) in a sentence'),
(771, '131', 'i-e, igh, y, ie'),
(772, '132', 'o-e, oa, ow, oe'),
(773, '133', 'u-e, oo, ew, ui, ue'),
(774, '134', 'Example: believe, ceiling'),
(775, '134', 'ee, ea, ie, ei, ey'),
(776, '135', 'ir ur (2 syllables)'),
(777, '136', 'c followed by i, y, e, has a /s/ sound (3 syllables)'),
(778, '136', 'g followed by i, y, e has a /j/sound (3 syllables)'),
(779, '137', 'Split words into body-tail (root-suffix)'),
(780, '137', '-ic ical'),
(781, '137', '-ily -ity'),
(782, '137', '-oon -ous'),
(783, '137', '-ture -sure'),
(784, '138', 'beautiful, believe, breath, clothes, friend, heart, piece, shoe, sure, water'),
(785, '139', '-al is used for adjectives. -el comes after m, n, u, r, v, w'),
(786, '140', 'Adding suffixes (3 syllables)'),
(787, '141', 'au (3 syllables)'),
(788, '142', 'An i that link two syllables makes the sound /e/'),
(789, '142', '-ia -iar -ian -ial'),
(790, '142', '-ion -ior -ious -ient -ience'),
(791, '143', 'Split words into body-tail (root-suffix)'),
(792, '143', '-ine'),
(793, '143', '-ant -ent'),
(794, '143', '-ite -ice'),
(795, '143', '-ive'),
(796, '143', '-able -ible'),
(797, '143', '-cy'),
(798, '144', 'The 3 sounds of ch'),
(799, '144', 'ch as /k/'),
(800, '144', 'ch as /sh/'),
(801, '145', 'Example: Alphabet, Elephant'),
(802, '146', 'que /k/'),
(803, '147', '-ly (suffix)'),
(804, '147', '-ly (multi syllables)'),
(805, '148', 'almost, always, beginning, busy, necessary, pretty, school, soldier, success, suggest'),
(806, '149', 'Understands prefixes, suffixes, and root words'),
(807, '149', 'Uses variety of synonyms and antonyms'),
(808, '150', 'Uses previously learned information to understand new material'),
(809, '126', 'again, birthday, brought, great, laugh, shoulder, straight, through, thought, young'),
(810, '127', 'Recognizes more phonic patterns of decoding (e.g. magic e rule)'),
(811, '128', 'Predicts and justifies what will happen next in stories and draws conclusions'),
(812, '128', 'Ask and answers \"why\" \"what if\" and \"how\" questions regarding reading material'),
(813, '129', 'Spells simple words correctly'),
(814, '129', 'Corrects most spelling independently'),
(815, '129', 'Morphemic patterns (prefixex and suffixes such as mis-, -er, -ing)'),
(816, '130', 'Uses commas in lists'),
(817, '130', 'Pluralizes irregular plurals (e.g. moose, teeth, feet, mice)'),
(818, '130', 'Identifying subject and predicate in a sentence'),
(819, '130', 'Identifies the verb(s) in a sentence'),
(820, '131', 'i-e, igh, y, ie'),
(821, '132', 'o-e, oa, ow, oe'),
(822, '133', 'u-e, oo, ew, ui, ue'),
(823, '134', 'Example: believe, ceiling'),
(824, '134', 'Sound saying E (\'e\' sound homophones)'),
(825, '134', 'ee, ea, ie, ei, ey'),
(826, '135', 'ir ur (2 syllables)'),
(827, '136', 'c followed by i, y, e, has a /s/ sound (3 syllables)'),
(828, '136', 'g followed by i, y, e has a /j/sound (3 syllables)'),
(829, '137', 'Split words into body-tail (root-suffix)'),
(830, '137', '-ic ical'),
(831, '137', '-ily -ity'),
(832, '137', '-oon -ous'),
(833, '137', '-ture -sure'),
(834, '138', 'beautiful, believe, breath, clothes, friend, heart, piece, shoe, sure, water'),
(835, '139', '-al is used for adjectives. -el comes after m, n, u, r, v, w'),
(836, '140', 'Adding suffixes (3 syllables)'),
(837, '141', 'au (3 syllables)'),
(838, '142', 'An i that link two syllables makes the sound /e/'),
(839, '142', '-ia -iar -ian -ial'),
(840, '142', '-ion -ior -ious -ient -ience'),
(841, '143', 'Split words into body-tail (root-suffix)'),
(842, '143', '-ine'),
(843, '143', '-ant -ent'),
(844, '143', '-ite -ice'),
(845, '143', '-ive'),
(846, '143', '-able -ible'),
(847, '143', '-cy'),
(848, '144', 'The 3 sounds of ch'),
(849, '144', 'ch as /k/'),
(850, '144', 'ch as /sh/'),
(851, '145', 'Example: Alphabet, Elephant'),
(852, '146', 'que /k/'),
(853, '147', '-ly (suffix)'),
(854, '147', '-ly (multi syllables)'),
(855, '148', 'almost, always, beginning, busy, necessary, pretty, school, soldier, success, suggest'),
(856, '149', 'Understands prefixes, suffixes, and root words'),
(857, '149', 'Uses variety of synonyms and antonyms'),
(858, '150', 'Uses previously learned information to understand new material'),
(859, '150', 'Follows written directions and understands sequence of events'),
(860, '150', 'Able to links information learned to different subjects'),
(861, '150', 'Uses reference materials (e.g., dictionary)'),
(862, '150', 'Explains the author’s purpose and writing style'),
(863, '150', 'Reads and understands different types of literature (e.g., fiction, nonfiction, historical fictions, short stories, and poetry'),
(864, '150', 'Compares and contrasts content read'),
(865, '150', 'Makes inferences from texts and determines fact from opinion'),
(866, '150', 'Takes brief notes, paraphrases content including main idea and details'),
(867, '150', 'Asks and answers questions'),
(868, '150', 'Self-monitors and problem solves when text is not understood: rereads, uses context clues, accesses prior knowledge'),
(869, '150', 'Uses text features for information (e.g., titles, headings, bold print, glossaries, index, table of contents, charts, tables)'),
(870, '150', 'Recognizes bias in writing and persuasive techniques in advertisements, newspaper editorials, speeches'),
(871, '151', 'Able to read grade-level books fluently, paying attention to punctuation'),
(872, '151', 'Adjusts reading speed and rate for specific purposes'),
(873, '152', 'Edits final drafts for spelling'),
(874, '152', 'Understands and uses spelling patterns (e.g., -ight pattern words)'),
(875, '152', 'Increases vocabulary of known spellings'),
(876, '152', 'Understands and uses common English spelling rules (e.g. suffix addition - hope + ing = hoping, hop+ing = hopping)'),
(877, '153', 'Edits final drafts for grammar and punctuation'),
(878, '153', 'Uses correct past tense of regular verbs and common irregular verbs (hoped, swung, was/were)'),
(879, '153', 'Correctly uses commonly confused words (e.g., their/they’re/there and its/it’s)'),
(880, '154', 'Writes effective stories and explanations, including several paragraphs about the same topic'),
(881, '154', 'Develops a plan for writing, including a beginning, middle, and end'),
(882, '154', 'Organizes writing to convey a central idea'),
(883, '154', 'Understands and implements the writing process, especially revision'),
(884, '155', 'Learn why some letters are silent'),
(885, '155', 'silent u, h'),
(886, '155', 'silent g, n, b'),
(887, '156', 'Split words into body-tail (root-suffix)'),
(888, '156', '-ance -ence'),
(889, '156', '-ate'),
(890, '156', '-ary -ory'),
(891, '156', 'ee, ea, ie, ei, ey'),
(892, '157', '-tious -cious'),
(893, '157', '-tial -cial'),
(894, '157', '-tient -cient - tience -cience'),
(895, '157', 'g followed by i, y, e has a /j/sound (3 syllables)'),
(896, '158', 'di, j, ge'),
(897, '159', 'eu/oo'),
(898, '160', 'y as a vowel'),
(899, '161', 'acc- add- ann- app- ass-'),
(900, '161', 'coll- comm- conn- diff- imm- occ-'),
(901, '162', 'anti- bi- co- trans-'),
(902, '163', 'Common misspelled words. Example: Apparent. Misspelled forms: apparant, aparent, apparrent, aparrent. Believe. Misspelled forms: belive, beleive. License. Misspelled forms: licence, lisence, license'),
(903, '164', 'Prioritizes information according to the main idea and purpose of reading'),
(904, '164', 'Able to read a variety of literary forms (including informational, functional, and literary texts)'),
(905, '164', 'Able to describe development of character and plot'),
(906, '164', 'Able to describe characteristics of poetry'),
(907, '164', 'Analyzes author’s language and style'),
(908, '164', 'Uses reference materials to support opinions'),
(909, '164', 'Able to identify sequence of events'),
(910, '164', 'Compares and contrasts stories'),
(911, '164', 'Predicts conclusion and justifies response'),
(912, '164', 'Identifies difference between fiction and nonfiction'),
(913, '164', 'Identifies persuasive techniques in written texts'),
(914, '165', 'Able to read grade-level books fluently'),
(915, '166', 'Spells possessives and contractions correctly'),
(916, '166', 'Spelling becomes increasingly conventional'),
(917, '167', 'Revises writing for clarity'),
(918, '167', 'Edits final copies of writing'),
(919, '167', 'Creates a complete sentence and identifies fragments'),
(920, '167', 'Uses abbreviations correctly (Mrs., Mr., St.)'),
(921, '167', 'Uses superlatives and comparatives correctly (biggest vs. most big)'),
(922, '168', 'Writes for a variety of purposes, with varied sentence structures, using vocabulary effectively within writing'),
(923, '168', 'Able to use simple similes, metaphors, and personification in writing'),
(924, '168', 'Uses more subordinate clauses, writes more consistently in literary style'),
(925, '168', 'Able to develop their own “voice” as a writer'),
(926, '169', 'Number Identification  / Pengenalan Nombor'),
(927, '169', 'Correspondence / Persamaan'),
(928, '169', 'Stable Order / Susunan yang stabil'),
(929, '169', 'Magnitude / Magnitud (semakin besar)'),
(930, '169', 'Cardinality / Kardinaliti'),
(931, '170', 'Ones & Tens / Sa & Puluh'),
(932, '170', 'Hundred &  Thousand / Ratus & Ribu'),
(933, '170', 'Number Formation (Ones) / Pembentukan Nombor (Sa)'),
(934, '170', 'Convert the number to words (ones, tens, hundred, & thousand) / menukar nombor kepada perkataan (satu, puluh, ratus, & ribu)'),
(935, '170', 'Convert the words to number (ones, tens, hundred, & thousand) / menukar perkataan kepada nombor (satu, puluh, ratus, & ribu)'),
(936, '171', 'Single digit  Addition and Substraction (line and column without regrouping) / Tambah dan Tolak digit tunggal (baris dan lajur tanpa mengumpul semula)'),
(937, '171', 'Add and subtract 2 digit (line and column without regrouping) / tambah dan tolak 2 digit (garis dan lajur tanpa mengumpul semula)'),
(938, '171', 'Add and subtract 3 digit (line and column without regrouping) / tambah dan tolak 3 digit (garis dan lajur tanpa mengumpul semula)'),
(939, '171', 'Add and subtract 4 digit (line and column without regrouping) / tambah dan tolak 4 digit (garis dan lajur tanpa mengumpul semula)'),
(940, '171', 'Add and subtract 2 digit (line and column with regrouping) / tambah dan tolak 2 digit (garis dan lajur dengan pengumpulan semula)'),
(941, '171', 'Add and subtract 3 digit (line and column with regrouping) / tambah dan tolak 3 digit (garis dan lajur dengan pengumpulan semula)'),
(942, '171', 'Add and subtract 4 digit (line and column with regrouping) / tambah dan tolak 4 digit (garis dan lajur dengan pengumpulan semula)'),
(943, '171', 'Number bond - ones, tens, hundred and thousand / Ikatan nombor - sa, puluh, ratus dan ribu');
INSERT INTO `subtopic` (`topicID`, `LessonID`, `TopicName`) VALUES
(944, '172', 'Ones, Tens, Hundred & Thousand / Sa, Puluh, Ratus & Ribu'),
(945, '173', 'Ascending (Ones & Tens) / Menaik ( Sa & Puluh)'),
(946, '173', 'Ascending (Hundred & Thousand ) / Menaik ( Ratus & Ribu)'),
(947, '173', 'Descending (Ones & Tens) / Menurun ( Sa & Puluh)'),
(948, '173', 'Descending (Hundred & Thousand ) / Menurun ( Ratus & Ribu)'),
(949, '174', 'Even and Odd Number / Nombor Genap dan Ganjil'),
(950, '174', 'Counting 2s, 3s, 5s, 10s / Mengira 2s, 3s, 5s, 10s'),
(951, '175', 'Rounding to the Nearest tens / Membundarkan kepada puluh terdekat'),
(952, '175', 'Rounding to the Nearest Hundred / Membundarkan kepada Ratus terdekat'),
(953, '175', 'Rounding to the Nearest Thousand / Membundarkan kepada Ribu terdekat'),
(954, '176', 'Ten Thousands, Hundred Thousand  & Millions / Puluh Ribu, Ratus Ribu & Juta'),
(955, '176', 'Convert the number to words (Thousands, Hundred Thousands  & Millions) / menukar nombor kepada perkataan (Puluh Ribu, Ratus Ribu & Juta)'),
(956, '176', 'Convert the words to number Thousands, Hundred Thousands  & Millions) / menukar perkataan kepada nombor (sPuluh Ribu, Ratus Ribu & Juta)'),
(957, '177', 'Add and subtract 5 digit (line and column without regrouping) / tambah dan tolak 5 digit (garis dan lajur tanpa mengumpul semula)'),
(958, '177', 'Add and subtract 6 digit (line and column without regrouping) / tambah dan tolak 6 digit (garis dan lajur tanpa mengumpul semula)'),
(959, '177', 'Add and subtract 7 digit (line and column without regrouping) / tambah dan tolak 7 digit (garis dan lajur tanpa mengumpul semula)'),
(960, '177', 'Add and subtract 5 digit (line and column with regrouping) / tambah dan tolak 5 digit (garis dan lajur dengan pengumpulan semula)'),
(961, '177', 'Add and subtract 6 digit (line and column with regrouping) / tambah dan tolak 6 digit (garis dan lajur dengan pengumpulan semula)'),
(962, '177', 'Add and subtract 7 digit (line and column with regrouping) / tambah dan tolak 7 digit (garis dan lajur dengan pengumpulan semula)'),
(963, '178', 'Thousands, Hundred Thousand  & Millions / Puluh Ribu, Ratus Ribu & Juta'),
(964, '179', 'Ascending (Thousands, Hundred Thousand  & Millions ) / Menaik ( Puluh Ribu, Ratus Ribu & Juta)'),
(965, '179', 'Descending (Thousands, Hundred Thousand  & Millions ) / Menurun ( Puluh Ribu, Ratus Ribu & Juta)'),
(966, '180', 'Rounding to the Nearest tens thousands / Membundarkan kepada puluh ribu terdekat'),
(967, '180', 'Rounding to the Nearest Hundred Thousands / Membundarkan kepada Ratus Ribu terdekat'),
(968, '180', 'Rounding to the Nearest Millions / Membundarkan kepada Juta terdekat'),
(969, '181', 'Timetable / Sifir'),
(970, '181', 'Multiple   2, 3, 4, 5, 6, & 7 digit  x 1 digit / Darab  2, 3, 4, 5, 6, & 7 digit x 1 digit'),
(971, '181', 'Multiple  2, 3, 4, 5, 6, & 7 digit  x 2 digit / Darab 2, 3, 4, 5, 6, & 7 digit  x 2 digit'),
(972, '181', 'Multiple  2, 3, 4, 5, 6, & 7 digit  x 3 digit / Darab 2, 3, 4, 5, 6, & 7 digit  x 3 digit'),
(973, '181', 'Multiple  2, 3, 4, 5, 6, & 7 digit  x 4 digit / Darab 2, 3, 4, 5, 6, & 7 digit  x 4 digit'),
(974, '181', 'Multiple  2, 3, 4, 5, 6, & 7 digit  x 5 digit / Darab 2, 3, 4, 5, 6, & 7 digit  x 5 digit'),
(975, '181', 'Multiple  2, 3, 4, 5, 6, & 7 digit  x 6 digit / Darab 2, 3, 4, 5, 6, & 7 digit  x 6 digit'),
(976, '181', 'Multiple  2, 3, 4, 5, 6, & 7 digit  x 7 digit / Darab 2, 3, 4, 5, 6, & 7 digit  x 7 digit'),
(977, '182', 'Division   2, 3, 4, 5, 6, & 7 digit  / 1 digit / Bahagi  2, 3, 4, 5, 6, & 7 digit / 1 digit'),
(978, '182', 'Division   2, 3, 4, 5, 6, & 7 digit  / 2 digit / Bahagi  2, 3, 4, 5, 6, & 7 digit / 2 digit'),
(979, '182', 'Division   2, 3, 4, 5, 6, & 7 digit  / 3 digit / Bahagi  2, 3, 4, 5, 6, & 7 digit / 3 digit'),
(980, '182', 'Division   2, 3, 4, 5, 6, & 7 digit  / 4 digit / Bahagi  2, 3, 4, 5, 6, & 7 digit / 4 digit'),
(981, '182', 'Division   2, 3, 4, 5, 6, & 7 digit  / 5 digit / Bahagi  2, 3, 4, 5, 6, & 7 digit / 5 digit'),
(982, '182', 'Division   2, 3, 4, 5, 6, & 7 digit  / 6 digit / Bahagi  2, 3, 4, 5, 6, & 7 digit / 6 digit'),
(983, '182', 'Division   2, 3, 4, 5, 6, & 7 digit  / 7 digit / Bahagi  2, 3, 4, 5, 6, & 7 digit / 7 digit'),
(984, '183', 'Indices/Power  / Kuasa'),
(985, '183', 'Roots / Punca Kuasa'),
(986, '184', 'Order of Operations - BIDMAS / BODMAS / Urutan Operasi - BIDMAS / BODMAS'),
(987, '184', '+  and - , count from left to right // + dan - , Kira dari kiri ke kanan'),
(988, '184', 'x  and ÷  , count from left to right // + dan ÷ , Kira dari kiri ke kanan'),
(989, '184', '+, -, x and ÷ , // +, -, x dan ÷ ,'),
(990, '184', '+, -, x, ÷ and ( ) //  +, -, x, ÷ dan ( )'),
(991, '185', 'Hour hand ( Short Hand) / Jam (Jarum Pendek)'),
(992, '185', 'Minute Hand ( Long Hand) / Minit (Jarum Panjang)'),
(993, '185', 'Second Hand / Saat Jarum'),
(994, '185', 'minutes in an Hour / Minit dalam Sejam'),
(995, '185', 'Seconds in a minute / Saat dalam Seminit'),
(996, '185', '12 Hour System / sistem 12 jam'),
(997, '185', '24 Hour System / sistem 24 jam'),
(998, '185', 'Addition (time) / Tambah (masa)'),
(999, '185', 'Substration (time) / Tolak (masa)'),
(1000, '185', 'Multiplication (time) / Darab (masa)'),
(1001, '185', 'Divide ( Time) / Bahagi (masa)'),
(1002, '185', 'Time in a day / Waktu dalam Sehari'),
(1003, '185', 'days in a week / Hari dalam Minggu'),
(1004, '185', 'Month in a Year / Bulan dalan setahun'),
(1005, '186', 'Recognize money based on its colour and value / Mengenal wang mengikut warna dan nilai mata wang'),
(1006, '186', 'The concept of buying and selling using original paper money / Konsep jual beli menggunakan wang kertas asli'),
(1007, '186', 'Recognize foreign money based on pictures / Mengenal wang asing berdasarkan gambar'),
(1008, '186', 'Payment instruments according to specific situations (credit card/debit card/cash/barter system) / Instrumen pembayaran mengikut situasi tertentu (kad kredit/kad debit/wang tunai/sistem barter)'),
(1009, '186', 'Addition (Money) / Tambah (wang)'),
(1010, '186', 'Substration (Money) / Tolak (wang)'),
(1011, '186', 'Multiplication (Money) / Darab (wang)'),
(1012, '186', 'Divide (Money) / Bahagi (wang)'),
(1013, '187', 'Proper fraction / Pecahan wajar'),
(1014, '187', 'Improper fraction / Pecahan tak wajar'),
(1015, '187', 'Mixed fraction / Pecahan bercampur'),
(1016, '187', 'Simplify the fraction to the simplest number / mempermudahkan pecahan kepada angka termudah'),
(1017, '187', 'Convert compound fractions to improper fractions / menukar pecahan bergabung kepada pecahan tak wajar'),
(1018, '187', 'Convert fractions to compound fractions / Penukar pecahan kepada pecahan bergabung'),
(1019, '187', 'Convert fractions to whole numbers / Penukar pecahan kepada nombor bulat'),
(1020, '187', 'Unit Fractions to Round Numbers / Pecahan Berunit Kepada Angka Bulat'),
(1021, '187', 'Addition in fractions / Kiraan tambah dalam pecahan'),
(1022, '187', 'Minus in fractions / Kiraan tolak dalam pecahan'),
(1023, '187', 'Multiplication in fractions / Kiraan darab dalam pecahan'),
(1024, '187', 'Division in fractions / Kiraan bahagi dalam pecahan'),
(1025, '188', 'Decimal Forms / Bentuk Angka Perpuluhan'),
(1026, '188', 'Addition Operation Decimal / Perpuluhan Operasi Tambah'),
(1027, '188', 'Decimal Subtraction Operation / Perpuluhan Operasi Tolak'),
(1028, '188', 'Multiplication Operations Decimals / Perpuluhan Operasi Darab'),
(1029, '188', 'Adding, Subtracting, Multiplying and Dividing Decimal Numbers / Menambah,Menolak,Mendarab dan Membahagi Angka Perpuluhan'),
(1030, '188', 'Place the decimal point correctly for the Final Calculation Result / Meletak titik perpuluhan dengan Betul Bagi Hasil Pengiraan Akhir'),
(1031, '189', 'Percent Symbol / Simbol Peratus'),
(1032, '189', 'Figures in the form of percentages / Angka Berbentuk Peratus'),
(1033, '189', 'Convert a Round Number to a Percentage / penukar Angka Bulat Kepada Peratus'),
(1034, '189', 'Convert percentage to whole number / penukar Angka peratus kepada nombor bulat'),
(1035, '189', 'Discounts, Dividends, and Profits / Mengira Diskaun/Dividend Dan Pulangan'),
(1036, '190', 'Converting a fraction to a percentage / Menguasai penukar pecahan kepada peratus'),
(1037, '190', 'Convert fraction to decimal / penukar pecahan kepada perpuluhan'),
(1038, '190', 'Convert decimal to fraction / penukar perpuluhan kepada pecahan'),
(1039, '190', 'Convert decimal to percentage / penukar perpuluhan kepada peratus'),
(1040, '190', 'Converting a percentage to a fraction / penukar angka peratus kepada pecahan'),
(1041, '190', 'Convert a percentage to a decimal number / penukar angka peratus kepada angka perpuluhan'),
(1042, '191', 'Kilometer unit (km) / Unit Kilometer (km)'),
(1043, '191', 'Meter unit (m) / Unit meter (m)'),
(1044, '191', 'Centimeter units (cm) / Unit centimeter (cm)'),
(1045, '191', 'Millimeter units (mm) / Unit millimeter (mm)'),
(1046, '191', 'Centimeter and Meter Formula / Formula Centimeter dan Meter'),
(1047, '191', 'Meter and Milimeter Formula / Formula Meter dan Milimeter'),
(1048, '191', 'Meter and Kilometer Formula / Formula Meter dan Kilometer'),
(1049, '192', 'Kg unit / Unit Kg'),
(1050, '192', 'g Unit / Unit g'),
(1051, '192', 'Kg to g Formula / Formula Kg ke g'),
(1052, '192', 'Converting Figures in Kg Units to Figures in g Units / Menukar Angka Berunit Kg Kepada Angka Beruni g'),
(1053, '192', 'Converting Figures in g Units to Figures in Kg Units / Menukar Angka Berunit g Kepada Angka Berunit Kg'),
(1054, '193', 'Liter (l) Unit / Unit Liter (l)'),
(1055, '193', 'Milliliter Unit (ml) / Unit Mililiter (ml)'),
(1056, '193', 'Liter to Milliliter Formula / Formula Liter ke Mililiter'),
(1057, '193', 'Convert Figures in Units of L to Figures in Units of mL / menukar Angka Berunit L kepada Angka berunit mL'),
(1058, '193', 'Convert a Number in Units mL to a Number in Units L / menukar Angka Berunit mL kepada Angka Berunit L'),
(1059, '194', 'Types of data / Jenis-jenis data'),
(1060, '194', 'disaggregation of data into common characteristics / Pengasingan data kepada ciri sepunya'),
(1061, '194', 'Mastering the calculation of data (gundalan) / Menguasai pengiraan data (gundalan)'),
(1062, '194', 'Calculate Mode / Mengira Mod'),
(1063, '194', 'Calculate the median / Mengira median'),
(1064, '194', 'Calculate the mean / Mengira min'),
(1065, '194', 'Calculate the range / Mengira julat'),
(1066, '195', 'Grid paper for drawing polygons / Kertas grid untuk melukis poligon'),
(1067, '195', 'Column and row line functions / Fungsi garis lajur dan baris'),
(1068, '195', 'Mengufuk dan mencancang'),
(1069, '195', '-x axis and -y axis / Paksi –x dan paksi –y'),
(1070, '195', 'The position of an object based on coordinates in a cartesian chart / Kedudukan suatu objek berdasarkan koordinat dalam carta cartesen'),
(1071, '195', 'Distance between coordinates / Mencari jarak diantara Koordinat'),
(1072, '196', 'Meaning of ratio / Erti kadaran'),
(1073, '196', 'Calculate the rate of a figure / Mengira kadar bagi satu rajah'),
(1074, '196', 'Calculations to find proportions / Pengiraan untuk mencari kadaran'),
(1075, '197', 'Data from Pictograph / Data dari Piktograf'),
(1076, '197', 'Types of pictographs / Jenis-jenis piktograf'),
(1077, '197', 'Bar chart / Carta palang'),
(1078, '197', 'Pie chart / Carta pai'),
(1079, '197', 'Interpreting Data / Mentafsir Data'),
(1080, '198', 'Cartesian chart form / Bentuk carta cartesan'),
(1081, '198', 'Know the x-axis and y-axis / Mengenal paksi x dan paksi y'),
(1082, '198', 'Label the axes using the correct letter / Melabel paksi menggunakan huruf yang betul'),
(1083, '198', 'Label each axis using the correct number based on the given table / Melabel setiap paksi menggunakan angka yang tepat berdasrkan jadual yang diberikan'),
(1084, '199', 'Types of polygons / Jenis-jenis poligon'),
(1085, '199', 'Draw the learned polygons / Melukis poligon yang telah dipelajari'),
(1086, '199', 'Types of angles in a polygon / Jenis-jenis sudut dalam poligon'),
(1087, '199', 'Types of parallel and perpendicular lines in polygons / Jenis garis selari dan garis serenjang dalam poligon'),
(1088, '199', 'Grid paper / Kertas grid'),
(1089, '200', 'Counting and Marking the Length of Each Side of an Object / Mengira dan Menanda Panjang Setiap Sisi Objek'),
(1090, '200', 'Calculating the Perimeter of an Object by Placing the Appropriate Units / Mengira Perimeter Suatu Objek Dengan Meletakkan Unit yang Sesuai'),
(1091, '201', 'Round area / Luas Bulat'),
(1092, '201', 'Area of a Rectangle / Luas Segi Empat'),
(1093, '201', 'Area of a Triangle / Luas Segi Tiga'),
(1094, '201', 'Cylinder Area / Luas Silinder'),
(1095, '201', 'Area of Prism / Luas Prisme'),
(1096, '202', 'Menenal mata wang asing'),
(1097, '202', 'Penukaran mata wang asing'),
(1098, '203', 'Soalan melibatkan daya penyelesaian masalah'),
(1099, '203', 'Dapat Mengeluarkan maklumat penting daripada soalan'),
(1100, '203', 'Dapat  melukis gambar rajah keatas maklumat yang telah dikeluarkan'),
(1101, '203', 'Mengesan Operasi matematik berdasarkan kata kunci dalam soalan'),
(1102, '203', 'Soalan Penyelesaian masalah dalam bentuk lazim'),
(1103, '203', 'Soalan Penyelesaian masalah  operasi tambah'),
(1104, '203', 'Soalan Penyelesaian masalah  operasi tolak'),
(1105, '203', 'Soalan Penyelesaian masalah operasi  darab'),
(1106, '203', 'Soalan Penyelesaian masalah  Operasi bahagi'),
(1107, '203', 'Soalan Penyelesaian masalah operasi bergabung'),
(1108, '204', 'Soalan Penyelesaian masalah  berkaitan masa'),
(1109, '204', 'Soalan Penyelesaian masalah  berkaitan   waktu'),
(1110, '204', 'Soalan Penyelesaian masalah  berkaitan   wang'),
(1111, '204', 'Soalan Penyelesaian masalah  berkaitan   wang asing'),
(1112, '204', 'Soalan Penyelesaian masalah  berkaitan   Pecahan'),
(1113, '204', 'Soalan Penyelesaian masalah  berkaitan   Perpuluhan'),
(1114, '204', 'Soalan Penyelesaian masalah  berkaitan   peratus'),
(1115, '204', 'Dapat melukis gambar rajah keatas maklumat yang telah dikeluarkan'),
(1116, '204', 'Dapat Mengesan Operasi Matematik berdasarkan kata kunci dalam soalan'),
(1117, '204', 'Soalan Penyelesaian masalah dalam bentuk lazim'),
(1118, '204', 'Soalan Penyelesaian masalah  berkaitan    statistik dan kebarangkalian'),
(1119, '204', 'Soalan Penyelesaian masalah  berkaitan    Koordinat'),
(1120, '204', 'Soalan Penyelesaian masalah  berkaitan  Nisbah & Kadaran'),
(1121, '205', 'Soalan Penyelesaian masalah  berkaitan Perwakilan Data'),
(1122, '205', 'Soalan Penyelesaian masalah  melibat5kan perkaitan dan Algebra'),
(1123, '205', 'Soalan Penyelesaian masalah  berkaitan Ruang'),
(1124, '205', 'Soalan Penyelesaian masalah  berkaitan Bentuk'),
(1125, '205', 'Soalan Penyelesaian masalah  berkaitan Perimeter'),
(1126, '205', 'Soalan Penyelesaian masalah  berkaitan pengiraan luas objek'),
(1127, '205', 'Mengetahui Bentuk Yang Ada Dalam Bentangan Prisma'),
(1128, '205', 'Mengetahui Panjang Setiap Sisi Bentangan Prisma'),
(1129, '205', 'Mengetahui Formula Pengiraan Luas Prisma'),
(1130, '205', 'Mengetahui Formula Pengiraan Luas Permukaan Segi Tiga'),
(1131, '205', 'Mengira Luas Segi Tiga'),
(1132, '205', 'Mengetahui Formula Pengiraan Luas Permukaan Segi Empat'),
(1133, '205', 'Mengira Luas Permukaan Segi Empat'),
(1134, '205', 'Menambah Luas Permukaan Segi Tiga dan Luas Permukaan Segi Empat');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `role` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `role`) VALUES
(11, 'Biowebadmin@hq', 'biodyslexiahq@gmail.com', NULL, '$2y$12$73Vx5924YfiBpTfBAHgaROF.RGIng9ngkRuRaI7EJ/o04y1iGBCCO', NULL, '2024-01-21 09:37:04', '2024-01-21 09:37:04', 'admin'),
(12, 'User', 'test@gmail.com', NULL, '$2y$12$2KxigsvWP1h.TM832k0wO.QvCieRiD0NjvSubMHFpDCnhJ0zBptzC', NULL, '2024-01-21 09:37:04', '2024-01-21 09:37:04', 'client'),
(13, 'Adam', 'adamyussof.marzuki@gmail.com', NULL, '$2y$12$O1Qc6N66VsbVyynz1IiefOL6Ka4P2BGHrkduIQZCGTQnQtPH1aITW', NULL, '2024-01-26 10:27:36', '2024-01-26 10:27:36', 'Teacher');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `attendance`
--
ALTER TABLE `attendance`
  ADD PRIMARY KEY (`attendanceID`);

--
-- Indexes for table `attendance_staff`
--
ALTER TABLE `attendance_staff`
  ADD PRIMARY KEY (`AttendID`);

--
-- Indexes for table `booking_table`
--
ALTER TABLE `booking_table`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `client_info`
--
ALTER TABLE `client_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `coheran`
--
ALTER TABLE `coheran`
  ADD PRIMARY KEY (`coheranID`);

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`courseID`);

--
-- Indexes for table `enrollment`
--
ALTER TABLE `enrollment`
  ADD PRIMARY KEY (`enrolID`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `lesson`
--
ALTER TABLE `lesson`
  ADD PRIMARY KEY (`LessonID`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`),
  ADD UNIQUE KEY `id_2` (`id`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `client_info`
--
ALTER TABLE `client_info`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
