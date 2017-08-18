<?php

class CodErroSist {
    private $idCodErr;
    private $descricao;
    
    function getIdCodErr() {
        return $this->idCodErr;
    }

    function getDescricao() {
        return $this->descricao;
    }

    function setIdCodErr($idCodErr) {
        $this->idCodErr = $idCodErr;
    }

    function setDescricao($descricao) {
        $this->descricao = $descricao;
    }


}
