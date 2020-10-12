-- Adminer 4.2.1 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

USE `broker-system`;

SET NAMES utf8mb4;

DROP TABLE IF EXISTS `accounts`;
CREATE TABLE `accounts` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `no_rekening` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_bank` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `atas_nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `accounts` (`id`, `no_rekening`, `nama_bank`, `atas_nama`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1,	'1020535755',	'BRI Syariah Indonesia',	'Adrian Pratama, S.T',	NULL,	'2020-10-07 02:37:18',	'2020-10-07 02:40:16');

DROP TABLE IF EXISTS `authorize_signs`;
CREATE TABLE `authorize_signs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `input_kode` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jabatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `authorize_signs` (`id`, `input_kode`, `nama`, `jabatan`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1,	'AS0002',	'Mohammad Hidayat , MM',	'Corp. Commercial Risk',	NULL,	'2020-10-07 01:43:35',	'2020-10-07 01:50:54');

DROP TABLE IF EXISTS `clients`;
CREATE TABLE `clients` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pic` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_pic` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `clients` (`id`, `name`, `address`, `phone`, `email`, `pic`, `phone_pic`, `deleted_at`, `created_at`, `updated_at`) VALUES
('MIT33317498',	'Farhan Mustaqim',	'Cluster Citayam Grande 8, Bogor',	'0811111112',	'farhan@gmail.com',	'Faisal Rahman',	'081111119',	NULL,	'2020-09-20 22:53:45',	'2020-09-21 09:08:11'),
('MIT40035553',	'Faisal Ramlan',	'Margonda, Depok',	'08232323232',	'rahman@maman.com',	'Adrian',	'0812121212',	NULL,	'2020-09-20 22:59:12',	'2020-09-20 22:59:12'),
('MIT94161220',	'Pratama Sejahtera, PT',	'Jl. Datuk Tabano Gg. Mangga No. 27 Bangkinang',	'0812121212',	'pratama@sejahtera.com',	'Adrian',	'0129191919',	NULL,	'2020-10-07 00:07:12',	'2020-10-07 00:19:27');

DROP TABLE IF EXISTS `cover_types`;
CREATE TABLE `cover_types` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `input_kode` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `cover_types` (`id`, `input_kode`, `deskripsi`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1,	'PA0001',	'Proteksi Kecelakaan Lalu Lintas',	NULL,	'2020-10-07 01:17:56',	'2020-10-07 01:24:20');

DROP TABLE IF EXISTS `currencies`;
CREATE TABLE `currencies` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `input_kode` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mata_uang` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `currencies` (`id`, `input_kode`, `mata_uang`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1,	'USD',	'American Dollar',	NULL,	'2020-10-07 02:11:21',	'2020-10-07 02:15:48'),
(2,	'IDR',	'Indonesian Rupiah',	NULL,	'2020-10-07 02:11:41',	'2020-10-07 02:11:41'),
(3,	'MYR',	'Malaysian Ringgit',	NULL,	'2020-10-07 02:11:57',	'2020-10-07 02:11:57');

DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


