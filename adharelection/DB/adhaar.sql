-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 06, 2021 at 09:04 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `adhaar`
--

-- --------------------------------------------------------

--
-- Table structure for table `blob`
--

CREATE TABLE `blob` (
  `id` int(110) NOT NULL,
  `name` varchar(100) NOT NULL,
  `image` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `candidate`
--

CREATE TABLE `candidate` (
  `cname` varchar(100) NOT NULL,
  `cparty` varchar(1000) NOT NULL,
  `cons` varchar(100) NOT NULL,
  `img` varchar(1000) NOT NULL,
  `pname` varchar(100) NOT NULL,
  `adhar` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `candidate`
--

INSERT INTO `candidate` (`cname`, `cparty`, `cons`, `img`, `pname`, `adhar`) VALUES
('NIKIL', 'JDS', 'NANJANAGUDU', 'jds.jpg', 'JDS', '436876945649'),
('Pradeep', 'Congress', 'NANJANAGUDU', 'cong.jpg', 'congress', '550022135454');

-- --------------------------------------------------------

--
-- Table structure for table `companyinfo`
--

CREATE TABLE `companyinfo` (
  `first_name` varchar(50) NOT NULL,
  `second_name` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `user_id` varchar(50) NOT NULL,
  `company_name` varchar(50) NOT NULL,
  `company_type` varchar(50) NOT NULL,
  `address` varchar(250) NOT NULL,
  `position` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `companyinfo`
--

INSERT INTO `companyinfo` (`first_name`, `second_name`, `phone`, `user_id`, `company_name`, `company_type`, `address`, `position`) VALUES
('SACHIN', 'SIMHA', '9170902253', 'sachin', 'DREAMBUZZ', 'A+', 'Kuvempu Nagar, Stage 2, BTM Layout, Bengaluru, Karnataka, India', 'FEMALE'),
('suresh', 'mp', '8882456312', 'sureshmp', 'dreambuzz sollition', 'Private Limited Company', 'Kuvempu Nagar 1st Stage', 'Owner'),
('suresh', 'mp', '649769795', 'sureshmp', 'dreambuzz solition', 'Private Limited Company', 'Kuvempunagar, Mysuru, Karnataka', 'Owner'),
('darshan', 'jc', '5687459415', 'darshan', 'linux', 'Public Limited Company', 'Mysore Palace, Agrahara, Chamrajpura, ', 'Manager'),
('rama', 'varma', '884644589', 'rama PLT', 'rama PLT', 'Private Limited Company', '1252/3, Vinoba Road, Devaraja Mohalla, Shivarampet, Mysuru,', 'Owner'),
('diya', 'm', '8884644589', 'diya', 'diya private limited', 'Public Limited Company', '32, New Kantharaj Urs Road, Kuvempu Nagara, Mysuru, Karnataka, India', 'Owner'),
('mylari', 'm', '8884644589', 'mylari', 'mylari service', 'Public Limited Company', '125, Outer Ring Road, Banashankari 3rd Stage, Banashankari, Bengaluru, Karnataka, India', 'Owner'),
('mylari', 'm', '8884644589', 'mylari', 'mylari service', 'Public Limited Company', '#125 kuvempunagar mysuru', 'Owner'),
('lavanya ', 'c', '9902262108', 'lavanyaconstructors', 'lavanya constructors', 'Private Limited Company', '125, 5th Cross, Block I, Block A, Ramakrishnanagar, Mysuru, Karnataka, India', 'Owner');

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `trn_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`id`, `username`, `email`, `password`, `trn_date`) VALUES
(25, 'admin', 'admin@gmail.com', '21232f297a57a5a743894a0e4a801fc3', '2019-03-15 19:44:09'),
(26, 'dileep', 'dileep@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '2019-03-18 13:04:56'),
(27, 'roja', 'roja123@gmai.com', '202cb962ac59075b964b07152d234b70', '2020-03-10 09:00:08'),
(28, 'vinu', 'Vinugowdak1993@gmail.com', 'eebd0f73fb8a4db7d9b0b43199e80f9f', '2020-03-12 15:49:37'),
(29, 'manju', 'manju@gmail.com', '202cb962ac59075b964b07152d234b70', '2020-12-15 06:55:39');

-- --------------------------------------------------------

--
-- Table structure for table `doctorprofile`
--

CREATE TABLE `doctorprofile` (
  `firstname` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `clinicname` varchar(100) NOT NULL,
  `phonenumber` varchar(13) NOT NULL,
  `doctorid` varchar(20) NOT NULL,
  `address` varchar(1000) NOT NULL,
  `workexperience` varchar(20) NOT NULL,
  `tfrom` varchar(20) NOT NULL,
  `tto` varchar(20) NOT NULL,
  `specilisation` varchar(20) NOT NULL,
  `city` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `doctorprofile`
--

INSERT INTO `doctorprofile` (`firstname`, `lastname`, `clinicname`, `phonenumber`, `doctorid`, `address`, `workexperience`, `tfrom`, `tto`, `specilisation`, `city`) VALUES
('madusudan', 'm p', 'appoloclinic', '8884644589', 'madusudan', '8th Phase, JP Nagar, Bengaluru, Karnataka, India', '3', '13:00', '17:00', 'Nephrologist', 'MYSORE'),
('arpitha', 's', 'arpitha multi-speciality hospital', '7353441555', 'arpitha', '12, 7th Main 2nd Cross Road, Vidayaranya Puram, Mysuru, Karnataka, India', '1', '14:00', '17:00', 'cardiologist', 'MYSORE'),
('siddharth', 'roy', 'roy clinic', '9980564217', 'siddharth', '12th Main Road, Vijayanagar 1st Stage, Vijayanagar, Mysuru, Karnataka, India', '2', '11:00', '16:30', 'Dermatologist', 'BANGLORE'),
('mithun', 'raj', 'raj  hospital', '8123113911', 'mithun', '5th Cross, K R Puram, Hassan, Karnataka, India', '1', '10:00', '15:00', 'cardiology', 'HASSAN'),
('samruddhi', 'rao', 'rao clinic', '8557894521', 'samruddhi', '6th Main Road, Vani Vilas Mohalla, Mysuru, Karnataka, India', '2', '10:00', '15:00', 'Neurologist', 'MYSORE'),
('samruddhi', 'rao', 'rao clinic', '8556548921', 'samruddhi', '6th Main Road, 3rd Block, Jayalakshmipuram, Mysuru, Karnataka, India', '2', '10:00', '15:00', 'orthopedics', 'MYSORE'),
('sandya', 'shetty', 'sandya hospital', '9900458967', 'sandya', '9th phase Jp Nagar, JP Nagar, Bengaluru, Karnataka, India', '2', '10:00', '15:00', 'Dermatologist', 'BANGLORE'),
('nandish', 'KP', 'nandish hospital', '9964115795', 'nandish', '7th B Main, Subramanya Nagar, Hebbal 1st Stage, Mysuru, Karnataka, India', '1', '10:00', '16:00', 'cardiology', 'MYSORE'),
('gokul', 'sachi', 'gokul hospital', '9611148335', 'gokul', '44, 1st Cross Road, 4th Block, Jayalakshmipuram, Mysuru, Karnataka, India', '2', '09:00', '16:00', 'cardiologist', 'MYSORE'),
('deviprasad', 'KS', 'prasad clinic', '9663168954', 'deviprasad', '4th Block, Jayalakshmipuram, Mysuru, Karnataka, India', '2', '11:00', '15:00', 'Neurologist', 'MYSORE'),
('Lavanya', 'shetty', 'shetty  clinic', '8884644589', 'Lavanya', '5th Cross Road, TK Layout, Mysuru, Karnataka, India', '2', '10:30', '16:30', 'Nephrologist', 'MYSORE'),
('Shradha', 'Shrinath', 'Shrinath clinic', '9742456868', 'Shradha', '12, Sayyaji Rao Road, Medar Block, Yadavagiri, Mysuru, Karnataka, India', '3', '10:00', '15:00', 'orthopedics', 'MYSORE'),
('Varsha', 'Bhardwaj', 'Bhardwaj clinic', '8088897999', 'Varsha Bhardwaj', '6th Main Road, Vani Vilas Mohalla, Mysuru, Karnataka, India', '2', '10:00', '17:00', 'Dermatologist', 'MYSORE');

-- --------------------------------------------------------

--
-- Table structure for table `electioninfo`
--

CREATE TABLE `electioninfo` (
  `ename` varchar(100) NOT NULL,
  `etype` varchar(100) NOT NULL,
  `edate` varchar(100) NOT NULL,
  `stime` varchar(100) NOT NULL,
  `dtime` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `electioninfo`
--

INSERT INTO `electioninfo` (`ename`, `etype`, `edate`, `stime`, `dtime`) VALUES
('MLA', 'Member-of-Legislative-Assembly', '2019-03-23', '11:01', '14:00'),
('MP', 'Member-of-Parliament', '2019-03-21', '07:30', '17:00'),
('mp', 'Member-of-Parliament', '2020-03-23', '07:00', '06:30'),
('Gram Panchayath', 'Member-of-Parliament', '2020-12-22', '08:30', '17:30');

-- --------------------------------------------------------

--
-- Table structure for table `send_arequest`
--

CREATE TABLE `send_arequest` (
  `sender_id` varchar(20) NOT NULL,
  `user_id` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `send_arequest`
--

INSERT INTO `send_arequest` (`sender_id`, `user_id`) VALUES
('', ''),
('', ''),
('', ''),
('', ''),
('', ''),
('', '');

-- --------------------------------------------------------

--
-- Table structure for table `send_mess`
--

CREATE TABLE `send_mess` (
  `sender_id` varchar(100) NOT NULL,
  `user_id` varchar(100) NOT NULL,
  `mess` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `send_mess`
--

INSERT INTO `send_mess` (`sender_id`, `user_id`, `mess`) VALUES
('rahul', 'ravikumar', 'we need emergency service '),
('rahul', 'ravikumar', 'i need some information');

-- --------------------------------------------------------

--
-- Table structure for table `send_request`
--

CREATE TABLE `send_request` (
  `sender_id` varchar(20) NOT NULL,
  `user_id` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `send_request`
--

INSERT INTO `send_request` (`sender_id`, `user_id`) VALUES
('', ''),
('8884644589', 'madusudan'),
('', ''),
('', ''),
('8884644589', 'madusudan'),
('', ''),
('', '8884644589'),
('', 'b'),
('', ''),
('madusudan', 'madusudan'),
('arpitha', 'vishal'),
('madusudan', 'suvarna'),
('arpitha', 'roja'),
('arpitha', 'roja'),
('gokul', 'roja'),
('sachin', 'roja'),
('praveen', 'sureshmp'),
('sachin', 'darshan'),
('praveen', 'sureshmp'),
('praveen', 'sureshmp'),
('praveen', 'rama PLT'),
('praveen', 'diya'),
('sureshmp', 'diya'),
('sachin', 'manu'),
('manu', 'manu'),
('1234567890000000', 'admin'),
('1234567890000000', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `send_request1`
--

CREATE TABLE `send_request1` (
  `sender_id` varchar(20) NOT NULL,
  `user_id` varchar(20) NOT NULL,
  `timeslot` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `send_request1`
--

INSERT INTO `send_request1` (`sender_id`, `user_id`, `timeslot`) VALUES
('madusudan', 'roja', NULL),
('madusudan', 'roja', NULL),
('madusudan', 'roja', NULL),
('arpitha', 'roja', NULL),
('sandya', 'roja', NULL),
('madusudan', 'manjunath', NULL),
('madusudan', 'manjunath', NULL),
('madusudan', 'manjunath', NULL),
('madusudan', 'manjunath', NULL),
('madusudan', 'manjunath', NULL),
('madusudan', 'manjunath', NULL),
('madusudan', 'manjunath', NULL),
('madusudan', 'manjunath', ''),
('madusudan', 'manjunath', '16:01'),
('madusudan', 'ravikumar', '14:00'),
('madusudan', 'ravikumar', '12:00'),
('madusudan', 'suvarna', '12:00'),
('sachin', 'sureshmp', 'approved'),
('sachin', 'sureshmp', ''),
('manu', 'mylari', ''),
('muda', 'lavanyaconstructors', 'we approved');

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE `status` (
  `company_user_id` varchar(50) NOT NULL,
  `govt_user_id` varchar(50) NOT NULL,
  `tender_status` varchar(50) NOT NULL,
  `amount` varchar(50) NOT NULL,
  `manpower` varchar(50) NOT NULL,
  `days` varchar(50) NOT NULL,
  `massage` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`company_user_id`, `govt_user_id`, `tender_status`, `amount`, `manpower`, `days`, `massage`) VALUES
('sachin', 'SURESHMP', '5481493', '648', '125', 'okey', ''),
('sachin', 'sachin', '549845', '548', '25', 'ok', ''),
('suresh', 'sachin', '', '694779', '242', '84', 'i will finesed'),
('sachin', 'sureshmp', '50%', '554984', '6487', '549', 'good'),
('sureshmp', 'sachin', '50', '54864', '384', '254', 'okey'),
('sachin', 'sureshmp', '50', '5498', '54', '15', 'okey'),
('praveen', 'diya', '25', '100 cr', '22', '25', 'we doing good'),
('', '', '', '', '', '', ''),
('', '', '', '', '', '', ''),
('', '', '', '', '', '', ''),
('', '', '', '', '', '', ''),
('', '', '', '', '', '', ''),
('', '', '', '', '', '', ''),
('manu', 'mylari', '25', '25 lacks', '20', '50', 'we will try to finish'),
('mylari', 'manu', '75', '25 lacks', '20', '50', 'bghgg'),
('lavanyaconstructors', 'muda', 'started', '25k', '100', '50', 'construction analysis ');

-- --------------------------------------------------------

--
-- Table structure for table `tenderfeedback`
--

CREATE TABLE `tenderfeedback` (
  `company_user_id` varchar(50) NOT NULL,
  `points` varchar(50) NOT NULL,
  `govt_user_id` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  `feedback` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tenderfeedback`
--

INSERT INTO `tenderfeedback` (`company_user_id`, `points`, `govt_user_id`, `status`, `feedback`) VALUES
('sureshmp', 'GOOD', 'good', '', ''),
('sureshmp', '7', '', 'GOOD', 'good'),
('sureshmp', '10', 'sachin', 'MODERATE', 'avg'),
('mylari', '2', 'manu', 'GOOD', 'well service'),
('karthik', '8', 'manu', 'NEED TO IMPROVE', 'wwdsw'),
('lavanyaconstructors', '3', 'muda', 'GOOD', 'good');

-- --------------------------------------------------------

--
-- Table structure for table `tenderinfo`
--

CREATE TABLE `tenderinfo` (
  `tender_name` varchar(50) NOT NULL,
  `tender_number` varchar(50) NOT NULL,
  `dept_name` varchar(50) NOT NULL,
  `bid_closing` varchar(50) NOT NULL,
  `tender_issuer` varchar(50) NOT NULL,
  `dept_id` varchar(50) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `tender_type` varchar(50) NOT NULL,
  `valuesrs` varchar(50) NOT NULL,
  `tender_details` varchar(500) NOT NULL,
  `address` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tenderinfo`
--

INSERT INTO `tenderinfo` (`tender_name`, `tender_number`, `dept_name`, `bid_closing`, `tender_issuer`, `dept_id`, `phone`, `tender_type`, `valuesrs`, `tender_details`, `address`) VALUES
('hihash', 'ohffow', 'oisjchos', '2018-11-16', 'lijhodci', 'sachin', '', 'ORIGINAL-GT', '35431546', 'uchacn huachasc hacuis scj hiuscxSOC U OSUAYCOASC  UYSCUA S64 68731S ', ''),
('road construction', '123', 'pwd', '2018-11-24', 'sachin', 'praveen', '', 'ORIGINAL-BC', '25452054', 'Mysore Road Satellite Bus Station, Telecom Colony, Srinagar, Banashankari, Bengaluru, Karnataka, India', ''),
('building construction', '8654', 'bcm', '2018-11-29', 'kumaraswamy', 'praveen', '', 'ORIGINAL-GENERAL', '25460165', 'B-35, Adichunchanagiri Road, Jayanagar, Kuvempu Nagara, Mysuru, Karnataka, India', ''),
('road construction', '121', 'emysk', '2018-11-14', 'kumaramma', 'sureshmp', '8884644589', 'ORIGINAL-GENERAL', '2', 'we need good service', '1252/3, Vinoba Road, Devaraja Mohalla, Shivarampet, Mysuru, Karnataka, India'),
('road construction', '121', 'mysl', '2018-11-14', 'kumaraswamy', 'sureshmp', '8884644589', 'ORIGINAL-GENERAL', '20', 'good', '5, Sayyaji Rao Road, Medar Block, Yadavagiri, Mysuru, '),
('road construction', '101', 'taluk department', '2018-11-05', 'manu', 'manu', '8884644589', 'ORIGINAL-GT', '100', 'road construction need', '125, Outer Ring Road, Banashankari 3rd Stage, Banashankari, Bengaluru, Karnataka, India'),
('road construction', '101', 'mysuru urban development', '2018-11-29', 'shobitha', 'muda', '7204606262', 'ORIGINAL-GENERAL', '1', 'road construction', 'Kuvempu Nagar, Mysuru, Karnataka, India'),
('bdA Building ', '105', 'mysuru urban development', '2018-12-24', 'PARI', 'muda', '9845373509', 'ORIGINAL-GENERAL', '2', 'BDA COMPLEX CONSTRUCTION ', 'MYSURU KUVEMPUNAGAR ');

-- --------------------------------------------------------

--
-- Table structure for table `userprofile`
--

CREATE TABLE `userprofile` (
  `firstname` varchar(50) NOT NULL,
  `seccondname` varchar(50) NOT NULL,
  `phonenumber` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `longitude` varchar(20) NOT NULL,
  `latitude` varchar(20) NOT NULL,
  `address` varchar(100) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `bloodgroup` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `userprofile`
--

INSERT INTO `userprofile` (`firstname`, `seccondname`, `phonenumber`, `email`, `longitude`, `latitude`, `address`, `gender`, `bloodgroup`) VALUES
('prashanth', 'e', '12345678', 'prashanth', '76.6228339', '12.3106704', 'Quesada, Asuncion, Paraguay', 'MALE', 'O'),
('roja', 'nayar', '7349342017', 'roja', '76.6135683', '12.311720399999999', '8th Cross Road, Vani Vilas Mohalla, Mysuru, Karnataka, India', 'FEMALE', 'A+'),
('vishal', 's', '8123113911', 'vishal', '76.6228615', '12.310663799999999', '5th Block Koramangala, Koramangala, Bengaluru, Karnataka, India', 'MALE', 'A+'),
('niveditha', 'gowda', '8550088861', 'niveditha', '76.6135419', '12.313081299999999', '12, Sayyaji Rao Road, Medar Block, Yadavagiri, Mysuru, Karnataka, India', 'FEMALE', 'A+'),
('anitha', 'aa', '8884644589', 'anitha123@gmail.com', '76.6134984', '12.3116913', '888, Contour Road, Gokulam 2nd Stage, Gokulam, Mysuru, Karnataka, India', 'gender', 'A+'),
('suvarna', 'm p', '8884644589', 'suvarna', '76.6143709', '12.316956', '1252/3, Vinoba Road, Devaraja Mohalla, Shivarampet, Mysuru, Karnataka, India', 'FEMALE', 'A+'),
('nagashree', 'm a', '9008620724', 'nagashree', '76.6135517', '12.3131272', '5th Cross Road, TK Layout, Mysuru, Karnataka, India', 'FEMALE', 'A+'),
('ravi', 'kumar', '9008620724', 'ravikumar', '76.6135019', '12.3117047', '123, 8th Cross Road, Gokulam 3rd Stage, Gokulam, Mysuru, Karnataka, India', 'MALE', 'AB-'),
('ujwal', 'm p', '9792959696', 'ujwal', '76.60916639999999', '12.3204941', '5th Cross Road, TK Layout, Mysuru, Karnataka, India', '', 'A+'),
('bhanuprathap', 's', '9900951399', 'prathap', '', '', 'mysore', 'MALE', 'A+'),
('manjunath', 's', '9916828492', 'manjunath', '76.6145092', '12.3166563', '38, 4th Main 14th Cross Road, Vidayaranya Puram, Mysuru, Karnataka, India', 'MALE', 'A+'),
('prashanth', 's', '99885566445522356554', 'prashanth', '76.623165', '12.3105367', '6544', 'FEMALE', 'A-');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `trn_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `trn_date`) VALUES
(35, 'manjunath', 'manjunath@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '2018-05-04'),
(44, 'sachin', 'sachinsimha1997@gmail.com', '9787ea62b45fa1024bb40bd6866e3a5d', '2018-11-06');

-- --------------------------------------------------------

--
-- Table structure for table `vote`
--

CREATE TABLE `vote` (
  `candidateid` varchar(50) NOT NULL,
  `voterid` varchar(50) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vote`
--

INSERT INTO `vote` (`candidateid`, `voterid`, `id`) VALUES
('568967857656', '546764893839', 6),
('550022135454', '550011223344', 7);

-- --------------------------------------------------------

--
-- Table structure for table `voter`
--

CREATE TABLE `voter` (
  `name` varchar(100) NOT NULL,
  `dob` varchar(100) NOT NULL,
  `cons` varchar(100) NOT NULL,
  `adhar` varchar(100) NOT NULL,
  `img` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `voter`
--

INSERT INTO `voter` (`name`, `dob`, `cons`, `adhar`, `img`) VALUES
('Vinu ', '1999-12-23', 'NANJANAGUDU', '654054965394', '2.jpg'),
('Pradeep', '2020-12-15', 'NANJANAGUDU', '550011223344', '3.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userprofile`
--
ALTER TABLE `userprofile`
  ADD PRIMARY KEY (`phonenumber`,`email`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vote`
--
ALTER TABLE `vote`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `doctor`
--
ALTER TABLE `doctor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `vote`
--
ALTER TABLE `vote`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
