@extends('layouts.app')

@section('content')
<div class="container m-3">

    <div class="row mt-4">
        <div class="col-md-12">
            <h1>Mis Productos</h1>
        </div>
    </div>

    <div class="row pt-4">
        <div class="col-md-12">
            <a class="btn btn-outline-primary" href="/store/create">Crear producto</a>
        </div>
    </div>

    <div class="row py-4">
        @foreach($products as $product)
        <div class="col-12 col-sm-6 col-lg-3 m-4">
            <div class="card" style="width: 18rem;">
                <img src="{{ $product->image_url }}" class="card-img-top" alt="Imagen del producto">
                <div class="card-body">
                    <h5 class="card-title">{{ $product->name }}</h5>
                    <p class="card-text">{{ $product->description }}</p>
                    <p class="card-text">${{ $product->price }}</p>
                    <a href="/store/{{ $product->id }}" class="btn btn-primary">Ver Producto</a>
                </div>
            </div>
        </div>
        @endforeach
        <!--
            <table class="table table-hover table-responsive-sm table-bordered">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Imagen</th>
                        <th scope="col">Descripción</th>
                        <th scope="col">Precio</th>
                        <th scope="col">Stock</th>
                        <th scope="col">Estado</th>
                        <th scope="col">Garantía</th>
                        <th scope="col">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">{{ $product->id }}</th>
                        <td>{{ $product->name }}</td>
                        <td><img src="{{ $product->image_url }}" alt="{{ $product->image_url }}" width="100" height="100"></td>
                        <td>{{ $product->description }}</td>
                        <td>{{ $product->price }}</td>
                        <td>{{ $product->stock }}</td>
                        <td>{{ $product->status }}</td>
                        <td>{{ $product->warranty }}</td>
                        <td>
                            <form action="/store/{{ $product->id }}" method="post">
                                @csrf
                                @method('DELETE')

                                <a href="/store/{{ $product->id }}" class="btn btn-outline-info">
                                    Detalles
                                </a>
                                <a href="/store/{{ $product->id }}/edit" class="btn btn-outline-primary">
                                    Editar
                                </a>
                                <button type="submit" class="btn btn-outline-danger" onclick="confirm('¿Está seguro de querer eliminar el producto?')">
                                    Eliminar
                                </button>
                            </form>
                        </td>
                    </tr>
                </tbody>
            </table>
            -->
    </div>
</div>
@endsection