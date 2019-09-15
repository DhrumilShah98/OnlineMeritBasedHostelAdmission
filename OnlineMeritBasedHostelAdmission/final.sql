-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 25, 2018 at 10:27 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `final`
--

-- --------------------------------------------------------

--
-- Table structure for table `aadhar_data`
--

CREATE TABLE `aadhar_data` (
  `aadharno` bigint(12) NOT NULL,
  `fname` varchar(25) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `street` varchar(25) NOT NULL,
  `area` varchar(25) NOT NULL,
  `district` varchar(25) NOT NULL,
  `state` varchar(25) NOT NULL,
  `pincode` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `aadhar_data`
--

INSERT INTO `aadhar_data` (`aadharno`, `fname`, `gender`, `street`, `area`, `district`, `state`, `pincode`) VALUES
(505055324908, 'Dhruv Kadia', 'Male', 'Patang Flats', 'Ashram Road', 'Ahmedabad', 'Gujarat', 380009),
(576789014325, 'Asma  Patel', 'Female', 'Ashiyana appartments', 'Paldi', 'Ahmedabad', 'Gujarat', 380007),
(687843241234, 'Zeal Patel', 'Female', 'Paras 3 Bunglaows', 'Bopal', 'Ahmedabad', 'Gujarat', 380058),
(678524356198, 'Helly Mehta', 'Female', 'Viraj appartments', 'Pragatinagar', 'Baroda', 'Gujarat', 394220),
(513890203415, 'Shreya Shah', 'Female', 'LIC Quarters', 'Pragatinagar', 'Prabhas Patan', 'Gujarat', 362268),
(782345670980, 'Jenish Soni', 'Male', 'Shyam Kunj Flats', 'Hitenpur', 'Dwarka', 'Gujarat', 361335),
(987800657612, 'Dhrumil Shah', 'Male', 'Aakash Ganga', 'Vejalpur', 'Gandhinagar', 'Gujarat', 382016),
(670043001276, 'Rahil Ansari', 'Male', 'Indraprasth I', 'Saharanpur', 'Mehemdabad', 'Gujarat', 387130),
(800923765454, 'Chinmayi Joshi', 'Female', 'Tatsat Society', 'Gurukul', 'ONGC', 'Gujarat', 380005),
(456987611002, 'Smit Patel', 'Male', 'Radhe Villas', 'Satellite', 'Vivekanandnagar', 'Gujarat', 360002),
(435698700102, 'Nilay Solanki', 'Male', 'Shiv Residency', 'Maninagar', 'Ahmedabad', 'Gujarat', 380008),
(236789731609, 'Mehak A', 'Male', 'Shivdhara society', 'Adajan', 'Surat', 'Gujarat', 395009),
(342190874563, 'Tatsat Tendulkar', 'Male', 'Rajpath Society', 'Prabhasnagar', 'Himmatnagar', 'Gujarat', 383001),
(100976893342, 'Kavya Raval', 'Female', 'Rangvihar society', 'Amber Tower', 'Idar', 'Gujarat', 383430),
(455300328976, 'Rahil Shah', 'Male', 'Komal Enclave', 'Hebatpur', 'Zinzuwada', 'Gujarat', 382755),
(786451209834, 'Jay Amin', 'Male', 'Ram Nivas', 'Gandhi Road', 'Ahmedabad', 'Gujarat', 380001),
(234415623341, 'Dolly Shah', 'Female', 'Mansi Tower', 'Jodhpur Crossroad', 'Jodhpur', 'Gujarat', 380008),
(254774748965, 'Shrushti Thakar', 'Female', 'Sati Flats', 'Aadarshnagar', 'Paneli', 'Gujarat', 360480),
(776254439100, 'Dhruvaksh Shah', 'Male', 'Anita Bungalows', 'Memnagar', 'Popatpara', 'Gujarat', 360001),
(828744621037, 'Moksha Shah', 'Female', 'Yogeshwarnagar', 'Lal Bungalow', 'Ahmedabad', 'Gujarat', 361001),
(665378291734, 'Kavita Pandya', 'Female', 'Vishwakunj Society', 'Fatehpur', 'Baroda', 'Gujarat', 382781),
(675432001299, 'Jeel Soni', 'Female', 'Panchvati Bungalows', 'Ravki', 'Rajkot', 'Gujarat', 360004),
(454673382900, 'Umang Parekh', 'Male', 'Palash Appartment', 'Ori', 'Surendranagar', 'Gujarat', 360055),
(675645329017, 'Karan Patel', 'Male', 'Alok Society', 'Khajurdi', 'Jamnagar', 'Gujarat', 360110),
(778547932541, 'Preksha Joshi', 'Female', 'Chandni Flats', 'Gunda', 'Jamnagar', 'Gujarat', 380007),
(748596321456, 'Tejas Patel', 'Male', 'Pooja Enclave', 'Khari', 'Kachchh', 'Gujarat', 360510),
(145214523698, 'Hardik Mehta', 'Male', 'Maatruchhaya Society', 'Chhaya', 'Porbandar', 'Gujarat', 360578),
(525265874900, 'Ashish Singh', 'Male', 'Nirman Villas', 'Degam', 'Porbandar', 'Gujarat', 360579),
(544637289102, 'Heena Kadia', 'Female', 'Jalaram Flats', 'Ranip', 'Ahmedabad', 'Gujarat', 382480),
(645454638201, 'Shyam Dutt', 'Male', 'Raghukul', 'Devalia', 'Rajkot', 'Gujarat', 363332),
(453536278129, 'Zubeda Malik', 'Female', 'Shantivan', 'Adajan', 'Surat', 'Gujarat', 395009),
(545467823980, 'Sahil Dixit', 'Male', 'Krishna Appartments ', 'Mohamadpura', 'Chorvad', 'Gujarat', 362250),
(999968586330, 'Ritvik Dhanjani', 'Male', 'Hiamalayan Plaza ', 'Paldi', 'Ahmedabad', 'Gujarat', 380007),
(454573648329, 'Aashil Rajyaguru', 'Male', 'Residency Point', 'Chitrod', 'Junagadh', 'Gujarat', 362135),
(343421528900, 'Anand Joshipura', 'Male', 'Park Plaza', 'Lumbha', 'Junagadh', 'Gujarat', 362150),
(768900123443, 'Hiten Tejwani', 'Male', 'Dwarkesh villa', 'Minapur', 'Surendranagar', 'Gujarat', 363415),
(334521908909, 'Viren Kashyap', 'Male', 'Rudra appartments', 'Otha', 'Bhavnagar', 'Gujarat', 364295),
(453261789092, 'Yatri Bhatt', 'Female', 'Urvin Society', 'Mahuva ', 'Bhavnagar', 'Gujarat', 364290),
(667890908567, 'Shivam Laik', 'Male', 'Orchid Villa ', 'Damnagar', 'Amreli', 'Gujarat', 365220),
(845612568799, 'Vaishali Tanwar', 'Female', 'Indraprasth 2', 'Shikara', 'Kutch', 'Gujarat', 370140);

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(300) NOT NULL,
  `reg_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updation_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `email`, `password`, `reg_date`, `updation_date`) VALUES
(1, 'admin', 'admin@gmail.com', '1234', '2018-03-22 20:31:45', '2018-03-23');

-- --------------------------------------------------------

--
-- Table structure for table `adminlog`
--

CREATE TABLE `adminlog` (
  `id` int(11) NOT NULL,
  `adminid` int(11) NOT NULL,
  `ip` varbinary(16) NOT NULL,
  `logintime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `admitted_students_table`
--

CREATE TABLE `admitted_students_table` (
  `stid` int(11) NOT NULL,
  `s_name` varchar(50) NOT NULL,
  `c_name` varchar(50) NOT NULL,
  `h_name` varchar(50) NOT NULL,
  `h_address` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `caste`
--

CREATE TABLE `caste` (
  `caid` int(5) NOT NULL,
  `caste` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `caste`
--

INSERT INTO `caste` (`caid`, `caste`) VALUES
(1, 'General'),
(2, 'OBC'),
(3, 'SC'),
(4, 'ST');

-- --------------------------------------------------------

--
-- Table structure for table `college`
--

CREATE TABLE `college` (
  `cid` int(11) NOT NULL,
  `c_name` varchar(50) NOT NULL,
  `c_address` varchar(255) NOT NULL,
  `c_pincode` int(6) NOT NULL,
  `posting_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `college`
--

INSERT INTO `college` (`cid`, `c_name`, `c_address`, `c_pincode`, `posting_date`) VALUES
(1, 'L.J. Institute', 'S.G. Road, Between Sarkhej Circle & Kataria Motors, Ahmedabad, Gujarat', 382210, '2018-03-24 01:23:26'),
(2, 'AIT', 'Near Vasantnagar Township, Gota-Ognaj Road, Ahmedabad, Gujarat', 380060, '2018-03-24 02:58:02'),
(3, 'GLS University', 'Netaji Road, Opposite Law Garden, Ellisbridge, Ahmedabad, Gujarat', 380006, '2018-03-24 03:22:28'),
(4, 'St. Xavier\'s college', 'Navrangpura, Ahmedabad, Gujarat', 380009, '2018-03-24 03:26:10'),
(5, 'AD Patel Institute of Technology', ' New Vallabh Vidhyanagar, Vitthal Udyognagar, Anand, Gujarat', 388121, '2018-03-24 05:55:55'),
(6, 'Birla Vishvakarma Mahavidyalaya ', 'Vallabh Vidyanagar, Anand, Gujarat ', 388120, '2018-03-24 05:55:55'),
(7, 'IITRAM', 'Near Khokhara Circle, Maninagar East, Ahmedabad, Gujarat ', 380026, '2018-03-24 06:00:46'),
(8, 'Dr.S.&S.S.Ghandhy Government Engineering College', 'Majura Gate, Surat, Gujarat ', 395008, '2018-03-24 06:00:46'),
(9, 'Shantilal Shah Engineering College', 'Bhavnagar, Gujarat', 364060, '2018-03-24 06:04:27'),
(10, 'Sarvajanik College of Engineering and Technology', ' Dr. R.K. Desai Marg, Opp. Mission Hospital, Athwalines, Surat, Gujarat ', 395001, '2018-03-24 06:04:27'),
(11, 'U. V. Patel College of Engineering', 'Ganpat Vidyanagar, GJ SH 73, Gujarat', 384012, '2018-03-24 06:11:52');

-- --------------------------------------------------------

--
-- Table structure for table `hostel`
--

CREATE TABLE `hostel` (
  `hid` int(11) NOT NULL,
  `h_name` varchar(50) NOT NULL,
  `h_address` varchar(250) NOT NULL,
  `h_pincode` int(6) NOT NULL,
  `seats` int(5) NOT NULL,
  `GEN_m` int(5) NOT NULL,
  `GEN_f` int(5) NOT NULL,
  `OBC_m` int(5) NOT NULL,
  `OBC_f` int(5) NOT NULL,
  `SC_m` int(5) NOT NULL,
  `SC_f` int(5) NOT NULL,
  `ST_m` int(5) NOT NULL,
  `ST_f` int(5) NOT NULL,
  `posting_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hostel`
--

INSERT INTO `hostel` (`hid`, `h_name`, `h_address`, `h_pincode`, `seats`, `GEN_m`, `GEN_f`, `OBC_m`, `OBC_f`, `SC_m`, `SC_f`, `ST_m`, `ST_f`, `posting_date`) VALUES
(1, 'Samras hostel', 'Gujarat Universiy Campus, 132 Feet Ring Road, Opposite GMDC Ground, Vastrapur, Ahmedabad, Gujarat', 380015, 20, 5, 5, 2, 3, 1, 2, 1, 1, '2018-03-22 23:16:39'),
(2, 'Mahatma Gandhi Hostel', ' Near Nyari Filter Plan, Rajkot, Gujarat', 361005, 100, 25, 25, 13, 14, 6, 7, 5, 5, '2018-03-22 23:17:39'),
(3, 'Dr. Babasaheb Ambedkar Boys Hostel, Gandhinagar', ' Sector 7/B, Sector 7, Gandhinagar, Gujarat', 382007, 500, 125, 125, 67, 68, 32, 33, 23, 23, '2018-03-22 23:25:01'),
(4, 'Narsingh Bhagat Boys Hostel', '18-D, Akhada Road, Near Udupi Restaurant, Paldi, Ahmedabad, Gujarat', 380007, 700, 175, 175, 94, 95, 45, 46, 32, 32, '2018-03-22 23:24:05'),
(5, 'xyz', 'kalol', 380091, 50, 12, 12, 6, 7, 3, 4, 3, 3, '2018-03-24 18:09:30');

-- --------------------------------------------------------

--
-- Table structure for table `hostel_seats`
--

CREATE TABLE `hostel_seats` (
  `hid` int(11) NOT NULL,
  `seats` int(11) NOT NULL,
  `GEN_m` int(11) NOT NULL,
  `GEN_f` int(11) NOT NULL,
  `OBC_m` int(11) NOT NULL,
  `OBC_f` int(11) NOT NULL,
  `SC_m` int(11) NOT NULL,
  `SC_f` int(11) NOT NULL,
  `ST_m` int(11) NOT NULL,
  `ST_f` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hostel_seats`
--

INSERT INTO `hostel_seats` (`hid`, `seats`, `GEN_m`, `GEN_f`, `OBC_m`, `OBC_f`, `SC_m`, `SC_f`, `ST_m`, `ST_f`) VALUES
(1, 20, 5, 5, 2, 3, 1, 2, 1, 1),
(2, 100, 25, 25, 13, 14, 6, 7, 5, 5),
(3, 500, 125, 125, 67, 68, 32, 33, 23, 23),
(4, 700, 175, 175, 94, 95, 45, 46, 32, 32);

-- --------------------------------------------------------

--
-- Table structure for table `percentile`
--

CREATE TABLE `percentile` (
  `stid` int(11) NOT NULL,
  `per` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `percentile`
--

INSERT INTO `percentile` (`stid`, `per`) VALUES
(1, 89),
(2, 85),
(3, 79),
(4, 92),
(5, 71),
(6, 76),
(7, 92),
(8, 93),
(9, 85),
(10, 75),
(11, 65),
(12, 76),
(13, 44),
(14, 89),
(15, 91),
(16, 47),
(17, 89),
(18, 92),
(19, 96),
(20, 54),
(21, 67),
(22, 89),
(23, 73),
(24, 90),
(25, 47),
(26, 52),
(27, 67),
(28, 73),
(29, 86),
(30, 54),
(31, 67),
(32, 74),
(33, 51),
(34, 60),
(35, 70),
(36, 77),
(37, 56),
(38, 46),
(39, 67),
(40, 90);

-- --------------------------------------------------------

--
-- Table structure for table `students_marks_table`
--

CREATE TABLE `students_marks_table` (
  `id` int(11) NOT NULL,
  `stid` int(5) NOT NULL,
  `cid` int(11) NOT NULL,
  `hid` int(11) NOT NULL,
  `caid` int(5) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `percentile` double NOT NULL,
  `distance` double NOT NULL,
  `merit` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students_marks_table`
--

INSERT INTO `students_marks_table` (`id`, `stid`, `cid`, `hid`, `caid`, `gender`, `percentile`, `distance`, `merit`) VALUES
(1, 1, 1, 1, 2, 'Male', 80, 3.5634648186048294, 49.42538592744193),
(2, 2, 2, 1, 1, 'Female', 90, 3.2258624263496842, 55.29034497053988),
(3, 3, 3, 1, 1, 'Female', 100, 9.550689425046565, 63.820275770018625),
(4, 4, 6, 1, 1, 'Female', 89, 210.43521672743213, 137.57408669097285),
(5, 5, 6, 1, 1, 'Female', 70, 312.72750638689877, 167.0910025547595),
(6, 6, 11, 1, 3, 'Male', 87, 365.29779608730075, 198.31911843492028),
(7, 7, 3, 1, 2, 'Male', 95, 25.16963776607422, 67.06785510642969),
(8, 8, 10, 1, 2, 'Male', 77, 32.35343969553174, 59.14137587821269),
(9, 9, 7, 1, 3, 'Female', 87, 9.490830679072493, 55.996332271628994),
(10, 10, 9, 1, 2, 'Male', 86, 185.93472236612826, 125.9738889464513),
(11, 11, 9, 1, 4, 'Male', 75, 8.779682310813824, 48.51187292432553),
(12, 12, 1, 1, 4, 'Male', 72, 205.5363227213902, 125.4145290885561),
(13, 13, 1, 1, 3, 'Male', 72, 76.8805296914436, 73.95221187657744),
(14, 14, 1, 1, 2, 'Female', 70, 76.8805296914436, 72.75221187657743),
(15, 15, 11, 1, 3, 'Male', 95, 99.3371377465504, 96.73485509862016),
(16, 16, 9, 1, 2, 'Male', 75, 5.550067054016214, 47.22002682160649),
(17, 18, 5, 1, 4, 'Female', 60, 271.4626198683959, 144.58504794735836),
(18, 19, 5, 1, 3, 'Male', 73, 195.6486928014552, 122.05947712058209),
(19, 17, 6, 1, 3, 'Female', 65, 8.779682310813824, 42.51187292432553),
(20, 20, 1, 1, 1, 'Female', 92, 203.33514943420067, 136.53405977368027);

-- --------------------------------------------------------

--
-- Table structure for table `userlog`
--

CREATE TABLE `userlog` (
  `id` int(11) NOT NULL,
  `userId` int(11) NOT NULL,
  `userEmail` varchar(255) NOT NULL,
  `userIp` varbinary(16) NOT NULL,
  `city` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `loginTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userlog`
--

INSERT INTO `userlog` (`id`, `userId`, `userEmail`, `userIp`, `city`, `country`, `loginTime`) VALUES
(1, 10, 'test@gmail.com', '', '', '', '2016-06-22 06:16:42'),
(2, 10, 'test@gmail.com', '', '', '', '2016-06-24 11:20:28'),
(4, 10, 'test@gmail.com', 0x3a3a31, '', '', '2016-06-24 11:22:47'),
(5, 10, 'test@gmail.com', 0x3a3a31, '', '', '2016-06-26 15:37:40'),
(6, 20, 'ajay@gmail.com', 0x3a3a31, '', '', '2016-06-26 16:40:57'),
(7, 21, 'shail@gmail.com', 0x3a3a31, '', '', '2017-04-17 15:13:26'),
(8, 21, 'shail@gmail.com', 0x3a3a31, '', '', '2017-04-17 15:22:44'),
(9, 22, 'neel@gmail.com', 0x3a3a31, '', '', '2018-03-10 06:49:27'),
(10, 22, 'neel@gmail.com', 0x3a3a31, '', '', '2018-03-23 04:36:39'),
(11, 23, 'hellymehta20@yahoo.in', 0x3a3a31, '', '', '2018-03-23 06:56:47'),
(12, 10, 'test@gmail.com', 0x3a3a31, '', '', '2018-03-23 12:07:36'),
(13, 5, 'rahil@gmail.com', 0x3a3a31, '', '', '2018-03-24 09:47:33'),
(14, 5, 'rahil@gmail.com', 0x3a3a31, '', '', '2018-03-24 10:06:13'),
(15, 5, 'rahil@gmail.com', 0x3a3a31, '', '', '2018-03-24 10:26:05'),
(16, 5, 'rahil@gmail.com', 0x3a3a31, '', '', '2018-03-24 10:31:28'),
(17, 5, 'rahil@gmail.com', 0x3a3a31, '', '', '2018-03-24 10:31:47'),
(18, 5, 'rahil@gmail.com', 0x3a3a31, '', '', '2018-03-24 10:37:53'),
(19, 1, 'kadia.dhruv.dk@gmail.com', 0x3a3a31, '', '', '2018-03-24 12:40:02'),
(20, 1, 'kadia.dhruv.dk@gmail.com', 0x3a3a31, '', '', '2018-03-24 12:47:36'),
(21, 1, 'kadia.dhruv.dk@gmail.com', 0x3a3a31, '', '', '2018-03-24 13:06:52'),
(22, 2, 'asma@gmail.com', 0x3a3a31, '', '', '2018-03-24 13:43:42'),
(23, 3, 'zealu@yahoo.in', 0x3a3a31, '', '', '2018-03-24 13:46:44'),
(24, 4, 'helly@rediff.com', 0x3a3a31, '', '', '2018-03-24 13:59:19'),
(25, 5, 'shreya@gmail.com', 0x3a3a31, '', '', '2018-03-24 14:11:35'),
(26, 6, 'js@yahoo.in', 0x3a3a31, '', '', '2018-03-24 14:14:52'),
(27, 7, 'ds@gmail.com', 0x3a3a31, '', '', '2018-03-24 14:18:13'),
(28, 8, 'ar@gmail.com', 0x3a3a31, '', '', '2018-03-24 14:20:16'),
(29, 9, 'chineejoshi@gmail.com', 0x3a3a31, '', '', '2018-03-24 14:37:09'),
(30, 10, 'patelsmit97@gmail.com', 0x3a3a31, '', '', '2018-03-24 14:38:16'),
(31, 11, 'solankineel@gmail.com', 0x3a3a31, '', '', '2018-03-24 14:39:23'),
(32, 12, 'mehakashik@gmail.com', 0x3a3a31, '', '', '2018-03-24 14:40:06'),
(33, 13, 'tendulkartatsat@gmail.com', 0x3a3a31, '', '', '2018-03-24 14:40:42'),
(34, 15, 'rahilshah@gmail.com', 0x3a3a31, '', '', '2018-03-24 14:42:35'),
(35, 16, 'aminjay@gmail.com', 0x3a3a31, '', '', '2018-03-24 14:43:34'),
(36, 17, 'shahdolly@gmail.com', 0x3a3a31, '', '', '2018-03-24 14:44:27'),
(37, 17, 'shahdolly@gmail.com', 0x3a3a31, '', '', '2018-03-24 14:47:48'),
(38, 18, 'shrushti021@gmail.com', 0x3a3a31, '', '', '2018-03-24 14:57:13'),
(39, 17, 'shahdolly@gmail.com', 0x3a3a31, '', '', '2018-03-24 14:58:15'),
(40, 19, 'shrushti@gmail.com', 0x3a3a31, '', '', '2018-03-24 14:59:56'),
(41, 17, 'shahdolly@gmail.com', 0x3a3a31, '', '', '2018-03-24 15:00:53'),
(42, 17, 'shahdolly@gmail.com', 0x3a3a31, '', '', '2018-03-24 15:06:27'),
(43, 20, 'jeel@gmail.com', 0x3a3a31, '', '', '2018-03-24 18:02:55'),
(44, 20, 'jeel@gmail.com', 0x3a3a31, '', '', '2018-03-24 18:10:51'),
(45, 1, 'kadia.dhruv.dk@gmail.com', 0x3a3a31, '', '', '2018-03-25 02:47:13'),
(46, 6, 'js@yahoo.in', 0x3a3a31, '', '', '2018-03-25 03:04:32'),
(47, 1, 'kadia.dhruv.dk@gmail.com', 0x3a3a31, '', '', '2018-03-25 03:20:33'),
(48, 6, 'js@yahoo.in', 0x3a3a31, '', '', '2018-03-25 03:33:14'),
(49, 21, 'karan@gmail.com', 0x3a3a31, '', '', '2018-03-25 03:47:19'),
(50, 6, 'js@yahoo.in', 0x3a3a31, '', '', '2018-03-25 03:54:59'),
(51, 1, 'kadia.dhruv.dk@gmail.com', 0x3a3a31, '', '', '2018-03-25 03:55:21'),
(52, 22, 'vt@gmail.com', 0x3a3a31, '', '', '2018-03-25 03:58:22'),
(53, 19, 'shrushti@gmail.com', 0x3a3a31, '', '', '2018-03-25 04:44:10'),
(54, 6, 'js@yahoo.in', 0x3a3a31, '', '', '2018-03-25 04:46:08'),
(55, 6, 'js@yahoo.in', 0x3a3a31, '', '', '2018-03-25 05:04:20'),
(56, 23, 'yt@gmai.com', 0x3a3a31, '', '', '2018-03-25 05:48:29'),
(57, 6, 'js@yahoo.in', 0x3a3a31, '', '', '2018-03-25 05:59:43'),
(58, 6, 'js@yahoo.in', 0x3a3a31, '', '', '2018-03-25 06:23:34'),
(59, 23, 'yt@gmai.com', 0x3a3a31, '', '', '2018-03-25 06:37:38'),
(60, 24, 'preksha@rediff.com', 0x3a3a31, '', '', '2018-03-25 07:26:14'),
(61, 24, 'preksha@rediff.com', 0x3a3a31, '', '', '2018-03-25 07:33:30'),
(62, 24, 'preksha@rediff.com', 0x3a3a31, '', '', '2018-03-25 07:34:47'),
(63, 24, 'preksha@rediff.com', 0x3a3a31, '', '', '2018-03-25 07:50:26'),
(64, 2, 'asma@gmail.com', 0x3a3a31, '', '', '2018-03-25 07:51:56'),
(65, 24, 'preksha@rediff.com', 0x3a3a31, '', '', '2018-03-25 07:54:26'),
(66, 2, 'asma@gmail.com', 0x3a3a31, '', '', '2018-03-25 07:55:13'),
(67, 2, 'asma@gmail.com', 0x3a3a31, '', '', '2018-03-25 07:59:55'),
(68, 2, 'asma@gmail.com', 0x3a3a31, '', '', '2018-03-25 08:20:46');

-- --------------------------------------------------------

--
-- Table structure for table `user_reg`
--

CREATE TABLE `user_reg` (
  `stid` int(5) NOT NULL,
  `aadharno` bigint(12) NOT NULL,
  `fname` varchar(25) NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(6) NOT NULL,
  `contactno` bigint(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_reg`
--

INSERT INTO `user_reg` (`stid`, `aadharno`, `fname`, `dob`, `gender`, `contactno`, `email`, `password`) VALUES
(1, 505055324908, 'Dhruv Kadia', '1998-07-09', 'Male', 8238072492, 'kadia.dhruv.dk@gmail.com', '1234'),
(2, 576789014325, 'Asma  Patel', '1997-09-05', 'Female', 9744223792, 'asma@gmail.com', '5678'),
(3, 687843241234, 'Zeal Patel', '1997-05-28', 'Female', 9876541230, 'zealu@yahoo.in', '1234'),
(4, 678524356198, 'Helly Mehta', '1997-11-20', 'Female', 8140068090, 'helly@rediff.com', '5678'),
(5, 513890203415, 'Shreya Shah', '1998-06-16', 'Female', 8238105770, 'shreya@gmail.com', '1234'),
(6, 782345670980, 'Jenish Soni', '1997-10-10', 'Male', 9845761230, 'js@yahoo.in', '5678'),
(7, 987800657612, 'Dhrumil Shah', '1998-04-18', 'Male', 9558675239, 'ds@gmail.com', '1234'),
(8, 670043001276, 'Rahil Ansari', '1997-07-15', 'Male', 9856124737, 'ar@gmail.com', '5678'),
(9, 800923765454, 'Chinmayi Joshi', '1997-12-09', 'Female', 9426112231, 'chineejoshi@gmail.com', '911'),
(10, 456987611002, 'Smit Patel', '1997-09-11', 'Male', 8238480080, 'patelsmit97@gmail.com', '147'),
(11, 435698700102, 'Nilay Solanki', '1997-01-24', 'Male', 9537972085, 'solankineel@gmail.com', '7777'),
(12, 236789731609, 'Mehak A', '1997-12-07', 'Male', 9409056575, 'mehakashik@gmail.com', '8787'),
(13, 342190874563, 'Tatsat Tendulkar', '1997-06-16', 'Male', 8320515985, 'tendulkartatsat@gmail.com', '9898'),
(14, 100976893342, 'Kavya Raval', '1997-08-29', 'Female', 8690907464, 'kavyaraval111@gmail.com', '1111'),
(15, 455300328976, 'Rahil Shah', '1997-06-15', 'Male', 8460341703, 'rahilshah@gmail.com', '19975'),
(16, 786451209834, 'Jay Amin', '1989-06-17', 'Male', 8461111703, 'aminjay@gmail.com', '151515'),
(17, 234415623341, 'Dolly Shah', '1998-11-02', 'Female', 9724385874, 'shahdolly@gmail.com', '8741'),
(18, 254774748965, 'Shrushti Thakar', '1998-01-02', 'Female', 9774412578, 'shrushti021@gmail.com', '1212'),
(19, 776254439100, 'Dhruvaksh Shah', '1998-03-31', 'Male', 8044412118, 'shrushti@gmail.com', '1010'),
(20, 675432001299, 'Jeel Soni', '1998-04-18', 'Female', 3648492947, 'jeel@gmail.com', '12345'),
(21, 675645329017, 'Karan Patel', '1997-03-12', 'Male', 8796451237, 'karan@gmail.com', '1234'),
(22, 845612568799, 'Vaishali Tanwar', '1997-06-18', 'Female', 8745963012, 'vt@gmail.com', '8888'),
(23, 453261789092, 'Yatri Bhatt', '1998-09-12', 'Female', 9874563210, 'yt@gmai.com', '4567'),
(24, 778547932541, 'Preksha Joshi', '1998-07-03', 'Female', 9465738468, 'preksha@rediff.com', '12345');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admitted_students_table`
--
ALTER TABLE `admitted_students_table`
  ADD PRIMARY KEY (`stid`);

--
-- Indexes for table `caste`
--
ALTER TABLE `caste`
  ADD PRIMARY KEY (`caid`);

--
-- Indexes for table `college`
--
ALTER TABLE `college`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `hostel`
--
ALTER TABLE `hostel`
  ADD PRIMARY KEY (`hid`);

--
-- Indexes for table `hostel_seats`
--
ALTER TABLE `hostel_seats`
  ADD PRIMARY KEY (`hid`);

--
-- Indexes for table `percentile`
--
ALTER TABLE `percentile`
  ADD PRIMARY KEY (`stid`);

--
-- Indexes for table `students_marks_table`
--
ALTER TABLE `students_marks_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userlog`
--
ALTER TABLE `userlog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_reg`
--
ALTER TABLE `user_reg`
  ADD PRIMARY KEY (`stid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `caste`
--
ALTER TABLE `caste`
  MODIFY `caid` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `college`
--
ALTER TABLE `college`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `hostel`
--
ALTER TABLE `hostel`
  MODIFY `hid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `percentile`
--
ALTER TABLE `percentile`
  MODIFY `stid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `students_marks_table`
--
ALTER TABLE `students_marks_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `userlog`
--
ALTER TABLE `userlog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- AUTO_INCREMENT for table `user_reg`
--
ALTER TABLE `user_reg`
  MODIFY `stid` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
