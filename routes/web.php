<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\HomePage;
use App\Livewire\AboutPage;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/components', function () {
    return view('components.flyonui-components');
})->name('components');

Route::view('/', 'pages.home');
Route::view('/about', 'pages.about');

Route::group(['prefix' => 'live-wire'], function(){
    Route::get('/', HomePage::class)->name('home');
    Route::get('/about', AboutPage::class)->name('about');
});