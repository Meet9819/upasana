-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 148.72.232.171:3306
-- Generation Time: Jan 04, 2021 at 05:06 AM
-- Server version: 5.5.51-38.1-log
-- PHP Version: 7.1.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ngoo`
--

-- --------------------------------------------------------

--
-- Table structure for table `achievements`
--

CREATE TABLE `achievements` (
  `id` int(11) NOT NULL,
  `img` varchar(1000) NOT NULL,
  `campid` int(11) NOT NULL,
  `title` varchar(1000) NOT NULL,
  `description` longtext NOT NULL,
  `video` varchar(1000) NOT NULL,
  `fb` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `achievements`
--

INSERT INTO `achievements` (`id`, `img`, `campid`, `title`, `description`, `video`, `fb`) VALUES
(1, '825972.jpeg', 137, 'Times Of India - Hyderabad', '', '                                                                                                            <iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/H6N47iuCl58\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>   ', ' \r\n                                     \r\n                                     \r\n                                    <iframe src=\"https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2Fupasanasociety%2Fposts%2F2031160837009017&width=500\" width=\"500\" height=\"691\" style=\"border:none;overflow:hidden\" scrolling=\"no\" frameborder=\"0\" allowTransparency=\"true\" allow=\"encrypted-media\"></iframe>   ');

-- --------------------------------------------------------

--
-- Table structure for table `adminlogin`
--

CREATE TABLE `adminlogin` (
  `id` int(11) NOT NULL,
  `img` varchar(2000) NOT NULL,
  `username` varchar(50) NOT NULL,
  `contact` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `trn_date` datetime NOT NULL,
  `status` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `adminlogin`
--

INSERT INTO `adminlogin` (`id`, `img`, `username`, `contact`, `email`, `password`, `trn_date`, `status`) VALUES
(12, 'user.png', 'ngo', '9769727057', 'admin@admin.com', 'ngo', '2017-11-14 03:10:32', '1');

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(11) NOT NULL,
  `img` varchar(5000) NOT NULL,
  `campid` int(11) NOT NULL,
  `title` varchar(5000) NOT NULL,
  `description` longtext NOT NULL,
  `video` varchar(5000) NOT NULL,
  `fb` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `img`, `campid`, `title`, `description`, `video`, `fb`) VALUES
(1, '6.jpg', 134, ' An initiative that started offd', '<p>dAn initiative that started off with the sole purpose of spreading health awareness for the needy. Upasana Society NGO tries to conduct health awareness workshops and health camps where health facilities are difficult to reach. Upasana tries and collaborate with individuals, groups, corporates, etc to provide these services to the needy.</p>\r\n', '<iframe src=\"https://www.youtube.com/embed/videoseries?list=PLCMW3TiPT5nWGtcRMSe-6BnTA-llcG6gY\" width=\"100%\" height=\"315\" frameborder=\"0\" allowfullscreen=\"allowfullscreen\"></iframe>', '<iframe src=\"https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2Fupasanasociety%2Fposts%2F2031160837009017&width=500\" width=\"500\" height=\"691\" style=\"border:none;overflow:hidden\" scrolling=\"no\" frameborder=\"0\" allowTransparency=\"true\" allow=\"encrypted-media\"></iframe>'),
(2, '1.jpg', 134, 'Emmanuel charitable trust', '<p>dAn initiative that started off with the sole purpose of spreading health awareness for the needy. Upasana Society NGO tries to conduct health awareness workshops and health camps where health facilities are difficult to reach. Upasana tries and collaborate with individuals, groups, corporates, etc to provide these services to the needy.</p>\r\n', '<iframe src=\"https://www.youtube.com/embed/videoseries?list=PLCMW3TiPT5nWGtcRMSe-6BnTA-llcG6gY\" width=\"100%\" height=\"315\" frameborder=\"0\" allowfullscreen=\"allowfullscreen\"></iframe>', '<iframe src=\"https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2Fupasanasociety%2Fposts%2F2031160837009017&width=500\" width=\"500\" height=\"691\" style=\"border:none;overflow:hidden\" scrolling=\"no\" frameborder=\"0\" allowTransparency=\"true\" allow=\"encrypted-media\"></iframe>'),
(3, '2.jpg', 134, 'abhaya Foundation', '<p>dAn initiative that started off with the sole purpose of spreading health awareness for the needy. Upasana Society NGO tries to conduct health awareness workshops and health camps where health facilities are difficult to reach. Upasana tries and collaborate with individuals, groups, corporates, etc to provide these services to the needy.</p>\r\n', '<iframe src=\"https://www.youtube.com/embed/videoseries?list=PLCMW3TiPT5nWGtcRMSe-6BnTA-llcG6gY\" width=\"100%\" height=\"315\" frameborder=\"0\" allowfullscreen=\"allowfullscreen\"></iframe>', '<iframe src=\"https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2Fupasanasociety%2Fposts%2F2031160837009017&width=500\" width=\"500\" height=\"691\" style=\"border:none;overflow:hidden\" scrolling=\"no\" frameborder=\"0\" allowTransparency=\"true\" allow=\"encrypted-media\"></iframe>'),
(4, '3.jpg', 134, 'Cherry Blossoms Society', '<p>dAn initiative that started off with the sole purpose of spreading health awareness for the needy. Upasana Society NGO tries to conduct health awareness workshops and health camps where health facilities are difficult to reach. Upasana tries and collaborate with individuals, groups, corporates, etc to provide these services to the needy.</p>\r\n', '<iframe src=\"https://www.youtube.com/embed/videoseries?list=PLCMW3TiPT5nWGtcRMSe-6BnTA-llcG6gY\" width=\"100%\" height=\"315\" frameborder=\"0\" allowfullscreen=\"allowfullscreen\"></iframe>', '<iframe src=\"https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2Fupasanasociety%2Fposts%2F2031160837009017&width=500\" width=\"500\" height=\"691\" style=\"border:none;overflow:hidden\" scrolling=\"no\" frameborder=\"0\" allowTransparency=\"true\" allow=\"encrypted-media\"></iframe>');

-- --------------------------------------------------------

--
-- Table structure for table `campaigns`
--

CREATE TABLE `campaigns` (
  `id` int(11) NOT NULL,
  `img` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `title` varchar(5000) NOT NULL,
  `detail` longtext NOT NULL,
  `description` longtext NOT NULL,
  `impact` longtext NOT NULL,
  `facebookphoto` varchar(1000) NOT NULL,
  `video` varchar(1000) NOT NULL,
  `targetfund` int(11) NOT NULL,
  `fundraised` int(11) NOT NULL,
  `datee` date NOT NULL,
  `sequence` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `campaigns`
--

INSERT INTO `campaigns` (`id`, `img`, `name`, `title`, `detail`, `description`, `impact`, `facebookphoto`, `video`, `targetfund`, `fundraised`, `datee`, `sequence`) VALUES
(110, '1.jpg', 'Joy of Giving', 'by theup6p6_wp723in Joy of Giving, Touching hearts, Underprivileged, Volunteeringtags dipti kashalkar, exchange, happiness, joy of giving, NGO, saurabh kashalkar, smile, upasana, volunteer', '<p>Joy of Giving/Exchange is a unique initiative wherein Upasana Society NGO tries to exchange the things made by a certain set of people in exchange of the things or services needed by them.</p>\r\n\r\n<p>We have seen a variety of photos and videos circling around various forms of social media that have truly touched our hearts. This leads us to feel sorry for the less fortunate. We also appreciate the efforts of those who have managed to touch other&rsquo;s hearts and make a difference to this world. Additionally, we have realized how fortunate we are that we have had access to the best of medical facilities and access to health awareness programs.</p>\r\n\r\n<p>There have been numerous occasions in which we could be of some help to this world and during each of them; we have tried our best to help. We when pursuing our other causes, we came across many individuals who were in need of assistance with respect to health. They were not literate enough and neither were financial strong to get the basic health facilities and awareness about the same. After a brainstorming session with the volunteers, this particular initiative came into existence.</p>\r\n\r\n<p>&ldquo;Beautification and hygiene&rdquo; &ndash; is something which is the duty of every citizen of the country. An initiative that started off with the sole purpose of spreading awareness about cleanliness and beautification of public places. Upasana tries to conduct beautification and hygiene campaigns and tries to make the individuals near to that location, a part of the initiative. Upasana tries and collaborate with individuals, groups, corporates, etc to sustain these campaigns on a day to day basis.</p>\r\n\r\n<p>We are sure that during our journey, we will come across like minded volunteers who would like to help us in our respective causes.Let&rsquo;s get involved! Let&rsquo;s start TOUCHING HEARTS ALL OVER THIS BEAUTIFUL PLANET OF OURS! We are UPASANA SOCIETY&hellip;</p>\r\n', '<p>Joy of Giving/Exchange is a unique initiative wherein Upasana Society NGO tries to exchange the things made by a certain set of people in exchange of the things or services needed by them.</p>\r\n\r\n<p>We have seen a variety of photos and videos circling around various forms of social media that have truly touched our hearts. This leads us to feel sorry for the less fortunate. We also appreciate the efforts of those who have managed to touch other&rsquo;s hearts and make a difference to this world. Additionally, we have realized how fortunate we are that we have had access to the best of medical facilities and access to health awareness programs.</p>\r\n\r\n<p>There have been numerous occasions in which we could be of some help to this world and during each of them; we have tried our best to help. We when pursuing our other causes, we came across many individuals who were in need of assistance with respect to health. They were not literate enough and neither were financial strong to get the basic health facilities and awareness about the same. After a brainstorming session with the volunteers, this particular initiative came into existence.</p>\r\n\r\n<p>&ldquo;Beautification and hygiene&rdquo; &ndash; is something which is the duty of every citizen of the country. An initiative that started off with the sole purpose of spreading awareness about cleanliness and beautification of public places. Upasana tries to conduct beautification and hygiene campaigns and tries to make the individuals near to that location, a part of the initiative. Upasana tries and collaborate with individuals, groups, corporates, etc to sustain these campaigns on a day to day basis.</p>\r\n\r\n<p>We are sure that during our journey, we will come across like minded volunteers who would like to help us in our respective causes.Let&rsquo;s get involved! Let&rsquo;s start TOUCHING HEARTS ALL OVER THIS BEAUTIFUL PLANET OF OURS! We are UPASANA SOCIETY&hellip;</p>\r\n', '<p>We have seen a variety of photos and videos circling around various forms of social media that have truly touched our hearts. This leads us to feel sorry for the less fortunate. We also appreciate the efforts of those who have managed to touch other&rsquo;s hearts and make a difference to this world. Additionally, we have realized how fortunate we are that we have had access to the best of medical facilities and access to health awareness programs.</p>\r\n\r\n<p>There have been numerous occasions in which we could be of some help to this world and during each of them; we have tried our best to help. We when pursuing our other causes, we came across many individuals who were in need of assistance with respect to health. They were not literate enough and neither were financial strong to get the basic health facilities and awareness about the same. After a brainstorming session with the volunteers, this particular initiative came into existence.</p>\r\n\r\n<p>&ldquo;Beautification and hygiene&rdquo; &ndash; is something which is the duty of every citizen of the country. An initiative that started off with the sole purpose of spreading awareness about cleanliness and beautification of public places. Upasana tries to conduct beautification and hygiene campaigns and tries to make the individuals near to that location, a part of the initiative. Upasana tries and collaborate with individuals, groups, corporates, etc to sustain these campaigns on a day to day basis.</p>\r\n\r\n<p>We are sure that during our journey, we will come across like minded volunteers who would like to help us in our respective causes.Let&rsquo;s get involved! Let&rsquo;s start TOUCHING HEARTS ALL OVER THIS BEAUTIFUL PLANET OF OURS! We are UPASANA SOCIETY&hellip;</p>\r\n', '<iframe src=\"https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2Fupasanasociety%2Fposts%2F2083892898402477&width=500\" width=\"500\" height=\"785\" style=\"border:none;overflow:hidden\" scrolling=\"no\" frameborder=\"0\" allowTransparency=\"true\" allow=\"encrypted-media\"></iframe>', ' \r\n                                        <iframe src=\"https://www.youtube.com/embed/DEYJV-dw7e4\" width=\"100%\" height=\"315\" frameborder=\"0\" allowfullscreen=\"allowfullscreen\"></iframe> ', 3050, 500, '2020-04-05', 5),
(127, '1.jpg', 'Health Camps', 'by theup6p6_wp723in Joy of Giving, Touching hearts, Underprivileged, Volunteeringtags dipti kashalkar, exchange, happiness, joy of giving, NGO, saurabh kashalkar, smile, upasana, volunteer', '<p>INITIATION -</p>\r\n\r\n<p>On the occasion of Menstrual Hygiene Day which falls on the 28th May every year, Upasana Society NGO in collaboration with Dipti K planned to provide sustainable menstrual products to 2019 underprivileged girls/women throughout India to begin with.</p>\r\n\r\n<p>Why sustainable products?</p>\r\n\r\n<ul>\r\n	<li>\r\n	<p>Do you know that 1 Menstrual cup lasts upto a decade and the fact that it can be reused will not only benefit the environment but will also give comfort to you and your wallet.&nbsp;</p>\r\n	</li>\r\n	<li>\r\n	<p>Cloth pads are also the other alternatives which last for at least 2 to 3 years and are also biodegradable.</p>\r\n	</li>\r\n</ul>\r\n\r\n<p>CAMPAIGN -&nbsp;</p>\r\n\r\n<ul>\r\n	<li>\r\n	<p><strong>Spreading awareness</strong> by educating the masses about Menstrual Hygiene and the sustainable options. We have been conducting these menstrual hygiene workshops in schools, colleges, societies and corporates throughout India.</p>\r\n	</li>\r\n	<li>\r\n	<p>Our aim is to reach out to the urban population as they can afford the products easily. Once they switch, we will <strong>seek support from the privileged</strong> in the urban areas to <strong>help the underprivileged</strong> in the rural areas who cannot afford the same.</p>\r\n	</li>\r\n	<li>\r\n	<p>Initially the underprivileged girls/women will be provided with disposable sanitary pads for 3 to 4 months and simultaneously they will be educated to use menstrual cups.</p>\r\n	</li>\r\n</ul>\r\n', '<p>&ldquo;Health awareness&rdquo; &ndash; which is routine for many but a privilege for some. An initiative that started off with the sole purpose of spreading health awareness for the needy. Upasana Society NGO tries to conduct health awareness workshops and health camps where health facilities are difficult to reach. Upasana tries and collaborate with individuals, groups, corporates, etc to provide these services to the needy.</p>\r\n\r\n<p>We are sure that during our journey, we will come across like minded volunteers who would like to help us in our respective causes.Let&rsquo;s get involved! Let&rsquo;s start TOUCHING HEARTS ALL OVER THIS BEAUTIFUL PLANET OF OURS! We are UPASANA SOCIETY&hellip;</p>\r\n\r\n<p>Join Upasana Society, a beautiful NGO, to help us take our different causes to a next level!</p>\r\n\r\n<h2><strong>Volunteer can help Upasana Society NGO with:</strong></h2>\r\n\r\n<ol>\r\n	<li>Being a part of such initiatives.</li>\r\n	<li>Tagging along a friend, family member with them.</li>\r\n	<li>Spreading awareness about the campaign on social media.</li>\r\n	<li>Capturing the event via photographs and video shooting.</li>\r\n	<li>Donating for the initiative</li>\r\n	<li>Suggestions about how we can carry out such initiatives in a better way by dropping an email to upasana@theupasana.org</li>\r\n	<li>Write blogs and posts on social media to spread awareness.</li>\r\n</ol>\r\n', '<p>by theup6p6_wp723in Joy of Giving, Touching hearts, Underprivileged, Volunteeringtags dipti kashalkar, exchange, happiness, joy of giving, NGO, saurabh kashalkar, smile, upasana, volunteerby theup6p6_wp723in Joy of Giving, Touching hearts, Underprivileged, Volunteeringtags dipti kashalkar, exchange, happiness, joy of giving, NGO, saurabh kashalkar, smile, upasana, volunteer</p>\r\n', '<iframe src=\"https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2Fupasanasociety%2Fposts%2F2052428231548944&width=500\" width=\"500\" height=\"754\" style=\"border:none;overflow:hidden\" scrolling=\"no\" frameborder=\"0\" allowTransparency=\"true\" allow=\"encrypted-media\"></iframe>', ' \r\n                                         \r\n                                        <iframe src=\"https://www.youtube.com/embed/DEYJV-dw7e4\" width=\"100%\" height=\"315\" frameborder=\"0\" allowfullscreen=\"allowfullscreen\"></iframe>  ', 100, 23, '2013-05-18', 6),
(128, '3.jpg', 'Prekking', 'by theup6p6_wp723in Joy of Giving, Touching hearts, Underprivileged, Volunteeringtags dipti kashalkar, exchange, happiness, joy of giving, NGO, saurabh kashalkar, smile, upasana, volunteer', '<p>INITIATION -</p>\r\n\r\n<p>On the occasion of Menstrual Hygiene Day which falls on the 28th May every year, Upasana Society NGO in collaboration with Dipti K planned to provide sustainable menstrual products to 2019 underprivileged girls/women throughout India to begin with.</p>\r\n\r\n<p>Why sustainable products?</p>\r\n\r\n<ul>\r\n	<li>\r\n	<p>Do you know that 1 Menstrual cup lasts upto a decade and the fact that it can be reused will not only benefit the environment but will also give comfort to you and your wallet.&nbsp;</p>\r\n	</li>\r\n	<li>\r\n	<p>Cloth pads are also the other alternatives which last for at least 2 to 3 years and are also biodegradable.</p>\r\n	</li>\r\n</ul>\r\n\r\n<p>CAMPAIGN -&nbsp;</p>\r\n\r\n<ul>\r\n	<li>\r\n	<p><strong>Spreading awareness</strong> by educating the masses about Menstrual Hygiene and the sustainable options. We have been conducting these menstrual hygiene workshops in schools, colleges, societies and corporates throughout India.</p>\r\n	</li>\r\n	<li>\r\n	<p>Our aim is to reach out to the urban population as they can afford the products easily. Once they switch, we will <strong>seek support from the privileged</strong> in the urban areas to <strong>help the underprivileged</strong> in the rural areas who cannot afford the same.</p>\r\n	</li>\r\n	<li>\r\n	<p>Initially the underprivileged girls/women will be provided with disposable sanitary pads for 3 to 4 months and simultaneously they will be educated to use menstrual cups.</p>\r\n	</li>\r\n</ul>\r\n', '<p>&ldquo;Education &amp; Skill based training&rdquo; &ndash;&nbsp; An initiative that started off with the sole purpose of upgrading S.K Chaudhary tribal School at Medha village has grown exponentially over the past 5 years. Upasana Society NGO now adopts similar underprivileged schools and promotes literacy and skill based training&rsquo;s in collaboration with various other non profit organizations.</p>\r\n\r\n<p>We are sure that during our journey, we will come across like minded volunteers who would like to help us in our respective causes.Let&rsquo;s get involved! Let&rsquo;s start TOUCHING HEARTS ALL OVER THIS BEAUTIFUL PLANET OF OURS! We are UPASANA SOCIETY&hellip;</p>\r\n\r\n<p>Join Upasana Society, a beautiful NGO, to help us take our different causes to a next level!</p>\r\n\r\n<h2><strong>Volunteer can help Upasana Society NGO with:</strong></h2>\r\n\r\n<ol>\r\n	<li>Being a part of such initiatives.</li>\r\n	<li>Tagging along a friend, family member with them.</li>\r\n	<li>Spreading awareness about the campaign on social media.</li>\r\n	<li>Capturing the event via photographs and video shooting.</li>\r\n	<li>Donating for the initiative</li>\r\n	<li>Suggestions about how we can carry out such initiatives in a better way by dropping an email to upasana@theupasana.org</li>\r\n	<li>Write blogs and posts on social media to spread awareness.</li>\r\n</ol>\r\n', '<p>by theup6p6_wp723in Joy of Giving, Touching hearts, Underprivileged, Volunteeringtags dipti kashalkar, exchange, happiness, joy of giving, NGO, saurabh kashalkar, smile, upasana, volunteerby theup6p6_wp723in Joy of Giving, Touching hearts, Underprivileged, Volunteeringtags dipti kashalkar, exchange, happiness, joy of giving, NGO, saurabh kashalkar, smile, upasana, volunteerby theup6p6_wp723in Joy of Giving, Touching hearts, Underprivileged, Volunteeringtags dipti kashalkar, exchange, happiness, joy of giving, NGO, saurabh kashalkar, smile, upasana, volunteerby theup6p6_wp723in Joy of Giving, Touching hearts, Underprivileged, Volunteeringtags dipti kashalkar, exchange, happiness, joy of giving, NGO, saurabh kashalkar, smile, upasana, volunteer</p>\r\n', '<iframe src=\"https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2Fupasanasociety%2Fposts%2F2052428231548944&width=500\" width=\"500\" height=\"754\" style=\"border:none;overflow:hidden\" scrolling=\"no\" frameborder=\"0\" allowTransparency=\"true\" allow=\"encrypted-media\"></iframe>', ' \r\n                                        <iframe src=\"https://www.youtube.com/embed/DEYJV-dw7e4\" width=\"100%\" height=\"315\" frameborder=\"0\" allowfullscreen=\"allowfullscreen\"></iframe> ', 50, 44, '2013-05-18', 9),
(129, '5.jpg', 'Beautification ', 'by Upasanain Beautification and Hygiene, Donations, Spreading awareness, Volunteeringtags awareness, beautification, dipti kashalkar, donation, donors, hyigiene, saurabh kashalkar, social cause, upasana society, volunteer, volunteering', '<p>INITIATION -</p>\r\n\r\n<p>On the occasion of Menstrual Hygiene Day which falls on the 28th May every year, Upasana Society NGO in collaboration with Dipti K planned to provide sustainable menstrual products to 2019 underprivileged girls/women throughout India to begin with.</p>\r\n\r\n<p>Why sustainable products?</p>\r\n\r\n<ul>\r\n	<li>\r\n	<p>Do you know that 1 Menstrual cup lasts upto a decade and the fact that it can be reused will not only benefit the environment but will also give comfort to you and your wallet.&nbsp;</p>\r\n	</li>\r\n	<li>\r\n	<p>Cloth pads are also the other alternatives which last for at least 2 to 3 years and are also biodegradable.</p>\r\n	</li>\r\n</ul>\r\n\r\n<p>CAMPAIGN -&nbsp;</p>\r\n\r\n<ul>\r\n	<li>\r\n	<p><strong>Spreading awareness</strong> by educating the masses about Menstrual Hygiene and the sustainable options. We have been conducting these menstrual hygiene workshops in schools, colleges, societies and corporates throughout India.</p>\r\n	</li>\r\n	<li>\r\n	<p>Our aim is to reach out to the urban population as they can afford the products easily. Once they switch, we will <strong>seek support from the privileged</strong> in the urban areas to <strong>help the underprivileged</strong> in the rural areas who cannot afford the same.</p>\r\n	</li>\r\n	<li>\r\n	<p>Initially the underprivileged girls/women will be provided with disposable sanitary pads for 3 to 4 months and simultaneously they will be educated to use menstrual cups.</p>\r\n	</li>\r\n</ul>\r\n', '<p>We have seen a variety of photos and videos circling around various forms of social media that have truly touched our hearts. This leads us to feel sorry for the less fortunate. We also appreciate the efforts of those who have managed to touch other&rsquo;s hearts and make a difference to this world. Additionally, we have realized how fortunate we are that we have had access to the best of medical facilities and access to health awareness programs.</p>\r\n\r\n<p>There have been numerous occasions in which we could be of some help to this world and during each of them; we have tried our best to help. We when pursuing our other causes, we came across many individuals who were in need of assistance with respect to health. They were not literate enough and neither were financial strong to get the basic health facilities and awareness about the same. After a brainstorming session with the volunteers, this particular initiative came into existence.</p>\r\n\r\n<p>&ldquo;Beautification and hygiene&rdquo; &ndash; is something which is the duty of every citizen of the country. An initiative that started off with the sole purpose of spreading awareness about cleanliness and beautification of public places. Upasana tries to conduct beautification and hygiene campaigns and tries to make the individuals near to that location, a part of the initiative. Upasana tries and collaborate with individuals, groups, corporates, etc to sustain these campaigns on a day to day basis.</p>\r\n\r\n<p>We are sure that during our journey, we will come across like minded volunteers who would like to help us in our respective causes.Let&rsquo;s get involved! Let&rsquo;s start TOUCHING HEARTS ALL OVER THIS BEAUTIFUL PLANET OF OURS! We are UPASANA SOCIETY&hellip;</p>\r\n\r\n<p>Join Upasana Society, a beautiful NGO, to help us take our different causes to a next level!</p>\r\n\r\n<h2><strong>Volunteer can help Upasana Society NGO with:</strong></h2>\r\n\r\n<ol>\r\n	<li>Painting, colouring and sketching.</li>\r\n	<li>Procuring colours and raw materials needed for the campaign.</li>\r\n	<li>Spreading awareness about the campaign on social media.</li>\r\n	<li>Capturing the event via photographs and video shooting.</li>\r\n	<li>Suggestions about how we can carry out the beautification process in a better way by dropping an email to upasana@theupasana.org</li>\r\n	<li>Write blogs and posts on social media to spread awareness.</li>\r\n</ol>\r\n', '<p>With 5 day a week working schedule, it seems impossible for most of us to think of a travel plan, leave alone social work. Considering these aspects, our travel partners are&nbsp;helping us support the concept of &nbsp;Unplanned Travel over weekends.</p>\r\n', '<iframe src=\"https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2Fupasanasociety%2Fposts%2F2083892898402477&width=500\" width=\"500\" height=\"785\" style=\"border:none;overflow:hidden\" scrolling=\"no\" frameborder=\"0\" allowTransparency=\"true\" allow=\"encrypted-media\"></iframe>', ' \r\n                                        <iframe src=\"https://www.youtube.com/embed/DEYJV-dw7e4\" width=\"100%\" height=\"315\" frameborder=\"0\" allowfullscreen=\"allowfullscreen\"></iframe> ', 3000, 500, '2020-04-27', 7),
(130, '4.jpg', 'Tree Plantation', 'by theup6p6_wp723in Environment, Health awareness, Importance of Biodegradable Products & Menstrual Hygiene, Spreading awarenesstags Biodegradable Products, cloth pads, dipti kashalkar, environment, menstrual cups, menstrual hygiene, NGO, rural, sanitary pads, saurabh kashalkar, tribal,', '<p>INITIATION -</p>\r\n\r\n<p>On the occasion of Menstrual Hygiene Day which falls on the 28th May every year, Upasana Society NGO in collaboration with Dipti K planned to provide sustainable menstrual products to 2019 underprivileged girls/women throughout India to begin with.</p>\r\n\r\n<p>Why sustainable products?</p>\r\n\r\n<ul>\r\n	<li>\r\n	<p>Do you know that 1 Menstrual cup lasts upto a decade and the fact that it can be reused will not only benefit the environment but will also give comfort to you and your wallet.&nbsp;</p>\r\n	</li>\r\n	<li>\r\n	<p>Cloth pads are also the other alternatives which last for at least 2 to 3 years and are also biodegradable.</p>\r\n	</li>\r\n</ul>\r\n\r\n<p>CAMPAIGN -&nbsp;</p>\r\n\r\n<ul>\r\n	<li>\r\n	<p><strong>Spreading awareness</strong> by educating the masses about Menstrual Hygiene and the sustainable options. We have been conducting these menstrual hygiene workshops in schools, colleges, societies and corporates throughout India.</p>\r\n	</li>\r\n	<li>\r\n	<p>Our aim is to reach out to the urban population as they can afford the products easily. Once they switch, we will <strong>seek support from the privileged</strong> in the urban areas to <strong>help the underprivileged</strong> in the rural areas who cannot afford the same.</p>\r\n	</li>\r\n	<li>\r\n	<p>Initially the underprivileged girls/women will be provided with disposable sanitary pads for 3 to 4 months and simultaneously they will be educated to use menstrual cups.</p>\r\n	</li>\r\n</ul>\r\n', '<h3>&nbsp;</h3>\r\n\r\n<p>Upasana Society NGO volunteers regularly visit S. K. Chaudari School for tribal kids at Medhe Village, near Vajreshwari Temple since 2007 to conduct various activities like stationery donation, health awareness camps, skill based trainings, etc.</p>\r\n\r\n<p>During one of the Health awareness campaigns in the year 2015, volunteers observed that majority of the girl students did not have access to sanitary napkins or they could not afford the same. Apart from this, there was a lack of awareness with respect to menstrual hygiene.</p>\r\n\r\n<p>Eventually, we started spreading awareness about menstrual hygiene as well as donating sanitary pads to the girls. We ran campaigns where people could donate for the sanitary pads.</p>\r\n\r\n<h3><strong>Challenges:</strong></h3>\r\n\r\n<p>Initially it was a challenging process to change people&rsquo;s mentality about the myths and taboos related to menstruation and sanitary pads. Today we have reached a level where people have accepted the fact that menstruation is a natural biological process and they openly talk about it to spread more awareness.</p>\r\n\r\n<h3><strong>Sustainability:</strong></h3>\r\n\r\n<p>Upasana Society NGO believes that Sanitary Pad Donation campaign cannot be a one-time event as periods happen every month. To add sustainability, we tried to spread awareness through our volunteers so that we could reach out to more people. Thus, making a difference one step at a time.</p>\r\n\r\n<h3><strong>Milestones:</strong></h3>\r\n\r\n<p>The first step according to the need of the hour was to procure and provide Sanitary Pads which has been taken care of till date.</p>\r\n\r\n<p>The next step is to expand the horizon by catering to more places, using biodegradable pads and waste management.</p>\r\n\r\n<p>To empower them to make their own sanitary pads and use options which are long term and do not cause harm to environment.</p>\r\n\r\n<h3><strong>Vision:</strong></h3>\r\n\r\n<p>We are open to other places as well based on the support received from the people so that we can keep this initiative running on a sustainable basis. We want to reduce the environmental hazards caused due to non degradable sanitary hygiene products</p>\r\n\r\n<p>After running &ldquo;<strong>Sanitary Pad Donation Drive and Menstrual Hygiene</strong>&rdquo; workshops in Tribal and underprivileged areas for more than 4 more years, Upasana Society NGO felt a need of conducting workshop on &ldquo;<strong>Importance of Biodegradable Products &amp; Menstrual Hygiene</strong>&rdquo; in urban areas as well to spread awareness about the harm caused by non biodegradable menstrual products.</p>\r\n\r\n<p>We currently organizing workshops at Corporate, schools, colleges and other organizations in urban areas as well so that they too know about the importance of biodegradable products and menstrual hygiene. The funds at that we gather from these workshops will be used towards the above campaign in underprivileged and tribal areas.</p>\r\n', '<p>With 5 day a week working schedule, it seems impossible for most of us to think of a travel plan, leave alone social work. Considering these aspects, our travel partners are&nbsp;helping us support the concept of &nbsp;Unplanned Travel over weekends.</p>\r\n', '<iframe src=\"https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2Fupasanasociety%2Fposts%2F2083892898402477&width=500\" width=\"500\" height=\"785\" style=\"border:none;overflow:hidden\" scrolling=\"no\" frameborder=\"0\" allowTransparency=\"true\" allow=\"encrypted-media\"></iframe>', ' \r\n                                        <iframe src=\"https://www.youtube.com/embed/DEYJV-dw7e4\" width=\"100%\" height=\"315\" frameborder=\"0\" allowfullscreen=\"allowfullscreen\"></iframe> ', 8005, 500, '2020-04-26', 8),
(131, '2.jpg', 'Chained Musafirs', 'by theup6p6_wp723in Joy of Giving, Touching hearts, Underprivileged, Volunteeringtags dipti kashalkar, exchange, happiness, joy of giving, NGO, saurabh kashalkar, smile, upasana, volunteer', '<p>INITIATION -</p>\r\n\r\n<p>On the occasion of Menstrual Hygiene Day which falls on the 28th May every year, Upasana Society NGO in collaboration with Dipti K planned to provide sustainable menstrual products to 2019 underprivileged girls/women throughout India to begin with.</p>\r\n\r\n<p>Why sustainable products?</p>\r\n\r\n<ul>\r\n	<li>\r\n	<p>Do you know that 1 Menstrual cup lasts upto a decade and the fact that it can be reused will not only benefit the environment but will also give comfort to you and your wallet.&nbsp;</p>\r\n	</li>\r\n	<li>\r\n	<p>Cloth pads are also the other alternatives which last for at least 2 to 3 years and are also biodegradable.</p>\r\n	</li>\r\n</ul>\r\n\r\n<p>CAMPAIGN -&nbsp;</p>\r\n\r\n<ul>\r\n	<li>\r\n	<p><strong>Spreading awareness</strong> by educating the masses about Menstrual Hygiene and the sustainable options. We have been conducting these menstrual hygiene workshops in schools, colleges, societies and corporates throughout India.</p>\r\n	</li>\r\n	<li>\r\n	<p>Our aim is to reach out to the urban population as they can afford the products easily. Once they switch, we will <strong>seek support from the privileged</strong> in the urban areas to <strong>help the underprivileged</strong> in the rural areas who cannot afford the same.</p>\r\n	</li>\r\n	<li>\r\n	<p>Initially the underprivileged girls/women will be provided with disposable sanitary pads for 3 to 4 months and simultaneously they will be educated to use menstrual cups.</p>\r\n	</li>\r\n</ul>\r\n', '<p><a href=\"http://www.theupasana.org/wp\">Upasana Society NGO</a>&nbsp;has come up with a new campaign called &ldquo;<strong>Chained Musafirs</strong>&rdquo; to promote the concept of &ldquo;<strong>Ride for a Cause</strong>&rdquo;. The campaign focuses on a travel experience on bike to unexplored places for the urban population in the stress-free and pollution free environment of India. It also focuses on providing empowerment to the rural population and also work towards adding sustainability towards social causes, thus being a win-win for both.</p>\r\n\r\n<p><strong>&ndash; Chained Musafirs (Batch 3) &ndash; KERALA<br />\r\n09th&nbsp;&ndash; 10th&nbsp;February (Sat-Sun) &ndash;&nbsp;<a href=\"http://diptik.in/chained-musafirs-r4/\">Photographs &amp; Videos</a></strong></p>\r\n\r\n<p><strong>&ndash; Chained Musafirs (Batch 4) &ndash; HYDERABAD<br />\r\n23rd&nbsp;&ndash; 24th&nbsp;February (Sat-Sun) &ndash;&nbsp;</strong><strong><a href=\"http://diptik.in/chained-musafirs-r5/\">Photographs &amp; Videos</a></strong></p>\r\n\r\n<p><strong>&ndash; Chained Musafirs (Batch 1)<br />\r\n3rd&nbsp;&ndash; 4th&nbsp;November (Sat-Sun) &ndash;&nbsp;</strong><strong><a href=\"http://diptik.in/chained-musafirs-r1/\">Photographs &amp; Videos</a></strong></p>\r\n\r\n<p><a href=\"http://diptik.in/wp\">Dipti K</a>&nbsp;is &nbsp;promoting&nbsp;<a href=\"http://www.theupasana.org/wp\">Upasana Society</a>&nbsp;campaign &ldquo;<strong>Chained Musafirs</strong>&rdquo;&nbsp;of travel to UNEXPLORED places of India, experience different culture, camping in a pollution free place and also help empower villagers. The most important part is attaching a social cause to each ride which is planned.</p>\r\n\r\n<p>We will also focus on cultural exchange between both urban and rural population wherever possible and also help old culture to be experienced, preserved and promoted so that more are aware of the same.</p>\r\n\r\n<p><strong>Getting the real feel of wind</strong></p>\r\n\r\n<p>You haven&rsquo;t explored enough if you haven&rsquo;t been to bike rides to unexplored places in India. Apart from going to exotic locations, feeling thrills of an adventure, and enjoying the wonders of nature, this is the least explored dimension of traveling &amp; bike riding. Come and be a complete traveler by checking off one more box from your bucket list while riding on a bike!</p>\r\n\r\n<p><strong>Getting out of the comfort zone to experience some adventure</strong></p>\r\n\r\n<p>You think you&rsquo;ve traveled on a bike with a group of bikers? Have you been to places less explored, while riding on a bike with crazy bikers? Come and detach yourself from your normal day to day traveling and experience something out of the world.</p>\r\n\r\n<p><strong>Exploring the outskirts of your own city</strong></p>\r\n\r\n<p>You think you have traveled to UNEXPLORED places close to your city on bike? Think again! Come and know your city outskirts better than you do now by either being a rider or pillion!</p>\r\n', '<p>by theup6p6_wp723in Joy of Giving, Touching hearts, Underprivileged, Volunteeringtags dipti kashalkar, exchange, happiness, joy of giving, NGO, saurabh kashalkar, smile, upasana, volunteer</p>\r\n', '<iframe src=\"https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2Fupasanasociety%2Fposts%2F2052428231548944&width=500\" width=\"500\" height=\"754\" style=\"border:none;overflow:hidden\" scrolling=\"no\" frameborder=\"0\" allowTransparency=\"true\" allow=\"encrypted-media\"></iframe>', ' \r\n                                        <iframe src=\"https://www.youtube.com/embed/DEYJV-dw7e4\" width=\"100%\" height=\"315\" frameborder=\"0\" allowfullscreen=\"allowfullscreen\"></iframe> ', 6000, 500, '2013-05-18', 4),
(132, '1.jpg', 'Sui Dhaga aur Kapda', 'by theup6p6_wp723in Joy of Giving, Touching hearts, Underprivileged, Volunteeringtags dipti kashalkar, exchange, happiness, joy of giving, NGO, saurabh kashalkar, smile, upasana, volunteer', '<p>INITIATION -</p>\r\n\r\n<p>On the occasion of Menstrual Hygiene Day which falls on the 28th May every year, Upasana Society NGO in collaboration with Dipti K planned to provide sustainable menstrual products to 2019 underprivileged girls/women throughout India to begin with.</p>\r\n\r\n<p>Why sustainable products?</p>\r\n\r\n<ul>\r\n	<li>\r\n	<p>Do you know that 1 Menstrual cup lasts upto a decade and the fact that it can be reused will not only benefit the environment but will also give comfort to you and your wallet.&nbsp;</p>\r\n	</li>\r\n	<li>\r\n	<p>Cloth pads are also the other alternatives which last for at least 2 to 3 years and are also biodegradable.</p>\r\n	</li>\r\n</ul>\r\n\r\n<p>CAMPAIGN -&nbsp;</p>\r\n\r\n<ul>\r\n	<li>\r\n	<p><strong>Spreading awareness</strong> by educating the masses about Menstrual Hygiene and the sustainable options. We have been conducting these menstrual hygiene workshops in schools, colleges, societies and corporates throughout India.</p>\r\n	</li>\r\n	<li>\r\n	<p>Our aim is to reach out to the urban population as they can afford the products easily. Once they switch, we will <strong>seek support from the privileged</strong> in the urban areas to <strong>help the underprivileged</strong> in the rural areas who cannot afford the same.</p>\r\n	</li>\r\n	<li>\r\n	<p>Initially the underprivileged girls/women will be provided with disposable sanitary pads for 3 to 4 months and simultaneously they will be educated to use menstrual cups.</p>\r\n	</li>\r\n</ul>\r\n', '<p>Upasana Society NGO has started a campaign &ldquo;Sui Dhaga aur Kapda&ldquo;, an initiative to help underprivileged have access to good clothes and empowerment. In tribal areas, villagers including kids have to wear the same set of clothes throughout the year.</p>\r\n\r\n<p>Due to the wear and tear by using the same pair of clothes, they sometimes have to be without clothes. We request you to donate clothes which are either new or in good condition. We can arrange for a pick up if the number of clothes are substantial. More details about the campaign is given on our website.</p>\r\n\r\n<p>We also plan to teach them sewing skills and earn a respectable livelihood. Thus if anyone wishes to donate their old/new sewing machine can also contact us.</p>\r\n\r\n<p>The clothes that will be donated should not be torn and should be properly washed and pressed. We will use the extra clothes for teaching them tailoring and helping them empower themselves to earn their livelihood.</p>\r\n', '<p>by theup6p6_wp723in Joy of Giving, Touching hearts, Underprivileged, Volunteeringtags dipti kashalkar, exchange, happiness, joy of giving, NGO, saurabh kashalkar, smile, upasana, volunteerby theup6p6_wp723in Joy of Giving, Touching hearts, Underprivileged, Volunteeringtags dipti kashalkar, exchange, happiness, joy of giving, NGO, saurabh kashalkar, smile, upasana, volunteer</p>\r\n', '<iframe src=\"https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2Fupasanasociety%2Fposts%2F1792022697589500&width=500\" width=\"500\" height=\"804\" style=\"border:none;overflow:hidden\" scrolling=\"no\" frameborder=\"0\" allowTransparency=\"true\" allow=\"encrypted-media\"></iframe>', ' \r\n                                        <iframe src=\"https://www.youtube.com/embed/DEYJV-dw7e4\" width=\"100%\" height=\"315\" frameborder=\"0\" allowfullscreen=\"allowfullscreen\"></iframe> ', 60, 50, '2013-05-18', 3),
(133, '4.jpg', 'Wheels For Education', 'by theup6p6_wp723in Adopt a Village, Donations, Environment, Health awareness, Spreading awareness, Underprivilegedtags bicycles, dahanu, dipti kashalkar, donation, donors, dropouts, education, saurabh kashalkar, tribal areas, upasana society ngo, villages, wheels', '<p>INITIATION -</p>\r\n\r\n<p>On the occasion of Menstrual Hygiene Day which falls on the 28th May every year, Upasana Society NGO in collaboration with Dipti K planned to provide sustainable menstrual products to 2019 underprivileged girls/women throughout India to begin with.</p>\r\n\r\n<p>Why sustainable products?</p>\r\n\r\n<ul>\r\n	<li>\r\n	<p>Do you know that 1 Menstrual cup lasts upto a decade and the fact that it can be reused will not only benefit the environment but will also give comfort to you and your wallet.&nbsp;</p>\r\n	</li>\r\n	<li>\r\n	<p>Cloth pads are also the other alternatives which last for at least 2 to 3 years and are also biodegradable.</p>\r\n	</li>\r\n</ul>\r\n\r\n<p>CAMPAIGN -&nbsp;</p>\r\n\r\n<ul>\r\n	<li>\r\n	<p><strong>Spreading awareness</strong> by educating the masses about Menstrual Hygiene and the sustainable options. We have been conducting these menstrual hygiene workshops in schools, colleges, societies and corporates throughout India.</p>\r\n	</li>\r\n	<li>\r\n	<p>Our aim is to reach out to the urban population as they can afford the products easily. Once they switch, we will <strong>seek support from the privileged</strong> in the urban areas to <strong>help the underprivileged</strong> in the rural areas who cannot afford the same.</p>\r\n	</li>\r\n	<li>\r\n	<p>Initially the underprivileged girls/women will be provided with disposable sanitary pads for 3 to 4 months and simultaneously they will be educated to use menstrual cups.</p>\r\n	</li>\r\n</ul>\r\n', '<p><strong>Upasana Society&nbsp; NGO</strong>&nbsp; has started a campaign &ldquo;<strong>Wheels for Education</strong>&ldquo;, an initiative to help students reach school faster by&nbsp;<strong>providing them with Bicycles</strong>.</p>\r\n\r\n<p>In tribal areas students have to walk up to 5 to 8 kms to go to school, one way. Mode of transport is not even easily available in these areas and the same is not affordable.</p>\r\n\r\n<p>Now, this has been one of the major reasons for&nbsp;<strong>increased number of school dropouts.</strong></p>\r\n\r\n<p>Not being too far from Mumbai, we are talking about the&nbsp;<strong>villages / tribal pockets around Dahanu.&nbsp;</strong>We will also try and reach out to other places based on the support that we get.</p>\r\n\r\n<p>We request you to donate Bicycles which are either new or in working condition.</p>\r\n\r\n<p>We will appreciate if you can repair the bicycle and then donate to us.</p>\r\n\r\n<p><strong>You can help us submit the letter given below in your Society/School/ College/Organization so that more kids can be helped:</strong></p>\r\n\r\n<p><a href=\"http://www.theupasana.org/wp/wp-content/uploads/2018/02/WHEELS-FOR-EDUCATION-LETTER.pdf\">WHEELS FOR EDUCATION LETTER</a></p>\r\n\r\n<p><strong>Join us in this campaign and be a part of this initiative in the following ways:</strong></p>\r\n\r\n<p>1) Download the above letter and submit it to your Society/ organisation/ School/ College.</p>\r\n\r\n<p>2) Collect the old cycles from&nbsp;Society/ organisation/ School/ College.</p>\r\n\r\n<p>3) Contribute monetarily towards the repairs of bicycles and transportation.</p>\r\n\r\n<p>4) The number of old cycles in working condition need to be more than 20.</p>\r\n\r\n<p><strong>Currently the Online Donation isn&rsquo;t available so one can send the donations to:</strong></p>\r\n\r\n<p><strong>Bank Details:</strong></p>\r\n\r\n<p><strong>Account name:</strong>&nbsp;Upasana Society</p>\r\n\r\n<p><strong>Bank:</strong>&nbsp;Dena Bank</p>\r\n\r\n<p><strong>Account Type:</strong>&nbsp;Savings</p>\r\n\r\n<p><strong>Account Number:</strong>&nbsp;048710026097</p>\r\n\r\n<p><strong>Branch:</strong>&nbsp;Mount Poinsur, Borivali (West)</p>\r\n\r\n<p><strong>IFSC:</strong>&nbsp;BKDN0460487</p>\r\n\r\n<p><strong>MICR</strong>: 400018077</p>\r\n\r\n<p>Or&nbsp;<strong>Paytm</strong>&nbsp;it to 9769727057</p>\r\n\r\n<p>Your help will go long way in the education of the kids and decreasing the number of school dropouts.</p>\r\n\r\n<p>If you have any questions or need any information about this initiative, please feel free to call or WhatsApp us:</p>\r\n\r\n<p><strong>Dipti</strong>&nbsp;&ndash; 7045127770 or&nbsp;<strong>Saurabh</strong>&nbsp;&ndash; 9769727057</p>\r\n\r\n<p>Let&rsquo;s come together to support these students, for their education and health.</p>\r\n', '<p>With 5 day a week working schedule, it seems impossible for most of us to think of a travel plan, leave alone social work. Considering these aspects, our travel partners are&nbsp;helping us support the concept of &nbsp;Unplanned Travel over weekends.</p>\r\n', '<iframe src=\"https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2Fupasanasociety%2Fposts%2F2052428231548944&width=500\" width=\"500\" height=\"754\" style=\"border:none;overflow:hidden\" scrolling=\"no\" frameborder=\"0\" allowTransparency=\"true\" allow=\"encrypted-media\"></iframe>', ' \r\n                                        <iframe src=\"https://www.youtube.com/embed/DEYJV-dw7e4\" width=\"100%\" height=\"315\" frameborder=\"0\" allowfullscreen=\"allowfullscreen\"></iframe> ', 20200, 8000, '2020-04-05', 2),
(134, '3.jpg', 'Tracial', 'by theup6p6_wp723in Environment, Spreading awareness, Tracialtags dipti kashalkar, environment, NGO, saurabh kashalkar, social work, touching hearts, tracial, travelling, unplanned, upasana society', '<p>INITIATION -</p>\r\n\r\n<p>On the occasion of Menstrual Hygiene Day which falls on the 28th May every year, Upasana Society NGO in collaboration with Dipti K planned to provide sustainable menstrual products to 2019 underprivileged girls/women throughout India to begin with.</p>\r\n\r\n<p>Why sustainable products?</p>\r\n\r\n<ul>\r\n	<li>\r\n	<p>Do you know that 1 Menstrual cup lasts upto a decade and the fact that it can be reused will not only benefit the environment but will also give comfort to you and your wallet.&nbsp;</p>\r\n	</li>\r\n	<li>\r\n	<p>Cloth pads are also the other alternatives which last for at least 2 to 3 years and are also biodegradable.</p>\r\n	</li>\r\n</ul>\r\n\r\n<p>CAMPAIGN -&nbsp;</p>\r\n\r\n<ul>\r\n	<li>\r\n	<p><strong>Spreading awareness</strong> by educating the masses about Menstrual Hygiene and the sustainable options. We have been conducting these menstrual hygiene workshops in schools, colleges, societies and corporates throughout India.</p>\r\n	</li>\r\n	<li>\r\n	<p>Our aim is to reach out to the urban population as they can afford the products easily. Once they switch, we will <strong>seek support from the privileged</strong> in the urban areas to <strong>help the underprivileged</strong> in the rural areas who cannot afford the same.</p>\r\n	</li>\r\n	<li>\r\n	<p>Initially the underprivileged girls/women will be provided with disposable sanitary pads for 3 to 4 months and simultaneously they will be educated to use menstrual cups.</p>\r\n	</li>\r\n</ul>\r\n', '<p>During our&nbsp;<a href=\"http://www.theupasana.org/wp/campaign/prekking-pick-garbage-trekking/\">PREKKING</a>&nbsp;(pick up garbage+ trekking) campaign, we came across a lot of individuals who would want to do social work but due to time constraints are unable to do so.</p>\r\n\r\n<p>With 5 day a week working schedule, it seems impossible for most of us to think of a travel plan, leave alone social work. Considering these aspects, our travel partners are&nbsp;helping us support the concept of &nbsp;Unplanned Travel over weekends.</p>\r\n\r\n<p>To make it more interesting Upasana Society NGO collaborates with Travel Organizers and adds a social touch to the travel program. Thus a new concept called as &ldquo;<strong>Tracial- Travelling unplanned with a social touch&rdquo;&nbsp;</strong>came into existence.</p>\r\n\r\n<p>The whole idea of this collaboration was because of our experience with volunteers during our campaigns.</p>\r\n\r\n<p>There have been numerous occasions in which we could be of some help to this world and during each of them; we have tried our best but due to time constraints it has not been possible.</p>\r\n\r\n<p>We are sure you have been in such a situation too. So, we came up with this campaign where you can be a part of a travel program, don&rsquo;t have to look into the planning of it, don&rsquo;t have to worry about taking a leave as it happens over a weekend and also have a chance to bring about a small positive change in our society that we live in.</p>\r\n\r\n<p>How about you being a part of Tracial campaign and help motivate others ? Let&rsquo;s get involved! Let&rsquo;s start TOUCHING HEARTS ALL OVER THIS BEAUTIFUL PLANET OF OURS!</p>\r\n', '<p>With 5 day a week working schedule, it seems impossible for most of us to think of a travel plan, leave alone social work. Considering these aspects, our travel partners are&nbsp;helping us support the concept of &nbsp;Unplanned Travel over weekends.</p>\r\n', '<iframe src=\"https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2Fupasanasociety%2Fposts%2F2069521913172909&width=500\" width=\"500\" height=\"490\" style=\"border:none;overflow:hidden\" scrolling=\"no\" frameborder=\"0\" allowTransparency=\"true\" allow=\"encrypted-media\"></iframe>', ' \r\n                                        <iframe src=\"https://www.youtube.com/embed/DEYJV-dw7e4\" width=\"100%\" height=\"315\" frameborder=\"0\" allowfullscreen=\"allowfullscreen\"></iframe> ', 4400, 44, '2020-04-26', 10),
(137, '329589.png', 'Menstruation 2019', 'Sustainable Periods - Educating girls to use sustainable products during Menstruation', '<h2>Initiation -</h2>\r\n\r\n<p>On the occasion of Menstrual Hygiene Day which falls on the 28th May every year, Upasana Society NGO in collaboration with Dipti K initiated this campaign in order to spread awareness on Menstrual Hygiene and&nbsp;provide sustainable menstrual products to 2019 underprivileged girls/women throughout India to begin with.</p>\r\n\r\n<p>Why sustainable products?</p>\r\n\r\n<ul>\r\n	<li>Do you know that 1 Menstrual cup lasts upto a decade and the fact that it can be reused will not only benefit the environment but will also give comfort to you and your wallet.&nbsp;</li>\r\n	<li>Cloth pads are also the other alternatives which last for at least 2 to 3 years and are also biodegradable.</li>\r\n</ul>\r\n\r\n<h2>Campaign -&nbsp;</h2>\r\n\r\n<ul>\r\n	<li>\r\n	<p><strong>Spreading awareness</strong> by educating the masses about Menstrual Hygiene and the sustainable options. We have been conducting these menstrual hygiene workshops in schools, colleges, societies and corporates throughout India.</p>\r\n	</li>\r\n	<li>\r\n	<p>Our aim is to reach out to the urban population as they can afford the products easily. Once they switch, we will <strong>seek support from the privileged</strong> in the urban areas to <strong>help the underprivileged</strong> in the rural areas who cannot afford the same.</p>\r\n	</li>\r\n	<li>\r\n	<p>Initially the underprivileged girls/women will be provided with disposable sanitary pads for 3 to 4 months and simultaneously they will be educated to use menstrual cups.</p>\r\n	</li>\r\n</ul>\r\n', '<p>You can <strong>contact us to conduct Menstrual Hygiene workshops</strong> in schools, colleges, societies and corporates around your location.&nbsp;</p>\r\n\r\n<p><em>These workshops are free of cost but based on the location we charge for travel, food and accommodation.&nbsp;</em></p>\r\n\r\n<p>The permission letters for the workshops are given below:&nbsp;</p>\r\n\r\n<ul>\r\n	<li>\r\n	<p>Corporate- Society-Permission Letter</p>\r\n	</li>\r\n	<li>\r\n	<p>School- College-Permission Letter&nbsp;</p>\r\n	</li>\r\n</ul>\r\n\r\n<h2>Donate:</h2>\r\n\r\n<p>If you wish to bring about a change in the life of 1 underprivileged girl/woman for a minimum period of 6 to 7 years, you can donate Rs. 2000/- to us.&nbsp;</p>\r\n\r\n<p>You can also <strong>raise funds</strong> for us so that we can provide it to as many girls/women as possible.&nbsp;</p>\r\n', '<p>Workshops conducted in:</p>\r\n\r\n<p>Noida, Mumbai, Hyderabad, Pune, Coimbatore, Kochi, Calicut, Dahanu, Assam (Silchar, New Karimganj, Guwahati), Shillong, Meghalaya, Goa</p>\r\n\r\n<p>&nbsp;</p>\r\n', '<iframe src=\"https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2Fupasanasociety%2Fposts%2F2083892898402477&width=500\" width=\"500\" height=\"785\" style=\"border:none;overflow:hidden\" scrolling=\"no\" frameborder=\"0\" allowTransparency=\"true\" allow=\"encrypted-media\"></iframe><iframe src=\"https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2Fupasanasociety%2Fposts%2F2083892898402477&width=500\" width=\"500\" height=\"785\" style=\"border:none;overflow:hidden\" scrolling=\"no\" frameborder=\"0\" allowTransparency=\"true\" allow=\"encrypted-media\"></iframe>', '<iframe src=\"https://www.youtube.com/embed/Fw_OC5AbMP8\" width=\"100%\" height=\"315\" frameborder=\"0\" allowfullscreen=\"allowfullscreen\"></iframe>', 20200, 5000, '2015-01-03', 1);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `title` varchar(5000) NOT NULL,
  `img` varchar(5000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `title`, `img`) VALUES
(2, 'Fundraising ', 'help03.png'),
(3, 'Marketing', 'help02.png'),
(4, 'Audio and Video Ed', '602472.png'),
(5, 'Social Media', 'help03.png'),
(6, 'Graphic Design', 'help02.png'),
(8, 'Content Writing', 'help01.png');

-- --------------------------------------------------------

--
-- Table structure for table `contactform`
--

CREATE TABLE `contactform` (
  `id` int(11) NOT NULL,
  `name` varchar(5000) NOT NULL,
  `surname` varchar(5000) NOT NULL,
  `email` varchar(200) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `message` varchar(5000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contactform`
