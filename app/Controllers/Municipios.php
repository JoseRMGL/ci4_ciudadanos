<?php

namespace App\Controllers;
//utilizar el modelo
use App\Models\MunicipiosModel;

class Municipios extends BaseController
{
    public function index(): string
    {
        $muni = new MunicipiosModel();
        //FindAll = select * from nivelesacademicosModel
        $datos['datos']=$muni->findAll();

        return view('municipios',$datos);
    }
}