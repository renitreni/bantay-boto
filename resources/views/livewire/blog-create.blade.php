<div>
    @push('scripts-css')
        <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
        <style>
            .tag {
                font-size: 14px;
                padding: .3em .4em .4em;
                margin: 0 .1em;
                background-color: beige;
                border-radius: 6px;
            }
            .tag a {
                color: #bbb;
                cursor: pointer;
                opacity: 0.6;
            }
            .tag a:hover {
                opacity: 1.0
            }
            .tag .remove {
                vertical-align: bottom;
                top: 0;
            }
            .tag a {
                margin: 0 0 0 .3em;
            }
            .tag a .glyphicon-white {
                color: #fff;
                margin-bottom: 2px;
            }
        </style>
    @endpush
    <x-slot name="header">
        <h2 class="h4 font-weight-bold">
            {{ __('Blog Create') }}
        </h2>
    </x-slot>

    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body p-4">
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label>Title</label>
                            <input class="form-control" wire:model="title">
                        </div>
                        <div class="col-md-auto my-auto">
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" wire:model="is_published">
                                <label class="form-check-label" for="flexSwitchCheckDefault">Is Published</label>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label>Header Image</label>
                            <input class="form-control" wire:model="header_img">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label>Header Video</label>
                            <input class="form-control" wire:model="header_video">
                        </div>
                        <div class="col-md-auto">
                            <div class="input-group mb-3">
                                <input class="form-control" placeholder="Type in a Tag" wire:model="input_tag">
                                <button class="btn btn-success" type="button" wire:click="addTag">Add</button>
                            </div>
                        </div>
                        <div class="col-md-auto">
                            @foreach($tags as $tag)
                                <span class="tag">
                                  <span>{{ $tag }}</span>
                                  <a wire:click="removeTag('{{ $tag }}')"><i class="fas fa-times"></i></a>
                                </span>
                            @endforeach
                        </div>
                        <div class="col-md-12 mb-3" wire:ignore>
                            <div id="summernote">{{ $content }}</div>
                        </div>
                        <div class="col-md-12">
                            <a href="{{ route('blogs') }}" class="btn btn-secondary">Cancel</a>
                            <button wire:click="submit" class="btn btn-success">Save</button>
                        </div>
                    </div>
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
                            @this.set('content', contents);
                        },
                    }
                });
            });
        </script>
    @endpush
</div>
