-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 07, 2024 at 03:23 PM
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
-- Database: `hotel`
--

-- --------------------------------------------------------

--
-- Table structure for table `aadmin`
--

CREATE TABLE `aadmin` (
  `adminid` int(11) NOT NULL,
  `adminname` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `aadmin`
--

INSERT INTO `aadmin` (`adminid`, `adminname`, `password`) VALUES
(111, 'Admin', 'admin'),
(123, 'The Spice House Owner', '123');

-- --------------------------------------------------------

--
-- Table structure for table `addcart`
--

CREATE TABLE `addcart` (
  `id` int(11) NOT NULL,
  `p_id` bigint(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `price` bigint(11) NOT NULL,
  `qty` bigint(11) NOT NULL,
  `total` bigint(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `addtable`
--

CREATE TABLE `addtable` (
  `id` int(11) NOT NULL,
  `tableno` int(11) NOT NULL,
  `tabletype` varchar(50) NOT NULL,
  `price` int(11) NOT NULL,
  `detail` varchar(255) NOT NULL,
  `images` varchar(255) NOT NULL,
  `capacity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `addtable`
--

INSERT INTO `addtable` (`id`, `tableno`, `tabletype`, `price`, `detail`, `images`, `capacity`) VALUES
(5, 1, 'Birthday', 1000, 'This table is perfect for intimate gathering.', 'table-5.jpg', 7),
(6, 2, 'Birthday', 1200, 'This table is perfect for small celebrations.', 'table-4.jpeg', 7),
(7, 3, 'Outdoor', 1100, 'This table offers the perfect setting for enjoying delicious foods under the open sky. ', 'table-1.jpg', 7),
(8, 4, 'Anniversary', 1250, 'You create new chapters in the story of your love.', 'a_tbl1.jpg', 4),
(9, 5, 'Candlelight', 1050, 'Create memories to last a lifetime.', 'c_tbl1.jpg', 2),
(10, 6, 'Formal', 1250, 'The hosting business dinners or celebratory events.', 'f_tbl6.webp', 4),
(11, 7, 'Candlelight', 1299, 'Ready for romantic occasions and special celebrations.', 'c_tbl5.avif', 2),
(12, 8, 'Formal', 1500, 'This table sets the stage for memorable moments and refined conversations.', 'f_tbl5.webp', 6),
(13, 9, 'Outdoor', 1999, 'Adventure awaits in the great outdoors.', 'o_tbl6.webp', 3),
(14, 10, 'Indoor', 999, 'Creating memories over a meal.', 'i_tbl6.jpg', 5),
(15, 11, 'Outdoor', 1299, 'The best discussions happen around a outdoor table.', 'o_tbl2.webp', 6),
(16, 12, 'Anniversary', 1399, 'Hope you find time to look back on all your sweet memories together.', 'table-2.jpeg', 2),
(17, 13, 'Indoor', 1600, 'Over happy place, wrapped in indoor table.', 'i_tbl1.jpg', 5),
(18, 14, 'Candlelight', 3999, 'A candlelite dinner with your favorite person.', 'c_tbl6.jpg', 2),
(19, 15, 'Formal', 2999, 'Can be used to small meeting with event.', 'f_tbl1.jpeg', 7),
(20, 16, 'Birthday', 2999, 'Enjoying your b-day party.', 'table-2.jpg', 5),
(21, 17, 'Anniversary', 1999, 'The memories crafted to ensure your special day.', 'a_tbl4.jpg', 6),
(22, 18, 'Indoor', 999, 'Indoor table beckons you to savor every moment in style.', 'i_tbl3.jpg', 7),
(23, 19, 'Birthday', 1500, 'Enjoying the your day with happiness and joy.', 'table-3.jpg', 3),
(24, 20, 'Outdoor', 2999, 'This table offers the perfect setting for enjoying delicious foods under the open sky.', 'table-3.webp', 5),
(25, 21, 'Indoor', 3000, 'Creating memories over a restaurant.', 'i_tbl4.webp', 6),
(27, 23, 'Candlelight', 1399, 'Dining by the light of candles with some one special', 'c_tbl4.webp', 2);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `categories_id` int(11) NOT NULL,
  `categories_title` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`categories_id`, `categories_title`) VALUES
(1, 'Kathiyawadi'),
(2, 'Rajasthani '),
(3, 'Punjabi'),
(4, 'South Indian'),
(5, 'Tava'),
(6, 'Desserts'),
(8, 'Drinks');

-- --------------------------------------------------------

--
-- Table structure for table `checkout`
--

CREATE TABLE `checkout` (
  `id` bigint(11) NOT NULL,
  `p_id` bigint(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `mobile` bigint(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `location` text NOT NULL,
  `dateandtime` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `price` int(100) NOT NULL,
  `qty` int(100) NOT NULL,
  `total` int(100) NOT NULL,
  `image` text NOT NULL,
  `status` varchar(50) DEFAULT 'Pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `checkout`
--

INSERT INTO `checkout` (`id`, `p_id`, `user_name`, `name`, `mobile`, `email`, `location`, `dateandtime`, `price`, `qty`, `total`, `image`, `status`) VALUES
(2, 65, 'user11', 'user', 9874563210, 'user11@gmail.com', 'surat', '2024-04-03 18:20:31', 25, 5, 125, 'mimg/khattu athanu.jpg', 'Pending'),
(3, 52, 'mia_j00', 'miajohn', 9614700214, 'miajohn00@gmail.com', 'Apple Plazza,   Udaipur,	Rajasthan', '2024-04-04 06:59:53', 210, 2, 420, 'mimg/chocolate brownie.jpg', 'Pending'),
(4, 57, 'herry_01', 'herry', 7456882201, 'herry_01@gmail.com', 'Jinaklpuri, Udaipur, Rajasthan', '2024-04-04 07:16:09', 210, 3, 630, 'mimg/mango ice.jpeg', 'Pending'),
(5, 69, 'herry_01', 'herry', 7456882201, 'herry_01@gmail.com', 'Jinaklpuri, Udaipur, Rajasthan', '2024-04-04 07:16:09', 190, 1, 190, 'mimg/pizza dhosa.jpeg', 'Pending'),
(6, 60, 'herry_01', 'herry', 7456882201, 'herry_01@gmail.com', 'Jinaklpuri, Udaipur, Rajasthan', '2024-04-04 07:16:09', 210, 2, 420, 'mimg/jini role dhosa.jpeg', 'Pending'),
(7, 58, 'freya11', 'ferya', 6102145879, 'freyarajai@gmail.com', 'Plus Point, Ahmedabad, Gujrat', '2024-04-04 07:25:48', 72, 8, 576, 'mimg/Pyaaz Ki Kachori.jpg', 'Pending'),
(8, 53, 'freya11', 'ferya', 6102145879, 'freyarajai@gmail.com', 'Plus Point, Ahmedabad, Gujrat', '2024-04-04 07:25:48', 25, 5, 125, 'mimg/Aam Ki Launji.jpg', 'Pending'),
(9, 58, 'freya11', 'ferya', 6102145879, 'freyarajai@gmail.com', 'Plus Point, Ahmedabad, Gujrat', '2024-04-04 07:25:48', 72, 5, 360, 'mimg/Pyaaz Ki Kachori.jpg', 'Pending'),
(10, 67, 'freya11', 'ferya', 6102145879, 'freyarajai@gmail.com', 'Plus Point, Ahmedabad, Gujrat', '2024-04-04 07:25:48', 270, 5, 1350, 'mimg/Malai Ghevar.jpg', 'Pending'),
(14, 49, 'Olivia_1', 'olivia', 6578410230, 'Olivia_1@gmail.com', 'Krishna Nagar, Surat, Gujrat', '2024-04-04 07:28:40', 90, 2, 180, 'mimg/kaju gathiya.jpg', 'Pending'),
(15, 48, 'Olivia_1', 'olivia', 6578410230, 'Olivia_1@gmail.com', 'Krishna Nagar, Surat, Gujrat', '2024-04-04 07:28:40', 35, 3, 105, 'mimg/dahi tikhari.jpg', 'Pending'),
(16, 61, 'Olivia_1', 'olivia', 6578410230, 'Olivia_1@gmail.com', 'Krishna Nagar, Surat, Gujrat', '2024-04-04 07:28:40', 35, 5, 175, 'mimg/rotlo.jpg', 'Pending'),
(17, 76, 'peri0101', 'peri', 6358974562, 'peri0101@gmail.com', 'alakapuri, Surat, Gujrat', '2024-04-04 07:32:53', 95, 3, 285, 'mimg/chocolate cheescake.jpg', 'Pending'),
(18, 54, 'kemi', 'kemi', 9685742356, 'kemishah@gmail.com', 'Jahangipura, Ankleshwar,Gujarat', '2024-04-04 07:40:01', 145, 1, 145, 'mimg/paneer butter masala.jpg', 'Pending'),
(19, 72, 'kemi', 'kemi', 9685742356, 'kemishah@gmail.com', 'Jahangipura, Ankleshwar,Gujarat', '2024-04-04 07:40:01', 30, 1, 30, 'mimg/paratha.jpg', 'Pending'),
(20, 77, 'kemi', 'kemi', 9685742356, 'kemishah@gmail.com', 'Jahangipura, Ankleshwar,Gujarat', '2024-04-04 07:40:01', 95, 5, 475, 'mimg/Biscuitcheescake.jpg', 'Pending'),
(21, 52, 'isala_88', 'isla', 9685742356, 'isala_88@gmail.com', 'Middas square, Mumbai, Maharasthra', '2024-04-05 05:06:19', 210, 3, 630, 'mimg/chocolate brownie.jpg', 'Pending'),
(22, 77, 'isala_88', 'isla', 9685742356, 'isala_88@gmail.com', 'Middas square, Mumbai, Maharasthra', '2024-04-05 05:06:19', 95, 3, 285, 'mimg/Biscuitcheescake.jpg', 'Pending'),
(23, 57, 'isala_88', 'isla', 9685742356, 'isala_88@gmail.com', 'Middas square, Mumbai, Maharasthra', '2024-04-05 05:06:19', 210, 3, 630, 'mimg/mango ice.jpeg', 'Pending'),
(24, 77, 'isala_88', 'isla', 9685742356, 'isala_88@gmail.com', 'Middas square, Mumbai, Maharasthra', '2024-04-05 05:06:19', 95, 3, 285, 'mimg/Biscuitcheescake.jpg', 'Pending'),
(25, 74, 'isala_88', 'isla', 9685742356, 'isala_88@gmail.com', 'Middas square, Mumbai, Maharasthra', '2024-04-05 05:06:19', 120, 3, 360, 'mimg/vanillacake.jpg', 'Pending'),
(28, 69, 'rubby_909', 'Rubby', 9685623542, 'rubby_909@gmail.com', 'Marine Plazza, Surat, Gujarat', '2024-04-05 05:17:51', 190, 2, 380, 'mimg/pizza dhosa.jpeg', 'Pending'),
(29, 60, 'rubby_909', 'Rubby', 9685623542, 'rubby_909@gmail.com', 'Marine Plazza, Surat, Gujarat', '2024-04-05 05:17:51', 210, 2, 420, 'mimg/jini role dhosa.jpeg', 'Pending'),
(30, 55, 'user11', 'User', 9105547896, 'user11@gmail.com', 'Surat', '2024-04-06 14:20:50', 75, 3, 225, 'mimg/butter naan.jpg', 'Pending'),
(31, 47, 'user11', 'User', 9105547896, 'user11@gmail.com', 'Surat', '2024-04-06 14:20:50', 180, 2, 360, 'mimg/kaju kari.jpg', 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `food_cat`
--

CREATE TABLE `food_cat` (
  `id` int(11) NOT NULL,
  `categories_title` varchar(255) NOT NULL,
  `sub_cat` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `food_cat`
--

INSERT INTO `food_cat` (`id`, `categories_title`, `sub_cat`) VALUES
(1, 'Kathiyawadi', 'Aloo Matar '),
(2, 'Kathiyawadi', 'Bharela Ringan'),
(3, 'Kathiyawadi', 'Dahi Tikhari'),
(4, 'Kathiyawadi', 'Kaju Ghathiya'),
(5, 'Kathiyawadi', 'Sev tomato'),
(6, 'Rajasthani ', 'Dal-Bati'),
(7, 'Rajasthani ', 'Gatte ki Sabzi '),
(8, 'Rajasthani ', 'Aam Ki Launji '),
(9, 'Rajasthani ', 'Pyaaz Ki Kachori'),
(10, 'Rajasthani ', 'Ghevar'),
(11, 'Punjabi', 'Kaju Kari'),
(12, 'Punjabi', 'Paneer'),
(13, 'Punjabi', 'Chana Masala'),
(14, 'Punjabi', 'Paneer Butter Masala'),
(15, 'Punjabi', 'Veg. Kofta'),
(16, 'South Indian', 'Dhosa'),
(17, 'South Indian', 'Idli Sambar\r\n'),
(18, 'South Indian', 'Medu Vada'),
(19, 'South Indian', 'Jini Role Dhosa'),
(20, 'South Indian', 'Cheese Masala Dhosa'),
(21, 'South Indian', 'Appam'),
(22, 'Tava', 'Rotli'),
(23, 'Tava', 'Bhakhri'),
(24, 'Tava', 'Paratha'),
(25, 'Tava', 'Naan'),
(26, 'Tava', 'Rotlo'),
(27, 'Desserts', 'Chocolate Brownie'),
(28, 'Desserts\r\n', ' Biscuit Cheesecake '),
(29, 'Desserts', 'Cake'),
(30, 'Desserts', 'Ice cream'),
(31, 'Desserts', 'Vanilla Browine'),
(32, 'Kathiyawadi', 'Aachar'),
(33, 'Kathiyawadi', 'Khichadi-Kadhi'),
(34, 'Desserts', 'Cheesecake'),
(35, 'Rajasthani ', 'sweet'),
(36, 'Kathiyawadi', 'Sweet'),
(37, 'Punjabi', 'Sweet'),
(38, 'Others', 'Papad'),
(39, 'Others', 'Ghee'),
(40, 'Others', 'Butter-milk'),
(42, 'Others', 'Salad'),
(43, 'Drinks', 'Cocktail');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(11) NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `image`) VALUES
(1, 'img/Dal-bati.jpg'),
(2, 'img/thali.jpg'),
(3, 'img/bharela ringan.jpg'),
(4, 'img/Bajra-Methi-Poori.webp'),
(5, 'img/STRAWBERRYCHEESECAKE.jpg'),
(6, 'img/palak paneer.jpg'),
(7, 'img/Pyaaz Ki Kachori.jpg'),
(8, 'img/Masala Dhosa.jpeg'),
(9, 'img/naan.jpg'),
(10, 'img/special naan.jpg'),
(11, 'img/sweet corn soup.jpg'),
(12, 'img/rotla nu churmu.jpg'),
(14, 'img/Cosmopolitan.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id` bigint(11) NOT NULL,
  `categories_id` int(11) NOT NULL,
  `sub_cat` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `price` bigint(6) NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id`, `categories_id`, `sub_cat`, `title`, `description`, `price`, `image`) VALUES
(40, 1, 'Aloo Matar ', 'aloo matar ', 'It\'s vegetarian Indian curry made using aloo and matar', 90, 'mimg/aloo matar.jpg'),
(44, 1, 'Sev tomato', 'Sev Tomato', 'It\'s Kathiyawadi dish', 100, 'mimg/sev totmato.jpg'),
(45, 2, 'Dal-Bati', 'Dal Bati', 'Daal Baati is comprising of daal and baati. ', 160, 'mimg/Dal-bati.jpg'),
(46, 4, 'Idli Sambhar\r\n', 'Idli Sambhar ', 'Idli is a healthy breakfast served with coconut chutney and sambar', 80, 'mimg/idli sambar.jpg'),
(47, 3, 'Kaju Kari', 'Kaju-Kari', 'It\'s different variations of preparing Kaju Curry.', 180, 'mimg/kaju kari.jpg'),
(48, 1, 'Dahi Tikhari', 'Dahi Tikhari', 'It\'s simple recipe made with curd and spice based seasoning. ', 35, 'mimg/dahi tikhari.jpg'),
(49, 1, 'Kaju Ghathiya', 'Kaju Ghathiya nu shak', 'It\'s spicy and tasty sabji prepared with kaju, gathiya and regular spices.', 90, 'mimg/kaju gathiya.jpg'),
(50, 5, 'Bhakhri', 'Bhakhri', 'The bhakri prepared using regular wheat.', 20, 'mimg/Bhakhrii.jpg'),
(51, 5, 'Rotli', 'Rotli', 'Rotli  made using regular wheat.', 15, 'mimg/rotli-2-960x1358.jpg'),
(52, 6, 'Chocolate Brownie', 'Chocolate Browine', 'Chocolate Browine  is a chocolate baked confection', 210, 'mimg/chocolate brownie.jpg'),
(53, 2, 'Aam Ki Launji ', 'Aam Ki Launji', 'Aam Ki Launji sweet, spicy chutney made using mango', 25, 'mimg/Aam Ki Launji.jpg'),
(54, 3, 'Paneer Butter Masala', 'Paneer Butter Masala', 'Paneer Butter Masala made with paneer,spices and tomatoes.', 145, 'mimg/paneer butter masala.jpg'),
(55, 5, 'Naan', 'Butter Naan', 'Butter naan served with gravy dishes and butter makes it soft', 75, 'mimg/butter naan.jpg'),
(56, 4, 'Cheese Masala Dhosa', 'Cheese Masala Dhosa', 'Cheese Masala Dosa is a combines with gooey cheese.', 160, 'mimg/cheese masala dhosa.jpg'),
(57, 6, 'Ice cream', 'Mango Ice-cream', 'Mango Ice-cream made with fresh mango', 210, 'mimg/mango ice.jpeg'),
(58, 2, 'Pyaaz Ki Kachori', 'Pyaaz ki Kachori', 'It\'s flaky deep fried evening snack with a spiced onion, potato filling.', 72, 'mimg/Pyaaz Ki Kachori.jpg'),
(59, 4, 'Appam', 'Appam', 'Appam is a type of thin pancake from South India.', 90, 'mimg/appam.jpg'),
(60, 4, 'Jini Role Dhosa', 'Jini Role Dhosa', 'Jini dosa is one of the popular fusion dosa recipes in mumbai', 210, 'mimg/jini role dhosa.jpeg'),
(61, 5, 'Rotlo', 'Bajra Rotlo', 'Bajra Na Rotla is a traditional and popular thick pearl millet roti', 35, 'mimg/rotlo.jpg'),
(62, 1, 'Bharela Ringan', 'Bharela Ringan', 'Bharela Ringan is a Gujarati-style dish made with small-size brinjals.', 90, 'mimg/bharela ringan.jpg'),
(63, 3, 'Chana Masala', 'Chana Masala', 'Channa Masala is a spiciness and health benefits.', 75, 'mimg/chana masala.jpg'),
(65, 1, 'Aachar', 'Khattu Athanu', 'Khattu Athanu made using mango', 25, 'mimg/khattu athanu.jpg'),
(66, 2, 'Gatte ki Sabzi ', 'Gatte ki Sabzi', 'Gatte Ki Sabzi is a delicious Rajasthani curry prepared with gram flour ', 70, 'mimg/Gatte ki Sabzi.jpg'),
(67, 2, 'Ghevar', 'Malai Ghevar', 'Malai Ghevar is a popular Rajasthani sweet dish.', 270, 'mimg/Malai Ghevar.jpg'),
(68, 5, 'Naan', 'Garlic Naan', 'Garlic Naan is brushed with garlic and butter.', 75, 'mimg/garlic naan.jpg'),
(69, 4, 'Dhosa', 'Pizza Dhosa', 'Pizza Dhosa test same as pizza.', 190, 'mimg/pizza dhosa.jpeg'),
(70, 4, 'Dhosa', 'Plain Dhosa', 'Plain Masala Dhosa served with sambar.', 80, 'mimg/plain dosa.jpg'),
(71, 4, 'Medu Vada', 'Medu vada', 'Medu vada served with sambar and coconut chutney.', 50, 'mimg/medu vada.jpeg'),
(72, 5, 'Paratha', 'Butter Paratha', 'Butter Paratha are made with whole wheat flour (atta), salt, water & butter.', 30, 'mimg/paratha.jpg'),
(74, 6, 'Cake', 'Vanilla Cake', 'Vanilla Flouver cake for any celebrating', 120, 'mimg/vanillacake.jpg'),
(75, 3, 'Paneer', 'Palak Paneer', 'Palan Paneer sabji made with palak and paneer', 85, 'mimg/palak paneer.jpg'),
(76, 6, 'Cheesecake', 'Chocolate cheesecake', 'Chocolate cheesecake made using chocolate and coco powder.', 95, 'mimg/chocolate cheescake.jpg'),
(77, 6, 'Cheesecake', 'Biscuit Cheesecake', 'Biscuit Cheesecake made using flour,cheese,suger.', 95, 'mimg/Biscuitcheescake.jpg'),
(78, 5, 'Paratha', 'Aloo Paratha', 'Aloo Paratha made using Aloo and served with curd.', 75, 'mimg/aloo paratha.jpg'),
(80, 2, 'sweet', 'Churmu', 'Churma is made using wheat flour,besan and served with dal-bati.', 90, 'mimg/churma.webp'),
(81, 1, 'Sweet', 'Sukhadi', 'Sukhdi is a traditional Indian sweet originating from Gujarat.', 55, 'mimg/sukhdi.jpg'),
(82, 3, 'Sweet', 'Panjiri', 'Panjeeri uses atta, dry fruits ,prasad for janmashtami.', 65, 'mimg/panjiri.jpg'),
(83, 1, 'Sweet', 'Mohanthal', 'Mohanthal is a traditional besan (gram flour) based Indian sweet.', 290, 'mimg/mohanthal.jpg'),
(84, 8, 'Cocktail', 'Margarita', 'Margarita is well-made version is a fresh mix of lime juice ', 120, 'mimg/Margarita.jpg'),
(85, 8, 'Cocktail', 'Mojito', 'Mojito is refreshing rum-based drink is filled with mint and lime.', 80, 'mimg/Mojito.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `reservation`
--

CREATE TABLE `reservation` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(15) DEFAULT NULL,
  `reservation_date` date DEFAULT NULL,
  `reservation_time` time NOT NULL,
  `num_persons` int(11) DEFAULT NULL,
  `table_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `reservation`
--

INSERT INTO `reservation` (`id`, `name`, `email`, `phone`, `reservation_date`, `reservation_time`, `num_persons`, `table_id`) VALUES
(6, 'harry', 'herry_01@gmail.', '7456882201', '2024-04-06', '12:50:00', 6, 7),
(7, 'Suhani Shani', 'suhani_shani@gmail.com', '63762583974	', '2024-04-17', '08:30:00', 2, 11),
(8, 'peri', 'peri0101@gmail.', '6358974562', '2024-05-01', '15:00:00', 6, 25),
(9, 'kemi', 'kemishah@gmail.com', '9685742356', '2024-04-17', '10:00:00', 4, 16),
(10, 'kemi shah', 'kemishah@gmail.com', '9685742356', '2024-04-17', '04:00:00', 2, 13),
(11, 'isla', 'isala_88@gmail.com', '09685742356', '2024-04-16', '11:30:00', 4, 17),
(12, 'Jeck Devid', 'jeck_devid@gmail.com', '698574256', '2024-04-16', '12:30:00', 7, 19),
(13, 'User', 'user11@gmail.com', '9874122015', '2024-04-21', '00:00:00', 6, 13),
(14, 'Oliver', 'oliver@gmail.com', '7844653210', '2024-04-19', '03:00:00', 2, 16),
(15, 'Herry', 'herry@gmail.com', '6543217987', '2024-04-25', '02:15:00', 4, 20),
(16, 'Jeck', 'jecksmith@gmail.com', '8974653121', '2024-04-16', '12:00:00', 5, 17);

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `review` varchar(255) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`id`, `name`, `review`, `description`) VALUES
(1, 'Olivia', 'Exellent', 'Services that Sets the bar high'),
(2, 'Krishna', 'Good', 'I celebrating my birthday and it was an unforgettable experience.'),
(3, 'Mahi', 'Poor', 'Services very slow.'),
(4, 'Vish', 'Exellent', 'I am lookout for new experience and your restaurant exceeds my expectations.'),
(5, 'Emma', 'Good', 'Candlelight dinner is create a truly magical evening.'),
(6, 'Sophia', 'Good', 'every dish was fresh,flavorful and beautiful presented but service slow.'),
(7, 'Ferri', 'Exellent', 'The restaurant service exceeds our expectations.'),
(8, 'Noah', 'Exellent', 'Impressed by the top-notch food quality.'),
(9, 'Moon', 'Exellent', ' Crafting memories with every dishes.'),
(10, 'peri', 'Good', 'Your food is over love language.'),
(11, 'herry', 'Exellent', 'Something hot. Something tasty.'),
(12, 'roshni', 'Very Poor', 'Food that makes i say wow.'),
(13, 'suhani', 'Good', 'Hundreds of flavors under one roof.'),
(14, 'Mia John', 'Exellent', 'Eating is a necessity, but dining is an art form.'),
(15, 'isla', 'Exellent', 'Your desserts is very good test.'),
(16, 'Jeck', 'Very Poor', 'Your formal table is very awesome'),
(17, 'rubby', 'Very Poor', 'South Indian foodie adventures are the best adventures.'),
(18, 'user11', 'Very Poor', 'Good quality food and service are also awesome'),
(19, 'Oliver', 'Very Poor', 'Good Services and make a beautiful day..\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `tbluser`
--

CREATE TABLE `tbluser` (
  `id` int(11) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `age` int(11) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `mno` varchar(12) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `city` varchar(50) NOT NULL,
  `state` varchar(50) NOT NULL,
  `resettoken` varchar(255) DEFAULT NULL,
  `resettokenexpire` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbluser`
--

INSERT INTO `tbluser` (`id`, `full_name`, `username`, `age`, `gender`, `mno`, `email`, `password`, `address`, `city`, `state`, `resettoken`, `resettokenexpire`) VALUES
(1, 'User', 'user11', 20, 'female', '7896541230', 'vishawapatel118@gmail.com', '$2y$10$BHucpFEf/iAW7mZ3S3.pTeMCyG1v/P0oRiGUHVCipC.CbxY5XYxM2', 'Athwagate', 'Surat', 'Gujrat', NULL, NULL),
(2, 'Olivia', 'Olivia_1', 21, 'male', '6578410230', 'Olivia_1@gmail.com', '$2y$10$f.QByOMsJ.2Zr6ymj1eQlu6abA0QubwiaEUmk8.IKYY/NwqcYFDxO', 'Krishna Nagar', 'Surat', 'Gujrat', NULL, NULL),
(3, 'Ram', 'iamram', 32, 'male', '7854120321', 'ram321@gmail.com', '$2y$10$W2zaDOeKpuJTdbbRXSV3AeqPFjrDJiXibwKH8kne8vNymmX5dn.Tq', 'Happy home', 'Pune', 'Maharashtra', NULL, NULL),
(4, 'Freya Rajai', 'freya11', 26, 'female', '6102145879', 'freyarajai@gmail.com', '$2y$10$DvsRrHApZ4ULsMDsDRj.t.2aHq1HYYADn2dXWDIvuiQZqzksOvGHO', 'Plus Point', 'Ahmedabad', 'Gujrat', NULL, NULL),
(5, 'Mia John', 'mia_j00', 38, 'female', '9614700214', 'miajohn00@gmail.com', '$2y$10$ODDKul38zJlTx3gtluP0D.ld2SH.yyO3eR8/gym8D6CofpGJy8MoS', 'Apple Plazza', 'Udaipur', 'Rajasthan', NULL, NULL),
(6, 'Suhani Shani', 's_shani', 27, 'female', '63762583974', 'suhani_shani@gmail.com', '$2y$10$aH.12l6f3snL0BVNuBocju41f1K5xo0SKIWwSIj3SSskbZbkMDMLm', 'liyona place ', 'Mumbai', 'Maharashtra', NULL, NULL),
(7, 'Roshani Ghadhiya', 'roshni101', 31, 'female', '7638456274', 'roshanighadhiya101@gmail.com', '$2y$10$E1gtx8.998zBut267YETgOqb8L1TYE8fkgDOxAgHAJ0toO/EgxhgC', 'Happy om', 'Bhavnagar', 'Gujrat', NULL, NULL),
(8, 'Herry shoh', 'herry_01', 36, 'male', '7456882201', 'herry_01@gmail.com', '$2y$10$eUc2EKHMiX.EUULCqjymRu5hiWKiYvdnz8QT74GFoizscRqhz341a', 'Jinaklpuri', 'Udaipur', 'Rajasthan', NULL, NULL),
(9, 'peri gupta', 'peri0101', 23, 'female', '6358974562', 'peri0101@gmail.com', '$2y$10$lT/zcYS6bDsv.zEEWSDzo.so.sn/0tuPlLROgTU5/Jk3QKR2hpAvO', 'alakapuri', 'Surat', 'Gujrat', NULL, NULL),
(10, 'kemi shah', 'kemi', 25, 'female', '9685742356', 'kemishah@gmail.com', '$2y$10$0D7O3E4ooygp12N3GC9icugcXSl0Q2n6I8kG2poHj73DtG102VGzm', 'Jahangipura', 'Ankleshwar', 'Gujarat', NULL, NULL),
(11, 'Isla Smith', 'isala_88', 35, 'male', '698574563', 'isala_88@gmail.com', '$2y$10$/zzc7orqCZRl9ez0Uy/XQuhdfn082j49cfOJ1/4pF8YWBruRaFqc6', 'Middas squer', 'Mumbai', 'Maharashtra', NULL, NULL),
(12, 'Jeck Devid', 'Jeck', 25, 'male', '9685742563', 'jeck_devid@gmail.com', '$2y$10$IZ6XOjxfHcZQrI88jOr4euvVQp2yeCp07hOfzsJkQNDc9U69j4nNy', 'Science city', 'Ahmedabad', 'Gujarat', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aadmin`
--
ALTER TABLE `aadmin`
  ADD PRIMARY KEY (`adminid`);

--
-- Indexes for table `addcart`
--
ALTER TABLE `addcart`
  ADD PRIMARY KEY (`id`),
  ADD KEY `p_id` (`p_id`);

--
-- Indexes for table `addtable`
--
ALTER TABLE `addtable`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`categories_id`);

--
-- Indexes for table `checkout`
--
ALTER TABLE `checkout`
  ADD PRIMARY KEY (`id`),
  ADD KEY `p_id` (`p_id`);

--
-- Indexes for table `food_cat`
--
ALTER TABLE `food_cat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbluser`
--
ALTER TABLE `tbluser`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aadmin`
--
ALTER TABLE `aadmin`
  MODIFY `adminid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=124;

--
-- AUTO_INCREMENT for table `addcart`
--
ALTER TABLE `addcart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `addtable`
--
ALTER TABLE `addtable`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `categories_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `checkout`
--
ALTER TABLE `checkout`
  MODIFY `id` bigint(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `food_cat`
--
ALTER TABLE `food_cat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id` bigint(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=86;

--
-- AUTO_INCREMENT for table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `tbluser`
--
ALTER TABLE `tbluser`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `addcart`
--
ALTER TABLE `addcart`
  ADD CONSTRAINT `addcart_ibfk_1` FOREIGN KEY (`p_id`) REFERENCES `menu` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `checkout`
--
ALTER TABLE `checkout`
  ADD CONSTRAINT `checkout_ibfk_1` FOREIGN KEY (`p_id`) REFERENCES `menu` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
