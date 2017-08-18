<?php
$root = $_SERVER['DOCUMENT_ROOT'];
require_once $root.'/Ultilitarios.php';
require_once Ultilitarios::getCaminhoPastaPrincipal().'/especial/ConexaoBD.php';

class NoticiaDao {
   
   
   public function getNoticiaById($matricula){
      $query = "SELECT * FROM noticia WHERE idNoticia = ?";

      $con = ConexaoBD::getConexao();
      $stmt = $con->prepare($query);
      $stmt->prepare($query);
      $stmt->bind_param('i', $matricula);
      if($stmt->execute()){
         $result = $stmt->get_result();
         $array = $result->fetch_assoc();                     
         $stmt->close();
         $con->close();
         return $array;
      }
      $stmt->close();        
      $con->close();
      return $stmt->error;
   }
   
   public function getAllNoticias(){
      $query = "SELECT * FROM noticia ORDER BY data_publicacao DESC";

      $con = ConexaoBD::getConexao();
      $stmt = $con->prepare($query);
      $stmt->prepare($query);
      if($stmt->execute()){
         $result = $stmt->get_result();
         $array = $result->fetch_all(MYSQLI_ASSOC);
                     
         $stmt->close();
         $con->close();
         return $array;
      }
      $stmt->close();        
      $con->close();
      return NULL;    
   }
   
}
