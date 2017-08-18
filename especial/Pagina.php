<?php
$root = $_SERVER['DOCUMENT_ROOT'];
require_once $root.'/Ultilitarios.php';
require_once Ultilitarios::getCaminhoPastaPrincipal().'/modell/classesDao/AdminDao.php';
require_once $root."/controll/Controller.php";

class Pagina {
    private $tituloPagina;
    private $usuarioLogado=false;
    private $respLogado=false;


   public function display() {
      $this->usuarioLogado = Controller::isUsuarioLogado();
      if(!$this->usuarioLogado){
         header("Location: /login.php?erro=nao_logado");        
      }
      
      echo "<!DOCTYPE html>\n";
      echo "<html lang='pt-br'>\n";
      echo "<head>\n";
      $this->exibirHead();
      echo "</head>\n";
      echo "<body style='background: #CCC'>\n";
      $this->exibirBody();
      $this->exibirRodape();
      echo "</body>\n";      
      echo '</html>';
   }

      public function setTituloPagina($titulo){
        $this->tituloPagina = $titulo;
    }

    public function exibirHead(){
        ?>
        <?php $this->exibirTituloPagina();  ?>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css">
        <script src="/bootstrap/js/jquery-3.1.1.min.js"></script>
        <script src="/bootstrap/js/bootstrap.min.js"></script>
        <?php
    }
    
   public function exibirBody(){
      if($this->usuarioLogado){
         $this->exibirBarraNavAdmin();
      }
   }
   
   public function getResponsavelLogado(){
      return $this->respLogado;
   }
   

   private function exibirBarraNavAdmin(){
        ?>
    <nav class="navbar navbar-inverse">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>                        
          </button>
          <a class="navbar-brand" href="/">CAD</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
          <ul class="nav navbar-nav">
            <li class="dropdown">
              <a class="dropdown-toggle" data-toggle="dropdown" href="#">Eventos<span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="/lista_eventos.php">Visualizar proximos eventos</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a class="dropdown-toggle" data-toggle="dropdown" href="#">Notícias<span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="/">Ultimas notícias</a></li>
              </ul>
            </li>
            
            
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#"> <?php echo $_SESSION['nome']; ?><span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li><a>Minha conta</a></li>
                    <li><a href="<?php echo Ultilitarios::getLinkLogout(); ?>">Sair</a></li>
                </ul>
                
            </li>
          </ul>
        </div>
      </div>
    </nav>
        
    <?php
    }
    
    public function exibirRodape(){
        ?>
        <footer class="footer navbar-text">
            <div class="container">
                <div class="col-sm-2"></div>
                <div class="col-sm-8">
                <p class="text-muted text-center">
                    <!--m47esportes Copyright © 2017 <br>-->
                    IP <?php echo $_SERVER['REMOTE_ADDR']; ?>

                </p>
                </div>
            </div>            
        </footer>
        
        <?php
    }

        //métodos privados
    private function exibirTituloPagina(){
        echo "<title>{$this->tituloPagina}</title>\n";
    }

}
