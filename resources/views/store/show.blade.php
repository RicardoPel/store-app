@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-md-6">
        <div class="card m-3 p-3">
            <div class="col-md-12">
                <h1>{{ $product->name }}</h1>
            </div>
            <div class="card-body">

                <h5 class="card-title pt-4">Precio: {{ $product->price }}</h5>
                <p class="card-text">
                    {{ $product->description }}
                </p>
                <p class="card-text">
                    Estado: {{ $product->status }}
                </p>
                <p class="card-text">
                    Garantía: {{ $product->warranty }}
                </p>
                <p class="card-text">
                    En stock: {{ $product->stock }}
                </p>
                <form action="/store/{{ $product->id }}" method="post">
                    @csrf
                    @method('DELETE')

                    <a href="/store" class="btn btn-outline-info">
                        Volver
                    </a>
                    <a href="/store/{{ $product->id }}/edit" class="btn btn-outline-primary">
                        Editar
                    </a>
                    <button type="submit" class="btn btn-outline-danger" onclick="confirm('¿Está seguro de querer eliminar el producto?')">
                        Eliminar
                    </button>
                </form>

            </div>
        </div>
    </div>
    <div class="col-sm-6">
        <div class="card m-3 p-3 text-center">
            <div class="card-img-top">
                <img src="../{{ $product->image_url }}" width="350" class="" alt="{{ $product->image_url }}">
            </div>
        </div>
    </div>
</div>
@endsection