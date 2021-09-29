<div class="col-lg-4">

    <div class="sidebar">

        <h3 class="sidebar-title">Search</h3>
        <div class="sidebar-item search-form">
            <form method="get" action="{{route('search')}}">
                <input type="text" name="s" @error('s')
                   class ="is-invalid"
                 @enderror required value="{{request()->s}}">
                <button type="submit"><i class="bi bi-search"></i></button>
            </form>
        </div><!-- End sidebar search formn-->

        <h3 class="sidebar-title">Categories</h3>
        <div class="sidebar-item categories">
            <ul>
                @foreach ($sidebar_categories as $sidebar_category)
                    <li><a href="{{ route('categories.single', ['slug' => $sidebar_category->slug]) }}">{{ $sidebar_category->title }}
                            <span>({{ $sidebar_category->posts_count }})</span></a></li>
                @endforeach


            </ul>
        </div><!-- End sidebar categories-->

        <h3 class="sidebar-title">Most Popular Posts</h3>
        <div class="sidebar-item recent-posts">

            @foreach ($popular_posts as $popular_post)
                <div class="post-item clearfix">
                    <img src="{{ $popular_post->getImage() }}" alt="">
                    <h4><a
                            href="{{ route('posts.single', ['slug' => $popular_post->slug]) }}">{{ $popular_post->title }}</a>
                    </h4>
                    <time>
                        <i class="bi bi-clock"></i>{{ $popular_post->getPostDate() }}
                        <i class="bi bi-eye"></i>{{ $popular_post->views }}
                    </time>
                </div>
            @endforeach

        </div><!-- End sidebar recent posts-->

        <h3 class="sidebar-title">Tags</h3>
        <div class="sidebar-item tags">
            <ul>
                @foreach ($sideBar_tags as $sideBar_tag)

                    @if ($sideBar_tag->posts_count > 0)
                        <li><a
                                href="{{ route('tags.single', ['slug' => $sideBar_tag->slug]) }}">{{ $sideBar_tag->title }}</a>{{ $sideBar_tag->posts_count }}
                        </li>
                    @endif

                @endforeach


            </ul>
        </div><!-- End sidebar tags-->

    </div><!-- End sidebar -->

</div><!-- End blog sidebar -->
