-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 31, 2023 at 03:06 PM
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
-- Database: `dinein`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `aid` int(11) NOT NULL,
  `Username` varchar(10) NOT NULL,
  `Password` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`aid`, `Username`, `Password`) VALUES
(1, 'Admin', 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `booking_details`
--

CREATE TABLE `booking_details` (
  `id` int(11) NOT NULL,
  `table_no` int(11) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `date` date NOT NULL,
  `people` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booking_details`
--

INSERT INTO `booking_details` (`id`, `table_no`, `fullname`, `email`, `phone`, `date`, `people`) VALUES
(58, 101, 'mona', 'mona@gmail.com', '7777777777', '2023-10-31', 4),
(59, 102, 'Mona', 'mona@thnaki.com', '2222222222', '2023-10-31', 3),
(60, 103, 'Mona', 'mona@test.com', '9999999999', '2023-10-31', 1);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `ct_id` int(11) NOT NULL,
  `c_name` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`ct_id`, `c_name`) VALUES
(7, 'indian'),
(8, 'Maxican'),
(10, 'italian'),
(11, 'Thai');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `MID` int(11) NOT NULL,
  `CTID` int(11) NOT NULL,
  `MNAME` varchar(30) NOT NULL,
  `QNTY` varchar(30) NOT NULL,
  `PRICE` int(11) NOT NULL,
  `MIMAGE` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`MID`, `CTID`, `MNAME`, `QNTY`, `PRICE`, `MIMAGE`) VALUES
(5, 8, 'Tacos', '25', 4, 'CHOWMEIN.jpg'),
(8, 8, 'vada pow', '25', 4, '2 sea food swordfish steak.jpg'),
(9, 8, 'chessey nachhos', '1', 10, 'mexican-food Dorilocos.jpg'),
(10, 11, 'Thai Special Noodels', '10', 10, 'NOODLES.jpg'),
(11, 8, 'maxican meat role', '1', 10, 'mexican-sauce Mole.jpg'),
(12, 10, 'Green Role', '2', 10, 'SPRROLL.jpg'),
(13, 7, 'dal makhani', '25', 25, 'DALMAKHNI.jpg'),
(14, 7, 'Sev tameta', '2', 10, 'SEV-TAMETA.JPG'),
(15, 8, 'Maxican Rice', '10', 8, 'CHINABHEL.jpg'),
(16, 11, 'Massman Gai', '1', 15, '3 thai food massaaman gai.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `ordr`
--

CREATE TABLE `ordr` (
  `OID` int(11) NOT NULL,
  `TID` int(11) NOT NULL,
  `ODATE` timestamp NOT NULL DEFAULT current_timestamp(),
  `STATUS` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ordr`
--

INSERT INTO `ordr` (`OID`, `TID`, `ODATE`, `STATUS`) VALUES
(1, 3, '2021-05-14 14:25:43', 1),
(2, 3, '2021-05-14 14:25:43', 1),
(3, 10, '2021-05-14 14:43:24', 1),
(4, 1, '2021-06-06 13:20:31', 1);

-- --------------------------------------------------------

--
-- Table structure for table `ordrdlt`
--

CREATE TABLE `ordrdlt` (
  `KOT` int(11) NOT NULL,
  `MID` int(11) NOT NULL,
  `MNAME` varchar(20) NOT NULL,
  `QNTY` varchar(20) NOT NULL,
  `PRICE` int(11) NOT NULL,
  `TOTAL` int(11) NOT NULL,
  `OID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ordrdlt`
--

INSERT INTO `ordrdlt` (`KOT`, `MID`, `MNAME`, `QNTY`, `PRICE`, `TOTAL`, `OID`) VALUES
(1, 1, 'SEV-TAMETA', '1', 50, 50, 2),
(2, 2, 'PANEER TIKKA', '1', 100, 100, 2),
(3, 11, 'DHOSA', '1', 50, 50, 2),
(4, 4, 'KADHI', '1', 30, 30, 2),
(5, 8, 'NOODLE', '1', 50, 50, 2),
(6, 22, 'FANTA', '1', 50, 50, 2),
(7, 1, 'SEV-TAMETA', '1', 50, 50, 3),
(8, 8, 'NOODLE', '1', 50, 50, 3),
(9, 31, 'COFFE', '1', 30, 30, 3),
(10, 1, 'SEV-TAMETA', '1', 50, 50, 4),
(11, 11, 'DHOSA', '1', 50, 50, 4),
(12, 17, 'PALAK PANEER', '1', 100, 100, 4);

-- --------------------------------------------------------

--
-- Table structure for table `parcel`
--

CREATE TABLE `parcel` (
  `PID` int(11) NOT NULL,
  `CONTACT` double NOT NULL,
  `STATUS` int(11) NOT NULL,
  `PDATE` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `parcel`
--

INSERT INTO `parcel` (`PID`, `CONTACT`, `STATUS`, `PDATE`) VALUES
(1, 2267524771, 1, '2023-10-29 03:13:52');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `SID` int(11) NOT NULL,
  `FNAME` varchar(20) NOT NULL,
  `LNAME` varchar(20) NOT NULL,
  `EMAIL` varchar(25) NOT NULL,
  `PASSWD` varchar(25) NOT NULL,
  `ADDRSS` varchar(30) NOT NULL,
  `GENDER` varchar(10) NOT NULL,
  `AGE` int(11) NOT NULL,
  `CONTACT` double NOT NULL,
  `EXPIERNCE` varchar(20) NOT NULL,
  `HIREDATE` date NOT NULL,
  `SALARY` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`SID`, `FNAME`, `LNAME`, `EMAIL`, `PASSWD`, `ADDRSS`, `GENDER`, `AGE`, `CONTACT`, `EXPIERNCE`, `HIREDATE`, `SALARY`) VALUES
(1, 'BIPINd', 'PATELdddd', 'b@gmail.comddddddd', 'raj@123', '65, HAMILTON, ON, L9C 1S2ddd', 'MALE', 25, 2267524771, '25', '2023-10-09', 2500),
(2, 'kinjal', 'PATEL', 'kjau@gmail.com', 'Kijal@123', '65, HAMILTON, ON, L9C 1S2', 'FEMALE', 25, 2267524771, '2', '2023-10-17', 2500),
(3, 'nensi', 'patel', 'np@gmail.com', 'Np@123', '111 scenic wood cre', 'OTHER', 20, 2269783172, '5', '2023-06-01', 3000),
(0, 'mona', 'thanki', 'mona@gmail.com', 'mona123', 'xyz', 'FEMALE', 23, 9999999999, '2', '2023-10-27', 20000);

-- --------------------------------------------------------

--
-- Table structure for table `tables`
--

CREATE TABLE `tables` (
  `TID` int(11) NOT NULL,
  `TABLE_NO` int(11) NOT NULL,
  `NO_SEAT` int(11) NOT NULL,
  `STATUS` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tables`
--

INSERT INTO `tables` (`TID`, `TABLE_NO`, `NO_SEAT`, `STATUS`) VALUES
(1, 101, 4, 'BOOK'),
(2, 102, 1, 'NO BOOK'),
(3, 103, 5, 'NO BOOK'),
(4, 104, 1, 'NO BOOK'),
(5, 105, 1, 'NO BOOK'),
(6, 106, 1, 'NO BOOK'),
(7, 107, 1, 'NO BOOK'),
(8, 108, 1, 'NO BOOK'),
(9, 109, 1, 'NO BOOK'),
(10, 110, 8, 'NO BOOK'),
(11, 111, 1, 'NO BOOK'),
(12, 112, 1, 'NO BOOK');

-- --------------------------------------------------------

--
-- Table structure for table `userregister`
--

CREATE TABLE `userregister` (
  `u_id` int(5) NOT NULL,
  `fname` varchar(15) NOT NULL,
  `lname` varchar(15) NOT NULL,
  `u_email` varchar(20) NOT NULL,
  `mobile` int(11) NOT NULL,
  `password` varchar(15) NOT NULL,
  `compass` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `userregister`
--

INSERT INTO `userregister` (`u_id`, `fname`, `lname`, `u_email`, `mobile`, `password`, `compass`) VALUES
(1, 'BIPIN', 'PATEL', 'bipinpatel2914@gmail', 2147483647, 'Bipin', 'Bipin'),
(2, 'BIPIN', 'PATEL', 'bipinpatel2914@gmail', 2147483647, 'Bipin', 'Bipin'),
(3, 'BIPIN', 'PATEL', 'bipinpatel2914@gmail', 2147483647, 'Bipin', 'Bipin'),
(4, 'Kinjal', 'Patel', 'kp@gmail.com', 2147483647, 'B123', 'B123'),
(5, 'Mansi', 'Soni', 'msoni@gmail.com', 2147483647, 'M123', 'M123'),
(6, 'test', 'test', 'test@test.com', 1289999999, 'test123', 'test123'),
(7, 'xyz', 'xyz', 'xyz@xyz.com', 1289999999, 'xyz123', 'xyz123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`aid`);

--
-- Indexes for table `booking_details`
--
ALTER TABLE `booking_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`ct_id`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`MID`),
  ADD KEY `TABLEFK_CTID` (`CTID`);

--
-- Indexes for table `tables`
--
ALTER TABLE `tables`
  ADD PRIMARY KEY (`TID`);

--
-- Indexes for table `userregister`
--
ALTER TABLE `userregister`
  ADD PRIMARY KEY (`u_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `aid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `booking_details`
--
ALTER TABLE `booking_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `ct_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `MID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `tables`
--
ALTER TABLE `tables`
  MODIFY `TID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `userregister`
--
ALTER TABLE `userregister`
  MODIFY `u_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `menu`
--
ALTER TABLE `menu`
  ADD CONSTRAINT `TABLEFK_CTID` FOREIGN KEY (`CTID`) REFERENCES `category` (`ct_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
