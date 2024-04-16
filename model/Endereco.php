<?php 

class Endereco {
    private $idEndereco;
    private $fkColaborador;
    private $logradouro;
    private $numero;
    private $bairro;
    private $cidade;
    private $uf;
    private $cep;
    private $complemento;
    private $referencia;

    function __construct($idEndereco, $fkColaborador, $logradouro, $numero, $bairro, $cidade, $uf, $cep, $complemento, $referencia){
        $this->setIdEndereco($idEndereco);
        $this->setFkColaborador($fkColaborador);
        $this->setLogradouro($logradouro);
        $this->setNumero($numero);
        $this->setBairro($bairro);
        $this->setCidade($cidade);
        $this->setUf($uf);
        $this->setCep($cep);
        $this->setComplemento($complemento);
        $this->setReferencia($referencia);
    };

    function setIdEndereco($idEndereco){
        $this->idEndereco = $idEndereco;
    }

    function setFkColaborador($fkColaborador){
        $this->fkColaborador = $fkColaborador;
    }

    function setLogradouro($logradouro){
        $this->logradouro = $logradouro;
    }

    function setNumero($numero){
        $this->numero = $numero;
    }

    function setBairro($bairro){
        $this->bairro = $bairro;
    }

    function setCidade($cidade){
        $this->cidade = $cidade;
    }

    function setUf($uf){
        $this->uf = $uf;
    }

    function setCep($cep){
        $this->cep = $cep;
    }

    function setComplemento($complemento){
        $this->complemento = $complemento;
    }

    function setReferencia($referencia){
        $this->referencia = $referencia;
    }

    function getIdEndereco(){
        return $this->idEndereco;
    }

    function getFkColaborador(){
        return $this->fkColaborador;
    }

    function getLogradouro(){
        return $this->logradouro;
    }

    function getNumero(){
        return $this->numero;
    }

    function getBairro(){
        return $this->bairro;
    }

    function getCidade(){
        return $this->cidade;
    }

    function getUf(){
        return $this->uf;
    }

    function getCep(){
        return $this->cep;
    }

    function getComplemento(){
        return $this->complemento;
    }

    function getReferencia(){
        return $this->referencia;
    }

    function __toString(){
        return
        "<br>ID endereço: ".$this->getIdEndereco()
        ."<br>FK Colaborador: ".$this->getFkColaborador()
        ."<br>Logradouro: ".$this->getLogradouro()
        ."<br>Número: ".$this->getNumero()
        ."<br>Bairro: ".$this->getBairro()
        ."<br>Cidade: ".$this->getCidade()
        ."<br>UF: ".$this->getUf()
        ."<br>CEP: ".$this->getCep()
        ."<br>Complemento: ".$this->getComplemento()
        ."<br>Referencia: ".$this->getReferencia()."<br>";
    }
}

?>