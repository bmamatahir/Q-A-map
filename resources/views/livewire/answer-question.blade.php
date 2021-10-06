<div class="card">
    <div class="card-body">
        <form wire:submit.prevent="submit" method="POST">
            @csrf
            <div class="row">
                <div class="col-md-10">
                    <div class="form-group">
                        <input wire:model.defer="content" id="content" type="text"
                               class="form-control @error('content') is-invalid @enderror" name="content"
                               value="{{ old('content') }}" required
                               placeholder="Share your thoughts" />
                        @error('content')
                        <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                        @enderror
                    </div>
                </div>
                <div class="col-md-2">
                    <button class="btn btn-outline-primary w-100" type="submit">
                        <span wire:loading.remove>Submit</span>
                        <span wire:loading>
                            <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> Loading...
                        </span>
                    </button>
                </div>
            </div>


        </form>

    </div>
</div>
