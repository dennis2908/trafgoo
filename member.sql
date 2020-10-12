CREATE TABLE IF NOT EXISTS `member` (
  `mem_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `fname` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `address` varchar(100) NOT NULL,
  `bname` varchar(30) NOT NULL,
  `acname` varchar(30) NOT NULL,
  `acnum` varchar(30) NOT NULL,
  `coin` varchar(1) NOT NULL,
  `refname` varchar(30) NOT NULL,
   PRIMARY KEY (`mem_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;