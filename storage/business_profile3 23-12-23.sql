-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 23, 2023 at 10:32 AM
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
-- Database: `business_profile3`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_info`
--

CREATE TABLE `admin_info` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `admin_name` varchar(255) NOT NULL,
  `number` varchar(11) NOT NULL,
  `admin_email` varchar(255) NOT NULL,
  `admin_image` varchar(255) NOT NULL DEFAULT 'https://static.vecteezy.com/system/resources/previews/011/675/374/original/man-avatar-image-for-profile-png.png',
  `password` varchar(255) NOT NULL,
  `role` enum('admin','superAdmin') NOT NULL DEFAULT 'admin',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin_info`
--

INSERT INTO `admin_info` (`id`, `admin_name`, `number`, `admin_email`, `admin_image`, `password`, `role`, `created_at`, `updated_at`) VALUES
(6, 'Mostafizur Rahman', '01950165017', 'mostafizur0195@gmail.com', 'https://static.vecteezy.com/system/resources/previews/011/675/374/original/man-avatar-image-for-profile-png.png', '$2y$10$dTqLqKh16W8.hGf6i/P3hO67M6EJ2FoMCEDRJB9x.5xmBLqgeTXDm', 'superAdmin', '2023-11-27 04:20:43', '2023-11-27 04:20:43'),
(7, 'Rafi Mazumder', '01647429903', 'raihan191352768@gmail.com', 'https://static.vecteezy.com/system/resources/previews/011/675/374/original/man-avatar-image-for-profile-png.png', '$2y$10$K0w6n/SAGk1wdmqgE3ifCecHCD9FiWJm/YznhtWoCmagZrpyE5c4.', 'admin', '2023-11-27 22:49:34', '2023-11-27 22:49:34'),
(8, 'Tanzia Basher Chaity', '01896283282', 'tchaity282@gmail.com', 'https://static.vecteezy.com/system/resources/previews/011/675/374/original/man-avatar-image-for-profile-png.png', '$2y$10$iQFvP5Z2jEvYGpYkOaAIp.wccb7Mtw08/XnJC8qXgfaLYgoFyIgpK', 'admin', '2023-11-27 22:51:26', '2023-11-27 22:51:26');

-- --------------------------------------------------------

--
-- Table structure for table `area`
--

CREATE TABLE `area` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `districts` varchar(255) NOT NULL,
  `area` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`area`)),
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `area`
--

INSERT INTO `area` (`id`, `districts`, `area`, `created_at`, `updated_at`) VALUES
(1, 'Dhaka', '[\"Mirpur\",\"Uttara\",\"Savar\",\"Mohammadpur\",\"Jatrabari\",\"Gulshan\",\"Dhanmondi\",\"Basundhara\",\"Badda\",\"Baridhara\",\"Khaligaon\",\"Elephant Road\",\"Rampura\",\"Keraniganj\",\"Tongi\",\"Banani\",\"Malibag\",\"Basabo\",\"Tejgaon\",\"Lalbag\",\"Demra\",\"Kamrangirchar\",\"Motijheel\",\"Khilkhet\",\"Banglamotor\",\"Purbachal\",\"Mogbazar\",\"Sutrapur\",\"Banasree\",\"Farmgate\",\"Mohakhali\",\"Wari\",\"Paltan\",\"Cantonment\",\"Bangshal\",\"New Market\",\"Shyamoli\",\"Aftab Nagar\",\"Hazaribagh\",\"Ramna\",\"Chaukbazar\",\"Bashundhara City\",\"ECB Chattar\",\"Dhamrai\",\"Shantinagar\",\"Kafrul\",\"Mawa Highway\",\"Kotwali\",\"Basila\",\"Nawabganj\",\"Dohar\"]', '2023-12-07 12:23:49', '2023-12-07 12:23:49'),
(2, 'Gazipur', '[\"Gazipur Sadar\",\"Kapasia\",\"Sripur\",\"Kaliganj\",\"Kaliakior\"]', '2023-12-12 05:17:00', '2023-12-12 05:17:00'),
(3, 'Kishoreganj', '[\"Kishoreganj Sadar\",\"Mithamoin\",\"Tarail\",\"Pakundia\",\"Kuliarchar\",\"Katiadi\",\"Nikli\",\"Karimganj\",\"Austagram\",\"Bajitpur\",\"Bhairab\",\"Hossainpur\",\"Itna\"]', '2023-12-12 05:18:21', '2023-12-12 05:18:21'),
(4, 'Manikganj', '[\"Ghior\",\"Daulatpur\",\" Manikganj Sadar\",\"Shibalaya\",\"Saturia\",\"Singair\",\"Harirampur\"]', '2023-12-12 05:35:49', '2023-12-12 05:35:49'),
(5, 'Munshiganj', '[\"Gazaria\",\"Tongibari\",\"Munshiganj Sadar\",\"Lohajang\",\"Sreenagar\",\"Serajdikhan\"]\r\n', '2023-12-12 05:51:14', '2023-12-12 05:51:14'),
(6, 'Narayanganj', '[\"Araihazar\",\"Bandar\",\"Narayanganj Sadar\",\"Rupganj\",\"Sonargaon\"]', '2023-12-12 06:02:31', '2023-12-12 06:02:31'),
(7, 'Narshingdi', '[\"Shibpur\",\"Palash\",\"Narshingdi Sadar\",\"Raipura\",\"Belabo\",\"Monohardi\"]', '2023-12-12 06:39:20', '2023-12-12 06:39:20'),
(8, 'Faridpur', '[\"Alfadanga\",\"Char Bhadrasan\",\"Nagarkanda\",\"Faridpur Sadar\",\"Boalmari Upazila\",\"Bhanga\",\"Madhukhali\",\"Sadarpur\",\"Saltha\"]', '2023-12-12 06:42:16', '2023-12-12 06:42:16'),
(9, 'Tangail', '[\"Ghatail\",\"Shakhipur\",\"Mirzapur\",\"Tangail Sadar\",\"Madhupur\",\"Kalihati\",\"Gopalpur\",\"Nagarpur\",\"Bhuapur\",\"Basail\",\"Dhanbari\",\"Delduar\"]', '2023-12-12 06:53:26', '2023-12-12 06:53:26'),
(10, 'Gopalganj', '[\"Gopalganj Sadar\",\"Kashiyani\",\"Tungipara\",\"Kotalipara\",\"Mukshudpur\"]', '2023-12-12 06:56:49', '2023-12-12 06:56:49'),
(11, 'Madaripur', '[\"Dasar\",\"Shibchor\",\"Kalkini\",\"Madaripur Sadar\",\"Rajoir\"] \r\n', '2023-12-12 06:58:59', '2023-12-12 06:58:59'),
(12, 'Rajbari', '[\"Baliakandi\",\"Goalanda\",\"Pangsha\",\"Kalukhali\",\"Rajbari Sadar\"]', '2023-12-12 06:59:58', '2023-12-12 06:59:58'),
(13, 'Shariyatpur', '[\"Gosairhat\",\"Zanjira\",\"Damudya\",\"Naria\",\"Bhedarganj\",\"Shariatpur Sadar\"]\r\n', '2023-12-12 07:02:12', '2023-12-12 07:02:12'),
(14, 'Chattogram', '[\"Karnafuli\",\"Kotwali\",\"Khulshi\",\"Chandgaon\",\"Double Mooring\",\"Panchlaish\",\"Pahartali\",\"Bandar\",\"Bakalia\",\"Bayejid Bustami\",\"Halishahar\",\"Anowara\",\"Chandanaish\",\"Patiya\",\"Fatikchhari\",\"Banshkhali\",\"Boalkhali\",\"Mirsharai\",\"Rouzan\",\"Rangunia\",\"Lohagara\",\"Sandwip\",\"Satkania\",\"Sitakunda\",\"Hathazari\"]', '2023-12-12 05:14:10', '2023-12-12 05:14:10'),
(15, 'Cox\'s Bazar', '[\"Ukhia\",\"Cox\'s Bazar Sadar\",\"Kutubdia\",\"Chakaria\",\"Teknaf\",\"Pekua\",\"Maheshkhali\",\"Ramu\"]', '2023-12-12 09:41:55', '2023-12-12 09:41:55'),
(16, 'Rangamati', '[\"Kawkhali\",\"Kaptai\",\"Juraichhari\",\"Naniarchar\",\"Barkal\",\"Baghaichhari\",\"Belaichhari\",\"Rangamati Sadar\",\"Rajasthali\",\"Langadu\"]', '2023-12-12 09:43:17', '2023-12-12 09:43:17'),
(17, 'Bandarban', '[\"Alikadam\",\"Thanchi\",\"Naikhongchhari\",\"Bandarban Sadar\",\"Ruma\",\"Rowangchhari\",\"Lama\"]', '2023-12-12 09:43:17', '2023-12-12 09:43:17'),
(18, 'Khagrachhari', '[\"Khagrachhari Sadar\",\"Dighinala\",\"Panchhari\",\"Mahalchhari\",\"Matiranga\",\"Manikchhari\",\"Ramgarh\",\"Lakshmichhari\",\"Guimara\"]', '2023-12-12 09:43:17', '2023-12-12 09:43:17'),
(19, 'Feni', '[\"Chhagalnaiya\",\"Daganbhuiyan\",\"Parshuram\",\"Fulgazi\",\"Feni Sadar\",\"Sonagazi\"]', '2023-12-12 09:43:17', '2023-12-12 09:43:17'),
(20, 'Lakshmipur', '[\"Kamalnagar\",\"Ramganj\",\"Ramgati\",\"Raipur\",\"Lakshmipur Sadar\"]', '2023-12-12 09:43:17', '2023-12-12 09:43:17'),
(21, 'Cumilla', '[\"Comilla Adarsha Sadar\",\"Chandina\",\"Chauddagram\",\"Titas\",\"Daudkandi\",\"Debidwar\",\"Barura\",\"Burichang\",\"Brahmanpara\",\"Manoharganj\",\"Muradnagar\",\"Meghna\",\"Laksam\",\"Nangalkot\",\"Comilla Sadar Dakshin\",\"Homna\",\"Lalmai\"]', '2023-12-12 09:43:17', '2023-12-12 09:43:17'),
(22, 'Noakhali', '[\"Kabirhat\",\"Companiganj\",\"Chatkhil\",\"Noakhali Sadar\",\"Begumganj\",\"Senbagh\",\"Subarnachar\",\"Sonaimuri\",\"Hatiya\"]', '2023-12-12 09:43:17', '2023-12-12 09:43:17'),
(23, 'Brahmanbaria', '[\"Akhaura\",\"Ashuganj\",\"Kasba\",\"Nabinagar\",\"Nasirnagar\",\"Banchharampur\",\"Brahmanbaria Sadar\",\" Sarail\"]', '2023-12-12 09:43:17', '2023-12-12 09:43:17'),
(24, 'Chandpur', '[\"Kachua\",\"Chandpur Sadar\",\"Faridganj\",\"Matlab Uttar\",\"Matlab Dakshin\",\"Shahrasti\",\"Haimchar\",\"Hajiganj\"]', '2023-12-12 09:43:17', '2023-12-12 09:43:17'),
(25, 'Sylhet', '[\"Katuwali Thana\",\"Bimanbondar Thana\",\"Jalalabad Thana\",\" South Surma\",\"Shahporan\",\"Moglabazar\"]', '2023-12-13 09:13:30', '2023-12-13 09:13:30'),
(26, 'Habiganj', '[\"Ajmiriganj\",\"Chunarughat\",\"Nabiganj\",\"Baniachong\",\"Bahubal\",\"Madhabpur\",\"Lakhai\",\"Habiganj Sadar\",\"Shayestaganj\"]\r\n', '2023-12-13 09:13:30', '2023-12-13 09:13:30'),
(27, 'Moulvibazar\r\n', '[\"Kamalganj\",\"Kulaura\",\"Juri\",\"Maulvibazar Sadar\",\"Barlekha\",\"Rajnagar\",\"Sreemangal\"]', '2023-12-13 09:13:30', '2023-12-13 09:13:30'),
(28, 'Sunamganj', '[\"Chhatak\",\"Jagannathpur\",\"Jamalganj\",\"Tahirpur\",\"Dakshin Sunamganj\",\"Derai\",\"Dowarabazar\",\"Dharampasha\",\"Bishwambarpur\",\"Sulla\",\"Sunamganj Sadar\"] \r\n', '2023-12-13 09:13:30', '2023-12-13 09:13:30'),
(29, 'Sylhet', '[\"Kanaighat\",\"Companiganj\",\"Gowainghat\",\"Golabganj\",\"Zakiganj\",\"Jaintiapur\",\"Dakshin Surma\",\"Fenchuganj\",\"Balaganj\",\"Beanibazar\",\"Bishwanath\",\"Sylhet Sadar\" \r\n]', '2023-12-13 09:13:30', '2023-12-13 09:13:30'),
(30, 'Rajshahi', '[\"Boalia\",\"Matihar\",\"Rajpara\",\"Shah Mokdhum \"]', '2023-12-13 09:13:30', '2023-12-13 09:13:30'),
(31, 'Bogra', '[\"Adamdighi\",\"Kahaloo\",\"Gabtali\",\"Dhupchanchia\",\"Dhunat\",\"Nandigram\",\"Bogra sadar\",\"Shahjahanpur\",\"Shibganj\",\"Sherpur\",\"Sariakandi\",\"Sonatala\"]', '2023-12-13 09:13:30', '2023-12-13 09:13:30'),
(32, 'Pabna', '[\"Atgharia\",\"Ishwardi\",\"Chatmohar\",\"Pabna Sadar\",\"Faridpur\",\"Bera\",\"Bhangura\",\"Santhia\",\"Sujanagar\"]', '2023-12-13 09:13:30', '2023-12-13 09:13:30'),
(33, 'Sirajganj', '[\"Ullahpara\",\"Kazipur\",\"Kamarkhanda\",\"Chauhali\",\"Tarash\",\"Belkuchi\",\"Raiganj\",\"Shahjadpur\",\"Sirajganj Sadar\"]', '2023-12-13 09:13:30', '2023-12-13 09:13:30'),
(34, 'Naogaon', '[\"Atrai\",\"Dhamoirhat\",\"Niamatpur\",\"Patnitala\",\"Porsha\",\"Badalgachhi\",\"Mahadebpur\",\"Manda\",\"Naogaon Sadar\",\"Raninagar\",\"Sapahar\"]', '2023-12-13 09:13:30', '2023-12-13 09:13:30'),
(36, 'Joypurhat', '[\"Akkelpur\",\"Kalai\",\"Khetlal\",\"Joypurhat Sadar\",\"Panchbibi\"]', '2023-12-13 09:13:30', '2023-12-13 09:13:30'),
(37, 'Bagerhat', '[\"kachua\",\"chitalmari\",\"fakirhat\",\"bagerhat sadar\",\"mongla\",\"morrelgonj\",\"mollahat\",\"rampal\",\"sarankhola\"]', '2023-12-17 09:13:30', '2023-12-13 09:13:30'),
(38, 'Chuadanga', '[\"Alamdanga\",\"Chuadanga Sadar\",\"Jiban Nagar\",\"Damurhuda\"]', '2023-12-17 09:13:30', '2023-12-13 09:13:30'),
(39, 'Jessore', '[\"Abhaynagar\",\"Bagherpara\",\"Chowgacha\",\"Jashore Sadar\",\"Jhikargachha\",\"Keshabpur\",\"Manirampur\",\"Sharsha\"]', '2023-12-17 09:13:30', '2023-12-13 09:13:30'),
(40, 'Jhenaidha', '[\"Kaliganj\",\"Kaliganj\",\"Jhenaidah Sadar\",\"Maheshpur\",\"Shailkupa\",\"Harinakunda\"]', '2023-12-17 09:13:30', '2023-12-13 09:13:30'),
(41, 'Khulna District', '[\"Koyra\",\"Dumuria\",\"Terokhada\",\"Dacope\",\"Dighalia\",\"Paikgachha\",\"Phultala\",\"Batiaghata\",\"Rupsa\",\"Khulna Sadar\"]', '2023-12-17 09:13:30', '2023-12-13 09:13:30'),
(42, 'Khustia', '[\"Kumarkhali\",\"Kushtia Sadar\",\"Khoksa\",\"Daulatpur\",\"Bheramara\",\"Mirpur\"]', '2023-12-17 09:13:30', '2023-12-13 09:13:30'),
(43, 'Magura', '[\"Magura Sadar\",\"Mohammadpur\",\"Shalikha\",\"Sreepur\"]', '2023-12-17 09:13:30', '2023-12-13 09:13:30'),
(45, 'Meherpur', '[\"Gangni\",\"Mujibnagar\",\"Meherpur Sadar\"]', '2023-12-17 09:13:30', '2023-12-13 09:13:30'),
(46, 'Narail', '[\"Kalia\",\"Narail Sadar\",\"Lohagara\"]', '2023-12-17 09:13:30', '2023-12-13 09:13:30'),
(47, 'Satkhira', '[\"Assasuni\",\"Kalaroa\",\"Kaliganj\",\"Tala\",\"Debhata\",\"Shyamnagar\",\"Satkhira Sadar\"]', '2023-12-17 09:13:30', '2023-12-13 09:13:30'),
(48, 'Barishal', '[\"Agailjhara\",\"Wazirpur\",\"Gaurnadi\",\n\"Barisal Sadar\",\"Bakerganj\",\"Banaripara\",\"Babuganj\",\"Muladi\",\"Mehendiganj\",\"Hizla\",\n\"Kotwali\",\"Airport\",\"Bandar\",\"Kawnia\"]', '2023-12-18 09:13:30', '2023-12-18 06:49:59'),
(49, 'Barguna', '[\"Amtali\",\"Bamna\",\"Barguna Sadar\",\"Betagi\",\"Patharghata\",\"Taltali\"]', '2023-12-18 09:13:30', '2023-12-18 06:49:59'),
(50, 'Bhola', '[\"Char Fasson\",\"Tazumuddin\",\"Daulat Khan\",\"Burhanuddin\",\"Bhola Sadar\",\"Manpura\",\"Lalmohan\"]', '2023-12-18 09:13:30', '2023-12-18 06:49:59'),
(51, 'Jhalokathi', '[\"Kathalia\",\"Jhalokati Sadar\",\"Nalchity\",\"Rajapur\"]', '2023-12-18 09:13:30', '2023-12-18 06:49:59'),
(52, 'Pirojpur', '[\"Zianagar\",\"Nazirpur\",\"Nesarabad\",\"Pirojpur Sadar\",\"Bhandaria\",\"Mathbaria\"]', '2023-12-18 09:13:30', '2023-12-18 06:49:59'),
(53, 'Patuakhali', '[\"Bauphal Upazila\",\"Galachipa Upazila\",\"Dashmina Upazila\",\"Rangabali Upazila\",\"Kalapara Upazila\"]', '2023-12-18 09:13:30', '2023-12-18 06:49:59'),
(54, 'Chapainawabganj', '[\"Chapai Nawabganj Sadar\",\"Nachole Upazila\",\"Shibganj Upazila\",\"Gomastapur Upazila\",\"Bholahat Upazila\"]', '2023-12-18 09:13:30', '2023-12-18 06:49:59'),
(55, 'Joypurhat', '[\"Akkelpur\",\"Kalai\",\"Khetlal\",\"Joypurhat Sadar\",\"Panchbibi\"]', '2023-12-18 09:13:30', '2023-12-18 07:12:24'),
(56, 'Natore', '[\"Gurudaspur\",\"Natore Sadar\",\"Baraigram\",\"Bagatipara\",\"Lalpur\",\"Singra\"]', '2023-12-18 09:13:30', '2023-12-18 07:12:24'),
(57, 'Rajshahi', '[\"Godagari\",\"Charghat\",\"Tanore\",\"Durgapur\",\"Paba\",\"Puthia\",\"Baghmara\",\"Bagha\",\"Mohanpur\",\"Godagari\",\"Charghat\",\"Tanore\",\"Durgapur\",\"Paba\",\"Puthia\",\"Baghmara\",\"Bagha\",\"Mohanpur\"]', '2023-12-18 09:13:30', '2023-12-18 07:12:24'),
(58, 'Jamalpur', '[\"Islampur\",\"Jamalpur Sadar\",\"Dewanganj\",\"Bakshiganj\",\"Madarganj\",\"Melandaha\",\"Sarishabari\"]', '2023-12-18 09:13:30', '2023-12-18 07:12:24'),
(59, 'Mymensingh ', '[\"Ishwarganj\",\"Gaffargaon\",\"Gauripur\",\"Trishal\",\"Dhobaura\",\"Nandail\",\"Phulpur\",\"Fulbaria\",\"Bhaluka\",\"Mymensingh Sadar\",\"Muktagachha\",\"Haluaghat\"]', '2023-12-18 09:13:30', '2023-12-18 07:12:24'),
(60, 'Netrokona', '[\"Atpara\",\"Kalmakanda\",\"Kendua\",\"Khaliajuri\",\"Durgapur\",\"Netrokona Sadar\",\"Purbadhala\",\"Barhatta\",\"Madan\",\"Mohanganj\"]', '2023-12-18 09:13:30', '2023-12-18 07:12:24'),
(61, 'Sherpur District', '[\"Jhenaigati\",\"Nakla\",\"Nalitabari\",\"Sherpur Sadar\",\"Sreebardi\"]', '2023-12-18 09:13:30', '2023-12-18 07:12:24'),
(62, 'Dinajpur', '[\"Kaharole\",\"Khansama\",\"Ghoraghat\",\"Chirirbandar\",\"Dinajpur Sadar\",\"Nawabganj\",\"Parbatipur\",\"Fulbari\",\"Biral\",\"Birampur\",\"Birganj\",\"Bochaganj\",\"Hakimpur\"]', '2023-12-18 09:13:30', '2023-12-18 07:12:24'),
(63, 'Kurigram', '[\"Phulbari Upazila\",\"Nageshwari\",\"Rajarha\",\"Bhurungamari\",\"Ulipur\",\"Char Rajibpur\",\"Rowmari\",\"Kurigram Sadar\",\"Chilmari\"]', '2023-12-18 09:13:30', '2023-12-18 07:12:24'),
(64, 'Gaibandha', '[\"Gaibandha Sadar\",\"Gobindaganj\",\"Palashbari\",\"Fulchhari\",\"Saghatta\",\"Sadullapur\",\"Sundarganj\"]', '2023-12-18 09:13:30', '2023-12-18 07:12:24'),
(65, 'Lalmonirhat', '[\"Aditmari\",\"Kaliganj\",\"Patgram\",\"Lalmonirhat Sadar\",\"Hatibandha\"]', '2023-12-18 09:13:30', '2023-12-18 07:12:24'),
(66, 'Nilphamari', '[\"Kishoreganj\",\"Jaldhaka\",\"Dimla\",\"Domar\",\"Nilphamari Sadar\",\"Saidpur\"]', '2023-12-18 09:13:30', '2023-12-18 07:12:24'),
(67, 'Thakurgaon', '[\"Thakurgaon Sadar\",\"Pirganj\",\"Baliadangi\",\"Ranisankail\",\"Haripur\"]', '2023-12-18 09:13:30', '2023-12-18 07:12:24'),
(68, 'Panchagarh', '[\"Panchagarh Sadar\",\"Atwari Upazila\",\"Boda Upazila\",\"Debiganj Upazila\",\"Tetulia Upazila\"]', '2023-12-18 09:13:30', '2023-12-18 07:12:24'),
(69, 'Rangpur', '[\"Kaunia\",\"Gangachara\",\"Taraganj\",\"Pirganj\",\"Pirgachha\",\"Badarganj\",\"Mitha Pukur\",\"Rangpur Sadar\"]', '2023-12-18 09:13:30', '2023-12-18 07:12:24');

