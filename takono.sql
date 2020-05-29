-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 29, 2020 at 07:51 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `takono`
--

-- --------------------------------------------------------

--
-- Table structure for table `guru`
--

CREATE TABLE `guru` (
  `id_guru` int(11) NOT NULL,
  `nip` int(11) NOT NULL,
  `nama` text NOT NULL,
  `jenkel` enum('Laki - laki','Perempuan') NOT NULL,
  `email` text NOT NULL,
  `foto` text DEFAULT 'default.png'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `guru`
--

INSERT INTO `guru` (`id_guru`, `nip`, `nama`, `jenkel`, `email`, `foto`) VALUES
(9, 100100, 'Drs. H. AEP GUMIWA, MM.', 'Laki - laki', 'aepgumiwa@gmail.com', 'default.png'),
(10, 100101, 'Dra. Hj. NURAENI GUMILAR', 'Perempuan', 'nuraenigum@gmail.com', 'default.png'),
(11, 100102, 'Drs. ASEP SUHENDI.', 'Laki - laki', 'asepsu@gmail.com', 'default.png'),
(12, 100103, 'Dra. Hj. IDA FARIDA.', 'Perempuan', 'idafarida@gmail.com', 'default.png'),
(13, 100104, 'DR. H. ARIS GUMILAR, MM', 'Laki - laki', 'arisgumilar@gmail.com', 'default.png'),
(14, 100105, 'Dra. ETTY SUGIARTI', 'Perempuan', 'ettysugi@gmail.com', 'default.png'),
(15, 100106, 'Rd.H. RUHIYAT TAUFIK, SE, MM', 'Laki - laki', 'ruhiyattaufik@gmail.com', 'default.png'),
(16, 100107, 'Dra. TRI HASTUTI', 'Perempuan', 'hastutitri@gmail.com', 'default.png'),
(17, 100108, 'LIDA MELANI', 'Perempuan', 'melanilida@gmail.com', 'default.png'),
(18, 100109, 'Dra. HERLINA YULIASIH', 'Perempuan', 'heryuliasih@gmail.com', 'default.png'),
(19, 100110, 'Dra. ENTIN SURYANINGSIH', 'Perempuan', 'entinsurya@gmail.com', 'default.png'),
(20, 100111, 'Drs. H. DIDI SUDIADI', 'Laki - laki', 'sudiadididi@gmail.com', 'default.png');

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

CREATE TABLE `kelas` (
  `id_kelas` int(11) NOT NULL,
  `kelas` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kelas`
--

INSERT INTO `kelas` (`id_kelas`, `kelas`) VALUES
(1, 'X RPL 1'),
(2, 'X RPL 2'),
(3, 'X TKJ 1'),
(16, 'X TKJ 2'),
(17, 'X AK 1'),
(18, 'X AK 2'),
(19, 'X PM 1'),
(20, 'X PM 2'),
(21, 'XI RPL 1'),
(29, 'XI RPL 2'),
(30, 'XI TKJ 1'),
(31, 'XI TKJ 2');

-- --------------------------------------------------------

--
-- Table structure for table `komentar`
--

CREATE TABLE `komentar` (
  `id_komentar` int(11) NOT NULL,
  `komentar` text NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT current_timestamp(),
  `skor` int(11) NOT NULL,
  `foto` varchar(100) DEFAULT NULL,
  `id_pertanyaan` int(11) NOT NULL,
  `oleh` varchar(50) NOT NULL,
  `id_user` varchar(50) NOT NULL,
  `tanggal_edit` varchar(50) DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `komentar`
--

INSERT INTO `komentar` (`id_komentar`, `komentar`, `tanggal`, `skor`, `foto`, `id_pertanyaan`, `oleh`, `id_user`, `tanggal_edit`, `status`) VALUES
(28, 'testt', '2020-05-28 14:56:49', 0, NULL, 14, 'Ivan Abdurrafie, X IPA 3', '1841720001', NULL, NULL),
(29, 'test', '2020-05-28 15:19:39', 0, NULL, 15, 'Ivan Abdurrafie, X IPA 3', '1841720001', NULL, NULL),
(30, 'test ubah foto jawaban', '2020-05-28 16:37:17', 2, 'IMG-20180307-WA00002.jpg', 16, 'Ivan Abdurrafie, X IPA 3', '1841720001', NULL, NULL),
(31, 'Kayaknya BPUPKI mas', '2020-05-29 02:12:29', 1, NULL, 6, 'Ivan Abdurrafie, X IPA 3', '1841720001', '2020-05-29 09:12:28', 'Telah Diubah'),
(32, 'Local Area Network mas', '2020-05-29 05:43:46', 1, NULL, 17, 'Oktaviano Andy, X RPL 2', '1841720002', NULL, NULL),
(33, 'Ya benar, jawabanya adalah LAN', '2020-05-29 05:45:43', 0, NULL, 17, 'Drs. H. AEP GUMIWA, MM., Guru', '100100', NULL, NULL),
(35, 'itu kemungkinan fungsi untuk reset password mas', '2020-05-29 05:50:20', 1, NULL, 18, 'Dra. Hj. NURAENI GUMILAR, Guru', '100101', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `mapel`
--

CREATE TABLE `mapel` (
  `id_mapel` int(11) NOT NULL,
  `mata_pelajaran` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mapel`
--

INSERT INTO `mapel` (`id_mapel`, `mata_pelajaran`) VALUES
(1, 'Matematika'),
(3, 'Sosiologi'),
(6, 'Sejarah'),
(7, 'Fisika'),
(8, 'Bhs. Indonesia'),
(9, 'Bhs. Inggris'),
(10, 'Bhs. Daerah'),
(11, 'Seni Budaya'),
(12, 'Jaringan Komputer'),
(13, 'Algoritma'),
(14, 'Sistem Komputer'),
(15, 'Akuntasi Dasar'),
(16, 'Perbankan Dasar'),
(17, 'Marketing'),
(18, 'Perencanaan Bisnis');

-- --------------------------------------------------------

--
-- Table structure for table `pertanyaan`
--

CREATE TABLE `pertanyaan` (
  `id_pertanyaan` int(11) NOT NULL,
  `pertanyaan` text NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT current_timestamp(),
  `foto` text DEFAULT NULL,
  `id_mapel` int(11) NOT NULL,
  `oleh` varchar(50) NOT NULL,
  `id_user` varchar(50) NOT NULL,
  `tanggal_edit` varchar(50) DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pertanyaan`
--

INSERT INTO `pertanyaan` (`id_pertanyaan`, `pertanyaan`, `tanggal`, `foto`, `id_mapel`, `oleh`, `id_user`, `tanggal_edit`, `status`) VALUES
(17, 'Kepanjangan dari LAN itu apa ya?', '2020-05-29 05:42:54', NULL, 12, 'Ivan Abdurrafie, X RPL 2', '1841720001', NULL, NULL),
(18, 'maksud dari kodingan ini bagimana ya?', '2020-05-29 05:46:58', 'Capture11.PNG', 13, 'Oktaviano Andy, X RPL 2', '1841720002', '2020-05-29 12:49:35', 'Telah Diubah');

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `id_siswa` int(11) NOT NULL,
  `nis` int(11) NOT NULL,
  `nama` text NOT NULL,
  `jenkel` enum('Laki - laki','Perempuan') NOT NULL,
  `email` text NOT NULL,
  `foto` text DEFAULT 'default.png',
  `id_kelas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`id_siswa`, `nis`, `nama`, `jenkel`, `email`, `foto`, `id_kelas`) VALUES
(1, 1841720001, 'Ivan Abdurrafie', 'Laki - laki', 'ia@gmail.com', 'me14.jpg', 2),
(2, 1841720002, 'Oktaviano Andy', 'Laki - laki', 'ok@gmail.com', NULL, 2),
(7, 1841720209, 'Abdulloh', 'Laki - laki', 'Abdulloh@gmail.com', 'default.png', 1),
(8, 1841720125, 'Ahmad Falah S', 'Laki - laki', 'ahmadfalahs@gmail.com', 'default.png', 1),
(9, 1841720098, 'Defika Bulan', 'Perempuan', 'defika@gmail.com', 'default.png', 3),
(10, 1841720126, 'Ela Widya', 'Perempuan', 'elawid@gmail.com', 'default.png', 16),
(11, 1841720146, 'Bagus Satria', 'Laki - laki', 'bagus@gmail.com', NULL, 3),
(12, 1841720194, 'Haidar Sakti', 'Laki - laki', 'haidarsakti@gmail.com', 'default.png', 16),
(13, 1841720155, 'Fana Asy Syifa', 'Perempuan', 'fana@gmail.com', 'default.png', 2),
(14, 1841720193, 'Lintang Kusuma Adjie', 'Laki - laki', 'lintangk@gmail.com', 'default.png', 1),
(15, 1941723006, 'Pandu Dwi Laksono', 'Laki - laki', 'pandudwi@gmail.com', NULL, 3),
(16, 1841720170, 'Aryo Satyo Wandowo Adi', 'Laki - laki', 'ary@gmail.com', 'default.png', 31);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(12) NOT NULL,
  `password` varchar(100) NOT NULL,
  `level` enum('admin','guru','siswa') NOT NULL,
  `id_siswa` int(11) DEFAULT NULL,
  `id_guru` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `level`, `id_siswa`, `id_guru`) VALUES
(2, 'rafi', '139c4e89cdbedaf144d05ca54a12a57b', 'siswa', 1, NULL),
(3, 'indra', 'e24f6e3ce19ee0728ff1c443e4ff488d', 'admin', NULL, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `guru`
--
ALTER TABLE `guru`
  ADD PRIMARY KEY (`id_guru`);

--
-- Indexes for table `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`id_kelas`);

--
-- Indexes for table `komentar`
--
ALTER TABLE `komentar`
  ADD PRIMARY KEY (`id_komentar`),
  ADD KEY `id_pertanyaan` (`id_pertanyaan`);

--
-- Indexes for table `mapel`
--
ALTER TABLE `mapel`
  ADD PRIMARY KEY (`id_mapel`);

--
-- Indexes for table `pertanyaan`
--
ALTER TABLE `pertanyaan`
  ADD PRIMARY KEY (`id_pertanyaan`),
  ADD KEY `id_mapel` (`id_mapel`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`id_siswa`),
  ADD KEY `id_kelas` (`id_kelas`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`),
  ADD KEY `id_siswa` (`id_siswa`),
  ADD KEY `id_guru` (`id_guru`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `guru`
--
ALTER TABLE `guru`
  MODIFY `id_guru` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `kelas`
--
ALTER TABLE `kelas`
  MODIFY `id_kelas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `komentar`
--
ALTER TABLE `komentar`
  MODIFY `id_komentar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `mapel`
--
ALTER TABLE `mapel`
  MODIFY `id_mapel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `pertanyaan`
--
ALTER TABLE `pertanyaan`
  MODIFY `id_pertanyaan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `siswa`
--
ALTER TABLE `siswa`
  MODIFY `id_siswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
