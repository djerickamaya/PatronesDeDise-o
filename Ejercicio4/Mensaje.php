<?php

class Mensaje
{
    private $strategy;

    public function __construct(SalidaStrategy $strategy)
    {
        $this->strategy = $strategy;
    }

    public function setStrategy(SalidaStrategy $strategy)
    {
        $this->strategy = $strategy;
    }

    public function mostrarMensaje($mensaje)
    {
        $this->strategy->mostrar($mensaje);
    }
}
