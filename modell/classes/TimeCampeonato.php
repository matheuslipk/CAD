<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of TimeCampeonato
 *
 * @author root
 */
class TimeCampeonato {
    private $idCampeonato;
    private $idTime;
    
    function getIdCampeonato() {
        return $this->idCampeonato;
    }

    function getIdTime() {
        return $this->idTime;
    }

    function setIdCampeonato($idCampeonato) {
        $this->idCampeonato = $idCampeonato;
    }

    function setIdTime($idTime) {
        $this->idTime = $idTime;
    }


}
