<?php
require_once "FiltroViaje.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombreHotel = $_POST["nombreHotel"];
    $ciudad = $_POST["ciudad"];
    $pais = $_POST["pais"];
    $fechaViaje = $_POST["fechaViaje"];
    $duracion = $_POST["duracion"];

    // Crear un objeto de la clase FiltroViaje
    $filtro = new FiltroViaje($nombreHotel, $ciudad, $pais, $fechaViaje, $duracion);
    
    echo "<h2>Resultado del Filtro</h2>";
    echo "<p>" . $filtro->mostrarFiltro() . "</p>";
}
?>
