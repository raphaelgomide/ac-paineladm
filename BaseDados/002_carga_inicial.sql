CREATE TABLE IF NOT EXISTS `tb_editoria` (
  `id_editoria` int(2) unsigned NOT NULL AUTO_INCREMENT,
  `ds_editoria` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_editoria`) USING BTREE,
  UNIQUE KEY `id_editoria` (`id_editoria`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;


INSERT INTO `tb_editoria` (`id_editoria`, `ds_editoria`) VALUES
	(1, 'Cinema'),
	(2, 'Música'),
	(3, 'Artes Plásticas'),
	(4, 'Literatura');


CREATE TABLE IF NOT EXISTS `tb_perfil_usuario` (
  `id_perfil_usuario` int(2) unsigned NOT NULL AUTO_INCREMENT,
  `ds_perfil_usuario` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_perfil_usuario`) USING BTREE,
  UNIQUE KEY `id_perfil_usuario` (`id_perfil_usuario`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

INSERT INTO `tb_perfil_usuario` (`id_perfil_usuario`, `ds_perfil_usuario`) VALUES
	(1, 'Administrador'),
	(2, 'Redator'),
	(3, 'Revisor'),
	(4, 'Colaborador');

CREATE TABLE IF NOT EXISTS `tb_usuario` (
  `id_usuario` int(4) unsigned NOT NULL AUTO_INCREMENT,
  `ds_nome_usuario` varchar(255) DEFAULT NULL,
  `ds_email_usuario` varchar(255) DEFAULT NULL,
  `ds_senha` varchar(255) DEFAULT NULL,
  `fk_editoria` int(2) unsigned DEFAULT NULL,
  `fk_perfil_usuario` int(2) unsigned DEFAULT NULL,
  PRIMARY KEY (`id_usuario`),
  UNIQUE KEY `id_usuario` (`id_usuario`),
  UNIQUE KEY `ds_email_usuario` (`ds_email_usuario`),
  KEY `fk_editoria_tb_editoria` (`fk_editoria`),
  KEY `fk_perfil_usuario_tb_perfil_usuario` (`fk_perfil_usuario`),
  CONSTRAINT `fk_editoria_tb_usuario` FOREIGN KEY (`fk_editoria`) REFERENCES `tb_editoria` (`id_editoria`),
  CONSTRAINT `fk_perfil_usuario_tb_usuario` FOREIGN KEY (`fk_perfil_usuario`) REFERENCES `tb_perfil_usuario` (`id_perfil_usuario`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;


INSERT INTO `tb_usuario` (`id_usuario`, `ds_nome_usuario`, `ds_email_usuario`, `ds_senha`, `fk_editoria`, `fk_perfil_usuario`) VALUES
	(0, 'admin', 'admin@artecult.com', '$2y$10$QupjPG596vqS78ArxZqAquTb38gdCyA/44yfyaB5fTEvR3oKEq34S', NULL, 1);


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
