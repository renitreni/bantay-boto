<div>
    @push('scripts-css')
        <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
    @endpush
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
                            <button type="button" class="btn btn-primary"
                                    data-bs-toggle="modal"
                                    data-bs-target="#aboutModal">
                                About Page Editor
                            </button>
                        </div>
                        <div class="overflow-hidden">
                            <livewire:blog-table/>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Modal -->
    <div  wire:ignore class="modal fade" id="aboutModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">About Page</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="col-md-12 mb-3">
                        <div id="summernote">{!! $about !!}</div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" wire:click="saveAbout">Save changes</button>
                </div>
            </div>
        </div>
    </div>

        @push('scripts')
            <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
            <script>
                $(document).ready(function () {
                    $('#summernote').summernote({
                        height: '400px',
                        codemirror: { // codemirror options
                            theme: 'monokai'
                        },
                        callbacks: {
                            onChange: function (contents, $editable) {
                                @this.
                                set('about', contents);
                            },
                        }
                    });
                });
            </script>
        @endpush
</div>
