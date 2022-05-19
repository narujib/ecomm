-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 19, 2022 at 11:57 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_ekom`
--

-- --------------------------------------------------------

--
-- Table structure for table `home`
--

CREATE TABLE `home` (
  `id` int(11) NOT NULL,
  `hero_img_1` varchar(256) NOT NULL,
  `hero_img_2` varchar(256) NOT NULL,
  `hero_des` text NOT NULL,
  `about_img` varchar(256) NOT NULL,
  `about_des` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `home`
--

INSERT INTO `home` (`id`, `hero_img_1`, `hero_img_2`, `hero_des`, `about_img`, `about_des`) VALUES
(1, 'hero1.jpg', 'hero2.jpg', 'Product SMK Negeri Jawa tengah    ', 'about.jpeg', 'SMK Negeri Jateng di Semarang adalah sekolah yang didirikan oleh Pemerintah Provinsi Jawa Tengah melalui Keputusan Gubernur Jawa Tengah nomor 420/28 tahun 2014 tanggal 22 April 2014, dan diresmikan oleh Menteri Pendidikan dan Kebudayaan Prof.DR. Muhammad Nuh,DEA pada tanggal 2 Juni 2014');

-- --------------------------------------------------------

--
-- Table structure for table `jurusan`
--

CREATE TABLE `jurusan` (
  `id` int(11) NOT NULL,
  `jurusan` varchar(128) NOT NULL,
  `wa` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jurusan`
--

INSERT INTO `jurusan` (`id`, `jurusan`, `wa`, `email`) VALUES
(1, 'Administrator', '1111111111', 'admin@gmail.com'),
(2, 'Bisnis Konstruksi dan Properti', '2222222222', 'bkp@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `title` varchar(128) NOT NULL,
  `image` varchar(256) NOT NULL,
  `image2` varchar(256) NOT NULL,
  `image3` varchar(256) NOT NULL,
  `image4` varchar(256) NOT NULL,
  `image5` varchar(256) NOT NULL,
  `youtube_embed` varchar(128) NOT NULL,
  `description` text NOT NULL,
  `jurusan_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `create_at` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `title`, `image`, `image2`, `image3`, `image4`, `image5`, `youtube_embed`, `description`, `jurusan_id`, `user_id`, `create_at`) VALUES
(1, 'Overview of ZWN Mainan Remote Control Mobil RC Gesture Sensing Stunt Car 360 Flip - 88A', 'zwn-mobil-mainan-rc-gesture-sensing-stunt-car-360-flip-2_4g-upgrade-88a-blue-163.jpg', 'zwn-mobil-mainan-rc-gesture-sensing-stunt-car-360-flip-2_4g-upgrade-88a-blue-164.jpeg', 'zwn-mobil-mainan-rc-gesture-sensing-stunt-car-360-flip-2_4g-upgrade-88a-blue-165.jpeg', 'zwn-mobil-mainan-rc-gesture-sensing-stunt-car-360-flip-2_4g-upgrade-88a-blue-167.jpg', 'zwn-mobil-mainan-rc-gesture-sensing-stunt-car-360-flip-2_4g-upgrade-88a-blue-170.jpg', 'aMVg3kxtrQs', 'Mobil-mobilan rc atau remote control sudah banyak di pasaran. Namun, mobil-mobilan yang menggunakan sensor gerak masih sedikit. Mobil rc ini bisa menjadi mainan yang tepat jika Anda bosan dengan mobil remot pada umumnya. Anda dapat memainkan mobil ini menggunakan gerakan jari, sehingga mobil dapat langsung bermanuver sesuai dengan input gerakan yang Anda berikan.', 1, 1, 1652569703),
(2, 'BEESCLOVER Keypad Numeric Multimedia Wireless 2.4GHz 35 Buttons - R57 - Black', 'beesclover-keypad-numeric-multimedia-wireless-24ghz-35-buttons-r57-black-5.jpg', 'beesclover-keypad-numeric-multimedia-wireless-24ghz-35-buttons-r57-black-4.jpg', 'beesclover-keypad-numeric-multimedia-wireless-24ghz-35-buttons-r57-black-1.jpg', 'beesclover-keypad-numeric-multimedia-wireless-24ghz-35-buttons-r57-black-2.jpg', 'default.jpg', 'mj1PN_U4-Uc', 'Numeric Multimedia keypad ini memiliki fitur wireless sehingga Anda dapat menggunakan numpad ini dari jarak jauh. Anda dapat berasa menggunakan kalkulator karena dapat menggunakan numpad ini dengan bebas. Menggunakan dongle wireless 2.4 GHz untuk terhubung ke numpad ini.', 1, 1, 1652953234);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `image` varchar(256) NOT NULL,
  `password` varchar(256) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(1) NOT NULL,
  `jurusan_id` int(11) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `image`, `password`, `role_id`, `is_active`, `jurusan_id`, `date_created`) VALUES
(1, 'Najib', 'najib@gmail.com', 'default.jpg', '$2y$10$I88gRGIEAgPh3wnpHHRiueiwBcc39vY12KU68pEJ72TSAHwiVlvfO', 1, 1, 1, 1652533423),
(2, 'Taro', 'taro@gmail.com', 'default.jpg', '$2y$10$r0GLHrpRGJ6UnReC3mulbeyMWXbvXbrk4OJgHaSpSRCznmh/pqTRW', 2, 1, 2, 1652533442),
(3, 'hamtaro', 'hamtaro@gmail.com', 'default.jpg', '$2y$10$023mN8ZsZgw1EVxEREQ./Oo4D7E1b7npKLraqty9cwS9wR/8Qo0mi', 2, 1, 2, 1652533494);

-- --------------------------------------------------------

--
-- Table structure for table `user_access_menu`
--

CREATE TABLE `user_access_menu` (
  `id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_access_menu`
--

INSERT INTO `user_access_menu` (`id`, `role_id`, `menu_id`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 2, 2),
(4, 1, 3);

-- --------------------------------------------------------

--
-- Table structure for table `user_menu`
--

CREATE TABLE `user_menu` (
  `id` int(11) NOT NULL,
  `menu` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_menu`
--

INSERT INTO `user_menu` (`id`, `menu`) VALUES
(1, 'Administrator'),
(2, 'User'),
(3, 'Menu');

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`id`, `role`) VALUES
(1, 'Administrator'),
(2, 'Member');

