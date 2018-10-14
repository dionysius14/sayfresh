-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 14, 2018 at 10:30 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sayfresh`
--

-- --------------------------------------------------------

--
-- Table structure for table `ci_sessions`
--

CREATE TABLE `ci_sessions` (
  `session_id` varchar(40) NOT NULL DEFAULT '0',
  `ip_address` varchar(45) NOT NULL DEFAULT '0',
  `user_agent` varchar(120) NOT NULL,
  `last_activity` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `user_data` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ci_sessions`
--

INSERT INTO `ci_sessions` (`session_id`, `ip_address`, `user_agent`, `last_activity`, `user_data`) VALUES
('601c1a484844d1e119cb413de7fea850', '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/54.0.2840.98 Safari/537.36', 1481182018, ''),
('cd47942bd8b01d8eec47bb663c2b3db7', '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/54.0.2840.98 Safari/537.36', 1481181119, ''),
('7ea5f8b6b18eb6516bff2b6fc78ff245', '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/54.0.2840.98 Safari/537.36', 1481181058, ''),
('22c45016cf86ce3abf646a2f2ff8844c', '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/54.0.2840.98 Safari/537.36', 1481178238, ''),
('5d9b626f1ec4b21fbd349a2cf55a7e9d', '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/54.0.2840.98 Safari/537.36', 1481178358, ''),
('3cd383b01739f567782b1abc1ace41b3', '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/54.0.2840.98 Safari/537.36', 1481178478, ''),
('6433ecde79d1b62c523d74e763adff2c', '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/54.0.2840.98 Safari/537.36', 1481178538, ''),
('e6ba9af9302e1b123d92df1cb2d3a601', '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/54.0.2840.98 Safari/537.36', 1481178598, ''),
('f299784952a84b0e22e0667c2961b86b', '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/54.0.2840.98 Safari/537.36', 1481178778, ''),
('9dbd262be1202babfe9473c275bd8421', '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/54.0.2840.98 Safari/537.36', 1481179018, ''),
('1e417a8c9a84d98e89cd86f1f0451eee', '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/54.0.2840.98 Safari/537.36', 1481179078, ''),
('d61efdc29f24a472fe44dd490a101369', '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/54.0.2840.98 Safari/537.36', 1481179138, ''),
('cd7a0abca985bf21f42927149f0bb11b', '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/54.0.2840.98 Safari/537.36', 1481179378, ''),
('d2819fc9db946671e111c5c51d8afff8', '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/54.0.2840.98 Safari/537.36', 1481179438, ''),
('449737ee7060ec4f87b038e0f3f09e88', '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/54.0.2840.98 Safari/537.36', 1481179498, ''),
('79123925f7b0f4e1e539b63e87c94a91', '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/54.0.2840.98 Safari/537.36', 1481179559, ''),
('6bba17c083ceffbb6e6e4d5d2b1c3706', '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/54.0.2840.98 Safari/537.36', 1481179618, ''),
('4c9874477cf27911cbce9e667806a4ee', '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/54.0.2840.98 Safari/537.36', 1481179678, ''),
('13ac0caee8d5320e942945934fb7b546', '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/54.0.2840.98 Safari/537.36', 1481179739, ''),
('d7f2ce4f2ff6e31c34e2bd7633ab351e', '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/54.0.2840.98 Safari/537.36', 1481179799, ''),
('ae0a30bbd6536e0e760ffda225f3f2b6', '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/54.0.2840.98 Safari/537.36', 1481179858, ''),
('bc996dce5af5897e5b58b0c56a1afbc0', '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/54.0.2840.98 Safari/537.36', 1481179918, ''),
('fe16fe6889025a708c06f49ca70b5b10', '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/54.0.2840.98 Safari/537.36', 1481179978, ''),
('e1a9eaa48473977443185ea8db8ad663', '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/54.0.2840.98 Safari/537.36', 1481180038, ''),
('96a78a7aa86f436304169cf75aa441c4', '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/54.0.2840.98 Safari/537.36', 1481180098, ''),
('df300cb727e89aa1465ae377d4974b0f', '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/54.0.2840.98 Safari/537.36', 1481180158, ''),
('877ad1aed40a18ff33e4f1c061c5645c', '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/54.0.2840.98 Safari/537.36', 1481180218, ''),
('c6d19669caf03f36a3d90489f21b6aa3', '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/54.0.2840.98 Safari/537.36', 1481180278, ''),
('63f4ef12eed7a0f3f0c2494acfd2737e', '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/54.0.2840.98 Safari/537.36', 1481180338, ''),
('028721f2966bb575e2b1295605fe16b8', '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/54.0.2840.98 Safari/537.36', 1481180398, ''),
('af84b06f28f74c920a9eda14ef30c872', '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/54.0.2840.98 Safari/537.36', 1481180459, ''),
('267fb798ca36a5bada7f29c2e92082e0', '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/54.0.2840.98 Safari/537.36', 1481180519, ''),
('d05d58139192a5c535f35f26e194d807', '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/54.0.2840.98 Safari/537.36', 1481180578, ''),
('0ee6b9e264334b074e1d44ef72fcbf21', '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/54.0.2840.98 Safari/537.36', 1481180639, ''),
('397f9ef96537fc07a880a478b04cc353', '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/54.0.2840.98 Safari/537.36', 1481180699, ''),
('d13a172dd46d0d8138611ed65a12de42', '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/54.0.2840.98 Safari/537.36', 1481180758, ''),
('af4e9e49df2d3b99ac460952ffd90795', '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/54.0.2840.98 Safari/537.36', 1481180818, ''),
('fa6cabb5768b3911b8d0f0bc4b1ada89', '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/54.0.2840.98 Safari/537.36', 1481180878, ''),
('ba02534091530fd17a28316ccd730b3c', '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/54.0.2840.98 Safari/537.36', 1481180938, ''),
('af8dff837cf2625365ae5c5c09c295a3', '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/54.0.2840.98 Safari/537.36', 1481180998, ''),
('49d4cf61943ee36209929d922f24a0ba', '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/54.0.2840.98 Safari/537.36', 1481181658, ''),
('d72fc617a64c6ffe2b058eef68100ef5', '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/54.0.2840.98 Safari/537.36', 1481181598, ''),
('49c29fc16fce357955616e2e803f7769', '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/54.0.2840.98 Safari/537.36', 1481181538, ''),
('58ec84355ea3b0b76ac6434ecd1cebb6', '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/54.0.2840.98 Safari/537.36', 1481181478, ''),
('c0667f5ed6126f39953e91b69db5e61b', '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/54.0.2840.98 Safari/537.36', 1481181418, ''),
('a0f42da1b589387dc851bffc00e8c824', '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/54.0.2840.98 Safari/537.36', 1481178118, ''),
('849f53fa6df5a4c188ba71c1011a8428', '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/54.0.2840.98 Safari/537.36', 1481178058, ''),
('430d4ad3505550593ab1bda6260feaf7', '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/54.0.2840.98 Safari/537.36', 1481177998, ''),
('081ec26422b2ebc01d1a2a3afb4a42d6', '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/54.0.2840.98 Safari/537.36', 1481177878, ''),
('76c3dfc957bd61fc08f6ca75e50715b0', '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/54.0.2840.98 Safari/537.36', 1481177818, ''),
('9a17cca49a20cf2282f9746100674af9', '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/54.0.2840.98 Safari/537.36', 1481177338, ''),
('26f56915b9d2e68749138af025317ee0', '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/54.0.2840.98 Safari/537.36', 1481177278, ''),
('b921d8cf6808794c4062722d289b084d', '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/54.0.2840.98 Safari/537.36', 1481177218, ''),
('64179319fb2ec2e7fbc2f9a01cb75468', '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/54.0.2840.98 Safari/537.36', 1481177158, ''),
('c99493fda77c78e6d001d64df34bab29', '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/54.0.2840.98 Safari/537.36', 1481177098, ''),
('10b3905ae152f81849c7bf6495e057df', '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/54.0.2840.98 Safari/537.36', 1481177038, ''),
('deaf40430e08e0b8bd871a1dc0a355b8', '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/54.0.2840.98 Safari/537.36', 1481176978, ''),
('47eb3b58edd43b4fe899831b72e1513b', '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/54.0.2840.98 Safari/537.36', 1481219658, ''),
('3969bda3b6aca06e038db07ebd15c71f', '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/54.0.2840.98 Safari/537.36', 1481176558, ''),
('995e9729e9a004138cfc4a788a53a28e', '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/54.0.2840.98 Safari/537.36', 1481176438, ''),
('d17066de3807987206dd60fa9e9caf4e', '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/54.0.2840.98 Safari/537.36', 1481176138, ''),
('a0ab4531fa3bb4361a0b568f6cee9895', '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/54.0.2840.98 Safari/537.36', 1481176078, ''),
('0fe4c6a11473b097416177c034a04e88', '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/54.0.2840.98 Safari/537.36', 1481176019, ''),
('c915b5939289521bca60ef0d401e54e9', '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/54.0.2840.98 Safari/537.36', 1481175958, ''),
('6396700cb4ae7ea9bb6c61b22fc9e713', '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/54.0.2840.98 Safari/537.36', 1481175898, ''),
('1a10c0c78841ffc252cd2da99efd4ac6', '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/54.0.2840.98 Safari/537.36', 1481175598, ''),
('71009bcc5100fb2f2351a32d2685c6cc', '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/54.0.2840.98 Safari/537.36', 1481177698, ''),
('01f9d35977f3d26a2411a8e5ebaaf23f', '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/54.0.2840.98 Safari/537.36', 1481174938, ''),
('3c1a5c4d9ab2bbb61468f88264ff87b0', '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/54.0.2840.98 Safari/537.36', 1481174999, ''),
('66feb2f4e2d7d50ab47405f806bc490f', '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/54.0.2840.98 Safari/537.36', 1481175118, ''),
('5921930d1a33820c1e852c24f212c700', '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/54.0.2840.98 Safari/537.36', 1481175179, ''),
('682d7297e3ef6dd33631622ea22560c9', '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/54.0.2840.98 Safari/537.36', 1481175237, ''),
('2fc3dfb213584940b757c0a16c376cbf', '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/54.0.2840.98 Safari/537.36', 1481175299, ''),
('0f634a60a39d3d8df6bcd763e0c7e408', '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/54.0.2840.98 Safari/537.36', 1481175477, ''),
('58adff1978dc1ca0eb0bb0373917d852', '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/54.0.2840.98 Safari/537.36', 1481175658, ''),
('18102b434905ef37e56aab7ab7c38c0c', '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/54.0.2840.98 Safari/537.36', 1481175718, ''),
('67f6ad595a129416061fe7bbb3226dd5', '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/54.0.2840.98 Safari/537.36', 1481175777, ''),
('7b1a2a767d4f6b842eb54d950e37b1c8', '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/54.0.2840.98 Safari/537.36', 1481175839, ''),
('641f47ce9fa82b648f157ac965cb1450', '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/54.0.2840.98 Safari/537.36', 1481181358, ''),
('fa7a0b990aac08a850d7017c8388d1d1', '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/54.0.2840.98 Safari/537.36', 1481181298, ''),
('8741257c5a28cc7088b293448dc5ef8a', '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/54.0.2840.98 Safari/537.36', 1481181238, ''),
('419313e2325d89526dada574854be3ad', '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/54.0.2840.98 Safari/537.36', 1481181178, ''),
('59a33d97e809b952569dbc6d5b3d421f', '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/54.0.2840.98 Safari/537.36', 1481181958, ''),
('152430ad0699df095a46d88808031f7c', '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/54.0.2840.98 Safari/537.36', 1481181899, ''),
('148398f567095bc838eac58efee9f74a', '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/54.0.2840.98 Safari/537.36', 1481181838, ''),
('db04b539809569045c2853a60503ade1', '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/54.0.2840.98 Safari/537.36', 1481181779, ''),
('1a3fa37106868e7dd34f84731db426c7', '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/54.0.2840.98 Safari/537.36', 1481181719, ''),
('48730ab6a5409c756a6a317be51c37d3', '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/54.0.2840.98 Safari/537.36', 1481174578, ''),
('d216ca3331dec5f54067351daf399e5a', '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/54.0.2840.98 Safari/537.36', 1481177759, '');

