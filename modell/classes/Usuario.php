<?php

class Usuario {
    private $idUsuario;
    private $nick;
    private $nome;
    private $dataNascimento;
    private $sexo;
    private $email;
    private $senha;
    private $numTelefone;
    private $saldoUser;
    
    function getIdUsuario() {
        return $this->idUsuario;
    }

    function getNick() {
        return $this->nick;
    }

    function getNome() {
        return $this->nome;
    }

    function getDataNascimento() {
        return $this->dataNascimento;
    }

    function getSexo() {
        return $this->sexo;
    }

    function getEmail() {
        return $this->email;
    }

    function getSenha() {
        return $this->senha;
    }

    function getNumTelefone() {
        return $this->numTelefone;
    }

    function getSaldoUser() {
        return $this->saldoUser;
    }

    function setIdUsuario($idUsuario) {
        $this->idUsuario = $idUsuario;
    }

    function setNick($nick) {
        $this->nick = $nick;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setDataNascimento($dataNascimento) {
        $this->dataNascimento = $dataNascimento;
    }

    function setSexo($sexo) {
        $this->sexo = $sexo;
    }

    function setEmail($email) {
        $this->email = $email;
    }

    function setSenha($senha) {
        $this->senha = $senha;
    }

    function setNumTelefone($numTelefone) {
        $this->numTelefone = $numTelefone;
    }

    function setSaldoUser($saldoUser) {
        $this->saldoUser = $saldoUser;
    }

}
