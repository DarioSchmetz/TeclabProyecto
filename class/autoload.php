<?php

class autoload{ 
    
    static function autocarga($clase) {
        $class = array();
        $base = __DIR__.DIRECTORY_SEPARATOR;
        $class['categorias'] = $base."productos".DIRECTORY_SEPARATOR."categorias.php";
//        $class['productos'] = $base."productos".DIRECTORY_SEPARATOR."productos.php";
        
        $class['base_datos'] = $base."base_datos.php";        
        if (isset($class[$clase])){
            if (file_exists($class[$clase])){
                include $class[$clase];
            } else {
                throw new Exception("Archivo de clase no encontrada [{$class[$clase]}]");
            }
        }
    }
}
    
spl_autoload_register('autoload::autocarga');

