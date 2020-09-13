<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Componente;

class ComponenteController extends Controller
{
    public function index(){
        $components = Componente::GetAllComponents();
        return view('pages.componentes.index',compact('components'));
    }

    public function show($id){
        dd($id);
    }
}
