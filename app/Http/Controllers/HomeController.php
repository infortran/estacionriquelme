<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function __construct()
    {

    }


    public function index(){
        return view('theme.template', ['categorias' => Categoria::All()]);
    }

    public function mantencion(){
        return view('admin.templates.mantencion');
    }
}
