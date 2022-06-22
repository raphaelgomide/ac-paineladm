/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

CREATE TABLE IF NOT EXISTS `tb_agenda_convidados` (
  `id_agenda_convidados` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `ds_nome_convidado` varchar(255) DEFAULT NULL,
  `dt_entrevista_escrita` date DEFAULT NULL,
  `link_entrevista_escrita` varchar(500) DEFAULT NULL,
  `dt_treinamento` date DEFAULT NULL,
  `dt_hora_treinamento` time DEFAULT NULL,
  `dt_live` date DEFAULT NULL,
  `dt_hora_live` time DEFAULT NULL,
  `link_live` varchar(500) DEFAULT NULL,
  `fk_usuario` int(4) unsigned DEFAULT NULL,
  `criado_em` timestamp NOT NULL DEFAULT current_timestamp(),
  `fk_usuario_edicao` int(4) unsigned DEFAULT NULL,
  `editado_em` datetime DEFAULT NULL,
  PRIMARY KEY (`id_agenda_convidados`),
  UNIQUE KEY `id_agenda_convidados` (`id_agenda_convidados`),
  KEY `fk_usuario_tb_usuario` (`fk_usuario`),
  KEY `fk_usuario_edicao_tb_usuario` (`fk_usuario_edicao`),
  CONSTRAINT `fk_usuario_edicao_tb_agenda_convidados` FOREIGN KEY (`fk_usuario_edicao`) REFERENCES `tb_usuario` (`id_usuario`),
  CONSTRAINT `fk_usuario_tb_agenda_convidados` FOREIGN KEY (`fk_usuario`) REFERENCES `tb_usuario` (`id_usuario`)
) ENGINE=InnoDB AUTO_INCREMENT=45 DEFAULT CHARSET=utf8;

/*!40000 ALTER TABLE `tb_agenda_convidados` DISABLE KEYS */;
/*!40000 ALTER TABLE `tb_agenda_convidados` ENABLE KEYS */;

CREATE TABLE IF NOT EXISTS `tb_cargo` (
  `id_cargo` int(2) unsigned NOT NULL AUTO_INCREMENT,
  `ds_cargo` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_cargo`) USING BTREE,
  UNIQUE KEY `id_cargo` (`id_cargo`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

/*!40000 ALTER TABLE `tb_cargo` DISABLE KEYS */;
INSERT INTO `tb_cargo` (`id_cargo`, `ds_cargo`) VALUES
	(1, 'Redação'),
	(2, 'Colunista'),
	(3, 'Jornalista'),
	(4, 'Escritor'),
	(5, 'Administrador');
/*!40000 ALTER TABLE `tb_cargo` ENABLE KEYS */;

CREATE TABLE IF NOT EXISTS `tb_tipo_usuario` (
  `id_tipo_usuario` int(2) unsigned NOT NULL AUTO_INCREMENT,
  `ds_tipo_usuario` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_tipo_usuario`) USING BTREE,
  UNIQUE KEY `id_tipo_usuario` (`id_tipo_usuario`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

/*!40000 ALTER TABLE `tb_tipo_usuario` DISABLE KEYS */;
INSERT INTO `tb_tipo_usuario` (`id_tipo_usuario`, `ds_tipo_usuario`) VALUES
	(1, 'Administrador'),
	(2, 'Colaborador');
/*!40000 ALTER TABLE `tb_tipo_usuario` ENABLE KEYS */;

CREATE TABLE IF NOT EXISTS `tb_usuario` (
  `id_usuario` int(4) unsigned NOT NULL AUTO_INCREMENT,
  `ds_nome_usuario` varchar(255) DEFAULT NULL,
  `ds_email_usuario` varchar(255) DEFAULT NULL,
  `ds_senha` varchar(255) DEFAULT NULL,
  `fk_cargo` int(2) unsigned DEFAULT NULL,
  `fk_tipo_usuario` int(2) unsigned DEFAULT NULL,
  PRIMARY KEY (`id_usuario`),
  UNIQUE KEY `id_usuario` (`id_usuario`),
  UNIQUE KEY `ds_email_usuario` (`ds_email_usuario`),
  KEY `fk_cargo_tb_cargo` (`fk_cargo`),
  KEY `fk_tipo_usuario_tb_usuario` (`fk_tipo_usuario`),
  CONSTRAINT `fk_cargo_tb_usuario` FOREIGN KEY (`fk_cargo`) REFERENCES `tb_cargo` (`id_cargo`),
  CONSTRAINT `fk_tipo_usuario_tb_usuario` FOREIGN KEY (`fk_tipo_usuario`) REFERENCES `tb_tipo_usuario` (`id_tipo_usuario`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

/*!40000 ALTER TABLE `tb_usuario` DISABLE KEYS */;
INSERT INTO `tb_usuario` (`id_usuario`, `ds_nome_usuario`, `ds_email_usuario`, `ds_senha`, `fk_cargo`, `fk_tipo_usuario`) VALUES
	(1, 'admin', 'admin@artecult.com', '$2y$10$QupjPG596vqS78ArxZqAquTb38gdCyA/44yfyaB5fTEvR3oKEq34S', 5, 1);
/*!40000 ALTER TABLE `tb_usuario` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
