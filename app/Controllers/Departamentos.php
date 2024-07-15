<?php

namespace App\Controllers;
//utilizar el modelo
use App\Models\DepartamentosModel;

class Departamentos extends BaseController
{
    public function index(): string
    {
        $depto = new DepartamentosModel();
        //FindAll = select * from nivelesacademicosModel
        $datos['datos']=$depto->findAll();

        return view('departamentos',$datos);
    }
}