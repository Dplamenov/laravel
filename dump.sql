SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";

/*!40101 SET @OLD_CHARACTER_SET_CLIENT = @@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS = @@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION = @@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

CREATE TABLE IF NOT EXISTS `pages`
(
  `page_id`    int(11)                         NOT NULL AUTO_INCREMENT,
  `page_title` varchar(255) CHARACTER SET utf8 NOT NULL,
  `page_body`  varchar(255) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`page_id`)
) ENGINE = InnoDB
  DEFAULT CHARSET = utf8;

INSERT INTO `pages` (`page_id`, `page_title`, `page_body`)
VALUES (1, 'Начало', 'Начало');

INSERT INTO `pages` (`page_id`, `page_title`, `page_body`)
VALUES (NULL, 'Home page', 'Home page body');

CREATE TABLE IF NOT EXISTS `settings`
(
  `_key`  varchar(255) NOT NULL,
  `value` varchar(255) NOT NULL
) ENGINE = InnoDB
  DEFAULT CHARSET = utf8;
COMMIT;


INSERT INTO `settings` (`_key`, `value`)
VALUES ('default_page', '1');

CREATE TABLE IF NOT EXISTS `admin`
(
  `admin_id` int(11)     NOT NULL,
  `username` varchar(22) NOT NULL,
  `email`    varchar(60) NOT NULL,
  `password` varchar(60) NOT NULL
) ENGINE = InnoDB
  DEFAULT CHARSET = utf8;

INSERT INTO `admin` (`admin_id`, `username`, `email`, `password`)
VALUES
  (1, 'adminadmin', 'email@example.com', 'adminadmin');

/*!40101 SET CHARACTER_SET_CLIENT = @OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS = @OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION = @OLD_COLLATION_CONNECTION */;


