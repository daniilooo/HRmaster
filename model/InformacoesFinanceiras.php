<?php

class InfoFinanceiras{

    private $idInfoFinan;
    private $fkColaborador;
    private $banco;
    private $agencia;
    private $tipoConta;
    private $conta;

    function __construct($idInfoFinan, $fkColaborador, $banco, $agencia, $tipoConta, $conta){
        $this->setIdInfoFinan($idInfoFinan);
        $this->setFkColaborador($fkColaborador);
        $this->setBanco($banco);
        $this->setAgencia($agencia);
        $this->setTipoConta($tipoConta);
        $this->setConta($conta);
    }

    function setIdInfoFinan($idInfoFinan){
        $this->idInfoFinan = $idInfoFinan;
    }

    function setFkColaborador($fkColaborador){
        $this->fkColaborador = $fkColaborador;
    }

    function setBanco($banco){
        $this->banco = $banco;
    }

    function setAgencia($agencia){
        $this->agencia = $agencia;
    }

    function setTipoConta($tipoConta){
        $this->tipoConta = $tipoConta;
    }

    function setConta($conta){
        $this->conta = $conta;
    }

    function getIdInfoFinan(){
        return $this->idInfoFinan;
    }

    function getFkColaborador(){
        return $this->fkColaborador;
    }

    function getBanco(){
        return $this->banco;
    }
    
    function getAgencia(){
        return $this->agencia;
    }

    function getTipoConta(){
        return $this->tipoConta;
    }
    
    function getConta(){
        return $this->conta;
    }

    function __toString(){
        return
            "<br>ID da info financeira: ".$this->getIdInfoFinan()
            ."<br>FK do colaborador: ".$this->getFkColaborador()
            ."<br>Banco: ".$this->getBanco()
            ."<br>Tipo da conta: ".$this->getTipoConta()
            ."<br>Conta: ".$this->getConta()."<br>";
    }


}

?>