-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 04 Jul 2023 pada 19.09
-- Versi server: 10.4.25-MariaDB
-- Versi PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lavanderia`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `admin_name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`admin_id`, `user_id`, `admin_name`) VALUES
(3, 6, 'alwi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `courier`
--

CREATE TABLE `courier` (
  `courier_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `courier_name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `customers`
--

CREATE TABLE `customers` (
  `customer_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `subscription_type` enum('reguler','royale','gold') DEFAULT NULL,
  `subscription_start_date` date DEFAULT NULL,
  `subscription_end_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `customers`
--

INSERT INTO `customers` (`customer_id`, `user_id`, `subscription_type`, `subscription_start_date`, `subscription_end_date`) VALUES
(1, 1, 'reguler', '2023-06-08', '2024-06-11'),
(2, 2, 'royale', '2023-06-08', '2024-06-11'),
(3, 3, 'gold', '2023-06-08', '2024-06-11'),
(4, 4, 'reguler', '2023-06-08', '2025-06-10'),
(5, 5, 'reguler', '2023-06-24', '2024-06-11'),
(6, 6, 'royale', '2023-06-24', '2024-06-11');

-- --------------------------------------------------------

--
-- Struktur dari tabel `laundry_orders`
--

CREATE TABLE `laundry_orders` (
  `order_id` int(100) NOT NULL,
  `customer_id` int(11) DEFAULT NULL,
  `order_date` date DEFAULT NULL,
  `order_status` enum('waiting','in_process','ready_to_ship','done') DEFAULT NULL,
  `payment_method` enum('Gopay','OVO','Dana','cash') DEFAULT NULL,
  `payment_status` enum('pending','paid') DEFAULT NULL,
  `total_weight` decimal(10,2) DEFAULT NULL,
  `total_cost` decimal(10,2) DEFAULT NULL,
  `pickup_date` date DEFAULT NULL,
  `delivery_date` date DEFAULT NULL,
  `alamat` varchar(100) NOT NULL,
  `nota` varchar(100) NOT NULL,
  `pewangi` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `laundry_orders`
--

INSERT INTO `laundry_orders` (`order_id`, `customer_id`, `order_date`, `order_status`, `payment_method`, `payment_status`, `total_weight`, `total_cost`, `pickup_date`, `delivery_date`, `alamat`, `nota`, `pewangi`) VALUES
(1, 1, '2023-05-24', 'waiting', 'OVO', 'pending', '5.00', '250000.00', '2023-06-24', '2023-06-25', 'Jl. Jakal 123', 'ABC1234', 'vanilla'),
(2, 2, '2023-06-24', 'in_process', 'OVO', 'paid', '3.00', '75000.00', '2023-06-25', '2023-06-26', 'Jl. Jamal 456', 'DEF5678', 'vanilla'),
(3, 1, '2023-06-25', 'ready_to_ship', 'Dana', 'pending', '4.00', '32000.00', '2023-06-26', '2023-06-27', 'Jl. Concat 789', 'GHI9012', 'cookies'),
(4, 3, '2023-06-26', 'done', 'OVO', 'paid', '6.00', '120000.00', '2023-06-27', '2023-06-28', 'Jl. Seturan 012', 'JKL3456', 'chocolate'),
(5, 2, '2023-06-27', 'in_process', 'Gopay', 'pending', '5.00', '50000.00', '2023-06-28', '2023-06-29', 'Jl. Babarsari 345', 'MNO7890', 'vanilla'),
(6, 4, '2023-06-28', 'in_process', 'OVO', 'paid', '7.00', '140000.00', '2023-06-29', '2023-06-30', 'Jl. Jakal 678', 'PQR2345', 'lemon'),
(7, 3, '2023-06-29', 'waiting', 'Dana', 'pending', '5.00', '100.00', '2023-06-30', '2023-07-01', 'Jl. Jamal 901', 'STU6789', 'cookies'),
(8, 5, '2023-06-30', 'waiting', 'cash', 'paid', '3.00', '75.00', '2023-07-01', '2023-07-02', 'Jl. Concat 234', 'VWX0123', 'chocolate'),
(9, 4, '2023-07-01', 'waiting', 'Gopay', 'pending', '4.00', '90.00', '2023-07-02', '2023-07-03', 'Jl. Seturan 567', 'YZA4567', 'vanilla'),
(10, 6, '2023-07-02', 'waiting', 'OVO', 'paid', '6.00', '120.00', '2023-07-03', '2023-07-04', 'Jl. Babarsari 890', 'BCD7890', 'lemon'),
(11, 2, '2023-07-03', 'waiting', 'Dana', 'pending', '3.00', '75.00', '2023-07-04', '2023-07-05', 'Jl. Jakal 123', 'EFG1234', 'cookies'),
(12, 1, '2023-07-04', 'waiting', 'cash', 'paid', '5.00', '100.00', '2023-07-05', '2023-07-06', 'Jl. Jamal 456', 'HIJ5678', 'chocolate'),
(13, 4, '2023-07-05', 'waiting', 'Gopay', 'pending', '2.00', '50.00', '2023-07-06', '2023-07-07', 'Jl. Concat 789', 'KLM9012', 'vanilla'),
(14, 3, '2023-07-06', 'waiting', 'OVO', 'paid', '7.00', '140.00', '2023-07-07', '2023-07-08', 'Jl. Seturan 012', 'NOP2345', 'lemon'),
(15, 5, '2023-07-07', 'waiting', 'Dana', 'pending', '5.00', '100.00', '2023-07-08', '2023-07-09', 'Jl. Babarsari 345', 'QRS6789', 'cookies'),
(16, 2, '2023-07-08', 'waiting', 'cash', 'paid', '3.00', '75.00', '2023-07-09', '2023-07-10', 'Jl. Jakal 678', 'TUV0123', 'chocolate'),
(17, 1, '2023-07-09', 'waiting', 'Gopay', 'pending', '4.00', '90.00', '2023-07-10', '2023-07-11', 'Jl. Jamal 901', 'WXY4567', 'vanilla'),
(18, 3, '2023-07-10', 'waiting', 'OVO', 'paid', '6.00', '120.00', '2023-07-11', '2023-07-12', 'Jl. Concat 234', 'ZAB7890', 'lemon'),
(19, 6, '2023-07-11', 'in_process', 'Dana', 'pending', '3.00', '75.00', '2023-07-12', '2023-07-13', 'Jl. Seturan 567', 'CDE1234', 'cookies'),
(20, 4, '2023-07-12', 'waiting', 'cash', 'paid', '5.00', '100.00', '2023-07-13', '2023-07-14', 'Jl. Babarsari 890', 'FGH5678', 'chocolate'),
(21, 5, '2023-07-03', 'waiting', 'Gopay', 'pending', '4.00', '30000.00', '2023-07-03', '2023-07-03', 'jakal', '', 'vanilla'),
(22, 5, '2023-07-03', 'waiting', 'Gopay', 'pending', '5.00', '30000.00', '2023-07-03', '2023-07-03', 'jalan magelang ', '9TWSGJP', 'Lavender'),
(23, 5, '2023-07-03', 'waiting', 'Gopay', 'pending', '2.00', '30000.00', '2023-07-03', '2023-07-03', 'balikpapan', 'S3PPBN9', 'vanilla'),
(24, 5, '2023-07-03', 'waiting', 'Gopay', 'pending', '2.00', '30000.00', '2023-07-03', '2023-07-03', 'balikpapan', '', 'vanilla'),
(25, 5, '2023-07-03', 'waiting', 'Gopay', 'pending', '4.00', '30000.00', '2023-07-03', '2023-07-03', 'BANGUNTAPAN', 'BQ4EFL1', 'vanilla'),
(26, 5, '2023-07-03', 'waiting', 'Gopay', 'pending', '4.00', '100.00', '2023-07-03', '2023-07-03', 'BANGUNTAPAN', '', 'vanilla'),
(27, 5, '2023-07-03', 'waiting', 'Gopay', 'pending', '1.00', '30000.00', '2023-07-03', '2023-07-03', 'magelang kota', 'GO29TTA', 'vanilla'),
(28, 5, '2023-07-03', 'waiting', 'Gopay', 'pending', '2.00', '30000.00', '2023-07-03', '2023-07-03', 'jakarta', 'GGF9MIR', 'vanilla'),
(29, 5, '2023-07-03', 'waiting', 'Gopay', 'pending', '3.00', '15000.00', '2023-07-03', '2023-07-03', 'pacitan', '770B82O', 'Lemon'),
(30, 6, '2023-07-03', 'waiting', 'Gopay', 'pending', '5.00', '25000.00', '2023-07-03', '2023-07-03', 'awas', '9UANKXZ', 'vanilla'),
(31, 6, '2023-07-03', 'waiting', 'Gopay', 'pending', '56.00', '280000.00', '2023-07-03', '2023-07-03', 'asaft', 'UDBHRT3', 'vanilla'),
(32, 6, '2023-07-03', 'waiting', 'Gopay', 'pending', '6.00', '30000.00', '2023-07-03', '2023-07-03', 'awas', 'V1TA4AQ', 'vanilla'),
(33, 6, '2023-07-03', 'waiting', 'Gopay', 'pending', '2.00', '10000.00', '2023-07-03', '2023-07-03', 'jakarta', 'M3JKWGV', 'vanilla'),
(34, 1, '2023-07-03', 'waiting', 'Gopay', 'pending', '5.00', '30000.00', '2023-07-03', '2023-07-03', 'sa', 'V92AV2S', 'vanilla'),
(35, 1, '2023-07-03', 'waiting', 'Gopay', 'pending', '5.00', '40000.00', '2023-07-03', '2023-07-03', 'asat', 'ZREJGSS', 'vanilla'),
(36, 1, '2023-07-03', 'waiting', 'Gopay', 'pending', '5.00', '30000.00', '2023-07-03', '2023-07-03', 'asat', '', 'vanilla'),
(37, 1, '2023-07-03', 'waiting', 'Gopay', 'pending', '5.00', '30000.00', '2023-07-03', '2023-07-03', 'asat', '', 'vanilla'),
(38, 1, '2023-07-03', 'waiting', 'Gopay', 'pending', '5.00', '30000.00', '2023-07-03', '2023-07-03', 'asat', '', 'vanilla'),
(39, 1, '2023-07-03', 'waiting', 'Gopay', 'pending', '5.00', '3000.00', '2023-07-03', '2023-07-03', 'asat', '', 'vanilla'),
(40, 1, '2023-07-03', 'waiting', 'Gopay', 'pending', '3.00', '10000.00', '2023-07-03', '2023-07-03', 'asat', '', 'vanilla'),
(41, 1, '2023-07-03', 'waiting', 'Gopay', 'pending', '5.00', '30000.00', '2023-07-03', '2023-07-03', 'asat', '', 'vanilla'),
(42, 1, '2023-07-03', 'waiting', 'Gopay', 'pending', '5.00', '30000.00', '2023-07-03', '2023-07-03', 'asat', '', 'vanilla'),
(43, 1, '2023-07-03', 'waiting', 'Gopay', 'pending', '5.00', '30000.00', '2023-07-03', '2023-07-03', 'asat', '', 'vanilla'),
(44, 1, '2023-07-03', 'waiting', 'Gopay', 'pending', '5.00', '30000.00', '2023-07-03', '2023-07-03', 'asat', '', 'vanilla'),
(45, 1, '2023-07-03', 'waiting', 'Gopay', 'pending', '5.00', '30000.00', '2023-07-03', '2023-07-03', 'asat', '', 'vanilla'),
(46, 6, '2023-07-03', 'waiting', 'Gopay', 'pending', '5.00', '30000.00', '2023-07-03', '2023-07-03', 'jakarta', 'LVIESLT', 'vanilla'),
(48, 6, '2023-07-04', 'waiting', 'OVO', 'pending', '3.00', '3000.00', '2023-07-04', '2023-07-04', 'Jalan R.E. Martadinata', 'VX66NGC', 'vanilla'),
(49, 6, '2023-07-04', 'waiting', 'OVO', 'pending', '3.00', '0.00', '2023-07-04', '2023-07-04', 'magelang', '0RDXCWW', 'lavender'),
(50, 6, '2023-07-04', 'waiting', 'OVO', 'pending', '4.00', '32000.00', '2023-07-04', '2023-07-04', 'jakarta', 'UC3L5D1', 'semangka'),
(51, 6, '2023-07-04', 'waiting', 'OVO', 'pending', '3.00', '24000.00', '2023-07-04', '2023-07-04', 'jalan magelang', 'XQ2TPI0', 'lavender'),
(52, 5, '2023-07-04', 'waiting', 'OVO', 'pending', '4.00', '20000.00', '2023-07-04', '2023-07-04', 'mars', '7GAFCTF', 'lavender'),
(53, 6, '2023-07-04', 'waiting', 'OVO', 'pending', '3.00', '24000.00', '2023-07-04', '2023-07-04', 'jamal', 'AOIVAGF', 'lemon'),
(54, 6, '2023-07-04', 'waiting', 'OVO', 'pending', '3.00', '15000.00', '2023-07-04', '2023-07-04', 'jamal', '', 'lemon'),
(55, 6, '2023-07-04', 'waiting', 'OVO', 'pending', '4.00', '32000.00', '2023-07-04', '2023-07-04', 'kalimantan', 'NKXRTP1', 'vanilla'),
(56, 6, '2023-07-04', 'in_process', 'OVO', 'pending', '4.00', '0.00', '2023-07-04', '2023-07-04', 'Jakal', '2MBKAF9', 'lemon');

-- --------------------------------------------------------

--
-- Struktur dari tabel `orderan`
--

CREATE TABLE `orderan` (
  `id_status` int(11) NOT NULL,
  `status_name` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `orderan`
--

INSERT INTO `orderan` (`id_status`, `status_name`) VALUES
(1, 'waiting'),
(2, 'in_process'),
(3, 'ready_to_ship'),
(4, 'done');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `password` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `role` enum('admin','courier','customer') DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `phn_num` varchar(20) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `image` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`user_id`, `password`, `email`, `role`, `name`, `phn_num`, `address`, `image`) VALUES
(1, 'abc', 'juliana@hmail.co', 'customer', 'Julia', '085678894332', 'palagan', ''),
(2, '321', 'kholid@hmail.co', 'customer', 'Kholid', '085434432332', 'ngaglik', ''),
(3, 'asu', 'galuh@hmail.co', 'customer', 'Galuh Crot', '08796554344', 'Pandanaran', ''),
(4, 'decepticon', 'megatron@hmail.co', 'customer', 'Megatron', '087645534554', 'Cybertron', 'noprofil.jpg'),
(5, '123', 'gilang@gmail.com', 'customer', 'gilang', '082230395538', 'jogja', 'gilang - 2023.07.03 - 04.10.44pm.jpg'),
(6, '123', 'alwi@gmail.com', 'admin', 'alwi', '082239284924', 'banguntapan', 'alwi - 2023.07.04 - 07.06.17pm.png');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`),
  ADD KEY `admin_ibfk_1` (`user_id`);

--
-- Indeks untuk tabel `courier`
--
ALTER TABLE `courier`
  ADD PRIMARY KEY (`courier_id`),
  ADD KEY `courier_ibfk_1` (`user_id`);

--
-- Indeks untuk tabel `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`customer_id`),
  ADD KEY `customers_ibfk_1` (`user_id`);

--
-- Indeks untuk tabel `laundry_orders`
--
ALTER TABLE `laundry_orders`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `laundry_orders_ibfk_1` (`customer_id`),
  ADD KEY `fk_laundry_orders_orderan` (`order_status`);

--
-- Indeks untuk tabel `orderan`
--
ALTER TABLE `orderan`
  ADD PRIMARY KEY (`id_status`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `courier`
--
ALTER TABLE `courier`
  MODIFY `courier_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `customers`
--
ALTER TABLE `customers`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `laundry_orders`
--
ALTER TABLE `laundry_orders`
  MODIFY `order_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD CONSTRAINT `admin_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);

--
-- Ketidakleluasaan untuk tabel `courier`
--
ALTER TABLE `courier`
  ADD CONSTRAINT `courier_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);

--
-- Ketidakleluasaan untuk tabel `customers`
--
ALTER TABLE `customers`
  ADD CONSTRAINT `customers_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);

--
-- Ketidakleluasaan untuk tabel `laundry_orders`
--
ALTER TABLE `laundry_orders`
  ADD CONSTRAINT `laundry_orders_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`customer_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
