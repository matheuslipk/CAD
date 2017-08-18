<?php
$root = $_SERVER['DOCUMENT_ROOT'];
require_once $root.'/Ultilitarios.php';
require_once Ultilitarios::getCaminhoPastaPrincipal().'/especial/Pagina.php';
require_once Ultilitarios::getCaminhoPastaPrincipal().'/modell/classesDao/Aposta1x2Dao.php';

class ultimasApostas extends Pagina{
   public function exibirBody() {
      if(Controller::isResponsavelLogado()){
         $this->exibirPaginaResp();
      }elseif (Controller::isUsuario()) {
         $this->exibirPaginaAdmin();
      }
   }
   
   public function exibirPaginaResp(){
      $aDao = new Aposta1x2Dao();
      $idResp = $_SESSION['nickResponsavel'];
      $apostas = $aDao->getUltimasApostasUsuario1x2ByResp($idResp);
      parent::exibirBody();
      ?>
      <div class="container">
         <div class="row" >
            <h3>Últimas apostas</h3>
            <div class="col-sm-12 table-responsive" style="max-height: 300px; overflow-y: auto;">
               
               <table class="table"  style='font-size: 12px'>
                  <thead>
                     <tr>
                        <th>Aposta</th>
                        <th>Usuário</th>
                        <th>Valor Aposta</th>
                        <th>Prêmio</th>
                        <th>Data Aposta</th>
                     </tr>
                  </thead>
                  <tbody>
                  <?php
                  if($apostas !== NULL){
                     foreach ($apostas as $aposta){
                        $data = Ultilitarios::dataHoraFormatadaTexto($aposta['dataAposta']);
                        echo '<tr>';
                        echo "<td><a href='/apostas/comprovanteAposta1x2.php?aposta={$aposta['idAposta']}'> {$aposta['idAposta']}</a></td>";                     
                        echo "<td>{$aposta['usuario']}</td>";
                        echo "<td>{$aposta['valorApostado']}</td>";
                        echo "<td>{$aposta['premiacao']}</td>";
                        echo "<td>{$data}</td>";
                        echo '</tr>';
                     }
                  }
                  
                  ?>
                  </tbody>
               </table>
            
            </div>
         </div>
      </div>

      <?php
   }
   
   public function exibirPaginaAdmin(){
      $aDao = new Aposta1x2Dao();
      $apostas = $aDao->getUltimasApostasUsuario1x2();
      parent::exibirBody();
      ?>
      <div class="container">
         <div class="row" >
            <h3>Últimas apostas</h3>
            <div class="col-sm-12 table-responsive" style="max-height: 300px; overflow-y: auto;">
               
               <table class="table"  style='font-size: 12px'>
                  <thead>
                     <tr>
                        <th>Aposta</th>
                        <th>Usuário</th>
                        <th>Cota</th>
                        <th>Valor Aposta</th>
                        <th>Prêmio</th>
                        <th>Data Aposta</th>
                     </tr>
                  </thead>
                  <tbody>
                  <?php
                  if($apostas !== NULL){
                     foreach ($apostas as $aposta){
                        $data = Ultilitarios::dataHoraFormatadaTexto($aposta['dataAposta']);
                        echo '<tr>';
                        echo "<td><a href='/apostas/comprovanteAposta1x2.php?aposta={$aposta['idAposta']}'> {$aposta['idAposta']}</a></td>";                     
                        echo "<td>{$aposta['usuario']}</td>";
                        echo "<td>{$aposta['cotacaoTotal']}</td>";
                        echo "<td>{$aposta['valorApostado']}</td>";
                        echo "<td>{$aposta['premiacao']}</td>";
                        echo "<td>{$data}</td>";
                        echo '</tr>';
                     }
                  }
                  
                  ?>
                  </tbody>
               </table>
            
            </div>
         </div>
      </div>

      <?php
   }
}

$u = new ultimasApostas();
$u->setTituloPagina('Ultimas Apostas');
$u->display();