<?php
require_once "../usuario/credencial.php";

class Mysql implements PersisteCredencial {
	private $mysqlconnection;
	function __construct(){
		$hostname = 'localhost';
		$database = 'topet_banco';
		$username = 'root';
		$password = '';
		$this->mysqlconnection = new mysqli($hostname, $username, $password, $database);
	}

	function deletaTabelaUsuario() {
		$query = "DROP TABLE usuario";
		$result = $this->mysqlconnection->query($query);
		return $result;
	}

	function criaTabelaUsuarios() {
		$query = "CREATE TABLE IF NOT EXISTS usuarios (
		login VARCHAR(16) NOT NULL UNIQUE,
		senha VARCHAR(128) NOT NULL,
		id INT NOT NULL AUTO_INCREMENT,
		PRIMARY KEY (id)
	)";
	$result = $this->mysqlconnection->query($query);
	}

	function insereUsuario($login, $senha) {
		$query = "INSERT INTO usuarios(login, senha) VALUES ('$login', '$senha')";
		$result = $this->mysqlconnection->query($query);
	}

	function carregaUsuarios() {
		$query = "SELECT * FROM usuarios";
		$result = $this->mysqlconnection->query($query);
		$usuarios = array();
		while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
			$usuarios[$row['login']] = $row['senha'];
		}
		return $usuarios;
	}

	function salvaUsuarios($usuarios) {
		foreach($usuarios as $login => $senha) {
			$this->insereUsuario($login, $senha);
		}
	}

	function carregaUsuario() {
		$query = "SELECT login FROM usuarios WHERE id>=16";
		$result = $this->mysqlconnection->query($query);
		return $result;
	}

	function deletaUsuario() {
		$query = "DELETE FROM usuarios WHERE id>18;";
		$result = $this->mysqlconnection->query($query);
		return $result;
	}
}
$mysql = new Mysql();
$usuarios = $mysql->carregaUsuarios();
?>
