@extends('layouts.site')

@section('content')
    <div class="container">
        <div class="container">
            <table class="table table-striped">
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Genero</th>
                    <th>Preço</th>
                    <th>Ações</th>
                </tr>
                @foreach ($vendas as $venda)
                    <tr>
                        <td>{{$venda->id}}</a></td>
                        <td>{{$venda->produto_id}}</td>
                        <td>{{$venda->produto_id}}</td>
                        <td>{{$venda->produto_id}}</td>

                        <td>
                            <a class="btn btn-danger" href="{{route('venda.delete', $venda->id)}}" role="button">Deletar</a>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
    {{-- {{vendas.delete->links()}} --}}
@endsection
