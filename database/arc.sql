-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 04, 2021 at 06:33 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `arc`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `a_id` int(12) NOT NULL AUTO_INCREMENT,
  `a_email` varchar(255) NOT NULL,
  `a_pass` varchar(30) NOT NULL,
  PRIMARY KEY (`a_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`a_id`, `a_email`, `a_pass`) VALUES
(1, 'admin@gmail.com', 'admin123');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE IF NOT EXISTS `booking` (
  `bookId` int(11) NOT NULL AUTO_INCREMENT,
  `movieName` varchar(255) NOT NULL,
  `userName` varchar(255) NOT NULL,
  `phoNo` varchar(10) NOT NULL,
  `cardNo` varchar(16) NOT NULL,
  `moviePrice` double NOT NULL,
  `seatBooking` int(12) NOT NULL,
  `date` datetime NOT NULL,
  `total` double NOT NULL,
  PRIMARY KEY (`bookId`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`bookId`, `movieName`, `userName`, `phoNo`, `cardNo`, `moviePrice`, `seatBooking`, `date`, `total`) VALUES
(1, 'Black Widow', 'user', '9999988888', '4898598549845894', 180, 1, '2021-11-06 09:15:00', 180);

-- --------------------------------------------------------

--
-- Table structure for table `current_movie`
--

CREATE TABLE IF NOT EXISTS `current_movie` (
  `m_id` int(12) NOT NULL AUTO_INCREMENT,
  `m_name` varchar(255) NOT NULL,
  `m_desc` text NOT NULL,
  `seats` int(12) NOT NULL,
  `price` double NOT NULL,
  `m_img` varchar(255) NOT NULL,
  `date` datetime DEFAULT NULL,
  PRIMARY KEY (`m_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `current_movie`
--

INSERT INTO `current_movie` (`m_id`, `m_name`, `m_desc`, `seats`, `price`, `m_img`, `date`) VALUES
(9, 'Black Widow', 'Black Widow is a 2021 American superhero film based on Marvel Comics featuring \r\n\r\nthe character of the same name. ... Set after the events of Captain America: Civil War (2016), the \r\n\r\nfilm sees Romanoff on the run and forced to confront her past.', 100, 180, 'blackwindow.jpg', '2021-10-06 09:16:00'),
(11, 'Endgame', 'Avengers: Endgame is a 2019 American superhero film based on the Marvel Comics \r\n\r\nsuperhero team the Avengers. ... In the film, the surviving members of the Avengers and their allies \r\n\r\nattempt to reverse the destruction caused by Thanos in Infinity War\r\n', 100, 210, 'endgame.jpg', '2021-10-06 12:15:00'),
(12, 'Uri', 'Indian army special forces execute a covert operation, avenging the killing of fellow army men \r\n\r\nat their base by a terrorist group.', 100, 150, 'uri.jpg', '2021-10-06 16:16:00');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE IF NOT EXISTS `feedback` (
  `f_id` int(12) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `experince` varchar(255) NOT NULL,
  `suggestion` text NOT NULL,
  PRIMARY KEY (`f_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`f_id`, `name`, `experince`, `suggestion`) VALUES
(1, 'user', 'GREAT', 'Greeat Experience At Cinema');

-- --------------------------------------------------------

--
-- Table structure for table `movie`
--

CREATE TABLE IF NOT EXISTS `movie` (
  `m_id` int(12) NOT NULL AUTO_INCREMENT,
  `m_name` varchar(255) NOT NULL,
  `m_des` text NOT NULL,
  `m_img` varchar(255) NOT NULL,
  PRIMARY KEY (`m_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=36 ;

--
-- Dumping data for table `movie`
--

INSERT INTO `movie` (`m_id`, `m_name`, `m_des`, `m_img`) VALUES
(11, 'Bahubali', 'Baahubali-The Beginning (2015) is essentially about a tribal warrior boy, Shivudu who learns his past and awaits his destiny. The story is set in and around the fictional kingdom of Mahishmati.', 'bahubali.jpg'),
(12, 'Love Aaj kal', 'Love Aaj Kal ( transl. Love These Days) is a 2009 Indian Hindi-language romantic ', 'loveaajkal.jpg'),
(14, 'Raazi', 'A Kashmiri woman agrees to marry a Pakistani army officer in order to spy on Pakistan during the Indo-Pakistan War of 1971.\r\n', 'raazi.jpg'),
(15, 'Venom', 'A failed reporter is bonded to an alien entity, one of many symbiotes who have invaded Earth. But the being takes a liking to Earth and decides to protect it.', 'venom.jpg'),
(16, 'Jumanji', 'Jumanji, one of the most unique--and dangerous--board games ever, falls into the hands \r\n\r\nof the curious teen, Alan Parrish, in 1969.', 'jumanji.jpg'),
(19, '2.0', 'After mobiles start mysteriously flying out of the hands of people in Chennai, Dr Vaseegaran \r\n\r\nsummons his trusted robot Chitti to ward off the bird-shaped supernatural powers of Pakshirajan.\r\n', 'robot2.jpg'),
(25, 'Mowgli', 'An epic adventure about Mowgli, a man-cub raised by a family of wolves. Mowgli finds he \r\n\r\nis no longer welcome in the jungle when fearsome tiger Shere Khan', 'mowgli.jpg'),
(28, 'Raid', 'A fearless income tax officer raids the mansion of the most powerful man in Lucknow after \r\n\r\nsomeone mysteriously draws his attention towards the evidence.', 'raid.jpg'),
(35, 'Brave', 'Set in the Scottish Highlands, the film tells the story of Princess Merida of DunBroch who \r\n\r\ndefies an age-old custom, causing chaos in the kingdom by expressing the desire not to be \r\n\r\nbetrothed.', 'poster5.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE IF NOT EXISTS `slider` (
  `s_id` int(12) NOT NULL AUTO_INCREMENT,
  `s_img` varchar(255) NOT NULL,
  PRIMARY KEY (`s_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`s_id`, `s_img`) VALUES
(1, 's1.jpg'),
(2, 's2.jpg'),
(3, 's3.jpg\n');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `uid` int(12) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `phno` varchar(10) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pass` varchar(30) NOT NULL,
  PRIMARY KEY (`uid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`uid`, `name`, `phno`, `email`, `pass`) VALUES
(1, 'user', '9999988888', 'user@gmail.com', '123456');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
