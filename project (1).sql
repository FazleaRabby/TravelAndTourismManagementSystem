-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 27, 2022 at 07:53 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `booktourguide`
--

CREATE TABLE `booktourguide` (
  `fname` varchar(30) DEFAULT NULL,
  `GID` int(11) DEFAULT NULL,
  `phone` int(11) NOT NULL,
  `email` varchar(30) DEFAULT NULL,
  `Adate` varchar(30) NOT NULL,
  `question` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booktourguide`
--

INSERT INTO `booktourguide` (`fname`, `GID`, `phone`, `email`, `Adate`, `question`) VALUES
('tanim', 10, 14653202, 'fazlea@gmail.com', '2020-09-07', '');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `id` int(11) NOT NULL,
  `employeename` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`id`, `employeename`, `email`, `password`) VALUES
(1, 'Fazlea Rabby', 'fazlea@gmail.com', 'abcd'),
(2, 'Raghib Hasan', 'raghib@gmail.com', 'abcd');

-- --------------------------------------------------------

--
-- Table structure for table `hotel`
--

CREATE TABLE `hotel` (
  `ID` int(11) NOT NULL,
  `HotelName` varchar(30) DEFAULT NULL,
  `street` varchar(30) DEFAULT NULL,
  `City` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hotel`
--

INSERT INTO `hotel` (`ID`, `HotelName`, `street`, `City`) VALUES
(1, 'Royal Tulip', 'Jaliapalong', 'Coxs Bazaar'),
(2, 'Ocean Paradise Hotel & Resort', 'Kolatoli', 'Coxs Bazaar'),
(3, 'Grace Cox Smart Hotel', 'Kutum Bari', 'Coxs Bazaar'),
(4, 'Best Western Heritage', 'Kolatoli Circle', 'Coxs Bazaar'),
(5, 'Seagull Hotels Ltd', 'Beach Road', 'Coxs Bazaar'),
(6, 'Sayemon Hotel', 'Kolatoli', 'Coxs Bazaar'),
(7, 'Hotel Vista Bay', 'Link Road', 'Coxs Bazaar'),
(8, 'Hotel The Cox Today', 'Kolatoli', 'Coxs Bazaar'),
(9, 'Ocean Paradise', 'Beach Road', 'Coxs Bazaar'),
(10, 'Hotel Marmaid', 'Link Road', 'Coxs Bazaar'),
(11, 'Hotel Coral Leaf', 'Sugandha Point', 'Coxs Bazaar'),
(12, 'Jatra Flagship', 'City Centre Khulna', 'Khulna'),
(13, 'Tiger Inn', 'Roxy Road', 'Khulna'),
(14, 'Hotel Park', 'Karamcha Road', 'Sundarban'),
(15, 'Hotel Grand Noor Jahan', 'Bus Stand', 'Sylhet'),
(16, 'Hotel Valley Garden', 'City Road', 'Sylhet'),
(17, 'Nirvana Inn', 'Nirvana Tower', 'Sylhet'),
(18, 'Hotel Aristocrat ', 'Kadamtali', 'Sylhet'),
(19, 'Hotel Agrabad', 'Bulbul Center', 'Chittagong'),
(20, 'Raddison Blue', 'Jubilee Center Road', 'Chittagong'),
(21, 'Hotel Star Park', 'City Center', 'Chittagong'),
(22, 'Hill View Hotel', 'Pahartila Road', 'Bandarban'),
(23, 'Hotel Night Heaven', 'Meghla Parjatan Area', 'Bandarban'),
(24, 'Hotel Palace View', 'Pahartila Road', 'Bandarban'),
(25, 'Hotel Royal Garden', 'Kakoli', 'Rangamati'),
(26, 'Hotel Noor International', 'Pallabi Road', 'Rangamati'),
(27, 'Mohor Kutir Resort', 'Parjatan Road', 'Rangamati'),
(28, 'Hotel Golden Inn', 'Kaysar Road', 'Khagrachari'),
(29, 'Polo Lake Resort ', 'Main Road', 'Khagrachari'),
(30, 'Hotel Mount Inn', 'City Road', 'Khagrachari');

-- --------------------------------------------------------

--
-- Table structure for table `hotelbook`
--

CREATE TABLE `hotelbook` (
  `fname` varchar(30) DEFAULT NULL,
  `hName` varchar(30) DEFAULT NULL,
  `phone` int(11) NOT NULL,
  `email` varchar(30) DEFAULT NULL,
  `Adate` varchar(30) NOT NULL,
  `departure` varchar(30) DEFAULT NULL,
  `noa` int(11) DEFAULT NULL,
  `noc` int(11) DEFAULT NULL,
  `question` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hotelbook`
--

INSERT INTO `hotelbook` (`fname`, `hName`, `phone`, `email`, `Adate`, `departure`, `noa`, `noc`, `question`) VALUES
('tanim', 'Royal Tulip', 164254522, 'tanim.875@gmail.com', '2020-09-07', '11.00', 4, 1, '');

-- --------------------------------------------------------

--
-- Table structure for table `packagebook`
--

CREATE TABLE `packagebook` (
  `fname` varchar(30) DEFAULT NULL,
  `Pid` varchar(30) DEFAULT NULL,
  `phone` int(11) DEFAULT NULL,
  `email` varchar(30) NOT NULL,
  `Adate` varchar(30) NOT NULL,
  `noa` varchar(30) DEFAULT NULL,
  `noc` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `resrestaurant`
--

CREATE TABLE `resrestaurant` (
  `fname` varchar(30) DEFAULT NULL,
  `resName` varchar(30) DEFAULT NULL,
  `phone` int(11) NOT NULL,
  `email` varchar(30) DEFAULT NULL,
  `Adate` varchar(30) NOT NULL,
  `Ptime` varchar(30) NOT NULL,
  `noa` int(11) DEFAULT NULL,
  `noc` int(11) DEFAULT NULL,
  `question` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `resrestaurant`
--

INSERT INTO `resrestaurant` (`fname`, `resName`, `phone`, `email`, `Adate`, `Ptime`, `noa`, `noc`, `question`) VALUES
('tanim', '', 168242101, 'rabby.202@gmail.com', '2020-09-07', '11.00', 4, 2, '');

-- --------------------------------------------------------

--
-- Table structure for table `restaurant`
--

CREATE TABLE `restaurant` (
  `RID` int(11) NOT NULL,
  `RName` varchar(30) DEFAULT NULL,
  `street` varchar(30) DEFAULT NULL,
  `city` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `restaurant`
--

INSERT INTO `restaurant` (`RID`, `RName`, `street`, `city`) VALUES
(1, 'Palongki', 'Marine Drive Road', 'Coxs Bazaar'),
(2, 'Salt Bistro & Cafe', 'Hotel-Motel Zone', 'Coxs Bazaar'),
(3, 'Poushee Hotel & Restaurant', 'Jhautola', 'Coxs Bazaar'),
(4, 'Ruposhi Bangla Hotel', 'Sugandha Point', 'Coxs Bazaar'),
(5, 'Casablanca Restaurant', 'Sayemon Beach Resort', 'Coxs Bazaar'),
(6, 'Chopsticks and Chutney', 'Jhawtola Main Road', 'Coxs Bazaar'),
(7, 'Oasis', 'Hotel Prime Park', 'Coxs Bazaar'),
(8, 'Fly Dining', 'Sugandha Point', 'Coxs Bazaar'),
(9, 'Dew Drop', 'Marine Drive Resort', 'Coxs Bazaar'),
(10, 'Sea Lamp', 'New Drive Road', 'Coxs Bazaar'),
(11, 'Panshi Restaurant', 'Jallarpar Road', 'Sylhet'),
(12, 'The Mad Grill', 'Nayasarak Point', 'Sylhet'),
(13, 'Curry Royal', 'Custom More', 'Sylhet'),
(14, 'Palki Restaurant', 'Shohir Plaza', 'Sylhet'),
(15, 'Rain Terrace', 'Kashish-7', 'Sylhet'),
(16, 'Brick Lane', 'Zindabazar', 'Sylhet'),
(17, 'Platinum Lounge', 'Kumarpara Complex', 'Chittagong'),
(18, 'Kebab Cottage', 'Kumarpara Road', 'Chittagong'),
(19, 'Rovers Cafe', 'Upper Road', 'Chittagong'),
(20, 'Saffron', 'Central Road', 'Khulna'),
(21, 'Deshi Kitchen', 'Sonadanga', 'Khulna'),
(22, 'The Lake View Restaurant', 'Rail Road Crossing', 'Khulna'),
(23, 'Firefly Restaurant', 'Central Masjid Road', 'Khulna'),
(24, 'Kacchi Ghor', 'KDA Avenue', 'Khulna'),
(25, 'Kalapata Restaurant', 'Main Road', 'Bandarban'),
(26, 'Feast Restaurant', 'Islampur Road', 'Bandarban'),
(27, 'Hill View Restaurant', 'Main Station Road', 'Bandarban'),
(28, 'Bamboo Chicken Restaurant', 'Terminal Road', 'Bandarban'),
(29, 'Chandrima Restaurant', 'Central Shahid Minar Road', 'Rangamati'),
(30, 'Sabarang Cafe', 'Forest Colony', 'Rangamati'),
(31, 'Khang Moy', 'Noapara Road', 'Khagrachari'),
(32, 'Khang Moy', 'Noapara Road', 'Khagrachari'),
(33, 'Bamboo Shoot', 'College Road', 'Khagrachari');

-- --------------------------------------------------------

--
-- Table structure for table `reviewindex`
--

CREATE TABLE `reviewindex` (
  `RName` varchar(30) NOT NULL,
  `review` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reviewindex`
--

INSERT INTO `reviewindex` (`RName`, `review`) VALUES
('Fazlea Rabby', 'bjhvk vvhvhvvvhvjhh vhvh'),
('jian', 'bjhvk vvhvhvvvhvjhh vhvh');

-- --------------------------------------------------------

--
-- Table structure for table `tourguide`
--

CREATE TABLE `tourguide` (
  `GID` int(11) NOT NULL,
  `GName` varchar(30) DEFAULT NULL,
  `Area` varchar(30) DEFAULT NULL,
  `City` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tourguide`
--

INSERT INTO `tourguide` (`GID`, `GName`, `Area`, `City`) VALUES
(1, 'Jamil', 'Kolatoli', 'Coxs Bazaar'),
(2, 'Sumon', 'Beach Point', 'Coxs Bazaar'),
(3, 'Kalim', 'Sugandha Point', 'Coxs Bazaar'),
(4, 'Jehangir', 'Marine Road', 'Coxs Bazaar'),
(5, 'Rahim', 'Hotel Inn point', 'Coxs Bazaar'),
(6, 'Noyon', 'Inani Beach Point', 'Coxs Bazaar'),
(7, 'Nahid', 'Labony Point', 'Coxs Bazaar'),
(8, 'Sobuj', 'Kakoli Road', 'Coxs Bazaar'),
(9, 'Zahid', 'Himchari', 'Coxs Bazaar'),
(10, 'Zubayet', 'Saint Martin', 'Coxs Bazaar'),
(11, 'Redown', 'Link Road', 'Chittagong'),
(12, 'Dawood', 'Airport Road', 'Chittagong'),
(13, 'Rony', 'Halishahar', 'Chittagong'),
(14, 'Naved', 'Agrabad', 'Chittagong'),
(15, 'Salim', 'Patenga', 'Chittagong'),
(16, 'Abir', 'Bank para', 'Kahagrachari'),
(17, 'Abdullah', 'Radio Colony', 'Kahagrachari'),
(18, 'Niloy', 'System Area', 'Kahagrachari'),
(19, 'Akash', 'Hill Area', 'Kahagrachari'),
(20, 'Ishmum', 'Noapara', 'Kahagrachari'),
(21, 'Hridoy', 'Noapara', 'Rangamati'),
(22, 'Tirtho', 'Campus Road', 'Rangamati'),
(23, 'Hasan', 'Kaptai', 'Rangamati'),
(24, 'Bappy', 'Banurupa Bazar', 'Rangamati'),
(25, 'Raghib', 'Army Road', 'Bandarban'),
(26, 'Tahsan', 'Cantonment Road', 'Bandarban'),
(27, 'Sourav', 'Chairman Para', 'Bandarban'),
(28, 'Rakib', 'Neela Point', 'Sundarban'),
(29, 'Nabil', 'Heron Point', 'Sundarban'),
(30, 'Ali', 'Dublar Char', 'Sundarban'),
(31, 'Faizul', 'Kadamtali', 'Sylhet'),
(32, 'Sohel', 'Taj Hotel Road', 'Sylhet'),
(33, 'Mimas', 'City Road', 'Sylhet'),
(34, 'Rabby', 'Sahartali', 'Sylhet'),
(35, 'Asif', 'Ashaloy Housing', 'Sylhet');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES
(9, 'Tanim875', 'iqramulhoque01@gmail.com', 'e2fc714c4727ee9395f324cd2e7f331f'),
(10, 'Rabby202', 'rabby.202@gmail.com', '1f7690ebdd9b4caf8fab49ca1757bf27');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booktourguide`
--
ALTER TABLE `booktourguide`
  ADD PRIMARY KEY (`phone`,`Adate`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hotel`
--
ALTER TABLE `hotel`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `hotelbook`
--
ALTER TABLE `hotelbook`
  ADD PRIMARY KEY (`phone`,`Adate`);

--
-- Indexes for table `packagebook`
--
ALTER TABLE `packagebook`
  ADD PRIMARY KEY (`email`,`Adate`);

--
-- Indexes for table `resrestaurant`
--
ALTER TABLE `resrestaurant`
  ADD PRIMARY KEY (`phone`,`Adate`,`Ptime`);

--
-- Indexes for table `restaurant`
--
ALTER TABLE `restaurant`
  ADD PRIMARY KEY (`RID`);

--
-- Indexes for table `tourguide`
--
ALTER TABLE `tourguide`
  ADD PRIMARY KEY (`GID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
