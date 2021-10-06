<?php

namespace App\Http\Livewire;

use App\Models\Question;
use Livewire\Component;

class SingleQuestion extends Component
{

    public $question;
    public $opened;
    public $liked;

    public function render()
    {
        return view('livewire.single-question');
    }

    public function mount()
    {
        $this->liked = false;
    }

    public function like()
    {
        $user = auth()->user();

//        $r = $user->likes()->attach([$this->question->id]);

//        if($this->liked) {
//            // dislike
//        } else {
//           // like
//        }

        $this->liked = !$this->liked;
    }


}
