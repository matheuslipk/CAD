<?php

class CotacaoOutras{
   private $idJogo;
   private $cot4;
   private $cot5;
   private $cot6;
   private $cot7;
    
   public function getIdJogo(){
      return $this->idJogo;
   }
   
   public function getCot4(){
      return $this->cot4;
   }
   
   public function getCot5(){
      return $this->cot5;
   }
   
   public function getCot6(){
      return $this->cot6;
   }
   
   public function getCot7(){
      return $this->cot7;
   }
   
   public function setIdJogo($idJogo){
      $this->idJogo = $idJogo;
   }
   
   public function setCot4($cot4){
      $this->cot4 = $cot4;
   }
   
   public function setCot5($cot5){
      $this->cot5 = $cot5;
   }
   
   public function setCot6($cot6){
      $this->cot6 = $cot6;
   }
   
   public function setCot7($cot7){
      $this->cot7 = $cot7;
   }
    
}
