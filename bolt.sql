-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 20, 2021 at 09:57 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bolt`
--

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(15) NOT NULL,
  `product_code` varchar(255) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_desc` varchar(255) NOT NULL,
  `price` int(10) NOT NULL,
  `units` int(5) NOT NULL,
  `total` int(15) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `email` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `product_code`, `product_name`, `product_desc`, `price`, `units`, `total`, `date`, `email`) VALUES
(14, 'seacapt1', 'Bandeng ', 'Ikan Bandeng fresh dengan ukuran 1.000\r\ngram. Pembelian minimal 2.000 gram.\r\nProduk terpacking vakum dan diberikan es\r\npendingin saat pengiriman.\r\n\r\n', 35000, 3, 105000, '2021-11-20 07:47:24', 'sesillia@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `product_code` varchar(60) NOT NULL,
  `product_name` varchar(60) NOT NULL,
  `product_desc` tinytext NOT NULL,
  `product_img_name` varchar(60) NOT NULL,
  `qty` int(5) NOT NULL,
  `price` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `product_code`, `product_name`, `product_desc`, `product_img_name`, `qty`, `price`) VALUES
(1, 'seacapt1', 'Bandeng ', 'Ikan Bandeng fresh dengan ukuran 1.000\r\ngram. Pembelian minimal 2.000 gram.\r\nProduk terpacking vakum dan diberikan es\r\npendingin saat pengiriman.\r\n\r\n', 'ikan_bandeng.png', 197, 35000),
(2, 'seacapt2', 'Bawal', 'Ikan Bawal fresh dengan ukuran 1.000\r\ngram. Pembelian minimal 2.000 gram.\r\nProduk terpacking vakum dan diberikan es\r\npendingin saat pengiriman.\r\n', 'ikan_bawal.png', 200, 80000),
(3, 'seacapt3', 'Kerapu', 'Ikan Kerapu fresh dengan ukuran 1.000\r\ngram. Pembelian minimal 2.000 gram.\r\nProduk terpacking vakum dan diberikan es\r\npendingin saat pengiriman.', 'ikan_kerapu.png', 200, 80000),
(4, 'seacapt4', 'Lele', 'Ikan Lele fresh dengan ukuran 1.000\r\ngram. Pembelian minimal 2.000 gram.\r\nProduk terpacking vakum dan diberikan es\r\npendingin saat pengiriman.', 'ikan_lele.png', 200, 26000),
(5, 'seacapt5', 'Nila', 'Ikan Nila fresh dengan ukuran 1.000\r\ngram. Pembelian minimal 2.000 gram.\r\nProduk terpacking vakum dan diberikan es\r\npendingin saat pengiriman.', 'ikan_nila.png', 200, 40000),
(6, 'seacapt6', 'Patin', 'Ikan Patin fresh dengan ukuran 1.000\r\ngram. Pembelian minimal 2.000 gram.\r\nProduk terpacking vakum dan diberikan es\r\npendingin saat pengiriman.', 'ikan_patin.png', 200, 35000),
(7, 'seacapt7', 'Mas', 'Ikan Mas fresh dengan ukuran 1.000\r\ngram. Pembelian minimal 2.000 gram.\r\nProduk terpacking vakum dan diberikan es\r\npendingin saat pengiriman.', 'ikan_mas.png', 200, 45000),
(8, 'seacapt8', 'Cakalang', 'Ikan Cakalang fresh dengan ukuran 1.000\r\ngram. Pembelian minimal 2.000 gram.\r\nProduk terpacking vakum dan diberikan es\r\npendingin saat pengiriman.', 'ikan_cakalang.png', 200, 27000),
(9, 'seacapt9', 'Kembung', 'Ikan Kembung fresh dengan ukuran 1.000\r\ngram. Pembelian minimal 2.000 gram.\r\nProduk terpacking vakum dan diberikan es\r\npendingin saat pengiriman.', 'ikan_kembung.png', 200, 50000),
(10, 'seacapt10', 'Tongkol', 'Ikan Tongkol fresh dengan ukuran 1.000\r\ngram. Pembelian minimal 2.000 gram.\r\nProduk terpacking vakum dan diberikan es\r\npendingin saat pengiriman.', 'ikan_tongkol.png', 200, 30000),
(11, 'seacapt11', 'Gabus', 'Ikan Gabus fresh dengan ukuran 1.000\r\ngram. Pembelian minimal 2.000 gram.\r\nProduk terpacking vakum dan diberikan es\r\npendingin saat pengiriman.', 'ikan_gabus.png', 200, 49000),
(12, 'seacapt12', 'Gurame', 'Ikan Gurame fresh dengan ukuran 1.000\r\ngram. Pembelian minimal 2.000 gram.\r\nProduk terpacking vakum dan diberikan es\r\npendingin saat pengiriman.', 'ikan_gurame.png', 200, 30000),
(13, 'seacapt13', 'Kepiting', 'Kepiting fresh dengan ukuran 1.000\r\ngram. Pembelian minimal 2.000 gram.\r\nProduk terpacking vakum dan diberikan es\r\npendingin saat pengiriman.', 'kepiting.png', 200, 150000),
(14, 'seacapt14', 'Cumi-cumi', 'Cumi-cumi fresh dengan ukuran 1.000 gram. Pembelian minimal 2.000 gram. Produk terpacking vakum dan diberikan es pendingin saat pengiriman.', 'cumi-cumi.png', 200, 45000),
(15, 'seacapt15', 'Udang', 'Udang fresh dengan ukuran 1.000 gram. Pembelian minimal 2.000 gram. Produk terpacking vakum dan diberikan es pendingin saat pengiriman.', 'udang.png', 200, 95000);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `city` varchar(100) NOT NULL,
  `pin` int(6) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(15) NOT NULL,
  `type` varchar(20) NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fname`, `lname`, `address`, `city`, `pin`, `email`, `password`, `type`) VALUES
(1, 'Sesil', 'Sesillia', 'Indonesia', 'jakarta', 12345, 'sesillia@gmail.com', 'sesil', 'user'),
(2, 'Gopar', 'Soeltan Abdul Gofar', 'Indonesia', 'Bogor', 9876, 'gopar@gmail.com', 'gopar', 'admin'),
(3, 'Alfita', 'Alfita Bhadralia', 'Indonesia', 'Bogor', 13234, 'alfita@gmail.com', 'alfita', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `product_code` (`product_code`);

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
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
