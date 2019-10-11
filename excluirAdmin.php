<?php 
require_once 'config.php';
//OK
if (isset($_GET['id']) && empty($_GET['id']) == false) {
	$id = addslashes($_GET['id']);

	$sql = "DELETE FROM usuarios WHERE id = '$id'";
	//EXECUTA
	$pdo->query($sql);

	header("Location: listarAdmin.php"); 	

} else {
	header("Location: listarAdmin.php"); 
}

?>
