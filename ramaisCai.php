<?php
    session_start();
    require_once 'config.php';
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
		<a href="index.php">Contatos</a>
		<a href="buscar.php">Buscar Contato</a>
        <a href="ramaisCai.php">Ramais Caí</a>
        <a href="ramaisPoa.php">Ramais POA</a>
		<A href="login.php">Login</a>
		<h2>Ramais Caí</h2> 
	</header>

	<section id="ramaisCai">
		<table border="2" width="100%">
			
			<tr>
				<th>Ramal</th>
				<th>Nome</th>
				<!-- <th>Ações</th> -->
			</tr>
			
			<?php
				$sql = "SELECT * FROM ramais WHERE cidade = 'CAÍ' ORDER BY nome asc"; 
				
				$sql = $pdo->query($sql);
					if ($sql->rowCount() > 0) {
						foreach ($sql->fetchAll() as $usuario) {
							echo '<tr>';
							echo '<td>'.$usuario['ramal'].'</td>';
							echo '<td>'.$usuario['nome'].'</td>';
							//echo '<td><a href="editar.php?id='.$usuario['id'].'">Editar</a> <a href="excluir.php?id='.$usuario['id'].'">Excluir</a></td>';
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

