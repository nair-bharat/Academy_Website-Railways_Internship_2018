-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 11, 2018 at 10:40 AM
-- Server version: 5.7.19
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `login`
--

-- --------------------------------------------------------

--
-- Table structure for table `aboutus`
--

DROP TABLE IF EXISTS `aboutus`;
CREATE TABLE IF NOT EXISTS `aboutus` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `aboutus` varchar(2000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `aboutus`
--

INSERT INTO `aboutus` (`id`, `aboutus`) VALUES
(1, '	CRCA is formed to promote cultural activities on Central Railway.The General Manager Central Railway is the Patron of the Academy.The Academy Council comprises of Office Bearers of the Headquarters and representatives from all 5 divisions on Central Railway viz. Mumbai, Pune, Solapur, Bhusawal, Nagpur and Production Units/Workshops at Byculla, Parel, Matunga, Kurudwadi, Nasik Road and Manmad. It is the governing body of the CRCA which will advise and lay down the policy for guidance of the Central Executive Committee.The Central Executive Committee is responsible for the day-today working of the Academy.The Unit Executive Committee is responsible for the working of the Academy at the Unit/Branch level.The general funds of the Academy shall consist of grants from Staff Benefit Fund and income from its various performances.');

-- --------------------------------------------------------

--
-- Table structure for table `achievements`
--

DROP TABLE IF EXISTS `achievements`;
CREATE TABLE IF NOT EXISTS `achievements` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `year` varchar(255) NOT NULL,
  `achievements` varchar(2500) NOT NULL,
  `role` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=44 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `achievements`
--

INSERT INTO `achievements` (`id`, `year`, `achievements`, `role`) VALUES
(1, '2012-13', 'CRCA sucessfully conducted the IRCC (Dance) 2012-13 at ZRTI Bhusaval.\r\nArtists of CRCA won the First prize for One Act Play - \"Ek Doon Adich\" at IRCC (Drama) 2012-13 held at Kharaghpur.\r\nArtist of CRCA won the Third prize for Instrumental Music at IRCC (Music) 2012-13 held at Secunderabad.\r\nCRCA sucessfully conducted a Theatre Workshop for Artists and interested employees of Central Railway at CSTM.\r\nArtists of CRCA won prize for Best Acting in \"Spandan\"at One-Act Play competition organised by The Akhil Bharatiya Naatya Parishad in Mumbai.\r\nArtists of CRCA gave a memorable musical performance on the occasion of the National Rail Museum Foundation day at New Delhi in presence of CRB and other dignitaries.\r\nCRCA staged a marvellous musical programme \" Megh Malhar \" - a combination of songs and dances based on the monsoon at CSTM.', ''),
(2, '2011-12', 'CRCA won the 2nd prize for the best One-Act Play \"Mayyat\" in IRCC (Drama) 2011-12 held at Jaipur. ', ''),
(3, '2010-11', 'CRCA organised \" Sanskriti Yatra\" a cultural programme based on the cultural heritage of Maharashtra, to welcome the Sanskriti Express at CSTM.  ', ''),
(4, '2007-08', 'CRCA presented a musical programme in memory of the great composers, the Late S D Burman and the Late R D Burman. ', ''),
(5, '2006-07', 'CRCA presented \" Megh Malhar\" a programme on monsoon based songs and dances and \" Rang de Basanti\" a programme on patriotic songs.\r\nCRCA organised back to back -programme of two One-Act Plays viz \"Kaala Suraj\" and \" Badi Buwaji\".\r\nCRCA has also successfully staged a number of plays in the past viz. \" Khamosh Adalat Jaari Hai\",\"Shuturmurg\" and \"Brihannada\".', ''),
(6, '', '', 'workshop'),
(7, '', '', 'workshop'),
(8, '2013-2014', 'dsdsad', 'workshop'),
(11, '', '', 'workshop'),
(10, '2012-2013', 'dsa', 'zonal'),
(12, '', '', 'admin'),
(13, '', '', 'zonal'),
(14, '', '', 'admin'),
(15, '', '', 'workshop'),
(16, '', '', 'workshopcmmcrd'),
(17, '', '', 'workshop'),
(18, '', '', 'admin'),
(19, '', '', 'admin'),
(20, '', '', 'zonalapexbody'),
(21, '', '', 'zonalapexbody'),
(22, '', '', 'admin'),
(23, '', '', 'admin'),
(24, '', '', 'zonalapexbody'),
(25, '', '', 'zonalapexbody'),
(26, '', '', 'workshop'),
(27, '', '', 'workshop'),
(28, '', '', 'cechq'),
(29, '', '', 'cechq'),
(30, '', '', 'zonalapexbody'),
(31, '', '', 'zonalapexbody'),
(32, '', '', 'zonalapexbody'),
(33, '', '', 'zonalapexbody'),
(34, '', '', 'admin'),
(35, '', '', 'admin'),
(36, '', '', 'admin'),
(37, '', '', 'admin'),
(38, '', '', 'admin'),
(39, '', '', 'admin'),
(40, '', '', 'zonalapexbody'),
(41, '', '', 'zonalapexbody'),
(42, '', '', 'zonalapexbody'),
(43, '', '', 'zonalapexbody');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

DROP TABLE IF EXISTS `contact`;
CREATE TABLE IF NOT EXISTS `contact` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `address` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `no` varchar(255) NOT NULL,
  `s1name` varchar(255) NOT NULL,
  `s1no` varchar(255) NOT NULL,
  `s2name` varchar(255) NOT NULL,
  `s2no` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=60 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `address`, `email`, `no`, `s1name`, `s1no`, `s2name`, `s2no`, `role`) VALUES
