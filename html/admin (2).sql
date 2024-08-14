-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 28, 2024 at 03:29 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `admin`
--

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `banners`
--

INSERT INTO `banners` (`id`, `image`, `title`, `content`, `status`, `created_at`, `updated_at`) VALUES
(1, '1712749562.jpg', 'Vitae facilis provid', 'Dolores mollitia par', '1', '2024-04-10 06:16:02', '2024-05-28 01:10:23'),
(2, '1712750876.jpg', 'ds', 'Introducing HHC , the stunning', '1', '2024-04-10 06:37:56', '2024-05-27 01:18:18'),
(3, '1712750916.jpg', 'dfg', 'new addition to the downtown', '1', '2024-04-10 06:38:36', '2024-05-27 01:18:08'),
(4, '1716878399.avif', 'asdsadsaewr3454353', 'Introducing HHC \r\n the stunning new', '1', '2024-04-10 06:38:48', '2024-05-28 01:09:59');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `image`, `title`, `content`, `status`, `created_at`, `updated_at`) VALUES
(2, '1712753216.jpg', 'Quibusdam ipsum rer', 'Ex deserunt sit adi', '1', '2024-04-10 07:16:56', '2024-04-10 07:17:05'),
(3, '1712754035.jpg', 'Et temporibus minus', 'Voluptatibus volupta', '1', '2024-04-10 07:30:30', '2024-04-10 07:30:35');

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cms`
--

CREATE TABLE `cms` (
  `id` bigint(255) UNSIGNED NOT NULL,
  `page_name` varchar(114) DEFAULT NULL,
  `title` text DEFAULT NULL,
  `sub_image` varchar(150) DEFAULT NULL,
  `content` text DEFAULT NULL,
  `image` text DEFAULT NULL,
  `featured_subtitle` varchar(255) DEFAULT NULL,
  `featured_content` text DEFAULT NULL,
  `blog_1` varchar(255) DEFAULT NULL,
  `blog_2` varchar(255) DEFAULT NULL,
  `blog_3` varchar(255) DEFAULT NULL,
  `blog_4` varchar(255) DEFAULT NULL,
  `buliding_finnished` varchar(255) DEFAULT NULL,
  `total_cunstruction` varchar(255) DEFAULT NULL,
  `total_experince` varchar(255) DEFAULT NULL,
  `certified_bank` varchar(255) DEFAULT NULL,
  `vision_title` varchar(255) DEFAULT NULL,
  `vision_content` text DEFAULT NULL,
  `vision_image` varchar(255) DEFAULT NULL,
  `mission_title` text DEFAULT NULL,
  `mission_content` text DEFAULT NULL,
  `mission_image` varchar(120) DEFAULT NULL,
  `in_image_title` text DEFAULT NULL,
  `in_image_content` text DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cms`
--

