<?php
class PersonajeFactory
{
    public static function crearPersonaje(string $nivel): Personaje
    {
        if (strtolower($nivel) == 'facil') {
            return new Esqueleto();
        } elseif (strtolower($nivel) == 'dificil') {
            return new Zombi();
        } else {
            throw new InvalidArgumentException("Nivel de juego desconocido: " . $nivel);
        }
    }
}
