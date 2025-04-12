<?php
function mostrarNotificacion($mensaje) {
    echo "<script>alert('$mensaje');</script>";
}

// Llamamos a la función con un mensaje de oferta
mostrarNotificacion('Oferta especial: 20% de descuento en todos los vuelos este fin de semana!');
?>
