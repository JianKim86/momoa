-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- 생성 시간: 19-04-10 09:13
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
-- 테이블 구조 `momoa`
--

CREATE TABLE `momoa` (
  `num` int(10) NOT NULL,
  `type` varchar(10) NOT NULL,
  `shopname` varchar(12) NOT NULL,
  `filepath` text NOT NULL,
  `name` varchar(40) NOT NULL,
  `price` varchar(12) NOT NULL DEFAULT '0',
  `url` text NOT NULL COMMENT '쇼핑몰 주소',
  `date` varchar(20) NOT NULL,
  `visible` varchar(1) NOT NULL DEFAULT 'Y'
) ENGINE=MyISAM DEFAULT CHARSET=euckr;

--
-- 테이블의 덤프 데이터 `momoa`
--

INSERT INTO `momoa` (`num`, `type`, `shopname`, `filepath`, `name`, `price`, `url`, `date`, `visible`) VALUES
(1, 'top', '\안나파리\스', 'uploads/20190405132218.jpg', 'kingston mtm', '27,000', 'https://annaparis.kr/product/kingston-mtm/545/category/25/display/1/', '20190405132218', 'Y'),
(2, 'top', '\안나파리\스', 'uploads/20190405132322.jpg', 'art tee ', '28,000', 'https://annaparis.kr/product/art-tee/544/category/25/display/1/', '20190405132322', 'Y'),
(3, 'top', '\안나파리\스', 'uploads/20190405132412.jpg', 'u-neck tee', '18,000', 'https://annaparis.kr/product/u-neck-tee/506/category/25/display/1/', '20190405132412', 'Y'),
(4, 'top', '\안나파리\스', 'uploads/20190405132442.jpg', 'less cotton tee', '23,000', 'https://annaparis.kr/product/less-cotton-tee/501/category/25/display/1/', '20190405132442', 'Y'),
(5, 'top', '\안나파리\스', 'uploads/20190405132516.jpg', 'mamalade mtm', '30,000', 'https://annaparis.kr/product/mamalade-mtm/487/category/25/display/1/', '20190405132516', 'Y'),
(6, 'bottom', '\안나파리\스', 'uploads/20190405132601.jpg', 'soho banding cotton pt', '33,000', 'https://annaparis.kr/product/soho-banding-cotton-pt/548/category/28/display/1/', '20190405132601', 'Y'),
(7, 'bottom', '\안나파리\스', 'uploads/20190405132637.jpg', 'cream pintuck wide slacks', '36,000', 'https://annaparis.kr/product/cream-pintuck-wide-slacks/502/category/28/display/1/', '20190405132637', 'Y'),
(8, 'bottom', '\안나파리\스', 'uploads/20190405132701.jpg', 'span cotton pants', '33,000', 'https://annaparis.kr/product/span-cotton-pants/463/category/28/display/1/', '20190405132701', 'Y'),
(9, 'bottom', '\안나파리\스', 'uploads/20190405132736.jpg', 'robin banding slacks', '34,000', 'https://annaparis.kr/product/robin-banding-slacks/435/category/28/display/1/', '20190405132736', 'Y'),
(10, 'bottom', '\안나파리\스', 'uploads/20190405132806.jpg', 'coco basic slacks', '28,000', 'https://annaparis.kr/product/coco-basic-slacks/309/category/28/display/1/', '20190405132806', 'Y'),
(11, 'outer', '\안나파리\스', 'uploads/20190405132948.jpg', 'slit single jacket', '63,000', 'https://annaparis.kr/product/slit-single-jacket/540/category/24/display/1/', '20190405132948', 'Y'),
(12, 'outer', '\안나파리\스', 'uploads/20190405133012.jpg', 'edition jacket', '96,000', 'https://annaparis.kr/product/edition-jacket/532/category/24/display/1/', '20190405133012', 'Y'),
(13, 'outer', '\안나파리\스', 'uploads/20190405133038.jpg', 'custom check jacket', '60,000', 'https://annaparis.kr/product/custom-check-jacket/499/category/24/display/1/', '20190405133038', 'Y'),
(14, 'outer', '\안나파리\스', 'uploads/20190405133057.jpg', 'daily denim jacket', '62,000', 'https://annaparis.kr/product/custom-check-jacket/499/category/24/display/1/', '20190405133057', 'Y'),
(15, 'outer', '\안나파리\스', 'uploads/20190405133119.jpg', 'check belt jacket', '57,000', 'https://annaparis.kr/product/check-belt-jacket/484/category/24/display/1/', '20190405133119', 'Y'),
(16, 'shoes', '\안나파리\스', 'uploads/20190405133208.jpg', 'bibi enamel slingback', '40,000', 'https://annaparis.kr/product/bibi-enamel-slingback/567/category/45/display/1/', '20190405133208', 'Y'),
(18, 'shoes', '\안나파리\스', 'uploads/20190405133432.jpg', 'grace slingback', '40,000', 'https://annaparis.kr/product/grace-slingback/537/category/45/display/1/', '20190405133432', 'Y'),
(17, 'shoes', '\안나파리\스', 'uploads/20190405133251.jpg', 'germany bloafer', '46,000', 'https://annaparis.kr/product/germany-bloafer/552/category/45/display/1/', '20190405133251', 'Y'),
(19, 'shoes', '\안나파리\스', 'uploads/20190405133454.jpg', 'circle middle heel', '40,000', 'https://annaparis.kr/product/circle-middle-heel/536/category/45/display/1/', '20190405133454', 'Y'),
(20, 'shoes', '\안나파리\스', 'uploads/20190405133520.jpg', 'side cutting heel', '34,000', 'https://annaparis.kr/product/side-cutting-heel/469/category/45/display/1/', '20190405133520', 'Y'),
(21, 'top', '코모\디티', 'uploads/20190405135926.jpg', '\셔�\��끈 블라\우\스', '15,500', 'http://commodity.co.kr/product/detail.html?product_no=624&cate_no=25&display_group=1', '20190405135926', 'Y'),
(22, 'top', '코모\디티', 'uploads/20190405135957.jpg', '\풍선�\�� 커플맨\투�\�', '23,500', 'http://commodity.co.kr/product/detail.html?product_no=623&cate_no=25&display_group=1', '20190405135957', 'Y'),
(23, 'top', '코모\디티', 'uploads/20190405140030.jpg', '\심\플카\라 \숏�\��디건', '21,000', 'http://commodity.co.kr/product/detail.html?product_no=621&cate_no=25&display_group=1', '20190405140030', 'Y'),
(24, 'top', '코모\디티', 'uploads/20190405140048.jpg', '브이\넥 \셔�\���\��라\우\스', '18,500', 'http://commodity.co.kr/product/detail.html?product_no=595&cate_no=25&display_group=1', '20190405140048', 'Y'),
(25, 'top', '코모\디티', 'uploads/20190405140118.jpg', '꽃프릴 \소녀�\��라\우\스', '28,000', 'http://commodity.co.kr/product/detail.html?product_no=587&cate_no=25&display_group=1', '20190405140118', 'Y'),
(26, 'bottom', '코모\디티', 'uploads/20190405140359.jpg', '베이직 롱스커트', '22,320', 'http://commodity.co.kr/product/detail.html?product_no=641&cate_no=70&display_group=1', '20190405140359', 'Y'),
(27, 'bottom', '코모\디티', 'uploads/20190405140415.jpg', '\소프트 \플라\워 롱스커트', '23,500', 'http://commodity.co.kr/product/detail.html?product_no=640&cate_no=70&display_group=1', '20190405140415', 'Y'),
(28, 'bottom', '코모\디티', 'uploads/20190405140438.jpg', '\플라\워 \레이\스\스커트', '26,500', 'http://commodity.co.kr/product/detail.html?product_no=630&cate_no=70&display_group=1', '20190405140438', 'Y'),
(29, 'bottom', '코모\디티', 'uploads/20190405140500.jpg', '\파스\텔 \플레어 치�\���\���\��', '20,000', 'http://commodity.co.kr/product/detail.html?product_no=592&cate_no=70&display_group=1', '20190405140500', 'Y'),
(30, 'bottom', '코모\디티', 'uploads/20190405140524.jpg', '\플레어 미니스커트', '23,500', 'http://commodity.co.kr/product/detail.html?product_no=578&cate_no=70&display_group=1', '20190405140524', 'Y'),
(31, 'outer', '코모\디티', 'uploads/20190405140856.jpg', '\오버 \스\트\라\이\프자�\��', '39,900', 'http://commodity.co.kr/product/detail.html?product_no=632&cate_no=24&display_group=1', '20190405140856', 'Y'),
(32, 'outer', '코모\디티', 'uploads/20190405140913.jpg', '비�\�� \숏자�\��', '49,900', 'http://commodity.co.kr/product/detail.html?product_no=629&cate_no=24&display_group=1', '20190405140913', 'Y'),
(33, 'outer', '코모\디티', 'uploads/20190405140932.jpg', '\오버 \후드항공점퍼', '36,000', 'http://commodity.co.kr/product/detail.html?product_no=620&cate_no=24&display_group=1', '20190405140932', 'Y'),
(34, 'outer', '코모\디티', 'uploads/20190405140951.jpg', '\포멀 \데\일리자�\��', '42,900', 'http://commodity.co.kr/product/detail.html?product_no=617&cate_no=24&display_group=1', '20190405140951', 'Y'),
(35, 'outer', '코모\디티', 'uploads/20190405141007.jpg', '\오버싱글 \트\렌�\���\��트', '45,900', 'http://commodity.co.kr/product/detail.html?product_no=616&cate_no=24&display_group=1', '20190405141007', 'Y'),
(36, 'onepiece', '코모\디티', 'uploads/20190405141436.jpg', '브이 \랩\원피\스', '24,900', 'http://commodity.co.kr/product/detail.html?product_no=639&cate_no=26&display_group=1', '20190405141436', 'Y'),
(37, 'onepiece', '코모\디티', 'uploads/20190405141457.jpg', '로�\��플라\워 \랩\원피\스', '28,000', 'http://commodity.co.kr/product/detail.html?product_no=635&cate_no=26&display_group=1', '20190405141457', 'Y'),
(38, 'onepiece', '코모\디티', 'uploads/20190405141519.jpg', '\양프릴 \플라\워원피\스', '26,500', 'http://commodity.co.kr/product/detail.html?product_no=588&cate_no=26&display_group=1', '20190405141519', 'Y'),
(39, 'onepiece', '코모\디티', 'uploads/20190405141542.jpg', '주�\�� \플라\워 \원피\스', '41,500', 'http://commodity.co.kr/product/detail.html?product_no=584&cate_no=26&display_group=1', '20190405141542', 'Y'),
(40, 'onepiece', '코모\디티', 'uploads/20190405141558.jpg', '\쉐이\크 \프릴\원피\스', '24,900', 'http://commodity.co.kr/product/detail.html?product_no=573&cate_no=26&display_group=1', '20190405141558', 'Y'),
(41, 'onepiece', '코모\디티', 'uploads/20190405141620.jpg', '\심\플 뷔스\티\에 \원피\스', '29,900', 'http://commodity.co.kr/product/detail.html?product_no=568&cate_no=26&display_group=1', '20190405141620', 'Y'),
(42, 'onepiece', '코모\디티', 'uploads/20190405141635.jpg', '\플레어치�\�� \세\트', '29,900', 'http://commodity.co.kr/product/detail.html?product_no=566&cate_no=26&display_group=1', '20190405141635', 'Y'),
(43, 'onepiece', '코모\디티', 'uploads/20190405141653.jpg', '\레몬\티 \원피\스', '41,900', 'http://commodity.co.kr/product/detail.html?product_no=563&cate_no=26&display_group=1', '20190405141653', 'Y'),
(44, 'onepiece', '코모\디티', 'uploads/20190405141713.jpg', '\플라\워 \랩주�\�� \원피\스', '24,900', 'http://commodity.co.kr/product/detail.html?product_no=554&cate_no=26&display_group=1', '20190405141713', 'Y'),
(45, 'onepiece', '코모\디티', 'uploads/20190405141730.jpg', '\셋업나리\투\피\스', '39,900', 'http://commodity.co.kr/product/detail.html?product_no=553&cate_no=26&display_group=1', '20190405141730', 'Y'),
(46, 'shoes', '코모\디티', 'uploads/20190405142203.jpg', '\라\틴감성 \플랫\슈�\��', '29,920', 'http://commodity.co.kr/product/detail.html?product_no=642&cate_no=92&display_group=1', '20190405142203', 'Y'),
(47, 'shoes', '코모\디티', 'uploads/20190405142220.jpg', '\스\퀘어링 미들로퍼', '29,900', 'http://commodity.co.kr/product/detail.html?product_no=638&cate_no=92&display_group=1', '20190405142220', 'Y'),
(48, 'shoes', '코모\디티', 'uploads/20190405142247.jpg', '베이직 리본 \플랫\슈�\��', '24,900', 'http://commodity.co.kr/product/detail.html?product_no=637&cate_no=92&display_group=1', '20190405142247', 'Y'),
(49, 'shoes', '코모\디티', 'uploads/20190405142309.jpg', '메리\제인 \플랫\슈�\��', '29,900', 'http://commodity.co.kr/product/detail.html?product_no=634&cate_no=92&display_group=1', '20190405142309', 'Y'),
(50, 'shoes', '코모\디티', 'uploads/20190405142343.jpg', '\에나�\�� 메리\제인 \펌프스\힐(4.7cm)', '29,900', 'http://commodity.co.kr/product/detail.html?product_no=429&cate_no=92&display_group=1', '20190405142343', 'Y');

--
-- 덤프된 테이블의 인덱스
--

--
-- 테이블의 인덱스 `momoa`
--
ALTER TABLE `momoa`
  ADD PRIMARY KEY (`num`);

--
-- 덤프된 테이블의 AUTO_INCREMENT
--

--
-- 테이블의 AUTO_INCREMENT `momoa`
--
ALTER TABLE `momoa`
  MODIFY `num` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
