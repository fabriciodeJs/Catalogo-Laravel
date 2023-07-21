@extends('layouts.main')
@section('title', "Olá mundo")


@section('content')

<section id="product-container">
    <div id="title-container">
        <h1>Produtos</h1>
    </div>
    <div id="card-container">
        <a href="/product/">
            <div class="card">
                <img src="/img/cars/car.jpg" alt="Product">
                <div class="description-container">
                    <h4>BOMBA SUBMERSIVEL ABS/SULZER</h4>
                    <p>3" UNI 550T 1,5 CV 220V/380V/440V/760V TRIFÁSICA</p>
                </div>
            </div>
        </a>
    </div>
</section>

@endsection
