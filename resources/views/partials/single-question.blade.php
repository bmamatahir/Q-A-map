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
            <strong>This is the first item's accordion body.</strong> It is shown by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
        </div>
    </div>
</div>
