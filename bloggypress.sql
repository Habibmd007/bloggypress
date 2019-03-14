-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 14, 2019 at 09:43 AM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bloggypress`
--

-- --------------------------------------------------------

--
-- Table structure for table `bios`
--

CREATE TABLE `bios` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desig` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'img/pp.jpg',
  `status` int(11) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bios`
--

INSERT INTO `bios` (`id`, `user_id`, `name`, `desig`, `text`, `img`, `status`, `created_at`, `updated_at`) VALUES
(12, 1, 'MD Habibur Rahman', 'Photographer & Blogger', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptate tenetur eius quaerat ratione, accusamus vitae. Expedita sapiente odit, saepe vero, nobis magni cupiditate possimus sed ipsa exercitationem quos, libero voluptatibus. Ex eum omnis consequatur sapiente ea corrupti excepturi explicabo, blanditiis quaerat temporibus ducimus facere reiciendis quae, velit earum qui ut vitae cumque accusamus architecto.', 'images/md-habibur-rahman-5c87ef4247629-.jpg', 1, '2019-03-12 11:41:22', '2019-03-12 11:41:22');

-- --------------------------------------------------------

--
-- Table structure for table `blog_categories`
--

CREATE TABLE `blog_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `cat` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'images/cat.jpg',
  `disc` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blog_categories`
--

INSERT INTO `blog_categories` (`id`, `cat`, `img`, `disc`, `created_at`, `updated_at`) VALUES
(1, 'travel', 'images/cat1.jpg', NULL, NULL, NULL),
(2, 'lifestyle', 'images/cat2.jpg', NULL, NULL, NULL),
(3, 'journey', 'images/cat3.jpg', NULL, NULL, NULL),
(4, 'hobby', 'images/cat4.jpg', NULL, NULL, NULL),
(8, 'music', 'images/-5c89328746d5f-.png', NULL, '2019-03-13 10:40:39', '2019-03-13 10:40:39');

-- --------------------------------------------------------

--
-- Table structure for table `blog_posts`
--

CREATE TABLE `blog_posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `cat_id` int(191) NOT NULL,
  `head` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_short` text COLLATE utf8mb4_unicode_ci,
  `photo_gallery_text` text COLLATE utf8mb4_unicode_ci,
  `qoute` text COLLATE utf8mb4_unicode_ci,
  `post_details` text COLLATE utf8mb4_unicode_ci,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blog_posts`
--

