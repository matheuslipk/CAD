<?php
$root = $_SERVER['DOCUMENT_ROOT'];
require_once $root.'/Ultilitarios.php';
require_once Ultilitarios::getCaminhoPastaPrincipal()."/modell/classesDao/CotacaoOutrasDao.php";
require_once Ultilitarios::getCaminhoPastaPrincipal()."/modell/classesDao/Cotacao1x2Dao.php";
require_once Ultilitarios::getCaminhoPastaPrincipal()."/modell/classesDao/JogoDao.php";
require_once Ultilitarios::getCaminhoPastaPrincipal()."/modell/classesDao/TimeDao.php";
require_once Ultilitarios::getCaminhoPastaPrincipal()."/especial/Pagina.php";

function exibirTabelaJogos($jogos){
   $tDao1 = new TimeDao();
   ?>
   <div class="table-responsive">
      <table style="text-align-last: center" class="table table-condensed" border="0">
         <thead>
            <tr>
               <th colspan="2">Mandante</th>
               <th colspan="1">vs</th>
               <th colspan="2">Visitante</th>
            </tr>
         </thead>
         <tbody>            
            <?php
            foreach ($jogos as $jogo){
               $link = $tDao1->getLinkLogoByNome($jogo['nomeT1']);
               $link2 = $tDao1->getLinkLogoByNome($jogo['nomeT2']);
               ?>
               <tr style='font-size: 25px'>
               <td class='td-nome-time'><span><img src='<?php echo "{$link["linkLogo"]}"?>' width='25'></span><?php echo "{$jogo['nomeT1']}"?></td>
               <td><?php echo"{$jogo['golsTime1']}"?></td>
               <td>X</td>
               <td><?php echo"{$jogo['golsTime2']}"?></td>
               <td class='td-nome-time'><span><img src='<?php echo "{$link2["linkLogo"]}"?>' width='25'></span><?php echo"{$jogo['nomeT2']}"?></td>              
               </tr>
               <?php
            }
            ?>
         </tbody>
      </table>
   </div>
   <?php
}

function exibirTabelaJogos1x2($jogos){
   ?>   
      <?php
      if(count($jogos)===0){
         return;
      }
      echo "<div class='row'>";
      $nomeCamp = $jogos[0]['nomeCampeonato'];
      $idCamp = $jogos[0]['idCampeonato'];
      
      $cotDao = new Cotacao1x2Dao();      
      echo "<button class='btn btn-primary' data-toggle='collapse' data-target='#{$idCamp}' style='width: 100%; text-align: left'>".$nomeCamp."</button>";
      echo '</div>';
      echo "<div class='collapse in' id='{$idCamp}'>";
      echo "<div class='row'>";
      echo "<div class='col-xs-6'></div>";
         echo "<div class='col-xs-6'>"
            . "<span style='padding: 4px'>Casa</span><span style='padding: 1px'>Empate</span><span style='padding: 1px'>Fora</span>"
            . "</div>";
      echo "</div>";
      foreach ($jogos as $jogo){
         $cotacao = $cotDao->getCotacao1x2ById($jogo['idJogo']);
         $cotOutrasDao = new CotacaoOutrasDao();
         if($cotacao['idJogo']===NULL) continue;
      ?>
      <div class="row" style="margin: 2px"  id="<?php echo $jogo['idJogo'];?>">
         <div class="col-xs-6">
            <?php echo "<b>{$jogo['nomeT1']} x {$jogo['nomeT2']}</b> <br> ".Ultilitarios::dataHoraFormatadaTexto($jogo['data']);?>
         </div>
         <div class="col-xs-6">
            <?php printf("<button name='1' class='btn add' data-idJogo='%d'>%.2f</button>", $jogo['idJogo'], $cotacao['cot1']);?>
            <?php printf("<button name='2' class='btn add' data-idJogo='%d'>%.2f</button>", $jogo['idJogo'], $cotacao['cotx']);?>
            <?php printf("<button name='3' class='btn add' data-idJogo='%d'>%.2f</button>", $jogo['idJogo'], $cotacao['cot2']);?>
            <?php printf("<button onclick='expandir(this)' class='btn expandir' data-idJogo='%d'>+</button>", $jogo['idJogo']);?>
         </div>
      </div>
      <?php
      $cotacaoOutras = $cotOutrasDao->getCotacaoOutrasyId($jogo['idJogo']);
      if($cotacaoOutras['idJogo']===NULL) continue;
      ?>
      <div class="row toogle" id="outros<?php echo $jogo['idJogo'];?>" style="display: none">         
         <div class="col-xs-6">
            <b>Ambos marcam</b><br>
            Sim <?php printf("<button name='4' class='btn add' data-idJogo='%d'>%.2f</button><br>", $jogo['idJogo'], $cotacaoOutras['cot4']);?>
            Não <?php printf("<button name='5' class='btn add' data-idJogo='%d'>%.2f</button><br>", $jogo['idJogo'], $cotacaoOutras['cot5']);?>
         </div>
         <div class="col-xs-6">
            <b>Ganhar de zero</b><br>
            <?php printf("%s <button name='6' class='btn add' data-idJogo='%d'>%.2f</button><br>", $jogo['nomeT1'], $jogo['idJogo'], $cotacaoOutras['cot6']);?>
            <?php printf("%s <button name='7' class='btn add' data-idJogo='%d'>%.2f</button><br>", $jogo['nomeT2'], $jogo['idJogo'], $cotacaoOutras['cot7']);?>
         </div>
         
      </div>
      <?php  
      }
         echo '</div>';
}

