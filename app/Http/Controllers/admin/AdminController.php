<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\admin\CitesController;
use App\Http\Controllers\admin\QuotesController;

class AdminController extends Controller
{
    public function index(){
        $data        = (object)[];
        $data->citas = CitesController::getAllCites();
        $data->quotes = QuotesController::getAllQuotes();
        return view('pages.administrador.pages.dashboard')->with('data', $data);
    }
}
