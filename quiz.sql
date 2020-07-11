-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 05, 2018 at 08:45 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 5.6.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `quiz`
--

-- --------------------------------------------------------

--
-- Table structure for table `question`
--

CREATE TABLE `question` (
  `q_id` int(11) NOT NULL,
  `q_description` varchar(300) NOT NULL,
  `q_option1` varchar(100) NOT NULL,
  `q_option2` varchar(100) NOT NULL,
  `q_option3` varchar(100) NOT NULL,
  `q_option4` varchar(100) NOT NULL,
  `q_answer` varchar(100) NOT NULL,
  `q_answer_id` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `question`
--

INSERT INTO `question` (`q_id`, `q_description`, `q_option1`, `q_option2`, `q_option3`, `q_option4`, `q_answer`, `q_answer_id`) VALUES
(1, 'Which of the following process does not involve the evolution of Carbon-dioxide?', 'Combustion', 'Respiration', 'Fermentation', 'Photosynthesis', 'Photosynthesis', 4),
(2, ' In respect of Commercial Banks which entity monitors the Kisan Credit Card (KCC) Scheme?', 'NABARD', 'SIDBI', 'RBI', 'SBI', 'RBI', 3),
(3, 'Which is the religion for which the Fire temple is the place of worship?', 'Hinduism ', 'Jainism', 'Zoroastrianism ', 'Buddhism ', 'Zoroastrianism', 3),
(4, 'When was the first human heart transplant operation, which was performed by Dr. Christian Bernard on Louis Washkansky conducted?', '1943 ', '1988', '1967', '1963 ', '1967 ', 3),
(5, 'Who is this Gentle Man?', 'Shahrukh Khan', 'Amir Khan', 'Salman Khan', 'Sanjay Dutt', 'Amir Khan', 2),
(6, 'Some of the comments on YouTube make you weep for the future of humanity just for the spelling alone, never mind the obscenity and the naked hatred.Which of the Following magazine written this statement ?', 'TIME magazine', 'The New Yorker', 'The Atlantic', 'Hindustan Times', 'TIME magazine', 1),
(7, 'Which social media giant has acquired Tumblr?', 'Google', 'Facebook', 'Yahoo!', 'Rediff', 'Yahoo!', 3),
(8, 'Who\'s actress voice is this?', 'Anushka Sharma', 'Deepika Padukone', 'Katrina Kaif', 'Kareena Kapoor', 'Anushka Sharma', 1),
(9, 'What is the celebration on the last day of Chinese New Year?', 'Chap Goh Meh', 'Mooncake Festival', 'Dumpling Festival', 'lantern festival', 'Chap Goh Meh', 1),
(10, 'If two chickens lay two eggs in two days, how long does it take 100 chickens to lay 100 eggs?', 'One day.', 'Two days', '100 days.', 'The problem can\'t be answered with the information given.', 'Two days', 2);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `phone_number` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_name`, `phone_number`) VALUES
(12, 'divyansh', 12345567),
(14, 'dnjnjnjn', 6543333),
(15, 'divyansh', 6543333),
(16, 'divyansh', 6543333),
(17, 'ds', 32432423),
(18, 'ds', 32432423),
(19, 'dseferf', 32432423),
(20, 'dseferf', 32432423),
(21, 'sd', 0),
(22, 'bjhbj', 2147483647),
(23, 'bjhbj', 2147483647),
(24, 'gf', 0),
(25, 'Divyansh', 2147483647),
(26, 'ds', 2147483647),
(27, 'wq', 432),
(28, 'dsfs', 2147483647),
(29, 'fsfds', 5858),
(30, 'bjhbj', 94875),
(31, 'ds', 3212),
(32, 'hello', 32432423),
(33, 'dseferf', 32432423),
(34, 'bjhbj', 2147483647),
(35, 'Divyansh', 8855555),
(36, 'gghh', 5565656),
(37, 'hiii', 155522),
(38, 'ee', 312312),
(39, 'fsdfds', 13231),
(40, 'ddsds', 423432),
(41, 'mdsa;md;sa', 312312),
(42, 'dsadsa', 31312321),
(43, 'divyansh', 423),
(44, 'bjhbj', 565656),
(45, 'ds', 31231321),
(46, 'rvrvg', 4324324),
(47, 'payal', 2147483647),
(48, 'ppppp', 2147483647);

-- --------------------------------------------------------

--
-- Table structure for table `user_question`
--

CREATE TABLE `user_question` (
  `user_id` int(11) NOT NULL,
  `q_id` int(11) NOT NULL,
  `user_answer` varchar(100) NOT NULL,
  `correct_answer` varchar(100) NOT NULL,
  `points` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_question`
--

INSERT INTO `user_question` (`user_id`, `q_id`, `user_answer`, `correct_answer`, `points`) VALUES
(31, 1, 'Photosynthesis', 'Photosynthesis', 1),
(32, 2, 'NABARD', 'RBI', 0),
(32, 3, 'Zoroastrianism', 'Zoroastrianism', 1),
(32, 4, '1967', '1967 ', 0),
(32, 5, 'Salman Khan', 'Amir Khan', 0),
(32, 6, 'TIME magazine', 'TIME magazine', 1),
(32, 7, 'Yahoo!', 'Yahoo!', 1),
(32, 9, 'Chap Goh Meh', 'Chap Goh Meh', 1),
(32, 10, '100 days.', 'Two days', 0),
(32, 8, 'Anushka Sharma', 'Anushka Sharma', 1),
(32, 1, 'Photosynthesis', 'Photosynthesis', 1),
(35, 1, 'Combustion', 'Photosynthesis', 0),
(35, 2, 'NABARD', 'RBI', 0),
(35, 3, 'Zoroastrianism', 'Zoroastrianism', 1),
(35, 4, '1967', '1967 ', 0),
(35, 5, 'Amir Khan', 'Amir Khan', 1),
(35, 6, 'TIME magazine', 'TIME magazine', 1),
(35, 7, 'Yahoo!', 'Yahoo!', 1),
(35, 8, 'Anushka Sharma', 'Anushka Sharma', 1),
(35, 9, 'Chap Goh Meh', 'Chap Goh Meh', 1),
(35, 10, '100 days.', 'Two days', 0),
(36, 1, 'Fermentation', 'Photosynthesis', 0),
(36, 2, 'NABARD', 'RBI', 0),
(36, 3, 'Hinduism', 'Zoroastrianism', 0),
(36, 4, '1967', '1967 ', 0),
(36, 5, 'Shahrukh Khan', 'Amir Khan', 0),
(36, 6, 'The Atlantic', 'TIME magazine', 0),
(36, 7, 'Rediff', 'Yahoo!', 0),
(36, 8, 'Anushka Sharma', 'Anushka Sharma', 1),
(36, 9, 'Dumpling Festival', 'Chap Goh Meh', 0),
(36, 10, 'One day.', 'Two days', 0),
(37, 10, 'One day.', 'Two days', 0),
(38, 1, 'Combustion', 'Photosynthesis', 0),
(39, 2, 'NABARD', 'RBI', 0),
(40, 1, 'Combustion', 'Photosynthesis', 0),
(41, 1, 'Combustion', 'Photosynthesis', 0),
(41, 3, 'Hinduism', 'Zoroastrianism', 0),
(41, 2, 'NABARD', 'RBI', 0),
(41, 4, '1943', '1967 ', 0),
(41, 5, 'Salman Khan', 'Amir Khan', 0),
(41, 6, 'TIME magazine', 'TIME magazine', 1),
(41, 7, 'Yahoo!', 'Yahoo!', 1),
(43, 1, 'Combustion', 'Photosynthesis', 0),
(46, 1, 'Fermentation', 'Photosynthesis', 0),
(46, 2, 'SBI', 'RBI', 0),
(46, 3, 'Zoroastrianism', 'Zoroastrianism', 1),
(46, 4, '1963', '1967 ', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `question`
--
ALTER TABLE `question`
  ADD PRIMARY KEY (`q_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `user_question`
--
ALTER TABLE `user_question`
  ADD KEY `user_id` (`user_id`),
  ADD KEY `q_id` (`q_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `question`
--
ALTER TABLE `question`
  MODIFY `q_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `user_question`
--
ALTER TABLE `user_question`
  ADD CONSTRAINT `user_question_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`),
  ADD CONSTRAINT `user_question_ibfk_2` FOREIGN KEY (`q_id`) REFERENCES `question` (`q_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
