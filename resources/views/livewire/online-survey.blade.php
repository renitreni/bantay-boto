<div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 posts-listm mt-4 mb-3">
                <div class="card bg-white shadow">
                    <div class="card-body">
                        <div class="d-flex">
                            <h2>Online Survey</h2>
                        </div>
                        <hr>
                        <div class="d-flex flex-wrap">
                            @foreach($presidentials as $item)
                                <div class="d-flex flex-column justify-content-center m-4">
                                    <div class="text-center">
                                        <img src="{{ $item->path }}" style="width: 130px; height: 130px"
                                             class="img-fluid rounded-circle">
                                    </div>
                                    <label class="text-center mt-2">{{ $item->name }}</label>
                                    <label class="text-center font-weight-bold">{{ \App\Models\Vote::getVerifiedCount($item->id) }} votes</label>

                                    <button type="button" class="genric-btn info-border" data-toggle="modal"
                                            data-target="#exampleModal"
                                            wire:click="setID('{{ $item->name }}', {{ $item->id }})">
                                        CLICK TO VOTE
                                    </button>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div wire:ignore.self class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Please Provide Your Details</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    @if (session()->has('message'))
                        <div class="alert alert-success">
                            {{ session('message') }}
                        </div>
                    @endif
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                                <label>Name</label>
                                <input type="text" class="form-control @error('name')is-invalid @enderror"
                                       wire:model="name">
                                @error('name') <span class="invalid-feedback">{{ $message }}</span> @enderror
                            </div>
                            <div class="form-group">
                                <label>E-mail</label>
                                <input type="email" class="form-control @error('email')is-invalid @enderror"
                                       wire:model="email">
                                @error('email') <span class="invalid-feedback">{{ $message }}</span> @enderror
                                <label class="text-muted">
                                    *We need your valid e-mail to count your vote. We will send a
                                    confirmation link after submission.
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="genric-btn primary" data-dismiss="modal">Close</button>
                    <button type="button" class="genric-btn info" wire:click="store">I vote
                        for {{ $personnel_name }}</button>
                </div>
            </div>
        </div>
    </div>
</div>
