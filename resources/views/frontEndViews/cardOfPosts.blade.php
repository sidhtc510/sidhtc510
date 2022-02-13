<article class="entry">

    <div class="entry-img">
        <a href="{{ route('posts.single', ['slug' => $post->slug]) }}"> <img src="{{ $post->getImage() }}" alt="" class="img-fluid"> </a>
    </div>
   
    <h2 class="entry-title">
        <a href="{{ route('posts.single', ['slug' => $post->slug]) }}">{{ $post->title }}</a>
    </h2>

    <div class="entry-meta">
        <ul>
            <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href="#">User</a>
            </li>
            <li class="d-flex align-items-center"><i class="bi bi-folder"></i> <a
                    href="{{ route('categories.single', ['slug' => $post->category->slug]) }}">Category:
                    {{ $post->category->title }}</a></li>
            <li class="d-flex align-items-center"><i class="bi bi-clock"></i>
                {{ $post->getPostDate() }}
            </li>
            <li class="d-flex align-items-center"><i class="bi bi-eye"></i>Views: {{ $post->views }}
            </li>
        </ul>
    </div>

    <div class="entry-content">
        <p>
            {!! $post->description !!}
        </p>
        <div class="read-more">
            <a href="{{ route('posts.single', ['slug' => $post->slug]) }}">Read More</a>
        </div>
    </div>

</article><!-- End blog entry -->