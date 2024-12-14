<?php

class SalidaConsola implements SalidaStrategy
{
    public function mostrar($mensaje)
    {
        echo $mensaje . "\n";
    }
}
