@extends('layouts.app')

@section('content')
<main class="container">
    <div class="row">
        <div class="col">
            <div class="carousel slide" id="slideshow" data-ride="carousel">
                <!--Indicadores-->
                <ol class="carousel-indicators">
                    <li data-target="#slideshow" data-slide-to="0" class="active"></li>
                    <li data-target="#slideshow" data-slide-to="1"></li>
                    <li data-target="#slideshow" data-slide-to="2"></li>
                </ol>
                <!-- Slides -->
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="../images/muestra/s1.jpg" class="d-block w-100" alt="">
                    </div>
                    <div class="carousel-item">
                        <img src="../images/muestra/s2.jpg" class="d-block w-100" alt="">
                    </div>
                    <div class="carousel-item">
                        <img src="../images/muestra/s3.jpg" class="d-block w-100" alt="">
                    </div>
                </div>
                <!-- Controles -->
                <a href="#slideshow" class="carousel-control-prev" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Anterior</span>
                </a>
                <a href="#slideshow" class="carousel-control-next" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Siguiente</span>
                </a>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="py-4 border-bottom">
                <h1 class="text-center">Compra con un solo click</h1>
            </div>
        </div>
    </div>

    <div class="row py-4">
        <div class=" col-12 col-sm-6 col-lg-3 mb-4">
            <div class="card">
                <img src="../images/muestra/1.jpg" class="card-img-top" alt="">
                <div class="card-body">
                    <h3 class="card-title">IPhone</h3>
                    <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                    <a href="/pages/venta" class="btn btn-sm btn-primary">Comprar</a>
                    <a href="#" class="btn btn-sm btn-secondary">Detalles</a>
                </div>
            </div>
        </div>
        <div class=" col-12 col-sm-6 col-lg-3 mb-4">
            <div class="card">
                <img src="../images/muestra/2.jpg" class="card-img-top" alt="">
                <div class="card-body">
                    <h3 class="card-title">Mac</h3>
                    <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                    <a href="/pages/venta" class="btn btn-sm btn-primary">Comprar</a>
                    <a href="#" class="btn btn-sm btn-secondary">Detalles</a>
                </div>
            </div>
        </div>
        <div class=" col-12 col-sm-6 col-lg-3 mb-4">
            <div class="card">
                <img src="../images/muestra/3.jpg" class="card-img-top" alt="">
                <div class="card-body">
                    <h3 class="card-title">Canon</h3>
                    <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                    <a href="/pages/venta" class="btn btn-sm btn-primary">Comprar</a>
                    <a href="#" class="btn btn-sm btn-secondary">Detalles</a>
                </div>
            </div>
        </div>
        <div class=" col-12 col-sm-6 col-lg-3 mb-4">
            <div class="card">
                <img src="../images/muestra/4.jpg" class="card-img-top" alt="">
                <div class="card-body">
                    <h3 class="card-title">Apple Watch</h3>
                    <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                    <a href="/pages/venta" class="btn btn-sm btn-primary">Comprar</a>
                    <a href="#" class="btn btn-sm btn-secondary">Detalles</a>
                </div>
            </div>
        </div>
        <div class=" col-12 col-sm-6 col-lg-3 mb-4">
            <div class="card">
                <img src="../images/muestra/5.jpg" class="card-img-top" alt="">
                <div class="card-body">
                    <h3 class="card-title">Keyboard</h3>
                    <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                    <a href="/pages/venta" class="btn btn-sm btn-primary">Comprar</a>
                    <a href="#" class="btn btn-sm btn-secondary">Detalles</a>
                </div>
            </div>
        </div>
        <div class=" col-12 col-sm-6 col-lg-3 mb-4">
            <div class="card">
                <img src="../images/muestra/6.jpg" class="card-img-top" alt="">
                <div class="card-body">
                    <h3 class="card-title">IPad</h3>
                    <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                    <a href="/pages/venta" class="btn btn-sm btn-primary">Comprar</a>
                    <a href="#" class="btn btn-sm btn-secondary">Detalles</a>
                </div>
            </div>
        </div>
        <div class=" col-12 col-sm-6 col-lg-3 mb-4">
            <div class="card">
                <img src="../images/muestra/7.jpg" class="card-img-top" alt="">
                <div class="card-body">
                    <h3 class="card-title">Macbook</h3>
                    <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                    <a href="/pages/venta" class="btn btn-sm btn-primary">Comprar</a>
                    <a href="#" class="btn btn-sm btn-secondary">Detalles</a>
                </div>
            </div>
        </div>
        <div class=" col-12 col-sm-6 col-lg-3 mb-4">
            <div class="card">
                <img src="../images/muestra/8.jpg" class="card-img-top" alt="">
                <div class="card-body">
                    <h3 class="card-title">Cameras</h3>
                    <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                    <a href="/pages/venta" class="btn btn-sm btn-primary">Comprar</a>
                    <a href="#" class="btn btn-sm btn-secondary">Detalles</a>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection