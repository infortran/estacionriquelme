<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Donation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{

    public function __construct()
    {

    }


    public function index(){
        return view('theme.templates.main', ['categorias' => Categoria::All()]);
    }

    public function mantencion(){
        return view('admin.templates.mantencion');
    }

    public function cuenta(){
        if(Auth::check()){
            if(Auth::user()->role == 'admin'){
                return redirect('/admin');
            }
            Auth::loginUsingId(Auth::user()->id, $remember = true);
            return view('admin.home.index', ['cupones' => Auth::user()->donations]);
        }
        return redirect('/login');
    }

    public function configuracion(){
        if(Auth::check()){
            return view('admin.configuration.index');
        }
        return redirect('/login');
    }

    public function carta(){
        return view('carta.index',  ['categorias' => Categoria::All()]);
    }
}
