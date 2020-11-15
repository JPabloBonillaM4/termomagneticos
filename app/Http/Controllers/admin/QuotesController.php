<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Quote;

class QuotesController extends Controller
{
    public function index(){
        $quotes = Quote::GetAllQuotes();
        return view('pages.administrador.pages.cotizaciones.index')->with('quotes',$quotes);
    }

    public static function getAllQuotes(){
        try {
            $quotes = Quote::GetAllQuotes();
            if(!is_null($quotes) && $quotes->count() > 0){
                return $quotes;
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

    public function destroy($id)
    {
        $error     = false;
        $message   = null;
        $errorData = null;
        try {
            if(filter_var($id,FILTER_VALIDATE_INT) && (int)$id > 0){
                $quote         = Quote::find($id);
                $quote_deleted = Quote::DeleteQuote($id);
                if($quote_deleted){
                    $message = 'Cotización eliminada correctamente';
                } else {
                    $error   = true;
                    $message = 'No se pudo eliminar la cotización';
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
