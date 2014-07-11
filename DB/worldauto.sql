-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 11, 2014 at 08:03 AM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `worldauto`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `cat_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  PRIMARY KEY (`cat_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=42 ;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cat_id`, `name`, `type`) VALUES
(1, 'Accessories Vendor', 'Automobile'),
(2, 'Alternate Fuel Technology', 'Automobile'),
(3, 'Auto Component Dealer/ Distributors', 'Automobile'),
(4, 'Auto Components Manufacturers', 'Automobile'),
(5, 'Auto Industry Alumni', 'Automobile'),
(6, 'Auto Industry Aspirant', 'Automobile'),
(7, 'Auto Lubricants & Consumables', 'Automobile'),
(8, 'Auto Parts Distributor/Dealer', 'Automobile'),
(9, 'Auto Parts Manufacturers', 'Automobile'),
(10, 'Automobile Associations / Bodies', 'Automobile'),
(11, 'Automobile Dealer Aspirant', 'Automobile'),
(12, 'Automobile Dealers', 'Automobile'),
(13, 'Automobile Manufacturers', 'Automobile'),
(14, 'Business Research', 'Automobile'),
(15, 'Motor Racing', 'Automobile'),
(16, 'Multi Brand Bike Service Network', 'Automobile'),
(17, 'Multi Brand Car Service Network', 'Automobile'),
(18, 'Used/Pre Owned Car Business', 'Automobile'),
(19, 'Vehicle Equipment', 'Automobile'),
(20, 'Vehicle Testing', 'Automobile'),
(21, 'Vehicle Tools', 'Automobile'),
(22, 'Advertising', 'goods and service providers'),
(23, 'CRM', 'goods and service providers'),
(24, 'Consultants', 'goods and service providers'),
(25, 'Direct Marketing', 'goods and service providers'),
(26, 'Event Management', 'goods and service providers'),
(27, 'Finance Sector', 'goods and service providers'),
(28, 'IT', 'goods and service providers'),
(29, 'Logistics Service Provider', 'goods and service providers'),
(30, 'Media/Press', 'goods and service providers'),
(31, 'Public Relations', 'goods and service providers'),
(32, 'Quality Certification', 'goods and service providers'),
(33, 'Research Companies', 'goods and service providers'),
(34, 'Training Service Provider', 'goods and service providers'),
(35, 'Energy', 'goods and service providers'),
(36, 'Lubricants', 'goods and service providers'),
(37, 'Raw Materials and commodity suppliers', 'goods and service providers'),
(38, 'Electrical Equipment', 'goods and service providers'),
(39, 'Electronic components', 'goods and service providers'),
(40, 'Environment', 'goods and service providers'),
(41, 'Mines and Metallurgy', 'goods and service providers');

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE IF NOT EXISTS `countries` (
  `cid` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`cid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=198 ;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`cid`, `name`) VALUES