(27, 'nshjaj', 'HASJ', 'HSGDH', 'cbsd', 'cshdjhjk', 'ghjk', 'cd', 'zonalapexbody'),
(22, 'dafaff', 'bfsdnfnsm@g.com', '67342647832', 'nmxcz', '78437893', 'badhgshf', '1243432442', 'workshop'),
(25, 'cvscv', 'sbahx', 'xsva', 'xshb', 'xsanb', '', 'xsavhb', 'zonal'),
(29, 'xsx', 'xsa', 'xsa', 'xasxsaxs', 'xs', 'x', 'sx', 'zonal'),
(31, 'xcxzcz', 'cx', 'cxz', 'cxz', 'cxz', 'xcz', 'cxz', 'workshop'),
(33, 'xz', 'xzx', 'xz', 'xz', 'xz', 'ZXZ', 'xz', 'workshop'),
(35, 'ssA', 'asa', 'sss', 'ss', 'sss', 'sss', 'gffgg', 'workshop'),
(38, 'xzx', 'xshgdas@gmail.com', 'xz', 'xz', 'xz', 'xz', 'xz', 'zonal'),
(40, 'mnm', 'jjh', 'hjjhj', 'jkhjkh', 'jkjhkl', 'kjkj', 'hjhj', 'zonal'),
(41, '', '', '', '', '', '', '', 'workshop'),
(42, 'fdf', 'fsdf', 'fd', 'fddf', 'fd', 'fsd', '', 'workshop'),
(55, 'fjhjds', 'fdsjf@g.c', 'fdsjs', 'fdshjfs', 'dsfhjsd', 'fdhjfhsj', 'fdsfm', 'admin'),
(59, '', '', '', '', '', '', '', 'zonalapexbody');

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

DROP TABLE IF EXISTS `contactus`;
CREATE TABLE IF NOT EXISTS `contactus` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `address` varchar(255) NOT NULL,
  `no` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `s1name` varchar(255) NOT NULL,
  `s1no` varchar(255) NOT NULL,
  `s2name` varchar(255) NOT NULL,
  `s2no` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`id`, `address`, `no`, `email`, `s1name`, `s1no`, `s2name`, `s2no`) VALUES
(1, 'vcbzxc', '4236', 'xzncz@g.c', 'dsbn', '23516', 'cbsdhfn', '126356');

-- --------------------------------------------------------

--
-- Table structure for table `designation`
--

DROP TABLE IF EXISTS `designation`;
CREATE TABLE IF NOT EXISTS `designation` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `designation` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `designation`
--

INSERT INTO `designation` (`id`, `designation`) VALUES
(5, 'nfdjs'),
(4, 'gugiurei'),
(6, 'ndjfmds');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

DROP TABLE IF EXISTS `employee`;
CREATE TABLE IF NOT EXISTS `employee` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `fname` varchar(255) NOT NULL,
  `designation` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `image` longblob NOT NULL,
  `imagename` varchar(255) NOT NULL,
  `age` varchar(255) NOT NULL,
  `dob` varchar(255) NOT NULL,
  `post` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`id`, `fname`, `designation`, `contact`, `image`, `imagename`, `age`, `dob`, `post`, `role`) VALUES
