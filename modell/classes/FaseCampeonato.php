<?php


class FaseCampeonato {
    private $idCampeonato;
    private $faseCampeonato;
    
    public function getIdCampeonato() {
        return $this->idCampeonato;
    }
    
    public function getFaseCampeonato() {
        return $this->faseCampeonato;
    }
    
    public function setIdCampeonato($idCampeonato) {
        $this->idCampeonato = $idCampeonato;
    }
    
    public function setFaseCampeonato($faseCampeonato) {
        $this->faseCampeonato = $faseCampeonato;
    }
}
