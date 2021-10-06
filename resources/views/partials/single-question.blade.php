<div class="accordion-item">
    <h2 class="accordion-header" id="heading-{{ $question->id }}">
        <div class="accordion-button {{ !$loop->first ? 'collapsed': '' }}" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-{{ $question->id }}" aria-expanded="{{ $loop->first ? 'true': 'false' }}" aria-controls="collapse-{{ $question->id }}">
            <div>
                <div class="fw-bolder">{{ $question->title }}</div>
                <p class="fw-normal text-muted">{{ $question->content }}</p>
            </div>
        </div>
    </h2>
    <div id="collapse-{{ $question->id }}" class="accordion-collapse collapse {{ $loop->first ? 'show': '' }}" aria-labelledby="heading-{{ $question->id }}" data-bs-parent="#{{ $accordionId ?? 'accordionExample'}}">
        <div class="accordion-body">
            <div class="mb-3 fw-bold"> - Answers <div class="badge bg-warning">{{$question->answers()->count()}}</div></div>
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
                                By <strong>{{ $answer->creator->name }}</strong> At <strong>{{ $answer->created_at }}</strong>
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
