-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 03, 2023 at 04:11 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `funflix`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `adname` varchar(20) NOT NULL,
  `adpsw` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `adname`, `adpsw`) VALUES
(1, 'admin', 'Admin123');

-- --------------------------------------------------------

--
-- Table structure for table `casting`
--

CREATE TABLE `casting` (
  `act_id` int(240) NOT NULL,
  `mid` int(200) NOT NULL,
  `mname` varchar(80) NOT NULL,
  `actname` varchar(30) NOT NULL,
  `actrole` varchar(40) NOT NULL,
  `actimg` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `casting`
--

INSERT INTO `casting` (`act_id`, `mid`, `mname`, `actname`, `actrole`, `actimg`) VALUES
(1, 6, 'Thor: Love and Thunder', 'Chris Hemsworth', 'Lead Actor', 'chris_hemsworth.jfif'),
(2, 6, 'Thor: Love and Thunder', 'Natalie Portman', 'Lead Actress', 'natalie.jpg'),
(3, 6, 'Thor: Love and Thunder', 'Christian Bale', 'Villain', 'Christian_Bale.jpg'),
(4, 6, 'Thor: Love and Thunder', 'Taika Waititi', 'Director', '590955_v9_bc.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `movies`
--

CREATE TABLE `movies` (
  `mid` int(200) NOT NULL,
  `mname` varchar(80) NOT NULL,
  `releasedate` int(11) NOT NULL,
  `genre` varchar(40) NOT NULL,
  `descp` varchar(800) NOT NULL,
  `runt` int(11) NOT NULL,
  `lang` varchar(40) NOT NULL,
  `bimg` varchar(150) NOT NULL,
  `mimg` varchar(150) NOT NULL,
  `vid` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `movies`
--

INSERT INTO `movies` (`mid`, `mname`, `releasedate`, `genre`, `descp`, `runt`, `lang`, `bimg`, `mimg`, `vid`) VALUES
(1, 'Shang-Chi and the Legend of the Ten Rings', 2021, 'Action,Adventure', 'Shang-Chi, a martial artist, lives a quiet life after he leaves his father and the shadowy Ten Rings organisation behind. Years later, he is forced to confront his past when the Ten Rings attack him.', 132, 'English', 'shangchi-crop.png', 'Shang-Chi and the Legend of the Ten Rings (2021).jpg', 'Shang-Chi and the Legend of the Ten Rings.mp4'),
(2, 'John Wick: Chapter 3 – Parabellum', 2019, 'action,Thriller ', 'John Wick is declared excommunicado and a hefty bounty is set on him after he murders an international crime lord. He sets out to seek help to save himself from ruthless hitmen and bounty hunters.', 131, 'English', 'johnwick3overlay.png', 'John Wick- Chapter 3 - Parabellum (2019).png', 'John Wick_ Chapter 3 - Parabellum (2019).mp4'),
(3, 'Doctor Strange in the Multiverse of Madness', 2022, 'Action,Adventure', 'Doctor Strange teams up with a mysterious teenage girl from his dreams who can travel across multiverses, to battle multiple threats, including other-universe versions of himself, which threaten to wipe out millions across the multiverse.', 126, 'English', 'doctormadnessoverlay.png', 'Doctor Strange in the Multiverse of Madness.png', 'Doctor Strange in the Multiverse of Madness.mp4'),
(4, 'Avatar: The Way of Water', 2022, 'Sci-fi,Action', 'Jake Sully and Ney\'tiri have formed a family and are doing everything to stay together. However, they must leave their home and explore the regions of Pandora. When an ancient threat resurfaces, Jake must fight a difficult war against the humans.', 192, 'English', 'avatar2overlay.png', 'Avatar- The Way of Water (2022).jpg', 'Avatar-The Way of Water.mp4'),
(5, 'Jungle Cruise', 2021, 'Action,Adventure', 'Dr Lily Houghton, a researcher, and her brother team up with Frank, a skipper, to locate a mystical tree in the Amazon. However, they are pursued by evil entities lusting after immortality.', 127, 'English', 'junglecruise-crop2.png', 'Jungle Cruise (2021).jpg', 'Jungle Cruise _ Official Trailer.mp4'),
(6, 'Thor: Love and Thunder', 2022, 'Action,Adventure', 'Marvel Studios’ “Thor: Love and Thunder” finds the God of Thunder on a journey unlike anything he’s ever faced—one of self-discovery.  But his efforts are interrupted by a galactic killer known as Gorr the God Butcher, who seeks the extinction of the gods.  To combat the threat, Thor enlists the help of King Valkyrie,  Korg and ex-girlfriend Jane Foster, who—to Thor’s surprise—inexplicably wields his  magical hammer, Mjolnir, as the Mighty Thor.', 119, 'English', 'thoroverlay.png', 'Thor- Love and Thunder (2022).png', 'Marvel Studios Thor Love and Thunder.mp4'),
(7, 'Spider-Man: No Way Home', 2021, 'Action,Adventure', 'Spider-Man seeks the help of Doctor Strange to forget his exposed secret identity as Peter Parker. However, Strange\'s spell goes horribly wrong, leading to unwanted guests entering their universe.', 148, 'English', 'spiderm1an-crop.png', 'Spider-Man- No Way Home (2021).jpg', 'Spiderman no way Home.mp4'),
(8, 'Joker', 2019, 'Thriller,Crime', 'Arthur Fleck, a party clown, leads an impoverished life with his ailing mother. However, when society shuns him and brands him as a freak, he decides to embrace the life of crime and chaos.', 122, 'English', 'joker-crop.png', 'Joker (2019).png', 'JOKER - Final Trailer.mp4'),
(9, '1917', 2019, 'War-Drama', 'Two soldiers, assigned the task of delivering a critical message to another battalion, risk their lives for the job in order to prevent them from stepping right into a deadly ambush.', 119, 'English', '1917-crop.png', '1917 (2019).jpeg', '1917.mp4'),
(10, 'Dune', 2021, 'Sci-fi,Adventure', 'Paul Atreides arrives on Arrakis after his father accepts the stewardship of the dangerous planet. However, chaos ensues after a betrayal as forces clash to control melange, a precious resource.', 155, 'English', 'dune-crop.png', 'Dune (2021).jpg', 'Dune trailer.mp4'),
(11, 'Mission: Impossible - Fallout', 2018, 'Action,Thriller', 'A group of terrorists plans to detonate three plutonium cores for a simultaneous nuclear attack on different cities. Ethan Hunt, along with his IMF team, sets out to stop the carnage.', 148, 'English', 'MIoverlay.png', 'Mission- Impossible - Fallout (2018).png', 'Mission Impossible - Fallout (2018) - Official Trailer.mp4'),
(12, 'No Time to Die', 2021, 'Action,Thriller ', 'James Bond is enjoying a tranquil life in Jamaica after leaving active service. However, his peace is short-lived as his old CIA friend, Felix Leiter, shows up and asks for help. The mission to rescue a kidnapped scientist turns out to be far more treacherous than expected, leading Bond on the trail of a mysterious villain who\'s armed with a dangerous new technology.', 163, 'English', 'jamesbond-crop.png', 'No Time to Die (2021).png', 'NO TIME TO DIE Trailer.mp4');

--
-- Triggers `movies`
--
DELIMITER $$
CREATE TRIGGER `insert_logs` AFTER INSERT ON `movies` FOR EACH ROW INSERT INTO movie_logs(mid,mname,action,timestamp) 
VALUES(NEW.mid,NEW.mname,'inserted', NOW())
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `movie_logs`
--

CREATE TABLE `movie_logs` (
  `log_id` int(200) NOT NULL,
  `mid` int(200) NOT NULL,
  `mname` varchar(80) NOT NULL,
  `action` varchar(30) NOT NULL,
  `timestamp` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `movie_logs`
--

INSERT INTO `movie_logs` (`log_id`, `mid`, `mname`, `action`, `timestamp`) VALUES
(1, 12, 'No Time to Die', 'inserted', '2023-01-18 20:00:32');

-- --------------------------------------------------------

--
-- Table structure for table `rating`
--

CREATE TABLE `rating` (
  `rid` int(200) NOT NULL,
  `mid` int(200) NOT NULL,
  `mname` varchar(80) NOT NULL,
  `rating_no` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `rating`
--

INSERT INTO `rating` (`rid`, `mid`, `mname`, `rating_no`) VALUES
(1, 1, 'Shang-Chi and the Legend of the Ten Rings', 7.4),
(2, 2, 'John Wick: Chapter 3 – Parabellum', 7.4),
(3, 3, 'Doctor Strange in the Multiverse of Madness', 6.9),
(4, 4, 'Avatar: The Way of Water', 7.9),
(5, 6, 'Thor: Love and Thunder', 6.3);

-- --------------------------------------------------------

--
-- Table structure for table `user_regis`
--

CREATE TABLE `user_regis` (
  `id` int(50) NOT NULL,
  `uname` varchar(30) NOT NULL,
  `uemail` varchar(35) NOT NULL,
  `upsw` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_regis`
--

INSERT INTO `user_regis` (`id`, `uname`, `uemail`, `upsw`) VALUES
(1, 'user', 'user@gmail.com', 'User123'),
(2, 'tharun', 'tharun@gmail.com', 'Tharun123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `casting`
--
ALTER TABLE `casting`
  ADD PRIMARY KEY (`act_id`),
  ADD KEY `mid` (`mid`);

--
-- Indexes for table `movies`
--
ALTER TABLE `movies`
  ADD PRIMARY KEY (`mid`);

--
-- Indexes for table `movie_logs`
--
ALTER TABLE `movie_logs`
  ADD PRIMARY KEY (`log_id`),
  ADD KEY `mid` (`mid`);

--
-- Indexes for table `rating`
--
ALTER TABLE `rating`
  ADD PRIMARY KEY (`rid`),
  ADD KEY `mid` (`mid`);

--
-- Indexes for table `user_regis`
--
ALTER TABLE `user_regis`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `casting`
--
ALTER TABLE `casting`
  MODIFY `act_id` int(240) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `movies`
--
ALTER TABLE `movies`
  MODIFY `mid` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `movie_logs`
--
ALTER TABLE `movie_logs`
  MODIFY `log_id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `rating`
--
ALTER TABLE `rating`
  MODIFY `rid` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user_regis`
--
ALTER TABLE `user_regis`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `casting`
--
ALTER TABLE `casting`
  ADD CONSTRAINT `casting_ibfk_1` FOREIGN KEY (`mid`) REFERENCES `movies` (`mid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `movie_logs`
--
ALTER TABLE `movie_logs`
  ADD CONSTRAINT `movie_logs_ibfk_1` FOREIGN KEY (`mid`) REFERENCES `movies` (`mid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `rating`
--
ALTER TABLE `rating`
  ADD CONSTRAINT `rating_ibfk_1` FOREIGN KEY (`mid`) REFERENCES `movies` (`mid`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
