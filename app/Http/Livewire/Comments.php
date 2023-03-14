<?php

namespace App\Http\Livewire;

use App\Models\Comment;
use Livewire\Component;
use Illuminate\Support\Carbon;

class Comments extends Component
{
    public $comments = [];

    public $newComment;

    public function mount()
    {
        $this->comments = Comment::all();
    }

    public function addComment()
    {
        if($this->newComment == '')
            return;

        array_unshift($this->comments,[
            'body'=> $this->newComment,
            'created_at'=> Carbon::now()->diffForHumans(),
            'creator'=> 'Anonimius'
        ]);
    }

    public function render()
    {
        return view('livewire.comments');
    }
}
