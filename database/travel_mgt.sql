-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 20, 2021 at 11:34 AM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `travel_mgt`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `fld_admin_id` int(11) NOT NULL,
  `fld_admin_name` varchar(50) NOT NULL,
  `fld_admin_email` varchar(255) NOT NULL,
  `fld_admin_password` varchar(50) NOT NULL,
  `fld_admin_photo` varchar(255) NOT NULL,
  `fld_admin_address` text NOT NULL,
  `fld_admin_mobile` varchar(13) NOT NULL,
  `fld_admin_created_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `fld_admin_modified_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`fld_admin_id`, `fld_admin_name`, `fld_admin_email`, `fld_admin_password`, `fld_admin_photo`, `fld_admin_address`, `fld_admin_mobile`, `fld_admin_created_date`, `fld_admin_modified_date`) VALUES
(1, 'Admin', 'admin@gmail.com', 'admin', '609ec743174ccimages1.jpg', 'Nashik, Maharastra', '9874563212', '2021-04-09 09:19:20', '2021-05-15 00:24:46');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_booking`
--

CREATE TABLE `tbl_booking` (
  `fld_booking_id` int(11) NOT NULL,
  `fld_booking_date` varchar(20) NOT NULL,
  `fld_no_of_adult` int(11) NOT NULL,
  `fld_no_of_child` int(11) NOT NULL,
  `fld_total_booking_amount` int(11) NOT NULL,
  `fld_user_id` int(11) NOT NULL,
  `fld_user_mobileno` varchar(11) NOT NULL,
  `fld_travel_comp_id` int(11) NOT NULL,
  `fld_loc_id` int(11) NOT NULL,
  `fld_hotel_id` int(11) NOT NULL,
  `fld_food_type_id` int(11) NOT NULL,
  `fld_spot_id` int(11) NOT NULL,
  `fld_transport_id` int(11) NOT NULL,
  `fld_package_id` int(11) NOT NULL COMMENT 'Final Package Amt',
  `fld_booking_status` varchar(20) NOT NULL DEFAULT 'Register' COMMENT '1:Approved ; 0:Disapproved',
  `fld_booking_created_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `fld_booking_modified_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_booking`
--

INSERT INTO `tbl_booking` (`fld_booking_id`, `fld_booking_date`, `fld_no_of_adult`, `fld_no_of_child`, `fld_total_booking_amount`, `fld_user_id`, `fld_user_mobileno`, `fld_travel_comp_id`, `fld_loc_id`, `fld_hotel_id`, `fld_food_type_id`, `fld_spot_id`, `fld_transport_id`, `fld_package_id`, `fld_booking_status`, `fld_booking_created_date`, `fld_booking_modified_date`) VALUES
(1, '05/21/2021', 2, 1, 26550, 2, '9894646464', 3, 3, 6, 11, 15, 13, 9, 'Disapproved', '2021-05-20 13:37:54', '2021-05-20 14:36:58'),
(2, '05/28/2021', 4, 2, 47080, 2, '9646136461', 3, 4, 16, 2, 13, 10, 6, 'Register', '2021-05-20 13:38:29', '2021-05-20 13:38:29'),
(3, '07/02/2021', 10, 2, 105930, 2, '8761646311', 3, 1, 13, 19, 11, 7, 2, 'Approved', '2021-05-20 13:40:06', '2021-05-20 15:02:32');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_custumize_booking`
--

CREATE TABLE `tbl_custumize_booking` (
  `fld_booking_id` int(11) NOT NULL,
  `fld_booking_date` varchar(20) NOT NULL,
  `fld_no_of_adult` int(11) NOT NULL,
  `fld_no_of_child` int(11) NOT NULL,
  `fld_total_booking_amount` int(11) NOT NULL,
  `fld_user_id` int(11) NOT NULL,
  `fld_user_mobileno` varchar(11) NOT NULL,
  `fld_travel_comp_id` int(11) NOT NULL,
  `fld_loc_id` int(11) NOT NULL,
  `fld_hotel_id` int(11) NOT NULL,
  `fld_food_type_id` int(11) NOT NULL,
  `fld_spot_id` int(11) NOT NULL,
  `fld_transport_id` int(11) NOT NULL,
  `fld_custumize_id` int(11) NOT NULL,
  `fld_booking_status` varchar(20) NOT NULL DEFAULT 'Register' COMMENT '1:Approved ; 0:Disapproved',
  `fld_booking_created_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `fld_booking_modified_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_custumize_booking`
--

INSERT INTO `tbl_custumize_booking` (`fld_booking_id`, `fld_booking_date`, `fld_no_of_adult`, `fld_no_of_child`, `fld_total_booking_amount`, `fld_user_id`, `fld_user_mobileno`, `fld_travel_comp_id`, `fld_loc_id`, `fld_hotel_id`, `fld_food_type_id`, `fld_spot_id`, `fld_transport_id`, `fld_custumize_id`, `fld_booking_status`, `fld_booking_created_date`, `fld_booking_modified_date`) VALUES
(1, '05/21/2021', 2, 0, 20424, 2, '7897676436', 3, 1, 13, 0, 11, 8, 4, 'Register', '2021-05-20 14:29:42', '2021-05-20 14:29:42'),
(2, '05/26/2021', 4, 0, 40480, 2, '', 3, 3, 6, 11, 15, 14, 3, 'Disapproved', '2021-05-20 14:32:00', '2021-05-20 14:43:35'),
(3, '05/25/2021', 4, 2, 45675, 2, '8789764646', 3, 5, 10, 14, 5, 6, 1, 'Approved', '2021-05-20 14:33:42', '2021-05-20 14:43:27');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_custumize_package`
--

CREATE TABLE `tbl_custumize_package` (
  `fld_custumize_id` int(11) NOT NULL,
  `fld_package_id` int(11) NOT NULL,
  `fld_user_id` int(11) NOT NULL,
  `fld_package_name` varchar(255) NOT NULL,
  `fld_no_nights` int(10) NOT NULL,
  `fld_travel_comp_id` int(11) NOT NULL,
  `fld_loc_id` int(11) NOT NULL,
  `fld_hotel_id` int(11) NOT NULL,
  `fld_room_id` int(11) NOT NULL,
  `fld_food_type_id` int(11) NOT NULL,
  `fld_spot_id` int(11) NOT NULL,
  `fld_transport_id` int(11) NOT NULL,
  `fld_package_rate` varchar(20) NOT NULL,
  `fld_package_profit` varchar(20) NOT NULL,
  `fld_total_rate` int(11) NOT NULL,
  `fld_package_amt` varchar(20) NOT NULL,
  `fld_package_discount` varchar(20) NOT NULL,
  `fld_package_status` varchar(25) NOT NULL DEFAULT 'Register' COMMENT '0: Approved; 1: Disapproved',
  `fld_package_delete` int(11) NOT NULL COMMENT '0:available,1:delete',
  `fld_package_created_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `fld_package_modified_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_custumize_package`
--

INSERT INTO `tbl_custumize_package` (`fld_custumize_id`, `fld_package_id`, `fld_user_id`, `fld_package_name`, `fld_no_nights`, `fld_travel_comp_id`, `fld_loc_id`, `fld_hotel_id`, `fld_room_id`, `fld_food_type_id`, `fld_spot_id`, `fld_transport_id`, `fld_package_rate`, `fld_package_profit`, `fld_total_rate`, `fld_package_amt`, `fld_package_discount`, `fld_package_status`, `fld_package_delete`, `fld_package_created_date`, `fld_package_modified_date`) VALUES
(1, 7, 2, 'Hilton Hotel,Jaipur', 5, 3, 5, 10, 27, 14, 5, 6, '7150		\r\n', '3000', 10150, '9135', '10', 'Approved', 0, '2021-05-20 13:45:42', '2021-05-20 14:33:12'),
(2, 6, 2, 'Haveli Athiti,Ooty Package', 3, 3, 4, 16, 41, 2, 13, 9, '9200		\r\n', '2000', 10700, '9416', '12', 'Register', 0, '2021-05-20 13:49:06', '2021-05-20 13:49:06'),
(3, 9, 2, 'Snow Valley Resorts,Shimla', 3, 3, 3, 6, 18, 11, 15, 14, '9500		\r\n', '2000', 11500, '10120', '12', 'Approved', 0, '2021-05-20 13:50:18', '2021-05-20 14:22:36'),
(4, 2, 2, 'Zostel Resorts,Ladakh', 3, 3, 1, 13, 35, 19, 11, 8, '9600		\r\n', '1500', 11100, '10212', '8', 'Approved', 0, '2021-05-20 14:26:10', '2021-05-20 14:27:03');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_enquiry`
--

CREATE TABLE `tbl_enquiry` (
  `fld_enquiry_id` int(11) NOT NULL,
  `fld_user_id` int(11) NOT NULL,
  `fld_package_id` int(11) NOT NULL,
  `fld_package_name` varchar(255) NOT NULL,
  `fld_departure_date` varchar(10) NOT NULL,
  `fld_enquiry_description` text NOT NULL,
  `fld_enquiry_mobno` varchar(11) NOT NULL,
  `fld_enquiry_email` varchar(30) NOT NULL,
  `fld_enquiry_created_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `fld_enquiry_modified_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_enquiry`
