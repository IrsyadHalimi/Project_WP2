-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 19, 2022 at 05:45 AM
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
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `id_booking` int(5) NOT NULL,
  `tanggal_dibuat` datetime NOT NULL,
  `id_klien` int(5) DEFAULT NULL,
  `id_karyawan` int(2) NOT NULL,
  `tanggal` date NOT NULL,
  `waktu` time NOT NULL,
  `batal` int(1) NOT NULL,
  `id_layanan` int(5) NOT NULL,
  `alasan_pembatalan` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`id_booking`, `tanggal_dibuat`, `id_klien`, `id_karyawan`, `tanggal`, `waktu`, `batal`, `id_layanan`, `alasan_pembatalan`) VALUES
(64, '2022-12-17 14:37:03', 74, 21, '2022-12-21', '12:36:00', 0, 10, NULL),
(67, '2022-12-17 22:00:48', 80, 22, '2022-12-20', '07:00:00', 0, 7, NULL),
(68, '2022-12-17 22:01:29', 81, 21, '2022-12-30', '07:00:00', 0, 10, NULL),
(78, '2022-12-18 09:25:53', 91, 22, '2022-12-19', '17:00:00', 0, 13, NULL);

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
  `email` varchar(50) NOT NULL,
  `gambar_karyawan` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `karyawan`
--

INSERT INTO `karyawan` (`id_karyawan`, `nama_depan`, `nama_belakang`, `no_telepon`, `email`, `gambar_karyawan`) VALUES
(20, 'Chris', 'Amigo', '0886678836', 'amigo23@yahoo.com', 'WhatsApp Image 2022-12-18 at 12.18.44.jpeg'),
(21, 'jonas', 'Hanafi', '0888344444', 'jonas322@gmail.com', 'WhatsApp Image 2022-12-18 at 12.18.43 (1).jpeg'),
(22, 'Cello', 'Bambino', '0888339877', 'cellobambino@yahoo.com', 'WhatsApp Image 2022-12-18 at 12.18.42.jpeg'),
(23, 'Gordo', 'David', '089898685', 'davidgordo@gmail.com', 'WhatsApp Image 2022-12-18 at 12.18.43.jpeg'),
(24, 'Fito', 'Hadadi', '0878676574', 'Fitohadadi@gmail.com', 'WhatsApp Image 2022-12-18 at 12.18.44 (1).jpeg'),
(25, 'Abian', 'Adam', '0888344444', 'adam66@yahoo.com', 'WhatsApp Image 2022-12-18 at 12.26.45.jpeg');

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
(1, 'Shaving'),
(2, 'Face Masking'),
(3, 'Uncategorized'),
(4, 'Shape up'),
(5, 'Cropped Fringe'),
(6, 'Disconnected Bread');

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
(74, 'IRSYAD', 'simatupang', '0888339877', 'syadhalim059@gmail.com'),
(78, 'dedi', 'junaedi', '0888339877', 'dedi44@g.com'),
(80, 'Lim', 'simatupang', '0888339877', 'rohim666@yahoo.com'),
(84, 'Abracadabra', 'simatupang', '0888339877', 'rohim666@yahoo.com'),
(85, 'Hamada ', 'asahi', '0811111111', 'hany12@gmail.com'),
(86, 'Hamada ', 'asahi', '0812333333', 'hamadaasahi@gmail.com'),
(87, 'Hamada ', 'Asahi', '0812333333', 'hamadaasahi@gmail.com'),
(88, 'Hamada ', 'Asahi', '0812333333', 'hamadaasahi@gmail.com'),
(89, 'Hamada ', 'Asahi', '0812333333', 'hamadaasahi@gmail.com'),
(90, 'Hamada ', 'Asahi', '0812333333', 'hamadaasahi@gmail.com'),
(91, 'Hamada ', 'Asahi', '0812333333', 'hamadaasahi@gmail.com'),
(92, 'Hamada ', 'Asahi', '0812333333', 'hamadaasahi@gmail.com'),
(93, 'Hamada ', 'Asahi', '0812333333', 'hamadaasahi@gmail.com'),
(94, 'Hamada ', 'Asahi', '0812333333', 'hamadaasahi@gmail.com'),
(95, 'Hamada ', 'Asahi', '0812333333', 'hamadaasahi@gmail.com'),
(96, 'Hamada ', 'Asahi', '0812333333', 'hamadaasahi@gmail.com'),
(97, 'Hamada ', 'Asahi', '0812333333', 'hamadaasahi@gmail.com'),
(98, 'Hamada ', 'Asahi', '0812333333', 'hamadaasahi@gmail.com'),
(99, 'Hamada ', 'Asahi', '081319926812', 'hamadaasahi@gmail.com'),
(100, 'Hamada ', 'Asahi', '0809787879878', 'hamadaasahi@gmail.com'),
(101, 'Hamada ', 'Asahi', '0809787879878', 'hamadaasahi@gmail.com'),
(102, 'Hamada ', 'Asahi', '08912345', 'hamadaasahi@gmail.com'),
(103, 'Hamada ', 'Asahi', '0918735173', 'hamadaasahi@gmail.com'),
(104, 'Hamada ', 'Asahi', '0918735173', 'hamadaasahi@gmail.com'),
(105, 'Hamada ', 'Asahi', '0918735173', 'hamadaasahi@gmail.com');

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
  `id_kategori` int(2) NOT NULL,
  `gambar_layanan` varchar(500) NOT NULL DEFAULT 'default.png'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `layanan`
