  
<?php
interface PersistePostagem {
    function criaTabelaPostagem();
    /*function inserePostagem($dados);
    function carregaUsuarioPostagem();*/
}

function criaDadosInsercao($titulo, $legenda, $img) {
    $dados = array();
    $dados['titulo'] = $titulo;
    $dados['legenda'] = $legenda;
    $dados['img'] = $img;
    return $dados;
}
?>