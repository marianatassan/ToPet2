<?php
require_once "../postagem/modelo.php";
require_once "../postagem/conexao.php";

class funcoes_postagem implements PersistePostagem {
	private $persistencia;
    function __construct() {
        $this->persistencia = getConexao();
    }
	function criaTabelaPostagem() {
		$query = "CREATE TABLE IF NOT EXISTS publicacao (
		id_postagem INT NOT NULL,
		legenda VARCHAR(600) NULL,
		titulo VARCHAR(45) NOT NULL,
		tamanho_imagem VARCHAR(45) NOT NULL,
		tipo_imagem VARCHAR(45) NOT NULL,
		usuario_id INT NOT NULL,
		PRIMARY KEY (id_postagem))";
		$result = mysqli_query($this->persistencia, $query);
		return $result;

	}

	function inserePostagem() {
		$query = "INSERT INTO publicacao(legenda,titulo,tamanho_imagem,tipo_imagem,usuario_id) VALUES()";
		$result = mysqli_query($this->persistencia, $query);
		return $result;
	}

	function carregaPostagem() {
		$query = "SELECT titulo FROM publicacao WHERE id_postagem=1";
		$result = mysqli_query($this->persistencia, $query);
		return $result;
	}

	function deletaTabelaPostagem() {
		$query = "DROP TABLE publicacao";
		$result = mysqli_query($this->persistencia, $query);
		return $result;
	}

	function deletaPostagem() {
		$query = "DELETE FROM publicacao WHERE id_postagem<5;";
		$result = mysqli_query($this->persistencia, $query);
		return $result;
	}
	
}
?>
