<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\cotizacionMail;
use Illuminate\Support\Facades\Mail;

class EmailController extends Controller
{
    public function sendEmailCotizacion(Request $request){
        try {
            Mail::to('contacto@termomagneticos.com')->send(new cotizacionMail($request));
            return redirect()->back();
        } catch (\Throwable $th) {
            return redirect()->back();
        }
    }
}
