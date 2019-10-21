<?php
require_once 'config.php';

echo "<h4>ÁREA RESTRITA</h4>";

	if (isset($_POST['nome']) && empty($_POST['nome']) == false) {
		$nome = addslashes($_POST['nome']);
		$email = addslashes($_POST['email']);
		$senha = md5(addslashes($_POST['senha'])); /* CRIPTOGRAFIA */

		$sql = "INSERT INTO usuarios SET nome = '$nome', email = '$email', senha = '$senha' "; 
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
	<title>Adicionar Admin</title>
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
		<h2>ADICIONAR ADMIN</h2>
	</header>

	<section id="adicionarAdmin">
		<form action="adicionarAdmin.php" method="POST">
			Nome:<br/>
			<input type="text" name="nome" size="50" max="50" placeholder="Digite o nome"/><br/><br/>
			E-mail:<br/>
			<input type="email" name="email" size="50" max="50" placeholder="Digite o e-mail"><br/><br/>
			Senha:<br/>
			<input type="text" name="senha" size="50" max="50" placeholder="Digite a senha"><br/><br/>
			<input type="submit" value="Cadastrar" />
			<input type="reset" value="Limpar" />
		</form>
    </section>
    
	<footer>
        <p>&copy; Diego Rafael Vieira</p>
    </footer>
</body>
</html>