(1, '--SELECT--'),
(2, 'Afghanistan'),
(3, 'Albania'),
(4, 'Algeria'),
(5, 'Andorra'),
(6, 'Angola'),
(7, 'Antigua & Deps'),
(8, 'Argentina'),
(9, 'Armenia'),
(10, 'Australia'),
(11, 'Austria'),
(12, 'Azerbaijan'),
(13, 'Bahamas'),
(14, 'Bahrain'),
(15, 'Bangladesh'),
(16, 'Barbados'),
(17, 'Belarus'),
(18, 'Belgium'),
(19, 'Belize'),
(20, 'Benin'),
(21, 'Bhutan'),
(22, 'Bolivia'),
(23, 'Bosnia Herzegovina'),
(24, 'Botswana'),
(25, 'Brazil'),
(26, 'Brunei'),
(27, 'Bulgaria'),
(28, 'Burkina'),
(29, 'Burundi'),
(30, 'Cambodia'),
(31, 'Cameroon'),
(32, 'Canada'),
(33, 'Cape Verde'),
(34, 'Central African Rep'),
(35, 'Chad'),
(36, 'Chile'),
(37, 'China'),
(38, 'Colombia'),
(39, 'Comoros'),
(40, 'Congo'),
(41, 'Congo {Democratic Rep}'),
(42, 'Costa Rica'),
(43, 'Croatia'),
(44, 'Cuba'),
(45, 'Cyprus'),
(46, 'Czech Republic'),
(47, 'Denmark'),
(48, 'Djibouti'),
(49, 'Dominica'),
(50, 'Dominican Republic'),
(51, 'East Timor'),
(52, 'Ecuador'),
(53, 'Egypt'),
(54, 'El Salvador'),
(55, 'Equatorial Guinea'),
(56, 'Eritrea'),
(57, 'Estonia'),
(58, 'Ethiopia'),
(59, 'Fiji'),
(60, 'Finland'),
(61, 'France'),
(62, 'Gabon'),
(63, 'Gambia'),
(64, 'Georgia'),
(65, 'Germany'),
(66, 'Ghana'),
(67, 'Greece'),
(68, 'Grenada'),
(69, 'Guatemala'),
(70, 'Guinea'),
(71, 'Guinea-Bissau'),
(72, 'Guyana'),
(73, 'Haiti'),
(74, 'Honduras'),
(75, 'Hungary'),
(76, 'Iceland'),
(77, 'India'),
(78, 'Indonesia'),
(79, 'Iran'),
(80, 'Iraq'),
(81, 'Ireland {Republic}'),
(82, 'Israel'),
(83, 'Italy'),
(84, 'Ivory Coast'),
(85, 'Jamaica'),
(86, 'Japan'),
(87, 'Jordan'),
(88, 'Kazakhstan'),
(89, 'Kenya'),
(90, 'Kiribati'),
(91, 'Korea North'),
(92, 'Korea South'),
(93, 'Kosovo'),
(94, 'Kuwait'),
(95, 'Kyrgyzstan'),
(96, 'Laos'),
(97, 'Latvia'),
(98, 'Lebanon'),
(99, 'Lesotho'),
(100, 'Liberia'),
(101, 'Libya'),
(102, 'Liechtenstein'),
(103, 'Lithuania'),
(104, 'Luxembourg'),
(105, 'Macedonia'),
(106, 'Madagascar'),
(107, 'Malawi'),
(108, 'Malaysia'),
(109, 'Maldives'),
(110, 'Mali'),
(111, 'Malta'),
(112, 'Marshall Islands'),
(113, 'Mauritania'),
(114, 'Mauritius'),
(115, 'Mexico'),
(116, 'Micronesia'),
(117, 'Moldova'),
(118, 'Monaco'),
(119, 'Mongolia'),
(120, 'Montenegro'),
(121, 'Morocco'),
(122, 'Mozambique'),
(123, 'Myanmar, {Burma}'),
(124, 'Namibia'),
(125, 'Nauru'),
(126, 'Nepal'),
(127, 'Netherlands'),
(128, 'New Zealand'),
(129, 'Nicaragua'),
(130, 'Niger'),
(131, 'Nigeria'),
(132, 'Norway'),
(133, 'Oman'),
(134, 'Pakistan'),
(135, 'Palau'),
(136, 'Panama'),
(137, 'Papua New Guinea'),
(138, 'Paraguay'),
(139, 'Peru'),
(140, 'Philippines'),
(141, 'Poland'),
(142, 'Portugal'),
(143, 'Qatar'),
(144, 'Romania'),
(145, 'Russian Federation'),
(146, 'Rwanda'),
(147, 'St Kitts & Nevis'),
(148, 'St Lucia'),
(149, 'Saint Vincent & the Grenadines'),
(150, 'Samoa'),
(151, 'San Marino'),
(152, 'Sao Tome & Principe'),
(153, 'Saudi Arabia'),
(154, 'Senegal'),
(155, 'Serbia'),
(156, 'Seychelles'),
(157, 'Sierra Leone'),
(158, 'Singapore'),
(159, 'Slovakia'),
(160, 'Slovenia'),
(161, 'Solomon Islands'),
(162, 'Somalia'),
(163, 'South Africa'),
(164, 'South Sudan'),
(165, 'Spain'),
(166, 'Sri Lanka'),
(167, 'Sudan'),
(168, 'Suriname'),
(169, 'Swaziland'),
(170, 'Sweden'),
(171, 'Switzerland'),
(172, 'Syria'),
(173, 'Taiwan'),
(174, 'Tajikistan'),
(175, 'Tanzania'),
(176, 'Thailand'),
(177, 'Togo'),
(178, 'Tonga'),
(179, 'Trinidad & Tobago'),
(180, 'Tunisia'),
(181, 'Turkey'),
(182, 'Turkmenistan'),
(183, 'Tuvalu'),
(184, 'Uganda'),
(185, 'Ukraine'),
(186, 'United Arab Emirates'),
(187, 'United Kingdom'),
(188, 'United States'),
(189, 'Uruguay'),
(190, 'Uzbekistan'),
(191, 'Vanuatu'),
(192, 'Vatican City'),
(193, 'Venezuela'),
(194, 'Vietnam'),
(195, 'Yemen'),
(196, 'Zambia'),
(197, 'Zimbabwe');

