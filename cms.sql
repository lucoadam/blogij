-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 27, 2018 at 12:07 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 5.6.37

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cms`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `position` varchar(100) DEFAULT NULL,
  `age` int(11) NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  `phone` varchar(100) DEFAULT NULL,
  `website` varchar(100) DEFAULT NULL,
  `country` varchar(100) DEFAULT NULL,
  `fb_link` varchar(100) DEFAULT NULL,
  `twitter_link` varchar(100) DEFAULT NULL,
  `googleplus_link` varchar(100) DEFAULT NULL,
  `instagram_link` varchar(100) DEFAULT NULL,
  `be_link` varchar(100) DEFAULT NULL,
  `ball_link` varchar(100) DEFAULT NULL,
  `pinintrest_link` varchar(100) DEFAULT NULL,
  `content` longtext,
  `address` varchar(100) DEFAULT NULL,
  `image` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id`, `name`, `position`, `age`, `email`, `phone`, `website`, `country`, `fb_link`, `twitter_link`, `googleplus_link`, `instagram_link`, `be_link`, `ball_link`, `pinintrest_link`, `content`, `address`, `image`) VALUES
(1, 'Shiba Kumar Sapkota', 'Deputy Director, Ministry of Education', 24, 'shibak@gmail.com', '981044304220', 'www.web.com', '<p>dlfmdlfhfwhefoiwmflsdfhwokdfjksldmfwdbhfowejflkdshfw</p>', '', '', '', '', '', '', NULL, '', 'Address', 'person3.png');

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `timestamp` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `title`, `content`, `timestamp`) VALUES
(1, 'Main Article', 'This is the main Article							', 1537751472);

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(11) NOT NULL,
  `header` varchar(100) DEFAULT NULL,
  `sub_head` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `blog_post`
--

