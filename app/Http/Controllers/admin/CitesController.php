<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Cite;

class CitesController extends Controller
{
    public function index(){
        $citas = Cite::GetAllCites();
        return view('pages.administrador.pages.citas.index')->with('cites',$citas);
    }

    public function edit($id)
    {
        return $id;
    }

    public function destroy($id)
    {
        $error     = false;
        $message   = null;
        $errorData = null;
        try {
            if(filter_var($id,FILTER_VALIDATE_INT) && (int)$id > 0){
                $cite         = Cite::find($id);
                $cite_deleted = Cite::DeleteUser($id);
                if($cite_deleted){
                    $message = 'Cita eliminada correctamente';
                } else {
                    $error   = true;
                    $message = 'No se pudo eliminar la cita';
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

    public function getCites(Request $request){
        try {
            $citas = Cite::GetCitesByDate($request->date);
            if((int)$request->dayOfWeek == 6 && $citas->count() == 9){
                return response()->json([
                    'error'   => true,
                    'message' => 'Todas las citas han sido ocupadas, favor de elegir otra fecha',
                ]);
            }
            elseif(!is_null($citas) && $citas->count() < 19){
                return response()->json([
                    'error'           => false,
                    'message'         => 'Citas disponibles',
                    'citesRegistered' => $citas->pluck('time')
                ]);
            } else if(!is_null($citas) && $citas->count() == 19){
                return response()->json([
                    'error'   => true,
                    'message' => 'Todas las citas han sido ocupadas, favor de elegir otra fecha',
                ]);
            }
        } catch (\Throwable $th) {
            return response()->json([
                'error'   => true,
                'message' => 'Ocurrío un error durante el proceso de revisión de citas'
            ]);
        }
    }

    public static function getAllCites(){
        try {
            $citas = Cite::GetAllCites();
            if(!is_null($citas) && $citas->count() > 0){
                return $citas;
            } else {
                return collect();
            }
        } catch (\Throwable $th) {
            return response()->json([
                'error'   => true,
                'message' => 'Ocurrío un error al obtener las citas'
            ]);
        }
    }
}
