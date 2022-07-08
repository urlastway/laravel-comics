@extends('layouts.base')

@section('page-title')
    Home Page
@endsection

@section('page-content')
    <main class="main">
        <div class="container">
            <div class="main__content">
                <ul>
                    @foreach ($comics as $comic)
                        <li><img src="{{$comic['thumb']}}" alt="">
                        <h5 class="title__comics">{{$comic['title']}}</h5>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </main>
@endsection