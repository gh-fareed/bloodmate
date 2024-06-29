-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 29, 2024 at 05:46 AM
-- Server version: 5.7.23-23
-- PHP Version: 8.1.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wstdnwmy_bloodmate`
--

-- --------------------------------------------------------

--
-- Table structure for table `bloodbank`
--

CREATE TABLE `bloodbank` (
  `id` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `bbname` varchar(200) NOT NULL,
  `bbemail` varchar(200) NOT NULL,
  `fulname` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `phno` varchar(200) NOT NULL,
  `address` varchar(200) NOT NULL,
  `city` varchar(200) NOT NULL,
  `state` varchar(200) NOT NULL,
  `zipcode` varchar(200) NOT NULL,
  `country` varchar(200) NOT NULL,
  `daysOn` varchar(200) NOT NULL,
  `blood` varchar(200) NOT NULL,
  `inventory` varchar(200) DEFAULT NULL,
  `certificate` varchar(200) DEFAULT NULL,
  `epname` varchar(200) NOT NULL,
  `ephone` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `bloodbank`
--

INSERT INTO `bloodbank` (`id`, `uid`, `bbname`, `bbemail`, `fulname`, `password`, `phno`, `address`, `city`, `state`, `zipcode`, `country`, `daysOn`, `blood`, `inventory`, `certificate`, `epname`, `ephone`) VALUES
(1, 6, 'Al-Asif Blood Bank', 'deanbigboy40@gmail.com', 'M. Asif Vickey', '12345678', '03029250952', 'Walton Road', 'Lahore', 'Punjab', '54000', 'Pakistan', 'Mon, Tue, Wed, Thu, Fri, Sat', 'A-, AB, B+, B-', NULL, NULL, 'Ghulam Farid', '03001234567'),
(2, 7, 'Al-Shifa Blood Bank', 'deanbigboy40@gmail.com', 'Ghulam Farid', '12345678', '03334572705', 'Johar Town', 'Lahore', 'Punjab', '54000', 'Pakistan', 'Mon, Tue, Wed, Thu, Fri, Sat', 'A-, AB, B+, B-, O+, O-, A+', NULL, NULL, 'Ghulam Farid', '03001234567'),
(3, 8, 'AB', 'tazmeen.aftab@gmail.com', 'Tazmeen Aftab', '0987654321', '03314778508', 'Johar town', 'LAHORE', 'Punjab', '54782', 'Pakistan', 'Mon, Tue, Wed, Thu, Fri', 'O+', NULL, NULL, 'Abdullah ali', '03166888496'),
(4, 9, 'Chugtai Lab', 'abdullahali455888@gmail.com', 'abbass ali', '12345678', '03166888496', '9308 Michael ct Manassas park', 'Manassas', 'punjab', '20108', 'Pakistan', 'Mon, Tue, Wed, Thu', 'AB+, AB-, B+, B-, O+, O-, A+, A-', 'Screenshot 2024-04-17 112732.png', 'Screenshot 2024-04-17 112835.png', 'abdullah ali', '1571330154');

-- --------------------------------------------------------

--
-- Table structure for table `blooddrive`
--

CREATE TABLE `blooddrive` (
  `bdriveid` int(11) NOT NULL,
  `blooddrivetitle` varchar(200) NOT NULL,
  `blooddrivedate` date NOT NULL,
  `blooddrivetime` varchar(10) NOT NULL,
  `blooddrivelocation` varchar(255) NOT NULL,
  `blooddrivedescription` text NOT NULL,
  `blooddrivetype` varchar(100) NOT NULL,
  `blooddrivestatus` varchar(50) NOT NULL DEFAULT 'Posted'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `bloodrequests`
--

CREATE TABLE `bloodrequests` (
  `brid` int(11) NOT NULL,
  `dbid` int(11) NOT NULL,
  `recid` int(11) NOT NULL,
  `date` date NOT NULL,
  `rstatus` varchar(100) NOT NULL DEFAULT 'Requested',
  `rectype` varchar(50) NOT NULL DEFAULT 'Schedule',
  `address` varchar(255) NOT NULL,
  `reqdate` date DEFAULT NULL,
  `hospitals` varchar(100) DEFAULT NULL,
  `start` varchar(20) DEFAULT NULL,
  `end` varchar(20) DEFAULT NULL,
  `done` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bloodrequests`
