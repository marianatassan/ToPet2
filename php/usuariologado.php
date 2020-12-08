<?php

require_once "usuario/controle.php";
$controleUsuario = new ControleUsuario();
$login = $controleUsuario->getLogin();

if(!($login)){
	header('Location:../login.html');
} else {
	echo $login;
	echo '<a href="logoutaction.php"> logout</a>';
}

?>