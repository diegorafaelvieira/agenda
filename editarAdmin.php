<?php
	require_once 'config.php';

	echo "<h4>ÁREA RESTRITA</h4>";

	$id = 0;
	//PEGAR ID
	if (isset($_GET['id']) && empty($_GET['id']) == false) {
			$id = addslashes($_GET['id']);
	}		
	//VERIFICAR SE USUÁRIO ENVIOU INFORMAÇÃO
	if (isset($_POST['nome']) && empty($_POST['nome']) == false) {
		$nome = addslashes($_POST['nome']);
		$email = addslashes($_POST['email']);
		$senha = md5(addslashes($_POST['senha']));

		$sql = "UPDATE usuarios SET nome = '$nome', email = '$email', senha = '$senha' WHERE id = '$id' ";
		//EXECUTA
		$pdo->query($sql);

		header("Location: listarAdmin.php");  
	}
	//AQUI PREENCHE OS DADOS
	$sql = "SELECT * FROM usuarios WHERE id = '$id'";
	$sql = $pdo->query($sql);
	if ($sql->rowCount() > 0) {
		$dado = $sql->fetch();
	} else {
		header("Location:listarAdmin.php"); 
	}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> <!-- TAG RESPONSIVA BOOTSTRAP -->
	<meta charset="UTF-8">
	<title>Editar Contato</title>
	<link rel="stylesheet" href="estilo.css">
	<script type="text/javascript" src="pace.min.js"></script>
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
        <h1>EDITAR ADMIN</h1>
	</header>

	<section id="editar">
		<form method="POST">
			Nome:<br/>
			<input type="text" name="nome" size="50" max="50" value="<?php echo $dado['nome']; ?>" /><br/><br/>
			E-mail:<br/>
			<input type="email" name="email" size="50" max="50" value="<?php echo $dado['email']; ?>" /><br/><br/>
			Senha:<br/>
			<input type="text" name="senha" size="50" max="50" value="<?php echo $dado['senha']; ?>" /><br/><br/>
			
			<input type="submit" value="Atualizar" />
			<input type="reset" value="Limpar" />
		</form>
	</section>

	<footer>

        <p>&copy; Diego Rafael Vieira</p>
    </footer>

</body>
</html>

