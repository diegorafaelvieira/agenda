<?php
    require_once 'config.php';

    echo "<h4>ÁREA RESTRITA</h4>";

	if (isset($_POST['nome']) && empty($_POST['nome']) == false) {
		$ramal = addslashes(strtoupper($_POST['ramal']));
		$nome = addslashes(strtoupper($_POST['nome']));
		$cidade = addslashes(strtoupper($_POST['cidade']));

		$sql = "INSERT INTO ramais SET ramal = '$ramal', nome = '$nome', cidade = '$cidade' "; 
		//EXECUTAR
		$pdo->query($sql);

		header("Location: admin.php"); 
    }
    
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> <!-- TAG RESPONSIVA BOOTSTRAP -->
	<meta charset="UTF-8">
	<title>Adicionar Ramal</title>
	<link rel="stylesheet" href="estilo.css">
	<script type="text/javascript" src="pace.min.js"></script>
</head>
<body>
	
	<header>
		<a href="admin.php">Listar Contatos</a>
        <a href="buscarAdmin.php">Buscar Contato</a>
		<a href="adicionar.php">Adicionar Contato</a>
		<a href="ramaisCaiAdmin.php">Ramais Caí</a>
        <a href="ramaisPoaAdmin.php">Ramais POA</a>
        <a href="adicionarRamal.php">Adicionar Ramal</a>
		<a href="adicionarAdmin.php">Adicionar Admin</a>
		<a href="listarAdmin.php">Listar Admin</a>
		<a href="logout.php">Logout</a>
		<h2>ADICIONAR RAMAL</h2> 
	</header>

	<section id="adicionarRamal">
		<form action="adicionarRamal.php" method="POST">
			Ramal:<br/>
			<input type="text" name="ramal" size="45" max="50" placeholder="Digite o ramal"/><br/><br/>
			Nome:<br/>
			<input type="text" name="nome" size="45" max="50" placeholder="Digite o nome"><br/><br/>
			Cidade:<br/>
			<input type="text" name="cidade" size="45" max="50" placeholder="Digite a cidade"><br/><br/>
			<input type="submit" value="Cadastrar" />
			<input type="reset" value="Limpar" />
		</form>
    </section>
    
	<footer>
        <p>&copy; Diego Rafael Vieira</p>
    </footer>
</body>
</html>
