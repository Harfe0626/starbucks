-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- 생성 시간: 23-06-13 03:15
-- 서버 버전: 10.4.27-MariaDB
-- PHP 버전: 8.2.0

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
-- 테이블 구조 `board_notice`
--

CREATE TABLE `board_notice` (
  `num` int(11) NOT NULL,
  `id` char(15) NOT NULL,
  `name` char(15) NOT NULL,
  `subject` char(200) NOT NULL,
  `content` text NOT NULL,
  `regist_day` char(20) NOT NULL,
  `hit` int(11) NOT NULL,
  `file_name` char(40) DEFAULT NULL,
  `file_type` char(40) DEFAULT NULL,
  `file_copied` char(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- 테이블의 덤프 데이터 `board_notice`
--

INSERT INTO `board_notice` (`num`, `id`, `name`, `subject`, `content`, `regist_day`, `hit`, `file_name`, `file_type`, `file_copied`) VALUES
(1, '', '', '시스템 개선 및 서비스 점검 안내', '안녕하세요. 스타벅스 코리아입니다.\r\n\r\n보다 나은 서비스를 제공해 드리고자 아래와 같이 시스템 작업을 진행합니다.\r\n\r\n \r\n\r\n- 일자 및 시간 : 2023년 05월 09일(화) 00시 00분 ~ 05월 09일(화) 05시 00분\r\n\r\n- 대상 서비스 : 스타벅스 홈페이지/스타벅스 APP 내 회원정보 조회 서비스 및 현대카드 본인인증 서비스\r\n\r\n \r\n\r\n작업 시간 중 해당 서비스 이용 시 불편사항이 발생할 수 있는 점 양해 부탁드립니다.\r\n\r\n감사합니다.', '2023-05-09', 7464, NULL, NULL, NULL),
(2, '', '', '시스템 개선 및 서비스 점검 안내', '안녕하세요. 스타벅스 코리아입니다.\r\n\r\n보다 나은 서비스를 제공해 드리고자 시스템 점검 작업을 진행합니다.\r\n\r\n \r\n\r\n- 일자 및 시간 : 2023년 5월 10일(수) 00:00 ~ 03:00 (3시간)\r\n\r\n- 대상 서비스 : 스타벅스 APP\r\n\r\n \r\n\r\n작업 시간 중 해당 서비스 이용 시 불편사항이 발생할 수 있는 점 양해 부탁드립니다.\r\n\r\n감사합니다.', '2023-05-10', 8157, NULL, NULL, NULL),
(3, '', '', '시스템 개선 및 서비스 점검 안내', '안녕하세요. 스타벅스 코리아입니다.\r\n\r\n보다 나은 서비스를 제공해 드리고자 시스템 점검 작업을 진행합니다.\r\n\r\n- 일자 및 시간 : 2023년 5월 16일(화) 00:00 ~ 04:00 (4시간)\r\n- 대상 서비스 : 스타벅스 APP, 스타벅스 홈페이지\r\n\r\n작업 시간 중 해당 서비스 이용 시 불편사항이 발생할 수 있는 점 양해 부탁드립니다.\r\n감사합니다.', '2023-05-16', 7545, NULL, NULL, NULL),
(4, '', '', '시스템 개선 및 서비스 점검 안내', '안녕하세요. 스타벅스 코리아입니다.\r\n\r\n보다 나은 스타벅스 현대카드 관련 서비스 제공을 위한 시스템 점검을 진행합니다.\r\n\r\n \r\n\r\n- 점검 시간 : 2023년 5월 15일(월) 오후 11:30 ~ 5월 16일(화) 오전 02:30 \r\n\r\n \r\n\r\n해당 시간 중 스타벅스 웹/앱을 통한 스타벅스 현대카드 서비스 이용 시\r\n\r\n불편 사항이 발생할 수 있는 점 양해 부탁드립니다.\r\n\r\n \r\n\r\n감사합니다.', '2023-05-16', 7660, NULL, NULL, NULL),
(5, '', '', '시스템 개선 및 서비스 점검 안내', '안녕하세요. 스타벅스 코리아입니다.\r\n\r\n보다 나은 서비스를 제공해 드리고자 아래와 같이 시스템 개선 및 점검을 진행합니다.\r\n\r\n1. APP PUSH & 알림 서비스 점검\r\n- 일자 및 시간 : 2023년 05월 17일(수) 00시 00분 ~ 05월 17일(수) 04시 00분\r\n- 제한 서비스 : PUSH 및 알림함 조회 서비스 \r\n\r\n2. APP 서비스 점검\r\n- 일자 및 시간 : 2023년 05월 18일(목) 00시 00분 ~ 05월 18일(목) 05시 00분\r\n- 제한 서비스 : 홈페이지 / APP / GEAR / Bixby / 삼성카드 스타벅스 오더 / 신한PayFAN 스타벅스오더 / 네이버 주문 / 스타벅스 현대카드 발급 서비스 / VOC\r\n\r\n해당 점검 시간 중 서비스 이용이 제한되는 점 양해 부탁드립니다.\r\n감사합니다.', '2023-05-17', 4387, NULL, NULL, NULL),
(6, '', '', '개인정보처리방침 개정 안내', '개인정보처리방침 개정 안내\r\n안녕하세요.\r\n스타벅스 코리아 개인정보처리방침이 개정되어 변경내용을 안내드립니다.\r\n\r\n변경일정\r\n사전 공지일 : 2023년 5월 22일\r\n개정 시행일 : 2023년 5월 29일\r\n본 개정에 동의하지 않으시는 경우 거부의사 표시(회원탈퇴)를 하실 수 있으며,\r\n거부의사를 표시하지 않으신 경우 개정에 동의하신 것으로 간주됩니다.', '2023-05-20', 3662, NULL, NULL, NULL),
(7, '', '', '시스템 개선 및 서비스 점검 안내', '안녕하세요. 스타벅스 코리아입니다. \r\n보다 나은 서비스를 제공해 드리고자 아래와 같이 시스템 개선 및 점검을 진행합니다. \r\n\r\n- 일자 및 시간 : 2023년 05월 21일 (일) 00시 00분 ~ 05월 21일 (일) 06시 00분\r\n- 제한 서비스 : 홈페이지 / APP / GEAR / Bixby / 삼성카드 스타벅스 오더 / 신한카드 스타벅스 오더 / 네이버 주문 / 스타벅스 현대카드 발급 서비스 / 고객의 소리\r\n\r\n해당 점검 시간 중 서비스 이용이 제한되는 점 양해 부탁드립니다. \r\n감사합니다.  ', '2023-05-21', 3525, NULL, NULL, NULL),
(8, '', '', '시스템 개선 및 서비스 점검 안내', '안녕하세요. 스타벅스 코리아입니다. \r\n보다 나은 서비스를 제공해 드리고자 아래와 같이 시스템 개선 및 점검을 진행합니다. \r\n\r\n- 일자 및 시간 : 2023년 05월 22일 (월) 00시 00분 ~ 05월 22일 (월) 06시 00분\r\n- 제한 서비스 : 홈페이지 / APP / GEAR / Bixby / 삼성카드 스타벅스 오더 / 신한카드 스타벅스 오더 / 네이버 주문 / 스타벅스 현대카드 발급 서비스 / 고객의 소리\r\n\r\n해당 점검 시간 중 서비스 이용이 제한되는 점 양해 부탁드립니다. \r\n감사합니다.  ', '2023-05-22', 3491, NULL, NULL, NULL),
(9, '', '', '시스템 개선 및 서비스 점검 안내', '안녕하세요. 스타벅스 코리아입니다. \r\n보다 나은 서비스를 제공해 드리고자 아래와 같이 시스템 개선 및 점검을 진행합니다. \r\n\r\n- 일자 및 시간 : 2023년 05월 23일 (화) 00:00 ~ 06:00 (6시간)\r\n- 제한 서비스 : 홈페이지 / APP / GEAR / Bixby / 삼성카드 스타벅스 오더 / 신한카드 스타벅스 오더 / 네이버 주문 / 스타벅스 현대카드 발급 서비스 / 고객의 소리\r\n\r\n해당 점검 시간 중 서비스 이용이 제한되는 점 양해 부탁드립니다. \r\n감사합니다.  ', '2023-05-23', 4, NULL, NULL, NULL),
(10, '', '', '신세계 유니버스 클럽 이용 약관 안내', '안녕하세요. 스타벅스 코리아입니다. \r\n신세계 유니버스 클럽의 이용약관 제정을 아래와 같이 안내해 드립니다.\r\n\r\n1. 사유 : 신세계 유니버스 클럽 서비스 제공\r\n2. 제정일 : 2023년 06월 08일\r\n3. 약관의 내용 : \r\n신세계 유니버스 클럽 이용 약관 확인하기\r\n\r\n감사합니다. ', '2023-06-08', 9, NULL, NULL, NULL),
(11, '', '', '시스템 개선 및 서비스 점검 안내', '안녕하세요. 스타벅스 코리아입니다.\r\n보다 나은 서비스를 제공해 드리고자 시스템 점검 작업을 진행합니다.\r\n \r\n- 일자 및 시간 : 2023년 5월 28일(일) 00:00 ~ 05:00 (5시간)\r\n- 대상 서비스 : 스타벅스 홈페이지 / 스타벅스 APP / GEAR / Bixby / 삼성카드 스타벅스 오더 / 신한카드 스타벅스 오더 / 네이버 주문 / 스타벅스 현대카드 발급 서비스 / 고객의 소리\r\n\r\n작업 시간 중 해당 서비스 이용 시 불편사항이 발생할 수 있는 점 양해 부탁드립니다.\r\n감사합니다.\r\n\r\nPellentesque eu nisi et ante posuere sodales. \r\n\r\nDuis tempus felis gravida risus sodales facilisis. \r\n\r\nDuis sagittis leo neque, id blandit turpis aliquam a. \r\n\r\nSuspendisse vitae vulputate nisl.', '2023-05-28', 7, NULL, NULL, NULL),
(12, '', '', '스타벅스 코리아 사칭 (NFT 관련 등) 홈페이지 및 이메일 주의 안내', '안녕하세요. 스타벅스 코리아입니다.\r\n\r\n최근 스타벅스 코리아를 사칭하여 이메일을 발송하거나, 허위 홈페이지를 통해 이벤트 참여를 유도하는 사기 행위가 이루어지고 있어 \r\n고객 여러분의 각별한 주의를 부탁드립니다.\r\n\r\n사칭 사례) siren-collection, starbucks-promotion, starbucks-sirennft, starbucks-siren, starbucks-mint 등의 회사 사칭 홈페이지(주소)를 통해 허위 NFT 이벤트 참여 유도\r\n\r\n스타벅스 공식 홈페이지 주소는 아래와 같으며 접속하실 때 주소를 잘 확인해주시기 바랍니다.\r\nhttps://www.starbucks.co.kr\r\n\r\n또한 당사 안내, 광고 등의 이메일은 starbucks@starbucks.co.kr에서 발송해드리고 있으니 \r\n그 외 유사한 이름의 발신자로부터 이메일을 받으신 경우 본문의 링크를 클릭하지 않도록 유의해주시기 바랍니다.\r\n\r\n불법 스팸, 피싱, 해킹 등이 의심되는 경우 아래 기관으로 신고하여 상담 받을 수 있습니다.\r\n\r\n- 한국인터넷 진흥원 대국민서비스(118사이버도우미) 국번없이 118, 사이트 주소: https://www.kisa.or.kr/cyberhelper118\r\n\r\n감사합니다.', '2023-06-11', 12, NULL, NULL, NULL);

--
-- 덤프된 테이블의 인덱스
--

--
-- 테이블의 인덱스 `board_notice`
--
ALTER TABLE `board_notice`
  ADD PRIMARY KEY (`num`);

--
-- 덤프된 테이블의 AUTO_INCREMENT
--

--
-- 테이블의 AUTO_INCREMENT `board_notice`
--
ALTER TABLE `board_notice`
  MODIFY `num` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
