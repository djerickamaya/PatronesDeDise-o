<?php

require_once 'Personaje.php';

class Guerrero implements Personaje
{
    public function atacar()
    {
        echo "Guerrero ataca con espada.\n";
    }
    public function mover()
    {
        echo "Guerrero se mueve rápidamente.\n";
    }
}

class Arquero implements Personaje
{
    public function atacar()
    {
        echo "Arquero ataca con arco.\n";
    }
    public function mover()
    {
        echo "Arquero se mueve ágilmente.\n";
    }
}