function exibirTabelaJogos1x2AdminAntiga($jogos){
   ?>   
      <?php
      if(count($jogos)===0){
         return;
      }
      echo "<div class='row'>";
      $nomeCamp = $jogos[0]['nomeCampeonato'];
      $idCamp = $jogos[0]['idCampeonato'];
      
      $cotDao = new Cotacao1x2Dao();      
      echo "<button class='btn btn-primary' data-toggle='collapse' data-target='#{$idCamp}' style='width: 100%; text-align: left'>".$nomeCamp."</button>";
      echo "<div class='collapse in' id='{$idCamp}'>";
      foreach ($jogos as $jogo){
         $cotacao = $cotDao->getCotacao1x2ById($jogo['idJogo']);
//         if($cotacao['idJogo']===NULL) continue;
      ?>
      <div class="table-responsive">
         <table class="table table-condensed">
            <thead>
            <th colspan="3"><!--Título do jogo-->
               <?php echo "{$jogo['nomeT1']} x {$jogo['nomeT2']} - ".Ultilitarios::dataHoraFormatadaTexto($jogo['data']);?>
            </th>
            </thead>
            <tbody style="text-align: center">
               <tr>
                  <td>Casa</td>
                  <td>Empate</td>
                  <td>Visitante</td>
                  <td>Atualizar</td>
               </tr>
               <tr>
                  <td><?php printf("<input style='text-align: center; width: 60px; font-size: 12px' name='1' value='%.2f'>", $cotacao['cot1']);?></td>
                  <td><?php printf("<input style='text-align: center; width: 60px; font-size: 12px' name='2' value='%.2f'>", $cotacao['cotx']);?></td>
                  <td><?php printf("<input style='text-align: center; width: 60px; font-size: 12px' name='3' value='%.2f'>", $cotacao['cot2']);?></td>
                  <td><?php printf("<button class='btn-primary' id='%d' onclick='atualizarCotacao(this.id)'>Atualizar</button>", $jogo['idJogo']);?></td>
               </tr>
            </tbody>
         </table>
      </div>      
      
      <?php
      }
         echo '</div>';
      echo '</div>';
}

function exibirTabelaJogos1x2Admin($jogos){
   ?>   
      <?php
      if(count($jogos)===0){
         return;
      }
      echo "<div class='row'>";
      $nomeCamp = $jogos[0]['nomeCampeonato'];
      $idCamp = $jogos[0]['idCampeonato'];
      
      $cotDao = new Cotacao1x2Dao();      
      $cotOutrasDao = new CotacaoOutrasDao();
      echo "<button class='btn btn-primary' data-toggle='collapse' data-target='#{$idCamp}' style='width: 100%; text-align: left'>".$nomeCamp."</button>";
      echo '</div>';
      echo "<div class='collapse in' id='{$idCamp}'>";
      echo "<div class='row'>";
      echo "<div class='col-xs-6'></div>";
         echo "<div class='col-xs-6'>"
            . "<span style='margin: 0px 8px'>Casa</span><span style='margin: 0px 4px'>Empate</span><span style='margin: 1px'>Fora</span>"
            . "</div>";
      echo "</div>";
      foreach ($jogos as $jogo){
         $cotacao = $cotDao->getCotacao1x2ById($jogo['idJogo']);
         
      ?>
      <div class="row" style="margin: 2px"  id="<?php echo $jogo['idJogo'];?>">
         <div class="col-xs-6">
            <?php echo "<b>{$jogo['nomeT1']} x {$jogo['nomeT2']}</b> <br> ".Ultilitarios::dataHoraFormatadaTexto($jogo['data']);?>
         </div>
         <div class="col-xs-6">
            <?php printf("<input name='1' class='cota' value='%.2f'>", $cotacao['cot1']);?>
            <?php printf("<input name='2' class='cota' value='%.2f'>", $cotacao['cotx']);?>
            <?php printf("<input name='3' class='cota' value='%.2f'>", $cotacao['cot2']);?>
            <?php printf("<button onclick='atualizarCotacao1x2(this.id)' class='btn btn-atualizar' id='%d'>Atualizar</button>", $jogo['idJogo']);?>
            <?php printf("<button onclick='expandir(this)' class='btn expandir' data-idJogo='%d'>+</button>", $jogo['idJogo']);?>
         </div>
      </div>
      <?php
      $cotacaoOutras = $cotOutrasDao->getCotacaoOutrasyId($jogo['idJogo']);      
      ?>
      <div class="row toogle" id="outros<?php echo $jogo['idJogo'];?>" style="display: none">         
         <div class="col-xs-6">
            <b>Ambos marcam</b><br>
            Sim <?php printf("<input name='4' class='cota' value='%.2f'><br>",$cotacaoOutras['cot4']);?>
            Não <?php printf("<input name='5' class='cota' value='%.2f'><br>",$cotacaoOutras['cot5']);?>
            <?php printf("<button id='%d' onclick='atualizarCotacaoAmbas(this.id)' class='btn btn-atualizar'>Atualizar</button><br>", $jogo['idJogo']);?>
         </div>
         <div class="col-xs-6">
            <b>Ganhar de zero</b><br>
            <?php printf("%s <input name='6' class='cota' value='%.2f'><br>", $jogo['nomeT1'], $cotacaoOutras['cot6']);?>
            <?php printf("%s <input name='7' class='cota' value='%.2f'><br>", $jogo['nomeT2'], $cotacaoOutras['cot7']);?>
         </div>
         
      </div>
      <?php  
      }
         echo '</div>';
}