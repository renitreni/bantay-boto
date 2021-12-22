<div>
    <!--================Blog Area =================-->
    <section class="blog_area single-post-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 posts-list">
                    <div class="single-post">
                        <div class="feature-img">
                            <img class="img-fluid" src="{{ $details->header_img }}" style="width: 100%; height: 300px"
                                 alt="">
                        </div>
                        <div class="blog_details">
                            <h2>{{ $details->title }}</h2>
                            <ul class="blog-info-link mt-3 mb-4">
                                <li><a href="#"><i class="fa fa-user"></i>
                                        @foreach($details->tags as $tag)
                                            <span class="badge bg-light">{{ $tag->name }}</span>
                                        @endforeach
                                    </a></li>
                                {{--                                <li><a href="#"><i class="fa fa-comments"></i> 03 Comments</a></li>--}}
                            </ul>
                            @if($details->header_video)
                                <div class="mb-2">
                                    {!! $details->header_video !!}
                                </div>
                            @endif
                            {{--                            BODY--}}
                            {!! $details->content !!}
                        </div>
                    </div>
                    <div class="blog-author">
                        <div class="media align-items-center">
                            <i class="fas fa-user-circle" style="font-size: 5rem; margin-right: 10px;"></i>
                            <div class="media-body">
                                <a href="#">
                                    <h4>{!! $details->author !!}</h4>
                                </a>
                                <p>The Author of this Blog Post</p>
                            </div>
                        </div>
                    </div>
                </div>
                <livewire:searchables/>
            </div>
        </div>
    </section>
    <!--================ Blog Area end =================-->

</div>
