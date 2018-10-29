-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 29, 2018 at 10:11 AM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 5.6.36

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project2`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `S_NO` int(11) NOT NULL,
  `Name` varchar(100) DEFAULT NULL,
  `Username` varchar(100) DEFAULT NULL,
  `Email` varchar(500) DEFAULT NULL,
  `Password` varchar(10000) DEFAULT NULL,
  `Category` varchar(100) DEFAULT NULL,
  `random_string` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`S_NO`, `Name`, `Username`, `Email`, `Password`, `Category`, `random_string`) VALUES
(1, 'Jaskaran Singh', 'realkaran', 'jkssingh1997@gmail.com', 'Richie97@', 'Super', 'NULL');

-- --------------------------------------------------------

--
-- Table structure for table `question`
--

CREATE TABLE `question` (
  `S_NO` int(11) NOT NULL,
  `Name` varchar(1000) DEFAULT NULL,
  `option1` varchar(1000) DEFAULT NULL,
  `option2` varchar(1000) DEFAULT NULL,
  `option3` varchar(1000) DEFAULT NULL,
  `option4` varchar(1000) DEFAULT NULL,
  `ans` varchar(1000) DEFAULT NULL,
  `subject` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `question`
--

INSERT INTO `question` (`S_NO`, `Name`, `option1`, `option2`, `option3`, `option4`, `ans`, `subject`) VALUES
(1, 'An Attribute that is not part of any candidate key is known as', 'sub-prime attribute ', 'non-prime attribute', 'sub-candidate key', 'non-candidate key', 'option1', 'DBMS'),
(2, 'Which of the follow is not the degree of relationship?', 'Single', 'Binary', 'Ternary', 'n-ary', 'option1', 'DBMS'),
(3, 'The degree of the relationship is', 'number of Tables in a relationship', 'number of entities in a relationship', 'number of Row & Columns in a relationship', 'number of participating entities in a relationship', 'option4', 'DBMS'),
(4, 'How many rules in â€œCODDâ€™S RULESâ€ of Relational Model of database systems?', '11', '12', '13', '14', 'option2', 'DBMS'),
(5, 'Every attribute has some predefined value scope that is called', 'Tuple', 'Tables', 'Attribute domain', 'Relation schema', 'option3', 'DBMS'),
(6, 'An attribute of a table cannot hold multiple values is the property of', 'First normal form (1NF)', 'Second normal form (2NF)', 'Third normal form (3NF)', 'Fourth normal form (4NF)', 'option1', 'DBMS'),
(7, 'A key that consists of more than one attribute to uniquely identify rows in a table is called', 'Candidate key ', 'Foreign key', 'Primary key', 'Composite key ', 'option4', 'DBMS'),
(8, 'In hierarchical model, data is organized into', 'logical structure', 'physical structure', 'tree like structure', 'none of them', 'option3', 'DBMS'),
(9, 'The key selected from the sets of candidate keys by database designer is called', 'Super Key', 'Foreign key ', 'Secondary Key', 'Primary key ', 'option4', 'DBMS'),
(10, 'In an Entity-Relationship diagram â€œDouble Rectanglesâ€ represents', 'Relationship Set', 'Weak Entity Sets', 'Derived Attributes', 'Multi-valued Attributes', 'option2', 'DBMS'),
(11, 'The minimal set of super key is called', 'Candidate key', 'Foreign key', 'Primary key', 'Secondary key', 'option1', 'DBMS'),
(12, 'A relation that has no partial dependencies is in which normal form', ' First', 'Second ', 'Third', 'BCNF', 'option2', 'DBMS'),
(13, 'A functional dependency between two or more non-key attributes is called', 'Transitive dependency', 'Partial transitive dependency', 'Functional dependency', 'Partial functional dependency', 'option1', 'DBMS'),
(14, 'A logical description of some portion of database that is required by a user to perform task is called as', 'System View', 'User View', 'Logical View', 'Data View', 'option2', 'DBMS'),
(15, '______________ is a classical approach to database design?', 'Left â€“ Right approach', 'Right â€“ Left approach', 'Top â€“ Down approach', 'Bottom â€“ Up approach', 'option3', 'DBMS'),
(16, '_____________ refers to the correctness and completeness of the data in a database?', 'Data security', 'Data integrity', 'Data constraint', 'Data independence', 'option2', 'DBMS'),
(17, 'A table that displays data redundancies yields ____________ anomalies', 'Insertion', 'Deletion', 'Update', 'All of the above', 'option4', 'DBMS'),
(18, 'A lock that allows concurrent transactions to access different rows of the same table is known as a', 'Field-level lock', 'Row-level lock', 'Table-level lock', 'Database-level lock', 'option1', 'DBMS'),
(19, 'A type of query that is placed within a WHERE or HAVING clause of another query is called', 'Super query', 'Sub query', 'Master query', 'Multi-query', 'option2', 'DBMS'),
(20, 'A transaction completes its execution is said to be', 'Saved', 'Loaded', 'Rolled', 'Committed', 'option4', 'DBMS'),
(21, 'A relational database consists of a collection of ?', 'Tables', 'Fields', 'Records', 'Keys', 'option1', 'DBMS'),
(22, ' A ________ in a table represents a relationship among a set of values.', 'Column', 'Key', 'Row', 'Entry', 'option3', 'DBMS'),
(23, '56% of Y is 182. What is Y?', '350', '364', '325', '330', 'option3', 'QUANTATIVE APTITUDE'),
(24, 'Y has to score 40% marks to pass. He gets 20 marks and fails by 40 marks. The maximum marks of the exam are?', '100', '200', '150', '250', 'option3', 'QUANTATIVE APTITUDE'),
(25, 'Which of the following two ratios is greater 17:18 and 10:11?', '17/18', '10/11', 'Both are same', 'Cannot Determine', 'option1', 'QUANTATIVE APTITUDE'),
(26, '285 is summation of 3 numbers. Ratio between 2nd and 3rd numbers is 6:5. Ratio between 1st and 2nd numbers is 3:7. The 3rd number is?', '135', '120', '124', '105', 'option4', 'QUANTATIVE APTITUDE'),
(27, 'A man got Rs. 130 less, as simple interest, when he invested Rs. 2000 for 4 years as compared to investing Rs. 2250 for same duration. What is the rate of interest?', '12%', '13%', '12.5%', '10.5%', 'option2', 'QUANTATIVE APTITUDE'),
(28, 'In 3 years by compound interest, a sum becomes Rs. 900. But in 4 years by compound interest, the same sum becomes Rs. 1000. What is the sum and the rate of interest?', 'Rs. 625.20, 12.50%', 'Rs. 656.10, 11.11%', 'Rs. 686.50, 12.50%', 'Rs. 695.80, 11.11%', 'option2', 'QUANTATIVE APTITUDE'),
(29, 'A walks from points Jammu to Delhi and at the same time B starts walking from Delhi to Jammu. After passing each other, they complete their journeys in 361 hours and 289 hours, respectively. Find the ratio of speed of A to that of B?', '17:19 ', '289:361', '361:289', '19:17', 'option1', 'QUANTATIVE APTITUDE'),
(30, 'Amit covers a distance at a speed of 24 km/hr in 6 min. If he wants to cover the same distance in 8 min, what should be his speed?', '18 km/hr', '20 km/hr', '21 km/hr', '15 km/hr', 'option1', 'QUANTATIVE APTITUDE'),
(31, 'Ram is three times as old as his Sam. 2 years ago he was five times as old as Sam. What is the present age of Ram?', '14 years', '12 years', '18 years', '24 years', 'option2', 'QUANTATIVE APTITUDE'),
(32, 'The average age of a group of 4 friends is 36 years. The youngest friend amongst them is 6 years old. What was the average age of the group at the time of the birth of the youngest friend?', '36 years', '38 years', '42 years ', '40 years', 'option4', 'QUANTATIVE APTITUDE'),
(33, 'If 12 men or 16 women can do a work in 172 days, how long will 21 men and 15 women to do the same work?', '60 days', '64 days', '56 days', '72 days', 'option2', 'QUANTATIVE APTITUDE'),
(34, 'Two pipes M and N can fill a tank in 22 hours and 33 hours respectively. In how much time will the tank be full, if both the pipes are opened simultaneously?', '18 hours', '19/22 hours', '1(1/11) hours', '13(1/5) hours', 'option4', 'QUANTATIVE APTITUDE'),
(35, ' 3 pipes have diameters 2 cms, 3 cms and 4 cms. The ratio of water flowing through them is equal to ratio of the square of their diameters. The biggest pipe when open alone, can fill the entire pool in just 126 minutes. When all the pipes are opened together, the pool would be filled in how much time?', '2016/29 minutes', '2111/126 minutes', '215/63 minutes', '155 minutes', 'option1', 'QUANTATIVE APTITUDE'),
(36, 'Two trains A and B leave Kolkata for Sikkim at 8:00 pm and 8:30 pm respectively and run at 90 km/hr and 120 km/hr, respectively. At what distance from Kolkata, will the two trains meet?', '450 kms', '150 kms', '180 kms', '360 kms', 'option3', 'QUANTATIVE APTITUDE'),
(37, 'Simran takes twice as long to swim up as to swim down the river and has a speed of 12 km/hr in still water. What is riverâ€™s speed?', '6 km/hr', '3 km/hr', '8 km/hr', '4 km/hr', 'option4', 'QUANTATIVE APTITUDE'),
(38, 'Find average of natural numbers from 1 to 65?', '33', '32.5', '33.5', '65', 'option1', 'QUANTATIVE APTITUDE'),
(39, 'In a race, average speed of total 75 bikes is 35km/hr. The average speed of red bikes is 55 km/hr. If average speed of green bikes is 30km/hr, then how many green bikes are there?', '70', '60', '45', '50', 'option2', 'QUANTATIVE APTITUDE');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `S_NO` int(11) NOT NULL,
  `Name` varchar(100) DEFAULT NULL,
  `Username` varchar(100) DEFAULT NULL,
  `Email` varchar(500) DEFAULT NULL,
  `Password` varchar(10000) DEFAULT NULL,
  `random_string` mediumtext,
  `subject` varchar(2000) DEFAULT NULL,
  `date` varchar(2000) DEFAULT NULL,
  `om` varchar(2000) DEFAULT NULL,
  `mm` varchar(2000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`S_NO`, `Name`, `Username`, `Email`, `Password`, `random_string`, `subject`, `date`, `om`, `mm`) VALUES
(1, 'Jaskaran Singh', 'realkaran', 'jkssingh1997@gmail.com', 'Richie97@', NULL, 'QUANTATIVE APTITUDE#QUANTATIVE APTITUDE#QUANTATIVE APTITUDE#', '27/10/2018 - 02:03:15#27/10/2018 - 02:21:02#27/10/2018 - 02:21:40#', '6#4#5#', '10#5#5#'),
(3, 'Jaskaran Singh', 'lovejas', 'jkssachdeva43@gmail.com', 'Richie97@', NULL, 'DBMS#DBMS#', '29/10/2018 - 14:38:58#29/10/2018 - 14:39:48#', '7#3#', '10#5#'),
(5, 'Amanpreet Singh Bhasin', 'amanpreetbhasin', 'apsbhasin@gmail.com', 'Aman@8855', '', 'DBMS#DBMS#DBMS#DBMS#DBMS#DBMS#DBMS#DBMS#DBMS#DBMS#QUANTATIVE APTITUDE#QUANTATIVE APTITUDE#QUANTATIVE APTITUDE#QUANTATIVE APTITUDE#QUANTATIVE APTITUDE#QUANTATIVE APTITUDE#DBMS#QUANTATIVE APTITUDE#DBMS#DBMS#QUANTATIVE APTITUDE#', '26/10/2018 - 01:42:43#26/10/2018 - 01:22:34#26/10/2018 - 11:25:03#26/10/2018 - 14:42:19#26/10/2018 - 14:44:13#26/10/2018 - 14:46:15#26/10/2018 - 14:47:35#26/10/2018 - 17:05:51#26/10/2018 - 17:07:27#26/10/2018 - 17:08:02#27/10/2018 - 02:17:53#27/10/2018 - 02:18:43#27/10/2018 - 02:19:45#27/10/2018 - 11:37:28#27/10/2018 - 13:16:34#27/10/2018 - 16:58:38#27/10/2018 - 17:20:13#27/10/2018 - 17:22:44#28/10/2018 - 15:39:30#28/10/2018 - 17:11:17#29/10/2018 - 11:26:19#', '2#3#3#1#4#0#5#1#0#1#4#2#5#6#3#4#9#7#0#3#7#', '5#5#5#5#5#5#5#5#5#5#5#5#10#10#5#10#10#10#10#5#10#');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`S_NO`),
  ADD UNIQUE KEY `Username` (`Username`),
  ADD UNIQUE KEY `Email` (`Email`);

--
-- Indexes for table `question`
--
ALTER TABLE `question`
  ADD PRIMARY KEY (`S_NO`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD UNIQUE KEY `S_NO` (`S_NO`),
  ADD UNIQUE KEY `Username` (`Username`),
  ADD UNIQUE KEY `Email` (`Email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `S_NO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `question`
--
ALTER TABLE `question`
  MODIFY `S_NO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `S_NO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
