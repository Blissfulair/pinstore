-- phpMyAdmin SQL Dump
-- version 4.9.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 20, 2020 at 05:25 AM
-- Server version: 10.3.23-MariaDB-log-cll-lve
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `spridjhz_bank`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `username`, `email`, `image`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Herbert', 'admin', 'interherber12@gmail.com', NULL, '$2y$10$.bdimIkPYYYxmv/jIEx.SuLy5mg9qwCtljDOJIOBfZWmvi492zM/e', 'P03wFfjt7nRWTmgVr3HMEZCisvWGXKn6ScjMZC80QVlQkCJZDnF1mg7GvaA7', '2018-11-12 18:00:00', '2020-08-19 05:44:33');

-- --------------------------------------------------------

--
-- Table structure for table `advertisements`
--

CREATE TABLE `advertisements` (
  `id` int(191) NOT NULL,
  `user_id` int(191) NOT NULL DEFAULT 0,
  `image` varchar(191) DEFAULT NULL,
  `url` varchar(191) DEFAULT NULL,
  `type` varchar(191) DEFAULT NULL,
  `size` varchar(191) DEFAULT NULL,
  `script` longtext DEFAULT NULL,
  `impression` int(11) NOT NULL DEFAULT 0,
  `click` int(191) NOT NULL DEFAULT 0,
  `price` float(8,2) NOT NULL DEFAULT 0.00,
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `day` varchar(191) DEFAULT NULL,
  `ad_for` varchar(191) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` varchar(191) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `banks`
--

CREATE TABLE `banks` (
  `id` int(191) NOT NULL,
  `name` varchar(191) DEFAULT NULL,
  `p_time` varchar(191) DEFAULT NULL,
  `min_amount` float(8,2) NOT NULL DEFAULT 0.00,
  `max_amount` float(8,2) NOT NULL DEFAULT 0.00,
  `fixed_charge` float(8,2) NOT NULL DEFAULT 0.00,
  `percent_charge` float(8,2) NOT NULL DEFAULT 0.00,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  `created_at` timestamp NULL DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` int(191) NOT NULL,
  `title` varchar(191) DEFAULT NULL,
  `image` varchar(191) DEFAULT NULL,
  `description` longtext DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `branches`
--

CREATE TABLE `branches` (
  `id` int(191) NOT NULL,
  `name` varchar(191) DEFAULT NULL,
  `description` longtext DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` tinyint(1) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(191) UNSIGNED NOT NULL,
  `title` varchar(191) DEFAULT NULL,
  `name` varchar(191) DEFAULT NULL,
  `icon` varchar(191) DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `title`, `name`, `icon`, `updated_at`, `created_at`, `status`) VALUES
(1, 'Company Headquarters', 'Company Location, Country', 'fa fa-map-marker', '2019-05-12 10:29:49', '2019-01-14 12:36:29', 1),
(2, 'Get In Touch With Us', 'software@thesoftking.com', 'fa fa-envelope', '2019-02-14 11:18:08', '2019-01-14 12:40:48', 1),
(3, 'Phone number', '+88123456789', 'fa fa-phone', NULL, NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `deposits`
--

CREATE TABLE `deposits` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `gateway_id` int(11) DEFAULT NULL,
  `amount` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `charge` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `usd_amo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `btc_amo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `btc_wallet` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `trx` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `try` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `deposits`
--

INSERT INTO `deposits` (`id`, `user_id`, `gateway_id`, `amount`, `charge`, `usd_amo`, `btc_amo`, `btc_wallet`, `trx`, `status`, `try`, `created_at`, `updated_at`) VALUES
(1, 2, 103, '200', '9', '2.61', '0', '', 'K4Aha2dxe4lGHoQl', 0, 0, '2019-05-19 08:10:35', '2019-05-19 08:10:35'),
(2, 3, 101, '200', '0.1', '2.44', '0', '', 'K3ilERpSRUyY5ias', 0, 0, '2019-05-21 08:01:22', '2019-05-21 08:01:22'),
(3, 3, 106, '200', '3', '203', '0', '', 'iqNVWAhNEfLr7Fa0', 0, 0, '2019-05-21 08:16:56', '2019-05-21 08:16:56'),
(4, 3, 503, '200', '2.4', '2.53', '0', '', 'Iv2gzrKEIkbzQcgk', 0, 0, '2019-05-21 08:17:01', '2019-05-21 08:17:01'),
(5, 3, 503, '200', '2.4', '2.53', '0', '', 'XkNpzrjOEx3mi7Df', 0, 0, '2019-05-21 08:19:22', '2019-05-21 08:19:22'),
(6, 3, 513, '20', '6', '0.33', '0', '', 'KFiS38s4HUW5DFz1', 0, 0, '2019-05-21 08:20:40', '2019-05-21 08:20:40'),
(7, 3, 513, '200', '15', '2.69', '0', '', 'myzeq6DmUsvxbsZX', 0, 0, '2019-05-21 08:22:00', '2019-05-21 08:22:00'),
(8, 3, 513, '200', '15', '2.69', '0', '', 'I3lSvyk21vPSpxfK', 0, 0, '2019-05-21 08:30:43', '2019-05-21 08:30:43');

-- --------------------------------------------------------

--
-- Table structure for table `faqs`
--

CREATE TABLE `faqs` (
  `id` int(11) NOT NULL,
  `title` varchar(191) DEFAULT NULL,
  `description` longtext DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(191) NOT NULL,
  `hyip_id` int(191) DEFAULT NULL,
  `ip` varchar(191) DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `gateways`
--

CREATE TABLE `gateways` (
  `id` int(10) UNSIGNED NOT NULL,
  `main_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `minamo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `maxamo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fixed_charge` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `percent_charge` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rate` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `val1` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `val2` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `val3` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'paytm Website',
  `val4` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'paytm Industry Type',
  `val5` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'paytm Channel ID',
  `val6` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'paytm Transaction URL',
  `val7` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'paytm Transaction Status URL',
  `status` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `gateways`
--

INSERT INTO `gateways` (`id`, `main_name`, `name`, `minamo`, `maxamo`, `fixed_charge`, `percent_charge`, `rate`, `val1`, `val2`, `val3`, `val4`, `val5`, `val6`, `val7`, `status`, `created_at`, `updated_at`) VALUES
(101, 'PayPal', 'PayPal', '5', '1000', '.10', '0', '82', 'rexrifat636@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, '2019-04-22 04:53:27'),
(102, 'PerfectMoney', 'Perfect Money', '20', '20000', '2', '1', '80', 'U5376900', 'G079qn4Q7XATZBqyoCkBteGRg', NULL, NULL, NULL, NULL, NULL, 1, NULL, '2019-04-21 09:42:15'),
(103, 'Stripe', 'Credit Card', '10', '50000', '3', '3', '80', 'sk_test_aat3tzBCCXXBkS4sxY3M8A1B', 'pk_test_AU3G7doZ1sbdpJLj0NaozPBu', NULL, NULL, NULL, NULL, NULL, 1, NULL, '2019-04-25 10:59:41'),
(104, 'Skrill', 'Skrill', '10', '50000', '3', '3', '90', 'merchant@skrill', 'TheSoftKing', NULL, NULL, NULL, NULL, NULL, 1, NULL, '2019-04-21 09:42:01'),
(105, 'PayTM', 'PayTM', '1', '100', '1', '1', '1', 'PoojaE46324372286132', 'JAKMX9PVoj208dMq', 'WEB_STAGINGb', 'Retail', 'WEB', 'https://pguat.paytm.com/oltp-web/processTransaction', 'https://pguat.paytm.com/paytmchecksum/paytmCallback.jsp', 1, NULL, '2019-03-07 21:38:53'),
(106, 'Payeer', 'Payeer', '1', '100', '1', '1', '1', '627881897', 'Admin727096', NULL, NULL, NULL, NULL, NULL, 1, NULL, '2019-03-16 22:38:42'),
(107, 'PayStack', 'PayStack', '1', '100', '1', '1', '1', 'pk_test_c1775454cc81a5ad2d6a31d0b0471585d44c4dcb', 'sk_test_22327c329aa7ea76448cfe279aa1e5d583d306fa', NULL, NULL, NULL, NULL, '0.0028', 1, NULL, '2018-08-18 01:31:07'),
(108, 'VoguePay', 'VoguePay', '1', '100', '1', '1', '1', 'demo', NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, '2018-08-29 02:09:58'),
(501, 'Blockchain.info', 'BitCoin', '1', '20000', '1', '0.5', '80', '3965f52f-ec19-43af-90ed-d613dc60657eSSS', 'xpub6DREmHywjNizvs9b4hhNekcjFjvL4rshJjnrHHgtLNCSbhhx5jKFRgqdmXAecLAddEPudDZY4xoDbV1NVHSCeDp1S7NumPCNNjbxB7sGasY0000', NULL, NULL, NULL, NULL, NULL, 1, NULL, '2018-05-21 01:20:29'),
(502, 'block.io - BTC', 'BitCoin', '1', '99999', '1', '0.5', '80', '1658-8015-2e5e-9afb', '09876softk', NULL, NULL, NULL, NULL, NULL, 1, '2018-01-27 18:00:00', '2018-05-31 09:12:55'),
(503, 'block.io - LTC', 'LiteCoin', '100', '10000', '0.4', '1', '80', 'cb91-a5bc-69d7-1c27', '09876softk', NULL, NULL, NULL, NULL, NULL, 1, NULL, '2018-05-31 09:27:34'),
(504, 'block.io - DOGE', 'DogeCoin', '1', '50000', '0.51', '2.52', '80', '2daf-d165-2135-5951', '09876softk', NULL, NULL, NULL, NULL, NULL, 1, NULL, '2018-05-31 09:28:54'),
(505, 'CoinPayment - BTC', 'BitCoin', '1', '50000', '0.51', '2.52', '80', '596f0097ed9d1ab8cfed05eb59c70e9f066513dfe4df64a8fc3917d309328315', '7472928395208f70E3cE30B9e10dc882cBDD3e9967b7942AaE492106d9C7bE44', NULL, NULL, NULL, NULL, NULL, 1, NULL, '2018-05-31 09:38:33'),
(506, 'CoinPayment - ETH', 'Etherium', '1', '50000', '0.51', '2.52', '79', '596f0097ed9d1ab8cfed05eb59c70e9f066513dfe4df64a8fc3917d309328315', '7472928395208f70E3cE30B9e10dc882cBDD3e9967b7942AaE492106d9C7bE44', NULL, NULL, NULL, NULL, NULL, 1, NULL, '2018-07-16 03:42:22'),
(507, 'CoinPayment - BCH', 'Bitcoin Cash', '1', '50000', '0.51', '2.52', '80', '596f0097ed9d1ab8cfed05eb59c70e9f066513dfe4df64a8fc3917d309328315', '7472928395208f70E3cE30B9e10dc882cBDD3e9967b7942AaE492106d9C7bE44', NULL, NULL, NULL, NULL, NULL, 1, NULL, '2018-05-31 09:39:04'),
(508, 'CoinPayment - DASH', 'DASH', '1', '50000', '0.51', '2.52', '80', '596f0097ed9d1ab8cfed05eb59c70e9f066513dfe4df64a8fc3917d309328315', '7472928395208f70E3cE30B9e10dc882cBDD3e9967b7942AaE492106d9C7bE44', NULL, NULL, NULL, NULL, NULL, 1, NULL, '2018-05-31 09:39:04'),
(509, 'CoinPayment - DOGE', 'DOGE', '1', '50000', '0.51', '2.52', '80', '596f0097ed9d1ab8cfed05eb59c70e9f066513dfe4df64a8fc3917d309328315', '7472928395208f70E3cE30B9e10dc882cBDD3e9967b7942AaE492106d9C7bE44', NULL, NULL, NULL, NULL, NULL, 1, NULL, '2018-05-31 09:39:04'),
(510, 'CoinPayment - LTC', 'LTC', '1', '50000', '0.51', '2.52', '80', '596f0097ed9d1ab8cfed05eb59c70e9f066513dfe4df64a8fc3917d309328315', '7472928395208f70E3cE30B9e10dc882cBDD3e9967b7942AaE492106d9C7bE44', NULL, NULL, NULL, NULL, NULL, 1, NULL, '2018-05-31 09:39:04'),
(512, 'CoinGate', 'CoinGate', '10', '1000', '05', '5', '80', 'Ba1VgPx6d437xLXGKCBkmwVCEw5kHzRJ6thbGo-N', NULL, NULL, NULL, NULL, NULL, NULL, 1, '2018-07-08 18:00:00', '2019-02-24 12:26:00'),
(513, 'CoinPayment-ALL', 'Coin Payment', '10', '1000', '05', '5', '80', 'db1d9f12444e65c921604e289a281c56', NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, '2018-05-21 01:20:54');

-- --------------------------------------------------------

--
-- Table structure for table `languages`
--

CREATE TABLE `languages` (
  `id` int(10) UNSIGNED NOT NULL,
  `icon` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `languages`
--

INSERT INTO `languages` (`id`, `icon`, `name`, `code`, `created_at`, `updated_at`) VALUES
(9, 'bn.png', 'বাংলা', 'BN', '2019-03-13 12:50:23', '2019-03-14 10:56:23'),
(10, 'in.png', 'हिंदी', 'IN', '2019-03-14 10:39:48', '2019-03-14 10:39:48');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2018_11_11_100919_create_admins_table', 1),
(2, '2018_11_12_083849_create_settings_table', 1),
(4, '2018_11_14_064610_create_password_resets_table', 3),
(6, '2018_11_19_184409_create_videos_table', 5),
(7, '2018_11_20_163323_create_comments_table', 6),
(8, '2018_12_05_112426_create_services_table', 7),
(9, '2019_02_27_132459_create_ads_packages_table', 7),
(10, '2019_03_04_125844_create_users_table', 8);

-- --------------------------------------------------------

--
-- Table structure for table `partners`
--

CREATE TABLE `partners` (
  `id` int(191) UNSIGNED NOT NULL,
  `logo` varchar(191) DEFAULT NULL,
  `url` varchar(191) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `id` int(191) NOT NULL,
  `email` varchar(191) NOT NULL,
  `token` varchar(191) NOT NULL,
  `status` varchar(191) DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `public_contacts`
--

CREATE TABLE `public_contacts` (
  `id` int(191) UNSIGNED NOT NULL,
  `first_name` varchar(191) DEFAULT NULL,
  `last_name` varchar(191) DEFAULT NULL,
  `email` varchar(191) DEFAULT NULL,
  `subject` varchar(191) DEFAULT NULL,
  `message` longtext DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(191) NOT NULL,
  `name` varchar(191) DEFAULT NULL,
  `description` longtext DEFAULT NULL,
  `icon` varchar(191) DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `branding` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `logo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `favicon` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `color1` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_from` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_body` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_notification` tinyint(1) NOT NULL DEFAULT 0,
  `sms_api` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sms_notification` tinyint(1) NOT NULL DEFAULT 0,
  `email_verification` tinyint(1) NOT NULL DEFAULT 0,
  `sms_verification` tinyint(1) NOT NULL DEFAULT 0,
  `registration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `script` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `service_subtitle` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contact_thumbnail` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cur` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cur_symbol` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook_api` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fag` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `footer_image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bal_trans_fixed_charge` float(8,2) NOT NULL DEFAULT 0.00,
  `bal_trans_per_charge` float(8,2) NOT NULL DEFAULT 0.00,
  `video_section_title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `video_section_dec` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `video_link` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `about_title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `about_subtitle` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `video_section_banner` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `service_title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `faq_title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `faq_subtitle` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `blog_title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `blog_subtitle` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(77) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(77) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `title`, `branding`, `logo`, `favicon`, `color1`, `email_from`, `email_body`, `email_notification`, `sms_api`, `sms_notification`, `email_verification`, `sms_verification`, `registration`, `script`, `created_at`, `updated_at`, `service_subtitle`, `contact_thumbnail`, `cur`, `cur_symbol`, `facebook_api`, `fag`, `footer_image`, `bal_trans_fixed_charge`, `bal_trans_per_charge`, `video_section_title`, `video_section_dec`, `video_link`, `about_title`, `about_subtitle`, `video_section_banner`, `service_title`, `faq_title`, `faq_subtitle`, `blog_title`, `blog_subtitle`, `email`, `phone`) VALUES
(1, 'Spring Finance Bank', '© 2020 Spring Finance Bank. All rights reserved', 'XxsTf31wEmrzlgPWe0VaD7ZbG6EZRsjWJBueqeqc.png', '0CotuCp0HCzZkuwXKaeXRzQWRs2KA8YtLcuKfE2w.png', '1672B7', 'support@springfinancebank.com', '<br><br>\r\n	<div class=\"contents\" style=\"max-width: 600px; margin: 0 auto; border: 2px solid #000036;\">\r\n\r\n<div class=\"header\" style=\"background-color: #000036; padding: 15px; text-align: center;\">\r\n	<div class=\"logo\" style=\"width: 260px;text-align: center; margin: 0 auto;\">&nbsp;</div>\r\n</div>\r\n\r\n<div class=\"mailtext\" style=\"padding: 30px 15px; background-color: #f0f8ff; font-family: \'Open Sans\', sans-serif; font-size: 16px; line-height: 26px;\">\r\n\r\nHi {{name}},\r\n<br><br>\r\n{{message}}\r\n<br><br>\r\n<br><br></div>\r\n\r\n\r\n<div class=\"footer\" style=\"background-color: #000036; padding: 15px; text-align: center; border-top: 1px solid rgba(255, 255, 255, 0.2);\">\r\n\r\n<strong style=\"color: #fff;\">© 2020 Spring Finance Bank. All Rights Reserved.</strong>\r\n<p style=\"color: #ddd;\">&nbsp;</p>\r\n\r\n\r\n</div>\r\n\r\n	</div>\r\n<br><br>', 1, 'https://api.infobip.com/api/v3/sendsms/plain?user=****&password=*****&sender=iBanking&SMSText={{message}}&GSM={{number}}&type=longSMS', 1, 0, 0, '1', 'wvvwvwvw', '2018-11-13 18:00:00', '2020-08-18 19:11:34', 'We bring the right people together to challenge established thinking and drive transformation. We will show the way to successive.', '5gvRFEgyWL1vpFTmHg7hz8k0ia9k8pc09Qp5j0N3.jpeg', 'USD', '$', '205856110142667', '<h2 style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; font-weight: 400; line-height: 24px; font-family: DauphinPlain; font-size: 24px; color: rgb(0, 0, 0);\">Why do we use it?</h2><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify; color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif;\">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p><div><br></div>', 'lyW5tX3sqvcUjMg7B5DH1ECYbIxxIc7v6xpV4bt4.jpeg', 2.00, 3.00, 'Financial Investment Platform', 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?', 'https://www.youtube.com/watch?v=GT6-H4BRyqQ', 'About Us', 'We bring the right people together to challenge established thinking and drive transformation. We will show the way to successive.', 'video-banner.jpg', 'Our Services', 'Frequently Asked Questions', 'We bring the right people together to challenge established thinking and drive transformation. We will show the way to successive.', 'Latest News dfd', 'We bring the right people together to challenge established thinking and drive transformation. We will show the way to successive.', 'support@springfinancebank.com', '+19122090785');

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` int(191) NOT NULL,
  `title` varchar(191) DEFAULT NULL,
  `subtitle` longtext DEFAULT NULL,
  `banner` varchar(191) DEFAULT NULL,
  `btn_name` varchar(191) DEFAULT NULL,
  `btn_link` varchar(191) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `title`, `subtitle`, `banner`, `btn_name`, `btn_link`, `created_at`, `updated_at`) VALUES
(9, 'Fastest way to transfer Money', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit,', 'bbnn.jpeg', 'Register now', 'https://thesoftking.com', '2019-04-10 05:47:44', '2019-04-28 16:28:50');

-- --------------------------------------------------------

--
-- Table structure for table `social_icons`
--

CREATE TABLE `social_icons` (
  `id` int(191) UNSIGNED NOT NULL,
  `name` varchar(191) DEFAULT NULL,
  `icon` varchar(191) DEFAULT NULL,
  `link` varchar(191) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `subscribes`
--

CREATE TABLE `subscribes` (
  `id` int(191) NOT NULL,
  `email` varchar(191) DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `id` int(191) NOT NULL,
  `user_id` int(191) DEFAULT NULL,
  `trxid` varchar(191) DEFAULT NULL,
  `amount` varchar(191) DEFAULT '0',
  `balance` varchar(191) DEFAULT '0',
  `fee` varchar(191) DEFAULT '0',
  `p_time` varchar(191) DEFAULT NULL,
  `type` varchar(191) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `details` longtext DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`id`, `user_id`, `trxid`, `amount`, `balance`, `fee`, `p_time`, `type`, `status`, `details`, `updated_at`, `created_at`) VALUES
(11, 12, 'tns:Gktu6NOCpffL7ZtE', '500', '500', '0', '2020-08-09 06:31:35', '1', 0, 'Credit of: £500from your Account Number : 1829347506', '2020-08-09 05:31:35', '2020-08-09 05:31:35'),
(12, 12, 'tns:FdLqhd73d1v08ZcC', '400', '100', '0', '2020-08-09 06:34:42', '7', 1, 'Fund credit of: £400from your Account Number : 1829347506', '2020-08-11 07:56:15', '2020-08-09 05:34:42'),
(13, 12, 'tns:Sm0KijejKmGaGfLF', '88', '11.120000000000005', '0.88', '2020-08-09 06:45:31', '7', 1, 'Debit of: £88 . to . Account Number : 1234567890. Account details : International Transfer', '2020-08-11 07:56:19', '2020-08-09 05:45:31'),
(14, 12, 'tns:slkZaAaY9R8Hlt0p', '300', '311.12', '0', '2020-08-10 22:59:29', '1', 0, 'Debit of: £300from your Account Number : 1829347506', '2020-08-11 02:59:29', '2020-08-11 02:59:29'),
(15, 12, 'tns:kJ7QvOpri2RExwl7', '400', '711.12', '0', '2020-08-10 23:51:20', '1', 0, 'Debit of: £400from your Account Number : 1829347506', '2020-08-11 03:51:20', '2020-08-11 03:51:20'),
(16, 13, 'tns:02fiEiA9pbmdu7oP', '50000', '50000', '0', '2020-08-10 23:55:24', '1', 0, 'Debit of: €50000from your Account Number : 0053968714', '2020-08-11 03:55:24', '2020-08-11 03:55:24'),
(17, 13, 'tns:LiWLbwc8R63wmzGH', '50', '49949.5', '0.5', '2020-08-10 23:56:35', '7', 1, 'Debit of: €50 . to . Account Number : 1234567890. Account details : International Transfer', '2020-08-11 07:56:23', '2020-08-11 03:56:35'),
(18, 13, 'tns:xkOsBtglCprqpPAh', '50', '49899', '0.5', '2020-08-11 00:28:58', '7', 1, 'Debit of: €50 . to . Account Number : 1234567890. Account details : International Transfer', '2020-08-11 07:56:27', '2020-08-11 04:28:58'),
(19, 13, 'tns:UkWEcqsUmRTdDUeB', '50', '49848.5', '0.5', '2020-08-11 00:29:40', '7', 1, 'Debit of: €50 . to . Account Number : 1234567890. Account details : International Transfer', '2020-08-11 07:56:58', '2020-08-11 04:29:40'),
(20, 13, 'tns:H5sMhtIRMbOzmpOu', '50', '49798', '0.5', '2020-08-11 00:30:32', '7', 1, 'Debit of: €50 . to . Account Number : 1234567890. Account details : International Transfer', '2020-08-11 07:56:45', '2020-08-11 04:30:32'),
(21, 13, 'tns:TV0NpjjeKcPtAhFP', '50', '49747.5', '0.5', '2020-08-11 00:32:00', '7', 1, 'Debit of: €50 . to . Account Number : 1234567890. Account details : International Transfer', '2020-08-11 07:57:01', '2020-08-11 04:32:00'),
(22, 13, 'tns:1oowhKAkID2mNlgc', '50', '49697', '0.5', '2020-08-11 00:34:31', '7', 1, 'Debit of: €50 . to . Account Number : 1234567890. Account details : International Transfer', '2020-08-11 07:57:05', '2020-08-11 04:34:31'),
(23, 13, 'tns:wRTl6sKu9Ggge3NP', '50', '49646.5', '0.5', '2020-08-11 00:35:28', '7', 1, 'Debit of: €50 . to . Account Number : 1234567890. Account details : International Transfer', '2020-08-11 07:57:09', '2020-08-11 04:35:28'),
(24, 13, 'tns:1ISPiRzbhzkd5UYU', '50', '49596', '0.5', '2020-08-11 00:37:41', '7', 1, 'Debit of: €50 . to . Account Number : 1234567890. Account details : International Transfer', '2020-08-11 07:56:54', '2020-08-11 04:37:41'),
(25, 13, 'tns:pxshl8FhzIACXigg', '500', '50096', '0', '2020-08-11 00:50:10', '1', 0, 'Debit of: €500from your Account Number : 0053968714', '2020-08-11 04:50:10', '2020-08-11 04:50:10'),
(26, 13, 'tns:Fenf97SIh4tYRuf0', '500', '50096', '0', '2020-08-11 00:50:39', '1', 0, 'Debit of: €500from your Account Number : 0053968714', '2020-08-11 04:50:39', '2020-08-11 04:50:39'),
(27, 13, 'tns:p8i0FalD1OiFylAp', '500', '50096', '0', '2020-08-11 00:52:50', '1', 0, 'Debit of: €500from your Account Number : 0053968714', '2020-08-11 04:52:50', '2020-08-11 04:52:50'),
(28, 13, 'tns:dsM445IVd5SF9RZ0', '400', '49696', '0', '2020-08-11 00:55:26', '7', 0, 'Fund credit of: €400from your Account Number : 0053968714', '2020-08-11 04:55:26', '2020-08-11 04:55:26'),
(29, 13, 'tns:LAlZHLlT9LhzAXOm', '400', '49296', '0', '2020-08-11 00:56:12', '7', 1, 'Fund credit of: €400from your Account Number : 0053968714', '2020-08-11 07:57:33', '2020-08-11 04:56:12'),
(30, 13, 'tns:iOnKVl6QNiBEWWIk', '400', '48896', '0', '2020-08-11 00:56:39', '7', 1, 'Fund credit of: €400from your Account Number : 0053968714', '2020-08-11 07:57:37', '2020-08-11 04:56:39'),
(31, 13, 'tns:eSiGcPtEjwL0s4hv', '500', '48396', '0', '2020-08-11 00:57:23', '7', 1, 'Fund credit of: €500from your Account Number : 0053968714', '2020-08-11 07:56:35', '2020-08-11 04:57:23'),
(32, 13, 'tns:yoV1eYGTUphb0SFX', '500', '47896', '0', '2020-08-11 00:57:57', '7', 0, 'Fund credit of: €500from your Account Number : 0053968714', '2020-08-11 04:57:57', '2020-08-11 04:57:57'),
(33, 13, 'tns:JWF5W0AfvbRGqaz4', '7', '47903', '0', '2020-08-11 01:00:59', '1', 0, 'Debit of: €7from your Account Number : 0053968714', '2020-08-11 05:00:59', '2020-08-11 05:00:59'),
(34, 13, 'tns:xrrpiwEtNaGPmQV6', '7', '47910', '0', '2020-08-11 01:02:34', '1', 0, 'Debit of: €7from your Account Number : 0053968714', '2020-08-11 05:02:34', '2020-08-11 05:02:34'),
(35, 13, 'tns:Twx81ZKJZNMWUGyU', '7', '47917', '0', '2020-08-11 01:02:57', '1', 0, 'Debit of: €7from your Account Number : 0053968714', '2020-08-11 05:02:57', '2020-08-11 05:02:57'),
(36, 13, 'tns:xTwhS62Ecc9Nh77y', '7', '47924', '0', '2020-08-11 01:04:37', '1', 0, 'Debit of: €7from your Account Number : 0053968714', '2020-08-11 05:04:37', '2020-08-11 05:04:37'),
(37, 13, 'tns:q8T70zXaEnsN5NLO', '7', '47931', '0', '2020-08-11 01:05:13', '1', 0, 'Debit of: €7from your Account Number : 0053968714', '2020-08-11 05:05:13', '2020-08-11 05:05:13'),
(38, 13, 'tns:kEIbmaZZ4mtRZTPh', '7', '47938', '0', '2020-08-11 01:06:02', '1', 0, 'Debit of: €7from your Account Number : 0053968714', '2020-08-11 05:06:02', '2020-08-11 05:06:02'),
(39, 13, 'tns:uCde1ucEHelJuXXQ', '500', '48438', '0', '2020-08-11 01:11:32', '1', 0, 'Debit of: €500from your Account Number : 0053968714', '2020-08-11 05:11:32', '2020-08-11 05:11:32'),
(40, 13, 'tns:RJS8AxIsUrthuhGb', '500', '48938', '0', '2020-08-11 01:11:57', '1', 0, 'Debit of: €500from your Account Number : 0053968714', '2020-08-11 05:11:57', '2020-08-11 05:11:57'),
(41, 13, 'tns:QT9AWxRD0HG5vreJ', '500', '49438', '0', '2020-08-11 01:13:40', '1', 0, 'Debit of: €500from your Account Number : 0053968714', '2020-08-11 05:13:40', '2020-08-11 05:13:40'),
(42, 13, 'tns:3imjX3dVCKEkyVrT', '500', '49938', '0', '2020-08-11 01:14:04', '1', 0, 'Debit of: €500from your Account Number : 0053968714', '2020-08-11 05:14:04', '2020-08-11 05:14:04'),
(43, 13, 'tns:8ikCESVWrq6RbILl', '400', '49534', '4', '2020-08-11 01:19:39', '7', 1, 'Debit of: €400 . to . Account Number : 1234567890. Account details : International Transfer', '2020-08-11 07:57:23', '2020-08-11 05:19:39'),
(44, 13, 'tns:PYBXXOaiKfyhmVz8', '400', '49130', '4', '2020-08-11 01:23:57', '7', 1, 'Debit of: €400 . to . Account Number : 1234567890. Account details : International Transfer', '2020-08-11 07:56:40', '2020-08-11 05:23:57'),
(45, 13, 'tns:KVr9HauLT35BIQqM', '50', '49180', '0', '2020-08-11 01:25:07', '1', 0, 'Debit of: €50from your Account Number : 0053968714', '2020-08-11 05:25:07', '2020-08-11 05:25:07'),
(46, 13, 'tns:1JHbZMnZPk8grXAm', '500', '48675', '5', '2020-08-11 01:51:44', '7', 1, 'Debit of: €500 . to . Account Number : 1234567890. Account details : International Transfer', '2020-08-11 07:56:09', '2020-08-11 05:51:44'),
(47, 13, 'tns:5EjiQm8A4sHaEBsk', '10000', '38575', '100', '2020-08-11 03:56:52', '7', 1, 'Debit of: €10000 . to . Account Number : 898979997. Account details : International Transfer', '2020-08-11 07:57:17', '2020-08-11 07:56:52'),
(48, 13, 'tns:TX9uu8NZjG3ZtR9D', '1234', '37328.66', '12.34', '2020-08-11 03:58:28', '7', 0, 'Debit of: €1234 . to . Account Number : Nrnrnrn. Account details : International Transfer', '2020-08-11 07:58:28', '2020-08-11 07:58:28'),
(49, 13, 'tns:S90kbTVfgkCTMggV', '200', '37126.66', '2', '2020-08-11 04:10:47', '7', 0, 'Debit of: €200 . to . Account Number : Nrnrnrn. Account details : International Transfer', '2020-08-11 08:10:47', '2020-08-11 08:10:47'),
(50, 13, 'tns:w5hUoV5q56yqXwcl', '10000', '27026.660000000003', '100', '2020-08-11 05:39:47', '7', 0, 'Debit of: €10000 . to . Account Number : 166262117. Account details : International Transfer', '2020-08-11 09:39:47', '2020-08-11 09:39:47'),
(51, 13, 'tns:gY7wZzkR2mOwrBDq', '2000', '25006.66', '20', '2020-08-11 16:03:59', '7', 0, 'Debit of: €2000 . to . Account Number : 878787666. Account details : International Transfer', '2020-08-11 20:03:59', '2020-08-11 20:03:59'),
(52, 26, 'tns:xoW3FkCv0k9fOZiP', '2000', '2000', '0', '2020-08-17 06:19:38', '1', 0, 'Debit of: $2000from your Account Number : 8529631040', '2020-08-17 10:19:38', '2020-08-17 10:19:38'),
(53, 26, 'tns:CiMadalYKIDBm267', '2000', '4000', '0', '2020-08-17 06:19:40', '1', 0, 'Debit of: $2000from your Account Number : 8529631040', '2020-08-17 10:19:40', '2020-08-17 10:19:40'),
(54, 26, 'tns:M6RDTg8Dtv9RBQQA', '3000', '7000', '0', '2020-08-17 06:23:33', '1', 0, 'Debit of: $3000from your Account Number : 8529631040', '2020-08-17 10:23:33', '2020-08-17 10:23:33'),
(55, 26, 'tns:SxtuL94mM8yIW8eq', '400000', '407000', '0', '2020-08-17 06:23:49', '1', 0, 'Debit of: $400000from your Account Number : 8529631040', '2020-08-17 10:23:49', '2020-08-17 10:23:49'),
(56, 26, 'tns:1FIh24h6UGovwFVF', '5000', '402000', '0', '2020-08-17 06:25:05', '7', 0, 'Fund credit of: $5000from your Account Number : 8529631040', '2020-08-17 10:25:05', '2020-08-17 10:25:05'),
(57, 26, 'tns:LP6fsNBdm3yy5jSS', '2350', '399626.5', '23.5', '2020-08-17 06:35:29', '7', 0, 'Debit of: $2350 . to . Account Number : 1323456745. Account details : International Transfer', '2020-08-17 10:35:29', '2020-08-17 10:35:29'),
(58, 30, 'tns:NYh59cRb7i0eddoS', '5000', '5000', '0', '2020-08-18 03:27:39', '1', 0, 'Debit of: $5000from your Account Number : 7409160328', '2020-08-18 07:27:39', '2020-08-18 07:27:39'),
(59, 30, 'tns:BnF50uYwNZfMLAiN', '40000', '45000', '0', '2020-08-18 03:27:54', '1', 0, 'Debit of: $40000from your Account Number : 7409160328', '2020-08-18 07:27:54', '2020-08-18 07:27:54'),
(60, 30, 'tns:FNNFrn0wintawUYw', '3000', '42000', '0', '2020-08-18 03:28:07', '7', 0, 'Fund debit of: $3000from your Account Number : 7409160328', '2020-08-18 07:28:07', '2020-08-18 07:28:07'),
(61, 30, 'tns:KzjiMMbxo15Xw3Yy', '1000', '41000', '0', '2020-08-18 03:28:24', '7', 0, 'Fund debit of: $1000from your Account Number : 7409160328', '2020-08-18 07:28:24', '2020-08-18 07:28:24'),
(62, 26, 'tns:mMFHrMIm9TZnk7S3', '2000', '397606.5', '20', '2020-08-18 14:36:56', '7', 0, 'Debit of: $2000 . to . Account Number : 1212121212. Account details : International Transfer', '2020-08-18 18:36:56', '2020-08-18 18:36:56'),
(63, 30, 'tns:9dImMOVJnHuHUeOf', '34510000', '34551000', '0', '2020-08-18 15:11:37', '1', 0, 'Debit of: $34510000from your Account Number : 7409160328', '2020-08-18 19:11:37', '2020-08-18 19:11:37'),
(64, 30, 'tns:ZQSongHEWABxO1Kh', '3580087', '4580087', '0', '2020-08-19 02:14:20', '1', 0, 'Debit of: $3580087from your Account Number : 7409160328', '2020-08-19 06:14:20', '2020-08-19 06:14:20'),
(65, 30, 'tns:uhxr8qAYlw3o5XG1', '60854325', '61854325', '0', '2020-08-20 03:06:42', '1', 0, 'Debit of: $60854325from your Account Number : 7409160328', '2020-08-20 07:06:42', '2020-08-20 07:06:42');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `first_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `middle_name` varchar(55) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` varchar(44) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `account_number` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(199) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `avatar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `balance` float(8,2) DEFAULT 0.00,
  `amount` float(8,2) DEFAULT 0.00,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `showpass` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sms_verified` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sms_code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_time` varchar(199) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sms_time` varchar(199) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `verified_send` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_banned` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `currency` varchar(55) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `state` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `zipcode` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nationality` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dob` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `employstatus` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `accttype` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pinnumber` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nokname` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nokaddress` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nokrelationship` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nokphone` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nokemail` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `middle_name`, `gender`, `email`, `username`, `account_number`, `phone`, `avatar`, `country`, `city`, `balance`, `amount`, `password`, `showpass`, `email_verified`, `sms_verified`, `email_code`, `sms_code`, `email_time`, `sms_time`, `verified_send`, `user_banned`, `remember_token`, `address`, `currency`, `city2`, `state`, `zipcode`, `country2`, `nationality`, `dob`, `employstatus`, `accttype`, `pinnumber`, `nokname`, `nokaddress`, `nokrelationship`, `nokphone`, `nokemail`, `created_at`, `updated_at`) VALUES
(12, 'Adekunle', 'Gold', 'Mathew', 'Female', 'test@test.com', '1829347506', '1829347506', '08034545332', 'NVrF90lfGEkECyRMA16eDhZWW4O8itPeDROPTgik.png', 'Nigeria', 'Ikeja', 711.12, 0.00, '$2y$10$YZzfYIptkEGig4OM7kPLMOXgOUdd/9Vw9oegbw0Wd8Xhrt8vWUUAi', NULL, '1', '1', '5f2f43', 'F43B87', '2020-08-09 06:33:48', '2020-08-09 06:33:48', NULL, '0', NULL, 'My Address Is Real', '£', NULL, 'Lagos', '234', NULL, 'Nigeria', '2922-11-11', 'Unemployed', 'Checking', '1234', 'dsfdsfd', 'Ikeja Lagos', 'dsfdsfd', '08034545332', '2@2.com', '2020-08-09 05:30:48', '2020-08-11 03:51:20'),
(13, 'Adekunlex', 'Gold', 'ssdgdsgsd', 'Female', 'a@a.jj', '0053968714', '0053968714', '08034545332', 'BNECE7JSjIHcQe8VWLY33iNzVUPw7L39EK4UHxxB.jpeg', 'Nigeria', 'Ikeja', 25006.66, 0.00, '$2y$10$cd5Cep5/lsAAYdsJ.8EsWujaS852Wue7zDJGWI4cWY58/gLUne86.', 'test1234', '1', '1', '5f3180', '180665', '2020-08-10 23:17:14', '2020-08-10 23:17:14', NULL, '0', '5zJuHWCMbeQOBzy4wmf0d0rzU0CbPkJxj5TYIjEwcxgBOe0UNc4GHlfGvmm6', 'Lagos', '€', NULL, 'Lagos', '234', NULL, 'Nigeria', '7676-11-11', 'Unemployed', 'Checking', '1234', 'nokphone', 'gyufhgf', 'ythgfbcbn', '565656456456', 'a@a.vb', '2020-08-11 03:14:14', '2020-08-11 20:03:59'),
(16, 'Adekunle', 'Gold', 'ssdgdsgsd', 'Female', '2@2.comgreg', '2105468793', '2105468793', '08034545332444', NULL, 'Niue', 'Ikeja', 0.00, 0.00, '$2y$10$mdrwaBL.VsAOSK6xsGV6Deb5WmPlO7nNrLL.ZrMqek9CPqlAUfC1m', '08034545332444', '1', '1', '5f31af', '1AF929', '2020-08-11 02:38:30', '2020-08-11 02:38:30', NULL, '0', NULL, 'adminewwerewre', '$', NULL, 'Lagos', '234w', NULL, 'Nigeria', '0111-11-11', 'Unemployed', 'Online', 'admi', 'test@test.com', 'dsfdfsdg', 'sgdsg', 'dsgsdg', 'dsgdsg', '2020-08-11 06:35:30', '2020-08-11 06:35:30'),
(22, 'Adekunle', 'Gold', 'ssdgdsgsd', 'Female', 'd@f.g', '5100743962', '5100743962', '0803454533223', 'lWoOGEeoPhYiqO76CFjBSSy3LU25adNXAiFnGI1p.jpeg', 'Nigeria', 'Ikeja', 0.00, 0.00, '$2y$10$7JFx7ePQBAlHRhvmw4G0Xun9OlfB13Hzg80vSGQ0oeTauGixVs3Ry', 'test1234', '1', '1', '5f31b2', '1B2055', '2020-08-11 02:48:57', '2020-08-11 02:48:57', NULL, '0', NULL, 'admin', '£', NULL, 'Lagos', '234', NULL, 'Nigeria', '1111-11-11', 'Unemployed', 'Checking', '1234', 'dsfdsfd', 'Ikeja Lagos', 'asdasf', '09087654343', '2@2.com', '2020-08-11 06:45:57', '2020-08-11 07:41:18'),
(23, 'Chris', 'Brown', 'sdgsdg', 'Male', '2@2.com32623632', '2106078395', '2106078395', '2353532632', NULL, 'Albania', 'Lagos', 0.00, 0.00, '$2y$10$zwOfqtwh7bFaiSKyHYm9V.uZe.w7lo47OTpCtE6gDpViHHOKMgvly', 'class=\"form-control\"', '1', '1', '5f3658', '658D57', '2020-08-14 15:29:45', '2020-08-14 15:29:45', NULL, '0', NULL, 'Ikeja Lagos', '$', NULL, 'sdgsdg', '11234', NULL, 'Albania', '1111-11-11', 'Employed', 'Current', '1234', 'Kolatunde', 'Ikeja Lagos', 'nokphone', 'wefdsfdsgdsg', '2@2.comsdgdsgsd', '2020-08-14 14:26:45', '2020-08-14 14:26:45'),
(24, 'Adekunle', 'Gold', 'dfdaasfasf', 'Male', 'adetunjioluwakayode@gmail.com', '2639784105', '2639784105', '08034545332', NULL, 'Afganistan', 'Ikeja', 0.00, 0.00, '$2y$10$61XhxPOi0b5flNb7fEqDt..VD7eyYVfR66/JsjDfIt3yCv1QcaeuW', 'adetunjioluwakayode@gmail.com', '1', '1', '5f3663', '663C28', '2020-08-14 16:16:22', '2020-08-14 16:16:22', NULL, '0', NULL, 'My Address Is Real', '£', NULL, 'Lagos', '234', NULL, 'Nigeria', '11111-11-11', 'Unemployed', 'Checking', '1234', 'test@test.com', 'Akowonjo Lane. Lagos', '2@2.com234235', '23535236', '326236@a.com', '2020-08-14 20:13:22', '2020-08-14 20:13:22'),
(25, 'Adekunle', 'Gold', 'dfdaasfasf', 'Male', 'yode@gmail.com23623', '1849070625', '1849070625', '090876543432352356', NULL, 'Nigeria', 'Ikeja', 0.00, 0.00, '$2y$10$pNpOw.NDCOde4TDFWd0MHOhqjpDQ71U/qotNwRMwDcXPHLYtfjGDq', '@yield(\'script\')', '1', '1', '5f3956', '956304', '2020-08-16 21:55:16', '2020-08-16 21:55:16', NULL, '0', NULL, 'admin', '$', NULL, 'Lagos', '23401', NULL, 'Nigeria', '1111-11-11', 'Employed', 'Online', 'admi', '233232', '312532531', '31412412', '21421421', '2@2.com', '2020-08-17 01:52:16', '2020-08-17 01:52:16'),
(26, 'Mark', 'Banes', 'James', 'Male', 'nosaalade1@gmail.com', '8529631040', '8529631040', '49394949', 'DJ4yPzFTaguJy1B158eVZ1VTKV18HMKKWffUNhyT.png', 'United States of America', 'Florida', 397606.50, 0.00, '$2y$10$oJNgDIKxC3xLRX2UNk2KvOvQRCwwe6zGPEGRowdkh7wlD.3zkTuZi', '12345', '1', '1', '5f39cc', '9CB53E', '2020-08-17 06:20:46', '2020-08-17 06:15:03', NULL, '0', '3WausXxyObiF2YPrWg6C2XFjMz8XNdBSH6XTKeKlSVDSp0BgUVZ6ab3O6V7P', 'Texas', '$', NULL, 'States', '3288', NULL, 'USA', '2020-08-17', 'Employed', 'Checking', '1234', 'Stones', 'Texas', 'Brother', '3949494949', 'Larsonmoore99@gmail.com', '2020-08-17 10:12:04', '2020-08-18 18:36:56'),
(27, 'Mark', 'John', 'Davies', 'Male', 'monreallars2019@gmail.com', '4067108539', '4067108539', '09076622678', NULL, 'France', 'Florida', 0.00, 0.00, '$2y$10$wm69ZpoVM4l2MYU5T605Auh0GrMqVMEr4i/e3K1ZWTgIvFyn8x5eO', '12345678', '1', '1', '5f3a39', 'A399E1', '2020-08-17 14:05:38', '2020-08-17 14:05:38', NULL, '0', NULL, 'Texas', '$', NULL, 'States', '2243', NULL, 'USA', '2020-08-17', 'Employed', 'Checking', '1234', 'Stones', 'Texas', 'Brother', '49495949495', 'Nosaapade1@gmail.com', '2020-08-17 18:02:38', '2020-08-17 18:02:38'),
(29, 'Chris', 'Brown', 'ewdsfsafasf', 'Male', '2@2.comzxvxzvxzvxzv', '1603875920', '1603875920', '25325236236326236', NULL, 'Afganistan', 'Lagos', 0.00, 0.00, '$2y$10$mKgilTDTtRyDlgabtjXOdOTjzQQvuyfSZLbYsa/52GPjKBejhRiS2', '{{url(\'/login\')}}', '1', '1', '5f3a61', 'A61B33', '2020-08-17 16:56:39', '2020-08-17 16:56:39', NULL, '0', NULL, 'admindfdfsaf', '£', NULL, 'asfsafsafas', '11234', NULL, 'Nigeria', '1111-11-11', 'Employed', 'Checking', 'admi', '121232132', 'ffdfafasfasfasfasf', 'asfsafsfasfsafasfas', '2341221421421', 'a@a.com', '2020-08-17 20:53:39', '2020-08-17 20:53:39'),
(30, 'David', 'Porter', 'Bernal', 'Male', 'davidporterum@gmail.com', '7409160328', '7409160328', '+13159826228', NULL, 'United States of America', 'San Diego', 1000000.00, 0.00, '$2y$10$N.qW5L2R4SVdn7W6OLntNOlJVmsRIaJ7LwjFtdiJyQbBdXVFJXkjO', 'porter12345', '1', '1', '5f3aea', 'AEA80D', '2020-08-18 02:40:20', '2020-08-18 02:40:20', NULL, '0', 'cNQ4AIrtWHX4dUtQcmeLL7Aqx0MfVUDZYf4P3ediIZJFRQTVJrOVRZXQnIAC', '882 Adams Avenue', '$', NULL, 'California', '78384', NULL, 'American', '1984-10-10', 'Employed', 'Joint', '1234', 'Kanitha Porter', '635/47 village No 14 soo Ban Kao Chan Sub district Mak Khaeng, Mueang, Udon Thani Province Udon Thani.', 'wife', '+66643346670', 'kanitta46670@gmail.com', '2020-08-18 06:37:21', '2020-08-20 07:06:42'),
(31, 'Adekunle', 'Gold', 'dfdaasfasf', 'Male', '2@2.com124214', '1725003684', '1725003684', '0803454533223431412', NULL, 'Albania', 'Ikeja', 0.00, 0.00, '$2y$10$xUCvs2DAC2hNR7EngA4ide1gN9/VLM3cww5OoHi/kGy0Txa1I/OSu', 'spridjhz', '1', '1', '5f3b8c', 'B8CC36', '2020-08-18 14:12:39', '2020-08-18 14:12:39', NULL, '0', NULL, 'admin', '$', NULL, 'Lagos', '234', NULL, '12412', '1111-11-11', 'Employed', 'Online', 'admi', 'sdfdsgdsgsdgsd', 'dsgdsgsdgdsgsdg', 'dsgdsgdsgdsgsd', '3523523523523523', 'sdfsdfds', '2020-08-18 18:09:39', '2020-08-18 18:09:39');

-- --------------------------------------------------------

--
-- Table structure for table `withdraws`
--

CREATE TABLE `withdraws` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(191) NOT NULL,
  `wmethod_id` int(11) NOT NULL,
  `amount` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fee` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `account` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `wmethods`
--

CREATE TABLE `wmethods` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `minamo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `maxamo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `fixed_charge` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `percent_charge` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `rate` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `val1` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_username_unique` (`username`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indexes for table `advertisements`
--
ALTER TABLE `advertisements`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banks`
--
ALTER TABLE `banks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `branches`
--
ALTER TABLE `branches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `deposits`
--
ALTER TABLE `deposits`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faqs`
--
ALTER TABLE `faqs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gateways`
--
ALTER TABLE `gateways`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `languages`
--
ALTER TABLE `languages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `partners`
--
ALTER TABLE `partners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `public_contacts`
--
ALTER TABLE `public_contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `social_icons`
--
ALTER TABLE `social_icons`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subscribes`
--
ALTER TABLE `subscribes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_username_unique` (`username`);

--
-- Indexes for table `withdraws`
--
ALTER TABLE `withdraws`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wmethods`
--
ALTER TABLE `wmethods`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `advertisements`
--
ALTER TABLE `advertisements`
  MODIFY `id` int(191) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `banks`
--
ALTER TABLE `banks`
  MODIFY `id` int(191) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int(191) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `branches`
--
ALTER TABLE `branches`
  MODIFY `id` int(191) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(191) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `deposits`
--
ALTER TABLE `deposits`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `faqs`
--
ALTER TABLE `faqs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(191) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `gateways`
--
ALTER TABLE `gateways`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=514;

--
-- AUTO_INCREMENT for table `languages`
--
ALTER TABLE `languages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `partners`
--
ALTER TABLE `partners`
  MODIFY `id` int(191) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `public_contacts`
--
ALTER TABLE `public_contacts`
  MODIFY `id` int(191) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(191) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` int(191) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `social_icons`
--
ALTER TABLE `social_icons`
  MODIFY `id` int(191) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `subscribes`
--
ALTER TABLE `subscribes`
  MODIFY `id` int(191) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `id` int(191) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `withdraws`
--
ALTER TABLE `withdraws`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `wmethods`
--
ALTER TABLE `wmethods`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
