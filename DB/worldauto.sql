-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 03, 2014 at 09:31 AM
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
-- Table structure for table `profile`
--

CREATE TABLE IF NOT EXISTS `profile` (
  `sno` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) NOT NULL,
  `dob` varchar(255) DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
  `gender` varchar(255) DEFAULT NULL,
  `mobile` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`sno`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `profile`
--

INSERT INTO `profile` (`sno`, `email`, `dob`, `country`, `gender`, `mobile`) VALUES
(1, 'shrutibansal.student@gmail.com', '08/21/1990', 'usa', 'female', '0987654321');

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
('Shruti', 'abc@gmail.com', '8947893', 'true'),
('shruti bansal', 'shrutibansal.student@gmail.com', 'try123', 'true'),
('', 'trial@mail.com', 'trial', 'false');

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
-- Constraints for table `profile`
--
ALTER TABLE `profile`
  ADD CONSTRAINT `profile_ibfk_1` FOREIGN KEY (`email`) REFERENCES `register` (`email`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
