-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 30, 2025 at 07:01 AM
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
-- Database: `dostava`
--

-- --------------------------------------------------------

--
-- Table structure for table `korisnik`
--

CREATE TABLE `korisnik` (
  `id` int(11) NOT NULL,
  `imeKorisnika` varchar(30) NOT NULL,
  `prezimeKorisnika` varchar(50) NOT NULL,
  `emailKorisnika` varchar(80) NOT NULL,
  `lozinkaKorisnika` varchar(80) NOT NULL,
  `telefonKorisnika` varchar(15) NOT NULL,
  `gradKorisnika` varchar(50) NOT NULL,
  `ulicaKorisnika` varchar(50) NOT NULL,
  `brojUliceKorisnika` varchar(10) NOT NULL,
  `drzavaKorisnika` varchar(50) NOT NULL,
  `admin` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `korisnik`
--

INSERT INTO `korisnik` (`id`, `imeKorisnika`, `prezimeKorisnika`, `emailKorisnika`, `lozinkaKorisnika`, `telefonKorisnika`, `gradKorisnika`, `ulicaKorisnika`, `brojUliceKorisnika`, `drzavaKorisnika`, `admin`) VALUES
(19, 'Admin', 'Adminovic', 'admin@admin.com', '$2y$10$D2/XuVN9f2WgAmGOQ4m/Pu37CpLgGzHffswb.3hkEONVw3p4lzYsG', '06000000000', 'Bajna Basta', 'Karadjordjeva', '19', 'Srbija', 1);

-- --------------------------------------------------------

--
-- Table structure for table `proizvod`
--

CREATE TABLE `proizvod` (
  `id` int(11) NOT NULL,
  `cenaProizvoda` int(50) NOT NULL,
  `imeProizvoda` varchar(255) NOT NULL,
  `sifra` int(50) NOT NULL,
  `kategorija` varchar(50) NOT NULL,
  `pol` varchar(50) NOT NULL,
  `boja` varchar(50) NOT NULL,
  `slika` varchar(255) NOT NULL,
  `tipProizvoda` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `proizvod`
--

INSERT INTO `proizvod` (`id`, `cenaProizvoda`, `imeProizvoda`, `sifra`, `kategorija`, `pol`, `boja`, `slika`, `tipProizvoda`) VALUES
(4, 2500, 'Novčanik Mona', 2152134, 'Akcesoari', 'Ženski', 'Crvena', 'produkti/novcanik3.jpg', 'novcanik'),
(5, 3000, 'Novčanik MonaStyle', 6161223, 'Akcesoari', 'Ženski', 'Roza', 'produkti/novcanik1.jpg', 'novcanik'),
(6, 4500, 'Novčanik MonaNew', 461242, 'Akcesoari', 'Ženski', 'Siva', 'produkti/novcanik2.jpg', 'novcanik'),
(18, 1200, 'Kaiš MonaM', 886543, 'Akcesoari', 'Muški', 'Crni', 'produkti/kais1.jpg', 'kais'),
(19, 1650, 'Kaiš MonaMadam', 511123, 'Akcesoari', 'Ženski', 'Roza', 'produkti/kais2.jpg', 'kais'),
(20, 1650, 'Kaiš MonaStyle', 116078, 'Akcesoari', 'Ženski', 'Svetlo Plava', 'produkti/kais3.jpg', 'kais'),
(21, 850, 'Kravata M', 251712, 'Akcesoari', 'Muški', 'Tamno Plava', 'produkti/kravata1.jpg', 'kravata'),
(22, 850, 'Kravata Model', 999764, 'Akcesoari', 'Muški', 'Ružičasta', 'produkti/kravata2.jpg', 'kravata'),
(23, 2500, 'Majica Jack&Jones', 212111, 'Kratki Rukavi', 'Muški', 'Crna', 'produkti/majica4.jpg', 'muskaMajica'),
(24, 2000, 'Majica Adidas', 678119, 'Kratki Rukavi', 'Muški', 'Tamno Siva', 'produkti/majica2.jpg', 'muskaMajica'),
(25, 3000, 'Majica Polo', 554713, 'Polo', 'Muški', 'Crna', 'produkti/majica3.jpg', 'muskaMajica'),
(26, 1500, 'Majica Siva', 1173690, 'Kratki Rukavi', 'Muški', 'Siva', 'produkti/majica1.jpg', 'muskaMajica'),
(27, 9000, 'Jakna Nike', 889241, 'Zimska', 'Muški', 'Crna', 'produkti/nike.jpg', 'muskaJakna'),
(28, 6000, 'Jakna Invento', 622000, 'Prolećna', 'Muški', 'Crna', 'produkti/invento.jpg', 'muskaJakna'),
(29, 5000, 'Pantalone Tom Tailor', 646464, 'Casual', 'Muški', 'Svetlo Plava', 'produkti/tomtailor.jpg', 'muskePantalone'),
(30, 3000, 'Pantalone Massimo', 651249, 'Farmerke', 'Muški', 'Maslinasto Zelena', 'produkti/massimodutti.jpg', 'muskePantalone'),
(31, 2500, 'Pantalone Ombre', 9090122, 'Casual', 'Muški', 'Svetlo Siva', 'produkti/ombre.jpg', 'muskePantalone'),
(32, 3000, 'Pantalone Elegantne', 7112345, 'Elegantne', 'Ženski', 'Siva', 'produkti/elegantne.jpg', 'zenskePantalone'),
(33, 2000, 'Pantalone Oxford Arizona', 113952, 'Casual', 'Ženski', 'Crne', 'produkti/oxford arizona.jpg', 'zenskePantalone'),
(34, 3500, 'Majica Lacoste', 6139025, 'Polo', 'Ženski', 'Svetlo Roza', 'produkti/lacoste.jpg', 'zenskaMajica'),
(35, 5500, 'Majica Calvin Klein', 900395, 'Kratki Rukavi', 'Ženski', 'Svetlo Roza', 'produkti/CalvinKlein.jpg', 'zenskaMajica'),
(36, 3000, 'Majica Puma', 331060, 'Kratki Rukavi', 'Ženski', 'Roza', 'produkti/puma1.jpg', 'zenskaMajica'),
(37, 5000, 'Jakna Puma', 592929, 'Zimska', 'Ženski', 'Siva', 'produkti/puma.jpg', 'zenskaJakna'),
(38, 8500, 'Jakna Kožna', 1101010, 'Kožna', 'Ženski', 'Crna', 'produkti/kozna.jpg', 'zenskaJakna');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `korisnik`
--
ALTER TABLE `korisnik`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `emailKorisnika` (`emailKorisnika`) USING BTREE;

--
-- Indexes for table `proizvod`
--
ALTER TABLE `proizvod`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `korisnik`
--
ALTER TABLE `korisnik`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `proizvod`
--
ALTER TABLE `proizvod`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
