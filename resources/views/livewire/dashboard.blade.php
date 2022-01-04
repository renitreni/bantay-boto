<div>
    <x-slot name="header">
        <h2 class="h4 font-weight-bold">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>


    <div class="container">
        <div class="row">
            <div class="col-lg-12 posts-listm mt-4 mb-3">
                <div class="card bg-white shadow">
                    <div class="card-body">
                        <div class="d-flex flex-column">
                            <div>
                                <div class="row">
                                    <div class="col-auto">
                                        <label class="mb-2">Name</label>
                                        <input class="form-control" wire:model="name">
                                    </div>
                                    <div class="col-auto">
                                        <label class="mb-2">Image Link</label>
                                        <input class="form-control" wire:model="path">
                                    </div>
                                    <div class="col-auto">
                                        <label class="mb-2">Category</label>
                                        <select class="form-select" wire:model="category">
                                            <option value="">-- Select Option --</option>
                                            <option value="presidential">Presidential</option>
                                        </select>
                                    </div>
                                    @isset($personnel_id)
                                        <div class="col-auto">
                                            <label class="mb-2">&nbsp;</label>
                                            <div class="d-flex">
                                                <button class="btn btn-primary me-2" wire:click="update">Edit</button>
                                                <button class="btn btn-danger me-2" wire:click="destroy">Delete</button>
                                                <button class="btn btn-secondary" wire:click="cancelEdit">Cancel</button>
                                            </div>
                                        </div>
                                    @else
                                        <div class="col-auto">
                                            <label class="mb-2">&nbsp;</label>
                                            <div>
                                                <button class="btn btn-success" wire:click="store">Save</button>
                                            </div>
                                        </div>
                                    @endisset
                                    <div class="col-auto">
                                        <label class="mb-2">&nbsp;</label>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <ul class="list-group mt-3">
                                    @foreach($presidentials as $item)
                                        <li class="list-group-item list-group-item-action d-flex flex-row" wire:click="edit({{ $item->id }})">
                                            <div class="mx-2">
                                                <img src="{{ $item->path }}" style="width: 100px; height: 100px"
                                                     class="img-fluid">
                                            </div>
                                            <div>
                                                {{ $item->name }}<br>
                                                <label class="fw-bolder">{{ $item->category }}</label>
                                            </div>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
