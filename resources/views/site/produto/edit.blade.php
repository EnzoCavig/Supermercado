@extends('layouts.site')

@section('content')

    <div class="col-md-6 offset-md-3">
        <form method="post" action="{{route('produto.update', $produto->id)}}">
            @csrf
            <div class="form-group">
                <label for="categoria_id">Genero</label>
                <select name="categoria_id" id="categoria_id" class="form-control">
                    @foreach($categoria as $gender)
                        <option value="{{$gender->id}}">{{$gender->name}}</option>
                    @endforeach
                </select>
            </div>
            <pre></pre>
            <div class="form-group">
                <label for="name">Nome</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Nome do Disco LP" value="{{$produto->name}}">
            </div>
            <pre></pre>
            <div class="form-group">
                <label for="description">Descrição</label>
                <input type="text" class="form-control" id="description" name="description" placeholder="Descrição" value="{{$produto->description}}">
            </div>
            <pre></pre>
            <div class="form-group">
                <label for="validade">Validade</label>
                <input type="number" class="form-control" id="validade" name="validade" placeholder="Validade" value="{{$produto->validade}}">
            </div>
            <pre></pre>
            <div class="form-group">
                <label for="price">Preço</label>
                <input type="number" class="form-control" id="price" name="price" placeholder="Preço" value="{{$produto->price}}" step="0.01">
            </div>
            <pre></pre>
            <button type="submit" class="btn btn-primary">Alterar</button>
        </form>
    </div>

@endsection
