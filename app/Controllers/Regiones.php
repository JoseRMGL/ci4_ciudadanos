<?php

namespace App\Controllers;
//utilizar el modelo
use App\Models\RegionesModel;

class Regiones extends BaseController
{
    public function index(): string
    {
        $region = new RegionesModel();
        //FindAll = select * from regiones
        $datos['datos']=$region->findAll();

        return view('regiones',$datos);
        
    }
}