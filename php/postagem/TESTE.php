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

/*$dados = criaDadosInsercao('dia bonito blablabla','cachorro','100','jpeg', 15);
$result = $persistenciaPostagem->inserePostagem($dados);
var_dump($result);

$dados = criaDadosInsercao('Hoje o tico tomou banho e fez tosa higiênica','Dia de spa','50','jpeg', 15);
$result = $persistenciaPostagem->inserePostagem($dados);
var_dump($result);

$dados = criaDadosInsercao('Primeira vez que o Toby passeia!! Ele ficou assustado no início mas depois foi se acostumando','Toby passeando','100','jpeg', 18);
$result = $persistenciaPostagem->inserePostagem($dados);
var_dump($result);*/

$result = $persistenciaPostagem->carregaUsuarioPostagem();
var_dump($result);

$result = $persistenciaPostagem->alteraTipoPostagem();
var_dump($result);

/*$result = $persistenciaPostagem->deletaPostagem();
var_dump($result);*/

/*$result = $persistenciaPostagem->deletaTabelaPostagem();
var_dump($result);*/

require_once "../usuario/funcoes_usuario.php";
echo "../usuario/funcoes_usuario.php\n";

$persistenciaUsuario = new Mysql();
var_dump($persistenciaUsuario);

$result = $persistenciaUsuario->insereUsuario('alice','123');
var_dump($result);

$result = $persistenciaUsuario->insereUsuario('adm','eu');
var_dump($result);

$result = $persistenciaUsuario->insereUsuario('voce','456');
var_dump($result);

$result = $persistenciaUsuario->alteraLoginUsuario();
var_dump($result);

$result = $persistenciaUsuario->carregaUsuario();
var_dump($result);

$result = $persistenciaUsuario->deletaUsuario();
var_dump($result);

/*$result = $persistenciaUsuario->deletaTabelaUsuario();
var_dump($result);*/

?>
</pre>