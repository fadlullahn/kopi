-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Waktu pembuatan: 23 Jul 2024 pada 20.30
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kopi`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `artikel`
--

CREATE TABLE `artikel` (
  `id` int(11) NOT NULL,
  `idjudul` text NOT NULL,
  `judul` text NOT NULL,
  `deskripsi` text NOT NULL,
  `konten` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `artikel`
--

INSERT INTO `artikel` (`id`, `idjudul`, `judul`, `deskripsi`, `konten`) VALUES
(1, 'saw', 's Baracoffea terdapat 7spesies. Berdasarkan geografik (tempat tumbuh) dan rekayasa genetik, kopi dapat dibedakan', 'mila', '<p><strong>Fisiologi Tanaman Kopi</strong></p>\r\n<p>Kopi termasuk kelompok tanaman semak belukar dengan genius Coffea. Kopi termasuk ke dalam family Rubiaceae, subfamily lxoroideae, dan suku Coffeae. Seorang bernama Linnaeus merupakan orang yang pertama mendeskripsikan spesies kopi (<em>Coffea arabica</em>) pada tahun 1753. Menurut Bridson dan Vercourt pada tahun 1988,<strong>&nbsp;kopi</strong>&nbsp;dibagi menjadi 2 genus, yakni Coffea dan Psilanthus. Genus Coffea terbagi menjadi 2 subgenus, yakni Coffe dan Baracoffea. Subgenus Coffea terdiri dari 88 spesies. Sementara itu, subgenus Baracoffea terdapat 7spesies. Berdasarkan geografik (tempat tumbuh) dan rekayasa genetik, kopi dapat dibedakan menjadi 5, kopi yang berasal dari Ethiopia, Madagascar, serta Benua Afrika bagian barat, tengah, dan timur (Andre Illy dan Rinantonio Viani, 2005). Tanaman&nbsp;<strong>kopi</strong>&nbsp;terdiri dari: akar, batang dan percabangan (cabang primer dan cabang sekunder, cabang reproduksi, cabang balik dan cabang kipas), daun, bunga, dan buah.</p>\r\n<p><strong>Penyerbukan</strong></p>\r\n<p>Tanaman&nbsp;<strong>kopi</strong>&nbsp;termasuk tanaman yang dapat melakukan penyerbukan sendiri (<em>self fertile</em>). Keberhasilan tanaman kopi untuk berbunga hingga menjadi buah sangat dipengaruhi oleh iklim (musim hujan atau kemarau). Penyerbukan umumnya terjadi setelah musim hujan. Penyerbukan dipengaruhi oleh iklim secara umum.</p>\r\n<p><strong>Jenis-jenis Kopi</strong></p>\r\n<p>Jenis kopi yang banyak dibudidayakan yakni kopi arabika&nbsp;<em>(Coffea arabica</em>) dan robusta (<em>Coffea canephora</em>). Sementara itu, ada juga jenis&nbsp;<em>Coffea liberica&nbsp;</em>dan&nbsp;<em>Coffea congensis&nbsp;</em>yang merupakan perkembangan dari jenis robusta.</p>\r\n<p><strong>A. Kopi Arabika</strong></p>\r\n<p>Awalnya, jenis kopi yang dibudidayakan di Indonesia adalah&nbsp;<strong>arabika</strong>, lalu liberika dan terakhir kopi jenis&nbsp;<strong>robusta.</strong>&nbsp;Kopi jenis&nbsp;<strong>arabika</strong>&nbsp;sangat baik ditanam di daerah yang berketinggian 1.000-2.100 meter di atas permukaan laut (dpl). Semakin tinggi lokasi perkebunan kopi, cita rasa yang dihasilkan oleh biji kopi akan semakin baik. Karena itu, perkebunan kopi&nbsp;<strong>arabika</strong>&nbsp;hanya terdapat di beberapa daerah tertentu (di daerah yang memiliki ketinggian di atas 1.000 meter). Berbagai klon unggulan dari Pusat Penelitian Kopi dan Kakao Indonesia (PPKKI), di antaranya AB 3, S 795, USDA 762, Kartika 1, Kartika 2, Andungsari 1 dan BP 416. Sebagai gambaran awal, hasil produksi arabika klon Kartika sekitar 800-2.500 kg/ha/tahun (Direktorat Jenderal Perkebunan, 2002). Berikut karakteristik biji kopi arabika secara umum:</p>\r\n<p>1. Rendemannya lebih kecil dari jenis kopi lainnya (18-20%).</p>\r\n<p>2. Bentuknya agak memanjang.</p>\r\n<p>3. Bidang cembungnya tidak terlalu tinggi.</p>\r\n<p>4. Lebih bercahaya dibandingkan dengan jenis lainnya.</p>\r\n<p>5. Ujung biji lebih mengkilap, tetapi jika dikeringkan berlebihan akan terlihat retak atau pecah.</p>\r\n<p>6. Celah tengah (<em>center cut</em>) di bagian datar (perut) tidak lurus memanjang ke bawah, tetapi</p>\r\n<p>&nbsp;&nbsp; berlekuk.</p>\r\n<p>7. Untuk biji yang sudah dipanggang (<em>roasting</em>), celah tengah terlihat putih.</p>\r\n<p>8. Untuk biji yang sudah diolah, kulit ari kadang-kadang masih menempel di celah atau parit biji</p>\r\n<p>&nbsp;&nbsp; kopi.</p>\r\n<p><strong>B. Kopi Robusta</strong></p>\r\n<p>Tanaman kopi jenis<strong>&nbsp;robusta</strong>&nbsp;memiliki adaptasi yang lebih baik dibandingkan dengan kopi jenis arabika. Areal perkebunan kopi jenis robusta di Indonesia relatif luas. Pasalnya, kopi jenis&nbsp;<strong>robusta</strong>&nbsp;dapat tumbuh di ketinggian yang lebih rendah dibandingkan dengan lokasi perkebunan arabika. Kopi jenis robusta yang asli sudah hampir hilang. Saat ini, beberapa jenis robusta sudah bercampur menjadi klon atau hibrida, seperti klon BP 39, BP 42, SA 13, SA 34, dan SA 56. Produksi kopi jenis robusta secara umum dapat mencapai 800-2.000 kg/hektar/tahun (Direktorat Jenderal Perkebunan, 2002). Berikut ini karakteristik fisik biji kopi robusta:</p>\r\n<p>1. Rendeman kopi robusta relatif lebih tinggi dibandingkan dengan rendeman kopi arabika (20-</p>\r\n<p>&nbsp;&nbsp; 22%).</p>\r\n<p>2. Biji kopi agak bulat.</p>\r\n<p>3. Lengkungan biji lebih tebal dibandingkan dengan jenis arabika.</p>\r\n<p>4. Garis tengah (parit) dari atas ke bawah hampir rata.</p>\r\n<p>5. Untuk biji yang sudah diolah, tidak terdapat kulit ari di lekukan atau bagian parit.</p>\r\n<p><strong>C. Kopi Liberika</strong></p>\r\n<p>Dahulu, kopi liberika pernah dibudidayakan di Indonesia, tetapi sekarang sudah ditinggalkan oelh perkebunan atau petani. Pasalnya, bobot biji kopi keringnya hanya sekitar 10% dari bobot kopi basah. Selain perbandingan bobot basah dan bobot kering, rendeman biji kopi liberika yang rendah merupakan salah satu faktor tidak berkembangnya jenis kopi liberika di Indonesia. Rendeman kopi liberika hanya sekitar 10-12%. Karakteristik biji kopi liberika hampir sama dengan jenis arabika. Pasalnya, liberika merupakan pengembangan dari jenis arabika. Kelebihannya, jenis liberika lebih tahan terhadap serangan hama&nbsp;<em>Hemelia vastatrixi&nbsp;</em>dibandingkan dengan kopi jenis arabika.</p>\r\n<p><strong>Syarat dan Lokasi Tumbuh Tanaman Kopi</strong></p>\r\n<p>Tanaman kopi dapat tumbuh dengan baik apabila faktor yang berpengaruh terhadap pertumbuhan dan pemeliharaan tanaman dapat dioptimalkan dengan baik. Berikut ini beberapa syarat pertumbuhan kopi secara umum.</p>\r\n<ol>\r\n<li style=\"list-style-type: lower-alpha;\"><strong>a.</strong><strong>Tanah</strong></li>\r\n</ol>\r\n<p>Tanah digunakan sebagai media tumbuh tanama kopi. Salah satu ciri tanah yang baik adalah memiliki lapisan&nbsp;<em>topsoil&nbsp;</em>yang tebal. Umumnya, kondisi tanah di dataran tinggi memiliki kandungan organik yang cukup banyak dan tidak terlalu banyak terkontaminasi polusi udara. Tanaman kopi sebaiknya ditanam di tanah yang memiliki kandungan hara dan organik yang tinggi. Rata-rata pH tanah yang dianjurkan 5-7. Jika pH tanah terlalu asam, tambahkan pupuk Ca(PO)2 atau Ca(PO3)2 (kapur atau dolomit). Sementara itu, untuk menurunkan pH tanah dari basa ke asam, tambahkan urea. Caranya taburkan kapur atau urea secukupnya sesuai kondisi tanah, lalu periksa keasaman tanah dengan pH meter. Tambahkan urea jika pH tanah masih basa atau tambahkan kapur jika terlalu asam hingga pH tanah menjadi 5-7.</p>\r\n<ol>\r\n<li style=\"list-style-type: lower-alpha;\"><strong>b.</strong><strong>Curah Hujan</strong></li>\r\n</ol>\r\n<p>Curah hujan mempengaruhi pembentukan bunga hingga menjadi buah. Untuk arabika, jumlah curah hujan yang masih bisa ditolerir sekitar 1.000-1.500 mm/tahun. Sementara itu, curah hujan untuk kopi robusta maksimum 2.000 mm/tahun.</p>\r\n<p>Penanaman atau pembangunan perkebunan kopi di suatu daerah perlu melihat data klimatologi daerah tersebut selama 5 tahun terakhir. Daerah yang berada di atas ketinggian 1.000 meter dpl dan memiliki curah hujan yang baik umumnya justru memiliki musim kering relatif pendek. Sebaliknya, tanaman kopi membutuhkan musim kering yang agak panjang untuk memperoleh produksi yang optimal.</p>\r\n<ol>\r\n<li style=\"list-style-type: lower-alpha;\"><strong>c.</strong><strong>Suhu</strong></li>\r\n</ol>'),
(2, 'aras', 'SPK Metode ARAS', 'Contoh implementasi DSS (Decision Support System) dengan Metode Additive Ratio ASsessment (ARAS) menggunakan PHP dan MySQL untuk pemilihan lingkungan perumahan terbaik', '<p class=\"text-green-400 font-semibold\">ini adalah teks</p><div class=\"text-green-400\"><code><b>456</b>ulla</code></div>'),
(3, 'anp', 'SPK Metode ANP', 'Contoh implementasi DSS (Decision Support System) dengan metode ANP menggunakan PHP dan MySQL untuk analisa faktor-faktor yang mempengaruhi prestasi kerja karyawan', ''),
(4, 'ahp', 'SPK Metode AHP', 'Contoh implementasi DSS (Decision Support System) dengan metode AHP menggunakan PHP dan MySQL', ''),
(5, 'cpi', 'SPK Metode CPI', 'Contoh implementasi DSS (Decision Support System) dengan metode CPI menggunakan PHP dan MySQL', ''),
(6, 'juna', 'juna', 'juna', '<p>juna</p>');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(20) DEFAULT NULL,
  `pass` text DEFAULT NULL,
  `level` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `username`, `pass`, `level`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'Admin');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `artikel`
--
ALTER TABLE `artikel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
