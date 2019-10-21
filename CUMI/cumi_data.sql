-- phpMyAdmin SQL Dump
-- version 2.11.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 29, 2009 at 05:53 AM
-- Server version: 5.0.51
-- PHP Version: 5.2.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Database: `cumi_data`
--

-- --------------------------------------------------------

--
-- Table structure for table `marks`
--

CREATE TABLE IF NOT EXISTS `marks` (
  `comp_id` varchar(30) NOT NULL,
  `MarkOption` varchar(12) default NULL,
  `CatID` varchar(10) NOT NULL,
  `CatCode` varchar(9) default NULL,
  `Marks` double default NULL,
  `Year` varchar(20) NOT NULL,
  `Date` datetime NOT NULL,
  `UserID` varchar(10) NOT NULL,
  `Upd` varchar(5) NOT NULL,
  KEY `CusNo` (`MarkOption`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `marks`
--

INSERT INTO `marks` (`comp_id`, `MarkOption`, `CatID`, `CatCode`, `Marks`, `Year`, `Date`, `UserID`, `Upd`) VALUES
('5', '01011', '0101', '1', 4, '2009', '2009-01-29 02:01:40', '-', '-'),
('5', '01021', '0102', '1', 4, '2009', '2009-01-29 02:01:40', '-', '-'),
('5', '01031', '0103', '1', 4, '2009', '2009-01-29 02:01:40', '-', '-'),
('5', '01041', '0104', '1', 4, '2009', '2009-01-29 02:01:40', '-', '-'),
('5', '01051', '0105', '1', 4, '2009', '2009-01-29 02:01:40', '-', '-'),
('5', '01011', '0101', '1', 4, '2009', '2009-01-29 02:01:00', '-', '-'),
('5', '01021', '0102', '1', 4, '2009', '2009-01-29 02:01:00', '-', '-'),
('5', '01031', '0103', '1', 4, '2009', '2009-01-29 02:01:00', '-', '-'),
('5', '01041', '0104', '1', 4, '2009', '2009-01-29 02:01:00', '-', '-'),
('5', '01051', '0105', '1', 4, '2009', '2009-01-29 02:01:00', '-', '-'),
('5', '02011', '0201', '2', 4, '2009', '2009-01-29 02:01:25', '-', '-'),
('5', '02021', '0202', '2', 4, '2009', '2009-01-29 02:01:25', '-', '-'),
('5', '02031', '0203', '2', 4, '2009', '2009-01-29 02:01:25', '-', '-'),
('5', '02041', '0204', '2', 4, '2009', '2009-01-29 02:01:25', '-', '-'),
('5', '02051', '0205', '2', 4, '2009', '2009-01-29 02:01:25', '-', '-'),
('5', '03011', '0301', '3', 4, '2009', '2009-01-29 02:01:42', '-', '-'),
('5', '03021', '0302', '3', 4, '2009', '2009-01-29 02:01:42', '-', '-'),
('5', '03031', '0303', '3', 4, '2009', '2009-01-29 02:01:42', '-', '-'),
('5', '02011', '0201', '2', 4, '2009', '2009-01-29 02:01:34', '-', '-'),
('5', '02021', '0202', '2', 2, '2009', '2009-01-29 02:01:34', '-', '-'),
('5', '02031', '0203', '2', 3, '2009', '2009-01-29 02:01:34', '-', '-'),
('5', '02041', '0204', '2', 2, '2009', '2009-01-29 02:01:34', '-', '-'),
('5', '02051', '0205', '2', 3, '2009', '2009-01-29 02:01:34', '-', '-'),
('5', '04011', '0401', '4', 4, '2009', '2009-01-29 02:01:17', '-', '-'),
('5', '04021', '0402', '4', 4, '2009', '2009-01-29 02:01:17', '-', '-'),
('5', '04011', '0401', '4', 4, '2009', '2009-01-29 02:01:18', '-', '-'),
('5', '04021', '0402', '4', 4, '2009', '2009-01-29 02:01:18', '-', '-'),
('5', '02011', '0201', '2', 2, '2009', '2009-01-29 02:01:43', '-', '-'),
('5', '02021', '0202', '2', 3, '2009', '2009-01-29 02:01:43', '-', '-'),
('5', '02031', '0203', '2', 3, '2009', '2009-01-29 02:01:43', '-', '-'),
('5', '02041', '0204', '2', 4, '2009', '2009-01-29 02:01:43', '-', '-'),
('5', '02051', '0205', '2', 2, '2009', '2009-01-29 02:01:43', '-', '-'),
('5', '01011', '0101', '1', 4, '2008', '2009-01-29 02:01:34', '-', '-'),
('5', '01021', '0102', '1', 1, '2008', '2009-01-29 02:01:34', '-', '-'),
('5', '01031', '0103', '1', 2, '2008', '2009-01-29 02:01:34', '-', '-'),
('5', '01041', '0104', '1', 4, '2008', '2009-01-29 02:01:34', '-', '-'),
('5', '01051', '0105', '1', 2, '2008', '2009-01-29 02:01:34', '-', '-'),
('5', '04011', '0401', '4', 4, '2008', '2009-01-29 02:01:08', '-', '-'),
('5', '04021', '0402', '4', 4, '2008', '2009-01-29 02:01:08', '-', '-');

-- --------------------------------------------------------

--
-- Table structure for table `register_data`
--

CREATE TABLE IF NOT EXISTS `register_data` (
  `reg_id` int(11) NOT NULL auto_increment,
  `country_name` varchar(100) NOT NULL,
  `district` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `country` varchar(100) NOT NULL,
  `reg_no` varchar(50) NOT NULL,
  `phone_no` int(11) NOT NULL,
  `fax` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `pass` varchar(100) NOT NULL,
  PRIMARY KEY  (`reg_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `register_data`
--

INSERT INTO `register_data` (`reg_id`, `country_name`, `district`, `name`, `address`, `city`, `country`, `reg_no`, `phone_no`, `fax`, `email`, `pass`) VALUES
(1, 'Thailand', 'Bangkok', 'ABC Credit Union', '4', '5', '6', '100', 7, 8, '9', '202cb962ac59075b964b07152d234b70'),
(3, 'Srilanka', 'Galle', 'Service', 'Wasana', 'Godakanda', 'Galle', '102', 715281452, 715281452, 'upulsuresh@gmail.com', '202cb962ac59075b964b07152d234b70'),
(4, 'India', 'New Dilli', 'ABC CREDIT', '123', 'New', 'India', '100', 123123, 123123, 'upulsuresh@gmail.com', '202cb962ac59075b964b07152d234b70'),
(5, 'Sri Lanka', 'Galle', 'Upul Kariyawasam', 'Wasana', 'Godakanda', 'Galle', '860240742V', 715281452, 715281452, 'upulsuresh@gmail.com', '202cb962ac59075b964b07152d234b70');

-- --------------------------------------------------------

--
-- Table structure for table `s_category`
--

CREATE TABLE IF NOT EXISTS `s_category` (
  `CatID` varchar(5) NOT NULL,
  `CatCode` varchar(2) default NULL,
  `CatProsp` varchar(100) default NULL,
  `Category` varchar(200) default NULL,
  `SubCat` varchar(200) default NULL,
  `Des` varchar(250) default NULL,
  PRIMARY KEY  (`CatID`),
  KEY `CatCode` (`CatCode`),
  KEY `CatID` (`CatID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `s_category`
--

INSERT INTO `s_category` (`CatID`, `CatCode`, `CatProsp`, `Category`, `SubCat`, `Des`) VALUES
('0101', '1', 'Home ', 'Home Status Informations', 'Ownership', NULL),
('0102', '1', 'Home ', 'Home Status Informations', 'Roof', NULL),
('0103', '1', 'Home ', 'Home Status Informations', 'Wall', NULL),
('0104', '1', 'Home ', 'Home Status Informations', 'Floor', NULL),
('0105', '1', 'Home ', 'Home Status Informations', 'Fixed Asset', NULL),
('0201', '2', 'Family', 'Family and Health Informations', 'Children Education', NULL),
('0202', '2', 'Family', 'Family and Health Informations', 'Medical ', NULL),
('0203', '2', 'Family', 'Family and Health Informations', 'Drinking  water', NULL),
('0204', '2', 'Family', 'Family and Health Informations', 'Toilet facilities ', NULL),
('0205', '2', 'Family', 'Family and Health Informations', 'Children Cloth', NULL),
('0301', '3', 'Financial', 'Financial Resources', 'Out side loan For providential', NULL),
('0302', '3', 'Financial', 'Financial Resources', 'Productive for  loan', NULL),
('0303', '3', 'Financial', 'Financial Resources', 'Family Income', NULL),
('0401', '4', 'Social', 'Social Involments', 'Participation in the community', NULL),
('0402', '4', 'Social', 'Social Involments', 'Participation  in Planning', NULL),
('0501', '5', 'Occupation', 'Occupation and Business', 'Main source of income', NULL),
('0502', '5', 'Occupation', 'Occupation and Business', 'Main source of income', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `s_indicators`
--

CREATE TABLE IF NOT EXISTS `s_indicators` (
  `MarkOption` varchar(7) NOT NULL,
  `CatID` varchar(5) default NULL,
  `OptionName` varchar(250) default NULL,
  `Marks` double default NULL,
  `Des` varchar(255) default NULL,
  PRIMARY KEY  (`MarkOption`),
  KEY `{1AA13457-EEA6-4AF3-AC1D-7E7EA0333A19}` (`CatID`),
  KEY `CatID` (`CatID`),
  KEY `IndID` (`MarkOption`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `s_indicators`
--

INSERT INTO `s_indicators` (`MarkOption`, `CatID`, `OptionName`, `Marks`, `Des`) VALUES
('01011', '0101', 'Illegal', 4, NULL),
('01012', '0101', 'Relative', 3, NULL),
('01013', '0101', 'Rent', 2, NULL),
('01014', '0101', 'Own property', 1, NULL),
('01021', '0102', 'Leaves', 4, NULL),
('01022', '0102', 'Tin', 3, NULL),
('01023', '0102', 'Sheet', 2, NULL),
('01024', '0102', 'Modern tile', 1, NULL),
('01031', '0103', 'Leaves', 4, NULL),
('01032', '0103', 'Wood', 3, NULL),
('01033', '0103', 'Mud wall', 2, NULL),
('01034', '0103', 'Bricks', 1, NULL),
('01041', '0104', 'Non', 4, NULL),
('01042', '0104', 'Mud', 3, NULL),
('01043', '0104', 'Cement', 2, NULL),
('01044', '0104', 'Floor tile', 1, NULL),
('01051', '0105', 'Not enough  house hold equipment  for day to day family', 4, NULL),
('01052', '0105', 'Has only basic House hold equipment', 3, NULL),
('01053', '0105', 'Some what More than Basic equipment tin  home ', 2, NULL),
('01054', '0105', 'Well enough house hold equipments', 1, NULL),
('02011', '0201', 'No school', 4, NULL),
('02012', '0201', 'Drop out school', 3, NULL),
('02013', '0201', 'Irregular school', 2, NULL),
('02014', '0201', 'Regular school', 1, NULL),
('02021', '0202', 'No access', 4, NULL),
('02022', '0202', 'Only some  time', 3, NULL),
('02023', '0202', 'Only serious illness', 2, NULL),
('02024', '0202', 'Regular access', 1, NULL),
('02031', '0203', 'No access', 4, NULL),
('02032', '0203', 'Access illegal', 3, NULL),
('02033', '0203', 'Access only specific time', 2, NULL),
('02034', '0203', 'Regular access drinking water', 1, NULL),
('02041', '0204', 'No toilet', 4, NULL),
('02042', '0204', 'Use others toilet', 3, NULL),
('02043', '0204', 'Has toilet not hygienic', 2, NULL),
('02044', '0204', 'Has toilet with proper hygienic', 1, NULL),
('02051', '0205', 'Not  buy at all', 4, NULL),
('02052', '0205', 'Buy at least once a year', 3, NULL),
('02053', '0205', 'Buy Occasionally', 2, NULL),
('02054', '0205', 'Buy regularly l', 1, NULL),
('03011', '0301', 'Regular loan from money lender ', 4, NULL),
('03012', '0301', 'Time to time From money lender', 3, NULL),
('03013', '0301', 'Only emergency From money lender', 2, NULL),
('03014', '0301', 'Loan  from only  From CUs', 1, NULL),
('03021', '0302', 'Regular loan from money lender ', 4, NULL),
('03022', '0302', 'Time to time From money lender', 3, NULL),
('03023', '0302', 'Only emergency From money lender', 2, NULL),
('03024', '0302', 'Loan  from only  From CUs', 1, NULL),
('03031', '0303', 'No regular income', 4, NULL),
('03032', '0303', 'Have income but no savings', 3, NULL),
('03033', '0303', 'Have regular income and savings  not enough  for emergency', 2, NULL),
('03034', '0303', 'Regular  income and enough savings for  emergency', 1, NULL),
('04011', '0401', 'Not at  all', 4, NULL),
('04012', '0401', 'Participate  SHG group', 3, NULL),
('04013', '0401', 'Attend the AGM  CU', 2, NULL),
('04014', '0401', 'Elected as committee or board  of CUs', 1, NULL),
('04021', '0402', 'Not at all', 4, NULL),
('04022', '0402', 'Give some idea on SHG group Activities  ', 3, NULL),
('04023', '0402', 'Express the opinion and idea to AGM CU', 2, NULL),
('04024', '0402', 'Lead the planning committee of CU  of CUs', 1, NULL),
('05011', '0501', 'Unskilled labor no regular job', 4, NULL),
('05012', '0501', 'Unskilled labor has  job  not permanent ', 3, NULL),
('05013', '0501', 'Skilled labor has  job  not permanent  ', 2, NULL),
('05014', '0501', 'Skilled labor has permanent  job', 1, NULL),
('05021', '0502', 'No any business no cash income ', 4, NULL),
('05022', '0502', 'Has business in  not  regular  ', 3, NULL),
('05023', '0502', 'Has own business  self employment', 2, NULL),
('05024', '0502', 'Has own business  work more than one person', 1, NULL);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `s_indicators`
--
ALTER TABLE `s_indicators`
  ADD CONSTRAINT `s_indicators_ibfk_1` FOREIGN KEY (`CatID`) REFERENCES `s_category` (`CatID`) ON UPDATE CASCADE;
