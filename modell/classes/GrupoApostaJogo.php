<?php

class GrupoApostaJogo {
    private $idGrupo;
    private $seq;
    private $idJogo;
    private $resultJogo;
    
    public function getIdGrupo(){
        return $this->idGrupo;
    }
    
    public function getSeq(){
        return $this->seq;
    }
    
    public function getIdJogo(){
        return $this->idJogo;
    }
    
    public function getResultJogo(){
        return $this->resultJogo;
    }
    
    //Setters
    public function setIdGrupo($idGrupo){
      $this->idGrupo = $idGrupo;
    }
    
    public function setSeq($seq){
      $this->seq = $seq;
    }
    
    public function setIdJogo($idJogo){
      $this->idJogo = $idJogo;
    }
    
    public function setResultJogo($resultJogo){
      $this->resultJogo = $resultJogo;
    }
}
