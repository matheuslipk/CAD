<?php
/**
 * Description of CodErroSist
 *
 * @author matheus
 */
class ConexaoBD {
    public static function getConexao(){
        $con = new mysqli('localhost', 'root', '21049900', 'cad');
        if($con->connect_errno){
            exit("Erro na conexão com o banco - ".$con->connect_error);
        }
        $con->set_charset("utf8");
        return $con;
    }
}