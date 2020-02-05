-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 06, 2016 at 03:39 PM
-- Server version: 5.5.36
-- PHP Version: 5.4.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `mycms`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE IF NOT EXISTS `comments` (
  `comment_id` int(10) NOT NULL AUTO_INCREMENT,
  `post_id` int(10) NOT NULL,
  `comment_name` varchar(100) NOT NULL,
  `comment_email` varchar(100) NOT NULL,
  `comment_text` text NOT NULL,
  `status` text NOT NULL,
  PRIMARY KEY (`comment_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`comment_id`, `post_id`, `comment_name`, `comment_email`, `comment_text`, `status`) VALUES
(1, 9, 'hello', 'hello@gmail.com', 'ghjghgj', 'approve'),
(4, 11, 'vekso dia', 'dai@gmail.com', 'handsome', 'unapprove'),
(7, 9, 'khan', 'khan@gmail.com', 'hello this is one more comment with some respect and i will do whatever to read this post hello this is one more comment with some respect and i will do whatever to read this post', 'approve'),
(8, 11, 'sas', 'sas@gmail.com', 'jgfkh k', 'unapprove'),
(13, 9, 'Sanjay', 'hello@gmail.com', 'Sanjay', 'approve'),
(14, 15, 'hello mount everesst', 'mounteverest@gmail.com', 'mount everest is in nepal', 'unapprove'),
(15, 16, 'Barack Obama', 'krajbanshi25@gmail.com', 'This is the wonderful site i ever visited.', 'approve'),
(16, 18, 'MILAN', 'milan@gmail.com', 'he is great and he is doing well for us.', 'approve'),
(17, 19, 'Sushan', 'stpdstn@gmail.com', 'Hi,  Hello. Nice news btw.', 'unapprove'),
(18, 22, 'krishna', 'krajbanshi25@gmail.com', 'it is good new', 'approve'),
(19, 31, 'khatam hai ', 'khatam@gmail.com', 'this website is bad', 'approve'),
(20, 30, 'varshita', 'varshita@gmail.com', 'i liked your news', 'approve'),
(21, 22, 'jimmy', 'jimmy@gmail.com', 'hello news how are you', 'approve'),
(22, 22, 'timmy', 'timmy@gmail.com', 'helo i am timy who liked your news .', 'approve');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
