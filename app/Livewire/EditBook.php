<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Book;
use Livewire\Attributes\Validate;

class EditBook extends Component
{
    public $bookId;

    #[Validate('string|required|min:3|max:100')]
    public $title;

    #[Validate('string|required|min:3|max:100')]
    public $intro;

    #[Validate('integer|required|min:1|max:10')]
    public $rating;

    public function mount($bookId){
        $book = Book::findOrFail($bookId);
        $this->bookId = $book->id;
        $this->title = $book->title;
        $this->intro = $book->intro;
        $this->rating = $book->rating;
    }

    public function update(){
        $this->validate();
        $book = Book::findOrfail($this->bookId);
        $book->update([
            'title' => $this->title,
            'intro' => $this->intro,
            'rating' => $this->rating
        ]);
        return $this->redirect('/', navigate:true);
    }

    public function render()
    {
        return view('livewire.edit-book');
    }
}
