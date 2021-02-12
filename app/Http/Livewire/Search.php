<?php

namespace App\Http\Livewire;

use App\Models\Book;
use Livewire\Component;

class Search extends Component
{
    public $search = '';
    public function render()
    {
        $datalist = Book::where('title','like','%'.$this->search.'%')->get();
        return view('livewire.search',['datalist'=>$datalist, 'query'=>$this->search]);
    }
}
