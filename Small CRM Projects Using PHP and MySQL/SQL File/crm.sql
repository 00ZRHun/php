-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- 主机： localhost
-- 生成日期： 2019-12-19 04:23:00
-- 服务器版本： 10.1.38-MariaDB
-- PHP 版本： 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 数据库： `crm`
--

-- --------------------------------------------------------

--
-- 表的结构 `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL DEFAULT '',
  `password` varchar(255) NOT NULL DEFAULT ''
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- 转存表中的数据 `admin`
--

INSERT INTO `admin` (`id`, `name`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- 表的结构 `prequest`
--

CREATE TABLE `prequest` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `contactno` varchar(11) DEFAULT NULL,
  `company` varchar(255) DEFAULT NULL,
  `wdd` varchar(255) DEFAULT NULL,
  `cms` varchar(255) DEFAULT NULL,
  `seo` varchar(255) DEFAULT NULL,
  `smo` varchar(255) DEFAULT NULL,
  `swd` varchar(255) DEFAULT NULL,
  `dwd` varchar(255) DEFAULT NULL,
  `fwd` varchar(255) DEFAULT NULL,
  `dr` varchar(255) DEFAULT NULL,
  `whs` varchar(255) DEFAULT NULL,
  `wm` varchar(255) DEFAULT NULL,
  `ed` varchar(255) DEFAULT NULL,
  `wta` varchar(255) DEFAULT NULL,
  `opi` varchar(255) DEFAULT NULL,
  `ld` varchar(255) DEFAULT NULL,
  `da` varchar(255) DEFAULT NULL,
  `osc` varchar(255) DEFAULT NULL,
  `nd` varchar(255) DEFAULT NULL,
  `others` varchar(255) DEFAULT NULL,
  `query` longtext,
  `posting_date` date DEFAULT NULL,
  `remark` longtext,
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 转存表中的数据 `prequest`
--

INSERT INTO `prequest` (`id`, `name`, `email`, `contactno`, `company`, `wdd`, `cms`, `seo`, `smo`, `swd`, `dwd`, `fwd`, `dr`, `whs`, `wm`, `ed`, `wta`, `opi`, `ld`, `da`, `osc`, `nd`, `others`, `query`, `posting_date`, `remark`, `status`) VALUES
(5, 'vsfsfs', 'anuj.lpu1@gmail.com', '12345678', 'SQ', 'Website Design & Development', 'CMS (Content Management System)', 'SEO (Search Engine Optimization)', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Testing', '2015-04-28', 'Sample text for testing', 1),
(6, 'Anuj kumar', 'anuj@jiyuiyui.com', '8285703354', 'Fluper', 'Website Design & Development', '', '', 'SMO (Social Media Optimization)	', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Sample text for testing. Sample text for testing. Sample text for testing. Sample text for testing', '2015-04-28', 'Sample text for testing', 2),
(7, 'Mridul ', 'iyuiyuiyui@gmail.com', '12345678', 'Fluper', 'Website Design & Development', '', 'SEO (Search Engine Optimization)', '', 'Static Website Design', '', 'Flash Website Development', '', '', '', '', '', '', '', '', '', '', '', 'testingvvvtestin testingvtestinggtestingtesting  testingtesting testingv v', '2015-04-28', 'csfsfsf', 2),
(8, 'Mridul ', 'mridul@gmail.com', '12345678', 'Fluper', 'Website Design & Development', '', 'SEO (Search Engine Optimization)', '', 'Static Website Design', '', 'Flash Website Development', '', '', '', '', '', '', '', '', '', '', '', 'testingvvvtestin testingvtestinggtestingtesting  testingtesting testingv v', '2015-04-28', 'dwwrwer', 2),
(9, 'kjkhjkjhkjh', 'jhkhjk@dfdf.com', '67679679', 'tyuytu', 'Website Design & Development', 'CMS (Content Management System)', 'SEO (Search Engine Optimization)', 'SMO (Social Media Optimization)	', '', 'Dynamic Website Design', '', '', '', '', '', '', '', '', '', '', '', '', 'uytuytu', '2019-07-11', 'cssdf', 0),
(10, 'Test', 'test@gmail.com', '1234567890', 'cfsdfsdf', 'Website Design & Development', '', '', '', '', '', '', 'Domain Registration', 'Web Hosting Services', 'Website Maintenance', 'Ecommerce Development', '', '', '', '', '', '', '', 'This is sample text for testing.', '2019-08-06', 'fdgdf', NULL),
(11, 'Anuj', 'dsfdfsd@gmil.com', '1234567890', 'fdsfsd', 'Website Design & Development', '', 'SEO (Search Engine Optimization)', '', 'Static Website Design', '', 'Flash Website Development', '', '', '', '', '', 'Online Payment Integration', '', '', '', '', '', 'I want these services', '2019-08-10', 'This is sample text for testing.', NULL);

-- --------------------------------------------------------

--
-- 表的结构 `ticket`
--

CREATE TABLE `ticket` (
  `id` int(11) NOT NULL,
  `ticket_id` varchar(11) NOT NULL,
  `email_id` varchar(300) NOT NULL,
  `subject` varchar(300) NOT NULL,
  `task_type` varchar(300) NOT NULL,
  `prioprity` varchar(300) NOT NULL,
  `ticket` longtext NOT NULL,
  `attachment` varchar(300) NOT NULL,
  `status` varchar(300) NOT NULL,
  `admin_remark` longtext NOT NULL,
  `posting_date` date NOT NULL,
  `admin_remark_date` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 转存表中的数据 `ticket`
--

INSERT INTO `ticket` (`id`, `ticket_id`, `email_id`, `subject`, `task_type`, `prioprity`, `ticket`, `attachment`, `status`, `admin_remark`, `posting_date`, `admin_remark_date`) VALUES
(7, 'TID3071', 'anuj.lpu1@gmail.com', 'testing', 'billing', 'important', 'hiiiiiiiiiiiiii', '', 'close', 'This is done.', '2015-02-18', '0000-00-00 00:00:00'),
(8, 'TID3072', 'anuj.lpu1@gmail.com', 'testing', 'billing', 'important', 'hiiiiiiiiiiiiii', '', 'close', 'aasdfgdfgvhfgvb jgjfhfh', '2015-02-18', '0000-00-00 00:00:00'),
(9, '2', 'anuj@gmail.com', 'Test', 'ot1', 'important', 'sample text for testing. sample text for testing.sample text for testing.sample text for testing.sample text for testing.sample text for testing.sample text for testing.sample text for testing.sample text for testing.sample text for testing.sample text for testing.sample text for testing.sample text for testing.sample text for testing.sample text for testing.', '', 'Open', 'vsdfga', '2019-07-11', '0000-00-00 00:00:00'),
(11, '4', 'abc@gmail.com', 'Test Ticket', 'ot1', 'important', 'This is sample text for testing.', '', 'Open', 'Your query is solved now.', '2019-08-10', '0000-00-00 00:00:00'),
(12, '5', 'abc', 'testing', 'billing', 'important', 'testing description', '', 'Open', '', '2019-12-17', NULL),
(13, '5', 'abc', 'testing', 'billing', 'important', 'testing description', '', 'Open', '', '2019-12-17', NULL);

-- --------------------------------------------------------

--
-- 表的结构 `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `alt_email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `mobile` varchar(255) DEFAULT NULL,
  `gender` varchar(255) DEFAULT NULL,
  `user_image` varchar(255) DEFAULT NULL,
  `address` varchar(500) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `posting_date` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- 转存表中的数据 `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `alt_email`, `password`, `mobile`, `gender`, `user_image`, `address`, `status`, `posting_date`) VALUES
