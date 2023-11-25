<?php

class camiones extends vehiculos {
    
    public $empresa;
    
    function __construct($puertas, $cantidad_asientos, $max_vel, $litros_combustible, $empresa){
        $this->ruedas = 4;
        $this->puertas = $puertas;
        $this->asientos = $cantidad_asientos;
        $this->velocidad_maxima = $max_vel;
        $this->capacidad_combistible = $litros_combustible;
        $this->empresa = $empresa;
    }
    
    static public function como_se_llama_esta_clase(){
        echo "Hola soy la clase camiones";
    }
    
    
}

