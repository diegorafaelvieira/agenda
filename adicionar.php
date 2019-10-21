<?php
require_once 'config.php';

echo "<h4>ÁREA RESTRITA</h4>";

	if (isset($_POST['nome']) && empty($_POST['nome']) == false) { /* strtoupper -> converte para MAIUSCULO */
		$nome = addslashes(strtoupper($_POST['nome']));
		$telefone1 = addslashes(strtoupper($_POST['telefone1']));
		$telefone2 = addslashes(strtoupper($_POST['telefone2']));
		$celular = addslashes(strtoupper($_POST['celular']));
		$email = addslashes(strtoupper($_POST['email']));
		$skype = addslashes(strtoupper($_POST['skype']));

		$sql = "INSERT INTO dados SET nome = '$nome', telefone1 = '$telefone1', telefone2 = '$telefone2',
		celular = '$celular', email = '$email', skype = '$skype' "; 
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
	<title>Adicionar Contato</title>
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
		<h2>ADICIONAR CONTATO</h2>
	</header>

	<section id="adicionar">
		<form method="POST">
			Nome:<br/>
			<input type="text" name="nome" size="50" max="50" placeholder="Digite o nome"/><br/><br/>
			Telefone 1:<br/>
			<input type="text" name="telefone1" size="15" max="50" placeholder="(051)999999999" /><br/><br/>
			Telefone 2:<br/>
			<input type="text" name="telefone2" size="15" max="50" placeholder="(051)999999999"/><br/><br/>
			Celular:<br/>
			<input type="text" name="celular" size="15" max="50" placeholder="(051)999999999"/><br/><br/>
			E-mail:<br/>
			<input type="text" name="email" size="50" max="50" placeholder="Digite o e-mail"><br/><br/>
			Skype:<br/>
			<input type="text" name="skype" size="50" max="50" placeholder="Digite o skype"><br/><br/>
			<input type="submit" value="Cadastrar" />
			<input type="reset" value="Limpar" />

		</form>
	</section>

	<footer>
        <p>&copy; Diego Rafael Vieira</p>
    </footer>
</body>
</html>