-- --------------------------------------------------------

--
-- Table structure for table `categories_list`
--

CREATE TABLE `categories_list` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category` varchar(255) NOT NULL,
  `subcategories` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`subcategories`)),
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories_list`
--

INSERT INTO `categories_list` (`id`, `category`, `subcategories`, `created_at`, `updated_at`) VALUES
(1, 'Vehicles', '[\"Cars & Trucks\",\"Motorbikes & Bicycles\",\"Accessories\",\"Rentals\",\"Auto Service\"]', '2023-12-17 08:52:55', '2023-12-17 08:52:55'),
(2, 'Electronics', '[\"Mobiles & Tablets\",\"Laptops & Desktop\",\"Accessories\",\"Audio & Sound Systems\",\"Home Electronics\",\"TV & Video\",\"Fridges & ACs\"]', '2023-12-17 08:54:13', '2023-12-17 08:54:13'),
(3, 'Mens', '[\"Shirt & T-shirt\",\"Pant & Joggers\",\"Jacket & coat\",\"Baby Cloth\",\"Footware\",\"Watch & Accessories\"]', '2023-12-17 08:54:33', '2023-12-17 08:54:33'),
(4, 'women & Beauty', '[\"Taditional Cloth\",\"Beauty & Parsonal care\",\"Jwellery & Watch\",\"Baby Girl\'s Fashion\",\"Footware\",\"Sari\"]', '2023-12-17 08:55:03', '2023-12-17 08:55:03'),
(5, 'Food & Beverage', '[\"Taditional Food\",\"Fruits & Vegitable\",\"Meat & Fish\",\"Sweets & Dessert\",\"Drinks\"]', '2023-12-17 08:55:25', '2023-12-17 08:55:25'),
(6, 'Pets & Animals', '[\"Pets\",\"Farm Animals\",\"Animals Food\",\"Animals Accessories\"]', '2023-12-17 08:56:06', '2023-12-17 08:56:06'),
(7, 'Home Decor', '[\"Kitchen Decor\",\"Living Room Decor\",\"Dining room Decor\",\"Bedroom Decor\",\"Garden Decor\"]', '2023-12-17 08:56:34', '2023-12-17 08:56:34'),
(8, 'Business & Industry', '[\"Machine & tools\",\"Office Supplies\",\"Madical Equipment\"]', '2023-12-17 08:57:30', '2023-12-17 08:57:30'),
(9, 'Education', '[\"Books\",\"School Supplies\",\"Courses\",\"Online Courses \"]', '2023-12-17 08:57:56', '2023-12-17 08:57:56'),
(10, 'Health & Beauty', '[\"Skin Care\",\"Hair care\",\"Makeup\",\"Perfumes\",\"Beauty Tools\",\"Natural Products\",\"Personal Care\",\"Vitamins and supplements\",\"Yoga & Fitness\"]', '2023-12-17 08:58:19', '2023-12-17 08:58:19'),
(11, 'Hotel & Resturent', '[\"Restaurant\",\"Bar\",\"Cafe\",\"Parking\",\"Room Service\",\"Laundary\",\"Tourist Information Center\"]', '2023-12-17 08:58:38', '2023-12-17 08:58:38'),
(12, 'Sports', '[\"Basketball\",\"Cricket\",\"Football\",\"Golf\",\"Tennis\",\"Volley Ball\"]', '2023-12-17 08:59:10', '2023-12-17 08:59:10'),
(13, 'service', '[\"Tourist Information Center\",\"Travel Agency\",\"Transportation Services\",\"Car Rental\",\"Bike Rentals\",\"Bus Ticket\",\"Flight Bookings\",\"Event Organization\",\"Membership\",\"Taxi Services\",\"Visa Services\",\"Airport Transfer\",\"Tours & Sightseeing\"]', '2023-12-17 08:59:27', '2023-12-17 08:59:27'),
(14, 'News & Meadia', '[\"Newspaper\",\"Magazine\",\"Radio Station\",\"TV Channel\",\"Online News Portal\",\"Press Release\"]', '2023-12-17 08:59:47', '2023-12-17 08:59:47');

-- --------------------------------------------------------

--
-- Table structure for table `division`
--

CREATE TABLE `division` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `division` varchar(255) NOT NULL,
  `districts` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`districts`)),
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `division`
--

INSERT INTO `division` (`id`, `division`, `districts`, `created_at`, `updated_at`) VALUES
(1, 'Dhaka Division', '[\"Dhaka\",\"Gazipur\",\n\"Narayanganj\",\"Tangail\",\n\"Narshingdi\",\"Faridpur\", \"Gopalganj\",\n\"Madaripur\",\"Rajbari\", \"Manikganj\",\n\"Munshiganj\",\"Shariyatpur\", \"Kishoreganj\"\n]', '2023-12-07 12:18:09', '2023-12-07 12:18:09'),
(2, 'Chattogram Division', '[\"Chattogram\",\"Cox\'s Bazar\",\n\"Rangamati\",\"Bandarban\",\n\"Khagrachhari\",\"Feni\", \"Lakshmipur\",\n\"Cumilla\",\"Noakhali\", \"Brahmanbaria\",\n\"Chandpur\"\n]', '2023-12-07 12:18:09', '2023-12-07 12:18:09'),
(3, 'Khulna Division', '[\"Bagerhat\",\"Chadanga\",\"Jessore\",\"Jhenaidha\",\"Khulna\",\"Khustia\", \"Magura\",\"Meherpur\",\"Narail\", \"Satkhira\"]', '2023-12-09 10:11:24', '2023-12-09 10:11:24'),
(4, 'Barishal Division', '[\"Barishal\",\"Barguna\",\"Bhola\",\"Jhalokathi\",\"Pirojpur\",\"Patuakhali\"]', '2023-12-09 10:14:36', '2023-12-09 10:14:36'),
(5, 'Sylhet Division', '[\"Sylhet\",\"Habiganj\",\"Moulvibazar\",\"Sunamganj\"]', '2023-12-09 10:15:57', '2023-12-09 10:15:57'),
(6, 'Rajshahi Division', '[\"Bogra\",\"Pabna\",\"Sirajganj\",\"Naogaon\",\"Chapainawabganj\",\"Joypurhat\",\"Nator\",\"Rajshahi\"]', '2023-12-09 10:49:15', '2023-12-09 10:49:15'),
(7, 'Mymenshigh Division', '[\"Jamalpur\",\"Mymenshingh\",\"Netrokona\",\"Sherpur\"]', '2023-12-09 10:51:04', '2023-12-09 10:51:04'),
(8, 'Rangpur Division', '[\"Dinajpur\",\"Kurigram\",\"Gaibandha\",\"Lalmonirhat\",\"Nilphamary\",\"Thakurgaon\",\"Panchagarh\",\"Rangpur\"]', '2023-12-09 10:55:19', '2023-12-09 10:55:19');

-- --------------------------------------------------------

--
-- Table structure for table `employee_info`
--

CREATE TABLE `employee_info` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `emp_id` varchar(255) NOT NULL,
  `emp_name` varchar(255) NOT NULL,
  `emp_image` varchar(255) NOT NULL DEFAULT 'https://static.vecteezy.com/system/resources/previews/011/675/374/original/man-avatar-image-for-profile-png.png',
  `emp_number` varchar(11) NOT NULL,
  `emp_nid` varchar(255) NOT NULL,
  `emp_address` varchar(255) NOT NULL,
  `emp_email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `emp_role` enum('Sales and Marketing Office','Marketing Officer','Sales Officer') NOT NULL DEFAULT 'Sales Officer',
  `supperAdmin_id` varchar(255) NOT NULL,
  `supperAdmin_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `employee_info`
--

INSERT INTO `employee_info` (`id`, `emp_id`, `emp_name`, `emp_image`, `emp_number`, `emp_nid`, `emp_address`, `emp_email`, `password`, `emp_role`, `supperAdmin_id`, `supperAdmin_name`, `created_at`, `updated_at`) VALUES
(1, 'IITABBP08230011', 'rafi', 'https://static.vecteezy.com/system/resources/previews/011/675/374/original/man-avatar-image-for-profile-png.png', '12345678912', '12', 'dhaka', 'rafi@gmail.com', '12345', 'Sales and Marketing Office', '6', 'Mostafizur Rahman', '2023-12-02 23:15:02', '2023-12-02 23:15:02'),
(2, 'IITABBP08230012', 'Mos', 'https://static.vecteezy.com/system/resources/previews/011/675/374/original/man-avatar-image-for-profile-png.png', '01950165017', '32', 'Dhamrai', 'mos@gmail.com', '12345', 'Sales and Marketing Office', '6', 'Mostafizur Rahman', '2023-12-02 23:22:34', '2023-12-02 23:22:34');

-- --------------------------------------------------------

--
-- Table structure for table `employee_information`
--

