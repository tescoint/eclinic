-- phpMyAdmin SQL Dump
-- version 4.6.3deb1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 02, 2016 at 08:34 AM
-- Server version: 5.6.30-1
-- PHP Version: 5.6.17-1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eclinic`
--

-- --------------------------------------------------------

--
-- Table structure for table `labform`
--

CREATE TABLE `labform` (
  `id` int(10) NOT NULL,
  `stid` int(10) NOT NULL,
  `doc_id` int(10) NOT NULL,
  `notation_id` int(10) NOT NULL,
  `sample` varchar(400) NOT NULL,
  `investigation` varchar(400) NOT NULL,
  `edate` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `labform`
--

INSERT INTO `labform` (`id`, `stid`, `doc_id`, `notation_id`, `sample`, `investigation`, `edate`) VALUES
(1, 1, 2, 18, 'BLOOD', 'Check For HIV', '2015-04-14'),
(2, 1, 2, 29, 'BLOOD', 'TEST FOR HIV OOO', '2015-Mon-Aug'),
(3, 1, 2, 30, 'BLOOD', 'Please test for traces of Hiv in the patients blood stream', '2015-Mon-Aug');

-- --------------------------------------------------------

--
-- Table structure for table `labreport`
--

CREATE TABLE `labreport` (
  `id` int(10) NOT NULL,
  `stid` int(10) NOT NULL,
  `doc_id` int(10) NOT NULL,
  `lab_req_id` int(10) NOT NULL,
  `notation_id` int(10) NOT NULL,
  `edate` varchar(200) NOT NULL,
  `checked` varchar(200) NOT NULL,
  `h1` varchar(200) NOT NULL,
  `h2` varchar(200) NOT NULL,
  `h3` varchar(200) NOT NULL,
  `h4` varchar(200) NOT NULL,
  `h5` varchar(200) NOT NULL,
  `h6` varchar(200) NOT NULL,
  `h7` varchar(200) NOT NULL,
  `h8` int(10) NOT NULL,
  `h9` int(10) NOT NULL,
  `h10` int(10) NOT NULL,
  `h11` varchar(200) NOT NULL,
  `h12` varchar(200) NOT NULL,
  `h13` varchar(200) NOT NULL,
  `h14` varchar(200) NOT NULL,
  `h15` varchar(200) NOT NULL,
  `h16` varchar(200) NOT NULL,
  `h17` varchar(200) NOT NULL,
  `h18` varchar(200) NOT NULL,
  `h19` varchar(200) NOT NULL,
  `h20` varchar(200) NOT NULL,
  `bt1` varchar(200) NOT NULL,
  `bt2` varchar(200) NOT NULL,
  `bt3` varchar(200) NOT NULL,
  `bt3_1` varchar(200) NOT NULL,
  `bt4` varchar(200) NOT NULL,
  `bt4_1` varchar(200) NOT NULL,
  `bt5` varchar(200) NOT NULL,
  `bt5_1` varchar(200) NOT NULL,
  `mb1_o` varchar(200) NOT NULL,
  `mb1_h` varchar(200) NOT NULL,
  `mb2_o` varchar(200) NOT NULL,
  `mb2_h` varchar(200) NOT NULL,
  `mb3_o` varchar(200) NOT NULL,
  `mb3_h` varchar(200) NOT NULL,
  `mb4_o` varchar(200) NOT NULL,
  `mb4_h` varchar(200) NOT NULL,
  `mbcomment` varchar(200) NOT NULL,
  `mbparasite` varchar(200) NOT NULL,
  `mb5` varchar(200) NOT NULL,
  `mb6` varchar(200) NOT NULL,
  `mb7` varchar(200) NOT NULL,
  `mb8` varchar(200) NOT NULL,
  `mb9` varchar(200) NOT NULL,
  `mb10` varchar(200) NOT NULL,
  `mb11` varchar(200) NOT NULL,
  `mb12` varchar(200) NOT NULL,
  `mb13` varchar(200) NOT NULL,
  `mb14` varchar(200) NOT NULL,
  `mb15` varchar(200) NOT NULL,
  `mb16` varchar(200) NOT NULL,
  `mb17` varchar(200) NOT NULL,
  `mb18` varchar(200) NOT NULL,
  `mb19` varchar(200) NOT NULL,
  `mb20` varchar(200) NOT NULL,
  `mb21` varchar(200) NOT NULL,
  `mb22` varchar(200) NOT NULL,
  `mb23` varchar(200) NOT NULL,
  `mb24` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `labreport`
--

INSERT INTO `labreport` (`id`, `stid`, `doc_id`, `lab_req_id`, `notation_id`, `edate`, `checked`, `h1`, `h2`, `h3`, `h4`, `h5`, `h6`, `h7`, `h8`, `h9`, `h10`, `h11`, `h12`, `h13`, `h14`, `h15`, `h16`, `h17`, `h18`, `h19`, `h20`, `bt1`, `bt2`, `bt3`, `bt3_1`, `bt4`, `bt4_1`, `bt5`, `bt5_1`, `mb1_o`, `mb1_h`, `mb2_o`, `mb2_h`, `mb3_o`, `mb3_h`, `mb4_o`, `mb4_h`, `mbcomment`, `mbparasite`, `mb5`, `mb6`, `mb7`, `mb8`, `mb9`, `mb10`, `mb11`, `mb12`, `mb13`, `mb14`, `mb15`, `mb16`, `mb17`, `mb18`, `mb19`, `mb20`, `mb21`, `mb22`, `mb23`, `mb24`) VALUES
(1, 1, 2, 1, 18, '', '', '12', '20', '023', '0', '0', '0', '0', 0, 0, 0, '', '', '0', '0', '0', '0', '0', '', '', '', '0', '0', '0', '', '', '090', '', '', '0', '20', '0', '0', '0', '0', '0', '0', '', '', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0'),
(30, 1, 2, 3, 30, '', '1', '23', '76', '70', '32', '3000', '4', '43', 23, 23333, 78, 'cccc<br>', 'AA', 'O-', '12', '2', '5', '3', '677', '23', '7', 'O-', 'YES', '43', '1', '-ve', '1', '22', '1', '12', '3', '13', '2', '3', '12', '1', '32', '<b><span class="wysiwyg-color-purple">qwe<br>ghggcvc<u>fffgffff</u><br></span></b>', 'None', '1', 'Sure', '1', '54', '1', '32', '1', '2', '1', '7', '1', '4', '1', '5', '1', '7', '1', '3', '1', '44');

-- --------------------------------------------------------

--
-- Table structure for table `notation`
--

CREATE TABLE `notation` (
  `id` int(10) NOT NULL,
  `stid` int(10) NOT NULL,
  `doc_id` int(10) NOT NULL,
  `lab_required` varchar(10) NOT NULL,
  `lab_req_id` varchar(10) NOT NULL,
  `lab_report_id` varchar(10) NOT NULL,
  `edate` varchar(200) NOT NULL,
  `prescription` longtext NOT NULL,
  `collected` varchar(10) NOT NULL,
  `notation` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notation`
