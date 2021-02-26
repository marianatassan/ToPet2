<pre>
<?php
require_once "../postagem/conexao.php";
echo "../postagem/conexao.php\n";
$conexao = getConexao();
var_dump($conexao);

require_once "../postagem/funcoes_postagem.php";
echo "../postagem/funcoes_postagem.php\n";


$persistenciaPostagem = new funcoes_postagem();
var_dump($persistenciaPostagem);

$result = $persistenciaPostagem->criaTabelaPostagem();
var_dump($result);

/*$dados = criaDadosInsercao('toby','cachorro','stringfoto');
$result = $persistenciaPostagem->inserePostagem($dados);
var_dump($result);

$dados = criaDadosInsercao('chico','Dia de spa','strinfotoo');
$result = $persistenciaPostagem->inserePostagem($dados);
var_dump($result);

$dados = criaDadosInsercao('Toby','Toby passeando','aaa');
$result = $persistenciaPostagem->inserePostagem($dados);
var_dump($result);

$result = $persistenciaPostagem->carregaPostagens();
var_dump($result);*/

require_once "../usuario/funcoes_usuario.php";
echo "../usuario/funcoes_usuario.php\n";

$persistenciaUsuario = new Mysql();
var_dump($persistenciaUsuario);

$result = $persistenciaUsuario->criaTabelaUsuarios();
var_dump($result);

/*$result = $persistenciaUsuario->insereUsuario('alice','123');
var_dump($result);

$result = $persistenciaUsuario->insereUsuario('adm','eu');
var_dump($result);

$result = $persistenciaUsuario->insereUsuario('voce','456');
var_dump($result);*/

$result = $persistenciaUsuario->carregaUsuarios();
var_dump($result);

?>
</pre>