@extends('layouts.main')
@section('title', "Dev Lider")


@section('content')

<section id="product-container">
    <div id="title-container">
        <h1>Produtos</h1>
    </div>
    <div id="card-container">
        @foreach($products as $product)
            <a href="/product/">
                <div class="card">
                    <img src="/img/cars/car.jpg" alt="Product">
                    <div class="description-container">
                        <h4>{{ $product->name }}</h4>
                        <p>{{ $product->description }}</p>
                    </div>
                </div>
            </a>
        @endforeach

        <a href="/product/create">Criar Produto</a>
    </div>
</section>

@endsection
