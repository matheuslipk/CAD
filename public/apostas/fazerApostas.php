<?php
$root = $_SERVER['DOCUMENT_ROOT'];
require_once $root.'/Ultilitarios.php';
require_once Ultilitarios::getCaminhoPastaPrincipal().'/especial/Pagina.php';
require_once Ultilitarios::getCaminhoPastaPrincipal().'/modell/classesDao/GrupoApostaDao.php';

class fazerApostas extends Pagina{
   
   public function exibirHead() {
      parent::exibirHead();
      ?>
<style>
   .td-nome-time{
      font-size: 12px;
   }
   
   .td-nome-time span{
      display: block;
   }
</style>

<script>
   $(document).ready(function (){
      var quantJogos = 0;
      var idGrupo = 0;
      var nickUsuario = "";
      
      $(".btnEscolherGrupo").on('click', function(){
         $("#tabelaGrupoApostas").find("tr").removeClass("success");
         $(this).addClass("success");
         idGrupo = $(this).find(".idGrupo").val();
         
         $.ajax({
            type: "POST",
            url: "/controll/grupoApostasJogo/getGrupoApostasJogosById.php",
            data: {
               idGrupo: idGrupo
            },
            success: function(resposta){               
               $("#tabelaAposta").empty();
               $("#tabelaAposta").append(gerarTabelaJogos(resposta));
            }
         });
      });
      
      $("#tabelaAposta").on('change','.radio-inline',function(){
         $(this).parent().parent().find('td').removeClass('success');
         $(this).parent().addClass('success');
      });
      
      $("#tabelaAposta").on('click', "#btnFazerAposta", function(){
         
         if(camposValidos(quantJogos)){
            $("#formAposta").submit();
         }         
      });
      
      $("#nickUsuario").on('keyup', function(){
         var nick = $(this).val();
         if(nick.length>=3){
            atualizaTabelaUsuarios(nick);
         }else{
            $("#divTabelaUsuario").empty();
         }
      });
            
      //Clicar no nick do usuário      
      $("#divTabelaUsuario").on('click', '.nick',function(){
         $("#nickUsuario").val($(this).text());
         atualizaTabelaUsuarios($("#nickUsuario").val());
      });
      
      function atualizaTabelaUsuarios(nick){
         $.ajax({
            type: "POST",
            url: "/controll/usuario/searchUsuarioByNickName.php",
            data: {
               nickName: nick
            },
            success: function(resposta){               
               $("#divTabelaUsuario").empty();
               $("#divTabelaUsuario").append(gerarTabelaUsuario(resposta));
            }
         });
      }
      
      function gerarTabelaUsuario(stringJson){
         var parsed = JSON.parse(stringJson);
         var arr = [];
         for(var x in parsed){
            arr.push(parsed[x]);
         }
         if(arr.length===0){
            return "<label style='color: red; font-size 14px'>Nenhum usuário com esse nick no sistema</label>";
         }
         var tabela = "";
         tabela+="<table class='table table-hover table-condensed' border='0' style='text-align: center;'>";
         tabela+="<tbody>";
         for(i=0; i<arr.length; i++){
            tabela+="<tr>";
            tabela+="<td><a href='#' value='teste' class='nick'>"+ arr[i]['nick'] +"</a></td>";
            tabela+="<td>"+ arr[i]['nome'] + "</td>";
            tabela+="<td>"+ (arr[i]['dataNascimento']).substring(0,10) +"</td>";            
            tabela+="</tr>";
         }
         tabela+="</tbody></table>";
         
         return tabela;
      }
      
      function camposValidos(quantJogos){         
         for(i=0; i<quantJogos; i++){
            test="[name='jogo"+ i +"']";
            if(!$(test).is(':checked')){
               alert('Marque em todos os jogos');
               return false;
            }
         }
         nickUsuario = $("#nickUsuario").val();
         if(nickUsuario.length<3){
            alert('Selecione um nick válido');
            return false;
         }
         $("#nickUsuario2").attr("value", nickUsuario);
         return true;
      }
      
      function gerarTabelaJogos(stringJson){         
         var parsed = JSON.parse(stringJson);
         var arr = [];
         for(var x in parsed){
            arr.push(parsed[x]);
         }
         
         quantJogos = arr.length;
         
         var tabela = "<form method='post' id='formAposta' action='/controll/aposta/logicaFazerAposta.php'>";
         tabela+="<table class='table table-hover table-condensed' border='0' style='text-align: center;'>";
         tabela+="<input type='text' style='display: none' name='idGrupo' value='"+ idGrupo +"'>";
         tabela+="<input id='nickUsuario2' type='text' style='display: none' name='nickUsuario' value='"+ nickUsuario +"'>";
         tabela+="<thead><tr>";
         tabela+="<th style='text-align: center'>Time 1</th>";
         tabela+="<th style='text-align: center'>Empate</th>";
         tabela+="<th style='text-align: center'>Time 2</th>";
         tabela+="<th style='text-align: center'>Data Jogo</th>";
         tabela+="</tr></thead><tbody style='font-size: 13px'>";
         for(i=0; i<arr.length; i++){
            data = arr[i]['data'].substring(8,10)+arr[i]['data'].substring(4,8)+arr[i]['data'].substring(0,4)+arr[i]['data'].substring(10,16);
            tabela+="<tr>";
            tabela+="<td class='td-nome-time'><label class='radio-inline'><input required type='radio' name='jogo"+ i +"' value='1' style='display: none'><span><img width='25' src='" + arr[i]['linkLogoT1'] + "'></span>"+ arr[i]['nomeT1'] +"</label></td>";
            tabela+="<td style='font-size: 25px'><label class='radio-inline'><input required type='radio' name='jogo"+ i +"' value='x' style='display: none'>X</label></td>";
            tabela+="<td class='td-nome-time'><label class='radio-inline'><input required type='radio' name='jogo"+ i +"' value='2' style='display: none'><span><img width='25' src='" + arr[i]['linkLogoT2'] + "'></span>"+ arr[i]['nomeT2'] +"</label></td>";
            tabela+="<td><label style='font-size: 10px'>" + data + "</label></td>";
            tabela+="</tr>";
         }
         tabela+="<tr>";
         tabela+="<td colspan='3'><button type='button' class='btn btn-primary' id='btnFazerAposta'>Fazer Aposta</button></td>";
         tabela+="</tr>";
         tabela+="</tbody></table></form>";
         
         return tabela;
      }
   });
</script>
      <?php
   }

