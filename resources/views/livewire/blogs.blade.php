<div>
    <x-slot name="header">
        <h2 class="h4 font-weight-bold">
            {{ __('Blogs') }}
        </h2>
    </x-slot>

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex flex-column">
                        <div class="mb-2">
                            <a href="{{ route('blog.create') }}" class="btn btn-success">Add New Blog</a>
                        </div>
                        <div class="overflow-hidden">
                            <livewire:blog-table/>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
