-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 02, 2017 at 09:16 AM
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
-- Database: `hris_v1`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `account_id` int(12) NOT NULL,
  `account_username` varchar(45) NOT NULL,
  `account_password` tinytext NOT NULL,
  `account_type` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`account_id`, `account_username`, `account_password`, `account_type`) VALUES
(1, 'alohajaycee', '123456', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_id` int(12) NOT NULL,
  `category_name` varchar(45) NOT NULL,
  `category_description` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `category_name`, `category_description`) VALUES
(1, 'Effectiveness of Teaching', NULL),
(2, 'Personal and Social Traits', NULL),
(3, 'Additional Information', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `civilstatus`
--

CREATE TABLE `civilstatus` (
  `civilStatus_id` int(12) NOT NULL,
  `civilStatus_name` varchar(45) NOT NULL,
  `civilStatus_description` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `civilstatus`
--

INSERT INTO `civilstatus` (`civilStatus_id`, `civilStatus_name`, `civilStatus_description`) VALUES
(3, 'Married', NULL),
(4, 'Single', NULL),
(5, 'Divorced', NULL),
(6, 'Widowed', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `department_id` int(12) NOT NULL,
  `department_name` varchar(45) NOT NULL,
  `department_description` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`department_id`, `department_name`, `department_description`) VALUES
(1, 'Basic Education (Main)', NULL),
(2, 'Basic Education (Barretto)', NULL),
(3, 'Architecture', NULL),
(4, 'Arts & Sciences', NULL),
(5, 'College of Nursing', NULL),
(6, 'Education', NULL),
(7, 'Business Admin ', NULL),
(8, 'Computer Studies', NULL),
(9, 'Engineering', NULL),
(10, 'Office Staff (Barretto)', NULL),
(11, 'Office Staff (Olongapo)', NULL),
(12, 'Maintenance (Main)', NULL),
(13, 'Maintenance (Barretto)', NULL),
(14, 'Maintenance (Hotel)', NULL),
(15, 'Security (Main)', NULL),
(16, 'Security (Barretto)', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `employee_id` int(12) NOT NULL,
  `employee_lastName` varchar(45) NOT NULL,
  `employee_firstName` varchar(45) NOT NULL,
  `employee_middleName` varchar(45) DEFAULT NULL,
  `employee_dob` date NOT NULL,
  `employee_address` varchar(255) DEFAULT NULL,
  `employee_email` varchar(45) DEFAULT NULL,
  `employee_account` int(12) DEFAULT NULL,
  `employee_gender` int(12) DEFAULT NULL,
  `employee_civilStatus` int(12) DEFAULT NULL,
  `employee_religion` int(12) DEFAULT NULL,
  `employee_status` int(12) NOT NULL,
  `employee_employmentStatus` int(12) NOT NULL,
  `employee_department` int(12) NOT NULL,
  `employee_position` int(12) NOT NULL,
  `employee_photo` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`employee_id`, `employee_lastName`, `employee_firstName`, `employee_middleName`, `employee_dob`, `employee_address`, `employee_email`, `employee_account`, `employee_gender`, `employee_civilStatus`, `employee_religion`, `employee_status`, `employee_employmentStatus`, `employee_department`, `employee_position`, `employee_photo`) VALUES
(13310146, 'Mariano', 'Jaycee', 'Lim', '1996-02-24', '198 Baraca Camachille Subic Zambales', 'alohajaycee@gmail.com', 1, 2, 4, NULL, 1, 1, 8, 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `employmentstatus`
--

CREATE TABLE `employmentstatus` (
  `employmentStatus_id` int(12) NOT NULL,
  `employmentStatus_name` varchar(45) NOT NULL,
  `employmentStatus_description` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employmentstatus`
--

INSERT INTO `employmentstatus` (`employmentStatus_id`, `employmentStatus_name`, `employmentStatus_description`) VALUES
(1, 'full-time', NULL),
(2, 'part-time', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `gender`
--

CREATE TABLE `gender` (
  `gender_id` int(12) NOT NULL,
  `gender_name` varchar(45) NOT NULL,
  `gender_description` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gender`
--

INSERT INTO `gender` (`gender_id`, `gender_name`, `gender_description`) VALUES
(1, 'Male', NULL),
(2, 'Female', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `load`
--

CREATE TABLE `load` (
  `load_id` int(12) NOT NULL,
  `load_subject` int(12) NOT NULL,
  `load_employee` int(12) NOT NULL,
  `load_timeStart` time NOT NULL,
  `load_timeEnd` time NOT NULL,
  `load_dayCode` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `load`
--

INSERT INTO `load` (`load_id`, `load_subject`, `load_employee`, `load_timeStart`, `load_timeEnd`, `load_dayCode`) VALUES
(2, 2, 13310146, '13:00:00', '16:00:00', 'W');

-- --------------------------------------------------------

--
-- Table structure for table `pin`
--

CREATE TABLE `pin` (
  `pin_id` int(12) NOT NULL,
  `pin_code` int(6) NOT NULL,
  `pin_load` int(12) NOT NULL,
  `pin_expiration` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pin`
--

INSERT INTO `pin` (`pin_id`, `pin_code`, `pin_load`, `pin_expiration`) VALUES
(1, 123456, 2, '2017-11-30 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `position`
--

CREATE TABLE `position` (
  `position_id` int(12) NOT NULL,
  `position_name` varchar(45) NOT NULL,
  `position_description` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `position`
--

INSERT INTO `position` (`position_id`, `position_name`, `position_description`) VALUES
(1, 'dean', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `post_id` int(12) NOT NULL,
  `post_title` varchar(45) NOT NULL,
  `post_when` date DEFAULT NULL,
  `post_body` tinytext,
  `post_author` int(12) NOT NULL,
  `post_type` int(12) NOT NULL,
  `post_dateCreated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `post_dateUpdated` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`post_id`, `post_title`, `post_when`, `post_body`, `post_author`, `post_type`, `post_dateCreated`, `post_dateUpdated`) VALUES
(3, 'This is an announcement', NULL, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has su', 1, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 'This is an event', '2017-11-04', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has su', 1, 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, 'Another Event Post', '2017-11-17', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has su', 1, 2, '2017-10-28 16:58:21', '0000-00-00 00:00:00'),
(6, 'Sunday Announcement', NULL, 'Lorem Ipsum', 1, 1, '2017-10-29 08:03:01', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `question`
--

CREATE TABLE `question` (
  `question_id` int(12) NOT NULL,
  `question_question` varchar(255) NOT NULL,
  `question_subcategory` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `question`
--

INSERT INTO `question` (`question_id`, `question_question`, `question_subcategory`) VALUES
(181, 'Has mastery of the subject matter.', 1),
(240, 'Is up-to-date in knowledge of the subject.', 1),
(241, 'Shows evidence of systematic planning of lessons presented.', 1),
(242, 'Points out relationship of subject matter with other disciplines.', 1),
(243, 'Integrates Christian values in subject matter and in teaching.', 1),
(244, 'Is articulate in communicating ideas.', 2),
(245, 'Makes the lesson interesting and pertinent.', 2),
(246, 'Uses variety of techniques to encourage student participation and involvement.', 2),
(247, 'Provides opportunities for students to develop critical and analytical thinking.', 2),
(248, 'Uses educational technologies and library resources.', 2),
(249, 'Utilizes community resources (e.g. problem condition, etc.) to enrich lessons.', 2),
(250, 'Commands student respect without force.', 3),
(251, 'Disciplines and handles cases of individual and group discipline appropriately and tactfully.', 3),
(252, 'Maintains conducive learning atmosphere.', 3),
(253, 'Orients students on course objectives and grading system.', 3),
(254, 'Returns corrected test papers and inform students about their grades.', 3),
(255, 'Utilizes school facilities properly.', 3),
(256, 'Accomplishes the lesson on time.', 3),
(257, 'Follows schedules of examination dates (Prelims, Mid-term, Finals).', 3),
(258, 'Makes himself/herself available to students for consultation/assistance', 4),
(259, 'Respects students’ ideas and opinions', 4),
(260, 'Manifests sincerity and fairness in dealing with students', 4),
(261, 'Provides for individual differences', 4),
(262, 'Maintains rapport with students', 4),
(263, 'Attends classes regularly', 5),
(264, 'Starts and ends classes on time', 5),
(265, 'Adapts flexibility to cope with varied classroom situations', 5),
(266, 'Manifests self-confidence', 5),
(267, 'Shows professional dedication and commitment to duty.', 5),
(268, 'Sets the example in ethical and moral behavior (observing proper decorum, e.g. manner of speaking, dressing, etc. in the campus.)', 5),
(269, 'Comments and suggestions to improve the teaching-learning situation.', 7);

-- --------------------------------------------------------

--
-- Table structure for table `religion`
--

CREATE TABLE `religion` (
  `religion_id` int(12) NOT NULL,
  `religion_name` varchar(45) NOT NULL,
  `religion_description` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `session`
--

CREATE TABLE `session` (
  `session_id` int(12) NOT NULL,
  `session_pin` int(12) NOT NULL,
  `session_score` int(12) DEFAULT NULL,
  `session_dateCreated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `session`
--

INSERT INTO `session` (`session_id`, `session_pin`, `session_score`, `session_dateCreated`) VALUES
(1, 1, NULL, '2017-11-02 03:04:24'),
(2, 1, NULL, '2017-11-02 03:10:50'),
(3, 1, NULL, '2017-11-02 06:51:15'),
(4, 1, NULL, '2017-11-02 06:55:57');

-- --------------------------------------------------------

--
-- Table structure for table `sheet`
--

CREATE TABLE `sheet` (
  `sheet_id` int(12) NOT NULL,
  `sheet_session` int(12) NOT NULL,
  `sheet_question` int(12) NOT NULL,
  `sheet_answer` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE `status` (
  `status_id` int(12) NOT NULL,
  `status_name` varchar(45) NOT NULL,
  `status_description` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`status_id`, `status_name`, `status_description`) VALUES
(1, 'active', NULL),
(2, 'inactive', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `subcategory`
--

CREATE TABLE `subcategory` (
  `subcategory_id` int(12) NOT NULL,
  `subcategory_name` varchar(45) NOT NULL,
  `subcategory_description` varchar(255) DEFAULT NULL,
  `subcategory_category` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subcategory`
--

INSERT INTO `subcategory` (`subcategory_id`, `subcategory_name`, `subcategory_description`, `subcategory_category`) VALUES
(1, 'Knowledge of Subject Matter', NULL, 1),
(2, 'Teaching Skills', NULL, 1),
(3, 'Classroom Management', NULL, 1),
(4, 'Relationship with Students', NULL, 2),
(5, 'Personal Characteristics', NULL, 2),
(7, 'Comments and Suggestions', NULL, 3);

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `subject_id` int(12) NOT NULL,
  `subject_name` varchar(45) NOT NULL,
  `subject_code` varchar(45) NOT NULL,
  `subject_description` varchar(255) DEFAULT NULL,
  `subject_unit` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`subject_id`, `subject_name`, `subject_code`, `subject_description`, `subject_unit`) VALUES
(2, 'Method in Research and Writing', 'BSCS30', NULL, 6);

-- --------------------------------------------------------

--
-- Table structure for table `type`
--

CREATE TABLE `type` (
  `type_id` int(12) NOT NULL,
  `type_name` varchar(45) NOT NULL,
  `type_description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `type`
--

INSERT INTO `type` (`type_id`, `type_name`, `type_description`) VALUES
(1, 'announcement', ''),
(2, 'event', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`account_id`),
  ADD UNIQUE KEY `account_username` (`account_username`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `civilstatus`
--
ALTER TABLE `civilstatus`
  ADD PRIMARY KEY (`civilStatus_id`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`department_id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`employee_id`),
  ADD KEY `employee_fk0` (`employee_account`),
  ADD KEY `employee_fk1` (`employee_gender`),
  ADD KEY `employee_fk2` (`employee_civilStatus`),
  ADD KEY `employee_fk3` (`employee_religion`),
  ADD KEY `employee_fk4` (`employee_status`),
  ADD KEY `employee_fk5` (`employee_employmentStatus`),
  ADD KEY `employee_fk6` (`employee_department`),
  ADD KEY `employee_fk7` (`employee_position`);

--
-- Indexes for table `employmentstatus`
--
ALTER TABLE `employmentstatus`
  ADD PRIMARY KEY (`employmentStatus_id`);

--
-- Indexes for table `gender`
--
ALTER TABLE `gender`
  ADD PRIMARY KEY (`gender_id`);

--
-- Indexes for table `load`
--
ALTER TABLE `load`
  ADD PRIMARY KEY (`load_id`),
  ADD KEY `load_fk0` (`load_subject`),
  ADD KEY `load_fk1` (`load_employee`);

--
-- Indexes for table `pin`
--
ALTER TABLE `pin`
  ADD PRIMARY KEY (`pin_id`),
  ADD UNIQUE KEY `pin_code` (`pin_code`),
  ADD KEY `pin_fk0` (`pin_load`);

--
-- Indexes for table `position`
--
ALTER TABLE `position`
  ADD PRIMARY KEY (`position_id`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`post_id`),
  ADD KEY `post_fk0` (`post_author`),
  ADD KEY `post_fk1` (`post_type`);

--
-- Indexes for table `question`
--
ALTER TABLE `question`
  ADD PRIMARY KEY (`question_id`),
  ADD KEY `question_fk0` (`question_subcategory`);

--
-- Indexes for table `religion`
--
ALTER TABLE `religion`
  ADD PRIMARY KEY (`religion_id`);

--
-- Indexes for table `session`
--
ALTER TABLE `session`
  ADD PRIMARY KEY (`session_id`),
  ADD KEY `session_fk0` (`session_pin`);

--
-- Indexes for table `sheet`
--
ALTER TABLE `sheet`
  ADD PRIMARY KEY (`sheet_id`),
  ADD KEY `sheet_fk0` (`sheet_session`),
  ADD KEY `sheet_fk1` (`sheet_question`);

--
-- Indexes for table `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`status_id`);

--
-- Indexes for table `subcategory`
--
ALTER TABLE `subcategory`
  ADD PRIMARY KEY (`subcategory_id`),
  ADD KEY `subcategory_fk0` (`subcategory_category`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`subject_id`);

--
-- Indexes for table `type`
--
ALTER TABLE `type`
  ADD PRIMARY KEY (`type_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account`
--
ALTER TABLE `account`
  MODIFY `account_id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `civilstatus`
--
ALTER TABLE `civilstatus`
  MODIFY `civilStatus_id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `department_id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `employee_id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13310147;

--
-- AUTO_INCREMENT for table `employmentstatus`
--
ALTER TABLE `employmentstatus`
  MODIFY `employmentStatus_id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `gender`
--
ALTER TABLE `gender`
  MODIFY `gender_id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `load`
--
ALTER TABLE `load`
  MODIFY `load_id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pin`
--
ALTER TABLE `pin`
  MODIFY `pin_id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `position`
--
ALTER TABLE `position`
  MODIFY `position_id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `post_id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `question`
--
ALTER TABLE `question`
  MODIFY `question_id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=270;

--
-- AUTO_INCREMENT for table `religion`
--
ALTER TABLE `religion`
  MODIFY `religion_id` int(12) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `session`
--
ALTER TABLE `session`
  MODIFY `session_id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `sheet`
--
ALTER TABLE `sheet`
  MODIFY `sheet_id` int(12) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `status`
--
ALTER TABLE `status`
  MODIFY `status_id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `subcategory`
--
ALTER TABLE `subcategory`
  MODIFY `subcategory_id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `subject`
--
ALTER TABLE `subject`
  MODIFY `subject_id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `type`
--
ALTER TABLE `type`
  MODIFY `type_id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `employee`
--
ALTER TABLE `employee`
  ADD CONSTRAINT `employee_fk0` FOREIGN KEY (`employee_account`) REFERENCES `account` (`account_id`),
  ADD CONSTRAINT `employee_fk1` FOREIGN KEY (`employee_gender`) REFERENCES `gender` (`gender_id`),
  ADD CONSTRAINT `employee_fk2` FOREIGN KEY (`employee_civilStatus`) REFERENCES `civilstatus` (`civilStatus_id`),
  ADD CONSTRAINT `employee_fk3` FOREIGN KEY (`employee_religion`) REFERENCES `religion` (`religion_id`),
  ADD CONSTRAINT `employee_fk4` FOREIGN KEY (`employee_status`) REFERENCES `status` (`status_id`),
  ADD CONSTRAINT `employee_fk5` FOREIGN KEY (`employee_employmentStatus`) REFERENCES `employmentstatus` (`employmentStatus_id`),
  ADD CONSTRAINT `employee_fk6` FOREIGN KEY (`employee_department`) REFERENCES `department` (`department_id`),
  ADD CONSTRAINT `employee_fk7` FOREIGN KEY (`employee_position`) REFERENCES `position` (`position_id`);

--
-- Constraints for table `load`
--
ALTER TABLE `load`
  ADD CONSTRAINT `load_fk0` FOREIGN KEY (`load_subject`) REFERENCES `subject` (`subject_id`),
  ADD CONSTRAINT `load_fk1` FOREIGN KEY (`load_employee`) REFERENCES `employee` (`employee_id`);

--
-- Constraints for table `pin`
--
ALTER TABLE `pin`
  ADD CONSTRAINT `pin_fk0` FOREIGN KEY (`pin_load`) REFERENCES `load` (`load_id`);

--
-- Constraints for table `post`
--
ALTER TABLE `post`
  ADD CONSTRAINT `post_fk0` FOREIGN KEY (`post_author`) REFERENCES `account` (`account_id`),
  ADD CONSTRAINT `post_fk1` FOREIGN KEY (`post_type`) REFERENCES `type` (`type_id`);

--
-- Constraints for table `question`
--
ALTER TABLE `question`
  ADD CONSTRAINT `question_fk0` FOREIGN KEY (`question_subcategory`) REFERENCES `subcategory` (`subcategory_id`);

--
-- Constraints for table `session`
--
ALTER TABLE `session`
  ADD CONSTRAINT `session_fk0` FOREIGN KEY (`session_pin`) REFERENCES `pin` (`pin_id`);

--
-- Constraints for table `sheet`
--
ALTER TABLE `sheet`
  ADD CONSTRAINT `sheet_fk0` FOREIGN KEY (`sheet_session`) REFERENCES `session` (`session_id`),
  ADD CONSTRAINT `sheet_fk1` FOREIGN KEY (`sheet_question`) REFERENCES `question` (`question_id`);

--
-- Constraints for table `subcategory`
--
ALTER TABLE `subcategory`
  ADD CONSTRAINT `subcategory_fk0` FOREIGN KEY (`subcategory_category`) REFERENCES `category` (`category_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