(11, '', '', '', '', '', '', '', '', 'admin'),
(12, '', '', '', '', '', '', '', '', 'zonalapexbody'),
(6, 'sadvb', 'vsbs', 'bdshn', '', 'image/5a55aa82a74447.24975479.jpg', '21', '1997-04-21', '2018-04-21', ''),
(9, '', '', '', '', '', '', '', '', 'admin'),
(10, '', '', '', '', '', '', '', '', 'zonalapexbody'),
(8, 'fmdnmf', 'jjjfklds', 'nmnm', '', 'image/5a562e7265ef47.10038626.jpg', '21', '1997-04-21', '1997-04-21', ''),
(13, '', '', '', '', '', '', '', '', 'workshop'),
(14, '', '', '', '', '', '', '', '', 'cechq'),
(15, '', '', '', '', '', '', '', '', 'zonalapexbody'),
(16, 'gsdhdhsa', 'President', '64734238', '', 'image/5a571ccc556cc7.61242955.jpg', '20', '1998-12-10', '2017-12-11', 'zonalapexbody'),
(17, '', '', '', '', '', '', '', '', 'zonalapexbody'),
(18, '', '', '', '', '', '', '', '', 'admin'),
(19, '', '', '', '', '', '', '', '', 'admin'),
(20, '', '', '', '', '', '', '', '', 'admin'),
(21, '', '', '', '', '', '', '', '', 'zonalapexbody'),
(22, '', '', '', '', '', '', '', '', 'zonalapexbody');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

DROP TABLE IF EXISTS `events`;
CREATE TABLE IF NOT EXISTS `events` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `eventname` varchar(255) NOT NULL,
  `venue` varchar(255) NOT NULL,
  `date` varchar(256) NOT NULL,
  `time` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=150 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `eventname`, `venue`, `date`, `time`, `role`) VALUES
(109, '', '', '', '', 'zonal'),
(110, '', '', '', '', 'workshop'),
(108, '', '', '', '', 'workshop'),
(114, '', '', '', '', 'workshop'),
(113, '', '', '', '', 'workshop'),
(112, '', '', '', '', 'hq'),
(111, '', '', '', '', 'hq'),
(103, '', '', '', '', 'zonalapexbody'),
(104, '', '', '', '', 'workshop'),
(107, 'xa', 'XA', 'CSc', 'cds', 'workshop'),
(102, '', '', '', '', 'workshop'),
(140, '', '', '', '', 'cechq'),
(100, '', '', '', '', 'workshop'),
(99, '', '', '', '', 'workshop'),
(98, '', '', '', '', 'hq'),
(97, '', '', '', '', 'workshop'),
(92, '', '', '', '', 'hq'),
(141, '', '', '', '', 'zonalapexbody'),
(94, '', '', '', '', 'workshop'),
(95, '', '', '', '', 'workshop'),
(96, '', '', '', '', 'workshop'),
(91, '', '', '', '', 'workshop'),
(90, 'mdmfksd', 'kfjfkljwe', 'fnwmfj', 'bfwnb', 'workshop'),
(135, '', '', '', '', 'admin'),
(89, 'jhdjshadj', 'dbsn', 'dsnmj', 'dbsnak', 'workshop'),
(136, '', '', '', '', 'zonalapexbody'),
(137, '', '', '', '', 'admin'),
(138, '', '', '', '', 'zonalapexbody'),
(77, '', '', '', '', 'zonalapexbody'),
(139, '', '', '', '', 'workshop'),
(75, 'fsfdsfdsfds', 'dsd', 'sfd', 'dfdf', ''),
(115, '', '', '', '', 'zonalapexbody'),
(132, 'jhfhj', 'fddfj', 'fdjh', 'dfjsk', 'zonal'),
(133, '', '', '', '', 'workshopcmmcrd'),
(134, '', '', '', '', 'workshop'),
(143, '', '', '', '', 'admin'),
(144, '', '', '', '', 'admin'),
(145, '', '', '', '', 'admin'),
(148, 'nmnm', 'hhj', 'nbbh', 'hjhkh', 'zonalapexbody'),
(149, 'nnj', 'hjhkj', 'njhj', 'jhjh', 'zonalapexbody');

-- --------------------------------------------------------

--
-- Table structure for table `executive`
--

DROP TABLE IF EXISTS `executive`;
CREATE TABLE IF NOT EXISTS `executive` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `fname` varchar(255) NOT NULL,
  `designation` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `executive`
