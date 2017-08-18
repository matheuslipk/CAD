<?php
$root = $_SERVER['DOCUMENT_ROOT'];
require_once $root.'/Ultilitarios.php';
require_once Ultilitarios::getCaminhoPastaPrincipal().'/especial/Pagina.php';
require_once Ultilitarios::getCaminhoPastaPrincipal().'/modell/classesDao/ApostaGrupo10Dao.php';
require_once Ultilitarios::getCaminhoPastaPrincipal().'/modell/classesDao/GrupoApostaJogoDao.php';
require_once Ultilitarios::getCaminhoPastaPrincipal()."/modell/classesDao/GrupoApostaDao.php";

class comprovanteAposta extends Pagina{
   
   public function exibirHead() {
      parent::exibirHead();
      ?>
<style>
   #tabelaComprovanteAposta{
      background: url('/imagens/logo-transparente.png') no-repeat center ;
   }
   .table{
      opacity: 0.9;
   }
</style>

      <?php
   }

   public function exibirBody() {
      parent::exibirBody();
      
      $aDao = new ApostaGrupo10Dao();
      $aposta = $aposta = $aDao->getApostaGrupo10ById($_GET['aposta']);
      
      $gaDao = new GrupoApostaJogoDao();
      $grupos = $gaDao->getGrupoApostaJogosById($aposta['idGrupo']);
      
      $grupoDao = new GrupoApostaDao();
      $g = $grupoDao->getGrupoApostasById($aposta['idGrupo']);
      
      ?>
      <div class="container">
         <div class="row">
            <div class="col-sm-6 table-responsive" id="tabelaComprovanteAposta">
               <table class="table table-condensed" border="0" style="text-align: center; font-size: 14px;">
                  <thead style="font-size: 13px">
                     <tr style="font-size: 11px">
                        <th colspan="2">Data Aposta <?php echo Ultilitarios::dataHoraFormatadaTexto($aposta['dataHora']); ?></th>
                        <th>Resultado até <?php echo Ultilitarios::dataHoraFormatadaTexto($g['dataResultAposta']); ?></th>
                     </tr>
                     <tr class="warning">
                        <th>Aposta</th>
                        <th>Responsável</th>
                        <th>Usuario</th>                        
                     </tr>
                     <tr>
                        <td><?php echo $aposta['idAposta']; ?></td>
                        <td><a><?php echo $aposta['responsavel']; ?></a></td>
                        <td><?php echo $aposta['usuario']; ?></td>
                     </tr>
                     <tr class="warning">
                        <th>Time 1</th>
                        <th>Empate</th>
                        <th>Time 2</th>
                     </tr>
                  </thead>
                  
                  <tbody>
                     <?php
                     $i=1;
                     foreach ($grupos as $grupo){
                        $teste = "result".$i;                        
                        echo "<tr>";                        
                        if($aposta[$teste]==1){
                           echo "<td class='success'>{$grupo['nomeT1']}</td>";
                        }else{
                           echo "<td>{$grupo['nomeT1']}</td>";
                        }                       
                        
                        if($aposta[$teste]=='x'){
                           echo "<td class='success'>X</td>";
                        }else{
                           echo "<td>X</td>";
                        }                        
                        
                        if($aposta[$teste]==2){
                           echo "<td class='success'>{$grupo['nomeT2']}</td>";
                        }else{
                           echo "<td>{$grupo['nomeT2']}</td>";
                        }                        
                        echo "</tr>";                        
                        $i++;
                     }
                     echo "<tr style='font-size: 12px; color: red'>";
                     echo "<td colspan='3'>Controle: ". Ultilitarios::getHashSha1Formatado($aposta['controle']) ."</td>";
                     echo '</tr>';
                     echo "<tr>";
                     echo "<td colspan='3'>Quantidade de acertos: ".$aposta['quantAcertos']."</td>";
                     echo "<tr>";
                     ?>
                  </tbody>
               </table>
            </div>
         </div>
      </div>

      <?php
   }
}
$c = new comprovanteAposta();
$c->setTituloPagina('Comprovante');
$c->display();