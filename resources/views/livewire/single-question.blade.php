<div class="accordion-item">
    <h2 class="accordion-header" id="heading-{{ $question->id }}">
        <div class="accordion-button {{ !$opened ? 'collapsed': '' }}" type="button" data-bs-toggle="collapse"
             data-bs-target="#collapse-{{ $question->id }}" aria-expanded="{{ $opened ? 'true': 'false' }}"
             aria-controls="collapse-{{ $question->id }}">
            <div class="w-100 d-flex justify-content-between gap-3 flex-wrap align-items-center pe-3">
                <div>
                    <div class="">
                        <span class="fw-bolder">{{ $question->title }}</span>
                        <span class="fw-light fst-italic text-muted"> • {{ $question->creator->name }}</span>
                    </div>
                    <p class="fw-normal text-muted">{{ $question->content }}</p>
                </div>
                <div>
                    @auth


                        <div class="spinner-grow spinner-grow-sm" role="status" wire:loading>
                            <span class="visually-hidden">Loading...</span>
                        </div>

                        <div  wire:click.prevent="like()" class="{{ $liked ? 'text-danger' : '' }}" wire:loading.remove>
                            <svg  xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="18" height="18"
                                 preserveAspectRatio="xMidYMid meet" viewBox="0 0 48 48">
                                <path
                                    d="M15 8C8.925 8 4 12.925 4 19c0 11 13 21 20 23.326C31 40 44 30 44 19c0-6.075-4.925-11-11-11c-3.72 0-7.01 1.847-9 4.674A10.987 10.987 0 0 0 15 8z"
                                    stroke="currentColor" stroke-width="4" stroke-linecap="round"
                                    stroke-linejoin="round" fill="{{ $liked ? 'currentColor' : 'none' }}"/>
                            </svg>
                        </div>
                    @endauth

                </div>
            </div>
        </div>
    </h2>
    <div id="collapse-{{ $question->id }}" class="accordion-collapse collapse {{ $opened ? 'show': '' }}"
         aria-labelledby="heading-{{ $question->id }}" data-bs-parent="#{{ $accordionId ?? 'accordionExample'}}">
        <div class="accordion-body">
            <div class="mb-3 fw-bold"> - Answers
                <div class="badge bg-warning">{{$question->answers()->count()}}</div>
            </div>
            <div class="d-grid gap-3">
                @forelse($question->answers as $answer)
                    <div class="py-2 px-3 border">
                        <div class="d-flex gap-3">
                            <div>
                                <div class="avatar fw-bold">
                                    {{ $answer->creator->initials() }}
                                </div>
                            </div>
                            <div>
                                {{ $answer->content }}
                            </div>
                        </div>

                        <div class="text-end">
                            <div class="text-muted fs-6 py-2">
                                By <strong>{{ $answer->creator->name }}</strong> At
                                <strong>{{ $answer->created_at }}</strong>
                            </div>
                        </div>
                    </div>
                @empty
                    <p>No Answers</p>
                @endforelse
            </div>
        </div>
    </div>
</div>
