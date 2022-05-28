@extends('layouts.site')

@section('content')
    <div class="container">
        <div class="container">
            <table class="table table-striped">
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Ações</th>
                </tr>
                @foreach ($categorias as $categoria)
                    <tr>
                        <td>{{$categoria->id}}</a></td>
                        <td>{{$categoria->name}}</td>
                        <td>
                            <a class="btn btn-warning" href="{{route('categoria.edit', $categoria->id)}}" role="button">Alterar</a>
                            <a class="btn btn-danger" href="{{route('categoria.delete', $categoria->id)}}" role="button">Deletar</a>
                        </td>
                    </tr>
                @endforeach
            </table>
            <a class="btn btn-success" href="{{route('categoria.create')}}" role="button">Adicionar Categoria</a>
        </div>
    </div>
    {{$categorias->links()}}
@endsection
