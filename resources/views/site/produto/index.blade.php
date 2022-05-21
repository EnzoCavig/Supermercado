@extends('layouts.site')

@section('content')
    <div class="container">
        <div class="flex">
            @foreach($produto as $disk)
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">{{$disk->name}}</h5>
                        <p class="card-text">{{$disk->description}}</p>
                        <form method="post" action="{{route('produto.purchase', $disk->id)}}">
                            @csrf
                            <button type="submit" class="btn btn-success" name="produto_id" id="produto_id" value="{{$disk->id}}">Compre com um clique por R${{$disk->price}}</button>
                        </form>
                    </div>
                </div>
            @endforeach
        </div>
        <a href="{{route('home')}}" class="btn btn-danger"> Voltar</a>
    </div>
@endsection