--

INSERT INTO `bloodrequests` (`brid`, `dbid`, `recid`, `date`, `rstatus`, `rectype`, `address`, `reqdate`, `hospitals`, `start`, `end`, `done`) VALUES
(1, 5, 10, '2024-05-23', 'Accepted', 'Emergency', 'Gulberg 3', '2024-05-23', 'Shoukat Khanum', NULL, NULL, 1),
(2, 5, 11, '2024-05-24', 'Requested', 'Emergency', 'Bahria town', '2024-05-24', 'Shoukat Khanum', NULL, NULL, 0),
(3, 5, 12, '2024-05-27', 'Requested', 'Emergency', 'bahria', '2024-05-27', 'Shoukat Khanum', NULL, NULL, 0),
(4, 15, 14, '2024-05-29', 'Accepted', 'Emergency', 'bahria town', '2024-05-29', 'Shoukat Khanum', NULL, NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `broadcast`
--

CREATE TABLE `broadcast` (
  `broadid` int(11) NOT NULL,
  `bdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `broadcast`
--

INSERT INTO `broadcast` (`broadid`, `bdate`) VALUES
(1, '2024-05-22 18:02:40');

-- --------------------------------------------------------

--
-- Table structure for table `donationlocations`
--

CREATE TABLE `donationlocations` (
  `did` int(11) NOT NULL,
  `dbid` int(11) NOT NULL,
  `bbid` int(11) NOT NULL,
  `purpose` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `timeslot` varchar(100) NOT NULL,
  `rstatus` varchar(100) NOT NULL DEFAULT 'Requested',
  `reqdate` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `donorquiz`
--

CREATE TABLE `donorquiz` (
  `id` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `q` varchar(200) NOT NULL,
  `ans` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `donorquiz`
--

INSERT INTO `donorquiz` (`id`, `uid`, `q`, `ans`) VALUES
(1, 3, ' Had a Coronavirus vaccination?', '1'),
(2, 3, 'Do you have heart condition?', '0'),
(3, 3, 'Have you done any body piercing in last 4 month?', '0'),
(4, 3, 'Have you consume any drug in last 2 weeks?', '0'),
(5, 3, 'Do you have weight less than 50kg?', '0'),
(6, 3, 'Are you taking any anti biotics?', '0'),
(7, 3, 'Have you had any surgery in last 6 months?', '0'),
(8, 3, 'Are you planning any operation after 3 months of donation?', '0'),
(9, 3, 'Have you been outside of pakistan in 3 months before donation?', '0'),
(10, 3, 'Have you been unwell in anyway?', '0'),
(11, 3, 'Do you have any allergies?', '0'),
(12, 3, 'Are you taking any regular medication?', '0'),
(19, 3, '8', 'description...'),
(26, 3, '3', 'Yes'),
(27, 3, '4', 'No'),
(28, 3, '5', 'No'),
(29, 3, '6', 'Yes'),
(30, 3, '7', 'No'),
(31, 3, '8', 'description...'),
(32, 3, '9', 'No'),
(33, 3, '10', 'Yes'),
(34, 3, '11', 'Yes'),
(35, 3, '12', 'description...'),
(36, 3, '13', 'description...');

-- --------------------------------------------------------

--
-- Table structure for table `inventory`
--

CREATE TABLE `inventory` (
  `invid` int(11) NOT NULL,
  `bbid` int(11) NOT NULL,
  `blood` varchar(50) NOT NULL,
  `qty` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `stories`
--

CREATE TABLE `stories` (
  `storyid` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `storytitle` varchar(255) NOT NULL,
  `story` text NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `stories`
--

INSERT INTO `stories` (`storyid`, `userid`, `storytitle`, `story`, `date`) VALUES
(1, 8, 'Blood bank', 'helloo', '2024-05-22'),
(2, 5, 'A Small Sacrifice for a Big Impact', 'I had never considered blood donation until one day, a colleague shared a story about their child who survived a severe illness thanks to multiple blood transfusions. Their story moved me deeply, and I realized how vital blood donations are.\r\n\r\nUsing the Blood Mate app, I learned about the donation process and found a local center. The first time I donated, I was struck by how easy and quick it was. The staff made sure I was comfortable, and the entire process took less than an hour.\r\n\r\nWhat surprised me most was the sense of accomplishment I felt afterward. It was a small sacrifice of my time, but the impact it could have on someone’s life was immense. I started to see blood donation not just as a noble act, but as a responsibility to my community.\r\n\r\nNow, every few months, I make it a point to donate. Each visit to the donation center is a reminder of the lives I’m helping to save, and that’s a feeling that keeps me coming back.', '2024-05-23'),
(3, 5, 'Overcoming My Fear for a Good Cause', 'I used to have a debilitating fear of needles. The mere thought of a needle was enough to make me feel faint. But everything changed when a close friend was in a serious accident and needed a blood transfusion. Knowing how much blood donation could help, I decided to face my fear.\r\n\r\nI downloaded Blood Mate and scheduled my first donation. The app was incredibly helpful, providing tips and reassuring messages that calmed my nerves. On the day of my appointment, the staff were understanding and supportive, guiding me through the process with patience and care.\r\n\r\nAs the needle went in, I closed my eyes and focused on my friend’s smiling face. Surprisingly, the pain was minimal, and the entire process was quicker than I had imagined. The feeling of overcoming my fear and knowing I was contributing to saving lives was empowering.\r\n\r\nSince then, I have become a regular donor. Each donation is a reminder of my journey from fear to courage, and the incredible difference one person can make.', '2024-05-23');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `phoneno` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  `blood` varchar(200) NOT NULL,
  `verification` varchar(200) DEFAULT 'Not-Verified',
  `image` varchar(500) DEFAULT NULL,
  `profilepic` varchar(500) DEFAULT NULL,
  `availability` varchar(255) NOT NULL DEFAULT 'Available',
  `rating` int(11) NOT NULL DEFAULT '0',
  `repeat_no` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fname`, `lname`, `email`, `city`, `username`, `password`, `phoneno`, `status`, `blood`, `verification`, `image`, `profilepic`, `availability`, `rating`, `repeat_no`) VALUES
(1, 'abdullah', 'ali', 'abdullah@gmail.com', 'lahore', 'abdullahali123', '12345678', '03124684646', 'Admin', 'O+', 'Not-Verified', NULL, NULL, 'Available', 0, 0),
(2, 'Abdul', 'Moez', 'Abdulmoez1992@hotmail.com', 'Lahore', 'Abdulmoez1', 'alshifa111', '0333 7420105', 'Donor', 'O+', 'Not-Verified', NULL, NULL, 'Available', 0, 0),
(3, 'Usman', 'Mazhar', 'usmanmazhar542001@gmail.com', 'Lahore', 'Usmanmazhar', 'usman542001', '03167577664', 'Donor', 'B+', 'Not-Verified', NULL, NULL, 'Available', 0, 0),
(4, 'Rao', 'Talal', 'Raotalal9@gmail.com', 'Lahore', 'raotalal9@gmail.com', '03314060558', '03314060558', 'Donor', 'Choose...', 'Not-Verified', NULL, NULL, 'Available', 0, 0),
(5, 'abdullah', 'ali', 'abdullahali455888@gmail.com', 'lahore', 'abdullah123456', '12345678', '03166888496', 'Donor', 'O-', 'Verified', 'cbc-test-report-format-example-sample-template-drlogy-lab-report.webp', NULL, 'Available', 16, 4),
(6, 'Al-Asif Blood Bank', 'M. Asif Vickey', 'deanbigboy40@gmail.com', 'Lahore', 'Al-Asif Blood Bank', '12345678', '03029250952', 'BloodBank', 'A+,A-', 'Not-Verified', NULL, NULL, 'Available', 0, 0),
(7, 'Al-Shifa Blood Bank', 'Ghulam Farid', 'deanbigboy40@gmail.com', 'Lahore', 'Al-Shifa Blood Bank', '12345678', '03334572705', 'BloodBank', 'A-, AB, B+, B-, O+, O-, A+', 'Not-Verified', NULL, NULL, 'Available', 0, 0),
(8, 'AB', 'Tazmeen Aftab', 'tazmeen.aftab@gmail.com', 'LAHORE', 'AB', '0987654321', '03314778508', 'BloodBank', 'O+', 'Not-Verified', NULL, NULL, 'Available', 0, 0),
(9, 'Chugtai Lab', 'abbass ali', 'abdullahali455888@gmail.com', 'Manassas', 'Chugtai Lab', '12345678', '03166888496', 'BloodBank', 'AB+, AB-, B+, B-, O+, O-, A+, A-', 'Not-Verified', NULL, NULL, 'Available', 0, 0),
(10, 'Abdul', 'Raffay', 'raffayjutt3@gmail.com', 'Lahore', 'raffay6667', '12345678', '03026782228', 'Recepient', 'A+', 'Not-Verified', NULL, NULL, 'Available', 0, 0),
(11, 'Anwar', 'Abbasi', 'anwar@gmail.com', 'Lahore', 'AnwarAbbasi', '12345678', '03252728727', 'Recepient', 'B+', 'Not-Verified', NULL, NULL, 'Available', 0, 0),
(12, 'Ahmad', 'Abbasi', 'ahmadabbbasi3455@gmail.com', 'Khanpur', 'ahmadabbasi', '12345678', '03324573844', 'Recepient', 'B+', 'Not-Verified', NULL, NULL, 'Available', 0, 0),
(13, 'Ghulam', 'Farid', 'Abc', 'Lahore', 'Farid000', '12345678', '03064419935', 'Recepient', 'A+', 'Not-Verified', NULL, NULL, 'Available', 0, 0),
(14, 'Hibah', 'Saqib', 'Hibah@gmail.com', 'Lahore', 'Hibahsaqib', '12345678', '03216272882', 'Recepient', 'A+', 'Not-Verified', NULL, NULL, 'Available', 0, 0),
(15, 'Ammad', 'Nasir', 'Ammad@gmail.com', 'Lahore', 'Ammadnasir', '12345678', '03256272882', 'Donor', 'A+', 'Not-Verified', NULL, NULL, 'Available', 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bloodbank`
--
ALTER TABLE `bloodbank`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blooddrive`
--
ALTER TABLE `blooddrive`
  ADD PRIMARY KEY (`bdriveid`);

--
-- Indexes for table `bloodrequests`
--
ALTER TABLE `bloodrequests`
  ADD PRIMARY KEY (`brid`);

--
-- Indexes for table `broadcast`
--
ALTER TABLE `broadcast`
  ADD PRIMARY KEY (`broadid`);

--
-- Indexes for table `donationlocations`
--
ALTER TABLE `donationlocations`
  ADD PRIMARY KEY (`did`);

--
-- Indexes for table `donorquiz`
--
ALTER TABLE `donorquiz`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `inventory`
--
ALTER TABLE `inventory`
  ADD PRIMARY KEY (`invid`);

--
-- Indexes for table `stories`
--
ALTER TABLE `stories`
  ADD PRIMARY KEY (`storyid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bloodbank`
--
ALTER TABLE `bloodbank`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `blooddrive`
--
ALTER TABLE `blooddrive`
  MODIFY `bdriveid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `bloodrequests`
--
ALTER TABLE `bloodrequests`
  MODIFY `brid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `broadcast`
--
ALTER TABLE `broadcast`
  MODIFY `broadid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `donationlocations`
--
ALTER TABLE `donationlocations`
  MODIFY `did` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `donorquiz`
--
ALTER TABLE `donorquiz`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `inventory`
--
ALTER TABLE `inventory`
  MODIFY `invid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `stories`
--
ALTER TABLE `stories`
  MODIFY `storyid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
