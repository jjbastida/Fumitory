-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 15, 2019 at 08:47 AM
-- Server version: 10.1.38-MariaDB-cll-lve
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fumipkfg_fumitory`
--

-- --------------------------------------------------------

--
-- Table structure for table `aidan_progress`
--

CREATE TABLE `aidan_progress` (
  `patientNumber` int(3) DEFAULT NULL,
  `patientName` varchar(75) DEFAULT NULL,
  `patientStatus` varchar(10) DEFAULT NULL,
  `patientHealth` int(3) DEFAULT NULL,
  `bestItemType` varchar(30) DEFAULT NULL,
  `worstItemType` varchar(30) DEFAULT NULL,
  `usedItems` text,
  `usedDialogue` int(3) DEFAULT NULL,
  `unlockTime` int(20) DEFAULT NULL,
  `healthTimer` int(20) DEFAULT NULL,
  `lockTimer` int(20) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `BennyD_progress`
--

CREATE TABLE `BennyD_progress` (
  `patientNumber` int(3) DEFAULT NULL,
  `patientName` varchar(75) DEFAULT NULL,
  `patientStatus` varchar(10) DEFAULT NULL,
  `patientHealth` int(3) DEFAULT NULL,
  `bestItemType` varchar(30) DEFAULT NULL,
  `worstItemType` varchar(30) DEFAULT NULL,
  `usedItems` text,
  `usedDialogue` int(3) DEFAULT NULL,
  `unlockTime` int(20) DEFAULT NULL,
  `healthTimer` int(20) DEFAULT NULL,
  `lockTimer` int(20) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `BennyD_progress`
--

INSERT INTO `BennyD_progress` (`patientNumber`, `patientName`, `patientStatus`, `patientHealth`, `bestItemType`, `worstItemType`, `usedItems`, `usedDialogue`, `unlockTime`, `healthTimer`, `lockTimer`) VALUES
(0, 'Biordo', 'dead', -47, 'Sweet', 'Bitter', '', 2, 1554003521, 1554936879, 1554222865),
(1, 'Agnella', 'dead', -235, 'Disinfectant', 'Sweet', 'Geranium', 1, 1554222852, 1554936879, 1554222887),
(2, 'Maffeo', 'sick', 53, 'General', 'Spiritual', 'Geranium', 1, 1554812949, 1554936879, 1554813040);

-- --------------------------------------------------------

--
-- Table structure for table `Ben_progress`
--

CREATE TABLE `Ben_progress` (
  `patientNumber` int(3) DEFAULT NULL,
  `patientName` varchar(75) DEFAULT NULL,
  `patientStatus` varchar(10) DEFAULT NULL,
  `patientHealth` int(3) DEFAULT NULL,
  `bestItemType` varchar(30) DEFAULT NULL,
  `worstItemType` varchar(30) DEFAULT NULL,
  `usedItems` text,
  `usedDialogue` int(3) DEFAULT NULL,
  `unlockTime` int(20) DEFAULT NULL,
  `healthTimer` int(20) DEFAULT NULL,
  `lockTimer` int(20) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `Bigman_progress`
--

CREATE TABLE `Bigman_progress` (
  `patientNumber` int(3) DEFAULT NULL,
  `patientName` varchar(75) DEFAULT NULL,
  `patientStatus` varchar(10) DEFAULT NULL,
  `patientHealth` int(3) DEFAULT NULL,
  `bestItemType` varchar(30) DEFAULT NULL,
  `worstItemType` varchar(30) DEFAULT NULL,
  `usedItems` text,
  `usedDialogue` int(3) DEFAULT NULL,
  `unlockTime` int(20) DEFAULT NULL,
  `healthTimer` int(20) DEFAULT NULL,
  `lockTimer` int(20) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `Bondedness_progress`
--

CREATE TABLE `Bondedness_progress` (
  `patientNumber` int(3) DEFAULT NULL,
  `patientName` varchar(75) DEFAULT NULL,
  `patientStatus` varchar(10) DEFAULT NULL,
  `patientHealth` int(3) DEFAULT NULL,
  `bestItemType` varchar(30) DEFAULT NULL,
  `worstItemType` varchar(30) DEFAULT NULL,
  `usedItems` text,
  `usedDialogue` int(3) DEFAULT NULL,
  `unlockTime` int(20) DEFAULT NULL,
  `healthTimer` int(20) DEFAULT NULL,
  `lockTimer` int(20) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `Carlo_progress`
--

CREATE TABLE `Carlo_progress` (
  `patientNumber` int(3) DEFAULT NULL,
  `patientName` varchar(75) DEFAULT NULL,
  `patientStatus` varchar(10) DEFAULT NULL,
  `patientHealth` int(3) DEFAULT NULL,
  `bestItemType` varchar(30) DEFAULT NULL,
  `worstItemType` varchar(30) DEFAULT NULL,
  `usedItems` text,
  `usedDialogue` int(3) DEFAULT NULL,
  `unlockTime` int(20) DEFAULT NULL,
  `healthTimer` int(20) DEFAULT NULL,
  `lockTimer` int(20) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Carlo_progress`
