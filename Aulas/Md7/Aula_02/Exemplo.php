<?php

class Exemplo {
    private $var1;
    public  $var2;

    // public static $var3 = 'statico';
   /*
    public function metodo(){

    }
    private function metodo2(){
        
    }

    public static function metodoEstatico(){
        echo 'E uma nova funcao pela classe!';
    }
   */
    public function setVar1($var1){
        $this->var1 = $var1;
        
    }

    public function pegaVar1(){
        return $this->var1; 
    }

}
?>