<?php

namespace App\Http\Livewire;

use App\Models\Question;
use Livewire\Component;

class ListQuestions extends Component
{

    public $questions;

    public function render()
    {
        return view('livewire.list-questions')
            ->extends('layouts.app')
            ->layoutData(['title' => 'List Questions']);
    }

    public function mount()
    {
        $this->questions = Question::with(['answers.creator', 'creator'])->orderBy('created_at', 'desc')->get();
    }

}
