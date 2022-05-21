<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use App\Models\Categoria;
use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $produto = Produto::paginate(7);

        return view('site.produto.list', ['produtos' => $produto]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $gender = Categoria::get();

        return view('site.produto.create', ['gender' => $gender]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Produto::create($request->except('_token'));

        return redirect('produto');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Produto  $produto
     * @return \Illuminate\Http\Response
     */
    public function show(Produto $produto)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Produto  $produto
     * @return \Illuminate\Http\Response
     */
    public function edit(int $id)
    {
        $produto = Produto::find($id);
        $categoria = Categoria::get();

        return view('site.produto.edit', compact('produto', 'categoria'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Produto  $produto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, int $id)
    {
        Produto::where('id', $id)->update([
            'categoria_id' => $request->categoria_id,
            'name' => $request->name,
            'description' => $request->description,
            'validade' => $request->validade,
            'price' => $request->price,
            'image' => $request->image
        ]);

        return redirect('produto');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Produto  $produto
     * @return \Illuminate\Http\Response
     */
    public function destroy(int $id)
    {
        Produto::where('id', $id)->delete();

        return redirect('produto');
    }
}