--

INSERT INTO `layanan` (`id_layanan`, `nama_layanan`, `deskripsi_layanan`, `biaya_layanan`, `durasi_layanan`, `id_kategori`, `gambar_layanan`) VALUES
(1, 'Short Hair', 'Short hair adalah potongan rambut pendek yang akan menciptakan kontras yang tajam dan mencolok sehingga penampilanmu terkesan lebih menarik.', 50000, 20, 1, 'short hair.jpeg'),
(4, 'Clean Shaving', 'Memangkas diseluruh area jenggot dan kumis hingga bersih dan mulus', 20000, 10, 2, 'WhatsApp Image 2022-12-18 at 14.24.12.jpeg'),
(7, 'High Fade', 'Potongan High fade adalah teknik pangkas sepak dengan cara menipiskan bagian bawah dan samping. Panjang rambut dibuat menipis dari bagian pelipis hingga kebawah kepala.', 200000, 10, 5, 'WhatsApp Image 2022-12-18 at 14.28.09.jpeg'),
(10, 'Dreadlock', 'Rambut dengan gaya gimbal yang dibentuk menyerupai tali', 150000, 45, 4, 'WhatsApp Image 2022-12-18 at 14.25.03.jpeg'),
(11, 'Buzzcut', 'Buzz Cut. Model rambut pendek pria buzz cut sangat cocok untuk kamu yang ingin pamer bentuk rahang dan tulang pipi yang tinggi.', 30000, 5, 5, 'buzzcut.jpeg'),
(13, 'Cepmek', 'Model rambut ini sangat cocok untuk kamu yang ingin viral.', 150000, 1, 6, '12345.jpeg');

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
(10, 'Klien Sibershop', 'kliensibershop123@gmail.com', 'default.jpg', '$2y$10$q1tFgTne4L952fJIzuFeKufxGqwJvZDGgjqW8ZEWH/bCi9j5yITq2', 2, 1, 1670909796),
(11, 'hany', 'hany12@gmail.com', 'default.jpg', '$2y$10$xi3vsWCCTry.Ocr2.OpZTu2DV3gyxS6Oiau4MtLrQ62cz4AEVxCGy', 2, 1, 1671336714);

--
-- Indexes for dumped tables
--

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
  ADD PRIMARY KEY (`id_layanan`);

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
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `id_booking` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=93;

--
-- AUTO_INCREMENT for table `jadwal_karyawan`
--
ALTER TABLE `jadwal_karyawan`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `karyawan`
--
ALTER TABLE `karyawan`
  MODIFY `id_karyawan` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `kategori_layanan`
--
ALTER TABLE `kategori_layanan`
  MODIFY `id_kategori` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `klien`
--
ALTER TABLE `klien`
  MODIFY `id_klien` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=106;

--
-- AUTO_INCREMENT for table `layanan`
--
ALTER TABLE `layanan`
  MODIFY `id_layanan` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
