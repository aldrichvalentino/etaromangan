-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: mysql
-- Generation Time: Apr 17, 2018 at 03:38 PM
-- Server version: 5.7.21
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `etaromangan`
--

-- --------------------------------------------------------

--
-- Table structure for table `foods`
--

CREATE TABLE `foods` (
  `id` int(10) UNSIGNED NOT NULL,
  `restaurant_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(8) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` enum('halal','nonhalal') COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `foods`
--

INSERT INTO `foods` (`id`, `restaurant_id`, `name`, `price`, `description`, `type`, `image`, `created_at`, `updated_at`) VALUES
(1, 1, 'LONTONG BIASA', '10000', 'kalo kau mau makan kek mana rasa lontong medan ? Boleh coba yang satu ini lah wak. kuah santannya itu loh.   . Sedap lah pokoknya', 'halal', 'default_food.png', '2018-04-11 11:15:46', '2018-04-11 11:15:46'),
(2, 1, 'LONTONG + TELOR', '13000', 'nah kalo yang ini, ada tambahannya yaitu telor wak. Makin sedap lah pokoknya', 'halal', 'default_food.png', '2018-04-11 11:15:46', '2018-04-11 11:15:46'),
(3, 1, 'LONTONG + TELOR + MIE GOMAK', '15000', 'udah ada lontong, ada telor, tambah lagi ada mie gomaknya wak. Mie gomak itu enak kali wak. Ini macam pasta ala Medan gitu', 'halal', 'default_food.png', '2018-04-11 11:15:46', '2018-04-11 11:15:46'),
(4, 1, 'LONTONG + PERKEDEL', '14000', 'kalo ini ada tambahannya perkedel yang bikin semakin sedap wak.', 'halal', 'default_food.png', '2018-04-11 11:15:46', '2018-04-11 11:15:46'),
(5, 1, 'LONTONG + TERI MEDAN', '16000', 'Yang rindu dengan teri medan ?? Bisa kali mesan ini wak. Udah makan lontong, ada teri medannya lagi. Apa ga sedap kali kau rasa ??', 'halal', 'default_food.png', '2018-04-11 11:15:46', '2018-04-11 11:15:46'),
(6, 1, 'LONTONG + RENDANG', '21000', 'Lontong tambah rendang. Walah walah, kenyang kali lah perut kita dibikin ini. yuk, langsung pesan ajalah wak.', 'halal', 'default_food.png', '2018-04-11 11:15:46', '2018-04-11 11:15:46'),
(7, 1, 'LONTONG RENDANG + TELOR', '23000', 'Kalo yang satu ini, ada lontong rendang tambah telor lagi. Komplit kali lah makanan itu sama kita', 'halal', 'default_food.png', '2018-04-11 11:15:46', '2018-04-11 11:15:46'),
(8, 1, 'SOTO MEDAN', '17000', 'SOTO MEDAN. Aduh wak, janganlah kau pernah tolak menu yang satu ini. Sumpah wak, enak kali', 'halal', 'default_food.png', '2018-04-11 11:15:46', '2018-04-11 11:15:46'),
(9, 1, 'NASI GURIH BIASA', '10000', 'yang suka makan nasi, bisalah makan nasi tambah ada gurihnya. hehehe. Jadi, nasi gurih namanya.', 'halal', 'default_food.png', '2018-04-11 11:15:46', '2018-04-11 11:15:46'),
(10, 1, 'NASI GURIH + TELOR', '13000', 'Kau makan nasi gurih makin enak lah kalo ada telor nya sikit.', 'halal', 'default_food.png', '2018-04-11 11:15:46', '2018-04-11 11:15:46'),
(11, 1, 'NASI GURIH + RENDANG', '21000', 'Kek gini lah wak. Nasi gurih tambah rendang lagi. oalah sedapnya', 'halal', 'default_food.png', '2018-04-11 11:15:46', '2018-04-11 11:15:46'),
(12, 1, 'NASI GURIH RENDANG + TELOR', '23000', 'Nasi gurih rendang tambah telor paling paling lah menurut ku wak. Cocok kali lah ini samamu', 'halal', 'default_food.png', '2018-04-11 11:15:46', '2018-04-11 11:15:46'),
(13, 1, 'NASI GURIH DENDENG PEDAS', '24000', 'Buat kau yang suka makan pedas ? Cocoklah lah ini kau pesan.', 'halal', 'default_food.png', '2018-04-11 11:15:46', '2018-04-11 11:15:46'),
(14, 1, 'MIE GOMAK', '8000', 'Mie Gomak ini wak, macam pasta ituloh. Apalagi sering dikenal dengan nama pasta ala Medan. Mantap kan wa ??', 'halal', 'default_food.png', '2018-04-11 11:15:46', '2018-04-11 11:15:46'),
(15, 1, 'INDOMIE REBUS ALA MEDAN', '9000', 'Heh gini la kan wak. Ada ada aja memang Medan ini. Indomie pun ada ala Medannya. Kalau kau coba khas khas macam ini wak, cocok kali lah kau makan ini, pesan lah wak.', 'halal', 'default_food.png', '2018-04-11 11:15:46', '2018-04-11 11:15:46'),
(16, 1, 'INDOMIE GORENG ALA MEDAN', '10000', 'Mau indomie kuah, mau indomie goreng, wuaah, ada aja ala Medannya. Hahaha. Bolehlah kau coba ini wak.', 'halal', 'default_food.png', '2018-04-11 11:15:46', '2018-04-11 11:15:46'),
(17, 1, 'SOP MEDAN', '36000', 'Buat kau yang suka nasinya bekuah, nah cocok lah sop Medan ini ko bikin kuah nasimu. Pasti mantap kali', 'halal', 'default_food.png', '2018-04-11 11:15:46', '2018-04-11 11:15:46'),
(18, 1, 'SOP BUNTUT', '36000', 'Kau suka bekuah ? suka buntut juga ? Saranku beli ini aja sih wak. Pasti enak kali', 'halal', 'default_food.png', '2018-04-11 11:15:46', '2018-04-11 11:15:46'),
(19, 1, 'LUPIS', '3000', 'Buat kau yang mau jajanan ala ala Medan ? Kenalkan, namanya Lupis. Macam nama orang aja yekan ?? Rasanya wak ? Tak usah kau tanya. Mantap kali lah pokoknya', 'halal', 'default_food.png', '2018-04-11 11:15:46', '2018-04-11 11:15:46'),
(20, 1, 'BAKSO TAHU', '3000', 'Gorengan ala Medan pun ada wak. Hehehe. Bolehlah kau coba ini wak. Mantap kali', 'halal', 'default_food.png', '2018-04-11 11:15:46', '2018-04-11 11:15:46'),
(21, 1, 'PISANG GORENG', '3000', 'Kau mau merasakan gorengan pisang goreng Medan ? Aduh wak, gausahal. Soalnya enak kali hahhaha', 'halal', 'default_food.png', '2018-04-11 11:15:46', '2018-04-11 11:15:46'),
(22, 1, 'BAKWAN', '2000', 'Kalau di jawa, nama makanan ini adalah bala-bala. Kalo di Medan wak, namanya Bakwan. Hohoy, marilah kita coba ini wak.', 'halal', 'default_food.png', '2018-04-11 11:15:46', '2018-04-11 11:15:46'),
(23, 1, 'DURIAN CUP', '23000', 'Kau pernah dengar Ucok Durian ? Nah, kalo di Bandung ini namanya Durian Cup. Enak lah pokoknya wak.', 'halal', 'default_food.png', '2018-04-11 11:15:46', '2018-04-11 11:15:46'),
(24, 1, 'LEMANG/PERBATANG', '35000', 'Kurasa disitu sampe kau di Medan pasti banyak kali yang jual lemang wak, soalnya enak kali. Lemang ini dibuat pake beras pulut terus dibakar di bambu. Ko bayangkan sendirilah rasanya kek mana.', 'halal', 'default_food.png', '2018-04-11 11:15:46', '2018-04-11 11:15:46'),
(25, 1, 'MANDI (MANIS DINGIN)', '4000', 'Inilah yekan, Medan ini suka kali bikin singakatan nama. Macam minuman yang satu inilah, Mandi (Manis Dingin). Kalau kau mau coba, bolehlah wak, enak kali loh, Segar di kerongkongan. Asek', 'halal', 'default_food.png', '2018-04-11 11:15:46', '2018-04-11 11:15:46'),
(26, 1, 'MAPAN (MANIS PANAS)', '4000', 'Mapan (Manis Panas) Tadi ada Mandi, sekarang ada Mapan. Buat kau yang mau mapan yekan, bolehlah kau minum sikit mapan ini', 'halal', 'default_food.png', '2018-04-11 11:15:46', '2018-04-11 11:15:46'),
(27, 1, 'SIRUP MARQUISA', '5000', 'kalau di Jawa, minuman ini dibilang lah jus orange, tapi kalo di Medan disebutnya sirup marquisa. Welleh welleh, boleh lah kau cok sikit rasa kek mana jus ala Medan ini', 'halal', 'default_food.png', '2018-04-11 11:15:46', '2018-04-11 11:15:46'),
(28, 1, 'SIRUP KURNIA', '5000', 'Ayoklah wak, kita coba dulu sirup kurnia ala Medan ini. Siapa tau kau suka yekan ? Harganya ga pala mahal lagi. Cuman gocengnya wak.', 'halal', 'default_food.png', '2018-04-11 11:15:46', '2018-04-11 11:15:46'),
(29, 1, 'SODA MARKISA', '10000', 'Kau pernah minum sirup orange make soda ?? Bahh, kusarankan boleh lah kau coba ini wak.', 'halal', 'default_food.png', '2018-04-11 11:15:46', '2018-04-11 11:15:46'),
(30, 1, 'CAP BADAK', '12000', 'Jadi kawan, birnya Medan itu adalah Cap Badak. Nah, buat kau yang mau nyoba bir ala Medan ini cocok kali lah kau pesan ini wak. Apalagi buat kau yang penikmat bir yekan.', 'halal', 'default_food.png', '2018-04-11 11:15:46', '2018-04-11 11:15:46'),
(31, 1, 'TEH SUSU', '7000', 'Medan ini wak kreatif kali memang wak. Hahahaha. Kau tengoklah, teh dibikin susu. Oalah, kau bayangkan rasanya ga cukup wak. Langsung kau pesan aja biar ko rasa kek mana nikmatnya minum ini.', 'halal', 'default_food.png', '2018-04-11 11:15:46', '2018-04-11 11:15:46'),
(32, 1, 'TEH TELOR', '8000', 'Teh ditambah telor ? Wah.  Gabisa aku jelaskan kek mana rasanya wak. Langsung kau pesan ajalah langsung biar kau tau sendiri.', 'halal', 'default_food.png', '2018-04-11 11:15:46', '2018-04-11 11:15:46'),
(33, 1, 'TST (TEH SUSU TELOR)', '12000', 'Minuman satu ini lawak kali wak. Teh ditambah Susu ditambah Telor lagi. Ah, langsung kau pesan aja lah wak. Biar tambah kuat dulu badan kita itu sikit', 'halal', 'default_food.png', '2018-04-11 11:15:46', '2018-04-11 11:15:46'),
(34, 1, 'KST (KOPI SUSU TELOR)', '12000', 'Inipun enak kali wak kurasa. Cocoklah bagi penikmat kopi yang mau kekmana kalo kopi dikombinasikan itu rasanya seperti apa.', 'halal', 'default_food.png', '2018-04-11 11:15:46', '2018-04-11 11:15:46'),
(35, 1, 'KOPI SIDIKALANG', '8000', 'Jadi wak, di Sumatera Utara itu ada nama daerah Sidikalang. Nah kopi dari sana sedap kali, sampe sampe dibikin lah namanya kopi Sidikalang. Jadi, buat kau yang mau nyoba kopi khas Medan kali ini, boleh lah kau pesan satu.', 'halal', 'default_food.png', '2018-04-11 11:15:46', '2018-04-11 11:15:46'),
(36, 1, 'KOPI MANDAILING', '10000', 'Sama kek kopi Sidikalang, ada juga nama daerah di Sumut ini Mandailing. Kopi dari sana juga sedap. Tapi kalo aku lebih suka Sidikalang wak. Ya,, kau tentukan lah pilihanmu mau yang mana.', 'halal', 'default_food.png', '2018-04-11 11:15:46', '2018-04-11 11:15:46'),
(37, 1, 'KOPI SUSU SIDIKALANG', '12000', 'Kopi Sidikalang tadi, ditambah susu. Waduhh, enak kali lah', 'halal', 'default_food.png', '2018-04-11 11:15:46', '2018-04-11 11:15:46'),
(38, 1, 'SODA GEMBIRA', '10000', 'Kau penyuka soda ? Bolehlah kau coba soda ala Medan ini. namanya Soda Gembira. semoga lah setelah ko minum ini makin gembira hidupmu.', 'halal', 'default_food.png', '2018-04-11 11:15:46', '2018-04-11 11:15:46'),
(39, 3, 'Babi Panggang', '32000', 'Babi Panggang ini adalah salah satu menu andalan orang Medan khususnya orang Batak karena rasanya yang sangat enak sekali', 'nonhalal', 'dde9f7302e3d412b4c5ad2459d656c65.jpg', '2018-04-11 11:59:21', '2018-04-11 11:59:21'),
(40, 3, 'Saksang', '35000', 'Saksang ini adalah menu makanan andalan orang Batak yang enak kali wak.', 'nonhalal', '05213b6da133572dba55de4cd4743ba7.png', '2018-04-11 12:08:26', '2018-04-11 12:08:26'),
(41, 3, 'Sop', '30000', 'Buat kuah nasimu, cocok kali lah ini.', 'nonhalal', 'c8cc02200ae1b900d65c4872c542f37f.jpeg', '2018-04-11 12:13:48', '2018-04-11 12:13:48'),
(42, 3, 'Kidu-kidu', '10000', 'Jadi kidu-kidu adalah perut babi yang diisi dengan sayuran. rasanya ? jangan tanya wak. enak sekali lah pokoknya. Biasanya kidu-kidu itu dibuat sama orang karo.', 'nonhalal', 'b30acc9f822580ab3c78815e8cc2f258.jpg', '2018-04-11 12:15:42', '2018-04-11 12:15:42');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(31, '2014_10_12_000000_create_users_table', 1),
(32, '2014_10_12_100000_create_password_resets_table', 1),
(33, '2016_06_01_000001_create_oauth_auth_codes_table', 1),
(34, '2016_06_01_000002_create_oauth_access_tokens_table', 1),
(35, '2016_06_01_000003_create_oauth_refresh_tokens_table', 1),
(36, '2016_06_01_000004_create_oauth_clients_table', 1),
(37, '2016_06_01_000005_create_oauth_personal_access_clients_table', 1),
(38, '2018_03_08_154412_create_restaurants_table', 1),
(39, '2018_03_08_155416_create_foods_table', 1),
(40, '2018_03_17_095417_create_orders_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `oauth_access_tokens`
--

CREATE TABLE `oauth_access_tokens` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `client_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_auth_codes`
--

CREATE TABLE `oauth_auth_codes` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `client_id` int(11) NOT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_clients`
--

CREATE TABLE `oauth_clients` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `secret` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `redirect` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `personal_access_client` tinyint(1) NOT NULL,
  `password_client` tinyint(1) NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_personal_access_clients`
--

CREATE TABLE `oauth_personal_access_clients` (
  `id` int(10) UNSIGNED NOT NULL,
  `client_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_refresh_tokens`
--

CREATE TABLE `oauth_refresh_tokens` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `access_token_id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `food_id` int(10) UNSIGNED NOT NULL,
  `restaurant_id` int(10) UNSIGNED NOT NULL,
  `quantity` int(11) NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `total` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `phone` varchar(16) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `food_id`, `restaurant_id`, `quantity`, `status`, `address`, `total`, `created_at`, `updated_at`, `phone`) VALUES
(1, 2, 20, 1, 1, 'done', 'Jalan Ganesha no 10', '3000', '2018-04-11 11:22:12', '2018-04-11 11:22:12', NULL),
(2, 5, 4, 1, 1, 'processed', 'Asrama Kidang Pananjung', '14000', '2018-04-11 14:02:13', '2018-04-11 14:02:13', NULL),
(3, 7, 7, 1, 1, 'processed', 'Jalan Tubagus Ismail II No. 1', '23000', '2018-04-11 14:05:44', '2018-04-11 14:05:44', NULL),
(4, 12, 39, 3, 1, 'done', 'jalan cisitu baru', '30000', '2018-04-12 02:31:08', '2018-04-12 02:31:08', NULL),
(5, 16, 42, 3, 2, 'done', 'Jalan Ciumbeuleuit gg Hj Durachman', '16000', '2018-04-12 02:38:26', '2018-04-12 02:38:26', NULL),
(6, 15, 20, 1, 1, 'processed', 'Jalan Pelesiran Gang Aspali Kosan pak nana', '3000', '2018-04-12 02:38:52', '2018-04-12 02:38:52', NULL),
(7, 19, 20, 1, 1, 'processed', 'Jalan Ganesha No 10', '3000', '2018-04-12 02:39:05', '2018-04-12 02:39:05', NULL),
(8, 19, 39, 3, 1, 'done', 'Jalan Sangkuriang no 2 Dago', '30000', '2018-04-12 02:40:45', '2018-04-12 02:40:45', NULL),
(9, 18, 14, 1, 1, 'processed', 'Jalan Ciumbuleuit no 46f', '8000', '2018-04-12 02:40:50', '2018-04-12 02:40:50', NULL),
(10, 19, 36, 1, 1, 'processed', 'Jalan Plesiran 34/75', '10000', '2018-04-12 02:41:31', '2018-04-12 02:41:31', NULL),
(11, 19, 40, 3, 1, 'done', 'Jalan Dago 172A Bandung', '30000', '2018-04-12 02:42:16', '2018-04-12 02:42:16', NULL),
(12, 19, 23, 1, 3, 'processed', 'Jalan Banda no 1 Bandung', '69000', '2018-04-12 02:44:40', '2018-04-12 02:44:40', NULL),
(13, 19, 14, 1, 1, 'processed', 'Jalan Belitung no 3 Bandung', '8000', '2018-04-12 02:45:53', '2018-04-12 02:45:53', NULL),
(14, 19, 11, 1, 1, 'processed', 'Jalan Sulanjana no 3 Bandung', '21000', '2018-04-12 02:47:10', '2018-04-12 02:47:10', NULL),
(15, 19, 8, 1, 1, 'processed', 'Jalan Tamansari 20 Bandung', '17000', '2018-04-12 02:48:06', '2018-04-12 02:48:06', NULL),
(16, 21, 39, 3, 3, 'done', 'Jl. Sangkuriang No.4, Dago, Coblong, Kota Bandung, Jawa Barat 40135', '90000', '2018-04-12 02:48:26', '2018-04-12 02:48:26', NULL),
(17, 19, 19, 1, 2, 'processed', 'Jalan Dago 172A Bandung', '6000', '2018-04-12 02:48:52', '2018-04-12 02:48:52', NULL),
(18, 19, 34, 1, 1, 'processed', 'Jalan Sangkuriang no 2 Bandung', '12000', '2018-04-12 02:49:35', '2018-04-12 02:49:35', NULL),
(19, 27, 20, 1, 5, 'processed', 'Jl. Cisitu baru no. 2', '15000', '2018-04-12 02:50:05', '2018-04-12 02:50:05', NULL),
(20, 27, 20, 1, 5, 'processed', 'Jl. Cisitu baru no. 2', '15000', '2018-04-12 02:50:06', '2018-04-12 02:50:06', NULL),
(21, 24, 32, 1, 1, 'processed', 'Jalan ganesha no 10', '8000', '2018-04-12 02:52:15', '2018-04-12 02:52:15', NULL),
(22, 24, 32, 1, 1, 'processed', 'Jalan ganesha no 10', '8000', '2018-04-12 02:52:18', '2018-04-12 02:52:18', NULL),
(23, 30, 21, 1, 1, 'processed', 'Pondok orange lebak siliwangi', '3000', '2018-04-12 02:58:37', '2018-04-12 02:58:37', NULL),
(24, 33, 39, 3, 1, 'done', 'Jalan cisitu no 45b rt006/011', '30000', '2018-04-12 02:59:48', '2018-04-12 02:59:48', NULL),
(25, 37, 39, 3, 1, 'done', 'SBM ITB', '30000', '2018-04-12 03:29:20', '2018-04-12 03:29:20', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `restaurants`
--

CREATE TABLE `restaurants` (
  `id` int(10) UNSIGNED NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `restaurants`
--

INSERT INTO `restaurants` (`id`, `phone`, `address`, `created_at`, `updated_at`) VALUES
(1, '087783927422', 'JALAN DIPATI UKUR NO 42/60, LEBAK GEDE, COBLONG, BANDUNG', '2018-04-11 11:15:46', '2018-04-11 11:15:46'),
(3, '081573454084', 'Jl. Haji Hassan No. 19A, Dipatiukur, Bandung', '2018-04-11 11:51:17', '2018-04-11 11:51:17');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` enum('admin','restaurant','user') COLLATE utf8mb4_unicode_ci DEFAULT 'user',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `image`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'WARUNG MAKAN KA’ ZAHRA', 'elisabeth_sirumapea@sbm-itb.ac.id', '$2y$10$2dQuC9AMTLre4n3PEpk5rOU40ualT7PfUFz5Oz4G5RG1knOqnM5Qi', 'default.png', 'restaurant', 'iuM54uK7Rcx5KQL1VFkRZVEdMdXPoempJkBSkXONiPbd1IE1V3LiDm8eqPhd', '2018-04-11 11:15:46', '2018-04-11 11:15:46'),
(2, 'Aldrich Halim', 'aldrich.vh97@gmail.com', '$2y$10$KqC2z59YUnRujSmRlcwWRufCAnl.agLjyayCQW4HGfxB2vwMR/T9W', 'default.png', 'admin', 'vwfB3nNlgCXsNYdJaK8tZQxyDXDmCADgHSI4reBCarv9MaUQOpjQWnnkeGTH', '2018-04-11 11:21:55', '2018-04-11 11:21:55'),
(3, 'Lapo Siagian', 'sirumapea.elisabeth@gmail.com', '$2y$10$Dz29lZRjga7yHM9zLJUcU.9heV.PrOsIiT6XYBJK3vSiU6.5sU.yu', 'default.png', 'restaurant', 'S03Ykbud3MMSGHtiXRfhZQeu6r6b6CoQvvLhJ6Mz0VinglGDKexavcWC9m8G', '2018-04-11 11:51:17', '2018-04-11 11:51:17'),
(4, 'Windi Dian Tri Astuti', 'windidian951@gmail.com', '$2y$10$ahhiobkj10IhjD.pFSabN.rfC11Y7vNSyO2ylCmUxrnkd8kf26T7S', 'default.png', 'user', NULL, '2018-04-11 13:06:13', '2018-04-11 13:06:13'),
(5, 'Gorank', 'gorankrppurba@gmail.com', '$2y$10$nJQSYwsPQKBwwTCBrSWLzeukxrvQsP9jQTb9eL2xq2d87tGhR/rvW', 'default.png', 'user', NULL, '2018-04-11 13:20:31', '2018-04-11 13:20:31'),
(6, 'Sehat Simon Sianturi', 'sehat.sianturi84@gmail.com', '$2y$10$jLaKVMdKEDyA.mqwAUyAMOOSw7b.E7cTo096uwDwqD2Szu9TK0rdW', 'default.png', 'user', NULL, '2018-04-11 13:24:29', '2018-04-11 13:24:29'),
(7, 'Yolanda Sagala', 'yolandavaniabs@gmail.com', '$2y$10$VV4lUe6abt53PxPZ61jjVOqnk8qXJREylzGMDjZunUUJDe1l04ywS', 'default.png', 'user', NULL, '2018-04-11 14:04:14', '2018-04-11 14:04:14'),
(8, 'Hanna Maria Scriftura Sinaga', 'scriftura@yahoo.com', '$2y$10$FZ/bCOrbmKvFcJQLq35vtuWvwdlGVSPcvgoT08DT.lbMMKJnWgEbO', 'default.png', 'user', NULL, '2018-04-12 01:20:18', '2018-04-12 01:20:18'),
(9, 'Debs', 'krisdeans98@gmail.com', '$2y$10$DmIjSRxsFKc2ex0wMLSiR.2CD9PXcotAtMet3GYZuvz5k16cnwdpG', 'default.png', 'user', NULL, '2018-04-12 02:12:00', '2018-04-12 02:12:00'),
(10, 'cantika debora napitupulu', 'cantikanapitupulu15@yahoo.com', '$2y$10$yiX3/pUawuWw3.quMq3lxO61uB7IDUdQMEKV0sOgCUOY35GXPGbTm', 'default.png', 'user', NULL, '2018-04-12 02:16:01', '2018-04-12 02:16:01'),
(11, 'Kevin Sinaga', 'uryu.ishida43@gmail.com', '$2y$10$fSIv9ptj5Is3U9CxHVvTAOu93dkps1W1H3.Q7MHMex5I1Vti7IGF.', 'default.png', 'user', NULL, '2018-04-12 02:26:38', '2018-04-12 02:26:38'),
(12, 'karen', 'karennababan@ymail.com', '$2y$10$IZMccIJ6NNmKURdn2QY95eL0OhaZmXSHFq1F6Xrbi28WVNvDyI1Zu', 'default.png', 'user', 'rYClmfpS9fyqzJh7cVMKrFxPNzoFBglfwH5a2GD4wMa9UuP7siVIZPKkiLYx', '2018-04-12 02:28:30', '2018-04-12 02:28:30'),
(13, 'Elstri', 'Elstri.sihotang24@gmail.com', '$2y$10$0vjdeNBSD16OjaKXS06emOcW3uj4kZASgwN2J/TWkMm/VsSCN7H7W', 'default.png', 'user', NULL, '2018-04-12 02:32:09', '2018-04-12 02:32:09'),
(14, 'Tommy Nainggolan', 'cristigomil@gmail.com', '$2y$10$2aQn.GlzyXx5MMLctIftNuzPR3DdFmpvAgtMpt4hEIZA3ZBEbf7zq', 'default.png', 'user', NULL, '2018-04-12 02:32:24', '2018-04-12 02:32:24'),
(15, 'Ivando Hutauruk', 'ivandohutauruk7@gmail.com', '$2y$10$v7xHau6MLv45QqlCMw2B/e0XKKFbsf1heXpoTsiO8RSK/RDqfL89a', 'default.png', 'user', NULL, '2018-04-12 02:36:09', '2018-04-12 02:36:09'),
(16, 'Maurit Samosir', 'mauritsamosir@gmail.com', '$2y$10$6wrpiHqYBH64fEnKQ9Mbq.aFKbB/VdVbRYzLNB7eneDJtpDk9Q2H2', 'default.png', 'user', NULL, '2018-04-12 02:36:52', '2018-04-12 02:36:52'),
(17, 'Adib Aulia Syamsu', 'adibauliasy@gmail.com', '$2y$10$KHtoM9nn10hsZhg.1hTjdOaRQ4pmti3BGA1K6YFWTegrURhmSmape', 'default.png', 'user', 'sUdwgTcnvCpiL2uG6Sv0MFmV4iPE4gVlRqPgkSUNXQAczmJ7laKyp5XoSjPM', '2018-04-12 02:37:12', '2018-04-12 02:37:12'),
(18, 'Gideon Mamasu P Panjaitan', 'gideonpanjaitan22@gmail.com', '$2y$10$uZdCr8dsbkyz1ik.qMfqXur/jyKdK06hVy64H6/IIi.GZAfTd.wma', 'default.png', 'user', NULL, '2018-04-12 02:37:33', '2018-04-12 02:37:33'),
(19, 'Timotius Hutapea', 'kelinci7352@live.com', '$2y$10$YJ4PgNDOB5vxSMwWUsu2PeaqZfAltlB62rGpfuGRKN.dk7rfcdrCi', 'default.png', 'user', 'bs3Xpdu1EJa6MIXQasarIJQGu4PNiu9WJrmg5N4tpyMYFMUMRCcKvZ7MkBNV', '2018-04-12 02:38:02', '2018-04-12 02:38:02'),
(20, 'Andre Pratama Situmorang', 'andrepratama110899@gmail.com', '$2y$10$wvIS8UskWA5103SSBXpsP.vuLKnAsyj5UVaSu17jBX5YRIJkLcQ5O', 'default.png', 'user', NULL, '2018-04-12 02:43:09', '2018-04-12 02:43:09'),
(21, 'Gregorius', 'ruzumaki97@gmail.com', '$2y$10$3fCgMFi0lCO2SwVWf7bOD.6wLdDaQq.ZgqwBbCF.D5kQoE5Eu5T5a', 'default.png', 'user', NULL, '2018-04-12 02:44:36', '2018-04-12 02:44:36'),
(22, 'Meishelle Andriani Young', 'meishellea@gmail.com', '$2y$10$MVuFnhLZ5a8p4bY09oqwmOQPEN3t4cFuJG3QKSMYJBIY4aQHkPGkO', 'default.png', 'user', NULL, '2018-04-12 02:44:42', '2018-04-12 02:44:42'),
(23, 'Azka Ulfatunnisa', 'azka.ulfatunnisa@sbm-itb.ac.id', '$2y$10$UU97DZ0oxoyYkL4zioyTfeJwbP.CA4gKt8XLUAwCRQO9Euzc3rm7G', 'default.png', 'user', NULL, '2018-04-12 02:47:00', '2018-04-12 02:47:00'),
(24, 'Sarah Sophia Romdoni', 'arasophiaromdoni@gmail.com', '$2y$10$YpDt8VkVHamXP6WUwt55F.yP1MCtTBNW0kNm7R6T0lvfdskoavzCu', 'default.png', 'user', NULL, '2018-04-12 02:47:13', '2018-04-12 02:47:13'),
(25, 'Anja', 'bukanchangminasli@gmail.com', '$2y$10$zb9OyWLjkWDLJ7v6z7MIZeb4Bm5KmwQrh.Di8S0hYqKEfhIID6oQi', 'default.png', 'user', NULL, '2018-04-12 02:47:55', '2018-04-12 02:47:55'),
(26, 'Venna Fushila', 'vennafushila@gmail.com', '$2y$10$buFNzq47nQzys83ln97pluvaGQGeIStsrU7wYpyqvRW.EUYfDBfmu', 'default.png', 'user', NULL, '2018-04-12 02:48:40', '2018-04-12 02:48:40'),
(27, 'Adella izdhiharnada', 'Adellaizdhiharnada@gmail.com', '$2y$10$oxhU8wNn0sfs6BftI4vAc.xR2zdEjX16MKUiJMO3iEFXRyZSJNEsm', 'default.png', 'user', '11mtMfD9lHKDA5cPMYRLjhtQ44Al3CnKpaWj3qTGY2344Hhua7bwWKhQI3fI', '2018-04-12 02:48:50', '2018-04-12 02:48:50'),
(28, 'Samuel Yustinus', 'yus.barani09@gmail.com', '$2y$10$qDe2kWyWKzKPXHocMcd4W.JXkb7ebJEfAGKUZAx1sfa4qiWjE0yyS', 'default.png', 'user', NULL, '2018-04-12 02:49:10', '2018-04-12 02:49:10'),
(29, 'Mega Sigalingging', 'mega.sigalingging25@gmail.com', '$2y$10$jYyfwO2ZZgf52O8BcCaI2unbwEfg2RiO52ZbHP9ipysK6XU0.Mpqy', 'default.png', 'user', NULL, '2018-04-12 02:55:54', '2018-04-12 02:55:54'),
(30, 'Dimitria', 'dimitriasiagian@gmail.com', '$2y$10$GkXqvMr855PKWjDL.Dhetu6HnJVFEyTHR66xB2v.r3ggGfbEWxxo.', 'default.png', 'user', NULL, '2018-04-12 02:56:58', '2018-04-12 02:56:58'),
(31, 'Aqmalia Shafira', 'aqmalia_shafira@sbm-itb.ac.id', '$2y$10$T2XXHhIuLFTyGODkJ.ebn.bxlhNFmyUe4i..Sk9NP8X2WcIspdv5O', 'default.png', 'user', NULL, '2018-04-12 02:57:40', '2018-04-12 02:57:40'),
(32, 'chyntia angelina', 'chyntiaagln@gmail.com', '$2y$10$Hu.YayGfAp4UIu6jfkgSQODKPaB.vYfCik0CFhEnTXPNRpVQPchIK', 'default.png', 'user', NULL, '2018-04-12 02:57:47', '2018-04-12 02:57:47'),
(33, 'Rizal Adisaputra', 'rizaladisaputra@yahoo.com', '$2y$10$qksX/AzAn8u1d7snMyJzYOTTM41s1BuwTfKDQlcQxmWp08v8pW9hS', 'default.png', 'user', NULL, '2018-04-12 02:58:14', '2018-04-12 02:58:14'),
(34, 'Dewanto Bagus K', 'dewanto_bagus@sbm-itb.ac.id', '$2y$10$0Pjhfj/LSufVbwbDnVvORuDTXRP.bbgqr.XzxS8U3LCiB6JDivInm', 'default.png', 'user', NULL, '2018-04-12 03:00:26', '2018-04-12 03:00:26'),
(35, 'Nadira Anggita', 'arbaraninadira@yahoo.co.id', '$2y$10$VbSsfREfif/hjtNtkTG4ouygbHtxXDKN.kAuJWiBe/B6FtbRZk3n2', 'default.png', 'user', NULL, '2018-04-12 03:02:21', '2018-04-12 03:02:21'),
(36, 'Mel', 'ruthamelya143@gmail.com', '$2y$10$mu.48J0bHkdUcwMPU4jMxu07KenHAGg44KdqK.FnZPJQw0mrPcqm.', 'default.png', 'user', NULL, '2018-04-12 03:05:24', '2018-04-12 03:05:24'),
(37, 'Binsar', 'obin_70@ymail.com', '$2y$10$TRAlrMIL3zoMzaA7jI1v5uY07b.zaruAZWLSNVLC6au1LVnhYyzBi', 'default.png', 'user', NULL, '2018-04-12 03:27:33', '2018-04-12 03:27:33'),
(38, 'Putra', 'togatorop.putra@gmail.com', '$2y$10$K8R.Mmq01O7ugWpiaEWCBOIkA9NhJBUFg4002U9tLlfJzDf6TuTEy', 'default.png', 'user', NULL, '2018-04-12 03:31:13', '2018-04-12 03:31:13'),
(39, 'Reihan Fahrurizal', 'ean_fs@yahoo.com', '$2y$10$.IJ1vf0B.5UCwA6bjYJcyOgdnUrZ9O6YJJpAyoQMuEAc.yPR1QeMu', 'default.png', 'user', NULL, '2018-04-12 03:57:52', '2018-04-12 03:57:52'),
(40, 'Hans Purba', 'hans.purba2000@gmail.com', '$2y$10$SpsPCJM5gacU8qcEtE2XDefDCVcsswbtt.0.aK/jYvbX5ktLYcb7u', 'default.png', 'user', NULL, '2018-04-12 05:44:52', '2018-04-12 05:44:52'),
(41, 'Della Manalu', 'delamanalu15@gmail.com', '$2y$10$SbEWG8BDHx/1vi7QMSjzu.F1Of4bi34tEhps7SzRKtTcXH3ZjVOfO', 'default.png', 'user', NULL, '2018-04-12 05:55:56', '2018-04-12 05:55:56'),
(42, 'Fitria Tri Rosanti', 'fitriatrirosanti@ymail.com', '$2y$10$xy8G65tWa1tVRmlzx6rBxeoYdP8X/.adcOEcmNbKD.KvM2YaUWfUy', 'default.png', 'user', NULL, '2018-04-12 14:04:33', '2018-04-12 14:04:33'),
(43, 'Sutan Pagaruyung Hutasuhut', 'sutanpagaruyung27@gmail.com', '$2y$10$qkn0izzT1ryJBPbvRpYwq.zwOLSZkuLTTFWZhPumOL8vgTfvJhdzK', 'default.png', 'user', NULL, '2018-04-12 14:12:48', '2018-04-12 14:12:48'),
(44, 'Leonardo', 'leonardomanullang15@gmail.com', '$2y$10$PZYx0BfChJORjiyCXCxDmOAzpMsiKRUOcjDrz4GZgSx5rRhByWHJG', 'default.png', 'user', NULL, '2018-04-12 14:15:01', '2018-04-12 14:15:01');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `foods`
--
ALTER TABLE `foods`
  ADD PRIMARY KEY (`id`,`restaurant_id`),
  ADD KEY `foods_restaurant_id_foreign` (`restaurant_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `oauth_access_tokens`
--
ALTER TABLE `oauth_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_access_tokens_user_id_index` (`user_id`);

--
-- Indexes for table `oauth_auth_codes`
--
ALTER TABLE `oauth_auth_codes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `oauth_clients`
--
ALTER TABLE `oauth_clients`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_clients_user_id_index` (`user_id`);

--
-- Indexes for table `oauth_personal_access_clients`
--
ALTER TABLE `oauth_personal_access_clients`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_personal_access_clients_client_id_index` (`client_id`);

--
-- Indexes for table `oauth_refresh_tokens`
--
ALTER TABLE `oauth_refresh_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_refresh_tokens_access_token_id_index` (`access_token_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `orders_user_id_foreign` (`user_id`),
  ADD KEY `orders_food_id_foreign` (`food_id`),
  ADD KEY `orders_restaurant_id_foreign` (`restaurant_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `restaurants`
--
ALTER TABLE `restaurants`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `oauth_clients`
--
ALTER TABLE `oauth_clients`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `oauth_personal_access_clients`
--
ALTER TABLE `oauth_personal_access_clients`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `foods`
--
ALTER TABLE `foods`
  ADD CONSTRAINT `foods_restaurant_id_foreign` FOREIGN KEY (`restaurant_id`) REFERENCES `restaurants` (`id`);

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_food_id_foreign` FOREIGN KEY (`food_id`) REFERENCES `foods` (`id`),
  ADD CONSTRAINT `orders_restaurant_id_foreign` FOREIGN KEY (`restaurant_id`) REFERENCES `restaurants` (`id`),
  ADD CONSTRAINT `orders_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `restaurants`
--
ALTER TABLE `restaurants`
  ADD CONSTRAINT `restaurants_id_foreign` FOREIGN KEY (`id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
