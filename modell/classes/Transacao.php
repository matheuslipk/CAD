<?php

class Transacao {
    private $idTransacao;
    private $idResp;
    private $idUser;
    private $idTipoTran;
    private $valor;
    private $descricao;
    private $dataHora;
    
    public function getIdTransacao(){
        return $this->idTransacao;
    }
    
    public function getIdResp(){
        return $this->idTransacao;
    }
    
    public function getIdUser(){
        return $this->idTransacao;
    }
    
    public function getTipoTran(){
        return $this->idTransacao;
    }
    
    public function getValor(){
        return $this->idTransacao;
    }
    
    public function getDescricao(){
        return $this->idTransacao;
    }
    
    public function getDataHora(){
        return $this->idTransacao;
    }
    
    //setters
    public function setIdTransacao($idTransacao){
        $this->idTransacao = $idTransacao;
    }
    
    public function setIdResp($idResp){
        $this->idResp = $idResp;
    }
    
    public function setIdUser($idUser){
        $this->idUser = $idUser;
    }
    
    public function setTipoTran($tipoTran){
        $this->idTipoTran = $tipoTran;
    }
    
    public function setValor($valor){
        $this->valor = $valor;
    }
    
    public function setDescricao($descricao){
        $this->descricao = $descricao;
    }
    
    public function setDataHora($dataHora){
        $this->dataHora = $dataHora;
    }
}