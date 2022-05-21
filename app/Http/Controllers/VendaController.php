<?php

namespace App\Http\Controllers;

use App\Models\Venda;
use Illuminate\Http\Request;
use Monolog\Handler\SlackHandler;

class VendaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vendas = Venda::paginate(7);

        return view('site.venda.list', ['vendas' => $vendas]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Venda  $vendas
     * @return \Illuminate\Http\Response
     */
    public function show(Venda $vendas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Venda  $vendas
     * @return \Illuminate\Http\Response
     */
    public function edit(Venda $vendas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Venda  $vendas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Venda $vendas)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Venda  $vendas
     * @return \Illuminate\Http\Response
     */
    public function destroy(int $id)
    {
        Venda::where('id', $id)->delete();
        return redirect('venda');
    }

    public function purchase(Request $request, int $produto_id)
    {
        Venda::create($request->except('_token'));

        return redirect('venda');
    }
}
