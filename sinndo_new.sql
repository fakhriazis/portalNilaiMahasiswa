-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 31, 2023 at 09:48 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sinndo_new`
--

-- --------------------------------------------------------

--
-- Table structure for table `assessment`
--

CREATE TABLE `assessment` (
  `id_assessment` int(11) NOT NULL,
  `jenis_assessment` varchar(255) NOT NULL,
  `waktu` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `assessment`
--

INSERT INTO `assessment` (`id_assessment`, `jenis_assessment`, `waktu`) VALUES
(1, 'Tugas 1', '2023-07-27 21:02:58'),
(2, 'Topik 1 - 4', '2023-07-27 21:02:58'),
(3, 'Resume artikel', '2023-07-27 21:02:58'),
(4, 'Tugas 2', '2023-08-05 07:47:45'),
(5, 'Tugas 3', '2023-08-05 08:01:17'),
(6, 'Tubes alpro', '2023-08-08 11:40:21'),
(7, 'Kehadiran', '2023-08-08 11:40:56');

-- --------------------------------------------------------

--
-- Table structure for table `bobot`
--

CREATE TABLE `bobot` (
  `id_bobot` int(11) NOT NULL,
  `id_kelas` int(11) NOT NULL,
  `id_komponen` int(11) NOT NULL,
  `bobot` int(11) NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  `created_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bobot`
--

INSERT INTO `bobot` (`id_bobot`, `id_kelas`, `id_komponen`, `bobot`, `updated_at`, `created_at`) VALUES
(12, 4, 1, 20, '2023-11-15 10:41:22', '0000-00-00 00:00:00'),
(13, 4, 5, 30, '2023-11-15 10:28:54', '0000-00-00 00:00:00'),
(14, 4, 6, 50, '2023-11-15 10:41:22', '0000-00-00 00:00:00'),
(19, 6, 1, 20, '2023-11-15 10:52:24', NULL),
(20, 6, 2, 0, NULL, NULL),
(21, 6, 3, 0, NULL, NULL),
(22, 6, 4, 0, NULL, NULL),
(23, 6, 5, 25, '2023-11-15 10:56:19', NULL),
(24, 6, 6, 55, '2023-11-15 10:57:21', NULL),
(25, 7, 1, 20, '2023-11-13 08:18:18', NULL),
(26, 7, 2, 0, '2023-11-12 00:36:27', NULL),
(27, 7, 3, 0, '2023-11-12 00:36:27', NULL),
(28, 7, 4, 0, '2023-11-12 00:36:27', NULL),
(29, 7, 5, 35, '2023-11-15 09:04:56', NULL),
(30, 7, 6, 45, '2023-11-15 09:04:56', NULL),
(31, 4, 2, 0, NULL, NULL),
(32, 4, 3, 0, NULL, NULL),
(33, 4, 4, 0, NULL, NULL),
(34, 8, 1, 10, '2023-11-11 13:41:25', NULL),
(35, 8, 2, 10, '2023-11-11 10:09:24', NULL),
(36, 8, 3, 10, '2023-11-11 09:48:25', NULL),
(37, 8, 4, 20, '2023-11-11 13:47:32', NULL),
(38, 8, 5, 20, '2023-11-12 00:47:15', NULL),
(39, 8, 6, 30, '2023-11-12 00:47:15', NULL),
(64, 9, 1, 10, NULL, NULL),
(65, 9, 2, 10, NULL, NULL),
(66, 9, 3, 15, NULL, NULL),
(67, 9, 4, 15, NULL, NULL),
(68, 9, 5, 20, '2023-11-27 08:38:31', NULL),
(69, 9, 6, 30, '2023-11-27 08:38:31', NULL),
(70, 11, 1, 0, NULL, NULL),
(71, 11, 2, 0, NULL, NULL),
(72, 11, 3, 0, NULL, NULL),
(73, 11, 4, 0, NULL, NULL),
(74, 11, 5, 30, '2023-11-27 08:19:12', NULL),
(75, 11, 6, 70, '2023-11-27 08:19:12', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `bukti`
--

CREATE TABLE `bukti` (
  `id_bukti` int(11) NOT NULL,
  `nama_bukti` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bukti`
--

INSERT INTO `bukti` (`id_bukti`, `nama_bukti`) VALUES
(1, 'presentasi'),
(2, 'artikel Ilmiah'),
(3, 'tubes_proyek'),
(4, 'praktikum'),
(5, 'ujian_essay'),
(6, 'ujian_lisan'),
(7, 'ujian_pilihan_ganda'),
(8, 'ujian_jawaban_singkat');

-- --------------------------------------------------------

