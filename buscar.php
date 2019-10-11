<?php
require_once 'config.php';
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> <!-- TAG RESPONSIVA BOOTSTRAP -->
    <meta charset="UTF-8">
    <title>Buscar Contato</title>
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
	</header>

    <section id="buscar">
        <table border="2" width="100%">
            <tr>
                <th>Nome</th>
                <th>Telefone 1</th>
                <th>Telefone 2</th>
                <th>Celular</th>
                <th>E-mail</th>
                <th>Skype</th>
                <!-- <th>Ações</th> -->
            </tr>
            
            <?php
            if (isset($_POST['nome']) && empty($_POST['nome']) == false) {
                $nome = addslashes($_POST['nome']);
                
                $sql = "SELECT * FROM dados WHERE nome LIKE '%".$nome."%' "; 

                //EXECUTAR
                $sql = $pdo->query($sql);
            
                if ($sql->rowCount() > 0) {
                    foreach ($sql->fetchAll() as $usuario) {
                        echo '<tr>';
                        echo '<td>'.$usuario['nome'].'</td>';
                        echo '<td>'.$usuario['telefone1'].'</td>';
                        echo '<td>'.$usuario['telefone2'].'</td>';
                        echo '<td>'.$usuario['celular'].'</td>';
                        echo '<td>'.$usuario['email'].'</td>';
                        echo '<td>'.$usuario['skype'].'</td>';
                        //echo '<td><a href="editar.php?id='.$usuario['id'].'">Editar</a>  <a href="excluir.php?id='.$usuario['id'].'">Excluir</a></td>';
                        echo '</tr>';
                    }
                }

            }

            ?>

        <form action="buscar.php" method="POST">
            Nome:<br/>
            <input type="text" name="nome" size="50" max="50" placeholder="Digite o nome que deseja buscar"/>
            <input type="submit" value="Buscar" />
        </form>
    </section>

    <footer>
        <p>&copy; Diego Rafael Vieira</p>
    </footer>
</body>
</html>



