@extends('frontEndViews.layout')


@section('content')
       
      
              <div class="row">
      
                <div class="col-lg-8 entries">
      

                    @foreach ($posts as $post)
                        <article class="entry">
      
                    <div class="entry-img">
                      <img src="{{$post->getImage()}}" alt="" class="img-fluid">
                    </div>
      
                    <h2 class="entry-title">
                      <a href="{{route('posts.single', ['slug' => $post->slug])}}">{{$post->title}}</a>
                    </h2>
      
                    <div class="entry-meta">
                      <ul>
                        <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href="#">John Doe</a></li>
                        <li class="d-flex align-items-center"><i class="bi bi-arrows-collapse"></i> <a href="#">Category: {{$post->category->title}}</a></li>
                        <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="#"><time datetime="2020-01-01">Jan 1, 2020</time></a></li>
                        <li class="d-flex align-items-center"><i class="bi bi-eye"></i> <a href="#">Views: </a></li>
                      </ul>
                    </div>
      
                    <div class="entry-content">
                      <p>
                      {!!$post->description!!}
                      </p>
                      <div class="read-more">
                        <a href="{{route('posts.single', ['slug' => $post->slug])}}">Read More</a>
                      </div>
                    </div>
      
                  </article><!-- End blog entry -->
                    @endforeach
                  
      
      
                  @include('frontEndViews.pagination')
      
                </div><!-- End blog entries list -->
      
                @include('frontEndViews.sideBar')
      
              </div>
      
            </div>
          </section><!-- End Blog Section -->
@endsection