<?php

use App\Http\Livewire\Web\Home;
use App\Http\Livewire\Web\CreateFilm;
use App\Http\Livewire\Web\ViewFilm;

Route::get('/', Home::class)->name('home');
Route::get('/create-film', CreateFilm::class)->name('create-film');
Route::get('/view-film/{id}', ViewFilm::class)->name('view-film');
