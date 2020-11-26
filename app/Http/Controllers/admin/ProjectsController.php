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
        $subcategories = ProjectSubcategorie::all();
        return view('pages.administrador.pages.proyectos.index',compact('projects','subcategories'));
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
                'title'          => $request->title,
                'subcategory_id' => $request->categorie_id
            ]);
            $url_images = [];
            if ($request->hasFile('images')){
                foreach ($request->file('images') as $image) {
                    $url          = '';
                    $date         = Carbon::now();
                    $targets      = array(' ', ':');
                    $date         = str_replace($targets, '-', $date);
                    $imgName      = $date . '.' . str_replace(' ','_',$image->getClientOriginalName());
                    $url          = Storage::url('images/projects/'.$imgName);
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
                $error     = true;
                $message   = 'No se pudo completar el registro';
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

    public function update(Request $request)
    {
        $error     = false;
        $message   = null;
        $errorData = null;
        try {
            if(filter_var($request->id,FILTER_VALIDATE_INT) && (int)$request->id > 0){
                $proyecto         = Project::find($request->id);
                $proyecto_updated = Project::UpdateProject($request);
                $url_images       = [];
                if ($request->hasFile('images')){
                    foreach ($request->file('images') as $image) {
                        $url          = '';
                        $date         = Carbon::now();
                        $targets      = array(' ', ':');
                        $date         = str_replace($targets, '-', $date);
                        $imgName      = $date . '.' . str_replace(' ','_',$image->getClientOriginalName());
                        $url          = Storage::url('images/projects/'.$imgName);
                        $url_images[] = new CarouselImage(['image_url' => $url]);
                        $image->storeAs('public/images/projects',$imgName);
                    }
                    $proyecto->images()->saveMany($url_images);
                }
                if($proyecto_updated){
                    $message = 'Actualización exitosa';
                } else {
                    $error     = true;
                    $message   = 'No se pudo actualizar';
                    $errorData = $proyecto_updated['errorData'];
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
                    $message = 'Proyecto eliminado correctamente';
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

    public function reactiveProject($id){
        $error     = false;
        $message   = null;
        $errorData = null;
        try {
            if(filter_var($id,FILTER_VALIDATE_INT) && (int)$id > 0){
                $project         = Project::find($id);
                $project_deleted = Project::ReactiveProject($id);
                if($project_deleted){
                    $message = 'Proyecto reactivado correctamente';
                } else {
                    $error   = true;
                    $message = 'No se pudo reactivar el proyecto';
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

    public function getImagesProject($id){
        $error     = false;
        $message   = null;
        $errorData = null;
        $project   = [];
        try {
            if(filter_var($id,FILTER_VALIDATE_INT) && (int)$id > 0){
                $project         = Project::find($id);
                if(is_null($project)) {
                    $error   = true;
                    $message = 'No se pudo obtener los datos del proyecto';
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
            'project'   => $project
        ]);
    }

    public function deleteImageProject($id = 0){
        $error     = false;
        $message   = null;
        $errorData = null;
        try {
            if(filter_var($id,FILTER_VALIDATE_INT) && (int)$id > 0){
                $image_deleted = CarouselImage::DeleteImage($id);
                if($image_deleted) {
                    $message = 'Imagen eliminada correctamente';
                } else {
                    $error   = true;
                    $message = 'La imagen no pudo eliminarse correctamente, intente de nuevo';
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
