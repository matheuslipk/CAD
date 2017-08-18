<?php

class Jogo {
    private $idJogo;
    private $idCampeonato;
    private $faseCampeonato;
    private $idTime1;
    private $nomeTime1;
    private $idTime2;
    private $nomeTime2;
    private $golsTime1;
    private $golsTime2;
    private $data;
    private $finalizado;
    
   public function getFinalizado(){
      return $this->finalizado;
   }

   public function getIdJogo(){
      return $this->idJogo;
   }
    
    public function getData(){
        return $this->data;
    }
    
    public function getGolsTime1(){
        return $this->golsTime1;
    }
    
    public function getGolsTime2(){
        return $this->golsTime2;
    }
    
    public function getIdCampeonato(){
        return $this->idCampeonato;
    }
    
    public function getIdTime1(){
        return $this->idTime1;
    }
    
    public function getNomeTime1(){
        return $this->nomeTime1;
    }
    
    public function getIdTime2(){
        return $this->idTime2;
    }
    
    public function getNomeTime2(){
        return $this->nomeTime2;
    }
    
    public function getFaseCampeonato(){
        return $this->faseCampeonato;
    }
    
    public function setIdJogo($idJogo){
        $this->idJogo = $idJogo;
    }
    
    public function setData($data){
        $this->data = $data;
    }
    
    public function setGolsTime1($golTime1){
        $this->golsTime1 = $golTime1;
    }
    
    public function setGolsTime2($golTime2){
        $this->golsTime2 = $golTime2;
    }
    
    public function setIdCampeonato($idCampeonato){
        $this->idCampeonato = $idCampeonato;
    }
    
    public function setIdTime1($idTime1){
        $this->idTime1 = $idTime1;
    }
    
    public function setNomeTime1($nomeTime1){
        $this->nomeTime1 = $nomeTime1;
    }
    
    public function setIdTime2($idTime2){
        $this->idTime2 = $idTime2;
    }
    
    public function setNomeTime2($nomeTime2){
        return $this->nomeTime2 = $nomeTime2;
    }
    
    public function setFaseCampeonato($faseCampeonato){
        $this->faseCampeonato = $faseCampeonato;
    }
    
    public function setFinalizado($finalizado){
       $this->finalizado = $finalizado;
    }
}
