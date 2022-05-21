@extends('layouts.site')

@section('content')

    <div class="col-md-6 offset-md-3">
        <form method="post" action="{{route('gender.store')}}">
            @csrf
            <div class="form-group">
                <label for="name">Gênero</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Gênero">
            </div>
            <pre></pre>
            <button type="submit" class="btn btn-primary">Cadastrar</button>
        </form>
    </div>

@endsection
