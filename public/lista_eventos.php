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
   .div-resumo{
      padding: 5px;
      background: #DDD;
      border-radius: 10px;
   }
</style>

<script>
   function verEvento(idEvento){
      window.location.href = "/evento.php?evento="+idEvento;
   }
</script>

      <?php
   }

   public function exibirBody() {
        parent::exibirBody();
        $eventoDao = new EventosDao();
        $eventos = $eventoDao->getAllEventos();
        ?>
<div class="container">
   <div class="row">
      <div class="col-sm-12">
         <?php
        foreach ($eventos as $evento){
           ?>
         <div id="<?php echo $evento['id_evento']; ?>" onclick="verEvento(this.id)">
            <h1><?php echo "<h2>{$evento['titulo']}</h2>"; ?></h1>
            <div class="div-resumo">
               <?php echo "<b>Data publicação: ".Ultilitarios::dataHoraFormatadaTexto($evento['data_publicacao'])."</b><br>";?>
               <?php echo "<b>Data evento: ".Ultilitarios::dataHoraFormatadaTexto($evento['data_evento'])."</b>";?>               
               <p><?php echo substr($evento['descricao'], 0, 100)."..."; ?></p>
            </div>
              
         </div>
            <?php           
        }         
         ?>
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