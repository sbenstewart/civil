-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Feb 10, 2019 at 06:09 AM
-- Server version: 10.2.17-MariaDB
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u258139758_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `accomodation`
--
-- Creation: Feb 03, 2019 at 10:36 AM
--

DROP TABLE IF EXISTS `accomodation`;
CREATE TABLE `accomodation` (
  `id` int(11) NOT NULL,
  `entrydate` varchar(100) NOT NULL DEFAULT '1',
  `entrytime` varchar(100) NOT NULL,
  `hours` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `accomodation`
--

INSERT INTO `accomodation` (`id`, `entrydate`, `entrytime`, `hours`) VALUES
(62, '03/04/2019', '21:35', '24'),
(63, '03/04/2019', '12:29', '72');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--
-- Creation: Feb 03, 2019 at 10:36 AM
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE `admin` (
  `cid` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `emailid` varchar(100) NOT NULL,
  `password` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`cid`, `name`, `emailid`, `password`) VALUES
(1, 'Ben Stewart', 'sbenstewart@gmail.com', 'test123'),
(3, 'Kiran Krishnan', 'hkirankrishnan98@gmail.com', 'ramadevi');

-- --------------------------------------------------------

--
-- Table structure for table `ambassador`
--
-- Creation: Feb 03, 2019 at 10:36 AM
--

DROP TABLE IF EXISTS `ambassador`;
CREATE TABLE `ambassador` (
  `aid` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `phoneno` varchar(10) NOT NULL,
  `emailid` varchar(100) NOT NULL,
  `code` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ambassador`
--

INSERT INTO `ambassador` (`aid`, `name`, `phoneno`, `emailid`, `code`) VALUES
(1, 'S. Ben Stewart', '9489408090', 'sbenstewart@gmail.com', 'AS9737'),
(2, 'Dhanush S', '9380406310', 'sdhanush1811@gmail.com', 'IU2165'),
(5, 'Saideepesh MR', '9840811105', 'sai3897@gmail.com', 'HO9700'),
(6, 'Praveen S', '9524826237', 'praveenkutti248@gmail.com', 'TW8904'),
(8, 'Susmitha', '9677683645', 'susmithashanmugam@gmail.com', 'IB8949'),
(9, 'Pugazhenthi  P', '7639396830', 'pugazh1002@gmail.com', 'HD1850'),
(10, 'Hari soundappan', '7598070972', 'smartharisoundappan@gmail.com', 'HT0298'),
(11, 'S.  Kavyaa', '8248079489', 'ssk01101999@gmail.com', 'HM9751'),
(12, 'Ponnuerulan', '7395996940', 'ponerul.4114@gmail.com', 'HK2365'),
(13, 'KIRAN KRISHNAN H', '8940150356', 'hkirankrishnan98@gmail.com', 'XO1265'),
(14, 'Aishwarya ', '7358823626', 'aishwaryaanandhan0399@gmail.com', 'MR6898'),
(15, 'Aarthi.M', '8489799120', 'aarthipreethi9799@gmail.com', 'AM6416'),
(17, 'M.ISWARYALAKSHMI ', '8838982322', 'iswaryabecivil@gmail.com', 'SF9713'),
(18, 'shoban raj R', '7558183281', 'shobanrajdgct@gmail.com', 'TT9454');

-- --------------------------------------------------------

--
-- Table structure for table `registrations`
--
-- Creation: Feb 07, 2019 at 03:16 PM
--

DROP TABLE IF EXISTS `registrations`;
CREATE TABLE `registrations` (
  `cid` varchar(100) NOT NULL,
  `id` varchar(100) NOT NULL,
  `Paid` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `registrations`
--

INSERT INTO `registrations` (`cid`, `id`, `Paid`) VALUES
('1', 'EVENTS', NULL),
('16', 'EVENTS', NULL),
('19', 'EVENTS', NULL),
('33', 'TALL STRUCTURES', NULL),
('46', 'TALL STRUCTURES', NULL),
('47', 'TALL STRUCTURES', NULL),
('48', 'TALL STRUCTURES', NULL),
('49', 'EVENTS', NULL),
('50', 'TALL STRUCTURES', NULL),
('51', 'TALL STRUCTURES', NULL),
('52', 'TALL STRUCTURES', NULL),
('54', 'EVENTS', NULL),
('54', 'GROUND IMPROVEMENT TECHNIQUES', NULL),
('54', 'SOLID WASTE MANAGEMENT', NULL),
('54', 'TALL STRUCTURES', NULL),
('55', 'EVENTS', NULL),
('55', 'GROUND IMPROVEMENT TECHNIQUES', NULL),
('55', 'SOLID WASTE MANAGEMENT', NULL),
('55', 'TALL STRUCTURES', NULL),
('57', 'TALL STRUCTURES', NULL),
('6', 'TALL STRUCTURES', NULL),
('63', 'GROUND IMPROVEMENT TECHNIQUES', NULL),
('63', 'SOLID WASTE MANAGEMENT', NULL),
('63', 'TALL STRUCTURES', NULL),
('68', 'Events', 'Paid'),
('70', 'GROUND IMPROVEMENT TECHNIQUES', NULL),
('70', 'TALL STRUCTURES', NULL),
('8', 'EVENTS', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `registrations_temp`
--
-- Creation: Feb 07, 2019 at 03:15 PM
--

DROP TABLE IF EXISTS `registrations_temp`;
CREATE TABLE `registrations_temp` (
  `cid` varchar(100) NOT NULL,
  `id` varchar(100) NOT NULL,
  `Paid` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `registrations_temp`
--

INSERT INTO `registrations_temp` (`cid`, `id`, `Paid`) VALUES
('16', 'EVENTS', NULL),
('6', 'TALL STRUCTURES', NULL),
('1', 'EVENTS', NULL),
('8', 'EVENTS', NULL),
('8', 'EVENTS', NULL),
('46', 'TALL STRUCTURES', NULL),
('46', 'TALL STRUCTURES', NULL),
('33', 'TALL STRUCTURES', NULL),
('33', 'TALL STRUCTURES', NULL),
('33', 'TALL STRUCTURES', NULL),
('33', 'TALL STRUCTURES', NULL),
('33', 'TALL STRUCTURES', NULL),
('47', 'TALL STRUCTURES', NULL),
('48', 'TALL STRUCTURES', NULL),
('48', 'TALL STRUCTURES', NULL),
('49', 'EVENTS', NULL),
('49', 'EVENTS', NULL),
('49', 'EVENTS', NULL),
('50', 'TALL STRUCTURES', NULL),
('51', 'TALL STRUCTURES', NULL),
('52', 'TALL STRUCTURES', NULL),
('52', 'TALL STRUCTURES', NULL),
('19', 'EVENTS', NULL),
('54', 'EVENTS', NULL),
('54', 'TALL STRUCTURES', NULL),
('54', 'GROUND IMPROVEMENT TECHNIQUES', NULL),
('54', 'SOLID WASTE MANAGEMENT', NULL),
('54', 'EVENTS', NULL),
('54', 'EVENTS', NULL),
('54', 'EVENTS', NULL),
('54', 'EVENTS', NULL),
('54', 'EVENTS', NULL),
('55', 'EVENTS', NULL),
('55', 'EVENTS', NULL),
('55', 'EVENTS', NULL),
('55', 'EVENTS', NULL),
('55', 'EVENTS', NULL),
('55', 'EVENTS', NULL),
('55', 'EVENTS', NULL),
('55', 'EVENTS', NULL),
('55', 'EVENTS', NULL),
('55', 'EVENTS', NULL),
('55', 'EVENTS', NULL),
('55', 'EVENTS', NULL),
('55', 'EVENTS', NULL),
('55', 'EVENTS', NULL),
('55', 'EVENTS', NULL),
('55', 'EVENTS', NULL),
('55', 'TALL STRUCTURES', NULL),
('55', 'GROUND IMPROVEMENT TECHNIQUES', NULL),
('55', 'SOLID WASTE MANAGEMENT', NULL),
('55', 'SOLID WASTE MANAGEMENT', NULL),
('55', 'EVENTS', NULL),
('55', 'EVENTS', NULL),
('55', 'EVENTS', NULL),
('55', 'EVENTS', NULL),
('55', 'EVENTS', NULL),
('55', 'EVENTS', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--
-- Creation: Feb 03, 2019 at 10:36 AM
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `cid` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `phoneno` varchar(12) NOT NULL,
  `emailid` varchar(100) NOT NULL,
  `aid` int(11) DEFAULT NULL,
  `college` varchar(250) NOT NULL,
  `year` varchar(100) NOT NULL,
  `dept` varchar(250) NOT NULL,
  `course` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`cid`, `name`, `phoneno`, `emailid`, `aid`, `college`, `year`, `dept`, `course`, `password`) VALUES
(1, 'S. Ben Stewart', '9489408090', 'sbenstewart@gmail.com', NULL, 'CEG', '3', 'CSE', 'B.E.', 'test123'),
(6, 'Santhosh', '123456789', 'santhoshnjg@gmail.com', 1, 'CEG', '3', 'CSE', 'M.E.', 'qwerty'),
(7, 'S.SENTHAMIZH SANKAR ', '8754465134', 'senthamizhsankar@gmail.com', NULL, 'Sri Sairam Institute of Technology ', '4', 'Civil', 'B.E.', 'Sss87544'),
(8, 'Saideepesh MR', '9840811105', 'sai3897@gmail.com', NULL, 'Velammal engineering college ', '3', 'Civil', 'B.E.', 'mindflame'),
(9, 'D.Vignesh', '9087253372', 'earvinvignesh619@gmail.com', 5, 'Velammal Engineering College', '3', 'Civil', 'B.E.', '113216103311'),
(10, 'Ajith Kumar M', '9600944308', 'akajithkumar08@gmail.com', 5, 'Velammal Engineering College', '3', 'Civil', 'B.E.', 'EG1291'),
(12, 'Vigneshwaran', '7401112255', 'vigneshkalaks23@@gmail.com', 5, 'velammal engineering college', '3', 'civil', 'B.E.', 'vvvvvv23'),
(13, 'Susmitha', '9677683645', 'susmithashanmugam@gmail.com', NULL, 'Velammal engineering college', '3', 'Civil engineering', 'B.E.', 'Susmiyogi@99'),
(14, 'Aravind Kavin P S', '8754928806', 'aravindkavin1998@gmail.com', NULL, 'CEG', '4', 'CSE', 'B.E.', 'dummy@123'),
(15, 'Prabhu Sivanandam', '9865781502', 'prabh@gmail.com', NULL, 'CEG', '2', 'CSE', 'B.E.', 'test123'),
(16, 'Pugazhenthi P', '7639396830', 'pugazh1002@gmail.com', NULL, 'Velammal engineering college', '3', 'Civil engineering', 'B.E.', 'QS9944'),
(17, 'Praveen S', '9524826237', 'praveenkutti248@gmail.com', 6, 'Government college of engineering Salem', '2', 'Civil Engineering', 'B.E.', 'Praveen@24'),
(19, 'OMKUMAR P R A', '9360328355', 'omkumar.ok488@gmail.com', NULL, 'Thiagarajar College of Engineering', '3', 'Civil engineering', 'B.E.', 'Welcomeom1107@'),
(20, 'Heena K V', '9597560210', 'kvheena252011@gmail.com', NULL, 'Thiagarajar college of engineering', '3', 'Civil', 'B.E.', 'RT7847'),
(22, 'Sanjana A', '9942911771', 'sanjanaarun17@gmail.com', NULL, 'Thiagarajar College of Engineering', '3', 'Civil', 'B.E.', '605839013'),
(26, 'Syed rashith ', '9176191023', 'syedrashith490@gmail.com', NULL, 'VELAMMAL ENGINEERING college ', '4', 'Civil', 'B.E.', '12345678'),
(28, 'Harisoundappan', '7598070972', 'smartharisoundappan@gmail.com', NULL, 'Sona College of technology', '3', 'Civil', 'B.E.', 'harisound'),
(29, 'Fawaz khan ', '9962750538', 'kfawaz1998@gmail.com', 9, 'Velammal Engineering college ', '3', 'Civil ', 'B.E.', 'Kfawaz@1998'),
(33, 'K.MANIK VISHAL', '9092595657', 'krishnan40vishal@gmail.com', NULL, 'Thiagarajar college of engineering', '3', 'Civil', 'B.E.', 'kaderiamman'),
(34, 'Deepak Raja M', '9488189752', 'deepakraja71@gmail.com', 9, 'Velammal Engineering College ', '3', 'Civil', 'B.E.', 'elavarasi'),
(35, 'vaishnavi', '7448440389', 'vaishnavirajasekaran724@gmail.com', 8, 'velammal engineering college', '3', 'civil', 'B.E.', 'Vaishu@99'),
(37, 'INDIRA KUMAR S', '8344739960', 'sakthishree7837@gmail.com', NULL, 'VELAMMAL ENGINEERING COLLEGE', '2', 'CIVIL ENGINEERING', 'B.E.', 'mathilove'),
(38, 'Priyadharshani.B', '8525049178', 'dharshani0409@gmail.com', 8, 'Velammal engineering college', '3', 'Civil', 'B.E.', '8525049178'),
(39, 'sakthy Anbarasi', '8870254332', 'sakthyanbarasi@gmail.com', 8, 'velammal engineering college', '3', 'civil ', 'B.E.', 'Shakthi@123'),
(40, 'Rajavel', '7868020901', 'rajavel.a.ramalingam@gmail.com', 8, 'Velammal engineering college', '3', 'Civil', 'B.E.', 'Rajavel'),
(41, 'Riswanth Akash', '7373652012', 'akash201321@gmail.com', 8, 'Sri Sai Ram Institute Of Technology', '3', 'Civil Engineering', 'B.E.', 'Akashsus99'),
(42, 'Pranavkumar', '9843158687', 'pranavkumar.selvaraj@gmail.com', NULL, 'M.kumarasamy collage of engineering', '3', 'Civil', 'B.E.', 'AL8569'),
(43, 'Bdhdbdbd', 'Hshdhdhhdd', 'aa@g.c', NULL, 'Gsgdhdhdh', '3', 'Hdgdhd', 'M.E.', '11111'),
(45, 'Ponnuerulan k', '7395996940', 'ponerul.4114@gmail.com', 9, 'Velammal engineering college', '3', 'Civil', 'B.E.', 'arun@1999'),
(46, 'SUDARSHAN V', '8610038433', 'mdusuda@gmail.com', 5, 'P.S.N.A.COLLEGE OF ENGINEERING AND TECHNOLOGY', '4', 'CIVIL ENGINEERING', 'B.E.', 'S@19061997'),
(47, 'VIJAY P', '9751876726', 'mailvijay21498@gmail.com', 5, 'P.S.N.A.COLLEGE OF ENGINEERING AND TECHNOLOGY', '4', 'CIVIL ENGINEERING', 'B.E.', 'iknowpassword'),
(48, 'VIVITHA V', '8610038433', 'vivithavvv307@gmail.com', 5, 'P.S.N.A.COLLEGE OF ENGINEERING AND TECHNOLOGY', '4', 'CIVIL ENGINEERING', 'B.E.', 'vivithaveera'),
(49, 'Paviyaa', '8778372675', 'senthilkumarjs67@gmail.com', NULL, 'Thiagarajar college of engineering ', '3', 'Civil', 'B.E.', 'paviyaa'),
(50, 'SUDHAKARAN V', '9843296251', 'vsudhakaran51@gmail.com', 5, 'P.S.N.A.COLLEGE OF ENGINEERING AND TECHNOLOGY', '4', 'CIVIL ENGINEERING', 'B.E.', 'veeranan'),
(51, 'Sudhan SR', '8883461480', 'sudhanramakanna@gmail.com', 5, 'PSNACET', '4', 'Civil Engineering', 'B.E.', 'sudhan'),
(52, 'THENMOZHI S', '8883461480', 'meenathenu555@gmail.com', 5, 'P.S.N.A.COLLEGE OF ENGINEERING AND TECHNOLOGY', '4', 'CIVIL ENGINEERING', 'B.E.', 'meenathenu'),
(53, 'RANJIT RAJ N', '9003860377', 'ranjitrj5@gmail.com', NULL, 'PONDICHERRY ENGINEERING COLLEGE', '1', 'STRUCTURAL ENGINEERING', 'M.E.', 'ranjitrj5'),
(54, 'Aishwarya ', '7358823626', 'aishwaryaanandhan0399@gmail.com', NULL, 'Velammal Engineering College ', '3', 'Civil', 'B.E.', 'DY0778'),
(55, 'Aarthi.M', '8489799120', 'aarthipreethi9799@gmail.com', NULL, 'Velammal Enginnering College', '3', 'Civil', 'B.E.', 'passwordpassword9799'),
(56, 'Aravind G', '9940712818', 'aravind99doc@gmail.com', NULL, 'Kongu Engineering College', '2', 'Civil Engineering', 'B.E.', 'dhana12345'),
(57, 'Z.THARIQ MOHAMMED', '9994888044', 'thariq.tm231198@gmail.com', NULL, 'THIAGARAJAR COLLEGE OF ENGINEERING', '3', 'Civil', 'B.E.', 'gothapunda'),
(59, 'Thamizharasi M', '9442167549', 'thamizharasitamil001@gmail.com', NULL, 'CEG', '3', 'Civil', 'B.E.', 'XT0902'),
(62, 'Thamizharasi', '7010413102', 'tubbykumba3@gmail.com', NULL, 'CEG', '3', 'Civil', 'B.E.', 'thamizhmayil'),
(63, 'Vijay Bam', ' 91739740651', 'vijaybam191@gmail.com', NULL, 'Sona College Of Technology', '2', 'Civil', 'B.E.', '17Civ@1517101101'),
(64, 'Poojitha', '9176072099', 'poojitha2128@gmail.com', NULL, 'Velammal engineering college ', '3', 'Civil', 'B.E.', 'pooja28'),
(66, 'PRAKASH K M ', '9080391609', 'kmprakash9496@gmail.com', NULL, 'Government college of technology ', '1', 'Geotechnical engineering ', 'M.E.', 'kmp35.8.'),
(67, 'R. SATHISH KUMAR ', '9941737769 ', 'sathish.moorthi1998@gmail.com', NULL, 'Prince shri venkateshwara padmavathy engineering college ', '4', 'Civil Engineering ', 'B.E.', 'figo1234'),
(68, 'Santhosh', '9597336329', 'Smilycivil02@gmail.com', NULL, 'SKP ENGINEERING COLLEGE ', '3', 'Civil', 'B.E.', 'skarpagam'),
(69, 'G.Sakthivel', '7358896958', 'vijaymani20595@gmail.com', NULL, 'AKT Memorial College of Engineering and Technology', '3', 'Civil Engineering', 'B.E.', '7358896958'),
(70, 'Vignesh ', '8825831791', 'vigneshb4567@gmail.com', NULL, 'Hindusthan college of engineering and technology ', '3', 'Civil engineering ', 'B.E.', 'vigneshB25'),
(71, 'Vignesh E', '8144917180', 'vigneshesv5@gmail.com', NULL, 'Anna University ceg', '4', 'Civil', 'B.E.', '1234567890'),
(72, 'Joyce Christina J', '9655463081', 'joyce17christina@gmail.com', NULL, 'Karpagam College of Engineering ', '3', 'Civil engineering ', 'B.E.', '9655463081'),
(77, 'Nityashri. P', '9677154480', 'nityashriparthiban9698@gmail.com', 15, 'Velammal engineering college ', '3', 'Civil engineering ', 'B.E.', 'jaanu1998'),
(80, 'Bharathraj', '9003986843', 'bharathraj1386@gmail.com', NULL, 'Knowledge institute of technology,Salem', '3', 'Civil', 'B.E.', 'sucess121'),
(82, 'naresh k', '9626123716', 'naresh.16ce@kct.ac.in', NULL, 'Kumaraguru college of technology', '3', 'Civil engineering', 'B.E.', '01/04/1999'),
(83, 'Pranesh A K', '9080129757', 'praneshak0011@gmail.com', NULL, 'Kongu Engineering College', '2', 'Civil engineering', 'B.E.', 'pppp123123'),
(84, 'Abirami.M', '6379280306', 'abhiramimuruganantham@gmail.com', NULL, 'Velammal engineering college', '4', 'Civil', 'B.E.', ''),
(85, 'Paras Kumar Gupta', '7904393540', 'rauniyarparasss@gmail.com', NULL, 'Sona College of Technology', '3', 'Civil', 'B.E.', 'pkgparas12345'),
(86, 'DEEPAK C', '7092592147', 'deepakzack191999@gmail.com', NULL, 'velammal engineering college', '3', 'civil department', 'B.E.', '7092592147'),
(88, 'Ajay Vikram Tej K S', '9994526623', 'ajayks06091998@gmail.com', NULL, 'Sri Shakthi Institute Of Engineering and Technology', '3', 'Civil Engineering', 'B.E.', 'Ajayks'),
(89, 'Arunkumar.S', '9894346760', 'lsarunkumar98@gmail.com', NULL, 'MAHA BARATHI ENGGINNERING', '3', 'Civil', 'B.E.', 'NN1062');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accomodation`
--
ALTER TABLE `accomodation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`cid`),
  ADD UNIQUE KEY `emailid` (`emailid`);

--
-- Indexes for table `ambassador`
--
ALTER TABLE `ambassador`
  ADD PRIMARY KEY (`aid`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `registrations`
--
ALTER TABLE `registrations`
  ADD UNIQUE KEY `user_info` (`cid`,`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`cid`),
  ADD UNIQUE KEY `emailid` (`emailid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `ambassador`
--
ALTER TABLE `ambassador`
  MODIFY `aid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=90;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
