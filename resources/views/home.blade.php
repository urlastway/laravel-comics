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
                        <x-card-comics class="card-comics" :thumb="$comic['thumb']" :title="$comic['title']"/>
                    @endforeach
                </ul>
            </div>
        </div>
    </main>
@endsection