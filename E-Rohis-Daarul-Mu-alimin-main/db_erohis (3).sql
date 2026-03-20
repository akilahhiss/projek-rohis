-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 04, 2026 at 03:25 AM
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
-- Database: `db_erohis`
--

-- --------------------------------------------------------

--
-- Table structure for table `galeri`
--

CREATE TABLE `galeri` (
  `id` int(11) NOT NULL,
  `judul` varchar(225) NOT NULL,
  `deskripsi` text DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `foto` varchar(225) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `galeri`
--

INSERT INTO `galeri` (`id`, `judul`, `deskripsi`, `tanggal`, `foto`, `created_at`) VALUES
(2, 'Dhuha yaiayaa', 'Dhuha ada program kerja sekolah yang dilakukan setiap Selasa dan Kamis sebelum memulai KBM', '2026-03-03', 'Brown Modern Cat Pet Photo Collage Desktop Wallpaper.png', '2026-03-03 08:52:26'),
(3, 'Idul Adha', 'Idul Adha merupakan program kerja sekolah yang diadakan setiap tahun. Melibatkan kepengurusan Rohis sebagai panita🕌🐄', '2025-07-03', '0d39a177a211a1f119af40382f945df4.jpg', '2026-03-03 10:14:21'),
(6, 'aaakilahajjj', 'aaa', '2026-03-17', 'Brown Modern Cat Pet Photo Collage Desktop Wallpaper (1).png', '2026-03-03 10:30:27'),
(7, 'Dhuha', 'aa', '2026-03-03', '0d39a177a211a1f119af40382f945df4.jpg', '2026-03-03 10:31:06'),
(8, 'Pesantren Ramadhan', 'Pesantren Ramadham adalah kegiatan keagamaan islam yang dilakukan watu KBM berlangsung.', '2026-03-04', 'sanram.jpg', '2026-03-03 23:46:44');

-- --------------------------------------------------------

--
-- Table structure for table `kandidat`
--

CREATE TABLE `kandidat` (
  `id_kandidat` int(11) NOT NULL,
  `nama_kandidat` varchar(100) NOT NULL,
  `jabatan` enum('Ketua Umum','Koordinator Akhwat') NOT NULL,
  `no_urut` int(11) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `visi_misi` text DEFAULT NULL,
  `kelas` varchar(50) DEFAULT NULL,
  `suara` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kandidat`
--

INSERT INTO `kandidat` (`id_kandidat`, `nama_kandidat`, `jabatan`, `no_urut`, `foto`, `visi_misi`, `kelas`, `suara`) VALUES
(9, 'Park Jeong-Woo', 'Ketua Umum', 1, 'kandidat_69a70669c2ca46.91009855.jpg', 'Visi:\r\nMewujudkan Rohis yang aktif, kreatif, dan inspiratif dalam membentuk generasi muslim yang berakhlak mulia, berilmu, serta mampu memberikan dampak positif di lingkungan sekolah.\r\n\r\nMisi:\r\nUntuk mewujudkan visi tersebut, saya akan:\r\n\r\nMengadakan kegiatan keislaman yang menarik, edukatif, dan sesuai dengan kebutuhan remaja masa kini.\r\n\r\nMenumbuhkan kebiasaan akhlakul karimah dalam kehidupan sehari-hari di sekolah.\r\n\r\nMengoptimalkan dakwah melalui media sosial agar lebih aktif, informatif, dan bermanfaat.\r\n\r\nMeningkatkan kekompakan dan kerja sama antaranggota Rohis serta organisasi lain di sekolah.\r\n\r\nMengadakan program rutin seperti kajian, mentoring, dan kegiatan sosial guna mempererat ukhuwah Islamiyah.\r\n\r\nMengembangkan potensi anggota dalam bidang kepemimpinan, kreativitas, dan public speaking.', 'XI RPL 1', 1),
(10, 'Yoon Jae Hyuk', 'Ketua Umum', 2, 'kandidat_69a706af4d7dc2.30081061.jpg', 'Visi:\r\nMewujudkan Rohis yang aktif, kreatif, dan inspiratif dalam membentuk generasi muslim yang berakhlak mulia, berilmu, serta mampu memberikan dampak positif di lingkungan sekolah.\r\n\r\nMisi:\r\nUntuk mewujudkan visi tersebut, saya akan:\r\n\r\nMengadakan kegiatan keislaman yang menarik, edukatif, dan sesuai dengan kebutuhan remaja masa kini.\r\n\r\nMenumbuhkan kebiasaan akhlakul karimah dalam kehidupan sehari-hari di sekolah.\r\n\r\nMengoptimalkan dakwah melalui media sosial agar lebih aktif, informatif, dan bermanfaat.\r\n\r\nMeningkatkan kekompakan dan kerja sama antaranggota Rohis serta organisasi lain di sekolah.\r\n\r\nMengadakan program rutin seperti kajian, mentoring, dan kegiatan sosial guna mempererat ukhuwah Islamiyah.\r\n\r\nMengembangkan potensi anggota dalam bidang kepemimpinan, kreativitas, dan public speaking.', 'XI RPL 1', 0),
(11, 'Juun', 'Koordinator Akhwat', 1, 'kandidat_69a706cc4443e4.01873378.jpg', 'Visi:\r\nMewujudkan Rohis yang aktif, kreatif, dan inspiratif dalam membentuk generasi muslim yang berakhlak mulia, berilmu, serta mampu memberikan dampak positif di lingkungan sekolah.\r\n\r\nMisi:\r\nUntuk mewujudkan visi tersebut, saya akan:\r\n\r\nMengadakan kegiatan keislaman yang menarik, edukatif, dan sesuai dengan kebutuhan remaja masa kini.\r\n\r\nMenumbuhkan kebiasaan akhlakul karimah dalam kehidupan sehari-hari di sekolah.\r\n\r\nMengoptimalkan dakwah melalui media sosial agar lebih aktif, informatif, dan bermanfaat.\r\n\r\nMeningkatkan kekompakan dan kerja sama antaranggota Rohis serta organisasi lain di sekolah.\r\n\r\nMengadakan program rutin seperti kajian, mentoring, dan kegiatan sosial guna mempererat ukhuwah Islamiyah.\r\n\r\nMengembangkan potensi anggota dalam bidang kepemimpinan, kreativitas, dan public speaking.', 'XI RPL 1', 0),
(12, 'Stella', 'Koordinator Akhwat', 2, 'kandidat_69a706e3efd697.09247962.jpg', 'Visi:\r\nMewujudkan Rohis yang aktif, kreatif, dan inspiratif dalam membentuk generasi muslim yang berakhlak mulia, berilmu, serta mampu memberikan dampak positif di lingkungan sekolah.\r\n\r\nMisi:\r\nUntuk mewujudkan visi tersebut, saya akan:\r\n\r\nMengadakan kegiatan keislaman yang menarik, edukatif, dan sesuai dengan kebutuhan remaja masa kini.\r\n\r\nMenumbuhkan kebiasaan akhlakul karimah dalam kehidupan sehari-hari di sekolah.\r\n\r\nMengoptimalkan dakwah melalui media sosial agar lebih aktif, informatif, dan bermanfaat.\r\n\r\nMeningkatkan kekompakan dan kerja sama antaranggota Rohis serta organisasi lain di sekolah.\r\n\r\nMengadakan program rutin seperti kajian, mentoring, dan kegiatan sosial guna mempererat ukhuwah Islamiyah.\r\n\r\nMengembangkan potensi anggota dalam bidang kepemimpinan, kreativitas, dan public speaking.', 'XI RPL 1', 0);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `kelas` varchar(20) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `role` enum('admin','anggota') NOT NULL,
  `status` enum('aktif','nonaktif') NOT NULL DEFAULT 'aktif',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `nama_lengkap`, `kelas`, `username`, `password`, `role`, `status`, `created_at`) VALUES
(1, 'keiyla', 'XI RPL 1', 'keiyla27', '12345', 'anggota', 'nonaktif', '2026-02-27 02:51:55'),
(3, 'azzani', 'XI RPL 1', 'azzani27', '12345', 'anggota', 'aktif', '2026-02-27 03:31:56');

-- --------------------------------------------------------

--
-- Table structure for table `oprec`
--

CREATE TABLE `oprec` (
  `id_oprec` int(11) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `kelas` enum('X RPL 1','X RPL 2','X DKV 1','X DKV 2','X DKV 3','X DKV 4','X SIJA 1','X SIJA 2','X TKJ 1','X TKJ 2','X DPIB 1','X DPIB 2','X TKP 1','X TKP 2','X TOI 1','X TOI 2','X TFLM 1','X TFLM 2','X TKR 1','X TKR 2','X TKR 3','X TP 1','X TP 2') NOT NULL,
  `alasan_masuk` text NOT NULL,
  `no_wa` varchar(13) DEFAULT NULL,
  `waktu_daftar` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `oprec`
--

INSERT INTO `oprec` (`id_oprec`, `nama_lengkap`, `kelas`, `alasan_masuk`, `no_wa`, `waktu_daftar`) VALUES
(1, 'Akilah Isnaini', 'X TKP 2', 'pengen aja kak', NULL, '2026-03-03 04:40:09'),
(2, 'Akilah Isnaini', 'X RPL 1', 'pengen aja kak', NULL, '2026-03-03 04:40:09'),
(3, 'akilah', 'X DKV 3', 'mau aja', '089822', '0000-00-00 00:00:00'),
(4, 'akilah', 'X DKV 3', 'mau aja', '089822', '2026-03-03 04:48:06'),
(5, 'akilah', 'X DKV 3', 'mau aja', '089822', '2026-03-03 04:48:13'),
(6, 'aa', 'X RPL 1', 'pengen aja kak', '089822', '2026-03-03 04:50:33'),
(7, 'azzani', 'X TKP 1', 'oiii', '02828732', '2026-03-03 04:51:23'),
(8, 'azzani', 'X TKP 1', 'oiii', '02828732', '2026-03-03 04:51:40'),
(9, 'akilah', 'X TKP 1', 'aaa', '029382', '2026-03-03 04:51:56'),
(10, 'aa', 'X DPIB 2', 'wkwwhkeujs', '085888306630', '2026-03-03 04:57:40');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `galeri`
--
ALTER TABLE `galeri`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kandidat`
--
ALTER TABLE `kandidat`
  ADD PRIMARY KEY (`id_kandidat`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `oprec`
--
ALTER TABLE `oprec`
  ADD PRIMARY KEY (`id_oprec`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `galeri`
--
ALTER TABLE `galeri`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `kandidat`
--
ALTER TABLE `kandidat`
  MODIFY `id_kandidat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `oprec`
--
ALTER TABLE `oprec`
  MODIFY `id_oprec` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
