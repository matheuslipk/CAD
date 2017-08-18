<?php
/**
 * Description of CodErroSist
 *
 * @author matheus
 */
class Campeonato {
    private $idCampeonato;
    private $idPais;
    private $ano;
    private $nome;
    private $classe;
    
    function getIdCampeonato() {
        return $this->idCampeonato;
    }

    function getIdPais() {
        return $this->idPais;
    }

    function getAno() {
        return $this->ano;
    }

    function getNome() {
        return $this->nome;
    }

    function getClasse() {
        return $this->classe;
    }

    function setIdCampeonato($idCampeonato) {
        $this->idCampeonato = $idCampeonato;
    }

    function setIdPais($idPais) {
        $this->idPais = $idPais;
    }

    function setAno($ano) {
        $this->ano = $ano;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setClasse($classe) {
        $this->classe = $classe;
    }


}
