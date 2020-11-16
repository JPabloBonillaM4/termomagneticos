<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\ProjectSubcategorie;

class SubcategoriesController extends Controller
{
    public function index(){
        $subcategories = ProjectSubcategorie::GetAllSubcategories();
        return view('pages.administrador.pages.subcategorias.index')->with('subcategories', $subcategories);
    }

    public function show($id)
    {
        //
    }

    public static function getAllSubcategories(){
        try {
            $subcategories = ProjectSubcategorie::GetAllSubcategories();
            if(!is_null($subcategories) && $subcategories->count() > 0){
                return $subcategories;
            } else {
                return collect();
            }
        } catch (\Throwable $th) {
            return response()->json([
                'error'   => true,
                'message' => 'Ocurrío un error al obtener las cotizaciones'
            ]);
        }
    }

    public function create()
    {
        return view('pages.administrador.pages.subcategorias.create');
    }

    public function store(Request $request)
    {
        $error     = false;
        $message   = null;
        $errorData = null;
        try {
            $subcategoryCreated = ProjectSubcategorie::CreateNewSubcategory($request);
            if($subcategoryCreated == true){
                $message = 'Registro exitoso';
            } else {
                $error   = true;
                $message = 'No se pudo completar el registro';
                $errorData = $subcategoryCreated['errorData'];
            } 
        } catch (\Throwable $th) {
            $error     = true;
            $message   = 'Ocurrió un error durante el registro';
            $errorData = $th->getMessage();
        }
        return response()->json([
            'error'      => $error,
            'message'    => $message,
            'errorData'  => $errorData,
            'redirectTo' => 'categorias'
        ]);
    }

    public function destroy($id)
    {
        $error     = false;
        $message   = null;
        $errorData = null;
        try {
            if(filter_var($id,FILTER_VALIDATE_INT) && (int)$id > 0){
                $subcategorie         = ProjectSubcategorie::find($id);
                $subcategorie_deleted = ProjectSubcategorie::DeleteSubcategorie($id);
                if($subcategorie_deleted){
                    $message = 'Categoria eliminada correctamente';
                } else {
                    $error   = true;
                    $message = 'No se pudo eliminar la categoria';
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

    public function edit($id)
    {
        $error        = false;
        $message      = null;
        $errorData    = null;
        $subcategorie = null;
        try {
            if(filter_var($id,FILTER_VALIDATE_INT) && (int)$id > 0){
                $subcategorieObtained = ProjectSubcategorie::find($id);
                if(!is_null($subcategorieObtained)){
                    $subcategorie = $subcategorieObtained;
                } else {
                    $error   = true;
                    $message = 'Subcategoria no encontrada';
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

    public function update(Request $request)
    {
        $error     = false;
        $message   = null;
        $errorData = null;
        try {
            if(filter_var($request->id,FILTER_VALIDATE_INT) && (int)$request->id > 0){
                $subcategorie = ProjectSubcategorie::find($request->id);
                $subcategorie = ProjectSubcategorie::UpdateSubcategorie($request);
                if(!is_null($subcategorie)){
                    $message = 'Actualización exitosa';
                } else {
                    $error   = true;
                    $message = 'No se pudo actualizar';
                    $errorData = $subcategorie['errorData'];
                }
            } else {
                $error   = true;
                $message = 'ID inválido';
            }
        } catch (\Throwable $th) {
            $error     = true;
            $message   = 'Ocurrió un error durante el registro';
            $errorData = $th->getMessage();
        }
        return response()->json([
            'error'     => $error,
            'message'   => $message,
            'errorData' => $errorData
        ]);
    }
}
