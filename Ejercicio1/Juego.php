<?php
require_once 'Personaje.php';
require_once 'PersonajeFactory.php';

class Juego
{
    public static function main()
    {
        try {
            $personajeFacil = PersonajeFactory::crearPersonaje('facil');
            $personajeFacil->atacar();
            $personajeFacil->mover();

            $personajeDificil = PersonajeFactory::crearPersonaje('dificil');
            $personajeDificil->atacar();
            $personajeDificil->mover();
        } catch (InvalidArgumentException $e) {
            echo $e->getMessage();
        }
    }
}

Juego::main();
