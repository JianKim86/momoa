-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- 생성 시간: 19-04-12 11:38
-- 서버 버전: 5.5.59-log
-- PHP 버전: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 데이터베이스: `toasthistory`
--

-- --------------------------------------------------------

--
-- 테이블 구조 `momoa_member`
--

CREATE TABLE `momoa_member` (
  `m_num` int(10) NOT NULL COMMENT '순서',
  `m_type` varchar(1) NOT NULL DEFAULT '1' COMMENT '1.일반회원 2.관리자',
  `m_id` varchar(20) NOT NULL COMMENT '아이디',
  `m_pw` varchar(30) NOT NULL COMMENT '비밀번호',
  `m_name` varchar(10) NOT NULL COMMENT '이름',
  `m_birth` varchar(15) NOT NULL COMMENT '생일(yyyy-mm-dd)',
  `m_hp` varchar(15) NOT NULL COMMENT '휴대폰 번호',
  `m_email` varchar(40) NOT NULL,
  `m_sns` varchar(1) NOT NULL DEFAULT 'N' COMMENT 'sns 수신여부',
  `m_state` varchar(1) NOT NULL DEFAULT '1' COMMENT '1.회원 2.탈퇴 회원'
) ENGINE=MyISAM DEFAULT CHARSET=euckr;

--
-- 테이블의 덤프 데이터 `momoa_member`
--

INSERT INTO `momoa_member` (`m_num`, `m_type`, `m_id`, `m_pw`, `m_name`, `m_birth`, `m_hp`, `m_email`, `m_sns`, `m_state`) VALUES
(1, '2', 'momoa2', 'q1w2e3r4', '관리\자', '1900-01-01', '01000000000', 'momoa1234@naver.com', 'N', '1'),
(14, '1', 'toasthistory', 'q1w2e3', 'wfeef', '1990-11-02', '01012345678', 'wfeewf@wef', 'N', '1'),
(13, '1', 'momo', 'q1w2e3', 'hrth', '1990-11-02', '01012345678', 'wegweg@naver.com', 'N', '1'),
(12, '1', 'efwefeef', 'q1w2e3', 'wefewf', '1990-11-02', '01012345678', 'wegweg@hanmail.net', 'Y', '1');

--
-- 덤프된 테이블의 인덱스
--

--
-- 테이블의 인덱스 `momoa_member`
--
ALTER TABLE `momoa_member`
  ADD PRIMARY KEY (`m_num`);

--
-- 덤프된 테이블의 AUTO_INCREMENT
--

--
-- 테이블의 AUTO_INCREMENT `momoa_member`
--
ALTER TABLE `momoa_member`
  MODIFY `m_num` int(10) NOT NULL AUTO_INCREMENT COMMENT '순서', AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
