-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 14, 2022 at 09:17 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sibershop`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(5) NOT NULL,
  `nama_admin` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `nama_admin`, `email`, `password`) VALUES
(1, 'jairiidriss', 'jairiidriss@gmail.com', 'f7c3bc1d808e04732adf679965ccc34ca7ae3441');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `id_booking` int(5) NOT NULL,
  `tanggal_dibuat` datetime NOT NULL,
  `id_klien` int(5) NOT NULL,
  `id_karyawan` int(2) NOT NULL,
  `waktu_mulai` datetime NOT NULL,
  `waktu_selesai` datetime NOT NULL,
  `batal` int(1) NOT NULL,
  `alasan_pembatalan` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`id_booking`, `tanggal_dibuat`, `id_klien`, `id_karyawan`, `waktu_mulai`, `waktu_selesai`, `batal`, `alasan_pembatalan`) VALUES
(10, '2021-02-06 13:40:00', 11, 3, '2021-02-08 09:30:00', '2021-02-08 09:50:00', 0, ''),
(11, '2021-03-20 08:22:00', 12, 3, '2021-03-22 06:00:00', '2021-03-22 06:20:00', 0, ''),
(14, '2022-11-30 01:31:00', 1, 3, '2022-12-05 02:00:00', '2022-12-05 02:20:00', 0, ''),
(15, '2022-11-30 01:32:00', 1, 3, '2022-12-05 02:30:00', '2022-12-05 03:05:00', 0, ''),
(16, '2022-11-30 01:32:00', 1, 3, '2022-12-05 04:00:00', '2022-12-05 04:15:00', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `jadwal_karyawan`
--

CREATE TABLE `jadwal_karyawan` (
  `id` int(5) NOT NULL,
  `id_karyawan` int(2) NOT NULL,
  `id_hari` tinyint(1) NOT NULL,
  `dari_jam` time NOT NULL,
  `sampai_jam` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jadwal_karyawan`
--

