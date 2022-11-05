-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 05, 2022 at 09:51 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `glorious`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `subtotal` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `user_id`, `product_id`, `quantity`, `subtotal`) VALUES
(11, 2, 10, 9, 1080),
(12, 6, 11, 3, 31800),
(13, 6, 12, 2, 900),
(15, 1, 12, 2, 900),
(16, 1, 18, 2, 1340),
(17, 1, 17, 20, 240),
(18, 2, 8, 2, 25000),
(20, 4, 15, 4, 2276),
(22, 9, 17, 1, 12),
(23, 1, 14, 2, 690),
(24, 2, 24, 10, 1100),
(28, 2, 11, 1, 10600),
(29, 1, 42, 1, 50);

-- --------------------------------------------------------

--
-- Table structure for table `inbox_details`
--

CREATE TABLE `inbox_details` (
  `id` int(11) NOT NULL,
  `user1_id` int(11) NOT NULL,
  `user2_id` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `inbox_details`
--

INSERT INTO `inbox_details` (`id`, `user1_id`, `user2_id`, `date`) VALUES
(1, 1, 2, '2022-11-03 00:55:01'),
(2, 1, 3, '2022-11-03 00:55:01'),
(3, 1, 4, '2022-11-03 00:55:01'),
(4, 1, 8, '2022-11-03 06:54:35'),
(5, 1, 7, '2022-11-03 07:00:09'),
(6, 1, 6, '2022-11-03 07:01:59'),
(7, 2, 1, '2022-11-03 07:01:59'),
(8, 4, 2, '2022-11-03 08:39:37'),
(9, 3, 1, '2022-11-03 08:45:53'),
(10, 6, 8, '2022-11-03 13:44:22'),
(11, 4, 1, '2022-11-03 08:39:37'),
(12, 8, 6, '2022-11-04 03:20:58'),
(13, 8, 9, '2022-11-04 03:39:14'),
(14, 8, 1, '2022-11-04 03:39:14'),
(15, 8, 10, '2022-11-04 03:51:32'),
(16, 8, 2, '2022-11-04 03:51:32'),
(17, 9, 1, '2022-11-04 04:48:58'),
(18, 2, 3, '2022-11-05 03:30:14'),
(19, 2, 3, '2022-11-05 03:30:56'),
(20, 2, 10, '2022-11-05 03:32:01'),
(21, 2, 6, '2022-11-05 04:21:38'),
(22, 6, 4, '2022-11-05 04:23:08'),
(23, 13, 4, '2022-11-05 05:06:24'),
(24, 4, 1, '2022-11-05 05:08:33');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(11) NOT NULL,
  `inbox_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `data` text DEFAULT NULL,
  `date_created` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `inbox_id`, `user_id`, `data`, `date_created`) VALUES
(1, 1, 1, 'Bay Juls musta', '2022-11-03 00:55:57'),
(2, 7, 2, 'Bay Joshua musta. Naa nkog Cebu ron Bay! Ikaw dha asa ka ron?', '2022-11-03 00:56:57'),
(3, 7, 2, 'Asa nka ron Bay!', '2022-11-03 00:57:57'),
(4, 2, 3, 'Bay puli nata kay gabie na tas, kaulanon na sd ron taud2x unya basa ta ron.', '2022-11-03 00:58:57'),
(5, 3, 4, 'Hey, meron po akong concern po sa inyong product, meron po bang discount ito?', '2022-11-03 00:58:57'),
(6, 2, 1, 'bay', '2022-11-03 06:53:08'),
(7, 1, 1, 'Bay ang atong uban nga products wala na halin\r\n', '2022-11-03 06:53:52'),
(8, 4, 1, 'Good morning maam or sir, gusto ko po eh cancel yong orderko salamat!', '2022-11-03 06:58:44'),
(9, 5, 1, 'bay jomel', '2022-11-03 07:00:09'),
(10, 1, 1, 'Bay juls logi na atong product bay paita. Katong shampoo oh wla na halin\"', '2022-11-03 07:00:53'),
(11, 6, 1, 'bay\" faragae, nag order kog headphone ba mo kuha ka bay sd?', '2022-11-03 07:03:32'),
(12, 6, 1, 'bay\' faragae, reply bay karon ra gyud adlawa.', '2022-11-03 07:03:32'),
(13, 3, 1, 'cha2x ganahan kag dress na koy baligya dri day.', '2022-11-03 07:05:22'),
(15, 8, 4, 'hoy july?', '2022-11-03 08:39:37'),
(16, 9, 3, 'Bay tag pila gani to imong cp nga baligya, pag ka mahala ato bay oy.', '2022-11-03 08:45:53'),
(17, 10, 6, 'batia sa inyo product sir haHA\r\n', '2022-11-03 13:44:23'),
(18, 3, 4, 'joshua gwapo, ganahan ko sa imo product duh.', '2022-11-04 01:56:17'),
(24, 11, 4, 'hoy joshua', '2022-11-04 02:07:12'),
(25, 11, 4, 'hoy batig nawong', '2022-11-04 02:51:30'),
(26, 8, 4, 'Juls, ang collaborate tana para daghan tag mabaligya', '2022-11-04 02:53:56'),
(27, 12, 8, 'good morning sir, kung dili mo ganahan sa akong product ayong mog palit diri. Gusto mig customer nga nindot og batasan salamat.', '2022-11-04 03:20:58'),
(51, 13, 8, 'gafu', '2022-11-04 03:44:50'),
(53, 14, 8, 'dddd', '2022-11-04 03:48:06'),
(54, 15, 8, 'hello sir, welcome to our shop!', '2022-11-04 03:51:32'),
(55, 16, 8, 'hello sir, welcome to our shop!', '2022-11-04 04:44:22'),
(56, 17, 9, 'Hello sir good afternoon!', '2022-11-04 04:48:58'),
(62, 17, 9, 'Sir we would like to know sir if you want to continue your payments thank you!', '2022-11-04 07:38:24'),
(64, 6, 1, 'bay pamahaw na baw', '2022-11-04 10:08:33'),
(65, 4, 1, 'hello sir\r\n', '2022-11-04 12:53:00'),
(66, 5, 1, 'Bay mamalihog kog ayo aning suga bay, bansay btaw ka', '2022-11-04 12:53:47'),
(68, 1, 1, 'Bay lipay kaayo ko bay kay nahalin kog daghan rong adlawa\r\n 😁', '2022-11-05 02:29:14'),
(69, 7, 2, 'Ay maayo noon bay kay nahalinan kag daghan hehe 🤣🤣🤣', '2022-11-05 02:58:52'),
(71, 18, 2, 'bay', '2022-11-05 03:30:14'),
(72, 19, 2, 'Bay jovanie, naa kay kwarta dha kay manghulam ko kay mo palit kog relo hehe.', '2022-11-05 03:30:56'),
(73, 20, 2, 'Hello sir good afternoon, kanang pwede ko mangutana kong unsa nga klase sa product nga naa sa inyong shop. Maraming Salamat.', '2022-11-05 03:32:01'),
(74, 21, 2, 'Bay Janrae haha', '2022-11-05 04:21:38'),
(75, 22, 6, 'charabel gwapa', '2022-11-05 04:23:08'),
(76, 1, 1, 'Bay nindota sa imong product bay hahah. lAHI RA GYUD Basta gwapo hehe 😁😂', '2022-11-05 04:30:11'),
(77, 23, 13, 'hie', '2022-11-05 05:06:24'),
(78, 24, 4, 'gwapa ko..hahaha😂', '2022-11-05 05:08:33'),
(79, 7, 2, 'HI bai, muahhh', '2022-11-05 08:49:17');

-- --------------------------------------------------------

--
-- Table structure for table `product_details`
--

CREATE TABLE `product_details` (
  `id` int(11) NOT NULL,
  `user_id` int(100) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_image` text NOT NULL,
  `product_info` varchar(255) NOT NULL,
  `category` varchar(20) NOT NULL,
  `status` varchar(10) NOT NULL,
  `stock` int(50) NOT NULL,
  `price` int(50) NOT NULL,
  `sold` int(11) DEFAULT NULL,
  `date_added` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product_details`
--

INSERT INTO `product_details` (`id`, `user_id`, `product_name`, `product_image`, `product_info`, `category`, `status`, `stock`, `price`, `sold`, `date_added`) VALUES
(8, 1, 'IPHONE PRO MAX 15', 'IMG-6364b89fb368f6.19232421.jpg', 'Big screen supports 5G network', 'Electronic', 'Active', 200, 12500, 7, '2022-11-04 07:00:47'),
(9, 1, 'Skin Care (For Skin Whitening)', 'IMG-635fcd6ab5af75.25644882.jpg', 'whitens your skin daily.', 'Other', 'Disabled', 54, 120, 0, '2022-10-31 13:28:10'),
(10, 1, 'Portable radio 50 kilowatts', 'IMG-635fcfc0aa1010.01627996.jpg', 'Light radio with extreme sound quality.', 'Electronic', 'Active', 280, 120, 0, '2022-10-31 13:38:08'),
(11, 1, 'Microscope Pro +', 'IMG-6364b7ff342125.47266247.jpg', 'Can identify atoms and particles with adjustable lenses. Super magnifying lens.', 'Other', 'Active', 23, 10600, 0, '2022-11-04 06:58:07'),
(12, 3, 'DS Korean Tshirt for Men Oversized Shirt(size M-2XL)', 'IMG-6361b492f0de36.69557481.jpg', 'This is a korean shirt', 'Other', 'Active', 345, 450, 0, '2022-11-02 00:06:42'),
(13, 3, 'DS Korean Tshirt for Men Laser Reflective T-Shirt Oversized Shirt for Men(size M-2XL)', 'IMG-6361b5e735ed52.95842487.jpg', 'Korean shirt for men and women', 'Other', 'Active', 56, 340, 0, '2022-11-02 00:12:23'),
(14, 4, 'Strawberry Dress', 'IMG-6361ff3c1e1c19.26817097.jpg', 'for fashion and outdoors. Perfect for teens!', 'Decoration', 'Active', 45, 345, 0, '2022-11-02 05:25:16'),
(15, 2, 'Nescafe - Orignal 3 in 1 Pack', 'IMG-63620dfd451ec0.38872150.jpg', 'Para sa single dyan, mag kape na kayo.', 'Other', 'Active', 34, 569, 0, '2022-11-02 06:28:13'),
(16, 2, 'Jacket for Winter', 'IMG-63625faae9b571.52838671.jpg', 'Thick good for bad weather', 'Decoration', 'Disabled', 56, 670, 0, '2022-11-02 12:16:42'),
(17, 6, 'Pancit Canton! Super Hot!', 'IMG-63630af05f55b5.48114095.jpg', 'swak sa budget. Makabusog gyud.', 'Kitchen', 'Active', 500, 12, 0, '2022-11-03 00:27:28'),
(18, 8, '	 46 Pcs Socket Wrench Tools Key Hand Tool Set Spanner', 'IMG-63630cfa5eb293.56765243.jpg', 'Brand : No Brand Application: Vehicle maintenance and repair tools Type: Hand tools, combination, wr', 'Furniture', 'Active', 45, 670, 0, '2022-11-03 00:36:10'),
(19, 8, '82pcs Household All in 1 tool set tool kit', 'IMG-63630d58e65ec3.15650354.jpg', '🌹 welcome  ！                          🌹 It can COD!      🌹 We provide the best service and the best ', 'Other', 'Active', 56, 450, 0, '2022-11-03 00:37:44'),
(20, 8, '❉☢№Tarantula S602 computer headset headset headset game dedicated 7.1 channel desktop notebook mobil', 'IMG-63630e1ee90a42.23836991.jpg', '\"👍 All products of our shop have quality assurance, excellent workmanship, high quality materials and reasonable price! Please feel free to buy. We will provide perfect after-sales service. ✅ Very important, please check your mobile phone number before or', 'Other', 'Active', 12000, 450, 0, '2022-11-03 00:41:02'),
(21, 1, 'Black Adam DVD Blue Ray Disc', 'IMG-636384ad573417.94237541.jpg', 'perfect for budgeting and high quality movie', 'Movies & TV', 'Disabled', 234, 120, 0, '2022-11-03 09:06:53'),
(22, 4, 'Friz Bizz Shampoo', 'IMG-636470bfe7e558.99653372.png', 'helps your hair grow stronger', 'Beauty and Personal ', 'Active', 56, 67, 0, '2022-11-04 01:54:07'),
(23, 3, 'Nescafé Original', 'IMG-636220ba4dc054.22564275.jpg', 'Twin Pack', 'Other', 'Active', 100, 13, 0, '2022-11-04 05:25:26'),
(24, 3, 'Bear Brand Milk', 'IMG-6362204d8bde77.76076382.jpg', 'for immune system', 'Other', 'Active', 12, 110, 0, '2022-11-04 05:25:26'),
(25, 3, 'Brown Sugar', 'IMG-636220d08693b2.56733262.jpg', 'sweet as honey', 'Other', 'Active', 100, 85, 0, '2022-11-04 05:26:31'),
(28, 2, 'Safari', 'IMG-636460036dee88.29234255.jpg', 'Murag safari sa africa', 'Other', 'Active', 223, 10, 0, '2022-11-04 05:29:08'),
(30, 9, 'BIRKIN Bangkok Fashion Trend Dress', 'IMG-6364ba172c5f45.17784095.jpg', '‼️ PLS READ  ORDER POLICY‼️  ‼️FABRIC: Cotton Spandex  ‼️SIZE: SMALL TO MEDIUM FRAME ONLY, we only have one size for this item. No size variation available, but we make sure it will fit small to med, also pls see actual pic posted  🌈 COLOR POLICY: Incase ', 'Fashion', 'Active', 450, 457, 0, '2022-11-04 07:07:03'),
(31, 9, 'Kinwoo T1013 Hoodies jacket For Men Graphic Hoodies For Men', 'IMG-6364bbb9c39e02.24142914.jpg', 'PLS READ ORDER POLICY Slim Fit Size Random Colors :No choose Colors at same Style Ple noted this One Check picture po before check out items NOTE !! WHEN THE PARCEL IS RECEIVED , PLEASE VIDEO WHILE OPENING AND PLEASE DETAIL EACH ITEM INSIDE . SEND US THE ', 'Fashion', 'Active', 57, 230, 0, '2022-11-04 07:14:01'),
(32, 9, 'Bobson Men\"s Basic Jacket Regular Fit 80444 (Bobson Red)', 'IMG-6364bfcc7119f9.34903017.jpg', 'Nice jacket', 'Fashion', 'Disabled', 340, 45, 0, '2022-11-04 07:31:24'),
(41, 2, 'Durex Condom', 'IMG-636620ac519e81.02714289.jpg', 'For safe performance', 'Beauty and Personal ', 'Active', 100, 35, NULL, '2022-11-05 08:37:00'),
(42, 2, 'Durex Lubricant', 'IMG-636620e8bb9f95.99657460.jpg', 'For smooth performance', 'Health & Household', 'Active', 12, 50, NULL, '2022-11-05 08:38:00'),
(43, 2, 'Broken Light Bulb', 'IMG-636621d31888f6.92088415.png', 'Broken like you', 'Decoration', 'Active', 15, 123, NULL, '2022-11-05 08:41:55');

-- --------------------------------------------------------

--
-- Table structure for table `profile_information`
--

CREATE TABLE `profile_information` (
  `id` int(11) NOT NULL,
  `name` varchar(40) NOT NULL,
  `age` int(12) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `password` varchar(60) NOT NULL,
  `email` varchar(50) NOT NULL,
  `location` varchar(50) NOT NULL,
  `profile_image` text DEFAULT NULL,
  `date_joined` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `profile_information`
--

INSERT INTO `profile_information` (`id`, `name`, `age`, `phone`, `password`, `email`, `location`, `profile_image`, `date_joined`) VALUES
(1, 'Joshua Premor Algadipe', 21, '09319127640', 'joshuakun', 'joshuaalgadipe@gmail.com', 'Brgy. Cabulihan, Vallehermoso, Negros Oriental', 'IMG-63646f8b39cbc2.50010547.jpg', '2022-10-31 11:37:32'),
(2, 'Julecenio Estorco', 21, '09324561234', 'jlecencio', 'julstorco@gmail.com', 'Canlaon, Vallehermoso, Negros Oriental', 'IMG-636217428ae1b6.16737872.png', '2022-10-31 12:08:43'),
(3, 'Jovanie E. Dasian', 22, '09345672314', 'jovaniedasian', 'jovanie123@gmail.com', 'Dalaguette, Cebu City', 'IMG-6361fa50ea0255.75867359.jpg', '2022-10-31 12:08:43'),
(4, 'Charebel Bejoc', 21, '09657843567', 'chacha12345', 'charebelbejoc@gmail.com', 'Danao, Cebu City', 'IMG-6361fe72812231.59137418.jpg', '2022-10-31 12:08:43'),
(6, 'Janrae Fagaragan', 21, '09345678453', 'janrae12345', 'janraefagaragan@gmail.com', 'Bohol City', 'IMG-63630b62aadbf5.39672876.jpg', '2022-11-02 05:20:59'),
(7, 'Jomel Calungsod', 21, '09876896547', 'jomelcalungsod', 'jomelcalungsod@gmail.com', 'Cebu Cuty', NULL, '2022-11-03 00:24:36'),
(8, 'Electric Store', 34, '09879086758', 'electricstore', 'electricstore@gmail.com', 'Quipo, Manila', 'IMG-63630c1e1aaab9.82110505.jpg', '2022-11-03 00:31:29'),
(9, 'JK Dressing', 31, '09453821345', 'dressingjk34567', 'jkdressing.noreply@gmail.com', 'Mandaue, Cebu City', 'IMG-63649998010956.94515967.jpg', '2022-11-03 00:31:29'),
(10, 'Keenan Pat', 32, '09879678654', 'keenanpat', 'keeenanpat@gmail.com', 'Cebu City', NULL, '2022-11-04 03:50:34'),
(11, 'Cristy Toquero', 21, '09871678654', 'toquerochristy', 'toquerochristy@gmail.com', 'Canlaon City', NULL, '2022-11-04 03:50:34'),
(12, 'Mary Grace Elias', 22, '09571678611', 'marygraceelias', 'marygraceelias123@gmail.com', 'Samar, Leyte', NULL, '2022-11-04 03:50:34'),
(13, 'chabbe', 20, '09238520011', 'chabbe23', 'chabbe@gmail.com', 'cebu', NULL, '2022-11-05 04:57:47');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `inbox_details`
--
ALTER TABLE `inbox_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_details`
--
ALTER TABLE `product_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `profile_information`
--
ALTER TABLE `profile_information`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `inbox_details`
--
ALTER TABLE `inbox_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;

--
-- AUTO_INCREMENT for table `product_details`
--
ALTER TABLE `product_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `profile_information`
--
ALTER TABLE `profile_information`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
