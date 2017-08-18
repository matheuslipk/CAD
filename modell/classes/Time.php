<?php

class Time {
    private $idTime;
    private $nome;
    private $idPais;
    private $idEstado;
    private $sigla;
    
    public function getIdEstado(){
        return $this->idEstado;
    }
    
    public function getIdPais(){
        return $this->idPais;
    }
    
    public function getIdTime(){
        return $this->idTime;
    }
    
    public function getNome(){
        return $this->nome;
    }
    
    public function getSigla(){
        return $this->sigla;
    }
    
    public function setIdEstado($idEstado){
        $this->idEstado = $idEstado;
    }
    
    public function setIdPais($idPais){
        $this->idPais = $idPais;
    }
    
    public function setIdTime($idTime){
        $this->idTime = $idTime;
    }
    
    public function setNome($nome){
        $this->nome = $nome;
    }
    
    public function setSigla($sigla){
        $this->sigla = $sigla;
    }
}
