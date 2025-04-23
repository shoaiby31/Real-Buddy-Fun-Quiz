-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 23, 2025 at 04:07 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fbquiz`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `email`, `password`) VALUES
(1, 'admin@funquiz.com', 112233);

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `quiz_questions`
--

INSERT INTO `quiz_questions` (`quiz_id`, `question_id`, `user_email`, `correct_option`, `wrong_option1`, `wrong_option2`, `wrong_option3`) VALUES
(2116434302, 1, 'umarfarooq15391@gmail.com', 'House', 'Car', 'Job', 'Partner'),
(2116434303, 2, 'umarfarooq15391@gmail.com', 'Daily Affirmations', 'Spells', 'Dream Board', 'Taking action'),
(2116434304, 3, 'umarfarooq15391@gmail.com', 'Hawaii', 'Iceland', 'New York', 'Africa'),
(2116434305, 4, 'umarfarooq15391@gmail.com', 'Traveling the world', 'Having a successful business', 'Getting in shape and inspiring others', 'Having a family'),
(2116434306, 5, 'umarfarooq15391@gmail.com', 'Invest', 'Buy a dream home', 'Start a business', 'Spoil Friends and Family'),
(2116434307, 6, 'umarfarooq15391@gmail.com', 'Mom', 'Job', 'Car', 'Pet'),
(2116434308, 7, 'umarfarooq15391@gmail.com', 'Donald Trump', 'Kim Kardashian', 'Elon Musk', 'Beyoncé'),
(2116434309, 8, 'umarfarooq15391@gmail.com', 'Last Job', 'Ex partner', 'Car accident', 'Getting Arrested'),
(2116434310, 9, 'umarfarooq15391@gmail.com', 'Feels happy for them from afar', 'Attempts to be their friend again', 'Gets inspired and works harder', 'Gets a little jealous and bitter'),
(2116434311, 10, 'umarfarooq15391@gmail.com', 'Healthy American Food', 'Mexican restaurant', 'Pizza Shop', 'Fancy Steakhouse'),
(2116434312, 1, 'nagina@gmail.com', 'House', 'Car', 'Job', 'Partner'),
(2116434313, 2, 'nagina@gmail.com', 'Spells', 'Daily Affirmations', 'Dream Board', 'Taking action'),
(2116434314, 3, 'nagina@gmail.com', 'New York', 'Hawaii', 'Iceland', 'Africa'),
(2116434315, 4, 'nagina@gmail.com', 'Having a family', 'Traveling the world', 'Having a successful business', 'Getting in shape and inspiring others'),
(2116434316, 5, 'nagina@gmail.com', 'Start a business', 'Invest', 'Buy a dream home', 'Spoil Friends and Family'),
(2116434317, 6, 'nagina@gmail.com', 'Mom', 'Job', 'Car', 'Pet'),
(2116434318, 7, 'nagina@gmail.com', 'Elon Musk', 'Kim Kardashian', 'Donald Trump', 'Beyoncé'),
(2116434319, 8, 'nagina@gmail.com', 'Last Job', 'Ex partner', 'Car accident', 'Getting Arrested'),
(2116434320, 9, 'nagina@gmail.com', 'Gets inspired and works harder', 'Attempts to be their friend again', 'Feels happy for them from afar', 'Gets a little jealous and bitter'),
(2116434321, 10, 'nagina@gmail.com', 'Pizza Shop', 'Mexican restaurant', 'Healthy American Food', 'Fancy Steakhouse');

-- --------------------------------------------------------

--
-- Table structure for table `result`
--

CREATE TABLE `result` (
  `result_id` int(11) NOT NULL,
  `quiz_author` varchar(50) NOT NULL,
  `quiz_username` varchar(50) NOT NULL,
  `marks` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `email` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user_dmc`
--

CREATE TABLE `user_dmc` (
  `user_dmc_id` int(11) NOT NULL,
  `user_email` varchar(50) NOT NULL,
  `question_id` int(11) NOT NULL,
  `selected_option` varchar(50) NOT NULL,
  `correct_option` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

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
-- Indexes for table `user_dmc`
--
ALTER TABLE `user_dmc`
  ADD PRIMARY KEY (`user_dmc_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `question_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `quiz_questions`
--
ALTER TABLE `quiz_questions`
  MODIFY `quiz_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2116434322;

--
-- AUTO_INCREMENT for table `result`
--
ALTER TABLE `result`
  MODIFY `result_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `user_dmc`
--
ALTER TABLE `user_dmc`
  MODIFY `user_dmc_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
