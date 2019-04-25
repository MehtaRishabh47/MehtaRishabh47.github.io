-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 15, 2018 at 04:29 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `iwt`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cid` int(25) NOT NULL,
  `pid` int(20) NOT NULL,
  `uid` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `movielist`
--

CREATE TABLE `movielist` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `dprice` int(10) NOT NULL,
  `img` varchar(200) NOT NULL,
  `year` int(11) NOT NULL,
  `genre` varchar(20) NOT NULL,
  `description` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `movielist`
--

INSERT INTO `movielist` (`id`, `name`, `dprice`, `img`, `year`, `genre`, `description`) VALUES
(1, 'Man of Steel', 310, 'mos.jpg', 2012, 'action', 'When a young boy discovers that he has extraordinary powers, he decides to find out about his origin. He then fights for Earth when members of his own race launch an attack.'),
(2, 'Lord of the Rings', 245, 'lotr.jpg', 2010, 'sci-fi', 'A young hobbit, Frodo, who has found the One Ring that belongs to the Dark Lord Sauron, begins his journey with eight companions to Mount Doom, the only place where it can be destroyed.'),
(3, 'Saving Private Ryan', 150, 'spr.jpg', 2010, 'action', 'During the Normandy invasion of World War II, Captain John Miller is assigned the task of searching for Private James Ryan, whose three brothers have already been killed in the war.'),
(4, 'Toy Story', 180, 'toy.jpg', 2010, 'comedy', 'Andy\'s favourite toy, Woody, is worried that after Andy receives his birthday gift, a new toy called Buzz Lightyear, his importance may get reduced. He thus hatches a plan to eliminate Buzz.'),
(5, 'Mission Impossible Rogue Nation', 350, 'MIRN.jpg', 2015, 'action', 'With the IMF disbanded and the CIA hunting him, Ethan and his team race against time to prove the existence of the Syndicate, a highly-skilled terror organisation, before they plan their next attack.'),
(9, 'The Conjuring', 355, 'cjrng.jpg', 2014, 'horror', 'Rod and Carolyn find their pet dog dead under mysterious circumstances and experience a spirit that harms their daughter Andrea. They finally call investigators who can help them get out of the mess.'),
(10, 'Ready Player One', 455, 'rpo.jpg', 2018, 'sci-fi', 'The film takes place in 2045, when much of humanity uses the virtual reality software OASIS to escape the desolation of the real world. Orphaned teenager Wade Watts (Sheridan) discovers clues to a hidden game within the program that promises the winner full ownership of the OASIS, and joins several allies to try to complete the game before a large company run by businessman Nolan Sorrento (Mendelsohn) can do so. '),
(12, 'Batman v Superman Dawn Of Justice', 455, 'BvS.jpg', 2016, 'action', 'Batman vs Superman');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `oid` int(11) NOT NULL,
  `pid` int(10) NOT NULL,
  `uid` int(10) NOT NULL,
  `date` date NOT NULL,
  `address` varchar(60) NOT NULL,
  `phone` int(10) NOT NULL,
  `fullname` varchar(20) NOT NULL,
  `payment` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`oid`, `pid`, `uid`, `date`, `address`, `phone`, `fullname`, `payment`) VALUES
(13, 4, 3, '2018-11-15', 'Dahisar', 2147483647, 'Tanmay Nadkarni', 'cash on delivery'),
(14, 4, 3, '2018-11-15', 'Dahisar', 2147483647, 'Tanmay Nadkarni', 'cash on delivery'),
(15, 4, 3, '2018-11-15', 'Dahisar', 2147483647, 'Tanmay Nadkarni', 'cash on delivery'),
(16, 4, 3, '2018-11-15', 'Dahisar', 2147483647, 'Tanmay Nadkarni', 'cash on delivery'),
(17, 3, 3, '2018-11-15', 'dsfgdfg', 2147483647, 'dfgd', 'paytm'),
(18, 5, 3, '2018-11-15', 'Dahisar', 2147483647, 'Tan', 'credit card'),
(19, 3, 3, '2018-11-15', 'Dahisar', 2147483647, 'Tan', 'credit card'),
(20, 10, 2, '2018-11-15', 'Mumbai', 2147483647, 'Leo', 'cash on delivery'),
(21, 10, 2, '2018-11-15', 'sdf', 2147483647, 'sdf', 'credit card'),
(22, 1, 2, '2018-11-15', 'sdf', 2147483647, 'sdf', 'credit card'),
(23, 2, 3, '2018-11-15', 'new york', 2147483647, 'John', 'credit card'),
(24, 3, 2, '2018-11-15', '', 0, '', 'cash on delivery'),
(25, 3, 2, '2018-11-15', '', 0, '', 'cash on delivery'),
(26, 3, 2, '2018-11-15', 'fhfh', 1999999999, 'hfhg', 'paytm'),
(27, 4, 3, '2018-11-15', 'kandivali', 2147483647, 'Tanmay', 'cash on delivery'),
(28, 12, 3, '2018-11-15', 'kandivali', 2147483647, 'Tanmay', 'cash on delivery');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pswd` varchar(10) NOT NULL,
  `cpswd` varchar(10) NOT NULL,
  `admin` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `gender`, `email`, `pswd`, `cpswd`, `admin`) VALUES
(2, 'Rishabh', 'Male', 'rishabh.mehta1998@gmail.com', 'leo10', 'leo10', 1),
(3, 'Tanmay', 'Male', 'tanmayn98@gmail.com', 'tan98', 'tan98', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `movielist`
--
ALTER TABLE `movielist`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`oid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cid` int(25) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `movielist`
--
ALTER TABLE `movielist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `oid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
