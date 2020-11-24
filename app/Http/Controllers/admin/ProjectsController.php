<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\ProjectSubcategorie;
// use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;
use App\Project;
use App\CarouselImage;
use Carbon\Carbon;

class ProjectsController extends Controller
{
    public function index(){
        $projects = Project::GetAllProjects();
        return view('pages.administrador.pages.proyectos.index',compact('projects'));
    }

    public static function getAllProjects(){
        return Project::GetAllProjects();
    }

    public function create()
    {
        $subcategories = ProjectSubcategorie::all();
        return view('pages.administrador.pages.proyectos.create',compact('subcategories'));
    }

    public function show($id)
    {
        //
    }

    public function store(Request $request)
    {
        $error     = false;
        $message   = null;
        $errorData = null;
        try {
            $request->validate([
                'images.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'
            ]);
            $proyecto = Project::create([
                'title' => $request->title,
                'subcategory_id' => $request->categorie_id
            ]);
            $url_images = [];
            if ($request->hasFile('images')){
                foreach ($request->file('images') as $image) {
                    $url = '';
                    $date    = Carbon::now();
                    $targets = array(' ', ':');
                    $date    = str_replace($targets, '-', $date);
                    $imgName  = $date . '.' . str_replace(' ','_',$image->getClientOriginalName());
                    $url = Storage::url('images/projects/'.$imgName);
                    $url_images[] = new CarouselImage(['image_url' => $url]);
                    $image->storeAs('public/images/projects',$imgName);
                    // $imagen = $image->store('public/images/projects');
                    // $url = Storage::url($imagen);
                }
                $proyecto->images()->saveMany($url_images);
            }
            if($proyecto->id){
                $message = 'Registro exitoso';
            } else {
                $error   = true;
                $message = 'No se pudo completar el registro';
                $errorData = $subcategoryCreated['errorData'];
            } 
        } catch (\Throwable $th) {
            $error     = true;
            $message   = 'Imágenes inválidas o muy pesadas(reduzca el tamaño)';
            $errorData = $th->getMessage();
        }
        return response()->json([
            'error'      => $error,
            'message'    => $message,
            'errorData'  => $errorData,
            'redirectTo' => 'proyectos'
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
