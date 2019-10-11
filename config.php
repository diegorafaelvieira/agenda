<?php
	$dsn = "mysql:dbname=agenda;host=localhost;charset=utf8"; //ADD charset=utf8 POR CAUSA ORTOGRAFIA BD PHPADMIN
	$dbuser = "root";
	$dbpass= "";
	$opcoes = array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES UTF8'); //ADD LINHA POR CAUSA ORTOGRAFIA BD PHPADMIN
	

	try {
		$pdo = new PDO($dsn, $dbuser, $dbpass, $opcoes); //ADD $opcoes POR CAUSA ORTOGRAFIA BD PHPADMIN
		

	} catch (ExceptionPDO $e) {
		echo "Falhou a conexão: ".$e->getMessage();
	}
?>