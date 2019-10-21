<?php
    session_start();
    require_once 'config.php'; 

    if (isset($_SESSION['id']) && empty($_SESSION['id']) == false) {
        echo "<h4>ÁREA RESTRITA</h4>"; //AQUI SÓ EXIBO NA ADMIN.PHP 
	} else {
		header("Location: login.php");
	}
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> <!-- TAG RESPONSIVA BOOTSTRAP -->
	<meta charset="UTF-8">
	<title>Listar Admin</title>
	<link rel="stylesheet" href="estilo.css">
	<script type="text/javascript" src="pace.min.js"></script>
    <link rel="icon" type="image/png" sizes="16x16" href="../agenda/favicon-16x16.png"> <!-- AQUI ADD O ÍCONE SITE -->
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
        <h2>LISTAGEM ADMIN</h2>
	</header>

    
    <section id="listarAdmin">
        <!--- ADD AQUI  -->
        <table border="2" width="100%">

            <tr>
                <th>Nome</th>
                <th>E-mail</th>
                <th>Ações</th> 
            </tr>
            
            <?php    
                $sql = "SELECT * FROM usuarios ORDER BY nome asc "; 
                //EXECUTAR
                $sql = $pdo->query($sql);
            
                if ($sql->rowCount() > 0) {
                    foreach ($sql->fetchAll() as $usuario) {
                        echo '<tr>';
                        echo '<td>'.$usuario['nome'].'</td>';
                        echo '<td>'.$usuario['email'].'</td>';
                        echo '<td><a href="editarAdmin.php?id='.$usuario['id'].'">Editar</a>  <a href="excluirAdmin.php?id='.$usuario['id'].'">Excluir</a></td>';
                        echo '</tr>';
                    }
                }
            ?>
    </section>

	<footer>
        <p>&copy; Diego Rafael Vieira</p>
    </footer>
</body>
</html>
