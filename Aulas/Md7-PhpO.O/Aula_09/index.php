<?php

//Constante 

    class minhaClasse
    {
        const VALOR = 900;
        public function __construct()
        {
            echo self::VALOR;
        }
    }
  
    echo minhaClasse::VALOR;
?>