--
-- Stand-in structure for view `dashboard`
-- (See below for the actual view)
--
CREATE TABLE `dashboard` (
`id_semester` int(11)
,`semester` varchar(255)
,`id_dosen_ampu` int(11)
,`id_dosen` int(11)
,`id_mata_kuliah` int(11)
,`kode_mata_kuliah` varchar(255)
,`nama_mata_kuliah` varchar(255)
,`sks` int(11)
,`id_kelas` int(11)
,`jml_mhs` bigint(21)
,`persen` decimal(36,0)
,`isi_nilai` decimal(32,0)
,`persentase` decimal(36,0)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `dashboard_dosen_ampu`
-- (See below for the actual view)
--
CREATE TABLE `dashboard_dosen_ampu` (
`id_kelas` int(11)
,`nim` int(11)
,`nama_mahasiswa` varchar(255)
,`nilai_akhir` double(18,1)
,`mutu` varchar(2)
,`id_dosen_ampu` int(11)
,`id_dosen` int(11)
,`nama_dosen` varchar(255)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `dashboard_v2`
-- (See below for the actual view)
--
CREATE TABLE `dashboard_v2` (
`id_semester` int(11)
,`semester` varchar(255)
,`id_dosen_ampu` int(11)
,`id_dosen` int(11)
,`id_mata_kuliah` int(11)
,`kode_mata_kuliah` varchar(255)
,`nama_mata_kuliah` varchar(255)
,`sks` int(11)
,`id_kelas` int(11)
,`jml_mhs` bigint(21)
,`persen` decimal(36,0)
,`isi_nilai` decimal(32,0)
,`persentase` decimal(36,0)
);

-- --------------------------------------------------------

--
-- Table structure for table `dosen`
--

CREATE TABLE `dosen` (
  `id_dosen` int(11) NOT NULL,
  `id_prodi` int(11) NOT NULL,
  `nidn` int(11) NOT NULL,
  `nama_dosen` varchar(255) NOT NULL,
  `email_dosen` varchar(255) NOT NULL,
  `no_telfon_dosen` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dosen`
--

INSERT INTO `dosen` (`id_dosen`, `id_prodi`, `nidn`, `nama_dosen`, `email_dosen`, `no_telfon_dosen`) VALUES
(1, 1, 776786, 'Prof. Elon Musk, M.T., Ph.D.', 'elon@x.com', 328478924),
(2, 1, 342349, 'Mark Zuckerberg, S.Pd., M.Pd.', 'mark@x.com', 68347687),
(3, 1, 776788, 'Steve Jobs, S.Kom., M.Kom.', 'steve@x.com', 98099878),
(4, 2, 43342349, 'Albert Einstein, M.Ed., Ph.D.', 'albert@x.com', 32445930);

-- --------------------------------------------------------

--
-- Table structure for table `dosen_ampu`
--

CREATE TABLE `dosen_ampu` (
  `id_dosen_ampu` int(11) NOT NULL,
  `id_dosen` int(11) NOT NULL,
  `id_mata_kuliah` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dosen_ampu`
--

INSERT INTO `dosen_ampu` (`id_dosen_ampu`, `id_dosen`, `id_mata_kuliah`) VALUES
(1, 1, 2),
(2, 4, 6),
(3, 1, 4),
(4, 1, 5),
(5, 1, 7),
(6, 1, 8),
(7, 1, 12);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `fakultas`
--

CREATE TABLE `fakultas` (
  `id_fakultas` int(11) NOT NULL,
  `kode_fakultas` varchar(255) NOT NULL,
  `nama_fakultas` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fakultas`
--

INSERT INTO `fakultas` (`id_fakultas`, `kode_fakultas`, `nama_fakultas`) VALUES
(1, 'UPI001', 'FPMIPA'),
(2, 'UPI002', 'FPBS'),
(3, 'UPI003', 'FIP');

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

CREATE TABLE `kelas` (
  `id_kelas` int(11) NOT NULL,
  `id_dosen_ampu` int(11) NOT NULL,
  `id_semester` int(11) NOT NULL,
  `nama_kelas` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kelas`
--

INSERT INTO `kelas` (`id_kelas`, `id_dosen_ampu`, `id_semester`, `nama_kelas`) VALUES
(4, 1, 3, 'KOM-4C'),
(5, 2, 3, 'KOM-4C'),
(6, 3, 3, 'KOM-4C'),
(7, 4, 3, 'KOM-4C-SIG'),
(8, 5, 3, 'KOM-6C'),
(9, 5, 4, 'KOM-6C'),
(10, 3, 4, 'KOM-7C'),
(11, 6, 4, 'KOM-3C'),
(12, 7, 4, 'KOM-3C2');

-- --------------------------------------------------------

--
-- Table structure for table `komponen`
--

CREATE TABLE `komponen` (
  `id_kompenen` int(11) NOT NULL,
  `nama_komponen` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `komponen`
--

INSERT INTO `komponen` (`id_kompenen`, `nama_komponen`) VALUES
(1, 'Partisipatif'),
(2, 'Proyek'),
(3, 'Tugas'),
(4, 'Quiz'),
(5, 'UTS'),
(6, 'UAS');

-- --------------------------------------------------------

--
-- Table structure for table `kontrak`
--

CREATE TABLE `kontrak` (
  `id_kontrak` int(11) NOT NULL,
  `nim` int(11) NOT NULL,
  `id_kelas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kontrak`
--

INSERT INTO `kontrak` (`id_kontrak`, `nim`, `id_kelas`) VALUES
(7, 1, 4),
(18, 3, 4),
(19, 6, 4),
(20, 1, 6),
(21, 1, 7),
(22, 3, 7),
(23, 1707890, 8),
(24, 1707886, 8),
(25, 1707912, 8),
(26, 1707915, 8),
(27, 1707916, 8),
(28, 1707885, 8),
(29, 1707929, 8),
(30, 1707928, 8),
(31, 1707944, 8),
(32, 1707927, 8),
(33, 1707948, 8),
(34, 1707918, 8),
(35, 1707967, 8),
(36, 1707921, 8),
(37, 1707941, 8),
(38, 1707928, 6),
(39, 1707921, 6),
(40, 1707968, 9),
(41, 1707974, 9),
(45, 1707964, 9),
(46, 1707970, 9),
(47, 1707911, 9),
(48, 1707976, 11),
(49, 1707924, 11),
(50, 1707916, 11),
(51, 1707888, 11),
(52, 1707926, 11),
(53, 1707947, 11);

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `nim` int(11) NOT NULL,
  `nama_mahasiswa` varchar(255) NOT NULL,
  `jenis_kelamin` enum('L','P') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`nim`, `nama_mahasiswa`, `jenis_kelamin`) VALUES
(1, 'Fakhri Azis Basiri', 'L'),
(2, 'Agung Kuncoro', 'L'),
(3, 'Alan Smith', 'L'),
(4, 'Andi Sulistiawan', 'L'),
(5, 'Adinda Fatimah', 'P'),
(6, 'Vivian Azzahra Miedema', 'P'),
(1707885, 'Fakhri Azis Basiri', 'L'),
(1707886, 'Agung Kuncoro', 'L'),
(1707887, 'Alan Smith', 'L'),
(1707888, 'Andi Sulistiawan', 'L'),
(1707889, 'Vivian Azzahra Miedema', 'P'),
(1707890, 'Adinda Fatimah', 'P'),
(1707911, 'Albert Cahyadi Sukandinata', 'L'),
(1707912, 'Aldo Putra Basali', 'L'),
(1707913, 'Alexander Hermas Wolfe', 'L'),
(1707914, 'Alan Alamsyah', 'L'),
(1707915, 'Alvin Gozali', 'L'),
(1707916, 'Amalia Aristiningsih', 'P'),
(1707917, 'Amelia Kurniawan', 'L'),
(1707918, 'Amin Halim', 'P'),
(1707919, 'Amy Delia', 'P'),
(1707920, 'Andi Achmad Dara', 'L'),
(1707921, 'Bambang Hartono', 'L'),
(1707922, 'Bayu Irianto', 'L'),
(1707923, 'Basuki Purwanto', 'L'),
(1707924, 'Bayu Virgan Triyanto', 'L'),
(1707925, 'Benny Setiawan', 'L'),
(1707926, 'Bob Yanuar', 'L'),
(1707927, 'Belinda Natalia', 'P'),
(1707928, 'Budiono', 'L'),
(1707929, 'Bustomi Sanjaya', 'L'),
(1707930, 'Budiman Efendi', 'L'),
(1707941, 'Cakra Ciputra', 'L'),
(1707942, 'Calmin Lukmantara', 'L'),
(1707943, 'Candra Winoto', 'L'),
(1707944, 'Caroline Suwiryo', 'P'),
(1707945, 'Catherine Hambali', 'P'),
(1707946, 'Cecilia Harahap', 'P'),
(1707947, 'Celine Permadi', 'P'),
(1707948, 'Chairul Anwar', 'L'),
(1707949, 'Christina Agustin', 'P'),
(1707950, 'Carlos Upamecano', 'L'),
(1707951, 'Dadi Sukarso', 'L'),
(1707952, 'Dandi Sutanto', 'L'),
(1707953, 'Dani Suparjo', 'L'),
(1707954, 'Daniel Levi', 'L'),
(1707955, 'Darmono Sulistyo', 'L'),
(1707956, 'David Kristanto', 'L'),
(1707957, 'Debby Febriany', 'P'),
(1707958, 'Dewi Anggraeni', 'P'),
(1707959, 'Dewi Livia Sari', 'P'),
(1707960, 'Dicky Permadi', 'L'),
(1707961, 'Edi Sugiardi', 'L'),
(1707962, 'Eddy Handoko', 'L'),
(1707963, 'Edgar Haryanto', 'L'),
(1707964, 'Edward Stimulus', 'L'),
(1707965, 'Edwin Sarabia', 'L'),
(1707966, 'Elly Purwanti', 'P'),
(1707967, 'Elline Johanson', 'P'),
(1707968, 'Elsa Jauhari', 'P'),
(1707969, 'Emilia Stefani', 'P'),
(1707970, 'Endang Sukamto', 'L'),
(1707971, 'Enny Berlian', 'P'),
(1707972, 'Erlina Tandjung', 'P'),
(1707973, 'Erwin Prakasa', 'L'),
(1707974, 'Ernest Simanjuntak', 'L'),
(1707975, 'Eva Maesaroh', 'P'),
(1707976, 'Evi Wikarsa', 'P'),
(1707977, 'Eri Prawira', 'L'),
(1707978, 'Eric Tan Cho', 'L'),
(1707979, 'Emma Winardi', 'P'),
(1707980, 'Elizabeth Pujianti', 'P');

-- --------------------------------------------------------

--
-- Table structure for table `mata_kuliah`
--

CREATE TABLE `mata_kuliah` (
  `id_mata_kuliah` int(11) NOT NULL,
  `kode_mata_kuliah` varchar(255) NOT NULL,
  `nama_mata_kuliah` varchar(255) NOT NULL,
  `sks` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mata_kuliah`
--

INSERT INTO `mata_kuliah` (`id_mata_kuliah`, `kode_mata_kuliah`, `nama_mata_kuliah`, `sks`) VALUES
(1, 'IK001', 'Sistem Basis Data', 3),
(2, 'IK002', 'Algoritma dan Pemrograman 1', 3),
(3, 'IK003', 'Algoritma dan Pemrograman 2', 3),
(4, 'IK004', 'Sistem Informasi', 3),
(5, 'IK005', 'Sistem Informasi Geografi', 2),
(6, 'IK006', 'Business Intelligent', 2),
(7, 'IK494', 'Kewirausahaan', 2),
(8, 'IK180', 'Aljabar Linier Dan Matriks', 2),
(9, 'IK230', 'Design Dan Pemrograman Web', 3),
(10, 'IK270', 'Rekayasa Perangkat Lunak', 3),
(11, 'IK210', 'Metode Numerik', 2),
(12, 'IK260', 'Teori Bahasa Dan Automata', 3),
(13, 'IK280', 'Kecerdasan Buatan', 3),
(14, 'IK320', 'Grafika Komputer Dan Multimedia', 3),
(15, 'IK505', 'Data Mining And Warehouse', 3);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `nilai`
--

CREATE TABLE `nilai` (
  `id_nilai` int(11) NOT NULL,
  `id_kontrak` int(11) NOT NULL,
  `id_bobot` int(11) NOT NULL,
  `nilai` int(11) DEFAULT NULL,
  `nilaixbobot` float DEFAULT NULL,
  `is_nilai` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `nilai`
--

INSERT INTO `nilai` (`id_nilai`, `id_kontrak`, `id_bobot`, `nilai`, `nilaixbobot`, `is_nilai`) VALUES
(87, 23, 34, 84, 8.4, 1),
(88, 23, 35, 87, 8.7, 1),
(89, 23, 36, 85, 8.5, 1),
(90, 23, 37, 70, 14, 1),
(91, 23, 38, 85, 17, 1),
(92, 23, 39, 78, 23.4, 1),
(93, 24, 34, 87, 8.7, 1),
(94, 24, 35, 76, 7.6, 1),
(95, 24, 36, 78, 7.8, 1),
(96, 24, 37, 76, 15.2, 1),
(97, 24, 38, 69, 13.8, 1),
(98, 24, 39, 91, 27.3, 1),
(99, 25, 34, 89, 8.9, 1),
(100, 25, 35, 83, 8.3, 1),
(101, 25, 36, 78, 7.8, 1),
(102, 25, 37, 67, 13.4, 1),
(103, 25, 38, 82, 16.4, 1),
(104, 25, 39, 87, 26.1, 1),
(105, 26, 34, 65, 6.5, 1),
(106, 26, 35, 87, 8.7, 1),
(107, 26, 36, 82, 8.2, 1),
(108, 26, 37, 85, 17, 1),
(109, 26, 38, 90, 18, 1),
(110, 26, 39, 84, 25.2, 1),
(111, 27, 34, 75, 7.5, 1),
(112, 27, 35, 75, 7.5, 1),
(113, 27, 36, 75, 7.5, 1),
(114, 27, 37, 78, 15.6, 1),
(115, 27, 38, 75, 15, 1),
(116, 27, 39, 71, 21.3, 1),
(117, 28, 34, 96, 9.6, 1),
(118, 28, 35, 97, 9.7, 1),
(119, 28, 36, 90, 9, 1),
(120, 28, 37, 91, 18.2, 1),
(121, 28, 38, 87, 17.4, 1),
(122, 28, 39, 82, 24.6, 1),
(123, 29, 34, 60, 6, 1),
(124, 29, 35, 89, 8.9, 1),
(125, 29, 36, 79, 7.9, 1),
(126, 29, 37, 98, 19.6, 1),
(127, 29, 38, 92, 18.4, 1),
(128, 29, 39, 89, 26.7, 1),
(129, 34, 34, 70, 7, 1),
(130, 34, 35, 90, 9, 1),
(131, 34, 36, 87, 8.7, 1),
(132, 34, 37, 86, 17.2, 1),
(133, 34, 38, 91, 18.2, 1),
(134, 34, 39, 90, 27, 1),
(150, 18, 12, 90, 18, 1),
(151, 18, 13, 87, 26.1, 1),
(152, 18, 14, 70, 35, 1),
(156, 36, 34, 70, 7, 1),
(157, 36, 35, 98, 9.8, 1),
(158, 36, 36, 70, 7, 1),
(159, 36, 37, 76, 15.2, 1),
(160, 36, 38, 98, 19.6, 1),
(161, 36, 39, 70, 21, 1),
(162, 32, 34, 76, 7.6, 1),
(163, 32, 35, 70, 7, 1),
(164, 32, 36, 70, 7, 1),
(165, 32, 37, 98, 19.6, 1),
(166, 32, 38, 70, 14, 1),
(167, 32, 39, 90, 27, 1),
(168, 30, 34, 77, 7.7, 1),
(169, 30, 35, 77, 7.7, 1),
(170, 30, 36, 87, 8.7, 1),
(171, 30, 37, 77, 15.4, 1),
(172, 30, 38, 98, 19.6, 1),
(173, 30, 39, 77, 23.1, 1),
(174, 37, 34, 98, 9.8, 1),
(175, 37, 35, 95, 9.5, 1),
(176, 37, 36, 91, 9.1, 1),
(177, 37, 37, 94, 18.8, 1),
(178, 37, 38, 76, 15.2, 1),
(179, 37, 39, 76, 22.8, 1),
(180, 31, 34, 79, 7.9, 1),
(181, 31, 35, 79, 7.9, 1),
(182, 31, 36, 79, 7.9, 1),
(183, 31, 37, 79, 15.8, 1),
(184, 31, 38, 79, 15.8, 1),
(185, 31, 39, 79, 23.7, 1),
(186, 19, 12, 58, 11.6, 1),
(187, 19, 13, 69, 20.7, 1),
(188, 19, 14, 75, 37.5, 1),
(195, 33, 34, 90, 9, 1),
(196, 33, 35, 98, 9.8, 1),
(197, 33, 36, 77, 7.7, 1),
(198, 33, 37, 87, 17.4, 1),
(199, 33, 38, 98, 19.6, 1),
(200, 33, 39, 89, 26.7, 1),
(204, 20, 19, 87, 17.4, 1),
(205, 20, 20, 78, 0, 1),
(206, 20, 21, 89, 0, 1),
(207, 20, 22, 89, 0, 1),
(208, 20, 23, 86, 21.5, 1),
(209, 20, 24, 84, 46.2, 1),
(210, 38, 19, 79, 15.8, 1),
(211, 38, 20, 0, 0, 1),
(212, 38, 21, 0, 0, 1),
(213, 38, 22, 0, 0, 1),
(214, 38, 23, 66, 16.5, 1),
(215, 38, 24, 78, 42.9, 1),
(216, 39, 19, 74, 14.8, 1),
(217, 39, 20, 0, 0, 1),
(218, 39, 21, 0, 0, 1),
(219, 39, 22, 0, 0, 1),
(220, 39, 23, 91, 22.75, 1),
(221, 39, 24, 82, 45.1, 1),
(222, 22, 25, 60, 12, 1),
(223, 22, 26, 60, 0, 1),
(224, 22, 27, 60, 0, 1),
(225, 22, 28, 60, 0, 1),
(226, 22, 29, 60, 21, 1),
(227, 22, 30, 60, 27, 1),
(228, 21, 25, 70, 14, 1),
(229, 21, 26, 70, 0, 1),
(230, 21, 27, 70, 0, 1),
(231, 21, 28, 70, 0, 1),
(232, 21, 29, 70, 24.5, 1),
(233, 21, 30, 70, 31.5, 1),
(234, 7, 12, 67, 13.4, 1),
(235, 7, 13, 87, 26.1, 1),
(236, 7, 14, 79, 39.5, 1),
(237, 7, 31, 0, 0, 1),
(238, 7, 32, 0, 0, 1),
(239, 7, 33, 0, 0, 1),
(240, 35, 34, NULL, NULL, NULL),
(241, 35, 35, NULL, NULL, NULL),
(242, 35, 36, NULL, NULL, NULL),
(243, 35, 37, NULL, NULL, NULL),
(244, 35, 38, NULL, NULL, NULL),
(245, 35, 39, NULL, NULL, NULL),
(246, 18, 31, 0, 0, 1),
(247, 18, 32, 0, 0, 1),
(248, 18, 33, 0, 0, 1),
(249, 19, 31, 0, 0, 1),
(250, 19, 32, 0, 0, 1),
(251, 19, 33, 0, 0, 1),
(252, 40, 64, 60, 6, 1),
(253, 40, 65, 60, 6, 1),
(254, 40, 66, 55, 8.25, 1),
(255, 40, 67, 60, 9, 1),
(256, 40, 68, 55, 11, 1),
(257, 40, 69, 60, 18, 1),
(258, 41, 64, NULL, 0, NULL),
(259, 41, 65, NULL, 0, NULL),
(260, 41, 66, NULL, 0, NULL),
(261, 41, 67, NULL, 0, NULL),
(262, 41, 68, NULL, 0, NULL),
(263, 41, 69, NULL, 0, NULL),
(264, 45, 64, 80, 8, 1),
(265, 45, 65, 85, 8.5, 1),
(266, 45, 66, 90, 13.5, 1),
(267, 45, 67, 78, 11.7, 1),
(268, 45, 68, 62, 12.4, 1),
(269, 45, 69, 66, 19.8, 1),
(270, 46, 64, NULL, 0, NULL),
(271, 46, 65, NULL, 0, NULL),
(272, 46, 66, NULL, 0, NULL),
(273, 46, 67, NULL, 0, NULL),
(274, 46, 68, NULL, 0, NULL),
(275, 46, 69, NULL, 0, NULL),
(276, 47, 64, 80, 8, 1),
(277, 47, 65, 85, 8.5, 1),
(278, 47, 66, 90, 13.5, 1),
(279, 47, 67, 78, 11.7, 1),
(280, 47, 68, 80, 16, 1),
(281, 47, 69, 66, 19.8, 1),
(284, 48, 70, 0, 0, 1),
(285, 48, 71, 0, 0, 1),
(286, 48, 72, 0, 0, 1),
(287, 48, 73, 0, 0, 1),
(288, 48, 74, 70, 21, 1),
(289, 48, 75, 85, 59.5, 1),
(290, 49, 70, 0, 0, 1),
(291, 49, 71, 0, 0, 1),
(292, 49, 72, 0, 0, 1),
(293, 49, 73, 0, 0, 1),
(294, 49, 74, 55, 16.5, 1),
(295, 49, 75, 78, 54.6, 1),
(296, 50, 70, 0, 0, 1),
(297, 50, 71, 0, 0, 1),
(298, 50, 72, 0, 0, 1),
(299, 50, 73, 0, 0, 1),
(300, 50, 74, 60, 18, 1),
(301, 50, 75, 65, 45.5, 1),
(302, 51, 70, 0, 0, 1),
(303, 51, 71, 0, 0, 1),
(304, 51, 72, 0, 0, 1),
(305, 51, 73, 0, 0, 1),
(306, 51, 74, 85, 25.5, 1),
(307, 51, 75, 90, 63, 1),
(308, 52, 70, 0, 0, 1),
(309, 52, 71, 0, 0, 1),
(310, 52, 72, 0, 0, 1),
(311, 52, 73, 0, 0, 1),
(312, 52, 74, 57, 17.1, 1),
(313, 52, 75, 82, 57.4, 1),
(314, 53, 70, 0, 0, 1),
(315, 53, 71, 0, 0, 1),
(316, 53, 72, 0, 0, 1),
(317, 53, 73, 0, 0, 1),
(318, 53, 74, 65, 19.5, 1),
(319, 53, 75, 50, 35, 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `penilaian`
--

CREATE TABLE `penilaian` (
  `id_penilaian` int(11) NOT NULL,
  `id_bobot` int(11) NOT NULL,
  `id_assessment` int(11) DEFAULT NULL,
  `id_bukti` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `penilaian`
--

INSERT INTO `penilaian` (`id_penilaian`, `id_bobot`, `id_assessment`, `id_bukti`) VALUES
(7, 12, 1, 2),
(8, 13, 3, 3),
(9, 14, 2, 1),
(10, 12, 4, 1),
(11, 12, 5, 2),
(12, 14, 1, 2),
(13, 14, 4, 2),
(14, 14, 5, 1),
(15, 13, 2, 1),
(16, 12, 3, 2),
(17, 12, 7, 1),
(18, 13, 6, 3),
(19, 14, 1, 2),
(20, 12, 2, 8),
(21, 14, 3, 2),
(30, 25, 7, 1),
(31, 26, 6, 3),
(32, 27, 1, 6),
(33, 28, 2, 4),
(34, 29, 2, 7),
(35, 30, 3, 5),
(36, 27, 4, 2),
(37, 27, 5, 2);

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `prodi`
--

CREATE TABLE `prodi` (
  `id_prodi` int(11) NOT NULL,
  `id_fakultas` int(11) NOT NULL,
  `kode_prodi` varchar(255) NOT NULL,
  `nama_prodi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `prodi`
--

INSERT INTO `prodi` (`id_prodi`, `id_fakultas`, `kode_prodi`, `nama_prodi`) VALUES
(1, 1, 'D5451', 'Ilmu Komputer'),
(2, 1, 'D5351', 'Kimia');

-- --------------------------------------------------------

--
-- Table structure for table `semester`
--

CREATE TABLE `semester` (
  `id_semester` int(11) NOT NULL,
  `semester` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `semester`
--

INSERT INTO `semester` (`id_semester`, `semester`) VALUES
(1, '2022-1'),
(2, '2022-2'),
(3, '2023-1'),
(4, '2023-2'),
(5, '2020-1'),
(6, '2020-2'),
(7, '2021-1'),
(8, '2021-2'),
(9, '2024-1'),
(10, '2024-2');

-- --------------------------------------------------------

--
-- Table structure for table `standard_nilai`
--

CREATE TABLE `standard_nilai` (
  `id_standard_nilai` int(11) NOT NULL,
  `id_kelas` int(11) DEFAULT NULL,
  `nilai_indeks_huruf` varchar(10) DEFAULT NULL,
  `indeks` float DEFAULT NULL,
  `start_nilai` float NOT NULL,
  `end_nilai` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `standard_nilai`
--

INSERT INTO `standard_nilai` (`id_standard_nilai`, `id_kelas`, `nilai_indeks_huruf`, `indeks`, `start_nilai`, `end_nilai`) VALUES
(19, 9, 'A', 4, 90, 100),
(20, 9, 'A-', 3.7, 85, 89.9),
(21, 9, 'B+', 3.4, 80, 84.9),
(22, 9, 'B', 3, 85, 79.9),
(23, 9, 'B-', 2.7, 70, 74.9),
(24, 9, 'C+', 2.4, 65, 69.9),
(25, 9, 'C', 2, 60, 64.9),
(26, 9, 'D', 1, 55, 59.9),
(27, 9, 'E', 0, 1, 54.9),
(28, 8, 'A', 4, 90, 100),
(29, 8, 'A-', 3.7, 85, 89.9),
(30, 8, 'B+', 3.4, 80, 84.9),
(31, 8, 'B', 3, 75, 79.9),
(32, 8, 'B-', 2.7, 70, 74.9),
(33, 8, 'C+', 2.4, 65, 69.9),
(34, 8, 'C', 2, 60, 64.9),
(35, 8, 'D', 1, 55, 59.9),
(36, 8, 'E', 0, 50, 54.9),
(37, 4, 'A', 4, 90, 100),
(38, 4, 'A-', 3.7, 85, 89.9),
(39, 4, 'B+', 3.4, 80, 84.9),
(40, 4, 'B', 3, 75, 79.9),
(41, 4, 'B-', 2.7, 70, 74.9),
(42, 4, 'C+', 2.4, 65, 69.9),
(43, 4, 'C', 2, 60, 64.9),
(44, 4, 'D', 1, 55, 59.9),
(45, 4, 'E', 0, 50, 54.9),
(46, 5, 'A', 4, 90, 100),
(47, 5, 'A-', 3.7, 85, 89.9),
(48, 5, 'B+', 3.4, 80, 84.9),
(49, 5, 'B', 3, 75, 79.9),
(50, 5, 'B-', 2.7, 70, 74.9),
(51, 5, 'C+', 2.4, 65, 69.9),
(52, 5, 'C', 2, 60, 64.9),
(53, 5, 'D', 1, 55, 59.9),
(54, 5, 'E', 0, 1, 54.9),
(55, 6, 'A', 4, 90, 100),
(56, 6, 'A-', 3.7, 85, 90),
(57, 6, 'B+', 3.4, 80, 85),
(58, 6, 'B', 3, 75, 80),
(59, 6, 'B-', 2.7, 70, 75),
(60, 6, 'C+', 2.4, 65, 70),
(61, 6, 'C', 2, 60, 65),
(62, 6, 'D', 1, 55, 60),
(63, 6, 'E', 0, 1, 55),
(64, 7, 'A', 4, 90, 100),
(65, 7, 'A-', 3.7, 85, 89.9),
(66, 7, 'B+', 3.4, 80, 84.9),
(67, 7, 'B', 3, 75, 79.9),
(68, 7, 'B-', 2.7, 70, 74.9),
(69, 7, 'C+', 2.4, 65, 69.9),
(70, 7, 'C', 2, 60, 64.9),
(71, 7, 'D', 1, 55, 59.9),
(72, 7, 'E', 0, 1, 54.9),
(73, 10, 'A', 4, 90, 100),
(74, 10, 'A-', 3.7, 85, 90),
(75, 10, 'B+', 3.4, 80, 85),
(76, 10, 'B', 3, 75, 80),
(77, 10, 'B-', 2.7, 70, 75),
(78, 10, 'C+', 2.4, 65, 70),
(79, 10, 'C', 2, 60, 65),
(80, 10, 'D', 1, 55, 60),
(81, 10, 'E', 0, 1, 55),
(82, 11, 'A', 4, 90, 100),
(83, 11, 'A-', 3.7, 85, 90),
(84, 11, 'B+', 3.4, 80, 85),
(85, 11, 'B', 3, 75, 80),
(86, 11, 'B-', 2.7, 70, 75),
(87, 11, 'C+', 2.4, 65, 70),
(88, 11, 'C', 2, 60, 65),
(89, 11, 'D', 1, 55, 60),
(90, 11, 'E', 0, 1, 55),
(91, 12, 'A', 4, 90, 100),
(92, 12, 'A-', 3.7, 85, 90),
(93, 12, 'B+', 3.4, 80, 85),
(94, 12, 'B', 3, 75, 80),
(95, 12, 'B-', 2.7, 70, 75),
(96, 12, 'C+', 2.4, 65, 70),
(97, 12, 'C', 2, 60, 65),
(98, 12, 'D', 1, 55, 60),
(99, 12, 'E', 0, 1, 55);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `location` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `about` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `phone`, `location`, `about`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@material.com', '2023-07-10 04:07:45', NULL, NULL, NULL, '$2y$10$G4i1X78oHgMtIhw4B/jzzeLo/iVGxuA/qCfDLyV0GDTbbc6uLCmZC', 'aY2u18MMKalURmDcznckZzfA3KAHVgYsiuIRoJJYeG6YX5cxFZKq3TeB9nf5', '2023-07-10 04:07:45', '2023-07-10 04:07:45'),
(2, 'Dr. Elon Musk, M.Pd.', 'fakhriazis994@gmail.com', NULL, NULL, NULL, NULL, '$2y$10$sItsll9x0moWermo3zfRoeHjQl1LLPxj5lugrZJKJsmrHZhq3PCyq', NULL, '2023-07-17 19:48:09', '2023-07-17 19:48:09');

-- --------------------------------------------------------

--
-- Stand-in structure for view `view_nilaiakhirall`
-- (See below for the actual view)
--
CREATE TABLE `view_nilaiakhirall` (
`nim` int(11)
,`maha` varchar(255)
,`idkel` int(11)
,`idktr` int(11)
,`partisipatif` int(11)
,`proyek` int(11)
,`tugas` int(11)
,`quiz` int(11)
,`uts` int(11)
,`uas` int(11)
,`nilai_akhir` double(18,1)
,`mutu` varchar(2)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `vna`
-- (See below for the actual view)
--
CREATE TABLE `vna` (
`nim` int(11)
,`nama_mahasiswa` varchar(255)
,`id_kelas` int(11)
,`idktr` int(11)
,`partisipatif` int(11)
,`proyek` int(11)
,`tugas` int(11)
,`quiz` int(11)
,`uts` int(11)
,`uas` int(11)
,`nilai_akhir` double(18,1)
,`mutu` varchar(2)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `vna2`
-- (See below for the actual view)
--
CREATE TABLE `vna2` (
`nim` int(11)
,`nama_mahasiswa` varchar(255)
,`id_kelas` int(11)
,`idktr` int(11)
,`partisipatif` int(11)
,`proyek` int(11)
,`tugas` int(11)
,`quiz` int(11)
,`uts` int(11)
,`uas` int(11)
,`nilai_akhir` double(18,1)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `vna_mutu_indeks`
-- (See below for the actual view)
--
CREATE TABLE `vna_mutu_indeks` (
`nim` int(11)
,`nama_mahasiswa` varchar(255)
,`id_kelas` int(11)
,`idktr` int(11)
,`partisipatif` int(11)
,`proyek` int(11)
,`tugas` int(11)
,`quiz` int(11)
,`uts` int(11)
,`uas` int(11)
,`nilai_akhir` double(18,1)
,`mutu` varchar(10)
,`indeks` float
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `vna_mutu_indeks_smt`
-- (See below for the actual view)
--
CREATE TABLE `vna_mutu_indeks_smt` (
`nim` int(11)
,`nama_mahasiswa` varchar(255)
,`id_kelas` int(11)
,`idktr` int(11)
,`id_semester` int(11)
,`partisipatif` int(11)
,`proyek` int(11)
,`tugas` int(11)
,`quiz` int(11)
,`uts` int(11)
,`uas` int(11)
,`nilai_akhir` double(18,1)
,`mutu` varchar(10)
,`indeks` float
);

-- --------------------------------------------------------

--
-- Structure for view `dashboard`
--
DROP TABLE IF EXISTS `dashboard`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `dashboard`  AS   with cte as (select `da`.`id_dosen_ampu` AS `id_dosen_ampu`,`dos`.`id_dosen` AS `id_dosen`,`dos`.`nama_dosen` AS `nama_dosen`,`mk`.`id_mata_kuliah` AS `id_mata_kuliah`,`mk`.`kode_mata_kuliah` AS `kode_mata_kuliah`,`mk`.`nama_mata_kuliah` AS `nama_mata_kuliah`,`mk`.`sks` AS `sks`,`smt`.`id_semester` AS `id_semester`,`smt`.`semester` AS `semester`,`ktr`.`id_kontrak` AS `id_kontrak`,`ktr`.`id_kelas` AS `id_kelas`,`ktr`.`nim` AS `nim`,`n`.`is_nilai` AS `is_nilai` from ((((((`nilai` `n` left join `kontrak` `ktr` on(`ktr`.`id_kontrak` = `n`.`id_kontrak`)) left join `kelas` `kel` on(`kel`.`id_kelas` = `ktr`.`id_kelas`)) left join `dosen_ampu` `da` on(`da`.`id_dosen_ampu` = `kel`.`id_dosen_ampu`)) left join `dosen` `dos` on(`dos`.`id_dosen` = `da`.`id_dosen`)) left join `mata_kuliah` `mk` on(`mk`.`id_mata_kuliah` = `da`.`id_mata_kuliah`)) left join `semester` `smt` on(`smt`.`id_semester` = `kel`.`id_semester`)) group by `da`.`id_dosen_ampu`,`dos`.`id_dosen`,`dos`.`nama_dosen`,`mk`.`id_mata_kuliah`,`mk`.`kode_mata_kuliah`,`mk`.`nama_mata_kuliah`,`mk`.`sks`,`smt`.`id_semester`,`smt`.`semester`,`ktr`.`id_kontrak`,`ktr`.`id_kelas`,`ktr`.`nim`,`n`.`is_nilai`), cte3 as (select `n`.`id_kontrak` AS `id_kontrak`,`kel`.`id_kelas` AS `id_kelas`,`n`.`is_nilai` AS `is_nilai` from ((`nilai` `n` join `kontrak` `ktr` on(`ktr`.`id_kontrak` = `n`.`id_kontrak`)) join `kelas` `kel` on(`kel`.`id_kelas` = `ktr`.`id_kelas`)) group by `n`.`id_kontrak`,`kel`.`id_kelas`,`n`.`is_nilai`), data_matkul as (select `cte`.`id_semester` AS `id_semester`,`cte`.`semester` AS `semester`,`cte`.`id_dosen_ampu` AS `id_dosen_ampu`,`cte`.`id_dosen` AS `id_dosen`,`cte`.`id_mata_kuliah` AS `id_mata_kuliah`,`cte`.`id_kelas` AS `id_kelas`,`cte`.`kode_mata_kuliah` AS `kode_mata_kuliah`,`cte`.`nama_mata_kuliah` AS `nama_mata_kuliah`,`cte`.`sks` AS `sks` from `cte` group by `cte`.`id_semester`,`cte`.`semester`,`cte`.`id_dosen_ampu`,`cte`.`id_dosen`,`cte`.`id_mata_kuliah`,`cte`.`id_kelas`,`cte`.`kode_mata_kuliah`,`cte`.`nama_mata_kuliah`,`cte`.`sks`), jml_mhs as (select `cte`.`id_dosen_ampu` AS `id_dosen_ampu`,`cte`.`id_dosen` AS `id_dosen`,`cte`.`id_mata_kuliah` AS `id_mata_kuliah`,`cte`.`id_kelas` AS `id_kelas`,count(`cte`.`nim`) AS `jml_mhs` from `cte` group by `cte`.`id_dosen_ampu`,`cte`.`id_dosen`,`cte`.`id_mata_kuliah`,`cte`.`id_kelas`), persen as (select `cte3`.`id_kelas` AS `id_kelas`,sum(coalesce(`cte3`.`is_nilai`,0)) AS `isi_nilai`,sum(coalesce(`cte3`.`is_nilai`,0)) / count(`cte3`.`id_kontrak`) * 100 AS `persen` from `cte3` where `cte3`.`is_nilai` is not null group by `cte3`.`id_kelas`,`cte3`.`is_nilai`)select `a`.`id_semester` AS `id_semester`,`a`.`semester` AS `semester`,`a`.`id_dosen_ampu` AS `id_dosen_ampu`,`a`.`id_dosen` AS `id_dosen`,`a`.`id_mata_kuliah` AS `id_mata_kuliah`,`a`.`kode_mata_kuliah` AS `kode_mata_kuliah`,`a`.`nama_mata_kuliah` AS `nama_mata_kuliah`,`a`.`sks` AS `sks`,`a`.`id_kelas` AS `id_kelas`,`b`.`jml_mhs` AS `jml_mhs`,round(`c`.`persen`,0) AS `persen`,`c`.`isi_nilai` AS `isi_nilai`,round(`c`.`isi_nilai` / `b`.`jml_mhs` * 100,0) AS `persentase` from ((`data_matkul` `a` join `jml_mhs` `b` on(`b`.`id_kelas` = `a`.`id_kelas`)) join `persen` `c` on(`c`.`id_kelas` = `a`.`id_kelas`)) group by `a`.`id_semester`,`a`.`semester`,`a`.`id_dosen_ampu`,`a`.`id_dosen`,`a`.`id_mata_kuliah`,`a`.`kode_mata_kuliah`,`a`.`nama_mata_kuliah`,`a`.`sks`,`a`.`id_kelas`,`b`.`jml_mhs`,`c`.`persen`,`c`.`isi_nilai`  ;

-- --------------------------------------------------------

--
-- Structure for view `dashboard_dosen_ampu`
--
DROP TABLE IF EXISTS `dashboard_dosen_ampu`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `dashboard_dosen_ampu`  AS SELECT `v`.`id_kelas` AS `id_kelas`, `v`.`nim` AS `nim`, `v`.`nama_mahasiswa` AS `nama_mahasiswa`, `v`.`nilai_akhir` AS `nilai_akhir`, `v`.`mutu` AS `mutu`, `da`.`id_dosen_ampu` AS `id_dosen_ampu`, `dos`.`id_dosen` AS `id_dosen`, `dos`.`nama_dosen` AS `nama_dosen` FROM (((`vna` `v` left join `kelas` `kel` on(`kel`.`id_kelas` = `v`.`id_kelas`)) left join `dosen_ampu` `da` on(`da`.`id_dosen_ampu` = `kel`.`id_dosen_ampu`)) left join `dosen` `dos` on(`dos`.`id_dosen` = `da`.`id_dosen`)) WHERE `dos`.`id_dosen` = 11  ;

-- --------------------------------------------------------

--
-- Structure for view `dashboard_v2`
--
DROP TABLE IF EXISTS `dashboard_v2`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `dashboard_v2`  AS   with cte as (select `da`.`id_dosen_ampu` AS `id_dosen_ampu`,`dos`.`id_dosen` AS `id_dosen`,`dos`.`nama_dosen` AS `nama_dosen`,`mk`.`id_mata_kuliah` AS `id_mata_kuliah`,`mk`.`kode_mata_kuliah` AS `kode_mata_kuliah`,`mk`.`nama_mata_kuliah` AS `nama_mata_kuliah`,`mk`.`sks` AS `sks`,`smt`.`id_semester` AS `id_semester`,`smt`.`semester` AS `semester`,`ktr`.`id_kontrak` AS `id_kontrak`,`ktr`.`id_kelas` AS `id_kelas`,`ktr`.`nim` AS `nim`,`n`.`is_nilai` AS `is_nilai` from ((((((`nilai` `n` left join `kontrak` `ktr` on(`ktr`.`id_kontrak` = `n`.`id_kontrak`)) left join `kelas` `kel` on(`kel`.`id_kelas` = `ktr`.`id_kelas`)) left join `dosen_ampu` `da` on(`da`.`id_dosen_ampu` = `kel`.`id_dosen_ampu`)) left join `dosen` `dos` on(`dos`.`id_dosen` = `da`.`id_dosen`)) left join `mata_kuliah` `mk` on(`mk`.`id_mata_kuliah` = `da`.`id_mata_kuliah`)) left join `semester` `smt` on(`smt`.`id_semester` = `kel`.`id_semester`)) group by `da`.`id_dosen_ampu`,`dos`.`id_dosen`,`dos`.`nama_dosen`,`mk`.`id_mata_kuliah`,`mk`.`kode_mata_kuliah`,`mk`.`nama_mata_kuliah`,`mk`.`sks`,`smt`.`id_semester`,`smt`.`semester`,`ktr`.`id_kontrak`,`ktr`.`id_kelas`,`ktr`.`nim`,`n`.`is_nilai`), cte3 as (select `n`.`id_kontrak` AS `id_kontrak`,`kel`.`id_kelas` AS `id_kelas`,`n`.`is_nilai` AS `is_nilai` from ((`nilai` `n` join `kontrak` `ktr` on(`ktr`.`id_kontrak` = `n`.`id_kontrak`)) join `kelas` `kel` on(`kel`.`id_kelas` = `ktr`.`id_kelas`)) group by `n`.`id_kontrak`,`kel`.`id_kelas`,`n`.`is_nilai`), data_matkul as (select `cte`.`id_semester` AS `id_semester`,`cte`.`semester` AS `semester`,`cte`.`id_dosen_ampu` AS `id_dosen_ampu`,`cte`.`id_dosen` AS `id_dosen`,`cte`.`id_mata_kuliah` AS `id_mata_kuliah`,`cte`.`id_kelas` AS `id_kelas`,`cte`.`kode_mata_kuliah` AS `kode_mata_kuliah`,`cte`.`nama_mata_kuliah` AS `nama_mata_kuliah`,`cte`.`sks` AS `sks` from `cte` group by `cte`.`id_semester`,`cte`.`semester`,`cte`.`id_dosen_ampu`,`cte`.`id_dosen`,`cte`.`id_mata_kuliah`,`cte`.`id_kelas`,`cte`.`kode_mata_kuliah`,`cte`.`nama_mata_kuliah`,`cte`.`sks`), jml_mhs as (select `cte`.`id_dosen_ampu` AS `id_dosen_ampu`,`cte`.`id_dosen` AS `id_dosen`,`cte`.`id_mata_kuliah` AS `id_mata_kuliah`,`cte`.`id_kelas` AS `id_kelas`,count(`cte`.`nim`) AS `jml_mhs` from `cte` group by `cte`.`id_dosen_ampu`,`cte`.`id_dosen`,`cte`.`id_mata_kuliah`,`cte`.`id_kelas`), persen as (select `cte3`.`id_kelas` AS `id_kelas`,sum(coalesce(`cte3`.`is_nilai`,0)) AS `isi_nilai`,sum(coalesce(`cte3`.`is_nilai`,0)) / count(`cte3`.`id_kontrak`) * 100 AS `persen` from `cte3` where `cte3`.`is_nilai` is not null group by `cte3`.`id_kelas`,`cte3`.`is_nilai`)select `a`.`id_semester` AS `id_semester`,`a`.`semester` AS `semester`,`a`.`id_dosen_ampu` AS `id_dosen_ampu`,`a`.`id_dosen` AS `id_dosen`,`a`.`id_mata_kuliah` AS `id_mata_kuliah`,`a`.`kode_mata_kuliah` AS `kode_mata_kuliah`,`a`.`nama_mata_kuliah` AS `nama_mata_kuliah`,`a`.`sks` AS `sks`,`a`.`id_kelas` AS `id_kelas`,`b`.`jml_mhs` AS `jml_mhs`,round(`c`.`persen`,0) AS `persen`,`c`.`isi_nilai` AS `isi_nilai`,round(`c`.`isi_nilai` / `b`.`jml_mhs` * 100,0) AS `persentase` from ((`data_matkul` `a` left join `jml_mhs` `b` on(`b`.`id_kelas` = `a`.`id_kelas`)) left join `persen` `c` on(`c`.`id_kelas` = `a`.`id_kelas`)) group by `a`.`id_semester`,`a`.`semester`,`a`.`id_dosen_ampu`,`a`.`id_dosen`,`a`.`id_mata_kuliah`,`a`.`kode_mata_kuliah`,`a`.`nama_mata_kuliah`,`a`.`sks`,`a`.`id_kelas`,`b`.`jml_mhs`,`c`.`persen`,`c`.`isi_nilai`  ;

-- --------------------------------------------------------

--
-- Structure for view `view_nilaiakhirall`
--
DROP TABLE IF EXISTS `view_nilaiakhirall`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_nilaiakhirall`  AS   with base as (select `mahasiswa`.`nim` AS `nim`,`mahasiswa`.`nama_mahasiswa` AS `nama_mahasiswa`,`komponen`.`nama_komponen` AS `nama_komponen`,`nilai`.`nilai` AS `nilai`,`nilai`.`nilaixbobot` AS `nilaixbobot` from ((((`mahasiswa` join `kontrak` on(`kontrak`.`nim` = `mahasiswa`.`nim`)) join `nilai` on(`nilai`.`id_kontrak` = `kontrak`.`id_kontrak`)) join `bobot` on(`bobot`.`id_bobot` = `nilai`.`id_bobot`)) join `komponen` on(`komponen`.`id_kompenen` = `bobot`.`id_komponen`))), maha as (select distinct `mhs`.`nim` AS `nim`,`mhs`.`nama_mahasiswa` AS `maha`,`kel`.`id_kelas` AS `idkel`,`ktr`.`id_kontrak` AS `idktr` from ((`mahasiswa` `mhs` join `kontrak` `ktr` on(`ktr`.`nim` = `mhs`.`nim`)) join `kelas` `kel` on(`kel`.`id_kelas` = `ktr`.`id_kelas`))), partisipatif as (select `base`.`nim` AS `nim`,`base`.`nama_mahasiswa` AS `nama_mahasiswa`,`base`.`nilai` AS `partisipatif` from `base` where `base`.`nama_komponen` = 'partisipatif' group by `base`.`nim`,`base`.`nama_mahasiswa`), proyek as (select `base`.`nim` AS `nim`,`base`.`nama_mahasiswa` AS `nama_mahasiswa`,`base`.`nilai` AS `proyek` from `base` where `base`.`nama_komponen` = 'proyek' group by `base`.`nim`,`base`.`nama_mahasiswa`), tugas as (select `base`.`nim` AS `nim`,`base`.`nama_mahasiswa` AS `nama_mahasiswa`,`base`.`nilai` AS `tugas` from `base` where `base`.`nama_komponen` = 'tugas' group by `base`.`nim`,`base`.`nama_mahasiswa`), quiz as (select `base`.`nim` AS `nim`,`base`.`nama_mahasiswa` AS `nama_mahasiswa`,`base`.`nilai` AS `quiz` from `base` where `base`.`nama_komponen` = 'quiz' group by `base`.`nim`,`base`.`nama_mahasiswa`), uts as (select `base`.`nim` AS `nim`,`base`.`nama_mahasiswa` AS `nama_mahasiswa`,`base`.`nilai` AS `uts` from `base` where `base`.`nama_komponen` = 'uts' group by `base`.`nim`,`base`.`nama_mahasiswa`), uas as (select `base`.`nim` AS `nim`,`base`.`nama_mahasiswa` AS `nama_mahasiswa`,`base`.`nilai` AS `uas` from `base` where `base`.`nama_komponen` = 'uas' group by `base`.`nim`,`base`.`nama_mahasiswa`), nilai_akhir as (select `base`.`nim` AS `nim`,`base`.`nama_mahasiswa` AS `nama_mahasiswa`,round(sum(`base`.`nilaixbobot`),1) AS `nilai_akhir` from `base` group by `base`.`nim`,`base`.`nama_mahasiswa`), mutu as (select `base`.`nim` AS `nim`,`base`.`nama_mahasiswa` AS `nama_mahasiswa`,case when round(sum(`base`.`nilaixbobot`),1) >= 90 then 'A' when round(sum(`base`.`nilaixbobot`),1) > 85 and round(sum(`base`.`nilaixbobot`),1) <= 90 then 'A-' when round(sum(`base`.`nilaixbobot`),1) > 80 and round(sum(`base`.`nilaixbobot`),1) <= 84.9 then 'B+' when round(sum(`base`.`nilaixbobot`),1) > 75 and round(sum(`base`.`nilaixbobot`),1) <= 80 then 'B' when round(sum(`base`.`nilaixbobot`),1) > 70 and round(sum(`base`.`nilaixbobot`),1) <= 74.9 then 'B-' when round(sum(`base`.`nilaixbobot`),1) > 65 and round(sum(`base`.`nilaixbobot`),1) <= 70 then 'C' when round(sum(`base`.`nilaixbobot`),1) > 60 and round(sum(`base`.`nilaixbobot`),1) <= 64.9 then 'D' else 'E' end AS `mutu` from `base` group by `base`.`nim`,`base`.`nama_mahasiswa`)select `a`.`nim` AS `nim`,`a`.`maha` AS `maha`,`a`.`idkel` AS `idkel`,`a`.`idktr` AS `idktr`,`i`.`partisipatif` AS `partisipatif`,`b`.`proyek` AS `proyek`,`c`.`tugas` AS `tugas`,`d`.`quiz` AS `quiz`,`e`.`uts` AS `uts`,`f`.`uas` AS `uas`,`g`.`nilai_akhir` AS `nilai_akhir`,`h`.`mutu` AS `mutu` from ((((((((`maha` `a` left join `partisipatif` `i` on(`i`.`nim` = `a`.`nim`)) left join `proyek` `b` on(`b`.`nim` = `a`.`nim`)) left join `tugas` `c` on(`c`.`nim` = `a`.`nim`)) left join `quiz` `d` on(`d`.`nim` = `a`.`nim`)) left join `uts` `e` on(`e`.`nim` = `a`.`nim`)) left join `uas` `f` on(`f`.`nim` = `a`.`nim`)) left join `nilai_akhir` `g` on(`g`.`nim` = `a`.`nim`)) left join `mutu` `h` on(`h`.`nim` = `a`.`nim`)) order by `a`.`maha`  ;

-- --------------------------------------------------------

--
-- Structure for view `vna`
--
DROP TABLE IF EXISTS `vna`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vna`  AS   with base as (select `mahasiswa`.`nim` AS `nim`,`mahasiswa`.`nama_mahasiswa` AS `nama_mahasiswa`,`komponen`.`nama_komponen` AS `nama_komponen`,`kontrak`.`id_kontrak` AS `id_kontrak`,`kontrak`.`id_kelas` AS `id_kelas`,`nilai`.`nilai` AS `nilai`,`nilai`.`nilaixbobot` AS `nilaixbobot` from ((((`mahasiswa` left join `kontrak` on(`kontrak`.`nim` = `mahasiswa`.`nim`)) left join `nilai` on(`nilai`.`id_kontrak` = `kontrak`.`id_kontrak`)) left join `bobot` on(`bobot`.`id_bobot` = `nilai`.`id_bobot`)) left join `komponen` on(`komponen`.`id_kompenen` = `bobot`.`id_komponen`))), maha as (select distinct `mhs`.`nim` AS `nim`,`mhs`.`nama_mahasiswa` AS `maha`,`kel`.`id_kelas` AS `idkel`,`ktr`.`id_kontrak` AS `idktr` from ((`mahasiswa` `mhs` join `kontrak` `ktr` on(`ktr`.`nim` = `mhs`.`nim`)) join `kelas` `kel` on(`kel`.`id_kelas` = `ktr`.`id_kelas`))), partisipatif as (select `base`.`nim` AS `nim`,`base`.`nama_mahasiswa` AS `nama_mahasiswa`,`base`.`id_kelas` AS `id_kelas`,`base`.`nilai` AS `partisipatif` from `base` where `base`.`nama_komponen` = 'partisipatif' group by `base`.`nim`,`base`.`nama_mahasiswa`,`base`.`id_kelas`), proyek as (select `base`.`nim` AS `nim`,`base`.`nama_mahasiswa` AS `nama_mahasiswa`,`base`.`id_kelas` AS `id_kelas`,`base`.`nilai` AS `proyek` from `base` where `base`.`nama_komponen` = 'proyek' group by `base`.`nim`,`base`.`nama_mahasiswa`,`base`.`id_kelas`), tugas as (select `base`.`nim` AS `nim`,`base`.`nama_mahasiswa` AS `nama_mahasiswa`,`base`.`id_kelas` AS `id_kelas`,`base`.`nilai` AS `tugas` from `base` where `base`.`nama_komponen` = 'tugas' group by `base`.`nim`,`base`.`nama_mahasiswa`,`base`.`id_kelas`), quiz as (select `base`.`nim` AS `nim`,`base`.`nama_mahasiswa` AS `nama_mahasiswa`,`base`.`id_kelas` AS `id_kelas`,`base`.`nilai` AS `quiz` from `base` where `base`.`nama_komponen` = 'quiz' group by `base`.`nim`,`base`.`nama_mahasiswa`,`base`.`id_kelas`), uts as (select `base`.`nim` AS `nim`,`base`.`nama_mahasiswa` AS `nama_mahasiswa`,`base`.`id_kelas` AS `id_kelas`,`base`.`nilai` AS `uts` from `base` where `base`.`nama_komponen` = 'uts' group by `base`.`nim`,`base`.`nama_mahasiswa`,`base`.`id_kelas`), uas as (select `base`.`nim` AS `nim`,`base`.`nama_mahasiswa` AS `nama_mahasiswa`,`base`.`id_kelas` AS `id_kelas`,`base`.`nilai` AS `uas` from `base` where `base`.`nama_komponen` = 'uas' group by `base`.`nim`,`base`.`nama_mahasiswa`,`base`.`id_kelas`), nilai_akhir as (select `base`.`nim` AS `nim`,`base`.`nama_mahasiswa` AS `nama_mahasiswa`,`base`.`id_kelas` AS `id_kelas`,round(sum(`base`.`nilaixbobot`),1) AS `nilai_akhir` from `base` group by `base`.`nim`,`base`.`nama_mahasiswa`,`base`.`id_kelas`), mutu as (select `base`.`nim` AS `nim`,`base`.`nama_mahasiswa` AS `nama_mahasiswa`,`base`.`id_kelas` AS `id_kelas`,case when round(sum(`base`.`nilaixbobot`),1) >= 90 then 'A' when round(sum(`base`.`nilaixbobot`),1) >= 85 and round(sum(`base`.`nilaixbobot`),1) <= 90 then 'A-' when round(sum(`base`.`nilaixbobot`),1) >= 80 and round(sum(`base`.`nilaixbobot`),1) <= 84.9 then 'B+' when round(sum(`base`.`nilaixbobot`),1) >= 75 and round(sum(`base`.`nilaixbobot`),1) <= 80 then 'B' when round(sum(`base`.`nilaixbobot`),1) >= 70 and round(sum(`base`.`nilaixbobot`),1) <= 74.9 then 'B-' when round(sum(`base`.`nilaixbobot`),1) >= 65 and round(sum(`base`.`nilaixbobot`),1) <= 70 then 'C' when round(sum(`base`.`nilaixbobot`),1) >= 60 and round(sum(`base`.`nilaixbobot`),1) <= 64.9 then 'D' when round(sum(`base`.`nilaixbobot`),1) >= 1 and round(sum(`base`.`nilaixbobot`),1) <= 59.9 then 'E' else NULL end AS `mutu` from `base` group by `base`.`nim`,`base`.`nama_mahasiswa`,`base`.`id_kelas`)select `a`.`nim` AS `nim`,`a`.`nama_mahasiswa` AS `nama_mahasiswa`,`a`.`id_kelas` AS `id_kelas`,`z`.`idktr` AS `idktr`,`i`.`partisipatif` AS `partisipatif`,`b`.`proyek` AS `proyek`,`c`.`tugas` AS `tugas`,`d`.`quiz` AS `quiz`,`e`.`uts` AS `uts`,`f`.`uas` AS `uas`,`g`.`nilai_akhir` AS `nilai_akhir`,`a`.`mutu` AS `mutu` from (((((((((`mutu` `a` left join `maha` `z` on(`z`.`nim` = `a`.`nim` and `z`.`idkel` = `a`.`id_kelas`)) left join `partisipatif` `i` on(`i`.`nim` = `a`.`nim` and `i`.`id_kelas` = `a`.`id_kelas`)) left join `proyek` `b` on(`b`.`nim` = `a`.`nim` and `b`.`id_kelas` = `a`.`id_kelas`)) left join `tugas` `c` on(`c`.`nim` = `a`.`nim` and `c`.`id_kelas` = `a`.`id_kelas`)) left join `quiz` `d` on(`d`.`nim` = `a`.`nim` and `d`.`id_kelas` = `a`.`id_kelas`)) left join `uts` `e` on(`e`.`nim` = `a`.`nim` and `e`.`id_kelas` = `a`.`id_kelas`)) left join `uas` `f` on(`f`.`nim` = `a`.`nim` and `f`.`id_kelas` = `a`.`id_kelas`)) left join `nilai_akhir` `g` on(`g`.`nim` = `a`.`nim` and `g`.`id_kelas` = `a`.`id_kelas`)) left join `mutu` `h` on(`h`.`nim` = `a`.`nim` and `h`.`id_kelas` = `a`.`id_kelas`)) order by `a`.`nama_mahasiswa`  ;

-- --------------------------------------------------------

--
-- Structure for view `vna2`
--
DROP TABLE IF EXISTS `vna2`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vna2`  AS   with base as (select `mahasiswa`.`nim` AS `nim`,`mahasiswa`.`nama_mahasiswa` AS `nama_mahasiswa`,`komponen`.`nama_komponen` AS `nama_komponen`,`kontrak`.`id_kontrak` AS `id_kontrak`,`kontrak`.`id_kelas` AS `id_kelas`,`nilai`.`nilai` AS `nilai`,`nilai`.`nilaixbobot` AS `nilaixbobot` from ((((`mahasiswa` left join `kontrak` on(`kontrak`.`nim` = `mahasiswa`.`nim`)) left join `nilai` on(`nilai`.`id_kontrak` = `kontrak`.`id_kontrak`)) left join `bobot` on(`bobot`.`id_bobot` = `nilai`.`id_bobot`)) left join `komponen` on(`komponen`.`id_kompenen` = `bobot`.`id_komponen`))), maha as (select distinct `mhs`.`nim` AS `nim`,`mhs`.`nama_mahasiswa` AS `maha`,`kel`.`id_kelas` AS `idkel`,`ktr`.`id_kontrak` AS `idktr` from ((`mahasiswa` `mhs` join `kontrak` `ktr` on(`ktr`.`nim` = `mhs`.`nim`)) join `kelas` `kel` on(`kel`.`id_kelas` = `ktr`.`id_kelas`))), partisipatif as (select `base`.`nim` AS `nim`,`base`.`nama_mahasiswa` AS `nama_mahasiswa`,`base`.`id_kelas` AS `id_kelas`,`base`.`nilai` AS `partisipatif` from `base` where `base`.`nama_komponen` = 'partisipatif' group by `base`.`nim`,`base`.`nama_mahasiswa`,`base`.`id_kelas`), proyek as (select `base`.`nim` AS `nim`,`base`.`nama_mahasiswa` AS `nama_mahasiswa`,`base`.`id_kelas` AS `id_kelas`,`base`.`nilai` AS `proyek` from `base` where `base`.`nama_komponen` = 'proyek' group by `base`.`nim`,`base`.`nama_mahasiswa`,`base`.`id_kelas`), tugas as (select `base`.`nim` AS `nim`,`base`.`nama_mahasiswa` AS `nama_mahasiswa`,`base`.`id_kelas` AS `id_kelas`,`base`.`nilai` AS `tugas` from `base` where `base`.`nama_komponen` = 'tugas' group by `base`.`nim`,`base`.`nama_mahasiswa`,`base`.`id_kelas`), quiz as (select `base`.`nim` AS `nim`,`base`.`nama_mahasiswa` AS `nama_mahasiswa`,`base`.`id_kelas` AS `id_kelas`,`base`.`nilai` AS `quiz` from `base` where `base`.`nama_komponen` = 'quiz' group by `base`.`nim`,`base`.`nama_mahasiswa`,`base`.`id_kelas`), uts as (select `base`.`nim` AS `nim`,`base`.`nama_mahasiswa` AS `nama_mahasiswa`,`base`.`id_kelas` AS `id_kelas`,`base`.`nilai` AS `uts` from `base` where `base`.`nama_komponen` = 'uts' group by `base`.`nim`,`base`.`nama_mahasiswa`,`base`.`id_kelas`), uas as (select `base`.`nim` AS `nim`,`base`.`nama_mahasiswa` AS `nama_mahasiswa`,`base`.`id_kelas` AS `id_kelas`,`base`.`nilai` AS `uas` from `base` where `base`.`nama_komponen` = 'uas' group by `base`.`nim`,`base`.`nama_mahasiswa`,`base`.`id_kelas`), nilai_akhir as (select `base`.`nim` AS `nim`,`base`.`nama_mahasiswa` AS `nama_mahasiswa`,`base`.`id_kelas` AS `id_kelas`,round(sum(`base`.`nilaixbobot`),1) AS `nilai_akhir` from `base` group by `base`.`nim`,`base`.`nama_mahasiswa`,`base`.`id_kelas`)select `a`.`nim` AS `nim`,`a`.`nama_mahasiswa` AS `nama_mahasiswa`,`a`.`id_kelas` AS `id_kelas`,`z`.`idktr` AS `idktr`,`i`.`partisipatif` AS `partisipatif`,`b`.`proyek` AS `proyek`,`c`.`tugas` AS `tugas`,`d`.`quiz` AS `quiz`,`e`.`uts` AS `uts`,`f`.`uas` AS `uas`,`a`.`nilai_akhir` AS `nilai_akhir` from (((((((`nilai_akhir` `a` left join `maha` `z` on(`z`.`nim` = `a`.`nim` and `z`.`idkel` = `a`.`id_kelas`)) left join `partisipatif` `i` on(`i`.`nim` = `a`.`nim` and `i`.`id_kelas` = `a`.`id_kelas`)) left join `proyek` `b` on(`b`.`nim` = `a`.`nim` and `b`.`id_kelas` = `a`.`id_kelas`)) left join `tugas` `c` on(`c`.`nim` = `a`.`nim` and `c`.`id_kelas` = `a`.`id_kelas`)) left join `quiz` `d` on(`d`.`nim` = `a`.`nim` and `d`.`id_kelas` = `a`.`id_kelas`)) left join `uts` `e` on(`e`.`nim` = `a`.`nim` and `e`.`id_kelas` = `a`.`id_kelas`)) left join `uas` `f` on(`f`.`nim` = `a`.`nim` and `f`.`id_kelas` = `a`.`id_kelas`)) order by `a`.`nama_mahasiswa`  ;

-- --------------------------------------------------------

--
-- Structure for view `vna_mutu_indeks`
--
DROP TABLE IF EXISTS `vna_mutu_indeks`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vna_mutu_indeks`  AS SELECT `v`.`nim` AS `nim`, `v`.`nama_mahasiswa` AS `nama_mahasiswa`, `v`.`id_kelas` AS `id_kelas`, `v`.`idktr` AS `idktr`, `v`.`partisipatif` AS `partisipatif`, `v`.`proyek` AS `proyek`, `v`.`tugas` AS `tugas`, `v`.`quiz` AS `quiz`, `v`.`uts` AS `uts`, `v`.`uas` AS `uas`, `v`.`nilai_akhir` AS `nilai_akhir`, `sn`.`nilai_indeks_huruf` AS `mutu`, `sn`.`indeks` AS `indeks` FROM (`vna` `v` left join `standard_nilai` `sn` on(`sn`.`id_kelas` = `v`.`id_kelas` and `v`.`nilai_akhir` >= `sn`.`start_nilai` and `v`.`nilai_akhir` <= `sn`.`end_nilai`))  ;

-- --------------------------------------------------------

--
-- Structure for view `vna_mutu_indeks_smt`
--
DROP TABLE IF EXISTS `vna_mutu_indeks_smt`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vna_mutu_indeks_smt`  AS SELECT `v`.`nim` AS `nim`, `v`.`nama_mahasiswa` AS `nama_mahasiswa`, `v`.`id_kelas` AS `id_kelas`, `v`.`idktr` AS `idktr`, `smt`.`id_semester` AS `id_semester`, `v`.`partisipatif` AS `partisipatif`, `v`.`proyek` AS `proyek`, `v`.`tugas` AS `tugas`, `v`.`quiz` AS `quiz`, `v`.`uts` AS `uts`, `v`.`uas` AS `uas`, `v`.`nilai_akhir` AS `nilai_akhir`, `sn`.`nilai_indeks_huruf` AS `mutu`, `sn`.`indeks` AS `indeks` FROM (((`vna` `v` left join `standard_nilai` `sn` on(`sn`.`id_kelas` = `v`.`id_kelas` and `v`.`nilai_akhir` >= `sn`.`start_nilai` and `v`.`nilai_akhir` <= `sn`.`end_nilai`)) left join `kelas` `kel` on(`kel`.`id_kelas` = `v`.`id_kelas`)) left join `semester` `smt` on(`smt`.`id_semester` = `kel`.`id_semester`))  ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `assessment`
--
ALTER TABLE `assessment`
  ADD PRIMARY KEY (`id_assessment`);

--
-- Indexes for table `bobot`
--
ALTER TABLE `bobot`
  ADD PRIMARY KEY (`id_bobot`),
  ADD KEY `FK_bobot_kelas` (`id_kelas`),
  ADD KEY `FK_bobot_komponen` (`id_komponen`);

--
-- Indexes for table `bukti`
--
ALTER TABLE `bukti`
  ADD PRIMARY KEY (`id_bukti`);

--
-- Indexes for table `dosen`
--
ALTER TABLE `dosen`
  ADD PRIMARY KEY (`id_dosen`),
  ADD KEY `FK_dosen_prodi` (`id_prodi`);

--
-- Indexes for table `dosen_ampu`
--
ALTER TABLE `dosen_ampu`
  ADD PRIMARY KEY (`id_dosen_ampu`),
  ADD KEY `FK_dosen_matkul` (`id_dosen`),
  ADD KEY `FK_matkul` (`id_mata_kuliah`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `fakultas`
--
ALTER TABLE `fakultas`
  ADD PRIMARY KEY (`id_fakultas`);

--
-- Indexes for table `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`id_kelas`),
  ADD KEY `FK_kelas_semester` (`id_semester`),
  ADD KEY `FK_kelas_dosenAmpu` (`id_dosen_ampu`);

--
-- Indexes for table `komponen`
--
ALTER TABLE `komponen`
  ADD PRIMARY KEY (`id_kompenen`);

--
-- Indexes for table `kontrak`
--
ALTER TABLE `kontrak`
  ADD PRIMARY KEY (`id_kontrak`),
  ADD KEY `FK_kontrak_kelas` (`id_kelas`),
  ADD KEY `FK_kontrak_mhs` (`nim`);

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`nim`);

--
-- Indexes for table `mata_kuliah`
--
ALTER TABLE `mata_kuliah`
  ADD PRIMARY KEY (`id_mata_kuliah`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nilai`
--
ALTER TABLE `nilai`
  ADD PRIMARY KEY (`id_nilai`),
  ADD KEY `FK_nilai_kontrak` (`id_kontrak`),
  ADD KEY `FK_nilai_bobot` (`id_bobot`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `penilaian`
--
ALTER TABLE `penilaian`
  ADD PRIMARY KEY (`id_penilaian`),
  ADD KEY `FK_penialaian_bukti` (`id_bukti`),
  ADD KEY `FK_penilaian_waktu_ujian` (`id_assessment`),
  ADD KEY `FK_penilaian_bobot` (`id_bobot`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `prodi`
--
ALTER TABLE `prodi`
  ADD PRIMARY KEY (`id_prodi`),
  ADD KEY `FK_prodi_fakultas` (`id_fakultas`);

--
-- Indexes for table `semester`
--
ALTER TABLE `semester`
  ADD PRIMARY KEY (`id_semester`);

--
-- Indexes for table `standard_nilai`
--
ALTER TABLE `standard_nilai`
  ADD PRIMARY KEY (`id_standard_nilai`),
  ADD KEY `FK_standard_kelas` (`id_kelas`);

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
-- AUTO_INCREMENT for table `assessment`
--
ALTER TABLE `assessment`
  MODIFY `id_assessment` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `bobot`
--
ALTER TABLE `bobot`
  MODIFY `id_bobot` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

--
-- AUTO_INCREMENT for table `bukti`
--
ALTER TABLE `bukti`
  MODIFY `id_bukti` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `dosen`
--
ALTER TABLE `dosen`
  MODIFY `id_dosen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `dosen_ampu`
--
ALTER TABLE `dosen_ampu`
  MODIFY `id_dosen_ampu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `fakultas`
--
ALTER TABLE `fakultas`
  MODIFY `id_fakultas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `kelas`
--
ALTER TABLE `kelas`
  MODIFY `id_kelas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `komponen`
--
ALTER TABLE `komponen`
  MODIFY `id_kompenen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `kontrak`
--
ALTER TABLE `kontrak`
  MODIFY `id_kontrak` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `nim` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1707981;

--
-- AUTO_INCREMENT for table `mata_kuliah`
--
ALTER TABLE `mata_kuliah`
  MODIFY `id_mata_kuliah` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `nilai`
--
ALTER TABLE `nilai`
  MODIFY `id_nilai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=332;

--
-- AUTO_INCREMENT for table `penilaian`
--
ALTER TABLE `penilaian`
  MODIFY `id_penilaian` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `prodi`
--
ALTER TABLE `prodi`
  MODIFY `id_prodi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `semester`
--
ALTER TABLE `semester`
  MODIFY `id_semester` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `standard_nilai`
--
ALTER TABLE `standard_nilai`
  MODIFY `id_standard_nilai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bobot`
--
ALTER TABLE `bobot`
  ADD CONSTRAINT `FK_bobot_kelas` FOREIGN KEY (`id_kelas`) REFERENCES `kelas` (`id_kelas`),
  ADD CONSTRAINT `FK_bobot_komponen` FOREIGN KEY (`id_komponen`) REFERENCES `komponen` (`id_kompenen`);

--
-- Constraints for table `dosen`
--
ALTER TABLE `dosen`
  ADD CONSTRAINT `FK_dosen_prodi` FOREIGN KEY (`id_prodi`) REFERENCES `prodi` (`id_prodi`);

--
-- Constraints for table `dosen_ampu`
--
ALTER TABLE `dosen_ampu`
  ADD CONSTRAINT `FK_dosen_matkul` FOREIGN KEY (`id_dosen`) REFERENCES `dosen` (`id_dosen`),
  ADD CONSTRAINT `FK_matkul` FOREIGN KEY (`id_mata_kuliah`) REFERENCES `mata_kuliah` (`id_mata_kuliah`);

--
-- Constraints for table `kelas`
--
ALTER TABLE `kelas`
  ADD CONSTRAINT `FK_kelas_dosenAmpu` FOREIGN KEY (`id_dosen_ampu`) REFERENCES `dosen_ampu` (`id_dosen_ampu`),
  ADD CONSTRAINT `FK_kelas_semester` FOREIGN KEY (`id_semester`) REFERENCES `semester` (`id_semester`);

--
-- Constraints for table `kontrak`
--
ALTER TABLE `kontrak`
  ADD CONSTRAINT `FK_kontrak_kelas` FOREIGN KEY (`id_kelas`) REFERENCES `kelas` (`id_kelas`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `FK_kontrak_mhs` FOREIGN KEY (`nim`) REFERENCES `mahasiswa` (`nim`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `nilai`
--
ALTER TABLE `nilai`
  ADD CONSTRAINT `FK_nilai_bobot` FOREIGN KEY (`id_bobot`) REFERENCES `bobot` (`id_bobot`),
  ADD CONSTRAINT `FK_nilai_kontrak` FOREIGN KEY (`id_kontrak`) REFERENCES `kontrak` (`id_kontrak`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `penilaian`
--
ALTER TABLE `penilaian`
  ADD CONSTRAINT `FK_penialaian_bukti` FOREIGN KEY (`id_bukti`) REFERENCES `bukti` (`id_bukti`),
  ADD CONSTRAINT `FK_penilaian_bobot` FOREIGN KEY (`id_bobot`) REFERENCES `bobot` (`id_bobot`),
  ADD CONSTRAINT `FK_penilaian_waktu_ujian` FOREIGN KEY (`id_assessment`) REFERENCES `assessment` (`id_assessment`);

--
-- Constraints for table `prodi`
--
ALTER TABLE `prodi`
  ADD CONSTRAINT `FK_prodi_fakultas` FOREIGN KEY (`id_fakultas`) REFERENCES `fakultas` (`id_fakultas`);

--
-- Constraints for table `standard_nilai`
--
ALTER TABLE `standard_nilai`
  ADD CONSTRAINT `FK_standard_kelas` FOREIGN KEY (`id_kelas`) REFERENCES `kelas` (`id_kelas`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
