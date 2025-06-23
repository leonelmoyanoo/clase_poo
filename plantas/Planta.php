<?php
class Planta{
    protected int $id;
    protected string $nombre;
    protected string $tipo;
    protected string $descripcion;
    protected string $fecha_creacion;
    protected float $precio;

    /**
     * Este es el constructor de la clase Planta.
     *  @param int $id
     *      este es el identificador único de la planta.
     *  @param string $nombre
     *      este es el nombre de la planta.
     *  @param string $tipo
     *      este es el tipo de planta (por ejemplo, "Flora", "Fauna").
     *  @param string $descripcion
     *      este es una descripción de la planta.
     *  @param string $fecha_creacion
     *      este es la fecha de creación de la planta en formato 'YYYY-MM-DD'.
     */
    public function __construct(int $id, string $nombre, string $tipo, $descripcion, $fecha_creacion) {
        $this->id = $id;
        $this->nombre = $nombre;
        $this->tipo = $tipo;
        $this->descripcion = $descripcion;
        $this->fecha_creacion = $fecha_creacion;
    }

    public function barato(){
        return $this->precio <=100;
    }
    public function getId() {
        return $this->id;
    }
    public function getNombre() {
        return $this->nombre;
    }
    public function getTipo() {
        return $this->tipo;
    }
    public function getDescripcion() {
        return $this->descripcion;
    }
    public function getFechaCreacion() {
        return $this->fecha_creacion;
    }
    public function getPrecio() {
        return isset($this->precio) ? $this->precio : null;
    }
    public function setPrecio($precio) {
        $this->precio = $precio;
    }

    public function __get($property) {
        if (property_exists($this, $property)) {
            return $this->$property;
        }
        return null;
    }

    
}