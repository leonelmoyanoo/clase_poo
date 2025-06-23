<?php
class Catalogo {
    private $plantas = [];

    public function setPlanta(Planta $planta) {
        $this->plantas[$planta->getId()] = $planta;
    }

    public function eliminarPlanta(int $id) {
        if (isset($this->plantas[$id])) {
            unset($this->plantas[$id]);
        }
    }

    public function obtenerPlanta(int $id) {
        return $this->plantas[$id] ?? null;
    }

    public function listarPlantas() {
        return $this->plantas;
    }
}