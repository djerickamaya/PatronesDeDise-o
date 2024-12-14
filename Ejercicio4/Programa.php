<?php

require_once 'SalidaStrategy.php';
require_once 'SalidaConsola.php';
require_once 'SalidaJSON.php';
require_once 'SalidaArchivoTXT.php';
require_once 'Mensaje.php';

class Programa
{
    public static function main()
    {
        $mensaje = "Hola, mundo!";

        // Mostrar mensaje por consola
        $contexto = new Mensaje(new SalidaConsola());
        $contexto->mostrarMensaje($mensaje);

        // Mostrar mensaje en formato JSON
        $contexto->setStrategy(new SalidaJSON());
        $contexto->mostrarMensaje($mensaje);

        // Mostrar mensaje en archivo TXT
        $contexto->setStrategy(new SalidaArchivoTXT());
        $contexto->mostrarMensaje($mensaje);
    }
}

Programa::main();
