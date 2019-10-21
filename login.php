<?php
     session_start();
     require_once 'config.php';
    
     if(isset($_POST['email']) && empty($_POST['email']) == false) {
         $email = addslashes($_POST['email']);
         $senha = md5(addslashes($_POST['senha']));
    
     
        //VERIFICAR SE USUÁRIO EXISTE
        $sql = "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha' ";
       
        $sql = $pdo->query($sql);
        
        //RETORNO RESULTADO
        if ($sql->rowCount() > 0) {
                 
            $dado = $sql->fetch();
     
            $_SESSION['id'] = $dado['id'];
     
            header("Location: admin.php"); 
        } 
     }
    
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> <!-- TAG RESPONSIVA BOOTSTRAP -->
    <meta charset="UTF-8">
    <title>Login</title>
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
        <h1>LOGIN</h1>
    </header>
    
    <section id="login">
        <form action="login.php" method="POST">
            E-mail:<br/>
            <input type="email" name="email" size="50" max="50" placeholder="Digite o e-mail"/><br/><br/>
            Senha:<br/>
            <input type="password" name="senha" size="50" max="50" placeholder="Digite a senha" /><br/><br/>
            <input type="submit" value="Entrar"  />
            <input type="reset" value="Limpar" />
        </form>
    </section>

    <footer>
        <p>&copy; Diego Rafael Vieira</p>
    </footer>

    
</body>
</html>


