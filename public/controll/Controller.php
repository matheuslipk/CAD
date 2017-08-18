<?php

class Controller {
    public static function isUsuarioLogado(){
         if(session_status()!==2){
           session_start();
        }
        if(!isset($_SESSION['matricula'])){//Se seção não exixtir
            return FALSE;
        }else{//Se a seção existir
            return true;
        }
    }
    
    
    public static function destruirSessaoUsuario(){
        unset($_SESSION['matricula']);
        unset($_SESSION['nome']);
        session_destroy();
    }
        
}
