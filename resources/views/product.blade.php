@extends('layouts.base')

@section('page-title')
    <h1>{{$prodotto['title']}}</h1>
@endsection

@section('page-content')
<div class="page__content" style="width: 100%; display: flex; justify-content: center;">
    <div class="container">
        <img src="{{$prodotto['thumb']}}" alt="{{$prodotto['title']}}">
        <h1>{{$prodotto['title']}}</h1>
        <div class="price__table">
            <h4>Price: {{$prodotto['price']}}</h4>
        </div>

        <p>{{$prodotto['description']}}</p>
        <div class="specs" style="padding-top: 20px;">
            <h3>Specs:</h3>
            <p>{{$prodotto['sale_date']}}</p>
            <p>{{$prodotto['type']}}</p>
            <p>{{$prodotto['price']}}</p>
        </div>
    </div>
</div>
@endsection