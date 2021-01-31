SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";





CREATE TABLE `bioskop` (
  `userID` int(50) NOT NULL,
  `username` varchar(20) NOT NULL,
  `sifra` varchar(50) NOT NULL,
  `realname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


INSERT INTO `bioskop` (`userID`, `username`, `sifra`, `realname`, `email`, `status`) VALUES
(1, 'admin', 'gajacadmin', 'admin', 'maric@gmail.com', 'admin'),
(10, 'micko', 'ljubicic', 'Milos Stevanovic', 'milosgajac@gmail.com', 'user');





ALTER TABLE `bioskop`
  ADD PRIMARY KEY (`userID`);




ALTER TABLE `bioskop`
  MODIFY `userID` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;