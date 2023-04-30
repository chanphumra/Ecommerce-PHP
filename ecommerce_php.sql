-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 18, 2023 at 01:03 PM
-- Server version: 8.0.31
-- PHP Version: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecommerce_php`
--

-- --------------------------------------------------------

--
-- Table structure for table `about_us`
--

DROP TABLE IF EXISTS `about_us`;
CREATE TABLE IF NOT EXISTS `about_us` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `position` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `description` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `modified_at` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `modified_at` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `password`, `created_at`, `modified_at`) VALUES
(1, 'Bazaar Shop', 'bazaar.shop.cambodia@gmail.com', 'admin123', '2023-04-08 13:27:26', '2023-04-08 13:27:28');

-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

DROP TABLE IF EXISTS `banner`;
CREATE TABLE IF NOT EXISTS `banner` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `text` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `link` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL DEFAULT '#',
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `enable` bigint DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `modified_at` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

DROP TABLE IF EXISTS `cart`;
CREATE TABLE IF NOT EXISTS `cart` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `cus_id` bigint UNSIGNED NOT NULL,
  PRIMARY KEY (`id`,`cus_id`) USING BTREE,
  KEY `cus_id` (`cus_id`) USING BTREE,
  KEY `id` (`id`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `cart_details`
--

DROP TABLE IF EXISTS `cart_details`;
CREATE TABLE IF NOT EXISTS `cart_details` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `cart_id` bigint UNSIGNED NOT NULL,
  `p_id` bigint UNSIGNED NOT NULL,
  `size` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT 'none',
  `qty` bigint NOT NULL,
  `total` decimal(10,2) NOT NULL,
  `created_at` date DEFAULT NULL,
  `modified_at` date DEFAULT NULL,
  PRIMARY KEY (`id`,`cart_id`,`p_id`) USING BTREE,
  KEY `cart_id` (`cart_id`) USING BTREE,
  KEY `p_id` (`p_id`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `chat`
--

DROP TABLE IF EXISTS `chat`;
CREATE TABLE IF NOT EXISTS `chat` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `cus_id` bigint DEFAULT NULL,
  `message` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `sender` int DEFAULT '0',
  `chat_at` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=58 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `chat`
--

INSERT INTO `chat` (`id`, `cus_id`, `message`, `sender`, `chat_at`) VALUES
(23, 3, '<b class=\"mb-3\">Summury Order #79</b>\r\n                <span class=\"w-100 mb-1 d-flex justify-content-between gap-3 align-items-center\">\r\n                    <span class=\"w-100 d-flex gap-2 align-items-center\">\r\n                        <img class=\"rounded-0\" src=\"admin/uploads/product/1679847970873787191a.png\" alt=\"\" style=\"width: 30px; height: 30px; object-fit: cover;\">\r\n                        <span class=\"fs--1 text-truncate\" style=\"width: 100px;\">T-shirt women</span>\r\n                    </span>\r\n                    <span class=\"fs--1\">x1</span>\r\n                    <span class=\"fs--1\">$12</span>\r\n                </span>\r\n            \r\n                <span class=\"w-100 mb-1 d-flex justify-content-between gap-3 align-items-center\">\r\n                    <span class=\"w-100 d-flex gap-2 align-items-center\">\r\n                        <img class=\"rounded-0\" src=\"admin/uploads/product/16797644358041520841.2.png\" alt=\"\" style=\"width: 30px; height: 30px; object-fit: cover;\">\r\n                        <span class=\"fs--1 text-truncate\" style=\"width: 100px;\">Product2</span>\r\n                    </span>\r\n                    <span class=\"fs--1\">x2</span>\r\n                    <span class=\"fs--1\">$22</span>\r\n                </span>\r\n            \r\n            <span class=\"w-100 mt-2 pt-2\" style=\"border-top: 0.01rem dashed\">\r\n                <span class=\"w-100 d-flex justify-content-between align-items-center\">\r\n                    <span class=\"fw-semibold\">Subtotal :</span>\r\n                    <span class=\"fw-semibold\">$56</span>\r\n                </span>\r\n                <span class=\"w-100 d-flex justify-content-between align-items-center\">\r\n                    <span class=\"fw-semibold\">Discount :</span>\r\n                    <span class=\"text-danger fw-semibold\">-$5.60</span>\r\n                </span>\r\n                <span class=\"w-100 d-flex justify-content-between align-items-center\">\r\n                    <span class=\"fw-semibold\">Total :</span>\r\n                    <span class=\"fw-semibold\">$50.4</span>\r\n                </span>\r\n            </span>\r\n        ', 1, '2023-04-03 20:49:18'),
(24, 3, 'thank admin', 0, '2023-04-03 20:49:56'),
(25, 3, 'how are you?', 0, '2023-04-03 20:50:09'),
(26, 3, 'rek mes hah', 0, '2023-04-03 20:50:15'),
(27, 3, 'ah jm ot rp tt😏😏', 0, '2023-04-03 20:50:37'),
(28, 3, 'loy nah ah loy ot rp anh', 0, '2023-04-03 20:51:34'),
(29, 3, 'hg jam merl tv anh stop buy hg muy🥹', 0, '2023-04-03 20:52:24'),
(30, 3, '🚎🚎🚎🚎🚎', 0, '2023-04-03 20:53:06'),
(31, 5, '<b class=\"mb-3\">Summury Order #80</b>\r\n                <span class=\"w-100 mb-1 d-flex justify-content-between gap-3 align-items-center\">\r\n                    <span class=\"w-100 d-flex gap-2 align-items-center\">\r\n                        <img class=\"rounded-0\" src=\"admin/uploads/product/1679847970873787191a.png\" alt=\"\" style=\"width: 30px; height: 30px; object-fit: cover;\">\r\n                        <span class=\"fs--1 text-truncate\" style=\"width: 100px;\">T-shirt women</span>\r\n                    </span>\r\n                    <span class=\"fs--1\">x1</span>\r\n                    <span class=\"fs--1\">$12</span>\r\n                </span>\r\n            \r\n            <span class=\"w-100 mt-2 pt-2\" style=\"border-top: 0.01rem dashed\">\r\n                <span class=\"w-100 d-flex justify-content-between align-items-center\">\r\n                    <span class=\"fw-semibold\">Subtotal :</span>\r\n                    <span class=\"fw-semibold\">$12</span>\r\n                </span>\r\n                <span class=\"w-100 d-flex justify-content-between align-items-center\">\r\n                    <span class=\"fw-semibold\">Discount :</span>\r\n                    <span class=\"text-danger fw-semibold\">-$1.20</span>\r\n                </span>\r\n                <span class=\"w-100 d-flex justify-content-between align-items-center\">\r\n                    <span class=\"fw-semibold\">Total :</span>\r\n                    <span class=\"fw-semibold\">$10.8</span>\r\n                </span>\r\n            </span>\r\n        ', 1, '2023-04-03 21:27:33'),
(32, 5, '<b class=\"mb-3\">Summury Order #81</b>\r\n                <span class=\"w-100 mb-1 d-flex justify-content-between gap-3 align-items-center\">\r\n                    <span class=\"w-100 d-flex gap-2 align-items-center\">\r\n                        <img class=\"rounded-0\" src=\"admin/uploads/product/16797644358041520841.2.png\" alt=\"\" style=\"width: 30px; height: 30px; object-fit: cover;\">\r\n                        <span class=\"fs--1 text-truncate\" style=\"width: 100px;\">Product2</span>\r\n                    </span>\r\n                    <span class=\"fs--1\">x1</span>\r\n                    <span class=\"fs--1\">$22</span>\r\n                </span>\r\n            \r\n            <span class=\"w-100 mt-2 pt-2\" style=\"border-top: 0.01rem dashed\">\r\n                <span class=\"w-100 d-flex justify-content-between align-items-center\">\r\n                    <span class=\"fw-semibold\">Subtotal :</span>\r\n                    <span class=\"fw-semibold\">$22</span>\r\n                </span>\r\n                <span class=\"w-100 d-flex justify-content-between align-items-center\">\r\n                    <span class=\"fw-semibold\">Discount :</span>\r\n                    <span class=\"text-danger fw-semibold\">-$2.20</span>\r\n                </span>\r\n                <span class=\"w-100 d-flex justify-content-between align-items-center\">\r\n                    <span class=\"fw-semibold\">Total :</span>\r\n                    <span class=\"fw-semibold\">$19.8</span>\r\n                </span>\r\n            </span>\r\n        ', 1, '2023-04-03 21:28:54'),
(33, 3, '<b class=\"mb-3\">Summury Order #82</b>\r\n                <span class=\"w-100 mb-1 d-flex justify-content-between gap-3 align-items-center\">\r\n                    <span class=\"w-100 d-flex gap-2 align-items-center\">\r\n                        <img class=\"rounded-0\" src=\"admin/uploads/product/1679847970873787191a.png\" alt=\"\" style=\"width: 30px; height: 30px; object-fit: cover;\">\r\n                        <span class=\"fs--1 text-truncate\" style=\"width: 100px;\">T-shirt women</span>\r\n                    </span>\r\n                    <span class=\"fs--1\">x1</span>\r\n                    <span class=\"fs--1\">$12</span>\r\n                </span>\r\n            \r\n            <span class=\"w-100 mt-2 pt-2\" style=\"border-top: 0.01rem dashed\">\r\n                <span class=\"w-100 d-flex justify-content-between align-items-center\">\r\n                    <span class=\"fw-semibold\">Subtotal :</span>\r\n                    <span class=\"fw-semibold\">$12</span>\r\n                </span>\r\n                <span class=\"w-100 d-flex justify-content-between align-items-center\">\r\n                    <span class=\"fw-semibold\">Discount :</span>\r\n                    <span class=\"text-danger fw-semibold\">-$1.20</span>\r\n                </span>\r\n                <span class=\"w-100 d-flex justify-content-between align-items-center\">\r\n                    <span class=\"fw-semibold\">Total :</span>\r\n                    <span class=\"fw-semibold\">$10.8</span>\r\n                </span>\r\n            </span>\r\n        ', 1, '2023-04-03 21:29:51'),
(34, 3, '<b class=\"mb-3\">Summury Order #83</b>\r\n                <span class=\"w-100 mb-1 d-flex justify-content-between gap-3 align-items-center\">\r\n                    <span class=\"w-100 d-flex gap-2 align-items-center\">\r\n                        <img class=\"rounded-0\" src=\"admin/uploads/product/16797644358041520841.2.png\" alt=\"\" style=\"width: 30px; height: 30px; object-fit: cover;\">\r\n                        <span class=\"fs--1 text-truncate\" style=\"width: 100px;\">Product2</span>\r\n                    </span>\r\n                    <span class=\"fs--1\">x1</span>\r\n                    <span class=\"fs--1\">$22</span>\r\n                </span>\r\n            \r\n                <span class=\"w-100 mb-1 d-flex justify-content-between gap-3 align-items-center\">\r\n                    <span class=\"w-100 d-flex gap-2 align-items-center\">\r\n                        <img class=\"rounded-0\" src=\"admin/uploads/product/1679847970873787191a.png\" alt=\"\" style=\"width: 30px; height: 30px; object-fit: cover;\">\r\n                        <span class=\"fs--1 text-truncate\" style=\"width: 100px;\">T-shirt women</span>\r\n                    </span>\r\n                    <span class=\"fs--1\">x1</span>\r\n                    <span class=\"fs--1\">$12</span>\r\n                </span>\r\n            \r\n            <span class=\"w-100 mt-2 pt-2\" style=\"border-top: 0.01rem dashed\">\r\n                <span class=\"w-100 d-flex justify-content-between align-items-center\">\r\n                    <span class=\"fw-semibold\">Subtotal :</span>\r\n                    <span class=\"fw-semibold\">$34</span>\r\n                </span>\r\n                <span class=\"w-100 d-flex justify-content-between align-items-center\">\r\n                    <span class=\"fw-semibold\">Discount :</span>\r\n                    <span class=\"text-danger fw-semibold\">-$3.40</span>\r\n                </span>\r\n                <span class=\"w-100 d-flex justify-content-between align-items-center\">\r\n                    <span class=\"fw-semibold\">Total :</span>\r\n                    <span class=\"fw-semibold\">$30.6</span>\r\n                </span>\r\n            </span>\r\n        ', 1, '2023-04-03 21:31:43'),
(35, 3, '<b class=\"mb-3\">Summury Order #84</b>\r\n                <span class=\"w-100 mb-1 d-flex justify-content-between gap-3 align-items-center\">\r\n                    <span class=\"w-100 d-flex gap-2 align-items-center\">\r\n                        <img class=\"rounded-0\" src=\"admin/uploads/product/1679847970873787191a.png\" alt=\"\" style=\"width: 30px; height: 30px; object-fit: cover;\">\r\n                        <span class=\"fs--1 text-truncate\" style=\"width: 100px;\">T-shirt women</span>\r\n                    </span>\r\n                    <span class=\"fs--1\">x1</span>\r\n                    <span class=\"fs--1\">$12</span>\r\n                </span>\r\n            \r\n            <span class=\"w-100 mt-2 pt-2\" style=\"border-top: 0.01rem dashed\">\r\n                <span class=\"w-100 d-flex justify-content-between align-items-center\">\r\n                    <span class=\"fw-semibold\">Subtotal :</span>\r\n                    <span class=\"fw-semibold\">$12</span>\r\n                </span>\r\n                <span class=\"w-100 d-flex justify-content-between align-items-center\">\r\n                    <span class=\"fw-semibold\">Discount :</span>\r\n                    <span class=\"text-danger fw-semibold\">-$1.20</span>\r\n                </span>\r\n                <span class=\"w-100 d-flex justify-content-between align-items-center\">\r\n                    <span class=\"fw-semibold\">Total :</span>\r\n                    <span class=\"fw-semibold\">$10.8</span>\r\n                </span>\r\n            </span>\r\n        ', 1, '2023-04-03 21:32:31'),
(36, 3, '<b class=\"mb-3\">Summury Order #85</b>\r\n                <span class=\"w-100 mb-1 d-flex justify-content-between gap-3 align-items-center\">\r\n                    <span class=\"w-100 d-flex gap-2 align-items-center\">\r\n                        <img class=\"rounded-0\" src=\"admin/uploads/product/1679847970873787191a.png\" alt=\"\" style=\"width: 30px; height: 30px; object-fit: cover;\">\r\n                        <span class=\"fs--1 text-truncate\" style=\"width: 100px;\">T-shirt women</span>\r\n                    </span>\r\n                    <span class=\"fs--1\">x1</span>\r\n                    <span class=\"fs--1\">$12</span>\r\n                </span>\r\n            \r\n                <span class=\"w-100 mb-1 d-flex justify-content-between gap-3 align-items-center\">\r\n                    <span class=\"w-100 d-flex gap-2 align-items-center\">\r\n                        <img class=\"rounded-0\" src=\"admin/uploads/product/16797644358041520841.2.png\" alt=\"\" style=\"width: 30px; height: 30px; object-fit: cover;\">\r\n                        <span class=\"fs--1 text-truncate\" style=\"width: 100px;\">Product2</span>\r\n                    </span>\r\n                    <span class=\"fs--1\">x1</span>\r\n                    <span class=\"fs--1\">$22</span>\r\n                </span>\r\n            \r\n            <span class=\"w-100 mt-2 pt-2\" style=\"border-top: 0.01rem dashed\">\r\n                <span class=\"w-100 d-flex justify-content-between align-items-center\">\r\n                    <span class=\"fw-semibold\">Subtotal :</span>\r\n                    <span class=\"fw-semibold\">$34</span>\r\n                </span>\r\n                <span class=\"w-100 d-flex justify-content-between align-items-center\">\r\n                    <span class=\"fw-semibold\">Discount :</span>\r\n                    <span class=\"text-danger fw-semibold\">-$3.40</span>\r\n                </span>\r\n                <span class=\"w-100 d-flex justify-content-between align-items-center\">\r\n                    <span class=\"fw-semibold\">Total :</span>\r\n                    <span class=\"fw-semibold\">$30.6</span>\r\n                </span>\r\n            </span>\r\n        ', 1, '2023-04-03 21:33:26'),
(37, 3, '<b class=\"mb-3\">Summury Order #86</b>\r\n                <span class=\"w-100 mb-1 d-flex justify-content-between gap-3 align-items-center\">\r\n                    <span class=\"w-100 d-flex gap-2 align-items-center\">\r\n                        <img class=\"rounded-0\" src=\"admin/uploads/product/16797644358041520841.2.png\" alt=\"\" style=\"width: 30px; height: 30px; object-fit: cover;\">\r\n                        <span class=\"fs--1 text-truncate\" style=\"width: 100px;\">Product2</span>\r\n                    </span>\r\n                    <span class=\"fs--1\">x1</span>\r\n                    <span class=\"fs--1\">$22</span>\r\n                </span>\r\n            \r\n            <span class=\"w-100 mt-2 pt-2\" style=\"border-top: 0.01rem dashed\">\r\n                <span class=\"w-100 d-flex justify-content-between align-items-center\">\r\n                    <span class=\"fw-semibold\">Subtotal :</span>\r\n                    <span class=\"fw-semibold\">$22</span>\r\n                </span>\r\n                <span class=\"w-100 d-flex justify-content-between align-items-center\">\r\n                    <span class=\"fw-semibold\">Discount :</span>\r\n                    <span class=\"text-danger fw-semibold\">-$2.20</span>\r\n                </span>\r\n                <span class=\"w-100 d-flex justify-content-between align-items-center\">\r\n                    <span class=\"fw-semibold\">Total :</span>\r\n                    <span class=\"fw-semibold\">$19.8</span>\r\n                </span>\r\n            </span>\r\n        ', 1, '2023-04-03 21:34:15'),
(38, 3, 'thank you', 0, '2023-04-03 21:38:07'),
(39, 3, '<b class=\"mb-3\">Summury Order #87</b>\r\n            <span class=\"w-100 mt-2 pt-2\" style=\"border-top: 0.01rem dashed\">\r\n                <span class=\"w-100 d-flex justify-content-between align-items-center\">\r\n                    <span class=\"fw-semibold\">Subtotal :</span>\r\n                    <span class=\"fw-semibold\">$0</span>\r\n                </span>\r\n                <span class=\"w-100 d-flex justify-content-between align-items-center\">\r\n                    <span class=\"fw-semibold\">Discount :</span>\r\n                    <span class=\"text-danger fw-semibold\">-$0.00</span>\r\n                </span>\r\n                <span class=\"w-100 d-flex justify-content-between align-items-center\">\r\n                    <span class=\"fw-semibold\">Total :</span>\r\n                    <span class=\"fw-semibold\">$0</span>\r\n                </span>\r\n            </span>\r\n        ', 1, '2023-04-03 21:38:27'),
(40, 3, '<b class=\"mb-3\">Summury Order #88</b>\r\n                <span class=\"w-100 mb-1 d-flex justify-content-between gap-3 align-items-center\">\r\n                    <span class=\"w-100 d-flex gap-2 align-items-center\">\r\n                        <img class=\"rounded-0\" src=\"admin/uploads/product/1679847970873787191a.png\" alt=\"\" style=\"width: 30px; height: 30px; object-fit: cover;\">\r\n                        <span class=\"fs--1 text-truncate\" style=\"width: 100px;\">T-shirt women</span>\r\n                    </span>\r\n                    <span class=\"fs--1\">x1</span>\r\n                    <span class=\"fs--1\">$12</span>\r\n                </span>\r\n            \r\n                <span class=\"w-100 mb-1 d-flex justify-content-between gap-3 align-items-center\">\r\n                    <span class=\"w-100 d-flex gap-2 align-items-center\">\r\n                        <img class=\"rounded-0\" src=\"admin/uploads/product/16797644358041520841.2.png\" alt=\"\" style=\"width: 30px; height: 30px; object-fit: cover;\">\r\n                        <span class=\"fs--1 text-truncate\" style=\"width: 100px;\">Product2</span>\r\n                    </span>\r\n                    <span class=\"fs--1\">x1</span>\r\n                    <span class=\"fs--1\">$22</span>\r\n                </span>\r\n            \r\n            <span class=\"w-100 mt-2 pt-2\" style=\"border-top: 0.01rem dashed\">\r\n                <span class=\"w-100 d-flex justify-content-between align-items-center\">\r\n                    <span class=\"fw-semibold\">Subtotal :</span>\r\n                    <span class=\"fw-semibold\">$34</span>\r\n                </span>\r\n                <span class=\"w-100 d-flex justify-content-between align-items-center\">\r\n                    <span class=\"fw-semibold\">Discount :</span>\r\n                    <span class=\"text-danger fw-semibold\">-$3.40</span>\r\n                </span>\r\n                <span class=\"w-100 d-flex justify-content-between align-items-center\">\r\n                    <span class=\"fw-semibold\">Total :</span>\r\n                    <span class=\"fw-semibold\">$30.6</span>\r\n                </span>\r\n            </span>\r\n        ', 1, '2023-04-03 21:43:20'),
(41, 3, '<b class=\"mb-3\">Summury Order #89</b>\r\n                <span class=\"w-100 mb-1 d-flex justify-content-between gap-3 align-items-center\">\r\n                    <span class=\"w-100 d-flex gap-2 align-items-center\">\r\n                        <img class=\"rounded-0\" src=\"admin/uploads/product/1679847970873787191a.png\" alt=\"\" style=\"width: 30px; height: 30px; object-fit: cover;\">\r\n                        <span class=\"fs--1 text-truncate\" style=\"width: 100px;\">T-shirt women</span>\r\n                    </span>\r\n                    <span class=\"fs--1\">x1</span>\r\n                    <span class=\"fs--1\">$12</span>\r\n                </span>\r\n            \r\n                <span class=\"w-100 mb-1 d-flex justify-content-between gap-3 align-items-center\">\r\n                    <span class=\"w-100 d-flex gap-2 align-items-center\">\r\n                        <img class=\"rounded-0\" src=\"admin/uploads/product/16797644358041520841.2.png\" alt=\"\" style=\"width: 30px; height: 30px; object-fit: cover;\">\r\n                        <span class=\"fs--1 text-truncate\" style=\"width: 100px;\">Product2</span>\r\n                    </span>\r\n                    <span class=\"fs--1\">x1</span>\r\n                    <span class=\"fs--1\">$22</span>\r\n                </span>\r\n            \r\n            <span class=\"w-100 mt-2 pt-2\" style=\"border-top: 0.01rem dashed\">\r\n                <span class=\"w-100 d-flex justify-content-between align-items-center\">\r\n                    <span class=\"fw-semibold\">Subtotal :</span>\r\n                    <span class=\"fw-semibold\">$34</span>\r\n                </span>\r\n                <span class=\"w-100 d-flex justify-content-between align-items-center\">\r\n                    <span class=\"fw-semibold\">Discount :</span>\r\n                    <span class=\"text-danger fw-semibold\">-$3.40</span>\r\n                </span>\r\n                <span class=\"w-100 d-flex justify-content-between align-items-center\">\r\n                    <span class=\"fw-semibold\">Total :</span>\r\n                    <span class=\"fw-semibold\">$30.6</span>\r\n                </span>\r\n            </span>\r\n        ', 1, '2023-04-03 21:45:51'),
(42, 3, '<b class=\"mb-3\">Summury Order #90</b>\r\n                <span class=\"w-100 mb-1 d-flex justify-content-between gap-3 align-items-center\">\r\n                    <span class=\"w-100 d-flex gap-2 align-items-center\">\r\n                        <img class=\"rounded-0\" src=\"admin/uploads/product/1679847970873787191a.png\" alt=\"\" style=\"width: 30px; height: 30px; object-fit: cover;\">\r\n                        <span class=\"fs--1 text-truncate\" style=\"width: 100px;\">T-shirt women</span>\r\n                    </span>\r\n                    <span class=\"fs--1\">x1</span>\r\n                    <span class=\"fs--1\">$12</span>\r\n                </span>\r\n            \r\n                <span class=\"w-100 mb-1 d-flex justify-content-between gap-3 align-items-center\">\r\n                    <span class=\"w-100 d-flex gap-2 align-items-center\">\r\n                        <img class=\"rounded-0\" src=\"admin/uploads/product/16797644358041520841.2.png\" alt=\"\" style=\"width: 30px; height: 30px; object-fit: cover;\">\r\n                        <span class=\"fs--1 text-truncate\" style=\"width: 100px;\">Product2</span>\r\n                    </span>\r\n                    <span class=\"fs--1\">x1</span>\r\n                    <span class=\"fs--1\">$22</span>\r\n                </span>\r\n            \r\n            <span class=\"w-100 mt-2 pt-2\" style=\"border-top: 0.01rem dashed\">\r\n                <span class=\"w-100 d-flex justify-content-between align-items-center\">\r\n                    <span class=\"fw-semibold\">Subtotal :</span>\r\n                    <span class=\"fw-semibold\">$34</span>\r\n                </span>\r\n                <span class=\"w-100 d-flex justify-content-between align-items-center\">\r\n                    <span class=\"fw-semibold\">Discount :</span>\r\n                    <span class=\"text-danger fw-semibold\">-$3.40</span>\r\n                </span>\r\n                <span class=\"w-100 d-flex justify-content-between align-items-center\">\r\n                    <span class=\"fw-semibold\">Total :</span>\r\n                    <span class=\"fw-semibold\">$30.6</span>\r\n                </span>\r\n            </span>\r\n        ', 1, '2023-04-03 21:46:55'),
(43, 5, '<b class=\"mb-3\">Summury Order #91</b>\r\n                <span class=\"w-100 mb-1 d-flex justify-content-between gap-3 align-items-center\">\r\n                    <span class=\"w-100 d-flex gap-2 align-items-center\">\r\n                        <img class=\"rounded-0\" src=\"admin/uploads/product/1679847970873787191a.png\" alt=\"\" style=\"width: 30px; height: 30px; object-fit: cover;\">\r\n                        <span class=\"fs--1 text-truncate\" style=\"width: 100px;\">T-shirt women</span>\r\n                    </span>\r\n                    <span class=\"fs--1\">x1</span>\r\n                    <span class=\"fs--1\">$12</span>\r\n                </span>\r\n            \r\n                <span class=\"w-100 mb-1 d-flex justify-content-between gap-3 align-items-center\">\r\n                    <span class=\"w-100 d-flex gap-2 align-items-center\">\r\n                        <img class=\"rounded-0\" src=\"admin/uploads/product/16797644358041520841.2.png\" alt=\"\" style=\"width: 30px; height: 30px; object-fit: cover;\">\r\n                        <span class=\"fs--1 text-truncate\" style=\"width: 100px;\">Product2</span>\r\n                    </span>\r\n                    <span class=\"fs--1\">x1</span>\r\n                    <span class=\"fs--1\">$22</span>\r\n                </span>\r\n            \r\n            <span class=\"w-100 mt-2 pt-2\" style=\"border-top: 0.01rem dashed\">\r\n                <span class=\"w-100 d-flex justify-content-between align-items-center\">\r\n                    <span class=\"fw-semibold\">Subtotal :</span>\r\n                    <span class=\"fw-semibold\">$34</span>\r\n                </span>\r\n                <span class=\"w-100 d-flex justify-content-between align-items-center\">\r\n                    <span class=\"fw-semibold\">Discount :</span>\r\n                    <span class=\"text-danger fw-semibold\">-$3.40</span>\r\n                </span>\r\n                <span class=\"w-100 d-flex justify-content-between align-items-center\">\r\n                    <span class=\"fw-semibold\">Total :</span>\r\n                    <span class=\"fw-semibold\">$30.6</span>\r\n                </span>\r\n            </span>\r\n        ', 1, '2023-04-03 21:49:35'),
(44, 3, '<b class=\"mb-3\">Summury Order #92</b>\r\n                <span class=\"w-100 mb-1 d-flex justify-content-between gap-3 align-items-center\">\r\n                    <span class=\"w-100 d-flex gap-2 align-items-center\">\r\n                        <img class=\"rounded-0\" src=\"admin/uploads/product/1679847970873787191a.png\" alt=\"\" style=\"width: 30px; height: 30px; object-fit: cover;\">\r\n                        <span class=\"fs--1 text-truncate\" style=\"width: 100px;\">T-shirt women</span>\r\n                    </span>\r\n                    <span class=\"fs--1\">x1</span>\r\n                    <span class=\"fs--1\">$12</span>\r\n                </span>\r\n            \r\n                <span class=\"w-100 mb-1 d-flex justify-content-between gap-3 align-items-center\">\r\n                    <span class=\"w-100 d-flex gap-2 align-items-center\">\r\n                        <img class=\"rounded-0\" src=\"admin/uploads/product/16797644358041520841.2.png\" alt=\"\" style=\"width: 30px; height: 30px; object-fit: cover;\">\r\n                        <span class=\"fs--1 text-truncate\" style=\"width: 100px;\">Product2</span>\r\n                    </span>\r\n                    <span class=\"fs--1\">x1</span>\r\n                    <span class=\"fs--1\">$22</span>\r\n                </span>\r\n            \r\n            <span class=\"w-100 mt-2 pt-2\" style=\"border-top: 0.01rem dashed\">\r\n                <span class=\"w-100 d-flex justify-content-between align-items-center\">\r\n                    <span class=\"fw-semibold\">Subtotal :</span>\r\n                    <span class=\"fw-semibold\">$34</span>\r\n                </span>\r\n                <span class=\"w-100 d-flex justify-content-between align-items-center\">\r\n                    <span class=\"fw-semibold\">Discount :</span>\r\n                    <span class=\"text-danger fw-semibold\">-$3.40</span>\r\n                </span>\r\n                <span class=\"w-100 d-flex justify-content-between align-items-center\">\r\n                    <span class=\"fw-semibold\">Total :</span>\r\n                    <span class=\"fw-semibold\">$30.6</span>\r\n                </span>\r\n            </span>\r\n        ', 1, '2023-04-03 21:51:34'),
(45, 5, '<b class=\"mb-3\">Summury Order #93</b>\r\n                <span class=\"w-100 mb-1 d-flex justify-content-between gap-3 align-items-center\">\r\n                    <span class=\"w-100 d-flex gap-2 align-items-center\">\r\n                        <img class=\"rounded-0\" src=\"admin/uploads/product/1679847970873787191a.png\" alt=\"\" style=\"width: 30px; height: 30px; object-fit: cover;\">\r\n                        <span class=\"fs--1 text-truncate\" style=\"width: 100px;\">T-shirt women</span>\r\n                    </span>\r\n                    <span class=\"fs--1\">x4</span>\r\n                    <span class=\"fs--1\">$12</span>\r\n                </span>\r\n            \r\n                <span class=\"w-100 mb-1 d-flex justify-content-between gap-3 align-items-center\">\r\n                    <span class=\"w-100 d-flex gap-2 align-items-center\">\r\n                        <img class=\"rounded-0\" src=\"admin/uploads/product/16797644358041520841.2.png\" alt=\"\" style=\"width: 30px; height: 30px; object-fit: cover;\">\r\n                        <span class=\"fs--1 text-truncate\" style=\"width: 100px;\">Product2</span>\r\n                    </span>\r\n                    <span class=\"fs--1\">x2</span>\r\n                    <span class=\"fs--1\">$22</span>\r\n                </span>\r\n            \r\n            <span class=\"w-100 mt-2 pt-2\" style=\"border-top: 0.01rem dashed\">\r\n                <span class=\"w-100 d-flex justify-content-between align-items-center\">\r\n                    <span class=\"fw-semibold\">Subtotal :</span>\r\n                    <span class=\"fw-semibold\">$92</span>\r\n                </span>\r\n                <span class=\"w-100 d-flex justify-content-between align-items-center\">\r\n                    <span class=\"fw-semibold\">Discount :</span>\r\n                    <span class=\"text-danger fw-semibold\">-$9.20</span>\r\n                </span>\r\n                <span class=\"w-100 d-flex justify-content-between align-items-center\">\r\n                    <span class=\"fw-semibold\">Total :</span>\r\n                    <span class=\"fw-semibold\">$82.8</span>\r\n                </span>\r\n            </span>\r\n        ', 1, '2023-04-03 21:57:23'),
(46, 5, 'thank you', 0, '2023-04-03 22:00:43'),
(47, 5, '<b class=\"mb-3\">Summury Order #94</b>\r\n                <span class=\"w-100 mb-1 d-flex justify-content-between gap-3 align-items-center\">\r\n                    <span class=\"w-100 d-flex gap-2 align-items-center\">\r\n                        <img class=\"rounded-0\" src=\"admin/uploads/product/1679847970873787191a.png\" alt=\"\" style=\"width: 30px; height: 30px; object-fit: cover;\">\r\n                        <span class=\"fs--1 text-truncate\" style=\"width: 100px;\">T-shirt women</span>\r\n                    </span>\r\n                    <span class=\"fs--1\">x1</span>\r\n                    <span class=\"fs--1\">$12</span>\r\n                </span>\r\n            \r\n                <span class=\"w-100 mb-1 d-flex justify-content-between gap-3 align-items-center\">\r\n                    <span class=\"w-100 d-flex gap-2 align-items-center\">\r\n                        <img class=\"rounded-0\" src=\"admin/uploads/product/16797644358041520841.2.png\" alt=\"\" style=\"width: 30px; height: 30px; object-fit: cover;\">\r\n                        <span class=\"fs--1 text-truncate\" style=\"width: 100px;\">Product2</span>\r\n                    </span>\r\n                    <span class=\"fs--1\">x1</span>\r\n                    <span class=\"fs--1\">$22</span>\r\n                </span>\r\n            \r\n            <span class=\"w-100 mt-2 pt-2\" style=\"border-top: 0.01rem dashed\">\r\n                <span class=\"w-100 d-flex justify-content-between align-items-center\">\r\n                    <span class=\"fw-semibold\">Subtotal :</span>\r\n                    <span class=\"fw-semibold\">$34</span>\r\n                </span>\r\n                <span class=\"w-100 d-flex justify-content-between align-items-center\">\r\n                    <span class=\"fw-semibold\">Discount :</span>\r\n                    <span class=\"text-danger fw-semibold\">-$3.40</span>\r\n                </span>\r\n                <span class=\"w-100 d-flex justify-content-between align-items-center\">\r\n                    <span class=\"fw-semibold\">Total :</span>\r\n                    <span class=\"fw-semibold\">$30.6</span>\r\n                </span>\r\n            </span>\r\n        ', 1, '2023-04-03 22:49:27'),
(48, 5, '<b class=\"mb-3\">Summury Order #95</b>\r\n                <span class=\"w-100 mb-1 d-flex justify-content-between gap-3 align-items-center\">\r\n                    <span class=\"w-100 d-flex gap-2 align-items-center\">\r\n                        <img class=\"rounded-0\" src=\"admin/uploads/product/1679847970873787191a.png\" alt=\"\" style=\"width: 30px; height: 30px; object-fit: cover;\">\r\n                        <span class=\"fs--1 text-truncate\" style=\"width: 100px;\">T-shirt women</span>\r\n                    </span>\r\n                    <span class=\"fs--1\">x1</span>\r\n                    <span class=\"fs--1\">$12</span>\r\n                </span>\r\n            \r\n                <span class=\"w-100 mb-1 d-flex justify-content-between gap-3 align-items-center\">\r\n                    <span class=\"w-100 d-flex gap-2 align-items-center\">\r\n                        <img class=\"rounded-0\" src=\"admin/uploads/product/16797644358041520841.2.png\" alt=\"\" style=\"width: 30px; height: 30px; object-fit: cover;\">\r\n                        <span class=\"fs--1 text-truncate\" style=\"width: 100px;\">Product2</span>\r\n                    </span>\r\n                    <span class=\"fs--1\">x1</span>\r\n                    <span class=\"fs--1\">$22</span>\r\n                </span>\r\n            \r\n            <span class=\"w-100 mt-2 pt-2\" style=\"border-top: 0.01rem dashed\">\r\n                <span class=\"w-100 d-flex justify-content-between align-items-center\">\r\n                    <span class=\"fw-semibold\">Subtotal :</span>\r\n                    <span class=\"fw-semibold\">$34</span>\r\n                </span>\r\n                <span class=\"w-100 d-flex justify-content-between align-items-center\">\r\n                    <span class=\"fw-semibold\">Discount :</span>\r\n                    <span class=\"text-danger fw-semibold\">-$3.40</span>\r\n                </span>\r\n                <span class=\"w-100 d-flex justify-content-between align-items-center\">\r\n                    <span class=\"fw-semibold\">Total :</span>\r\n                    <span class=\"fw-semibold\">$30.6</span>\r\n                </span>\r\n            </span>\r\n        ', 1, '2023-04-03 23:01:24'),
(49, 5, 'thank you', 0, '2023-04-04 07:52:04'),
(50, 3, '😒😒😒', 0, '2023-04-04 10:18:35'),
(51, 3, 'hello', 0, '2023-04-04 10:19:29'),
(52, 3, '<b class=\"mb-3\">Summury Order #96</b>\r\n                <span class=\"w-100 mb-1 d-flex justify-content-between gap-3 align-items-center\">\r\n                    <span class=\"w-100 d-flex gap-2 align-items-center\">\r\n                        <img class=\"rounded-0\" src=\"admin/uploads/product/1679847970873787191a.png\" alt=\"\" style=\"width: 30px; height: 30px; object-fit: cover;\">\r\n                        <span class=\"fs--1 text-truncate\" style=\"width: 100px;\">T-shirt women</span>\r\n                    </span>\r\n                    <span class=\"fs--1\">x3</span>\r\n                    <span class=\"fs--1\">$12</span>\r\n                </span>\r\n            \r\n                <span class=\"w-100 mb-1 d-flex justify-content-between gap-3 align-items-center\">\r\n                    <span class=\"w-100 d-flex gap-2 align-items-center\">\r\n                        <img class=\"rounded-0\" src=\"admin/uploads/product/16797644358041520841.2.png\" alt=\"\" style=\"width: 30px; height: 30px; object-fit: cover;\">\r\n                        <span class=\"fs--1 text-truncate\" style=\"width: 100px;\">Product2</span>\r\n                    </span>\r\n                    <span class=\"fs--1\">x1</span>\r\n                    <span class=\"fs--1\">$22</span>\r\n                </span>\r\n            \r\n            <span class=\"w-100 mt-2 pt-2\" style=\"border-top: 0.01rem dashed\">\r\n                <span class=\"w-100 d-flex justify-content-between align-items-center\">\r\n                    <span class=\"fw-semibold\">Subtotal :</span>\r\n                    <span class=\"fw-semibold\">$58</span>\r\n                </span>\r\n                <span class=\"w-100 d-flex justify-content-between align-items-center\">\r\n                    <span class=\"fw-semibold\">Discount :</span>\r\n                    <span class=\"text-danger fw-semibold\">-$5.80</span>\r\n                </span>\r\n                <span class=\"w-100 d-flex justify-content-between align-items-center\">\r\n                    <span class=\"fw-semibold\">Total :</span>\r\n                    <span class=\"fw-semibold\">$52.2</span>\r\n                </span>\r\n            </span>\r\n        ', 1, '2023-04-04 10:21:24'),
(53, 5, 'hi admin', 0, '2023-04-07 01:11:44'),
(54, 3, 'hello chanphumra', 1, '2023-04-08 16:40:03'),
(55, 3, 'hahha🤪', 1, '2023-04-08 16:40:33'),
(56, 5, 'yes hi', 1, '2023-04-08 16:41:01'),
(57, 5, '<b class=\"mb-3\">Summury Order #97</b>\r\n                <span class=\"w-100 mb-1 d-flex justify-content-between gap-3 align-items-center\">\r\n                    <span class=\"w-100 d-flex gap-2 align-items-center\">\r\n                        <img class=\"rounded-0\" src=\"admin/uploads/product/1679847970873787191a.png\" alt=\"\" style=\"width: 30px; height: 30px; object-fit: cover;\">\r\n                        <span class=\"fs--1 text-truncate\" style=\"width: 100px;\">T-shirt women</span>\r\n                    </span>\r\n                    <span class=\"fs--1\">x5</span>\r\n                    <span class=\"fs--1\">$12</span>\r\n                </span>\r\n            \r\n            <span class=\"w-100 mt-2 pt-2\" style=\"border-top: 0.01rem dashed\">\r\n                <span class=\"w-100 d-flex justify-content-between align-items-center\">\r\n                    <span class=\"fw-semibold\">Subtotal :</span>\r\n                    <span class=\"fw-semibold\">$60</span>\r\n                </span>\r\n                <span class=\"w-100 d-flex justify-content-between align-items-center\">\r\n                    <span class=\"fw-semibold\">Discount :</span>\r\n                    <span class=\"text-danger fw-semibold\">-$6.00</span>\r\n                </span>\r\n                <span class=\"w-100 d-flex justify-content-between align-items-center\">\r\n                    <span class=\"fw-semibold\">Total :</span>\r\n                    <span class=\"fw-semibold\">$54</span>\r\n                </span>\r\n            </span>\r\n        ', 1, '2023-04-10 21:54:12');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

DROP TABLE IF EXISTS `customer`;
CREATE TABLE IF NOT EXISTS `customer` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `verify` varchar(5) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT 'normal',
  `telegram_id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `modified_at` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `last_chat` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `footer`
