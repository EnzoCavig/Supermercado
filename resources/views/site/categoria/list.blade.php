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
                @foreach ($categoria as $gender)
                    <tr>
                        <td>{{$gender->id}}</a></td>
                        <td>{{$gender->name}}</td>
                        <td>
                            <a class="btn btn-warning" href="{{route('categoria.edit', $gender->id)}}" role="button">Alterar</a>
                            <a class="btn btn-danger" href="{{route('categoria.delete', $gender->id)}}" role="button">Deletar</a>
                        </td>
                    </tr>
                @endforeach
            </table>
            <a class="btn btn-success" href="{{route('categoria.create')}}" role="button">Adicionar Gênero</a>
        </div>
    </div>
    {{$categoria->links()}}
@endsection
