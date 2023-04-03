-- phpMyAdmin SQL Dump
-- version 5.1.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Apr 03, 2023 at 01:35 PM
-- Server version: 5.7.24
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `accms`
--

CREATE DATABASE accms;
use accms;
-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `blog_id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `content` text,
  `image_url` text,
  `user_name` varchar(255) DEFAULT NULL,
  `created_on` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`blog_id`, `title`, `content`, `image_url`, `user_name`, `created_on`) VALUES
(2, 'How to upload s3', NULL, 'http://accms-assets-5674347.s3.eu-west-2.amazonaws.com/1500x500.jpeg', 'aaron', '2023-02-22 18:01:25');

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `project_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `content` text,
  `image_url` varchar(255) DEFAULT NULL,
  `user_name` varchar(255) DEFAULT NULL,
  `created_on` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`project_id`, `user_id`, `title`, `content`, `image_url`, `user_name`, `created_on`) VALUES
(11, 0, 'How to Make the Perfect Cup of Coffee', '<h2>If you\'re a coffee lover, you know that there\'s nothing quite like the taste and aroma of a perfectly brewed cup of coffee. But making that perfect cup of coffee can be a challenge, especially if you\'re not sure where to start.</h2><h3>Here are a few tips to help you brew the perfect cup of coffee every time:</h3><p>Start with fresh, high-quality beans. The quality of your coffee beans is the foundation of a great cup of coffee. Look for beans that are fresh and have been roasted within the past two weeks. You can buy beans whole or pre-ground, but whole beans will give you a fresher and more flavorful cup of coffee.</p><p><strong>Use the right amount of coffee.</strong> The perfect coffee-to-water ratio is about 1 to 2 tablespoons of coffee per 6 ounces of water. However, this can vary depending on your personal taste and the strength of the coffee you prefer.</p><p><strong>Grind your coffee beans properly.</strong> If you\'re using whole beans, you\'ll need to grind them before brewing. The coarseness of the grind can affect the strength and flavor of your coffee, so it\'s important to get it right. A medium grind is usually best for drip coffee makers, while a fine grind is better for espresso machines.</p><p><strong>Use filtered water.</strong> The quality of the water you use can also affect the taste of your coffee. Filtered water is best because it removes any impurities that can affect the flavor of the coffee.</p><p><strong>Brew at the right temperature. </strong>The ideal brewing temperature for coffee is between 195 and 205 degrees Fahrenheit. If your coffee is brewed at a lower temperature, it may taste weak, while brewing at a higher temperature can make it taste bitter.</p><p><strong>Don\'t let your coffee sit too long.</strong> Once your coffee has finished brewing, it\'s best to enjoy it right away. Coffee that sits too long can become bitter and lose its flavor.</p><p>By following these simple tips, you can brew the perfect cup of coffee every time. Whether you prefer a strong espresso or a smooth and mellow drip coffee, these tips will help you get the most out of your coffee beans and create a cup of coffee that\'s truly delicious.</p>', 'http://accms-assets-5674347.s3.eu-west-2.amazonaws.com/ws_Coffee_Illustration_1600x1200.jpg', 'Patrick', '2023-03-17 11:04:32');

-- --------------------------------------------------------

--
-- Table structure for table `sys`
--

CREATE TABLE `sys` (
  `company_id` int(11) NOT NULL,
  `company_name` varchar(255) NOT NULL DEFAULT 'Aaron is a cunt',
  `company_url` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sys`
--

INSERT INTO `sys` (`company_id`, `company_name`, `company_url`) VALUES
(1, 'Anglian Creative', 'http://accms-assets-5674347.s3.eu-west-2.amazonaws.com/Frame%2032.png');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_email` varchar(40) NOT NULL,
  `user_pass` varchar(255) NOT NULL,
  `user_url` varchar(255) DEFAULT NULL,
  `user_role` varchar(255) NOT NULL,
  `user_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_email`, `user_pass`, `user_url`, `user_role`, `user_name`) VALUES
(2, 's215097@uos.ac.uk', '$2y$10$rEa8Dj30HDN1zeE6j.rrJOiYpYDAPJKRBvEe1ktkxx15dsQdPZ4wO', 'http://accms-assets-5674347.s3.eu-west-2.amazonaws.com/whatsOnHero.jpg', 'Global Administrator', 'Aaron Riley'),
(6, 'aaron.riley@uos.ac.uk', '$2y$10$hMh1ABqmMnBqOt/ACEKTU.HsEhv1lW9yRBejaUxeUP/.eJbZ1ncQ2', 'http://accms-assets-5674347.s3.eu-west-2.amazonaws.com/about.jpg', 'Creator', 'aaron-riley'),
(7, 'a.riley@uos.ac.uk', '$2y$10$HR8FK9oCi6SydzU5NwHI6.GrUPGjkx2rSl7Vzr79308VtBe1XOqPi', NULL, 'Developer', 'Patrick'),
(8, 'a.riley@uos.ac.uk', '$2y$10$5N0UGxzf62ALgwBUeQMcFuXFO33ppzCCVy/PoaBwCok02iyumFxJm', NULL, 'Developer', 'Patrick');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`blog_id`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`project_id`);

--
-- Indexes for table `sys`
--
ALTER TABLE `sys`
  ADD PRIMARY KEY (`company_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `blog_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `project_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `sys`
--
ALTER TABLE `sys`
  MODIFY `company_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
