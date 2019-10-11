<?php 
require_once 'config.php';
//OK
if (isset($_GET['id']) && empty($_GET['id']) == false) {
	$id = addslashes($_GET['id']);

	$sql = "DELETE FROM dados WHERE id = '$id'";
	//EXECUTA
	$pdo->query($sql);

	header("Location: admin.php"); //ANTES ERA INDEX.PHP	

} else {
	header("Location: admin.php"); //ANTES ERA INDEX.PHP
}

?>
