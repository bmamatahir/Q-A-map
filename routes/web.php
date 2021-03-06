<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\QuestionController;
use \App\Http\Livewire\CreateQuestion;
use \App\Http\Livewire\ListQuestions;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', ListQuestions::class)->name('home');

Route::get('/question/ask', CreateQuestion::class)
    ->name('ask-question')
    ->middleware('auth');

Auth::routes();
