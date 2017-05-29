
CREATE DATABASE `locadora` 
USE `locadora`;

CREATE TABLE `cliente` (
  `idcliente` int(11) NOT NULL,
  `nomecliente` varchar(45) DEFAULT NULL,
  `emailcliente` varchar(45) DEFAULT NULL,
  `telefonecliente` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idcliente`)
) ENGINE=InnoDB AUTO_INCREMENT=0 DEFAULT CHARSET=utf8;

CREATE TABLE `filme` (
  `idfilme` int(11) NOT NULL,
  `nomefilme` varchar(45) DEFAULT NULL,
  `genero` varchar(45) DEFAULT NULL,
  `lancamento` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idfilme`)
) ENGINE=InnoDB AUTO_INCREMENT=0 DEFAULT CHARSET=utf8;

CREATE TABLE `locacao` (
  `idlocacao` int(11) NOT NULL,
  `idcliente` int(11) NOT NULL,
  `idfilme` int(11) NOT NULL,
  `datalocacao` varchar(45) DEFAULT NULL,
  `datadevolucao` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idlocacao`),
  KEY `cliente_locacao_idx` (`idcliente`),
  KEY `filme_locacao_idx` (`idfilme`),
  CONSTRAINT `cliente_locacao` FOREIGN KEY (`idcliente`) REFERENCES `cliente` (`idcliente`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `filme_locacao` FOREIGN KEY (`idfilme`) REFERENCES `filme` (`idfilme`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
