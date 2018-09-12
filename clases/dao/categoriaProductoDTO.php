<?php

class categoriaProductoDAO {
    
    var $id, $nombre_categoria, $imagen_categoria, $fk_tienda_asociada, $reglas_transaccion;
    
    function __construct($id, $nombre_categoria, $imagen_categoria, $fk_tienda_asociada, $reglas_transaccion) {
        $this->id = $id;
        $this->nombre_categoria = $nombre_categoria;
        $this->imagen_categoria = $imagen_categoria;
        $this->fk_tienda_asociada = $fk_tienda_asociada;
        $this->reglas_transaccion = $reglas_transaccion;
    }

    
    function getId() {
        return $this->id;
    }

    function getNombre_categoria() {
        return $this->nombre_categoria;
    }

    function getImagen_categoria() {
        return $this->imagen_categoria;
    }

    function getFk_tienda_asociada() {
        return $this->fk_tienda_asociada;
    }

    function getReglas_transaccion() {
        return $this->reglas_transaccion;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setNombre_categoria($nombre_categoria) {
        $this->nombre_categoria = $nombre_categoria;
    }

    function setImagen_categoria($imagen_categoria) {
        $this->imagen_categoria = $imagen_categoria;
    }

    function setFk_tienda_asociada($fk_tienda_asociada) {
        $this->fk_tienda_asociada = $fk_tienda_asociada;
    }

    function setReglas_transaccion($reglas_transaccion) {
        $this->reglas_transaccion = $reglas_transaccion;
    }


    
}