-- --------------------------------------------------------

--
-- Table structure for table `data_banner`
--

CREATE TABLE `data_banner` (
  `banner_id` int(11) NOT NULL,
  `banner_foto` text,
  `banner_link` varchar(255) NOT NULL,
  `banner_page` enum('Home','Profile') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_banner`
--

INSERT INTO `data_banner` (`banner_id`, `banner_foto`, `banner_link`, `banner_page`) VALUES
(7, 'a0f05-0cf3b-4d37d-visimisi1.jpg', '#', 'Home'),
(8, '80712-1d0e1-0d82d-goaceh_vhe5s_54052.jpg', '', 'Home'),
(9, '7553a-3ac93-af054-dahlan-iskan-pabrik-kelapa-sawit-emisi1.jpg', '', 'Profile'),
(10, '34e80-5d7d4-c3a6d-perusahaan-kelapa-sawit2.jpg', '', 'Home'),
(11, '1ff07-6b252-a5269-aboutus2.jpg', '', 'Profile'),
(12, 'e4899-686f4-45318-warehouse2.jpg', '', 'Home'),
(13, 'd50b1-99599-29654-ourculture.jpg', '', 'Home');

-- --------------------------------------------------------

--
-- Table structure for table `data_branch`
--

CREATE TABLE `data_branch` (
  `branch_id` int(11) NOT NULL,
  `branch_nama` varchar(255) NOT NULL,
  `branch_alamat` text NOT NULL,
  `latitute` varchar(100) NOT NULL,
  `longitude` varchar(100) NOT NULL,
  `link_wa` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_branch`
--

INSERT INTO `data_branch` (`branch_id`, `branch_nama`, `branch_alamat`, `latitute`, `longitude`, `link_wa`) VALUES
(2, 'TEMBILAHAN', '<div>\r\n	JL. Tanjung Kilang Lorong Pak De NO.2 Tanjung Harapan</div>\r\n<div>\r\n	Tembilahan, Riau</div>\r\n<div>\r\n	&nbsp;</div>\r\n<div>\r\n	<strong>BP DEDY</strong>&nbsp; : <a href=\"http://https://api.whatsapp.com/send?phone=6285264057655&amp;text=Halo CV. NURANI JAYA / PT. NURANI JAYA ENERGI\">0852 6405 7655</a></div>\r\n', '', '', 'https://api.whatsapp.com/send?phone=6285264057655&text=Halo CV.NURANI JAYA/PT.NURANI JAYA ENERGI'),
(3, 'KALIMATAN TIMUR', '<div>\r\n	JL. Jakarta Blok Z NO.11 Komplek Korpri Samarinda</div>\r\n<div>\r\n	Kota Samarinda, Kalimantan Timur</div>\r\n<div>\r\n	&nbsp;</div>\r\n<div>\r\n	<strong>BP AGUS LEO</strong> : <a href=\"https://api.whatsapp.com/send?phone=6281253483689&amp;text=Halo CV. NURANI JAYA / PT. NURANI JAYA ENERGI\">0812 5348 3689</a></div>\r\n', '', '', 'https://api.whatsapp.com/send?phone=6281253483689&text=Halo CV.NURANI JAYA/PT.NURANI JAYA ENERGI'),
(4, 'PALU', '<div>\r\n	Perum Mandiri Indah Blok M N0.4 Depan RSUD Madani Mamboro</div>\r\n<div>\r\n	Palu, Sulawesi Tengah</div>\r\n<div>\r\n	&nbsp;</div>\r\n<div>\r\n	BP TIO <a href=\"https://api.whatsapp.com/send?phone=628122526395&amp;text=Halo CV.NURANI JAYA/PT.NURANI JAYA ENERGI\">0812 2526 395</a></div>\r\n', '', '', 'https://api.whatsapp.com/send?phone=628122526395&text=Halo CV.NURANI JAYA/PT.NURANI JAYA ENERGI');

-- --------------------------------------------------------

--
-- Table structure for table `data_gallery`
--

CREATE TABLE `data_gallery` (
  `gallery_id` int(11) NOT NULL,
  `produk_id` int(11) NOT NULL,
  `foto` text NOT NULL,
  `caption` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_gallery`
--

INSERT INTO `data_gallery` (`gallery_id`, `produk_id`, `foto`, `caption`) VALUES
(10, 15, '32eca-maris-square-figur.png', 'Maris Square'),
(11, 15, 'db53f-cover-belakang-edit.png', 'Denah Lokasi'),
(12, 16, '91e80-grand-maris-anyar-cover.png', 'Promo 1'),
(13, 16, '91f88-grand-maris-anyar-isi.png', 'Promo 2'),
(14, 16, 'c8bf4-xbanner-grand-maris.png', 'banner'),
(15, 17, 'cdaad-2-1-.jpg', 'Foto'),
(16, 17, 'c2126-3-1-.jpg', 'Foto 2'),
(17, 18, '67b84-banner-jalan-glagah.png', 'glagah'),
(18, 19, '57876-rumah-type-45.png', 'gambar 1'),
(19, 19, 'a9e5a-tipe36-tembok-pojok.png', 'gambar 2'),
(20, 19, 'b2a6b-marisland-front-view.png', 'front'),
(21, 23, '4363b-2a315e18-20f4-48ff-b4b2-d1e33a0de268.jpg', 'foto 1'),
(22, 23, '485a8-img_20150913_160335.jpg', 'foto 2'),
(23, 23, 'dfae9-img-20160809-wa0002.jpg', 'foto 3'),
(24, 23, '43168-01aea072-d0ec-4385-b8be-3dcfb551edf5.jpg', 'foto 4');

-- --------------------------------------------------------

--
-- Table structure for table `data_kategori`
--

CREATE TABLE `data_kategori` (
  `kategori_id` int(11) NOT NULL,
  `kategori_nama` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_kategori`
--

INSERT INTO `data_kategori` (`kategori_id`, `kategori_nama`) VALUES
(1, 'Head Protection'),
(2, 'Ear Protection'),
(3, 'Eye Protection'),
(4, 'Face Protection');

-- --------------------------------------------------------

--
-- Table structure for table `data_kontak`
--

CREATE TABLE `data_kontak` (
  `kontak_id` int(11) NOT NULL,
  `kontak_nama` varchar(255) NOT NULL,
  `kontak_email` varchar(255) NOT NULL,
  `kontak_phone` varchar(15) NOT NULL,
  `kontak_keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `data_news`
--

CREATE TABLE `data_news` (
  `news_id` int(11) NOT NULL,
  `news_foto` varchar(255) NOT NULL,
  `news_judul` varchar(255) NOT NULL,
  `news_konten` text NOT NULL,
  `news_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_news`
--

INSERT INTO `data_news` (`news_id`, `news_foto`, `news_judul`, `news_konten`, `news_date`) VALUES
(3, '90b18-pabrik-kelapa-sawit.jpg', 'Keunggulan CV. NJE sebagai supplier Pabrik Kelapa Sawit (PKS)', '<section class=\"entry-content\">\r\n	<p style=\"text-align: justify; line-height: normal;\">\r\n		<span style=\"font-size: 12pt; font-family: arial, helvetica, sans-serif; color: #000000;\">Mesin kelapa sawit memiliki peranan yang sangat penting di dalam sebuah pabrik pengolahan kelapa sawit. Ada berbagai jenis mesin canggih dibutuhkan di sana untuk melancarkan proses produksi kelapa sawit agar menghasilkan minyak. Memiliki mesin canggih pada sebuah pabrik adalah suatu bentuk investasi, karena harga mesin itu sendiri pun tidaklah murah. Sehingga melakukan perawatan terhadap mesin sangatlah penting dilakukan, jika terjadi kerusakan anda bisa menghubungi kami. Kami jual sparepart mesin pabrik sawit orisinil dan terjamin kualitasnya.</span></p>\r\n	<p style=\"text-align: justify; line-height: normal;\">\r\n		<span style=\"font-size: 12pt; font-family: arial, helvetica, sans-serif; color: #000000;\">Dengan pengalaman kami dibidang industry kelapa sawit, kami memiliki sparepart ready stock dan teknisi untuk membantu anda. Kami akan memberikan layanan terbaik bagi anda, selain jual sparepart mesin PKS orisinil kami akan memberikan anda layanan purna jual. Ada banyak keunggulan yang kami miliki sebagai perusahaan penyedia mesin PKS dan sparepartnya, seperti di bawah ini.</span></p>\r\n	<p style=\"text-align: justify; line-height: normal;\">\r\n		<span style=\"font-family: \'arial black\', \'avant garde\'; color: #000000; font-size: 14pt;\"><strong>5 Keunggulan Perusahaan Kami</strong></span></p>\r\n	<p style=\"text-align: justify; line-height: normal;\">\r\n		<span style=\"font-size: 12pt; font-family: arial, helvetica, sans-serif; color: #000000;\">Perusahaan kami menyediakan mesin dan sparepart berkualitas yang orisinil untuk industry kelapa sawit. Berikut kelebihan perusahaan kami dalam hal penyediaan mesin pks dan sparepartnya untuk industri PKS, yaitu:</span></p>\r\n	<p style=\"text-align: justify; line-height: normal;\">\r\n		<span style=\"font-family: \'arial black\', \'avant garde\'; color: #000000;\"><strong><span style=\"font-size: 13.5pt;\">1. Menyediakan Mesin Dengan Teknologi Terkini</span></strong></span></p>\r\n	<p style=\"text-align: justify; line-height: normal;\">\r\n		<span style=\"font-size: 12pt; font-family: arial, helvetica, sans-serif; color: #000000;\">Kami mensuplai pabrik pengolahan kelapa sawit anda dengan teknologi terkini dalam bidang insdustri kelapa sawit. Mesin yang mampu untuk membantu anda mencapai tujuan dan target pengolahan kelapa sawit anda. Karena tanpa menggunakan mesin canggih untuk pengolahan kelapa sawit, mustahil hasil pengolahan kelapa sawit anda akan memenuhi target</span></p>\r\n	<p style=\"text-align: justify; line-height: normal;\">\r\n		<span style=\"font-family: \'arial black\', \'avant garde\'; color: #000000;\"><strong><span style=\"font-size: 13.5pt;\">2. Mengetahui Brand Mesin PKS Yang Reliable</span></strong></span></p>\r\n	<p style=\"text-align: justify; line-height: normal;\">\r\n		<span style=\"font-size: 12pt; font-family: arial, helvetica, sans-serif; color: #000000;\">Dengan pengalaman kami yang sudah berpuluh-puluhan tahun, kami tahu mesin pengolahan yang baik dan reliable bagi konsumen. Banyak brand ternama yang mampu kami sediakan untuk perusahaan pengolahan anda. </span></p>\r\n	<p style=\"text-align: justify; line-height: normal;\">\r\n		<span style=\"font-family: \'arial black\', \'avant garde\'; color: #000000;\"><strong><span style=\"font-size: 13.5pt;\">3. Menyediakan Sparepart Untuk Mesin Yang Mengalami Kerusakan</span></strong></span></p>\r\n	<p style=\"text-align: justify; line-height: normal;\">\r\n		<span style=\"font-size: 12pt; font-family: arial, helvetica, sans-serif; color: #000000;\">Jika mesin anda mengalami kerusakan atau masalah saat digunakan untuk proses pengolahan kelapa sawit, serahkan kepada kami. Kami jual sparepart asli mesin pabrik sawit ready stock untuk perbaikan mesin yang mengalami kerusakan. Sehingga jalannya operasional perusahaan tidak terganggu dalam waktu yang lama.</span></p>\r\n	<p style=\"text-align: justify; line-height: normal;\">\r\n		<span style=\"font-family: \'arial black\', \'avant garde\'; color: #000000;\"><strong><span style=\"font-size: 13.5pt;\">4. Memberikan Layanan Purna Jual</span></strong></span></p>\r\n	<p style=\"text-align: justify; line-height: normal;\">\r\n		<span style=\"font-size: 12pt; font-family: arial, helvetica, sans-serif; color: #000000;\">Teknisi kami telah terlatih, akan membantu cek dan mengganti sparepart yang rusak dengan yang baru dan orisinil. Dan akan memastikan mesin pengolahan kelapa sawit anda dapat bekerja kembali dengan baik untuk memproses kelapa sawit anda. Sebelum melakukan pergantian sparepart anda bisa melakukan konsultasi terlebih dahulu agar tindakan yang dilakukan sesuai.</span></p>\r\n	<p style=\"text-align: justify; line-height: normal;\">\r\n		<span style=\"font-family: \'arial black\', \'avant garde\'; color: #000000;\"><strong><span style=\"font-size: 13.5pt;\">5. Dapat Memenuhi Semua Kebutuhan Mesin Untuk Industi PKS</span></strong></span></p>\r\n	<p style=\"text-align: justify; line-height: normal;\">\r\n		<span style=\"font-family: arial, helvetica, sans-serif; color: #000000;\"><span style=\"font-size: 12pt;\">Dengan pengalaman kami yang sangat lama di bidang industr</span><span style=\"font-size: 12pt;\">i</span><span style=\"font-size: 12pt;\"> kelapa sawit ini, maka kami mengetahui dengan baik mesin apa saja yang dibutuhkan. Dalam melakukan proses kelapa sawit menjadi minyak, banyak sekali mesin penunjang yang dibutuhkan. Kami dapat menyediakan semuanya untuk anda sehingga proses pembuatan minyak kelapa sawit menjadi lebih mudah. Selain menyediakan mesinnya kami jual onderdil mesin pabrik kelapa sawit asli untuk anda, jika mesin mengalami gangguan.</span></span></p>\r\n	<p style=\"text-align: justify; line-height: normal;\">\r\n		<span style=\"font-family: arial, helvetica, sans-serif; color: #000000;\"><span style=\"font-size: 12pt;\">Jadi jangan ragu lagi untuk menghubungi kontak perusahaan kami dan dapatkan layanan terbaik dari kami. Kami telah berpengalaman puluhan tahun di</span><span style=\"font-size: 12pt;\"> </span><span style=\"font-size: 12pt;\">bidang ini, percayakan kebutuhan mesin PKS anda dan sparepartnya pada perusahaan kami, maka kami akan memberikan yang terbaik untuk anda. Karena kami jual onderdil asli mesin PKS untuk perbaikan mesin PKS anda. Segera hubungi kontak perusahaan kami yang tersedia di website ini dan dapatkan layanan terbaik dari kami.</span></span></p>\r\n</section>\r\n', '2018-09-10'),
(4, '150cf-safetyequipment-specials1-424x270.jpg', 'Pentingnya alat safety dalam bekerja', '<p>\r\n	Sesuai dengan Permen No 08/Men/VII2010 yang dikeluarkan oleh Departemen Tenaga Kerja dan Transmigrasi, setiap perusahaan pada dasarnya wajib menyediakan beragam alat keselamatan kerja bagi keamanan dan kelancaran kinerja para karyawannya. Namun demikian, ada beberapa hal yang perlu dipertimbangkan sebelum pengadaan alat safety bagi perusahaan yang bersangkutan, seperti:</p>\r\n<ol>\r\n	<li>\r\n		Jumlah pegawai dan divisi yang ada dalam perusahaan dan membutuhkan pengadaan alat safety</li>\r\n	<li>\r\n		Jenis alat keselamatan yang perlu disediakan dan jumlahnya.</li>\r\n	<li>\r\n		Ukuran alat keselamatan yang disesuaikan dengan postur tubuh pekerja.</li>\r\n	<li>\r\n		Masa pakai yang ditoleransi oleh setiap alat atau dengan kata lain jangka waktu penggunaan alat saat digunakan untuk bekerja.</li>\r\n	<li>\r\n		Pemahaman dari para karyawan perusahaan yang bersangkutan dalam penggunaan alat.</li>\r\n</ol>\r\n<p>\r\n	Selain memperhatikan hal-hal diatas, Anda perlu memahami pula jenis maupun manfaat sebenarnya dari beragam alat keselamatan kerja, sebelum memfasilitasi pengadaannya.<br />\r\n	<br />\r\n	<strong>Apa itu peralatan K3?</strong><br />\r\n	<br />\r\n	Peralatan K3 (keamanan, kesehatan, dan keselamatan) adalah peralatan khusus yang perlu dipakai saat melakukan pekerjaan tertentu dan disesuaikan dengan resiko maupun bahaya yang mungkin didapatkan. Secara umum, pemakaian alat pelindung diri yang berhubungan dengan K3 bertujuan untuk melindungi pekerja yang bersangkutan dari beragam bahaya yang mungkin terjadi selama bekerja, sehingga pekerja tersebut dapat melakukan pekerjaannya dengan aman dan lancar<br />\r\n	<br />\r\n	<strong>Jenis Alat Safety</strong><br />\r\n	<br />\r\n	Ada beragam jenis alat safety yang selama ini beredar di pasaran dan beberapa diantaranya, yaitu:</p>\r\n<ol>\r\n	<li>\r\n		<strong>Sepatu safety</strong></li>\r\n</ol>\r\n<p style=\"margin-left: 40px;\">\r\n	Alat pengaman yang satu ini sering dijumpai di kawasan pabrik maupun lokasi konstruksi. Tujuan penggunaan sepatu safety antara lain melindungi pemakai sepatu agar tidak mudah terpeleset di area yang licin dan berlumpur, mencegah agar bagian kaki tidak terkontaminasi oleh cairan kimia, benda tajam (paku, pecahan kaca) maupun kemasukan mikroba berbahaya. Komponen yang dipakai untuk membuat sepatu safety secara umum terdiri dari bahan metal, polyester, dan kulit yang menjadikan sepatu ini cukup berat namun aman dipakai.</p>\r\n<p>\r\n	<strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 2. Safety gloves</strong></p>\r\n<p style=\"margin-left: 40px;\">\r\n	Safety gloves yang digunakan untuk keperluan industri umumnya akan berbeda dengan safety gloves yang diperlukan dalam dunia medis. Jika dilihat dari bahan pembuatnya, safety gloves ini diciptakan dengan beragam bahan, seperti karet lateks, kain wool, serta kain mori. Tujuannya adalah meminimalisir kontaminasi bahan berbahaya yang bisa memberikan penyakit atau resiko cacat pada bagian tangan</p>\r\n<p>\r\n	<strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 3. Safety helmet</strong></p>\r\n<p style=\"margin-left: 40px;\">\r\n	Salah satu jenis alat keselamatan yang banyak dijumpai di area konstruksi asalah safety helmet. Umumnya, alat ini dibuat dengan perpaduan bahan plastik tebal dilengkapi tali pengaman agar saat dipakai, helm tidak mudah lepas. Alat ini berfungsi melindungi bagian kepala dari benturan yang mungkin terjadi saat bekerja.</p>\r\n<p>\r\n	<strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 4. Ear plug/ ear muff</strong></p>\r\n<p style=\"margin-left: 40px;\">\r\n	Pada beberapa area konstruksi maupun pabrik yang memiliki polusi udara tinggi, Anda akan mudah menjumpai alat pelindung diri berupa ear plug ataau ear muff. Namun demikian, bentuk dan ukuran alat keselamatan kerja yang satu ini tentu berbeda dengan ear muff yang umum dipakai untuk menerima telpon atau mendengarkan musik. Alat keselamatan yang satu ini dibuat dengan perpaduan metal dan spons yang bertujuan menahan getaran serta suara bising, sehingga pekerja yang bersangkutan terhindar dari resiko kehilangan pendengaran.</p>\r\n<p>\r\n	<strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 5. Googles safety</strong></p>\r\n<p style=\"margin-left: 40px;\">\r\n	Googles safety adalah alat pelindung yang berfungsi melindungi bagian mata dari beragam bahaya seperti masuknya serpihan logam ke mata atau debu metal. Alat ini umumnya digunakan oleh paara pekerja yang berhubungan dengan industri mekanik (bagian pengelasan) atau industri lainnya.</p>\r\n<p>\r\n	<br />\r\n	<strong>Memilih Alat Safety yang tepat</strong><br />\r\n	<br />\r\n	Setelah Anda memahami jenis maupun fungsi dari beragam alat keselamatan, jangan langsung tergiur dengan harga murah pada saat Anda melihat iklan jual alat safety di media cetak maupun online. Saat transaksi, pastikan Anda menanyakan hal-hal berikut pada pihak penjual.</p>\r\n<ol>\r\n	<li>\r\n		Varian dan seri alat pelindung diri yang disediakan oleh penyedia jasa.</li>\r\n	<li>\r\n		Lokasi penyedia alat keselamatan dan cara transaksi yang paling aman ketika Anda berada di lokasi yang cukup jauh dari lokasi penyedia jasa.</li>\r\n	<li>\r\n		Harga alat safety yang dibutuhkan perusahaan (dalam hitungan pieces) dan bagaimana prosedur pembelian apabila ingin membeli alat keselamatan dalam jumlah yang cukup banyak.</li>\r\n</ol>\r\n', '2018-09-10'),
(5, 'ca466-safety-sign-indonesia-apd-penanganan-bahan-kimia-berbahaya.jpg', '5 Bahaya Kerja Yang Bisa Diatasi Dengan Alat Keselamatan Kerja', '<p>\r\n	Dalam setiap pekerjaan yang kita lakukan, tentu kita tidak akan terlepas dari bahaya penyakit akibat kerja (PAK). Karena itulah, selama bekerja setiap karyawan di perusahaan manapun membutuhkan alat perlindungan diri. Namun demikian, sebelum membeli&nbsp;alat keselamatan kerja, ada beberapa jenis bahaya dalam dunia kerja yang harus dipahami agar pemanfaatan&nbsp;alat safety&nbsp;tepat sasaran.</p>\r\n<p>\r\n	<b>BAHAYA KIMIA</b></p>\r\n<p>\r\n	Bahaya kimia adalah bahaya dalam proses kerja yang disebabkan oleh gas, larutan kimia, debu, atau&nbsp;<i>hazard chemical</i>&nbsp;yang mampu menyebabkan pekerja yang terpapar mengalami penyakit berbahaya seperti leukimia atau pneumonia. Dalam dunia kerja, bahaya seperti ini bisa dihindari dengan pemakaian masker, insulated clothing maupun lainnya.</p>\r\n<p>\r\n	<b>BAHAYA FISIKA</b></p>\r\n<p>\r\n	Bahaya fisika adalah salah satu jenis bahaya yang ditimbulkan oleh beragam penyebab yang dapat dikategorikan, sebagi berikut.</p>\r\n<p style=\"margin-left: 40px;\">\r\n	<strong>a.&nbsp;&nbsp; Kebisingan</strong></p>\r\n<p style=\"margin-left: 40px;\">\r\n	Bahaya kebisingan umumnya dijumpai di lingkungan konstruksi yang seringkali menggunakan alat berat dan mampu merusak sistem pendengaran apabila bahaya kebisingan didengar terus menerus. Itu sebabnya, salah satu alat yang bisa digunakan sebagai pelindung adalah ear muff atau ear plug.</p>\r\n<p style=\"margin-left: 40px;\">\r\n	<strong>b.&nbsp;&nbsp; Vibrasi</strong></p>\r\n<p style=\"margin-left: 40px;\">\r\n	Ketika seorang pekerja terus menerus memegang alat drill atau alat yang menghasilkan getaran (vibrasi) tinggi, maka pekerja yang bersangkutan akan mengalami cidera di bagian lengannya dan oleh karena itu, salah satu alat pelindung yang bisa digunakan adalah safety gloves mupun bandage.</p>\r\n<p style=\"margin-left: 40px;\">\r\n	<strong>c.&nbsp;&nbsp;&nbsp; Suhu</strong></p>\r\n<p style=\"margin-left: 40px;\">\r\n	Bahaya fisika selama bekerja juga bisa ditimbulkan oleh suhu panas yang menerpa tubuh pekerja terus menerus. Untuk menanggulangi hal tersebut, salah satu&nbsp;alat safety&nbsp;yang bisa digunakan adalah safey gloves, safety googles, vest, dan lainnya.</p>\r\n<p>\r\n	<b>BAHAYA BIOLOGIS</b></p>\r\n<p>\r\n	Bahaya biologis umumnya disebabkan oleh mikroba berupa bakteri, jamur, atau virus. Umumnya, pekerja di lingkungan tambang maupun dunia medis perlu menggunakan alat keselamatan untuk menjaga agar tubuh tidak terkontaminasi organisme berbahaya, seperti sepatu safety, googles, masker, dan lainnya.</p>\r\n<p>\r\n	<b>BAHAYA PSIKOSOSIAL</b></p>\r\n<p>\r\n	Bahaya psikososial berhubungan dengan pekerjaan yang monoton dan beban kerja yang tidak seimbang jika dibandingkan dengan penghasilan yang diperoleh.</p>\r\n<p>\r\n	<b>BAHAYA FISIOLOGIS </b></p>\r\n<p>\r\n	Bahaya fisiologis adalah jenis bahaya yang sering disebabkan oleh posisi yang salah selama bekerja dan dapat menimbulkan penyakit seperti LBP (low back pain) maupun cidera. Untuk meminimalisir beragam penyakit yang berhubungan dengan bahaya fisiologis, pekerja yang bersangkutan bisa melengkapi dirinya dengan alat-alat seperti sleeves, safety harness (saat bekerja diatas ketinggian tertentu), dan alat lainnya. Dari beragam&nbsp;alat keselamatan kerja&nbsp;diatas, ada beberapa hal yang perlu Anda perhitungkan saat Anda dipercaya menghubungi perusahaan yang menyediakan alat pelindung diri. Hal tersebut perlu dilakukan sebelum menjatuhkan pilihan, karena Anda tidak boleh mudah percaya dengan iklan&nbsp;jual alat safety&nbsp;yang muncul di pasaran.</p>\r\n<p>\r\n	<strong>JENIS KEBUTUHAN PERUSAHAAN</strong></p>\r\n<p>\r\n	Hal pertama yang perlu dipikirkan saat pengadaan alat keselamatan adalah jenis kebutuhan perusahaan. Hal ini karena jenis kebutuhan antara perusahaan satu umumnya akan berbeda dengan perusahaan lainnya. Sebagai contoh saat Anda bekerja di perusahaan pertambangan, jenis alat pelindung diri yang harus dimiliki antaralain sepatu safety, googles, masker dalam bentuk masker respirator maupun masker biasa, ear plug, dan sfety harness. Pemesanan alat tersebut tentu akan berbeda dengan teman Anda yang bekerja di laboratorium, dimana secara umum, para pekerjanya hanya membutuhkan safety gloves, masker, disposable clothng, maupun insulated clothing.</p>\r\n<p>\r\n	<strong>DESAIN DAN UKURAN ALAMT KESELAMATAN</strong></p>\r\n<p>\r\n	Saat pemesanan dan pembelian alat pelindung diri yang sesuai dengan standar K3, Anda perlu melihat desain maupun ukuran alat pelindung yang bersangkutan. Dengan demikian, tubuh para pekerja benar-benar terlindungi dari beragam bahaya proses kerja dan mampu menjalankan tugas tepat waktu.</p>\r\n', '2018-09-09'),
(9, '6c5b0-f9d7106a-7aa8-4542-8566-10be3c6a2ea3.jpeg', 'Tips merawat alat safety supaya awet digunakan', '<blockquote>\r\n	<div>\r\n		<div dir=\"ltr\">\r\n			<div>\r\n				<p class=\"yiv8884939430MsoNormal\">\r\n					Membeli alat pelindung kerja tersedia secara online. Anda dapat membeli alat-alat pelindung kerja melalui toko&nbsp;Jual Alat Safety&nbsp;yang dapat dipercaya. Dalam memakai alat pelindung kerja juga harus sesuai dengan tata cara yang ada. Tujuannya adalah agar alat tersebut awet. Tentu Anda tidak ingin membeli alat pelindung kerja terlalu sering hanya karena tidak awet. Sehingga agar alat pelindung kerja Anda awet selama pemakaian, ketahuilah tips merawat secara tepat seperti di bawah ini.</p>\r\n				<p class=\"yiv8884939430MsoNormal\">\r\n					<b>Pakai Alat Pelindung Kerja secara Tepat</b></p>\r\n				<p class=\"yiv8884939430MsoNormal\">\r\n					Rawatlah alat pelindung kerja dengan memakainya secara tepat. Artinya, Anda memakai alat pelindung kerja tersebut sesuai dengan fungsinya. Setelah selesai digunakan, maka Anda harus segera membersihkannya jika kotor. Jika tidak kotor, maka simpan pada wadahnya kembali. Pemakaian yang baik dan tepat tentu membuat alat pelindung kerja tidak cepat rusak selama digunakan.</p>\r\n				<p class=\"yiv8884939430MsoNormal\">\r\n					<b>Periksa Alat Pelindung Kerja Setiap Kali Hendak dipakai</b></p>\r\n				<p class=\"yiv8884939430MsoNormal\">\r\n					Demi keselamatan saat bekerja dan merawat alat pelindung kerja agar tetap awet, maka selalu ingat untuk memeriksanya. Setiap kali Anda hendak memakai alat pelindung kerja, maka periksa terlebih dahulu. Apakah terdapat kerusakan atau tidak. Ketika terjadi kerusakan, maka Anda dapat memperbaikinya terlebih dahulu selama masih dalam batas wajar. Jika tidak ada kerusakan, maka Anda dapat memakainya secara aman. Melakukan pemeriksaan terhadap alat pelindung kerja sangat penting untuk mencegah risiko berbahaya ketika alat tersebut rusak atau sudah tidak layak pakai.</p>\r\n				<p class=\"yiv8884939430MsoNormal\">\r\n					<b>Tidak digunakan untuk Orang Banyak</b></p>\r\n				<p class=\"yiv8884939430MsoNormal\">\r\n					Sebuah alat dapat awet ketika tidak digunakan orang banyak. Sebagai contoh, untuk&nbsp;Alat Safety&nbsp;Googles atau kacamata pelindung kerja, akan awet selama hanya digunakan oleh seorang pekerja. Namun, ketika kacamata pelindung kerja tersebut dipakai oleh pekerja yang berbeda, maka akan rentan terhadap kerusakan. Selain dipakai oleh orang yang berbeda, cara pemakaiannya pun berbeda meskipun sesuai dengan petunjuk pemakaian. Semakin banyak orang memakai alat pelindung kerja secara bersama-sama, maka alat tersebut akan cepat rusak. Sehingga pastikan setiap pekerja memiliki alat pelindung kerja sendiri agar dapat dirawat secara tepat.</p>\r\n				<p class=\"yiv8884939430MsoNormal\">\r\n					<b>Kenali Alat Pelindung Kerja yang Dapat dipakai Berkali-kali dan Tidak</b></p>\r\n				<p class=\"yiv8884939430MsoNormal\">\r\n					Tidak semua alat pelindung kerja dapat Anda pakai berkali-kali. Ada jenis alat pelindung kerja yang hanya dapat dipakai satu sampai tiga kali pemakaian, kemudian harus Anda buang. Seperti sarung tangan yang terbuat dari karet. Fungsi sarung tangan adalah melindungi tangan dari bahan kimia maupun kotoran lainnya. Selama kondisi sarung tangan masih dapat dibersihkan, maka tidak masalah untuk dipakai kembali. Namun, ketika kondisi sarung tangan sudah kotor, maka lebih baik ganti dengan yang baru.</p>\r\n				<p class=\"yiv8884939430MsoNormal\">\r\n					<b>Berikan Ruang Khusus untuk Menyimpan Alat Pelindung Kerja</b></p>\r\n				<p class=\"yiv8884939430MsoNormal\">\r\n					Demi menjaga keawetan dari alat pelindung kerja yang Anda miliki, maka simpan alat-alat tersebut di ruang khusus. Simpanlah alat pelindung kerja pada ruangan yang hanya khusus untuk alat-alat pelindung kerja. Sehingga tidak akan tercampur-baur dan tercemar kotoran dari alat lain. Terlebih lagi, Anda akan lebih mudah mengambil dan menata kembali alat pelindung kerja yang dipilih. Tanpa perlu bingung mencarinya terlebih dahulu karena alasan lupa saat menyimpan.</p>\r\n				<p class=\"yiv8884939430MsoNormal\">\r\n					<b>Pengecekan Umur Pakai dari Alat Pelindung Kerja yang dimiliki</b></p>\r\n				<p class=\"yiv8884939430MsoNormal\">\r\n					Seiring dengan perkembangan zaman, maka untuk produk alat pelindung kerja juga mengalami pembaharuan. Biasanya terdapat perbaikan standar kualitas untuk produk alat pelindung kerja tertentu. Sehingga lakukan pengecekan umur pakai dan kode produksi dari alt-alat pelindung kerja yang Anda miliki. Jika Anda memiliki alat pelindung kerja yang masih layak dipakai, namun sudah diproduksi dengan standar yang lebih baik, maka ganti dengan yang baru. Selain itu, jika Anda memiliki alat pelindung kerja yang sudah berumur lama, namun belum pernah diganti karena masih layak dipakai, lebih baik ganti dengan yang baru. terlebih jika alat pelindung kerja tersebut sudah berumur lebih dari dua tahun.</p>\r\n				<p class=\"yiv8884939430MsoNormal\">\r\n					Itulah tips merawat&nbsp;Alat Keselamatan Kerja&nbsp;agar selalu awet untuk dipakai. Sebuah alat pelindung kerja perlu perawatan khusus dari pemakaianya sehingga dapat tetap berfungsi dengan baik. Sehingga pastikan Anda selalu meluangkan waktu melakukan perawatan dari setiap alat pelindung kerja yang dimiliki.</p>\r\n			</div>\r\n		</div>\r\n	</div>\r\n</blockquote>\r\n<p>\r\n	&nbsp;</p>\r\n', '0000-00-00'),
(10, '3ae65-safety-equipment-category-photo.jpg', 'ASPEK YANG PERLU DIPERHATIKAN DALAM MEMBELI ALAT SAFETY', '<p>\r\n	Saat perusahaan tempat Anda bekerja ingin membeli&nbsp;alat safety,&nbsp;tentu ada beberapa hal yang perlu dipertimbangkan agar nantinya pemanfaatan alat pelindung diri benar-benar tepat sasaran. Berikut adalah beberapa aspek yang perlu dipikirkan saat berniat membeli alat pelindung setelah melihat iklan&nbsp;jual alat safety&nbsp;dari penyedia jasa.</p>\r\n<p>\r\n	<b>JENIS ALAT SAFETY</b></p>\r\n<p>\r\n	Sampai saat ini, ada beragam jenis&nbsp;alat safety&nbsp;yang proses pemesanan, pembelian, maupun penggunaannya perlu disesuaikan dengan kondisi kerja dari perusahaan pembeli, seperti:</p>\r\n<p style=\"margin-left: 40px;\">\r\n	<strong>a. High visible clothing</strong></p>\r\n<p style=\"margin-left: 40px;\">\r\n	Alat keselamatan yang satu ini umumnya berbentuk rompi atau pakaian jaring yang dilengkapi dengan media fluorescense sehingga saat malam pemakainya tetap terlindung dan bisa dilihat dari jauh, mengingat pakaian ini mampu membiaskan cahaya hijau atau kuning terang. Alat pelindung yang satu ini umum dipakai oleh pekerja di perusahaan konstruksi maupun polisi lalulintas.</p>\r\n<p style=\"margin-left: 40px;\">\r\n	<strong>b. Chemical protective clothing</strong></p>\r\n<p style=\"margin-left: 40px;\">\r\n	Pemakai pakaian ini umumnya adalah pekerja di lingkungan radiatif maupun industri pengolahan bahan kimia. Dengan perpaduan bahan polymer, kain katun, dan bahan lain, alat pelindung yang satu ini mampu melindungi tubuh pemakainya dari bahaya biologis maupun kimia.</p>\r\n<p style=\"margin-left: 40px;\">\r\n	<strong>c. Flame resistant clothing</strong></p>\r\n<p style=\"margin-left: 40px;\">\r\n	Pelindung diri dalam bentuk flame resistant clothing umumnya diperlukan oleh perusahaan pemada kebakaran yang perlu memastikan para karyawannya tidak terpapar panas api berlebih pada saat berusaha memadamkan kebakaran.</p>\r\n<p style=\"margin-left: 40px;\">\r\n	<strong>d. Googles safety</strong></p>\r\n<p style=\"margin-left: 40px;\">\r\n	Sampai saat ini, ada beragam bentuk dan bahan yang digunakan untuk membuat alat googles safety. Umumnya, perusahaan yang membutuhkan peralatan ini adalah perusahaan yang bidang usahanya berhubungan dengan produksi mesin pabrik, alat rumah tangga, maupun perusahaan penelitian.</p>\r\n<p style=\"margin-left: 40px;\">\r\n	<strong>e. Masker respirator</strong></p>\r\n<p style=\"margin-left: 40px;\">\r\n	Alat keselamatan kerja&nbsp;yang satu ini dibutuhkan oleh para pekerja yang bekerja di lingkungan industri kimia dimana udara didalamnya tercemar polutan dari beragam senyawa beracun. Masker respirator umumnya dilengkapi dengan komponen penyaring udara yang memungkinkan para pemakainya tetap menghirup udara sehat.</p>\r\n<p style=\"margin-left: 40px;\">\r\n	<strong>f. Safety shoes</strong></p>\r\n<p style=\"margin-left: 40px;\">\r\n	Safety shoes yang terbuat dari komponen metal, kain, dan kulit umumnya memiliki desain yang disesuaikan dengan lingkungan pemakainya. Namun demikian, umumnya alat pelindung diri yang satu ini digunakan untuk melintas di area berlumpur, berduri, maupun tanah penuh kontaminan.</p>\r\n<p>\r\n	<b>PAPARAN BAHAYA YANG INGIN DITANGGULANGI</b></p>\r\n<p>\r\n	Sampai saat ini ada beragam faktor bahaya yang harus ditanggulangi oleh para pekerja dengan pemakaian&nbsp;alat keselamatan kerja&nbsp;agar pekerja yang bersangkutan tidak menderita penyakit berbahaya. Adapun jenis bahaya yang perlu ditanggulangi antaralain bahaya kimia, fisikia, biologis, ergonomi, dan psikososial.</p>\r\n<p>\r\n	<b>PROSEDUR KESELAMATAN PERUSAHAAN</b></p>\r\n<p>\r\n	Setiap perusahaan pasti akan melengkapi kegiatan operasionalnya dengan prosedur keselamatan, seperti penyediaan alat pemadam kebakaran, jalur evakuasi darurat, dan lainnya. Namun demikian, hal tersebut pastinya belum terasa cukup mengingat sebuah perusahaan memiliki divisi yang berbeda (divisi managerial dan divisi lapangan). Karena itulah, pengadaan alat keselamatan sangat perlu diseimbangkan dengan prosedur keselamatan kerja yang sudah lebih dulu diterapkan perusahaan yang bersangkutan.</p>\r\n<p>\r\n	<b>JUMLAH PEKERJA DALAM PERUSAHAAN</b></p>\r\n<p>\r\n	Dalam pengurusan K3 ada rasio penyediaan alat keselamatan yang harus disesuaikan jumlahnya dengan jumlah pekerja di perusahaan bersangkutan. Dengan demikian, semua pekerja akan terlindung dari beragam bahaya yang mengancam keselamatan dan kesehatannya. Saat Anda ditunjuk untuk membeli alat pelindung diri demi keselamatan pegawai, periksa kebutuhan setiap divisi yang ada di perusahaan dan prosentase resiko kecelakaan kerja dari pekerja di divisi yang bersangkutan.</p>\r\n<p>\r\n	<b>PROSEDUR PENGGUNAAN ALAT</b></p>\r\n<p>\r\n	Saat membeli&nbsp;alat keselamatan kerja, Anda perlu memahami prosedur penggunaan alat terlebih dahulu, agar kapanpun Anda bisa memberikan pembelajaran pada karyawan yang belum terbiasa menggunakan alat pelindung diri dan mengajarkan cara perawatan alat.</p>\r\n<p>\r\n	<b>TRACK RECORD PERUSAHAAN JASA</b></p>\r\n<p>\r\n	Hal berikutnya yang perlu dipikirkan adalah masalah track record perusahaan jasa dengan melihat beberapa hal, seperti:</p>\r\n<p>\r\n	<strong>a. Tata cara transaksi</strong></p>\r\n<p>\r\n	Tanyakan pada penyedia jasa, berapa minimal alat yang bisa diperoleh dari perusahaan yang bersangkutan dan tata cara transaksinya. Agar lebih aman, akan lebih baik jika Anda memilih perusahaan penyedia&nbsp;alat safety&nbsp;yang bisa diajak kerjasama jangka panjang.</p>\r\n<p>\r\n	<strong>b. Garansi produk</strong></p>\r\n<p>\r\n	Saat melihat iklan&nbsp;jual alat safety&nbsp;yang ditawarkan penyedia jasa, tanyakan pula prosedur garansi yang ditetapkan agar alat yang rusak atau tidak sesuai pesanan bisa segera ditukar.</p>\r\n', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `data_produk`
--

CREATE TABLE `data_produk` (
  `produk_id` int(11) NOT NULL,
  `kategori_id` int(11) NOT NULL,
  `sort` int(11) NOT NULL DEFAULT '0',
  `banner` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `harga` decimal(15,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_produk`
--

INSERT INTO `data_produk` (`produk_id`, `kategori_id`, `sort`, `banner`, `nama`, `deskripsi`, `harga`) VALUES
(2, 1, 200, '63695-msafullsos.jpg', 'HELM FULL BRIM SOS', '<p>\n	HELM FULL BRIM SOS</p>\n', '900000.00'),
(3, 0, 100, '6800a-globe-valves-bronze.jpg', 'GLOBE VALVES BRONZE', '<p>\n	GLOBE VALVES BRONZE</p>\n', '120000.00'),
(4, 0, 300, '321ff-fire-man-suit-nomex-81a.jpg', 'FIRE MAN SUIT NOMEX 81A', '<p>\n	FIRE MAN SUIT NOMEX 81A</p>\n', '300000.00'),
(14, 1, 0, '0758c-fast-track.jpg', 'FAST TRACK', '<p>\r\n	FAST TRACK</p>\r\n', '0.00'),
(15, 1, 0, 'cfbe2-tali-dagu-elastic.jpg', 'TALI DAGU ELASTIC ', '<p>\r\n	TALI DAGU ELASTIC</p>\r\n', '0.00'),
(106, 7, 0, 'a3b3e-rompi-polyester.jpg', 'ROMPI POLYESTER', '<p>\r\n	ROMPI POLYESTER</p>\r\n', '0.00'),
(107, 7, 0, 'ca48c-rompi-v.jpg', 'ROMPI V', '<p>\r\n	ROMPI V</p>\r\n', '0.00'),
(108, 7, 0, '1b7ea-rompi-6-kantong.jpg', 'ROMPI 6 KANTONG', '<p>\r\n	ROMPI 6 KANTONG</p>\r\n', '0.00');

-- --------------------------------------------------------

--
-- Table structure for table `data_profile`
--

CREATE TABLE `data_profile` (
  `profile_id` int(11) NOT NULL,
  `profile_ket` text,
  `overview` text,
  `link_ig` varchar(255) NOT NULL,
  `link_tw` varchar(255) NOT NULL,
  `link_fb` varchar(255) NOT NULL,
  `link_yt` varchar(255) NOT NULL,
  `link_wa` varchar(255) NOT NULL,
  `headoffice` text NOT NULL,
  `catalog` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_profile`
--

INSERT INTO `data_profile` (`profile_id`, `profile_ket`, `overview`, `link_ig`, `link_tw`, `link_fb`, `link_yt`, `link_wa`, `headoffice`, `catalog`) VALUES
(1, '<p>\n	CV. NURANI JAYA ENGINEERING didirikan pada bulan Juli 2012 dengan bidang usaha supplier barang PKS (Pabrik Kelapa Sawit). Melihat prospek dan sambutan dari customer yang cukup menjanjikan maka pada bulan Oktober 2012 didirikanlah PT.NURANI JAYA ENERGI demi meningkatkan pelayanan kepada para customer, terutama customer wilayah KEPRI.<br />\n	<br />\n	Seiring dengan bertambahnya jumlah customer dan sejalan dengan komitmen perusahaan untuk menyediakan pelayanan barang da;am waktu yang secepatnya untuk menunjang kinerja customer, maka pada bulan Februari 2015 didirikanlah cabang CV.NJE Samarinda Kalimantan Timut untuk melayani customer wilayah Kalimantan dan Sulawesi.<br />\n	<br />\n	Komitmen Utama Peruahaan dalam memberikan pelayanan TERBAIK, TERCEPAT dan TERPERCAYA bagi customer. Oleh karena itu, kami CV.NJE dan PT.JNE akan terus menambah jumlah cabang untuk mendukung pelayanan TERBAIK, TERCEPAT dan TERPERCAYA</p>\n<p>\n	<strong>VISI</strong><br />\n	<br />\n	Menjadi perusahaan supplier terpercaya yang berdasarkan kebersamaan, endless growth dan saling menguntungkan dengan memberikan pelayanan yang tercepat, terlengkap dan terbaik kepada customer, principal dan share holder.<br />\n	<br />\n	<strong>MISI</strong></p>\n<ol>\n	<li>\n		Menjaga kepercayaan customer, principal dan share holder untuk kelangsungan hubungan bisnis yang saling menguntungkan dan berkesinambungan</li>\n	<li>\n		Sebagai wadah untuk tumbuh, belajar dan berkembang bersama sebagai satu kesatuan untuk mencapai sukses bersama</li>\n	<li>\n		Fokus pada pengembangan jaringan distribusi untuk dapat memberikan pelayanan tercepat dan terlengkap bagi customer</li>\n	<li>\n		Memberikan garansi produk terbaik untuk menjada kepercayaan dan kepuasan customer</li>\n</ol>\n<p>\n	&nbsp;</p>\n<p>\n	<strong>OUR CULTURE : WE SUPPLY FROM H E A R T</strong><br />\n	<br />\n	<strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; H: HEART</strong></p>\n<p style=\"margin-left: 40px;\">\n	Heart to serve and work with sincere heart to provide the best service and work result</p>\n<p style=\"margin-left: 40px;\">\n	<strong>E: ENDLESS GROWTH </strong></p>\n<p style=\"margin-left: 40px;\">\n	Always learn, grow and realizing the endless learning process to try to acchine excellence achievement in every aspect of life</p>\n<p style=\"margin-left: 40px;\">\n	<strong>A: AMBITION </strong></p>\n<p style=\"margin-left: 40px;\">\n	Always maintain ambitious attitude to become the best in providing service and work result as an indvidual as well as a Team Member</p>\n<p style=\"margin-left: 40px;\">\n	<strong>R : RESPONSIBILITY </strong></p>\n<p style=\"margin-left: 40px;\">\n	Become a responsible person as well as team member to achieve greater success together</p>\n<p style=\"margin-left: 40px;\">\n	<strong>T: TEAM WORK </strong></p>\n<p style=\"margin-left: 40px;\">\n	Acknowledge that Great Success come from Great Team Work</p>\n', '<p>\n	lorem ipsum dolor sit amet&nbsp;lorem ipsum dolor sit ametlorem ipsum dolor sit amet&nbsp;lorem ipsum dolor sit ametlorem ipsum dolor sit amet&nbsp;lorem ipsum dolor sit ametlorem ipsum dolor sit amet&nbsp;lorem ipsum dolor sit amet&nbsp;lorem ipsum dolor sit ametlorem ipsum dolor sit ametlorem ipsum dolor sit amet&nbsp;lorem ipsum dolor sit ametlorem ipsum dolor sit amet&nbsp;lorem ipsum dolor sit ametlorem ipsum dolor sit amet&nbsp;lorem ipsum dolor sit amet&nbsp;lorem ipsum dolor sit amet&nbsp;lorem ipsum dolor sit ametlorem ipsum dolor sit amet&nbsp;lorem ipsum dolor sit amet&nbsp;lorem ipsum dolor sit ametlorem ipsum dolor sit amet</p>\n', 'https://www.instagram.com/', 'https://twitter.com/', 'https://www.facebook.com/', '#', 'https://api.whatsapp.com/send?phone=6285100633893&text=Halo CV.NURANI JAYA/PT.NURANI JAYA ENERGI', '<div>\n	JL. Bukit Barisan NO 20, Tenayan Raya</div>\n<div>\n	Tangkerang Timur, Pekanbaru, Riau 28131</div>\n<div>\n	(Depan SMU Negeri 10 Pekanbaru)&nbsp;</div>\n<div>\n	&nbsp;</div>\n<div>\n	Telp / WA : <a href=\"https://api.whatsapp.com/send?phone=6285100633893&amp;text=Halo CV.NURANI JAYA/PT.NURANI JAYA ENERGI\">0851-0063-3893</a></div>\n<div>\n	Fax : 0761- 8405-521</div>\n<div>\n	Email : nurani_je@yahoo.com</div>\n<div>\n	Website : <a href=\"http://www.nuranijaya.co.id\">http://www.nuranijaya.co.id</a></div>\n', 'aed7a-installation_guide.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `data_user`
--

CREATE TABLE `data_user` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `user_password` varchar(100) NOT NULL,
  `is_delete` tinyint(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_user`
--

INSERT INTO `data_user` (`user_id`, `user_name`, `user_password`, `is_delete`) VALUES
(1, 'admin', 'O5y0YYWTVJf8C8z9D0QamDEC8imFnLcZFAFbi7ISPFovtFVL1KQihM7S0wa5y0ml8ylzg2+o81+YyiLoHqauQA==', 0);

-- --------------------------------------------------------

--
-- Table structure for table `faq`
--

CREATE TABLE `faq` (
  `faq_id` smallint(6) NOT NULL,
  `faq_ask` text NOT NULL,
  `faq_answer` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faq`
--

INSERT INTO `faq` (`faq_id`, `faq_ask`, `faq_answer`) VALUES
(1, 'Bagaimana cara pengiriman?', 'pengiriman kami lakukan menggunakan jasa JnE, pengiriman dilakukan setelah pembayaran selesai'),
(2, 'Apakah bisa retur produk?', 'Retur produk tidak bisa dilakukan. produk yang sudah dibeli tidak dapat dikembalikan lagi'),
(3, ' Bagaimana cara memesan?', 'Silahkan pilih barang yang akan dibeli, kemudian hubungi kami melalui informasi yang ada di website. ');

-- --------------------------------------------------------

--
-- Table structure for table `howto`
--

CREATE TABLE `howto` (
  `howto_id` smallint(6) NOT NULL,
  `howto_step` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `howto`
--

INSERT INTO `howto` (`howto_id`, `howto_step`) VALUES
(1, 'Masuk ke website'),
(2, ' Pilih Barang yang ingin dibeli'),
(3, ' Setelah memilih, hubungi nomor kontak yang tertera di website'),
(4, ' Informasikan barang yang akan dibeli kepada tim CS kami'),
(5, ' Lakukan pembayaran sesuai total biaya '),
(6, ' Setelah pembayaran selesai, tim kami akan segera mengirimkan barang pesanan ke alamat Anda');

-- --------------------------------------------------------

--
-- Table structure for table `setting_tema`
--

CREATE TABLE `setting_tema` (
  `tema_id` int(11) NOT NULL,
  `tema_nama` varchar(255) NOT NULL,
  `tema_folder` varchar(255) NOT NULL,
  `tema_gambar` varchar(255) NOT NULL,
  `tema_gambar2` varchar(255) NOT NULL,
  `tema_gambar3` varchar(255) NOT NULL,
  `tema_aktif` tinyint(1) NOT NULL,
  `is_default` tinyint(1) NOT NULL,
  `is_permanent` tinyint(1) NOT NULL,
  `is_delete` tinyint(1) NOT NULL,
  `last_update` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `last_user_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `setting_tema`
--

INSERT INTO `setting_tema` (`tema_id`, `tema_nama`, `tema_folder`, `tema_gambar`, `tema_gambar2`, `tema_gambar3`, `tema_aktif`, `is_default`, `is_permanent`, `is_delete`, `last_update`, `last_user_id`) VALUES
(1, 'Default', 'default', '8a9e6-fb1.jpg', '906d5-maintenance.jpg', 'daf6b-1.png', 1, 1, 0, 0, '2016-05-19 03:01:24', 1);

-- --------------------------------------------------------

--
-- Table structure for table `testimonial`
--

CREATE TABLE `testimonial` (
  `testimonial_id` smallint(6) NOT NULL,
  `testimonial_foto` varchar(255) NOT NULL,
  `testimonial_nama` varchar(200) NOT NULL,
  `testimonial_ket` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `testimonial`
--

INSERT INTO `testimonial` (`testimonial_id`, `testimonial_foto`, `testimonial_nama`, `testimonial_ket`) VALUES
(1, '5810b-09102018093121download.jpg', 'Yogi Kusnandar', '<p>\n	sangat nyaman berbelanja di sini.good</p>\n'),
(2, 'd640c-download1.jpg', 'Bambang Setiawan', '<p>\n	Recommended</p>\n');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ci_sessions`
--
ALTER TABLE `ci_sessions`
  ADD PRIMARY KEY (`session_id`),
  ADD KEY `last_activity_idx` (`last_activity`);

--
-- Indexes for table `data_banner`
--
ALTER TABLE `data_banner`
  ADD PRIMARY KEY (`banner_id`);

--
-- Indexes for table `data_branch`
--
ALTER TABLE `data_branch`
  ADD PRIMARY KEY (`branch_id`);

--
-- Indexes for table `data_gallery`
--
ALTER TABLE `data_gallery`
  ADD PRIMARY KEY (`gallery_id`);

--
-- Indexes for table `data_kategori`
--
ALTER TABLE `data_kategori`
  ADD PRIMARY KEY (`kategori_id`);

--
-- Indexes for table `data_kontak`
--
ALTER TABLE `data_kontak`
  ADD PRIMARY KEY (`kontak_id`);

--
-- Indexes for table `data_news`
--
ALTER TABLE `data_news`
  ADD PRIMARY KEY (`news_id`);

--
-- Indexes for table `data_produk`
--
ALTER TABLE `data_produk`
  ADD PRIMARY KEY (`produk_id`);

--
-- Indexes for table `data_profile`
--
ALTER TABLE `data_profile`
  ADD PRIMARY KEY (`profile_id`);

--
-- Indexes for table `data_user`
--
ALTER TABLE `data_user`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `faq`
--
ALTER TABLE `faq`
  ADD PRIMARY KEY (`faq_id`);

--
-- Indexes for table `howto`
--
ALTER TABLE `howto`
  ADD PRIMARY KEY (`howto_id`);

--
-- Indexes for table `setting_tema`
--
ALTER TABLE `setting_tema`
  ADD PRIMARY KEY (`tema_id`);

--
-- Indexes for table `testimonial`
--
ALTER TABLE `testimonial`
  ADD PRIMARY KEY (`testimonial_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_banner`
--
ALTER TABLE `data_banner`
  MODIFY `banner_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `data_branch`
--
ALTER TABLE `data_branch`
  MODIFY `branch_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `data_gallery`
--
ALTER TABLE `data_gallery`
  MODIFY `gallery_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `data_kategori`
--
ALTER TABLE `data_kategori`
  MODIFY `kategori_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `data_kontak`
--
ALTER TABLE `data_kontak`
  MODIFY `kontak_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `data_news`
--
ALTER TABLE `data_news`
  MODIFY `news_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `data_produk`
--
ALTER TABLE `data_produk`
  MODIFY `produk_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=297;
--
-- AUTO_INCREMENT for table `data_profile`
--
ALTER TABLE `data_profile`
  MODIFY `profile_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `data_user`
--
ALTER TABLE `data_user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT for table `faq`
--
ALTER TABLE `faq`
  MODIFY `faq_id` smallint(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `howto`
--
ALTER TABLE `howto`
  MODIFY `howto_id` smallint(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `setting_tema`
--
ALTER TABLE `setting_tema`
  MODIFY `tema_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `testimonial`
--
ALTER TABLE `testimonial`
  MODIFY `testimonial_id` smallint(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
