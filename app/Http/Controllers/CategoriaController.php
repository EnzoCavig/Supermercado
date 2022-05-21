<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use App\Models\Categoria;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categorias = Categoria::paginate(6);

        return view('site.categoria.list', ['categorias' => $categorias]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('site.categoria.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Categoria::create($request->except('_token'));

        return redirect('gender');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\gender  $gender
     * @return \Illuminate\Http\Response
     */
    public function show(int $gender)
    {
        $produto = Produto::where('categoria_id','=',$gender)->get();

        return view('site.produto.index',['produto' => $produto]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\gender  $gender
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $gender = Categoria::find($id);

        return view('site.categoria.edit', ['gender' => $gender]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\gender  $gender
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, int $id)
    {
        Categoria::where('id', $id)->update([
            'name' => $request->name
        ]);

        return redirect('gender');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\gender  $gender
     * @return \Illuminate\Http\Response
     */
    public function destroy($categoria_id)
    {
        Categoria::where('id', $categoria_id)->delete();
        return redirect('gender');
    }
}