--

INSERT INTO `contactform` (`id`, `name`, `surname`, `email`, `mobile`, `message`) VALUES
(1, 'Meet', 'Shah', 'meetshah9819@gmail.com', '9819461979', 'Hello. This is Testing Message');

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `id` int(11) NOT NULL,
  `img` varchar(1000) NOT NULL,
  `campid` int(11) NOT NULL,
  `title` varchar(1000) NOT NULL,
  `description` longtext NOT NULL,
  `venue` varchar(1000) NOT NULL,
  `googlemap` varchar(1000) NOT NULL,
  `startdatee` date NOT NULL,
  `enddatee` date NOT NULL,
  `fblink` varchar(1000) NOT NULL,
  `youtubelink` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`id`, `img`, `campid`, `title`, `description`, `venue`, `googlemap`, `startdatee`, `enddatee`, `fblink`, `youtubelink`) VALUES
(1, '1.jpg', 137, 'Menstruation2019', '<p>dssfAn initiative that started off with the sole purpose of spreading health awareness for the needy. Upasana Society NGO tries to conduct health awareness workshops and health camps where health facilities are difficult to reach. Upasana tries and collaborate with individuals, groups, corporates, etc to provide these services to the needy.</p>\r\n', 'Dahanu, Palghar', '<div style=\"overflow:hidden;max-width:100%;width:500px;height:500px;\"><div id=\"googlemaps-canvas\" style=\"height:100%; width:100%;max-width:100%;\"><iframe style=\"height:100%;width:100%;border:0;\" frameborder=\"0\" src=\"https://www.google.com/maps/embed/v1/place?q=mumbai&key=AIzaSyBFw0Qbyq9zTFTd-tUY6dZWTgaQzuU17R8\"></iframe></div><a class=\"embedmap-code\" href=\"https://www.embed-map.com\" id=\"grabmap-authorization\">https://www.embed-map.com</a><style>#googlemaps-canvas img{max-height:none;max-width:none!important;background:none!important;}</style></div>', '2020-04-01', '2020-04-15', ' \r\n                                        https://www.facebook.com/media/set/?vanity=upasanasociety&set=a.1499223746869398 ', 'https://www.youtube.com/watch?v=FUJzpgI5iuA&list=PLPw5jRL4-MSkk-U87NVvvQBN9JKL_ocRr&index=2'),
(2, '2.jpg', 134, 'That started sdsd', '<p>dssfAn initiative that started off with the sole purpose of spreading health awareness for the needy. Upasana Society NGO tries to conduct health awareness workshops and health camps where health facilities are difficult to reach. Upasana tries and collaborate with individuals, groups, corporates, etc to provide these services to the needy.</p>\r\n', 'Mumbaidfs', '<div style=\"overflow:hidden;max-width:100%;width:500px;height:500px;\"><div id=\"googlemaps-canvas\" style=\"height:100%; width:100%;max-width:100%;\"><iframe style=\"height:100%;width:100%;border:0;\" frameborder=\"0\" src=\"https://www.google.com/maps/embed/v1/place?q=mumbai&key=AIzaSyBFw0Qbyq9zTFTd-tUY6dZWTgaQzuU17R8\"></iframe></div><a class=\"embedmap-code\" href=\"https://www.embed-map.com\" id=\"grabmap-authorization\">https://www.embed-map.com</a><style>#googlemaps-canvas img{max-height:none;max-width:none!important;background:none!important;}</style></div>', '2020-04-15', '2020-04-29', '<iframe src=\"https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2Fupasanasociety%2Fposts%2F2082043515254082&width=500\" width=\"500\" height=\"439\" style=\"border:none;overflow:hidden\" scrolling=\"no\" frameborder=\"0\" allowTransparency=\"true\" allow=\"encrypted-media\"></iframe>', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/H6N47iuCl58\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>'),
(3, '3.jpg', 134, '#Menstruation2019', '<p>dssfAn initiative that started off with the sole purpose of spreading health awareness for the needy. Upasana Society NGO tries to conduct health awareness workshops and health camps where health facilities are difficult to reach. Upasana tries and collaborate with individuals, groups, corporates, etc to provide these services to the needy.</p>', 'Aarey Colony, Goregaon, Mumbai, Maharashtra', '<div style=\"overflow:hidden;max-width:100%;width:500px;height:500px;\"><div id=\"googlemaps-canvas\" style=\"height:100%; width:100%;max-width:100%;\"><iframe style=\"height:100%;width:100%;border:0;\" frameborder=\"0\" src=\"https://www.google.com/maps/embed/v1/place?q=mumbai&key=AIzaSyBFw0Qbyq9zTFTd-tUY6dZWTgaQzuU17R8\"></iframe></div><a class=\"embedmap-code\" href=\"https://www.embed-map.com\" id=\"grabmap-authorization\">https://www.embed-map.com</a><style>#googlemaps-canvas img{max-height:none;max-width:none!important;background:none!important;}</style></div>', '2020-04-08', '2020-04-09', '<iframe src=\"https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2Fupasanasociety%2Fposts%2F2082045598587207&width=500\" width=\"500\" height=\"771\" style=\"border:none;overflow:hidden\" scrolling=\"no\" frameborder=\"0\" allowTransparency=\"true\" allow=\"encrypted-media\"></iframe>', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/H6N47iuCl58\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>');

-- --------------------------------------------------------

--
-- Table structure for table `requirement`
--

CREATE TABLE `requirement` (
  `id` int(11) NOT NULL,
  `img` varchar(5000) NOT NULL,
  `name` varchar(5000) NOT NULL,
  `catid` varchar(5000) NOT NULL,
  `detail` longtext NOT NULL,
  `requirement` longtext NOT NULL,
  `camp` int(11) NOT NULL,
  `duration` varchar(5000) NOT NULL,
  `timee` varchar(5000) NOT NULL,
  `period` varchar(5000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `requirement`
--

INSERT INTO `requirement` (`id`, `img`, `name`, `catid`, `detail`, `requirement`, `camp`, `duration`, `timee`, `period`) VALUES
(2, '1.jpg', '#Menstruation2019', '2', '<p>1. Continuous communication with us to understand the designs which have already been prepared 2. Translating the designs of the website into mobile-friendly ones for the application in order to maintain consistency</p>\r\n\r\n<p>Description</p>\r\n\r\n<hr />\r\n<p>We need to build a mobile application which works in sync with the website to increase ease of use.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Project Roadmap</p>\r\n\r\n<hr />\r\n<p>Step 1</p>\r\n\r\n<p>1. Continuous communication with us to understand the designs which have already been prepared 2. Translating the designs of the website into mobile-friendly ones for the application in order to maintain consistency</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Impact</p>\r\n\r\n<hr />\r\n<p>The mobile application is intended to be the primary platform of communication between users and Local Elected Representatives &amp; Aagaaz.</p>\r\n', '<p>Mauris auctor efficitur nisl, non blandit urna fermentum nec. Vestibulum non leo libero.Vestibulum quam nisi, pretium a nibh sit amet, consectetur hendrerit mi. Aenean imperdiet lacus sit amet elit porta, et malesuada erat bibendum. Cras sed nunc massa. Quisque tempor dolor sit amet tellus malesuada, malesuada iaculis eros dignissim. Aenean vitae diam id lacus fringilla maximus. Mauris auctor efficitur nisl, non blandit urna fermentum nec. Vestibulum non leo libero.Vestibulum quam nisi, pretium a nibh sit amet, consectetur hendrerit mi. Aenean imperdiet lacus sit amet elit porta, et malesuada erat bibendum. Cras sed nunc massa. Quisque tempor dolor sit amet tellus malesuada, malesuada iaculis eros dignissim. Aenean vitae diam id lacus fringilla maximus. Mauris auctor efficitur nisl, non blandit urna fermentum nec. Vestibulum non leo libero.&nbsp;</p>\r\n\r\n<p>Skills Needed</p>\r\n\r\n<hr />\r\n<ul>\r\n	<li>Proofreading</li>\r\n</ul>\r\n\r\n<p>Requirements</p>\r\n\r\n<hr />\r\n<ul>\r\n	<li>Good at writing content</li>\r\n</ul>\r\n', 137, '4 Week(s) ', '7 hrs/week ', 'Flexible '),
(3, '2.jpg', 'Wheels for Education', '2', '<p>we need painting of 25 pangolin pictures for our pictorial storybook for kids. The book is for free distribution.we need painting of 25 pangolin pictures for our pictorial storybook for kids. The book is for free distribution.we need painting of 25 pangolin pictures for our pictorial storybook for kids. The book is for free distribution.</p>\r\n\r\n<p>Project Roadmap</p>\r\n\r\n<hr />\r\n<p>Step 1</p>\r\n\r\n<p>Contact the NGO &amp; discuss the requirement in detail.</p>\r\n\r\n<p>Step 2</p>\r\n\r\n<p>Read the given story and under stand.</p>\r\n\r\n<p>Step 3</p>\r\n\r\n<p>Draw rough sketches &amp; consult with the NGO contact person</p>\r\n\r\n<p>Step 4</p>\r\n\r\n<p>Make changes if necessary</p>\r\n\r\n<p>Step 5</p>\r\n\r\n<p>Finalize the painting after approval</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Impact</p>\r\n\r\n<hr />\r\n<p>Paintings will make an interesting pictorial storybook.</p>\r\n\r\n<p>It will help the children and the young generation to know about the pangolin</p>\r\n\r\n<p>They will understand the need to save them through a story book.</p>\r\n\r\n<p>&nbsp;</p>\r\n', '<p>Mauris auctor efficitur nisl, non blandit urna fermentum nec. Vestibulum non leo libero.Vestibulum quam nisi, pretium a nibh sit amet, consectetur hendrerit mi. Aenean imperdiet lacus sit amet elit porta, et malesuada erat bibendum. Cras sed nunc massa. Quisque tempor dolor sit amet tellus malesuada, malesuada iaculis eros dignissim. Aenean vitae diam id lacus fringilla maximus. Mauris auctor efficitur nisl, non blandit urna fermentum nec. Vestibulum non leo libero.Vestibulum quam nisi, pretium a nibh sit amet, consectetur hendrerit mi. Aenean imperdiet lacus sit amet elit porta, et malesuada erat bibendum. Cras sed nunc massa. Quisque tempor dolor sit amet tellus malesuada, malesuada iaculis eros dignissim. Aenean vitae diam id lacus fringilla maximus. Mauris auctor efficitur nisl, non blandit urna fermentum nec. Vestibulum non leo libero.&nbsp;</p>\r\n\r\n<p>Skills Needed</p>\r\n\r\n<hr />\r\n<ul>\r\n	<li>Proofreading</li>\r\n</ul>\r\n\r\n<p>Requirements</p>\r\n\r\n<hr />\r\n<ul>\r\n	<li>Good at writing content</li>\r\n</ul>\r\n', 133, '4 Hrs / Week   ', '10.00 am to 5.00 pm', 'Flexible '),
(4, '3.jpg', 'Joy of Giving', '6', '<p>Vestibulum quam nisi, pretium a nibh sit amet, consectetur hendrerit mi. Aenean imperdiet lacus sit amet elit porta, et malesuada erat bibendum. Cras sed nunc massa. Quisque tempor dolor sit amet tellus malesuada, malesuada iaculis eros dignissim. Aenean vitae diam id lacus fringilla maximus.</p>\r\n\r\n<p>Description</p>\r\n\r\n<hr />\r\n<p>Volunteers who may spend dedicated time for proof-reading of Anudip Curriculum Modules. The volunteer should have some certification on English as a language or have experience in domain/role where English knowledge is a key requirement.</p>\r\n\r\n<p>Project Roadmap</p>\r\n\r\n<hr />\r\n<p>Step 1</p>\r\n\r\n<p>The volunteer should consult anudip spoc and Curriculum head to get a clear idea of the work.</p>\r\n\r\n<p>Step 2</p>\r\n\r\n<p>The curriculum content should be checked minutely for grammatical and spelling errors.</p>\r\n\r\n<p>Step 3</p>\r\n\r\n<p>The volunteer should submit the corrected curriculum content.</p>\r\n\r\n<p>Step 4</p>\r\n\r\n<p>The volunteer should wait for the feedback from the curriculum head and if needed have to make changes.</p>\r\n\r\n<p>Impact</p>\r\n\r\n<hr />\r\n<p>The curriculum is taught to impoverished, marginalised youth will help them to gain knowledge and get a job after the training.</p>\r\n', '<p>Mauris auctor efficitur nisl, non blandit urna fermentum nec. Vestibulum non leo libero.Vestibulum quam nisi, pretium a nibh sit amet, consectetur hendrerit mi. Aenean imperdiet lacus sit amet elit porta, et malesuada erat bibendum. Cras sed nunc massa. Quisque tempor dolor sit amet tellus malesuada, malesuada iaculis eros dignissim. Aenean vitae diam id lacus fringilla maximus. Mauris auctor efficitur nisl, non blandit urna fermentum nec. Vestibulum non leo libero.Vestibulum quam nisi, pretium a nibh sit amet, consectetur hendrerit mi. Aenean imperdiet lacus sit amet elit porta, et malesuada erat bibendum. Cras sed nunc massa. Quisque tempor dolor sit amet tellus malesuada, malesuada iaculis eros dignissim. Aenean vitae diam id lacus fringilla maximus. Mauris auctor efficitur nisl, non blandit urna fermentum nec. Vestibulum non leo libero.&nbsp;</p>\r\n\r\n<p>Skills Needed</p>\r\n\r\n<hr />\r\n<ul>\r\n	<li>Proofreading</li>\r\n</ul>\r\n\r\n<p>Requirements</p>\r\n\r\n<hr />\r\n<ul>\r\n	<li>Good at writing content</li>\r\n</ul>\r\n', 110, '4 Hrs / Week   ', '10.00 am to 5.00 pm', 'Flexible ');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `id` int(11) NOT NULL,
  `title` varchar(5000) NOT NULL,
  `heading` varchar(5000) NOT NULL,
  `subtitle` varchar(5000) NOT NULL,
  `img` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id`, `title`, `heading`, `subtitle`, `img`) VALUES
(2, '#Menstruation2019', '#Menstruation2019', 'Switching girls/women from disposable sanitary pads to sustainable options like Menstrual Cups', '404374.jpg'),
(3, 'Wheels for Education', 'Reuse, Recycle, Upcycle', 'Collecting Old Scrap Bicycles from Urban societies and recycling them to be reused by the Tribal kids of Rural India - sustainable, environment, education, empowerment', '555590.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `subscribe`
--

CREATE TABLE `subscribe` (
  `id` int(11) NOT NULL,
  `name` varchar(2000) NOT NULL,
  `email` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subscribe`
--

INSERT INTO `subscribe` (`id`, `name`, `email`) VALUES
(1, '', 'meetshah9819@gmail.com'),
(2, 'Crocin', 'meetshah9819@gmail.com'),
(3, 'sameep sakpal', 'sameepsakpal1809@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `userID` int(11) NOT NULL,
  `userName` varchar(100) NOT NULL,
  `userEmail` varchar(100) NOT NULL,
  `userPass` varchar(100) NOT NULL,
  `userStatus` enum('Y','N') NOT NULL DEFAULT 'N',
  `tokenCode` varchar(100) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `address` varchar(1000) NOT NULL,
  `aboutme` longtext NOT NULL,
  `lastname` varchar(5000) NOT NULL,
  `img` varchar(5000) NOT NULL,
  `nationality` varchar(5000) NOT NULL,
  `age` int(11) NOT NULL,
  `gender` varchar(5000) NOT NULL,
  `phone` varchar(5000) NOT NULL,
  `causes` varchar(5000) NOT NULL,
  `skills` varchar(5200) NOT NULL,
  `resume` varchar(5000) NOT NULL,
  `cempstatus` varchar(5000) NOT NULL,
  `coccupation` varchar(5000) NOT NULL,
  `website` varchar(4000) NOT NULL,
  `fb` varchar(5000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`userID`, `userName`, `userEmail`, `userPass`, `userStatus`, `tokenCode`, `mobile`, `address`, `aboutme`, `lastname`, `img`, `nationality`, `age`, `gender`, `phone`, `causes`, `skills`, `resume`, `cempstatus`, `coccupation`, `website`, `fb`) VALUES
(87, 'Meet Shah', 'meetshah9819@gmail.com', '202cb962ac59075b964b07152d234b70', 'Y', '409d516fcfc6245011d3b5930d4f64d0', '9819461979', 'B/601 Shree Managalam Anand Nagar Dahisar East mumbai 400069', 'I m a good person', 'Shah', '1.jpg', 'Indian', 24, 'Male', '9819461979', '1', '1', '1.pdf', 'No', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `id` int(11) NOT NULL,
  `img` varchar(5000) NOT NULL,
  `name` varchar(5000) NOT NULL,
  `post` varchar(200) NOT NULL,
  `message` varchar(20000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`id`, `img`, `name`, `post`, `message`) VALUES
(1, 'lobo.jpg', 'Christina Lobo', 'Volunteer', '  Upasana is an NGO that makes the impossible, possible. Saurabh is Upasana and Upasana is Saurabh.'),
(2, '952668.jpg', 'Dipti Kashalkar', 'Co-founder', 'At this very moment, there are people only you can reach and differences only you can make.'),
(3, 'saurabh.jpg', 'Saurabh Kashalkar', 'Founder', 'How wonderful it is that nobody need wait a single moment to improve the world.'),
(4, 'afreen.jpg', 'Afreen Shaikh', 'Volunteer', ' Each time you help someone in need, you get immense happiness and satisfaction'),
(6, 'nihar.jpg', 'Nihar Thakkar', 'Volunteer', 'Self-sustainability and transparency are the two strong pillars on which Upasana stands and strives to make the world a better place for everyone'),
(7, 'sheetal.jpg', 'Sheetal Rao', 'Volunteer', 'The true essence of selflessness reflects in the activities/ causes that Upasana picks up, acting as an enabler for creating a better society, and a better tomorrow.'),
(8, 'ashna.jpg', 'Ashna Shetty', 'Volunteer', ' Upasana is striving to bring a smile to the faces of several people, children and adults alike. Its NGOs like these that restore your faith in humanity.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `achievements`
--
ALTER TABLE `achievements`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `adminlogin`
--
ALTER TABLE `adminlogin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `campaigns`
--
ALTER TABLE `campaigns`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contactform`
--
ALTER TABLE `contactform`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `requirement`
--
ALTER TABLE `requirement`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subscribe`
--
ALTER TABLE `subscribe`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`userID`),
  ADD UNIQUE KEY `userEmail` (`userEmail`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `achievements`
--
ALTER TABLE `achievements`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `adminlogin`
--
ALTER TABLE `adminlogin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `campaigns`
--
ALTER TABLE `campaigns`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=149;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `contactform`
--
ALTER TABLE `contactform`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `requirement`
--
ALTER TABLE `requirement`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `subscribe`
--
ALTER TABLE `subscribe`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `userID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=88;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
