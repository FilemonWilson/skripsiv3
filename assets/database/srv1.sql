-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 28 Jun 2018 pada 18.39
-- Versi Server: 10.1.10-MariaDB
-- PHP Version: 5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `srv1`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `srv1`
--

CREATE TABLE `srv1` (
  `username` text NOT NULL,
  `password` text NOT NULL,
  `MAI1` text NOT NULL,
  `MAI2` text NOT NULL,
  `MAI3` text NOT NULL,
  `MAI4` text NOT NULL,
  `MAI5` text NOT NULL,
  `Eval1` int(11) NOT NULL,
  `Eval2` int(11) NOT NULL,
  `Eval3` int(11) NOT NULL,
  `Eval4` int(11) NOT NULL,
  `Eval5` int(11) NOT NULL,
  `nilai` int(255) NOT NULL,
  `draw` varchar(255) NOT NULL,
  `summ` varchar(255) NOT NULL,
  `numberofclicks` int(11) NOT NULL,
  `pageduration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `srv1`
--

INSERT INTO `srv1` (`username`, `password`, `MAI1`, `MAI2`, `MAI3`, `MAI4`, `MAI5`, `Eval1`, `Eval2`, `Eval3`, `Eval4`, `Eval5`, `nilai`, `draw`, `summ`, `numberofclicks`, `pageduration`) VALUES
('admin', 'admin', 'SL', 'SS', 'SS', 'Summarization', 'SL', 0, 0, 0, 0, 0, 90, '', 'aa bb cc dd', 0, 0),
('wilson', 'wilson', '', '', '', 'Video', '', 1, 0, 5, 0, 0, 80, '', 'asa', 0, 0),
('mangga', 'mangga', 'SL', 'SS', 'KD', 'Video', 'SL', 1, 2, 1, 1, 1, 80, '', 'aa bb cc dd', 0, 0),
('ekown', 'ekown', '', '', '', '', '', 0, 0, 0, 0, 0, 0, '', '', 0, 0),
('zaza', 'zaza', '', '', '', '', '', 0, 0, 0, 0, 0, 0, '', '', 0, 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
