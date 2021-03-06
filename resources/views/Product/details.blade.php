@extends('Standard.main') @section('content')
<div class="row">
    <div class="col-md-2">
        <img src="{{ asset('img/' . $product->image) }}" class="img-fluid rounded" alt="{{ $product->name }}">
    </div>
    <div class="col-md-10">
        <ul class="list-group">
            <li class="list-group-item">
                <strong class="text-success">{{ $product->name }}</strong>
                <span class="pull-right">
                    <a href="/" class="btn-sm">
                        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                        <i class="fa fa-angle-left" aria-hidden="true"></i> voltar
                    </a>
                </span>
            </li>
            <li class="list-group-item">
                <strong>Descrição:</strong> {{ $product->description }}</li>
            <li class="list-group-item">
                <strong>Preço:</strong> R${{ number_format($product->price, 2, ',', '.') }}</li>
            <li class="list-group-item">
                <strong>Categorias:</strong> 
                <ul>
                    @foreach($categories as $category)
                        <li>{{ $category->name }}</li>
                    @endforeach
                </ul>
            </li>
            <li class="list-group-item">
                <strong>Caracteristicas:</strong> 
                <ul>
                    @foreach($characteristic as $item)
                        <li><strong>{{ $item->title }}: </strong>{{ $item->des }}</li>
                    @endforeach
                </ul>
            </li>
        </ul>
    </div>
</div>
<hr>
<div class="row">
    <div class="col-md-2">
        <button onclick="Product.add('{{ $product->id }}');" class="btn btn-success btn-block pull-left">Comprar</button>
    </div>
</div>

{!! Html::script('js/Product/index.js') !!} @stop