-- HALEEN SHOP database
-- Create a database named `haleen` (on a host: if0_xxxxxxxx_haleen) and import this file.

CREATE TABLE `info` (
  `user` varchar(100) NOT NULL,
  `pass` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- One row per customer's purchase (updated if the same name buys again).
CREATE TABLE `buy` (
  `name` varchar(100) NOT NULL,
  `shampoo` varchar(50) DEFAULT NULL,
  `sunscreen` varchar(50) DEFAULT NULL,
  `perfume` varchar(50) DEFAULT NULL,
  `faceoil` varchar(50) DEFAULT NULL,
  `moisturizer` varchar(50) DEFAULT NULL,
  `bodybutter` varchar(50) DEFAULT NULL,
  `facemask` varchar(50) DEFAULT NULL,
  `serum` varchar(50) DEFAULT NULL,
  `lotion` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
