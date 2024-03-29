-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: sql313.epizy.com
-- Generation Time: Nov 10, 2019 at 08:00 AM
-- Server version: 5.6.45-86.1
-- PHP Version: 7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `epiz_24433388_fulkkie23`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `categoryid` char(4) DEFAULT NULL,
  `categoryname` char(40) DEFAULT NULL,
  `description` char(40) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`categoryid`, `categoryname`, `description`) VALUES
('9001', 'Bighome', '0'),
('9002', 'Eat', '0'),
('9003', 'Medium-sized', '0'),
('9004', 'Small-sized', '0');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `cus` char(4) DEFAULT NULL,
  `company` char(40) DEFAULT NULL,
  `contact` char(40) DEFAULT NULL,
  `address` char(40) DEFAULT NULL,
  `phone` char(40) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`cus`, `company`, `contact`, `address`, `phone`) VALUES
('0104', 'Advie', '099-996', '12/04', '455-896'),
('0103', 'Banana A', '155-005', '125/05', '155-995'),
('0102', 'nation B', '124-457', '056/03', '996-96'),
('0101', 'nation A', '124-456', '057/02', '995-95');

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `empid` char(4) DEFAULT NULL,
  `empname` char(40) DEFAULT NULL,
  `empbd` char(40) DEFAULT NULL,
  `empaddress` char(40) DEFAULT NULL,
  `empphone` char(40) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`empid`, `empname`, `empbd`, `empaddress`, `empphone`) VALUES
('1001', 'asuna', '16/06/1998', '137/07', '999-999'),
(NULL, '5', '6', '7', '8'),
(NULL, 'a', 's', 'd', 'x'),
('1004', 'fon', '12/12/1998', '99/09', '998-787'),
('1003', 'non', '17/05/1998', '123/12', '666-66'),
('1002', 'karima', '27/07/07/1996', '127/02', '777-777');

-- --------------------------------------------------------

--
-- Table structure for table `myorderdetails_temp`
--

