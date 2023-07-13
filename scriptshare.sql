-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 13, 2023 at 04:07 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `scriptshare`
--

-- --------------------------------------------------------

--
-- Table structure for table `script_db`
--

CREATE TABLE `script_db` (
  `id` int(5) NOT NULL,
  `uploader` varchar(100) NOT NULL,
  `judul_script` varchar(200) NOT NULL DEFAULT 'Tidak ada judul',
  `script_slug` varchar(10) NOT NULL,
  `konten_script` text NOT NULL,
  `visibility` set('Private','Public') NOT NULL DEFAULT 'Private',
  `tanggal` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `script_db`
--

INSERT INTO `script_db` (`id`, `uploader`, `judul_script`, `script_slug`, `konten_script`, `visibility`, `tanggal`) VALUES
(1345, 'eria_eri', 'Aku mau share cerita nih', 'kHYUc4LdCj', 'Ini ceritanya 🔮', 'Public', '2023-06-26 18:25:17'),
(1346, 'eria_eri', 'ini kode rahaisa', 'uicSYEjTZ9', 'qazxswedcvfr', 'Public', '2023-06-26 18:50:06'),
(1347, 'eria_eri', 'contoh', 'nEqYdewkis', 'isi konten', 'Public', '2023-06-26 18:50:15'),
(1348, 'eria_eri', 'test private text', 'NARmtvOXFn', 'hehe, ini privat bang :)', 'Private', '2023-06-26 19:22:18'),
(1349, 'usr', 'Seeds BTC', 'mobDe6OV0U', 'fetch knife tornado mixed chunk casual wheel wink unit modify harbor bike lab cupboard evoke deal switch guard resist shoot feed rate project orbit', 'Private', '2023-06-27 13:52:18'),
(1350, 'usr', 'Tebak Wallet, kalo ketemu dapet duid 3M', 'RJr0Cl96Xf', 'fetch knife tornado mixed chunk casual wheel wink unit modify harbor bike lab cupboard evoke deal switch guard resist shoot feed rate project orbit', 'Public', '2023-06-27 13:52:48'),
(1351, 'test123', '1', 'BhnTsQ6wqM', 'tes', 'Private', '2023-07-01 20:15:17'),
(1352, 'test123', '2', 'J73kLWuBTi', 'test', 'Private', '2023-07-01 20:15:32'),
(1353, 'test123', '3', 'DhMgkAtBrs', 'tes  publik', 'Public', '2023-07-01 20:17:48'),
(1354, 'encrypt0r', 'tes prv', 'LHxpEncI9T', 'private share', 'Private', '2023-07-13 06:47:42'),
(1355, 'eria_eri', 'script panjang', 'kb9Vyqwlap', '<div class=\"container-sm \">\r\n    <div class=\"mx-auto mt-5 pt-5 w-md-50\">\r\n        <div class=\"\">\r\n            <?php\r\n                if($_SESSION == null){\r\n                    echo \'<a href=\"/\" class=\"link link-success\"><h6>Kembali</h6></a>\';\r\n                }else{\r\n                    echo \'<a href=\"/dashboard/script\" class=\"link link-success\"><h6>Kembali</h6></a>\';\r\n                }\r\n            ?>\r\n            <h6>Detail Personal</h6>\r\n        </div>\r\n        <hr>\r\n        <?php\r\n            $dateTime = new DateTime($detail[\'tanggal\']);\r\n            $formatter = new IntlDateFormatter(\'id_ID\', IntlDateFormatter::LONG, IntlDateFormatter::NONE);\r\n            $formatter->setPattern(\'d MMMM yyyy, HH:mm\');\r\n            $tanggal = $formatter->format($dateTime);\r\n            \r\n            if($_SESSION == null){\r\n                if($detail[\'visibility\'] == \"Public\"){\r\n                echo \'\r\n                    <div class=\"card border-danger mt-3\">\r\n                        <div class=\"card-body \">\r\n                            <h4 class=\"card-title mb-0\">\'.$detail[\'judul_script\'].\'</h4>\r\n                            <small class=\"card-text disabled mt-0\"><p><em>pada, \'. $tanggal .\'</em></p></small>\r\n                            <small class=\"card-text disabled mt-0\"><p><em>Uploader:: \'. $detail[\'uploader\'] .\'<br>Status:: \'. $detail[\'visibility\'] .\'</em></p></small>\r\n                            <small class=\"card-text disabled mt-0\"><p><em></em></p></small>\r\n                            <hr>\r\n                            <p class=\"card-text\">\'.$detail[\'konten_script\'].\'</p>\r\n                        </div>\r\n                    </div>\r\n                    \';\r\n                }else{\r\n                    echo \'\r\n                    <div class=\"card border-danger mt-3\">\r\n                        <div class=\"card-body \">\r\n                            <h4 class=\"card-title mb-0\">PRIVATE!!</h4>\r\n                        </div>\r\n                    </div>\r\n                    \';\r\n                }\r\n            }\r\n            else{\r\n                if($detail[\'uploader\'] == $_SESSION[\'users\'][\'username\']){\r\n                    echo \'\r\n                    <h3>INI BISA EDIT & AKSES YG PRIVAT</h3>\r\n                        <div class=\"card border-info mt-3\">\r\n                            <div class=\"card-body \">\r\n                                <h4 class=\"card-title mb-0\">\'.$detail[\'judul_script\'].\'</h4>\r\n                                <small class=\"card-text disabled mt-0\"><p><em>pada, \'. $tanggal .\'</em></p></small>\r\n                                <small class=\"card-text disabled mt-0\"><p><em>Uploader:: \'. $detail[\'uploader\'] .\'<br>Status:: \'. $detail[\'visibility\'] .\'</em></p></small>\r\n                                <small class=\"card-text disabled mt-0\"><p><em></em></p></small>\r\n                                <hr>\r\n                                <p class=\"card-text\">\'.$detail[\'konten_script\'].\'</p>\r\n                            </div>\r\n                        </div>\r\n                        \';\r\n                }else{\r\n                echo \'\r\n                    <div class=\"card border-danger mt-3\">\r\n                        <div class=\"card-body \">\r\n                            <h4 class=\"card-title mb-0\">\'.$detail[\'judul_script\'].\'</h4>\r\n                            <small class=\"card-text disabled mt-0\"><p><em>pada, \'. $tanggal .\'</em></p></small>\r\n                            <small class=\"card-text disabled mt-0\"><p><em>Uploader:: \'. $detail[\'uploader\'] .\'<br>Status:: \'. $detail[\'visibility\'] .\'</em></p></small>\r\n                            <small class=\"card-text disabled mt-0\"><p><em></em></p></small>\r\n                            <hr>\r\n                            <p class=\"card-text\">\'.$detail[\'konten_script\'].\'</p>\r\n                        </div>\r\n                    </div>\r\n                    \';\r\n                }\r\n            }\r\n        ?>\r\n    </div>\r\n</div>', 'Public', '2023-07-13 07:24:40');

-- --------------------------------------------------------

--
-- Table structure for table `short_db`
--

CREATE TABLE `short_db` (
  `id` int(5) NOT NULL,
  `owner` varchar(100) NOT NULL,
  `short_slug` varchar(100) NOT NULL,
  `tujuan` varchar(200) NOT NULL,
  `tanggal` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `short_db`
--

INSERT INTO `short_db` (`id`, `owner`, `short_slug`, `tujuan`, `tanggal`) VALUES
(56, 'encrypt0r', 'ke-github-aku', 'https://github.com/its0din-ai', '2023-07-12 19:20:20');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `username` varchar(100) NOT NULL,
  `nama_pengguna` varchar(200) NOT NULL DEFAULT 'Anonim',
  `profile_path` varchar(200) NOT NULL DEFAULT '/public/img/profile/nopp.png',
  `pass` varchar(200) NOT NULL,
  `roles` varchar(5) NOT NULL DEFAULT 'users'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `nama_pengguna`, `profile_path`, `pass`, `roles`) VALUES
('clarissa7', 'Clarissa Wijaya', '/public/img/profile/6bdbc0d1f7b303e9ca71659ef4c74e92.png', '$2y$10$mHhfvvwnucB10Jz4finQTOy3Ce3/W24p3TFolU1pDkKdjvqNqluV.', 'users'),
('encrypt0r', 'Bang Encrypt0r', '/public/img/profile/enc.png', '$2y$10$oyIpA3QoYcTZYjdgaBPaqOiarGeDHK67AcDgiWuxRVeghkcoejnre', 'admin'),
('eria', 'Eria Eri', '/public/img/profile/eeac83692f12bb4aba069def4f562075.jpg', '$2y$10$7q9I00m0P0bdgEvFfd5Jje1V.2lR7ivAiZhlYhQLozuPZZgLMX0Ru', 'users'),
('eria_eri', 'Bu Eri', '/public/img/profile/6f30f99e0f3acc5948d852b8310d6bec.jpg', '$2y$10$V9Wu0cZtiUVLE6p555YttOqg/s/dKCQ1FFXKw0Wp7CvvsSQrSFPXW', 'users'),
('test123', 'Mr. Test', '/public/img/profile/nopp.png', '$2y$10$ibnydCFChHcVyfKfVjsZQuZ7z3fI7.VdLZi3F4ggRW5D6yFZdgpZC', 'admin'),
('usr', 'Bang User', '/public/img/profile/nopp.png', '$2y$10$oyIpA3QoYcTZYjdgaBPaqOiarGeDHK67AcDgiWuxRVeghkcoejnre', 'users');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `script_db`
--
ALTER TABLE `script_db`
  ADD PRIMARY KEY (`id`),
  ADD KEY `script_uploader` (`uploader`);

--
-- Indexes for table `short_db`
--
ALTER TABLE `short_db`
  ADD PRIMARY KEY (`id`),
  ADD KEY `short_owner` (`owner`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `script_db`
--
ALTER TABLE `script_db`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1356;

--
-- AUTO_INCREMENT for table `short_db`
--
ALTER TABLE `short_db`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `script_db`
--
ALTER TABLE `script_db`
  ADD CONSTRAINT `script_db_ibfk_1` FOREIGN KEY (`uploader`) REFERENCES `users` (`username`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `short_db`
--
ALTER TABLE `short_db`
  ADD CONSTRAINT `short_db_ibfk_1` FOREIGN KEY (`owner`) REFERENCES `users` (`username`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
