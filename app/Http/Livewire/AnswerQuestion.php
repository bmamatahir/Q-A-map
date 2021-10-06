<?php

namespace App\Http\Livewire;

use App\Models\Answer;
use Livewire\Component;

class AnswerQuestion extends Component
{

    public $question;

    public $content;

    public function render()
    {
        return view('livewire.answer-question');
    }

    protected function rules()
    {
        return [
            'content' => ['required', 'string'],
        ];
    }


    public function submit()
    {
        $user = auth()->user();

        $this->question->answers()->save(new Answer(['content' => $this->content, 'user_id' => $user->id]));

        session()->flash('message', 'success|Thanks for replying to our community questions, more responses more points more money');
        redirect()->to(route('home'));
    }
}
