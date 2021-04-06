<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Producto;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        $data = [
            'productos' => Producto::all(),
            'categorias' => Categoria::all()
        ];
        return view('admin.home.index', $data);
    }
}
