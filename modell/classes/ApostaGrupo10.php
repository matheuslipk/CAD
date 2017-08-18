<?php
/**
 * Description of CodErroSist
 *
 * @author matheus
 */
class ApostaGrupo10 {
    private $idAposta;
    private $idGrupo;
    private $idResponsavel;
    private $idUsuario;
    private $result1;
    private $result2;
    private $result3;
    private $result4;
    private $result5;
    private $result6;
    private $result7;
    private $result8;
    private $result9;
    private $result10;
    private $quantAcertos;
    private $valorAposta;
    private $dataHora;
    
   public function isApostaGrupo10Valida(){
      if(!is_integer($this->idGrupo)){
         return FALSE;
      }
      if($this->result1 !== '1' && $this->result1 !== 'x' && $this->result1 !== '2'){
         return FALSE;
      }
      
      if($this->result2 !== '1' && $this->result2 !== 'x' && $this->result2 !== '2'){
         return FALSE;
      }
      
      if($this->result3 !== '1' && $this->result3 !== 'x' && $this->result3 !== '2'){
         return FALSE;
      }
      
      if($this->result4 !== '1' && $this->result4 !== 'x' && $this->result4 !== '2'){
         return FALSE;
      }
      
      if($this->result5 !== '1' && $this->result5 !== 'x' && $this->result5 !== '2'){
         return FALSE;
      }
      
      if($this->result6 !== '1' && $this->result6 !== 'x' && $this->result6 !== '2'){
         return FALSE;
      }
      
      if($this->result7 !== '1' && $this->result7 !== 'x' && $this->result7 !== '2'){
         return FALSE;
      }
      
      if($this->result8 !== '1' && $this->result8 !== 'x' && $this->result8 !== '2'){
         return FALSE;
      }
      
      if($this->result9 !== '1' && $this->result9 !== 'x' && $this->result9 !== '2'){
         return FALSE;
      }
      
      if($this->result10 !== '1' && $this->result10 !== 'x' && $this->result10 !== '2'){
         return FALSE;
      }
      return true;
   }
   
   public function isApostaGrupo08Valida(){
      if(!is_integer($this->idGrupo)){
         return FALSE;
      }
      if($this->result1 !== '1' && $this->result1 !== 'x' && $this->result1 !== '2'){
         return FALSE;
      }
      
      if($this->result2 !== '1' && $this->result2 !== 'x' && $this->result2 !== '2'){
         return FALSE;
      }
      
      if($this->result3 !== '1' && $this->result3 !== 'x' && $this->result3 !== '2'){
         return FALSE;
      }
      
      if($this->result4 !== '1' && $this->result4 !== 'x' && $this->result4 !== '2'){
         return FALSE;
      }
      
      if($this->result5 !== '1' && $this->result5 !== 'x' && $this->result5 !== '2'){
         return FALSE;
      }
      
      if($this->result6 !== '1' && $this->result6 !== 'x' && $this->result6 !== '2'){
         return FALSE;
      }
      
      if($this->result7 !== '1' && $this->result7 !== 'x' && $this->result7 !== '2'){
         return FALSE;
      }
      
      if($this->result8 !== '1' && $this->result8 !== 'x' && $this->result8 !== '2'){
         return FALSE;
      }
      return true;
   }

   public function getIdAposta(){
      return $this->idAposta;
   }
    
    public function getIdGrupo(){
        return $this->idGrupo;
    }
    
    public function getIdResponsavel(){
        return $this->idResponsavel;
    }
    
    public function getIdUsuario(){
        return $this->idUsuario;
    }
    
    public function getResult1(){
        return $this->result1;
    }
    
    public function getResult2(){
        return $this->result2;
    }
    
    public function getResult3(){
        return $this->result3;
    }
    
    public function getResult4(){
        return $this->result4;
    }
    
    public function getResult5(){
        return $this->result5;
    }
    
    public function getResult6(){
        return $this->result6;
    }
    
    public function getResult7(){
        return $this->result7;
    }
    
    public function getResult8(){
        return $this->result8;
    }
    
    public function getResult9(){
        return $this->result9;
    }
    
    public function getResult10(){
        return $this->result10;
    }
    
    public function getQuantAcertos(){
        return $this->idAposta;
    }
    
    public function getValorAposta(){
        return $this->idAposta;
    }
    
    public function getDataHora(){
        return $this->idAposta;
    }
    
    public function setIdAposta(long $idAposta){
        $this->idAposta = $idAposta;
    }
    
    public function setIdGrupo(int $idGrupo){
        $this->idGrupo = $idGrupo;
    }
    
    public function setIdResponsavel(int $idResponsavel){
        $this->idResponsavel = $idResponsavel;
    }
    
    public function setIdUsuario(int $idUsuario){
        $this->idUsuario = $idUsuario;
    }
    
    public function setResult1($result1){
        $this->result1 = $result1;
    }
    
    public function setResult2($result2){
        $this->result2 = $result2;
    }
    
    public function setResult3($result3){
        $this->result3 = $result3;
    }
    
    public function setResult4($result4){
        $this->result4 = $result4;
    }
    
    public function setResult5($result5){
        $this->result5 = $result5;
    }
    
    public function setResult6($result6){
        $this->result6 = $result6;
    }
    
    public function setResult7($result7){
        $this->result7 = $result7;
    }
    
    public function setResult8($result8){
        $this->result8 = $result8;
    }
    
    public function setResult9($result9){
        $this->result9 = $result9;
    }
    
    public function setResult10($result10){
        $this->result10 = $result10;
    }
    
    public function setQuantAcertos(int $quantAcertos){
        $this->quantAcertos = $quantAcertos;
    }
    
    public function setValorAposta(double $valorAposta){
        $this->valorAposta = $valorAposta;
    }
    
    public function setDataHora($dataHora){
        $this->dataHora = $dataHora;
    }
}
