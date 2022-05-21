@extends('layouts.site')

@section('content')

    <div class="col-md-6 offset-md-3">
        <form method="post" action="{{route('produto.store')}}">
            @csrf
            <div class="form-group">
                <label for="categoria_id">Gênero</label>
                <select name="categoria_id" id="categoria_id" class="form-control">
                    @foreach($gender as $gender)
                        <option value="{{$gender->id}}">{{$gender->name}}</option>
                    @endforeach
                </select>
            </div>
            <br>
            <div class="form-group">
                <label for="name">Nome</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Nome">
            </div>
            <br>
            <div class="form-group">
                <label for="description">Descrição</label>
                <input type="text" class="form-control" id="description" name="description" placeholder="Descrição">
            </div>
            <br>
            <div class="form-group">
                <label for="validade">Validade</label>
                <input type="number" class="form-control" id="validade" name="validade" placeholder="Validade" min="0" value="0" step="any">
            </div>
            <br>
            <div class="form-group">
                <label for="price">Preço</label>
                <input type="number" class="form-control" id="price" name="price" placeholder="Preço" step="0.01">
            </div>
            <br>
            <button type="submit" class="btn btn-primary">Cadastrar</button>
        </form>
    </div>

@endsection
