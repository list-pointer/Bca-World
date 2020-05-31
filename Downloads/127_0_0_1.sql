-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 10, 2019 at 09:21 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bca-world`
--
CREATE DATABASE IF NOT EXISTS `bca-world` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `bca-world`;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `phoneno` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `join_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`email`),
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- Database: `login-practical`
--
CREATE DATABASE IF NOT EXISTS `login-practical` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `login-practical`;

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phoneno` text NOT NULL,
  `password` varchar(255) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`name`, `email`, `phoneno`, `password`, `date`) VALUES
('Chintan Gupta', 'chintang1198@gmail.com', '7517627475', '123', '2019-05-16'),
('Abhishek gupta', 'santoshgupta10101977@gmail.com', '8898622447', '123', '2019-05-16');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`email`);
--
-- Database: `mydb`
--
CREATE DATABASE IF NOT EXISTS `mydb` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `mydb`;

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `age` int(11) NOT NULL,
  `course` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `name`, `age`, `course`) VALUES
(1, 'Kristein', 20, 'BCA');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Database: `php`
--
CREATE DATABASE IF NOT EXISTS `php` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `php`;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`, `description`) VALUES
(1, 'Programming', 'Programming Section of our websites covers all the generally used and famous languages.We have Team of highly experienced Personals from the IT and Teaching Industry to help you with your Doubts'),
(2, 'Finance', 'The Finance part of the website is for helping students who lack in commmerce and finance knowledge.We will help you sharpen your finance knowledge.'),
(3, 'Linux', 'This Section is only dedicated to Linux.Right from installation to all the Commands you will get all the help you need for Linux');

-- --------------------------------------------------------

--
-- Table structure for table `quacat`
--

