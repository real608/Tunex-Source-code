-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-03-2020 a las 19:44:13
-- Versión del servidor: 10.1.37-MariaDB
-- Versión de PHP: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `all`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(1337) NOT NULL,
  `email` varchar(255) NOT NULL,
  `donator` int(11) NOT NULL DEFAULT '0',
  `donation_amount` varchar(50) NOT NULL DEFAULT '$0.00',
  `name_color` varchar(50) NOT NULL DEFAULT '#000000',
  `banned` int(11) NOT NULL DEFAULT '0',
  `rand` int(11) NOT NULL DEFAULT '1',
  `HeadColor` varchar(50) NOT NULL DEFAULT '225/255,221/255,56/255',
  `TorsoColor` varchar(50) NOT NULL DEFAULT '16/255,113/255,184/255',
  `RightArmColor` varchar(50) NOT NULL DEFAULT '225/255,221/255,56/255',
  `LeftArmColor` varchar(50) NOT NULL DEFAULT '225/255,221/255,56/255',
  `RightLegColor` varchar(50) NOT NULL DEFAULT '135/255,155/255,58/255',
  `LeftLegColor` varchar(50) NOT NULL DEFAULT '135/255,155/255,58/255',
  `Face` varchar(50) NOT NULL DEFAULT 'face',
  `Hat` varchar(50) NOT NULL DEFAULT 'none',
  `Hat2` varchar(50) NOT NULL DEFAULT 'none',
  `Hat3` varchar(50) NOT NULL DEFAULT 'none',
  `Gear` varchar(50) NOT NULL DEFAULT 'none',
  `Gear2` varchar(50) NOT NULL DEFAULT 'none',
  `shirt` varchar(50) NOT NULL DEFAULT 'none.png',
  `tshirt` varchar(50) NOT NULL DEFAULT 'none.png',
  `tokens` int(255) NOT NULL DEFAULT '1',
  `coins` int(255) NOT NULL DEFAULT '25',
  `power` int(255) NOT NULL DEFAULT '0',
  `membership` varchar(255) NOT NULL DEFAULT 'none',
  `description` varchar(255) NOT NULL DEFAULT 'Change description in settings!',
  `verified` int(255) NOT NULL DEFAULT '0',
  `verified_email` int(25) NOT NULL DEFAULT '0',
  `status` varchar(200) NOT NULL DEFAULT '[STATUS]',
  `Ip` varchar(255) NOT NULL,
  `currency_time` varchar(255) NOT NULL DEFAULT '03/16/18' COMMENT 'Daily income.',
  `visitTick` varchar(11) NOT NULL DEFAULT '0',
  `expireTime` varchar(11) NOT NULL DEFAULT '0',
  `gettc` varchar(11) NOT NULL DEFAULT '0',
  `lastflood` int(11) NOT NULL DEFAULT '0',
  `theme` varchar(100) NOT NULL DEFAULT 'default',
  `join_date` varchar(255) NOT NULL DEFAULT '0',
  `profile_views` int(11) NOT NULL DEFAULT '0',
  `now` int(11) NOT NULL DEFAULT '0',
  `replies` int(11) NOT NULL DEFAULT '0',
  `posts` int(11) NOT NULL DEFAULT '0',
  `total` int(11) NOT NULL DEFAULT '0',
  `points` int(11) NOT NULL DEFAULT '0',
  `level` int(11) NOT NULL DEFAULT '0',
  `next_points` int(11) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `donator`, `donation_amount`, `name_color`, `banned`, `rand`, `HeadColor`, `TorsoColor`, `RightArmColor`, `LeftArmColor`, `RightLegColor`, `LeftLegColor`, `Face`, `Hat`, `Hat2`, `Hat3`, `Gear`, `Gear2`, `shirt`, `tshirt`, `tokens`, `coins`, `power`, `membership`, `description`, `verified`, `verified_email`, `status`, `Ip`, `currency_time`, `visitTick`, `expireTime`, `gettc`, `lastflood`, `theme`, `join_date`, `profile_views`, `now`, `replies`, `posts`, `total`, `points`, `level`, `next_points`) VALUES
