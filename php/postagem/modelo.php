  
<?php
interface PersistePostagem {
    function criaTabelaPostagem();
    function inserePostagem($dados);
    function carregaUsuarioPostagem();
}

function criaDadosInsercao($legenda, $titulo_imagem, $tamanho_imagem, $tipo_imagem, $usuarios_postagem) {
    $dados = array();
    $dados['legenda'] = $legenda;
    $dados['titulo_imagem'] = $titulo_imagem;
    $dados['tamanho_imagem'] = $tamanho_imagem;
    $dados['tipo_imagem'] = $tipo_imagem;
    $dados['usuarios_postagem'] = $usuarios_postagem;
    return $dados;
}
?>