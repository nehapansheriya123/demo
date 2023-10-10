-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 10, 2023 at 12:56 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `theme`
--

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_10_09_121606_create_posts_table', 2),
(6, '2023_10_10_041855_add_user_id_to_posts_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `company_name` varchar(255) DEFAULT NULL,
  `job_title` varchar(255) DEFAULT NULL,
  `job_loaction` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `website` varchar(255) DEFAULT NULL,
  `tags` text DEFAULT NULL,
  `company_logo` text DEFAULT NULL,
  `job_description` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `company_name`, `job_title`, `job_loaction`, `email`, `website`, `tags`, `company_logo`, `job_description`, `created_at`, `updated_at`, `user_id`) VALUES
(5, 'Acme Corp', 'laravel Devloper', 'Boston, MA', 'contact@acmecorp.com', 'https://acmecorp.com', 'Laravel, Backend, Postgres', '202310100612nature_big_3.jpg', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi ipsam quae repellat adipisci quas id? Optio saepe, maxime tempora tenetur iste ratione necessitatibus. Corrupti eveniet distinctio quaerat voluptas itaque sequi molestias assumenda fugiat minus in dicta perferendis, autem velit nihil, at, atque a placeat voluptates? Culpa quia vel laborum nemo.', '2023-10-09 22:44:29', '2023-10-10 00:42:38', 1),
(6, 'test', 'test', 'test', 'neha@gmail.com', 'https://www.allphptricks.com/laravel-custom-user-registration-and-login-tutorial/', 'backend laravel', '202310100613nature_big_6.jpg', 'THIS IS MY LARGE DESCRIPTION', '2023-10-09 23:10:11', '2023-10-10 00:43:22', 1),
(8, 'test', 'test', 'test', 'neha@gmail.com', 'https://www.allphptricks.com/laravel-custom-user-registration-and-login-tutorial/', 'laravel', '202310100613nature_big_6.jpg', 'aswdxz', '2023-10-10 00:07:29', '2023-10-10 00:43:38', 1),
(9, 'test', 'test', 'Daytona, FL', 'test@gmail.com', 'https://acmecorp.com', 'Laravel, Backend, Postgres', '202310100613nature_big_6.jpg', 'this is my description', '2023-10-10 00:23:16', '2023-10-10 00:43:09', 1),
(10, 'Senior Laravel Developer', 'Senior Laravel Developer', 'Boston, MA', 'test@gmail.com', 'https://www.allphptricks.com/laravel-custom-user-registration-and-login-tutorial/', 'Laravel, Backend, Api,Vue', '202310100647nature-3289812_960_720.jpg', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quaerat praesentium eos consequuntur ex voluptatum necessitatibus odio quos cupiditate iste similique rem in, voluptates quod maxime animi veritatis illum quo sapiente.', '2023-10-10 01:17:28', '2023-10-10 01:33:31', 2),
(12, 'Acme Corp', 'Senior Laravel Developer', 'Daytona, FL', 'neha@gmail.comns', 'https://acmecorp.com', 'Laravel, Backend, Postgres', '202310100823buildings-5303864_1280.jpg', 'this is my large description', '2023-10-10 02:53:48', '2023-10-10 02:53:48', 2);

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'neha', 'neha@gmail.com', NULL, '$2y$10$u8Wur7YeC3k2BgRSXDODUe/6NRUDnjIwuj4oljEturXfS8xgPSFxG', NULL, '2023-10-09 06:31:09', '2023-10-09 06:31:09'),
(2, 'neha', 'neha@gmail.comn', NULL, '$2y$10$ZGX1Mk5IUD.SyQu.JQXrGeH5Y49LEoYqdGNg1AogHRCEfqVqIgaTm', NULL, '2023-10-09 06:35:42', '2023-10-09 06:35:42'),
(3, 'neha1', 'test@gmail.com', NULL, '$2y$10$wd1BiU08CZDuZA4YjH11sei9qryKEOxXyTo9Up5N3bOxr3/4iPWR2', NULL, '2023-10-09 06:36:23', '2023-10-09 06:36:23'),
(4, 'neha1', 'test@gmail.coms', NULL, '$2y$10$DSvyIvZhUaCJdF2At05u9.uKlY7/SI1C6n2BVcXWFxgxACxqYqZEe', NULL, '2023-10-09 06:37:33', '2023-10-09 06:37:33'),
(5, 'neha1', 'neha@gmail.comdd', NULL, '$2y$10$lrIChZtElqGpamc.uCNIHuoiBFU.ePhAt7zBX6Wblyzelgx7eG7iG', NULL, '2023-10-09 06:39:20', '2023-10-09 06:39:20'),
(6, 'neha', 'neha@gmail.comns', NULL, '$2y$10$k6pdJD09XoJmgc9RiD9bo.fzu6Cs1XjSG1bNZ0oObCLKTKf4DDjQy', NULL, '2023-10-09 22:32:58', '2023-10-09 22:32:58');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
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
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
