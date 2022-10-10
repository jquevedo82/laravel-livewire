<?php

namespace App\Http\Livewire;

use App\Models\Post;
use Illuminate\Contracts\View\View;
use Livewire\Component;

class CreatePost extends Component
{
    public $open = false;
    public $title, $content;

    public function save(){
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
