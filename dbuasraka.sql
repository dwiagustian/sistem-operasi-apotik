-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Waktu pembuatan: 11. Nopember 2016 jam 06:17
-- Versi Server: 5.5.16
-- Versi PHP: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `dbuasraka`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `produkgalinggis`
--

CREATE TABLE IF NOT EXISTS `produkgalinggis` (
  `idprodukraka` int(10) NOT NULL,
  `namaprodukraka` varchar(40) NOT NULL,
  `merekraka` varchar(20) NOT NULL,
  `hargajualraka` double NOT NULL,
  `stokraka` int(3) NOT NULL,
  PRIMARY KEY (`idprodukraka`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `produkgalinggis`
--

INSERT INTO `produkgalinggis` (`idprodukraka`, `namaprodukraka`, `merekraka`, `hargajualraka`, `stokraka`) VALUES
(0, '', '', 0, 0),
(123454, '', '', 32823, 324);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