INSERT INTO `cms` (`id`, `page_name`, `title`, `sub_image`, `content`, `image`, `featured_subtitle`, `featured_content`, `blog_1`, `blog_2`, `blog_3`, `blog_4`, `buliding_finnished`, `total_cunstruction`, `total_experince`, `certified_bank`, `vision_title`, `vision_content`, `vision_image`, `mission_title`, `mission_content`, `mission_image`, `in_image_title`, `in_image_content`, `phone`, `email`, `address`, `created_at`, `updated_at`) VALUES
(1, 'Home Page', 'A New One That Suits You Life Classic', '1716891968.jpg', 'Introducing HHC , the stunning new addition to the downtown Manhattan skyline. A perfect blend of breathtaking architecture designed, with awe-inspiring interiors envisioned Sleek and sophisticated, Costix offers qualities always coveted, but rarely obtained in the finest New York rental residences – a unique blend of generously proportioned interiors and the enjoyment of Nassau Club over 10,000 square feet of indoor and outdoor amenities creatively conceived to enhance your exceptional FiDi lifestyle.', '1716891968.jpg', 'Best Appartment & Sea View', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Inventore quibusdam, vel laudantium at maxime repellat maiores reiciendis ducimus adipisci doloremque perferendis possimus dolore consequuntur sapiente in quaerat quas expedita odio?  Lorem ipsum, dolor sit amet consectetur adipisicing elit. Inventore quibusdam, vel laudantium at maxime repellat maiores reiciendis ducimus adipisci doloremque perferendis possimus dolore consequuntur sapiente in quaerat quas expedita odio?', '250 m2 Total Flat Space', 'Contract Contract Ready', 'Payment Payment Process', 'A New One That Suits You Life Classic', '34', '50', '12', '5', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-05-28 07:29:38', '2024-05-28 04:57:33'),
(2, 'About Page', 'f', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'A New One That Suits You Life Classic', 'Introducing HHC , the stunning new addition to the downtown Manhattan skyline. A perfect blend of breathtaking architecture designed, with awe-inspiring interiors envisioned Sleek and sophisticated, Costix offers qualities always coveted, but rarely obtained in the finest New York rental residences – a unique blend of generously proportioned interiors and the enjoyment of Nassau Club over 10,000 square feet of indoor and outdoor amenities creatively conceived to enhance your exceptional FiDi lifestyle.', 'C:\\xampp\\tmp\\php538.tmp', 'A New One That Suits You Life Classic', 'Introducing HHC , the stunning new addition to the downtown Manhattan skyline. A perfect blend of breathtaking architecture designed, with awe-inspiring interiors envisioned Sleek and sophisticated, Costix offers qualities always coveted, but rarely obtained in the finest New York rental residences – a unique blend of generously proportioned interiors and the enjoyment of Nassau Club over 10,000 square feet of indoor and outdoor amenities creatively conceived to enhance your exceptional FiDi lifestyle.', 'C:\\xampp\\tmp\\php539.tmp', 'Best Appartment & Sea View', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Inventore quibusdam, vel laudantium at maxime repellat maiores reiciendis ducimus adipisci doloremque perferendis possimus dolore consequuntur sapiente in quaerat quas expedita odio?  Lorem ipsum, dolor sit amet consectetur adipisicing elit. Inventore quibusdam, vel laudantium at maxime repellat maiores reiciendis ducimus adipisci doloremque perferendis possimus dolore consequuntur sapiente in quaerat quas expedita odio?', NULL, NULL, NULL, '2024-05-28 07:29:38', '2024-05-28 04:58:58'),
(3, 'Contact Page', 'f', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '010-020-0340', 'info@villa.co', '1840 E Garvey Avenue Street West Covina, CA 91791, U.S.', '2024-05-28 07:29:38', '2024-05-28 04:59:48');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `fname`, `lname`, `phone`, `email`, `subject`, `message`, `created_at`, `updated_at`) VALUES
(2, 'disma', 'ode', '8141202365', 'disma7414@gmail.com', 'cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum', 'njhjhjhj', '2024-04-02 11:56:57', NULL),
(3, 'disma', 'ode', '8141202365', 'disma7414@gmail.com', 'cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has sur', NULL, NULL),
(4, 'disma', 'ode', '8141202365', 'disma7414@gmail.com', 'cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has sur', NULL, NULL),
(5, 'disma', 'ode', '8141202365', 'disma7414@gmail.com', 'UPDATE `contacts` SET `subject` = \' centuries, but also the leap into electron\', `created_at` = NULL, `updated_at` = NULL WHERE `contacts`.`id` = 2;', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has sur', NULL, NULL),
(6, 'disma', 'ode', '8141202365', 'disma7414@gmail.com', 'UPDATE `contacts` SET `subject` = \' centuries, but also the leap into electron\', `created_at` = NULL, `updated_at` = NULL WHERE `contacts`.`id` = 2;', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has sur', NULL, NULL),
(7, 'disma', 'ode', '8141202365', 'disma7414@gmail.com', 'UPDATE `contacts` SET `subject` = \' centuries, but also the leap into electron\', `created_at` = NULL, `updated_at` = NULL WHERE `contacts`.`id` = 2;', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has sur', NULL, NULL),
(10, 'disma', 'ode', '8141202365', 'disma7414@gmail.com', 'UPDATE `contacts` SET `subject` = \' centuries, but also the leap into electron\', `created_at` = NULL, `updated_at` = NULL WHERE `contacts`.`id` = 2;', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has sur', '2024-04-10 11:57:02', NULL),
(11, 'disma', 'ode', '8141202365', 'disma7414@gmail.com', 'UPDATE `contacts` SET `subject` = \' centuries, but also the leap into electron\', `created_at` = NULL, `updated_at` = NULL WHERE `contacts`.`id` = 2;', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has sur', '2024-04-01 11:57:00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(12, '2024_04_02_083332_create_testimonials_table', 2),
(13, '2024_04_02_083348_create_contacts_table', 2),
(14, '2024_04_02_083358_create_projects_table', 2),
(15, '2024_04_02_083410_create_projects_categories_table', 2),
(16, '2024_04_02_083429_create_projects_galleries_table', 2),
(17, '2024_04_02_083616_create_projects_offers_table', 2),
(18, '2024_04_02_083656_create_banners_table', 2),
(19, '2024_04_02_083704_create_cms_table', 2),
(20, '2024_04_10_123537_create_blogs_table', 3),
(21, '2024_04_29_105154_create_partners_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `partners`
--

CREATE TABLE `partners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `designation` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `partners`
--

INSERT INTO `partners` (`id`, `name`, `image`, `designation`, `created_at`, `updated_at`) VALUES
(2, 'Emily Mayer11', '1716900167.jpg', 'Quae sint id asperna11', '2024-04-29 05:59:33', '2024-05-28 07:12:47'),
(3, 'Jack Vega', '1716900161.png', 'Qui consectetur lab', '2024-04-29 06:03:57', '2024-05-28 07:12:41'),
(4, 'Jeam Hoen', '1716900152.png', 'PHP DEVELOPER', '2024-05-28 07:12:32', '2024-05-28 07:12:32');

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `location` varchar(255) DEFAULT NULL,
  `tags` varchar(150) DEFAULT NULL,
  `Total_garden` varchar(120) DEFAULT NULL,
  `children_play_area` varchar(150) DEFAULT NULL,
  `security_cabin` varchar(150) DEFAULT NULL,
  `gymisum` varchar(150) DEFAULT NULL,
  `cctv` varchar(255) DEFAULT NULL,
  `tample` varchar(250) DEFAULT NULL,
  `pdf` varchar(255) DEFAULT NULL,
  `water_facility` varchar(150) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `category_id` varchar(255) DEFAULT NULL,
  `banner_image` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `name`, `slug`, `location`, `tags`, `Total_garden`, `children_play_area`, `security_cabin`, `gymisum`, `cctv`, `tample`, `pdf`, `water_facility`, `description`, `category_id`, `banner_image`, `status`, `created_at`, `updated_at`) VALUES
(14, 'harmony', 'harmony', 'vadodra', 'Tenaments', '2', '2', '1', '1', '1', 'Shiva Temple', '1716790992.pdf', '24 X 7', 'but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text. All the Lorem Ipsu', '6', '1716790919.pdf', '1', '2024-05-27 00:35:46', '2024-05-27 00:53:12'),
(15, 'Zenia Ortiz', 'zenia-ortiz', 'Excepturi assumenda', 'Est aut proident e', 'Amet repellendus Q', 'Ut dolorem illum fu', '1', '0', '0', 'Vel nisi dolorum fug', '1716791071.pdf', 'Voluptas sed aute co', 'Quis iste sed vitae', '7', NULL, '1', '2024-05-27 00:54:31', '2024-05-27 00:54:31');

-- --------------------------------------------------------

--
-- Table structure for table `projects_categories`
--

CREATE TABLE `projects_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `projects_categories`
--

INSERT INTO `projects_categories` (`id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'complated', 'complated', '2024-04-03 03:53:10', '2024-04-07 22:58:52'),
(5, 'On Going', 'On Going', '2024-04-09 22:41:53', '2024-04-09 22:41:53'),
(6, 'Testing', 'Testing', '2024-04-09 22:42:06', '2024-04-09 22:42:06'),
(7, 'disma', 'disma', '2024-05-27 00:25:03', '2024-05-27 00:25:03');

-- --------------------------------------------------------

--
-- Table structure for table `projects_galleries`
--

CREATE TABLE `projects_galleries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) NOT NULL,
  `project_id` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `projects_galleries`
--

INSERT INTO `projects_galleries` (`id`, `image`, `project_id`, `created_at`, `updated_at`) VALUES
(4, '1714395947.png', '12', '2024-04-29 07:35:47', '2024-04-29 07:35:47'),
(5, '1714395947.png', '12', '2024-04-29 07:35:47', '2024-04-29 07:35:47'),
(6, '1714451407.jpeg', '13', '2024-04-29 23:00:07', '2024-04-29 23:00:07'),
(7, '1714451408.jpg', '13', '2024-04-29 23:00:08', '2024-04-29 23:00:08'),
(8, '1714451408.png', '13', '2024-04-29 23:00:08', '2024-04-29 23:00:08'),
(9, '1714451408.jpg', '13', '2024-04-29 23:00:08', '2024-04-29 23:00:08'),
(10, '1714451408.jpeg', '13', '2024-04-29 23:00:08', '2024-04-29 23:00:08'),
(11, '1716789946.avif', '14', '2024-05-27 00:35:46', '2024-05-27 00:35:46'),
(12, '1716789946.avif', '14', '2024-05-27 00:35:46', '2024-05-27 00:35:46'),
(13, '1716789946.avif', '14', '2024-05-27 00:35:46', '2024-05-27 00:35:46'),
(14, '1716791071.avif', '15', '2024-05-27 00:54:31', '2024-05-27 00:54:31'),
(15, '1716791071.avif', '15', '2024-05-27 00:54:31', '2024-05-27 00:54:31'),
(16, '1716791071.avif', '15', '2024-05-27 00:54:31', '2024-05-27 00:54:31'),
(17, '1716791071.avif', '15', '2024-05-27 00:54:31', '2024-05-27 00:54:31'),
(18, '1716791071.avif', '15', '2024-05-27 00:54:31', '2024-05-27 00:54:31');

-- --------------------------------------------------------

--
-- Table structure for table `projects_offers`
--

CREATE TABLE `projects_offers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `offer_name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `project_id` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `start_date` varchar(255) NOT NULL,
  `end_date` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('euFvbHkaEYbhpMFIejkbROiUb9RgTeNEduUSrNlX', 1, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/125.0.0.0 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiaUc1bDJWa2tFeURONEtibGJsMUpPbUIzaWFGZWRSajBzSzRQNEt1ZiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjk6Imh0dHA6Ly9sb2NhbGhvc3QvYWRtaW4vcHVibGljIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czozOiJ1cmwiO2E6MDp7fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjE7fQ==', 1716902908);

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `designation` varchar(255) DEFAULT NULL,
  `words` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`id`, `name`, `designation`, `words`, `image`, `status`, `created_at`, `updated_at`) VALUES
(4, 'dfgf', 'gfdd', 'gfdg', '1712726282.jpg', '1', '2024-04-09 23:48:02', '2024-04-09 23:48:02'),
(5, 'Disma ode', 'software Eng.', 'Good Place to live', '1712726973.jpg', '1', '2024-04-09 23:59:33', '2024-04-10 03:01:53');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@admin.com', NULL, '$2y$12$oz6YIt4E/TfTLGL57xzbR.pM1ypXYZ7Exz0tcyPgJaHOc7iaD2KlO', 'ilTEJoNfmxptAYISddnQiLG0N8lMsDp9vzHd0Nxwoiukmt8IVh561lF5iYqD', '2024-04-02 00:49:20', '2024-04-02 00:49:20');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cms`
--
ALTER TABLE `cms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
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
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `projects_categories`
--
ALTER TABLE `projects_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `projects_galleries`
--
ALTER TABLE `projects_galleries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `projects_offers`
--
ALTER TABLE `projects_offers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
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
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `cms`
--
ALTER TABLE `cms`
  MODIFY `id` bigint(255) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `partners`
--
ALTER TABLE `partners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `projects_categories`
--
ALTER TABLE `projects_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `projects_galleries`
--
ALTER TABLE `projects_galleries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `projects_offers`
--
ALTER TABLE `projects_offers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
