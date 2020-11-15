<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\cotizacionMail;
use App\Mail\citaMail;
use Illuminate\Support\Facades\Mail;
use App\Cite;
use App\Quote;

class EmailController extends Controller
{
    public function sendEmailCotizacion(Request $request){
        try {
            Quote::NewQuote($request);
            Mail::to('dianagc0120@gmail.com')->send(new cotizacionMail($request));
            return redirect()->back()->with(array(
                'type'    => 'green',
                'message' => array(
                    'title' => 'Éxito',
                    'text'  => 'Envío de cotización exitoso'
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
            Cite::NewCite($request);
            Mail::to('dianagc0120@gmail.com')->send(new citaMail($request));
            return redirect()->back()->with(array(
                'type'    => 'green',
                'message' => array(
                    'title' => 'Éxito',
                    'text'  => 'Envío de cita exitoso'
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
