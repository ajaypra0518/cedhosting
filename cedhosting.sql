-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 15, 2021 at 03:49 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cedhosting`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_blog`
--

CREATE TABLE `tbl_blog` (
  `id` int(11) NOT NULL,
  `blog_title` varchar(44) NOT NULL,
  `blog_desc` text NOT NULL,
  `blog_date` datetime NOT NULL,
  `author_name` varchar(44) NOT NULL DEFAULT 'Anonymous',
  `caption_img` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_company_info`
--

CREATE TABLE `tbl_company_info` (
  `id` int(11) NOT NULL,
  `comp_name` varchar(55) NOT NULL,
  `comp_logo` varchar(1000) NOT NULL,
  `comp_contact` varchar(33) NOT NULL,
  `comp_email` varchar(33) NOT NULL,
  `comp_address` varchar(88) NOT NULL,
  `comp_city` varchar(44) NOT NULL,
  `comp_state` int(11) NOT NULL,
  `comp_pincode` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_orders`
--

CREATE TABLE `tbl_orders` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `user_billing_id` int(11) NOT NULL,
  `order_date` datetime NOT NULL,
  `status` int(11) NOT NULL,
  `promocode_applied_id` int(11) NOT NULL,
  `discount_amt` float NOT NULL,
  `total_amt_after_dis` float NOT NULL,
  `tax_amt` float NOT NULL,
  `final_invoice_amt` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product`
--

CREATE TABLE `tbl_product` (
  `id` int(11) NOT NULL,
  `prod_parent_id` int(11) NOT NULL,
  `prod_name` varchar(100) NOT NULL,
  `link` varchar(50) NOT NULL,
  `prod_available` tinyint(1) NOT NULL,
  `prod_launch_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_product`
--

INSERT INTO `tbl_product` (`id`, `prod_parent_id`, `prod_name`, `link`, `prod_available`, `prod_launch_date`) VALUES
(1, 0, 'Hosting', '', 1, '2020-12-09 14:34:49'),
(2, 1, 'CMS Hosting', 'cmshosting.php', 1, '2021-01-13 10:28:12'),
(3, 1, 'WordPress Hosting', 'wordpresshosting.php', 1, '2021-01-13 10:32:50'),
(4, 1, 'Mac Hosting', 'machosting.php', 1, '2021-01-13 10:33:56'),
(5, 1, 'Windows Hosting', 'windowshosting.php', 1, '2021-01-13 10:34:43'),
(59, 2, 'CMS Hosting Product1', 'abcd.php', 1, '2021-01-15 09:23:31'),
(60, 3, 'Wordpress Hosting Product1', 'abcd.php', 1, '2021-01-15 09:25:21'),
(61, 5, 'Window Hosting Product 1', 'abcd.php', 1, '2021-01-15 12:37:45'),
(62, 4, 'Mac Hosting Product1', 'abcd.php', 1, '2021-01-15 12:38:09'),
(63, 2, 'CMS Hosting Product 2', 'abcd.php', 1, '2021-01-15 15:56:32');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product_description`
--

CREATE TABLE `tbl_product_description` (
  `id` int(11) NOT NULL,
  `prod_id` int(11) NOT NULL,
  `description` text DEFAULT NULL,
  `mon_price` float NOT NULL,
  `annual_price` float NOT NULL,
  `sku` varchar(55) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_product_description`
--

INSERT INTO `tbl_product_description` (`id`, `prod_id`, `description`, `mon_price`, `annual_price`, `sku`) VALUES
(15, 59, '{\"webspace\":\"200\",\"bandwidth\":\"10\",\"freedomain\":\"50\",\"languagetechnology\":\"php\",\"mailbox\":\"0\"}', 500, 1000, '5cxdsbzhjbjwewq6q'),
(16, 60, '{\"webspace\":\"115\",\"bandwidth\":\"220\",\"freedomain\":\"50\",\"languagetechnology\":\"php,jquery\",\"mailbox\":\"0\"}', 500, 1000, '5656sasaksjahs'),
(17, 61, '{\"webspace\":\"50\",\"bandwidth\":\"80\",\"freedomain\":\"0\",\"languagetechnology\":\"php\",\"mailbox\":\"0\"}', 500, 1000, '5656sasaksjahs'),
(18, 62, '{\"webspace\":\"200\",\"bandwidth\":\"220\",\"freedomain\":\"50\",\"languagetechnology\":\"php\",\"mailbox\":\"0\"}', 100, 500, '5cxdsbzhjbjwewq6q'),
(19, 63, '{\"webspace\":\"50\",\"bandwidth\":\"220\",\"freedomain\":\"50\",\"languagetechnology\":\"php,jquery\",\"mailbox\":\"0\"}', 500, 1000, '5cxdsbzhjbjwewq6q');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_promocode`
--

CREATE TABLE `tbl_promocode` (
  `id` int(11) NOT NULL,
  `type` varchar(50) NOT NULL,
  `value` varchar(22) NOT NULL,
  `max_discount` int(11) NOT NULL,
  `code` varchar(55) NOT NULL,
  `expiry_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_services`
--

CREATE TABLE `tbl_services` (
  `id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `activation_time` datetime NOT NULL,
  `tenure` char(1) NOT NULL,
  `expiry_time` datetime NOT NULL,
  `prod_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_state`
--

CREATE TABLE `tbl_state` (
  `id` int(11) NOT NULL,
  `name` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `mobile` varchar(15) DEFAULT NULL,
  `email_approved` tinyint(1) DEFAULT 0,
  `phone_approved` tinyint(1) DEFAULT 0,
  `active` tinyint(1) NOT NULL DEFAULT 0,
  `is_admin` tinyint(1) NOT NULL,
  `sign_up_date` datetime DEFAULT current_timestamp(),
  `password` varchar(100) NOT NULL,
  `security_question` varchar(100) DEFAULT NULL,
  `security_answer` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id`, `email`, `name`, `mobile`, `email_approved`, `phone_approved`, `active`, `is_admin`, `sign_up_date`, `password`, `security_question`, `security_answer`) VALUES
(1, 'as608433@gmail.com', 'Amit Prajapati', '7895365428', 1, 1, 1, 0, '2021-01-12 13:50:43', '5cbcf07e36fe37142b407ace0211cbf7', 'how are you', 'fine'),
(2, 'dfdfd@gmail.com', 'Gaurav More', '', 1, 1, 1, 0, '2021-01-12 14:02:25', '42f749ade7f9e195bf475f37a44cafcb', 'What was your childhood nickname?', 'amit'),
(3, 'dfdfd1@gmail.com', 'Gaurav More', '1234569870', 1, 1, 1, 0, '2021-01-12 14:18:37', '42f749ade7f9e195bf475f37a44cafcb', 'What was your childhood nickname?', 'amit'),
(4, '1234sxsds5@gmail.com', 'Gaurav More', '9865320125', 1, 1, 1, 0, '2021-01-12 14:24:51', '42f749ade7f9e195bf475f37a44cafcb', 'What was your childhood nickname?', 'amit'),
(5, 'as60843swdsd3@gmail.com', 'Gaurav More', '2598635423', 1, 1, 1, 0, '2021-01-12 14:42:45', '42f749ade7f9e195bf475f37a44cafcb', 'What is the name of your favourite childhood friend?', 'sdds'),
(6, 'admin@gmail.com', 'Admin', '7897553455', 1, 1, 1, 1, '2021-01-12 14:45:38', '5cbcf07e36fe37142b407ace0211cbf7', NULL, NULL),
(7, 'as608343443@gmail.com', 'Gaurav More', '5898658752', 1, 1, 1, 0, '2021-01-12 15:43:30', '42f749ade7f9e195bf475f37a44cafcb', 'What was your favourite place to visit as a child?', 'amit'),
(9, '1234567@gmail.com', 'Gaurav', '7896325896', 1, 1, 1, 0, '2021-01-12 16:57:58', '5cbcf07e36fe37142b407ace0211cbf7', 'What is the name of your favourite childhood friend?', 'amit');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user_billing_add`
--

CREATE TABLE `tbl_user_billing_add` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `billing_name` varchar(55) NOT NULL,
  `house_no` varchar(55) NOT NULL,
  `city` varchar(55) NOT NULL,
  `state` int(11) NOT NULL,
  `country` varchar(55) NOT NULL,
  `pincode` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_blog`
--
ALTER TABLE `tbl_blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_company_info`
--
ALTER TABLE `tbl_company_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_orders`
--
ALTER TABLE `tbl_orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_product_description`
--
ALTER TABLE `tbl_product_description`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_promocode`
--
ALTER TABLE `tbl_promocode`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_services`
--
ALTER TABLE `tbl_services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_state`
--
ALTER TABLE `tbl_state`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_user_billing_add`
--
ALTER TABLE `tbl_user_billing_add`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_blog`
--
ALTER TABLE `tbl_blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_company_info`
--
ALTER TABLE `tbl_company_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_orders`
--
ALTER TABLE `tbl_orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_product`
--
ALTER TABLE `tbl_product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT for table `tbl_product_description`
--
ALTER TABLE `tbl_product_description`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `tbl_promocode`
--
ALTER TABLE `tbl_promocode`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_services`
--
ALTER TABLE `tbl_services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_state`
--
ALTER TABLE `tbl_state`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tbl_user_billing_add`
--
ALTER TABLE `tbl_user_billing_add`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