--

DROP TABLE IF EXISTS `footer`;
CREATE TABLE IF NOT EXISTS `footer` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `description` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `text1` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `text2` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `text3` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `text4` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `modified_at` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `main_category`
--

DROP TABLE IF EXISTS `main_category`;
CREATE TABLE IF NOT EXISTS `main_category` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `description` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `modified_at` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `main_category`
--

INSERT INTO `main_category` (`id`, `name`, `description`, `image`, `created_at`, `modified_at`) VALUES
(1, 'Men', 'for men', '167902551310659584273a.png', '2023-03-17 10:58:33', '2023-03-26 17:58:04'),
(2, 'Women', 'for women', '167902621220929093782a.png', '2023-03-17 11:10:12', '2023-03-26 23:27:04');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
CREATE TABLE IF NOT EXISTS `orders` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `cus_id` bigint UNSIGNED NOT NULL,
  `payment_method` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `fullname` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `phone` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `address` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `status` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `total` decimal(10,2) DEFAULT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `modified_at` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`,`cus_id`) USING BTREE,
  KEY `cus_id` (`cus_id`) USING BTREE,
  KEY `id` (`id`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

DROP TABLE IF EXISTS `order_details`;
CREATE TABLE IF NOT EXISTS `order_details` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `o_id` bigint UNSIGNED NOT NULL,
  `p_id` bigint UNSIGNED NOT NULL,
  `qty` bigint NOT NULL,
  PRIMARY KEY (`id`,`o_id`,`p_id`) USING BTREE,
  KEY `o_id` (`o_id`) USING BTREE,
  KEY `p_id` (`p_id`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

DROP TABLE IF EXISTS `product`;
CREATE TABLE IF NOT EXISTS `product` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `sub_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `description` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `sale_price` decimal(10,2) NOT NULL,
  `qty` bigint NOT NULL,
  `discount` decimal(10,2) DEFAULT '0.00',
  `image1` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `image2` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `image3` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `modified_at` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`,`sub_id`) USING BTREE,
  KEY `sub_id` (`sub_id`) USING BTREE,
  KEY `id` (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `sub_id`, `name`, `description`, `price`, `sale_price`, `qty`, `discount`, `image1`, `image2`, `image3`, `created_at`, `modified_at`) VALUES
(2, 3, 'Product2', 'p2', '20.00', '22.00', 77, '15.00', '16797644358041520841.2.png', '167976443516839514721.3.png', '16797644355431211351.png', '2023-03-26 00:13:55', '2023-04-10 12:33:52'),
(3, 5, 'T-shirt women', 'aaa', '10.00', '12.00', 64, '10.00', '1679847970873787191a.png', '167984797010453278381b.png', '16798479707506820731c.png', '2023-03-26 23:26:10', '2023-04-10 21:54:12');

-- --------------------------------------------------------

--
-- Table structure for table `product_review`
--

DROP TABLE IF EXISTS `product_review`;
CREATE TABLE IF NOT EXISTS `product_review` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `cus_id` bigint UNSIGNED NOT NULL,
  `p_id` bigint UNSIGNED NOT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `modified_at` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`,`cus_id`,`p_id`) USING BTREE,
  KEY `cus_id` (`cus_id`) USING BTREE,
  KEY `p_id` (`p_id`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `profile_setting`
--

DROP TABLE IF EXISTS `profile_setting`;
CREATE TABLE IF NOT EXISTS `profile_setting` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `city` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `country` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `phone` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `email` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `created_at` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `modified_at` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `profile_setting`
--

INSERT INTO `profile_setting` (`id`, `name`, `city`, `country`, `phone`, `email`, `image`, `created_at`, `modified_at`) VALUES
(1, 'Bazaar Shop', 'Phnom Penh', 'Cambodia', '+855 965090029', 'bazaar.shop.cambodia@gmail.com', '16808756581766187811logo.png', '2023-04-07 21:22:53', '2023-04-07 21:22:53');

-- --------------------------------------------------------

--
-- Table structure for table `slideshow`
--

DROP TABLE IF EXISTS `slideshow`;
CREATE TABLE IF NOT EXISTS `slideshow` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `text` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `link` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL DEFAULT '#',
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `enable` bigint DEFAULT NULL,
  `orders` bigint DEFAULT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `modified_at` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `slideshow`
--

INSERT INTO `slideshow` (`id`, `title`, `text`, `link`, `image`, `enable`, `orders`, `created_at`, `modified_at`) VALUES
(2, 'Happy Khmer New Year', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut, quisquam maxime. Magni voluptatum officiis fuga?', '#', '16808037901090128089girl1.png', 1, NULL, '2023-04-07 00:36:08', '2023-04-07 09:31:34'),
(3, 'Happy Water Festival', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut, quisquam maxime. Magni voluptatum officiis fuga?', '#', '16809532381801326739girl2.png', 1, NULL, '2023-04-08 18:27:18', '2023-04-08 18:27:18');

-- --------------------------------------------------------

--
-- Table structure for table `sub_category`
--

DROP TABLE IF EXISTS `sub_category`;
CREATE TABLE IF NOT EXISTS `sub_category` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `main_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `description` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `modified_at` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`,`main_id`) USING BTREE,
  KEY `main_id` (`main_id`) USING BTREE,
  KEY `id` (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci ROW_FORMAT=REDUNDANT;

--
-- Dumping data for table `sub_category`
--

INSERT INTO `sub_category` (`id`, `main_id`, `name`, `description`, `image`, `created_at`, `modified_at`) VALUES
(3, 1, 'T-Shirt', 't-shirt', '167984701110635115944a.png', '2023-03-17 11:08:30', '2023-03-26 23:10:11'),
(5, 2, 'T-shirt w', 't-shirt-w', '1679847918184306353011a.png', '2023-03-26 23:25:18', '2023-03-26 23:25:18');

-- --------------------------------------------------------

--
-- Table structure for table `verify_account`
--

DROP TABLE IF EXISTS `verify_account`;
CREATE TABLE IF NOT EXISTS `verify_account` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `cus_id` bigint UNSIGNED NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `otp` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  PRIMARY KEY (`id`,`cus_id`) USING BTREE,
  KEY `cus_id` (`cus_id`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

DROP TABLE IF EXISTS `wishlist`;
CREATE TABLE IF NOT EXISTS `wishlist` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `cus_id` bigint UNSIGNED NOT NULL,
  PRIMARY KEY (`id`,`cus_id`) USING BTREE,
  KEY `id` (`id`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `wishlist_details`
--

DROP TABLE IF EXISTS `wishlist_details`;
CREATE TABLE IF NOT EXISTS `wishlist_details` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `w_id` bigint UNSIGNED NOT NULL,
  `p_id` bigint UNSIGNED NOT NULL,
  `created_at` date DEFAULT NULL,
  `modified_at` date DEFAULT NULL,
  PRIMARY KEY (`id`,`w_id`,`p_id`) USING BTREE,
  KEY `w_id` (`w_id`) USING BTREE,
  KEY `p_id` (`p_id`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci ROW_FORMAT=DYNAMIC;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cart_ibfk_1` FOREIGN KEY (`cus_id`) REFERENCES `customer` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `cart_details`
--
ALTER TABLE `cart_details`
  ADD CONSTRAINT `cart_details_ibfk_1` FOREIGN KEY (`cart_id`) REFERENCES `cart` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `cart_details_ibfk_2` FOREIGN KEY (`p_id`) REFERENCES `product` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`cus_id`) REFERENCES `customer` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `order_details`
--
ALTER TABLE `order_details`
  ADD CONSTRAINT `order_details_ibfk_1` FOREIGN KEY (`o_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `order_details_ibfk_2` FOREIGN KEY (`p_id`) REFERENCES `product` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`sub_id`) REFERENCES `sub_category` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `product_review`
--
ALTER TABLE `product_review`
  ADD CONSTRAINT `product_review_ibfk_1` FOREIGN KEY (`cus_id`) REFERENCES `customer` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `product_review_ibfk_2` FOREIGN KEY (`p_id`) REFERENCES `product` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `sub_category`
--
ALTER TABLE `sub_category`
  ADD CONSTRAINT `sub_category_ibfk_1` FOREIGN KEY (`main_id`) REFERENCES `main_category` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `verify_account`
--
ALTER TABLE `verify_account`
  ADD CONSTRAINT `verify_account_ibfk_1` FOREIGN KEY (`cus_id`) REFERENCES `customer` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `wishlist`
--
ALTER TABLE `wishlist`
  ADD CONSTRAINT `wishlist_ibfk_1` FOREIGN KEY (`id`) REFERENCES `customer` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `wishlist_details`
--
ALTER TABLE `wishlist_details`
  ADD CONSTRAINT `wishlist_details_ibfk_1` FOREIGN KEY (`w_id`) REFERENCES `wishlist` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `wishlist_details_ibfk_2` FOREIGN KEY (`p_id`) REFERENCES `product` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
