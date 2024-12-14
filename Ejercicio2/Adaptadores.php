<?php

require_once 'Archivo.php';
require_once 'ArchivoWindows7.php';

class AdaptadorWordWindows7 implements Archivo
{
    private $archivoWordWindows7;

    public function __construct(ArchivoWordWindows7 $archivoWordWindows7)
    {
        $this->archivoWordWindows7 = $archivoWordWindows7;
    }

    public function abrir()
    {
        $this->archivoWordWindows7->abrirArchivo();
    }
}

class AdaptadorExcelWindows7 implements Archivo
{
    private $archivoExcelWindows7;

    public function __construct(ArchivoExcelWindows7 $archivoExcelWindows7)
    {
        $this->archivoExcelWindows7 = $archivoExcelWindows7;
    }

    public function abrir()
    {
        $this->archivoExcelWindows7->abrirArchivo();
    }
}

class AdaptadorPowerPointWindows7 implements Archivo
{
    private $archivoPowerPointWindows7;

    public function __construct(ArchivoPowerPointWindows7 $archivoPowerPointWindows7)
    {
        $this->archivoPowerPointWindows7 = $archivoPowerPointWindows7;
    }

    public function abrir()
    {
        $this->archivoPowerPointWindows7->abrirArchivo();
    }
}