CREATE TABLE `blog_post` (
  `id` int(11) NOT NULL,
  `timestamp` bigint(20) DEFAULT NULL,
  `title` varchar(225) DEFAULT NULL,
  `content_short` varchar(255) DEFAULT NULL,
  `content_full` longtext,
  `image` varchar(100) DEFAULT NULL,
  `blogby` varchar(100) DEFAULT NULL,
  `post` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blog_post`
--

INSERT INTO `blog_post` (`id`, `timestamp`, `title`, `content_short`, `content_full`, `image`, `blogby`, `post`) VALUES
(5, 1538033734, 'new postdfd', NULL, '<p>fdfdfdwfw</p>', 'blogad.png', 'Alish Dahal', 'none'),
(6, 1537893782, 'new postdfd', NULL, '<p>This is content</p>', 'Capture.PNG', 'Alish Dahal', 'nonoe'),
(7, 1537932298, 'dhfidgndlfd', NULL, '<p>sdfwfhwoefnmsdlfmseoehfjdlfdmsfsjdfs,djfsd</p>', 'Capture.PNG', 'dgdglmdlgfdsfsd', 'dfdfdsfsf'),
(8, 1537933146, 'New post', NULL, '<p>dfdhgdlkfmdcvckvbuidfd</p>', 'Capture.PNG', 'Alish Dahal', 'dfdo'),
(9, 1537946361, 'next', NULL, '<p>dgfdgjdlgmdfmdlfd</p>', 'post01.jpg', 'dgdglmdlgfdsfsd', 'dfdfdsfsf');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  `phone` int(30) DEFAULT NULL,
  `location` varchar(200) DEFAULT NULL,
  `location2` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `email`, `phone`, `location`, `location2`) VALUES
(1, 'alishdahal@yahoo.com', 981345355, 'Kathmandu', 'Nepal');

-- --------------------------------------------------------

--
-- Table structure for table `home`
--

CREATE TABLE `home` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL DEFAULT 'Shiba Kumar Sapkota',
  `position` varchar(100) NOT NULL DEFAULT 'Deputy Director, Ministry of Education'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `home`
--

INSERT INTO `home` (`id`, `name`, `position`) VALUES
(1, 'Shiba Kumar Sapkota', 'Deputy Director, Ministry of Education');

-- --------------------------------------------------------

--
-- Table structure for table `portfolio`
--

CREATE TABLE `portfolio` (
  `id` int(11) NOT NULL,
  `content` varchar(100) DEFAULT NULL,
  `images` varchar(100) DEFAULT NULL,
  `subhead` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `portfolio`
--

INSERT INTO `portfolio` (`id`, `content`, `images`, `subhead`) VALUES
(3, 'Articles', 'php.PNG', NULL),
(4, 'Photos', 'download rate.PNG', NULL),
(5, 'Articles', 'blogad.png', NULL),
(6, 'Articles', 'bgs1.jpg', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `portfolio_contents`
--

CREATE TABLE `portfolio_contents` (
  `id` int(11) NOT NULL,
  `content` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `portfolio_contents`
--

INSERT INTO `portfolio_contents` (`id`, `content`) VALUES
(1, 'Books And Report'),
(2, 'Articles'),
(3, 'Songs and Poems'),
(4, 'Photos'),
(5, 'Videos');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(11) NOT NULL,
  `work` varchar(100) DEFAULT NULL,
  `title` varchar(100) DEFAULT NULL,
  `img_src` varchar(255) DEFAULT NULL,
  `content` longtext
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `work`, `title`, `img_src`, `content`) VALUES
(1, 'I make sites', 'title', 'img', NULL),
(2, NULL, 'title2', 'img', NULL),
(3, NULL, 'New post', 'blogad.png', '<p>dfjdklfmdslfsdhfsdlfsd</p>');

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `id` int(11) NOT NULL,
  `header` varchar(100) DEFAULT NULL,
  `sub_head` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `testimonials_content`
--

CREATE TABLE `testimonials_content` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `content_short` varchar(255) DEFAULT NULL,
  `content_full` longtext
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `testimonials_content`
--

INSERT INTO `testimonials_content` (`id`, `name`, `image`, `content_short`, `content_full`) VALUES
(1, 'alish', 'Capture.PNG', NULL, 'This is body portion'),
(2, 'mero name alish hoina', 'Capture.PNG', NULL, '<h1>helloworld&nbsp;<strong>dgdgmdfdgdgfdbf</strong></h1>'),
(3, 'mero name alish hoina', 'Capture.PNG', NULL, '<h1>helloworld&nbsp;<strong>dgdgmdfdgdgfdbf</strong></h1>');

-- --------------------------------------------------------

--
-- Table structure for table `uploading`
--

CREATE TABLE `uploading` (
  `id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `file_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`) VALUES
(0, 'admin', '5f4dcc3b5aa765d61d8327deb882cf99', 'lucoadam@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `about_id_uindex` (`id`),
  ADD UNIQUE KEY `about_pk` (`id`),
  ADD UNIQUE KEY `about_pk_2` (`name`),
  ADD UNIQUE KEY `about_pk_3` (`position`);

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `articles_id_uindex` (`id`);

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `blog_id_uindex` (`id`);

--
-- Indexes for table `blog_post`
--
ALTER TABLE `blog_post`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `blog_post_id_uindex` (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `contact_id_uindex` (`id`);

--
-- Indexes for table `home`
--
ALTER TABLE `home`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `home_id_uindex` (`id`),
  ADD UNIQUE KEY `home_name_uindex` (`name`),
  ADD UNIQUE KEY `home_pk` (`position`);

--
-- Indexes for table `portfolio`
--
ALTER TABLE `portfolio`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `portfolio_id_uindex` (`id`);

--
-- Indexes for table `portfolio_contents`
--
ALTER TABLE `portfolio_contents`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `portfolio_contents_id_uindex` (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `services_id_uindex` (`id`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `testimonials_id_uindex` (`id`);

--
-- Indexes for table `testimonials_content`
--
ALTER TABLE `testimonials_content`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `testimonials_content_id_uindex` (`id`);

--
-- Indexes for table `uploading`
--
ALTER TABLE `uploading`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `blog_post`
--
ALTER TABLE `blog_post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `home`
--
ALTER TABLE `home`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `portfolio`
--
ALTER TABLE `portfolio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `portfolio_contents`
--
ALTER TABLE `portfolio_contents`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `testimonials_content`
--
ALTER TABLE `testimonials_content`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `uploading`
--
ALTER TABLE `uploading`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
