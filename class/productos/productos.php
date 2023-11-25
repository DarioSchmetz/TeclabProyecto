<?php

class productos{
    private $id;
    public $nombre;
    public $id_categoria;
    public $img;
    public $precio;
    private $_exists = false;
    
    function __construct($id = null) {
        if ($id != null){
            $dbm = self::_conexion();
            $producto = $dbm->select("categorias", "id = ?", array($id));
            if (isset($producto[0]['id'])){
                $this->id = $producto[0]['id'];
                $this->nombre = $producto[0]['nombre'];
                $this->id_categoria = $producto[0]['img'];
                $this->precio = $producto[0]['precio'];
                $this->_exists = true;
            }
        }
    }
    
    static private function _conexion(){
        return new base_datos("mysql", "miproyecto", "localhost:3308", "root", "");
    }
    
    private function _insertar(){
        $dbm = self::_conexion();
        $resp = $dbm->insert("productos", "nombre", "?", array($this->nombre));
        if ($resp){
            $this->id = $resp;
            $this->_exists = true;
            return true;
        } else {
            return false;
        }
        
    }
    
    private function _actualizar(){
        $dbm = self::_conexion();
        return $dbm->update("productos", "nombre = ?", "id = ?", array($this->nombre, $this->id));
    }
    
    public function eliminar(){
        $dbm = self::_conexion();
        return $dbm->delete("productos", "id = ?", array($this->id));
    }
    
    public function guardar(){
        if ($this->_exists){
            return $this->_actualizar();
        } else {
            return $this->_insertar();
        }
    }
    
    static public function listar(){
        $dbm = self::_conexion();
        return $dbm->select("productos");
    }
    
    
}

