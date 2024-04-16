<?php

class Colaborador {
    private $idColaborador;
    private $nome;
    private $dataNascimento;
    private $genero;
    private $estadoCivil;
    private $rg;
    private $cpf;
    private $pis;
    private $tituloEleitor;
    private $reservista;
    private $nacionalidade;
    private $email;
    
    function __construct($idColaborador, $nome, $dataNascimento, $genero, $estadoCivil, $rg, $cpf, $pis, $tituloEleitor, $reservista, $nacionalidade, $email){
        $this->setIdColaborador($idColaborador);
        $this->setNome($nome);
        $this->setDataNascimento($dataNascimento);
        $this->setGenero($genero);
        $this->setEstadoCivil($estadoCivil);
        $this->setRg($rg);
        $this->setCpf($cpf);
        $this->setPis($pis);
        $this->setTituloEleitor($tituloEleitor);
        $this->setReservista($reservista);
        $this->setNacionalidade($nacionalidade);
        $this->setEmail($email);
    }

    function setIdColaborador($idColaborador){
        $this->idColaborador = $idColaborador;
    }

    function setNome($nome){
        $this->nome = $nome;
    }

    function setDataNascimento($dataNascimento){
        $this->dataNascimento = $dataNascimento;
    }

    function setGenero($genero){
        $this->genero = $genero;
    }

    function setEstadoCivil($estadoCivil){
        $this->estadoCivil = $estadoCivil;
    }

    function setRg($rg){
        $this->rg = $rg;
    }

    function setCpf($cpf){
        $this->cpf = $cpf;
    }

    function setPis($pis){
        $this->pis = $pis;
    }

    function setTituloEleitor($tituloEleitor){
        $this->tituloEleitor = $tituloEleitor;
    }

    function setReservista($reservista){
        $this->reservista = $reservista;
    }

    function setNacionalidade($nacionalidade){
        $this->nacionalidade = $nacionalidade;
    }

    function setEmail($email){
        $this->email = $email;
    }

    function getIdColaborador(){
        return $this->idColaborador;
    }

    function getNome(){
        return $this->nome;
    }

    function getDataNascimento(){
        return $this->dataNascimento;
    }

    function getGenero(){
        return $this->genero;
    }

    function getEstadoCivil(){
        return $this->estadoCivil;
    }

    function getRg(){
        return $this->rg;
    }

    function getCpf(){
        return $this->cpf;
    }

    function getPis(){
        return $this->pis;
    }

    function getTituloEleitor(){
        return $this->tituloEleitor;
    }

    function getReservista(){
        return $this->reservista;
    }

    function getNacionalidade(){
        return $this->nacionalidade;
    }

    function getEmail(){
        return $this->email;
    }

    function __toString(){
        return 
        "<br>ID Colaborador: ".$this->getIdColaborador()
        ."<br>Nome completo: ".$this->getNome()
        ."<br>Data de nascimento: ".$this->getDataNascimento()
        ."<br>Gênero: ".$this->getGenero()
        ."<br>Estado civil: ".$this->getEstadoCivil()
        ."<br>RG: ".$this->getRg()
        ."<br>CPF: ".$this->getCpf()
        ."<br>PIS/PASEP: ".$this->getPis()
        ."<br>Título de eleitor: ".$this->getTituloEleitor()
        ."<br>Reservista: ".$this->getReservista()
        ."<br>Nacionalidade: ".$this->getNacionalidade()
        ."<br>Email: ".$this->getEmail()."<br>";
    }
}

?>