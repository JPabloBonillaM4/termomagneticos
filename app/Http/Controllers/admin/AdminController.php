<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\admin\CitesController;

class AdminController extends Controller
{
    public function index(){
        $data        = (object)[];
        $data->citas = CitesController::getAllCites();
        return view('pages.administrador.pages.dashboard')->with('data', $data);
    }
}
