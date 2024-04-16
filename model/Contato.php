<?php

class Contato{

    private $idContato;
    private $fkColaborador;
    private $tipoContato;
    private $numero;
    private $nome;

    function __construct($idContato, $fkColaborador, $tipoContato, $numero, $nome){
        $this->setIdContato($idContato);
        $this->setFkColaborador($fkColaborador);
        $this->setTipoContato($tipoContato);
        $this->setNumero($numero);
        $this->setNome($nome);
    }

    function setIdContato($idContato){
        $this->idContato = $idContato;
    }

    function setFkColaborador($fkColaborador){
        $this->fkColaborador = $fkColaborador;
    }

    function setTipoContato($tipoContato){
        $this->tipoContato = $tipoContato;
    }

    function setNumero($numero){
        $this->numero = $numero;
    }

    function setNome($nome){
        $this->nome = $nome;
    }

    function getIdCOntato(){
        return $this->idContato;
    }

    function getFkColaborador(){
        return $this->fkColaborador;
    }

    function getTipoContato(){
        return $this->tipoContato;
    }

    function getNumero(){
        return $this->numero;
    }

    function getNome(){
        return $this->nome;
    }

    function __toString(){
        return 
        "<br>ID contato: ".$this->getIdCOntato()
        ."<br>FK colaborador: ".$this->getFkColaborador()
        ."<br>Tipo do contato: ".$this->getTipoContato()
        ."<br>Numero: ".$this->getNumero()
        ."<br>Nome: ".$this->getNome()."<br>";
    }

}

?>