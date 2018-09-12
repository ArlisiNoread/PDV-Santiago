<?php

class productoDTO {
    var $id, $nombre_producto, $precio, $fk_categoríaProducto, $fk_lista_ingredientes;
    
    
    function __construct($id, $nombre_producto, $precio, $fk_categoríaProducto, $fk_lista_ingredientes) {
        $this->id = $id;
        $this->nombre_producto = $nombre_producto;
        $this->precio = $precio;
        $this->fk_categoríaProducto = $fk_categoríaProducto;
        $this->fk_lista_ingredientes = $fk_lista_ingredientes;
    }

    function getId() {
        return $this->id;
    }

    function getNombre_producto() {
        return $this->nombre_producto;
    }

    function getPrecio() {
        return $this->precio;
    }

    function getFk_categoríaProducto() {
        return $this->fk_categoríaProducto;
    }

    function getFk_lista_ingredientes() {
        return $this->fk_lista_ingredientes;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setNombre_producto($nombre_producto) {
        $this->nombre_producto = $nombre_producto;
    }

    function setPrecio($precio) {
        $this->precio = $precio;
    }

    function setFk_categoríaProducto($fk_categoríaProducto) {
        $this->fk_categoríaProducto = $fk_categoríaProducto;
    }

    function setFk_lista_ingredientes($fk_lista_ingredientes) {
        $this->fk_lista_ingredientes = $fk_lista_ingredientes;
    }


    
}
