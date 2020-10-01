-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 20, 2020 at 01:23 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.1.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mobileproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `sno` int(11) NOT NULL,
  `username` varchar(100) DEFAULT NULL,
  `companyname` varchar(100) DEFAULT NULL,
  `modelno` varchar(100) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `image` blob DEFAULT NULL,
  `quantity` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`sno`, `username`, `companyname`, `modelno`, `price`, `image`, `quantity`) VALUES
(129, 'msd', 'xaomi', 'NOTE 7S', 11999, 0x6d692d7265646d692d6e6f74652d37732d6d7a6237373433696e2d6f726967696e616c2d696d6166653438706d7535713679677a2e6a706567, 1),
(296, 'admin', 'apple', 'iPhone SE', 42500, 0x6970686f6e6573652e706e67, 1),
(297, 'ramesh', 'apple', 'iPhone 6S', 45000, 0x6970686f6e6536732e706e67, 7),
(298, 'a', 'apple', 'iPhone 6S', 45000, 0x6970686f6e6536732e706e67, 4),
(299, 'ramesh', 'apple', 'iPhone 11 Pro Max', 150800, 0x4170706c652d6950686f6e652d31312d50726f2d4d61782d4d69646e696768742d477265656e2d66726f6e74696d6167652e706e67, 3),
(302, 'ramesh', 'oneplus', 'OnePlus 8 Pro', 59999, 0x6f6e65706c75733870726f2e706e67, 1),
(347, '7', 'apple', 'iPhone 11 ', 68300, 0x4170706c652d6950686f6e652d31312d5245442e706e67, 2),
(348, '7', 'google', 'pixel 4', 55000, 0x676f6f676c652d706978656c2d342e706e67, 1),
(349, '7', 'apple', 'iPhone 11 Pro Max', 150800, 0x4170706c652d6950686f6e652d31312d50726f2d4d61782d4d69646e696768742d477265656e2d66726f6e74696d6167652e706e67, 1),
(354, 'msdhoni', 'google', 'pixel 4', 55000, 0x676f6f676c652d706978656c2d342e706e67, 1),
(356, '77', 'apple', 'iPhone XR', 59000, 0x6970686f6e6578722e706e67, 11),
(358, 'rameshgodara', 'apple', 'iPhone 11 Pro Max', 150800, 0x4170706c652d6950686f6e652d31312d50726f2d4d61782d4d69646e696768742d477265656e2d66726f6e74696d6167652e706e67, 2),
(359, '7', 'samsung', 'Note 10 PLUS', 89999, 0x73616d73756e672d67616c6178792d6e6f74652d31302d706c75732e706e67, 2),
(360, 'rameshgodara', 'oneplus', 'OnePlus 8', 44999, 0x6f6e65706c7573382e706e67, 1);

-- --------------------------------------------------------

--
-- Table structure for table `company_details`
--