(1, 'Otorium', 'PrIv', 'aaa@gmail.com', 0, '$0.00', '#000000', 0, 1, '225/255,221/255,56/255', '16/255,113/255,184/255', '225/255,221/255,56/255', '225/255,221/255,56/255', '135/255,155/255,58/255', '135/255,155/255,58/255', 'face', 'none', 'none', 'none', 'none', 'none', 'none.png', 'none.png', 2, 35, 1, 'none', 'This is a default description.', 0, 0, 'Playing Tetrimus!', '::1', '03/16/18', '1525059024', '1525059324', '1525122717', 1525058995, 'default', '1525035798', 733, 1525059024, 1, 0, 1, 0, 0, 16),
(2, 'Marcodji', '$2y$10$.0ELgLX.54K8VIpx93HO/OLE7AeLvqD9s0PBLyb4ANjkH9ebuE5Fy', 'marcodjicontacto@gmail.com', 0, '$0.00', '#000000', 0, 1, '225/255,221/255,56/255', '16/255,113/255,184/255', '225/255,221/255,56/255', '225/255,221/255,56/255', '135/255,155/255,58/255', '135/255,155/255,58/255', 'face', 'none', 'none', 'none', 'none', 'none', 'test', 'none.png', 72, 735, 3, 'none', 'Hey! I created this website. I accept all friend requests.', 0, 0, '', '::1', '03/16/18', '1584366512', '1584366812', '1584373188', 1576770771, 'default', '1559072067', 7, 1584366512, 13, 4, 17, 12, 0, 16),
(3, 'testaccount', '$2y$10$.0ELgLX.54K8VIpx93HO/OLE7AeLvqD9s0PBLyb4ANjkH9ebuE5Fy', 'ewhui@uig.com', 0, '$0.00', '#000000', 1, 1, '225/255,221/255,56/255', '16/255,113/255,184/255', '225/255,221/255,56/255', '225/255,221/255,56/255', '135/255,155/255,58/255', '135/255,155/255,58/255', 'face', 'none', 'none', 'none', 'none', 'none', 'none.png', 'none.png', 4, 55, 0, 'none', 'This is a default description.', 0, 0, 'Playing Tetrimus!', '::1', '03/16/18', '1577102103', '1577102403', '1577188490', 0, 'default', '1559121867', 40, 1577102103, 3, 4, 7, 7, 0, 16),
(4, 'Tunex', '$2y$10$q3xIfs2WTp8ksiVp97vTe.unT9.zXcextgFhRE2Kh61OePG4ArZyG', 'uneditedstudios@gmail.com', 0, '$0.00', '#000000', 0, 1, '225/255,221/255,56/255', '16/255,113/255,184/255', '225/255,221/255,56/255', '225/255,221/255,56/255', '135/255,155/255,58/255', '135/255,155/255,58/255', 'face', 'none', 'none', 'none', 'none', 'none', 'none.png', 'none.png', 1, 10, 0, 'none', 'Change description in settings!', 0, 0, '[STATUS]', '::1', '03/16/18', '0', '0', '0', 0, 'default', '1577195902', 3, 0, 0, 0, 0, 0, 0, 0),
(5, '657348', '$2y$10$pnIzD36NDpIvVaxTeJg1iuew/HItfhB3NwT7B5neMFdgfRWOy2eBC', '324768y@grf.com', 0, '$0.00', '#000000', 0, 1, '225/255,221/255,56/255', '16/255,113/255,184/255', '225/255,221/255,56/255', '225/255,221/255,56/255', '135/255,155/255,58/255', '135/255,155/255,58/255', 'face', 'none', 'none', 'none', 'none', 'none', 'none.png', 'none.png', 1, 10, 0, 'none', 'Change description in settings!', 0, 0, '[STATUS]', '::1', '03/16/18', '0', '0', '0', 0, 'default', '1577196368', 0, 0, 0, 0, 0, 0, 0, 0),
(6, 'testaccount2', '$2y$10$1wSbFqTBxBOlP/UOGNRpyesJ6CZmbwlYh6VFHtY6G383UOToDzBXK', 'bhrslvfj@fghj.com', 0, '$0.00', '#000000', 0, 1, '225/255,221/255,56/255', '16/255,113/255,184/255', '225/255,221/255,56/255', '225/255,221/255,56/255', '135/255,155/255,58/255', '135/255,155/255,58/255', 'face', 'none', 'none', 'none', 'none', 'none', 'none.png', 'none.png', 1, 10, 0, 'none', 'Change description in settings!', 0, 0, '[STATUS]', '::1', '03/16/18', '0', '0', '0', 0, 'default', '1577200601', 1, 0, 0, 0, 0, 0, 0, 0),
(7, 'heythisisatest', '$2y$10$MvCIaRuJxwJvwxOjCpI2.OfDiE5MZCwYKDSSkzD/m0UyMLatd.IXq', 'bruhlolxd@gmoil.cam', 0, '$0.00', '#000000', 0, 1, '225/255,221/255,56/255', '16/255,113/255,184/255', '225/255,221/255,56/255', '225/255,221/255,56/255', '135/255,155/255,58/255', '135/255,155/255,58/255', 'face', 'none', 'none', 'none', 'none', 'none', 'none.png', 'none.png', 1, 10, 0, 'none', 'Change description in settings!', 0, 0, '[STATUS]', '::1', '03/16/18', '0', '0', '0', 0, 'default', '1577218755', 0, 0, 0, 0, 0, 0, 0, 0),
(8, 'pepe', '$2y$10$H0rMnnmowgu9tm25qy7M.OawX4XXGQBNrOJ4E6fkRk5sDE.u521jm', 'pepemanolo@gmail.com', 0, '$0.00', '#000000', 0, 1, '225/255,221/255,56/255', '16/255,113/255,184/255', '225/255,221/255,56/255', '225/255,221/255,56/255', '135/255,155/255,58/255', '135/255,155/255,58/255', 'face', 'none', 'none', 'none', 'none', 'none', 'none.png', 'none.png', 1, 10, 0, 'none', 'Change description in settings!', 0, 0, '[STATUS]', '::1', '03/16/18', '0', '0', '0', 0, 'default', '1577790524', 3, 0, 0, 0, 0, 0, 0, 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