CREATE TABLE `quacat` (
  `id` int(11) UNSIGNED NOT NULL,
  `category` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `quacat`
--

INSERT INTO `quacat` (`id`, `category`) VALUES
(42, 'Finance'),
(43, 'Finance'),
(44, 'Finance'),
(45, 'Finance'),
(41, 'Linux'),
(40, 'Programming');

-- --------------------------------------------------------

--
-- Table structure for table `quans`
--

CREATE TABLE `quans` (
  `id` int(11) UNSIGNED NOT NULL,
  `question` mediumtext NOT NULL,
  `answer` longtext,
  `askedby` varchar(255) NOT NULL,
  `answeredby` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `quans`
--

INSERT INTO `quans` (`id`, `question`, `answer`, `askedby`, `answeredby`) VALUES
(40, 'v', NULL, '29', NULL),
(41, 'XXX', NULL, '29', NULL),
(42, 'c', NULL, '44', NULL),
(43, 'dd', NULL, '44', NULL),
(44, 'bbb', NULL, '44', NULL),
(45, 'hhh', NULL, '44', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `register_user`
--

CREATE TABLE `register_user` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phoneno` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `activated` enum('0','1') NOT NULL DEFAULT '0',
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register_user`
--

INSERT INTO `register_user` (`id`, `name`, `email`, `phoneno`, `password`, `token`, `activated`, `date`) VALUES
(44, 'abhishek', 'santoshgupta10101977@gmail.com', '8898622244', 'c4ca4238a0b923820dcc509a6f75849b', 'f589a6959f3e04037eb2b3eb0ff726ac', '1', '2019-06-09'),
(45, 'aditi', 'rathodaditi13.ar@gmil.com', '9877632467', '2b6af4c5a1a6387fd6fbff6c7089a76d', '2b197829d548512d1d4b8bd5c773d6c3', '0', '2019-06-10'),
(46, 'aditi', 'rathodaditi13.ar@gmail.com', '8565334678', '2b6af4c5a1a6387fd6fbff6c7089a76d', '2b197829d548512d1d4b8bd5c773d6c3', '0', '2019-06-10');

-- --------------------------------------------------------

--
-- Table structure for table `user_query`
--

CREATE TABLE `user_query` (
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `phoneno` varchar(10) NOT NULL,
  `message` longtext NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_query`
--

INSERT INTO `user_query` (`name`, `email`, `subject`, `phoneno`, `message`, `date`) VALUES
('a', 'a@gmail.com', 'x', '7412589632', 'b', '2019-06-09'),
('a', 'a@gmail.com', 'x', '7412589632', 'b', '2019-06-09'),
('a', 'a@gmail.com', 'x', '7412589632', 'b', '2019-06-09'),
('abhishek', 'guptaabhishek891@gmail.com', 'hello', '8898622244', 'c', '2019-06-09'),
('abhishek', 'guptaabhishek891@gmail.com', 'hello', '8898622244', 'c', '2019-06-09'),
('s', 'guptaabhishek891@gmail.com', 'hello', '8898622244', 'vv', '2019-06-09'),
('s', 'guptaabhishek891@gmail.com', 'hello', '8898622244', 'vv', '2019-06-09');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`,`name`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `quacat`
--
ALTER TABLE `quacat`
  ADD PRIMARY KEY (`category`,`id`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `quans`
--
ALTER TABLE `quans`
  ADD PRIMARY KEY (`id`),
  ADD KEY `askedby` (`askedby`);

--
-- Indexes for table `register_user`
--
ALTER TABLE `register_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `quans`
--
ALTER TABLE `quans`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `register_user`
--
ALTER TABLE `register_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `quacat`
--
ALTER TABLE `quacat`
  ADD CONSTRAINT `quacat_ibfk_1` FOREIGN KEY (`id`) REFERENCES `quans` (`id`),
  ADD CONSTRAINT `quacat_ibfk_3` FOREIGN KEY (`category`) REFERENCES `category` (`name`);
--
-- Database: `phpmyadmin`
--
CREATE DATABASE IF NOT EXISTS `phpmyadmin` DEFAULT CHARACTER SET utf8 COLLATE utf8_bin;
USE `phpmyadmin`;

-- --------------------------------------------------------

--
-- Table structure for table `pma__bookmark`
--

CREATE TABLE `pma__bookmark` (
  `id` int(11) NOT NULL,
  `dbase` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `user` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `label` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `query` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Bookmarks';

-- --------------------------------------------------------

--
-- Table structure for table `pma__central_columns`
--

CREATE TABLE `pma__central_columns` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_type` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_length` text COLLATE utf8_bin,
  `col_collation` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_isNull` tinyint(1) NOT NULL,
  `col_extra` varchar(255) COLLATE utf8_bin DEFAULT '',
  `col_default` text COLLATE utf8_bin
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Central list of columns';

-- --------------------------------------------------------

--
-- Table structure for table `pma__column_info`
--

CREATE TABLE `pma__column_info` (
  `id` int(5) UNSIGNED NOT NULL,
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `column_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `comment` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `mimetype` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `transformation` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `transformation_options` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `input_transformation` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `input_transformation_options` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Column information for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__designer_settings`
--

CREATE TABLE `pma__designer_settings` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `settings_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Settings related to Designer';

-- --------------------------------------------------------

--
-- Table structure for table `pma__export_templates`
--

CREATE TABLE `pma__export_templates` (
  `id` int(5) UNSIGNED NOT NULL,
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `export_type` varchar(10) COLLATE utf8_bin NOT NULL,
  `template_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `template_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Saved export templates';

--
-- Dumping data for table `pma__export_templates`
--

INSERT INTO `pma__export_templates` (`id`, `username`, `export_type`, `template_name`, `template_data`) VALUES
(1, 'root', 'server', 'database', '{\"quick_or_custom\":\"quick\",\"what\":\"sql\",\"db_select[]\":[\"login-practical\",\"php\",\"phpmyadmin\",\"project\",\"quora_clone\",\"test\"],\"aliases_new\":\"\",\"output_format\":\"sendit\",\"filename_template\":\"@SERVER@\",\"remember_template\":\"on\",\"charset\":\"utf-8\",\"compression\":\"none\",\"maxsize\":\"\",\"codegen_structure_or_data\":\"data\",\"codegen_format\":\"0\",\"csv_separator\":\",\",\"csv_enclosed\":\"\\\"\",\"csv_escaped\":\"\\\"\",\"csv_terminated\":\"AUTO\",\"csv_null\":\"NULL\",\"csv_structure_or_data\":\"data\",\"excel_null\":\"NULL\",\"excel_columns\":\"something\",\"excel_edition\":\"win\",\"excel_structure_or_data\":\"data\",\"json_structure_or_data\":\"data\",\"json_unicode\":\"something\",\"latex_caption\":\"something\",\"latex_structure_or_data\":\"structure_and_data\",\"latex_structure_caption\":\"Structure of table @TABLE@\",\"latex_structure_continued_caption\":\"Structure of table @TABLE@ (continued)\",\"latex_structure_label\":\"tab:@TABLE@-structure\",\"latex_relation\":\"something\",\"latex_comments\":\"something\",\"latex_mime\":\"something\",\"latex_columns\":\"something\",\"latex_data_caption\":\"Content of table @TABLE@\",\"latex_data_continued_caption\":\"Content of table @TABLE@ (continued)\",\"latex_data_label\":\"tab:@TABLE@-data\",\"latex_null\":\"\\\\textit{NULL}\",\"mediawiki_structure_or_data\":\"data\",\"mediawiki_caption\":\"something\",\"mediawiki_headers\":\"something\",\"htmlword_structure_or_data\":\"structure_and_data\",\"htmlword_null\":\"NULL\",\"ods_null\":\"NULL\",\"ods_structure_or_data\":\"data\",\"odt_structure_or_data\":\"structure_and_data\",\"odt_relation\":\"something\",\"odt_comments\":\"something\",\"odt_mime\":\"something\",\"odt_columns\":\"something\",\"odt_null\":\"NULL\",\"pdf_report_title\":\"\",\"pdf_structure_or_data\":\"data\",\"phparray_structure_or_data\":\"data\",\"sql_include_comments\":\"something\",\"sql_header_comment\":\"\",\"sql_use_transaction\":\"something\",\"sql_compatibility\":\"NONE\",\"sql_structure_or_data\":\"structure_and_data\",\"sql_create_table\":\"something\",\"sql_auto_increment\":\"something\",\"sql_create_view\":\"something\",\"sql_create_trigger\":\"something\",\"sql_backquotes\":\"something\",\"sql_type\":\"INSERT\",\"sql_insert_syntax\":\"both\",\"sql_max_query_size\":\"50000\",\"sql_hex_for_binary\":\"something\",\"sql_utc_time\":\"something\",\"texytext_structure_or_data\":\"structure_and_data\",\"texytext_null\":\"NULL\",\"yaml_structure_or_data\":\"data\",\"\":null,\"as_separate_files\":null,\"csv_removeCRLF\":null,\"csv_columns\":null,\"excel_removeCRLF\":null,\"json_pretty_print\":null,\"htmlword_columns\":null,\"ods_columns\":null,\"sql_dates\":null,\"sql_relation\":null,\"sql_mime\":null,\"sql_disable_fk\":null,\"sql_views_as_tables\":null,\"sql_metadata\":null,\"sql_drop_database\":null,\"sql_drop_table\":null,\"sql_if_not_exists\":null,\"sql_procedure_function\":null,\"sql_truncate\":null,\"sql_delayed\":null,\"sql_ignore\":null,\"texytext_columns\":null}');

-- --------------------------------------------------------

--
-- Table structure for table `pma__favorite`
--

CREATE TABLE `pma__favorite` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `tables` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Favorite tables';

-- --------------------------------------------------------

--
-- Table structure for table `pma__history`
--

CREATE TABLE `pma__history` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `timevalue` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `sqlquery` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='SQL history for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__navigationhiding`
--

CREATE TABLE `pma__navigationhiding` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `item_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `item_type` varchar(64) COLLATE utf8_bin NOT NULL,
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Hidden items of navigation tree';

-- --------------------------------------------------------

--
-- Table structure for table `pma__pdf_pages`
--

CREATE TABLE `pma__pdf_pages` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `page_nr` int(10) UNSIGNED NOT NULL,
  `page_descr` varchar(50) CHARACTER SET utf8 NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='PDF relation pages for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__recent`
--

CREATE TABLE `pma__recent` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `tables` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Recently accessed tables';

--
-- Dumping data for table `pma__recent`
--

INSERT INTO `pma__recent` (`username`, `tables`) VALUES
('root', '[{\"db\":\"php\",\"table\":\"category\"},{\"db\":\"project\",\"table\":\"category\"},{\"db\":\"php\",\"table\":\"register_user\"},{\"db\":\"php\",\"table\":\"user_query\"},{\"db\":\"php\",\"table\":\"quacat\"},{\"db\":\"php\",\"table\":\"quans\"},{\"db\":\"bca-world\",\"table\":\"users\"},{\"db\":\"BCA-WORLD\",\"table\":\"users\"},{\"db\":\"login-practical\",\"table\":\"register\"},{\"db\":\"mydb\",\"table\":\"student\"}]');

-- --------------------------------------------------------

--
-- Table structure for table `pma__relation`
--

CREATE TABLE `pma__relation` (
  `master_db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `master_table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `master_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Relation table';

-- --------------------------------------------------------

--
-- Table structure for table `pma__savedsearches`
--

CREATE TABLE `pma__savedsearches` (
  `id` int(5) UNSIGNED NOT NULL,
  `username` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `search_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `search_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Saved searches';

-- --------------------------------------------------------

--
-- Table structure for table `pma__table_coords`
--

CREATE TABLE `pma__table_coords` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `pdf_page_number` int(11) NOT NULL DEFAULT '0',
  `x` float UNSIGNED NOT NULL DEFAULT '0',
  `y` float UNSIGNED NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Table coordinates for phpMyAdmin PDF output';

-- --------------------------------------------------------

--
-- Table structure for table `pma__table_info`
--

CREATE TABLE `pma__table_info` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `display_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Table information for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__table_uiprefs`
--

CREATE TABLE `pma__table_uiprefs` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `prefs` text COLLATE utf8_bin NOT NULL,
  `last_update` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Tables'' UI preferences';

-- --------------------------------------------------------

--
-- Table structure for table `pma__tracking`
--

CREATE TABLE `pma__tracking` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `version` int(10) UNSIGNED NOT NULL,
  `date_created` datetime NOT NULL,
  `date_updated` datetime NOT NULL,
  `schema_snapshot` text COLLATE utf8_bin NOT NULL,
  `schema_sql` text COLLATE utf8_bin,
  `data_sql` longtext COLLATE utf8_bin,
  `tracking` set('UPDATE','REPLACE','INSERT','DELETE','TRUNCATE','CREATE DATABASE','ALTER DATABASE','DROP DATABASE','CREATE TABLE','ALTER TABLE','RENAME TABLE','DROP TABLE','CREATE INDEX','DROP INDEX','CREATE VIEW','ALTER VIEW','DROP VIEW') COLLATE utf8_bin DEFAULT NULL,
  `tracking_active` int(1) UNSIGNED NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Database changes tracking for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__userconfig`
--

CREATE TABLE `pma__userconfig` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `timevalue` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `config_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='User preferences storage for phpMyAdmin';

--
-- Dumping data for table `pma__userconfig`
--

INSERT INTO `pma__userconfig` (`username`, `timevalue`, `config_data`) VALUES
('root', '2019-06-09 13:47:28', '{\"Console\\/Mode\":\"collapse\",\"NavigationWidth\":0}');

-- --------------------------------------------------------

--
-- Table structure for table `pma__usergroups`
--

CREATE TABLE `pma__usergroups` (
  `usergroup` varchar(64) COLLATE utf8_bin NOT NULL,
  `tab` varchar(64) COLLATE utf8_bin NOT NULL,
  `allowed` enum('Y','N') COLLATE utf8_bin NOT NULL DEFAULT 'N'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='User groups with configured menu items';

-- --------------------------------------------------------

--
-- Table structure for table `pma__users`
--

CREATE TABLE `pma__users` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `usergroup` varchar(64) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Users and their assignments to user groups';

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pma__bookmark`
--
ALTER TABLE `pma__bookmark`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pma__central_columns`
--
ALTER TABLE `pma__central_columns`
  ADD PRIMARY KEY (`db_name`,`col_name`);

--
-- Indexes for table `pma__column_info`
--
ALTER TABLE `pma__column_info`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `db_name` (`db_name`,`table_name`,`column_name`);

--
-- Indexes for table `pma__designer_settings`
--
ALTER TABLE `pma__designer_settings`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__export_templates`
--
ALTER TABLE `pma__export_templates`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `u_user_type_template` (`username`,`export_type`,`template_name`);

--
-- Indexes for table `pma__favorite`
--
ALTER TABLE `pma__favorite`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__history`
--
ALTER TABLE `pma__history`
  ADD PRIMARY KEY (`id`),
  ADD KEY `username` (`username`,`db`,`table`,`timevalue`);

--
-- Indexes for table `pma__navigationhiding`
--
ALTER TABLE `pma__navigationhiding`
  ADD PRIMARY KEY (`username`,`item_name`,`item_type`,`db_name`,`table_name`);

--
-- Indexes for table `pma__pdf_pages`
--
ALTER TABLE `pma__pdf_pages`
  ADD PRIMARY KEY (`page_nr`),
  ADD KEY `db_name` (`db_name`);

--
-- Indexes for table `pma__recent`
--
ALTER TABLE `pma__recent`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__relation`
--
ALTER TABLE `pma__relation`
  ADD PRIMARY KEY (`master_db`,`master_table`,`master_field`),
  ADD KEY `foreign_field` (`foreign_db`,`foreign_table`);

--
-- Indexes for table `pma__savedsearches`
--
ALTER TABLE `pma__savedsearches`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `u_savedsearches_username_dbname` (`username`,`db_name`,`search_name`);

--
-- Indexes for table `pma__table_coords`
--
ALTER TABLE `pma__table_coords`
  ADD PRIMARY KEY (`db_name`,`table_name`,`pdf_page_number`);

--
-- Indexes for table `pma__table_info`
--
ALTER TABLE `pma__table_info`
  ADD PRIMARY KEY (`db_name`,`table_name`);

--
-- Indexes for table `pma__table_uiprefs`
--
ALTER TABLE `pma__table_uiprefs`
  ADD PRIMARY KEY (`username`,`db_name`,`table_name`);

--
-- Indexes for table `pma__tracking`
--
ALTER TABLE `pma__tracking`
  ADD PRIMARY KEY (`db_name`,`table_name`,`version`);

--
-- Indexes for table `pma__userconfig`
--
ALTER TABLE `pma__userconfig`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__usergroups`
--
ALTER TABLE `pma__usergroups`
  ADD PRIMARY KEY (`usergroup`,`tab`,`allowed`);

--
-- Indexes for table `pma__users`
--
ALTER TABLE `pma__users`
  ADD PRIMARY KEY (`username`,`usergroup`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pma__bookmark`
--
ALTER TABLE `pma__bookmark`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__column_info`
--
ALTER TABLE `pma__column_info`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__export_templates`
--
ALTER TABLE `pma__export_templates`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pma__history`
--
ALTER TABLE `pma__history`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__pdf_pages`
--
ALTER TABLE `pma__pdf_pages`
  MODIFY `page_nr` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__savedsearches`
--
ALTER TABLE `pma__savedsearches`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- Database: `practical8`
--
CREATE DATABASE IF NOT EXISTS `practical8` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `practical8`;

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phoneno` text NOT NULL,
  `password` varchar(255) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`name`, `email`, `phoneno`, `password`, `date`) VALUES
('Chintan Gupta', 'chintang118@gmail.com', '7517627475', '123456', '2019-06-05'),
('Chintan Gupta', 'chintang1198@gmail.com', '7517627475', '123', '2019-05-16');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`email`);
--
-- Database: `project`
--
CREATE DATABASE IF NOT EXISTS `project` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `project`;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`, `description`) VALUES
(1, 'Algorithms', 'An algorithm is a self-contained sequence of actions to be performed. Algorithms can perform calculation, data processing and automated reasoning tasks.An algorithm is an effective method that can be expressed within a finite amount of space and time and in a well-defined formal language for calculating a function.<br>There are various algorithm design paradigm like Brute-Force approach, Divide and conquer approach, Linear programming, Dynamic programming, The greedy method and so on...'),
(2, 'Architecture', 'In computer engineering, computer architecture is a set of rules and methods that describe the functionality, organization, and implementation of computer systems. Some definitions of architecture define it as describing the capabilities and programming model of a computer but not a particular implementation. In other definitions computer architecture involves instruction set architecture design, microarchitecture design, logic design, and implementation.<br>The purpose of computer architecture is to design a computer that maximizes performance while keeping power consumption in check, costs low relative to the amount of expected performance, and is also very reliable. For this, many aspects are to be considered which includes Instruction Set Design, Functional Organization, Logic Design, and Implementation.'),
(3, 'Theory Of Computation', 'In theoretical computer science and mathematics, the theory of computation is the branch that deals with how efficiently problems can be solved on a model of computation, using an algorithm. The field is divided into three major branches: automata theory and language, computability theory, and computational complexity theory, which are linked by the question: \"What are the fundamental capabilities and limitations of computers?\".<br>In order to perform a rigorous study of computation, computer scientists work with a mathematical abstraction of computers called a model of computation. There are several models in use, but the most commonly examined is the Turing machine.'),
(4, 'Database Management', 'A Database Management System (DBMS) is a computer program (or more typically, a suite of them) designed to manage a database, a large set of structured data, and run operations on the data requested by numerous users. Typical examples of DBMS use include accounting, human resources and customer support systems.<br>Originally found only in large companies with the computer hardware needed to support large data sets, DBMSs have more recently emerged as a fairly standard part of any company back office.'),
(5, 'Probability &amp; Queuing', 'Probability is the measure of the likelihood that an event will occur. Probability is quantified as a number between 0 and 1 (where 0 indicates impossibility and 1 indicates certainty). The higher the probability of an event, the more certain that the event will occur.<br>Queueing theory is the mathematical study of waiting lines, or queues. In queueing theory, a model is constructed so that queue lengths and waiting time can be predicted. Queueing theory is generally considered a branch of operations research because the results are often used when making business decisions about the resources needed to provide a service.'),
(6, 'Software Engineering', 'Software engineering (SWE) is the application of engineering to the development of software in a systematic method. Typically, Software engineering is Research, design, develop, and test operating systems-level software, compilers, and network distribution software for medical, industrial, military, communications, aerospace, business, scientific, and general computing applications, and is an an engineering discipline that is concerned with all aspects of software production.<br>Software engineering is a direct sub-field of engineering and has an overlap with computer science and management science. It is also considered a part of overall systems engineering.'),
(7, 'Other', 'Any Other Category...');

-- --------------------------------------------------------

--
-- Table structure for table `quacat`
--

CREATE TABLE `quacat` (
  `id` int(11) UNSIGNED NOT NULL,
  `category` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `quacat`
--

INSERT INTO `quacat` (`id`, `category`) VALUES
(1, 'Algorithms'),
(2, 'Algorithms'),
(3, 'Algorithms'),
(42, 'Algorithms'),
(4, 'Architecture'),
(5, 'Architecture'),
(41, 'Architecture'),
(6, 'Database Management'),
(7, 'Database Management'),
(8, 'Database Management'),
(9, 'Database Management'),
(10, 'Database Management'),
(11, 'Database Management'),
(12, 'Database Management'),
(33, 'Database Management'),
(29, 'Other'),
(30, 'Other'),
(39, 'Other'),
(13, 'Probability &amp; Queuing'),
(14, 'Probability &amp; Queuing'),
(15, 'Software Engineering'),
(16, 'Software Engineering'),
(17, 'Software Engineering'),
(18, 'Software Engineering'),
(19, 'Software Engineering'),
(20, 'Software Engineering'),
(21, 'Software Engineering'),
(22, 'Software Engineering'),
(23, 'Software Engineering'),
(24, 'Software Engineering'),
(25, 'Software Engineering'),
(26, 'Software Engineering'),
(27, 'Software Engineering'),
(32, 'Software Engineering'),
(28, 'Theory Of Computation');

-- --------------------------------------------------------

--
-- Table structure for table `quans`
--

CREATE TABLE `quans` (
  `id` int(11) UNSIGNED NOT NULL,
  `question` mediumtext NOT NULL,
  `answer` longtext,
  `askedby` varchar(255) NOT NULL,
  `answeredby` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `quans`
--

INSERT INTO `quans` (`id`, `question`, `answer`, `askedby`, `answeredby`) VALUES
(1, 'What are the best books to learn algorithms and data structures?', 'This is an accessible resource on data structures, with sample implementations and great explanations:\n                                <br><u>Books</u>\n                                <ul id=\"anslist\">\n                                <li>The Art of Computer Programming by Donald E. Knuth</li>\n                                <li>Introduction to Algorithms CLRS</li>\n                                <li>Fundamentals of Computer Algorithms by Ellis Horowitz, Sartaj Sahni</li>\n                                </ul>\n                                <u>Online Video Lectures</u>\n                                <ul id=\"anslist\">\n                                    <li>Introduction to Computer Science and Programming | MIT OpenCourseWare</li>\n                                </ul><br>or<br>ffff<br>or<br>xxxxx<br>or<br>jjjjiji', 'ayusht2396', '29, @ 44'),
(2, 'How to calculate time complexity of loops ?', '1) O(1): Time complexity of a function (or set of statements) is considered as O(1) if it doesn’t contain loop, recursion and call to any other non-constant time function.\r\n\r\n   // set of non-recursive and non-loop statements\r\nFor example swap() function has O(1) time complexity.\r\nA loop or recursion that runs a constant number of times is also considered as O(1). For example the following loop is O(1).\r\n\r\n   // Here c is a constant   \r\n   for (int i = 1; i <= c; i++) {  \r\n        // some O(1) expressions\r\n   }\r\n2) O(n): Time Complexity of a loop is considered as O(n) if the loop variables is incremented / decremented by a constant amount. For example following functions have O(n) time complexity.\r\n\r\n   // Here c is a positive integer constant   \r\n   for (int i = 1; i <= n; i += c) {  \r\n        // some O(1) expressions\r\n   }\r\n\r\n   for (int i = n; i > 0; i -= c) {\r\n        // some O(1) expressions\r\n   }\r\n3) O(nc): Time complexity of nested loops is equal to the number of times the innermost statement is executed. For example the following sample loops have O(n2) time complexity\r\n\r\n  \r\n   for (int i = 1; i <=n; i += c) {\r\n       for (int j = 1; j <=n; j += c) {\r\n          // some O(1) expressions\r\n       }\r\n   }\r\n\r\n   for (int i = n; i > 0; i += c) {\r\n       for (int j = i+1; j <=n; j += c) {\r\n          // some O(1) expressions\r\n   }\r\nFor example Selection sort and Insertion Sort have O(n2) time complexity.\r\n4) O(Logn) Time Complexity of a loop is considered as O(Logn) if the loop variables is divided / multiplied by a constant amount.\r\n\r\n   for (int i = 1; i <=n; i *= c) {\r\n       // some O(1) expressions\r\n   }\r\n   for (int i = n; i > 0; i /= c) {\r\n       // some O(1) expressions\r\n   }\r\nFor example Binary Search(refer iterative implementation) has O(Logn) time complexity.\r\n5) O(LogLogn) Time Complexity of a loop is considered as O(LogLogn) if the loop variables is reduced / increased exponentially by a constant amount.\r\n\r\n   // Here c is a constant greater than 1   \r\n   for (int i = 2; i <=n; i = pow(i, c)) { \r\n       // some O(1) expressions\r\n   }\r\n   //Here fun is sqrt or cuberoot or any other constant root\r\n   for (int i = n; i > 0; i = fun(i)) { \r\n       // some O(1) expressions\r\n   }\r\nSee this for more explanation.\r\nHow to combine time complexities of consecutive loops?\r\nWhen there are consecutive loops, we calculate time complexity as sum of time complexities of individual loops.\r\n\r\n   for (int i = 1; i <=m; i += c) {  \r\n        // some O(1) expressions\r\n   }\r\n   for (int i = 1; i <=n; i += c) {\r\n        // some O(1) expressions\r\n   }\r\n   Time complexity of above code is O(m) + O(n) which is O(m+n)\r\n   If m == n, the time complexity becomes O(2n) which is O(n).<br>Ohh', 'pjain', 'admin'),
(3, 'How to calculate time complexity when there are many if, else statements inside loops ?', 'The worst case time complexity is the most useful among best, average and worst. Therefore we need to consider worst case. We evaluate the situation when values in if-else conditions cause maximum number of statements to be executed.\r\nFor example consider the linear search function where we consider the case when element is present at the end or not present at all.\r\nWhen the code is too complex to consider all if-else cases, we can get an upper bound by ignoring if else and other complex control statements.<br>Really', 'shub011', 'admin'),
(4, 'Is a computer architecture class useful for a computer science major who wishes to work as a software engineer?', 'If you ever have to write performance-critical code, having some hardware knowledge is essential - how multi-level caching works, how branch predictors work, how pipelining works and how branches can potentially give you a big performance hit, how filling up a TLB cache can cause all memory operations to slow down, how doing a SIMD operation across cacheline boundaries can be very slow, how cache coherence protocols can slow down your multi-threaded code if you use certain memory access patterns, etc.\r\n\r\nAnd obviously, if you ever want to write kernel code, having some hardware knowledge is also essential.\r\n\r\nIf you know you will only ever stay in high level software that\'s not performance-critical (business applications, most web stuff, etc), it\'s not very important.\r\n\r\n', 'Ujwal_1997', 'admin'),
(5, 'Is there a trick or easier way to learn the instruction set of microproccesor 8085?', 'Yes ! instead of learning them in alphabetical order Learn and understand them in order of their working….\r\n\r\nUsing 74 different opcodes you can form 246 instructions in 8085 but don\'t worry about the numbers because much of the instructions working are same only the source and destination of data are diffrent so just differentiate all the instructions into given order and then you will be available to memorize them more efficiently.\r\n\r\nData transfer\r\nArithmetic and logical operation\r\nBranching instructions\r\nMachine control instructions\r\nSpecial instruction', 'ayusht2396', 'admin'),
(6, 'What are advantages of DBMS over traditional file based systems ?', 'Database management systems were developed to handle the following difficulties of typical? le-processing systems supported by conventional operating systems.\n1. Data redundancy and inconsistency\n2. Difficulty in accessing data\n3. Data isolation – multiple ?les and formats\n4. Integrity problems\n5. Atomicity of updates\n6. Concurrent access by multiple users\n7. Security problems', 'Shivam010', 'admin'),
(7, 'What are super, primary, candidate and foreign keys?', 'A superkey is a set of attributes of a relation schema upon which all attributes of the schema are functionally dependent. No two rows can have the same value of super key attributes.\r\nA Candidate key is minimal superkey, i.e., no proper subset of Candidate key attributes can be a superkey.\r\nA Primary Key is one of the candidate keys. One of the candidate keys is selected as most important and becomes the primary key. There cannot be more that one primary keys in a table.\r\nForeign key is a field (or collection of fields) in one table that uniquely identifies a row of another table. See this for an example.\r\n', 'Ujwal_1997', 'admin'),
(8, 'What is the difference between primary key and unique constraints?', 'Primary key cannot have NULL value, the unique constraints can have NULL values. There is only one primary key in a table, but there can be multiple unique constrains.\r\n', 'pjain', 'admin'),
(9, 'What is database normalization?', ' It is a process of analyzing the given relation schemas based on their functional dependencies and primary keys to achieve the following desirable properties:\r\n1) Minimizing Redundancy\r\n2) Minimizing the Insertion, Deletion, And Update Anomalies\r\nRelation schemas that do not meet the properties are decomposed into smaller relation schemas that could meet desirable properties.\r\n', 'shub011', 'admin'),
(10, 'What is SQL?', 'SQL is Structured Query Language designed for inserting and modifying in a relational database system.\r\n', 'ayusht2396', 'admin'),
(11, 'What are the differences between DDL, DML and DCL in SQL?', 'Following are some details of three.\r\nDDL stands for Data Definition Language. SQL queries like CREATE, ALTER, DROP and RENAME come under this.\r\nDML stands for Data Manipulation Language. SQL queries like SELECT, INSERT and UPDATE come under this.\r\nDCL stands for Data Control Language. SQL queries like GRANT and REVOKE come under this.', 'Ujwal_1997', 'admin'),
(12, 'What is the difference between having and where clause?', 'HAVING is used to specify a condition for a group or an aggregate function used in select statement. The WHERE clause selects before grouping. The HAVING clause selects rows after grouping. Unlike HAVING clause, the WHERE clause cannot contain aggregate functions. \r\n', 'pjain', 'admin'),
(13, 'Two dice are rolled once. Calculate the probability that the sum of the numbers on the two dice is 5.\r\n', 'Possible outcomes (Sample Space) = {(1, 1), (1, 2),...............,(1, 6), (2, 1), (2, 2),................,(2, 6), (3, 1), (3, 2),...........,(3, 6), .............,(4, 1), (4, 2),..........,(4, 6), (5, 1), (5,2),...............,(5, 6), (6, 1), (6, 2),......................,(6, 6)}\r\n\r\nTotal possible outcomes = 36\r\n\r\nNumber of outcomes of the experiment that are favorable to the event that a sum of two events is 6\r\n\r\n=> Favorable outcomes are: (1, 5), (2, 4), (3, 3), (4, 2) and (5, 1)\r\n\r\nNumber of favorable outcomes = 5\r\n\r\nUse, probability formula = Number offavorable outcomesTotal number of possible outcomesNumber offavorable outcomesTotal number of possible outcomes\r\n\r\n= 536536\r\n\r\nThe probability of a sum of 6 is 536536.', 'shub011', 'admin'),
(14, 'What is the probability of getting head when tossing a coin ?', 'Sample Space = {H, T}\r\n\r\nNumber of possible outcomes = 2\r\n\r\nNumber of favorable outcomes = 1\r\n(because of only one head) \r\n\r\n=> Probability of getting head = Number offavorable outcomesTotal number of possible outcomesNumber offavorable outcomesTotal number of possible outcomes\r\n\r\n= 1212\r\n\r\n=> Probability of getting head is 1212.', 'Ujwal_1997', 'admin'),
(15, 'What is computer software?', 'Computer software is a complete package, which includes software program, its documentation and user guide on how to use the software.\r\n<br>Thank You', 'ayusht2396', 'admin'),
(16, 'Can you differentiate computer software and computer program?\r\n', 'Yes, a computer program is piece of programming code which performs a well defined task where as software includes programming code, its documentation and user guide.\r\nSo finally yes we can differentiate.', 'pjain', 'admin'),
(17, 'What is software engineering?', 'Software engineering is an engineering branch associated with software system development.\r\n It is also a subject relating the software development', 'shub011', 'admin'),
(18, 'When you know programming, what is the need to learn software engineering concepts?\r\n', 'A person who knows how to build a wall may not be good at building an entire house. Likewise, a person who can write programs may not have knowledge of other concepts of Software Engineering. The software engineering concepts guide programmers on how to assess requirements of end user, design the algorithms before actual coding starts, create programs by coding, testing the code and its documentation.\r\n', 'Shivam010', 'admin'),
(19, 'What is software process or Software Development Life Cycle (SDLC)?\n', 'Software Development Life Cycle, or software process is the systematic development of software by following every stage in the development process namely, Requirement Gathering, System Analysis, Design, Coding, Testing, Maintenance and Documentation in that order.\r\n', 'Ujwal_1997', 'admin'),
(20, 'What are SDLC models available?\r\n', 'There are several SDLC models available such as Waterfall Model, Iterative Model, Spiral model, V-model and Big-bang Model etc.\r\n', 'ayusht2396', 'admin'),
(21, 'What are various phases of SDLC?\r\n', 'The generic phases of SDLC are: Requirement Gathering, System Analysis and Design, Coding, Testing and implementation. The phases depend upon the model we choose to develop software.', 'pjain', 'admin'),
(22, 'Which SDLC model is the best?', 'SDLC Models are adopted as per requirements of development process. It may very software-to-software to ensuring which model is suitable.\r\n\r\nWe can select the best SDLC model if following answers are satisfied -\r\n\r\nIs SDLC suitable for selected technology to implement the software ?\r\nIs SDLC appropriate for client’s requirements and priorities ?\r\nIs SDLC model suitable for size and complexity of the software ?\r\nIs the SDLC model suitable for type of projects and engineering we do ?\r\nIs the SDLC appropriate for the geographically co-located or dispersed developers ?\r\n', 'Ujwal_1997', 'admin'),
(23, 'What is software project management?\r\n', 'Software project management is process of managing all activities like time, cost and quality management involved in software development.\r\n', 'shub011', 'admin'),
(24, 'Who is software project manager?\r\n', 'A software project manager is a person who undertakes the responsibility of carrying out the software project.\r\n\r\n', 'pjain', 'admin'),
(25, 'What is SRS?\r\n', 'SRS or Software Requirement Specification is a document produced at the time of requirement gathering process. It can be also seen as a process of refining requirements and documenting them.\r\n', 'ayusht2396', 'admin'),
(26, 'What are functional requirements?\r\n', 'Functional requirements are functional features and specifications expected by users from the proposed software product.\r\n', 'Ujwal_1997', 'admin'),
(27, 'What are non-functional requirements?\r\n', 'Non-functional requirements are implicit and are related to security, performance, look and feel of user interface, interoperability, cost etc.', 'Ujwal_1997', 'admin'),
(28, 'How many types of Grammars are there in theory of computation?', 'According to chomsky hierarchy, grammars are divided of 4 types:\n<ol style=\"padding-left: 40px;\">\n   <li>Type 0 known as unrestricted grammar.</li>\n   <li>Type 1 known as context sensitive grammar.</li>\n   <li>Type 2 known as context free grammar.</li>\n   <li>Type 3 Regular Grammar.</li>\n</ol>Their Power decreases from type 0 to type 3.', 'Shivam010', 'admin'),
(29, 'How is the developer of Interrogate website?', 'Shivam Rathore', 'Ujwal_1997', 'admin'),
(30, 'Ask a Question?', 'Why This question', 'Shivam010', 'admin'),
(32, 'What is ShivamRathore?', 'It is a Object in My Library ;p', 'Shivam010', 'admin'),
(33, 'How is this page working?', 'This page is working on HTML, CSS, JavaScript, PHP, and on MySQL Database.', 'ayusht2396', 'Shivam010'),
(39, 'Nothing to ask.', NULL, 'Shivam010', NULL),
(40, 'wwwww', NULL, 'santoshgupta10101977@gmail.com', NULL),
(41, 'bbb', NULL, 'guptaabhi9', NULL),
(42, 'hhh', 'gggggg<br>or<br>bbbbb', 'guptaabhi9', 'guptaabhi9, @ guptaabhi91');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `join_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `name`, `email`, `join_date`) VALUES
(17, 'admin', '$2y$10$P8b3vf6Z9U81CyDhoe4XhOglpC6BNPmpwoY46oxCyuXB4P0JDLDEG', 'Shivam Rathore', 'shivam.rathore010@gmail.com', '2017-04-11 13:29:57'),
(9, 'ayusht2396', '$2y$10$sN9WIHwcj5urboVA.fHZouLQM7/neAf1QOHJaYi4Mqysps3kdYgBq', 'Ayush Tripathi', 'ayusht2396@gmail.com', '2017-03-30 11:04:59'),
(20, 'guptaabhi9', '$2y$10$mWl.TNAMMmKsYyhEJXi42ejKbGa0ALYjQG1FMrbH0i5f/.XNK7Y3i', 'Chintan Gupta', 'chintang1198@gmail.com', '2019-05-10 09:30:29'),
(21, 'guptaabhi91', '$2y$10$s2RaqkDZMzZZV3fbr4tMcOgsQaGP0GXCxxnmWy5UNNlYcfxMomUHu', 'ss', 'chintang198@gmail.com', '2019-05-10 09:33:25'),
(13, 'pjain', '$2y$10$iMvJcCrkuDaeaquwzjZZjehRFCdGrojkchTCLnJtihG6GNtviohjq', 'Prakhar Jain', 'pjain@gmail.com', '2017-03-30 11:39:07'),
(19, 'santoshgupta10101977@gmail.com', '$2y$10$bRYDEJTQm1Wkb351jTEkuOi5R9iz7Ve3mmL39xmybDaHPUH6LxX1C', 'aaaaa', 'santoshgupta10101977@gmail.com', '2019-05-08 13:41:38'),
(8, 'Shivam010', '$2y$10$QWwY6YAqgf2Vx1IOIzflHeMcmwKf7h/W1a.FfRYrLxpcLkRg13Ypm', 'Shivam Rathore', 'shivam.rathore010@gmail.com', '2017-03-30 07:56:51'),
(11, 'shub011', '$2y$10$eu7S5jsNaBHoI2twfrpPxOxcnUuvL0h7oGHzWH9sPPL96eNvR2QMC', 'Shubham Bairagi', 'sbv351997@gmail.com', '2017-03-30 11:13:21'),
(14, 'Ujwal_1997', '$2y$10$c4TeDn9ZuFeGOLkUfrbx6u5GtKhN5EKtVrAgBztCiLaeX33.pDt76', 'Ujwal Shah', 'ujwalsaurav@gmail.com', '2017-04-02 06:01:17'),
(16, 'user', '$2y$10$eEIXvBr8rUoxUbEBzag3N.fqKfrzTYfhC3p6.2g78ql2ujhOLy1Pa', 'Username', 'user@gmail.com', '2017-04-07 00:35:51'),
(15, 'xyz', '$2y$10$YOZ/L6mGVPJ6ng0vVoGXxO5h7rI8XizNl/2z.kaRGx/4338aaUaDe', 'XYZ', 'xyz@gmail.com', '2017-04-06 08:00:39');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`,`name`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `quacat`
--
ALTER TABLE `quacat`
  ADD PRIMARY KEY (`category`,`id`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `quans`
--
ALTER TABLE `quans`
  ADD PRIMARY KEY (`id`),
  ADD KEY `askedby` (`askedby`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`username`),
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `quans`
--
ALTER TABLE `quans`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `quacat`
--
ALTER TABLE `quacat`
  ADD CONSTRAINT `quacat_ibfk_1` FOREIGN KEY (`id`) REFERENCES `quans` (`id`),
  ADD CONSTRAINT `quacat_ibfk_3` FOREIGN KEY (`category`) REFERENCES `category` (`name`);

--
-- Constraints for table `quans`
--
ALTER TABLE `quans`
  ADD CONSTRAINT `quans_ibfk_1` FOREIGN KEY (`askedby`) REFERENCES `users` (`username`);
--
-- Database: `quora_clone`
--
CREATE DATABASE IF NOT EXISTS `quora_clone` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `quora_clone`;
--
-- Database: `test`
--
CREATE DATABASE IF NOT EXISTS `test` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `test`;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
