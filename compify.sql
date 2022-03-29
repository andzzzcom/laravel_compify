-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 11, 2020 at 08:20 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `compify`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `id_admin` int(11) NOT NULL,
  `email_admin` varchar(100) NOT NULL,
  `password_admin` varchar(100) NOT NULL,
  `photo_admin` varchar(100) NOT NULL,
  `name_admin` varchar(100) NOT NULL,
  `phone_admin` varchar(100) NOT NULL,
  `address_admin` varchar(100) NOT NULL,
  `gender_admin` int(1) NOT NULL,
  `role_admin` varchar(100) NOT NULL,
  `description_admin` varchar(100) NOT NULL,
  `created_date_admin` datetime NOT NULL DEFAULT current_timestamp(),
  `last_updated_date_admin` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `creator_admin` int(1) NOT NULL,
  `last_updater_admin` int(1) NOT NULL,
  `status_admin` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`id_admin`, `email_admin`, `password_admin`, `photo_admin`, `name_admin`, `phone_admin`, `address_admin`, `gender_admin`, `role_admin`, `description_admin`, `created_date_admin`, `last_updated_date_admin`, `creator_admin`, `last_updater_admin`, `status_admin`) VALUES
(1, 'admin@admin.com', '$2y$10$Ai40nChHmmtFm6M1wSM3LehDQfAlr6vA.JoTK82jnnsO79ubF8Gcu', 'user.png', 'Admin', '55129448', 'Jalan Hijau raya', 0, '111', 'description admin indonesia', '2018-12-28 01:16:47', '2020-07-29 14:34:14', 0, 0, 1),
(13, 'testing@a.com', '12345', '1595961085.PNG', 'testing', '1234512345', 'aaaaa', 0, 'adasdsad', 'asdsad', '2020-07-29 01:31:25', '2020-07-29 01:31:39', 1, 1, -1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_blog_category`
--

CREATE TABLE `tbl_blog_category` (
  `id_blog_category` int(11) NOT NULL,
  `name_blog_category` varchar(50) NOT NULL,
  `description_blog_category` text NOT NULL,
  `status_blog_category` int(1) NOT NULL,
  `created_date_blog_category` datetime NOT NULL DEFAULT current_timestamp(),
  `last_updated_date_blog_category` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `creator_blog_category` int(1) NOT NULL,
  `last_updater_blog_category` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_blog_category`
--

INSERT INTO `tbl_blog_category` (`id_blog_category`, `name_blog_category`, `description_blog_category`, `status_blog_category`, `created_date_blog_category`, `last_updated_date_blog_category`, `creator_blog_category`, `last_updater_blog_category`) VALUES
(1, 'Teknologi', 'teknologi', 1, '2019-12-30 01:25:21', '2019-12-30 01:25:21', 0, 0),
(2, 'Pendidikan', 'tentang pendidikan', -1, '2019-12-30 09:12:57', '2019-12-30 09:12:57', 0, 0),
(3, 'Politik', 'tentang politik', 0, '2019-12-30 09:13:58', '2019-12-30 09:13:58', 0, 0),
(4, 'lagi', 'lagi', -1, '2019-12-30 09:14:23', '2019-12-30 09:14:23', 0, 0),
(5, 'Ekonomi', 'lagi', 0, '2019-12-30 13:26:21', '2019-12-30 13:26:21', 0, 0),
(6, 'testing', 'descriptions', -1, '2020-08-11 12:19:11', '2020-08-11 12:21:40', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_blog_post`
--

CREATE TABLE `tbl_blog_post` (
  `id_blog_post` int(11) NOT NULL,
  `title_blog_post` varchar(100) NOT NULL,
  `thumbnail_blog_post` varchar(100) NOT NULL,
  `content_blog_post` text NOT NULL,
  `category_blog_post` int(1) NOT NULL,
  `tag_blog_post` text NOT NULL,
  `status_blog_post` int(1) NOT NULL,
  `created_date_blog_post` datetime NOT NULL DEFAULT current_timestamp(),
  `last_updated_date_blog_post` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `creator_blog_post` int(1) NOT NULL,
  `last_updater_blog_post` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_blog_post`
--

INSERT INTO `tbl_blog_post` (`id_blog_post`, `title_blog_post`, `thumbnail_blog_post`, `content_blog_post`, `category_blog_post`, `tag_blog_post`, `status_blog_post`, `created_date_blog_post`, `last_updated_date_blog_post`, `creator_blog_post`, `last_updater_blog_post`) VALUES
(2, 'Artikel Pertama', '1597125820.png', '<p>Antroposofi adalah sebuah istilah yang digunakan untuk menerangkan pengetahuan tentang manusia. Namun hal ini &nbsp; berkitan dengan aspek pengetahuan yang ingin menjelaskan tentang Tuhan atau yang disebut teosofi. &nbsp;Istilah Antroposofi sendiri berasal dari bahasa Yunani, anthropos dan sophia, yaitu manusia dan pengetahuan. &nbsp;</p><p>Gagasan ini merupakan sistem filsafat-religius yang dikemukakan oleh Rudolf Steiner (1861/1925). &nbsp;Teori ini sangat dipengaruhi oleh teologi agama Hindu. &nbsp;Sekilas mengenai Steiner, adalah ahli dalam bidang spiritualitas, hidup di India untuk melakukan penelitiannya, dan selalu tertarik dengan hidup yang sarat misteri; ia mendalami yoga, karma, Buddhisme dan filsafat Timur di India. Waktu </p>', 1, 'tag,ok, artikel', 1, '2019-12-30 01:26:01', '2020-08-11 13:03:40', 0, 1),
(3, 'tess', '1597037121.jpg', 'tess', 1, 'tag', 0, '2019-12-30 10:55:44', '2020-08-10 12:25:26', 0, 1),
(4, 'tes', '43914771_566583250432440_9118546814465736704_n1.jpg', '<p><iframe src=\"//www.youtube.com/embed/qM-VNzdx1ww\" class=\"note-video-clip\" width=\"640\" height=\"360\" frameborder=\"0\"></iframe><br></p>', 1, 'assad', -1, '2019-12-31 07:52:36', '2020-08-10 12:26:31', 0, 0),
(5, 'Terkait Kasus Natuna, Apakah Cina Sedang', '1597125828.png', '<p> baru-baru ini telah meramaikan pemberitaan di dalam negeri. Kepongahan Cinmelewati tapal batas negara dianggap arogan dan tidak menghargai kedaulatan Indonesia hingga pihak Kementerian Luar Negeri (Kemenlu) pun melontarkan protes keras melalui Duta Besar (Dubes).</p><p>Beberapa elit masih terkesan menunggu dan cenderung \"cool\" menyikapi situasi ini. Sepertinya mereka tidak berani gegabah mengingat kekuatan besar yang berada dibalik aksi penyerobotan batas wilayah ini.</p><p>Dalam beberapa kesempatan terdahulu, khususnya saat masih berada diluar <a href=\"https://www.kompasiana.com/tag/pemerintahan\">pemerintahan</a>, <a href=\"https://www.kompasiana.com/tag/prabowo\">Prabowo</a> Subianto merupakan sosok yang cenderung anti asing khususnya Cina. Beberapa kritik ia lontarkan terkait makin banyaknya investor Cina yang masuk ke Indonesia. Setidaknya hal itu terus berlangsung sampai kemudian beliau menyediakan diri untuk turut bergabung dalam gerbong pemerintahan Presiden Joko Widodo (<a href=\"https://www.kompasiana.com/tag/jokowi\">Jokowi</a>) sebagai Menteri Pertahanan (Menhan).</p><p>Entah kebetulan atau tidak, ketika Prabowo menduduki posisi Menhan pihak Cina kembali \"berulah\" dengan memasuki wilayah perairan Indonesia di Natuna setelah beberapa lama sepi pemberitaan serupa. Terakhir kali adalah di tahun 2016 lalu dimana kapal-kapal asal Cina \"berkonfrontasi\" dengan kapal patroli Indonesia.</p><p><br></p><p></p>', 1, 'assad', 1, '2019-12-31 07:52:36', '2020-08-11 13:03:48', 0, 1),
(6, 'tes', '1597036648.jpg', 'tes', 1, 'tag', 1, '2020-08-10 12:17:28', '2020-08-10 12:17:28', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_gallery`
--

CREATE TABLE `tbl_gallery` (
  `id_gallery` int(11) NOT NULL,
  `name_image_gallery` varchar(100) NOT NULL,
  `description_image_gallery` varchar(100) NOT NULL,
  `user_gallery` int(1) NOT NULL,
  `created_date_gallery` datetime NOT NULL DEFAULT current_timestamp(),
  `last_updated_date_gallery` datetime NOT NULL DEFAULT current_timestamp(),
  `creator_gallery` int(1) NOT NULL,
  `last_updater_gallery` int(1) NOT NULL,
  `status_gallery` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_gallery`
--

INSERT INTO `tbl_gallery` (`id_gallery`, `name_image_gallery`, `description_image_gallery`, `user_gallery`, `created_date_gallery`, `last_updated_date_gallery`, `creator_gallery`, `last_updater_gallery`, `status_gallery`) VALUES
(1, '1597032988.jpg', 'gambar 12', 1, '2020-07-28 15:07:55', '2020-07-28 15:07:55', 1, 1, 1),
(4, '1595926845.PNG', 'descs', 1, '2020-07-28 15:39:18', '2020-07-28 15:39:18', 1, 1, -1),
(5, '1595949887.png', 'tes', 1, '2020-07-28 22:24:47', '2020-07-28 22:24:47', 1, 1, -1),
(6, '1595956062.png', 'aabbcc', 1, '2020-07-29 00:04:27', '2020-07-29 00:04:27', 1, 1, -1),
(7, '1597033008.png', 'tes', 1, '2020-08-10 11:16:48', '2020-08-10 11:16:48', 1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_menu`
--

CREATE TABLE `tbl_menu` (
  `id_menu` int(11) NOT NULL,
  `name_menu` varchar(100) NOT NULL,
  `created_date_menu` datetime NOT NULL DEFAULT current_timestamp(),
  `last_updated_date_menu` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status_menu` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_menu`
--

INSERT INTO `tbl_menu` (`id_menu`, `name_menu`, `created_date_menu`, `last_updated_date_menu`, `status_menu`) VALUES
(1, 'psychologi', '2020-04-12 07:20:20', '2020-07-29 12:22:25', 1),
(2, 'service', '2020-04-12 07:20:20', '2020-04-12 07:20:20', 1),
(3, 'admin', '2020-04-12 07:20:20', '2020-04-12 07:20:20', 1),
(4, 'role', '2020-04-12 07:20:20', '2020-04-12 07:20:20', 1),
(5, 'settings', '2020-04-12 07:20:20', '2020-04-12 07:20:20', 1),
(6, 'tes', '2020-07-29 12:28:38', '2020-07-29 12:28:54', -1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pages`
--

CREATE TABLE `tbl_pages` (
  `id_pages` int(11) NOT NULL,
  `name_pages` varchar(100) NOT NULL,
  `description_pages` varchar(100) NOT NULL,
  `content_pages` text NOT NULL,
  `meta_title_pages` text NOT NULL,
  `meta_description_pages` text NOT NULL,
  `meta_keywords_pages` text NOT NULL,
  `created_date_pages` datetime NOT NULL DEFAULT current_timestamp(),
  `last_updated_date_pages` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `creator_pages` int(1) NOT NULL,
  `last_updater_pages` int(1) NOT NULL,
  `status_pages` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_pages`
--

INSERT INTO `tbl_pages` (`id_pages`, `name_pages`, `description_pages`, `content_pages`, `meta_title_pages`, `meta_description_pages`, `meta_keywords_pages`, `created_date_pages`, `last_updated_date_pages`, `creator_pages`, `last_updater_pages`, `status_pages`) VALUES
(1, 'About', 'About Pages', 'content About Pages', 'meta title about', 'meta desc about', 'meta key about', '2020-04-12 07:20:20', '2020-08-05 15:20:26', 0, 1, 1),
(2, 'service', 'services', 'content', 'title meta', 'desc meta', 'keyword meta', '2020-04-12 07:20:20', '2020-07-29 01:10:09', 0, 1, 0),
(3, 'admin', '', '', '', '', '', '2020-04-12 07:20:20', '2020-04-12 07:20:20', 0, 0, 1),
(4, 'role', '', '', '', '', '', '2020-04-12 07:20:20', '2020-04-12 07:20:20', 0, 0, 1),
(5, 'settings', '', '', '', '', '', '2020-04-12 07:20:20', '2020-04-12 07:20:20', 0, 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product`
--

CREATE TABLE `tbl_product` (
  `id_product` int(11) NOT NULL,
  `name_product` varchar(100) DEFAULT NULL,
  `thumbnail_product` varchar(100) NOT NULL,
  `created_date_product` datetime NOT NULL DEFAULT current_timestamp(),
  `last_updated_date_product` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `creator_product` int(1) NOT NULL,
  `last_updater_product` int(1) NOT NULL,
  `status_product` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_product`
--

INSERT INTO `tbl_product` (`id_product`, `name_product`, `thumbnail_product`, `created_date_product`, `last_updated_date_product`, `creator_product`, `last_updater_product`, `status_product`) VALUES
(3, 'produk 1', '11.png', '2020-07-28 23:29:30', '2020-07-28 23:31:49', 1, 1, 1),
(4, 'produk 2', '1595955266.PNG', '2020-07-28 23:49:07', '2020-07-28 23:54:26', 1, 1, 1),
(5, 'produk 3', '1595954978.png', '2020-07-28 23:49:38', '2020-07-28 23:56:25', 1, 1, -1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product_images`
--

CREATE TABLE `tbl_product_images` (
  `id_images` int(11) NOT NULL,
  `name_images` varchar(100) NOT NULL,
  `description_images` varchar(100) NOT NULL,
  `product_id_images` int(1) NOT NULL,
  `created_date_images` datetime NOT NULL DEFAULT current_timestamp(),
  `last_updated_date_images` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `creator_images` int(1) NOT NULL,
  `last_updater_images` int(1) NOT NULL,
  `status_images` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_role`
--

CREATE TABLE `tbl_role` (
  `id_role` int(11) NOT NULL,
  `name_role` varchar(100) NOT NULL,
  `created_date_role` datetime NOT NULL DEFAULT current_timestamp(),
  `last_updated_date_role` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status_role` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `tbl_role`
--

INSERT INTO `tbl_role` (`id_role`, `name_role`, `created_date_role`, `last_updated_date_role`, `status_role`) VALUES
(1, 'Administrator', '2020-04-12 07:17:03', '2020-04-12 07:17:03', 1),
(2, 'Accountings', '2020-04-12 07:17:22', '2020-07-29 12:34:01', 1),
(3, 'role baru', '2020-07-29 12:36:16', '2020-07-29 12:36:21', -1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_role_menu`
--

CREATE TABLE `tbl_role_menu` (
  `id_role_menu` int(11) NOT NULL,
  `role_id` int(1) NOT NULL,
  `menu_id` int(1) NOT NULL,
  `created_date_role_menu` datetime NOT NULL DEFAULT current_timestamp(),
  `last_updated_date_role_menu` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status_role_menu` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_role_menu`
--

INSERT INTO `tbl_role_menu` (`id_role_menu`, `role_id`, `menu_id`, `created_date_role_menu`, `last_updated_date_role_menu`, `status_role_menu`) VALUES
(1, 1, 1, '2020-07-29 14:21:58', '2020-07-29 14:25:14', -1),
(2, 1, 2, '2020-07-29 14:22:16', '2020-07-29 14:25:33', -1),
(3, 2, 1, '2020-07-29 14:24:46', '2020-07-29 14:24:46', 1),
(4, 1, 1, '2020-07-29 14:25:25', '2020-07-29 14:25:45', -1),
(5, 1, 2, '2020-07-29 14:26:30', '2020-07-29 14:26:30', 1),
(6, 1, 3, '2020-07-29 14:26:30', '2020-07-29 14:26:30', 1),
(7, 1, 4, '2020-07-29 14:26:31', '2020-07-29 14:26:31', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_settings`
--

CREATE TABLE `tbl_settings` (
  `id_settings` int(100) NOT NULL,
  `title_web` varchar(100) NOT NULL,
  `subtitle_web` varchar(100) NOT NULL,
  `title_admin_panel` varchar(100) NOT NULL,
  `title_admin_panel_minimize` varchar(100) NOT NULL,
  `fav_icon` varchar(100) NOT NULL,
  `logo_web` varchar(100) NOT NULL,
  `url_facebook` varchar(100) NOT NULL,
  `url_twitter` varchar(100) NOT NULL,
  `url_instagram` varchar(100) NOT NULL,
  `meta_title` varchar(1000) NOT NULL,
  `meta_description` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_settings`
--

INSERT INTO `tbl_settings` (`id_settings`, `title_web`, `subtitle_web`, `title_admin_panel`, `title_admin_panel_minimize`, `fav_icon`, `logo_web`, `url_facebook`, `url_twitter`, `url_instagram`, `meta_title`, `meta_description`) VALUES
(1, 'Compify', 'Company Profile System', 'Compify', 'CMP', 'Untitled-1.png', 'Untitled-1.png', 'http://facebook.com/games', 'http://twitter.com/game', 'http://instagram.com/game', 'Magazine', 'Artikel terbaik');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_team`
--

CREATE TABLE `tbl_team` (
  `id_team` int(11) NOT NULL,
  `email_team` varchar(100) NOT NULL,
  `photo_team` varchar(100) NOT NULL,
  `name_team` varchar(100) NOT NULL,
  `phone_team` varchar(100) NOT NULL,
  `address_team` varchar(100) NOT NULL,
  `gender_team` int(1) NOT NULL,
  `role_team` varchar(100) NOT NULL,
  `description_team` varchar(100) NOT NULL,
  `created_date_team` datetime NOT NULL DEFAULT current_timestamp(),
  `last_updated_date_team` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `creator_team` int(1) NOT NULL,
  `last_updater_team` int(1) NOT NULL,
  `status_team` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_team`
--

INSERT INTO `tbl_team` (`id_team`, `email_team`, `photo_team`, `name_team`, `phone_team`, `address_team`, `gender_team`, `role_team`, `description_team`, `created_date_team`, `last_updated_date_team`, `creator_team`, `last_updater_team`, `status_team`) VALUES
(1, 'admin@admin.com', '11.jpg', 'Eye to Eye', '55129448', 'Jalan Hijau raya', 0, '0', 'description admin indonesia', '2018-12-28 01:16:47', '2020-04-01 13:37:46', 0, 0, 1),
(2, 'joo@gmail.com', '1595952883.PNG', 'joo', '123123213', 'asdasd', 0, 'rrrrr', 'asdsadsad', '2020-07-28 23:14:43', '2020-07-28 23:14:43', 1, 1, 1),
(3, '12345@gmail.com', '1595953464.png', 'abcde', '12345', 'address', 1, 'manager', 'deskripsi', '2020-07-28 23:15:47', '2020-07-28 23:26:05', 1, 1, -1),
(4, 'admin@adsad.com', '1595953032.PNG', 'tes', '12312321', 'adsadsad', 1, 'adasd', 'asdasd', '2020-07-28 23:17:12', '2020-07-28 23:17:12', 1, 1, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `tbl_blog_category`
--
ALTER TABLE `tbl_blog_category`
  ADD PRIMARY KEY (`id_blog_category`);

--
-- Indexes for table `tbl_blog_post`
--
ALTER TABLE `tbl_blog_post`
  ADD PRIMARY KEY (`id_blog_post`),
  ADD KEY `category_blog_post` (`category_blog_post`);

--
-- Indexes for table `tbl_gallery`
--
ALTER TABLE `tbl_gallery`
  ADD PRIMARY KEY (`id_gallery`);

--
-- Indexes for table `tbl_menu`
--
ALTER TABLE `tbl_menu`
  ADD PRIMARY KEY (`id_menu`);

--
-- Indexes for table `tbl_pages`
--
ALTER TABLE `tbl_pages`
  ADD PRIMARY KEY (`id_pages`);

--
-- Indexes for table `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD PRIMARY KEY (`id_product`);

--
-- Indexes for table `tbl_product_images`
--
ALTER TABLE `tbl_product_images`
  ADD PRIMARY KEY (`id_images`);

--
-- Indexes for table `tbl_role`
--
ALTER TABLE `tbl_role`
  ADD PRIMARY KEY (`id_role`);

--
-- Indexes for table `tbl_role_menu`
--
ALTER TABLE `tbl_role_menu`
  ADD PRIMARY KEY (`id_role_menu`),
  ADD KEY `role_id` (`role_id`),
  ADD KEY `tb_role_menu_ibfk_2` (`menu_id`);

--
-- Indexes for table `tbl_settings`
--
ALTER TABLE `tbl_settings`
  ADD PRIMARY KEY (`id_settings`);

--
-- Indexes for table `tbl_team`
--
ALTER TABLE `tbl_team`
  ADD PRIMARY KEY (`id_team`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tbl_blog_category`
--
ALTER TABLE `tbl_blog_category`
  MODIFY `id_blog_category` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_blog_post`
--
ALTER TABLE `tbl_blog_post`
  MODIFY `id_blog_post` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_gallery`
--
ALTER TABLE `tbl_gallery`
  MODIFY `id_gallery` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_menu`
--
ALTER TABLE `tbl_menu`
  MODIFY `id_menu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_pages`
--
ALTER TABLE `tbl_pages`
  MODIFY `id_pages` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_product`
--
ALTER TABLE `tbl_product`
  MODIFY `id_product` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_product_images`
--
ALTER TABLE `tbl_product_images`
  MODIFY `id_images` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_role`
--
ALTER TABLE `tbl_role`
  MODIFY `id_role` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_role_menu`
--
ALTER TABLE `tbl_role_menu`
  MODIFY `id_role_menu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_settings`
--
ALTER TABLE `tbl_settings`
  MODIFY `id_settings` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_team`
--
ALTER TABLE `tbl_team`
  MODIFY `id_team` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
