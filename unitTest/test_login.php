<?php

include_once(__DIR__ . '/../model/Login.php');

$nomeDeUsuario = "Danilo";
$senhaDoUsuario = "123456";

if(!empty($nomeDeUsuario) && !empty($senhaDoUsuario)){
    $login = new Login($nomeDeUsuario, $senhaDoUsuario);
    echo $login; 
} else {
    if(empty($nomeDeUsuario)){
        echo "Preencha o nome do usuário<br>";
    }

    if(empty($senhaDoUsuario)){
        echo "Preencha a senha do usuário";
    }
}

?>