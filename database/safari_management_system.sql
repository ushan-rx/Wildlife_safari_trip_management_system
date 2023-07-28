-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 28, 2023 at 06:40 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `safari_management_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `accommodation`
--

CREATE TABLE `accommodation` (
  `aid` varchar(8) NOT NULL,
  `hotel_name` varchar(64) NOT NULL,
  `hotel_address` varchar(82) NOT NULL,
  `total_room_count` int(11) NOT NULL,
  `price` float NOT NULL,
  `pkg_id` varchar(8) NOT NULL,
  `rating` int(11) NOT NULL,
  `hotel_description` text NOT NULL,
  `image` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `accommodation`
--

INSERT INTO `accommodation` (`aid`, `hotel_name`, `hotel_address`, `total_room_count`, `price`, `pkg_id`, `rating`, `hotel_description`, `image`) VALUES
('AI000001', 'Wild Trails Yala by Suri', 'Yala', 20, 80, 'PK000001', 3, '<p>Boasting a garden and views of garden, Wild Trails Yala by Suri is a sustainable luxury tent situated in Yala, 14 km from Tissa Wewa. \r\n          This property offers access to a terrace and free private parking.<br>\r\n          At the luxury tent, units have a desk. Each unit has a private bathroom with a walk-in shower, a hair dryer and free toiletries. <br>\r\n          À la carte and continental breakfast options with local specialities, fresh pastries and fruits are available each morning at the luxury tent. \r\n          At Wild Trails Yala by Suri, the family-friendly restaurant is open for dinner and lunch and specialises in local cuisine.</p><br>\r\n         <b> Most popular facilities:</b>\r\n            \r\n              <li>Free parking</li>\r\n              <li>Non-smoking rooms</li>\r\n              <li>Restaurant</li>\r\n              <li>Breakfast</li>\r\n              \r\n              <h3></h3>\r\n   \r\n          ', 'images/hotels/h15.jpg'),
('AI000002', 'Olivi Palace Udawalawe', 'Udawalawe', 16, 60, 'PK000002', 2, ' <p>All guest rooms in the hotel are fitted with air conditioning, a seating area, a flat-screen TV with satellite channels, a safety deposit box and a private bathroom with a bidet. All rooms have a kettle, while selected rooms also offer a kitchen with a fridge and an oven.\r\n           At Jungle Paradise rooms have bed linen and towels.<br><br>\r\n           Breakfast is available every morning, and includes à la carte, continental and Asian options.\r\n           Guests at the accommodation will be able to enjoy activities in and around Udawalawe, like hiking.</p><br>\r\n        <b>Most popular facilities:</b>\r\n        <li>Breakfast</li>\r\n        <li>Bar</li>\r\n        <li>Spa and wellness centre</li>\r\n        <li>Airport shuttle</li>\r\n        <li>Free parking</li>\r\n        \r\n        <h3></h3>\r\n ', 'images/hotels/h14.jpg'),
('AI000003', 'Jungle Paradise Udawalawe', 'Udawalawe', 18, 30, 'PK000001', 1, '<p>Set in Udawalawe, 11 km from Udawalawe National Park, Jungle Paradise offers accommodation with free bikes, free private parking, an outdoor swimming pool and a garden.<br>\r\n           Boasting a 24-hour front desk, this property also has a restaurant and a terrace. The hotel also features free WiFi as well as a paid airport shuttle service.<br>\r\n          All guest rooms in the hotel are fitted with air conditioning, a seating area, a flat-screen TV with satellite channels.</p><br>\r\n        <b>Most popular facilities:</b>\r\n        <li>Tea/coffee maker in all rooms</li>\r\n        <li>Non-smoking rooms</li>\r\n        <li>Restaurant</li>\r\n        <li>Family rooms</li>\r\n        <li>Bar</li>\r\n        <li>Spa and wellness centre</li>\r\n\r\n        <h3></h3>\r\n    \r\n        ', 'images/hotels/h11.jpg'),
('AI000004', 'Muwan Palassa Resort Minneriya', 'Minneriya', 21, 45, 'PK000001', 4, '<p>Set in Minneriya, 42 km from Pidurangala Rock, Muwan Palassa Resort offers accommodation with an outdoor swimming pool, free private parking, a garden and a shared lounge.\r\n           Featuring a terrace, the 4-star resort has air-conditioned rooms with free WiFi, each with a private bathroom.<br>\r\n            The accommodation provides room service and a 24-hour front desk for guests.<br>\r\n             At the resort, every room includes a desk. Certain rooms will provide you with a kitchenette with a fridge, a microwave and a minibar.</p><br>\r\n        <b>Most popular facilities:</b>\r\n        <li>Free parking</li>\r\n        <li>  Restaurant</li>\r\n        <li> Tea/coffee maker in all rooms</li>\r\n          \r\n        \r\n        \r\n        <h3></h3>\r\n     ', 'images/hotels/h5.jpg'),
('AI000005', 'The Deer Park Hotel Minneriya', 'Minneriya', 10, 90, 'PK000002', 5, '<p>The Deer Park Hotel is located on the banks of Giritale Reservoir, 10 km from Polonnaruwa Wihara.\r\n           The stylish 5-star hotel offers an outdoor pool, 4 dining options and free parking.<br>\r\n          Spacious guestrooms are fitted with a work desk, tea/coffee making facilities and a TV with satellite channels. \r\n          The living area comes with a day bed.<br>\r\n           The tour desk can help to arrange hot air balloon and safari trips. Laundry and dry cleaning services are offered.</p><br>\r\n        <b>Most popular facilities:</b>\r\n        <li>Spa and wellness centre</li>\r\n        <li>Pool - outdoor (kids)</li>\r\n        <li>Tea/coffee maker in all rooms</li>\r\n        <li>Breakfast</li>\r\n        \r\n        <h3></h3>\r\n    ', 'images/hotels/h12.jpeg'),
('AI000006', 'Leopard Trails Yala', 'Yala', 17, 55, 'PK000003', 2, '<p>Nestled amidst forest and lake bordering the national park and close to the quieter Katagamuwa gate, Leopard Trails tented camp allows guests to experience the wilderness in comfortable air conditioned deluxe tents or in larger suites with plunge pools.<br><br>\r\n           Expert naturalists lead shared game drives, nature walks, give an introduction to stargazing, and also host guests for drinks around the campfire, before dining by candlelight!\r\n          An approximate 4 hours drive from the Colombo city and the Bandaranaike International Airport.</p>\r\n          <br>\r\n        <b>Most popular facilities:</b>\r\n        <li>Family rooms</li>\r\n        <li>Airport shuttle</li>\r\n        <li>Bar</li>\r\n        <li>Non-smoking rooms</li>\r\n        \r\n        <h3></h3>\r\n        ', 'images/hotels/h10.jpg'),
('AI000007', 'Lavenro Hotel & Resort Kanneliya', 'Kanneliya', 18, 25, 'PK000001', 1, '<p>Among the facilities of this property are a restaurant, a 24-hour front desk and room service, along with free WiFi throughout the property.\r\n           At the hotel, all rooms include a desk. Each room is fitted with a kettle and a private bathroom, while some rooms include a balcony. \r\n           All guest rooms will provide guests with a fridge.<br>\r\n          A continental, buffet or Full English/Irish breakfast is available each morning at the property.</p><br>\r\n        <b>Most popular facilities:</b>\r\n        <li>Outdoor swimming pool</li>\r\n        <li> Non-smoking rooms</li>\r\n        <li> Free parking</li>\r\n        <li> Free WiFi</li>\r\n        <li>Spa and wellness centre</li>\r\n        \r\n      \r\n        \r\n        <h3></h3>\r\n        ', 'images/hotels/h9.jpg'),
('AI000008', 'Aggressor Safari Lodge Wilpaththu', 'Wilpaththu', 16, 65, 'PK000003', 5, ' <p>This 5-star hotel has air-conditioned rooms with a private bathroom. \r\n            Nature Park Anuradhapura is 41 km from the hotel and Anuradhapura Railway Station is 41 km away.\r\n            At the hotel, all rooms come with a wardrobe.<br><br> \r\n            Rooms include a safety deposit box and certain rooms are fitted with pool views. \r\n            The rooms will provide guests with a desk and a kettle.\r\n           Guests at Aggressor Safari Lodge can enjoy a continental or an Asian breakfast.</p><br>\r\n          <b>Most popular facilities:</b>\r\n          <li>Outdoor swimming pool</li>\r\n          <li> Room service</li>\r\n          <li> Free parking</li>\r\n          <li> Breakfast</li>\r\n          <li>Tea/coffee maker in all room</li>\r\n       \r\n          \r\n          <h3></h3>\r\n    ', 'images/hotels/h4.jpg'),
('AI000009', 'Hotel Le Green Udawalawe', 'Udawalawe', 19, 85, 'PK000002', 2, '<p>Situated in Udawalawe, 8.4 km from Udawalawe National Park, Hotel Le Green Udawalawe features accommodation with free bikes, free private parking, an outdoor swimming pool and a garden.<br><br>\r\n           Among the facilities of this property are a restaurant, a shared lounge and room service, along with free WiFi.\r\n            The accommodation offers airport transfers, while a car rental service is also available.<br>\r\n          The hotel offers a Full English/Irish or Asian breakfast.</p>\r\n          <br>\r\n        <b>Most popular facilities:</b>\r\n        <li>Breakfast</li>\r\n        <li>Outdoor swimming pool</li>\r\n        <li>Free parking</li>\r\n        <li>Restaurant</li>\r\n        <li>Tea/coffee maker in all room</li>\r\n\r\n        \r\n        <h3></h3>\r\n   ', 'images/hotels/h3.jpg'),
('AI000010', 'Miracle Resorts & Villas Minneriya', 'Minneriya', 16, 70, 'PK000002', 1, '<p>Featuring family rooms, this property also provides guests with a sun terrace.\r\n           The accommodation offers a 24-hour front desk, a tour desk and currency exchange for guests.<br>\r\n          The hotel will provide guests with air-conditioned rooms offering a desk, a kettle, a fridge, a minibar, a safety deposit box, a flat-screen TV, a balcony and a private bathroom with a shower. <br>\r\n          Breakfast is available every morning, and includes à la carte, Full English/Irish and Asian options.</p> <br>\r\n        <b>Most popular facilities:</b>\r\n        <li>Facilities for disabled guests</li>\r\n          <li> Family rooms</li>\r\n            <li>Restaurant</li>\r\n              <li>Tea/coffee maker in all room</li>\r\n       \r\n        \r\n        <h3></h3>\r\n     ', 'images/hotels/h2.jpg'),
('AI000011', 'Mahoora - Wilpaththu by Eco Team', 'Wilpaththu', 16, 83, 'PK000002', 5, '<p>Mahoora - Wilpaththu by Eco Team provides tented accommodations at the border of Wilpaththu National Park, the largest national park in Sri Lanka and famous for its leopards.<br>\r\n          Fitted with carpeted flooring, all tents come with an outdoor living area and a private bathroom with hot-water showers.<br><br>\r\n           umbrellas and mosquito nets are included. Free WiFi is available in the public areas of the property.\r\n           Couples particularly like the location</p><br>\r\n        <b>Most popular facilities:</b>\r\n        <li>Free parking</li>\r\n        <li> Free WiFi</li>\r\n        <li>Family rooms</li>\r\n        <li>Breakfast</li>\r\n        <li>Room service</li>\r\n        \r\n        \r\n        <h3></h3>\r\n   ', 'images/hotels/h6.jpg'),
('AI000012', 'Rainforest Lodge Kanneliya', 'Kanneliya', 10, 93, 'PK000003', 2, '<p>Offers fan-cooled rooms with a balcony and free WiFi in its common areas. \r\n          A spa, restaurant and free private parking are available at this lodge.\r\n          Each room comes with a seating area and private bathroom with shower and free toiletries.<br><br>\r\n          All units in the hotel are equipped with a kettle. At Rainforest Nest every room has a flat-screen TV, a private bathroom, and a balcony with a mountain view.\r\n           Guests have access to a shared kitchen and hot tub. Other available include a tour desk, luggage storage and laundry facilities.</p><br>\r\n        <b>Most popular facilities:</b>\r\n        <li>Free parking</li>\r\n         <li>Free WiFi</li>\r\n        <li> Spa and wellness centre</li>\r\n        <li>Room service</li>\r\n       \r\n        \r\n        <h3></h3>\r\n   ', 'images/hotels/h7.jpg'),
('AI000013', 'Jasper Leopard Wilpaththu', 'Wilpaththu', 18, 35, 'PK000001', 2, '<p>The air-conditioned holiday home consists of 2 bedrooms, a living room, a fully equipped kitchen with an oven and a kettle, and 2 bathrooms with a walk-in shower.\r\n           Guests can take in the views of the garden from the terrace, which also has outdoor furniture. <br><br>\r\n           The holiday home offers bed linen, towels and daily maid service.\r\n           À la carte and continental breakfast options with warm dishes, local specialities and fruits are available every morning at the holiday home.</p><br>\r\n        <b>Most popular facilities:</b>\r\n           <li>Non-smoking rooms</li>\r\n            <li> Family rooms</li>\r\n            <li> Breakfast</li>\r\n            <li> Free parking</li>\r\n            <li>Room service</li>\r\n            <li>Free WiFi</li>\r\n          \r\n        \r\n        <h3></h3>\r\n        ', 'images/hotels/h8.jpg'),
('AI000014', 'Tea Garden Eco Villas Kanneliya', 'Kanneliya', 15, 40, 'PK000001', 2, '<p> Tea Garden Eco Villas features accommodation with an outdoor swimming pool, free private parking, a garden and a shared lounge.\r\n           Boasting room service, this property also has a restaurant and a terrace. The hotel has family rooms. <br><br>\r\n            At Tea Garden Eco Villas, the rooms have air conditioning and a flat-screen TV.\r\n            Guests at the accommodation can enjoy an Asian breakfast.\r\n            The area is popular for hiking, and car hire is available at Tea Garden Eco Villas.</p><br>\r\n        <b>Most popular facilities:</b>\r\n        <li>Outdoor swimming pool</li>\r\n        <li> Non-smoking rooms</li>\r\n        <li> Free parking</li>\r\n        <li>Room service</li>\r\n        \r\n        \r\n        <h3></h3>\r\n', 'images/hotels/h13.jpg'),
('AI000015', 'Jetwing Yala', 'Yala', 19, 20, 'PK000001', 2, '\r\n        <p>Spread across 38 acres of land, Jetwing Yala features an outdoor pool, a business centre and luxurious rooms located on the borders of Yala National Park.\r\n           Operating a 24-hour front desk, it provides free parking and offers complimentary Wi-Fi access throughout the property.<br>\r\n           Fitted with parquet flooring and four-poster beds, spacious air-conditioned rooms are furnished with a wardrobe, in-room safe, a flat-screen cable TV and sofa seating area.<br>\r\n           The large en suite bathroom comes equipped with a hairdryer and hot/cold shower.</p><br>\r\n             <b>Most popular facilities:</b>\r\n              <li>Outdoor swimming pool</li>\r\n              <li> Airport shuttle </li>\r\n              <li>Facilities for disabled guests</li>\r\n              <li>Bar</li>\r\n              <li>Room service</li>\r\n              \r\n              <h3></h3>\r\n   ', 'images/hotels/h1.webp');

-- --------------------------------------------------------

--
-- Table structure for table `cancel_reservation`
--

CREATE TABLE `cancel_reservation` (
  `cancellation_id` varchar(11) NOT NULL,
  `cancel_date` date NOT NULL,
  `refund_amount` int(10) NOT NULL,
  `reservation_id` varchar(8) NOT NULL,
  `sid` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cancel_reservation`
