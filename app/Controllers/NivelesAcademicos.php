<?php

namespace App\Controllers;
//utilizar el modelo
use App\Models\NivelesAcademicosModel;

class NivelesAcademicos extends BaseController
{
    public function index(): string
    {
        $nivelesAcademicos = new NivelesAcademicosModel();
        //FindAll = select * from nivelesacademicosModel
        $datos['datos']=$nivelesAcademicos->findAll();

        return view('niveles_academicos',$datos);
    }
}