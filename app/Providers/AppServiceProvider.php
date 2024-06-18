<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Livewire\Livewire;

class AppServiceProvider extends ServiceProvider
{
    public function register()
    {
        //
    }

    public function boot()
    {
        Livewire::component('web.components.navbar', \App\Http\Livewire\Web\Components\Navbar::class);
        Livewire::component('web.create-film', \App\Http\Livewire\Web\CreateFilm::class);
        Livewire::component('web.home', \App\Http\Livewire\Web\Home::class);
        Livewire::component('web.view-film', \App\Http\Livewire\Web\ViewFilm::class);
    }
}
