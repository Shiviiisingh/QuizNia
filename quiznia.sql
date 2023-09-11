-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 01, 2023 at 08:22 AM
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
-- Database: `quiznia`
--

-- --------------------------------------------------------

--
-- Table structure for table `question_answers`
--

CREATE TABLE `question_answers` (
  `answer_id` int(11) NOT NULL,
  `question_id` int(11) NOT NULL,
  `answer_text` text NOT NULL,
  `is_correct` tinyint(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `question_answers`
--

INSERT INTO `question_answers` (`answer_id`, `question_id`, `answer_text`, `is_correct`) VALUES
(1, 1, 'Useful', 1),
(2, 2, 'Loyalty', 1),
(3, 3, 'PQRS', 1),
(4, 4, 'Panacea', 1),
(5, 5, 'A person who does not believe in GOD', 1),
(6, 6, 'Common', 1),
(7, 7, 'Beneficial', 1),
(8, 8, 'For', 1),
(9, 9, 'The', 1),
(10, 10, 'Adulation', 1),
(11, 11, 'Part II, Articles 5-11', 1),
(12, 12, 'The Citizenship Act, 1955', 1),
(13, 13, 'Right to Constitutional Remedies', 1),
(14, 14, 'Supreme Court', 1),
(15, 15, 'Article 29 and 30', 1),
(16, 16, 'Right Equality', 1),
(17, 17, 'The Right to Equality', 1),
(18, 18, 'Either in the Supreme Court or in the High Court', 1),
(19, 19, 'Article 17', 1),
(20, 20, '14 years', 1),
(21, 21, '10', 1),
(22, 22, '23.75', 1),
(23, 23, '0', 1),
(24, 24, '6930', 1),
(25, 25, '64 sec', 1),
(26, 26, '100 m', 1),
(27, 27, '57°16’22” (approx.)', 1),
(28, 28, '5:3', 1),
(29, 29, '2:15', 1),
(30, 30, '-5', 1),
(31, 31, 'Mahapadmananda', 1),
(32, 32, 'Jammu & Kashmir', 1),
(33, 33, 'Kalidas', 1),
(34, 34, 'Skandgupta', 1),
(35, 35, 'Mahayanism', 1),
(36, 36, 'Menander II', 1),
(37, 37, 'Mehargarh', 1),
(38, 38, 'Satavahana', 1),
(39, 39, 'Agni', 1),
(40, 40, 'Kalibanga and Banwali', 1),
(41, 41, 'Remains Constant', 1),
(42, 42, 'All of the above ', 1),
(43, 43, 'inversely proportional', 1),
(44, 44, 'Time', 1),
(45, 45, '√2 times', 1),
(46, 46, 'Kinetic energy < Potential energy', 1),
(47, 47, 'Both a and b', 1),
(48, 48, 'Nature of liquid', 1),
(49, 49, 'dyne/cm', 1),
(50, 50, 'resistance to fluid motion', 1),
(51, 51, 'Calcium', 1),
(52, 52, 'Sugar', 1),
(53, 53, 'Butane and Isobutane', 1),
(54, 54, 'Nitric Acid', 1),
(55, 55, 'Lithium', 1),
(56, 56, 'it does not give lather with soap', 1),
(57, 57, 'Methanol', 1),
(58, 58, 'An alloy is a heterogeneous mixture of two or more metals', 1),
(59, 59, 'Copper and Tin', 1),
(60, 60, 'All of the above', 1),
(61, 61, 'Lactic Acid', 1),
(62, 62, 'Hepatocytes', 1),
(63, 63, 'Clove', 1),
(64, 64, 'RSV Virus (respiratory syncytial virus )', 1),
(65, 65, 'Marsh Mallow', 1),
(66, 66, 'Microbiology', 1),
(67, 67, 'Oil and glycogen', 1),
(68, 68, 'Ribose', 1),
(69, 69, 'Yersinia pestis', 1),
(70, 70, 'Mitochondria of eukaryotes', 1),
(71, 71, 'Assam', 1),
(72, 72, 'Sutlej & Beas', 1),
(73, 73, 'Gulf of Khambat', 1),
(74, 74, 'Sub tropical', 1),
(75, 75, 'Assam', 1),
(76, 76, 'Indira Col', 1),
(77, 77, '7th', 1),
(78, 78, 'Badland', 1),
(79, 79, '1,2 & 3', 1),
(80, 80, 'Indonesia', 1),
(81, 81, 'Stagflation', 1),
(82, 82, 'Regressive Tax', 1),
(83, 83, 'Net National Product at Factor Cost', 1),
(84, 84, 'Unemployment and Inflation', 1),
(85, 85, 'Demand Pull Inflation', 1),
(86, 86, 'Competition', 1),
(87, 87, 'Car', 1),
(88, 88, 'Larger capital inflows', 1),
(89, 89, 'Low Inflation, Steady economic growth', 1),
(90, 90, 'Production taxes are included and production subsidies excluded from GVA at basic prices ', 1),
(91, 91, '681013101113', 1),
(92, 92, 'SHLO', 1),
(93, 93, '380', 1),
(94, 94, 'OMYIZRU', 1),
(95, 95, 'HJMP', 1),
(96, 96, '342', 1),
(97, 97, '15:197', 1),
(98, 98, '133', 1),
(99, 99, 'OBDFME', 1),
(100, 100, 'Friday', 1);

-- --------------------------------------------------------

--
-- Table structure for table `quizzes_table`
--

CREATE TABLE `quizzes_table` (
  `quiz_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `status` enum('active','inactive') DEFAULT 'active',
  `time_limit` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `quizzes_table`
--

INSERT INTO `quizzes_table` (`quiz_id`, `name`, `status`, `time_limit`) VALUES
(1, 'History Quiz', 'active', 60),
(2, 'English Quiz', 'active', 60),
(3, 'Mathematics Quiz', 'active', 120),
(4, 'Physics Quiz', 'active', 120),
(5, 'Chemistry Quiz', 'active', 60),
(6, 'Biology Quiz', 'active', 60),
(7, 'Geography Quiz', 'active', 60),
(8, 'Polity Quiz', 'active', 60),
(9, 'Economics Quiz', 'active', 60),
(10, 'Reasoning Quiz', 'active', 60);

-- --------------------------------------------------------

--
-- Table structure for table `quiz_attempt`
--

CREATE TABLE `quiz_attempt` (
  `attempt_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `quiz_id` int(11) NOT NULL,
  `started_time` datetime DEFAULT current_timestamp(),
  `ended_time` datetime DEFAULT NULL,
  `score` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `quiz_question`
--

CREATE TABLE `quiz_question` (
  `question_id` int(11) NOT NULL,
  `quiz_id` int(11) NOT NULL,
  `question_text` text NOT NULL,
  `is_multiple` tinyint(1) DEFAULT 0,
  `question_order` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `quiz_question`
--

INSERT INTO `quiz_question` (`question_id`, `quiz_id`, `question_text`, `is_multiple`, `question_order`) VALUES
(1, 2, 'Select the most appropriate Antonym for \"FUTILE\"', 1, 1),
(2, 2, 'Select synonym for the word occuring in capital letter in the following sentence. His ALLEGANCE to the party was suspect from the very beginning ', 1, 2),
(3, 2, 'In the Middle Ages there was little progress (P)/ either intellectual or social (Q)/ with the result that (R)/ teaching became the exclusive prerogative of the church (S).Which one of the following is the correct sequence.', 1, 3),
(4, 2, 'Select the most appropriate One Word Substitute for the phrase “A solution for all difficulties or diseases.\"', 1, 4),
(5, 2, 'Select the most appropriate phrase for the word “Atheist\"', 1, 5),
(6, 2, 'His assignments have taken him to many EXOTIC locations around the world. Select the appropriate antonym of the word in capital letters.', 1, 6),
(7, 2, 'Select the synonym of the word “SALUTARY”. ', 1, 7),
(8, 2, 'Select the correct option among given ones to fill the blank. The doctor gave me a prescription______________ my cough.', 1, 8),
(9, 2, 'Choose the correct article to be used to fill the blank. For me, breakfast is___________ best meal of the day.', 1, 9),
(10, 2, 'Find the correctly spelt word.', 1, 10),
(11, 8, 'Citizenship provisions are enshrined in the constitution in', 1, 1),
(12, 8, 'Details on how citizenship may be acquired and terminated are enumerated in:', 1, 2),
(13, 8, 'Which of the following rights was described by Dr. B.R. Ambedkar as ‘The Heart and Soul of the Constitution’?', 1, 3),
(14, 8, 'On whom does the Constitution confer special responsibility for the enforcement of Fundamental Rights?', 1, 4),
(15, 8, 'Under which Article of the Constitution are the Cultural and Educational Rights granted?', 1, 5),
(16, 8, 'If an Indian citizen is denied a public office because of his religion, which of the following Fundamental Rights is denied to him?', 1, 6),
(17, 8, 'Prohibition of discrimination on grounds of religion etc. (Article 15 of the Constitution of India) is a Fundamental Right classifiable under:', 1, 7),
(18, 8, 'Any dispute regarding the violation of Fundamental Rights can be presented:', 1, 8),
(19, 8, 'Untouchability is abolished and its practice is punishable according to:', 1, 9),
(20, 8, 'What is the minimum permissible age for employment in any factory or mine?', 1, 10),
(21, 3, '5–[4–{3–(3–3–6)}] is equal to:', 1, 1),
(22, 3, 'The value of 25–5[2+3(2–2(5–3)+5)–10]÷4 is:', 1, 2),
(23, 3, 'Simplify : [0.9–{2.3–3.2–(7.1–5.4–3.5)}]', 1, 3),
(24, 3, 'The sum of the cubes of the numbers 22, –15 and –7 is equal to', 1, 4),
(25, 3, 'A train is travelling at the rate of 45km/hr. How many seconds it will take to cover a distance of 45 km?', 1, 5),
(26, 3, 'The speed of a bus is 72km/hr. The distance covered by the bus in 5 seconds is', 1, 6),
(27, 3, 'The degree measure of 1 radian (taking π= 22/7) is:', 1, 7),
(28, 3, 'If a:b=7:9 and b:c=15:7, then what is a:c?', 1, 8),
(29, 3, 'If A:B=2:3, B:C=2:4 and C:D = 2:5, then A:D is equal to:', 1, 9),
(30, 3, 'If x:y=2:5, then (5x + 3y):(5x – 3y) is equal to', 1, 10),
(31, 1, 'Who was the founder of Nanda dynasty?', 1, 1),
(32, 1, 'The Gufkral prehistoric site is located in which state / Union Territory of India?', 1, 2),
(33, 1, 'Who wrote Malvikagnimitra?', 1, 3),
(34, 1, 'Sudarshan lake repaired second time under the reign of _?', 1, 4),
(35, 1, 'The ruler of Kushan dynasty, Kanishka was the follower of__?', 1, 5),
(36, 1, 'Who was the first Indo-Greek king, who became Buddhist?', 1, 6),
(37, 1, 'Which among the following site has yielded the cultural remains from Neolithic to Harappan era?', 1, 7),
(38, 1, 'Simuka was an Indian king and the founder of which among the following dynasty?', 1, 8),
(39, 1, 'As per Vedic rituals, which among the following is the divine messenger who receives the prayers and conveys them to the heavenly spheres?', 1, 9),
(40, 1, 'Which of the following two towns of Indus valley Civilization were located on the bank of Ghagghar River?', 1, 10),
(41, 4, 'What is the change in the angular momentum of a system as per the Law of Conservation of Angular momentum, if the total external torque acting is zero?', 1, 1),
(42, 4, 'Which of the following conditions is true for an object to be in equilibrium?', 1, 2),
(43, 4, 'As per the Newton’s second law of motion, what is the relation between the rate of change of linear momentum and the external force applied?', 1, 3),
(44, 4, 'On which of the following quantities, Work done does not depend?', 1, 4),
(45, 4, 'By how much times the orbital speed of a satellite needs to be increased to make it escape the gravitational field?', 1, 5),
(46, 4, '6.	Which of the following relations between Kinetic energy and Potential energy is true about solids?', 1, 6),
(47, 4, 'On which of these factors, the buoyancy depends?', 1, 7),
(48, 4, 'Which of the following factors affect the Surface Tension?', 1, 8),
(49, 4, 'What is the unit of surface tension in c.g.s system?', 1, 9),
(50, 4, '10.	What of the following represents viscosity?', 1, 10),
(51, 5, 'Which of the following is an alkaline earth metal?', 1, 1),
(52, 5, 'Double Sulphitation is the most commonly used method in India for refining of _?', 1, 2),
(53, 5, 'Cooking gas mainly consists of:', 1, 3),
(54, 5, 'Which among the following acids is generally used as a first hand test to judge whether a metal is Gold or not?', 1, 4),
(55, 5, 'Which of the following alkali metal ions has the highest hydration enthalpy?', 1, 5),
(56, 5, 'Which of the following is correct about Hard water?', 1, 6),
(57, 5, 'Which of these compounds is also known as wood spirit?', 1, 7),
(58, 5, 'Which of the following is incorrect?', 1, 8),
(59, 5, 'Bell metal is an alloy of which of the following metals?', 1, 9),
(60, 5, 'Which of the following is correct about suspension?', 1, 10),
(61, 6, 'Fatigue is caused because of formation and depositing of which among the following acids in Muscles?', 1, 1),
(62, 6, 'Bile is secreted by which of the following cells?', 1, 2),
(63, 6, 'Which among the following is aromatic dried flower buds of a tree ?', 1, 3),
(64, 6, 'Which among the following virus is also called as “Hit & Hide” Virus?', 1, 4),
(65, 6, 'Which among the following is not a carnivorous plant?', 1, 5),
(66, 6, 'Which branch of biology is known for the study of microscopic organisms?', 1, 6),
(67, 6, 'In what form do fungi store food?', 1, 7),
(68, 6, 'Which sugar is present in RNA?', 1, 8),
(69, 6, 'Which of the following is not a cause of Food Poisoning?', 1, 9),
(70, 6, 'Which of the following is analogous to mesosome of bacteria?', 1, 10),
(71, 7, 'Which of the following states of India does not share a boundary with Myanmar?', 1, 1),
(72, 7, 'The water comes to Indira Gandhi Canal from the following Rivers?', 1, 2),
(73, 7, 'In which of the following Mahi River falls?', 1, 3),
(74, 7, 'Which of the following represents largest fraction of forest cover in India?', 1, 4),
(75, 7, 'Pagladia Dam Project is located in which state?', 1, 5),
(76, 7, 'Which of the following is the northern most point of India?', 1, 6),
(77, 7, 'What is the rank of India in terms of the total area?', 1, 7),
(78, 7, 'The deep ravined and gullies cut by the Chambal river in the Malwa plateau is known as by which of the following name?', 1, 8),
(79, 7, 'Which among the following statements are correct?\r\n1.	Coromandel coast formed due to emergence\r\n2.	Malabar coast formed due to emergence\r\n3.	Konkan coast formed due to submergence\r\nChoose the correct option from the codes given below :\r\n', 1, 9),
(80, 7, 'With which of the following countries of South East Asia, India shares a maritime boundary?', 1, 10),
(81, 9, 'Which among the following is a suitable term for the state of economy in which economic activity is slowing down but wages and prices continue to rise ?', 1, 1),
(82, 9, 'Which among the following imposes a greater burden (relative to resources) on the poor than on the rich ?', 1, 2),
(83, 9, 'Which among the following phrases generally denotes National Income?', 1, 3),
(84, 9, 'In context with the macroeconomics , Philips Curve is a relationship between the rates of ___?', 1, 4),
(85, 9, 'Which among the following is used for a situation of “Too much money chasing too few goods?', 1, 5),
(86, 9, 'In economy, which among the following can be measured by calculating concentration ratios?', 1, 6),
(87, 9, 'Which of the following items is characterised by highest income elasticity of demand among others?', 1, 7),
(88, 9, 'Which one of the following is NOT a sign of economic development?', 1, 8),
(89, 9, 'A Goldilocks economy is represented by __:', 1, 9),
(90, 9, 'The central Statistical Office (CSO) has started measuring economic growth by gross value-added (GVA) at basic prices, replacing the practice of measuring it by GDP at factor cost. What is the difference between GDP at factor cost and GVA at basic prices?', 1, 10),
(91, 10, 'In a certain code language ‘PAYMENT’ is coded as ‘6101814111520’ and ‘JUSTIFY’ is coded as ‘11141519151620’. How will ‘COMPARE’ be coded in that language?', 1, 1),
(92, 10, 'Four Letter-clusters have been given, out of which three are alike in some manner and one is different. Select the letter-clusters that is different.', 1, 2),
(93, 10, 'In a certain code language, ‘RAJ’ is coded as ’87’ and ‘GITA’ is coded as ‘148’. How will ‘VARUN’ be coded in that language?', 1, 3),
(94, 10, 'In a certain code language, ‘PERMIT’ is written as ’VVLNOG’  How will ‘INERTIA’ be written in that language?', 1, 4),
(95, 10, 'Four Letter-clusters have been given, out of which three are alike in some manner and one is different. Select the letter-clusters that is different.', 1, 5),
(96, 10, 'In a certain code language, ‘VIRTUE’ is coded as ’201’ and ‘TRAGEDY’ is coded as ‘218’. How will ‘PROFANE’ be coded in that language?', 1, 6),
(97, 10, 'Four number-pairs have been given, out of which three are alike in some manner and one is different. Select the number-pairs that is different.', 1, 7),
(98, 10, 'Select the number from among the given options that can replace the question mark(?) in the following series: 10, 22, 35, 40, 72, 40, ?', 1, 8),
(99, 10, 'In a certain code language, ‘PLIGHTH’ is written as ‘JMQUIH’. How will ‘CANDLE’ be written in that language?', 1, 9),
(100, 10, 'If 19 July 2000 was a Wednesday, then what would be the day of the week on the 15 June 2012?', 1, 10);

-- --------------------------------------------------------

--
-- Table structure for table `user_answer`
--

CREATE TABLE `user_answer` (
  `answer_id` int(11) NOT NULL,
  `attempt_id` int(11) NOT NULL,
  `question_id` int(11) NOT NULL,
  `selected_ans` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user_table`
--

CREATE TABLE `user_table` (
  `user_id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `first_name` varchar(20) NOT NULL,
  `last_name` varchar(20) NOT NULL,
  `contact` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_table`
--

INSERT INTO `user_table` (`user_id`, `username`, `email`, `password`, `first_name`, `last_name`, `contact`) VALUES
(2, '@shruti', 'shruti@gmail.com', 'password123', 'Shruti', 'Sangwan', '2345678910'),
(3, '@kalbalia', 'anuj12@gmail.com', 'password321', 'Anuj', 'Kalbalia', '1234567890'),
(4, '@bhatia', 'rbhatia@gmail.com', 'password999', 'Radhika', 'Bhatia', '2234567890'),
(5, '@aditya', 'adisood@gmail.com', 'password342', 'Aditya', 'Sood', '9234567890');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `question_answers`
--
ALTER TABLE `question_answers`
  ADD PRIMARY KEY (`answer_id`),
  ADD KEY `question_id` (`question_id`);

--
-- Indexes for table `quizzes_table`
--
ALTER TABLE `quizzes_table`
  ADD PRIMARY KEY (`quiz_id`);

--
-- Indexes for table `quiz_attempt`
--
ALTER TABLE `quiz_attempt`
  ADD PRIMARY KEY (`attempt_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `quiz_id` (`quiz_id`);

--
-- Indexes for table `quiz_question`
--
ALTER TABLE `quiz_question`
  ADD PRIMARY KEY (`question_id`),
  ADD KEY `quiz_id` (`quiz_id`);

--
-- Indexes for table `user_answer`
--
ALTER TABLE `user_answer`
  ADD PRIMARY KEY (`answer_id`),
  ADD KEY `question_id` (`question_id`),
  ADD KEY `attempt_id` (`attempt_id`);

--
-- Indexes for table `user_table`
--
ALTER TABLE `user_table`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `question_answers`
--
ALTER TABLE `question_answers`
  MODIFY `answer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6102;

--
-- AUTO_INCREMENT for table `quizzes_table`
--
ALTER TABLE `quizzes_table`
  MODIFY `quiz_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `quiz_attempt`
--
ALTER TABLE `quiz_attempt`
  MODIFY `attempt_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `quiz_question`
--
ALTER TABLE `quiz_question`
  MODIFY `question_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102;

--
-- AUTO_INCREMENT for table `user_answer`
--
ALTER TABLE `user_answer`
  MODIFY `answer_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_table`
--
ALTER TABLE `user_table`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `question_answers`
--
ALTER TABLE `question_answers`
  ADD CONSTRAINT `question_answers_ibfk_1` FOREIGN KEY (`question_id`) REFERENCES `quiz_question` (`question_id`);

--
-- Constraints for table `quiz_attempt`
--
ALTER TABLE `quiz_attempt`
  ADD CONSTRAINT `quiz_attempt_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user_table` (`user_id`),
  ADD CONSTRAINT `quiz_attempt_ibfk_2` FOREIGN KEY (`quiz_id`) REFERENCES `quizzes_table` (`quiz_id`);

--
-- Constraints for table `quiz_question`
--
ALTER TABLE `quiz_question`
  ADD CONSTRAINT `quiz_question_ibfk_1` FOREIGN KEY (`quiz_id`) REFERENCES `quizzes_table` (`quiz_id`);

--
-- Constraints for table `user_answer`
--
ALTER TABLE `user_answer`
  ADD CONSTRAINT `user_answer_ibfk_1` FOREIGN KEY (`question_id`) REFERENCES `quiz_question` (`question_id`),
  ADD CONSTRAINT `user_answer_ibfk_2` FOREIGN KEY (`attempt_id`) REFERENCES `quiz_attempt` (`attempt_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
