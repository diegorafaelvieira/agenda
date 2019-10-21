<?php
    session_start();
	require_once 'config.php';
	
	echo "<h4>ÁREA RESTRITA</h4>"; 
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> <!-- TAG RESPONSIVA BOOTSTRAP -->
	<meta charset="UTF-8">
	<title>Ramais Eza Caí</title>
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
		<h2>RAMAIS CAÍ</h2>
	</header>

	<section id="ramaisCaiAdmin">
		<table border="2" width="20%">
			
			<tr>
				<th>Ramal</th>
				<th>Nome</th>
				<th>Ações</th> 
			</tr>
			
			<?php
				$sql = "SELECT * FROM ramais WHERE cidade = 'CAÍ' OR cidade = 'CAI' ORDER BY nome ASC"; 
				
				$sql = $pdo->query($sql);
					if ($sql->rowCount() > 0) {
						foreach ($sql->fetchAll() as $usuario) {
							echo '<tr>';
							echo '<td>'.$usuario['ramal'].'</td>';
							echo '<td>'.$usuario['nome'].'</td>';
							echo '<td><a href="editarRamal.php?id='.$usuario['id'].'">Editar</a> <a href="excluirRamal.php?id='.$usuario['id'].'">Excluir</a></td>';
							echo '</tr>';
						}
					}
			?>
		</table>
		
	</section>

	<footer>
        <p>&copy; Diego Rafael Vieira</p>
    </footer>
</body>
</html>

