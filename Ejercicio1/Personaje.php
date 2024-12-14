<?php

interface Personaje
{
    public function atacar();
    public function mover();
}

class Esqueleto implements Personaje
{
    public function atacar()
    {
        echo "Esqueleto ataca con cuchillos!\n";
    }

    public function mover()
    {
        echo "Esqueleto se mueve a media velocidad.\n";
    }
}

class Zombi implements Personaje
{
    public function atacar()
    {
        echo "Zombi muerde para atacar!\n";
    }

    public function mover()
    {
        echo "Zombi se mueve poco a poco lentamente.\n";
    }
}
