-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.4.24-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win64
-- HeidiSQL Version:             11.3.0.6295
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for dckap
CREATE DATABASE IF NOT EXISTS `dckap` /*!40100 DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci */;
USE `dckap`;

-- Dumping structure for table dckap.cities
CREATE TABLE IF NOT EXISTS `cities` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `city_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `country` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=44 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table dckap.cities: ~38 rows (approximately)
/*!40000 ALTER TABLE `cities` DISABLE KEYS */;
REPLACE INTO `cities` (`id`, `city_name`, `country`, `created_at`, `updated_at`) VALUES
	(1, 'Mumbai', 'India', '2022-04-03 23:54:12', '2022-04-03 23:54:12'),
	(2, 'Delhi', 'India', '2022-04-03 23:54:12', '2022-04-03 23:54:12'),
	(3, 'Bangalore', 'India', '2022-04-03 23:58:15', '2022-04-03 23:58:15'),
	(4, 'Hyderabad', 'India', '2022-04-03 23:58:15', '2022-04-03 23:58:15'),
	(5, 'Chennai', 'India', '2022-04-03 23:58:15', '2022-04-03 23:58:15'),
	(6, 'Vijayawada', 'India', '2022-04-03 23:58:15', '2022-04-03 23:58:15'),
	(7, 'Kolkata', 'India', '2022-04-03 23:58:15', '2022-04-03 23:58:15'),
	(8, 'Ahmedabad', 'India', '2022-04-03 23:58:15', '2022-04-03 23:58:15'),
	(9, 'Pune', 'India', '2022-04-03 23:58:15', '2022-04-03 23:58:15'),
	(10, 'Visakhapatnam', 'India', '2022-04-03 23:58:15', '2022-04-03 23:58:15'),
	(11, 'Madurai', 'India', '2022-04-03 23:58:15', '2022-04-03 23:58:15'),
	(12, 'Nellore', 'India', '2022-04-03 23:58:15', '2022-04-03 23:58:15'),
	(13, 'Kabul', 'Afghanistan', '2022-04-04 00:36:15', '2022-04-04 00:36:15'),
	(14, 'Kandahar', 'Afghanistan', '2022-04-04 00:36:15', '2022-04-04 00:36:15'),
	(15, 'Herat', 'Afghanistan', '2022-04-04 00:36:15', '2022-04-04 00:36:15'),
	(16, 'Jalalabad', 'Afghanistan', '2022-04-04 00:36:15', '2022-04-04 00:36:15'),
	(17, 'Ghazni', 'Afghanistan', '2022-04-04 00:36:15', '2022-04-04 00:36:15'),
	(18, 'Kunduz', 'Afghanistan', '2022-04-04 00:36:15', '2022-04-04 00:36:15'),
	(19, 'Balkh', 'Afghanistan', '2022-04-04 00:36:15', '2022-04-04 00:36:15'),
	(20, 'Khost', 'Afghanistan', '2022-04-04 00:36:15', '2022-04-04 00:36:15'),
	(21, 'Farah', 'Afghanistan', '2022-04-04 00:36:15', '2022-04-04 00:36:15'),
	(22, 'Taloqan', 'Afghanistan', '2022-04-04 00:36:15', '2022-04-04 00:36:15'),
	(23, 'Berat', 'Albania', '2022-04-04 00:38:26', '2022-04-04 00:38:26'),
	(24, 'Durres', 'Albania', '2022-04-04 00:38:26', '2022-04-04 00:38:26'),
	(25, 'Tirana', 'Albania', '2022-04-04 00:38:26', '2022-04-04 00:38:26'),
	(26, 'Vlore', 'Albania', '2022-04-04 00:38:26', '2022-04-04 00:38:26'),
	(27, 'Shkoder', 'Albania', '2022-04-04 00:38:26', '2022-04-04 00:38:26'),
	(28, 'Constantine', 'Algeria', '2022-04-04 00:45:39', '2022-04-04 00:45:39'),
	(29, 'Annaba', 'Algeria', '2022-04-04 00:45:39', '2022-04-04 00:45:39'),
	(30, 'Algiers', 'Algeria', '2022-04-04 00:45:39', '2022-04-04 00:45:39'),
	(31, 'Andorra la Vella', 'Andorre', '2022-04-04 08:12:55', '2022-04-04 08:12:55'),
	(32, 'Escaldes-Engordany', 'Andorre', '2022-04-04 08:12:55', '2022-04-04 08:12:55'),
	(33, 'Encamp', 'Andorre', '2022-04-04 08:12:55', '2022-04-04 08:12:55'),
	(34, 'Baía Farta', 'Angola', '2022-04-04 08:15:54', '2022-04-04 08:15:54'),
	(35, 'Benguela', 'Angola', '2022-04-04 08:15:54', '2022-04-04 08:15:54'),
	(36, 'The Valley', 'Anguilla', '2022-04-04 08:15:54', '2022-04-04 08:15:54'),
	(37, 'White Hill', 'Anguilla', '2022-04-04 08:15:54', '2022-04-04 08:15:54'),
	(38, 'Crocus Hill', 'Anguilla', '2022-04-04 08:15:54', '2022-04-04 08:15:54'),
	(39, 'The Stars Village', 'Antarctique', '2022-04-04 08:21:08', '2022-04-04 08:21:08'),
	(40, 'Amundsen–Scott South Pole Station', 'Antarctique', '2022-04-04 08:21:08', '2022-04-04 08:21:08'),
	(41, 'Rothera', 'Antarctique', '2022-04-04 08:21:08', '2022-04-04 08:21:08'),
	(42, 'Saint John\'s', 'Antigua-et-Barbuda', '2022-04-04 08:21:08', '2022-04-04 08:21:08'),
	(43, 'Potter\'s Village', 'Antigua-et-Barbuda', '2022-04-04 08:21:08', '2022-04-04 08:21:08');
/*!40000 ALTER TABLE `cities` ENABLE KEYS */;

-- Dumping structure for table dckap.password_resets
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email(191)_index` (`email`(191))
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table dckap.password_resets: ~0 rows (approximately)
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;

