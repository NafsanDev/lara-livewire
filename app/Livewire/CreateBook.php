<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Book;
use Livewire\Attributes\Validate;

class CreateBook extends Component
{
    #[Validate('string|required|min:3|max:100')]
    public $title;

    #[Validate('string|required|min:3|max:100')]
    public $intro;

    #[Validate('integer|required|min:1|max:10')]
    public $rating;

    public function add(){

        $this->validate();

        Book::create([
            'title' => $this->title,
            'intro' => $this->intro,
            'rating' => $this->rating
        ]);
        $this->reset();
    }
    public function render()
    {
        return view('livewire.create-book');
    }
}
