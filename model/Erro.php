<?php

class Erro{
    private $idErro;
    private $erro;
    private $dataHora;
    private $fkUsuario;

    function __construct($idErro, $erro, $dataHora, $fkUsuario){
        $this->setIdErro($idErro);
        $this->setErro($erro);
        $this->setDataHora($dataHora);
        $this->setFkUsuario($fkUsuario);
    }

    function setIdErro($idErro){
        $this->idErro = $idErro;
    }

    function setErro($erro){
        $this->erro = $erro;
    }

    function setDataHora($dataHora){
        $this->dataHora = $dataHora;
    }

    function setFkUsuario($fkUsuario){
        $this->fkUsuario = $fkUsuario;
    }

    function getIdErro(){
        return $this->idErro;
    }

    function getErro(){
        return $this->erro;
    }

    function getDataHora(){
        return $this->dataHora;
    }

    function getFkUsuario(){
        return $this->fkUsuario;
    }

    function __toString(){

        if($this->getDataHora() != null){
            $data = (new DateTime($this->getDataHora()))->format('d/m/Y');
            $hora = (new DateTime($this->getDataHora()))->format('H:i:s');
        }

        return
        "<br>ID erro: ".$this->getIdErro().
        "<br>Erro: ".$this->getErro().
        "<br>Data: ".$data.
        "<br>Hora: ".$hora.
        "<br>ID do usuario: ".$this->getFkUsuario()."<br>";
    }

}

?>