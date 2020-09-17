<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Componente;

class ComponenteController extends Controller
{
    public function index(){
        $components = Componente::GetAllComponents();
        return view('pages.componentes.index', compact('components'));
    }

    public function show($id){
        try {
            if(is_numeric((int)$id) && (int)$id > 0){
                $component = Componente::GetComponent($id);
                if(!is_null($component))
                    return $component;
            }
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}
