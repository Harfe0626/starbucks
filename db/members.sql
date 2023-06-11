-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- 생성 시간: 23-06-11 15:41
-- 서버 버전: 10.4.28-MariaDB
-- PHP 버전: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 데이터베이스: `sample`
--

-- --------------------------------------------------------

--
-- 테이블 구조 `members`
--

CREATE TABLE `members` (
  `num` int(11) NOT NULL,
  `id` char(15) NOT NULL,
  `pw` char(15) NOT NULL,
  `name` char(10) NOT NULL,
  `year` int(10) NOT NULL,
  `month` int(10) NOT NULL,
  `day` int(10) NOT NULL,
  `phone` char(20) NOT NULL,
  `email` char(80) NOT NULL,
  `nick` char(10) NOT NULL,
  `regist_day` char(20) DEFAULT NULL,
  `level` int(11) DEFAULT NULL,
  `point` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- 테이블의 덤프 데이터 `members`
--

INSERT INTO `members` (`num`, `id`, `pw`, `name`, `year`, `month`, `day`, `phone`, `email`, `nick`, `regist_day`, `level`, `point`) VALUES
(1, 'strik241', '12345', '신정엽', 1999, 6, 26, '010-7127-1089', 'strik241@gmail.com', '병아리콧구멍', '2023-04-27 (04:20)', 9, 0),
(9, 'jihae00812', '12345', '신지혜', 1997, 9, 13, '010-3234-1089', 'jihae00812@naver.com', '몽이누나', '2023-06-10 (18:39)', 9, 0);

--
-- 덤프된 테이블의 인덱스
--

--
-- 테이블의 인덱스 `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`num`);

--
-- 덤프된 테이블의 AUTO_INCREMENT
--

--
-- 테이블의 AUTO_INCREMENT `members`
--
ALTER TABLE `members`
  MODIFY `num` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
