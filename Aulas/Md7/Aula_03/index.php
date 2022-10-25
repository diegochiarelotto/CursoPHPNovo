<?php
//Final class, heranças, protected

    
    class Filha{

        /*
        protected function funcaoTeste(){
            echo 'Chamando função teste!';
        }
        */

        private function funcaoTeste(){
            echo 'Chamando funcao teste!';
        }


        public function mostrarOla(){
            $this->funcaoTeste();
            echo '<br/>';
            echo 'Olá Mundo!';
    }
 }
    class Pai extends filha {
        public function mostarTchau(){
            echo 'Mostrar Tchau!';
            echo '<br/>';
            // $this->funcaoTeste();
        }
 }
    // $pai = new Pai;
    // $pai->mostarTchau();

    // $filha = new Filha;
    // $filha->mostrarOla();
    
    $pai = new Pai;
    $pai->mostrarOla();

?>