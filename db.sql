SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

CREATE TABLE IF NOT EXISTS `faucetbox` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `faucetdate` varchar(500) NOT NULL,
  `faucetip` varchar(30) NOT NULL,
  `faucetaddress` varchar(500) NOT NULL,
  `faucetamount` varchar(30) NOT NULL,
  `faucetpaid` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;