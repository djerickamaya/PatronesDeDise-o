<?php
require_once 'Archivo.php';

class ArchivoWordWindows10 implements Archivo
{
    public function abrir()
    {
        echo "Abriendo archivo Word en Windows 10\n";
    }
}

class ArchivoExcelWindows10 implements Archivo
{
    public function abrir()
    {
        echo "Abriendo archivo Excel en Windows 10\n";
    }
}

class ArchivoPowerPointWindows10 implements Archivo
{
    public function abrir()
    {
        echo "Abriendo archivo PowerPoint en Windows 10\n";
    }
}
