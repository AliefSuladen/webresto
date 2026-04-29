-- phpMyAdmin SQL Dump
-- version 5.2.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 29, 2026 at 02:54 PM
-- Server version: 8.4.3
-- PHP Version: 8.3.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `resto`
--

-- --------------------------------------------------------

--
-- Table structure for table `komentar`
--

CREATE TABLE `komentar` (
  `id` int NOT NULL,
  `user_id` int DEFAULT NULL,
  `restoran_id` int DEFAULT NULL,
  `komentar` text,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT NULL,
  `rating` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `komentar`
--

INSERT INTO `komentar` (`id`, `user_id`, `restoran_id`, `komentar`, `created_at`, `updated_at`, `rating`) VALUES
(3, 3, 4, 'Lemakk', '2026-04-29 14:16:46', '2026-04-29 14:16:46', 5),
(4, 3, 4, 'Kureng', '2026-04-29 14:17:02', '2026-04-29 14:17:02', 1),
(5, 3, 3, 'Mantab', '2026-04-29 14:28:36', '2026-04-29 14:28:36', 4);

-- --------------------------------------------------------

--
-- Table structure for table `restoran`
--

CREATE TABLE `restoran` (
  `id` int NOT NULL,
  `nama` varchar(150) DEFAULT NULL,
  `alamat` text,
  `deskripsi` text,
  `gambar` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `restoran`
--

INSERT INTO `restoran` (`id`, `nama`, `alamat`, `deskripsi`, `gambar`, `created_at`, `updated_at`) VALUES
(2, 'Warung Apek', 'dscascscsac2222', 'scascascascas1111', '1777469774_a817e68f4dd91252409a.png', '2026-04-29 13:36:14', '2026-04-29 13:37:02'),
(3, 'Pempek Candy', 'Jl. Jend. Sudirman No.149, Palembang', 'Pempek legendaris dengan rasa khas Palembang.', '1777469774_a817e68f4dd91252409a.png', '2026-04-29 20:38:15', '2026-04-29 20:38:15'),
(4, 'RM Pindang Musi Rawas', 'Jl. Demang Lebar Daun, Palembang', 'Spesialis pindang ikan patin dengan kuah segar.', '1777469774_a817e68f4dd91252409a.png', '2026-04-29 20:38:15', '2026-04-29 20:38:15'),
(5, 'Martabak HAR', 'Jl. Jend. Sudirman, Palembang', 'Martabak telur khas India dengan kuah kari.', '1777469774_a817e68f4dd91252409a.png', '2026-04-29 20:38:15', '2026-04-29 20:38:15'),
(6, 'RM Sri Melayu', 'Jl. Demang Lebar Daun, Palembang', 'Restoran keluarga dengan menu khas Palembang.', '1777469774_a817e68f4dd91252409a.png', '2026-04-29 20:38:15', '2026-04-29 20:38:15'),
(7, 'Warung Makan Sederhana', 'Jl. Kolonel Atmo, Palembang', 'Masakan rumahan dengan harga terjangkau.', '1777469774_a817e68f4dd91252409a.png', '2026-04-29 20:38:15', '2026-04-29 20:38:15'),
(8, 'Pempek Vico', 'Jl. Letkol Iskandar, Palembang', 'Pempek terkenal dengan cuko kental.', '1777469774_a817e68f4dd91252409a.png', '2026-04-29 20:38:15', '2026-04-29 20:38:15'),
(9, 'Ayam Bakar Wong Solo', 'Jl. Basuki Rahmat, Palembang', 'Ayam bakar dengan bumbu khas.', '1777469774_a817e68f4dd91252409a.png', '2026-04-29 20:38:15', '2026-04-29 20:38:15'),
(10, 'Kopi Kulo Palembang', 'Jl. Angkatan 45, Palembang', 'Tempat nongkrong dengan kopi kekinian.', '1777469774_a817e68f4dd91252409a.png', '2026-04-29 20:38:15', '2026-04-29 20:38:15'),
(11, 'Mantap Pindang', 'Jl. Angkatan 45 No.18, Lorok Pakjo, Kec. Ilir Bar. I, Kota Palembang, Sumatera Selatan 30137', 'Masakan pindang Paling Lemak Sepalembang', '1777473225_8c4b8ec611ffc12dd604.png', '2026-04-29 14:33:45', '2026-04-29 14:34:56');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` enum('admin','user') DEFAULT 'user',
  `is_active` tinyint(1) DEFAULT '1',
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `role`, `is_active`, `created_at`, `updated_at`) VALUES
(1, 'scxasc', 'cascas@gmail.com', '$2y$10$kZpAu2GcTPDxqUm7fuzPGun19WK8foztv3nvPhXF8z6VWhk8sjZ.m', 'user', 1, '2026-04-29 13:07:37', '2026-04-29 13:07:37'),
(2, 'ajib', 'ajib@gmail.com', '$2y$10$cI3ZYhXuYSzywPklbZuFr.0N664uqlo0faW97UHvguoTATnQRqIpO', 'admin', 1, '2026-04-29 13:08:08', '2026-04-29 20:09:14'),
(3, 'Ican', 'ican@gmail.com', '$2y$10$HWFgtahfuD7ooY9gJfg6keHrgoTYswQmT211b3rtuiO7.8PCSWXGC', 'user', 1, '2026-04-29 14:06:33', '2026-04-29 14:06:33');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `komentar`
--
ALTER TABLE `komentar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `restoran`
--
ALTER TABLE `restoran`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `komentar`
--
ALTER TABLE `komentar`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `restoran`
--
ALTER TABLE `restoran`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
