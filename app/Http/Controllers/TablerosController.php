<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TablerosController extends Controller
{
    public function index(){
        return view('pages.tableros.index');
    }
}
