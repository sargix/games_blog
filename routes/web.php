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

Route::get('/', 'MainController@index')->name('games.list');

Route::get('game/{id}', 'MainController@show')->name('game.show');

Route::get('add', fn () => view('blog.add'))->name('game.add');

Route::get('bestGames', fn () => view('blog.bestGames'))->name('games.bestList');

Route::get('search', fn () => view('blog.search'))->name('game.search');
