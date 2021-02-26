<?php
require_once "../usuario/credencial.php";
require_once "../postagem/conexao.php";

class Mysql implements PersisteCredencial {
	function __construct() {
        $this->persistencia = getConexao();
    }
	
	function criaTabelaUsuarios() { //postgree
		$query = "CREATE TABLE IF NOT EXISTS usuarios (
		login VARCHAR(16) NOT NULL UNIQUE,
		senha VARCHAR(128) NOT NULL,
		id SERIAL NOT NULL PRIMARY KEY)";
		$result = pg_query($this->persistencia, $query);
		return $result;
	}

	function insereUsuario($login, $senha) {
		$query = "INSERT INTO usuarios(login, senha) VALUES ('$login', '$senha')";
		return pg_query($this->persistencia, $query);
	}

	function carregaUsuarios() {
		$query = "SELECT * FROM usuarios";
		$result = pg_query($this->persistencia, $query);
	}

	function salvaUsuarios($usuarios) {
		foreach($usuarios as $login => $senha) {
			$this->insereUsuario($login, $senha);
		}
	}
}

$mysql = new MySql();
$usuarios = $mysql->carregaUsuarios();
?>
