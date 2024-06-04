-- Adminer 4.8.1 MySQL 11.2.2-MariaDB-1:11.2.2+maria~ubu2204 dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

SET NAMES utf8mb4;

DROP TABLE IF EXISTS `tituly`;
CREATE TABLE `tituly` (
                          `id` int(11) NOT NULL AUTO_INCREMENT,
                          `titul` varchar(20) NOT NULL,
                          PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `tituly` (`id`, `titul`) VALUES
                                         (1,	'Bc.'),
                                         (2,	'Mgr.'),
                                         (3,	'PhDr.'),
                                         (4,	'PaedDr.'),
                                         (5,	'Ing.'),
                                         (6,	'prof.');

DROP TABLE IF EXISTS `ucitel`;
CREATE TABLE `ucitel` (
                          `id` int(11) NOT NULL AUTO_INCREMENT,
                          `jmeno` varchar(20) NOT NULL,
                          `prijmeni` varchar(20) NOT NULL,
                          PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `ucitel` (`id`, `jmeno`, `prijmeni`) VALUES
                                                     (1,	'Miloslav',	'Peták'),
                                                     (2,	'Zbyněk',	'Císař'),
                                                     (3,	'Antonin',	'Václavík');

DROP TABLE IF EXISTS `ucitel_titul`;
CREATE TABLE `ucitel_titul` (
                                `id` int(11) NOT NULL AUTO_INCREMENT,
                                `id_ucitele` int(11) NOT NULL,
                                `id_titulu` int(11) NOT NULL,
                                PRIMARY KEY (`id`),
                                KEY `id_ucitele` (`id_ucitele`),
                                KEY `id_tituly` (`id_titulu`),
                                CONSTRAINT `ucitel_titul_ibfk_1` FOREIGN KEY (`id_ucitele`) REFERENCES `ucitel` (`id`),
                                CONSTRAINT `ucitel_titul_ibfk_2` FOREIGN KEY (`id_titulu`) REFERENCES `tituly` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `ucitel_titul` (`id`, `id_ucitele`, `id_titulu`) VALUES
                                                                 (1,	1,	2),
                                                                 (2,	2,	4),
                                                                 (3,	2,	5),
                                                                 (4,	3,	3),
                                                                 (5,	3,	5),
                                                                 (6,	3,	6);

-- 2024-06-04 12:57:41