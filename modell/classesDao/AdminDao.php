<?php
$root = $_SERVER['DOCUMENT_ROOT'];
require_once $root.'/Ultilitarios.php';
require_once Ultilitarios::getCaminhoPastaPrincipal()."/especial/ConexaoBD.php";

class AdminDao {
           
    public function getAdminById($id){
        $query = "SELECT * FROM admin WHERE idAdmin = ?";

        $con = ConexaoBD::getConexao();
        $stmt = $con->prepare($query);
        $stmt->prepare($query);
        $stmt->bind_param('i', $id);
        if($stmt->execute()){
            $result = $stmt->get_result();
            $array = $result->fetch_assoc();
                        
            $stmt->close();
            $con->close();
            return $array;
        }
        $stmt->close();        
        $con->close();
        return NULL;
    
    }
    public function getAdminByNick($nick){
        $query = "SELECT * FROM admin WHERE nick = ?";

        $con = ConexaoBD::getConexao();
        $stmt = $con->prepare($query);
        $stmt->prepare($query);
        $stmt->bind_param('s', $nick);
        if($stmt->execute()){
            $result = $stmt->get_result();
            $array = $result->fetch_assoc();
                        
            $stmt->close();
            $con->close();
            return $array;
        }
        $stmt->close();        
        $con->close();
        return NULL;
    
    }
    
}