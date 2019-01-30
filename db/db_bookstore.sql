-- Adminer 4.7.1 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

SET NAMES utf8mb4;

DROP TABLE IF EXISTS `bukus`;
CREATE TABLE `bukus` (
  `id` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_penulis` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_penerbit` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_jenis_cover` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_kategori` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_relasi_genre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tahun_terbit` date NOT NULL,
  `jumlah_halaman` int(10) unsigned DEFAULT NULL,
  `berat_buku` int(10) unsigned DEFAULT NULL,
  `p` int(10) unsigned DEFAULT NULL COMMENT 'Panjang Buku',
  `l` int(10) unsigned DEFAULT NULL COMMENT 'Lebar Buku',
  `id_bahasa` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ket` text COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Keterangan/Resensi Buku',
  `stok` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


DROP TABLE IF EXISTS `genres`;
CREATE TABLE `genres` (
  `id` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `genre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keterangan` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `genres` (`id`, `genre`, `keterangan`, `created_at`, `updated_at`) VALUES
('1deb6037834a4904af8a42f7441e841f',	'Horor',	'adalah jenis genre yang cerita dan plotnya dibangun sedemikian rupa sehingga mampu memberikan rasa ngeri pada pembaca/penonton.',	'2019-01-29 07:59:09',	'2019-01-29 07:59:09'),
('7bcbe825cfcd46ea83efa1667a77bbd6',	'Fanfiction',	'adalah sebuah cerita yang dibuat sebagai tribute untuk sesuatu yang memiliki copy right, alias sesuatu yang sudah ada.',	'2019-01-29 08:00:23',	'2019-01-29 08:00:23'),
('849e7d2aa2924a49b0d24ccbaa5cb21c',	'Fantasi',	'adalah genre yang memiliki unsur magis dan supernatural, berkecimpung dalam dunia yang kelihatannya serba surealis namun sebenarnya sangat logis',	'2019-01-29 07:59:35',	'2019-01-29 07:59:35'),
('95795409950641cda9521c44aa2a38f3',	'Misteri',	'belum tentu horor. misteri adalah cerita yang bertugas untuk membuat pembaca merasa penasaran sepanjang cerita karena banyak hal yang ditutupi dan terbongkar satu persatu. Cerita misteri menekankan pada unsur twist dan membutuhkan trick yang kuat untuk mempertahankan kemisteriannya.',	'2019-01-29 08:01:03',	'2019-01-29 08:01:03'),
('a30984fc7a29490e9fbcebecf2dc4771',	'Humor',	'adalah genre yang menekankan pada unsur komedi dan parodi. Humor lebih menekankan pada unsur jenaka dan bertujuan utama untuk membuat pembaca menjadi tertawa dan terhibur.',	'2019-01-29 08:00:42',	'2019-01-29 08:00:42'),
('ab40eacbeb9d4c28adbb633432eae7ea',	'Historical Fiction',	'adalah sebuah genre cerita yang memiliki setting di dunia sesungguhnya, namun di masa yang berbeda. biasanya di masa lampau. menulis genre ini tidak boleh sembarangan kecuali penulis memiliki teori lain mengenai fakta yang telah terjadi.',	'2019-01-29 08:01:35',	'2019-01-29 08:01:35'),
('b2467aac59154d0d817950304c98dde1',	'Adventure',	'Adventure adalah sebuah genre bertema petualangan. Sebuah petualangan tidak harus mengembara ke tempat yang jauh, tapi bisa memiliki sebuah peristiwa yang mampu mengubah sesuatu, baik itu diri sendiri atau orang lain.',	'2019-01-29 08:02:06',	'2019-01-29 08:02:06'),
('b3cc679dc6444a378d2fd1403af55206',	'Romance',	'adalah genre yang sebenarnya mengangkat kehidupan sehari-hari. di dalam romance ada unsur keseharian yang belakangan ini disebut slice of life.',	'2019-01-29 08:00:02',	'2019-01-29 08:00:02'),
('b807a89d349f45f19186be646233869a',	'Sci-fi',	'Sci-fi adalah science (sains, iptek) dan fiction (fiksi). dalam sci-fi, dunia yang terbangun adalah dunia yang memiliki konsep teknologi dan sains ilmiah yang belum tentu ada di dunia nyata',	'2019-01-29 07:58:42',	'2019-01-29 07:58:42');

DROP TABLE IF EXISTS `jenis_buku`;
CREATE TABLE `jenis_buku` (
  `id` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_buku` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keterangan` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `jenis_buku` (`id`, `jenis_buku`, `keterangan`, `created_at`, `updated_at`) VALUES
('10b09290c07a41f492b30ceaadee8765',	'Panduan',	'Panduan adalah buku yang berisi panduan atau tata cara mengenai hal-hal tertentu.',	'2019-01-29 07:54:48',	'2019-01-29 07:54:48'),
('460490bc5d7d4f9fa108da8aa98e6151',	'Biografi',	'Biografi merupakan buku yang berisi kisah hidup seseorang. Biasanya biografi dibuat oleh orang-orang populer atau orang yang berpengaruh.',	'2019-01-29 07:52:08',	'2019-01-29 07:52:08'),
('52a0e0ca179b40f1b2fdf1a9a6eb3d82',	'Karya ilmiah',	'Karya ilmiah adalah buku yang berupa laporan dari suatu penelitian atau percobaan dan sebagainya.',	'2019-01-29 07:53:53',	'2019-01-29 07:53:53'),
('5e70c4a13cf147e1baaa824344da53e9',	'Novel',	'Novel merupakan karya fiksi berupa cerita yang saling berkaitan dalam buku tersebut.',	'2019-01-29 07:51:25',	'2019-01-29 07:51:25'),
('9426a29b2cb74d8ab3a1896053d71707',	'Kamus',	'Kamus adalah buku acuan untuk mengalihkan dari bahasa yang satu ke bahasa yang lainnya. Atau untuk memberikan penjelasan dari kata-kata dalam suatu bahasa.',	'2019-01-29 07:54:05',	'2019-01-29 07:54:05'),
('a0f562c5f86641ec9665c06e80242d60',	'Komik',	'Komik adalah suatu buku yang berisi gambar-gambar tidak bergerak yang diisi dialog atau kata-kata di dalamnya untuk menceritakan cerita yang dimaksud.',	'2019-01-29 07:51:41',	'2019-01-29 07:51:41'),
('a2f720f3791d4782ba529007b8a1c0dd',	'Catatan hairan',	'Catatan harian adalah buku yang dibuat dari catatan harian atau jurnal atau diary yang ditulis.',	'2019-01-29 07:53:40',	'2019-01-29 07:53:40'),
('c6b89f6c28f44f85b9538fe347d66190',	'Novelet',	'Novelet merupakan cerita yang terlalu pendek untuk disebut Novel, namun juga terlalu panjang untuk disebut Cerpen. Biansanya berkisar antara 40-50 halaman.',	'2019-01-29 07:52:40',	'2019-01-29 07:52:40'),
('db1a3da74b2948a08625e252bcd56fdc',	'Dongeng',	'Dongeng merupakan buku yang berisi kisah fiktif yang berasal dari khayalan dan imajinasi. Biasanya dongeng adalah sesuatu yang mustahil dalam dunia nyata.',	'2019-01-29 07:52:25',	'2019-01-29 07:52:25'),
('f0fd39a5c2a54b1fb2c197ac131240a8',	'Antologi',	'Buku antologi terdiri dari kumpulan-kumpulan tulisan yang tidak berkaitan. Namun masih satu jenis tulisan dan biasanya juga satu tema.',	'2019-01-29 07:51:55',	'2019-01-29 07:51:55');

DROP TABLE IF EXISTS `jenis_covers`;
CREATE TABLE `jenis_covers` (
  `id` varchar(35) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_cover` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ket` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `jenis_covers` (`id`, `jenis_cover`, `ket`, `created_at`, `updated_at`) VALUES
('55ca0fe122d34e0faeee5fd5d70c9cec',	'Simple',	'Simple itu cover yang gambarnya berupa fotografi. Biasanya, desainnya juga sederhana',	'2019-01-29 04:09:38',	'2019-01-29 04:09:38'),
('5978d0eeb8534e489e1e9787b949421b',	'Manipulation',	'Cover manipulasi adalah cover yang berupa foto atau animasi yang ditempel dibelakang background yang berbeda. Biasanya dipakai buat cerita fanfiction. Jenis cover yang satu ini cocok untuk semua genre termasuk horror.',	'2019-01-29 04:10:25',	'2019-01-29 04:10:25'),
('62d97775e8c34a7794fa2de34e391e50',	'Minimalist',	'Biasanya, gambar yang digunakan itu berupa ilustrasi atau vector. Cover ini bisa digunakan di semua genre kecuali horror.',	'2019-01-29 04:09:52',	'2019-01-29 04:09:52');

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(9,	'2014_10_12_000000_create_users_table',	1),
(10,	'2014_10_12_100000_create_password_resets_table',	1),
(11,	'2018_01_28_164211_create_genres_table',	1),
(12,	'2019_01_24_044628_create_jenis_bukus_table',	1),
(17,	'2019_01_26_110338_create_bukus_table',	2),
(22,	'2019_01_28_144508_create_text_bahasas_table',	3),
(23,	'2019_01_29_104521_create_jenis_covers_table',	4);

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


DROP TABLE IF EXISTS `text_bahasas`;
CREATE TABLE `text_bahasas` (
  `id` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bahasa` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `negara` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `iso` varchar(2) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'https://en.wikipedia.org/wiki/List_of_ISO_639-1_codes',
  `ket` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `text_bahasas` (`id`, `bahasa`, `negara`, `iso`, `ket`, `created_at`, `updated_at`) VALUES
('8333958c03d747019c8b2962c831f8dc',	'English',	'US',	'en',	'Inggris US',	'2019-01-28 08:53:15',	'2019-01-28 08:53:15'),
('8cf2aceda64b44d98ae3ce7e3b0d9b12',	'Indonesia',	'Indonesia',	'id',	NULL,	'2019-01-28 08:54:59',	'2019-01-28 08:54:59');

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


-- 2019-01-30 02:50:39
