-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 13, 2017 at 06:56 PM
-- Server version: 5.5.57-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `final`
--

-- --------------------------------------------------------

--
-- Table structure for table `fp_login`
--

CREATE TABLE `fp_login` (
  `userId` int(11) NOT NULL,
  `username` varchar(10) NOT NULL,
  `password` varchar(40) NOT NULL,
  `lastLogin` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `lastLoginStatus` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fp_login`
--

INSERT INTO `fp_login` (`userId`, `username`, `password`, `lastLogin`, `lastLoginStatus`) VALUES
(1, 'bob', '48181acd22b3edaebc8a447868a7df7ce629920a', '2017-12-11 18:53:25', 'U'),
(2, 'joe', '16a9a54ddf4259952e3c118c763138e83693d7fd', '2017-12-11 18:52:59', 'U'),
(3, 'sue', '1eac7bdcbb6c569f15ecbf5cd873a2c477888e56', '2017-12-11 18:53:25', 'U');

-- --------------------------------------------------------

--
-- Table structure for table `f_admin`
--

CREATE TABLE `f_admin` (
  `adminid` int(11) NOT NULL,
  `firstName` varchar(10) NOT NULL,
  `lastName` varchar(15) NOT NULL,
  `username` varchar(14) NOT NULL,
  `password` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `f_admin`
--

INSERT INTO `f_admin` (`adminid`, `firstName`, `lastName`, `username`, `password`) VALUES
(1, 'Cory', 'Heads', 'Shoejuggler', '7d800e156db9da3f427600cc7f3454152b609027'),
(2, 'user', '1', 'user1', 'b3daa77b4c04a9551b8781d03191fe098f325e67');

-- --------------------------------------------------------

--
-- Table structure for table `f_author`
--

CREATE TABLE `f_author` (
  `authorID` int(11) NOT NULL,
  `autName` varchar(35) NOT NULL,
  `artName` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `f_author`
--

INSERT INTO `f_author` (`authorID`, `autName`, `artName`) VALUES
(1, 'Moore, Alan ', 'Bissette, Stephen'),
(2, 'Takahashi, Rumiko', 'Takahashi, Rumiko'),
(3, 'Ellis, Warren', 'Immonen, Stuart'),
(4, 'Kelly, Joe', 'McGuinness, Joe'),
(5, 'Mignola, Mike', 'Mignola, Mike'),
(6, 'Sakai, Stan', 'Sakai, Stan'),
(7, 'Gerber, Steve', 'Mayerik, Val'),
(8, 'Kirby, Jack', 'Kirby, Jack'),
(9, 'Smith, Jeff', 'Smith, Jeff'),
(10, 'Vaughan, Brian', 'Staples, Fiona '),
(11, 'Eastman, Kevin', 'Various'),
(12, 'Finger, Bill', 'Various'),
(13, 'Ditko, Steve', 'Various'),
(14, 'Siegel, Jerry', 'Various'),
(15, 'Ito, Junji', 'Ito, Junji'),
(16, 'Stokoe, James', 'Stokoe, James'),
(17, 'Remender, Rick', 'Various'),
(18, 'Giffen, Keith ', 'Maguire, Kevin');

-- --------------------------------------------------------

--
-- Table structure for table `f_comics`
--

CREATE TABLE `f_comics` (
  `comicID` tinyint(4) NOT NULL,
  `comicName` varchar(40) NOT NULL,
  `publisher` varchar(10) NOT NULL,
  `releaseDate` int(9) DEFAULT NULL,
  `cover` varchar(200) NOT NULL,
  `authorID` int(11) NOT NULL,
  `genreID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `f_comics`
--

INSERT INTO `f_comics` (`comicID`, `comicName`, `publisher`, `releaseDate`, `cover`, `authorID`, `genreID`) VALUES
(1, 'The Saga of Swamp Thing', 'DC', 1987, 'https://images-na.ssl-images-amazon.com/images/S/cmx-images-prod/Item/50784/50784._SX1280_QL80_TTD_.jpg', 1, 1),
(2, 'Man-Thing', 'Marvel', 1971, 'https://vignette1.wikia.nocookie.net/marveldatabase/images/b/b5/Man-Thing_Vol_1_1.jpg/revision/latest?cb=20070410125318', 7, 1),
(3, 'Bone', 'Image', 1991, 'https://i.pinimg.com/originals/73/3f/ca/733fca8cea8f1ea1ad1a3e5eb4fad32a.jpg', 9, 5),
(5, 'Urusei Yatsura', 'Viz Media', 1978, 'https://static.comicvine.com/uploads/scale_large/13/136525/5795674-32.jpg', 2, 2),
(6, 'Ranma 1/2', 'Viz Media', 1987, 'https://vignette.wikia.nocookie.net/ranma/images/4/4f/RanmaVolume1.png/revision/latest?cb=20121109064115', 2, 2),
(7, 'Deadpool', 'Marvel', 1997, 'http://cdn.collider.com/wp-content/uploads/2015/08/deadpool-comic-1.jpg', 4, 3),
(12, 'Hellboy', 'Dark Horse', 1993, 'https://d2lzb5v10mb0lj.cloudfront.net/covers/300/12/12948.jpg', 5, 1),
(13, 'Superman', 'DC', 1938, 'https://upload.wikimedia.org/wikipedia/en/5/5a/Action_Comics_1.jpg', 14, 3),
(15, 'New Gods', 'DC', 1971, 'https://leiulf.files.wordpress.com/2012/01/new-gods-1.jpg', 8, 4),
(16, 'Batman', 'DC', 1939, 'https://vignette1.wikia.nocookie.net/marvel_dc/images/a/a8/Detective_Comics_27.jpg/revision/latest?cb=20140906210315', 12, 3),
(17, 'Teenage Mutant Ninja Turtles (IDW)', 'IDW', 2011, 'https://upload.wikimedia.org/wikipedia/en/thumb/6/60/TMNT_IDW_no_2_cover.jpg/250px-TMNT_IDW_no_2_cover.jpg', 11, 3),
(18, 'Nextwave', 'Marvel', 2006, 'http://webegeekspc.com/wp-content/uploads/2013/06/NextwaveCover.png', 3, 3),
(19, 'Usagi Yojimbo', 'Dark Horse', 1984, 'http://bigtimenoise.com/roninrabbit/files/2015/01/Usagi-Yojimbo-v1-29-cover.jpg', 6, 3),
(20, 'The Amazing Spider-Man', 'Marvel', 1962, 'https://vignette.wikia.nocookie.net/marvelpuzzlequest/images/a/a2/Spider-Man_%28Original%29.png/revision/latest?cb=20150810172001', 13, 3),
(21, 'Fantastic Four', 'Marvel', 1961, 'https://images.complex.com/complex/image/upload/c_limit,w_680/fl_lossy,pg_1,q_auto/s5pksfetlotgoqpg549a.jpg', 8, 4),
(22, 'Uzumaki', 'Viz Media', 1998, 'https://i.pinimg.com/originals/32/04/e3/3204e3db75b14a580248062611cdcf76.jpg', 15, 1),
(23, 'Gyo', 'Viz Media', 2001, 'https://13thdimension.com/wp-content/uploads/2015/09/Gyo-2-copy.jpg', 15, 1),
(24, 'tyme man', 'marvel', NULL, 'eerf', 0, 3),
(25, 'Howard the Duck', 'Marvel', 1973, 'https://www.fourcolorcomics.com/sc/2076490?height=-1', 7, 2),
(26, 'Venom', 'Marvel', 2011, 'http://vignette1.wikia.nocookie.net/marveldatabase/images/0/03/Venom_Vol_2_2.jpg/revision/latest?cb=20110428065822', 17, 3),
(27, 'Orc Stain', 'Image', 2010, 'http://comicsalliance.com/files/2011/07/jamesstokoe-orcstain-01-580-00.jpg', 16, 5),
(28, 'Justice League International', 'DC', 1987, 'https://upload.wikimedia.org/wikipedia/en/thumb/0/03/Justice_League_1_DC_1987.jpg/250px-Justice_League_1_DC_1987.jpg', 18, 3),
(29, 'aysys', 'were', NULL, '', 0, 3);

-- --------------------------------------------------------

--
-- Table structure for table `f_genre`
--

CREATE TABLE `f_genre` (
  `genreID` tinyint(4) NOT NULL,
  `genre` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `f_genre`
--

INSERT INTO `f_genre` (`genreID`, `genre`) VALUES
(1, 'Horror'),
(2, 'Comedy'),
(3, 'Action'),
(4, 'Sci-fi'),
(5, 'Fantasy');

-- --------------------------------------------------------

--
-- Table structure for table `quiz_attempts`
--

CREATE TABLE `quiz_attempts` (
  `userId` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `lastScore` int(11) NOT NULL,
  `attempts` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `quiz_attempts`
--

INSERT INTO `quiz_attempts` (`userId`, `email`, `lastScore`, `attempts`) VALUES
(1, 'tjulian@csumb.edu', 0, 9),
(2, 'jsullivan51', 2, 1),
(6, 'joe@hotmail.com', 2, 7),
(13, 'bob@gmail.com', 1, 2);

--
-- Triggers `quiz_attempts`
--
DELIMITER $$
CREATE TRIGGER `track_attempts` BEFORE UPDATE ON `quiz_attempts` FOR EACH ROW SET NEW.attempts = OLD.attempts + 1
$$
DELIMITER ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `fp_login`
--
ALTER TABLE `fp_login`
  ADD PRIMARY KEY (`userId`);

--
-- Indexes for table `f_admin`
--
ALTER TABLE `f_admin`
  ADD PRIMARY KEY (`adminid`);

--
-- Indexes for table `f_author`
--
ALTER TABLE `f_author`
  ADD PRIMARY KEY (`authorID`);

--
-- Indexes for table `f_comics`
--
ALTER TABLE `f_comics`
  ADD PRIMARY KEY (`comicID`);

--
-- Indexes for table `f_genre`
--
ALTER TABLE `f_genre`
  ADD PRIMARY KEY (`genreID`);

--
-- Indexes for table `quiz_attempts`
--
ALTER TABLE `quiz_attempts`
  ADD PRIMARY KEY (`userId`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `fp_login`
--
ALTER TABLE `fp_login`
  MODIFY `userId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `f_admin`
--
ALTER TABLE `f_admin`
  MODIFY `adminid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `f_author`
--
ALTER TABLE `f_author`
  MODIFY `authorID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `f_comics`
--
ALTER TABLE `f_comics`
  MODIFY `comicID` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `f_genre`
--
ALTER TABLE `f_genre`
  MODIFY `genreID` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `quiz_attempts`
--
ALTER TABLE `quiz_attempts`
  MODIFY `userId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
