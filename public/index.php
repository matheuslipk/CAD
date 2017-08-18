<?php
$root = $_SERVER['DOCUMENT_ROOT'];
require_once $root.'/Ultilitarios.php';
require_once Ultilitarios::getCaminhoPastaPrincipal().'/especial/Pagina.php';
require_once Ultilitarios::getCaminhoPastaPrincipal().'/modell/classesDao/NoticiaDao.php';

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
   function verNoticia(idNoticia){
      window.location.href = "/noticia.php?noticia="+idNoticia;
   }
</script>

      <?php
   }

   public function exibirBody() {
        parent::exibirBody();
        $notDao = new NoticiaDao();
        $noticias = $notDao->getAllNoticias();
        ?>
<div class="container">
   <h1>Ultimas notícias</h1>
   <div class="row">
      <div class="col-sm-12">
         <?php
        foreach ($noticias as $noticia){
           ?>
         <div id="<?php echo $noticia['id_noticia']; ?>" onclick="verNoticia(this.id)">
            <h1><?php echo "<h2>{$noticia['titulo']}</h2>"; ?></h1>
            <div class="div-resumo">
               <?php echo "<b>Data publicação: ".Ultilitarios::dataHoraFormatadaTexto($noticia['data_publicacao'])."</b>";  ?>
               <p><?php echo substr($noticia['texto'], 0, 100)."..."; ?></p>
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