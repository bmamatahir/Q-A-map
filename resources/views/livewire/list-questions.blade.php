<div class="container my-5">
    <div class="mb-5">
        <h2>Nearby questions</h2>
        <p class="text-muted">Enable your GPS feature for better experience</p>
    </div>


    <div class="accordion" id="accordionExample">
        @forelse ($questions as $q)
            <livewire:single-question :question="$q" :opened="$loop->first">
            @empty
            <p>No questions</p>
        @endforelse
    </div>

</div>