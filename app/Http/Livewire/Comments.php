<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Carbon;

class Comments extends Component
{
    public $comments = [
        [
            'body'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque ratione vitae, deleniti aliquam minima magni aut dolor eius inventore accusamus! Amet dolores illo commodi, porro aliquid dignissimos! Sequi eveniet quo eius veritatis porro, placeat voluptatibus accusantium excepturi quia vero quasi aspernatur debitis repellat, nemo dicta consequuntur eligendi officiis sint dolor.',
            'created_at'=>'3 mim ago',
            'creator'=>'Sarthak'
        ]
    ];

    public $newComment;

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