--

INSERT INTO `notation` (`id`, `stid`, `doc_id`, `lab_required`, `lab_req_id`, `lab_report_id`, `edate`, `prescription`, `collected`, `notation`) VALUES
(18, 1, 2, '1', '1', '1', '2016-03-17', 'JONATHANJULISTESLIMWALECHRISYOMIISMAILDOLAPOYINKADAYOBOYOCHRISTIANAPASTORRUFAIJONATHANJULISTESLIMWALECHRISYOMIISMAILDOLAPOYINKADAYOBOYOCHRISTIANAPASTORRUFAIJONATHANJULISTESLIMWALECHRISYOMIISMAILDOLAPOYINKADAYOBOYOCHRISTIANAPASTORRUFAIJONATHANJULISTESLIMWALECHRISYOMIISMAILDOLAPOYINKADAYOBOYOCHRISTIANAPASTORRUFAIJONATHANJULISTESLIMWALECHRISYOMIISMAILDOLAPOYINKADAYOBOYOCHRISTIANAPASTORRUFAIJONATHANJULISTESLIMWALECHRISYOMIISMAILDOLAPOYINKADAYOBOYOCHRISTIANAPASTORRUFAIJONATHANJULISTESLIMWALECHRISYOMIISMAILDOLAPOYINKADAYOBOYOCHRISTIANAPASTORRUFAIJONATHANJULISTESLIMWALECHRISYOMIISMAILDOLAPOYINKADAYOBOYOCHRISTIANAPASTORRUFAIJONATHANJULISTESLIMWALECHRISYOMIISMAILDOLAPOYINKADAYOBOYOCHRISTIANAPASTORRUFAIJONATHANJULISTESLIMWALECHRISYOMIISMAILDOLAPOYINKADAYOBOYOCHRISTIANAPASTORRUFAIJONATHANJULISTESLIMWALECHRISYOMIISMAILDOLAPOYINKADAYOBOYOCHRISTIANAPASTORRUFAIJONATHANJULISTESLIMWALECHRISYOMIISMAILDOLAPOYINKADAYOBOYOCHRISTIANAPASTORRUFAIJONATHANJULISTESLIMWALECHRISYOMIISMAILDOLAPOYINKADAYOBOYOCHRISTIANAPASTORRUFAIJONATHANJULISTESLIMWALECHRISYOMIISMAILDOLAPOYINKADAYOBOYOCHRISTIANAPASTORRUFAIJONATHANJULISTESLIMWALECHRISYOMIISMAILDOLAPOYINKADAYOBOYOCHRISTIANAPASTORRUFAIJONATHANJULISTESLIMWALECHRISYOMIISMAILDOLAPOYINKADAYOBOYOCHRISTIANAPASTORRUFAIJONATHANJULISTESLIMWALECHRISYOMIISMAILDOLAPOYINKADAYOBOYOCHRISTIANAPASTORRUFAIJONATHANJULISTESLIMWALECHRISYOMIISMAILDOLAPOYINKADAYOBOYOCHRISTIANAPASTORRUFAI', '1', 'JONATHANJULISTESLIMWALECHRISYOMIISMAILDOLAPOYINKADAYOBOYOCHRISTIANAPASTORRUFAIJONATHANJULISTESLIMWALECHRISYOMIISMAILDOLAPOYINKADAYOBOYOCHRISTIANAPASTORRUFAIJONATHANJULISTESLIMWALECHRISYOMIISMAILDOLAPOYINKADAYOBOYOCHRISTIANAPASTORRUFAIJONATHANJULISTESLIMWALECHRISYOMIISMAILDOLAPOYINKADAYOBOYOCHRISTIANAPASTORRUFAIJONATHANJULISTESLIMWALECHRISYOMIISMAILDOLAPOYINKADAYOBOYOCHRISTIANAPASTORRUFAIJONATHANJULISTESLIMWALECHRISYOMIISMAILDOLAPOYINKADAYOBOYOCHRISTIANAPASTORRUFAIJONATHANJULISTESLIMWALECHRISYOMIISMAILDOLAPOYINKADAYOBOYOCHRISTIANAPASTORRUFAIJONATHANJULISTESLIMWALECHRISYOMIISMAILDOLAPOYINKADAYOBOYOCHRISTIANAPASTORRUFAIJONATHANJULISTESLIMWALECHRISYOMIISMAILDOLAPOYINKADAYOBOYOCHRISTIANAPASTORRUFAIJONATHANJULISTESLIMWALECHRISYOMIISMAILDOLAPOYINKADAYOBOYOCHRISTIANAPASTORRUFAIJONATHANJULISTESLIMWALECHRISYOMIISMAILDOLAPOYINKADAYOBOYOCHRISTIANAPASTORRUFAIJONATHANJULISTESLIMWALECHRISYOMIISMAILDOLAPOYINKADAYOBOYOCHRISTIANAPASTORRUFAIJONATHANJULISTESLIMWALECHRISYOMIISMAILDOLAPOYINKADAYOBOYOCHRISTIANAPASTORRUFAIJONATHANJULISTESLIMWALECHRISYOMIISMAILDOLAPOYINKADAYOBOYOCHRISTIANAPASTORRUFAIJONATHANJULISTESLIMWALECHRISYOMIISMAILDOLAPOYINKADAYOBOYOCHRISTIANAPASTORRUFAIJONATHANJULISTESLIMWALECHRISYOMIISMAILDOLAPOYINKADAYOBOYOCHRISTIANAPASTORRUFAIJONATHANJULISTESLIMWALECHRISYOMIISMAILDOLAPOYINKADAYOBOYOCHRISTIANAPASTORRUFAIJONATHANJULISTESLIMWALECHRISYOMIISMAILDOLAPOYINKADAYOBOYOCHRISTIANAPASTORRUFAIJONATHANJULISTESLIMWALECHRISYOMIISMAILDOLAPOYINKADAYOBOYOCHRISTIANAPASTORRUFAIJONATHANJULISTESLIMWALECHRISYOMIISMAILDOLAPOYINKADAYOBOYOCHRISTIANAPASTORRUFAIJONATHANJULISTESLIMWALECHRISYOMIISMAILDOLAPOYINKADAYOBOYOCHRISTIANAPASTORRUFAIJONATHANJULISTESLIMWALECHRISYOMIISMAILDOLAPOYINKADAYOBOYOCHRISTIANAPASTORRUFAIJONATHANJULISTESLIMWALECHRISYOMIISMAILDOLAPOYINKADAYOBOYOCHRISTIANAPASTORRUFAIJONATHANJULISTESLIMWALECHRISYOMIISMAILDOLAPOYINKADAYOBOYOCHRISTIANAPASTORRUFAIJONATHANJULISTESLIMWALECHRISYOMIISMAILDOLAPOYINKADAYOBOYOCHRISTIANAPASTORRUFAI'),
(19, 1, 2, '', '', '', '2015-Sun-Aug', 'Give him paracetamol<br>', '0', 'YOU are sick having headache<br>'),
(20, 1, 2, '1', '', '', '2015-16-08', 'OOYA LETS SEE O<br>', '0', 'Testing The MOdal Lets See How It Goes<br>'),
(21, 1, 2, '1', '', '', '2015-16-08', 'OOYA LETS SEE O<br>', '0', 'Testing The MOdal Lets See How It Goes<br>'),
(22, 1, 2, '1', '', '', '2015-16-08', 'PEACE DRUGS HAHAH<br>', '0', 'THIS ACTUIAKKLLY THE SECOND TRIAL<br>'),
(23, 1, 2, '1', '', '', '2015-16-08', '', '', 'Hello AWAYU<br>'),
(24, 1, 2, '1', '', '', '2015-16-08', '', '', 'LABORATORY<br>'),
(25, 1, 2, '1', '', '', '2015-16-08', '', '', 'YAHHHH<br>'),
(26, 1, 2, '1', '', '', '2015-16-08', '', '', 'YAHHHH<br>'),
(27, 1, 2, '1', '', '', '2015-17-08', '', '', 'YAHHHH<br>'),
(28, 1, 2, '1', '', '', '2015-17-08', '', '', 'TESTING<br>'),
(29, 1, 2, '1', '2', '', '2015-17-08', '', '', 'LAST TRYER<br>'),
(30, 1, 2, '1', '3', '30', '2015-17-08', 'OK treated Not Having HIV<br>', '', 'LAst Final Testin <br>'),
(31, 1, 2, '', '', '', '2015-19-08', 'Give Him Paracetamol<br>', '1', 'TReat uss<br>');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `card_number` varchar(200) NOT NULL,
  `usertype` varchar(10) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  `edate` varchar(200) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `passport` varchar(200) NOT NULL,
  `surname` varchar(200) NOT NULL,
  `first_name` varchar(200) NOT NULL,
  `middle_name` varchar(200) NOT NULL,
  `c_name` varchar(200) NOT NULL,
  `c_address` varchar(200) NOT NULL,
  `c_phone` varchar(200) NOT NULL,
  `dob` varchar(200) NOT NULL,
  `gender` int(10) NOT NULL,
  `relationship_status` int(10) NOT NULL,
  `programme` int(10) NOT NULL,
  `home_address` longtext NOT NULL,
  `guardian` varchar(200) NOT NULL,
  `guardian_relationship` varchar(200) NOT NULL,
  `guardian_address` longtext NOT NULL,
  `phoneno` varchar(200) NOT NULL,
  `guardian_phoneno` varchar(200) NOT NULL,
  `mh_1` varchar(10) NOT NULL,
  `mh_2` varchar(10) NOT NULL,
  `mh_3` varchar(10) NOT NULL,
  `mh_4` varchar(10) NOT NULL,
  `mh_5` longtext NOT NULL,
  `mh_6` varchar(10) NOT NULL,
  `mh_7` varchar(10) NOT NULL,
  `mh_8` longtext NOT NULL,
  `mh_9` longtext NOT NULL,
  `mh_10` varchar(200) NOT NULL,
  `mh_11` varchar(10) NOT NULL,
  `mh_12` varchar(10) NOT NULL,
  `mh_13` varchar(10) NOT NULL,
  `mh_14` varchar(200) NOT NULL,
  `mh_15` varchar(10) NOT NULL,
  `sh_1` varchar(200) NOT NULL,
  `sh_2` varchar(500) NOT NULL,
  `sh_3` varchar(500) NOT NULL,
  `sh_4` varchar(500) NOT NULL,
  `dh_1` varchar(500) NOT NULL,
  `dh_2` varchar(500) NOT NULL,
  `ih_1` varchar(200) NOT NULL,
  `ih_2` varchar(200) NOT NULL,
  `ih_3` varchar(200) NOT NULL,
  `ih_4` varchar(200) NOT NULL,
  `ih_5` varchar(200) NOT NULL,
  `ffs1` varchar(200) NOT NULL,
  `ffs2` varchar(200) NOT NULL,
  `bm1` varchar(200) NOT NULL,
  `bm2` varchar(200) NOT NULL,
  `tt1` varchar(200) NOT NULL,
  `tt2` varchar(200) NOT NULL,
  `tt3` varchar(200) NOT NULL,
  `tt4` varchar(200) NOT NULL,
  `tt5` varchar(200) NOT NULL,
  `tt6` varchar(200) NOT NULL,
  `tt7` varchar(200) NOT NULL,
  `tt8` varchar(200) NOT NULL,
  `tt9` varchar(200) NOT NULL,
  `tt10` varchar(200) NOT NULL,
  `tt11` varchar(200) NOT NULL,
  `tt12` varchar(200) NOT NULL,
  `tt13` varchar(200) NOT NULL,
  `tt14` varchar(200) NOT NULL,
  `tt15` varchar(200) NOT NULL,
  `tt16` varchar(200) NOT NULL,
  `lt1` varchar(200) NOT NULL,
  `lt2` varchar(200) NOT NULL,
  `lt3` varchar(200) NOT NULL,
  `lt4` varchar(200) NOT NULL,
  `lt5` varchar(200) NOT NULL,
  `lt6` varchar(200) NOT NULL,
  `lt7` varchar(200) NOT NULL,
  `lt8` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `card_number`, `usertype`, `status`, `edate`, `username`, `password`, `passport`, `surname`, `first_name`, `middle_name`, `c_name`, `c_address`, `c_phone`, `dob`, `gender`, `relationship_status`, `programme`, `home_address`, `guardian`, `guardian_relationship`, `guardian_address`, `phoneno`, `guardian_phoneno`, `mh_1`, `mh_2`, `mh_3`, `mh_4`, `mh_5`, `mh_6`, `mh_7`, `mh_8`, `mh_9`, `mh_10`, `mh_11`, `mh_12`, `mh_13`, `mh_14`, `mh_15`, `sh_1`, `sh_2`, `sh_3`, `sh_4`, `dh_1`, `dh_2`, `ih_1`, `ih_2`, `ih_3`, `ih_4`, `ih_5`, `ffs1`, `ffs2`, `bm1`, `bm2`, `tt1`, `tt2`, `tt3`, `tt4`, `tt5`, `tt6`, `tt7`, `tt8`, `tt9`, `tt10`, `tt11`, `tt12`, `tt13`, `tt14`, `tt15`, `tt16`, `lt1`, `lt2`, `lt3`, `lt4`, `lt5`, `lt6`, `lt7`, `lt8`) VALUES
