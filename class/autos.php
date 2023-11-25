<?php

class autos extends vehiculos{
    
    public $marca;
    public $modelo;
    
    function __construct($puertas, $cantidad_asientos, $max_vel, $litros_combustible, $marca, $modelo){
        $this->ruedas = 4;
        $this->puertas = $puertas;
        $this->asientos = $cantidad_asientos;
        $this->velocidad_maxima = $max_vel;
        $this->capacidad_combistible = $litros_combustible;
        $this->marca = $marca;
        $this->modelo = $modelo;
    }
    
    /* PRIVATE FUNCTIONS */


    /* PUBLIC FUNCTIONS */
        
    /* PROTECTED FUNCTIONS */
    
    /* STATIC FUNCTIONS */
    
    static public function como_se_llama_esta_clase(){
        echo "Esta clase se llama autos";
    }
    
}

