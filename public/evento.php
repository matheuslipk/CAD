<?php
$root = $_SERVER['DOCUMENT_ROOT'];
require_once $root.'/Ultilitarios.php';
require_once Ultilitarios::getCaminhoPastaPrincipal().'/especial/Pagina.php';
require_once Ultilitarios::getCaminhoPastaPrincipal().'/modell/classesDao/EventosDao.php';

class index extends Pagina{
   
   public function exibirHead() {
      parent::exibirHead();
      ?>
<style>
   h1{
      text-align: center;
   }
   .div-resumo{
      padding: 5px;
      background: #DDD;
      border-radius: 10px;
   }
</style>

<script>
   function verEvento(idEvento){
      alert(idEvento);
   }
</script>

      <?php
   }

   public function exibirBody() {
        parent::exibirBody();
        $eventoDao = new EventosDao();
        $evento = $eventoDao->getEventoById($_GET['evento']);
        ?>
<div class="container">
   <div class="row">
      <div class="col-sm-12">
         <div id="<?php echo $evento['id_evento']; ?>">
            <h1><?php echo "<h1>{$evento['titulo']}</h1>"; ?></h1>
            <div class="div-evento">
               <?php echo "<b>Data publicação: ".Ultilitarios::dataHoraFormatadaTexto($evento['data_publicacao'])."</b><br>";?>
               <?php echo "<b>Data evento: ".Ultilitarios::dataHoraFormatadaTexto($evento['data_evento'])."</b><br><br>";?>               
               <?php echo "<p>".$evento['descricao']."</p>"; ?>
            </div>
              
         </div>     
      </div>
      
      <div class="col-sm-8 table-responsive" id="divTabelaAposta">
         
      </div>
   </div>
</div>
        <?php
    }
}
$i = new index();
$i->display();