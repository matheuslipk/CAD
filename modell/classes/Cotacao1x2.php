<?php

class Cotacao1x2 {
   private $idJogo;
   private $cot1;
   private $cotx;
   private $cot2;
    
   public function getIdJogo(){
      return $this->idJogo;
   }
   
   public function getCot1(){
      return $this->cot1;
   }
   
   public function getCotx(){
      return $this->cotx;
   }
   
   public function getCot2(){
      return $this->cot2;
   }
   
   public function setIdJogo($idJogo){
      $this->idJogo = $idJogo;
   }
   
   public function setCot1($cot1){
      $this->cot1 = $cot1;
   }
   
   public function setCotx($cotx){
      $this->cotx = $cotx;
   }
   
   public function setCot2($cot2){
      $this->cot2 = $cot2;
   }
    
}