INSERT INTO `jadwal_karyawan` (`id`, `id_karyawan`, `id_hari`, `dari_jam`, `sampai_jam`) VALUES
(29, 3, 1, '09:00:00', '18:00:00'),
(30, 3, 7, '09:00:00', '17:00:00'),
(33, 1, 1, '09:00:00', '18:00:00'),
(34, 1, 2, '15:00:00', '22:00:00'),
(35, 1, 3, '09:00:00', '18:00:00'),
(36, 1, 4, '00:00:00', '20:00:00'),
(37, 1, 7, '09:00:00', '18:00:00'),
(38, 2, 1, '09:00:00', '17:00:00'),
(39, 2, 6, '09:00:00', '18:00:00'),
(40, 2, 7, '09:00:00', '18:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `karyawan`
--

CREATE TABLE `karyawan` (
  `id_karyawan` int(2) NOT NULL,
  `nama_depan` varchar(20) NOT NULL,
  `nama_belakang` varchar(20) NOT NULL,
  `no_telepon` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `karyawan`
--

INSERT INTO `karyawan` (`id_karyawan`, `nama_depan`, `nama_belakang`, `no_telepon`, `email`) VALUES
(2, 'K', 'Riko', '0888344444', 'syadhalim059@gmail.com'),
(3, 'Santino\r\n', 'Tesoro', '', ''),
(21, 'jonas', 'jupri', '0888344444', 'Jonas@gmail.com'),
(22, 'putra', 'Maulana', '0888339877', 'rohim666@yahoo.com'),
(23, 'usman', 'bin affan', '009898685', 'usman123@gmail.com'),
(24, 'usman', 'bin affan', '087867657', 'usman123@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `kategori_layanan`
--

CREATE TABLE `kategori_layanan` (
  `id_kategori` int(2) NOT NULL,
  `nama_kategori` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kategori_layanan`
--

INSERT INTO `kategori_layanan` (`id_kategori`, `nama_kategori`) VALUES
(2, 'Shaving'),
(3, 'Face Masking'),
(4, 'Uncategorized'),
(8, 'Biasa saja, kamu tak apa');

-- --------------------------------------------------------

--
-- Table structure for table `klien`
--

CREATE TABLE `klien` (
  `id_klien` int(5) NOT NULL,
  `nama_depan_klien` varchar(30) NOT NULL,
  `nama_belakang_klien` varchar(30) NOT NULL,
  `no_telepon_klien` varchar(30) NOT NULL,
  `email_klien` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `klien`
--

INSERT INTO `klien` (`id_klien`, `nama_depan_klien`, `nama_belakang_klien`, `no_telepon_klien`, `email_klien`) VALUES
(1, 'Dennis', 'S Embry', '651-779-6791', 'dennis_embry@gmail.com'),
(2, 'Bonnie', 'A Rivera', '714-327-5825', 'bonnie_rivera@yahoo.fr'),
(3, 'Keltoum', 'Adrar', '0634355566', 'ad.keltoum@gmail.com'),
(4, 'Hachemi', 'Jairi', '03033346655', 'jairi.hachemi123@gmail.com'),
(5, 'Idriss', 'Jairi', '0634308303', 'jairiidriss@gmail.com'),
(7, 'Arabi', 'Adarar', '033201039290', 'arabi.adrar@gmial.com'),
(8, 'dqsd', 'qsdqsd', '030300303', 'qsdqsdqs@d.ss'),
(11, 'wer', 'wer', '1321323223', 'asdas@asds.sdf'),
(12, 'fdhghdfyh', 'dfhdfh', '1234567890', 'asdas@asfds.sdf'),
(13, 'Irsyad', 'Halimi', '0844557382', 'syadhalim@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `layanan`
--

CREATE TABLE `layanan` (
  `id_layanan` int(5) NOT NULL,
  `nama_layanan` varchar(50) NOT NULL,
  `deskripsi_layanan` varchar(225) NOT NULL,
  `biaya_layanan` int(10) NOT NULL,
  `durasi_layanan` int(5) NOT NULL,
  `id_kategori` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `layanan`
--

INSERT INTO `layanan` (`id_layanan`, `nama_layanan`, `deskripsi_layanan`, `biaya_layanan`, `durasi_layanan`, `id_kategori`) VALUES
(1, 'Hair Cut', 'Barber is a person whose occupation is mainly to cut dress groom style and shave men', 50000, 20, 4),
(4, 'Clean Shaving', 'Barber is a person whose occupation is mainly to cut dress groom style and shave men', 20000, 20, 2),
(7, 'White Facial', 'Barber is a person whose occupation is mainly to cut dress groom style and shave men', 16000, 15, 3);

-- --------------------------------------------------------

--
-- Table structure for table `layanan_sudah_dibooking`
--

CREATE TABLE `layanan_sudah_dibooking` (
  `id_booking` int(5) NOT NULL,
  `id_layanan` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `layanan_sudah_dibooking`
--

INSERT INTO `layanan_sudah_dibooking` (`id_booking`, `id_layanan`) VALUES
(12, 1),
(15, 2),
(13, 5),
(11, 9);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `image` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(1) NOT NULL,
  `tanggal_input` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `email`, `image`, `password`, `role_id`, `is_active`, `tanggal_input`) VALUES
(3, 'Lim', 'lim@gmail.com', 'mount.jpeg', '$2y$10$rACixxT3UQFTt.tfOBFd4ufxnfoJ9kL8BUKS..4Ov5mJKtH4siMaW', 2, 1, 1665597232),
(5, 'Rohim', 'rohim666@yahoo.com', 'default.jpg', '$2y$10$e12NCX2.AmLaegD7src22eqPX3r0/ZAf8BEYN90eM0DLdBV0lVUGS', 1, 1, 1665993038),
(6, 'abdul', 'abdul@gmail.com', 'default.jpg', '$2y$10$TkPhxlO0MLIwHEYzxdZjHeB.XDXjkJu3.5YN/IAqUdn04JmzJVQXK', 2, 1, 1667271289),
(7, 'IRSYAD HALIMI', 'irsyadhalimi08@gmail.com', 'default.jpg', '$2y$10$D5Pum7UvhufDSCXfWUq6m.r9/xiXGhdWjxTyzzkOG/2AH7bTxetcm', 2, 1, 1669622094),
(8, 'Irsyad Halimi', 'jonas@gmail.com', 'default.jpg', '$2y$10$jhhclwoNjOz2uEkjhmduw.lumYjsxosUYHKf5M5eQlPTS2hnN92/m', 2, 1, 1670894859),
(9, 'admin sibershop', 'adminsibershop123@gmail.com', 'default.jpg', '$2y$10$ROkBAd2idPoeuDyz7WquteETf6LdDjzO6w0GEXB6FumjBPTtOXnSu', 1, 1, 1670895929),
(10, 'Klien Sibershop', 'kliensibershop123@gmail.com', 'default.jpg', '$2y$10$q1tFgTne4L952fJIzuFeKufxGqwJvZDGgjqW8ZEWH/bCi9j5yITq2', 2, 1, 1670909796);

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`id`, `role`) VALUES
(1, 'Administrator'),
(2, 'Member');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`),
  ADD KEY `nama_admin` (`nama_admin`,`email`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id_booking`),
  ADD KEY `id_klien` (`id_klien`,`id_karyawan`);

--
-- Indexes for table `jadwal_karyawan`
--
ALTER TABLE `jadwal_karyawan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_karyawan` (`id_karyawan`);

--
-- Indexes for table `karyawan`
--
ALTER TABLE `karyawan`
  ADD PRIMARY KEY (`id_karyawan`);

--
-- Indexes for table `kategori_layanan`
--
ALTER TABLE `kategori_layanan`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `klien`
--
ALTER TABLE `klien`
  ADD PRIMARY KEY (`id_klien`),
  ADD KEY `email` (`email_klien`);

--
-- Indexes for table `layanan`
--
ALTER TABLE `layanan`
  ADD PRIMARY KEY (`id_layanan`),
  ADD UNIQUE KEY `id_kategori` (`id_kategori`);

--
-- Indexes for table `layanan_sudah_dibooking`
--
ALTER TABLE `layanan_sudah_dibooking`
  ADD PRIMARY KEY (`id_booking`),
  ADD UNIQUE KEY `id_layanan_2` (`id_layanan`),
  ADD KEY `id_layanan` (`id_layanan`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `id_booking` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `jadwal_karyawan`
--
ALTER TABLE `jadwal_karyawan`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `karyawan`
--
ALTER TABLE `karyawan`
  MODIFY `id_karyawan` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `kategori_layanan`
--
ALTER TABLE `kategori_layanan`
  MODIFY `id_kategori` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `klien`
--
ALTER TABLE `klien`
  MODIFY `id_klien` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `layanan`
--
ALTER TABLE `layanan`
  MODIFY `id_layanan` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
