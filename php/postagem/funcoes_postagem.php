<?php
require_once "../postagem/modelo.php";
require_once "../postagem/conexao.php";

class funcoes_postagem implements PersistePostagem {
	private $persistencia;
    function __construct() {
        $this->persistencia = getConexao();
    }

	function criaTabelaPostagem() { //postgre
		$query = "CREATE TABLE IF NOT EXISTS postagens (
			titulo VARCHAR(128) NOT NULL,
			legenda VARCHAR(600) NOT NULL,
			img TEXT NOT NULL,
			id_postagem serial not null PRIMARY KEY,
			usuid INT NOT NULL,
			FOREIGN KEY (usuid) REFERENCES usuarios(id)
		)";
		$result = pg_query($this->persistencia, $query);
		return $result;

	}

	/*private function getUsuarioId() {
        $query = "SELECT id FROM usuarios WHERE login='$_SESSION['login']' LIMIT 1";
        $result = pg_query($this->persistencia, $query);
        $usuid = NULL;
        if ($result && pg_num_rows($result) > 0) {
            $usuid = pg_fetch_array($result, NULL, MYSQLI_ASSOC)['id'];
        }
        return $usuid;
    }

	function inserePostagem($dados) { //postgre
		$usuid = $this->getUsuarioId();
        $result = NULL;
		if ($usuid) {
			$titulo = $dados['titulo'];
			$legenda = $dados['legenda'];
			$img = $dados['img'];
			//$usuid = $dados['usuid'];

			$query = "INSERT INTO postagens(titulo, legenda, img, usuid) VALUES('$titulo','$legenda','$img', $usuid)";
			$result = pg_query($this->persistencia, $query);
		}
		return $result;
	}
	*/
	function carregaPostagens() {
		$query = "SELECT * FROM postagens";
		$result = mysqli_query($this->persistencia, $query);
		return $result;
	}
	
}
?>
