<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{

    public function index()
    {
        return view('admin.productos.index', ['productos' => Producto::paginate(10)]);
    }


    public function create()
    {
        return view('admin.productos.create', ['categorias' => Categoria::all()]);
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|max:100',
            'description' => 'max:365',
            'm_price' => 'required|numeric',
            's_price' => 'nullable',
            'categoria_id' => 'numeric',
            'm_capacity' => 'nullable',
            's_capacity' => 'nullable'
        ]);
        Producto::create($data);
        return redirect('/admin/productos/');
    }


    public function show(Producto $producto)
    {
        //
    }


    public function edit(Producto $producto)
    {
        return view('admin.productos.edit', ['producto' => $producto, 'categorias' => Categoria::all()]);
    }


    public function update(Request $request, Producto $producto)
    {
        //
    }


    public function destroy(Producto $producto)
    {
        //
    }
}