--

INSERT INTO `cancel_reservation` (`cancellation_id`, `cancel_date`, `refund_amount`, `reservation_id`, `sid`) VALUES
('7', '2023-06-10', 100000, 'RS000001', 'sid001'),
('8', '2023-06-10', 100000, 'RS000002', 'sid001'),
('CR000001', '2023-06-10', 22500, 'res10', 'sid001'),
('CR000002', '2023-06-11', 28188, 'res11', 'sid001'),
('CR000003', '2023-06-11', 100000, 'RS000003', 'sid001'),
('CR000004', '2023-06-11', 100000, 'RS000004', 'sid001'),
('CR000005', '2023-06-11', 100000, 'RS000005', 'sid001'),
('CR000006', '2023-06-30', 375, 'RS000001', 'sid001');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `fback_id` varchar(8) NOT NULL,
  `reservation_id` varchar(8) NOT NULL,
  `uid` varchar(8) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `Massage` varchar(999) NOT NULL,
  `Country` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Name` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`fback_id`, `reservation_id`, `uid`, `status`, `Massage`, `Country`, `Email`, `Name`) VALUES
('FD000001', '12341', 'US000001', 0, 'I recently went on a bird-watching tour in Sri Lanka organised by \"Master Safari\" with my guide and driver, Kosala. I have to say that it was an absolutely incredible experience that I will never forget. Kosala was extremely experienced driver and guide who takes good care of his customers. During our tour, we visited several national parks and bird sanctuaries, each one more breathtaking than the last. Aside from the bird-watching, the tour itself was also very well-organized.', 'Sri Lanka', 'aloka1@gmail.com', 'Eranda Charith'),
('FD000002', '12342', 'US000001', 0, 'Master Safari organised our two week tour of Sri Lanka and was always on hand              before, during and after.We had great experiences, saw abundant wildlife,               made good friends and felt we truly experienced the real Sri Lanka. ', 'united Kingdom', 'jennet@gmail.com', 'Jenette Harmon'),
('FD000003', '12343', 'US000001', 0, 'We had amazing time traveling with MasterSafari. Sajidh perfectly planned our itinerary keeping in mind all our requirements and keeping our comfort in mind. Our driver Mr. Khosala did an amazing job in making sure we had a comfortable and enjoyable stay. Both Sajidh and Mr khosala were always available to assist us whenever needed.', 'Canada', 'jimb@gmai.com', 'Jim Brown'),
('FD000004', '12344', 'US000001', 0, 'We had amazing time traveling with MasterSafari. Sajidh perfectly planned our itinerary keeping in mind all our requirements and keeping our comfort in mind. Our driver Mr. Khosala did an amazing job in making sure we had a comfortable and enjoyable stay. Both Sajidh and Mr khosala were always available to assist us whenever needed.', 'Sri Lanka', 'kmare@gmail.com', 'Kaweesha Marasinghe'),
('FD000005', '', 'US000001', 0, 'Experience with mastersafari was amazing. From the very beginning, Sajidh has been prompt and ready to help with all necessary requests. The arrangements with respect to the transport, accomodations, vehicles were perfect. The chauffeurs were very well behaved and well versed in English. No issues faced during the week long trip.', 'India', 'jithendra@gmail.com', 'Jithendra Singh'),
('FD000006', '12345', 'US000001', 0, 'I recently went on a bird-watching tour in Sri Lanka organised by \"Master Safari\" with my guide and driver, Kosala. I have to say that it was an absolutely incredible experience that I will never forget. Kosala was extremely experienced driver and guide who takes good care of his customers.', 'Sri Lanka', 'sheha12@gmail.com', 'Shehani Akarsha'),
('FD000007', '12345', 'US000001', 0, 'I recently went on a bird-watching tour in Sri Lanka organised by \"Master Safari\" with my guide and driver, Kosala. I have to say that it was an absolutely incredible experience that I will never forget. Kosala was extremely experienced driver and guide who takes good care of his customers.', 'Sri Lanka', 'sheha12@gmail.com', 'Shehani Akarsha'),
('FD000008', '12342', 'US000001', 0, 'The trip exceeded my expectations! We are planning to use this company again soon for another trip since it was so well planned. Great price for a full days adventure.', 'sri lanka', 'ushan@gmail.com', 'ushanR');

-- --------------------------------------------------------

--
-- Table structure for table `inquiry`
--

CREATE TABLE `inquiry` (
  `inquiry_id` varchar(8) NOT NULL,
  `full_name` varchar(80) NOT NULL,
  `email` varchar(36) DEFAULT NULL,
  `country` varchar(24) DEFAULT NULL,
  `tp_no` varchar(15) DEFAULT NULL,
  `subject` varchar(64) DEFAULT NULL,
  `inquiry_txt` text NOT NULL,
  `uid` varchar(8) DEFAULT NULL,
  `status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `inquiry`
