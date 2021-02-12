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
		id_postagem INT NOT NULL AUTO_INCREMENT,
		legenda VARCHAR(600) NOT NULL,
		titulo VARCHAR(45) NOT NULL,
		tamanho_imagem VARCHAR(45) NOT NULL,
		tipo_imagem VARCHAR(45) NOT NULL,
		usuarios_postagem INT NOT NULL,
		FOREIGN KEY (usuarios_postagem) REFERENCES usuarios(id),
		PRIMARY KEY (id_postagem))";
		$result = mysqli_query($this->persistencia, $query);
		return $result;

	}

	function inserePostagem($dados) {
		$legenda = $dados['legenda'];
        $titulo_imagem = $dados['titulo_imagem'];
        $tamanho_imagem = $dados['tamanho_imagem'];
        $tipo_imagem = $dados['tipo_imagem'];
        $usuarios_postagem = $dados['usuarios_postagem'];

		$query = "INSERT INTO publicacao(legenda, titulo, tamanho_imagem, tipo_imagem,usuarios_postagem) VALUES('$legenda','$titulo_imagem','$tamanho_imagem','$tipo_imagem', $usuarios_postagem)";

		$result = mysqli_query($this->persistencia, $query);

		return $result;
	}

	function alteraTipoPostagem() {
		$query = "UPDATE publicacao SET tipo_imagem='png' WHERE id_postagem>=2";
		$result = mysqli_query($this->persistencia, $query);
		return $result;
	}

	function carregaUsuarioPostagem() {
		$query = "SELECT usuarios_postagem FROM publicacao WHERE id_postagem=2";
		$result = mysqli_query($this->persistencia, $query);
		return $result;
	}

	function deletaTabelaPostagem() {
		$query = "DROP TABLE publicacao";
		$result = mysqli_query($this->persistencia, $query);
		return $result;
	}

	function deletaPostagem() {
		$query = "DELETE FROM publicacao WHERE id_postagem>5;";
		$result = mysqli_query($this->persistencia, $query);
		return $result;
	}
	
}
?>
