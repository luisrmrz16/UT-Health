CREATE DATABASE UT_Health;
USE UT_Health;

CREATE TABLE `users` (
  `user_id` int PRIMARY KEY AUTO_INCREMENT,
  `email` varchar(25) NOT NULL,
  `user_name` varchar(25) UNIQUE NOT NULL,
  `password` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `school_id` varchar(10)
);

CREATE TABLE `patients` (
  `patient_id` int PRIMARY KEY AUTO_INCREMENT,
  `age` int(2),
  `gender` varchar(10),
  `weight` decimal(4),
  `height` int(3),
  `blood_type` varchar(10),
  `allergies` varchar(50),
  `disability` varchar(50),
  `chronic_disease` varchar(50),
  `current_treatment` varchar(50),
  `covid` varchar(2),
  `user_id` int 
);

CREATE TABLE `staff` (
  `staff_id` int PRIMARY KEY AUTO_INCREMENT,
  `email` varchar(25) NOT NULL,
  `user_name` varchar(25) UNIQUE NOT NULL,
  `password` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `staff_type` varchar(25) NOT NULL
);

CREATE TABLE `tutors` (
  `tutor_id` int PRIMARY KEY AUTO_INCREMENT,
  `email` varchar(25) NOT NULL,
  `user_name` varchar(25) UNIQUE NOT NULL,
  `password` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `group_id` int
);

CREATE TABLE `groups` (
  `group_id` int PRIMARY KEY AUTO_INCREMENT,
  `group_name` varchar(5) UNIQUE NOT NULL,
  `user_id` int
);

CREATE TABLE `student_lists` (
  `list_id` int PRIMARY KEY AUTO_INCREMENT,
  `group_id` int,
  `tutor_id` int
);

CREATE TABLE `covid_status` (
  `cs_id` int PRIMARY KEY AUTO_INCREMENT,
  `date_cs` datetime NOT NULL,
  `temp` varchar(5) NOT NULL,
  `symptom` varchar(100) NOT NULL,
  `patient_id` int
);

CREATE TABLE `polls` (
  `poll_id` int PRIMARY KEY AUTO_INCREMENT,
  `date_poll` datetime NOT NULL,
  `question_1` varchar(25),
  `question_2` varchar(25),
  `question_3` varchar(25),
  `question_4` varchar(25),
  `question_5` varchar(25),
  `patient_id` int
);

ALTER TABLE `patients` ADD FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);

ALTER TABLE `covid_status` ADD FOREIGN KEY (`patient_id`) REFERENCES `patients` (`patient_id`);

ALTER TABLE `polls` ADD FOREIGN KEY (`patient_id`) REFERENCES `patients` (`patient_id`);

ALTER TABLE `groups` ADD FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);

ALTER TABLE `student_lists` ADD FOREIGN KEY (`group_id`) REFERENCES `groups` (`group_id`);

ALTER TABLE `student_lists` ADD FOREIGN KEY (`tutor_id`) REFERENCES `tutors` (`tutor_id`);
