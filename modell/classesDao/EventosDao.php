<?php
$root = $_SERVER['DOCUMENT_ROOT'];
require_once $root.'/Ultilitarios.php';
require_once Ultilitarios::getCaminhoPastaPrincipal().'/especial/ConexaoBD.php';

class EventosDao {
   
   
   public function getEventoById($evento){
      $query = "SELECT * FROM evento WHERE id_evento = ?";

      $con = ConexaoBD::getConexao();
      $stmt = $con->prepare($query);
      $stmt->prepare($query);
      $stmt->bind_param('i', $evento);
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
   
   public function getAllEventos(){
      $query = "SELECT * FROM evento ORDER BY data_publicacao DESC";

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
