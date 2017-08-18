<?php

class Ultilitarios {
    
   public static function isCpfValido($cpfTeste){
           if(is_numeric($cpfTeste) == FALSE){
               return FALSE;
           }

           if(strlen($cpfTeste) != 11){
               return FALSE;
           }     

           switch ($cpfTeste){
               case('00000000000'):return FALSE;
               case('11111111111'):return FALSE;
               case('22222222222'):return FALSE;
               case('33333333333'):return FALSE;
               case('44444444444'):return FALSE;
               case('55555555555'):return FALSE;
               case('66666666666'):return FALSE;
               case('77777777777'):return FALSE;
               case('88888888888'):return FALSE;
               case('99999999999'):return FALSE;
           }

           $digito1 = null;
           $digito2 = null;              
           $cpfCopia = substr($cpfTeste, 0, 9);

           $somatorio = 0;
           $aux = 10;

           for($i=0; $i<9; $i++){
               $somatorio += ((int)substr($cpfCopia, $i, 1))*$aux;
               $aux--;
           }

           $resto1 = $somatorio%11;

           if($resto1<2)
                $digito1=0;
            else{
                $digito1=11-$resto1;            
            }

            $cpfCopia= $cpfCopia.$digito1;

            $somatorio = 0;        
            $aux = 11;

            for($i=0; $i<10; $i++){
                $somatorio+=((int)substr($cpfCopia, $i, 1))*$aux;
                $aux--;
            }

            $resto2 = $somatorio%11;
            if($resto2<2)
                $digito2=0;
            else{
                $digito2=11-$resto2;            
            }

            $cpfCopia = $cpfCopia.$digito2;

            if($cpfCopia == $cpfTeste){
                return TRUE;
            }
       }
    
    
   public static function getLinkLogin(){
      return "/login.php";
   }
    
   public static function getLinkLogout(){
      return "/controll/logicaLogout.php";
   }
    
   public static function dataHoraFormatada($data){
      return date("d/m/Y - G:i:s", $data);
   }
    
   public static function getCaminhoPastaPrincipal(){
      if (strtoupper(substr(PHP_OS, 0, 3)) === 'WIN') {
          return "C:/xampp/htdocs/CAD";
      } else {
         return '/var/www/html/m47esportes';
      }
      
   }
    
   public static function dataFormatadaHtml($dataSql){
      return str_replace(' ', 'T', $dataSql);
   }
    
   public static function dataHoraFormatadaTexto($dataSql){
      return date('d/m/Y H:i', strtotime($dataSql));
   }
   
   public static function dataHoraFormatadaTexto2($dataSql){
      return date('d/m/Y H:i:s', strtotime($dataSql));
   }
   
   public static function dataFormatadaTexto($dataSql){
      return date('d/m/Y', strtotime($dataSql));
   }

   public static function getHashSha1Formatado($hashSha1){
      return substr($hashSha1, 0,10). "-" . substr($hashSha1, 10, 10)
         . "-" . substr($hashSha1, 20, 10). "-" . substr($hashSha1, 30, 10);
   }
}