SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(50) DEFAULT NULL,
  `user_phone` varchar(11) DEFAULT NULL,
  `user_email` varchar(50) DEFAULT NULL,
  `user_role` int(1) DEFAULT NULL,
  `user_password` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

CREATE TABLE `purchase_records` (
  `record_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `drug_name` varchar(50) DEFAULT NULL,
  `purchase_date` date DEFAULT NULL,
  `purchase_time` time DEFAULT NULL,
  `status` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`record_id`),
  FOREIGN KEY (`user_id`) REFERENCES `users`(`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

INSERT INTO `users` (`user_id`, `user_name`, `user_phone`, `user_email`, `user_role`, `user_password`) VALUES
(1, 'Safecommmarie', '0780000000', 'Safecomm@gmail.com', 1, 'Safecommmarie'),
(2, 'darisauwimana', '078000100', 'darisa@gmail.com', 3, 'darisauwimana');

INSERT INTO `purchase_records` (`record_id`, `user_id`, `drug_name`, `purchase_date`, `purchase_time`, `status`) VALUES
(1, 1, 'Tobacco', '2023-09-18', '20:45', 'Delivered'),
(2, 2, 'Marijuana', '2023-09-19', '14:30', 'In Progress');

COMMIT;
