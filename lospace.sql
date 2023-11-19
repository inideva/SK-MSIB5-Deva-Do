-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 19 Nov 2023 pada 10.13
-- Versi server: 10.4.22-MariaDB
-- Versi PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lospace`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE `kategori` (
  `id` int(11) NOT NULL,
  `nama_kategori` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`id`, `nama_kategori`) VALUES
(1, 'Sofa'),
(2, 'Kursi'),
(3, 'Meja'),
(4, '1 set');

-- --------------------------------------------------------

--
-- Struktur dari tabel `produk`
--

CREATE TABLE `produk` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `gambar` text DEFAULT NULL,
  `harga` decimal(11,0) NOT NULL,
  `detail` text DEFAULT NULL,
  `kategori_id` int(11) NOT NULL,
  `stok` enum('Tersedia','Kosong') DEFAULT 'Tersedia'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `produk`
--

INSERT INTO `produk` (`id`, `nama`, `gambar`, `harga`, `detail`, `kategori_id`, `stok`) VALUES
(92, 'Kursi kayu ', 'produk1.jpg', '100000', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Veniam, quod possimus? Cum deleniti temporibus esse quia deserunt minus nobis animi modi sint. Tempore porro mollitia voluptatibus eligendi vero ipsam quae deleniti. Accusamus et sint facere! Deleniti voluptas sit illo neque dignissimos officia doloremque quisquam nostrum, explicabo unde omnis ratione dicta.', 2, 'Tersedia'),
(93, 'Sofa big size', 'produk2.jpg', '2499000', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Veniam, quod possimus? Cum deleniti temporibus esse quia deserunt minus nobis animi modi sint. Tempore porro mollitia voluptatibus eligendi vero ipsam quae deleniti. Accusamus et sint facere! Deleniti voluptas sit illo neque dignissimos officia doloremque quisquam nostrum, explicabo unde omnis ratione dicta.', 1, 'Tersedia'),
(94, 'Kursi Luxury', 'produk3.jpg', '1800000', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Veniam, quod possimus? Cum deleniti temporibus esse quia deserunt minus nobis animi modi sint. Tempore porro mollitia voluptatibus eligendi vero ipsam quae deleniti. Accusamus et sint facere! Deleniti voluptas sit illo neque dignissimos officia doloremque quisquam nostrum, explicabo unde omnis ratione dicta.', 2, 'Tersedia'),
(95, 'Kursi belajar', 'produk4.jpg', '80000', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Veniam, quod possimus? Cum deleniti temporibus esse quia deserunt minus nobis animi modi sint. Tempore porro mollitia voluptatibus eligendi vero ipsam quae deleniti. Accusamus et sint facere! Deleniti voluptas sit illo neque dignissimos officia doloremque quisquam nostrum, explicabo unde omnis ratione dicta.', 2, 'Tersedia'),
(96, 'Satu set meja kursi minimalis', 'produk5.jpg', '300000', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Veniam, quod possimus? Cum deleniti temporibus esse quia deserunt minus nobis animi modi sint. Tempore porro mollitia voluptatibus eligendi vero ipsam quae deleniti. Accusamus et sint facere! Deleniti voluptas sit illo neque dignissimos officia doloremque quisquam nostrum, explicabo unde omnis ratione dicta.', 4, 'Tersedia'),
(97, 'Sofa Kursi living room', 'produk6.jpg', '1000000', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Veniam, quod possimus? Cum deleniti temporibus esse quia deserunt minus nobis animi modi sint. Tempore porro mollitia voluptatibus eligendi vero ipsam quae deleniti. Accusamus et sint facere! Deleniti voluptas sit illo neque dignissimos officia doloremque quisquam nostrum, explicabo unde omnis ratione dicta.', 4, 'Tersedia'),
(98, 'Kursi kayu simple', 'produk7.jpg', '50000', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Veniam, quod possimus? Cum deleniti temporibus esse quia deserunt minus nobis animi modi sint. Tempore porro mollitia voluptatibus eligendi vero ipsam quae deleniti. Accusamus et sint facere! Deleniti voluptas sit illo neque dignissimos officia doloremque quisquam nostrum, explicabo unde omnis ratione dicta.', 2, 'Tersedia'),
(99, 'Sofa keluarga', 'produk8.jpg', '800000', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Veniam, quod possimus? Cum deleniti temporibus esse quia deserunt minus nobis animi modi sint. Tempore porro mollitia voluptatibus eligendi vero ipsam quae deleniti. Accusamus et sint facere! Deleniti voluptas sit illo neque dignissimos officia doloremque quisquam nostrum, explicabo unde omnis ratione dicta.', 1, 'Tersedia'),
(100, 'Satu set meja belajar', 'produk9.jpg', '950000', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Veniam, quod possimus? Cum deleniti temporibus esse quia deserunt minus nobis animi modi sint. Tempore porro mollitia voluptatibus eligendi vero ipsam quae deleniti. Accusamus et sint facere! Deleniti voluptas sit illo neque dignissimos officia doloremque quisquam nostrum, explicabo unde omnis ratione dicta.', 4, 'Tersedia'),
(101, 'Meja mini', 'produk10.jpg', '200000', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Veniam, quod possimus? Cum deleniti temporibus esse quia deserunt minus nobis animi modi sint. Tempore porro mollitia voluptatibus eligendi vero ipsam quae deleniti. Accusamus et sint facere! Deleniti voluptas sit illo neque dignissimos officia doloremque quisquam nostrum, explicabo unde omnis ratione dicta.', 3, 'Tersedia'),
(102, 'Kursi Putih', 'produk11.jpg', '30000', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Veniam, quod possimus? Cum deleniti temporibus esse quia deserunt minus nobis animi modi sint. Tempore porro mollitia voluptatibus eligendi vero ipsam quae deleniti. Accusamus et sint facere! Deleniti voluptas sit illo neque dignissimos officia doloremque quisquam nostrum, explicabo unde omnis ratione dicta.', 2, 'Tersedia'),
(103, 'Sofa livingroom', 'produk12.jpg', '1500000', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Veniam, quod possimus? Cum deleniti temporibus esse quia deserunt minus nobis animi modi sint. Tempore porro mollitia voluptatibus eligendi vero ipsam quae deleniti. Accusamus et sint facere! Deleniti voluptas sit illo neque dignissimos officia doloremque quisquam nostrum, explicabo unde omnis ratione dicta.', 1, 'Tersedia');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tipe_produk`
--

