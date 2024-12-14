<?php

class SalidaArchivoTXT implements SalidaStrategy
{
    public function mostrar($mensaje)
    {
        file_put_contents('mensaje.txt', $mensaje . PHP_EOL, FILE_APPEND);
        echo "Mensaje guardado en mensaje.txt\n";
    }
}
