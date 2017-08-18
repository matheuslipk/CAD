<?php
$root = $_SERVER['DOCUMENT_ROOT'];
require_once $root.'/Ultilitarios.php';
require_once Ultilitarios::getCaminhoPastaPrincipal().'/especial/ConexaoBD.php';
require_once Ultilitarios::getCaminhoPastaPrincipal().'/modell/classes/Usuario.php';

class UsuarioDao {
   
   public function inserirUsuario($usuario){
      $query = "INSERT INTO aluno VALUES (?,?,?,?,0)";
      $con = ConexaoBD::getConexao();
      $stmt = $con->prepare($query);
      $stmt->bind_param("isss", $usuario['matricula'], $usuario['nome'], 
              $usuario['telefone'], $usuario['senha']);
      if($stmt->execute()){
         $stmt->close();
         $con->close();
         return true;
      }
      $erro = $stmt->error;
      $stmt->close();
      $con->close();
      return $erro;
   }
   
   public function getUsuarioByMatricula($matricula){
      $query = "SELECT * FROM aluno WHERE matricula = ?";

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
   
   public function getAllUsuarios(){
      $query = "SELECT * FROM aluno ORDER BY nome ASC";

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
   
   public function getUsuarioNotResponsavel(){
      $query = "SELECT * FROM viewUsuarioNotResp ORDER BY nickUser ASC";

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
   
   public function searchUsuarioByNickName($nickName){
      $query = "SELECT u.nick, u.nome, u.dataNascimento FROM usuario u WHERE u.nick LIKE '{$nickName}%' OR u.nome LIKE '%{$nickName}%'";

      $con = ConexaoBD::getConexao();
      $stmt = $con->prepare($query);
      $stmt->prepare($query);
//      $stmt->bind_param('ss', $nickName, $nickName);
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
