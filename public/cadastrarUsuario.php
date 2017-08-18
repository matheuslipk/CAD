<?php
$root = $_SERVER['DOCUMENT_ROOT'];
require_once $root.'/Ultilitarios.php';
require_once Ultilitarios::getCaminhoPastaPrincipal().'/especial/Pagina.php';

   ?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <title>Faça seu login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css">
    <script src="/bootstrap/js/jquery-3.1.1.min.js"></script>
    <script src="/bootstrap/js/bootstrap.min.js"></script>
    <style>
       .container{
          margin-top: 10px;
       }
       body{
          background: #ccc;
       }
    </style>
</head>
<body>
<div class="container">
   <h2>Solicitação de cadastro</h2>
      <div class="row">
         <form method="post" action="/controll/logicaCadastroUsuario.php">
            <div class="form-group col-sm-6">
               <label>Nome Completo *</label>
               <input name="nome" class="form-control">
            </div>
            
            <div class="form-group col-sm-6">
               <label>Matrícula *</label>
               <input name="matricula" class="form-control" type="number">
            </div>
            
            <div class="form-group col-sm-6">
               <label>Email</label>
               <input name="email" type="email" class="form-control">
            </div>
            
            <div class="form-group col-sm-6">
               <label>Sexo *</label>
               <select class="form-control" name="sexo">
                  <option value="M">Masculino</option>
                  <option value="F">Feminino</option>
               </select>
            </div>
                                    
            <div class="form-group col-sm-6">
               <label>Telefone</label>
               <input name="telefone" type="tel" class="form-control">
            </div>
            
            <div class="form-group col-sm-6">
               <label>Senha</label>
               <input name="senha" type="password" class="form-control">
            </div>

            <div class="form-group col-sm-6">
               <button type="submit" class="btn btn-primary">Cadastrar</button><br><br>
               <a href="/login.php"><button type="button" class="btn btn-danger">Voltar</button></a>
            </div>
         </form>
      </div>
   </div>
</body>