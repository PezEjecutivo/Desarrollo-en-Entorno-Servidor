<?php 

class ProductoDO
{

    //Si utilizamos private solo se puede utilizar desde dentro de la clase

    //Protected implica que se puede acceder a ella solo desde su propia clase
    //y sus clases hijas
    private $id;
    private $nombre;
    private $descripcion;
    private $peso;
    private $precio;
    private $tamanio;

    //Las variables estaticas se utilizan para compartir valores entre todos los objetos
    public static $cantidad=0;

    //declaramos estaticos los metodos que podamos utilizar
    //sin necesidad de utilizar un objeto de este tipo
    public static function incrementarCantidad()
    {
        self::$cantidad++;
    }

    /**
     * Constructor de la clase
     */
    public function __construct($id, $nombre,$descripcion,$peso,$precio,$tamanio)
    {
        //Cada vez que se crea un objeto incrementamos el contador de objetos de este tipo
        self::$cantidad++;

       if (isset($id)) $this->id=$id; else $this->id = 0;
       if (isset($nombre)) $this->nombre=$nombre; else $this->nombre = "";
       if (isset($descripcion)) $this->descripcion=$descripcion; else $this->descripcion="";
       if (isset($peso)) $this->peso=$peso; else $this->peso = random_int(1,5);
       if (isset($precio)) $this->precio=$precio; else$this->precio= random_int(1,5);
       if (isset($tamanio)) $this->tamanio=$tamanio; else$this->tamanio = random_int(1,5);
    }



    public function get_id() :int 
    {
        return $this->id;
    } 


    /**
     * Get the value of nombre
     */ 
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set the value of nombre
     *
     * @return  self
     */ 
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get the value of descripcion
     */ 
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    /**
     * Set the value of descripcion
     *
     * @return  self
     */ 
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;

        return $this;
    }

    /**
     * Get the value of peso
     */ 
    public function getPeso()
    {
        return $this->peso;
    }

    /**
     * Set the value of peso
     *
     * @return  self
     */ 
    public function setPeso($peso)
    {
        $this->peso = $peso;

        return $this;
    }

    /**
     * Get the value of precio
     */ 
    public function getPrecio()
    {
        return $this->precio;
    }

    /**
     * Set the value of precio
     *
     * @return  self
     */ 
    public function setPrecio($precio)
    {
        $this->precio = $precio;

        return $this;
    }
    

    /**
     * Get the value of tamanio
     */ 
    public function getTamanio()
    {
        return $this->tamanio;
    }

    /**
     * Set the value of tamanio
     *
     * @return  self
     */ 
    public function setTamanio($tamanio)
    {
        $this->tamanio = $tamanio;

        return $this;
    }
}



?>