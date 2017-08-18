<?php
$root = $_SERVER['DOCUMENT_ROOT'];
require_once $root.'/Ultilitarios.php';
require_once $root.'/controll/Controller.php';

require_once Ultilitarios::getCaminhoPastaPrincipal().'/modell/classesDao/UsuarioDao.php';
require_once Ultilitarios::getCaminhoPastaPrincipal().'/especial/ConexaoBD.php';


fazerLoginAdmin();

function fazerLoginAdmin(){
   $matricula = $_POST['matricula'];
   $senhaPOST = $_POST['senha'];
   
   $usuarioDao = new UsuarioDao();
   $usuarioBanco = $usuarioDao->getUsuarioByMatricula($matricula);

   if($usuarioBanco==NULL || $senhaPOST!=$usuarioBanco['senha']){
      redirecionaParaLogin('usuario_senha_incorretos');
   }else{
      if($usuarioBanco['ativo']==0){
         redirecionaParaLogin("nao_ativo");
         return;
      }
      session_start();
      $_SESSION['matricula'] = $usuarioBanco['matricula'];
      $_SESSION['nome'] = $usuarioBanco['nome'];
      header("Location: /index.php");
   }
}

function redirecionaParaLogin($erro){
    header("Location: /login.php?erro=$erro");
}