(1, 'DE/2013/023', '', 0, '2015', '', '', '', 'Ovili', 'Johnbu', 'Ogochukwu', 'Pastor Rufai', 'C++ AVENUE, OPPOSITE JAVA, ALONG C#', '08078XXXXXX', '1990-03-17', 1, 0, 2, 'Iwesi Aiyegbami', 'Adetona Adewale', 'Tozo Grand', 'C++ AVENUE, OPPOSITE JAVA, ALONG C#', '08096987678', '0986456787', '0', '1', '0', '0', '', '0', '0', '', '', '', '0', '0', '0', '', '0', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '12pi', '2', '13', 'O+', 'AA', 'Negative', '3', '2015-08-17'),
(2, 'D/01/100', '2', 0, '2015', 'doctor', 'f9f16d97c90d8c6f2cab37bb6d1f1992', '', 'Julius', 'Oyewole', 'Jonathan', '', '', '', '1980-03-17', 1, 0, 0, '', '', '', '', '', '', '0', '0', '0', '0', '', '0', '0', '', '', '', '0', '0', '0', '', '0', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(3, 'DE/200/1', '3', 0, '2015', 'labtech', 'ad13559bb0d76f844f9e3d89c5c2c416', '', 'Sule', 'Waylee', 'Halalex', '', '', '', '', 1, 2, 0, '', '', '', '', '', '', '0', '0', '0', '0', '', '0', '0', '', '', '', '0', '0', '0', '', '0', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(4, 'DE/20/1289', '1', 0, '2012', 'recordoff', '94b0f57731302965e067224786d2cf23', '', 'TES', 'SAL', 'Z', '', '', '', '', 1, 2, 0, '', '', '', '', '', '', '0', '0', '0', '0', '', '0', '0', '', '', '', '0', '0', '0', '', '0', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(5, 'ST/00/191', '6', 0, '2010', 'pharma', 'd1ad3553aac1a7bdd7260eae71674ba9', '', '', 'Ismail', 'Doneez', 'Donchristy', '', '', '', 0, 0, 0, '', '', '', '', '', '', '0', '0', '0', '0', '', '0', '0', '', '', '', '0', '0', '0', '', '0', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(18, 'PG/2015/18', '', 0, '2015', '', '', 'PG201518.jpg', 'SALAKO', 'TESLIM', 'AKOLADE', 'ALFA ILORIN', 'c', '08052125116', '1990-03-17', 1, 1, 4, 'c', 'DR. SALAKO', 'FATHER', 'c', '07059717498', '08034771380', '1', '1', '1', '', '1', '1', '1', '', '', '1', '1', '1', '0', '', '1', 'CODING', '1', '1', '1', '1', '1', '1', '1', '', '1', '1', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(19, 'PG/2015/19', '', 0, '2015/2016', '', '', 'PG201519.jpg', 'SAL', 'TES', 'ADE', 'ALFA ILORIN', 'HELLo', '08052125116', '1990-03-17', 1, 0, 4, 'HELLo', 'DR. SALAKO', 'FATHER', 'HELLo', '07059717498', '08034771380', '1', '1', '1', '', '1', '1', '1', '', '', '1', '1', '1', '0', '', '1', 'CODING', '1', '1', '1', '1', '1', '1', '1', '', '1', '1', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(20, 'ST/01/001', '0', 0, '2015', 'director', '3d4e992d8d8a7d848724aa26ed7f4176', '', 'Director', 'Eclinic', '', '', '', '', '1980-03-17', 1, 0, 0, '', '', '', '', '', '', '0', '0', '0', '0', '', '0', '0', '', '', '', '0', '0', '0', '', '0', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(21, 'ST/01/002', '4', 0, '2015', 'matron', '0b7e936c477097c1052df6bae315fd61', '', 'Matron', 'Eclinic', '', '', '', '', '1980-03-17', 1, 0, 0, '', '', '', '', '', '', '0', '0', '0', '0', '', '0', '0', '', '', '', '0', '0', '0', '', '0', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(22, 'ST/01/003', '5', 0, '2015', 'tester', 'f5d1278e8109edd94e1e4197e04873b9', '', 'Tester', 'Eclinic', '', '', '', '', '1980-03-17', 1, 0, 0, '', '', '', '', '', '', '0', '0', '0', '0', '', '0', '0', '', '', '', '0', '0', '0', '', '0', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `labform`
--
ALTER TABLE `labform`
  ADD PRIMARY KEY (`id`),
  ADD KEY `stid` (`stid`),
  ADD KEY `doc_id` (`doc_id`),
  ADD KEY `notation_id` (`notation_id`);

--
-- Indexes for table `labreport`
--
ALTER TABLE `labreport`
  ADD PRIMARY KEY (`id`),
  ADD KEY `stid` (`stid`),
  ADD KEY `doc_id` (`doc_id`),
  ADD KEY `lab_req_id` (`lab_req_id`),
  ADD KEY `notation_id` (`notation_id`);

--
-- Indexes for table `notation`
--
ALTER TABLE `notation`
  ADD PRIMARY KEY (`id`),
  ADD KEY `stid` (`stid`),
  ADD KEY `doc_id` (`doc_id`),
  ADD KEY `lab_required` (`lab_required`),
  ADD KEY `lab_required_2` (`lab_required`),
  ADD KEY `lab_req_id` (`lab_req_id`),
  ADD KEY `lab_report_id` (`lab_report_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `labform`
--
ALTER TABLE `labform`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `labreport`
--
ALTER TABLE `labreport`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT for table `notation`
--
ALTER TABLE `notation`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `labform`
--
ALTER TABLE `labform`
  ADD CONSTRAINT `ibfk1` FOREIGN KEY (`stid`) REFERENCES `notation` (`stid`),
  ADD CONSTRAINT `ibfk2` FOREIGN KEY (`doc_id`) REFERENCES `notation` (`doc_id`),
  ADD CONSTRAINT `ibfkk3` FOREIGN KEY (`notation_id`) REFERENCES `notation` (`id`);

--
-- Constraints for table `labreport`
--
ALTER TABLE `labreport`
  ADD CONSTRAINT `labreport_ibfk_1` FOREIGN KEY (`stid`) REFERENCES `users` (`id`) ON UPDATE NO ACTION,
  ADD CONSTRAINT `labreport_ibfk_2` FOREIGN KEY (`doc_id`) REFERENCES `users` (`id`) ON UPDATE NO ACTION,
  ADD CONSTRAINT `labreport_ibfk_3` FOREIGN KEY (`lab_req_id`) REFERENCES `labform` (`id`) ON UPDATE NO ACTION,
  ADD CONSTRAINT `labreport_ibfk_4` FOREIGN KEY (`notation_id`) REFERENCES `notation` (`id`) ON UPDATE NO ACTION;

--
-- Constraints for table `notation`
--
ALTER TABLE `notation`
  ADD CONSTRAINT `notation_ibfk_1` FOREIGN KEY (`stid`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `notation_ibfk_2` FOREIGN KEY (`doc_id`) REFERENCES `users` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
