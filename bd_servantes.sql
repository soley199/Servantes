-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 01-11-2022 a las 23:03:38
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 8.0.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bd_servantes`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contenido_padres`
--

CREATE TABLE `contenido_padres` (
  `id_con_pa` int(11) NOT NULL,
  `img_1` text NOT NULL,
  `titulo_1` text NOT NULL,
  `img_2` text NOT NULL,
  `titulo_2` text NOT NULL,
  `img_3` text NOT NULL,
  `titulo_3` text NOT NULL,
  `img_4` text NOT NULL,
  `titulo_4` text NOT NULL,
  `img_5` text NOT NULL,
  `titulo_5` text NOT NULL,
  `img_6` text NOT NULL,
  `titulo_6` text NOT NULL,
  `Mod_titu1` text NOT NULL,
  `Mod_text_1` text NOT NULL,
  `Mod_img_descarga_1` text NOT NULL,
  `Mod_img_1` text NOT NULL,
  `Mod_titu_2` text NOT NULL,
  `Mod_text_2` text NOT NULL,
  `Mod_img_descarga_2` text NOT NULL,
  `Mod_img_2` text NOT NULL,
  `Mod_titu_3` text NOT NULL,
  `Mod_text_3` text NOT NULL,
  `Mod_img_descarga_3` text NOT NULL,
  `Mod_img_3` text NOT NULL,
  `Mod_titu_4` text NOT NULL,
  `Mod_text_4` text NOT NULL,
  `Mod_img_descarga_4` text NOT NULL,
  `Mod_img_4` text NOT NULL,
  `Mod_titu_5` text NOT NULL,
  `Mod_text_5` text NOT NULL,
  `Mod_img_descarga_5` text NOT NULL,
  `Mod_img_5` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16;

--
-- Volcado de datos para la tabla `contenido_padres`
--

INSERT INTO `contenido_padres` (`id_con_pa`, `img_1`, `titulo_1`, `img_2`, `titulo_2`, `img_3`, `titulo_3`, `img_4`, `titulo_4`, `img_5`, `titulo_5`, `img_6`, `titulo_6`, `Mod_titu1`, `Mod_text_1`, `Mod_img_descarga_1`, `Mod_img_1`, `Mod_titu_2`, `Mod_text_2`, `Mod_img_descarga_2`, `Mod_img_2`, `Mod_titu_3`, `Mod_text_3`, `Mod_img_descarga_3`, `Mod_img_3`, `Mod_titu_4`, `Mod_text_4`, `Mod_img_descarga_4`, `Mod_img_4`, `Mod_titu_5`, `Mod_text_5`, `Mod_img_descarga_5`, `Mod_img_5`) VALUES
(1, 'cocinero.svg', 'MENU  SEMANAL                                                                                                                                                                                                                          ', 'circular.svg', 'CIRCULARES                                      ', 'info.svg', 'AVISOS E INFORMACIÓN                                                                            ', 'evento.svg', 'EVENTOS                                                                           ', 'calendario.svg', 'CALENDARIO ESCOLAR                                                                                                                                                        ', 'ordenador.svg', 'PLATAFORMA LMS 3.0                                                                           ', 'Menu Semanal', 'Para tu comodidad y tranquilidad contamos con servicio de comedor, en el que tu hijo recibirá menús diferentes de modo que apoyen en el crecimiento de nuestros pequeños, los alimentos son elaborados diariamente dentro de la institución.                                                                                                                                                        ', '622446_MENU.pdf', '368251_VALOr.png', 'Circulares', 'Para tu comodidad y tranquilidad contamos con servicio de comedor, en el que tu hijo recibirá menús diferentes de modo que apoyen en el crecimiento de nuestros pequeños, los alimentos son elaborados diariamente dentro de la institución.', '379404_pdf.pdf', '32130_VALOr.png', 'Avisos e Imformación', 'Para complementar la formación de tu hijo, contamos con una serie de talleres deportivo-culturales que le permitirán desarrollar su disciplina, valores y creatividad en un ambiente saludable.', '54580_MENU.pdf', '214599_VALOr.png', 'Eventos', 'Para complementar la formación de tu hijo, contamos con una serie de talleres deportivo-culturales que le permitirán desarrollar su disciplina, valores y creatividad en un ambiente saludable.', '759880_pdf.pdf', '317589_VALOr.png', 'Calendario Escolar', 'La plataforma educativa es una herramienta para mejorar la enseñanza en la institución y un vinculó de comunicación dentro de la comunudad escolar, el acceso a esta plataforma es unicamente para la comunidad escolar.', '318527_MENU.pdf', '468533_VALOr.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `desarrollo_pag`
--

CREATE TABLE `desarrollo_pag` (
  `id_desarrollo` int(11) NOT NULL,
  `Titulo` text NOT NULL,
  `titulo_1` text CHARACTER SET latin1 NOT NULL,
  `text_1` text CHARACTER SET latin1 NOT NULL,
  `img_1` text CHARACTER SET latin1 NOT NULL,
  `img_1_1` text CHARACTER SET latin1 NOT NULL,
  `titulo_1_1` text CHARACTER SET latin1 NOT NULL,
  `text_1_1` text CHARACTER SET latin1 NOT NULL,
  `img_1_2` text CHARACTER SET latin1 NOT NULL,
  `titulo_1_2` text CHARACTER SET latin1 NOT NULL,
  `text_1_2` text CHARACTER SET latin1 NOT NULL,
  `titulo_2` text CHARACTER SET latin1 NOT NULL,
  `text_2` text CHARACTER SET latin1 NOT NULL,
  `img_2` text CHARACTER SET latin1 NOT NULL,
  `img_2_1` text CHARACTER SET latin1 NOT NULL,
  `titulo_2_1` text CHARACTER SET latin1 NOT NULL,
  `text_2_1` text CHARACTER SET latin1 NOT NULL,
  `img_2_2` text CHARACTER SET latin1 NOT NULL,
  `titulo_2_2` text CHARACTER SET latin1 NOT NULL,
  `text_2_2` text CHARACTER SET latin1 NOT NULL,
  `titulo_3` text CHARACTER SET latin1 NOT NULL,
  `text_3` text CHARACTER SET latin1 NOT NULL,
  `img_3` text CHARACTER SET latin1 NOT NULL,
  `img_3_1` text CHARACTER SET latin1 NOT NULL,
  `titulo_3_1` text CHARACTER SET latin1 NOT NULL,
  `text_3_1` text CHARACTER SET latin1 NOT NULL,
  `img_3_2` text CHARACTER SET latin1 NOT NULL,
  `titulo_3_2` text CHARACTER SET latin1 NOT NULL,
  `text_3_2` text CHARACTER SET latin1 NOT NULL,
  `titulo_4` text CHARACTER SET latin1 NOT NULL,
  `text_4` text CHARACTER SET latin1 NOT NULL,
  `img_4` text CHARACTER SET latin1 NOT NULL,
  `img_4_1` text CHARACTER SET latin1 NOT NULL,
  `titulo_4_1` text CHARACTER SET latin1 NOT NULL,
  `text_4_1` text CHARACTER SET latin1 NOT NULL,
  `img_4_2` text CHARACTER SET latin1 NOT NULL,
  `titulo_4_2` text CHARACTER SET latin1 NOT NULL,
  `text_4_2` text CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16;

--
-- Volcado de datos para la tabla `desarrollo_pag`
--

INSERT INTO `desarrollo_pag` (`id_desarrollo`, `Titulo`, `titulo_1`, `text_1`, `img_1`, `img_1_1`, `titulo_1_1`, `text_1_1`, `img_1_2`, `titulo_1_2`, `text_1_2`, `titulo_2`, `text_2`, `img_2`, `img_2_1`, `titulo_2_1`, `text_2_1`, `img_2_2`, `titulo_2_2`, `text_2_2`, `titulo_3`, `text_3`, `img_3`, `img_3_1`, `titulo_3_1`, `text_3_1`, `img_3_2`, `titulo_3_2`, `text_3_2`, `titulo_4`, `text_4`, `img_4`, `img_4_1`, `titulo_4_1`, `text_4_1`, `img_4_2`, `titulo_4_2`, `text_4_2`) VALUES
(1, 'DESARROLLO HUMANO                                                                                                                                                                                                                                                                                                ', 'CAMPAMENTO', 'Las herramientas principales que utiliza un ser humano para ser exitoso son: mente, actitud, inteligencia y asertividad; nuestro modelo educativo, basado en el entorno familiar, permite a nuestros alumnos conducir sus conocimientos y habilidades hacia objetivos claros; el ambiente maker en el que se desenvuelven en el aula los prepara para un futuro en el que crear sea un hábito.                                                                                                                                                                                                                                                                          ', '679968_VALOr.png', '663142_VALOr.png', 'Heading', ' sed odio  Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna                                                                                                                                                        ', '740614_VALOr.png', 'Head', 'Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.                                      ', 'EXCURSIONE', 'Atendemosnecesidades de cada uno de nuestros alumnos, en un ambiente tecnológico ideal para una educación de vanguardia, en la que los valores se complementan con la ciencia para desarrollar futuros jóvenes emprendedores.                                      ', '12467_capo2.png', '320888_VALOr.png', 'Headin', ' sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.                                      ', '210223_capo2.png', 'Head', ' sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.                                      ', 'VIAJESss', 'herramientas principales que utiliza un ser humano para ser exitoso son:   mente, actitud, inteligencia y asertividad; nuestro modelo educativo, basado en el entorno familiar, permite a nuestros alumnos conducir sus conocimientos y habilidades hacia objetivos claros; el ambiente maker en el que se desenvuelven en el aula los prepara para un futuro en el que crear sea un hábito.                                      ', '58091_VALOr2.png', '420002_capo2.png', 'nuuu', 'malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.                                      ', '374207_VALOr.png', 'Head', ' odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.                                      ', 'EVENTOSs', ' necesidades de cada uno de nuestros alumnos, en un ambiente tecnológico ideal para una educación de vanguardia, en la que los valores se complementan con la ciencia para desarrollar futuros jóvenes emprendedores.                                      ', '397960_capo2.png', '326007_VALOr2.png', 'nuevo', 'odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.                                      ', '300299_capo2.png', 'Head', ' odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.                                      ');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estatus`
--

CREATE TABLE `estatus` (
  `Id_Estatus` int(11) NOT NULL,
  `Estatus` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `estatus`
--

INSERT INTO `estatus` (`Id_Estatus`, `Estatus`) VALUES
(1, 'Activo'),
(2, 'inactivo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `kinder_pag`
--

CREATE TABLE `kinder_pag` (
  `id_kinder` int(11) NOT NULL,
  `Titulo` text NOT NULL,
  `Text_1` text NOT NULL,
  `img_1` text NOT NULL,
  `text_2` text NOT NULL,
  `img_2` text NOT NULL,
  `Titulo_ta` text NOT NULL,
  `Taller_1` text NOT NULL,
  `Taller_img_1` text NOT NULL,
  `Taller_2` text NOT NULL,
  `Taller_img_2` text NOT NULL,
  `Taller_3` text NOT NULL,
  `Taller_img_3` text NOT NULL,
  `Taller_4` text NOT NULL,
  `Taller_img_4` text NOT NULL,
  `Taller_5` text NOT NULL,
  `Taller_img_5` text NOT NULL,
  `Mod_titu_1` text NOT NULL,
  `Mod_text_1` text NOT NULL,
  `Mod_img_1` text NOT NULL,
  `Mod_titu_2` text NOT NULL,
  `Mod_text_2` text NOT NULL,
  `Mod_img_2` text NOT NULL,
  `Mod_titu_3` text NOT NULL,
  `Mod_text_3` text NOT NULL,
  `Mod_img_3` text NOT NULL,
  `Mod_titu_4` text NOT NULL,
  `Mod_text_4` text NOT NULL,
  `Mod_img_4` text NOT NULL,
  `Mod_titu_5` text NOT NULL,
  `Mod_text_5` text NOT NULL,
  `Mod_img_5` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16;

--
-- Volcado de datos para la tabla `kinder_pag`
--

INSERT INTO `kinder_pag` (`id_kinder`, `Titulo`, `Text_1`, `img_1`, `text_2`, `img_2`, `Titulo_ta`, `Taller_1`, `Taller_img_1`, `Taller_2`, `Taller_img_2`, `Taller_3`, `Taller_img_3`, `Taller_4`, `Taller_img_4`, `Taller_5`, `Taller_img_5`, `Mod_titu_1`, `Mod_text_1`, `Mod_img_1`, `Mod_titu_2`, `Mod_text_2`, `Mod_img_2`, `Mod_titu_3`, `Mod_text_3`, `Mod_img_3`, `Mod_titu_4`, `Mod_text_4`, `Mod_img_4`, `Mod_titu_5`, `Mod_text_5`, `Mod_img_5`) VALUES
(1, 'Kinder', 'Conscientes de que la niñez es la etapa en la que se construye un ser humano de excelencia, hemos diseñado un modelo educativo basado en valores y autosuficiencia, buscamos que nuestros niños sean capaces de construir cambios, inculcándoles desde pequeños hábitos, conciencia de sí mismos, de sus actos y sobre todo de su entorno.', 'Kinder_img.jpg', 'Inculcamos en nuestros pequeños el uso adecuado de la tecnología, forjando en ellos la responsabilidad que requiere el uso de las nuevas herramientas en su formación, poniendo énfasis en su personalidad y el valor de sus propias decisiones tomadas con plena conciencia de si mismos.', 'Juegos.jpg', 'Nuestros talleres', 'Futbol', 'fut.JPG', 'Ballet', 'Ballet.jpeg', 'Pre-Karate', 'karate.jpg', 'Pintura', 'Pintura.JPG', 'Natación', 'Natacion.jpg', 'Futbol', 'El trabajo en equipo es básico para lograr metas y objetivos en común, por ello a través del deporte desarrollamos en nuestros alumnos los hábitos necesarios para ser líderes en el futuro.', 'Futsecu.JPG', 'Ballet', 'Desde pequeñas nuestras alumnas desarrollan su motricidad y elasticidad practicando la belleza artística de esta disciplina.', 'BALET2.jpeg', 'Pre-Karate', 'En un La formación de carácter ambiente lúdico es muy importante para el desarrollo de los niños, ya que fomenta en ellos una disciplina en torno a la sana convivencia social.', 'karate2.JPG', 'Pintura', 'Desarrollamos la creatividad y el instinto artístico de nuestros pequeños, motivándolos e incentivándolos poniendo en práctica diferentes técnicas de pintura.', 'Pintura.JPG', 'Natación', 'Desarrollamos la creatividad y el instinto artístico de nuestros pequeños, motivándolos e incentivándolos poniendo en práctica diferentes técnicas de pintura.', 'Natacion.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mejor_eleccion`
--

CREATE TABLE `mejor_eleccion` (
  `Id_Mejor` int(11) NOT NULL,
  `Titulo` varchar(100) NOT NULL,
  `Subtitulo` varchar(100) NOT NULL,
  `1_img` text NOT NULL,
  `1_titulo` varchar(80) NOT NULL,
  `1_text` text NOT NULL,
  `1.2_img` text NOT NULL,
  `1.2_titulo` varchar(80) NOT NULL,
  `1.2_text` text NOT NULL,
  `2_img` text NOT NULL,
  `2_titulo` varchar(80) NOT NULL,
  `2_text` text NOT NULL,
  `3_img` text NOT NULL,
  `3_titulo` varchar(80) NOT NULL,
  `3_text` text NOT NULL,
  `Img_centro` text NOT NULL,
  `4_img` text NOT NULL,
  `4_titulo` varchar(80) NOT NULL,
  `4_text` text NOT NULL,
  `4.1_img` text NOT NULL,
  `4.1_titulo` varchar(80) NOT NULL,
  `4.1_text` text NOT NULL,
  `5_img` text NOT NULL,
  `5_titulo` varchar(80) NOT NULL,
  `5_text` text NOT NULL,
  `6_img` text NOT NULL,
  `6_titulo` varchar(80) NOT NULL,
  `6_text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16;

--
-- Volcado de datos para la tabla `mejor_eleccion`
--

INSERT INTO `mejor_eleccion` (`Id_Mejor`, `Titulo`, `Subtitulo`, `1_img`, `1_titulo`, `1_text`, `1.2_img`, `1.2_titulo`, `1.2_text`, `2_img`, `2_titulo`, `2_text`, `3_img`, `3_titulo`, `3_text`, `Img_centro`, `4_img`, `4_titulo`, `4_text`, `4.1_img`, `4.1_titulo`, `4.1_text`, `5_img`, `5_titulo`, `5_text`, `6_img`, `6_titulo`, `6_text`) VALUES
(1, '¿Porqué somos tu mejor elección?', 'Estándares Internacionales', 'uno.png', 'UNO', 'Es nuestro aliado y ofrece a nuestros alumnos miles de videos sobre temas apasionantes.', 'Discovery.png', 'DISCOVERY', 'Es nuestro aliado y ofrece a nuestros alumnos miles de videos sobre temas apasionantes.', 'Animal_Planet.png', 'ANIMAL PLANET', 'Explora el reino animal por medio de contenido audiovisual de alta calidad.', 'Apple.png', 'APPLE', 'La empresa de tecnología en sector que más injerencia ha tenido en el entorno educativo.', 'Logoservantesmundo.PNG', 'DElf.png', 'DELF', 'Empresa mexicana líder en desarrollo de las facultades del aprendizaje.', 'Avalia.png', 'AVALIA', 'Empresa mexicana líder en desarrollo de las facultades del aprendizaje.', 'English.png', 'Cambridge English', 'Pocas instituciones educativas en el mundo gozan del prestigio que tiene la Universidad de Cambridge.', 'udlap.png', 'UDLAP', 'Universidad de las Américas Puebla es una aliada invaluable en el proceso de formación.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pirmaria_pag`
--

CREATE TABLE `pirmaria_pag` (
  `id_kinder` int(11) NOT NULL,
  `titulo` text NOT NULL,
  `text_1` text NOT NULL,
  `img_1` text NOT NULL,
  `text_2` text NOT NULL,
  `img_2` text NOT NULL,
  `Talleres_ti` text NOT NULL,
  `Taller_1` text NOT NULL,
  `Taller_img_1` text NOT NULL,
  `Taller_2` text NOT NULL,
  `Taller_img_2` text NOT NULL,
  `Taller_3` text NOT NULL,
  `Taller_img_3` text NOT NULL,
  `Taller_4` text NOT NULL,
  `Taller_img_4` text NOT NULL,
  `Taller_5` text NOT NULL,
  `Taller_img_5` text NOT NULL,
  `Taller_6` text NOT NULL,
  `Taller_img_6` text NOT NULL,
  `Taller_7` text NOT NULL,
  `Taller_img_7` text NOT NULL,
  `Taller_8` text NOT NULL,
  `Taller_img_8` text NOT NULL,
  `Mod_titu_1` text NOT NULL,
  `Mod_text_1` text NOT NULL,
  `Mod_img_1` text NOT NULL,
  `Mod_titu_2` text NOT NULL,
  `Mod_text_2` text NOT NULL,
  `Mod_img_2` text NOT NULL,
  `Mod_titu_3` text NOT NULL,
  `Mod_text_3` text NOT NULL,
  `Mod_img_3` text NOT NULL,
  `Mod_titu_4` text NOT NULL,
  `Mod_text_4` text NOT NULL,
  `Mod_img_4` text NOT NULL,
  `Mod_titu_5` text NOT NULL,
  `Mod_text_5` text NOT NULL,
  `Mod_img_5` text NOT NULL,
  `Mod_titu_6` text NOT NULL,
  `Mod_text_6` text NOT NULL,
  `Mod_img_6` text NOT NULL,
  `Mod_titu_7` text NOT NULL,
  `Mod_text_7` text NOT NULL,
  `Mod_img_7` text NOT NULL,
  `Mod_titu_8` text NOT NULL,
  `Mod_text_8` text NOT NULL,
  `Mod_img_8` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `pirmaria_pag`
--

INSERT INTO `pirmaria_pag` (`id_kinder`, `titulo`, `text_1`, `img_1`, `text_2`, `img_2`, `Talleres_ti`, `Taller_1`, `Taller_img_1`, `Taller_2`, `Taller_img_2`, `Taller_3`, `Taller_img_3`, `Taller_4`, `Taller_img_4`, `Taller_5`, `Taller_img_5`, `Taller_6`, `Taller_img_6`, `Taller_7`, `Taller_img_7`, `Taller_8`, `Taller_img_8`, `Mod_titu_1`, `Mod_text_1`, `Mod_img_1`, `Mod_titu_2`, `Mod_text_2`, `Mod_img_2`, `Mod_titu_3`, `Mod_text_3`, `Mod_img_3`, `Mod_titu_4`, `Mod_text_4`, `Mod_img_4`, `Mod_titu_5`, `Mod_text_5`, `Mod_img_5`, `Mod_titu_6`, `Mod_text_6`, `Mod_img_6`, `Mod_titu_7`, `Mod_text_7`, `Mod_img_7`, `Mod_titu_8`, `Mod_text_8`, `Mod_img_8`) VALUES
(1, 'Primaria', 'Las herramientas principales que utiliza un ser humano para ser exitoso son:   mente, actitud, inteligencia y asertividad; nuestro modelo educativo, basado en el entorno familiar, permite a nuestros alumnos conducir sus conocimientos y habilidades hacia objetivos claros; el ambiente maker en el que se desenvuelven en el aula los prepara para un futuro en el que crear sea un hábito.', 'Primariafondo.jpg', 'Atendemos las necesidades de cada uno de nuestros alumnos, en un ambiente tecnológico ideal para una educación de vanguardia, en la que los valores se complementan con la ciencia para desarrollar futuros jóvenes emprendedores.', 'primaria2.jpg', 'Nuestros Talleres', 'Tap', 'Tap.JPG', 'Pintura', 'Pinturaniña.jpg', 'Música', 'Musica.JPG', 'Natación', 'Natacion.jpg', 'Futbol', 'fut.JPG', 'Basquetbol', 'Basket.JPG', 'Karate', 'karate.jpg', 'Capoeira', 'Capo.png', 'Tap', 'El trabajo en equipo es básico para lograr metas y objetivos en común, por ello a través del deporte desarrollamos en nuestros alumnos los hábitos necesarios para ser líderes en el futuro.', 'Tap2.JPG', 'Música', 'Además del sentido artístico de este taller, los alumnos desarrollarán habilidades emocionales, lógicas, mentales y matemáticas al poner en práctica patrones para la buena ejecución de melodías.', 'Musica2.jpg', 'Futbol', 'El trabajo en equipo es básico para lograr metas y objetivos en común, por ello a través del deporte desarrollamos en nuestros alumnos los hábitos necesarios para ser líderes en el futuro.', 'Futsecu.JPG', 'Pintura', 'Desarrollamos la creatividad y el instinto artístico de nuestros pequeños, motivándolos e incentivándolos poniendo en práctica diferentes técnicas de pintura.', 'Pintura.JPG', 'Natación', 'Uno de los deportes más completos que podemos practicar es la natación, ya que además del ejercicio físico desarrolla nuestro sistema cardiovascular, la respiración y mejora la seguridad de los niños.', 'natacion2.jpg', 'Karate', 'Uno de los deportes más completos que podemos practicar es la natación, ya que además del ejercicio físico desarrolla nuestro sistema cardiovascular, la respiración y mejora la seguridad de los niños.', 'karate2.JPG', 'Basquetbol', 'Tomar decisiones de manera rápida y oportuna facilita el éxito de las personas, poner en práctica deportes como este permite que los niños desarrollen estas habilidades de manera divertida.', 'Basket.JPG', 'Capoeira', 'Además de disciplina, los niños podrán desarrollar habilidades físicas como:  elasticidad, motricidad y velocidad, aprendiendo, además, el arte de la defensa personal.', 'capo2.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `quienes_somos_pag`
--

CREATE TABLE `quienes_somos_pag` (
  `Id_quienes` int(11) NOT NULL,
  `titulo` text NOT NULL,
  `tex` text NOT NULL,
  `titulo_2` text NOT NULL,
  `tex_2` text NOT NULL,
  `img_2` text NOT NULL,
  `img_3` text NOT NULL,
  `titulo_3` text NOT NULL,
  `tex_3` text NOT NULL,
  `img_4` text NOT NULL,
  `titulo_4` text NOT NULL,
  `tex_4` text NOT NULL,
  `Titulo_5` text NOT NULL,
  `img` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16;

--
-- Volcado de datos para la tabla `quienes_somos_pag`
--

INSERT INTO `quienes_somos_pag` (`Id_quienes`, `titulo`, `tex`, `titulo_2`, `tex_2`, `img_2`, `img_3`, `titulo_3`, `tex_3`, `img_4`, `titulo_4`, `tex_4`, `Titulo_5`, `img`) VALUES
(1, '¿PORQUÉ SER CERVANTES?', 'Porque con nosotros tus hijos encontrarán un espacio para su desarrollo personal e intelectual, con un modelo educativo de vanguardia en el que el es una parte activa. Reforzaremos sus valores y su seguridad, ya que trabajamos a partir del reconocimiento de cada individuo como parte de un entorno social, positivo, analítico, asertivo y, sobretodo, capaz de afrontar y resolver los retos de la educación del nuevo milenio.                                                                            ', 'FILOSOFÍA', 'Respetar el núcleo familiar, honestidad en el trato para el alumno, proporcionar los recursos que els permitan, tomar decisiones, fortaleciendo las actividades que se realicen con ética, entusiasmo, dinámica mente, involucrando y motivando a las familias, sin olvidar RESPETAR Y HACER REGIR los Valores de su existencia.', 'folosofia.svg', 'cup.svg', 'MISIÓN', 'Facilitar a nuestros alumnos los conocimientos técnicos, científicos, históricos, sociales, humanistas y emocionales para que puedan afrontar las problemáticas del mundo actual, en un ambiente tecnológicamente avanzado y con las herramientas de vanguardia, siempre anteponiendo los valores, la familia y su país.', 'ojo.svg', 'VISIÓN', 'Ser propulsores de un modelo educativo vanguardista que desarrolle alumnos con iniciativa, capaces de generar cambios en su entorno, su sociedad y su mundo, a través de la investigación, los valores y el conocimiento.', 'Nuestros valores', 'VALOr2.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `quines_somos_index`
--

CREATE TABLE `quines_somos_index` (
  `Id_Quienes` int(11) NOT NULL,
  `Titulo` varchar(255) NOT NULL,
  `Parrafo` mediumtext NOT NULL,
  `Imagen` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `quines_somos_index`
--

INSERT INTO `quines_somos_index` (`Id_Quienes`, `Titulo`, `Parrafo`, `Imagen`) VALUES
(1, '¿Quiénes somos?', 'Somos un Colegio Bilingüe comprometido en formar generaciones de niños y jóvenes orientados para afrontar problemáticas en el ámbito social, escolar, familiar o personal, siempre basado en valores y humanismo.                                                                 ', '258646_235293_130048_Sor_servantes.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `secundaria_pag`
--

CREATE TABLE `secundaria_pag` (
  `id_secundaria` int(11) NOT NULL,
  `titulo` text NOT NULL,
  `text` text NOT NULL,
  `img` text NOT NULL,
  `text_2` text NOT NULL,
  `img_2` text NOT NULL,
  `Taller` text NOT NULL,
  `Taller_1` text NOT NULL,
  `Taller_img_1` text NOT NULL,
  `Taller_2` text NOT NULL,
  `Taller_img_2` text NOT NULL,
  `Taller_3` text NOT NULL,
  `Taller_img_3` text NOT NULL,
  `Mod_Taller_1` text NOT NULL,
  `Mod_text_1` text NOT NULL,
  `Mod_img_1` text NOT NULL,
  `Mod_Taller_2` text NOT NULL,
  `Mod_text_2` text NOT NULL,
  `Mod_img_2` text NOT NULL,
  `Mod_Taller_3` text NOT NULL,
  `Mod_text_3` text NOT NULL,
  `Mod_img_3` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16;

--
-- Volcado de datos para la tabla `secundaria_pag`
--

INSERT INTO `secundaria_pag` (`id_secundaria`, `titulo`, `text`, `img`, `text_2`, `img_2`, `Taller`, `Taller_1`, `Taller_img_1`, `Taller_2`, `Taller_img_2`, `Taller_3`, `Taller_img_3`, `Mod_Taller_1`, `Mod_text_1`, `Mod_img_1`, `Mod_Taller_2`, `Mod_text_2`, `Mod_img_2`, `Mod_Taller_3`, `Mod_text_3`, `Mod_img_3`) VALUES
(1, 'SECUNDARIA', 'Nuestro modelo educativo permite a nuestros alumnos tomar conciencia de su potencial, sus habilidades y su personalidad, preparándolo para tomar la decisión mas importante en la vida educativo-profesional, dotándolos de la seguridad y certeza de definir claramente la carrera en la que enfocarán el resto de su vida profesional, preparados para el aprendizaje tecnológico, ético, moral y creativo requerido para afrontar su juventud.', 'Fachadasecu.jpg', 'Aprovechamos sus conocimientos previos para perfilarlos a tomar la decisión de su carrera, al trabajar en un ambiente maker, desarrollan las capacidades necesarias para ser creativos y ofrecer respuestas innovadoras ante los problemas que aquejan a nuestra sociedad.', 'alumnossecundaria.jpg', 'Nuestros talleres', 'Futbol', 'Futsecu.JPG', 'Jazz', 'Teatro.JPG', 'Teatro', 'teatro2.JPG', 'Futbol', 'El trabajo en equipo es básico para lograr metas y objetivos en común, por ello a través del deporte desarrollamos en nuestros alumnos los hábitos necesarios para ser líderes en el futuro.', 'Futsecu.JPG', 'Jazz', 'Las nuevas tendencias musicales van de la mano de nuevos pasos de baile, la exigencia corporal que estás requieren se manifiesta en este taller que desarrollará elasticidad, ritmo y mucha actitud.', 'Jazz2.JPG', 'Teatro', 'Conocer nuestro cuerpo y manejar su potencial histriónico resulta de gran valor para las nuevas generaciones, las habilidades obtenidas en este taller le permitirán a nuestros hijos tener herramientas poderosas hacia el futuro.', 'Teatro1.JPG');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `servicios_index`
--

CREATE TABLE `servicios_index` (
  `id_serv_index` int(11) NOT NULL,
  `Titulo` varchar(80) NOT NULL,
  `1_img` text NOT NULL,
  `1_titulo` varchar(80) NOT NULL,
  `1_text` text NOT NULL,
  `2_img` text NOT NULL,
  `2_titulo` varchar(80) NOT NULL,
  `2_text` text NOT NULL,
  `3_img` text NOT NULL,
  `3_titulo` varchar(80) NOT NULL,
  `3_text` text NOT NULL,
  `4_img` text NOT NULL,
  `4_titulo` varchar(80) NOT NULL,
  `4_text` text NOT NULL,
  `5_img` text NOT NULL,
  `5_titulo` varchar(80) NOT NULL,
  `5_text` text NOT NULL,
  `6_img` text NOT NULL,
  `6_titulo` varchar(80) NOT NULL,
  `6_text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `servicios_index`
--

INSERT INTO `servicios_index` (`id_serv_index`, `Titulo`, `1_img`, `1_titulo`, `1_text`, `2_img`, `2_titulo`, `2_text`, `3_img`, `3_titulo`, `3_text`, `4_img`, `4_titulo`, `4_text`, `5_img`, `5_titulo`, `5_text`, `6_img`, `6_titulo`, `6_text`) VALUES
(1, 'Nuestros Servicios', 'Bus.svg', 'TRANSPORTE ESCOLAR', 'Nuestro servicio de transporte escolar está pensado para tu tranquilidad y comodidad. Contamos con operadores capacitados que cubren distintas rutas de forma segura y puntual en la periferia de nuestra institución.', 'comida.svg', 'SERVICIO DE COMEDOR', 'El comedor escolar, es un servicio complementario de carácter educativo que presta la administración y contribuye a una mejora de calidad de la enseñanza. Cumpliendo una función básica de alimentación.', 'Talleres.svg', 'TALLERES', 'Introducir a los niños  dentro del campo  del acondicionamiento  físico, respetando  el nivel  de actividad  propio para su edad. Contribuyendo hacia su educación integral. El deporte es la mejor forma de prevenir la obesidad infantil.', 'Regularizaion.svg', 'PLATAFORMA PARA PADRES', 'Son cursos especiales que se ofrecen para cubrir los contenidos de asignaturas de acuerdo a cada nivel para un mejor aprovechamiento escolar.', 'ipad.svg', 'PLATAFORMA EDUCATIVA', 'La plataforma educativa es una herramienta para mejorar la enseñanza y un vinculó de comunicación unicamente para nuestra comunidad escolar.', 'Tareas.svg', 'TALLER DE TAREAS', 'Como muchos papas salen de trabajar en horarios que no coincidencon las salidas del colegio, los talleres presentan una opciónpara que tanto mamá o papá e hijo terminen sus jornadas laborales y escolar, pudiendo disfrutar juntos el día.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `servicio_pag`
--

CREATE TABLE `servicio_pag` (
  `id_servicio` int(11) NOT NULL,
  `img_1` text NOT NULL,
  `titulo_1` text NOT NULL,
  `img_2` text NOT NULL,
  `titulo_2` text NOT NULL,
  `img_3` text NOT NULL,
  `titulo_3` text NOT NULL,
  `img_4` text NOT NULL,
  `titulo_4` text NOT NULL,
  `img_5` text NOT NULL,
  `titulo_5` text NOT NULL,
  `img_6` text NOT NULL,
  `titulo_6` text NOT NULL,
  `Mod_titu_1` text NOT NULL,
  `Mod_text_1` text NOT NULL,
  `Mod_img_1` text NOT NULL,
  `Mod_titu_2` text NOT NULL,
  `Mod_text_2` text NOT NULL,
  `Mod_img_descarga` text NOT NULL,
  `Mod_img_2` text NOT NULL,
  `Mod_titu_3` text NOT NULL,
  `Mod_text_3` text NOT NULL,
  `Mod_img_3` text NOT NULL,
  `Mod_titu_4` text NOT NULL,
  `Mod_titu_5` text NOT NULL,
  `Mod_text_5` text NOT NULL,
  `Mod_img_5` text NOT NULL,
  `Mod_titu_6` text NOT NULL,
  `Mod_text_6` text NOT NULL,
  `Mod_img_6` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `servicio_pag`
--

INSERT INTO `servicio_pag` (`id_servicio`, `img_1`, `titulo_1`, `img_2`, `titulo_2`, `img_3`, `titulo_3`, `img_4`, `titulo_4`, `img_5`, `titulo_5`, `img_6`, `titulo_6`, `Mod_titu_1`, `Mod_text_1`, `Mod_img_1`, `Mod_titu_2`, `Mod_text_2`, `Mod_img_descarga`, `Mod_img_2`, `Mod_titu_3`, `Mod_text_3`, `Mod_img_3`, `Mod_titu_4`, `Mod_titu_5`, `Mod_text_5`, `Mod_img_5`, `Mod_titu_6`, `Mod_text_6`, `Mod_img_6`) VALUES
(1, 'Bus.svg', 'TRANSPORTE ESCOLAR', 'comida.svg', 'SERVICIO DE COMEDOR', 'Talleres.svg', 'TALLERES', 'Regularizaion.svg', 'PLATAFORMA PARA PADRES', 'ipad.svg', 'PLATAFORMA EDUCATIVA', 'Tareas.svg', 'TALLER DE TAREAS', 'Transporte escolar', 'Nuestro servicio de Transporte escolar está pensado para tu tranquilidad y comodidad.', 'rutas.jpg', 'Servico de comedor', 'Para tu comodidad y tranquilidad contamos con servicio de comedor, en el que tu hijo recibirá menús diferentes de modo que apoyen en el crecimiento de nuestros pequeños, los alimentos son elaborados diariamente dentro de la institución.', 'Comedor.png', 'Comedor.jpg', 'Talleres', 'Para complementar la formación de tu hijo, contamos con una serie de talleres deportivo-culturales que le permitirán desarrollar su disciplina, valores y creatividad en un ambiente saludable.', 'alumnossecundaria.jpg', 'PLATAFORMA PARA PADRES', 'Plataforma educativa', 'La plataforma educativa es una herramienta para mejorar la enseñanza en la institución y un vinculó de comunicación dentro de la comunudad escolar, el acceso a esta plataforma es unicamente para la comunidad escolar.', 'alumnossecundaria.jpg', 'Taller de tareas', 'Como muchos papás salen de trabajar en horarios que no coinciden con las salidas del colegio, los talleres presentan una opción para que tanto mamá o papá e hijo terminen sus jornadas laborales y escolares, pudiendo disfrutar juntos el día.', 'Tareas.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `slider_index`
--

CREATE TABLE `slider_index` (
  `Id_img` int(11) NOT NULL,
  `Imagen` text NOT NULL,
  `slider_text` varchar(255) NOT NULL,
  `Tipo_Letra` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `slider_index`
--

INSERT INTO `slider_index` (`Id_img`, `Imagen`, `slider_text`, `Tipo_Letra`) VALUES
(1, 'Slider_Kinder.png', 'Kinder', 'letra_Oogie'),
(2, 'juego.png', 'Primaria', 'letra_Travel'),
(3, '829563_Slider5.jpg', 'Secundaria', 'letra_Avenirblack');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_usuario`
--

CREATE TABLE `tipo_usuario` (
  `Id_Tipo` int(11) NOT NULL,
  `Tipo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tipo_usuario`
--

INSERT INTO `tipo_usuario` (`Id_Tipo`, `Tipo`) VALUES
(1, 'Administrador'),
(2, 'Estandar');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user_padres`
--

CREATE TABLE `user_padres` (
  `id_padre` int(11) NOT NULL,
  `Nombre` text NOT NULL,
  `Apellido` text NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Telefono` varchar(15) NOT NULL,
  `Pass` text NOT NULL,
  `Id_Estatus` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `user_padres`
--

INSERT INTO `user_padres` (`id_padre`, `Nombre`, `Apellido`, `Email`, `Telefono`, `Pass`, `Id_Estatus`) VALUES
(1, 'Marc', 'Enciso', 'cd.marco.0106@gmail.com', '123456789', '123456', 1),
(3, 'Dayana', 'Palacios López', 'dayanpl_1013@outlook.com', '55 66 26 35 39', '1132', 1),
(4, 'Jessica', 'Berenice Vidrio Contreras', 'vidriojb@hotmail.com', '46-04-99-26', '1133', 1),
(5, 'Lilia ', 'Rodriguez Vazquez', 'lilitonga@hotmail.com', '55 18 87 89 37 ', '1134', 1),
(6, 'Laura Lilia ', 'Ramírez López', 'bemcas@hotmail.com', '55 39 66 74 21', '1135', 1),
(7, 'Laura Guadalupe', 'Barajas Murillo', 'lgbarajasm@liverpool.com.mx', '55 10 68 81 10', '1136', 1),
(8, 'Diana Grisel ', 'Baca Castellanos', 'tomasdision@gmail.com', '55 41 35 63 38', '1137', 1),
(9, 'Carolina ', 'Celis López', 'carolaalorac@yahoo.com.mx', '55 29 61 44 66', '1138', 1),
(10, 'Martha Patricia ', 'Cortes Veloz', 'patricia_cortes02@hotmail.com', '5528880036', '1139', 1),
(11, 'Nancy ', 'Ordoñez Diaz', 'nanesth@hotmail.com', '55-45-07-87-13', '1140', 1),
(12, 'Veronica', 'Díaz Vallejo', 'rafjezand73@gmail.com', '55 26 55 26 22', '1141', 1),
(13, 'Rosa Ma. ', 'Moreno Infante', 'rooxmar@outlook.es', '55 47 65 78 14', '1142', 1),
(14, 'Jazmin Alejandro ', 'Valencia Salazar', 'jazvalencia@hotmail.com', '55 34 92 31 52', '1143', 1),
(15, 'Sandra ', 'Lepe Hernández', 'lepesandra@hotmail.com', '55 22 20 60 61', '1144', 1),
(16, 'Erika Edith ', 'Najera Angeles', 'erika.najera@marsh.com', '55 33 13 27 92', '1145', 1),
(17, 'Karla Alejandra ', 'Hernández Elizalde', 'elizaldekarla@yahoo.com.mx', '55 76 72 72 16', '1146', 1),
(18, 'Guadalupe ', 'Monroy Diaz', 'guadalupe.monroy.diaz@gmail.com', '55 20 04 61 32', '1147', 1),
(19, 'Lilian ', 'Morón Pérez', 'lilian.moron@hotmail.com', '55 71 09 89 57', '1148', 1),
(20, 'Cinthya Gabriela ', 'Rocha Muñoz', 'andrea_denisse_hernandez@outlook.com', '55 18 31 25 3', '1149', 1),
(21, 'Anahi', 'Rodriguez Hernandez', 'fresani@hotmail.com', '55 35 51 94 09', '1150', 1),
(22, 'Ursula ', 'Gonzalez Garcia', 'ursula-ggusy@hotmail.com', '55 28 79 60 04', '1151', 1),
(23, 'Libertad Leticia ', 'Lara Cardiel', 'libertad1013@hotmail.com', '55 10 96 88 66', '1152', 1),
(24, 'Maritza ', 'Tellez Rodriguez ', 'mary.upem@gmail.com', '55 40 44 52 07', '1153', 1),
(25, 'Jessica Ivette ', 'Chacón Valdez', 'jessica.chacon.sjp1891@live.com.mx', '55 59 53 31 45', '1154', 1),
(26, 'Elida Minerva ', 'Cerero Garduño', 'elimincg@yahoo.com.mx', '55 41 41 02 28', '1155', 1),
(27, 'Nehiel Alicia ', 'Romero Montes ', 'licha001@outlook.com', '55 59 62 73 99', '1156', 1),
(28, 'Sofia Ivette', 'Beltrán Arrieta', 'irwing_beltran@yahoo.com.mx', '55 65 12 43 88', '1157', 1),
(29, 'Ivonne Consuelo ', 'Saavedra Silva', 'ivonsasi0512@gmail.com', '55 32 33 27 09', '1158', 1),
(30, 'Dulce Berenice', 'Resendiz fuentes', 'dbresendizf@gmail.com', '55 48 32 27 16 ', '1159', 1),
(31, 'Delia Lucero ', 'Romero Bonilla', 'ailaza05@hotmail.com', '55 35 01 28 81', '1160', 1),
(32, 'Elizabeth ', 'Rodriguez Romero', 'elyrore28@gmail.com', '55 20 73 57 50', '1161', 1),
(33, 'AndreaItzel ', 'Gonzalez Martínez ', 'camrey@hotmail.com', '55 18 90 60 58', '1162', 1),
(34, 'Natalia ', 'González García', 'luzyarte_mn@hotmail.com', '55 71 70 93 82', '1163', 1),
(35, 'Nancy Teresa ', 'Padilla Villa', 'theresa_pv@hotmail.com', '55 33 20 28 53', '1164', 1),
(36, 'Sandra ', 'Flores Ramírez', 'sandyramz@yahoo.com.mx', '55 27 64 89 74', '1165', 1),
(37, 'Guadalupe ', 'Vazquez Castañón', 'dj_jerry84@hotmail.com', '55 41 28 36 42', '1166', 1),
(38, 'Tanya Pricila ', 'Torres Sánchez', 'tanyapts@hotmail.com', '55 62 07 77 40', '1167', 1),
(39, 'Sorina ', 'Gómez González', 'sorinagomez@yahoo.com.mx', '55 51 44 97 92', '1168', 1),
(40, 'Silvia ', 'Rodriguez Angel', 'sra2310@gmail.com', '55 18 49 93 89', '1169', 1),
(66, 'Angelica Paola ', 'Triana Escoto', 'angylux77@gmail.com', '55 36 67 56 58', '3421', 1),
(67, 'Zenit ', 'Arreola Villanueva', 'zarreola@gbadvi.com', '55 70 51 86 12', '3422', 1),
(68, 'Nancy Berenice ', 'Martínez Miranda', 'berezajmc@gmail.com', '', '3423', 1),
(69, 'Luisa Teresa ', 'Castillo Rojas', 'luisater@hotmail.com', '55 20 38 74 23', '3424', 1),
(70, ' Gisela Lizeth ', ' Moreno Torres', 'lilitbruja@hotmail.com', '55 12 78 87 91', '3425', 1),
(71, 'Jazmin Alejandro ', 'Valencia Salazar', 'jazvalencia@hotmail.com', '55 34 92 31 52', '3426', 1),
(72, 'Yesenia ', 'Velazquez Diaz', 'rjosue78@hotmail.com', '55-85-68-86-31', '3427', 1),
(73, 'Yazmín Yadira ', 'Renero Millán', 'nataliadr24@outlook.com', '55 32 49 64 31', '3428', 1),
(74, 'Beatriz ', 'Olvera Mejia', 'bety_flower_jolly@hotmail.com', '55 31 34 79 26', '3429', 1),
(75, 'Nancy Ludel ', 'Hernández Ramírez', 'judel81@hotmail.com', '55-11-56-90-52', '3430', 1),
(76, 'Karla ', 'Quintero Silva', 'karlaqs@icloud.com', '55 81 98 17 89', '3431', 1),
(77, 'Yeny ', 'Exposito Rodríguez', 'antonioiturbe77@yahoo.com.mx', '55 59 63 34 50', '3432', 1),
(78, 'Mónica Fabiola ', 'Narvaéz Villanueva', 'moninarvi@hotmail.com', '55 25 00 22 76', '3433', 1),
(79, 'Graciela Citlalli ', 'Meza Uresti', 'ciuresti@gmail.com', '55 52 48 25 13', '3434', 1),
(80, 'Maria Guadalupe ', 'Ramirez Jimenez', 'paoli200504@gmail.com', '', '3435', 1),
(81, 'Gabriela ', 'Garrido Romero', 'fernanda_garrido13@hotmail.com', '55 23 41 91 83', '3436', 1),
(82, 'Gloria Nayelli ', 'Romero de la Torre', 'nayebb8@yahoo.com.mx', '55 27 22 68 54', '3437', 1),
(83, 'Violeta Vianney ', 'Piña Moyca', 'viannp_4@yahoo.com', '55 21 75 52 52 ', '3438', 1),
(84, 'Alma Velia ', 'Rodríguez Valle', 'alma.rodriguez@owenscorning.com', '55 60 63 81 04', '3439', 1),
(85, 'Lourdes ', 'Velazquez Martínez', 'vrazo@live.com.mx', '', '3440', 1),
(86, 'Obdulia Yazmín ', 'Chavez Gordillo', 'yazminchavezgo@hotmail.com', '55 36 42 87 52', '3441', 1),
(87, 'Maria Del Carmen ', 'Bobadilla Serrano', 'amor_saile@hotmail.com', '55 72 10 39 08', '3442', 1),
(88, 'Sheridan Surisadan ', 'Hernández Rivera', 'sheridan_hr93@outlook.com', '55 15 37 66 52', '3443', 1),
(89, 'Erendira Anayantzi ', 'Celio Sanchez', 'erendira860714@gmail.com', '55 22 03 35 13', '3444', 1),
(90, 'Libertad Yolloltzin ', 'Contreras Rivera', 'yolloltzin-81@hotmail.com', '55 60 80 40 68 ', '3445', 1),
(91, 'Penelope Alejandra ', 'Mendoza Lara', 'daniel.trujillo.aguila@hotmail.com', '55 69 70 49 63', '3446', 1),
(92, 'Karina ', 'Gómez Juarez', 'kariashanti@hotmail.com', '55 76 81 11 12', '3447', 1),
(93, 'Brenda ', 'Salcedo Barajas ', 'bresbar01@hotmail.com', '55 19 32 24 21', '3448', 1),
(128, 'nombre', 'app', 'correo', 'tel', 'contra', 0),
(129, 'Jessica Berenice ', 'Vidrio Contreras', 'vidriojb@hotmail.com', '55 49 51 52 42', '6791', 1),
(130, 'Verónica ', 'Sánachez Hernández', 'veroisaijosue770120@live.com.mx', '55 38 40 02 05', '6792', 1),
(131, 'Maria Esther ', 'Torres Noriega', 'esther_torresnoriega@yahoo.com.mx', '5527362907', '6793', 1),
(132, 'Jennifer Liseth ', 'Cortes Ramirez', 'hecticocc@hotmail.com', '55 66 18 96 83', '6794', 1),
(133, 'Nancy Esther ', 'Ordoñez Diaz', 'nanesth@hotmail.com', '55 70 09 46 19', '6795', 1),
(134, 'Yessica Denisse ', 'Diaz Martinéz', 'yessica_d1@hotmail.com', '55 11 18 73 61', '6796', 1),
(135, 'Sandra Lepe Hernández', 'Lepe Hernández', 'lepesandra@hotmail.com', '55 22 20 60 61', '6797', 1),
(136, 'Sofia Flores Velez', 'Flores Velez', 'sofiafv@hotmail.com', '55 54 00 32 51', '6798', 1),
(137, 'Alma Laura ', 'Garcia Ruiz', 'a.garcia@garniet.com.mx', '55 33 02 43 24', '6799', 1),
(138, 'Fernanda Ivette ', 'Blanco Delgado', 'fernanda.blanco1617@gmail.com', '55 62 46 98 40', '6800', 1),
(139, 'Carmen Josselyn ', 'Gonzalez Gutierrez', 'c.josselyn.g.g@outlook.com', '55 69 88 98 87', '6801', 1),
(140, 'Citlalli Grisel ', 'Albavera López', 'cigris83@hotmail.com', '55 18 67 36 47', '6802', 1),
(141, 'Mireya Margarita ', 'Morales Calderon', 'mireya_morales_neider@yahoo.com.mx', '55 63 16 54 74', '6803', 1),
(142, 'Evelyn ', 'Aparicio Marbán', 'crismarbiap@gmail.com', '55 10 81 80 13', '6804', 1),
(143, 'Paulina ', 'Salas Hernández', 'pausa_her@hotmail.com', '55 85 44 12 68', '6805', 1),
(144, 'Ivonne ', 'Saavedra Silva', 'ivonsasi0512@gmail.com', '04455 32 33 27 ', '6806', 1),
(145, 'Karen Linneth ', 'Rodriguez Vargaz', 'karen_linneth@hotmail.com', '55 26 76 19 15', '6807', 1),
(146, 'Erika Patricias ', 'Corona Martinez', 'erikacorona.321p@gmail.com', '55 16 49 94 73 ', '6808', 1),
(147, 'Daniela ', 'Rocha Urbina', 'rocha.daniiela@gmail.com', '5566 08 70 75 ', '6809', 1),
(148, 'Elsie ', 'Aguilera Ocampo', 'elsieao@prodigy.net.mx', ' 55 54 01 85 80', '6810', 1),
(149, 'Ivette', ' Hernández León ', 'ivettahele@yahoo.com.mx', '55 17 25 59 81', '6811', 1),
(150, 'Xochitl ', 'Martinez Montes', 'xmm_73@yahoo.com.mx', '5536771917', '6812', 1),
(151, 'Anabel ', 'Cruz Aquino', 'menta_2409@hotmail.com', '55 35 21 78 26', '6813', 1),
(152, 'Elia Lizbeth ', 'Torres Vargas', 'elia240209@hotmail.com', '55 47 81 82 56', '6814', 1),
(153, 'Claudia ', 'Escoto Carreon', 'cec180270@gmail.com', '55 66 29 71 11', '6815', 1),
(154, 'Sorina ', 'Gomez Gonzalez', 'sorinagomez@yahoo.com.mx', '5551449792', '6816', 1),
(155, 'Nancy ', 'Cruz Cruz', 'cdnancy17@hotmail.com', '04455 21 07 30 ', '6817', 1),
(156, 'Norma Aileen ', 'Hassey Ibarra', 'aileenhass@gmail.com', ' 55 29 72 87 20', '6818', 1),
(157, 'Yaneth', ' Bellido Sánchez', 'yanysbell@gmail.com', '55 55 08 45 97', '6819', 1),
(158, 'Marlene Edith ', 'Valdez Jimenez', 'marlenevaljim@hotmail.com', '55 31 91 85 31', '6820', 1),
(159, 'Sandra ', 'Avendaño Zarate', 'bebe_2531@hotmail.com', '55 28 90 39 95', '6821', 1),
(160, 'Laura Lilia ', 'Ramírez López', 'bemcas@hotmail.com', '55 39 66 74 21', '6822', 1),
(161, 'Maria Guadalupe ', 'Hernandez Vázquez', 'lupis1121@hotmail.com', '055 55 51 96 68', '6823', 1),
(162, 'Belén Elena ', 'Castañeda Parrilla', 'belenelenacastaneda@hotmail.com', '55 18 84 93 57', '6824', 1),
(163, 'Adriana', ' Hernández García', 'ahernandezg@lacorona.info', '', '6825', 1),
(164, 'Cinthya ', 'Mendoza Godinez', 'claritaprincesss9@hotmail.com', '55 33 94 56 06 ', '6826', 1),
(165, 'María Laura ', 'Rodríguez Chavez', 'prettylove2211@gmail.com', '55 79 07 80 10', '6827', 1),
(166, 'Brenda Rocio ', 'Martinez Guerrero', 'brenxter@gmail.com', '55 16 53 07 78', '6828', 1),
(167, 'Guadalupe ', 'Monroy Díaz', 'guadalupe.monroy.diaz@gmail.com', '55 20 04 61 32', '6829', 1),
(168, 'Rosa Itzel ', 'Ramos Madrigal', 'itzy01@yahoo.com.mx', '', '6830', 1),
(169, 'Piedad ', 'Marquez  Jimenez ', 'dipi_princesshotmail.com', '55 13 47 61 57', '6831', 1),
(170, 'Liliana ', 'Hernandez Huerta', 'lili_herhuerta@yahoo.com.mx', '55 10 05 18 82', '6832', 1),
(171, 'Angeles del Rosario', ' Del Alba Cruz', 'angie240208@gmail.com', '55 28 63 60 15', '6833', 1),
(172, 'Anahi ', 'Rodriguez Hernandez', 'fresani@hotmail.com', '55 35 51 94 09', '6834', 1),
(173, 'Gloria Nayelli ', 'Romero de la Torre', 'nayebb8@yahoo.com.mx', '55 27 22 68 54', '6835', 1),
(174, 'Paola ', 'Rosete Martínez', 'bufmendieta@hotmail.com', '55 65 04 57 97', '6836', 1),
(175, 'Lizbeth ', 'Hernandez Guzman', 'hlizg2002@yahoo.com.mx', '55 65 75 88 78', '6837', 1),
(176, 'Lucia Stefanie ', 'Aguilar Sanchez', 'oola7609@hotmail.com', '55 23 97 26 78', '6838', 1),
(177, 'Mireya Margarita ', 'Morales Calderón', 'mireya_morales_neider@yahoo.com.mx', '55 63 16 59 74', '6839', 1),
(178, 'Berenice ', 'Sanchez Martinez', 'santy_paz@hotmail.com', '55 49 59 40 24', '6840', 1),
(179, 'Adriana ', 'Rodriguez Ramirez', 'adryfer56@yahoo.com.mx', '55 55 05 25 94', '6841', 1),
(180, 'Nelly ', 'Rodríguez Viguerás', '', '55 44 55 82 14', '6842', 1),
(181, 'Estephany ', 'Montalvo Pavón', 'fany_bombon6@hotmail.com', '55 45 97 61 86', '6843', 1),
(182, 'Norma Patricia ', 'Carbó Martínez', 'carbopaty@gmail.com', '55 48 01 76 26', '6844', 1),
(183, 'Linda Jezreel ', 'Mendoza Bruno', 'jezlin777@yahoo.com.mx', '55 20 22 73 38', '6845', 1),
(184, 'Sandra ', 'Flores Ramírez', 'sandyramz@yahoo.com.mx', '55 27 64 89 74', '6846', 1),
(185, 'Tanya Pricila ', 'Torres Sánchez', 'tanyapts@hotmail.com', '55 62 07 77 40', '6847', 1),
(186, 'Brenda ', 'Salcedo Barajas ', 'bresbar01@hotmail.com', '55 19 32 24 21', '6848', 1),
(187, 'Celia Markidia ', 'Barradas Alfaro', '', '55 49 00 69 56', '6849', 1),
(188, 'Claudia Adriana ', 'Ramírez Díaz', 'cramirez@solfi.com.mx', '77 11 27 97 16', '6850', 1),
(189, 'Claudia Elba ', 'Cruz Cortes', 'ccruz@jumex.com.mx', '55 46 11 63 36', '6851', 1),
(190, 'Veronica ', 'Díaz Vallejo', 'rafjezand73@gmail.com', '55 26 55 26 22', '6852', 1),
(191, 'Arianny Josefina ', 'Pineda Vale', 'arijopi@gmail.com', '55 23 06 55 88', '6853', 1),
(192, 'Alma Laura ', 'García Ruiz', 'alma.conta@hotmail.com', '55 33 02 43 24 ', '6854', 1),
(193, 'Karla Alejandra ', 'Hernández Elizalde', 'litakarelizalde@hotmail.com', '55 76 72 72 16', '6855', 1),
(194, 'María Guadalupe ', 'Dionisio Mata', 'helen_valeri_@hotmail.com', '55 48 85 42 86', '6856', 1),
(195, 'Angeles del Rosario ', 'De Alba Cruz', 'angie240208@gmail.com', '55 28 63 60 15', '6857', 1),
(196, 'Gina ', 'Montaño Galicia', '', '55 37 97 25 20', '6858', 1),
(197, 'Elida Minerva ', 'Cerero Garduño', 'elimincg@yahoo.com.mx', '55 41 41 02 28', '6859', 1),
(198, 'Hellen G. ', 'Aguilar Villalobos', 'flopiti1@hotmail.com', '55 42 14 12 91', '6860', 1),
(199, 'Elizabeth ', 'Ramos López', 'amparga690@gmail.com', '55 27 55 52 75', '6861', 1),
(200, 'Teresa ', ' Rojas Castañon', 'tererojasc@hotmail.com', '55 28 8865 54', '6862', 1),
(201, 'Evelyn Sarai ', 'Arellano Hinojosa', 'sherezada_sarahi@hotmail.com', '55 20 08 67 75', '6863', 1),
(202, 'Ma. Del Carmen ', 'Bobadilla Serrano', 'amor_saile@hotmail.com', '55 72 10 39 08', '6864', 1),
(203, 'Blanca Margarita ', 'Castillo Estrada', '', '55 35 35 42 72', '6865', 1),
(204, 'Leticia ', 'Jimenez Pimentel', 'oruga-1979@hotmail.com', '55 61 02 56 46 ', '6866', 1),
(205, 'Silvia ', 'Rodriguez Angel', 'sra2310@gmail.com', '55 18 49 93 89', '6867', 1),
(206, 'Yaneth ', 'Bellido Sánchez', 'yaneth.bellido@hotmail.com', '55 55 08 45 97', '6868', 1),
(207, 'Melina Guadalupe ', 'Fernández Dávila', 'comprasmelina@yahoo.com.mx', '44 39 02 02', '6869', 1),
(208, 'Veronica ', 'Sánchez Hernandez', 'veroisaijosue770120@live.com.mx', '55 33 53 92 51', '6870', 1),
(209, 'Alejandra Sosa Ramírez', ' Sosa Ramírez', 'alesos12@prodigy.net.mx', '65 81 42 71', '6871', 1),
(210, 'Martha Patricia ', 'Cortés Veloz', 'patricia_cortes02@hotmail.com', '55 28 88 00 36 ', '6872', 1),
(211, 'Guadalupe ', 'Bedolla Cardenas', 'krydagu@gmail.com', '55 62 86 90 13', '6873', 1),
(212, 'Cinthya ', 'Mendoza Godinez', 'claritaprincesss9@hotmail.com', '49 99 11 32', '6874', 1),
(213, 'Tania ', 'Gonzalez Arguello', 'tania_gonzalezarguello07@yahoo.com', '55 62 30 56 44', '6875', 1),
(214, 'Iridiana ', 'Hernandez Santos', 'iridiana_jones@hotmail.com', '55 51 43 00 56', '6876', 1),
(215, 'Brenda Rocio ', 'Martínez Guerrero', 'brenxter@gmail.com', '55 16 53 07 78', '6877', 1),
(216, 'Rosaura ', 'Alvarez Bautista', 'alvarez.go.pa@gmail.com', '66 43 94 35', '6878', 1),
(217, 'Hebe Carmina ', 'Gallardo Castillo ', 'hebegallardo@hotmail.com', '55 13 84 98 29', '6879', 1),
(218, 'Paola Edith ', 'Gónzalez Arias', 'paogon_1@hotmail.com', '55 49 94 44 44', '6880', 1),
(219, 'Nancy Judel ', 'Hernández Ramírez', 'judel81@hotmail.com', '55 11 56 90 52', '6881', 1),
(220, 'Sandra ', 'Martinez Miranda', '', '55 22 54 14 24', '6882', 1),
(221, 'Lizbeth ', 'Hernández Guzman', 'hlizg2002@yahoo.com.mx', '55 65 76 88 78', '6883', 1),
(222, 'Eloisa ', 'González Barrera', 'elybarrera.082@gmail.com', '55 16 38 56 97', '6884', 1),
(223, 'Viridiana ', 'Alcaraz Vero', 'viridiana.alcaraz@hotmail.com', '55 32 25 12 28', '6885', 1),
(224, 'Berenice ', 'Sanchez Martinez', 'santy_paz@hotmail.com', '55 17 52 55 84', '6886', 1),
(225, 'Patricia ', 'Estrada Anzures', 'patilukaz@yahoo.com.mx', '55 32 47 02 86', '6887', 1),
(226, 'Delia Lucero ', 'Romero Bonilla', 'ailaza05@hotmail.com', '55 35 01 28 81', '6888', 1),
(227, 'Alama Nallely ', 'Urban Alvarez', 'anua80@hotmail.com', '55 43 83 03 85', '6889', 1),
(228, 'Elsie ', 'Aguilera Ocampo', 'elsieao@prodigy.net.mx', ' 55 54 01 85 80', '6890', 1),
(229, 'Erendira Anayantzi ', 'Celio Sanchez', 'erendira860714@gmail.com', '55 22 03 35 13', '6891', 1),
(230, 'Silvia ', 'Garcia Ortiz ', 'silviago03@hotmail.com', '55 30 71 77 31', '6892', 1),
(231, 'Mayela Aide ', 'Muñoz Montes', 'mayelaa.munoz@hotmail.com', '55 35 87 89 64 ', '6893', 1),
(232, 'Mara cielo', ' Escobar Salinas', 'fernanda-ratoncita@hotmail.com', '55 11 71 19 49', '6894', 1),
(233, 'Claudia Wendi ', 'Marure Nieto', 'conymarure123@gmail.com', '55 24 37 36 55', '6895', 1),
(234, 'Maricela', ' Fernández Gómez', 'mariet85@hotmail.com', '55 32 37 90 50 ', '6896', 1),
(235, 'Paola Edith ', 'Gónzalez Arias', 'paogon_1@hotmail.com', '55 49 94 44 44', '6897', 1),
(236, 'Ma. Guadalupe', ' Ramirez Jimenez', 'ilsejorge0104@gmail.com', '55 70090598', '6898', 1),
(237, 'Christiane Isabel ', 'Martinez Villagómez', 'vivir_intensamente@hotmail.com', '55 16 25 51 74', '6899', 1),
(238, 'Lucia Stefanie ', 'Aguilar Sanchez', '', '55 23 97 26 78', '6900', 1),
(239, 'Adriana ', 'Alcocer Acosta', 'autocristales_adi@hotmail.com', '55 46 16 03 66 ', '6901', 1),
(240, 'Ma. Lourdes ', 'Velazquez Martínez', 'vrazo@live.com.mx', '55 27 16 67 50', '6902', 1),
(241, 'Nelly Rodríguez Viguerás', 'Rodríguez Viguerás', '', '55 44 55 82 14', '6903', 1),
(242, 'Magda Jannet ', 'Fonseca Cruz', 'mfonseca26@hotmail.com', '55 14 97 42 05', '6904', 1),
(243, 'Zenit ', 'Arreola Villanueva', 'zarreola@gbadvi.com', '55 70 51 86 12', '6905', 1),
(244, 'Claudia ', 'Hernandez Moreno', 'clahermo@mail.telcel.com', '55 26 99 41 94', '6906', 1),
(245, 'Guadalupe ', 'Bedolla Cardenas', 'olycasasola@yahoo.com.mx', '55 62 86 90 13', '6907', 1),
(246, 'Alejandra ', 'Isidoro ', 'alejandra.isidoro@prodigy.net.mx', '55 38 25 50 17 ', '6908', 1),
(247, 'Liliana ', 'Valdez Calleja', 'ly-once11@hotmail.com', '55 44 71 69 03', '6909', 1),
(248, 'Paz ', 'Cano Leal', 'calep14@outlook.es', '55 45 63 21 70', '6910', 1),
(249, 'Ana Luisa ', 'Martínez Pérez', 'alfonso.inversion@hotmail.com', '55 43 80 43 70', '6911', 1),
(250, 'Maribel ', 'Gonzalez ', '', '55 39 32 52 53', '6912', 1),
(251, 'Sandra ', 'Martinez Miranda', '', '55 22 54 14 24', '6913', 1),
(252, 'Marcia Janiel ', 'Rosillo Gómez', 'kedama_25@hotmail.com', '55 33 32 53 72', '6914', 1),
(253, 'Marvella', ' Escamilla Rivera', 'rubeldino@yahoo.com.mx', '', '6915', 1),
(254, 'Gabriela Citlalli ', 'Meza Uresti', 'citlaures@yahoo.com.mx', '55 52 48 25 13', '6916', 1),
(255, 'Hericka ', 'Lopez Martinez', 'dakotajn@hotmail.com', '55 19 02 60 94', '6917', 1),
(256, 'Hericka', 'Lopez Martinez', 'dakotajn@hotmail.com', '55 19 02 60 94', '6918', 1),
(257, 'Viridiana ', 'Alcaraz Vero', 'viridiana.alcaraz@hotmail.com', '55 32 25 12 28', '6919', 1),
(258, 'Elsie ', 'Aguilera Ocampo', 'elsieao@prodigy.net.mx', '044 55 54 01 85', '6920', 1),
(259, 'Xochitl ', 'Martinez Montes', 'xmm_73@yahoo.com.mx', '04455-3677-1917', '6921', 1),
(260, 'Leticia ', 'Jimenez Pimentel', 'oruga-1979@hotmail.com', '45 96 53 94', '6922', 1),
(261, 'Maribel ', 'Márquez Luna', 'marquezorl@yahoo.com.mx', '55 70 62 65 59', '6923', 1),
(262, 'Nancy Berenice ', 'Martinez Miranda', 'bere79jmc@gmail.com', '55 63 50 93 47', '6924', 1),
(263, 'Cinthya ', 'Mendoza Godinez', 'claritaprincesss9@hotmail.com', '55 33 94 56 06', '6925', 1),
(264, 'Concepción ', 'Perez Recinos', 'elizondopa@gmail.com', '5532869288', '6926', 1),
(265, 'Sandra ', 'Flores Ramírez', 'sandyramz@yahoo.com', '55 27 64 89 74', '6927', 1),
(266, 'Nehiel Alicia  ', 'Romero Montes', 'michodixit@gmail.com', '  55 59 62 73 9', '6928', 1),
(267, 'Marcia Janiel ', 'Rosillo Gómez', 'kedama_25@hotmail.com', '55 33 32 53 72', '6929', 1),
(268, 'Ivette Rocio ', 'Cisneros Jimenez', 'ivecisneros@hotmail.com', '55 66 99 69 28', '6930', 1),
(269, 'Jacquelinne ', 'Vazquez Gomez', 'jackye_uri@live.com.mx', '55 12 36 39 52 ', '6931', 1),
(270, 'Sandra Lucia ', 'Salomo Suarez', '', '55 21 75 08 26 ', '6932', 1),
(271, 'Teresa ', 'Rojas Castañon', 'tererojasc@hotmail.com', '55 28 8865 54', '6933', 1),
(272, 'Alma Nallely ', 'Urban Alvarez', 'anua80@hotmail.com', '55 43 83 03 85', '6934', 1),
(273, 'nombre', 'app', 'email', 'telefono', 'pass', 0),
(274, 'Marlene Edith ', 'Valdez Jimenez', '\"marlenevaljim@hotmail.com,\"', '55 31 91 85 31', '3563', 1),
(275, 'Monica ', 'Carmona Ramírez', 'monica.zerimar@hotmail.com', '55 44 77 58 76', '3564', 1),
(276, 'Jessica Valeria  ', 'Chavez Rojas', 'chavezjessica2@gmail.com', '55 37 09 19 48', '3565', 1),
(277, 'Monica Areuza ', 'Alarcon Garcia', 'monica_maestria83@hotmail.com', ' 33 15 99 16 70', '3566', 1),
(278, 'Alizon Fernanda ', 'Dias Martínez', 'alyyzon@gmail.com', '55 77 82 16 85 ', '3567', 1),
(279, 'Anahi Alejandra ', 'Navarrete Martínez ', 'alenava_26@outlook.com', '55 14 80 63 48 ', '3568', 1),
(280, 'Sujey Susana ', 'Ramos Torres', 'sujeysrt1@hotmail.com', '55 22 00 64 84', '3569', 1),
(281, 'María del Consuelo ', 'Morales Ortíz', 'moralerconsuelo79@gmail.com', '55 41 33 65 74', '3570', 1),
(282, 'Ana Karen', ' Sánchez Monroy', 'karenmonroy0104@gmail.com', '55 40 57 66 88', '3571', 1),
(283, 'Mayela Aide', ' Muñoz Montes', 'mayelaa.munoz@hotmail.com', '55 35 87 89 64 ', '3572', 1),
(284, 'Jose David ', 'Huanosta Urban', '\"dav_89la@hotmail.com,\"', '55 38 99 18 32', '3573', 1),
(285, 'Roberto ', 'Jardon Miranda', '\"rjardonm@hotmail.com,\"', '55 40 27 67 30 ', '3574', 1),
(286, 'Jaime Enrique ', 'López Sanjurjo', 'jaime.sanjurjo@gmail.com', '55 10 12 70 33', '3575', 1),
(287, 'Luis Joharid', ' Martinez Gallego ', '\"joharid@hotmail.com,\"', '55 12 32 71 90', '3576', 1),
(288, 'Huberto Raúl ', 'Oropeza Galvan', '\"rauluriel2906@gmail.com,\"', '55 47 28 14 60 ', '3577', 1),
(289, 'Julio Felipe ', 'Pérez Flores', '\"drjuliofpf@gmail.com,\"', '55 37 59 01 93', '3578', 1),
(290, 'Pablo Cesar ', 'Saavedra Silva', '', '044 55 54 02 95', '3579', 1),
(291, 'Alejandro E. ', 'Saavedra Silva', '\"alejandross@ssmetalf.mx,\"', '55 54 07 41 65', '3580', 1),
(292, 'Josue ', 'Torres Del Valle', '\"josuetorresdelvalle27@gmail.com,\"', '10 40 82 30', '3581', 1),
(293, 'Omar', ' Vazque Cuevas', '', '55 19 12 83 22', '3582', 1),
(294, 'Alicia Angelica ', 'López Mora', 'angelica.lopez@cbv-consultores.com', '55 22 03 64 79', '3583', 1),
(295, 'Rosario Guadalupe ', 'Liceaga Polo', 'liceaga.polo@gmail.com', '55 67 05 28 21', '3584', 1),
(296, 'Ma. Magdalena', ' Ramírez Mejía', '\"maguisramirez@hotmail.com,\"', '55 35 09 86 43', '3585', 1),
(297, 'Sujey Susana ', 'Ramos Torres.', '\"codisas@prodigy.net.mx;  codisa_@maxcom.net.mx,\"', '55 22 00 64 84', '3586', 1),
(298, 'Nelly ', 'Hernandez Paredes', '\"juarez4828@gmail.com,\"', '55 50 06 43 95', '3587', 1),
(299, 'Annet Areli ', 'Sandoval Pulido', '\"compusaro2@hotmail.com,\"', '55 66 31 62 75 ', '3588', 1),
(300, 'Anahi ', 'Rodriguez Hernandez', '\"fresani@hotmail.com,\"', '55 35 51 94 09', '3589', 1),
(301, 'Liliana ', 'Resendiz García', '\"gigiana@live.com.mx,\"', '55 20 42 19 46 ', '3590', 1),
(302, 'Christiane Isabel ', 'Martinez Villagomez', '\"vivir_intensamente@hotmail.com,\"', '5516255174', '3591', 1),
(303, 'Violeta Vianney ', 'Piña Moyca', '\"viannp_4@yahoo.com,\"', '55 21 75 52 52 ', '3592', 1),
(304, 'Alma Velia ', 'Rodríguez Valle', '\"alma.rodriguez@owenscorning.com,\"', '55 60 63 81 04', '3593', 1),
(305, 'Adriana ', 'Rodriguez Ramirez', '\"adryfer56@yahoo.com.mx,\"', '55 55 05 25 94', '3594', 1),
(306, 'Lizath ', 'Garibay Barrera', '\"liz_fr3s4@hotmail.com,\"', '55 20 43 57 23', '3595', 1),
(307, 'Celia Berenice ', 'Ruiz Gonzalez', '\"beye.ruiz@gmail.com,\"', '55 65 76 77 09', '3596', 1),
(308, 'Mariana Guadalupe ', 'Andrade Llanos', '\"mariana_1012@outlook.es,\"', '50 06 39 76', '3597', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `Id_Usuario` int(11) NOT NULL,
  `Nombre` text NOT NULL,
  `Apellido` text NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Pass` text NOT NULL,
  `Id_Tipo` int(11) NOT NULL,
  `Id_Estatus` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`Id_Usuario`, `Nombre`, `Apellido`, `Email`, `Pass`, `Id_Tipo`, `Id_Estatus`) VALUES
(1, 'Alan ', 'Elisondo', 'Alan@gmail.com', '123456', 1, 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `contenido_padres`
--
ALTER TABLE `contenido_padres`
  ADD PRIMARY KEY (`id_con_pa`);

--
-- Indices de la tabla `desarrollo_pag`
--
ALTER TABLE `desarrollo_pag`
  ADD PRIMARY KEY (`id_desarrollo`);

--
-- Indices de la tabla `estatus`
--
ALTER TABLE `estatus`
  ADD PRIMARY KEY (`Id_Estatus`);

--
-- Indices de la tabla `kinder_pag`
--
ALTER TABLE `kinder_pag`
  ADD PRIMARY KEY (`id_kinder`);

--
-- Indices de la tabla `mejor_eleccion`
--
ALTER TABLE `mejor_eleccion`
  ADD PRIMARY KEY (`Id_Mejor`);

--
-- Indices de la tabla `pirmaria_pag`
--
ALTER TABLE `pirmaria_pag`
  ADD PRIMARY KEY (`id_kinder`);

--
-- Indices de la tabla `quienes_somos_pag`
--
ALTER TABLE `quienes_somos_pag`
  ADD PRIMARY KEY (`Id_quienes`);

--
-- Indices de la tabla `quines_somos_index`
--
ALTER TABLE `quines_somos_index`
  ADD PRIMARY KEY (`Id_Quienes`);

--
-- Indices de la tabla `secundaria_pag`
--
ALTER TABLE `secundaria_pag`
  ADD PRIMARY KEY (`id_secundaria`);

--
-- Indices de la tabla `servicios_index`
--
ALTER TABLE `servicios_index`
  ADD PRIMARY KEY (`id_serv_index`);

--
-- Indices de la tabla `servicio_pag`
--
ALTER TABLE `servicio_pag`
  ADD PRIMARY KEY (`id_servicio`);

--
-- Indices de la tabla `slider_index`
--
ALTER TABLE `slider_index`
  ADD PRIMARY KEY (`Id_img`);

--
-- Indices de la tabla `tipo_usuario`
--
ALTER TABLE `tipo_usuario`
  ADD PRIMARY KEY (`Id_Tipo`);

--
-- Indices de la tabla `user_padres`
--
ALTER TABLE `user_padres`
  ADD PRIMARY KEY (`id_padre`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`Id_Usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `contenido_padres`
--
ALTER TABLE `contenido_padres`
  MODIFY `id_con_pa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `desarrollo_pag`
--
ALTER TABLE `desarrollo_pag`
  MODIFY `id_desarrollo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `estatus`
--
ALTER TABLE `estatus`
  MODIFY `Id_Estatus` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `kinder_pag`
--
ALTER TABLE `kinder_pag`
  MODIFY `id_kinder` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `mejor_eleccion`
--
ALTER TABLE `mejor_eleccion`
  MODIFY `Id_Mejor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `pirmaria_pag`
--
ALTER TABLE `pirmaria_pag`
  MODIFY `id_kinder` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `quienes_somos_pag`
--
ALTER TABLE `quienes_somos_pag`
  MODIFY `Id_quienes` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `quines_somos_index`
--
ALTER TABLE `quines_somos_index`
  MODIFY `Id_Quienes` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `secundaria_pag`
--
ALTER TABLE `secundaria_pag`
  MODIFY `id_secundaria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `servicios_index`
--
ALTER TABLE `servicios_index`
  MODIFY `id_serv_index` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `servicio_pag`
--
ALTER TABLE `servicio_pag`
  MODIFY `id_servicio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `slider_index`
--
ALTER TABLE `slider_index`
  MODIFY `Id_img` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `tipo_usuario`
--
ALTER TABLE `tipo_usuario`
  MODIFY `Id_Tipo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `user_padres`
--
ALTER TABLE `user_padres`
  MODIFY `id_padre` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=309;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `Id_Usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
