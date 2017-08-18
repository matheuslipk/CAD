<?php

class Admin {
   
    private $idAdmin;
    private $nick;
    private $nome;
    private $email;
    private $senha;
    
    function getIdAdmin() {
        return $this->idAdmin;
    }

    function getNick() {
        return $this->nick;
    }

    function getNome() {
        return $this->nome;
    }

    function getEmail() {
        return $this->email;
    }

    function getSenha() {
        return $this->senha;
    }

    function setIdAdmin($idAdmin) {
        $this->idAdmin = $idAdmin;
    }

    function setNick($nick) {
        $this->nick = $nick;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setEmail($email) {
        $this->email = $email;
    }

    function setSenha($senha) {
        $this->senha = $senha;
    }


   
}
