<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Categoria;

class HomeController extends Controller
{
    public function index() {

        return view('site.categoria.index', ['categorias'=>Categoria::all()]);
    }
}