-- --------------------------------------------------------

--
-- Table structure for table `user_sub_menu`
--

CREATE TABLE `user_sub_menu` (
  `id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `title` varchar(128) NOT NULL,
  `url` varchar(128) NOT NULL,
  `icon` varchar(128) NOT NULL,
  `is_active` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_sub_menu`
--

INSERT INTO `user_sub_menu` (`id`, `menu_id`, `title`, `url`, `icon`, `is_active`) VALUES
(1, 1, 'Dashboard', 'administrator', 'fas fa-fw fa-tachometer-alt', 1),
(2, 2, 'My Profile', 'user', 'fas fa-fw fa-user', 1),
(3, 2, 'Edit Profile', 'user/editprofile', 'fas fa-fw fa-user-edit', 1),
(4, 3, 'Menu Management', 'menu', 'fas fa-fw fa-folder', 1),
(5, 3, 'Sub Menu Management', 'menu/submenu', 'fas fa-fw fa-folder-open', 1),
(6, 1, 'Role', 'administrator/role', 'fas fa-fw fa-user-cog', 1),
(7, 2, 'Change Password', 'user/changepassword', 'fas fa-fw fa-key', 1),
(8, 1, 'Accounts', 'administrator/accounts', 'fas fa-fw fa-users', 1),
(9, 1, 'Jurusan', 'administrator/jurusan', 'fas fa-fw fa-tasks', 1),
(10, 2, 'Product', 'user/product', 'fas fa-fw fa-calendar', 1),
(11, 1, 'Home', 'administrator/home', 'fas fa-fw fa-home', 1),
(12, 1, 'All Product', 'administrator/allproduct', 'fas fa-fw fa-calendar', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `home`
--
ALTER TABLE `home`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jurusan`
--
ALTER TABLE `jurusan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_access_menu`
--
ALTER TABLE `user_access_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_menu`
--
ALTER TABLE `user_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `home`
--
ALTER TABLE `home`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `jurusan`
--
ALTER TABLE `jurusan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user_access_menu`
--
ALTER TABLE `user_access_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user_menu`
--
ALTER TABLE `user_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
