<?php

namespace App\Http\Livewire;

use App\Models\Question;
use Livewire\Component;

class CreateQuestion extends Component
{

    public $title;
    public $content;

    public function render()
    {
        return view('livewire.create-question')
            ->extends('layouts.app')
            ->layoutData(['title' => 'Ask Question']);
    }


    protected function rules()
    {
        return [
            'title' => ['required', 'string', 'max:255'],
            'content' => ['required', 'string'],
        ];
    }


    public function submit()
    {
        $this->validate();

        $user = auth()->user();

        $user->questions()->save(new Question([
            'title' => $this->title,
            'content' => $this->content,
            'lat' => random_int(1000, 99999),
            'long' => random_int(1000, 99999),
        ]));

        session()->flash('message', 'success|We save your request in our databases, next time you should provide your location coordinates 😁');

        redirect()->to(route('home'));
    }
}
