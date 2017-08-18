<?php
$root = $_SERVER['DOCUMENT_ROOT'];
require_once $root.'/Ultilitarios.php';
require_once Ultilitarios::getCaminhoPastaPrincipal().'/especial/Pagina.php';
require_once Ultilitarios::getCaminhoPastaPrincipal().'/modell/classesDao/ApostaGrupo10Dao.php';

class ultimasApostas extends Pagina{
   public function exibirBody() {
      if(Controller::isResponsavelLogado()){
         $this->exibirPaginaResp();
      }elseif (Controller::isUsuario()) {
         $this->exibirPaginaAdmin();
      }
   }
   
   public function exibirPaginaResp(){
      $aDao = new ApostaGrupo10Dao();
      $idResp = $_SESSION['idResponsavel'];
      $apostas = $aDao->getApostaGrupo10ByResp($idResp);
      parent::exibirBody();
      ?>
      <div class="container">
         <div class="row">
            <h3>Suas últimas apostas</h3>
            <div class="col-sm-12 table-responsive" style="max-height: 300px; overflow-y: auto;">
               
               <table class="table" style="font-size: 12px">
                  <thead>
                     <tr>
                        <th>Aposta</th>                        
                        <th>Usuário</th>
                        <th>Acertos</th>
                        <th>Data Aposta</th>
                     </tr>
                  </thead>
                  <tbody>
                  <?php
                  if($apostas !== NULL){
                     foreach ($apostas as $aposta){
                        $data = Ultilitarios::dataFormatadaHtml($aposta['dataHora']);
                        echo '<tr>';
                        echo "<td><a href='/apostas/comprovanteAposta.php?aposta={$aposta['idAposta']}'> {$aposta['idAposta']}</a></td>";                     
                        echo "<td>{$aposta['nomeUsuario']}</td>";
                        echo "<td>{$aposta['quantAcertos']}</td>";
                        echo "<td>".Ultilitarios::dataHoraFormatadaTexto($data)."</td>";
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
      $aDao = new ApostaGrupo10Dao();
      $apostas = $aDao->getTodasApostaGrupo10();
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
                        <th>Responsável</th>
                        <th>Usuário</th>
                        <th>Acertos</th>
                        <th>Data Aposta</th>
                     </tr>
                  </thead>
                  <tbody>
                  <?php
                  if($apostas !== NULL){
                     foreach ($apostas as $aposta){
                        $data = Ultilitarios::dataHoraFormatadaTexto($aposta['dataHora']);
                        echo '<tr>';
                        echo "<td><a href='/apostas/comprovanteAposta.php?aposta={$aposta['idAposta']}'> {$aposta['idAposta']}</a></td>";                     
                        echo "<td>{$aposta['responsavel']}</td>";
                        echo "<td>{$aposta['nomeUsuario']}</td>";
                        echo "<td>{$aposta['quantAcertos']}</td>";
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