<?php

require_once 'Personaje.php';

abstract class PersonajeDecorator implements Personaje
{
    protected $personaje;

    public function __construct(Personaje $personaje)
    {
        $this->personaje = $personaje;
    }

    public function atacar()
    {
        $this->personaje->atacar();
    }

    public function mover()
    {
        $this->personaje->mover();
    }
}
