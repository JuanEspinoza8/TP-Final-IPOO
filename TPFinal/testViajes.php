<?php
include_once "pasajero.php";
include_once "responsableV.php";
include_once "viaje.php";
include_once "empresa.php";

class TestViajes {
    public function run() {
        // Crear empresa y responsable
        $empresa = new Empresa(NULL, "Transporte Oso", "Av. lol 123", );
        $responsable = new ResponsableV(101, 5555, "Lolo", "Lel");

        // Crear viaje
        $viaje = new Viaje(NULL, "Bariloche", 3, 25000, $empresa, $responsable);

        // Agregar pasajeros
        $p1 = new Pasajero("Juan", "Espinoza", "12345678", "1130000000");
        $p2 = new Pasajero("Lucas", "Ortiz", "87654321", "1144444444");

        $viaje->agregarPasajero($p1);
        $viaje->agregarPasajero($p2);

        // Mostrar datos del viaje
        echo $viaje;
    }
}

// Ejecutar
$test = new TestViajes();
$test->run();
