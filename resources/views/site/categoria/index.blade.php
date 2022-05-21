@extends('layouts.site')

@section('content')
    <div class="container">
        <div class="container">
            <div class="flex">
                @foreach($categorias as $categoria)
                    <div class="card" style="width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-title">{{$categoria->name}}</h5>
                            <a href="{{route('show.produto', ['categoria' => $categoria->id])}}" class="btn btn-primary">{{$categoria->name}}</a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
