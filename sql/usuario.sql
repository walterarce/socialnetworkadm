use socialnet;
CREATE TABLE `usuario` (
  `GUID`VARCHAR(40) DEFAULT (uuid()),
  `Name` varchar(50) NOT NULL,
  PRIMARY KEY (`GUID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;