--

INSERT INTO `tbl_enquiry` (`fld_enquiry_id`, `fld_user_id`, `fld_package_id`, `fld_package_name`, `fld_departure_date`, `fld_enquiry_description`, `fld_enquiry_mobno`, `fld_enquiry_email`, `fld_enquiry_created_date`, `fld_enquiry_modified_date`) VALUES
(1, 2, 9, 'Snow Valley Resorts,Shimla', '05/21/2021', 'The Jammu and Kashmir and Himachal Pradesh Transport Corporation runs buses to Ladakh, and your choice will depend on the route you take. ', '8787875478', 'rahul@gmail.com', '2021-05-20 13:55:58', '2021-05-20 13:55:58'),
(2, 2, 8, 'Lemon Tree Hotel,Andaman', '06/03/2021', '\r\nBy Train: The closest you can get to Ladakh by train is the Jammu Tawi Station. From there, you will have to pursue road transportation, by either using public trans', '7997646464', 'rahul@gmail.com', '2021-05-20 13:56:42', '2021-05-20 13:56:42');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_food_type`
--

CREATE TABLE `tbl_food_type` (
  `fld_food_type_id` int(11) NOT NULL,
  `fld_hotel_id` int(11) NOT NULL,
  `fld_food_type_name` varchar(20) NOT NULL,
  `created_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_food_type`
--

INSERT INTO `tbl_food_type` (`fld_food_type_id`, `fld_hotel_id`, `fld_food_type_name`, `created_date`, `modified_date`) VALUES
(1, 16, 'VEG', '2021-05-20 12:01:17', '2021-05-20 12:08:48'),
(2, 16, 'NON-VEG', '2021-05-20 12:01:17', '2021-05-20 12:08:57'),
(3, 1, 'VEG', '2021-05-20 12:03:47', '2021-05-20 12:03:47'),
(4, 1, 'NON-VEG', '2021-05-20 12:03:47', '2021-05-20 12:03:47'),
(5, 4, 'VEG', '2021-05-20 12:08:03', '2021-05-20 12:08:03'),
(6, 4, 'NON-VEG', '2021-05-20 12:08:03', '2021-05-20 12:08:03'),
(7, 3, 'VEG', '2021-05-20 12:08:03', '2021-05-20 12:08:03'),
(8, 5, 'VEG', '2021-05-20 12:08:03', '2021-05-20 12:08:03'),
(9, 5, 'NON-VEG', '2021-05-20 12:08:03', '2021-05-20 12:08:03'),
(10, 6, 'VEG', '2021-05-20 12:08:03', '2021-05-20 12:08:03'),
(11, 6, 'NON-VEG', '2021-05-20 12:08:03', '2021-05-20 12:08:03'),
(12, 9, 'NON-VEG', '2021-05-20 12:08:03', '2021-05-20 12:08:03'),
(13, 10, 'VEG', '2021-05-20 12:08:03', '2021-05-20 12:08:03'),
(14, 10, 'NON-VEG', '2021-05-20 12:08:03', '2021-05-20 12:08:03'),
(15, 11, 'VEG', '2021-05-20 12:08:03', '2021-05-20 12:08:03'),
(16, 11, 'NON-VEG', '2021-05-20 12:08:03', '2021-05-20 12:08:03'),
(17, 12, 'VEG', '2021-05-20 12:08:03', '2021-05-20 12:08:03'),
(18, 13, 'VEG', '2021-05-20 12:08:03', '2021-05-20 12:08:03'),
(19, 13, 'NON-VEG', '2021-05-20 12:08:03', '2021-05-20 12:08:03'),
(20, 14, 'VEG', '2021-05-20 12:09:24', '2021-05-20 12:09:24'),
(21, 14, 'NON-VEG', '2021-05-20 12:09:24', '2021-05-20 12:09:24'),
(22, 15, 'VEG', '2021-05-20 12:09:24', '2021-05-20 12:09:24');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_hotel`
--