--

INSERT INTO `inquiry` (`inquiry_id`, `full_name`, `email`, `country`, `tp_no`, `subject`, `inquiry_txt`, `uid`, `status`) VALUES
('IN000001', 'ushan randunu', 'ushan@gmail.com', 'sri lanka', '08726628162', 'cancel reservation', 'how can i cancel a reservation?', 'US000002', 0),
('IN000002', 'mihili sanjula', 'sanjula1@gmail.com', 'sri lanka', '0863617181', 'details of yala package', 'i need more details about yala package', 'US000002', 1),
('IN000003', 'kamal perera', 'james@gmail.com', 'india', '0762443618', 'cancel reservation', 'i need to cancel a reservation. reservation id is RI000004', 'US000002', 1),
('IN000004', 'ushan randunu', 'ushan@gmail.com', 'sri lanka', '0766702382', 'change package', 'due to persnol issue', 'US000002', 1),
('IN000005', 'randunu', 'ushan@gmail.com', 'sri lanka', '0762443618', 'qjerw', 'weq', 'US000002', 1);

-- --------------------------------------------------------

--
-- Table structure for table `package`
--

CREATE TABLE `package` (
  `status` int(1) NOT NULL,
  `pkg_id` varchar(8) NOT NULL,
  `p_name` varchar(60) NOT NULL,
  `price_per_person` double DEFAULT NULL,
  `description` text DEFAULT NULL,
  `no_of_days` int(11) DEFAULT NULL,
  `start_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `package`
--

INSERT INTO `package` (`status`, `pkg_id`, `p_name`, `price_per_person`, `description`, `no_of_days`, `start_date`) VALUES
(1, 'PK000001', 'YALA NATIONAL PARK', 150, 'Yala National Park, located in Sri Lanka, is renowned for its breathtaking wildlife and diverse ecosystems.', 3, '2023-06-05'),
(1, 'PK000002', 'KANNELIYA NATIONAL PARK', 250, 'Kanneliya National Park, offers a mesmerizing sanctuary of pristine beauty and rich biodiversity for visitors ', 3, '2023-06-07'),
(1, 'PK000003', 'UDAWALAWE NATIONAL PARK', 200, 'Udawalawe National Park in Sri Lanka is a haven for elephants and a paradise for wildlife enthusiasts.', 2, '2023-06-04'),
(1, 'PK000004', 'WILPATHTHU NATIONAL PARK', 400, 'Wilpattu National Park: A vast and untamed wilderness, teeming with diverse wildlife and ancient ruins.', 3, '2023-06-08'),
(1, 'PK000005', 'MINNERIYA NATIONAL PARK', 350, 'Minneriya National Park: A mesmerizing sanctuary where herds of elephants roam amidst picturesque landscapes.', 3, '2023-06-09');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `pay_id` varchar(8) NOT NULL,
  `first_name` varchar(40) NOT NULL,
  `last_name` varchar(40) NOT NULL,
  `phone` int(20) NOT NULL,
  `email` varchar(36) NOT NULL,
  `country` varchar(30) NOT NULL,
  `payMethod` varchar(20) NOT NULL,
  `date` datetime NOT NULL,
  `rid` varchar(8) NOT NULL,
  `uid` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`pay_id`, `first_name`, `last_name`, `phone`, `email`, `country`, `payMethod`, `date`, `rid`, `uid`) VALUES
('PY000001', 'Charith', 'Aloka', 774534346, 'aloka@gmail.com', 'Sri Lanka', 'Visa and Master', '2023-06-29 14:45:55', 'RS000001', 'US000001'),
('PY000002', 'Thilina', 'Jayasekara', 740021054, 'thilina@gmail.com', 'Sri Lanka', 'Visa and Master', '2023-06-29 14:49:26', 'RS000002', 'US000002'),
('PY000003', 'Thilina', 'Jayasekara', 740021054, 'thilina@gmail.com', 'Sri Lanka', 'Visa and Master', '2023-06-29 14:52:46', 'RS000003', 'US000002'),
('PY000004', 'Thilina', 'Jayasekara', 740021054, 'thilina@gmail.com', 'Sri Lanka', 'Visa and Master', '2023-06-29 14:53:08', 'RS000003', 'US000002'),
('PY000005', 'Kaumal', 'Senarathna', 774585456, 'sdfajbh@gmail.com', 'Japan', 'Amarican Express', '2023-06-29 14:58:56', 'RS000005', 'US000001'),
('PY000006', 'ushan', 'perera', 876266663, 'ushan@gmail.com', 'sri lanka', 'Visa and Master', '2023-06-30 04:25:17', 'RS000006', 'user123'),
('PY000007', 'Aloka', 'Charith', 779492086, 'aloka@gmail.com', 'Sri lanka', 'Amarican Express', '2023-06-30 06:44:28', 'RS000008', 'user123');

-- --------------------------------------------------------

--
-- Table structure for table `reservation`
--

CREATE TABLE `reservation` (
  `status` int(1) NOT NULL,
  `reservation_id` varchar(8) NOT NULL,
  `total_price` double NOT NULL,
  `no_of_people` int(11) NOT NULL,
  `reservation_date` datetime NOT NULL,
  `reserved_date` date NOT NULL,
  `pkg_id` varchar(8) NOT NULL,
  `aid` varchar(8) NOT NULL,
  `uid` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `reservation`
--

INSERT INTO `reservation` (`status`, `reservation_id`, `total_price`, `no_of_people`, `reservation_date`, `reserved_date`, `pkg_id`, `aid`, `uid`) VALUES
(1, 'RS000001', 750, 2, '2023-06-27 14:45:40', '2022-09-09', 'PK000001', 'AI000001', 'US000001'),
(1, 'RS000002', 600, 2, '2023-06-28 14:49:15', '2022-09-09', 'PK000003', 'AI000003', 'US000002'),
(1, 'RS000003', 750, 2, '2023-06-29 14:52:36', '2022-09-09', 'PK000001', 'AI000001', 'US000001'),
(1, 'RS000004', 600, 2, '2023-06-30 14:54:49', '2022-09-09', 'PK000003', 'AI000003', 'US000001'),
(1, 'RS000005', 600, 2, '2023-06-30 14:54:49', '2022-09-09', 'PK000003', 'AI000003', 'US000003'),
(1, 'RS000006', 225, 2, '2023-06-30 04:24:33', '2022-09-09', 'PK000001', 'AI000001', 'US000002'),
(1, 'RS000007', 170, 1, '2023-06-30 04:32:30', '2023-06-12', 'PK000001', 'AI000015', 'US000002'),
(1, 'RS000008', 225, 2, '2023-06-30 06:43:57', '2022-09-09', 'PK000001', 'AI000001', 'US000002');

-- --------------------------------------------------------

--
-- Table structure for table `room_record`
--

CREATE TABLE `room_record` (
  `rid` varchar(8) NOT NULL,
  `aid` varchar(8) NOT NULL,
  `room_count` int(11) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `room_record`
--

INSERT INTO `room_record` (`rid`, `aid`, `room_count`, `date`) VALUES
('RR000001', 'AI000001', 14, '2022-09-09'),
('RR000002', 'AI000003', 19, '2022-09-09'),
('RR000003', 'AI000001', 14, '2022-09-09'),
('RR000004', 'AI000003', 19, '2022-09-09'),
('RR000005', 'AI000003', 19, '2022-09-09'),
('RR000006', 'AI000001', 19, '2022-09-09'),
('RR000007', 'AI000015', 18, '2023-06-12'),
('RR000008', 'AI000001', 19, '2022-09-09');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `sid` varchar(8) NOT NULL,
  `f_name` varchar(45) NOT NULL,
  `l_name` varchar(45) NOT NULL,
  `email` varchar(60) DEFAULT NULL,
  `pw` varchar(255) DEFAULT NULL,
  `status` tinyint(4) DEFAULT NULL,
  `staff_type` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`sid`, `f_name`, `l_name`, `email`, `pw`, `status`, `staff_type`) VALUES
('ST000001', 'ushan', 'randunu', 'ushanrandunu@gmail.com', '$2y$10$TuLVmWyYX5zeNMQ3ET6yPu/CKACLfD6.1jUBtYGjs006CBJoAkZ.O', 1, 'ADM'),
('ST000002', 'USHA', ' sanjula', 'sanjula@gmail.com', '$2y$10$jNZmoHuDdN/P19d5JDrCLuglS8fs/KovPFMA5ZQy5F2vUb.wyN9hG', 0, 'MNG'),
('ST000003', 'kamal', ' perera', 'kamal@gmail.com', '$2y$10$3jcUZlb2tGeAUm4pQpj6MOj1Lr7Ps7GvAXkoT7mCfnWRwGkbSzsDa', 1, 'CSA'),
('ST000004', 'james', ' bond', 'james@gmail.com', '$2y$10$pjJ6AWEidxHlfd/WWBaMD.FglYYuBCrI5Rn3XnmV7QY4RtMfjSVDi', 1, 'CSA'),
('ST000005', 'mihili', ' sanjula', 'SANJULA8@GAMIL.COM', '$2y$10$/XQzPvZvsntErANHro3Kk.a8aak/JWEYHTW52mnncaiNpLVWyLVQ6', 1, 'ADM');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `uid` varchar(8) NOT NULL,
  `f_name` varchar(45) NOT NULL,
  `l_name` varchar(45) NOT NULL,
  `tp_no` varchar(16) DEFAULT NULL,
  `email` varchar(64) NOT NULL,
  `pw` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`uid`, `f_name`, `l_name`, `tp_no`, `email`, `pw`) VALUES
('US000001', 'jack', 'rick', NULL, 'jamesbond@gmail.com', '$2y$10$pQoErYIC.9tI0U7fYc9dhezv4Q7YqUXwoy/xvxH1xNVSgMFFVScNG'),
('US000002', 'ushan', 'randunu', '0762443618', 'ushan@gmail.com', '$2y$10$CyQEwPpr8uYeo38kkemw2el7wHdLs.MxhAEuPWVOUHdNY1eIEvyeu'),
('US000003', 'james', 'bond', NULL, 'james@gmail.com', '$2y$10$C/Xd.gbH6wIEgmYOEDYZNOXJN6n1eIih.vLj4rBloPbtpAOdLaD16'),
('US000004', 'kasun', 'lakshan', NULL, 'dark@gmail.com', '$2y$10$Om7USVXijhe/jv/PoujCdeB.Rthhnhxy/DtIsqbbsTySyymP2XIFK'),
('US000005', 'mihili', 'sanjula', NULL, 'mihili@gmail.com', '$2y$10$ho41GHIr5ioBrs8YXiW65.ZtNS9aXqtzjWmNsV9tNbqKLWq56UUcW'),
('US000006', 'ushan', 'randunu', NULL, 'sanjula@gmail.com', '$2y$10$zss4IEl9LifEYA0AiM/S1Oe5VUjtSHljykpZWsDyaM9MnS5J0DTBO'),
('US000007', 'kamal', 'randunu', NULL, 'sanjula1@gmail.com', '$2y$10$gUSL981Jsbw9h9wB4uUY6ObGvIzszRCRxJ6KC31PUsoRsSiI7ku1y');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accommodation`
--
ALTER TABLE `accommodation`
  ADD PRIMARY KEY (`aid`),
  ADD KEY `accommo_pkg_fk` (`pkg_id`);

--
-- Indexes for table `cancel_reservation`
--
ALTER TABLE `cancel_reservation`
  ADD PRIMARY KEY (`cancellation_id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`fback_id`);

--
-- Indexes for table `inquiry`
--
ALTER TABLE `inquiry`
  ADD PRIMARY KEY (`inquiry_id`),
  ADD KEY `inquiry_usr_fk` (`uid`);

--
-- Indexes for table `package`
--
ALTER TABLE `package`
  ADD PRIMARY KEY (`pkg_id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`pay_id`);

--
-- Indexes for table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`reservation_id`),
  ADD KEY `res_user_fk` (`uid`),
  ADD KEY `res_pkg_fk` (`pkg_id`),
  ADD KEY `res_accomo_fk` (`aid`);