CREATE TABLE `employee_information` (
  `id` int(64) NOT NULL,
  `emp_id` varchar(255) NOT NULL,
  `emp_name` varchar(255) NOT NULL,
  `emp_email` varchar(255) NOT NULL,
  `emp_phone` varchar(255) NOT NULL,
  `designation` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `joining_date` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `employee_information`
--

INSERT INTO `employee_information` (`id`, `emp_id`, `emp_name`, `emp_email`, `emp_phone`, `designation`, `address`, `joining_date`, `password`) VALUES
(1, 'IITABBP08230014', 'a', 'a', 'a', 'aa', 'a', 'a', '92eb5ffee6ae2fec3ad71c777531578f'),
(3, 'IITABBP08230011', 'abc', 'abc@gmail.com', '01236547896', 'sales', 'mirpur', '1 aug, 2023', '827ccb0eea8a706c4c34a16891f84e7b'),
(4, 'IITABBP08230024', 'muntasir', 'mun@gmail.com', '01295786325', 'sales', 'badda', '01 aug, 2023', '81dc9bdb52d04dc20036dbd8313ed055'),
(5, 'IITABBP08230025', 'Ashika Islam', 'Ashikasufi11 @gmail.com', '01890375183', 'Officer sales and marketing', '27&29, road: 22, khilgaon, Dhaka:1219', '1august2023', '96d01136fa9098d4f5df15116306bf40'),
(6, 'IITABBP08230033', 'Syed Iftekhar Ahmed Abir', 'abira7999@gmail.com', '01968434534', 'Sales and Marketing officer', 'Pabla golder para Daulatpur Khulna', '01/08/2023', '5ec4c779c77033543d0777d757fe0657'),
(7, 'IITABBP08230021', 'Moshiur Rahman', 'titan.sust@gmail.com', '01407241888', 'Marketing Officer', 'K-192, Kuril member bari, Vatara, Dhaka-1229', '01/08/23', '35aef8d0e8cd0e894f2b0d83f4173e4c'),
(8, 'IITABBP08230033', 'Syed Iftekhar Ahmed Abir', 'abira7999@gmail.com', '01968434534', 'Sales and Marketing officer', 'Pabla golder para Daulatpur Khulna', '01/08/2023', '5ec4c779c77033543d0777d757fe0657'),
(9, 'IITABBP08230023', 'Md Anjjamul Hoque Sadhon', 'anjjasadhon@gmail.com', '01644830519', 'Officer sales and marketing', 'Ranisonkail,Thakurgaon', '1 August', '25d55ad283aa400af464c76d713c07ad'),
(10, 'IITABBP08230025', 'Ashika Islam', 'Ashikasufi11@gmail.com', '01890375183', 'Officer Marketing & sells', '27-29, road:22, khilgaon, Tilpapara, Dhaka .1219', '1august 2023', '21a29dc43da2c9eaf6ccb429d9e59c87'),
(11, 'IITABBP08230011', 'Mostafizur', 'm@gmail.com', '01950165017', 'Software Designer', 'Dhaka', '2-9-2023', '827ccb0eea8a706c4c34a16891f84e7b'),
(12, 'IITABBP08230037', 'r', 'r@gmail.com', '123456789', 'seller', 'dhaka', '02-01-2023', '202cb962ac59075b964b07152d234b70');

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
(6, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(7, '2023_10_03_085607_create_admin_info_table', 1),
(8, '2023_10_04_110538_create_employee_info_table', 1),
(9, '2023_10_07_061744_create_user_info_table', 1),
(10, '2023_10_11_085148_create_pending_table', 1),
(12, '2023_11_29_042614_create_package_table', 2),
(13, '2023_11_28_042200_create_package_table', 3),
(22, '2023_11_30_044033_create_packages_table', 4),
(23, '2023_12_05_115417_create_user_post_table', 5),
(24, '2023_12_07_121557_create_division_table', 6),
(25, '2023_12_07_121724_create_area_table', 6),
(27, '2023_12_13_111659_create_categories_list_table', 7);

-- --------------------------------------------------------

--
-- Table structure for table `packages`
--

CREATE TABLE `packages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `details` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`details`)),
  `description` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `packages`
--

INSERT INTO `packages` (`id`, `title`, `price`, `details`, `description`, `created_at`, `updated_at`) VALUES
(3, 'Basic', '200', '[\"24\\/7 Customer Support\",\"Powerful User Dashboard\",\"Basic Analytics\",\"3 Standard Images\",\"0 Standard Videos\"]', 'Essential package with customer support, user dashboard, basic analytics, and limited media.', '2023-12-05 05:10:00', '2023-12-05 05:10:00'),
(4, 'Standard', '400', '[\"24\\/7 Customer Support\",\"Powerful User Dashboard\",\"Standard Analytics\",\"6 Standard Images\",\"1 Standard Video\"]', 'More features than Basic, including extra images and a standard video.', '2023-12-05 05:10:53', '2023-12-05 05:10:53'),
(5, 'Advanced', '600', '[\"24\\/7 Customer Support\",\"Powerful User Dashboard\",\"Advanced Analytics\",\"9 Standard Images\",\"2 Standard Videos\"]', 'For advanced users with enhanced analytics and more media options.', '2023-12-05 05:46:35', '2023-12-05 05:46:35'),
(6, 'Plus', '800', '[\"24\\/7 Customer Support\",\"Powerful User Dashboard\",\"Plus Analytics\",\"12 Standard Images\",\"3 Standard Videos\"]', 'Premium package with more analytics, images, and multiple videos.', '2023-12-05 05:47:39', '2023-12-05 05:47:39'),
(7, 'Pro', '1000', '[\"24\\/7 Customer Support\",\"Powerful User Dashboard\",\"Professional Analytics\",\"15 Standard Images\",\"4 Standard Videos\"]', 'Professional-grade with advanced analytics, numerous images, and multiple videos.', '2023-12-05 05:48:04', '2023-12-05 05:48:04');

-- --------------------------------------------------------

--
-- Table structure for table `pending`
--

CREATE TABLE `pending` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `owner_id` varchar(255) NOT NULL,
  `owner_name` varchar(255) NOT NULL,
  `organization_name` varchar(255) NOT NULL,
  `owner_image` varchar(255) NOT NULL DEFAULT 'https://static.vecteezy.com/system/resources/previews/011/675/374/original/man-avatar-image-for-profile-png.png',
  `owner_number` varchar(11) NOT NULL,
  `owner_address` varchar(255) NOT NULL,
  `business_type` varchar(255) NOT NULL,
  `owner_email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `owner_role` enum('normal','basic','bronze','silver','gold','platinum') NOT NULL DEFAULT 'normal',
  `emp_id` varchar(255) DEFAULT NULL,
  `emp_name` varchar(255) DEFAULT NULL,
  `admin_id` varchar(255) DEFAULT NULL,
  `admin_name` varchar(255) DEFAULT NULL,
  `adminTime` varchar(255) DEFAULT NULL,
  `supperAdmin_id` varchar(255) DEFAULT NULL,
  `supperAdmin_name` varchar(255) DEFAULT NULL,
  `SupperAdminTime` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pending`
--

INSERT INTO `pending` (`id`, `owner_id`, `owner_name`, `organization_name`, `owner_image`, `owner_number`, `owner_address`, `business_type`, `owner_email`, `password`, `owner_role`, `emp_id`, `emp_name`, `admin_id`, `admin_name`, `adminTime`, `supperAdmin_id`, `supperAdmin_name`, `SupperAdminTime`, `created_at`, `updated_at`) VALUES
(18, '15', 'Sohan aa', 'sohan', 'https://static.vecteezy.com/system/resources/previews/011/675/374/original/man-avatar-image-for-profile-png.png', '12345678912', 's', 's', 's@gmail.com', '12345', 'normal', 'IITABBP08230011', 'rafi ss', '2', 'Admin', '2023-10-17 12:33:14', NULL, NULL, NULL, NULL, NULL);

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
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user_info`
--

CREATE TABLE `user_info` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `owner_name` varchar(255) NOT NULL,
  `organization_name` varchar(255) NOT NULL,
  `owner_image` varchar(255) NOT NULL DEFAULT 'https://static.vecteezy.com/system/resources/previews/011/675/374/original/man-avatar-image-for-profile-png.png',
  `owner_number` varchar(11) NOT NULL,
  `owner_address` varchar(255) NOT NULL,
  `business_type` varchar(255) NOT NULL,
  `owner_email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `owner_role` enum('normal','basic','bronze','silver','gold','platinum') NOT NULL DEFAULT 'normal',
  `emp_id` varchar(255) DEFAULT NULL,
  `emp_name` varchar(255) DEFAULT NULL,
  `admin_id` varchar(255) DEFAULT NULL,
  `admin_name` varchar(255) DEFAULT NULL,
  `adminTime` varchar(255) DEFAULT NULL,
  `supperAdmin_id` varchar(255) DEFAULT NULL,
  `supperAdmin_name` varchar(255) DEFAULT NULL,
  `SupperAdminTime` varchar(255) DEFAULT NULL,
  `pending` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_info`
--

INSERT INTO `user_info` (`id`, `owner_name`, `organization_name`, `owner_image`, `owner_number`, `owner_address`, `business_type`, `owner_email`, `password`, `owner_role`, `emp_id`, `emp_name`, `admin_id`, `admin_name`, `adminTime`, `supperAdmin_id`, `supperAdmin_name`, `SupperAdminTime`, `pending`, `created_at`, `updated_at`) VALUES
(1, 'Md noor islam Sardar', 'M/S Allahar Dan Varaities cloth & shoe house', 'images/user/profile\\php4FBA.tmp', '01922485183', 'Opposite molla shopping complex Daulatpur Khulna', 'Garments Products', 'noor@gmail.com', '12345', 'normal', NULL, NULL, '2', 'Admin', '2023-10-14 09:53:34', '6', 'Mostafizur Rahman', '2023-12-05 09:28:53', '', '2023-10-11 05:31:51', '2023-12-06 04:43:21'),
(2, 'Mahmudul Islam (Manik) a', 'Rahimart', 'images/user_image/TAxzC7zuvu9sShdACFDuyA3d3aofm5t33sLAsPFB.jpg', '32165498712', 'Dhaka', 'Hospital a', 'manik@gmail.com', '12345', 'normal', 'IITABBP08230012', 'mostafiz', '2', 'Admin', '2023-10-14 06:24:22', '6', 'Mostafizur Rahman', '2023-11-29 07:06:31', '', '2023-10-11 06:18:18', '2023-11-29 01:06:31'),
(3, 'Noman Islam a', 'Noman Islam', 'https://static.vecteezy.com/system/resources/previews/011/675/374/original/man-avatar-image-for-profile-png.png', '12345678925', 'Savar', 'medical a', 'noman@gmail.com', '12345', 'normal', 'IITABBP08230011', 'rafi', '2', 'Admin', '2023-10-12 11:41:05', '1', 'Supper Admin', '2023-10-17 12:06:54', '', '2023-10-11 06:44:25', '2023-10-11 06:44:25');

-- --------------------------------------------------------

--
-- Table structure for table `user_login_information`
--

CREATE TABLE `user_login_information` (
  `id` int(11) NOT NULL,
  `organization_name` varchar(255) NOT NULL,
  `owner_name` varchar(255) NOT NULL,
  `contact_number` varchar(255) NOT NULL,
  `business_type` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `employee_id` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_login_information`
--

INSERT INTO `user_login_information` (`id`, `organization_name`, `owner_name`, `contact_number`, `business_type`, `address`, `email`, `employee_id`, `password`) VALUES
(12, 'Fowzia Dental Care', 'Dr.Al - Fahad Hossain', '01409316066', 'Dental Health Care', 'Notun rasta, before Rail crossing, Didc road,Daulatpur Khulna.', 'drfahadhossain@gmail.com', 'IITABBP08230033', '96d01136fa9098d4f5df15116306bf40'),
(13, 'Emad Poribohon Private Ltd(Notun rasta sakha)', 'Emad Company', '01700791972', 'Private bus transport company', 'Pabla Notun Rasta Daulatpur, Khulna', NULL, 'IITABBP08230033', '96d01136fa9098d4f5df15116306bf40'),
(15, 'M/s Bushra Traders', 'Md Aktar Hossain', '01770758010', 'Construction Products', '57,uper Jessore road, notun rasta, Daulatpur, Khulna', 'akterhossaindaulatpur@gmail.com', 'IITABBP08230033', '96d01136fa9098d4f5df15116306bf40'),
(16, 'M/s Shadik trading', 'Md. Shadik Hossain', '01703205099 /  01701748349', 'All types of tiles seller', '52,uper Jessore road, Daulatpur, Khulna', 'shadikhossaindaulatpur@gmail.com', 'IITABBP08230033', '96d01136fa9098d4f5df15116306bf40'),
(17, 'Garib shah Decorator', 'Md.Abdur Rouwf(Rob)', '01913912238', 'Decorator', 'Jessor road, opposite hash khamar,Daulatpur, Khulna', 'abira7999@gmail.com', 'IITABBP08230033', 'e25027fe1c072d26dfb7617b2c87521c'),
(18, 'Ms Naim trading', 'Md Naim', '01825601113 / 01741886368', 'Construction Products', 'Opposite Hash khamar, Notun rasta,Daulatpur, Khulna', 'abira7999@gmail.com', 'IITABBP08230033', 'e25027fe1c072d26dfb7617b2c87521c'),
(19, 'Sareng Furniture', 'Md. Mahamudul Hasan (Executive Manager)', '01971914250 / 01777879737', 'Furniture', '68,haxi shariatullah Market, jessore Road, Daulatpur, Khulna.', 'sarengfurniturejk@gmail.com', 'IITABBP08230033', '96d01136fa9098d4f5df15116306bf40'),
(20, 'Nanna Biriyani (Daulatpur sakha)', 'Nanna Biriyani', '01973315116 / 01785215114', 'Biriyani House', 'Hazi shoriyotullah market. Oppsite hash khamar, Daulatpur, Khulna', 'abira7999@gmail.com', 'IITABBP08230033', '96d01136fa9098d4f5df15116306bf40'),
(22, 'Ms. K H Trader\'s', 'Md Hannan Mollah', '01711280822 / 01611280822 / 01681574147', 'Animal & birds Food shop.', '823/28 Jessore road, opposite hash khamar, Daulatpur, Khulna', 'abira7999@gmail.com', 'IITABBP08230033', '96d01136fa9098d4f5df15116306bf40'),
(23, 'M/S Shaheb & Son\'s', 'MD.Imran Hossain', '01855809470 / 01610100669', 'Bike Showroom', '51,Jessore Road,Notun Rasts,Daulatpur, Khulna', 'shahebalisons@gmail.com', 'IITABBP08230033', '76266596d2290af7fe5589ebdea62779'),
(25, 'Hazi Biriyani (Notun Rasta sakha)', 'Md Jewel Amin', '01745043957', 'Biriyani House', 'Notun rastar mor, Daulatpur, Khulna', 'abira7999@gmail.com', '-1', '96d01136fa9098d4f5df15116306bf40'),
(26, 'M/S Jarin Enterprise', 'MD.Monir Hossain', '01711004559 / 01790584560', 'Aluminum & Thai glass seller', 'Jessore road,Khulna filling station opposite side, Daulatpur, Khulna', 'monirhossain1122bd@gmail.com', 'IITABBP08230033', '96d01136fa9098d4f5df15116306bf40'),
(31, 'Pharmacy', 'Khairul Islam', '01714605641', 'Pharmacy', 'Islampur hunumantola', NULL, 'IITABBP08230031', '9a808f5b7b972175f627827192f089da'),
(33, 'Tecno Exclus Shop', 'Tecno', '01921167796', 'Android phone saler', 'Beside safe N save, Daulatpur Khulna.', 'orkitkhan294@gmail.com', 'IITABBP08230033', '96d01136fa9098d4f5df15116306bf40'),
(34, 'Realme Official Brand Shop', 'Realme', '01780052200 / 01915200600', 'Android Phone saler', 'Beside Safe N save, Daulatpur, Khulna', 'abira7999@gmail.com', 'IITABBP08230033', '96d01136fa9098d4f5df15116306bf40'),
(35, 'MM Telecom', 'Shahin Ahmed (Manager)', '01911355400 / 01977949471', 'Android Smartphone seller', 'Beside safe N save, Daulatpur, Khulna', 'shahinplay420@gmail.com', 'IITABBP08230033', '96d01136fa9098d4f5df15116306bf40'),
(36, 'Topsence group', 'MD.Obydur Rahman (lovely )', '01624285040', 'Medicine, Food Supplement,Medicated Cosmetics , Cosmetics , Organic food, Consumer prducts, (Daily needs products), Publication', '639/A, khilgaon Tilpapara, Road no#21, Dhaka -1219', 'ashikasufi11@gmail.com', 'IITABBP08230025', '284589603929ab5d60bd65f5b4a4b391'),
(38, 'Eishita Digital Sing', 'MD.Alamgir Hossain', '01619273010 / 01719273010', 'Poster, panner, Moug print', 'Opposite, Daulatpur Bus Stand, Daulatpur Khulna', 'eshitadigitalsing@gmail.com', 'IITABBP08230033', '96d01136fa9098d4f5df15116306bf40'),
(39, 'New Osmangani Computer', 'Md.Osman', '01923516516', 'Wifi & Bord brand service', '801,Jessore Road, Bl College Gate,Daulatpur, Khulna', 'osmanganicomputer@gmail.com', 'IITABBP08230033', '96d01136fa9098d4f5df15116306bf40'),
(40, 'Minister (Daulatpur sakha)', 'Minister', '01966668877 / 01966668878', 'Refrigerator Company', '84/1-A, Daulatpur Bus Stand, Daulatpur, Khulna', 'daulatpurshowroom@gmail.com', 'IITABBP08230033', '96d01136fa9098d4f5df15116306bf40'),
(41, 'Rahimart', 'Mahmudul Islam (Manik)', '01612181055 (manager 01715999015)', 'Thai Aluminium & S S Pipe', 'Opposite Daulatpur bus stand,Daulatpur Khulna', 'rahimart@icloud.com', 'IITABBP08230033', '96d01136fa9098d4f5df15116306bf40'),
(42, 'S.R. Corporation', 'Engr.S M Shohel Rana', '01711938845', 'All kinds of air conditioner & electionics goods retail & wholesaler', '780,Daulatpur bus stand, Daulatpur, Khulna', 'srcorporationkhl@gmail.com', 'IITABBP08230033', '96d01136fa9098d4f5df15116306bf40'),
(43, 'Medicine point & ultra scan', 'Dr. Nusrat Mariya Hema', '01911972388', 'Diagonaistic center', '62,uper jessor road, Daulatpur Khulna,', 'hemakmc18@gmail.com', 'IITABBP08230033', '96d01136fa9098d4f5df15116306bf40'),
(44, 'T.J Mobile Zone', 'MD.Tazul Islam', '01913486743 / 01730168168', 'All type of smartphone & keypad phone seller', '773/1 jashore Road, Daulatpur, Khulna', 'tazul6743@gmail.com', 'IITABBP08230033', '96d01136fa9098d4f5df15116306bf40'),
(45, 'New Dhong', 'Md.Neaz sharif', '01911797876', 'All type of smartphone saler', '797,jessore road, Daulatpur Khulna', 'mdnewaz645@gmail.com', 'IITABBP08230033', '96d01136fa9098d4f5df15116306bf40'),
(46, 'Nabila Telecom', 'Md.Habibur Rahman', '01744905474 / 01936625349', 'All type off Smart phone saler', '65,upper jessor road, Daulatpur Khulna', 'nabilatelecomdp@gmail.com', 'IITABBP08230033', '96d01136fa9098d4f5df15116306bf40'),
(47, 'Melamine Furniture', 'Sagar Mandal', '01914456410', 'All type of Melamine Furniture', 'Upper jessor road, Bl College gate, Daulatpur Khulna', NULL, 'IITABBP08230033', '96d01136fa9098d4f5df15116306bf40'),
(48, 'M/S Atik Enterprise', 'MD. Atik', '01716822390 / 01915461672', 'All Type of board seller', '49,Jessore Road bus stand, Daulatpur Khulna', NULL, 'IITABBP08230033', '96d01136fa9098d4f5df15116306bf40'),
(49, 'M/S Sheik Traders (Dealer)  Monoful & Co.', 'Md.Sheik', '01728557834', 'All type of sweet & biscuits saler', '781,lower Jessore Road, Daulatpur Khulna', NULL, 'IITABBP08230033', '96d01136fa9098d4f5df15116306bf40'),
(50, 'Daulatpur furniture', 'Md.Man', '01736318936', 'All type of furniture', 'Opposit Daulatpur bus stand, Daulatpur Khulna', NULL, 'IITABBP08230033', '96d01136fa9098d4f5df15116306bf40'),
(51, 'Al - Amin Classic Furniture', 'MD.Al- Amin Islam', '01947704882', 'All type of furniture', 'Upper Jessore road, Daulatpur Khulna', NULL, 'IITABBP08230033', '96d01136fa9098d4f5df15116306bf40'),
(52, 'New Relax Furniture', 'MD. Shahin Hossain', '01739006623', 'All type of furniture', 'Upper Jessore Road, Daulatpur Khulna', NULL, 'IITABBP08230033', '96d01136fa9098d4f5df15116306bf40'),
(53, 'Madina Metal', 'MD.Al- Munsur', '01711021626', 'All type of still Furniture', 'Opposite hazi shariyotullah Market, Daulatpur Khulna', NULL, 'IITABBP08230033', '96d01136fa9098d4f5df15116306bf40'),
(54, 'Misty Mahal (Daulatpur branch)', 'Md. Man', '01918992699', 'All type of sweets saler', 'Opposite Daulatpur bus stand, Daulatpur Khulna', NULL, 'IITABBP08230033', '96d01136fa9098d4f5df15116306bf40'),
(55, 'MS Shefa Sanitary', 'MD Farukh Hossain', '01909992634', 'All type of sanitary products saler', 'Jessore road Daulatpur, Khulna', NULL, 'IITABBP08230033', '96d01136fa9098d4f5df15116306bf40'),
(56, 'Smart Furniture', 'MD.Nashir Mir', '01719932697', 'All type of furniture seller', 'Opposite Daulatpur bus stand,Daulatpur Khulna', NULL, 'IITABBP08230033', '96d01136fa9098d4f5df15116306bf40'),
(57, 'Ms Golden Traders', 'Md. Buppi', '01724463329', 'All type of sanitary products saler', 'Daulatpur bus stand, opposite agrani bank, Daulatpur Khulna', NULL, 'IITABBP08230033', '96d01136fa9098d4f5df15116306bf40'),
(58, 'Ena transport private Ltd  (Daulatpur branch)', 'Ena Paribahan', '01958135257', 'Private Transport service', 'Daulatpur bus stand, Daulatpur Khulna', NULL, 'IITABBP08230033', '96d01136fa9098d4f5df15116306bf40'),
(59, 'RUSHAN TELECOM', 'Akmul Hossin Repon Bundo', '01712-785655 / 01648-509818', 'All Brand Mobile Available Here', 'Aupper Jessore Road, Daulatpur Baby Stand, Khulna.', 'rushanbhai18@gmail.com', 'IITABBP08230033', '96d01136fa9098d4f5df15116306bf40'),
(60, 'Hotel Shamim', 'Md. Ashikur Rahman Shuvo', '01715-387622 / 01302-233836', 'All type of food', 'traffic more, Daulatpur, Khulna', 'hotelshamimandrestaurant@gmail.com', 'IITABBP08230033', '96d01136fa9098d4f5df15116306bf40'),
(61, 'Islamia Library', 'Md Shah Alam & Md. Shahriar:', '01911664263', 'Here are KG Schools, Colleges, Alia Madrasas, Qaumi Madrasahs,Open, Vocational, Technical, Agricultural Diploma books are available at affordable', 'Daulatpur Bazar, Traffic Cross, Khulna.', NULL, 'IITABBP08230033', '96d01136fa9098d4f5df15116306bf40'),
(63, 'M/S SIKDAR PHARMACY', 'SM Rafsan Joni Reza', '01924202289', 'PHARMACY', 'Daulatpur Bazar (next to Shamim Hotel), Khulna.', NULL, 'IITABBP08230033', '96d01136fa9098d4f5df15116306bf40'),
(64, 'M/ S Balaka Pharmacy', 'MD.Man', '01711-394215,', 'sells local and foreign medicines at affordable prices', 'Upper Jessore Road, Traffic Junction, Daulatpur, Khulna', NULL, 'IITABBP08230033', '96d01136fa9098d4f5df15116306bf40'),
(65, 'Mollah Pharmacy', 'Md Man', '01615-146082', 'Here are all types of domestic and foreign medicines', 'Jessore Road, Daulatpur, Khulna.', NULL, 'IITABBP08230033', '96d01136fa9098d4f5df15116306bf40'),
(67, 'Sunmoon Tailors', 'Md man', '01937-761093,', 'Tailors service provider', 'Daulatpur Super Market, Daulatpur, Khulna.', NULL, 'IITABBP08230033', '96d01136fa9098d4f5df15116306bf40'),
(69, 'New matching corner', 'Babul Ahmed Azad', '01928-857180', 'Here are domestic and foreign high quality three-pitch sareesLungi is wholesale and retail. North', 'Beside of Shamim Hotel, Daulatpur Jessore Road, Khulna.', NULL, 'IITABBP08230033', '96d01136fa9098d4f5df15116306bf40'),
(70, 'Aymaan Pharmacy', 'Md. Mehedi Hasan', '01913-701926', 'Pharmacy', 'Jessore Road, Mortoza Mansion Opposite Side Daulatpur. Khulna.', 'mahadi.mr406@gmail.com', 'IITABBP08230033', '96d01136fa9098d4f5df15116306bf40'),
(72, 'Sunmoon Tailor’s', 'Md man', '01937761093', 'All type of clothes Maker', 'Daulatpur Super Market, Daulatpur, Khulna.', NULL, 'IITABBP08230033', '96d01136fa9098d4f5df15116306bf40'),
(74, 'Farooq Library', 'Farhad Hossain Miton', '01915456265', 'All type of book saler', '748 Jessore Road, Daulatpur, Khulna', NULL, 'IITABBP08230033', '96d01136fa9098d4f5df15116306bf40'),
(75, 'Hussain At Thai Aluminium, Glass House & SS Corner', 'Muha: Abu Alam Mridha', '01787-461145', 'All hardware of Thai, SS757, Upper Jessore Road, deals in wholesale and retail of goods.', '757, Upper Jessore Road, Daulatpur Bazar, Khulna.', NULL, 'IITABBP08230033', '96d01136fa9098d4f5df15116306bf40'),
(76, 'Tasneem Electronics', 'Md Johnny Shikder', '01711-284592', 'All electrical, electronics, crockeries and sewing machines are retailed and wholesaled here.', 'Jessore Road, (Opposite Uttara Bank) Daulatpur, Khulna.', NULL, 'IITABBP08230033', '96d01136fa9098d4f5df15116306bf40'),
(77, 'Hamdard Medical Center(Daulatpur Branch)', 'Hakeem Md Abdur Rahim', '01787-687811', 'holistic treatment Center', 'Jessore Road opposite mortoza Manshon', NULL, 'IITABBP08230033', '96d01136fa9098d4f5df15116306bf40'),
(78, 'NEW SUNNY ELECTRIC', 'Shakeel Ahmed', '01914-656902', 'All type of electrical products Saler', 'Opposite Mortaza Manson, Beside Jahangir Library Jessore Road, Daulatpur, Khulna.', NULL, 'IITABBP08230033', '96d01136fa9098d4f5df15116306bf40'),
(80, 'Mobile touch', 'Md Milon', '01712-388167', 'All type of mobile serviceing', 'Daulatpur, No. 5 K,C,C Market, Daulatpur, Khulna.', 'milonkccc2020@gmail.com', 'IITABBP08230033', '96d01136fa9098d4f5df15116306bf40'),
(81, 'Hussain Art', 'Md Masun Hossain', '0191192 03 22', 'Thai aluminum doors, windows and all SS work done Mirrors, glass and hardware dealers', 'Jessore Road Daulatpur, Khulna', NULL, 'IITABBP08230033', '96d01136fa9098d4f5df15116306bf40'),
(82, 'Dhaka Biryani House', 'Ilyach Sardar', '01758-942555', 'hotel', 'Opposite Hotel Borak, Jessore Road, Daulatpur, Khulna.', NULL, 'IITABBP08230033', '96d01136fa9098d4f5df15116306bf40'),
(83, 'Samin fruit house', 'Md. Babu', '01712-634889', 'All kinds of confectionery items including local and foreign fruits, milk, horlicks, biscuits are sold here.', 'Upper Jessore Road, Daulatpur Bazar, Khulna', NULL, 'IITABBP08230033', '96d01136fa9098d4f5df15116306bf40'),
(84, 'Pak Manzil fruit store', 'Md Shah Alam Howlader', '01718-963007', 'Domestic and foreign baby food, fruits, biscuits, cakes and confectionery goods are available here.', 'Daulatpur Bazar Main Road, Beside Jahangir Library, Daulatpur, Khulna.', NULL, 'IITABBP08230033', '96d01136fa9098d4f5df15116306bf40'),
(85, 'Haq enterprise', 'Ariful Haq', '01747473226', 'Hardware, sanitary & electronic equipment', '343/A, Tilpapara, khilgaon, Road:18, Dhaka:1319', 'arifhaque44@gmail.com', 'IITABBP08230025', '4e8afd4e47884eb8844dbed5a81051c6'),
(86, 'Agree Furniture', 'Md man', '01718768624', 'All type of Furniture makers', 'Jessor road opposite kobi farukh Academy, primary School', NULL, 'IITABBP08230033', '96d01136fa9098d4f5df15116306bf40'),
(87, 'Fatema Furniture', 'Md man', '01915828765', 'All type of furniture saler', 'Jessore road Opposite kobi farukh Academy primary school, Daulatpur Khulna', NULL, 'IITABBP08230033', '96d01136fa9098d4f5df15116306bf40'),
(88, 'Ma Store', 'Md man', '01961265274', 'All type of snacks and cake saler', 'Ground Floor ss shopping Complex Daulatpur, Khulna', NULL, 'IITABBP08230033', '96d01136fa9098d4f5df15116306bf40'),
(89, 'Haji Biryani House', 'Jewel Amin', '01745-043957', 'Biriyani House', 'Notun rasta Daulatpur , Khulna.', NULL, 'IITABBP08230033', '96d01136fa9098d4f5df15116306bf40'),
(90, 'Islam Trade Corporation', 'Md man', '01711144043', 'Rods, Angles, Flatbars, Cement and Construction Materials Retailers and Wholesalers and Commission Agents. 49,', '50, Upper Jessore Road, Daulatpur, Khulna.', NULL, 'IITABBP08230033', '96d01136fa9098d4f5df15116306bf40'),
(91, 'Global Trading Corporation', 'Md man', '01778447993', 'All type Mobile & lubricant oilsaler', '823/15, Jessore Road, Daulatpur, Khulna', NULL, 'IITABBP08230033', '96d01136fa9098d4f5df15116306bf40'),
(93, 'Garib Shah Decorator', 'Md Abdur Rauf (Rob)', '01913-912238', 'Here all the decorator goods are rented and event gates, pandals, stages are made.', 'East Side of Pabla Duck Farm, Daulatpur, Khulna.', NULL, 'IITABBP08230033', '96d01136fa9098d4f5df15116306bf40'),
(94, 'M/s Bikrampur Wood FurnitureAnd Duranta Cycle Gallery', 'Md. Rezaul Sheikh', '01629-637487', 'Wooden beds, cupboards, wardrobes made with modern technology,Sofas and wooden doors and windows are all made of itKarnichar\'s trusted institution and all types of domestic and foreignWholesale and retail sale of bicycles, tricycles.', 'Upper Jessore Road, Daulatpur, Khulna.', NULL, 'IITABBP08230033', '96d01136fa9098d4f5df15116306bf40'),
(95, 'New Gauchia Engineering Works', 'Engineer Hasan Masud Chowdhury', '01717-885979', 'Manufacturer of tanks and underground tanksReliable organization.', 'Khan-e-Sabur Road New Road, Pabla Daulatpur, Khulna.', NULL, 'IITABBP08230033', '96d01136fa9098d4f5df15116306bf40'),
(96, 'realme (Daulatpur Branch)', 'Realme', '017 80 05 22 00', 'realme Official Brand Shop', '5, Century Plaza, Daulatpur, Khulna.', NULL, 'IITABBP08230033', '96d01136fa9098d4f5df15116306bf40'),
(97, 'Messrs. K, H Traders', 'Mohammad Hannan Mollah', '০১৭১১-২৮০৮২২01711280822', '(Wholesale of all poultry and poultry feed) 823/28,', 'Jessore RoadOpposite Daulatpur Haas Farm  Daulatpur, Khulna.', NULL, 'IITABBP08230033', '96d01136fa9098d4f5df15116306bf40'),
(98, 'Nanna Biryani', 'Nanna biriyani', '01973-315116', 'Biriyani House', 'Opposite Hash khamar,Daulatpur Khulna', NULL, 'IITABBP08230033', '96d01136fa9098d4f5df15116306bf40'),
(101, 'Kabbo fashion', 'Mahbuba Haq', '0191657996,01701039911', 'Boutique', '617, road:20, tilpapara,khilgaon , Dhaka:1219', NULL, 'IITABBP08230025', '96d01136fa9098d4f5df15116306bf40'),
(102, 'Kabbo fashion', 'Mahbuba Haq', '0191657996,01701039911', 'Boutique', '617, road:20, tilpapara,khilgaon , Dhaka:1219', NULL, 'IITABBP08230025', '96d01136fa9098d4f5df15116306bf40'),
(103, 'Kabbo fashion', 'Mahbuba Haq', '0191657996,01701039911', 'Boutique', '617, road:20, tilpapara,khilgaon , Dhaka:1219', NULL, 'IITABBP08230025', '96d01136fa9098d4f5df15116306bf40'),
(104, 'Kabbo fashion', 'Mahbuba Haq', '0191657996,01701039911', 'Boutique', '617, road:20, tilpapara,khilgaon , Dhaka:1219', NULL, 'IITABBP08230025', '96d01136fa9098d4f5df15116306bf40'),
(105, 'Asia Thai Glass & S.S. House', 'Md. Wahiduzzaman Khan (Pintu)', '01711 03 07 03', 'Thai Glass & S.S. House', 'House-683, Jessore Road, Near Post Office, Daulatpur, Khulna.', NULL, 'IITABBP08230033', '96d01136fa9098d4f5df15116306bf40'),
(106, 'sakura', 'S. A. Rakib', '01715 212034', 'Any Kinds of Video & Still Photography Needs Please Contact', 'JABBER TOWER Jessore Road Daulatpur Khulna Bangladesh', 'sakurastduio@gmail.com', 'IITABBP08230033', '96d01136fa9098d4f5df15116306bf40'),
(107, 'Bike Point', 'Md Man', '01715264967', 'Bike parts', 'Opposite Daulatpur Post Office,Mahasin Mor, Daulatpur, Khulna.', 'kazisazid1994@gmail.com', 'IITABBP08230033', '96d01136fa9098d4f5df15116306bf40'),
(108, 'M/s Mollah Trading', 'Md. Sagir Mollah', '01736425565', 'Thai Aluminum, S.S. Pipe and Glass House Thai Aluminum, S.S. Decoration work is done along with sale of pipes', 'Opposite Muhasin Mahila College, Adjacent Jessore Road, Daulatpur, Khulna.', NULL, 'IITABBP08230033', '96d01136fa9098d4f5df15116306bf40'),
(109, 'Bedding Fair', 'Mostafizur Rahman', '01966-576736', 'upholstery, bedspreads, cushions, pillows, bedspreads, mosquito nets and pillow covers', 'Khan-e-Saboor Road, (below Hotel Minutes), Daulatpur, Khulna.', NULL, 'IITABBP08230033', '96d01136fa9098d4f5df15116306bf40'),
(110, 'Sharif Beding House', 'Md Hasan Sharif', '01726811199', 'Manufacturers and sellers of all covers, mattresses, pillows, mosquito nets, mattresses, sofa sets, bed seats etc.', 'Jessoreroad,Daulatpur, Khulna.', NULL, 'IITABBP08230033', '96d01136fa9098d4f5df15116306bf40'),
(111, 'DHAKA NOHA BEDDING HOUSE/', 'Md. Khorshed', '01789857820', 'Sheets, Mattresses, Jajims, Cushions and Pillows are manufactured,', 'Jessore Road, Daulatpur, Khulna.', NULL, 'IITABBP08230033', '96d01136fa9098d4f5df15116306bf40'),
(112, 'The Bengal lime and hardware', 'Madhav Das', '01718135840', 'Dealer in Berger Paint, Elite Paint, Lime, Blue, Gum, Polish & Oxide and Hardware.', 'Near Mohsin Mor Post Office, Daulatpur, Khulna.', NULL, 'IITABBP08230033', '96d01136fa9098d4f5df15116306bf40'),
(113, 'THE LAKE VIEW RESTAURANT', 'Md. Yousuf', '01729-177638, 01961-797098, 01920-106575', 'Best Qualitative Resturant & party Center', 'Daulatpur Railway Station, Daulatpur, Khulna.', 'yousuf201093@gmail.com', 'IITABBP08230033', '96d01136fa9098d4f5df15116306bf40'),
(114, 'Ghazi Art', 'Md man', '01717-811977', 'Photos and Walmet are blocked', 'Mohsin Mor, Daulatpur, Khulna.', NULL, 'IITABBP08230033', '96d01136fa9098d4f5df15116306bf40'),
(115, 'Bismillah Bedding House', 'Ah Karim Sheikh', '01791313994', 'covers, mattresses, bed sheets, mosquito nets, bed sheets, pillows, pillow covers selling shop', 'Jessore Road, Mohsin Mor, Daulatpur, Khulna.', NULL, 'IITABBP08230033', '96d01136fa9098d4f5df15116306bf40'),
(116, 'Photo Play', 'Md man', '041-774183 (Ress) 041-761494 (Studio) 01712-037589 01754-646086', 'Any Kinds of Still & Videography', 'Muhsin boys high school Daulatpur, Khulna', 'photoplay62@gmail.com', 'IITABBP08230033', '96d01136fa9098d4f5df15116306bf40'),
(117, 'Majumder Refrigeration Works', 'Subir Majumdar', '01714493861', 'Refrigerators, air coolers, air conditioners and all typesReliable electrical equipment repair company. Mohsin', 'School Mor (Opposite Daulatpur Post Office),Daulatpur, Khulna.', NULL, 'IITABBP08230033', '96d01136fa9098d4f5df15116306bf40'),
(118, 'HATIM FURNITURE', 'Md man', '01912-996093, 01711-976488', 'Exclusive Showroom Furniture Plus', 'Jabber Tower, Jashore Road (Mohsin More) Daulatpur, Khulna.', 'furniturepluskhulna@gmail.com', 'IITABBP08230033', '96d01136fa9098d4f5df15116306bf40'),
(119, 'Best Korean Coaching Center', 'Md. Ariful Islam', '01915-112126', 'Coaching center', 'Muhsin Mor, Beside Post Office, Daulatpur, Khulna.', NULL, 'IITABBP08230033', '96d01136fa9098d4f5df15116306bf40'),
(120, 'Hasan Motors', 'Md Hasan Masud Chowdhury.', '01948757213', 'Here all types of new-old Jessore Road,Buying and selling motorcyclesand is exchanged.', 'Mohsin Mor, Daulatpur, Khulna.', NULL, 'IITABBP08230033', '96d01136fa9098d4f5df15116306bf40'),
(121, 'Daulatpur Honey House', 'Md man', '01712-144652', 'Honey and oil products', 'Muhsin mor Daulatpur Khulna', NULL, 'IITABBP08230033', '96d01136fa9098d4f5df15116306bf40'),
(122, 'Noha beding', 'Md man', '01973419517', 'Beding house', 'Muhsin mor Daulatpur Khulna', NULL, 'IITABBP08230033', '96d01136fa9098d4f5df15116306bf40'),
(123, 'Evergreen Organic Zone', 'Shuvro', '01537030679', 'Organic Food', 'K-185, Kuril, Vatara, Dhaka-1229', NULL, 'IITABBP08230021', '35aef8d0e8cd0e894f2b0d83f4173e4c'),
(124, 'Pabna Misty Ghor', 'Hussain Ahmed Toha', '01982149595', 'Here, the special Sara two are made by the skilled artisans of Bogra', 'Battala Bazar, Jessore Road, Daulatpur, Khulna.', NULL, 'IITABBP08230033', '96d01136fa9098d4f5df15116306bf40'),
(125, 'Dip Electronics', 'Shankar Kumar De 6', '01715-143710', 'Electronics All types of electronics saler', 'Afsana Mansion, Jessore Road, Daulatpur, Khulna.', NULL, 'IITABBP08230033', '96d01136fa9098d4f5df15116306bf40'),
(126, 'Mecca Electronics', 'Md Man', '01911-958005', 'All types of electronics goods including refrigerators, AC LED TVs are wholesaled and retailed here.', 'Opposite Daulatpur cycle store,Daulatpur, Khulna.', NULL, 'IITABBP08230033', '96d01136fa9098d4f5df15116306bf40'),
(127, 'Mustafa fruit store', 'Md. Mustafa', '01721-197619', 'Apple, malta, orange, currant, mango, litchi, kathal, watermelon, bangi, sugarcane, pineapple etc. are sold wholesale and retail.', 'Upper Jessore Road, Daulatpur Bazar, Khulna.', NULL, 'IITABBP08230033', '96d01136fa9098d4f5df15116306bf40'),
(128, 'M/s Ismail Rice Enterprises', 'Md. Ismail Sheikh', '01711131435', 'General paddy, rice (boiled, atap), jute traders and commission agents.', 'Daulatpur Bazer (Pubali Bank Goil), Daulatpur, Khulna, Bangladesh.', NULL, 'IITABBP08230033', '96d01136fa9098d4f5df15116306bf40'),
(129, 'Henna Bedding Center Porda Gallary', 'Md Hossain Sheikh', '01925-186561', 'Here covers, mattresses, pillows, jajims, mosquito nets, bed seeds, kula, high quality curtains and curtain fabrics are wholesaled and manufactured and cotton is washed in its own automatic machine.', 'Upper Jessore Road, (Near North of Hotel), Daulatpur, Khulna.', NULL, 'IITABBP08230033', '96d01136fa9098d4f5df15116306bf40'),
(130, 'MILON ENTERPRISES', 'Sheikh Milon', '01740739894', 'MULLI BAMBOO BARADA, CHATAI, HOGLA ETCImporters and suppliers.', 'Jessore Road, Daulatpur, Khulna.', NULL, 'IITABBP08230033', '96d01136fa9098d4f5df15116306bf40'),
(131, 'Ittady Sports', 'Md msn', '01770-604387,', 'Here all types of sports and garmentsTrusted company for wholesale and retail sale of goods at affordable prices', 'Jessore Upper Road (opposite Mortoza Mansion), Daulatpur, Khulna.', NULL, 'IITABBP08230033', '96d01136fa9098d4f5df15116306bf40'),
(132, 'Allahr Dan Bedding Center', 'Md. Hossain Sheikh', '01925-186561', 'Wholesale and retail supplier of bedding materials.', 'Upper Jessore Road, North Side of Fast Security Islami Bank, Daulatpur, Khulna', NULL, 'IITABBP08230033', '96d01136fa9098d4f5df15116306bf40'),
(133, 'Bismillah Electronics', 'Md Manik Khan', '01917-759417', 'electronics shop', 'Afsana Manson Market, Daulatpur, Khulna', NULL, 'IITABBP08230033', '96d01136fa9098d4f5df15116306bf40'),
(134, 'Safe Food', 'Md man', '+880 1894 947 281', 'Sweet House', '733, Jessore Road, Daulatpur Bazar, Daulatpur, Khulna', 'info@safefoodsweets.com', 'IITABBP08230033', '96d01136fa9098d4f5df15116306bf40'),
(135, 'Kacci vhai vhai', 'Khacci vhai company', '01725-11601,', 'Biriyani house', 'Opposite Meenakshi Hall, Jessore Road, Daulatpur, Khulna.', NULL, 'IITABBP08230033', '96d01136fa9098d4f5df15116306bf40'),
(136, 'Daulatpur Ghosh Diary', 'Govind Kumar Ghosh', '01712-212765', 'Best quality ghee, butter made hereSandesh, Rasgolla, Chamcham, Kalojam and variousQuality Confectionery Dealers & Suppliers.', 'Daulatpur Bazar Battala Mor, Daulatpur, Khulna.', NULL, 'IITABBP08230033', '96d01136fa9098d4f5df15116306bf40'),
(137, 'MUHAMMADI HARDWARE & TOOLS', 'Md Muhammad', '01718-519862, (Manager) 01781-603035,', 'All types of hardware products and D Spirits are available here.', 'Jessore Road, Daulatpur, Khulna.', 'muhammadi.hardware@gmail.com', 'IITABBP08230033', '96d01136fa9098d4f5df15116306bf40'),
(138, 'Rajhithai', 'A concern of Rajmahal food court', '01904-303086', 'Sweets Company', '823/c, Haji Shariatullah Market, Jessore Road,daulatpur Khulna', 'rajmithai2020@gmail.com', 'IITABBP08230033', '96d01136fa9098d4f5df15116306bf40'),
(139, 'Sefali eye care', 'Md Imdadul Hoque', '+8801798755189', 'Doctor Chamber', 'Ranisonkail,Thakurgaon', NULL, 'IITABBP08230023', '81dc9bdb52d04dc20036dbd8313ed055'),
(140, 'Chairman Traders', 'Md Murad Hasan', '+8801629250819', 'entrepreneur', 'Ranisonkail,Thakurgaon', NULL, 'IITABBP08230023', '81dc9bdb52d04dc20036dbd8313ed055'),
(141, 'Sajid medicine Conner', 'Md Ali Hossen', '01718386311', 'Pharmacy', 'Ranisonkail,Thakurgaon', NULL, 'IITABBP08230023', '81dc9bdb52d04dc20036dbd8313ed055'),
(142, 'Oriant Hub', 'Md Mahafuz Hasan', '01707444977', 'Online seba', 'Ranisonkail,Thakurgaon', NULL, 'IITABBP08230023', '81dc9bdb52d04dc20036dbd8313ed055'),
(143, 'Sad Computer', 'Md Mosiur Rahman', '01777856408', 'Staysonari Shop', 'Ranisonkail,Thakurgaon', NULL, 'IITABBP08230023', '81dc9bdb52d04dc20036dbd8313ed055'),
(144, 'Sagor Furniture', 'Md Sagor Hosen', '01704257575', 'Furniture Shop', 'Ranisonkail,Thakurgaon', NULL, 'IITABBP08230023', '81dc9bdb52d04dc20036dbd8313ed055'),
(145, 'Faruk Electronic', 'Md Faruk Islam', '01740302901', 'Electronic Shop', 'Ranisonkail,Thakurgaon', NULL, 'IITABBP08230023', '81dc9bdb52d04dc20036dbd8313ed055'),
(146, 'Liton Tea Stall', 'Md Liton', '01751019771', 'Tea stall', 'Ranisonkail,Thakurgaon', NULL, 'IITABBP08230023', '81dc9bdb52d04dc20036dbd8313ed055'),
(147, 'Monoyara Mill', 'Md Manik Hosen', '01715892028', 'Auto Mill', 'Ranisonkail,Thakurgaon', NULL, 'IITABBP08230023', '81dc9bdb52d04dc20036dbd8313ed055'),
(148, 'Mojahidul St', 'Md Mojahidul Islam', '01721385000', 'Mudi Shop', 'Ranisonkail,Thakurgaon', NULL, 'IITABBP08230023', '81dc9bdb52d04dc20036dbd8313ed055'),
(149, 'Popular Pharmacy', 'Md Hossen Ali', '01712363806', 'Pharmacy', 'Ranisonkail,Thakurgaon', NULL, 'IITABBP08230023', '81dc9bdb52d04dc20036dbd8313ed055'),
(150, 'Ss enterprise', 'Md Sarfaraz niyaz', '01773221615', 'Dilar', 'Ranisonkail,Thakurgaon', NULL, 'IITABBP08230023', '81dc9bdb52d04dc20036dbd8313ed055'),
(151, 'M/S ROHAN JUTE TRADING', 'RAW JUTE EXPORTER', '01721762474', 'Raw Jute Exporter.', 'Jessore Road, Daulatpur, Khulna.', 'rohanjutetrading@gmail.com', 'IITABBP08230033', '96d01136fa9098d4f5df15116306bf40'),
(152, 'Taizul pakhi ghor', 'Sheikh Taizul Islam', '01915-018466', 'All type of birds and aquarium seller', 'Muhsin mor Daulatpur Khulna', NULL, 'IITABBP08230033', '96d01136fa9098d4f5df15116306bf40'),
(153, 'LG Butterfly ( Daulatpur Branch)', 'LG', '16571', 'Electronic Company', 'Opposite Minak ki Hall Daulatpur Khulna', NULL, 'IITABBP08230033', '96d01136fa9098d4f5df15116306bf40'),
(155, 'Hotel khonika', 'Jahir raihan', '01780011028', 'Hotel', 'Opposite thosil office Daulatpur Khulna', NULL, 'IITABBP08230033', '96d01136fa9098d4f5df15116306bf40'),
(156, 'Korean Juice & Fast Food', 'Md. Moinul Hasan', '01988-389828', 'All types of fast food are available', 'Jessore Road (Below Exim Bank), Daulatpur, Khulna', NULL, 'IITABBP08230033', '96d01136fa9098d4f5df15116306bf40'),
(157, 'Akankha Inn Residential', 'Akankha Group', '01965-404040', 'Hotel', 'Akankha Tower Daulatpur Khulna,', 'akankhainn2021@gmail.com', 'IITABBP08230033', '96d01136fa9098d4f5df15116306bf40'),
(158, 'PRESLEY Bakers', 'Md salman', '01958285510', 'Cake & fastfood', 'Beside akankha tower Daulatpur Khulna', 'presleythebakers3@gmail.com', 'IITABBP08230033', '96d01136fa9098d4f5df15116306bf40'),
(159, 'SPICY KING', 'Md man', '01928 64 58 12', 'PIZZA, BURGER, RICE, FRIES, CHICKEN', 'Mortoja Manshon (2nd Floor) Daulatpur, Khulna.', NULL, 'IITABBP08230033', '96d01136fa9098d4f5df15116306bf40'),
(160, 'Soukhin Cloth Store, & Tailors', 'Md women', '01916529826', 'All the schools,College dresses are made.', '3 no,Mortoza Mansion', NULL, 'IITABBP08230033', '96d01136fa9098d4f5df15116306bf40'),
(161, 'Daulatpur (Hijab and Orna House', 'Md. Shafiqul Islam Sunny', '01780080535', 'Wholesaler and retailer of all types of domestic and foreign hijabs, veils, scaps, hand and foot socks, and various Islamic goods.', 'Mortuza Manson Market, Daulatpur, Khulna.', NULL, 'IITABBP08230033', '96d01136fa9098d4f5df15116306bf40'),
(162, 'Al Bayarah Sweets', 'Baig Humaun Kabir', '01311388498', 'Sweet House', 'Beside mortoza Mension Daulatpur Khulna', 'albaqarahsweets19@gmail.com', 'IITABBP08230033', '96d01136fa9098d4f5df15116306bf40'),
(163, 'AQX PLUS', 'Md. Mizanur Rahman', '01763-343600,', 'LADIES & KIDS COLLECTION', 'Daulatpur Bazar Rail Crossing More, Khulna.', 'aqxcollection2016@gmail.com', 'IITABBP08230033', '96d01136fa9098d4f5df15116306bf40'),
(164, 'Summit Construction', 'Sk. Kamrul Islam (Bachen)', '01720-061107 , 01902-511656', '1st class govt. Contractor & Suppliers', 'Parsha Bhaban 289, Jessore Road, Daulatpur, Khulna,', 'summitconstruction@gmail.com', 'IITABBP08230033', '96d01136fa9098d4f5df15116306bf40'),
(165, 'Mokhter Hossain & Co.', 'Sk. Kamrul Islam (Bachen)', '01720-061107 : 01902-511656', 'Agent & LPG Dealar Mokhter Hossain & Co. Meghna Petroleum Ltd. Dealar: RFL Gas', 'Parsha Bhaban 289, Jessore Road, Daulatpur, Khulna,', 'summitconstruction@gmil.com', 'IITABBP08230033', '96d01136fa9098d4f5df15116306bf40'),
(166, 'Marzan Mobile Point', 'MARZAN ISLAM', '01762343438 / 01616343438', 'Smartphone, Feature Phone, Phone Accessories & Servicing.', 'Beside Traffic Signal, Upper Jessor Road, Daulatpur, Khulna, 1902', 'marzanislam440@gmail.com', 'IITABBP08230033', '96d01136fa9098d4f5df15116306bf40'),
(167, 'Pakhi Boutiques Fashion', 'Md man', '01916-339082', 'Garments Shop', 'Mottarza Mansion, Daulatpur, Khulna.', NULL, 'IITABBP08230033', '96d01136fa9098d4f5df15116306bf40'),
(168, 'Funland KIDS INDOOR PLAYGROUND', 'Md man', '01717036309', 'Kids zone', 'Mortoza Mansion, 2nd Floor, Khulna', NULL, 'IITABBP08230033', 'ea3b786c722cfd4d0651cced76d5958a'),
(169, 'Mohana Diagnostic Center', 'Mohana Diagnostic Center', '01721-047996,', 'Diagnostic Center', 'No. 464 Jessore Road, (North Side Lane of Uttara Bank)', NULL, 'IITABBP08230033', '96d01136fa9098d4f5df15116306bf40'),
(170, 'Hotel Borac', 'Md man', '01626563359.', 'Hotel', 'Mortoza Mansion 3rd floor Daulatpur Khulna', NULL, 'IITABBP08230033', '96d01136fa9098d4f5df15116306bf40'),
(171, 'Al-Safi Optics', 'Motiur Rahman', '01923476330', 'Optics', '612/A, khilgaon, Tilpapara, road:19,Dhaka-1219', 'motiur.rahman22215@gmail.com', 'IITABBP08230025', '96d01136fa9098d4f5df15116306bf40'),
(172, 'M/S SADIK TRADERS, POULTRY & FISH FEED', 'Md. Ziaur Rahman (Tipu)', '01709-613222', 'TRADERS, POULTRY & FISH FEED,1st Class Govt.Contractor & Supplier', 'Satkhira Road, Mohasin More, Daulatpur, Khulna.', 'sadiktraders96@gmail.com', 'IITABBP08230033', '96d01136fa9098d4f5df15116306bf40'),
(173, 'Royal Tech', 'Md. Monirul Islam', '01840-769480', 'All brands of mobile sets, batteries, chargers, pen drives, mice, keyboards, mobile accessories wholesale and retail are sold here and all mobile servicing is done.', 'Shop No. 8, No. 5 KCC Market, Jessore Road, Daulatpur, Khulna.', NULL, 'IITABBP08230033', '96d01136fa9098d4f5df15116306bf40'),
(175, 'M/s Rukaia Oil Mill', 'Md. Rabiul Islam', '01714741136', 'Pure Mustard Oil, Coconut Oil, Sesame Oil, Kaljeera OilReliable company selling sunflower oil and all kinds of oils.', 'East side of Kalpataru Market, 18 Daulat Khan Road, Daulatpur, Khulna.', NULL, 'IITABBP08230033', '96d01136fa9098d4f5df15116306bf40'),
(176, 'Famous Unani Medical Center', 'Hakeem Md. Zahidur Rahman Zahid', '01734-881088', 'Skin, Sex, Asthma, Insanity, Dysentery, Haemorrhoids, Piles, Nasal Polypus, Hair Loss,All diseases of men and women are well treated including rheumatism.', '479, Jessore Road, Opposite Islami BankDaulatpur, Khulna.', NULL, 'IITABBP08230033', '96d01136fa9098d4f5df15116306bf40'),
(177, 'Daulatpur Cycle Centre', 'Md. Anwar Hossain', '01912-572290', 'Here, domestic and foreign bikes are carefully fitted by skilled craftsmen. It is manufactured and sold in retail and wholesale at affordable prices.', '(Opposite First Security Islami Bank) Jessore Road, Daulatpur, Khulna.', NULL, 'IITABBP08230033', '96d01136fa9098d4f5df15116306bf40'),
(178, 'Sheikh Motors (2)', 'Sheikh Imran', '01711441323', 'All types of legal motorcycles are bought and sold here.', 'Mahasin Mor, Shahpur Road, Beside Mahendra Stand, Daulatpur, Khulna.', NULL, 'IITABBP08230033', '96d01136fa9098d4f5df15116306bf40'),
(179, 'Hawk Homeo Pharmacy', 'Dr. Noorul Haque', '01721045919', 'Complicated chronic and venereal diseases including women, children are treated with special care.', 'West side Daulatpur Railway Station and Opposite Nahid Decorator Jessore Road, Daulatpur, Khulna.', NULL, 'IITABBP08230033', '96d01136fa9098d4f5df15116306bf40'),
(180, 'M/s Reza Traders', 'Kazi Imdadul Hossain (Reza)', '01718136793', 'domestic and foreign commodes, basins, pots, pipes, tube oil, plastic doors and plastic chairs, tables and all bathroom fittings wholesale and retail er', 'Musin Mor, Daulatpur, Khulna.', NULL, 'IITABBP08230033', '96d01136fa9098d4f5df15116306bf40'),
(181, 'Rehab Telecom', 'Abu Rehab', '01716236567', 'Mobile Cover, Glass, Headphone, Charger, BatteryWholesalers and retailers.', '14, No. KCC Market, Daulatpur, Khulna.', NULL, 'IITABBP08230033', '96d01136fa9098d4f5df15116306bf40'),
(182, 'Molla Sports', 'Molla Ariful Islam', '01993-908141', 'All sporting goods are wholesaled and retailed here.', 'Daulatpur, KCC Market, Khulna.', NULL, 'IITABBP08230033', '96d01136fa9098d4f5df15116306bf40'),
(183, 'Asha Pharma', 'Sheikh Rahat Ahmed', '01746-556407', 'Domestic and foreign medicines are wholesaled and retailed here.', '477, Jessore Road, Daulatpur, Khulna.', NULL, 'IITABBP08230033', '96d01136fa9098d4f5df15116306bf40'),
(184, 'Nav Jeevan Herbal Complex', 'Hakeem-Malika Akhtar Rupa', '01719-565169,', 'All complex, difficult and incurable diseases of children and women are treated here.', 'Opposite Rupali Bank Daulatpur Khulna,', NULL, 'IITABBP08230033', '96d01136fa9098d4f5df15116306bf40'),
(185, 'Labib Enterprise', 'Md Abdullah Manik', '01730312583', 'Siramik and fittings shop', 'Ranisonkail,Thakurgaon', NULL, 'IITABBP08230023', '81dc9bdb52d04dc20036dbd8313ed055'),
(186, 'Ma Traders', 'Md Robiul Islam', '01327227049', 'Hardware Shop', 'Ranisonkail,Thakurgaon', NULL, 'IITABBP08230023', '81dc9bdb52d04dc20036dbd8313ed055'),
(187, 'Vai vai aluminium', 'Md Mukul Hassan', '01768841060', 'Aluminium shop', 'Ranisonkail,Thakurgaon', NULL, 'IITABBP08230023', '81dc9bdb52d04dc20036dbd8313ed055'),
(188, 'Bondhu thai Ghor', 'Md Sajid ur Rehman', '01746-695177', 'Glass and Thai shop', 'Ranisonkail,Thakurgaon', NULL, 'IITABBP08230023', '81dc9bdb52d04dc20036dbd8313ed055'),
(189, 'Rubel Telecom', 'MD Rashid Ali', '017 3712 8718', 'dealer', 'Ranisonkail,Thakurgaon', NULL, 'IITABBP08230023', '81dc9bdb52d04dc20036dbd8313ed055'),
(190, 'Rashid confectionery', 'MD Rashid', '01914739337', 'confectionery shop', 'Ranisonkail,Thakurgaon', NULL, 'IITABBP08230023', '81dc9bdb52d04dc20036dbd8313ed055'),
(191, 'main Dua electronics', 'MD Anwar Hussain', '017 740 38853', 'electronic shop', 'Ranisonkail,Thakurgaon', NULL, 'IITABBP08230023', '81dc9bdb52d04dc20036dbd8313ed055'),
(192, 'Noor Jehan electronics', 'MD Anwarul Islam', '017735 718 63', 'electronic shop', 'Ranisonkail,Thakurgaon', NULL, 'IITABBP08230023', '81dc9bdb52d04dc20036dbd8313ed055'),
(193, 'Rasel Podda House', 'Md Rasel', '01724224673', 'garments', 'Ranisonkail,Thakurgaon', NULL, 'IITABBP08230023', '81dc9bdb52d04dc20036dbd8313ed055'),
(194, 'Saiful hardware', 'MD Saiful Islam', '017183 14214', 'hardware shop', 'Ranisonkail,Thakurgaon', NULL, 'IITABBP08230023', '81dc9bdb52d04dc20036dbd8313ed055'),
(195, 'Cairo practic bone setting centre', 'MD Sahinur Rahman', '01783135201', 'physiotherapy centre', 'Ranisonkail,Thakurgaon', NULL, 'IITABBP08230023', '81dc9bdb52d04dc20036dbd8313ed055'),
(196, 'Nobab traders', 'Md Ziaur Rahman', '01724 9197 74', 'dealer of ceramic', 'Ranisonkail,Thakurgaon', NULL, 'IITABBP08230023', '81dc9bdb52d04dc20036dbd8313ed055'),
(197, 'Alif Lam Mim varieties', 'MD Abdur Rahim', '01717068792', 'varieties shop', 'Ranisonkail,Thakurgaon', NULL, 'IITABBP08230023', '81dc9bdb52d04dc20036dbd8313ed055'),
(198, 'Ma traders', 'MD Manerul Islam', '01763583819', 'Distribution house Akij', 'Ranisonkail,Thakurgaon', NULL, 'IITABBP08230023', '81dc9bdb52d04dc20036dbd8313ed055'),
(199, 'Sumon Hardware', 'Md Sumon', '01736294163', 'Decorate Shop', 'Bottoli', NULL, 'IITABBP08230023', '81dc9bdb52d04dc20036dbd8313ed055'),
(200, 'Mounuddin Store', 'Md Mounuddin Vuttu', '01712842010', 'Mudi Dokan', 'Bottoli', NULL, 'IITABBP08230023', '81dc9bdb52d04dc20036dbd8313ed055'),
(201, 'Meftuail Pharmacy', 'Md Khorsed Alom', '01726863255', 'Pharmacy  vaterinary', 'Bottoli', NULL, 'IITABBP08230023', '81dc9bdb52d04dc20036dbd8313ed055'),
(202, 'Riya veraitis', 'Md Rayhan', '01761267577', 'Veraitis Dokan', 'Bottoli', NULL, 'IITABBP08230023', '81dc9bdb52d04dc20036dbd8313ed055'),
(203, 'New Mahafuz bekari', 'Md Ataur Rahman', '01762601232', 'Bekari dokan', 'Bottoli', NULL, 'IITABBP08230023', '81dc9bdb52d04dc20036dbd8313ed055'),
(204, 'Rofikul Hardware', 'Md Rofikul Islam', '01728206622', 'Hardware shop', 'Bottoli', NULL, 'IITABBP08230023', '81dc9bdb52d04dc20036dbd8313ed055'),
(205, 'Ojoy telecom', 'Ojoy roy', '01705353555', 'Telecom Dokan', 'Bottoli', NULL, 'IITABBP08230023', '81dc9bdb52d04dc20036dbd8313ed055'),
(206, 'Opi electric', 'Md Obaidur Rahman', '01740814145', 'electronics dokn', 'Bottoli', NULL, 'IITABBP08230023', '81dc9bdb52d04dc20036dbd8313ed055'),
(207, 'Vai vai Pharmacy', 'Md Ajgor Ali', '01713730041', 'Pharmacy', 'Bottoli', NULL, 'IITABBP08230023', '81dc9bdb52d04dc20036dbd8313ed055'),
(208, 'Tanisha Mart', 'Tanisha Jahan', '01724857689', 'Organic Food', '11/7, Nadda, Kalachadpur, Gulshan, Dhaka-1212', NULL, 'IITABBP08230021', '35aef8d0e8cd0e894f2b0d83f4173e4c'),
(209, 'Taiyeb Enterprise', 'Md: Alamgir Sarker', '01819005586', 'Gas Cylinder Supplier', '79/2/a, Kuril, Vatara, Dhaka-1229', NULL, 'IITABBP08230021', '35aef8d0e8cd0e894f2b0d83f4173e4c'),
(210, 'Chittagong Tea Store', 'Shohidul Islam', '01852810009', 'Tea stall', 'K-185, Kuril, Vatara, Dhaka-1229', NULL, 'IITABBP08230021', '35aef8d0e8cd0e894f2b0d83f4173e4c'),
(211, 'Chittagong General  Store', 'Md: Shohidul Islam', '01883670490', 'Grocery store', 'K-79/2/7, Kuril, Vatara, Dhaka-1229', NULL, 'IITABBP08230021', '35aef8d0e8cd0e894f2b0d83f4173e4c'),
(212, 'Chittagong Hair Fashion', 'Shohidul Islam', '01852810009', 'Salon', 'K-185, Kuril Miyabari, Vatara, Dhaka-1229', NULL, 'IITABBP08230021', '35aef8d0e8cd0e894f2b0d83f4173e4c'),
(213, 'Al-amin Cycle Store', 'Md: Al-amin', '01733997173', 'Cycle Parts Shop', 'K-211/3, Kuril Chawrasta, Vatara, Dhaka-1229', NULL, 'IITABBP08230021', '35aef8d0e8cd0e894f2b0d83f4173e4c'),
(214, 'Raser Hari Sweetmeat and Bakery', 'Md: Mizan', '01756418274', 'Sweetmeat and Grocery store', 'K-215, Kuril Chawrasta, Vatara, Dhaka-1229', NULL, 'IITABBP08230021', '35aef8d0e8cd0e894f2b0d83f4173e4c'),
(215, 'Abu Taher Enterprise', 'Md: Zaman', '01623792275', 'Mobile parts and Recharge shop', 'K-215, Kuril Chawrasta, Vatara, Dhaka_1229', NULL, 'IITABBP08230021', '35aef8d0e8cd0e894f2b0d83f4173e4c'),
(216, 'M/S Usha Furniture', 'Gonesh', '01719631748', 'Furniture', 'Opposite Hazi soriyotullah market, Daulatpur Khulna', NULL, 'IITABBP08230033', '96d01136fa9098d4f5df15116306bf40'),
(217, 'Rizik Cafe & Restaurant', 'Rizik Cafe', '+88 01819 693551 /+88 01955 032120', 'Cafe & Restaurant', 'Shawpno Super Shop (3rd Floor) opposite side of Safe n Save, Daulatpur, Khulna, Bangladesh.', 'Orizikcafekhulna@gmail.com', 'IITABBP08230033', '96d01136fa9098d4f5df15116306bf40'),
(218, 'Princess Cake & Restaurant', 'Md man', '01739-892505, 01791-020880', 'Restaurant takes orders for cakes for all occasions. Chinese platters are available.', '2nd showRoom: Jashore Road, (Opposite Saif Endside), Daulatpur, Khulna.', 'princesscakeboyra@gmail.com', 'IITABBP08230033', '96d01136fa9098d4f5df15116306bf40'),
(219, 'Sajid Digital Shop', 'Sajid Rahaman', '01608 856517', 'Online Shop', 'BL College Gate, Daulatpur Khulna', 'sajidcoom@gmail.com', 'IITABBP08230033', '96d01136fa9098d4f5df15116306bf40'),
(220, 'Sima Beauty Parlour', 'Sima Akter', '01680847257', 'Beauty Parlour', '234/3 South Goran, Khilgaon, Dhaka:1219', 'simabeautybd@gmail.com', 'IITABBP08230025', '96d01136fa9098d4f5df15116306bf40'),
(221, 'Shahid Mamar lacci Matha House', 'Md shahid', '01602649033', 'Juice house', 'Bl College first gate, Daulatpur Khulna', NULL, 'IITABBP08230033', '96d01136fa9098d4f5df15116306bf40'),
(222, 'Momo lovers', 'Prosejit Bisuas a', '01957093877', 'Momo food products', 'Bl College first gate', NULL, 'IITABBP08230033', '96d01136fa9098d4f5df15116306bf40'),
(223, 'Mohon Computer And Service Center', 'Md Mohon Sheik', '01638726510 /  01938618609', 'Computer Service center', 'Bl College road Daulatpur Khulna', NULL, 'IITABBP08230033', 'f8dd90764375fa28f779fc3af8820fec'),
(224, 'Sports Man', 'Md Arafat Sani', '01975760007', 'T Shirt Print', 'Bl College Road, Daulatpur, Khulna', NULL, 'IITABBP08230033', '96d01136fa9098d4f5df15116306bf40'),
(225, 'Caffe AM 2 PM', 'Faisal Ahmed', '01306171918', 'Resturant', 'Bl College 2nd  gate Daulatpur Khulna', NULL, 'IITABBP08230033', '96d01136fa9098d4f5df15116306bf40'),
(226, 'Tuhin Computer Service', 'Shahadat Hossen Tuhin', '01611-628620 / 01718-930192', 'Total Solution of Laptop, Desktop', 'BL College Road, Infront of Sonali Bank, Daulatpur, Khulna.', 'shtuhin1996@gmail.com', 'IITABBP08230033', '96d01136fa9098d4f5df15116306bf40'),
(227, 'Ongkon Ad', 'Md Masudur Rahman', '01911-654886', 'Signboards ■ Banners■ Pana PVC■ Vinyl ■ Screen Print■ Alpana ■ Genji Print■ Mother Print ■ Rubber Seal', 'BL College 1st Gate (Near Rail Crossing), Daulatpur, Khulna.', NULL, 'IITABBP08230033', '96d01136fa9098d4f5df15116306bf40'),
(228, 'Shohel Furniture', 'Md shohel', '01724956619', 'Furniture House', 'Opposite Hazi shoriyotullah Market, Daulatpur Khulna', NULL, 'IITABBP08230033', '96d01136fa9098d4f5df15116306bf40'),
(229, 'Ms Nasim Enterprise', 'Md Nasim', '01985919191', 'All type of sports Dress', 'Kcc Market Daulatpur Khulna', NULL, 'IITABBP08230033', '96d01136fa9098d4f5df15116306bf40'),
(231, 'Forhad Telecom', 'Md Forhad', '01911887993', 'All type of mobile service & sales', 'Kcc market Daulatpur Khulna', NULL, 'IITABBP08230033', '96d01136fa9098d4f5df15116306bf40'),
(232, 'BCS Confidence', 'Bcs Confidence', '01705232493', 'Job exam Coaching center', 'Opposite ss shopping complex Daulatpur Khulna', NULL, 'IITABBP08230033', '96d01136fa9098d4f5df15116306bf40'),
(233, 'MS Chittagong Furniture', 'Md shaiful.islam', '01733397800', 'Furniture', '10,Hazi shariyotullah market Daulatpur Khulna', NULL, 'IITABBP08230033', '96d01136fa9098d4f5df15116306bf40'),
(234, 'Vai vai traders', 'Md Majedur Rahman', '01771343048', 'Cement business', 'Nekmorod', NULL, 'IITABBP08230023', '81dc9bdb52d04dc20036dbd8313ed055'),
(236, 'Sajahan Cosmetics', 'Md Sahajahan Ali', '01762993804', 'Cosmetics shop', 'Nekmorod', NULL, 'IITABBP08230023', '81dc9bdb52d04dc20036dbd8313ed055'),
(237, 'Rifat Electronics', 'Md Abdur Rajjak', '01750664725', 'electronic shop', 'Nekmorod', NULL, 'IITABBP08230023', '81dc9bdb52d04dc20036dbd8313ed055'),
(238, 'Anowar Pharmacy', 'Md Asaduzzaman', '01740141567', 'Pharmacy', 'Nekmorod', NULL, 'IITABBP08230023', '81dc9bdb52d04dc20036dbd8313ed055'),
(239, 'Najir Aluminum', 'Md Najir Islam', '01724225880', 'Aluminium shop', 'Nekmorod', NULL, 'IITABBP08230023', '81dc9bdb52d04dc20036dbd8313ed055'),
(240, 'Tasfia Garments', 'Md Momin Islam', '01763173840', 'garments', 'Nekmorod', NULL, 'IITABBP08230023', '81dc9bdb52d04dc20036dbd8313ed055'),
(241, 'Rejaul Garments', 'Md Rejaul Islam', '01739906464', 'garments', 'Nekmorod', NULL, 'IITABBP08230023', '81dc9bdb52d04dc20036dbd8313ed055'),
(242, 'Asad Library', 'Md Momtajul korim', '01792733840', 'Library', 'Nekmorod', NULL, 'IITABBP08230023', '81dc9bdb52d04dc20036dbd8313ed055'),
(243, 'Chatro bondu library', 'Md Babul Hosen', '01723622473', 'Library shop', 'Nekmorod', NULL, 'IITABBP08230023', '81dc9bdb52d04dc20036dbd8313ed055'),
(244, 'Rownok Pharmacy', 'Md Nure Alom', '01747856781', 'Pharmacy', 'Nekmorod', NULL, 'IITABBP08230023', '81dc9bdb52d04dc20036dbd8313ed055'),
(245, 'Raiya machineries', 'Md Fojlul Hoque', '017 37032772', 'machineries', 'Nekmorod', NULL, 'IITABBP08230023', '81dc9bdb52d04dc20036dbd8313ed055'),
(246, 'Stump Ghor', 'Md Sahadad Hosen', '01718638259', 'Stump Stall', 'Nekmorod', NULL, 'IITABBP08230023', '81dc9bdb52d04dc20036dbd8313ed055'),
(247, 'Alif Pharmacy', 'Md Haydar Ali', '01723015894', 'Pharmacy', 'Nekmorod', NULL, 'IITABBP08230023', '81dc9bdb52d04dc20036dbd8313ed055'),
(248, 'Oily', 'Omar faruq', '01829116633', 'Oil shop service', '353/3, road:20, khilgaon, Dhaka:1219', NULL, 'IITABBP08230025', '4e8afd4e47884eb8844dbed5a81051c6'),
(249, 'Ma homio Pharmacy', 'Dr.Md Manik', '01734138102', 'Pharmacy', 'Nekmorod', NULL, 'IITABBP08230023', '81dc9bdb52d04dc20036dbd8313ed055'),
(250, 'Adorso Computer', 'Bidhan condro roy', '01713782882', 'Online seba', 'Nekmorod', NULL, 'IITABBP08230023', '81dc9bdb52d04dc20036dbd8313ed055'),
(251, 'Pasupati ghosh', 'Shuk dev ghosh', '01711464147', 'Sweets house', 'Opposite eid ga Daulatpur bazar Daulatpur Khulna', NULL, 'IITABBP08230033', '96d01136fa9098d4f5df15116306bf40'),
(252, 'Matri mistanno vander', 'Sadhan chandra Shadhu', '01711280813', 'Sweet house', 'Opposite pasupati ghosh Daire', NULL, 'IITABBP08230033', '96d01136fa9098d4f5df15116306bf40'),
(253, 'Bismillah Enterprise', 'Md monir', '01978811384', 'Cottage industry products', 'Daulatpur bazar  rali line near Vegetable bazar Daulatpur Khulna', NULL, 'IITABBP08230033', '96d01136fa9098d4f5df15116306bf40'),
(254, 'Bithika Footwear', 'Joy Dash', '01403373853', 'All type of Shoes', 'Daulatpur bazar rail line Daulatpur Khulna', NULL, 'IITABBP08230033', '96d01136fa9098d4f5df15116306bf40'),
(255, 'karim Fucka House', 'Md Abdul karim', '01511717919', 'Fucka House', 'Daulatpur bazar rail line  Daulatpur, Khulna.', NULL, 'IITABBP08230033', '9a808f5b7b972175f627827192f089da'),
(256, 'M/S Allahar Dan Varaities cloth & shoe house', 'Md noor islam Sardar', '01922485182', 'Garments Products', 'Opposite molla shopping complex Daulatpur Khulna', NULL, 'IITABBP08230033', '96d01136fa9098d4f5df15116306bf40'),
(257, 'Obaidul Shoes', 'Md Obaidul Islam', '01985408240', 'Shoes House', 'Near Rail line Daulatpur bazar, Daulatpur Khulna', NULL, 'IITABBP08230033', '96d01136fa9098d4f5df15116306bf40'),
(258, 'Babul  Pharmacy', 'Md Abu Bakkar', '01786948168', 'Pharmacy', 'Mirdangi', NULL, 'IITABBP08230023', '653ac11ca60b3e021a8c609c7198acfc'),
(259, 'Asraful St', 'Md Asraful Islam', '01798780057', 'Mudi Shop', 'Mirdangi', NULL, 'IITABBP08230023', '81dc9bdb52d04dc20036dbd8313ed055'),
(260, 'Ss Pharmacy', 'Md Abu Hanif', '01724443631', 'Pharmacy', 'Gazirhat', NULL, 'IITABBP08230023', '81dc9bdb52d04dc20036dbd8313ed055'),
(261, 'Ma chikitsalay', 'Md Khairul islam', '01740921490', 'Pharmacy', 'Bongao', NULL, 'IITABBP08230023', '81dc9bdb52d04dc20036dbd8313ed055'),
(262, 'Mahbub Pharmacy', 'Md Mahabub Alom', '01723396739', 'Pharmacy', 'Bongao', NULL, 'IITABBP08230023', '81dc9bdb52d04dc20036dbd8313ed055'),
(263, 'Ataur Medicine conner', 'Dr. Ataur Rahman', '01713648422', 'PC Doctor', 'Bongao', NULL, 'IITABBP08230023', '81dc9bdb52d04dc20036dbd8313ed055'),
(264, 'Kawsar Pharmacy', 'Md Kawsar ali', '0177382899', 'Pharmacy', 'Bongao', NULL, 'IITABBP08230023', '81dc9bdb52d04dc20036dbd8313ed055'),
(265, 'Jannatul hijab', 'MD. Ebrahim hossain', '01883126187', 'Burkah,abbaya collection', '540, road:13, Tilpapara,(Lucky pharmacy \'opposite , khilgaon, Dhaka:1219', NULL, 'IITABBP08230025', '96d01136fa9098d4f5df15116306bf40'),
(266, 'Jewellers Nokshi', 'MD. Mohiuddin', '01686076843', 'Gold jewellery', '317/A, Tilpapara, Road #11, khilgaon, Dhaka -1219', 'nokshijwellers1991@gmail.com', 'IITABBP08230025', '96d01136fa9098d4f5df15116306bf40'),
(267, 'Daulatpur porda Gallery And foam center', 'Md shaiful islam', '01716570083', 'Phones, mattresses, pillows, curtains, bedsheets, bedsheets, mosquito nets, mosquito nets provider', 'Mohsin Mor, Ground Floor of Rupali Bank, Daulatpur Bazar, Khulna.', NULL, 'IITABBP08230033', '96d01136fa9098d4f5df15116306bf40'),
(268, 'SS.Model Pharmacy', 'Sharif Yenayet Hossain', '01711716899', 'Pharmacy', 'Opposite Shahid Minar Daulatpur Khulna', 'sharifentegp@gmail.com', 'IITABBP08230033', '96d01136fa9098d4f5df15116306bf40'),
(269, 'Sattik cosmetics', 'Md Sondip Basak', '01714826247', 'Cosmetics shop', 'Ranisonkail', NULL, 'IITABBP08230023', '81dc9bdb52d04dc20036dbd8313ed055');
INSERT INTO `user_login_information` (`id`, `organization_name`, `owner_name`, `contact_number`, `business_type`, `address`, `email`, `employee_id`, `password`) VALUES
(270, 'Khulna Eye Hospital', 'Khulna Eye Hospital', '01314695704', 'Hospital', '434,Beside Daulatpur bus stand, Daulatpur Khulna', NULL, 'IITABBP08230033', '96d01136fa9098d4f5df15116306bf40'),
(271, 'Sojol Cosmetics', 'Md Projjol Basak', '0163401792', 'Cosmetics shop', 'Ranisonkail,Thakurgaon', NULL, 'IITABBP08230023', '81dc9bdb52d04dc20036dbd8313ed055'),
(272, 'Gitanjali Garments', 'Md Ujjol Basak', '01714691792', 'garments', 'Ranisonkail,Thakurgaon', NULL, 'IITABBP08230023', '81dc9bdb52d04dc20036dbd8313ed055'),
(273, 'Ranisonkail one time house', 'Krisno Basak', '01738439336', 'One time glass plate dokan', 'Ranisonkail,Thakurgaon', NULL, 'IITABBP08230023', '81dc9bdb52d04dc20036dbd8313ed055'),
(274, 'Mordern Korean Language Learning Center', 'S.M. Abu Saeed', '01715-895542', 'Language Coaching center', 'Daulatpur, B. L. College First Gate, Next to Rail Line, Khulna.', NULL, 'IITABBP08230033', '96d01136fa9098d4f5df15116306bf40'),
(275, 'Mk Dental', 'Dr.Takiya sultana keya & Dr Mukta khatun', '01729505197', 'Dental Hospital', 'Opposite Daulatpur bus stand, Daulatpur Khulna', NULL, 'IITABBP08230033', '96d01136fa9098d4f5df15116306bf40'),
(276, 'Raj medicine Corner', 'Sibhu basak', '01714901268', 'Pharmacy', 'Ranisonkail,Thakurgaon', NULL, 'IITABBP08230023', '81dc9bdb52d04dc20036dbd8313ed055'),
(277, 'Maya st', 'Jogodis basak', '01764804165', 'Cosmetics shop', 'Ranisonkail,Thakurgaon', NULL, 'IITABBP08230023', '81dc9bdb52d04dc20036dbd8313ed055'),
(278, 'Mou fashion house', 'Kanu basak', '01724082846', 'garments', 'Ranisonkail,Thakurgaon', NULL, 'IITABBP08230023', '81dc9bdb52d04dc20036dbd8313ed055'),
(279, 'Mondol garments', 'Kowsik mondol', '01714862079', 'garments', 'Ranisonkail,Thakurgaon', NULL, 'IITABBP08230023', '81dc9bdb52d04dc20036dbd8313ed055'),
(280, 'Biman cosmetics', 'Gobindo saha', '01746045966', 'Cosmetics shop', 'Ranisonkail,Thakurgaon', NULL, 'IITABBP08230023', '81dc9bdb52d04dc20036dbd8313ed055'),
(281, 'SITI Gold st', 'MD Akbor ali', '01719199559', 'Cosmetics shop', 'Ranisonkail,Thakurgaon', NULL, 'IITABBP08230023', '81dc9bdb52d04dc20036dbd8313ed055'),
(282, 'Milon confectionery', 'MD Milon Islam', '01737958465', 'confectionery', 'Ranisonkail,Thakurgaon', NULL, 'IITABBP08230023', '81dc9bdb52d04dc20036dbd8313ed055'),
(283, 'Sohad Pharmacy', 'Md Mehedi hasan', '01723858186', 'Pharmacy', 'Ranisonkail,Thakurgaon', NULL, 'IITABBP08230023', '81dc9bdb52d04dc20036dbd8313ed055'),
(284, 'Hoor by Tania', 'Hoor', '01814488934', 'Women Beauty salon', '19, Tilpapara, khilgaon, Dhaka: 1219', NULL, 'IITABBP08230025', '96d01136fa9098d4f5df15116306bf40'),
(285, 'Noyon st', 'Md Hamidur Hamid', '01738898502', 'Mudi Dokan', 'Ranisonkail,Thakurgaon', NULL, 'IITABBP08230023', '81dc9bdb52d04dc20036dbd8313ed055'),
(286, 'Saheb st', 'Md Saheb Ali', '01773703974', 'Mudi Dokan', 'Ranisonkail,Thakurgaon', NULL, 'IITABBP08230023', '81dc9bdb52d04dc20036dbd8313ed055'),
(287, 'Five brothers', 'Bimol Basak', '01715411861', 'garments', 'Ranisonkail,Thakurgaon', NULL, 'IITABBP08230023', '81dc9bdb52d04dc20036dbd8313ed055'),
(288, 'Vai vai cosmetics', 'Md Nasir Hosen', '01722840364', 'Cosmetics shop', 'Ranisonkail,Thakurgaon', NULL, 'IITABBP08230023', '81dc9bdb52d04dc20036dbd8313ed055'),
(289, 'Sagor bostraloy', 'Suren chondro basak', '01712562401', 'garments', 'Ranisonkail,Thakurgaon', NULL, 'IITABBP08230023', '81dc9bdb52d04dc20036dbd8313ed055'),
(290, 'Gitanjali st', 'Chonchol Ray', '01721850186', 'Cosmetics shop', 'Ranisonkail,Thakurgaon', NULL, 'IITABBP08230023', '81dc9bdb52d04dc20036dbd8313ed055'),
(291, 'New khalek bekary', 'Md Abdul Khalek', '01626007986', 'Bekari dokan', 'Ranisonkail,Thakurgaon', NULL, 'IITABBP08230023', '81dc9bdb52d04dc20036dbd8313ed055'),
(292, 'Anondo Bostro Bitan', 'Ojit Saha', '01716596338', 'garments', 'Ranisonkail,Thakurgaon', NULL, 'IITABBP08230023', '81dc9bdb52d04dc20036dbd8313ed055'),
(293, 'Remod Tailors', 'Narayan Ray', '01718857141', 'Tailor’s', 'Ranisonkail,Thakurgaon', NULL, 'IITABBP08230023', '81dc9bdb52d04dc20036dbd8313ed055'),
(294, 'Sari bostro bitan', 'Danes basak', '01740873448', 'garments', 'Ranisonkail,Thakurgaon', NULL, 'IITABBP08230023', '81dc9bdb52d04dc20036dbd8313ed055'),
(295, 'Alom Shoe St', 'Md Alom', '01721385708', 'Shoe shop', 'Ranisonkail,Thakurgaon', NULL, 'IITABBP08230023', '81dc9bdb52d04dc20036dbd8313ed055'),
(296, 'Al madina garments', 'Asad islam', '01308152737', 'garments', 'Ranisonkail,Thakurgaon', NULL, 'IITABBP08230023', '81dc9bdb52d04dc20036dbd8313ed055'),
(297, 'Basak traders', 'Sadhin basak', '01761302453', 'Mudi Dokan', 'Ranisonkail,Thakurgaon', NULL, 'IITABBP08230023', '81dc9bdb52d04dc20036dbd8313ed055'),
(298, 'Jobbar Hotel', 'Md Jobbar hosen', '01739961140', 'Hotel', 'Ranisonkail,Thakurgaon', NULL, 'IITABBP08230023', '81dc9bdb52d04dc20036dbd8313ed055'),
(299, 'Mukta Biryani Ghor', 'Arman Khan', '01715120396', 'Biryani Ghor', '1140/A khilgaon, Tilpapara,Rani building, Dhaka;1219', NULL, 'IITABBP08230025', '96d01136fa9098d4f5df15116306bf40'),
(300, 'New abbaya fashion', 'Sujon hossain', '01783359864', 'Burqha,Abbaya collection', '461/1/A, Khilgaon, Tilpapara, Dhaka:1219', NULL, 'IITABBP08230025', '96d01136fa9098d4f5df15116306bf40'),
(301, 'CAFE DOMINOS', 'Ariful islam', '01729536271', 'restaurant', 'BESIDE BL COLLEGE 1ST GATE', NULL, 'IITABBP08230033', '96d01136fa9098d4f5df15116306bf40'),
(302, 'Daulatpur Diagnostic and Consultation Centre,', 'Daulatpur Diagnostic Centre,', '01913235345', 'Diagnostic Center', '434, Jessore Road (South Side of Daulatpur Bus Stand West Side of Central Shaheed Minar,', NULL, 'IITABBP08230033', 'ea3b786c722cfd4d0651cced76d5958a'),
(304, 'DIFFERENT TAILORS', 'MD.ROBI', '01919014711', 'TAILORS', 'Kohinur Complex Shop #01, B.Lcolleg Rood Daulatpur, Khulna.', 'differentfashionbd1@gmail.com', 'IITABBP08230033', '96d01136fa9098d4f5df15116306bf40'),
(305, 'RASEL POWER GYM', 'MD.RASEL ISLAM', '01929661776', 'GYM CENTER', 'Opposite kobi farukh Academy primary school Daulatpur Khulna', NULL, 'IITABBP08230033', '96d01136fa9098d4f5df15116306bf40'),
(306, 'Mintu Chotpoti House', 'Md Mintu', '01645517099', 'Fast-food corner', '80, Railgate Traffic Junction Daulatpur, Khulna.', NULL, 'IITABBP08230033', '96d01136fa9098d4f5df15116306bf40'),
(307, 'Saudagar Hotel', 'Md. Ibrahim Saudagar', '01768687843', 'Here Desi Chuijhal is sold in retail and wholesale. B: Parcel order is taken', 'Daulatpur Bazar (Chuijhal Patti) Daulatpur, Khulna.', NULL, 'IITABBP08230033', '96d01136fa9098d4f5df15116306bf40'),
(308, 'Shah Dental Surgery', 'Dr. A.S.M. Sayem Mia', '01745-909890', 'Dental Treatment', 'Daulatpur Central Shaheed Minar West Side 4:34, Jessore Road, (2nd Floor) Daulatpur, Khulna.', NULL, 'IITABBP08230033', '96d01136fa9098d4f5df15116306bf40'),
(309, 'Foreign Ambition Korean Language Learning Center', 'SM Abdul Majeed', '01929-442814', 'Language Coaching', 'Opposite Daulatpur Bus Stand, Daulatpur, Khulna.', 'mozidkr@gmail.com', 'IITABBP08230033', 'd41d8cd98f00b204e9800998ecf8427e'),
(310, 'Milon Telecom', 'Md Milan Sheikh', '01991751499', 'New mobile set mobile software> Mobile Accessories Sales > Mobile Servicing-', 'Daulatpur Three Wheeler Driver Union Market (Near Rail Line), Daulatpur, Khulna.', NULL, 'IITABBP08230033', '96d01136fa9098d4f5df15116306bf40'),
(311, 'Karukaj', 'Md Zakir', '01712216271', 'Craftsmanship', 'pabla khan para, Daulatpur Khulna', NULL, 'IITABBP08230033', '96d01136fa9098d4f5df15116306bf40'),
(312, 'Anamul cosmetics', 'Md Anamul Hoque', '01925051874', 'Cosmetics shop', 'Nekmorod', NULL, 'IITABBP08230023', '81dc9bdb52d04dc20036dbd8313ed055'),
(313, 'The One Hair Gents parlour Salon', 'Md Akbar', '+8801708415105', 'Gents parlour and Salon', 'Opposite hasnat traders, Jessore doad Daulatpur Khulna', NULL, 'IITABBP08230033', '96d01136fa9098d4f5df15116306bf40'),
(314, 'Raj cosmetics', 'Md Josim uddin', '01773377248', 'Cosmetics shop', 'Nekmorod', NULL, 'IITABBP08230023', '81dc9bdb52d04dc20036dbd8313ed055'),
(315, 'Lokman st', 'Md Owali Ullah', '01796870864', 'Mudi Dokan', 'Nekmorod', NULL, 'IITABBP08230023', '81dc9bdb52d04dc20036dbd8313ed055'),
(316, 'ORO Dental', 'Sayedur Rahman', '01716819602', 'Dental Health', 'Opposite baby stand Jame Mosjid, Daulatpur Khulna', NULL, 'IITABBP08230033', '96d01136fa9098d4f5df15116306bf40'),
(317, 'Suren st', 'Suren saha', '01755444396', 'Mudi Dokan', 'Nekmorod', NULL, 'IITABBP08230023', '81dc9bdb52d04dc20036dbd8313ed055'),
(318, 'Alim garments', 'Md Alim hosen', '01722923767', 'garments', 'Nekmorod', NULL, 'IITABBP08230023', '81dc9bdb52d04dc20036dbd8313ed055'),
(319, 'Mithila garments', 'Md Saiful islam', '01715359795', 'garments', 'Nekmorod', NULL, 'IITABBP08230023', '81dc9bdb52d04dc20036dbd8313ed055'),
(320, 'Sopno shoe st', 'Md Torikul islam', '01716710452', 'Shoe dokan', 'Nekmorod', NULL, 'IITABBP08230023', '81dc9bdb52d04dc20036dbd8313ed055'),
(321, 'Duch bangla agent', 'Md Al Mubin', '01716939246', 'Agent', 'Nekmorod', NULL, 'IITABBP08230023', '81dc9bdb52d04dc20036dbd8313ed055'),
(322, 'Sumi Digital studio', 'Md Abdur Rahim', '01755462308', 'Studio', 'Nekmorod', NULL, 'IITABBP08230023', '81dc9bdb52d04dc20036dbd8313ed055'),
(323, 'Mayer dowa vater hotel', 'Md Sekendar ali', '0174209544', 'Hotel', 'Nekmorod', NULL, 'IITABBP08230023', '81dc9bdb52d04dc20036dbd8313ed055'),
(324, 'Mesas ma babar asirbar', 'Buddhi nath ray', '01717750833', 'Serviceing center', 'Nekmorod', NULL, 'IITABBP08230023', '81dc9bdb52d04dc20036dbd8313ed055'),
(325, 'Janntul traders', 'Md Husen Ali', '01322367111', 'service and parts shop', 'Nekmorod', NULL, 'IITABBP08230023', '81dc9bdb52d04dc20036dbd8313ed055'),
(326, 'Tanvir traders', 'Md Mostofa kamal', '01733170637', 'agriculture business', 'Nekmorod', NULL, 'IITABBP08230023', '81dc9bdb52d04dc20036dbd8313ed055'),
(327, 'Doctors lab medicine', 'Md Masud Rana', '01744874812', 'Doctors lab', 'Nekmorod', NULL, 'IITABBP08230023', '81dc9bdb52d04dc20036dbd8313ed055'),
(328, 'New Top Ten Collection', 'Sayed Ersad Ali (Jorip)', '01712984339', 'Garments Products', 'B,L College  Road, Outpost Mor, Daulatpur,Khulna', NULL, 'IITABBP08230033', '96d01136fa9098d4f5df15116306bf40'),
(329, 'Sojib traders', 'Md Jahangir', '01715249169', 'business of cement', 'Nekmorod', NULL, 'IITABBP08230023', '81dc9bdb52d04dc20036dbd8313ed055'),
(330, 'Ma hardware', 'Md Sahajahan ali', '01773736833', 'Hardware shop', 'Nekmorod', NULL, 'IITABBP08230023', '81dc9bdb52d04dc20036dbd8313ed055'),
(331, 'Shohan Export Fashion', 'Md. Mizanur Rahman', '01917-607980', 'An Exclusive Exports and Others Garments House of Ladies, Gents & Kids.', 'Police Fari More, B.LCollege Road, Doulatpur, Khulna.', NULL, 'IITABBP08230033', '96d01136fa9098d4f5df15116306bf40'),
(332, 'Rupakatha Digital Mine', 'Md. Olyar Rahman', '01405-247333', 'All kinds of bannersOur ServicesRashid Bahi-SahAll types of sticker cash memosAll printing worksfestoonPoster leafletVisiting cardMagazine Annual ReportCalendarGenji printis made', 'Behind Awami League Office (Next To Akankha Tower) Khan Para Road, Daulatpur, Khulna.', NULL, 'IITABBP08230033', '96d01136fa9098d4f5df15116306bf40'),
(333, 'Nasrat Dental Supply', 'Md. Billal Hossain', '01328890050', 'provides all dental supplies at affordable prices.', 'Upper Jessore Road, Daulatpur, Khulna.', NULL, 'IITABBP08230033', '96d01136fa9098d4f5df15116306bf40'),
(334, 'Fashion optical so watch', 'Dr. Khan Nahid Murad (Anik)', '01716-189012', 'All Spectacles, Watches, Calculators Sellers &You are getting the benefits of your own eye doctor.', 'Daulatpur Bazar Mor, Daulatpur, Khulna.', NULL, 'IITABBP08230033', '96d01136fa9098d4f5df15116306bf40'),
(335, 'Funny in the heart', 'Md sojib', '01671-145049', 'Domestic and foreign ladies and men\'s Phangan dresses are available.', 'Daulatpur Police Fadir Mor, B. L. College Road, Daulatpur Bazar, Khulna.', NULL, 'IITABBP08230033', '96d01136fa9098d4f5df15116306bf40'),
(336, 'Mordern Optical & Watch', 'Md Man', '01912-906207', 'Eye examination by Ophthalmologist surgeon and repair of all types of glasses, watches, sunglasses, calculators sales.', 'B, L, College Road Daulatpur, Khulna.', NULL, 'IITABBP08230033', '96d01136fa9098d4f5df15116306bf40'),
(337, 'Times and Vision', 'Dr. Shimul Chakraborty', '01713-226337', 'Ophthalmologist', 'BL College Road (Bazar Mor) Daulatpur, Khulna.', NULL, 'IITABBP08230033', '96d01136fa9098d4f5df15116306bf40'),
(338, 'Export Museum', 'Md. Delwar Hossain Talukder (Dipu) M.A', '01732 39 49 11', 'World Famous Brand of Export Wear Collections', 'B.L College Road (Daulatpur Bazar Farir More), Doulatpur, Khulna.', NULL, 'IITABBP08230033', '96d01136fa9098d4f5df15116306bf40'),
(339, 'Shojol centering service', 'MD. Shojol', '01680347662', 'Centering service', 'Tilpapara, khilgaon, Dhaka 1209', NULL, 'IITABBP08230025', '96d01136fa9098d4f5df15116306bf40'),
(340, 'Cheesy and juicy', 'Arshadul Asif', '01812776399 ,01972033299', 'Juice & drinks services provider', '114/A, road:18, Tilpapara, Harbaga Mor, khilgaon,Dhaka:1219', NULL, 'IITABBP08230025', '96d01136fa9098d4f5df15116306bf40'),
(341, 'Banoful Traders', 'Md man', '01706361484', 'Lubricant & Mobile seller', 'Bl college road Daulatpur Khulna', NULL, 'IITABBP08230033', '96d01136fa9098d4f5df15116306bf40'),
(342, 'Ms Amena cloth Store', 'Md babu', '01684559011', 'Ready made & plain cloth saler', 'Daulatpur bazar, Daulatpur Khulna', NULL, 'IITABBP08230033', '96d01136fa9098d4f5df15116306bf40'),
(343, 'Paye Paye Shoes', 'Md man', '041762562', 'Shoes House', 'Daulatpur bazar, Daulatpur Khulna', NULL, 'IITABBP08230033', '96d01136fa9098d4f5df15116306bf40'),
(344, 'M/s. Marine Lubricant', 'Md. Arifur Rahman', '01712-130154,', 'Padma Oil Company Ltd. Meghna Petroleum Ltd. Mobil Jamuna Ltd. Navana Petroleum Ltd. ACI Motors Ltd. (YAMAHA) Petroleum Products Ltd.', '101, Monir Market, BL College Road.Daulatpur Khulna', 'arilboron410@gmail.com', 'IITABBP08230033', '96d01136fa9098d4f5df15116306bf40'),
(345, 'Dress colllection', 'Bilkis Akter', '01816872674', 'Boutiqe', 'Road :22, Tilpapara, khilgaon, Dhaka:1219', 'nasbil38@gmail.com', 'IITABBP08230025', '96d01136fa9098d4f5df15116306bf40'),
(346, 'Noornagar Tiles', 'Md Noor Islam Babu Sheikha', '01712957185', 'All types of tiles are wholesale hereand retailers and suppliers. All types', 'Dawood Complex, New Road Junction, Daulatpur, Khulna.', NULL, 'IITABBP08230033', '96d01136fa9098d4f5df15116306bf40'),
(347, 'Lolona', 'Md. Mizanur Rahman', '01918293292', 'gauze cloth, three-pitch, veil-hijab', 'Moral Market, Rail Gate, Daulatpur, Khulna.', NULL, 'IITABBP08230033', '96d01136fa9098d4f5df15116306bf40'),
(348, 'Makkah Tiles Corner', 'Syed SaifulIslam (Rakin)', '01987-661662', 'Dealer of domestic and foreign wall tiles, floor tiles, borders, deco tiles, putting, floor cleaner marble stone, white cement and all kinds of mosaic goods.', 'Dawood Complex, New Rasta Mor (Next to Water Tank), Khulna.', NULL, 'IITABBP08230033', '96d01136fa9098d4f5df15116306bf40'),
(349, 'Ali Tiles', 'Md. Abdul Awal', '01711-309162', 'Domestic and foreign tiles and sanitary ware are wholesaled and retailed.', 'Dawood Complex, Pabla New Road Junction (Near Water Tank), Khulna.', NULL, 'IITABBP08230033', '96d01136fa9098d4f5df15116306bf40'),
(350, 'M/s Kabir Pharmacy', 'Alhaj Md Yunus Ali', '01670181828', 'has all kinds of domestic and foreign products hereMedicines are sold at affordable prices.', '839/15, New Road Junction, Jessore Road, Daulatpur, Khulna.', NULL, 'IITABBP08230033', '96d01136fa9098d4f5df15116306bf40'),
(351, 'Doctor\'s Point', 'Doctors Point', '01711-575159,', 'Diagnostic, Consultation and Research Centre', '35/1, BIDC Road, New Road (East Side of Rail Crossing) Khalishpur, Khulna.', NULL, 'IITABBP08230033', '96d01136fa9098d4f5df15116306bf40'),
(352, 'Sharif Auto', 'Sharif Shafiqur Rahman (Sohag)', '01717994696', 'All types of motorcycle parts, mobiles, helmets wholesale and retail.', 'Jessore Road, New Road Junction, (Before Rail Line) Daulatpur, Khulna.', NULL, 'IITABBP08230033', '96d01136fa9098d4f5df15116306bf40'),
(353, 'S.B.I. Trading Corporation', 'S.B.I Trading Corporation', '01972-201201, 01711-010768, 01606-352595', 'General Supplier & Commission Agent Contractor C&F Agent Transportation Export-Import Construction', 'Office: 839/39, Notun Rastar Mor, Daulatpur, Khulna.', 'sbitradingcorporation@gmail.com', 'IITABBP08230033', '96d01136fa9098d4f5df15116306bf40'),
(354, 'Century Jewellery', 'Deepak Kumar Kar', '01712010267', 'Modern design pure Guinea gold jewellery A viable organization in the making', 'Haque Super Market, Daulatpur, Khulna', NULL, 'IITABBP08230033', '96d01136fa9098d4f5df15116306bf40'),
(355, 'ABEDA ORNA HOUSE', 'Md. Sahadat Hossain', '01712-346326,01674-153959', 'ORNA HOUSE', 'Morol Market, Rail Gate Daulatpur, Khulna.', 'abedaomna2017@gmail.com', 'IITABBP08230033', '96d01136fa9098d4f5df15116306bf40'),
(356, 'Daulatpur Liberty Bazaar', 'Md. Zahidul Islam', '01918-514365', 'Shoes house', 'Daulatpur Bazar, Khulna.', NULL, 'IITABBP08230033', '96d01136fa9098d4f5df15116306bf40'),
(357, 'M/s Chadni Bastralaya', 'Md. Abu Bakkar Mia', '01712850932', 'all types of domestic and foreign cloths', 'Molya Shopping Complex, Daulatpur Bazar, Khulna.', NULL, 'IITABBP08230033', '96d01136fa9098d4f5df15116306bf40'),
(358, 'Trendy Bee', 'Trendy bee', '01686-555652 01743-736285', 'Export Zone for Ladies Gents & Kids.', 'Gazi Market, BL College Road, Daulatpur, Khulna.', 'trendybee19@gmail.com', 'IITABBP08230033', '96d01136fa9098d4f5df15116306bf40'),
(359, 'JB AUSHADHALAYA DIAGNOSTIC COMPLEX OPTICS', 'AHSAN HABIB KALLOL', '01714-113114', 'Diagnostic Center', 'Notun Rasta, BIDC Road, Daulatpur, Khulna, Bangladesh', 'ahsanhabibkallol@gmail.com', 'IITABBP08230033', '96d01136fa9098d4f5df15116306bf40'),
(360, 'Seba polypus and piles care', 'Dr. Abdul Alim', '01920-649770, 01722-167905', '100% without surgery orth-piles, polypus, kunkh etc. patients are seen with guarantee - InshaAllah.', 'Road, 2nd Floor of Diba Fuel, Daulatpur Bazar, Khulna.', NULL, 'IITABBP08230033', '96d01136fa9098d4f5df15116306bf40'),
(361, 'Sangsar', 'Md man', '01707-901826', 'All type of house products', 'Daulatpur Bazar, Khulna.', NULL, 'IITABBP08230033', '96d01136fa9098d4f5df15116306bf40'),
(362, 'Torikul Hardware', 'Md Torikul islam', '01773193597', 'Hardware shop', 'Ranisonkail,Thakurgaon', NULL, 'IITABBP08230023', '81dc9bdb52d04dc20036dbd8313ed055'),
(363, 'Nimai hotel', 'Nimai condro ray', '01784776238', 'Hotel', 'Ranisonkail,Thakurgaon', NULL, 'IITABBP08230023', '81dc9bdb52d04dc20036dbd8313ed055'),
(364, 'Boi Bichitra', 'Md Motiur Rahman', '01712853328', 'Library', 'Ranisonkail,Thakurgaon', NULL, 'IITABBP08230023', '81dc9bdb52d04dc20036dbd8313ed055'),
(365, 'Soyad Pharmacy', 'Md Mehedi hasan Josim', '01723858186', 'Pharmacy', 'Ranisonkail,Thakurgaon', NULL, 'IITABBP08230023', '81dc9bdb52d04dc20036dbd8313ed055'),
(366, 'Babul st', 'Babul basak', '01713715777', 'Mudi Dokan', 'Ranisonkail,Thakurgaon', NULL, 'IITABBP08230023', '81dc9bdb52d04dc20036dbd8313ed055'),
(367, 'Sporsho chosma bitan', 'Monjur Hasan', '01971092054', 'Eye glasses, sunglasses, eye lens provider', '554/A, khilgaon, Tilpapara, road:18, Dhaka:1219', NULL, 'IITABBP08230025', '96d01136fa9098d4f5df15116306bf40'),
(368, 'Kababwala', 'MD.Maruf', '01625209191', 'Restaurant', '554/A,khilgaon, Tilpapara, road:16, Dhaka:1219Dhaka', NULL, 'IITABBP08230025', '96d01136fa9098d4f5df15116306bf40'),
(369, 'Joynal Vater Hotel', 'Md Joynal Abedin', '0162589926', 'Hotel', 'Ranisonkail,Thakurgaon', NULL, 'IITABBP08230023', '81dc9bdb52d04dc20036dbd8313ed055'),
(370, 'Foyjullah Medecine', 'Md Foyjul Islam', '01766461503', 'Pharmacy', 'Ranisonkail,Thakurgaon', NULL, 'IITABBP08230023', '81dc9bdb52d04dc20036dbd8313ed055'),
(371, 'Bogurarshadh', 'MD.Mahmudul Hasan', '01715799286', 'Bogurar food item', '1039,malibug, Dhaka:1219', 'bogurarshadh@gmail.com', 'IITABBP08230025', '4e8afd4e47884eb8844dbed5a81051c6'),
(372, 'Super digital studio', 'MD.Rony', '01715011308', 'Photography', '107/4,A, Khilgaon, Tilpapara, Road:16, Dhaka:1219', 'superstudio1981@gmail.com', 'IITABBP08230025', '4e8afd4e47884eb8844dbed5a81051c6'),
(373, 'Boishaki &Angara makeover', 'Boishaki', '01319762012', 'Makeover', '553/3, khilgaon, Tilpapara, Dhaka:1219', 'superstudio1981@gmail.com', 'IITABBP08230025', '4e8afd4e47884eb8844dbed5a81051c6'),
(374, 'Progoti Pharmacy', 'Subroto basak', '01723264388', 'Pharmacy', 'Ranisonkail,Thakurgaon', NULL, 'IITABBP08230023', '81dc9bdb52d04dc20036dbd8313ed055'),
(375, 'Fensi st', 'Omol saha', '01717589543', 'Cosmetics shop', 'Ranisonkail,Thakurgaon', NULL, 'IITABBP08230023', '81dc9bdb52d04dc20036dbd8313ed055'),
(376, 'Saddam fasion', 'Md Mokarom hosen saddam', '01751399787', 'garments', 'Ranisonkail,Thakurgaon', NULL, 'IITABBP08230023', '81dc9bdb52d04dc20036dbd8313ed055'),
(377, 'Niti telecom', 'Ronjjon basak', '01723079471', 'Mobile servicing', 'Ranisonkail,Thakurgaon', NULL, 'IITABBP08230023', '81dc9bdb52d04dc20036dbd8313ed055'),
(378, 'Ma telecom', 'Md Hasinur rahman kajol', '01723016002', 'Telecom Dokan', 'Ranisonkail,Thakurgaon', NULL, 'IITABBP08230023', '81dc9bdb52d04dc20036dbd8313ed055'),
(379, 'Jabed English teaching home', 'Md Jabed Ali', '01737614753', 'Teaching center', 'Ranisonkail,Thakurgaon', NULL, 'IITABBP08230023', '81dc9bdb52d04dc20036dbd8313ed055'),
(380, 'An nur shop', 'MD.nur', '01324537335,01628885502', 'Organic food', '359/A, road -21, Tilpapara, Dhaka:1219', NULL, 'IITABBP08230025', '96d01136fa9098d4f5df15116306bf40'),
(381, 'Fast aid Pharmacy', 'Md Liton Islam', '01792883828', 'Pharmacy', 'Vornia', NULL, 'IITABBP08230023', '81dc9bdb52d04dc20036dbd8313ed055'),
(382, 'Rohim st', 'Md Rohim', '01723790536', 'Mudi Dokan', 'Vornia', NULL, 'IITABBP08230023', '81dc9bdb52d04dc20036dbd8313ed055'),
(383, 'Motaleb st', 'Md Motaleb Islam', '01720802784', 'Mudi Dokan', 'Vornia', NULL, 'IITABBP08230023', '81dc9bdb52d04dc20036dbd8313ed055'),
(384, 'Zia Traders', 'Md Ziaur Rahman', '01724394912', 'Mudi Dokan', 'Vornia', NULL, 'IITABBP08230023', '81dc9bdb52d04dc20036dbd8313ed055'),
(385, 'Jobeda traders', 'Md Babul Hosen', '01740903915', 'traders', 'Vornia', NULL, 'IITABBP08230023', '81dc9bdb52d04dc20036dbd8313ed055'),
(386, 'Maisa sweets', 'Md Tusar Ahammad', '01706838397', 'Sweets shop', 'Vornia', NULL, 'IITABBP08230023', '81dc9bdb52d04dc20036dbd8313ed055'),
(387, 'Sobuj cosmetics', 'Md Sobuj Rahman', '01764813474', 'Cosmetics shop', 'Ranisonkail,Thakurgaon', NULL, 'IITABBP08230023', '81dc9bdb52d04dc20036dbd8313ed055'),
(388, 'Happy jewellery', 'Babu ray mohon ray', '01738050860', 'jewellery', 'Vornia', NULL, 'IITABBP08230023', '81dc9bdb52d04dc20036dbd8313ed055'),
(389, 'Soriful hardware', 'Md Najmul Hoque', '01723603915', 'hardware shop', 'Vornia', NULL, 'IITABBP08230023', '81dc9bdb52d04dc20036dbd8313ed055'),
(390, 'Santa cos', 'Md Abdur Rahim', '01774037019', 'Cosmetics shop', 'Vornia', NULL, 'IITABBP08230023', '81dc9bdb52d04dc20036dbd8313ed055'),
(391, 'Abu tabel store', 'Md Rubel Islam', '01737636239', 'Mudi Dokan', 'Vornia', NULL, 'IITABBP08230023', '81dc9bdb52d04dc20036dbd8313ed055'),
(392, 'Three star Drug house', 'Md Joynal abedin', '01717878311', 'Pharmacy', 'Vornia', NULL, 'IITABBP08230023', '81dc9bdb52d04dc20036dbd8313ed055'),
(393, 'Zisa traders', 'Md Jamal Uddin', '01724394912', 'Sar kitnasok shop', 'Vornia', NULL, 'IITABBP08230023', '81dc9bdb52d04dc20036dbd8313ed055'),
(394, 'Chembar', 'Dr Sopon pal', '01307384780', 'Doctor Chembar', 'Vornia', NULL, 'IITABBP08230023', '81dc9bdb52d04dc20036dbd8313ed055'),
(395, 'Isahak st', 'Md Isahak Hossen', '01713687833', 'Cosmetics shop', 'Vornia', NULL, 'IITABBP08230023', '81dc9bdb52d04dc20036dbd8313ed055'),
(396, 'Bosir st', 'Md Bosir Ahammad', '01731978421', 'Mudi Dokan', 'Vornia', NULL, 'IITABBP08230023', '81dc9bdb52d04dc20036dbd8313ed055'),
(398, 'Ayesa dental care', 'Mrs Lubna Akther', '01727104733', 'Dental', 'Thakituki', NULL, 'IITABBP08230023', 'e034fb6b66aacc1d48f445ddfb08da98'),
(399, 'Mahabub st', 'Md Mahabub Alom', '01737605182', 'Mudi Dokan', 'Bottoli', NULL, 'IITABBP08230023', '81dc9bdb52d04dc20036dbd8313ed055'),
(400, 'St electronics', 'Md Saidul Islam', '01761764610', 'electronic shop', 'Bottoli', NULL, 'IITABBP08230023', '81dc9bdb52d04dc20036dbd8313ed055'),
(401, 'Kamal st', 'Md Kamal Hossain', '0177449600', 'Mudi Dokan', 'Bottoli', NULL, 'IITABBP08230023', '81dc9bdb52d04dc20036dbd8313ed055'),
(402, 'Hasan Supar shop', 'Md Haydar Ali', '01741512600', 'Mudi Dokan', 'Bottoli', NULL, 'IITABBP08230023', '81dc9bdb52d04dc20036dbd8313ed055'),
(403, 'B M traders', 'Md Mavel Ali', '0171762531', 'Dealer', 'Bottoli', NULL, 'IITABBP08230023', '827ccb0eea8a706c4c34a16891f84e7b'),
(404, 'Juwel st', 'Md Juwel rana', '01719350087', 'Mudi Dokan', 'Bottoli', NULL, 'IITABBP08230023', '81dc9bdb52d04dc20036dbd8313ed055'),
(405, 'Hridoy hotel', 'Md Soriful islam', '01757994373', 'Hotel', 'Bottoli', NULL, 'IITABBP08230023', '81dc9bdb52d04dc20036dbd8313ed055'),
(406, 'Afia varieties', 'Md Mosiur Rahman', '01795734836', 'varieties Items', 'Bottoli', NULL, 'IITABBP08230023', '81dc9bdb52d04dc20036dbd8313ed055'),
(407, 'Jakir cos', 'Md Jakir Hossen', '01787465015', 'Cosmetics shop', 'Bottoli', NULL, 'IITABBP08230023', '81dc9bdb52d04dc20036dbd8313ed055');

-- --------------------------------------------------------

--
-- Table structure for table `user_post`
--

CREATE TABLE `user_post` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `post` mediumtext NOT NULL,
  `category` varchar(255) NOT NULL,
  `subcategories` varchar(255) NOT NULL,
  `division` varchar(255) NOT NULL,
  `district` varchar(255) NOT NULL,
  `area` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `role` varchar(255) NOT NULL,
  `like` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`like`)),
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_post`
--

INSERT INTO `user_post` (`id`, `title`, `post`, `category`, `subcategories`, `division`, `district`, `area`, `image`, `user_id`, `role`, `like`, `created_at`, `updated_at`) VALUES
(1, 'Pasta Basta of The Bitcoin Cafe', 'That’s right, when The Bitcoin cafe sent me their pasta and burger, I was a bit skeptical about the taste and quality, but upon tasting, I was really impressed indeed! The review is as follows!', 'Food & Beverage', 'Taditional Food', 'Dhaka Division', 'Dhaka', 'Dhanmondi', 'images/post/6584113e8b5c2.jpg', 1, 'pending', NULL, '2023-12-21 10:19:42', '2023-12-21 10:19:42'),
(2, 'Samsung Galaxy A05s', 'Samsung is constantly growing its entry-level Galaxy A portfolio. Currently sitting at the very bottom of the lineup are the Galaxy A05 and the Galaxy A05s, the latter of which we have in for review today.', 'Electronics', 'Mobiles & Tablets', 'Dhaka Division', 'Dhaka', 'Dhamrai', 'images/post/65842f7e384ee.jpg', 1, 'pending', NULL, '2023-12-21 12:28:46', '2023-12-21 12:28:46'),
(3, 'Best Plug-In Hybrid SUVs', 'The Kia Sportage Hybrid delivers on just about every front. The ride quality is excellent, the interior is spacious and the rear hatch opens to a massive cargo area. There\'s some clever interior storage up front as well as lots of available in-car tech and a full suite of driver aids. Fuel economy didn\'t quite live up to expectations, but we have few complaints about this electrified compact crossover.', 'Vehicles', 'Cars & Trucks', 'Sylhet Division', 'Sylhet', 'Zakiganj', 'images/post/658430718bf29.jpg', 1, 'pending', NULL, '2023-12-21 12:32:49', '2023-12-21 12:32:49');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_info`
--
ALTER TABLE `admin_info`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admin_info_number_unique` (`number`),
  ADD UNIQUE KEY `admin_info_admin_email_unique` (`admin_email`);

--
-- Indexes for table `area`
--
ALTER TABLE `area`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories_list`
--
ALTER TABLE `categories_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `division`
--
ALTER TABLE `division`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employee_info`
--
ALTER TABLE `employee_info`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `employee_info_emp_number_unique` (`emp_number`),
  ADD UNIQUE KEY `employee_info_emp_nid_unique` (`emp_nid`),
  ADD UNIQUE KEY `employee_info_emp_email_unique` (`emp_email`);

--
-- Indexes for table `employee_information`
--
ALTER TABLE `employee_information`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `packages`
--
ALTER TABLE `packages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pending`
--
ALTER TABLE `pending`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `pending_owner_number_unique` (`owner_number`),
  ADD UNIQUE KEY `pending_owner_email_unique` (`owner_email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `user_info`
--
ALTER TABLE `user_info`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_info_owner_number_unique` (`owner_number`),
  ADD UNIQUE KEY `user_info_owner_email_unique` (`owner_email`);

--
-- Indexes for table `user_login_information`
--
ALTER TABLE `user_login_information`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_post`
--
ALTER TABLE `user_post`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_post_user_id_foreign` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_info`
--
ALTER TABLE `admin_info`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `area`
--
ALTER TABLE `area`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT for table `categories_list`
--
ALTER TABLE `categories_list`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `division`
--
ALTER TABLE `division`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `employee_info`
--
ALTER TABLE `employee_info`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `employee_information`
--
ALTER TABLE `employee_information`
  MODIFY `id` int(64) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `packages`
--
ALTER TABLE `packages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `pending`
--
ALTER TABLE `pending`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_info`
--
ALTER TABLE `user_info`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `user_login_information`
--
ALTER TABLE `user_login_information`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=408;

--
-- AUTO_INCREMENT for table `user_post`
--
ALTER TABLE `user_post`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `user_post`
--
ALTER TABLE `user_post`
  ADD CONSTRAINT `user_post_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `user_info` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
