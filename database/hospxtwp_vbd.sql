-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 08-09-2021 a las 11:15:03
-- Versión del servidor: 10.3.31-MariaDB-log-cll-lve
-- Versión de PHP: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `hospxtwp_vbd`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `avisos`
--

CREATE TABLE `avisos` (
  `id_aviso` int(11) NOT NULL,
  `titulo_a` varchar(150) NOT NULL,
  `img_a` varchar(255) NOT NULL,
  `img_b` varchar(255) NOT NULL,
  `img_c` varchar(255) NOT NULL,
  `img_d` varchar(255) NOT NULL,
  `desc_a` text NOT NULL,
  `firma` varchar(55) NOT NULL,
  `fecha_a` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `avisos`
--

INSERT INTO `avisos` (`id_aviso`, `titulo_a`, `img_a`, `img_b`, `img_c`, `img_d`, `desc_a`, `firma`, `fecha_a`) VALUES
(1, 'Site not found', 'denge.mp4', '', '', '', 'Site not found', ' Site not found', '1124-07-08 00:00:00'),
(2, 'Site not found', '2a.JPG', '2b.jpg', '2c.jpg', '2d.JPG', 'Site not found', 'Site not found', '1957-07-30 00:00:00'),
(3, 'Site not found', '1503.jpg', 'logo5.1.jpg', '15031.jpg', 'logo5.jpg', 'Site not found', 'Site not found', '1999-07-30 00:00:00'),
(6, 'Site not found', '18031.jpg', '18032.jpg', '18033.jpg', '18034.jpg', 'Site not found', 'Site not found', '2009-07-30 00:00:00'),
(7, 'Site not found', '19031.jpeg', '19032.jpeg', '19033.jpeg', '19034.jpeg', 'Site not found', 'Site not found', '2008-07-30 00:00:00'),
(8, 'Site not found', '28031.jpg', '28032.jpg', '28033.jpg', '28034.jpg', 'Site not found', 'Site not found', '0001-01-01 00:00:00'),
(9, 'CASOS DE FIN DE SEMANA ', '30031.jpg', '30032.jpg', '30033.jpg', '30034.jpg', 'Entre el sábado 30 y el domingo 31 de marzo, el servicio de Emergencia del Hospital Viedma, atendió un total de 51 casos, entre los más delicados tres pacientes con traumatismo craneoencefálico moderado, 3 personas presentaban fracturas de miembros inferiores y otra persona agredida por una herida de arma blanca. ', 'Unidad de Comunicación H.C.V.', '2019-04-01 11:56:24'),
(10, 'INTENTÓ QUITARSE LA VIDA ', '31031.jpg', '31032.jpg', '31033.jpg', '31034.jpg', 'Una persona de sexo masculino de 46 años de edad, que fue referida de centro de salud de una localidad aledaña a nuestra capital, ingresó con el diagnóstico de intoxicación alcohólica e intento de suicidio, por lo que el paciente tuvo que ser internado inmediatamente a la Unidad de Terapia Intensiva del Hospital Viedma (UTI), presentando a la fecha una evolución favorable, recibiendo su alta médica de UTI, para ser trasladado a salas.\r\nEl médico tratante solicita valoración por el servicio de psiquiatría. \r\n', 'Unidad de Comunicación H.C.V.', '2019-04-01 11:55:41'),
(11, 'HOSPITAL VIEDMA CAPACITA A SU PERSONAL', '01041.jpg', '01042.jpg', '01043.jpg', '01044.jpg', 'El pasado sábado durante toda la jornada, se desarrolló el taller de capacitación “Manejo de herramientas de planificación en los servicios de salud”. \r\nAl curso asistieron 100 funcionarios de las distintas áreas técnico administrativas y de medicina, con el objetivo de optimizar la administración de parte del personal del Hospital. \r\nAsimismo, se realizó intercambio de ideas, como también hubo propuestas para mejorar la atención a los usuarios, pacientes y familiares. \r\nLa Doctora Daisy Rocabado Espinoza, fue la encargada de inaugurar y dirigir el taller, en como se debe manejar las distintas herramientas de planificación en los servicios de salud.\r\nEl curso fue catalogado de beneficioso para los propios trabajadores, quienes se enriquecieron en sus conocimientos sobre este tema. \r\n', 'Unidad de Comunicación H.C.V.', '2019-04-01 11:45:53'),
(12, 'EL HOSPITAL VIEDMA SE SUMA A LA CAMPAÑA DE LUCHA CONTRA LA VIOLENCIA ', '02041.jpg', '02042.jpg', '02043.jpg', '02044.jpg', 'Apoyando iniciativas públicas de lucha contra la violencia de género y el respeto a sus derechos, se instaló en diferentes ambientes del Hospital Clínico Viedma carteles informativos sobre la Ley N° 348, la misma que garantiza a las mujeres una vida libre de cualquier tipo de agresión, física o psicológica. \r\nEsta acción que es promovida por la Plataforma de Mujeres por la Ciudadanía y la Equidad, emprendió la campaña denominada “La violencia nos destruye, no seamos cómplices”. En la cual el Hospital Viedma se adhiere a este propósito con el fin de concienciar e informar a la sociedad sobre los derechos de género.  \r\n', 'Unidad de Comunicación H.C.V.', '2019-04-02 11:34:24'),
(13, 'MENTE SANA EN CUERPO SANO', 'MENTE SANA EN CUERPO SANO.jpg', 'MENTE SANA EN CUERPO SANO2.jpg', 'MENTE SANA EN CUERPO SANO3.jpg', 'MENTE SANA EN CUERPO SANO4.jpg', 'Día Internacional de la Actividad Física tuvo amplia vigencia en el Hospital Clínico Viedma con la participación de funcionarios y pacientes de las diferentes reparticiones, en forma particular del servicio de Fisioterapia y residentes de la carrera de Psicología de la Universidad Mayor de San Simón (UMSS).\r\nUna mañana con bastante colorido, alegría, belleza y destreza se vivió durante la jornada matinal en los jardines de la institución que contó con la presencia activa de la Directora del Hospital Clínico Viedma, Dra. Daisy Rocabado Espinoza.', 'Unidad Comunicacion - HCV', '2019-04-05 11:44:15'),
(14, 'EN EL DÍA DEL PEATÓN EMERGENCIA DEL HOSPITAL ATENDIÓ 22 CASOS', '08041.jpg', '08042.jpg', '08043.jpg', '08044.jpg', 'El día domingo 7 de abril, cuando se celebró el día del Peatón y la Bicicleta, el Servicio de Emergencia del Hospital, atendió 22 casos. De los cuales los de mayor cuidado son dos personas de sexo masculino con traumatismo craneoencefálico por caída de bicicleta. Otras dos con fractura de miembros inferiores.\r\nTodos ellos se encuentran hospitalizados recibiendo atención por médicos de la especialidad respectiva. \r\n', 'Unidad de Comunicación H.C.V.', '2019-04-08 11:02:44'),
(17, 'CAMPAÑA “DONA SANGRE”', 'CAMPAÑA “DONA SANGRE”.jpg', 'CAMPAÑA “DONA SANGRE”2.jpg', 'CAMPAÑA “DONA SANGRE”3.jpg', 'CAMPAÑA “DONA SANGRE”4.jpg', '\r\nLa Unidad Transfusional del Hospital Clínico Viedma, conjuntamente con el Banco de Sangre de Cochabamba de Referencia Departamental llevan adelante la campaña “Dona Sangre….Extiende tu brazo a la vida”.\r\nLa donación de sangre es un acto que debe llevarse a cabo de forma voluntaria y responsable, ya que es un deber social con el cual todos debemos comprometernos.\r\nSegún normativa legal (LEY N° 1687), está prohibida la comercialización de la sangre humana y sus componentes.\r\nIMPORTANTE: \r\nRequisitos para a tomar en cuenta para la donación de sangre:\r\n•	Tener un buen estado de salud\r\n•	Acudir con cédula de identidad para el correspondiente registro\r\n•	Tener entre 18 hasta 60 de edad\r\n•	Tener un peso mayor a 50 kilos\r\n•	No haber consumido bebidas alcohólicas 48 horas antes de realizar la donación.\r\n•	No debe estar en ayunas antes de la donación. \r\n', ' Unidad de Comunicación H.C.V.', '2019-04-11 12:00:16'),
(18, '.', 'a.jpg', '	\r\n08042.jpg', 'a.jpg', 'ab.jpg', '.', '.', '2021-07-30 00:00:00'),
(20, '“DOS TRAGONES” SE REGISTRARON DURANTE EL FIN DE SEMANA', '“DOS TRAGONES” SE REGISTRARON DURANTE EL FIN DE SEMANA.jpg', '“DOS TRAGONES” SE REGISTRARON DURANTE EL FIN DE SEMANA2.jpg', '“DOS TRAGONES” SE REGISTRARON DURANTE EL FIN DE SEMANA3.jpg', '“DOS TRAGONES” SE REGISTRARON DURANTE EL FIN DE SEMANA4.jpg', 'El pasado sábado 2 personas, uno hombre y una mujer, fueron conducidos por la Fuerza Especial de Lucha contra el Narcotráfico FELCN, al servicio de Emergencias del Hospital Clínico Viedma.\r\nEstos sujetos, uno de 36 años y la otra de 26 años son atendidos en este Hospital para realizar el procedimiento de evacuación de estas cápsulas con contenido de sustancias controladas. \r\nSegún el especialista tratante ambos pacientes se encuentran estables y serán dados de alta en el curso de las siguientes horas, en espera de su audiencia cautelar, toda vez que ambos expulsaron todas estas cápsulas.\r\nPor otra durante el fin de semana, se registró 38 casos que fueron atendidos por este servicio Hospital.\r\n', 'Unidad Comunicacion - HCV', '2019-04-29 03:17:14'),
(21, 'DURANTE EL FERIADO RELATIVA TRANQUILIDAD  EN EL SERVICIO DE EMERGENCIAS DEL VIEDMA', '', 'DURANTE EL FERIADO RELATIVA TRANQUILIDAD  EN EL SERVICIO DE EMERGENCIAS DEL VIEDMA2.jpg', 'DURANTE EL FERIADO RELATIVA TRANQUILIDAD  EN EL SERVICIO DE EMERGENCIAS DEL VIEDMA3.jpg', 'DURANTE EL FERIADO RELATIVA TRANQUILIDAD  EN EL SERVICIO DE EMERGENCIAS DEL VIEDMA4.jpg', 'En este feriado del 1° de Mayo, el servicio de emergencia del Hospital Clínico Viedma, tuvo relativa tranquilidad. Se atendió 26 pacientes, de los cuales 2 personas tienen diagnósticos delicados.\r\nUn joven de 26 años de edad, fue trasladado a este nosocomio, ayer en horas de la tarde, por presentar traumatismo craneoencefálico moderado, con hundimiento de cráneo, el mismo que está siendo tratado por el servicio de neurocirugía. \r\nEl otro caso se trata de una persona de 60 años de edad que sufrió caída de un árbol, ingresando con el diagnóstico de fracturas costales “costillas” y clavícula izquierda.\r\n', 'Unidad de Comunicación H.C.V.', '2019-05-02 11:55:15'),
(22, 'EN EL FIN DE SEMANA 36 CASOS FUERON ATENDIDOS EN EL SERVICIO DE EMERGENCIA', 'EN EL FIN DE SEMANA 36 CASOS FUERON ATENDIDOS EN EL SERVICIO DE EMERGENCIA.jpg', 'EN EL FIN DE SEMANA 36 CASOS FUERON ATENDIDOS EN EL SERVICIO DE EMERGENCIA2.jpg', 'EN EL FIN DE SEMANA 36 CASOS FUERON ATENDIDOS EN EL SERVICIO DE EMERGENCIA3.jpg', 'EN EL FIN DE SEMANA 36 CASOS FUERON ATENDIDOS EN EL SERVICIO DE EMERGENCIA4.jpg', 'El pasado sábado y domingo, 36 casos fueron atendidos en el servicio de emergencia del Hospital Clínico Viedma.\r\nAfortunadamente no se presentaron casos severos y complicados. \r\nUna persona de 45 años de edad, de condición humilde fue víctima de quemadura en el pie derecho. Diagnóstico de ingreso quemadura A AB. Con el 9 por ciento de la superficie corporal. Actualmente el paciente se encuentra internado recibiendo su tratamiento por los especialistas.\r\n', 'Unidad Comunicacion - HCV', '2019-05-06 04:31:20'),
(23, 'DÍA MUNDIAL DEL ASMA', 'DÍA MUNDIAL DEL ASMA.jpg', 'DÍA MUNDIAL DEL ASMA2.jpg', 'DÍA MUNDIAL DEL ASMA3.jpg', 'DÍA MUNDIAL DEL ASMA4.jpg', 'Se realizó la presentación oficial de la campaña denominada “Día Mundial del Asma”, en una labor conjunta entre médicos del Hospital Clínico Viedma (H.C.V.) y la Sociedad Boliviana de Neumología Filial Cochabamba.\r\nEl acto contó con la presencia del Director ai. Dr. José Antonio Ramírez, la Jefa del Servicio de Neumología del H.C.V. Dra. Inés Ayllon y el Presidente de Esta Sociedad Dr. Julio Peñarrieta.\r\nEsta campaña consiste en realizar evaluaciones y espirometrias gratuitas, que se efectuaran este sábado 11 de mayo de 8:00 Hrs. hasta las 12:00 Hrs., en instalaciones del H.C.V. También se brindarán charlas para familiares y pacientes asmáticos.\r\n', 'Unidad de Comunicación H.C.V.', '2019-05-07 02:52:03'),
(24, 'PORTADOR INTESTINAL DE SUSTANCIAS CONTROLADAS FUE INTERVENIDO DE EMERGENCIA', 'PORTADOR INTESTINAL DE SUSTANCIAS CONTROLADAS FUE INTERVENIDO DE EMERGENCIA.jpg', 'PORTADOR INTESTINAL DE SUSTANCIAS CONTROLADAS FUE INTERVENIDO DE EMERGENCIA2.jpg', 'PORTADOR INTESTINAL DE SUSTANCIAS CONTROLADAS FUE INTERVENIDO DE EMERGENCIA3.jpg', '', 'Un joven de 26 años de edad que, en pasados días, fue transferido del Hospital de Ivergarzama al Servicio de Emergencia del Hospital Clínico Viedma (H.C.V.), con diagnóstico de ingreso de síndrome de portador intestinal de sustancias controladas.\r\nLa gravedad del presente caso, es a razón que dicho paciente contenía las cápsulas con sustancia líquida, que era un riesgo para su vida. \r\nA pesar del tratamiento realizado por los médicos del Hospital, no se pudo dar solución a la expulsión de las cápsulas, por lo que inmediatamente el paciente fue intervenido quirúrgicamente. Según el informe del cirujano que practicó el procedimiento quirúrgico, indica: “en pleno procedimiento se halló dos capsulas reventadas”, destacando que fue un milagro que aún el paciente continúe con vida. \r\nEl paciente se encuentra en proceso de recuperación, con una evolución favorable.\r\n \r\nFRM / LFSP\r\n', 'Unidad de Comunicación H.C.V.', '2019-05-09 03:14:32'),
(25, 'EXITOSA CAMPAÑA DE  LUCHA CONTRA EL ASMA', '', '', '', '', '\r\nMasiva concurrencia de pacientes acudieron a la “Campaña Mundial Contra el Asma”,  evento desarrollado en el Hospital Clínico Viedma, (H.C.V.). Más de 150 pacientes asistieron al H.C.V. para realizar una consulta y tener una evaluación neumológica.\r\nEn el evento especialistas neumológicos del H.C.V. y de la Sociedad Boliviana de Neumología Filial Cochabamba, informaron sobre la inhaloterapia y alternativas de prevención y tratamientos para este malestar.\r\nLas consultas e información, fueron realizadas de manera gratuita, con el fin de llegar a toda la población para informar y tratar a toda la población sobre las enfermedades neumológicas que afectan a la población.      \r\n', 'Unidad de Comunicación / H.C.V.', '2019-05-12 11:25:57'),
(26, 'EXITOSA CAMPAÑA EN LUCHA CONTRA EL ASMA', 'EXITOSA CAMPAÑA EN LUCHA CONTRA EL ASMA.jpg', 'EXITOSA CAMPAÑA EN LUCHA CONTRA EL ASMA2.jpg', 'EXITOSA CAMPAÑA EN LUCHA CONTRA EL ASMA3.jpg', 'EXITOSA CAMPAÑA EN LUCHA CONTRA EL ASMA4.jpg', '\r\nMasiva concurrencia de pacientes acudieron a la “Campaña Mundial Contra el Asma”,  evento desarrollado en el Hospital Clínico Viedma, (H.C.V.). Más de 150 pacientes asistieron al H.C.V. para realizar una consulta y tener una evaluación neumológica.\r\nEn el evento especialistas neumológicos del H.C.V. y de la Sociedad Boliviana de Neumología Filial Cochabamba, informaron sobre la inhaloterapia y alternativas de prevención y tratamientos para este malestar.\r\nLas consultas e información, fueron realizadas de manera gratuita, con el fin de llegar a toda la población para informar y tratar a toda la población sobre las enfermedades neumológicas que afectan a la población.      \r\n', 'Unidad de Comunicación / H.C.V.', '2019-05-12 11:29:16'),
(27, 'EL HOSPITAL CLÍNICO VIEDMA RINDE HOMENAJE A PROFESIONALES DE ENFERMERÍA', 'EL HOSPITAL CLÍNICO VIEDMA RINDE HOMENAJE A PROFESIONALES DE ENFERMERÍA.jpg', 'EL HOSPITAL CLÍNICO VIEDMA RINDE HOMENAJE A PROFESIONALES DE ENFERMERÍA2.jpg', 'EL HOSPITAL CLÍNICO VIEDMA RINDE HOMENAJE A PROFESIONALES DE ENFERMERÍA3.jpg', 'EL HOSPITAL CLÍNICO VIEDMA RINDE HOMENAJE A PROFESIONALES DE ENFERMERÍA4.jpg', 'Conmemorando El Día Internacional de la Enfermera, el Hospital Clínico Viedma (H.C.V.), tiene programado una jornada activa para conmemorar  la loable labor de estas profesionales al servicio de la salud pública.         ', 'Unidad de Comunicación / H.C.V.', '2019-05-12 11:41:56'),
(28, 'EXITOSA OPERACIÓN A PACIENTE HERIDO POR ARMA DE FUEGO', 'EXITOSA OPERACIÓN A PACIENTE HERIDO POR ARMA DE FUEGO.jpg', 'EXITOSA OPERACIÓN A PACIENTE HERIDO POR ARMA DE FUEGO2.jpg', 'EXITOSA OPERACIÓN A PACIENTE HERIDO POR ARMA DE FUEGO3.jpg', '', 'En días pasados se realizó una intervención quirúrgica al paciente que resulto con herida de proyectil de arma de fuego, producto de un enfrentamiento entre loteadores en las cercanías del cementerio de Colcapirhua.\r\nEl paciente fue ingresado al servicio de emergencia del Hospital Clínico Viedma en fecha 7 de mayo, con el diagnóstico de trauma cervical penetrante por proyectil de arma de fuego, con orificio de entrada en región lateral de cuello izquierdo. \r\nSe realizó exploración y retiro de cuerpo extraño (proyectil). El paciente actualmente presenta evolución favorable y es dado de alta médica, con indicaciones de volver a controles por consulta externa. \r\n', 'Unidad de Comunicación H.C.V.', '2019-05-14 02:47:25'),
(29, 'EQUIPOS DEL SERVICIO DE HEMODIÁLISIS RECIBEN MANTENIMIENTO', '27051.jpg', '27052.jpg', '27053.jpg', '27054.jpg', 'Con una inversión de 62.350 bolivianos, el Hospital Clínico Viedma (H.C.V.), adquirió accesorios, con lo que se realizará el mantenimiento preventivo correctico a los equipos del servicio de hemodiálisis.\r\nEn esta primera etapa de mantenimiento a los equipos de hemodiálisis, los repuestos serán implementados a las máquinas Nipro y Fresenius.\r\nAl servicio de hemodiálisis por día acuden aproximadamente 60 pacientes para ser dializados, durante 3 turnos en los 28 equipos con los que cuenta esta área del H.C.V.\r\n', 'Unidad de Comunicación H.C.V.', '2019-05-27 04:11:17'),
(30, 'NUEVO CASO DE TRAGONES', 'NUEVO CASO DE TRAGONES.jpg', 'NUEVO CASO DE TRAGONES2.jpg', 'NUEVO CASO DE TRAGONES3.jpg', 'NUEVO CASO DE TRAGONES4.jpg', 'Hoy a las 7:30 HRS. fueron conducidos al servicio de Emergencia del Hospital, tres personas, dos varones y de 30 y 33 años respectivamente y una mujer de 28 años, con el diagnostico de ingreso “portador intestinal de cápsulas con sustancias controladas”.\r\nEn el momento se encuentran en proceso de expulsión de dichas cápsulas, custodiados por agentes de la Policía Antinarcóticos.  \r\n', 'Unidad de Comunicación H.C.V.', '2019-06-03 03:15:30'),
(31, 'HOMBRE QUE SUFRIÓ QUEMADURAS ES ATENDIDO EN EL HOSPITAL', 'HOMBRE QUE SUFRIÓ QUEMADURAS ES ATENDIDO EN EL HOSPITAL.jpg', 'HOMBRE QUE SUFRIÓ QUEMADURAS ES ATENDIDO EN EL HOSPITAL2.jpg', 'HOMBRE QUE SUFRIÓ QUEMADURAS ES ATENDIDO EN EL HOSPITAL3.jpg', '', 'El pasado sábado en horas de la noche, el servicio de Emergencias del Hospital recibió a una persona de 25 años de edad, que responde al nombre de Carlos Alfonso Solano Flores. El informe médico indica que el paciente tiene quemaduras de tipo AB en el 50 por ciento de la superficie corporal, comprometiendo parte del rostro, tórax, miembros inferiores y miembro superior izquierdo. \r\nEl paciente, asegura no contar con familiares en esta ciudad. \r\n', 'Unidad de Comunicación H.C.V.', '2019-06-03 03:17:06'),
(32, 'EMOTIVO HOMENAJE AL DOCENTE EN MEDICINA', '06061.JPG', '06062.JPG', '06063.JPG', '06064.JPG', 'En un sencillo acto, pero con profundo reconocimiento se realizó un homenaje en el “Día del Maestro” a los docentes de medicina, que también prestan servicios en el Hospital Clínico Viedma (H.C.V.) y la Universidad Mayor de San Simón. \r\nEn las palabras de circunstancia el Jefe de Cirugía del H.C.V., Dr. Eduardo Amaya Rocha, como también docente de la UMSS, destacó la labor que cumplen los profesionales de la medicina en esta área importante de enseñanza a los futuros profesionales en salud. \r\nPor su parte el Director Académico de la Facultad de Medicina Aurelio Melean de la UMSS, Daniel Illanes, hizo entrega de un reconocimiento a la Directora del H.C.V. Dra. Daisy Rocabado, por su destacable labor que cumple en apoyo e incentivo académico con la casa superior de estudios en la formación de sus profesionales.\r\nLa Directora de la H.C.V. destacó que se viene implementando un nuevo plan para mejorar las estrategias de coordinación entre la casa superior de estudios y el Hospital Viedma. \r\nEn un acto emotivo se realizó la entrega de reconocimientos a varios profesionales del Hospital que cumplen con vocación y dedicación de servicio, como pilares para la formación académica en las ciencias en salud. \r\n', 'Unidad de Comunicación H.C.V.', '2019-06-06 03:42:27'),
(33, 'NUEVO CASO DE “TRAGONES”', 'NUEVO CASO DE “TRAGONES”.jpg', 'NUEVO CASO DE “TRAGONES”2.jpg', 'NUEVO CASO DE “TRAGONES”3.jpg', '', 'Promediando las 13:30 HRS. del día de hoy, dos personas de sexo femenino y un masculino, ingresaron al servicio de Emergencia del Hospital Clínico Viedma (H.C.V.), con el diagnóstico de portador intestinal de cápsulas de sustancias controladas. \r\nRespectivamente las mujeres de 41 y 42 años y el varón 33 fueron interceptados por la Fuerza Especial de Lucha Contra el Narcotráfico (FELCN) en la tranca de Parotani. \r\nLos pacientes se encuentran en periodo de evacuación y posteriormente serán sometidos al control de campo. \r\n', 'Unidad de Comunicación H.C.V.', '2019-06-11 02:39:05'),
(34, 'FALLECIÓ PERSONA A CAUSA DE QUEMADURAS', '', 'FALLECIÓ PERSONA A CAUSA DE QUEMADURAS2.jpg', 'FALLECIÓ PERSONA A CAUSA DE QUEMADURAS3.jpg', 'FALLECIÓ PERSONA A CAUSA DE QUEMADURAS4.jpg', 'Carlos Alfonso Solano Flores de 25 años de edad de nacionalidad peruano, falleció el día de ayer martes a HRS. 22:40, por fallas multisistémicas, cuadro séptico generalizado. Según el informe médico el paciente no colaboraba, queriendo hacer abandono permanente del Hospital. ', 'Unidad de Comunicación H.C.V.', '2019-06-12 03:42:45'),
(35, 'INICIAN OBRAS DE AMPLIACIÓN EN EL HOSPITAL CLÍNICO VIEDMA', '18061.jpg', '18062.jpg', '18063.jpg', '18064.jpg', 'Después de varios años y tras las gestiones del Gobernador de Cochabamba, Iván Canelas, la Directora del Hospital Clínico Viedma (H.C.V.), Dra. Daysi Rocabado Espinoza inició las obras de ampliación del nosocomio.\r\nHoy es un día importante para la población cochabambina, el Hospital contará con más ambientes para cumplir la tarea social de salud, que cada día incrementa en número de pacientes para ser atendidos en las distintas especialidades. \r\nEl costo de la obra es más de 5 millones de bolivianos y será entregado según el cronograma establecido de 180 días. \r\n', 'Unidad de Comunicación H.C.V.', '2019-06-17 04:04:37'),
(36, 'BOLETIN DE PRENSA', 'boletin20191.jpg', 'BOLETIN DE PRENSA2.jpg', 'boletin20191.jpg', 'BOLETIN DE PRENSA4.jpg', 'TRES DENOMINADOS TRAGONES\r\nSE ENCUENTRA EN EL HOSPITAL\r\n\r\nEl sábado 22 del presente, al promediar las 14:00 horas, fueron conducidos de la tranca de Parotani  al servicio de Emergencia del Hospital Clínico Viedma, 3 personas de sexo masculino de 29, 27 y 22 años de edad respectivamente, por ser portadores intestinales de substancias controladas.\r\n\r\nUna de ellas  debió ser intervenida quirúrgicamente de urgencia por el estado de salud que presentaba. Por su parte los otros dos ya se encuentra finalizando la expulsión de estas capsulas. Todos ellos se encuentran con custodios policiales.\r\n\r\nMUJER FUE MORDIDA DE LA OREJA POR SU ESPOSO.-\r\n\r\nEl hecho sucedió en un local de la avenida Petrolera este pasado fin de semana, donde el esposo de esta señora A.G. fue brutalmente agredida por su esposo, mordiéndole la oreja izquierda. La paciente recibe atención en este hospital por médicos de la especialidad. El caso fue denunciado, como dice la normativa, ante las autoridades del SLIM.\r\n\r\n\r\n\r\nEste prolongado feriado y fin de semana se atendieron varios casos, entre gente que fue traídas por fracturas, heridas punzo cortantes y como también policontusas.\r\n\r\nEn estos 4 días, el servicio de emergencias del hospital atendió un total de 74 casos.\r\n', 'Unidad de Comunicación H.C.V. ', '2019-06-24 11:34:26'),
(37, 'HOSPITAL VIEDMA CUMPLE ATENCIÓN CON NORMALIDAD  ', 'HOSPITAL VIEDMA CUMPLE ATENCIÓN CON NORMALIDAD  .jpg', 'HOSPITAL VIEDMA CUMPLE ATENCIÓN CON NORMALIDAD  2.jpg', 'HOSPITAL VIEDMA CUMPLE ATENCIÓN CON NORMALIDAD  3.jpg', 'HOSPITAL VIEDMA CUMPLE ATENCIÓN CON NORMALIDAD  4.jpg', 'El Hospital Clínico Viedma (H.C.V.), se repartieron las fichas para las consultas médicas de cada servicio, destacando que todo el personal médico y administrativo asistió con normalidad el día de hoy a su fuente de trabajo. \r\nEl representante del Defensor del Pueblo Nelson Cox, junto con el Director del Servicio Departamental de Salud (SEDES), Dr. Mena, realizaron una inspección para verificar la atención de los médicos en consultas externas. \r\n', 'Comunicación H.C.V.', '2019-07-12 03:44:13'),
(38, 'COMUNICADO', 'COMUNICADO.jpg', 'COMUNICADO2.jpg', '', 'COMUNICADO4.jpg', 'La Dirección del Hospital Clínico Viedma, ante la situación que vive el país, en particular Cochabamba, solicita a la ciudadanía en general, a presentar su más amplia cooperación con la AMBULANCIAS del Hospital, dejando pasar en los puntos de bloqueo, que en muchos casos trasladan pacientes muy críticos, que requieren atención médica urgente.\r\nPara conocimiento público las placas de circulación del Hospital Viedma son:  4827-EFA,\r\n2877-ELB, 3824-IIL Y 4827-EGD.\r\n', 'INFORMACIONES', '2019-10-28 03:29:26'),
(39, 'AGRADECIMIENTOS', 'AGRADECIMIENTOS.jpg', 'AGRADECIMIENTOS2.jpg', 'AGRADECIMIENTOS3.jpg', 'AGRADECIMIENTOS4.jpg', 'El Hospital Clínico Viedma agradece a todos las organizaciones que brindan ayuda para conbatir el COVID-19', 'Sistemas HCV', '2020-04-20 08:14:47'),
(40, 'Boletín informativo septiembre 2020', 'Boletín informativo septiembre 2020.jpg', 'Boletín informativo septiembre 20202.jpg', 'Boletín informativo septiembre 20203.jpg', 'Boletín informativo septiembre 20204.jpg', 'Boletín informativo septiembre 2020', 'Comunicacion Social', '2020-10-02 02:07:51');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `blog_viedma`
--

CREATE TABLE `blog_viedma` (
  `id_blog_hosp` int(11) NOT NULL,
  `nombre_p` varchar(55) NOT NULL,
  `email` varchar(55) NOT NULL,
  `asunto` varchar(55) NOT NULL,
  `mensaje` varchar(255) NOT NULL,
  `fecha_registro` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `blog_viedma`
--

INSERT INTO `blog_viedma` (`id_blog_hosp`, `nombre_p`, `email`, `asunto`, `mensaje`, `fecha_registro`) VALUES
(1, 'a', 'kcaballero@iseye.com.bo', 'a', 'a', '2019-02-26 00:00:00'),
(2, 'a', 'kcaballero@iseye.com.bo', 'a', 'a', '2019-02-26 00:00:00'),
(3, 'a', 'kcaballero@iseye.com.bo', 'a', 'a', '2019-02-26 00:00:00'),
(4, 'a', 'kcaballero@iseye.com.bo', 'a', 'a', '2019-02-26 00:00:00'),
(5, 'a', 'kcaballero@iseye.com.bo', 'a', 'a', '2019-02-26 00:00:00'),
(6, 'a', 'kcaballero@iseye.com.bo', 'a', 'a', '2019-02-26 00:00:00'),
(7, 'a', 'kcaballero@iseye.com.bo', 'a', 'a', '2019-02-26 00:00:00'),
(8, 'a', 'kcaballero@iseye.com.bo', 'a', 'a', '2019-02-26 00:00:00'),
(9, 'a', 'kcaballero@iseye.com.bo', 'a', 'a', '2019-02-26 00:00:00'),
(10, 'a', 'kcaballero@iseye.com.bo', 'a', 'a', '2019-02-26 00:00:00'),
(11, 'a', 'kcaballero@iseye.com.bo', 'a', 'a', '2019-02-26 00:00:00'),
(12, 'a', 'kcaballero@iseye.com.bo', 'a', 'a', '2019-02-26 00:00:00'),
(13, 'pruebahora', 'pruebahora@dddddd', 'pruebahora', 'pruebahora', '2019-02-26 11:55:02'),
(14, 'pruebahora', 'pruebahora@dddddd', 'pruebahora', 'pruebahora', '2019-02-26 02:30:03'),
(15, 'gabriel villazon delgado', 'brya_gab@hotmail.com', 'pruebamartes', 'El primer Hospital en el valle de Canata, jurisdicción de la Villa de Oropeza, fue fundado por el corregidor Don Martín Hernández de Zamora, natural de Villar, España. Fue denominada \"San Salvador \" y se situó a las orillas del río Condorrillo, cuyo cauce', '2019-02-26 02:30:47'),
(16, 'prueba', 'asas@sdsdasd', '', '', '2019-02-26 04:45:41'),
(17, 'sdf', 'dsf@dsadas', '', '', '2019-02-26 04:48:15'),
(18, 'Rodrigo Almaraz', 'rodrigo_almaraz@hotmail.com', 'Consulta sobre Especialista', 'Estimados señores:\r\nVivo en la Ciudad de La Paz y por motivos de salud urgentes, y por recomendación, deseo contactarme con el Dr. Victor Villarroel Saavedra, especialista neurologo, que me indicaron trabaja en su institución. Agradecere mucho puedan prop', '2019-03-19 05:37:59'),
(19, 'sergio cabrera', 'cabreraardaya@outlook.com', 'curriculum ', 'buenas noches quisiera saber a que correo puedo mandar mi curriculum,actualmente trabajo en una importadora pero quisiera enviar mi curriculum como ing. biomedico. dejo mi numero para cualquier consulta 69550012', '2019-03-23 11:01:59');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `noticias`
--

CREATE TABLE `noticias` (
  `id_noticias` int(11) NOT NULL,
  `titulo` varchar(155) NOT NULL,
  `desc_an` text NOT NULL,
  `video` varchar(255) NOT NULL,
  `firma_v` varchar(150) NOT NULL,
  `fecha_reg_not` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `noticias`
--

INSERT INTO `noticias` (`id_noticias`, `titulo`, `desc_an`, `video`, `firma_v`, `fecha_reg_not`) VALUES
(2, 'Video Institucional Viedma', 'Hospital Clínico Viedma\r\n', 'https://www.youtube.com/watch?v=O07UC9qHdck', '', '2019-02-25 14:30:28'),
(3, 'Personal de salud es capacitado en atención de dengue clásico y hemorrágico', 'El personal de salud de distintos nosocomios de Cochabamba está siendo capacitado para la atención de pacientes con dengue clásico y hemorrágico, informó Teddy Peñafiel, responsable de epidemiología del Hospital Viedma. ', 'https://www.youtube.com/watch?v=mW5-aK16Gqs', '', '2019-02-27 10:35:33'),
(4, 'ALCALDIA NO PAGA DEUDA AL HOSPITAL VIEDMA', 'En entrevista concedida a medios de comunicación, la Directora del Hospital Cinco Viedma, Dra. Daysi Recabado Espinoza, mostro su preocupación por la falta de pago de la Alcaldía por los diferentes servicios que presta    esta Institución, que podría derivar en un futuro cercano en problemas financieros.  Parte de la entrevista, damos a conocer.\r\n\r\n\r\nUnidad Comunicacion - HCV', 'https://www.youtube.com/watch?v=GQnuGKa1tqM', 'Unidad Comunicacion - HCV', '2019-03-19 11:59:17'),
(5, 'AVISO DE BIEN SOCIAL', 'José Luis Yupanqui de 50 años, abandonado por sus hijos. Le embarcaron en un bus desde Santa Cruz, en compañía de una amistad. Paciente con mal de parkinson. Pide que su hijo Carlos Yupanqui que vive en Santa Cruz, que pase por el hospital Viedma', 'https://www.youtube.com/watch?v=tqEHAg7MfMs', 'Unidad de Comunicación H.C.V', '2019-03-22 11:40:24'),
(6, 'TRAGONES ATENDIDOS EN EL HOSPITAL VIEDMA', 'El pasado sábado aproximadamente a horas 13:30 fueron trasladados al Servicio de Emergencia del Hospital Clínico Viedma, dos personas de sexo masculino de 26 y 38 años de edad, \r\nEl diagnostico  de ingreso es \"portador intestinal de substancias controladas”. Según el informe de emergencia, estos pacientes fueron  detenidos por efectivos de FELCN en la terminal de buses de Quillacollo.\r\nActualmente se encuentran en proceso evacuación de estas substancias.\r\n', 'https://www.youtube.com/watch?v=m_a8Rz6CJ6s&feature=youtu.be', 'Unidad de Comunicaciòn H.C.V', '2019-03-25 12:02:08'),
(7, 'Aviso de bien social ', 'Se comunica a los familiares del joven que se muestra en el vídeo, pasar por el servicio de Emergencia del Hospital Clínico Viedma.\r\n\r\nEl paciente fue traído por efectivos de Bomberos el día de hoy lunes, referido del Hospital Cochabamba.  \r\n\r\nEl diagnóstico de ingreso del paciente, es de accidente Cardiovascular.', 'https://www.youtube.com/watch?v=6zwPITlSkm0', 'Unidad de Comunicación Social (HCV)', '2019-03-25 04:39:05'),
(8, 'OTRO CASO DE \"TRAGONES\" ATENDIDO EN EL HOSPITAL VIEDMA', 'En las primeras horas de  esta mañana, efectivos de FELCN trasladaron a un apersona de sexo femenino de 30 años de edad de la terminal de buses de Cochabamba, al Servicio de emergencia del Hospital. \r\nEl diagnostico de ingreso es \" transportador intestinal de substancias controladas\"\r\nEl Dr.. Ramiro Cadima, medico toxicologo del Hospital, brindo  un informe a los medios de comunicación.', 'https://www.youtube.com/watch?v=XbeNn7TAy3o&feature=youtu.be', 'Unidad de Comunicaciòn H.C.V', '2019-03-26 11:40:26'),
(9, 'EXITOSO TRASPLANTE  RENAL DE DONANTE CADAVÉRICO', 'En el Hospital Clínico Viedma se realizó  el tercer trasplante renal de donante cadavérico, a una paciente de sexo femenino de 54 años de edad, que evoluciona favorablemente.\r\nEsta es la tercera persona que recibe este tipo de trasplante  en el Hospital en la gestión de la Dra. Mcs. Daisy Rocabado Espinoza, con éxito.\r\nEn el trasplante, participó un equipo multidisciplinario de médicos de alta especialidad del Hospital Viedma:\r\n•	Dr. Harold Muñoz (Médico cardiovascular) \r\n•	Dr. Jaime Vallejo (Médico cirujano)\r\n•	Dra. Heidy Vega (Médico de trasplante)\r\n•	Dra. Mabel López (Médico anestesióloga).\r\nAdemás de todo un equipo de enfermeras y personal paramédico.\r\n', 'https://www.youtube.com/watch?v=wkMctmdAOJQ&feature=youtu.be', 'Unidad de Comunicación H.C.V', '2019-03-27 03:07:47'),
(10, 'SE INICIO CAMPAÑA DE VACUNACIÓN CONTRA LA INFLUENZA', 'Personal del Servicio Departamental de Salud (SEDES), de Cochabamba, esta suministrando vacunas contra la influenza al personal del Hospital Clínico Viedma, como una medida de prevención a las bajas temperaturas que se avecinan en el departamento. \r\nEl personal del Hospital concurre masivamente a esta campaña de vacunación. Asimismo esta actividad preventiva esta orientada a otras personas particulares.  \r\n', 'https://www.youtube.com/watch?v=CdNkd1-OFe8&feature=youtu.be', 'Unidad de Comunicación H.C.V', '2019-04-30 11:51:39'),
(11, 'RENOVACIÓN DE COLCHONES, FRAZADAS Y ALMOHADAS', 'La Dirección del Hospital Clínico Viedma, realizó la entrega de colchones, frazadas y almohadas para las salas de internación en las distintas especialidades. Con el objetivo de brindar una mejor calidad y calidez a los pacientes que son internados.\r\nAnte el incremento de pacientes que son beneficiados por el Sistema Único de Salud (S.U.S.), el Hospital está realizando mejoras en todos sus servicios que presta.  \r\n', 'https://www.youtube.com/watch?v=kX2bIiGOpHE&feature=youtu.be', 'Unidad de Comunicación H.C.V.', '2019-05-21 02:47:26'),
(12, 'OTRO CASO DE TRAGONES', 'Cinco tragones son atendidos en el Hospital Clínico Viedma, con el diagnostico de portadores intestinales de sustancias controladas. Las mismas que fueron conducidas por efectivos de la Fuerza Especial de Lucha Contra el Narcotráfico (FELCN).\r\nDe estas cinco personas dos son varones y tres mujeres, que oscilan entre 23 a 38 años de edad, dos de ellas ingirieron cápsulas en contenido líquido y las otras tres en estado sólido. \r\nActualmente se encuentran en proceso de expulsión de dichas cápsulas, luego serán dados de alta médica debiendo ser trasladados a un centro penitenciario de nuestra capital. \r\n', 'https://youtu.be/25NNGvtM_Og', 'Unidad de Comunicación H.C.V.', '2019-05-22 11:51:51'),
(13, 'ANCIANO ABANDONADO ', 'El señor Samuel Saavedra de 91 años, de Colcapirhua, se encuentra en el hospital Viedma, por lo que ruega a los familiares pasar a recogerlo.', 'https://www.youtube.com/watch?v=lMQW9pE6hUk&feature=youtu.be', 'Unidad de Comunicación H.C.V.', '2019-05-23 04:11:40'),
(14, 'EL SERVICIO DE EMERGENCIAS DEL H.C.V. RECIBIÓ UN PACIENTE N/N', 'El día de ayer, el servicio de Emergencias del Hospital Clínico Viedma (H.C.V.), recibió un paciente N/N con diagnóstico de TEC grave. \r\nEl paciente que fue traído por la Unidad de Bomberos de Cochabamba, alrededor de las 11:00 HRS. tiene aproximadamente 30 años de edad.\r\nSe insinúa, favor socializar y compartir el video de este joven para poder dar con los familiares del mismo.   \r\n', 'https://www.youtube.com/watch?v=bAM2lalUoOo&feature=youtu.be', 'Unidad de Comunicación H.C.V.', '2019-06-10 03:11:37'),
(15, 'PERSONA NO IDENTIFICADA', 'Persona NN de sexo masculino de aproximadamente de 30 años de edad, fue trasladado al servicio de Emergencia del Hospital Clínico Viedma (H.C.V.), por efectivos de Bomberos al promediar la 1:00 am. \r\nSegún informes preliminares, el paciente fue encontrado en las inmediaciones del Puente Antezana.\r\nEl informe médico del mismo señala TEC grave, con pronóstico reservado. \r\nAl respecto se solicita a los familiares apersonarse por el servicio de Emergencia del Hospital.  \r\n', 'https://www.youtube.com/watch?v=0QmYNmpeATk&feature=youtu.be', 'Unidad de Comunicación H.C.V.', '2019-06-11 03:05:02'),
(16, 'PACIENTE BUSCA A SUS FAMILIARES', 'Un paciente que dice llamarse Calixto, refiere tener dos hijos en la ciudad de Potosí, actualmente se encuentra internado en el Hospital Clínico Viedma (H.C.V.), luego de haber sido tratado por el servicio de Neurología. \r\nActualmente se encuentra con su respectiva alta hospitalaria, esperando la llegada de sus familiares.\r\n', 'https://www.youtube.com/watch?v=AqSNJ-qcuUI&feature=youtu.be', 'Unidad de Comunicación H.C.V.', '2019-06-11 03:11:43'),
(17, 'PERSONA NO IDENTIFICADA FALLECIÓ EN EL HOSPITAL CLÍNICO VIEDMA ', 'El paciente que fue socorrido por la Unidad de Bomberos de Cochabamba, en inmediaciones del Puente Antezana y que posteriormente fue evacuado al Hospital Clínico Viedma, (H.C.V.), el día de ayer a horas 7:00 HRS. falleció en la Unidad de Terapia Intensiva (UTI), a causa de un traumatismo craneoencefálico grave, edema cerebral severo, fractura de clavícula derecha y policontusiones. \r\nA pesar de los esfuerzos médicos de los servicios de Neurocirugía e intensivistas, no se logró revertir el cuadro clínico crítico del paciente. \r\nLo lamentable de este tema es que el paciente no contaba con ningún documento que acredite su identidad personal, objetos personales, celular y otros. \r\nAsimismo, es de lamentar que hasta la fecha no se presentaron familiares del mismo al Hospital. \r\nEs de esta manera que el H.C.V. cumpliendo con la normativa vigente, el cuerpo fue trasladado a la morgue, para su correspondiente autopsia de ley. \r\n', 'https://www.youtube.com/watch?v=0QmYNmpeATk', 'Unidad de Comunicación H.C.V.', '2019-06-12 04:00:39'),
(18, 'EXITOSA INTERVENCIÓN QUIRÚRGICA ', 'Presentamos la entrevista con el médico neurocirujano Dr. Rene García, sobre la intervención quirúrgica practicada a paciente de 39 años de edad, en días pasados.', 'https://www.youtube.com/watch?v=Xm6yzRkM0ug&feature=youtu.be', 'Unidad de Comunicación H.C.V.', '2019-06-14 03:29:45'),
(19, 'PACIENTE NN SE ENCUENTRA EN LA UNIDAD DE TERAPIA INTENSIVA DE H.C.V.', 'Paciente NN se encuentra internado en Unidad de Terapia Intensiva (UTI), del Hospital Clínico Viedma (H.C.V.), desde el pasado 9 de junio. Hasta la fecha no aparecen familiares. Él fue operado de la cabeza, ahora se encuentra en estado estacionario. \r\nPor favor sus familiares deben pasar por UTI del hospital Clínico Viedma.\r\n', 'https://www.youtube.com/watch?v=OAFILVhTqpQ&feature=youtu.be', 'Unidad de Comunicación H.C.V.', '2019-06-19 05:43:56'),
(20, 'CAPACITACIÓN SOBRE BIOSEGURIDAD', 'Durante la jornada matutina, se desarrolló el curso de capacitación sobre bioseguridad para el personal del Hospital Clínico Viedma (H.C.V.). La Jefa del Servicio de Infectología del H.C.V.  Rosario Castro, fue la encargada de realizar de explicar sobre las medidas de seguridad que deben adoptar todos los trabajares del Hospital.\r\nEsta capacitación se caracterizó por una relación interactiva entre trabajadores y profesionales de este Hospital. \r\nFinalmente, la Directora del Hospital Dra. Daysi Rocabado Espinoza exhorto a los funcionarios H.C.V.  a proteger sus salud, cumpliendo con todas estas normativas de bioseguridad, para no lamentar consecuencias posteriores.  \r\n', 'https://www.youtube.com/watch?v=sY2aGsCbKeI&feature=youtu.be', 'Comunicación H.C.V.', '2019-07-12 03:51:49'),
(21, 'EL HOSPITAL VIEDMA NO REGISTRÓ CASOS DE ARENA VIRUS', 'Ante las publicaciones en las redes sociales sobre casos de arena virus en el Departamento de Cochabamba, La Directora del Hospital Clínico Viedma (H.C.V.), Dra. Daysi Rocabado Espinoza y la Jefa de Infectología del Hospital Dra. María Castro, remarcaron que no se tiene ningún caso en H.C.V. con esta enfermedad.', 'https://www.youtube.com/watch?v=61fcltD6rzE&feature=youtu.be', 'Unidad de Comunicación H.C.V.', '2019-07-17 05:50:34'),
(22, 'Comunicado Urgente', 'Comunicado Urgente', 'https://www.youtube.com/watch?v=I0TNaDyZJNE&feature=youtu.be', 'Informes Hospital Clínico Viedma', '2019-10-28 03:33:55'),
(23, 'CÓMO PREVENIR EL CORONAVIRUS', 'Prevención coronavirus', 'https://www.youtube.com/watch?v=1CiDJcH1vDc', 'Sistemas Hospital Viedma', '2020-04-08 08:36:14'),
(24, 'Protección ', 'Protección', 'https://www.youtube.com/watch?v=NJKggdx447I', 'Sistemas Hospital Viedma', '2020-04-08 08:37:12'),
(25, 'Protección con Overol', 'Protección con Overol', 'https://www.youtube.com/watch?v=gBQCe41vDEw', 'Sistemas Hospital Viedma', '2020-04-08 08:38:19'),
(26, 'Presentación', 'Presentación', 'https://www.youtube.com/watch?v=3Dt-2EizXXE', 'Sistemas Hospital Viedma', '2020-04-08 08:39:09'),
(27, 'Hospital Clínico Viedma inicia camapaña contra el cancer de mama', 'Hospital Clínico Viedma inicia camapaña contra el cancer de mama', 'https://www.youtube.com/watch?v=0JSa6rQIk_Q', 'Comunicación del Hospital Clínico Viedma', '2020-10-15 12:05:20'),
(28, 'Terapia para pacientes Covid-19', 'Terapia para pacientes Covid-19', 'https://www.youtube.com/watch?v=URLPDz4bbt4', 'Servicios de Fisioterapia y Kenesiologia', '2021-03-18 12:13:48'),
(29, 'Terapia para pacientes Covid-19', 'Terapia para pacientes Covid-19', 'https://www.youtube.com/watch?v=C8Gbl5e0faY', 'Fisioterapia', '2021-03-18 03:50:23');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` int(11) NOT NULL,
  `nombre` varchar(55) NOT NULL,
  `usuario` varchar(55) NOT NULL,
  `password` varchar(55) NOT NULL,
  `tipo_usuario` int(11) NOT NULL,
  `habilitado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `nombre`, `usuario`, `password`, `tipo_usuario`, `habilitado`) VALUES
(1, 'adminHCV', 'HCVadmin', 'admin', 1, 1),
(2, 'comunicacion', 'comunicacion', 'comunicacion', 1, 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `avisos`
--
ALTER TABLE `avisos`
  ADD PRIMARY KEY (`id_aviso`);

--
-- Indices de la tabla `blog_viedma`
--
ALTER TABLE `blog_viedma`
  ADD PRIMARY KEY (`id_blog_hosp`);

--
-- Indices de la tabla `noticias`
--
ALTER TABLE `noticias`
  ADD PRIMARY KEY (`id_noticias`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `avisos`
--
ALTER TABLE `avisos`
  MODIFY `id_aviso` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT de la tabla `blog_viedma`
--
ALTER TABLE `blog_viedma`
  MODIFY `id_blog_hosp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT de la tabla `noticias`
--
ALTER TABLE `noticias`
  MODIFY `id_noticias` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
