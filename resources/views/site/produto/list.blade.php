@extends('layouts.site')

@section('content')
    <div class="container">
        <div class="container">
            <table class="table table-striped">
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Genero</th>
                    <th>Validade</th>
                    <th>Preço</th>
                    <th>Ações</th>
                </tr>
                @foreach ($produtos as $produto)
                    <tr>
                        <td>{{$produto->id}}</a></td>
                        <td>{{$produto->name}}</td>
                        <td>{{$produto->categoria_id}}</td>
                        <td>{{$produto->validade}}</td>
                        <td>{{$produto->price}}</td>
                        <td>
                            <a class="btn btn-warning" href="{{route('produto.edit', $produto->id)}}" role="button">Alterar</a>
                            <a class="btn btn-danger" href="{{route('produto.delete', $produto->id)}}" role="button">Deletar</a>
                        </td>
                    </tr>
                @endforeach
            </table>
            <a class="btn btn-success" href="{{route('produto.create')}}" role="button">Adicionar Disco</a>
        </div>
    </div>
    {{$produtos->links()}}
@endsection
