<?php

namespace App\Controllers;
//utilizar el modelo
use App\Models\CiudadanosModel;

class Ciudadanos extends BaseController
{
    public function index(): string
    {
        $ciuda = new CiudadanosModel();
        //FindAll = select * from nivelesacademicosModel
        $datos['datos']=$ciuda->findAll();

        return view('ciudadanos',$datos);
    }
}