CREATE TABLE `company_details` (
  `sno` int(100) NOT NULL,
  `companyname` varchar(100) DEFAULT NULL,
  `companylogo` varchar(100) DEFAULT NULL,
  `companylogoDarkMode` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `company_details`
--

INSERT INTO `company_details` (`sno`, `companyname`, `companylogo`, `companylogoDarkMode`) VALUES
(23, 'apple', 'apple.png', 'appleLogoDarkMode.png'),
(24, 'nokia', 'nokia.png', 'nokia.png'),
(25, 'google', 'googlelogo.png', 'googlelogo.png'),
(26, 'samsung', 'samsungLightModeLogo.png', 'samsungDarkLogo.png'),
(27, 'oneplus', 'onePlusLogo.png', 'onePlusLogoDarkMode.png'),
(34, 'lg', 'lglogo.png', ''),
(35, 'sony', 'SonylogoLightMode.png', 'sonylogoDarkMode.png');

-- --------------------------------------------------------

--
-- Table structure for table `logindata`
--

CREATE TABLE `logindata` (
  `sno` int(11) NOT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `fname` varchar(100) DEFAULT NULL,
  `lname` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `contactno` varchar(10) DEFAULT NULL,
  `status` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `logindata`
--

INSERT INTO `logindata` (`sno`, `username`, `password`, `fname`, `lname`, `email`, `address`, `contactno`, `status`) VALUES
(33, 'rameshgodara', '202cb962ac59075b964b07152d234b70', 'ramesh', 'godara', 'admin@gmail.com', 'jodhpur', '123', 'admin'),
(35, 'radha', 'caf1a3dfb505ffed0d024130f58c5cfa', 'radha', 'godara', 'raadhagodara@gmail.com', 'jodhpur', '9413365167', 'user'),
(36, 'shilpagodara', '02a08433d06bdd4161f27179de60584c', 'shilpa', ' godara', 'shilpa@gmail.com', 'jodhpur', '9460563158', 'user'),
(43, 'ramesh', '202cb962ac59075b964b07152d234b70', 'ramesh ', 'godara', 'iamrameshgodra@gmail.com', 'jodhpur', '9460585916', 'user'),
(44, 'radhagodara', '202cb962ac59075b964b07152d234b70', 'radha ', 'godara', 'raadhagodara@gmail.com', 'JODHPUR', '9413365167', 'user'),
(45, 'gopalsingh', '202cb962ac59075b964b07152d234b70', 'GOPAL', ' SIGNH', 'gopalsinghgodara@gmail.com', 'jodhpur', '9413845167', 'user'),
(46, '7', '8f14e45fceea167a5a36dedd4bea2543', '7', '7', '7@g.com', '', '', 'user'),
(47, '1', 'c4ca4238a0b923820dcc509a6f75849b', '1', '1', 'qwqdqwd@gmail.com', '1', '1', 'user'),
(48, 'imrgodara', '827ccb0eea8a706c4c34a16891f84e7b', 'ramesh', 'godara', 'iamrameshgodara@gmail.com', 'jodhpur', '9460585916', 'user'),
(49, '77', '28dd2c7955ce926456240b2ff0100bde', '77', '77', 'imr@gm.com', 'jdakbadb', '9460585916', 'user'),
(51, 'msdhoni', '89f0fd5c927d466d6ec9a21b9ac34ffa', 'ms', 'dhoni', 'msdhoni@gmail.com', 'ranchi', '7777777777', 'user'),
(54, '77', '77', '77', '77', NULL, '77', '77', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `mobile_details`
--

CREATE TABLE `mobile_details` (
  `sno` int(11) NOT NULL,
  `modelno` varchar(100) DEFAULT NULL,
  `companyname` varchar(100) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `ram` int(11) DEFAULT NULL,
  `rom` int(11) DEFAULT NULL,
  `camera` int(11) DEFAULT NULL,
  `image` varchar(100) DEFAULT NULL,
  `display` varchar(100) DEFAULT NULL,
  `processor` varchar(100) DEFAULT NULL,
  `os` varchar(100) DEFAULT NULL,
  `battery` int(100) DEFAULT NULL,
  `color` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mobile_details`
--

INSERT INTO `mobile_details` (`sno`, `modelno`, `companyname`, `price`, `ram`, `rom`, `camera`, `image`, `display`, `processor`, `os`, `battery`, `color`) VALUES
(10, 'Note 10 PLUS', 'samsung', 89999, 12, 512, 40, 'samsung-galaxy-note-10-plus.png', '6.8', 'octa core', 'android', 4300, 'AURA BLACK'),
(13, 'iPhone XR', 'apple', 59000, 8, 256, 19, 'iphonexr.png', '5.5', 'octa core', 'ios', 3200, 'black'),
(17, 'S9 PLUS', 'samsung', 57900, 6, 64, 24, 'samsung-galaxy-s9-plus.png', '6.5', 'octa core ', 'android', 4300, 'red'),
(22, '6.1 PLUS', 'nokia', 12400, 4, 32, 13, 'nokia61.png', '4.7', 'quad core', 'android', 3000, 'black'),
(23, 'nokia 8', 'nokia', 45000, 8, 128, 20, 'nokia8.png', '5.5', 'octa core ', 'android', 4500, 'black'),
(34, 'iPhone SE', 'apple', 42500, 4, 64, 12, 'iphonese.png', '4.7', 'A13 Bionic Chip with 3rd Gen Neural Engine Processor', 'ios', 3000, 'RED'),
(35, 'OnePlus 8', 'oneplus', 44999, 8, 128, 48, 'oneplus8.png', '6.55', 'QualcommÂ® Snapdragonâ„¢865', 'android', 4300, 'Glacial Green'),
(37, 'OnePlus 8 Pro', 'oneplus', 59999, 12, 256, 48, 'oneplus8pro.png', '6.78', 'QualcommÂ® Snapdragonâ„¢865', 'android', 4510, 'Onyx Black'),
(38, 'OnePlus 7T Pro', 'oneplus', 47999, 8, 256, 20, 'oneplus7Tpro.png', '6.67', 'QualcommÂ® Snapdragonâ„¢ 855 Plus (Octa-core, 7nm, up to 2.96 GHz)', 'android', 4085, 'Haze Blue'),
(39, 'Galaxy S20 Ultra', 'samsung', 97999, 8, 128, 108, 'in-galaxy-s20-ultra.png', '6.5', 'octa core', 'android', 5000, '  Cosmic Black'),
(40, 'iPhone 11 Pro Max', 'apple', 150800, 4, 512, 36, 'Apple-iPhone-11-Pro-Max-Midnight-Green-frontimage.png', '6.50', 'Apple A13 Bionic', 'ios', 3969, 'MIDNIGHT GREEN'),
(41, 'iPhone 11 ', 'apple', 68300, 4, 64, 24, 'Apple-iPhone-11-RED.png', '6.10', 'Apple A13 Bionic', 'ios', 3110, 'RED'),
(42, 'pixel 4', 'google', 55000, 8, 64, 17, 'google-pixel-4.png', '6.6', 'quad core', 'android', 3200, 'black'),
(48, 'V 20', 'lg', 60000, 4, 64, 20, 'lg-v20-original-imaep9sxprvqmpj5.png', '5.7', 'Octa core', 'android', 3200, 'gray'),
(58, 'XZ3', 'sony', 41000, 4, 64, 19, 'sony-xperia-xz3-5.png', '6', 'Qualcomm Snapdragon 845', 'android', 3300, 'green'),
(60, 'Galaxy Z Fold2 5G', 'samsung', 149999, 12, 256, 36, 'Samsung-Galaxy-Z-Fold2-5G-frontimage.png', '6.27', 'QualcommÂ® Snapdragonâ„¢ 865 Plus', 'android', 4500, 'MYSTIC BLACK'),
(61, 'Galaxy Z Flip 5G', 'samsung', 109000, 8, 256, 24, 'Samsung-Galaxy-Z-Flip-5G-Mystic-Bronze-frontimage.png', '6.7\" FHD', 'QualcommÂ® Snapdragonâ„¢ 865 Plus', 'android', 3300, 'MYSTIC BRONZE'),
(62, 'G8 ThinQâ„¢', 'lg', 56000, 6, 128, 24, 'lg-g8-thinq-aurora-black-1-3x.png', '6.1\" QHD+ OLED', 'Octa-Core', 'android', 3500, 'AURORA BLACK'),
(63, 'Pixel 3a XL', 'google', 35999, 4, 64, 12, 'Google-Pixel-3a-XL-Just-Black-frontimage.png', '6.0\" FHD+ OLED', 'Snapdragonâ„¢ 670', 'android', 3700, 'JUST BLACK'),
(64, 'V60 ThinQâ„¢ 5G Dual Screen', 'lg', 52999, 8, 128, 64, 'LG-V60-ThinQ-5G-Dual-Screen-Classy-Blue-frontimage.png', '6.8\" FHD+ OLED ', 'Octa-Core', 'android', 5000, 'CLASSY BLUE'),
(65, 'iPhone 11 Pro', 'apple', 75000, 4, 64, 36, 'Apple-iPhone-11-Pro-Space-Gray-frontimage.png', '5.8', 'A13 Bionic Chip', 'ios', 3000, 'SPACE GRAY');

-- --------------------------------------------------------

--
-- Table structure for table `table1`
--

CREATE TABLE `table1` (
  `Id` int(20) NOT NULL,
  `name` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `company_details`
--
ALTER TABLE `company_details`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `logindata`
--
ALTER TABLE `logindata`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `mobile_details`
--
ALTER TABLE `mobile_details`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `table1`
--
ALTER TABLE `table1`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=362;

--
-- AUTO_INCREMENT for table `company_details`
--
ALTER TABLE `company_details`
  MODIFY `sno` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `logindata`
--
ALTER TABLE `logindata`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `mobile_details`
--
ALTER TABLE `mobile_details`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT for table `table1`
--
ALTER TABLE `table1`
  MODIFY `Id` int(20) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
