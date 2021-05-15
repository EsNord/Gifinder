<?php

use App\Http\Controllers\SearchController;
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
    return redirect('login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::middleware(['auth'])->group(function () {
    Route::get('/view-results/{q}', function ($q) {
        $url = SearchController::getApiForGifWithQuery($q);
        return view('search-pages/view-results',['imgArray' => [1,1]]);
    })->name('view-results');
    Route::get('/view-results', function () {

        return view('search-pages/view-results',['imgArray' => []]);
    })->name('view-results');
});
