<?php
namespace App\Models;

class Portafolio{
    public $info;

    public function Programando(){
        $this->info = "Desarrollo del programa durante la temporada de competencia";
        return $this->info;
    }

    public function Desarrollo(){
        $this->info = "Seccion del programa donde se destinan el control de los motores";
        return $this->info;
    }

    public function Desarrollo2(){
        $this->info = "Secion del programa en donde se desarrollo la vista desde el robot por medio de camaras";
        return $this->info;
    }

    public function Electronica(){
        $this->info = "Se realizo el diagrama y puesta en marcha de la conexión de cada uno de los elementos electronicos del robot, como son los motores, sensores y camaras";
        return $this->info;
    }
}