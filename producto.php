<?php
    class Producto {
        private $nombre;
        private $precio;
        private $cantidad;
        private $disponible;

        public function __construct($nombre, $precio, $cantidad, $disponible){
            $this -> nombre = $nombre;
            $this -> precio = $precio;
            $this -> cantidad = $cantidad;
            $this -> disponible = $disponible;
            

        }

        public function getNombre(){
            return $this->nombre;
        }
        public function getPrecio(){
            return $this->precio;
        }
        public function getCantidad(){
            return $this->cantidad;
        }
        public function getDisponible(){
            return $this->disponible;
        }
        public function setNombre($nombre){
            $this -> nombre = $nombre;
        }
        public function setPrecio($precio){
            $this -> precio = $precio;
        }
        public function setCantidad($cantidad){
            $this -> cantidad = $cantidad;
        }
        public function setDisponible($disponible){
            $this -> disponible = $disponible;
        }
    }
?>

