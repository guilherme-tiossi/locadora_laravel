DROP DATABASE IF EXISTS bd_locadora_laravel;
CREATE DATABASE IF NOT EXISTS bd_locadora_laravel;
USE bd_locadora_laravel;

CREATE TABLE `tbusuarios` (
 `id_user` int(10) NOT NULL AUTO_INCREMENT,
 `nome_user` varchar(30) NOT NULL,
 `email_user` varchar(100) NOT NULL,
 `senha_user` varchar(100) NOT NULL,
 `adm_user` int(1) NOT NULL DEFAULT '0',
 `data_nasc_user` date NOT NULL,
 `pfp_user` varchar(60) DEFAULT 'avatar.jpg',
 PRIMARY KEY (`id_user`),
 UNIQUE KEY `email_user` (`email_user`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=latin1;

CREATE TABLE `tbgeneros` (
 `id_genero` int(10) NOT NULL AUTO_INCREMENT,
 `nome_genero` varchar(30) NOT NULL,
 PRIMARY KEY (`id_genero`)
) ENGINE=InnoDB AUTO_INCREMENT=112 DEFAULT CHARSET=latin1;

ALTER TABLE tbgeneros AUTO_INCREMENT = 1;

CREATE TABLE `tbfilmes` (
 `id_filme` int(10) NOT NULL AUTO_INCREMENT,
 `titulo_filme` varchar(100) NOT NULL,
 `sinopse_filme` varchar(300) NOT NULL,
 `valor_filme` float(4,2) NOT NULL,
 `disponiveis_filme` int(2) NOT NULL,
 `genero_filme` int(10) NOT NULL,
 `foto_filme` varchar(60) NOT NULL,
 PRIMARY KEY (`id_filme`),
 KEY `fk_genero` (`genero_filme`),
 CONSTRAINT `fk_genero` FOREIGN KEY (`genero_filme`) REFERENCES `tbgeneros` (`id_genero`)
) ENGINE=InnoDB AUTO_INCREMENT=117 DEFAULT CHARSET=utf8mb4;

CREATE TABLE `tbalugueis` (
 `id_aluguel` int NOT NULL AUTO_INCREMENT,
 `id_user` int NOT NULL,
 `id_filme` int NOT NULL,
 `validade` date NOT NULL,
 PRIMARY KEY (`id_aluguel`),
 KEY `fk_idfilme` (`id_filme`),
 KEY `fk_iduser` (`id_user`),
 CONSTRAINT `fk_idfilme` FOREIGN KEY (`id_filme`) REFERENCES `tbfilmes` (`id_filme`) ON DELETE CASCADE ON UPDATE CASCADE,
 CONSTRAINT `fk_iduser` FOREIGN KEY (`id_user`) REFERENCES `tbusuarios` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=49 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

INSERT INTO tbgeneros VALUES (null, "Drama");
INSERT INTO tbfilmes VALUES (null, "Django Livre", "No sul dos Estados Unidos, o ex-escravo Django faz uma aliança inesperada com o caçador de recompensas Schultz para caçar os criminosos mais procurados do país e resgatar sua esposa de um fazendeiro que força seus escravos a participar de competições mortais.", 15.00, 10, 1, "padrao.png");