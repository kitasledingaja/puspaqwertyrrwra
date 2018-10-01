-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 01 Okt 2018 pada 04.39
-- Versi Server: 5.6.16
-- PHP Version: 5.5.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `float_id`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `artikel`
--

CREATE TABLE IF NOT EXISTS `artikel` (
  `id_artikel` int(11) NOT NULL AUTO_INCREMENT,
  `id_admin` int(11) NOT NULL,
  `judul` text,
  `isi` text,
  `files` varchar(100) DEFAULT NULL,
  `artikel_tanggal` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_artikel`),
  KEY `id_admin` (`id_admin`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ;

--
-- Dumping data untuk tabel `artikel`
--

INSERT INTO `artikel` (`id_artikel`, `id_admin`, `judul`, `isi`, `files`, `artikel_tanggal`) VALUES
(1, 1, 'Game Bisa Jadi', 'game yang memungkinkan anda untuk menebak kata yang hanya diberikan clue pada kepala partner.', 'v1.jpg', '2018-09-17 20:28:07'),
(18, 1, 'testing', 'Gonggong adalah jenis siput yang hidup di Batam, Indonesia. Bahkan, ada banyak Gonggong mati karena ulah manusia dan kemudian manusia membuat Gonggong menjadi beberapa masakan lezat. Lalu, mengapa kita tidak mengucapkan "terima kasih" kepada Gonggong?\r\n\r\nAyo!!! Mari membantu Gonggong untuk mencapai nirwana.', 'v2.jpg', '2018-09-25 22:55:08'),
(19, 1, 'jumping animal', '<p>ssssssssssssff<br></p>', 'v3.jpg', '2018-09-25 22:56:21'),
(20, 1, NULL, NULL, NULL, '2018-09-26 12:09:27'),
(21, 1, NULL, NULL, NULL, '2018-09-26 12:33:09'),
(22, 1, NULL, NULL, NULL, '2018-09-26 21:54:29');

-- --------------------------------------------------------

--
-- Struktur dari tabel `merchandise`
--

CREATE TABLE IF NOT EXISTS `merchandise` (
  `id_merchandise` char(11) NOT NULL,
  `id_admin` int(11) NOT NULL,
  `product` varchar(50) DEFAULT NULL,
  `desc` text,
  `price` varchar(10) DEFAULT NULL,
  `picture` varchar(50) DEFAULT NULL,
  `kategori` int(10) DEFAULT NULL,
  PRIMARY KEY (`id_merchandise`),
  KEY `id_admin` (`id_admin`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `merchandise`
--

INSERT INTO `merchandise` (`id_merchandise`, `id_admin`, `product`, `desc`, `price`, `picture`, `kategori`) VALUES
('1', 1, 'Laptop MacBook Pro 13,3 inchi', 'Layar 13,3 inci (diagonal) dengan lampu latar LED dan teknologi IPS; resolusi 2560 x 1600 pada 227 piksel per inci dengan dukungan untuk jutaan warna.', '9500000', 'laptop1.jpg', 1),
('2', 1, 'Iphone 6s Plus', 'iPhone 6s baru masuk resmi di Indonesia awal 2017 lalu, dan ketika itu harga iPhone 6s dan harga iPhone 6s Plus cukup mahal.', '2500000', 'hp1.jpg', 2),
('3', 1, 'Xbox 360', 'Xbox 360 merupakan kelanjutan dari seri Xbox pertama. Game ini termasuk dalam konsol game generasi ke 7 yang merupakan ekuivalensi dari (PS3).', '7500000', 'xbox.jpg', 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `review`
--

CREATE TABLE IF NOT EXISTS `review` (
  `id_review` char(11) NOT NULL,
  `id_customer` char(11) NOT NULL,
  `id_artikel` int(11) NOT NULL,
  `comment` text NOT NULL,
  `rank` text NOT NULL,
  PRIMARY KEY (`id_review`),
  KEY `id_customer` (`id_customer`),
  KEY `id_artikel` (`id_artikel`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_kategori`
--

CREATE TABLE IF NOT EXISTS `tbl_kategori` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nama_kategori` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data untuk tabel `tbl_kategori`
--

INSERT INTO `tbl_kategori` (`id`, `nama_kategori`) VALUES
(1, 'Laptop'),
(2, 'Smartphone'),
(3, 'Xbox');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `hak_akses` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id_admin`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_admin`, `username`, `email`, `password`, `hak_akses`) VALUES
(0, 'trala', 'trala@gmail.com', '12334', 0),
(1, 'admin_float', 'admin_float@gmail.com', '123456', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_customer`
--

CREATE TABLE IF NOT EXISTS `user_customer` (
  `id_customer` char(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `date_of_birth` date NOT NULL,
  `address` text NOT NULL,
  `email` varchar(50) NOT NULL,
  `telpon` int(15) NOT NULL,
  PRIMARY KEY (`id_customer`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `artikel`
--
ALTER TABLE `artikel`
  ADD CONSTRAINT `artikel_ibfk_1` FOREIGN KEY (`id_admin`) REFERENCES `user` (`id_admin`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `merchandise`
--
ALTER TABLE `merchandise`
  ADD CONSTRAINT `merchandise_ibfk_1` FOREIGN KEY (`id_admin`) REFERENCES `user` (`id_admin`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `review`
--
ALTER TABLE `review`
  ADD CONSTRAINT `review_ibfk_1` FOREIGN KEY (`id_customer`) REFERENCES `user_customer` (`id_customer`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
