-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 17, 2020 at 09:37 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fb_quiz`
--

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `question_id` int(11) NOT NULL,
  `question_part_a` varchar(254) NOT NULL,
  `question_part_b` varchar(255) NOT NULL,
  `option1` varchar(50) NOT NULL,
  `option2` varchar(50) NOT NULL,
  `option3` varchar(50) NOT NULL,
  `option4` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`question_id`, `question_part_a`, `question_part_b`, `option1`, `option2`, `option3`, `option4`) VALUES
(1, 'What is the biggest thing', 'has attracted so far? 💫', 'Car', 'House', 'Job', 'Partner'),
(2, 'Which style of manifesting does', 'prefer? 🔮', 'Daily Affirmations', 'Spells', 'Dream Board', 'Taking action'),
(3, 'If', 'could manifest a trip anywhere, where would it be? ✈️', 'Hawaii', 'Iceland', 'New York', 'Africa'),
(4, 'What does', '’s dream life consist of? 😍', 'Traveling the world', 'Having a successful business', 'Getting in shape and inspiring others', 'Having a family'),
(5, 'What’s the first thing', 'would do after manifesting the lottery? 💰', 'Invest', 'Buy a dream home', 'Start a business', 'Spoil Friends and Family'),
(6, 'What is', 'MOST grateful for? ❤️', 'Job', 'Mom', 'Car', 'Pet'),
(7, 'If', 'could manifest a day with a famous person who would it be? 🤩', 'Kim Kardashian', 'Elon Musk', 'Donald Trump', 'Beyoncé'),
(8, 'What’s the worst thing', 'has attracted into their life? 😤', 'Ex partner', 'Car accident', 'Last Job', 'Getting Arrested'),
(9, 'An old friend manifests a brand new mansion and a luxury car, how does', 'react? 😱', 'Attempts to be their friend again', 'Feels happy for them from afar', 'Gets inspired and works harder', 'Gets a little jealous and bitter'),
(10, 'If', 'manifested their own restaurant what type of food would it be? 🥘', 'Mexican restaurant', 'Pizza Shop', 'Healthy American Food', 'Fancy Steakhouse');

-- --------------------------------------------------------

--
-- Table structure for table `quiz_questions`
--

CREATE TABLE `quiz_questions` (
  `quiz_id` int(11) NOT NULL,
  `question_id` int(11) NOT NULL,
  `user_email` varchar(50) NOT NULL,
  `correct_option` varchar(254) NOT NULL,
  `wrong_option1` varchar(254) NOT NULL,
  `wrong_option2` varchar(254) NOT NULL,
  `wrong_option3` varchar(254) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `quiz_questions`
--

INSERT INTO `quiz_questions` (`quiz_id`, `question_id`, `user_email`, `correct_option`, `wrong_option1`, `wrong_option2`, `wrong_option3`) VALUES
(141, 1, 'shoaiby31@gmail.com', 'bike', 'Car', 'House', 'Partner'),
(142, 2, 'shoaiby31@gmail.com', 'Spells', 'Daily Affirmations', 'Dream Board', 'Taking action'),
(143, 3, 'shoaiby31@gmail.com', 'Hawaii', 'Iceland', 'New York', 'Africa'),
(144, 4, 'shoaiby31@gmail.com', 'Having a family', 'Traveling the world', 'Having a successful business', 'Getting in shape and inspiring others'),
(145, 5, 'shoaiby31@gmail.com', 'Buy a dream home', 'Invest', 'Start a business', 'Spoil Friends and Family'),
(146, 6, 'shoaiby31@gmail.com', 'Job', 'Mom', 'Car', 'Pet'),
(147, 7, 'shoaiby31@gmail.com', 'Beyoncé', 'Kim Kardashian', 'Elon Musk', 'Donald Trump'),
(148, 8, 'shoaiby31@gmail.com', 'Last Job', 'Ex partner', 'Car accident', 'Getting Arrested'),
(149, 9, 'shoaiby31@gmail.com', 'Feels happy for them from afar', 'Attempts to be their friend again', 'Gets inspired and works harder', 'Gets a little jealous and bitter'),
(150, 10, 'shoaiby31@gmail.com', 'Pizza Shop', 'Mexican restaurant', 'Healthy American Food', 'Fancy Steakhouse'),
(171, 1, 'rozzikhan30@gmail.com', 'Car', 'House', 'Job', 'Partner'),
(172, 2, 'rozzikhan30@gmail.com', 'Daily Affirmations', 'Spells', 'Dream Board', 'Taking action'),
(173, 3, 'rozzikhan30@gmail.com', 'Hawaii', 'Iceland', 'New York', 'Africa'),
(174, 4, 'rozzikhan30@gmail.com', 'Traveling the world', 'Having a successful business', 'Getting in shape and inspiring others', 'Having a family'),
(175, 5, 'rozzikhan30@gmail.com', 'Invest', 'Buy a dream home', 'Start a business', 'Spoil Friends and Family'),
(176, 6, 'rozzikhan30@gmail.com', 'Job', 'Mom', 'Car', 'Pet'),
(177, 7, 'rozzikhan30@gmail.com', 'Kim Kardashian', 'Elon Musk', 'Donald Trump', 'Beyoncé'),
(178, 8, 'rozzikhan30@gmail.com', 'Ex partner', 'Car accident', 'Last Job', 'Getting Arrested'),
(179, 9, 'rozzikhan30@gmail.com', 'Attempts to be their friend again', 'Feels happy for them from afar', 'Gets inspired and works harder', 'Gets a little jealous and bitter'),
(180, 10, 'rozzikhan30@gmail.com', 'Mexican restaurant', 'Pizza Shop', 'Healthy American Food', 'Fancy Steakhouse'),
(191, 1, 'umer@gmail.com', 'girl', 'Car', 'Job', 'Partner'),
(192, 2, 'umer@gmail.com', 'Taking action & Villan', 'Daily Affirmations', 'Spells', 'Dream Board'),
(193, 3, 'umer@gmail.com', 'Afghanistan', 'Hawaii', 'New York', 'Africa'),
(194, 4, 'umer@gmail.com', 'Traveling to hell', 'Having a successful business', 'Getting in shape and inspiring others', 'Having a family'),
(195, 5, 'umer@gmail.com', 'Buy Naswar shop', 'Buy a dream home', 'Start a business', 'Spoil Friends and Family'),
(196, 6, 'umer@gmail.com', 'Mom', 'Job', 'Car', 'Pet'),
(197, 7, 'umer@gmail.com', 'Imran Khan', 'Kim Kardashian', 'Elon Musk', 'Beyoncé'),
(198, 8, 'umer@gmail.com', 'Ex partner', 'Car accident', 'Last Job', 'Getting Arrested'),
(199, 9, 'umer@gmail.com', 'Attempts to be their friend again', 'Feels happy for them from afar', 'Gets inspired and works harder', 'Gets a little jealous and bitter'),
(200, 10, 'umer@gmail.com', 'Pizza Shop', 'Mexican restaurant', 'Healthy American Food', 'Fancy Steakhouse'),
(201, 1, 'example1@gmail.com', 'Car', 'House', 'Job', 'Partner'),
(202, 2, 'example1@gmail.com', 'Daily Affirmations', 'Spells', 'Dream Board', 'Taking action'),
(203, 3, 'example1@gmail.com', 'Hawaii', 'Iceland', 'New York', 'Africa'),
(204, 4, 'example1@gmail.com', 'Traveling the world', 'Having a successful business', 'Getting in shape and inspiring others', 'Having a family'),
(205, 5, 'example1@gmail.com', 'Invest', 'Buy a dream home', 'Start a business', 'Spoil Friends and Family'),
(206, 6, 'example1@gmail.com', 'Job', 'Mom', 'Car', 'Pet'),
(207, 7, 'example1@gmail.com', 'Kim Kardashian', 'Elon Musk', 'Donald Trump', 'Beyoncé'),
(208, 8, 'example1@gmail.com', 'Ex partner', 'Car accident', 'Last Job', 'Getting Arrested'),
(209, 9, 'example1@gmail.com', 'Attempts to be their friend again', 'Feels happy for them from afar', 'Gets inspired and works harder', 'Gets a little jealous and bitter'),
(210, 10, 'example1@gmail.com', 'Mexican restaurant', 'Pizza Shop', 'Healthy American Food', 'Fancy Steakhouse'),
(221, 1, 'umeras@gmail.com', 'Car', 'House', 'Job', 'Partner'),
(222, 2, 'umeras@gmail.com', 'Dream Board', 'Daily Affirmations', 'Spells', 'Taking action'),
(223, 3, 'umeras@gmail.com', 'Hawaii', 'Iceland', 'New York', 'Africa'),
(224, 4, 'umeras@gmail.com', 'Traveling the world', 'Having a successful business', 'Getting in shape and inspiring others', 'Having a family'),
(225, 5, 'umeras@gmail.com', 'Invest', 'Buy a dream home', 'Start a business', 'Spoil Friends and Family'),
(226, 6, 'umeras@gmail.com', 'Mom', 'Job', 'Car', 'Pet'),
(227, 7, 'umeras@gmail.com', 'Donald Trump', 'Kim Kardashian', 'Elon Musk', 'Beyoncé'),
(228, 8, 'umeras@gmail.com', 'Getting Arrested', 'Ex partner', 'Car accident', 'Last Job'),
(229, 9, 'umeras@gmail.com', 'Gets inspired and works harder', 'Attempts to be their friend again', 'Feels happy for them from afar', 'Gets a little jealous and bitter'),
(230, 10, 'umeras@gmail.com', 'Mexican restaurant', 'Pizza Shop', 'Healthy American Food', 'Fancy Steakhouse'),
(231, 1, 'examplewewd@gmail.com', 'House', 'Car', 'Job', 'Partner'),
(232, 2, 'examplewewd@gmail.com', 'Daily Affirmations', 'Spells', 'Dream Board', 'Taking action'),
(233, 3, 'examplewewd@gmail.com', 'Hawaii', 'Iceland', 'New York', 'Africa'),
(234, 4, 'examplewewd@gmail.com', 'Traveling the world', 'Having a successful business', 'Getting in shape and inspiring others', 'Having a family'),
(235, 5, 'examplewewd@gmail.com', 'Buy a dream home', 'Invest', 'Start a business', 'Spoil Friends and Family'),
(236, 6, 'examplewewd@gmail.com', 'Job', 'Mom', 'Car', 'Pet'),
(237, 7, 'examplewewd@gmail.com', 'Elon Musk', 'Kim Kardashian', 'Donald Trump', 'Beyoncé'),
(238, 8, 'examplewewd@gmail.com', 'Car accident', 'Ex partner', 'Last Job', 'Getting Arrested'),
(239, 9, 'examplewewd@gmail.com', 'Attempts to be their friend again', 'Feels happy for them from afar', 'Gets inspired and works harder', 'Gets a little jealous and bitter'),
(240, 10, 'examplewewd@gmail.com', 'Healthy American Food', 'Mexican restaurant', 'Pizza Shop', 'Fancy Steakhouse'),
(241, 1, 'umer13@gmail.com', 'Car', 'House', 'Job', 'Partner'),
(242, 2, 'umer13@gmail.com', 'Dream Board', 'Daily Affirmations', 'Spells', 'Taking action'),
(243, 3, 'umer13@gmail.com', 'Hawaii', 'Iceland', 'New York', 'Africa'),
(244, 4, 'umer13@gmail.com', 'Traveling the world', 'Having a successful business', 'Getting in shape and inspiring others', 'Having a family'),
(245, 5, 'umer13@gmail.com', 'Buy a dream home', 'Invest', 'Start a business', 'Spoil Friends and Family'),
(246, 6, 'umer13@gmail.com', 'Mom', 'Job', 'Car', 'Pet'),
(247, 7, 'umer13@gmail.com', 'Kim Kardashian', 'Elon Musk', 'Donald Trump', 'Beyoncé'),
(248, 8, 'umer13@gmail.com', 'Car accident', 'Ex partner', 'Last Job', 'Getting Arrested'),
(249, 9, 'umer13@gmail.com', 'Attempts to be their friend again', 'Feels happy for them from afar', 'Gets inspired and works harder', 'Gets a little jealous and bitter'),
(250, 10, 'umer13@gmail.com', 'Mexican restaurant', 'Pizza Shop', 'Healthy American Food', 'Fancy Steakhouse'),
(251, 1, 'examewedple1@gmail.com', 'Job', 'Car', 'House', 'Partner'),
(252, 2, 'examewedple1@gmail.com', 'Spells', 'Daily Affirmations', 'Dream Board', 'Taking action'),
(253, 3, 'examewedple1@gmail.com', 'New York', 'Hawaii', 'Iceland', 'Africa'),
(254, 4, 'examewedple1@gmail.com', 'Getting in shape and inspiring others', 'Traveling the world', 'Having a successful business', 'Having a family'),
(255, 5, 'examewedple1@gmail.com', 'Invest', 'Buy a dream home', 'Start a business', 'Spoil Friends and Family'),
(256, 6, 'examewedple1@gmail.com', 'Job', 'Mom', 'Car', 'Pet'),
(257, 7, 'examewedple1@gmail.com', 'Kim Kardashian', 'Elon Musk', 'Donald Trump', 'Beyoncé'),
(258, 8, 'examewedple1@gmail.com', 'Ex partner', 'Car accident', 'Last Job', 'Getting Arrested'),
(259, 9, 'examewedple1@gmail.com', 'Gets inspired and works harder', 'Attempts to be their friend again', 'Feels happy for them from afar', 'Gets a little jealous and bitter'),
(260, 10, 'examewedple1@gmail.com', 'Fancy Steakhouse', 'Mexican restaurant', 'Pizza Shop', 'Healthy American Food'),
(261, 1, 'e3example1@gmail.com', 'Job', 'Car', 'House', 'Partner'),
(262, 2, 'e3example1@gmail.com', 'Taking action', 'Daily Affirmations', 'Spells', 'Dream Board'),
(263, 3, 'e3example1@gmail.com', 'Africa', 'Hawaii', 'Iceland', 'New York'),
(264, 4, 'e3example1@gmail.com', 'Traveling the world', 'Having a successful business', 'Getting in shape and inspiring others', 'Having a family'),
(265, 5, 'e3example1@gmail.com', 'Spoil Friends and Family', 'Invest', 'Buy a dream home', 'Start a business'),
(266, 6, 'e3example1@gmail.com', 'Pet', 'Job', 'Mom', 'Car'),
(267, 7, 'e3example1@gmail.com', 'Beyoncé', 'Kim Kardashian', 'Elon Musk', 'Donald Trump'),
(268, 8, 'e3example1@gmail.com', 'Car accident', 'Ex partner', 'Last Job', 'Getting Arrested'),
(269, 9, 'e3example1@gmail.com', 'Attempts to be their friend again', 'Feels happy for them from afar', 'Gets inspired and works harder', 'Gets a little jealous and bitter'),
(270, 10, 'e3example1@gmail.com', 'Healthy American Food', 'Mexican restaurant', 'Pizza Shop', 'Fancy Steakhouse'),
(271, 1, 'example@gmail.com', 'House', 'Car', 'Job', 'Partner'),
(272, 2, 'example@gmail.com', 'Daily Affirmations', 'Spells', 'Dream Board', 'Taking action'),
(273, 3, 'example@gmail.com', 'Hawaii', 'Iceland', 'New York', 'Africa'),
(274, 4, 'example@gmail.com', 'Traveling the world', 'Having a successful business', 'Getting in shape and inspiring others', 'Having a family'),
(275, 5, 'example@gmail.com', 'Invest', 'Buy a dream home', 'Start a business', 'Spoil Friends and Family'),
(276, 6, 'example@gmail.com', 'Job', 'Mom', 'Car', 'Pet'),
(277, 7, 'example@gmail.com', 'Kim Kardashian', 'Elon Musk', 'Donald Trump', 'Beyoncé'),
(278, 8, 'example@gmail.com', 'Car accident', 'Ex partner', 'Last Job', 'Getting Arrested'),
(279, 9, 'example@gmail.com', 'Gets inspired and works harder', 'Attempts to be their friend again', 'Feels happy for them from afar', 'Gets a little jealous and bitter'),
(280, 10, 'example@gmail.com', 'Healthy American Food', 'Mexican restaurant', 'Pizza Shop', 'Fancy Steakhouse');

-- --------------------------------------------------------

--
-- Table structure for table `result`
--

CREATE TABLE `result` (
  `result_id` int(11) NOT NULL,
  `quiz_author` varchar(50) NOT NULL,
  `quiz_username` varchar(50) NOT NULL,
  `marks` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `result`
--

INSERT INTO `result` (`result_id`, `quiz_author`, `quiz_username`, `marks`) VALUES
(8, 'umer@gmail.com', 'Shoaib Yousaf', 8),
(9, 'umer@gmail.com', 'Tahir', 10),
(10, 'example1@gmail.com', 'tytyty', 4),
(11, 'umeras@gmail.com', 'yyyy', 0),
(12, 'umeras@gmail.com', 'swfrwsefge4', 3),
(13, 'umeras@gmail.com', 'swfrwsefge4', 1),
(14, 'examewedple1@gmail.com', 'adad', 2),
(15, 'examewedple1@gmail.com', 'adad', 1),
(16, 'examewedple1@gmail.com', 'sdsfsdf', 4),
(17, 'examewedple1@gmail.com', 'sds', 1),
(18, 'examewedple1@gmail.com', 'fg', 2),
(19, 'examewedple1@gmail.com', 'wrfegf', 3),
(20, 'examewedple1@gmail.com', 'wdwfwef', 2),
(21, 'e3example1@gmail.com', 'asasd', 5),
(22, 'example@gmail.com', 'swdfsw', 2);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `email` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`email`, `name`) VALUES
('e3example1@gmail.com', 'Umer'),
('examewedple1@gmail.com', 'Umer'),
('example123@gmail.com', 'xyz'),
('example1@gmail.com', 'Umer'),
('example@gmail.com', 'Umer'),
('examplewewd@gmail.com', 'dgfhg'),
('rozzikhan30@gmail.com', 'Sarfraz'),
('shoaiby31@gmail.com', 'Shoaib Yousaf'),
('ss@gmail.com', 'Shoaib Yousaf'),
('umer13@gmail.com', 'Umer'),
('umer@gmail.com', 'Umer'),
('umeras@gmail.com', 'adsfc');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`question_id`);

--
-- Indexes for table `quiz_questions`
--
ALTER TABLE `quiz_questions`
  ADD PRIMARY KEY (`quiz_id`);

--
-- Indexes for table `result`
--
ALTER TABLE `result`
  ADD PRIMARY KEY (`result_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `question_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `quiz_questions`
--
ALTER TABLE `quiz_questions`
  MODIFY `quiz_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=281;

--
-- AUTO_INCREMENT for table `result`
--
ALTER TABLE `result`
  MODIFY `result_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