(3, 'Anuj kumar', 'anuj.lpu1@gmail.com', 'anujkumar301990@gmail.com', '123456', '8285703354', 'Female', NULL, 'Sec-5 Sahibabad Ghaziabad ', 0, '2015-01-01 18:30:00'),
(7, 'Rahul', 'rahul@gmail.com', '', '123456', '8285703355', 'm', '', '', 0, '2015-02-03 18:30:00'),
(9, 'Anuj', 'demo@gmail.com', 'test@gmail.com', 'Test@12345', '1234567890', 'm', '', 'New Delhi India', 0, '2019-07-10 18:30:00'),
(11, 'Test user', 'testuser@gmail.com', 'ak@gmail.com', 'Test@123', '1234567890', 'Male', NULL, 'New Delhi', NULL, '2019-08-06 18:09:15'),
(12, 'ABc', 'abc@gmail.com', 'jsadgj@gmail.com', 'Test@123', '1234567890', 'm', NULL, 'New Delhi India', NULL, '2019-08-10 11:24:31'),
(13, 'abc', 'c', NULL, 'abc', 'abc', 'm', NULL, NULL, NULL, '2019-12-16 11:05:45'),
(14, 'ZRHun', 'hunzurong@gmail.com', NULL, '12345678', '01155010289', 'm', NULL, NULL, NULL, '2019-12-16 11:56:17'),
(15, 'abc', 'abc', NULL, '123123', 'abc', 'm', NULL, NULL, NULL, '2019-12-16 12:04:35'),
(16, 'Zu Rong', 'testing@gmail.com', NULL, '1231223123', '01155010289', 'm', NULL, NULL, NULL, '2019-12-17 17:52:50'),
(17, 'Zu Rong', 'testingabx@gmail.com', NULL, '123', '01155010289', 'm', NULL, NULL, NULL, '2019-12-17 17:53:13');

