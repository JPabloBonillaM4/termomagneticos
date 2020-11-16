<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\admin\CitesController;
use App\Http\Controllers\admin\QuotesController;
use App\Http\Controllers\admin\SubcategoriesController;

class AdminController extends Controller
{
    public function index(){
        $data        = (object)[];
        $data->citas = CitesController::getAllCites();
        $data->quotes = QuotesController::getAllQuotes();
        $data->subcategories = SubcategoriesController::getAllSubcategories();
        return view('pages.administrador.pages.dashboard')->with('data', $data);
    }
}
