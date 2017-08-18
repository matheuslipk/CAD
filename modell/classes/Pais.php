<?php



/**
 * Description of Pais
 *
 * @author root
 */
class Pais {
    private $idPais;
    private $nome;
    private $sigla;
    
    function getIdPais() {
        return $this->idPais;
    }

    function getNome() {
        return $this->nome;
    }

    function getSigla() {
        return $this->sigla;
    }

    function setIdPais($idPais) {
        $this->idPais = $idPais;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setSigla($sigla) {
        $this->sigla = $sigla;
    }


}
