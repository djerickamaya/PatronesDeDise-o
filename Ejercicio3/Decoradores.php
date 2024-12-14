<?php

require_once 'PersonajeDecorator.php';

class ConEspada extends PersonajeDecorator
{
    public function atacar()
    {
        $this->personaje->atacar();
        echo " usando una espada poderosa.\n";
    }
}

class ConArco extends PersonajeDecorator
{
    public function atacar()
    {
        $this->personaje->atacar();
        echo " usando un arco de largo alcance.\n";
    }
}

class ConHacha extends PersonajeDecorator
{
    public function atacar()
    {
        $this->personaje->atacar();
        echo " usando una hacha devastadora.\n";
    }
}
