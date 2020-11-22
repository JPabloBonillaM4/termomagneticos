<?php

namespace App\Http\Controllers;
use App\Project;

use Illuminate\Http\Request;

class ProjectsController extends Controller
{
    public function indexConstruccion(){
        $proyectos = Project::where('subcategory_id',1)->get();
        return view('pages.construccion.index', compact('proyectos'));
    }
    public function indexCasosExito(){
        $proyectos = Project::where('subcategory_id',2)->get();
        return view('pages.casos-exito.index', compact('proyectos'));
    }
    public function indexBlindaje(){
        $proyectos = Project::where('subcategory_id',3)->get();
        return view('pages.blindaje.index', compact('proyectos'));
    }
    public function indexCristales(){
        $proyectos = Project::where('subcategory_id',4)->get();
        return view('pages.cristales.index', compact('proyectos'));
    }
    public function indexPuertas(){
        $proyectos = Project::where('subcategory_id',5)->get();
        return view('pages.puertas.index', compact('proyectos'));
    }
}
