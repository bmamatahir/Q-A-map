@extends('layouts.app')

@section('title', 'Home page')

@section('content')
    <div class="container my-5">
        <div class="mb-5">
            <h2>Nearby questions</h2>
            <p class="text-muted">Enable your GPS feature for better experience</p>
        </div>




        <div class="accordion" id="accordionExample">
            @forelse ($questions as $q)
                @include('partials.single-question', ['question' => $q, 'accordionId' => 'accordionExample'])
            @empty
                <p>No questions</p>
            @endforelse
        </div>


    </div>
@endsection
