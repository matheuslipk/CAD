<?php
$root = $_SERVER['DOCUMENT_ROOT'];
require_once $root.'/Ultilitarios.php';
require_once Ultilitarios::getCaminhoPastaPrincipal().'/modell/classesDao/UsuarioDao.php';

$usuario['nome'] = $_POST['nome'];
$usuario['matricula'] = $_POST['matricula'];
$usuario['senha'] = $_POST['senha'];
$usuario['telefone'] = $_POST['telefone'];

$usuarioDao = new UsuarioDao();
$result = $usuarioDao->inserirUsuario($usuario);
if($result===true){
   header("Location: /index.php");
}
echo $result;