<?php

class GrupoAposta {
    private $idGrupo;
    private $dataInicioAposta;
    private $dataLimiteAposta;
    private $dataResultAposta;
    private $descricao;
    
    public function getIdGrupo(){
        return $this->idGrupo;
    }
    
    public function getDataInicioAposta(){
        return $this->dataInicioAposta;
    }
    
    public function getDataLimiteAposta(){
        return $this->dataLimiteAposta;
    }
    
    public function getDataResultAposta(){
        return $this->dataResultAposta;
    }
    
    public function getDescricao(){
        return $this->descricao;
    }
    
    //setters
    public function setIdGrupo($idGrupo){
        $this->idGrupo = $idGrupo;
    }
    
    public function setDataInicioAposta($dataInicioAposta){
        $this->dataInicioAposta = $dataInicioAposta;
    }
    
    public function setDataLimiteAposta($dataLimiteAposta){
        $this->dataLimiteAposta = $dataLimiteAposta;
    }
    
    public function setDataResultAposta($dataResultAposta){
        $this->dataResultAposta = $dataResultAposta;
    }
    
    public function setDescricao($descricao){
        $this->descricao = $descricao;
    }
}
