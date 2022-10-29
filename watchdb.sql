-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 29, 2022 at 09:54 PM
-- Server version: 10.4.16-MariaDB
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `watchdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `afa110_brand`
--

CREATE TABLE `afa110_brand` (
  `id` int(10) UNSIGNED NOT NULL,
  `create_date` varchar(100) DEFAULT NULL,
  `title` varchar(100) DEFAULT NULL,
  `slug` varchar(100) DEFAULT NULL,
  `brand_img` varchar(100) DEFAULT NULL,
  `status` varchar(10) DEFAULT NULL,
  `meta_description` text DEFAULT NULL,
  `meta_keyword` varchar(100) DEFAULT NULL,
  `last_updated` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `afa110_brand`
--

INSERT INTO `afa110_brand` (`id`, `create_date`, `title`, `slug`, `brand_img`, `status`, `meta_description`, `meta_keyword`, `last_updated`) VALUES
(1, '02/28/2022', 'Patek Philippe', 'patek-philippe', '6730f4009ccb09a822552e4026f6ed1a.jpg', 'ACTIVE', 'Patek Philippe', 'Patek Philippe,Luxury watch', '2022-02-26 09:54:54'),
(2, '02/28/2022', 'Vacheron Constantin', 'vacheron-constantin', '0b2b46e80704dc9f2949daafe0839ea3.jpg', 'ACTIVE', 'Vacheron Constantin', 'Vacheron Constantin,Luxury watch,watch', '2022-02-26 09:54:55'),
(3, '02/28/2022', 'Audemars Piguet', 'audemars-piguet', 'cce3f56a4accc59ce599ca2202b8940f.jpg', 'ACTIVE', 'Audemars Piguet', 'Audemars Piguet,Luxury watch,watch', '2022-02-26 09:54:57'),
(4, '02/28/2022', 'Blancpain', 'blancpain', 'a03c71f397c00bb001de9d167f6aac7b.jpg', 'ACTIVE', 'Blancpain', 'Blancpain,Luxury watch,watch', '2022-02-26 09:54:59'),
(5, '02/28/2022', 'Ulysse Nardin', 'ulysse-nardin', '410acd26157b3e7cc458d6a486fa6322.jpg', 'ACTIVE', 'Ulysse Nardin', 'Ulysse Nardin,Luxury watch,watch', '2022-03-01 23:45:19');

-- --------------------------------------------------------

--
-- Table structure for table `afa110_media`
--

CREATE TABLE `afa110_media` (
  `id` int(10) UNSIGNED NOT NULL,
  `create_date` varchar(255) DEFAULT NULL,
  `media_type` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `embed_code` text DEFAULT NULL,
  `media_img` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `meta_description` text DEFAULT NULL,
  `meta_keyword` varchar(255) DEFAULT NULL,
  `last_updated` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `afa110_media`
--

INSERT INTO `afa110_media` (`id`, `create_date`, `media_type`, `title`, `slug`, `description`, `embed_code`, `media_img`, `status`, `meta_description`, `meta_keyword`, `last_updated`) VALUES
(1, '02/12/2017', 'slideshow', 'DELL Slider 1', 'dell-slider-1', '', '', '1211e25002829d90d8cc9656fe044569.jpg', 'ACTIVE', '', '', '2022-01-08 12:50:44'),
(2, '02/12/2017', 'slideshow', 'DELL Slider 2', 'dell-slider-2', '', '', '03d082d713ceb830bff9efbb5d72e46f.jpg', 'ACTIVE', '', '', '2022-01-08 12:50:44'),
(3, '02/12/2017', 'slideshow', 'DELL Slider 3', 'dell-slider-3', '', '', '25fa01b38be101421206de01f5932bfa.jpg', 'ACTIVE', '', '', '2022-01-08 12:50:45'),
(4, '02/12/2017', 'slideshow', 'HP slider 1', 'hp-slider-1', '', '', '1b5582a747b49703f7aa9e022d96f4eb.jpg', 'ACTIVE', '', '', '2022-01-08 12:50:45'),
(5, '02/12/2017', 'slideshow', 'HP slider 2', 'hp-slider-2', '', '', '4c6d5bf2255fc2c5a78454d4a1f917ec.JPG', 'ACTIVE', '', '', '2022-01-08 12:50:46'),
(6, '02/12/2017', 'slideshow', 'HP slider 3', 'hp-slider-3', '', '', 'f64c97509d74dfd17f90043aa2309391.jpg', 'ACTIVE', '', '', '2022-01-08 12:50:47'),
(7, '02/28/2022', ':: Select Media Type ::', 'kljkl', 'kljkl', 'kljklj', 'lkl', 'a9032051de0cd78915aae76ab833a8ab.jpg', NULL, 'kl', '', '2022-02-27 19:15:51');

-- --------------------------------------------------------

--
-- Table structure for table `afa110_member`
--

CREATE TABLE `afa110_member` (
  `id` int(10) UNSIGNED NOT NULL,
  `create_date` varchar(100) DEFAULT NULL,
  `fullname` varchar(100) DEFAULT NULL,
  `country` varchar(100) DEFAULT NULL,
  `city` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `hash_key` varchar(255) DEFAULT NULL,
  `status` varchar(10) DEFAULT NULL,
  `last_updated` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `afa110_member`
--

INSERT INTO `afa110_member` (`id`, `create_date`, `fullname`, `country`, `city`, `email`, `password`, `hash_key`, `status`, `last_updated`) VALUES
(1, '11-02-2017', 'Ayaz Ahmed Mast', 'Pakistan', 'Karachi', 'ayzeetech@gmail.com', 'yasin', NULL, 'Active', '2022-02-20 22:04:04'),
(2, '11-02-2017', 'Yaseen Rasheed', 'Pakistan', 'Karachi', 'yaseenustar@gmail.com', 'Karachi123@', '', 'Active', '2017-02-12 01:11:58'),
(3, '11-02-2017', 'Umair Rafique', 'Pakistan', 'Karachi', 'umairrafique97@gmail.com', 'Karachi123@', '', 'Active', '2017-02-12 01:12:10'),
(4, '11-02-2017', 'Asim Saleem', 'Pakistan', 'Karachi', 'asim.saleem.memon124@gmail.com', 'Karachi123@', '', 'Active', '2017-02-12 01:12:24'),
(5, '11-02-2017', 'Bazil Iqbal', 'Pakistan', 'Karachi', 'baziliqbal786@gmail.com', 'Karachi123@', '', 'Active', '2017-02-12 01:13:49'),
(6, '11-02-2017', 'Mudasir Kalmati', 'Pakistan', 'Karachi', 'mudassirkalmati@gmail.com', 'Karachi123@', '', 'Active', '2017-02-12 01:13:08'),
(7, '11-02-2017', 'Shahzad Patni', 'Pakistan', 'Karachi', 'shahzadpatni83@gmail.com', 'Karachi123@', '', 'Active', '2017-02-12 01:13:22'),
(8, '12-02-2017', 'Bazil Iqbal', 'Pakistan', 'Karachi', 'baziliqbal01@gmail.com\r\n', 'Karachi123@', '', 'Active', '2017-02-12 17:20:02'),
(9, NULL, 'yasin ali', 'pakistan', 'karachi', 'syedyassin0316@gmail.com', 'yasin', 'qy0krfwGpHmzeds4bKOBP5DcMjXE2RIUoVCQxSaT3i987ZvL1g', NULL, '2022-02-20 23:06:42');

-- --------------------------------------------------------

--
-- Table structure for table `afa110_product`
--

CREATE TABLE `afa110_product` (
  `id` int(10) UNSIGNED NOT NULL,
  `brand_id` int(11) DEFAULT NULL,
  `create_date` varchar(100) DEFAULT NULL,
  `title` varchar(100) DEFAULT NULL,
  `slug` varchar(100) DEFAULT NULL,
  `part_number` varchar(20) DEFAULT NULL,
  `price` varchar(50) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `product_img` varchar(100) DEFAULT NULL,
  `views` int(11) DEFAULT NULL,
  `status` varchar(10) DEFAULT NULL,
  `meta_description` text DEFAULT NULL,
  `meta_keyword` varchar(100) DEFAULT NULL,
  `last_updated` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `afa110_product`
--

INSERT INTO `afa110_product` (`id`, `brand_id`, `create_date`, `title`, `slug`, `part_number`, `price`, `description`, `product_img`, `views`, `status`, `meta_description`, `meta_keyword`, `last_updated`) VALUES
(1, 1, '02/27/2022', 'Patek Philippe: Complicated Wrist Watches', 'patek-philippe-complicated-wrist-watches', 'B00K78PQWM', '58', 'Patek Philippe Chronograph Automatic Men\'s Wristwatch Brand Name:Patek Philippe Condition:Nearly Brand New and keep good working Gender: Men\'s Material:Stainless steel Features:Date and Chronograph Country:Switzerland Strap: Original Patek black cracodile strap Crystal: Sapphire crystal The watch comes with original Patek PHILIPPE Box and Booklet.\r\n', 'd3491084025e6505d527d4042e18e5cc.jpg', 211, 'DEACTIVE', 'Patek Philippe Chronograph Automatic Men\'s Wristwatch Brand Name:Patek Philippe Condition:Nearly Brand New and keep good working Gender: Men\'s Material:Stainless steel Features:Date and Chronograph Country:Switzerland Strap: Original Patek black cracodile strap Crystal: Sapphire crystal The watch comes with original Patek PHILIPPE Box and Booklet.\r\n', 'Patek Philippe,Watches,: Wrist ', '2022-03-01 23:44:17'),
(2, 1, '02/27/2022', 'Patek Philippe: Annual Calendar Moonphase Rose Gold Watch', 'patek-philippe-annual-calendar-moonphase-rose-gold-watch', '5396/1R-001', '69', 'Patek Philippe Annual Calendar Moonphase watch, 18kt rose gold case (38mm diameter) with transparent case back, 18kt rose gold bracelet with hidden folding', 'dfabceb08cfbef5e5051c0dc982ce750.jpg', 112, 'DEACTIVE', 'Patek Philippe Annual Calendar Moonphase watch, 18kt rose gold case (38mm diameter) with transparent case back, 18kt rose gold bracelet with hidden folding', 'Patek Philippe,Moonphase,Watch, Rose Gold ', '2022-03-01 23:40:22'),
(3, 1, '02/27/2022', 'Puccy 3 Pack Screen Protector Film, compatible with PATEK PHILIPPE Guard for  Smart watch', 'puccy-3-pack-screen-protector-film-compatible-with-patek-philippe-guard-for-smart-watch', '5297G', '89', 'Protects your device from hard hardness, abrasion, scratches, damage such as dropping, and collision.\r\nUsing a silicone adhesive that is easy to come off, airless processing eliminates air bubbles, and adsorption proceeds naturally.\r\nThe surface has a fingerprint-resistant oil-repellent coating, so you can wipe it off quickly with a light wipe.', '604924ca22e363e828730c74dba12ce5.jpg', 22, 'ACTIVE', 'Protects your device from hard hardness, abrasion, scratches, damage such as dropping, and collision.\r\n', 'Puccy ,Protector,watch', '2022-03-01 20:47:54'),
(4, 1, '02/27/2022', 'Patek Philippe Calatrava Pilot Travel Time', 'patek-philippe-calatrava-pilot-travel-time', '7234R', '99', '18kt rose gold case with a brown (calfskin) leather strap. Fixed 18kt rose gold bezel. Brown sunburst dial with luminous rose gold-tone spade-shaped hands and Arabic numeral hour markers.', '537680e4d3cefc7f5d9f4c428b713e40.jpg', 34, 'ACTIVE', '18kt rose gold case with a brown (calfskin) leather strap. Fixed 18kt rose gold bezel. Brown sunburst dial with luminous rose gold-tone spade-shaped hands and Arabic numeral hour markers.', 'Patek Philippe, Calatrava, Pilot Travel Time', '2022-03-01 20:47:58'),
(5, 1, '02/27/2022', 'Patek Philippe Calatrava Pilot Travel Time 18kt White Gold', 'patek-philippe-calatrava-pilot-travel-time-18kt-white-gold', '5524G-001', '78', '18kt white gold case with a brown calfskin leather strap. Fixed white 18kt white gold bezel. Blue varnished dial with luminous sword-shaped hands and Arabic numeral hour markers. Minute markers around the outer rim. Dial Type: Analog. Luminescent hands and markers. Date display at the 6 o\'clock position.', '627b7481457a0ea896d23a3c0a986d4c.jpg', 455, 'ACTIVE', '18kt white gold case with a brown calfskin leather strap. Fixed white 18kt white gold bezel. Blue varnished dial with luminous sword-shaped hands and Arabic numeral hour markers. Minute markers around the outer rim.', 'Patek Philippe,Calatrava Pilot,18kt White Gold', '2022-03-01 20:48:13'),
(6, 1, '02/27/2022', 'Puccy 3 Pack Tempered Glass Screen Protector Film', 'puccy-3-pack-tempered-glass-screen-protector-film', '5327R-001', '178', ' If bubbles are created in a dust-free environment, simply press the air bubbles and move them toward the edge of the screen.', '8a4c389b0c87787c777bb35c23dc6305.jpg', 422, 'ACTIVE', ' If bubbles are created in a dust-free environment, simply press the air bubbles and move them toward the edge of the screen.', 'Puccy,Tempered Glass,Screen Protector', '2022-03-01 20:49:07'),
(7, 2, '02/27/2022', 'Vacheron Constantin: Artists of Time Hardcover', 'vacheron-constantin-artists-of-time-hardcover', '2080202243', '199', 'This volume commemorates Vacheron Constantin’s uninterrupted 260-year history devoted to watchmaking excellence. ﻿Geneva-based Vacheron Constantin has maintained its reputation for producing exceptional timepieces.', '1f54c3497f04ade97911583c3ced9c9e.jpg', 221, NULL, 'This volume commemorates Vacheron Constantin’s uninterrupted 260-year history devoted to watchmaking excellence. ﻿Geneva-based', 'Vacheron ,Artists of Time,Hardcover', '2022-03-01 20:49:50'),
(8, 2, '02/27/2022', 'Vacheron Constantin Malte 18kt White Gold', 'vacheron-constantin-malte-18kt-white-gold', '82230/000G-9962', '145', 'Silver dial. 18kt white gold case with a black (alligator) leather band. Hand Wind movement. 30 meters / 100 feet water resistance. Fixed bezel. Tang clasp. Case size 47.61 mm x 36.70 mm x 9.25 mm. Vacheron Constantin 82230/000G-9962 Malte Watch.', 'f6f41e5be7c00160cdb040e0c6e6e1e2.jpg', 323, NULL, 'Silver dial. 18kt white gold case with a black (alligator) leather band. Hand Wind movement. 30 meters / 100 feet water resistance. Fixed bezel. Tang clasp. Case size 47.61 mm x 36.70 mm x 9.25 mm. Vacheron Constantin 82230/000G-9962 Malte Watch.', 'Vacheron Constantin,Malte 18kt White Gold,White Gold', '2022-03-01 20:49:55'),
(9, 2, '02/27/2022', 'Vacheron Constantin: Reference 57260 Hardcover', 'vacheron-constantin-reference-57260-hardcover', '57260 ', '189', 'Vacheron Constantin, preeminent watchmaker, celebrated its 260th anniversary in 2015.', 'c65f6ce6c68bca81cc736dcaf074537f.jpg', 34, NULL, 'Vacheron Constantin, preeminent watchmaker, celebrated its 260th anniversary in 2015.\r\n', 'Vacheron Constantin,Reference 57260 Hardcover,Hardcover', '2022-03-01 20:50:00'),
(10, 2, '02/27/2022', 'Vacheron Constantin Patrimony Mens Watch', 'vacheron-constantin-patrimony-mens-watch', '81180/000P-9539', '278', 'Slate Gray dial. White platinum case with a black (alligator) leather band. Hand Wind movement. 30 meters / 100 feet water resistance. Fixed bezel. Tang clasp. Case size 40 mm x 6.79 mm. Vacheron Constantin 81180/000P-9539 Patrimony Watch.', 'd53fff1a6bc2755814eba6ccb6698a35.jpg', 321, NULL, 'Slate Gray dial. White platinum case with a black (alligator) leather band. Hand Wind movement. 30 meters / 100 feet water resistance. Fixed bezel. Tang clasp. Case size 40 mm x 6.79 mm. Vacheron Constantin 81180/000P-9539 Patrimony Watch.', 'Vacheron Constantin,Mens Watch,Patrimony', '2022-03-01 20:50:51'),
(11, 2, '02/27/2022', 'Vacheron Constantin Patrimony Grand Taille White', 'vacheron-constantin-patrimony-grand-taille-white', '81180000G-9117', '389', 'Silver dial. 18kt white gold case with a black alligator leather band. Hand Wind movement. 30 meters / 100 feet water resistance. Fixed bezel. Tang clasp. Case size 40 mm x 6.7 mm. Vacheron Constantin 81180000G-9117 Patrimony Watch.', '2e2fe72a1e9556c31c1e38eccc08cf87.jpg', 1312, NULL, 'Silver dial. 18kt white gold case with a black alligator leather band. Hand Wind movement. 30 meters / 100 feet water resistance. Fixed bezel. Tang clasp. Case size 40 mm x 6.7 mm. Vacheron Constantin 81180000G-9117 Patrimony Watch.', 'Vacheron Constantin,Patrimony,Grand Taille White', '2022-03-01 20:50:55'),
(12, 2, '02/27/2022', 'Vacheron Constantin Patrimony Contemporaine Silver', 'vacheron-constantin-patrimony-contemporaine-silver', '85515CA1G-9841', '456', 'Silver dial. 18kt white gold case with a white gold-tone 18kt white gold band. Automatic movement. 30 meters / 100 feet water resistance. Fixed bezel. Hidden Fold Over clasp. Case size 36.5 mm x 9.15 mm. Vacheron Constantin 85515CA1G-9841 Patrimony Watch.', '3c811658ccc9cfff6361ee74ee92c6e5.jpg', 131, NULL, 'Silver dial. 18kt white gold case with a white gold-tone 18kt white gold band. Automatic movement. 30 meters / 100 feet water resistance. Fixed bezel. Hidden Fold Over clasp. Case size 36.5 mm x 9.15 mm. Vacheron Constantin 85515CA1G-9841 Patrimony Watch.', 'Vacheron Constantin,Patrimony ,Contemporaine Silver', '2022-03-01 20:51:02'),
(13, 2, '02/27/2022', 'Vacheron+Constantin Mens Watches Ultra-Thin Minimalist Waterproof', 'vacheronconstantin-mens-watches-ultra-thin-minimalist-waterproof', 'B07GB1R4FY', '278', 'Steel braided watchband adjustable and suitable for 99.99% wrists. (No hurt to body hairs on wrists)', '320616b3d70fb82086038b2dd67f5e8a.jpg', 32, NULL, 'Steel braided watchband adjustable and suitable for 99.99% wrists. (No hurt to body hairs on wrists)', 'Vacheron+Constantin,Mens,Waterproof', '2022-03-01 20:51:15'),
(14, 1, '02/27/2022', 'Patek Philippe: Annual Calendar', 'patek-philippe-annual-calendar', '5396/1R-001', '134', 'Patek Philippe Annual Calendar Moonphase watch, 18kt rose gold case (38mm diameter) with transparent case back, 18kt rose gold bracelet with hidden folding', 'fe7e927553bea6d30419885ab66db004.jpg', 343, 'ACTIVE', 'Patek Philippe Annual Calendar Moonphase watch, 18kt rose gold case (38mm diameter) with transparent case back, 18kt rose gold bracelet with hidden folding', 'Patek Philippe,Annual Calendar,men', '2022-03-01 20:49:19'),
(15, 3, '02/08/2022', 'audemars piguet Automatic Watch', 'audemars-piguet-automatic-watch', '98A227', '499', 'EXPRESS!!SHIPPED WITHIN MINUTES!! Bulova Mens Analogue Automatic Watch with Silicone Strap 98A227', '84040b1d555590da5eb901c86f8f6028.jpg', 566, 'DEACTIVE', 'EXPRESS!!SHIPPED WITHIN MINUTES!! Bulova Mens Analogue Automatic Watch with Silicone Strap 98A227', 'audemars piguet,Automatic Watch,men', '2022-03-01 20:51:22'),
(16, 3, '02/09/2022', 'audemars piguet  Bertucci A-4T Super Yankee Watch', 'audemars-piguet-bertucci-a-4t-super-yankee-watch', '5396/1R-001', '578', 'This band offers long lasting durability and comfort unmatched in the marketplace. Featuring military spec. nylon webbing, heavy-duty stitching, and solid stainless steel buckle and dual loop keepers.', '16407b6675face9da1b2e14cc1e3355a.jpg', 453, NULL, 'This band offers long lasting durability and comfort unmatched in the marketplace. Featuring military spec. nylon webbing, heavy-duty stitching, and solid stainless steel buckle and dual loop keepers.', 'Watch,audemars piguet ,men', '2022-03-01 20:52:46'),
(17, 3, '03/11/2022', 'Audemars Piguet Royal Oak Blue Dial Stainless', 'audemars-piguet-royal-oak-blue-dial-stainless', '15400ST', '678', 'Audemars Piguet Royal Oak Selfwinding with Blue Dial 41mm Stainless Steel Watch 15400ST.OO.1220ST.03', '3d8b21d3d1d40359aa1814e7e2f45a6b.jpg', 546, NULL, 'Audemars Piguet Royal Oak Selfwinding with Blue Dial 41mm Stainless Steel Watch 15400ST.OO.1220ST.03', 'Audemars Piguet,Royal,Stainless,men', '2022-03-01 20:52:49'),
(18, 3, '02/15/2022', 'audemars piguet watchesCasio G-Shock', 'audemars-piguet-watchescasio-g-shock', '2100', '789', 'This G-ShockI® watch features a round stainless steel case with a resin and carbon fiber overlay, adjustable resin band, traditional buckle closure, and red dial face.', '514b5021b7b8a6d7cabe33b7130aade9.jpg', 74, NULL, 'This G-ShockI® watch features a round stainless steel case with a resin and carbon fiber overlay, adjustable resin band, traditional buckle closure, and red dial face.\r\n', 'audemars piguet,G-Shock,watchesCasio', '2022-03-01 20:52:53'),
(19, 3, '02/01/2022', 'audemars piguet Polycarbonate Quartz Watch', 'audemars-piguet-polycarbonate-quartz-watch', 'GW0203G7', '815', 'Skeleton dial details keep this phoenix on the rise. This style features a nylon barrel shaped case with rose gold screw details and a blue multi-function dial and rose gold accents paired with a blue silicone strap.', 'b87f1ddc4479db608db3c3838b9774ae.jpg', 634, NULL, 'Skeleton dial details keep this phoenix on the rise. This style features a nylon barrel shaped case with rose gold screw details and a blue multi-function dial and rose gold accents paired with a blue silicone strap', 'audemars piguet,Quartz Watch,Polycarbonate', '2022-03-01 20:53:00'),
(20, 3, '03/04/2022', 'audemars piguet Crystal Accented Watch', 'audemars-piguet-crystal-accented-watch', '5297G', '999', 'Manufacturer’s warranty can be requested from customer service. Click here to make a request to customer service.', '1b4888ce8b1315c5cda4522396634636.jpg', 56, NULL, 'Manufacturer’s warranty can be requested from customer service. Click here to make a request to customer service.', 'audemars piguet,Crystal Accented Watch,Watch,men', '2022-03-01 20:53:05'),
(21, 3, '02/09/2022', 'audemars piguet watches Invicta Men\'s 8928 Pro', 'audemars-piguet-watches-invicta-mens-8928-pro', '8928 ', '1134', 'Bold styling combines with a classic design in this automatic watch #8928 from Invicta\'s Pro Diver collection. This sporty yet refined timepiece features a two-tone gold-plated and silver-tone stainless steel case.', 'f63e950ab97194ee3ae3c78cdcfb78d1.jpg', 8796, NULL, 'Bold styling combines with a classic design in this automatic watch #8928 from Invicta\'s Pro Diver collection. This sporty yet refined timepiece features a two-tone gold-plated and silver-tone stainless steel case.', 'audemars piguet,watches,Pro,men', '2022-03-01 20:54:16'),
(22, 4, '03/10/2022', 'Blancpain Villeret Complete Calendar 8 Days', 'blancpain-villeret-complete-calendar-8-days', '6639-3642-55', '1452', 'Blancpain Villeret 8 Day Complete Calendar (Quantieme Complet 8 Jours) watch, round 18kt red gold case (42mm diameter, 13.1mm thickness) with transparent caseback,', '6d3011160431942d3560345a2a0c8a55.jpg', 87, NULL, 'Blancpain Villeret 8 Day Complete Calendar (Quantieme Complet 8 Jours) watch, round 18kt red gold case (42mm diameter, 13.1mm thickness) with transparent caseback,', 'Blancpain Villeret,Complete Calendar,men', '2022-03-01 20:54:23'),
(23, 4, '02/09/2022', 'Blancpain Fifty Fathoms Bathyscaphe Automatic', 'blancpain-fifty-fathoms-bathyscaphe-automatic', '5000-1110-K52A', '1290', 'Meteor Grey dial enhanced by luminous grey hands. Silver-tone stainless steel case with a green sail canvas band. Automatic movement. 300 meters / 1000 feet water resistance. Uni-directional Rotating bezel. Scratch Resistant Sapphire crystal. Transparent caseback.', 'da66fab62f225e4c6247ab8ee374a421.jpg', 678, NULL, 'Meteor Grey dial enhanced by luminous grey hands. Silver-tone stainless steel case with a green sail canvas band. Automatic movement. 300 meters / 1000 feet water resistance. Uni-directional Rotating bezel. Scratch Resistant Sapphire crystal. Transparent caseback.', 'Blancpain,Automatic,Bathyscaphe ,men', '2022-03-01 20:54:31'),
(24, 4, '02/23/2022', 'Blancpain Chronograph Automatic Watch', 'blancpain-chronograph-automatic-watch', '6185.1127.55B', '1376', 'Stainless Steel Case & Bezel, Black Leather Strap, White Dial, Chronograph Feature, Date Display, Scratch Resitant Sapphire Crystal, Single Pusher Feature, Water Resistant up to 330FT', '7507d2dc894b44b6a6d0bb3d94d5a531.jpg', 45, NULL, 'Stainless Steel Case & Bezel, Black Leather Strap, White Dial, Chronograph Feature, Date Display, Scratch Resitant Sapphire Crystal, Single Pusher Feature, Water Resistant up to 330FT', 'Blancpain,Chronograph,Watch,Automatic,men', '2022-03-01 20:54:44'),
(25, 4, '03/07/2022', 'Blancpain Fifty Fathoms Bathyscaphe Meteor Grey Dial Chonograph', 'blancpain-fifty-fathoms-bathyscaphe-meteor-grey-dial-chonograph', '5200-1110-B52A', '1499', 'Meteor Grey dial enhanced by luminous silver-tone hands. Silver-tone stainless steel case with a black sail canvas band. Automatic movement. 300 meters / 1000 feet water resistance. Uni-directional Rotating Coin Edge bezel. Scratch Resistant Sapphire crystal. Transparent caseback. Tang clasp.', '17e0744114879c662461d79f71346e95.jpg', 35, NULL, 'Meteor Grey dial enhanced by luminous silver-tone hands. Silver-tone stainless steel case with a black sail canvas band. Automatic movement. 300 meters / 1000 feet water resistance. Uni-directional Rotating Coin Edge bezel. Scratch Resistant Sapphire crystal. Transparent caseback.', 'Blancpain,Bathyscaphe,Chonograph,men,watc', '2022-03-01 20:54:55'),
(26, 4, '04/13/2022', 'Blancpain Gold & Ceramic Fifty Fathoms Bathyscaphe Automatic Mens Watch', 'blancpain-gold-ceramic-fifty-fathoms-bathyscaphe-automatic-mens-watch', '52297G', '1589', 'Celebrating the Fifty Fathoms collection first introduced in 1953, The FIFTY FATHOMS BATHYSCAPHE is a re-edition of popular model from the late 1950\'s.', 'f66a62be4dbfdb8665e2a64fa309b377.jpg', 4543, NULL, 'Blancpain Gold & Ceramic Fifty Fathoms Bathyscaphe Automatic Mens Watch', 'Blancpain,Gold & Ceramic,Watch,Automatic', '2022-03-01 20:55:45'),
(27, 4, '02/01/2022', 'Blancpain Fifty Fathom Automatic Flyback Chronograph Watch', 'blancpain-fifty-fathom-automatic-flyback-chronograph-watch', '5085F.3630.52', '1690', '18K rose gold case, Black canvas strap, Tang buckle, Black PVD coated rotating bezel, Screw down crown and push buttons, Black dial, Luminous hands and hour markers, Date window at the 6 o\'clock position, Small seconds subdial.', '169b464c741bc7e8b909638a60225884.jpg', 23, NULL, '18K rose gold case, Black canvas strap, Tang buckle, Black PVD coated rotating bezel, Screw down crown and push buttons, Black dial, Luminous hands and hour markers, Date window at the 6 o\'clock position, Small seconds subdial.', 'Blancpain ,Automatic,Fifty Fathom,Watch', '2022-03-01 20:55:50'),
(28, 4, '01/14/2022', 'Blancpain Fifty Fathoms Complete Calendar Chrono Watch', 'blancpain-fifty-fathoms-complete-calendar-chrono-watch', '5066F-1140-52B', '1790', 'Blancpain Fifty Fathoms Complete Calendar Chrono Watch 5066F-1140-52B : Blancpain Fifty Fathoms Chronograph watch, round steel antimagnetic case (45mm diameter, 17.4mm thick), blue fabric strap, blue unidirectional bezel, blue dial with luminous hour markers and hands.', '16bfeb662f5f9039343ca859cd4ebce6.jpg', 123, NULL, 'Blancpain Fifty Fathoms Complete Calendar Chrono Watch 5066F-1140-52B : Blancpain Fifty Fathoms Chronograph watch, round steel antimagnetic case (45mm diameter, 17.4mm thick), blue fabric strap, blue unidirectional bezel, blue dial with luminous hour markers and hands.', 'Blancpain ,Fifty Fathoms,Watch,Chrono,men', '2022-03-01 20:55:55'),
(29, 5, '03/02/2022', 'Ulysse Nardin Men\'s Maxi Marine ', 'ulysse-nardin-mens-maxi-marine', '266-37LE/3B', '1834', '18K rose gold case, Transparent case back, Black rubber-type coated unidirectional rotating bezel, Screw down crown, Black rubber strap, Push button deployment clasp, Black surf dial, Luminous hands and hour markers, Small seconds dial.', '493de4354e7714a098cb6589cf0cbf1e.jpg', 443, NULL, '18K rose gold case, Transparent case back, Black rubber-type coated unidirectional rotating bezel, Screw down crown, Black rubber strap, Push button deployment clasp, Black surf dial, Luminous hands and hour markers, Small seconds dial.', 'Ulysse Nardin,Marine ,Men\'s,watch', '2022-03-01 20:56:00'),
(30, 5, '03/03/2022', 'Ulysse Nardin Executive Skeleton', 'ulysse-nardin-executive-skeleton', '5297G87', '1999', 'Ulysse Nardin Executive Skeleton Tourbillon 45mm Mens Watch', '23bcaf51c413194085226d67643a2fd8.jpg', 234, NULL, 'Ulysse Nardin Executive Skeleton Tourbillon 45mm Mens Watch\r\n', 'Ulysse Nardin,Skeleton,Executive Skeleton,watch,men', '2022-03-01 20:56:11'),
(31, 5, '02/01/2022', 'Ulysse Nardin Diver Hammerhead Shark', 'ulysse-nardin-diver-hammerhead-shark', '1503-170LE-3/93', '2789', 'The Ulysse Nardin Diver Chronograph Limited Edition Hammerhead Shark presents ultimate performance backup, water resistance to 300 meters, wrist stability, and ease of time tracking and measurement. Built with a studded blue rubber bezel and eye-catching red pushers the UN Diver Chronograph brings in unique, but functional shapes.', 'e093f9fa3e20b0e37b0c425a30b71a41.jpg', 123, NULL, 'The Ulysse Nardin Diver Chronograph Limited Edition Hammerhead Shark presents ultimate performance backup, water resistance to 300 meters, wrist stability, and ease of time tracking and measurement. Built with a studded blue rubber bezel and eye-catching red pushers the UN Diver Chronograph brings in unique, but functional shapes.', 'Ulysse Nardin,Diver,Ulysse Shark,Shark,Hammerhead', '2022-03-01 20:57:30'),
(32, 5, '02/21/2022', 'Ulysse Nardin Marine Regatta Stainless Steel/Rubber', 'ulysse-nardin-marine-regatta-stainless-steel-rubber', '1553-155-3/40', '2345', 'Self-winding movement with regatta chronograph, introduced at SIHH 2017. It is capable of a [max] 10 minute countdown before instantly starting a timing sequence. It consists of 650 pieces including 72 jewels. The regatta feature, located at the center of the dial, displays the countdown with an arrow pointing at the yellow minute scale from 0 to 10. Easily readable,', '6d3b54308f9d09e29c78bd049d987e04.jpg', 243, NULL, 'Self-winding movement with regatta chronograph, introduced at SIHH 2017. It is capable of a [max] 10 minute countdown before instantly starting a timing sequence. It consists of 650 pieces including 72 jewels. The regatta feature, located at the center of the dial, displays the countdown with an arrow pointing at the yellow minute scale from 0 to 10. Easily readable,', 'Ulysse Nardin,Steel/Rubber,Stainless,Marine', '2022-03-01 20:57:38'),
(33, 5, '02/10/2022', 'Ulysse Nardin Marine Chronometer Torpilleur Mens Watch', 'ulysse-nardin-marine-chronometer-torpilleur-mens-watch', '1183-310/43', '2789', 'Power reserve indicator located at the 12 o\'clock position. Date window at the 6 o\'clock position. Ulysse Nardin in-house manufactured Caliber UN-118 features: Beats at 28,800 vph. Contains 50 Jewels An approximate power reserve of 60 hours. The movement features a anchor escapement which is produced using DIAMonSIL.', 'd04da2f2d1654a93524e539ca4fc382d.jpg', 64, NULL, 'Power reserve indicator located at the 12 o\'clock position. Date window at the 6 o\'clock position. Ulysse Nardin in-house manufactured Caliber UN-118 features: Beats at 28,800 vph. Contains 50 Jewels An approximate power reserve of 60 hours. The movement features a anchor escapement which is produced using DIAMonSIL.', 'Ulysse Nardin ,Marine,Watch,Chronometer,men', '2022-03-01 20:57:42'),
(34, 5, '03/02/2022', 'Ulysse Nardin Titanium Blast Tourbillon 45mm Mens Watch', 'ulysse-nardin-titanium-blast-tourbillon-45mm-mens-watch', '1723-400-3A/03', '2189', 'Ulysse Nardin in-house caliber UN-172, beats at 18,000 vph (2.5Hz), contains 25 jewels & has an approximate power reserve 72 hours.', 'b260e2653999aff34766b60a2a43d3a1.jpg', 576, NULL, 'Ulysse Nardin in-house caliber UN-172, beats at 18,000 vph (2.5Hz), contains 25 jewels & has an approximate power reserve 72 hours.', 'Ulysse Nardin,Titanium,men,Tourbillon Watch', '2022-03-01 20:57:48'),
(35, 5, '01/14/2022', 'Ulysse Nardin Marine Torpilleur Limited Edition Automatic Chronometer Black Dial Men\'s Watch', 'ulysse-nardin-marine-torpilleur-limited-edition-automatic-chronometer-black-dial-mens-watch', '1183-320LE', '2999', 'Black dial enhanced by light green spade-shape hands. Black PVD stainless steel case with a green fabric band. Automatic movement. 50 meters / 165 feet water resistance. Fixed Coin Edge bezel. Scratch Resistant Sapphire crystal. Solid caseback. Tang clasp. Screw Down crown. Case size 44 mm. Band 20 mm x long. Ulysse Nardin 1183-320LE/BLACK Marine Torpilleur Watch.', '934bf590fa68d2da66063f722eb6936a.jpg', 768, 'ACTIVE', 'Black dial enhanced by light green spade-shape hands. Black PVD stainless steel case with a green fabric band. Automatic movement. 50 meters / 165 feet water resistance. Fixed Coin Edge bezel. Scratch Resistant Sapphire crystal. Solid caseback. Tang clasp. Screw Down crown. Case size 44 mm. Band 20 mm x long. Ulysse Nardin 1183-320LE/BLACK Marine Torpilleur Watch.', 'Ulysse Nardin,Watch,Black Dial Men\'s ,Marine Torpilleur Limited Edition Automatic', '2022-03-01 20:57:52');

-- --------------------------------------------------------

--
-- Table structure for table `afa110_product_gallery`
--

CREATE TABLE `afa110_product_gallery` (
  `id` int(10) UNSIGNED NOT NULL,
  `product_id` int(11) DEFAULT NULL,
  `create_date` int(100) DEFAULT NULL,
  `gallery_img` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `afa110_product_gallery`
--

INSERT INTO `afa110_product_gallery` (`id`, `product_id`, `create_date`, `gallery_img`) VALUES
(1, 1, 2, '4d70bf4b6a4ac1b8a789c285beece327.jpg'),
(2, 1, 2, '4d70bf4b6a4ac1b8a789c285beece327.jpg'),
(3, 1, 2, '4d70bf4b6a4ac1b8a789c285beece327.jpg'),
(4, 1, 2, '4d70bf4b6a4ac1b8a789c285beece327.jpg'),
(5, 1, 2, '4d70bf4b6a4ac1b8a789c285beece327.jpg'),
(6, 1, 2, '4d70bf4b6a4ac1b8a789c285beece327.jpg'),
(7, 1, 2, '4d70bf4b6a4ac1b8a789c285beece327.jpg'),
(8, 2, 1, 'c094a8b92e5494b1cfbcb2e638a8d996.jpg'),
(9, 2, 1, 'c094a8b92e5494b1cfbcb2e638a8d996.jpg'),
(10, 2, 1, 'c094a8b92e5494b1cfbcb2e638a8d996.jpg'),
(11, 2, 1, 'c094a8b92e5494b1cfbcb2e638a8d996.jpg'),
(12, 2, 1, 'c094a8b92e5494b1cfbcb2e638a8d996.jpg'),
(13, 2, 1, 'c094a8b92e5494b1cfbcb2e638a8d996.jpg'),
(14, 2, 1, 'c094a8b92e5494b1cfbcb2e638a8d996.jpg'),
(15, 3, 2, 'f23d58a80fbcf74911f82c4d0e27d964.jpg'),
(16, 3, 2, 'f23d58a80fbcf74911f82c4d0e27d964.jpg'),
(17, 3, 2, 'f23d58a80fbcf74911f82c4d0e27d964.jpg'),
(18, 3, 2, 'f23d58a80fbcf74911f82c4d0e27d964.jpg'),
(19, 3, 2, 'f23d58a80fbcf74911f82c4d0e27d964.jpg'),
(20, 3, 2, 'f23d58a80fbcf74911f82c4d0e27d964.jpg'),
(21, 3, 2, 'f23d58a80fbcf74911f82c4d0e27d964.jpg'),
(22, 4, 2, 'b3b81dc17350a0b2f116b261fdd54ef1.jpg'),
(23, 4, 2, 'b3b81dc17350a0b2f116b261fdd54ef1.jpg'),
(24, 4, 2, 'b3b81dc17350a0b2f116b261fdd54ef1.jpg'),
(25, 4, 2, 'b3b81dc17350a0b2f116b261fdd54ef1.jpg'),
(26, 4, 2, 'b3b81dc17350a0b2f116b261fdd54ef1.jpg'),
(27, 4, 2, 'b3b81dc17350a0b2f116b261fdd54ef1.jpg'),
(28, 4, 2, 'b3b81dc17350a0b2f116b261fdd54ef1.jpg'),
(29, 5, 2, '5706444c5050dfcb60fb31a8f0fed82e.jpg'),
(30, 5, 2, '5706444c5050dfcb60fb31a8f0fed82e.jpg'),
(31, 5, 2, '5706444c5050dfcb60fb31a8f0fed82e.jpg'),
(32, 5, 2, '5706444c5050dfcb60fb31a8f0fed82e.jpg'),
(33, 5, 2, '5706444c5050dfcb60fb31a8f0fed82e.jpg'),
(34, 5, 2, '5706444c5050dfcb60fb31a8f0fed82e.jpg'),
(35, 5, 2, '5706444c5050dfcb60fb31a8f0fed82e.jpg'),
(36, 6, 2, 'aecb56a301c4e78bcdd53d7171639b5b.jpg'),
(37, 6, 2, 'aecb56a301c4e78bcdd53d7171639b5b.jpg'),
(38, 6, 2, 'aecb56a301c4e78bcdd53d7171639b5b.jpg'),
(39, 6, 2, 'aecb56a301c4e78bcdd53d7171639b5b.jpg'),
(40, 6, 2, 'aecb56a301c4e78bcdd53d7171639b5b.jpg'),
(41, 6, 2, 'aecb56a301c4e78bcdd53d7171639b5b.jpg'),
(42, 6, 2, 'aecb56a301c4e78bcdd53d7171639b5b.jpg'),
(43, 14, 1, '07db9f816eb98349d8f2cbeeec452eff.jpg'),
(44, 14, 1, '07db9f816eb98349d8f2cbeeec452eff.jpg'),
(45, 14, 1, '07db9f816eb98349d8f2cbeeec452eff.jpg'),
(46, 14, 1, '07db9f816eb98349d8f2cbeeec452eff.jpg'),
(47, 14, 1, '07db9f816eb98349d8f2cbeeec452eff.jpg'),
(48, 14, 1, '07db9f816eb98349d8f2cbeeec452eff.jpg'),
(49, 14, 1, '07db9f816eb98349d8f2cbeeec452eff.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `afa110_product_review`
--

CREATE TABLE `afa110_product_review` (
  `id` int(10) UNSIGNED NOT NULL,
  `create_date` varchar(100) DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL,
  `name` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `comment` varchar(100) DEFAULT NULL,
  `status` varchar(10) DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `afa110_product_review`
--

INSERT INTO `afa110_product_review` (`id`, `create_date`, `product_id`, `name`, `email`, `comment`, `status`, `updated_at`) VALUES
(1, 'February 21 2017', 9, 'PrincessSabir', 'princesssabir1@gmail.com', '', 'ACTIVE', '2018-02-28 03:54:52'),
(2, 'February 21 2017', 1, 'asim', 'asim.saleem.memon124@gmail.com', '', 'ACTIVE', '2018-02-28 03:54:54'),
(3, 'February 21 2017', 1, ';lsvd,/.', 'amir.saleem.memon124@gmail.com', '', 'ACTIVE', '2018-02-28 03:54:55'),
(4, 'February 22 2017', 9, 'Ayaz Ahmed', 'ayzeetech@gmail.com', '', 'ACTIVE', '2018-02-28 03:54:55'),
(5, 'February 27 2018', 9, 'ayaz', 'ayzeetech@gmail.com', '', 'ACTIVE', '2018-02-28 03:54:56');

-- --------------------------------------------------------

--
-- Table structure for table `afa110_product_specification`
--

CREATE TABLE `afa110_product_specification` (
  `id` int(10) UNSIGNED NOT NULL,
  `product_id` int(11) DEFAULT NULL,
  `model_number` varchar(100) DEFAULT NULL,
  `model_year` varchar(100) DEFAULT NULL,
  `item_shape` varchar(100) DEFAULT NULL,
  `display_type` varchar(100) DEFAULT NULL,
  `case_material` varchar(100) DEFAULT NULL,
  `case_diameter` varchar(100) DEFAULT NULL,
  `case_thickness` varchar(100) DEFAULT NULL,
  `band_material` varchar(100) DEFAULT NULL,
  `band_size` varchar(100) DEFAULT NULL,
  `band_width` varchar(100) DEFAULT NULL,
  `band_color` varchar(100) DEFAULT NULL,
  `dial_color` varchar(100) DEFAULT NULL,
  `item_weight` varchar(100) DEFAULT NULL,
  `movement` varchar(100) DEFAULT NULL,
  `last_updated` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `afa110_product_specification`
--

INSERT INTO `afa110_product_specification` (`id`, `product_id`, `model_number`, `model_year`, `item_shape`, `display_type`, `case_material`, `case_diameter`, `case_thickness`, `band_material`, `band_size`, `band_width`, `band_color`, `dial_color`, `item_weight`, `movement`, `last_updated`) VALUES
(1, 1, 'NF-9110', '2020', 'Round', 'Analog', 'Metal', '48 millimeters', '14 millimeters', 'Leather', 'Men\'s Standard', '25 millimeters', 'Multicolor', 'Multiple', '3.12 Ounces', 'Quartz', '2022-02-28 03:34:34'),
(2, 2, '5396/1R-001', '2015', 'round', 'Analog', 'Stainless Steel', '34 millimeters', '10 millimeters', 'Rose Gold', 'Men\'s Standard', '20 millimeters', 'Rose Gold', 'Rose', '5.11 Ounces', 'Quartz', '2022-02-28 03:35:17'),
(3, 3, 'FS5661', '2019', 'Round', 'Analog', 'Stainless Steel', '42 millimeters', '9 millimeters', 'Leather', 'Mens Standard', '22 millimeters', 'Brown', 'Black', '4.16 Ounces', 'Quartz', '2022-02-28 03:36:26'),
(4, 4, 'GT567', '2019', 'Round', 'Analog', 'Stainless Steel', '40 millimeters', '10 millimeters', 'Leather', 'Mens Standard', '24 millimeters', 'Brown', 'Brown', '3.16 Ounces', 'Quartz', '2022-02-28 03:38:12'),
(5, 5, 'ND6897', '2016', 'Round', 'Analog', 'Stainless Steel', '40 millimeters', '10 millimeters', 'Leather', 'Mens Standard', '20 millimeters', 'Brown', 'Blue', '3.26 Ounces', 'Quartz', '2022-02-28 03:40:01'),
(6, 6, 'SJ7890', '2015', 'Round', 'Analog', 'Stainless Steel', '38 millimeters', '11 millimeters', 'Leather', 'Mens Standard', '21 millimeters', 'White', 'Black', '3.69 Ounces', 'Quartz', '2022-02-28 03:45:42'),
(7, 7, 'JG78971', '2017', 'Round', 'Analog', 'Stainless Steel', '28 millimeters', '15 millimeters', 'Leather', 'Mens Standard', '15 millimeters', 'Silver', 'White', '2.69 Ounces', 'Quartz', '2022-02-28 03:43:36'),
(8, 8, 'KU7899', '2022', 'Tonneau', 'Analog', 'Stainless Steel', '48 millimeters', '14 millimeters', 'Leather', 'Mens Standard', '25 millimeters', 'White', 'White', '3.69 Ounces', 'Mechanical Hand Wind', '2022-02-28 03:46:28'),
(9, 9, 'KI7897', '2021', 'Round', 'Analog', 'Stainless Steel', '30 millimeters', '10 millimeters', 'Leather', 'Mens Standard', '15 millimeters', 'Black', 'White', '1.69 Ounces', 'Quartz', '2022-02-28 03:46:58'),
(10, 10, 'YD789', '2016', 'Round', 'Analog', 'Stainless Steel', '32 millimeters', '12 millimeters', 'Leather', 'Mens Standard', '15 millimeters', 'White', 'Black', '2.5 Ounces', 'Quartz', '2022-02-28 03:50:03'),
(11, 11, 'FT8909', '2019', 'Round', 'Analog', 'Stainless Steel', '34 millimeters', '11 millimeters', 'Leather', 'Mens Standard', '12 millimeters', 'White', 'White', '2.5 Ounces', 'Quartz', '2022-02-28 03:52:42'),
(12, 12, '85515CA1G-9841\r\n\r\n', '2019', 'Round', 'Analog', '36.5 mm\r\n', '36.5 millimeters\r\n', '9.15\r\n', '18kt White Gold\r\n', 'Mens Standard', '15 millimeters', 'White Gold-tone\r\n', 'White', '5.5 Ounces', 'Automatic\r\n', '2022-02-28 03:53:13'),
(13, 333, 'LG9915A\r\n', '2019', 'Round', 'Analog', 'Stainless Steel\r\n', '1.65 inches\r\n', '0.31\r\n', 'Stainless Steel\r\n', 'Mens Standard', '18 millimeters', 'Black', 'Black', '2.5 Ounces', 'Quartz', '2022-02-28 03:53:35'),
(14, 14, '5396/1R-001', '2015', 'round', 'Analog', 'Stainless Steel', '34 millimeters', '10 millimeters', 'Rose Gold', 'Men\'s Standard', '20 millimeters', 'Rose Gold', 'Rose', '5.12 Ounces', 'Quartz', '2022-02-28 03:56:30'),
(15, 15, '98A227\r\n', '2020', 'Round', 'Analog', 'Stainless Steel', '32 millimeters', '12 millimeters', 'Stainless Steel', 'Mens Standard', '18 millimeters', 'Rose', 'Blue', '5.9 Ounces', 'Quartz', '2022-02-28 03:59:38'),
(16, 16, '12022\r\n', '2016', 'Round', 'Analog', 'Stainless Steel', '30 millimeters', '10 millimeters', 'Leather', 'Mens Standard', '18 millimeters', 'White', 'Black', '3.6 Ounces', 'Quartz', '2022-02-28 04:11:59'),
(17, 17, 'Royal Oak\r\n', '2021', 'Octagonal\r\n', 'Analog', 'Stainless Steel', '30 millimeters', '12 millimeters', 'Stainless Steel', 'Mens Standard', '20 millimeters', 'Silver', 'Blue', '6.2 Ounces', 'Quartz', '2022-02-28 04:11:55'),
(18, 18, 'GA-2100-1AJF\r\n', '2021', 'Round', 'Analog and digital\r\n', 'Stainless Steel', '40 millimeters', '20 millimeters', 'Plastic\r\n', 'Mens Standard', '25 millimeters', 'Bliack', 'Black', '5.3 Ounces', 'Quartz', '2022-02-28 04:15:37'),
(19, 19, 'JH-9998-1AJF', '2021', 'Round', 'Analog and digital', 'Stainless Steel', '40 millimeters', '22 millimeters', 'Plastic\r\n', 'Mens Standard', '25 millimeters', 'Blue', 'Blue', '4.3 Ounces', 'Quartz', '2022-02-28 04:40:03'),
(20, 20, 'JH-9999-1AJF', '2021', 'Round', 'Analog and digital', 'Stainless Steel', '40 millimeters', '22 millimeters', 'Plastic', 'Mens Standard', '25 millimeters', 'White', 'White', '4.2 Ounces', 'Quartz', '2022-02-28 04:41:03'),
(21, 21, '8928\r\n', '2016', 'Round', 'Analog', 'Stainless Steel', '35 millimeters', '13 millimeters', 'Stainless Steel', 'Mens Standard', '28 millimeters', 'Silver', 'Blue', '6.5 Ounces', 'Japanese Automatic\r\n', '2022-02-28 04:46:29'),
(22, 22, '8928', '2020', 'Round', 'Analog', 'Stainless Steel', '30 millimeters', '15 millimeters', 'Leather', 'Mens Standard', '20 millimeters', 'Rose', 'White', '3.0 Ounces', 'Automatic\r\n', '2022-02-28 04:49:05'),
(23, 23, 'KI7897', '2022', 'Round', 'Analog', 'Stainless Steel', '30 millimeters', '15 millimeters', 'Leather', 'Mens Standard', '20 millimeters', 'White', 'Black', '3.0 Ounces', 'Automatic', '2022-02-28 04:50:30'),
(24, 24, 'GJ7891', '2019', 'Round', 'Analog', 'Stainless Steel', '30 millimeters', '15 millimeters', 'Leather', 'Mens Standard', '20 millimeters', 'White', 'White', '3.0 Ounces', 'Automatic', '2022-02-28 04:52:04'),
(25, 25, 'LO890', '2014', 'Round', 'Analog', 'Stainless Steel', '30 millimeters', '15 millimeters', 'Leather', 'Mens Standard', '20 millimeters', 'White', 'Black', '3.0 Ounces', 'Automatic', '2022-02-28 04:54:01'),
(26, 26, 'BH890', '2022', 'Round', 'Analog', 'Stainless Steel', '30 millimeters', '15 millimeters', 'Leather', 'Mens Standard', '20 millimeters', 'Rose', 'Black', '3.0 Ounces', 'Automatic', '2022-02-28 04:54:46'),
(27, 27, 'MN899', '2022', 'Round', 'Analog', 'Stainless Steel', '30 millimeters', '15 millimeters', 'Leather', 'Mens Standard', '20 millimeters', 'Rose', 'Black', '3.0 Ounces', 'Automatic', '2022-02-28 04:55:45'),
(28, 28, 'CK894', '2019', 'Round', 'Analog', 'Stainless Steel', '30 millimeters', '15 millimeters', 'Leather', 'Mens Standard', '20 millimeters', 'White', 'Blue', '3.0 Ounces', 'Automatic', '2022-02-28 04:56:26'),
(29, 29, 'CK7899', '2022', 'Round', 'Analog', 'Stainless Steel', '30 millimeters', '15 millimeters', 'Plastic', 'Mens Standard', '20 millimeters', 'Golden', 'Black', '3.0 Ounces', 'Automatic', '2022-02-28 04:57:51'),
(30, 30, 'Ck8901', '2016', 'Round', 'Analog', 'Stainless Steel', '30 millimeters', '15 millimeters', 'Plastic', 'Mens Standard', '20 millimeters', 'Red', 'White', '3.0 Ounces', 'Automatic', '2022-02-28 05:00:00'),
(31, 31, 'Ck8901', '2016', 'Round', 'Analog', 'Stainless Steel', '30 millimeters', '15 millimeters', 'Plastic', 'Mens Standard', '20 millimeters', 'Blue', 'Blue', '3.0 Ounces', 'Automatic', '2022-02-28 05:00:12'),
(32, 32, 'Ck8901', '2016', 'Round', 'Analog', 'Stainless Steel', '30 millimeters', '15 millimeters', 'Plastic', 'Mens Standard', '20 millimeters', 'Black', 'White', '3.0 Ounces', 'Automatic', '2022-02-28 05:00:52'),
(33, 33, 'Ck8901', '2016', 'Round', 'Analog', 'Stainless Steel', '30 millimeters', '15 millimeters', 'Leather', 'Mens Standard', '20 millimeters', 'Blue', 'blue', '3.0 Ounces', 'Automatic', '2022-02-28 05:02:03'),
(34, 34, 'Ck8901', '2016', 'Round', 'Analog', 'Stainless Steel', '30 millimeters', '15 millimeters', 'Plastic', 'Mens Standard', '20 millimeters', 'Blue', 'White', '3.0 Ounces', 'Automatic', '2022-02-28 05:01:26'),
(35, 35, 'Ck8901', '2016', 'Round', 'Analog', 'Stainless Steel', '30 millimeters', '15 millimeters', 'Leather', 'Mens Standard', '20 millimeters', 'Green', 'Black', '3.0 Ounces', 'Automatic', '2022-02-28 05:02:07');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `afa110_brand`
--
ALTER TABLE `afa110_brand`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `afa110_media`
--
ALTER TABLE `afa110_media`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `afa110_member`
--
ALTER TABLE `afa110_member`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `afa110_product`
--
ALTER TABLE `afa110_product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `afa110_product_gallery`
--
ALTER TABLE `afa110_product_gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `afa110_product_review`
--
ALTER TABLE `afa110_product_review`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `afa110_product_specification`
--
ALTER TABLE `afa110_product_specification`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `afa110_brand`
--
ALTER TABLE `afa110_brand`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `afa110_media`
--
ALTER TABLE `afa110_media`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `afa110_member`
--
ALTER TABLE `afa110_member`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `afa110_product`
--
ALTER TABLE `afa110_product`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `afa110_product_gallery`
--
ALTER TABLE `afa110_product_gallery`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `afa110_product_review`
--
ALTER TABLE `afa110_product_review`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `afa110_product_specification`
--
ALTER TABLE `afa110_product_specification`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
