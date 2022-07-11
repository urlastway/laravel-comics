<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $comics = config('comics');

    $comicses = [
        'comic book' => [],
        'graphic novel' => [],
    ];
    /*
    $comic_book = [];
    $graphic_novel = [];
    */
    
    foreach($comics as $prodotto){
        $comicses[$prodotto['type']][] = $prodotto;
        /*if($prodotto['type'] === 'comic book'){
            $comic_book[] = $prodotto;
        }
        elseif($prodotto['type'] === 'graphic novel'){
            $graphic_novel[] = $prodotto;
        } */
    }
    return view('home', compact('comics'));

    
});

Route::get('/prodotto/{id}', function ($id) {
    $comics = config('comics');
    if($id > count($comics)){
        abort(404);
    }
    dd($comics[$id]);
})->where('id', '[0-9]+');

