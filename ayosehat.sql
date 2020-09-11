-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 27 Jul 2020 pada 10.06
-- Versi server: 10.3.16-MariaDB
-- Versi PHP: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ayosehat`
--

-- --------------------------------------------------------

--
-- Stand-in struktur untuk tampilan `checkout`
-- (Lihat di bawah untuk tampilan aktual)
--
CREATE TABLE `checkout` (
`id_checkout` varchar(255)
,`nama_produk` varchar(255)
,`harga` double(8,2)
,`gambar` varchar(255)
,`jumlah` int(11)
,`name` varchar(255)
,`users_id` int(10)
);

-- --------------------------------------------------------

--
-- Struktur dari tabel `comments`
--

CREATE TABLE `comments` (
  `id` int(10) UNSIGNED NOT NULL,
  `message` text NOT NULL,
  `id_posts` int(10) UNSIGNED NOT NULL,
  `id_users` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail_checkout`
--

CREATE TABLE `detail_checkout` (
  `id_checkout` varchar(255) NOT NULL,
  `id_barang` int(10) NOT NULL,
  `jumlah` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `detail_checkout`
--

INSERT INTO `detail_checkout` (`id_checkout`, `id_barang`, `jumlah`) VALUES
('28311238780274775376263934', 1, 3),
('28311238780274775376263934', 1, 1),
('28311238780274775376263934', 2, 1),
('28311238780274775376263934', 1, 1),
('28311238780274775376263934', 1, 1),
('28311238780274775376263934', 2, 1),
('28311238780274775376263934', 2, 1),
('28311238780274775376263934', 1, 1),
('211048745410119025251160832300', 1, 3),
('211048745410119025251160832300', 1, 1),
('211048745410119025251160832300', 2, 1),
('211048745410119025251160832300', 1, 1),
('211048745410119025251160832300', 1, 1),
('211048745410119025251160832300', 2, 1),
('211048745410119025251160832300', 2, 1),
('211048745410119025251160832300', 1, 1),
('211048745410119025251160832300', 1, 1),
('186609034612424123491817216739', 1, 3),
('186609034612424123491817216739', 1, 1),
('186609034612424123491817216739', 2, 1),
('186609034612424123491817216739', 1, 1),
('186609034612424123491817216739', 1, 1),
('186609034612424123491817216739', 2, 1),
('186609034612424123491817216739', 2, 1),
('186609034612424123491817216739', 1, 1),
('186609034612424123491817216739', 1, 1),
('186609034612424123491817216739', 1, 1),
('17113931210807873876682143', 1, 3),
('17113931210807873876682143', 1, 1),
('17113931210807873876682143', 2, 1),
('17113931210807873876682143', 1, 1),
('17113931210807873876682143', 1, 1),
('17113931210807873876682143', 2, 1),
('17113931210807873876682143', 2, 1),
('17113931210807873876682143', 1, 1),
('17113931210807873876682143', 1, 1),
('17113931210807873876682143', 1, 1),
('17113931210807873876682143', 1, 1),
('23013242919358889931789390728', 1, 1);

-- --------------------------------------------------------

--
-- Stand-in struktur untuk tampilan `keranjang`
-- (Lihat di bawah untuk tampilan aktual)
--
CREATE TABLE `keranjang` (
`id_keranjang` int(10) unsigned
,`name` varchar(255)
,`nama_produk` varchar(255)
,`harga` double(8,2)
,`gambar` varchar(255)
,`jumlah` int(11)
);

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `posts`
--

CREATE TABLE `posts` (
  `id` int(10) UNSIGNED NOT NULL,
  `category_id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `fileAset` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `posts`
--

INSERT INTO `posts` (`id`, `category_id`, `title`, `content`, `fileAset`, `created_at`, `updated_at`) VALUES
(2, 1, 'Makanan Menghilangkan Bau Badan', '1. Seledri Seledri adalah diuretik yang ampuh melawan bau dengan cara mengeluarkan toksin atau racun dalam tubuh, karena mengandung vitamin K, potasium, folat, dan fitronutrien. Sayuran renyah ini bisa menstimulasi hati untuk menghilangkan racun penyebab bau tubuh lewat sistem pencernaan. Kelebihan lainnya, selederi dipercaya bisa mengeluarkan feromon alami yang bisa membuat bau seorang pria lebih menarik di hadapan wanita.  2. Tumbuhan herbal beraroma Kemangi, ketumbar, rosemary, peterseli, oregano, lavender, dan mint biasanya dijadikan campuran dalam masakan. Minyak esensial yang terkandung dalam tumbuh-tumbuhan tersebut membuat aroma makanan akan jauh lebih sedap. Hal yang sama akan terjadi dalam tubuh kita lho.  3. Parsley Tumbuhan satu ini sering digunakan sebabagi garnish pada masakan Amerika. Di samping fungsinya mempercantik tampilan makanan, parsley punya manfaat untuk membersihkan aliran darah. Parsley mengandung klorofil tinggi, yakni senyawa pewarna hijau yang ada dalam tumbuhan. Senyawa ini memba', '1594892482_251.jpg', '2020-07-16 09:41:22', '2020-07-16 02:41:22');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_barang`
--

CREATE TABLE `tbl_barang` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama_produk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga` double(8,2) NOT NULL,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `tbl_barang`
--

INSERT INTO `tbl_barang` (`id`, `nama_produk`, `harga`, `gambar`) VALUES
(1, 'Obat', 10000.00, '1594348996_late-milk.jpeg'),
(2, 'Kalung anti Corona', 12000.00, '1594350535_kalung.jpg'),
(3, 'Pelanging Badan', 50000.00, '1594350562_pelangsing badan.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_checkout`
--

CREATE TABLE `tbl_checkout` (
  `id_checkout` varchar(255) NOT NULL,
  `users_id` int(10) NOT NULL,
  `total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_checkout`
--

INSERT INTO `tbl_checkout` (`id_checkout`, `users_id`, `total`) VALUES
('23013242919358889931789390728', 4, 10000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_keranjang`
--

CREATE TABLE `tbl_keranjang` (
  `id_keranjang` int(10) UNSIGNED NOT NULL,
  `users_id` int(10) UNSIGNED NOT NULL,
  `id_barang` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jumlah` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `tbl_keranjang`
--

INSERT INTO `tbl_keranjang` (`id_keranjang`, `users_id`, `id_barang`, `jumlah`) VALUES
(1, 4, '1', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `level` set('admin','user') COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`, `level`) VALUES
(1, 'novanda', 'novanda@gmail.com', '$2y$10$Xmb3Q/vHA2wdmosWWqHUpufF/Elw3zDbwmz72cGzsPFWxKCKu3nly', NULL, '2020-07-12 20:38:57', '2020-07-12 20:38:57', ''),
(2, 'user', 'user@user.com', 'ee11cbb19052e40b07aac0ca060c23ee', NULL, NULL, NULL, ''),
(4, 'vanda', 'vanda@vanda.com', '$2y$10$oOp17/8W4EuPvBX/hYPR3.L8oKCiDrDNQeCIz1Xh.h6vNzjscur3e', 'BovKDg2BuhwMd8vT46A9z7d8lOOTlFB8CcW4Cou73OZ2spls3TwpH4zVO6PA', '2020-07-26 00:05:03', '2020-07-26 00:05:03', ''),
(5, 'user', 'user@mail.com', '$2y$10$qPUZi6K9edyTjSj88vyNmeebCXPMc3jY40OD2jG1ewwmssYia2Z6i', NULL, '2020-07-26 01:31:25', '2020-07-26 01:31:25', ''),
(6, 'iniuser', 'ini@ini.com', '$2y$10$EI4q16xBz74Et7HFb4002Oo6Liid6SMwjZKMiXNrXQGX4UAhfcMKG', NULL, '2020-07-26 04:04:30', '2020-07-26 04:04:30', ''),
(7, 'aaa', 'aa@aa.com', '$2y$10$RpSyvdpXKCzn.Gko0xnGleIYNwAMzAwZuiFprN/S5kc2vJ0Is24GK', NULL, '2020-07-26 12:26:59', '2020-07-26 12:26:59', ''),
(8, 'elisa', 'el@lisa.com', '$2y$10$pyncxFaLOBB65DgCJQ/FIeKXPGwU6UzGRX80E1jusfMWv16ghxlWy', NULL, '2020-07-26 23:05:56', '2020-07-26 23:05:56', ''),
(9, 'vanda', 'van@nda.com', '$2y$10$6eDn15JZX6rPWwUwwijnA./AA2AeDjgNmx6ILugyLbNqoB3g9dXna', NULL, '2020-07-26 23:08:24', '2020-07-26 23:08:24', '');

-- --------------------------------------------------------

--
-- Struktur untuk view `checkout`
--
DROP TABLE IF EXISTS `checkout`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `checkout`  AS  (select `tbl_checkout`.`id_checkout` AS `id_checkout`,`tbl_barang`.`nama_produk` AS `nama_produk`,`tbl_barang`.`harga` AS `harga`,`tbl_barang`.`gambar` AS `gambar`,`detail_checkout`.`jumlah` AS `jumlah`,`users`.`name` AS `name`,`tbl_checkout`.`users_id` AS `users_id` from (((`detail_checkout` join `tbl_checkout` on(`detail_checkout`.`id_checkout` = `tbl_checkout`.`id_checkout`)) join `users` on(`tbl_checkout`.`users_id` = `users`.`id`)) join `tbl_barang` on(`detail_checkout`.`id_barang` = `tbl_barang`.`id`))) ;

-- --------------------------------------------------------

--
-- Struktur untuk view `keranjang`
--
DROP TABLE IF EXISTS `keranjang`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `keranjang`  AS  (select `tbl_keranjang`.`id_keranjang` AS `id_keranjang`,`users`.`name` AS `name`,`tbl_barang`.`nama_produk` AS `nama_produk`,`tbl_barang`.`harga` AS `harga`,`tbl_barang`.`gambar` AS `gambar`,`tbl_keranjang`.`jumlah` AS `jumlah` from ((`tbl_keranjang` join `tbl_barang` on(`tbl_keranjang`.`id_barang` = `tbl_barang`.`id`)) join `users` on(`tbl_keranjang`.`users_id` = `users`.`id`))) ;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_posts` (`id_posts`),
  ADD KEY `id_users` (`id_users`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `posts_category_id_foreign` (`category_id`);

--
-- Indeks untuk tabel `tbl_barang`
--
ALTER TABLE `tbl_barang`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_keranjang`
--
ALTER TABLE `tbl_keranjang`
  ADD PRIMARY KEY (`id_keranjang`),
  ADD KEY `tbl_keranjang_ibfk_1` (`users_id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tbl_barang`
--
ALTER TABLE `tbl_barang`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tbl_keranjang`
--
ALTER TABLE `tbl_keranjang`
  MODIFY `id_keranjang` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_ibfk_1` FOREIGN KEY (`id_posts`) REFERENCES `comments` (`id`),
  ADD CONSTRAINT `comments_ibfk_2` FOREIGN KEY (`id_users`) REFERENCES `comments` (`id`);

--
-- Ketidakleluasaan untuk tabel `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tbl_keranjang`
--
ALTER TABLE `tbl_keranjang`
  ADD CONSTRAINT `tbl_keranjang_ibfk_1` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