DROP TABLE IF EXISTS `instructs`;
CREATE TABLE `instructs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `date` date DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `insurance_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `client_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `period_from` date NOT NULL,
  `period_to` date NOT NULL,
  `cover_type_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `currency_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `compensation` int(11) NOT NULL,
  `premium_warranty` int(11) NOT NULL,
  `rate` int(11) DEFAULT NULL,
  `sum_insured` int(11) NOT NULL,
  `premi` int(11) NOT NULL,
  `kurs` int(11) DEFAULT NULL,
  `admin_fee` int(11) DEFAULT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `instructs` (`id`, `date`, `status`, `insurance_id`, `client_id`, `period_from`, `period_to`, `cover_type_id`, `currency_id`, `compensation`, `premium_warranty`, `rate`, `sum_insured`, `premi`, `kurs`, `admin_fee`, `content`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1,	NULL,	'DRAFT',	'BINA98113801',	'MIT94161220',	'2020-10-11',	'2020-10-31',	'PA0001',	'USD',	25,	45,	100,	1000,	100000,	NULL,	NULL,	'<div>THE INSURED</div><div>SOLAR ALERT ENERGY, PT as Main Contractor and/or Consulting Engineers and/or</div><div>Consultants and/or Man Power Supply.</div><div>PERIOD OF INSURANCE</div><div>Address at:</div><div>Jl Kenari II No.12, Kawasan Industri Delta Silicon V, Lippo Cikarang, Bekasi</div><div>08 (Eight) months from 18 July 2020 up to 18 March 2021</div><div>(11.59 am Jakarta Local Standard time both days inclusive)</div><div>DETAILS OF CONTRACT Principal .................. PC KETAPANG II LTD</div><div>Title .......................... Provision of Surface Wellhead Equipment Supply &amp; Services</div><div>Number .................. 4850000312</div><div>Risk Location.......... Anywhere within PRINCIPAL and/or their Affiliate’s Project Site</div><div>mainly at Lamongan Shorebase Surabaya and Jakarta Office.</div><div>Value ....................... USD 711,606. 84</div><div>SCOPE OF WORK PROJECT Part Drilling Unit, Wellhead Services</div><div>TERRITORIAL LIMIT Indonesiaan Area</div><div>DETAILS OF EMPLOYEE Number .................. Please Advise *)</div><div>Total Payroll ........... Please Advise *). 00 ,</div><div>DETAILS OF VEHICLE Please Advise *)</div>',	NULL,	'2020-10-09 03:24:47',	'2020-10-09 03:24:47');

DROP TABLE IF EXISTS `insurances`;
CREATE TABLE `insurances` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `office` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pic` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_pic` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `insurances` (`id`, `name`, `office`, `address`, `phone`, `email`, `pic`, `phone_pic`, `deleted_at`, `created_at`, `updated_at`) VALUES
('BINA98113801',	'PT. Sinar Mas Jaya  Raga',	'Kab. Bogor',	'Bojong Gede, Kab. Bogor',	'021202020',	'sinar@masmas.com',	'Mas Sinar Mas',	'0888121212',	NULL,	'2020-09-21 00:21:39',	'2020-09-21 09:58:38');

DROP TABLE IF EXISTS `invoices`;
CREATE TABLE `invoices` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` date DEFAULT NULL,
  `quotation_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `policy_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kurs` int(11) NOT NULL,
  `policy_cost` int(11) NOT NULL,
  `stamp_duty` int(11) NOT NULL,
  `others` int(11) NOT NULL,
  `admin_cost` float NOT NULL,
  `particulars` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `sign_for` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `invoices` (`id`, `status`, `date`, `quotation_id`, `policy_number`, `kurs`, `policy_cost`, `stamp_duty`, `others`, `admin_cost`, `particulars`, `sign_for`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1,	'APPROVED',	'2020-10-10',	'1',	'19.V26.20.00008 (CGL), 19.V20.20.00006 (WCA), 19.V23.23.20.00007 (ELI) | 0',	14782,	4,	1,	0,	3.5,	'COMBINED LIABILITY | PC Ketapang II LTD | Provision of Surface Wellhead Equipment Supply and Services |Contract Number : 4850000312 | CGL Limit of Liability USD 1,000,000.00, EL USD 250.000,-',	'AS0002',	NULL,	'2020-10-10 07:44:19',	'2020-10-10 08:06:02');

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1,	'2014_10_12_000000_create_users_table',	1),
(2,	'2014_10_12_100000_create_password_resets_table',	1),
(3,	'2019_08_19_000000_create_failed_jobs_table',	1),
(5,	'2020_09_21_010959_create_client_table',	2),
(6,	'2020_09_21_031356_create_insurance_table',	3),
(7,	'2020_09_21_044346_create_insured_table',	4),
(8,	'2020_09_22_092937_create_placing_table',	5),
(9,	'2020_09_22_124930_create_tests_table',	6),
(10,	'2020_09_24_030256_create_quotation_table',	7),
(11,	'2020_09_29_095348_create_instruct_table',	8),
(12,	'2020_10_07_072851_create_covertype_table',	9),
(13,	'2020_10_07_082935_create_authorizesign_table',	10),
(14,	'2020_10_07_090114_create_currency_table',	11),
(15,	'2020_10_07_092153_create_account_table',	12),
(16,	'2020_10_07_101544_create_placing_table',	13),
(17,	'2020_10_07_133136_create_placing_table',	14),
(18,	'2020_09_28_042619_create_invoice_table',	15),
(19,	'2020_10_05_082056_create_jenis_asuransi_table',	15),
(20,	'2020_10_08_093318_create_quotation_table',	16),
(21,	'2020_10_09_091909_create_instruct_table',	17),
(22,	'2020_10_10_143107_create_invoice_table',	18);

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


DROP TABLE IF EXISTS `placings`;
CREATE TABLE `placings` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` date DEFAULT NULL,
  `insurance_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `client_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `period_from` date NOT NULL,
  `period_to` date NOT NULL,
  `cover_type_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `currency_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `compensation` int(11) NOT NULL,
  `premium_warranty` int(11) NOT NULL,
  `rate` int(11) DEFAULT NULL,
  `sum_insured` int(11) NOT NULL,
  `premi` int(11) NOT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `placings` (`id`, `status`, `date`, `insurance_id`, `client_id`, `period_from`, `period_to`, `cover_type_id`, `currency_id`, `compensation`, `premium_warranty`, `rate`, `sum_insured`, `premi`, `content`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1,	'UNAPPROVED',	'2020-10-09',	'BINA98113801',	'MIT94161220',	'2020-10-11',	'2020-10-31',	'PA0001',	'USD',	25,	45,	100,	1000,	100000,	'<div>THE INSURED</div><div>SOLAR ALERT ENERGY, PT as Main Contractor and/or Consulting Engineers and/or</div><div>Consultants and/or Man Power Supply.</div><div>PERIOD OF INSURANCE</div><div>Address at:</div><div>Jl Kenari II No.12, Kawasan Industri Delta Silicon V, Lippo Cikarang, Bekasi</div><div>08 (Eight) months from 18 July 2020 up to 18 March 2021</div><div>(11.59 am Jakarta Local Standard time both days inclusive)</div><div>DETAILS OF CONTRACT Principal .................. PC KETAPANG II LTD</div><div>Title .......................... Provision of Surface Wellhead Equipment Supply &amp; Services</div><div>Number .................. 4850000312</div><div>Risk Location.......... Anywhere within PRINCIPAL and/or their Affiliate’s Project Site</div><div>mainly at Lamongan Shorebase Surabaya and Jakarta Office.</div><div>Value ....................... USD 711,606. 84</div><div>SCOPE OF WORK PROJECT Part Drilling Unit, Wellhead Services</div><div>TERRITORIAL LIMIT Indonesiaan Area</div><div>DETAILS OF EMPLOYEE Number .................. Please Advise *)</div><div>Total Payroll ........... Please Advise *). 00 ,</div><div>DETAILS OF VEHICLE Please Advise *)</div>',	NULL,	'2020-10-07 06:36:20',	'2020-10-09 01:43:44');

