-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 03-10-2022 a las 20:18:28
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `gannis`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `barrios`
--

CREATE TABLE `barrios` (
  `id` int(11) NOT NULL,
  `provincia_id` int(11) NOT NULL,
  `barrio` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `barrios`
--

INSERT INTO `barrios` (`id`, `provincia_id`, `barrio`) VALUES
(1, 1, 'Almirante Brown'),
(2, 1, 'Avellaneda'),
(3, 1, 'Berazategui'),
(4, 1, 'Berisso'),
(5, 1, 'Brandsen'),
(6, 1, 'Campana'),
(7, 1, 'Cañuelas'),
(8, 1, 'Ensenada'),
(9, 1, 'Escobar'),
(10, 1, 'Esteban Echeverría'),
(11, 1, 'Exaltación de la Cruz'),
(12, 1, 'Ezeiza'),
(13, 1, 'Florencio Varela'),
(14, 1, 'General Las Heras'),
(15, 1, 'General Rodríguez'),
(16, 1, 'General San Martín'),
(17, 1, 'Hurlingham'),
(18, 1, 'Ituzaingó'),
(19, 1, 'José C. Paz'),
(20, 1, 'La Matanza'),
(21, 1, 'La Plata'),
(22, 1, 'Lanús'),
(23, 1, 'Lomas de Zamora'),
(24, 1, 'Luján'),
(25, 1, 'Malvinas Argentinas'),
(26, 1, 'Marcos Paz'),
(27, 1, 'Merlo'),
(28, 1, 'Moreno'),
(29, 1, 'Morón'),
(30, 1, 'Pilar'),
(31, 1, 'Presidente Perón'),
(32, 1, 'Quilmes'),
(33, 1, 'San Fernando'),
(34, 1, 'San Isidro'),
(35, 1, 'San Miguel'),
(36, 1, 'San Vicente'),
(37, 1, 'Tigre'),
(38, 1, 'Tres de Febrero'),
(39, 1, 'Vicente López'),
(40, 1, 'Zárate'),
(41, 2, 'Agronomía'),
(42, 2, 'Almagro'),
(43, 2, 'Balvanera'),
(44, 2, 'Barracas'),
(45, 2, 'Belgrano'),
(46, 2, 'Boedo'),
(47, 2, 'Caballito'),
(48, 2, 'Chacarita'),
(49, 2, 'Coghlan'),
(50, 2, 'Colegiales'),
(51, 2, 'Constitución'),
(52, 2, 'Flores'),
(53, 2, 'Floresta'),
(54, 2, 'La Boca'),
(55, 2, 'La Paternal'),
(56, 2, 'Liniers'),
(57, 2, 'Mataderos'),
(58, 2, 'Monte Castro'),
(59, 2, 'Montserrat'),
(60, 2, 'Nueva Pompeya'),
(61, 2, 'Nuñez'),
(62, 2, 'Palermo'),
(63, 2, 'Parque Avellaneda'),
(64, 2, 'Parque Chacabuco'),
(65, 2, 'Parque Chas'),
(66, 2, 'Parque Patricios'),
(67, 2, 'Puerto Madero'),
(68, 2, 'Recoleta'),
(69, 2, 'Retiro'),
(70, 2, 'Saavedra'),
(71, 2, 'San Cristóbal'),
(72, 2, 'San Nicolás'),
(73, 2, 'San Telmo'),
(74, 2, 'Versalles'),
(75, 2, 'Villa Crespo'),
(76, 2, 'Villa Devoto'),
(77, 2, 'Villa General Mitre'),
(78, 2, 'Villa Lugano'),
(79, 2, 'Villa Luro'),
(80, 2, 'Villa Ortúzar'),
(81, 2, 'Villa Pueyrredón'),
(82, 2, 'Villa Real'),
(83, 2, 'Villa Riachuelo'),
(84, 2, 'Villa Santa Rita'),
(85, 2, 'Villa Soldati'),
(86, 2, 'Villa Urquiza'),
(87, 2, 'Villa del Parque'),
(88, 2, 'Vélez Sarsfield'),
(89, 3, 'Ambato'),
(90, 3, 'Ancasti'),
(91, 3, 'Andalgalá'),
(92, 3, 'Antofagasta de la Sierra'),
(93, 3, 'Belén'),
(94, 3, 'Capayán'),
(95, 3, 'Capital'),
(96, 3, 'El Alto'),
(97, 3, 'Esquiú'),
(98, 3, 'Fray Mamerto'),
(99, 3, 'La Paz'),
(100, 3, 'Paclín'),
(101, 3, 'Pomán'),
(102, 3, 'Santa María'),
(103, 3, 'Santa Rosa'),
(104, 3, 'Tinogasta'),
(105, 3, 'Valle Viejo'),
(106, 4, 'Almirante Brown'),
(107, 4, 'Bermejo'),
(108, 4, 'Chacabuco'),
(109, 4, 'Comandante Fernández'),
(110, 4, 'Doce de Octubre'),
(111, 4, 'Dos de Abril'),
(112, 4, 'Fray Justo Santa María de Oro'),
(113, 4, 'General Belgrano'),
(114, 4, 'General Donovan'),
(115, 4, 'General Güemes'),
(116, 4, 'Independencia'),
(117, 4, 'Libertad'),
(118, 4, 'Libertador General San Martin'),
(119, 4, 'Maipú'),
(120, 4, 'Mayor Luis Jorge Fontana'),
(121, 4, 'Nueve de Julio'),
(122, 4, 'O Higgins'),
(123, 4, 'Presidencia de la Plaza'),
(124, 4, 'Primero de Mayo'),
(125, 4, 'Quitilipi'),
(126, 4, 'San Fernando'),
(127, 4, 'San Lorenzo'),
(128, 4, 'Sargento Cabral'),
(129, 4, 'Tapenagá'),
(130, 4, 'Veinticinco de Mayo'),
(131, 5, 'Atlántico'),
(132, 5, 'Biedma'),
(133, 5, 'Cushamen'),
(134, 5, 'Escalante'),
(135, 5, 'Florentino Ameghino'),
(136, 5, 'Futaleufú'),
(137, 5, 'Gaiman'),
(138, 5, 'Gastre'),
(139, 5, 'Languiñeo'),
(140, 5, 'Mártires'),
(141, 5, 'Paso de Indios'),
(142, 5, 'Rawson'),
(143, 5, 'Río Senguer'),
(144, 5, 'Sarmiento'),
(145, 5, 'Tehuelches'),
(146, 5, 'Telsen'),
(147, 6, 'Calamuchita'),
(148, 6, 'Capital'),
(149, 6, 'Colón'),
(150, 6, 'Cruz del Eje'),
(151, 6, 'General Roca'),
(152, 6, 'General San Martín'),
(153, 6, 'Ischilín'),
(154, 6, 'Juárez Celman'),
(155, 6, 'Marcos Juárez'),
(156, 6, 'Minas'),
(157, 6, 'Pocho'),
(158, 6, 'Presidente Roque Sáenz Peña'),
(159, 6, 'Punilla'),
(160, 6, 'Río Cuarto'),
(161, 6, 'Río Primero'),
(162, 6, 'Río Seco'),
(163, 6, 'Río Segundo'),
(164, 6, 'San Alberto'),
(165, 6, 'San Javier'),
(166, 6, 'San Justo'),
(167, 6, 'Santa María'),
(168, 6, 'Sobremonte'),
(169, 6, 'Tercero Arriba'),
(170, 6, 'Totoral'),
(171, 6, 'Tulumba'),
(172, 6, 'Union'),
(173, 7, 'Bella Vista'),
(174, 7, 'Berón de Astrada'),
(175, 7, 'Capital'),
(176, 7, 'Concepción'),
(177, 7, 'Curuzú Cuatiá'),
(178, 7, 'Empedrado'),
(179, 7, 'Esquina'),
(180, 7, 'General Alvear'),
(181, 7, 'General Paz'),
(182, 7, 'Goya'),
(183, 7, 'Itatí'),
(184, 7, 'Ituzaingó'),
(185, 7, 'Lavalle'),
(186, 7, 'Mburucuyá'),
(187, 7, 'Mercedes'),
(188, 7, 'Monte Caseros'),
(189, 7, 'Paso de los Libres'),
(190, 7, 'Saladas'),
(191, 7, 'San Cosme'),
(192, 7, 'San Luis del Palmar'),
(193, 7, 'San Martín'),
(194, 7, 'San Miguel'),
(195, 7, 'San Roque'),
(196, 7, 'Santo Tomé'),
(197, 7, 'Sauce'),
(198, 8, 'Colon'),
(199, 8, 'Concordia'),
(200, 8, 'Diamante'),
(201, 8, 'Federación'),
(202, 8, 'Federal'),
(203, 8, 'Feliciano'),
(204, 8, 'Gualeguay'),
(205, 8, 'Gualeguaychú'),
(206, 8, 'Islas del Ibicuy'),
(207, 8, 'La Paz'),
(208, 8, 'Nogoyá'),
(209, 8, 'Paraná'),
(210, 8, 'San Salvador'),
(211, 8, 'Tala'),
(212, 8, 'Uruguay'),
(213, 8, 'Victoria'),
(214, 8, 'Villaguay'),
(215, 9, 'Bermejo'),
(216, 9, 'Formosa'),
(217, 9, 'Laishi'),
(218, 9, 'Matacos'),
(219, 9, 'Patiño'),
(220, 9, 'Pilagás'),
(221, 9, 'Pilcomayo'),
(222, 9, 'Pirané'),
(223, 9, 'Ramón Lista'),
(224, 10, '9 de Julio'),
(225, 10, 'Aeroclub'),
(226, 10, 'Aeroclub'),
(227, 10, 'Alto Éxodo'),
(228, 10, 'Alto Gorriti'),
(229, 10, 'Alto la Viña'),
(230, 10, 'Alto Padilla'),
(231, 10, 'Atalaya de los Huaicos'),
(232, 10, 'Azopardo'),
(233, 10, 'Bajo Éxodo'),
(234, 10, 'Bajo Gorriti'),
(235, 10, 'Bajo la Viña'),
(236, 10, 'Bicentenario'),
(237, 10, 'Campo Verde'),
(238, 10, 'Centro'),
(239, 10, 'Cerro Las Rosas'),
(240, 10, 'Chijra'),
(241, 10, 'Ciudad de Nieva'),
(242, 10, 'Constitución'),
(243, 10, 'Coronel Arias'),
(244, 10, 'Cuyaya'),
(245, 10, 'El Chingo'),
(246, 10, 'El Progreso'),
(247, 10, 'Higuerillas'),
(248, 10, 'Huaico Chico'),
(249, 10, 'Huaico Hondo'),
(250, 10, 'Islas Malvinas'),
(251, 10, 'Las Marias'),
(252, 10, 'Los Molinos'),
(253, 10, 'Los Naranjos'),
(254, 10, 'Los Noveiro'),
(255, 10, 'Los Perales'),
(256, 10, 'Mariano Moreno'),
(257, 10, 'Norte'),
(258, 10, 'Primero de Marzo'),
(259, 10, 'Punta Diamante'),
(260, 10, 'San Francisco de Álava'),
(261, 10, 'San Guillermo'),
(262, 10, 'San Isidro'),
(263, 10, 'San Pedrito'),
(264, 10, 'Sargento Cabral'),
(265, 10, 'Suipacha'),
(266, 10, 'Tupac Amaru'),
(267, 10, 'Veintitrés de Agosto'),
(268, 10, 'Villa Belgrano'),
(269, 10, 'Villa Jardín de Reyes'),
(270, 10, 'Villa San Martín'),
(271, 11, 'Caleu Caleu'),
(272, 11, 'Capital'),
(273, 11, 'Catriló'),
(274, 11, 'Chalileo'),
(275, 11, 'Chapaleufú'),
(276, 11, 'Chical Co'),
(277, 11, 'Conhelo'),
(278, 11, 'Curacó'),
(279, 11, 'Guatraché'),
(280, 11, 'Hucal'),
(281, 11, 'Lihuel Calel'),
(282, 11, 'Limay Mahuida'),
(283, 11, 'Loventué'),
(284, 11, 'Maracó'),
(285, 11, 'Puelén'),
(286, 11, 'Quemú Quemú'),
(287, 11, 'Rancul'),
(288, 11, 'Realicó'),
(289, 11, 'Toay'),
(290, 11, 'Trenel'),
(291, 11, 'Utracán'),
(292, 12, 'Arauco'),
(293, 12, 'Capital'),
(294, 12, 'Castro Barros'),
(295, 12, 'Chamical'),
(296, 12, 'Chilecito'),
(297, 12, 'Coronel Felipe Varela'),
(298, 12, 'Famatina'),
(299, 12, 'General Ángel V. Peñaloza'),
(300, 12, 'General Belgrano'),
(301, 12, 'General Juan Facundo Quiroga'),
(302, 12, 'General Lamadrid'),
(303, 12, 'General Ocampo'),
(304, 12, 'General San Martín'),
(305, 12, 'Independencia'),
(306, 12, 'Rosario Vera Peñaloza'),
(307, 12, 'Sanagasta'),
(308, 12, 'Vinchina'),
(309, 13, 'Capital'),
(310, 13, 'General Alvear'),
(311, 13, 'Godoy Cruz'),
(312, 13, 'Guaymallén'),
(313, 13, 'Junín'),
(314, 13, 'La Paz'),
(315, 13, 'Las Heras'),
(316, 13, 'Lavalle'),
(317, 13, 'Luján de Cuyo'),
(318, 13, 'Maipú'),
(319, 13, 'Malargüe'),
(320, 13, 'Rivadavia'),
(321, 13, 'San Carlos'),
(322, 13, 'General San Martín'),
(323, 13, 'San Rafael'),
(324, 13, 'Santa Rosa'),
(325, 13, 'Tunuyán'),
(326, 13, 'Tupungato'),
(327, 14, 'Apóstoles'),
(328, 14, 'Cainguás'),
(329, 14, 'Candelaria'),
(330, 14, 'Capital'),
(331, 14, 'Concepción'),
(332, 14, 'Eldorado'),
(333, 14, 'General Manuel Belgrano'),
(334, 14, 'Guaraní'),
(335, 14, 'Iguazú'),
(336, 14, 'Leandro N. Alem'),
(337, 14, 'Libertador General San Martin'),
(338, 14, 'Montecarlo'),
(339, 14, 'Oberá'),
(340, 14, 'San Ignacio'),
(341, 14, 'San Javier'),
(342, 14, 'San Pedro'),
(343, 14, '25 de Mayo'),
(344, 15, 'Aluminé'),
(345, 15, 'Añelo'),
(346, 15, 'Las Coloradas'),
(347, 15, 'Chos Malal'),
(348, 15, 'Piedra del Águila'),
(349, 15, 'Neuquén'),
(350, 15, 'Junín de los Andes'),
(351, 15, 'San Martín de Los Andes'),
(352, 15, 'Loncopué'),
(353, 15, 'Villa La Angostura'),
(354, 15, 'Andacollo'),
(355, 15, 'El Huecú'),
(356, 15, 'Buta Ranquil'),
(357, 15, 'Picún Leufú'),
(358, 15, 'Las Lajas'),
(359, 15, 'Zapala'),
(360, 16, 'Choele Choel'),
(361, 16, 'El Cuy'),
(362, 16, 'General Conesa\"'),
(363, 16, 'General Roca'),
(364, 16, 'Maquinchao'),
(365, 16, 'Ñorquincó'),
(366, 16, 'Pilcaniyeu'),
(367, 16, 'Río Colorado'),
(368, 16, 'San Antonio Oeste'),
(369, 16, 'San Carlos de Bariloche'),
(370, 16, 'Sierra Colorada'),
(371, 16, 'Valcheta'),
(372, 16, 'Viedma'),
(373, 17, 'Anta'),
(374, 17, 'Cachi'),
(375, 17, 'Cafayate'),
(376, 17, 'Capital'),
(377, 17, 'Cerrillos'),
(378, 17, 'Chicoana'),
(379, 17, 'General Güemes'),
(380, 17, 'General José de San Martin'),
(381, 17, 'Guachipas'),
(382, 17, 'La Caldera'),
(383, 17, 'La Candelaria'),
(384, 17, 'La Poma'),
(385, 17, 'La Viña'),
(386, 17, 'Los Andes'),
(387, 17, 'Metán'),
(388, 17, 'Molinos'),
(389, 17, 'Orán'),
(390, 17, 'Rivadavia'),
(391, 17, 'Rosario de la Frontera'),
(392, 17, 'Rosario de Lerma'),
(393, 17, 'San Carlos'),
(394, 17, 'Santa Victoria'),
(395, 18, 'Albardón'),
(396, 18, 'Angaco'),
(397, 18, 'Calingasta'),
(398, 18, 'Capital'),
(399, 18, 'Caucete'),
(400, 18, 'Chimbas'),
(401, 18, 'Iglesia'),
(402, 18, 'Jáchal'),
(403, 18, 'nueve de julio'),
(404, 18, 'Pocito'),
(405, 18, 'Rawson'),
(406, 18, 'Rivadavia'),
(407, 18, 'San Martin'),
(408, 18, 'Santa Lucía'),
(409, 18, 'Sarmiento'),
(410, 18, 'Ullum'),
(411, 18, 'Valle Fértil'),
(412, 18, '25 de mayo'),
(413, 18, 'Zonda'),
(414, 19, 'Ayacucho'),
(415, 19, 'Belgrano'),
(416, 19, 'Chacabuco'),
(417, 19, 'Coronel Pringles'),
(418, 19, 'General Pedernera'),
(419, 19, 'Gobernador Dupuy'),
(420, 19, 'Juan Martín de Pueyrredón'),
(421, 19, 'Junin'),
(422, 19, 'Libertador General San Martín'),
(423, 19, 'San Luis'),
(424, 20, 'Río Gallegos'),
(425, 20, 'Caleta Olivia'),
(426, 20, 'Pico Truncado'),
(427, 20, 'Las Heras'),
(428, 20, 'El Calafate'),
(429, 20, 'Puerto Deseado'),
(430, 20, 'Río Turbio'),
(431, 20, 'Puerto San Julián'),
(432, 20, 'Piedrabuena'),
(433, 20, 'Veintiocho'),
(434, 20, 'Rural dispersa'),
(435, 20, 'Perito Moreno'),
(436, 20, 'Gregores'),
(437, 20, 'Santa Cruz'),
(438, 20, 'Los Antiguos'),
(439, 20, 'El Chaltén'),
(440, 21, 'Rosario'),
(441, 21, 'La Capital'),
(442, 21, 'General López'),
(443, 21, 'Castellanos'),
(444, 21, 'General Obligado'),
(445, 21, 'San Lorenzo'),
(446, 21, 'Las Colonias'),
(447, 21, 'Constitución'),
(448, 21, 'Caseros'),
(449, 21, 'San Jerónimo'),
(450, 21, 'San Cristóbal'),
(451, 21, 'Iriondo'),
(452, 21, 'San Martín'),
(453, 21, 'Vera'),
(454, 21, 'Belgrano'),
(455, 21, 'San Justo'),
(456, 21, 'San Javier'),
(457, 21, '9 de Julio'),
(458, 21, 'Garay'),
(459, 22, 'Aguirre'),
(460, 22, 'Alberdi'),
(461, 22, 'Atamisqui'),
(462, 22, 'Avellaneda'),
(463, 22, 'Banda'),
(464, 22, 'Belgrano'),
(465, 22, 'Choya'),
(466, 22, 'Copo'),
(467, 22, 'Figueroa'),
(468, 22, 'General Taboada'),
(469, 22, 'Guasayán'),
(470, 22, 'Jiménez'),
(471, 22, 'Juan Felipe Ibarra'),
(472, 22, 'Juan Francisco Borges'),
(473, 22, 'Loreto'),
(474, 22, 'Mitre'),
(475, 22, 'Moreno'),
(476, 22, '\"Ojo de Agua'),
(477, 22, 'Pellegrini'),
(478, 22, 'Quebrachos'),
(479, 22, 'Río Hondo'),
(480, 22, 'Rivadavia'),
(481, 22, 'Robles'),
(482, 22, 'Salavina'),
(483, 22, 'San Martín'),
(484, 22, 'Sarmiento'),
(485, 22, 'Silípica'),
(486, 23, 'Rio Grande\"'),
(487, 23, 'Tolhuin'),
(488, 23, 'Ushiaia'),
(489, 24, 'Burruyacú'),
(490, 24, 'Capital'),
(491, 24, 'Chicligasta'),
(492, 24, 'Cruz Alta'),
(493, 24, 'Famaillá'),
(494, 24, 'Graneros'),
(495, 24, 'Juan Bautista Alberdi'),
(496, 24, 'La Cocha'),
(497, 24, 'Leales'),
(498, 24, 'Lules'),
(499, 24, 'Monteros'),
(500, 24, 'Río Chico'),
(501, 24, 'Simoca'),
(502, 24, 'Tafí del Valle'),
(503, 24, 'Tafí Viejo'),
(504, 24, 'Trancas'),
(505, 24, 'Yerba Buena');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mascotas`
--

CREATE TABLE `mascotas` (
  `id` int(8) NOT NULL,
  `nombre` varchar(25) NOT NULL,
  `edad` int(3) NOT NULL,
  `vacunado` enum('Si','No') NOT NULL,
  `sexo` enum('Macho','Hembra') NOT NULL,
  `animal` enum('Gato','Perro') NOT NULL,
  `tamano` varchar(20) NOT NULL,
  `esterlizado` enum('Si','No') NOT NULL,
  `peso` float NOT NULL,
  `desparasitado` enum('Si','No') NOT NULL,
  `nivel_de_actividad` varchar(250) NOT NULL,
  `necesidades` varchar(450) NOT NULL,
  `requisitos` varchar(450) NOT NULL,
  `historia` varchar(450) NOT NULL,
  `especificaciones` varchar(450) NOT NULL,
  `fecha_alta` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `mascotas`
--

INSERT INTO `mascotas` (`id`, `nombre`, `edad`, `vacunado`, `sexo`, `animal`, `tamano`, `esterlizado`, `peso`, `desparasitado`, `nivel_de_actividad`, `necesidades`, `requisitos`, `historia`, `especificaciones`, `fecha_alta`) VALUES
(87, 'Ying Mamerto', 13, 'Si', 'Macho', 'Gato', 'Mediana', 'Si', 10, 'Si', 'Mucho', 'Todas', 'plata y amor', 'Un dia se lo encontraron en la calle junto a su hermano que era blanco y por esto se los llamó \"Ying\" y \"Yang\" . Pero solo quedó ying.', 'Es un gato blanco, mayor que posee la cantidad de 6 dientes, que tiene algunos kilos de más y habla mucho.', NULL),
(88, 'Alba Perez', 0, '', 'Hembra', 'Perro', 'Chiquita', '', 4, 'Si', 'Incalculabe', 'Todas las que puedas imaginar', 'A su hermano N word , Apolo', 'Cria de mi perro(Muerto) atropellado por un camion en busca de venganza.Alba tiene un rensentimiento nacidad de la venganza y de la oscuridad   ', 'Es toda blanca y viene 2 x 1 si o si tenes que adoptar al hermano', NULL),
(90, 'Thor', 7, 'Si', 'Macho', 'Perro', 'Enorme', 'Si', 20, 'Si', 'Alta', 'Jugar', 'Comida', 'Vive conmigo', 'Es lindo', NULL),
(91, 'Ramon', 8, 'Si', 'Macho', 'Perro', 'Gigantesco', 'Si', 25, 'Si', 'Alta', 'Cortar el pelo cada tanto', 'cepillo ,comida y caricias', 'es esponjoso nacio en el planeta espojoso', 'Muy pelud0', NULL),
(92, 'Zach', 2, 'Si', 'Macho', 'Perro', 'mediano', '', 22, '', 'Jugueton', 'Ninguna posiblemente agua y comida', 'Agua , Comida y desparazitador de pulgas', 'El dueño lo pidio desde chiquito se lo dieron 14 años despues y ya no lo quiere', 'Es jugueton , muy boludo y estuvo mucho tiempo en la piscina', NULL),
(93, 'Mandraka', 6, 'Si', 'Macho', 'Gato', 'Mediana y Gorda', 'Si', 10000000, 'Si', 'Minimo', 'Comida , agua y piedras', 'Gimnasio', 'Salvada de las mandibulas de cerbero en las puertas del infierno ', 'Gata GORDAAAAAAAAAAAAAA , mimosa si te pasas te quedas scioli', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `provincias`
--

CREATE TABLE `provincias` (
  `id` int(11) NOT NULL,
  `provincia` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `provincias`
--

INSERT INTO `provincias` (`id`, `provincia`) VALUES
(1, 'Bs As'),
(2, 'CABA'),
(3, 'Catamarca'),
(4, 'Chaco'),
(5, 'Chubut'),
(6, 'Córdoba'),
(7, 'Corrientes'),
(8, 'Entre Ríos'),
(9, 'Formosa'),
(10, 'Jujuy'),
(11, 'La Pampa'),
(12, 'La Rioja'),
(13, 'Mendoza'),
(14, 'Misiones'),
(15, 'Neuquén'),
(16, 'Río Negro'),
(17, 'Salta'),
(18, 'San Juan'),
(19, 'San Luis'),
(20, 'Santa Cruz'),
(21, 'Santa Fe'),
(22, 'Santiago del Estero'),
(23, 'Tierra del Fuego'),
(24, 'Tucumán');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `id` int(11) NOT NULL,
  `perfiles` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`id`, `perfiles`) VALUES
(1, 'Adoptante'),
(2, 'Organizacion'),
(3, 'Administrador');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(10) NOT NULL,
  `provincia_id` varchar(45) NOT NULL,
  `barrio_id` varchar(50) NOT NULL,
  `rol_id` varchar(25) NOT NULL,
  `nombre` varchar(20) NOT NULL,
  `contrasena` varchar(72) NOT NULL,
  `mail` varchar(50) NOT NULL,
  `telefono` int(20) NOT NULL,
  `fecha_alta` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `fecha_baja` date NOT NULL,
  `fecha_modificacion` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `provincia_id`, `barrio_id`, `rol_id`, `nombre`, `contrasena`, `mail`, `telefono`, `fecha_alta`, `fecha_baja`, `fecha_modificacion`) VALUES
(1, '19', 'Belgrano', '1', 'juanchi', '$2y$10$RSzYmxPuXnnJrczqCrc.iOB6crE6oRQrPKxujCeP8S/Y556K01kAi', '124@gmail.com', 0, '2022-09-19 17:39:15', '0000-00-00', '0000-00-00'),
(2, '', '', '', 'boba', '', 'bobsadsa@d32', 0, '2022-09-19 17:45:38', '0000-00-00', '0000-00-00'),
(3, '0', '', '', '32131', '', '232@gmail.com', 232, '2022-09-19 17:46:46', '0000-00-00', '0000-00-00'),
(4, '18', '413', '3', 'admin', '$2y$10$y2vK7DDGToBRZkO2yDH2keq4iBUz3arKY3rDiJBj5RadBWWyJk0zC', 'admin@gmail.com', 0, '2022-10-03 17:17:59', '0000-00-00', '0000-00-00');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `barrios`
--
ALTER TABLE `barrios`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `mascotas`
--
ALTER TABLE `mascotas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `provincias`
--
ALTER TABLE `provincias`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `barrios`
--
ALTER TABLE `barrios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=506;

--
-- AUTO_INCREMENT de la tabla `mascotas`
--
ALTER TABLE `mascotas`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=94;

--
-- AUTO_INCREMENT de la tabla `provincias`
--
ALTER TABLE `provincias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
