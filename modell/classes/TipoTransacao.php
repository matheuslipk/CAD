<?php

class TipoTransacao {
    private $idTipoTransacao;
    private $tipoTran;
    private $descriTipoTransacao;


    public function getIdTipoTransacao(){
        return $this->idTipoTransacao;
    }
    
    public function getIipoTransacao(){
        return $this->tipoTran;
    }
    
    public function getdescriTipoTransacao(){
        return $this->descriTipoTransacao;
    }
    
    public function setIdTipoTransacao($idTipoTrans){
        return $this->idTipoTransacao = $idTipoTrans;
    }
    
    public function setIipoTransacao($tipoTransacao){
        return $this->tipoTran = $tipoTransacao;
    }
    
    public function setdescriTipoTransacao($descriTipoTransacao){
        return $this->descriTipoTransacao = $descriTipoTransacao;
    }
}
