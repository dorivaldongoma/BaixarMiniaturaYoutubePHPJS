<?php
if(isset($_POST['botao']) && $_POST['botao'] = "Baixar Miniatura"){
    $imgUrl = $_POST['imgurl'];
    $imagem_nome = "miniatura-".date('d-m-Y-H-i-s').".jpg";
    if(!@copy($imgUrl, 'img/'.$imagem_nome)){
        $erros = error_get_last();
        echo "Erro ao copiar: ".$erros['type'];
        echo "<br />\n".$erros['message'];
    }else{
        echo "Miniatura salva com sucesso";
    }
}
?>