-- --------------------------------------------------------

--
-- 表的结构 `usercheck`
--

CREATE TABLE `usercheck` (
  `id` int(11) NOT NULL,
  `logindate` varchar(255) DEFAULT '',
  `logintime` varchar(255) DEFAULT '',
  `user_id` int(11) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT '',
  `ip` varbinary(16) DEFAULT NULL,
  `mac` varbinary(16) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- 转存表中的数据 `usercheck`
--

INSERT INTO `usercheck` (`id`, `logindate`, `logintime`, `user_id`, `username`, `email`, `ip`, `mac`, `city`, `country`) VALUES
(91, '2015/04/28', '04:37:40pm', 3, 'Anuj kumar', 'anuj.lpu1@gmail.com', 0x3a3a31, 0x31452d38352d35362d43352d39312d45, '', ''),
(92, '2015/04/29', '02:57:12pm', 3, 'Anuj kumar', 'anuj.lpu1@gmail.com', 0x3132322e3136322e302e323431, '', 'Delhi', 'India'),
(93, '2015/04/30', '04:27:02pm', 3, 'Anuj kumar', 'anuj.lpu1@gmail.com', 0x3132322e3136322e3134322e3138, '', 'Delhi', 'India'),
(94, '2015/04/30', '05:23:55pm', 3, 'Anuj kumar', 'anuj.lpu1@gmail.com', 0x3132322e3136322e3134322e3138, '', 'Delhi', 'India'),
(95, '2015/05/18', '01:18:51pm', 3, 'Anuj kumar', 'anuj.lpu1@gmail.com', 0x3132322e3136322e382e313830, '', 'Delhi', 'India'),
(96, '2015/11/05', '09:30:36pm', 3, 'Anuj kumar', 'anuj.lpu1@gmail.com', 0x3a3a31, 0x33342d34422d35302d42372d45462d33, '', ''),
(97, '2015/11/13', '12:05:39am', 3, 'Anuj kumar', 'anuj.lpu1@gmail.com', 0x3a3a31, 0x42432d38352d35362d43352d39312d45, '', ''),
(98, '2015/12/14', '09:36:01pm', 3, 'Anuj kumar', 'anuj.lpu1@gmail.com', 0x3a3a31, 0x42432d38352d35362d43352d39312d45, '', ''),
(99, '2016/02/11', '09:47:08pm', 3, 'Anuj kumar', 'anuj.lpu1@gmail.com', 0x3a3a31, 0x42432d38352d35362d43352d39312d45, '', ''),
(100, '2016/04/07', '12:17:50am', 7, 'Rahul', 'rahul@gmail.com', 0x3a3a31, 0x42432d38352d35362d43352d39312d45, '', ''),
(101, '2016/04/20', '09:37:54am', 3, 'Anuj kumar', 'anuj.lpu1@gmail.com', 0x3a3a31, 0x42432d38352d35362d43352d39312d45, '', ''),
(102, '2016/04/25', '09:55:45pm', 3, 'Anuj kumar', 'anuj.lpu1@gmail.com', 0x3a3a31, 0x42432d38352d35362d43352d39312d45, '', ''),
(103, '2016/04/26', '08:19:12pm', 3, 'Anuj kumar', 'anuj.lpu1@gmail.com', 0x3a3a31, 0x42432d38352d35362d43352d39312d45, '', ''),
(104, '2016/04/26', '08:26:18pm', 3, 'Anuj kumar', 'anuj.lpu1@gmail.com', 0x3a3a31, 0x42432d38352d35362d43352d39312d45, '', ''),
(105, '2016/04/30', '11:59:25pm', 3, 'Anuj kumar', 'anuj.lpu1@gmail.com', 0x3a3a31, 0x42432d38352d35362d43352d39312d45, '', ''),
(106, '2016/04/30', '12:30:10am', 3, 'Anuj kumar', 'anuj.lpu1@gmail.com', 0x3a3a31, 0x42432d38352d35362d43352d39312d45, '', ''),
(107, '2019/07/11', '12:27:21pm', 9, 'Anuj', 'anuj@gmail.com', 0x3a3a31, 0x33432d35322d38322d35312d41352d42, '', ''),
(108, '2019/07/15', '12:12:00pm', 9, 'Anuj', 'anuj@gmail.com', 0x3a3a31, 0x33432d35322d38322d35312d41352d42, '', ''),
(109, '2019/08/06', '11:39:30pm', 11, 'Test user', 'testuser@gmail.com', 0x3a3a31, 0x31322d46342d38442d31322d39392d39, '', ''),
(110, '2019/08/10', '04:51:41pm', 11, 'Test user', 'testuser@gmail.com', 0x3a3a31, 0x31322d46342d38442d31322d39392d39, '', ''),
(111, '2019/08/10', '04:54:44pm', 12, 'ABc', 'abc@gmail.com', 0x3a3a31, 0x31322d46342d38442d31322d39392d39, '', ''),
(112, '2019/12/16', '05:34:41pm', 15, 'abc', 'abc', 0x3132372e302e302e31, '', '', ''),
(113, '2019/12/16', '12:11:58am', 15, 'abc', 'abc', 0x3132372e302e302e31, '', '', ''),
(114, '2019/12/17', '03:15:09pm', 15, 'abc', 'abc', 0x3132372e302e302e31, '', '', ''),
(115, '2019/12/17', '03:29:11pm', 15, 'abc', 'abc', 0x3132372e302e302e31, '', '', ''),
(116, '2019/12/17', '05:20:40pm', 15, 'abc', 'abc', 0x3132372e302e302e31, '', '', ''),
(117, '2019/12/17', '10:02:43pm', 15, 'abc', 'abc', 0x3132372e302e302e31, '', '', '');

--
-- 转储表的索引
--

--
-- 表的索引 `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- 表的索引 `prequest`
--
ALTER TABLE `prequest`
  ADD PRIMARY KEY (`id`);

--
-- 表的索引 `ticket`
--
ALTER TABLE `ticket`
  ADD PRIMARY KEY (`id`);

--
-- 表的索引 `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- 表的索引 `usercheck`
--
ALTER TABLE `usercheck`
  ADD PRIMARY KEY (`id`);

--
-- 在导出的表使用AUTO_INCREMENT
--

--
-- 使用表AUTO_INCREMENT `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- 使用表AUTO_INCREMENT `prequest`
--
ALTER TABLE `prequest`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- 使用表AUTO_INCREMENT `ticket`
--
ALTER TABLE `ticket`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- 使用表AUTO_INCREMENT `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- 使用表AUTO_INCREMENT `usercheck`
--
ALTER TABLE `usercheck`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=118;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
