<?php

class Persona{
    protected $nombre;
    protected $edad;
    protected $altura;
    protected $genero;

    public function __construct($nombre, $edad, $altura) {
        $this->nombre = $nombre;
        $this->edad = $edad;
        $this->altura = $altura;
    }

    public function saludar() {
        return "Hola, mi nombre es " . $this->nombre . ", tengo " . $this->edad . " años y mido " . $this->altura . " metros.";
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function setGenero($genero) {
        $this->genero = $genero;
    }

    public function getGenero() {
        return $this->genero;
    }
}