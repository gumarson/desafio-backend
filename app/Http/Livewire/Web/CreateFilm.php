<?php

namespace App\Http\Livewire\Web;

use Livewire\Component;
use App\Models\Film;

class CreateFilm extends Component
{
    public $title;
    public $summary;
    public $cover;

    protected $rules = [
        'title' => 'required|string|max:255',
        'summary' => 'required|string',
        'cover' => 'required|string',
    ];

    public function submit()
    {
        $this->validate();

        $film = Film::create([
            'title' => $this->title,
            'summary' => $this->summary,
            'cover' => $this->cover,
        ]);

        session()->flash('message', 'Film created successfully.');

        return redirect()->route('view-film', $film->id);
    }

    public function render()
    {
        return view('livewire.web.create-film')
            ->layout('layouts.app');
    }
}
