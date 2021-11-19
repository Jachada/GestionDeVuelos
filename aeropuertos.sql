CREATE DATABASE aeropuertos;

CREATE TABLE `usuarios` (
  `Nombre` text COLLATE utf8_spanish_ci NOT NULL,
  `Password` text COLLATE utf8_spanish_ci NOT NULL,
  `Correspondencia` text COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

CREATE TABLE `vuelos` (
  `id` int(11) NOT NULL,
  `CiudadOrigen` text COLLATE utf8_spanish_ci NOT NULL,
  `CiudadDestino` text COLLATE utf8_spanish_ci NOT NULL,
  `Operadora` text COLLATE utf8_spanish_ci NOT NULL,
  `Fecha` date NOT NULL,
  `CantidadViajeros` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

INSERT INTO `vuelos` (`id`, `CiudadOrigen`, `CiudadDestino`, `Operadora`, `Fecha`, `CantidadViajeros`) VALUES
(1, 'Sevilla', 'Madrid', 'Vueling', '2021-11-25', 220),
(2, 'Madrid', 'Buenos Aires', 'Ryanair', '2021-12-14', 205),
(3, 'Madrid', 'Barcelona', 'Vueling', '2021-11-21', 210),
(4, 'Barcelona', 'París', 'Ryanair', '2021-11-30', 200),
(5, 'Madrid', 'Palma de Mallorca', 'Iberia', '2021-11-29', 220),
(6, 'Madrid', 'Berlín', 'Ryanair', '2021-12-01', 210),
(7, 'Sevilla', 'Valencia', 'Iberia', '2021-11-24', 210),
(8, 'Madrid', 'Londres', 'Vueling', '2021-12-03', 205),
(9, 'Barcelona', 'Roma', 'Iberia', '2021-12-15', 200),
(10, 'Kiev', 'Madrid', 'Ryanair', '2021-12-15', 220),
(11, 'Nicosia', 'Roma', 'Vueling', '2021-12-22', 180),
(12, 'Atenas', 'Reikiavik', 'Ryanair', '2022-01-11', 200),
(13, 'Mónaco', 'Oslo', 'Vueling', '2022-01-20', 210),
(14, 'Praga', 'Estocolmo', 'Ryanair', '2021-12-23', 205),
(15, 'Ankara', 'Kiev', 'Vueling', '2021-11-27', 180);

ALTER TABLE `vuelos`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `vuelos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