INSERT INTO `blog_posts` (`id`, `user_id`, `cat_id`, `head`, `post_short`, `photo_gallery_text`, `qoute`, `post_details`, `status`, `created_at`, `updated_at`) VALUES
(4, 1, 8, 'Wherever You Go, Go With All Your Heart', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic.</p>\r\n\r\n<p>It is a long established fact that a reader will be distracted by&nbsp;<a href=\"#\">the readable content</a>of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using &#39;Content here, content here&#39;, making it look like readable English.</p>', '<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage.</p>', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Suscipit necessitatibus vitae voluptatibus autem assumenda quidem quos rerum, praesentium. Veniam quis eos adipisci nam consequuntur quia eius soluta cumque, officiis modi!', '<p>orem ipsum dolor sit amet, consectetur adipisicing elit. Tempore molestias fuga nobis dolore quisquam deleniti ipsam magni deserunt, soluta natus vero maiores laboriosam ut hic placeat, consequuntur laudantium harum dicta? Inventore, earum, natus! Iure aut mollitia odit animi, harum, aliquam deserunt ducimus provident dolorem qui possimus eos voluptatem! Voluptate id ratione nam beatae sequi maiores itaque consequatur quas architecto blanditiis!</p>\r\n\r\n<p><img alt=\"\" src=\"http://localhost/bloggypress/public/images/post-5c852f406b9bb-.jpg\" style=\"height:560px; width:369px\" /></p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sed provident adipisci alias id omnis nesciunt, illum veniam est consectetur quod, odio quam nulla ipsa beatae consequuntur illo. Beatae, dolor, libero? Amet ut, accusantium assumenda laboriosam distinctio eum laborum, quod. Dolorem quidem, obcaecati labore laboriosam asperiores necessitatibus quisquam, repellendus maxime enim at perferendis ea illo omnis iusto ut consectetur possimus totam. Est unde, commodi enim aspernatur, cupiditate laboriosam vitae voluptatibus vel saepe modi molestiae ad, iste, quae aliquid. Blanditiis nobis nam atque aspernatur illo expedita impedit ab veniam, consequatur, ipsa unde. Officiis quas reiciendis ex perspiciatis quo architecto ab voluptatem facilis consectetur ullam, aperiam fuga saepe provident autem voluptas suscipit, sunt. Error possimus officia ab ut similique fugiat, laudantium est, ratione!</p>\r\n\r\n<p><img alt=\"\" src=\"http://localhost/bloggypress/public/images/post-5c852f4078698-.jpg\" style=\"height:248px; width:368px\" /></p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Exercitationem laudantium sed dolores iusto nisi. Repellendus deserunt quos nobis quam, unde provident similique eveniet fugiat fugit numquam aspernatur, corrupti nulla facere.</p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Id ad ipsa, nihil quos eum nostrum! Dicta sunt commodi quis optio necessitatibus! Beatae dignissimos placeat error nulla quia sapiente asperiores delectus. Cum laborum voluptate labore laboriosam nihil. Maiores voluptatem incidunt molestiae eius praesentium velit similique quis temporibus expedita consectetur dolore, optio facilis accusantium reprehenderit cum dignissimos molestias quam eum, ullam. Pariatur.</p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis ducimus quos suscipit repellat explicabo a minima eius at aperiam neque, ipsam officiis! Eligendi eum repellat laboriosam, delectus doloremque hic fugiat.</p>', 1, '2019-03-12 04:10:16', '2019-03-12 04:27:32'),
(5, 1, 2, 'Love Is Everything', '<p>nostrum! Dicta sunt commodi quis optio necessitatibus! Beatae dignissimos placeat error nulla quia sapiente asperiores delectus. Cum laborum voluptate labore laboriosam nihil. Maiores voluptatem incidunt molestiae eius praesentium velit similique quis temporibus expedita consectetur dolore, optio facilis accusantium reprehenderit cum dignissimos molestias quam eum, ullam. Pariatur.</p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis ducimus quos suscipit repellat explicabo a minima eius at aperiam neque, ipsam officiis! Eligendi eum repellat laboriosam, delectus doloremque hic fugiat.</p>', '<p>nostrum! Dicta sunt commodi quis optio necessitatibus! Beatae dignissimos placeat error nulla quia sapiente asperiores delectus. Cum laborum voluptate labore laboriosam nihil. Maiores voluptatem incidunt molestiae eius praesentium velit similique quis temporibus expedita consectetur dolore, optio facilis accusantium reprehenderit cum dignissimos molestias quam eum, ullam. Pariatur.</p>', 'nostrum! Dicta sunt commodi quis optio necessitatibus! Beatae dignissimos placeat error nulla quia sapiente asperiores delectus. Cum laborum voluptate labore laboriosam nihil. Maiores voluptatem', '<p>nostrum! Dicta sunt commodi quis optio necessitatibus! Beatae dignissimos placeat error nulla quia sapiente asperiores delectus. Cum laborum voluptate labore laboriosam nihil. Maiores voluptatem incidunt molestiae eius praesentium velit similique quis temporibus expedita consectetur dolore, optio facilis accusantium reprehenderit cum dignissimos molestias quam eum, ullam. Pariatur.</p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis ducimus quos suscipit repellat explicabo a minima eius at aperiam neque, ipsam officiis! Eligendi eum repellat laboriosam, delectus doloremque hic fugiat.</p>\r\n\r\n<p><img alt=\"\" src=\"http://localhost/bloggypress/public/images/post-5c850ec96105f-.jpg\" style=\"height:150px; width:175px\" /></p>\r\n\r\n<p>nostrum! Dicta sunt commodi quis optio necessitatibus! Beatae dignissimos placeat error nulla quia sapiente asperiores delectus. Cum laborum voluptate labore laboriosam nihil. Maiores voluptatem incidunt molestiae eius praesentium velit similique quis temporibus expedita consectetur dolore, optio facilis accusantium reprehenderit cum dignissimos molestias quam eum, ullam. Pariatur.</p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis ducimus quos suscipit repellat explicabo a minima eius at aperiam neque, ipsam officiis! Eligendi eum repellat laboriosam, delectus doloremque hic fugiat.</p>\r\n\r\n<p><img alt=\"\" src=\"http://localhost/bloggypress/public/images/post-5c852f406b9bb-.jpg\" style=\"height:560px; width:369px\" /></p>', 1, '2019-03-12 06:06:23', '2019-03-12 06:06:23');

-- --------------------------------------------------------

--
-- Table structure for table `blog_post_galleries`
--

CREATE TABLE `blog_post_galleries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `blogpost_id` int(11) NOT NULL,
  `img` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blog_post_galleries`
--

INSERT INTO `blog_post_galleries` (`id`, `blogpost_id`, `img`, `status`, `created_at`, `updated_at`) VALUES
(10, 4, 'images/post-5c8788a8948a1-.jpg', 1, '2019-03-12 04:23:36', '2019-03-12 04:23:36'),
(11, 4, 'images/post-5c8788a8a09f9-.jpg', 1, '2019-03-12 04:23:36', '2019-03-12 04:23:36'),
(12, 4, 'images/post-5c8788a8aae82-.jpg', 1, '2019-03-12 04:23:36', '2019-03-12 04:23:36'),
(13, 4, 'images/post-5c8788a8b92d1-.jpg', 1, '2019-03-12 04:23:36', '2019-03-12 04:23:36'),
(14, 4, 'images/post-5c8788a8c73f7-.jpg', 1, '2019-03-12 04:23:36', '2019-03-12 04:23:36'),
(15, 4, 'images/post-5c8788a8cec7c-.jpg', 1, '2019-03-12 04:23:36', '2019-03-12 04:23:36'),
(16, 5, 'images/post-5c87ac5b7d08c-.png', 1, '2019-03-12 06:55:55', '2019-03-12 06:55:55'),
(17, 5, 'images/post-5c87ac5b8b9bc-.jpg', 1, '2019-03-12 06:55:55', '2019-03-12 06:55:55'),
(18, 5, 'images/post-5c87ac5b95e1b-.jpg', 1, '2019-03-12 06:55:55', '2019-03-12 06:55:55'),
(19, 5, 'images/post-5c87ac5ba7ff2-.jpg', 1, '2019-03-12 06:55:55', '2019-03-12 06:55:55'),
(20, 5, 'images/post-5c87ac5bb6447-.jpg', 1, '2019-03-12 06:55:55', '2019-03-12 06:55:55'),
(21, 5, 'images/post-5c87ac5bbe2f0-.jpg', 1, '2019-03-12 06:55:55', '2019-03-12 06:55:55');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `blog_post_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `blog_post_id`, `user_id`, `comment`, `created_at`, `updated_at`) VALUES
(3, 5, 2, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Temporibus, suscipit. Mollitia placeat, delectus autem aliquid eius assumenda quibusdam accusamus ad illo soluta labore quam, sunt dolor nisi voluptate provident harum!', '2019-03-13 23:47:46', '2019-03-13 23:47:46'),
(4, 4, 1, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Temporibus, suscipit. Mollitia placeat, delectus autem aliquid eius assumenda quibusdam accusamus ad illo soluta labore quam, sunt dolor nisi voluptate provident harum!', '2019-03-14 02:16:59', '2019-03-14 02:16:59');

-- --------------------------------------------------------

--
-- Table structure for table `infos`
--

CREATE TABLE `infos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `font` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `head` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `infos`
--

INSERT INTO `infos` (`id`, `font`, `head`, `text`, `status`, `created_at`, `updated_at`) VALUES
(2, 'fa-globe', 'TECHNOLOGY ARTICLES', 'Aliquam quam laudantium suscipit ullam aut perferendis vel dicta blanditiis eligendi ratione consequatur.', 1, '2019-03-09 05:54:26', '2019-03-09 05:54:26');

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
(5, '2014_10_12_100000_create_password_resets_table', 1),
(6, '2019_03_08_141407_create_bios_table', 1),
(10, '2019_03_09_070815_create_infos_table', 3),
(11, '2019_03_09_175137_create_sliders_table', 4),
(12, '2019_03_10_113152_create_photos_table', 5),
(15, '2019_03_09_050014_create_posts_table', 6),
(16, '2019_03_10_154609_create_blog_posts_table', 6),
(17, '2019_03_10_155957_create_blog_post_galleries_table', 6),
(20, '2019_03_12_191627_create_roles_table', 9),
(22, '2014_10_12_000000_create_users_table', 10),
(23, '2019_03_13_102222_create_comments_table', 11),
(24, '2019_03_13_135246_create_replies_table', 12),
(25, '2019_03_12_110637_create_blog_categories_table', 13);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `photos`
--

CREATE TABLE `photos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `img` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `photos`
--

INSERT INTO `photos` (`id`, `img`, `status`, `created_at`, `updated_at`) VALUES
(1, 'images/post-5c850ec96105f-.jpg', 1, '2019-03-10 07:19:05', '2019-03-10 07:19:05'),
(2, 'images/post-5c850ec971b3e-.jpg', 1, '2019-03-10 07:19:05', '2019-03-10 07:19:05'),
(4, 'images/post-5c852f406b9bb-.jpg', 1, '2019-03-10 09:37:36', '2019-03-13 12:02:40'),
(5, 'images/post-5c852f4078698-.jpg', 1, '2019-03-10 09:37:36', '2019-03-10 09:37:36');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `head` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `qoute` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `video` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'https://www.youtube.com/embed/aqz-KE-bpKQ?rel=0&amp;controls=0&amp;showinfo=0&amp;wmode=transparent',
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `head`, `text`, `qoute`, `video`, `status`, `created_at`, `updated_at`) VALUES
(1, 'It is a long established fact that a reader will be distracted by the readable content', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal making it look like readable english many desktop.', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking.', 'https://www.youtube.com/embed/aqz-KE-bpKQ?rel=0&controls=0&showinfo=0&wmode=transparent', 1, '2019-03-12 11:44:35', '2019-03-12 11:44:35');

-- --------------------------------------------------------

--
-- Table structure for table `replies`
--

CREATE TABLE `replies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `blogpost_id` int(11) NOT NULL,
  `comment_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `reply` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `replies`
--

INSERT INTO `replies` (`id`, `blogpost_id`, `comment_id`, `user_id`, `reply`, `created_at`, `updated_at`) VALUES
(4, 5, 3, 2, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Temporibus, suscipit. Mollitia placeat, delectus autem aliquid eius assumenda quibusdam accusamus ad illo soluta labore quam, sunt dolor nisi voluptate provident harum!', '2019-03-13 23:48:09', '2019-03-13 23:48:09'),
(5, 4, 4, 1, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Temporibus, suscipit. Mollitia placeat, delectus autem aliquid eius assumenda quibusdam accusamus ad illo soluta labore quam, sunt dolor nisi voluptate provident harum!', '2019-03-14 02:17:38', '2019-03-14 02:17:38'),
(6, 5, 3, 1, 'suscipit. Mollitia placeat, delectus autem aliquid eius assumenda quibusdam accusamus ad illo soluta labore quam, sunt dolor nisi voluptate provident harum!', '2019-03-14 02:28:36', '2019-03-14 02:28:36');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin', NULL, NULL),
(2, 'User', 'user', NULL, NULL),
(3, 'Admin', 'admin', NULL, NULL),
(4, 'User', 'user', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `blogpost_id` int(11) NOT NULL,
  `sli_img` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `head` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `blogpost_id`, `sli_img`, `head`, `status`, `created_at`, `updated_at`) VALUES
(20, 4, 'images/-5c87869a85758-.jpg', NULL, '1', '2019-03-12 04:14:50', '2019-03-12 04:14:50'),
(21, 4, 'images/-5c8786b95db6c-.jpg', NULL, '1', '2019-03-12 04:15:21', '2019-03-12 04:15:21'),
(22, 4, 'images/-5c878791ddf47-.jpg', NULL, '1', '2019-03-12 04:18:57', '2019-03-12 04:18:57'),
(23, 5, 'images/-5c87abeeceef0-.jpg', NULL, '1', '2019-03-12 06:54:06', '2019-03-12 06:54:06'),
(24, 5, 'images/-5c87ac0b77171-.jpg', NULL, '1', '2019-03-12 06:54:35', '2019-03-12 06:54:35');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `role_id` int(11) NOT NULL DEFAULT '2',
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Bangladesh',
  `state` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` tinyint(1) NOT NULL,
  `date_of_birth` date NOT NULL,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'default.png',
  `about` text COLLATE utf8mb4_unicode_ci,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `role_id`, `name`, `country`, `state`, `gender`, `date_of_birth`, `username`, `email`, `email_verified_at`, `password`, `image`, `about`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 1, 'MD Habibur Rahman', 'Bangladesh', 'Dhaka', 1, '2019-03-15', 'md-habibur-rahman', 'habibmd007@gmail.com', NULL, '$2y$10$4DdUuAHAq8MUv3AlPISRYurpqHT2nr8gZqfaJlwC4DoiXMs2yGTyW', 'default.png', NULL, NULL, '2019-03-12 23:54:11', '2019-03-12 23:54:11'),
(2, 2, 'iamuser', 'Bangladesh', 'Dhaka', 1, '2019-03-22', 'iamuser', 'user@gmail.com', NULL, '$2y$10$ZQaEX1.26bkL/ifI6r1MyuiLblYpO.c5bNwdVEg.v9pH/OHjjvCpK', 'default.png', NULL, NULL, '2019-03-13 00:16:16', '2019-03-13 00:16:16');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bios`
--
ALTER TABLE `bios`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog_categories`
--
ALTER TABLE `blog_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog_posts`
--
ALTER TABLE `blog_posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog_post_galleries`
--
ALTER TABLE `blog_post_galleries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `infos`
--
ALTER TABLE `infos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `photos`
--
ALTER TABLE `photos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `replies`
--
ALTER TABLE `replies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_username_unique` (`username`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bios`
--
ALTER TABLE `bios`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `blog_categories`
--
ALTER TABLE `blog_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `blog_posts`
--
ALTER TABLE `blog_posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `blog_post_galleries`
--
ALTER TABLE `blog_post_galleries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `infos`
--
ALTER TABLE `infos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `photos`
--
ALTER TABLE `photos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `replies`
--
ALTER TABLE `replies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
