-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 19, 2022 at 02:07 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `yourdoctor`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_advertisement_category`
--

CREATE TABLE `tbl_advertisement_category` (
  `adv_id` int(11) NOT NULL,
  `adv_photo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `adv_url` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_advertisement_category`
--

INSERT INTO `tbl_advertisement_category` (`adv_id`, `adv_photo`, `adv_url`) VALUES
(1, 'adv-category-1.png', ''),
(2, 'adv-category-2.png', ''),
(3, 'adv-category-3.png', ''),
(4, 'adv-category-4.png', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_advertisement_home`
--

CREATE TABLE `tbl_advertisement_home` (
  `adv_id` int(11) NOT NULL,
  `adv_location` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `adv_photo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `adv_url` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `adv_status` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_advertisement_home`
--

INSERT INTO `tbl_advertisement_home` (`adv_id`, `adv_location`, `adv_photo`, `adv_url`, `adv_status`) VALUES
(1, 'Header', 'adv-1.png', '', 'Show'),
(2, 'Under Featured News', 'adv-2.png', '#', 'Show');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_advertisement_sidebar`
--

CREATE TABLE `tbl_advertisement_sidebar` (
  `adv_id` int(11) NOT NULL,
  `adv_location` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `adv_photo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `adv_url` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_advertisement_sidebar`
--

INSERT INTO `tbl_advertisement_sidebar` (`adv_id`, `adv_location`, `adv_photo`, `adv_url`) VALUES
(4, 'Sidebar Top', 'advertisement-sidebar-4.png', ''),
(5, 'Sidebar Top', 'advertisement-sidebar-5.png', ''),
(6, 'Sidebar Bottom', 'advertisement-sidebar-6.png', ''),
(7, 'Sidebar Bottom', 'advertisement-sidebar-7.png', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_captcha`
--

CREATE TABLE `tbl_captcha` (
  `captcha_id` int(11) NOT NULL,
  `captcha_value1` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `captcha_value2` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `captcha_result` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `captcha_symbol` varchar(10) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_captcha`
--

INSERT INTO `tbl_captcha` (`captcha_id`, `captcha_value1`, `captcha_value2`, `captcha_result`, `captcha_symbol`) VALUES
(1, '20', '1', '19', '-'),
(2, '20', '2', '18', '-'),
(3, '20', '3', '17', '-'),
(4, '20', '4', '16', '-'),
(5, '20', '5', '15', '-'),
(6, '20', '6', '14', '-'),
(7, '20', '7', '13', '-'),
(8, '20', '8', '12', '-'),
(9, '20', '9', '11', '-'),
(10, '20', '10', '10', '-'),
(11, '20', '11', '9', '-'),
(12, '1', '1', '1', '*'),
(13, '1', '2', '2', '*'),
(14, '1', '3', '3', '*'),
(15, '1', '4', '4', '*'),
(16, '1', '5', '5', '*'),
(17, '1', '6', '6', '*'),
(18, '1', '7', '7', '*'),
(19, '1', '8', '8', '*'),
(20, '1', '9', '9', '*'),
(21, '1', '10', '10', '*'),
(22, '2', '2', '4', '*'),
(23, '2', '3', '6', '*'),
(24, '2', '4', '8', '*'),
(25, '2', '5', '10', '*'),
(26, '2', '6', '12', '*'),
(27, '2', '7', '14', '*'),
(28, '2', '8', '16', '*'),
(29, '2', '9', '18', '*'),
(30, '2', '10', '20', '*'),
(31, '3', '3', '9', '*'),
(32, '3', '4', '12', '*'),
(33, '3', '5', '15', '*'),
(34, '3', '6', '18', '*'),
(35, '3', '7', '21', '*'),
(36, '3', '8', '24', '*'),
(37, '3', '9', '27', '*'),
(38, '3', '10', '30', '*'),
(39, '4', '4', '16', '*'),
(40, '4', '5', '20', '*'),
(41, '4', '6', '24', '*'),
(42, '4', '7', '28', '*'),
(43, '4', '8', '32', '*'),
(44, '4', '9', '36', '*'),
(45, '4', '10', '40', '*'),
(46, '5', '5', '25', '*'),
(47, '5', '6', '30', '*'),
(48, '5', '7', '35', '*'),
(49, '5', '8', '40', '*'),
(50, '5', '9', '45', '*'),
(51, '5', '10', '50', '*'),
(52, '6', '6', '36', '*'),
(53, '6', '7', '42', '*'),
(54, '6', '8', '48', '*'),
(55, '6', '9', '54', '*'),
(56, '6', '10', '60', '*'),
(57, '7', '7', '49', '*'),
(58, '7', '8', '56', '*'),
(59, '7', '9', '63', '*'),
(60, '7', '10', '70', '*'),
(61, '8', '8', '64', '*'),
(62, '8', '9', '72', '*'),
(63, '8', '10', '80', '*'),
(64, '9', '9', '81', '*'),
(65, '9', '10', '90', '*'),
(66, '10', '10', '100', '*'),
(67, '1', '1', '2', '+'),
(68, '1', '2', '3', '+'),
(69, '1', '3', '4', '+'),
(70, '1', '4', '5', '+'),
(71, '1', '5', '6', '+'),
(72, '1', '6', '7', '+'),
(73, '1', '7', '8', '+'),
(74, '1', '8', '9', '+'),
(75, '1', '9', '10', '+'),
(76, '1', '10', '11', '+'),
(77, '2', '2', '4', '+'),
(78, '2', '3', '5', '+'),
(79, '2', '4', '6', '+'),
(80, '2', '5', '7', '+'),
(81, '2', '6', '8', '+'),
(82, '2', '7', '9', '+'),
(83, '2', '8', '10', '+'),
(84, '2', '9', '11', '+'),
(85, '2', '10', '12', '+'),
(86, '3', '3', '6', '+'),
(87, '3', '4', '7', '+'),
(88, '3', '5', '8', '+'),
(89, '3', '6', '9', '+'),
(90, '3', '7', '10', '+'),
(91, '3', '8', '11', '+'),
(92, '3', '9', '12', '+'),
(93, '3', '10', '13', '+'),
(94, '4', '4', '8', '+'),
(95, '4', '5', '9', '+'),
(96, '4', '6', '10', '+'),
(97, '4', '7', '11', '+'),
(98, '4', '8', '12', '+'),
(99, '4', '9', '13', '+'),
(100, '4', '10', '14', '+'),
(101, '5', '5', '10', '+'),
(102, '5', '6', '11', '+'),
(103, '5', '7', '12', '+'),
(104, '5', '8', '13', '+'),
(105, '5', '9', '14', '+'),
(106, '5', '10', '15', '+'),
(107, '6', '6', '12', '+'),
(108, '6', '7', '13', '+'),
(109, '6', '8', '14', '+'),
(110, '6', '9', '15', '+'),
(111, '6', '10', '16', '+'),
(112, '7', '7', '14', '+'),
(113, '7', '8', '15', '+'),
(114, '7', '9', '16', '+'),
(115, '7', '10', '17', '+'),
(116, '8', '8', '16', '+'),
(117, '8', '9', '17', '+'),
(118, '8', '10', '18', '+'),
(119, '9', '9', '18', '+'),
(120, '9', '10', '19', '+'),
(121, '10', '10', '20', '+'),
(122, '10', '1', '9', '-'),
(123, '10', '2', '8', '-'),
(124, '10', '3', '7', '-'),
(125, '10', '4', '6', '-'),
(126, '10', '5', '5', '-'),
(127, '10', '6', '4', '-'),
(128, '10', '7', '3', '-'),
(129, '10', '8', '2', '-'),
(130, '10', '9', '1', '-');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_category`
--

CREATE TABLE `tbl_category` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `category_slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `meta_title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `meta_keyword` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `meta_description` mediumtext COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_category`
--

INSERT INTO `tbl_category` (`category_id`, `category_name`, `category_slug`, `meta_title`, `meta_keyword`, `meta_description`) VALUES
(1, 'Blood / Hematology', 'blood-hematology', 'Category: Blood / Hematology', '', ''),
(2, 'Hypertension ', 'hypertension-', 'Category: Hypertension ', '', ''),
(3, 'Men\'s Health', 'men-s-health', 'Category: Men\'s Health', '', ''),
(4, 'Women\'s Health', 'women-s-health', 'Category: Women\'s Health', '', ''),
(5, 'Nutrition / Diet', 'nutrition-diet', 'Category: Nutrition / Diet', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_category_photo`
--

CREATE TABLE `tbl_category_photo` (
  `p_category_id` int(11) NOT NULL,
  `p_category_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(30) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_category_photo`
--

INSERT INTO `tbl_category_photo` (`p_category_id`, `p_category_name`, `status`) VALUES
(1, 'Medical Instruments', 'Active'),
(2, 'Doctor Examination', 'Active'),
(3, 'Hospital Operation', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_category_video`
--

CREATE TABLE `tbl_category_video` (
  `v_category_id` int(11) NOT NULL,
  `v_category_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(30) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_category_video`
--

INSERT INTO `tbl_category_video` (`v_category_id`, `v_category_name`, `status`) VALUES
(1, 'CT Scan', 'Active'),
(2, 'Biology', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_comment`
--

CREATE TABLE `tbl_comment` (
  `id` int(11) NOT NULL,
  `code_body` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `code_main` mediumtext COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_comment`
--

INSERT INTO `tbl_comment` (`id`, `code_body`, `code_main`) VALUES
(1, '<div id=\"fb-root\"></div>\r\n<script>(function(d, s, id) {\r\n  var js, fjs = d.getElementsByTagName(s)[0];\r\n  if (d.getElementById(id)) return;\r\n  js = d.createElement(s); js.id = id;\r\n  js.src = \"//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.10&appId=323620764400430\";\r\n  fjs.parentNode.insertBefore(js, fjs);\r\n}(document, \'script\', \'facebook-jssdk\'));</script>', '<div class=\"fb-comments\" data-href=\"https://developers.facebook.com/docs/plugins/comments#configurator\" data-numposts=\"5\"></div>');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_department`
--

CREATE TABLE `tbl_department` (
  `dep_id` int(11) NOT NULL,
  `dep_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `dep_slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `dep_detail` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `dep_address` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `dep_phone` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `dep_fax` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `dep_email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `dep_photo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `dep_banner` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `meta_title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `meta_keyword` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `meta_description` mediumtext COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_department`
--

INSERT INTO `tbl_department` (`dep_id`, `dep_name`, `dep_slug`, `dep_detail`, `dep_address`, `dep_phone`, `dep_fax`, `dep_email`, `dep_photo`, `dep_banner`, `meta_title`, `meta_keyword`, `meta_description`) VALUES
(1, 'Neurology', 'neurology', '<p>Enim venenatis nisl wisi quis, in wisi. Sollicitudin eget mollis accumsan, ut wisi maecenas tortor. Magna vehicula auctor lacus aliquam. Vehicula bibendum ut sed class erat, et et risus vel pede ac, purus orci. Nulla integer sed sem. Ut erat dolor lectus consectetuer, vel tincidunt integer duis euismod nunc, pede pede nec mauris in, vel sem fuga dis ligula. Ridiculus placerat, odio ut, mauris per vitae vehicula lorem sed vestibulum, nec fusce cras orci enim.</p>\r\n\r\n<p>At mi consectetuer. Mauris elementum a, ridiculus est leo adipiscing in commodo, dapibus tempus, mattis suspendisse, aliquam aliquam proin.</p>\r\n\r\n<p>Pellentesque nulla ut. Convallis eleifend ut est dui eros, porta enim odio luctus, sed orci nonummy tellus, wisi enim venenatis magnis, dolor nunc.</p>\r\n\r\n<p>Sociosqu at metus luctus feugiat integer, imperdiet auctor risus. Vel ultricies dis et at sodales. Massa id urna eros tempor. Fusce lobortis dolor viverra, tempor consequat nibh, eget faucibus sapien porttitor wisi, velit et. Sollicitudin consectetuer interdum gravida metus maecenas.</p>\r\n', '123 ABC Street, MN Lane, CA, USA', '111-222-3333', '111-222-4444', 'info@yourwebsite.com', 'department-1.jpg', 'department-banner-1.jpg', 'Neurology Department', 'Neurology Department, Neurology Doctor, Neurology Care, Neurology Consultant', ''),
(5, 'Dentistry', 'dentistry', '<p>Enim venenatis nisl wisi quis, in wisi. Sollicitudin eget mollis accumsan, ut wisi maecenas tortor. Magna vehicula auctor lacus aliquam. Vehicula bibendum ut sed class erat, et et risus vel pede ac, purus orci. Nulla integer sed sem. Ut erat dolor lectus consectetuer, vel tincidunt integer duis euismod nunc, pede pede nec mauris in, vel sem fuga dis ligula. Ridiculus placerat, odio ut, mauris per vitae vehicula lorem sed vestibulum, nec fusce cras orci enim.</p>\r\n\r\n<p>At mi consectetuer. Mauris elementum a, ridiculus est leo adipiscing in commodo, dapibus tempus, mattis suspendisse, aliquam aliquam proin.</p>\r\n\r\n<p>Pellentesque nulla ut. Convallis eleifend ut est dui eros, porta enim odio luctus, sed orci nonummy tellus, wisi enim venenatis magnis, dolor nunc.</p>\r\n\r\n<p>Sociosqu at metus luctus feugiat integer, imperdiet auctor risus. Vel ultricies dis et at sodales. Massa id urna eros tempor. Fusce lobortis dolor viverra, tempor consequat nibh, eget faucibus sapien porttitor wisi, velit et. Sollicitudin consectetuer interdum gravida metus maecenas.</p>\r\n', '123 ABC Street, MN Lane, CA, USA', '111-222-3333', '111-222-4444', 'info@yourwebsite.com', 'department-5.jpg', 'department-banner-5.jpg', 'Neurology Department', 'Neurology Department, Neurology Doctor, Neurology Care, Neurology Consultant', ''),
(6, 'Radiology', 'radiology', '<p>Enim venenatis nisl wisi quis, in wisi. Sollicitudin eget mollis accumsan, ut wisi maecenas tortor. Magna vehicula auctor lacus aliquam. Vehicula bibendum ut sed class erat, et et risus vel pede ac, purus orci. Nulla integer sed sem. Ut erat dolor lectus consectetuer, vel tincidunt integer duis euismod nunc, pede pede nec mauris in, vel sem fuga dis ligula. Ridiculus placerat, odio ut, mauris per vitae vehicula lorem sed vestibulum, nec fusce cras orci enim.</p>\r\n\r\n<p>At mi consectetuer. Mauris elementum a, ridiculus est leo adipiscing in commodo, dapibus tempus, mattis suspendisse, aliquam aliquam proin.</p>\r\n\r\n<p>Pellentesque nulla ut. Convallis eleifend ut est dui eros, porta enim odio luctus, sed orci nonummy tellus, wisi enim venenatis magnis, dolor nunc.</p>\r\n\r\n<p>Sociosqu at metus luctus feugiat integer, imperdiet auctor risus. Vel ultricies dis et at sodales. Massa id urna eros tempor. Fusce lobortis dolor viverra, tempor consequat nibh, eget faucibus sapien porttitor wisi, velit et. Sollicitudin consectetuer interdum gravida metus maecenas.</p>\r\n', '123 ABC Street, MN Lane, CA, USA', '111-222-3333', '111-222-4444', 'info@yourwebsite.com', 'department-6.jpg', 'department-banner-6.jpg', 'Radiology Department', 'Radiology Department Keywords', ''),
(7, 'Cardiology', 'cardiology', '<p>Enim venenatis nisl wisi quis, in wisi. Sollicitudin eget mollis accumsan, ut wisi maecenas tortor. Magna vehicula auctor lacus aliquam. Vehicula bibendum ut sed class erat, et et risus vel pede ac, purus orci. Nulla integer sed sem. Ut erat dolor lectus consectetuer, vel tincidunt integer duis euismod nunc, pede pede nec mauris in, vel sem fuga dis ligula. Ridiculus placerat, odio ut, mauris per vitae vehicula lorem sed vestibulum, nec fusce cras orci enim.</p>\r\n\r\n<p>At mi consectetuer. Mauris elementum a, ridiculus est leo adipiscing in commodo, dapibus tempus, mattis suspendisse, aliquam aliquam proin.</p>\r\n\r\n<p>Pellentesque nulla ut. Convallis eleifend ut est dui eros, porta enim odio luctus, sed orci nonummy tellus, wisi enim venenatis magnis, dolor nunc.</p>\r\n\r\n<p>Sociosqu at metus luctus feugiat integer, imperdiet auctor risus. Vel ultricies dis et at sodales. Massa id urna eros tempor. Fusce lobortis dolor viverra, tempor consequat nibh, eget faucibus sapien porttitor wisi, velit et. Sollicitudin consectetuer interdum gravida metus maecenas.</p>\r\n', '123 ABC Street, MN Lane, CA, USA', '111-222-3333', '111-222-4444', 'info@yourwebsite.com', 'department-7.jpg', 'department-banner-7.jpg', 'Cardiology Department', 'Cardiology Department Keywords', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_department_appointment`
--

CREATE TABLE `tbl_department_appointment` (
  `app_id` int(11) NOT NULL,
  `app_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `app_email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `app_phone` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `app_content` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `dep_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_department_faq`
--

CREATE TABLE `tbl_department_faq` (
  `fq_id` int(11) NOT NULL,
  `fq_title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `fq_content` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `dep_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_department_faq`
--

INSERT INTO `tbl_department_faq` (`fq_id`, `fq_title`, `fq_content`, `dep_id`) VALUES
(1, 'Where will you get doctors?', 'Khulna, Bangladesh', 1),
(5, 'Are this team members muslim?', 'Yes', 5),
(7, 'Do you follow islamic rules?', 'Yes', 5),
(8, 'Will you need to come to us everyday?', 'No man. It is not needed. But if you want you can visit and come to our office.\r\n\r\nWe arrange some lunch for our visitors who can become a client of us in future.', 1),
(9, 'How do I book an appointment?', 'You can easily book an appointment going to appointment form in the department details page.', 1),
(10, 'How do I book an appointment?', 'You can easily book an appointment going to appointment form in the department details page.', 5),
(11, 'What is a health plan?', 'The group of doctors, hospitals, and other providers who work together to give you the healthcare you need.', 6),
(12, 'What is a co-pay?', 'A co-pay is the money you pay at the time of services.', 6),
(13, 'Will I have a co-pay?', 'If you have a co-pay now, you may still have one.', 6),
(14, 'What if I have more questions?', 'If you have questions or need more information, you can call to our Client Enrollment Services at 123-456-7897', 6),
(15, 'What is a health plan?', 'The group of doctors, hospitals, and other providers who work together to give you the healthcare you need.', 7),
(16, 'What is a co-pay?', 'A co-pay is the money you pay at the time of services.', 7),
(17, 'Will I have a co-pay?', 'If you have a co-pay now, you may still have one.', 7),
(18, 'What if I have more questions?', 'If you have questions or need more information, you can call to our Client Enrollment Services at 123-456-7897', 7);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_department_openning_hour`
--

CREATE TABLE `tbl_department_openning_hour` (
  `oh_id` int(11) NOT NULL,
  `oh_day` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `oh_time` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `dep_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_department_openning_hour`
--

INSERT INTO `tbl_department_openning_hour` (`oh_id`, `oh_day`, `oh_time`, `dep_id`) VALUES
(9, 'Sat', '9:00 AM', 5),
(17, 'Monday', '8:00 AM - 10:00 PM', 1),
(18, 'Tuesday', '8:00 AM - 10:00 PM', 1),
(19, 'Wednesday', '8:00 AM - 10:00 PM', 1),
(20, 'Thursday', '8:00 AM - 10:00 PM', 1),
(21, 'Friday', '8:00 AM - 10:00 PM', 1),
(22, 'Saturday', '8:00 AM - 10:00 PM', 1),
(23, 'Sunday', 'Off', 1),
(24, 'Tuesday ', '8:00 AM - 10:00 PM', 5),
(25, 'Wednesday ', '8:00 AM - 10:00 PM', 5),
(26, 'Thursday ', '8:00 AM - 10:00 PM', 5),
(27, 'Friday ', '8:00 AM - 10:00 PM', 5),
(28, 'Saturday ', '8:00 AM - 10:00 PM', 5),
(29, 'Sunday ', 'Closed', 5),
(30, 'Monday', '8:00 AM - 10:00 PM', 6),
(31, 'Tuesday', '8:00 AM - 10:00 PM', 6),
(32, 'Wednesday', '8:00 AM - 10:00 PM', 6),
(33, 'Thursday', '8:00 AM - 10:00 PM', 6),
(34, 'Friday', '8:00 AM - 10:00 PM', 6),
(35, 'Saturday', '8:00 AM - 10:00 PM', 6),
(36, 'Sunday', 'Closed', 6),
(37, 'Monday', '8:00 AM - 10:00 PM', 7),
(38, 'Tuesday ', '8:00 AM - 10:00 PM', 7),
(39, 'Wednesday ', '8:00 AM - 10:00 PM', 7),
(40, 'Thursday ', '8:00 AM - 10:00 PM', 7),
(41, 'Friday ', '8:00 AM - 10:00 PM', 7),
(42, 'Saturday ', '8:00 AM - 10:00 PM', 7),
(43, 'Sunday', 'Closed', 7);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_designation`
--

CREATE TABLE `tbl_designation` (
  `designation_id` int(11) NOT NULL,
  `designation_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_designation`
--

INSERT INTO `tbl_designation` (`designation_id`, `designation_name`) VALUES
(2, 'Dental Surgeon'),
(3, 'Neurologist'),
(4, 'Neurosurgeon'),
(5, 'Cardiologist'),
(6, 'Gynecologist');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_doctor`
--

CREATE TABLE `tbl_doctor` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `designation_id` int(11) NOT NULL,
  `photo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `banner` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `degree` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `detail` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `facebook` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `twitter` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `linkedin` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `youtube` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `google_plus` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `instagram` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `flickr` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `address` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `practice_location` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `website` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `meta_title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `meta_keyword` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `meta_description` mediumtext COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_doctor`
--

INSERT INTO `tbl_doctor` (`id`, `name`, `slug`, `designation_id`, `photo`, `banner`, `degree`, `detail`, `facebook`, `twitter`, `linkedin`, `youtube`, `google_plus`, `instagram`, `flickr`, `address`, `practice_location`, `phone`, `email`, `website`, `status`, `meta_title`, `meta_keyword`, `meta_description`) VALUES
(1, 'Dr. Robin Cook', 'robin-cook', 2, 'doctor-1.jpg', 'doctor-banner-1.jpg', 'BDS in Dental', '<h2>About</h2>\r\n\r\n<p>Enim venenatis nisl wisi quis, in wisi. Sollicitudin eget mollis accumsan, ut wisi maecenas tortor. Magna vehicula auctor lacus aliquam. Vehicula bibendum ut sed class erat, et et risus vel pede ac, purus orci. Nulla integer sed sem. Ut erat dolor lectus consectetuer, vel tincidunt integer duis euismod nunc, pede pede nec mauris in, vel sem fuga dis ligula. Ridiculus placerat, odio ut, mauris per vitae vehicula lorem sed vestibulum, nec fusce cras orci enim.</p>\r\n\r\n<h2>Degree</h2>\r\n\r\n<p>At mi consectetuer. Mauris elementum a, ridiculus est leo adipiscing in commodo, dapibus tempus, mattis suspendisse, aliquam aliquam proin.</p>\r\n\r\n<h2>Education</h2>\r\n\r\n<p>Pellentesque nulla ut. Convallis eleifend ut est dui eros, porta enim odio luctus, sed orci nonummy tellus, wisi enim venenatis magnis, dolor nunc.</p>\r\n\r\n<h2>Experience</h2>\r\n\r\n<p>Sociosqu at metus luctus feugiat integer, imperdiet auctor risus. Vel ultricies dis et at sodales. Massa id urna eros tempor. Fusce lobortis dolor viverra, tempor consequat nibh, eget faucibus sapien porttitor wisi, velit et. Sollicitudin consectetuer interdum gravida metus maecenas.</p>\r\n', 'http://www.facebook.com', 'http://www.twitter.com', 'http://www.linkedin.com', '', '', '', '', 'Mattondanga, Ghilatola.', 'Fulbarigate, Khulna\r\n', '019', 'taslim.iqbal@gmail.com', 'http://www.drtaslim.com', 'Active', 'Title 1', 'Keyword 1', 'Description 1'),
(2, 'Dr. Erik Frank', 'dr-erik-frank', 5, 'doctor-2.jpg', 'doctor-banner-2.jpg', '', '<h2>About</h2>\r\n\r\n<p>Enim venenatis nisl wisi quis, in wisi. Sollicitudin eget mollis accumsan, ut wisi maecenas tortor. Magna vehicula auctor lacus aliquam. Vehicula bibendum ut sed class erat, et et risus vel pede ac, purus orci. Nulla integer sed sem. Ut erat dolor lectus consectetuer, vel tincidunt integer duis euismod nunc, pede pede nec mauris in, vel sem fuga dis ligula. Ridiculus placerat, odio ut, mauris per vitae vehicula lorem sed vestibulum, nec fusce cras orci enim.</p>\r\n\r\n<h2>Degree</h2>\r\n\r\n<p>At mi consectetuer. Mauris elementum a, ridiculus est leo adipiscing in commodo, dapibus tempus, mattis suspendisse, aliquam aliquam proin.</p>\r\n\r\n<h2>Education</h2>\r\n\r\n<p>Pellentesque nulla ut. Convallis eleifend ut est dui eros, porta enim odio luctus, sed orci nonummy tellus, wisi enim venenatis magnis, dolor nunc.</p>\r\n\r\n<h2>Experience</h2>\r\n\r\n<p>Sociosqu at metus luctus feugiat integer, imperdiet auctor risus. Vel ultricies dis et at sodales. Massa id urna eros tempor. Fusce lobortis dolor viverra, tempor consequat nibh, eget faucibus sapien porttitor wisi, velit et. Sollicitudin consectetuer interdum gravida metus maecenas.</p>\r\n', 'http://www.facebook.com', 'http://www.twitter.com', 'http://www.linkedin.com', '', '', '', '', '', '', '', '', '', 'Active', '', '', ''),
(3, 'Dr. Bob Smith', 'dr-bob-smith', 2, 'doctor-3.jpg', 'doctor-banner-3.jpg', '', '<h2>About</h2>\r\n\r\n<p>Enim venenatis nisl wisi quis, in wisi. Sollicitudin eget mollis accumsan, ut wisi maecenas tortor. Magna vehicula auctor lacus aliquam. Vehicula bibendum ut sed class erat, et et risus vel pede ac, purus orci. Nulla integer sed sem. Ut erat dolor lectus consectetuer, vel tincidunt integer duis euismod nunc, pede pede nec mauris in, vel sem fuga dis ligula. Ridiculus placerat, odio ut, mauris per vitae vehicula lorem sed vestibulum, nec fusce cras orci enim.</p>\r\n\r\n<h2>Degree</h2>\r\n\r\n<p>At mi consectetuer. Mauris elementum a, ridiculus est leo adipiscing in commodo, dapibus tempus, mattis suspendisse, aliquam aliquam proin.</p>\r\n\r\n<h2>Education</h2>\r\n\r\n<p>Pellentesque nulla ut. Convallis eleifend ut est dui eros, porta enim odio luctus, sed orci nonummy tellus, wisi enim venenatis magnis, dolor nunc.</p>\r\n\r\n<h2>Experience</h2>\r\n\r\n<p>Sociosqu at metus luctus feugiat integer, imperdiet auctor risus. Vel ultricies dis et at sodales. Massa id urna eros tempor. Fusce lobortis dolor viverra, tempor consequat nibh, eget faucibus sapien porttitor wisi, velit et. Sollicitudin consectetuer interdum gravida metus maecenas.</p>\r\n', 'http://www.facebook.com', 'http://www.twitter.com', 'http://www.linkedin.com', '', '', '', '', '', '', '', '', '', 'Active', '', '', ''),
(4, 'Dr. Patrick Smith', 'dr-patrick-smith', 4, 'doctor-4.jpg', 'doctor-banner-4.jpg', '', '<h2>About</h2>\r\n\r\n<p>Enim venenatis nisl wisi quis, in wisi. Sollicitudin eget mollis accumsan, ut wisi maecenas tortor. Magna vehicula auctor lacus aliquam. Vehicula bibendum ut sed class erat, et et risus vel pede ac, purus orci. Nulla integer sed sem. Ut erat dolor lectus consectetuer, vel tincidunt integer duis euismod nunc, pede pede nec mauris in, vel sem fuga dis ligula. Ridiculus placerat, odio ut, mauris per vitae vehicula lorem sed vestibulum, nec fusce cras orci enim.</p>\r\n\r\n<h2>Degree</h2>\r\n\r\n<p>At mi consectetuer. Mauris elementum a, ridiculus est leo adipiscing in commodo, dapibus tempus, mattis suspendisse, aliquam aliquam proin.</p>\r\n\r\n<h2>Education</h2>\r\n\r\n<p>Pellentesque nulla ut. Convallis eleifend ut est dui eros, porta enim odio luctus, sed orci nonummy tellus, wisi enim venenatis magnis, dolor nunc.</p>\r\n\r\n<h2>Experience</h2>\r\n\r\n<p>Sociosqu at metus luctus feugiat integer, imperdiet auctor risus. Vel ultricies dis et at sodales. Massa id urna eros tempor. Fusce lobortis dolor viverra, tempor consequat nibh, eget faucibus sapien porttitor wisi, velit et. Sollicitudin consectetuer interdum gravida metus maecenas.</p>\r\n', 'http://www.facebook.com', 'http://www.twitter.com', 'http://www.linkedin.com', '', '', '', '', '', '', '', '', '', 'Active', '', '', ''),
(5, 'Emily Scott', 'emily-scott', 6, 'doctor-5.jpg', 'doctor-banner-5.jpg', '', '<h2>About</h2>\r\n\r\n<p>Enim venenatis nisl wisi quis, in wisi. Sollicitudin eget mollis accumsan, ut wisi maecenas tortor. Magna vehicula auctor lacus aliquam. Vehicula bibendum ut sed class erat, et et risus vel pede ac, purus orci. Nulla integer sed sem. Ut erat dolor lectus consectetuer, vel tincidunt integer duis euismod nunc, pede pede nec mauris in, vel sem fuga dis ligula. Ridiculus placerat, odio ut, mauris per vitae vehicula lorem sed vestibulum, nec fusce cras orci enim.</p>\r\n\r\n<h2>Degree</h2>\r\n\r\n<p>At mi consectetuer. Mauris elementum a, ridiculus est leo adipiscing in commodo, dapibus tempus, mattis suspendisse, aliquam aliquam proin.</p>\r\n\r\n<h2>Education</h2>\r\n\r\n<p>Pellentesque nulla ut. Convallis eleifend ut est dui eros, porta enim odio luctus, sed orci nonummy tellus, wisi enim venenatis magnis, dolor nunc.</p>\r\n\r\n<h2>Experience</h2>\r\n\r\n<p>Sociosqu at metus luctus feugiat integer, imperdiet auctor risus. Vel ultricies dis et at sodales. Massa id urna eros tempor. Fusce lobortis dolor viverra, tempor consequat nibh, eget faucibus sapien porttitor wisi, velit et. Sollicitudin consectetuer interdum gravida metus maecenas.</p>\r\n', 'http://www.facebook.com', 'http://www.twitter.com', 'http://www.linkedin.com', '', '', '', '', '', '', '', '', '', 'Active', '', '', ''),
(6, 'Dr. Amanda Bryan', 'dr-amanda-bryan', 6, 'doctor-6.jpg', 'doctor-banner-6.jpg', 'MBBS', '<h2 style=\"color: rgb(0, 0, 0);\">About</h2><p>Enim venenatis nisl wisi quis, in wisi. Sollicitudin eget mollis accumsan, ut wisi maecenas tortor. Magna vehicula auctor lacus aliquam. Vehicula bibendum ut sed class erat, et et risus vel pede ac, purus orci. Nulla integer sed sem. Ut erat dolor lectus consectetuer, vel tincidunt integer duis euismod nunc, pede pede nec mauris in, vel sem fuga dis ligula. Ridiculus placerat, odio ut, mauris per vitae vehicula lorem sed vestibulum, nec fusce cras orci enim.</p><h2 style=\"color: rgb(0, 0, 0);\">Degree</h2><p>At mi consectetuer. Mauris elementum a, ridiculus est leo adipiscing in commodo, dapibus tempus, mattis suspendisse, aliquam aliquam proin.</p><h2 style=\"color: rgb(0, 0, 0);\">Education</h2><p>Pellentesque nulla ut. Convallis eleifend ut est dui eros, porta enim odio luctus, sed orci nonummy tellus, wisi enim venenatis magnis, dolor nunc.</p><h2 style=\"color: rgb(0, 0, 0);\">Experience</h2><p>Sociosqu at metus luctus feugiat integer, imperdiet auctor risus. Vel ultricies dis et at sodales. Massa id urna eros tempor. Fusce lobortis dolor viverra, tempor consequat nibh, eget faucibus sapien porttitor wisi, velit et. Sollicitudin consectetuer interdum gravida metus maecenas.</p>', 'http://www.facebook.com', 'http://www.twitter.com', 'http://www.linkedin.com', '', '', '', '', '', '', '', '', '', 'Active', '', '', ''),
(7, 'Dr. Arun Prasad', 'dr-arun-prasad', 3, 'doctor-7.jpg', 'doctor-banner-7.jpg', 'MBBS', '<h2 style=\"color: rgb(0, 0, 0);\">About</h2><p>Enim venenatis nisl wisi quis, in wisi. Sollicitudin eget mollis accumsan, ut wisi maecenas tortor. Magna vehicula auctor lacus aliquam. Vehicula bibendum ut sed class erat, et et risus vel pede ac, purus orci. Nulla integer sed sem. Ut erat dolor lectus consectetuer, vel tincidunt integer duis euismod nunc, pede pede nec mauris in, vel sem fuga dis ligula. Ridiculus placerat, odio ut, mauris per vitae vehicula lorem sed vestibulum, nec fusce cras orci enim.</p><h2 style=\"color: rgb(0, 0, 0);\">Degree</h2><p>At mi consectetuer. Mauris elementum a, ridiculus est leo adipiscing in commodo, dapibus tempus, mattis suspendisse, aliquam aliquam proin.</p><h2 style=\"color: rgb(0, 0, 0);\">Education</h2><p>Pellentesque nulla ut. Convallis eleifend ut est dui eros, porta enim odio luctus, sed orci nonummy tellus, wisi enim venenatis magnis, dolor nunc.</p><h2 style=\"color: rgb(0, 0, 0);\">Experience</h2><p>Sociosqu at metus luctus feugiat integer, imperdiet auctor risus. Vel ultricies dis et at sodales. Massa id urna eros tempor. Fusce lobortis dolor viverra, tempor consequat nibh, eget faucibus sapien porttitor wisi, velit et. Sollicitudin consectetuer interdum gravida metus maecenas.</p>', 'http://www.facebook.com', 'http://www.twitter.com', 'http://www.linkedin.com', '', '', '', '', '', '', '', '', '', 'Active', '', '', ''),
(8, 'Dr. William Ray', 'dr-william-ray', 5, 'doctor-8.jpg', 'doctor-banner-8.jpg', 'MBBS', '<h2 style=\"color: rgb(0, 0, 0);\">About</h2><p>Enim venenatis nisl wisi quis, in wisi. Sollicitudin eget mollis accumsan, ut wisi maecenas tortor. Magna vehicula auctor lacus aliquam. Vehicula bibendum ut sed class erat, et et risus vel pede ac, purus orci. Nulla integer sed sem. Ut erat dolor lectus consectetuer, vel tincidunt integer duis euismod nunc, pede pede nec mauris in, vel sem fuga dis ligula. Ridiculus placerat, odio ut, mauris per vitae vehicula lorem sed vestibulum, nec fusce cras orci enim.</p><h2 style=\"color: rgb(0, 0, 0);\">Degree</h2><p>At mi consectetuer. Mauris elementum a, ridiculus est leo adipiscing in commodo, dapibus tempus, mattis suspendisse, aliquam aliquam proin.</p><h2 style=\"color: rgb(0, 0, 0);\">Education</h2><p>Pellentesque nulla ut. Convallis eleifend ut est dui eros, porta enim odio luctus, sed orci nonummy tellus, wisi enim venenatis magnis, dolor nunc.</p><h2 style=\"color: rgb(0, 0, 0);\">Experience</h2><p>Sociosqu at metus luctus feugiat integer, imperdiet auctor risus. Vel ultricies dis et at sodales. Massa id urna eros tempor. Fusce lobortis dolor viverra, tempor consequat nibh, eget faucibus sapien porttitor wisi, velit et. Sollicitudin consectetuer interdum gravida metus maecenas.</p>', 'http://www.facebook.com', 'http://www.twitter.com', 'http://www.linkedin.com', '', '', '', '', '', '', '', '', '', 'Active', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_faq`
--

CREATE TABLE `tbl_faq` (
  `faq_id` int(11) NOT NULL,
  `faq_title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `faq_content` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `faq_category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_faq`
--

INSERT INTO `tbl_faq` (`faq_id`, `faq_title`, `faq_content`, `faq_category_id`) VALUES
(1, 'How can I find the rules that apply to me?', '<ul>\r\n	<li>Most of the definitions are in OAR 333-008-0010.</li>\r\n	<li>Rules that apply to patients and caregivers can be found mainly in OAR 333-008-0020 to 333-008-0080.</li>\r\n	<li>Rules that apply to growers and grow sites can be found mainly in OAR 333-008-0033, 333-008-0037, â€‹333-008-0047, 333-008-0500 to 333-008-0640.</li>\r\n	<li>Rules that apply to dispensaries are OAR 333-008-1000 to 333-008-1248 and 333-008-2000 to 333-008-2200.</li>\r\n	<li>Rules that apply to processors are OAR 333-008-1600 to 333-008-2200.</li>\r\n	<li>Labeling rules can be found in OAR 333-007-0010 to 333-007-0100.</li>\r\n	<li>Concentration and serving size limits can be found in OAR 333-007-0200 to 333-007-0220.</li>\r\n	<li>Cannabis testing requirements can be found in OAR 333-007-0300 to 333-007-0490.</li>\r\n	<li>Accreditation of laboratories can be found in OAR 333-064-0100 to 333-064-0110.</li>\r\n</ul>\r\n', 1),
(2, 'How do I find out about rulemaking, rule changes and other updates regarding the medical marijuana program?', '<p>Individuals can subscribe&nbsp;to receive email updates related to medical marijuana.</p>\r\n', 1),
(3, 'Who can get a medical marijuana card?', '<p>Individuals with a qualifying medical condition and a recommendation for medical marijuana from an attending physician may apply for a medical marijuana card.</p>\r\n', 2),
(4, 'How do I apply for a card?', '<p>Visit our New Patients page to learn how to apply for a medical marijuana card.</p>\r\n', 2),
(5, 'How long does it take to get a card?', '<p>If, upon an initial review, it appears that a complete application has been received, the patient will be issued a receipt letter. This receipt has the same legal effect as a registry identification card for 30 days following the date printed on the letter. Once your application is finished being processed, a card will be mailed to you.</p>\r\n\r\n<p>If your application is NOT complete, OMMP staff will send you an &quot;Incomplete Letter&quot; to let you know what needs to be submitted to complete your application. You will have 14 days from the date of the letter to get the missing application materials to OMMP. If the missing application materials are not submitted within the 14 days, your application may be rejected.</p>\r\n', 2),
(6, 'What are the system requirements of the Medical Masterclass website?', '<p>The Medical Masterclass website is designed to function on Internet Explorer 9 and above. If you are using an older browser version, you will need to upgrade Internet Explorer to a newer version.</p>\r\n', 3),
(7, 'I cannot log in to my Medical Masterclass website subscription. Why?', '<p><strong>CHECK YOUR PASSWORD</strong></p>\r\n\r\n<p>Are you using the correct password? If you wish to reset your password, you can do so by clicking the &quot;Forgot password&quot; link on the login page. This will delete the old password and a new one will be sent by email.</p>\r\n\r\n<p>(If your browser has been set up to store login details, please make sure you clear any previously remembered passwords - i.e. if the username/password is already filled in on the login page, please delete these details and re-type).</p>\r\n\r\n<p>NB If you incorrectly type your password too many times consecutively the account will be locked. See &quot;This account is locked&quot; below.</p>\r\n\r\n<p>IF YOU ARE USING THE CORRECT PASSWORD</p>\r\n\r\n<p>Authentication requires a &lsquo;cookie&rsquo; to be sent to the user&rsquo;s web browser (These are small text files temporarily stored by your web browser which enable us to identify you when you are logged in.) If cookies are disallowed then the screen will return to the login page immediately after entering the username and password.</p>\r\n\r\n<p>Instructions for allowing these in Internet Explorer are provided below:</p>\r\n\r\n<ol>\r\n	<li>Click &#39;Tools&#39;, &#39;Internet Options&#39;, and click the &#39;Privacy&#39; tab.</li>\r\n	<li>Under &#39;Websites - to override cookie handling for individual websites...&#39; click &#39;Edit&#39;,</li>\r\n	<li>Under &#39;Add Address of website&#39; type &quot;medical-masterclass.com&quot; and click &#39;Allow&#39;</li>\r\n	<li>Click &#39;OK&#39; to close this window</li>\r\n	<li>Click &#39;OK&#39; to close the Internet Options window</li>\r\n</ol>\r\n\r\n<p>If you are not using Internet Explorer or are having difficulties, please check your browser&#39;s Help files or contact your IT department/vendor.</p>\r\n\r\n<p>If you are using a product that could block cookies, e.g. Norton Internet Security, or Norton Firewall, please follow any instructions for allowing them for &quot;medical-masterclass.com&quot;.</p>\r\n', 3),
(8, 'What is the average usersâ€™ score?', '<p>The system requires you to have Adobe Flash 8 (or greater) installed. If you do not have this installed, you will see a link offering to install it for you.</p>\r\n\r\n<p>Should you find the presentation plays but it stops and starts it may be because your internet connection speed is insufficient. We recommend a connection of at least 1Mb. Also, depending on your situation, you may find other factors such as time of day affect your experience.</p>\r\n\r\n<p>iPhone / iPad &ndash; at the present time the Apple iPhone / iPad does not support Flash and we are therefore unable to offer the PACES screencasts to iPhone / iPad users.</p>\r\n', 3);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_faq_category`
--

CREATE TABLE `tbl_faq_category` (
  `faq_category_id` int(11) NOT NULL,
  `faq_category_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_faq_category`
--

INSERT INTO `tbl_faq_category` (`faq_category_id`, `faq_category_name`) VALUES
(1, 'General Questions'),
(2, 'Patients Query'),
(3, 'Technical Questions');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_file`
--

CREATE TABLE `tbl_file` (
  `file_id` int(11) NOT NULL,
  `file_title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `file_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_home_category`
--

CREATE TABLE `tbl_home_category` (
  `id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `category_order` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `category_layout` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_home_category`
--

INSERT INTO `tbl_home_category` (`id`, `category_id`, `category_order`, `category_layout`) VALUES
(14, 16, '2', '2 Columns (6 posts)'),
(15, 17, '', ''),
(16, 18, '', ''),
(17, 19, '1', '2 Columns (6 posts)'),
(18, 20, '4', '2 Columns (6 posts)'),
(19, 21, '3', '2 Columns (6 posts)'),
(20, 22, '', ''),
(21, 23, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_menu`
--

CREATE TABLE `tbl_menu` (
  `menu_id` int(11) NOT NULL,
  `menu_type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `page_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `menu_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `menu_url` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `menu_order` int(11) NOT NULL,
  `menu_parent` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_menu`
--

INSERT INTO `tbl_menu` (`menu_id`, `menu_type`, `page_id`, `category_id`, `menu_name`, `menu_url`, `menu_order`, `menu_parent`) VALUES
(2, 'Other', 0, 0, 'PAGES', '', 2, 0),
(3, 'Page', 1, 0, '', '', 1, 2),
(4, 'Page', 7, 0, '', '', 2, 2),
(5, 'Other', 0, 0, 'GALLERY', '', 3, 0),
(6, 'Page', 5, 0, '', '', 1, 5),
(7, 'Page', 6, 0, '', '', 2, 5),
(8, 'Page', 8, 0, '', '', 4, 0),
(9, 'Page', 9, 0, '', '', 5, 0),
(10, 'Page', 2, 0, '', '', 6, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_menu_home`
--

CREATE TABLE `tbl_menu_home` (
  `id` int(11) NOT NULL,
  `home_menu_name` text COLLATE utf8_unicode_ci NOT NULL,
  `home_menu_status` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_menu_home`
--

INSERT INTO `tbl_menu_home` (`id`, `home_menu_name`, `home_menu_status`) VALUES
(1, 'Home', 'Show');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_news`
--

CREATE TABLE `tbl_news` (
  `news_id` int(11) NOT NULL,
  `news_title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `news_slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `news_content` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `news_date` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `photo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `category_id` int(11) NOT NULL,
  `publisher` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `total_view` int(11) NOT NULL,
  `meta_title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `meta_keyword` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `meta_description` mediumtext COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_news`
--

INSERT INTO `tbl_news` (`news_id`, `news_title`, `news_slug`, `news_content`, `news_date`, `photo`, `category_id`, `publisher`, `total_view`, `meta_title`, `meta_keyword`, `meta_description`) VALUES
(1, 'Donating plasma: What are the side effects and risks?', 'donating-plasma-what-are-the-side-effects-and-risks-', '<p>Lorem ipsum dolor sit amet, qui case probo velit no, an postea scaevola partiendo mei. Id mea fuisset perpetua referrentur. Ut everti ceteros mei, alii discere eum no, duo id malis iuvaret. Ad sint everti accusam vel, ea viderer suscipiantur pri. Brute option minimum in cum, ignota iuvaret an pro.</p>\r\n\r\n<p>Solum atqui intellegebat mea an. Ne ius alterum aliquam. Ea nec populo aliquid mentitum, vis in meliore atomorum, sanctus consequat vituperatoribus duo ea. Ad doctus pertinacia ius, virtute fuisset id has, eum ut modo principes. Qui eu labore adversarium, oporteat delicata qui ut, an qui meliore principes. Id aliquid dolorum nam.</p>\r\n\r\n<p>Reque pericula philosophia ut mei, volumus eligendi mandamus has an. In nobis consulatu pri, has at timeam scaevola, has simul quaeque et. Te nec sale accumsan. Dolorem prodesset efficiendi sea ea.</p>\r\n\r\n<p>Et habeo modus debitis pri, vel quis fierent albucius ne. Ea animal meliore usu, nec etiam dolorum atomorum at, nam in audire mandamus omittantur. Cu ius dicam officiis molestiae, mea volumus officiis cotidieque no. Ut vel possim interpretaris, idque probatus antiopam has ad. Facilisi qualisque te sea, no dolorum mnesarchum usu.</p>\r\n\r\n<p>Eum tota graeci impetus an, eirmod invenire rationibus ne mel. Ignota habemus eum ex, vis omnesque delicata perpetua an. Sit id modo invidunt sapientem, ne eum vocibus dolores phaedrum. Case praesent appellantur eu per.</p>\r\n', '05-09-2017', 'news-1.jpg', 1, 'John Doe', 19, 'Donating plasma: What are the side effects and risks?', '', ''),
(2, 'Fasting before a blood test: What you need to know', 'fasting-before-a-blood-test-what-you-need-to-know', '<p>Lorem ipsum dolor sit amet, qui case probo velit no, an postea scaevola partiendo mei. Id mea fuisset perpetua referrentur. Ut everti ceteros mei, alii discere eum no, duo id malis iuvaret. Ad sint everti accusam vel, ea viderer suscipiantur pri. Brute option minimum in cum, ignota iuvaret an pro.</p>\r\n\r\n<p>Solum atqui intellegebat mea an. Ne ius alterum aliquam. Ea nec populo aliquid mentitum, vis in meliore atomorum, sanctus consequat vituperatoribus duo ea. Ad doctus pertinacia ius, virtute fuisset id has, eum ut modo principes. Qui eu labore adversarium, oporteat delicata qui ut, an qui meliore principes. Id aliquid dolorum nam.</p>\r\n\r\n<p>Reque pericula philosophia ut mei, volumus eligendi mandamus has an. In nobis consulatu pri, has at timeam scaevola, has simul quaeque et. Te nec sale accumsan. Dolorem prodesset efficiendi sea ea.</p>\r\n\r\n<p>Et habeo modus debitis pri, vel quis fierent albucius ne. Ea animal meliore usu, nec etiam dolorum atomorum at, nam in audire mandamus omittantur. Cu ius dicam officiis molestiae, mea volumus officiis cotidieque no. Ut vel possim interpretaris, idque probatus antiopam has ad. Facilisi qualisque te sea, no dolorum mnesarchum usu.</p>\r\n\r\n<p>Eum tota graeci impetus an, eirmod invenire rationibus ne mel. Ignota habemus eum ex, vis omnesque delicata perpetua an. Sit id modo invidunt sapientem, ne eum vocibus dolores phaedrum. Case praesent appellantur eu per.</p>\r\n', '05-09-2017', 'news-2.jpg', 1, 'John Doe', 1, 'Fasting before a blood test: What you need to know', '', ''),
(3, 'Diabetes and hypertension: What is the relationship?', 'diabetes-and-hypertension-what-is-the-relationship-', '<p>Lorem ipsum dolor sit amet, qui case probo velit no, an postea scaevola partiendo mei. Id mea fuisset perpetua referrentur. Ut everti ceteros mei, alii discere eum no, duo id malis iuvaret. Ad sint everti accusam vel, ea viderer suscipiantur pri. Brute option minimum in cum, ignota iuvaret an pro.</p>\r\n\r\n<p>Solum atqui intellegebat mea an. Ne ius alterum aliquam. Ea nec populo aliquid mentitum, vis in meliore atomorum, sanctus consequat vituperatoribus duo ea. Ad doctus pertinacia ius, virtute fuisset id has, eum ut modo principes. Qui eu labore adversarium, oporteat delicata qui ut, an qui meliore principes. Id aliquid dolorum nam.</p>\r\n\r\n<p>Reque pericula philosophia ut mei, volumus eligendi mandamus has an. In nobis consulatu pri, has at timeam scaevola, has simul quaeque et. Te nec sale accumsan. Dolorem prodesset efficiendi sea ea.</p>\r\n\r\n<p>Et habeo modus debitis pri, vel quis fierent albucius ne. Ea animal meliore usu, nec etiam dolorum atomorum at, nam in audire mandamus omittantur. Cu ius dicam officiis molestiae, mea volumus officiis cotidieque no. Ut vel possim interpretaris, idque probatus antiopam has ad. Facilisi qualisque te sea, no dolorum mnesarchum usu.</p>\r\n\r\n<p>Eum tota graeci impetus an, eirmod invenire rationibus ne mel. Ignota habemus eum ex, vis omnesque delicata perpetua an. Sit id modo invidunt sapientem, ne eum vocibus dolores phaedrum. Case praesent appellantur eu per.</p>\r\n', '05-09-2017', 'news-3.jpg', 2, 'John Doe', 0, 'Diabetes and hypertension: What is the relationship?', '', ''),
(4, 'Seven Natural Diuretics to Eat and Drink', 'seven-natural-diuretics-to-eat-and-drink', '<p>Lorem ipsum dolor sit amet, qui case probo velit no, an postea scaevola partiendo mei. Id mea fuisset perpetua referrentur. Ut everti ceteros mei, alii discere eum no, duo id malis iuvaret. Ad sint everti accusam vel, ea viderer suscipiantur pri. Brute option minimum in cum, ignota iuvaret an pro.</p>\r\n\r\n<p>Solum atqui intellegebat mea an. Ne ius alterum aliquam. Ea nec populo aliquid mentitum, vis in meliore atomorum, sanctus consequat vituperatoribus duo ea. Ad doctus pertinacia ius, virtute fuisset id has, eum ut modo principes. Qui eu labore adversarium, oporteat delicata qui ut, an qui meliore principes. Id aliquid dolorum nam.</p>\r\n\r\n<p>Reque pericula philosophia ut mei, volumus eligendi mandamus has an. In nobis consulatu pri, has at timeam scaevola, has simul quaeque et. Te nec sale accumsan. Dolorem prodesset efficiendi sea ea.</p>\r\n\r\n<p>Et habeo modus debitis pri, vel quis fierent albucius ne. Ea animal meliore usu, nec etiam dolorum atomorum at, nam in audire mandamus omittantur. Cu ius dicam officiis molestiae, mea volumus officiis cotidieque no. Ut vel possim interpretaris, idque probatus antiopam has ad. Facilisi qualisque te sea, no dolorum mnesarchum usu.</p>\r\n\r\n<p>Eum tota graeci impetus an, eirmod invenire rationibus ne mel. Ignota habemus eum ex, vis omnesque delicata perpetua an. Sit id modo invidunt sapientem, ne eum vocibus dolores phaedrum. Case praesent appellantur eu per.</p>\r\n', '05-09-2017', 'news-4.jpg', 2, 'John Doe', 0, 'Seven Natural Diuretics to Eat and Drink', '', ''),
(5, 'Sperm morphology: Tests and results', 'sperm-morphology-tests-and-results', '<p>Lorem ipsum dolor sit amet, qui case probo velit no, an postea scaevola partiendo mei. Id mea fuisset perpetua referrentur. Ut everti ceteros mei, alii discere eum no, duo id malis iuvaret. Ad sint everti accusam vel, ea viderer suscipiantur pri. Brute option minimum in cum, ignota iuvaret an pro.</p>\r\n\r\n<p>Solum atqui intellegebat mea an. Ne ius alterum aliquam. Ea nec populo aliquid mentitum, vis in meliore atomorum, sanctus consequat vituperatoribus duo ea. Ad doctus pertinacia ius, virtute fuisset id has, eum ut modo principes. Qui eu labore adversarium, oporteat delicata qui ut, an qui meliore principes. Id aliquid dolorum nam.</p>\r\n\r\n<p>Reque pericula philosophia ut mei, volumus eligendi mandamus has an. In nobis consulatu pri, has at timeam scaevola, has simul quaeque et. Te nec sale accumsan. Dolorem prodesset efficiendi sea ea.</p>\r\n\r\n<p>Et habeo modus debitis pri, vel quis fierent albucius ne. Ea animal meliore usu, nec etiam dolorum atomorum at, nam in audire mandamus omittantur. Cu ius dicam officiis molestiae, mea volumus officiis cotidieque no. Ut vel possim interpretaris, idque probatus antiopam has ad. Facilisi qualisque te sea, no dolorum mnesarchum usu.</p>\r\n\r\n<p>Eum tota graeci impetus an, eirmod invenire rationibus ne mel. Ignota habemus eum ex, vis omnesque delicata perpetua an. Sit id modo invidunt sapientem, ne eum vocibus dolores phaedrum. Case praesent appellantur eu per.</p>\r\n', '05-09-2017', 'news-5.jpg', 3, 'John Doe', 23, 'Sperm morphology: Tests and results', '', ''),
(6, 'What causes testicle itch? Seven possible causes', 'what-causes-testicle-itch-seven-possible-causes', '<p>Lorem ipsum dolor sit amet, qui case probo velit no, an postea scaevola partiendo mei. Id mea fuisset perpetua referrentur. Ut everti ceteros mei, alii discere eum no, duo id malis iuvaret. Ad sint everti accusam vel, ea viderer suscipiantur pri. Brute option minimum in cum, ignota iuvaret an pro.</p>\r\n\r\n<p>Solum atqui intellegebat mea an. Ne ius alterum aliquam. Ea nec populo aliquid mentitum, vis in meliore atomorum, sanctus consequat vituperatoribus duo ea. Ad doctus pertinacia ius, virtute fuisset id has, eum ut modo principes. Qui eu labore adversarium, oporteat delicata qui ut, an qui meliore principes. Id aliquid dolorum nam.</p>\r\n\r\n<p>Reque pericula philosophia ut mei, volumus eligendi mandamus has an. In nobis consulatu pri, has at timeam scaevola, has simul quaeque et. Te nec sale accumsan. Dolorem prodesset efficiendi sea ea.</p>\r\n\r\n<p>Et habeo modus debitis pri, vel quis fierent albucius ne. Ea animal meliore usu, nec etiam dolorum atomorum at, nam in audire mandamus omittantur. Cu ius dicam officiis molestiae, mea volumus officiis cotidieque no. Ut vel possim interpretaris, idque probatus antiopam has ad. Facilisi qualisque te sea, no dolorum mnesarchum usu.</p>\r\n\r\n<p>Eum tota graeci impetus an, eirmod invenire rationibus ne mel. Ignota habemus eum ex, vis omnesque delicata perpetua an. Sit id modo invidunt sapientem, ne eum vocibus dolores phaedrum. Case praesent appellantur eu per.</p>\r\n', '05-09-2017', 'news-6.jpg', 3, 'John Doe', 0, 'What causes testicle itch? Seven possible causes', '', ''),
(7, 'Vulvitis: Causes, symptoms, and treatment', 'vulvitis-causes-symptoms-and-treatment', '<p>Lorem ipsum dolor sit amet, qui case probo velit no, an postea scaevola partiendo mei. Id mea fuisset perpetua referrentur. Ut everti ceteros mei, alii discere eum no, duo id malis iuvaret. Ad sint everti accusam vel, ea viderer suscipiantur pri. Brute option minimum in cum, ignota iuvaret an pro.</p>\r\n\r\n<p>Solum atqui intellegebat mea an. Ne ius alterum aliquam. Ea nec populo aliquid mentitum, vis in meliore atomorum, sanctus consequat vituperatoribus duo ea. Ad doctus pertinacia ius, virtute fuisset id has, eum ut modo principes. Qui eu labore adversarium, oporteat delicata qui ut, an qui meliore principes. Id aliquid dolorum nam.</p>\r\n\r\n<p>Reque pericula philosophia ut mei, volumus eligendi mandamus has an. In nobis consulatu pri, has at timeam scaevola, has simul quaeque et. Te nec sale accumsan. Dolorem prodesset efficiendi sea ea.</p>\r\n\r\n<p>Et habeo modus debitis pri, vel quis fierent albucius ne. Ea animal meliore usu, nec etiam dolorum atomorum at, nam in audire mandamus omittantur. Cu ius dicam officiis molestiae, mea volumus officiis cotidieque no. Ut vel possim interpretaris, idque probatus antiopam has ad. Facilisi qualisque te sea, no dolorum mnesarchum usu.</p>\r\n\r\n<p>Eum tota graeci impetus an, eirmod invenire rationibus ne mel. Ignota habemus eum ex, vis omnesque delicata perpetua an. Sit id modo invidunt sapientem, ne eum vocibus dolores phaedrum. Case praesent appellantur eu per.</p>\r\n', '05-09-2017', 'news-7.jpg', 4, 'John Doe', 0, 'Vulvitis: Causes, symptoms, and treatment', '', ''),
(8, 'Insomnia: Like mother, like child?', 'insomnia-like-mother-like-child-', '<p>Lorem ipsum dolor sit amet, qui case probo velit no, an postea scaevola partiendo mei. Id mea fuisset perpetua referrentur. Ut everti ceteros mei, alii discere eum no, duo id malis iuvaret. Ad sint everti accusam vel, ea viderer suscipiantur pri. Brute option minimum in cum, ignota iuvaret an pro.</p>\r\n\r\n<p>Solum atqui intellegebat mea an. Ne ius alterum aliquam. Ea nec populo aliquid mentitum, vis in meliore atomorum, sanctus consequat vituperatoribus duo ea. Ad doctus pertinacia ius, virtute fuisset id has, eum ut modo principes. Qui eu labore adversarium, oporteat delicata qui ut, an qui meliore principes. Id aliquid dolorum nam.</p>\r\n\r\n<p>Reque pericula philosophia ut mei, volumus eligendi mandamus has an. In nobis consulatu pri, has at timeam scaevola, has simul quaeque et. Te nec sale accumsan. Dolorem prodesset efficiendi sea ea.</p>\r\n\r\n<p>Et habeo modus debitis pri, vel quis fierent albucius ne. Ea animal meliore usu, nec etiam dolorum atomorum at, nam in audire mandamus omittantur. Cu ius dicam officiis molestiae, mea volumus officiis cotidieque no. Ut vel possim interpretaris, idque probatus antiopam has ad. Facilisi qualisque te sea, no dolorum mnesarchum usu.</p>\r\n\r\n<p>Eum tota graeci impetus an, eirmod invenire rationibus ne mel. Ignota habemus eum ex, vis omnesque delicata perpetua an. Sit id modo invidunt sapientem, ne eum vocibus dolores phaedrum. Case praesent appellantur eu per.</p>\r\n', '05-09-2017', 'news-8.jpg', 4, 'John Doe', 8, 'Insomnia: Like mother, like child?', '', ''),
(9, 'How Much Sugar Is In Your Food And Drink?', 'how-much-sugar-is-in-your-food-and-drink', '<p>Lorem ipsum dolor sit amet, qui case probo velit no, an postea scaevola partiendo mei. Id mea fuisset perpetua referrentur. Ut everti ceteros mei, alii discere eum no, duo id malis iuvaret. Ad sint everti accusam vel, ea viderer suscipiantur pri. Brute option minimum in cum, ignota iuvaret an pro.</p>\r\n\r\n<p>Solum atqui intellegebat mea an. Ne ius alterum aliquam. Ea nec populo aliquid mentitum, vis in meliore atomorum, sanctus consequat vituperatoribus duo ea. Ad doctus pertinacia ius, virtute fuisset id has, eum ut modo principes. Qui eu labore adversarium, oporteat delicata qui ut, an qui meliore principes. Id aliquid dolorum nam.</p>\r\n\r\n<p>Reque pericula philosophia ut mei, volumus eligendi mandamus has an. In nobis consulatu pri, has at timeam scaevola, has simul quaeque et. Te nec sale accumsan. Dolorem prodesset efficiendi sea ea.</p>\r\n\r\n<p>Et habeo modus debitis pri, vel quis fierent albucius ne. Ea animal meliore usu, nec etiam dolorum atomorum at, nam in audire mandamus omittantur. Cu ius dicam officiis molestiae, mea volumus officiis cotidieque no. Ut vel possim interpretaris, idque probatus antiopam has ad. Facilisi qualisque te sea, no dolorum mnesarchum usu.</p>\r\n\r\n<p>Eum tota graeci impetus an, eirmod invenire rationibus ne mel. Ignota habemus eum ex, vis omnesque delicata perpetua an. Sit id modo invidunt sapientem, ne eum vocibus dolores phaedrum. Case praesent appellantur eu per.</p>\r\n', '05-09-2017', 'news-9.jpg', 5, 'John Doe', 6, 'How Much Sugar Is In Your Food And Drink?', '', ''),
(10, 'Vitamin D: Health Benefits, Facts and Research', 'vitamin-d-health-benefits-facts-and-research', '<p>Lorem ipsum dolor sit amet, qui case probo velit no, an postea scaevola partiendo mei. Id mea fuisset perpetua referrentur. Ut everti ceteros mei, alii discere eum no, duo id malis iuvaret. Ad sint everti accusam vel, ea viderer suscipiantur pri. Brute option minimum in cum, ignota iuvaret an pro.</p>\r\n\r\n<p>Solum atqui intellegebat mea an. Ne ius alterum aliquam. Ea nec populo aliquid mentitum, vis in meliore atomorum, sanctus consequat vituperatoribus duo ea. Ad doctus pertinacia ius, virtute fuisset id has, eum ut modo principes. Qui eu labore adversarium, oporteat delicata qui ut, an qui meliore principes. Id aliquid dolorum nam.</p>\r\n\r\n<p>Reque pericula philosophia ut mei, volumus eligendi mandamus has an. In nobis consulatu pri, has at timeam scaevola, has simul quaeque et. Te nec sale accumsan. Dolorem prodesset efficiendi sea ea.</p>\r\n\r\n<p>Et habeo modus debitis pri, vel quis fierent albucius ne. Ea animal meliore usu, nec etiam dolorum atomorum at, nam in audire mandamus omittantur. Cu ius dicam officiis molestiae, mea volumus officiis cotidieque no. Ut vel possim interpretaris, idque probatus antiopam has ad. Facilisi qualisque te sea, no dolorum mnesarchum usu.</p>\r\n\r\n<p>Eum tota graeci impetus an, eirmod invenire rationibus ne mel. Ignota habemus eum ex, vis omnesque delicata perpetua an. Sit id modo invidunt sapientem, ne eum vocibus dolores phaedrum. Case praesent appellantur eu per.</p>\r\n', '05-09-2017', 'news-10.jpg', 5, 'John Doe', 3, 'Vitamin D: Health Benefits, Facts and Research', '', ''),
(11, 'Protein shake diet for weight loss', 'protein-shake-diet-for-weight-loss', '<p>Lorem ipsum dolor sit amet, qui case probo velit no, an postea scaevola partiendo mei. Id mea fuisset perpetua referrentur. Ut everti ceteros mei, alii discere eum no, duo id malis iuvaret. Ad sint everti accusam vel, ea viderer suscipiantur pri. Brute option minimum in cum, ignota iuvaret an pro.</p>\r\n\r\n<p>Solum atqui intellegebat mea an. Ne ius alterum aliquam. Ea nec populo aliquid mentitum, vis in meliore atomorum, sanctus consequat vituperatoribus duo ea. Ad doctus pertinacia ius, virtute fuisset id has, eum ut modo principes. Qui eu labore adversarium, oporteat delicata qui ut, an qui meliore principes. Id aliquid dolorum nam.</p>\r\n\r\n<p>Reque pericula philosophia ut mei, volumus eligendi mandamus has an. In nobis consulatu pri, has at timeam scaevola, has simul quaeque et. Te nec sale accumsan. Dolorem prodesset efficiendi sea ea.</p>\r\n\r\n<p>Et habeo modus debitis pri, vel quis fierent albucius ne. Ea animal meliore usu, nec etiam dolorum atomorum at, nam in audire mandamus omittantur. Cu ius dicam officiis molestiae, mea volumus officiis cotidieque no. Ut vel possim interpretaris, idque probatus antiopam has ad. Facilisi qualisque te sea, no dolorum mnesarchum usu.</p>\r\n\r\n<p>Eum tota graeci impetus an, eirmod invenire rationibus ne mel. Ignota habemus eum ex, vis omnesque delicata perpetua an. Sit id modo invidunt sapientem, ne eum vocibus dolores phaedrum. Case praesent appellantur eu per.</p>\r\n', '05-09-2017', 'news-11.jpg', 5, 'John Doe', 17, 'Protein shake diet for weight loss', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_page`
--

CREATE TABLE `tbl_page` (
  `page_id` int(11) NOT NULL,
  `page_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `page_slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `page_content` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `page_layout` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `banner` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `meta_title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `meta_keyword` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `meta_description` mediumtext COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_page`
--

INSERT INTO `tbl_page` (`page_id`, `page_name`, `page_slug`, `page_content`, `page_layout`, `banner`, `status`, `meta_title`, `meta_keyword`, `meta_description`) VALUES
(1, 'About Us', 'about-us', '<p>Lorem ipsum dolor sit amet, at pro eleifend vulputate, vim movet regione ad. Has veritus adipisci aliquando eu, fugit eripuit dignissim per ea, sanctus omittam assueverit his ex. Nulla affert vix in, ei sea dolore dolores vivendum. Vix eros postea an, ius suas ubique habemus an, wisi nulla ex mel. Saepe postulant concludaturque at has. Exerci tincidunt interesset ne per, pro bonorum utroque appetere ad.</p>\r\n\r\n<p>Est ea corpora deserunt cotidieque, quo te vero melius assentior, pri ex velit altera iuvaret. Tibique hendrerit voluptaria ad quo. Ut appetere reprimique qui, aliquip suscipiantur ex eos. Nibh vero nusquam his eu, agam summo democritum mea ne. Ius in novum scripta, atqui appetere efficiantur an vel, ex probo modus temporibus nam.</p>\r\n\r\n<p>Ea feugiat nominavi quo, debet gubergren elaboraret at cum, mel timeam vivendo mentitum cu. Aeque civibus luptatum cu eos. Novum facilisi insolens his et, ex aliquip tibique laboramus vim. Vix brute appellantur ei.</p>\r\n\r\n<p>Nec eros viderer ne, mel ad suas offendit suavitate, te pri laoreet legendos hendrerit. Per ut paulo urbanitas mediocritatem, in sea facilisis imperdiet torquatos, ea vis soleat fierent pertinacia. Maiestatis reprimique no est, ut ius esse tation. Nam animal discere omnesque at. Evertitur adipiscing vis ei, his ut luptatum recteque, et idque mundi vim.</p>\r\n\r\n<p>Adhuc vocibus at mei, nulla altera eu vim. At sit quot ferri everti. Mea ea doming dictas possim. Te mea facete nominati constituam, no discere democritum has, ei nam eirmod vocent deserunt. Eu wisi voluptatibus mea, elit errem ad pro, vim quando denique id. Labitur accommodare eam at.</p>\r\n', 'Full Width Page Layout', 'page-banner-1.jpg', 'Active', 'About Us Page', '', ''),
(2, 'Contact Us', 'contact-us', '', 'Contact Us Page Layout', 'page-banner-2.jpg', 'Active', 'Contact Us Page', '', ''),
(5, 'Photo Gallery', 'photo-gallery', '', 'Photo Gallery Page Layout', 'page-banner-5.jpg', 'Active', 'Photo Gallery Page', '', ''),
(6, 'Video Gallery', 'video-gallery', '', 'Video Gallery Page Layout', 'page-banner-6.jpg', 'Active', 'Video Gallery Page', '', ''),
(7, 'FAQ', 'faq', '', 'FAQ Page Layout', 'page-banner-7.jpg', 'Active', 'FAQ Page', '', ''),
(8, 'Doctors', 'doctors', '', 'Doctor Page Layout', 'page-banner-8.jpg', 'Active', 'Doctors Page', '', ''),
(9, 'Blog', 'blog', '', 'Blog Page Layout', 'page-banner-9.jpg', 'Active', 'Blog Page', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_partner`
--

CREATE TABLE `tbl_partner` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `photo` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_partner`
--

INSERT INTO `tbl_partner` (`id`, `name`, `url`, `photo`) VALUES
(1, 'Company 1', '', 'partner-1.png'),
(2, 'Company 2', '', 'partner-2.png'),
(3, 'Company 3', '', 'partner-3.png'),
(4, 'Company 4', '', 'partner-4.png'),
(5, 'Company 5', '', 'partner-5.png'),
(6, 'Company 6', '', 'partner-6.png'),
(7, 'Company 7', '', 'partner-7.png');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_photo`
--

CREATE TABLE `tbl_photo` (
  `photo_id` int(11) NOT NULL,
  `photo_caption` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `photo_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `p_category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_photo`
--

INSERT INTO `tbl_photo` (`photo_id`, `photo_caption`, `photo_name`, `p_category_id`) VALUES
(8, 'Photo 1', 'photo-8.jpg', 1),
(9, 'Photo 2', 'photo-9.jpg', 1),
(10, 'Photo 3', 'photo-10.jpg', 3),
(11, 'Photo 4', 'photo-11.jpg', 3),
(12, 'Photo 5', 'photo-12.jpg', 2),
(13, 'Photo 6', 'photo-13.jpg', 2),
(15, 'Photo 8', 'photo-15.jpg', 1),
(16, 'Photo 9', 'photo-16.jpg', 3),
(18, 'Photo 11', 'photo-18.jpg', 2);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pricing_item`
--

CREATE TABLE `tbl_pricing_item` (
  `pricing_item_id` int(11) NOT NULL,
  `pricing_item_name` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `pricing_plan_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_pricing_item`
--

INSERT INTO `tbl_pricing_item` (`pricing_item_id`, `pricing_item_name`, `pricing_plan_id`) VALUES
(1, '6 Specialties', 1),
(2, '30 Tests and Treatments', 1),
(3, '1 Medical Consultation', 1),
(4, '1 Home Visit', 1),
(5, 'No Pregnancy Care', 1),
(6, 'No Assistance', 1),
(7, '12 Specialties', 2),
(8, '24 Specialties', 3),
(9, '90 Tests and Treatments', 2),
(10, '160 Tests and Treatments', 3),
(11, '2 Medical Consultation', 2),
(12, '4 Medical Consultation', 3),
(13, '2 Home Visit', 2),
(14, '4 Home Visit', 3),
(15, 'Available Pregnancy Care', 2),
(16, 'Available Pregnancy Care', 3),
(17, '24 Hours Assistance', 2),
(18, '24 Hours Assistance', 3);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pricing_plan`
--

CREATE TABLE `tbl_pricing_plan` (
  `pricing_plan_id` int(11) NOT NULL,
  `pricing_plan_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `pricing_plan_price` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `pricing_plan_button_text` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `pricing_plan_button_url` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_pricing_plan`
--

INSERT INTO `tbl_pricing_plan` (`pricing_plan_id`, `pricing_plan_name`, `pricing_plan_price`, `pricing_plan_button_text`, `pricing_plan_button_url`) VALUES
(1, 'Basic', '199', 'Select', '#'),
(2, 'Platinum', '299', 'Select', '#'),
(3, 'Gold', '399', 'Select', '#');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_service`
--

CREATE TABLE `tbl_service` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `short_description` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `photo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `banner` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_service`
--

INSERT INTO `tbl_service` (`id`, `name`, `slug`, `description`, `short_description`, `photo`, `banner`) VALUES
(4, 'Mother Care', 'mother-care', '<p>Ad his diam eirmod persecuti. Eum health cube scriptorem eu, eu aperiri definiebas concludaturque eam.&nbsp;Ad his diam eirmod persecuti. Eum health cube scriptorem eu, eu aperiri definiebas concludaturque eam.&nbsp;Ad his diam eirmod persecuti. Eum health cube scriptorem eu, eu aperiri definiebas concludaturque eam.&nbsp;Ad his diam eirmod persecuti. Eum health cube scriptorem eu, eu aperiri definiebas concludaturque eam.&nbsp;Ad his diam eirmod persecuti. Eum health cube scriptorem eu, eu aperiri definiebas concludaturque eam.&nbsp;Ad his diam eirmod persecuti. Eum health cube scriptorem eu, eu aperiri definiebas concludaturque eam.</p>\r\n', 'Ad his diam eirmod persecuti. Eum health cube scriptorem eu, eu aperiri definiebas concludaturque eam.', 'service-4.jpg', 'service-banner-4.jpg'),
(5, 'Hospital Service', 'hospital-service', '<p>Ad his diam eirmod persecuti. Eum health cube scriptorem eu, eu aperiri definiebas concludaturque eam.&nbsp;Ad his diam eirmod persecuti. Eum health cube scriptorem eu, eu aperiri definiebas concludaturque eam.&nbsp;Ad his diam eirmod persecuti. Eum health cube scriptorem eu, eu aperiri definiebas concludaturque eam.&nbsp;Ad his diam eirmod persecuti. Eum health cube scriptorem eu, eu aperiri definiebas concludaturque eam.&nbsp;Ad his diam eirmod persecuti. Eum health cube scriptorem eu, eu aperiri definiebas concludaturque eam.&nbsp;Ad his diam eirmod persecuti. Eum health cube scriptorem eu, eu aperiri definiebas concludaturque eam.</p>\r\n', 'Ad his diam eirmod persecuti. Eum health cube scriptorem eu, eu aperiri definiebas concludaturque eam.Â ', 'service-5.jpg', 'service-banner-5.jpg'),
(6, 'Parent Care', 'parent-care', '<p>Ad his diam eirmod persecuti. Eum health cube scriptorem eu, eu aperiri definiebas concludaturque eam.&nbsp;Ad his diam eirmod persecuti. Eum health cube scriptorem eu, eu aperiri definiebas concludaturque eam.&nbsp;Ad his diam eirmod persecuti. Eum health cube scriptorem eu, eu aperiri definiebas concludaturque eam.&nbsp;Ad his diam eirmod persecuti. Eum health cube scriptorem eu, eu aperiri definiebas concludaturque eam.&nbsp;Ad his diam eirmod persecuti. Eum health cube scriptorem eu, eu aperiri definiebas concludaturque eam.&nbsp;Ad his diam eirmod persecuti. Eum health cube scriptorem eu, eu aperiri definiebas concludaturque eam.</p>\r\n', 'Ad his diam eirmod persecuti. Eum health cube scriptorem eu, eu aperiri definiebas concludaturque eam.Â ', 'service-6.jpg', 'service-banner-6.jpg'),
(7, 'Critical Treatment', 'critical-treatment', '<p>Ad his diam eirmod persecuti. Eum health cube scriptorem eu, eu aperiri definiebas concludaturque eam.&nbsp;Ad his diam eirmod persecuti. Eum health cube scriptorem eu, eu aperiri definiebas concludaturque eam.&nbsp;Ad his diam eirmod persecuti. Eum health cube scriptorem eu, eu aperiri definiebas concludaturque eam.&nbsp;Ad his diam eirmod persecuti. Eum health cube scriptorem eu, eu aperiri definiebas concludaturque eam.&nbsp;Ad his diam eirmod persecuti. Eum health cube scriptorem eu, eu aperiri definiebas concludaturque eam.&nbsp;Ad his diam eirmod persecuti. Eum health cube scriptorem eu, eu aperiri definiebas concludaturque eam.</p>\r\n', 'Ad his diam eirmod persecuti. Eum health cube scriptorem eu, eu aperiri definiebas concludaturque eam.Â ', 'service-7.jpg', 'service-banner-7.jpg'),
(8, 'All Major Tests', 'all-major-tests', '<p>Ad his diam eirmod persecuti. Eum health cube scriptorem eu, eu aperiri definiebas concludaturque eam.&nbsp;Ad his diam eirmod persecuti. Eum health cube scriptorem eu, eu aperiri definiebas concludaturque eam.&nbsp;Ad his diam eirmod persecuti. Eum health cube scriptorem eu, eu aperiri definiebas concludaturque eam.&nbsp;Ad his diam eirmod persecuti. Eum health cube scriptorem eu, eu aperiri definiebas concludaturque eam.&nbsp;Ad his diam eirmod persecuti. Eum health cube scriptorem eu, eu aperiri definiebas concludaturque eam.&nbsp;Ad his diam eirmod persecuti. Eum health cube scriptorem eu, eu aperiri definiebas concludaturque eam.</p>\r\n', 'Ad his diam eirmod persecuti. Eum health cube scriptorem eu, eu aperiri definiebas concludaturque eam.', 'service-8.jpg', 'service-banner-8.jpg'),
(9, 'Modern Laboratory', 'modern-laboratory', '<p>Ad his diam eirmod persecuti. Eum health cube scriptorem eu, eu aperiri definiebas concludaturque eam.&nbsp;Ad his diam eirmod persecuti. Eum health cube scriptorem eu, eu aperiri definiebas concludaturque eam.&nbsp;Ad his diam eirmod persecuti. Eum health cube scriptorem eu, eu aperiri definiebas concludaturque eam.&nbsp;Ad his diam eirmod persecuti. Eum health cube scriptorem eu, eu aperiri definiebas concludaturque eam.&nbsp;Ad his diam eirmod persecuti. Eum health cube scriptorem eu, eu aperiri definiebas concludaturque eam.&nbsp;Ad his diam eirmod persecuti. Eum health cube scriptorem eu, eu aperiri definiebas concludaturque eam.</p>\r\n', 'Ad his diam eirmod persecuti. Eum health cube scriptorem eu, eu aperiri definiebas concludaturque eam.', 'service-9.jpg', 'service-banner-9.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_settings`
--

CREATE TABLE `tbl_settings` (
  `id` int(11) NOT NULL,
  `logo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `favicon` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `footer_about` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `footer_copyright` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `contact_address` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `contact_email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `contact_phone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `contact_fax` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `contact_map_iframe` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `total_recent_news_footer` int(10) NOT NULL,
  `total_popular_news_footer` int(10) NOT NULL,
  `total_recent_news_sidebar` int(11) NOT NULL,
  `total_popular_news_sidebar` int(11) NOT NULL,
  `total_recent_news_home_page` int(11) NOT NULL,
  `meta_title_home` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `meta_keyword_home` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `meta_description_home` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `home_title_service` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `home_subtitle_service` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `home_status_service` int(11) NOT NULL,
  `home_title_department` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `home_subtitle_department` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `home_status_department` int(11) NOT NULL,
  `home_title_doctor` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `home_subtitle_doctor` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `home_status_doctor` int(11) NOT NULL,
  `home_title_pricing` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `home_subtitle_pricing` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `home_status_pricing` int(11) NOT NULL,
  `home_title_testimonial` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `home_subtitle_testimonial` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `home_status_testimonial` int(11) NOT NULL,
  `home_title_news` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `home_subtitle_news` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `home_status_news` int(11) NOT NULL,
  `home_title_partner` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `home_subtitle_partner` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `home_status_partner` int(11) NOT NULL,
  `color` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `preloader_status` text COLLATE utf8_unicode_ci NOT NULL,
  `website_name` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_settings`
--

INSERT INTO `tbl_settings` (`id`, `logo`, `favicon`, `footer_about`, `footer_copyright`, `contact_address`, `contact_email`, `contact_phone`, `contact_fax`, `contact_map_iframe`, `total_recent_news_footer`, `total_popular_news_footer`, `total_recent_news_sidebar`, `total_popular_news_sidebar`, `total_recent_news_home_page`, `meta_title_home`, `meta_keyword_home`, `meta_description_home`, `home_title_service`, `home_subtitle_service`, `home_status_service`, `home_title_department`, `home_subtitle_department`, `home_status_department`, `home_title_doctor`, `home_subtitle_doctor`, `home_status_doctor`, `home_title_pricing`, `home_subtitle_pricing`, `home_status_pricing`, `home_title_testimonial`, `home_subtitle_testimonial`, `home_status_testimonial`, `home_title_news`, `home_subtitle_news`, `home_status_news`, `home_title_partner`, `home_subtitle_partner`, `home_status_partner`, `color`, `preloader_status`, `website_name`) VALUES
(1, 'logo.png', 'favicon.png', '<p>Lorem ipsum dolor sit amet, omnis signiferumque in mei, mei ex enim concludaturque. Senserit salutandi euripidis no per, modus maiestatis scribentur est an.Â Ea suas pertinax has, solet officiis pericula cu pro, possit inermis qui ad. An mea tale perfecto sententiae, eos inani epicuri concludaturque ex.</p>\r\n', 'Copyright 2022. All Rights Reserved.', 'ABC Steet, NewYork.', 'info@yourwebsite.com', '123-456-7878', '123-456-7890', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d387142.84040262736!2d-74.25819605476612!3d40.70583158628177!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew+York%2C+NY%2C+USA!5e0!3m2!1sen!2sbd!4v1485712851643\" width=\"600\" height=\"450\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>', 3, 3, 4, 4, 7, 'Yourdoctor - Medical and Doctor Website CMS', 'doctor, department, health, fitness, medical, news, dental, neurologist, orthopedist, dental surgeon, medical equipment ', 'Yourdoctor is a nice and clean responsive cms on online medical and doctor management system.', 'Our Services', 'We Are Here to Provide You Awesome Service Always', 1, 'Our Departments', 'We have All Major Departments to Serve Patients', 1, 'Our Expert Doctors', 'Meet with All Our Qualified Doctors', 1, 'Pricing', 'We are Offering Special Discounts Now', 1, 'Testimonial', 'Our Happy Clients Tell About Us', 1, 'Latest News', 'See All Our Updated and Latest News', 1, 'Our Partners', 'All Our Company Partners are Listed Below', 1, '1594BF', 'Off', 'YourDoctor');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_setting_captcha`
--

CREATE TABLE `tbl_setting_captcha` (
  `id` int(11) NOT NULL,
  `captcha_contact` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `captcha_admin_login` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_setting_captcha`
--

INSERT INTO `tbl_setting_captcha` (`id`, `captcha_contact`, `captcha_admin_login`) VALUES
(1, 'Show', 'Hide');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_setting_email`
--

CREATE TABLE `tbl_setting_email` (
  `id` int(11) NOT NULL,
  `send_email_from` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `receive_email_to` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `smtp_active` varchar(3) COLLATE utf8_unicode_ci NOT NULL,
  `smtp_ssl` varchar(3) COLLATE utf8_unicode_ci NOT NULL,
  `smtp_host` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `smtp_port` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `smtp_username` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `smtp_password` varchar(150) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_setting_email`
--

INSERT INTO `tbl_setting_email` (`id`, `send_email_from`, `receive_email_to`, `smtp_active`, `smtp_ssl`, `smtp_host`, `smtp_port`, `smtp_username`, `smtp_password`) VALUES
(1, 'info@yourdomain.com', 'admin@gmail.com', 'Yes', 'No', 'smtp.mailtrap.io', '587', '1d63d91574de8a', 'ec61d080c569b1');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_slider`
--

CREATE TABLE `tbl_slider` (
  `id` int(11) NOT NULL,
  `photo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `heading` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `subheading` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `content` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `button_text` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `button_url` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `position` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(30) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_slider`
--

INSERT INTO `tbl_slider` (`id`, `photo`, `heading`, `subheading`, `content`, `button_text`, `button_url`, `position`, `status`) VALUES
(1, 'slider-1.jpg', 'Best Treatment', 'We provide best treatment in our area', 'Lorem ipsum dolor sit amet, ad vim indoctum maluisset. \r\nPosse philosophia id sed, qui ut saepe nonumes.', 'Read More', '#', 'Left', 'Active'),
(2, 'slider-2.jpg', 'HealthCare', 'Your reliable medical solution', 'Lorem ipsum dolor sit amet, ad vim indoctum maluisset. \r\nPosse philosophia id sed, qui ut saepe nonumes.', 'Read More', '#', 'Right', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_social`
--

CREATE TABLE `tbl_social` (
  `social_id` int(11) NOT NULL,
  `social_name` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `social_url` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `social_icon` varchar(30) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_social`
--

INSERT INTO `tbl_social` (`social_id`, `social_name`, `social_url`, `social_icon`) VALUES
(1, 'Facebook', '#', 'fa fa-facebook'),
(2, 'Twitter', '#', 'fa fa-twitter'),
(3, 'LinkedIn', '#', 'fa fa-linkedin'),
(4, 'Google Plus', '#', 'fa fa-google-plus'),
(5, 'Pinterest', '#', 'fa fa-pinterest'),
(6, 'YouTube', '#', 'fa fa-youtube'),
(7, 'Instagram', '', 'fa fa-instagram'),
(8, 'Tumblr', '', 'fa fa-tumblr'),
(9, 'Flickr', '', 'fa fa-flickr'),
(10, 'Reddit', '', 'fa fa-reddit'),
(11, 'Snapchat', '', 'fa fa-snapchat'),
(12, 'WhatsApp', '', 'fa fa-whatsapp'),
(13, 'Quora', '', 'fa fa-quora'),
(14, 'StumbleUpon', '', 'fa fa-stumbleupon'),
(15, 'Delicious', '', 'fa fa-delicious'),
(16, 'Digg', '', 'fa fa-digg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_testimonial`
--

CREATE TABLE `tbl_testimonial` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `designation` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `company` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `photo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `comment` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_testimonial`
--

INSERT INTO `tbl_testimonial` (`id`, `name`, `designation`, `company`, `photo`, `comment`) VALUES
(1, 'John Doe', 'Managing Director', 'ABC Inc.', 'testimonial-1.jpg', 'Nice and awesome service always. I wish their good and best luck always.'),
(2, 'Asif Ikbal', 'CEO', 'Typhon Multimedia', 'testimonial-2.jpg', 'We worked with a lot of other service providers in previous years. But this organization is an exceptional one. Their services are really fantastic. ');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id` int(10) NOT NULL,
  `full_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` text COLLATE utf8_unicode_ci NOT NULL,
  `photo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `role` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(10) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id`, `full_name`, `email`, `phone`, `password`, `token`, `photo`, `role`, `status`) VALUES
(1, 'John Doe', 'sadmin@gmail.com', '111-222-3333', '81dc9bdb52d04dc20036dbd8313ed055', '', 'user-1.jpg', 'Super Admin', 'Active'),
(13, 'David Beckham', 'admin@gmail.com', '111-222-4444', '81dc9bdb52d04dc20036dbd8313ed055', '', 'user-13.jpg', 'Admin', 'Active'),
(14, 'Patrick Henderson', 'publisher@gmail.com', '111-222-5555', '81dc9bdb52d04dc20036dbd8313ed055', '', 'user-14.jpg', 'Publisher', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_video`
--

CREATE TABLE `tbl_video` (
  `video_id` int(11) NOT NULL,
  `video_title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `video_iframe` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `v_category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_video`
--

INSERT INTO `tbl_video` (`video_id`, `video_title`, `video_iframe`, `v_category_id`) VALUES
(3, 'Video 1', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/l9swbAtRRbg\" frameborder=\"0\" allow=\"autoplay; encrypted-media\" allowfullscreen></iframe>', 1),
(4, 'Video 2', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/tS4a6I4-Yjo\" frameborder=\"0\" allow=\"autoplay; encrypted-media\" allowfullscreen></iframe>', 1),
(5, 'Video 3', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/c5nc4IuMBTA\" frameborder=\"0\" allow=\"autoplay; encrypted-media\" allowfullscreen></iframe>', 1),
(6, 'Video 4', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/lzHdQ0n6o7E\" frameborder=\"0\" allow=\"autoplay; encrypted-media\" allowfullscreen></iframe>', 2),
(7, 'Video 5', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/0lr-82ey1_I\" frameborder=\"0\" allow=\"autoplay; encrypted-media\" allowfullscreen></iframe>', 2),
(8, 'Video 6', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/bglXkienTSk\" frameborder=\"0\" allow=\"autoplay; encrypted-media\" allowfullscreen></iframe>', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_advertisement_category`
--
ALTER TABLE `tbl_advertisement_category`
  ADD PRIMARY KEY (`adv_id`);

--
-- Indexes for table `tbl_advertisement_home`
--
ALTER TABLE `tbl_advertisement_home`
  ADD PRIMARY KEY (`adv_id`);

--
-- Indexes for table `tbl_advertisement_sidebar`
--
ALTER TABLE `tbl_advertisement_sidebar`
  ADD PRIMARY KEY (`adv_id`);

--
-- Indexes for table `tbl_captcha`
--
ALTER TABLE `tbl_captcha`
  ADD PRIMARY KEY (`captcha_id`);

--
-- Indexes for table `tbl_category`
--
ALTER TABLE `tbl_category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `tbl_category_photo`
--
ALTER TABLE `tbl_category_photo`
  ADD PRIMARY KEY (`p_category_id`);

--
-- Indexes for table `tbl_category_video`
--
ALTER TABLE `tbl_category_video`
  ADD PRIMARY KEY (`v_category_id`);

--
-- Indexes for table `tbl_comment`
--
ALTER TABLE `tbl_comment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_department`
--
ALTER TABLE `tbl_department`
  ADD PRIMARY KEY (`dep_id`);

--
-- Indexes for table `tbl_department_appointment`
--
ALTER TABLE `tbl_department_appointment`
  ADD PRIMARY KEY (`app_id`);

--
-- Indexes for table `tbl_department_faq`
--
ALTER TABLE `tbl_department_faq`
  ADD PRIMARY KEY (`fq_id`);

--
-- Indexes for table `tbl_department_openning_hour`
--
ALTER TABLE `tbl_department_openning_hour`
  ADD PRIMARY KEY (`oh_id`);

--
-- Indexes for table `tbl_designation`
--
ALTER TABLE `tbl_designation`
  ADD PRIMARY KEY (`designation_id`);

--
-- Indexes for table `tbl_doctor`
--
ALTER TABLE `tbl_doctor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_faq`
--
ALTER TABLE `tbl_faq`
  ADD PRIMARY KEY (`faq_id`);

--
-- Indexes for table `tbl_faq_category`
--
ALTER TABLE `tbl_faq_category`
  ADD PRIMARY KEY (`faq_category_id`);

--
-- Indexes for table `tbl_file`
--
ALTER TABLE `tbl_file`
  ADD PRIMARY KEY (`file_id`);

--
-- Indexes for table `tbl_home_category`
--
ALTER TABLE `tbl_home_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_menu`
--
ALTER TABLE `tbl_menu`
  ADD PRIMARY KEY (`menu_id`);

--
-- Indexes for table `tbl_menu_home`
--
ALTER TABLE `tbl_menu_home`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_news`
--
ALTER TABLE `tbl_news`
  ADD PRIMARY KEY (`news_id`);

--
-- Indexes for table `tbl_page`
--
ALTER TABLE `tbl_page`
  ADD PRIMARY KEY (`page_id`);

--
-- Indexes for table `tbl_partner`
--
ALTER TABLE `tbl_partner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_photo`
--
ALTER TABLE `tbl_photo`
  ADD PRIMARY KEY (`photo_id`);

--
-- Indexes for table `tbl_pricing_item`
--
ALTER TABLE `tbl_pricing_item`
  ADD PRIMARY KEY (`pricing_item_id`);

--
-- Indexes for table `tbl_pricing_plan`
--
ALTER TABLE `tbl_pricing_plan`
  ADD PRIMARY KEY (`pricing_plan_id`);

--
-- Indexes for table `tbl_service`
--
ALTER TABLE `tbl_service`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_settings`
--
ALTER TABLE `tbl_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_setting_captcha`
--
ALTER TABLE `tbl_setting_captcha`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_setting_email`
--
ALTER TABLE `tbl_setting_email`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_slider`
--
ALTER TABLE `tbl_slider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_social`
--
ALTER TABLE `tbl_social`
  ADD PRIMARY KEY (`social_id`);

--
-- Indexes for table `tbl_testimonial`
--
ALTER TABLE `tbl_testimonial`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_video`
--
ALTER TABLE `tbl_video`
  ADD PRIMARY KEY (`video_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_advertisement_category`
--
ALTER TABLE `tbl_advertisement_category`
  MODIFY `adv_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_advertisement_home`
--
ALTER TABLE `tbl_advertisement_home`
  MODIFY `adv_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_advertisement_sidebar`
--
ALTER TABLE `tbl_advertisement_sidebar`
  MODIFY `adv_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_captcha`
--
ALTER TABLE `tbl_captcha`
  MODIFY `captcha_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=131;

--
-- AUTO_INCREMENT for table `tbl_category`
--
ALTER TABLE `tbl_category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_category_photo`
--
ALTER TABLE `tbl_category_photo`
  MODIFY `p_category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_category_video`
--
ALTER TABLE `tbl_category_video`
  MODIFY `v_category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_comment`
--
ALTER TABLE `tbl_comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_department`
--
ALTER TABLE `tbl_department`
  MODIFY `dep_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_department_appointment`
--
ALTER TABLE `tbl_department_appointment`
  MODIFY `app_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_department_faq`
--
ALTER TABLE `tbl_department_faq`
  MODIFY `fq_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `tbl_department_openning_hour`
--
ALTER TABLE `tbl_department_openning_hour`
  MODIFY `oh_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `tbl_designation`
--
ALTER TABLE `tbl_designation`
  MODIFY `designation_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_doctor`
--
ALTER TABLE `tbl_doctor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_faq`
--
ALTER TABLE `tbl_faq`
  MODIFY `faq_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_faq_category`
--
ALTER TABLE `tbl_faq_category`
  MODIFY `faq_category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_file`
--
ALTER TABLE `tbl_file`
  MODIFY `file_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_home_category`
--
ALTER TABLE `tbl_home_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `tbl_menu`
--
ALTER TABLE `tbl_menu`
  MODIFY `menu_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tbl_menu_home`
--
ALTER TABLE `tbl_menu_home`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_news`
--
ALTER TABLE `tbl_news`
  MODIFY `news_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tbl_page`
--
ALTER TABLE `tbl_page`
  MODIFY `page_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tbl_partner`
--
ALTER TABLE `tbl_partner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_photo`
--
ALTER TABLE `tbl_photo`
  MODIFY `photo_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `tbl_pricing_item`
--
ALTER TABLE `tbl_pricing_item`
  MODIFY `pricing_item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `tbl_pricing_plan`
--
ALTER TABLE `tbl_pricing_plan`
  MODIFY `pricing_plan_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_service`
--
ALTER TABLE `tbl_service`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tbl_settings`
--
ALTER TABLE `tbl_settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_setting_captcha`
--
ALTER TABLE `tbl_setting_captcha`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_setting_email`
--
ALTER TABLE `tbl_setting_email`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_slider`
--
ALTER TABLE `tbl_slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_social`
--
ALTER TABLE `tbl_social`
  MODIFY `social_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `tbl_testimonial`
--
ALTER TABLE `tbl_testimonial`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tbl_video`
--
ALTER TABLE `tbl_video`
  MODIFY `video_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
