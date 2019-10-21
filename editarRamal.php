<?php
	require_once 'config.php';

	echo "<h4>ÁREA RESTRITA</h4>";   //REVER ERRO QUANDO EDITO RAMAL

	$id = 0;
	//PEGAR ID
	if (isset($_GET['id']) && empty($_GET['id']) == false) {
			$id = addslashes($_GET['id']);
	}		
	//VERIFICAR SE USUÁRIO ENVIOU INFORMAÇÃO
	if (isset($_POST['nome']) && empty($_POST['nome']) == false) {
		$ramal = addslashes(strtoupper($_POST['ramal']));
		$nome = addslashes(strtoupper($_POST['nome']));
		$cidade = addslashes(strtoupper($_POST['cidade']));
		

		$sql = "UPDATE ramais SET nome = '$nome', ramal = '$ramal', cidade = '$cidade' WHERE id = '$id' ";
		//EXECUTA
		$pdo->query($sql);

		header("Location:admin.php");  //era index.php
	}
	//AQUI PREENCHE OS DADOS
	$sql = "SELECT * FROM ramais WHERE id = '$id'";
	$sql = $pdo->query($sql);
	if ($sql->rowCount() > 0) {
		$dado = $sql->fetch();
	} else {
		header("Location:admin.php");  //era index.php
	}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> <!-- TAG RESPONSIVA BOOTSTRAP -->
	<meta charset="UTF-8">
	<title>Editar Ramal</title>
	<link rel="stylesheet" href="estilo.css">
	<script type="text/javascript" src="pace.min.js"></script>
	<link rel="icon" type="image/png" sizes="16x16" href="../agenda/favicon-16x16.png"> <!-- AQUI ADD O ÍCONE SITE -->
</head>
<body>
	
	<header>
		<a href="admin.php">Listar Contatos</a>
		<a href="adicionar.php">Adicionar Contato</a>
		<a href="buscarAdmin.php">Buscar Contato</a>
		<a href="ramaisCaiAdmin.php">Ramais Caí</a>
        <a href="ramaisPoaAdmin.php">Ramais POA</a>
		<a href="adicionarAdmin.php">Adicionar Admin</a>
		<a href="listarAdmin.php">Listar Admin</a>
		<a href="logout.php">Logout</a>
		<h2>EDITAR RAMAL</h2>
	</header>

	<section id="editarRamal">
		<form method="POST">
            Ramal:<br/>
			<input type="text" name="ramal" size="40" max="50" value="<?php echo $dado['ramal']; ?>" /><br/><br/>
			Nome:<br/>
			<input type="text" name="nome" size="40" max="50" value="<?php echo $dado['nome']; ?>" /><br/><br/>
			Cidade:<br/>
			<input type="text" name="cidade" size="40" max="50" value="<?php echo $dado['cidade']; ?>" /><br/><br/>
			<input type="submit" value="Atualizar" />
			<input type="reset" value="Limpar" />
		</form>
	</section>

	<footer>

        <p>&copy; Diego Rafael Vieira</p>
    </footer>

</body>
</html>

