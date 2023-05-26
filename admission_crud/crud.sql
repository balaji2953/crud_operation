SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

CREATE TABLE `student` (
  `sid` int(10) NOT NULL,
  `sname` varchar(30) NOT NULL,
  `s10` varchar(100) NOT NULL,
  `s12` varchar(10) NOT NULL,
  `department` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


INSERT INTO `student` (`sid`, `sname`, `s10`, `s12`, `department`) VALUES
(1, 'Bala', '450','550','IT'),
(2, 'raja', '410','520','cse');

ALTER TABLE `student`
  ADD PRIMARY KEY (`sid`);

ALTER TABLE `student`
  MODIFY `sid` int(10) NOT NULL AUTO_INCREMENT;
