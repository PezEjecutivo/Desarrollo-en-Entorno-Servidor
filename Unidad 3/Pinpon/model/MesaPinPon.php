<?php 
include "producto.php";

class MesaPinPon extends Producto {

    private $exterior;
    private $material;
    private $color;


    public function __construct($id, $nombre, $descripcion, $peso, $precio, $tamanio,$exterior,$material,$color)
    {

        parent::__construct($id,
        $nombre,
        $descripcion,
        $peso,
        $precio,
        $tamanio);

        $this->exterior =$exterior;
        $this->material =$material;
        $this->color =$color;

        
    }

    /**
     * Get the value of exterior
     */ 
    public function getExterior()
    {
        return $this->exterior;
    }

    /**
     * Set the value of exterior
     *
     * @return  self
     */ 
    public function setExterior($exterior)
    {
        $this->exterior = $exterior;

        return $this;
    }

    /**
     * Get the value of material
     */ 
    public function getMaterial()
    {
        return $this->material;
    }

    /**
     * Set the value of material
     *
     * @return  self
     */ 
    public function setMaterial($material)
    {
        $this->material = $material;

        return $this;
    }

    /**
     * Get the value of color
     */ 
    public function getColor()
    {
        return $this->color;
    }

    /**
     * Set the value of color
     *
     * @return  self
     */ 
    public function setColor($color)
    {
        $this->color = $color;

        return $this;
    }
}
?>