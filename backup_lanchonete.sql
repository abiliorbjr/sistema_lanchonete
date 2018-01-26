-- --------------------------------------------------------
-- Servidor:                     127.0.0.1
-- Versão do servidor:           10.1.19-MariaDB - mariadb.org binary distribution
-- OS do Servidor:               Win32
-- HeidiSQL Versão:              9.4.0.5125
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Copiando estrutura do banco de dados para lanchonete
CREATE DATABASE IF NOT EXISTS `lanchonete` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `lanchonete`;

-- Copiando estrutura para tabela lanchonete.clientes
CREATE TABLE IF NOT EXISTS `clientes` (
  `IDCLIENTE` int(11) NOT NULL AUTO_INCREMENT,
  `NOMECLIENTE` varchar(100) NOT NULL,
  `CPFCLIENTE` int(11) DEFAULT NULL,
  `DATANASCLIENTE` date DEFAULT NULL,
  `TELEFONECLIENTE` int(9) DEFAULT NULL,
  `DDDCLIENTE` int(2) DEFAULT NULL,
  `EMAIL` varchar(100) DEFAULT NULL,
  `ID_ENDCLIENTE` int(11) DEFAULT NULL,
  PRIMARY KEY (`IDCLIENTE`),
  KEY `fk_cliente_enderecocliente` (`ID_ENDCLIENTE`),
  CONSTRAINT `fk_cliente_enderecocliente` FOREIGN KEY (`ID_ENDCLIENTE`) REFERENCES `enderecocliente` (`IDENDCLIENTE`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela lanchonete.clientes: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `clientes` DISABLE KEYS */;
/*!40000 ALTER TABLE `clientes` ENABLE KEYS */;

-- Copiando estrutura para tabela lanchonete.enderecocliente
CREATE TABLE IF NOT EXISTS `enderecocliente` (
  `IDENDCLIENTE` int(11) NOT NULL AUTO_INCREMENT,
  `ENDCLIENTE` varchar(100) DEFAULT NULL,
  `CIDADE` varchar(50) DEFAULT NULL,
  `ESTADO` char(2) DEFAULT NULL,
  `CEP` int(8) DEFAULT NULL,
  PRIMARY KEY (`IDENDCLIENTE`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela lanchonete.enderecocliente: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `enderecocliente` DISABLE KEYS */;
/*!40000 ALTER TABLE `enderecocliente` ENABLE KEYS */;

-- Copiando estrutura para tabela lanchonete.estoque
CREATE TABLE IF NOT EXISTS `estoque` (
  `IDESTOQUE` int(11) NOT NULL AUTO_INCREMENT,
  `ID_PRODUTO` int(11) DEFAULT NULL,
  `QTDESTOQUE` int(11) DEFAULT NULL,
  PRIMARY KEY (`IDESTOQUE`),
  KEY `fk_estoques_produtos` (`ID_PRODUTO`),
  CONSTRAINT `fk_estoques_produtos` FOREIGN KEY (`ID_PRODUTO`) REFERENCES `produtos` (`IDPRODUTO`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela lanchonete.estoque: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `estoque` DISABLE KEYS */;
/*!40000 ALTER TABLE `estoque` ENABLE KEYS */;

-- Copiando estrutura para tabela lanchonete.mesas
CREATE TABLE IF NOT EXISTS `mesas` (
  `IDMESA` int(11) NOT NULL AUTO_INCREMENT,
  `ID_PRODUTO` int(11) DEFAULT NULL,
  `DATAINICIO` datetime DEFAULT NULL,
  `DATAFIM` datetime DEFAULT NULL,
  `STATUSMESA` enum('0','1') DEFAULT NULL,
  PRIMARY KEY (`IDMESA`),
  KEY `fk_mesas_produtos` (`ID_PRODUTO`),
  CONSTRAINT `fk_mesas_produtos` FOREIGN KEY (`ID_PRODUTO`) REFERENCES `produtos` (`IDPRODUTO`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela lanchonete.mesas: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `mesas` DISABLE KEYS */;
/*!40000 ALTER TABLE `mesas` ENABLE KEYS */;

-- Copiando estrutura para tabela lanchonete.produtos
CREATE TABLE IF NOT EXISTS `produtos` (
  `IDPRODUTO` int(11) NOT NULL AUTO_INCREMENT,
  `nomeproduto` varchar(100) DEFAULT NULL,
  `PRECOPRODUTO` float DEFAULT NULL,
  PRIMARY KEY (`IDPRODUTO`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela lanchonete.produtos: ~2 rows (aproximadamente)
/*!40000 ALTER TABLE `produtos` DISABLE KEYS */;
INSERT INTO `produtos` (`IDPRODUTO`, `nomeproduto`, `PRECOPRODUTO`) VALUES
	(1, 'Refrigerante Fanta laranja 600 ml', 4.5),
	(2, 'Refrigerante Fanta laranja lata 350 ml', 3.5);
/*!40000 ALTER TABLE `produtos` ENABLE KEYS */;

-- Copiando estrutura para tabela lanchonete.usuarios
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(50) DEFAULT NULL,
  `senha` varchar(32) DEFAULT NULL,
  `permissoes` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela lanchonete.usuarios: ~1 rows (aproximadamente)
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT INTO `usuarios` (`id`, `email`, `senha`, `permissoes`) VALUES
	(1, 'abiliorbjr@gmail.com', '202cb962ac59075b964b07152d234b70', 'ADM');
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
