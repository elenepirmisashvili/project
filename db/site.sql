-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 01, 2020 at 02:48 AM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `site`
--

-- --------------------------------------------------------

--
-- Table structure for table `fastfood`
--

DROP TABLE IF EXISTS `fastfood`;
CREATE TABLE IF NOT EXISTS `fastfood` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `info` varchar(999) NOT NULL,
  `images` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `fastfood`
--

INSERT INTO `fastfood` (`id`, `name`, `info`, `images`) VALUES
(1, 'McDonald\'s', 'Fast food restaurant<br><br>\r\nWorking hours: 24/24<br><br>\r\nAddress: Tvaltchrelidze Street 2 \r\n               In Galleria Tbilisi\r\n                26 May Square<br><br>\r\nRating  : 4.7/5<br><br>\r\nOffer: <br><br>\r\nBurgers, French fries, Salads, Vegetarian food, Desserts and more<br><br>\r\nServices: <br><br>\r\nOutdoor siting, Mobile offers, Wifi, Self order Kiosk , Table service<br><br>\r\n', '1.jpg'),
(2, 'Wendy\'s', 'Fast food restaurant<br><br>\r\nWorking hours: 12:00PM-12:00AM<br><br>\r\nAddress: Shota Rustaveli Ave 31\r\n               Viktore DOlidze St 26<br><br>\r\nRating  : 4.6/5<br><br>\r\nOffer: <br><br>\r\nFrench fries, Soft drinks, Burgers, Salads, Family box and more<br><br>\r\n\r\nServices: <br><br>\r\nOutdoor siting, Wifi, Self order, Table service<br><br>\r\n', '2.jpg'),
(3, 'Burger King', 'Fast food restaurant<br><br>\r\nWorking hours: 12:00PM-10:00PM<br><br>\r\nAddress: In Tbilisi Mall\r\n               In Galleria Tbilisi<br><br>\r\nRating  : 4.4/5<br><br>\r\nOffer: <br><br>\r\nBurgers, dessert, salads, hot dogs and more<br><br>\r\nServices: <br><br>\r\n Wifi, Self order, Table service, Takeaway<br><br>\r\n', '3.jpg'),
(4, 'Dunkin\' Donuts', 'Working hours: 08:00PM-10:00PM<br><br>\r\nAddress: In Tbilisi Mall\r\n               In Galleria Tbilisi\r\n               Freedom Square  \r\n               Alexander Kazbegi Ave, Tbilisi<br><br>\r\nRating  : 4.5/5<br><br>\r\nOffer: <br><br>\r\nBurgers, dessert, salads, hot dogs and more<br><br>\r\nServices: <br><br>\r\n Wifi, Self order, Table service, Takeaway<br><br>\r\n', '4.jpg'),
(5, 'KFC', 'Fast food restaurant<br><br>\r\nWorking hours: 12:00PM-10:00PM<br><br>\r\nAddress: In Tbilisi Mall\r\n               In Galleria Tbilisi\r\n               Navtlugi street 8a, Tbilisi 0190\r\n               5 Omar Khizanishvili St, Tbilisi        <br><br>         \r\nRating  : 4.8/5<br><br>\r\nOffer: <br><br>\r\nBurgers, dessert, salads, hot dogs and more<br><br>\r\nServices: <br><br>\r\n Wifi, Self order, Table service, Takeaway<br><br>\r\n', '5.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `image`
--

DROP TABLE IF EXISTS `image`;
CREATE TABLE IF NOT EXISTS `image` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `file` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `info`
--

DROP TABLE IF EXISTS `info`;
CREATE TABLE IF NOT EXISTS `info` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `info` varchar(999) NOT NULL,
  `images` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `info`
--

INSERT INTO `info` (`id`, `name`, `info`, `images`) VALUES
(1, '144 stairs cafe ', 'Working hours :11:00 AM - 03:00 AM <br><br>\r\nLocation :Betlemi ,St.27 ,Georgia<br><br>\r\nRating : 4.6/5 (300 review) <br><br>\r\nCuisine<br><br>\r\nCafe, Bar, European<br><br>\r\nSpecial offers: <br><br>\r\nVegetarian cuisine<br><br>\r\nAdvantages: <br><br>\r\nspirits (cocktails), serving. <br><br>\r\n', '1.jpg'),
(2, 'Strada', ' Working hours: 11:00 AM - 12:00 AM<br><br>\r\nLocation :Tbilisi, Sandro Eulis St.7<br><br>\r\nRating : 4.2/5 (484 review) <br><br>\r\nCuisine<br><br>\r\nAmerican and Asian. <br><br>\r\n created by the international team of  chefs from New York and London. <br><br>\r\nSuggestions: <br><br>\r\nA variety of cuisine, exotic drinks, cozy atmosphere<br><br>\r\n', '2.jpg'),
(3, 'Stamba', 'Working hours 07:00-2:00<br><br>\r\nLocation: Tbilisi, Merab Kostavas st.14 <br><br>\r\nPrice range :5-200 gel<br><br>\r\nRating 4.6/5 (570 review) <br><br>\r\nCuisine<br><br>\r\nAsian, American, Georgian modern dishes, alcoholic beverages, <br><br>\r\nSuggestions<br><br>\r\nVeterinary dishes and desserts, porch<br><br>\r\n', '3.jpg'),
(4, 'Iveria Terrace', 'Iveria Terrace\r\nCafe<br><br>\r\nWorking hours: 24/7<br><br>\r\nLocation: Rose Revolution Square 1<br><br>\r\nPrice range: 5-250 GEL<br><br>\r\nRating 4.6 / 5 (from 1850 users) <br><br>\r\nCuisine: <br><br>\r\nGeorgian modern dishes, alcoholic beverages, various dishes from different <br><br>\r\nparts of the world. <br><br>\r\n\r\n', '4.jpg'),
(5, 'Gala', 'Cafe<br><br>\r\nWorking hours: 08: 00-00: 00<br><br>\r\nLocation: 1 Galaktion Tabidze Street<br><br>\r\nPrice range: 12-200 GEL<br><br>\r\nRating 4.8 / 5 (700 review) <br><br>\r\nCuisine<br><br>\r\nGeorgian modern dishes, alcoholic beverages, <br><br>\r\nSuggestions<br><br>\r\nExotic desserts, porch<br><br>\r\n', '5.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `relax`
--

DROP TABLE IF EXISTS `relax`;
CREATE TABLE IF NOT EXISTS `relax` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `info` varchar(999) NOT NULL,
  `images` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `relax`
--

INSERT INTO `relax` (`id`, `name`, `info`, `images`) VALUES
(1, 'Vake Park', 'Address: 76 Ilia Chavchavadze Avenue, Tbilisi<br><br>\r\nOpened: 1946<br><br>\r\nArea: 200 ha<br><br>\r\nHours:  Open 24 hours<br><br>\r\nArchitectural style: Stalinist architecture<br><br>\r\nAbout : <br><br>\r\nVake Park is a public park in Tbilisi. World War II Memorial sits at the top of the hill in the park.\r\nThe special charm of Vake Park is added by the red sand, which covers the roads.\r\nThe children\'s park, open-air cinema, cafe-bars and restaurant are located in Vake Park. In the south-west, the park ends with Mikheil Meskhi Stadium\r\n', '1.jpg'),
(2, 'Turtle Lake', 'Location: Outskirts of Tbilisi<br><br>\r\nPrimary inflows: Varazi, Khevi<br><br>\r\nAbout: <br><br><br><br>\r\nThe Turtle Lake area is designed as a recreational zone and is frequented by the <br><br>\r\nTbilisians on weekends. It is also a place where festivals and concerts are held.  Turtle Lake is located on the<br><br> \r\nwooded northern slope of Mtatsminda Mount.\r\n', '2.jpg'),
(3, 'National Botanical Garden of Georgia', 'Address: 12 Bambis Rigi Street, Tbilisi<br><br>\r\nAbout: <br><br>\r\nFormer Royal Garden.Its history spans more than three centuries. The Botanical<br><br>\r\n Garden presents rich collections of flora of Georgia and different regions of the world,<br><br>\r\n also tropical orangery and plants included in the Red Book are preserved in the park.<br><br><br><br><br><br><br><br>\r\n', '3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `restaurant`
--

DROP TABLE IF EXISTS `restaurant`;
CREATE TABLE IF NOT EXISTS `restaurant` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `info` varchar(999) NOT NULL,
  `images` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `restaurant`
--

INSERT INTO `restaurant` (`id`, `name`, `info`, `images`) VALUES
(1, 'Bread House', 'Restaurant<br><br>\r\nWorking hours: 12:00 PM -02: 00AM<br><br>\r\nLocation Gorgasali Street 7<br><br>\r\nPrice range: 5-200<br><br>\r\nRating 4.3 / 5 (from 510 users) <br><br>\r\nCuisine: <br><br>\r\nGeorgian traditional<br><br>\r\nEvery evening Georgian urban music sounds live. Here, long Kakhetian shot and round thin Madauri are baked in front of your eyes, Lechkhumi beans and khachapuri are prepared in the bakery\r\n', '1.jpg'),
(2, 'Black Lion', 'Working hours: 12:00 PM -02: 00AM<br><br>\r\nLocation Kvlividze Street 30<br><br>\r\nPrice range: 10-200 gel<br><br>\r\nRating 4.5 / 5 (from 710 users) <br><br>\r\nCuisine:\r\nGeorgian traditional<br><br>\r\nAbout<br><br>\r\n In an old, Tbilisi-style house with a large yard, you will be treated to delicious, familiar and at the same time \r\ndifferent dishes - khachapurito, mchadukes, green ghomi elarji, mchadi sandwich, gomi ... \r\nBusiness, friendly or family gatherings, cupcakes, waiting for the goblins, telling the news of the day, week, \r\n month, and kissing the cheeks - this is our daily routine for 6 years, which you should definitely join.\r\n', '2.jpg'),
(3, 'In the shadow of Metekhi', 'In the shadow of Metekhi\r\nRestaurant\r\nWorking hours: 12:00 PM -032: 00AM<br><br>\r\nLocation 29 Ketevan Tsamebuli Street<br><br>\r\nPrice range: 5-200 gel<br><br>\r\nRating 4.8 / 5 (from 510 users) <br><br>\r\nCuisine: <br><br>\r\nGeorgian traditional<br><br>\r\nAbout<br>\r\nWe offer a cozy atmosphere and delicious dishes. Every day our guests can enjoy national songs and dances, and every Friday the singer waiters will take care of your elevated mood. Guests can bake Georgian bread themselves if they wish. From our beautiful terrace you can enjoy the stunning view of old Tbilisi\r\n', '3.jpg'),
(4, 'Babilo', 'Restaurant<br><br>\r\nWorking hours: 10:00 PM -01: 00AM<br><br>\r\nLocation 36 Akaki Beliashvili St, Tbilisi<br><br>\r\nPrice range: 10-200 gel<br><br>\r\nRating 4.6  / 5 (from 667 users) <br><br>\r\nCuisine: <br><br>\r\nGeorgian traditional<br><br>\r\nAbout<br><br>\r\nBabilo Music Hall is a premium class restaurant in Georgia that has a music hall with full staging effects. Apart from the regular performance schedule, MICE organisers can arrange customised gala performance or ballroom dancing with live-band and singers.\r\n', '4.jpg'),
(5, 'Tavaduri', 'Restaurant<br><br>\r\nWorking hours: 10:00 PM -02: 00AM<br><br>\r\nLocation Vladimer Maikovski Street<br><br>\r\nPrice range: 10-300 gel<br><br>\r\nRating 4.6  / 5 (from 655 users) <br><br>\r\nCuisine: <br><br>\r\nGeorgian traditional<br><br>\r\nAbout<br><br>\r\nWe offer a cozy atmosphere and delicious dishes. Every day our guests can enjoy songs and dances.\r\n', '5.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `passwordrepeat` varchar(191) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
