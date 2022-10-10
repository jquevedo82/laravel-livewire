<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Post;
class ShowPosts extends Component
{
    public $search;
    public $sort='id';
    public $direction='desc';

    public function render()
    {   $posts = Post::where('title','LIKE','%' . $this->search . '%')
            ->orWhere('content','LIKE','%' . $this->search . '%')
            ->orderBy($this->sort, $this->direction)
            ->get();
        return view('livewire.show-posts',compact('posts'));
    }
    public function order($sort){
        if ($this->sort == $sort) {
            if ($this->direction == 'desc') {
                $this->direction= 'asc';
                # code...
            } else {
                $this->direction= 'desc';
                # code...
            }

        } else {
            $this->sort=$sort;
            $this->direction= 'asc';
        }


    }
}
