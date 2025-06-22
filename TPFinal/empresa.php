<?php
class Empresa {
    private $idEmpresa;
    private $nombre;
    private $direccion;

    // Constructor 
     public function __construct($idEmpresa = null, $nombre, $direccion) {
        $this->idEmpresa = $idEmpresa;
        $this->nombre = $nombre;
        $this->direccion = $direccion;
    }

    // Getters
    public function getIdEmpresa() {
        return $this->idEmpresa;
    }
    public function getNombre() {
        return $this->nombre;
    }

    public function getDireccion() {
        return $this->direccion;
    }

    // Setters
    public function setIdEmpresa($id) {
        $this->idEmpresa = $id;
    }
    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    public function setDireccion($direccion) {
        $this->direccion = $direccion;
    }

    // __toString
    public function __toString() {
        return "Empresa: " . $this->getNombre() . " - Dirección: " . $this->getDireccion() . "\n";
    }
}
