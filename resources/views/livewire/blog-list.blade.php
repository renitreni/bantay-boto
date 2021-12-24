<div>
    <!--================Blog Area =================-->

    <section class="blog_area section-padding">
        <div class="container">
            <div class="col-md-12">
                @if($search)
                    <label class="fs-4">Search for: '{{$search}}'</label>
                @endif
            </div>
            <div class="row">
                <div class="col-lg-8 mb-5 mb-lg-0">
                    <div class="blog_left_sidebar">
                        @foreach($articles as $article)
                            <article class="blog_item">
                                <div class="blog_item_img">
                                    <img class="card-img rounded-0" src="{{ $article->header_img }}" alt="">
                                    <a href="#" class="blog_item_date">
                                        <h3>{{ \Carbon\Carbon::parse($article->created_at)->format('d') }}</h3>
                                        <p>{{ \Carbon\Carbon::parse($article->created_at)->format('M') }}</p>
                                    </a>
                                </div>

                                <div class="blog_details">
                                    <a class="d-inline-block" href="{{ route('blog.details', ['id'=>$article->id, 'year'=> \Carbon\Carbon::parse($article->created_at)->format('Y'), 'slug'=>$article->slug ]) }}">
                                        <h2>{{ $article->title }}</h2>
                                    </a>
                                    <p class="text-truncate">{!! $article->content !!}</p>
                                    <ul class="blog-info-link">
                                        <li>
                                            <a href="#"><i class="fa fa-user"></i>
                                                @foreach($article->tags as $tag)
                                                    <span class="color1">{{ $tag->name }}</span>
                                                @endforeach
                                            </a>
                                        </li>
                                        {{--  <li><a href="#"><i class="fa fa-comments"></i> 03 Comments</a></li>--}}
                                    </ul>
                                </div>
                            </article>
                        @endforeach
                        <nav class="blog-pagination justify-content-center d-flex">
                            {{ $articles->links() }}
                        </nav>
                    </div>
                </div>

                <livewire:searchables/>
            </div>
        </div>
    </section>
    <!--================Blog Area =================-->
</div>
