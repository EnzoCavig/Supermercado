@extends('layouts.site')

@section('content')

    <div class="col-md-6 offset-md-3">
        <form method="post" action="{{route('categoria.store')}}">
            @csrf
            <div class="form-group">
                <label for="name">Categoria</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Categoria">
            </div>
            <pre></pre>
            <button type="submit" class="btn btn-primary">Cadastrar</button>
        </form>
    </div>

@endsection
