<?php

class SalidaJSON implements SalidaStrategy
{
    public function mostrar($mensaje)
    {
        echo json_encode(["mensaje" => $mensaje]) . "\n";
    }
}
