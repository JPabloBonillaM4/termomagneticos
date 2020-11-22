<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Project;
use App\ProjectSubcategorie;

class ProjectsController extends Controller
{
    public function index(){
        $projects = Project::GetAllProjects();
        return view('pages.administrador.pages.proyectos.index',compact('projects'));
    }

    public function create()
    {
        $subcategories = ProjectSubcategorie::all();
        return view('pages.administrador.pages.proyectos.create',compact('subcategories'));
    }

    public function edit($id)
    {
        $error        = false;
        $message      = null;
        $errorData    = null;
        $subcategorie = null;
        try {
            if(filter_var($id,FILTER_VALIDATE_INT) && (int)$id > 0){
                $subcategorieObtained = Project::find($id);
                if(!is_null($subcategorieObtained)){
                    $subcategorie = $subcategorieObtained;
                } else {
                    $error   = true;
                    $message = 'Proyecto no encontrado';
                }
            } else {
                $error   = true;
                $message = 'ID inválido';
            }
        } catch (\Throwable $th) {
            $error     = true;
            $message   = 'Ocurrió un error durante el proceso';
            $errorData = $th->getMessage();
        }

        return response()->json([
            'error'     => $error,
            'message'   => $message,
            'errorData' => $errorData,
            'data'      => $subcategorie
        ]);
    }

    public function destroy($id)
    {
        $error     = false;
        $message   = null;
        $errorData = null;
        try {
            if(filter_var($id,FILTER_VALIDATE_INT) && (int)$id > 0){
                $project         = Project::find($id);
                $project_deleted = Project::DeleteProject($id);
                if($project_deleted){
                    $message = 'Proyecto eliminada correctamente';
                } else {
                    $error   = true;
                    $message = 'No se pudo eliminar el proyecto';
                }
            } else {
                $error   = true;
                $message = 'ID inválido';
            }
        } catch (\Throwable $th) {
            $error     = true;
            $message   = 'Ocurrió un error durante el proceso';
            $errorData = $th->getMessage();
        }
        return response()->json([
            'error'     => $error,
            'message'   => $message,
            'errorData' => $errorData
        ]);
    }
}
