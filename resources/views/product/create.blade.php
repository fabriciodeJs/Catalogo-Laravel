@extends('layouts.main')
@section('title', "Cadastrar Produto")


@section('content')

<section>
    <div id="product-create-container">
        <h1>Cadastro de Produtos</h1>
        <form action="/product" method="post">
            @csrf
            <div class="form-group">
                <label for="name" class="form-label">Nome do Produto:</label>
                <input type="text" name="name" class="form-control" id="name" placeholder="Digite o nome do Produto">
            </div>
            <div class="form-group">
                <label for="code" class="form-label">Código do Produto:</label>
                <input type="text" name="code" class="form-control" id="code" placeholder="Digite o código do Produto">
            </div>
            <div class="form-group">
                <label for="description" class="form-label">Descrição do Produto:</label>
                <input type="text" name="description" class="form-control" id="description" placeholder="Digite a descrição do Produto">
            </div>
            <div class="form-group">
                <label for="value" class="form-label">Valor do Produto:</label>
                <input type="text" name="value" class="form-control" id="value" placeholder="Digite o nome do Produto">
            </div>
            <input type="submit" class="btn-submite" value="Cadastar">
        </form>
    </div>
</section>

@endsection
