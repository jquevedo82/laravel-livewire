<?php

namespace App\Http\Livewire;

use App\Models\Post;
use Illuminate\Contracts\View\View;
use Livewire\Component;

class CreatePost extends Component
{
    public $open = false;
    public $title, $content;

    protected $rules = [
        'title' => 'required|max:10',
        'content' => 'required|min:100'
    ];

    public function updated($propertyName){
        $this->validateOnly($propertyName);
    }
    public function save(){

        $this->validate();

        Post::create([
            'title'=> $this->title,
            'content' => $this->content
        ]);

        $this->reset(['open','title','content']);
        $this->emitTo('show-post','render');
        $this->emit('alert','El Post Se creo satisfactoriamente');
    }
    public function render(): View
    {
        return view('livewire.create-post');
    }

}
