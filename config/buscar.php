<?php
// Verificar se o formulário foi submetido
if(isset($_POST['botao']) && $_POST['botao'] = "Baixar Miniatura"){
    // Atribuir a url da da miniatura à variável $imgUrl
    $imgUrl = $_POST['imgurl'];
    // Criar um novo nome baseado na data e hora atual para evitar nomes repetidos
    $imagem_nome = "miniatura-".date('d-m-Y-H-i-s').".jpg";
    // Usar a função "copy" para copiar a miniatura e enviar para a pasta "img"
    if(!@copy($imgUrl, 'img/'.$imagem_nome)){
        /* Se ouver, a função "error_get_last()" retorna o último erro ocorrido
        $erros = error_get_last();
        echo "Erro ao copiar: ".$erros['type'];
        echo "<br />\n".$erros['message']; */
        echo "Ops, algo deu errado!";
    }else{
        // Estando tudo bem, a imagem é copiada para a pasta "img"
        echo "Miniatura salva com sucesso";
    }
}
?>