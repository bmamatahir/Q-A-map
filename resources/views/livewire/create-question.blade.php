@section('title', 'Ask Question')

<div class="container my-5">
    <div class="mb-5 text-center">
        <h2>Ask whatever you want</h2>
        <p class="text-muted">Be polite and respectful</p>
    </div>


    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <form wire:submit.prevent="submit" method="POST" class="d-flex flex-column gap-3">
                        @csrf

                        <div class="form-group">
                            <label for="title" class="form-label">Title <span class="text-danger fw-bold">*</span></label>
                            <input  wire:model.defer="title" id="title" type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title') }}" required autocomplete="title" autofocus placeholder="What time is it?">
                            @error('title')
                            <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="content" class="form-label">Content <span class="text-danger fw-bold">*</span></label>
                            <textarea  wire:model.defer="content" rows="7" id="content" type="text" class="form-control @error('content') is-invalid @enderror" name="content" value="{{ old('content') }}" required autocomplete="content"  placeholder="Explain in more details."></textarea>
                            @error('content')
                            <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <button class="btn btn-primary w-100 btn-lg" type="submit">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>
