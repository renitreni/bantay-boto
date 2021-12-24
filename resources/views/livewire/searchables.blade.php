


<div class="col-lg-4">
    <div class="blog_right_sidebar">
        <aside class="single_sidebar_widget search_widget">
            <div class="form-group" x-data="{keyword: ''}">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder='Search Keyword'
                           onfocus="this.placeholder = ''" wire:model="keyword"
                           onblur="this.placeholder = 'Search Keyword'">
                    <div class="input-group-append">
                        <button class="btns" type="button"><i class="ti-search"></i></button>
                    </div>
                </div>
                <button class="button rounded-0 primary-bg text-white w-100 btn_1 boxed-btn"
                        type="button" wire:click="filter">Search</button>
            </div>
        </aside>

        <aside class="single_sidebar_widget post_category_widget">
            <h4 class="widget_title">Category</h4>
            <ul class="list cat-list">
                @foreach($tags_summary as $key => $tag)
                    @if($key <= 4)
                    <li>
                        <a href="#" class="d-flex">
                            <p>{{ $tag['name'] }}</p>
                            <p>({{ $tag['count'] }})</p>
                        </a>
                    </li>
                    @endif
                @endforeach
            </ul>
        </aside>

        <aside class="single_sidebar_widget tag_cloud_widget">
            <h4 class="widget_title">Tag Clouds</h4>
            <ul class="list">
                @foreach($tags_summary as $tag)
                    <li>
                        <a href="#">{{ $tag['name'] }}</a>
                    </li>
                @endforeach
            </ul>
        </aside>

        <aside class="single_sidebar_widget popular_post_widget">
            <h3 class="widget_title">Recent Post</h3>
            @foreach($latest_upload as $upload)
                <div class="media post_item">
                    <img src="{{ $upload->header_img }}" alt="post" style="width: 60px; height: 60px">
                    <div class="media-body">
                        <a href="{{ route('blog.details', ['id'=>$upload->id, 'year'=> \Carbon\Carbon::parse($upload->created_at)->format('Y'), 'slug'=>$upload->slug ]) }}">
                            <h3>{{ $upload->title }}</h3>
                        </a>
                        <p>{{ \Carbon\Carbon::make($upload->created_at)->format('F j, Y') }}</p>
                    </div>
                </div>
            @endforeach
        </aside>

        <aside class="single_sidebar_widget newsletter_widget">
            <h4 class="widget_title">Newsletter</h4>
            <form action="#">
                <div class="form-group">
                    <input type="email" class="form-control" onfocus="this.placeholder = ''"
                           onblur="this.placeholder = 'Enter email'" placeholder='Enter email' required>
                </div>
                <button class="button rounded-0 primary-bg text-white w-100 btn_1 boxed-btn"
                        type="submit">Subscribe
                </button>
            </form>
        </aside>
    </div>
</div>