DROP TABLE IF EXISTS `quotations`;
CREATE TABLE `quotations` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` date DEFAULT NULL,
  `insurance_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `client_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `period_from` date NOT NULL,
  `period_to` date NOT NULL,
  `cover_type_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `currency_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `compensation` int(11) NOT NULL,
  `premium_warranty` int(11) NOT NULL,
  `rate` int(11) DEFAULT NULL,
  `sum_insured` int(11) NOT NULL,
  `premi` int(11) NOT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `quotations` (`id`, `status`, `date`, `insurance_id`, `client_id`, `period_from`, `period_to`, `cover_type_id`, `currency_id`, `compensation`, `premium_warranty`, `rate`, `sum_insured`, `premi`, `content`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1,	'APPROVED',	'2020-10-09',	'BINA98113801',	'MIT94161220',	'2020-10-11',	'2020-10-31',	'PA0001',	'USD',	25,	45,	100,	100,	10000,	'<div>THE INSURED</div><div>SOLAR ALERT ENERGY, PT as Main Contractor and/or Consulting Engineers and/or</div><div>Consultants and/or Man Power Supply.</div><div>PERIOD OF INSURANCE</div><div>Address at:</div><div>Jl Kenari II No.12, Kawasan Industri Delta Silicon V, Lippo Cikarang, Bekasi</div><div>08 (Eight) months from 18 July 2020 up to 18 March 2021</div><div>(11.59 am Jakarta Local Standard time both days inclusive)</div><div>DETAILS OF CONTRACT Principal .................. PC KETAPANG II LTD</div><div>Title .......................... Provision of Surface Wellhead Equipment Supply &amp; Services</div><div>Number .................. 4850000312</div><div>Risk Location.......... Anywhere within PRINCIPAL and/or their Affiliate’s Project Site</div><div>mainly at Lamongan Shorebase Surabaya and Jakarta Office.</div><div>Value ....................... USD 711,606. 84</div><div>SCOPE OF WORK PROJECT Part Drilling Unit, Wellhead Services</div><div>TERRITORIAL LIMIT Indonesiaan Area</div><div>DETAILS OF EMPLOYEE Number .................. Please Advise *)</div><div>Total Payroll ........... Please Advise *). 00 ,</div><div>DETAILS OF VEHICLE Please Advise *)</div>',	NULL,	'2020-10-08 02:37:31',	'2020-10-09 00:45:33'),
(2,	'DRAFT',	NULL,	'BINA98113801',	'MIT94161220',	'2020-10-11',	'2020-10-31',	'PA0001',	'USD',	25,	45,	100,	1000,	100000,	'<div>THE INSURED</div><div>SOLAR ALERT ENERGY, PT as Main Contractor and/or Consulting Engineers and/or</div><div>Consultants and/or Man Power Supply.</div><div>PERIOD OF INSURANCE</div><div>Address at:</div><div>Jl Kenari II No.12, Kawasan Industri Delta Silicon V, Lippo Cikarang, Bekasi</div><div>08 (Eight) months from 18 July 2020 up to 18 March 2021</div><div>(11.59 am Jakarta Local Standard time both days inclusive)</div><div>DETAILS OF CONTRACT Principal .................. PC KETAPANG II LTD</div><div>Title .......................... Provision of Surface Wellhead Equipment Supply &amp; Services</div><div>Number .................. 4850000312</div><div>Risk Location.......... Anywhere within PRINCIPAL and/or their Affiliate’s Project Site</div><div>mainly at Lamongan Shorebase Surabaya and Jakarta Office.</div><div>Value ....................... USD 711,606. 84</div><div>SCOPE OF WORK PROJECT Part Drilling Unit, Wellhead Services</div><div>TERRITORIAL LIMIT Indonesiaan Area</div><div>DETAILS OF EMPLOYEE Number .................. Please Advise *)</div><div>Total Payroll ........... Please Advise *). 00 ,</div><div>DETAILS OF VEHICLE Please Advise *)</div>',	NULL,	'2020-10-09 02:13:04',	'2020-10-09 02:13:04');

DROP TABLE IF EXISTS `tests`;
CREATE TABLE `tests` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `tests` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1,	'Tes',	'2020-09-22 05:58:02',	'2020-09-22 05:58:02');

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
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

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1,	'Adrian Pratama',	'ian@pialang.com',	NULL,	'$2y$10$eY0t8oQGBla1mdZls7esp.1MuI2.kSXpCJ.wSe.cYUa2rva3zV6yG',	NULL,	'2020-09-20 11:40:07',	'2020-09-20 11:40:07');

-- 2020-10-12 13:50:29
