<div>
    @push('css')
        <style>
            .hero {
                background: url('http://bantay-boto.test/images/header-bg.png') rgba(255, 17, 17, 0.41);
                background-size: cover;
                background-blend-mode: multiply;
            }
        </style>
    @endpush
    <div id="hero" class="hero d-flex align-items-center py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 d-flex flex-column justify-content-center">
                    <h1 style="color: white; text-shadow: 0px 0px 7px #0b0b0b">Bantayan, Boto Mo!</h1>
                    <h3 style="color: #f7f7f7; text-shadow: 0px 0px 7px #0b0b0b">A socio-civic organization supporting Bongbong Marcos for President in 2022</h3>
{{--                    <div data-aos="fade-up" data-aos-delay="600">--}}
{{--                        <div class="text-center text-lg-start">--}}
{{--                            <a href="#" data-bs-toggle="modal" data-bs-target="#joinTeamMdl"--}}
{{--                               class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center">--}}
{{--                                <span>Join Our Team</span>--}}
{{--                                <i class="bi bi-arrow-right"></i>--}}
{{--                            </a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
                </div>
                <div class="col-lg-8 hero-img" data-aos="zoom-out" data-aos-delay="200">
                    <img src="{{ asset('images/header.png') }}" style="width: 100% !important;" alt="">
                </div>
            </div>
        </div>
    </div>
    <main>
        <!-- Trending Area Start -->
        <div class="trending-area fix">
            <div class="container">
                <div class="trending-main">
                    <!-- Trending Tittle -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="trending-tittle">
                                {{--                            <strong>Trending now</strong>--}}
                                {{--                            <!-- <p>Rem ipsum dolor sit amet, consectetur adipisicing elit.</p> -->--}}
                                {{--                            <div class="trending-animated">--}}
                                {{--                                <ul id="js-news" class="js-hidden">--}}
                                {{--                                    <li class="news-item">Bangladesh dolor sit amet, consectetur adipisicing elit.</li>--}}
                                {{--                                    <li class="news-item">Spondon IT sit amet, consectetur.......</li>--}}
                                {{--                                    <li class="news-item">Rem ipsum dolor sit amet, consectetur adipisicing elit.</li>--}}
                                {{--                                </ul>--}}
                                {{--                            </div>--}}
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-8">
                            <!-- Trending Top -->
                            @if($trending_top)
                                <div class="trending-top mb-30">
                                    <div class="trend-top-img">
                                        <img src="{{ $trending_top->header_img }}" alt=""
                                             style="width: 100%; height: 410px">
                                        <div class="trend-top-cap">
                                            @foreach($trending_top->tags as $tag)
                                                <span>{{ $tag->name }}</span>
                                            @endforeach
                                            <h2><a
                                                    href="{{ route('blog.details', ['id'=>$trending_top->id, 'year'=> \Carbon\Carbon::parse($trending_top->created_at)->format('Y'), 'slug'=>$trending_top->slug ]) }}"
                                                >{{ $trending_top->title }}</h2>
                                        </div>
                                    </div>
                                </div>
                        @endif
                        <!-- Trending Bottom -->
                            <div class="trending-bottom">
                                <div class="row">
                                    @foreach($this->random_three as $item)
                                        <div class="col-lg-4">
                                            <div class="single-bottom mb-35">
                                                <div class="trend-bottom-img mb-30">
                                                    <img src="{{ $item->header_img }}" alt=""
                                                         style="width: 236.656px; height: 157.766px">
                                                </div>
                                                <div class="trend-bottom-cap">
                                                    @foreach($item->tags as $tag)
                                                        <span class="color1">{{ $tag->name }}</span>
                                                    @endforeach
                                                    <h4>
                                                        <a href="{{ route('blog.details', ['id'=>$item->id, 'year'=> \Carbon\Carbon::parse($item->created_at)->format('Y'), 'slug'=>$item->slug ]) }}"
                                                           class="d-inline-block text-truncate"
                                                           style="max-width: 180px;">
                                                            {{ $item->title }}
                                                        </a>
                                                    </h4>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <!-- Right content -->
                        <div class="col-lg-4">
                            <h4 class="mb-3">Latest Published</h4>
                            @foreach($latest_upload as $key => $upload)
                                @if($key != 0)
                                    <div class="trand-right-single d-flex">
                                        <div class="trand-right-img">
                                            <img src="{{ $upload->header_img }}" alt="" width="120px" height="100px">
                                        </div>
                                        <div class="trand-right-cap">
                                            @foreach($upload->tags as $tag)
                                                <span class="color1">{{ $tag->name }}</span>
                                            @endforeach
                                            <h4>
                                                <a href="{{ route('blog.details', ['id'=>$upload->id, 'year'=> \Carbon\Carbon::parse($upload->created_at)->format('Y'), 'slug'=>$upload->slug ]) }}"
                                                >{{ $upload->title }}</a></h4>
                                        </div>
                                    </div>
                                @endif
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Trending Area End -->
    </main>
</div>
