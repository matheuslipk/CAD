<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Responsavel
 *
 * @author root
 */
class Responsavel {
    private $idResponsavel;
    private $nick;
    private $senha;
    private $saldoResp;
    private $limite;
    
    function getIdResponsavel() {
        return $this->idResponsavel;
    }

    function getNick() {
        return $this->nick;
    }

    function getSenha() {
        return $this->senha;
    }

    function getSaldoResp() {
        return $this->saldoResp;
    }

    function getLimite() {
        return $this->limite;
    }

    function setIdResponsavel($idResponsavel) {
        $this->idResponsavel = $idResponsavel;
    }

    function setNick($nick) {
        $this->nick = $nick;
    }

    function setSenha($senha) {
        $this->senha = $senha;
    }

    function setSaldoResp($saldoResp) {
        $this->saldoResp = $saldoResp;
    }

    function setLimite($limite) {
        $this->limite = $limite;
    }


}
