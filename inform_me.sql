-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 22, 2018 at 11:37 PM
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
-- Database: `inform_me`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

DROP TABLE IF EXISTS `admins`;
CREATE TABLE IF NOT EXISTS `admins` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(256) NOT NULL,
  `password` varchar(256) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `username`, `password`) VALUES
(1, 'Aleksandar', '123');

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

DROP TABLE IF EXISTS `articles`;
CREATE TABLE IF NOT EXISTS `articles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category` varchar(256) NOT NULL,
  `title` varchar(256) NOT NULL,
  `text` text NOT NULL,
  `image` varchar(1024) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=44 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `category`, `title`, `text`, `image`, `date`) VALUES
(38, 'Business', 'Dow plummets more than 700 points as Trump\'s China tariffs ignite fears of trade war', '<p>US stocks declined Thursday as President Donald Trump announced roughly $50 billion of annual tariffs on Chinese exports, stoking fears of retaliation and roiling markets worldwide.</p>\r\n\r\n<p>Industrial stocks led the way lower in the both the benchmark S&P 500, which fell as much as 2.6%, and the Dow Jones industrial average, which dropped more than 3% â€” or 744 points â€” at one point. The Dow is now down 10% from its recent peak. The more tech-heavy Nasdaq 100 index lost at least 2.5%.</p>\r\n\r\n<p>Among the industrial firms worst hit were Caterpillar, Deere, and Boeing, which all dropped at least 4%. The sector has typically absorbed the brunt of selling on trade-war flare-ups as the situation has escalated over the past few months.</p>\r\n\r\n<p>The latest tariffs would be Trump\'s first directly targeting China, which he has repeatedly accused of hurting US manufacturers and diverting labor. And China doesn\'t appear content to take the president\'s measures lying down, saying Thursday that trade turmoil was \"detrimental to both sides.\"</p>', 'business1.jpg', '2018-03-22 22:45:12'),
(39, 'Politics', 'A rare bipartisan effort in Congress would help states fight hackers ahead of the 2018 midterms', '<p>Congress provided $380 million in election security funding as part of its massive spending bill, a move that reflects the growing consensus in Washington that more needs to be done to ensure the integrity of America\'s elections.</p>\r\n\r\n<p>The funding would go to the Election Assistance Commission, which then must distribute the funds to states within 45 days to replace aging voting machines, implement post-election audits, and provide cybersecurity training for state and local officials, among other election security related improvements.</p>\r\n\r\n<p>\"In this challenging political time, this has to be seen as a win and a recognition that [election security] is an important responsibility,\" Adam Ambrogi, the director of the Elections Program at the Democracy Fund, told Business Insider. \"The federal government needs to aid the states. The states don\'t have this money laying around.\"</p>', 'politics1.jpg', '2018-03-22 22:47:28'),
(40, 'Sports', 'Zlatan Ibrahimovic, a soccer star who once compared himself to God, is coming to MLS', '<p>One of the most famous soccer players in the world is coming to the United States to ply his trade for the Los Angeles Galaxy, and MLS press conferences should be getting a lot more interesting.</p>\r\n\r\n<p>Swedish soccer star Zlatan Ibrahimovic is heading to the Galaxy from Manchester United, as reported by The LA Times\' Kevin Baxter. Ibrahimovic is a talented and highly decorated striker, albeit one well past his prime at this point. He is also, even by the standards of professional athletes, overflowing with confidence.</p>\r\n\r\n<p>Ibrahimovic is a man who has said the the World Cup â€” arguably the biggest, most popular sporting event in the world â€” is nothing without him in it, and when asked what he got his wife for her birthday, said: \"Nothing. She already has Zlatan.\" He also once compared himself to God in an interview, and claims he turned down a trial for Arsene Wenger at Arsenal as a 17-year-old because \"Zlatan doesn\'t do auditions.\"</p>', 'sports1.jpg', '2018-03-22 22:53:26'),
(41, 'Culture', 'Robert Rattray: Classical music has lost a man of verve, brilliance and generosity', '<p>I never knew how to describe Robert Rattrayâ€™s role in my life to people outside the world of opera and classical music. He was my agent, undoubtedly, but that always seemed a bit too detached and mercenary. Robert was never interested in money or glamour, but only in making sure that the music he thought really mattered had a place in concert halls and opera houses. Novelty and tradition excited him in equal measure, but he had no time for the meretricious or the routine.</p>\r\n\r\n<p>The other word is manager. Robert was, indeed, a brilliant manager and businessman, with a keen sense of how to get the best out of people. When I first met him in the early 1990s, Lies Askonas Ltd (the artists management company he had worked in since the mid 1970s, named after its founder, who had escaped the Anschluss on skis) had just lost a large chunk of its list and was operating out of a small office over a shop in Drury Lane. Over the next two decades he built it into an enormous force in the arts world, with a personal style of artistsâ€™ management that survived and prospered after the merger with Harold Holt made it into something of a giant in its field.</p>', 'culture1.jpg', '2018-03-22 22:56:58'),
(42, 'Lifestyle', 'Margot Hendersonâ€™s recipe for braised fennel sausages with tomato sauce', '<p>This is one of our family staples. An ordinary dinner becomes a feast; a large platter oozing with polenta and sauce, topped by a pile of sausages. Italian sausages can be found in most Italian delis and some butcherâ€™s shops. They work well roasted and grilled, but slowly, so they relax and soften.</p>\r\n\r\n<p>Heat the oven to 160C/325F/gas mark 3.</p>\r\n\r\n<p>Heat half the olive oil in a frying pan and gently cook the onions and garlic for five minutes. Add the fennel and cook for a further five minutes or so.</p>\r\n\r\n<p>In a separate pan, brown the sausages in the remaining olive oil for about 10 minutes on a medium heat, turning them often until they have a good all-over colour. Add the red wine and the tinned tomatoes, and bubble away for a few minutes.</p>\r\n', 'lifestyle1.jpg', '2018-03-22 22:59:01'),
(43, 'Lifestyle', 'I am 75 and dating but can no longer reach orgasm', '<p>I am 75 years old and I was widowed four years ago after a 50-year marriage. I have been trying dating sites and have met two nice men during the past year. I have had sex with both of them, but have failed to orgasm, despite patient efforts on their part. There has been plenty of foreplay and clitoral stimulation, as well as G-spot stimulation. I have been using sex toys from time to time and these havenâ€™t worked either â€“ in fact, they have resulted in a urinary tract infection. Every time I think I am close, the feeling just disappears. I also tend to get cramps in my legs when I think I am getting close. My current partner is patient and loving, but I feel I am not giving him my full potential. Am I just too old and the nerve endings have withered away?</p>\r\n\r\n<p>This problem of anorgasmia is fairly common among women of all ages. You could speak with your doctor about hormonal changes that might be affecting your ability to climax as readily as you did in the past and see if there is a medical issue and a medical solution â€“ for example, testosterone supplementation. You should also mention and explore the tendency of your muscles to cramp.</p>', 'lifestyle2.jpg', '2018-03-22 23:00:47');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
CREATE TABLE IF NOT EXISTS `categories` (
  `category_id` int(11) NOT NULL,
  `category` varchar(256) NOT NULL,
  PRIMARY KEY (`category_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`category_id`, `category`) VALUES
(1, 'politics'),
(2, 'business'),
(3, 'culture'),
(4, 'sports'),
(5, 'lifestyle');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

DROP TABLE IF EXISTS `comments`;
CREATE TABLE IF NOT EXISTS `comments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user` varchar(64) NOT NULL,
  `message` text NOT NULL,
  `date` datetime NOT NULL,
  `page_url` varchar(64) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=63 DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(64) NOT NULL,
  `password` varchar(64) NOT NULL,
  `email` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=36 DEFAULT CHARSET=utf8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
