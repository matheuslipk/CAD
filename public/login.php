<?php
$root = $_SERVER['DOCUMENT_ROOT'];
require_once $root.'/Ultilitarios.php';
require_once Ultilitarios::getCaminhoPastaPrincipal().'/modell/classesDao/AdminDao.php';
require_once $root.'/controll/Controller.php';

?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <title>Faça seu login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css">
    <script src="/bootstrap/js/jquery-3.1.1.min.js"></script>
    <script src="/bootstrap/js/bootstrap.min.js"></script>
</head>


<body>

    <div class="container" >
        
        <div class="row">
           <div class="col-sm-3"></div>
           <div class="col-sm-6">
              <?php
              if(isset($_GET['erro'])){
                 if($_GET['erro']=='nao_ativo'){
                    ?>
                    <div class="alert alert-warning">
                       <strong>Desculpe!</strong>Sua matrícula ainda não foi validada.
                     </div>
                    <?php
                 }
                 if($_GET['erro']=='usuario_senha_incorretos'){
                    ?>
                    <div class="alert alert-danger">
                       Usuário ou senha incorretos.
                     </div>
                    <?php
                 }
              }
              ?>
           </div>
        </div>
        
        <div class="row">
           <div class="col-sm-3 col-xs-2">
              
           </div><!--Coluna esquerda do form-->
            
            <div class="col-sm-6 col-xs-8 formulario"><!--Inicio do form-->
                <form action="/controll/logicaLogin.php" method="post" autocomplete="on">                    
                    
                    <div class="row">
                       <img src="/imagens/CAD.png" class="img-responsive" alt="Cinque Terre" >
                    </div>                    

                    <div class="row">
                        <label>Matrícula do Aluno</label>
                        <input class="form-control" type="text" name="matricula" required>
                    </div>
                    
                    <div class="row">
                        <label>Senha</label>
                        <input class="form-control" type="password" name="senha" required>
                    </div>
                    
                    <p>Esqueceu a senha?<a href="#"> Clique aqui</a></p>
                    <p>Não possui cadastro? Solicite o seu<a href="/cadastrarUsuario.php"> aqui</a></p>
                                       
                    
                    <div class="row">
                        <div class="col-xs-2"></div>
                        <input class="btn btn-primary col-xs-8" type="submit" value="Entrar">
                    </div>
                </form>
            </div><!--Fim do form-->
            
            <div class="col-sm-3 col-xs-1"></div><!--Coluna direita do form-->
        </div>
        
    </div>
    
</body>
</html>