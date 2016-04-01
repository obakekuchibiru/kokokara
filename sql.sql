-- phpMyAdmin SQL Dump
-- version 4.2.10
-- http://www.phpmyadmin.net
--
-- Host: localhost:8889
-- Generation Time: Apr 01, 2016 at 07:01 PM
-- Server version: 5.5.38-log
-- PHP Version: 5.6.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `kokokara`
--

-- --------------------------------------------------------

--
-- Table structure for table `applies_events`
--

CREATE TABLE `applies_events` (
`id` int(11) NOT NULL,
  `student_id` int(11) DEFAULT NULL,
  `event_id` int(11) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `applies_events`
--

INSERT INTO `applies_events` (`id`, `student_id`, `event_id`, `created`, `modified`) VALUES
(1, 1, 1, '2015-03-14 01:10:45', '2015-03-14 01:10:45');

-- --------------------------------------------------------

--
-- Table structure for table `attachments`
--

CREATE TABLE `attachments` (
`id` int(11) NOT NULL,
  `model` varchar(20) NOT NULL,
  `foreign_key` int(11) NOT NULL,
  `attachment` varchar(255) NOT NULL,
  `dir` varchar(255) NOT NULL,
  `type` varchar(255) DEFAULT NULL,
  `size` int(11) DEFAULT '0',
  `active` tinyint(1) DEFAULT '1'
) ENGINE=InnoDB AUTO_INCREMENT=108 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `attachments`
--

INSERT INTO `attachments` (`id`, `model`, `foreign_key`, `attachment`, `dir`, `type`, `size`, `active`) VALUES
(1, 'Event', 1, 'Screen Shot 2015-03-13 at 21.46.01.png', '1', 'image/png', 173244, 1),
(2, 'Event', 1, '3tiee8.jpg', '2', 'image/jpeg', 18367, 1),
(3, 'Event', 2, 'Screen Shot 2015-03-01 at 15.19.09.png', '3', 'image/png', 788783, 1),
(4, 'Event', 2, 'miratop.jpg', '4', 'image/jpeg', 15380, 1),
(5, 'Event', 2, '3tiee8.jpg', '5', 'image/jpeg', 18367, 1),
(6, 'Event', 2, 'triangle-clip-art-10883-empty-yellow-triangle-design.png', '6', 'image/png', 25341, 1),
(7, 'Event', 3, 'stairs-336710_1920.jpg', '7', 'image/jpeg', 616495, 1),
(8, 'Event', 3, 'pilgrimage-336615_1920.jpg', '8', 'image/jpeg', 682377, 1),
(9, 'Event', 10, 'hdr-186926.jpg', '9', 'image/jpeg', 1181548, 1),
(10, 'Event', 10, 'statue-77103.jpg', '10', 'image/jpeg', 1899819, 1),
(11, 'Event', 10, 'clasped-hands-541849.jpg', '11', 'image/jpeg', 1490861, 1),
(12, 'Event', 10, 'summerfield.jpg', '12', 'image/jpeg', 712877, 1),
(13, 'Event', 11, 'florida-143844.jpg', '13', 'image/jpeg', 330672, 1),
(14, 'Event', 11, 'fruit-428062_1920.jpg', '14', 'image/jpeg', 829111, 1),
(15, 'Event', 11, 'smartphone.jpg', '15', 'image/jpeg', 404472, 1),
(16, 'Event', 11, 'mixing-desk-351478_1920.jpg', '16', 'image/jpeg', 423541, 1),
(17, 'Event', 12, 'pilgrimage-336615_1920.jpg', '17', 'image/jpeg', 682377, 1),
(18, 'Event', 12, 'photographer-428388.jpg', '18', 'image/jpeg', 834412, 1),
(19, 'Event', 12, 'beef-192976.jpg', '19', 'image/jpeg', 476750, 1),
(20, 'Event', 12, 'hdr-186926.jpg', '20', 'image/jpeg', 1181548, 1),
(21, 'Event', 13, 'boy-366311.jpg', '21', 'image/jpeg', 7293543, 1),
(22, 'Event', 13, 'owl-517497.jpg', '22', 'image/jpeg', 3580468, 1),
(23, 'Event', 13, 'alone-407199_1280.jpg', '23', 'image/jpeg', 161299, 1),
(24, 'Event', 13, 'anonymous-438427.jpg', '24', 'image/jpeg', 4555194, 1),
(25, 'Event', 14, 'antelope-canyon-457495.jpg', '25', 'image/jpeg', 721626, 1),
(26, 'Event', 14, 'beef-192976.jpg', '26', 'image/jpeg', 476750, 1),
(27, 'Event', 14, 'beer-428121_1920.jpg', '27', 'image/jpeg', 377870, 1),
(28, 'Event', 14, 'book-436509_1920.jpg', '28', 'image/jpeg', 409929, 1),
(29, 'Event', 15, 'boy-366311.jpg', '29', 'image/jpeg', 7293543, 1),
(30, 'Event', 15, 'beer-428121_1920.jpg', '30', 'image/jpeg', 377870, 1),
(31, 'Event', 15, 'paper-428304_1920.jpg', '31', 'image/jpeg', 533140, 1),
(32, 'Event', 15, 'by-wlodek-428549_1920.jpg', '32', 'image/jpeg', 762416, 1),
(33, 'Event', 16, 'teenager-407169_1280.jpg', '33', 'image/jpeg', 160604, 1),
(34, 'Event', 16, 'woman-438434_1280.jpg', '34', 'image/jpeg', 408272, 1),
(35, 'Event', 16, 'woman-407208_1280.jpg', '35', 'image/jpeg', 147233, 1),
(36, 'Event', 16, 'steps-388914_1920.jpg', '36', 'image/jpeg', 345519, 1),
(37, 'Event', 31, 'alone-407199_1280.jpg', '37', 'image/jpeg', 161299, 1),
(38, 'Event', 32, 'beef-192976.jpg', '38', 'image/jpeg', 476750, 1),
(39, 'Event', 32, 'boy-366311.jpg', '39', 'image/jpeg', 7293543, 1),
(40, 'Event', 33, 'assimilation-373783_1280.jpg', '40', 'image/jpeg', 383777, 1),
(41, 'Event', 34, 'IMG_0053.JPG', '41', 'image/jpeg', 2903223, 1),
(42, 'Event', 34, '5S Sketch.png', '42', 'image/png', 36720, 1),
(43, 'Event', 34, 'koko2.png', '43', 'image/png', 4090, 1),
(44, 'Event', 35, 'fruit-428062_1920.jpg', '44', 'image/jpeg', 829111, 1),
(45, 'Event', 35, 'summerfield.jpg', '45', 'image/jpeg', 712877, 1),
(46, 'Event', 35, 'woman-438434_1280.jpg', '46', 'image/jpeg', 408272, 1),
(47, 'Event', 36, 'smartphone.jpg', '47', 'image/jpeg', 404472, 1),
(48, 'Event', 36, 'stairs-336710_1920.jpg', '48', 'image/jpeg', 616495, 1),
(49, 'Event', 36, 'statue-77103.jpg', '49', 'image/jpeg', 1899819, 1),
(50, 'Event', 36, 'teenager-407169_1280.jpg', '50', 'image/jpeg', 160604, 1),
(51, 'Event', 36, 'urban-438393_1920.jpg', '51', 'image/jpeg', 911883, 1),
(52, 'Event', 37, 'urban-438393_1920.jpg', '52', 'image/jpeg', 911883, 1),
(53, 'Event', 37, 'summerfield.jpg', '53', 'image/jpeg', 712877, 1),
(54, 'Event', 37, 'steps-388914_1920.jpg', '54', 'image/jpeg', 345519, 1),
(55, 'Event', 37, 'utah-440520_1280.jpg', '55', 'image/jpeg', 439653, 1),
(56, 'Event', 38, 'steps-388914_1920.jpg', '56', 'image/jpeg', 345519, 1),
(57, 'Event', 38, 'teenager-407169_1280.jpg', '57', 'image/jpeg', 160604, 1),
(58, 'Event', 38, 'still-life-379858_1920.jpg', '58', 'image/jpeg', 573443, 1),
(59, 'Event', 38, 'koko4.png', '59', 'image/png', 5184, 1),
(60, 'Event', 39, 'stu1.png', '60', 'image/png', 13191, 1),
(61, 'Event', 39, 'stu2.png', '61', 'image/png', 9604, 1),
(62, 'Event', 39, 'koko3.png', '62', 'image/png', 4901, 1),
(63, 'Event', 39, 'stu4.png', '63', 'image/png', 18858, 1),
(64, 'Event', 40, 'alone-407199_1280.jpg', '64', 'image/jpeg', 161299, 1),
(65, 'Event', 40, 'still-life-379858_1920.jpg', '65', 'image/jpeg', 573443, 1),
(66, 'Event', 40, 'summerfield.jpg', '66', 'image/jpeg', 712877, 1),
(67, 'Event', 40, 'macbook-407126_1280.jpg', '67', 'image/jpeg', 207265, 1),
(68, 'Event', 41, 'smartphone.jpg', '68', 'image/jpeg', 404472, 1),
(69, 'Event', 41, 'statue-77103.jpg', '69', 'image/jpeg', 1899819, 1),
(70, 'Event', 41, 'still-life-379858_1920.jpg', '70', 'image/jpeg', 573443, 1),
(71, 'Event', 41, 'assimilation-373783_1280.jpg', '71', 'image/jpeg', 383777, 1),
(72, 'Event', 42, 'smartphone.jpg', '72', 'image/jpeg', 404472, 1),
(73, 'Event', 42, 'still-life-379858_1920.jpg', '73', 'image/jpeg', 573443, 1),
(74, 'Event', 42, 'summerfield.jpg', '74', 'image/jpeg', 712877, 1),
(75, 'Event', 42, 'teenager-407169_1280.jpg', '75', 'image/jpeg', 160604, 1),
(76, 'Event', 43, 'anonymous-438427.jpg', '76', 'image/jpeg', 4555194, 1),
(77, 'Event', 43, 'hdr-186926.jpg', '77', 'image/jpeg', 1181548, 1),
(78, 'Event', 43, 'owl-517497.jpg', '78', 'image/jpeg', 3580468, 1),
(79, 'Event', 43, 'photographer-407068.jpg', '79', 'image/jpeg', 4298957, 1),
(80, 'Event', 44, 'owl-517497.jpg', '80', 'image/jpeg', 3580468, 1),
(81, 'Event', 45, 'photographer-428388.jpg', '81', 'image/jpeg', 834412, 1),
(82, 'Event', 45, 'beef-192976.jpg', '82', 'image/jpeg', 476750, 1),
(83, 'Event', 45, 'antelope-canyon-457495.jpg', '83', 'image/jpeg', 721626, 1),
(84, 'Event', 45, 'owl-517497.jpg', '84', 'image/jpeg', 3580468, 1),
(85, 'Event', 46, 'bread-428114_1920.jpg', '85', 'image/jpeg', 825245, 1),
(86, 'Event', 46, 'macbook-407126_1280.jpg', '86', 'image/jpeg', 207265, 1),
(87, 'Event', 46, 'pilgrimage-336615_1920.jpg', '87', 'image/jpeg', 682377, 1),
(88, 'Event', 46, 'statue-77103.jpg', '88', 'image/jpeg', 1899819, 1),
(89, 'Event', 47, 'beef-192976.jpg', '89', 'image/jpeg', 476750, 1),
(90, 'Event', 47, 'stairs-336710_1920.jpg', '90', 'image/jpeg', 616495, 1),
(91, 'Event', 47, 'clasped-hands-541849.jpg', '91', 'image/jpeg', 1490861, 1),
(92, 'Event', 47, 'paper-428304_1920.jpg', '92', 'image/jpeg', 533140, 1),
(93, 'Event', 48, 'antelope-canyon-457495.jpg', '93', 'image/jpeg', 721626, 1),
(94, 'Event', 48, 'mixing-desk-351478_1920.jpg', '94', 'image/jpeg', 423541, 1),
(95, 'Event', 48, 'photo-256888_1920.jpg', '95', 'image/jpeg', 506516, 1),
(96, 'Event', 48, 'coffee-424758_1920.jpg', '96', 'image/jpeg', 515993, 1),
(97, 'Event', 49, 'photographer-407068.jpg', '97', 'image/jpeg', 4298957, 1),
(98, 'Event', 49, 'summerfield.jpg', '98', 'image/jpeg', 712877, 1),
(99, 'Event', 49, 'smartphone.jpg', '99', 'image/jpeg', 404472, 1),
(100, 'Event', 49, 'plate-526603_1920.jpg', '100', 'image/jpeg', 375842, 1),
(101, 'Event', 50, 'owl-517497.jpg', '101', 'image/jpeg', 3580468, 1),
(102, 'Event', 50, 'clasped-hands-541849.jpg', '102', 'image/jpeg', 1490861, 1),
(103, 'Event', 50, 'office-620817_1920.jpg', '103', 'image/jpeg', 556107, 1),
(104, 'Event', 50, 'stairs-336710_1920.jpg', '104', 'image/jpeg', 616495, 1),
(105, 'Event', 51, 'incone2.jpg', '105', 'image/jpeg', 244555, 1),
(106, 'Event', 51, 'beat.jpg', '106', 'image/jpeg', 177772, 1),
(107, 'Event', 51, 'kuredo_2.jpg', '107', 'image/jpeg', 75704, 1);

-- --------------------------------------------------------

--
-- Table structure for table `camp`
--

CREATE TABLE `camp` (
`id` int(11) NOT NULL,
  `event_id` int(11) DEFAULT NULL,
  `fromwhere` varchar(50) DEFAULT NULL,
  `limit_num` int(11) DEFAULT NULL,
  `food` varchar(255) DEFAULT NULL,
  `withmen` varchar(50) DEFAULT NULL,
  `tuition` int(11) DEFAULT NULL,
  `stay_type` varchar(50) DEFAULT NULL,
  `schedule` text,
  `cost` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `camp`
--

INSERT INTO `camp` (`id`, `event_id`, `fromwhere`, `limit_num`, `food`, `withmen`, `tuition`, `stay_type`, `schedule`, `cost`) VALUES
(1, 34, '?????? 8:00am', 30, '????', 'kokokara Staffs', NULL, '???????', NULL, 5000),
(2, 47, '??????', 20, '', '', NULL, '?', NULL, 5000),
(3, 47, '??????', 20, '????', 'kokokara????', 2000, '?', NULL, 5000);

-- --------------------------------------------------------

--
-- Table structure for table `etags`
--

CREATE TABLE `etags` (
`id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `etags_events`
--

CREATE TABLE `etags_events` (
`id` int(11) NOT NULL,
  `etag_id` int(11) DEFAULT NULL,
  `event_id` int(11) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
`id` int(11) NOT NULL,
  `state` int(11) DEFAULT NULL,
  `title` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `company_name` varchar(25) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `company_info` text CHARACTER SET utf8 COLLATE utf8_bin,
  `body` text CHARACTER SET utf8 COLLATE utf8_bin,
  `detail` text CHARACTER SET utf8 COLLATE utf8_bin,
  `period` varchar(50) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `e-mail` varchar(255) NOT NULL,
  `phone` text NOT NULL,
  `related-url` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `sns-facebook` text NOT NULL,
  `sns-twitter` text NOT NULL,
  `thumbnail` varchar(255) DEFAULT NULL,
  `location` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `pref` varchar(255) NOT NULL,
  `date` datetime DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=52 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `state`, `title`, `company_name`, `company_info`, `body`, `detail`, `period`, `e-mail`, `phone`, `related-url`, `sns-facebook`, `sns-twitter`, `thumbnail`, `location`, `pref`, `date`, `created`, `modified`) VALUES
(10, 1, '日本語タイトル！日本語タイトル！日本語タトル！', '株式会社kokokara Group', '日本で注目を集めるベンチャー企業15社が関西に集結！\r\n更には15社からサマーインターンシップパスがもらえるチャンスあり！\r\n\r\n選考パス獲得の権利をかけて、グループワークを行います！', '1889年、画家ゴッホはフランスの精神病院でとある絵を描きました。「星月夜」と題されたその絵は力強くて荒々しく、強烈な色彩による迫真の表現でした。禍々しい空の中に力強く光る星は、本来闇を意味する夜が活力を発しているようです。', 'オランダのアーティスト集団Studio Roosegaardeはファッションと建築、そして芸術を用いたソーシャルデザインの世界の最先端を走っています。例えば、人がダンスする振動で発電するダンスフロアや、光化学スモッグを寄せ付けない公園、テクノファッションのIntimacy…などなど歴史と未来を組み合わせた独特な世界観で社会をデザインしています。\r\n\r\n彼らが近頃行っているプロジェクトは「Van Goth Path(ゴッホの道)」というものです、現代技術を用いてより安全で効率的な道作りを目指しています。\r\n\r\n光る無数の石で作る道路。この真新しいインフラ技術はHeijiman Infrastructureというヨーロッパの建設サービスが発明しました。日照時間に充電される無数の石は闇夜に力強い光を発します。\r\n\r\nこの光の道はゴッホが生まれたオランダのニューヘンＮＬ市を横断し、ゴッホが描こうとした夜の光を演出します。まさに、過去の意志と未来の技術の融合と言えます。\r\n\r\n新技術を用いたソーシャルデザインの世界に注目が集まります', '30-25日間', 'kokokara-test@gmail.com', '000-0000-0000', 'http://fortawesome.github.io/Font-Awesome/cheatsheet/', 'https://www.facebook.com/kokokaragroup', 'https://twitter.com/miraikara_news', NULL, '京都府○○市○○-○○', '', '2017-07-07 09:00:00', '2015-03-26 14:04:42', '2015-03-26 14:04:42'),
(11, 2, '短期インターン！短期インターン！短期インターン！短期インターン！', '株式会社kokokara Group', NULL, '短期インターンだよ！短期インターンだよ！短期インターンだよ！短期インターンだよ！短期インターンだよ！短期インターンだよ！短期インターンだよ！短期インターンだよ！短期インターンだよ！短期インターンだよ！短期インターンだよ！', '短期インターン詳細だよ。短期インターン詳細だよ。短期インターン詳細だよ。短期インターン詳細だよ。短期インターン詳細だよ。短期インターン詳細だよ。短期インターン詳細だよ。短期インターン詳細だよ。短期インターン詳細だよ。短期インターン詳細だよ。短期インターン詳細だよ。短期インターン詳細だよ。短期インターン詳細だよ。短期インターン詳細だよ。短期インターン詳細だよ。短期インターン詳細だよ。短期インターン詳細だよ。短期インターン詳細だよ。短期インターン詳細だよ。短期インターン詳細だよ。短期インターン詳細だよ。短期インターン詳細だよ。短期インターン詳細だよ。\r\n\r\n\r\n短期インターン詳細だよ。短期インターン詳細だよ。短期インターン詳細だよ。短期インターン詳細だよ。', '3日間', '', '0', '', '', '', NULL, '??????', '', '2015-06-06 14:09:00', '2015-03-26 14:10:55', '2015-03-26 14:10:55'),
(12, 2, '短期インターン2!短期インターン2!短期インターン2!短期インターン2!短期インターン2!短期インターン2!短期インターン2!', '', NULL, '短期インターン2概要短期インターン2概要短期インターン2概要短期インターン2概要短期インターン2概要短期インターン2概要短期インターン2概要', '短期インターン2詳細短期インターン2詳細短期インターン2詳細短期インターン2詳細短期インターン2詳細短期インターン2詳細短期インターン2詳細短期インターン2詳細短期インターン2詳細短期インターン2詳細短期インターン2詳細短期インターン2詳細短期インターン2詳細短期インターン2詳細短期インターン2詳細短期インターン2詳細短期インターン2詳細短期インターン2詳細短期インターン2詳細短期インターン2詳細短期インターン2詳細短期インターン2詳細短期インターン2詳細短期インターン2詳細短期インターン2詳細短期インターン2詳細短期インターン2詳細短期インターン2詳細短期インターン2詳細短期インターン2詳細短期インターン2詳細短期インターン2詳細短期インターン2詳細短期インターン2詳細短期インターン2詳細短期インターン2詳細短期インターン2詳細短期インターン2詳細短期インターン2詳細短期インターン2詳細短期インターン2詳細短期インターン2詳細短期インターン2詳細短期インターン2詳細短期インターン2詳細短期インターン2詳細短期インターン2詳細短期インターン2詳細短期インターン2詳細短期インターン2詳細短期インターン2詳細短期インターン2詳細短期インターン2詳細短期インターン2詳細短期インターン2詳細短期インターン2詳細短期インターン2詳細短期インターン2詳細短期インターン2詳細短期インターン2詳細短期インターン2詳細短期インターン2詳細短期インターン2詳細短期インターン2詳細', '1日間', '', '0', '', '', '', NULL, '???????', '', '2015-03-26 14:15:00', '2015-03-26 14:16:55', '2015-03-26 14:16:55'),
(13, 3, '海外インターンしてみませんか？', '株式会社kokokara Group', NULL, 'ベトナム経済の一線で活躍する有名日系企業の元で、働いてみよう！', 'ベトナムで会社つくれるようになるよ。', '4年', '', '0', '', '', '', NULL, '?????', '', '2015-08-08 14:18:00', '2015-03-26 14:20:43', '2015-03-26 14:20:43'),
(14, 5, '留学しませんか？コンゴとかに', '株式会社kokokara Group', NULL, '京都に満足してるんじゃないか？コンゴ共和国とかいいんじゃない', 'コンゴってどこ？コンゴってどこ？コンゴってどこ？コンゴってどこ？コンゴってどこ？コンゴってどこ？コンゴってどこ？コンゴってどこ？コンゴってどこ？コンゴってどこ？コンゴってどこ？コンゴってどこ？コンゴってどこ？コンゴってどこ？コンゴってどこ？コンゴってどこ？コンゴってどこ？\r\n\r\n\r\nコンゴってどこ？コンゴってどこ？コンゴってどこ？コンゴってどこ？', '60秒', '', '0', '', '', '', NULL, '???', '', '2015-10-26 14:22:00', '2015-03-26 14:24:28', '2015-03-26 14:24:28'),
(15, 7, 'なにか習い事しませんか？　　習い事しません？', '株式会社kokokara Group', NULL, '習い事しませんか？習い事しませんか？習い事しませんか？習い事しませんか？習い事しませんか？', '習い事しませんか？習い事しませんか？習い事しませんか？習い事しませんか？習い事しませんか？習い事しませんか？習い事しませんか？習い事しませんか？習い事しませんか？習い事しませんか？習い事しませんか？習い事しませんか？習い事しませんか？習い事しませんか？習い事しませんか？習い事しませんか？習い事しませんか？習い事しませんか？習い事しませんか？習い事しませんか？習い事しませんか？習い事しませんか？習い事しませんか？習い事しませんか？習い事しませんか？習い事しませんか？習い事しませんか？習い事しませんか？習い事しませんか？習い事しませんか？習い事しませんか？習い事しませんか？習い事しませんか？習い事しませんか？習い事しませんか？習い事しませんか？習い事しませんか？習い事しませんか？習い事しませんか？習い事しませんか？習い事しませんか？習い事しませんか？習い事しませんか？習い事しませんか？習い事しませんか？習い事しませんか？習い事しませんか？習い事しませんか？習い事しませんか？習い事しませんか？習い事しませんか？習い事しませんか？習い事しませんか？習い事しませんか？習い事しませんか？習い事しませんか？習い事しませんか？習い事しませんか？習い事しませんか？習い事しませんか？習い事しませんか？習い事しませんか？習い事しませんか？習い事しませんか？習い事しませんか？習い事しませんか？習い事しませんか？習い事しませんか？習い事しませんか？習い事しませんか？習い事しませんか？習い事しませんか？', '5日', '', '0', '', '', '', NULL, '??', '', '2015-12-26 16:15:00', '2015-03-26 16:16:26', '2015-03-26 16:16:26'),
(36, 4, '企業ロゴ画像テスト', '', NULL, '画像テスト', '画像テスト', '20140506-20140502', '', '0', '', '', '', NULL, NULL, '', NULL, '2015-04-03 15:33:41', '2015-04-03 15:33:41'),
(37, 1, '画像テスト2', '', NULL, '画像テスト2', '画像テスト２', '20140504-20140506', '', '0', '', '', 'https://twitter.com/miraikara_news', NULL, NULL, '', NULL, '2015-04-03 15:38:18', '2015-04-03 15:38:18'),
(38, 1, '企業名テスト', '株式会社○○', NULL, '企業名団体名、テスト', '企業名団体名、テスト', '2-4444', '', '0', '', '', '', NULL, NULL, '', NULL, '2015-04-03 15:42:48', '2015-04-03 15:42:48'),
(39, 2, 'お問い合わせ確認用試験ページ', '株式会社 お問い合わせ確認', NULL, 'お問い合わせ確認用', 'お問い合わせ格に尿\r\n\r\n\r\nお問い合わせ確認用', '00000', 'kokokara-test@gmail.com', '88889999', 'http://glyphicons.bootstrapcheatsheets.com/', '', '', NULL, NULL, '', NULL, '2015-04-03 21:49:58', '2015-04-03 21:49:58'),
(40, 5, '留学tableサンプル', 'kokokara', NULL, 'サンプル', 'サンプル三ｒぷ', '111', 'kkk', '99999', 'mmmmm', 'http://oshiete.goo.ne.jp/qa/834384.html', '', NULL, NULL, '', NULL, '2015-04-04 09:19:54', '2015-04-04 09:19:54'),
(41, 5, '留学へ行こう！tableが機能するか試すだけの巻', '株式会社kokokarrrrra', NULL, '我が輩は猫である。名前はない。我が輩は猫である。名前はない。我が輩は猫である。名前はない。我が輩は猫である。名前はない。我が輩は猫である。名前はない。', '我が輩は猫である。名前はない。我が輩は猫である。名前はない。我が輩は猫である。名前はない。我が輩は猫である。名前はない。我が輩は猫である。名前はない。我が輩は猫である。名前はない。我が輩は猫である。名前はない。我が輩は猫である。名前はない。我が輩は猫である。名前はない。我が輩は猫である。名前はない。我が輩は猫である。名前はない。\r\n\r\n\r\n\r\n我が輩は猫である。名前はない。我が輩は猫である。名前はない。我が輩は猫である。名前はない。我が輩は猫である。名前はない。我が輩は猫である。名前はない。我が輩は猫である。名前はない。\r\n\r\n我が輩は猫である。名前はない。我が輩は猫である。名前はない。我が輩は猫である。名前はない。\r\n\r\n我が輩は猫である。名前はない。我が輩は猫である。名前はない。\r\n\r\n\r\n我が輩は猫である。名前はない。我が輩は猫である。名前はない。我が輩は猫である。名前はない。我が輩は猫である。名前はない。我が輩は猫である。名前はない。\r\n\r\n\r\n我が輩は猫である。名前はない。我が輩は猫である。名前はない。', '2015/05/05-2015/06/01', 'mail@mail.com', '080888822222', 'mail@mail.com', 'http://www.dbonline.jp/phpmyadmin/export-import/index3.html', '', NULL, NULL, '', NULL, '2015-04-04 09:46:19', '2015-04-04 09:46:19'),
(42, 5, '3D ACADEMY 大型ショッピングモール内！治安安心！', '3D Academy', NULL, '当校のテーマは「未来へ繋がる留学」、単なる経験や思い出づくりとしての留学ではなく、結果を出すことを重視しています。フィリピン留学最大の魅力であるマンツーマン授業を最大限に活かす為、暗記学習を可能な限り排除した「アウトプット後に学ぶインプット」という新しいティーチングメソッドを各講師が習得しています。', '当校のテーマは「未来へ繋がる留学」、単なる経験や思い出づくりとしての留学ではなく、結果を出すことを重視しています。フィリピン留学最大の魅力であるマンツーマン授業を最大限に活かす為、暗記学習を可能な限り排除した「アウトプット後に学ぶインプット」という新しいティーチングメソッドを各講師が習得しています。当校のテーマは「未来へ繋がる留学」、単なる経験や思い出づくりとしての留学ではなく、結果を出すことを重視しています。フィリピン留学最大の魅力であるマンツーマン授業を最大限に活かす為、暗記学習を可能な限り排除した「アウトプット後に学ぶインプット」という新しいティーチングメソッドを各講師が習得しています。', '2015/05/05-2015/06/01', 'mail@mail.com', '888888', 'mail@mail.com', 'https://www.wantedly.com/projects/11230/staffings/39031', '', NULL, NULL, '', NULL, '2015-04-04 10:20:30', '2015-04-04 10:20:30'),
(43, 4, 'がくせいだんたいいべんとテスト', 'boypedia', NULL, '学生団体イベントページテスト', '学生団体イベントページテスト学生団体イベントページテスト学生団体イベントページテスト学生団体イベントページテスト学生団体イベントページテスト', '', 'ssss', '888', 'aaa', '', '', NULL, NULL, '', NULL, '2015-04-05 23:19:47', '2015-04-05 23:19:47'),
(45, 9, '学生団体紹介ページ', '学生団体kokokara Group', '2012年にBoypediaとして発足。現在はkokokara Groupとして、前向きな大学生のプラットフォーム作成を原点に、様々な仕掛けをしていきます。 ', 'Kokokara Groupは、すべてのサービスを通して、前向きなひとをふやすことを目指します。\r\n\r\nそして、1人でも多くの人が、未来の自分や社会に期待し、ワクワクし、今を頑張れるような空気作りをがんばります。 ', '前向きな人とは、自分自身に多少なり期待ができる人だと思います。\r\n\r\nそして、自分自身への期待というのは、自分の”やりたい”を選択し、やってみる過程から生じるのだと思います。\r\n\r\n自分の”やりたい”を選んで、やってみた人は、うまくいった時は自信を得て、次も頑張ろうとなるのだと思います。逆に、うまくいかなかった時は、どうしたら出来るようになるか考えます。\r\n\r\nこういった過程の中で、毎日をがんばろうって思えるようになったり、他人を責めなくなったり、悩む習慣から考える習慣に変わるのだと思います。\r\n\r\n\r\nkokokara Groupは、大学生の”やりたい”のハードルを下げ、沢山の”やりたい”を”やってみた”に変えていきます。 ', '2012年~現在', 'test@kokokara-group.com', '000-8888-9999', 'http://localhost/kokokara/', 'https://www.facebook.com/kokokaragroup', 'https://twitter.com/miraikara_news', NULL, NULL, '', NULL, '2015-04-06 00:16:08', '2015-04-06 00:16:08'),
(46, 8, '挙動確認用サンプルページ', '', NULL, '吾輩わがはいは猫である。名前はまだ無い。\r\n\r\nどこで生れたかとんと見当けんとうがつかぬ。何でも薄暗いじめじめした所でニャーニャー泣いていた事だけは記憶している。吾輩はここで始めて人間というものを見た。しかもあとで聞くとそれは書生という人間中で一番獰悪どうあくな種族であったそうだ。この書生というのは時々我々を捕つかまえて煮にて食うという話である。', 'しかしその当時は何という考もなかったから別段恐しいとも思わなかった。ただ彼の掌てのひらに載せられてスーと持ち上げられた時何だかフワフワした感じがあったばかりである。掌の上で少し落ちついて書生の顔を見たのがいわゆる人間というものの見始みはじめであろう。この時妙なものだと思った感じが今でも残っている。\r\n\r\n・第一毛をもって装飾されべきはずの顔がつるつるしてまるで薬缶やかんだ。\r\n・その後ご猫にもだいぶ逢あったがこんな片輪かたわには一度も出会でくわした事がない。\r\n・のみならず顔の真中があまりに突起している。そうしてその穴の中から時々ぷうぷうと煙けむりを吹く。どうも咽むせぽくて実に弱った。これが人間の飲む煙草たばこというものである事はようやくこの頃知った。\r\n\r\n【この書生の掌の裏うちで】\r\n　しばらくはよい心持に坐っておったが、しばらくすると非常な速力で運転し始めた。書生が動くのか自分だけが動くのか分らないが無暗むやみに眼が廻る。胸が悪くなる。到底とうてい助からないと思っていると、どさりと音がして眼から火が出た。それまでは記憶しているがあとは何の事やらいくら考え出そうとしても分らない。\r\n　ふと気が付いて見ると書生はいない。たくさんおった兄弟が一疋ぴきも見えぬ。肝心かんじんの母親さえ姿を隠してしまった。その上今いままでの所とは違って無暗むやみに明るい。眼を明いていられぬくらいだ。はてな何でも容子ようすがおかしいと、のそのそ這はい出して見ると非常に痛い。吾輩は藁わらの上から急に笹原の中へ棄てられたのである。\r\n\r\n【お問い合わせ】\r\n・\r\n・\r\n・\r\n・\r\n', '2015/05/05-2015/06/01', '', '', '', '', '', NULL, NULL, '', NULL, '2015-04-06 07:14:00', '2015-04-06 07:14:00'),
(47, 6, '挙動確認用サンプルページ', '', NULL, '吾輩わがはいは猫である。名前はまだ無い。\r\n\r\nどこで生れたかとんと見当けんとうがつかぬ。何でも薄暗いじめじめした所でニャーニャー泣いていた事だけは記憶している。吾輩はここで始めて人間というものを見た。しかもあとで聞くとそれは書生という人間中で一番獰悪どうあくな種族であったそうだ。この書生というのは時々我々を捕つかまえて煮にて食うという話である。', 'しかしその当時は何という考もなかったから別段恐しいとも思わなかった。ただ彼の掌てのひらに載せられてスーと持ち上げられた時何だかフワフワした感じがあったばかりである。掌の上で少し落ちついて書生の顔を見たのがいわゆる人間というものの見始みはじめであろう。この時妙なものだと思った感じが今でも残っている。\r\n\r\n・第一毛をもって装飾されべきはずの顔がつるつるしてまるで薬缶やかんだ。\r\n・その後ご猫にもだいぶ逢あったがこんな片輪かたわには一度も出会でくわした事がない。\r\n・のみならず顔の真中があまりに突起している。そうしてその穴の中から時々ぷうぷうと煙けむりを吹く。どうも咽むせぽくて実に弱った。これが人間の飲む煙草たばこというものである事はようやくこの頃知った。\r\n\r\n【この書生の掌の裏うちで】\r\n　しばらくはよい心持に坐っておったが、しばらくすると非常な速力で運転し始めた。書生が動くのか自分だけが動くのか分らないが無暗むやみに眼が廻る。胸が悪くなる。到底とうてい助からないと思っていると、どさりと音がして眼から火が出た。それまでは記憶しているがあとは何の事やらいくら考え出そうとしても分らない。\r\n　ふと気が付いて見ると書生はいない。たくさんおった兄弟が一疋ぴきも見えぬ。肝心かんじんの母親さえ姿を隠してしまった。その上今いままでの所とは違って無暗むやみに明るい。眼を明いていられぬくらいだ。はてな何でも容子ようすがおかしいと、のそのそ這はい出して見ると非常に痛い。吾輩は藁わらの上から急に笹原の中へ棄てられたのである。\r\n\r\n【お問い合わせ】\r\n・\r\n・\r\n・\r\n・\r\n', '2015年4月5日~2015年4月8日', '', '', '', '', '', NULL, NULL, '', NULL, '2015-04-06 07:17:04', '2015-04-06 07:17:04'),
(48, 4, '学生団体イベントサンプルページ', '', NULL, '吾輩わがはいは猫である。名前はまだ無い。\r\n\r\nどこで生れたかとんと見当けんとうがつかぬ。何でも薄暗いじめじめした所でニャーニャー泣いていた事だけは記憶している。吾輩はここで始めて人間というものを見た。しかもあとで聞くとそれは書生という人間中で一番獰悪どうあくな種族であったそうだ。この書生というのは時々我々を捕つかまえて煮にて食うという話である。', 'しかしその当時は何という考もなかったから別段恐しいとも思わなかった。ただ彼の掌てのひらに載せられてスーと持ち上げられた時何だかフワフワした感じがあったばかりである。掌の上で少し落ちついて書生の顔を見たのがいわゆる人間というものの見始みはじめであろう。この時妙なものだと思った感じが今でも残っている。\r\n\r\n・第一毛をもって装飾されべきはずの顔がつるつるしてまるで薬缶やかんだ。\r\n・その後ご猫にもだいぶ逢あったがこんな片輪かたわには一度も出会でくわした事がない。\r\n・のみならず顔の真中があまりに突起している。そうしてその穴の中から時々ぷうぷうと煙けむりを吹く。どうも咽むせぽくて実に弱った。これが人間の飲む煙草たばこというものである事はようやくこの頃知った。\r\n\r\n【この書生の掌の裏うちで】\r\n　しばらくはよい心持に坐っておったが、しばらくすると非常な速力で運転し始めた。書生が動くのか自分だけが動くのか分らないが無暗むやみに眼が廻る。胸が悪くなる。到底とうてい助からないと思っていると、どさりと音がして眼から火が出た。それまでは記憶しているがあとは何の事やらいくら考え出そうとしても分らない。\r\n　ふと気が付いて見ると書生はいない。たくさんおった兄弟が一疋ぴきも見えぬ。肝心かんじんの母親さえ姿を隠してしまった。その上今いままでの所とは違って無暗むやみに明るい。眼を明いていられぬくらいだ。はてな何でも容子ようすがおかしいと、のそのそ這はい出して見ると非常に痛い。吾輩は藁わらの上から急に笹原の中へ棄てられたのである。\r\n\r\n【お問い合わせ】\r\n・\r\n・\r\n・\r\n・\r\n\r\n※※申し込み締め切り間近！！！※※', '2015年4月5日', '', '', '', '', '', NULL, NULL, '', NULL, '2015-04-06 07:28:08', '2015-04-06 07:28:08'),
(49, 5, '留学挙動確認用サンプルページ', '', NULL, '吾輩わがはいは猫である。名前はまだ無い。\r\n\r\nどこで生れたかとんと見当けんとうがつかぬ。何でも薄暗いじめじめした所でニャーニャー泣いていた事だけは記憶している。吾輩はここで始めて人間というものを見た。しかもあとで聞くとそれは書生という人間中で一番獰悪どうあくな種族であったそうだ。この書生というのは時々我々を捕つかまえて煮にて食うという話である。\r\n', 'しかしその当時は何という考もなかったから別段恐しいとも思わなかった。ただ彼の掌てのひらに載せられてスーと持ち上げられた時何だかフワフワした感じがあったばかりである。掌の上で少し落ちついて書生の顔を見たのがいわゆる人間というものの見始みはじめであろう。この時妙なものだと思った感じが今でも残っている。\r\n\r\n・第一毛をもって装飾されべきはずの顔がつるつるしてまるで薬缶やかんだ。\r\n・その後ご猫にもだいぶ逢あったがこんな片輪かたわには一度も出会でくわした事がない。\r\n・のみならず顔の真中があまりに突起している。そうしてその穴の中から時々ぷうぷうと煙けむりを吹く。どうも咽むせぽくて実に弱った。これが人間の飲む煙草たばこというものである事はようやくこの頃知った。\r\n\r\n【この書生の掌の裏うちで】\r\n　しばらくはよい心持に坐っておったが、しばらくすると非常な速力で運転し始めた。書生が動くのか自分だけが動くのか分らないが無暗むやみに眼が廻る。胸が悪くなる。到底とうてい助からないと思っていると、どさりと音がして眼から火が出た。それまでは記憶しているがあとは何の事やらいくら考え出そうとしても分らない。\r\n　ふと気が付いて見ると書生はいない。たくさんおった兄弟が一疋ぴきも見えぬ。肝心かんじんの母親さえ姿を隠してしまった。その上今いままでの所とは違って無暗むやみに明るい。眼を明いていられぬくらいだ。はてな何でも容子ようすがおかしいと、のそのそ這はい出して見ると非常に痛い。吾輩は藁わらの上から急に笹原の中へ棄てられたのである。\r\n\r\n【お問い合わせ】\r\n・\r\n・\r\n・\r\n・\r\n', '2015年4月5日~2015年4月8日', '', '', '', '', '', NULL, NULL, '', NULL, '2015-04-06 07:33:00', '2015-04-06 07:33:00'),
(50, 1, '0410テスト', 'サンプル企業', 'サンプル企業紹介', '概要。。。', '詳細。。。。。', '2015年4月5日~2015年4月8日', '', '', '', '', '', NULL, NULL, '', NULL, '2015-04-10 14:06:21', '2015-04-10 14:06:21'),
(51, 5, 'りゅうがく', 'ここから', 'ここから', 'ここから', 'ここから', '１', '', '', '', '', '', NULL, NULL, '', NULL, '2015-04-24 20:58:56', '2015-04-24 20:58:56');

-- --------------------------------------------------------

--
-- Table structure for table `events_logs`
--

CREATE TABLE `events_logs` (
`id` int(11) NOT NULL,
  `student_id` int(11) DEFAULT NULL,
  `event_id` int(11) DEFAULT NULL,
  `counter` int(11) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=42 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `events_logs`
--

INSERT INTO `events_logs` (`id`, `student_id`, `event_id`, `counter`, `created`, `modified`) VALUES
(1, NULL, 1, 173, '2015-03-14 00:25:20', '2015-04-03 17:06:54'),
(2, 1, 1, 7, '2015-03-14 01:10:39', '2015-03-28 21:50:21'),
(3, NULL, 2, 7, '2015-03-14 17:19:45', '2015-04-06 06:16:02'),
(4, NULL, NULL, 10, '2015-03-14 19:07:57', '2015-04-03 21:50:38'),
(5, NULL, 3, 367, '2015-03-16 20:23:15', '2015-04-03 16:01:41'),
(6, NULL, 8, 2, '2015-03-24 00:05:01', '2015-03-27 21:48:35'),
(7, NULL, 10, 326, '2015-03-26 14:07:20', '2016-04-01 17:54:55'),
(8, NULL, 11, 73, '2015-03-26 14:12:12', '2015-05-14 22:01:09'),
(9, NULL, 12, 28, '2015-03-26 14:17:49', '2015-05-02 13:59:12'),
(10, NULL, 13, 190, '2015-03-26 14:22:29', '2015-05-14 22:20:13'),
(11, NULL, 14, 146, '2015-03-26 14:26:49', '2015-05-02 15:35:03'),
(12, NULL, 15, 26, '2015-03-26 16:17:02', '2015-04-21 18:15:21'),
(13, NULL, 16, 4, '2015-03-26 16:20:55', '2015-04-06 06:15:37'),
(14, NULL, 25, NULL, '2015-03-26 16:46:28', '2015-03-26 16:46:28'),
(15, NULL, 31, 3, '2015-03-26 16:49:16', '2015-04-03 15:35:21'),
(16, NULL, 33, 11, '2015-03-26 18:36:31', '2015-04-03 15:34:27'),
(17, NULL, 4, NULL, '2015-03-27 21:48:27', '2015-03-27 21:48:27'),
(18, 1, 3, 3, '2015-03-28 20:42:02', '2015-03-28 20:51:02'),
(19, 1, 10, NULL, '2015-03-28 20:47:49', '2015-03-28 20:47:49'),
(20, 1, 13, 1, '2015-03-28 20:49:54', '2015-04-03 00:09:33'),
(21, 1, 14, 3, '2015-03-28 20:54:03', '2015-04-02 23:51:04'),
(22, 1, 15, 5, '2015-03-28 21:38:51', '2015-03-28 21:44:15'),
(23, NULL, 34, 6, '2015-03-28 21:54:57', '2015-03-29 11:12:49'),
(24, NULL, 35, 9, '2015-03-28 22:04:45', '2015-04-06 07:06:04'),
(25, NULL, 36, 15, '2015-04-03 15:34:31', '2015-04-18 21:56:54'),
(26, NULL, 37, 6, '2015-04-03 15:38:51', '2015-04-24 15:37:28'),
(27, NULL, 38, 18, '2015-04-03 15:43:26', '2015-04-24 21:06:48'),
(28, NULL, 39, 3, '2015-04-03 21:50:48', '2015-04-18 14:19:30'),
(29, NULL, 41, 6, '2015-04-04 09:48:33', '2015-04-24 15:38:18'),
(30, NULL, 42, 5, '2015-04-04 10:22:08', '2015-04-09 12:32:44'),
(31, NULL, 43, 4, '2015-04-05 23:20:55', '2015-04-24 19:43:29'),
(32, NULL, 44, 2, '2015-04-06 00:03:57', '2015-04-06 00:06:16'),
(33, NULL, 45, 61, '2015-04-06 00:18:02', '2015-04-24 20:54:39'),
(34, NULL, 9, NULL, '2015-04-06 07:06:59', '2015-04-06 07:06:59'),
(35, NULL, 46, 12, '2015-04-06 07:15:07', '2015-04-24 11:54:22'),
(36, NULL, 47, 4, '2015-04-06 07:18:38', '2015-04-21 18:10:26'),
(37, NULL, 48, 7, '2015-04-06 07:28:48', '2015-04-24 19:51:38'),
(38, NULL, 40, 1, '2015-04-06 07:31:39', '2015-04-11 11:59:26'),
(39, NULL, 49, 9, '2015-04-06 07:34:45', '2015-04-21 16:25:24'),
(40, NULL, 50, 3, '2015-04-10 15:08:57', '2015-04-21 18:08:24'),
(41, NULL, 51, NULL, '2015-04-24 21:06:37', '2015-04-24 21:06:37');

-- --------------------------------------------------------

--
-- Table structure for table `facebook_users`
--

CREATE TABLE `facebook_users` (
`id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `facebook_user_id` int(11) DEFAULT NULL,
  `birthday` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `gender` varchar(50) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `link` varchar(255) DEFAULT NULL,
  `locale` varchar(50) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `timezone` int(11) DEFAULT NULL,
  `updated_time` varchar(255) DEFAULT NULL,
  `verified` varchar(50) DEFAULT NULL,
  `university` varchar(255) DEFAULT NULL,
  `faculty` varchar(255) DEFAULT NULL,
  `friends_num` int(11) DEFAULT NULL,
  `access_token` varchar(255) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `facebook_users`
--

INSERT INTO `facebook_users` (`id`, `student_id`, `facebook_user_id`, `birthday`, `email`, `first_name`, `gender`, `last_name`, `link`, `locale`, `name`, `timezone`, `updated_time`, `verified`, `university`, `faculty`, `friends_num`, `access_token`, `created`, `modified`) VALUES
(1, 1, 2147483647, NULL, 'kitinntti@yahoo.co.jp', 'Koki', 'ç”·æ€§', 'Kiuchi', 'https://www.facebook.com/app_scoped_user_id/857157601012690/', 'ja_JP', 'Koki Kiuchi', 9, '2014-02-11T15:32:34+0000', '1', NULL, NULL, 350, 'CAAFS0hyWOZCIBAPGyUs9tiMV56dZCk9FDDK8ZAc7fyXSiwsw6BJAUgxd6NBTy4fYybUYG0oTOpVZBLqmAGxvhNbC0kpTSMZAMtQiZAp467SoKJKbSFChoDZBOUWE9blmxdtA7FUKdQW5YZAYvzJo2T8WlJQtz6LHvjKlA85J5h4PFabbZCMdX9ORHmmYOT5hW4IO4MzpiLc5r9tmuUmn7ZBewc', '2015-03-14 00:10:43', '2015-03-14 00:10:43');

-- --------------------------------------------------------

--
-- Table structure for table `funny_event`
--

CREATE TABLE `funny_event` (
`id` int(11) NOT NULL,
  `event_id` int(11) DEFAULT NULL,
  `limit_num` int(11) DEFAULT NULL,
  `limit_min` int(11) DEFAULT NULL,
  `deadline` datetime DEFAULT NULL,
  `cost` int(11) DEFAULT NULL,
  `schedule` text
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `funny_event`
--

INSERT INTO `funny_event` (`id`, `event_id`, `limit_num`, `limit_min`, `deadline`, `cost`, `schedule`) VALUES
(1, 1, 8, 123, '2015-03-14 00:24:00', 1300000000, 'aksdfzhsdflgjhslgjkslgjkzsrg'),
(2, 16, 6, 1, '2015-07-07 16:19:00', 90000, '5:00 ?????\r\n6:00 ?????\r\n7:00 ??\r\n8:00 ??????\r\n16:00 ?????\r\n18:00 ?????'),
(3, 46, 5, 5, '2015-04-06 07:14:00', 5000, '???????????\r\n????????????????\r\n????????????????\r\n\r\n??????????????????????\r\n??????????????????????????????????????????\r\n???????????????????????????????????');

-- --------------------------------------------------------

--
-- Table structure for table `intern`
--

CREATE TABLE `intern` (
`id` int(11) NOT NULL,
  `event_id` int(11) DEFAULT NULL,
  `state` int(11) DEFAULT NULL,
  `target` varchar(50) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `limit_num` int(11) DEFAULT NULL,
  `skill` varchar(50) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `payment` int(11) DEFAULT NULL,
  `conditions` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `treatment` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `intern`
--

INSERT INTO `intern` (`id`, `event_id`, `state`, `target`, `limit_num`, `skill`, `payment`, `conditions`, `treatment`) VALUES
(1, 3, NULL, '5/3', 800000, 'ã‚²ãƒƒãƒ„', 990909, 'asdasdasdasdad', 'oh yea'),
(2, 10, NULL, 'マーケティングに興味のある方', 5, '実践的なマーケティング的知識・経験', 800, '・TOEIC800点以上\r\n・熱意のある方', '・交通費全額支給！\r\n・勤務時の昼食代支給！'),
(3, 11, NULL, '120?????', 120, '???????????', 120, '?????????????', '?????????'),
(4, 12, NULL, '????????', 3, '????????', 374, '?????????', '??????'),
(5, 13, NULL, '???????????', NULL, '', NULL, '', ''),
(6, 13, NULL, '???????????', -22, '????????', 500000000, '???????', '?????????????'),
(7, 37, NULL, '??3??', 4, '???????', 4000, '16?', '?????'),
(8, 38, NULL, '??????', 4, '???????', 5000, '17?', '????'),
(9, 39, NULL, '??', 5, '???????', 500, '16???', '?????'),
(10, 50, NULL, '16卒限定', 50, 'マーケティング', 5000, '特になし', 'condition');

-- --------------------------------------------------------

--
-- Table structure for table `lesson`
--

CREATE TABLE `lesson` (
`id` int(11) NOT NULL,
  `event_id` int(11) DEFAULT NULL,
  `skill` varchar(50) DEFAULT NULL,
  `cost` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lesson`
--

INSERT INTO `lesson` (`id`, `event_id`, `skill`, `cost`) VALUES
(1, 15, '???', 5000);

-- --------------------------------------------------------

--
-- Table structure for table `stags`
--

CREATE TABLE `stags` (
`id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stags`
--

INSERT INTO `stags` (`id`, `name`, `created`, `modified`) VALUES
(1, 'ã‚¿ã‚°', '2015-03-14 01:09:00', '2015-03-14 01:09:00');

-- --------------------------------------------------------

--
-- Table structure for table `stags_students`
--

CREATE TABLE `stags_students` (
`id` int(11) NOT NULL,
  `stag_id` int(11) DEFAULT NULL,
  `student_id` int(11) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stags_students`
--

INSERT INTO `stags_students` (`id`, `stag_id`, `student_id`, `created`, `modified`) VALUES
(1, 1, 1, '2015-03-14 01:09:00', '2015-03-14 01:09:00');

-- --------------------------------------------------------

--
-- Table structure for table `student_group`
--

CREATE TABLE `student_group` (
`id` int(11) NOT NULL,
  `event_id` int(11) DEFAULT NULL,
  `represent` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `foundation` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `num_students` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `gender` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `frequency` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `major_univ` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `total_univ` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_group`
--

INSERT INTO `student_group` (`id`, `event_id`, `represent`, `foundation`, `num_students`, `gender`, `frequency`, `major_univ`, `total_univ`) VALUES
(1, 35, '', '', '', '', '', '', ''),
(2, 44, '○○○○', '2005年', '20人', '男子学生15人、女子学生5人', '週に1度のミーティング', '・立命館大学\r\n・同志社大学', '・関西大学\r\n・京都外国語大学'),
(3, 45, '清光陽介', '2012年', '10人', '男9人、女1人', '週に一度程度のミーティングに加え、メンバーそれぞれがそれぞれの頻度で活動しています。', '・立命館大学', '・同志社大学\r\n・京都大学');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
`id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `gender` enum('male','female') DEFAULT NULL,
  `birthday` date DEFAULT NULL,
  `email_accept` int(11) DEFAULT NULL,
  `university` varchar(255) DEFAULT NULL,
  `year` int(11) DEFAULT NULL,
  `faculty` varchar(255) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `study_abroad`
--

CREATE TABLE `study_abroad` (
`id` int(11) NOT NULL,
  `event_id` int(11) DEFAULT NULL,
  `skill` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `class` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `cost` int(11) DEFAULT NULL,
  `stay_type` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `conditions` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `envirionment` text CHARACTER SET latin1,
  `deadline` datetime DEFAULT NULL,
  `value_title_a1` text COLLATE utf8_bin NOT NULL,
  `value_title_a2` text COLLATE utf8_bin NOT NULL,
  `value_title_a3` text COLLATE utf8_bin NOT NULL,
  `value_title_a4` text COLLATE utf8_bin NOT NULL,
  `value_title_a5` text COLLATE utf8_bin NOT NULL,
  `value_title_b1` text COLLATE utf8_bin NOT NULL,
  `value_title_b2` text COLLATE utf8_bin NOT NULL,
  `value_title_b3` text COLLATE utf8_bin NOT NULL,
  `value_title_b4` text COLLATE utf8_bin NOT NULL,
  `value_1-1` text COLLATE utf8_bin NOT NULL,
  `value_1-2` text COLLATE utf8_bin NOT NULL,
  `value_1-3` text COLLATE utf8_bin NOT NULL,
  `value_1-4` text COLLATE utf8_bin NOT NULL,
  `value_1-5` text COLLATE utf8_bin NOT NULL,
  `value_2-1` text COLLATE utf8_bin NOT NULL,
  `value_2-2` text COLLATE utf8_bin NOT NULL,
  `value_2-3` text COLLATE utf8_bin NOT NULL,
  `value_2-4` text COLLATE utf8_bin NOT NULL,
  `value_2-5` text COLLATE utf8_bin NOT NULL,
  `value_3-1` text COLLATE utf8_bin NOT NULL,
  `value_3-2` text COLLATE utf8_bin NOT NULL,
  `value_3-3` text COLLATE utf8_bin NOT NULL,
  `value_3-4` text COLLATE utf8_bin NOT NULL,
  `value_3-5` text COLLATE utf8_bin NOT NULL,
  `value_4-1` text COLLATE utf8_bin NOT NULL,
  `value_4-2` text COLLATE utf8_bin NOT NULL,
  `value_4-3` text COLLATE utf8_bin NOT NULL,
  `value_4-4` text COLLATE utf8_bin NOT NULL,
  `value_4-5` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `study_abroad`
--

INSERT INTO `study_abroad` (`id`, `event_id`, `skill`, `class`, `cost`, `stay_type`, `conditions`, `envirionment`, `deadline`, `value_title_a1`, `value_title_a2`, `value_title_a3`, `value_title_a4`, `value_title_a5`, `value_title_b1`, `value_title_b2`, `value_title_b3`, `value_title_b4`, `value_1-1`, `value_1-2`, `value_1-3`, `value_1-4`, `value_1-5`, `value_2-1`, `value_2-2`, `value_2-3`, `value_2-4`, `value_2-5`, `value_3-1`, `value_3-2`, `value_3-3`, `value_3-4`, `value_3-5`, `value_4-1`, `value_4-2`, `value_4-3`, `value_4-4`, `value_4-5`) VALUES
(1, 14, NULL, '?????????????', 28, '??', '?????', NULL, '2015-11-26 14:24:00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(2, 31, NULL, '????????????', -20, '???????????????', '????????????', NULL, '2015-03-26 16:48:00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(3, 32, NULL, '??????', 5, '??????', '??????', NULL, '2015-03-26 16:50:00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(4, 33, NULL, '?????????', 11, '?????????', 'ffff', NULL, '2015-03-26 16:51:00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(5, 41, NULL, '?', 5000, '?', 'TOEIC800??', NULL, '2015-04-04 09:46:00', '1週間', '2週間', '4週間', '12週間', '24週間', '一人部屋', '浸り部屋', '3人部屋', '4人部屋', '1', '2', '3', '4', '5', '6', '7', '8', '9', '10', '11', '12', '13', '14', '15', '16', '17', '18', '19', '20'),
(6, 42, NULL, '????', 600000, '?', 'TOEIC550??', NULL, '2015-04-04 10:20:00', '1週間', '3週間', '8週間', '12週間', '24週間', '一人部屋', '二人部屋', '三人部屋', '八人部屋', '1', '2', '3', '4', '5', '6', '7', '8', '9', '10', '11', '12', '13', '14', '15', '16', '17', '18', '19', '20'),
(7, 49, NULL, '??????', 500000, '?', 'TOEIC800??', NULL, '2015-04-06 07:33:00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `applies_events`
--
ALTER TABLE `applies_events`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `attachments`
--
ALTER TABLE `attachments`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `camp`
--
ALTER TABLE `camp`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `etags`
--
ALTER TABLE `etags`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `etags_events`
--
ALTER TABLE `etags_events`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events_logs`
--
ALTER TABLE `events_logs`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `facebook_users`
--
ALTER TABLE `facebook_users`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `funny_event`
--
ALTER TABLE `funny_event`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `intern`
--
ALTER TABLE `intern`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lesson`
--
ALTER TABLE `lesson`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stags`
--
ALTER TABLE `stags`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stags_students`
--
ALTER TABLE `stags_students`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_group`
--
ALTER TABLE `student_group`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `study_abroad`
--
ALTER TABLE `study_abroad`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `applies_events`
--
ALTER TABLE `applies_events`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `attachments`
--
ALTER TABLE `attachments`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=108;
--
-- AUTO_INCREMENT for table `camp`
--
ALTER TABLE `camp`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `etags`
--
ALTER TABLE `etags`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `etags_events`
--
ALTER TABLE `etags_events`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=52;
--
-- AUTO_INCREMENT for table `events_logs`
--
ALTER TABLE `events_logs`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=42;
--
-- AUTO_INCREMENT for table `facebook_users`
--
ALTER TABLE `facebook_users`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `funny_event`
--
ALTER TABLE `funny_event`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `intern`
--
ALTER TABLE `intern`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `lesson`
--
ALTER TABLE `lesson`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `stags`
--
ALTER TABLE `stags`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `stags_students`
--
ALTER TABLE `stags_students`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `student_group`
--
ALTER TABLE `student_group`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `study_abroad`
--
ALTER TABLE `study_abroad`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
