<?php
$root = $_SERVER['DOCUMENT_ROOT'];
require_once $root.'/Ultilitarios.php';
require_once $root.'/controll/Controller.php';
session_start();
Controller::destruirSessaoUsuario();
header("Location: ".Ultilitarios::getLinkLogin());