 CREATE TABLE `user` (
                        `id` int(11) NOT NULL,
                        `username` varchar(20) NOT NULL,
                        `first_name` varchar(20) NOT NULL,
                        `last_name` varchar(20) NOT NULL,
                        `gander` varchar(20) NOT NULL ) 
                        ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `user` (`id`, `username`, `first_name`, `last_name`, `gander`) VALUES 
(NULL, 'kunc777', 'kuncay', 'muhammad', 'Male');