--

INSERT INTO `executive` (`id`, `fname`, `designation`, `email`, `contact`) VALUES
(1, 'fdsfs', 'vvf', 'fdfd@g.com', 'fdsf'),
(2, 'ndmnf', 'fhjhsfd', 'dhs@g.com', 'fsjd');

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

DROP TABLE IF EXISTS `members`;
CREATE TABLE IF NOT EXISTS `members` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `fname` varchar(255) NOT NULL,
  `designation` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`id`, `fname`, `designation`, `email`, `contact`, `role`) VALUES
(4, 'bhj', 'gugiurei', 'hghg@gm', 'jhhg', 'zonalapexbody'),
(5, '', '', '', '', 'admin'),
(6, '', '', '', '', 'zonalapexbody'),
(7, '', '', '', '', 'admin'),
(8, '', '', '', '', 'zonalapexbody'),
(9, '', '', '', '', 'workshop'),
(10, '', '', '', '', 'cechq'),
(11, '', '', '', '', 'zonalapexbody'),
(12, '', '', '', '', 'zonalapexbody'),
(13, '', '', '', '', 'admin'),
(14, '', '', '', '', 'admin'),
(15, '', '', '', '', 'admin'),
(16, '', '', '', '', 'zonalapexbody'),
(17, '', '', '', '', 'zonalapexbody');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(15) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) CHARACTER SET utf8 NOT NULL,
  `email` varchar(100) CHARACTER SET utf8 NOT NULL,
  `password` varchar(100) CHARACTER SET utf8 NOT NULL,
  `role` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=183 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `role`) VALUES
(43, 'bharat123', 'bharat@g.co', '12345678', 'zonalapexbody'),
(145, 'bharat', 'bharat@g.com', '12345678', 'cechq'),
(146, 'bharat12', 'bharat@g.com', '12345678', 'workshop'),
(147, 'bharat1234', 'bharat@gmail.com', '12345678', 'admin'),
(149, 'bharat1', 'bharat@gmail.com', '12345678', 'hq'),
(150, 'bharat1', 'bharat@gmail.com', '12345678', 'hqexbody'),
(151, 'bharat11', 'bharat@gmail.com', '12345678', 'division'),
(152, 'bharat13', 'bharat@gmail.com', '12345678', 'divapexbody'),
(153, 'bharat14', 'bharat@gmail.com', '12345678', 'divexbody'),
(154, 'bharat15', 'bharat@gmail.com', '12345678', 'divexbodybb'),
(155, 'bharat16', 'bharat@gmail.com', '12345678', 'divexbodyngp'),
(156, 'bharat17', 'bharat@gmail.com', '12345678', 'divexbodybsl'),
(157, 'bharat18', 'bharat@gmail.com', '12345678', 'divexbodyzrti'),
(158, 'bharat19', 'bharat@gmail.com', '12345678', 'divexbodypa'),
(159, 'bharat20', 'bharat@gmail.com', '12345678', 'divexbodysur'),
(160, 'bharat21', 'bharat@gmail.com', '12345678', 'divexbodywm'),
(161, 'bharat22', 'bharat@gmail.com', '12345678', 'workshopapexbody'),
(162, 'bharat23', 'bharat@gmail.com', '12345678', 'workshopexbody'),
(163, 'bharat24', 'bharat@gmail.com', '12345678', 'workshopcwmpr'),
(164, 'bharat25', 'bharat@gmail.com', '12345678', 'workshopcwmmpr'),
(165, 'bharat26', 'bharat@gmail.com', '12345678', 'workshopcwmmtn'),
(166, 'bharat27', 'bharat@gmail.com', '12345678', 'workshopcwemtn'),
(167, 'bharat30', 'bharat@gmail.com', '12345678', 'workshopcwmby'),
(168, 'bharat31', 'bharat@gmail.com', '12345678', 'workshopcmby'),
(169, 'bharat32', 'bharat@gmail.com', '12345678', 'workshopcmmcrd'),
(170, 'bharat33', 'bharat@gmail.com', '12345678', 'workshopcwmbsl'),
(171, 'bharat34', 'bharat@gmail.com', '12345678', 'workshopcmmbsl'),
(172, 'bharat35', 'bharat@gmail.com', '12345678', 'workshopcmmnkrd'),
(173, 'bharat36', 'bharat@gmail.com', '12345678', 'workshopcwmmmr');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
