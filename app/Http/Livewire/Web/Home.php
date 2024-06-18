<?php

namespace App\Http\Livewire\Web;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Film;

class Home extends Component
{
    use WithPagination;

    public function render()
    {
        $films = Film::paginate(10);
        return view('livewire.web.home', ['films' => $films])
            ->layout('layouts.app');
    }
}