      public function exibirBody() {
      parent::exibirBody();
      $gDao = new GrupoApostaDao();
      $grupos = $gDao->getAllGrupoApostasAbertos();
      ?>
      <div class="container">         
         <div class="row">
            <div class="table-responsive">
               <h3>Escolha um dos grupos disponíveis</h3>
               <table class="table" id="tabelaGrupoApostas">
                  <thead>
                     <tr>
                        <th style="display: none">Grupo</th>
                        <th>Descrição</th>
                        <th>Premiação Atual</th>
                     </tr>
                  </thead>
                  
                  <tbody>
                     <?php
                     foreach ($grupos as $grupo){
                        $valor = $gDao->getArrecadacaoByGrupoAposta($grupo['idGrupo']);
                        echo "<tr class='btnEscolherGrupo'>";
                        echo "<td style='display: none'><input class='idGrupo' type='text' value='".$grupo['idGrupo']."'></td>" ;
                        echo '<td>'.$grupo['descricao'].'</td>' ;
                        printf("<td>%.2f</td>", $valor['premiacao']);
                        echo '</tr>';   
                     }
                     
                     ?>
                  </tbody>
               </table>
            </div>
         </div>
         
         <div class="row">
            <div class="form-group col-sm-5">
               <label>Nick do apostador</label>
               <input autocomplete="off" class="form-control" type="text" id="nickUsuario" placeholder="Coloque aqui o nick único do apostador" >
            </div>
            
            <div class="form-group col-sm-7">
               <div id="divTabelaUsuario" style="font-size: 14px"></div>
            </div>            
         </div>
         
         <div class="row">
            <div class="table-responsive" id="tabelaAposta"></div>
         </div>
      </div>
      <?php
   }
}

$f = new fazerApostas();
$f->setTituloPagina('Fazer Aposta');
$f->display();