-- --------------------------------------------------------

--
-- Table structure for table `discussion_comments`
--

CREATE TABLE IF NOT EXISTS `discussion_comments` (
  `comment_id` int(11) NOT NULL,
  `dis_id` int(11) NOT NULL,
  `comment` varchar(255) NOT NULL,
  `timestamp` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `vote` int(11) NOT NULL,
  `superlike` int(11) NOT NULL,
  `spam` int(11) NOT NULL,
  PRIMARY KEY (`comment_id`),
  UNIQUE KEY `dis_id` (`dis_id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `discussion_questions`
--

CREATE TABLE IF NOT EXISTS `discussion_questions` (
  `dis_id` int(11) NOT NULL AUTO_INCREMENT,
  `question` varchar(255) NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  `category` varchar(255) NOT NULL,
  `subcat` varchar(255) NOT NULL,
  `timestamp` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `vote` int(11) NOT NULL DEFAULT '0',
  `superlike` int(11) NOT NULL DEFAULT '0',
  `spam` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`dis_id`),
  UNIQUE KEY `email` (`email`),
  UNIQUE KEY `dis_id` (`dis_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE IF NOT EXISTS `jobs` (
  `job_id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) NOT NULL,
  `job_title` varchar(255) NOT NULL,
  `description` varchar(2550) DEFAULT NULL,
  `tagline` varchar(255) DEFAULT NULL,
  `last_date` varchar(255) DEFAULT NULL,
  `location` varchar(255) DEFAULT NULL,
  `stipend` varchar(255) DEFAULT NULL,
  `company_name` varchar(255) DEFAULT NULL,
  `company_website` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`job_id`),
  KEY `email` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `job_applicants`
--

CREATE TABLE IF NOT EXISTS `job_applicants` (
  `job_applicant_id` int(11) NOT NULL,
  `job_id` int(11) NOT NULL,
  `applicant_email` varchar(255) NOT NULL,
  PRIMARY KEY (`job_applicant_id`),
  UNIQUE KEY `job_id` (`job_id`),
  UNIQUE KEY `applicant_email` (`applicant_email`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `market_seller`
--

CREATE TABLE IF NOT EXISTS `market_seller` (
  `ad_id` int(11) NOT NULL,
  `ad_category` varchar(255) NOT NULL,
  `ad_subcategory` varchar(255) NOT NULL,
  `ad_title` varchar(255) NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  `seller_name` varchar(255) DEFAULT NULL,
  `seller_address` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `seller_phone` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`ad_id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE IF NOT EXISTS `profile` (
  `sno` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) NOT NULL,
  `dob` varchar(255) DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
  `gender` varchar(255) DEFAULT NULL,
  `mobile` varchar(255) DEFAULT NULL,
  `job_status` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`sno`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `profile`
--

INSERT INTO `profile` (`sno`, `email`, `dob`, `country`, `gender`, `mobile`, `job_status`) VALUES
(1, 'shrutibansal.student@gmail.com', '08/21/1990', 'usa', 'female', '0987654321', NULL),
(4, 'shruti@trial.com', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE IF NOT EXISTS `register` (
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL DEFAULT '',
  `password` varchar(255) NOT NULL,
  `sendupdates` varchar(255) NOT NULL DEFAULT 'false',
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`name`, `email`, `password`, `sendupdates`) VALUES
('', '', '', ''),
('Shruti', 'abc@gmail.com', '8947893', 'true'),
('', 'shruti@trial.com', 'trial.com', 'true'),
('shruti bansal', 'shrutibansal.student@gmail.com', 'try123', 'true'),
('trial', 'trial@mail.com', 'trial', 'false');

-- --------------------------------------------------------

--
-- Table structure for table `subcategory`
--

CREATE TABLE IF NOT EXISTS `subcategory` (
  `subcat_id` int(11) NOT NULL AUTO_INCREMENT,
  `cat_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`subcat_id`),
  KEY `cat_id` (`cat_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=361 ;

--
-- Dumping data for table `subcategory`
--

INSERT INTO `subcategory` (`subcat_id`, `cat_id`, `name`) VALUES
(1, 4, 'Automotive Chromed Trims'),
(2, 4, 'Al. DieCast,Prescious Components'),
(3, 4, 'Aluminum Heat Exchangers'),
(4, 4, 'Auto Seats,Door Trims'),
(5, 4, 'Automotive Components & Systems'),
(6, 4, 'Automotive Control Cable'),
(7, 4, 'Automotive Horns,Lamps'),
(8, 4, 'Automotive Iron & Aluminium Casting'),
(9, 4, 'Automative Safety System'),
(10, 4, 'Automotive Sheet Metal Component'),
(11, 4, 'Bushes'),
(12, 4, 'Chassis'),
(13, 4, 'Clutch Plate,Clutch Cover Assembler'),
(14, 4, 'Clutch Plate,Automatic Clutches'),
(15, 4, 'Components in Gray Cast Iron'),
(16, 4, 'Die Casting,Forging'),
(17, 4, 'Design,Manufacturing of Hydralucic Brakes'),
(18, 4, 'Differential Parts'),
(19, 4, 'Embelems & Wheel Rims Cover'),
(20, 4, 'Engine Valves'),
(21, 4, 'Fasteners'),
(22, 4, 'Filters & Filteration System'),
(23, 4, 'Forging Industries'),
(24, 4, 'Machined Grey & Ductile Iron Casting'),
(25, 4, 'Moulds & Dies,System Assemblies'),
(26, 4, 'Moulds & Dies'),
(27, 4, 'Plastic Injection Moulded Component'),
(28, 4, 'Rubber Parts'),
(29, 4, 'Sheet Metal Automotive Components'),
(30, 4, 'Services'),
(31, 4, 'Sheet Metal Assemblies'),
(32, 4, 'Spring Steel Sheet Metal Fastners'),
(33, 4, 'Stamping,Sheet Metal parts'),
(34, 4, 'Sub-Assemblies'),
(35, 4, 'Transmission Part'),
(36, 4, 'Wheel Rims'),
(37, 1, 'Accessories Manufacturer'),
(38, 1, 'After Market Accessories Dealer/Distributer'),
(39, 2, 'Alternate Fuel  R&D'),
(40, 2, 'CNG/LPG Kit Dealer  '),
(41, 2, 'CNG/LPG Kit Manufacurer'),
(42, 2, 'Fuel Cell Speacialist'),
(43, 3, 'Automotive Chromed Trims'),
(44, 3, 'Al. DieCast,Prescious Components'),
(45, 3, 'Aluminum Heat Exchangers'),
(46, 3, 'Auto Seats,Door Trims'),
(47, 3, 'Automotive Components & Systems'),
(48, 3, 'Automotive Control Cable'),
(49, 3, 'Automotive Horns,Lamps'),
(50, 3, 'Automotive Iron & Aluminium Casting'),
(51, 3, 'Automative Safety System'),
(52, 3, 'Automotive Sheet Metal Component'),
(53, 3, 'Bushes'),
(54, 3, 'Chassis'),
(55, 3, 'Clutch Plate,Clutch Cover Assembler'),
(56, 3, 'Clutch Plate,Automatic Clutches'),
(57, 3, 'Components in Gray Cast Iron'),
(58, 3, 'Die Casting,Forging'),
(59, 3, 'Design,Manufacturing of Hydralucic Brakes'),
(60, 3, 'Differential Parts'),
(61, 3, 'Embelems & Wheel Rims Cover'),
(62, 3, 'Engine Valves'),
(63, 3, 'Fasteners'),
(64, 3, 'Filters & Filteration System'),
(65, 3, 'Forging Industries'),
(66, 3, 'Machined Grey & Ductile Iron Casting'),
(67, 3, 'Moulds & Dies,System Assemblies'),
(68, 3, 'Moulds & Dies'),
(69, 3, 'Plastic Injection Moulded Component'),
(70, 3, 'Rubber Parts'),
(71, 3, 'Sheet Metal Automotive Components'),
(72, 3, 'Services'),
(73, 3, 'Sheet Metal Assemblies'),
(74, 3, 'Spring Steel Sheet Metal Fastners'),
(75, 3, 'Stamping,Sheet Metal parts'),
(76, 3, 'Sub-Assemblies'),
(77, 3, 'Transmission Part'),
(78, 3, 'Wheel Rims'),
(79, 8, 'Auto Air Conditioning System'),
(80, 8, 'Auto Electricals: Other Auto Electric Parts'),
(81, 8, 'Auto Electricals: Auto Stater System'),
(82, 8, 'Auto Electricals: Auto Sensors'),
(83, 8, 'Auto Electricals: Auto Relays'),
(84, 8, 'Auto Electricals:Auto Meter'),
(85, 8, 'Auto Electricals: Auto Lightening System'),
(86, 8, 'Auto Electricals: Auto Switches'),
(87, 8, 'Auto Electricals: Genrator & Alternator'),
(88, 8, 'Auto Electricals: Motor'),
(89, 8, 'Auto Electricals: Speaker & Horn'),
(90, 8, 'Auto Electricals: Auto Batteries'),
(91, 8, 'Auto Electricals'),
(92, 8, 'Body Parts- Car Grills'),
(93, 8, 'Body Parts- Car Mirrors'),
(94, 8, 'Body Parts- Car Windows'),
(95, 8, 'Body Parts- Door Locks'),
(96, 8, 'Body Parts- Engine Hood'),
(97, 8, 'Body Parts- Car Bummpers'),
(98, 8, 'Body Parts- Car Doors'),
(99, 8, 'Body Parts- Car Fenders'),
(100, 8, 'Body Parts'),
(101, 9, 'Auto Electricals: Auto Lightening System'),
(102, 9, 'Auto Electricals:Auto Meter'),
(103, 9, 'Auto Electricals: Auto Relays'),
(104, 9, 'Auto Electricals: Auto Sensors'),
(105, 9, 'Auto Electricals: Auto Stater System'),
(106, 9, 'Auto Electricals: Auto Switches'),
(107, 9, 'Auto Electricals: Genrator & Alternator'),
(108, 9, 'Auto Electricals: Motor'),
(109, 9, 'Auto Electricals: Speaker & Horn'),
(110, 9, 'Auto Electricals: Auto Batteries'),
(111, 9, 'Auto Electricals'),
(112, 9, 'Body Parts- Car Grills'),
(113, 9, 'Body Parts- Car Mirrors'),
(114, 9, 'Body Parts- Car Windows'),
(115, 9, 'Body Parts- Door Locks'),
(116, 9, 'Body Parts- Engine Hood'),
(117, 9, 'Body Parts- Car Bummpers'),
(118, 9, 'Body Parts- Car Doors'),
(119, 9, 'Body Parts- Car Fenders'),
(120, 9, 'Body Parts'),
(121, 9, 'Auto Air Conditioning System'),
(122, 9, 'Auto Electricals: Other Auto Electric Parts'),
(123, 8, 'Brake System- Brake Callipers'),
(124, 8, 'Brake System- Brake Cylenders'),
(125, 8, 'Brake System- Brake Discs'),
(126, 8, 'Brake System- Brake Drums'),
(127, 8, 'Brake System- Brake Pads'),
(128, 8, 'Brake System- Brake Shoes'),
(129, 8, 'Brake System- Brake'),
(130, 8, 'Brake System- Other Brake Parts'),
(131, 8, 'Drive System- Axles'),
(132, 8, 'Drive System- Cluthes & Parts'),
(133, 8, 'Drive System- Drive Shaft'),
(134, 8, 'Drive System-Other Drive Systems'),
(135, 8, 'Drive System- Transmission Parts'),
(136, 8, 'Drive System'),
(137, 8, 'Engine Parts- Auto Ignition System'),
(138, 8, 'Engine Parts- Cooling System'),
(139, 8, 'Engine Parts- Engine Assembly'),
(140, 8, 'Engine Parts- Engine Components'),
(141, 8, 'Engine Parts- Engine Mounts'),
(142, 8, 'Engine Parts-  Exhaust System'),
(143, 8, 'Engine Parts- Fuel System'),
(144, 8, 'Engine Parts-  Muffer System'),
(145, 8, 'Engine Parts- Radiator & Parts'),
(146, 8, 'Engine Parts- Tanks & Parts'),
(147, 8, 'Engine Parts- TurboChargers'),
(148, 8, 'Engine Parts- Air Intakes'),
(149, 8, 'Engine Parts- Auto Filter'),
(150, 8, 'Engine Parts-Other Engine Parts'),
(151, 8, 'Engine Parts'),
(152, 8, 'Other Auto Parts'),
(153, 9, 'Brake System- Brake Callipers'),
(154, 9, 'Brake System- Brake Cylenders'),
(155, 9, 'Brake System- Brake Discs'),
(156, 9, 'Brake System- Brake Drums'),
(157, 9, 'Brake System- Brake Pads'),
(158, 9, 'Brake System- Brake Shoes'),
(159, 9, 'Brake System- Brake'),
(160, 9, 'Brake System- Other Brake Parts'),
(161, 9, 'Drive System- Axles'),
(162, 9, 'Drive System- Cluthes & Parts'),
(163, 9, 'Drive System- Drive Shaft'),
(164, 9, 'Drive System-Other Drive Systems'),
(165, 9, 'Drive System- Transmission Parts'),
(166, 9, 'Drive System'),
(167, 9, 'Engine Parts- Auto Ignition System'),
(168, 9, 'Engine Parts- Cooling System'),
(169, 9, 'Engine Parts- Engine Assembly'),
(170, 9, 'Engine Parts- Engine Components'),
(171, 9, 'Engine Parts- Engine Mounts'),
(172, 9, 'Engine Parts-  Exhaust System'),
(173, 9, 'Engine Parts- Fuel System'),
(174, 9, 'Engine Parts-  Muffer System'),
(175, 9, 'Engine Parts- Radiator & Parts'),
(176, 9, 'Engine Parts- Tanks & Parts'),
(177, 9, 'Engine Parts- TurboChargers'),
(178, 9, 'Engine Parts- Air Intakes'),
(179, 9, 'Engine Parts- Auto Filter'),
(180, 9, 'Engine Parts-Other Engine Parts'),
(181, 9, 'Engine Parts'),
(182, 9, 'Other Auto Parts'),
(183, 8, 'Rims'),
(184, 8, 'Steering System'),
(185, 8, 'Suspension System- Other Suspension'),
(186, 8, 'Suspension System- Shock Absorber'),
(187, 8, 'Suspension System- Suspension'),
(188, 8, 'Suspension System'),
(189, 8, 'Tires/Tyres'),
(190, 8, 'Universal Parts- Auto Bearing'),
(191, 8, 'Universal Parts-Other Universal Parts'),
(192, 8, 'Universal Parts- Tube Assembly'),
(193, 9, 'Rims'),
(194, 9, 'Steering System'),
(195, 9, 'Suspension System- Other Suspension'),
(196, 9, 'Suspension System- Shock Absorber'),
(197, 9, 'Suspension System- Suspension'),
(198, 9, 'Suspension System'),
(199, 9, 'Tires/Tyres'),
(200, 9, 'Universal Parts- Auto Bearing'),
(201, 9, 'Universal Parts-Other Universal Parts'),
(202, 9, 'Universal Parts- Tube Assembly'),
(203, 8, 'Universal Parts- Wire Assembly'),
(204, 8, 'Universal Parts'),
(205, 9, 'Universal Parts- Wire Assembly'),
(206, 9, 'Universal Parts'),
(207, 8, 'Wheels'),
(208, 9, 'Wheels'),
(209, 10, 'Auto Component Fedration'),
(210, 10, 'Auto Dealer Fedration'),
(211, 10, 'Automobile Manufacturer Feration'),
(212, 11, 'Commercial Vehicles'),
(213, 11, 'Passenger Vehicles'),
(214, 11, 'Three Wheeler'),
(215, 11, 'Two Wheeler'),
(216, 12, 'Commercial Vehicles'),
(217, 12, 'Passenger Vehicles'),
(218, 12, 'Three Wheeler'),
(219, 12, 'Two Wheeler'),
(220, 13, 'Passenger Vehicles'),
(221, 13, 'Three Wheeler'),
(222, 13, 'Two Wheeler'),
(223, 13, 'Commercial Vehicles'),
(224, 16, 'Multi Brand Bike Service Compony'),
(225, 16, 'Multi Brand Bike Service Outlet'),
(226, 17, 'Multi Brand Car Service Compony'),
(227, 17, 'Multi Brand Car Service Outlet'),
(228, 19, 'Auto Production Line Equipment'),
(229, 19, 'Body Repair Equipment'),
(230, 19, 'Car Lifts'),
(231, 19, 'Other Vehicle Equipments'),
(232, 19, 'Parking Equipment'),
(233, 19, 'Tire Changers'),
(234, 19, 'Wheel Alignment'),
(235, 20, 'Safety Rating Body'),
(236, 20, 'Vehicle R&D'),
(237, 20, 'Vehicle Testing & Homologation'),
(238, 21, 'Car Jacks'),
(239, 21, 'Diagnostic Tools'),
(240, 21, 'Emergency Tools'),
(241, 21, 'Greece Fums'),
(242, 21, 'Tire Gauges'),
(243, 21, 'Tire Inflators'),
(244, 21, 'Tire Repair Tools'),
(245, 21, 'Transmission Jacks'),
(246, 3, 'Wheel Rims'),
(247, 24, 'Architect '),
(248, 24, 'Freelancing '),
(249, 24, 'Consultant'),
(250, 24, 'Legal'),
(251, 24, 'Real Estate'),
(252, 24, 'Recruitment'),
(253, 24, 'Consultant'),
(254, 27, 'Bank DSA'),
(255, 27, ' Hedge Fund'),
(256, 27, 'Insurance Company'),
(257, 27, 'Insurance DSA'),
(258, 27, 'Investment Banking'),
(259, 27, 'Mutual Fund'),
(260, 27, 'Private Equity'),
(261, 27, 'Stock Market/Securities'),
(262, 27, 'Taxation & Audit'),
(263, 27, 'Venture Capital'),
(264, 28, 'IT Hardware'),
(265, 28, 'Software Product & Services'),
(266, 30, 'Freelancing Media Professional'),
(267, 30, 'Magazine'),
(268, 30, 'Newspaper Daily'),
(269, 30, 'Outdoor'),
(270, 30, 'Radio'),
(271, 30, 'TV Channel'),
(272, 32, 'Quality Certification Company'),
(273, 32, 'Quality Certification Professional'),
(274, 33, 'Business Research'),
(275, 33, 'Market Research'),
(276, 35, 'Biodiesel'),
(277, 35, 'Biogas'),
(278, 35, 'Charcoal'),
(279, 35, 'Coal'),
(280, 35, 'Coal Gas'),
(281, 35, 'Coke Fuel'),
(282, 35, 'Crude Oil'),
(283, 35, 'Electricity Generation'),
(284, 35, 'Industrial Fuel'),
(285, 35, 'Natural Gas'),
(286, 35, 'Other Energy Related Products'),
(287, 35, 'Petrochemical Products'),
(288, 35, 'Solar Energy Products'),
(289, 35, 'Wood Pellets'),
(290, 38, 'Batteries'),
(291, 38, 'Circuit Breakers'),
(292, 38, 'Connectors & Terminals'),
(293, 38, 'Contactors'),
(294, 38, 'Electrical Plugs & Sockets'),
(295, 38, 'Electronic & Instrument Enclosures'),
(296, 38, 'Fuse Components'),
(297, 38, 'Fuses'),
(298, 38, 'Generators'),
(299, 38, 'Other Electrical Equipment'),
(300, 38, 'Power Accessories'),
(301, 38, 'Power Distribution Equipment'),
(302, 38, 'Power Supplies'),
(303, 38, 'Professional Audio Video & Lighting'),
(304, 38, 'Relays'),
(305, 38, 'Switches'),
(306, 38, 'Transformers'),
(307, 38, 'Wires Cables & Cable Assemblies'),
(308, 38, 'Wiring Accessories'),
(309, 39, 'Active Component'),
(310, 39, 'EL Products'),
(311, 39, 'Electronic Accessories & Supplies'),
(312, 39, 'Electronic Signs'),
(313, 39, 'Electronincs Production Machinery'),
(314, 39, 'Electronics Stocks'),
(315, 39, 'Optoelectronic Displays'),
(316, 39, 'Other Electronic Components'),
(317, 39, 'Passive Components'),
(318, 40, 'Gas Disposal'),
(319, 40, 'Noise Reduction Device'),
(320, 40, 'Other Environmental Products'),
(321, 40, 'Other Excess Inventory'),
(322, 40, 'Recycling'),
(323, 40, 'Sewer'),
(324, 40, 'Waste Management'),
(325, 40, 'Water Treatment'),
(326, 41, 'Aluminum'),
(327, 41, 'Asbestos Products'),
(328, 41, 'Barbed Wire'),
(329, 41, 'Billets'),
(330, 41, 'Carbon'),
(331, 41, 'Cast & Forged'),
(332, 41, 'Cemented Carbide'),
(333, 41, 'Ceramic Fiber Products'),
(334, 41, 'Ceramics'),
(335, 41, 'Copper'),
(336, 41, 'Fiberglass Products'),
(337, 41, 'Glass'),
(338, 41, 'Graphite Products'),
(339, 41, 'Ingots'),
(340, 41, 'Iron'),
(341, 41, 'Lead'),
(342, 41, 'Lime'),
(343, 41, 'Magnetic Materials'),
(344, 41, 'Metal Scrap'),
(345, 41, 'Metal Slabs'),
(346, 41, 'Mineral Wool'),
(347, 41, 'Molybdenum'),
(348, 41, 'Nickel'),
(349, 41, 'Non-Metallic Mineral Deposit'),
(350, 41, 'Ore'),
(351, 41, 'Other Metals & Metal Products'),
(352, 41, 'Non-Metallic Minerals & Products'),
(353, 41, 'Pig Iron'),
(354, 41, 'Quartz Products'),
(355, 41, 'Refractory'),
(356, 41, 'Steel'),
(357, 41, 'Titanium'),
(358, 41, 'Tungsten'),
(359, 41, 'Wire Mesh'),
(360, 41, 'Zinc');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `discussion_comments`
--
ALTER TABLE `discussion_comments`
  ADD CONSTRAINT `discussion_comments_ibfk_1` FOREIGN KEY (`dis_id`) REFERENCES `discussion_questions` (`dis_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `discussion_comments_ibfk_2` FOREIGN KEY (`email`) REFERENCES `register` (`email`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `discussion_questions`
--
ALTER TABLE `discussion_questions`
  ADD CONSTRAINT `discussion_questions_ibfk_1` FOREIGN KEY (`email`) REFERENCES `register` (`email`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `jobs`
--
ALTER TABLE `jobs`
  ADD CONSTRAINT `jobs_ibfk_1` FOREIGN KEY (`email`) REFERENCES `register` (`email`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `job_applicants`
--
ALTER TABLE `job_applicants`
  ADD CONSTRAINT `job_applicants_ibfk_1` FOREIGN KEY (`job_id`) REFERENCES `jobs` (`job_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `job_applicants_ibfk_2` FOREIGN KEY (`applicant_email`) REFERENCES `register` (`email`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `market_seller`
--
ALTER TABLE `market_seller`
  ADD CONSTRAINT `market_seller_ibfk_1` FOREIGN KEY (`email`) REFERENCES `register` (`email`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `profile`
--
ALTER TABLE `profile`
  ADD CONSTRAINT `profile_ibfk_1` FOREIGN KEY (`email`) REFERENCES `register` (`email`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `subcategory`
--
ALTER TABLE `subcategory`
  ADD CONSTRAINT `subcategory_ibfk_1` FOREIGN KEY (`cat_id`) REFERENCES `category` (`cat_id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