CREATE TABLE `tbl_hotel` (
  `fld_hotel_id` int(11) NOT NULL,
  `fld_loc_id` int(11) NOT NULL,
  `fld_hotel_name` varchar(50) NOT NULL,
  `fld_hotel_address` text NOT NULL,
  `fld_hotel_created_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `fld_hotel_modified_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_hotel`
--

INSERT INTO `tbl_hotel` (`fld_hotel_id`, `fld_loc_id`, `fld_hotel_name`, `fld_hotel_address`, `fld_hotel_created_date`, `fld_hotel_modified_date`) VALUES
(1, 2, 'Lemon Tree Hotel', 'Port Blair,Andaman', '2021-05-15 10:38:10', '2021-05-15 10:38:10'),
(3, 6, 'The Hawaii Comforts', 'Hawaii Beach Road, Behind Donapaula Police Outpost, Donapaula', '2021-05-15 11:07:30', '2021-05-15 11:07:30'),
(4, 6, 'The Lalit Golf & Spa Resort ', 'Raj Baga, Canacona, Palolem', '2021-05-15 11:10:56', '2021-05-19 23:29:45'),
(5, 2, 'Pearl Park Beach Resort', 'Lakshmanpur Beach,Port Blair', '2021-05-15 11:16:10', '2021-05-19 23:35:41'),
(6, 3, 'Snow Valley Resorts', 'NH 22 Kachi Ghatti, Ghora Chowki, Shimla, Himachal Pradesh', '2021-05-20 10:33:42', '2021-05-20 10:33:42'),
(9, 3, 'Hotel Rock Sea', 'Village - Kawalag, Post Office - Beolia Tehsil and, Shimla,', '2021-05-20 10:38:35', '2021-05-20 10:38:35'),
(10, 5, 'Hilton Hotel', 'Mangalam GeejGarh House, 42, Hawa Sadak, Jaipur', '2021-05-20 10:41:43', '2021-05-20 10:41:43'),
(11, 5, 'Blue Beds Resorts', 'B-16, First Floor, Bhawani Singh Rd, Durgadas Colony, C Scheme, Ashok Nagar, Jaipur', '2021-05-20 10:43:49', '2021-05-20 10:43:49'),
(12, 1, 'HOTEL THE GRAND LADAKH', 'SHENAM, Leh', '2021-05-20 10:46:09', '2021-05-20 10:46:09'),
(13, 1, 'Zostel Resorts', 'Shaheen Guest House Karzu Road, Karzu Leh', '2021-05-20 10:48:07', '2021-05-20 10:48:07'),
(14, 1, 'Nubra Ecolodge', 'Nubra Valley, Sumur', '2021-05-20 10:49:38', '2021-05-20 10:49:38'),
(15, 4, 'Treebo Trend Atithi Bhavan', '982/BWest Lake Hadfield Road, Ooty', '2021-05-20 10:52:31', '2021-05-20 10:52:31'),
(16, 4, 'Haveli Athiti Bhavan', 'Inside Shree Abu Babaji Charitable Mission Trust, Woodcock Rd, West Lake, Ooty', '2021-05-20 10:53:57', '2021-05-20 10:53:57');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_hotel_image`
--

CREATE TABLE `tbl_hotel_image` (
  `fld_hotel_image_id` int(11) NOT NULL,
  `fld_hotel_id` int(11) NOT NULL,
  `fld_hotel_image` varchar(255) NOT NULL,
  `fld_hotel_image_created_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `fld_hotel_image_modified_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_hotel_image`
--

INSERT INTO `tbl_hotel_image` (`fld_hotel_image_id`, `fld_hotel_id`, `fld_hotel_image`, `fld_hotel_image_created_date`, `fld_hotel_image_modified_date`) VALUES
(1, 1, '609f573b01d4a01.jpg', '2021-05-15 10:38:11', '2021-05-15 10:38:11'),
(2, 1, '609f573c2e5f71keys-hotel-aqua-green.jpg', '2021-05-15 10:38:12', '2021-05-15 10:38:12'),
(3, 1, '609f573caa5362keys-select-hotel-aqua.jpg', '2021-05-15 10:38:12', '2021-05-15 10:38:12'),
(4, 2, '609f58e419c8a0sea-princess-beach-resort.jpg', '2021-05-15 10:45:16', '2021-05-15 10:45:16'),
(5, 2, '609f58e4678fa1sea-princess-beach-resort1.jpg', '2021-05-15 10:45:16', '2021-05-15 10:45:16'),
(6, 2, '609f58e49d9052sea-princess-beach-resort2.jpg', '2021-05-15 10:45:16', '2021-05-15 10:45:16'),
(7, 2, '609f58e4e335b3sea-princess-beach-resort12.jpg', '2021-05-15 10:45:16', '2021-05-15 10:45:16'),
(8, 3, '609f5e1b13b530169050_15012622340024847158.jpg', '2021-05-15 11:07:31', '2021-05-15 11:07:31'),
(9, 3, '609f5e1ba5af61169050_15050119130027214222.jpg', '2021-05-15 11:07:31', '2021-05-15 11:07:31'),
(10, 3, '609f5e1c1b3a32169050_15050119130027214266.jpg', '2021-05-15 11:07:32', '2021-05-15 11:07:32'),
(11, 3, '609f5e1c94ede3285953956.jpg', '2021-05-15 11:07:32', '2021-05-15 11:07:32'),
(12, 4, '609f5ee8b0a40059f55b76e2ee9e0d50c848416c45e316.jpg', '2021-05-15 11:10:56', '2021-05-15 11:10:56'),
(13, 4, '609f5ee90657b161e7d22dae39a296774a2564e2685c2e.jpg', '2021-05-15 11:10:57', '2021-05-15 11:10:57'),
(14, 4, '609f5ee940d6a2154789_14030713350018595428.jpg', '2021-05-15 11:10:57', '2021-05-15 11:10:57'),
(15, 4, '609f5ee981d063154789_15050414330027234971.jpg', '2021-05-15 11:10:57', '2021-05-15 11:10:57'),
(16, 4, '609f5ee9bd99b4154789_15050414330027235053.jpg', '2021-05-15 11:10:57', '2021-05-15 11:10:57'),
(17, 5, '609f6023bd0a1025f551ec031cc67a6f9fbabd369b6b2b.jpg', '2021-05-15 11:16:11', '2021-05-15 11:16:11'),
(18, 5, '609f60241dd9d11198396_17042013080052506281.jpg', '2021-05-15 11:16:12', '2021-05-15 11:16:12'),
(19, 5, '609f60246c1a621198396_17062908590054140994.jpg', '2021-05-15 11:16:12', '2021-05-15 11:16:12'),
(20, 5, '609f6024c6c883bb2290e180625f7f2c67ab687512e1ae.jpg', '2021-05-15 11:16:12', '2021-05-15 11:16:12'),
(21, 5, '609f602534fda4c10c330da5e10db307f442bcbf8640b6.jpg', '2021-05-15 11:16:13', '2021-05-15 11:16:13'),
(22, 6, '60a5edaeebaf70Open Air Terrace .jpg', '2021-05-20 10:33:42', '2021-05-20 10:33:42'),
(23, 6, '60a5edaf484521Outside Seating 2.jpg', '2021-05-20 10:33:43', '2021-05-20 10:33:43'),
(24, 6, '60a5edaf6b00c2Premium Room 5.jpg', '2021-05-20 10:33:43', '2021-05-20 10:33:43'),
(25, 6, '60a5edaf8e4093Restaurent 3.jpg', '2021-05-20 10:33:43', '2021-05-20 10:33:43'),
(26, 6, '60a5edafb9aea4unnamed.jpg', '2021-05-20 10:33:43', '2021-05-20 10:33:43'),
(27, 7, '60a5edb1d18120Open Air Terrace .jpg', '2021-05-20 10:33:45', '2021-05-20 10:33:45'),
(28, 7, '60a5edb239dae1Outside Seating 2.jpg', '2021-05-20 10:33:46', '2021-05-20 10:33:46'),
(29, 7, '60a5edb25483a2Premium Room 5.jpg', '2021-05-20 10:33:46', '2021-05-20 10:33:46'),
(30, 7, '60a5edb26f0083Restaurent 3.jpg', '2021-05-20 10:33:46', '2021-05-20 10:33:46'),
(31, 7, '60a5edb28e4ea4unnamed.jpg', '2021-05-20 10:33:46', '2021-05-20 10:33:46'),
(32, 8, '60a5edd392f360Open Air Terrace .jpg', '2021-05-20 10:34:19', '2021-05-20 10:34:19'),
(33, 8, '60a5edd3c491b1Outside Seating 2.jpg', '2021-05-20 10:34:19', '2021-05-20 10:34:19'),
(34, 8, '60a5edd415b152Premium Room 5.jpg', '2021-05-20 10:34:20', '2021-05-20 10:34:20'),
(35, 8, '60a5edd43e8523Restaurent 3.jpg', '2021-05-20 10:34:20', '2021-05-20 10:34:20'),
(36, 8, '60a5edd479a714unnamed.jpg', '2021-05-20 10:34:20', '2021-05-20 10:34:20'),
(37, 9, '60a5eed407f920DPO_3089.jpg', '2021-05-20 10:38:36', '2021-05-20 10:38:36'),
(38, 9, '60a5eed4318ee1DPO_3190.jpg', '2021-05-20 10:38:36', '2021-05-20 10:38:36'),
(39, 9, '60a5eed45598d2DPO_3204.jpg', '2021-05-20 10:38:36', '2021-05-20 10:38:36'),
(40, 9, '60a5eed475a4e3DPO_3280.jpg', '2021-05-20 10:38:36', '2021-05-20 10:38:36'),
(41, 10, '60a5ef8f8b37c02020-11-17.jpg', '2021-05-20 10:41:43', '2021-05-20 10:41:43'),
(42, 10, '60a5ef8feeee71ddsfsd.jpg', '2021-05-20 10:41:43', '2021-05-20 10:41:43'),
(43, 10, '60a5ef903a29e2ds.jpg', '2021-05-20 10:41:44', '2021-05-20 10:41:44'),
(44, 10, '60a5ef906fe6e3Hilton-Jaipur-Aurum-Restaurant.jpg', '2021-05-20 10:41:44', '2021-05-20 10:41:44'),
(45, 10, '60a5ef909d3134unnamed.jpg', '2021-05-20 10:41:44', '2021-05-20 10:41:44'),
(46, 11, '60a5f00e063770Balcony Blue Beds.jpg', '2021-05-20 10:43:50', '2021-05-20 10:43:50'),
(47, 11, '60a5f00e53c701Blue Beds - Facade.JPG', '2021-05-20 10:43:50', '2021-05-20 10:43:50'),
(48, 11, '60a5f00e6ee422Family Room for 2 Members - Shot 6.JPG', '2021-05-20 10:43:50', '2021-05-20 10:43:50'),
(49, 11, '60a5f00e958c03Penthouse Outdoor.jpg', '2021-05-20 10:43:50', '2021-05-20 10:43:50'),
(50, 11, '60a5f00eb0a534Penthouse Room v3.jpg', '2021-05-20 10:43:50', '2021-05-20 10:43:50'),
(51, 12, '60a5f09a3cd170DSC_0352.JPG', '2021-05-20 10:46:10', '2021-05-20 10:46:10'),
(52, 12, '60a5f09a737db1DSC_0378.JPG', '2021-05-20 10:46:10', '2021-05-20 10:46:10'),
(53, 12, '60a5f09a99b5a2IMG_3861.JPG', '2021-05-20 10:46:10', '2021-05-20 10:46:10'),
(54, 12, '60a5f09ac188f3IMG_3864.JPG', '2021-05-20 10:46:10', '2021-05-20 10:46:10'),
(55, 12, '60a5f09aeb9c54IMG_3880.JPG', '2021-05-20 10:46:10', '2021-05-20 10:46:10'),
(56, 12, '60a5f09b22b105room2.jpg', '2021-05-20 10:46:11', '2021-05-20 10:46:11'),
(57, 13, '60a5f110042750032_PrivateRoom_6.jpg', '2021-05-20 10:48:08', '2021-05-20 10:48:08'),
(58, 13, '60a5f1104cf471034_PrivateRoom_8.jpg', '2021-05-20 10:48:08', '2021-05-20 10:48:08'),
(59, 13, '60a5f1108c3df2034_Reception_1.jpg', '2021-05-20 10:48:08', '2021-05-20 10:48:08'),
(60, 13, '60a5f110b4d2b3047_PrivateRoom_OldBuilding_1.jpg', '2021-05-20 10:48:08', '2021-05-20 10:48:08'),
(61, 13, '60a5f110df83c451_RoofTopCafe_2.jpg', '2021-05-20 10:48:08', '2021-05-20 10:48:08'),
(62, 13, '60a5f1111148a5064_PrivateSuperDeluxe_8.jpg', '2021-05-20 10:48:09', '2021-05-20 10:48:09'),
(63, 13, '60a5f1114aec26adsafs.jpg', '2021-05-20 10:48:09', '2021-05-20 10:48:09'),
(64, 14, '60a5f16b39c4006. Dining Deck.jpg', '2021-05-20 10:49:39', '2021-05-20 10:49:39'),
(65, 14, '60a5f16b62bcd17. Main House with the Mountains behind.jpg', '2021-05-20 10:49:39', '2021-05-20 10:49:39'),
(66, 14, '60a5f16b87ece216. Guest Room - Ground Floor.jpg', '2021-05-20 10:49:39', '2021-05-20 10:49:39'),
(67, 14, '60a5f16bcb5e33Cottage 1.jpg', '2021-05-20 10:49:39', '2021-05-20 10:49:39'),
(68, 14, '60a5f16bf04894cottages.jpg', '2021-05-20 10:49:39', '2021-05-20 10:49:39'),
(69, 14, '60a5f16c1cbab5Safari-Tents.jpg', '2021-05-20 10:49:40', '2021-05-20 10:49:40'),
(70, 15, '60a5f217d1ffa02020-11-08.jpg', '2021-05-20 10:52:31', '2021-05-20 10:52:31'),
(71, 15, '60a5f218095471Common_2_.jpg', '2021-05-20 10:52:32', '2021-05-20 10:52:32'),
(72, 15, '60a5f2183fd7c2Common_6_.jpg', '2021-05-20 10:52:32', '2021-05-20 10:52:32'),
(73, 15, '60a5f2187e3803Common_12_.jpg', '2021-05-20 10:52:32', '2021-05-20 10:52:32'),
(74, 15, '60a5f218c3a184Maple_9_.jpg', '2021-05-20 10:52:32', '2021-05-20 10:52:32'),
(75, 15, '60a5f219004585Oak_4_.jpg', '2021-05-20 10:52:32', '2021-05-20 10:52:32'),
(76, 15, '60a5f21923ff86Oak_6_.jpg', '2021-05-20 10:52:33', '2021-05-20 10:52:33'),
(77, 16, '60a5f26d593810Common_2_.jpg', '2021-05-20 10:53:57', '2021-05-20 10:53:57'),
(78, 16, '60a5f26d8fd0c1dfsdfs.jpg', '2021-05-20 10:53:57', '2021-05-20 10:53:57'),
(79, 16, '60a5f26db4c382gddf.jpg', '2021-05-20 10:53:57', '2021-05-20 10:53:57'),
(80, 16, '60a5f26ddc0663IMG_20180707_105818.jpg', '2021-05-20 10:53:57', '2021-05-20 10:53:57'),
(81, 16, '60a5f26e0dddb4IMG20210320190048.jpg', '2021-05-20 10:53:58', '2021-05-20 10:53:58'),
(82, 16, '60a5f26e287ee5unnamed.jpg', '2021-05-20 10:53:58', '2021-05-20 10:53:58'),
(83, 17, '60a60235cfbe70gddf.jpg', '2021-05-20 12:01:17', '2021-05-20 12:01:17');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_loc_images`
--

CREATE TABLE `tbl_loc_images` (
  `fld_image_id` int(11) NOT NULL,
  `fld_loc_id` int(11) NOT NULL,
  `fld_loc_images` varchar(255) NOT NULL,
  `fld_loc_image_created_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `fld_loc_image_modified_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_loc_images`
--

INSERT INTO `tbl_loc_images` (`fld_image_id`, `fld_loc_id`, `fld_loc_images`, `fld_loc_image_created_date`, `fld_loc_image_modified_date`) VALUES
(1, 1, '609edb5a53f850sankalp-sharma-Wc3C8Mz-pLI-unsplash.jpg', '2021-05-15 01:49:38', '2021-05-15 01:49:38'),
(2, 1, '609edb603003f1sayan-nath-uVsc6gWDNFc-unsplash.jpg', '2021-05-15 01:49:44', '2021-05-15 01:49:44'),
(3, 1, '609edb629ff122chaitanya-maheshwari-Npq10nbL7yE-unsplash.jpg', '2021-05-15 01:49:46', '2021-05-15 01:49:46'),
(4, 1, '609edb63dd6df3himanshu-garg-6VIc-WjMn0I-unsplash.jpg', '2021-05-15 01:49:47', '2021-05-15 01:49:47'),
(5, 1, '609edb6572ca54vamshi-vangapally-fH-BSvYeX5g-unsplash.jpg', '2021-05-15 01:49:49', '2021-05-15 01:49:49'),
(6, 1, '609edb66d70145franky-ng-oR9_ckoy7oI-unsplash.jpg', '2021-05-15 01:49:50', '2021-05-15 01:49:50'),
(7, 2, '609eddd48b2330vitaly-sacred-Ff48xJIYsLo-unsplash.jpg', '2021-05-15 02:00:12', '2021-05-15 02:00:12'),
(8, 2, '609eddd6ded691vows-on-the-move-p0vZplFhKYI-unsplash.jpg', '2021-05-15 02:00:14', '2021-05-15 02:00:14'),
(9, 2, '609eddd7f1db32tatonomusic-1X3YSIuqYeM-unsplash.jpg', '2021-05-15 02:00:15', '2021-05-15 02:00:15'),
(10, 2, '609eddd8b8cf73deepak-kumar-Zwa0f934c2M-unsplash.jpg', '2021-05-15 02:00:16', '2021-05-15 02:00:16'),
(11, 2, '609eddda15dfb4ravigopal-kesari-L-rLocei9ks-unsplash.jpg', '2021-05-15 02:00:18', '2021-05-15 02:00:18'),
(12, 2, '609edddccc86d5miltiadis-fragkidis-21WEHilNV8k-unsplash.jpg', '2021-05-15 02:00:20', '2021-05-15 02:00:20'),
(13, 3, '609ee0a17aa090iftekhar-nibir-PKHwl4CK7j8-unsplash.jpg', '2021-05-15 02:12:09', '2021-05-15 02:12:09'),
(14, 3, '609ee0a34d0011parmjit-singh-WI4_abzpIEE-unsplash.jpg', '2021-05-15 02:12:11', '2021-05-15 02:12:11'),
(15, 3, '609ee0a4d49d92kumar-chandugade-65s0tySbm0I-unsplash.jpg', '2021-05-15 02:12:12', '2021-05-15 02:12:12'),
(16, 3, '609ee0a699ffe3tejj-GKdeq1Bmi30-unsplash.jpg', '2021-05-15 02:12:14', '2021-05-15 02:12:14'),
(17, 3, '609ee0a8908fb4amit-sehrawat-jganL6UsUvo-unsplash.jpg', '2021-05-15 02:12:16', '2021-05-15 02:12:16'),
(18, 3, '609ee0ab3541b5prabhu-ravichandran-0HDRXvQB3V0-unsplash.jpg', '2021-05-15 02:12:19', '2021-05-15 02:12:19'),
(19, 4, '609ee22993c5d0sayan-nath-cBmHIO-m_AU-unsplash.jpg', '2021-05-15 02:18:41', '2021-05-15 02:18:41'),
(20, 4, '609ee22c471391saketh-upadhya-7_JXfgxHTPo-unsplash.jpg', '2021-05-15 02:18:44', '2021-05-15 02:18:44'),
(21, 4, '609ee22e3f2742sreehari-devadas-wzdhKTE34mk-unsplash.jpg', '2021-05-15 02:18:46', '2021-05-15 02:18:46'),
(22, 4, '609ee23072f2f3sudheer-meduri-94UyFOhuk-k-unsplash.jpg', '2021-05-15 02:18:48', '2021-05-15 02:18:48'),
(23, 4, '609ee2337d6d44srimathi-jayaprakash-8WZaGQLzN4M-unsplash.jpg', '2021-05-15 02:18:51', '2021-05-15 02:18:51'),
(24, 4, '609ee236a0e2a5nithin-p-john-Gp6z7Oh3vE8-unsplash.jpg', '2021-05-15 02:18:54', '2021-05-15 02:18:54'),
(25, 5, '609ee4161d9a00max-brown-ORRAMzk5ErQ-unsplash.jpg', '2021-05-15 02:26:54', '2021-05-15 02:26:54'),
(26, 5, '609ee42245c611jeet-dhanoa-w5Ck718WeDc-unsplash.jpg', '2021-05-15 02:27:06', '2021-05-15 02:27:06'),
(27, 5, '609ee42452de82aditya-siva-6rDbvXzIVpQ-unsplash.jpg', '2021-05-15 02:27:08', '2021-05-15 02:27:08'),
(28, 5, '609ee4267d12f3marius-oprea--0aa5vS0Z7k-unsplash.jpg', '2021-05-15 02:27:10', '2021-05-15 02:27:10'),
(29, 5, '609ee428b70b44aditya-siva-3P1G67zNyCI-unsplash.jpg', '2021-05-15 02:27:12', '2021-05-15 02:27:12'),
(30, 6, '609f3c8c157c20shubham-amane-V5uwrd_lAEk-unsplash.jpg', '2021-05-15 08:44:20', '2021-05-15 08:44:20'),
(31, 6, '609f3c8d509211raja-sen-MzmI2I1GCnU-unsplash.jpg', '2021-05-15 08:44:21', '2021-05-15 08:44:21'),
(32, 6, '609f3c8eaef452shubham-amane--iIHCayRn4w-unsplash.jpg', '2021-05-15 08:44:22', '2021-05-15 08:44:22'),
(33, 6, '609f3c8f937a63anantha-krishna-a-y6NZHThhLj4-unsplash.jpg', '2021-05-15 08:44:23', '2021-05-15 08:44:23'),
(34, 6, '609f3c90248494raja-sen-FYos6AbcDsY-unsplash.jpg', '2021-05-15 08:44:24', '2021-05-15 08:44:24');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_package`
--

CREATE TABLE `tbl_package` (
  `fld_package_id` int(11) NOT NULL,
  `fld_package_name` varchar(255) NOT NULL,
  `fld_no_nights` int(10) NOT NULL,
  `fld_travel_comp_id` int(11) NOT NULL,
  `fld_loc_id` int(11) NOT NULL,
  `fld_hotel_id` int(11) NOT NULL,
  `fld_room_id` int(11) NOT NULL,
  `fld_food_type_id` int(11) NOT NULL,
  `fld_spot_id` int(11) NOT NULL,
  `fld_transport_id` int(11) NOT NULL,
  `fld_package_rate` varchar(20) NOT NULL,
  `fld_package_profit` varchar(20) NOT NULL,
  `fld_total_rate` int(11) NOT NULL,
  `fld_package_amt` varchar(20) NOT NULL,
  `fld_package_discount` varchar(20) NOT NULL,
  `fld_package_status` varchar(10) NOT NULL DEFAULT 'Register' COMMENT '1:Approved ; 0:Disapproved',
  `fld_package_delete` int(11) NOT NULL COMMENT '0:available,1:delete',
  `fld_package_created_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `fld_package_modified_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_package`
--

INSERT INTO `tbl_package` (`fld_package_id`, `fld_package_name`, `fld_no_nights`, `fld_travel_comp_id`, `fld_loc_id`, `fld_hotel_id`, `fld_room_id`, `fld_food_type_id`, `fld_spot_id`, `fld_transport_id`, `fld_package_rate`, `fld_package_profit`, `fld_total_rate`, `fld_package_amt`, `fld_package_discount`, `fld_package_status`, `fld_package_delete`, `fld_package_created_date`, `fld_package_modified_date`) VALUES
(2, 'Zostel Resorts,Ladakh', 3, 3, 1, 13, 34, 19, 12, 7, '8700		\r\n', '2000', 10700, '9630', '10', 'Approved', 0, '2021-05-20 13:07:53', '2021-05-20 13:18:59'),
(3, 'Hotel Rock Sea,Shimla', 4, 3, 3, 9, 24, 12, 16, 13, '10700		\r\n', '2500', 13200, '11616', '12', 'Disapprove', 0, '2021-05-20 13:09:31', '2021-05-20 13:18:18'),
(4, 'Blue Bed Resorts,Jaipur', 2, 3, 5, 11, 29, 15, 10, 5, '7300		\r\n', '1500', 8800, '8360', '5', 'Register', 0, '2021-05-20 13:10:27', '2021-05-20 13:10:27'),
(5, 'The Hawaii Comfors,Panaji', 3, 3, 6, 3, 10, 7, 3, 4, '4700		\r\n', '2000', 6700, '6365', '5', 'Register', 0, '2021-05-20 13:11:21', '2021-05-20 14:17:21'),
(6, 'Haveli Athiti,Ooty Package', 3, 3, 4, 16, 41, 2, 14, 10, '8700		\r\n', '2000', 10700, '9416', '12', 'Approved', 0, '2021-05-20 13:13:09', '2021-05-20 13:18:46'),
(7, 'Hilton Hotel,Jaipur', 5, 3, 5, 10, 28, 13, 6, 5, '8100		\r\n', '2500', 10600, '10070', '5', 'Approved', 0, '2021-05-20 13:14:55', '2021-05-20 13:18:27'),
(8, 'Lemon Tree Hotel,Andaman', 6, 3, 2, 1, 2, 4, 2, 1, '9200		\r\n', '2500', 11700, '9945', '15', 'Approved', 0, '2021-05-20 13:15:48', '2021-05-20 13:18:36'),
(9, 'Snow Valley Resorts,Shimla', 3, 3, 3, 6, 19, 11, 16, 13, '10300		\r\n', '1500', 11800, '10620', '10', 'Approved', 0, '2021-05-20 13:17:06', '2021-05-20 13:18:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_room`
--

CREATE TABLE `tbl_room` (
  `fld_room_id` int(11) NOT NULL,
  `fld_hotel_id` int(11) NOT NULL,
  `fld_room_type` varchar(8) NOT NULL,
  `fld_room_bed_type` varchar(30) NOT NULL,
  `fld_room_rate` varchar(11) NOT NULL,
  `fld_room_image` text NOT NULL,
  `fld_room_created_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `fld_room_modified_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_room`
--

INSERT INTO `tbl_room` (`fld_room_id`, `fld_hotel_id`, `fld_room_type`, `fld_room_bed_type`, `fld_room_rate`, `fld_room_image`, `fld_room_created_date`, `fld_room_modified_date`) VALUES
(1, 1, 'AC', 'Single Bed', '1500', '', '2021-05-15 10:38:10', '2021-05-15 10:38:10'),
(2, 1, 'AC', 'Double Bed', '1700', '', '2021-05-15 10:38:10', '2021-05-15 10:38:10'),
(3, 1, 'AC', 'Triple Bed', '1900', '', '2021-05-15 10:38:10', '2021-05-15 10:38:10'),
(4, 1, 'AC', 'Quad Bed', '2200', '', '2021-05-15 10:38:10', '2021-05-15 10:38:10'),
(5, 2, 'NON-AC', 'Single Bed', '1200', '', '2021-05-15 10:45:15', '2021-05-15 10:45:15'),
(6, 2, 'AC', 'Quad Bed', '2400', '', '2021-05-15 10:45:15', '2021-05-15 10:45:15'),
(7, 2, 'NON-AC', 'Double Bed', '1500', '', '2021-05-15 10:45:15', '2021-05-15 10:45:15'),
(8, 2, 'NON-AC', 'Triple Bed', '2000', '', '2021-05-15 10:45:15', '2021-05-15 10:45:15'),
(9, 3, 'AC', 'Single Bed', '1000', '', '2021-05-15 11:07:30', '2021-05-15 11:07:30'),
(10, 3, 'AC', 'Double Bed', '1200', '', '2021-05-15 11:07:30', '2021-05-15 11:07:30'),
(11, 3, 'AC', 'Triple Bed', '1400', '', '2021-05-15 11:07:30', '2021-05-15 11:07:30'),
(12, 4, 'AC', 'Double Bed', '1500', '', '2021-05-15 11:10:56', '2021-05-15 11:10:56'),
(13, 4, 'AC', 'Single Bed', '1000', '', '2021-05-15 11:10:56', '2021-05-15 11:10:56'),
(14, 5, 'AC', 'Single Bed', '1200', '', '2021-05-15 11:16:10', '2021-05-15 11:16:10'),
(15, 5, 'AC', 'Double Bed', '1400', '', '2021-05-15 11:16:11', '2021-05-15 11:16:11'),
(16, 5, 'AC', 'Triple Bed', '1600', '', '2021-05-15 11:16:11', '2021-05-15 11:16:11'),
(17, 5, 'AC', 'Quad Bed', '1800', '', '2021-05-15 11:16:11', '2021-05-15 11:16:11'),
(18, 6, 'NON-AC', 'Single Bed', '1500', '', '2021-05-20 10:33:42', '2021-05-20 10:33:42'),
(19, 6, 'AC', 'Double Bed', '1800', '', '2021-05-20 10:33:42', '2021-05-20 10:33:42'),
(20, 7, 'NON-AC', 'Single Bed', '1500', '', '2021-05-20 10:33:45', '2021-05-20 10:33:45'),
(21, 7, 'AC', 'Double Bed', '1800', '', '2021-05-20 10:33:45', '2021-05-20 10:33:45'),
(22, 8, 'NON-AC', 'Single Bed', '1500', '', '2021-05-20 10:34:19', '2021-05-20 10:34:19'),
(23, 8, 'AC', 'Double Bed', '1800', '', '2021-05-20 10:34:19', '2021-05-20 10:34:19'),
(24, 9, 'NON-AC', 'Double Bed', '2200', '', '2021-05-20 10:38:35', '2021-05-20 10:38:35'),
(25, 9, 'NON-AC', 'Single Bed', '1900', '', '2021-05-20 10:38:35', '2021-05-20 10:38:35'),
(26, 10, 'AC', 'Single Bed', '2000', '', '2021-05-20 10:41:43', '2021-05-20 10:41:43'),
(27, 10, 'AC', 'Double Bed', '2200', '', '2021-05-20 10:41:43', '2021-05-20 10:41:43'),
(28, 10, 'AC', 'Quad Bed', '2600', '', '2021-05-20 10:41:43', '2021-05-20 10:41:43'),
(29, 11, 'AC', 'Single Bed', '1800', '', '2021-05-20 10:43:49', '2021-05-20 10:43:49'),
(30, 11, 'AC', 'Triple Bed', '2200', '', '2021-05-20 10:43:49', '2021-05-20 10:43:49'),
(31, 12, 'AC', 'Single Bed', '2300', '', '2021-05-20 10:46:10', '2021-05-20 10:46:10'),
(32, 12, 'AC', 'Double Bed', '2600', '', '2021-05-20 10:46:10', '2021-05-20 10:46:10'),
(33, 13, 'AC', 'Single Bed', '2000', '', '2021-05-20 10:48:07', '2021-05-20 10:48:07'),
(34, 13, 'AC', 'Double Bed', '2200', '', '2021-05-20 10:48:07', '2021-05-20 10:48:07'),
(35, 13, 'AC', 'Triple Bed', '2400', '', '2021-05-20 10:48:07', '2021-05-20 10:48:07'),
(36, 14, 'AC', 'Single Bed', '2200', '', '2021-05-20 10:49:38', '2021-05-20 10:49:38'),
(37, 14, 'AC', 'Double Bed', '2400', '', '2021-05-20 10:49:39', '2021-05-20 10:49:39'),
(38, 15, 'NON-AC', 'Single Bed', '1800', '', '2021-05-20 10:52:31', '2021-05-20 10:52:31'),
(39, 15, 'NON-AC', 'Double Bed', '2000', '', '2021-05-20 10:52:31', '2021-05-20 10:52:31'),
(40, 16, 'AC', 'Single Bed', '2300', '', '2021-05-20 10:53:57', '2021-05-20 10:53:57'),
(41, 16, 'NON-AC', 'Double Bed', '2400', '', '2021-05-20 10:53:57', '2021-05-20 10:53:57'),
(42, 17, 'AC', 'Single Bed', '8778', '', '2021-05-20 12:01:17', '2021-05-20 12:01:17');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_spot`
--

CREATE TABLE `tbl_spot` (
  `fld_spot_id` int(11) NOT NULL,
  `fld_loc_id` int(11) NOT NULL,
  `fld_spot_name` varchar(30) NOT NULL,
  `fld_spot_description` text NOT NULL,
  `fld_spot_distance` varchar(10) NOT NULL,
  `fld_spot_images` text NOT NULL,
  `fld_spot_nearby_visit` varchar(255) NOT NULL,
  `fld_spot_created_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `fld_spot_modifed_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_spot`
--

INSERT INTO `tbl_spot` (`fld_spot_id`, `fld_loc_id`, `fld_spot_name`, `fld_spot_description`, `fld_spot_distance`, `fld_spot_images`, `fld_spot_nearby_visit`, `fld_spot_created_date`, `fld_spot_modifed_date`) VALUES
(1, 2, 'Havelock Island', 'Havelock Island is one of the primary destinations of Andaman and Nicobar Islands. It is famed for its pristine beauty that goes unmatched when it comes to untouched and unexplored natural beauty and virgin forests of earth.', '2', '609f3c8d509211raja-sen-MzmI2I1GCnU-unsplash.jpg', 'Neil Island', '2021-05-15 09:03:27', '2021-05-19 13:21:14'),
(2, 2, ' Ross Island', 'Ross Island caries the rich heritage of the British legacy since the time when India was under the British Rule. It was named after Sir Daniel Ross who was British Marine Surveyor.', '4', '609eddd48b2330vitaly-sacred-Ff48xJIYsLo-unsplash.jpg', 'North Bay Island', '2021-05-15 09:06:47', '2021-05-19 13:23:05'),
(3, 6, 'Agonda Beach', 'Agonda beach in South Goa is a must visit. 39.2 kilometers from Margao, this is an isolated stretch of sand lined by palm groves. It is a very quiet, peaceful, and picturesque beach with few tourists', '2.5', '609eddd7f1db32tatonomusic-1X3YSIuqYeM-unsplash.jpg', 'Fort Aguada', '2021-05-15 09:11:07', '2021-05-20 09:09:48'),
(4, 6, 'Ravalpind Beach', 'Ross Island caries the rich heritage of the British legacy since the time when India was under the British Rule. It was named after Sir Daniel Ross who was British Marine Surveyor.', '4', '47968.jpg', 'North Bay ', '2021-05-15 09:06:47', '2021-05-20 09:09:29'),
(5, 5, 'City Palace', 'City Palace has stood at the heart of the Old City of Jaipur for nearly three centuries, shortly after Maharaja Sawai Jai Singh II decided to relocate his court from the city of Amber.', '4', '23643.jpg', 'Chandra Mahal,Mubarak Mahal', '2021-05-20 09:13:27', '2021-05-20 09:13:27'),
(6, 5, 'Janar Mantar', 'At first glance, Jantar Mantar may look to be nothing more than a bunch of larger-than-life abstract sculptures. ', '2', '38415.jpg', 'Hawa Mahal', '2021-05-20 09:13:29', '2021-05-20 09:25:30'),
(10, 5, 'Hawa Mahal', 'The landmark was built in 1799 to allow royal ladies to watch festivals on the street without being seen by the public. Its 953 windows allow plenty of breeze to pass through, making it an ideal summer palace', '4', '319413.jpg', 'Ambar Fort', '2021-05-20 09:32:28', '2021-05-20 09:32:28'),
(11, 1, 'Tso Moriri lake ', 'Imagine a sparkling blue lake nestled in the midst of rugged surroundings. That, my friends, is Tso Moriri lake. Being 15000 ft above sea level in a rather rough environment is this tiny paradise.', '2', '77081.jpg', 'Hemis National Park ', '2021-05-20 09:35:23', '2021-05-20 09:35:23'),
(12, 1, 'Diskit Monastery', 'Located at the heart of Nubra valley is this quaint Diskit Monastery', '1', '167682.jpg', 'Shanti Stupa', '2021-05-20 09:36:40', '2021-05-20 09:36:40'),
(13, 4, 'Ooty Lake ', 'One of the most important parts of every Ooty tour, Ooty lake is indeed a place to visit. nIt is an artificial lake that was built for fishing purposes. ', '2.2', '134017.jpg', 'Avalanche Lake', '2021-05-20 09:38:25', '2021-05-20 09:38:25'),
(14, 4, 'Ooty Botanical Gardens', 'Maintained by the Horticultural Department of Tamil Nadu, Botanical Gardens of Ooty is undeniably one of the most popular places to see in Ooty', '3', '657667.jpg', 'Deer Park', '2021-05-20 09:40:21', '2021-05-20 09:40:21'),
(15, 3, 'The Ridge of Shimla', 'The Ridge may well be defined as the heart of Shimla in terms of location and tourist attractions.', '1.5', '324747.jpg', 'Kalika Temple', '2021-05-20 09:42:54', '2021-05-20 09:42:54'),
(16, 3, 'Kalka-Shimla Railwa', 'The Kalka-Shimla train ride is a highpoint of Shimla tourism and for a good reason. Built in 1898, this narrow-gauge railway has recently been added to the mountain railways of India World Heritage Site by UNESCO', '1.2', '615543.jpg', 'Kufri', '2021-05-20 09:44:13', '2021-05-20 09:44:13'),
(17, 3, 'Himachal State Museum', 'It has a rich collection of miniature paintings, stone sculptures, coins, weapons, armors, dolls, jewelry, handicrafts, and numismatic articles discovered in the valley.', '2.3', '396026.jpg', 'Tara Devi Temple', '2021-05-20 09:45:30', '2021-05-20 09:45:30');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_tour_location`
--

CREATE TABLE `tbl_tour_location` (
  `fld_loc_id` int(11) NOT NULL,
  `fld_loc_name` varchar(30) NOT NULL,
  `fld_loc_country` varchar(30) NOT NULL,
  `fld_loc_state` varchar(30) NOT NULL,
  `fld_loc_description` text NOT NULL,
  `fld_loc_nearbyplace` text NOT NULL,
  `fld_loc_rate_from_mumbai` varchar(15) NOT NULL,
  `fld_location_delete` varchar(3) NOT NULL COMMENT '0:Available, 1:Delete',
  `fld_location_created_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `fld_location_modified_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_tour_location`
--

INSERT INTO `tbl_tour_location` (`fld_loc_id`, `fld_loc_name`, `fld_loc_country`, `fld_loc_state`, `fld_loc_description`, `fld_loc_nearbyplace`, `fld_loc_rate_from_mumbai`, `fld_location_delete`, `fld_location_created_date`, `fld_location_modified_date`) VALUES
(1, 'Ladakh', 'India', 'J & K', 'Eagerly anticipated, summer is the peak tourist season in Ladakh and temperatures around this time range from 30 degree Celsius to a minimum 5 degree Celsius. Ladakh is a region administered by India as a union territory. It was part of the Jammu and Kashmir from 1846 to 1952, and part of Jammu and Kashmir from 1952 to 2019. Follwing the demand for a separate state since the 1930s, Ladakh was declared a separate union territory in 2019.', 'Pangong Tso Lake ,Thiksey Monastery, Markha Valley', '4000', '', '2021-05-15 01:49:37', '2021-05-15 01:49:37'),
(2, 'Andaman', 'India', 'Andaman & Nicobar', 'The Andaman Islands are an Indian archipelago in the Bay of Bengal. These roughly 300 islands are known for their palm-lined, white-sand beaches, mangroves and tropical rainforests. Coral reefs supporting marine life such as sharks and rays make for popular diving and snorkeling sites. Indigenous Andaman Islanders inhabit the more remote islands, many of which are off limits to visitors.Havelock Island is one of the primary destinations of Andaman. ', 'Swaraj Dweep, Port Blair, Baratang Island', '5500', '', '2021-05-15 02:00:12', '2021-05-15 02:07:05'),
(3, 'Shimla', 'India', 'Himachal Pradesh', 'Shimla is the capital of the northern Indian state of Himachal Pradesh, in the Himalayan foothills. Once the summer capital of British India, it remains the terminus of the narrow-gauge Kalka-Shimla Railway, completed in 1903. Itâ€™s also known for the handicraft shops that line The Mall, a pedestrian avenue, as well as the Lakkar Bazaar, a market specializing in wooden toys and crafts.', 'Kufri, Chail, Mashobara, Narkanda, Kasauli', '6000', '', '2021-05-15 02:12:08', '2021-05-15 02:12:08'),
(4, 'Ooty', 'India', 'Tamil Nadu', 'Mysore-Ooty Road or Mysore-Udhagamandalam Road is a tourist trail of South India starting from Mysore in Karnataka state and ending in Udhagamandalam in Nilgiri district of Tamil Nadu state, India. Both routes pass through Bandipur National park in Karnataka and Mudumalai National Park in Tamil Nadu.', 'Bellikkal , Coonoor, Kotagiri, Bandipur', '4500', '', '2021-05-15 02:18:41', '2021-05-20 10:50:34'),
(5, 'Jaipur', 'India', 'Rajasthan', 'aipur is the capital of Indiaâ€™s Rajasthan state. It evokes the royal family that once ruled the region and that, in 1727, founded what is now called the Old City, or â€œPink Cityâ€ for its trademark building color. At the center of its stately street grid (notable in India) stands the opulent, colonnaded City Palace complex. With gardens, courtyards and museums, part of it is still a royal residence', 'Sambhar Lake, Bhangarh Fort', '4000', '', '2021-05-15 02:26:53', '2021-05-15 02:26:53'),
(6, 'Panaji', 'India', 'Goa', 'Goa is a state in western India with coastlines stretching along the Arabian Sea. Its long history as a Portuguese colony prior to 1961 is evident in its preserved 17th-century churches and the areaâ€™s tropical spice plantations. Goa is also known for its beaches, ranging from popular stretches at Baga and Palolem to those in laid-back fishing villages such as Agonda', 'Gokarna, Dandeli, Tarkarli, Jog Falls', '2500', '', '2021-05-15 08:44:19', '2021-05-19 14:28:50');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_transport_mode`
--

CREATE TABLE `tbl_transport_mode` (
  `fld_transport_id` int(11) NOT NULL,
  `fld_transport_type` text NOT NULL,
  `fld_loc_id` int(11) NOT NULL,
  `fld_transport_rate` varchar(20) NOT NULL,
  `fld_transport_created_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `fld_transport_modified_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_transport_mode`
--

INSERT INTO `tbl_transport_mode` (`fld_transport_id`, `fld_transport_type`, `fld_loc_id`, `fld_transport_rate`, `fld_transport_created_date`, `fld_transport_modified_date`) VALUES
(1, 'Air', 2, '2000', '2021-05-15 08:46:45', '2021-05-15 08:46:45'),
(2, 'Air', 6, '2000', '2021-05-15 08:54:11', '2021-05-15 08:54:11'),
(3, 'Railway', 6, '1500', '2021-05-15 08:54:11', '2021-05-15 08:54:11'),
(4, 'Bus', 6, '1000', '2021-05-15 08:54:11', '2021-05-15 08:54:11'),
(5, 'Railway', 5, '1500', '2021-05-15 08:55:35', '2021-05-15 08:55:35'),
(6, 'Bus', 5, '950', '2021-05-15 08:55:35', '2021-05-15 08:55:35'),
(7, 'Bus', 1, '2500', '2021-05-15 08:56:38', '2021-05-15 08:56:38'),
(8, 'Railway', 1, '3200', '2021-05-15 08:56:38', '2021-05-15 08:56:38'),
(9, 'Air', 4, '2300', '2021-05-15 08:57:07', '2021-05-15 08:57:07'),
(10, 'Railway', 4, '1800', '2021-05-15 08:57:07', '2021-05-15 08:57:07'),
(11, 'Bus', 4, '1500', '2021-05-15 08:57:07', '2021-05-15 08:57:07'),
(12, 'Air', 3, '3500', '2021-05-15 08:57:34', '2021-05-15 08:57:34'),
(13, 'Railway', 3, '2500', '2021-05-15 08:57:35', '2021-05-19 14:35:34'),
(14, 'Bus', 3, '2000', '2021-05-15 08:57:35', '2021-05-19 15:11:50');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_travel_company`
--

CREATE TABLE `tbl_travel_company` (
  `fld_travel_comp_id` int(11) NOT NULL,
  `fld_travel_comp_name` varchar(30) NOT NULL,
  `fld_travel_comp_gstin` varchar(13) NOT NULL,
  `fld_travel_comp_email` varchar(255) NOT NULL,
  `fld_travel_comp_password` varchar(50) NOT NULL,
  `fld_travel_comp_photo` varchar(100) NOT NULL,
  `fld_travel_comp_address` text NOT NULL,
  `fld_travel_comp_mobileno` varchar(11) NOT NULL,
  `fld_travel_comp_location_served` text NOT NULL,
  `fld_travel_comp_status` varchar(18) NOT NULL DEFAULT 'Register',
  `fld_travel_comp_created_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `fld_travel_comp_modified_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_travel_company`
--

INSERT INTO `tbl_travel_company` (`fld_travel_comp_id`, `fld_travel_comp_name`, `fld_travel_comp_gstin`, `fld_travel_comp_email`, `fld_travel_comp_password`, `fld_travel_comp_photo`, `fld_travel_comp_address`, `fld_travel_comp_mobileno`, `fld_travel_comp_location_served`, `fld_travel_comp_status`, `fld_travel_comp_created_date`, `fld_travel_comp_modified_date`) VALUES
(1, 'Sanap Travels', '85941SFSD616S', 'sanaptravels@gmail.com', 'sanaptravels', '', 'Vrudavan Nagar,Near Murari Nagar, Nashik-422010', '98745632112', 'Manali,Ladakh', 'disapproved', '2021-05-15 00:39:08', '2021-05-15 01:02:37'),
(3, 'Walhekar Travel', '9466464DSV464', 'walhekar@gmail.com', 'walhekar', '884629.jpg', 'Mumbai', '9786454453', 'Manali,Ladakh,Andaman,Shimla,Jaipur,Ooty,Panaji', 'approved', '2021-05-15 11:24:40', '2021-05-20 09:06:06'),
(4, 'Bhavani Tour & Travel', '646494SFS6132', 'bhavani@gmail.com', 'bhavani', '', 'Pune', '98656461465', 'Ladakh,Shimla', 'Register', '2021-05-19 23:40:37', '2021-05-20 08:59:33');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `fld_user_id` int(11) NOT NULL,
  `fld_user_name` varchar(30) NOT NULL,
  `fld_user_email` varchar(255) NOT NULL,
  `fld_user_password` varchar(50) NOT NULL,
  `fld_user_mobileno` varchar(11) NOT NULL,
  `fld_user_address` text NOT NULL,
  `fld_user_photo` text NOT NULL,
  `fld_user_created_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `fld_user_modified_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`fld_user_id`, `fld_user_name`, `fld_user_email`, `fld_user_password`, `fld_user_mobileno`, `fld_user_address`, `fld_user_photo`, `fld_user_created_date`, `fld_user_modified_date`) VALUES
(2, 'Rahul Singh', 'rahul@gmail.com', 'rahul', '7894561255', 'Nashik', '991902.jpg', '2021-05-15 10:17:38', '2021-05-15 10:19:38');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user_feedback`
--

CREATE TABLE `tbl_user_feedback` (
  `fld_feedback_id` int(11) NOT NULL,
  `fld_booking_id` int(11) NOT NULL,
  `fld_user_id` int(11) NOT NULL,
  `fld_user_name` varchar(30) NOT NULL,
  `fld_user_email` varchar(30) NOT NULL,
  `fld_user_feedback` text NOT NULL,
  `fld_feedback_created_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `fld_feedback_modified_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user_feedback`
--

INSERT INTO `tbl_user_feedback` (`fld_feedback_id`, `fld_booking_id`, `fld_user_id`, `fld_user_name`, `fld_user_email`, `fld_user_feedback`, `fld_feedback_created_date`, `fld_feedback_modified_date`) VALUES
(1, 3, 2, 'Rahul Singh', 'rahul@gmail.com', 'Very Booking ', '2021-05-20 13:57:41', '2021-05-20 13:57:41'),
(2, 2, 2, 'Rahul Singh', 'rahul@gmail.com', '\r\nBy Train: The closest you can get to Ladakh by train is the Jammu Tawi Station. From there, you will have to pursue road transportation, by either using public trans', '2021-05-20 13:58:19', '2021-05-20 13:58:19'),
(3, 1, 2, 'Rahul Singh', 'rahul@gmail.com', 'Mast', '2021-05-20 14:31:26', '2021-05-20 14:31:26');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`fld_admin_id`);

--
-- Indexes for table `tbl_booking`
--
ALTER TABLE `tbl_booking`
  ADD PRIMARY KEY (`fld_booking_id`);

--
-- Indexes for table `tbl_custumize_booking`
--
ALTER TABLE `tbl_custumize_booking`
  ADD PRIMARY KEY (`fld_booking_id`);

--
-- Indexes for table `tbl_custumize_package`
--
ALTER TABLE `tbl_custumize_package`
  ADD PRIMARY KEY (`fld_custumize_id`);

--
-- Indexes for table `tbl_enquiry`
--
ALTER TABLE `tbl_enquiry`
  ADD PRIMARY KEY (`fld_enquiry_id`);

--
-- Indexes for table `tbl_food_type`
--
ALTER TABLE `tbl_food_type`
  ADD PRIMARY KEY (`fld_food_type_id`);

--
-- Indexes for table `tbl_hotel`
--
ALTER TABLE `tbl_hotel`
  ADD PRIMARY KEY (`fld_hotel_id`);

--
-- Indexes for table `tbl_hotel_image`
--
ALTER TABLE `tbl_hotel_image`
  ADD PRIMARY KEY (`fld_hotel_image_id`);

--
-- Indexes for table `tbl_loc_images`
--
ALTER TABLE `tbl_loc_images`
  ADD PRIMARY KEY (`fld_image_id`);

--
-- Indexes for table `tbl_package`
--
ALTER TABLE `tbl_package`
  ADD PRIMARY KEY (`fld_package_id`);

--
-- Indexes for table `tbl_room`
--
ALTER TABLE `tbl_room`
  ADD PRIMARY KEY (`fld_room_id`);

--
-- Indexes for table `tbl_spot`
--
ALTER TABLE `tbl_spot`
  ADD PRIMARY KEY (`fld_spot_id`);

--
-- Indexes for table `tbl_tour_location`
--
ALTER TABLE `tbl_tour_location`
  ADD PRIMARY KEY (`fld_loc_id`);

--
-- Indexes for table `tbl_transport_mode`
--
ALTER TABLE `tbl_transport_mode`
  ADD PRIMARY KEY (`fld_transport_id`);

--
-- Indexes for table `tbl_travel_company`
--
ALTER TABLE `tbl_travel_company`
  ADD PRIMARY KEY (`fld_travel_comp_id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`fld_user_id`);

--
-- Indexes for table `tbl_user_feedback`
--
ALTER TABLE `tbl_user_feedback`
  ADD PRIMARY KEY (`fld_feedback_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `fld_admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_booking`
--
ALTER TABLE `tbl_booking`
  MODIFY `fld_booking_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_custumize_booking`
--
ALTER TABLE `tbl_custumize_booking`
  MODIFY `fld_booking_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_custumize_package`
--
ALTER TABLE `tbl_custumize_package`
  MODIFY `fld_custumize_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_enquiry`
--
ALTER TABLE `tbl_enquiry`
  MODIFY `fld_enquiry_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_food_type`
--
ALTER TABLE `tbl_food_type`
  MODIFY `fld_food_type_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `tbl_hotel`
--
ALTER TABLE `tbl_hotel`
  MODIFY `fld_hotel_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `tbl_hotel_image`
--
ALTER TABLE `tbl_hotel_image`
  MODIFY `fld_hotel_image_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84;

--
-- AUTO_INCREMENT for table `tbl_loc_images`
--
ALTER TABLE `tbl_loc_images`
  MODIFY `fld_image_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `tbl_package`
--
ALTER TABLE `tbl_package`
  MODIFY `fld_package_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tbl_room`
--
ALTER TABLE `tbl_room`
  MODIFY `fld_room_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `tbl_spot`
--
ALTER TABLE `tbl_spot`
  MODIFY `fld_spot_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `tbl_tour_location`
--
ALTER TABLE `tbl_tour_location`
  MODIFY `fld_loc_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_transport_mode`
--
ALTER TABLE `tbl_transport_mode`
  MODIFY `fld_transport_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tbl_travel_company`
--
ALTER TABLE `tbl_travel_company`
  MODIFY `fld_travel_comp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `fld_user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_user_feedback`
--
ALTER TABLE `tbl_user_feedback`
  MODIFY `fld_feedback_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
