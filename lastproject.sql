-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 15-03-2018 a las 11:47:46
-- Versión del servidor: 10.1.30-MariaDB
-- Versión de PHP: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `lastproject`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `roles` varchar(20) NOT NULL,
  `avatar` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `category`
--

INSERT INTO `category` (`id`, `name`) VALUES
(1, 'Transport'),
(2, 'Health Care'),
(3, 'Heating'),
(4, 'Cleaning'),
(5, 'Marketing'),
(6, 'Pharmaceutical'),
(7, 'Insurance'),
(8, 'Banking'),
(9, 'Tourism'),
(10, 'IT'),
(11, 'Retail');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comment`
--

CREATE TABLE `comment` (
  `id` int(11) NOT NULL,
  `replied_comment_id` int(11) NOT NULL,
  `date` datetime NOT NULL,
  `content` varchar(255) DEFAULT NULL,
  `sublevel` varchar(10) DEFAULT NULL,
  `fk_post_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `offer`
--

CREATE TABLE `offer` (
  `id` int(11) NOT NULL,
  `description` text NOT NULL,
  `quantity` int(12) NOT NULL,
  `price` int(12) NOT NULL,
  `fk_post_id` int(11) NOT NULL,
  `fk_user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `offer`
--

INSERT INTO `offer` (`id`, `description`, `quantity`, `price`, `fk_post_id`, `fk_user_id`) VALUES
(1, 'Marketing Plan', 1, 3500000, 1, 3),
(2, '\'Iburprofen\'', 1039900, 2000, 2, 4),
(3, '\'Ibuprofen ', 1039900, 2300, 2, 5),
(4, 'Contratacion de Servicios de Publicidad Marketing y Diseno para la Municipalidad de Las Condes', 1, 35000200, 3, 6),
(5, '\'Servicios de Publicidad Marketing Dis', 1, 31500000, 4, 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `post`
--

CREATE TABLE `post` (
  `id` int(11) NOT NULL,
  `title` varchar(55) NOT NULL,
  `description` varchar(2000) DEFAULT NULL,
  `quantity` int(16) NOT NULL,
  `min_price` int(11) DEFAULT NULL,
  `max_price` int(11) DEFAULT NULL,
  `creation_date` datetime NOT NULL,
  `opening_date` date DEFAULT NULL,
  `closing_date` date DEFAULT NULL,
  `result_date` date DEFAULT NULL,
  `status` int(1) DEFAULT NULL,
  `fk_user_id` int(11) NOT NULL,
  `fk_post_type_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `post`
--

INSERT INTO `post` (`id`, `title`, `description`, `quantity`, `min_price`, `max_price`, `creation_date`, `opening_date`, `closing_date`, `result_date`, `status`, `fk_user_id`, `fk_post_type_id`) VALUES
(1, 'DIGITAL MARKETING PLAN FOR COWORK', 'Digital Marketing Plan service contracting for the project \"OPERATION OF NOMADESK COWORK, SPACE OF SUPPORT FOR THE DYNAMIC ENTREPRENEURSHIP OF PUNTA ARENAS, FOR THE REGION OF MAGELLAN AND ANTARTICA CHILENA\".', 1, 0, 5000000, '2018-03-14 00:00:00', NULL, NULL, NULL, 0, 2, 2),
(2, 'IBUPROFEN 200 MG/5 ML FRA 100 A 120ML', 'Name of the tender:	IBUPROPHENE 200 MG / 5 ML FRA 100 TO 120ML (1000008735)\r\n\r\nDescription:	Administrative bases and standard techniques that will govern the bidding processes for the acquisition of drugs, medical devices and supplies or food, under the modality of \"direct distribution\" intended to support the exercise of health actions, hereinafter the \"Bases \"\r\nType of tender:	Public-Public Bid equal to or greater than 5,000 UTM (LR)\r\nType of call:	OPEN\r\n', 1039900, NULL, NULL, '2018-03-15 00:00:00', '2018-03-19', '2018-03-23', '2018-03-29', 0, 1, 1),
(3, 'ADVERTISING, MARKETING AND DESIGN SERVICES', 'The objective of this bidding process is to contract the advertising, marketing and design services for the Municipality of Las Condes, in order to provide advice in the areas of advertising, design and corporate image for the diffusion of activities.', 1, 0, 6000000, '2018-03-06 00:00:00', '2018-03-18', '2018-03-25', '2018-03-29', NULL, 2, 1),
(4, 'MARKETING PLAN FOR COWORK', 'Marketing Plan service contracting for the project \"OPERATION OF NOMADESK COWORK, SPACE OF SUPPORT FOR THE DYNAMIC ENTREPRENEURSHIP OF PUNTA ARENAS, FOR THE REGION OF MAGELLAN AND ANTARTICA CHILENA\".', 1, 0, 5000000, '2018-03-14 00:00:00', NULL, NULL, NULL, 0, 2, 2),
(5, 'TRAMADOL 200 MG/5 ML FRA 100 A 120ML', 'Name of the tender:	IBUPROPHENE 200 MG / 5 ML FRA 100 TO 120ML (1000008735)\r\n\r\nDescription:	Administrative bases and standard techniques that will govern the bidding processes for the acquisition of drugs, medical devices and supplies or food, under the modality of \"direct distribution\" intended to support the exercise of health actions, hereinafter the \"Bases \"\r\nType of tender:	Public-Public Bid equal to or greater than 5,000 UTM (LR)\r\nType of call:	OPEN\r\n', 1039900, NULL, NULL, '2018-03-15 00:00:00', '2018-03-19', '2018-03-23', '2018-03-29', 0, 1, 1),
(6, 'MARKETING AND DESIGN SERVICES', 'The objective of this bidding process is to contract the advertising, marketing and design services for the Municipality of Las Condes, in order to provide advice in the areas of advertising, design and corporate image for the diffusion of activities.', 1, 0, 6000000, '2018-03-06 00:00:00', '2018-03-18', '2018-03-25', '2018-03-29', NULL, 2, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `post_category`
--

CREATE TABLE `post_category` (
  `id` int(11) NOT NULL,
  `fk_category_id` int(11) NOT NULL,
  `fk_post_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `post_category`
--

INSERT INTO `post_category` (`id`, `fk_category_id`, `fk_post_id`) VALUES
(1, 10, 3),
(2, 5, 3),
(3, 5, 1),
(4, 2, 2),
(5, 6, 2),
(6, 5, 4),
(7, 6, 5),
(8, 2, 5),
(9, 5, 6);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `post_media`
--

CREATE TABLE `post_media` (
  `id` int(11) NOT NULL,
  `fk_post_id` int(11) NOT NULL,
  `media` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `post_tag`
--

CREATE TABLE `post_tag` (
  `id` int(11) NOT NULL,
  `fk_tag_id` int(11) NOT NULL,
  `fk_post_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `post_tag`
--

INSERT INTO `post_tag` (`id`, `fk_tag_id`, `fk_post_id`) VALUES
(1, 4, 1),
(2, 1, 2),
(3, 9, 3),
(4, 4, 3),
(5, 4, 4),
(6, 5, 5),
(7, 4, 6);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `post_type`
--

CREATE TABLE `post_type` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `price` tinyint(1) NOT NULL,
  `opening_date` tinyint(1) NOT NULL,
  `closing_date` tinyint(1) NOT NULL,
  `result_date` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `post_type`
--

INSERT INTO `post_type` (`id`, `name`, `price`, `opening_date`, `closing_date`, `result_date`) VALUES
(1, 'Bidding', 1, 1, 1, 1),
(2, 'Auction ', 1, 0, 1, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tag`
--

CREATE TABLE `tag` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tag`
--

INSERT INTO `tag` (`id`, `name`) VALUES
(1, 'Health Care'),
(2, 'Heating'),
(3, 'Cleaning'),
(4, 'Marketing'),
(5, 'Pharmaceutical'),
(6, 'Insurance'),
(7, 'Banking'),
(8, 'Tourism'),
(9, 'IT'),
(10, 'Retail');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `company_name` varchar(70) NOT NULL,
  `address` varchar(100) DEFAULT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `url` varchar(50) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `avatar` varchar(255) NOT NULL,
  `blocked` tinyint(1) NOT NULL,
  `role` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `user`
--

INSERT INTO `user` (`id`, `company_name`, `address`, `email`, `phone`, `url`, `password`, `avatar`, `blocked`, `role`) VALUES
(1, 'Central de Abastecimiento CENABAST', 'José Domingo Cañas 2681, Ñuñoa, Santiago', 'admin@admin.com', '+562 25748200\r\n', 'https://www.cenabast.cl', '123456', 'b4ce38b80cec865012af27f69213890b', 0, 'user'),
(2, 'Mayor University', 'Orinoco 99, Las Condes, Santiago', 'admin3@admin.com', '+56923124578', 'https://www.universidadmayor.cl', '123', 'b4ce38b80cec865012af27f69213890b', 0, 'user'),
(3, 'Marketing Agency Pro', 'Las Condes 34, Providencia, Santiago', 'email@email.com', '+541234567', 'https://www.agency.com', '123456', 'default', 0, 'user'),
(4, 'Bayer', 'Kettenbrückengasse 70, 1050, Wien', 'bayer1@bayer.com', '+4345612378', 'https://www.bayer.com', '123456', 'default', 0, 'user'),
(5, 'Roche', 'Brückengasse 70, 1050, Wien', 'roche1@roche.com', '+4345122378', 'https://www.roche.com', '123456', 'default', 0, 'user'),
(6, 'Painting Ghn', 'Zieglergasse 70, 1040, Wien', 'paint1@paint.com', '+4345612378', 'https://www.paint.at', '123456', 'default', 0, 'user');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user_category`
--

CREATE TABLE `user_category` (
  `id` int(11) NOT NULL,
  `fk_category_id` int(11) NOT NULL,
  `fk_user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `user_category`
--

INSERT INTO `user_category` (`id`, `fk_category_id`, `fk_user_id`) VALUES
(1, 2, 1),
(2, 11, 2),
(3, 5, 3),
(4, 6, 4),
(5, 6, 5),
(6, 5, 6);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user_media`
--

CREATE TABLE `user_media` (
  `id` int(11) NOT NULL,
  `media` varchar(255) NOT NULL,
  `fk_user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`email`);

--
-- Indices de la tabla `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_comment_post1_idx` (`fk_post_id`);

--
-- Indices de la tabla `offer`
--
ALTER TABLE `offer`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_offer_post1_idx` (`fk_post_id`),
  ADD KEY `fk_offer_user1_idx` (`fk_user_id`);

--
-- Indices de la tabla `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_post_user1_idx` (`fk_user_id`),
  ADD KEY `fk_post_post_type1_idx` (`fk_post_type_id`);

--
-- Indices de la tabla `post_category`
--
ALTER TABLE `post_category`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_user_category_category_idx` (`fk_category_id`),
  ADD KEY `fk_post_category_post1_idx` (`fk_post_id`);

--
-- Indices de la tabla `post_media`
--
ALTER TABLE `post_media`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_post_id` (`fk_post_id`);

--
-- Indices de la tabla `post_tag`
--
ALTER TABLE `post_tag`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_post_tag_post1_idx` (`fk_post_id`) USING BTREE,
  ADD KEY `fk_tag_id` (`fk_tag_id`);

--
-- Indices de la tabla `post_type`
--
ALTER TABLE `post_type`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tag`
--
ALTER TABLE `tag`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indices de la tabla `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `url_UNIQUE` (`url`);

--
-- Indices de la tabla `user_category`
--
ALTER TABLE `user_category`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_user_category_category_idx` (`fk_category_id`),
  ADD KEY `fk_user_category_user1_idx` (`fk_user_id`);

--
-- Indices de la tabla `user_media`
--
ALTER TABLE `user_media`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_user_media_user1_idx` (`fk_user_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `offer`
--
ALTER TABLE `offer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `post`
--
ALTER TABLE `post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `post_category`
--
ALTER TABLE `post_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `post_media`
--
ALTER TABLE `post_media`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `post_tag`
--
ALTER TABLE `post_tag`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `post_type`
--
ALTER TABLE `post_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `tag`
--
ALTER TABLE `tag`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `user_category`
--
ALTER TABLE `user_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `user_media`
--
ALTER TABLE `user_media`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `fk_comment_post1` FOREIGN KEY (`fk_post_id`) REFERENCES `post` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `offer`
--
ALTER TABLE `offer`
  ADD CONSTRAINT `fk_offer_post1` FOREIGN KEY (`fk_post_id`) REFERENCES `post` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_offer_user1` FOREIGN KEY (`fk_user_id`) REFERENCES `user` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `post`
--
ALTER TABLE `post`
  ADD CONSTRAINT `fk_post_post_type1` FOREIGN KEY (`fk_post_type_id`) REFERENCES `post_type` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_post_user1` FOREIGN KEY (`fk_user_id`) REFERENCES `user` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `post_category`
--
ALTER TABLE `post_category`
  ADD CONSTRAINT `fk_post_category_post1` FOREIGN KEY (`fk_post_id`) REFERENCES `post` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_user_category_category0` FOREIGN KEY (`fk_category_id`) REFERENCES `category` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `post_media`
--
ALTER TABLE `post_media`
  ADD CONSTRAINT `post_media_ibfk_1` FOREIGN KEY (`fk_post_id`) REFERENCES `post` (`id`);

--
-- Filtros para la tabla `post_tag`
--
ALTER TABLE `post_tag`
  ADD CONSTRAINT `post_tag_ibfk_1` FOREIGN KEY (`fk_post_id`) REFERENCES `post` (`id`),
  ADD CONSTRAINT `post_tag_ibfk_2` FOREIGN KEY (`fk_tag_id`) REFERENCES `tag` (`id`);

--
-- Filtros para la tabla `user_category`
--
ALTER TABLE `user_category`
  ADD CONSTRAINT `fk_user_category_category` FOREIGN KEY (`fk_category_id`) REFERENCES `category` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_user_category_user1` FOREIGN KEY (`fk_user_id`) REFERENCES `user` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `user_media`
--
ALTER TABLE `user_media`
  ADD CONSTRAINT `fk_user_media_user1` FOREIGN KEY (`fk_user_id`) REFERENCES `user` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
