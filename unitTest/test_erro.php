<?php

include_once(__DIR__ . '/../model/Erro.php');

$idErro = "1";
$erro = "Exibição do erro para teste unitário";
$dataHora = (new DateTime())->format('Y-m-d H:i:s');
$fkUsuario = "1";

if(!empty($idErro) && !empty($erro) && !empty($dataHora) && !empty($fkUsuario)){
    $erro = new Erro($idErro, $erro, $dataHora, $fkUsuario);
    echo $erro;
} else {
    if(empty($idErro)){
        echo "Preencha o ID do erro";
    }

    if(empty($erro)){
        echo "Preencha o erro";
    }

    if(empty($fkUsuario)){
        echo "Preencha o ID do usuário";
    }
}

?>