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

    $data = ['comics' => config('comics'), 'pageName' => 'Laravel - Comics'];

    return view('guest.home', $data);
})->name('comics');

Route::get('products/{id}', function($id){
    $collection = collect(config('comics'));
    $product = $collection->where('id', $id);

    if($product->count() === 0){
        abort(404);
    }

    $singleProduct = '';
    foreach ($product as $comicOne) {
        $singleProduct = $comicOne;
    }

    return view('guest.partials.product', [
        'product' => $singleProduct,
        'nomePagina' => $singleProduct['title'],
    ]);

})->name('product');

Route::get('/characters', function () {

    $data = ['pageName' => 'Laravel - Characters'];

    return view('guest.characters', $data);
})->name('characters');

Route::get('/movies', function () {

    $data = ['pageName' => 'Laravel - movies'];

    return view('guest.movies', $data);
})->name('movies');

Route::get('/tv', function () {

    $data = ['pageName' => 'Laravel - tv'];

    return view('guest.tv', $data);
})->name('tv');

Route::get('/games', function () {

    $data = ['pageName' => 'Laravel - games'];

    return view('guest.games', $data);
})->name('games');

Route::get('/games', function () {

    $data = ['pageName' => 'Laravel - games'];

    return view('guest.games', $data);
})->name('games');

Route::get('/collectibles', function () {

    $data = ['pageName' => 'Laravel - collectibles'];

    return view('guest.collectibles', $data);
})->name('collectibles');

Route::get('/videos', function () {

    $data = ['pageName' => 'Laravel - videos'];

    return view('guest.videos', $data);
})->name('videos');

Route::get('/fans', function () {

    $data = ['pageName' => 'Laravel - fans'];

    return view('guest.fans', $data);
})->name('fans');

Route::get('/news', function () {

    $data = ['pageName' => 'Laravel - news'];

    return view('guest.news', $data);
})->name('news');

Route::get('/shop', function () {

    $data = ['pageName' => 'Laravel - shop'];

    return view('guest.shop', $data);
})->name('shop');
