<?php

namespace App\Http\Controllers;

use App\Models\Paquetes;
use App\Models\Profesores;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.index');
    }

    public function paquetes()
    {
        $paquetes = Paquetes::all();
        return view('admin.crudpaquetes.listarpaquetes', compact('paquetes'));
    }

    public function crear_paquete()
    {
        return "ACA SE CREARA UN PAQUETE";
    }

    public function editar_paquete($id)
    {
        return "ACA SE EDITARA EL PAQUETE CON ID: ".$id;
    }

    public function profesores()
    {
        $profes = Profesores::all();
        return view('admin.crudprofesores.listarprofes', compact('profes'));
    }

    public function crear_profesor()
    {
        return "ACA SE CREARA UN PROFESOR";
    }

    public function editar_profesor($id)
    {
        return view('admin.editar_profesor', compact('id'));
    }
}
