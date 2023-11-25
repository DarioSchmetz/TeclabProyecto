<?php

abstract class vehiculos implements  _vheiculos{
    
    public $ruedas;
    public $puertas;
    public $asientos;
    public $velocidad_maxima;
    public $capacidad_combistible;
        
    
    abstract static public function como_se_llama_esta_clase();
    
    
    public function test(){
        return $this->capacidad_combistible * 100 / $this->asientos;
    }
    
    public function calcular_autonomia(){
        $autonomia = $this->test();
        $autonomia = $autonomia - 4;
        return $autonomia;
    }
    
    public function mostrar(){
        echo "<pre>";
        print_r($this);
        echo "</pre>";
    }
    
    function hola(){
        echo "Hola mundo";
    }
    
    
    
}