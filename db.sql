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


ALTER TABLE tbgeneros AUTO_INCREMENT = 1;





INSERT INTO tbgeneros VALUES (null, "Drama");
INSERT INTO tbgeneros VALUES (null, "Crime");
INSERT INTO tbgeneros VALUES (null, "Guerra");
INSERT INTO tbgeneros VALUES (null, "Ação");
INSERT INTO tbgeneros VALUES (null, "Suspense");
INSERT INTO tbgeneros VALUES (null, "Ação");

INSERT INTO tbfilmes VALUES (null, "Django Livre", "No sul dos Estados Unidos, o ex-escravo Django faz uma aliança inesperada com o caçador de recompensas Schultz para caçar os criminosos mais procurados do país e resgatar sua esposa de um fazendeiro que força seus escravos a participar de competições mortais.", 15.00, 10, 1, "padrao.png");
INSERT INTO tbfilmes VALUES (null, "Kill Bill Vol. 1", "Noiva assassina é traída por antigo grupo e fica em coma por quatro anos. Quando acorda, procura vingança e mata seus companheiros um por um. Ao confrontar seu antigo mestre e amante, uma surpresa a espera.", 30.00, 5, 2, "padrao.png");
INSERT INTO tbfilmes VALUES (null, "Bastardos Inglórios", "Na Segunda Guerra Mundial, a França está ocupada pelos nazistas. O tenente Aldo Raine é o encarregado de reunir um pelotão de soldados de origem judaica, com o objetivo de realizar uma missão suicida contra os alemães. O objetivo é matar o maior número possível de nazistas, da forma mais cruel possível.", 10.00, 15, 3, "padrao.png");
INSERT INTO tbfilmes VALUES (null, "Team America: World Police", "Quando o governante norte-coreano Kim Jong-il organiza uma conspiração terrorista global, cabe aos bonecos fortemente armados da unidade altamente especializada Team America parar seu esquema covarde.", 15.00, 20, 4, "padrao.png");
INSERT INTO tbfilmes VALUES (null, "Os Oito Odiados", "Em busca de abrigo para se proteger de uma nevasca, dois caçadores de recompensas, um prisioneiro e um homem que alega ser xerife conhecem quatro estranhos.", 15.00, 10, 5, "padrao.png");
INSERT INTO tbfilmes VALUES (null, "Clube da Luta", "Um homem deprimido que sofre de insônia conhece um estranho vendedor chamado Tyler Durden e se vê morando em uma casa suja depois que seu perfeito apartamento é destruído. A dupla forma um clube com regras rígidas onde homens lutam. A parceria perfeita é comprometida quando uma mulher, Marla, atrai a atenção de Tyler.", 30.00, 6, 1, "padrao.png");
