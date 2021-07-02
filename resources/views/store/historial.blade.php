@extends('layouts.app')

@section('content')
<div class="m-3">
    <div class="row">
        <div class="col-md-12">
            <h1>Tienda</h1>
        </div>
    </div>
    <ul class="nav nav-pills">
        <li class="nav-item">
            <a class="nav-link" aria-current="page" href="/store">Mis Productos</a>
        </li>
        <li class="nav-item">
            <a class="nav-link active" href="#">Historial de Compras</a>
        </li>
    </ul>
</div>
@endsection