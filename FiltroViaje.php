<?php
class FiltroViaje {
    public $nombreHotel;
    public $ciudad;
    public $pais;
    public $fechaViaje;
    public $duracion;

    public function __construct($nombreHotel, $ciudad, $pais, $fechaViaje, $duracion) {
        $this->nombreHotel = $nombreHotel;
        $this->ciudad = $ciudad;
        $this->pais = $pais;
        $this->fechaViaje = $fechaViaje;
        $this->duracion = $duracion;
    }

    public function mostrarFiltro() {
        return "Destino: $this->ciudad, $this->pais - Hotel: $this->nombreHotel - Fecha: $this->fechaViaje - Duración: $this->duracion días.";
    }
}
?>