--
-- Indexes for table `room_record`
--
ALTER TABLE `room_record`
  ADD PRIMARY KEY (`rid`),
  ADD KEY `accommo_room_fk` (`aid`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`sid`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`uid`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `accommodation`
--
ALTER TABLE `accommodation`
  ADD CONSTRAINT `accommo_pkg_fk` FOREIGN KEY (`pkg_id`) REFERENCES `package` (`pkg_id`);

--
-- Constraints for table `inquiry`
--
ALTER TABLE `inquiry`
  ADD CONSTRAINT `inquiry_usr_fk` FOREIGN KEY (`uid`) REFERENCES `user` (`uid`);

--
-- Constraints for table `reservation`
--
ALTER TABLE `reservation`
  ADD CONSTRAINT `res_accomo_fk` FOREIGN KEY (`aid`) REFERENCES `accommodation` (`aid`),
  ADD CONSTRAINT `res_pkg_fk` FOREIGN KEY (`pkg_id`) REFERENCES `package` (`pkg_id`),
  ADD CONSTRAINT `res_user_fk` FOREIGN KEY (`uid`) REFERENCES `user` (`uid`);

--
-- Constraints for table `room_record`
--
ALTER TABLE `room_record`
  ADD CONSTRAINT `accommo_room_fk` FOREIGN KEY (`aid`) REFERENCES `accommodation` (`aid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
