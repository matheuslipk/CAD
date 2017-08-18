<?php
/**
 * Description of CodErroSist
 *
 * @author matheus
 */
class EstadoPais {
    private $idEstadoPais;
    private $idPais;
    private $idEstado;
    private $nome;
    private $sigla;
    
    function getIdEstadoPais() {
        return $this->idEstadoPais;
    }

    function getIdPais() {
        return $this->idPais;
    }

    function getIdEstado() {
        return $this->idEstado;
    }

    function getNome() {
        return $this->nome;
    }

    function getSigla() {
        return $this->sigla;
    }

    function setIdEstadoPais($idEstadoPais) {
        $this->idEstadoPais = $idEstadoPais;
    }

    function setIdPais($idPais) {
        $this->idPais = $idPais;
    }

    function setIdEstado($idEstado) {
        $this->idEstado = $idEstado;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setSigla($sigla) {
        $this->sigla = $sigla;
    }


}
