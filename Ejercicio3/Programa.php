<?php

require_once 'Personaje.php';
require_once 'PersonajeConcrete.php';
require_once 'PersonajeDecorator.php';
require_once 'Decoradores.php';

class Programa
{
    public static function main()
    {
        $guerrero = new Guerrero();
        $arquero = new Arquero();

        // Decorar guerrero con diferentes armas
        $guerreroConEspada = new ConEspada($guerrero);
        $guerreroConEspada->atacar();

        $guerreroConHacha = new ConHacha($guerrero);
        $guerreroConHacha->atacar();

        // Decorar arquero con diferentes armas
        $arqueroConArco = new ConArco($arquero);
        $arqueroConArco->atacar();

        $arqueroConEspada = new ConEspada($arquero);
        $arqueroConEspada->atacar();
    }
}

Programa::main();
