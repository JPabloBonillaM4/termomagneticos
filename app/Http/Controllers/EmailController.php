<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\cotizacionMail;
use App\Mail\citaMail;
use Illuminate\Support\Facades\Mail;

class EmailController extends Controller
{
    public function sendEmailCotizacion(Request $request){
        try {
            Mail::to('dianagc0120@gmail.com')->send(new cotizacionMail($request));
            return redirect()->back()->with(array(
                'type'    => 'green',
                'message' => array(
                    'title' => 'Éxito',
                    'text'  => 'Envío de correo exitoso'
                )
            ));
        } catch (\Throwable $th) {
            return redirect()->back()->with(array(
                'type'    => 'red',
                'message' => array(
                    'title' => 'Error',
                    'text'  => 'Ocurrió un error al enviar el correo, inténtelo de nuevo'
                )
            ));
        }
    }

    public function sendEmailCite(Request $request){
        try {
            Mail::to('dianagc0120@gmail.com')->send(new citaMail($request));
            return redirect()->back()->with(array(
                'type'    => 'green',
                'message' => array(
                    'title' => 'Éxito',
                    'text'  => 'Envío de correo exitoso'
                )
            ));
        } catch (\Throwable $th) {
            return redirect()->back()->with(array(
                'type'    => 'red',
                'message' => array(
                    'title' => 'Error',
                    'text'  => 'Ocurrió un error al enviar el correo, inténtelo de nuevo'
                )
            ));
        }
    }
}
