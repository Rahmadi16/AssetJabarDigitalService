-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 22 Sep 2023 pada 01.21
-- Versi server: 10.4.21-MariaDB
-- Versi PHP: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `stockbarang`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `barang`
--

CREATE TABLE `barang` (
  `idx` int(3) NOT NULL,
  `kode_barang` varchar(20) NOT NULL,
  `nama_barang` varchar(50) NOT NULL,
  `merk` varchar(43) NOT NULL,
  `spesifikasi` varchar(50) NOT NULL,
  `no_jumlah` varchar(20) NOT NULL,
  `no_mesin` varchar(15) NOT NULL,
  `no_polisi` varchar(15) NOT NULL,
  `tahun_perolehan` int(4) NOT NULL,
  `volume` varchar(4) NOT NULL,
  `satuan` varchar(25) NOT NULL,
  `harga_satuan` int(11) NOT NULL,
  `keterangan` varchar(50) NOT NULL,
  `u_ekonomis` varchar(2) NOT NULL,
  `akum_2020` longtext NOT NULL,
  `akum_2021` int(11) NOT NULL,
  `beban_2021` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `barang`
--

INSERT INTO `barang` (`idx`, `kode_barang`, `nama_barang`, `merk`, `spesifikasi`, `no_jumlah`, `no_mesin`, `no_polisi`, `tahun_perolehan`, `volume`, `satuan`, `harga_satuan`, `keterangan`, `u_ekonomis`, `akum_2020`, `akum_2021`, `beban_2021`) VALUES
(1, '1.3.2.02.01.02.003', 'Mini Bus', 'TOYOTA RUSH', ' MHFE2CJ3JEK090900', ' MHFE2CJ3JEK090900', ' DEV1752 ', 'D 1320 A', 2014, '1', 'unit', 206580000, 'Oprasional UPTD PLD', '8', '206580000', 206580000, 0),
(2, '1.3.2.02.01.02.003', 'Mini Bus', 'Innova', 'MHFXW42C8822012', 'MHFXW42C8822012', '1TR179764', 'D 1022 B', 2011, '1', 'unit', 221300000, 'Oprasional UPTD PLD', '8', '221300000', 221300000, 0),
(3, '1.3.2.02.01.02.003', 'Mini Bus', 'Avanza', 'MHFM1BA36K017400', 'MHFM1BA36K017400', 'DB81183', 'D 1805 D', 2010, '1', 'Unit', 106480000, 'Oprasional UPTD PLD', '8', '106480000', 106480000, 0),
(4, '1.3.2.02.01.04.001', 'Sepeda Motor', 'Honda Vario Techno', 'MHIJFF116DK266026', 'MHIJFF116DK266026', 'JFFE260124', 'D 6235 E', 2014, '1', 'Unit', 16745000, 'Oprasional UPTD PLD', '8', '14651875', 16745000, 2093125),
(5, '1.3.2.06.01.02.133', 'Monitor/Televisi', 'LG ', ' 55SVH7E', '1', '-', '-', 2019, '1', 'Unit', 168000000, 'R. Commander', '8', '36750000', 57750000, 21000000),
(6, '1.3.2.06.01.02.133', 'Monitor/Televisi', 'LG ', ' 55SVH7E', '2', '', '', 2019, '1', 'Unit', 168000000, 'R. Commander', '8', '36750000', 57750000, 21000000),
(7, '1.3.2.06.01.02.133', 'Monitor/Televisi', 'LG ', ' 55SVH7E', '3', '', '', 2019, '1', 'Unit', 168000000, 'R. Commander', '8', '36750000', 57750000, 21000000),
(8, '1.3.2.06.01.02.133', 'Monitor/Televisi', 'LG ', ' 55SVH7E', '4', '', '', 2019, '1', 'Unit', 168000000, 'R. Commander', '8', '36750000', 57750000, 21000000),
(9, '1.3.2.06.01.02.133', 'Monitor/Televisi', 'LG ', ' 55SVH7E', '5', '', '', 2019, '1', 'Unit', 168000000, 'R. Commander', '8', '36750000', 57750000, 21000000),
(10, '1.3.2.06.01.02.133', 'Monitor/Televisi', 'LG ', ' 55SVH7E', '6', '', '', 2019, '1', 'Unit', 168000000, 'R. Commander', '8', '36750000', 57750000, 21000000),
(11, '1.3.2.06.01.02.133', 'Monitor/Televisi', 'LG ', ' 55SVH7E', '7', '', '', 2019, '1', 'Unit', 168000000, 'R. Commander', '8', '36750000', 57750000, 21000000),
(12, '1.3.2.06.01.02.133', 'Monitor/Televisi', 'LG ', ' 55SVH7E', '8', '', '', 2019, '1', 'Unit', 168000000, 'R. Commander', '8', '36750000', 57750000, 21000000),
(13, '1.3.2.06.01.02.133', 'Monitor/Televisi', 'LG ', ' 55SVH7E', '9', '', '', 2019, '1', 'Unit', 168000000, 'R. Commander', '8', '36750000', 57750000, 21000000),
(14, '1.3.2.06.01.02.133', 'Monitor/Televisi', 'LG ', ' 55SVH7E', '10', '', '', 2019, '1', 'Unit', 168000000, 'R. Commander', '8', '36750000', 57750000, 21000000),
(15, '1.3.2.06.01.02.133', 'Monitor/Televisi', 'LG ', ' 55SVH7E', '11', '', '', 2019, '1', 'Unit', 168000000, 'R. Commander', '8', '36750000', 57750000, 21000000),
(16, '1.3.2.06.01.02.133', 'Monitor/Televisi', 'LG ', ' 55SVH7E', '12', '', '', 2019, '1', 'Unit', 168000000, 'R. Commander', '8', '36750000', 57750000, 21000000),
(17, '1.3.2.06.01.02.133', 'Monitor/Televisi', 'LG ', ' 55SVH7E', '13', '', '', 2019, '1', 'Unit', 168000000, 'R. Commander', '8', '36750000', 57750000, 21000000),
(18, '1.3.2.06.01.02.133', 'Monitor/Televisi', 'LG ', ' 55SVH7E', '14', '', '', 2019, '1', 'Unit', 168000000, 'R. Commander', '8', '36750000', 57750000, 21000000),
(19, '1.3.2.06.01.02.133', 'Monitor/Televisi', 'LG ', ' 55SVH7E', '15', '', '', 2019, '1', 'Unit', 168000000, 'R. Commander', '8', '36750000', 57750000, 21000000),
(20, '1.3.2.06.01.02.133', 'Monitor/Televisi', 'LG ', ' 55SVH7E', '16', '', '', 2019, '1', 'Unit', 168000000, 'R. Commander', '8', '36750000', 57750000, 21000000),
(21, '1.3.2.06.01.02.133', 'Monitor/Televisi', 'LG ', ' 55SVH7E', '17', '', '', 2019, '1', 'Unit', 168000000, 'R. Commander', '8', '36750000', 57750000, 21000000),
(22, '1.3.2.06.01.02.133', 'Monitor/Televisi', 'LG ', ' 55SVH7E', '18', '', '', 2019, '1', 'Unit', 168000000, 'R. Commander', '8', '36750000', 57750000, 21000000),
(23, '1.3.2.06.01.02.133', 'Monitor/Televisi', 'LG ', ' 55SVH7E', '19', '', '', 2019, '1', 'Unit', 168000000, 'R. Commander', '8', '36750000', 57750000, 21000000),
(24, '1.3.2.06.01.02.133', 'Monitor/Televisi', 'LG ', ' 55SVH7E', '20', '', '', 2019, '1', 'Unit', 168000000, 'R. Commander', '8', '36750000', 57750000, 21000000),
(25, '1.3.2.06.01.02.133', 'Monitor/Televisi', 'LG ', ' 55SVH7E', '21', '', '', 2019, '1', 'Unit', 168000000, 'R. Commander', '8', '36750000', 57750000, 21000000),
(26, '1.3.2.06.01.02.133', 'Monitor/Televisi', 'LG ', ' 55SVH7E', '22', '', '', 2019, '1', 'Unit', 168000000, 'R. Commander', '8', '36750000', 57750000, 21000000),
(27, '1.3.2.06.01.02.133', 'Monitor/Televisi', 'LG ', ' 55SVH7E', '23', '', '', 2019, '1', 'Unit', 168000000, 'R. Commander', '8', '36750000', 57750000, 21000000),
(28, '1.3.2.06.01.02.133', 'Monitor/Televisi', 'LG ', ' 55SVH7E', '24', '', '', 2019, '1', 'Unit', 168000000, 'R. Commander', '8', '36750000', 57750000, 21000000),
(29, '1.3.2.06.01.02.133', 'Monitor/Televisi', 'LG ', ' 55SVH7E', '25', '', '', 2019, '1', 'Unit', 168000000, 'R. Commander', '8', '36750000', 57750000, 21000000),
(30, '1.3.2.06.01.02.133', 'Monitor/Televisi', 'LG ', ' 55SVH7E', '26', '', '', 2019, '1', 'Unit', 168000000, 'R. Commander', '8', '36750000', 57750000, 21000000),
(31, '1.3.2.06.01.02.133', 'Monitor/Televisi', 'LG ', ' 55SVH7E', '27', '', '', 2019, '1', 'Unit', 168000000, 'R. Commander', '8', '36750000', 57750000, 21000000),
(32, '1.3.2.06.01.02.133', 'Monitor/Televisi', 'LG ', ' 55SVH7E', '28', '', '', 2019, '1', 'Unit', 168000000, 'R. Commander', '8', '36750000', 57750000, 21000000),
(33, '1.3.2.06.01.02.133', 'Monitor/Televisi', 'LG ', ' 55SVH7E', '29', '', '', 2019, '1', 'Unit', 168000000, 'R. Commander', '8', '36750000', 57750000, 21000000),
(34, '1.3.2.06.01.02.133', 'Monitor/Televisi', 'LG ', ' 55SVH7E', '30', '', '', 2019, '1', 'Unit', 168000000, 'R. Commander', '8', '36750000', 57750000, 21000000),
(35, '1.3.2.06.01.02.133', 'Monitor/Televisi', 'LG ', ' 55SVH7E', '31', '', '', 2019, '1', 'Unit', 168000000, 'R. Commander', '8', '36750000', 57750000, 21000000),
(36, '1.3.2.06.01.02.133', 'Monitor/Televisi', 'LG ', ' 55SVM5B', '1', '', '', 2019, '1', 'Unit', 83573028, 'R. Wahana Publik', '8', '18281599,88', 28728249, 10446649),
(37, '1.3.2.06.01.02.133', 'Monitor/Televisi', 'LG ', ' 55SVM5B', '2', '', '', 2019, '1', 'Unit', 83573028, 'R. Wahana Publik', '8', '18281599,88', 28728249, 10446649),
(38, '1.3.2.06.01.02.133', 'Monitor/Televisi', 'LG ', ' 55SVM5B', '3', '', '', 2019, '1', 'Unit', 83573028, 'R. Wahana Publik', '8', '18281599,88', 28728249, 10446649),
(39, '1.3.2.06.01.02.133', 'Monitor/Televisi', 'LG ', ' 55SVM5B', '4', '', '', 2019, '1', 'Unit', 83573028, 'R. Wahana Publik', '8', '18281599,88', 28728249, 10446649),
(40, '1.3.2.06.01.02.133', 'Monitor/Televisi', 'LG ', ' 55SVM5B', '5', '', '', 2019, '1', 'Unit', 83573028, 'R. Wahana Publik', '8', '18281599,88', 28728249, 10446649),
(41, '1.3.2.06.01.02.133', 'Monitor/Televisi', 'LG ', ' 55SVM5B', '6', '', '', 2019, '1', 'Unit', 83573028, 'R. Wahana Publik', '8', '18281599,88', 28728249, 10446649),
(42, '1.3.2.06.01.02.133', 'Monitor/Televisi', 'LG ', ' 55SVM5B', '7', '', '', 2019, '1', 'Unit', 83573028, 'R. Wahana Publik', '8', '18281599,88', 28728249, 10446649),
(43, '1.3.2.06.01.02.133', 'Monitor/Televisi', 'LG ', ' 49VM5C', '1', '', '', 2019, '1', 'Unit', 75075000, 'R. Wahana Publik', '8', '16422656,25', 25807056, 9384399),
(44, '1.3.2.06.01.02.133', 'Monitor/Televisi', 'LG ', ' 49VM5C', '2', '', '', 2019, '1', 'Unit', 75075000, 'R. Wahana Publik', '8', '16422656,25', 25807056, 9384399),
(45, '1.3.2.06.01.02.133', 'Monitor/Televisi', 'LG ', ' 49VM5C', '3', '', '', 2019, '1', 'Unit', 75075000, 'R. Wahana Publik', '8', '16422656,25', 25807056, 9384399),
(46, '1.3.2.06.01.02.133', 'Monitor/Televisi', 'LG ', ' 49VM5C', '4', '', '', 2019, '1', 'Unit', 75075000, 'R. Wahana Publik', '8', '16422656,25', 25807056, 9384399),
(47, '1.3.2.06.01.02.133', 'Monitor/Televisi', 'LG ', ' 49VM5C', '5', '', '', 2019, '1', 'Unit', 75075000, 'R. Wahana Publik', '8', '16422656,25', 25807056, 9384399),
(48, '1.3.2.06.01.02.133', 'Monitor/Televisi', 'LG ', ' 49VM5C', '6', '', '', 2019, '1', 'Unit', 75075000, 'R. Wahana Publik', '8', '16422656,25', 25807056, 9384399),
(49, '1.3.2.06.01.02.133', 'Monitor/Televisi', 'LG ', ' 49VM5C', '7', '', '', 2019, '1', 'Unit', 75075000, 'R. Wahana Publik', '8', '16422656,25', 25807056, 9384399),
(50, '1.3.2.06.01.02.133', 'Monitor/Televisi', 'LG ', ' 49VM5C', '8', '', '', 2019, '1', 'Unit', 75075000, 'R. Wahana Publik', '8', '16422656,25', 25807056, 9384399),
(51, '1.3.2.06.01.02.133', 'Monitor/Televisi', 'LG ', ' 49VM5C', '9', '', '', 2019, '1', 'Unit', 75075000, 'R. Wahana Publik', '8', '16422656,25', 25807056, 9384399),
(52, '1.3.2.06.01.02.133', 'Monitor/Televisi', 'LG ', ' 49VM5C', '10', '', '', 2019, '1', 'Unit', 75075000, 'R. Wahana Publik', '8', '16422656,25', 25807056, 9384399),
(53, '1.3.2.06.01.02.133', 'Monitor/Televisi', 'LG ', ' 49VM5C', '11', '', '', 2019, '1', 'Unit', 75075000, 'R. Wahana Publik', '8', '16422656,25', 25807056, 9384399),
(54, '1.3.2.06.01.02.133', 'Monitor/Televisi', 'LG ', ' 49VM5C', '12', '', '', 2019, '1', 'Unit', 75075000, 'R. Wahana Publik', '8', '16422656,25', 25807056, 9384399),
(55, '1.3.2.05.02.06.074', 'Access Bracket', 'Access Bracket ', ' BT8310', '1', '', '', 2019, '1', 'Unit', 8245000, 'R. Commander', '8', '1803593,75', 2834238, 1030644),
(56, '1.3.2.05.02.06.074', 'Access Bracket', 'Access Bracket ', ' BT8310', '2', '', '', 2019, '1', 'Unit', 8245000, 'R. Commander', '8', '1803593,75', 2834238, 1030644),
(57, '1.3.2.05.02.06.074', 'Access Bracket', 'Access Bracket ', ' BT8310', '3', '', '', 2019, '1', 'Unit', 8245000, 'R. Commander', '8', '1803593,75', 2834238, 1030644),
(58, '1.3.2.05.02.06.074', 'Access Bracket', 'Access Bracket ', ' BT8310', '4', '', '', 2019, '1', 'Unit', 8245000, 'R. Commander', '8', '1803593,75', 2834238, 1030644),
(59, '1.3.2.05.02.06.074', 'Access Bracket', 'Access Bracket ', ' BT8310', '5', '', '', 2019, '1', 'Unit', 8245000, 'R. Commander', '8', '1803593,75', 2834238, 1030644),
(60, '1.3.2.05.02.06.074', 'Access Bracket', 'Access Bracket ', ' BT8310', '6', '', '', 2019, '1', 'Unit', 8245000, 'R. Commander', '8', '1803593,75', 2834238, 1030644),
(61, '1.3.2.05.02.06.074', 'Access Bracket', 'Access Bracket ', ' BT8310', '7', '', '', 2019, '1', 'Unit', 8245000, 'R. Commander', '8', '1803593,75', 2834238, 1030644),
(62, '1.3.2.05.02.06.074', 'Access Bracket', 'Access Bracket ', ' BT8310', '8', '', '', 2019, '1', 'Unit', 8245000, 'R. Commander', '8', '1803593,75', 2834238, 1030644),
(63, '1.3.2.05.02.06.074', 'Access Bracket', 'Access Bracket ', ' BT8310', '9', '', '', 2019, '1', 'Unit', 8245000, 'R. Commander', '8', '1803593,75', 2834238, 1030644),
(64, '1.3.2.05.02.06.074', 'Access Bracket', 'Access Bracket ', ' BT8310', '10', '', '', 2019, '1', 'Unit', 8245000, 'R. Commander', '8', '1803593,75', 2834238, 1030644),
(65, '1.3.2.05.02.06.074', 'Access Bracket', 'Access Bracket ', ' BT8310', '11', '', '', 2019, '1', 'Unit', 8245000, 'R. Commander', '8', '1803593,75', 2834238, 1030644),
(66, '1.3.2.05.02.06.074', 'Access Bracket', 'Access Bracket ', ' BT8310', '12', '', '', 2019, '1', 'Unit', 8245000, 'R. Commander', '8', '1803593,75', 2834238, 1030644),
(67, '1.3.2.05.02.06.074', 'Access Bracket', 'Access Bracket ', ' BT8310', '13', '', '', 2019, '1', 'Unit', 8245000, 'R. Commander', '8', '1803593,75', 2834238, 1030644),
(68, '1.3.2.05.02.06.074', 'Access Bracket', 'Access Bracket ', ' BT8310', '14', '', '', 2019, '1', 'Unit', 8245000, 'R. Commander', '8', '1803593,75', 2834238, 1030644),
(69, '1.3.2.05.02.06.074', 'Access Bracket', 'Access Bracket ', ' BT8310', '15', '', '', 2019, '1', 'Unit', 8245000, 'R. Commander', '8', '1803593,75', 2834238, 1030644),
(70, '1.3.2.05.02.06.074', 'Access Bracket', 'Access Bracket ', ' BT8310', '16', '', '', 2019, '1', 'Unit', 8245000, 'R. Commander', '8', '1803593,75', 2834238, 1030644),
(71, '1.3.2.05.02.06.074', 'Access Bracket', 'Access Bracket ', ' BT8310', '17', '', '', 2019, '1', 'Unit', 8245000, 'R. Commander', '8', '1803593,75', 2834238, 1030644),
(72, '1.3.2.05.02.06.074', 'Access Bracket', 'Access Bracket ', ' BT8310', '18', '', '', 2019, '1', 'Unit', 8245000, 'R. Commander', '8', '1803593,75', 2834238, 1030644),
(73, '1.3.2.05.02.06.074', 'Access Bracket', 'Access Bracket ', ' BT8310', '19', '', '', 2019, '1', 'Unit', 8245000, 'R. Commander', '8', '1803593,75', 2834238, 1030644),
(74, '1.3.2.05.02.06.074', 'Access Bracket', 'Access Bracket ', ' BT8310', '20', '', '', 2019, '1', 'Unit', 8245000, 'R. Commander', '8', '1803593,75', 2834238, 1030644),
(75, '1.3.2.05.02.06.074', 'Access Bracket', 'Access Bracket ', ' BT8310', '21', '', '', 2019, '1', 'Unit', 8245000, 'R. Commander', '8', '1803593,75', 2834238, 1030644),
(76, '1.3.2.05.02.06.074', 'Access Bracket', 'Access Bracket ', ' BT8310', '22', '', '', 2019, '1', 'Unit', 8245000, 'R. Commander', '8', '1803593,75', 2834238, 1030644),
(77, '1.3.2.05.02.06.074', 'Access Bracket', 'Access Bracket ', ' BT8310', '23', '', '', 2019, '1', 'Unit', 8245000, 'R. Commander', '8', '1803593,75', 2834238, 1030644),
(78, '1.3.2.05.02.06.074', 'Access Bracket', 'Access Bracket ', ' BT8310', '24', '', '', 2019, '1', 'Unit', 8245000, 'R. Commander', '8', '1803593,75', 2834238, 1030644),
(79, '1.3.2.05.02.06.074', 'Access Bracket', 'Access Bracket ', ' BT8310', '25', '', '', 2019, '1', 'Unit', 8245000, 'R. Commander', '8', '1803593,75', 2834238, 1030644),
(80, '1.3.2.05.02.06.074', 'Access Bracket', 'Access Bracket ', ' BT8310', '26', '', '', 2019, '1', 'Unit', 8245000, 'R. Commander', '8', '1803593,75', 2834238, 1030644),
(81, '1.3.2.05.02.06.074', 'Access Bracket', 'Access Bracket ', ' BT8310', '27', '', '', 2019, '1', 'Unit', 8245000, 'R. Commander', '8', '1803593,75', 2834238, 1030644),
(82, '1.3.2.05.02.06.074', 'Access Bracket', 'Access Bracket ', ' BT8310', '28', '', '', 2019, '1', 'Unit', 8245000, 'R. Commander', '8', '1803593,75', 2834238, 1030644),
(83, '1.3.2.05.02.06.074', 'Access Bracket', 'Access Bracket ', ' BT8310', '29', '', '', 2019, '1', 'Unit', 8245000, 'R. Commander', '8', '1803593,75', 2834238, 1030644),
(84, '1.3.2.05.02.06.074', 'Access Bracket', 'Access Bracket ', ' BT8310', '30', '', '', 2019, '1', 'Unit', 8245000, 'R. Commander', '8', '1803593,75', 2834238, 1030644),
(85, '1.3.2.05.02.06.074', 'Access Bracket', 'Access Bracket ', ' BT8310', '31', '', '', 2019, '1', 'Unit', 8245000, 'R. Wahana Publik', '8', '1803593,75', 2834238, 1030644),
(86, '1.3.2.05.02.06.074', 'Access Bracket', 'Access Bracket ', ' BT8310', '32', '', '', 2019, '1', 'Unit', 8245000, 'R. Wahana Publik', '8', '1803593,75', 2834238, 1030644),
(87, '1.3.2.05.02.06.074', 'Access Bracket', 'Access Bracket ', ' BT8310', '33', '', '', 2019, '1', 'Unit', 8245000, 'R. Wahana Publik', '8', '1803593,75', 2834238, 1030644),
(88, '1.3.2.05.02.06.074', 'Access Bracket', 'Access Bracket ', ' BT8310', '34', '', '', 2019, '1', 'Unit', 8245000, 'R. Wahana Publik', '8', '1803593,75', 2834238, 1030644),
(89, '1.3.2.05.02.06.074', 'Access Bracket', 'Access Bracket ', ' BT8310', '35', '', '', 2019, '1', 'Unit', 8245000, 'R. Wahana Publik', '8', '1803593,75', 2834238, 1030644),
(90, '1.3.2.05.02.06.074', 'Access Bracket', 'Access Bracket ', ' BT8310', '36', '', '', 2019, '1', 'Unit', 8245000, 'R. Wahana Publik', '8', '1803593,75', 2834238, 1030644),
(91, '1.3.2.05.02.06.074', 'Access Bracket', 'Access Bracket ', ' BT8310', '37', '', '', 2019, '1', 'Unit', 8245000, 'R. Wahana Publik', '8', '1803593,75', 2834238, 1030644),
(92, '1.3.2.05.02.06.074', 'Access Bracket', 'Access Bracket ', ' BT8310', '38', '', '', 2019, '1', 'Unit', 8245000, 'R. Wahana Publik', '8', '1803593,75', 2834238, 1030644),
(93, '1.3.2.05.02.06.074', 'Access Bracket', 'Access Bracket ', ' BT8310', '39', '', '', 2019, '1', 'Unit', 8245000, 'R. Wahana Publik', '8', '1803593,75', 2834238, 1030644),
(94, '1.3.2.05.02.06.074', 'Access Bracket', 'Access Bracket ', ' BT8310', '40', '', '', 2019, '1', 'Unit', 8245000, 'R. Wahana Publik', '8', '1803593,75', 2834238, 1030644),
(95, '1.3.2.05.02.06.074', 'Access Bracket', 'Access Bracket ', ' BT8310', '41', '', '', 2019, '1', 'Unit', 8245000, 'R. Wahana Publik', '8', '1803593,75', 2834238, 1030644),
(96, '1.3.2.05.02.06.074', 'Access Bracket', 'Access Bracket ', ' BT8310', '42', '', '', 2019, '1', 'Unit', 8245000, 'R. Wahana Publik', '8', '1803593,75', 2834238, 1030644),
(97, '1.3.2.10.01.01.001', 'Video Wall Controler / Server', 'Elink HDMI Matrix Procesor/Video Controler ', 'S  Series 2B Input-32 Output', '1', '', '', 2019, '1', 'Unit', 609000000, 'R. Server', '8', '133218750', 209343750, 76125000),
(98, '1.3.2.10.01.01.001', 'Video Wall Processor / Server', 'Elink HDMI Matrix Procesor/Video Controler ', 'S  Series 2B Input-32 Output', '1', '', '', 2019, '1', 'Unit', 42550200, 'R. Server', '8', '9307856,25', 14626656, 5318799),
(99, '1.3.2.10.01.01.001', 'Video Wall Processor/Server', 'Elink HDMI Matrix Procesor/Video Controler ', 'S  Series 2B Input-32 Output', '2', '', '', 2019, '1', 'Unit', 42550200, 'R. Server', '8', '9307856,25', 14626656, 5318799),
(100, '1.3.2.05.02.06.012', 'Wireless', 'WOLFVISION Wireless Presontation CYNAP', 'WOLFVISION Wireless Presontation CYNAP', '1', '', '', 2019, '1', 'Unit', 136500000, 'R. Server', '8', '59718750', 93843750, 34125000),
(101, '1.3.2.10.02.04.024', 'Switch', 'Digitools', ' TP-580R', '1', '', '', 2019, '1', 'Unit', 3430000, 'R. Commander (belakang Monitor)', '4', '1500625', 2358125, 857500),
(102, '1.3.2.10.02.04.024', 'Switch', 'Digitools', ' TP-580R', '2', '', '', 2019, '1', 'Unit', 3430000, 'R. Commander (belakang Monitor)', '4', '1500625', 2358125, 857500),
(103, '1.3.2.10.02.04.024', 'Switch', 'Digitools', ' TP-580R', '3', '', '', 2019, '1', 'Unit', 3430000, 'R. Commander (belakang Monitor)', '4', '1500625', 2358125, 857500),
(104, '1.3.2.10.02.04.024', 'Switch', 'Digitools', ' TP-580R', '4', '', '', 2019, '1', 'Unit', 3430000, 'R. Commander (belakang Monitor)', '4', '1500625', 2358125, 857500),
(105, '1.3.2.10.02.04.024', 'Switch', 'Digitools', ' TP-580R', '5', '', '', 2019, '1', 'Unit', 3430000, 'R. Commander (belakang Monitor)', '4', '1500625', 2358125, 857500),
(106, '1.3.2.10.02.04.024', 'Switch', 'Digitools', ' TP-580R', '6', '', '', 2019, '1', 'Unit', 3430000, 'R. Commander (belakang Monitor)', '4', '1500625', 2358125, 857500),
(107, '1.3.2.10.02.04.024', 'Switch', 'Digitools', ' TP-580R', '7', '', '', 2019, '1', 'Unit', 3430000, 'R. Commander (belakang Monitor)', '4', '1500625', 2358125, 857500),
(108, '1.3.2.10.02.04.024', 'Switch', 'Digitools', ' TP-580R', '8', '', '', 2019, '1', 'Unit', 3430000, 'R. Commander (belakang Monitor)', '4', '1500625', 2358125, 857500),
(109, '1.3.2.10.02.04.024', 'Switch', 'Digitools', ' TP-580R', '9', '', '', 2019, '1', 'Unit', 3430000, 'R. Commander (belakang Monitor)', '4', '1500625', 2358125, 857500),
(110, '1.3.2.10.02.04.024', 'Switch', 'Digitools', ' TP-580R', '10', '', '', 2019, '1', 'Unit', 3430000, 'R. Commander (belakang Monitor)', '4', '1500625', 2358125, 857500),
(111, '1.3.2.10.02.04.024', 'Switch', 'Digitools', ' TP-580R', '11', '', '', 2019, '1', 'Unit', 3430000, 'R. Commander (belakang Monitor)', '4', '1500625', 2358125, 857500),
(112, '1.3.2.10.02.04.024', 'Switch', 'Digitools', ' TP-580R', '12', '', '', 2019, '1', 'Unit', 3430000, 'R. Commander (belakang Monitor)', '4', '1500625', 2358125, 857500),
(113, '1.3.2.10.02.04.024', 'Switch', 'Digitools', ' TP-580R', '13', '', '', 2019, '1', 'Unit', 3430000, 'R. Commander (belakang Monitor)', '4', '1500625', 2358125, 857500),
(114, '1.3.2.10.02.04.024', 'Switch', 'Digitools', ' TP-580R', '14', '', '', 2019, '1', 'Unit', 3430000, 'R. Commander (belakang Monitor)', '4', '1500625', 2358125, 857500),
(115, '1.3.2.10.02.04.024', 'Switch', 'Digitools', ' TP-580R', '15', '', '', 2019, '1', 'Unit', 3430000, 'R. Commander (belakang Monitor)', '4', '1500625', 2358125, 857500),
(116, '1.3.2.10.02.04.024', 'Switch', 'Digitools', ' TP-580R', '16', '', '', 2019, '1', 'Unit', 3430000, 'R. Commander (belakang Monitor)', '4', '1500625', 2358125, 857500),
(117, '1.3.2.10.02.04.024', 'Switch', 'Digitools', ' TP-580R', '17', '', '', 2019, '1', 'Unit', 3430000, 'R. Commander (belakang Monitor)', '4', '1500625', 2358125, 857500),
(118, '1.3.2.10.02.04.024', 'Switch', 'Digitools', ' TP-580R', '18', '', '', 2019, '1', 'Unit', 3430000, 'R. Commander (belakang Monitor)', '4', '1500625', 2358125, 857500),
(119, '1.3.2.10.02.04.024', 'Switch', 'Digitools', ' TP-580R', '19', '', '', 2019, '1', 'Unit', 3430000, 'R. Commander (belakang Monitor)', '4', '1500625', 2358125, 857500),
(120, '1.3.2.10.02.04.024', 'Switch', 'Digitools', ' TP-580R', '20', '', '', 2019, '1', 'Unit', 3430000, 'R. Commander (belakang Monitor)', '4', '1500625', 2358125, 857500),
(121, '1.3.2.10.02.04.024', 'Switch', 'Digitools', ' TP-580R', '21', '', '', 2019, '1', 'Unit', 3430000, 'R. Commander (belakang Monitor)', '4', '1500625', 2358125, 857500),
(122, '1.3.2.10.02.04.024', 'Switch', 'Digitools', ' TP-580R', '22', '', '', 2019, '1', 'Unit', 3430000, 'R. Commander (belakang Monitor)', '4', '1500625', 2358125, 857500),
(123, '1.3.2.10.02.04.024', 'Switch', 'Digitools', ' TP-580R', '23', '', '', 2019, '1', 'Unit', 3430000, 'R. Commander (belakang Monitor)', '4', '1500625', 2358125, 857500),
(124, '1.3.2.10.02.04.024', 'Switch', 'Digitools', ' TP-580R', '24', '', '', 2019, '1', 'Unit', 3430000, 'R. Commander (belakang Monitor)', '4', '1500625', 2358125, 857500),
(125, '1.3.2.10.02.04.024', 'Switch', 'Digitools', ' TP-580R', '25', '', '', 2019, '1', 'Unit', 3430000, 'R. Commander (belakang Monitor)', '4', '1500625', 2358125, 857500),
(126, '1.3.2.10.02.04.024', 'Switch', 'Digitools', ' TP-580R', '26', '', '', 2019, '1', 'Unit', 3430000, 'R. Commander (belakang Monitor)', '4', '1500625', 2358125, 857500),
(127, '1.3.2.10.02.04.024', 'Switch', 'Digitools', ' TP-580R', '27', '', '', 2019, '1', 'Unit', 3430000, 'R. Commander (belakang Monitor)', '4', '1500625', 2358125, 857500),
(128, '1.3.2.10.02.04.024', 'Switch', 'Digitools', ' TP-580R', '28', '', '', 2019, '1', 'Unit', 3430000, 'R. Commander (belakang Monitor)', '4', '1500625', 2358125, 857500),
(129, '1.3.2.10.02.04.024', 'Switch', 'Digitools', ' TP-580R', '29', '', '', 2019, '1', 'Unit', 3430000, 'R. Commander (belakang Monitor)', '4', '1500625', 2358125, 857500),
(130, '1.3.2.10.02.04.024', 'Switch', 'Digitools', ' TP-580R', '30', '', '', 2019, '1', 'Unit', 3430000, 'R. Commander (belakang Monitor)', '4', '1500625', 2358125, 857500),
(131, '1.3.2.10.02.04.024', 'Switch', 'Digitools', ' TP-580R', '31', '', '', 2019, '1', 'Unit', 3430000, 'R. Commander (belakang Monitor)', '4', '1500625', 2358125, 857500),
(132, '1.3.2.10.02.04.024', 'Switch', 'Digitools', ' TP-580R', '32', '', '', 2019, '1', 'Unit', 3430000, 'R. Commander (belakang Monitor)', '4', '1500625', 2358125, 857500),
(133, '1.3.2.10.02.04.024', 'Switch', 'Digitools', ' TP-580R', '33', '', '', 2019, '1', 'Unit', 3430000, 'R. Commander (belakang Monitor)', '4', '1500625', 2358125, 857500),
(134, '1.3.2.10.02.04.024', 'Switch', 'Digitools', ' TP-580R', '34', '', '', 2019, '1', 'Unit', 3430000, 'R. Commander (belakang Monitor)', '4', '1500625', 2358125, 857500),
(135, '1.3.2.10.02.04.024', 'Switch', 'Digitools', ' TP-580R', '35', '', '', 2019, '1', 'Unit', 3430000, 'R. Commander (belakang Monitor)', '4', '1500625', 2358125, 857500),
(136, '1.3.2.10.02.04.024', 'Switch', 'Digitools', ' TP-580R', '36', '', '', 2019, '1', 'Unit', 3430000, 'R. Commander (belakang Monitor)', '4', '1500625', 2358125, 857500),
(137, '1.3.2.10.02.04.024', 'Switch', 'Digitools', ' TP-580R', '37', '', '', 2019, '1', 'Unit', 3430000, 'R. Commander (belakang Monitor)', '4', '1500625', 2358125, 857500),
(138, '1.3.2.10.02.04.024', 'Switch', 'Digitools', ' TP-580R', '38', '', '', 2019, '1', 'Unit', 3430000, 'R. Commander (belakang Monitor)', '4', '1500625', 2358125, 857500),
(139, '1.3.2.10.02.04.024', 'Switch', 'Digitools', ' TP-580R', '39', '', '', 2019, '1', 'Unit', 3430000, 'R. Commander (belakang Monitor)', '4', '1500625', 2358125, 857500),
(140, '1.3.2.10.02.04.024', 'Switch', 'Digitools', ' TP-580R', '40', '', '', 2019, '1', 'Unit', 3430000, 'R. Commander (belakang Monitor)', '4', '1500625', 2358125, 857500),
(141, '1.3.2.10.02.04.024', 'Switch', 'Digitools', ' TP-580R', '41', '', '', 2019, '1', 'Unit', 3430000, 'R. Commander (belakang Monitor)', '4', '1500625', 2358125, 857500),
(142, '1.3.2.10.02.04.024', 'Switch', 'Digitools', ' TP-580R', '42', '', '', 2019, '1', 'Unit', 3430000, 'R. Commander (belakang Monitor)', '4', '1500625', 2358125, 857500),
(143, '1.3.2.10.02.04.024', 'Switch', 'Digitools', ' TP-580R', '43', '', '', 2019, '1', 'Unit', 3430000, 'R. Commander (belakang Monitor)', '4', '1500625', 2358125, 857500),
(144, '1.3.2.10.02.04.024', 'Switch', 'Digitools', ' TP-580R', '44', '', '', 2019, '1', 'Unit', 3430000, 'R. Commander (belakang Monitor)', '4', '1500625', 2358125, 857500),
(145, '1.3.2.10.02.04.024', 'Switch', 'Digitools', ' TP-580R', '45', '', '', 2019, '1', 'Unit', 3430000, 'R. Commander (belakang Monitor)', '4', '1500625', 2358125, 857500),
(146, '1.3.2.10.02.04.024', 'Switch', 'Digitools', ' TP-580R', '46', '', '', 2019, '1', 'Unit', 3430000, 'R. Commander (belakang Monitor)', '4', '1500625', 2358125, 857500),
(147, '1.3.2.10.02.04.024', 'Switch', 'Digitools', ' TP-580R', '47', '', '', 2019, '1', 'Unit', 3430000, 'R. Commander (belakang Monitor)', '4', '1500625', 2358125, 857500),
(148, '1.3.2.10.02.04.024', 'Switch', 'Digitools', ' TP-580R', '48', '', '', 2019, '1', 'Unit', 3430000, 'R. Commander (belakang Monitor)', '4', '1500625', 2358125, 857500),
(149, '1.3.2.10.02.04.024', 'Switch', 'Digitools', ' TP-580R', '49', '', '', 2019, '1', 'Unit', 3430000, 'R. Commander (belakang Monitor)', '4', '1500625', 2358125, 857500),
(150, '1.3.2.10.02.04.024', 'Switch', 'Digitools', ' TP-580R', '50', '', '', 2019, '1', 'Unit', 3430000, 'R. Commander (belakang Monitor)', '4', '1500625', 2358125, 857500),
(151, '1.3.2.10.02.04.024', 'Switch', 'Digitools', ' TP-580R', '51', '', '', 2019, '1', 'Unit', 3430000, 'R. Commander (belakang Monitor)', '4', '1500625', 2358125, 857500),
(152, '1.3.2.10.02.04.024', 'Switch', 'Digitools', ' TP-580R', '52', '', '', 2019, '1', 'Unit', 3430000, 'R. Commander (belakang Monitor)', '4', '1500625', 2358125, 857500),
(153, '1.3.2.10.02.04.024', 'Switch', 'Digitools', ' TP-580R', '53', '', '', 2019, '1', 'Unit', 3430000, 'R. Commander (belakang Monitor)', '4', '1500625', 2358125, 857500),
(154, '1.3.2.10.02.04.024', 'Switch', 'Digitools', ' TP-580R', '54', '', '', 2019, '1', 'Unit', 3430000, 'R. Commander (belakang Monitor)', '4', '1500625', 2358125, 857500),
(155, '1.3.2.10.02.04.024', 'Switch', 'Digitools', ' TP-580R', '55', '', '', 2019, '1', 'Unit', 3430000, 'R. Commander (belakang Monitor)', '4', '1500625', 2358125, 857500),
(156, '1.3.2.10.02.04.024', 'Switch', 'Digitools', ' TP-580R', '56', '', '', 2019, '1', 'Unit', 3430000, 'R. Commander (belakang Monitor)', '4', '1500625', 2358125, 857500),
(157, '1.3.2.10.02.04.024', 'Switch', 'Digitools', ' TP-580R', '57', '', '', 2019, '1', 'Unit', 3430000, 'R. Commander (belakang Monitor)', '4', '1500625', 2358125, 857500),
(158, '1.3.2.10.02.04.024', 'Switch', 'Digitools', ' TP-580R', '58', '', '', 2019, '1', 'Unit', 3430000, 'R. Commander (belakang Monitor)', '4', '1500625', 2358125, 857500),
(159, '1.3.2.10.02.04.024', 'Switch', 'Digitools', ' TP-580R', '59', '', '', 2019, '1', 'Unit', 3430000, 'R. Commander (belakang Monitor)', '4', '1500625', 2358125, 857500),
(160, '1.3.2.10.02.04.024', 'Switch', 'Digitools', ' TP-580R', '60', '', '', 2019, '1', 'Unit', 3430000, 'R. Commander (belakang Monitor)', '4', '1500625', 2358125, 857500),
(161, '1.3.2.10.02.04.024', 'Switch', 'Digitools', ' TP-580R', '61', '', '', 2019, '1', 'Unit', 3430000, 'R. Commander (belakang Monitor)', '4', '1500625', 2358125, 857500),
(162, '1.3.2.10.02.04.024', 'Switch', 'Digitools', ' TP-580R', '62', '', '', 2019, '1', 'Unit', 3430000, 'R. Commander (belakang Monitor)', '4', '1500625', 2358125, 857500),
(163, '1.3.2.10.02.04.024', 'Switch', 'Digitools', ' TP-580R', '63', '', '', 2019, '1', 'Unit', 3430000, 'R. Commander (belakang Monitor)', '4', '1500625', 2358125, 857500),
(164, '1.3.2.10.02.04.024', 'Switch', 'Digitools', ' TP-580R', '64', '', '', 2019, '1', 'Unit', 3430000, 'R. Commander (belakang Monitor)', '4', '1500625', 2358125, 857500),
(165, '1.3.2.10.02.04.024', 'Switch', 'Digitools', ' TP-580R', '65', '', '', 2019, '1', 'Unit', 3430000, 'R. Commander (belakang Monitor)', '4', '1500625', 2358125, 857500),
(166, '1.3.2.10.02.04.024', 'Switch', 'Digitools', ' TP-580R', '66', '', '', 2019, '1', 'Unit', 3430000, 'R. Commander (belakang Monitor)', '4', '1500625', 2358125, 857500),
(167, '1.3.2.10.02.04.024', 'Switch', 'Digitools', ' TP-580T', '1', '', '', 2019, '1', 'Unit', 3449500, 'R. Commander (belakang Monitor)', '4', '1509200', 2371600, 862400),
(168, '1.3.2.10.02.04.024', 'Switch', 'Digitools', ' TP-580T', '2', '', '', 2019, '1', 'Unit', 3449500, 'R. Commander (belakang Monitor)', '4', '1509200', 2371600, 862400),
(169, '1.3.2.10.02.04.024', 'Switch', 'Digitools', ' TP-580T', '3', '', '', 2019, '1', 'Unit', 3449500, 'R. Commander (belakang Monitor)', '4', '1509200', 2371600, 862400),
(170, '1.3.2.10.02.04.024', 'Switch', 'Digitools', ' TP-580T', '4', '', '', 2019, '1', 'Unit', 3449500, 'R. Commander (belakang Monitor)', '4', '1509200', 2371600, 862400),
(171, '1.3.2.10.02.04.024', 'Switch', 'Digitools', ' TP-580T', '5', '', '', 2019, '1', 'Unit', 3449500, 'R. Commander (belakang Monitor)', '4', '1509200', 2371600, 862400),
(172, '1.3.2.10.02.04.024', 'Switch', 'Digitools', ' TP-580T', '6', '', '', 2019, '1', 'Unit', 3449500, 'R. Commander (belakang Monitor)', '4', '1509200', 2371600, 862400),
(173, '1.3.2.10.02.04.024', 'Switch', 'Digitools', ' TP-580T', '7', '', '', 2019, '1', 'Unit', 3449500, 'R. Commander (belakang Monitor)', '4', '1509200', 2371600, 862400),
(174, '1.3.2.10.02.04.024', 'Switch', 'Digitools', ' TP-580T', '8', '', '', 2019, '1', 'Unit', 3449500, 'R. Commander (belakang Monitor)', '4', '1509200', 2371600, 862400),
(175, '1.3.2.10.02.04.024', 'Switch', 'Digitools', ' TP-580T', '9', '', '', 2019, '1', 'Unit', 3449500, 'R. Commander (belakang Monitor)', '4', '1509200', 2371600, 862400),
(176, '1.3.2.10.02.04.024', 'Switch', 'Digitools', ' TP-580T', '10', '', '', 2019, '1', 'Unit', 3449500, 'R. Commander (belakang Monitor)', '4', '1509200', 2371600, 862400),
(177, '1.3.2.10.02.04.024', 'Switch', 'Digitools', ' TP-580T', '11', '', '', 2019, '1', 'Unit', 3449500, 'R. Commander (belakang Monitor)', '4', '1509200', 2371600, 862400),
(178, '1.3.2.10.02.04.024', 'Switch', 'Digitools', ' TP-580T', '12', '', '', 2019, '1', 'Unit', 3449500, 'R. Commander (belakang Monitor)', '4', '1509200', 2371600, 862400),
(179, '1.3.2.10.02.04.024', 'Switch', 'Digitools', ' TP-580T', '13', '', '', 2019, '1', 'Unit', 3449500, 'R. Commander (belakang Monitor)', '4', '1509200', 2371600, 862400),
(180, '1.3.2.10.02.04.024', 'Switch', 'Digitools', ' TP-580T', '14', '', '', 2019, '1', 'Unit', 3449500, 'R. Commander (belakang Monitor)', '4', '1509200', 2371600, 862400),
(181, '1.3.2.10.02.04.024', 'Switch', 'Digitools', ' TP-580T', '15', '', '', 2019, '1', 'Unit', 3449500, 'R. Commander (belakang Monitor)', '4', '1509200', 2371600, 862400),
(182, '1.3.2.10.02.04.024', 'Switch', 'Digitools', ' TP-580T', '16', '', '', 2019, '1', 'Unit', 3449500, 'R. Commander (belakang Monitor)', '4', '1509200', 2371600, 862400),
(183, '1.3.2.10.02.04.024', 'Switch', 'Digitools', ' TP-580T', '17', '', '', 2019, '1', 'Unit', 3449500, 'R. Commander (belakang Monitor)', '4', '1509200', 2371600, 862400),
(184, '1.3.2.10.02.04.024', 'Switch', 'Digitools', ' TP-580T', '18', '', '', 2019, '1', 'Unit', 3449500, 'R. Commander (belakang Monitor)', '4', '1509200', 2371600, 862400),
(185, '1.3.2.10.02.04.024', 'Switch', 'Digitools', ' TP-580T', '19', '', '', 2019, '1', 'Unit', 3449500, 'R. Commander (belakang Monitor)', '4', '1509200', 2371600, 862400),
(186, '1.3.2.10.02.04.024', 'Switch', 'Digitools', ' TP-580T', '20', '', '', 2019, '1', 'Unit', 3449500, 'R. Commander (belakang Monitor)', '4', '1509200', 2371600, 862400),
(187, '1.3.2.10.02.04.024', 'Switch', 'Digitools', ' TP-580T', '21', '', '', 2019, '1', 'Unit', 3449500, 'R. Commander (belakang Monitor)', '4', '1509200', 2371600, 862400),
(188, '1.3.2.10.02.04.024', 'Switch', 'Digitools', ' TP-580T', '22', '', '', 2019, '1', 'Unit', 3449500, 'R. Commander (belakang Monitor)', '4', '1509200', 2371600, 862400),
(189, '1.3.2.10.02.04.024', 'Switch', 'Digitools', ' TP-580T', '23', '', '', 2019, '1', 'Unit', 3449500, 'R. Commander (belakang Monitor)', '4', '1509200', 2371600, 862400),
(190, '1.3.2.10.02.04.024', 'Switch', 'Digitools', ' TP-580T', '24', '', '', 2019, '1', 'Unit', 3449500, 'R. Commander (belakang Monitor)', '4', '1509200', 2371600, 862400),
(191, '1.3.2.10.02.04.024', 'Switch', 'Digitools', ' TP-580T', '25', '', '', 2019, '1', 'Unit', 3449500, 'R. Commander (belakang Monitor)', '4', '1509200', 2371600, 862400),
(192, '1.3.2.10.02.04.024', 'Switch', 'Digitools', ' TP-580T', '26', '', '', 2019, '1', 'Unit', 3449500, 'R. Commander (belakang Monitor)', '4', '1509200', 2371600, 862400),
(193, '1.3.2.10.02.04.024', 'Switch', 'Digitools', ' TP-580T', '27', '', '', 2019, '1', 'Unit', 3449500, 'R. Commander (belakang Monitor)', '4', '1509200', 2371600, 862400),
(194, '1.3.2.10.02.04.024', 'Switch', 'Digitools', ' TP-580T', '28', '', '', 2019, '1', 'Unit', 3449500, 'R. Commander (belakang Monitor)', '4', '1509200', 2371600, 862400),
(195, '1.3.2.10.02.04.024', 'Switch', 'Digitools', ' TP-580T', '29', '', '', 2019, '1', 'Unit', 3449500, 'R. Commander (belakang Monitor)', '4', '1509200', 2371600, 862400),
(196, '1.3.2.10.02.04.024', 'Switch', 'Digitools', ' TP-580T', '30', '', '', 2019, '1', 'Unit', 3449500, 'R. Commander (belakang Monitor)', '4', '1509200', 2371600, 862400),
(197, '1.3.2.10.02.04.024', 'Switch', 'Digitools', ' TP-580T', '31', '', '', 2019, '1', 'Unit', 3449500, 'R. Commander (belakang Monitor)', '4', '1509200', 2371600, 862400),
(198, '1.3.2.10.02.04.024', 'Switch', 'Digitools', ' TP-580T', '32', '', '', 2019, '1', 'Unit', 3449500, 'R. Commander (belakang Monitor)', '4', '1509200', 2371600, 862400),
(199, '1.3.2.10.02.04.024', 'Switch', 'Digitools', ' TP-580T', '33', '', '', 2019, '1', 'Unit', 3449500, 'R. Commander (belakang Monitor)', '4', '1509200', 2371600, 862400),
(201, '1.3.2.10.02.04.024', 'Switch', 'Digitools', ' TP-580T', '34', '-', '-', 2019, '1', 'unit', 3449500, 'R. Commander (belakang Monitor)', '4', '1509200', 2371600, 862400),
(202, '1.3.2.02.01.02.003', 'Mini Bus', 'toyota', 'abcd', 'a5', 'm3', 's 4', 2014, '1', 'unit', 10000000, 'Oprasional UPTD PLD', '8', '106480000', 106480000, 862400),
(203, '1.3.2.02.01.02.003', 'Mini Bus', 'toyota', 'abcd', 'a5', 'm3', 's 4', 2014, '1', 'unit', 10000000, 'Oprasional UPTD PLD', '8', '106480000', 106480000, 862400),
(204, '1.3.2.02.01.02.003', 'Mini Bus', 'toyota', 'abcd', 'a5', 'm3', 's 4', 2014, '1', 'unit', 10000000, 'Oprasional UPTD PLD', '8', '106480000', 106480000, 862400),
(205, '1.3.2.02.01.02.003', 'Mini Bus', 'toyota', 'abcd', 'a5', 'm3', 's 4', 2014, '1', 'unit', 10000000, 'Oprasional UPTD PLD', '8', '106480000', 106480000, 862400),
(206, '1.3.2.02.01.02.003', 'Mini Bus', 'toyota', 'abcd', 'a5', 'm3', 's 4', 2014, '1', 'unit', 10000000, 'Oprasional UPTD PLD', '8', '106480000', 106480000, 862400),
(207, '1.3.2.02.01.02.003', 'Mini Bus', 'toyota', 'MHFM1BA36K017400', 'a5', 'DB81183', 'D 1805 D', 2015, '1', 'unit', 10000000, 'Oprasional UPTD PLD', '8', '106480000', 221300000, 114820000),
(208, '1.3.2.02.01.02.003', 'Mini Bus', 'toyota', 'MHFM1BA36K017400', 'a5', 'DB81183', 'D 1805 D', 2015, '1', 'unit', 10000000, 'Oprasional UPTD PLD', '8', '106480000', 221300000, 114820000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `barang_keluar`
--

CREATE TABLE `barang_keluar` (
  `idx` int(11) NOT NULL,
  `kode_barang` varchar(20) NOT NULL,
  `nama_barang` varchar(50) NOT NULL,
  `merk` varchar(50) NOT NULL,
  `spesifikasi` varchar(50) NOT NULL,
  `no_jumlah` varchar(15) NOT NULL,
  `no_mesin` varchar(15) NOT NULL,
  `no_polisi` varchar(15) NOT NULL,
  `tahun_perolehan` int(4) NOT NULL,
  `satuan` varchar(4) NOT NULL,
  `volume` varchar(25) NOT NULL,
  `harga_satuan` longtext NOT NULL,
  `keterangan` varchar(50) NOT NULL,
  `u_ekonomis` varchar(2) NOT NULL,
  `akum_2020` longtext NOT NULL,
  `akum_2021` longtext NOT NULL,
  `beban_2021` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `login`
--

CREATE TABLE `login` (
  `iduser` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `login`
--

INSERT INTO `login` (`iduser`, `email`, `password`) VALUES
(1, 'dimas@gmail.com', '12345');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`idx`);

--
-- Indeks untuk tabel `barang_keluar`
--
ALTER TABLE `barang_keluar`
  ADD PRIMARY KEY (`idx`);

--
-- Indeks untuk tabel `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`iduser`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `barang`
--
ALTER TABLE `barang`
  MODIFY `idx` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=209;

--
-- AUTO_INCREMENT untuk tabel `barang_keluar`
--
ALTER TABLE `barang_keluar`
  MODIFY `idx` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=201;

--
-- AUTO_INCREMENT untuk tabel `login`
--
ALTER TABLE `login`
  MODIFY `iduser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
