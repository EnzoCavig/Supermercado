@extends('layouts.site')

@section('content')

    <div class="col-md-6 offset-md-3">
        <form method="post" action="{{route('categoria.update', $categoria->id)}}">
            @csrf
            <div class="form-group">
                <label for="name">Categoria</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Categoria" value="{{$categoria->name}}">
            </div>
            <pre></pre>
            <button type="submit" class="btn btn-primary">Alterar</button>
        </form>
    </div>

@endsection
