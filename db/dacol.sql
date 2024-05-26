-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 26, 2024 at 06:22 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `s`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `description` text NOT NULL,
  `price` decimal(10,0) NOT NULL,
  `rrp` decimal(10,0) NOT NULL DEFAULT 0,
  `quantity` int(11) NOT NULL,
  `img` text NOT NULL,
  `date_added` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `title`, `description`, `price`, `rrp`, `quantity`, `img`, `date_added`) VALUES
(1, 'Louis Vuitton Speedy Bag', 'The epitome of timeless elegance, the Louis Vuitton Speedy Bag combines iconic design with impeccable craftsmanship. Crafted from the finest leather and adorned with the iconic LV monogram, this bag exudes luxury and sophistication. Its spacious interior and versatile silhouette make it a must-have for any fashion enthusiast.\r\n\r\n', 23000, 23000, 100, 'https://imgs.search.brave.com/7kCvtYvs1cPDyzunP-dWv8lKUoVibldD8VfRNeExhm8/rs:fit:860:0:0/g:ce/aHR0cHM6Ly93d3cu/ZGFsbGFzZGVzaWdu/ZXJoYW5kYmFncy5j/b20vY2RuL3Nob3Av/ZmlsZXMvRFNDODk1/Nl9jbGlwcGVkX3Jl/dl8xX2VmNWJmZjli/LWZmZjQtNDVlZC05/ZTc1LWMyM2JlNmMx/NjRiNl9sYXJnZS5q/cGc_dj0xNzA2NjU0/MTAy', '2024-05-12 00:00:00'),
(2, 'Chanel Classic Flap Bag', 'A symbol of understated luxury, the Chanel Classic Flap Bag is an investment piece that never goes out of style. With its quilted leather exterior and signature interlocking CC closure, this bag is a statement of timeless chic. Perfect for day or night, it effortlessly elevates any outfit with its timeless elegance.\r\n\r\n', 12000, 12000, 333, 'https://imgs.search.brave.com/GR-s_SZ586bUiR1UHNeWzrY1UqC_QkP5IoPTP4DbSCA/rs:fit:860:0:0/g:ce/aHR0cDovL3d3dy5w/dXJzZWJsb2cuY29t/L2ltYWdlcy8yMDE1/LzAyL0NoYW5lbC1D/bGFzc2ljLUZsYXAt/QmFnLUludGVyaW9y/LTIuanBn', '2024-05-12 00:00:00'),
(3, 'Hermès Birkin Bag', 'Coveted by fashionistas and collectors alike, the Hermès Birkin Bag is the ultimate status symbol. Handcrafted from the finest leather and finished with exquisite hardware, each Birkin is a masterpiece of luxury and refinement. With its iconic silhouette and unparalleled craftsmanship, it remains one of the most sought-after bags in the world.\r\n', 2600, 2600, 96, 'https://imgs.search.brave.com/QCX5HSbdSSvaA9Ja2_nKjxC2yArooGfAnnNirG7uTZc/rs:fit:860:0:0/g:ce/aHR0cHM6Ly9qYW5l/ZmluZHMuY29tL2Nk/bi9zaG9wL2ZpbGVz/L0hlcm1lcy1CaXJr/aW4tMjUtQmxhY2st/VG9nby13aXRoLUdv/bGQtSGFyZHdhcmUu/anBnP3Y9MTcxMTA5/MTE0MiZ3aWR0aD0x/ODAw', '2024-05-12 00:00:00'),
(4, 'Gucci Dionysus Bag', ' Bold and distinctive, the Gucci Dionysus Bag is a modern classic that captures the spirit of the Italian fashion house. Featuring the iconic GG motif and a unique horseshoe-shaped closure, this bag is a statement piece that adds instant edge to any look. With its luxurious craftsmanship and attention to detail, it\'s a must-have for fashion-forward individuals.\r\n\r\n', 5600, 5600, 40, 'https://imgs.search.brave.com/JgFQqKRgy7LHMmurH6BCCnnqdH1vy0noT-pWWbxtvz8/rs:fit:500:0:0/g:ce/aHR0cHM6Ly9jZG5h/Lmx5c3RpdC5jb20v/NDAwLzUwMC90ci9w/aG90b3MvbHZyL2Vh/NWRhMzI5L2d1Y2Np/LVNpbHZlci1TdXBl/ci1NaW5pLURpb255/c3VzLUxlYXRoZXIt/U2hvdWxkZXItQmFn/LmpwZWc', '2024-05-12 00:00:00'),
(5, 'Prada Galleria Bag', 'Appreciated for its long battery life, easy-to-use design, and excellent vapor quality.\r\n', 5000, 5000, 30, 'https://imgs.search.brave.com/EQXdR7n5YJPrEgdmaaiYE5LHMFzf_-tW16J1-UYIJGY/rs:fit:500:0:0/g:ce/aHR0cHM6Ly9jZG5h/Lmx5c3RpdC5jb20v/NDAwLzUwMC90ci9w/aG90b3Mvc3VpdG5l/Z296aS9mYTMwNzRj/OS9wcmFkYS0tR2Fs/bGVyaWEtTWVkaXVt/LUJhZy1Jbi1TYWZm/aWFuby1MZWF0aGVy/LmpwZWc', '2024-05-12 00:00:00'),
(6, 'Dior Lady Dior Bag', 'Graceful and refined, the Dior Lady Dior Bag is a true icon of French fashion. Named after Princess Diana, who famously adored it, this bag features the signature cannage quilting and iconic Dior charms. With its timeless design and impeccable craftsmanship, it remains a symbol of elegance and sophistication.\r\n\r\n', 60000, 60000, 30, 'https://imgs.search.brave.com/qdrm7ipNy4X8RysK8-9Kk_vlkGw-UVx4GFUWNDInzDE/rs:fit:860:0:0/g:ce/aHR0cHM6Ly9pLnBp/bmltZy5jb20vb3Jp/Z2luYWxzLzA4LzYw/LzE3LzA4NjAxN2Mz/OTA5ZGNiYjlhMTAx/MDljMjRiNTQ4ZDU1/LmpwZw', '2024-05-12 00:00:00'),
(7, 'Celine Luggage Tote', 'Effortlessly chic, the Celine Luggage Tote is beloved for its minimalist design and understated luxury. Crafted from buttery soft leather and featuring the iconic flared gussets, this bag is a perfect blend of form and function. With its spacious interior and versatile silhouette, it\'s the ultimate everyday companion for the modern woman.\r\n\r\n', 3000, 3000, 36, 'https://imgs.search.brave.com/iZEppEpc2fHIbACrPmZRoj3QuscD5Hjzla5g-1Q0J0o/rs:fit:500:0:0/g:ce/aHR0cHM6Ly9kaTJw/b252MHY1b3R3LmNs/b3VkZnJvbnQubmV0/L3Bvc3RzLzIwMjQv/MDQvMjgvNjYyZjE4/MjUyOTA4NjJjYzUz/YzU4ODkwL3NfNjYy/ZjE4MjYyOTA4NjJj/YzUzYzU4ODkxLmpw/Zw', '2024-05-12 00:00:00'),
(8, 'Balenciaga City Bag', 'Edgy and urban, the Balenciaga City Bag is a modern classic that adds a cool-girl vibe to any look. Crafted from soft lambskin leather and featuring signature studs and hardware, this bag is the epitome of downtown chic. With its slouchy silhouette and roomy interior, it\'s the perfect accessory for off-duty days.', 4597, 4597, 30, 'https://imgs.search.brave.com/NDwrdz_lCUfDJPtM198m5_zaJuCy8oHiczwDVbHMqKM/rs:fit:500:0:0/g:ce/aHR0cHM6Ly9kaTJw/b252MHY1b3R3LmNs/b3VkZnJvbnQubmV0/L3Bvc3RzLzIwMjQv/MDQvMzAvNjYzMTgx/ODI2YWY1NzU4NTMw/ZTk4MmUzL3NfNjYz/MTgxOTMxZGY2MzZh/ZGY2YjQ0OGFiLmpw/Zw', '2024-05-12 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
