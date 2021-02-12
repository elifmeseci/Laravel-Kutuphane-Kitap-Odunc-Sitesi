<?php

namespace App\Http\Livewire;

use App\Models\Book;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;


class Review extends Component
{

    public $record, $subject, $review, $book_id, $rate;
    /**
     * @var mixed|null
     */


    public function mount($id){
        $this->record = Book::findOrFail($id);
        $this->book_id = $this->record->id;
    }
    public function render()
    {
        return view('livewire.review');
    }

    private function resetInput() {
        $this->subject=null;
        $this->review=null;
        $this->rate=null;
        $this->book_id=null;
        $this->IP=null;
    }

    public function store(){
        $this->validate([
            'subject'=>'required|min:5',
            'review'=>'required|min:10',
            'rate'=>'required'
        ]);

        \App\Models\Review::create([
            'book_id' => $this->book_id,
            'user_id' => Auth::id(),
            'IP' => $_SERVER['REMOTE_ADDR'],
            'rate' => $this->rate,
            'subject' => $this->subject,
            'review' => $this->review

        ]);

        session()->flash('message', 'Review Send Succesfully.');
        $this->resetInput();
    }


}