CREATE TABLE `myorderdetails_temp` (
  `orderid` int(11) DEFAULT NULL,
  `productid` int(11) DEFAULT NULL,
  `unitprice` int(11) DEFAULT NULL,
  `quantity` double NOT NULL,
  `discount` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `myorders_temp`
--

CREATE TABLE `myorders_temp` (
  `ordid` int(11) DEFAULT NULL,
  `cusid` int(11) DEFAULT NULL,
  `empid` int(11) DEFAULT NULL,
  `orddate` varchar(50) DEFAULT NULL,
  `ship` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `orderdetails`
--

CREATE TABLE `orderdetails` (
  `orderid` char(5) DEFAULT NULL,
  `productid` char(40) DEFAULT NULL,
  `unitprice` char(40) DEFAULT NULL,
  `quantity` char(40) DEFAULT NULL,
  `discount` char(40) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orderdetails`
--

INSERT INTO `orderdetails` (`orderid`, `productid`, `unitprice`, `quantity`, `discount`) VALUES
('112', '1103', '99', '99', '15'),
('111', '1102', '299', '15', '0'),
('110', '1101', '49', '50', '10'),
('114', '1102', '1', '1', '0'),
('114', '1102', '1', '1', '0'),
('114', '1102', '1', '1', '0'),
('114', '1102', '2', '15', '0'),
('114', '1102', '2', '15', '0'),
('114', '1102', '2', '15', '0'),
('114', '1103', '1', '99', '0'),
('114', '1101', '3', '10', '0'),
('114', '1101', '1', '10', '0'),
('114', '1101', '1', '10', '0'),
('115', '1104', '2', '100000', '0'),
('115', '1103', '1', '99', '0'),
('115', '1103', '1', '99', '0'),
('115', '1102', '1', '15', '0'),
('115', '1102', '1', '15', '0'),
('115', '1102', '1', '15', '0'),
('115', '1102', '1', '15', '0'),
('115', '1104', '2', '100000', '0'),
('116', '1103', '1', '99', '0'),
('116', '1103', '1', '99', '0'),
('116', '1103', '1', '99', '0'),
('116', '1103', '1', '99', '0'),
('116', '1103', '1', '99', '0'),
('116', '1103', '1', '99', '0'),
('116', '1103', '1', '99', '0'),
('116', '1103', '1', '99', '0'),
('116', '1103', '1', '99', '0'),
('116', '1103', '1', '99', '0'),
('116', '1103', '1', '99', '0'),
('116', '1103', '1', '99', '0'),
('116', '1103', '1', '99', '0'),
('116', '1103', '1', '99', '0'),
('116', '1103', '1', '99', '0'),
('116', '1103', '1', '99', '0'),
('116', '1103', '1', '99', '0'),
('116', '1103', '1', '99', '0'),
('116', '1103', '1', '99', '0'),
('116', '1103', '1', '99', '0'),
('116', '1103', '1', '99', '0'),
('116', '1103', '1', '99', '0'),
('116', '1103', '1', '99', '0'),
('116', '1103', '1', '99', '0'),
('116', '1103', '1', '99', '0'),
('116', '1103', '1', '99', '0'),
('116', '1103', '1', '99', '0'),
('116', '1103', '1', '99', '0'),
('116', '1103', '1', '99', '0'),
('116', '1103', '1', '99', '0'),
('116', '1103', '1', '99', '0'),
('116', '1103', '1', '99', '0'),
('116', '1103', '1', '99', '0'),
('116', '1103', '1', '99', '0'),
('116', '1103', '1', '99', '0'),
('116', '1103', '1', '99', '0'),
('116', '1103', '1', '99', '0'),
('116', '1103', '1', '99', '0'),
('116', '1103', '1', '99', '0'),
('116', '1103', '1', '99', '0'),
('116', '1103', '1', '99', '0'),
('116', '1103', '1', '99', '0'),
('116', '1103', '1', '99', '0'),
('116', '1103', '1', '99', '0'),
('117', '1101', '5', '49', '0'),
('117', '1101', '3', '49', '0'),
('118', '1102', '2', '15', '0'),
('118', '1102', '10', '15', '0'),
('118', '1101', '5', '49', '0'),
('118', '1103', '7', '99', '0'),
('118', '1104', '8', '100000', '0'),
('119', '1104', '4', '100000', '0'),
('119', '1101', '20', '49', '0');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `ordid` char(4) DEFAULT NULL,
  `cusid` char(40) DEFAULT NULL,
  `empid` char(40) DEFAULT NULL,
  `orddate` char(40) DEFAULT NULL,
  `ship` char(40) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`ordid`, `cusid`, `empid`, `orddate`, `ship`) VALUES
('112', '0103', '1003', '11/05/2562', '0103'),
('111', '0102', '1002', '11/05/2562', '0102'),
('110', '0101', '1001', '11/05/2562', '0101'),
('113', '0104', '1004', '11/05/2562', '0104'),
('114', '101', '101', '30.590909090833333333', '0'),
('114', '101', '101', '30.590909090833333333', '0'),
('114', '101', '1001', '30.590909090833333333', '101'),
('114', '101', '1001', '30.590909090833333333', '101'),
('114', '101', '1001', '30.590909090833333333', '101'),
('114', '101', '1001', '30.590909090833333333', '101'),
('114', '101', '1001', '30.590909090833333333', '101'),
('114', '101', '1001', '30.590909090833333333', '101'),
('114', '101', '1001', '30.590909090833333333', '101'),
('114', '101', '1001', '30.590909090833333333', '101'),
('114', '101', '1001', '30.590909090833333333', '101'),
('114', '101', '1001', '30.590909090833333333', '101'),
('114', '101', '1001', '30.590909090833333333', '101'),
('114', '101', '1001', '30.590909090833333333', '101'),
('114', '101', '1001', '30.590909090833333333', '101'),
('114', '101', '1001', '30.590909090833333333', '101'),
('114', '101', '1001', '30.590909090833333333', '101'),
('114', '101', '1001', '30.590909090833333333', '101'),
('114', '101', '1001', '30.590909090833333333', '101'),
('114', '101', '1001', '30.590909090833333333', '101'),
('114', '101', '1001', '30.590909090833333333', '101'),
('114', '101', '1001', '30.590909090833333333', '101'),
('114', '101', '1001', '30.590909090833333333', '101'),
('114', '101', '1001', '30.590909090833333333', '101'),
('114', '101', '1001', '30.590909090833333333', '101'),
('115', '101', '1001', '30.590909090833333333', '101'),
('115', '101', '1001', '30.590909090833333333', '101'),
('115', '101', '1001', '30.590909090833333333', '101'),
('115', '101', '1001', '30.590909090833333333', '101'),
('115', '101', '1001', '30.590909090833333333', '101'),
('115', '101', '1001', '30.590909090833333333', '101'),
('115', '101', '1001', '30.590909090833333333', '101'),
('115', '101', '1001', '30.590909090833333333', '101'),
('115', '101', '1001', '30.590909090833333333', '101'),
('115', '101', '1001', '30.590909090833333333', '101'),
('115', '101', '1001', '30.590909090833333333', '101'),
('115', '101', '1001', '30.590909090833333333', '101'),
('116', '101', '1001', '30.590909090833333333', '102'),
('116', '101', '1001', '30.590909090833333333', '102'),
('116', '101', '1001', '30.590909090833333333', '102'),
('116', '101', '1001', '30.590909090833333333', '102'),
('116', '101', '1001', '30.590909090833333333', '102'),
('116', '101', '1001', '30.590909090833333333', '102'),
('116', '101', '1001', '30.590909090833333333', '102'),
('116', '101', '1001', '30.590909090833333333', '102'),
('116', '101', '1001', '30.590909090833333333', '102'),
('116', '101', '1001', '30.590909090833333333', '102'),
('116', '101', '1001', '30.590909090833333333', '102'),
('116', '101', '1001', '30.590909090833333333', '102'),
('116', '101', '1001', '30.590909090833333333', '102'),
('116', '101', '1001', '30.590909090833333333', '102'),
('116', '101', '1001', '30.590909090833333333', '102'),
('116', '101', '1001', '30.590909090833333333', '102'),
('116', '101', '1001', '30.590909090833333333', '102'),
('116', '101', '1001', '30.590909090833333333', '102'),
('116', '101', '1001', '30.590909090833333333', '102'),
('116', '101', '1001', '30.590909090833333333', '102'),
('116', '101', '1001', '30.590909090833333333', '102'),
('116', '101', '1001', '30.590909090833333333', '102'),
('116', '101', '1001', '30.590909090833333333', '102'),
('116', '101', '1001', '30.590909090833333333', '102'),
('116', '101', '1001', '30.590909090833333333', '102'),
('116', '101', '1001', '30.590909090833333333', '102'),
('116', '101', '1001', '30.590909090833333333', '102'),
('116', '101', '1001', '30.590909090833333333', '102'),
('116', '101', '1001', '30.590909090833333333', '102'),
('116', '101', '1001', '30.590909090833333333', '102'),
('116', '101', '1001', '30.590909090833333333', '102'),
('116', '101', '1001', '30.590909090833333333', '102'),
('116', '101', '1001', '30.590909090833333333', '102'),
('116', '101', '1001', '30.590909090833333333', '102'),
('116', '101', '1001', '30.590909090833333333', '102'),
('116', '101', '1001', '30.590909090833333333', '102'),
('116', '101', '1001', '30.590909090833333333', '102'),
('116', '101', '1001', '30.590909090833333333', '102'),
('116', '101', '1001', '30.590909090833333333', '102'),
('116', '101', '1001', '30.590909090833333333', '102'),
('116', '101', '1001', '30.590909090833333333', '102'),
('116', '101', '1001', '30.590909090833333333', '102'),
('116', '101', '1001', '30.590909090833333333', '102'),
('116', '101', '1001', '30.590909090833333333', '102'),
('117', '101', '1001', '30.590909090833333333', '101'),
('118', '101', '1001', '26.220779220714285714', '101'),
('118', '101', '1001', '18.354545454500000000', '101'),
('119', '102', '1002', '18.354545454500000000', '102');

-- --------------------------------------------------------

--
-- Table structure for table `productstest`
--

CREATE TABLE `productstest` (
  `PID` char(4) DEFAULT NULL,
  `Pname` char(40) DEFAULT NULL,
  `SupID` char(40) DEFAULT NULL,
  `QPU` char(40) DEFAULT NULL,
  `UP` char(40) DEFAULT NULL,
  `cateid` varchar(20) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `productstest`
--

INSERT INTO `productstest` (`PID`, `Pname`, `SupID`, `QPU`, `UP`, `cateid`) VALUES
('1104', 'Home', '0104', '988', '100000', '9001'),
('1101', 'Cake', '0101', '9967', '49', '9002'),
('1102', 'Milk', '0102', '988', '15', '9003'),
('1103', 'Toys', '0103', '993', '99', '9004');

-- --------------------------------------------------------

--
-- Table structure for table `shippers`
--

CREATE TABLE `shippers` (
  `shid` char(4) DEFAULT NULL,
  `comname` char(40) DEFAULT NULL,
  `phone` char(40) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shippers`
--

INSERT INTO `shippers` (`shid`, `comname`, `phone`) VALUES
('0104', 'BurinCups', '6698'),
('0103', 'NonCmd', '8899'),
('0102', 'CafeZx', '7789'),
('0101', 'NationA', '9989');

-- --------------------------------------------------------

--
-- Table structure for table `suppliers`
--

CREATE TABLE `suppliers` (
  `supid` char(4) DEFAULT NULL,
  `comname` char(40) DEFAULT NULL,
  `address` char(40) DEFAULT NULL,
  `post` char(40) DEFAULT NULL,
  `phone` char(40) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `suppliers`
--

INSERT INTO `suppliers` (`supid`, `comname`, `address`, `post`, `phone`) VALUES
('0101', 'burina', '102/02', '52000', '026-999'),
('0102', 'jadid', '99/09', '55120', '062-879');

-- --------------------------------------------------------

--
-- Table structure for table `table1`
--

CREATE TABLE `table1` (
  `ID` int(11) NOT NULL,
  `USER` varchar(50) NOT NULL,
  `PASS` varchar(50) DEFAULT NULL,
  `NUMH` varchar(13) DEFAULT NULL,
  `SEX` varchar(50) DEFAULT NULL,
  `FULLNAME` varchar(100) DEFAULT NULL,
  `PHONENUM` varchar(13) DEFAULT NULL,
  `EMAIL` varchar(50) DEFAULT NULL,
  `STATUS` varchar(1) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `table1`
--

INSERT INTO `table1` (`ID`, `USER`, `PASS`, `NUMH`, `SEX`, `FULLNAME`, `PHONENUM`, `EMAIL`, `STATUS`) VALUES
(1, 'karima', '1742', '1100702727188', 'male', 'วชริ', '0826197995', 'X@hotmail.com', '2'),
(2, 'auns', '1234', '1100702727188', 'female', 'S', '0826197556', 'D@hotmail.com', '1'),
(4, 'asuna', '1234', '100702727123', 'female', 'AAA', 'AAA', 'A@hotmail.com', '1'),
(5, 'karima2', '1234', '110072727188', 'male', 'ZZZ', 'ZZ', 'Z@hotmail.com', '2'),
(6, 'yugi', '55120', '1100702727188', 'female', 'A', '0826197995', '0826197995', '1'),
(8, 'asss', '1234', '1155050011452', 'female', '111', '111', '11', '2'),
(9, 'aa', '123456', '1509966002999', 'female', 'fearn', '0987646992', 'Fearn-a27@hotmail.com', '1');

-- --------------------------------------------------------

--
-- Table structure for table `table2`
--

CREATE TABLE `table2` (
  `ID2` int(11) NOT NULL,
  `HNO` varchar(50) DEFAULT NULL,
  `MU` varchar(50) DEFAULT NULL,
  `VILNAME` varchar(50) DEFAULT NULL,
  `ROAD` varchar(50) DEFAULT NULL,
  `DIST` varchar(50) DEFAULT NULL,
  `PARISH` varchar(50) DEFAULT NULL,
  `PROVINCE` varchar(50) DEFAULT NULL,
  `POSTCODE` varchar(5) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `table2`
--

INSERT INTO `table2` (`ID2`, `HNO`, `MU`, `VILNAME`, `ROAD`, `DIST`, `PARISH`, `PROVINCE`, `POSTCODE`) VALUES
(1, '1742', '2', 'ไม่บอก', 'ไม่บอก', 'ไม่บอก', 'ไม่บอก', 'ไม่บอก', '52000'),
(2, '137', '2', 'No', 'No', 'No', 'NoNNNNNNNNN', 'No', '55120'),
(4, '1', '1', '1', '---', '1', '1', '1', '55120'),
(5, '543', '7', 'ไม่รู้', '150', '-', '-', '-', '55180'),
(6, '785', '0826197995', '4', '-', 'ไม่รู้', 'ไม่รู้', 'ไม่รู้', '52000'),
(8, '1', '1', '', '', '', '', '1', '1'),
(9, '', '', '', '87 หมู่1 ต.ไชยวัฒนา อ.ปัว จ.น่าน', '', '', 'น่าน', '55120');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `table1`
--
ALTER TABLE `table1`
  ADD PRIMARY KEY (`ID`,`USER`);

--
-- Indexes for table `table2`
--
ALTER TABLE `table2`
  ADD PRIMARY KEY (`ID2`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `table1`
--
ALTER TABLE `table1`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `table2`
--
ALTER TABLE `table2`
  MODIFY `ID2` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
