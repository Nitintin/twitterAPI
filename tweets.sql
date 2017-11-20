-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 20, 2017 at 07:27 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `letx`
--

-- --------------------------------------------------------

--
-- Table structure for table `tweets`
--

CREATE TABLE `tweets` (
  `uid` int(11) NOT NULL,
  `text` text NOT NULL,
  `created_at` varchar(255) NOT NULL,
  `tweet_id` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tweets`
--

INSERT INTO `tweets` (`uid`, `text`, `created_at`, `tweet_id`) VALUES
(1, 'Under President Trump unemployment rate will drop below 4%.  Analysts predict economic boom for 2018!  @foxandfriends and @Varneyco', 'Mon Nov 20 11:55:57 +0000 2017', '932578255810498560'),
(2, 'Marshawn Lynch of the NFLâ€™s Oakland Raiders stands for the Mexican Anthem and sits down to boos for our National Anâ€¦ https://t.co/5P18NSv8ZW', 'Mon Nov 20 11:25:38 +0000 2017', '932570628451954688'),
(3, 'Republican Senators are working very hard to get Tax Cuts and Tax Reform approved. Hopefully it will not be long anâ€¦ https://t.co/m0GyFBDPkQ', 'Mon Nov 20 02:21:24 +0000 2017', '932433668068528131'),
(4, 'Border Patrol Officer killed at Southern Border, another badly hurt. We will seek out and bring to justice those reâ€¦ https://t.co/rgYCrqyrR9', 'Mon Nov 20 01:29:02 +0000 2017', '932420488642617344'),
(5, 'Big-game trophy decision will be announced next week but will be very hard pressed to change my mind that this horrâ€¦ https://t.co/HgHgIVikj3', 'Sun Nov 19 23:57:10 +0000 2017', '932397369655808001'),
(6, 'Shoplifting is a very big deal in China, as it should be (5-10 years in jail), but not to father LaVar. Should haveâ€¦ https://t.co/TyDMChjEIM', 'Sun Nov 19 23:36:40 +0000 2017', '932392209445457920'),
(7, 'Now that the three basketball players are out of China and saved from years in jail, LaVar Ball, the father of LiAnâ€¦ https://t.co/371qJ1biwh', 'Sun Nov 19 17:42:36 +0000 2017', '932303108146892801'),
(8, 'RT @greta: Thank you @realDonaldTrump - this is important to so many of us https://t.co/zJAfZByQKX', 'Sat Nov 18 13:49:51 +0000 2017', '931882145181773826'),
(9, 'RT @piersmorgan: BOOM! Thank you, Mr President. Trophy-hunting is repellent. https://t.co/iEPfEQNX4t', 'Sat Nov 18 13:49:27 +0000 2017', '931882044044529665'),
(10, 'Crooked Hillary Clinton is the worst (and biggest) loser of all time. She just canâ€™t stop, which is so good for theâ€¦ https://t.co/dsLJX3x1M3', 'Sat Nov 18 13:31:47 +0000 2017', '931877599034388480');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tweets`
--
ALTER TABLE `tweets`
  ADD PRIMARY KEY (`uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tweets`
--
ALTER TABLE `tweets`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=291;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