-- Dumping structure for table dckap.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `google_id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `del_status` int(11) NOT NULL DEFAULT 0 COMMENT '0->Active,1->InActive',
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `users_email(191)_index` (`email`(191))
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table dckap.users: ~2 rows (approximately)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
REPLACE INTO `users` (`id`, `name`, `email`, `google_id`, `role`, `address`, `email_verified_at`, `password`, `del_status`, `remember_token`, `created_at`, `updated_at`) VALUES
	(1, 'Srinivasan Arambaka', 'srinivasanarambaka@gmail.com', '111577424465535934122', 'User', NULL, NULL, '$2y$10$Ws1g/5gLgizq0XwGP6hCFuveynXqlLIs4Yx83afD9HuxzblxiSZJu', 0, NULL, '2022-04-03 17:14:23', '2022-04-03 17:14:23'),
	(2, 'Srinivasan P', 'srinivasan3288@gmail.com', '103382984790206139109', 'User', NULL, NULL, '$2y$10$4lgf716LnP4w5zcvNL72V.w91Jz7faXLbLfoB2MQhtYHVwW1JkY36', 0, NULL, '2022-04-03 19:58:38', '2022-04-03 19:58:38');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

-- Dumping structure for table dckap.users_management
CREATE TABLE IF NOT EXISTS `users_management` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 0 COMMENT '0->Active,1->InActive',
  `education` varchar(55) COLLATE utf8_unicode_ci DEFAULT NULL,
  `pincode` varchar(55) COLLATE utf8_unicode_ci DEFAULT NULL,
  `profile_pic` varchar(55) COLLATE utf8_unicode_ci DEFAULT NULL,
  `country` varchar(55) COLLATE utf8_unicode_ci DEFAULT NULL,
  `city` varchar(55) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `hostel_hostel_email(191)_index` (`email`(191))
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table dckap.users_management: ~2 rows (approximately)
/*!40000 ALTER TABLE `users_management` DISABLE KEYS */;
REPLACE INTO `users_management` (`id`, `name`, `email`, `address`, `dob`, `age`, `status`, `education`, `pincode`, `profile_pic`, `country`, `city`, `created_at`, `updated_at`) VALUES
	(1, 'Srinivasan', 'srinivasan@gmail.com', 'Jakkampudi', '1995-02-03', 27, 0, 'Graduation', '520012', '19008.jpg', 'India', 'Chennai', '2022-04-03 19:17:57', '2022-04-03 19:46:53'),
	(2, 'Bala M', 'bala@gmail.com', 'Madurai - 625001', '1997-08-03', 25, 1, 'Post Graduation', '625001', '23776.jpg', 'India', 'Madurai', '2022-04-03 19:46:34', '2022-04-03 20:04:21');
/*!40000 ALTER TABLE `users_management` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
