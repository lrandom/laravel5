/*
 Navicat Premium Data Transfer

 Source Server         : sail-localhost
 Source Server Type    : MySQL
 Source Server Version : 80032
 Source Host           : localhost:3306
 Source Schema         : laravel5

 Target Server Type    : MySQL
 Target Server Version : 80032
 File Encoding         : 65001

 Date: 21/07/2023 21:02:26
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for actor_films
-- ----------------------------
DROP TABLE IF EXISTS `actor_films`;
CREATE TABLE `actor_films` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `actor_id` int NOT NULL,
  `film_id` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of actor_films
-- ----------------------------
BEGIN;
INSERT INTO `actor_films` VALUES (1, 1, 2, NULL, NULL);
INSERT INTO `actor_films` VALUES (2, 1, 3, NULL, NULL);
INSERT INTO `actor_films` VALUES (3, 5, 2, NULL, NULL);
INSERT INTO `actor_films` VALUES (4, 4, 1, NULL, NULL);
INSERT INTO `actor_films` VALUES (5, 2, 1, NULL, NULL);
INSERT INTO `actor_films` VALUES (6, 6, 3, NULL, NULL);
COMMIT;

-- ----------------------------
-- Table structure for actors
-- ----------------------------
DROP TABLE IF EXISTS `actors`;
CREATE TABLE `actors` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of actors
-- ----------------------------
BEGIN;
INSERT INTO `actors` VALUES (1, 'Lý Liên Kiệt', NULL, NULL);
INSERT INTO `actors` VALUES (2, 'Chân Tử Đan', NULL, NULL);
INSERT INTO `actors` VALUES (3, 'Châu Tinh Trì', NULL, NULL);
INSERT INTO `actors` VALUES (4, 'Ngô Kinh', NULL, NULL);
INSERT INTO `actors` VALUES (5, 'Dương Tử Quỳnh', NULL, NULL);
INSERT INTO `actors` VALUES (6, 'Thành Long', NULL, NULL);
COMMIT;

-- ----------------------------
-- Table structure for categories
-- ----------------------------
DROP TABLE IF EXISTS `categories`;
CREATE TABLE `categories` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `parent_id` int NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `path` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=136 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of categories
-- ----------------------------
BEGIN;
INSERT INTO `categories` VALUES (5, 'Điện Thoại', 0, '2023-07-10 12:57:29', '2023-07-10 12:57:29', NULL, NULL);
INSERT INTO `categories` VALUES (6, 'Máy tính', 0, '2023-07-10 12:57:29', '2023-07-10 12:57:29', NULL, NULL);
INSERT INTO `categories` VALUES (7, 'Điện Lạnh', 0, '2023-07-10 12:57:29', '2023-07-10 12:57:29', NULL, NULL);
COMMIT;

-- ----------------------------
-- Table structure for failed_jobs
-- ----------------------------
DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE `failed_jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of failed_jobs
-- ----------------------------
BEGIN;
COMMIT;

-- ----------------------------
-- Table structure for films
-- ----------------------------
DROP TABLE IF EXISTS `films`;
CREATE TABLE `films` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of films
-- ----------------------------
BEGIN;
INSERT INTO `films` VALUES (1, 'Ngòi nổ', NULL, NULL);
INSERT INTO `films` VALUES (2, 'Xác ướp Ai Cập', NULL, NULL);
INSERT INTO `films` VALUES (3, 'Kung Fu', NULL, NULL);
INSERT INTO `films` VALUES (4, 'Thần Ăn', NULL, NULL);
INSERT INTO `films` VALUES (5, 'Tuyệt Đỉnh Kung Fu', NULL, NULL);
INSERT INTO `films` VALUES (6, 'Any where, Any Time', NULL, NULL);
COMMIT;

-- ----------------------------
-- Table structure for migrations
-- ----------------------------
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of migrations
-- ----------------------------
BEGIN;
INSERT INTO `migrations` VALUES (6, '2014_10_12_000000_create_users_table', 1);
INSERT INTO `migrations` VALUES (7, '2014_10_12_100000_create_password_reset_tokens_table', 1);
INSERT INTO `migrations` VALUES (8, '2019_08_19_000000_create_failed_jobs_table', 1);
INSERT INTO `migrations` VALUES (9, '2019_12_14_000001_create_personal_access_tokens_table', 1);
INSERT INTO `migrations` VALUES (13, '2023_07_10_122214_create_category_table', 2);
INSERT INTO `migrations` VALUES (14, '2023_07_10_123452_alter_category_table_add_path_column', 2);
INSERT INTO `migrations` VALUES (15, '2023_07_10_131819_create_products_table', 3);
INSERT INTO `migrations` VALUES (17, '2023_07_17_122131_create_orders_table', 4);
INSERT INTO `migrations` VALUES (18, '2023_07_17_131139_alter_table_category_add_soft_delete', 5);
INSERT INTO `migrations` VALUES (19, '2023_07_21_122816_create_user_infos_table', 6);
INSERT INTO `migrations` VALUES (20, '2023_07_21_134345_create_films_table', 7);
INSERT INTO `migrations` VALUES (21, '2023_07_21_134402_create_actors_table', 7);
INSERT INTO `migrations` VALUES (22, '2023_07_21_134545_create_table_actor_films', 7);
COMMIT;

-- ----------------------------
-- Table structure for orders
-- ----------------------------
DROP TABLE IF EXISTS `orders`;
CREATE TABLE `orders` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of orders
-- ----------------------------
BEGIN;
COMMIT;

-- ----------------------------
-- Table structure for password_reset_tokens
-- ----------------------------
DROP TABLE IF EXISTS `password_reset_tokens`;
CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of password_reset_tokens
-- ----------------------------
BEGIN;
COMMIT;

-- ----------------------------
-- Table structure for personal_access_tokens
-- ----------------------------
DROP TABLE IF EXISTS `personal_access_tokens`;
CREATE TABLE `personal_access_tokens` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of personal_access_tokens
-- ----------------------------
BEGIN;
COMMIT;

-- ----------------------------
-- Table structure for products
-- ----------------------------
DROP TABLE IF EXISTS `products`;
CREATE TABLE `products` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=101 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of products
-- ----------------------------
BEGIN;
INSERT INTO `products` VALUES (1, 'Iphone 11 Pro Max', 'nesciunt-in-aliquam-quasi-est-voluptas-consectetur-et-pariatur', 5, '2023-07-10 13:21:00', '2023-07-10 13:21:00');
INSERT INTO `products` VALUES (2, 'Iphone 12 Pro Max', 'quod-sit-non-esse-laudantium-quas-repudiandae-ipsa', 5, '2023-07-10 13:21:00', '2023-07-10 13:21:00');
INSERT INTO `products` VALUES (3, 'SamSung Galaxy S1', 'suscipit-omnis-laboriosam-deserunt-illo-aut-quis', 5, '2023-07-10 13:21:00', '2023-07-10 13:21:00');
INSERT INTO `products` VALUES (4, 'MacBook Air M1 2021', 'voluptas-ut-numquam-odit-necessitatibus-placeat', 6, '2023-07-10 13:21:00', '2023-07-10 13:21:00');
INSERT INTO `products` VALUES (5, 'Macbook Pro M2 2023', 'et-aut-ab-aperiam-dolores', 6, '2023-07-10 13:21:00', '2023-07-10 13:21:00');
INSERT INTO `products` VALUES (6, 'Dell XSP ', 'numquam-magnam-est-quibusdam-eligendi', 6, '2023-07-10 13:21:00', '2023-07-10 13:21:00');
INSERT INTO `products` VALUES (7, 'Điều hoà Daikin 9000BTU', 'eum-dolore-est-excepturi-vel-odit-est', 7, '2023-07-10 13:21:00', '2023-07-10 13:21:00');
INSERT INTO `products` VALUES (8, 'Tủ lạnh Panasonic', 'ipsam-et-quam-molestias', 7, '2023-07-10 13:21:00', '2023-07-10 13:21:00');
COMMIT;

-- ----------------------------
-- Table structure for user_infos
-- ----------------------------
DROP TABLE IF EXISTS `user_infos`;
CREATE TABLE `user_infos` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `age` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=51 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of user_infos
-- ----------------------------
BEGIN;
INSERT INTO `user_infos` VALUES (1, 11, '7589 Larkin Creek Suite 269\nKubview, MA 02840', '40', '+13172216738', '2023-07-21 12:31:41', '2023-07-21 12:31:41');
INSERT INTO `user_infos` VALUES (2, 37, '382 Cartwright Camp Suite 156\nNew Lorna, WY 64973-8512', '49', '+1 (669) 949-4551', '2023-07-21 12:31:41', '2023-07-21 12:31:41');
INSERT INTO `user_infos` VALUES (3, 40, '3958 Lubowitz Port Suite 906\nNew Bud, UT 03398', '21', '+1-570-644-6983', '2023-07-21 12:31:41', '2023-07-21 12:31:41');
INSERT INTO `user_infos` VALUES (4, 29, '61523 Rosie Turnpike\nMillerport, NJ 42916-9937', '47', '+1 (781) 483-5290', '2023-07-21 12:31:41', '2023-07-21 12:31:41');
INSERT INTO `user_infos` VALUES (5, 43, '7879 Leila Locks Suite 407\nLeannonview, SD 03264-5723', '59', '+1.351.256.3307', '2023-07-21 12:31:41', '2023-07-21 12:31:41');
INSERT INTO `user_infos` VALUES (6, 17, '70846 Lamar Union\nMarcosfort, RI 38486-7960', '42', '+1.701.561.6235', '2023-07-21 12:31:41', '2023-07-21 12:31:41');
INSERT INTO `user_infos` VALUES (7, 3, '2880 Kub Highway\nGibsonside, KY 42120', '57', '1-831-932-4580', '2023-07-21 12:31:41', '2023-07-21 12:31:41');
INSERT INTO `user_infos` VALUES (8, 7, '9082 Kirsten Fords Apt. 068\nWest Daytonton, FL 27996-1508', '54', '+18623508068', '2023-07-21 12:31:41', '2023-07-21 12:31:41');
COMMIT;

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of users
-- ----------------------------
BEGIN;
INSERT INTO `users` VALUES (1, 'Owen Weber', 'dickens.lurline@example.org', '2023-07-21 12:33:57', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'tF8pUE9Wcu', '2023-07-21 12:33:57', '2023-07-21 12:33:57');
INSERT INTO `users` VALUES (2, 'Sylvester Balistreri', 'schultz.imani@example.org', '2023-07-21 12:33:57', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'N6MdkKNem1', '2023-07-21 12:33:57', '2023-07-21 12:33:57');
INSERT INTO `users` VALUES (3, 'Jordane Turner', 'tatum.shields@example.net', '2023-07-21 12:33:57', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'TokTQ9unnb', '2023-07-21 12:33:57', '2023-07-21 12:33:57');
INSERT INTO `users` VALUES (4, 'Wiley Aufderhar I', 'litzy59@example.net', '2023-07-21 12:33:57', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '1jmC2VjjQd', '2023-07-21 12:33:57', '2023-07-21 12:33:57');
INSERT INTO `users` VALUES (5, 'Deangelo Thiel', 'atreutel@example.com', '2023-07-21 12:33:57', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'ivHxKBbxvy', '2023-07-21 12:33:57', '2023-07-21 12:33:57');
INSERT INTO `users` VALUES (6, 'Ms. Nikki Pouros DDS', 'conroy.ulises@example.org', '2023-07-21 12:33:57', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'fTDmMhjsES', '2023-07-21 12:33:57', '2023-07-21 12:33:57');
INSERT INTO `users` VALUES (7, 'Kylie DuBuque', 'charley.frami@example.net', '2023-07-21 12:33:57', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'vtZbrM0gAa', '2023-07-21 12:33:57', '2023-07-21 12:33:57');
INSERT INTO `users` VALUES (8, 'Kenya Willms', 'margie.okon@example.com', '2023-07-21 12:33:57', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'hIejdrzSXP', '2023-07-21 12:33:57', '2023-07-21 12:33:57');
INSERT INTO `users` VALUES (9, 'Andy Cartwright', 'savannah18@example.com', '2023-07-21 12:33:57', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '9Mk0KP1PjK', '2023-07-21 12:33:57', '2023-07-21 12:33:57');
INSERT INTO `users` VALUES (10, 'Bailey Legros', 'leffler.vincenza@example.com', '2023-07-21 12:33:57', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'ZM9lYMc0t0', '2023-07-21 12:33:57', '2023-07-21 12:33:57');
COMMIT;

SET FOREIGN_KEY_CHECKS = 1;
