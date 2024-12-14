<?php

require_once 'Archivo.php';
require_once 'ArchivoWindows10.php';
require_once 'ArchivoWindows7.php';
require_once 'Adaptadores.php';

class Programa
{
    public static function main()
    {
        $archivoWord10 = new ArchivoWordWindows10();
        $archivoExcel10 = new ArchivoExcelWindows10();
        $archivoPowerPoint10 = new ArchivoPowerPointWindows10();

        $archivoWord10->abrir();
        $archivoExcel10->abrir();
        $archivoPowerPoint10->abrir();

        $archivoWord7 = new AdaptadorWordWindows7(new ArchivoWordWindows7());
        $archivoExcel7 = new AdaptadorExcelWindows7(new ArchivoExcelWindows7());
        $archivoPowerPoint7 = new AdaptadorPowerPointWindows7(new ArchivoPowerPointWindows7());

        $archivoWord7->abrir();
        $archivoExcel7->abrir();
        $archivoPowerPoint7->abrir();
    }
}

Programa::main();