--

INSERT INTO `Carlo_progress` (`patientNumber`, `patientName`, `patientStatus`, `patientHealth`, `bestItemType`, `worstItemType`, `usedItems`, `usedDialogue`, `unlockTime`, `healthTimer`, `lockTimer`) VALUES
(0, 'Biordo', 'curing', 90, 'Sweet', 'Bitter', 'Paper Talisman', 1, 1554851529, 1554851529, 1554851568);

-- --------------------------------------------------------

--
-- Table structure for table `drawesome_progress`
--

CREATE TABLE `drawesome_progress` (
  `patientNumber` int(3) DEFAULT NULL,
  `patientName` varchar(75) DEFAULT NULL,
  `patientStatus` varchar(10) DEFAULT NULL,
  `patientHealth` int(3) DEFAULT NULL,
  `bestItemType` varchar(30) DEFAULT NULL,
  `worstItemType` varchar(30) DEFAULT NULL,
  `usedItems` text,
  `usedDialogue` int(3) DEFAULT NULL,
  `unlockTime` int(20) DEFAULT NULL,
  `healthTimer` int(20) DEFAULT NULL,
  `lockTimer` int(20) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `duaazaheer_progress`
--

CREATE TABLE `duaazaheer_progress` (
  `patientNumber` int(3) DEFAULT NULL,
  `patientName` varchar(75) DEFAULT NULL,
  `patientStatus` varchar(10) DEFAULT NULL,
  `patientHealth` int(3) DEFAULT NULL,
  `bestItemType` varchar(30) DEFAULT NULL,
  `worstItemType` varchar(30) DEFAULT NULL,
  `usedItems` text,
  `usedDialogue` int(3) DEFAULT NULL,
  `unlockTime` int(20) DEFAULT NULL,
  `healthTimer` int(20) DEFAULT NULL,
  `lockTimer` int(20) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `Fart_progress`
--

CREATE TABLE `Fart_progress` (
  `patientNumber` int(3) DEFAULT NULL,
  `patientName` varchar(75) DEFAULT NULL,
  `patientStatus` varchar(10) DEFAULT NULL,
  `patientHealth` int(3) DEFAULT NULL,
  `bestItemType` varchar(30) DEFAULT NULL,
  `worstItemType` varchar(30) DEFAULT NULL,
  `usedItems` text,
  `usedDialogue` int(3) DEFAULT NULL,
  `unlockTime` int(20) DEFAULT NULL,
  `healthTimer` int(20) DEFAULT NULL,
  `lockTimer` int(20) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `herblord_progress`
--

CREATE TABLE `herblord_progress` (
  `patientNumber` int(3) DEFAULT NULL,
  `patientName` varchar(75) DEFAULT NULL,
  `patientStatus` varchar(10) DEFAULT NULL,
  `patientHealth` int(3) DEFAULT NULL,
  `bestItemType` varchar(30) DEFAULT NULL,
  `worstItemType` varchar(30) DEFAULT NULL,
  `usedItems` text,
  `usedDialogue` int(3) DEFAULT NULL,
  `unlockTime` int(20) DEFAULT NULL,
  `healthTimer` int(20) DEFAULT NULL,
  `lockTimer` int(20) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `herblord_progress`
--

INSERT INTO `herblord_progress` (`patientNumber`, `patientName`, `patientStatus`, `patientHealth`, `bestItemType`, `worstItemType`, `usedItems`, `usedDialogue`, `unlockTime`, `healthTimer`, `lockTimer`) VALUES
(0, 'Biordo', 'curing', 85, 'Sweet', 'Bitter', 'Geranium', 7, 1554136149, 1555038699, 1555038708),
(1, 'Agnella', 'curing', 24, 'Disinfectant', 'Sweet', '', 4, 1554505926, 1555038699, 1555038714),
(2, 'Maffeo', 'curing', 63, 'General', 'Spiritual', 'Med Kit', 3, 1554918942, 1555038699, 1555038719);

-- --------------------------------------------------------

--
-- Table structure for table `HopelessSprout_progress`
--

CREATE TABLE `HopelessSprout_progress` (
  `patientNumber` int(3) DEFAULT NULL,
  `patientName` varchar(75) DEFAULT NULL,
  `patientStatus` varchar(10) DEFAULT NULL,
  `patientHealth` int(3) DEFAULT NULL,
  `bestItemType` varchar(30) DEFAULT NULL,
  `worstItemType` varchar(30) DEFAULT NULL,
  `usedItems` text,
  `usedDialogue` int(3) DEFAULT NULL,
  `unlockTime` int(20) DEFAULT NULL,
  `healthTimer` int(20) DEFAULT NULL,
  `lockTimer` int(20) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `Inkyisscared_progress`
--

CREATE TABLE `Inkyisscared_progress` (
  `patientNumber` int(3) DEFAULT NULL,
  `patientName` varchar(75) DEFAULT NULL,
  `patientStatus` varchar(10) DEFAULT NULL,
  `patientHealth` int(3) DEFAULT NULL,
  `bestItemType` varchar(30) DEFAULT NULL,
  `worstItemType` varchar(30) DEFAULT NULL,
  `usedItems` text,
  `usedDialogue` int(3) DEFAULT NULL,
  `unlockTime` int(20) DEFAULT NULL,
  `healthTimer` int(20) DEFAULT NULL,
  `lockTimer` int(20) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `itemName` varchar(30) NOT NULL,
  `itemDesc` text NOT NULL,
  `itemType` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`itemName`, `itemDesc`, `itemType`) VALUES
('Geranium', 'A simple geranium flower, it is a very gentle, though martial plant. It is found by experience to be singularly good for wind cholic, as also to treat internal bleeding and sores.', 'Herbal'),
('Med Kit', 'An assortment of tools and objects to help cover wounds, scrapes, and sores. You also have extracts of pomegranate and chamomile.', 'General'),
('Paper Talisman', 'A carefully inscribed talisman, written on the moon of harvest, holied by priestiary light. Runic formations are meant to balance a person\'s spirits.', 'Spiritual'),
('Dead Rat', 'Rats are fat and delicious if cooked right, so, as follows, they are abundantly rich in health benefits. Rats are meant to calm a hungry stomach and scare the devil\'s pest away. \r\n', 'Toxic'),
('Rose Alcohol', 'Not only are they great decoration piece to grow in your garden, roses have all sorts of health benefits to them. Widely used to maintain cleanliness and fairness of the skin, rose alcohol is a remedy for all sorts of skin and flesh problems, that plague brings. \r\n', 'Disinfectant'),
('Adder’s Tongue', 'Looks dangerous, yet does wonders when it comes to wounds, sores or upset stomach. Don’t let the appearance of that plant fool you as it’s holy abilities can only be explained by God’s plan.', 'Herbal'),
('Wooden Fish Charm', 'The charm has proven to be effective in the most severe cases of the deadly pest. Has sacred symbols carved into it by the most powerful and ancient Healers™. Effective magical cure!', 'Spiritual'),
('Garlic', 'Garlic has a distinct strong smell and thus is dangerous to any disease it is used against, it is a number one remedy when it comes to treating the devil’s pest. Smoked or taken orally, garlic is equally effective as for a cold so as for deadly epidemic. ', 'Acidic'),
('Endive', 'Endive is a round cooling plant, helps to calm the nerves and the ulcers. Used for various anti-inflammatory purposes and works wonders. Feels like a cherub’s kiss and brings great relief to those who suffer. ', 'Acidic'),
('Chives', 'Chives are used for rather limited amount of health problems due to their “explosive” nature. Can either be of a great service, or play an evil joke on the patient if not prepared properly. Use chives for fevers and at your own risks.', 'Toxic'),
('Celandine', 'Celandine is a number one aid for one’s declining vision when taken raw or, boil it in white wine and you’ll have yourself a great sores and ulcers remedy. ', 'Herbal'),
('Citron', 'Helps with nausea and all kinds of digestive problems, smells nice and tastes nice if cooked properly. Can help to freshen up the house if necessary and thus purify it from toxic fumes.\r\n', 'Sweet'),
('Blackberry', 'Blackberries are of great help to stop the blood while they’re still green and aid with open wounds and bloody flux. Blackberry is a wonderful antidote: if one ate something of ungodly nature, blackberry will reverse the dark forces and bring the patient right back to his initial strength and help. ', 'Disinfectant'),
('White Champignon Mushroom', 'White Champignon is a white mushroom with pleasant aroma. Great mushroom - good in soup and good for health. Can both be used in culinary dishes and medicine, hearty and chunky', 'General'),
('Jack-O-Lantern Mushroom', 'Jack-o-Lantern mushroom is a glowing strong remedy that will help one to forget about the pain for a hot minute by sending the best visions to your exhausted body and if one’s lucky enough they might just meet a holy spirit.', 'Toxic'),
('Plum', 'Plum is a sweet and generally pleasant remedy, the juice helps with digestion and in cases of upset stomach. What can be more pleasant than a dessert and a remedy in one bite? \r\n', 'Sweet'),
('Barberry', 'Barberry is a purging fruit, it is meant to cleanse both your body and your spirits. ', 'Sweet'),
('Bread', 'A loaf of bread that was baked in a coal oven. The dough prepared with a variety of flours, kneaded by hand, and covered in different herbs.', 'General');

-- --------------------------------------------------------

--
-- Table structure for table `jjbastida_progress`
--

CREATE TABLE `jjbastida_progress` (
  `patientNumber` int(3) DEFAULT NULL,
  `patientName` varchar(75) DEFAULT NULL,
  `patientStatus` varchar(10) DEFAULT NULL,
  `patientHealth` int(3) DEFAULT NULL,
  `bestItemType` varchar(30) DEFAULT NULL,
  `worstItemType` varchar(30) DEFAULT NULL,
  `usedItems` text,
  `usedDialogue` int(3) DEFAULT NULL,
  `unlockTime` int(20) DEFAULT NULL,
  `healthTimer` int(20) DEFAULT NULL,
  `lockTimer` int(20) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `jjbastida_progress`
--

INSERT INTO `jjbastida_progress` (`patientNumber`, `patientName`, `patientStatus`, `patientHealth`, `bestItemType`, `worstItemType`, `usedItems`, `usedDialogue`, `unlockTime`, `healthTimer`, `lockTimer`) VALUES
(0, 'Biordo', 'cured', 110, 'Sweet', 'Bitter', '', 8, 1553603719, 1554904691, 1554905581),
(1, 'Agnella', 'dead', -210, 'Disinfectant', 'Sweet', '', 2, 1553978225, 1555328686, 1553988217),
(2, 'Maffeo', 'cured', 100, 'General', 'Spiritual', '', 6, 1554735578, 1555328686, 1555328834),
(3, 'Novella', 'dead', -82, 'Acidic', 'Herbal', 'Bread', 1, 1554927389, 1555328686, 1554927420);

-- --------------------------------------------------------

--
-- Table structure for table `Jmin_progress`
--

CREATE TABLE `Jmin_progress` (
  `patientNumber` int(3) DEFAULT NULL,
  `patientName` varchar(75) DEFAULT NULL,
  `patientStatus` varchar(10) DEFAULT NULL,
  `patientHealth` int(3) DEFAULT NULL,
  `bestItemType` varchar(30) DEFAULT NULL,
  `worstItemType` varchar(30) DEFAULT NULL,
  `usedItems` text,
  `usedDialogue` int(3) DEFAULT NULL,
  `unlockTime` int(20) DEFAULT NULL,
  `healthTimer` int(20) DEFAULT NULL,
  `lockTimer` int(20) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Jmin_progress`
--

INSERT INTO `Jmin_progress` (`patientNumber`, `patientName`, `patientStatus`, `patientHealth`, `bestItemType`, `worstItemType`, `usedItems`, `usedDialogue`, `unlockTime`, `healthTimer`, `lockTimer`) VALUES
(0, 'Biordo', 'curing', 48, 'Sweet', 'Bitter', '', 10, 1554006975, 1555309240, 1555309248),
(1, 'Agnella', 'dead', -216, 'Disinfectant', 'Sweet', 'Celandine', 1, 1554221907, 1555309240, 1554221968),
(2, 'Maffeo', 'dead', -163, 'General', 'Spiritual', 'Barberry', 1, 1554506070, 1555309240, 1554870441),
(3, 'Novella', 'dead', -67, 'Acidic', 'Herbal', '', 4, 1554870429, 1555309240, 1555043025);

-- --------------------------------------------------------

--
-- Table structure for table `magicmiko_progress`
--

CREATE TABLE `magicmiko_progress` (
  `patientNumber` int(3) DEFAULT NULL,
  `patientName` varchar(75) DEFAULT NULL,
  `patientStatus` varchar(10) DEFAULT NULL,
  `patientHealth` int(3) DEFAULT NULL,
  `bestItemType` varchar(30) DEFAULT NULL,
  `worstItemType` varchar(30) DEFAULT NULL,
  `usedItems` text,
  `usedDialogue` int(3) DEFAULT NULL,
  `unlockTime` int(20) DEFAULT NULL,
  `healthTimer` int(20) DEFAULT NULL,
  `lockTimer` int(20) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `magicmiko_progress`
--

INSERT INTO `magicmiko_progress` (`patientNumber`, `patientName`, `patientStatus`, `patientHealth`, `bestItemType`, `worstItemType`, `usedItems`, `usedDialogue`, `unlockTime`, `healthTimer`, `lockTimer`) VALUES
(0, 'Biordo', 'cured', 464, 'Sweet', 'Bitter', 'Dead Rat', 23, 1554135769, 1554220549, 1554221901),
(1, 'Agnella', 'curing', 12, 'Disinfectant', 'Sweet', 'Plum', 3, 1554919711, 1555038730, 1555038741);

-- --------------------------------------------------------

--
-- Table structure for table `mail`
--

CREATE TABLE `mail` (
  `mailTitle` varchar(50) NOT NULL,
  `mailContent` text NOT NULL,
  `unlockTime` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `mail`
--

INSERT INTO `mail` (`mailTitle`, `mailContent`, `unlockTime`) VALUES
('Fungus In the Stream', 'Not far from the building labelled as G, a bridge does cross overtop a stream. Where\'st the wildlife dost grow beneath this bridge, will occasionally grow mushrooms of the standard white variety. Be sure to only collect the required shroom for patients and to not harvest all which is lain there. ', '2019-03-22'),
('Fruit in the Moonlight', 'Not far from the large inscributre S, where an unlabelled entrance lie. Between the shrubbery can be found a tree of some kind. The harvest of which is dropped not far from where the tree hath sprout. Remember to not keep the bore Fruit for personal endeavours, as it\'s Venus properties would sour your spirits.', '2019-03-22'),
('Deceased Rat', 'The land that lays &#x27;tween the two buildings - B and J and where the smoke used to rise to the very skies, the cat dragged in a little fella that passed a good death, and just in time for dinner, might we add! Find the little lad and use him with your best intentions only.', '2019-03-22'),
('Branch of Berry', 'Our town is green with all kinds of good plants - flowers, trees, green bushes... The next ingredient is hidden in one of those latter ones, a glorious, full bush that grows in a passage between two buildings. Both of those buildings carry the same letter of the English alphabet (very first one) as their title, yet one&#x27;s name is a double. The bush is not tricky to spot, and once you do, look closely between it\'s fluffy branches to find another special medicine. That medicine is sweet, yet thou shan&#x27;t take no bites from it, keep it for those in need, as that&#x27;s what good doctor&#x27;s purpose is.', '2019-03-26'),
('Yellow Blossom', 'This next ingredient is a pretty little lad, which might be helpful for your next endeavour to help and save someone. You shall find it in one of the bushes that we have here in town, that particular one smells like the finest pine and is located way off the road that leads from the first letter of the alphabet to the second, or vice versa. Remember, to search away from the road, where the greenery is. Good luck, doctor. ', '2019-03-30');

-- --------------------------------------------------------

--
-- Table structure for table `Shanooby_progress`
--

CREATE TABLE `Shanooby_progress` (
  `patientNumber` int(3) DEFAULT NULL,
  `patientName` varchar(75) DEFAULT NULL,
  `patientStatus` varchar(10) DEFAULT NULL,
  `patientHealth` int(3) DEFAULT NULL,
  `bestItemType` varchar(30) DEFAULT NULL,
  `worstItemType` varchar(30) DEFAULT NULL,
  `usedItems` text,
  `usedDialogue` int(3) DEFAULT NULL,
  `unlockTime` int(20) DEFAULT NULL,
  `healthTimer` int(20) DEFAULT NULL,
  `lockTimer` int(20) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Shanooby_progress`
--

INSERT INTO `Shanooby_progress` (`patientNumber`, `patientName`, `patientStatus`, `patientHealth`, `bestItemType`, `worstItemType`, `usedItems`, `usedDialogue`, `unlockTime`, `healthTimer`, `lockTimer`) VALUES
(0, 'Biordo', 'curing', 90, 'Sweet', 'Bitter', 'Geranium', 1, 1553620697, 1553620697, 1553620745);

-- --------------------------------------------------------

--
-- Table structure for table `TechiChu_progress`
--

CREATE TABLE `TechiChu_progress` (
  `patientNumber` int(3) DEFAULT NULL,
  `patientName` varchar(75) DEFAULT NULL,
  `patientStatus` varchar(10) DEFAULT NULL,
  `patientHealth` int(3) DEFAULT NULL,
  `bestItemType` varchar(30) DEFAULT NULL,
  `worstItemType` varchar(30) DEFAULT NULL,
  `usedItems` text,
  `usedDialogue` int(3) DEFAULT NULL,
  `unlockTime` int(20) DEFAULT NULL,
  `healthTimer` int(20) DEFAULT NULL,
  `lockTimer` int(20) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `test_progress`
--

CREATE TABLE `test_progress` (
  `patientNumber` int(3) DEFAULT NULL,
  `patientName` varchar(75) DEFAULT NULL,
  `patientStatus` varchar(10) DEFAULT NULL,
  `patientHealth` int(3) DEFAULT NULL,
  `bestItemType` varchar(30) DEFAULT NULL,
  `worstItemType` varchar(30) DEFAULT NULL,
  `usedItems` text,
  `usedDialogue` int(3) DEFAULT NULL,
  `unlockTime` int(20) DEFAULT NULL,
  `healthTimer` int(20) DEFAULT NULL,
  `lockTimer` int(20) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `test_progress`
--

INSERT INTO `test_progress` (`patientNumber`, `patientName`, `patientStatus`, `patientHealth`, `bestItemType`, `worstItemType`, `usedItems`, `usedDialogue`, `unlockTime`, `healthTimer`, `lockTimer`) VALUES
(0, 'Biordo', 'curing', 90, 'Sweet', 'Bitter', 'Geranium', 1, 1553603608, 1553603608, 1553603620);

-- --------------------------------------------------------

--
-- Table structure for table `thalexan_progress`
--

CREATE TABLE `thalexan_progress` (
  `patientNumber` int(3) DEFAULT NULL,
  `patientName` varchar(75) DEFAULT NULL,
  `patientStatus` varchar(10) DEFAULT NULL,
  `patientHealth` int(3) DEFAULT NULL,
  `bestItemType` varchar(30) DEFAULT NULL,
  `worstItemType` varchar(30) DEFAULT NULL,
  `usedItems` text,
  `usedDialogue` int(3) DEFAULT NULL,
  `unlockTime` int(20) DEFAULT NULL,
  `healthTimer` int(20) DEFAULT NULL,
  `lockTimer` int(20) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `thalexan_progress`
--

INSERT INTO `thalexan_progress` (`patientNumber`, `patientName`, `patientStatus`, `patientHealth`, `bestItemType`, `worstItemType`, `usedItems`, `usedDialogue`, `unlockTime`, `healthTimer`, `lockTimer`) VALUES
(0, 'Biordo', 'curing', 90, 'Sweet', 'Bitter', 'Med Kit', 1, 1554224555, 1554224555, 1554224571);

-- --------------------------------------------------------

--
-- Table structure for table `Thedoctor_progress`
--

CREATE TABLE `Thedoctor_progress` (
  `patientNumber` int(3) DEFAULT NULL,
  `patientName` varchar(75) DEFAULT NULL,
  `patientStatus` varchar(10) DEFAULT NULL,
  `patientHealth` int(3) DEFAULT NULL,
  `bestItemType` varchar(30) DEFAULT NULL,
  `worstItemType` varchar(30) DEFAULT NULL,
  `usedItems` text,
  `usedDialogue` int(3) DEFAULT NULL,
  `unlockTime` int(20) DEFAULT NULL,
  `healthTimer` int(20) DEFAULT NULL,
  `lockTimer` int(20) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `score` int(14) NOT NULL DEFAULT '0',
  `username` varchar(24) DEFAULT NULL,
  `name` varchar(30) NOT NULL,
  `password` varchar(255) DEFAULT NULL,
  `inventory` text NOT NULL,
  `timestamp` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `score`, `username`, `name`, `password`, `inventory`, `timestamp`) VALUES
(2, 0, 'jjbastida', 'JJ', '$2y$10$swWhZD8jmGGz8yuxL1fpnuLj8PboxuHzg/TQDDEUJMQ/onCuXsexm', 'Geranium, Med Kit, Paper Talisman, Plum, Barberry, Canola Flower, Bread, Dead Rat', '2019-03-30 23:23:48'),
(3, 0, 'thalexan', 'Alexandra', '$2y$10$xaKeydGMOaBUXHWoGBa05u19fMC4qLjr/CvK8ZLV.cLMM6cTiP2EG', 'Geranium, Med Kit, Paper Talisman', '2019-03-13 19:23:09'),
(4, 0, 'magicmiko', 'Miko', '$2y$10$1.nQ7XA22U1nlH88QkcT9uVOE59Viw0INmZyyQ2DRFQaogPJxTawi', 'Geranium, Med Kit, Paper Talisman, Plum, Barberry, Dead Rat', '2019-04-02 12:18:04'),
(5, 0, 'duaazaheer', 'Duaa', '$2y$10$Z0sGoXe6IqZS9B8BDrTsjO9Xn.NPv0ZB2o4qE0HeOX7GV.7qP2hIy', 'Geranium, Med Kit, Paper Talisman', '2019-03-19 18:08:22'),
(6, 0, 'aidan', 'Aidan', '$2y$10$DD2eXv/Uh8dODHf2QC0LVuK/8n5yleapRl2Vng4WAjZMfBm1xFEe.', 'Geranium, Med Kit, Paper Talisman', '2019-03-20 11:18:43'),
(7, 0, 'Willy', 'Willy', '$2y$10$SxuZzc7HB0XlRUIku5y5buhT1zLtVq7llmuZQSxAz7Jgwe81KT71y', 'Geranium, Med Kit, Paper Talisman', '2019-03-21 12:39:46'),
(8, 0, 'test', 'Test', '$2y$10$VBB5Et3Ko8uWtyomRi3Zmey/ZfesMLv8D23HGm5v57RoMyMyVfCmm', 'Geranium, Med Kit, Paper Talisman', '2019-03-23 15:26:46'),
(9, 0, 'Inkyisscared', 'Inky', '$2y$10$WKB1513L4Ajsi8RY2Cwk8uyAz.s1RljJLiYoJ3OIBTuDo9uQ.49xO', 'Geranium, Med Kit, Paper Talisman', '2019-03-31 00:34:41'),
(10, 0, 'Thedoctor', 'Hamish', '$2y$10$xZvUowNW7y8eJ9fpsYeNdu8ic9tBvZRBywH1r4jshaiOkLJ8ypN62', 'Geranium, Med Kit, Paper Talisman', '2019-03-26 07:12:14'),
(11, 0, 'Shanooby', 'Shane', '$2y$10$awO0H/3jzozCo8koAN6sF.2XEEeBh/PBlKh0SHysPl1Nnv.Zw1VSe', 'Geranium, Med Kit, Paper Talisman', '2019-03-26 13:18:01'),
(12, 0, 'Techi Chu', 'Tim', '$2y$10$BUc.qNedNNs97xwoVcmmfuiWr7eI/8vTON2Orjr0PojO.2qOgxCNq', 'Geranium, Med Kit, Paper Talisman', '2019-03-26 16:36:18'),
(13, 0, 'Bondedness', 'Kianna', '$2y$10$zdDt2M/kAjB3jQMNbKBBYeslYcolov.wnlvAg2PWeQU7nMGmzd1Ri', 'Geranium, Med Kit, Paper Talisman', '2019-03-27 12:33:33'),
(14, 0, 'Yapdaff', 'Erik', '$2y$10$ZGfYnAqnAMVKjaYObdKDC.WLdRkMn62v9GE0Ulri64mBIwDp6uNIq', 'Geranium, Med Kit, Paper Talisman', '2019-03-29 21:28:40'),
(15, 0, 'BennyD', 'Ben', '$2y$10$u3cQrKGsoBpF/QoseIyRdelRpHT8lseg3k2N/WYAyLXfixFd.Ve3i', 'Geranium, Med Kit, Paper Talisman', '2019-03-30 23:37:53'),
(16, 0, 'Jmin', 'Jamie', '$2y$10$8GAgFXj2AsfyWdQeXinjYeNGHX5.ckInhiC77WiCxTBUhmR9EkY/K', 'Geranium, Med Kit, Paper Talisman, Celandine, Barberry, White Champignon Mushroom, Blackberry, Rose Alcohol', '2019-04-11 16:00:05'),
(17, 0, 'herblord', 'herblord', '$2y$10$y5SOA5PelThfDoXLoVKQmeMfNY5Os/BQiGO4g/qhJDsQdCzY5pV5e', 'Geranium, Med Kit, Paper Talisman, Dead Rat', '2019-04-05 19:13:27'),
(18, 0, 'Hopeless.Sprout', 'Jessica', '$2y$10$s5P2c7QYSAYeQA/GNTbHkugQp03sxVmv9s.kHH90A8FMvwzQRmoXi', 'Geranium, Med Kit, Paper Talisman', '2019-04-02 14:39:52'),
(19, 0, 'Fart', 'Fart', '$2y$10$EH/EBPOhA8MLJntiprnJVecOxoNv//CPN.6Ui2UbnrCNMvoTvpNMy', 'Geranium, Med Kit, Paper Talisman', '2019-04-05 10:22:07'),
(20, 0, 'Ben', 'Ben', '$2y$10$Q.QNtfQQdJ.asiBgDfzrvepYuBBQtKXSbtrx7zmGYV5yLbKySyu1G', 'Geranium, Med Kit, Paper Talisman', '2019-04-08 22:53:25'),
(21, 0, 'Carlo', 'Carlo', '$2y$10$8jB5uigfmd7hkV5mxO.sput06EPb2sJ9ozoJ0QEvIFmSh8tRnX.bu', 'Geranium, Med Kit, Paper Talisman', '2019-04-09 19:09:54'),
(22, 0, 'Bigman420', 'Big man', '$2y$10$7fCBK.n4Tv0YqPMkyrz4.OBgGWIGJarIj35E1O3m5XVuOricvrclS', 'Geranium, Med Kit, Paper Talisman', '2019-04-10 09:34:00'),
(23, 0, 'drawesome', 'kris', '$2y$10$yzbUUiECMMtMeR3ePAyTU.TLCINxVHg4pBEmuj/NvuQqRdeSmRtH2', 'Geranium, Med Kit, Paper Talisman', '2019-04-14 22:46:02');

-- --------------------------------------------------------

--
-- Table structure for table `Willy_progress`
--

CREATE TABLE `Willy_progress` (
  `patientNumber` int(3) DEFAULT NULL,
  `patientName` varchar(75) DEFAULT NULL,
  `patientStatus` varchar(10) DEFAULT NULL,
  `patientHealth` int(3) DEFAULT NULL,
  `bestItemType` varchar(30) DEFAULT NULL,
  `worstItemType` varchar(30) DEFAULT NULL,
  `usedItems` text,
  `usedDialogue` int(3) DEFAULT NULL,
  `unlockTime` int(20) DEFAULT NULL,
  `healthTimer` int(20) DEFAULT NULL,
  `lockTimer` int(20) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `Yapdaff_progress`
--

CREATE TABLE `Yapdaff_progress` (
  `patientNumber` int(3) DEFAULT NULL,
  `patientName` varchar(75) DEFAULT NULL,
  `patientStatus` varchar(10) DEFAULT NULL,
  `patientHealth` int(3) DEFAULT NULL,
  `bestItemType` varchar(30) DEFAULT NULL,
  `worstItemType` varchar(30) DEFAULT NULL,
  `usedItems` text,
  `usedDialogue` int(3) DEFAULT NULL,
  `unlockTime` int(20) DEFAULT NULL,
  `healthTimer` int(20) DEFAULT NULL,
  `lockTimer` int(20) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Yapdaff_progress`
--

INSERT INTO `Yapdaff_progress` (`patientNumber`, `patientName`, `patientStatus`, `patientHealth`, `bestItemType`, `worstItemType`, `usedItems`, `usedDialogue`, `unlockTime`, `healthTimer`, `lockTimer`) VALUES
(0, 'Biordo', 'curing', 90, 'Sweet', 'Bitter', 'Med Kit', 1, 1553909326, 1553909326, 1553909332);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD UNIQUE KEY `itemName` (`itemName`);

--
-- Indexes for table `jjbastida_progress`
--
ALTER TABLE `jjbastida_progress`
  ADD UNIQUE KEY `patientNumber` (`patientNumber`);

--
-- Indexes for table `mail`
--
ALTER TABLE `mail`
  ADD UNIQUE KEY `mailTitle` (`mailTitle`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
