<?php
$root = $_SERVER['DOCUMENT_ROOT'];
require_once $root.'/Ultilitarios.php';
require_once Ultilitarios::getCaminhoPastaPrincipal().'/especial/Pagina.php';
require_once Ultilitarios::getCaminhoPastaPrincipal().'/modell/classesDao/ResponsavelDao.php';
require_once Ultilitarios::getCaminhoPastaPrincipal().'/modell/classesDao/Aposta1x2Dao.php';

class comprovanteAposta extends Pagina{
   
      public function exibirBody() {
      parent::exibirBody();
      
      $aDao = new Aposta1x2Dao();
      $palpites = $aDao->getApostas1x2ById($_GET['aposta']);
      $apostaUsuario = $aDao->getApostasUsuario1x2ById($_GET['aposta']);
      $respDao = new ResponsavelDao();
      $resp = $respDao->getResponsavelByNick($apostaUsuario['nickResponsavel']);
      
//      var_dump($palpites);
//      var_dump($apostaUsuario);
      
      ?>
      <div class="container">
         <div class="row">
            <div class="col-sm-6 table-responsive" id="tabelaComprovanteAposta">
               <table class="" border="0"  style="font-size: 12px">
                  <thead>
                     <tr>
                        <?php echo "<th colspan='2'>Data Aposta  ".Ultilitarios::dataHoraFormatadaTexto($apostaUsuario['dataAposta']).'<br>';
                        echo "ID aposta: ".$apostaUsuario['idAposta']; ?></th>
                     </tr>
                     <tr>
                        <td colspan="2">
                           <?php echo "Agente: ".$apostaUsuario['nickResponsavel']."<br>";
                           echo 'Telefone: '.$resp['numTelefone']."<br>";
                           echo "Usuario: ".$apostaUsuario['usuario'].'<br>';
                           echo "------------------------------";?>
                        </td>                        
                     </tr>
                  </thead>
                  
                  <tbody>
                     <?php
                     foreach ($palpites as $palpite){
                        if($palpite['idSituacao']==1){
                           echo "<tr style='background: rgba(0,255,0,0.1)'>";
                        }elseif($palpite['idSituacao']==2){
                           echo "<tr style='background: rgba(255,0,0,0.1)'>";
                        }
                        
                        echo "<td colspan='2'>";
                        echo "<b>{$palpite['nomeT1']} x {$palpite['nomeT2']}</b><br>";
                        echo "Data Jogo: ".Ultilitarios::dataHoraFormatadaTexto($palpite['data_jogo'])."<br>";
                        printf("Cota: <b>%.2f</b> <br> Palpite: <b>%s</b><br>", $palpite['cotacao'], $palpite['palpite']);
                        
                        if($palpite['idSituacao']!=3){
                           echo $palpite['situacao']." - "; 
                           echo "Resultado: {$palpite['golsTime1']} x {$palpite['golsTime2']}<br>";
                        }
                        echo "------------------------------";
                        echo "</td>";
                        echo '</tr>';
                     }
                     echo "<tr>";
                     printf("<td colspan='2'>Cota Total: %.2f <br>", $apostaUsuario['cotacaoTotal']);
                     printf("Valor Apostado: R$ %.2f <br> <b>Premio total: %.2f</b></td>", $apostaUsuario['valorApostado'], $apostaUsuario['premiacao']);
                     echo "</tr>";
                     
                     
                     ?>
                  </tbody>
               </table>
               ------------------------------<br>
               ------------------------------<br>
               ------------------------------<br>
            </div>
         </div>
      </div>

      <?php
   }
}
$c = new comprovanteAposta();
$c->setTituloPagina('Comprovante');
$c->display();