CREATE TABLE `tipe_produk` (
  `id` int(11) NOT NULL,
  `produk_id` int(11) DEFAULT NULL,
  `warna_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tipe_produk`
--

INSERT INTO `tipe_produk` (`id`, `produk_id`, `warna_id`) VALUES
(1, 1, 1),
(2, 2, 2),
(3, 3, 1),
(4, 38, 1),
(5, 39, 1),
(6, 45, 1),
(7, 46, 1),
(8, 60, 1),
(9, 61, 1),
(10, 62, 1),
(11, 63, 2),
(12, 64, 1),
(13, 65, 3),
(14, 67, 1),
(15, 68, 1),
(16, 69, 2),
(17, 70, 1),
(18, 71, 1),
(19, 72, 1),
(20, 73, 1),
(21, 74, 1),
(22, 75, 1),
(23, 77, 2),
(24, 83, 1),
(25, 84, 2),
(26, 85, 1),
(27, 86, 1),
(28, 87, 2),
(29, 88, 3),
(30, 89, 2),
(31, 91, 1),
(32, 92, 3),
(33, 93, 1),
(34, 93, 2),
(35, 93, 3),
(36, 93, 4),
(37, 93, 5),
(38, 93, 6),
(39, 94, 2),
(40, 95, 1),
(41, 95, 2),
(42, 96, 2),
(43, 97, 2),
(44, 98, 4),
(45, 99, 3),
(46, 100, 1),
(47, 100, 4),
(48, 101, 4),
(49, 102, 2),
(50, 103, 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `warna`
--

CREATE TABLE `warna` (
  `id` int(11) NOT NULL,
  `warna_produk` enum('Hitam','Putih','Abu','Coklat','Merah','Kuning') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `warna`
--

INSERT INTO `warna` (`id`, `warna_produk`) VALUES
(1, 'Hitam'),
(2, 'Putih'),
(3, 'Abu'),
(4, 'Coklat'),
(5, 'Merah'),
(6, 'Kuning');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nama` (`nama`),
  ADD KEY `kategori_produk` (`kategori_id`);

--
-- Indeks untuk tabel `tipe_produk`
--
ALTER TABLE `tipe_produk`
  ADD PRIMARY KEY (`id`),
  ADD KEY `produk_id` (`produk_id`),
  ADD KEY `warna_id` (`warna_id`);

--
-- Indeks untuk tabel `warna`
--
ALTER TABLE `warna`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `produk`
--
ALTER TABLE `produk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=104;

--
-- AUTO_INCREMENT untuk tabel `tipe_produk`
--
ALTER TABLE `tipe_produk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT untuk tabel `warna`
--
ALTER TABLE `warna`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `produk`
--
ALTER TABLE `produk`
  ADD CONSTRAINT `kategori_produk` FOREIGN KEY (`kategori_id`) REFERENCES `kategori` (`id`);

--
-- Ketidakleluasaan untuk tabel `tipe_produk`
--
ALTER TABLE `tipe_produk`
  ADD CONSTRAINT `tipe_produk_ibfk_1` FOREIGN KEY (`produk_id`) REFERENCES `produk` (`id`),
  ADD CONSTRAINT `tipe_produk_ibfk_2` FOREIGN KEY (`warna_id`) REFERENCES `warna` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
